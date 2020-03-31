<?php

use Illuminate\Database\Seeder;

class StatesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('states')->delete();
        
        \DB::table('states')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Déjà en cours',
                'created_at' => '2020-03-31 07:50:28',
                'updated_at' => '2020-03-31 07:50:28',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Nouvelle',
                'created_at' => '2020-03-31 07:50:34',
                'updated_at' => '2020-03-31 07:50:34',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Existante à renforcer',
                'created_at' => '2020-03-31 07:50:43',
                'updated_at' => '2020-03-31 07:50:43',
            ),
        ));
        
        
    }
}