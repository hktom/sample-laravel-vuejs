<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewstatesActorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('newstates_actors', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('newstates_id')->unsigned();
            $table->bigInteger('actor_id')->unsigned();
            $table->foreign('newstates_id')->references('id')->on('newstates');
            $table->foreign('actor_id')->references('id')->on('actors');
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
        Schema::dropIfExists('newstates_actors');
    }
}
