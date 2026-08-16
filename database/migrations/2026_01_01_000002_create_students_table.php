<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('student_code')->unique();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->unique();
            $table->string('phone')->nullable();
            $table->enum('gender', ['Male', 'Female', 'Other']);
            $table->date('dob')->nullable();
            $table->string('grade_level'); // e.g. "Grade 10", "Semester 3", "BSCS Year 2"
            $table->string('department');  // e.g. "Computer Science", "Business Administration", "Science"
            $table->text('address')->nullable();
            $table->enum('status', ['active', 'graduated', 'suspended', 'inactive'])->default('active');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
