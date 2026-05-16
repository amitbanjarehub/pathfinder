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
        Schema::create('assignments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('test_id')->constrained()->cascadeOnDelete();
            $table->foreignId('assigner_id')->constrained('users')->cascadeOnDelete(); // Counsellor/Institute
            $table->foreignId('student_id')->constrained('users')->cascadeOnDelete(); // Student
            $table->string('status')->default('assigned'); // assigned, started, completed
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('assignments');
    }
};
