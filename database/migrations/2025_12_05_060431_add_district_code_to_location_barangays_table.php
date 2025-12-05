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
        Schema::table('location_barangays', function (Blueprint $table) {
            $table->string('district_code')->nullable()->constrained();
            $table->foreign('district_code')->references('code')->on('location_districts')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('location_barangays', function (Blueprint $table) {
            //
        });
    }
};
