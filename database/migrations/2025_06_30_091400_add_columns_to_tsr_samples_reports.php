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
        Schema::table('tsr_sample_reports', function (Blueprint $table) {
            $table->longText('passkey')->nullable()->after('code');
            $table->integer('cro_id')->unsigned()->nullable()->after('user_id')->index();
            $table->foreign('cro_id')->references('id')->on('users')->onDelete('cascade');
            $table->integer('tm_id')->unsigned()->nullable()->after('cro_id')->index();
            $table->foreign('tm_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tsr_sample_reports', function (Blueprint $table) {
            //
        });
    }
};
