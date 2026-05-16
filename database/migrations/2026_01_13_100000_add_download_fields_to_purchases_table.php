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
        Schema::table('purchases', function (Blueprint $table) {
            // For counsellor purchases: whether assigned student can download report
            $table->boolean('allow_student_download')->default(false)->after('status');

            // For direct student purchases: track which student purchased
            $table->foreignId('purchased_by_student_id')->nullable()->after('allow_student_download')
                ->constrained('users')->nullOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('purchases', function (Blueprint $table) {
            $table->dropForeign(['purchased_by_student_id']);
            $table->dropColumn(['allow_student_download', 'purchased_by_student_id']);
        });
    }
};
