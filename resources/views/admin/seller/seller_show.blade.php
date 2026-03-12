    <!-- Static Info Modal -->
    <div class="modal fade" id="staticInfoModal" tabindex="-1" aria-labelledby="staticInfoModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticInfoModalLabel">Instructor Static Information</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-4 text-center mb-4 pb-3 border-bottom">
                            @if ($user->image)
                                <img src="{{ asset($user->image) }}" alt="thumb" class="img-fluid rounded-circle mb-3" style="max-width: 120px;">
                            @else
                                <img src="{{ asset($general_setting->default_avatar) }}" alt="thumb" class="img-fluid rounded-circle mb-3" style="max-width: 120px;">
                            @endif
                            <h5>{{ html_decode($user->name) }}</h5>
                            <p class="text-muted mb-3">{{ html_decode($user->designation) }}</p>
                            <div class="crancy__item-form--group mg-top-form-20">
                                <label class="crancy__item-label">Status</label>
                                <p class="mt-2">{{ $user->status == 'enable' ? 'Enabled' : 'Disabled' }}</p>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="row">
                                <div class="col-12 mb-4">
                                    <h6 class="fw-bold pb-2 mb-3" style="border-bottom: 2px solid #f0f0f0;">Contact Information</h6>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="crancy__item-form--group mg-top-form-20">
                                        <label class="crancy__item-label">Email</label>
                                        <p class="mt-2">{{ html_decode($user->email) }}</p>
                                    </div>
                                    <div class="crancy__item-form--group mg-top-form-20">
                                        <label class="crancy__item-label">Phone</label>
                                        <p class="mt-2">{{ html_decode($user->phone) }}</p>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="crancy__item-form--group mg-top-form-20">
                                        <label class="crancy__item-label">Address</label>
                                        <p class="mt-2">{{ html_decode($user->address) }}</p>
                                    </div>
                                    <div class="crancy__item-form--group mg-top-form-20">
                                        <label class="crancy__item-label">Gender</label>
                                        <p class="mt-2">{{ html_decode($user->gender) }}</p>
                                    </div>
                                </div>

                                <div class="col-12 mb-4 mt-2">
                                    <h6 class="fw-bold pb-2 mb-3" style="border-bottom: 2px solid #f0f0f0;">Education Information</h6>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="crancy__item-form--group mg-top-form-20">
                                        <label class="crancy__item-label">School Name</label>
                                        <p class="mt-2">{{ html_decode($user->school_name) }}</p>
                                    </div>
                                    <div class="crancy__item-form--group mg-top-form-20">
                                        <label class="crancy__item-label">College Name</label>
                                        <p class="mt-2">{{ html_decode($user->college_name) }}</p>
                                    </div>
                                    <div class="crancy__item-form--group mg-top-form-20">
                                        <label class="crancy__item-label">Education Qualification</label>
                                        <p class="mt-2">{{ html_decode($user->education_qualification) }}</p>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="crancy__item-form--group mg-top-form-20">
                                        <label class="crancy__item-label">Current University Semester</label>
                                        <p class="mt-2">{{ html_decode($user->current_university_semester) }}</p>
                                    </div>
                                    <div class="crancy__item-form--group mg-top-form-20">
                                        <label class="crancy__item-label">O Level Results</label>
                                        <p class="mt-2">{{ html_decode($user->o_level_results) }}</p>
                                    </div>
                                    <div class="crancy__item-form--group mg-top-form-20">
                                        <label class="crancy__item-label">A Level Results</label>
                                        <p class="mt-2">{{ html_decode($user->a_level_results) }}</p>
                                    </div>
                                </div>

                                <div class="col-12 mb-4 mt-2">
                                    <h6 class="fw-bold pb-2 mb-3" style="border-bottom: 2px solid #f0f0f0;">Bio & Profile</h6>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="crancy__item-form--group mg-top-form-20">
                                        <label class="crancy__item-label">Experience</label>
                                        <p class="mt-2">{{ html_decode($user->instructor_experience) }}</p>
                                    </div>
                                    <div class="crancy__item-form--group mg-top-form-20">
                                        <label class="crancy__item-label">Designation</label>
                                        <p class="mt-2">{{ html_decode($user->designation) }}</p>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="crancy__item-form--group mg-top-form-20">
                                        <label class="crancy__item-label">Teaching Experience</label>
                                        <p class="mt-2">{{ html_decode($user->teaching_experience) }}</p>
                                    </div>
                                </div>
                                <div class="col-12 mb-4">
                                    <div class="crancy__item-form--group mg-top-form-20">
                                        <label class="crancy__item-label">Short Bio</label>
                                        <p class="mt-2">{{ html_decode($user->about_me) }}</p>
                                    </div>
                                </div>

                                <div class="col-12 mb-4 mt-2">
                                    <h6 class="fw-bold pb-2 mb-3" style="border-bottom: 2px solid #f0f0f0;">Social Media</h6>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="crancy__item-form--group mg-top-form-20">
                                        <label class="crancy__item-label">Facebook</label>
                                        <p class="mt-2">
                                            @if($user->facebook)
                                                <a href="{{ $user->facebook }}" target="_blank">{{ $user->facebook }}</a>
                                            @else
                                                N/A
                                            @endif
                                        </p>
                                    </div>
                                    <div class="crancy__item-form--group mg-top-form-20">
                                        <label class="crancy__item-label">Linkedin</label>
                                        <p class="mt-2">
                                            @if($user->linkedin)
                                                <a href="{{ $user->linkedin }}" target="_blank">{{ $user->linkedin }}</a>
                                            @else
                                                N/A
                                            @endif
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="crancy__item-form--group mg-top-form-20">
                                        <label class="crancy__item-label">Twitter</label>
                                        <p class="mt-2">
                                            @if($user->twitter)
                                                <a href="{{ $user->twitter }}" target="_blank">{{ $user->twitter }}</a>
                                            @else
                                                N/A
                                            @endif
                                        </p>
                                    </div>
                                    <div class="crancy__item-form--group mg-top-form-20">
                                        <label class="crancy__item-label">Instagram</label>
                                        <p class="mt-2">
                                            @if($user->instagram)
                                                <a href="{{ $user->instagram }}" target="_blank">{{ $user->instagram }}</a>
                                            @else
                                                N/A
                                            @endif
                                        </p>
                                    </div>
                                </div>

                                <div class="col-12 mb-4 mt-2">
                                    <h6 class="fw-bold pb-2 mb-3" style="border-bottom: 2px solid #f0f0f0;">Private & Payment Information</h6>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="crancy__item-form--group mg-top-form-20">
                                        <label class="crancy__item-label">Guardian Phone</label>
                                        <p class="mt-2">{{ html_decode($user->guardian_phone) }}</p>
                                    </div>
                                    <div class="crancy__item-form--group mg-top-form-20">
                                        <label class="crancy__item-label">Date of Birth</label>
                                        <p class="mt-2">{{ $user->dob }}</p>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="crancy__item-form--group mg-top-form-20">
                                        <label class="crancy__item-label">Bank Account Number</label>
                                        <p class="mt-2">{{ html_decode($user->bank_account_number) }}</p>
                                    </div>
                                    <div class="crancy__item-form--group mg-top-form-20">
                                        <label class="crancy__item-label">Bkash Number</label>
                                        <p class="mt-2">{{ html_decode($user->bkash_number) }}</p>
                                    </div>
                                </div>
                                <div class="col-12 mb-4">
                                    <div class="crancy__item-form--group mg-top-form-20">
                                        <label class="crancy__item-label">Personal Statement</label>
                                        <p class="mt-2">{{ html_decode($user->personal_statement) }}</p>
                                    </div>
                                </div>

                                <div class="col-12 mb-4 mt-2">
                                    <h6 class="fw-bold pb-2 mb-3" style="border-bottom: 2px solid #f0f0f0;">Experience & Achievements</h6>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="crancy__item-form--group mg-top-form-20">
                                        <label class="crancy__item-label">Educational Achievements</label>
                                        <p class="mt-2">{{ html_decode($user->educational_achievements) }}</p>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="crancy__item-form--group mg-top-form-20">
                                        <label class="crancy__item-label">Notable Student Outcome</label>
                                        <p class="mt-2">{{ html_decode($user->notable_student_outcome) }}</p>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="crancy__item-form--group mg-top-form-20">
                                        <label class="crancy__item-label">Expected Commitment</label>
                                        <p class="mt-2">{{ html_decode($user->expected_commitment) }}</p>
                                    </div>
                                </div>

                                <div class="col-12 mb-4 mt-2">
                                    <h6 class="fw-bold pb-2 mb-3" style="border-bottom: 2px solid #f0f0f0;">Documents</h6>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="crancy__item-form--group mg-top-form-20">
                                        <label class="crancy__item-label">Passport Photo</label>
                                        <div class="mt-2">
                                            @if ($user->passport_photo)
                                                <img src="{{ asset($user->passport_photo) }}" alt="Passport Photo" class="img-fluid" style="max-width: 100px;">
                                            @else
                                                N/A
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="crancy__item-form--group mg-top-form-20">
                                        <label class="crancy__item-label">NID Photo</label>
                                        <div class="mt-2">
                                            @if ($user->nid_photo)
                                                <img src="{{ asset($user->nid_photo) }}" alt="NID Photo" class="img-fluid" style="max-width: 100px;">
                                            @else
                                                N/A
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer delet_modal_form">
                    <button type="button" class="crancy-btn" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
