<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("code")->nullable()->unique();
            $table->string("label");
            $table->string("image")->nullable();
            $table->text('description')->nullable();
            $table->text('indicator')->nullable();
            $table->boolean('R')->nullable();
            $table->boolean('A')->nullable();
            $table->boolean('E')->nullable();
            $table->boolean('T')->nullable();
            $table->string('total_cout_etat')->nullable();
            $table->string('cout_externe')->nullable();
            $table->string('total_couts')->nullable();
            $table->bigInteger("project_id")->unsigned();
            $table->bigInteger("comment_id")->unsigned()->nullable();
            $table->bigInteger("state_id")->unsigned()->nullable();
            $table->bigInteger("ponc_id")->unsigned()->nullable();
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
        Schema::dropIfExists('actions');
    }
}
