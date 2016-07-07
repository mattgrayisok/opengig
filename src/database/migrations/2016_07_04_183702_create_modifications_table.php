<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('modifications', function(Blueprint $table){

        $table->increments('id');
        $table->integer('up_votes');
        $table->integer('down_votes');
        $table->text('description');
        $table->timestamp('first_vote');
        $table->timestamps();

      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::drop('modifications');
    }
}
