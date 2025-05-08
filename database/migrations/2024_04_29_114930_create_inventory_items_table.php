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
        Schema::create('inventory_items', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('code')->unique();
            $table->string('old_code',20)->nullable();
            $table->string('name')->unique();
            $table->string('img')->default('avatar.jpg');
            $table->integer('reorder')->default(0);
            $table->tinyInteger('unit_id')->unsigned()->index();
            $table->foreign('unit_id')->references('id')->on('list_dropdowns')->onDelete('cascade');
            $table->tinyInteger('category_id')->unsigned()->nullable();
            $table->foreign('category_id')->references('id')->on('list_dropdowns')->onDelete('cascade');
            $table->tinyInteger('laboratory_id')->unsigned()->index();
            $table->foreign('laboratory_id')->references('id')->on('list_laboratories')->onDelete('cascade');
            $table->integer('agency_id')->unsigned()->index();
            $table->foreign('agency_id')->references('id')->on('agencies')->onDelete('cascade');
            $table->boolean('is_active')->default(1);
            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inventory_items');
    }
};
