<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEntreprisesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entreprises', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->unique();
            $table->string('email')->unique()->nullable();
            $table->string('image')->nullable();
            $table->rememberToken()->nullable();
            $table->timestamps();
        });

        Schema::table('action_realisators', function (Blueprint $table) {
            $table->foreign('entreprise_id')->references('id')->on('entreprises');
            $table->foreign('action_id')->references('id')->on('actions');
        });

        Schema::table('action_responsables', function (Blueprint $table) {
            $table->foreign('entreprise_id')->references('id')->on('entreprises');
            $table->foreign('action_id')->references('id')->on('actions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('entreprises');
    }
}
