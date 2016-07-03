<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('stages', function(Blueprint $table){

        $table->increments('id');
        $table->integer('venue_id')->unsigned();
        $table->string('name');

        $table->foreign('venue_id')->references('id')->on('venues')
          ->onDelete('cascade')->onUpdate('cascade');

      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('stages');
    }
}
