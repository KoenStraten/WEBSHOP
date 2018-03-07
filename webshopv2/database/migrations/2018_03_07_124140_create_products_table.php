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
            $table->increments('id');
            $table->string('name');
            $table->integer('price');
            $table->text('description');
            $table->text('image');
            $table->integer('specification_id')->unsigned();
            $table->integer('review_id')->unsigned();
            $table->string('category');
            $table->timestamps();
        });

        Schema::table('products', function (Blueprint $table) {
            $table->foreign('specification_id')->references('id')->on('specifications')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('review_id')->references('id')->on('reviews')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('category')->references('category')->on('categories')->onDelete('cascade')->onUpdate('cascade');
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
