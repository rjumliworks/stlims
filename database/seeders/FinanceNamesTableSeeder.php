<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FinanceNamesTableSeeder extends Seeder
{
    /**
     * Auto generated seeder file.
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('finance_names')->delete();
        
        \DB::table('finance_names')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'DOST-SEI',
                'is_individual' => 0,
                'is_active' => 1,
                'created_at' => '2024-08-03 01:53:38',
                'updated_at' => '2024-08-03 01:53:38',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'DOST-PCIEERD',
                'is_individual' => 0,
                'is_active' => 1,
                'created_at' => '2024-08-03 01:55:25',
                'updated_at' => '2024-08-03 01:55:25',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'DOST-PCHRD',
                'is_individual' => 0,
                'is_active' => 1,
                'created_at' => '2024-08-03 01:56:41',
                'updated_at' => '2024-08-03 01:56:41',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'DOST-TAPI',
                'is_individual' => 0,
                'is_active' => 1,
                'created_at' => '2024-08-03 01:57:06',
                'updated_at' => '2024-08-03 01:57:06',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'DOST-CAR',
                'is_individual' => 0,
                'is_active' => 1,
                'created_at' => '2024-08-03 01:57:12',
                'updated_at' => '2024-08-03 01:57:12',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Martin A. Wee',
                'is_individual' => 1,
                'is_active' => 1,
                'created_at' => '2024-08-03 02:01:25',
                'updated_at' => '2024-08-03 02:01:25',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Rosemarie S. Salazar',
                'is_individual' => 1,
                'is_active' => 1,
                'created_at' => '2024-08-03 02:01:45',
                'updated_at' => '2024-08-03 02:01:45',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Ricardo J. Apolinario III',
                'is_individual' => 1,
                'is_active' => 1,
                'created_at' => '2024-08-03 02:02:30',
                'updated_at' => '2024-08-03 02:02:30',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Thelma E. Diego',
                'is_individual' => 1,
                'is_active' => 1,
                'created_at' => '2024-08-03 02:03:06',
                'updated_at' => '2024-08-03 02:03:06',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'Jali J. Badiola',
                'is_individual' => 1,
                'is_active' => 1,
                'created_at' => '2024-08-03 02:03:24',
                'updated_at' => '2024-08-03 02:03:24',
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'Shaira Jean S. Villacin',
                'is_individual' => 1,
                'is_active' => 1,
                'created_at' => '2024-08-03 02:04:03',
                'updated_at' => '2024-08-03 02:04:03',
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'Ronnel B. Gundoy',
                'is_individual' => 1,
                'is_active' => 1,
                'created_at' => '2024-08-03 02:04:14',
                'updated_at' => '2024-08-03 02:04:14',
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'Loise Ray G. Leona',
                'is_individual' => 1,
                'is_active' => 1,
                'created_at' => '2024-08-03 02:05:12',
                'updated_at' => '2024-08-03 02:05:12',
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'Ruben M. Lim jr.',
                'is_individual' => 1,
                'is_active' => 1,
                'created_at' => '2024-08-03 02:05:30',
                'updated_at' => '2024-08-03 02:05:30',
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'Benzar T. Kasan',
                'is_individual' => 1,
                'is_active' => 1,
                'created_at' => '2024-08-03 02:06:41',
                'updated_at' => '2024-08-03 02:06:41',
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'Roger Dave F. Gramatica',
                'is_individual' => 1,
                'is_active' => 1,
                'created_at' => '2024-08-03 02:07:14',
                'updated_at' => '2024-08-03 02:07:14',
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'Merly D. Alivio',
                'is_individual' => 1,
                'is_active' => 1,
                'created_at' => '2024-08-03 02:07:56',
                'updated_at' => '2024-08-03 02:07:56',
            ),
            17 => 
            array (
                'id' => 18,
                'name' => 'Cleypart G. Braca',
                'is_individual' => 1,
                'is_active' => 1,
                'created_at' => '2024-08-03 02:08:24',
                'updated_at' => '2024-08-03 02:08:24',
            ),
            18 => 
            array (
                'id' => 19,
                'name' => 'Jennifer A. Pidor',
                'is_individual' => 1,
                'is_active' => 1,
                'created_at' => '2024-08-03 02:08:33',
                'updated_at' => '2024-08-03 02:08:33',
            ),
            19 => 
            array (
                'id' => 20,
                'name' => 'Albertson T. Patenio',
                'is_individual' => 1,
                'is_active' => 1,
                'created_at' => '2024-08-03 02:08:59',
                'updated_at' => '2024-08-03 02:08:59',
            ),
            20 => 
            array (
                'id' => 21,
                'name' => 'Jezel P. Appari',
                'is_individual' => 1,
                'is_active' => 1,
                'created_at' => '2024-08-03 02:09:29',
                'updated_at' => '2024-08-03 02:09:29',
            ),
            21 => 
            array (
                'id' => 22,
                'name' => 'Marielle R. Atilano',
                'is_individual' => 1,
                'is_active' => 1,
                'created_at' => '2024-08-18 02:01:59',
                'updated_at' => '2024-08-18 02:01:59',
            ),
            22 => 
            array (
                'id' => 23,
                'name' => 'Engr\'s Steel Industry',
                'is_individual' => 0,
                'is_active' => 1,
                'created_at' => '2024-08-19 16:52:18',
                'updated_at' => '2024-08-19 16:52:18',
            ),
            23 => 
            array (
                'id' => 24,
                'name' => 'John Mayo M. Enriquez',
                'is_individual' => 1,
                'is_active' => 1,
                'created_at' => '2024-08-31 22:27:51',
                'updated_at' => '2024-08-31 22:27:51',
            ),
            24 => 
            array (
                'id' => 25,
                'name' => 'Jocelyn D. Partosa',
                'is_individual' => 1,
                'is_active' => 1,
                'created_at' => '2024-08-31 22:28:05',
                'updated_at' => '2024-08-31 22:28:05',
            ),
            25 => 
            array (
                'id' => 26,
                'name' => 'Nuevo Zamboanga College Inc.',
                'is_individual' => 0,
                'is_active' => 1,
                'created_at' => '2024-08-31 22:31:39',
                'updated_at' => '2024-08-31 22:31:39',
            ),
            26 => 
            array (
                'id' => 27,
                'name' => 'Bread Maker Bakery',
                'is_individual' => 0,
                'is_active' => 1,
                'created_at' => '2024-08-31 23:08:24',
                'updated_at' => '2024-08-31 23:08:24',
            ),
            27 => 
            array (
                'id' => 28,
                'name' => 'ZC BTS Marketing',
                'is_individual' => 0,
                'is_active' => 1,
                'created_at' => '2024-08-31 23:09:00',
                'updated_at' => '2024-08-31 23:09:00',
            ),
            28 => 
            array (
                'id' => 29,
                'name' => 'Steel Colors Metal Products - Phase II',
                'is_individual' => 0,
                'is_active' => 1,
                'created_at' => '2024-08-31 23:09:22',
                'updated_at' => '2024-08-31 23:09:22',
            ),
            29 => 
            array (
                'id' => 30,
                'name' => 'FGT Trading',
                'is_individual' => 0,
                'is_active' => 1,
                'created_at' => '2024-08-31 23:09:36',
                'updated_at' => '2024-08-31 23:09:36',
            ),
            30 => 
            array (
                'id' => 31,
                'name' => 'Printline and Stationery Supply',
                'is_individual' => 0,
                'is_active' => 1,
                'created_at' => '2024-08-31 23:09:57',
                'updated_at' => '2024-08-31 23:09:57',
            ),
            31 => 
            array (
                'id' => 32,
                'name' => 'EJT Food Products by Evelyn',
                'is_individual' => 0,
                'is_active' => 1,
                'created_at' => '2024-08-31 23:10:13',
                'updated_at' => '2024-08-31 23:10:13',
            ),
            32 => 
            array (
                'id' => 33,
                'name' => 'Rogelio Rice Milling',
                'is_individual' => 0,
                'is_active' => 1,
                'created_at' => '2024-08-31 23:10:24',
                'updated_at' => '2024-08-31 23:10:24',
            ),
            33 => 
            array (
                'id' => 34,
                'name' => 'Rendon Rice Mill',
                'is_individual' => 0,
                'is_active' => 1,
                'created_at' => '2024-08-31 23:10:38',
                'updated_at' => '2024-08-31 23:10:38',
            ),
            34 => 
            array (
                'id' => 35,
                'name' => 'Fernandez Rice Mill',
                'is_individual' => 0,
                'is_active' => 1,
                'created_at' => '2024-08-31 23:10:50',
                'updated_at' => '2024-08-31 23:10:50',
            ),
            35 => 
            array (
                'id' => 36,
                'name' => 'JR Tamula Rice Mill',
                'is_individual' => 0,
                'is_active' => 1,
                'created_at' => '2024-08-31 23:11:50',
                'updated_at' => '2024-08-31 23:11:50',
            ),
            36 => 
            array (
                'id' => 37,
                'name' => 'J-Jireh Ice Plant & Cold Storage',
                'is_individual' => 0,
                'is_active' => 1,
                'created_at' => '2024-08-31 23:12:07',
                'updated_at' => '2024-08-31 23:12:07',
            ),
            37 => 
            array (
                'id' => 38,
                'name' => 'LE Aninao Snack Haus',
                'is_individual' => 0,
                'is_active' => 1,
                'created_at' => '2024-08-31 23:12:34',
                'updated_at' => '2024-08-31 23:12:34',
            ),
            38 => 
            array (
                'id' => 39,
                'name' => 'W&A Montales Rice Trading',
                'is_individual' => 0,
                'is_active' => 1,
                'created_at' => '2024-08-31 23:12:50',
                'updated_at' => '2024-08-31 23:12:50',
            ),
            39 => 
            array (
                'id' => 40,
                'name' => 'Kthree Food Products',
                'is_individual' => 0,
                'is_active' => 1,
                'created_at' => '2024-08-31 23:13:47',
                'updated_at' => '2024-08-31 23:13:47',
            ),
            40 => 
            array (
                'id' => 41,
                'name' => 'Bon Corpuz Trucking Services',
                'is_individual' => 0,
                'is_active' => 1,
                'created_at' => '2024-08-31 23:14:01',
                'updated_at' => '2024-08-31 23:14:01',
            ),
            41 => 
            array (
                'id' => 42,
                'name' => 'San Jose Ice Production Supply',
                'is_individual' => 0,
                'is_active' => 1,
                'created_at' => '2024-08-31 23:14:17',
                'updated_at' => '2024-08-31 23:14:17',
            ),
            42 => 
            array (
                'id' => 43,
                'name' => 'Dong\'s Animal Feeds Production',
                'is_individual' => 0,
                'is_active' => 1,
                'created_at' => '2024-08-31 23:14:30',
                'updated_at' => '2024-08-31 23:14:30',
            ),
            43 => 
            array (
                'id' => 44,
                'name' => 'Triple\'s Poultry Farm',
                'is_individual' => 0,
                'is_active' => 1,
                'created_at' => '2024-08-31 23:14:45',
                'updated_at' => '2024-08-31 23:14:45',
            ),
            44 => 
            array (
                'id' => 45,
                'name' => 'Joshjeed Palay Seed Farming',
                'is_individual' => 0,
                'is_active' => 1,
                'created_at' => '2024-08-31 23:15:03',
                'updated_at' => '2024-08-31 23:15:03',
            ),
            45 => 
            array (
                'id' => 46,
                'name' => 'Adiong Store',
                'is_individual' => 0,
                'is_active' => 1,
                'created_at' => '2024-08-31 23:15:16',
                'updated_at' => '2024-08-31 23:15:16',
            ),
            46 => 
            array (
                'id' => 47,
                'name' => 'NSB Machine Shop',
                'is_individual' => 0,
                'is_active' => 1,
                'created_at' => '2024-08-31 23:15:25',
                'updated_at' => '2024-08-31 23:15:25',
            ),
            47 => 
            array (
                'id' => 48,
                'name' => 'JForce Printing Services',
                'is_individual' => 0,
                'is_active' => 1,
                'created_at' => '2024-08-31 23:15:37',
                'updated_at' => '2024-08-31 23:15:37',
            ),
            48 => 
            array (
                'id' => 49,
                'name' => 'Laguerta Food Products',
                'is_individual' => 0,
                'is_active' => 1,
                'created_at' => '2024-08-31 23:15:48',
                'updated_at' => '2024-08-31 23:15:48',
            ),
            49 => 
            array (
                'id' => 50,
                'name' => 'Maxie Digital Printing Services',
                'is_individual' => 0,
                'is_active' => 1,
                'created_at' => '2024-08-31 23:16:02',
                'updated_at' => '2024-08-31 23:16:02',
            ),
            50 => 
            array (
                'id' => 51,
                'name' => 'Myka Rice Mill',
                'is_individual' => 0,
                'is_active' => 1,
                'created_at' => '2024-08-31 23:16:19',
                'updated_at' => '2024-08-31 23:16:19',
            ),
            51 => 
            array (
                'id' => 52,
                'name' => 'Duque Computer Grafix and Print Hauz',
                'is_individual' => 0,
                'is_active' => 1,
                'created_at' => '2024-08-31 23:16:44',
                'updated_at' => '2024-08-31 23:16:44',
            ),
            52 => 
            array (
                'id' => 53,
                'name' => 'Francis IV Enterprises',
                'is_individual' => 0,
                'is_active' => 1,
                'created_at' => '2024-08-31 23:17:03',
                'updated_at' => '2024-08-31 23:17:03',
            ),
            53 => 
            array (
                'id' => 54,
                'name' => 'Jacincel Catering Services',
                'is_individual' => 0,
                'is_active' => 1,
                'created_at' => '2024-08-31 23:17:28',
                'updated_at' => '2024-08-31 23:17:28',
            ),
            54 => 
            array (
                'id' => 55,
                'name' => 'Balay ni SRB',
                'is_individual' => 0,
                'is_active' => 1,
                'created_at' => '2024-08-31 23:17:40',
                'updated_at' => '2024-08-31 23:17:40',
            ),
            55 => 
            array (
                'id' => 56,
                'name' => 'Balili Motor Parts',
                'is_individual' => 0,
                'is_active' => 1,
                'created_at' => '2024-08-31 23:17:55',
                'updated_at' => '2024-08-31 23:17:55',
            ),
            56 => 
            array (
                'id' => 57,
                'name' => 'Nanay\'s Bakeshop',
                'is_individual' => 0,
                'is_active' => 1,
                'created_at' => '2024-08-31 23:18:03',
                'updated_at' => '2024-08-31 23:18:03',
            ),
            57 => 
            array (
                'id' => 58,
                'name' => 'Ramona Bakeshop',
                'is_individual' => 0,
                'is_active' => 1,
                'created_at' => '2024-08-31 23:18:18',
                'updated_at' => '2024-08-31 23:18:18',
            ),
            58 => 
            array (
                'id' => 59,
                'name' => 'Romie Studio',
                'is_individual' => 0,
                'is_active' => 1,
                'created_at' => '2024-08-31 23:18:37',
                'updated_at' => '2024-08-31 23:18:37',
            ),
            59 => 
            array (
                'id' => 60,
                'name' => 'Triple J Rice Mill',
                'is_individual' => 0,
                'is_active' => 1,
                'created_at' => '2024-08-31 23:18:48',
                'updated_at' => '2024-08-31 23:18:48',
            ),
            60 => 
            array (
                'id' => 61,
                'name' => 'Top Jun\'s Original Trading',
                'is_individual' => 0,
                'is_active' => 1,
                'created_at' => '2024-08-31 23:19:05',
                'updated_at' => '2024-08-31 23:19:05',
            ),
            61 => 
            array (
                'id' => 62,
                'name' => 'Ian C. Avenido',
                'is_individual' => 1,
                'is_active' => 1,
                'created_at' => '2024-09-06 18:21:25',
                'updated_at' => '2024-09-06 18:21:25',
            ),
            62 => 
            array (
                'id' => 63,
                'name' => 'CLASSIC DIMSUM FRITO & BAKESHOP',
                'is_individual' => 1,
                'is_active' => 1,
                'created_at' => '2024-09-11 17:50:39',
                'updated_at' => '2024-09-11 17:50:39',
            ),
            63 => 
            array (
                'id' => 64,
                'name' => '360 AUTOPARTS',
                'is_individual' => 0,
                'is_active' => 1,
                'created_at' => '2024-09-11 17:51:59',
                'updated_at' => '2024-09-11 17:51:59',
            ),
            64 => 
            array (
                'id' => 65,
                'name' => 'JAN ERIKO A. LIM',
                'is_individual' => 1,
                'is_active' => 1,
                'created_at' => '2024-09-12 19:30:02',
                'updated_at' => '2024-09-12 19:30:02',
            ),
            65 => 
            array (
                'id' => 66,
                'name' => 'RYAN P. ESCODERO',
                'is_individual' => 1,
                'is_active' => 1,
                'created_at' => '2024-09-12 19:30:36',
                'updated_at' => '2024-09-12 19:30:36',
            ),
            66 => 
            array (
                'id' => 67,
                'name' => 'APRIL ROSE M. ENRIQUEZ',
                'is_individual' => 1,
                'is_active' => 1,
                'created_at' => '2024-09-12 19:31:10',
                'updated_at' => '2024-09-12 19:31:10',
            ),
            67 => 
            array (
                'id' => 68,
                'name' => 'APRIL MAE M. ENRIQUEZ',
                'is_individual' => 1,
                'is_active' => 1,
                'created_at' => '2024-09-12 19:31:54',
                'updated_at' => '2024-09-12 19:31:54',
            ),
            68 => 
            array (
                'id' => 69,
                'name' => 'RASHIDEEN A. AHMAD',
                'is_individual' => 1,
                'is_active' => 1,
                'created_at' => '2024-09-12 19:32:29',
                'updated_at' => '2024-09-12 19:32:29',
            ),
            69 => 
            array (
                'id' => 70,
                'name' => 'ALAIN KRISTIAN T. CATIS',
                'is_individual' => 1,
                'is_active' => 1,
                'created_at' => '2024-09-12 19:33:00',
                'updated_at' => '2024-09-12 19:33:00',
            ),
            70 => 
            array (
                'id' => 71,
                'name' => 'AMLEY FOOD CORPORATION',
                'is_individual' => 1,
                'is_active' => 1,
                'created_at' => '2024-09-12 23:25:22',
                'updated_at' => '2024-09-12 23:25:22',
            ),
            71 => 
            array (
                'id' => 72,
                'name' => 'ZAMORA RICE MILL',
                'is_individual' => 0,
                'is_active' => 1,
                'created_at' => '2024-09-13 18:53:20',
                'updated_at' => '2024-09-13 18:53:20',
            ),
            72 => 
            array (
                'id' => 73,
                'name' => 'PIMENTEL CREATIVE BUILDERS- PHASE II',
                'is_individual' => 0,
                'is_active' => 1,
                'created_at' => '2024-09-13 22:22:10',
                'updated_at' => '2024-09-13 22:22:10',
            ),
            73 => 
            array (
                'id' => 74,
                'name' => 'QUINTUPLE BROS HARVESTING SERVICES',
                'is_individual' => 0,
                'is_active' => 1,
                'created_at' => '2024-09-13 22:23:08',
                'updated_at' => '2024-09-13 22:23:08',
            ),
            74 => 
            array (
                'id' => 75,
                'name' => 'JR RICE AND CORN MILL',
                'is_individual' => 0,
                'is_active' => 1,
                'created_at' => '2024-09-13 22:23:40',
                'updated_at' => '2024-09-13 22:23:40',
            ),
            75 => 
            array (
                'id' => 76,
                'name' => 'GAWCHUA FOOD PRODUCTS',
                'is_individual' => 0,
                'is_active' => 1,
                'created_at' => '2024-09-13 22:24:44',
                'updated_at' => '2024-09-13 22:24:44',
            ),
            76 => 
            array (
                'id' => 77,
                'name' => 'RODELIO FISH CAGE',
                'is_individual' => 0,
                'is_active' => 1,
                'created_at' => '2024-09-13 22:25:44',
                'updated_at' => '2024-09-13 22:25:44',
            ),
            77 => 
            array (
                'id' => 78,
                'name' => 'ST. JAMES MEDICAL CLINIC LABORATORY',
                'is_individual' => 0,
                'is_active' => 1,
                'created_at' => '2024-09-13 22:26:30',
                'updated_at' => '2024-09-13 22:26:30',
            ),
            78 => 
            array (
                'id' => 79,
                'name' => 'VMD RICE MILL',
                'is_individual' => 0,
                'is_active' => 1,
                'created_at' => '2024-09-13 22:27:04',
                'updated_at' => '2024-09-13 22:27:04',
            ),
            79 => 
            array (
                'id' => 80,
                'name' => 'ZACCKEY CARIDO PALM-OIL PLANT NURSERY',
                'is_individual' => 0,
                'is_active' => 1,
                'created_at' => '2024-09-13 22:27:50',
                'updated_at' => '2024-09-13 22:27:50',
            ),
            80 => 
            array (
                'id' => 81,
                'name' => 'JHONCRIS ENTERPRISES',
                'is_individual' => 0,
                'is_active' => 1,
                'created_at' => '2024-09-13 22:29:21',
                'updated_at' => '2024-09-13 22:29:21',
            ),
            81 => 
            array (
                'id' => 82,
                'name' => 'BUUG MULTI-PURPOSE COOPERATIVE',
                'is_individual' => 0,
                'is_active' => 1,
                'created_at' => '2024-09-13 22:30:17',
                'updated_at' => '2024-09-13 22:30:17',
            ),
            82 => 
            array (
                'id' => 83,
                'name' => 'AMCL WELDING SHOP',
                'is_individual' => 0,
                'is_active' => 1,
                'created_at' => '2024-09-13 22:30:54',
                'updated_at' => '2024-09-13 22:30:54',
            ),
            83 => 
            array (
                'id' => 84,
                'name' => 'A5 FOOD PRODUCTS',
                'is_individual' => 0,
                'is_active' => 1,
                'created_at' => '2024-09-13 22:32:44',
                'updated_at' => '2024-09-13 22:32:44',
            ),
            84 => 
            array (
                'id' => 85,
                'name' => 'AMABELLE\'S CAKES AND PASTRIES',
                'is_individual' => 0,
                'is_active' => 1,
                'created_at' => '2024-09-13 22:33:26',
                'updated_at' => '2024-09-13 22:33:26',
            ),
            85 => 
            array (
                'id' => 86,
                'name' => 'ROSEMARRY RICE RETAILING',
                'is_individual' => 0,
                'is_active' => 1,
                'created_at' => '2024-09-13 22:33:56',
                'updated_at' => '2024-09-13 22:33:56',
            ),
            86 => 
            array (
                'id' => 87,
                'name' => 'CASSY\'S SWEET BITES AND GRILL',
                'is_individual' => 0,
                'is_active' => 1,
                'created_at' => '2024-09-13 22:34:28',
                'updated_at' => '2024-09-13 22:34:28',
            ),
            87 => 
            array (
                'id' => 88,
                'name' => 'CANONES RICE TRADING',
                'is_individual' => 0,
                'is_active' => 1,
                'created_at' => '2024-09-13 22:35:16',
                'updated_at' => '2024-09-13 22:35:16',
            ),
            88 => 
            array (
                'id' => 89,
                'name' => 'GUERRERO MILLING & MECHANICAL GRAIN DRYING',
                'is_individual' => 0,
                'is_active' => 1,
                'created_at' => '2024-09-13 22:36:06',
                'updated_at' => '2024-09-13 22:36:06',
            ),
            89 => 
            array (
                'id' => 90,
                'name' => 'DUQUE ROOFING CENTER',
                'is_individual' => 0,
                'is_active' => 1,
                'created_at' => '2024-09-13 22:36:41',
                'updated_at' => '2024-09-13 22:36:41',
            ),
            90 => 
            array (
                'id' => 91,
                'name' => 'RGV RICE TRADING',
                'is_individual' => 0,
                'is_active' => 1,
                'created_at' => '2024-09-13 22:37:02',
                'updated_at' => '2024-09-13 22:37:02',
            ),
            91 => 
            array (
                'id' => 92,
                'name' => 'DIAMOND NOODLES FACTORY',
                'is_individual' => 0,
                'is_active' => 1,
                'created_at' => '2024-09-13 22:37:28',
                'updated_at' => '2024-09-13 22:37:28',
            ),
            92 => 
            array (
                'id' => 93,
                'name' => 'ANAMEL AGRIVET SUPPLY & RICE MILL',
                'is_individual' => 0,
                'is_active' => 1,
                'created_at' => '2024-09-13 22:38:12',
                'updated_at' => '2024-09-13 22:38:12',
            ),
            93 => 
            array (
                'id' => 94,
                'name' => 'VAN VAN ALEGRE RICE & CORN TRADING',
                'is_individual' => 0,
                'is_active' => 1,
                'created_at' => '2024-09-13 22:38:49',
                'updated_at' => '2024-09-13 22:38:49',
            ),
            94 => 
            array (
                'id' => 95,
                'name' => 'RK TRADING AND SERVICES',
                'is_individual' => 1,
                'is_active' => 1,
                'created_at' => '2024-09-23 17:02:43',
                'updated_at' => '2024-09-23 17:02:43',
            ),
            95 => 
            array (
                'id' => 96,
                'name' => 'LEIANN TYRONE P. CAPALA',
                'is_individual' => 1,
                'is_active' => 1,
                'created_at' => '2024-09-23 17:30:13',
                'updated_at' => '2024-09-23 17:30:13',
            ),
            96 => 
            array (
                'id' => 97,
                'name' => 'RUAINI H. AQUINO',
                'is_individual' => 1,
                'is_active' => 1,
                'created_at' => '2024-09-23 17:31:17',
                'updated_at' => '2024-09-23 17:31:17',
            ),
            97 => 
            array (
                'id' => 98,
                'name' => 'SHARIFF KHALIFA I. HASIM',
                'is_individual' => 1,
                'is_active' => 1,
                'created_at' => '2024-09-23 17:32:10',
                'updated_at' => '2024-09-23 17:32:10',
            ),
            98 => 
            array (
                'id' => 99,
                'name' => 'JOSHUA ANGEL C. ALBAY',
                'is_individual' => 1,
                'is_active' => 1,
                'created_at' => '2024-09-23 17:32:39',
                'updated_at' => '2024-09-23 17:32:39',
            ),
            99 => 
            array (
                'id' => 100,
                'name' => 'GOLDSTONE MARKETING TRADING AND GENERAL MERCHANDISING INC',
                'is_individual' => 1,
                'is_active' => 1,
                'created_at' => '2024-09-24 21:52:50',
                'updated_at' => '2024-09-24 21:52:50',
            ),
            100 => 
            array (
                'id' => 101,
                'name' => 'JOSHUA B. PORILLO',
                'is_individual' => 1,
                'is_active' => 1,
                'created_at' => '2024-09-26 00:31:52',
                'updated_at' => '2024-09-26 00:31:52',
            ),
            101 => 
            array (
                'id' => 102,
                'name' => 'MARC L. LORENCE I. TUBIL',
                'is_individual' => 1,
                'is_active' => 1,
                'created_at' => '2024-09-26 00:32:31',
                'updated_at' => '2024-09-26 00:32:31',
            ),
            102 => 
            array (
                'id' => 103,
                'name' => 'AL-MEQHAD IBRAHIM JOCUTAN',
                'is_individual' => 1,
                'is_active' => 1,
                'created_at' => '2024-09-26 00:33:23',
                'updated_at' => '2024-09-26 00:33:23',
            ),
            103 => 
            array (
                'id' => 104,
                'name' => 'ROYA JANE B. MONTIEL',
                'is_individual' => 1,
                'is_active' => 1,
                'created_at' => '2024-09-26 00:34:24',
                'updated_at' => '2024-09-26 00:34:24',
            ),
            104 => 
            array (
                'id' => 105,
                'name' => 'CLARENCE JAMES ORAL',
                'is_individual' => 1,
                'is_active' => 1,
                'created_at' => '2024-09-26 00:34:56',
                'updated_at' => '2024-09-26 00:34:56',
            ),
            105 => 
            array (
                'id' => 106,
                'name' => 'ANGEL MARIE P. ALABATA',
                'is_individual' => 1,
                'is_active' => 1,
                'created_at' => '2024-09-26 00:35:36',
                'updated_at' => '2024-09-26 00:35:36',
            ),
            106 => 
            array (
                'id' => 107,
                'name' => 'ALIHA T. AMILASAN',
                'is_individual' => 1,
                'is_active' => 1,
                'created_at' => '2024-09-26 00:36:07',
                'updated_at' => '2024-09-26 00:36:07',
            ),
            107 => 
            array (
                'id' => 108,
                'name' => 'PRINCES NEL ANN C, LUMAWAS',
                'is_individual' => 1,
                'is_active' => 1,
                'created_at' => '2024-09-26 00:39:13',
                'updated_at' => '2024-09-26 00:39:13',
            ),
            108 => 
            array (
                'id' => 109,
                'name' => 'AL MEQHAD IBRAHIM JOCUTAN',
                'is_individual' => 1,
                'is_active' => 1,
                'created_at' => '2024-09-26 00:44:53',
                'updated_at' => '2024-09-26 00:44:53',
            ),
            109 => 
            array (
                'id' => 110,
                'name' => 'GERARDO F. PAROT',
                'is_individual' => 1,
                'is_active' => 1,
                'created_at' => '2024-09-26 18:58:28',
                'updated_at' => '2024-09-26 18:58:28',
            ),
            110 => 
            array (
                'id' => 111,
                'name' => 'COCOY MACHINE SHOP',
                'is_individual' => 1,
                'is_active' => 1,
                'created_at' => '2024-09-30 18:13:53',
                'updated_at' => '2024-09-30 18:13:53',
            ),
            111 => 
            array (
                'id' => 116,
                'name' => 'JERON A. ELLORAN',
                'is_individual' => 1,
                'is_active' => 1,
                'created_at' => '2024-10-01 16:59:49',
                'updated_at' => '2024-10-01 16:59:49',
            ),
            112 => 
            array (
                'id' => 117,
                'name' => 'SHEILA S. BERNARDO',
                'is_individual' => 1,
                'is_active' => 1,
                'created_at' => '2024-10-01 19:18:47',
                'updated_at' => '2024-10-01 19:18:47',
            ),
            113 => 
            array (
                'id' => 118,
                'name' => 'MICO KLEIN L. DELOS REYES',
                'is_individual' => 1,
                'is_active' => 1,
                'created_at' => '2024-10-01 19:20:45',
                'updated_at' => '2024-10-01 19:20:45',
            ),
            114 => 
            array (
                'id' => 119,
                'name' => 'JIMBERT TABANAG',
                'is_individual' => 1,
                'is_active' => 1,
                'created_at' => '2024-10-01 19:22:09',
                'updated_at' => '2024-10-01 19:22:09',
            ),
            115 => 
            array (
                'id' => 120,
                'name' => 'EUWAN TYRONE B. PRAIS',
                'is_individual' => 1,
                'is_active' => 1,
                'created_at' => '2024-10-01 19:24:51',
                'updated_at' => '2024-10-01 19:24:51',
            ),
            116 => 
            array (
                'id' => 121,
                'name' => 'OMAR BUTLANGAN',
                'is_individual' => 1,
                'is_active' => 1,
                'created_at' => '2024-10-01 19:34:02',
                'updated_at' => '2024-10-01 19:34:02',
            ),
            117 => 
            array (
                'id' => 122,
                'name' => 'JASMINE MARIE M. UNGAB',
                'is_individual' => 1,
                'is_active' => 1,
                'created_at' => '2024-10-01 19:52:33',
                'updated_at' => '2024-10-01 19:52:33',
            ),
            118 => 
            array (
                'id' => 123,
                'name' => 'KRISTL IRRA MAE C. ELCAMEL',
                'is_individual' => 1,
                'is_active' => 1,
                'created_at' => '2024-10-01 19:53:27',
                'updated_at' => '2024-10-01 19:53:27',
            ),
            119 => 
            array (
                'id' => 124,
                'name' => 'IVAN ISAAC L. IBBAH',
                'is_individual' => 1,
                'is_active' => 1,
                'created_at' => '2024-10-01 19:56:26',
                'updated_at' => '2024-10-01 19:56:26',
            ),
            120 => 
            array (
                'id' => 125,
                'name' => 'REX DANIEL S. ALLA',
                'is_individual' => 1,
                'is_active' => 1,
                'created_at' => '2024-10-01 20:00:53',
                'updated_at' => '2024-10-01 20:00:53',
            ),
            121 => 
            array (
                'id' => 126,
                'name' => 'GINE ANDRIE R. HANDUGAN',
                'is_individual' => 1,
                'is_active' => 1,
                'created_at' => '2024-10-01 20:01:52',
                'updated_at' => '2024-10-01 20:01:52',
            ),
            122 => 
            array (
                'id' => 127,
                'name' => 'VINCE A. VILLEGAS',
                'is_individual' => 1,
                'is_active' => 1,
                'created_at' => '2024-10-01 20:02:19',
                'updated_at' => '2024-10-01 20:02:19',
            ),
            123 => 
            array (
                'id' => 128,
                'name' => 'HARVEY CHARLES C. MAGSAYO',
                'is_individual' => 1,
                'is_active' => 1,
                'created_at' => '2024-10-01 20:02:47',
                'updated_at' => '2024-10-01 20:02:47',
            ),
            124 => 
            array (
                'id' => 129,
                'name' => 'DENNIS M. DAYAGANON',
                'is_individual' => 1,
                'is_active' => 1,
                'created_at' => '2024-10-03 23:55:27',
                'updated_at' => '2024-10-03 23:55:27',
            ),
            125 => 
            array (
                'id' => 130,
                'name' => 'JAMES MARK U. ESCORIAL',
                'is_individual' => 1,
                'is_active' => 1,
                'created_at' => '2024-10-04 00:08:52',
                'updated_at' => '2024-10-04 00:08:52',
            ),
            126 => 
            array (
                'id' => 131,
                'name' => 'ROSEMARIE S.. SALAZAR',
                'is_individual' => 1,
                'is_active' => 1,
                'created_at' => '2024-10-09 19:08:59',
                'updated_at' => '2024-10-09 19:08:59',
            ),
            127 => 
            array (
                'id' => 132,
                'name' => 'KEN VINZEL E. DELLAVA',
                'is_individual' => 1,
                'is_active' => 1,
                'created_at' => '2024-10-10 00:42:21',
                'updated_at' => '2024-10-10 00:42:21',
            ),
            128 => 
            array (
                'id' => 133,
            'name' => 'LUCAS RICE MILL (ZDN)',
                'is_individual' => 1,
                'is_active' => 1,
                'created_at' => '2024-10-11 16:21:01',
                'updated_at' => '2024-10-11 16:21:01',
            ),
            129 => 
            array (
                'id' => 134,
                'name' => 'GMPC',
                'is_individual' => 1,
                'is_active' => 1,
                'created_at' => '2024-10-11 16:21:38',
                'updated_at' => '2024-10-11 16:21:38',
            ),
            130 => 
            array (
                'id' => 135,
                'name' => 'SWEET MOH BAKESHOP',
                'is_individual' => 1,
                'is_active' => 1,
                'created_at' => '2024-10-14 23:02:40',
                'updated_at' => '2024-10-14 23:02:40',
            ),
            131 => 
            array (
                'id' => 136,
                'name' => 'CHARILYN JOY M. LAYUS',
                'is_individual' => 1,
                'is_active' => 1,
                'created_at' => '2024-10-18 18:44:23',
                'updated_at' => '2024-10-18 18:44:23',
            ),
            132 => 
            array (
                'id' => 137,
                'name' => 'ROHIMA JAWATAN',
                'is_individual' => 1,
                'is_active' => 1,
                'created_at' => '2024-10-18 18:46:32',
                'updated_at' => '2024-10-18 18:46:32',
            ),
            133 => 
            array (
                'id' => 138,
                'name' => 'LAB TRADERS INC',
                'is_individual' => 1,
                'is_active' => 1,
                'created_at' => '2024-10-21 17:40:17',
                'updated_at' => '2024-10-21 17:40:17',
            ),
            134 => 
            array (
                'id' => 139,
                'name' => 'SIBUGAY RICE MILL',
                'is_individual' => 1,
                'is_active' => 1,
                'created_at' => '2024-10-22 21:11:52',
                'updated_at' => '2024-10-22 21:11:52',
            ),
            135 => 
            array (
                'id' => 140,
                'name' => 'BENDIMIL CONSTRUCTION',
                'is_individual' => 1,
                'is_active' => 1,
                'created_at' => '2024-10-29 22:28:49',
                'updated_at' => '2024-10-29 22:28:49',
            ),
            136 => 
            array (
                'id' => 141,
                'name' => 'LIANA\'S FOOD PRODUCTS MANUFACTURING',
                'is_individual' => 1,
                'is_active' => 1,
                'created_at' => '2024-10-30 22:02:38',
                'updated_at' => '2024-10-30 22:02:38',
            ),
            137 => 
            array (
                'id' => 142,
                'name' => 'HINGOSA RICE MILL',
                'is_individual' => 1,
                'is_active' => 1,
                'created_at' => '2024-10-30 22:09:55',
                'updated_at' => '2024-10-30 22:09:55',
            ),
            138 => 
            array (
                'id' => 143,
                'name' => '7P\'S',
                'is_individual' => 1,
                'is_active' => 1,
                'created_at' => '2024-10-30 22:29:06',
                'updated_at' => '2024-10-30 22:29:06',
            ),
            139 => 
            array (
                'id' => 144,
                'name' => 'YOCUNDO FARMS- PHASE II',
                'is_individual' => 1,
                'is_active' => 1,
                'created_at' => '2024-10-30 22:31:59',
                'updated_at' => '2024-10-30 22:31:59',
            ),
            140 => 
            array (
                'id' => 145,
                'name' => 'CORPUZ TRAVELLING RICE MILL',
                'is_individual' => 1,
                'is_active' => 1,
                'created_at' => '2024-10-30 22:36:31',
                'updated_at' => '2024-10-30 22:36:31',
            ),
            141 => 
            array (
                'id' => 146,
                'name' => 'GETREADY ENTERPRISES',
                'is_individual' => 1,
                'is_active' => 1,
                'created_at' => '2024-10-30 22:42:31',
                'updated_at' => '2024-10-30 22:42:31',
            ),
            142 => 
            array (
                'id' => 147,
                'name' => 'SEPADA RICE AND CORN MILL',
                'is_individual' => 1,
                'is_active' => 1,
                'created_at' => '2024-10-30 22:49:01',
                'updated_at' => '2024-10-30 22:49:01',
            ),
            143 => 
            array (
                'id' => 148,
                'name' => 'USDMPC',
                'is_individual' => 1,
                'is_active' => 1,
                'created_at' => '2024-10-30 22:51:40',
                'updated_at' => '2024-10-30 22:51:40',
            ),
            144 => 
            array (
                'id' => 149,
                'name' => 'CAÑALES PRINTING SERVICES',
                'is_individual' => 1,
                'is_active' => 1,
                'created_at' => '2024-10-30 23:02:38',
                'updated_at' => '2024-10-30 23:02:38',
            ),
            145 => 
            array (
                'id' => 151,
                'name' => 'ALVERIO AUTO REPAIR SHOP',
                'is_individual' => 1,
                'is_active' => 1,
                'created_at' => '2024-10-30 23:14:51',
                'updated_at' => '2024-10-30 23:14:51',
            ),
            146 => 
            array (
                'id' => 152,
                'name' => 'FRANZ RICE MILLING',
                'is_individual' => 1,
                'is_active' => 1,
                'created_at' => '2024-10-30 23:18:26',
                'updated_at' => '2024-10-30 23:18:26',
            ),
            147 => 
            array (
                'id' => 153,
                'name' => 'GRANDMA\'S BEST BAKESHOP',
                'is_individual' => 1,
                'is_active' => 1,
                'created_at' => '2024-10-30 23:33:20',
                'updated_at' => '2024-10-30 23:33:20',
            ),
            148 => 
            array (
                'id' => 154,
                'name' => 'B&R AGRI SUPPLY',
                'is_individual' => 1,
                'is_active' => 1,
                'created_at' => '2024-10-31 00:01:20',
                'updated_at' => '2024-10-31 00:01:20',
            ),
            149 => 
            array (
                'id' => 155,
                'name' => 'BRITO RICE AND CORN MILL',
                'is_individual' => 1,
                'is_active' => 1,
                'created_at' => '2024-10-31 00:14:04',
                'updated_at' => '2024-10-31 00:14:04',
            ),
            150 => 
            array (
                'id' => 157,
                'name' => 'COMPUTER GRAFIX',
                'is_individual' => 1,
                'is_active' => 1,
                'created_at' => '2024-11-05 18:40:21',
                'updated_at' => '2024-11-05 18:40:21',
            ),
            151 => 
            array (
                'id' => 158,
                'name' => 'SONORA L. BUNAG',
                'is_individual' => 1,
                'is_active' => 1,
                'created_at' => '2024-11-05 20:58:35',
                'updated_at' => '2024-11-05 20:58:35',
            ),
            152 => 
            array (
                'id' => 159,
                'name' => 'SSP  MANPOWER SERVICES',
                'is_individual' => 1,
                'is_active' => 1,
                'created_at' => '2024-11-05 22:45:24',
                'updated_at' => '2024-11-05 22:45:24',
            ),
            153 => 
            array (
                'id' => 160,
                'name' => 'PITCHEL\' SECURITY AGENCY',
                'is_individual' => 1,
                'is_active' => 1,
                'created_at' => '2024-11-05 22:46:35',
                'updated_at' => '2024-11-05 22:46:35',
            ),
            154 => 
            array (
                'id' => 161,
                'name' => 'GALAS MULTI PURPOSE COOPERATIVE',
                'is_individual' => 1,
                'is_active' => 1,
                'created_at' => '2024-11-13 01:42:11',
                'updated_at' => '2024-11-13 01:42:11',
            ),
            155 => 
            array (
                'id' => 162,
                'name' => '360 AUTO SERVICES',
                'is_individual' => 1,
                'is_active' => 1,
                'created_at' => '2024-11-13 01:42:40',
                'updated_at' => '2024-11-13 01:42:40',
            ),
            156 => 
            array (
                'id' => 163,
                'name' => 'THE LUCKY 9 MANPOWER & SERVICES INC',
                'is_individual' => 1,
                'is_active' => 1,
                'created_at' => '2024-11-14 21:30:03',
                'updated_at' => '2024-11-14 21:30:03',
            ),
            157 => 
            array (
                'id' => 164,
                'name' => 'THE LUCKY 9 SECURITY AGENCY CORP',
                'is_individual' => 1,
                'is_active' => 1,
                'created_at' => '2024-11-14 21:31:04',
                'updated_at' => '2024-11-14 21:31:04',
            ),
            158 => 
            array (
                'id' => 165,
                'name' => 'PRAC MANPOWER AND GENERAL SERVICES',
                'is_individual' => 1,
                'is_active' => 1,
                'created_at' => '2024-11-15 17:51:11',
                'updated_at' => '2024-11-15 17:51:11',
            ),
            159 => 
            array (
                'id' => 166,
                'name' => 'PRAC SECURITY AGENCY',
                'is_individual' => 1,
                'is_active' => 1,
                'created_at' => '2024-11-15 17:55:19',
                'updated_at' => '2024-11-15 17:55:19',
            ),
            160 => 
            array (
                'id' => 167,
                'name' => 'CAMIL JOYCE D. CHIONG',
                'is_individual' => 1,
                'is_active' => 1,
                'created_at' => '2024-11-18 22:46:41',
                'updated_at' => '2024-11-18 22:46:41',
            ),
            161 => 
            array (
                'id' => 168,
                'name' => 'DOUBLE DRAGON SECURITY FORCES AGENCY & INC',
                'is_individual' => 1,
                'is_active' => 1,
                'created_at' => '2024-11-22 17:43:58',
                'updated_at' => '2024-11-22 17:43:58',
            ),
            162 => 
            array (
                'id' => 169,
                'name' => 'ENGR\'S  STEEL',
                'is_individual' => 1,
                'is_active' => 1,
                'created_at' => '2024-11-28 02:10:55',
                'updated_at' => '2024-11-28 02:10:55',
            ),
            163 => 
            array (
                'id' => 170,
                'name' => 'CANOY CATERING SERVICES',
                'is_individual' => 1,
                'is_active' => 1,
                'created_at' => '2024-11-29 21:46:55',
                'updated_at' => '2024-11-29 21:46:55',
            ),
            164 => 
            array (
                'id' => 171,
                'name' => 'TABACON RICE MILL',
                'is_individual' => 1,
                'is_active' => 1,
                'created_at' => '2024-11-29 23:20:30',
                'updated_at' => '2024-11-29 23:20:30',
            ),
            165 => 
            array (
                'id' => 172,
                'name' => 'RENE WOODCRAFT & FURNITURE',
                'is_individual' => 1,
                'is_active' => 1,
                'created_at' => '2024-11-29 23:23:18',
                'updated_at' => '2024-11-29 23:23:18',
            ),
            166 => 
            array (
                'id' => 173,
                'name' => 'BARANGAY ACHASOL',
                'is_individual' => 1,
                'is_active' => 1,
                'created_at' => '2024-11-29 23:36:25',
                'updated_at' => '2024-11-29 23:36:25',
            ),
            167 => 
            array (
                'id' => 174,
                'name' => 'NBS MACHINE SHOP',
                'is_individual' => 1,
                'is_active' => 1,
                'created_at' => '2024-11-29 23:41:47',
                'updated_at' => '2024-11-29 23:41:47',
            ),
            168 => 
            array (
                'id' => 175,
                'name' => 'RA-OUF I. JUMLI',
                'is_individual' => 1,
                'is_active' => 1,
                'created_at' => '2024-12-04 00:03:03',
                'updated_at' => '2024-12-04 00:03:03',
            ),
            169 => 
            array (
                'id' => 176,
                'name' => 'JULIUS T. FOJAS',
                'is_individual' => 1,
                'is_active' => 1,
                'created_at' => '2024-12-04 23:20:36',
                'updated_at' => '2024-12-04 23:20:36',
            ),
            170 => 
            array (
                'id' => 178,
                'name' => 'JALI  J. BADIOLA',
                'is_individual' => 1,
                'is_active' => 1,
                'created_at' => '2024-12-06 21:59:00',
                'updated_at' => '2024-12-06 21:59:00',
            ),
            171 => 
            array (
                'id' => 179,
                'name' => 'J FORCE',
                'is_individual' => 1,
                'is_active' => 1,
                'created_at' => '2024-12-10 17:20:23',
                'updated_at' => '2024-12-10 17:20:23',
            ),
            172 => 
            array (
                'id' => 180,
                'name' => 'ANALYN L. SAJIN',
                'is_individual' => 1,
                'is_active' => 1,
                'created_at' => '2024-12-12 17:13:16',
                'updated_at' => '2024-12-12 17:21:40',
            ),
            173 => 
            array (
                'id' => 181,
                'name' => 'JEYZEL P APARRI',
                'is_individual' => 1,
                'is_active' => 1,
                'created_at' => '2024-12-12 21:21:00',
                'updated_at' => '2024-12-12 21:21:00',
            ),
            174 => 
            array (
                'id' => 182,
                'name' => 'PRINCESS KATE GERUNDIO',
                'is_individual' => 1,
                'is_active' => 1,
                'created_at' => '2024-12-13 00:17:04',
                'updated_at' => '2024-12-13 00:17:04',
            ),
            175 => 
            array (
                'id' => 183,
                'name' => 'IAN AVENIDO',
                'is_individual' => 1,
                'is_active' => 1,
                'created_at' => '2024-12-13 16:25:15',
                'updated_at' => '2024-12-13 16:25:15',
            ),
            176 => 
            array (
                'id' => 184,
                'name' => 'BENZAR KASAN',
                'is_individual' => 1,
                'is_active' => 1,
                'created_at' => '2024-12-13 18:58:45',
                'updated_at' => '2024-12-13 18:58:45',
            ),
            177 => 
            array (
                'id' => 185,
                'name' => 'GARCELO INC',
                'is_individual' => 1,
                'is_active' => 1,
                'created_at' => '2024-12-16 20:35:36',
                'updated_at' => '2024-12-16 20:35:36',
            ),
            178 => 
            array (
                'id' => 186,
                'name' => 'JAN MELVIN D. VALLEJO',
                'is_individual' => 1,
                'is_active' => 1,
                'created_at' => '2024-12-19 17:12:47',
                'updated_at' => '2024-12-19 17:12:47',
            ),
            179 => 
            array (
                'id' => 187,
                'name' => 'PHONE PATCH MARKETING',
                'is_individual' => 1,
                'is_active' => 1,
                'created_at' => '2024-12-19 17:13:44',
                'updated_at' => '2024-12-19 17:13:44',
            ),
            180 => 
            array (
                'id' => 188,
                'name' => 'LGU KATIPUNAN',
                'is_individual' => 1,
                'is_active' => 1,
                'created_at' => '2024-12-20 16:33:36',
                'updated_at' => '2024-12-20 16:33:36',
            ),
            181 => 
            array (
                'id' => 189,
                'name' => 'LINES PRINTING SERVICES',
                'is_individual' => 1,
                'is_active' => 1,
                'created_at' => '2024-12-20 17:12:27',
                'updated_at' => '2024-12-20 17:12:27',
            ),
            182 => 
            array (
                'id' => 190,
                'name' => 'OLC FISHING VENTURE',
                'is_individual' => 1,
                'is_active' => 1,
                'created_at' => '2024-12-20 17:14:33',
                'updated_at' => '2024-12-20 17:14:33',
            ),
            183 => 
            array (
                'id' => 191,
                'name' => 'PERCI FISHCAGE',
                'is_individual' => 1,
                'is_active' => 1,
                'created_at' => '2024-12-20 19:03:32',
                'updated_at' => '2024-12-20 19:03:32',
            ),
            184 => 
            array (
                'id' => 192,
                'name' => 'SIANO MINI SAWMILL LUMBER AND FURNITURE SHOP',
                'is_individual' => 1,
                'is_active' => 1,
                'created_at' => '2024-12-20 21:14:32',
                'updated_at' => '2024-12-20 21:14:32',
            ),
            185 => 
            array (
                'id' => 193,
                'name' => 'LV6 RICE MILL & RICE TRADING',
                'is_individual' => 1,
                'is_active' => 1,
                'created_at' => '2024-12-20 21:21:11',
                'updated_at' => '2024-12-20 21:21:11',
            ),
            186 => 
            array (
                'id' => 194,
                'name' => 'TRES PRINTAHANAN PRINTING',
                'is_individual' => 1,
                'is_active' => 1,
                'created_at' => '2024-12-20 21:25:45',
                'updated_at' => '2024-12-20 21:25:45',
            ),
            187 => 
            array (
                'id' => 195,
                'name' => 'KRISTINE MAE R. SARITA',
                'is_individual' => 1,
                'is_active' => 1,
                'created_at' => '2024-12-26 17:10:26',
                'updated_at' => '2024-12-26 17:10:26',
            ),
            188 => 
            array (
                'id' => 196,
                'name' => 'MYA TRADING',
                'is_individual' => 1,
                'is_active' => 1,
                'created_at' => '2024-12-26 17:11:42',
                'updated_at' => '2024-12-26 17:11:42',
            ),
            189 => 
            array (
                'id' => 197,
                'name' => 'CLASSIC DIMSUIM PRITO AND BAKESHOP',
                'is_individual' => 1,
                'is_active' => 1,
                'created_at' => '2025-01-10 01:59:11',
                'updated_at' => '2025-01-10 01:59:11',
            ),
            190 => 
            array (
                'id' => 198,
                'name' => 'CAFE NICASIO',
                'is_individual' => 1,
                'is_active' => 1,
                'created_at' => '2025-01-10 01:59:49',
                'updated_at' => '2025-01-10 01:59:49',
            ),
            191 => 
            array (
                'id' => 199,
                'name' => 'DEPARTMENT OF TRADE AND INDUSTRY',
                'is_individual' => 1,
                'is_active' => 1,
                'created_at' => '2025-01-10 19:41:10',
                'updated_at' => '2025-01-10 19:41:10',
            ),
            192 => 
            array (
                'id' => 200,
                'name' => 'MNM PHOTO STUDIO',
                'is_individual' => 1,
                'is_active' => 1,
                'created_at' => '2025-01-14 19:09:31',
                'updated_at' => '2025-01-14 19:09:31',
            ),
            193 => 
            array (
                'id' => 201,
                'name' => 'SHARMAINE MORALES',
                'is_individual' => 1,
                'is_active' => 1,
                'created_at' => '2025-01-24 01:01:34',
                'updated_at' => '2025-01-24 01:01:34',
            ),
            194 => 
            array (
                'id' => 202,
                'name' => 'ALEGRE RICE & CORN DEALER & RICE MILL',
                'is_individual' => 1,
                'is_active' => 1,
                'created_at' => '2025-01-24 22:02:22',
                'updated_at' => '2025-01-24 22:02:22',
            ),
            195 => 
            array (
                'id' => 203,
                'name' => 'RACE FANK AUTO PARTS AND MERCHANDISE',
                'is_individual' => 1,
                'is_active' => 1,
                'created_at' => '2025-01-24 22:07:42',
                'updated_at' => '2025-01-24 22:07:42',
            ),
            196 => 
            array (
                'id' => 205,
                'name' => 'MIC RICE TRADING',
                'is_individual' => 1,
                'is_active' => 1,
                'created_at' => '2025-01-24 22:17:40',
                'updated_at' => '2025-01-24 22:17:40',
            ),
            197 => 
            array (
                'id' => 206,
                'name' => 'SALVADOR HARVESTER',
                'is_individual' => 1,
                'is_active' => 1,
                'created_at' => '2025-01-24 23:33:02',
                'updated_at' => '2025-01-24 23:33:02',
            ),
            198 => 
            array (
                'id' => 207,
                'name' => 'ADs PRINTING SERVICES',
                'is_individual' => 1,
                'is_active' => 1,
                'created_at' => '2025-01-24 23:43:54',
                'updated_at' => '2025-01-24 23:43:54',
            ),
            199 => 
            array (
                'id' => 208,
                'name' => 'KHALE AGRICULTURAL PRODUCTS TRADING',
                'is_individual' => 1,
                'is_active' => 1,
                'created_at' => '2025-01-24 23:46:25',
                'updated_at' => '2025-01-24 23:46:25',
            ),
            200 => 
            array (
                'id' => 209,
                'name' => 'CHARISA MAE BAIT-IT',
                'is_individual' => 1,
                'is_active' => 1,
                'created_at' => '2025-01-30 19:11:57',
                'updated_at' => '2025-01-30 19:11:57',
            ),
            201 => 
            array (
                'id' => 210,
                'name' => 'CAMION ENTERPRISES',
                'is_individual' => 1,
                'is_active' => 1,
                'created_at' => '2025-01-30 22:46:31',
                'updated_at' => '2025-01-30 22:46:31',
            ),
            202 => 
            array (
                'id' => 211,
                'name' => 'ALVIN SPECIAL YEMA',
                'is_individual' => 1,
                'is_active' => 1,
                'created_at' => '2025-02-05 00:41:09',
                'updated_at' => '2025-02-05 00:41:09',
            ),
            203 => 
            array (
                'id' => 212,
                'name' => 'ADONIS JUNK SHOP',
                'is_individual' => 1,
                'is_active' => 1,
                'created_at' => '2025-02-13 00:38:38',
                'updated_at' => '2025-02-13 00:38:38',
            ),
            204 => 
            array (
                'id' => 213,
                'name' => 'KIM B. BAKESHOP',
                'is_individual' => 1,
                'is_active' => 1,
                'created_at' => '2025-02-18 23:55:23',
                'updated_at' => '2025-02-18 23:55:23',
            ),
            205 => 
            array (
                'id' => 214,
                'name' => 'JG DOROTEO',
                'is_individual' => 1,
                'is_active' => 1,
                'created_at' => '2025-02-20 01:34:49',
                'updated_at' => '2025-02-20 01:34:49',
            ),
            206 => 
            array (
                'id' => 215,
                'name' => 'PROHTECT TRADING & COMPUTER SOLUTIONS',
                'is_individual' => 1,
                'is_active' => 1,
                'created_at' => '2025-02-28 00:05:42',
                'updated_at' => '2025-02-28 00:05:42',
            ),
            207 => 
            array (
                'id' => 216,
                'name' => 'J-DEL\'S TAILORING',
                'is_individual' => 1,
                'is_active' => 1,
                'created_at' => '2025-02-28 01:23:43',
                'updated_at' => '2025-02-28 01:23:43',
            ),
            208 => 
            array (
                'id' => 217,
                'name' => 'AARBENCO',
                'is_individual' => 1,
                'is_active' => 1,
                'created_at' => '2025-02-28 01:27:42',
                'updated_at' => '2025-02-28 01:27:42',
            ),
            209 => 
            array (
                'id' => 218,
                'name' => 'ROQUE SALAZAR',
                'is_individual' => 1,
                'is_active' => 1,
                'created_at' => '2025-03-11 21:33:20',
                'updated_at' => '2025-03-11 21:33:20',
            ),
            210 => 
            array (
                'id' => 219,
                'name' => 'CONCEPCION SL PALMOS',
                'is_individual' => 1,
                'is_active' => 1,
                'created_at' => '2025-03-11 21:34:41',
                'updated_at' => '2025-03-11 21:34:41',
            ),
            211 => 
            array (
                'id' => 220,
                'name' => 'JAYMARK HANDICRAFT',
                'is_individual' => 1,
                'is_active' => 1,
                'created_at' => '2025-03-12 00:52:27',
                'updated_at' => '2025-03-12 00:52:27',
            ),
            212 => 
            array (
                'id' => 221,
                'name' => 'OMARSHE RICE MILL',
                'is_individual' => 1,
                'is_active' => 1,
                'created_at' => '2025-03-26 17:26:47',
                'updated_at' => '2025-03-26 17:26:47',
            ),
            213 => 
            array (
                'id' => 222,
                'name' => 'RAMSTY FARM',
                'is_individual' => 1,
                'is_active' => 1,
                'created_at' => '2025-03-27 02:06:28',
                'updated_at' => '2025-03-27 02:06:28',
            ),
            214 => 
            array (
                'id' => 223,
                'name' => 'REBECCA RICE TRADING',
                'is_individual' => 1,
                'is_active' => 1,
                'created_at' => '2025-03-27 02:13:17',
                'updated_at' => '2025-03-27 02:13:17',
            ),
            215 => 
            array (
                'id' => 227,
                'name' => 'URBAN HARBEST',
                'is_individual' => 1,
                'is_active' => 1,
                'created_at' => '2025-03-31 19:31:35',
                'updated_at' => '2025-03-31 19:31:35',
            ),
            216 => 
            array (
                'id' => 228,
                'name' => 'JASON\'S BREAD HOUSE',
                'is_individual' => 1,
                'is_active' => 1,
                'created_at' => '2025-03-31 19:32:35',
                'updated_at' => '2025-03-31 19:32:35',
            ),
            217 => 
            array (
                'id' => 229,
                'name' => 'FA APULI',
                'is_individual' => 1,
                'is_active' => 1,
                'created_at' => '2025-04-03 02:31:09',
                'updated_at' => '2025-04-03 02:31:09',
            ),
            218 => 
            array (
                'id' => 230,
                'name' => 'DM MEATSHOP',
                'is_individual' => 1,
                'is_active' => 1,
                'created_at' => '2025-04-03 02:31:35',
                'updated_at' => '2025-04-03 02:31:35',
            ),
            219 => 
            array (
                'id' => 231,
                'name' => 'AGUA DE KUYA',
                'is_individual' => 1,
                'is_active' => 1,
                'created_at' => '2025-04-07 20:11:38',
                'updated_at' => '2025-04-07 20:11:38',
            ),
            220 => 
            array (
                'id' => 232,
                'name' => 'WMSU',
                'is_individual' => 1,
                'is_active' => 1,
                'created_at' => '2025-04-14 22:43:46',
                'updated_at' => '2025-04-14 22:43:46',
            ),
            221 => 
            array (
                'id' => 234,
                'name' => 'MDG AGRI AQUA ENTERPRISES',
                'is_individual' => 1,
                'is_active' => 1,
                'created_at' => '2025-04-15 23:28:43',
                'updated_at' => '2025-04-15 23:28:43',
            ),
            222 => 
            array (
                'id' => 235,
                'name' => 'GALAS MULTI-PURPOSE COOP',
                'is_individual' => 1,
                'is_active' => 1,
                'created_at' => '2025-04-29 18:40:35',
                'updated_at' => '2025-04-29 18:40:35',
            ),
            223 => 
            array (
                'id' => 236,
                'name' => 'YSABELLA RICE MILL',
                'is_individual' => 1,
                'is_active' => 1,
                'created_at' => '2025-04-29 19:24:18',
                'updated_at' => '2025-04-29 19:24:18',
            ),
            224 => 
            array (
                'id' => 237,
                'name' => 'LGU-GUTALAC',
                'is_individual' => 1,
                'is_active' => 1,
                'created_at' => '2025-04-29 21:27:10',
                'updated_at' => '2025-04-29 21:27:10',
            ),
            225 => 
            array (
                'id' => 238,
                'name' => '18K TAILORING',
                'is_individual' => 1,
                'is_active' => 1,
                'created_at' => '2025-04-30 18:18:58',
                'updated_at' => '2025-04-30 18:18:58',
            ),
            226 => 
            array (
                'id' => 239,
                'name' => 'ZACKEY CARIDO PALM OIL',
                'is_individual' => 1,
                'is_active' => 1,
                'created_at' => '2025-04-30 18:24:55',
                'updated_at' => '2025-04-30 18:24:55',
            ),
            227 => 
            array (
                'id' => 240,
                'name' => 'JJS AGRI PRODUCTS',
                'is_individual' => 1,
                'is_active' => 1,
                'created_at' => '2025-04-30 21:38:25',
                'updated_at' => '2025-04-30 21:38:25',
            ),
            228 => 
            array (
                'id' => 241,
                'name' => 'K3 FOOD PRODUCTS',
                'is_individual' => 1,
                'is_active' => 1,
                'created_at' => '2025-04-30 23:05:10',
                'updated_at' => '2025-04-30 23:05:10',
            ),
            229 => 
            array (
                'id' => 242,
                'name' => 'THE PROJECT COMPUTER',
                'is_individual' => 1,
                'is_active' => 1,
                'created_at' => '2025-04-30 23:38:09',
                'updated_at' => '2025-04-30 23:38:09',
            ),
            230 => 
            array (
                'id' => 243,
                'name' => 'REMITERA BAKERY',
                'is_individual' => 1,
                'is_active' => 1,
                'created_at' => '2025-04-30 23:47:06',
                'updated_at' => '2025-04-30 23:47:06',
            ),
        ));

        
    }
}