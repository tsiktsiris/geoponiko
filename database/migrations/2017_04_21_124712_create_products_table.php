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
            $table->timestamps();
            $table->integer('category_id')->unsigned()->default(1);
            $table->foreign('category_id')->references('id')->on('categories');
            $table->integer('subcategory_id')->unsigned()->default(1);
            $table->foreign('subcategory_id')->references('id')->on('subcategories');
            $table->decimal('price',5,2);
            $table->boolean('availability')->default(true);
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
