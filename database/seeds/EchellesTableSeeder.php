<?php

use Illuminate\Database\Seeder;

class EchellesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('echelles')->delete();
        
        \DB::table('echelles')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Locale',
                'created_at' => '2020-04-10 16:37:32',
                'updated_at' => '2020-04-10 16:37:32',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Communale',
                'created_at' => '2020-04-10 16:37:38',
                'updated_at' => '2020-04-10 16:37:38',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Cantonale',
                'created_at' => '2020-04-10 16:37:43',
                'updated_at' => '2020-04-10 16:37:43',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Transfrontalière',
                'created_at' => '2020-04-10 16:37:50',
                'updated_at' => '2020-04-10 16:37:50',
            ),
        ));
        
        
    }
}