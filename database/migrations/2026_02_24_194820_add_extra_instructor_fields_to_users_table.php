<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('school_name')->nullable();
            $table->string('college_name')->nullable();
            $table->string('education_qualification')->nullable();
            $table->string('o_level_results')->nullable();
            $table->string('a_level_results')->nullable();
            $table->string('current_university_semester')->nullable();
            $table->text('teaching_experience')->nullable();
            $table->text('educational_achievements')->nullable();
            $table->string('guardian_phone')->nullable();
            $table->string('expected_commitment')->nullable();
            $table->string('passport_photo')->nullable();
            $table->string('nid_photo')->nullable();
            $table->text('notable_student_outcome')->nullable();
            $table->string('bank_account_number')->nullable();
            $table->string('bkash_number')->nullable();
            $table->text('personal_statement')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn([
                'school_name',
                'college_name',
                'education_qualification',
                'o_level_results',
                'a_level_results',
                'current_university_semester',
                'teaching_experience',
                'educational_achievements',
                'guardian_phone',
                'expected_commitment',
                'passport_photo',
                'nid_photo',
                'notable_student_outcome',
                'bank_account_number',
                'bkash_number',
                'personal_statement',
            ]);
        });
    }
};
