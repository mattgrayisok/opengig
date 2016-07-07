<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('events', function(Blueprint $table){

        $table->increments('id');
        $table->uuid('uuid')->index();
        $table->integer('venue_id')->unsigned()->nullable();
        $table->string('name');
        $table->timestamp('start_timestamp');
        $table->timestamp('end_timestamp');

        $table->foreign('venue_id')->references('id')->on('venues')
          ->onDelete('set null')->onUpdate('cascade');

        $table->index(['start_timestamp','end_timestamp']);

      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('events');
    }
}
