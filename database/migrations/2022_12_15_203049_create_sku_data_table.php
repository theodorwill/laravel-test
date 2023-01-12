<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sku_data', function (Blueprint $table) {
            $table->id();
            $table->integer('products_id');
            $table->integer('sku')->unique();
            $table->integer('vat')->nullable();
            $table->double('priceExcVat')->nullable();
            $table->double('priceIncVat')->nullable();
            $table->string('priceExcVatFormatted')->nullable();
            $table->string('priceIncVatFormatted')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sku_data');
    }
};
