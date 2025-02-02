<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
        {
            Schema::create('student_teacher_courses', function (Blueprint $table) {
                $table->id();
                $table->timestamps();

                $table->string('student_id'); //key ek string nisa define kala
                $table->foreign('student_id')->references('student_id')->on('students')->onDelete('cascade');
                $table->foreignId('teacher_course_id')->constrained('teacher_courses')->onDelete('cascade');
                
            });
        }

    /**
     * Reverse the migrations.
     */
    public function down(): void
        {
            Schema::dropIfExists('student_teacher_courses');
        }
};
