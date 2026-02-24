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
            'email_verified_at' => date('Y-m-d H:i:s'),
            'verification_token' => null,
        ]);

        /*
        EmailHelper::mail_setup();

        $verification_link = route('student.register-verification') . '?verification_link=' . $user->verification_token . '&email=' . $user->email;
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
        */


        $notify_message = 'Account created successfully';
        $notify_message = array('message' => $notify_message, 'alert-type' => 'success');
        return redirect()->back()->with($notify_message);

    }

    public function register_verification(Request $request)
    {
        $user = User::where('verification_token', $request->verification_link)->where('email', $request->email)->first();
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
            'email_verified_at' => date('Y-m-d H:i:s'),
            'verification_token' => null,
        ]);

        /*
        EmailHelper::mail_setup();

        $verification_link = route('student.register-verification') . '?verification_link=' . $user->verification_token . '&email=' . $user->email;
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
        */

        $notify_message = trans('translate.Account created successfully');
        $notify_message = array('message' => $notify_message, 'alert-type' => 'success');
        return redirect()->route('student.login')->with($notify_message);
    }

    public function registerInstructor(Request $request)
    {
        $request->validate([
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'father_name' => ['required', 'string', 'max:255'],
            'mother_name' => ['required', 'string', 'max:255'],
            'nid' => ['nullable', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:255'],
            'date_of_birth' => ['required', 'date'],
            'education_ssc' => ['nullable', 'string', 'max:255'],
            'education_hsc' => ['nullable', 'string', 'max:255'],
            'education_bachelor' => ['nullable', 'string', 'max:255'],
            'education_master' => ['nullable', 'string', 'max:255'],
            'education_phd' => ['nullable', 'string', 'max:255'],
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
            'phone' => $request->phone,
            'dob' => $request->date_of_birth,
            'education_ssc' => $request->education_ssc,
            'education_hsc' => $request->education_hsc,
            'education_bachelor' => $request->education_bachelor,
            'education_masters' => $request->education_master,
            'education_phd' => $request->education_phd,
            'role' => 'instructor',
            'username' => Str::slug($request->first_name . ' ' . $request->last_name) . '-' . date('Ymdhis'),
            'status' => 'enable',
            'is_banned' => 'no',
            'email_verified_at' => date('Y-m-d H:i:s'),
            'verification_token' => null,
        ]);

        /*
        EmailHelper::mail_setup();

        $verification_link = route('student.register-verification') . '?verification_link=' . $user->verification_token . '&email=' . $user->email;
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
        */

        $notify_message = trans('translate.Account created successfully');
        $notify_message = array('message' => $notify_message, 'alert-type' => 'success');
        return redirect()->route('student.login')->with($notify_message);
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
