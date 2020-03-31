<?php

use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('comments')->delete();
        
        \DB::table('comments')->insert(array (
            0 => 
            array (
                'id' => 1,
            'content' => 'Budget Etat non acquis à prévoir en plus (non déterminé à ce jour)',
                'created_at' => '2020-03-31 07:51:20',
                'updated_at' => '2020-03-31 07:51:20',
            ),
            1 => 
            array (
                'id' => 2,
            'content' => '(le reste des coûts est compris dans la fiche Cartographie IE)',
                'created_at' => '2020-03-31 07:51:26',
                'updated_at' => '2020-03-31 07:51:26',
            ),
            2 => 
            array (
                'id' => 3,
                'content' => 'lien à faire avec CA8-FA5 et CA5-FA9',
                'created_at' => '2020-03-31 07:51:34',
                'updated_at' => '2020-03-31 07:51:34',
            ),
            3 => 
            array (
                'id' => 4,
            'content' => '1 ETP (100\'000 / an)',
                'created_at' => '2020-03-31 07:51:43',
                'updated_at' => '2020-03-31 07:51:43',
            ),
            4 => 
            array (
                'id' => 5,
            'content' => '1 ETP (150\'000 / an)',
                'created_at' => '2020-03-31 07:51:49',
                'updated_at' => '2020-03-31 07:51:49',
            ),
            5 => 
            array (
                'id' => 6,
                'content' => '0.2 ETP + 0.2 ETP',
                'created_at' => '2020-03-31 07:51:55',
                'updated_at' => '2020-03-31 07:51:55',
            ),
            6 => 
            array (
                'id' => 7,
                'content' => '0.4 ETP',
                'created_at' => '2020-03-31 07:52:01',
                'updated_at' => '2020-03-31 07:52:01',
            ),
            7 => 
            array (
                'id' => 8,
                'content' => '0.2 ETP',
                'created_at' => '2020-03-31 07:52:07',
                'updated_at' => '2020-03-31 07:52:07',
            ),
            8 => 
            array (
                'id' => 9,
            'content' => 'Voir si on laisse en fiche ou si on met dans la synthèse travail en interne. Pas les anciens cours d\'eau car en train de monter en puissance sur la gestion des infractions (sera une action du prochain PB1 quand ça sera prêt) Peut être embaucher un inspecteur et un juriste dédié à ça',
                'created_at' => '2020-03-31 07:55:14',
                'updated_at' => '2020-03-31 07:55:14',
            ),
            9 => 
            array (
                'id' => 10,
                'content' => '"Prise en compte de la biodiversité A destination communes, propriétaires, architectes, planificateurs"',
                'created_at' => '2020-03-31 07:55:36',
                'updated_at' => '2020-03-31 07:55:36',
            ),
            10 => 
            array (
                'id' => 11,
                'content' => '1 ETP acquis financé par les SIG via la texe d\'épuration',
                'created_at' => '2020-03-31 07:55:42',
                'updated_at' => '2020-03-31 07:55:42',
            ),
            11 => 
            array (
                'id' => 12,
                'content' => 'lien à faire avec CA8-FA5 et CA2-FA1',
                'created_at' => '2020-03-31 07:56:19',
                'updated_at' => '2020-03-31 07:56:19',
            ),
            12 => 
            array (
                'id' => 13,
                'content' => '"Coût Etat : 35000 fonctionnement, 120000 subvention fédérale Validation mi-juillet par JM Sermet + Erard ensuite"',
                'created_at' => '2020-03-31 07:56:33',
                'updated_at' => '2020-03-31 07:56:33',
            ),
            13 => 
            array (
                'id' => 14,
                'content' => 'Coût en fonctionnement Validation mi-juillet par JM Sermet + Erard ensuite',
                'created_at' => '2020-03-31 07:56:49',
                'updated_at' => '2020-03-31 07:56:49',
            ),
            14 => 
            array (
                'id' => 15,
                'content' => 'Coût en fonctionnement',
                'created_at' => '2020-03-31 07:56:58',
                'updated_at' => '2020-03-31 07:56:58',
            ),
            15 => 
            array (
                'id' => 16,
                'content' => 'Coût en fonctionnement Point 3A du PPH',
                'created_at' => '2020-03-31 07:57:08',
                'updated_at' => '2020-03-31 07:57:08',
            ),
            16 => 
            array (
                'id' => 17,
                'content' => '0.5 ETP',
                'created_at' => '2020-03-31 07:57:15',
                'updated_at' => '2020-03-31 07:57:15',
            ),
            17 => 
            array (
                'id' => 18,
                'content' => '0.6 ETP',
                'created_at' => '2020-03-31 07:57:23',
                'updated_at' => '2020-03-31 07:57:23',
            ),
            18 => 
            array (
                'id' => 19,
                'content' => 'Sur budget programme nature en ville',
                'created_at' => '2020-03-31 07:57:32',
                'updated_at' => '2020-03-31 07:57:32',
            ),
            19 => 
            array (
                'id' => 20,
                'content' => 'Les coûts sont intégrés dans les fiches action ad\'hoc',
                'created_at' => '2020-03-31 07:57:44',
                'updated_at' => '2020-03-31 07:57:44',
            ),
            20 => 
            array (
                'id' => 21,
                'content' => 'Financement RPT',
                'created_at' => '2020-03-31 07:57:55',
                'updated_at' => '2020-03-31 07:57:55',
            ),
            21 => 
            array (
                'id' => 22,
                'content' => 'Fin du financement externe en 2021-2022, dès la rentrée 2022 un financement Etat prévu dans la fiche PFQ DGEO',
                'created_at' => '2020-03-31 07:58:02',
                'updated_at' => '2020-03-31 07:58:02',
            ),
            22 => 
            array (
                'id' => 23,
                'content' => '0.20 ETP',
                'created_at' => '2020-03-31 07:58:10',
                'updated_at' => '2020-03-31 07:58:10',
            ),
            23 => 
            array (
                'id' => 24,
                'content' => '0.05 ETP',
                'created_at' => '2020-03-31 07:58:16',
                'updated_at' => '2020-03-31 07:58:16',
            ),
            24 => 
            array (
                'id' => 25,
                'content' => 'Budget FC',
                'created_at' => '2020-03-31 07:58:33',
                'updated_at' => '2020-03-31 07:58:33',
            ),
            25 => 
            array (
                'id' => 26,
                'content' => 'Coord. Ok avec fiche 8.3.1 du CA08 et Etat des lieux offre sensib nat du CA09',
                'created_at' => '2020-03-31 07:58:48',
                'updated_at' => '2020-03-31 07:58:48',
            ),
            26 => 
            array (
                'id' => 27,
                'content' => 'A fusionner avec 6 du CA11 Analyser l\'architecture - transmettre à JMA quand ok avec Mirko',
                'created_at' => '2020-03-31 07:58:53',
                'updated_at' => '2020-03-31 07:58:53',
            ),
            27 => 
            array (
                'id' => 28,
                'content' => '"Coûts intégré dans la RPT Faune Genève et autres RPT Coord. Et priorisation des actions à prévoir au moment du démarrage de la mise en œuvre de la fiche"',
                'created_at' => '2020-03-31 07:59:00',
                'updated_at' => '2020-03-31 07:59:00',
            ),
            28 => 
            array (
                'id' => 29,
                'content' => 'équivalent de 0.2 ETP pour GE21 via la RPT donc sort des ETP Etat',
                'created_at' => '2020-03-31 07:59:06',
                'updated_at' => '2020-03-31 07:59:06',
            ),
            29 => 
            array (
                'id' => 30,
                'content' => '1 ETP',
                'created_at' => '2020-03-31 07:59:13',
                'updated_at' => '2020-03-31 07:59:13',
            ),
            30 => 
            array (
                'id' => 31,
                'content' => '1 ETP référent bio OCAN pour suivi mise en œuvre SBG2030',
                'created_at' => '2020-03-31 07:59:20',
                'updated_at' => '2020-03-31 07:59:20',
            ),
            31 => 
            array (
                'id' => 32,
                'content' => 'Manque financement',
                'created_at' => '2020-03-31 07:59:25',
                'updated_at' => '2020-03-31 07:59:25',
            ),
        ));
        
        
    }
}