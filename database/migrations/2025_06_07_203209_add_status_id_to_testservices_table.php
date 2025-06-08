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
        Schema::table('testservices', function (Blueprint $table) {
            $table->tinyInteger('status_id')->unsigned()->nullable()->after('is_active');
            $table->foreign('status_id')->references('id')->on('list_statuses')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('testservices', function (Blueprint $table) {
            //
        });
    }
};
