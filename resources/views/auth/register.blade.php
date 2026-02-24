@extends('layout_inner_page')

@section('title')
    <title>{{ __('translate.Sign Up') }}</title>
@endsection

@section('front-content')

@include('breadcrumb')

<section>
    <div class="td_height_100 td_height_lg_50"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="td_form_card td_style_1 td_radius_10 td_gray_bg_5 text-center p-5">
                    <h2 class="td_fs_36 td_mb_30">{{ __('translate.Sign Up') }}</h2>
                    <p class="td_mb_50">{{ __('translate.Please select your role to continue') }}</p>
                    
                    <div class="row justify-content-center">
                        <div class="col-md-5 td_mb_30">
                            <div class="td_role_card td_white_bg td_radius_10 td_p_40 td_style_1 h-100 d-flex flex-column align-items-center justify-content-center box-shadow">
                                <div class="td_mb_20">
                                    <i class="fa-solid fa-chalkboard-user td_fs_50 td_accent_color"></i>
                                </div>
                                <h3 class="td_fs_24 td_mb_15">{{ __('translate.Instructor') }}</h3>
                                <p class="td_mb_30">{{ __('translate.Register as an instructor to create courses and teach students.') }}</p>
                                <a href="{{ route('register.instructor') }}" class="td_btn td_style_1 td_radius_30 td_medium">
                                    <span class="td_btn_in td_white_color td_accent_bg">
                                        <span>{{ __('translate.Join as Instructor') }}</span>
                                    </span>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-5 td_mb_30">
                            <div class="td_role_card td_white_bg td_radius_10 td_p_40 td_style_1 h-100 d-flex flex-column align-items-center justify-content-center box-shadow">
                                <div class="td_mb_20">
                                    <i class="fa-solid fa-graduation-cap td_fs_50 td_accent_color"></i>
                                </div>
                                <h3 class="td_fs_24 td_mb_15">{{ __('translate.Student') }}</h3>
                                <p class="td_mb_30">{{ __('translate.Register as a student to enroll in courses and start learning.') }}</p>
                                <a href="{{ route('register.student') }}" class="td_btn td_style_1 td_radius_30 td_medium">
                                    <span class="td_btn_in td_white_color td_accent_bg">
                                        <span>{{ __('translate.Join as Student') }}</span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="text-center mt-4">
                        <p class="mb-0">{{ __('translate.Already Have an Account?') }} <a href="{{ route('student.login') }}" class="fw-bold td_accent_color">{{ __('translate.Sign In') }}</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="td_height_100 td_height_lg_50"></div>
</section>

@push('style_section')
<style>
    .td_role_card {
        transition: all 0.3s ease;
        border: 1px solid transparent;
        box-shadow: 0 5px 20px rgba(0,0,0,0.05);
    }
    .td_role_card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        border-color: var(--td-primary-color, #0A58CA);
    }
    .td_role_card i {
        color: var(--td-primary-color, #0A58CA);
    }
</style>
@endpush

@endsection