@extends('admin.master_layout')
@section('title')
    <title>{{ __('translate.Seller Details') }}</title>
@endsection

@section('body-header')
    <h3 class="crancy-header__title m-0">{{ __('translate.Seller Details') }}</h3>
    <p class="crancy-header__text">{{ __('translate.Manage Seller') }} >> {{ __('translate.Seller Details') }}</p>
@endsection

@section('body-content')

    <!-- crancy Dashboard -->
    <section class="crancy-adashboard crancy-show">
        <div class="container container__bscreen">

            <div class="row row__bscreen">

                <div class="col-xxl-3 col-md-6 col-12 mg-top-30">
                    <div class="crancy-ecom-card crancy-ecom-card__v2">
                        <div class="flex-main">
                            <span>
                                @include('admin.seller.svg.net_earning')
                            </span>
                            <div class="flex-1">
                                <div class="crancy-ecom-card__heading">
                                    <div class="crancy-ecom-card__icon">
                                        <h4 class="crancy-ecom-card__title">{{ __('translate.Net Earnings') }} </h4>
                                    </div>
                                        <!-- Static Info Modal -->
                                        <div class="modal fade" id="staticInfoModal" tabindex="-1" aria-labelledby="staticInfoModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="staticInfoModalLabel">{{ __('translate.Instructor Static Information') }}</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="row">
                                                            <div class="col-md-4 text-center">
                                                                @if ($user->image)
                                                                    <img src="{{ asset($user->image) }}" alt="thumb" class="img-fluid rounded-circle mb-3" style="max-width: 150px;">
                                                                @else
                                                                    <img src="{{ asset($general_setting->default_avatar) }}" alt="thumb" class="img-fluid rounded-circle mb-3" style="max-width: 150px;">
                                                                @endif
                                                                <h4>{{ html_decode($user->name) }}</h4>
                                                                <p>{{ html_decode($user->designation) }}</p>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <ul class="list-group list-group-flush">
                                                                    <li class="list-group-item"><strong>{{ __('translate.Email') }}:</strong> {{ html_decode($user->email) }}</li>
                                                                    <li class="list-group-item"><strong>{{ __('translate.Phone') }}:</strong> {{ html_decode($user->phone) }}</li>
                                                                    <li class="list-group-item"><strong>{{ __('translate.Address') }}:</strong> {{ html_decode($user->address) }}</li>
                                                                    <li class="list-group-item"><strong>{{ __('translate.Gender') }}:</strong> {{ html_decode($user->gender) }}</li>
                                                                    <li class="list-group-item"><strong>{{ __('translate.Status') }}:</strong> {{ $user->status == 'enable' ? __('translate.Enabled') : __('translate.Disabled') }}</li>
                                                                    <li class="list-group-item"><strong>{{ __('translate.Featured Instructor') }}:</strong> {{ $user->is_top_seller == 'enable' ? __('translate.Yes') : __('translate.No') }}</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{ __('translate.Close') }}</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                </div>
                                <div class="crancy-ecom-card__content">
                                    <div class="crancy-ecom-card__camount">
                                        <div class="crancy-ecom-card__camount__inside">
                                            <h3 class="crancy-ecom-card__amount">{{ currency($net_income) }}</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                {{-- <div class="col-xxl-3 col-md-6 col-12 mg-top-30">
                    <div class="crancy-ecom-card crancy-ecom-card__v2">
                        <div class="flex-main">
                            <span>
                                @include('admin.seller.svg.available_balance')
                            </span>
                            <div class="flex-1">
                                <div class="crancy-ecom-card__heading">
                                    <div class="crancy-ecom-card__icon">
                                        <h4 class="crancy-ecom-card__title">{{ __('translate.Available Balance') }} </h4>
                                    </div>

                                </div>
                                <div class="crancy-ecom-card__content">
                                    <div class="crancy-ecom-card__camount">
                                        <div class="crancy-ecom-card__camount__inside">
                                            <h3 class="crancy-ecom-card__amount">{{ currency($current_balance) }}</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}


                <div class="col-xxl-3 col-md-6 col-12 mg-top-30">
                    <div class="crancy-ecom-card crancy-ecom-card__v2">
                        <div class="flex-main">
                            <span>
                                @include('admin.seller.svg.total_withdraw')
                            </span>
                            <div class="flex-1">
                                <div class="crancy-ecom-card__heading">
                                    <div class="crancy-ecom-card__icon">
                                        <h4 class="crancy-ecom-card__title">{{ __('translate.Total Withdraw') }} </h4>
                                    </div>

                                </div>
                                <div class="crancy-ecom-card__content">
                                    <div class="crancy-ecom-card__camount">
                                        <div class="crancy-ecom-card__camount__inside">
                                            <h3 class="crancy-ecom-card__amount">{{ currency($total_withdraw_amount) }}</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                {{-- <div class="col-xxl-3 col-md-6 col-12 mg-top-30">
                    <div class="crancy-ecom-card crancy-ecom-card__v2">
                        <div class="flex-main">
                            <span>
                                @include('admin.seller.svg.pending_withdraw')
                            </span>
                            <div class="flex-1">
                                <div class="crancy-ecom-card__heading">
                                    <div class="crancy-ecom-card__icon">
                                        <h4 class="crancy-ecom-card__title">{{ __('translate.Pending Withdraw') }} </h4>
                                    </div>

                                </div>
                                <div class="crancy-ecom-card__content">
                                    <div class="crancy-ecom-card__camount">
                                        <div class="crancy-ecom-card__camount__inside">
                                            <h3 class="crancy-ecom-card__amount">{{ currency($pending_withdraw) }}</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}

            </div>

            <div class="row mg-top-30 row__bscreen">
                <div class=" col-xxl-3 col-xl-4 col-lg-4">
                    <div class="overview-profile">
                        <div class="overview-profile-thumb-main">
                            <div class="overview-profile-thumb">
                                @if ($user->image)
                                <img src="{{ asset($user->image) }}" alt="thumb">
                                @else
                                <img src="{{ asset($general_setting->default_avatar) }}" alt="thumb">
                                @endif

                            </div>
                            <div class="overview-profile-txt">
                                <h4>{{ html_decode($user->name) }}</h4>
                            </div>
                        </div>

                        <div class="overview-researcher">
                            <p>{{ html_decode($user->designation) }} </p>
                        </div>

                        <div class="overview-profile-item">


                            <div class="overview-profile-inner">
                                <h4>{{ __('translate.Contact Information') }} </h4>


                                <ul class="overview-profile-inner-contact">
                                    <li>
                                        <a href="tel:{{ html_decode($user->phone) }}">
                                            <span>
                                                @include('admin.seller.svg.phone')

                                            </span>
                                            {{ html_decode($user->phone) }}
                                        </a>
                                    </li>


                                    <li>
                                        <a href="mailto:{{ html_decode($user->email) }}">
                                            <span>
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M2 12V7C2 4.79086 3.79086 3 6 3H18C20.2091 3 22 4.79086 22 7V17C22 19.2091 20.2091 21 18 21H8M6 8L9.7812 10.5208C11.1248 11.4165 12.8752 11.4165 14.2188 10.5208L18 8M2 15H8M2 18H8"
                                                        stroke="#6440FBFF" stroke-width="1.5"
                                                        stroke-linecap="round" />
                                                </svg>


                                            </span>
                                            {{ html_decode($user->email) }}
                                        </a>
                                    </li>

                                    <li>
                                        <a href="javascript:;">
                                            <span>
                                                @include('admin.seller.svg.address')
                                            </span>
                                            {{ html_decode($user->address) }}
                                        </a>
                                    </li>

                                </ul>

                            </div>


                            <div class="overview-profile-inner">

                                @if ($user->is_seller == 1)
                                    <a target="_blank" href="{{ route('instructor.profile', $user->username) }}" class="crancy-btn crancy-full-width mg-top-20"> <i class="fas fa-eye    "></i> Public Profile</a>
                                    <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#staticInfoModal" class="crancy-btn crancy-full-width mg-top-20 btn-primary"> <i class="fas fa-info-circle"></i> View Information</a>
                                @endif


                                {{-- <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#editModal" class="crancy-btn crancy-full-width mg-top-20 user_edit_btn"> <i class="fas fa-edit    "></i> {{ __('translate.Edit Profile') }}</a> --}}



                                <a onclick="itemDeleteConfrimation({{ $user->id }})" href="javascript:;" data-bs-toggle="modal" data-bs-target="#exampleModal" class="crancy-btn crancy-full-width mg-top-20 user_delete_btn"> <i class="fas fa-trash    "></i> {{ __('translate.Delete User') }}</a>

                            </div>
                        </div>
                    </div>
                </div>

                <div class=" col-xxl-9 col-xl-8 col-lg-8">
                    <div class="container container__bscreen ">
                        <div class="row">
                            <div class="col-12">
                                <div class="crancy-body">
                                    <div class="crancy-dsinner">

                                        <div class="crancy-table crancy-table--v3">

                                            <div class="crancy-customer-filter">
                                                <div class="crancy-customer-filter__single crancy-customer-filter__single--csearch d-flex items-center justify-between create_new_btn_box">
                                                    <div class="crancy-header__form crancy-header__form--customer create_new_btn_inline_box">
                                                        <h4 class="crancy-product-card__title">{{ __('translate.Course List') }}</h4>


                                                    </div>
                                                </div>
                                            </div>

                                            <!-- crancy Table -->
                                            <div id="crancy-table__main_wrapper" class=" dt-bootstrap5 no-footer">

                                                <table class="crancy-table__main crancy-table__main-v3  no-footer" id="dataTable">
                                                    <!-- crancy Table Head -->
                                                    <thead class="crancy-table__head">
                                                        <tr>

                                                            <th class="crancy-table__column-2 crancy-table__h2 sorting" >
                                                                {{ __('translate.Title') }}
                                                            </th>

                                                            <th class="crancy-table__column-2 crancy-table__h2 sorting" >
                                                                {{ __('translate.Category') }}
                                                            </th>


                                                            <th class="crancy-table__column-2 crancy-table__h2 sorting" >
                                                                {{ __('translate.Price') }}
                                                            </th>

                                                            <th class="crancy-table__column-2 crancy-table__h2 sorting" >
                                                                {{ __('translate.Visibility') }}
                                                            </th>


                                                            <th class="crancy-table__column-3 crancy-table__h3 sorting">
                                                                {{ __('translate.Action') }}
                                                            </th>

                                                        </tr>
                                                    </thead>

                                                    <!-- crancy Table Body -->
                                                    <tbody class="crancy-table__body">
                                                        @foreach ($courses as $index => $course)
                                                            <tr class="odd">



                                                                <td class="crancy-table__column-2 crancy-table__data-2">
                                                                    <h4 class="crancy-table__product-title"><a target="_blank" href="{{ route('course', $course->slug) }}">{{ html_decode($course->translate->title) }}</a></h4>
                                                                </td>


                                                                <td class="crancy-table__column-2 crancy-table__data-2">
                                                                    <h4 class="crancy-table__product-title">{{ html_decode($course?->category?->translate?->name) }}</h4>
                                                                </td>

                                                                <td class="crancy-table__column-2 crancy-table__data-2">
                                                                    <h4 class="crancy-table__product-title">
                                                                    @if ($course->offer_price)
                                                                        {{ currency($course->offer_price) }}
                                                                    @else
                                                                        {{ currency($course?->regular_price) }}
                                                                    @endif

                                                                    </h4>
                                                                </td>


                                                                <td class="crancy-table__column-2 crancy-table__data-2">
                                                                    @if ($course->approved_by_admin == 'approved')
                                                                        <span class="badge bg-success">{{ __('translate.Approved') }}</span>
                                                                    @elseif ($course->approved_by_admin ==  'rejected')
                                                                        <span class="badge bg-danger">{{ __('translate.Rejected') }}</span>
                                                                    @elseif ($course->approved_by_admin ==  'draft')
                                                                        <span class="badge bg-danger">{{ __('translate.Draft') }}</span>
                                                                    @else
                                                                        <span class="badge bg-danger">{{ __('translate.Awaiting') }}</span>
                                                                    @endif
                                                                </td>


                                                                <td class="crancy-table__column-2 crancy-table__data-2">

                                                                    <a href="{{ route('admin.courses.edit', ['course' => $course->id, 'lang_code' => admin_lang()] ) }}" class="crancy-btn"><i class="fas fa-edit"></i> {{ __('translate.Edit') }}</a>

                                                                    <a onclick="itemDeleteConfrimation({{ $course->id }})" href="javascript:;" data-bs-toggle="modal" data-bs-target="#exampleModal" class="crancy-btn delete_danger_btn"><i class="fas fa-trash"></i> </a>


                                                                </td>
                                                            </tr>
                                                        @endforeach

                                                    </tbody>
                                                    <!-- End crancy Table Body -->
                                                </table>
                                            </div>
                                            <!-- End crancy Table -->
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End crancy Dashboard -->



    {{-- Edit Modal --}}

    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">{{ __('translate.Edit User Basic Information') }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('admin.user-update', $user->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="row">

                            <div class="col-md-6">
                                <div class="crancy__item-form--group mg-top-form-20">
                                    <label class="crancy__item-label">{{ __('translate.Name') }} * </label>
                                    <input class="crancy__item-input" type="text" name="name" value="{{ html_decode($user->name) }}">
                                </div>
                            </div>



                            <div class="col-md-6">

                                <div class="crancy__item-form--group mg-top-form-20">
                                    <label class="crancy__item-label">{{ __('translate.Gender') }} * </label>
                                    <select class="form-select crancy__item-input" name="gender">
                                        <option value="">{{ __('translate.Select') }}</option>
                                        <option {{ $user->gender == 'Male' ? 'selected' : '' }} value="Male">{{ __('translate.Male') }}</option>
                                        <option {{ $user->gender == 'Female' ? 'selected' : '' }} value="Female">{{ __('translate.Female') }}</option>
                                        <option {{ $user->gender == 'Others' ? 'selected' : '' }} value="Others">{{ __('translate.Others') }}</option>

                                    </select>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="crancy__item-form--group mg-top-form-20">
                                    <label class="crancy__item-label">{{ __('translate.Phone') }} *</label>
                                    <input class="crancy__item-input" type="text" name="phone" value="{{ html_decode($user->phone) }}" >
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="crancy__item-form--group mg-top-form-20">
                                    <label class="crancy__item-label">{{ __('translate.Address') }} *</label>
                                    <input class="crancy__item-input" type="text" name="address" value="{{ html_decode($user->address) }}" >
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="crancy__item-form--group mg-top-form-20">
                                    <label class="crancy__item-label">{{ __('translate.Status') }} </label>
                                    <div class="crancy-ptabs__notify-switch  crancy-ptabs__notify-switch--two">
                                        <label class="crancy__item-switch">
                                        <input {{ $user->status == 'enable' ? 'checked' : '' }} name="status" type="checkbox" >
                                        <span class="crancy__item-switch--slide crancy__item-switch--round"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>


                            <div class="col-12">
                                <div class="crancy__item-form--group mg-top-form-20">
                                    <label class="crancy__item-label">{{ __('translate.Make Featured Instructor') }} </label>
                                    <div class="crancy-ptabs__notify-switch  crancy-ptabs__notify-switch--two">
                                        <label class="crancy__item-switch">
                                        <input {{ $user->is_top_seller == 'enable' ? 'checked' : '' }} name="is_top_seller" type="checkbox" >
                                        <span class="crancy__item-switch--slide crancy__item-switch--round"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>



                        </div>


                </div>
                <div class="modal-footer delet_modal_form">

                    <button type="submit" class="btn btn-primary">{{ __('translate.Update Info') }}</button>
                </form>
                </div>
            </div>
        </div>
    </div>


    <!-- Delete Confirmation Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">{{ __('translate.Delete Confirmation') }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>{{ __('translate.Are you realy want to delete this item?') }}</p>
                </div>
                <div class="modal-footer">
                    <form action="" id="item_delect_confirmation" class="delet_modal_form" method="POST">
                        @csrf
                        @method('DELETE')

                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{ __('translate.Close') }}</button>
                        <button type="submit" class="btn btn-primary">{{ __('translate.Yes, Delete') }}</button>

                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection


@push('js_section')
    <script>
        "use strict"
        function itemDeleteConfrimation(id){
            $("#item_delect_confirmation").attr("action",'{{ url("admin/user-delete/") }}'+"/"+id)
        }

        function courseDeleteConfrimation(id){
            $("#item_delect_confirmation").attr("action",'{{ url("admin/courses/") }}'+"/"+id)
        }



        function manageStatus(id){
            var appMODE = "{{ env('APP_MODE') }}"
            if(appMODE == 'DEMO'){
                toastr.error('This Is Demo Version. You Can Not Change Anything');
                return;
            }

            $.ajax({
                type:"put",
                data: { _token : '{{ csrf_token() }}' },
                url:"{{url('/admin/user-status/') }}"+"/"+id,
                success:function(response){
                    toastr.success(response)
                },
                error:function(err){}
            })
        }

    </script>
@endpush
