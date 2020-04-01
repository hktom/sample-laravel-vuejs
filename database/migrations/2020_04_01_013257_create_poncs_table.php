<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePoncsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('poncs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("content");
            $table->timestamps();
        });

        Schema::table('actions', function (Blueprint $table) {
            $table->foreign('ponc_id')->references('id')->on('poncs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('poncs');
    }
}
