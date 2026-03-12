@extends('layout')

@section('front-content')
@include('breadcrumb')

<section class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">

                <div class="card shadow-sm border-0 rounded-4">
                    <div class="card-body p-5">

                        <div class="text-center mb-4">
                            <h2 class="fw-bold">Instructor Registration</h2>
                            <p class="text-muted mb-0">Create your instructor account by filling in the information below.</p>
                        </div>

                        @include('auth.register_instructor_partial')

                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

@endsection
