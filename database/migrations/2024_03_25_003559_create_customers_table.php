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
        Schema::create('customers', function (Blueprint $table) {
            $table->engine = 'InnoDB'; 
            $table->bigIncrements('id');
            $table->string('code')->unique();
            $table->string('name');
            $table->boolean('is_main')->default(1);
            $table->boolean('is_internal')->default(0);
            $table->boolean('is_new')->default(1)->nullable();
            $table->boolean('is_active')->default(1);
            $table->tinyInteger('sex_id')->unsigned()->nullable();
            $table->foreign('sex_id')->references('id')->on('list_dropdowns')->onDelete('cascade');
            $table->tinyInteger('female_id')->unsigned()->nullable();
            $table->foreign('female_id')->references('id')->on('list_dropdowns')->onDelete('cascade');
            $table->tinyInteger('type_id')->unsigned()->nullable();
            $table->foreign('type_id')->references('id')->on('list_dropdowns')->onDelete('cascade');
            $table->tinyInteger('industry_id')->unsigned()->index();
            $table->foreign('industry_id')->references('id')->on('list_industries')->onDelete('cascade');
            $table->tinyInteger('classification_id')->unsigned()->index();
            $table->foreign('classification_id')->references('id')->on('list_dropdowns')->onDelete('cascade');
            $table->bigInteger('name_id')->unsigned()->index();
            $table->foreign('name_id')->references('id')->on('customer_names')->onDelete('cascade');
            $table->integer('agency_id')->unsigned()->index();
            $table->foreign('agency_id')->references('id')->on('agencies')->onDelete('cascade');
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
        Schema::dropIfExists('customers');
    }
};
