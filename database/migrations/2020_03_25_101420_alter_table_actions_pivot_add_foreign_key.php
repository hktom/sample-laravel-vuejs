<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterTableActionsPivotAddForeignKey extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('action_authors', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('action_id')->references('id')->on('actions');
        });

        Schema::table('action_collaborators', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('action_id')->references('id')->on('actions');
        });

        Schema::table('action_orientations', function (Blueprint $table) {
            $table->foreign('orientation_id')->references('id')->on('orientations');
            $table->foreign('action_id')->references('id')->on('actions');

        });

        // Schema::table('action_types', function (Blueprint $table) {
        //     $table->foreign('type_id')->references('id')->on('types');
        //     $table->foreign('action_id')->references('id')->on('actions');
        // });

        // Schema::table('action_echelles', function (Blueprint $table) {
        //     $table->foreign('echelle_id')->references('id')->on('echelles');
        //     $table->foreign('action_id')->references('id')->on('actions');
        // });

        // Schema::table('action_fields', function (Blueprint $table) {
        //     $table->foreign('field_id')->references('id')->on('fields');
        //     $table->foreign('action_id')->references('id')->on('actions');
        // });

        // Schema::table('action_states', function (Blueprint $table) {
        //     $table->foreign('state_id')->references('id')->on('states');
        //     $table->foreign('action_id')->references('id')->on('actions');
        // });



        // Schema::table('action_cases', function (Blueprint $table) {
        //     $table->foreign('case_id')->references('id')->on('cases');
        //     $table->foreign('action_id')->references('id')->on('actions');

        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('action_authors', function (Blueprint $table) {
            //
        });
    }
}
