<?php

use Illuminate\Database\Seeder;

class ImplementationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('implementations')->delete();
        
        \DB::table('implementations')->insert(array (
            0 => 
            array (
                'id' => 1,
                'action_id' => 2,
            'responsable' => 'OCAN (Aline Blaser, SBio)',
                'realisator' => 'GE-21 et OCAN',
                'created_at' => '2020-04-07 06:17:46',
                'updated_at' => '2020-04-07 06:17:46',
            ),
            1 => 
            array (
                'id' => 2,
                'action_id' => 3,
                'responsable' => 'OCAN',
                'realisator' => 'OCAN, GE-21, SIC',
                'created_at' => '2020-04-07 06:32:02',
                'updated_at' => '2020-04-07 06:32:02',
            ),
            2 => 
            array (
                'id' => 3,
                'action_id' => 4,
                'responsable' => 'OCAN',
                'realisator' => 'GE-21 et OCAN',
                'created_at' => '2020-04-07 06:34:31',
                'updated_at' => '2020-04-07 06:34:31',
            ),
            3 => 
            array (
                'id' => 4,
                'action_id' => 6,
                'responsable' => 'OCAN',
                'realisator' => 'OCAN/CCO-Genève',
                'created_at' => '2020-04-07 06:38:58',
                'updated_at' => '2020-04-07 06:38:58',
            ),
            4 => 
            array (
                'id' => 5,
                'action_id' => 7,
                'responsable' => 'OCAN',
                'realisator' => 'Etat de Genève/Pays de Gex - Agglo / Département 74 / CCG /Annemasse-Agglo / RégioNyon / Etat de Vaud – DGE-Biodiv',
                'created_at' => '2020-04-07 06:42:10',
                'updated_at' => '2020-04-07 06:42:10',
            ),
        ));
        
        
    }
}