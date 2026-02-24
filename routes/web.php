<?php

use App\Models\Frontend;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

use App\Http\Controllers\Admin\UserController;

use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\DashboardController;

use Modules\GlobalSetting\App\Models\GlobalSetting;
use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\FrontEndManagementController;
use App\Http\Controllers\Admin\AdminManagementController;


use App\Http\Controllers\Auth\LoginController as StudentLoginController;
use App\Http\Controllers\Auth\RegisterController as StudentRegisterController;
use App\Http\Controllers\Student\ProfileController as StudentProfileController;
use App\Http\Controllers\Instructor\ProfileController as InstructorProfileController;

Route::group(['middleware' => ['HtmlSpecialchars', 'MaintenanceMode']], function () {

    Route::get('/', [HomeController::class, 'index'])->name('home');

    Route::get('/about-us', [HomeController::class, 'about_us'])->name('about-us');

    Route::get('/blogs', [HomeController::class, 'blogs'])->name('blogs');
    Route::get('/blog/{slug}', [HomeController::class, 'blog'])->name('blog');
    Route::post('/store-blog-comment/{id}', [HomeController::class, 'store_blog_comment'])->name('store-blog-comment');

    Route::get('/faq', [HomeController::class, 'faq'])->name('faq');

    Route::get('/privacy-policy', [HomeController::class, 'privacy_policy'])->name('privacy-policy');
    Route::get('/terms-conditions', [HomeController::class, 'terms_conditions'])->name('terms-conditions');

    Route::get('/custom-page/{slug}', [HomeController::class, 'custom_page'])->name('custom-page');

    Route::get('/contact-us', [HomeController::class, 'contact_us'])->name('contact-us');

    Route::get('/language-switcher', [HomeController::class, 'language_switcher'])->name('language-switcher');
    Route::get('/currency-switcher', [HomeController::class, 'currency_switcher'])->name('currency-switcher');


    Route::get('/download-file/{file}', [HomeController::class, 'download_file'])->name('download-file');


    Route::get('register/student', [StudentRegisterController::class, 'showStudentRegisterForm'])->name('register.student');
    Route::post('register/student', [StudentRegisterController::class, 'registerStudent'])->name('register.student.submit');
    Route::get('register/instructor', [StudentRegisterController::class, 'showInstructorRegisterForm'])->name('register.instructor');
    Route::post('register/instructor', [StudentRegisterController::class, 'registerInstructor'])->name('register.instructor.submit');

Auth::routes(['register' => false]);

    Route::group(['as' => 'student.', 'prefix' => 'student'], function () {
        Route::controller(StudentLoginController::class)->group(function () {

            Route::get('/login', 'custom_login_page')->name('login');
            Route::post('/store-login', 'store_login')->name('store-login');
            Route::get('/logout', 'student_logout')->name('logout');

            Route::get('login/google', 'redirect_to_google')->name('login-google');
            Route::get('/callback/google', 'google_callback')->name('callback-google');

            Route::get('login/facebook', 'redirect_to_facebook')->name('login-facebook');
            Route::get('/callback/facebook', 'facebook_callback')->name('callback-facebook');

            Route::get('/forget-password', 'custom_forget_page')->name('forget-password');

            Route::post('/send-forget-password', 'send_custom_forget_pass')->name('send-forget-password');
            Route::get('/reset-password', 'custom_reset_password')->name('reset-password');
            Route::post('/store-reset-password/{token}', 'store_reset_password')->name('store-reset-password');

            Route::controller(StudentRegisterController::class)->group(function () {

                Route::get('/register', 'custom_register_page')->name('register');
                Route::post('/store-register', 'store_register')->name('store-register');
                Route::get('/register-verification', 'register_verification')->name('register-verification');
            });


        });
    });


    Route::group(['as' => 'student.', 'prefix' => 'student'], function () {

        Route::group(['middleware' => 'auth:web'], function () {

            Route::get('/dashboard', [StudentProfileController::class, 'dashboard'])->name('dashboard');

            Route::get('/edit-profile', [StudentProfileController::class, 'edit_profile'])->name('edit-profile');
            Route::put('/update-profile', [StudentProfileController::class, 'update_profile'])->name('update-profile');

            Route::get('/change-password', [StudentProfileController::class, 'change_password'])->name('change-password');
            Route::put('/update-password', [StudentProfileController::class, 'update_password'])->name('update-password');


            Route::get('/become-an-instructor', [StudentProfileController::class, 'become_an_instructor'])->name('become-an-instructor');
            Route::post('/instructor-application', [StudentProfileController::class, 'instructor_application'])->name('instructor-application');

            Route::get('/account-delete', [StudentProfileController::class, 'account_delete'])->name('account-delete');
            Route::delete('/confirm-account-delete', [StudentProfileController::class, 'confirm_account_delete'])->name('confirm-account-delete');


        });

    });


    Route::group(['as' => 'instructor.', 'prefix' => 'instructor'], function () {

        Route::group(['middleware' => ['auth:web', 'CheckInstructor']], function () {

            Route::get('/dashboard', [InstructorProfileController::class, 'dashboard'])->name('dashboard');

            Route::get('/edit-profile', [InstructorProfileController::class, 'edit_profile'])->name('edit-profile');
            Route::put('/update-profile', [InstructorProfileController::class, 'update_profile'])->name('update-profile');

            Route::get('/instructor-profile', [InstructorProfileController::class, 'instructor_profile'])->name('instructor-profile');
            Route::put('/update-instructor-profile', [InstructorProfileController::class, 'update_instructor_profile'])->name('update-instructor-profile');

            Route::get('/change-password', [InstructorProfileController::class, 'change_password'])->name('change-password');
            Route::put('/update-password', [InstructorProfileController::class, 'update_password'])->name('update-password');

            Route::get('/account-delete', [InstructorProfileController::class, 'account_delete'])->name('account-delete');
            Route::delete('/confirm-account-delete', [InstructorProfileController::class, 'confirm_account_delete'])->name('confirm-account-delete');

        });


    });

});



