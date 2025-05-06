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
        Schema::create('tsr_sample_disposals', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->datetime('disposed_at')->nullable();
            $table->tinyInteger('disposal_id')->unsigned()->nullable();
            $table->foreign('disposal_id')->references('id')->on('list_dropdowns')->onDelete('cascade');
            $table->tinyInteger('status_id')->unsigned()->nullable();
            $table->foreign('status_id')->references('id')->on('list_statuses')->onDelete('cascade');
            $table->bigInteger('sample_id')->unsigned()->index();
            $table->foreign('sample_id')->references('id')->on('tsr_samples')->onDelete('cascade');
            $table->integer('user_id')->unsigned()->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tsr_sample_disposals');
    }
};
