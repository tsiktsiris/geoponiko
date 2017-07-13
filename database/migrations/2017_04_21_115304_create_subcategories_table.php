<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubcategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subcategories', function (Blueprint $table) {
          $table->increments('id');
          $table->timestamps();
          $table->string('name');
          $table->string('description')->nullable();
          $table->integer('category_id')->unsigned()->default(1);
          $table->foreign('category_id')->references('id')->on('categories');
          $table->integer('priority')->nullable();
        });

        DB::table('subcategories')->insert([
            ['name' => 'Χωρίς Υποκατηγορία', 'description' => 'Η κατηγορία αυτή περιέχει τα προϊόντα χωρίς υποκατηγορία']
        ]);
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subcategories');
    }
}
