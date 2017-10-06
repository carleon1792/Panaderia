<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('productcode');
            $table->string('productname',100);
            $table->integer('productline')->unsigned();
            $table->string('productscale',100);
            $table->string('productvendor',100);
            $table->string('productdescription',100);
            $table->integer('quantityinstock');
            $table->integer('buyprice');
            $table->timestamps();
            $table->foreign('productline')->references('productline')->on('productlines');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