Route::group(['as' => 'admin.', 'prefix' => 'admin'], function () {

    Route::get('login', [LoginController::class, 'custom_login_page'])->name('login');
    Route::post('store-login', [LoginController::class, 'store_login'])->name('store-login');
    Route::post('store-register', [LoginController::class, 'store_register'])->name('store-register');
    Route::post('logout', [LoginController::class, 'admin_logout'])->name('logout');


    Route::group(['middleware' => ['auth:admin']], function () {

        Route::get('/', [DashboardController::class, 'dashboard']);
        Route::get('dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');

        Route::controller(ProfileController::class)->group(function () {
            Route::get('edit-profile', 'edit_profile')->name('edit-profile');
            Route::put('profile-update', 'profile_update')->name('profile-update');
            Route::put('update-password', 'update_password')->name('update-password');
        });

        Route::controller(UserController::class)->group(function () {
            Route::get('user-list', 'user_list')->name('user-list');
            Route::get('pending-user', 'pending_user')->name('pending-user');
            Route::get('user-show/{id}', 'user_show')->name('user-show');
            Route::delete('user-delete/{id}', 'user_destroy')->name('user-delete');
            Route::put('user-status/{id}', 'user_status')->name('user-status');
            Route::put('user-update/{id}', 'update')->name('user-update');

            Route::get('seller-list', 'seller_list')->name('seller-list');
            Route::get('pending-seller', 'pending_seller')->name('pending-seller');
            Route::get('seller-show/{id}', 'seller_show')->name('seller-show');

            Route::get('seller-joining-request', 'seller_joining_request')->name('seller-joining-request');
            Route::get('seller-joining-detail/{id}', 'seller_joining_detail')->name('seller-joining-detail');
            Route::put('seller-joining-approval/{id}', 'seller_joining_approval')->name('seller-joining-approval');
            Route::put('seller-joining-reject/{id}', 'seller_joining_reject')->name('seller-joining-reject');

        });

        // Frontend Management
        Route::controller(FrontEndManagementController::class)->name('front-end.')->group(function () {
            Route::get('/frontend-section', 'index')->name('frontend-section');
            Route::get('/section/{id}', 'section')->name('section');
            Route::put('store/{key}/{id?}', 'store')->name('store');
        });

        Route::resource('admin-list', AdminManagementController::class);


    });


});




