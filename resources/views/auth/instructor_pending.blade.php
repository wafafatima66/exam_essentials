@extends('layout')

@section('title')
    <title>Registration Pending - Instructor</title>
@endsection

@section('front-content')

@include('breadcrumb')

<!-- Start Pending Approval Section -->
<section class="pending-section" style="padding-top: 100px; padding-bottom: 100px;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8">

                {{-- Card --}}
                <div class="card shadow-sm p-5 text-center">

                    {{-- Icon --}}
                    <div class="mb-4">
                        <i class="fa-solid fa-clock-rotate-left text-primary" style="font-size: 80px;"></i>
                    </div>

                    {{-- Heading --}}
                    <h2 class="mb-3">Registration Received!</h2>

                    {{-- Message --}}
                    <p class="mb-4 fs-5">
                        Thank you for registering as an instructor at Exam Essentials. Your application has been successfully submitted and is currently <strong>pending review</strong> by our administrative team.
                    </p>

                    {{-- Info Box --}}
                    <div class="bg-light p-4 rounded mb-4 text-start">
                        <h4 class="mb-2">What happens next?</h4>
                        <ul class="mb-0">
                            <li>Please check your email and click the verification link to verify your account.</li>
                            <li>Our team will review your qualifications and submitted documents.</li>
                            <li>This process usually takes 24-48 hours.</li>
                            <li>You will receive an email once your account has been approved.</li>
                        </ul>
                    </div>

                    {{-- Footer Note --}}
                    <p class="mb-4">If you have any questions, please contact our support team.</p>

                    {{-- Button --}}
                    <a href="{{ route('home') }}" class="btn btn-primary btn-lg">
                        Return to Home <i class="fa-solid fa-house ms-2"></i>
                    </a>

                </div>

            </div>
        </div>
    </div>
</section>
<!-- End Pending Approval Section -->

@push('style_section')
<style>
    .pending-section .card {
        border-radius: 12px;
        transition: transform 0.3s, box-shadow 0.3s;
    }
    .pending-section .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 12px 30px rgba(0,0,0,0.08);
    }
    .pending-section i {
        color: #074473;
    }
    .btn-primary {
        background-color: #074473;
        border-color: #074473;
        transition: background-color 0.3s;
    }
    .btn-primary:hover {
        background-color: #052a50;
        border-color: #052a50;
    }
    .bg-light {
        background-color: #f8f9fa !important;
    }
</style>
@endpush

@endsection
