<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterAcquiredstatesTableAddForeignKey extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('acquiredstates', function (Blueprint $table) {
            $table->bigInteger('action_id')->unsigned();
            $table->bigInteger('actor_id')->unsigned();
            $table->foreign('action_id')->references('id')->on('actions');
            $table->foreign('actor_id')->references('id')->on('actors');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('acquiredstates', function (Blueprint $table) {
            //
        });
    }
}
