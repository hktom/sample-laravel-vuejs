<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActionSourcefinancingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('action_sourcefinancings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('action_id')->unsigned();
            $table->bigInteger('actor_id')->unsigned();
            $table->foreign('action_id')->references('id')->on('actions');
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
        Schema::dropIfExists('action_sourcefinancings');
    }
}
