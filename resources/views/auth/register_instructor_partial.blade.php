<form method="POST" action="{{ route('register.instructor.submit') }}" enctype="multipart/form-data">
    @csrf

    {{-- Personal Information --}}
    <div class="form-section">
        <h5 class="mb-3 mt-4 fw-semibold">Personal Information</h5>
        <div class="row">
            <div class="col-md-12 mb-3">
                <label class="form-label">Full Name</label>
                <input type="text" name="name"
                    class="form-control @error('name') is-invalid @enderror"
                    value="{{ old('name') }}" required>
                @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 mb-3">
                <label class="form-label">Email Address</label>
                <input type="email" name="email"
                    class="form-control @error('email') is-invalid @enderror"
                    value="{{ old('email') }}" required>
                @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-md-6 mb-3">
                <label class="form-label">Phone Number</label>
                <input type="text" name="phone"
                    class="form-control @error('phone') is-invalid @enderror"
                    value="{{ old('phone') }}" required>
                @error('phone')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 mb-3">
                <label class="form-label">Guardian's Phone Number (At least one)</label>
                <input type="text" name="guardian_phone"
                    class="form-control @error('guardian_phone') is-invalid @enderror"
                    value="{{ old('guardian_phone') }}" required>
                @error('guardian_phone')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-6 mb-3">
                <label class="form-label">Date of Birth</label>
                <input type="date" name="date_of_birth"
                    class="form-control @error('date_of_birth') is-invalid @enderror"
                    value="{{ old('date_of_birth') }}" required>
                @error('date_of_birth')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
    </div>

    {{-- Educational Background --}}
    <h5 class="mb-3 mt-4 fw-semibold">Educational Background</h5>
    <div class="row">
        <div class="col-md-6 mb-3">
            <label class="form-label">School Name</label>
            <input type="text" name="school_name"
                class="form-control @error('school_name') is-invalid @enderror"
                value="{{ old('school_name') }}">
            @error('school_name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="col-md-6 mb-3">
            <label class="form-label">College Name</label>
            <input type="text" name="college_name"
                class="form-control @error('college_name') is-invalid @enderror"
                value="{{ old('college_name') }}">
            @error('college_name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
    </div>

    <div class="mb-3">
        <label class="form-label">Education Qualification</label>
        <input type="text" name="education_qualification"
            class="form-control @error('education_qualification') is-invalid @enderror"
            value="{{ old('education_qualification') }}">
        @error('education_qualification')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="row">
        <div class="col-md-6 mb-3">
            <label class="form-label">O-level Results</label>
            <input type="text" name="o_level_results"
                class="form-control @error('o_level_results') is-invalid @enderror"
                value="{{ old('o_level_results') }}">
            @error('o_level_results')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="col-md-6 mb-3">
            <label class="form-label">A-level Results</label>
            <input type="text" name="a_level_results"
                class="form-control @error('a_level_results') is-invalid @enderror"
                value="{{ old('a_level_results') }}">
            @error('a_level_results')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
    </div>

    <div class="mb-3">
        <label class="form-label">Current University and Semester</label>
        <input type="text" name="current_university_semester"
            class="form-control @error('current_university_semester') is-invalid @enderror"
            value="{{ old('current_university_semester') }}">
        @error('current_university_semester')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    {{-- Experience & Achievements --}}
    <h5 class="mb-3 mt-4 fw-semibold">Experience & Achievements</h5>
    <div class="mb-3">
        <label class="form-label">How many institutions have you taught at before, and for what duration? (if applicable)</label>
        <textarea name="teaching_experience" rows="3"
            class="form-control @error('teaching_experience') is-invalid @enderror">{{ old('teaching_experience') }}</textarea>
        @error('teaching_experience')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label class="form-label">Educational achievements & awards (if applicable)</label>
        <textarea name="educational_achievements" rows="3"
            class="form-control @error('educational_achievements') is-invalid @enderror">{{ old('educational_achievements') }}</textarea>
        @error('educational_achievements')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label class="form-label">Notable student outcome</label>
        <textarea name="notable_student_outcome" rows="3"
            class="form-control @error('notable_student_outcome') is-invalid @enderror">{{ old('notable_student_outcome') }}</textarea>
        @error('notable_student_outcome')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    {{-- Additional Information --}}
    <h5 class="mb-3 mt-4 fw-semibold">Additional Information</h5>
    <div class="mb-3">
        <label class="form-label">Expected duration of commitment to Exam Essentials</label>
        <input type="text" name="expected_commitment"
            class="form-control @error('expected_commitment') is-invalid @enderror"
            value="{{ old('expected_commitment') }}">
        @error('expected_commitment')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="row">
        <div class="col-md-6 mb-3">
            <label class="form-label">Bank Account and Number (Optional)</label>
            <input type="text" name="bank_account_number"
                class="form-control @error('bank_account_number') is-invalid @enderror"
                value="{{ old('bank_account_number') }}">
            @error('bank_account_number')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="col-md-6 mb-3">
            <label class="form-label">bKash Number (Optional)</label>
            <input type="text" name="bkash_number"
                class="form-control @error('bkash_number') is-invalid @enderror"
                value="{{ old('bkash_number') }}">
            @error('bkash_number')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
    </div>

    <div class="mb-3">
        <label class="form-label">Personal Statement (Required) </label>
        <textarea name="personal_statement" rows="4"
            class="form-control @error('personal_statement') is-invalid @enderror">{{ old('personal_statement') }}</textarea>
        @error('personal_statement')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    {{-- File Uploads --}}
    <h5 class="mb-3 mt-4 fw-semibold">Required Documents</h5>
    <div class="row">
        <div class="col-md-6 mb-3">
            <label class="form-label">Passport Size Photo</label>
            <input type="file" name="passport_photo"
                class="form-control @error('passport_photo') is-invalid @enderror">
            @error('passport_photo')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="col-md-6 mb-3">
            <label class="form-label">NID Photo</label>
            <input type="file" name="nid_photo"
                class="form-control @error('nid_photo') is-invalid @enderror">
            @error('nid_photo')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
    </div>

    {{-- Account Security --}}
    <h5 class="mb-3 mt-4 fw-semibold">Account Security</h5>
    <div class="row">
        <div class="col-md-6 mb-3">
            <label class="form-label">Password</label>
            <input type="password" name="password"
                class="form-control @error('password') is-invalid @enderror"
                required>
            @error('password')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="col-md-6 mb-3">
            <label class="form-label">Confirm Password</label>
            <input type="password" name="password_confirmation"
                class="form-control" required>
        </div>
    </div>

    <div class="d-grid mt-4">
        <button type="submit" class="btn btn-primary btn-lg rounded-pill">
            Register as Instructor
        </button>
    </div>

</form>