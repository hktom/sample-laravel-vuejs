<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAcquiredstatesActorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('acquiredstates_actors', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('actor_id')->unsigned();
            $table->bigInteger('acquiredstates_id')->unsigned();
            $table->foreign('actor_id')->references('id')->on('actors');
            $table->foreign('acquiredstates_id')->references('id')->on('acquiredstates');
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
        Schema::dropIfExists('acquiredstates_actors');
    }
}
