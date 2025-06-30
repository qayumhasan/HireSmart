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
        Schema::create('job_applications', function (Blueprint $table) {
            $table->id();
    $table->foreignId('user_id')->constrained('users')->onDelete('cascade'); // Candidate
    $table->foreignId('job_id')->constrained('job_management')->onDelete('cascade');
    $table->text('cover_letter')->nullable();
    $table->string('resume_path'); // <-- Path to uploaded PDF file
    $table->unique(['user_id', 'job_id']);
    $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_applications');
    }
};
