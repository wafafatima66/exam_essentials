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
            $table->string('first_name')->nullable()->after('name');
            $table->string('last_name')->nullable()->after('first_name');
            $table->string('father_name')->nullable()->after('last_name');
            $table->string('mother_name')->nullable()->after('father_name');
            $table->string('nid')->nullable()->after('mother_name');
            $table->date('dob')->nullable()->after('nid');

            $table->string('education_ssc')->nullable()->after('phone');
            $table->string('education_hsc')->nullable()->after('education_ssc');
            $table->string('education_bachelor')->nullable()->after('education_hsc');
            $table->string('education_masters')->nullable()->after('education_bachelor');
            $table->string('education_phd')->nullable()->after('education_masters');
            $table->string('role')->default('student')->after('education_phd');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn([
                'first_name',
                'last_name',
                'father_name',
                'mother_name',
                'nid',
                'dob',

                'education_ssc',
                'education_hsc',
                'education_bachelor',
                'education_masters',
                'education_phd',
                'role',
            ]);
        });
    }
};
