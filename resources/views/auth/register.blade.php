@extends('layout')

@section('title')
    <title>{{ __('translate.Sign Up') }}</title>
@endsection

@section('front-content')
@include('breadcrumb')

<section class="auth-section py-5" style="padding-top: 100px;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10">
                
                {{-- Auth Card --}}
                <div class="card shadow-sm p-4 text-center">

                    {{-- Heading --}}
                    <h2 class="mb-3">{{ __('translate.Sign Up') }}</h2>
                    <p class="text-muted mb-4">{{ __('translate.Please select your role to continue') }}</p>

                    {{-- flash alert --}}
                    @if (Session::has('message'))
                        <div class="alert alert-{{ Session::get('alert-type', 'info') == 'success' ? 'success' : (Session::get('alert-type') == 'error' ? 'danger' : 'info') }} alert-dismissible fade show mb-4" role="alert">
                            {{ Session::get('message') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    {{-- Role Selection --}}
                    <div class="role-selector" id="signup-role-selector">
                        <div class="role-option">
                            <input type="radio" id="signup_student" name="signup_role" value="student" checked>
                            <label for="signup_student">
                                <i class="fa-solid fa-user-graduate"></i>
                                {{ __('translate.Student') }}
                            </label>
                        </div>
                        <div class="role-option">
                            <input type="radio" id="signup_instructor" name="signup_role" value="instructor">
                            <label for="signup_instructor">
                                <i class="fa-solid fa-chalkboard-user"></i>
                                {{ __('translate.Instructor') }}
                            </label>
                        </div>
                    </div>

                    <div id="signup-student-form">
                        @include('auth.register_student_partial')
                    </div>
                    <div id="signup-instructor-form" class="d-none">
                        @include('auth.register_instructor_partial')
                    </div>

                    {{-- Login Redirect --}}
                    <div class="mt-4">
                        <p class="mb-0">
                            {{ __('translate.Already Have an Account?') }}
                            <a href="{{ route('student.login') }}" class="fw-semibold text-primary">
                                {{ __('translate.Sign In') }}
                            </a>
                        </p>
                    </div>

                </div>
                
            </div>
        </div>
    </div>
</section>

@push('style_section')
<style>
    .role-selector {
        display: flex;
        gap: 15px;
        margin-bottom: 30px;
    }
    .role-option {
        flex: 1;
        position: relative;
    }
    .role-option input[type="radio"] {
        position: absolute;
        opacity: 0;
        cursor: pointer;
        height: 100%;
        width: 100%;
        z-index: 1;
    }
    .role-option label {
        display: block;
        padding: 15px;
        border: 2px solid #e5e5e5;
        border-radius: 10px;
        text-align: center;
        cursor: pointer;
        transition: all 0.3s ease;
        font-weight: 600;
        color: #555;
        background: #fff;
    }
    .role-option input[type="radio"]:checked + label {
        border-color: var(--td-primary-color, #0A58CA);
        background-color: rgba(10, 88, 202, 0.05);
        color: var(--td-primary-color, #0A58CA);
    }
    .role-option label:hover {
        border-color: #ccc;
    }
    .role-option i {
        font-size: 24px;
        display: block;
        margin-bottom: 8px;
    }

    /* Adjust heading/icon colors if needed */
    h2 {
        color: #074473;
    }

    /* Section container for forms */
    .form-section {
        padding: 20px;
        background: #f9f9f9;
        border: 1px solid #e0e0e0;
        border-radius: 8px;
        margin-bottom: 20px;
    }
    .form-section h5 {
        margin-bottom: 1rem;
        color: #333;
    }
</style>
@endpush

@push('js_section')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const signupRadios = document.querySelectorAll('input[name="signup_role"]');
        const studentForm = document.getElementById('signup-student-form');
        const instructorForm = document.getElementById('signup-instructor-form');

        signupRadios.forEach(radio => {
            radio.addEventListener('change', function () {
                if (this.value === 'student') {
                    studentForm.classList.remove('d-none');
                    instructorForm.classList.add('d-none');
                } else {
                    instructorForm.classList.remove('d-none');
                    studentForm.classList.add('d-none');
                }
            });
        });
    });
</script>
@endpush

@endsection
