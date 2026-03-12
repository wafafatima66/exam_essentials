@extends('instructor.master_layout')
@section('title')
    <title>{{ __('translate.My Profile') }}</title>
@endsection
@section('body-header')
    <h3 class="crancy-header__title m-0">Edit Profile</h3>
    <p class="crancy-header__text">Dashboard >> Edit Profile</p>
@endsection
@section('body-content')
    <!-- crancy Dashboard -->
    <section class="crancy-adashboard crancy-show">
        <div class="container container__bscreen">
            <div class="row">
                <div class="col-12">
                    <div class="crancy-body">
                        <!-- Dashboard Inner -->
                        <div class="crancy-dsinner">
                            <form action="{{ route('instructor.update-profile') }}" enctype="multipart/form-data" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="col-12 mg-top-30">
                                        <!-- Product Card -->
                                        <div class="crancy-product-card">
                                            <h4 class="crancy-product-card__title text-primary fw-bold">Public Information</h4>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="crancy__item-form--group mg-top-25 w-100">
                                                        <div class="crancy-product-card__upload crancy-product-card__upload--border">
                                                            <input type="file" class="btn-check" name="image" id="input-img1" autocomplete="off" onchange="reviewImage(event)">
                                                            <label class="crancy-image-video-upload__label" for="input-img1">
                                                                @if ($user->image)
                                                                <img id="view_img" src="{{ asset($user->image) }}">
                                                                @else
                                                                <img id="view_img" src="{{ asset($general_setting->placeholder_image) }}">
                                                                @endif

                                                                <h4 class="crancy-image-video-upload__title">Click here to <span class="crancy-primary-color">Choose File</span> and upload </h4>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="crancy__item-form--group mg-top-25">
                                                        <label class="crancy__item-label crancy__item-label-product">Name</label>
                                                        <input class="crancy__item-input" type="text" name="name" value="{{ html_decode($user->name) }}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="crancy__item-form--group mg-top-25">
                                                        <label class="crancy__item-label crancy__item-label-product">Email</label>
                                                        <input class="crancy__item-input" type="email" name="email" value="{{ html_decode($user->email) }}" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="crancy__item-form--group mg-top-25">
                                                        <label class="crancy__item-label crancy__item-label-product">Phone</label>
                                                        <input class="crancy__item-input" type="text" name="phone" value="{{ html_decode($user->phone) }}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="crancy__item-form--group mg-top-25">
                                                        <label class="crancy__item-label crancy__item-label-product">Address</label>
                                                        <input class="crancy__item-input" type="text" name="address" value="{{ html_decode($user->address) }}">
                                                    </div>
                                                </div>
                                            </div>

                                            <h4 class="crancy-product-card__title mg-top-30">Education Information</h4>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="crancy__item-form--group mg-top-20">
                                                        <label class="crancy__item-label crancy__item-label-product">School Name</label>
                                                        <input class="crancy__item-input" type="text" name="school_name" value="{{ html_decode($user->school_name) }}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="crancy__item-form--group mg-top-20">
                                                        <label class="crancy__item-label crancy__item-label-product">College Name</label>
                                                        <input class="crancy__item-input" type="text" name="college_name" value="{{ html_decode($user->college_name) }}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="crancy__item-form--group mg-top-20">
                                                        <label class="crancy__item-label crancy__item-label-product">Education Qualification</label>
                                                        <input class="crancy__item-input" type="text" name="education_qualification" value="{{ html_decode($user->education_qualification) }}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="crancy__item-form--group mg-top-20">
                                                        <label class="crancy__item-label crancy__item-label-product">Current University Semester</label>
                                                        <input class="crancy__item-input" type="text" name="current_university_semester" value="{{ html_decode($user->current_university_semester) }}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="crancy__item-form--group mg-top-20">
                                                        <label class="crancy__item-label crancy__item-label-product">O Level Results</label>
                                                        <input class="crancy__item-input" type="text" name="o_level_results" value="{{ html_decode($user->o_level_results) }}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="crancy__item-form--group mg-top-20">
                                                        <label class="crancy__item-label crancy__item-label-product">A Level Results</label>
                                                        <input class="crancy__item-input" type="text" name="a_level_results" value="{{ html_decode($user->a_level_results) }}">
                                                    </div>
                                                </div>
                                            </div>

                                            <h4 class="crancy-product-card__title mg-top-30">Write Your Bio</h4>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="crancy__item-form--group mg-top-25">
                                                        <label class="crancy__item-label">Experience</label>
                                                        <input class="crancy__item-input" type="text" name="instructor_experience" value="{{ html_decode($user->instructor_experience) }}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="crancy__item-form--group mg-top-25 ">
                                                        <label class="crancy__item-label crancy__item-label-product">Designation</label>
                                                        <input class="crancy__item-input" type="text" name="designation" value="{{ html_decode($user->designation) }}">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="crancy__item-form--group mg-top-25 ">
                                                        <label class="crancy__item-label crancy__item-label-product">Short Bio</label>
                                                        <textarea class="crancy__item-input crancy__item-textarea" name="about_me" id="about_me">{{ html_decode($user->about_me) }}</textarea>
                                                    </div>
                                                </div>
                                            </div>


                        <h4 class="crancy-product-card__title mg-top-30">Social Media</h4>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="crancy__item-form--group mg-top-25">
                                    <label class="crancy__item-label crancy__item-label-product">Facebook</label>
                                    <input class="crancy__item-input" type="text" name="facebook" value="{{ html_decode($user->facebook) }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="crancy__item-form--group mg-top-25">
                                    <label class="crancy__item-label crancy__item-label-product">Linkedin</label>
                                    <input class="crancy__item-input" type="text" name="linkedin" value="{{ html_decode($user->linkedin) }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="crancy__item-form--group mg-top-25">
                                    <label class="crancy__item-label crancy__item-label-product">Twitter</label>
                                    <input class="crancy__item-input" type="text" name="twitter" value="{{ html_decode($user->twitter) }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="crancy__item-form--group mg-top-25">
                                    <label class="crancy__item-label crancy__item-label-product">Instagram</label>
                                    <input class="crancy__item-input" type="text" name="instagram" value="{{ html_decode($user->instagram) }}">
                                </div>
                            </div>
                        </div>


                        <hr class="my-4">
                        <div class="crancy-product-card mg-top-30">
                            <h4 class="crancy-product-card__title text-danger fw-bold">Private Information</h4>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="crancy__item-form--group mg-top-25">
                                        <label class="crancy__item-label crancy__item-label-product">Guardian Phone</label>
                                        <input class="crancy__item-input" type="text" name="guardian_phone" value="{{ html_decode($user->guardian_phone) }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="crancy__item-form--group mg-top-25">
                                        <label class="crancy__item-label crancy__item-label-product">Date of Birth</label>
                                        <input class="crancy__item-input" type="date" name="date_of_birth" value="{{ $user->dob }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="crancy__item-form--group mg-top-form-20">
                                        <label class="crancy__item-label crancy__item-label-product">Gender</label>
                                        <select class="form-select crancy__item-input" name="gender">
                                            <option value="">Select</option>
                                            <option {{ $user->gender == 'Male' ? 'selected' : '' }} value="Male">Male</option>
                                            <option {{ $user->gender == 'Female' ? 'selected' : '' }} value="Female">Female</option>
                                            <option {{ $user->gender == 'Others' ? 'selected' : '' }} value="Others">Others</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <h4 class="crancy-product-card__title mg-top-30">Payment Information</h4>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="crancy__item-form--group mg-top-20">
                                    <label class="crancy__item-label crancy__item-label-product">Bank Account Number</label>
                                    <input class="crancy__item-input" type="text" name="bank_account_number" value="{{ html_decode($user->bank_account_number) }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="crancy__item-form--group mg-top-20">
                                    <label class="crancy__item-label crancy__item-label-product">Bkash Number</label>
                                    <input class="crancy__item-input" type="text" name="bkash_number" value="{{ html_decode($user->bkash_number) }}">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="crancy__item-form--group mg-top-20">
                                    <label class="crancy__item-label crancy__item-label-product">Personal Statement</label>
                                    <textarea class="crancy__item-input" name="personal_statement">{{ html_decode($user->personal_statement) }}</textarea>
                                </div>
                            </div>
                        </div>

                            <h4 class="crancy-product-card__title mg-top-30">Experience & Achievements</h4>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="crancy__item-form--group mg-top-20">
                                        <label class="crancy__item-label crancy__item-label-product">Teaching Experience</label>
                                        <textarea class="crancy__item-input" name="teaching_experience">{{ html_decode($user->teaching_experience) }}</textarea>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="crancy__item-form--group mg-top-20">
                                        <label class="crancy__item-label crancy__item-label-product">Educational Achievements</label>
                                        <textarea class="crancy__item-input" name="educational_achievements">{{ html_decode($user->educational_achievements) }}</textarea>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="crancy__item-form--group mg-top-20">
                                        <label class="crancy__item-label crancy__item-label-product">Notable Student Outcome</label>
                                        <textarea class="crancy__item-input" name="notable_student_outcome">{{ html_decode($user->notable_student_outcome) }}</textarea>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="crancy__item-form--group mg-top-20">
                                        <label class="crancy__item-label crancy__item-label-product">Expected Commitment</label>
                                        <input class="crancy__item-input" type="text" name="expected_commitment" value="{{ html_decode($user->expected_commitment) }}">
                                    </div>
                                </div>
                            </div>

                            <h4 class="crancy-product-card__title mg-top-30">Documents</h4>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="crancy__item-form--group mg-top-20 w-100">
                                    <label class="crancy__item-label crancy__item-label-product">Passport Photo</label>
                                    <div class="crancy-product-card__upload crancy-product-card__upload--border ">
                                        <input type="file" class="btn-check" name="passport_photo" id="input-passport" autocomplete="off" onchange="reviewPassportImage(event)">
                                        <label class="crancy-image-video-upload__label" for="input-passport">
                                            @if ($user->passport_photo)
                                                <img id="view_passport" class="passport-preview" src="{{ asset($user->passport_photo) }}">
                                            @else
                                                <img id="view_passport" src="{{ asset($general_setting->placeholder_image) }}">
                                            @endif
                                            <h4 class="crancy-image-video-upload__title">Click here to <span class="crancy-primary-color">Choose File</span> and upload </h4>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="crancy__item-form--group mg-top-20 w-100">
                                    <label class="crancy__item-label crancy__item-label-product">NID Photo</label>
                                    <div class="crancy-product-card__upload crancy-product-card__upload--border">
                                        <input type="file" class="btn-check" name="nid_photo" id="input-nid" autocomplete="off" onchange="reviewNidImage(event)">
                                        <label class="crancy-image-video-upload__label" for="input-nid">
                                            @if ($user->nid_photo)
                                                <img id="view_nid" class="nid-preview" src="{{ asset($user->nid_photo) }}">
                                            @else
                                                <img id="view_nid" class="nid-preview" src="{{ asset($general_setting->placeholder_image) }}">
                                            @endif
                                            <h4 class="crancy-image-video-upload__title">Click here to <span class="crancy-primary-color">Choose File</span> and upload </h4>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>


                                            <button class="crancy-btn mg-top-25" type="submit">Update</button>

                                        </div>
                                        <!-- End Product Card -->
                                </div>
                            </form>
                        </div>
                        <!-- End Dashboard Inner -->
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End crancy Dashboard -->
@endsection

 <style>
    .passport-preview {
        width: 300px;
        height: 300px;
        object-fit: cover;
    }
    .nid-preview {
        width: 400px;
        height: 200px;
        object-fit: cover;
    }
 </style>
 
 <style>
    .crancy__item-form--group textarea.crancy__item-input{
        min-height: 180px;
        height: 180px;
        resize: vertical;
    }
 </style>

@push('js_section')
    <script>
        "use strict";

        function reviewImage(event) {
            var reader = new FileReader();
            reader.onload = function(){
                var output = document.getElementById('view_img');
                output.src = reader.result;
            }

            reader.readAsDataURL(event.target.files[0]);
        };

        function reviewPassportImage(event) {
            var reader = new FileReader();
            reader.onload = function(){
                var output = document.getElementById('view_passport');
                output.src = reader.result;
            }
            reader.readAsDataURL(event.target.files[0]);
        };

        function reviewNidImage(event) {
            var reader = new FileReader();
            reader.onload = function(){
                var output = document.getElementById('view_nid');
                output.src = reader.result;
            }
            reader.readAsDataURL(event.target.files[0]);
        };
    </script>
@endpush
