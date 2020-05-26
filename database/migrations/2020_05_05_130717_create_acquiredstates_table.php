<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAcquiredstatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('acquiredstates', function (Blueprint $table) {
            $table->bigIncrements('id');
            //$table->bigInteger("sourcefinancing")->nullable()->unsigned();
            $table->double("fonction31")->nullable();
            $table->double("fonction36")->nullable();
            $table->double("ivest")->nullable();
            $table->double("rpt_20_23")->nullable();
            $table->double("total")->nullable();
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
        Schema::dropIfExists('acquiredstates');
    }
}
