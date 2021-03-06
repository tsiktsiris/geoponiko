<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('firstname');
            $table->string('lastname');
            $table->string('email');
            $table->string('mobiletel');
            $table->string('address');
            $table->string('city');
            $table->string('zipcode');
            $table->text('notes');
            $table->string('afm')->nullable();
            $table->string('company')->nullable();
            $table->boolean('invoice')->nullable();
            $table->boolean('confirmed')->default(false);
            $table->boolean('delivered')->default(false);
            $table->boolean('completed')->default(false);
            $table->decimal('addcost',5,2)->nullable();
            $table->integer('payment');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
