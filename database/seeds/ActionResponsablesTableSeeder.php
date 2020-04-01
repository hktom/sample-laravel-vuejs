<?php

use Illuminate\Database\Seeder;

class ActionResponsablesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('action_responsables')->delete();
        
        \DB::table('action_responsables')->insert(array (
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
                'entreprise_id' => 48,
                'action_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'entreprise_id' => 49,
                'action_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'entreprise_id' => 48,
                'action_id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}