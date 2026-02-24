@extends('layout_inner_page')

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

                        <form method="POST" action="{{ route('register.instructor.submit') }}">
                            @csrf

                            {{-- Personal Information --}}
                            <h5 class="mb-3 mt-4 fw-semibold">Personal Information</h5>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">First Name</label>
                                    <input type="text" name="first_name"
                                        class="form-control @error('first_name') is-invalid @enderror"
                                        value="{{ old('first_name') }}" required>
                                    @error('first_name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Last Name</label>
                                    <input type="text" name="last_name"
                                        class="form-control @error('last_name') is-invalid @enderror"
                                        value="{{ old('last_name') }}" required>
                                    @error('last_name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Date of Birth</label>
                                <input type="date" name="date_of_birth"
                                    class="form-control @error('date_of_birth') is-invalid @enderror"
                                    value="{{ old('date_of_birth') }}" required>
                                @error('date_of_birth')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Father's Name</label>
                                    <input type="text" name="father_name"
                                        class="form-control @error('father_name') is-invalid @enderror"
                                        value="{{ old('father_name') }}" required>
                                    @error('father_name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Mother's Name</label>
                                    <input type="text" name="mother_name"
                                        class="form-control @error('mother_name') is-invalid @enderror"
                                        value="{{ old('mother_name') }}" required>
                                    @error('mother_name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">National ID (Optional)</label>
                                <input type="text" name="nid"
                                    class="form-control @error('nid') is-invalid @enderror"
                                    value="{{ old('nid') }}">
                                @error('nid')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            {{-- Contact Information --}}
                            <h5 class="mb-3 mt-4 fw-semibold">Contact Information</h5>

                            <div class="mb-3">
                                <label class="form-label">Email Address</label>
                                <input type="email" name="email"
                                    class="form-control @error('email') is-invalid @enderror"
                                    value="{{ old('email') }}" required>
                                @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Phone Number</label>
                                <input type="text" name="phone"
                                    class="form-control @error('phone') is-invalid @enderror"
                                    value="{{ old('phone') }}" required>
                                @error('phone')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            {{-- Account Security --}}
                            <h5 class="mb-3 mt-4 fw-semibold">Account Security</h5>

                            <div class="mb-3">
                                <label class="form-label">Password</label>
                                <input type="password" name="password"
                                    class="form-control @error('password') is-invalid @enderror"
                                    required>
                                @error('password')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Confirm Password</label>
                                <input type="password" name="password_confirmation"
                                    class="form-control" required>
                            </div>

                            {{-- Education --}}
                            <h5 class="mb-3 mt-4 fw-semibold">Educational Background</h5>

                            <div class="mb-3">
                                <label class="form-label">SSC Institution</label>
                                <input type="text" name="education_ssc"
                                    class="form-control @error('education_ssc') is-invalid @enderror"
                                    value="{{ old('education_ssc') }}">
                                @error('education_ssc')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label">HSC Institution</label>
                                <input type="text" name="education_hsc"
                                    class="form-control @error('education_hsc') is-invalid @enderror"
                                    value="{{ old('education_hsc') }}">
                                @error('education_hsc')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Bachelor Institution</label>
                                <input type="text" name="education_bachelor"
                                    class="form-control @error('education_bachelor') is-invalid @enderror"
                                    value="{{ old('education_bachelor') }}">
                                @error('education_bachelor')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Master's Institution</label>
                                <input type="text" name="education_master"
                                    class="form-control @error('education_master') is-invalid @enderror"
                                    value="{{ old('education_master') }}">
                                @error('education_master')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label class="form-label">PhD Institution</label>
                                <input type="text" name="education_phd"
                                    class="form-control @error('education_phd') is-invalid @enderror"
                                    value="{{ old('education_phd') }}">
                                @error('education_phd')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="d-grid mt-4">
                                <button type="submit" class="btn btn-primary btn-lg rounded-pill">
                                    Register as Instructor
                                </button>
                            </div>

                        </form>

                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

@endsection
