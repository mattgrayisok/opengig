<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSetTrackTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('set_track', function(Blueprint $table){

        $table->increments('id');
        $table->integer('set_id')->unsigned();
        $table->integer('track_id')->unsigned();
        $table->integer('position')->unsigned();

        $table->foreign('set_id')->references('id')->on('sets')
          ->onDelete('cascade')->onUpdate('cascade');
        $table->foreign('track_id')->references('id')->on('tracks')
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
        Schema::drop('set_track');
    }
}
