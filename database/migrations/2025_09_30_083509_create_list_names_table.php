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
        Schema::create('list_names', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->smallIncrements('id');
            $table->string('name',100); 
            $table->boolean('is_sub')->default(0);
            $table->boolean('is_active')->default(1);
            $table->unsignedSmallInteger('parent_id')->nullable();
            $table->foreign('parent_id')->references('id')->on('list_names')->onDelete('cascade');
            $table->timestamps();
            $table->string('unique_name_if_main', 100)->virtualAs("IF(is_sub = 0, name, NULL)");
            $table->unique('unique_name_if_main');
            $table->unique(['name', 'parent_id', 'is_sub']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('list_names');
    }
};
