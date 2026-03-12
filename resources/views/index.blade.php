@extends('layout')

@section('title')
    <title>{{ $seo_setting->seo_title }}</title>
    <meta name="title" content="{{ $seo_setting->seo_title }}">
    <meta name="description" content="{!! strip_tags(clean($seo_setting->seo_description)) !!}">
@endsection

@section('front-content')


<section class="ee_hero mt-5">
  <div class="container">
    <div class="row align-items-center ee_hero_row">
      <div class="col-lg-7">
        <div class="ee_hero_left">
          {{-- <div class="ee_hero_kicker">
            <span class="ee_hero_kicker_dot"></span>
            IGCSE • O Level • A Level
          </div> --}}
          <h1 class="ee_hero_title">Boost your grades with <span class="ee_hero_title_accent">Exam Essentials</span>.</h1>
          <p class="ee_hero_subtitle">Learn with thousands of students worldwide by exploring lessons, tackling practice questions and getting AI-powered support.</p>
          <div class="ee_hero_highlights">
            <div class="ee_hero_highlight">
              <i class="fa-solid fa-circle-check"></i>
              <span>High-impact crash courses</span>
            </div>
            <div class="ee_hero_highlight">
              <i class="fa-solid fa-circle-check"></i>
              <span>Practice + progress tracking</span>
            </div>
            <div class="ee_hero_highlight">
              <i class="fa-solid fa-circle-check"></i>
              <span>AI-powered support</span>
            </div>
          </div>
      

<div class="ee_hero_art">



    @if(getImage($home1_hero_section, 'student_image'))
        <img class="ee_hero_art_main"
             src="{{ asset(getImage($home1_hero_section, 'left_side_image_one')) }}"
             alt="Student learning">
    @endif

    @if(getImage($home1_hero_section, 'right_side_image_one'))
        <img class="ee_hero_art_secondary"
             src="{{ asset(getImage($home1_hero_section, 'right_side_image_one')) }}"
             alt="Study session">
    @endif

</div>
        </div>
      </div>

      <div class="col-lg-5">
        <div class="ee_hero_card">
          <div class="ee_hero_card_head">
            <div class="ee_hero_card_badge">Start Here</div>
            <h2 class="ee_hero_card_title">Start learning today by signing up!</h2>
            <p class="ee_hero_card_subtitle">Pick your exam session and we’ll guide you step-by-step.</p>
          </div>

          <div class="ee_hero_card_options">
            <a class="ee_hero_card_option" href="{{ route('register.student') }}">
              <span class="ee_hero_card_option_text">I'm an A Level May 2026 Candidate</span>
              <i class="fa-solid fa-arrow-right"></i>
            </a>

            <a class="ee_hero_card_option" href="{{ route('register.instructor') }}">
              <span class="ee_hero_card_option_text">I'm an O Level May 2026 Candidate</span>
              <i class="fa-solid fa-arrow-right"></i>
            </a>

            <a class="ee_hero_card_option" href="{{ route('register.student') }}">
              <span class="ee_hero_card_option_text">I'm an A Level Oct 2026 Candidate</span>
              <i class="fa-solid fa-arrow-right"></i>
            </a>

            <a class="ee_hero_card_option" href="{{ route('contact-us') }}">
              <span class="ee_hero_card_option_text">I'm an O Level Oct 2026 Candidate</span>
              <i class="fa-solid fa-arrow-right"></i>
            </a>
          </div>

          <div class="ee_hero_card_footer">
            <span>Already have an account?</span>
            <a href="{{ route('student.login') }}">Log in</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="ee_metrics">
  <div class="container">
    <div class="ee_metrics_head text-center">
      <h2 class="ee_metrics_title">For Every Student, Subject &amp; Exam.</h2>
      <p class="ee_metrics_subtitle">Join 60,000+ students in 100+ countries mastering IGCSE, O &amp; A Levels with Exam Essentials.</p>
    </div>
    <div class="row g-4 justify-content-center ee_metrics_grid">
      <div class="col-6 col-md-3">
        <div class="ee_metric_card ee_metric_card--blue">
          <div class="ee_metric_value">60K+</div>
          <div class="ee_metric_label">Students</div>
        </div>
      </div>
      <div class="col-6 col-md-3">
        <div class="ee_metric_card ee_metric_card--orange">
          <div class="ee_metric_value">101</div>
          <div class="ee_metric_label">Countries Reached</div>
        </div>
      </div>
      <div class="col-6 col-md-3">
        <div class="ee_metric_card ee_metric_card--ink">
          <div class="ee_metric_value">25+</div>
          <div class="ee_metric_label">Years of Experience</div>
        </div>
      </div>
      <div class="col-6 col-md-3">
        <div class="ee_metric_card ee_metric_card--blue-dark">
          <div class="ee_metric_value">92%</div>
          <div class="ee_metric_label">Success Rate</div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="ee_reviews">
  <div class="container">
    <div class="ee_reviews_head text-center">
      <h2 class="ee_reviews_title">Students love Exam Essentials.</h2>
      <p class="ee_reviews_subtitle">Real messages from real students across IGCSE, O Level &amp; A Level.</p>
    </div>

    <div class="ee_reviews_masonry">
      <article class="ee_review_card ee_review_card--warm">
        <div class="ee_review_icon">“</div>
        <p class="ee_review_text">This platform is the only way to turn a U into an A*.</p>
        <div class="ee_review_footer">
          <span class="ee_review_avatar">RI</span>
          <span class="ee_review_name">R I</span>
        </div>
      </article>

      <article class="ee_review_card ee_review_card--soft">
        <div class="ee_review_icon">“</div>
        <p class="ee_review_text">Sir, I feel like I owe you an appreciation message for the immeasurable help you gave us through your Exam Essentials Chemistry A Level series. I was at 0 in Chemistry in mid-February when I decided to start learning properly.</p>
        <p class="ee_review_text">In only 1.5 months, I completed Physical Chemistry and I’m halfway through Organic Chemistry. Your way of teaching is amazing. Thank you.</p>
        <div class="ee_review_footer">
          <span class="ee_review_avatar ee_review_avatar--blue">M</span>
          <span class="ee_review_name">Miron</span>
        </div>
      </article>

      <article class="ee_review_card ee_review_card--soft">
        <div class="ee_review_icon">“</div>
        <p class="ee_review_text">From Ds to an A*! I finally understand Organic Chemistry!</p>
        <div class="ee_review_footer">
          <span class="ee_review_avatar ee_review_avatar--blue-dark">AK</span>
          <span class="ee_review_name">Ali K</span>
        </div>
      </article>

      <article class="ee_review_card ee_review_card--mint">
        <div class="ee_review_icon">“</div>
        <p class="ee_review_text">Hello sir, I just wanted to thank you and show my immense gratitude for your efforts and all the resources that helped me achieve an A in my AS results. The sessions and recordings were incredibly helpful. I never thought I’d get an A in Economics when I started—I expected a B or C at best. All credit goes to you.</p>
        <div class="ee_review_footer">
          <span class="ee_review_avatar ee_review_avatar--ink">AS</span>
          <span class="ee_review_name">Abdullah Shaikh</span>
        </div>
      </article>

      <article class="ee_review_card ee_review_card--pink">
        <div class="ee_review_icon">“</div>
        <p class="ee_review_text">You guys helped me with my academic comeback! It's insane. I'm too happy!</p>
        <div class="ee_review_footer">
          <span class="ee_review_avatar ee_review_avatar--orange">JK</span>
          <span class="ee_review_name">J K</span>
        </div>
      </article>

      <article class="ee_review_card ee_review_card--soft">
        <div class="ee_review_icon">“</div>
        <p class="ee_review_text">The team is doing a great job making A Levels feel manageable. I owe my A to you!</p>
        <div class="ee_review_footer">
          <span class="ee_review_avatar ee_review_avatar--blue">RA</span>
          <span class="ee_review_name">R A</span>
        </div>
      </article>

      <article class="ee_review_card ee_review_card--blue">
        <div class="ee_review_icon">“</div>
        <p class="ee_review_text">Love the platform! Thank you for my A. Would 100% recommend.</p>
        <div class="ee_review_footer">
          <span class="ee_review_avatar ee_review_avatar--blue-dark">M</span>
          <span class="ee_review_name">Meesum</span>
        </div>
      </article>
    </div>
  </div>
