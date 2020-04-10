<?php

use Illuminate\Database\Seeder;

class CalendarsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('calendars')->delete();
        
        \DB::table('calendars')->insert(array (
            0 => 
            array (
                'id' => 1,
                'action_id' => 2,
            'year_2020' => 'L’infrastructure écologique est cartographiée et disponible dans le SITG (résolution : 25 mètres)',
                'year_2021' => 'Mise à jour selon l’évolution des projets et du territoire',
                'year_2022' => 'Mise à jour selon l’évolution des projets et du territoire',
                'year_2023' => 'Mise à jour selon l’évolution des projets et du territoire',
                'created_at' => '2020-04-10 16:05:49',
                'updated_at' => '2020-04-10 16:05:49',
            ),
            1 => 
            array (
                'id' => 2,
                'action_id' => 3,
                'year_2020' => 'Déploiement de la campagne dans les médias et sur les réseaux sociaux',
                'year_2021' => 'À établir lors de la mise en œuvre de l’action',
                'year_2022' => 'À établir lors de la mise en œuvre de l’action',
                'year_2023' => 'À établir lors de la mise en œuvre de l’action',
                'created_at' => '2020-04-10 16:08:45',
                'updated_at' => '2020-04-10 16:08:45',
            ),
            2 => 
            array (
                'id' => 3,
                'action_id' => 4,
            'year_2020' => 'L’infrastructure écologique est disponible dans le SITG au niveau parcellaire, pour l’ensemble du canton (résolution : 25 mètres). Assurer l’espace nécessaire à long terme et de manière contraignante sur le plan de l’aménagement du territoire Prendre des mesures visant à valoriser, maintenir et accroître la perméabilité',
            'year_2021' => 'L’infrastructure écologique est disponible dans le SITG au niveau parcellaire, pour l’ensemble du canton (résolution : 25 mètres). Assurer l’espace nécessaire à long terme et de manière contraignante sur le plan de l’aménagement du territoire Prendre des mesures visant à valoriser, maintenir et accroître la perméabilité',
            'year_2022' => 'L’infrastructure écologique est disponible dans le SITG au niveau parcellaire, pour l’ensemble du canton (résolution : 25 mètres). Assurer l’espace nécessaire à long terme et de manière contraignante sur le plan de l’aménagement du territoire Prendre des mesures visant à valoriser, maintenir et accroître la perméabilité',
                'year_2023' => 'Garantir les financements au-delà de 2024',
                'created_at' => '2020-04-10 16:10:58',
                'updated_at' => '2020-04-10 16:10:58',
            ),
            3 => 
            array (
                'id' => 4,
                'action_id' => 5,
                'year_2020' => 'Finalisation',
                'year_2021' => 'Actualisation',
                'year_2022' => 'Actualisation',
                'year_2023' => 'Actualisation',
                'created_at' => '2020-04-10 16:58:47',
                'updated_at' => '2020-04-10 16:58:47',
            ),
            4 => 
            array (
                'id' => 5,
                'action_id' => 6,
                'year_2020' => 'À établir lors de la mise en œuvre de l’action',
                'year_2021' => 'À établir lors de la mise en œuvre de l’action',
                'year_2022' => 'À établir lors de la mise en œuvre de l’action',
                'year_2023' => 'À établir lors de la mise en œuvre de l’action',
                'created_at' => '2020-04-10 17:02:20',
                'updated_at' => '2020-04-10 17:02:20',
            ),
            5 => 
            array (
                'id' => 6,
                'action_id' => 7,
                'year_2020' => 'À établir lors de la mise en œuvre de l’action',
                'year_2021' => 'À établir lors de la mise en œuvre de l’action',
                'year_2022' => 'À établir lors de la mise en œuvre de l’action',
                'year_2023' => 'À établir lors de la mise en œuvre de l’action',
                'created_at' => '2020-04-10 17:06:56',
                'updated_at' => '2020-04-10 17:06:56',
            ),
            6 => 
            array (
                'id' => 7,
                'action_id' => 8,
                'year_2020' => 'Élaboration de la méthodologie et recensement des sites d’intérêt.',
                'year_2021' => 'Définition du statut des sites identifiés et acquisition selon les opportunités.',
                'year_2022' => 'Ajout de nouveaux sites et acquisition selon les opportunités.',
                'year_2023' => 'Ajout de nouveaux sites et acquisition selon les opportunités.',
                'created_at' => '2020-04-10 17:09:21',
                'updated_at' => '2020-04-10 17:09:21',
            ),
            7 => 
            array (
                'id' => 8,
                'action_id' => 9,
            'year_2020' => 'Elaboration (nouvelles réserves naturelles), renouvellement (réserves naturelles existantes), mise en œuvre et amélioration continue des plans de gestion.',
            'year_2021' => 'Elaboration (nouvelles réserves naturelles), renouvellement (réserves naturelles existantes), mise en œuvre et amélioration continue des plans de gestion.',
            'year_2022' => 'Elaboration (nouvelles réserves naturelles), renouvellement (réserves naturelles existantes), mise en œuvre et amélioration continue des plans de gestion.',
            'year_2023' => 'Elaboration (nouvelles réserves naturelles), renouvellement (réserves naturelles existantes), mise en œuvre et amélioration continue des plans de gestion.',
                'created_at' => '2020-04-10 17:12:17',
                'updated_at' => '2020-04-10 17:12:17',
            ),
            8 => 
            array (
                'id' => 9,
                'action_id' => 10,
                'year_2020' => 'Sensibilisation, formation, implication et accompagnement',
                'year_2021' => 'Sensibilisation, formation, implication et accompagnement',
                'year_2022' => 'Sensibilisation, formation, implication et accompagnement',
                'year_2023' => 'Sensibilisation, formation, implication et accompagnement',
                'created_at' => '2020-04-10 17:15:30',
                'updated_at' => '2020-04-10 17:15:30',
            ),
            9 => 
            array (
                'id' => 10,
                'action_id' => 11,
                'year_2020' => 'À établir lors de la mise en œuvre de l’action',
                'year_2021' => 'À établir lors de la mise en œuvre de l’action',
                'year_2022' => 'À établir lors de la mise en œuvre de l’action',
                'year_2023' => 'À établir lors de la mise en œuvre de l’action',
                'created_at' => '2020-04-10 17:17:42',
                'updated_at' => '2020-04-10 17:17:42',
            ),
            10 => 
            array (
                'id' => 11,
                'action_id' => 12,
                'year_2020' => 'Â établir lors de la mise en œuvre de l’action',
                'year_2021' => 'Â établir lors de la mise en œuvre de l’action',
                'year_2022' => 'Â établir lors de la mise en œuvre de l’action',
                'year_2023' => 'Â établir lors de la mise en œuvre de l’action',
                'created_at' => '2020-04-10 17:23:13',
                'updated_at' => '2020-04-10 17:23:13',
            ),
            11 => 
            array (
                'id' => 12,
                'action_id' => 19,
                'year_2020' => 'Intégration de l’objectif de préservation de la quantité de l’eau dans le plan d’actions CIPEL',
                'year_2021' => 'Intégration de l’objectif de préservation de la quantité de l’eau dans le plan d’actions CIPEL',
                'year_2022' => 'À établir lors de la mise en œuvre de l’action',
                'year_2023' => 'À établir lors de la mise en œuvre de l’action',
                'created_at' => '2020-04-10 17:45:57',
                'updated_at' => '2020-04-10 17:45:57',
            ),
            12 => 
            array (
                'id' => 13,
                'action_id' => 20,
                'year_2020' => 'À établir lors de la mise en œuvre de l’action',
                'year_2021' => 'À établir lors de la mise en œuvre de l’action',
                'year_2022' => 'À établir lors de la mise en œuvre de l’action',
                'year_2023' => 'À établir lors de la mise en œuvre de l’action',
                'created_at' => '2020-04-10 17:48:40',
                'updated_at' => '2020-04-10 17:48:40',
            ),
            13 => 
            array (
                'id' => 14,
                'action_id' => 23,
                'year_2020' => 'Adoption d’un plan de gestion de forêt le long d’un cours d’eau cantonal',
                'year_2021' => 'Adoption d’un plan de gestion de forêt le long d’un cours d’eau cantonal',
                'year_2022' => 'À établir lors de la mise en œuvre de l’action',
                'year_2023' => 'Adoption d’un plan de gestion de forêt le long d’un cours d’eau cantonal',
                'created_at' => '2020-04-10 18:00:05',
                'updated_at' => '2020-04-10 18:00:05',
            ),
            14 => 
            array (
                'id' => 15,
                'action_id' => 23,
                'year_2020' => 'À établir lors de la mise en œuvre de l’action',
                'year_2021' => 'Début de l’élaboration du plan de gestion de forêt le long d’un cours d’eau communal',
                'year_2022' => 'Adoption du plan de gestion de forêt le long d’un cours d’eau communal',
                'year_2023' => 'À établir lors de la mise en œuvre de l’action',
                'created_at' => '2020-04-10 18:00:05',
                'updated_at' => '2020-04-10 18:00:05',
            ),
            15 => 
            array (
                'id' => 16,
                'action_id' => 24,
                'year_2020' => 'Elaboration de la planification des infrastructures liées à la navigation',
                'year_2021' => 'Elaboration de la planification des infrastructures liées à la navigation',
                'year_2022' => 'Elaboration de la planification des infrastructures liées à la navigation',
                'year_2023' => 'À établir lors de la mise en œuvre de l’action',
                'created_at' => '2020-04-10 18:04:06',
                'updated_at' => '2020-04-10 18:04:06',
            ),
            16 => 
            array (
                'id' => 17,
                'action_id' => 24,
                'year_2020' => 'À établir lors de la mise en œuvre de l’action',
                'year_2021' => 'À établir lors de la mise en œuvre de l’action',
                'year_2022' => 'Elaboration de la directive concernant les matériaux en contact avec le Lac et les cours d’eau',
                'year_2023' => 'À établir lors de la mise en œuvre de l’action',
                'created_at' => '2020-04-10 18:04:06',
                'updated_at' => '2020-04-10 18:04:06',
            ),
            17 => 
            array (
                'id' => 18,
                'action_id' => 25,
                'year_2020' => 'À établir lors de la mise en œuvre de l’action',
                'year_2021' => 'À établir lors de la mise en œuvre de l’action',
                'year_2022' => 'À établir lors de la mise en œuvre de l’action',
                'year_2023' => 'À établir lors de la mise en œuvre de l’action',
                'created_at' => '2020-04-10 18:10:48',
                'updated_at' => '2020-04-10 18:10:48',
            ),
            18 => 
            array (
                'id' => 19,
                'action_id' => 27,
                'year_2020' => 'À établir lors de la mise en œuvre de l’action',
                'year_2021' => 'À établir lors de la mise en œuvre de l’action',
                'year_2022' => 'À établir lors de la mise en œuvre de l’action',
                'year_2023' => 'À établir lors de la mise en œuvre de l’action',
                'created_at' => '2020-04-10 18:18:19',
                'updated_at' => '2020-04-10 18:18:19',
            ),
            19 => 
            array (
                'id' => 20,
                'action_id' => 28,
                'year_2020' => 'À établir lors de la mise en œuvre de l’action',
                'year_2021' => 'À établir lors de la mise en œuvre de l’action',
                'year_2022' => 'À établir lors de la mise en œuvre de l’action',
                'year_2023' => 'À établir lors de la mise en œuvre de l’action',
                'created_at' => '2020-04-10 18:31:22',
                'updated_at' => '2020-04-10 18:31:22',
            ),
            20 => 
            array (
                'id' => 21,
                'action_id' => 29,
                'year_2020' => 'À établir lors de la mise en œuvre de l’action',
                'year_2021' => 'À établir lors de la mise en œuvre de l’action',
                'year_2022' => 'À établir lors de la mise en œuvre de l’action',
                'year_2023' => 'À établir lors de la mise en œuvre de l’action',
                'created_at' => '2020-04-10 18:33:34',
                'updated_at' => '2020-04-10 18:33:34',
            ),
            21 => 
            array (
                'id' => 22,
                'action_id' => 30,
                'year_2020' => 'À établir lors de la mise en œuvre de l’action',
                'year_2021' => 'À établir lors de la mise en œuvre de l’action',
                'year_2022' => 'À établir lors de la mise en œuvre de l’action',
                'year_2023' => 'À établir lors de la mise en œuvre de l’action',
                'created_at' => '2020-04-10 18:36:00',
                'updated_at' => '2020-04-10 18:36:00',
            ),
            22 => 
            array (
                'id' => 23,
                'action_id' => 31,
                'year_2020' => 'Réalisation de la roselière centrale',
                'year_2021' => 'Réalisation de la roselière Ouest',
                'year_2022' => 'À établir lors de la mise en œuvre de l’action',
                'year_2023' => 'Réalisation de la roselière Est',
                'created_at' => '2020-04-10 18:38:57',
                'updated_at' => '2020-04-10 18:38:57',
            ),
            23 => 
            array (
                'id' => 24,
                'action_id' => 32,
                'year_2020' => 'Communication à un large public et utilisation des résultats pour améliorer la mise en œuvre de la politique agricole et procéder cas échéant, aux adaptations réglementaires qui s’imposent',
                'year_2021' => 'Utilisation des résultats pour améliorer la mise en œuvre de la politique agricole en matière de promotion de la biodiversité',
                'year_2022' => 'Utilisation des résultats pour améliorer la mise en œuvre de la politique agricole en matière de promotion de la biodiversité',
                'year_2023' => 'Utilisation des résultats pour améliorer la mise en œuvre de la politique agricole, notamment dans le cadre de RAE',
                'created_at' => '2020-04-10 18:44:58',
                'updated_at' => '2020-04-10 18:44:58',
            ),
            24 => 
            array (
                'id' => 25,
                'action_id' => 33,
                'year_2020' => 'Finalisation de l’étude bibliographique, établissement du protocole de recherche basé sur des études similaires déjà réalisées Constitution des équipes de recherche et d’un groupe de projet Début des campagnes sur le terrain',
                'year_2021' => 'Campagnes de terrain et ajustement du protocole avec les exploitants Discussion des résultats et rédaction des premiers rapports provisoires',
                'year_2022' => 'Campagnes de terrain et ajustement du protocole avec les exploitants Discussions sur la mise en œuvre des recommandations, finalisation des rapports',
                'year_2023' => 'Proposition des premières mesures concrètes pour les agriculteurs.',
                'created_at' => '2020-04-10 18:48:01',
                'updated_at' => '2020-04-10 18:48:01',
            ),
            25 => 
            array (
                'id' => 26,
                'action_id' => 34,
                'year_2020' => 'À établir lors de la mise en œuvre de l’action',
                'year_2021' => 'À établir lors de la mise en œuvre de l’action',
                'year_2022' => 'Fédérer un groupe d’expert et organiser des séances de coordination',
                'year_2023' => 'Choix et validation de la méthode',
                'created_at' => '2020-04-10 18:51:12',
                'updated_at' => '2020-04-10 18:51:12',
            ),
            26 => 
            array (
                'id' => 27,
                'action_id' => 35,
                'year_2020' => 'Amélioration continue des mélanges grainiers Continuer la mise en œuvre des essais',
                'year_2021' => 'Amélioration continue des mélanges grainiers Continuer la mise en œuvre des essais',
                'year_2022' => 'Amélioration continue des mélanges grainiers Continuer la mise en œuvre des essais Communiquer à plus large échelles les premiers résultats',
                'year_2023' => 'Amélioration continue des mélanges grainiers Continuer la mise en œuvre des essais',
                'created_at' => '2020-04-10 18:53:28',
                'updated_at' => '2020-04-10 18:53:28',
            ),
            27 => 
            array (
                'id' => 28,
                'action_id' => 36,
                'year_2020' => 'Faire l’état des lieux et des tests auprès des producteurs et des consommateurs Etablir un programme de promotion',
                'year_2021' => 'Mener le programme de promotion',
                'year_2022' => 'Mener le programme de promotion',
                'year_2023' => 'À établir lors de la mise en œuvre de l’action',
                'created_at' => '2020-04-10 18:55:24',
                'updated_at' => '2020-04-10 18:55:24',
            ),
            28 => 
            array (
                'id' => 29,
                'action_id' => 37,
            'year_2020' => 'Création d’un groupe de pilotage et mandat attribué 1) sur l’inventaire des variétés et espèces 2) sur l’inventaire des actions',
            'year_2021' => 'En fonction des variétés et espèces recensées et des acteurs identifiés définir des sortes prioritaires, soit pour leur conservation en tant qu’éléments de la diversité génétique soit en vue d’un usage pratique Définir les porteurs de ces usages',
            'year_2022' => 'Promotion des variétés et espèces retenues comme prometteuses, à l’exemple de l’AOP cardon ou de l’artichaut violet',
            'year_2023' => 'À établir lors de la mise en œuvre de l’action',
            'created_at' => '2020-04-10 18:57:27',
            'updated_at' => '2020-04-10 18:57:27',
        ),
    ));
        
        
    }
}