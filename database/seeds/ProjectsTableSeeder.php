<?php

use Illuminate\Database\Seeder;

class ProjectsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('projects')->delete();
        
        \DB::table('projects')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Infrastructure écologique du territoire',
                'ca_principal' => 'CA01',
                'image' => NULL,
                'created_at' => '2020-03-30 19:11:11',
                'updated_at' => '2020-03-30 19:11:11',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Sites protégés et réserves naturelles',
                'ca_principal' => 'CA02',
                'image' => NULL,
                'created_at' => '2020-03-30 19:11:19',
                'updated_at' => '2020-03-30 19:11:19',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Forêt',
                'ca_principal' => 'CA03',
                'image' => NULL,
                'created_at' => '2020-03-30 19:11:28',
                'updated_at' => '2020-03-30 19:11:28',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Arbres',
                'ca_principal' => 'CA04',
                'image' => NULL,
                'created_at' => '2020-03-30 19:11:35',
                'updated_at' => '2020-03-30 19:11:35',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Cours d\'eau et lac',
                'ca_principal' => 'CA05',
                'image' => NULL,
                'created_at' => '2020-03-30 19:11:45',
                'updated_at' => '2020-03-30 19:11:45',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Aire agricole',
                'ca_principal' => 'CA06',
                'image' => NULL,
                'created_at' => '2020-03-30 19:11:56',
                'updated_at' => '2020-03-30 19:11:56',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Espace Bâti',
                'ca_principal' => 'CA07',
                'image' => NULL,
                'created_at' => '2020-03-30 19:12:12',
                'updated_at' => '2020-03-30 19:12:12',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Faune et flore',
                'ca_principal' => 'CA08',
                'image' => NULL,
                'created_at' => '2020-03-30 19:12:31',
                'updated_at' => '2020-03-30 19:12:31',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Sensibilisation',
                'ca_principal' => 'CA09',
                'image' => NULL,
                'created_at' => '2020-03-30 19:12:58',
                'updated_at' => '2020-03-30 19:12:58',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'Formation',
                'ca_principal' => 'CA10',
                'image' => NULL,
                'created_at' => '2020-03-30 19:13:13',
                'updated_at' => '2020-03-30 19:13:13',
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'Outils analytiques',
                'ca_principal' => 'CA11',
                'image' => NULL,
                'created_at' => '2020-03-30 19:13:29',
                'updated_at' => '2020-03-30 19:13:29',
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'Outils administratifs et politiques',
                'ca_principal' => 'CA12',
                'image' => NULL,
                'created_at' => '2020-03-30 19:13:41',
                'updated_at' => '2020-03-30 19:13:41',
            ),
        ));
        
        
    }
}