</section>

<section class="ee_why">
  <div class="container">
    <div class="ee_why_head text-center">
      <h2 class="ee_why_title">Why Exam Essentials works</h2>
      <p class="ee_why_subtitle">A clear path, trusted material, and tools that help you improve faster.</p>
    </div>

    <div class="row g-4 justify-content-center">
      <div class="col-md-6 col-lg-4">
        <div class="ee_why_item">
          <div class="ee_why_icon ee_why_icon--orange">
            <svg viewBox="0 0 64 64" width="44" height="44" aria-hidden="true" focusable="false">
              <path d="M12 16a6 6 0 0 1 6-6h20a6 6 0 0 1 6 6v32a6 6 0 0 1-6 6H18a6 6 0 0 1-6-6V16Z" fill="color-mix(in srgb,var(--uta-orange) 18%,var(--uta-white))"/>
              <path d="M22 22h18M22 30h18M22 38h12" stroke="var(--uta-orange)" stroke-width="3" stroke-linecap="round"/>
              <path d="M44 24l8-4v28l-8-4" fill="color-mix(in srgb,var(--uta-blue) 16%,var(--uta-white))" stroke="var(--uta-blue-dark)" stroke-width="2" stroke-linejoin="round"/>
            </svg>
          </div>
          <h3 class="ee_why_item_title">Personalized learning</h3>
          <p class="ee_why_item_text">Practice at your own pace, fill gaps in understanding, and keep moving forward with a clear plan.</p>
        </div>
      </div>

      <div class="col-md-6 col-lg-4">
        <div class="ee_why_item">
          <div class="ee_why_icon ee_why_icon--blue">
            <svg viewBox="0 0 64 64" width="44" height="44" aria-hidden="true" focusable="false">
              <path d="M32 10 12 18v14c0 14 8 22 20 26 12-4 20-12 20-26V18L32 10Z" fill="color-mix(in srgb,var(--uta-blue) 18%,var(--uta-white))" stroke="var(--uta-blue-dark)" stroke-width="2" stroke-linejoin="round"/>
              <path d="M24 34l6 6 14-16" stroke="var(--uta-blue-dark)" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </div>
          <h3 class="ee_why_item_title">Trusted content</h3>
          <p class="ee_why_item_text">Lessons, notes, and practice questions built around the exam spec—so you study what matters most.</p>
        </div>
      </div>

      <div class="col-md-6 col-lg-4">
        <div class="ee_why_item">
          <div class="ee_why_icon ee_why_icon--ink">
            <svg viewBox="0 0 64 64" width="44" height="44" aria-hidden="true" focusable="false">
              <path d="M18 16a6 6 0 0 1 6-6h16a6 6 0 0 1 6 6v34a4 4 0 0 1-4 4H22a4 4 0 0 1-4-4V16Z" fill="color-mix(in srgb,var(--uta-ink) 10%,var(--uta-white))" stroke="var(--uta-ink)" stroke-width="2"/>
              <path d="M24 24h16M24 32h16" stroke="var(--uta-ink)" stroke-width="3" stroke-linecap="round" opacity=".9"/>
              <path d="M26 46h12" stroke="var(--uta-orange)" stroke-width="4" stroke-linecap="round"/>
              <circle cx="44" cy="46" r="4" fill="color-mix(in srgb,var(--uta-orange) 28%,var(--uta-white))" stroke="var(--uta-orange)" stroke-width="2"/>
            </svg>
          </div>
          <h3 class="ee_why_item_title">Tools to boost results</h3>
          <p class="ee_why_item_text">Track progress, review weak topics, and stay consistent with study tools designed for exams.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="ee_learn">
  <div class="container">
    <div class="row align-items-center g-5">
      <div class="col-lg-5">
        <div class="ee_learn_kicker">Learners and students</div>
        <h2 class="ee_learn_title">You can learn anything.</h2>
        <p class="ee_learn_text">Build a deep, solid understanding in Maths, Science, and more with structured lessons and targeted practice.</p>
        <a class="ee_learn_btn" href="{{ route('courses') }}">
          <span>Learners, start here</span>
          <i class="fa-solid fa-arrow-right"></i>
        </a>
      </div>
      <div class="col-lg-7">
        <div class="ee_learn_art" aria-hidden="true">
          <svg viewBox="0 0 760 360" width="100%" height="100%" preserveAspectRatio="xMidYMid meet">
            <defs>
              <linearGradient id="ee_learn_bg" x1="0" y1="0" x2="1" y2="1">
                <stop offset="0" stop-color="color-mix(in srgb,var(--uta-blue) 16%,var(--uta-white))"/>
                <stop offset="1" stop-color="color-mix(in srgb,var(--uta-orange) 12%,var(--uta-white))"/>
              </linearGradient>
            </defs>
            <path d="M540 24c90 20 150 80 176 156 26 76 10 164-58 220-68 56-186 78-294 44-108-34-206-124-196-224 10-100 128-216 372-196Z" fill="url(#ee_learn_bg)" opacity=".9"/>
            <path d="M594 60l80-28M658 22l-8 78" stroke="var(--uta-ink)" stroke-width="6" stroke-linecap="round" opacity=".2"/>
            <path d="M612 86c40 10 70 30 92 56" stroke="var(--uta-blue)" stroke-width="6" stroke-linecap="round" opacity=".35"/>
            <path d="M540 252l-100 54c-14 8-24 10-40 10H240c-20 0-34-14-26-30l46-90c6-12 18-20 34-22l170-24c14-2 24 0 34 6l42 26c16 10 16 32 0 44Z" fill="color-mix(in srgb,var(--uta-blue) 42%,var(--uta-white))"/>
            <path d="M500 262 344 344H242c-24 0-38-18-26-36l46-74c8-12 20-18 36-20l176-18c16-2 28 2 38 12l18 18c12 12 6 30-10 38Z" fill="color-mix(in srgb,var(--uta-blue-dark) 25%,var(--uta-white))"/>
            <path d="M284 154h260c18 0 32 14 32 32v118c0 18-14 32-32 32H284c-18 0-32-14-32-32V186c0-18 14-32 32-32Z" fill="var(--uta-ink)" opacity=".12"/>
            <path d="M270 138h288c18 0 32 14 32 32v138c0 18-14 32-32 32H270c-18 0-32-14-32-32V170c0-18 14-32 32-32Z" fill="var(--uta-ink)"/>
            <path d="M270 162h288c4 0 8 4 8 8v102c0 4-4 8-8 8H270c-4 0-8-4-8-8V170c0-4 4-8 8-8Z" fill="color-mix(in srgb,var(--uta-surface) 85%,var(--uta-white))"/>
            <path d="M306 206h154" stroke="var(--uta-blue-dark)" stroke-width="10" stroke-linecap="round" opacity=".35"/>
            <path d="M306 236h210" stroke="var(--uta-blue)" stroke-width="10" stroke-linecap="round" opacity=".35"/>
            <path d="M306 266h120" stroke="var(--uta-orange)" stroke-width="10" stroke-linecap="round" opacity=".55"/>
            <circle cx="524" cy="238" r="22" fill="color-mix(in srgb,var(--uta-orange) 22%,var(--uta-white))"/>
            <path d="M514 238l8 8 16-18" stroke="var(--uta-blue-dark)" stroke-width="8" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M606 280l74 30" stroke="var(--uta-ink)" stroke-width="6" stroke-linecap="round" opacity=".2"/>
            <path d="M700 274l10 48" stroke="var(--uta-ink)" stroke-width="6" stroke-linecap="round" opacity=".2"/>
            <path d="M674 322l40-22" stroke="var(--uta-ink)" stroke-width="6" stroke-linecap="round" opacity=".2"/>
            <path d="M622 296c14 10 20 18 18 26" stroke="var(--uta-blue)" stroke-width="6" stroke-linecap="round" opacity=".25"/>
          </svg>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="ee_video">
  <div class="container">
    <div class="ee_video_head text-center">
      <h2 class="ee_video_title">A* Learning. Anytime, Anywhere.</h2>
      <p class="ee_video_subtitle">See how Exam Essentials helps you learn faster with clear, exam-focused lessons and practice.</p>
    </div>

    <div class="ee_video_stage">
      <div class="ee_video_card">
        <div class="ee_video_card_head">
          <h3 class="ee_video_card_title">Everything you need to know about our courses</h3>
          <span class="ee_video_tag">Watch the 2-minute overview</span>
        </div>
        <div class="ee_video_thumb">
          <img src="{{ asset('frontend/theme_five/assets/images/home-one/offer-video.png') }}" alt="Course overview video">
          <a class="ee_video_play td_video_open" href="https://www.youtube.com/embed/Wx48y_fOfiY?autoplay=1&amp;mute=1">
            <i class="fa-solid fa-play"></i>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="ee_subjects">
  <div class="container">
    <div class="ee_subjects_head">
      <div class="ee_subjects_kicker">Browse</div>
      <h2 class="ee_subjects_title">Popular topics</h2>
      <p class="ee_subjects_subtitle">Pick a subject and start learning with structured lessons and targeted practice.</p>
    </div>

    <div class="ee_subjects_grid">
      <a class="ee_subject_card" href="{{ route('courses', ['search' => 'Chemistry']) }}">
        <span class="ee_subject_icon ee_subject_icon--orange" aria-hidden="true">
          <svg viewBox="0 0 24 24" width="54" height="54">
            <path d="M10 2h4" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
            <path d="M12 2v6l5 9a4 4 0 0 1-3.5 6H10.5A4 4 0 0 1 7 17l5-9V2Z" fill="none" stroke="currentColor" stroke-width="2" stroke-linejoin="round"/>
            <path d="M9.2 14h5.6" stroke="currentColor" stroke-width="2" stroke-linecap="round" opacity=".7"/>
          </svg>
        </span>
        <span class="ee_subject_name">Chemistry</span>
      </a>

      <a class="ee_subject_card" href="{{ route('courses', ['search' => 'Physics']) }}">
        <span class="ee_subject_icon ee_subject_icon--blue" aria-hidden="true">
          <svg viewBox="0 0 24 24" width="54" height="54">
            <path d="M12 3c-4.5 0-8 4-8 9s3.5 9 8 9 8-4 8-9-3.5-9-8-9Z" fill="none" stroke="currentColor" stroke-width="2"/>
            <path d="M12 7v10M7 12h10" stroke="currentColor" stroke-width="2" stroke-linecap="round" opacity=".75"/>
          </svg>
        </span>
        <span class="ee_subject_name">Physics</span>
      </a>

      <a class="ee_subject_card" href="{{ route('courses', ['search' => 'Biology']) }}">
        <span class="ee_subject_icon ee_subject_icon--blue-dark" aria-hidden="true">
          <svg viewBox="0 0 24 24" width="54" height="54">
            <path d="M12 21c6-3 9-8 9-13C15 8 12 3 12 3S9 8 3 8c0 5 3 10 9 13Z" fill="none" stroke="currentColor" stroke-width="2" stroke-linejoin="round"/>
            <path d="M12 7v12" stroke="currentColor" stroke-width="2" stroke-linecap="round" opacity=".7"/>
          </svg>
        </span>
        <span class="ee_subject_name">Biology</span>
      </a>

      <a class="ee_subject_card" href="{{ route('courses', ['search' => 'Mathematics']) }}">
        <span class="ee_subject_icon ee_subject_icon--ink" aria-hidden="true">
          <svg viewBox="0 0 24 24" width="54" height="54">
            <path d="M4 7h16M8 4v6M16 4v6" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
            <path d="M6 14h12M10 12v6M14 12v6" stroke="currentColor" stroke-width="2" stroke-linecap="round" opacity=".75"/>
          </svg>
        </span>
        <span class="ee_subject_name">Mathematics</span>
      </a>

      <a class="ee_subject_card" href="{{ route('courses', ['search' => 'Computer Science']) }}">
        <span class="ee_subject_icon ee_subject_icon--blue" aria-hidden="true">
          <svg viewBox="0 0 24 24" width="54" height="54">
            <path d="M5 6h14a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2Z" fill="none" stroke="currentColor" stroke-width="2"/>
            <path d="M8 20h8" stroke="currentColor" stroke-width="2" stroke-linecap="round" opacity=".7"/>
            <path d="M10 10l-2 2 2 2M14 10l2 2-2 2" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </span>
        <span class="ee_subject_name">Computer Science</span>
      </a>

      <a class="ee_subject_card" href="{{ route('courses', ['search' => 'Economics']) }}">
        <span class="ee_subject_icon ee_subject_icon--orange" aria-hidden="true">
          <svg viewBox="0 0 24 24" width="54" height="54">
            <path d="M6 18V9M12 18V6M18 18v-7" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
            <path d="M5 18h14" stroke="currentColor" stroke-width="2" stroke-linecap="round" opacity=".7"/>
          </svg>
        </span>
        <span class="ee_subject_name">Economics</span>
      </a>

      <a class="ee_subject_card" href="{{ route('courses', ['search' => 'Accounting']) }}">
        <span class="ee_subject_icon ee_subject_icon--ink" aria-hidden="true">
          <svg viewBox="0 0 24 24" width="54" height="54">
            <path d="M7 4h10a2 2 0 0 1 2 2v14H7a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2Z" fill="none" stroke="currentColor" stroke-width="2"/>
            <path d="M9 8h8M9 12h8M9 16h5" stroke="currentColor" stroke-width="2" stroke-linecap="round" opacity=".75"/>
          </svg>
        </span>
        <span class="ee_subject_name">Accounting</span>
      </a>

      <a class="ee_subject_card" href="{{ route('courses', ['search' => 'Business']) }}">
        <span class="ee_subject_icon ee_subject_icon--blue-dark" aria-hidden="true">
          <svg viewBox="0 0 24 24" width="54" height="54">
            <path d="M9 7V6a2 2 0 0 1 2-2h2a2 2 0 0 1 2 2v1" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
            <path d="M6 7h12a2 2 0 0 1 2 2v9a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V9a2 2 0 0 1 2-2Z" fill="none" stroke="currentColor" stroke-width="2"/>
            <path d="M10 12h4" stroke="currentColor" stroke-width="2" stroke-linecap="round" opacity=".75"/>
          </svg>
        </span>
        <span class="ee_subject_name">Business</span>
      </a>

      <a class="ee_subject_card" href="{{ route('courses', ['search' => 'English']) }}">
        <span class="ee_subject_icon ee_subject_icon--blue" aria-hidden="true">
          <svg viewBox="0 0 24 24" width="54" height="54">
            <path d="M7 4h10a2 2 0 0 1 2 2v14H7a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2Z" fill="none" stroke="currentColor" stroke-width="2"/>
            <path d="M9 9h8M9 13h7M9 17h6" stroke="currentColor" stroke-width="2" stroke-linecap="round" opacity=".75"/>
          </svg>
        </span>
        <span class="ee_subject_name">English</span>
      </a>

      <a class="ee_subject_card" href="{{ route('courses', ['search' => 'Statistics']) }}">
        <span class="ee_subject_icon ee_subject_icon--orange" aria-hidden="true">
          <svg viewBox="0 0 24 24" width="54" height="54">
            <path d="M6 18V9M12 18v-5M18 18V6" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
            <path d="M5 18h14" stroke="currentColor" stroke-width="2" stroke-linecap="round" opacity=".7"/>
          </svg>
        </span>
        <span class="ee_subject_name">Statistics</span>
      </a>
    </div>
  </div>
