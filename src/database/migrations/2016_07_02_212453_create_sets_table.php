<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('sets', function(Blueprint $table){

        $table->increments('id');
        $table->uuid('uuid')->index();
        $table->integer('event_id')->unsigned();
        $table->integer('artist_id')->unsigned();
        $table->integer('stage_id')->unsigned()->nullable();
        $table->timestamp('start_timestamp')->nullable();
        $table->timestamp('end_timestamp')->nullable();
        $table->boolean('headliner')->default(false);
        $table->text('setlist')->nullable();

        $table->foreign('event_id')->references('id')->on('events')
          ->onDelete('cascade')->onUpdate('cascade');
        $table->foreign('artist_id')->references('id')->on('artists')
          ->onDelete('cascade')->onUpdate('cascade');
        $table->foreign('stage_id')->references('id')->on('stages')
          ->onDelete('set null')->onUpdate('cascade');

      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('sets');
    }
}
