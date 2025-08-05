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
        Schema::table('tsrs', function (Blueprint $table) {
            $table->smallInteger('facility_id')->default(1)->unsigned()->after('conforme_id');
            $table->foreign('facility_id')->references('id')->on('agency_facilities')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tsrs', function (Blueprint $table) {
            //
        });
    }
};
