<?php

namespace App\Http\Controllers\Auth;

use Exception;
use Mail, Str;
use App\Models\User;
use App\Rules\Captcha;
use App\Helper\EmailHelper;
use Illuminate\Http\Request;
use App\Mail\UserRegistration;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Modules\EmailSetting\App\Models\EmailTemplate;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:web');
    }

    public function custom_register_page()
    {

        $breadcrumb_title = trans('translate.Sign Up');

        return view('auth.register', [
            'breadcrumb_title' => $breadcrumb_title
        ]);
    }


    public function store_register(Request $request)
    {

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'confirmed', 'min:4', 'max:100'],
            'g-recaptcha-response' => new Captcha()

        ], [
            'name.required' => trans('translate.Name is required'),
            'email.required' => trans('translate.Email is required'),
            'email.unique' => trans('translate.Email already exist'),
            'password.required' => trans('translate.Password is required'),
            'password.confirmed' => trans('translate.Confirm password does not match'),
            'password.min' => trans('translate.You have to provide minimum 4 character password'),
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'username' => Str::slug($request->name) . '-' . date('Ymdhis'),
            'status' => 'enable',
            'is_banned' => 'no',
            'password' => Hash::make($request->password),
            'email_verified_at' => null,
            'verification_token' => Str::random(50),
        ]);

        EmailHelper::mail_setup();

        $verification_link = route('student.register-verification', ['verification_link' => $user->verification_token, 'email' => $user->email]);
        $verification_link = '<a href="' . $verification_link . '">' . $verification_link . '</a>';

        try {
            $template = EmailTemplate::where('id', 4)->first();
            $subject = $template->subject;
            $message = $template->description;
            $message = str_replace('{{user_name}}', $request->name, $message);
            $message = str_replace('{{varification_link}}', $verification_link, $message);

            Mail::to($user->email)->send(new UserRegistration($message, $subject, $user));
        } catch (Exception $ex) {
            Log::info('Register mail : ' . $ex->getMessage());
        }

        $notify_message = 'A verification link has been sent to your email, please verify your email to login';
        $notify_message = array('message' => $notify_message, 'alert-type' => 'success');
        return redirect()->back()->with($notify_message);

    }

    public function register_verification(Request $request)
    {
        $user = User::where('verification_token', $request->verification_link)->where('email', 'LIKE', $request->email)->first();
        if ($user) {

            if ($user->email_verified_at != null) {

                $notify_message = trans('translate.Email already verified');
                $notify_message = array('message' => $notify_message, 'alert-type' => 'error');
                return redirect()->route('student.login')->with($notify_message);
            }

            $user->email_verified_at = date('Y-m-d H:i:s');
            $user->verification_token = null;
            $user->save();

            $notify_message = trans('translate.Verification Successfully');
            $notify_message = array('message' => $notify_message, 'alert-type' => 'success');
            return redirect()->route('student.login')->with($notify_message);
        } else {

            $notify_message = trans('translate.Invalid token or email');
            $notify_message = array('message' => $notify_message, 'alert-type' => 'error');
            return redirect()->route('student.login')->with($notify_message);
        }
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    public function showStudentRegisterForm()
    {
        $breadcrumb_title = trans('translate.Student Registration');
        return view('auth.register_student', compact('breadcrumb_title'));
    }

    public function showInstructorRegisterForm()
    {
        $breadcrumb_title = trans('translate.Instructor Registration');
        return view('auth.register_instructor', compact('breadcrumb_title'));
    }

    public function registerStudent(Request $request)
    {
        $request->validate([
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'father_name' => ['required', 'string', 'max:255'],
            'mother_name' => ['required', 'string', 'max:255'],
            'nid' => ['nullable', 'string', 'max:255'],
            'date_of_birth' => ['required', 'date'],
        ]);

        $user = User::create([
            'name' => $request->first_name . ' ' . $request->last_name,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'father_name' => $request->father_name,
            'mother_name' => $request->mother_name,
            'nid' => $request->nid,
            'dob' => $request->date_of_birth,
            'role' => 'student',
            'username' => Str::slug($request->first_name . ' ' . $request->last_name) . '-' . date('Ymdhis'),
            'status' => 'enable',
            'is_banned' => 'no',
            'email_verified_at' => null,
            'verification_token' => Str::random(50),
        ]);

        EmailHelper::mail_setup();

        $verification_link = route('student.register-verification', ['verification_link' => $user->verification_token, 'email' => $user->email]);
        $verification_link = '<a href="' . $verification_link . '">' . $verification_link . '</a>';

        try {
            $template = EmailTemplate::where('id', 4)->first();
            $subject = $template->subject;
            $message = $template->description;
            $message = str_replace('{{user_name}}', $user->name, $message);
            $message = str_replace('{{varification_link}}', $verification_link, $message);

            Mail::to($user->email)->send(new UserRegistration($message, $subject, $user));
        } catch (Exception $ex) {
            Log::info('Register mail : ' . $ex->getMessage());
        }

        $notify_message = 'A verification link has been sent to your email, please verify your email to login';
        $notify_message = array('message' => $notify_message, 'alert-type' => 'success');
        // show verification notice on registration page rather than redirecting to login
        return redirect()->route('student.register')->with($notify_message);
    }

    public function registerInstructor(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'phone' => ['required', 'string', 'max:255'],
            'guardian_phone' => ['required', 'string', 'max:255'],
            'date_of_birth' => ['required', 'date'],
            'school_name' => ['nullable', 'string', 'max:255'],
            'college_name' => ['nullable', 'string', 'max:255'],
            'education_qualification' => ['nullable', 'string', 'max:255'],
            'o_level_results' => ['nullable', 'string', 'max:255'],
            'a_level_results' => ['nullable', 'string', 'max:255'],
            'current_university_semester' => ['nullable', 'string', 'max:255'],
            'teaching_experience' => ['nullable', 'string'],
            'educational_achievements' => ['nullable', 'string'],
            'notable_student_outcome' => ['nullable', 'string'],
            'expected_commitment' => ['nullable', 'string', 'max:255'],
            'bank_account_number' => ['nullable', 'string', 'max:255'],
            'bkash_number' => ['nullable', 'string', 'max:255'],
            'personal_statement' => ['nullable', 'string'],
            'passport_photo' => ['nullable', 'image', 'max:2048'],
            'nid_photo' => ['nullable', 'image', 'max:2048'],
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->phone = $request->phone;
        $user->guardian_phone = $request->guardian_phone;
        $user->dob = $request->date_of_birth;
        $user->school_name = $request->school_name;
        $user->college_name = $request->college_name;
        $user->education_qualification = $request->education_qualification;
        $user->o_level_results = $request->o_level_results;
        $user->a_level_results = $request->a_level_results;
        $user->current_university_semester = $request->current_university_semester;
        $user->teaching_experience = $request->teaching_experience;
        $user->educational_achievements = $request->educational_achievements;
        $user->notable_student_outcome = $request->notable_student_outcome;
        $user->expected_commitment = $request->expected_commitment;
        $user->bank_account_number = $request->bank_account_number;
        $user->bkash_number = $request->bkash_number;
        $user->personal_statement = $request->personal_statement;
        $user->role = 'instructor';
        $user->username = Str::slug($request->name) . '-' . date('Ymdhis');
        $user->status = 'enable';
        $user->is_banned = 'no';
        $user->is_seller = 0;
        $user->instructor_joining_request = 'pending';
        $user->email_verified_at = null;
        $user->verification_token = Str::random(50);

        if ($request->hasFile('passport_photo')) {
            $extention = $request->passport_photo->getClientOriginalExtension();
            $image_name = 'passport-photo' . date('-Y-m-d-h-i-s-') . rand(999, 9999) . '.' . $extention;
            $image_name = 'uploads/custom-files/' . $image_name;
            $request->passport_photo->move(public_path('uploads/custom-files/'), $image_name);
            $user->passport_photo = $image_name;
        }

        if ($request->hasFile('nid_photo')) {
            $extention = $request->nid_photo->getClientOriginalExtension();
            $image_name = 'nid-photo' . date('-Y-m-d-h-i-s-') . rand(999, 9999) . '.' . $extention;
            $image_name = 'uploads/custom-files/' . $image_name;
            $request->nid_photo->move(public_path('uploads/custom-files/'), $image_name);
            $user->nid_photo = $image_name;
        }

        $user->save();

        EmailHelper::mail_setup();

        $verification_link = route('student.register-verification', ['verification_link' => $user->verification_token, 'email' => $user->email]);
        $verification_link = '<a href="' . $verification_link . '">' . $verification_link . '</a>';

        try {
            $template = EmailTemplate::where('id', 4)->first();
            $subject = $template->subject;
            $message = $template->description;
            $message = str_replace('{{user_name}}', $user->name, $message);
            $message = str_replace('{{varification_link}}', $verification_link, $message);

            Mail::to($user->email)->send(new UserRegistration($message, $subject, $user));
        } catch (Exception $ex) {
            Log::info('Register mail : ' . $ex->getMessage());
        }

        return redirect()->route('instructor.pending.approval');
    }

    public function instructorPendingApproval()
    {
        $breadcrumb_title = trans('translate.Registration Pending');
        return view('auth.instructor_pending', compact('breadcrumb_title'));
    }



    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
