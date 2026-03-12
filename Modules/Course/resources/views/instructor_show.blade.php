
@extends('layout')
@section('title')
    <title>{{ $instructor->name }}</title>
@endsection

@section('front-content')

  <!-- Start Page Heading Section -->
    @include('breadcrumb')

    <!-- start Page instructors-details Section -->

    <section class="instructors_details">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-5">
                    <div class="td_white_bg td_radius_10 p-4 shadow-sm">
                        <div class="instructors_details_thumb mb-4">
                            @if ($instructor?->image)
                                <img src="{{ asset($instructor?->image) }}" alt="" class="w-100 td_radius_10" />
                            @else
                                <img src="{{ asset($general_setting->default_avatar) }}" alt="" class="w-100 td_radius_10"/>
                            @endif
                        </div>
                        <h4 class="td_fs_24 td_semibold td_heading_color mb-3">{{ __('translate.Contact Information') }}</h4>
                        <ul class="instructors_details_contact mb-4">
                        <li>
                            <a href="mailto:{{ html_decode($instructor->email) }}">
                                <span class="icon">
                                    <svg width="20" height="15" viewBox="0 0 20 15" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M18.1819 0.5H1.81817C0.814025 0.5 0 1.29282 0 2.27085V12.8959C0 13.8738 0.814025 14.6667 1.81817 14.6667H18.1818C19.186 14.6667 20 13.8738 20 12.8959V2.27085C20 1.29282 19.186 0.5 18.1819 0.5ZM1.81817 1.38543H18.1818C18.2857 1.38607 18.3887 1.40403 18.4864 1.43854L10.6182 9.10183C10.2803 9.43313 9.73057 9.43488 9.39041 9.10575C9.38908 9.10446 9.38771 9.10312 9.38639 9.10183L1.51364 1.43854C1.61129 1.40403 1.7143 1.38603 1.81817 1.38543ZM0.909103 12.8958V2.27085C0.904455 2.2193 0.904455 2.16745 0.909103 2.11589L6.53638 7.58333L0.909103 13.0508C0.904455 12.9992 0.904455 12.9474 0.909103 12.8958ZM18.1819 13.7812H1.81817C1.7143 13.7806 1.61129 13.7626 1.51364 13.7281L7.18181 8.20758L8.74092 9.72608C9.43369 10.4034 10.559 10.4054 11.2544 9.73068C11.256 9.72916 11.2575 9.7276 11.2591 9.72608L12.8182 8.20758L18.4864 13.7281C18.3887 13.7626 18.2857 13.7806 18.1819 13.7812ZM19.0909 13.0508L13.4637 7.58333L19.0909 2.11589C19.0956 2.16745 19.0956 2.2193 19.0909 2.27085V12.8959C19.0956 12.9474 19.0956 12.9992 19.0909 13.0508Z"
                                            fill="#6440FB" />
                                    </svg>
                                </span>
                                {{ html_decode($instructor->email) }}
                            </a>
                        </li>

                        @if($instructor->phone)
                        <li>
                            <a href="tel:{{ html_decode($instructor->phone) }}">
                                <span class="icon">
                                    <i class="fa-solid fa-phone" style="color: #6440FB;"></i>
                                </span>
                                {{ html_decode($instructor->phone) }}
                            </a>
                        </li>
                        @endif

                        @if($instructor->address)
                        <li>
                            <a href="javascript:;">
                                <span class="icon">
                                    <i class="fa-solid fa-location-dot" style="color: #6440FB;"></i>
                                </span>
                                {{ html_decode($instructor->address) }}
                            </a>
                        </li>
                        @endif

                        <li>
                            <a href="javascript:;">
                                <span class="icon">
                                    <svg width="16" height="15" viewBox="0 0 16 15" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M8.1838 12.0521L7.87483 11.8665L7.56585 12.0521L3.74863 14.3452L3.74233 14.349L3.73612 14.3529C3.66834 14.396 3.6211 14.4027 3.57841 14.3992C3.50325 14.3929 3.45436 14.3712 3.41354 14.3396C3.3508 14.2909 3.30239 14.2316 3.26535 14.1544C3.25545 14.1335 3.24255 14.0951 3.26233 14.0093C3.26237 14.0091 3.2624 14.0089 3.26244 14.0088L4.27397 9.67587L4.35657 9.32205L4.08131 9.0849L0.706393 6.17725C0.636187 6.11319 0.616389 6.06476 0.608887 6.03001L0.608891 6.03001L0.608369 6.02764C0.594147 5.96303 0.59803 5.90726 0.620123 5.84667C0.650289 5.76395 0.687943 5.7144 0.726853 5.68045C0.737122 5.67149 0.782458 5.638 0.908673 5.61811L5.35159 5.22986L5.71145 5.19842L5.85204 4.86567L7.57669 0.783878L7.57669 0.78388L7.57762 0.781671C7.60699 0.71137 7.64018 0.68037 7.67752 0.659134L7.67837 0.658646C7.75746 0.613497 7.82046 0.6 7.87483 0.6C7.92915 0.6 7.99265 0.61349 8.0726 0.658876C8.10925 0.679889 8.14248 0.710948 8.17203 0.781672L8.17296 0.783878L9.89761 4.86567L10.0382 5.19842L10.3981 5.22986L14.841 5.61811C14.9672 5.638 15.0125 5.67149 15.0228 5.68045C15.0617 5.7144 15.0994 5.76395 15.1295 5.84667C15.1518 5.90771 15.1558 5.96398 15.142 6.02871C15.134 6.06436 15.1134 6.11326 15.0433 6.17724L11.6683 9.0849L11.3931 9.32205L11.4757 9.67587L12.4872 14.0088C12.4873 14.009 12.4873 14.0092 12.4874 14.0094C12.5071 14.0954 12.4941 14.1337 12.4842 14.1545C12.4472 14.2317 12.3988 14.2909 12.3361 14.3396L12.7038 14.8137L12.3361 14.3396C12.2953 14.3712 12.2464 14.3929 12.1712 14.3992C12.1286 14.4027 12.0813 14.396 12.0135 14.3529L12.0073 14.349L12.001 14.3452L8.1838 12.0521Z"
                                            stroke="#6440FB" stroke-width="1.2" />
                                    </svg>
                                </span>
                                ({{ $instructor->avg_rating }}/{{ $instructor->total_rating }} {{ __('translate.Ratings') }})
                            </a>
                        </li>

                    </ul>
                        <div class="instructors_details_btn">
                            <button type="button" class="td_btn td_style_1 td_radius_30 td_medium td_with_shadow"
                                data-bs-toggle="modal" data-bs-target="#exampleModal">
                                <span class="td_btn_in td_white_color td_accent_bg">
                                    <span>{{ __('translate.Contact With Me') }}</span>
                                    <svg width="19" height="20" viewBox="0 0 19 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M15.1575 4.34302L3.84375 15.6567" stroke="currentColor" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path
                                            d="M15.157 11.4142C15.157 11.4142 16.0887 5.2748 15.157 4.34311C14.2253 3.41142 8.08594 4.34314 8.08594 4.34314"
                                            stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                    </svg>
                                </span>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="col-xl-8 col-lg-7">
                    <div class="instructors_details_main">
                        <div class="td_white_bg td_radius_10 p-4 shadow-sm mb-4">
                            <div class="instructors_details_text mb-3">
                                <h2 class="td_fs_32 td_semibold mb-1">{{ html_decode($instructor->name) }}</h2>
                                <p class="td_opacity_7 mb-1">
                                    {{ html_decode($instructor->designation) }}
                                </p>
                                @if($instructor->instructor_experience)
                                <p class="td_opacity_7 mb-0">
                                    Years of Experience :  {{ html_decode($instructor->instructor_experience) }}
                                </p>
                                @endif
                            </div>
                            <div class="instructors_details_main_decs">
                                <p class="mb-0">
                                    {{ html_decode($instructor->about_me) }}
                                </p>
                            </div>
                        </div>

                        <div class="td_white_bg td_radius_10 p-4 shadow-sm mb-4">
                            <div class="instructors_details_text two mb-3">
                                <h2 class="td_fs_24 td_semibold mb-0">{{ __('translate.Educational Information') }}</h2>
                            </div>
                            <div class="instructors_details_main_decs">
                                <div class="row g-3">
                                    @if($instructor->education_qualification)
                                    <div class="col-md-6">
                                        <div class="border rounded-3 p-3 h-100">
                                            <div class="td_fs_14 td_opacity_7 mb-1">{{ __('translate.Education Qualification') }}</div>
                                            <div class="td_fs_18 td_heading_color text-capitalize">{{ html_decode($instructor->education_qualification) }}</div>
                                        </div>
                                    </div>
                                    @endif
                                    @if($instructor->school_name)
                                    <div class="col-md-6">
                                        <div class="border rounded-3 p-3 h-100">
                                            <div class="td_fs_14 td_opacity_7 mb-1">{{ __('translate.School Name') }}</div>
                                            <div class="td_fs_18 td_heading_color text-capitalize">{{ html_decode($instructor->school_name) }}</div>
                                        </div>
                                    </div>
                                    @endif
                                    @if($instructor->college_name)
                                    <div class="col-md-6">
                                        <div class="border rounded-3 p-3 h-100">
                                            <div class="td_fs_14 td_opacity_7 mb-1">{{ __('translate.College Name') }}</div>
                                            <div class="td_fs_18 td_heading_color text-capitalize">{{ html_decode($instructor->college_name) }}</div>
                                        </div>
                                    </div>
                                    @endif
                                    @if($instructor->current_university_semester)
                                    <div class="col-md-6">
                                        <div class="border rounded-3 p-3 h-100">
                                            <div class="td_fs_14 td_opacity_7 mb-1">{{ __('translate.Current University/Semester') }}</div>
                                            <div class="td_fs_18 td_heading_color text-capitalize">{{ html_decode($instructor->current_university_semester) }}</div>
                                        </div>
                                    </div>
                                    @endif
                                    @if($instructor->o_level_results)
                                    <div class="col-md-6">
                                        <div class="border rounded-3 p-3 h-100">
                                            <div class="td_fs_14 td_opacity_7 mb-1">{{ __('translate.O-level Results') }}</div>
                                            <div class="td_fs_18 td_heading_color">{{ html_decode($instructor->o_level_results) }}</div>
                                        </div>
                                    </div>
                                    @endif
                                    @if($instructor->a_level_results)
                                    <div class="col-md-6">
                                        <div class="border rounded-3 p-3 h-100">
                                            <div class="td_fs_14 td_opacity_7 mb-1">{{ __('translate.A-level Results') }}</div>
                                            <div class="td_fs_18 td_heading_color">{{ html_decode($instructor->a_level_results) }}</div>
                                        </div>
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="td_white_bg td_radius_10 p-4 shadow-sm">
                            <div class="instructors_details_text two mb-3">
                                <h2 class="td_fs_24 td_semibold mb-0">{{ __('translate.Social') }}</h2>
                            </div>
                            <ul class="share_list mb-0">
                                <li>
                                    <a href="{{ html_decode($instructor->facebook) }}" target="_blank">
                                        <i class="fa-brands fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ html_decode($instructor->twitter) }}" target="_blank">
                                        <i class="fa-brands fa-x-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ html_decode($instructor->instagram) }}" target="_blank">
                                        <i class="fa-brands fa-instagram"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ html_decode($instructor->linkedin) }}" target="_blank">
                                        <i class="fa-brands fa-linkedin"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>

                    </div>



                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="instructors_details_bb"></div>
                </div>
            </div>
        </div>
    </section>


    <!-- Contact  Modal -->
    <div class="modal contact_modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">{{ __('translate.Contact to Instructor') }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <span>
                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <circle cx="16" cy="16" r="16" fill="#FF3838" />
                                <path d="M22.2188 9.77734L8.88614 23.1107" stroke="white" stroke-width="1.8"
                                    stroke-linecap="round" />
                                <path d="M22.2188 23.1094L8.88614 9.77605" stroke="white" stroke-width="1.8"
                                    stroke-linecap="round" />
                            </svg>
                        </span>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="contact_modal_form" action="{{ route('store-contact-message') }}" method="POST">
                        @csrf
                        <input type="hidden" name="instructor_id" value="{{ $instructor->id }}">
                        <div class="contact_modal_form_item">
                            <div class="contact_modal_form_inner">
                                <input type="text" class="form-control"
                                    placeholder="{{ __('translate.Full Name') }} *" name="name" value="{{ old('name') }}">
                            </div>
                            <div class="contact_modal_form_inner">
                                <input type="text" class="form-control"
                                    placeholder="{{ __('translate.Phone') }}" name="phone" value="{{ old('phone') }}">
                            </div>
                        </div>
                        <div class="contact_modal_form_item">
                            <div class="contact_modal_form_inner">
                                <input type="email" class="form-control"
                                    placeholder="{{ __('translate.Email') }}  *" name="email" value="{{ old('email') }}">
                            </div>
                            <div class="contact_modal_form_inner">
                                <input type="text" class="form-control"
                                    placeholder="{{ __('translate.Subject') }} *" name="subject">
                            </div>
                        </div>
                        <div class="contact_modal_form_item">
                            <div class="contact_modal_form_inner">
                                <textarea class="form-control" placeholder="{{ __('translate.Message') }} *"
                                    rows="5" name="message">{{ old('message') }}</textarea>
                            </div>
                        </div>

                        @if($general_setting->recaptcha_status==1)
                            <div class="contact_modal_form_item">
                                <div class="g-recaptcha" data-sitekey="{{ $general_setting->recaptcha_site_key }}"></div>
                            </div>
                        @endif

                        <div class="contact_modal_form_item">
                            <button type="submit" class="td_btn td_style_1 td_radius_30 td_medium td_with_shadow">
                                <span class="td_btn_in td_white_color td_accent_bg">
                                    <span>{{ __('translate.Send Message') }}</span>
                                    <svg width="19" height="20" viewBox="0 0 19 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M15.1575 4.34302L3.84375 15.6567" stroke="currentColor"
                                            stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path
                                            d="M15.157 11.4142C15.157 11.4142 16.0887 5.2748 15.157 4.34311C14.2253 3.41142 8.08594 4.34314 8.08594 4.34314"
                                            stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                    </svg>
                                </span>
                            </button>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page instructors-details Section -->




    <section>
        <div class="container">
            <h2 class="td_fs_48 td_mb_30">{{ __('translate.My Courses') }}</h2>
            <div class="row td_gap_y_30 td_row_gap_30">

                @forelse($courses as $course_index => $course)
                    <div class="col-lg-4 col-md-6">
                        <div class="td_card td_style_3 d-block td_radius_10">
                            @if ($course?->is_popular == 'enable')
                                <span class="td_card_label td_accent_bg  td_white_color">{{ __('translate.Popular') }}</span>
                            @endif

                            <a href="javascript:;" class="add_to_wishlist {{ in_array($course->id, $wishlist_array) ? 'active' : '' }}" data-course_id="{{ $course->id }}">
                                <span class="td_cart_wishlist_icon">
                                    @include('svg.course_wishlist')
                                </span>
                            </a>

                            <a href="{{ route('course', $course->slug) }}" class="td_card_thumb">
                                <img src="{{ asset($course?->thumb_image) }}" alt="">
                            </a>


                            <div class="td_card_info td_white_bg">
                                <div class="td_card_info_in">
                                    <ul class="td_card_meta td_mp_0 td_fs_18 td_medium td_heading_color">
                                        <li>
                                            @include('svg.course_seat')

                                            <span class="td_opacity_7">{{ $course->total_student }} {{ __('translate.Students') }}</span>
                                        </li>
                                        <li>

                                            @include('svg.course_semester')

                                            <span class="td_opacity_7">{{ $course->total_lesson }} {{ __('translate.Lessons') }}</span>
                                        </li>
                                    </ul>
                                    <div class="td_card_category_df td_mb_14">

                                        <a href="{{ route('courses', ['category' => $course?->category?->slug ?? 'slug']) }}"
                                            class="td_card_category td_fs_14 td_normal td_heading_color "><span>{{ $course?->category?->name }}</span>
                                        </a>

                                        <span class="td_card_price  td_fs_18 td_medium">
                                            @if ($course->offer_price)
                                                {{ currency($course->offer_price) }}
                                            @else
                                                {{ currency($course->regular_price) }}
                                            @endif
                                        </span>
                                    </div>
                                    <h2 class="td_card_title td_fs_24 td_mb_16">
                                        <a href="{{ route('course', $course->slug) }}">{{ html_decode($course?->title) }}</a>
                                    </h2>
                                    <p class="td_card_subtitle td_heading_color td_opacity_7 td_mb_20">
                                        {{ $course?->short_description }}
                                    </p>
                                    <div class="td_card_review">
                                        <div class="td_rating" data-rating="{{ $course->avg_rating }}">
                                            <i class="fa-regular fa-star"></i>
                                            <i class="fa-regular fa-star"></i>
                                            <i class="fa-regular fa-star"></i>
                                            <i class="fa-regular fa-star"></i>
                                            <i class="fa-regular fa-star"></i>
                                            <div class="td_rating_percentage" >
                                                <i class="fa-solid fa-star fa-fw"></i>
                                                <i class="fa-solid fa-star fa-fw"></i>
                                                <i class="fa-solid fa-star fa-fw"></i>
                                                <i class="fa-solid fa-star fa-fw"></i>
                                                <i class="fa-solid fa-star fa-fw"></i>
                                            </div>
                                        </div>
                                        <span class="td_heading_color td_opacity_5 td_medium">({{ $course->total_rating }} {{ __('translate.Ratings') }})</span>
                                    </div>
                                    <div class="td_card_btn">
                                        <a href="javascript:;" class="td_btn td_style_1 td_radius_30 td_medium add_to_cart" data-course_id="{{ $course->id }}">
                                            <span class="td_btn_in td_white_color td_accent_bg">
                                                <span>{{ __('translate.Add to Cart') }}</span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-12">
                        <div class="courses_not_found_main">
                            <div class="courses_not_found_thumb">
                                <img src="{{ asset($general_setting->not_found ?? '') }}" alt="thumb">
                            </div>
                            <div class="courses_not_found_text">
                                <h3>{{ __('translate.OOPS! Courses not Found') }}</h3>
                                <p>
                                    {{ __('translate.Oops! this information is not available for a moment') }}
                                </p>

                                <a href="{{ route('instructors') }}"
                                    class="td_btn td_style_1 td_radius_30 td_medium td_with_shadow">
                                    <span class="td_btn_in td_white_color td_accent_bg">
                                        <span>{{ __('translate.Back to Instructor') }}</span>
                                        <svg width="19" height="20" viewBox="0 0 19 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M15.1575 4.34302L3.84375 15.6567" stroke="currentColor"
                                                stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path
                                                d="M15.157 11.4142C15.157 11.4142 16.0887 5.2748 15.157 4.34311C14.2253 3.41142 8.08594 4.34314 8.08594 4.34314"
                                                stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round"></path>
                                        </svg>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforelse

            </div>
        </div>
        <div class="td_height_100 td_height_lg_50"></div>
    </section>


@endsection




@push('js_section')

<script src="https://www.google.com/recaptcha/api.js" async defer></script>

<script>
    "use strict";
    $(function() {

        $(".add_to_cart").on("click", function(e){

            let course_id = $(this).data('course_id');

            $.ajax({
                type : 'GET',
                url : "{{ url('add-to-card') }}" + "/" + course_id,
                success:function(response){
                    toastr.success(response.message);

                    let total_cart = $('#total_cart').html();
                    total_cart = parseInt(total_cart) + parseInt(1);
                    $('#total_cart').html(total_cart);
                },
                error:function(err){

                    if(err.status == 403){
                        toastr.error(err.responseJSON.message)
                    }else{
                        toastr.error(`{{ __('translate.Server error occured') }}`)
                    }

                }
            });

        })


        $(".add_to_wishlist").on("click", function(e){

            var app_mode = "{{ env('APP_MODE') }}"
            if(app_mode == 'DEMO'){
                toastr.error('This Is Demo Version. You Can Not Change Anything');
                return;
            }

            let course_id = $(this).data('course_id');
            let current_item = $(this);

            current_item.addClass('active');

            let _token = "{{ csrf_token() }}";

            $.ajax({
                type : 'POST',
                data : {_token, item_id : course_id},
                url : "{{ route('student.wishlist.store') }}",
                success:function(response){
                    toastr.success(response.message);

                    if(response.type == 'added'){
                        current_item.addClass('active');

                        let total_wishlist = $('#total_wishlist').html();
                        total_wishlist = parseInt(total_wishlist) + parseInt(1);
                        $('#total_wishlist').html(total_wishlist);

                    }else if(response.type == 'removed'){
                        current_item.removeClass('active');

                        let total_wishlist = $('#total_wishlist').html();
                        total_wishlist = parseInt(total_wishlist) - parseInt(1);
                        $('#total_wishlist').html(total_wishlist);

                    }

                },
                error:function(err){
                    current_item.removeClass('active');
                    if(err.status == 401){
                        toastr.error(`{{ __('translate.Please login first') }}`)
                    }else{
                        toastr.error(`{{ __('translate.Server error occured') }}`)
                    }
                }
            });

        })

    });

    </script>
@endpush 
