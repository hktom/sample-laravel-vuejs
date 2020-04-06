<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCollaboratorActionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('collaborator_actions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('actor_id')->unsigned();
            $table->bigInteger('action_id')->unsigned();
            $table->foreign('actor_id')->references('id')->on('actors');
            $table->foreign('action_id')->references('id')->on('actions');
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
        Schema::dropIfExists('collaborator_actions');
    }
}
