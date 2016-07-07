<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVenuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('venues', function(Blueprint $table){

        $table->increments('id');
        $table->uuid('uuid')->index();
        $table->integer('country_id')->unsigned()->nullable();
        $table->string('name');
        $table->text('address');
        $table->string('website');
        $table->double('latitude');
        $table->double('longitude');
        $table->string('timezone');

        $table->foreign('country_id')->references('id')->on(\Config::get('countries.table_name'))
          ->onDelete('set null')->onUpdate('cascade');

        $table->index(['latitude', 'longitude']);

      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('venues');
    }
}