Route::get('/migrate', function () {

    // Artisan::call('migrate');

    $version_setting = GlobalSetting::where('key', 'app_version')->first();
    if ($version_setting) {
        $version_setting->value = '2.0.0';
        $version_setting->save();
    }

    $find_item1 = Frontend::where('data_keys', 'home5_hero_section.content')->first();
    if (!$find_item1) {
        Frontend::create([
            'data_keys' => 'home5_hero_section.content',
            'data_values' => [
                "heading" => "100% Satisfaction Gaurantee",
                "heading_two" => "Growup Your Learning",
                "heading_three" => "Skills with Educve",
                "description" => "<span>Educve</span> the ultimate destination for knowledge seekers and educators alike. We are committed to transforming education",
                "average_rating" => "5.0",
                "total_rating" => "1k+",
                "total_rating_title" => "Students learn daily with educate platform",
                "total_instructor" => "130",
                "images" => [
                    "feature_image" => "uploads/website-images/1753505106_feature_image.png",
                    "instructor_image" => "uploads/website-images/1753505106_instructor_image.png"
                ]
            ],
            'data_translations' => json_encode([
                [
                    "language_code" => "en",
                    "values" => [
                        "heading" => "100% Satisfaction Gaurantee",
                        "heading_two" => "Growup Your Learning",
                        "heading_three" => "Skills with Educve",
                        "description" => "<span>Educve</span> the ultimate destination for knowledge seekers and educators alike. We are committed to transforming education",
                        "average_rating" => "5.0",
                        "total_rating" => "1k+",
                        "total_rating_title" => "Students learn daily with educate platform",
                        "total_instructor" => "130"
                    ]
                ]
            ]),
        ]);
    }

    $find_item2 = Frontend::where('data_keys', 'home5_key_feature.content')->first();
    if (!$find_item2) {
        Frontend::create([
            'data_keys' => 'home5_key_feature.content',
            'data_values' => [
                "section_short_title" => "core features",
                "section_title" => "Interactive Online Learning Key Features & Benefits",
                "item_one_title" => "Learning Experiences",
                "item_one_description" => "The ultimate destination for knowledge for We are committed to transforming",
                "item_two_title" => "Professional Instructor",
                "item_two_description" => "The ultimate destination for knowledge for We are committed to transforming",
                "item_three_title" => "Moneyback Gaurantee",
                "item_three_description" => "The ultimate destination for knowledge for We are committed to transforming",
                "item_one_image" => [],
                "item_two_image" => [],
                "item_three_image" => [],
                "images" => [
                    "item_one_image" => "uploads/website-images/1753505829_item_one_image.png",
                    "item_two_image" => "uploads/website-images/1753505829_item_two_image.png",
                    "item_three_image" => "uploads/website-images/1753505829_item_three_image.png"
                ]
            ],
            'data_translations' => json_encode([
                [
                    "language_code" => "en",
                    "values" => [
                        "section_short_title" => "core features",
                        "section_title" => "Interactive Online Learning Key Features & Benefits",
                        "item_one_title" => "Learning Experiences",
                        "item_one_description" => "The ultimate destination for knowledge for We are committed to transforming",
                        "item_two_title" => "Professional Instructor",
                        "item_two_description" => "The ultimate destination for knowledge for We are committed to transforming",
                        "item_three_title" => "Moneyback Gaurantee",
                        "item_three_description" => "The ultimate destination for knowledge for We are committed to transforming",
                        "item_one_image" => [],
                        "item_two_image" => [],
                        "item_three_image" => []
                    ]
                ]
            ]),
        ]);
    }

    $find_item3 = Frontend::where('data_keys', 'home5_about_us.content')->first();
    if (!$find_item3) {
        Frontend::create([
            'data_keys' => 'home5_about_us.content',
            'data_values' => [
                "short_title" => "ABOUT US",
                "title" => "Who We Are – Introduction to Educate Online Platform",
                "description" => "Educve the ultimate destination for knowledge seekers and educators alike. We are committed to transforming special education impact global channels without standards compliant systems",
                "item_one" => "Innovative Learning System",
                "item_two" => "Worldwide Intelligent Learner",
                "total_instructor" => "30",
                "total_instructor_title" => "Expert and Professional all Instructor",
                "enrolled_student" => "6",
                "enrolled_student_title" => "Enrolled Students all Over the World",
                "images" => [
                    "feature_image" => "uploads/website-images/1753506380_feature_image.png"
                ]
            ],
            'data_translations' => json_encode([
                [
                    "language_code" => "en",
                    "values" => [
                        "short_title" => "ABOUT US",
                        "title" => "Who We Are – Introduction to Educate Online Platform",
                        "description" => "Educve the ultimate destination for knowledge seekers and educators alike. We are committed to transforming special education impact global channels without standards compliant systems",
                        "item_one" => "Innovative Learning System",
                        "item_two" => "Worldwide Intelligent Learner",
                        "total_instructor" => "30",
                        "total_instructor_title" => "Expert and Professional all Instructor",
                        "enrolled_student" => "6",
                        "enrolled_student_title" => "Enrolled Students all Over the World"
                    ]
                ]
            ]),
        ]);
    }

    $find_item4 = Frontend::where('data_keys', 'home5_why_choose_us.content')->first();
    if (!$find_item4) {
        Frontend::create([
            'data_keys' => 'home5_why_choose_us.content',
            'data_values' => [
                "short_title" => "why choose us?",
                "title" => "Innovative and effective learning approaches",
                "description" => "Educate the ultimate destination for knowledge seekers and educators alike. We are committed to transforming special education impact global channels without standards compliant systems",
                "item_one" => "Course Management",
                "item_two" => "Students Progress Tracking",
                "item_three" => "Interactive Live Class",
                "item_four" => "Quiz and Assignments",
                "experience_year" => "26",
                "experience_title" => "Years of Experiences",
                "support_title" => "24/7 Hrs Ready to our support team",
                "feature_image" => [],
                "images" => [
                    "feature_image" => "uploads/website-images/1753512886_feature_image.png"
                ]
            ],
            'data_translations' => json_encode([
                [
                    "language_code" => "en",
                    "values" => [
                        "short_title" => "why choose us?",
                        "title" => "Innovative and effective learning approaches",
                        "description" => "Educate the ultimate destination for knowledge seekers and educators alike. We are committed to transforming special education impact global channels without standards compliant systems",
                        "item_one" => "Course Management",
                        "item_two" => "Students Progress Tracking",
                        "item_three" => "Interactive Live Class",
                        "item_four" => "Quiz and Assignments",
                        "experience_year" => "26",
                        "experience_title" => "Years of Experiences",
                        "support_title" => "24/7 Hrs Ready to our support team",
                        "feature_image" => []
                    ]
                ]
            ]),
        ]);
    }

    $find_item5 = Frontend::where('data_keys', 'home5_course_design_offer.content')->first();
    if (!$find_item5) {
        Frontend::create([
            'data_keys' => 'home5_course_design_offer.content',
            'data_values' => [
                "category_name" => "Designing",
                "title" => "Creative Graphic Design",
                "title_two" => "With Adobe Suite",
                "youtube_video_id" => "Wx48y_fOfiY",
                "rating" => "3",
                "average_rating" => "4.5",
                "price" => "60",
                "offer_price" => "35",
                "discount" => "10",
                "enroll_now" => "Enroll Now",
                "enroll_link" => "http://localhost/qmsoft/educve_laravel/course/learn-coding-advance-your-skills-up",
                "feature_image" => [],
                "video_image" => [],
                "images" => [
                    "feature_image" => "uploads/website-images/1753513526_feature_image.png",
                    "video_image" => "uploads/website-images/1753513526_video_image.png"
                ]
            ],
            'data_translations' => json_encode([
                [
                    "language_code" => "en",
                    "values" => [
                        "category_name" => "Designing",
                        "title" => "Creative Graphic Design",
                        "title_two" => "With Adobe Suite",
                        "youtube_video_id" => "Wx48y_fOfiY",
                        "rating" => "3",
                        "average_rating" => "4.5",
                        "price" => "60",
                        "offer_price" => "35",
                        "discount" => "10",
                        "enroll_now" => "Enroll Now",
                        "enroll_link" => "http://localhost/qmsoft/educve_laravel/course/learn-coding-advance-your-skills-up",
                        "feature_image" => [],
                        "video_image" => []
                    ]
                ]
            ]),
        ]);
    }

    $find_item6 = Frontend::where('data_keys', 'home5_testimonials.content')->first();
    if (!$find_item6) {
        Frontend::create([
            'data_keys' => 'home5_testimonials.content',
            'data_values' => [
                "title" => "TESTIMONIALS",
                "title_two" => "Real Experiences From Our Dedicated Learners",
                "feature_image" => [],
                "images" => [
                    "feature_image" => "uploads/website-images/1753515215_feature_image.png"
                ]
            ],
            'data_translations' => json_encode([
                [
                    "language_code" => "en",
                    "values" => [
                        "title" => "TESTIMONIALS",
                        "title_two" => "Real Experiences From Our Dedicated Learners",
                        "feature_image" => []
                    ]
                ]
            ]),
        ]);
    }

    $find_item7 = Frontend::where('data_keys', 'home6_hero_section.content')->first();
    if (!$find_item7) {
        Frontend::create([
            'data_keys' => 'home6_hero_section.content',
            'data_values' => [
                "title" => "Welcome to Online Education",
                "title_two" => "Explore <span>2300+</span>",
                "title_three" => "Best Online Courses",
                "title_four" => "from Educate",
                "total_student_title" => "15k Students",
                "feature_image_title" => "ui / ux designer",
                "total_course_title" => "3020 Online Courses",
                "total_membership_title" => "6,000 Membership",
                "online_certification_title" => "Online Certifications",
                "youtube_video_id" => "Wx48y_fOfiY",
                "images" => [
                    "feature_image" => "uploads/website-images/1753542077_feature_image.png",
                    "total_student_image" => "uploads/website-images/1753542077_total_student_image.png"
                ]
            ],
            'data_translations' => json_encode([
                [
                    "language_code" => "en",
                    "values" => [
                        "title" => "Welcome to Online Education",
                        "title_two" => "Explore <span>2300+</span>",
                        "title_three" => "Best Online Courses",
                        "title_four" => "from Educate",
                        "total_student_title" => "15k Students",
                        "feature_image_title" => "ui / ux designer",
                        "total_course_title" => "3020 Online Courses",
                        "total_membership_title" => "6,000 Membership",
                        "online_certification_title" => "Online Certifications",
                        "youtube_video_id" => "Wx48y_fOfiY"
                    ]
                ]
            ]),
        ]);
    }

    $find_item8 = Frontend::where('data_keys', 'home6_about_us.content')->first();
    if (!$find_item8) {
        Frontend::create([
            'data_keys' => 'home6_about_us.content',
            'data_values' => [
                "short_title" => "about our educate",
                "title" => "Tools and Techniques for",
                "title_two" => "Online <span>Teaching</span>",
                "description" => "Experience future of learning our education-focused backgroudn to courses pro designed to and empower learners courses combine teaching tools.",
                "item_one_title" => "Flexible Classes",
                "item_one_description" => "Experience future of learning our education-focused courses combine teaching tools.",
                "total_instructor" => "130",
                "total_instructor_title" => "Expert Instructor",
                "feature_image_one" => [],
                "feature_image_two" => [],
                "instructor_image" => [],
                "images" => [
                    "feature_image_one" => "uploads/website-images/1753543281_feature_image_one.png",
                    "feature_image_two" => "uploads/website-images/1753543281_feature_image_two.png",
                    "instructor_image" => "uploads/website-images/1753543281_instructor_image.png"
                ]
            ],
            'data_translations' => json_encode([
                [
                    "language_code" => "en",
                    "values" => [
                        "short_title" => "about our educate",
                        "title" => "Tools and Techniques for",
                        "title_two" => "Online <span>Teaching</span>",
                        "description" => "Experience future of learning our education-focused backgroudn to courses pro designed to and empower learners courses combine teaching tools.",
                        "item_one_title" => "Flexible Classes",
                        "item_one_description" => "Experience future of learning our education-focused courses combine teaching tools.",
                        "total_instructor" => "130",
                        "total_instructor_title" => "Expert Instructor",
                        "feature_image_one" => [],
                        "feature_image_two" => [],
                        "instructor_image" => []
                    ]
                ]
            ]),
        ]);
    }

    $find_item9 = Frontend::where('data_keys', 'home6_testimonials.content')->first();
    if (!$find_item9) {
        Frontend::create([
            'data_keys' => 'home6_testimonials.content',
            'data_values' => [
                "feature_image" => [],
                "images" => [
                    "feature_image" => "uploads/website-images/1753545290_feature_image.png"
                ]
            ],
            'data_translations' => json_encode([
                [
                    "language_code" => "en",
                    "values" => [
                        "feature_image" => []
                    ]
                ]
            ]),
        ]);
    }

    Artisan::call('optimize:clear');

    $notification = trans('Version updated successful');
    $notification = array('messege' => $notification, 'alert-type' => 'success');
    return redirect()->route('home')->with($notification);

})->name('migrate-for-version');
