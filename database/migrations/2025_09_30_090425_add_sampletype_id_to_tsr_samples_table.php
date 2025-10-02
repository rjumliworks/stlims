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
        Schema::table('tsr_samples', function (Blueprint $table) {
            $table->unsignedSmallInteger('sampletype_id')->nullable()->after('is_disposed');
            $table->foreign('sampletype_id')->references('id')->on('list_names')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tsr_samples', function (Blueprint $table) {
            //
        });
    }
};
