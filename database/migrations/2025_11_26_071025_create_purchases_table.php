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
        Schema::create('purchases', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete(); // Buyer
            $table->foreignId('test_id')->constrained()->cascadeOnDelete();
            $table->string('test_code')->unique(); // Unique code for this purchase
            $table->boolean('is_used')->default(false); // One-time use flag
            $table->decimal('price_paid', 8, 2);
            $table->string('transaction_id');
            $table->string('status')->default('pending'); // pending, completed, failed
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('purchases');
    }
};
