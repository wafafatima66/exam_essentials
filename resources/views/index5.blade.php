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
        .case-autor-img img{
            width: 40px !important;
            height: 40px !important;
            object-fit: cover;
            border-radius: 50%;
        }

        .blog-author img{
            width: 36px !important;
            height: 36px !important;
            object-fit: cover;
        }

        .footer-widget-blog-thumb img{
            width: 76px !important;
            height: 76px !important;
            object-fit: cover;
        }

        .testi-autor img{
            width: 70px !important;
            height: 70px !important;
            object-fit: cover;
            border-radius: 50%;
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
	<!-- Start educate Header top area -->
	<!--==================================================-->
	<div class="header-top-area">
		<div class="container-fluid">
			<div class="row header-top">
				<div class="col-xxl-6 col-xl-8 col-lg-8">
					<div class="header-top-welcome">
						<p><img src="{{ asset('frontend/theme_five/assets/images/home-one/top-star.png') }}" alt="star">{{ __('translate.Welcome to') }} <a
								href="{{ route('home') }}">{{ env('APP_NAME') }}</a>– {{ __('translate.Unlocking the Power of Education!') }}</p>
					</div>
				</div>
				<div class="col-xxl-6 col-xl-4 col-lg-4">
					<div class="header-top-right">
						<div class="educate-header-from">
                            @guest('web')
							<a class="login-btn" href="{{ route('student.login') }}"><i class="bi bi-arrow-right-circle"></i>{{ __('translate.Login') }}</a>
							<a class="sign-up-btn" href="{{ route('student.register') }}"><i class="bi bi-person-plus"></i>{{ __('translate.Register') }}</a>
                            @else
                            <a class="sign-up-btn" href="{{ Auth::guard('web')->user()->is_seller == 1 ? route('instructor.dashboard') : route('student.dashboard') }}"><i class="bi bi-person-plus"></i>{{ __('translate.Dashboard') }}</a>
                            @endguest
						</div>
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
	<div class="educate-header-area" id="sticky-header">
		<div class="container-fluid">
			<div class="row header-wrap align-items-center">
				<div class="col-lg-2">
					<div class="header-logo">
						<a class="active_logo" href="{{ route('home') }}"><img src="{{ asset($general_setting->logo) }}" alt="logo"></a>
						<a class="logo_two" href="{{ route('home') }}"><img src="{{ asset($general_setting->footer_logo) }}" alt="logo"></a>
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
							<div class="header-src-btn">
								<div class="search-box-btn search-box-outer"><i
										class="fa-solid fa-magnifying-glass"></i></div>
							</div>

                                @php
                                    $carts = session()->get('cart', []);
                                @endphp
							<button class="cart_btn headers-button" onclick="window.location.href='{{ route('carts') }}'">
								<i class="fa-solid fa-cart-shopping"></i>
								<small class="cart_counter" id="total_cart">{{ count($carts) }}</small>
							</button>
							<div class="header-btn">
								<a href="{{ route('contact-us') }}">{{ __('translate.Contact') }}<i class="flaticon flaticon-right-arrow"></i></a>
							</div>
							<div class="header-sidbar-button navSidebar-button">
								<a href="#"><i class="bi bi-justify-left"></i></a>
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
				<input id="search1" type="search"  value="" placeholder="{{ __('translate.Search Here') }}" name="search" required="">
				<button type="submit"><i class="fas fa-search"></i></button>
			</div>
		</form>
	</div>
	<!--==================================================-->
	<!-- End Search Popup -->
	<!--==================================================-->









	<!-- Sidebar Cart Item -->
	<div class="xs-sidebar-group info-group">
		<div class="xs-overlay xs-bg-black"></div>
		<div class="xs-sidebar-widget">
			<div class="sidebar-widget-container">
				<div class="widget-heading">
					<a href="#" class="close-side-widget">
						<i class="far fa-times-circle"></i>
					</a>
				</div>
				<div class="sidebar-textwidget">
					<!-- Sidebar Info Content -->
					<div class="sidebar-info-contents">
						<div class="content-inner">
							<div class="nav-logo">
								<a href="{{ route('home') }}"><img src="{{ asset($general_setting->footer_logo) }}" alt="logo"></a>
							</div>
							<div class="content-box">
								<h2>{{ __('translate.About Us') }}</h2>
								<p class="text">{{ $footer->about_us }}</p>
								<a href="{{ route('contact-us') }}" class="theme-btn btn-style-two"><span>{{ __('translate.Consultation') }}</span> <i
										class="fas fa-heart"></i></a>
							</div>
							<div class="contact-info">
								<h2>{{ __('translate.Contact Us') }}</h2>
								<ul class="list-style-one">
									<li><span class="icon flaticon-email"></span>{{ $footer->address }}</li>
									<li><span> <i class="bi bi-telephone-inbound"></i> </span>{{ $footer->phone }}</li>
									<li><span><i class="bi bi-geo-alt"></i></span>{{ $footer->email }}</li>

								</ul>
							</div>
							<!-- Social Box -->
							<ul class="social-box">
								<li class="facebook"><a href="{{ $footer->facebook }}" class="fab fa-facebook-f"></a></li>
								<li class="twitter"><a href="{{ $footer->instagram }}" class="fab fa-instagram"></a></li>
								<li class="linkedin"><a href="{{ $footer->twitter }}" class="fa-brands fa-x-twitter"></a></li>
								<li class="youtube"><a href="{{ $footer->linkedin }}" class="fab fa-linkedin-in"></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--End Sidebar Cart Item -->





	<!--==================================================-->
	<!-- Start educate Hero Area Area style-one -->
	<!--==================================================-->
	<section class="hero_area style-one d-flex align-items-center">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6">
					<!-- hero content -->
					<div class="hero_content">
						<h5><i class="bi bi-check2"></i>{{ getTranslatedValue($home5_hero_section, 'heading') }}</h5>
						<h1>{{ getTranslatedValue($home5_hero_section, 'heading_two') }}</h1>
						<h1>{{ getTranslatedValue($home5_hero_section, 'heading_three') }}</h1>
						<p>{!! strip_tags(clean(getTranslatedValue($home5_hero_section, 'description')),'<span>') !!}</p>
						<!-- hero button -->
						<div class="hero-button">
							<div class="hero-btn">
								<a href="{{ route('register') }}">{{ __('translate.Get Started') }}<i class="flaticon flaticon-right-arrow"></i></a>
							</div>
							<div class="hero-course-btn">
								<a href="{{ route('courses') }}">{{ __('translate.Find Course') }}<i class="flaticon flaticon-right-arrow"></i></a>
							</div>
						</div>
					</div>
					<div class="hero-rating-box">
						<div class="hero-rating-icon">
							<img src="{{ asset('frontend/theme_five/assets/images/home-one/star-icon.png') }}" alt="star">
							<span>{{ getTranslatedValue($home5_hero_section, 'total_rating') }}</span>
						</div>
						<div class="hero-rating-item-box">
							<div class="hero-star-icon">
								<ul>
									<li><i class="fa-solid fa-star"></i></li>
									<li><i class="fa-solid fa-star"></i></li>
									<li><i class="fa-solid fa-star"></i></li>
									<li><i class="fa-solid fa-star"></i></li>
									<li><i class="fa-solid fa-star"></i></li>
								</ul>
							</div>
							<div class="hero-rating-num">
								<span>({{ getTranslatedValue($home5_hero_section, 'average_rating') }})</span>
							</div>
							<div class="hero-rating-des">
								<p>{{ getTranslatedValue($home5_hero_section, 'total_rating_title') }}</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="hero-thumb-wrapper">
						<div class="hero-thumb">
							<img src="{{ asset(getImage($home5_hero_section, 'feature_image')) }}" alt="thumb">
						</div>
						<div class="hero-shape1 rotateme">
							<img src="{{ asset('frontend/theme_five/assets/images/home-one/hero-shape1.png') }}" alt="shape1">
						</div>
						<div class="hero-arrow-shape">
							<img src="{{ asset('frontend/theme_five/assets/images/home-one/hero-arrow.png') }}" alt="arrow">
						</div>
						<div class="hero-dot-shape">
							<img src="{{ asset('frontend/theme_five/assets/images/home-one/hero-dot.png') }}" alt="dot">
						</div>
						<div class="hero-shape3 bounce-animate-3">
							<img src="{{ asset('frontend/theme_five/assets/images/home-one/hero-shape3.png') }}" alt="shape3">
						</div>
						<div class="hero-autor-box">
							<div class="autor-thumb">
								<img src="{{ asset(getImage($home5_hero_section, 'instructor_image')) }}" alt="autor">
							</div>
							<div class="hero-autor-content">
								<h3 class="counter">{{ getTranslatedValue($home5_hero_section, 'total_instructor') }}</h3>
								<span>+</span>
								<p>{{ __('translate.Expert Instructor') }}</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--==================================================-->
	<!-- End educate Hero  Area -->
	<!--==================================================-->




	<!--==================================================-->
	<!-- Start educate feature Area-->
	<!--==================================================-->
	<section class="feature-area style-one">
		<div class="container">
			<div class="row align-items-center section-title-space">
				<div class="col-lg-6">
					<div class="section-sub-title">
						<h6>{{ getTranslatedValue($home5_key_feature, 'section_short_title') }}</h6>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="section_title">
						<h1>{{ getTranslatedValue($home5_key_feature, 'section_title') }}</h1>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
					<div class="single-feature-box box-1">
						<div class="feature-icon">
							<img src="{{ asset(getImage($home5_key_feature, 'item_one_image')) }}" alt="feature-icon">
						</div>
						<div class="feature-content">
							<h4 class="feature-title">{{ getTranslatedValue($home5_key_feature, 'item_one_title') }}</h4>
							<p class="feature-desc">{{ getTranslatedValue($home5_key_feature, 'item_one_description') }}</p>
						</div>
						<div class="educate-hover-box hover-bx"></div>
						<div class="educate-hover-box hover-bx2"></div>
						<div class="educate-hover-box hover-bx3"></div>
						<div class="educate-hover-box hover-bx4"></div>
					</div>
				</div>
				<div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
					<div class="single-feature-box box-2">
						<div class="feature-icon">
							<img src="{{ asset(getImage($home5_key_feature, 'item_two_image')) }}" alt="feature-icon">
						</div>
						<div class="feature-content">
							<h4 class="feature-title">{{ getTranslatedValue($home5_key_feature, 'item_two_title') }}</h4>
							<p class="feature-desc">{{ getTranslatedValue($home5_key_feature, 'item_two_description') }}</p>
						</div>
						<div class="educate-hover-box hover-bx"></div>
						<div class="educate-hover-box hover-bx2"></div>
						<div class="educate-hover-box hover-bx3"></div>
						<div class="educate-hover-box hover-bx4"></div>
					</div>
				</div>
				<div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
					<div class="single-feature-box box-3">
						<div class="feature-icon">
							<img src="{{ asset(getImage($home5_key_feature, 'item_three_image')) }}" alt="feature-icon">
						</div>
						<div class="feature-content">
							<h4 class="feature-title">{{ getTranslatedValue($home5_key_feature, 'item_three_title') }}</h4>
							<p class="feature-desc">{{ getTranslatedValue($home5_key_feature, 'item_three_description') }}</p>
						</div>
						<div class="educate-hover-box hover-bx"></div>
						<div class="educate-hover-box hover-bx2"></div>
						<div class="educate-hover-box hover-bx3"></div>
						<div class="educate-hover-box hover-bx4"></div>
					</div>
				</div>
			</div>
			<div class="feature-shape1">
				    <img src="{{ asset('frontend/theme_five/assets/images/home-one/feature-shape1.png') }}" alt="shape">
			</div>
			<div class="feature-shape2 rotateme">
				<img src="{{ asset('frontend/theme_five/assets/images/home-one/feature-shape2.png') }}" alt="shape2">
			</div>
		</div>
	</section>
	<!--==================================================-->
	<!-- End educate feature Area-->
	<!--==================================================-->





	<!--==================================================-->
	<!-- Start educate About Area style-one -->
	<!--==================================================-->
	<section class="about-area style-one">
		<div class="container">
			<div class="row">
				<div class="col-xl-6 col-lg-12">
					<div class="about-thumb-wrapper">
						<div class="about-thumb">
							<img src="{{ asset(getImage($home5_about_us, 'feature_image')) }}" alt="thumb">
						</div>
						<div class="about-thumb-shape1 bounce-animate-3">
							<img src="{{ asset('frontend/theme_five/assets/images/home-one/about-shape1.png') }}" alt="shape1">
						</div>
						<div class="about-thumb-shape2 rotateme">
							<img src="{{ asset('frontend/theme_five/assets/images/home-one/about-shape2.png') }}" alt="shape2">
						</div>
						<div class="about-thumb-shape3">
							<img src="{{ asset('frontend/theme_five/assets/images/home-one/about-shape3.png') }}" alt="shape3">
						</div>
					</div>
				</div>
				<div class="col-xl-6 col-lg-12">
					<div class="about_content">
						<!-- section title -->
						<div class="section-sub-title">
							<h6>{{ getTranslatedValue($home5_about_us, 'short_title') }}</h6>
						</div>
						<div class="section_title">
							<h1>{{ getTranslatedValue($home5_about_us, 'title') }}</h1>
						</div>
						<div class="section-title-desc">
							<p>{{ getTranslatedValue($home5_about_us, 'description') }}</p>
						</div>
						<div class="row">
							<div class="col-lg-6">
								<div class="about-item-list">
									<span><img src="{{ asset('frontend/theme_five/assets/images/home-one/about-icon.png') }}" alt="icon">{{ getTranslatedValue($home5_about_us, 'item_one') }}</span>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="about-item-list">
									<span><img src="{{ asset('frontend/theme_five/assets/images/home-one/about-icon.png') }}" alt="icon">{{ getTranslatedValue($home5_about_us, 'item_two') }}</span>
								</div>
							</div>
						</div>
						<div class="row about-border">
							<div class="col-lg-6">
								<div class="about-item-box">
									<div class="about-item-count">
										<h3 class="counter">{{ getTranslatedValue($home5_about_us, 'total_instructor') }}</h3>
										<span>+</span>
									</div>
									<div class="about-item-desc">
										<p>{{ getTranslatedValue($home5_about_us, 'total_instructor_title') }}</p>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="about-item-box two">
									<div class="about-iteam-count">
										<h3 class="counter">{{ getTranslatedValue($home5_about_us, 'enrolled_student') }}</h3>
										<span>k+</span>
									</div>
									<div class="about-item-desc last">
										<p>{{ getTranslatedValue($home5_about_us, 'enrolled_student_title') }}</p>
									</div>
								</div>
							</div>
						</div>
						<div class="about-btn">
							<a href="{{ route('about-us') }}">{{ __('translate.More About') }}<i class="flaticon flaticon-right-arrow"></i></a>
						</div>
					</div>
				</div>
			</div>
			<div class="about-shape4">
				<img src="{{ asset('frontend/theme_five/assets/images/home-one/about-shape4.png') }}" alt="shape4">
			</div>
			<div class="about-shape5">
				<img src="{{ asset('frontend/theme_five/assets/images/home-one/about-shape5.png') }}" alt="shape5">
			</div>
		</div>
	</section>
	<!--==================================================-->
	<!-- End educate About Area -->
	<!--==================================================-->





	<!--==================================================-->
	<!-- Start educate Marquee Area-->
	<!--==================================================-->
	<div class="marquee-section">
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
	<!-- Start educate case study Area style-one -->
	<!--==================================================-->
	<div class="case-study-area style-one">
		<div class="container">
			<div class="row align-items-center section-title-space">
				<div class="col-lg-6">
					<div class="section-sub-title">
						<h6>{{ __('translate.OUR COURSES') }}</h6>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="section_title">
						<h1>{{ __('translate.Our Courses – Comprehensive') }}</h1>
						<h1>{{ __('translate.Available all programs') }}</h1>
					</div>
				</div>
			</div>
			<div class="row case-study-bg">
				<div class="col-lg-12 col-sm-12">
					<div class="case_study_nav">
						<div class="case_study_menu">
							<ul class="menu-filtering">
                                {{-- <li data-filter="*" class="current_menu_item">All Categorize</li> --}}
								@foreach ($home5_filter_categories as $category)
									<li data-filter=".{{ $category->slug }}" class="{{ $loop->first ? 'first_category_filter' : '' }}">{{ $category->name }}</li>
								@endforeach

							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<!-- row2 -->
			<div class="row image_load">
                @foreach ($home5_filter_categories as $category)
                    @foreach($category?->courses->take(6) as $course_index => $course)
                        <div class="col-xl-4 col-lg-6 col-md-6 grid-item {{ $category->slug }}" style="{{ !$loop->parent->first ? 'display: none;' : '' }}">
                            <div class="case-study-single-box">
                                <div class="case-study-thumb">
                                    <img src="{{ asset($course?->thumb_image) }}" alt="thumb">
                                    <div class="case-meta-top">
                                        <span>@if ($course->offer_price)
                                            {{ currency($course->offer_price) }}
                                        @else
                                            {{ currency($course->regular_price) }}
                                        @endif</span>
                                    </div>
                                </div>
                                <div class="case-study-content">
                                    <h5>{{ $category->name }}</h5>
                                    <h4><a href="{{ route('course', $course->slug) }}">{{ html_decode($course?->title) }}</a></h4>
                                    <div class="case-rating">
                                        @php
                                            $rating = $course->avg_rating ?? 0;
                                            $fullStars = floor($rating);
                                            $halfStar = ($rating - $fullStars) >= 0.5 ? 1 : 0;
                                            $emptyStars = 5 - $fullStars - $halfStar;
                                        @endphp
                                        <ul>
                                            @for ($i = 0; $i < $fullStars; $i++)
                                                <li><i class="fa-solid fa-star"></i></li>
                                            @endfor
                                            @if ($halfStar)
                                                <li><i class="fa-solid fa-star-half-stroke"></i></li>
                                            @endif
                                            @for ($i = 0; $i < $emptyStars; $i++)
                                                <li><i class="fa-regular fa-star"></i></li>
                                            @endfor
                                        </ul>
                                        <div class="case-rating-num">
                                            <span>({{ $course->total_rating }} {{ __('translate.Ratings') }})</span>
                                        </div>
                                    </div>
                                    <div class="case-autor-box">
                                        <div class="case-autor-img">
                                            @if ($course?->instructor?->image)
                                                <img src="{{ asset($course?->instructor?->image) }}" alt="" class="w-100 td_radius_10"/>
                                            @else
                                                <img src="{{ asset($general_setting->default_avatar) }}" alt="" class="w-100 td_radius_10"/>
                                            @endif

                                        </div>
                                        <div class="case-autor-content">
                                            <h3>{{ html_decode($course?->instructor?->name) }}</h3>
                                            <p>{{ html_decode($course?->instructor?->designation) }}</p>
                                        </div>
                                    </div>
                                    <div class="case-course-content">
                                        <div class="course-lesson">
                                            <span><i class="fa-regular fa-file-lines"></i> {{ $course->total_lesson }} {{ __('translate.Lessons') }}</span>
                                        </div>
                                        <div class="course-student">
                                            <span><i class="fa-regular fa-user"></i> {{ $course->total_student }} {{ __('translate.Students') }}</span>
                                        </div>
                                    </div>
                                    <div class="course-btn">
                                        <a href="javascript:;" data-course_id="{{ $course->id }}" class="add_to_cart">{{ __('translate.ENROL NOW') }}<i class="flaticon flaticon-right-arrow"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endforeach

			</div>
			<div class="case-shape1">
				<img src="{{ asset('frontend/theme_five/assets/images/home-one/case-shape1.png') }}" alt="shape">
			</div>
		</div>
	</div>
	<!--==================================================-->
	<!--End educate case study Area -->
	<!--==================================================-->





	<!--==================================================-->
	<!-- Start educate why choose Area -->
	<!--==================================================-->
	<div class="why-choose-area style-one">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-7">
					<div class="choose-content">
						<!-- section title -->
						<div class="section-sub-title">
							<h6>{{ getTranslatedValue($home5_why_choose_us, 'short_title') }}</h6>
						</div>
						<div class="section_title">
							<h1>{{ getTranslatedValue($home5_why_choose_us, 'title') }}</h1>
						</div>
						<div class="section-title-desc">
							<p>{{ getTranslatedValue($home5_why_choose_us, 'description') }}</p>
						</div>
						<div class="choose-item-menu">
							<ul>
								<li><img src="{{ asset('frontend/theme_five/assets/images/home-one/choose-icon1.png') }}" alt="icon">{{ getTranslatedValue($home5_why_choose_us, 'item_one') }}</li>
								<li><img src="{{ asset('frontend/theme_five/assets/images/home-one/choose-icon2.png') }}" alt="icon">{{ getTranslatedValue($home5_why_choose_us, 'item_two') }}</li>
								<li><img src="{{ asset('frontend/theme_five/assets/images/home-one/choose-icon3.png') }}" alt="icon">{{ getTranslatedValue($home5_why_choose_us, 'item_three') }}</li>
								</li>
								<li><img src="{{ asset('frontend/theme_five/assets/images/home-one/choose-icon4.png') }}" alt="icon">{{ getTranslatedValue($home5_why_choose_us, 'item_four') }}</li>
								</li>
							</ul>
						</div>
						<p class="choose-suport-des"><img src="{{ asset('frontend/theme_five/assets/images/home-one/top-star.png') }}" alt="star">{{ getTranslatedValue($home5_why_choose_us, 'support_title') }}</p>
						<div class="choose-btn">
							<a href="{{ route('contact-us') }}">{{ __('translate.GET STARTED') }}<i class="flaticon flaticon-right-arrow"></i></a>
						</div>
					</div>
				</div>
				<div class="col-lg-5">
					<div class="choose-thumb">
						<img src="{{ asset(getImage($home5_why_choose_us, 'feature_image')) }}" alt="thumb">
						<div class="choose-skill-box">
							<div class="choose-skill-icon">
								<img src="{{ asset('frontend/theme_five/assets/images/home-one/choose-rat-icon.png') }}" alt="rat">
							</div>
							<div class="choose-skill-content">
								<h3 class="counter">{{ getTranslatedValue($home5_why_choose_us, 'experience_year') }}</h3>
								<span>+</span>
								<p>{{ getTranslatedValue($home5_why_choose_us, 'experience_title') }}</p>
							</div>
						</div>
						<div class="choose-shape-dot">
							<img src="{{ asset('frontend/theme_five/assets/images/home-one/choose-dot.png') }}" alt="dot-shape">
						</div>
						<div class="choose-shape-star">
							<img src="{{ asset('frontend/theme_five/assets/images/home-one/choose-star.png') }}" alt="star-shape">
						</div>
					</div>
				</div>
			</div>
			<div class="choose-shape1">
				<img src="{{ asset('frontend/theme_five/assets/images/home-one/choose-shape1.png') }}" alt="shape">
			</div>
			<div class="choose-shape2">
				<img src="{{ asset('frontend/theme_five/assets/images/home-one/choose-circle.png') }}" alt="shape">
			</div>
		</div>
	</div>

	<!--==================================================-->
	<!-- Start educate why choose Area -->
	<!--==================================================-->






	<!--==================================================-->
	<!-- Start educate course design offer Area -->
	<!--==================================================-->
        <div class="course-design-offer-area style-one">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="course-design-thumb">
                            <img src="{{ asset(getImage($home5_course_design_offer, 'video_image')) }}" alt="thumb">
                            <div class="course-video-icon">
                                <a class="video-vemo-icon venobox vbox-item" data-vbtype="youtube" data-autoplay="true"
                                    href="https://www.youtube.com/embed/{{ getTranslatedValue($home5_course_design_offer, 'youtube_video_id') }}"><i
                                        class="fa-classic fa-solid fa-play fa-fw"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="single-course-offer-box">
                            <div class="course-offer-content">
                                <h6>{{ getTranslatedValue($home5_course_design_offer, 'category_name') }}</h6>
                                <h4>{{ getTranslatedValue($home5_course_design_offer, 'title') }}</h4>
                                <h4>{{ getTranslatedValue($home5_course_design_offer, 'title_two') }}</h4>
                                <div class="offer-rating">
                                    @php
                                        $average_rating = getTranslatedValue($home5_course_design_offer, 'average_rating');
                                        $rating_count = getTranslatedValue($home5_course_design_offer, 'rating');
                                        $fullStars = floor($average_rating);
                                        $halfStar = ($average_rating - $fullStars) >= 0.5 ? 1 : 0;
                                        $emptyStars = 5 - $fullStars - $halfStar;
                                    @endphp
                                    <ul>
                                        @for ($i = 0; $i < $fullStars; $i++)
                                            <li><i class="fa-solid fa-star"></i></li>
                                        @endfor
                                        @if ($halfStar)
                                            <li><i class="fa-classic fa-solid fa-star-half-stroke fa-fw"></i></li>
                                        @endif
                                        @for ($i = 0; $i < $emptyStars; $i++)
                                            <li><i class="fa-regular fa-star"></i></li>
                                        @endfor
                                    </ul>
                                    <div class="offer-rating-rate">
                                        <span>({{ $average_rating }}/{{ $rating_count }} {{ __('Ratings') }})</span>
                                    </div>
                                    <div class="course-offer-price">
                                        <span>{{ currency(getTranslatedValue($home5_course_design_offer, 'price')) }} <del>{{ currency(getTranslatedValue($home5_course_design_offer, 'offer_price')) }}</del></span>
                                    </div>
                                </div>
                                <div class="course-offer-btn">
                                    <a href="{{ getTranslatedValue($home5_course_design_offer, 'enroll_link') }}">{{ __('translate.ENROL NOW') }}<i class="flaticon flaticon-right-arrow"></i></a>
                                </div>
                                <div class="course-offer-discount">
                                    <h5>{{ getTranslatedValue($home5_course_design_offer, 'discount') }}%</h5>
                                    <span>{{ __('translate.off') }}</span>
                                </div>
                            </div>
                            <div class="offer-thumb">
                                <img src="{{ asset(getImage($home5_course_design_offer, 'feature_image')) }}" alt="thumb">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

	<!--==================================================-->
	<!-- end educate course design offer Area -->
	<!--==================================================-->




	<!--==================================================-->
	<!-- Start educate team Area -->
	<!--==================================================-->
	<div class="team-area style-one">
		<div class="container">
			<div class="row section-title-space">
				<div class="col-lg-6">
					<div class="section-sub-title">
						<h6>{{ __('translate.INSTRUCTOR') }}</h6>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="section_title">
						<h1>{{ __('translate.Introducing the Educators and') }}</h1>
						<h1>{{ __('translate.Professional Instructor') }}</h1>
					</div>
				</div>
			</div>
			<div class="row">
                @foreach ($instructors->take(4) as $instructor)
				<div class="col-xl-3 col-lg-6 col-md-6">
					<div class="single-team-box box-1">
						<div class="team-thumb">
                            @if ($instructor?->image)
                                <img src="{{ asset($instructor?->image) }}" alt="" class=""/>
                            @else
                                <img src="{{ asset($general_setting->default_avatar) }}" alt="" class=""/>
                            @endif
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
						<div class="team-content">
							<div class="team-title">
								<h3><a href="{{ route('instructor.profile', $instructor->username) }}"> {{ html_decode($instructor->name) }}</a></h3>
							</div>
							<div class="team-sub-title">
								<h5>{{ html_decode($instructor->designation) }}</h5>
							</div>
							@php
								$avgRating = $instructor->avg_rating ?? 0;
								$totalRating = $instructor->total_rating ?? 0;
								$fullStars = floor($avgRating);
								$halfStar = ($avgRating - $fullStars) >= 0.5 ? 1 : 0;
								$emptyStars = 5 - $fullStars - $halfStar;
							@endphp
							<div class="team-ratting">
								<ul>
									@for ($i = 0; $i < $fullStars; $i++)
										<li><i class="fa-solid fa-star"></i></li>
									@endfor
									@if ($halfStar)
										<li><i class="fa-classic fa-solid fa-star-half-stroke fa-fw"></i></li>
									@endif
									@for ($i = 0; $i < $emptyStars; $i++)
										<li><i class="fa-regular fa-star"></i></li>
									@endfor
								</ul>
							</div>
							<div class="team-rating-rate">
								<span>({{ number_format($avgRating, 1) }})</span>
								@if($totalRating)
									<span class="team-total-rating">({{ $totalRating }} ratings)</span>
								@endif
							</div>
						</div>
					</div>
				</div>
				@endforeach

			</div>
			<div class="team-shape1">
				<img src="{{ asset('frontend/theme_five/assets/images/home-one/team-shape1.png') }}" alt="shape1">
			</div>
			<div class="team-shape2">
				<img src="{{ asset('frontend/theme_five/assets/images/home-one/team-shape2.png') }}" alt="shape2">
			</div>
		</div>
	</div>
	<!--==================================================-->
	<!-- end educate team Area -->
	<!--==================================================-->





	<!--==================================================-->
	<!-- Start educate testimonial Area -->
	<!--==================================================-->
	<div class="testimonial-area style-one">
		<div class="container">
			<div class="row section-title-space align-items-center">
				<div class="col-lg-6">
					<div class="section-sub-title">
						<h6>{{ getTranslatedValue($home5_testimonials, 'title') }}</h6>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="section_title">
						<h1>{{ getTranslatedValue($home5_testimonials, 'title_two') }}</h1>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-6">
					<div class="testi-thumb-wrapper">
						<div class="testimonial-thumb">
							<img src="{{ asset(getImage($home5_testimonials, 'feature_image')) }}" alt="thumb">
						</div>
						<div class="testi-dot-shape">
							<img src="{{ asset('frontend/theme_five/assets/images/home-one/testi-dot.png') }}" alt="dot">
						</div>
						<div class="testi-map-shape">
							<img src="{{ asset('frontend/theme_five/assets/images/home-one/testi-map.png') }}" alt="map">
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="row">
						<div class="testi-list owl-carousel">
                            @foreach ($testimonials as $testimonial)
							<div class="col-lg-12">
								<div class="testi-box">
									<div class="single-testi-box">
										<div class="testi-quote">
											<img src="{{ asset('frontend/theme_five/assets/images/home-one/testi-quote.png') }}" alt="quote">
										</div>
										<div class="testi-title">
											<h3>{{ __('translate.Impresive Learning!') }}</h3>
										</div>
										<div class="testi-desc">
											<p>{{ html_decode($testimonial->comment) }}</p>
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
									</div>
									<div class="testi-autor-box">
										<div class="testi-autor">
											<img src="{{ asset($testimonial->image) }}" alt="autor">
										</div>
										<div class="testi-autor-content">
											<h5 class="autor-title">{{ html_decode($testimonial->name) }}</h5>
											    <p class="autor-desi">{{ html_decode($testimonial->designation) }}</p>
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
	<div class="call-to-action style-one">
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
							<p>{{ __('Trustpilot 4.9 Ratings') }}</p>
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
        <div class="blog-area style-one">
            <div class="container">
                <div class="row section-title-space">
                    <div class="col-lg-6">
                        <div class="section-sub-title">
                            <h6>{{ __('translate.LATEST BLOG') }}</h6>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="section_title">
                            <h1>{{ __('translate.Read the Latest Insights and') }}</h1>
                            <h1>{{ __('translate.Updates Educate Blog') }}</h1>
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


                                        {{ $blog->author->name }}</h4>
                                </div>
                                <div class="blog-title">
                                    <h3><a href="{{ route('blog', $blog->slug) }}">{{ $blog->title }}</a></h3>
                                </div>
                                <div class="blog-btn">
                                    <a href="{{ route('blog', $blog->slug) }}">{{ __('translate.Continue Reading') }} <img
                                            src="{{ asset('frontend/theme_five/assets/images/home-one/blog-icon1.png') }}" alt="icon"></a>
                                </div>
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
