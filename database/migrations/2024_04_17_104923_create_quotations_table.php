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
        Schema::create('quotations', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->string('code')->unique()->nullable();
            $table->decimal('total',12,2)->default(0.00);
            $table->decimal('subtotal',12,2)->default(0.00);
            $table->decimal('discount',12,2)->default(0.00);
            $table->longText('terms')->nullable();
            $table->tinyInteger('status_id')->unsigned()->index();
            $table->foreign('status_id')->references('id')->on('list_statuses')->onDelete('cascade');
            $table->tinyInteger('discount_id')->unsigned()->index();
            $table->foreign('discount_id')->references('id')->on('list_discounts')->onDelete('cascade');
            $table->tinyInteger('purpose_id')->unsigned()->nullable();
            $table->foreign('purpose_id')->references('id')->on('list_dropdowns')->onDelete('cascade');
            $table->integer('agency_id')->unsigned()->index();
            $table->foreign('agency_id')->references('id')->on('agencies')->onDelete('cascade');
            $table->tinyInteger('laboratory_id')->unsigned()->index();
            $table->foreign('laboratory_id')->references('id')->on('list_laboratories')->onDelete('cascade');
            $table->bigInteger('customer_id')->unsigned()->index();
            $table->foreign('customer_id')->references('id')->on('customers')->onDelete('cascade');
            $table->bigInteger('conforme_id')->unsigned()->index();
            $table->foreign('conforme_id')->references('id')->on('customer_conformes')->onDelete('cascade');
            $table->integer('created_by')->unsigned()->index();
            $table->foreign('created_by')->references('id')->on('users')->onDelete('cascade');
            $table->date('due_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quotations');
    }
};
