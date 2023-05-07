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
        Schema::table('users', function (Blueprint $table) {
            $table->string('referral_code')->after('task_completed')->nullable();
            $table->integer('referral_bonus')->after('task_completed')->nullable();
            $table->unsignedBigInteger('referrer_id')->after('task_completed')->nullable();
            $table->foreign('referrer_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign('users_referrer_id_foreign');
            $table->dropColumn('referral_code');
            $table->dropColumn('referrer_id');
            $table->dropColumn('referral_bonus');
        });
    }
};
