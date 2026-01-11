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
        Schema::create('enrollments', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->integer('age');
            $table->string('country');
            $table->enum('course_interest', ['Quran', 'Islamic Studies', 'Arabic Language']);
            $table->enum('preferred_schedule', ['Morning', 'Afternoon', 'Evening', 'Flexible']);
            $table->enum('experience_level', ['Beginner', 'Intermediate', 'Advanced']);
            $table->string('language')->default('en');
            $table->enum('status', ['pending', 'contacted', 'enrolled'])->default('pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('enrollments');
    }
};
