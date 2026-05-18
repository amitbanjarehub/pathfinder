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
        Schema::create('join_interns', function (Blueprint $table) {

            $table->id();

            // Basic Details
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->string('city');
            $table->string('status')->nullable();
            $table->string('institution')->nullable();

            // Availability
            $table->string('duration')->nullable();
            $table->string('availability')->nullable();
            $table->string('mode')->nullable();

            // Multi Select Fields
            $table->json('interests')->nullable();
            $table->json('skills')->nullable();
            $table->json('preferences')->nullable();
            $table->json('traits')->nullable();

            // Textareas
            $table->text('why_join')->nullable();
            $table->text('role_excitement')->nullable();
            $table->text('experience_details')->nullable();
            $table->text('learning_expectation')->nullable();

            // Resume & Portfolio
            $table->string('resume')->nullable();
            $table->string('portfolio')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('join_interns');
    }
};