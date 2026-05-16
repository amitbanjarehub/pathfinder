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
        Schema::create('test_attempts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('test_id')->constrained()->cascadeOnDelete();
            $table->foreignId('user_id')->nullable()->constrained()->nullOnDelete(); // Nullable for guests
            $table->foreignId('assignment_id')->nullable()->constrained()->nullOnDelete();
            $table->timestamp('start_time')->useCurrent();
            $table->timestamp('end_time')->nullable();
            $table->decimal('score', 8, 2)->nullable();
            $table->string('status')->default('in_progress'); // in_progress, completed
            $table->foreignId('current_question_id')->nullable()->constrained('questions')->nullOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('test_attempts');
    }
};
