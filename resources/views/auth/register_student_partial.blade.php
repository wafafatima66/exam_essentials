<form method="POST" action="{{ route('register.student.submit') }}">
    @csrf

    {{-- Personal Information --}}
    <div class="form-section">
        <h5 class="mb-3 fw-semibold">Personal Information</h5>

        <div class="row">
            <div class="col-md-6 mb-3">
                <label class="form-label">First Name</label>
                <input type="text" name="first_name"
                    placeholder="Enter your first name"
                    class="form-control form-control-lg @error('first_name') is-invalid @enderror"
                    value="{{ old('first_name') }}" required>
                @error('first_name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-md-6 mb-3">
                <label class="form-label">Last Name</label>
                <input type="text" name="last_name"
                    placeholder="Enter your last name"
                    class="form-control form-control-lg @error('last_name') is-invalid @enderror"
                    value="{{ old('last_name') }}" required>
                @error('last_name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
    </div>

    <div class="mb-3">
        <label class="form-label">Date of Birth</label>
        <input type="date" name="date_of_birth"
            class="form-control form-control-lg @error('date_of_birth') is-invalid @enderror"
            value="{{ old('date_of_birth') }}" required>
        @error('date_of_birth')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="row">
        <div class="col-md-6 mb-3">
            <label class="form-label">Father's Name</label>
            <input type="text" name="father_name"
                placeholder="Enter father's name"
                class="form-control form-control-lg @error('father_name') is-invalid @enderror"
                value="{{ old('father_name') }}" required>
            @error('father_name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="col-md-6 mb-3">
            <label class="form-label">Mother's Name</label>
            <input type="text" name="mother_name"
                placeholder="Enter mother's name"
                class="form-control form-control-lg @error('mother_name') is-invalid @enderror"
                value="{{ old('mother_name') }}" required>
            @error('mother_name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
    </div>

    <div class="mb-3">
        <label class="form-label">National ID (Optional)</label>
        <input type="text" name="nid"
            placeholder="e.g. 123456789"
            class="form-control form-control-lg @error('nid') is-invalid @enderror"
            value="{{ old('nid') }}">
        @error('nid')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    {{-- Account Information --}}
    <div class="form-section">
        <h5 class="mb-3 fw-semibold">Account Information</h5>

    <div class="mb-3">
        <label class="form-label">Email Address</label>
        <input type="email" name="email"
            placeholder="yourname@example.com"
            class="form-control form-control-lg @error('email') is-invalid @enderror"
            value="{{ old('email') }}" required>
        @error('email')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label class="form-label">Password</label>
        <input type="password" name="password"
            class="form-control @error('password') is-invalid @enderror"
            required>
        @error('password')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-4">
        <label class="form-label">Confirm Password</label>
        <input type="password" name="password_confirmation"
            placeholder="Re-enter your password"
            class="form-control form-control-lg" required>
    </div>

    <div class="d-grid mt-4">
        <button type="submit" class="btn btn-primary btn-lg rounded-pill shadow">
            Register as Student
        </button>
    </div>
</div>
</form>