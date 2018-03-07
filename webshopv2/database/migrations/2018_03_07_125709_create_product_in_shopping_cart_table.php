<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductInShoppingCartTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_in_shopping_cart', function (Blueprint $table) {
            $table->integer('shopping_cart_id')->unsigned();
            $table->integer('product_id')->unsigned();
            $table->timestamps();
        });

        Schema::table('product_in_shopping_cart', function (Blueprint $table) {
            $table->foreign('shopping_cart_id')->references('id')->on('shopping_carts')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_in_shopping_cart');
    }
}
