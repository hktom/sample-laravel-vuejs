<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterTableUserMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->foreign('entreprise_id')->references('id')->on('entreprises');
        });

        Schema::table('action_financements', function (Blueprint $table) {
            $table->foreign('entreprise_id')->references('id')->on('entreprises');
            $table->foreign('action_id')->references('id')->on('actions');
        });

        Schema::table('budget_financements', function (Blueprint $table) {
            $table->foreign('entreprise_id')->references('id')->on('entreprises');
            $table->foreign('budget_id')->references('id')->on('actions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
}
