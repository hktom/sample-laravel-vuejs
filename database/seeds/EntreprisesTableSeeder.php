<?php

use Illuminate\Database\Seeder;

class EntreprisesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('entreprises')->delete();
        
        \DB::table('entreprises')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'OCAN',
                'email' => NULL,
                'image' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-03-30 17:22:16',
                'updated_at' => '2020-03-30 17:22:16',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'OCEAU',
                'email' => NULL,
                'image' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-03-30 17:22:38',
                'updated_at' => '2020-03-30 17:22:38',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'OCEV',
                'email' => NULL,
                'image' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-03-30 17:23:00',
                'updated_at' => '2020-03-30 17:23:00',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'SERMA',
                'email' => NULL,
                'image' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-03-30 17:23:06',
                'updated_at' => '2020-03-30 17:23:06',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Sbio',
                'email' => NULL,
                'image' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-03-30 17:23:24',
                'updated_at' => '2020-03-30 17:23:24',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'SPF',
                'email' => NULL,
                'image' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-03-30 17:23:35',
                'updated_at' => '2020-03-30 17:23:35',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'SIG-OGETTA-OU-DIT',
                'email' => NULL,
                'image' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-03-30 17:24:50',
                'updated_at' => '2020-03-30 17:24:50',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Sponsor privés',
                'email' => NULL,
                'image' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-03-30 17:25:02',
                'updated_at' => '2020-03-30 17:25:02',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'CJB',
                'email' => NULL,
                'image' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-03-30 17:25:15',
                'updated_at' => '2020-03-30 17:25:15',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'VDG',
                'email' => NULL,
                'image' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-03-30 17:25:23',
                'updated_at' => '2020-03-30 17:25:23',
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'SIPV',
                'email' => NULL,
                'image' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-03-30 17:25:31',
                'updated_at' => '2020-03-30 17:25:31',
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'OCSIN',
                'email' => NULL,
                'image' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-03-30 17:25:39',
                'updated_at' => '2020-03-30 17:25:39',
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'Fond vitale env.',
                'email' => NULL,
                'image' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-03-30 17:25:57',
                'updated_at' => '2020-03-30 17:25:57',
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'Association d\'agriculteurs',
                'email' => NULL,
                'image' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-03-30 17:26:03',
                'updated_at' => '2020-03-30 17:26:03',
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'GOBG',
                'email' => NULL,
                'image' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-03-30 17:26:20',
                'updated_at' => '2020-03-30 17:26:20',
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'KRACH-GE',
                'email' => NULL,
                'image' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-03-30 17:26:41',
                'updated_at' => '2020-03-30 17:26:41',
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'CCO-GE',
                'email' => NULL,
                'image' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-03-30 17:26:49',
                'updated_at' => '2020-03-30 17:26:49',
            ),
            17 => 
            array (
                'id' => 18,
                'name' => 'COR',
                'email' => NULL,
                'image' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-03-30 17:26:58',
                'updated_at' => '2020-03-30 17:26:58',
            ),
            18 => 
            array (
                'id' => 19,
                'name' => 'Faune GE',
                'email' => NULL,
                'image' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-03-30 17:27:08',
                'updated_at' => '2020-03-30 17:27:08',
            ),
            19 => 
            array (
                'id' => 20,
                'name' => 'SMG',
                'email' => NULL,
                'image' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-03-30 17:27:26',
                'updated_at' => '2020-03-30 17:27:26',
            ),
            20 => 
            array (
                'id' => 21,
                'name' => 'SBG',
                'email' => NULL,
                'image' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-03-30 17:27:34',
                'updated_at' => '2020-03-30 17:27:34',
            ),
            21 => 
            array (
                'id' => 22,
                'name' => 'Associations concernées',
                'email' => NULL,
                'image' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-03-30 17:28:11',
                'updated_at' => '2020-03-30 17:28:11',
            ),
            22 => 
            array (
                'id' => 23,
                'name' => 'MHNG',
                'email' => NULL,
                'image' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-03-30 17:28:24',
                'updated_at' => '2020-03-30 17:28:24',
            ),
            23 => 
            array (
                'id' => 24,
                'name' => 'pôle arthro',
                'email' => NULL,
                'image' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-03-30 17:28:43',
                'updated_at' => '2020-03-30 17:28:43',
            ),
            24 => 
            array (
                'id' => 25,
                'name' => 'pôle oiseaux',
                'email' => NULL,
                'image' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-03-30 17:28:52',
                'updated_at' => '2020-03-30 17:28:52',
            ),
            25 => 
            array (
                'id' => 26,
                'name' => 'pôle petits mammifères',
                'email' => NULL,
                'image' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-03-30 17:28:58',
                'updated_at' => '2020-03-30 17:28:58',
            ),
            26 => 
            array (
                'id' => 27,
                'name' => 'Communes',
                'email' => NULL,
                'image' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-03-30 17:29:19',
                'updated_at' => '2020-03-30 17:29:19',
            ),
            27 => 
            array (
                'id' => 28,
                'name' => 'KARCH-GE',
                'email' => NULL,
                'image' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-03-30 17:29:24',
                'updated_at' => '2020-03-30 17:29:24',
            ),
            28 => 
            array (
                'id' => 29,
                'name' => 'Pro Natura',
                'email' => NULL,
                'image' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-03-30 17:29:33',
                'updated_at' => '2020-03-30 17:29:33',
            ),
            29 => 
            array (
                'id' => 30,
                'name' => 'Bioparc',
                'email' => NULL,
                'image' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-03-30 17:29:39',
                'updated_at' => '2020-03-30 17:29:39',
            ),
            30 => 
            array (
                'id' => 31,
                'name' => 'Bioscope',
                'email' => NULL,
                'image' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-03-30 17:29:51',
                'updated_at' => '2020-03-30 17:29:51',
            ),
            31 => 
            array (
                'id' => 32,
                'name' => 'UNIGE',
                'email' => NULL,
                'image' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-03-30 17:29:59',
                'updated_at' => '2020-03-30 17:29:59',
            ),
            32 => 
            array (
                'id' => 33,
                'name' => 'MHN',
                'email' => NULL,
                'image' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-03-30 17:30:04',
                'updated_at' => '2020-03-30 17:30:04',
            ),
            33 => 
            array (
                'id' => 34,
                'name' => 'ASL',
                'email' => NULL,
                'image' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-03-30 17:30:17',
                'updated_at' => '2020-03-30 17:30:17',
            ),
            34 => 
            array (
                'id' => 35,
                'name' => 'Faune Genève',
                'email' => NULL,
                'image' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-03-30 17:30:29',
                'updated_at' => '2020-03-30 17:30:29',
            ),
            35 => 
            array (
                'id' => 36,
                'name' => 'Pro Natura La Libellule',
                'email' => NULL,
                'image' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-03-30 17:30:45',
                'updated_at' => '2020-03-30 17:30:45',
            ),
            36 => 
            array (
                'id' => 37,
                'name' => 'Pro Natura Genève',
                'email' => NULL,
                'image' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-03-31 07:15:51',
                'updated_at' => '2020-03-31 07:15:51',
            ),
            37 => 
            array (
                'id' => 38,
                'name' => 'Office cantonal de l\'eau',
                'email' => NULL,
                'image' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-03-31 07:19:20',
                'updated_at' => '2020-03-31 07:19:20',
            ),
            38 => 
            array (
                'id' => 39,
                'name' => 'Association La Libellule',
                'email' => NULL,
                'image' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-03-31 07:22:35',
                'updated_at' => '2020-03-31 07:22:35',
            ),
            39 => 
            array (
                'id' => 40,
                'name' => 'DGEO',
                'email' => NULL,
                'image' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-03-31 07:23:32',
                'updated_at' => '2020-03-31 07:23:32',
            ),
            40 => 
            array (
                'id' => 41,
                'name' => 'DGESII/FC',
                'email' => NULL,
                'image' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-03-31 07:24:35',
                'updated_at' => '2020-03-31 07:25:51',
            ),
            41 => 
            array (
                'id' => 42,
                'name' => 'DIP/DD',
                'email' => NULL,
                'image' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-03-31 07:24:48',
                'updated_at' => '2020-03-31 07:26:33',
            ),
            42 => 
            array (
                'id' => 43,
                'name' => 'La Salamandre',
                'email' => NULL,
                'image' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-03-31 07:27:57',
                'updated_at' => '2020-03-31 07:27:57',
            ),
            43 => 
            array (
                'id' => 44,
                'name' => 'CFPNE',
                'email' => NULL,
                'image' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-03-31 07:29:46',
                'updated_at' => '2020-03-31 07:29:46',
            ),
            44 => 
            array (
                'id' => 45,
                'name' => 'OFPC',
                'email' => NULL,
                'image' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-03-31 07:30:48',
                'updated_at' => '2020-03-31 07:30:48',
            ),
            45 => 
            array (
                'id' => 46,
                'name' => 'Institut Terre-Nature-Environnement',
                'email' => NULL,
                'image' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-03-31 07:35:37',
                'updated_at' => '2020-03-31 07:35:37',
            ),
            46 => 
            array (
                'id' => 47,
                'name' => 'CAPAH',
                'email' => NULL,
                'image' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-03-31 07:37:22',
                'updated_at' => '2020-03-31 07:37:22',
            ),
            47 => 
            array (
                'id' => 48,
                'name' => 'GE-21',
                'email' => NULL,
                'image' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-04-01 04:59:13',
                'updated_at' => '2020-04-01 04:59:13',
            ),
            48 => 
            array (
                'id' => 49,
            'name' => 'Service de l’information et de la communication du DT (SIC)',
                'email' => NULL,
                'image' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-04-01 05:04:30',
                'updated_at' => '2020-04-01 05:04:30',
            ),
            49 => 
            array (
                'id' => 50,
                'name' => 'CCO-Genève',
                'email' => NULL,
                'image' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-04-01 05:05:27',
                'updated_at' => '2020-04-01 05:05:27',
            ),
            50 => 
            array (
                'id' => 51,
                'name' => 'Service de l’écologie de l’eau',
                'email' => NULL,
                'image' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-04-03 11:08:36',
                'updated_at' => '2020-04-03 11:08:36',
            ),
            51 => 
            array (
                'id' => 52,
                'name' => 'OCEau-Service du Lac, de la renaturation et de la pêche',
                'email' => NULL,
                'image' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-04-03 11:08:54',
                'updated_at' => '2020-04-03 11:08:54',
            ),
            52 => 
            array (
                'id' => 53,
                'name' => 'OCEau-Service de l’écologie de l’eau',
                'email' => NULL,
                'image' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-04-03 11:09:03',
                'updated_at' => '2020-04-03 11:09:03',
            ),
            53 => 
            array (
                'id' => 54,
                'name' => 'Commission internationale pour la protection des eaux du Léman',
                'email' => NULL,
                'image' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-04-03 11:13:45',
                'updated_at' => '2020-04-03 11:13:45',
            ),
            54 => 
            array (
                'id' => 55,
                'name' => 'Services Industriels de Genève',
                'email' => NULL,
                'image' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-04-03 11:14:48',
                'updated_at' => '2020-04-03 11:14:48',
            ),
            55 => 
            array (
                'id' => 56,
                'name' => 'Réseau d’experts au sein et à l’extérieur de l’Etat',
                'email' => NULL,
                'image' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-04-03 11:22:36',
                'updated_at' => '2020-04-03 11:22:36',
            ),
            56 => 
            array (
                'id' => 57,
                'name' => 'Animateurs RAE',
                'email' => NULL,
                'image' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-04-03 11:22:57',
                'updated_at' => '2020-04-03 11:22:57',
            ),
            57 => 
            array (
                'id' => 58,
                'name' => 'Associations d’agriculteurs',
                'email' => NULL,
                'image' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-04-03 11:23:03',
                'updated_at' => '2020-04-03 11:23:03',
            ),
            58 => 
            array (
                'id' => 59,
                'name' => 'HEPIA',
                'email' => NULL,
                'image' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-04-03 11:28:24',
                'updated_at' => '2020-04-03 11:28:24',
            ),
            59 => 
            array (
                'id' => 60,
                'name' => 'FiBL',
                'email' => NULL,
                'image' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-04-03 11:28:33',
                'updated_at' => '2020-04-03 11:28:33',
            ),
            60 => 
            array (
                'id' => 61,
                'name' => 'ProSpecieRara Slow Food',
                'email' => NULL,
                'image' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-04-03 11:32:50',
                'updated_at' => '2020-04-03 11:32:50',
            ),
            61 => 
            array (
                'id' => 62,
                'name' => 'DPC',
                'email' => NULL,
                'image' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-04-03 11:44:37',
                'updated_at' => '2020-04-03 11:44:37',
            ),
            62 => 
            array (
                'id' => 63,
                'name' => 'Police du feu',
                'email' => NULL,
                'image' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-04-03 11:51:05',
                'updated_at' => '2020-04-03 11:51:05',
            ),
            63 => 
            array (
                'id' => 64,
                'name' => 'Conservatoire et Jardin botaniques de Genève',
                'email' => NULL,
                'image' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-04-03 12:07:07',
                'updated_at' => '2020-04-03 12:07:07',
            ),
            64 => 
            array (
                'id' => 65,
                'name' => 'Société mycologique de Genève',
                'email' => NULL,
                'image' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-04-03 12:07:15',
                'updated_at' => '2020-04-03 12:07:15',
            ),
            65 => 
            array (
                'id' => 66,
                'name' => 'Société botanique de Genève',
                'email' => NULL,
                'image' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-04-03 12:07:25',
                'updated_at' => '2020-04-03 12:07:25',
            ),
            66 => 
            array (
                'id' => 67,
                'name' => 'Experts bryophytes et lichens',
                'email' => NULL,
                'image' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-04-03 12:07:34',
                'updated_at' => '2020-04-03 12:07:34',
            ),
            67 => 
            array (
                'id' => 68,
                'name' => 'Haute école du paysage, d’ingénierie et d’architecture de Genève',
                'email' => NULL,
                'image' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-04-03 12:07:47',
                'updated_at' => '2020-04-03 12:07:47',
            ),
        ));
        
        
    }
}