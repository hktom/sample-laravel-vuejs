<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterTableActionAddNewFields extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('actions', function (Blueprint $table) {
            $table->string('link_plug')->nullable();
            $table->string('link_map')->nullable();
            $table->text('implementation_in_2020')->nullable();
            $table->text('implementation_in_2021')->nullable();
            $table->text('implementation_in_2022')->nullable();
            $table->text('implementation_in_2023')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('actions', function (Blueprint $table) {
            //
        });
    }
}
