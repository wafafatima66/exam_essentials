<!DOCTYPE HTML>
<html lang="en-US">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	 <title>{{ $seo_setting->seo_title }}</title>
    <meta name="title" content="{{ $seo_setting->seo_title }}">
    <meta name="description" content="{!! strip_tags(clean($seo_setting->seo_description)) !!}">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Favicon -->
	<link rel="icon" type="image/png" sizes="56x56" href="{{ asset($general_setting->favicon) }}">
	<!-- bootstrap CSS -->
	<link rel="stylesheet" href="{{ asset('frontend/theme_five/assets/css/bootstrap.min.css') }}" type="text/css" media="all">
	<!-- carousel CSS -->
	<link rel="stylesheet" href="{{ asset('frontend/theme_five/assets/css/owl.carousel.min.css') }}" type="text/css" media="all">
	<!-- animate CSS -->
	<link rel="stylesheet" href="{{ asset('frontend/theme_five/assets/css/animate.css') }}" type="text/css" media="all">
	<!-- animated-text CSS -->
	<link rel="stylesheet" href="{{ asset('frontend/theme_five/assets/css/animated-text.css') }}" type="text/css" media="all">
	<!-- font-awesome CSS -->
	<link rel="stylesheet" href="{{ asset('frontend/theme_five/assets/css/all.min.css') }}" type="text/css" media="all">
	<!-- theme-default CSS -->
	<link rel="stylesheet" href="{{ asset('frontend/theme_five/assets/css/theme-default.css') }}" type="text/css" media="all">
	<!-- meanmenu CSS -->
	<link rel="stylesheet" href="{{ asset('frontend/theme_five/assets/css/meanmenu.min.css') }}" type="text/css" media="all">
	<!-- transitions CSS -->
	<link rel="stylesheet" href="{{ asset('frontend/theme_five/assets/css/owl.transitions.css') }}" type="text/css" media="all">
	<!-- venobox CSS -->
	<link rel="stylesheet" href="{{ asset('frontend/theme_five/venobox/venobox.css') }}" type="text/css" media="all">
	<!-- flaticon -->
	<link rel="stylesheet" href="{{ asset('frontend/theme_five/assets/css/bootstrap-icons.css') }}" type="text/css" media="all">
	<!-- bootstrap icons -->
	<link rel="stylesheet" href="{{ asset('frontend/theme_five/assets/css/flaticon.css') }}" type="text/css" media="all">
	<!-- Main Style CSS -->
	<link rel="stylesheet" href="{{ asset('frontend/theme_five/assets/css/style.css') }}" type="text/css" media="all">
	<!-- responsive CSS -->
	<link rel="stylesheet" href="{{ asset('frontend/theme_five/assets/css/responsive.css') }}" type="text/css" media="all">
	<!-- Coustom Animation CSS -->
	<link rel="stylesheet" href="{{ asset('frontend/theme_five/assets/css/coustom-animation.css') }}" type="text/css" media="all">
	<!-- odometer CSS -->
	<link rel="stylesheet" href="{{ asset('frontend/theme_five/assets/css/odometer-theme-default.css') }}" type="text/css" media="all">

	<link rel="stylesheet" href="{{ asset('frontend/theme_five/assets/css/scroll-up.css') }}" type="text/css" media="all">

	<link rel="stylesheet" href="{{ asset('global/toastr/toastr.min.css') }}">
	<style>
		.feature-course-thumb img{
			height: 280px;
			width: 231px;
			object-fit: cover;
		}

		.footer-widget-blog-thumb img{
            width: 76px;
            height: 76px;
            object-fit: cover;
        }

        .team-thumb img{
            height: 190px !important;
            width: 190px !important;
            object-fit: cover;
            border-radius: 50px;
        }

        .blog-author img{
            width: 36px !important;
            height: 36px !important;
            object-fit: cover;
        }

         .brand-thumb img{
            width: 230px !important;
            height: 115px !important;
            object-fit: cover;
        }

	</style>
</head>