</section>

<section class="ee_faq">
  <div class="container">
    <div class="row align-items-start g-5">
      <div class="col-lg-5">
        <div class="ee_faq_left">
          <h2 class="ee_faq_title">Got questions?</h2>
          <p class="ee_faq_text">Find quick answers to common questions. If you’re unsure what plan to choose or need extra support, we’re here to help.</p>
          <a class="ee_faq_btn" href="{{ route('contact-us') }}">
            <span>Contact us</span>
            <i class="fa-solid fa-arrow-right"></i>
          </a>
        </div>
      </div>
      <div class="col-lg-7">
        <div class="ee_faq_list">
          <div class="td_accordian active">
            <div class="td_accordian_head">
              <h3 class="ee_faq_q">Do you have full syllabus coverage for O Level subjects?</h3>
              <i class="fa-solid fa-chevron-down ee_faq_chev" aria-hidden="true"></i>
            </div>
            <div class="td_accordian_body">
              <div class="ee_faq_a">Yes. Courses are structured topic-by-topic to match the syllabus, with lessons and targeted practice so you can cover everything confidently.</div>
            </div>
          </div>

          <div class="td_accordian">
            <div class="td_accordian_head">
              <h3 class="ee_faq_q">Which A Level subjects are available right now?</h3>
              <i class="fa-solid fa-chevron-down ee_faq_chev" aria-hidden="true"></i>
            </div>
            <div class="td_accordian_body">
              <div class="ee_faq_a">The course list depends on your selected exam board and session. Browse Courses to see what’s available and what’s coming next.</div>
            </div>
          </div>

          <div class="td_accordian">
            <div class="td_accordian_head">
              <h3 class="ee_faq_q">Is Exam Essentials enough on its own?</h3>
              <i class="fa-solid fa-chevron-down ee_faq_chev" aria-hidden="true"></i>
            </div>
            <div class="td_accordian_body">
              <div class="ee_faq_a">For most students, yes—if you follow the plan consistently. Use the lessons for clarity, practice for exam technique, and tracking to stay accountable.</div>
            </div>
          </div>

          <div class="td_accordian">
            <div class="td_accordian_head">
              <h3 class="ee_faq_q">Can I get a refund if it’s not for me?</h3>
              <i class="fa-solid fa-chevron-down ee_faq_chev" aria-hidden="true"></i>
            </div>
            <div class="td_accordian_body">
              <div class="ee_faq_a">Refund eligibility depends on the plan and usage. Contact support and we’ll review your request and guide you through the options.</div>
            </div>
          </div>

          <div class="td_accordian">
            <div class="td_accordian_head">
              <h3 class="ee_faq_q">Can I log in on more than one device?</h3>
              <i class="fa-solid fa-chevron-down ee_faq_chev" aria-hidden="true"></i>
            </div>
            <div class="td_accordian_body">
              <div class="ee_faq_a">Yes. You can use Exam Essentials on desktop, tablet, and mobile so you can study wherever you are.</div>
            </div>
          </div>

          <div class="td_accordian">
            <div class="td_accordian_head">
              <h3 class="ee_faq_q">Does Exam Essentials guarantee an A or A*?</h3>
              <i class="fa-solid fa-chevron-down ee_faq_chev" aria-hidden="true"></i>
            </div>
            <div class="td_accordian_body">
              <div class="ee_faq_a">We can’t guarantee a grade, but we do provide the structure, explanations, and practice you need to maximize your results—your consistency does the rest.</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>




  <!-- Start Brands Section -->
  {{-- <div class="td_height_100 td_height_lg_50"></div>
  <div class="td_height_100 td_height_lg_50"></div>
  <div class="td_height_100 td_height_lg_50"></div>
  <div class="td_height_100 td_height_lg_50"></div> --}}
  {{-- <section class="td_heading_bg td_shape_section_6">
    <div class="td_shape_position_1 position-absolute"></div>
    <div class="td_shape_position_2 position-absolute"></div>
    <div class="td_shape_position_3 position-absolute"></div>
    <div class="td_half_white_bg">
      <div class="container">
        <div class="row td_gap_y_30">
          <div class="col-lg-6 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
            <div class="td_card td_style_4  ">
              <div class="td_card_left">
                <h3 class="td_fs_32 td_mb_16 td_white_color">
                    {!! strip_tags(clean(getTranslatedValue($home1_join_instructor, 'first_item_title')),'<span>') !!}

                </h3>
                <p class="td_fs_18 td_white_color td_opacity_9 td_mb_30">
                    {{ getTranslatedValue($home1_join_instructor, 'first_item_description') }}
                 </p>
                <a href="{{ route('register.instructor') }}" class="td_btn td_style_1 td_type_3 td_radius_30 td_medium td_with_shadow">
                  <span class="td_btn_in td_white_color td_accent_bg">
                    <span>{{ __('translate.Become A Instructor') }}</span>
                    <svg width="19" height="20" viewBox="0 0 19 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M15.1575 4.34302L3.84375 15.6567" stroke="currentColor" stroke-width="1.5"
                        stroke-linecap="round" stroke-linejoin="round"></path>
                      <path
                        d="M15.157 11.4142C15.157 11.4142 16.0887 5.2748 15.157 4.34311C14.2253 3.41142 8.08594 4.34314 8.08594 4.34314"
                        stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                  </span>
                </a>
              </div>
              <div class="td_card_thumb">
                <img src="{{ asset(getImage($home1_join_instructor, 'first_item_image')) }}" alt="">
              </div>
              <div class="td_card_1">
                @include('svg.home1_join_instructor_left_shadow1')
              </div>
              <div class="td_card_2">
                @include('svg.home1_join_instructor_left_shadow2')
              </div>
            </div>
          </div>
          <div class="col-lg-6 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
            <div class="td_card td_style_4 ">
              <div class="td_card_left">
                <h3 class="td_fs_32 td_mb_16 td_white_color">
                    {!! strip_tags(clean(getTranslatedValue($home1_join_instructor, 'second_item_title')),'<span>') !!}
                </h3>
                <p class="td_fs_18 td_white_color td_opacity_9 td_mb_30">
                    {{ getTranslatedValue($home1_join_instructor, 'second_item_description') }}
                 </p>
                <a href="{{ route('register.student') }}" class="td_btn td_style_1 td_type_3 td_radius_30 td_medium td_with_shadow">
                  <span class="td_btn_in td_white_color td_accent_bg">
                    <span>{{ __('translate.Become A Student') }}</span>
                    <svg width="19" height="20" viewBox="0 0 19 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M15.1575 4.34302L3.84375 15.6567" stroke="currentColor" stroke-width="1.5"
                        stroke-linecap="round" stroke-linejoin="round"></path>
                      <path
                        d="M15.157 11.4142C15.157 11.4142 16.0887 5.2748 15.157 4.34311C14.2253 3.41142 8.08594 4.34314 8.08594 4.34314"
                        stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                  </span>
                </a>
              </div>
              <div class="td_card_thumb">
                <img src="{{ asset(getImage($home1_join_instructor, 'second_item_image')) }}" alt="">
              </div>

              <div class="td_card_1">
                @include('svg.home1_join_instructor_left_shadow1')
              </div>
              <div class="td_card_2">
                @include('svg.home1_join_instructor_left_shadow2')
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="td_height_100 td_height_lg_50"></div>
  </section> --}}

  <!-- End Brands Section -->


    <!-- Start Team Section -->
   {{-- <section class="td_shape_section_8 td_hobble">
    <span class="td_shape_position_1 position-absolute td_hover_layer_3">
        @include('svg.home1_instructor_shadow')
    </span>
    <span class="td_shape_position_2 position-absolute td_hover_layer_3">
        @include('svg.home1_instructor_shadow2')
    </span>
    <div class="td_height_100 td_height_lg_75"></div>
    <div class="container">
      <div class="td_section_heading td_style_1 text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
        <p class="td_section_subtitle_up td_fs_18 td_semibold td_spacing_1 td_mb_10 text-uppercase td_accent_color">
          <i></i>
          {{ __('translate.Featured Instructor') }}
          <i></i>
        </p>
        <h2 class="td_section_title td_fs_48 mb-0">{{ __('translate.Our Expert Instructor') }}</h2>
        <p class="td_section_subtitle td_fs_18 mb-0">
            {{ __('translate.Far far away, behind the word mountains, far from the Consonantia, there') }} <br>{{ __('translate.live the blind texts. Separated they marks grove right') }}</p>
      </div>
      <div class="td_height_50 td_height_lg_50"></div>
      <div class="row td_gap_y_30">
        @foreach ($instructors->take(4) as $instructor)
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.25s">
                <div class="td_team td_style_1 text-center position-relative qs-instructor-card_h1">

                    @if ($instructor?->image)
                        <img src="{{ asset($instructor?->image) }}" alt="" class="w-100 td_radius_10 qs-instructor-card_h1_img"/>
                    @else
                        <img src="{{ asset($general_setting->default_avatar) }}" alt="" class="w-100 td_radius_10 qs-instructor-card_h1_img"/>
                    @endif

                    <a href="{{ route('instructor.profile', $instructor->username) }}" class="td_team_info td_white_bg">
                    <h3 class="td_team_member_title td_fs_18 td_semibold mb-0">{{ html_decode($instructor->name) }}</h3>
                    <p class="td_team_member_designation mb-0 td_fs_14 td_opacity_7 td_heading_color">{{ html_decode($instructor->designation) }}</p>
                    </a>
                </div>
            </div>
        @endforeach
      </div>
      <div class="td_height_60 td_height_lg_40"></div>
      <div class="text-center wow zoomIn" data-wow-duration="1s" data-wow-delay="0.2s">

        <a href="{{ route('instructors') }}" class="td_btn td_style_1 td_radius_30 td_medium td_with_shadow">
          <span class="td_btn_in td_white_color td_accent_bg">
            <span>{{ __('translate.See All Instructors') }}</span>
            <svg width="19" height="20" viewBox="0 0 19 20" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M15.1575 4.34302L3.84375 15.6567" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                stroke-linejoin="round"></path>
              <path
                d="M15.157 11.4142C15.157 11.4142 16.0887 5.2748 15.157 4.34311C14.2253 3.41142 8.08594 4.34314 8.08594 4.34314"
                stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
            </svg>
          </span>
        </a>

      </div>
    </div>
    <div class="td_height_100 td_height_lg_50"></div>
  </section>  --}}
  <!-- End Team Section -->


  <!-- Start Testimonials Section -->
  {{-- <section class="td_shape_section_7 td_hobble">
    <span class="td_shape_position_1 position-absolute td_hover_layer_3">
        @include('svg.home1_testimonial_shape1')


    </span>
    <span class="td_shape_position_2 position-absolute td_hover_layer_5">
        @include('svg.home1_testimonial_shape2')


    </span>
    <span class="td_shape_position_3 position-absolute td_hover_layer_3">
        @include('svg.home1_testimonial_shape3')

    </span>
    <span class="td_shape_position_4 position-absolute td_hover_layer_5">
        @include('svg.home1_testimonial_shape4')
    </span>
    <div class="td_height_100 td_height_lg_75"></div>
    <div class="container">
      <div class="td_section_heading td_style_1 text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
        <p class="td_section_subtitle_up td_fs_18 td_semibold td_spacing_1 td_mb_10 text-uppercase td_accent_color">
          <i></i>
          {{ __('translate.Testimonials') }}
          <i></i>
        </p>
        <h2 class="td_section_title td_fs_48 mb-0">{{ __('translate.What Our Students Say About') }} <br>{{ __('translate.Our Online Services') }} </h2>
        <p class="td_section_subtitle td_fs_18 mb-0">
            {{ __('translate.Far far away, behind the word mountains, far from the Consonantia, there live') }} <br>{{ __('translate.the blind texts. Separated they marks grove') }}</p>
      </div>
      <div class="td_height_50 td_height_lg_50"></div>
      <div class="td_slider td_style_1 td_slider_gap_24 td_remove_overflow wow fadeInUp qs-h1-testimonial_dots" data-wow-duration="1s"
        data-wow-delay="0.3s">
        <div class="td_slider_container" data-autoplay="0" data-loop="1" data-speed="800" data-center="0"
          data-variable-width="0" data-slides-per-view="responsive" data-xs-slides="1" data-sm-slides="2"
          data-md-slides="2" data-lg-slides="2" data-add-slides="2">
          <div class="td_slider_wrapper">

            @foreach ($testimonials as $testimonial)
                <div class="td_slide">
                <div class="td_testimonial td_style_1 td_type_1 td_white_bg td_radius_5">
                    <span class="td_quote_icon td_accent_color">
                    <svg width="65" height="46" viewBox="0 0 65 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path opacity="0.05"
                        d="M13.9286 26.6H1V1H26.8571V27.362L17.956 45H6.26764L14.8213 28.0505L15.5534 26.6H13.9286ZM51.0714 26.6H38.1429V1H64V27.362L55.0988 45H43.4105L51.9642 28.0505L52.6962 26.6H51.0714Z"
                        fill="currentColor" stroke="currentColor" stroke-width="2" />
                    </svg>
                    </span>
                    <div class="td_testimonial_meta td_mb_24">
                    <img src="{{ asset($testimonial->image) }}" alt="">
                    <div class="td_testimonial_meta_right">
                        <h3 class="td_fs_24 td_semibold td_mb_2">{{ $testimonial->name }}</h3>
                        <p class="td_fs_14 mb-0 td_heading_color td_opacity_7">{{ $testimonial->designation }}</p>
                    </div>
                    </div>
                    <blockquote class="td_testimonial_text td_fs_20 td_medium td_heading_color td_mb_24 td_opacity_9">
                        {{ $testimonial->comment }}
                    </blockquote>
                    <div class="td_rating" data-rating="{{ $testimonial->rating }}">
                    <i class="fa-regular fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                    <div class="td_rating_percentage">
                        <i class="fa-solid fa-star fa-fw"></i>
                        <i class="fa-solid fa-star fa-fw"></i>
                        <i class="fa-solid fa-star fa-fw"></i>
                        <i class="fa-solid fa-star fa-fw"></i>
                        <i class="fa-solid fa-star fa-fw"></i>
                    </div>
                    </div>
                </div>
                </div>
            @endforeach

          </div>
        </div>
        <div class="td_height_50 td_height_lg_40"></div>
        <div class="td_pagination td_style_1"></div>
      </div>
    </div>
    <div class="td_height_100 td_height_lg_50"></div>
  </section> --}}

  <!-- End Testimonials Section -->

  <!-- Start Why Choose Us -->
  {{-- <section class="td_gray_bg_4 td_shape_section_1">
    <div class="td_shape td_shape_position_1">
      <svg width="87" height="113" viewBox="0 0 87 113" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path
          d="M25.691 111.917C25.691 111.917 -7.02966 93.8525 2.38905 82.7066C11.2077 72.271 35.8654 92.8719 35.8654 92.8719C35.8654 92.8719 5.83058 76.9964 14.5061 67.298C22.5942 58.2562 43.8593 77.4658 43.8593 77.4658C43.8593 77.4658 16.9095 60.7077 25.7747 52.6174C34.0664 45.0504 51.6127 65.2129 51.6127 65.2129C51.6127 65.2129 29.1149 45.8206 38.378 39.1487C46.5941 33.2309 54.6422 57.4625 61.7897 50.2905C69.1571 42.8978 40.5552 34.9852 47.8295 27.501C54.9741 20.1502 62.8767 44.3479 71.3628 39.1278C79.849 33.9077 52.6662 22.2808 60.3126 15.6088C67.8059 9.07036 73.47 32.2249 82.5125 28.0853C93.6341 22.994 71.5868 9.86166 66.4881 1.17403"
          stroke="#6440FB" />
      </svg>

    </div>
    <div class="td_shape td_shape_position_2"></div>
    <div class="td_shape td_shape_position_3"></div>
    <div class="td_height_100 td_height_lg_75"></div>
    <div class="container">
      <div class="row align-items-center td_gap_y_40">
        <div class="col-xl-6">
          <div class="td_image_box td_style_1">
            <img src="{{ asset(getImage($home1_why_choose_us, 'feature_image')) }}" alt="" class="td_image_box_thumb wow fadeInUp"
              data-wow-duration="1s" data-wow-delay="0.2s">
            <div class="td_avatars_wrap td_type_2 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s">
              <h3 class="mb-0 td_fs_24 td_semibold">{{ getTranslatedValue($home1_why_choose_us, 'total_student') }}</h3>
              <div class="td_avatars">
                <img src="{{ asset(getImage($home1_why_choose_us, 'total_student_image')) }}" class="w-100" alt="thumb">
              </div>
            </div>
            <a href="https://www.youtube.com/embed/{{ getTranslatedValue($home1_why_choose_us, 'youtube_video_id') }}"
              class="td_player_btn_wrap_3 td_video_open td_center wow fadeInRight" data-wow-duration="1s"
              data-wow-delay="0.2s">
              <span class="td_player_btn td_center">
                <span></span>
              </span>
            </a>
          </div>
        </div>
        <div class="col-xl-6 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.4s">
          <div class="td_section_heading td_style_1">
            <p class="td_section_subtitle_up td_fs_18 td_semibold td_spacing_1 td_mb_10 text-uppercase td_accent_color">
              <i></i>
              {{ getTranslatedValue($home1_why_choose_us, 'short_title') }}
              <i></i>
            </p>
            <h2 class="td_section_title td_fs_36 mb-0">{{ getTranslatedValue($home1_why_choose_us, 'title') }}</h2>
            <p class="td_section_subtitle td_fs_18 mb-0">{{ getTranslatedValue($home1_why_choose_us, 'description') }}</p>
          </div>
          <div class="td_height_40 td_height_lg_40"></div>
          <ul class="td_list td_style_1 td_mp_0 td_semibold td_heading_color">
            <li>
              <i class="td_list_icon td_center">
                @include('svg.home1_why_choose_list')
              </i>
              {{ getTranslatedValue($home1_why_choose_us, 'item_one') }}

            </li>
            <li>
                <i class="td_list_icon td_center">
                @include('svg.home1_why_choose_list')
                </i>
                {{ getTranslatedValue($home1_why_choose_us, 'item_two') }}
            </li>
            <li>
                <i class="td_list_icon td_center">
                    @include('svg.home1_why_choose_list')
                </i>
                {{ getTranslatedValue($home1_why_choose_us, 'item_three') }}
            </li>
            <li>
                <i class="td_list_icon td_center">
                    @include('svg.home1_why_choose_list')
                </i>
                {{ getTranslatedValue($home1_why_choose_us, 'item_four') }}
            </li>
            <li>
                <i class="td_list_icon td_center">
                    @include('svg.home1_why_choose_list')
                </i>
                {{ getTranslatedValue($home1_why_choose_us, 'item_five') }}
            </li>
            <li>
                <i class="td_list_icon td_center">
                    @include('svg.home1_why_choose_list')
                </i>
                {{ getTranslatedValue($home1_why_choose_us, 'item_six') }}
            </li>
          </ul>
          <div class="td_height_40 td_height_lg_40"></div>
          <a href="{{ route('courses') }}" class="td_btn td_style_1 td_radius_30 td_medium td_with_shadow">
            <span class="td_btn_in td_white_color td_accent_bg">
              <span>{{ __('translate.Get Started') }}</span>
              <svg width="19" height="20" viewBox="0 0 19 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M15.1575 4.34302L3.84375 15.6567" stroke="currentColor" stroke-width="1.5"
                  stroke-linecap="round" stroke-linejoin="round"></path>
                <path
                  d="M15.157 11.4142C15.157 11.4142 16.0887 5.2748 15.157 4.34311C14.2253 3.41142 8.08594 4.34314 8.08594 4.34314"
                  stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
              </svg>
            </span>
          </a>
        </div>
      </div>
    </div>
    <div class="td_height_100 td_height_lg_75"></div>
  </section> --}}
  <!-- End Why Choose Us -->


  <!-- Start Blog Section -->
  {{-- <section>
    <div class="td_height_100 td_height_lg_75"></div>
    <div class="container">
      <div class="td_section_heading td_style_1 text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
        <p class="td_section_subtitle_up td_fs_18 td_semibold td_spacing_1 td_mb_10 text-uppercase td_accent_color">
          <i></i>
          {{ __('translate.BLOG & ARTICLES') }}
          <i></i>
        </p>
        <h2 class="td_section_title td_fs_48 mb-0">{{ __('translate.Take A Look At The Latest') }} <br>{{ __('translate.Articles') }}</h2>
      </div>
      <div class="td_height_50 td_height_lg_50"></div>
      <div class="row td_gap_y_24">

        @foreach ($blogs as $blog)
            <div class="col-xl-6 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.35s">
              <div class="td_post td_style_1 td_type_1">
                  <a href="{{ route('blog', $blog->slug) }}" class="td_post_thumb d-block">
                  <img src="{{ asset($blog->image) }}" alt="">
                  <span class="td_post_label">{{ $blog?->category?->name }}</span>
                  </a>
                  <div class="td_post_info">
                  <div class="td_post_meta td_fs_14 td_medium td_mb_20">
                      <span>
                          @include('svg.blog_date')
                          {{ $blog->created_at->format('d-m-Y') }}
                      </span>
                      <span>
                          @include('svg.blog_author')
                          {{ $blog?->author?->name }}
                      </span>
                  </div>
                  <h2 class="td_post_title td_fs_24 td_medium td_mb_16">
                      <a href="{{ route('blog', $blog->slug) }}">{{ $blog?->title }}</a>
                  </h2>
                  <p class="td_post_subtitle td_mb_24 td_heading_color td_opacity_7">
                      {{ $blog?->short_description }}
                  </p>
                  <a href="{{ route('blog', $blog->slug) }}" class="td_btn td_style_1 td_type_3 td_radius_30 td_medium">
                      <span class="td_btn_in td_accent_color">
                      <span>{{ __('translate.Read More') }}</span>
                      </span>
                  </a>
                  </div>
              </div>
            </div>
        @endforeach

      </div>
    </div>
    <div class="td_height_100 td_height_lg_50"></div>
  </section> --}}
  <!-- End Blog Section -->

  @endsection

@push('js_section')
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
