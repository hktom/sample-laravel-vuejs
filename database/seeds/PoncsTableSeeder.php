<?php

use Illuminate\Database\Seeder;

class PoncsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('poncs')->delete();
        
        \DB::table('poncs')->insert(array (
            0 => 
            array (
                'id' => 1,
                'content' => 'permanente',
                'created_at' => '2020-04-01 03:44:48',
                'updated_at' => '2020-04-01 03:44:48',
            ),
            1 => 
            array (
                'id' => 2,
                'content' => 'Ponctuelle',
                'created_at' => '2020-04-01 03:45:07',
                'updated_at' => '2020-04-01 03:45:07',
            ),
        ));
        
        
    }
}