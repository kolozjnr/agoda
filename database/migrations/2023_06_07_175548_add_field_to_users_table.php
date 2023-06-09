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
            $table->integer('trial_balance')->after('balance')->default('228');
            $table->string('earnings')->after('balance')->default('0');
            $table->integer('lock_status')->after('status')->default('0');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('trial_balance');
            $table->dropColumn('earnings');
            $table->dropColumn('lock_status');
        });
    }
};
