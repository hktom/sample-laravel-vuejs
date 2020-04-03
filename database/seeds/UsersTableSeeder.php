<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'entreprise_id' => NULL,
                'name' => 'A. Blaser',
                'email' => NULL,
                'email_verified_at' => NULL,
                'password' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-04-01 02:19:09',
                'updated_at' => '2020-04-01 02:19:09',
            ),
            1 => 
            array (
                'id' => 2,
                'entreprise_id' => 2,
                'name' => 'A. Cordonier',
                'email' => NULL,
                'email_verified_at' => NULL,
                'password' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-04-01 02:19:57',
                'updated_at' => '2020-04-01 02:19:57',
            ),
            2 => 
            array (
                'id' => 3,
                'entreprise_id' => NULL,
                'name' => 'Natasha. à Porta',
                'email' => NULL,
                'email_verified_at' => NULL,
                'password' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-04-01 02:20:09',
                'updated_at' => '2020-04-01 02:20:09',
            ),
            3 => 
            array (
                'id' => 4,
                'entreprise_id' => NULL,
                'name' => 'A. Maraia',
                'email' => NULL,
                'email_verified_at' => NULL,
                'password' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-04-01 02:20:23',
                'updated_at' => '2020-04-01 02:20:23',
            ),
            4 => 
            array (
                'id' => 5,
                'entreprise_id' => NULL,
                'name' => 'Anne-Lise Cantiniaux',
                'email' => NULL,
                'email_verified_at' => NULL,
                'password' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-04-01 02:20:47',
                'updated_at' => '2020-04-03 11:42:58',
            ),
            5 => 
            array (
                'id' => 6,
                'entreprise_id' => NULL,
                'name' => 'Vassilis Venizelos',
                'email' => NULL,
                'email_verified_at' => NULL,
                'password' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-04-01 02:21:17',
                'updated_at' => '2020-04-03 11:43:24',
            ),
            6 => 
            array (
                'id' => 7,
                'entreprise_id' => NULL,
                'name' => 'B. Favre',
                'email' => NULL,
                'email_verified_at' => NULL,
                'password' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-04-01 02:21:44',
                'updated_at' => '2020-04-01 02:21:44',
            ),
            7 => 
            array (
                'id' => 8,
                'entreprise_id' => 1,
                'name' => 'B. Von Arx',
                'email' => NULL,
                'email_verified_at' => NULL,
                'password' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-04-01 02:22:08',
                'updated_at' => '2020-04-01 02:22:08',
            ),
            8 => 
            array (
                'id' => 9,
                'entreprise_id' => 47,
                'name' => 'A. Hervo',
                'email' => NULL,
                'email_verified_at' => NULL,
                'password' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-04-01 02:22:19',
                'updated_at' => '2020-04-01 02:22:19',
            ),
            9 => 
            array (
                'id' => 10,
                'entreprise_id' => 1,
                'name' => 'C. Rochet',
                'email' => NULL,
                'email_verified_at' => NULL,
                'password' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-04-01 02:23:01',
                'updated_at' => '2020-04-01 02:23:01',
            ),
            10 => 
            array (
                'id' => 11,
                'entreprise_id' => 15,
                'name' => 'C. Pochelon',
                'email' => NULL,
                'email_verified_at' => NULL,
                'password' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-04-01 02:23:44',
                'updated_at' => '2020-04-01 02:23:44',
            ),
            11 => 
            array (
                'id' => 12,
                'entreprise_id' => NULL,
                'name' => 'G. Dandliker',
                'email' => NULL,
                'email_verified_at' => NULL,
                'password' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-04-01 02:23:50',
                'updated_at' => '2020-04-01 02:23:50',
            ),
            12 => 
            array (
                'id' => 13,
                'entreprise_id' => NULL,
                'name' => 'C. Rochet JM.',
                'email' => NULL,
                'email_verified_at' => NULL,
                'password' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-04-01 02:24:15',
                'updated_at' => '2020-04-01 02:24:15',
            ),
            13 => 
            array (
                'id' => 14,
                'entreprise_id' => NULL,
                'name' => 'Mitterer SIC',
                'email' => NULL,
                'email_verified_at' => NULL,
                'password' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-04-01 02:24:19',
                'updated_at' => '2020-04-01 02:24:19',
            ),
            14 => 
            array (
                'id' => 15,
                'entreprise_id' => 32,
                'name' => 'C. Yvon',
                'email' => NULL,
                'email_verified_at' => NULL,
                'password' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-04-01 02:25:11',
                'updated_at' => '2020-04-01 02:25:11',
            ),
            15 => 
            array (
                'id' => 16,
                'entreprise_id' => 23,
                'name' => 'M. Blanc',
                'email' => NULL,
                'email_verified_at' => NULL,
                'password' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-04-01 02:25:25',
                'updated_at' => '2020-04-01 02:25:25',
            ),
            16 => 
            array (
                'id' => 17,
                'entreprise_id' => 34,
                'name' => 'S. Mader',
                'email' => NULL,
                'email_verified_at' => NULL,
                'password' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-04-01 02:26:04',
                'updated_at' => '2020-04-01 02:26:04',
            ),
            17 => 
            array (
                'id' => 18,
                'entreprise_id' => 32,
                'name' => 'Mathieu Petite',
                'email' => NULL,
                'email_verified_at' => NULL,
                'password' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-04-01 02:26:40',
                'updated_at' => '2020-04-01 02:26:40',
            ),
            18 => 
            array (
                'id' => 19,
                'entreprise_id' => NULL,
                'name' => 'Céline Rochet',
                'email' => NULL,
                'email_verified_at' => NULL,
                'password' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-04-01 02:27:25',
                'updated_at' => '2020-04-01 02:27:25',
            ),
            19 => 
            array (
                'id' => 20,
                'entreprise_id' => NULL,
                'name' => 'Gottlieb Dandliker',
                'email' => NULL,
                'email_verified_at' => NULL,
                'password' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-04-01 02:27:35',
                'updated_at' => '2020-04-01 02:27:35',
            ),
            20 => 
            array (
                'id' => 21,
                'entreprise_id' => NULL,
                'name' => 'Claudine Dayer Fournet',
                'email' => NULL,
                'email_verified_at' => NULL,
                'password' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-04-01 02:27:47',
                'updated_at' => '2020-04-01 02:27:47',
            ),
            21 => 
            array (
                'id' => 22,
                'entreprise_id' => 2,
                'name' => 'D. Ansuini',
                'email' => NULL,
                'email_verified_at' => NULL,
                'password' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-04-01 02:28:40',
                'updated_at' => '2020-04-01 02:28:40',
            ),
            22 => 
            array (
                'id' => 23,
                'entreprise_id' => 2,
                'name' => 'F. Bachmann',
                'email' => NULL,
                'email_verified_at' => NULL,
                'password' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-04-01 02:28:52',
                'updated_at' => '2020-04-01 02:28:52',
            ),
            23 => 
            array (
                'id' => 24,
                'entreprise_id' => 2,
                'name' => 'A. Dufour',
                'email' => NULL,
                'email_verified_at' => NULL,
                'password' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-04-01 02:29:08',
                'updated_at' => '2020-04-01 02:29:08',
            ),
            24 => 
            array (
                'id' => 25,
                'entreprise_id' => 2,
                'name' => 'D. Ceresetti',
                'email' => NULL,
                'email_verified_at' => NULL,
                'password' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-04-01 02:29:33',
                'updated_at' => '2020-04-01 02:29:33',
            ),
            25 => 
            array (
                'id' => 26,
                'entreprise_id' => NULL,
                'name' => 'D. Rappaz',
                'email' => NULL,
                'email_verified_at' => NULL,
                'password' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-04-01 02:30:18',
                'updated_at' => '2020-04-01 02:30:18',
            ),
            26 => 
            array (
                'id' => 27,
                'entreprise_id' => 41,
                'name' => 'David De Vito',
                'email' => NULL,
                'email_verified_at' => NULL,
                'password' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-04-01 02:30:52',
                'updated_at' => '2020-04-01 02:30:52',
            ),
            27 => 
            array (
                'id' => 28,
                'entreprise_id' => 41,
                'name' => 'Patricia Naegeli',
                'email' => NULL,
                'email_verified_at' => NULL,
                'password' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-04-01 02:32:03',
                'updated_at' => '2020-04-01 02:32:03',
            ),
            28 => 
            array (
                'id' => 29,
                'entreprise_id' => 30,
                'name' => 'Dr vétérinaire Tobias BLAHA',
                'email' => NULL,
                'email_verified_at' => NULL,
                'password' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-04-01 02:32:50',
                'updated_at' => '2020-04-01 02:32:50',
            ),
            29 => 
            array (
                'id' => 30,
                'entreprise_id' => 30,
                'name' => 'Dr Anne-Sophie DEVILLE',
                'email' => NULL,
                'email_verified_at' => NULL,
                'password' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-04-01 02:33:05',
                'updated_at' => '2020-04-01 02:33:05',
            ),
            30 => 
            array (
                'id' => 31,
                'entreprise_id' => 7,
                'name' => 'E. Lecomte',
                'email' => NULL,
                'email_verified_at' => NULL,
                'password' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-04-01 02:33:44',
                'updated_at' => '2020-04-01 02:33:44',
            ),
            31 => 
            array (
                'id' => 32,
                'entreprise_id' => 1,
                'name' => 'Y. Bourguignon',
                'email' => NULL,
                'email_verified_at' => NULL,
                'password' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-04-01 02:33:56',
                'updated_at' => '2020-04-01 02:33:56',
            ),
            32 => 
            array (
                'id' => 33,
                'entreprise_id' => 2,
                'name' => 'D. Jaquet',
                'email' => NULL,
                'email_verified_at' => NULL,
                'password' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-04-01 02:34:11',
                'updated_at' => '2020-04-01 02:34:11',
            ),
            33 => 
            array (
                'id' => 34,
                'entreprise_id' => NULL,
                'name' => 'E. Favre',
                'email' => NULL,
                'email_verified_at' => NULL,
                'password' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-04-01 02:34:23',
                'updated_at' => '2020-04-01 02:34:23',
            ),
            34 => 
            array (
                'id' => 35,
                'entreprise_id' => 45,
                'name' => 'Erwin Fischer',
                'email' => NULL,
                'email_verified_at' => NULL,
                'password' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-04-01 02:34:56',
                'updated_at' => '2020-04-01 02:34:56',
            ),
            35 => 
            array (
                'id' => 36,
                'entreprise_id' => 45,
                'name' => 'JP Cattin',
                'email' => NULL,
                'email_verified_at' => NULL,
                'password' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-04-01 02:35:11',
                'updated_at' => '2020-04-01 02:35:11',
            ),
            36 => 
            array (
                'id' => 37,
                'entreprise_id' => NULL,
                'name' => 'G. Mulhauser',
                'email' => NULL,
                'email_verified_at' => NULL,
                'password' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-04-01 02:36:41',
                'updated_at' => '2020-04-01 02:36:41',
            ),
            37 => 
            array (
                'id' => 38,
                'entreprise_id' => 2,
                'name' => 'J. Schlup',
                'email' => NULL,
                'email_verified_at' => NULL,
                'password' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-04-01 02:36:54',
                'updated_at' => '2020-04-01 02:36:54',
            ),
            38 => 
            array (
                'id' => 39,
                'entreprise_id' => NULL,
                'name' => 'JM. Sermet',
                'email' => NULL,
                'email_verified_at' => NULL,
                'password' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-04-01 02:37:01',
                'updated_at' => '2020-04-01 02:37:01',
            ),
            39 => 
            array (
                'id' => 40,
                'entreprise_id' => NULL,
                'name' => 'J. Thiébaud',
                'email' => NULL,
                'email_verified_at' => NULL,
                'password' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-04-01 02:37:08',
                'updated_at' => '2020-04-01 02:37:08',
            ),
            40 => 
            array (
                'id' => 41,
                'entreprise_id' => NULL,
                'name' => 'J. Gyger',
                'email' => NULL,
                'email_verified_at' => NULL,
                'password' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-04-01 02:37:20',
                'updated_at' => '2020-04-01 02:37:20',
            ),
            41 => 
            array (
                'id' => 42,
                'entreprise_id' => NULL,
                'name' => 'A. Rauss',
                'email' => NULL,
                'email_verified_at' => NULL,
                'password' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-04-01 02:37:33',
                'updated_at' => '2020-04-01 02:37:33',
            ),
            42 => 
            array (
                'id' => 43,
                'entreprise_id' => 38,
                'name' => 'Gilles Mulhauser',
                'email' => NULL,
                'email_verified_at' => NULL,
                'password' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-04-01 02:37:47',
                'updated_at' => '2020-04-01 02:37:47',
            ),
            43 => 
            array (
                'id' => 44,
                'entreprise_id' => 40,
                'name' => 'I. Vuillemin',
                'email' => NULL,
                'email_verified_at' => NULL,
                'password' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-04-01 02:38:07',
                'updated_at' => '2020-04-01 02:38:07',
            ),
            44 => 
            array (
                'id' => 45,
                'entreprise_id' => NULL,
                'name' => 'Isabelle Vuillemin',
                'email' => NULL,
                'email_verified_at' => NULL,
                'password' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-04-01 02:38:29',
                'updated_at' => '2020-04-01 02:38:29',
            ),
            45 => 
            array (
                'id' => 46,
                'entreprise_id' => 43,
                'name' => 'Julien Perrot',
                'email' => NULL,
                'email_verified_at' => NULL,
                'password' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-04-01 02:38:40',
                'updated_at' => '2020-04-01 02:38:40',
            ),
            46 => 
            array (
                'id' => 47,
                'entreprise_id' => 44,
                'name' => 'Jean Lebedeff',
                'email' => NULL,
                'email_verified_at' => NULL,
                'password' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-04-01 02:39:04',
                'updated_at' => '2020-04-01 02:39:04',
            ),
            47 => 
            array (
                'id' => 48,
                'entreprise_id' => 44,
                'name' => 'Marc Miéville',
                'email' => NULL,
                'email_verified_at' => NULL,
                'password' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-04-01 02:39:15',
                'updated_at' => '2020-04-01 02:39:15',
            ),
            48 => 
            array (
                'id' => 49,
                'entreprise_id' => 37,
                'name' => 'Isaline Probst',
                'email' => NULL,
                'email_verified_at' => NULL,
                'password' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-04-01 02:39:30',
                'updated_at' => '2020-04-01 02:39:30',
            ),
            49 => 
            array (
                'id' => 50,
                'entreprise_id' => 46,
                'name' => 'HEPIA',
                'email' => NULL,
                'email_verified_at' => NULL,
                'password' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-04-01 02:39:41',
                'updated_at' => '2020-04-01 02:39:41',
            ),
            50 => 
            array (
                'id' => 51,
                'entreprise_id' => NULL,
                'name' => 'M. Yves Hausser',
                'email' => NULL,
                'email_verified_at' => NULL,
                'password' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-04-01 02:39:54',
                'updated_at' => '2020-04-01 02:39:54',
            ),
            51 => 
            array (
                'id' => 52,
                'entreprise_id' => NULL,
                'name' => 'J. Massy',
                'email' => NULL,
                'email_verified_at' => NULL,
                'password' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-04-01 02:40:04',
                'updated_at' => '2020-04-01 02:40:04',
            ),
            52 => 
            array (
                'id' => 53,
                'entreprise_id' => NULL,
                'name' => 'N. Wyler',
                'email' => NULL,
                'email_verified_at' => NULL,
                'password' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-04-01 02:40:15',
                'updated_at' => '2020-04-01 02:40:15',
            ),
            53 => 
            array (
                'id' => 54,
                'entreprise_id' => NULL,
                'name' => 'V. Jaggi',
                'email' => NULL,
                'email_verified_at' => NULL,
                'password' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-04-01 02:41:01',
                'updated_at' => '2020-04-01 02:41:01',
            ),
            54 => 
            array (
                'id' => 55,
                'entreprise_id' => NULL,
                'name' => 'V. Demule',
                'email' => NULL,
                'email_verified_at' => NULL,
                'password' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-04-01 02:41:08',
                'updated_at' => '2020-04-01 02:41:08',
            ),
            55 => 
            array (
                'id' => 56,
                'entreprise_id' => NULL,
                'name' => 'P. Fouvy',
                'email' => NULL,
                'email_verified_at' => NULL,
                'password' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-04-01 02:41:26',
                'updated_at' => '2020-04-01 02:41:26',
            ),
            56 => 
            array (
                'id' => 57,
                'entreprise_id' => 2,
                'name' => 'PJ. Copin',
                'email' => NULL,
                'email_verified_at' => NULL,
                'password' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-04-01 02:42:43',
                'updated_at' => '2020-04-01 02:42:43',
            ),
            57 => 
            array (
                'id' => 58,
                'entreprise_id' => 2,
                'name' => 'M. Coster',
                'email' => NULL,
                'email_verified_at' => NULL,
                'password' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-04-01 02:42:59',
                'updated_at' => '2020-04-01 02:42:59',
            ),
            58 => 
            array (
                'id' => 59,
                'entreprise_id' => NULL,
                'name' => 'M. Bessat',
                'email' => NULL,
                'email_verified_at' => NULL,
                'password' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-04-01 02:43:07',
                'updated_at' => '2020-04-01 02:43:07',
            ),
            59 => 
            array (
                'id' => 60,
                'entreprise_id' => 37,
                'name' => 'Olivia Spahni',
                'email' => NULL,
                'email_verified_at' => NULL,
                'password' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-04-01 02:43:53',
                'updated_at' => '2020-04-01 02:43:53',
            ),
            60 => 
            array (
                'id' => 61,
                'entreprise_id' => 39,
                'name' => 'Mathieu Bondallaz',
                'email' => NULL,
                'email_verified_at' => NULL,
                'password' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-04-01 02:44:07',
                'updated_at' => '2020-04-01 02:44:07',
            ),
            61 => 
            array (
                'id' => 62,
                'entreprise_id' => 34,
                'name' => 'Suzanne Mader',
                'email' => NULL,
                'email_verified_at' => NULL,
                'password' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-04-01 02:44:21',
                'updated_at' => '2020-04-01 02:44:21',
            ),
            62 => 
            array (
                'id' => 63,
                'entreprise_id' => NULL,
                'name' => 'Olivier Desrichard',
                'email' => NULL,
                'email_verified_at' => NULL,
                'password' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-04-01 02:44:31',
                'updated_at' => '2020-04-01 02:44:31',
            ),
            63 => 
            array (
                'id' => 64,
                'entreprise_id' => NULL,
                'name' => 'Lisa Moussaoui',
                'email' => NULL,
                'email_verified_at' => NULL,
                'password' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-04-01 02:44:38',
                'updated_at' => '2020-04-01 02:44:38',
            ),
            64 => 
            array (
                'id' => 65,
                'entreprise_id' => 1,
                'name' => 'OCAN',
                'email' => NULL,
                'email_verified_at' => NULL,
                'password' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-04-01 05:07:16',
                'updated_at' => '2020-04-01 05:07:16',
            ),
            65 => 
            array (
                'id' => 66,
                'entreprise_id' => NULL,
                'name' => 'GE-21',
                'email' => NULL,
                'email_verified_at' => NULL,
                'password' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-04-01 05:07:57',
                'updated_at' => '2020-04-01 05:07:57',
            ),
            66 => 
            array (
                'id' => 67,
                'entreprise_id' => 49,
            'name' => 'Service de l’information et de la communication du DT (SIC)',
                'email' => NULL,
                'email_verified_at' => NULL,
                'password' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-04-01 05:08:10',
                'updated_at' => '2020-04-01 05:08:10',
            ),
            67 => 
            array (
                'id' => 68,
                'entreprise_id' => 55,
                'name' => 'Estelle Lecomte',
                'email' => NULL,
                'email_verified_at' => NULL,
                'password' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-04-03 11:15:18',
                'updated_at' => '2020-04-03 11:15:18',
            ),
            68 => 
            array (
                'id' => 69,
                'entreprise_id' => 49,
                'name' => 'Jean-Marc Mitterer',
                'email' => NULL,
                'email_verified_at' => NULL,
                'password' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-04-03 13:12:12',
                'updated_at' => '2020-04-03 13:12:12',
            ),
        ));
        
        
    }
}