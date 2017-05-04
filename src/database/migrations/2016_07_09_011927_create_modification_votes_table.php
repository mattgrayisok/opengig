<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModificationVotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('modification_votes', function(Blueprint $table){

        $table->increments('id');
        $table->integer('user_id')->unsigned();
        $table->integer('modification_id')->unsigned();
        $table->timestamps();

        $table->foreign('modification_id')->references('id')->on('modifications')
          ->onDelete('cascade')->onUpdate('cascade');
        $table->foreign('user_id')->references('id')->on('users')
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
      Schema::drop('modification_votes');
    }
}
