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
        Schema::create('score_scales', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description')->nullable();
            $table->timestamps();
        });

        Schema::create('score_scale_ranges', function (Blueprint $table) {
            $table->id();
            $table->foreignId('score_scale_id')->constrained()->cascadeOnDelete();
            $table->integer('min_score');
            $table->integer('max_score');
            $table->integer('sten_score');
            $table->timestamps();
        });

        Schema::table('sections', function (Blueprint $table) {
            $table->foreignId('score_scale_id')->nullable()->constrained()->nullOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('sections', function (Blueprint $table) {
            $table->dropForeign(['score_scale_id']);
            $table->dropColumn('score_scale_id');
        });

        Schema::dropIfExists('score_scale_ranges');
        Schema::dropIfExists('score_scales');
    }
};
