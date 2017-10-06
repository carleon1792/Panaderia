<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderdetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orderdetails', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('productcode')->unsigned();
            $table->integer('ordernumber')->unsigned();
            $table->integer('quantityordered');
            $table->integer('priceeach');
            $table->integer('orderlinenumber');
            $table->foreign('productcode')->references('productcode')->on('products');
            $table->foreign('ordernumber')->references('ordernumber')->on('orders');
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
        Schema::dropIfExists('orderdetails');
    }
}
