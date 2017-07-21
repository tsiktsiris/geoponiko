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
            $table->integer('category_id')->unsigned();
            $table->foreign('category_id')->references('id')->on('categories');
            $table->integer('subcategory_id')->unsigned();
            $table->foreign('subcategory_id')->references('id')->on('subcategories');
            $table->string('name', 50);
            $table->string('product_photo1')->nullable();
            $table->string('product_photo2')->nullable();
            $table->string('product_photo3')->nullable();
            $table->string('product_photo4')->nullable();
            $table->string('product_photo5')->nullable();
            $table->string('product_photo6')->nullable();
            $table->text('description')->nullable();
            $table->decimal('price',5,2);
            $table->decimal('dprice',5,2);
            $table->decimal('addcost',5,2)->nullable();
            $table->integer('views')->unsigned();
            $table->integer('sold')->unsigned();
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