<body>

	<!-- ========= Prealoader ==============-->
	@if ($general_setting->preloader_status == 'enable')
	<div class="loading-screen" id="loading-screen">
		<span class="bar top-bar"></span>
		<span class="bar down-bar"></span>
		<div class="animation-preloader">
			<div class="spinner"></div>
			<div class="txt-loading">
				<span data-text-preloader="E" class="letters-loading">E</span>
				<span data-text-preloader="d" class="letters-loading">d</span>
				<span data-text-preloader="u" class="letters-loading">u</span>
				<span data-text-preloader="c" class="letters-loading">c</span>
				<span data-text-preloader="a" class="letters-loading">a</span>
				<span data-text-preloader="t" class="letters-loading">t</span>
				<span data-text-preloader="e" class="letters-loading">e</span>
			</div>
		</div>
	</div>
	@endif
	<!--========= End Prealoader ============== -->



	<!--==================================================-->
	<!-- Start educate Header top area style-two -->
	<!--==================================================-->
	<div class="header-area-wrapper">
		<div class="header-top-area style-two">
			<div class="container-fluid">
				<div class="row header-top align-items-center">
					<div class="col-xxl-6 col-xl-8 col-lg-6">
						<div class="header-top-icon-list">
							<ul>
								<li><i class="fa-solid fa-phone-volume"></i>{{ $footer->phone }}</li>
								<li><i class="fa-solid fa-envelope"></i>{{ $footer->email }}</li>
							</ul>
						</div>
					</div>
					<div class="col-xxl-6 col-xl-4 col-lg-6">
						<div class="header-top-social-icon-list">
							<ul>
								<li class="header-flow-title"><a href="#">{{ __('translate.Flow Us') }}</a></li>
								<li><a href="{{ $footer->facebook }}"><i class="fab fa-facebook-f"></i></a></li>
								<li><a href="{{ $footer->twitter }}"><i class="fa-brands fa-x-twitter"></i></a></li>
								<li><a href="{{ $footer->linkedin }}"><i class="fab fa-linkedin-in"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!--==================================================-->
		<!-- End educate Header top area -->
		<!--==================================================-->




		<!--==================================================-->
		<!-- Start educate Header Area-->
		<!--==================================================-->
		<div class="educate-header-area style-saven" id="sticky-header">
			<div class="container-fluid">
				<div class="row header-wrap align-items-center">
					<div class="col-lg-2">
						<div class="header-logo">
							<a class="active_logo" href="{{ route('home') }}"><img src="{{ asset($general_setting->logo) }}" alt="logo"></a>
							<a class="logo_two" href="{{ route('home') }}"><img src="{{ asset($general_setting->footer_logo) }}"
									alt="logo"></a>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="header-menu">
							<ul class="nav_scroll">
								@if ($general_setting->selected_theme == 'all_theme')
							<li><a href="#">{{ __('translate.Home') }}<i class="bi bi-chevron-down"></i></a>
								<ul class="sub_menu">



                                    <li>
                                        <a href="{{ route('home', ['theme' => 'one']) }}">{{ __('translate.Online Educations') }}</a>
                                    </li>

                                    <li>
                                        <a href="{{ route('home', ['theme' => 'two']) }}">{{ __('translate.Education') }}</a>
                                    </li>

                                    <li>
                                        <a href="{{ route('home', ['theme' => 'three']) }}">{{ __('translate.KinderGarden') }}</a>
                                    </li>

                                    <li>
                                        <a href="{{ route('home', ['theme' => 'four']) }}">{{ __('translate.University') }}</a>
                                    </li>


                                     <li>
                                        <a href="{{ route('home', ['theme' => 'five']) }}">{{ __('translate.Modern School') }}</a>
                                    </li>

                                    <li>
                                        <a href="{{ route('home', ['theme' => 'six']) }}">{{ __('translate.Online Education') }}</a>
                                    </li>


								</ul>
							</li>
                            @else
                            <li><a href="{{ route('home') }}">{{ __('translate.Home') }}</a></li>
                            @endif

                            @if ($general_setting->course_theme == 'with_sidebar')
                                <li>
                                    <a href="{{ route('courses', ['page_view' => 'sidebar_grid_view']) }}">{{ __('translate.Courses') }}</a>
                                </li>
                            @elseif ($general_setting->course_theme == 'without_sidebar')
                                <li>
                                    <a href="{{ route('courses', ['page_view' => 'grid']) }}">{{ __('translate.Courses') }}</a>
                                </li>
                            @else

							<li><a href="#">{{ __('translate.Courses') }}<i class="bi bi-chevron-down"></i></a>
								<ul class="sub_menu">
                                     <li>
                                        <a href="{{ route('courses', ['page_view' => 'grid']) }}">{{ __('translate.Courses Grid View') }}</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('courses', ['page_view' => 'list']) }}">{{ __('translate.Courses List View') }}</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('courses', ['page_view' => 'sidebar_grid_view']) }}">{{ __('translate.Courses Grid With Sidebar') }}</a>
                                    </li>
								</ul>
							</li>

                            @endif

                              <li><a href="{{ route('instructors') }}">{{ __('translate.Instructors') }}</a></li>

                               @if ($general_setting->blog_theme == 'with_sidebar')
                                    <li>
                                        <a href="{{ route('blogs', ['page_view' => 'blogs_with_sidebar']) }}">{{ __('translate.Blogs') }}</a>
                                    </li>
                                @elseif ($general_setting->blog_theme == 'without_sidebar')
                                    <li><a href="{{ route('blogs') }}">{{ __('translate.Blogs') }}</a></li>
                                @else
                                    <li><a href="#">{{ __('translate.Blogs') }}<i class="bi bi-chevron-down"></i></a>
                                        <ul class="sub_menu">
                                            <li><a href="{{ route('blogs') }}">{{ __('translate.Blogs') }}</a></li>
                                            <li>
                                                <a href="{{ route('blogs', ['page_view' => 'blogs_with_sidebar']) }}">{{ __('translate.Blog With Sidebar') }}</a>
                                            </li>
                                        </ul>
                                    </li>
                                @endif

							<li><a href="#">{{ __('translate.Pages') }}<i class="bi bi-chevron-down"></i></a>
								<ul class="sub_menu">
									<li><a href="{{ route('about-us') }}">{{ __('translate.About Us') }}</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('privacy-policy') }}">{{ __('translate.Privacy Policy') }}</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('terms-conditions') }}">{{ __('translate.Terms & Conditions') }}</a>
                                    </li>
                                    <li><a href="{{ route('faq') }}">{{ __('translate.FAQ') }}</a></li>
                                    @foreach ($custom_pages as $custom_page)
                                        <li>
                                            <a href="{{ route('custom-page', $custom_page->slug) }}">{{ $custom_page->page_name }}</a>
                                        </li>
                                    @endforeach
								</ul>
							</li>
                            <li><a href="{{ route('contact-us') }}">{{ __('translate.Contact') }}</a></li>

							</ul>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="header-right-wrapper">
							<div class="header-sidebar">
								<button class="cart_btn headers-button" type="button" onclick="window.location.href='{{ route('carts') }}'">
									<i class="fa-solid fa-cart-shopping"></i>
								</button>
								<div class="header-btn">
									<a href="{{ route('contact-us') }}">{{ __('translate.Contact') }}<i class="flaticon flaticon-right-arrow"></i></a>
								</div>
								<div class="header-src-btn">
									<div class="search-box-btn search-box-outer"><i
											class="fa-solid fa-magnifying-glass"></i></div>
								</div>
								<div class="educate-header-from">

                                    @guest('web')
                                    <a class="login-btn" href="{{ route('student.login') }}">{{ __('translate.Login') }}</a>
                                    <a class="sign-up-btn" href="{{ route('student.register') }}">/ {{ __('translate.Register') }}</a>
                                    @else
                                    <a class="sign-up-btn" href="{{ Auth::guard('web')->user()->is_seller == 1 ? route('instructor.dashboard') : route('student.dashboard') }}"><{{ __('translate.Dashboard') }}</a>
                                    @endguest


								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--==================================================-->
	<!-- End educate Header Area -->
	<!--==================================================-->

	<!--========= Start Mobile Memu========== -->

	<div class="mobile-menu-area sticky d-sm-block d-md-block d-lg-none">
		<div class="mobile-menu">
			<nav class="header-menu">
				<div class="mobile-logo">
					<a class="logo_img" href="{{ route('home') }}" title="educate">
						<img src="{{ asset($general_setting->footer_logo) }}" alt="logo">
					</a>
				</div>
				<ul class="nav_scroll">
					@if ($general_setting->selected_theme == 'all_theme')
                        <li><a href="#">{{ __('translate.Home') }}<i class="bi bi-chevron-down"></i></a>
                            <ul class="sub_menu">
                                <li>
                                    <a href="{{ route('home', ['theme' => 'one']) }}">{{ __('translate.Online Educations') }}</a>
                                </li>

                                <li>
                                    <a href="{{ route('home', ['theme' => 'two']) }}">{{ __('translate.Education') }}</a>
                                </li>

                                <li>
                                    <a href="{{ route('home', ['theme' => 'three']) }}">{{ __('translate.KinderGarden') }}</a>
                                </li>

                                <li>
                                    <a href="{{ route('home', ['theme' => 'four']) }}">{{ __('translate.University') }}</a>
                                </li>

                                <li>
                                    <a href="{{ route('home', ['theme' => 'four']) }}">{{ __('translate.University') }}</a>
                                </li>


                                    <li>
                                    <a href="{{ route('home', ['theme' => 'five']) }}">{{ __('translate.Modern School') }}</a>
                                </li>

                                <li>
                                    <a href="{{ route('home', ['theme' => 'six']) }}">{{ __('translate.Online Education') }}</a>
                                </li>
                            </ul>
                        </li>
                    @else
                        <li><a href="{{ route('home') }}">{{ __('translate.Home') }}</a></li>
                    @endif

                     @if ($general_setting->course_theme == 'with_sidebar')
                        <li>
                            <a href="{{ route('courses', ['page_view' => 'sidebar_grid_view']) }}">{{ __('translate.Courses') }}</a>
                        </li>
                    @elseif ($general_setting->course_theme == 'without_sidebar')
                        <li>
                            <a href="{{ route('courses', ['page_view' => 'grid']) }}">{{ __('translate.Courses') }}</a>
                        </li>
                    @else
					<li><a href="#">{{ __('translate.Courses') }}<i class="bi bi-chevron-down"></i></a>
						<ul class="sub_menu">
							 <li>
                                <a href="{{ route('courses', ['page_view' => 'grid']) }}">{{ __('translate.Courses Grid View') }}</a>
                            </li>
                            <li>
                                <a href="{{ route('courses', ['page_view' => 'list']) }}">{{ __('translate.Courses List View') }}</a>
                            </li>
                            <li>
                                <a href="{{ route('courses', ['page_view' => 'sidebar_grid_view']) }}">{{ __('translate.Courses Grid With Sidebar') }}</a>
                            </li>
						</ul>
					</li>
                    @endif

                    <li><a href="{{ route('instructors') }}">{{ __('translate.Instructors') }}</a></li>

                    @if ($general_setting->blog_theme == 'with_sidebar')
                        <li>
                            <a href="{{ route('blogs', ['page_view' => 'blogs_with_sidebar']) }}">{{ __('translate.Blogs') }}</a>
                        </li>
                    @elseif ($general_setting->blog_theme == 'without_sidebar')
                        <li><a href="{{ route('blogs') }}">{{ __('translate.Blogs') }}</a></li>
                    @else
					<li><a href="#">{{ __('translate.Blogs') }}<i class="bi bi-chevron-down"></i></a>
						<ul class="sub_menu">
							<li><a href="{{ route('blogs') }}">{{ __('translate.Blogs') }}</a></li>
                            <li>
                                <a href="{{ route('blogs', ['page_view' => 'blogs_with_sidebar']) }}">{{ __('translate.Blog With Sidebar') }}</a>
                            </li>
						</ul>
					</li>
                    @endif

					<li><a href="#">{{ __('translate.Pages') }}<i class="bi bi-chevron-down"></i></a>
						<ul class="sub_menu">
							<li><a href="{{ route('about-us') }}">{{ __('translate.About Us') }}</a>
                                </li>
                                <li>
                                    <a href="{{ route('privacy-policy') }}">{{ __('translate.Privacy Policy') }}</a>
                                </li>
                                <li>
                                    <a href="{{ route('terms-conditions') }}">{{ __('translate.Terms & Conditions') }}</a>
                                </li>
                                <li><a href="{{ route('faq') }}">{{ __('translate.FAQ') }}</a></li>
                                @foreach ($custom_pages as $custom_page)
                                    <li>
                                        <a href="{{ route('custom-page', $custom_page->slug) }}">{{ $custom_page->page_name }}</a>
                                    </li>
                                @endforeach
						</ul>
					</li>

					  <li><a href="{{ route('contact-us') }}">{{ __('translate.Contact Us') }}</a></li>
				</ul>
			</nav>
		</div>
	</div>
	<!--========= End Mobile Memu========== -->



	<!--==================================================-->
	<!-- Start Search Popup -->
	<!--==================================================-->
	<div class="search-popup">
		<button class="close-search style-two"><i class="fas fa-times"></i></button>
		<button class="close-search"><i class="fas fa-arrow-up"></i></button>
		<form action="{{ route('courses') }}">
			<div class="form-group">
				<input id="search1" type="search" name="search" value="" placeholder="{{ __('translate.Search Here') }}" required="">
				<button type="submit"><i class="fas fa-search"></i></button>
			</div>
		</form>
	</div>
	<!--==================================================-->
	<!-- End Search Popup -->
	<!--==================================================-->





	<!--==================================================-->
	<!-- Start Cart Side Bar -->
	<!--==================================================-->
	<div class="sidebar-menu-wrapper">
		<div class="cart_sidebar">
			<button type="button" class="close_btn"><i class="fas fa-times"></i></button>
			<h2 class="heading_title text-uppercase">Cart Items - <span>4</span></h2>

			<div class="cart_items_list">
				<div class="cart_item">
					<div class="item_image">
						<img src="assets/images/inner-img/rpost-thumb1.png" alt="image_not_found">
					</div>
					<div class="item_content">
						<h4 class="item_title">
							How Gamification is Changing the Way...
						</h4>
						<span class="item_price">$21.00</span>
						<button type="button" class="remove_btn"><i class="fas fa-times"></i></button>
					</div>
				</div>

				<div class="cart_item">
					<div class="item_image">
						<img src="assets/images/inner-img/rpost-thumb2.png" alt="image_not_found">
					</div>
					<div class="item_content">
						<h4 class="item_title">
							Learning is the Key soft skills and Professional
						</h4>
						<span class="item_price">$23.00</span>
						<button type="button" class="remove_btn"><i class="fas fa-times"></i></button>
					</div>
				</div>

				<div class="cart_item">
					<div class="item_image">
						<img src="assets/images/inner-img/rpost-thumb3.png" alt="image_not_found">
					</div>
					<div class="item_content">
						<h4 class="item_title">
							The Importance of Critical Thinking in Education
						</h4>
						<span class="item_price">$25.00</span>
						<button type="button" class="remove_btn"><i class="fas fa-times"></i></button>
					</div>
				</div>

				<div class="cart_item">
					<div class="item_image">
						<img src="assets/images/inner-img/rpost-thumb2.png" alt="image_not_found">
					</div>
					<div class="item_content">
						<h4 class="item_title">
							Learning is the Key soft skills and Professional
						</h4>
						<span class="item_price">$19.00</span>
						<button type="button" class="remove_btn"><i class="fas fa-times"></i></button>
					</div>
				</div>
			</div>
			<div class="total_price text-uppercase">
				<span>Sub Total:</span>
				<span>$88.00</span>
			</div>
			<ul class="btns_group ul_li">
				<li><a href="cart.html" class="btn btn_primary text-uppercase">View Cart</a></li>
				<li><a href="checkout.html" class="btn btn_border border_black text-uppercase">Checkout</a></li>
			</ul>
		</div>
		<div class="cart_sidebar_overlay"></div>
	</div>
	<!--==================================================-->
	<!-- End Cart Side Bar -->
	<!--==================================================-->









	<!--==================================================-->
	<!-- Start educate Hero Area style-saven -->
	<!--==================================================-->
	<section class="hero_area style-saven">
		<div class="container-fluid">
			<div class="row hero-bg align-items-center">
				<div class="col-xl-7 col-lg-7">
					<!-- hero content -->
					<div class="hero_content">
						<h5>{{ getTranslatedValue($home6_hero_section, 'title') }}</h5>
						<h1>{!! strip_tags(clean(getTranslatedValue($home6_hero_section, 'title_two')),'<span>') !!}</h1>
						<h1>{{ getTranslatedValue($home6_hero_section, 'title_three') }}</h1>
						<h1>{{ getTranslatedValue($home6_hero_section, 'title_four') }}</h1>
						<!-- hero button -->
						<div class="hero-button">
							<div class="hero-btn">
								<a href="{{ route('courses') }}">{{ __('translate.Find Course') }}<i class="flaticon flaticon-right-arrow"></i></a>
							</div>
						</div>
						<div class="hero-student-wrapper">
							<div class="hero-video-btn">
								<a class="video-vemo-icon venobox vbox-item" data-vbtype="youtube" data-autoplay="true"
									href="https://www.youtube.com/watch?v={{ getTranslatedValue($home6_hero_section, 'youtube_video_id') }}"><i
										class="fa-solid fa-play"></i></a>
							</div>
							<div class="hero-student-box">
								<div class="hero-student-img">
									<img src="{{ asset(getImage($home6_hero_section, 'total_student_image')) }}" alt="student">
								</div>
								<div class="hero-student-content">
										<h3><a href="course.html">{{ getTranslatedValue($home6_hero_section, 'total_student_title') }}</a></h3>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-5 col-lg-5">
					<div class="hero-thumb-wrapper">
						<div class="hero-thumb">
							<img src="{{ asset(getImage($home6_hero_section, 'feature_image')) }}" alt="thumb">
							<div class="hero-love">
								<img src="{{ asset('frontend/theme_five/assets/images/home-saven/hero-love.png') }}" alt="love">
							</div>
						</div>
						<div class="hero-autor-box">
							<div class="autor-thumb">
								<img src="{{ asset('frontend/theme_five/assets/images/home-saven/hero-autor3.png') }}" alt="autor">
							</div>
							<div class="hero-autor-content">
								<h3>{{ getTranslatedValue($home6_hero_section, 'feature_image_title') }}</h3>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="hero-shape71">
				<img src="{{ asset('frontend/theme_five/assets/images/home-one/hero-shape71.png') }}" alt="shape">
			</div>
			<div class="hero-shape72">
				<img src="{{ asset('frontend/theme_five/assets/images/home-one/hero-shape72.png') }}" alt="shape">
			</div>
			<div class="hero-arrow">
				<img src="{{ asset('frontend/theme_five/assets/images/home-one/hero-arrow.png') }}" alt="shape">
			</div>
		</div>
		<div class="container">
			<div class="course-box-area">
				<div class="row">
					<div class="col-lg-4 col-md-6">
						<div class="online-course-box">
							<div class="course-icon">
								<img src="{{ asset('frontend/theme_five/assets/images/home-saven/course-icon4.png') }}" alt="icon4">
							</div>
							<div class="course-title">
								<h6>{{ getTranslatedValue($home6_hero_section, 'total_course_title') }}</h6>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="online-course-box">
							<div class="course-icon">
								<img src="{{ asset('frontend/theme_five/assets/images/home-saven/course-icon5.png') }}" alt="icon5">
							</div>
							<div class="course-title">
								<h6>{{ getTranslatedValue($home6_hero_section, 'total_membership_title') }}</h6>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="online-course-box">
							<div class="course-icon">
									<img src="{{ asset('frontend/theme_five/assets/images/home-saven/course-icon6.png') }}" alt="icon6">
							</div>
							<div class="course-title">
								<h6>{{ getTranslatedValue($home6_hero_section, 'online_certification_title') }}</h6>
							</div>
						</div>
					</div>
				</div>
				<div class="course-circle-shape1">
					<img src="{{ asset('frontend/theme_five/assets/images/home-one/hero-border1.png') }}" alt="border1">
				</div>
				<div class="course-circle-shape2">
					<img src="{{ asset('frontend/theme_five/assets/images/home-one/hero-border2.png') }}" alt="border2">
				</div>
			</div>
		</div>
	</section>
	<!--==================================================-->
	<!-- End educate Hero  Area style-saven-->
	<!--==================================================-->




	<!--==================================================-->
	<!-- Start educate trending course style-saven -->
	<!--==================================================-->
	<div class="educate-trending-course style-saven">
		<div class="container">
			<div class="row section-title-space">
				<div class="col-xl-6 col-lg-8">
					<!-- section title -->
					<div class="section-sub-title saven">
						<h6>{{ __('translate.educate courses') }}</h6>
					</div>
					<div class="section_title saven">
						<h1>{{ __('translate.Educate Trending') }} <span>{{ __('translate.Courses') }}</span></h1>
					</div>
				</div>
				<div class="col-xl-6 col-lg-4">
					<div class="course-section-btn">
						<a href="{{ route('courses') }}">{{ __('translate.More details') }}<i class="flaticon flaticon-right-arrow"></i></a>
					</div>
				</div>
			</div>
			<div class="row">
				@foreach ($home6_courses as $course)
				<div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6">
					<div class="course-single-box box-1">
						<div class="course-thumb">
							<img src="{{ asset($course->thumb_image) }}" alt="thumb">
						</div>
						<div class="course-content">
							<h5 class="tag-online">{{ $course->category->name }}</h5>
							<span class="price">
								@if ($course->offer_price)
									{{ currency($course->offer_price) }}
								@else
									{{ currency($course->regular_price) }}
								@endif
							</span>
							<h3><a href="{{ route('course', $course->slug) }}">{{ html_decode($course?->title) }}</a></h3>
							<div class="course-autor-box">
								<div class="course-autor-icon">
									<span><i class="fa-solid fa-user"></i></span>
								</div>
								<div class="course-autor-title">
									<h3>{{ $course->instructor->name }}</h3>
								</div>
							</div>
							<div class="course-lesson">
								<span><i class="fa-solid fa-graduation-cap"></i>{{ $course->total_lesson }} {{ __('translate.Lessons') }}</span>
							</div>
							<div class="course-weeks">
								<span><i class="fa-solid fa-clock"></i>{{ $course->total_duration }} {{ __('translate.Hour') }}</span>
							</div>
						</div>
					</div>
				</div>
				@endforeach

			</div>
			<div class="trending-course-shape1">

				<img src="{{ asset('frontend/theme_five/assets/images/home-saven/trending-shape1.png') }}" alt="shape">
			</div>
			<div class="trending-course-shape2">
				<img src="{{ asset('frontend/theme_five/assets/images/home-saven/trending-shape2.png') }}" alt="shape">
			</div>
		</div>
	</div>
	<!--==================================================-->
	<!--End educate trending course -->
	<!--==================================================-->





	<!--==================================================-->
	<!-- Start educate About Area style-saven -->
	<!--==================================================-->
	<section class="about-area style-saven">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-xl-7 col-lg-12">
					<div class="about-thumb-wrapper">
						<div class="about-thumb71">
							<img src="{{ asset(getImage($home6_about_us, 'feature_image_one')) }}" alt="thumb">
						</div>
						<div class="about-thumb72">
							<img src="{{ asset(getImage($home6_about_us, 'feature_image_two')) }}" alt="thumb">
						</div>
						<div class="about-autor-box">
							<div class="autor-thumb">
								<img src="{{ asset(getImage($home6_about_us, 'instructor_image')) }}" alt="autor">
							</div>
							<div class="about-autor-content">
								<h3 class="counter">{{ getTranslatedValue($home6_about_us, 'total_instructor') }}</h3>
								<span>+</span>
								<p>{{ getTranslatedValue($home6_about_us, 'total_instructor_title') }}</p>
							</div>
						</div>
						<div class="about-shape72">
							<img src="{{ asset('frontend/theme_five/assets/images/home-saven/about-shape72.png') }}" alt="shape">
						</div>
					</div>
				</div>
				<div class="col-xl-5 col-lg-12">
					<div class="about_content">
						<div class="section-sub-title saven">
							<h6>{{ getTranslatedValue($home6_about_us, 'short_title') }}</h6>
						</div>
						<div class="section_title saven">
							<h1>{{ getTranslatedValue($home6_about_us, 'title') }}</h1>
							<h1>{!! strip_tags(clean(getTranslatedValue($home6_about_us, 'title_two')),'<span>') !!}</h1>
						</div>
						<div class="section-title-desc">
							<p>{{ getTranslatedValue($home6_about_us, 'description') }}</p>
						</div>
						<div class="about-icon-box">
							<div class="about-icon">
								<img src="{{ asset('frontend/theme_five/assets/images/home-saven/about-icon7.png') }}" alt="icon">
							</div>
							<div class="about-icon-title">
								<h5>{{ getTranslatedValue($home6_about_us, 'item_one_title') }}</h5>
							</div>
						</div>
						<div class="about-desc">
							<p>{{ getTranslatedValue($home6_about_us, 'item_one_description') }}</p>

						</div>
						<div class="about-btn">
							<a href="{{ route('about-us') }}">{{ __('translate.About More') }}<i class="flaticon flaticon-right-arrow"></i></a>
						</div>
					</div>
				</div>
			</div>
			<div class="about-shape71">
				<img src="{{ asset('frontend/theme_five/assets/images/home-saven/about-shape71.png') }}" alt="shape">
			</div>
			<div class="about-shape73">
				<img src="{{ asset('frontend/theme_five/assets/images/home-saven/about-shape73.png') }}" alt="shape">
			</div>
		</div>
	</section>
	<!--==================================================-->
	<!-- End educate About Area -->
	<!--==================================================-->




	<!--==================================================-->
	<!-- start educate course category style-three -->
	<!--==================================================-->
	<div class="course-category-section style-three">
		<div class="container">
			<div class="row section-title-space">
				<!-- section title -->
				<div class="section-title text-center">
					<div class="section-sub-title saven">
						<h6>{{ __('translate.top CATEGORIES') }}</h6>
					</div>
					<div class="section_title saven">
						<h1>{{ __('translate.Educate Trending') }} <span>{{ __('translate.Courses') }}</span></h1>
					</div>
				</div>
			</div>
		</div>
		<div class="container-fluid">
			<div class="row">
				<div class="category-items">
					@foreach ($categories->take(6) as $category)
					<div class="category-item-box">
						<div class="category-icon">
							<img src="{{ asset($category->icon) }}" alt="icon">
						</div>
						<div class="category-items-content">
							<h5>{{ $category->name }}</h5>
							<h3>{{ __('translate.Courses') }} <span>({{ $category->total_course }})</span></h3>
						</div>
						<div class="category-arrow">
							<a href="{{ route('courses', ['category' => $category->slug]) }}"><i class="flaticon flaticon-right-arrow"></i></a>
						</div>
					</div>
					@endforeach

				</div>
			</div>
		</div>
	</div>

	<!--==================================================-->
	<!-- End educate course category style-three -->
	<!--==================================================-->




	<!--==================================================-->
	<!-- Start educate Marquee Area-->
	<!--==================================================-->
	<div class="marquee-section style-two">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<div class="marquee">
						<div class="marquee-block">
							<h3><span><img src="{{ asset('frontend/theme_five/assets/images/home-one/marquee-icon.png') }}" alt="icon"></span>{{ __('translate.Learning Innovation') }}</h3>
							<h3><span><img src="{{ asset('frontend/theme_five/assets/images/home-one/marquee-icon.png') }}" alt="icon"></span>{{ __('translate.Worldwide Learners') }}</h3>
							<h3><span><img src="{{ asset('frontend/theme_five/assets/images/home-one/marquee-icon.png') }}" alt="icon"></span>{{ __('translate.Unique Knowledge') }}</h3>
							<h3><span><img src="{{ asset('frontend/theme_five/assets/images/home-one/marquee-icon.png') }}" alt="icon"></span>{{ __('translate.Dream Today') }}</h3>
						</div>
						<div class="marquee-block">
							<h3><span><img src="{{ asset('frontend/theme_five/assets/images/home-one/marquee-icon.png') }}" alt="icon"></span>{{ __('translate.Learning Innovation') }}</h3>
							<h3><span><img src="{{ asset('frontend/theme_five/assets/images/home-one/marquee-icon.png') }}" alt="icon"></span>{{ __('translate.Worldwide Learners') }}</h3>
							<h3><span><img src="{{ asset('frontend/theme_five/assets/images/home-one/marquee-icon.png') }}" alt="icon"></span>{{ __('translate.Unique Knowledge') }}</h3>
							<h3><span><img src="{{ asset('frontend/theme_five/assets/images/home-one/marquee-icon.png') }}" alt="icon"></span>{{ __('translate.Dream Today') }}</h3>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!--==================================================-->
	<!-- End educate Marquee Area-->
	<!--==================================================-->





	<!--==================================================-->
	<!-- Start educate feature course Area style-saven -->
	<!--==================================================-->
	<div class="feature-course-area style-saven">
		<div class="container">
			<div class="row section-title-space">
				<div class="col-xl-6 col-lg-12">
					<div class="section-sub-title saven">
						<h6>{{ __('translate.feature courses') }}</h6>
					</div>
					<div class="section_title saven">
						<h1>{{ __('translate.Explore Featured') }} <span>{{ __('translate.Courses') }}</span></h1>
					</div>
					<div class="section-title-desc">
						<p>{{ __('translate.Our online education platform offers accessible, and creative pro learning experience tailored to your needs.') }}</p>
					</div>
					<div class="feature-course-btn">
						<a href="{{ route('courses') }}">{{ __('translate.Start Trial') }}<i class="flaticon flaticon-right-arrow"></i></a>
					</div>
				</div>
				@foreach ($home6_courses->take(1) as $course)
				<div class="col-xl-6 col-lg-12">
					<div class="feature-course-box">
						<div class="feature-course-thumb">
							<img src="{{ asset($course->thumb_image) }}" alt="thumb">
						</div>
						<div class="feature-course-content">
							<div class="course-tag">
								<div class="feature-sub-title">
									<h5>{{ $course->category->name }}</h5>
								</div>
								<div class="feature-price">
									@if ($course->offer_price)
										{{ currency($course->offer_price) }}
									@else
										{{ currency($course->regular_price) }}
									@endif
								</div>
							</div>
							<div class="feature-course-title">
								<h3><a href="{{ route('course', $course->slug) }}">{{ html_decode($course?->title) }}</a></h3>
							</div>
							<div class="course-lesson">
								<span><i class="fa-solid fa-graduation-cap"></i>{{ $course->total_lesson }} {{ __('translate.Lessons') }}</span>
							</div>
							<div class="course-weeks">
								<span><i class="fa-solid fa-clock"></i>{{ $course->total_duration }} {{ __('translate.Hour') }}</span>
							</div>
							<div class="feature-course-autor">
								<div class="feature-autor-icon">
									<span><i class="fa-solid fa-user"></i></span>
								</div>
								<div class="feature-autor-title">
									<h3>{{ $course->instructor->name }}</h3>
								</div>
								<div class="course-rating">
									<ul>
										<li><i class="fa-solid fa-star"></i></li>
										<li><i class="fa-solid fa-star"></i></li>
										<li><i class="fa-solid fa-star"></i></li>
										<li><i class="fa-solid fa-star"></i></li>
										<li><i class="fa-solid fa-star"></i></li>
										<li class="ratting-num"><span>({{ $course->total_rating }})</span></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				@endforeach
			</div>
			<div class="row">
				@foreach ($home6_courses->skip(1)->take(2) as $course)
				<div class="col-xl-6 col-lg-12">
					<div class="feature-course-box box-2">
						<div class="feature-course-thumb">
							<img src="{{ asset($course->thumb_image) }}" alt="thumb">
						</div>
						<div class="feature-course-content">
							<div class="course-tag">
								<div class="feature-sub-title">
									<h5>{{ $course->category->name }}</h5>
								</div>
								<div class="feature-price">
									@if ($course->offer_price)
										{{ currency($course->offer_price) }}
									@else
										{{ currency($course->regular_price) }}
									@endif
								</div>
							</div>
							<div class="feature-course-title">
								<h3><a href="{{ route('course', $course->slug) }}">{{ html_decode($course?->title) }}</a></h3>
							</div>
							<div class="course-lesson">
								<span><i class="fa-solid fa-graduation-cap"></i>{{ $course->total_lesson }} {{ __('translate.Lessons') }}</span>
							</div>
							<div class="course-weeks">
								<span><i class="fa-solid fa-clock"></i>{{ $course->total_duration }} {{ __('translate.Hour') }}</span>
							</div>
							<div class="feature-course-autor">
								<div class="feature-autor-icon">
									<span><i class="fa-solid fa-user"></i></span>
								</div>
								<div class="feature-autor-title">
									<h3>{{ $course->instructor->name }}</h3>
								</div>
								<div class="course-rating">
									<ul>
										<li><i class="fa-solid fa-star"></i></li>
										<li><i class="fa-solid fa-star"></i></li>
										<li><i class="fa-solid fa-star"></i></li>
										<li><i class="fa-solid fa-star"></i></li>
										<li><i class="fa-solid fa-star"></i></li>
										<li class="ratting-num"><span>({{ $course->total_rating }})</span></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				@endforeach

			</div>
		</div>
	</div>
	<!--==================================================-->
	<!-- end educate feature course Area style-saven -->
	<!--==================================================-->





	<!--==================================================-->
	<!-- Start educate team Area style-three -->
	<!--==================================================-->
	<div class="team-area style-three">
		<div class="container">
			<div class="row section-title-space">
				<div class="col-lg-12 text-center">
					<div class="section-sub-title saven">
						<h6>{{ __('translate.team member') }}</h6>
					</div>
					<div class="section_title saven">
						<h1>{{ __('translate.Educate Awesome') }} <span>{{ __('translate.Team') }}</span></h1>
					</div>
				</div>
			</div>
			<div class="row">
				@foreach ($instructors->take(6) as $instructor)
				<div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6">
					<div class="single-team-box box-1">
						<div class="team-thumb">
							@if ($instructor->image)
								<img src="{{ asset($instructor->image) }}" alt="thumb">
							@else
								<img src="{{ asset($general_setting->default_avatar) }}" alt="thumb">
							@endif
						</div>
						<div class="team-content">
							<div class="team-title">
								<h3><a href="{{ route('instructor.profile', $instructor->username) }}">{{ html_decode($instructor->name) }}</a></h3>
							</div>
							<div class="team-sub-title">
								<h5>{{ $instructor->designation }}</h5>
							</div>
							<div class="team-view-btn">
								<a href="{{ route('instructor.profile', $instructor->username) }}">{{ __('translate.View portfolio') }}</a>
							</div>
						</div>
						<div class="team-social-icon">
							<div class="team-social">
								<ul>
									<li class="team-icon-1"><a href="{{ html_decode($instructor->facebook) }}" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
									<li class="team-icon-2"><a href="{{ html_decode($instructor->twitter) }}" target="_blank"><i class="fa-brands fa-x-twitter"></i></a>
									</li>
									<li class="team-icon-3"><a href="{{ html_decode($instructor->linkedin) }}" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				@endforeach

			</div>
		</div>
	</div>
	<!--==================================================-->
	<!-- end educate team Area style-three -->
	<!--==================================================-->




	<!--==================================================-->
	<!-- Start educate testimonial Area style-saven -->
	<!--==================================================-->
	<div class="testimonial-area style-saven">
		<div class="container">
			<div class="row">
				<div class="col-xl-6 col-lg-6">
					<div class="testimonial-thumb">
						<img src="{{  asset(getImage($home6_testimonials, 'feature_image')) }}" alt="thumb">
					</div>
				</div>
				<div class="col-xl-6 col-lg-6">
					<div class="row">
						<div class="testi-list7 owl-carousel">
							@foreach ($testimonials as $testimonial)
							<div class="col-lg-12">
								<div class="testi-box">
									<div class="single-testi-box">
										<div class="section-sub-title six">
											<h6>{{ __('translate.clients feedback') }}</h6>
										</div>
										<div class="section_title six">
											<h1>{{ __('translate.Explore Genuine Feedback') }}</h1>
										</div>
										<div class="testi-ratting">
											<ul>
												<li><i class="fa-solid fa-star"></i></li>
												<li><i class="fa-solid fa-star"></i></li>
												<li><i class="fa-solid fa-star"></i></li>
												<li><i class="fa-solid fa-star"></i></li>
												<li><i class="fa-solid fa-star"></i></li>
											</ul>
										</div>
										<div class="testi-desc">
											<p>{{ html_decode($testimonial->comment) }}</p>
										</div>
									</div>
									<div class="testi-autor-box">
										<div class="testi-autor">
											<img src="{{ asset($testimonial->image) }}" alt="autor">
										</div>
										<div class="testi-autor-content">
											<h5 class="autor-title">{{ html_decode($testimonial->name) }}</h5>
											<p class="autor-desi">{{ $testimonial->designation }}</p>
										</div>
									</div>
								</div>
							</div>
							@endforeach

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!--==================================================-->
	<!-- end educate testimonial Area -->
	<!--==================================================-->





	<!--==================================================-->
	<!-- Start educate call to action Area -->
	<!--==================================================-->
	<div class="call-to-action style-one saven">
		<div class="container">
			<div class="row align-items-center call-to-bg">
				<div class="col-xl-5 col-lg-4">
					<div class="call-to-title">
						<h3>{{ __('translate.Learn Anytime, Anywhere') }}</h3>
						<h3>{{ __('translate.Start Your Free Trial!') }}</h3>
					</div>
				</div>
				<div class="col-xl-4 col-lg-4">
					<div class="call-to-wrapper">
						<div class="call-to-box">
							<div class="call-to-icon">
								<img src="{{ asset('frontend/theme_five/assets/images/home-one/call-icon.png') }}" alt="icon">
							</div>
							<div class="call-to-content">
								<h6>{{ __('translate.Call Anytime') }}</h6>
								<h4>{{ $footer->phone }}</h4>
							</div>
						</div>
						<div class="call-to-arrow">
							<img src="{{ asset('frontend/theme_five/assets/images/home-one/call-arrow.png') }}" alt="arrow">
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-lg-4">
					<div class="call-logo-box">
						<div class="call-to-logo">
							<img src="{{ asset('frontend/theme_five/assets/images/home-one/call-logo.png') }}" alt="logo">
						</div>
						<div class="call-rating">
							<p> {{ __('translate.Trustpilot 4.9 Ratings') }}</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--==================================================-->
	<!-- end educate call to action Area -->
	<!--==================================================-->





	<!--==================================================-->
	<!-- start educate blog Area -->
	<!--==================================================-->
	<div class="blog-area style-one saven">
		<div class="container">
			<div class="row section-title-space">
				<div class="col-lg-6">
					<div class="section-sub-title saven">
						<h6>{{ __('translate.educate courses') }}</h6>
					</div>
					<div class="section_title saven">
						<h1>{{ __('translate.Check Out Our') }} <span>{{ __('translate.Latest Blog') }}</span></h1>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="blog-section-btn">
						<a href="{{ route('blogs') }}">{{ __('translate.More details') }}<i class="flaticon flaticon-right-arrow"></i></a>
					</div>
				</div>
			</div>
			<div class="row">
				@foreach ($blogs->take(3) as $blog)
				<div class="col-xl-4 col-lg-6 col-md-6">
					<div class="single-blog-box box-1">
						<div class="single-blog-thumb">
							<img src="{{ asset($blog->image) }}" alt="thumb">
							<div class="blog-meta-top">
								<span>{{ $blog->created_at->format('d-m-Y') }}</span>
							</div>
						</div>
						<div class="blog-content">
							<div class="blog-author">
								<h4>
									@if ($blog->author?->image)
										<img src="{{ asset($blog->author->image) }}" alt="autor">
									@else
										<img src="{{ asset($general_setting->default_avatar) }}" alt="autor">
									@endif
									{{ $blog->author->name }}
								</h4>
							</div>
								<h3><a href="{{ route('blog', $blog->slug) }}">{{ $blog->title }}</a></h3>
							</div>
							<div class="blog-btn">
								<a href="{{ route('blog', $blog->slug) }}">{{ __('translate.Continue Reading') }} <img
										src="{{ asset('frontend/theme_five/assets/images/home-one/blog-icon1.png') }}" alt="icon"></a>
							</div>
						</div>
					</div>

				@endforeach

			</div>
		</div>
	</div>
	<!--==================================================-->
	<!-- end educate blog Area -->
	<!--==================================================-->





	<!--==================================================-->
	<!-- start educate brand Area -->
	<!--==================================================-->
	<div class="brand-area style-one">
		<div class="container">
			<div class="row">
				<div class="col-lg-5">
					<div class="section-sub-title">
						<h6>{{ __('translate.our partners') }}</h6>
					</div>
					<div class="section_title">
						<h1>{{ __('translate.Our Trusted Partners') }}</h1>
					</div>
				</div>
				<div class="col-lg-7">
					<div class="brand-list owl-carousel">
						@foreach ($partners as $partner)
						<div class="col-lg-12">
							<div class="single-brand-box">
								<div class="brand-thumb">
									<img src="{{ asset($partner->logo) }}" alt="brand">
								</div>
							</div>
						</div>

						@endforeach
					</div>
				</div>
			</div>
			<div class="brand-arrow-shape">
				<img src="{{ asset('frontend/theme_five/assets/images/home-one/brand-arrow.png') }}" alt="arrow">
			</div>
			<div class="brand-star-shape">
				<img src="{{ asset('frontend/theme_five/assets/images/home-one/brand-star.png') }}" alt="star">
			</div>
			<div class="brand-line-shape">
				<img src="{{ asset('frontend/theme_five/assets/images/home-one/brand-line.png') }}" alt="line">
			</div>
		</div>
	</div>

	<!--==================================================-->
	<!-- end educate brand Area -->
	<!--==================================================-->




	<!--==================================================-->
	<!-- Start educate Footer Area -->
	<!--==================================================-->
	<div class="footer-area">
		<div class="container">
			<div class="row subscribe align-items-center">
				<div class="col-lg-4 col-md-12">
					<div class="footer-logo">
						<a href="{{ route('home') }}"><img src="{{ asset($general_setting->footer_logo) }}" alt="logo"></a>
					</div>
				</div>
				<div class="col-lg-4 col-md-12">
					<div class="footer-subcribe-title">
						<h3>{{ __('translate.SUBSCRIB') }} <span>{{ __('translate.NEWSLETTER') }}</span></h3>
					</div>
				</div>
				<div class="col-lg-4 col-md-12">
					<form action="{{ route('store-newsletter') }}" method="POST">
                        @csrf
						<div class="subscribe-box">
							<span><i class="fa-classic fa-regular fa-envelope fa-fw"></i></span>
							<input type="text" name="email" placeholder="{{ __('translate.Enter Your Email') }}" required="">
							<button type="submit"><span><i
										class="fa-classic fa-solid fa-location-arrow fa-fw"></i></span></button>
						</div>
					</form>
				</div>
			</div>
			<div class="row add-footer-class">
				<div class="col-xl-3 col-lg-3 col-md-6">
					<div class="footer-widget-content">
						<div class="footer-widget-title">
							<h4>{{ __('translate.Get in Touch') }}</h4>
						</div>
						<div class="footer-desc">
							<p>{{ $footer->about_us }}</p>
						</div>
						<div class="footer-contact-info">
							<div class="footer-contact-phone">
								<p><img src="{{ asset('frontend/theme_five/assets/images/home-one/footer-call.png') }}" alt="call">{{ $footer->phone }}</p>
							</div>
							<div class="footer-contact-address">
								<span><i class="fa-classic fa-regular fa-envelope fa-fw"></i>{{ $footer->email }}</span>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-lg-3 col-md-6">
					<div class="footer-widget-content">
						<div class="footer-widget-title">
							<h4>{{ __('translate.Navigate') }}</h4>
						</div>
						<div class="footer-widget-menu">
							<ul>
                                <li><img src="{{ asset('frontend/theme_five/assets/images/home-one/footer-icon.png') }}" alt="icon"><a href="{{ route('home') }}">{{ __('translate.Home') }}</a></li>
                                <li><img src="{{ asset('frontend/theme_five/assets/images/home-one/footer-icon.png') }}" alt="icon"><a href="{{ route('about-us') }}">{{ __('translate.About') }}</a></li>
                                <li><img src="{{ asset('frontend/theme_five/assets/images/home-one/footer-icon.png') }}" alt="icon"><a href="{{ route('contact-us') }}">{{ __('translate.Contact') }}</a></li>
                                <li><img src="{{ asset('frontend/theme_five/assets/images/home-one/footer-icon.png') }}" alt="icon"><a href="{{ route('faq') }}">{{ __('translate.FAQ') }}</a></li>
                                <li><img src="{{ asset('frontend/theme_five/assets/images/home-one/footer-icon.png') }}" alt="icon"><a href="{{ route('terms-conditions') }}">{{ __('translate.Terms & Conditions') }}</a></li>
                                <li><img src="{{ asset('frontend/theme_five/assets/images/home-one/footer-icon.png') }}" alt="icon"><a href="{{ route('privacy-policy') }}">{{ __('translate.Privacy Policy') }}</a></li>

							</ul>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-lg-2 col-md-6">
					<div class="footer-widget-content">
						<div class="footer-widget-title">
							<h4>{{ __('translate.Categories') }}</h4>
						</div>
						<div class="footer-widget-menu">
							<ul>

                                @foreach ($menu_categories->take(6) as $menu_category)
                            <li>
                                <img src="{{ asset('frontend/theme_five/assets/images/home-one/footer-icon.png') }}" alt="icon">
                                <a href="{{ route('courses', ['category' => $menu_category->slug]) }}">{{ $menu_category?->name }}</a>
                            </li>
                        @endforeach


							</ul>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-lg-4 col-md-6">
					<div class="footer-widget-title">
						<h4>{{ __('translate.Recent Posts') }}</h4>
					</div>
                    @foreach ($footer_blogs->take(3) as $footer_blog)
					<div class="footer-widget-blog first">
						<div class="footer-widget-blog-thumb">
							<img src="{{ asset($footer_blog->image) }}" alt="recent-img">
						</div>
						<div class="footer-widget-blog-content">
							<a href="{{ route('blog', $footer_blog->slug) }}">{{ $footer_blog->title }}</a>
							<p>{{ $footer_blog->created_at->format('d-m-Y') }}</p>
						</div>
					</div>

                    @endforeach
				</div>
			</div>
		</div>
		<div class="footer-bottom-area">
			<div class="container">
				<div class="row footer-bottom">
					<div class="col-lg-6">
						<div class="footer-bottom-desc">
							<p>{{ $footer->copyright }}</p>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="footer-bottom-social-icon">
							<ul>
								<li><a href="{{ $footer->facebook }}"><i class="fab fa-facebook-f"></i></a></li>
								<li><a href="{{ $footer->twitter }}"><i class="fa-brands fa-x-twitter"></i></a></li>
								<li><a href="{{ $footer->instagram }}"><i class="fab fa-linkedin-in"></i></a></li>
								<li><a href="{{ $footer->linkedin }}"><i class="fab fa-pinterest-p"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--==================================================-->
	<!-- End educate Footer Area-->
	<!--==================================================-->






	<!--==================================================-->
	<!-- Start educate Scroll Up-->
	<!--==================================================-->
	<div class="prgoress_indicator active-progress">
		<svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
			<path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"
				style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 212.78;">
			</path>
		</svg>
	</div>
	<!--==================================================-->
	<!-- End educate Scroll Up-->
	<!--==================================================-->

	<!-- modernizr js -->
	<script src="{{ asset('frontend/theme_five/assets/js/vendor/modernizr-3.5.0.min.js') }}"></script>
	<!-- jquery js -->
	<script src="{{ asset('frontend/theme_five/assets/js/vendor/jquery-3.6.2.min.js') }}"></script>
	<script src="{{ asset('frontend/theme_five/assets/js/popper.min.js') }}"></script>
	<!-- bootstrap js -->
	<script src="{{ asset('frontend/theme_five/assets/js/bootstrap.min.js') }}"></script>
	<!-- carousel js -->
	<script src="{{ asset('frontend/theme_five/assets/js/owl.carousel.min.js') }}"></script>
	<!-- counterup js -->
	<script src="{{ asset('frontend/theme_five/assets/js/jquery.counterup.min.js') }}"></script>
	<!-- waypoints js -->
	<script src="{{ asset('frontend/theme_five/assets/js/waypoints.min.js') }}"></script>
	<!-- wow js -->
	<script src="{{ asset('frontend/theme_five/assets/js/wow.js') }}"></script>
	<!-- imagesloaded js -->
	<script src="{{ asset('frontend/theme_five/assets/js/imagesloaded.pkgd.min.js') }}"></script>
	<!-- venobox js -->
	<script src="{{ asset('frontend/theme_five/venobox/venobox.js') }}"></script>
	<!--  animated-text js -->
	<script src="{{ asset('frontend/theme_five/assets/js/animated-text.js') }}"></script>
	<!-- venobox min js -->
	<script src="{{ asset('frontend/theme_five/venobox/venobox.min.js') }}"></script>
	<!-- isotope js -->
	<script src="{{ asset('frontend/theme_five/assets/js/isotope.pkgd.min.js') }}"></script>
	<!-- jquery meanmenu js -->
	<script src="{{ asset('frontend/theme_five/assets/js/jquery.meanmenu.js') }}"></script>
	<!-- jquery scrollup js -->
	<script src="{{ asset('frontend/theme_five/assets/js/jquery.scrollUp.js') }}"></script>
	<!-- barfiller -->
	<script src="{{ asset('frontend/theme_five/assets/js/jquery.barfiller.js') }}"></script>
	<!-- theme js -->
	<script src="{{ asset('frontend/theme_five/assets/js/theme.js') }}"></script>

	<script src="{{ asset('global/toastr/toastr.min.js') }}"></script>



	<script>
		(function ($) {
			"use strict"
			$(document).ready(function () {

				const session_notify_message = @json(Session::get('message'));
				const demo_mode_message = @json(Session::get('demo_mode'));

				if(session_notify_message != null){
					const session_notify_type = @json(Session::get('alert-type', 'info'));
					switch (session_notify_type) {
						case 'info':
							toastr.info(session_notify_message);
							break;
						case 'success':
							toastr.success(session_notify_message);
							break;
						case 'warning':
							toastr.warning(session_notify_message);
							break;
						case 'error':
							toastr.error(session_notify_message);
							break;
					}
				}

				if(demo_mode_message != null){
					toastr.warning("{{ __('translate.All Language keywords are not implemented in the demo mode') }}");
					toastr.info("{{ __('translate.Admin can translate every word from the admin panel') }}");
				}

				const validation_errors = @json($errors->all());

				if (validation_errors.length > 0) {
					validation_errors.forEach(error => toastr.error(error));
				}


				if (localStorage.getItem('educve-cookie') != '1') {
					$('.cookie_consent_modal').removeClass('d-none');
				}

				$('.cookie_consent_close_btn').on('click', function () {
					$('.cookie_consent_modal').addClass('d-none');
				});

				$('.cookie_consent_accept_btn').on('click', function () {
					localStorage.setItem('educve-cookie', '1');
					$('.cookie_consent_modal').addClass('d-none');
				});

				$('.before_auth_wishlist').on("click", function () {
					toastr.error("{{ __('translate.Please login first') }}")
				});

				$(".currency_code").on('change', function () {
					var currency_code = $(this).val();

					window.location.href = "{{ route('currency-switcher') }}" + "?currency_code=" + currency_code;
				});

				$(".language_code").on('change', function () {
					var language_code = $(this).val();

					window.location.href = "{{ route('language-switcher') }}" + "?lang_code=" + language_code;
				});


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


				// Show first category by default
				$('.menu-filtering li:first').addClass('current_menu_item');

				$('.menu-filtering li').on('click', function() {
					$('.menu-filtering li').removeClass('current_menu_item');
					$(this).addClass('current_menu_item');

					let filter_value = $(this).data('filter');

					$(".grid-item").css('display', 'none');
					$(filter_value).css('display', 'block');
				});




			});
		})(jQuery);



	</script>

</body>

</html>
