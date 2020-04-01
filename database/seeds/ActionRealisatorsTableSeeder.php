<?php

use Illuminate\Database\Seeder;

class ActionRealisatorsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('action_realisators')->delete();
        
        \DB::table('action_realisators')->insert(array (
            0 => 
            array (
                'id' => 1,
                'entreprise_id' => 1,
                'action_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'entreprise_id' => 1,
                'action_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'entreprise_id' => 1,
                'action_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}