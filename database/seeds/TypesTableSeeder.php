<?php

use Illuminate\Database\Seeder;

class TypesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('types')->delete();
        
        \DB::table('types')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Réglementaire',
                'created_at' => '2020-04-10 16:38:05',
                'updated_at' => '2020-04-10 16:38:05',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Animation',
                'created_at' => '2020-04-10 16:38:14',
                'updated_at' => '2020-04-10 16:38:14',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Étude',
                'created_at' => '2020-04-10 16:38:20',
                'updated_at' => '2020-04-10 16:38:20',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Travaux',
                'created_at' => '2020-04-10 16:38:40',
                'updated_at' => '2020-04-10 16:38:40',
            ),
        ));
        
        
    }
}