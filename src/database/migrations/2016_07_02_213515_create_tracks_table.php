<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTracksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('tracks', function(Blueprint $table){

        $table->increments('id');
        $table->string('name');
        $table->string('artist')->nullable();
        $table->boolean('is_cover')->default(false);

      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tracks');
    }
}
