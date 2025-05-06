<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FinanceOpItemsTableSeeder extends Seeder
{
    /**
     * Auto generated seeder file.
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('finance_op_items')->delete();
        
        \DB::table('finance_op_items')->insert(array (
            0 => 
            array (
                'id' => 1,
                'amount' => '10750.00',
                'itemable_id' => 1,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1,
                'created_at' => '2024-08-16 17:03:00',
                'updated_at' => '2024-08-16 17:03:00',
            ),
            1 => 
            array (
                'id' => 2,
                'amount' => '2200.00',
                'itemable_id' => 3,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 2,
                'created_at' => '2024-08-16 17:40:50',
                'updated_at' => '2024-08-16 17:40:50',
            ),
            2 => 
            array (
                'id' => 3,
                'amount' => '1650.00',
                'itemable_id' => 21,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 3,
                'created_at' => '2024-08-18 01:26:49',
                'updated_at' => '2024-08-18 01:26:49',
            ),
            3 => 
            array (
                'id' => 4,
                'amount' => '600.00',
                'itemable_id' => 5,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 4,
                'created_at' => '2024-08-18 01:29:11',
                'updated_at' => '2024-08-18 01:29:11',
            ),
            4 => 
            array (
                'id' => 5,
                'amount' => '500.00',
                'itemable_id' => 23,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 5,
                'created_at' => '2024-08-18 01:30:26',
                'updated_at' => '2024-08-18 01:30:26',
            ),
            5 => 
            array (
                'id' => 6,
                'amount' => '2400.00',
                'itemable_id' => 26,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 6,
                'created_at' => '2024-08-18 01:31:31',
                'updated_at' => '2024-08-18 01:31:31',
            ),
            6 => 
            array (
                'id' => 7,
                'amount' => '2400.00',
                'itemable_id' => 27,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 7,
                'created_at' => '2024-08-18 01:32:28',
                'updated_at' => '2024-08-18 01:32:28',
            ),
            7 => 
            array (
                'id' => 8,
                'amount' => '1000.00',
                'itemable_id' => 4,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 8,
                'created_at' => '2024-08-18 01:34:50',
                'updated_at' => '2024-08-18 01:34:50',
            ),
            8 => 
            array (
                'id' => 9,
                'amount' => '1000.00',
                'itemable_id' => 34,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 9,
                'created_at' => '2024-08-18 01:35:36',
                'updated_at' => '2024-08-18 01:35:36',
            ),
            9 => 
            array (
                'id' => 10,
                'amount' => '2000.00',
                'itemable_id' => 35,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 10,
                'created_at' => '2024-08-18 01:35:53',
                'updated_at' => '2024-08-18 01:35:53',
            ),
            10 => 
            array (
                'id' => 11,
                'amount' => '3100.00',
                'itemable_id' => 36,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 11,
                'created_at' => '2024-08-18 01:36:19',
                'updated_at' => '2024-08-18 01:36:19',
            ),
            11 => 
            array (
                'id' => 12,
                'amount' => '850.00',
                'itemable_id' => 37,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 12,
                'created_at' => '2024-08-18 01:37:08',
                'updated_at' => '2024-08-18 01:37:08',
            ),
            12 => 
            array (
                'id' => 13,
                'amount' => '9300.00',
                'itemable_id' => 39,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 13,
                'created_at' => '2024-08-18 01:38:22',
                'updated_at' => '2024-08-18 01:38:22',
            ),
            13 => 
            array (
                'id' => 14,
                'amount' => '21420.00',
                'itemable_id' => 49,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 14,
                'created_at' => '2024-08-18 01:38:43',
                'updated_at' => '2024-08-18 01:38:43',
            ),
            14 => 
            array (
                'id' => 15,
                'amount' => '2100.00',
                'itemable_id' => 43,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 15,
                'created_at' => '2024-08-18 01:39:02',
                'updated_at' => '2024-08-18 01:39:02',
            ),
            15 => 
            array (
                'id' => 16,
                'amount' => '2500.00',
                'itemable_id' => 48,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 16,
                'created_at' => '2024-08-18 01:39:20',
                'updated_at' => '2024-08-18 01:39:20',
            ),
            16 => 
            array (
                'id' => 17,
                'amount' => '17600.00',
                'itemable_id' => 51,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 17,
                'created_at' => '2024-08-18 01:39:41',
                'updated_at' => '2024-08-18 01:39:41',
            ),
            17 => 
            array (
                'id' => 18,
                'amount' => '3300.00',
                'itemable_id' => 50,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 17,
                'created_at' => '2024-08-18 01:39:41',
                'updated_at' => '2024-08-18 01:39:41',
            ),
            18 => 
            array (
                'id' => 19,
                'amount' => '6000.00',
                'itemable_id' => 45,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 18,
                'created_at' => '2024-08-18 01:40:13',
                'updated_at' => '2024-08-18 01:40:13',
            ),
            19 => 
            array (
                'id' => 20,
                'amount' => '1550.00',
                'itemable_id' => 53,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 19,
                'created_at' => '2024-08-18 01:40:40',
                'updated_at' => '2024-08-18 01:40:40',
            ),
            20 => 
            array (
                'id' => 21,
                'amount' => '6550.00',
                'itemable_id' => 42,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 20,
                'created_at' => '2024-08-18 01:41:23',
                'updated_at' => '2024-08-18 01:41:23',
            ),
            21 => 
            array (
                'id' => 22,
                'amount' => '550.00',
                'itemable_id' => 41,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 20,
                'created_at' => '2024-08-18 01:41:23',
                'updated_at' => '2024-08-18 01:41:23',
            ),
            22 => 
            array (
                'id' => 23,
                'amount' => '4000.00',
                'itemable_id' => 54,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 21,
                'created_at' => '2024-08-18 01:41:39',
                'updated_at' => '2024-08-18 01:41:39',
            ),
            23 => 
            array (
                'id' => 24,
                'amount' => '6920.00',
                'itemable_id' => 56,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 22,
                'created_at' => '2024-08-18 01:41:57',
                'updated_at' => '2024-08-18 01:41:57',
            ),
            24 => 
            array (
                'id' => 25,
                'amount' => '1000.00',
                'itemable_id' => 55,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 22,
                'created_at' => '2024-08-18 01:41:57',
                'updated_at' => '2024-08-18 01:41:57',
            ),
            25 => 
            array (
                'id' => 26,
                'amount' => '500.00',
                'itemable_id' => 57,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 23,
                'created_at' => '2024-08-18 01:43:10',
                'updated_at' => '2024-08-18 01:43:10',
            ),
            26 => 
            array (
                'id' => 27,
                'amount' => '1550.00',
                'itemable_id' => 58,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 24,
                'created_at' => '2024-08-18 01:43:26',
                'updated_at' => '2024-08-18 01:43:26',
            ),
            27 => 
            array (
                'id' => 28,
                'amount' => '800.00',
                'itemable_id' => 62,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 25,
                'created_at' => '2024-08-18 01:43:38',
                'updated_at' => '2024-08-18 01:43:38',
            ),
            28 => 
            array (
                'id' => 29,
                'amount' => '8612.00',
                'itemable_id' => 38,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 26,
                'created_at' => '2024-08-18 01:43:53',
                'updated_at' => '2024-08-18 01:43:53',
            ),
            29 => 
            array (
                'id' => 30,
                'amount' => '1550.00',
                'itemable_id' => 64,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 27,
                'created_at' => '2024-08-18 01:44:19',
                'updated_at' => '2024-08-18 01:44:19',
            ),
            30 => 
            array (
                'id' => 31,
                'amount' => '1550.00',
                'itemable_id' => 65,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 28,
                'created_at' => '2024-08-18 01:44:36',
                'updated_at' => '2024-08-18 01:44:36',
            ),
            31 => 
            array (
                'id' => 32,
                'amount' => '4650.00',
                'itemable_id' => 66,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 29,
                'created_at' => '2024-08-18 01:44:55',
                'updated_at' => '2024-08-18 01:44:55',
            ),
            32 => 
            array (
                'id' => 33,
                'amount' => '4200.00',
                'itemable_id' => 69,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 30,
                'created_at' => '2024-08-18 01:45:16',
                'updated_at' => '2024-08-18 01:45:16',
            ),
            33 => 
            array (
                'id' => 34,
                'amount' => '3750.00',
                'itemable_id' => 68,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 30,
                'created_at' => '2024-08-18 01:45:16',
                'updated_at' => '2024-08-18 01:45:16',
            ),
            34 => 
            array (
                'id' => 35,
                'amount' => '500.00',
                'itemable_id' => 70,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 31,
                'created_at' => '2024-08-18 01:45:33',
                'updated_at' => '2024-08-18 01:45:33',
            ),
            35 => 
            array (
                'id' => 36,
                'amount' => '1750.00',
                'itemable_id' => 63,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 32,
                'created_at' => '2024-08-18 01:45:47',
                'updated_at' => '2024-08-18 01:45:47',
            ),
            36 => 
            array (
                'id' => 37,
                'amount' => '900.00',
                'itemable_id' => 71,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 33,
                'created_at' => '2024-08-18 01:46:48',
                'updated_at' => '2024-08-18 01:46:48',
            ),
            37 => 
            array (
                'id' => 38,
                'amount' => '1550.00',
                'itemable_id' => 72,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 34,
                'created_at' => '2024-08-18 01:47:05',
                'updated_at' => '2024-08-18 01:47:05',
            ),
            38 => 
            array (
                'id' => 39,
                'amount' => '6920.00',
                'itemable_id' => 73,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 35,
                'created_at' => '2024-08-18 01:47:22',
                'updated_at' => '2024-08-18 01:47:22',
            ),
            39 => 
            array (
                'id' => 40,
                'amount' => '1500.00',
                'itemable_id' => 74,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 36,
                'created_at' => '2024-08-18 01:47:37',
                'updated_at' => '2024-08-18 01:47:37',
            ),
            40 => 
            array (
                'id' => 41,
                'amount' => '1550.00',
                'itemable_id' => 67,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 37,
                'created_at' => '2024-08-18 01:47:52',
                'updated_at' => '2024-08-18 01:47:52',
            ),
            41 => 
            array (
                'id' => 42,
                'amount' => '1550.00',
                'itemable_id' => 77,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 38,
                'created_at' => '2024-08-18 01:48:12',
                'updated_at' => '2024-08-18 01:48:12',
            ),
            42 => 
            array (
                'id' => 43,
                'amount' => '1550.00',
                'itemable_id' => 75,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 39,
                'created_at' => '2024-08-18 01:48:31',
                'updated_at' => '2024-08-18 01:48:31',
            ),
            43 => 
            array (
                'id' => 44,
                'amount' => '1550.00',
                'itemable_id' => 76,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 40,
                'created_at' => '2024-08-18 01:48:42',
                'updated_at' => '2024-08-18 01:48:42',
            ),
            44 => 
            array (
                'id' => 45,
                'amount' => '550.00',
                'itemable_id' => 78,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 41,
                'created_at' => '2024-08-18 01:49:01',
                'updated_at' => '2024-08-18 01:49:01',
            ),
            45 => 
            array (
                'id' => 46,
                'amount' => '500.00',
                'itemable_id' => 81,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 42,
                'created_at' => '2024-08-18 01:49:16',
                'updated_at' => '2024-08-18 01:49:16',
            ),
            46 => 
            array (
                'id' => 47,
                'amount' => '950.00',
                'itemable_id' => 1,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 43,
                'created_at' => '2024-08-19 16:47:56',
                'updated_at' => '2024-08-19 16:47:56',
            ),
            47 => 
            array (
                'id' => 48,
                'amount' => '464.00',
                'itemable_id' => 2,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 44,
                'created_at' => '2024-08-19 16:50:43',
                'updated_at' => '2024-08-19 16:50:43',
            ),
            48 => 
            array (
                'id' => 49,
                'amount' => '69445.00',
                'itemable_id' => 3,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 45,
                'created_at' => '2024-08-19 16:53:11',
                'updated_at' => '2024-08-19 16:53:11',
            ),
            49 => 
            array (
                'id' => 50,
                'amount' => '8400.00',
                'itemable_id' => 82,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 46,
                'created_at' => '2024-08-19 23:29:39',
                'updated_at' => '2024-08-19 23:29:39',
            ),
            50 => 
            array (
                'id' => 51,
                'amount' => '500.00',
                'itemable_id' => 84,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 47,
                'created_at' => '2024-08-19 23:30:17',
                'updated_at' => '2024-08-19 23:30:17',
            ),
            51 => 
            array (
                'id' => 52,
                'amount' => '10850.00',
                'itemable_id' => 85,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 48,
                'created_at' => '2024-08-19 23:30:45',
                'updated_at' => '2024-08-19 23:30:45',
            ),
            52 => 
            array (
                'id' => 53,
                'amount' => '550.00',
                'itemable_id' => 86,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 49,
                'created_at' => '2024-08-19 23:53:41',
                'updated_at' => '2024-08-19 23:53:41',
            ),
            53 => 
            array (
                'id' => 54,
                'amount' => '550.00',
                'itemable_id' => 87,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 50,
                'created_at' => '2024-08-19 23:54:13',
                'updated_at' => '2024-08-19 23:54:13',
            ),
            54 => 
            array (
                'id' => 55,
                'amount' => '900.00',
                'itemable_id' => 88,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 51,
                'created_at' => '2024-08-19 23:54:33',
                'updated_at' => '2024-08-19 23:54:33',
            ),
            55 => 
            array (
                'id' => 66,
                'amount' => '4867500.00',
                'itemable_id' => 15,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 64,
                'created_at' => '2024-08-20 00:24:43',
                'updated_at' => '2024-08-20 00:24:43',
            ),
            56 => 
            array (
                'id' => 67,
                'amount' => '31792.00',
                'itemable_id' => 91,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 65,
                'created_at' => '2024-08-27 20:56:21',
                'updated_at' => '2024-08-27 20:56:21',
            ),
            57 => 
            array (
                'id' => 68,
                'amount' => '1550.00',
                'itemable_id' => 89,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 66,
                'created_at' => '2024-08-28 23:50:34',
                'updated_at' => '2024-08-28 23:50:34',
            ),
            58 => 
            array (
                'id' => 69,
                'amount' => '2000.00',
                'itemable_id' => 90,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 67,
                'created_at' => '2024-08-28 23:53:17',
                'updated_at' => '2024-08-28 23:53:17',
            ),
            59 => 
            array (
                'id' => 75,
                'amount' => '1550.00',
                'itemable_id' => 113,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 73,
                'created_at' => '2024-08-29 00:05:14',
                'updated_at' => '2024-08-29 00:05:14',
            ),
            60 => 
            array (
                'id' => 76,
                'amount' => '2100.00',
                'itemable_id' => 115,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 74,
                'created_at' => '2024-08-29 00:06:48',
                'updated_at' => '2024-08-29 00:06:48',
            ),
            61 => 
            array (
                'id' => 77,
                'amount' => '550.00',
                'itemable_id' => 116,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 75,
                'created_at' => '2024-08-29 00:07:54',
                'updated_at' => '2024-08-29 00:07:54',
            ),
            62 => 
            array (
                'id' => 78,
                'amount' => '2000.00',
                'itemable_id' => 117,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 76,
                'created_at' => '2024-08-29 00:08:51',
                'updated_at' => '2024-08-29 00:08:51',
            ),
            63 => 
            array (
                'id' => 79,
                'amount' => '2000.00',
                'itemable_id' => 118,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 77,
                'created_at' => '2024-08-31 21:49:21',
                'updated_at' => '2024-08-31 21:49:21',
            ),
            64 => 
            array (
                'id' => 80,
                'amount' => '1000.00',
                'itemable_id' => 121,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 78,
                'created_at' => '2024-08-31 21:50:29',
                'updated_at' => '2024-08-31 21:50:29',
            ),
            65 => 
            array (
                'id' => 81,
                'amount' => '1100.00',
                'itemable_id' => 120,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 78,
                'created_at' => '2024-08-31 21:50:29',
                'updated_at' => '2024-08-31 21:50:29',
            ),
            66 => 
            array (
                'id' => 82,
                'amount' => '5820.00',
                'itemable_id' => 119,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 78,
                'created_at' => '2024-08-31 21:50:29',
                'updated_at' => '2024-08-31 21:50:29',
            ),
            67 => 
            array (
                'id' => 83,
                'amount' => '5050.00',
                'itemable_id' => 123,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 79,
                'created_at' => '2024-08-31 21:58:58',
                'updated_at' => '2024-08-31 21:58:58',
            ),
            68 => 
            array (
                'id' => 84,
                'amount' => '2500.00',
                'itemable_id' => 124,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 80,
                'created_at' => '2024-08-31 22:00:54',
                'updated_at' => '2024-08-31 22:00:54',
            ),
            69 => 
            array (
                'id' => 85,
                'amount' => '500.00',
                'itemable_id' => 122,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 81,
                'created_at' => '2024-08-31 22:03:09',
                'updated_at' => '2024-08-31 22:03:09',
            ),
            70 => 
            array (
                'id' => 86,
                'amount' => '500.00',
                'itemable_id' => 126,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 82,
                'created_at' => '2024-08-31 22:03:40',
                'updated_at' => '2024-08-31 22:03:40',
            ),
            71 => 
            array (
                'id' => 87,
                'amount' => '500.00',
                'itemable_id' => 125,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 83,
                'created_at' => '2024-08-31 22:03:49',
                'updated_at' => '2024-08-31 22:03:49',
            ),
            72 => 
            array (
                'id' => 88,
                'amount' => '2850.00',
                'itemable_id' => 129,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 84,
                'created_at' => '2024-08-31 22:07:54',
                'updated_at' => '2024-08-31 22:07:54',
            ),
            73 => 
            array (
                'id' => 89,
                'amount' => '500.00',
                'itemable_id' => 128,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 84,
                'created_at' => '2024-08-31 22:07:54',
                'updated_at' => '2024-08-31 22:07:54',
            ),
            74 => 
            array (
                'id' => 90,
                'amount' => '550.00',
                'itemable_id' => 130,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 85,
                'created_at' => '2024-08-31 22:11:04',
                'updated_at' => '2024-08-31 22:11:04',
            ),
            75 => 
            array (
                'id' => 91,
                'amount' => '2500.00',
                'itemable_id' => 131,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 86,
                'created_at' => '2024-08-31 22:11:34',
                'updated_at' => '2024-08-31 22:11:34',
            ),
            76 => 
            array (
                'id' => 92,
                'amount' => '550.00',
                'itemable_id' => 138,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 87,
                'created_at' => '2024-08-31 22:12:26',
                'updated_at' => '2024-08-31 22:12:26',
            ),
            77 => 
            array (
                'id' => 93,
                'amount' => '700.00',
                'itemable_id' => 137,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 87,
                'created_at' => '2024-08-31 22:12:26',
                'updated_at' => '2024-08-31 22:12:26',
            ),
            78 => 
            array (
                'id' => 94,
                'amount' => '4750.00',
                'itemable_id' => 141,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 88,
                'created_at' => '2024-08-31 22:12:50',
                'updated_at' => '2024-08-31 22:12:50',
            ),
            79 => 
            array (
                'id' => 95,
                'amount' => '6920.00',
                'itemable_id' => 144,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 89,
                'created_at' => '2024-08-31 22:14:05',
                'updated_at' => '2024-08-31 22:14:05',
            ),
            80 => 
            array (
                'id' => 96,
                'amount' => '1550.00',
                'itemable_id' => 143,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 89,
                'created_at' => '2024-08-31 22:14:05',
                'updated_at' => '2024-08-31 22:14:05',
            ),
            81 => 
            array (
                'id' => 97,
                'amount' => '1650.00',
                'itemable_id' => 142,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 89,
                'created_at' => '2024-08-31 22:14:05',
                'updated_at' => '2024-08-31 22:14:05',
            ),
            82 => 
            array (
                'id' => 98,
                'amount' => '500.00',
                'itemable_id' => 145,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 90,
                'created_at' => '2024-08-31 22:14:28',
                'updated_at' => '2024-08-31 22:14:28',
            ),
            83 => 
            array (
                'id' => 99,
                'amount' => '1550.00',
                'itemable_id' => 146,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 91,
                'created_at' => '2024-08-31 22:15:41',
                'updated_at' => '2024-08-31 22:15:41',
            ),
            84 => 
            array (
                'id' => 100,
                'amount' => '17700.00',
                'itemable_id' => 147,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 92,
                'created_at' => '2024-08-31 22:16:43',
                'updated_at' => '2024-08-31 22:16:43',
            ),
            85 => 
            array (
                'id' => 101,
                'amount' => '5500.00',
                'itemable_id' => 149,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 93,
                'created_at' => '2024-08-31 22:17:06',
                'updated_at' => '2024-08-31 22:17:06',
            ),
            86 => 
            array (
                'id' => 102,
                'amount' => '2100.00',
                'itemable_id' => 150,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 94,
                'created_at' => '2024-08-31 22:18:06',
                'updated_at' => '2024-08-31 22:18:06',
            ),
            87 => 
            array (
                'id' => 103,
                'amount' => '2500.00',
                'itemable_id' => 156,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 95,
                'created_at' => '2024-08-31 22:18:49',
                'updated_at' => '2024-08-31 22:18:49',
            ),
            88 => 
            array (
                'id' => 104,
                'amount' => '550.00',
                'itemable_id' => 151,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 96,
                'created_at' => '2024-08-31 22:19:14',
                'updated_at' => '2024-08-31 22:19:14',
            ),
            89 => 
            array (
                'id' => 105,
                'amount' => '6272.00',
                'itemable_id' => 152,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 97,
                'created_at' => '2024-08-31 22:20:22',
                'updated_at' => '2024-08-31 22:20:22',
            ),
            90 => 
            array (
                'id' => 106,
                'amount' => '10950.00',
                'itemable_id' => 153,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 98,
                'created_at' => '2024-08-31 22:21:27',
                'updated_at' => '2024-08-31 22:21:27',
            ),
            91 => 
            array (
                'id' => 107,
                'amount' => '4000.00',
                'itemable_id' => 136,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 98,
                'created_at' => '2024-08-31 22:21:27',
                'updated_at' => '2024-08-31 22:21:27',
            ),
            92 => 
            array (
                'id' => 108,
                'amount' => '2650.00',
                'itemable_id' => 135,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 98,
                'created_at' => '2024-08-31 22:21:27',
                'updated_at' => '2024-08-31 22:21:27',
            ),
            93 => 
            array (
                'id' => 109,
                'amount' => '2200.00',
                'itemable_id' => 134,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 98,
                'created_at' => '2024-08-31 22:21:27',
                'updated_at' => '2024-08-31 22:21:27',
            ),
            94 => 
            array (
                'id' => 110,
                'amount' => '13940.00',
                'itemable_id' => 133,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 98,
                'created_at' => '2024-08-31 22:21:27',
                'updated_at' => '2024-08-31 22:21:27',
            ),
            95 => 
            array (
                'id' => 111,
                'amount' => '1550.00',
                'itemable_id' => 154,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 99,
                'created_at' => '2024-08-31 22:21:45',
                'updated_at' => '2024-08-31 22:21:45',
            ),
            96 => 
            array (
                'id' => 112,
                'amount' => '500.00',
                'itemable_id' => 157,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 100,
                'created_at' => '2024-08-31 22:22:09',
                'updated_at' => '2024-08-31 22:22:09',
            ),
            97 => 
            array (
                'id' => 113,
                'amount' => '2100.00',
                'itemable_id' => 158,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 101,
                'created_at' => '2024-08-31 22:22:58',
                'updated_at' => '2024-08-31 22:22:58',
            ),
            98 => 
            array (
                'id' => 114,
                'amount' => '2000.00',
                'itemable_id' => 159,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 102,
                'created_at' => '2024-08-31 22:23:50',
                'updated_at' => '2024-08-31 22:23:50',
            ),
            99 => 
            array (
                'id' => 115,
                'amount' => '500.00',
                'itemable_id' => 160,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 103,
                'created_at' => '2024-08-31 22:24:18',
                'updated_at' => '2024-08-31 22:24:18',
            ),
            100 => 
            array (
                'id' => 116,
                'amount' => '2500.00',
                'itemable_id' => 163,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 104,
                'created_at' => '2024-08-31 22:24:29',
                'updated_at' => '2024-08-31 22:24:29',
            ),
            101 => 
            array (
                'id' => 117,
                'amount' => '500.00',
                'itemable_id' => 161,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 105,
                'created_at' => '2024-08-31 22:24:46',
                'updated_at' => '2024-08-31 22:24:46',
            ),
            102 => 
            array (
                'id' => 118,
                'amount' => '850.00',
                'itemable_id' => 166,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 106,
                'created_at' => '2024-08-31 22:25:06',
                'updated_at' => '2024-08-31 22:25:06',
            ),
            103 => 
            array (
                'id' => 119,
                'amount' => '7750.00',
                'itemable_id' => 165,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 106,
                'created_at' => '2024-08-31 22:25:06',
                'updated_at' => '2024-08-31 22:25:06',
            ),
            104 => 
            array (
                'id' => 120,
                'amount' => '1050.00',
                'itemable_id' => 16,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 107,
                'created_at' => '2024-08-31 22:28:38',
                'updated_at' => '2024-08-31 22:28:38',
            ),
            105 => 
            array (
                'id' => 121,
                'amount' => '1050.00',
                'itemable_id' => 17,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 108,
                'created_at' => '2024-08-31 22:29:00',
                'updated_at' => '2024-08-31 22:29:00',
            ),
            106 => 
            array (
                'id' => 122,
                'amount' => '1100.00',
                'itemable_id' => 18,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 109,
                'created_at' => '2024-08-31 22:32:45',
                'updated_at' => '2024-08-31 22:32:45',
            ),
            107 => 
            array (
                'id' => 124,
                'amount' => '17366.67',
                'itemable_id' => 19,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 111,
                'created_at' => '2024-09-01 00:12:33',
                'updated_at' => '2024-09-01 00:12:33',
            ),
            108 => 
            array (
                'id' => 125,
                'amount' => '17366.67',
                'itemable_id' => 20,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 111,
                'created_at' => '2024-09-01 00:12:33',
                'updated_at' => '2024-09-01 00:12:33',
            ),
            109 => 
            array (
                'id' => 126,
                'amount' => '9558.00',
                'itemable_id' => 21,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 112,
                'created_at' => '2024-09-01 00:14:46',
                'updated_at' => '2024-09-01 00:14:46',
            ),
            110 => 
            array (
                'id' => 128,
                'amount' => '82778.00',
                'itemable_id' => 23,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 114,
                'created_at' => '2024-09-01 00:17:18',
                'updated_at' => '2024-09-01 00:17:18',
            ),
            111 => 
            array (
                'id' => 136,
                'amount' => '78270.00',
                'itemable_id' => 31,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 122,
                'created_at' => '2024-09-01 01:01:01',
                'updated_at' => '2024-09-01 01:01:01',
            ),
            112 => 
            array (
                'id' => 137,
                'amount' => '41666.67',
                'itemable_id' => 32,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 123,
                'created_at' => '2024-09-01 01:02:23',
                'updated_at' => '2024-09-01 01:02:23',
            ),
            113 => 
            array (
                'id' => 138,
                'amount' => '13423.00',
                'itemable_id' => 33,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 124,
                'created_at' => '2024-09-01 01:03:21',
                'updated_at' => '2024-09-01 01:03:21',
            ),
            114 => 
            array (
                'id' => 141,
                'amount' => '20833.00',
                'itemable_id' => 36,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 126,
                'created_at' => '2024-09-01 01:05:36',
                'updated_at' => '2024-09-01 01:05:36',
            ),
            115 => 
            array (
                'id' => 142,
                'amount' => '20833.00',
                'itemable_id' => 37,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 126,
                'created_at' => '2024-09-01 01:05:36',
                'updated_at' => '2024-09-01 01:05:36',
            ),
            116 => 
            array (
                'id' => 144,
                'amount' => '69445.00',
                'itemable_id' => 39,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 128,
                'created_at' => '2024-09-01 01:11:00',
                'updated_at' => '2024-09-01 01:11:00',
            ),
            117 => 
            array (
                'id' => 145,
                'amount' => '30000.00',
                'itemable_id' => 40,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 129,
                'created_at' => '2024-09-01 01:11:42',
                'updated_at' => '2024-09-01 01:11:42',
            ),
            118 => 
            array (
                'id' => 146,
                'amount' => '83334.00',
                'itemable_id' => 41,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 130,
                'created_at' => '2024-09-01 01:12:35',
                'updated_at' => '2024-09-01 01:12:35',
            ),
            119 => 
            array (
                'id' => 148,
                'amount' => '79861.11',
                'itemable_id' => 43,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 132,
                'created_at' => '2024-09-01 01:14:01',
                'updated_at' => '2024-09-01 01:14:01',
            ),
            120 => 
            array (
                'id' => 149,
                'amount' => '27381.67',
                'itemable_id' => 44,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 133,
                'created_at' => '2024-09-01 01:15:34',
                'updated_at' => '2024-09-01 01:15:34',
            ),
            121 => 
            array (
                'id' => 150,
                'amount' => '38333.00',
                'itemable_id' => 45,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 134,
                'created_at' => '2024-09-01 01:16:20',
                'updated_at' => '2024-09-01 01:16:20',
            ),
            122 => 
            array (
                'id' => 152,
                'amount' => '6944.44',
                'itemable_id' => 47,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 136,
                'created_at' => '2024-09-01 01:17:38',
                'updated_at' => '2024-09-01 01:17:38',
            ),
            123 => 
            array (
                'id' => 156,
                'amount' => '42500.00',
                'itemable_id' => 51,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 138,
                'created_at' => '2024-09-01 01:19:24',
                'updated_at' => '2024-09-01 01:19:24',
            ),
            124 => 
            array (
                'id' => 157,
                'amount' => '42500.00',
                'itemable_id' => 52,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 138,
                'created_at' => '2024-09-01 01:19:24',
                'updated_at' => '2024-09-01 01:19:24',
            ),
            125 => 
            array (
                'id' => 158,
                'amount' => '42500.00',
                'itemable_id' => 53,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 138,
                'created_at' => '2024-09-01 01:19:24',
                'updated_at' => '2024-09-01 01:19:24',
            ),
            126 => 
            array (
                'id' => 159,
                'amount' => '17777.78',
                'itemable_id' => 54,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 139,
                'created_at' => '2024-09-01 01:23:31',
                'updated_at' => '2024-09-01 01:23:31',
            ),
            127 => 
            array (
                'id' => 160,
                'amount' => '17777.78',
                'itemable_id' => 55,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 139,
                'created_at' => '2024-09-01 01:23:31',
                'updated_at' => '2024-09-01 01:23:31',
            ),
            128 => 
            array (
                'id' => 161,
                'amount' => '61112.00',
                'itemable_id' => 56,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 140,
                'created_at' => '2024-09-01 01:25:24',
                'updated_at' => '2024-09-01 01:25:24',
            ),
            129 => 
            array (
                'id' => 162,
                'amount' => '61112.00',
                'itemable_id' => 57,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 140,
                'created_at' => '2024-09-01 01:25:24',
                'updated_at' => '2024-09-01 01:25:24',
            ),
            130 => 
            array (
                'id' => 165,
                'amount' => '35833.33',
                'itemable_id' => 60,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 142,
                'created_at' => '2024-09-01 01:27:31',
                'updated_at' => '2024-09-01 01:27:31',
            ),
            131 => 
            array (
                'id' => 166,
                'amount' => '35833.33',
                'itemable_id' => 61,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 142,
                'created_at' => '2024-09-01 01:27:31',
                'updated_at' => '2024-09-01 01:27:31',
            ),
            132 => 
            array (
                'id' => 167,
                'amount' => '35834.00',
                'itemable_id' => 62,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 143,
                'created_at' => '2024-09-01 01:36:51',
                'updated_at' => '2024-09-01 01:36:51',
            ),
            133 => 
            array (
                'id' => 168,
                'amount' => '35834.00',
                'itemable_id' => 63,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 143,
                'created_at' => '2024-09-01 01:36:51',
                'updated_at' => '2024-09-01 01:36:51',
            ),
            134 => 
            array (
                'id' => 169,
                'amount' => '43333.33',
                'itemable_id' => 64,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 144,
                'created_at' => '2024-09-01 01:40:31',
                'updated_at' => '2024-09-01 01:40:31',
            ),
            135 => 
            array (
                'id' => 170,
                'amount' => '43333.33',
                'itemable_id' => 65,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 144,
                'created_at' => '2024-09-01 01:40:31',
                'updated_at' => '2024-09-01 01:40:31',
            ),
            136 => 
            array (
                'id' => 171,
                'amount' => '100000.00',
                'itemable_id' => 66,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 145,
                'created_at' => '2024-09-01 01:43:36',
                'updated_at' => '2024-09-01 01:43:36',
            ),
            137 => 
            array (
                'id' => 173,
                'amount' => '9065.00',
                'itemable_id' => 68,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 147,
                'created_at' => '2024-09-01 01:45:53',
                'updated_at' => '2024-09-01 01:45:53',
            ),
            138 => 
            array (
                'id' => 174,
                'amount' => '27777.00',
                'itemable_id' => 69,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 148,
                'created_at' => '2024-09-01 01:46:44',
                'updated_at' => '2024-09-01 01:46:44',
            ),
            139 => 
            array (
                'id' => 175,
                'amount' => '9691.00',
                'itemable_id' => 70,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 149,
                'created_at' => '2024-09-01 01:47:37',
                'updated_at' => '2024-09-01 01:47:37',
            ),
            140 => 
            array (
                'id' => 176,
                'amount' => '12639.00',
                'itemable_id' => 71,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 150,
                'created_at' => '2024-09-01 01:49:06',
                'updated_at' => '2024-09-01 01:49:06',
            ),
            141 => 
            array (
                'id' => 177,
                'amount' => '12639.00',
                'itemable_id' => 72,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 150,
                'created_at' => '2024-09-01 01:49:06',
                'updated_at' => '2024-09-01 01:49:06',
            ),
            142 => 
            array (
                'id' => 178,
                'amount' => '12639.00',
                'itemable_id' => 73,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 150,
                'created_at' => '2024-09-01 01:49:06',
                'updated_at' => '2024-09-01 01:49:06',
            ),
            143 => 
            array (
                'id' => 179,
                'amount' => '26445.00',
                'itemable_id' => 74,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 151,
                'created_at' => '2024-09-01 01:51:13',
                'updated_at' => '2024-09-01 01:51:13',
            ),
            144 => 
            array (
                'id' => 180,
                'amount' => '38889.00',
                'itemable_id' => 75,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 152,
                'created_at' => '2024-09-01 01:53:00',
                'updated_at' => '2024-09-01 01:53:00',
            ),
            145 => 
            array (
                'id' => 181,
                'amount' => '38889.00',
                'itemable_id' => 76,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 152,
                'created_at' => '2024-09-01 01:53:00',
                'updated_at' => '2024-09-01 01:53:00',
            ),
            146 => 
            array (
                'id' => 182,
                'amount' => '14390.00',
                'itemable_id' => 77,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 153,
                'created_at' => '2024-09-01 01:55:05',
                'updated_at' => '2024-09-01 01:55:05',
            ),
            147 => 
            array (
                'id' => 184,
                'amount' => '16080.00',
                'itemable_id' => 79,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 155,
                'created_at' => '2024-09-01 01:56:24',
                'updated_at' => '2024-09-01 01:56:24',
            ),
            148 => 
            array (
                'id' => 185,
                'amount' => '7139.00',
                'itemable_id' => 80,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 156,
                'created_at' => '2024-09-01 01:57:11',
                'updated_at' => '2024-09-01 01:57:11',
            ),
            149 => 
            array (
                'id' => 186,
                'amount' => '16695.00',
                'itemable_id' => 81,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 157,
                'created_at' => '2024-09-01 01:58:28',
                'updated_at' => '2024-09-01 01:58:28',
            ),
            150 => 
            array (
                'id' => 187,
                'amount' => '47445.00',
                'itemable_id' => 82,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 158,
                'created_at' => '2024-09-01 01:59:15',
                'updated_at' => '2024-09-01 01:59:15',
            ),
            151 => 
            array (
                'id' => 189,
                'amount' => '16116.00',
                'itemable_id' => 84,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 160,
                'created_at' => '2024-09-01 02:03:00',
                'updated_at' => '2024-09-01 02:03:00',
            ),
            152 => 
            array (
                'id' => 190,
                'amount' => '30834.00',
                'itemable_id' => 85,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 161,
                'created_at' => '2024-09-01 02:03:44',
                'updated_at' => '2024-09-01 02:03:44',
            ),
            153 => 
            array (
                'id' => 191,
                'amount' => '15252.00',
                'itemable_id' => 86,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 162,
                'created_at' => '2024-09-01 02:04:31',
                'updated_at' => '2024-09-01 02:04:31',
            ),
            154 => 
            array (
                'id' => 192,
                'amount' => '138890.00',
                'itemable_id' => 87,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 163,
                'created_at' => '2024-09-01 02:14:00',
                'updated_at' => '2024-09-01 02:14:00',
            ),
            155 => 
            array (
                'id' => 193,
                'amount' => '1650.00',
                'itemable_id' => 167,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 164,
                'created_at' => '2024-09-03 00:13:57',
                'updated_at' => '2024-09-03 00:13:57',
            ),
            156 => 
            array (
                'id' => 194,
                'amount' => '1000.00',
                'itemable_id' => 171,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 165,
                'created_at' => '2024-09-03 00:14:28',
                'updated_at' => '2024-09-03 00:14:28',
            ),
            157 => 
            array (
                'id' => 195,
                'amount' => '3520.00',
                'itemable_id' => 174,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 166,
                'created_at' => '2024-09-03 00:14:37',
                'updated_at' => '2024-09-03 00:14:37',
            ),
            158 => 
            array (
                'id' => 196,
                'amount' => '500.00',
                'itemable_id' => 175,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 167,
                'created_at' => '2024-09-03 00:15:04',
                'updated_at' => '2024-09-03 00:15:04',
            ),
            159 => 
            array (
                'id' => 197,
                'amount' => '500.00',
                'itemable_id' => 176,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 168,
                'created_at' => '2024-09-03 00:15:13',
                'updated_at' => '2024-09-03 00:15:13',
            ),
            160 => 
            array (
                'id' => 198,
                'amount' => '2910.00',
                'itemable_id' => 177,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 169,
                'created_at' => '2024-09-03 00:24:23',
                'updated_at' => '2024-09-03 00:24:23',
            ),
            161 => 
            array (
                'id' => 199,
                'amount' => '5760.00',
                'itemable_id' => 168,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 170,
                'created_at' => '2024-09-03 00:25:09',
                'updated_at' => '2024-09-03 00:25:09',
            ),
            162 => 
            array (
                'id' => 200,
                'amount' => '2100.00',
                'itemable_id' => 181,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 171,
                'created_at' => '2024-09-06 00:20:29',
                'updated_at' => '2024-09-06 00:20:29',
            ),
            163 => 
            array (
                'id' => 201,
                'amount' => '4950.00',
                'itemable_id' => 180,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 171,
                'created_at' => '2024-09-06 00:20:29',
                'updated_at' => '2024-09-06 00:20:29',
            ),
            164 => 
            array (
                'id' => 202,
                'amount' => '2800.00',
                'itemable_id' => 179,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 171,
                'created_at' => '2024-09-06 00:20:29',
                'updated_at' => '2024-09-06 00:20:29',
            ),
            165 => 
            array (
                'id' => 203,
                'amount' => '6600.00',
                'itemable_id' => 178,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 171,
                'created_at' => '2024-09-06 00:20:29',
                'updated_at' => '2024-09-06 00:20:29',
            ),
            166 => 
            array (
                'id' => 204,
                'amount' => '23250.00',
                'itemable_id' => 184,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 172,
                'created_at' => '2024-09-06 00:21:47',
                'updated_at' => '2024-09-06 00:21:47',
            ),
            167 => 
            array (
                'id' => 205,
                'amount' => '7000.00',
                'itemable_id' => 183,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 172,
                'created_at' => '2024-09-06 00:21:47',
                'updated_at' => '2024-09-06 00:21:47',
            ),
            168 => 
            array (
                'id' => 206,
                'amount' => '2910.00',
                'itemable_id' => 162,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 173,
                'created_at' => '2024-09-06 00:22:34',
                'updated_at' => '2024-09-06 00:22:34',
            ),
            169 => 
            array (
                'id' => 207,
                'amount' => '5500.00',
                'itemable_id' => 188,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 174,
                'created_at' => '2024-09-06 00:23:01',
                'updated_at' => '2024-09-06 00:23:01',
            ),
            170 => 
            array (
                'id' => 208,
                'amount' => '1400.00',
                'itemable_id' => 187,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 174,
                'created_at' => '2024-09-06 00:23:01',
                'updated_at' => '2024-09-06 00:23:01',
            ),
            171 => 
            array (
                'id' => 209,
                'amount' => '3300.00',
                'itemable_id' => 186,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 174,
                'created_at' => '2024-09-06 00:23:01',
                'updated_at' => '2024-09-06 00:23:01',
            ),
            172 => 
            array (
                'id' => 210,
                'amount' => '3150.00',
                'itemable_id' => 190,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 175,
                'created_at' => '2024-09-06 00:23:23',
                'updated_at' => '2024-09-06 00:23:23',
            ),
            173 => 
            array (
                'id' => 211,
                'amount' => '6525.00',
                'itemable_id' => 79,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 176,
                'created_at' => '2024-09-06 16:52:49',
                'updated_at' => '2024-09-06 16:52:49',
            ),
            174 => 
            array (
                'id' => 212,
                'amount' => '2500.00',
                'itemable_id' => 189,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 177,
                'created_at' => '2024-09-06 16:53:31',
                'updated_at' => '2024-09-06 16:53:31',
            ),
            175 => 
            array (
                'id' => 213,
                'amount' => '500.00',
                'itemable_id' => 191,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 178,
                'created_at' => '2024-09-06 16:54:14',
                'updated_at' => '2024-09-06 16:54:14',
            ),
            176 => 
            array (
                'id' => 214,
                'amount' => '500.00',
                'itemable_id' => 192,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 179,
                'created_at' => '2024-09-06 16:54:30',
                'updated_at' => '2024-09-06 16:54:30',
            ),
            177 => 
            array (
                'id' => 215,
                'amount' => '1650.00',
                'itemable_id' => 194,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 180,
                'created_at' => '2024-09-06 16:55:15',
                'updated_at' => '2024-09-06 16:55:15',
            ),
            178 => 
            array (
                'id' => 216,
                'amount' => '500.00',
                'itemable_id' => 195,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 181,
                'created_at' => '2024-09-06 16:55:41',
                'updated_at' => '2024-09-06 16:55:41',
            ),
            179 => 
            array (
                'id' => 217,
                'amount' => '9629.25',
                'itemable_id' => 88,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 182,
                'created_at' => '2024-09-06 17:05:30',
                'updated_at' => '2024-09-06 17:05:30',
            ),
            180 => 
            array (
                'id' => 218,
                'amount' => '500.00',
                'itemable_id' => 196,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 183,
                'created_at' => '2024-09-06 18:19:53',
                'updated_at' => '2024-09-06 18:19:53',
            ),
            181 => 
            array (
                'id' => 219,
                'amount' => '3700.00',
                'itemable_id' => 89,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 184,
                'created_at' => '2024-09-06 18:21:52',
                'updated_at' => '2024-09-06 18:21:52',
            ),
            182 => 
            array (
                'id' => 220,
                'amount' => '1750.00',
                'itemable_id' => 197,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 185,
                'created_at' => '2024-09-06 22:09:07',
                'updated_at' => '2024-09-06 22:09:07',
            ),
            183 => 
            array (
                'id' => 221,
                'amount' => '4500.00',
                'itemable_id' => 200,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 186,
                'created_at' => '2024-09-09 18:18:08',
                'updated_at' => '2024-09-09 18:18:08',
            ),
            184 => 
            array (
                'id' => 222,
                'amount' => '18210.00',
                'itemable_id' => 199,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 186,
                'created_at' => '2024-09-09 18:18:08',
                'updated_at' => '2024-09-09 18:18:08',
            ),
            185 => 
            array (
                'id' => 223,
                'amount' => '4950.00',
                'itemable_id' => 198,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 186,
                'created_at' => '2024-09-09 18:18:08',
                'updated_at' => '2024-09-09 18:18:08',
            ),
            186 => 
            array (
                'id' => 224,
                'amount' => '1000.00',
                'itemable_id' => 201,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 187,
                'created_at' => '2024-09-09 18:19:30',
                'updated_at' => '2024-09-09 18:19:30',
            ),
            187 => 
            array (
                'id' => 225,
                'amount' => '7570.00',
                'itemable_id' => 33,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 188,
                'created_at' => '2024-09-09 18:34:49',
                'updated_at' => '2024-09-09 18:34:49',
            ),
            188 => 
            array (
                'id' => 226,
                'amount' => '1475.00',
                'itemable_id' => 32,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 188,
                'created_at' => '2024-09-09 18:34:49',
                'updated_at' => '2024-09-09 18:34:49',
            ),
            189 => 
            array (
                'id' => 227,
                'amount' => '2650.00',
                'itemable_id' => 31,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 188,
                'created_at' => '2024-09-09 18:34:49',
                'updated_at' => '2024-09-09 18:34:49',
            ),
            190 => 
            array (
                'id' => 228,
                'amount' => '7570.00',
                'itemable_id' => 30,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 188,
                'created_at' => '2024-09-09 18:34:49',
                'updated_at' => '2024-09-09 18:34:49',
            ),
            191 => 
            array (
                'id' => 229,
                'amount' => '1475.00',
                'itemable_id' => 29,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 188,
                'created_at' => '2024-09-09 18:34:49',
                'updated_at' => '2024-09-09 18:34:49',
            ),
            192 => 
            array (
                'id' => 230,
                'amount' => '1650.00',
                'itemable_id' => 28,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 188,
                'created_at' => '2024-09-09 18:34:49',
                'updated_at' => '2024-09-09 18:34:49',
            ),
            193 => 
            array (
                'id' => 231,
                'amount' => '7570.00',
                'itemable_id' => 25,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 188,
                'created_at' => '2024-09-09 18:34:50',
                'updated_at' => '2024-09-09 18:34:50',
            ),
            194 => 
            array (
                'id' => 232,
                'amount' => '1475.00',
                'itemable_id' => 24,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 188,
                'created_at' => '2024-09-09 18:34:50',
                'updated_at' => '2024-09-09 18:34:50',
            ),
            195 => 
            array (
                'id' => 233,
                'amount' => '2100.00',
                'itemable_id' => 22,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 188,
                'created_at' => '2024-09-09 18:34:50',
                'updated_at' => '2024-09-09 18:34:50',
            ),
            196 => 
            array (
                'id' => 234,
                'amount' => '7570.00',
                'itemable_id' => 20,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 188,
                'created_at' => '2024-09-09 18:34:50',
                'updated_at' => '2024-09-09 18:34:50',
            ),
            197 => 
            array (
                'id' => 235,
                'amount' => '2053.00',
                'itemable_id' => 19,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 188,
                'created_at' => '2024-09-09 18:34:50',
                'updated_at' => '2024-09-09 18:34:50',
            ),
            198 => 
            array (
                'id' => 236,
                'amount' => '1650.00',
                'itemable_id' => 18,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 188,
                'created_at' => '2024-09-09 18:34:50',
                'updated_at' => '2024-09-09 18:34:50',
            ),
            199 => 
            array (
                'id' => 237,
                'amount' => '7570.00',
                'itemable_id' => 17,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 188,
                'created_at' => '2024-09-09 18:34:50',
                'updated_at' => '2024-09-09 18:34:50',
            ),
            200 => 
            array (
                'id' => 238,
                'amount' => '2053.00',
                'itemable_id' => 16,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 188,
                'created_at' => '2024-09-09 18:34:50',
                'updated_at' => '2024-09-09 18:34:50',
            ),
            201 => 
            array (
                'id' => 239,
                'amount' => '1650.00',
                'itemable_id' => 15,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 188,
                'created_at' => '2024-09-09 18:34:50',
                'updated_at' => '2024-09-09 18:34:50',
            ),
            202 => 
            array (
                'id' => 240,
                'amount' => '7570.00',
                'itemable_id' => 14,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 188,
                'created_at' => '2024-09-09 18:34:50',
                'updated_at' => '2024-09-09 18:34:50',
            ),
            203 => 
            array (
                'id' => 241,
                'amount' => '2053.00',
                'itemable_id' => 13,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 188,
                'created_at' => '2024-09-09 18:34:50',
                'updated_at' => '2024-09-09 18:34:50',
            ),
            204 => 
            array (
                'id' => 242,
                'amount' => '1650.00',
                'itemable_id' => 12,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 188,
                'created_at' => '2024-09-09 18:34:50',
                'updated_at' => '2024-09-09 18:34:50',
            ),
            205 => 
            array (
                'id' => 243,
                'amount' => '7570.00',
                'itemable_id' => 11,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 188,
                'created_at' => '2024-09-09 18:34:50',
                'updated_at' => '2024-09-09 18:34:50',
            ),
            206 => 
            array (
                'id' => 244,
                'amount' => '2053.00',
                'itemable_id' => 10,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 188,
                'created_at' => '2024-09-09 18:34:50',
                'updated_at' => '2024-09-09 18:34:50',
            ),
            207 => 
            array (
                'id' => 245,
                'amount' => '1650.00',
                'itemable_id' => 9,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 188,
                'created_at' => '2024-09-09 18:34:50',
                'updated_at' => '2024-09-09 18:34:50',
            ),
            208 => 
            array (
                'id' => 246,
                'amount' => '7570.00',
                'itemable_id' => 8,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 188,
                'created_at' => '2024-09-09 18:34:50',
                'updated_at' => '2024-09-09 18:34:50',
            ),
            209 => 
            array (
                'id' => 247,
                'amount' => '2053.00',
                'itemable_id' => 7,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 188,
                'created_at' => '2024-09-09 18:34:50',
                'updated_at' => '2024-09-09 18:34:50',
            ),
            210 => 
            array (
                'id' => 248,
                'amount' => '1650.00',
                'itemable_id' => 6,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 188,
                'created_at' => '2024-09-09 18:34:50',
                'updated_at' => '2024-09-09 18:34:50',
            ),
            211 => 
            array (
                'id' => 249,
                'amount' => '500.00',
                'itemable_id' => 202,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 190,
                'created_at' => '2024-09-09 19:25:39',
                'updated_at' => '2024-09-09 19:25:39',
            ),
            212 => 
            array (
                'id' => 250,
                'amount' => '6920.00',
                'itemable_id' => 204,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 191,
                'created_at' => '2024-09-09 21:34:27',
                'updated_at' => '2024-09-09 21:34:27',
            ),
            213 => 
            array (
                'id' => 251,
                'amount' => '1550.00',
                'itemable_id' => 203,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 191,
                'created_at' => '2024-09-09 21:34:27',
                'updated_at' => '2024-09-09 21:34:27',
            ),
            214 => 
            array (
                'id' => 252,
                'amount' => '2400.00',
                'itemable_id' => 193,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 192,
                'created_at' => '2024-09-09 22:11:34',
                'updated_at' => '2024-09-09 22:11:34',
            ),
            215 => 
            array (
                'id' => 253,
                'amount' => '550.00',
                'itemable_id' => 205,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 193,
                'created_at' => '2024-09-10 17:16:25',
                'updated_at' => '2024-09-10 17:16:25',
            ),
            216 => 
            array (
                'id' => 254,
                'amount' => '550.00',
                'itemable_id' => 206,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 194,
                'created_at' => '2024-09-10 17:17:19',
                'updated_at' => '2024-09-10 17:17:19',
            ),
            217 => 
            array (
                'id' => 255,
                'amount' => '2650.00',
                'itemable_id' => 207,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 195,
                'created_at' => '2024-09-10 18:29:38',
                'updated_at' => '2024-09-10 18:29:38',
            ),
            218 => 
            array (
                'id' => 256,
                'amount' => '1550.00',
                'itemable_id' => 208,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 196,
                'created_at' => '2024-09-10 19:11:28',
                'updated_at' => '2024-09-10 19:11:28',
            ),
            219 => 
            array (
                'id' => 257,
                'amount' => '4400.00',
                'itemable_id' => 209,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 197,
                'created_at' => '2024-09-10 19:52:38',
                'updated_at' => '2024-09-10 19:52:38',
            ),
            220 => 
            array (
                'id' => 258,
                'amount' => '6000.00',
                'itemable_id' => 210,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 198,
                'created_at' => '2024-09-10 21:56:31',
                'updated_at' => '2024-09-10 21:56:31',
            ),
            221 => 
            array (
                'id' => 259,
                'amount' => '550.00',
                'itemable_id' => 211,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 199,
                'created_at' => '2024-09-10 22:05:58',
                'updated_at' => '2024-09-10 22:05:58',
            ),
            222 => 
            array (
                'id' => 260,
                'amount' => '1650.00',
                'itemable_id' => 214,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 200,
                'created_at' => '2024-09-11 17:35:45',
                'updated_at' => '2024-09-11 17:35:45',
            ),
            223 => 
            array (
                'id' => 261,
                'amount' => '3000.00',
                'itemable_id' => 90,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 201,
                'created_at' => '2024-09-11 17:53:40',
                'updated_at' => '2024-09-11 17:53:40',
            ),
            224 => 
            array (
                'id' => 262,
                'amount' => '3668.00',
                'itemable_id' => 91,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 202,
                'created_at' => '2024-09-11 18:07:02',
                'updated_at' => '2024-09-11 18:07:02',
            ),
            225 => 
            array (
                'id' => 263,
                'amount' => '10917.00',
                'itemable_id' => 92,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 202,
                'created_at' => '2024-09-11 18:07:02',
                'updated_at' => '2024-09-11 18:07:02',
            ),
            226 => 
            array (
                'id' => 264,
                'amount' => '5415.00',
                'itemable_id' => 93,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 202,
                'created_at' => '2024-09-11 18:07:02',
                'updated_at' => '2024-09-11 18:07:02',
            ),
            227 => 
            array (
                'id' => 265,
                'amount' => '6000.00',
                'itemable_id' => 215,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 203,
                'created_at' => '2024-09-11 18:11:30',
                'updated_at' => '2024-09-11 18:11:30',
            ),
            228 => 
            array (
                'id' => 266,
                'amount' => '2500.00',
                'itemable_id' => 216,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 204,
                'created_at' => '2024-09-11 18:30:03',
                'updated_at' => '2024-09-11 18:30:03',
            ),
            229 => 
            array (
                'id' => 267,
                'amount' => '1500.00',
                'itemable_id' => 218,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 205,
                'created_at' => '2024-09-11 22:49:00',
                'updated_at' => '2024-09-11 22:49:00',
            ),
            230 => 
            array (
                'id' => 268,
                'amount' => '3100.00',
                'itemable_id' => 219,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 206,
                'created_at' => '2024-09-11 23:59:08',
                'updated_at' => '2024-09-11 23:59:08',
            ),
            231 => 
            array (
                'id' => 269,
                'amount' => '13840.00',
                'itemable_id' => 220,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 206,
                'created_at' => '2024-09-11 23:59:08',
                'updated_at' => '2024-09-11 23:59:08',
            ),
            232 => 
            array (
                'id' => 270,
                'amount' => '2500.00',
                'itemable_id' => 222,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 207,
                'created_at' => '2024-09-12 18:40:41',
                'updated_at' => '2024-09-12 18:40:41',
            ),
            233 => 
            array (
                'id' => 271,
                'amount' => '330.00',
                'itemable_id' => 94,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 208,
                'created_at' => '2024-09-12 19:39:24',
                'updated_at' => '2024-09-12 19:39:24',
            ),
            234 => 
            array (
                'id' => 272,
                'amount' => '450.00',
                'itemable_id' => 95,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 209,
                'created_at' => '2024-09-12 19:41:57',
                'updated_at' => '2024-09-12 19:41:57',
            ),
            235 => 
            array (
                'id' => 273,
                'amount' => '330.00',
                'itemable_id' => 96,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 210,
                'created_at' => '2024-09-12 19:43:56',
                'updated_at' => '2024-09-12 19:43:56',
            ),
            236 => 
            array (
                'id' => 274,
                'amount' => '330.00',
                'itemable_id' => 97,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 211,
                'created_at' => '2024-09-12 19:45:22',
                'updated_at' => '2024-09-12 19:45:22',
            ),
            237 => 
            array (
                'id' => 275,
                'amount' => '330.00',
                'itemable_id' => 98,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 212,
                'created_at' => '2024-09-12 19:46:12',
                'updated_at' => '2024-09-12 19:46:12',
            ),
            238 => 
            array (
                'id' => 276,
                'amount' => '330.00',
                'itemable_id' => 99,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 213,
                'created_at' => '2024-09-12 19:47:23',
                'updated_at' => '2024-09-12 19:47:23',
            ),
            239 => 
            array (
                'id' => 277,
                'amount' => '14550.00',
                'itemable_id' => 212,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 214,
                'created_at' => '2024-09-12 22:16:22',
                'updated_at' => '2024-09-12 22:16:22',
            ),
            240 => 
            array (
                'id' => 278,
                'amount' => '69445.00',
                'itemable_id' => 100,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 215,
                'created_at' => '2024-09-12 23:34:43',
                'updated_at' => '2024-09-12 23:34:43',
            ),
            241 => 
            array (
                'id' => 279,
                'amount' => '750.00',
                'itemable_id' => 228,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 216,
                'created_at' => '2024-09-13 20:45:37',
                'updated_at' => '2024-09-13 20:45:37',
            ),
            242 => 
            array (
                'id' => 280,
                'amount' => '9000.00',
                'itemable_id' => 225,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 217,
                'created_at' => '2024-09-17 17:47:19',
                'updated_at' => '2024-09-17 17:47:19',
            ),
            243 => 
            array (
                'id' => 281,
                'amount' => '20700.00',
                'itemable_id' => 233,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 218,
                'created_at' => '2024-09-17 19:44:00',
                'updated_at' => '2024-09-17 19:44:00',
            ),
            244 => 
            array (
                'id' => 282,
                'amount' => '11850.00',
                'itemable_id' => 232,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 219,
                'created_at' => '2024-09-17 19:45:16',
                'updated_at' => '2024-09-17 19:45:16',
            ),
            245 => 
            array (
                'id' => 283,
                'amount' => '1080.00',
                'itemable_id' => 234,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 220,
                'created_at' => '2024-09-17 20:01:09',
                'updated_at' => '2024-09-17 20:01:09',
            ),
            246 => 
            array (
                'id' => 284,
                'amount' => '2500.00',
                'itemable_id' => 235,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 221,
                'created_at' => '2024-09-17 20:30:34',
                'updated_at' => '2024-09-17 20:30:34',
            ),
            247 => 
            array (
                'id' => 285,
                'amount' => '2750.00',
                'itemable_id' => 240,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 222,
                'created_at' => '2024-09-18 17:24:40',
                'updated_at' => '2024-09-18 17:24:40',
            ),
            248 => 
            array (
                'id' => 286,
                'amount' => '15890.00',
                'itemable_id' => 229,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 223,
                'created_at' => '2024-09-18 18:11:31',
                'updated_at' => '2024-09-18 18:11:31',
            ),
            249 => 
            array (
                'id' => 287,
                'amount' => '2500.00',
                'itemable_id' => 241,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 224,
                'created_at' => '2024-09-18 18:51:18',
                'updated_at' => '2024-09-18 18:51:18',
            ),
            250 => 
            array (
                'id' => 288,
                'amount' => '3000.00',
                'itemable_id' => 242,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 225,
                'created_at' => '2024-09-18 19:11:35',
                'updated_at' => '2024-09-18 19:11:35',
            ),
            251 => 
            array (
                'id' => 289,
                'amount' => '3300.00',
                'itemable_id' => 243,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 226,
                'created_at' => '2024-09-18 20:05:24',
                'updated_at' => '2024-09-18 20:05:24',
            ),
            252 => 
            array (
                'id' => 290,
                'amount' => '1000.00',
                'itemable_id' => 246,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 227,
                'created_at' => '2024-09-18 20:41:17',
                'updated_at' => '2024-09-18 20:41:17',
            ),
            253 => 
            array (
                'id' => 291,
                'amount' => '3300.00',
                'itemable_id' => 245,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 227,
                'created_at' => '2024-09-18 20:41:17',
                'updated_at' => '2024-09-18 20:41:17',
            ),
            254 => 
            array (
                'id' => 292,
                'amount' => '3300.00',
                'itemable_id' => 244,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 227,
                'created_at' => '2024-09-18 20:41:17',
                'updated_at' => '2024-09-18 20:41:17',
            ),
            255 => 
            array (
                'id' => 293,
                'amount' => '1550.00',
                'itemable_id' => 247,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 228,
                'created_at' => '2024-09-18 20:47:12',
                'updated_at' => '2024-09-18 20:47:12',
            ),
            256 => 
            array (
                'id' => 294,
                'amount' => '3500.00',
                'itemable_id' => 248,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 229,
                'created_at' => '2024-09-18 22:05:09',
                'updated_at' => '2024-09-18 22:05:09',
            ),
            257 => 
            array (
                'id' => 295,
                'amount' => '645.08',
                'itemable_id' => 101,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 230,
                'created_at' => '2024-09-18 22:39:56',
                'updated_at' => '2024-09-18 22:39:56',
            ),
            258 => 
            array (
                'id' => 296,
                'amount' => '7500.00',
                'itemable_id' => 252,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 231,
                'created_at' => '2024-09-19 18:09:51',
                'updated_at' => '2024-09-19 18:09:51',
            ),
            259 => 
            array (
                'id' => 297,
                'amount' => '5250.00',
                'itemable_id' => 253,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 232,
                'created_at' => '2024-09-19 18:46:43',
                'updated_at' => '2024-09-19 18:46:43',
            ),
            260 => 
            array (
                'id' => 298,
                'amount' => '3000.00',
                'itemable_id' => 254,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 233,
                'created_at' => '2024-09-19 19:42:47',
                'updated_at' => '2024-09-19 19:42:47',
            ),
            261 => 
            array (
                'id' => 299,
                'amount' => '500.00',
                'itemable_id' => 255,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 234,
                'created_at' => '2024-09-19 19:50:14',
                'updated_at' => '2024-09-19 19:50:14',
            ),
            262 => 
            array (
                'id' => 300,
                'amount' => '2000.00',
                'itemable_id' => 259,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 235,
                'created_at' => '2024-09-20 17:56:03',
                'updated_at' => '2024-09-20 17:56:03',
            ),
            263 => 
            array (
                'id' => 301,
                'amount' => '3300.00',
                'itemable_id' => 261,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 236,
                'created_at' => '2024-09-20 18:42:47',
                'updated_at' => '2024-09-20 18:42:47',
            ),
            264 => 
            array (
                'id' => 302,
                'amount' => '3250.00',
                'itemable_id' => 263,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 237,
                'created_at' => '2024-09-20 23:27:14',
                'updated_at' => '2024-09-20 23:27:14',
            ),
            265 => 
            array (
                'id' => 303,
                'amount' => '1000.00',
                'itemable_id' => 262,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 238,
                'created_at' => '2024-09-20 23:27:48',
                'updated_at' => '2024-09-20 23:27:48',
            ),
            266 => 
            array (
                'id' => 304,
                'amount' => '1550.00',
                'itemable_id' => 267,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 239,
                'created_at' => '2024-09-23 17:01:05',
                'updated_at' => '2024-09-23 17:01:05',
            ),
            267 => 
            array (
                'id' => 305,
                'amount' => '2618.00',
                'itemable_id' => 266,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 239,
                'created_at' => '2024-09-23 17:01:05',
                'updated_at' => '2024-09-23 17:01:05',
            ),
            268 => 
            array (
                'id' => 306,
                'amount' => '2000.00',
                'itemable_id' => 102,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 240,
                'created_at' => '2024-09-23 17:04:45',
                'updated_at' => '2024-09-23 17:04:45',
            ),
            269 => 
            array (
                'id' => 307,
                'amount' => '450.00',
                'itemable_id' => 103,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 241,
                'created_at' => '2024-09-23 17:34:15',
                'updated_at' => '2024-09-23 17:34:15',
            ),
            270 => 
            array (
                'id' => 308,
                'amount' => '330.00',
                'itemable_id' => 104,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 242,
                'created_at' => '2024-09-23 17:37:09',
                'updated_at' => '2024-09-23 17:37:09',
            ),
            271 => 
            array (
                'id' => 309,
                'amount' => '450.00',
                'itemable_id' => 105,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 243,
                'created_at' => '2024-09-23 17:42:02',
                'updated_at' => '2024-09-23 17:42:02',
            ),
            272 => 
            array (
                'id' => 310,
                'amount' => '330.00',
                'itemable_id' => 106,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 244,
                'created_at' => '2024-09-23 17:46:20',
                'updated_at' => '2024-09-23 17:46:20',
            ),
            273 => 
            array (
                'id' => 311,
                'amount' => '6900.00',
                'itemable_id' => 269,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 245,
                'created_at' => '2024-09-23 18:15:56',
                'updated_at' => '2024-09-23 18:15:56',
            ),
            274 => 
            array (
                'id' => 312,
                'amount' => '4150.00',
                'itemable_id' => 268,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 245,
                'created_at' => '2024-09-23 18:15:56',
                'updated_at' => '2024-09-23 18:15:56',
            ),
            275 => 
            array (
                'id' => 313,
                'amount' => '2400.00',
                'itemable_id' => 271,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 246,
                'created_at' => '2024-09-23 20:59:04',
                'updated_at' => '2024-09-23 20:59:04',
            ),
            276 => 
            array (
                'id' => 314,
                'amount' => '4500.00',
                'itemable_id' => 238,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 247,
                'created_at' => '2024-09-23 22:30:19',
                'updated_at' => '2024-09-23 22:30:19',
            ),
            277 => 
            array (
                'id' => 315,
                'amount' => '2000.00',
                'itemable_id' => 237,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 248,
                'created_at' => '2024-09-23 22:31:00',
                'updated_at' => '2024-09-23 22:31:00',
            ),
            278 => 
            array (
                'id' => 316,
                'amount' => '12000.00',
                'itemable_id' => 236,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 248,
                'created_at' => '2024-09-23 22:31:00',
                'updated_at' => '2024-09-23 22:31:00',
            ),
            279 => 
            array (
                'id' => 317,
                'amount' => '2100.00',
                'itemable_id' => 272,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 249,
                'created_at' => '2024-09-24 18:40:49',
                'updated_at' => '2024-09-24 18:40:49',
            ),
            280 => 
            array (
                'id' => 318,
                'amount' => '4750.00',
                'itemable_id' => 273,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 250,
                'created_at' => '2024-09-24 18:59:56',
                'updated_at' => '2024-09-24 18:59:56',
            ),
            281 => 
            array (
                'id' => 319,
                'amount' => '3000.00',
                'itemable_id' => 274,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 251,
                'created_at' => '2024-09-24 19:39:26',
                'updated_at' => '2024-09-24 19:39:26',
            ),
            282 => 
            array (
                'id' => 320,
                'amount' => '5500.00',
                'itemable_id' => 275,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 252,
                'created_at' => '2024-09-24 20:03:39',
                'updated_at' => '2024-09-24 20:03:39',
            ),
            283 => 
            array (
                'id' => 321,
                'amount' => '6920.00',
                'itemable_id' => 277,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 253,
                'created_at' => '2024-09-24 21:23:17',
                'updated_at' => '2024-09-24 21:23:17',
            ),
            284 => 
            array (
                'id' => 322,
                'amount' => '2650.00',
                'itemable_id' => 276,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 253,
                'created_at' => '2024-09-24 21:23:17',
                'updated_at' => '2024-09-24 21:23:17',
            ),
            285 => 
            array (
                'id' => 323,
                'amount' => '414.64',
                'itemable_id' => 107,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 254,
                'created_at' => '2024-09-24 21:56:00',
                'updated_at' => '2024-09-24 21:56:00',
            ),
            286 => 
            array (
                'id' => 324,
                'amount' => '1750.00',
                'itemable_id' => 282,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 255,
                'created_at' => '2024-09-24 22:16:19',
                'updated_at' => '2024-09-24 22:16:19',
            ),
            287 => 
            array (
                'id' => 325,
                'amount' => '2580.00',
                'itemable_id' => 280,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 255,
                'created_at' => '2024-09-24 22:16:19',
                'updated_at' => '2024-09-24 22:16:19',
            ),
            288 => 
            array (
                'id' => 326,
                'amount' => '1100.00',
                'itemable_id' => 279,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 255,
                'created_at' => '2024-09-24 22:16:19',
                'updated_at' => '2024-09-24 22:16:19',
            ),
            289 => 
            array (
                'id' => 327,
                'amount' => '500.00',
                'itemable_id' => 283,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 256,
                'created_at' => '2024-09-24 22:32:12',
                'updated_at' => '2024-09-24 22:32:12',
            ),
            290 => 
            array (
                'id' => 328,
                'amount' => '1080.00',
                'itemable_id' => 284,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 257,
                'created_at' => '2024-09-25 17:50:01',
                'updated_at' => '2024-09-25 17:50:01',
            ),
            291 => 
            array (
                'id' => 329,
                'amount' => '11400.00',
                'itemable_id' => 285,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 258,
                'created_at' => '2024-09-25 18:18:58',
                'updated_at' => '2024-09-25 18:18:58',
            ),
            292 => 
            array (
                'id' => 330,
                'amount' => '2500.00',
                'itemable_id' => 286,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 259,
                'created_at' => '2024-09-25 21:03:13',
                'updated_at' => '2024-09-25 21:03:13',
            ),
            293 => 
            array (
                'id' => 331,
                'amount' => '2100.00',
                'itemable_id' => 290,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 260,
                'created_at' => '2024-09-25 21:33:27',
                'updated_at' => '2024-09-25 21:33:27',
            ),
            294 => 
            array (
                'id' => 332,
                'amount' => '10850.00',
                'itemable_id' => 291,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 261,
                'created_at' => '2024-09-25 22:10:12',
                'updated_at' => '2024-09-25 22:10:12',
            ),
            295 => 
            array (
                'id' => 333,
                'amount' => '1000.00',
                'itemable_id' => 292,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 262,
                'created_at' => '2024-09-25 22:21:56',
                'updated_at' => '2024-09-25 22:21:56',
            ),
            296 => 
            array (
                'id' => 334,
                'amount' => '4050.00',
                'itemable_id' => 293,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 263,
                'created_at' => '2024-09-25 22:40:13',
                'updated_at' => '2024-09-25 22:40:13',
            ),
            297 => 
            array (
                'id' => 335,
                'amount' => '330.00',
                'itemable_id' => 108,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 264,
                'created_at' => '2024-09-26 00:37:44',
                'updated_at' => '2024-09-26 00:37:44',
            ),
            298 => 
            array (
                'id' => 336,
                'amount' => '450.00',
                'itemable_id' => 109,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 265,
                'created_at' => '2024-09-26 00:41:10',
                'updated_at' => '2024-09-26 00:41:10',
            ),
            299 => 
            array (
                'id' => 337,
                'amount' => '450.00',
                'itemable_id' => 110,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 266,
                'created_at' => '2024-09-26 00:42:07',
                'updated_at' => '2024-09-26 00:42:07',
            ),
            300 => 
            array (
                'id' => 338,
                'amount' => '450.00',
                'itemable_id' => 111,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 267,
                'created_at' => '2024-09-26 00:42:43',
                'updated_at' => '2024-09-26 00:42:43',
            ),
            301 => 
            array (
                'id' => 339,
                'amount' => '970.00',
                'itemable_id' => 112,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 268,
                'created_at' => '2024-09-26 00:43:22',
                'updated_at' => '2024-09-26 00:43:22',
            ),
            302 => 
            array (
                'id' => 340,
                'amount' => '330.00',
                'itemable_id' => 113,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 269,
                'created_at' => '2024-09-26 00:45:54',
                'updated_at' => '2024-09-26 00:45:54',
            ),
            303 => 
            array (
                'id' => 341,
                'amount' => '330.00',
                'itemable_id' => 114,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 270,
                'created_at' => '2024-09-26 00:46:37',
                'updated_at' => '2024-09-26 00:46:37',
            ),
            304 => 
            array (
                'id' => 342,
                'amount' => '450.00',
                'itemable_id' => 115,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 271,
                'created_at' => '2024-09-26 00:47:15',
                'updated_at' => '2024-09-26 00:47:15',
            ),
            305 => 
            array (
                'id' => 343,
                'amount' => '2500.00',
                'itemable_id' => 295,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 272,
                'created_at' => '2024-09-26 16:22:15',
                'updated_at' => '2024-09-26 16:22:15',
            ),
            306 => 
            array (
                'id' => 344,
                'amount' => '1550.00',
                'itemable_id' => 296,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 273,
                'created_at' => '2024-09-26 17:42:49',
                'updated_at' => '2024-09-26 17:42:49',
            ),
            307 => 
            array (
                'id' => 345,
                'amount' => '500.00',
                'itemable_id' => 297,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 274,
                'created_at' => '2024-09-26 17:43:17',
                'updated_at' => '2024-09-26 17:43:17',
            ),
            308 => 
            array (
                'id' => 346,
                'amount' => '2889.15',
                'itemable_id' => 116,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 275,
                'created_at' => '2024-09-26 19:00:12',
                'updated_at' => '2024-09-26 19:00:12',
            ),
            309 => 
            array (
                'id' => 347,
                'amount' => '6000.00',
                'itemable_id' => 301,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 276,
                'created_at' => '2024-09-26 19:49:13',
                'updated_at' => '2024-09-26 19:49:13',
            ),
            310 => 
            array (
                'id' => 348,
                'amount' => '6900.00',
                'itemable_id' => 300,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 276,
                'created_at' => '2024-09-26 19:49:13',
                'updated_at' => '2024-09-26 19:49:13',
            ),
            311 => 
            array (
                'id' => 349,
                'amount' => '11532.00',
                'itemable_id' => 299,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 276,
                'created_at' => '2024-09-26 19:49:13',
                'updated_at' => '2024-09-26 19:49:13',
            ),
            312 => 
            array (
                'id' => 350,
                'amount' => '15150.00',
                'itemable_id' => 298,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 276,
                'created_at' => '2024-09-26 19:49:13',
                'updated_at' => '2024-09-26 19:49:13',
            ),
            313 => 
            array (
                'id' => 351,
                'amount' => '8000.00',
                'itemable_id' => 302,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 277,
                'created_at' => '2024-09-26 21:06:55',
                'updated_at' => '2024-09-26 21:06:55',
            ),
            314 => 
            array (
                'id' => 352,
                'amount' => '500.00',
                'itemable_id' => 303,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 278,
                'created_at' => '2024-09-26 21:45:32',
                'updated_at' => '2024-09-26 21:45:32',
            ),
            315 => 
            array (
                'id' => 353,
                'amount' => '1325.00',
                'itemable_id' => 304,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 279,
                'created_at' => '2024-09-26 21:59:12',
                'updated_at' => '2024-09-26 21:59:12',
            ),
            316 => 
            array (
                'id' => 354,
                'amount' => '2000.00',
                'itemable_id' => 306,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 280,
                'created_at' => '2024-09-27 17:16:05',
                'updated_at' => '2024-09-27 17:16:05',
            ),
            317 => 
            array (
                'id' => 355,
                'amount' => '7950.00',
                'itemable_id' => 294,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 281,
                'created_at' => '2024-09-27 18:14:42',
                'updated_at' => '2024-09-27 18:14:42',
            ),
            318 => 
            array (
                'id' => 356,
                'amount' => '325.00',
                'itemable_id' => 287,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 282,
                'created_at' => '2024-09-27 18:15:19',
                'updated_at' => '2024-09-27 18:15:19',
            ),
            319 => 
            array (
                'id' => 357,
                'amount' => '2000.00',
                'itemable_id' => 289,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 283,
                'created_at' => '2024-09-27 18:17:47',
                'updated_at' => '2024-09-27 18:17:47',
            ),
            320 => 
            array (
                'id' => 358,
                'amount' => '1200.00',
                'itemable_id' => 288,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 283,
                'created_at' => '2024-09-27 18:17:47',
                'updated_at' => '2024-09-27 18:17:47',
            ),
            321 => 
            array (
                'id' => 359,
                'amount' => '1750.00',
                'itemable_id' => 305,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 284,
                'created_at' => '2024-09-27 19:06:09',
                'updated_at' => '2024-09-27 19:06:09',
            ),
            322 => 
            array (
                'id' => 360,
                'amount' => '1200.00',
                'itemable_id' => 307,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 285,
                'created_at' => '2024-09-27 22:36:55',
                'updated_at' => '2024-09-27 22:36:55',
            ),
            323 => 
            array (
                'id' => 361,
                'amount' => '156945.00',
                'itemable_id' => 117,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 286,
                'created_at' => '2024-09-30 18:02:15',
                'updated_at' => '2024-09-30 18:02:15',
            ),
            324 => 
            array (
                'id' => 362,
                'amount' => '8336.00',
                'itemable_id' => 118,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 287,
                'created_at' => '2024-09-30 18:18:30',
                'updated_at' => '2024-09-30 18:18:30',
            ),
            325 => 
            array (
                'id' => 363,
                'amount' => '21664.00',
                'itemable_id' => 119,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 287,
                'created_at' => '2024-09-30 18:18:30',
                'updated_at' => '2024-09-30 18:18:30',
            ),
            326 => 
            array (
                'id' => 364,
                'amount' => '13423.00',
                'itemable_id' => 120,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 288,
                'created_at' => '2024-09-30 18:23:44',
                'updated_at' => '2024-09-30 18:23:44',
            ),
            327 => 
            array (
                'id' => 365,
                'amount' => '41666.67',
                'itemable_id' => 121,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 289,
                'created_at' => '2024-09-30 18:27:32',
                'updated_at' => '2024-09-30 18:27:32',
            ),
            328 => 
            array (
                'id' => 366,
                'amount' => '82770.00',
                'itemable_id' => 122,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 290,
                'created_at' => '2024-09-30 18:30:05',
                'updated_at' => '2024-09-30 18:30:05',
            ),
            329 => 
            array (
                'id' => 367,
                'amount' => '9558.00',
                'itemable_id' => 123,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 291,
                'created_at' => '2024-09-30 18:32:36',
                'updated_at' => '2024-09-30 18:32:36',
            ),
            330 => 
            array (
                'id' => 368,
                'amount' => '15612.00',
                'itemable_id' => 124,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 292,
                'created_at' => '2024-09-30 18:37:46',
                'updated_at' => '2024-09-30 18:37:46',
            ),
            331 => 
            array (
                'id' => 369,
                'amount' => '39167.00',
                'itemable_id' => 125,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 293,
                'created_at' => '2024-09-30 18:40:19',
                'updated_at' => '2024-09-30 18:40:19',
            ),
            332 => 
            array (
                'id' => 370,
                'amount' => '79689.00',
                'itemable_id' => 126,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 294,
                'created_at' => '2024-09-30 18:42:42',
                'updated_at' => '2024-09-30 18:42:42',
            ),
            333 => 
            array (
                'id' => 371,
                'amount' => '38333.00',
                'itemable_id' => 127,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 295,
                'created_at' => '2024-09-30 18:49:20',
                'updated_at' => '2024-09-30 18:49:20',
            ),
            334 => 
            array (
                'id' => 372,
                'amount' => '33195.00',
                'itemable_id' => 128,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 296,
                'created_at' => '2024-09-30 18:51:34',
                'updated_at' => '2024-09-30 18:51:34',
            ),
            335 => 
            array (
                'id' => 373,
                'amount' => '8770.00',
                'itemable_id' => 129,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 297,
                'created_at' => '2024-09-30 18:53:37',
                'updated_at' => '2024-09-30 18:53:37',
            ),
            336 => 
            array (
                'id' => 374,
                'amount' => '37500.00',
                'itemable_id' => 130,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 298,
                'created_at' => '2024-09-30 18:55:08',
                'updated_at' => '2024-09-30 18:55:08',
            ),
            337 => 
            array (
                'id' => 375,
                'amount' => '21667.00',
                'itemable_id' => 131,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 299,
                'created_at' => '2024-09-30 18:56:58',
                'updated_at' => '2024-09-30 18:56:58',
            ),
            338 => 
            array (
                'id' => 376,
                'amount' => '42916.67',
                'itemable_id' => 132,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 300,
                'created_at' => '2024-09-30 18:59:16',
                'updated_at' => '2024-09-30 18:59:16',
            ),
            339 => 
            array (
                'id' => 377,
                'amount' => '41667.00',
                'itemable_id' => 133,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 301,
                'created_at' => '2024-09-30 19:01:01',
                'updated_at' => '2024-09-30 19:01:01',
            ),
            340 => 
            array (
                'id' => 378,
                'amount' => '16080.00',
                'itemable_id' => 134,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 302,
                'created_at' => '2024-09-30 19:07:48',
                'updated_at' => '2024-09-30 19:07:48',
            ),
            341 => 
            array (
                'id' => 379,
                'amount' => '7139.00',
                'itemable_id' => 135,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 303,
                'created_at' => '2024-09-30 19:14:08',
                'updated_at' => '2024-09-30 19:14:08',
            ),
            342 => 
            array (
                'id' => 380,
                'amount' => '26445.00',
                'itemable_id' => 136,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 304,
                'created_at' => '2024-09-30 19:16:28',
                'updated_at' => '2024-09-30 19:16:28',
            ),
            343 => 
            array (
                'id' => 381,
                'amount' => '10329.00',
                'itemable_id' => 137,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 305,
                'created_at' => '2024-09-30 19:18:42',
                'updated_at' => '2024-09-30 19:18:42',
            ),
            344 => 
            array (
                'id' => 382,
                'amount' => '14390.00',
                'itemable_id' => 138,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 306,
                'created_at' => '2024-09-30 19:22:00',
                'updated_at' => '2024-09-30 19:22:00',
            ),
            345 => 
            array (
                'id' => 383,
                'amount' => '9065.00',
                'itemable_id' => 139,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 307,
                'created_at' => '2024-09-30 19:24:20',
                'updated_at' => '2024-09-30 19:24:20',
            ),
            346 => 
            array (
                'id' => 384,
                'amount' => '27777.00',
                'itemable_id' => 140,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 308,
                'created_at' => '2024-09-30 19:29:04',
                'updated_at' => '2024-09-30 19:29:04',
            ),
            347 => 
            array (
                'id' => 385,
                'amount' => '12639.00',
                'itemable_id' => 141,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 309,
                'created_at' => '2024-09-30 19:31:17',
                'updated_at' => '2024-09-30 19:31:17',
            ),
            348 => 
            array (
                'id' => 386,
                'amount' => '16695.00',
                'itemable_id' => 142,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 310,
                'created_at' => '2024-09-30 19:34:22',
                'updated_at' => '2024-09-30 19:34:22',
            ),
            349 => 
            array (
                'id' => 387,
                'amount' => '47445.00',
                'itemable_id' => 143,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 311,
                'created_at' => '2024-09-30 19:37:20',
                'updated_at' => '2024-09-30 19:37:20',
            ),
            350 => 
            array (
                'id' => 388,
                'amount' => '21167.00',
                'itemable_id' => 144,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 312,
                'created_at' => '2024-09-30 19:39:57',
                'updated_at' => '2024-09-30 19:39:57',
            ),
            351 => 
            array (
                'id' => 389,
                'amount' => '16116.00',
                'itemable_id' => 145,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 313,
                'created_at' => '2024-09-30 19:48:55',
                'updated_at' => '2024-09-30 19:48:55',
            ),
            352 => 
            array (
                'id' => 390,
                'amount' => '38888.00',
                'itemable_id' => 146,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 314,
                'created_at' => '2024-09-30 19:51:38',
                'updated_at' => '2024-09-30 19:51:38',
            ),
            353 => 
            array (
                'id' => 391,
                'amount' => '30834.00',
                'itemable_id' => 147,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 315,
                'created_at' => '2024-09-30 19:55:23',
                'updated_at' => '2024-09-30 19:55:23',
            ),
            354 => 
            array (
                'id' => 392,
                'amount' => '15252.00',
                'itemable_id' => 148,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 316,
                'created_at' => '2024-09-30 19:57:47',
                'updated_at' => '2024-09-30 19:57:47',
            ),
            355 => 
            array (
                'id' => 393,
                'amount' => '85556.00',
                'itemable_id' => 149,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 317,
                'created_at' => '2024-09-30 21:29:50',
                'updated_at' => '2024-09-30 21:29:50',
            ),
            356 => 
            array (
                'id' => 394,
                'amount' => '42778.00',
                'itemable_id' => 150,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 317,
                'created_at' => '2024-09-30 21:29:50',
                'updated_at' => '2024-09-30 21:29:50',
            ),
            357 => 
            array (
                'id' => 395,
                'amount' => '42778.00',
                'itemable_id' => 151,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 317,
                'created_at' => '2024-09-30 21:29:50',
                'updated_at' => '2024-09-30 21:29:50',
            ),
            358 => 
            array (
                'id' => 396,
                'amount' => '42778.00',
                'itemable_id' => 152,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 317,
                'created_at' => '2024-09-30 21:29:50',
                'updated_at' => '2024-09-30 21:29:50',
            ),
            359 => 
            array (
                'id' => 397,
                'amount' => '42500.00',
                'itemable_id' => 153,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 318,
                'created_at' => '2024-09-30 21:46:20',
                'updated_at' => '2024-09-30 21:46:20',
            ),
            360 => 
            array (
                'id' => 398,
                'amount' => '56112.00',
                'itemable_id' => 154,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 319,
                'created_at' => '2024-09-30 21:49:45',
                'updated_at' => '2024-09-30 21:49:45',
            ),
            361 => 
            array (
                'id' => 399,
                'amount' => '56112.00',
                'itemable_id' => 155,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 319,
                'created_at' => '2024-09-30 21:49:45',
                'updated_at' => '2024-09-30 21:49:45',
            ),
            362 => 
            array (
                'id' => 400,
                'amount' => '17777.78',
                'itemable_id' => 156,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 320,
                'created_at' => '2024-09-30 21:52:57',
                'updated_at' => '2024-09-30 21:52:57',
            ),
            363 => 
            array (
                'id' => 401,
                'amount' => '61112.00',
                'itemable_id' => 157,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 321,
                'created_at' => '2024-09-30 21:58:39',
                'updated_at' => '2024-09-30 21:58:39',
            ),
            364 => 
            array (
                'id' => 402,
                'amount' => '61112.00',
                'itemable_id' => 158,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 321,
                'created_at' => '2024-09-30 21:58:39',
                'updated_at' => '2024-09-30 21:58:39',
            ),
            365 => 
            array (
                'id' => 403,
                'amount' => '35833.33',
                'itemable_id' => 159,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 322,
                'created_at' => '2024-09-30 22:02:13',
                'updated_at' => '2024-09-30 22:02:13',
            ),
            366 => 
            array (
                'id' => 404,
                'amount' => '35833.33',
                'itemable_id' => 160,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 322,
                'created_at' => '2024-09-30 22:02:13',
                'updated_at' => '2024-09-30 22:02:13',
            ),
            367 => 
            array (
                'id' => 405,
                'amount' => '43333.33',
                'itemable_id' => 161,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 323,
                'created_at' => '2024-09-30 22:05:22',
                'updated_at' => '2024-09-30 22:05:22',
            ),
            368 => 
            array (
                'id' => 406,
                'amount' => '30000.00',
                'itemable_id' => 162,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 324,
                'created_at' => '2024-09-30 22:16:16',
                'updated_at' => '2024-09-30 22:16:16',
            ),
            369 => 
            array (
                'id' => 407,
                'amount' => '83333.33',
                'itemable_id' => 163,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 325,
                'created_at' => '2024-09-30 22:28:00',
                'updated_at' => '2024-09-30 22:28:00',
            ),
            370 => 
            array (
                'id' => 408,
                'amount' => '17667.67',
                'itemable_id' => 164,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 326,
                'created_at' => '2024-09-30 22:29:46',
                'updated_at' => '2024-09-30 22:29:46',
            ),
            371 => 
            array (
                'id' => 409,
                'amount' => '18334.00',
                'itemable_id' => 165,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 327,
                'created_at' => '2024-09-30 22:31:50',
                'updated_at' => '2024-09-30 22:31:50',
            ),
            372 => 
            array (
                'id' => 410,
                'amount' => '31527.00',
                'itemable_id' => 166,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 328,
                'created_at' => '2024-09-30 22:33:41',
                'updated_at' => '2024-09-30 22:33:41',
            ),
            373 => 
            array (
                'id' => 411,
                'amount' => '83334.00',
                'itemable_id' => 167,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 329,
                'created_at' => '2024-09-30 22:35:29',
                'updated_at' => '2024-09-30 22:35:29',
            ),
            374 => 
            array (
                'id' => 412,
                'amount' => '8770.00',
                'itemable_id' => 168,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 330,
                'created_at' => '2024-09-30 22:37:49',
                'updated_at' => '2024-09-30 22:37:49',
            ),
            375 => 
            array (
                'id' => 413,
                'amount' => '79861.11',
                'itemable_id' => 169,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 331,
                'created_at' => '2024-09-30 22:40:32',
                'updated_at' => '2024-09-30 22:40:32',
            ),
            376 => 
            array (
                'id' => 414,
                'amount' => '37500.00',
                'itemable_id' => 170,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 332,
                'created_at' => '2024-09-30 22:44:38',
                'updated_at' => '2024-09-30 22:44:38',
            ),
            377 => 
            array (
                'id' => 415,
                'amount' => '15612.00',
                'itemable_id' => 171,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 333,
                'created_at' => '2024-09-30 22:50:16',
                'updated_at' => '2024-09-30 22:50:16',
            ),
            378 => 
            array (
                'id' => 416,
                'amount' => '27381.67',
                'itemable_id' => 172,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 334,
                'created_at' => '2024-09-30 22:52:44',
                'updated_at' => '2024-09-30 22:52:44',
            ),
            379 => 
            array (
                'id' => 417,
                'amount' => '21667.00',
                'itemable_id' => 173,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 335,
                'created_at' => '2024-09-30 22:54:49',
                'updated_at' => '2024-09-30 22:54:49',
            ),
            380 => 
            array (
                'id' => 418,
                'amount' => '42916.67',
                'itemable_id' => 174,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 336,
                'created_at' => '2024-09-30 22:57:03',
                'updated_at' => '2024-09-30 22:57:03',
            ),
            381 => 
            array (
                'id' => 419,
                'amount' => '41667.00',
                'itemable_id' => 175,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 337,
                'created_at' => '2024-09-30 22:58:39',
                'updated_at' => '2024-09-30 22:58:39',
            ),
            382 => 
            array (
                'id' => 420,
                'amount' => '39167.00',
                'itemable_id' => 176,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 338,
                'created_at' => '2024-09-30 23:00:24',
                'updated_at' => '2024-09-30 23:00:24',
            ),
            383 => 
            array (
                'id' => 421,
                'amount' => '79689.00',
                'itemable_id' => 177,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 339,
                'created_at' => '2024-09-30 23:02:22',
                'updated_at' => '2024-09-30 23:02:22',
            ),
            384 => 
            array (
                'id' => 424,
                'amount' => '38333.00',
                'itemable_id' => 180,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 342,
                'created_at' => '2024-09-30 23:10:16',
                'updated_at' => '2024-09-30 23:10:16',
            ),
            385 => 
            array (
                'id' => 425,
                'amount' => '33195.00',
                'itemable_id' => 181,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 343,
                'created_at' => '2024-09-30 23:12:09',
                'updated_at' => '2024-09-30 23:12:09',
            ),
            386 => 
            array (
                'id' => 426,
                'amount' => '6944.44',
                'itemable_id' => 182,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 344,
                'created_at' => '2024-09-30 23:15:59',
                'updated_at' => '2024-09-30 23:15:59',
            ),
            387 => 
            array (
                'id' => 427,
                'amount' => '69445.00',
                'itemable_id' => 183,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 345,
                'created_at' => '2024-09-30 23:17:53',
                'updated_at' => '2024-09-30 23:17:53',
            ),
            388 => 
            array (
                'id' => 428,
                'amount' => '1050.00',
                'itemable_id' => 184,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 346,
                'created_at' => '2024-10-01 17:01:27',
                'updated_at' => '2024-10-01 17:01:27',
            ),
            389 => 
            array (
                'id' => 429,
                'amount' => '1650.00',
                'itemable_id' => 313,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 347,
                'created_at' => '2024-10-01 18:15:54',
                'updated_at' => '2024-10-01 18:15:54',
            ),
            390 => 
            array (
                'id' => 430,
                'amount' => '2500.00',
                'itemable_id' => 314,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 348,
                'created_at' => '2024-10-01 18:29:35',
                'updated_at' => '2024-10-01 18:29:35',
            ),
            391 => 
            array (
                'id' => 431,
                'amount' => '2500.00',
                'itemable_id' => 315,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 349,
                'created_at' => '2024-10-01 18:47:14',
                'updated_at' => '2024-10-01 18:47:14',
            ),
            392 => 
            array (
                'id' => 432,
                'amount' => '12101.00',
                'itemable_id' => 185,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 350,
                'created_at' => '2024-10-01 19:36:42',
                'updated_at' => '2024-10-01 19:36:42',
            ),
            393 => 
            array (
                'id' => 433,
                'amount' => '350.00',
                'itemable_id' => 318,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 351,
                'created_at' => '2024-10-01 20:14:31',
                'updated_at' => '2024-10-01 20:14:31',
            ),
            394 => 
            array (
                'id' => 434,
                'amount' => '550.00',
                'itemable_id' => 317,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 351,
                'created_at' => '2024-10-01 20:14:31',
                'updated_at' => '2024-10-01 20:14:31',
            ),
            395 => 
            array (
                'id' => 435,
                'amount' => '4710.00',
                'itemable_id' => 316,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 352,
                'created_at' => '2024-10-01 20:38:39',
                'updated_at' => '2024-10-01 20:38:39',
            ),
            396 => 
            array (
                'id' => 436,
                'amount' => '550.00',
                'itemable_id' => 319,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 353,
                'created_at' => '2024-10-01 22:32:21',
                'updated_at' => '2024-10-01 22:32:21',
            ),
            397 => 
            array (
                'id' => 437,
                'amount' => '1200.00',
                'itemable_id' => 186,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 354,
                'created_at' => '2024-10-02 01:30:08',
                'updated_at' => '2024-10-02 01:30:08',
            ),
            398 => 
            array (
                'id' => 438,
                'amount' => '4000.00',
                'itemable_id' => 320,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 355,
                'created_at' => '2024-10-02 17:36:22',
                'updated_at' => '2024-10-02 17:36:22',
            ),
            399 => 
            array (
                'id' => 439,
                'amount' => '5550.00',
                'itemable_id' => 322,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 356,
                'created_at' => '2024-10-02 18:20:48',
                'updated_at' => '2024-10-02 18:20:48',
            ),
            400 => 
            array (
                'id' => 440,
                'amount' => '550.00',
                'itemable_id' => 321,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 356,
                'created_at' => '2024-10-02 18:20:48',
                'updated_at' => '2024-10-02 18:20:48',
            ),
            401 => 
            array (
                'id' => 441,
                'amount' => '1500.00',
                'itemable_id' => 323,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 357,
                'created_at' => '2024-10-02 18:42:39',
                'updated_at' => '2024-10-02 18:42:39',
            ),
            402 => 
            array (
                'id' => 442,
                'amount' => '10500.00',
                'itemable_id' => 324,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 358,
                'created_at' => '2024-10-02 19:31:33',
                'updated_at' => '2024-10-02 19:31:33',
            ),
            403 => 
            array (
                'id' => 443,
                'amount' => '12000.00',
                'itemable_id' => 325,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 359,
                'created_at' => '2024-10-02 19:52:10',
                'updated_at' => '2024-10-02 19:52:10',
            ),
            404 => 
            array (
                'id' => 444,
                'amount' => '550.00',
                'itemable_id' => 308,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 360,
                'created_at' => '2024-10-02 19:57:58',
                'updated_at' => '2024-10-02 19:57:58',
            ),
            405 => 
            array (
                'id' => 445,
                'amount' => '5550.00',
                'itemable_id' => 326,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 361,
                'created_at' => '2024-10-02 20:49:30',
                'updated_at' => '2024-10-02 20:49:30',
            ),
            406 => 
            array (
                'id' => 446,
                'amount' => '330.00',
                'itemable_id' => 187,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 362,
                'created_at' => '2024-10-02 22:03:13',
                'updated_at' => '2024-10-02 22:03:13',
            ),
            407 => 
            array (
                'id' => 447,
                'amount' => '450.00',
                'itemable_id' => 188,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 363,
                'created_at' => '2024-10-02 22:05:15',
                'updated_at' => '2024-10-02 22:05:15',
            ),
            408 => 
            array (
                'id' => 448,
                'amount' => '450.00',
                'itemable_id' => 189,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 364,
                'created_at' => '2024-10-02 22:06:36',
                'updated_at' => '2024-10-02 22:06:36',
            ),
            409 => 
            array (
                'id' => 449,
                'amount' => '450.00',
                'itemable_id' => 190,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 365,
                'created_at' => '2024-10-02 22:08:05',
                'updated_at' => '2024-10-02 22:08:05',
            ),
            410 => 
            array (
                'id' => 450,
                'amount' => '450.00',
                'itemable_id' => 191,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 366,
                'created_at' => '2024-10-02 22:08:55',
                'updated_at' => '2024-10-02 22:08:55',
            ),
            411 => 
            array (
                'id' => 451,
                'amount' => '450.00',
                'itemable_id' => 192,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 367,
                'created_at' => '2024-10-02 22:10:04',
                'updated_at' => '2024-10-02 22:10:04',
            ),
            412 => 
            array (
                'id' => 452,
                'amount' => '450.00',
                'itemable_id' => 193,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 368,
                'created_at' => '2024-10-02 22:10:47',
                'updated_at' => '2024-10-02 22:10:47',
            ),
            413 => 
            array (
                'id' => 453,
                'amount' => '330.00',
                'itemable_id' => 194,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 369,
                'created_at' => '2024-10-02 22:12:01',
                'updated_at' => '2024-10-02 22:12:01',
            ),
            414 => 
            array (
                'id' => 454,
                'amount' => '450.00',
                'itemable_id' => 195,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 370,
                'created_at' => '2024-10-02 22:12:37',
                'updated_at' => '2024-10-02 22:12:37',
            ),
            415 => 
            array (
                'id' => 455,
                'amount' => '450.00',
                'itemable_id' => 196,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 371,
                'created_at' => '2024-10-02 22:13:14',
                'updated_at' => '2024-10-02 22:13:14',
            ),
            416 => 
            array (
                'id' => 456,
                'amount' => '330.00',
                'itemable_id' => 197,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 372,
                'created_at' => '2024-10-02 22:14:18',
                'updated_at' => '2024-10-02 22:14:18',
            ),
            417 => 
            array (
                'id' => 457,
                'amount' => '8120.00',
                'itemable_id' => 328,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 373,
                'created_at' => '2024-10-02 22:34:09',
                'updated_at' => '2024-10-02 22:34:09',
            ),
            418 => 
            array (
                'id' => 458,
                'amount' => '6920.00',
                'itemable_id' => 329,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 374,
                'created_at' => '2024-10-03 00:09:41',
                'updated_at' => '2024-10-03 00:09:41',
            ),
            419 => 
            array (
                'id' => 459,
                'amount' => '2000.00',
                'itemable_id' => 330,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 375,
                'created_at' => '2024-10-03 17:40:33',
                'updated_at' => '2024-10-03 17:40:33',
            ),
            420 => 
            array (
                'id' => 460,
                'amount' => '7400.00',
                'itemable_id' => 333,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 376,
                'created_at' => '2024-10-03 20:10:58',
                'updated_at' => '2024-10-03 20:10:58',
            ),
            421 => 
            array (
                'id' => 461,
                'amount' => '5250.00',
                'itemable_id' => 332,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 376,
                'created_at' => '2024-10-03 20:10:58',
                'updated_at' => '2024-10-03 20:10:58',
            ),
            422 => 
            array (
                'id' => 462,
                'amount' => '1760.00',
                'itemable_id' => 310,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 377,
                'created_at' => '2024-10-03 23:19:28',
                'updated_at' => '2024-10-03 23:19:28',
            ),
            423 => 
            array (
                'id' => 463,
                'amount' => '800.00',
                'itemable_id' => 309,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 377,
                'created_at' => '2024-10-03 23:19:28',
                'updated_at' => '2024-10-03 23:19:28',
            ),
            424 => 
            array (
                'id' => 464,
                'amount' => '960.00',
                'itemable_id' => 198,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 378,
                'created_at' => '2024-10-03 23:57:11',
                'updated_at' => '2024-10-03 23:57:11',
            ),
            425 => 
            array (
                'id' => 465,
                'amount' => '1080.00',
                'itemable_id' => 199,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 379,
                'created_at' => '2024-10-04 00:10:32',
                'updated_at' => '2024-10-04 00:10:32',
            ),
            426 => 
            array (
                'id' => 466,
                'amount' => '2500.00',
                'itemable_id' => 336,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 380,
                'created_at' => '2024-10-04 18:45:45',
                'updated_at' => '2024-10-04 18:45:45',
            ),
            427 => 
            array (
                'id' => 467,
                'amount' => '1700.00',
                'itemable_id' => 337,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 381,
                'created_at' => '2024-10-04 21:59:40',
                'updated_at' => '2024-10-04 21:59:40',
            ),
            428 => 
            array (
                'id' => 468,
                'amount' => '1550.00',
                'itemable_id' => 338,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 382,
                'created_at' => '2024-10-07 17:31:13',
                'updated_at' => '2024-10-07 17:31:13',
            ),
            429 => 
            array (
                'id' => 469,
                'amount' => '1550.00',
                'itemable_id' => 339,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 383,
                'created_at' => '2024-10-07 19:09:16',
                'updated_at' => '2024-10-07 19:09:16',
            ),
            430 => 
            array (
                'id' => 470,
                'amount' => '6920.00',
                'itemable_id' => 341,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 384,
                'created_at' => '2024-10-07 20:17:04',
                'updated_at' => '2024-10-07 20:17:04',
            ),
            431 => 
            array (
                'id' => 471,
                'amount' => '1100.00',
                'itemable_id' => 340,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 384,
                'created_at' => '2024-10-07 20:17:04',
                'updated_at' => '2024-10-07 20:17:04',
            ),
            432 => 
            array (
                'id' => 472,
                'amount' => '375.00',
                'itemable_id' => 342,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 385,
                'created_at' => '2024-10-07 22:25:37',
                'updated_at' => '2024-10-07 22:25:37',
            ),
            433 => 
            array (
                'id' => 473,
                'amount' => '25310.00',
                'itemable_id' => 343,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 386,
                'created_at' => '2024-10-07 22:32:56',
                'updated_at' => '2024-10-07 22:32:56',
            ),
            434 => 
            array (
                'id' => 474,
                'amount' => '550.00',
                'itemable_id' => 344,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 387,
                'created_at' => '2024-10-08 17:11:38',
                'updated_at' => '2024-10-08 17:11:38',
            ),
            435 => 
            array (
                'id' => 475,
                'amount' => '3100.00',
                'itemable_id' => 350,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 388,
                'created_at' => '2024-10-08 19:22:08',
                'updated_at' => '2024-10-08 19:22:08',
            ),
            436 => 
            array (
                'id' => 476,
                'amount' => '13920.00',
                'itemable_id' => 349,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 388,
                'created_at' => '2024-10-08 19:22:08',
                'updated_at' => '2024-10-08 19:22:08',
            ),
            437 => 
            array (
                'id' => 477,
                'amount' => '2650.00',
                'itemable_id' => 347,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 388,
                'created_at' => '2024-10-08 19:22:08',
                'updated_at' => '2024-10-08 19:22:08',
            ),
            438 => 
            array (
                'id' => 478,
                'amount' => '13940.00',
                'itemable_id' => 346,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 388,
                'created_at' => '2024-10-08 19:22:08',
                'updated_at' => '2024-10-08 19:22:08',
            ),
            439 => 
            array (
                'id' => 479,
                'amount' => '2200.00',
                'itemable_id' => 345,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 388,
                'created_at' => '2024-10-08 19:22:08',
                'updated_at' => '2024-10-08 19:22:08',
            ),
            440 => 
            array (
                'id' => 480,
                'amount' => '550.00',
                'itemable_id' => 356,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 389,
                'created_at' => '2024-10-08 21:19:02',
                'updated_at' => '2024-10-08 21:19:02',
            ),
            441 => 
            array (
                'id' => 481,
                'amount' => '8000.00',
                'itemable_id' => 357,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 390,
                'created_at' => '2024-10-08 21:27:49',
                'updated_at' => '2024-10-08 21:27:49',
            ),
            442 => 
            array (
                'id' => 482,
                'amount' => '1000.00',
                'itemable_id' => 359,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 391,
                'created_at' => '2024-10-08 21:56:33',
                'updated_at' => '2024-10-08 21:56:33',
            ),
            443 => 
            array (
                'id' => 483,
                'amount' => '1000.00',
                'itemable_id' => 359,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 392,
                'created_at' => '2024-10-08 21:56:53',
                'updated_at' => '2024-10-08 21:56:53',
            ),
            444 => 
            array (
                'id' => 484,
                'amount' => '1100.00',
                'itemable_id' => 373,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 393,
                'created_at' => '2024-10-09 18:32:35',
                'updated_at' => '2024-10-09 18:32:35',
            ),
            445 => 
            array (
                'id' => 485,
                'amount' => '2500.00',
                'itemable_id' => 372,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 394,
                'created_at' => '2024-10-09 18:59:16',
                'updated_at' => '2024-10-09 18:59:16',
            ),
            446 => 
            array (
                'id' => 486,
                'amount' => '2873.77',
                'itemable_id' => 200,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 395,
                'created_at' => '2024-10-09 19:10:21',
                'updated_at' => '2024-10-09 19:10:21',
            ),
            447 => 
            array (
                'id' => 487,
                'amount' => '1550.00',
                'itemable_id' => 374,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 396,
                'created_at' => '2024-10-09 19:26:01',
                'updated_at' => '2024-10-09 19:26:01',
            ),
            448 => 
            array (
                'id' => 488,
                'amount' => '375.00',
                'itemable_id' => 375,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 397,
                'created_at' => '2024-10-09 19:35:07',
                'updated_at' => '2024-10-09 19:35:07',
            ),
            449 => 
            array (
                'id' => 489,
                'amount' => '16350.00',
                'itemable_id' => 251,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 398,
                'created_at' => '2024-10-09 23:51:27',
                'updated_at' => '2024-10-09 23:51:27',
            ),
            450 => 
            array (
                'id' => 490,
                'amount' => '450.00',
                'itemable_id' => 201,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 399,
                'created_at' => '2024-10-10 00:44:57',
                'updated_at' => '2024-10-10 00:44:57',
            ),
            451 => 
            array (
                'id' => 491,
                'amount' => '2150.00',
                'itemable_id' => 378,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 400,
                'created_at' => '2024-10-10 18:36:59',
                'updated_at' => '2024-10-10 18:36:59',
            ),
            452 => 
            array (
                'id' => 492,
                'amount' => '375.00',
                'itemable_id' => 379,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 401,
                'created_at' => '2024-10-10 19:23:39',
                'updated_at' => '2024-10-10 19:23:39',
            ),
            453 => 
            array (
                'id' => 493,
                'amount' => '2400.00',
                'itemable_id' => 380,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 402,
                'created_at' => '2024-10-10 19:58:04',
                'updated_at' => '2024-10-10 19:58:04',
            ),
            454 => 
            array (
                'id' => 494,
                'amount' => '2500.00',
                'itemable_id' => 382,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 403,
                'created_at' => '2024-10-10 22:48:10',
                'updated_at' => '2024-10-10 22:48:10',
            ),
            455 => 
            array (
                'id' => 495,
                'amount' => '2500.00',
                'itemable_id' => 381,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 403,
                'created_at' => '2024-10-10 22:48:10',
                'updated_at' => '2024-10-10 22:48:10',
            ),
            456 => 
            array (
                'id' => 496,
                'amount' => '46028.00',
                'itemable_id' => 202,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 404,
                'created_at' => '2024-10-11 16:28:50',
                'updated_at' => '2024-10-11 16:28:50',
            ),
            457 => 
            array (
                'id' => 497,
                'amount' => '83334.00',
                'itemable_id' => 203,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 405,
                'created_at' => '2024-10-11 17:00:19',
                'updated_at' => '2024-10-11 17:00:19',
            ),
            458 => 
            array (
                'id' => 498,
                'amount' => '1648000.00',
                'itemable_id' => 204,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 406,
                'created_at' => '2024-10-11 17:03:57',
                'updated_at' => '2024-10-11 17:03:57',
            ),
            459 => 
            array (
                'id' => 499,
                'amount' => '2000.00',
                'itemable_id' => 387,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 407,
                'created_at' => '2024-10-11 18:52:02',
                'updated_at' => '2024-10-11 18:52:02',
            ),
            460 => 
            array (
                'id' => 500,
                'amount' => '2000.00',
                'itemable_id' => 386,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 407,
                'created_at' => '2024-10-11 18:52:02',
                'updated_at' => '2024-10-11 18:52:02',
            ),
            461 => 
            array (
                'id' => 501,
                'amount' => '2000.00',
                'itemable_id' => 385,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 407,
                'created_at' => '2024-10-11 18:52:02',
                'updated_at' => '2024-10-11 18:52:02',
            ),
            462 => 
            array (
                'id' => 502,
                'amount' => '2000.00',
                'itemable_id' => 384,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 407,
                'created_at' => '2024-10-11 18:52:02',
                'updated_at' => '2024-10-11 18:52:02',
            ),
            463 => 
            array (
                'id' => 503,
                'amount' => '1080.00',
                'itemable_id' => 388,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 408,
                'created_at' => '2024-10-11 20:00:12',
                'updated_at' => '2024-10-11 20:00:12',
            ),
            464 => 
            array (
                'id' => 504,
                'amount' => '1080.00',
                'itemable_id' => 389,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 409,
                'created_at' => '2024-10-11 20:03:03',
                'updated_at' => '2024-10-11 20:03:03',
            ),
            465 => 
            array (
                'id' => 505,
                'amount' => '1080.00',
                'itemable_id' => 390,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 410,
                'created_at' => '2024-10-11 20:03:46',
                'updated_at' => '2024-10-11 20:03:46',
            ),
            466 => 
            array (
                'id' => 506,
                'amount' => '1080.00',
                'itemable_id' => 391,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 411,
                'created_at' => '2024-10-14 17:34:26',
                'updated_at' => '2024-10-14 17:34:26',
            ),
            467 => 
            array (
                'id' => 507,
                'amount' => '1080.00',
                'itemable_id' => 399,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 412,
                'created_at' => '2024-10-14 18:24:57',
                'updated_at' => '2024-10-14 18:24:57',
            ),
            468 => 
            array (
                'id' => 508,
                'amount' => '1080.00',
                'itemable_id' => 398,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 412,
                'created_at' => '2024-10-14 18:24:57',
                'updated_at' => '2024-10-14 18:24:57',
            ),
            469 => 
            array (
                'id' => 509,
                'amount' => '1080.00',
                'itemable_id' => 397,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 412,
                'created_at' => '2024-10-14 18:24:57',
                'updated_at' => '2024-10-14 18:24:57',
            ),
            470 => 
            array (
                'id' => 510,
                'amount' => '1080.00',
                'itemable_id' => 396,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 412,
                'created_at' => '2024-10-14 18:24:57',
                'updated_at' => '2024-10-14 18:24:57',
            ),
            471 => 
            array (
                'id' => 511,
                'amount' => '1080.00',
                'itemable_id' => 395,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 412,
                'created_at' => '2024-10-14 18:24:57',
                'updated_at' => '2024-10-14 18:24:57',
            ),
            472 => 
            array (
                'id' => 512,
                'amount' => '1080.00',
                'itemable_id' => 394,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 412,
                'created_at' => '2024-10-14 18:24:57',
                'updated_at' => '2024-10-14 18:24:57',
            ),
            473 => 
            array (
                'id' => 513,
                'amount' => '1080.00',
                'itemable_id' => 393,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 412,
                'created_at' => '2024-10-14 18:24:57',
                'updated_at' => '2024-10-14 18:24:57',
            ),
            474 => 
            array (
                'id' => 514,
                'amount' => '1080.00',
                'itemable_id' => 392,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 412,
                'created_at' => '2024-10-14 18:24:57',
                'updated_at' => '2024-10-14 18:24:57',
            ),
            475 => 
            array (
                'id' => 515,
                'amount' => '375.00',
                'itemable_id' => 401,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 413,
                'created_at' => '2024-10-14 19:26:11',
                'updated_at' => '2024-10-14 19:26:11',
            ),
            476 => 
            array (
                'id' => 516,
                'amount' => '3000.00',
                'itemable_id' => 400,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 414,
                'created_at' => '2024-10-14 19:48:48',
                'updated_at' => '2024-10-14 19:48:48',
            ),
            477 => 
            array (
                'id' => 517,
                'amount' => '38.89',
                'itemable_id' => 205,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 415,
                'created_at' => '2024-10-14 23:04:36',
                'updated_at' => '2024-10-14 23:04:36',
            ),
            478 => 
            array (
                'id' => 518,
                'amount' => '5122.22',
                'itemable_id' => 206,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 415,
                'created_at' => '2024-10-14 23:04:36',
                'updated_at' => '2024-10-14 23:04:36',
            ),
            479 => 
            array (
                'id' => 519,
                'amount' => '238.89',
                'itemable_id' => 207,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 415,
                'created_at' => '2024-10-14 23:04:36',
                'updated_at' => '2024-10-14 23:04:36',
            ),
            480 => 
            array (
                'id' => 520,
                'amount' => '550.00',
                'itemable_id' => 402,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 416,
                'created_at' => '2024-10-14 23:59:00',
                'updated_at' => '2024-10-14 23:59:00',
            ),
            481 => 
            array (
                'id' => 521,
                'amount' => '4000.00',
                'itemable_id' => 429,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 417,
                'created_at' => '2024-10-18 17:45:59',
                'updated_at' => '2024-10-18 17:45:59',
            ),
            482 => 
            array (
                'id' => 522,
                'amount' => '2500.00',
                'itemable_id' => 413,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 418,
                'created_at' => '2024-10-18 17:46:44',
                'updated_at' => '2024-10-18 17:46:44',
            ),
            483 => 
            array (
                'id' => 523,
                'amount' => '1680.00',
                'itemable_id' => 412,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 419,
                'created_at' => '2024-10-18 18:12:09',
                'updated_at' => '2024-10-18 18:12:09',
            ),
            484 => 
            array (
                'id' => 524,
                'amount' => '2100.00',
                'itemable_id' => 420,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 420,
                'created_at' => '2024-10-18 18:52:30',
                'updated_at' => '2024-10-18 18:52:30',
            ),
            485 => 
            array (
                'id' => 525,
                'amount' => '1036.00',
                'itemable_id' => 415,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 421,
                'created_at' => '2024-10-18 18:56:00',
                'updated_at' => '2024-10-18 18:56:00',
            ),
            486 => 
            array (
                'id' => 526,
                'amount' => '3300.00',
                'itemable_id' => 414,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 421,
                'created_at' => '2024-10-18 18:56:00',
                'updated_at' => '2024-10-18 18:56:00',
            ),
            487 => 
            array (
                'id' => 527,
                'amount' => '25739.84',
                'itemable_id' => 208,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 422,
                'created_at' => '2024-10-18 18:59:43',
                'updated_at' => '2024-10-18 18:59:43',
            ),
            488 => 
            array (
                'id' => 528,
                'amount' => '3610.00',
                'itemable_id' => 440,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 423,
                'created_at' => '2024-10-18 19:17:37',
                'updated_at' => '2024-10-18 19:17:37',
            ),
            489 => 
            array (
                'id' => 529,
                'amount' => '3610.00',
                'itemable_id' => 439,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 423,
                'created_at' => '2024-10-18 19:17:37',
                'updated_at' => '2024-10-18 19:17:37',
            ),
            490 => 
            array (
                'id' => 530,
                'amount' => '1440.00',
                'itemable_id' => 417,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 424,
                'created_at' => '2024-10-18 20:54:08',
                'updated_at' => '2024-10-18 20:54:08',
            ),
            491 => 
            array (
                'id' => 531,
                'amount' => '4800.00',
                'itemable_id' => 416,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 424,
                'created_at' => '2024-10-18 20:54:08',
                'updated_at' => '2024-10-18 20:54:08',
            ),
            492 => 
            array (
                'id' => 532,
                'amount' => '2650.00',
                'itemable_id' => 418,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 425,
                'created_at' => '2024-10-18 21:51:56',
                'updated_at' => '2024-10-18 21:51:56',
            ),
            493 => 
            array (
                'id' => 533,
                'amount' => '1550.00',
                'itemable_id' => 419,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 426,
                'created_at' => '2024-10-18 21:54:08',
                'updated_at' => '2024-10-18 21:54:08',
            ),
            494 => 
            array (
                'id' => 534,
                'amount' => '1680.00',
                'itemable_id' => 411,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 427,
                'created_at' => '2024-10-18 21:56:05',
                'updated_at' => '2024-10-18 21:56:05',
            ),
            495 => 
            array (
                'id' => 535,
                'amount' => '1100.00',
                'itemable_id' => 406,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 428,
                'created_at' => '2024-10-18 22:46:32',
                'updated_at' => '2024-10-18 22:46:32',
            ),
            496 => 
            array (
                'id' => 536,
                'amount' => '440.00',
                'itemable_id' => 408,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 429,
                'created_at' => '2024-10-18 23:12:04',
                'updated_at' => '2024-10-18 23:12:04',
            ),
            497 => 
            array (
                'id' => 537,
                'amount' => '520.00',
                'itemable_id' => 407,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 429,
                'created_at' => '2024-10-18 23:12:04',
                'updated_at' => '2024-10-18 23:12:04',
            ),
            498 => 
            array (
                'id' => 538,
                'amount' => '500.00',
                'itemable_id' => 448,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 430,
                'created_at' => '2024-10-18 23:14:39',
                'updated_at' => '2024-10-18 23:14:39',
            ),
            499 => 
            array (
                'id' => 539,
                'amount' => '500.00',
                'itemable_id' => 447,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 430,
                'created_at' => '2024-10-18 23:14:39',
                'updated_at' => '2024-10-18 23:14:39',
            ),
        ));
        \DB::table('finance_op_items')->insert(array (
            0 => 
            array (
                'id' => 540,
                'amount' => '500.00',
                'itemable_id' => 446,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 430,
                'created_at' => '2024-10-18 23:14:39',
                'updated_at' => '2024-10-18 23:14:39',
            ),
            1 => 
            array (
                'id' => 541,
                'amount' => '500.00',
                'itemable_id' => 445,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 430,
                'created_at' => '2024-10-18 23:14:39',
                'updated_at' => '2024-10-18 23:14:39',
            ),
            2 => 
            array (
                'id' => 542,
                'amount' => '500.00',
                'itemable_id' => 444,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 430,
                'created_at' => '2024-10-18 23:14:39',
                'updated_at' => '2024-10-18 23:14:39',
            ),
            3 => 
            array (
                'id' => 543,
                'amount' => '1500.00',
                'itemable_id' => 443,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 431,
                'created_at' => '2024-10-18 23:15:06',
                'updated_at' => '2024-10-18 23:15:06',
            ),
            4 => 
            array (
                'id' => 544,
                'amount' => '2000.00',
                'itemable_id' => 442,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 431,
                'created_at' => '2024-10-18 23:15:06',
                'updated_at' => '2024-10-18 23:15:06',
            ),
            5 => 
            array (
                'id' => 545,
                'amount' => '1000.00',
                'itemable_id' => 422,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 432,
                'created_at' => '2024-10-18 23:50:39',
                'updated_at' => '2024-10-18 23:50:39',
            ),
            6 => 
            array (
                'id' => 546,
                'amount' => '500.00',
                'itemable_id' => 421,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 433,
                'created_at' => '2024-10-19 00:05:56',
                'updated_at' => '2024-10-19 00:05:56',
            ),
            7 => 
            array (
                'id' => 547,
                'amount' => '2000.00',
                'itemable_id' => 409,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 434,
                'created_at' => '2024-10-19 00:07:22',
                'updated_at' => '2024-10-19 00:07:22',
            ),
            8 => 
            array (
                'id' => 548,
                'amount' => '5000.00',
                'itemable_id' => 209,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 435,
                'created_at' => '2024-10-21 17:42:37',
                'updated_at' => '2024-10-21 17:42:37',
            ),
            9 => 
            array (
                'id' => 549,
                'amount' => '1000.00',
                'itemable_id' => 452,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 436,
                'created_at' => '2024-10-21 19:19:20',
                'updated_at' => '2024-10-21 19:19:20',
            ),
            10 => 
            array (
                'id' => 550,
                'amount' => '2550.00',
                'itemable_id' => 451,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 436,
                'created_at' => '2024-10-21 19:19:20',
                'updated_at' => '2024-10-21 19:19:20',
            ),
            11 => 
            array (
                'id' => 551,
                'amount' => '1000.00',
                'itemable_id' => 450,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 436,
                'created_at' => '2024-10-21 19:19:20',
                'updated_at' => '2024-10-21 19:19:20',
            ),
            12 => 
            array (
                'id' => 552,
                'amount' => '1000.00',
                'itemable_id' => 449,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 436,
                'created_at' => '2024-10-21 19:19:20',
                'updated_at' => '2024-10-21 19:19:20',
            ),
            13 => 
            array (
                'id' => 553,
                'amount' => '6200.00',
                'itemable_id' => 453,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 437,
                'created_at' => '2024-10-21 19:33:56',
                'updated_at' => '2024-10-21 19:33:56',
            ),
            14 => 
            array (
                'id' => 554,
                'amount' => '1550.00',
                'itemable_id' => 454,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 438,
                'created_at' => '2024-10-21 22:34:32',
                'updated_at' => '2024-10-21 22:34:32',
            ),
            15 => 
            array (
                'id' => 555,
                'amount' => '1550.00',
                'itemable_id' => 455,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 439,
                'created_at' => '2024-10-21 22:34:58',
                'updated_at' => '2024-10-21 22:34:58',
            ),
            16 => 
            array (
                'id' => 556,
                'amount' => '550.00',
                'itemable_id' => 404,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 440,
                'created_at' => '2024-10-21 22:59:53',
                'updated_at' => '2024-10-21 22:59:53',
            ),
            17 => 
            array (
                'id' => 559,
                'amount' => '230865.00',
                'itemable_id' => 212,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 443,
                'created_at' => '2024-10-22 21:19:30',
                'updated_at' => '2024-10-22 21:19:30',
            ),
            18 => 
            array (
                'id' => 560,
                'amount' => '2500.00',
                'itemable_id' => 423,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 444,
                'created_at' => '2024-10-22 21:27:04',
                'updated_at' => '2024-10-22 21:27:04',
            ),
            19 => 
            array (
                'id' => 561,
                'amount' => '2500.00',
                'itemable_id' => 405,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 444,
                'created_at' => '2024-10-22 21:27:04',
                'updated_at' => '2024-10-22 21:27:04',
            ),
            20 => 
            array (
                'id' => 562,
                'amount' => '2500.00',
                'itemable_id' => 457,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 445,
                'created_at' => '2024-10-22 22:42:50',
                'updated_at' => '2024-10-22 22:42:50',
            ),
            21 => 
            array (
                'id' => 563,
                'amount' => '2500.00',
                'itemable_id' => 456,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 446,
                'created_at' => '2024-10-22 22:43:06',
                'updated_at' => '2024-10-22 22:43:06',
            ),
            22 => 
            array (
                'id' => 564,
                'amount' => '1650.00',
                'itemable_id' => 458,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 447,
                'created_at' => '2024-10-22 23:06:13',
                'updated_at' => '2024-10-22 23:06:13',
            ),
            23 => 
            array (
                'id' => 565,
                'amount' => '6920.00',
                'itemable_id' => 460,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 448,
                'created_at' => '2024-10-23 00:00:05',
                'updated_at' => '2024-10-23 00:00:05',
            ),
            24 => 
            array (
                'id' => 566,
                'amount' => '3518.00',
                'itemable_id' => 459,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 448,
                'created_at' => '2024-10-23 00:00:05',
                'updated_at' => '2024-10-23 00:00:05',
            ),
            25 => 
            array (
                'id' => 567,
                'amount' => '3950.00',
                'itemable_id' => 461,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 449,
                'created_at' => '2024-10-23 18:19:05',
                'updated_at' => '2024-10-23 18:19:05',
            ),
            26 => 
            array (
                'id' => 568,
                'amount' => '2000.00',
                'itemable_id' => 463,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 450,
                'created_at' => '2024-10-23 18:34:15',
                'updated_at' => '2024-10-23 18:34:15',
            ),
            27 => 
            array (
                'id' => 569,
                'amount' => '4000.00',
                'itemable_id' => 462,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 450,
                'created_at' => '2024-10-23 18:34:15',
                'updated_at' => '2024-10-23 18:34:15',
            ),
            28 => 
            array (
                'id' => 570,
                'amount' => '4100.00',
                'itemable_id' => 464,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 451,
                'created_at' => '2024-10-23 19:00:24',
                'updated_at' => '2024-10-23 19:00:24',
            ),
            29 => 
            array (
                'id' => 571,
                'amount' => '4000.00',
                'itemable_id' => 465,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 452,
                'created_at' => '2024-10-23 19:24:47',
                'updated_at' => '2024-10-23 19:24:47',
            ),
            30 => 
            array (
                'id' => 572,
                'amount' => '2160.00',
                'itemable_id' => 467,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 453,
                'created_at' => '2024-10-23 20:03:40',
                'updated_at' => '2024-10-23 20:03:40',
            ),
            31 => 
            array (
                'id' => 573,
                'amount' => '3650.00',
                'itemable_id' => 466,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 453,
                'created_at' => '2024-10-23 20:03:40',
                'updated_at' => '2024-10-23 20:03:40',
            ),
            32 => 
            array (
                'id' => 574,
                'amount' => '1760.00',
                'itemable_id' => 468,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 454,
                'created_at' => '2024-10-23 20:56:42',
                'updated_at' => '2024-10-23 20:56:42',
            ),
            33 => 
            array (
                'id' => 575,
                'amount' => '2100.00',
                'itemable_id' => 469,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 455,
                'created_at' => '2024-10-23 21:25:25',
                'updated_at' => '2024-10-23 21:25:25',
            ),
            34 => 
            array (
                'id' => 576,
                'amount' => '8730.00',
                'itemable_id' => 470,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 456,
                'created_at' => '2024-10-23 22:02:47',
                'updated_at' => '2024-10-23 22:02:47',
            ),
            35 => 
            array (
                'id' => 577,
                'amount' => '1600.00',
                'itemable_id' => 472,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 457,
                'created_at' => '2024-10-23 22:43:54',
                'updated_at' => '2024-10-23 22:43:54',
            ),
            36 => 
            array (
                'id' => 578,
                'amount' => '1000.00',
                'itemable_id' => 471,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 457,
                'created_at' => '2024-10-23 22:43:54',
                'updated_at' => '2024-10-23 22:43:54',
            ),
            37 => 
            array (
                'id' => 579,
                'amount' => '250.00',
                'itemable_id' => 475,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 458,
                'created_at' => '2024-10-23 23:17:36',
                'updated_at' => '2024-10-23 23:17:36',
            ),
            38 => 
            array (
                'id' => 580,
                'amount' => '600.00',
                'itemable_id' => 474,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 458,
                'created_at' => '2024-10-23 23:17:36',
                'updated_at' => '2024-10-23 23:17:36',
            ),
            39 => 
            array (
                'id' => 581,
                'amount' => '700.00',
                'itemable_id' => 473,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 458,
                'created_at' => '2024-10-23 23:17:36',
                'updated_at' => '2024-10-23 23:17:36',
            ),
            40 => 
            array (
                'id' => 582,
                'amount' => '2500.00',
                'itemable_id' => 476,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 459,
                'created_at' => '2024-10-24 18:09:01',
                'updated_at' => '2024-10-24 18:09:01',
            ),
            41 => 
            array (
                'id' => 583,
                'amount' => '1500.00',
                'itemable_id' => 480,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 460,
                'created_at' => '2024-10-24 23:30:26',
                'updated_at' => '2024-10-24 23:30:26',
            ),
            42 => 
            array (
                'id' => 584,
                'amount' => '1500.00',
                'itemable_id' => 479,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 460,
                'created_at' => '2024-10-24 23:30:26',
                'updated_at' => '2024-10-24 23:30:26',
            ),
            43 => 
            array (
                'id' => 585,
                'amount' => '6070.00',
                'itemable_id' => 478,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 460,
                'created_at' => '2024-10-24 23:30:26',
                'updated_at' => '2024-10-24 23:30:26',
            ),
            44 => 
            array (
                'id' => 586,
                'amount' => '6070.00',
                'itemable_id' => 477,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 460,
                'created_at' => '2024-10-24 23:30:26',
                'updated_at' => '2024-10-24 23:30:26',
            ),
            45 => 
            array (
                'id' => 587,
                'amount' => '994939.00',
                'itemable_id' => 213,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 461,
                'created_at' => '2024-10-25 00:02:45',
                'updated_at' => '2024-10-25 00:02:45',
            ),
            46 => 
            array (
                'id' => 590,
                'amount' => '2740000.00',
                'itemable_id' => 216,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 464,
                'created_at' => '2024-10-25 00:13:43',
                'updated_at' => '2024-10-25 00:13:43',
            ),
            47 => 
            array (
                'id' => 591,
                'amount' => '9065.00',
                'itemable_id' => 217,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 465,
                'created_at' => '2024-10-25 01:06:10',
                'updated_at' => '2024-10-25 01:06:10',
            ),
            48 => 
            array (
                'id' => 592,
                'amount' => '120.00',
                'itemable_id' => 218,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 466,
                'created_at' => '2024-10-25 18:05:33',
                'updated_at' => '2024-10-25 18:05:33',
            ),
            49 => 
            array (
                'id' => 593,
                'amount' => '120.00',
                'itemable_id' => 219,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 467,
                'created_at' => '2024-10-25 18:07:45',
                'updated_at' => '2024-10-25 18:07:45',
            ),
            50 => 
            array (
                'id' => 594,
                'amount' => '1500.00',
                'itemable_id' => 485,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 468,
                'created_at' => '2024-10-25 18:48:15',
                'updated_at' => '2024-10-25 18:48:15',
            ),
            51 => 
            array (
                'id' => 595,
                'amount' => '6070.00',
                'itemable_id' => 482,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 468,
                'created_at' => '2024-10-25 18:48:15',
                'updated_at' => '2024-10-25 18:48:15',
            ),
            52 => 
            array (
                'id' => 596,
                'amount' => '4320.00',
                'itemable_id' => 489,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 469,
                'created_at' => '2024-10-25 19:10:17',
                'updated_at' => '2024-10-25 19:10:17',
            ),
            53 => 
            array (
                'id' => 597,
                'amount' => '800.00',
                'itemable_id' => 491,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 470,
                'created_at' => '2024-10-26 00:00:55',
                'updated_at' => '2024-10-26 00:00:55',
            ),
            54 => 
            array (
                'id' => 598,
                'amount' => '880.00',
                'itemable_id' => 490,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 470,
                'created_at' => '2024-10-26 00:00:55',
                'updated_at' => '2024-10-26 00:00:55',
            ),
            55 => 
            array (
                'id' => 599,
                'amount' => '4950.00',
                'itemable_id' => 493,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 471,
                'created_at' => '2024-10-28 17:09:11',
                'updated_at' => '2024-10-28 17:09:11',
            ),
            56 => 
            array (
                'id' => 600,
                'amount' => '4950.00',
                'itemable_id' => 492,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 471,
                'created_at' => '2024-10-28 17:09:11',
                'updated_at' => '2024-10-28 17:09:11',
            ),
            57 => 
            array (
                'id' => 601,
                'amount' => '1100.00',
                'itemable_id' => 495,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 472,
                'created_at' => '2024-10-28 18:12:34',
                'updated_at' => '2024-10-28 18:12:34',
            ),
            58 => 
            array (
                'id' => 602,
                'amount' => '1650.00',
                'itemable_id' => 494,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 472,
                'created_at' => '2024-10-28 18:12:34',
                'updated_at' => '2024-10-28 18:12:34',
            ),
            59 => 
            array (
                'id' => 603,
                'amount' => '550.00',
                'itemable_id' => 496,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 473,
                'created_at' => '2024-10-28 20:56:43',
                'updated_at' => '2024-10-28 20:56:43',
            ),
            60 => 
            array (
                'id' => 604,
                'amount' => '4680.00',
                'itemable_id' => 499,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 474,
                'created_at' => '2024-10-28 21:28:24',
                'updated_at' => '2024-10-28 21:28:24',
            ),
            61 => 
            array (
                'id' => 605,
                'amount' => '3960.00',
                'itemable_id' => 498,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 474,
                'created_at' => '2024-10-28 21:28:24',
                'updated_at' => '2024-10-28 21:28:24',
            ),
            62 => 
            array (
                'id' => 606,
                'amount' => '3300.00',
                'itemable_id' => 500,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 475,
                'created_at' => '2024-10-28 21:42:09',
                'updated_at' => '2024-10-28 21:42:09',
            ),
            63 => 
            array (
                'id' => 607,
                'amount' => '600.00',
                'itemable_id' => 507,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 476,
                'created_at' => '2024-10-29 00:31:38',
                'updated_at' => '2024-10-29 00:31:38',
            ),
            64 => 
            array (
                'id' => 608,
                'amount' => '6200.00',
                'itemable_id' => 506,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 476,
                'created_at' => '2024-10-29 00:31:38',
                'updated_at' => '2024-10-29 00:31:38',
            ),
            65 => 
            array (
                'id' => 609,
                'amount' => '6200.00',
                'itemable_id' => 505,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 476,
                'created_at' => '2024-10-29 00:31:38',
                'updated_at' => '2024-10-29 00:31:38',
            ),
            66 => 
            array (
                'id' => 610,
                'amount' => '6200.00',
                'itemable_id' => 504,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 476,
                'created_at' => '2024-10-29 00:31:38',
                'updated_at' => '2024-10-29 00:31:38',
            ),
            67 => 
            array (
                'id' => 611,
                'amount' => '6200.00',
                'itemable_id' => 503,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 476,
                'created_at' => '2024-10-29 00:31:38',
                'updated_at' => '2024-10-29 00:31:38',
            ),
            68 => 
            array (
                'id' => 612,
                'amount' => '6200.00',
                'itemable_id' => 502,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 476,
                'created_at' => '2024-10-29 00:31:38',
                'updated_at' => '2024-10-29 00:31:38',
            ),
            69 => 
            array (
                'id' => 613,
                'amount' => '6200.00',
                'itemable_id' => 501,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 476,
                'created_at' => '2024-10-29 00:31:38',
                'updated_at' => '2024-10-29 00:31:38',
            ),
            70 => 
            array (
                'id' => 614,
                'amount' => '7750.00',
                'itemable_id' => 497,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 476,
                'created_at' => '2024-10-29 00:31:38',
                'updated_at' => '2024-10-29 00:31:38',
            ),
            71 => 
            array (
                'id' => 615,
                'amount' => '2500.00',
                'itemable_id' => 508,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 477,
                'created_at' => '2024-10-29 17:34:30',
                'updated_at' => '2024-10-29 17:34:30',
            ),
            72 => 
            array (
                'id' => 616,
                'amount' => '1550.00',
                'itemable_id' => 510,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 478,
                'created_at' => '2024-10-29 18:04:21',
                'updated_at' => '2024-10-29 18:04:21',
            ),
            73 => 
            array (
                'id' => 617,
                'amount' => '1550.00',
                'itemable_id' => 509,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 479,
                'created_at' => '2024-10-29 18:05:37',
                'updated_at' => '2024-10-29 18:05:37',
            ),
            74 => 
            array (
                'id' => 618,
                'amount' => '2200.00',
                'itemable_id' => 512,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 480,
                'created_at' => '2024-10-29 19:16:02',
                'updated_at' => '2024-10-29 19:16:02',
            ),
            75 => 
            array (
                'id' => 619,
                'amount' => '2200.00',
                'itemable_id' => 511,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 481,
                'created_at' => '2024-10-29 19:16:24',
                'updated_at' => '2024-10-29 19:16:24',
            ),
            76 => 
            array (
                'id' => 620,
                'amount' => '4750.00',
                'itemable_id' => 513,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 482,
                'created_at' => '2024-10-29 19:38:24',
                'updated_at' => '2024-10-29 19:38:24',
            ),
            77 => 
            array (
                'id' => 621,
                'amount' => '6300.00',
                'itemable_id' => 514,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 483,
                'created_at' => '2024-10-29 19:58:15',
                'updated_at' => '2024-10-29 19:58:15',
            ),
            78 => 
            array (
                'id' => 622,
                'amount' => '4200.00',
                'itemable_id' => 515,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 484,
                'created_at' => '2024-10-29 21:05:31',
                'updated_at' => '2024-10-29 21:05:31',
            ),
            79 => 
            array (
                'id' => 623,
                'amount' => '880.00',
                'itemable_id' => 518,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 485,
                'created_at' => '2024-10-29 21:31:43',
                'updated_at' => '2024-10-29 21:31:43',
            ),
            80 => 
            array (
                'id' => 624,
                'amount' => '2120.00',
                'itemable_id' => 517,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 485,
                'created_at' => '2024-10-29 21:31:43',
                'updated_at' => '2024-10-29 21:31:43',
            ),
            81 => 
            array (
                'id' => 625,
                'amount' => '1080.00',
                'itemable_id' => 519,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 486,
                'created_at' => '2024-10-29 21:48:41',
                'updated_at' => '2024-10-29 21:48:41',
            ),
            82 => 
            array (
                'id' => 626,
                'amount' => '18700.00',
                'itemable_id' => 516,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 487,
                'created_at' => '2024-10-29 21:50:02',
                'updated_at' => '2024-10-29 21:50:02',
            ),
            83 => 
            array (
                'id' => 627,
                'amount' => '880.00',
                'itemable_id' => 520,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 488,
                'created_at' => '2024-10-29 21:59:11',
                'updated_at' => '2024-10-29 21:59:11',
            ),
            84 => 
            array (
                'id' => 628,
                'amount' => '550.00',
                'itemable_id' => 220,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 489,
                'created_at' => '2024-10-29 22:30:59',
                'updated_at' => '2024-10-29 22:30:59',
            ),
            85 => 
            array (
                'id' => 629,
                'amount' => '5950.00',
                'itemable_id' => 527,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 490,
                'created_at' => '2024-10-30 18:02:25',
                'updated_at' => '2024-10-30 18:02:25',
            ),
            86 => 
            array (
                'id' => 630,
                'amount' => '5450.00',
                'itemable_id' => 526,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 490,
                'created_at' => '2024-10-30 18:02:25',
                'updated_at' => '2024-10-30 18:02:25',
            ),
            87 => 
            array (
                'id' => 631,
                'amount' => '13200.00',
                'itemable_id' => 522,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 491,
                'created_at' => '2024-10-30 18:38:23',
                'updated_at' => '2024-10-30 18:38:23',
            ),
            88 => 
            array (
                'id' => 632,
                'amount' => '12600.00',
                'itemable_id' => 521,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 491,
                'created_at' => '2024-10-30 18:38:23',
                'updated_at' => '2024-10-30 18:38:23',
            ),
            89 => 
            array (
                'id' => 633,
                'amount' => '1600.00',
                'itemable_id' => 528,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 492,
                'created_at' => '2024-10-30 18:51:14',
                'updated_at' => '2024-10-30 18:51:14',
            ),
            90 => 
            array (
                'id' => 634,
                'amount' => '500.00',
                'itemable_id' => 529,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 493,
                'created_at' => '2024-10-30 19:29:52',
                'updated_at' => '2024-10-30 19:29:52',
            ),
            91 => 
            array (
                'id' => 635,
                'amount' => '1500.00',
                'itemable_id' => 530,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 494,
                'created_at' => '2024-10-30 20:03:33',
                'updated_at' => '2024-10-30 20:03:33',
            ),
            92 => 
            array (
                'id' => 636,
                'amount' => '305000.00',
                'itemable_id' => 221,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 495,
                'created_at' => '2024-10-30 22:08:02',
                'updated_at' => '2024-10-30 22:08:02',
            ),
            93 => 
            array (
                'id' => 637,
                'amount' => '2497.88',
                'itemable_id' => 222,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 495,
                'created_at' => '2024-10-30 22:08:02',
                'updated_at' => '2024-10-30 22:08:02',
            ),
            94 => 
            array (
                'id' => 638,
                'amount' => '390242.00',
                'itemable_id' => 223,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 496,
                'created_at' => '2024-10-30 22:12:05',
                'updated_at' => '2024-10-30 22:12:05',
            ),
            95 => 
            array (
                'id' => 639,
                'amount' => '9558.00',
                'itemable_id' => 224,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 497,
                'created_at' => '2024-10-30 22:16:07',
                'updated_at' => '2024-10-30 22:16:07',
            ),
            96 => 
            array (
                'id' => 640,
                'amount' => '82778.00',
                'itemable_id' => 225,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 498,
                'created_at' => '2024-10-30 22:20:34',
                'updated_at' => '2024-10-30 22:20:34',
            ),
            97 => 
            array (
                'id' => 641,
                'amount' => '156540.20',
                'itemable_id' => 226,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 499,
                'created_at' => '2024-10-30 22:23:26',
                'updated_at' => '2024-10-30 22:23:26',
            ),
            98 => 
            array (
                'id' => 642,
                'amount' => '41666.67',
                'itemable_id' => 227,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 500,
                'created_at' => '2024-10-30 22:25:52',
                'updated_at' => '2024-10-30 22:25:52',
            ),
            99 => 
            array (
                'id' => 643,
                'amount' => '13423.00',
                'itemable_id' => 228,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 501,
                'created_at' => '2024-10-30 22:27:59',
                'updated_at' => '2024-10-30 22:27:59',
            ),
            100 => 
            array (
                'id' => 644,
                'amount' => '45833.33',
                'itemable_id' => 229,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 502,
                'created_at' => '2024-10-30 22:30:05',
                'updated_at' => '2024-10-30 22:30:05',
            ),
            101 => 
            array (
                'id' => 645,
                'amount' => '51250.00',
                'itemable_id' => 230,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 503,
                'created_at' => '2024-10-30 22:35:00',
                'updated_at' => '2024-10-30 22:35:00',
            ),
            102 => 
            array (
                'id' => 646,
                'amount' => '51250.00',
                'itemable_id' => 231,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 503,
                'created_at' => '2024-10-30 22:35:00',
                'updated_at' => '2024-10-30 22:35:00',
            ),
            103 => 
            array (
                'id' => 647,
                'amount' => '51250.00',
                'itemable_id' => 232,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 503,
                'created_at' => '2024-10-30 22:35:00',
                'updated_at' => '2024-10-30 22:35:00',
            ),
            104 => 
            array (
                'id' => 648,
                'amount' => '44166.00',
                'itemable_id' => 233,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 504,
                'created_at' => '2024-10-30 22:37:55',
                'updated_at' => '2024-10-30 22:37:55',
            ),
            105 => 
            array (
                'id' => 649,
                'amount' => '42500.00',
                'itemable_id' => 234,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 505,
                'created_at' => '2024-10-30 22:39:49',
                'updated_at' => '2024-10-30 22:39:49',
            ),
            106 => 
            array (
                'id' => 650,
                'amount' => '42499.98',
                'itemable_id' => 235,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 506,
                'created_at' => '2024-10-30 22:44:19',
                'updated_at' => '2024-10-30 22:44:19',
            ),
            107 => 
            array (
                'id' => 651,
                'amount' => '17777.78',
                'itemable_id' => 236,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 507,
                'created_at' => '2024-10-30 22:47:11',
                'updated_at' => '2024-10-30 22:47:11',
            ),
            108 => 
            array (
                'id' => 652,
                'amount' => '41667.00',
                'itemable_id' => 237,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 508,
                'created_at' => '2024-10-30 22:50:01',
                'updated_at' => '2024-10-30 22:50:01',
            ),
            109 => 
            array (
                'id' => 653,
                'amount' => '307146.00',
                'itemable_id' => 238,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 509,
                'created_at' => '2024-10-30 22:53:10',
                'updated_at' => '2024-10-30 22:53:10',
            ),
            110 => 
            array (
                'id' => 654,
                'amount' => '201410.00',
                'itemable_id' => 239,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 510,
                'created_at' => '2024-10-30 22:56:11',
                'updated_at' => '2024-10-30 22:56:11',
            ),
            111 => 
            array (
                'id' => 655,
                'amount' => '61112.00',
                'itemable_id' => 240,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 511,
                'created_at' => '2024-10-30 22:59:02',
                'updated_at' => '2024-10-30 22:59:02',
            ),
            112 => 
            array (
                'id' => 656,
                'amount' => '35833.33',
                'itemable_id' => 241,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 512,
                'created_at' => '2024-10-30 23:01:02',
                'updated_at' => '2024-10-30 23:01:02',
            ),
            113 => 
            array (
                'id' => 659,
                'amount' => '9723.00',
                'itemable_id' => 244,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 515,
                'created_at' => '2024-10-30 23:09:36',
                'updated_at' => '2024-10-30 23:09:36',
            ),
            114 => 
            array (
                'id' => 660,
                'amount' => '43333.33',
                'itemable_id' => 245,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 516,
                'created_at' => '2024-10-30 23:13:24',
                'updated_at' => '2024-10-30 23:13:24',
            ),
            115 => 
            array (
                'id' => 661,
                'amount' => '33334.00',
                'itemable_id' => 246,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 517,
                'created_at' => '2024-10-30 23:15:58',
                'updated_at' => '2024-10-30 23:15:58',
            ),
            116 => 
            array (
                'id' => 662,
                'amount' => '9723.00',
                'itemable_id' => 247,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 518,
                'created_at' => '2024-10-30 23:21:28',
                'updated_at' => '2024-10-30 23:21:28',
            ),
            117 => 
            array (
                'id' => 663,
                'amount' => '9723.00',
                'itemable_id' => 248,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 518,
                'created_at' => '2024-10-30 23:21:28',
                'updated_at' => '2024-10-30 23:21:28',
            ),
            118 => 
            array (
                'id' => 664,
                'amount' => '9723.00',
                'itemable_id' => 249,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 518,
                'created_at' => '2024-10-30 23:21:28',
                'updated_at' => '2024-10-30 23:21:28',
            ),
            119 => 
            array (
                'id' => 665,
                'amount' => '35834.00',
                'itemable_id' => 250,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 519,
                'created_at' => '2024-10-30 23:24:29',
                'updated_at' => '2024-10-30 23:24:29',
            ),
            120 => 
            array (
                'id' => 666,
                'amount' => '35834.00',
                'itemable_id' => 251,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 519,
                'created_at' => '2024-10-30 23:24:29',
                'updated_at' => '2024-10-30 23:24:29',
            ),
            121 => 
            array (
                'id' => 667,
                'amount' => '16080.00',
                'itemable_id' => 252,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 520,
                'created_at' => '2024-10-30 23:28:14',
                'updated_at' => '2024-10-30 23:28:14',
            ),
            122 => 
            array (
                'id' => 668,
                'amount' => '7139.00',
                'itemable_id' => 253,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 521,
                'created_at' => '2024-10-30 23:30:01',
                'updated_at' => '2024-10-30 23:30:01',
            ),
            123 => 
            array (
                'id' => 669,
                'amount' => '10329.00',
                'itemable_id' => 254,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 522,
                'created_at' => '2024-10-30 23:31:45',
                'updated_at' => '2024-10-30 23:31:45',
            ),
            124 => 
            array (
                'id' => 670,
                'amount' => '46291.66',
                'itemable_id' => 255,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 523,
                'created_at' => '2024-10-30 23:34:28',
                'updated_at' => '2024-10-30 23:34:28',
            ),
            125 => 
            array (
                'id' => 671,
                'amount' => '27777.00',
                'itemable_id' => 256,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 524,
                'created_at' => '2024-10-30 23:37:07',
                'updated_at' => '2024-10-30 23:37:07',
            ),
            126 => 
            array (
                'id' => 672,
                'amount' => '9691.00',
                'itemable_id' => 257,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 525,
                'created_at' => '2024-10-30 23:40:15',
                'updated_at' => '2024-10-30 23:40:15',
            ),
            127 => 
            array (
                'id' => 673,
                'amount' => '9691.00',
                'itemable_id' => 258,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 525,
                'created_at' => '2024-10-30 23:40:15',
                'updated_at' => '2024-10-30 23:40:15',
            ),
            128 => 
            array (
                'id' => 674,
                'amount' => '16695.00',
                'itemable_id' => 259,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 526,
                'created_at' => '2024-10-30 23:42:27',
                'updated_at' => '2024-10-30 23:42:27',
            ),
            129 => 
            array (
                'id' => 675,
                'amount' => '47445.00',
                'itemable_id' => 260,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 527,
                'created_at' => '2024-10-30 23:44:30',
                'updated_at' => '2024-10-30 23:44:30',
            ),
            130 => 
            array (
                'id' => 676,
                'amount' => '16116.00',
                'itemable_id' => 261,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 528,
                'created_at' => '2024-10-30 23:46:21',
                'updated_at' => '2024-10-30 23:46:21',
            ),
            131 => 
            array (
                'id' => 677,
                'amount' => '38888.00',
                'itemable_id' => 262,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 529,
                'created_at' => '2024-10-30 23:52:01',
                'updated_at' => '2024-10-30 23:52:01',
            ),
            132 => 
            array (
                'id' => 678,
                'amount' => '15252.00',
                'itemable_id' => 263,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 530,
                'created_at' => '2024-10-30 23:54:54',
                'updated_at' => '2024-10-30 23:54:54',
            ),
            133 => 
            array (
                'id' => 679,
                'amount' => '30000.00',
                'itemable_id' => 264,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 531,
                'created_at' => '2024-10-30 23:58:48',
                'updated_at' => '2024-10-30 23:58:48',
            ),
            134 => 
            array (
                'id' => 680,
                'amount' => '43888.89',
                'itemable_id' => 265,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 532,
                'created_at' => '2024-10-31 00:03:21',
                'updated_at' => '2024-10-31 00:03:21',
            ),
            135 => 
            array (
                'id' => 681,
                'amount' => '43888.89',
                'itemable_id' => 266,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 532,
                'created_at' => '2024-10-31 00:03:21',
                'updated_at' => '2024-10-31 00:03:21',
            ),
            136 => 
            array (
                'id' => 682,
                'amount' => '38333.00',
                'itemable_id' => 267,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 533,
                'created_at' => '2024-10-31 00:05:57',
                'updated_at' => '2024-10-31 00:05:57',
            ),
            137 => 
            array (
                'id' => 683,
                'amount' => '17667.67',
                'itemable_id' => 268,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 534,
                'created_at' => '2024-10-31 00:11:51',
                'updated_at' => '2024-10-31 00:11:51',
            ),
            138 => 
            array (
                'id' => 684,
                'amount' => '75000.00',
                'itemable_id' => 269,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 535,
                'created_at' => '2024-10-31 00:17:17',
                'updated_at' => '2024-10-31 00:17:17',
            ),
            139 => 
            array (
                'id' => 685,
                'amount' => '75000.00',
                'itemable_id' => 270,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 535,
                'created_at' => '2024-10-31 00:17:17',
                'updated_at' => '2024-10-31 00:17:17',
            ),
            140 => 
            array (
                'id' => 686,
                'amount' => '18334.00',
                'itemable_id' => 271,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 536,
                'created_at' => '2024-10-31 00:19:22',
                'updated_at' => '2024-10-31 00:19:22',
            ),
            141 => 
            array (
                'id' => 687,
                'amount' => '31527.00',
                'itemable_id' => 272,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 537,
                'created_at' => '2024-10-31 00:25:38',
                'updated_at' => '2024-10-31 00:25:38',
            ),
            142 => 
            array (
                'id' => 688,
                'amount' => '83334.00',
                'itemable_id' => 273,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 538,
                'created_at' => '2024-10-31 00:30:54',
                'updated_at' => '2024-10-31 00:30:54',
            ),
            143 => 
            array (
                'id' => 689,
                'amount' => '8770.00',
                'itemable_id' => 274,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 539,
                'created_at' => '2024-10-31 00:33:41',
                'updated_at' => '2024-10-31 00:33:41',
            ),
            144 => 
            array (
                'id' => 690,
                'amount' => '79861.11',
                'itemable_id' => 275,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 540,
                'created_at' => '2024-10-31 00:36:44',
                'updated_at' => '2024-10-31 00:36:44',
            ),
            145 => 
            array (
                'id' => 691,
                'amount' => '94167.00',
                'itemable_id' => 276,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 541,
                'created_at' => '2024-10-31 00:38:44',
                'updated_at' => '2024-10-31 00:38:44',
            ),
            146 => 
            array (
                'id' => 692,
                'amount' => '37500.00',
                'itemable_id' => 277,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 542,
                'created_at' => '2024-10-31 00:40:51',
                'updated_at' => '2024-10-31 00:40:51',
            ),
            147 => 
            array (
                'id' => 693,
                'amount' => '15612.00',
                'itemable_id' => 278,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 543,
                'created_at' => '2024-10-31 00:43:16',
                'updated_at' => '2024-10-31 00:43:16',
            ),
            148 => 
            array (
                'id' => 694,
                'amount' => '27381.67',
                'itemable_id' => 279,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 544,
                'created_at' => '2024-10-31 00:45:11',
                'updated_at' => '2024-10-31 00:45:11',
            ),
            149 => 
            array (
                'id' => 695,
                'amount' => '39167.00',
                'itemable_id' => 280,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 545,
                'created_at' => '2024-10-31 00:47:32',
                'updated_at' => '2024-10-31 00:47:32',
            ),
            150 => 
            array (
                'id' => 696,
                'amount' => '38333.00',
                'itemable_id' => 281,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 546,
                'created_at' => '2024-10-31 00:49:04',
                'updated_at' => '2024-10-31 00:49:04',
            ),
            151 => 
            array (
                'id' => 697,
                'amount' => '41667.00',
                'itemable_id' => 282,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 547,
                'created_at' => '2024-10-31 00:50:39',
                'updated_at' => '2024-10-31 00:50:39',
            ),
            152 => 
            array (
                'id' => 698,
                'amount' => '21667.00',
                'itemable_id' => 283,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 548,
                'created_at' => '2024-10-31 00:52:39',
                'updated_at' => '2024-10-31 00:52:39',
            ),
            153 => 
            array (
                'id' => 699,
                'amount' => '83332.00',
                'itemable_id' => 284,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 549,
                'created_at' => '2024-10-31 00:55:14',
                'updated_at' => '2024-10-31 00:55:14',
            ),
            154 => 
            array (
                'id' => 700,
                'amount' => '69445.00',
                'itemable_id' => 285,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 550,
                'created_at' => '2024-10-31 00:57:08',
                'updated_at' => '2024-10-31 00:57:08',
            ),
            155 => 
            array (
                'id' => 701,
                'amount' => '6944.44',
                'itemable_id' => 286,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 551,
                'created_at' => '2024-10-31 00:58:41',
                'updated_at' => '2024-10-31 00:58:41',
            ),
            156 => 
            array (
                'id' => 702,
                'amount' => '33195.00',
                'itemable_id' => 287,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 552,
                'created_at' => '2024-10-31 01:00:32',
                'updated_at' => '2024-10-31 01:00:32',
            ),
            157 => 
            array (
                'id' => 703,
                'amount' => '79689.00',
                'itemable_id' => 288,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 553,
                'created_at' => '2024-10-31 01:03:51',
                'updated_at' => '2024-10-31 01:03:51',
            ),
            158 => 
            array (
                'id' => 704,
                'amount' => '3600.00',
                'itemable_id' => 534,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 554,
                'created_at' => '2024-11-04 18:52:40',
                'updated_at' => '2024-11-04 18:52:40',
            ),
            159 => 
            array (
                'id' => 705,
                'amount' => '260.00',
                'itemable_id' => 533,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 554,
                'created_at' => '2024-11-04 18:52:40',
                'updated_at' => '2024-11-04 18:52:40',
            ),
            160 => 
            array (
                'id' => 706,
                'amount' => '960.00',
                'itemable_id' => 532,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 554,
                'created_at' => '2024-11-04 18:52:40',
                'updated_at' => '2024-11-04 18:52:40',
            ),
            161 => 
            array (
                'id' => 707,
                'amount' => '500.00',
                'itemable_id' => 535,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 555,
                'created_at' => '2024-11-04 19:12:50',
                'updated_at' => '2024-11-04 19:12:50',
            ),
            162 => 
            array (
                'id' => 708,
                'amount' => '4000.00',
                'itemable_id' => 536,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 556,
                'created_at' => '2024-11-04 19:30:04',
                'updated_at' => '2024-11-04 19:30:04',
            ),
            163 => 
            array (
                'id' => 709,
                'amount' => '1560.00',
                'itemable_id' => 539,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 557,
                'created_at' => '2024-11-04 21:49:48',
                'updated_at' => '2024-11-04 21:49:48',
            ),
            164 => 
            array (
                'id' => 710,
                'amount' => '1560.00',
                'itemable_id' => 538,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 557,
                'created_at' => '2024-11-04 21:49:48',
                'updated_at' => '2024-11-04 21:49:48',
            ),
            165 => 
            array (
                'id' => 711,
                'amount' => '1500.00',
                'itemable_id' => 541,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 558,
                'created_at' => '2024-11-04 22:30:20',
                'updated_at' => '2024-11-04 22:30:20',
            ),
            166 => 
            array (
                'id' => 712,
                'amount' => '6070.00',
                'itemable_id' => 540,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 558,
                'created_at' => '2024-11-04 22:30:20',
                'updated_at' => '2024-11-04 22:30:20',
            ),
            167 => 
            array (
                'id' => 713,
                'amount' => '2640.00',
                'itemable_id' => 542,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 559,
                'created_at' => '2024-11-04 23:50:48',
                'updated_at' => '2024-11-04 23:50:48',
            ),
            168 => 
            array (
                'id' => 714,
                'amount' => '6320.00',
                'itemable_id' => 545,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 560,
                'created_at' => '2024-11-05 00:21:48',
                'updated_at' => '2024-11-05 00:21:48',
            ),
            169 => 
            array (
                'id' => 715,
                'amount' => '6320.00',
                'itemable_id' => 544,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 560,
                'created_at' => '2024-11-05 00:21:48',
                'updated_at' => '2024-11-05 00:21:48',
            ),
            170 => 
            array (
                'id' => 716,
                'amount' => '3300.00',
                'itemable_id' => 543,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 560,
                'created_at' => '2024-11-05 00:21:48',
                'updated_at' => '2024-11-05 00:21:48',
            ),
            171 => 
            array (
                'id' => 717,
                'amount' => '1500.00',
                'itemable_id' => 371,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 561,
                'created_at' => '2024-11-05 18:37:17',
                'updated_at' => '2024-11-05 18:37:17',
            ),
            172 => 
            array (
                'id' => 718,
                'amount' => '6070.00',
                'itemable_id' => 370,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 561,
                'created_at' => '2024-11-05 18:37:17',
                'updated_at' => '2024-11-05 18:37:17',
            ),
            173 => 
            array (
                'id' => 719,
                'amount' => '1650.00',
                'itemable_id' => 369,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 561,
                'created_at' => '2024-11-05 18:37:17',
                'updated_at' => '2024-11-05 18:37:17',
            ),
            174 => 
            array (
                'id' => 720,
                'amount' => '1500.00',
                'itemable_id' => 368,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 561,
                'created_at' => '2024-11-05 18:37:17',
                'updated_at' => '2024-11-05 18:37:17',
            ),
            175 => 
            array (
                'id' => 721,
                'amount' => '6445.00',
                'itemable_id' => 367,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 561,
                'created_at' => '2024-11-05 18:37:17',
                'updated_at' => '2024-11-05 18:37:17',
            ),
            176 => 
            array (
                'id' => 722,
                'amount' => '1100.00',
                'itemable_id' => 366,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 561,
                'created_at' => '2024-11-05 18:37:17',
                'updated_at' => '2024-11-05 18:37:17',
            ),
            177 => 
            array (
                'id' => 723,
                'amount' => '1500.00',
                'itemable_id' => 365,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 561,
                'created_at' => '2024-11-05 18:37:17',
                'updated_at' => '2024-11-05 18:37:17',
            ),
            178 => 
            array (
                'id' => 724,
                'amount' => '6070.00',
                'itemable_id' => 364,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 561,
                'created_at' => '2024-11-05 18:37:17',
                'updated_at' => '2024-11-05 18:37:17',
            ),
            179 => 
            array (
                'id' => 725,
                'amount' => '2650.00',
                'itemable_id' => 363,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 561,
                'created_at' => '2024-11-05 18:37:17',
                'updated_at' => '2024-11-05 18:37:17',
            ),
            180 => 
            array (
                'id' => 726,
                'amount' => '1500.00',
                'itemable_id' => 362,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 561,
                'created_at' => '2024-11-05 18:37:17',
                'updated_at' => '2024-11-05 18:37:17',
            ),
            181 => 
            array (
                'id' => 727,
                'amount' => '7545.00',
                'itemable_id' => 361,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 561,
                'created_at' => '2024-11-05 18:37:17',
                'updated_at' => '2024-11-05 18:37:17',
            ),
            182 => 
            array (
                'id' => 728,
                'amount' => '3650.00',
                'itemable_id' => 360,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 561,
                'created_at' => '2024-11-05 18:37:17',
                'updated_at' => '2024-11-05 18:37:17',
            ),
            183 => 
            array (
                'id' => 729,
                'amount' => '1000.00',
                'itemable_id' => 358,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 561,
                'created_at' => '2024-11-05 18:37:17',
                'updated_at' => '2024-11-05 18:37:17',
            ),
            184 => 
            array (
                'id' => 730,
                'amount' => '1500.00',
                'itemable_id' => 355,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 561,
                'created_at' => '2024-11-05 18:37:17',
                'updated_at' => '2024-11-05 18:37:17',
            ),
            185 => 
            array (
                'id' => 731,
                'amount' => '6120.00',
                'itemable_id' => 354,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 561,
                'created_at' => '2024-11-05 18:37:17',
                'updated_at' => '2024-11-05 18:37:17',
            ),
            186 => 
            array (
                'id' => 732,
                'amount' => '2475.00',
                'itemable_id' => 353,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 561,
                'created_at' => '2024-11-05 18:37:17',
                'updated_at' => '2024-11-05 18:37:17',
            ),
            187 => 
            array (
                'id' => 733,
                'amount' => '4100.00',
                'itemable_id' => 352,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 561,
                'created_at' => '2024-11-05 18:37:17',
                'updated_at' => '2024-11-05 18:37:17',
            ),
            188 => 
            array (
                'id' => 734,
                'amount' => '2675.00',
                'itemable_id' => 351,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 561,
                'created_at' => '2024-11-05 18:37:17',
                'updated_at' => '2024-11-05 18:37:17',
            ),
            189 => 
            array (
                'id' => 735,
                'amount' => '1100.00',
                'itemable_id' => 348,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 561,
                'created_at' => '2024-11-05 18:37:17',
                'updated_at' => '2024-11-05 18:37:17',
            ),
            190 => 
            array (
                'id' => 736,
                'amount' => '26445.00',
                'itemable_id' => 289,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 562,
                'created_at' => '2024-11-05 18:43:54',
                'updated_at' => '2024-11-05 18:43:54',
            ),
            191 => 
            array (
                'id' => 737,
                'amount' => '2100.00',
                'itemable_id' => 547,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 563,
                'created_at' => '2024-11-05 18:55:27',
                'updated_at' => '2024-11-05 18:55:27',
            ),
            192 => 
            array (
                'id' => 738,
                'amount' => '2500.00',
                'itemable_id' => 546,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 564,
                'created_at' => '2024-11-05 19:16:45',
                'updated_at' => '2024-11-05 19:16:45',
            ),
            193 => 
            array (
                'id' => 739,
                'amount' => '90.00',
                'itemable_id' => 290,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 565,
                'created_at' => '2024-11-05 21:00:02',
                'updated_at' => '2024-11-05 21:00:02',
            ),
            194 => 
            array (
                'id' => 740,
                'amount' => '550.00',
                'itemable_id' => 548,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 566,
                'created_at' => '2024-11-05 21:59:34',
                'updated_at' => '2024-11-05 21:59:34',
            ),
            195 => 
            array (
                'id' => 741,
                'amount' => '1000.00',
                'itemable_id' => 291,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 567,
                'created_at' => '2024-11-05 22:48:38',
                'updated_at' => '2024-11-05 22:48:38',
            ),
            196 => 
            array (
                'id' => 742,
                'amount' => '1000.00',
                'itemable_id' => 292,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 568,
                'created_at' => '2024-11-05 22:50:04',
                'updated_at' => '2024-11-05 22:50:04',
            ),
            197 => 
            array (
                'id' => 743,
                'amount' => '8400.00',
                'itemable_id' => 550,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 569,
                'created_at' => '2024-11-06 16:36:31',
                'updated_at' => '2024-11-06 16:36:31',
            ),
            198 => 
            array (
                'id' => 744,
                'amount' => '9670.00',
                'itemable_id' => 555,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 570,
                'created_at' => '2024-11-06 18:11:36',
                'updated_at' => '2024-11-06 18:11:36',
            ),
            199 => 
            array (
                'id' => 745,
                'amount' => '9670.00',
                'itemable_id' => 554,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 570,
                'created_at' => '2024-11-06 18:11:36',
                'updated_at' => '2024-11-06 18:11:36',
            ),
            200 => 
            array (
                'id' => 746,
                'amount' => '9670.00',
                'itemable_id' => 553,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 570,
                'created_at' => '2024-11-06 18:11:36',
                'updated_at' => '2024-11-06 18:11:36',
            ),
            201 => 
            array (
                'id' => 747,
                'amount' => '9670.00',
                'itemable_id' => 552,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 570,
                'created_at' => '2024-11-06 18:11:36',
                'updated_at' => '2024-11-06 18:11:36',
            ),
            202 => 
            array (
                'id' => 748,
                'amount' => '6200.00',
                'itemable_id' => 551,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 570,
                'created_at' => '2024-11-06 18:11:36',
                'updated_at' => '2024-11-06 18:11:36',
            ),
            203 => 
            array (
                'id' => 749,
                'amount' => '500.00',
                'itemable_id' => 556,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 571,
                'created_at' => '2024-11-06 18:25:13',
                'updated_at' => '2024-11-06 18:25:13',
            ),
            204 => 
            array (
                'id' => 750,
                'amount' => '1000.00',
                'itemable_id' => 557,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 572,
                'created_at' => '2024-11-06 18:55:05',
                'updated_at' => '2024-11-06 18:55:05',
            ),
            205 => 
            array (
                'id' => 751,
                'amount' => '2500.00',
                'itemable_id' => 558,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 573,
                'created_at' => '2024-11-06 19:07:23',
                'updated_at' => '2024-11-06 19:07:23',
            ),
            206 => 
            array (
                'id' => 752,
                'amount' => '2000.00',
                'itemable_id' => 559,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 574,
                'created_at' => '2024-11-06 19:36:52',
                'updated_at' => '2024-11-06 19:36:52',
            ),
            207 => 
            array (
                'id' => 753,
                'amount' => '200.00',
                'itemable_id' => 293,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 575,
                'created_at' => '2024-11-06 20:50:56',
                'updated_at' => '2024-11-06 20:50:56',
            ),
            208 => 
            array (
                'id' => 754,
                'amount' => '1080.00',
                'itemable_id' => 561,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 576,
                'created_at' => '2024-11-06 21:59:23',
                'updated_at' => '2024-11-06 21:59:23',
            ),
            209 => 
            array (
                'id' => 755,
                'amount' => '1960.00',
                'itemable_id' => 560,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 576,
                'created_at' => '2024-11-06 21:59:23',
                'updated_at' => '2024-11-06 21:59:23',
            ),
            210 => 
            array (
                'id' => 756,
                'amount' => '2500.00',
                'itemable_id' => 562,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 577,
                'created_at' => '2024-11-06 22:24:06',
                'updated_at' => '2024-11-06 22:24:06',
            ),
            211 => 
            array (
                'id' => 757,
                'amount' => '1680.00',
                'itemable_id' => 564,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 578,
                'created_at' => '2024-11-06 23:01:57',
                'updated_at' => '2024-11-06 23:01:57',
            ),
            212 => 
            array (
                'id' => 758,
                'amount' => '880.00',
                'itemable_id' => 563,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 578,
                'created_at' => '2024-11-06 23:01:57',
                'updated_at' => '2024-11-06 23:01:57',
            ),
            213 => 
            array (
                'id' => 759,
                'amount' => '1680.00',
                'itemable_id' => 566,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 579,
                'created_at' => '2024-11-06 23:12:31',
                'updated_at' => '2024-11-06 23:12:31',
            ),
            214 => 
            array (
                'id' => 760,
                'amount' => '1680.00',
                'itemable_id' => 565,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 580,
                'created_at' => '2024-11-06 23:12:53',
                'updated_at' => '2024-11-06 23:12:53',
            ),
            215 => 
            array (
                'id' => 761,
                'amount' => '2160.00',
                'itemable_id' => 569,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 581,
                'created_at' => '2024-11-06 23:41:41',
                'updated_at' => '2024-11-06 23:41:41',
            ),
            216 => 
            array (
                'id' => 762,
                'amount' => '1960.00',
                'itemable_id' => 568,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 581,
                'created_at' => '2024-11-06 23:41:41',
                'updated_at' => '2024-11-06 23:41:41',
            ),
            217 => 
            array (
                'id' => 763,
                'amount' => '1960.00',
                'itemable_id' => 567,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 581,
                'created_at' => '2024-11-06 23:41:41',
                'updated_at' => '2024-11-06 23:41:41',
            ),
            218 => 
            array (
                'id' => 764,
                'amount' => '2000.00',
                'itemable_id' => 574,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 582,
                'created_at' => '2024-11-08 17:42:53',
                'updated_at' => '2024-11-08 17:42:53',
            ),
            219 => 
            array (
                'id' => 765,
                'amount' => '2000.00',
                'itemable_id' => 525,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 583,
                'created_at' => '2024-11-08 21:28:47',
                'updated_at' => '2024-11-08 21:28:47',
            ),
            220 => 
            array (
                'id' => 766,
                'amount' => '2000.00',
                'itemable_id' => 524,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 583,
                'created_at' => '2024-11-08 21:28:47',
                'updated_at' => '2024-11-08 21:28:47',
            ),
            221 => 
            array (
                'id' => 767,
                'amount' => '11520.00',
                'itemable_id' => 577,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 584,
                'created_at' => '2024-11-08 22:44:35',
                'updated_at' => '2024-11-08 22:44:35',
            ),
            222 => 
            array (
                'id' => 768,
                'amount' => '8250.00',
                'itemable_id' => 580,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 585,
                'created_at' => '2024-11-11 17:12:14',
                'updated_at' => '2024-11-11 17:12:14',
            ),
            223 => 
            array (
                'id' => 769,
                'amount' => '8250.00',
                'itemable_id' => 579,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 585,
                'created_at' => '2024-11-11 17:12:14',
                'updated_at' => '2024-11-11 17:12:14',
            ),
            224 => 
            array (
                'id' => 770,
                'amount' => '6600.00',
                'itemable_id' => 578,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 585,
                'created_at' => '2024-11-11 17:12:14',
                'updated_at' => '2024-11-11 17:12:14',
            ),
            225 => 
            array (
                'id' => 771,
                'amount' => '2500.00',
                'itemable_id' => 581,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 586,
                'created_at' => '2024-11-11 18:23:31',
                'updated_at' => '2024-11-11 18:23:31',
            ),
            226 => 
            array (
                'id' => 772,
                'amount' => '3300.00',
                'itemable_id' => 582,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 587,
                'created_at' => '2024-11-11 20:24:28',
                'updated_at' => '2024-11-11 20:24:28',
            ),
            227 => 
            array (
                'id' => 773,
                'amount' => '8000.00',
                'itemable_id' => 585,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 588,
                'created_at' => '2024-11-11 22:17:14',
                'updated_at' => '2024-11-11 22:17:14',
            ),
            228 => 
            array (
                'id' => 774,
                'amount' => '6000.00',
                'itemable_id' => 584,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 588,
                'created_at' => '2024-11-11 22:17:14',
                'updated_at' => '2024-11-11 22:17:14',
            ),
            229 => 
            array (
                'id' => 775,
                'amount' => '1554.00',
                'itemable_id' => 583,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 588,
                'created_at' => '2024-11-11 22:17:14',
                'updated_at' => '2024-11-11 22:17:14',
            ),
            230 => 
            array (
                'id' => 776,
                'amount' => '2500.00',
                'itemable_id' => 586,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 589,
                'created_at' => '2024-11-12 17:56:25',
                'updated_at' => '2024-11-12 17:56:25',
            ),
            231 => 
            array (
                'id' => 777,
                'amount' => '6600.00',
                'itemable_id' => 591,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 590,
                'created_at' => '2024-11-12 19:11:37',
                'updated_at' => '2024-11-12 19:11:37',
            ),
            232 => 
            array (
                'id' => 778,
                'amount' => '5500.00',
                'itemable_id' => 590,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 590,
                'created_at' => '2024-11-12 19:11:37',
                'updated_at' => '2024-11-12 19:11:37',
            ),
            233 => 
            array (
                'id' => 779,
                'amount' => '5500.00',
                'itemable_id' => 589,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 590,
                'created_at' => '2024-11-12 19:11:37',
                'updated_at' => '2024-11-12 19:11:37',
            ),
            234 => 
            array (
                'id' => 780,
                'amount' => '5500.00',
                'itemable_id' => 588,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 590,
                'created_at' => '2024-11-12 19:11:37',
                'updated_at' => '2024-11-12 19:11:37',
            ),
            235 => 
            array (
                'id' => 781,
                'amount' => '5500.00',
                'itemable_id' => 587,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 590,
                'created_at' => '2024-11-12 19:11:37',
                'updated_at' => '2024-11-12 19:11:37',
            ),
            236 => 
            array (
                'id' => 782,
                'amount' => '500.00',
                'itemable_id' => 592,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 591,
                'created_at' => '2024-11-12 19:36:16',
                'updated_at' => '2024-11-12 19:36:16',
            ),
            237 => 
            array (
                'id' => 783,
                'amount' => '12300.00',
                'itemable_id' => 594,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 592,
                'created_at' => '2024-11-12 19:59:51',
                'updated_at' => '2024-11-12 19:59:51',
            ),
            238 => 
            array (
                'id' => 784,
                'amount' => '2100.00',
                'itemable_id' => 593,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 592,
                'created_at' => '2024-11-12 19:59:51',
                'updated_at' => '2024-11-12 19:59:51',
            ),
            239 => 
            array (
                'id' => 786,
                'amount' => '370520.76',
                'itemable_id' => 295,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 594,
                'created_at' => '2024-11-12 22:05:36',
                'updated_at' => '2024-11-12 22:05:36',
            ),
            240 => 
            array (
                'id' => 787,
                'amount' => '1000.00',
                'itemable_id' => 604,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 595,
                'created_at' => '2024-11-12 22:41:26',
                'updated_at' => '2024-11-12 22:41:26',
            ),
            241 => 
            array (
                'id' => 788,
                'amount' => '8950.00',
                'itemable_id' => 607,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 596,
                'created_at' => '2024-11-12 23:32:22',
                'updated_at' => '2024-11-12 23:32:22',
            ),
            242 => 
            array (
                'id' => 789,
                'amount' => '8950.00',
                'itemable_id' => 606,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 596,
                'created_at' => '2024-11-12 23:32:22',
                'updated_at' => '2024-11-12 23:32:22',
            ),
            243 => 
            array (
                'id' => 790,
                'amount' => '8950.00',
                'itemable_id' => 605,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 596,
                'created_at' => '2024-11-12 23:32:22',
                'updated_at' => '2024-11-12 23:32:22',
            ),
            244 => 
            array (
                'id' => 791,
                'amount' => '46028.00',
                'itemable_id' => 296,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 597,
                'created_at' => '2024-11-13 01:45:10',
                'updated_at' => '2024-11-13 01:45:10',
            ),
            245 => 
            array (
                'id' => 792,
                'amount' => '5502.00',
                'itemable_id' => 297,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 598,
                'created_at' => '2024-11-13 01:47:50',
                'updated_at' => '2024-11-13 01:47:50',
            ),
            246 => 
            array (
                'id' => 793,
                'amount' => '10917.00',
                'itemable_id' => 298,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 598,
                'created_at' => '2024-11-13 01:47:50',
                'updated_at' => '2024-11-13 01:47:50',
            ),
            247 => 
            array (
                'id' => 794,
                'amount' => '3581.00',
                'itemable_id' => 299,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 598,
                'created_at' => '2024-11-13 01:47:50',
                'updated_at' => '2024-11-13 01:47:50',
            ),
            248 => 
            array (
                'id' => 795,
                'amount' => '7500.00',
                'itemable_id' => 608,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 599,
                'created_at' => '2024-11-13 19:40:28',
                'updated_at' => '2024-11-13 19:40:28',
            ),
            249 => 
            array (
                'id' => 796,
                'amount' => '3500.00',
                'itemable_id' => 609,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 600,
                'created_at' => '2024-11-13 19:51:54',
                'updated_at' => '2024-11-13 19:51:54',
            ),
            250 => 
            array (
                'id' => 797,
                'amount' => '4600.00',
                'itemable_id' => 610,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 601,
                'created_at' => '2024-11-13 20:52:17',
                'updated_at' => '2024-11-13 20:52:17',
            ),
            251 => 
            array (
                'id' => 798,
                'amount' => '600.00',
                'itemable_id' => 603,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 602,
                'created_at' => '2024-11-13 21:41:57',
                'updated_at' => '2024-11-13 21:41:57',
            ),
            252 => 
            array (
                'id' => 799,
                'amount' => '4650.00',
                'itemable_id' => 602,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 602,
                'created_at' => '2024-11-13 21:41:57',
                'updated_at' => '2024-11-13 21:41:57',
            ),
            253 => 
            array (
                'id' => 800,
                'amount' => '4650.00',
                'itemable_id' => 601,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 602,
                'created_at' => '2024-11-13 21:41:57',
                'updated_at' => '2024-11-13 21:41:57',
            ),
            254 => 
            array (
                'id' => 801,
                'amount' => '4650.00',
                'itemable_id' => 600,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 602,
                'created_at' => '2024-11-13 21:41:57',
                'updated_at' => '2024-11-13 21:41:57',
            ),
            255 => 
            array (
                'id' => 802,
                'amount' => '6200.00',
                'itemable_id' => 599,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 602,
                'created_at' => '2024-11-13 21:41:57',
                'updated_at' => '2024-11-13 21:41:57',
            ),
            256 => 
            array (
                'id' => 803,
                'amount' => '6200.00',
                'itemable_id' => 598,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 602,
                'created_at' => '2024-11-13 21:41:57',
                'updated_at' => '2024-11-13 21:41:57',
            ),
            257 => 
            array (
                'id' => 804,
                'amount' => '6200.00',
                'itemable_id' => 597,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 602,
                'created_at' => '2024-11-13 21:41:57',
                'updated_at' => '2024-11-13 21:41:57',
            ),
            258 => 
            array (
                'id' => 805,
                'amount' => '6200.00',
                'itemable_id' => 596,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 602,
                'created_at' => '2024-11-13 21:41:57',
                'updated_at' => '2024-11-13 21:41:57',
            ),
            259 => 
            array (
                'id' => 806,
                'amount' => '6200.00',
                'itemable_id' => 595,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 602,
                'created_at' => '2024-11-13 21:41:57',
                'updated_at' => '2024-11-13 21:41:57',
            ),
            260 => 
            array (
                'id' => 807,
                'amount' => '2100.00',
                'itemable_id' => 611,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 603,
                'created_at' => '2024-11-13 21:49:32',
                'updated_at' => '2024-11-13 21:49:32',
            ),
            261 => 
            array (
                'id' => 808,
                'amount' => '1900.00',
                'itemable_id' => 612,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 604,
                'created_at' => '2024-11-13 22:18:28',
                'updated_at' => '2024-11-13 22:18:28',
            ),
            262 => 
            array (
                'id' => 809,
                'amount' => '2500.00',
                'itemable_id' => 613,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 605,
                'created_at' => '2024-11-13 22:54:37',
                'updated_at' => '2024-11-13 22:54:37',
            ),
            263 => 
            array (
                'id' => 810,
                'amount' => '4250.00',
                'itemable_id' => 614,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 606,
                'created_at' => '2024-11-14 00:09:51',
                'updated_at' => '2024-11-14 00:09:51',
            ),
            264 => 
            array (
                'id' => 811,
                'amount' => '2500.00',
                'itemable_id' => 615,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 607,
                'created_at' => '2024-11-14 19:08:50',
                'updated_at' => '2024-11-14 19:08:50',
            ),
            265 => 
            array (
                'id' => 812,
                'amount' => '1000.00',
                'itemable_id' => 300,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 608,
                'created_at' => '2024-11-14 21:33:42',
                'updated_at' => '2024-11-14 21:33:42',
            ),
            266 => 
            array (
                'id' => 813,
                'amount' => '1000.00',
                'itemable_id' => 301,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 609,
                'created_at' => '2024-11-14 21:35:28',
                'updated_at' => '2024-11-14 21:35:28',
            ),
            267 => 
            array (
                'id' => 814,
                'amount' => '4100.00',
                'itemable_id' => 630,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 610,
                'created_at' => '2024-11-14 22:39:43',
                'updated_at' => '2024-11-14 22:39:43',
            ),
            268 => 
            array (
                'id' => 815,
                'amount' => '1000.00',
                'itemable_id' => 302,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 611,
                'created_at' => '2024-11-15 17:54:37',
                'updated_at' => '2024-11-15 17:54:37',
            ),
            269 => 
            array (
                'id' => 816,
                'amount' => '1000.00',
                'itemable_id' => 303,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 612,
                'created_at' => '2024-11-15 17:56:54',
                'updated_at' => '2024-11-15 17:56:54',
            ),
            270 => 
            array (
                'id' => 817,
                'amount' => '2000.00',
                'itemable_id' => 645,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 613,
                'created_at' => '2024-11-15 18:19:22',
                'updated_at' => '2024-11-15 18:19:22',
            ),
            271 => 
            array (
                'id' => 818,
                'amount' => '1550.00',
                'itemable_id' => 626,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 614,
                'created_at' => '2024-11-18 18:16:23',
                'updated_at' => '2024-11-18 18:16:23',
            ),
            272 => 
            array (
                'id' => 819,
                'amount' => '1550.00',
                'itemable_id' => 625,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 615,
                'created_at' => '2024-11-18 18:17:08',
                'updated_at' => '2024-11-18 18:17:08',
            ),
            273 => 
            array (
                'id' => 820,
                'amount' => '1550.00',
                'itemable_id' => 624,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 616,
                'created_at' => '2024-11-18 18:18:38',
                'updated_at' => '2024-11-18 18:18:38',
            ),
            274 => 
            array (
                'id' => 821,
                'amount' => '1550.00',
                'itemable_id' => 623,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 617,
                'created_at' => '2024-11-18 18:19:30',
                'updated_at' => '2024-11-18 18:19:30',
            ),
            275 => 
            array (
                'id' => 822,
                'amount' => '1550.00',
                'itemable_id' => 622,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 618,
                'created_at' => '2024-11-18 18:19:56',
                'updated_at' => '2024-11-18 18:19:56',
            ),
            276 => 
            array (
                'id' => 823,
                'amount' => '1550.00',
                'itemable_id' => 621,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 619,
                'created_at' => '2024-11-18 18:20:43',
                'updated_at' => '2024-11-18 18:20:43',
            ),
            277 => 
            array (
                'id' => 824,
                'amount' => '1550.00',
                'itemable_id' => 620,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 620,
                'created_at' => '2024-11-18 18:22:47',
                'updated_at' => '2024-11-18 18:22:47',
            ),
            278 => 
            array (
                'id' => 825,
                'amount' => '1550.00',
                'itemable_id' => 619,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 621,
                'created_at' => '2024-11-18 18:23:11',
                'updated_at' => '2024-11-18 18:23:11',
            ),
            279 => 
            array (
                'id' => 826,
                'amount' => '1550.00',
                'itemable_id' => 618,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 622,
                'created_at' => '2024-11-18 18:24:27',
                'updated_at' => '2024-11-18 18:24:27',
            ),
            280 => 
            array (
                'id' => 827,
                'amount' => '1550.00',
                'itemable_id' => 617,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 623,
                'created_at' => '2024-11-18 18:24:52',
                'updated_at' => '2024-11-18 18:24:52',
            ),
            281 => 
            array (
                'id' => 828,
                'amount' => '1550.00',
                'itemable_id' => 616,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 624,
                'created_at' => '2024-11-18 18:25:37',
                'updated_at' => '2024-11-18 18:25:37',
            ),
            282 => 
            array (
                'id' => 829,
                'amount' => '1550.00',
                'itemable_id' => 627,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 625,
                'created_at' => '2024-11-18 18:26:47',
                'updated_at' => '2024-11-18 18:26:47',
            ),
            283 => 
            array (
                'id' => 830,
                'amount' => '1550.00',
                'itemable_id' => 628,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 626,
                'created_at' => '2024-11-18 18:27:24',
                'updated_at' => '2024-11-18 18:27:24',
            ),
            284 => 
            array (
                'id' => 831,
                'amount' => '1550.00',
                'itemable_id' => 629,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 627,
                'created_at' => '2024-11-18 18:28:33',
                'updated_at' => '2024-11-18 18:28:33',
            ),
            285 => 
            array (
                'id' => 832,
                'amount' => '1550.00',
                'itemable_id' => 631,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 628,
                'created_at' => '2024-11-18 18:28:55',
                'updated_at' => '2024-11-18 18:28:55',
            ),
            286 => 
            array (
                'id' => 833,
                'amount' => '1550.00',
                'itemable_id' => 632,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 629,
                'created_at' => '2024-11-18 18:30:19',
                'updated_at' => '2024-11-18 18:30:19',
            ),
            287 => 
            array (
                'id' => 834,
                'amount' => '1550.00',
                'itemable_id' => 633,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 630,
                'created_at' => '2024-11-18 18:31:16',
                'updated_at' => '2024-11-18 18:31:16',
            ),
            288 => 
            array (
                'id' => 835,
                'amount' => '1550.00',
                'itemable_id' => 634,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 631,
                'created_at' => '2024-11-18 18:31:38',
                'updated_at' => '2024-11-18 18:31:38',
            ),
            289 => 
            array (
                'id' => 836,
                'amount' => '1550.00',
                'itemable_id' => 635,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 632,
                'created_at' => '2024-11-18 18:32:25',
                'updated_at' => '2024-11-18 18:32:25',
            ),
            290 => 
            array (
                'id' => 837,
                'amount' => '1550.00',
                'itemable_id' => 636,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 633,
                'created_at' => '2024-11-18 18:33:10',
                'updated_at' => '2024-11-18 18:33:10',
            ),
            291 => 
            array (
                'id' => 838,
                'amount' => '1550.00',
                'itemable_id' => 637,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 634,
                'created_at' => '2024-11-18 18:33:40',
                'updated_at' => '2024-11-18 18:33:40',
            ),
            292 => 
            array (
                'id' => 839,
                'amount' => '1550.00',
                'itemable_id' => 638,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 635,
                'created_at' => '2024-11-18 18:34:21',
                'updated_at' => '2024-11-18 18:34:21',
            ),
            293 => 
            array (
                'id' => 840,
                'amount' => '1550.00',
                'itemable_id' => 639,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 636,
                'created_at' => '2024-11-18 18:34:57',
                'updated_at' => '2024-11-18 18:34:57',
            ),
            294 => 
            array (
                'id' => 841,
                'amount' => '1550.00',
                'itemable_id' => 640,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 637,
                'created_at' => '2024-11-18 18:35:33',
                'updated_at' => '2024-11-18 18:35:33',
            ),
            295 => 
            array (
                'id' => 842,
                'amount' => '1550.00',
                'itemable_id' => 641,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 638,
                'created_at' => '2024-11-18 18:36:30',
                'updated_at' => '2024-11-18 18:36:30',
            ),
            296 => 
            array (
                'id' => 843,
                'amount' => '1550.00',
                'itemable_id' => 642,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 639,
                'created_at' => '2024-11-18 18:36:52',
                'updated_at' => '2024-11-18 18:36:52',
            ),
            297 => 
            array (
                'id' => 844,
                'amount' => '1550.00',
                'itemable_id' => 643,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 640,
                'created_at' => '2024-11-18 18:37:52',
                'updated_at' => '2024-11-18 18:37:52',
            ),
            298 => 
            array (
                'id' => 845,
                'amount' => '1550.00',
                'itemable_id' => 644,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 641,
                'created_at' => '2024-11-18 18:38:26',
                'updated_at' => '2024-11-18 18:38:26',
            ),
            299 => 
            array (
                'id' => 846,
                'amount' => '500.00',
                'itemable_id' => 441,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 642,
                'created_at' => '2024-11-18 21:37:45',
                'updated_at' => '2024-11-18 21:37:45',
            ),
            300 => 
            array (
                'id' => 847,
                'amount' => '3850.00',
                'itemable_id' => 438,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 642,
                'created_at' => '2024-11-18 21:37:45',
                'updated_at' => '2024-11-18 21:37:45',
            ),
            301 => 
            array (
                'id' => 848,
                'amount' => '1500.00',
                'itemable_id' => 437,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 642,
                'created_at' => '2024-11-18 21:37:45',
                'updated_at' => '2024-11-18 21:37:45',
            ),
            302 => 
            array (
                'id' => 849,
                'amount' => '6070.00',
                'itemable_id' => 436,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 642,
                'created_at' => '2024-11-18 21:37:45',
                'updated_at' => '2024-11-18 21:37:45',
            ),
            303 => 
            array (
                'id' => 850,
                'amount' => '2053.00',
                'itemable_id' => 435,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 642,
                'created_at' => '2024-11-18 21:37:45',
                'updated_at' => '2024-11-18 21:37:45',
            ),
            304 => 
            array (
                'id' => 851,
                'amount' => '1650.00',
                'itemable_id' => 434,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 642,
                'created_at' => '2024-11-18 21:37:45',
                'updated_at' => '2024-11-18 21:37:45',
            ),
            305 => 
            array (
                'id' => 852,
                'amount' => '1500.00',
                'itemable_id' => 433,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 642,
                'created_at' => '2024-11-18 21:37:45',
                'updated_at' => '2024-11-18 21:37:45',
            ),
            306 => 
            array (
                'id' => 853,
                'amount' => '6070.00',
                'itemable_id' => 432,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 642,
                'created_at' => '2024-11-18 21:37:45',
                'updated_at' => '2024-11-18 21:37:45',
            ),
            307 => 
            array (
                'id' => 854,
                'amount' => '5160.00',
                'itemable_id' => 431,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 642,
                'created_at' => '2024-11-18 21:37:45',
                'updated_at' => '2024-11-18 21:37:45',
            ),
            308 => 
            array (
                'id' => 855,
                'amount' => '550.00',
                'itemable_id' => 430,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 642,
                'created_at' => '2024-11-18 21:37:45',
                'updated_at' => '2024-11-18 21:37:45',
            ),
            309 => 
            array (
                'id' => 856,
                'amount' => '1500.00',
                'itemable_id' => 428,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 642,
                'created_at' => '2024-11-18 21:37:45',
                'updated_at' => '2024-11-18 21:37:45',
            ),
            310 => 
            array (
                'id' => 857,
                'amount' => '6070.00',
                'itemable_id' => 427,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 642,
                'created_at' => '2024-11-18 21:37:45',
                'updated_at' => '2024-11-18 21:37:45',
            ),
            311 => 
            array (
                'id' => 858,
                'amount' => '2550.00',
                'itemable_id' => 426,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 642,
                'created_at' => '2024-11-18 21:37:45',
                'updated_at' => '2024-11-18 21:37:45',
            ),
            312 => 
            array (
                'id' => 859,
                'amount' => '550.00',
                'itemable_id' => 649,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 643,
                'created_at' => '2024-11-18 22:00:04',
                'updated_at' => '2024-11-18 22:00:04',
            ),
            313 => 
            array (
                'id' => 860,
                'amount' => '3500.00',
                'itemable_id' => 650,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 644,
                'created_at' => '2024-11-18 22:27:18',
                'updated_at' => '2024-11-18 22:27:18',
            ),
            314 => 
            array (
                'id' => 861,
                'amount' => '1800.00',
                'itemable_id' => 304,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 645,
                'created_at' => '2024-11-18 22:48:21',
                'updated_at' => '2024-11-18 22:48:21',
            ),
            315 => 
            array (
                'id' => 862,
                'amount' => '6840.00',
                'itemable_id' => 651,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 646,
                'created_at' => '2024-11-18 23:19:23',
                'updated_at' => '2024-11-18 23:19:23',
            ),
            316 => 
            array (
                'id' => 863,
                'amount' => '2520.00',
                'itemable_id' => 657,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 647,
                'created_at' => '2024-11-19 00:06:44',
                'updated_at' => '2024-11-19 00:06:44',
            ),
            317 => 
            array (
                'id' => 864,
                'amount' => '2520.00',
                'itemable_id' => 656,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 647,
                'created_at' => '2024-11-19 00:06:44',
                'updated_at' => '2024-11-19 00:06:44',
            ),
            318 => 
            array (
                'id' => 865,
                'amount' => '2520.00',
                'itemable_id' => 655,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 647,
                'created_at' => '2024-11-19 00:06:44',
                'updated_at' => '2024-11-19 00:06:44',
            ),
            319 => 
            array (
                'id' => 866,
                'amount' => '3976.00',
                'itemable_id' => 646,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 648,
                'created_at' => '2024-11-19 19:24:12',
                'updated_at' => '2024-11-19 19:24:12',
            ),
            320 => 
            array (
                'id' => 867,
                'amount' => '1000.00',
                'itemable_id' => 305,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 649,
                'created_at' => '2024-11-22 17:46:04',
                'updated_at' => '2024-11-22 17:46:04',
            ),
            321 => 
            array (
                'id' => 868,
                'amount' => '550.00',
                'itemable_id' => 664,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 650,
                'created_at' => '2024-11-26 16:33:50',
                'updated_at' => '2024-11-26 16:33:50',
            ),
            322 => 
            array (
                'id' => 869,
                'amount' => '20160.00',
                'itemable_id' => 662,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 651,
                'created_at' => '2024-11-26 16:34:59',
                'updated_at' => '2024-11-26 16:34:59',
            ),
            323 => 
            array (
                'id' => 870,
                'amount' => '2000.00',
                'itemable_id' => 663,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 652,
                'created_at' => '2024-11-26 16:35:25',
                'updated_at' => '2024-11-26 16:35:25',
            ),
            324 => 
            array (
                'id' => 871,
                'amount' => '3360.00',
                'itemable_id' => 668,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 653,
                'created_at' => '2024-11-26 16:36:16',
                'updated_at' => '2024-11-26 16:36:16',
            ),
            325 => 
            array (
                'id' => 872,
                'amount' => '2500.00',
                'itemable_id' => 667,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 654,
                'created_at' => '2024-11-26 17:47:27',
                'updated_at' => '2024-11-26 17:47:27',
            ),
            326 => 
            array (
                'id' => 873,
                'amount' => '700.00',
                'itemable_id' => 666,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 655,
                'created_at' => '2024-11-26 19:14:59',
                'updated_at' => '2024-11-26 19:14:59',
            ),
            327 => 
            array (
                'id' => 874,
                'amount' => '600.00',
                'itemable_id' => 665,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 655,
                'created_at' => '2024-11-26 19:14:59',
                'updated_at' => '2024-11-26 19:14:59',
            ),
            328 => 
            array (
                'id' => 875,
                'amount' => '3000.00',
                'itemable_id' => 672,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 656,
                'created_at' => '2024-11-26 19:21:53',
                'updated_at' => '2024-11-26 19:21:53',
            ),
            329 => 
            array (
                'id' => 876,
                'amount' => '11930.00',
                'itemable_id' => 673,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 657,
                'created_at' => '2024-11-26 19:22:15',
                'updated_at' => '2024-11-26 19:22:15',
            ),
            330 => 
            array (
                'id' => 877,
                'amount' => '400.00',
                'itemable_id' => 670,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 658,
                'created_at' => '2024-11-26 19:34:48',
                'updated_at' => '2024-11-26 19:34:48',
            ),
            331 => 
            array (
                'id' => 878,
                'amount' => '6920.00',
                'itemable_id' => 674,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 659,
                'created_at' => '2024-11-26 19:39:20',
                'updated_at' => '2024-11-26 19:39:20',
            ),
            332 => 
            array (
                'id' => 879,
                'amount' => '4750.00',
                'itemable_id' => 675,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 660,
                'created_at' => '2024-11-26 19:49:49',
                'updated_at' => '2024-11-26 19:49:49',
            ),
            333 => 
            array (
                'id' => 880,
                'amount' => '1100.00',
                'itemable_id' => 677,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 661,
                'created_at' => '2024-11-26 20:54:12',
                'updated_at' => '2024-11-26 20:54:12',
            ),
            334 => 
            array (
                'id' => 881,
                'amount' => '2100.00',
                'itemable_id' => 676,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 662,
                'created_at' => '2024-11-26 21:01:46',
                'updated_at' => '2024-11-26 21:01:46',
            ),
            335 => 
            array (
                'id' => 882,
                'amount' => '5500.00',
                'itemable_id' => 680,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 663,
                'created_at' => '2024-11-26 21:44:41',
                'updated_at' => '2024-11-26 21:44:41',
            ),
            336 => 
            array (
                'id' => 883,
                'amount' => '5500.00',
                'itemable_id' => 679,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 663,
                'created_at' => '2024-11-26 21:44:41',
                'updated_at' => '2024-11-26 21:44:41',
            ),
            337 => 
            array (
                'id' => 884,
                'amount' => '5500.00',
                'itemable_id' => 678,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 663,
                'created_at' => '2024-11-26 21:44:41',
                'updated_at' => '2024-11-26 21:44:41',
            ),
            338 => 
            array (
                'id' => 885,
                'amount' => '500.00',
                'itemable_id' => 681,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 664,
                'created_at' => '2024-11-26 22:44:59',
                'updated_at' => '2024-11-26 22:44:59',
            ),
            339 => 
            array (
                'id' => 886,
                'amount' => '500.00',
                'itemable_id' => 682,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 665,
                'created_at' => '2024-11-26 22:45:20',
                'updated_at' => '2024-11-26 22:45:20',
            ),
            340 => 
            array (
                'id' => 887,
                'amount' => '2500.00',
                'itemable_id' => 671,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 666,
                'created_at' => '2024-11-26 23:53:20',
                'updated_at' => '2024-11-26 23:53:20',
            ),
            341 => 
            array (
                'id' => 888,
                'amount' => '4400.00',
                'itemable_id' => 683,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 667,
                'created_at' => '2024-11-27 18:28:38',
                'updated_at' => '2024-11-27 18:28:38',
            ),
            342 => 
            array (
                'id' => 889,
                'amount' => '6600.00',
                'itemable_id' => 684,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 668,
                'created_at' => '2024-11-27 18:50:33',
                'updated_at' => '2024-11-27 18:50:33',
            ),
            343 => 
            array (
                'id' => 890,
                'amount' => '4200.00',
                'itemable_id' => 686,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 669,
                'created_at' => '2024-11-27 19:26:28',
                'updated_at' => '2024-11-27 19:26:28',
            ),
            344 => 
            array (
                'id' => 891,
                'amount' => '1500.00',
                'itemable_id' => 669,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 670,
                'created_at' => '2024-11-27 21:31:59',
                'updated_at' => '2024-11-27 21:31:59',
            ),
            345 => 
            array (
                'id' => 892,
                'amount' => '10600.00',
                'itemable_id' => 688,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 671,
                'created_at' => '2024-11-27 21:48:15',
                'updated_at' => '2024-11-27 21:48:15',
            ),
            346 => 
            array (
                'id' => 893,
                'amount' => '7950.00',
                'itemable_id' => 687,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 671,
                'created_at' => '2024-11-27 21:48:15',
                'updated_at' => '2024-11-27 21:48:15',
            ),
            347 => 
            array (
                'id' => 894,
                'amount' => '3300.00',
                'itemable_id' => 689,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 672,
                'created_at' => '2024-11-27 23:29:05',
                'updated_at' => '2024-11-27 23:29:05',
            ),
            348 => 
            array (
                'id' => 906,
                'amount' => '9558.00',
                'itemable_id' => 317,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 701,
                'created_at' => '2024-11-29 18:57:41',
                'updated_at' => '2024-11-29 18:57:41',
            ),
            349 => 
            array (
                'id' => 907,
                'amount' => '82778.00',
                'itemable_id' => 318,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 702,
                'created_at' => '2024-11-29 19:00:06',
                'updated_at' => '2024-11-29 19:00:06',
            ),
            350 => 
            array (
                'id' => 908,
                'amount' => '78270.10',
                'itemable_id' => 319,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 703,
                'created_at' => '2024-11-29 19:07:44',
                'updated_at' => '2024-11-29 19:07:44',
            ),
            351 => 
            array (
                'id' => 909,
                'amount' => '41666.67',
                'itemable_id' => 320,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 704,
                'created_at' => '2024-11-29 19:09:19',
                'updated_at' => '2024-11-29 19:09:19',
            ),
            352 => 
            array (
                'id' => 910,
                'amount' => '13423.00',
                'itemable_id' => 321,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 705,
                'created_at' => '2024-11-29 19:10:58',
                'updated_at' => '2024-11-29 19:10:58',
            ),
            353 => 
            array (
                'id' => 911,
                'amount' => '45833.33',
                'itemable_id' => 322,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 706,
                'created_at' => '2024-11-29 19:12:15',
                'updated_at' => '2024-11-29 19:12:15',
            ),
            354 => 
            array (
                'id' => 912,
                'amount' => '41667.00',
                'itemable_id' => 323,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 707,
                'created_at' => '2024-11-29 21:06:42',
                'updated_at' => '2024-11-29 21:06:42',
            ),
            355 => 
            array (
                'id' => 913,
                'amount' => '33334.00',
                'itemable_id' => 324,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 708,
                'created_at' => '2024-11-29 21:08:46',
                'updated_at' => '2024-11-29 21:08:46',
            ),
            356 => 
            array (
                'id' => 914,
                'amount' => '35834.00',
                'itemable_id' => 325,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 709,
                'created_at' => '2024-11-29 21:10:10',
                'updated_at' => '2024-11-29 21:10:10',
            ),
            357 => 
            array (
                'id' => 915,
                'amount' => '51250.00',
                'itemable_id' => 326,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 710,
                'created_at' => '2024-11-29 21:11:56',
                'updated_at' => '2024-11-29 21:11:56',
            ),
            358 => 
            array (
                'id' => 916,
                'amount' => '44166.00',
                'itemable_id' => 327,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 711,
                'created_at' => '2024-11-29 21:13:34',
                'updated_at' => '2024-11-29 21:13:34',
            ),
            359 => 
            array (
                'id' => 917,
                'amount' => '61112.00',
                'itemable_id' => 328,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 712,
                'created_at' => '2024-11-29 21:15:06',
                'updated_at' => '2024-11-29 21:15:06',
            ),
            360 => 
            array (
                'id' => 918,
                'amount' => '35833.33',
                'itemable_id' => 329,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 713,
                'created_at' => '2024-11-29 21:16:33',
                'updated_at' => '2024-11-29 21:16:33',
            ),
            361 => 
            array (
                'id' => 919,
                'amount' => '43333.33',
                'itemable_id' => 330,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 714,
                'created_at' => '2024-11-29 21:17:54',
                'updated_at' => '2024-11-29 21:17:54',
            ),
            362 => 
            array (
                'id' => 920,
                'amount' => '7139.00',
                'itemable_id' => 331,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 715,
                'created_at' => '2024-11-29 21:20:09',
                'updated_at' => '2024-11-29 21:20:09',
            ),
            363 => 
            array (
                'id' => 921,
                'amount' => '26445.00',
                'itemable_id' => 332,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 716,
                'created_at' => '2024-11-29 21:22:50',
                'updated_at' => '2024-11-29 21:22:50',
            ),
            364 => 
            array (
                'id' => 922,
                'amount' => '10329.00',
                'itemable_id' => 333,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 717,
                'created_at' => '2024-11-29 21:23:58',
                'updated_at' => '2024-11-29 21:23:58',
            ),
            365 => 
            array (
                'id' => 923,
                'amount' => '46291.66',
                'itemable_id' => 334,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 718,
                'created_at' => '2024-11-29 21:25:20',
                'updated_at' => '2024-11-29 21:25:20',
            ),
            366 => 
            array (
                'id' => 924,
                'amount' => '14390.00',
                'itemable_id' => 335,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 719,
                'created_at' => '2024-11-29 21:28:21',
                'updated_at' => '2024-11-29 21:28:21',
            ),
            367 => 
            array (
                'id' => 925,
                'amount' => '14390.00',
                'itemable_id' => 336,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 719,
                'created_at' => '2024-11-29 21:28:21',
                'updated_at' => '2024-11-29 21:28:21',
            ),
            368 => 
            array (
                'id' => 926,
                'amount' => '9065.00',
                'itemable_id' => 337,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 720,
                'created_at' => '2024-11-29 21:30:16',
                'updated_at' => '2024-11-29 21:30:16',
            ),
            369 => 
            array (
                'id' => 927,
                'amount' => '27777.00',
                'itemable_id' => 338,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 721,
                'created_at' => '2024-11-29 21:33:36',
                'updated_at' => '2024-11-29 21:33:36',
            ),
            370 => 
            array (
                'id' => 928,
                'amount' => '9691.00',
                'itemable_id' => 339,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 722,
                'created_at' => '2024-11-29 21:34:47',
                'updated_at' => '2024-11-29 21:34:47',
            ),
            371 => 
            array (
                'id' => 929,
                'amount' => '16695.00',
                'itemable_id' => 340,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 723,
                'created_at' => '2024-11-29 21:35:57',
                'updated_at' => '2024-11-29 21:35:57',
            ),
            372 => 
            array (
                'id' => 930,
                'amount' => '47445.00',
                'itemable_id' => 341,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 724,
                'created_at' => '2024-11-29 21:37:40',
                'updated_at' => '2024-11-29 21:37:40',
            ),
            373 => 
            array (
                'id' => 931,
                'amount' => '16116.00',
                'itemable_id' => 342,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 725,
                'created_at' => '2024-11-29 21:38:46',
                'updated_at' => '2024-11-29 21:38:46',
            ),
            374 => 
            array (
                'id' => 932,
                'amount' => '15252.00',
                'itemable_id' => 343,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 726,
                'created_at' => '2024-11-29 21:40:12',
                'updated_at' => '2024-11-29 21:40:12',
            ),
            375 => 
            array (
                'id' => 933,
                'amount' => '42778.00',
                'itemable_id' => 344,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 727,
                'created_at' => '2024-11-29 21:42:37',
                'updated_at' => '2024-11-29 21:42:37',
            ),
            376 => 
            array (
                'id' => 934,
                'amount' => '42778.00',
                'itemable_id' => 345,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 727,
                'created_at' => '2024-11-29 21:42:37',
                'updated_at' => '2024-11-29 21:42:37',
            ),
            377 => 
            array (
                'id' => 935,
                'amount' => '30000.00',
                'itemable_id' => 346,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 728,
                'created_at' => '2024-11-29 21:44:58',
                'updated_at' => '2024-11-29 21:44:58',
            ),
            378 => 
            array (
                'id' => 936,
                'amount' => '43888.89',
                'itemable_id' => 347,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 729,
                'created_at' => '2024-11-29 21:46:09',
                'updated_at' => '2024-11-29 21:46:09',
            ),
            379 => 
            array (
                'id' => 937,
                'amount' => '10721.80',
                'itemable_id' => 348,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 730,
                'created_at' => '2024-11-29 21:47:43',
                'updated_at' => '2024-11-29 21:47:43',
            ),
            380 => 
            array (
                'id' => 938,
                'amount' => '38333.00',
                'itemable_id' => 349,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 731,
                'created_at' => '2024-11-29 21:49:02',
                'updated_at' => '2024-11-29 21:49:02',
            ),
            381 => 
            array (
                'id' => 939,
                'amount' => '75000.00',
                'itemable_id' => 350,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 732,
                'created_at' => '2024-11-29 21:50:43',
                'updated_at' => '2024-11-29 21:50:43',
            ),
            382 => 
            array (
                'id' => 940,
                'amount' => '18334.00',
                'itemable_id' => 351,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 733,
                'created_at' => '2024-11-29 21:52:16',
                'updated_at' => '2024-11-29 21:52:16',
            ),
            383 => 
            array (
                'id' => 941,
                'amount' => '31527.00',
                'itemable_id' => 352,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 734,
                'created_at' => '2024-11-29 21:53:39',
                'updated_at' => '2024-11-29 21:53:39',
            ),
            384 => 
            array (
                'id' => 942,
                'amount' => '83334.00',
                'itemable_id' => 353,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 735,
                'created_at' => '2024-11-29 21:54:45',
                'updated_at' => '2024-11-29 21:54:45',
            ),
            385 => 
            array (
                'id' => 943,
                'amount' => '8770.00',
                'itemable_id' => 354,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 736,
                'created_at' => '2024-11-29 21:56:07',
                'updated_at' => '2024-11-29 21:56:07',
            ),
            386 => 
            array (
                'id' => 944,
                'amount' => '79861.11',
                'itemable_id' => 355,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 737,
                'created_at' => '2024-11-29 21:58:11',
                'updated_at' => '2024-11-29 21:58:11',
            ),
            387 => 
            array (
                'id' => 945,
                'amount' => '37500.00',
                'itemable_id' => 356,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 738,
                'created_at' => '2024-11-29 21:59:24',
                'updated_at' => '2024-11-29 21:59:24',
            ),
            388 => 
            array (
                'id' => 946,
                'amount' => '27381.67',
                'itemable_id' => 357,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 739,
                'created_at' => '2024-11-29 22:02:37',
                'updated_at' => '2024-11-29 22:02:37',
            ),
            389 => 
            array (
                'id' => 947,
                'amount' => '21667.00',
                'itemable_id' => 358,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 740,
                'created_at' => '2024-11-29 23:02:14',
                'updated_at' => '2024-11-29 23:02:14',
            ),
            390 => 
            array (
                'id' => 948,
                'amount' => '42916.67',
                'itemable_id' => 359,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 741,
                'created_at' => '2024-11-29 23:03:36',
                'updated_at' => '2024-11-29 23:03:36',
            ),
            391 => 
            array (
                'id' => 949,
                'amount' => '41667.00',
                'itemable_id' => 360,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 742,
                'created_at' => '2024-11-29 23:05:05',
                'updated_at' => '2024-11-29 23:05:05',
            ),
            392 => 
            array (
                'id' => 950,
                'amount' => '83333.33',
                'itemable_id' => 361,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 743,
                'created_at' => '2024-11-29 23:08:16',
                'updated_at' => '2024-11-29 23:08:16',
            ),
            393 => 
            array (
                'id' => 951,
                'amount' => '38333.00',
                'itemable_id' => 362,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 744,
                'created_at' => '2024-11-29 23:09:58',
                'updated_at' => '2024-11-29 23:09:58',
            ),
            394 => 
            array (
                'id' => 952,
                'amount' => '39167.00',
                'itemable_id' => 363,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 745,
                'created_at' => '2024-11-29 23:11:28',
                'updated_at' => '2024-11-29 23:11:28',
            ),
            395 => 
            array (
                'id' => 953,
                'amount' => '79689.00',
                'itemable_id' => 364,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 746,
                'created_at' => '2024-11-29 23:13:32',
                'updated_at' => '2024-11-29 23:13:32',
            ),
            396 => 
            array (
                'id' => 954,
                'amount' => '33195.00',
                'itemable_id' => 365,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 747,
                'created_at' => '2024-11-29 23:14:41',
                'updated_at' => '2024-11-29 23:14:41',
            ),
            397 => 
            array (
                'id' => 955,
                'amount' => '6944.44',
                'itemable_id' => 366,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 748,
                'created_at' => '2024-11-29 23:15:59',
                'updated_at' => '2024-11-29 23:15:59',
            ),
            398 => 
            array (
                'id' => 956,
                'amount' => '17667.67',
                'itemable_id' => 367,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 749,
                'created_at' => '2024-11-29 23:17:23',
                'updated_at' => '2024-11-29 23:17:23',
            ),
            399 => 
            array (
                'id' => 957,
                'amount' => '69445.00',
                'itemable_id' => 368,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 750,
                'created_at' => '2024-11-29 23:18:47',
                'updated_at' => '2024-11-29 23:18:47',
            ),
            400 => 
            array (
                'id' => 958,
                'amount' => '43889.00',
                'itemable_id' => 369,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 751,
                'created_at' => '2024-11-29 23:21:11',
                'updated_at' => '2024-11-29 23:21:11',
            ),
            401 => 
            array (
                'id' => 959,
                'amount' => '10000.00',
                'itemable_id' => 370,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 752,
                'created_at' => '2024-11-29 23:24:47',
                'updated_at' => '2024-11-29 23:24:47',
            ),
            402 => 
            array (
                'id' => 960,
                'amount' => '69445.00',
                'itemable_id' => 371,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 753,
                'created_at' => '2024-11-29 23:28:11',
                'updated_at' => '2024-11-29 23:28:11',
            ),
            403 => 
            array (
                'id' => 961,
                'amount' => '191665.00',
                'itemable_id' => 372,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 754,
                'created_at' => '2024-11-29 23:38:00',
                'updated_at' => '2024-11-29 23:38:00',
            ),
            404 => 
            array (
                'id' => 962,
                'amount' => '100000.00',
                'itemable_id' => 373,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 755,
                'created_at' => '2024-11-29 23:42:46',
                'updated_at' => '2024-11-29 23:42:46',
            ),
            405 => 
            array (
                'id' => 963,
                'amount' => '3360.00',
                'itemable_id' => 725,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 756,
                'created_at' => '2024-12-02 16:58:00',
                'updated_at' => '2024-12-02 16:58:00',
            ),
            406 => 
            array (
                'id' => 964,
                'amount' => '3500.00',
                'itemable_id' => 745,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 757,
                'created_at' => '2024-12-02 22:29:01',
                'updated_at' => '2024-12-02 22:29:01',
            ),
            407 => 
            array (
                'id' => 965,
                'amount' => '2500.00',
                'itemable_id' => 747,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 758,
                'created_at' => '2024-12-03 00:54:16',
                'updated_at' => '2024-12-03 00:54:16',
            ),
            408 => 
            array (
                'id' => 966,
                'amount' => '1500.00',
                'itemable_id' => 748,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 759,
                'created_at' => '2024-12-03 18:10:42',
                'updated_at' => '2024-12-03 18:10:42',
            ),
            409 => 
            array (
                'id' => 967,
                'amount' => '1500.00',
                'itemable_id' => 749,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 760,
                'created_at' => '2024-12-03 18:34:18',
                'updated_at' => '2024-12-03 18:34:18',
            ),
            410 => 
            array (
                'id' => 968,
                'amount' => '5176.00',
                'itemable_id' => 754,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 761,
                'created_at' => '2024-12-03 21:00:51',
                'updated_at' => '2024-12-03 21:00:51',
            ),
            411 => 
            array (
                'id' => 969,
                'amount' => '10790.00',
                'itemable_id' => 753,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 762,
                'created_at' => '2024-12-03 21:22:33',
                'updated_at' => '2024-12-03 21:22:33',
            ),
            412 => 
            array (
                'id' => 970,
                'amount' => '1760.00',
                'itemable_id' => 755,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 763,
                'created_at' => '2024-12-03 21:51:38',
                'updated_at' => '2024-12-03 21:51:38',
            ),
            413 => 
            array (
                'id' => 971,
                'amount' => '1550.00',
                'itemable_id' => 756,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 764,
                'created_at' => '2024-12-03 22:17:08',
                'updated_at' => '2024-12-03 22:17:08',
            ),
            414 => 
            array (
                'id' => 972,
                'amount' => '500.00',
                'itemable_id' => 751,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 765,
                'created_at' => '2024-12-03 22:57:41',
                'updated_at' => '2024-12-03 22:57:41',
            ),
            415 => 
            array (
                'id' => 973,
                'amount' => '500.00',
                'itemable_id' => 758,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 766,
                'created_at' => '2024-12-03 22:58:31',
                'updated_at' => '2024-12-03 22:58:31',
            ),
            416 => 
            array (
                'id' => 974,
                'amount' => '1500.00',
                'itemable_id' => 757,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 767,
                'created_at' => '2024-12-03 22:58:56',
                'updated_at' => '2024-12-03 22:58:56',
            ),
            417 => 
            array (
                'id' => 975,
                'amount' => '500.00',
                'itemable_id' => 752,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 768,
                'created_at' => '2024-12-03 23:13:17',
                'updated_at' => '2024-12-03 23:13:17',
            ),
            418 => 
            array (
                'id' => 976,
                'amount' => '500.00',
                'itemable_id' => 759,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 769,
                'created_at' => '2024-12-03 23:13:41',
                'updated_at' => '2024-12-03 23:13:41',
            ),
            419 => 
            array (
                'id' => 977,
                'amount' => '1200.00',
                'itemable_id' => 690,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 770,
                'created_at' => '2024-12-03 23:39:44',
                'updated_at' => '2024-12-03 23:39:44',
            ),
            420 => 
            array (
                'id' => 978,
                'amount' => '960.00',
                'itemable_id' => 698,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 771,
                'created_at' => '2024-12-03 23:40:03',
                'updated_at' => '2024-12-03 23:40:03',
            ),
            421 => 
            array (
                'id' => 979,
                'amount' => '1150.00',
                'itemable_id' => 374,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 772,
                'created_at' => '2024-12-04 00:04:39',
                'updated_at' => '2024-12-04 00:04:39',
            ),
            422 => 
            array (
                'id' => 980,
                'amount' => '1000.00',
                'itemable_id' => 762,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 773,
                'created_at' => '2024-12-04 00:17:07',
                'updated_at' => '2024-12-04 00:17:07',
            ),
            423 => 
            array (
                'id' => 981,
                'amount' => '1550.00',
                'itemable_id' => 691,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 774,
                'created_at' => '2024-12-04 00:31:08',
                'updated_at' => '2024-12-04 00:31:08',
            ),
            424 => 
            array (
                'id' => 982,
                'amount' => '2240.00',
                'itemable_id' => 761,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 775,
                'created_at' => '2024-12-04 17:24:22',
                'updated_at' => '2024-12-04 17:24:22',
            ),
            425 => 
            array (
                'id' => 983,
                'amount' => '4000.00',
                'itemable_id' => 763,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 776,
                'created_at' => '2024-12-04 17:35:24',
                'updated_at' => '2024-12-04 17:35:24',
            ),
            426 => 
            array (
                'id' => 984,
                'amount' => '11400.00',
                'itemable_id' => 764,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 777,
                'created_at' => '2024-12-04 18:02:36',
                'updated_at' => '2024-12-04 18:02:36',
            ),
            427 => 
            array (
                'id' => 985,
                'amount' => '500.00',
                'itemable_id' => 766,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 778,
                'created_at' => '2024-12-04 18:19:40',
                'updated_at' => '2024-12-04 18:19:40',
            ),
            428 => 
            array (
                'id' => 986,
                'amount' => '18550.00',
                'itemable_id' => 767,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 779,
                'created_at' => '2024-12-04 18:46:46',
                'updated_at' => '2024-12-04 18:46:46',
            ),
            429 => 
            array (
                'id' => 987,
                'amount' => '8400.00',
                'itemable_id' => 768,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 780,
                'created_at' => '2024-12-04 18:53:52',
                'updated_at' => '2024-12-04 18:53:52',
            ),
            430 => 
            array (
                'id' => 988,
                'amount' => '6920.00',
                'itemable_id' => 770,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 781,
                'created_at' => '2024-12-04 22:24:11',
                'updated_at' => '2024-12-04 22:24:11',
            ),
            431 => 
            array (
                'id' => 989,
                'amount' => '1000.00',
                'itemable_id' => 769,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 781,
                'created_at' => '2024-12-04 22:24:11',
                'updated_at' => '2024-12-04 22:24:11',
            ),
            432 => 
            array (
                'id' => 990,
                'amount' => '550.00',
                'itemable_id' => 772,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 782,
                'created_at' => '2024-12-04 23:04:27',
                'updated_at' => '2024-12-04 23:04:27',
            ),
            433 => 
            array (
                'id' => 991,
                'amount' => '2750.00',
                'itemable_id' => 771,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 782,
                'created_at' => '2024-12-04 23:04:27',
                'updated_at' => '2024-12-04 23:04:27',
            ),
            434 => 
            array (
                'id' => 992,
                'amount' => '650.00',
                'itemable_id' => 375,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 783,
                'created_at' => '2024-12-04 23:21:52',
                'updated_at' => '2024-12-04 23:21:52',
            ),
            435 => 
            array (
                'id' => 993,
                'amount' => '1550.00',
                'itemable_id' => 773,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 784,
                'created_at' => '2024-12-05 00:18:15',
                'updated_at' => '2024-12-05 00:18:15',
            ),
            436 => 
            array (
                'id' => 994,
                'amount' => '3000.00',
                'itemable_id' => 774,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 785,
                'created_at' => '2024-12-05 21:54:10',
                'updated_at' => '2024-12-05 21:54:10',
            ),
            437 => 
            array (
                'id' => 995,
                'amount' => '650.00',
                'itemable_id' => 730,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 786,
                'created_at' => '2024-12-06 00:39:45',
                'updated_at' => '2024-12-06 00:39:45',
            ),
            438 => 
            array (
                'id' => 996,
                'amount' => '650.00',
                'itemable_id' => 729,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 786,
                'created_at' => '2024-12-06 00:39:45',
                'updated_at' => '2024-12-06 00:39:45',
            ),
            439 => 
            array (
                'id' => 997,
                'amount' => '650.00',
                'itemable_id' => 728,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 786,
                'created_at' => '2024-12-06 00:39:45',
                'updated_at' => '2024-12-06 00:39:45',
            ),
            440 => 
            array (
                'id' => 998,
                'amount' => '650.00',
                'itemable_id' => 727,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 786,
                'created_at' => '2024-12-06 00:39:45',
                'updated_at' => '2024-12-06 00:39:45',
            ),
            441 => 
            array (
                'id' => 999,
                'amount' => '650.00',
                'itemable_id' => 726,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 786,
                'created_at' => '2024-12-06 00:39:45',
                'updated_at' => '2024-12-06 00:39:45',
            ),
            442 => 
            array (
                'id' => 1000,
                'amount' => '650.00',
                'itemable_id' => 724,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 786,
                'created_at' => '2024-12-06 00:39:45',
                'updated_at' => '2024-12-06 00:39:45',
            ),
            443 => 
            array (
                'id' => 1001,
                'amount' => '300.00',
                'itemable_id' => 376,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 787,
                'created_at' => '2024-12-06 22:05:19',
                'updated_at' => '2024-12-06 22:05:19',
            ),
            444 => 
            array (
                'id' => 1002,
                'amount' => '550.00',
                'itemable_id' => 775,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 788,
                'created_at' => '2024-12-09 18:32:49',
                'updated_at' => '2024-12-09 18:32:49',
            ),
            445 => 
            array (
                'id' => 1003,
                'amount' => '6060.00',
                'itemable_id' => 777,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 789,
                'created_at' => '2024-12-10 16:52:12',
                'updated_at' => '2024-12-10 16:52:12',
            ),
            446 => 
            array (
                'id' => 1004,
                'amount' => '108768.88',
                'itemable_id' => 377,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 790,
                'created_at' => '2024-12-10 17:34:06',
                'updated_at' => '2024-12-10 17:34:06',
            ),
            447 => 
            array (
                'id' => 1005,
                'amount' => '1631.64',
                'itemable_id' => 378,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 790,
                'created_at' => '2024-12-10 17:34:06',
                'updated_at' => '2024-12-10 17:34:06',
            ),
            448 => 
            array (
                'id' => 1006,
                'amount' => '500.00',
                'itemable_id' => 779,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 791,
                'created_at' => '2024-12-10 18:50:57',
                'updated_at' => '2024-12-10 18:50:57',
            ),
            449 => 
            array (
                'id' => 1007,
                'amount' => '46028.00',
                'itemable_id' => 379,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 792,
                'created_at' => '2024-12-11 00:14:15',
                'updated_at' => '2024-12-11 00:14:15',
            ),
            450 => 
            array (
                'id' => 1008,
                'amount' => '3500.00',
                'itemable_id' => 784,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 793,
                'created_at' => '2024-12-11 19:28:51',
                'updated_at' => '2024-12-11 19:28:51',
            ),
            451 => 
            array (
                'id' => 1009,
                'amount' => '1800.00',
                'itemable_id' => 380,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 794,
                'created_at' => '2024-12-12 17:15:48',
                'updated_at' => '2024-12-12 17:15:48',
            ),
            452 => 
            array (
                'id' => 1011,
                'amount' => '11750.00',
                'itemable_id' => 790,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 796,
                'created_at' => '2024-12-12 19:04:52',
                'updated_at' => '2024-12-12 19:04:52',
            ),
            453 => 
            array (
                'id' => 1012,
                'amount' => '2800.00',
                'itemable_id' => 382,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 797,
                'created_at' => '2024-12-12 21:25:02',
                'updated_at' => '2024-12-12 21:25:02',
            ),
            454 => 
            array (
                'id' => 1013,
                'amount' => '15.20',
                'itemable_id' => 383,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 798,
                'created_at' => '2024-12-12 23:29:24',
                'updated_at' => '2024-12-12 23:29:24',
            ),
            455 => 
            array (
                'id' => 1014,
                'amount' => '500.00',
                'itemable_id' => 786,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 799,
                'created_at' => '2024-12-12 23:34:42',
                'updated_at' => '2024-12-12 23:34:42',
            ),
            456 => 
            array (
                'id' => 1015,
                'amount' => '2550.00',
                'itemable_id' => 384,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 800,
                'created_at' => '2024-12-13 00:18:41',
                'updated_at' => '2024-12-13 00:18:41',
            ),
            457 => 
            array (
                'id' => 1016,
                'amount' => '7.57',
                'itemable_id' => 385,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 801,
                'created_at' => '2024-12-13 16:26:17',
                'updated_at' => '2024-12-13 16:26:17',
            ),
            458 => 
            array (
                'id' => 1017,
                'amount' => '6525.00',
                'itemable_id' => 549,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 802,
                'created_at' => '2024-12-13 18:30:56',
                'updated_at' => '2024-12-13 18:30:56',
            ),
            459 => 
            array (
                'id' => 1018,
                'amount' => '15920.00',
                'itemable_id' => 386,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 803,
                'created_at' => '2024-12-13 18:59:54',
                'updated_at' => '2024-12-13 18:59:54',
            ),
            460 => 
            array (
                'id' => 1019,
                'amount' => '4995.00',
                'itemable_id' => 654,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 804,
                'created_at' => '2024-12-13 22:15:49',
                'updated_at' => '2024-12-13 22:15:49',
            ),
            461 => 
            array (
                'id' => 1020,
                'amount' => '4995.00',
                'itemable_id' => 653,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 804,
                'created_at' => '2024-12-13 22:15:49',
                'updated_at' => '2024-12-13 22:15:49',
            ),
            462 => 
            array (
                'id' => 1021,
                'amount' => '4995.00',
                'itemable_id' => 652,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 804,
                'created_at' => '2024-12-13 22:15:49',
                'updated_at' => '2024-12-13 22:15:49',
            ),
            463 => 
            array (
                'id' => 1022,
                'amount' => '38300.00',
                'itemable_id' => 799,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 805,
                'created_at' => '2024-12-13 23:27:11',
                'updated_at' => '2024-12-13 23:27:11',
            ),
            464 => 
            array (
                'id' => 1023,
                'amount' => '3000.00',
                'itemable_id' => 801,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 806,
                'created_at' => '2024-12-16 20:32:21',
                'updated_at' => '2024-12-16 20:32:21',
            ),
            465 => 
            array (
                'id' => 1024,
                'amount' => '138888.89',
                'itemable_id' => 387,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 807,
                'created_at' => '2024-12-16 20:37:49',
                'updated_at' => '2024-12-16 20:37:49',
            ),
            466 => 
            array (
                'id' => 1025,
                'amount' => '1750.00',
                'itemable_id' => 796,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 808,
                'created_at' => '2024-12-16 22:40:34',
                'updated_at' => '2024-12-16 22:40:34',
            ),
            467 => 
            array (
                'id' => 1026,
                'amount' => '15820.00',
                'itemable_id' => 388,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 809,
                'created_at' => '2024-12-17 00:48:34',
                'updated_at' => '2024-12-17 00:48:34',
            ),
            468 => 
            array (
                'id' => 1027,
                'amount' => '1750.00',
                'itemable_id' => 787,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 810,
                'created_at' => '2024-12-19 16:16:58',
                'updated_at' => '2024-12-19 16:16:58',
            ),
            469 => 
            array (
                'id' => 1028,
                'amount' => '1900.00',
                'itemable_id' => 389,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 811,
                'created_at' => '2024-12-19 17:15:48',
                'updated_at' => '2024-12-19 17:15:48',
            ),
            470 => 
            array (
                'id' => 1029,
                'amount' => '20.00',
                'itemable_id' => 390,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 812,
                'created_at' => '2024-12-19 17:18:00',
                'updated_at' => '2024-12-19 17:18:00',
            ),
            471 => 
            array (
                'id' => 1030,
                'amount' => '800000.00',
                'itemable_id' => 391,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 813,
                'created_at' => '2024-12-20 16:35:57',
                'updated_at' => '2024-12-20 16:35:57',
            ),
            472 => 
            array (
                'id' => 1031,
                'amount' => '9558.00',
                'itemable_id' => 392,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 814,
                'created_at' => '2024-12-20 17:07:09',
                'updated_at' => '2024-12-20 17:07:09',
            ),
            473 => 
            array (
                'id' => 1032,
                'amount' => '82778.00',
                'itemable_id' => 393,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 815,
                'created_at' => '2024-12-20 17:08:44',
                'updated_at' => '2024-12-20 17:08:44',
            ),
            474 => 
            array (
                'id' => 1033,
                'amount' => '78270.10',
                'itemable_id' => 394,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 816,
                'created_at' => '2024-12-20 17:10:08',
                'updated_at' => '2024-12-20 17:10:08',
            ),
            475 => 
            array (
                'id' => 1034,
                'amount' => '41666.67',
                'itemable_id' => 395,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 817,
                'created_at' => '2024-12-20 17:11:28',
                'updated_at' => '2024-12-20 17:11:28',
            ),
            476 => 
            array (
                'id' => 1035,
                'amount' => '15089.00',
                'itemable_id' => 396,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 818,
                'created_at' => '2024-12-20 17:13:25',
                'updated_at' => '2024-12-20 17:13:25',
            ),
            477 => 
            array (
                'id' => 1036,
                'amount' => '83334.00',
                'itemable_id' => 397,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 819,
                'created_at' => '2024-12-20 17:15:45',
                'updated_at' => '2024-12-20 17:15:45',
            ),
            478 => 
            array (
                'id' => 1037,
                'amount' => '13423.00',
                'itemable_id' => 398,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 820,
                'created_at' => '2024-12-20 17:17:42',
                'updated_at' => '2024-12-20 17:17:42',
            ),
            479 => 
            array (
                'id' => 1038,
                'amount' => '45833.33',
                'itemable_id' => 399,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 821,
                'created_at' => '2024-12-20 17:19:02',
                'updated_at' => '2024-12-20 17:19:02',
            ),
            480 => 
            array (
                'id' => 1039,
                'amount' => '16080.00',
                'itemable_id' => 400,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 822,
                'created_at' => '2024-12-20 18:46:07',
                'updated_at' => '2024-12-20 18:46:07',
            ),
            481 => 
            array (
                'id' => 1040,
                'amount' => '16080.00',
                'itemable_id' => 401,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 823,
                'created_at' => '2024-12-20 18:50:28',
                'updated_at' => '2024-12-20 18:50:28',
            ),
            482 => 
            array (
                'id' => 1041,
                'amount' => '7139.00',
                'itemable_id' => 402,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 824,
                'created_at' => '2024-12-20 18:52:27',
                'updated_at' => '2024-12-20 18:52:27',
            ),
            483 => 
            array (
                'id' => 1042,
                'amount' => '26445.00',
                'itemable_id' => 403,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 825,
                'created_at' => '2024-12-20 18:54:28',
                'updated_at' => '2024-12-20 18:54:28',
            ),
            484 => 
            array (
                'id' => 1043,
                'amount' => '46291.66',
                'itemable_id' => 404,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 826,
                'created_at' => '2024-12-20 18:56:17',
                'updated_at' => '2024-12-20 18:56:17',
            ),
            485 => 
            array (
                'id' => 1044,
                'amount' => '14390.00',
                'itemable_id' => 405,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 827,
                'created_at' => '2024-12-20 18:57:27',
                'updated_at' => '2024-12-20 18:57:27',
            ),
            486 => 
            array (
                'id' => 1045,
                'amount' => '27777.00',
                'itemable_id' => 406,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 828,
                'created_at' => '2024-12-20 18:59:24',
                'updated_at' => '2024-12-20 18:59:24',
            ),
            487 => 
            array (
                'id' => 1046,
                'amount' => '9691.00',
                'itemable_id' => 407,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 829,
                'created_at' => '2024-12-20 19:00:52',
                'updated_at' => '2024-12-20 19:00:52',
            ),
            488 => 
            array (
                'id' => 1047,
                'amount' => '16695.00',
                'itemable_id' => 408,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 830,
                'created_at' => '2024-12-20 19:02:41',
                'updated_at' => '2024-12-20 19:02:41',
            ),
            489 => 
            array (
                'id' => 1048,
                'amount' => '21389.00',
                'itemable_id' => 409,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 831,
                'created_at' => '2024-12-20 19:04:16',
                'updated_at' => '2024-12-20 19:04:16',
            ),
            490 => 
            array (
                'id' => 1049,
                'amount' => '47445.00',
                'itemable_id' => 410,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 832,
                'created_at' => '2024-12-20 19:06:57',
                'updated_at' => '2024-12-20 19:06:57',
            ),
            491 => 
            array (
                'id' => 1050,
                'amount' => '16116.00',
                'itemable_id' => 411,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 833,
                'created_at' => '2024-12-20 19:08:08',
                'updated_at' => '2024-12-20 19:08:08',
            ),
            492 => 
            array (
                'id' => 1051,
                'amount' => '30834.00',
                'itemable_id' => 412,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 834,
                'created_at' => '2024-12-20 19:12:21',
                'updated_at' => '2024-12-20 19:12:21',
            ),
            493 => 
            array (
                'id' => 1052,
                'amount' => '30834.00',
                'itemable_id' => 413,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 834,
                'created_at' => '2024-12-20 19:12:21',
                'updated_at' => '2024-12-20 19:12:21',
            ),
            494 => 
            array (
                'id' => 1053,
                'amount' => '30834.00',
                'itemable_id' => 414,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 834,
                'created_at' => '2024-12-20 19:12:21',
                'updated_at' => '2024-12-20 19:12:21',
            ),
            495 => 
            array (
                'id' => 1054,
                'amount' => '30000.00',
                'itemable_id' => 415,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 835,
                'created_at' => '2024-12-20 19:19:04',
                'updated_at' => '2024-12-20 19:19:04',
            ),
            496 => 
            array (
                'id' => 1055,
                'amount' => '43888.89',
                'itemable_id' => 416,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 836,
                'created_at' => '2024-12-20 19:20:20',
                'updated_at' => '2024-12-20 19:20:20',
            ),
            497 => 
            array (
                'id' => 1056,
                'amount' => '10721.80',
                'itemable_id' => 417,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 837,
                'created_at' => '2024-12-20 19:21:19',
                'updated_at' => '2024-12-20 19:21:19',
            ),
            498 => 
            array (
                'id' => 1057,
                'amount' => '38333.00',
                'itemable_id' => 418,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 838,
                'created_at' => '2024-12-20 19:23:33',
                'updated_at' => '2024-12-20 19:23:33',
            ),
            499 => 
            array (
                'id' => 1058,
                'amount' => '75000.00',
                'itemable_id' => 419,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 839,
                'created_at' => '2024-12-20 19:24:41',
                'updated_at' => '2024-12-20 19:24:41',
            ),
        ));
        \DB::table('finance_op_items')->insert(array (
            0 => 
            array (
                'id' => 1059,
                'amount' => '18334.00',
                'itemable_id' => 420,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 840,
                'created_at' => '2024-12-20 19:27:09',
                'updated_at' => '2024-12-20 19:27:09',
            ),
            1 => 
            array (
                'id' => 1060,
                'amount' => '31527.00',
                'itemable_id' => 421,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 841,
                'created_at' => '2024-12-20 19:28:30',
                'updated_at' => '2024-12-20 19:28:30',
            ),
            2 => 
            array (
                'id' => 1061,
                'amount' => '83334.00',
                'itemable_id' => 422,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 842,
                'created_at' => '2024-12-20 19:29:33',
                'updated_at' => '2024-12-20 19:29:33',
            ),
            3 => 
            array (
                'id' => 1062,
                'amount' => '79861.11',
                'itemable_id' => 423,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 843,
                'created_at' => '2024-12-20 19:31:23',
                'updated_at' => '2024-12-20 19:31:23',
            ),
            4 => 
            array (
                'id' => 1063,
                'amount' => '37500.00',
                'itemable_id' => 424,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 844,
                'created_at' => '2024-12-20 19:33:19',
                'updated_at' => '2024-12-20 19:33:19',
            ),
            5 => 
            array (
                'id' => 1064,
                'amount' => '27381.67',
                'itemable_id' => 425,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 845,
                'created_at' => '2024-12-20 19:38:52',
                'updated_at' => '2024-12-20 19:38:52',
            ),
            6 => 
            array (
                'id' => 1065,
                'amount' => '21667.00',
                'itemable_id' => 426,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 846,
                'created_at' => '2024-12-20 19:40:08',
                'updated_at' => '2024-12-20 19:40:08',
            ),
            7 => 
            array (
                'id' => 1066,
                'amount' => '42916.67',
                'itemable_id' => 427,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 847,
                'created_at' => '2024-12-20 19:41:33',
                'updated_at' => '2024-12-20 19:41:33',
            ),
            8 => 
            array (
                'id' => 1067,
                'amount' => '41667.00',
                'itemable_id' => 428,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 848,
                'created_at' => '2024-12-20 21:04:42',
                'updated_at' => '2024-12-20 21:04:42',
            ),
            9 => 
            array (
                'id' => 1068,
                'amount' => '38333.00',
                'itemable_id' => 429,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 849,
                'created_at' => '2024-12-20 21:06:23',
                'updated_at' => '2024-12-20 21:06:23',
            ),
            10 => 
            array (
                'id' => 1069,
                'amount' => '39167.00',
                'itemable_id' => 430,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 850,
                'created_at' => '2024-12-20 21:07:25',
                'updated_at' => '2024-12-20 21:07:25',
            ),
            11 => 
            array (
                'id' => 1070,
                'amount' => '79689.00',
                'itemable_id' => 431,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 851,
                'created_at' => '2024-12-20 21:08:55',
                'updated_at' => '2024-12-20 21:08:55',
            ),
            12 => 
            array (
                'id' => 1071,
                'amount' => '6944.44',
                'itemable_id' => 432,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 852,
                'created_at' => '2024-12-20 21:10:15',
                'updated_at' => '2024-12-20 21:10:15',
            ),
            13 => 
            array (
                'id' => 1072,
                'amount' => '43889.00',
                'itemable_id' => 433,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 853,
                'created_at' => '2024-12-20 21:12:01',
                'updated_at' => '2024-12-20 21:12:01',
            ),
            14 => 
            array (
                'id' => 1073,
                'amount' => '15612.00',
                'itemable_id' => 434,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 854,
                'created_at' => '2024-12-20 21:13:21',
                'updated_at' => '2024-12-20 21:13:21',
            ),
            15 => 
            array (
                'id' => 1074,
                'amount' => '11020.14',
                'itemable_id' => 435,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 855,
                'created_at' => '2024-12-20 21:15:39',
                'updated_at' => '2024-12-20 21:15:39',
            ),
            16 => 
            array (
                'id' => 1075,
                'amount' => '69445.00',
                'itemable_id' => 436,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 856,
                'created_at' => '2024-12-20 21:17:30',
                'updated_at' => '2024-12-20 21:17:30',
            ),
            17 => 
            array (
                'id' => 1076,
                'amount' => '42917.00',
                'itemable_id' => 437,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 857,
                'created_at' => '2024-12-20 21:23:20',
                'updated_at' => '2024-12-20 21:23:20',
            ),
            18 => 
            array (
                'id' => 1077,
                'amount' => '42917.00',
                'itemable_id' => 438,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 857,
                'created_at' => '2024-12-20 21:23:20',
                'updated_at' => '2024-12-20 21:23:20',
            ),
            19 => 
            array (
                'id' => 1078,
                'amount' => '42917.00',
                'itemable_id' => 439,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 857,
                'created_at' => '2024-12-20 21:23:20',
                'updated_at' => '2024-12-20 21:23:20',
            ),
            20 => 
            array (
                'id' => 1081,
                'amount' => '13056.00',
                'itemable_id' => 442,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 859,
                'created_at' => '2024-12-20 21:31:22',
                'updated_at' => '2024-12-20 21:31:22',
            ),
            21 => 
            array (
                'id' => 1082,
                'amount' => '13056.00',
                'itemable_id' => 443,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 859,
                'created_at' => '2024-12-20 21:31:22',
                'updated_at' => '2024-12-20 21:31:22',
            ),
            22 => 
            array (
                'id' => 1083,
                'amount' => '320.00',
                'itemable_id' => 444,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 860,
                'created_at' => '2024-12-26 17:12:57',
                'updated_at' => '2024-12-26 17:12:57',
            ),
            23 => 
            array (
                'id' => 1084,
                'amount' => '1924552.00',
                'itemable_id' => 445,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 861,
                'created_at' => '2024-12-26 17:17:14',
                'updated_at' => '2024-12-26 17:17:14',
            ),
            24 => 
            array (
                'id' => 1085,
                'amount' => '3200.00',
                'itemable_id' => 1088,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 862,
                'created_at' => '2025-01-06 18:20:26',
                'updated_at' => '2025-01-06 18:20:26',
            ),
            25 => 
            array (
                'id' => 1086,
                'amount' => '1600.00',
                'itemable_id' => 1087,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 862,
                'created_at' => '2025-01-06 18:20:26',
                'updated_at' => '2025-01-06 18:20:26',
            ),
            26 => 
            array (
                'id' => 1087,
                'amount' => '500.00',
                'itemable_id' => 1089,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 863,
                'created_at' => '2025-01-06 18:25:57',
                'updated_at' => '2025-01-06 18:25:57',
            ),
            27 => 
            array (
                'id' => 1088,
                'amount' => '4752.00',
                'itemable_id' => 1090,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 864,
                'created_at' => '2025-01-06 18:44:12',
                'updated_at' => '2025-01-06 18:44:12',
            ),
            28 => 
            array (
                'id' => 1089,
                'amount' => '550.00',
                'itemable_id' => 1091,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 865,
                'created_at' => '2025-01-06 19:13:47',
                'updated_at' => '2025-01-06 19:13:47',
            ),
            29 => 
            array (
                'id' => 1090,
                'amount' => '2500.00',
                'itemable_id' => 1092,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 866,
                'created_at' => '2025-01-06 19:35:32',
                'updated_at' => '2025-01-06 19:35:32',
            ),
            30 => 
            array (
                'id' => 1091,
                'amount' => '4650.00',
                'itemable_id' => 1094,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 867,
                'created_at' => '2025-01-06 19:52:47',
                'updated_at' => '2025-01-06 19:52:47',
            ),
            31 => 
            array (
                'id' => 1092,
                'amount' => '2550.00',
                'itemable_id' => 1093,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 867,
                'created_at' => '2025-01-06 19:52:47',
                'updated_at' => '2025-01-06 19:52:47',
            ),
            32 => 
            array (
                'id' => 1093,
                'amount' => '1120.00',
                'itemable_id' => 1096,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 868,
                'created_at' => '2025-01-07 17:03:16',
                'updated_at' => '2025-01-07 17:03:16',
            ),
            33 => 
            array (
                'id' => 1094,
                'amount' => '500.00',
                'itemable_id' => 1082,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 869,
                'created_at' => '2025-01-08 00:01:20',
                'updated_at' => '2025-01-08 00:01:20',
            ),
            34 => 
            array (
                'id' => 1095,
                'amount' => '500.00',
                'itemable_id' => 1083,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 870,
                'created_at' => '2025-01-08 00:02:14',
                'updated_at' => '2025-01-08 00:02:14',
            ),
            35 => 
            array (
                'id' => 1096,
                'amount' => '1240.00',
                'itemable_id' => 1102,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 871,
                'created_at' => '2025-01-08 17:55:15',
                'updated_at' => '2025-01-08 17:55:15',
            ),
            36 => 
            array (
                'id' => 1097,
                'amount' => '1550.00',
                'itemable_id' => 1098,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 872,
                'created_at' => '2025-01-08 18:55:37',
                'updated_at' => '2025-01-08 18:55:37',
            ),
            37 => 
            array (
                'id' => 1098,
                'amount' => '1550.00',
                'itemable_id' => 1099,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 873,
                'created_at' => '2025-01-08 18:56:07',
                'updated_at' => '2025-01-08 18:56:07',
            ),
            38 => 
            array (
                'id' => 1099,
                'amount' => '1500.00',
                'itemable_id' => 1109,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 874,
                'created_at' => '2025-01-08 19:05:06',
                'updated_at' => '2025-01-08 19:05:06',
            ),
            39 => 
            array (
                'id' => 1100,
                'amount' => '2000.00',
                'itemable_id' => 1106,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 875,
                'created_at' => '2025-01-08 19:06:22',
                'updated_at' => '2025-01-08 19:06:22',
            ),
            40 => 
            array (
                'id' => 1101,
                'amount' => '880.00',
                'itemable_id' => 1105,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 875,
                'created_at' => '2025-01-08 19:06:22',
                'updated_at' => '2025-01-08 19:06:22',
            ),
            41 => 
            array (
                'id' => 1102,
                'amount' => '2560.00',
                'itemable_id' => 1104,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 876,
                'created_at' => '2025-01-08 19:06:57',
                'updated_at' => '2025-01-08 19:06:57',
            ),
            42 => 
            array (
                'id' => 1103,
                'amount' => '880.00',
                'itemable_id' => 1103,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 876,
                'created_at' => '2025-01-08 19:06:57',
                'updated_at' => '2025-01-08 19:06:57',
            ),
            43 => 
            array (
                'id' => 1104,
                'amount' => '2000.00',
                'itemable_id' => 1108,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 877,
                'created_at' => '2025-01-08 19:08:33',
                'updated_at' => '2025-01-08 19:08:33',
            ),
            44 => 
            array (
                'id' => 1105,
                'amount' => '440.00',
                'itemable_id' => 1107,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 877,
                'created_at' => '2025-01-08 19:08:33',
                'updated_at' => '2025-01-08 19:08:33',
            ),
            45 => 
            array (
                'id' => 1106,
                'amount' => '2000.00',
                'itemable_id' => 1108,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 878,
                'created_at' => '2025-01-08 19:08:45',
                'updated_at' => '2025-01-08 19:08:45',
            ),
            46 => 
            array (
                'id' => 1107,
                'amount' => '440.00',
                'itemable_id' => 1107,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 878,
                'created_at' => '2025-01-08 19:08:45',
                'updated_at' => '2025-01-08 19:08:45',
            ),
            47 => 
            array (
                'id' => 1108,
                'amount' => '10340.00',
                'itemable_id' => 1110,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 879,
                'created_at' => '2025-01-08 19:37:00',
                'updated_at' => '2025-01-08 19:37:00',
            ),
            48 => 
            array (
                'id' => 1109,
                'amount' => '3300.00',
                'itemable_id' => 1111,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 880,
                'created_at' => '2025-01-08 19:44:40',
                'updated_at' => '2025-01-08 19:44:40',
            ),
            49 => 
            array (
                'id' => 1110,
                'amount' => '400.00',
                'itemable_id' => 1095,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 881,
                'created_at' => '2025-01-08 21:15:04',
                'updated_at' => '2025-01-08 21:15:04',
            ),
            50 => 
            array (
                'id' => 1111,
                'amount' => '1750.00',
                'itemable_id' => 1112,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 882,
                'created_at' => '2025-01-08 23:08:44',
                'updated_at' => '2025-01-08 23:08:44',
            ),
            51 => 
            array (
                'id' => 1112,
                'amount' => '1550.00',
                'itemable_id' => 1113,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 883,
                'created_at' => '2025-01-08 23:53:33',
                'updated_at' => '2025-01-08 23:53:33',
            ),
            52 => 
            array (
                'id' => 1113,
                'amount' => '500.00',
                'itemable_id' => 1117,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 884,
                'created_at' => '2025-01-09 00:49:18',
                'updated_at' => '2025-01-09 00:49:18',
            ),
            53 => 
            array (
                'id' => 1114,
                'amount' => '500.00',
                'itemable_id' => 1115,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 885,
                'created_at' => '2025-01-09 00:49:43',
                'updated_at' => '2025-01-09 00:49:43',
            ),
            54 => 
            array (
                'id' => 1115,
                'amount' => '500.00',
                'itemable_id' => 1116,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 886,
                'created_at' => '2025-01-09 00:50:50',
                'updated_at' => '2025-01-09 00:50:50',
            ),
            55 => 
            array (
                'id' => 1116,
                'amount' => '500.00',
                'itemable_id' => 1114,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 887,
                'created_at' => '2025-01-09 00:51:32',
                'updated_at' => '2025-01-09 00:51:32',
            ),
            56 => 
            array (
                'id' => 1117,
                'amount' => '1300.00',
                'itemable_id' => 1136,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 888,
                'created_at' => '2025-01-09 19:41:17',
                'updated_at' => '2025-01-09 19:41:17',
            ),
            57 => 
            array (
                'id' => 1118,
                'amount' => '2500.00',
                'itemable_id' => 1137,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 889,
                'created_at' => '2025-01-09 21:05:55',
                'updated_at' => '2025-01-09 21:05:55',
            ),
            58 => 
            array (
                'id' => 1119,
                'amount' => '1550.00',
                'itemable_id' => 1138,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 890,
                'created_at' => '2025-01-09 21:31:38',
                'updated_at' => '2025-01-09 21:31:38',
            ),
            59 => 
            array (
                'id' => 1120,
                'amount' => '850.00',
                'itemable_id' => 1140,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 891,
                'created_at' => '2025-01-09 23:55:23',
                'updated_at' => '2025-01-09 23:55:23',
            ),
            60 => 
            array (
                'id' => 1121,
                'amount' => '4650.00',
                'itemable_id' => 1139,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 891,
                'created_at' => '2025-01-09 23:55:23',
                'updated_at' => '2025-01-09 23:55:23',
            ),
            61 => 
            array (
                'id' => 1122,
                'amount' => '3000.00',
                'itemable_id' => 446,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 892,
                'created_at' => '2025-01-10 02:03:46',
                'updated_at' => '2025-01-10 02:03:46',
            ),
            62 => 
            array (
                'id' => 1126,
                'amount' => '28366.67',
                'itemable_id' => 450,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 896,
                'created_at' => '2025-01-10 16:33:34',
                'updated_at' => '2025-01-10 16:33:34',
            ),
            63 => 
            array (
                'id' => 1127,
                'amount' => '2500.00',
                'itemable_id' => 1141,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 897,
                'created_at' => '2025-01-10 18:43:19',
                'updated_at' => '2025-01-10 18:43:19',
            ),
            64 => 
            array (
                'id' => 1128,
                'amount' => '1670.84',
                'itemable_id' => 451,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 898,
                'created_at' => '2025-01-10 19:44:10',
                'updated_at' => '2025-01-10 19:44:10',
            ),
            65 => 
            array (
                'id' => 1129,
                'amount' => '7220.00',
                'itemable_id' => 1143,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 899,
                'created_at' => '2025-01-10 22:20:07',
                'updated_at' => '2025-01-10 22:20:07',
            ),
            66 => 
            array (
                'id' => 1130,
                'amount' => '1100.00',
                'itemable_id' => 1142,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 900,
                'created_at' => '2025-01-10 22:20:19',
                'updated_at' => '2025-01-10 22:20:19',
            ),
            67 => 
            array (
                'id' => 1131,
                'amount' => '1280.00',
                'itemable_id' => 1145,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 901,
                'created_at' => '2025-01-10 22:41:01',
                'updated_at' => '2025-01-10 22:41:01',
            ),
            68 => 
            array (
                'id' => 1132,
                'amount' => '500.00',
                'itemable_id' => 1149,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 902,
                'created_at' => '2025-01-13 17:06:26',
                'updated_at' => '2025-01-13 17:06:26',
            ),
            69 => 
            array (
                'id' => 1133,
                'amount' => '500.00',
                'itemable_id' => 1148,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 903,
                'created_at' => '2025-01-13 17:34:56',
                'updated_at' => '2025-01-13 17:34:56',
            ),
            70 => 
            array (
                'id' => 1134,
                'amount' => '3840.00',
                'itemable_id' => 1152,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 904,
                'created_at' => '2025-01-13 18:46:01',
                'updated_at' => '2025-01-13 18:46:01',
            ),
            71 => 
            array (
                'id' => 1135,
                'amount' => '550.00',
                'itemable_id' => 1153,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 905,
                'created_at' => '2025-01-13 19:13:31',
                'updated_at' => '2025-01-13 19:13:31',
            ),
            72 => 
            array (
                'id' => 1136,
                'amount' => '297.00',
                'itemable_id' => 452,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 906,
                'created_at' => '2025-01-13 21:47:27',
                'updated_at' => '2025-01-13 21:47:27',
            ),
            73 => 
            array (
                'id' => 1137,
                'amount' => '4950.00',
                'itemable_id' => 1155,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 907,
                'created_at' => '2025-01-13 22:19:37',
                'updated_at' => '2025-01-13 22:19:37',
            ),
            74 => 
            array (
                'id' => 1138,
                'amount' => '1800.00',
                'itemable_id' => 1154,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 907,
                'created_at' => '2025-01-13 22:19:37',
                'updated_at' => '2025-01-13 22:19:37',
            ),
            75 => 
            array (
                'id' => 1139,
                'amount' => '500.00',
                'itemable_id' => 1156,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 908,
                'created_at' => '2025-01-13 23:02:42',
                'updated_at' => '2025-01-13 23:02:42',
            ),
            76 => 
            array (
                'id' => 1140,
                'amount' => '280.00',
                'itemable_id' => 1157,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 909,
                'created_at' => '2025-01-13 23:16:43',
                'updated_at' => '2025-01-13 23:16:43',
            ),
            77 => 
            array (
                'id' => 1141,
                'amount' => '5820.00',
                'itemable_id' => 1159,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 910,
                'created_at' => '2025-01-13 23:35:00',
                'updated_at' => '2025-01-13 23:35:00',
            ),
            78 => 
            array (
                'id' => 1142,
                'amount' => '2100.00',
                'itemable_id' => 1158,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 911,
                'created_at' => '2025-01-13 23:35:21',
                'updated_at' => '2025-01-13 23:35:21',
            ),
            79 => 
            array (
                'id' => 1143,
                'amount' => '2500.00',
                'itemable_id' => 1160,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 912,
                'created_at' => '2025-01-13 23:47:47',
                'updated_at' => '2025-01-13 23:47:47',
            ),
            80 => 
            array (
                'id' => 1144,
                'amount' => '15867.00',
                'itemable_id' => 453,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 913,
                'created_at' => '2025-01-14 19:11:12',
                'updated_at' => '2025-01-14 19:11:12',
            ),
            81 => 
            array (
                'id' => 1145,
                'amount' => '4750.00',
                'itemable_id' => 1161,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 914,
                'created_at' => '2025-01-14 19:44:56',
                'updated_at' => '2025-01-14 19:44:56',
            ),
            82 => 
            array (
                'id' => 1146,
                'amount' => '1960.00',
                'itemable_id' => 1164,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 915,
                'created_at' => '2025-01-14 23:06:50',
                'updated_at' => '2025-01-14 23:06:50',
            ),
            83 => 
            array (
                'id' => 1147,
                'amount' => '440.00',
                'itemable_id' => 1163,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 915,
                'created_at' => '2025-01-14 23:06:50',
                'updated_at' => '2025-01-14 23:06:50',
            ),
            84 => 
            array (
                'id' => 1148,
                'amount' => '2440.00',
                'itemable_id' => 1170,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 916,
                'created_at' => '2025-01-15 19:41:25',
                'updated_at' => '2025-01-15 19:41:25',
            ),
            85 => 
            array (
                'id' => 1149,
                'amount' => '1320.00',
                'itemable_id' => 1169,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 916,
                'created_at' => '2025-01-15 19:41:25',
                'updated_at' => '2025-01-15 19:41:25',
            ),
            86 => 
            array (
                'id' => 1150,
                'amount' => '2700.00',
                'itemable_id' => 1168,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 917,
                'created_at' => '2025-01-15 19:41:56',
                'updated_at' => '2025-01-15 19:41:56',
            ),
            87 => 
            array (
                'id' => 1151,
                'amount' => '1320.00',
                'itemable_id' => 1167,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 917,
                'created_at' => '2025-01-15 19:41:56',
                'updated_at' => '2025-01-15 19:41:56',
            ),
            88 => 
            array (
                'id' => 1152,
                'amount' => '2440.00',
                'itemable_id' => 1172,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 918,
                'created_at' => '2025-01-15 19:43:59',
                'updated_at' => '2025-01-15 19:43:59',
            ),
            89 => 
            array (
                'id' => 1153,
                'amount' => '880.00',
                'itemable_id' => 1171,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 918,
                'created_at' => '2025-01-15 19:43:59',
                'updated_at' => '2025-01-15 19:43:59',
            ),
            90 => 
            array (
                'id' => 1154,
                'amount' => '4500.00',
                'itemable_id' => 1173,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 919,
                'created_at' => '2025-01-15 19:56:09',
                'updated_at' => '2025-01-15 19:56:09',
            ),
            91 => 
            array (
                'id' => 1155,
                'amount' => '11640.00',
                'itemable_id' => 1174,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 920,
                'created_at' => '2025-01-15 20:56:25',
                'updated_at' => '2025-01-15 20:56:25',
            ),
            92 => 
            array (
                'id' => 1156,
                'amount' => '1550.00',
                'itemable_id' => 1175,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 921,
                'created_at' => '2025-01-15 21:23:43',
                'updated_at' => '2025-01-15 21:23:43',
            ),
            93 => 
            array (
                'id' => 1157,
                'amount' => '1550.00',
                'itemable_id' => 1178,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 922,
                'created_at' => '2025-01-16 17:52:38',
                'updated_at' => '2025-01-16 17:52:38',
            ),
            94 => 
            array (
                'id' => 1158,
                'amount' => '500.00',
                'itemable_id' => 1179,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 923,
                'created_at' => '2025-01-16 19:33:13',
                'updated_at' => '2025-01-16 19:33:13',
            ),
            95 => 
            array (
                'id' => 1159,
                'amount' => '6720.00',
                'itemable_id' => 1180,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 924,
                'created_at' => '2025-01-16 21:00:59',
                'updated_at' => '2025-01-16 21:00:59',
            ),
            96 => 
            array (
                'id' => 1160,
                'amount' => '4650.00',
                'itemable_id' => 1187,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 925,
                'created_at' => '2025-01-16 23:49:00',
                'updated_at' => '2025-01-16 23:49:00',
            ),
            97 => 
            array (
                'id' => 1161,
                'amount' => '1750.00',
                'itemable_id' => 1186,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 925,
                'created_at' => '2025-01-16 23:49:00',
                'updated_at' => '2025-01-16 23:49:00',
            ),
            98 => 
            array (
                'id' => 1162,
                'amount' => '1750.00',
                'itemable_id' => 1185,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 925,
                'created_at' => '2025-01-16 23:49:00',
                'updated_at' => '2025-01-16 23:49:00',
            ),
            99 => 
            array (
                'id' => 1163,
                'amount' => '9600.00',
                'itemable_id' => 1184,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 925,
                'created_at' => '2025-01-16 23:49:00',
                'updated_at' => '2025-01-16 23:49:00',
            ),
            100 => 
            array (
                'id' => 1164,
                'amount' => '2900.00',
                'itemable_id' => 1183,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 925,
                'created_at' => '2025-01-16 23:49:00',
                'updated_at' => '2025-01-16 23:49:00',
            ),
            101 => 
            array (
                'id' => 1165,
                'amount' => '3800.00',
                'itemable_id' => 1182,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 925,
                'created_at' => '2025-01-16 23:49:00',
                'updated_at' => '2025-01-16 23:49:00',
            ),
            102 => 
            array (
                'id' => 1166,
                'amount' => '80000.00',
                'itemable_id' => 454,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 926,
                'created_at' => '2025-01-17 00:18:53',
                'updated_at' => '2025-01-17 00:18:53',
            ),
            103 => 
            array (
                'id' => 1167,
                'amount' => '1080.00',
                'itemable_id' => 1188,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 927,
                'created_at' => '2025-01-17 23:05:39',
                'updated_at' => '2025-01-17 23:05:39',
            ),
            104 => 
            array (
                'id' => 1168,
                'amount' => '760.00',
                'itemable_id' => 1191,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 928,
                'created_at' => '2025-01-18 00:56:52',
                'updated_at' => '2025-01-18 00:56:52',
            ),
            105 => 
            array (
                'id' => 1169,
                'amount' => '520.00',
                'itemable_id' => 1194,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 929,
                'created_at' => '2025-01-20 18:14:43',
                'updated_at' => '2025-01-20 18:14:43',
            ),
            106 => 
            array (
                'id' => 1170,
                'amount' => '2440.00',
                'itemable_id' => 1193,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 929,
                'created_at' => '2025-01-20 18:14:43',
                'updated_at' => '2025-01-20 18:14:43',
            ),
            107 => 
            array (
                'id' => 1171,
                'amount' => '880.00',
                'itemable_id' => 1192,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 929,
                'created_at' => '2025-01-20 18:14:43',
                'updated_at' => '2025-01-20 18:14:43',
            ),
            108 => 
            array (
                'id' => 1172,
                'amount' => '2500.00',
                'itemable_id' => 1195,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 930,
                'created_at' => '2025-01-20 18:26:54',
                'updated_at' => '2025-01-20 18:26:54',
            ),
            109 => 
            array (
                'id' => 1173,
                'amount' => '2000.00',
                'itemable_id' => 1196,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 931,
                'created_at' => '2025-01-20 18:33:28',
                'updated_at' => '2025-01-20 18:33:28',
            ),
            110 => 
            array (
                'id' => 1174,
                'amount' => '550.00',
                'itemable_id' => 1198,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 932,
                'created_at' => '2025-01-20 19:11:29',
                'updated_at' => '2025-01-20 19:11:29',
            ),
            111 => 
            array (
                'id' => 1175,
                'amount' => '2000.00',
                'itemable_id' => 1202,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 933,
                'created_at' => '2025-01-20 20:49:01',
                'updated_at' => '2025-01-20 20:49:01',
            ),
            112 => 
            array (
                'id' => 1176,
                'amount' => '440.00',
                'itemable_id' => 1201,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 933,
                'created_at' => '2025-01-20 20:49:01',
                'updated_at' => '2025-01-20 20:49:01',
            ),
            113 => 
            array (
                'id' => 1177,
                'amount' => '2000.00',
                'itemable_id' => 1200,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 934,
                'created_at' => '2025-01-20 20:49:47',
                'updated_at' => '2025-01-20 20:49:47',
            ),
            114 => 
            array (
                'id' => 1178,
                'amount' => '440.00',
                'itemable_id' => 1199,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 934,
                'created_at' => '2025-01-20 20:49:47',
                'updated_at' => '2025-01-20 20:49:47',
            ),
            115 => 
            array (
                'id' => 1179,
                'amount' => '2100.00',
                'itemable_id' => 1203,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 935,
                'created_at' => '2025-01-20 20:55:57',
                'updated_at' => '2025-01-20 20:55:57',
            ),
            116 => 
            array (
                'id' => 1180,
                'amount' => '1080.00',
                'itemable_id' => 1205,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 936,
                'created_at' => '2025-01-20 22:09:39',
                'updated_at' => '2025-01-20 22:09:39',
            ),
            117 => 
            array (
                'id' => 1181,
                'amount' => '1000.00',
                'itemable_id' => 1176,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 937,
                'created_at' => '2025-01-20 22:54:03',
                'updated_at' => '2025-01-20 22:54:03',
            ),
            118 => 
            array (
                'id' => 1182,
                'amount' => '440.00',
                'itemable_id' => 1206,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 938,
                'created_at' => '2025-01-21 17:37:07',
                'updated_at' => '2025-01-21 17:37:07',
            ),
            119 => 
            array (
                'id' => 1183,
                'amount' => '1100.00',
                'itemable_id' => 1210,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 939,
                'created_at' => '2025-01-21 20:52:42',
                'updated_at' => '2025-01-21 20:52:42',
            ),
            120 => 
            array (
                'id' => 1184,
                'amount' => '2750.00',
                'itemable_id' => 1209,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 939,
                'created_at' => '2025-01-21 20:52:42',
                'updated_at' => '2025-01-21 20:52:42',
            ),
            121 => 
            array (
                'id' => 1185,
                'amount' => '2750.00',
                'itemable_id' => 1208,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 939,
                'created_at' => '2025-01-21 20:52:42',
                'updated_at' => '2025-01-21 20:52:42',
            ),
            122 => 
            array (
                'id' => 1186,
                'amount' => '2750.00',
                'itemable_id' => 1207,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 939,
                'created_at' => '2025-01-21 20:52:42',
                'updated_at' => '2025-01-21 20:52:42',
            ),
            123 => 
            array (
                'id' => 1187,
                'amount' => '800.00',
                'itemable_id' => 1211,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 940,
                'created_at' => '2025-01-21 21:54:45',
                'updated_at' => '2025-01-21 21:54:45',
            ),
            124 => 
            array (
                'id' => 1188,
                'amount' => '1100.00',
                'itemable_id' => 1212,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 941,
                'created_at' => '2025-01-21 22:07:19',
                'updated_at' => '2025-01-21 22:07:19',
            ),
            125 => 
            array (
                'id' => 1189,
                'amount' => '4260.00',
                'itemable_id' => 1213,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 942,
                'created_at' => '2025-01-21 22:19:57',
                'updated_at' => '2025-01-21 22:19:57',
            ),
            126 => 
            array (
                'id' => 1190,
                'amount' => '1000.00',
                'itemable_id' => 1215,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 943,
                'created_at' => '2025-01-21 23:03:09',
                'updated_at' => '2025-01-21 23:03:09',
            ),
            127 => 
            array (
                'id' => 1191,
                'amount' => '3000.00',
                'itemable_id' => 1217,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 944,
                'created_at' => '2025-01-22 19:25:54',
                'updated_at' => '2025-01-22 19:25:54',
            ),
            128 => 
            array (
                'id' => 1192,
                'amount' => '5100.00',
                'itemable_id' => 1219,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 945,
                'created_at' => '2025-01-22 19:51:26',
                'updated_at' => '2025-01-22 19:51:26',
            ),
            129 => 
            array (
                'id' => 1193,
                'amount' => '5150.00',
                'itemable_id' => 1218,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 946,
                'created_at' => '2025-01-22 19:51:59',
                'updated_at' => '2025-01-22 19:51:59',
            ),
            130 => 
            array (
                'id' => 1194,
                'amount' => '800.00',
                'itemable_id' => 1221,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 947,
                'created_at' => '2025-01-22 19:54:09',
                'updated_at' => '2025-01-22 19:54:09',
            ),
            131 => 
            array (
                'id' => 1195,
                'amount' => '3000.00',
                'itemable_id' => 1220,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 947,
                'created_at' => '2025-01-22 19:54:09',
                'updated_at' => '2025-01-22 19:54:09',
            ),
            132 => 
            array (
                'id' => 1196,
                'amount' => '1240.00',
                'itemable_id' => 1216,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 947,
                'created_at' => '2025-01-22 19:54:09',
                'updated_at' => '2025-01-22 19:54:09',
            ),
            133 => 
            array (
                'id' => 1197,
                'amount' => '400.00',
                'itemable_id' => 1222,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 948,
                'created_at' => '2025-01-22 20:58:04',
                'updated_at' => '2025-01-22 20:58:04',
            ),
            134 => 
            array (
                'id' => 1198,
                'amount' => '1372.00',
                'itemable_id' => 1224,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 949,
                'created_at' => '2025-01-22 21:37:18',
                'updated_at' => '2025-01-22 21:37:18',
            ),
            135 => 
            array (
                'id' => 1199,
                'amount' => '440.00',
                'itemable_id' => 1223,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 949,
                'created_at' => '2025-01-22 21:37:18',
                'updated_at' => '2025-01-22 21:37:18',
            ),
            136 => 
            array (
                'id' => 1200,
                'amount' => '7950.00',
                'itemable_id' => 1226,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 950,
                'created_at' => '2025-01-22 22:48:52',
                'updated_at' => '2025-01-22 22:48:52',
            ),
            137 => 
            array (
                'id' => 1201,
                'amount' => '7950.00',
                'itemable_id' => 1225,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 950,
                'created_at' => '2025-01-22 22:48:52',
                'updated_at' => '2025-01-22 22:48:52',
            ),
            138 => 
            array (
                'id' => 1202,
                'amount' => '550.00',
                'itemable_id' => 1227,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 951,
                'created_at' => '2025-01-22 23:00:56',
                'updated_at' => '2025-01-22 23:00:56',
            ),
            139 => 
            array (
                'id' => 1203,
                'amount' => '3150.00',
                'itemable_id' => 1229,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 952,
                'created_at' => '2025-01-22 23:22:49',
                'updated_at' => '2025-01-22 23:22:49',
            ),
            140 => 
            array (
                'id' => 1204,
                'amount' => '550.00',
                'itemable_id' => 1228,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 952,
                'created_at' => '2025-01-22 23:22:49',
                'updated_at' => '2025-01-22 23:22:49',
            ),
            141 => 
            array (
                'id' => 1205,
                'amount' => '500.00',
                'itemable_id' => 1230,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 953,
                'created_at' => '2025-01-23 17:52:01',
                'updated_at' => '2025-01-23 17:52:01',
            ),
            142 => 
            array (
                'id' => 1206,
                'amount' => '4060.00',
                'itemable_id' => 1235,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 954,
                'created_at' => '2025-01-23 23:22:12',
                'updated_at' => '2025-01-23 23:22:12',
            ),
            143 => 
            array (
                'id' => 1207,
                'amount' => '5280.00',
                'itemable_id' => 1240,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 955,
                'created_at' => '2025-01-24 00:40:48',
                'updated_at' => '2025-01-24 00:40:48',
            ),
            144 => 
            array (
                'id' => 1208,
                'amount' => '7050.00',
                'itemable_id' => 455,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 956,
                'created_at' => '2025-01-24 01:02:42',
                'updated_at' => '2025-01-24 01:02:42',
            ),
            145 => 
            array (
                'id' => 1209,
                'amount' => '9558.00',
                'itemable_id' => 456,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 957,
                'created_at' => '2025-01-24 19:39:51',
                'updated_at' => '2025-01-24 19:39:51',
            ),
            146 => 
            array (
                'id' => 1210,
                'amount' => '82778.00',
                'itemable_id' => 457,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 958,
                'created_at' => '2025-01-24 19:42:08',
                'updated_at' => '2025-01-24 19:42:08',
            ),
            147 => 
            array (
                'id' => 1211,
                'amount' => '78270.10',
                'itemable_id' => 458,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 959,
                'created_at' => '2025-01-24 19:44:01',
                'updated_at' => '2025-01-24 19:44:01',
            ),
            148 => 
            array (
                'id' => 1212,
                'amount' => '41666.67',
                'itemable_id' => 459,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 960,
                'created_at' => '2025-01-24 19:45:55',
                'updated_at' => '2025-01-24 19:45:55',
            ),
            149 => 
            array (
                'id' => 1213,
                'amount' => '15089.00',
                'itemable_id' => 460,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 961,
                'created_at' => '2025-01-24 19:48:05',
                'updated_at' => '2025-01-24 19:48:05',
            ),
            150 => 
            array (
                'id' => 1214,
                'amount' => '13423.00',
                'itemable_id' => 461,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 962,
                'created_at' => '2025-01-24 19:49:57',
                'updated_at' => '2025-01-24 19:49:57',
            ),
            151 => 
            array (
                'id' => 1215,
                'amount' => '45833.33',
                'itemable_id' => 462,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 963,
                'created_at' => '2025-01-24 19:51:34',
                'updated_at' => '2025-01-24 19:51:34',
            ),
            152 => 
            array (
                'id' => 1216,
                'amount' => '16080.00',
                'itemable_id' => 463,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 964,
                'created_at' => '2025-01-24 21:15:19',
                'updated_at' => '2025-01-24 21:15:19',
            ),
            153 => 
            array (
                'id' => 1217,
                'amount' => '7139.00',
                'itemable_id' => 464,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 965,
                'created_at' => '2025-01-24 21:16:30',
                'updated_at' => '2025-01-24 21:16:30',
            ),
            154 => 
            array (
                'id' => 1218,
                'amount' => '26445.00',
                'itemable_id' => 465,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 966,
                'created_at' => '2025-01-24 21:17:30',
                'updated_at' => '2025-01-24 21:17:30',
            ),
            155 => 
            array (
                'id' => 1219,
                'amount' => '10329.00',
                'itemable_id' => 466,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 967,
                'created_at' => '2025-01-24 21:18:38',
                'updated_at' => '2025-01-24 21:18:38',
            ),
            156 => 
            array (
                'id' => 1221,
                'amount' => '10329.00',
                'itemable_id' => 468,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 969,
                'created_at' => '2025-01-24 21:22:10',
                'updated_at' => '2025-01-24 21:22:10',
            ),
            157 => 
            array (
                'id' => 1222,
                'amount' => '46291.66',
                'itemable_id' => 469,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 970,
                'created_at' => '2025-01-24 21:23:18',
                'updated_at' => '2025-01-24 21:23:18',
            ),
            158 => 
            array (
                'id' => 1223,
                'amount' => '14390.00',
                'itemable_id' => 470,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 971,
                'created_at' => '2025-01-24 21:24:44',
                'updated_at' => '2025-01-24 21:24:44',
            ),
            159 => 
            array (
                'id' => 1224,
                'amount' => '27777.00',
                'itemable_id' => 471,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 972,
                'created_at' => '2025-01-24 21:25:59',
                'updated_at' => '2025-01-24 21:25:59',
            ),
            160 => 
            array (
                'id' => 1225,
                'amount' => '9691.00',
                'itemable_id' => 472,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 973,
                'created_at' => '2025-01-24 21:27:20',
                'updated_at' => '2025-01-24 21:27:20',
            ),
            161 => 
            array (
                'id' => 1226,
                'amount' => '16695.00',
                'itemable_id' => 473,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 974,
                'created_at' => '2025-01-24 21:29:20',
                'updated_at' => '2025-01-24 21:29:20',
            ),
            162 => 
            array (
                'id' => 1227,
                'amount' => '21389.00',
                'itemable_id' => 474,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 975,
                'created_at' => '2025-01-24 21:30:26',
                'updated_at' => '2025-01-24 21:30:26',
            ),
            163 => 
            array (
                'id' => 1228,
                'amount' => '47445.00',
                'itemable_id' => 475,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 976,
                'created_at' => '2025-01-24 21:31:23',
                'updated_at' => '2025-01-24 21:31:23',
            ),
            164 => 
            array (
                'id' => 1229,
                'amount' => '30834.00',
                'itemable_id' => 476,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 977,
                'created_at' => '2025-01-24 21:44:53',
                'updated_at' => '2025-01-24 21:44:53',
            ),
            165 => 
            array (
                'id' => 1230,
                'amount' => '15252.00',
                'itemable_id' => 477,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 978,
                'created_at' => '2025-01-24 21:46:25',
                'updated_at' => '2025-01-24 21:46:25',
            ),
            166 => 
            array (
                'id' => 1231,
                'amount' => '42778.00',
                'itemable_id' => 478,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 979,
                'created_at' => '2025-01-24 21:47:35',
                'updated_at' => '2025-01-24 21:47:35',
            ),
            167 => 
            array (
                'id' => 1232,
                'amount' => '30000.00',
                'itemable_id' => 479,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 980,
                'created_at' => '2025-01-24 21:56:57',
                'updated_at' => '2025-01-24 21:56:57',
            ),
            168 => 
            array (
                'id' => 1233,
                'amount' => '43888.89',
                'itemable_id' => 480,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 981,
                'created_at' => '2025-01-24 21:58:07',
                'updated_at' => '2025-01-24 21:58:07',
            ),
            169 => 
            array (
                'id' => 1234,
                'amount' => '83277.78',
                'itemable_id' => 481,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 982,
                'created_at' => '2025-01-24 22:02:51',
                'updated_at' => '2025-01-24 22:02:51',
            ),
            170 => 
            array (
                'id' => 1235,
                'amount' => '83277.78',
                'itemable_id' => 482,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 982,
                'created_at' => '2025-01-24 22:02:51',
                'updated_at' => '2025-01-24 22:02:51',
            ),
            171 => 
            array (
                'id' => 1236,
                'amount' => '10721.80',
                'itemable_id' => 483,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 983,
                'created_at' => '2025-01-24 22:04:34',
                'updated_at' => '2025-01-24 22:04:34',
            ),
            172 => 
            array (
                'id' => 1237,
                'amount' => '46805.56',
                'itemable_id' => 484,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 984,
                'created_at' => '2025-01-24 22:10:25',
                'updated_at' => '2025-01-24 22:10:25',
            ),
            173 => 
            array (
                'id' => 1238,
                'amount' => '46805.56',
                'itemable_id' => 485,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 984,
                'created_at' => '2025-01-24 22:10:25',
                'updated_at' => '2025-01-24 22:10:25',
            ),
            174 => 
            array (
                'id' => 1239,
                'amount' => '38333.00',
                'itemable_id' => 486,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 985,
                'created_at' => '2025-01-24 22:12:50',
                'updated_at' => '2025-01-24 22:12:50',
            ),
            175 => 
            array (
                'id' => 1240,
                'amount' => '75000.00',
                'itemable_id' => 487,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 986,
                'created_at' => '2025-01-24 22:15:07',
                'updated_at' => '2025-01-24 22:15:07',
            ),
            176 => 
            array (
                'id' => 1241,
                'amount' => '75000.00',
                'itemable_id' => 488,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 986,
                'created_at' => '2025-01-24 22:15:07',
                'updated_at' => '2025-01-24 22:15:07',
            ),
            177 => 
            array (
                'id' => 1242,
                'amount' => '74750.00',
                'itemable_id' => 489,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 987,
                'created_at' => '2025-01-24 22:19:30',
                'updated_at' => '2025-01-24 22:19:30',
            ),
            178 => 
            array (
                'id' => 1243,
                'amount' => '74750.00',
                'itemable_id' => 490,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 987,
                'created_at' => '2025-01-24 22:19:30',
                'updated_at' => '2025-01-24 22:19:30',
            ),
            179 => 
            array (
                'id' => 1246,
                'amount' => '17667.67',
                'itemable_id' => 493,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 990,
                'created_at' => '2025-01-24 22:25:12',
                'updated_at' => '2025-01-24 22:25:12',
            ),
            180 => 
            array (
                'id' => 1247,
                'amount' => '18334.00',
                'itemable_id' => 494,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 991,
                'created_at' => '2025-01-24 22:43:20',
                'updated_at' => '2025-01-24 22:43:20',
            ),
            181 => 
            array (
                'id' => 1248,
                'amount' => '31527.00',
                'itemable_id' => 495,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 992,
                'created_at' => '2025-01-24 22:44:39',
                'updated_at' => '2025-01-24 22:44:39',
            ),
            182 => 
            array (
                'id' => 1249,
                'amount' => '83334.00',
                'itemable_id' => 496,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 993,
                'created_at' => '2025-01-24 22:46:28',
                'updated_at' => '2025-01-24 22:46:28',
            ),
            183 => 
            array (
                'id' => 1250,
                'amount' => '79861.11',
                'itemable_id' => 497,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 994,
                'created_at' => '2025-01-24 22:48:07',
                'updated_at' => '2025-01-24 22:48:07',
            ),
            184 => 
            array (
                'id' => 1251,
                'amount' => '37500.00',
                'itemable_id' => 498,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 995,
                'created_at' => '2025-01-24 22:49:51',
                'updated_at' => '2025-01-24 22:49:51',
            ),
            185 => 
            array (
                'id' => 1252,
                'amount' => '33195.00',
                'itemable_id' => 499,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 996,
                'created_at' => '2025-01-24 22:51:17',
                'updated_at' => '2025-01-24 22:51:17',
            ),
            186 => 
            array (
                'id' => 1253,
                'amount' => '27381.67',
                'itemable_id' => 500,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 997,
                'created_at' => '2025-01-24 22:52:27',
                'updated_at' => '2025-01-24 22:52:27',
            ),
            187 => 
            array (
                'id' => 1254,
                'amount' => '21667.00',
                'itemable_id' => 501,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 998,
                'created_at' => '2025-01-24 22:53:55',
                'updated_at' => '2025-01-24 22:53:55',
            ),
            188 => 
            array (
                'id' => 1255,
                'amount' => '42916.67',
                'itemable_id' => 502,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 999,
                'created_at' => '2025-01-24 22:55:49',
                'updated_at' => '2025-01-24 22:55:49',
            ),
            189 => 
            array (
                'id' => 1256,
                'amount' => '41667.00',
                'itemable_id' => 503,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1000,
                'created_at' => '2025-01-24 22:57:48',
                'updated_at' => '2025-01-24 22:57:48',
            ),
            190 => 
            array (
                'id' => 1257,
                'amount' => '38333.00',
                'itemable_id' => 504,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1001,
                'created_at' => '2025-01-24 22:59:30',
                'updated_at' => '2025-01-24 22:59:30',
            ),
            191 => 
            array (
                'id' => 1258,
                'amount' => '39167.00',
                'itemable_id' => 505,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1002,
                'created_at' => '2025-01-24 23:00:40',
                'updated_at' => '2025-01-24 23:00:40',
            ),
            192 => 
            array (
                'id' => 1259,
                'amount' => '79689.00',
                'itemable_id' => 506,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1003,
                'created_at' => '2025-01-24 23:01:57',
                'updated_at' => '2025-01-24 23:01:57',
            ),
            193 => 
            array (
                'id' => 1260,
                'amount' => '6944.44',
                'itemable_id' => 507,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1004,
                'created_at' => '2025-01-24 23:03:25',
                'updated_at' => '2025-01-24 23:03:25',
            ),
            194 => 
            array (
                'id' => 1261,
                'amount' => '43889.00',
                'itemable_id' => 508,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1005,
                'created_at' => '2025-01-24 23:05:01',
                'updated_at' => '2025-01-24 23:05:01',
            ),
            195 => 
            array (
                'id' => 1262,
                'amount' => '15612.00',
                'itemable_id' => 509,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1006,
                'created_at' => '2025-01-24 23:06:42',
                'updated_at' => '2025-01-24 23:06:42',
            ),
            196 => 
            array (
                'id' => 1263,
                'amount' => '11020.14',
                'itemable_id' => 510,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1007,
                'created_at' => '2025-01-24 23:08:38',
                'updated_at' => '2025-01-24 23:08:38',
            ),
            197 => 
            array (
                'id' => 1264,
                'amount' => '69445.00',
                'itemable_id' => 511,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1008,
                'created_at' => '2025-01-24 23:10:07',
                'updated_at' => '2025-01-24 23:10:07',
            ),
            198 => 
            array (
                'id' => 1265,
                'amount' => '44166.00',
                'itemable_id' => 512,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1009,
                'created_at' => '2025-01-24 23:16:00',
                'updated_at' => '2025-01-24 23:16:00',
            ),
            199 => 
            array (
                'id' => 1266,
                'amount' => '44166.00',
                'itemable_id' => 513,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1009,
                'created_at' => '2025-01-24 23:16:00',
                'updated_at' => '2025-01-24 23:16:00',
            ),
            200 => 
            array (
                'id' => 1267,
                'amount' => '7083.33',
                'itemable_id' => 514,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1010,
                'created_at' => '2025-01-24 23:20:06',
                'updated_at' => '2025-01-24 23:20:06',
            ),
            201 => 
            array (
                'id' => 1268,
                'amount' => '7083.33',
                'itemable_id' => 515,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1010,
                'created_at' => '2025-01-24 23:20:06',
                'updated_at' => '2025-01-24 23:20:06',
            ),
            202 => 
            array (
                'id' => 1269,
                'amount' => '42500.00',
                'itemable_id' => 516,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1011,
                'created_at' => '2025-01-24 23:22:12',
                'updated_at' => '2025-01-24 23:22:12',
            ),
            203 => 
            array (
                'id' => 1270,
                'amount' => '56112.00',
                'itemable_id' => 517,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1012,
                'created_at' => '2025-01-24 23:24:06',
                'updated_at' => '2025-01-24 23:24:06',
            ),
            204 => 
            array (
                'id' => 1271,
                'amount' => '17777.78',
                'itemable_id' => 518,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1013,
                'created_at' => '2025-01-24 23:32:02',
                'updated_at' => '2025-01-24 23:32:02',
            ),
            205 => 
            array (
                'id' => 1272,
                'amount' => '45277.77',
                'itemable_id' => 519,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1014,
                'created_at' => '2025-01-24 23:34:08',
                'updated_at' => '2025-01-24 23:34:08',
            ),
            206 => 
            array (
                'id' => 1273,
                'amount' => '41667.00',
                'itemable_id' => 520,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1015,
                'created_at' => '2025-01-24 23:36:56',
                'updated_at' => '2025-01-24 23:36:56',
            ),
            207 => 
            array (
                'id' => 1274,
                'amount' => '41667.00',
                'itemable_id' => 521,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1015,
                'created_at' => '2025-01-24 23:36:56',
                'updated_at' => '2025-01-24 23:36:56',
            ),
            208 => 
            array (
                'id' => 1275,
                'amount' => '61112.00',
                'itemable_id' => 522,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1016,
                'created_at' => '2025-01-24 23:39:49',
                'updated_at' => '2025-01-24 23:39:49',
            ),
            209 => 
            array (
                'id' => 1276,
                'amount' => '61112.00',
                'itemable_id' => 523,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1016,
                'created_at' => '2025-01-24 23:39:49',
                'updated_at' => '2025-01-24 23:39:49',
            ),
            210 => 
            array (
                'id' => 1277,
                'amount' => '35833.33',
                'itemable_id' => 524,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1017,
                'created_at' => '2025-01-24 23:41:50',
                'updated_at' => '2025-01-24 23:41:50',
            ),
            211 => 
            array (
                'id' => 1278,
                'amount' => '35833.33',
                'itemable_id' => 525,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1017,
                'created_at' => '2025-01-24 23:41:50',
                'updated_at' => '2025-01-24 23:41:50',
            ),
            212 => 
            array (
                'id' => 1279,
                'amount' => '21654.00',
                'itemable_id' => 526,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1018,
                'created_at' => '2025-01-24 23:45:38',
                'updated_at' => '2025-01-24 23:45:38',
            ),
            213 => 
            array (
                'id' => 1280,
                'amount' => '21654.00',
                'itemable_id' => 527,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1018,
                'created_at' => '2025-01-24 23:45:38',
                'updated_at' => '2025-01-24 23:45:38',
            ),
            214 => 
            array (
                'id' => 1281,
                'amount' => '43750.00',
                'itemable_id' => 528,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1019,
                'created_at' => '2025-01-24 23:48:07',
                'updated_at' => '2025-01-24 23:48:07',
            ),
            215 => 
            array (
                'id' => 1282,
                'amount' => '43750.00',
                'itemable_id' => 529,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1019,
                'created_at' => '2025-01-24 23:48:07',
                'updated_at' => '2025-01-24 23:48:07',
            ),
            216 => 
            array (
                'id' => 1283,
                'amount' => '43333.33',
                'itemable_id' => 530,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1020,
                'created_at' => '2025-01-24 23:53:19',
                'updated_at' => '2025-01-24 23:53:19',
            ),
            217 => 
            array (
                'id' => 1284,
                'amount' => '43333.33',
                'itemable_id' => 531,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1020,
                'created_at' => '2025-01-24 23:53:19',
                'updated_at' => '2025-01-24 23:53:19',
            ),
            218 => 
            array (
                'id' => 1285,
                'amount' => '35834.00',
                'itemable_id' => 532,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1021,
                'created_at' => '2025-01-24 23:55:20',
                'updated_at' => '2025-01-24 23:55:20',
            ),
            219 => 
            array (
                'id' => 1286,
                'amount' => '35834.00',
                'itemable_id' => 533,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1021,
                'created_at' => '2025-01-24 23:55:20',
                'updated_at' => '2025-01-24 23:55:20',
            ),
            220 => 
            array (
                'id' => 1287,
                'amount' => '5000.00',
                'itemable_id' => 1261,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1022,
                'created_at' => '2025-01-28 17:26:22',
                'updated_at' => '2025-01-28 17:26:22',
            ),
            221 => 
            array (
                'id' => 1288,
                'amount' => '2160.00',
                'itemable_id' => 1264,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1023,
                'created_at' => '2025-01-28 17:55:19',
                'updated_at' => '2025-01-28 17:55:19',
            ),
            222 => 
            array (
                'id' => 1289,
                'amount' => '2700.00',
                'itemable_id' => 1263,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1023,
                'created_at' => '2025-01-28 17:55:19',
                'updated_at' => '2025-01-28 17:55:19',
            ),
            223 => 
            array (
                'id' => 1290,
                'amount' => '14250.00',
                'itemable_id' => 1259,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1024,
                'created_at' => '2025-01-28 18:14:43',
                'updated_at' => '2025-01-28 18:14:43',
            ),
            224 => 
            array (
                'id' => 1291,
                'amount' => '1750.00',
                'itemable_id' => 1258,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1024,
                'created_at' => '2025-01-28 18:14:43',
                'updated_at' => '2025-01-28 18:14:43',
            ),
            225 => 
            array (
                'id' => 1292,
                'amount' => '16500.00',
                'itemable_id' => 1265,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1025,
                'created_at' => '2025-01-28 18:27:19',
                'updated_at' => '2025-01-28 18:27:19',
            ),
            226 => 
            array (
                'id' => 1293,
                'amount' => '22580.00',
                'itemable_id' => 1267,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1026,
                'created_at' => '2025-01-28 21:01:44',
                'updated_at' => '2025-01-28 21:01:44',
            ),
            227 => 
            array (
                'id' => 1294,
                'amount' => '4200.00',
                'itemable_id' => 1266,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1026,
                'created_at' => '2025-01-28 21:01:44',
                'updated_at' => '2025-01-28 21:01:44',
            ),
            228 => 
            array (
                'id' => 1295,
                'amount' => '800.00',
                'itemable_id' => 1269,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1027,
                'created_at' => '2025-01-28 21:28:49',
                'updated_at' => '2025-01-28 21:28:49',
            ),
            229 => 
            array (
                'id' => 1296,
                'amount' => '3200.00',
                'itemable_id' => 1268,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1027,
                'created_at' => '2025-01-28 21:28:49',
                'updated_at' => '2025-01-28 21:28:49',
            ),
            230 => 
            array (
                'id' => 1297,
                'amount' => '1550.00',
                'itemable_id' => 1270,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1028,
                'created_at' => '2025-01-28 21:34:23',
                'updated_at' => '2025-01-28 21:34:23',
            ),
            231 => 
            array (
                'id' => 1298,
                'amount' => '3000.00',
                'itemable_id' => 1271,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1029,
                'created_at' => '2025-01-28 21:45:48',
                'updated_at' => '2025-01-28 21:45:48',
            ),
            232 => 
            array (
                'id' => 1299,
                'amount' => '700.00',
                'itemable_id' => 1273,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1030,
                'created_at' => '2025-01-30 18:49:46',
                'updated_at' => '2025-01-30 18:49:46',
            ),
            233 => 
            array (
                'id' => 1300,
                'amount' => '250.00',
                'itemable_id' => 534,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1031,
                'created_at' => '2025-01-30 19:13:25',
                'updated_at' => '2025-01-30 19:13:25',
            ),
            234 => 
            array (
                'id' => 1301,
                'amount' => '11400.00',
                'itemable_id' => 1275,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1032,
                'created_at' => '2025-01-30 19:41:28',
                'updated_at' => '2025-01-30 19:41:28',
            ),
            235 => 
            array (
                'id' => 1302,
                'amount' => '800.00',
                'itemable_id' => 1252,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1033,
                'created_at' => '2025-01-30 20:57:48',
                'updated_at' => '2025-01-30 20:57:48',
            ),
            236 => 
            array (
                'id' => 1303,
                'amount' => '3200.00',
                'itemable_id' => 1251,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1033,
                'created_at' => '2025-01-30 20:57:48',
                'updated_at' => '2025-01-30 20:57:48',
            ),
            237 => 
            array (
                'id' => 1304,
                'amount' => '3000.00',
                'itemable_id' => 1277,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1034,
                'created_at' => '2025-01-30 21:33:29',
                'updated_at' => '2025-01-30 21:33:29',
            ),
            238 => 
            array (
                'id' => 1305,
                'amount' => '19820.00',
                'itemable_id' => 1276,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1034,
                'created_at' => '2025-01-30 21:33:29',
                'updated_at' => '2025-01-30 21:33:29',
            ),
            239 => 
            array (
                'id' => 1306,
                'amount' => '4053.00',
                'itemable_id' => 1254,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1035,
                'created_at' => '2025-01-30 22:04:59',
                'updated_at' => '2025-01-30 22:04:59',
            ),
            240 => 
            array (
                'id' => 1307,
                'amount' => '3650.00',
                'itemable_id' => 1253,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1035,
                'created_at' => '2025-01-30 22:04:59',
                'updated_at' => '2025-01-30 22:04:59',
            ),
            241 => 
            array (
                'id' => 1308,
                'amount' => '1724000.00',
                'itemable_id' => 535,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1036,
                'created_at' => '2025-01-30 22:49:31',
                'updated_at' => '2025-01-30 22:49:31',
            ),
            242 => 
            array (
                'id' => 1309,
                'amount' => '1320.00',
                'itemable_id' => 1279,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1037,
                'created_at' => '2025-01-31 19:11:29',
                'updated_at' => '2025-01-31 19:11:29',
            ),
            243 => 
            array (
                'id' => 1310,
                'amount' => '2440.00',
                'itemable_id' => 1288,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1038,
                'created_at' => '2025-02-03 17:22:12',
                'updated_at' => '2025-02-03 17:22:12',
            ),
            244 => 
            array (
                'id' => 1311,
                'amount' => '900.00',
                'itemable_id' => 1281,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1039,
                'created_at' => '2025-02-03 17:49:45',
                'updated_at' => '2025-02-03 17:49:45',
            ),
            245 => 
            array (
                'id' => 1312,
                'amount' => '700.00',
                'itemable_id' => 1282,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1040,
                'created_at' => '2025-02-03 17:51:10',
                'updated_at' => '2025-02-03 17:51:10',
            ),
            246 => 
            array (
                'id' => 1313,
                'amount' => '2625.00',
                'itemable_id' => 1283,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1041,
                'created_at' => '2025-02-03 17:51:32',
                'updated_at' => '2025-02-03 17:51:32',
            ),
            247 => 
            array (
                'id' => 1314,
                'amount' => '5250.00',
                'itemable_id' => 1284,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1042,
                'created_at' => '2025-02-03 17:52:16',
                'updated_at' => '2025-02-03 17:52:16',
            ),
            248 => 
            array (
                'id' => 1315,
                'amount' => '900.00',
                'itemable_id' => 1285,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1043,
                'created_at' => '2025-02-03 17:52:57',
                'updated_at' => '2025-02-03 17:52:57',
            ),
            249 => 
            array (
                'id' => 1316,
                'amount' => '2450.00',
                'itemable_id' => 1286,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1044,
                'created_at' => '2025-02-03 17:53:23',
                'updated_at' => '2025-02-03 17:53:23',
            ),
            250 => 
            array (
                'id' => 1317,
                'amount' => '9260.00',
                'itemable_id' => 1287,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1045,
                'created_at' => '2025-02-03 17:53:55',
                'updated_at' => '2025-02-03 17:53:55',
            ),
            251 => 
            array (
                'id' => 1318,
                'amount' => '560.00',
                'itemable_id' => 1290,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1046,
                'created_at' => '2025-02-03 19:18:59',
                'updated_at' => '2025-02-03 19:18:59',
            ),
            252 => 
            array (
                'id' => 1319,
                'amount' => '2480.00',
                'itemable_id' => 1289,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1046,
                'created_at' => '2025-02-03 19:18:59',
                'updated_at' => '2025-02-03 19:18:59',
            ),
            253 => 
            array (
                'id' => 1320,
                'amount' => '3904.00',
                'itemable_id' => 1292,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1047,
                'created_at' => '2025-02-03 19:19:46',
                'updated_at' => '2025-02-03 19:19:46',
            ),
            254 => 
            array (
                'id' => 1321,
                'amount' => '880.00',
                'itemable_id' => 1291,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1047,
                'created_at' => '2025-02-03 19:19:46',
                'updated_at' => '2025-02-03 19:19:46',
            ),
            255 => 
            array (
                'id' => 1322,
                'amount' => '9870.00',
                'itemable_id' => 1293,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1048,
                'created_at' => '2025-02-03 19:34:10',
                'updated_at' => '2025-02-03 19:34:10',
            ),
            256 => 
            array (
                'id' => 1323,
                'amount' => '2440.00',
                'itemable_id' => 1294,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1049,
                'created_at' => '2025-02-03 20:09:38',
                'updated_at' => '2025-02-03 20:09:38',
            ),
            257 => 
            array (
                'id' => 1324,
                'amount' => '320.00',
                'itemable_id' => 1296,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1050,
                'created_at' => '2025-02-03 20:35:40',
                'updated_at' => '2025-02-03 20:35:40',
            ),
            258 => 
            array (
                'id' => 1325,
                'amount' => '880.00',
                'itemable_id' => 1295,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1050,
                'created_at' => '2025-02-03 20:35:40',
                'updated_at' => '2025-02-03 20:35:40',
            ),
            259 => 
            array (
                'id' => 1326,
                'amount' => '1360.00',
                'itemable_id' => 1298,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1051,
                'created_at' => '2025-02-03 20:36:41',
                'updated_at' => '2025-02-03 20:36:41',
            ),
            260 => 
            array (
                'id' => 1327,
                'amount' => '440.00',
                'itemable_id' => 1297,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1051,
                'created_at' => '2025-02-03 20:36:41',
                'updated_at' => '2025-02-03 20:36:41',
            ),
            261 => 
            array (
                'id' => 1328,
                'amount' => '1550.00',
                'itemable_id' => 1278,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1052,
                'created_at' => '2025-02-04 19:03:42',
                'updated_at' => '2025-02-04 19:03:42',
            ),
            262 => 
            array (
                'id' => 1329,
                'amount' => '3100.00',
                'itemable_id' => 1302,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1053,
                'created_at' => '2025-02-04 20:06:48',
                'updated_at' => '2025-02-04 20:06:48',
            ),
            263 => 
            array (
                'id' => 1330,
                'amount' => '5500.00',
                'itemable_id' => 1301,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1053,
                'created_at' => '2025-02-04 20:06:48',
                'updated_at' => '2025-02-04 20:06:48',
            ),
            264 => 
            array (
                'id' => 1331,
                'amount' => '2440.00',
                'itemable_id' => 1300,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1054,
                'created_at' => '2025-02-04 20:07:39',
                'updated_at' => '2025-02-04 20:07:39',
            ),
            265 => 
            array (
                'id' => 1332,
                'amount' => '440.00',
                'itemable_id' => 1299,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1054,
                'created_at' => '2025-02-04 20:07:39',
                'updated_at' => '2025-02-04 20:07:39',
            ),
            266 => 
            array (
                'id' => 1333,
                'amount' => '3000.00',
                'itemable_id' => 536,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1055,
                'created_at' => '2025-02-05 00:43:48',
                'updated_at' => '2025-02-05 00:43:48',
            ),
            267 => 
            array (
                'id' => 1334,
                'amount' => '6000.00',
                'itemable_id' => 1303,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1056,
                'created_at' => '2025-02-05 17:19:14',
                'updated_at' => '2025-02-05 17:19:14',
            ),
            268 => 
            array (
                'id' => 1335,
                'amount' => '750.00',
                'itemable_id' => 1304,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1057,
                'created_at' => '2025-02-05 17:29:41',
                'updated_at' => '2025-02-05 17:29:41',
            ),
            269 => 
            array (
                'id' => 1336,
                'amount' => '1650.00',
                'itemable_id' => 1306,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1058,
                'created_at' => '2025-02-05 18:26:43',
                'updated_at' => '2025-02-05 18:26:43',
            ),
            270 => 
            array (
                'id' => 1337,
                'amount' => '1650.00',
                'itemable_id' => 1305,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1058,
                'created_at' => '2025-02-05 18:26:43',
                'updated_at' => '2025-02-05 18:26:43',
            ),
            271 => 
            array (
                'id' => 1338,
                'amount' => '1100.00',
                'itemable_id' => 1307,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1059,
                'created_at' => '2025-02-05 19:09:44',
                'updated_at' => '2025-02-05 19:09:44',
            ),
            272 => 
            array (
                'id' => 1339,
                'amount' => '924.00',
                'itemable_id' => 1309,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1060,
                'created_at' => '2025-02-05 21:02:27',
                'updated_at' => '2025-02-05 21:02:27',
            ),
            273 => 
            array (
                'id' => 1340,
                'amount' => '1320.00',
                'itemable_id' => 1308,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1061,
                'created_at' => '2025-02-05 21:02:52',
                'updated_at' => '2025-02-05 21:02:52',
            ),
            274 => 
            array (
                'id' => 1341,
                'amount' => '69445.00',
                'itemable_id' => 537,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1062,
                'created_at' => '2025-02-05 22:31:25',
                'updated_at' => '2025-02-05 22:31:25',
            ),
            275 => 
            array (
                'id' => 1342,
                'amount' => '1025.00',
                'itemable_id' => 1310,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1063,
                'created_at' => '2025-02-05 22:35:25',
                'updated_at' => '2025-02-05 22:35:25',
            ),
            276 => 
            array (
                'id' => 1343,
                'amount' => '550.00',
                'itemable_id' => 1313,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1064,
                'created_at' => '2025-02-05 23:14:24',
                'updated_at' => '2025-02-05 23:14:24',
            ),
            277 => 
            array (
                'id' => 1344,
                'amount' => '3550.00',
                'itemable_id' => 1314,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1065,
                'created_at' => '2025-02-05 23:20:39',
                'updated_at' => '2025-02-05 23:20:39',
            ),
            278 => 
            array (
                'id' => 1345,
                'amount' => '3550.00',
                'itemable_id' => 1311,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1066,
                'created_at' => '2025-02-05 23:21:01',
                'updated_at' => '2025-02-05 23:21:01',
            ),
            279 => 
            array (
                'id' => 1346,
                'amount' => '3550.00',
                'itemable_id' => 1312,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1067,
                'created_at' => '2025-02-05 23:21:28',
                'updated_at' => '2025-02-05 23:21:28',
            ),
            280 => 
            array (
                'id' => 1347,
                'amount' => '13625.00',
                'itemable_id' => 538,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1068,
                'created_at' => '2025-02-06 00:56:39',
                'updated_at' => '2025-02-06 00:56:39',
            ),
            281 => 
            array (
                'id' => 1354,
                'amount' => '6362791.96',
                'itemable_id' => 545,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1075,
                'created_at' => '2025-02-06 17:50:07',
                'updated_at' => '2025-02-06 17:50:07',
            ),
            282 => 
            array (
                'id' => 1355,
                'amount' => '7600.00',
                'itemable_id' => 1325,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1076,
                'created_at' => '2025-02-06 18:24:48',
                'updated_at' => '2025-02-06 18:24:48',
            ),
            283 => 
            array (
                'id' => 1356,
                'amount' => '7400.00',
                'itemable_id' => 1327,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1077,
                'created_at' => '2025-02-06 19:15:48',
                'updated_at' => '2025-02-06 19:15:48',
            ),
            284 => 
            array (
                'id' => 1357,
                'amount' => '3000.00',
                'itemable_id' => 1326,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1078,
                'created_at' => '2025-02-06 19:16:14',
                'updated_at' => '2025-02-06 19:16:14',
            ),
            285 => 
            array (
                'id' => 1358,
                'amount' => '9000.00',
                'itemable_id' => 1328,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1079,
                'created_at' => '2025-02-06 21:28:03',
                'updated_at' => '2025-02-06 21:28:03',
            ),
            286 => 
            array (
                'id' => 1359,
                'amount' => '500.00',
                'itemable_id' => 1340,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1080,
                'created_at' => '2025-02-06 23:24:32',
                'updated_at' => '2025-02-06 23:24:32',
            ),
            287 => 
            array (
                'id' => 1360,
                'amount' => '500.00',
                'itemable_id' => 1339,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1081,
                'created_at' => '2025-02-06 23:24:56',
                'updated_at' => '2025-02-06 23:24:56',
            ),
            288 => 
            array (
                'id' => 1361,
                'amount' => '500.00',
                'itemable_id' => 1338,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1082,
                'created_at' => '2025-02-06 23:25:17',
                'updated_at' => '2025-02-06 23:25:17',
            ),
            289 => 
            array (
                'id' => 1362,
                'amount' => '500.00',
                'itemable_id' => 1337,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1083,
                'created_at' => '2025-02-06 23:25:41',
                'updated_at' => '2025-02-06 23:25:41',
            ),
            290 => 
            array (
                'id' => 1363,
                'amount' => '500.00',
                'itemable_id' => 1336,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1084,
                'created_at' => '2025-02-06 23:26:01',
                'updated_at' => '2025-02-06 23:26:01',
            ),
            291 => 
            array (
                'id' => 1364,
                'amount' => '500.00',
                'itemable_id' => 1335,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1085,
                'created_at' => '2025-02-06 23:26:22',
                'updated_at' => '2025-02-06 23:26:22',
            ),
            292 => 
            array (
                'id' => 1365,
                'amount' => '500.00',
                'itemable_id' => 1334,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1086,
                'created_at' => '2025-02-06 23:26:47',
                'updated_at' => '2025-02-06 23:26:47',
            ),
            293 => 
            array (
                'id' => 1366,
                'amount' => '500.00',
                'itemable_id' => 1333,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1087,
                'created_at' => '2025-02-06 23:27:08',
                'updated_at' => '2025-02-06 23:27:08',
            ),
            294 => 
            array (
                'id' => 1367,
                'amount' => '500.00',
                'itemable_id' => 1331,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1088,
                'created_at' => '2025-02-06 23:27:32',
                'updated_at' => '2025-02-06 23:27:32',
            ),
            295 => 
            array (
                'id' => 1368,
                'amount' => '500.00',
                'itemable_id' => 1332,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1089,
                'created_at' => '2025-02-06 23:27:55',
                'updated_at' => '2025-02-06 23:27:55',
            ),
            296 => 
            array (
                'id' => 1369,
                'amount' => '500.00',
                'itemable_id' => 1330,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1090,
                'created_at' => '2025-02-06 23:28:26',
                'updated_at' => '2025-02-06 23:28:26',
            ),
            297 => 
            array (
                'id' => 1370,
                'amount' => '500.00',
                'itemable_id' => 1329,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1091,
                'created_at' => '2025-02-06 23:28:44',
                'updated_at' => '2025-02-06 23:28:44',
            ),
            298 => 
            array (
                'id' => 1371,
                'amount' => '1550.00',
                'itemable_id' => 1353,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1092,
                'created_at' => '2025-02-07 22:09:05',
                'updated_at' => '2025-02-07 22:09:05',
            ),
            299 => 
            array (
                'id' => 1372,
                'amount' => '850.00',
                'itemable_id' => 1352,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1092,
                'created_at' => '2025-02-07 22:09:05',
                'updated_at' => '2025-02-07 22:09:05',
            ),
            300 => 
            array (
                'id' => 1373,
                'amount' => '500.00',
                'itemable_id' => 1354,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1093,
                'created_at' => '2025-02-07 22:59:31',
                'updated_at' => '2025-02-07 22:59:31',
            ),
            301 => 
            array (
                'id' => 1374,
                'amount' => '5250.00',
                'itemable_id' => 1355,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1094,
                'created_at' => '2025-02-07 23:14:53',
                'updated_at' => '2025-02-07 23:14:53',
            ),
            302 => 
            array (
                'id' => 1375,
                'amount' => '8600.00',
                'itemable_id' => 1351,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1095,
                'created_at' => '2025-02-07 23:18:24',
                'updated_at' => '2025-02-07 23:18:24',
            ),
            303 => 
            array (
                'id' => 1376,
                'amount' => '520.00',
                'itemable_id' => 1356,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1096,
                'created_at' => '2025-02-07 23:44:27',
                'updated_at' => '2025-02-07 23:44:27',
            ),
            304 => 
            array (
                'id' => 1377,
                'amount' => '1550.00',
                'itemable_id' => 1357,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1097,
                'created_at' => '2025-02-10 16:57:07',
                'updated_at' => '2025-02-10 16:57:07',
            ),
            305 => 
            array (
                'id' => 1378,
                'amount' => '2040.00',
                'itemable_id' => 1358,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1098,
                'created_at' => '2025-02-10 17:18:17',
                'updated_at' => '2025-02-10 17:18:17',
            ),
            306 => 
            array (
                'id' => 1379,
                'amount' => '1536.00',
                'itemable_id' => 1359,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1099,
                'created_at' => '2025-02-10 17:47:58',
                'updated_at' => '2025-02-10 17:47:58',
            ),
            307 => 
            array (
                'id' => 1380,
                'amount' => '520.00',
                'itemable_id' => 1362,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1100,
                'created_at' => '2025-02-10 18:34:45',
                'updated_at' => '2025-02-10 18:34:45',
            ),
            308 => 
            array (
                'id' => 1381,
                'amount' => '520.00',
                'itemable_id' => 1361,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1101,
                'created_at' => '2025-02-10 18:35:26',
                'updated_at' => '2025-02-10 18:35:26',
            ),
            309 => 
            array (
                'id' => 1382,
                'amount' => '4800.00',
                'itemable_id' => 1360,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1101,
                'created_at' => '2025-02-10 18:35:26',
                'updated_at' => '2025-02-10 18:35:26',
            ),
            310 => 
            array (
                'id' => 1383,
                'amount' => '19920.00',
                'itemable_id' => 1366,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1102,
                'created_at' => '2025-02-10 19:33:27',
                'updated_at' => '2025-02-10 19:33:27',
            ),
            311 => 
            array (
                'id' => 1384,
                'amount' => '550.00',
                'itemable_id' => 1367,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1103,
                'created_at' => '2025-02-10 20:32:16',
                'updated_at' => '2025-02-10 20:32:16',
            ),
            312 => 
            array (
                'id' => 1385,
                'amount' => '1550.00',
                'itemable_id' => 1368,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1104,
                'created_at' => '2025-02-10 20:47:35',
                'updated_at' => '2025-02-10 20:47:35',
            ),
            313 => 
            array (
                'id' => 1386,
                'amount' => '4200.00',
                'itemable_id' => 1369,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1105,
                'created_at' => '2025-02-10 22:28:08',
                'updated_at' => '2025-02-10 22:28:08',
            ),
            314 => 
            array (
                'id' => 1387,
                'amount' => '1900.00',
                'itemable_id' => 1371,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1106,
                'created_at' => '2025-02-10 23:04:27',
                'updated_at' => '2025-02-10 23:04:27',
            ),
            315 => 
            array (
                'id' => 1388,
                'amount' => '2440.00',
                'itemable_id' => 1378,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1107,
                'created_at' => '2025-02-11 18:08:40',
                'updated_at' => '2025-02-11 18:08:40',
            ),
            316 => 
            array (
                'id' => 1390,
                'amount' => '28366.67',
                'itemable_id' => 547,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1109,
                'created_at' => '2025-02-11 19:08:58',
                'updated_at' => '2025-02-11 19:08:58',
            ),
            317 => 
            array (
                'id' => 1391,
                'amount' => '83334.00',
                'itemable_id' => 548,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1110,
                'created_at' => '2025-02-11 19:30:49',
                'updated_at' => '2025-02-11 19:30:49',
            ),
            318 => 
            array (
                'id' => 1392,
                'amount' => '92056.00',
                'itemable_id' => 549,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1111,
                'created_at' => '2025-02-11 19:38:45',
                'updated_at' => '2025-02-11 19:38:45',
            ),
            319 => 
            array (
                'id' => 1393,
                'amount' => '2000.00',
                'itemable_id' => 1379,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1112,
                'created_at' => '2025-02-11 21:08:09',
                'updated_at' => '2025-02-11 21:08:09',
            ),
            320 => 
            array (
                'id' => 1394,
                'amount' => '2100.00',
                'itemable_id' => 1381,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1113,
                'created_at' => '2025-02-11 21:43:13',
                'updated_at' => '2025-02-11 21:43:13',
            ),
            321 => 
            array (
                'id' => 1395,
                'amount' => '6300.00',
                'itemable_id' => 1380,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1113,
                'created_at' => '2025-02-11 21:43:13',
                'updated_at' => '2025-02-11 21:43:13',
            ),
            322 => 
            array (
                'id' => 1396,
                'amount' => '2440.00',
                'itemable_id' => 1382,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1114,
                'created_at' => '2025-02-11 21:58:18',
                'updated_at' => '2025-02-11 21:58:18',
            ),
            323 => 
            array (
                'id' => 1397,
                'amount' => '500.00',
                'itemable_id' => 1383,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1115,
                'created_at' => '2025-02-11 22:41:00',
                'updated_at' => '2025-02-11 22:41:00',
            ),
            324 => 
            array (
                'id' => 1398,
                'amount' => '6320.00',
                'itemable_id' => 1385,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1116,
                'created_at' => '2025-02-11 23:04:12',
                'updated_at' => '2025-02-11 23:04:12',
            ),
            325 => 
            array (
                'id' => 1399,
                'amount' => '2100.00',
                'itemable_id' => 1384,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1117,
                'created_at' => '2025-02-11 23:04:30',
                'updated_at' => '2025-02-11 23:04:30',
            ),
            326 => 
            array (
                'id' => 1400,
                'amount' => '2880.00',
                'itemable_id' => 1386,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1118,
                'created_at' => '2025-02-12 00:29:21',
                'updated_at' => '2025-02-12 00:29:21',
            ),
            327 => 
            array (
                'id' => 1401,
                'amount' => '6000.00',
                'itemable_id' => 1392,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1119,
                'created_at' => '2025-02-12 18:25:43',
                'updated_at' => '2025-02-12 18:25:43',
            ),
            328 => 
            array (
                'id' => 1402,
                'amount' => '1500.00',
                'itemable_id' => 1394,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1120,
                'created_at' => '2025-02-12 19:20:46',
                'updated_at' => '2025-02-12 19:20:46',
            ),
            329 => 
            array (
                'id' => 1403,
                'amount' => '550.00',
                'itemable_id' => 1393,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1120,
                'created_at' => '2025-02-12 19:20:46',
                'updated_at' => '2025-02-12 19:20:46',
            ),
            330 => 
            array (
                'id' => 1404,
                'amount' => '550.00',
                'itemable_id' => 1391,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1121,
                'created_at' => '2025-02-12 21:03:24',
                'updated_at' => '2025-02-12 21:03:24',
            ),
            331 => 
            array (
                'id' => 1405,
                'amount' => '1550.00',
                'itemable_id' => 1395,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1122,
                'created_at' => '2025-02-12 21:50:32',
                'updated_at' => '2025-02-12 21:50:32',
            ),
            332 => 
            array (
                'id' => 1406,
                'amount' => '1600.00',
                'itemable_id' => 1396,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1123,
                'created_at' => '2025-02-12 22:03:37',
                'updated_at' => '2025-02-12 22:03:37',
            ),
            333 => 
            array (
                'id' => 1407,
                'amount' => '1500.00',
                'itemable_id' => 1397,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1124,
                'created_at' => '2025-02-12 22:15:22',
                'updated_at' => '2025-02-12 22:15:22',
            ),
            334 => 
            array (
                'id' => 1408,
                'amount' => '9300.00',
                'itemable_id' => 1399,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1125,
                'created_at' => '2025-02-12 23:39:28',
                'updated_at' => '2025-02-12 23:39:28',
            ),
            335 => 
            array (
                'id' => 1409,
                'amount' => '9850.00',
                'itemable_id' => 1398,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1125,
                'created_at' => '2025-02-12 23:39:28',
                'updated_at' => '2025-02-12 23:39:28',
            ),
            336 => 
            array (
                'id' => 1410,
                'amount' => '880.00',
                'itemable_id' => 1400,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1126,
                'created_at' => '2025-02-13 00:07:56',
                'updated_at' => '2025-02-13 00:07:56',
            ),
            337 => 
            array (
                'id' => 1411,
                'amount' => '2880.00',
                'itemable_id' => 1401,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1127,
                'created_at' => '2025-02-13 00:31:13',
                'updated_at' => '2025-02-13 00:31:13',
            ),
            338 => 
            array (
                'id' => 1412,
                'amount' => '14029.50',
                'itemable_id' => 550,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1128,
                'created_at' => '2025-02-13 00:40:24',
                'updated_at' => '2025-02-13 00:40:24',
            ),
            339 => 
            array (
                'id' => 1413,
                'amount' => '10800.00',
                'itemable_id' => 1402,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1129,
                'created_at' => '2025-02-13 19:27:08',
                'updated_at' => '2025-02-13 19:27:08',
            ),
            340 => 
            array (
                'id' => 1414,
                'amount' => '3200.00',
                'itemable_id' => 1403,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1130,
                'created_at' => '2025-02-13 21:19:48',
                'updated_at' => '2025-02-13 21:19:48',
            ),
            341 => 
            array (
                'id' => 1415,
                'amount' => '950.00',
                'itemable_id' => 551,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1131,
                'created_at' => '2025-02-15 00:17:06',
                'updated_at' => '2025-02-15 00:17:06',
            ),
            342 => 
            array (
                'id' => 1416,
                'amount' => '5300.00',
                'itemable_id' => 1421,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1132,
                'created_at' => '2025-02-17 18:42:36',
                'updated_at' => '2025-02-17 18:42:36',
            ),
            343 => 
            array (
                'id' => 1417,
                'amount' => '3000.00',
                'itemable_id' => 1420,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1133,
                'created_at' => '2025-02-17 19:22:21',
                'updated_at' => '2025-02-17 19:22:21',
            ),
            344 => 
            array (
                'id' => 1418,
                'amount' => '2880.00',
                'itemable_id' => 1423,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1134,
                'created_at' => '2025-02-18 00:32:53',
                'updated_at' => '2025-02-18 00:32:53',
            ),
            345 => 
            array (
                'id' => 1419,
                'amount' => '3300.00',
                'itemable_id' => 1425,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1135,
                'created_at' => '2025-02-18 17:57:45',
                'updated_at' => '2025-02-18 17:57:45',
            ),
            346 => 
            array (
                'id' => 1420,
                'amount' => '5500.00',
                'itemable_id' => 1428,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1136,
                'created_at' => '2025-02-18 19:10:30',
                'updated_at' => '2025-02-18 19:10:30',
            ),
            347 => 
            array (
                'id' => 1421,
                'amount' => '1100.00',
                'itemable_id' => 1429,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1137,
                'created_at' => '2025-02-18 19:26:59',
                'updated_at' => '2025-02-18 19:26:59',
            ),
            348 => 
            array (
                'id' => 1422,
                'amount' => '550.00',
                'itemable_id' => 1431,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1138,
                'created_at' => '2025-02-18 21:47:48',
                'updated_at' => '2025-02-18 21:47:48',
            ),
            349 => 
            array (
                'id' => 1423,
                'amount' => '1650.00',
                'itemable_id' => 1432,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1139,
                'created_at' => '2025-02-18 22:11:31',
                'updated_at' => '2025-02-18 22:11:31',
            ),
            350 => 
            array (
                'id' => 1424,
                'amount' => '1750.00',
                'itemable_id' => 1427,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1139,
                'created_at' => '2025-02-18 22:11:31',
                'updated_at' => '2025-02-18 22:11:31',
            ),
            351 => 
            array (
                'id' => 1425,
                'amount' => '1650.00',
                'itemable_id' => 1426,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1139,
                'created_at' => '2025-02-18 22:11:31',
                'updated_at' => '2025-02-18 22:11:31',
            ),
            352 => 
            array (
                'id' => 1426,
                'amount' => '30149.44',
                'itemable_id' => 552,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1140,
                'created_at' => '2025-02-18 23:57:05',
                'updated_at' => '2025-02-18 23:57:05',
            ),
            353 => 
            array (
                'id' => 1427,
                'amount' => '7950.00',
                'itemable_id' => 1434,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1141,
                'created_at' => '2025-02-19 17:10:09',
                'updated_at' => '2025-02-19 17:10:09',
            ),
            354 => 
            array (
                'id' => 1428,
                'amount' => '7950.00',
                'itemable_id' => 1433,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1141,
                'created_at' => '2025-02-19 17:10:09',
                'updated_at' => '2025-02-19 17:10:09',
            ),
            355 => 
            array (
                'id' => 1429,
                'amount' => '550.00',
                'itemable_id' => 1435,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1142,
                'created_at' => '2025-02-19 17:34:19',
                'updated_at' => '2025-02-19 17:34:19',
            ),
            356 => 
            array (
                'id' => 1430,
                'amount' => '1550.00',
                'itemable_id' => 1436,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1143,
                'created_at' => '2025-02-19 17:49:21',
                'updated_at' => '2025-02-19 17:49:21',
            ),
            357 => 
            array (
                'id' => 1431,
                'amount' => '2640.00',
                'itemable_id' => 1437,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1144,
                'created_at' => '2025-02-19 18:38:19',
                'updated_at' => '2025-02-19 18:38:19',
            ),
            358 => 
            array (
                'id' => 1432,
                'amount' => '550.00',
                'itemable_id' => 1438,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1145,
                'created_at' => '2025-02-19 19:10:34',
                'updated_at' => '2025-02-19 19:10:34',
            ),
            359 => 
            array (
                'id' => 1433,
                'amount' => '650.00',
                'itemable_id' => 1441,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1146,
                'created_at' => '2025-02-19 21:06:27',
                'updated_at' => '2025-02-19 21:06:27',
            ),
            360 => 
            array (
                'id' => 1434,
                'amount' => '4550.00',
                'itemable_id' => 1439,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1146,
                'created_at' => '2025-02-19 21:06:27',
                'updated_at' => '2025-02-19 21:06:27',
            ),
            361 => 
            array (
                'id' => 1435,
                'amount' => '1000.00',
                'itemable_id' => 1440,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1147,
                'created_at' => '2025-02-19 21:06:46',
                'updated_at' => '2025-02-19 21:06:46',
            ),
            362 => 
            array (
                'id' => 1436,
                'amount' => '1100.00',
                'itemable_id' => 1444,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1148,
                'created_at' => '2025-02-19 21:11:53',
                'updated_at' => '2025-02-19 21:11:53',
            ),
            363 => 
            array (
                'id' => 1437,
                'amount' => '2200.00',
                'itemable_id' => 1442,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1149,
                'created_at' => '2025-02-19 21:34:49',
                'updated_at' => '2025-02-19 21:34:49',
            ),
            364 => 
            array (
                'id' => 1438,
                'amount' => '3750.00',
                'itemable_id' => 1419,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1150,
                'created_at' => '2025-02-19 22:10:05',
                'updated_at' => '2025-02-19 22:10:05',
            ),
            365 => 
            array (
                'id' => 1439,
                'amount' => '3500.00',
                'itemable_id' => 1418,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1150,
                'created_at' => '2025-02-19 22:10:05',
                'updated_at' => '2025-02-19 22:10:05',
            ),
            366 => 
            array (
                'id' => 1440,
                'amount' => '9000.00',
                'itemable_id' => 1417,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1150,
                'created_at' => '2025-02-19 22:10:05',
                'updated_at' => '2025-02-19 22:10:05',
            ),
            367 => 
            array (
                'id' => 1441,
                'amount' => '22680.00',
                'itemable_id' => 1416,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1150,
                'created_at' => '2025-02-19 22:10:05',
                'updated_at' => '2025-02-19 22:10:05',
            ),
            368 => 
            array (
                'id' => 1442,
                'amount' => '5250.00',
                'itemable_id' => 1415,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1150,
                'created_at' => '2025-02-19 22:10:05',
                'updated_at' => '2025-02-19 22:10:05',
            ),
            369 => 
            array (
                'id' => 1443,
                'amount' => '3650.00',
                'itemable_id' => 1414,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1150,
                'created_at' => '2025-02-19 22:10:05',
                'updated_at' => '2025-02-19 22:10:05',
            ),
            370 => 
            array (
                'id' => 1444,
                'amount' => '3650.00',
                'itemable_id' => 1413,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1150,
                'created_at' => '2025-02-19 22:10:05',
                'updated_at' => '2025-02-19 22:10:05',
            ),
            371 => 
            array (
                'id' => 1445,
                'amount' => '3650.00',
                'itemable_id' => 1412,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1150,
                'created_at' => '2025-02-19 22:10:05',
                'updated_at' => '2025-02-19 22:10:05',
            ),
            372 => 
            array (
                'id' => 1446,
                'amount' => '8640.00',
                'itemable_id' => 1409,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1151,
                'created_at' => '2025-02-19 22:11:31',
                'updated_at' => '2025-02-19 22:11:31',
            ),
            373 => 
            array (
                'id' => 1447,
                'amount' => '5250.00',
                'itemable_id' => 1408,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1151,
                'created_at' => '2025-02-19 22:11:31',
                'updated_at' => '2025-02-19 22:11:31',
            ),
            374 => 
            array (
                'id' => 1448,
                'amount' => '3650.00',
                'itemable_id' => 1407,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1151,
                'created_at' => '2025-02-19 22:11:31',
                'updated_at' => '2025-02-19 22:11:31',
            ),
            375 => 
            array (
                'id' => 1449,
                'amount' => '3650.00',
                'itemable_id' => 1406,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1151,
                'created_at' => '2025-02-19 22:11:31',
                'updated_at' => '2025-02-19 22:11:31',
            ),
            376 => 
            array (
                'id' => 1450,
                'amount' => '3650.00',
                'itemable_id' => 1405,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1151,
                'created_at' => '2025-02-19 22:11:31',
                'updated_at' => '2025-02-19 22:11:31',
            ),
            377 => 
            array (
                'id' => 1451,
                'amount' => '4320.00',
                'itemable_id' => 1411,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1152,
                'created_at' => '2025-02-19 22:12:07',
                'updated_at' => '2025-02-19 22:12:07',
            ),
            378 => 
            array (
                'id' => 1452,
                'amount' => '3500.00',
                'itemable_id' => 1410,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1152,
                'created_at' => '2025-02-19 22:12:07',
                'updated_at' => '2025-02-19 22:12:07',
            ),
            379 => 
            array (
                'id' => 1453,
                'amount' => '13840.00',
                'itemable_id' => 1446,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1153,
                'created_at' => '2025-02-19 22:40:31',
                'updated_at' => '2025-02-19 22:40:31',
            ),
            380 => 
            array (
                'id' => 1454,
                'amount' => '3100.00',
                'itemable_id' => 1445,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1153,
                'created_at' => '2025-02-19 22:40:31',
                'updated_at' => '2025-02-19 22:40:31',
            ),
            381 => 
            array (
                'id' => 1457,
                'amount' => '5000.00',
                'itemable_id' => 1447,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1155,
                'created_at' => '2025-02-19 23:08:05',
                'updated_at' => '2025-02-19 23:08:05',
            ),
            382 => 
            array (
                'id' => 1458,
                'amount' => '1140.00',
                'itemable_id' => 1448,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1156,
                'created_at' => '2025-02-20 00:10:04',
                'updated_at' => '2025-02-20 00:10:04',
            ),
            383 => 
            array (
                'id' => 1459,
                'amount' => '50000.00',
                'itemable_id' => 553,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1157,
                'created_at' => '2025-02-20 01:41:05',
                'updated_at' => '2025-02-20 01:41:05',
            ),
            384 => 
            array (
                'id' => 1460,
                'amount' => '50000.00',
                'itemable_id' => 554,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1157,
                'created_at' => '2025-02-20 01:41:05',
                'updated_at' => '2025-02-20 01:41:05',
            ),
            385 => 
            array (
                'id' => 1461,
                'amount' => '50000.00',
                'itemable_id' => 555,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1157,
                'created_at' => '2025-02-20 01:41:05',
                'updated_at' => '2025-02-20 01:41:05',
            ),
            386 => 
            array (
                'id' => 1462,
                'amount' => '50000.00',
                'itemable_id' => 556,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1157,
                'created_at' => '2025-02-20 01:41:05',
                'updated_at' => '2025-02-20 01:41:05',
            ),
            387 => 
            array (
                'id' => 1463,
                'amount' => '50000.00',
                'itemable_id' => 557,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1157,
                'created_at' => '2025-02-20 01:41:05',
                'updated_at' => '2025-02-20 01:41:05',
            ),
            388 => 
            array (
                'id' => 1464,
                'amount' => '50000.00',
                'itemable_id' => 558,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1157,
                'created_at' => '2025-02-20 01:41:05',
                'updated_at' => '2025-02-20 01:41:05',
            ),
            389 => 
            array (
                'id' => 1465,
                'amount' => '500.00',
                'itemable_id' => 1450,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1158,
                'created_at' => '2025-02-20 17:19:24',
                'updated_at' => '2025-02-20 17:19:24',
            ),
            390 => 
            array (
                'id' => 1466,
                'amount' => '650.00',
                'itemable_id' => 1453,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1159,
                'created_at' => '2025-02-20 18:05:44',
                'updated_at' => '2025-02-20 18:05:44',
            ),
            391 => 
            array (
                'id' => 1467,
                'amount' => '950.00',
                'itemable_id' => 1452,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1159,
                'created_at' => '2025-02-20 18:05:44',
                'updated_at' => '2025-02-20 18:05:44',
            ),
            392 => 
            array (
                'id' => 1468,
                'amount' => '2500.00',
                'itemable_id' => 1449,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1160,
                'created_at' => '2025-02-20 18:31:13',
                'updated_at' => '2025-02-20 18:31:13',
            ),
            393 => 
            array (
                'id' => 1469,
                'amount' => '7220.00',
                'itemable_id' => 1454,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1161,
                'created_at' => '2025-02-20 19:20:31',
                'updated_at' => '2025-02-20 19:20:31',
            ),
            394 => 
            array (
                'id' => 1470,
                'amount' => '7220.00',
                'itemable_id' => 1455,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1161,
                'created_at' => '2025-02-20 19:21:02',
                'updated_at' => '2025-02-20 19:21:02',
            ),
            395 => 
            array (
                'id' => 1471,
                'amount' => '2800.00',
                'itemable_id' => 1456,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1163,
                'created_at' => '2025-02-20 21:58:21',
                'updated_at' => '2025-02-20 21:58:21',
            ),
            396 => 
            array (
                'id' => 1472,
                'amount' => '2500.00',
                'itemable_id' => 1457,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1164,
                'created_at' => '2025-02-21 18:52:17',
                'updated_at' => '2025-02-21 18:52:17',
            ),
            397 => 
            array (
                'id' => 1473,
                'amount' => '500.00',
                'itemable_id' => 1458,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1165,
                'created_at' => '2025-02-21 21:08:08',
                'updated_at' => '2025-02-21 21:08:08',
            ),
            398 => 
            array (
                'id' => 1474,
                'amount' => '500.00',
                'itemable_id' => 1459,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1166,
                'created_at' => '2025-02-21 21:08:33',
                'updated_at' => '2025-02-21 21:08:33',
            ),
            399 => 
            array (
                'id' => 1475,
                'amount' => '500.00',
                'itemable_id' => 1460,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1167,
                'created_at' => '2025-02-21 21:08:58',
                'updated_at' => '2025-02-21 21:08:58',
            ),
            400 => 
            array (
                'id' => 1476,
                'amount' => '15904.00',
                'itemable_id' => 1451,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1168,
                'created_at' => '2025-02-21 22:19:32',
                'updated_at' => '2025-02-21 22:19:32',
            ),
            401 => 
            array (
                'id' => 1477,
                'amount' => '3900.00',
                'itemable_id' => 1370,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1169,
                'created_at' => '2025-02-21 23:31:53',
                'updated_at' => '2025-02-21 23:31:53',
            ),
            402 => 
            array (
                'id' => 1478,
                'amount' => '1550.00',
                'itemable_id' => 1461,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1170,
                'created_at' => '2025-02-24 16:34:45',
                'updated_at' => '2025-02-24 16:34:45',
            ),
            403 => 
            array (
                'id' => 1479,
                'amount' => '2440.00',
                'itemable_id' => 1462,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1171,
                'created_at' => '2025-02-24 17:50:13',
                'updated_at' => '2025-02-24 17:50:13',
            ),
            404 => 
            array (
                'id' => 1480,
                'amount' => '8250.00',
                'itemable_id' => 1443,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1172,
                'created_at' => '2025-02-24 23:04:02',
                'updated_at' => '2025-02-24 23:04:02',
            ),
            405 => 
            array (
                'id' => 1481,
                'amount' => '1550.00',
                'itemable_id' => 1466,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1173,
                'created_at' => '2025-02-25 17:01:31',
                'updated_at' => '2025-02-25 17:01:31',
            ),
            406 => 
            array (
                'id' => 1482,
                'amount' => '1240.00',
                'itemable_id' => 1467,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1174,
                'created_at' => '2025-02-25 18:03:34',
                'updated_at' => '2025-02-25 18:03:34',
            ),
            407 => 
            array (
                'id' => 1483,
                'amount' => '9300.00',
                'itemable_id' => 1468,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1175,
                'created_at' => '2025-02-25 21:20:20',
                'updated_at' => '2025-02-25 21:20:20',
            ),
            408 => 
            array (
                'id' => 1484,
                'amount' => '2100.00',
                'itemable_id' => 1469,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1176,
                'created_at' => '2025-02-25 21:44:13',
                'updated_at' => '2025-02-25 21:44:13',
            ),
            409 => 
            array (
                'id' => 1485,
                'amount' => '1580.00',
                'itemable_id' => 559,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1177,
                'created_at' => '2025-02-26 00:57:52',
                'updated_at' => '2025-02-26 00:57:52',
            ),
            410 => 
            array (
                'id' => 1486,
                'amount' => '500.00',
                'itemable_id' => 1472,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1178,
                'created_at' => '2025-02-27 18:13:13',
                'updated_at' => '2025-02-27 18:13:13',
            ),
            411 => 
            array (
                'id' => 1487,
                'amount' => '500.00',
                'itemable_id' => 1471,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1179,
                'created_at' => '2025-02-27 18:13:25',
                'updated_at' => '2025-02-27 18:13:25',
            ),
            412 => 
            array (
                'id' => 1488,
                'amount' => '500.00',
                'itemable_id' => 1473,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1180,
                'created_at' => '2025-02-27 18:28:24',
                'updated_at' => '2025-02-27 18:28:24',
            ),
            413 => 
            array (
                'id' => 1489,
                'amount' => '5800.00',
                'itemable_id' => 1474,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1181,
                'created_at' => '2025-02-27 20:48:37',
                'updated_at' => '2025-02-27 20:48:37',
            ),
            414 => 
            array (
                'id' => 1490,
                'amount' => '43888.89',
                'itemable_id' => 560,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1182,
                'created_at' => '2025-02-27 22:49:43',
                'updated_at' => '2025-02-27 22:49:43',
            ),
            415 => 
            array (
                'id' => 1491,
                'amount' => '9558.00',
                'itemable_id' => 561,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1183,
                'created_at' => '2025-02-27 23:15:05',
                'updated_at' => '2025-02-27 23:15:05',
            ),
            416 => 
            array (
                'id' => 1492,
                'amount' => '82778.00',
                'itemable_id' => 562,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1184,
                'created_at' => '2025-02-27 23:20:07',
                'updated_at' => '2025-02-27 23:20:07',
            ),
            417 => 
            array (
                'id' => 1493,
                'amount' => '78270.10',
                'itemable_id' => 563,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1185,
                'created_at' => '2025-02-27 23:22:39',
                'updated_at' => '2025-02-27 23:22:39',
            ),
            418 => 
            array (
                'id' => 1494,
                'amount' => '41666.67',
                'itemable_id' => 564,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1186,
                'created_at' => '2025-02-27 23:24:37',
                'updated_at' => '2025-02-27 23:24:37',
            ),
            419 => 
            array (
                'id' => 1495,
                'amount' => '15089.00',
                'itemable_id' => 565,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1187,
                'created_at' => '2025-02-27 23:27:15',
                'updated_at' => '2025-02-27 23:27:15',
            ),
            420 => 
            array (
                'id' => 1496,
                'amount' => '13423.00',
                'itemable_id' => 566,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1188,
                'created_at' => '2025-02-27 23:28:43',
                'updated_at' => '2025-02-27 23:28:43',
            ),
            421 => 
            array (
                'id' => 1497,
                'amount' => '45833.33',
                'itemable_id' => 567,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1189,
                'created_at' => '2025-02-27 23:30:20',
                'updated_at' => '2025-02-27 23:30:20',
            ),
            422 => 
            array (
                'id' => 1498,
                'amount' => '16116.00',
                'itemable_id' => 568,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1190,
                'created_at' => '2025-02-27 23:33:31',
                'updated_at' => '2025-02-27 23:33:31',
            ),
            423 => 
            array (
                'id' => 1499,
                'amount' => '16080.00',
                'itemable_id' => 569,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1191,
                'created_at' => '2025-02-27 23:34:50',
                'updated_at' => '2025-02-27 23:34:50',
            ),
            424 => 
            array (
                'id' => 1500,
                'amount' => '7139.00',
                'itemable_id' => 570,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1192,
                'created_at' => '2025-02-27 23:36:22',
                'updated_at' => '2025-02-27 23:36:22',
            ),
            425 => 
            array (
                'id' => 1501,
                'amount' => '26445.00',
                'itemable_id' => 571,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1193,
                'created_at' => '2025-02-27 23:38:09',
                'updated_at' => '2025-02-27 23:38:09',
            ),
            426 => 
            array (
                'id' => 1502,
                'amount' => '10329.00',
                'itemable_id' => 572,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1194,
                'created_at' => '2025-02-27 23:39:56',
                'updated_at' => '2025-02-27 23:39:56',
            ),
            427 => 
            array (
                'id' => 1503,
                'amount' => '46291.66',
                'itemable_id' => 573,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1195,
                'created_at' => '2025-02-27 23:41:29',
                'updated_at' => '2025-02-27 23:41:29',
            ),
            428 => 
            array (
                'id' => 1504,
                'amount' => '14390.00',
                'itemable_id' => 574,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1196,
                'created_at' => '2025-02-27 23:42:55',
                'updated_at' => '2025-02-27 23:42:55',
            ),
            429 => 
            array (
                'id' => 1505,
                'amount' => '9691.00',
                'itemable_id' => 575,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1197,
                'created_at' => '2025-02-27 23:44:30',
                'updated_at' => '2025-02-27 23:44:30',
            ),
            430 => 
            array (
                'id' => 1506,
                'amount' => '16695.00',
                'itemable_id' => 576,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1198,
                'created_at' => '2025-02-27 23:45:39',
                'updated_at' => '2025-02-27 23:45:39',
            ),
            431 => 
            array (
                'id' => 1507,
                'amount' => '21389.00',
                'itemable_id' => 577,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1199,
                'created_at' => '2025-02-27 23:46:54',
                'updated_at' => '2025-02-27 23:46:54',
            ),
            432 => 
            array (
                'id' => 1508,
                'amount' => '47445.00',
                'itemable_id' => 578,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1200,
                'created_at' => '2025-02-27 23:48:12',
                'updated_at' => '2025-02-27 23:48:12',
            ),
            433 => 
            array (
                'id' => 1509,
                'amount' => '16116.00',
                'itemable_id' => 579,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1201,
                'created_at' => '2025-02-27 23:49:45',
                'updated_at' => '2025-02-27 23:49:45',
            ),
            434 => 
            array (
                'id' => 1510,
                'amount' => '30834.00',
                'itemable_id' => 580,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1202,
                'created_at' => '2025-02-27 23:52:11',
                'updated_at' => '2025-02-27 23:52:11',
            ),
            435 => 
            array (
                'id' => 1511,
                'amount' => '15252.00',
                'itemable_id' => 581,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1203,
                'created_at' => '2025-02-27 23:55:26',
                'updated_at' => '2025-02-27 23:55:26',
            ),
            436 => 
            array (
                'id' => 1512,
                'amount' => '15252.00',
                'itemable_id' => 582,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1203,
                'created_at' => '2025-02-27 23:55:26',
                'updated_at' => '2025-02-27 23:55:26',
            ),
            437 => 
            array (
                'id' => 1513,
                'amount' => '42778.00',
                'itemable_id' => 583,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1204,
                'created_at' => '2025-02-27 23:58:10',
                'updated_at' => '2025-02-27 23:58:10',
            ),
            438 => 
            array (
                'id' => 1514,
                'amount' => '42778.00',
                'itemable_id' => 584,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1204,
                'created_at' => '2025-02-27 23:58:10',
                'updated_at' => '2025-02-27 23:58:10',
            ),
            439 => 
            array (
                'id' => 1515,
                'amount' => '30000.00',
                'itemable_id' => 585,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1205,
                'created_at' => '2025-02-28 00:00:22',
                'updated_at' => '2025-02-28 00:00:22',
            ),
            440 => 
            array (
                'id' => 1516,
                'amount' => '43888.89',
                'itemable_id' => 586,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1206,
                'created_at' => '2025-02-28 00:03:02',
                'updated_at' => '2025-02-28 00:03:02',
            ),
            441 => 
            array (
                'id' => 1517,
                'amount' => '83277.78',
                'itemable_id' => 587,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1207,
                'created_at' => '2025-02-28 00:04:31',
                'updated_at' => '2025-02-28 00:04:31',
            ),
            442 => 
            array (
                'id' => 1518,
                'amount' => '33288.89',
                'itemable_id' => 588,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1208,
                'created_at' => '2025-02-28 00:08:30',
                'updated_at' => '2025-02-28 00:08:30',
            ),
            443 => 
            array (
                'id' => 1519,
                'amount' => '33288.89',
                'itemable_id' => 589,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1208,
                'created_at' => '2025-02-28 00:08:30',
                'updated_at' => '2025-02-28 00:08:30',
            ),
            444 => 
            array (
                'id' => 1520,
                'amount' => '33288.89',
                'itemable_id' => 590,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1208,
                'created_at' => '2025-02-28 00:08:30',
                'updated_at' => '2025-02-28 00:08:30',
            ),
            445 => 
            array (
                'id' => 1521,
                'amount' => '10721.80',
                'itemable_id' => 591,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1209,
                'created_at' => '2025-02-28 00:13:05',
                'updated_at' => '2025-02-28 00:13:05',
            ),
            446 => 
            array (
                'id' => 1522,
                'amount' => '38333.00',
                'itemable_id' => 592,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1210,
                'created_at' => '2025-02-28 00:16:05',
                'updated_at' => '2025-02-28 00:16:05',
            ),
            447 => 
            array (
                'id' => 1523,
                'amount' => '75000.00',
                'itemable_id' => 593,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1211,
                'created_at' => '2025-02-28 00:20:21',
                'updated_at' => '2025-02-28 00:20:21',
            ),
            448 => 
            array (
                'id' => 1524,
                'amount' => '74750.00',
                'itemable_id' => 594,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1212,
                'created_at' => '2025-02-28 00:22:02',
                'updated_at' => '2025-02-28 00:22:02',
            ),
            449 => 
            array (
                'id' => 1525,
                'amount' => '17667.67',
                'itemable_id' => 595,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1213,
                'created_at' => '2025-02-28 00:24:03',
                'updated_at' => '2025-02-28 00:24:03',
            ),
            450 => 
            array (
                'id' => 1526,
                'amount' => '18334.00',
                'itemable_id' => 596,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1214,
                'created_at' => '2025-02-28 00:25:36',
                'updated_at' => '2025-02-28 00:25:36',
            ),
            451 => 
            array (
                'id' => 1527,
                'amount' => '31527.00',
                'itemable_id' => 597,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1215,
                'created_at' => '2025-02-28 00:27:12',
                'updated_at' => '2025-02-28 00:27:12',
            ),
            452 => 
            array (
                'id' => 1528,
                'amount' => '83334.00',
                'itemable_id' => 598,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1216,
                'created_at' => '2025-02-28 00:28:10',
                'updated_at' => '2025-02-28 00:28:10',
            ),
            453 => 
            array (
                'id' => 1529,
                'amount' => '79861.11',
                'itemable_id' => 599,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1217,
                'created_at' => '2025-02-28 00:29:28',
                'updated_at' => '2025-02-28 00:29:28',
            ),
            454 => 
            array (
                'id' => 1530,
                'amount' => '33195.00',
                'itemable_id' => 600,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1218,
                'created_at' => '2025-02-28 00:32:30',
                'updated_at' => '2025-02-28 00:32:30',
            ),
            455 => 
            array (
                'id' => 1531,
                'amount' => '33195.00',
                'itemable_id' => 601,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1218,
                'created_at' => '2025-02-28 00:32:30',
                'updated_at' => '2025-02-28 00:32:30',
            ),
            456 => 
            array (
                'id' => 1532,
                'amount' => '27381.67',
                'itemable_id' => 602,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1219,
                'created_at' => '2025-02-28 00:34:26',
                'updated_at' => '2025-02-28 00:34:26',
            ),
            457 => 
            array (
                'id' => 1533,
                'amount' => '42916.67',
                'itemable_id' => 603,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1220,
                'created_at' => '2025-02-28 00:36:25',
                'updated_at' => '2025-02-28 00:36:25',
            ),
            458 => 
            array (
                'id' => 1534,
                'amount' => '41667.00',
                'itemable_id' => 604,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1221,
                'created_at' => '2025-02-28 00:38:55',
                'updated_at' => '2025-02-28 00:38:55',
            ),
            459 => 
            array (
                'id' => 1535,
                'amount' => '39167.00',
                'itemable_id' => 605,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1222,
                'created_at' => '2025-02-28 00:40:27',
                'updated_at' => '2025-02-28 00:40:27',
            ),
            460 => 
            array (
                'id' => 1536,
                'amount' => '79689.00',
                'itemable_id' => 606,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1223,
                'created_at' => '2025-02-28 00:41:30',
                'updated_at' => '2025-02-28 00:41:30',
            ),
            461 => 
            array (
                'id' => 1537,
                'amount' => '6944.44',
                'itemable_id' => 607,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1224,
                'created_at' => '2025-02-28 00:43:17',
                'updated_at' => '2025-02-28 00:43:17',
            ),
            462 => 
            array (
                'id' => 1538,
                'amount' => '43889.00',
                'itemable_id' => 608,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1225,
                'created_at' => '2025-02-28 00:44:58',
                'updated_at' => '2025-02-28 00:44:58',
            ),
            463 => 
            array (
                'id' => 1539,
                'amount' => '11020.14',
                'itemable_id' => 609,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1226,
                'created_at' => '2025-02-28 00:46:19',
                'updated_at' => '2025-02-28 00:46:19',
            ),
            464 => 
            array (
                'id' => 1540,
                'amount' => '69445.00',
                'itemable_id' => 610,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1227,
                'created_at' => '2025-02-28 00:47:40',
                'updated_at' => '2025-02-28 00:47:40',
            ),
            465 => 
            array (
                'id' => 1541,
                'amount' => '51250.00',
                'itemable_id' => 611,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1228,
                'created_at' => '2025-02-28 00:51:17',
                'updated_at' => '2025-02-28 00:51:17',
            ),
            466 => 
            array (
                'id' => 1542,
                'amount' => '51250.00',
                'itemable_id' => 612,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1228,
                'created_at' => '2025-02-28 00:51:17',
                'updated_at' => '2025-02-28 00:51:17',
            ),
            467 => 
            array (
                'id' => 1543,
                'amount' => '44166.00',
                'itemable_id' => 613,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1229,
                'created_at' => '2025-02-28 00:52:40',
                'updated_at' => '2025-02-28 00:52:40',
            ),
            468 => 
            array (
                'id' => 1544,
                'amount' => '7083.33',
                'itemable_id' => 614,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1230,
                'created_at' => '2025-02-28 00:55:08',
                'updated_at' => '2025-02-28 00:55:08',
            ),
            469 => 
            array (
                'id' => 1545,
                'amount' => '7083.33',
                'itemable_id' => 615,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1230,
                'created_at' => '2025-02-28 00:55:08',
                'updated_at' => '2025-02-28 00:55:08',
            ),
            470 => 
            array (
                'id' => 1546,
                'amount' => '42500.00',
                'itemable_id' => 616,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1231,
                'created_at' => '2025-02-28 00:56:24',
                'updated_at' => '2025-02-28 00:56:24',
            ),
            471 => 
            array (
                'id' => 1547,
                'amount' => '17777.78',
                'itemable_id' => 617,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1232,
                'created_at' => '2025-02-28 00:57:57',
                'updated_at' => '2025-02-28 00:57:57',
            ),
            472 => 
            array (
                'id' => 1548,
                'amount' => '45277.77',
                'itemable_id' => 618,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1233,
                'created_at' => '2025-02-28 00:59:34',
                'updated_at' => '2025-02-28 00:59:34',
            ),
            473 => 
            array (
                'id' => 1549,
                'amount' => '500000.00',
                'itemable_id' => 619,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1234,
                'created_at' => '2025-02-28 01:06:59',
                'updated_at' => '2025-02-28 01:06:59',
            ),
            474 => 
            array (
                'id' => 1550,
                'amount' => '100000.00',
                'itemable_id' => 620,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1234,
                'created_at' => '2025-02-28 01:06:59',
                'updated_at' => '2025-02-28 01:06:59',
            ),
            475 => 
            array (
                'id' => 1551,
                'amount' => '188900.00',
                'itemable_id' => 621,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1235,
                'created_at' => '2025-02-28 01:10:03',
                'updated_at' => '2025-02-28 01:10:03',
            ),
            476 => 
            array (
                'id' => 1552,
                'amount' => '41667.00',
                'itemable_id' => 622,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1236,
                'created_at' => '2025-02-28 01:11:47',
                'updated_at' => '2025-02-28 01:11:47',
            ),
            477 => 
            array (
                'id' => 1553,
                'amount' => '61112.00',
                'itemable_id' => 623,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1237,
                'created_at' => '2025-02-28 01:13:35',
                'updated_at' => '2025-02-28 01:13:35',
            ),
            478 => 
            array (
                'id' => 1554,
                'amount' => '35833.33',
                'itemable_id' => 624,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1238,
                'created_at' => '2025-02-28 01:14:56',
                'updated_at' => '2025-02-28 01:14:56',
            ),
            479 => 
            array (
                'id' => 1555,
                'amount' => '13056.00',
                'itemable_id' => 625,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1239,
                'created_at' => '2025-02-28 01:18:11',
                'updated_at' => '2025-02-28 01:18:11',
            ),
            480 => 
            array (
                'id' => 1556,
                'amount' => '13056.00',
                'itemable_id' => 626,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1239,
                'created_at' => '2025-02-28 01:18:11',
                'updated_at' => '2025-02-28 01:18:11',
            ),
            481 => 
            array (
                'id' => 1557,
                'amount' => '13056.00',
                'itemable_id' => 627,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1239,
                'created_at' => '2025-02-28 01:18:11',
                'updated_at' => '2025-02-28 01:18:11',
            ),
            482 => 
            array (
                'id' => 1558,
                'amount' => '21654.00',
                'itemable_id' => 628,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1240,
                'created_at' => '2025-02-28 01:20:46',
                'updated_at' => '2025-02-28 01:20:46',
            ),
            483 => 
            array (
                'id' => 1559,
                'amount' => '43750.00',
                'itemable_id' => 629,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1241,
                'created_at' => '2025-02-28 01:22:49',
                'updated_at' => '2025-02-28 01:22:49',
            ),
            484 => 
            array (
                'id' => 1560,
                'amount' => '8466.00',
                'itemable_id' => 630,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1242,
                'created_at' => '2025-02-28 01:24:41',
                'updated_at' => '2025-02-28 01:24:41',
            ),
            485 => 
            array (
                'id' => 1561,
                'amount' => '35834.00',
                'itemable_id' => 631,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1243,
                'created_at' => '2025-02-28 01:26:27',
                'updated_at' => '2025-02-28 01:26:27',
            ),
            486 => 
            array (
                'id' => 1562,
                'amount' => '35834.00',
                'itemable_id' => 632,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1243,
                'created_at' => '2025-02-28 01:26:27',
                'updated_at' => '2025-02-28 01:26:27',
            ),
            487 => 
            array (
                'id' => 1563,
                'amount' => '150000.00',
                'itemable_id' => 633,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1244,
                'created_at' => '2025-02-28 01:29:56',
                'updated_at' => '2025-02-28 01:29:56',
            ),
            488 => 
            array (
                'id' => 1564,
                'amount' => '7750.00',
                'itemable_id' => 1487,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1245,
                'created_at' => '2025-02-28 18:59:11',
                'updated_at' => '2025-02-28 18:59:11',
            ),
            489 => 
            array (
                'id' => 1565,
                'amount' => '5670.00',
                'itemable_id' => 1486,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1245,
                'created_at' => '2025-02-28 18:59:11',
                'updated_at' => '2025-02-28 18:59:11',
            ),
            490 => 
            array (
                'id' => 1566,
                'amount' => '3690.00',
                'itemable_id' => 1485,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1245,
                'created_at' => '2025-02-28 18:59:11',
                'updated_at' => '2025-02-28 18:59:11',
            ),
            491 => 
            array (
                'id' => 1567,
                'amount' => '3500.00',
                'itemable_id' => 1490,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1246,
                'created_at' => '2025-03-03 19:34:11',
                'updated_at' => '2025-03-03 19:34:11',
            ),
            492 => 
            array (
                'id' => 1568,
                'amount' => '880.00',
                'itemable_id' => 1492,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1247,
                'created_at' => '2025-03-03 21:17:30',
                'updated_at' => '2025-03-03 21:17:30',
            ),
            493 => 
            array (
                'id' => 1569,
                'amount' => '250.00',
                'itemable_id' => 1496,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1248,
                'created_at' => '2025-03-03 21:42:59',
                'updated_at' => '2025-03-03 21:42:59',
            ),
            494 => 
            array (
                'id' => 1570,
                'amount' => '700.00',
                'itemable_id' => 1495,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1248,
                'created_at' => '2025-03-03 21:42:59',
                'updated_at' => '2025-03-03 21:42:59',
            ),
            495 => 
            array (
                'id' => 1571,
                'amount' => '600.00',
                'itemable_id' => 1494,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1248,
                'created_at' => '2025-03-03 21:42:59',
                'updated_at' => '2025-03-03 21:42:59',
            ),
            496 => 
            array (
                'id' => 1572,
                'amount' => '550.00',
                'itemable_id' => 1493,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1248,
                'created_at' => '2025-03-03 21:42:59',
                'updated_at' => '2025-03-03 21:42:59',
            ),
            497 => 
            array (
                'id' => 1573,
                'amount' => '1550.00',
                'itemable_id' => 1489,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1249,
                'created_at' => '2025-03-03 22:18:59',
                'updated_at' => '2025-03-03 22:18:59',
            ),
            498 => 
            array (
                'id' => 1574,
                'amount' => '1240.00',
                'itemable_id' => 1501,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1250,
                'created_at' => '2025-03-03 22:35:25',
                'updated_at' => '2025-03-03 22:35:25',
            ),
            499 => 
            array (
                'id' => 1578,
                'amount' => '1100.00',
                'itemable_id' => 1503,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1252,
                'created_at' => '2025-03-03 23:23:29',
                'updated_at' => '2025-03-03 23:23:29',
            ),
        ));
        \DB::table('finance_op_items')->insert(array (
            0 => 
            array (
                'id' => 1579,
                'amount' => '5050.00',
                'itemable_id' => 1502,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1252,
                'created_at' => '2025-03-03 23:23:29',
                'updated_at' => '2025-03-03 23:23:29',
            ),
            1 => 
            array (
                'id' => 1580,
                'amount' => '2650.00',
                'itemable_id' => 1500,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1252,
                'created_at' => '2025-03-03 23:23:29',
                'updated_at' => '2025-03-03 23:23:29',
            ),
            2 => 
            array (
                'id' => 1581,
                'amount' => '2060.00',
                'itemable_id' => 1499,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1252,
                'created_at' => '2025-03-03 23:23:29',
                'updated_at' => '2025-03-03 23:23:29',
            ),
            3 => 
            array (
                'id' => 1582,
                'amount' => '3100.00',
                'itemable_id' => 1498,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1252,
                'created_at' => '2025-03-03 23:23:29',
                'updated_at' => '2025-03-03 23:23:29',
            ),
            4 => 
            array (
                'id' => 1583,
                'amount' => '3100.00',
                'itemable_id' => 1497,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1252,
                'created_at' => '2025-03-03 23:23:29',
                'updated_at' => '2025-03-03 23:23:29',
            ),
            5 => 
            array (
                'id' => 1584,
                'amount' => '4500.00',
                'itemable_id' => 1491,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1253,
                'created_at' => '2025-03-04 16:29:55',
                'updated_at' => '2025-03-04 16:29:55',
            ),
            6 => 
            array (
                'id' => 1585,
                'amount' => '7220.00',
                'itemable_id' => 1488,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1254,
                'created_at' => '2025-03-04 18:59:00',
                'updated_at' => '2025-03-04 18:59:00',
            ),
            7 => 
            array (
                'id' => 1586,
                'amount' => '3500.00',
                'itemable_id' => 1505,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1255,
                'created_at' => '2025-03-04 21:54:41',
                'updated_at' => '2025-03-04 21:54:41',
            ),
            8 => 
            array (
                'id' => 1587,
                'amount' => '10500.00',
                'itemable_id' => 1504,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1255,
                'created_at' => '2025-03-04 21:54:41',
                'updated_at' => '2025-03-04 21:54:41',
            ),
            9 => 
            array (
                'id' => 1588,
                'amount' => '2100.00',
                'itemable_id' => 1506,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1256,
                'created_at' => '2025-03-04 22:20:42',
                'updated_at' => '2025-03-04 22:20:42',
            ),
            10 => 
            array (
                'id' => 1589,
                'amount' => '280.00',
                'itemable_id' => 1511,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1257,
                'created_at' => '2025-03-05 19:40:18',
                'updated_at' => '2025-03-05 19:40:18',
            ),
            11 => 
            array (
                'id' => 1590,
                'amount' => '1240.00',
                'itemable_id' => 1509,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1257,
                'created_at' => '2025-03-05 19:40:18',
                'updated_at' => '2025-03-05 19:40:18',
            ),
            12 => 
            array (
                'id' => 1591,
                'amount' => '2500.00',
                'itemable_id' => 1510,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1258,
                'created_at' => '2025-03-05 19:40:44',
                'updated_at' => '2025-03-05 19:40:44',
            ),
            13 => 
            array (
                'id' => 1592,
                'amount' => '1500.00',
                'itemable_id' => 1513,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1259,
                'created_at' => '2025-03-05 19:49:04',
                'updated_at' => '2025-03-05 19:49:04',
            ),
            14 => 
            array (
                'id' => 1593,
                'amount' => '4600.00',
                'itemable_id' => 1515,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1260,
                'created_at' => '2025-03-05 20:15:43',
                'updated_at' => '2025-03-05 20:15:43',
            ),
            15 => 
            array (
                'id' => 1594,
                'amount' => '400.00',
                'itemable_id' => 1514,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1260,
                'created_at' => '2025-03-05 20:15:43',
                'updated_at' => '2025-03-05 20:15:43',
            ),
            16 => 
            array (
                'id' => 1595,
                'amount' => '1000.00',
                'itemable_id' => 1517,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1261,
                'created_at' => '2025-03-05 21:14:46',
                'updated_at' => '2025-03-05 21:14:46',
            ),
            17 => 
            array (
                'id' => 1596,
                'amount' => '500.00',
                'itemable_id' => 1516,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1262,
                'created_at' => '2025-03-05 21:22:11',
                'updated_at' => '2025-03-05 21:22:11',
            ),
            18 => 
            array (
                'id' => 1597,
                'amount' => '3975.00',
                'itemable_id' => 634,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1263,
                'created_at' => '2025-03-05 21:32:30',
                'updated_at' => '2025-03-05 21:32:30',
            ),
            19 => 
            array (
                'id' => 1598,
                'amount' => '9750.00',
                'itemable_id' => 1519,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1264,
                'created_at' => '2025-03-05 22:08:52',
                'updated_at' => '2025-03-05 22:08:52',
            ),
            20 => 
            array (
                'id' => 1599,
                'amount' => '6300.00',
                'itemable_id' => 1518,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1264,
                'created_at' => '2025-03-05 22:08:52',
                'updated_at' => '2025-03-05 22:08:52',
            ),
            21 => 
            array (
                'id' => 1600,
                'amount' => '5050.00',
                'itemable_id' => 1512,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1265,
                'created_at' => '2025-03-05 22:23:46',
                'updated_at' => '2025-03-05 22:23:46',
            ),
            22 => 
            array (
                'id' => 1601,
                'amount' => '5550.00',
                'itemable_id' => 1522,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1266,
                'created_at' => '2025-03-05 23:06:26',
                'updated_at' => '2025-03-05 23:06:26',
            ),
            23 => 
            array (
                'id' => 1602,
                'amount' => '550.00',
                'itemable_id' => 1521,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1266,
                'created_at' => '2025-03-05 23:06:26',
                'updated_at' => '2025-03-05 23:06:26',
            ),
            24 => 
            array (
                'id' => 1603,
                'amount' => '1500.00',
                'itemable_id' => 1527,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1267,
                'created_at' => '2025-03-06 18:10:34',
                'updated_at' => '2025-03-06 18:10:34',
            ),
            25 => 
            array (
                'id' => 1604,
                'amount' => '8400.00',
                'itemable_id' => 1528,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1268,
                'created_at' => '2025-03-07 00:54:39',
                'updated_at' => '2025-03-07 00:54:39',
            ),
            26 => 
            array (
                'id' => 1605,
                'amount' => '6720.00',
                'itemable_id' => 1523,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1268,
                'created_at' => '2025-03-07 00:54:39',
                'updated_at' => '2025-03-07 00:54:39',
            ),
            27 => 
            array (
                'id' => 1606,
                'amount' => '3200.00',
                'itemable_id' => 1529,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1269,
                'created_at' => '2025-03-07 01:05:40',
                'updated_at' => '2025-03-07 01:05:40',
            ),
            28 => 
            array (
                'id' => 1607,
                'amount' => '8400.00',
                'itemable_id' => 1530,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1270,
                'created_at' => '2025-03-07 16:43:10',
                'updated_at' => '2025-03-07 16:43:10',
            ),
            29 => 
            array (
                'id' => 1608,
                'amount' => '1600.00',
                'itemable_id' => 1531,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1271,
                'created_at' => '2025-03-07 18:05:38',
                'updated_at' => '2025-03-07 18:05:38',
            ),
            30 => 
            array (
                'id' => 1609,
                'amount' => '3360.00',
                'itemable_id' => 1532,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1272,
                'created_at' => '2025-03-07 22:33:00',
                'updated_at' => '2025-03-07 22:33:00',
            ),
            31 => 
            array (
                'id' => 1610,
                'amount' => '500.00',
                'itemable_id' => 1533,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1273,
                'created_at' => '2025-03-10 18:06:16',
                'updated_at' => '2025-03-10 18:06:16',
            ),
            32 => 
            array (
                'id' => 1611,
                'amount' => '500.00',
                'itemable_id' => 1537,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1274,
                'created_at' => '2025-03-10 18:06:38',
                'updated_at' => '2025-03-10 18:06:38',
            ),
            33 => 
            array (
                'id' => 1612,
                'amount' => '500.00',
                'itemable_id' => 1534,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1275,
                'created_at' => '2025-03-10 18:06:57',
                'updated_at' => '2025-03-10 18:06:57',
            ),
            34 => 
            array (
                'id' => 1613,
                'amount' => '500.00',
                'itemable_id' => 1535,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1276,
                'created_at' => '2025-03-10 18:07:17',
                'updated_at' => '2025-03-10 18:07:17',
            ),
            35 => 
            array (
                'id' => 1614,
                'amount' => '500.00',
                'itemable_id' => 1536,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1277,
                'created_at' => '2025-03-10 18:07:39',
                'updated_at' => '2025-03-10 18:07:39',
            ),
            36 => 
            array (
                'id' => 1615,
                'amount' => '500.00',
                'itemable_id' => 1538,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1278,
                'created_at' => '2025-03-10 18:08:00',
                'updated_at' => '2025-03-10 18:08:00',
            ),
            37 => 
            array (
                'id' => 1616,
                'amount' => '880.00',
                'itemable_id' => 1539,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1279,
                'created_at' => '2025-03-10 21:30:08',
                'updated_at' => '2025-03-10 21:30:08',
            ),
            38 => 
            array (
                'id' => 1617,
                'amount' => '2440.00',
                'itemable_id' => 1540,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1280,
                'created_at' => '2025-03-10 22:25:07',
                'updated_at' => '2025-03-10 22:25:07',
            ),
            39 => 
            array (
                'id' => 1618,
                'amount' => '2200.00',
                'itemable_id' => 1542,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1281,
                'created_at' => '2025-03-10 22:50:31',
                'updated_at' => '2025-03-10 22:50:31',
            ),
            40 => 
            array (
                'id' => 1619,
                'amount' => '1680.00',
                'itemable_id' => 1541,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1281,
                'created_at' => '2025-03-10 22:50:31',
                'updated_at' => '2025-03-10 22:50:31',
            ),
            41 => 
            array (
                'id' => 1620,
                'amount' => '2500.00',
                'itemable_id' => 1545,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1282,
                'created_at' => '2025-03-10 23:57:54',
                'updated_at' => '2025-03-10 23:57:54',
            ),
            42 => 
            array (
                'id' => 1621,
                'amount' => '4750.00',
                'itemable_id' => 1546,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1283,
                'created_at' => '2025-03-11 20:58:14',
                'updated_at' => '2025-03-11 20:58:14',
            ),
            43 => 
            array (
                'id' => 1622,
                'amount' => '8448.00',
                'itemable_id' => 1549,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1284,
                'created_at' => '2025-03-11 21:05:34',
                'updated_at' => '2025-03-11 21:05:34',
            ),
            44 => 
            array (
                'id' => 1623,
                'amount' => '192.00',
                'itemable_id' => 635,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1285,
                'created_at' => '2025-03-11 21:36:48',
                'updated_at' => '2025-03-11 21:36:48',
            ),
            45 => 
            array (
                'id' => 1624,
                'amount' => '320.00',
                'itemable_id' => 636,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1286,
                'created_at' => '2025-03-11 21:38:23',
                'updated_at' => '2025-03-11 21:38:23',
            ),
            46 => 
            array (
                'id' => 1625,
                'amount' => '29000.00',
                'itemable_id' => 637,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1287,
                'created_at' => '2025-03-11 22:10:04',
                'updated_at' => '2025-03-11 22:10:04',
            ),
            47 => 
            array (
                'id' => 1626,
                'amount' => '2200.00',
                'itemable_id' => 1550,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1288,
                'created_at' => '2025-03-11 22:20:18',
                'updated_at' => '2025-03-11 22:20:18',
            ),
            48 => 
            array (
                'id' => 1627,
                'amount' => '1200.00',
                'itemable_id' => 1548,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1289,
                'created_at' => '2025-03-11 23:37:25',
                'updated_at' => '2025-03-11 23:37:25',
            ),
            49 => 
            array (
                'id' => 1628,
                'amount' => '1200.00',
                'itemable_id' => 1547,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1289,
                'created_at' => '2025-03-11 23:37:25',
                'updated_at' => '2025-03-11 23:37:25',
            ),
            50 => 
            array (
                'id' => 1629,
                'amount' => '28366.67',
                'itemable_id' => 638,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1290,
                'created_at' => '2025-03-12 00:45:44',
                'updated_at' => '2025-03-12 00:45:44',
            ),
            51 => 
            array (
                'id' => 1630,
                'amount' => '2000.00',
                'itemable_id' => 639,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1291,
                'created_at' => '2025-03-12 00:55:50',
                'updated_at' => '2025-03-12 00:55:50',
            ),
            52 => 
            array (
                'id' => 1631,
                'amount' => '2400.00',
                'itemable_id' => 1552,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1292,
                'created_at' => '2025-03-12 17:36:37',
                'updated_at' => '2025-03-12 17:36:37',
            ),
            53 => 
            array (
                'id' => 1632,
                'amount' => '440.00',
                'itemable_id' => 1551,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1292,
                'created_at' => '2025-03-12 17:36:37',
                'updated_at' => '2025-03-12 17:36:37',
            ),
            54 => 
            array (
                'id' => 1633,
                'amount' => '4000.00',
                'itemable_id' => 1553,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1293,
                'created_at' => '2025-03-12 18:38:12',
                'updated_at' => '2025-03-12 18:38:12',
            ),
            55 => 
            array (
                'id' => 1634,
                'amount' => '1500.00',
                'itemable_id' => 1554,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1294,
                'created_at' => '2025-03-12 18:56:15',
                'updated_at' => '2025-03-12 18:56:15',
            ),
            56 => 
            array (
                'id' => 1635,
                'amount' => '2640.00',
                'itemable_id' => 1556,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1295,
                'created_at' => '2025-03-12 20:37:59',
                'updated_at' => '2025-03-12 20:37:59',
            ),
            57 => 
            array (
                'id' => 1636,
                'amount' => '9000.00',
                'itemable_id' => 1555,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1295,
                'created_at' => '2025-03-12 20:37:59',
                'updated_at' => '2025-03-12 20:37:59',
            ),
            58 => 
            array (
                'id' => 1637,
                'amount' => '1550.00',
                'itemable_id' => 1561,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1296,
                'created_at' => '2025-03-12 21:02:28',
                'updated_at' => '2025-03-12 21:02:28',
            ),
            59 => 
            array (
                'id' => 1638,
                'amount' => '2930.00',
                'itemable_id' => 1560,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1296,
                'created_at' => '2025-03-12 21:02:28',
                'updated_at' => '2025-03-12 21:02:28',
            ),
            60 => 
            array (
                'id' => 1639,
                'amount' => '19250.00',
                'itemable_id' => 1559,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1296,
                'created_at' => '2025-03-12 21:02:28',
                'updated_at' => '2025-03-12 21:02:28',
            ),
            61 => 
            array (
                'id' => 1640,
                'amount' => '9900.00',
                'itemable_id' => 1558,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1296,
                'created_at' => '2025-03-12 21:02:28',
                'updated_at' => '2025-03-12 21:02:28',
            ),
            62 => 
            array (
                'id' => 1641,
                'amount' => '5100.00',
                'itemable_id' => 1557,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1296,
                'created_at' => '2025-03-12 21:02:28',
                'updated_at' => '2025-03-12 21:02:28',
            ),
            63 => 
            array (
                'id' => 1642,
                'amount' => '260.00',
                'itemable_id' => 1562,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1297,
                'created_at' => '2025-03-13 00:21:26',
                'updated_at' => '2025-03-13 00:21:26',
            ),
            64 => 
            array (
                'id' => 1643,
                'amount' => '2750.00',
                'itemable_id' => 1563,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1298,
                'created_at' => '2025-03-13 17:45:48',
                'updated_at' => '2025-03-13 17:45:48',
            ),
            65 => 
            array (
                'id' => 1644,
                'amount' => '3500.00',
                'itemable_id' => 1567,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1299,
                'created_at' => '2025-03-13 21:22:34',
                'updated_at' => '2025-03-13 21:22:34',
            ),
            66 => 
            array (
                'id' => 1645,
                'amount' => '800.00',
                'itemable_id' => 1568,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1300,
                'created_at' => '2025-03-13 21:29:46',
                'updated_at' => '2025-03-13 21:29:46',
            ),
            67 => 
            array (
                'id' => 1646,
                'amount' => '800.00',
                'itemable_id' => 1569,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1301,
                'created_at' => '2025-03-14 00:02:41',
                'updated_at' => '2025-03-14 00:02:41',
            ),
            68 => 
            array (
                'id' => 1647,
                'amount' => '1080.00',
                'itemable_id' => 1570,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1302,
                'created_at' => '2025-03-14 18:28:45',
                'updated_at' => '2025-03-14 18:28:45',
            ),
            69 => 
            array (
                'id' => 1648,
                'amount' => '1000.00',
                'itemable_id' => 1571,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1303,
                'created_at' => '2025-03-14 18:50:19',
                'updated_at' => '2025-03-14 18:50:19',
            ),
            70 => 
            array (
                'id' => 1649,
                'amount' => '2200.00',
                'itemable_id' => 1574,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1304,
                'created_at' => '2025-03-17 17:26:04',
                'updated_at' => '2025-03-17 17:26:04',
            ),
            71 => 
            array (
                'id' => 1650,
                'amount' => '700.00',
                'itemable_id' => 1575,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1305,
                'created_at' => '2025-03-17 17:42:47',
                'updated_at' => '2025-03-17 17:42:47',
            ),
            72 => 
            array (
                'id' => 1651,
                'amount' => '1550.00',
                'itemable_id' => 1576,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1306,
                'created_at' => '2025-03-17 18:05:02',
                'updated_at' => '2025-03-17 18:05:02',
            ),
            73 => 
            array (
                'id' => 1652,
                'amount' => '3250.00',
                'itemable_id' => 1572,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1307,
                'created_at' => '2025-03-17 18:56:06',
                'updated_at' => '2025-03-17 18:56:06',
            ),
            74 => 
            array (
                'id' => 1653,
                'amount' => '3488.00',
                'itemable_id' => 1577,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1308,
                'created_at' => '2025-03-17 23:24:38',
                'updated_at' => '2025-03-17 23:24:38',
            ),
            75 => 
            array (
                'id' => 1654,
                'amount' => '1550.00',
                'itemable_id' => 1578,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1309,
                'created_at' => '2025-03-18 16:54:23',
                'updated_at' => '2025-03-18 16:54:23',
            ),
            76 => 
            array (
                'id' => 1655,
                'amount' => '1550.00',
                'itemable_id' => 1579,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1310,
                'created_at' => '2025-03-18 16:54:39',
                'updated_at' => '2025-03-18 16:54:39',
            ),
            77 => 
            array (
                'id' => 1656,
                'amount' => '3100.00',
                'itemable_id' => 1582,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1311,
                'created_at' => '2025-03-18 18:20:52',
                'updated_at' => '2025-03-18 18:20:52',
            ),
            78 => 
            array (
                'id' => 1657,
                'amount' => '6070.00',
                'itemable_id' => 1583,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1312,
                'created_at' => '2025-03-18 18:21:27',
                'updated_at' => '2025-03-18 18:21:27',
            ),
            79 => 
            array (
                'id' => 1658,
                'amount' => '1500.00',
                'itemable_id' => 1584,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1313,
                'created_at' => '2025-03-18 18:23:18',
                'updated_at' => '2025-03-18 18:23:18',
            ),
            80 => 
            array (
                'id' => 1659,
                'amount' => '375.00',
                'itemable_id' => 1585,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1314,
                'created_at' => '2025-03-18 18:23:46',
                'updated_at' => '2025-03-18 18:23:46',
            ),
            81 => 
            array (
                'id' => 1660,
                'amount' => '1650.00',
                'itemable_id' => 1586,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1315,
                'created_at' => '2025-03-18 18:31:45',
                'updated_at' => '2025-03-18 18:31:45',
            ),
            82 => 
            array (
                'id' => 1661,
                'amount' => '7950.00',
                'itemable_id' => 1588,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1316,
                'created_at' => '2025-03-18 20:27:30',
                'updated_at' => '2025-03-18 20:27:30',
            ),
            83 => 
            array (
                'id' => 1662,
                'amount' => '7950.00',
                'itemable_id' => 1587,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1316,
                'created_at' => '2025-03-18 20:27:30',
                'updated_at' => '2025-03-18 20:27:30',
            ),
            84 => 
            array (
                'id' => 1663,
                'amount' => '550.00',
                'itemable_id' => 1589,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1317,
                'created_at' => '2025-03-18 21:50:56',
                'updated_at' => '2025-03-18 21:50:56',
            ),
            85 => 
            array (
                'id' => 1664,
                'amount' => '1000.00',
                'itemable_id' => 1591,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1318,
                'created_at' => '2025-03-19 16:41:30',
                'updated_at' => '2025-03-19 16:41:30',
            ),
            86 => 
            array (
                'id' => 1665,
                'amount' => '720.00',
                'itemable_id' => 1594,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1319,
                'created_at' => '2025-03-19 21:42:19',
                'updated_at' => '2025-03-19 21:42:19',
            ),
            87 => 
            array (
                'id' => 1666,
                'amount' => '1500.00',
                'itemable_id' => 1595,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1320,
                'created_at' => '2025-03-19 21:56:41',
                'updated_at' => '2025-03-19 21:56:41',
            ),
            88 => 
            array (
                'id' => 1667,
                'amount' => '900.00',
                'itemable_id' => 1599,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1321,
                'created_at' => '2025-03-20 18:37:22',
                'updated_at' => '2025-03-20 18:37:22',
            ),
            89 => 
            array (
                'id' => 1668,
                'amount' => '11000.00',
                'itemable_id' => 1600,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1322,
                'created_at' => '2025-03-20 18:54:14',
                'updated_at' => '2025-03-20 18:54:14',
            ),
            90 => 
            array (
                'id' => 1669,
                'amount' => '1280.00',
                'itemable_id' => 1601,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1323,
                'created_at' => '2025-03-20 19:28:24',
                'updated_at' => '2025-03-20 19:28:24',
            ),
            91 => 
            array (
                'id' => 1670,
                'amount' => '350.00',
                'itemable_id' => 1602,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1324,
                'created_at' => '2025-03-20 21:13:29',
                'updated_at' => '2025-03-20 21:13:29',
            ),
            92 => 
            array (
                'id' => 1671,
                'amount' => '350.00',
                'itemable_id' => 1603,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1325,
                'created_at' => '2025-03-20 21:13:51',
                'updated_at' => '2025-03-20 21:13:51',
            ),
            93 => 
            array (
                'id' => 1672,
                'amount' => '30150.00',
                'itemable_id' => 640,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1326,
                'created_at' => '2025-03-20 23:06:35',
                'updated_at' => '2025-03-20 23:06:35',
            ),
            94 => 
            array (
                'id' => 1673,
                'amount' => '400.00',
                'itemable_id' => 1604,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1327,
                'created_at' => '2025-03-20 23:10:30',
                'updated_at' => '2025-03-20 23:10:30',
            ),
            95 => 
            array (
                'id' => 1674,
                'amount' => '400.00',
                'itemable_id' => 1605,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1328,
                'created_at' => '2025-03-21 20:03:39',
                'updated_at' => '2025-03-21 20:03:39',
            ),
            96 => 
            array (
                'id' => 1675,
                'amount' => '1000.00',
                'itemable_id' => 1607,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1329,
                'created_at' => '2025-03-24 17:30:45',
                'updated_at' => '2025-03-24 17:30:45',
            ),
            97 => 
            array (
                'id' => 1676,
                'amount' => '1500.00',
                'itemable_id' => 1608,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1330,
                'created_at' => '2025-03-24 18:10:04',
                'updated_at' => '2025-03-24 18:10:04',
            ),
            98 => 
            array (
                'id' => 1677,
                'amount' => '22000.00',
                'itemable_id' => 1609,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1331,
                'created_at' => '2025-03-24 19:14:55',
                'updated_at' => '2025-03-24 19:14:55',
            ),
            99 => 
            array (
                'id' => 1678,
                'amount' => '3840.00',
                'itemable_id' => 1610,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1332,
                'created_at' => '2025-03-24 19:30:00',
                'updated_at' => '2025-03-24 19:30:00',
            ),
            100 => 
            array (
                'id' => 1679,
                'amount' => '3500.00',
                'itemable_id' => 1260,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1333,
                'created_at' => '2025-03-24 22:25:48',
                'updated_at' => '2025-03-24 22:25:48',
            ),
            101 => 
            array (
                'id' => 1680,
                'amount' => '1568.00',
                'itemable_id' => 1611,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1334,
                'created_at' => '2025-03-24 23:32:18',
                'updated_at' => '2025-03-24 23:32:18',
            ),
            102 => 
            array (
                'id' => 1681,
                'amount' => '1550.00',
                'itemable_id' => 1633,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1335,
                'created_at' => '2025-03-25 18:47:53',
                'updated_at' => '2025-03-25 18:47:53',
            ),
            103 => 
            array (
                'id' => 1682,
                'amount' => '7300.00',
                'itemable_id' => 1634,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1336,
                'created_at' => '2025-03-25 22:10:11',
                'updated_at' => '2025-03-25 22:10:11',
            ),
            104 => 
            array (
                'id' => 1683,
                'amount' => '4000.00',
                'itemable_id' => 1637,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1337,
                'created_at' => '2025-03-26 17:25:22',
                'updated_at' => '2025-03-26 17:25:22',
            ),
            105 => 
            array (
                'id' => 1684,
                'amount' => '164668.00',
                'itemable_id' => 641,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1338,
                'created_at' => '2025-03-26 17:34:24',
                'updated_at' => '2025-03-26 17:34:24',
            ),
            106 => 
            array (
                'id' => 1685,
                'amount' => '247002.00',
                'itemable_id' => 642,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1338,
                'created_at' => '2025-03-26 17:34:24',
                'updated_at' => '2025-03-26 17:34:24',
            ),
            107 => 
            array (
                'id' => 1686,
                'amount' => '78330.00',
                'itemable_id' => 643,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1338,
                'created_at' => '2025-03-26 17:34:24',
                'updated_at' => '2025-03-26 17:34:24',
            ),
            108 => 
            array (
                'id' => 1687,
                'amount' => '2500.00',
                'itemable_id' => 1639,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1339,
                'created_at' => '2025-03-26 17:40:26',
                'updated_at' => '2025-03-26 17:40:26',
            ),
            109 => 
            array (
                'id' => 1688,
                'amount' => '11400.00',
                'itemable_id' => 1640,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1340,
                'created_at' => '2025-03-26 17:57:24',
                'updated_at' => '2025-03-26 17:57:24',
            ),
            110 => 
            array (
                'id' => 1689,
                'amount' => '880.00',
                'itemable_id' => 1638,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1341,
                'created_at' => '2025-03-26 18:01:56',
                'updated_at' => '2025-03-26 18:01:56',
            ),
            111 => 
            array (
                'id' => 1690,
                'amount' => '36750.00',
                'itemable_id' => 1573,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1342,
                'created_at' => '2025-03-26 18:19:56',
                'updated_at' => '2025-03-26 18:19:56',
            ),
            112 => 
            array (
                'id' => 1691,
                'amount' => '2500.00',
                'itemable_id' => 1643,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1343,
                'created_at' => '2025-03-26 18:44:36',
                'updated_at' => '2025-03-26 18:44:36',
            ),
            113 => 
            array (
                'id' => 1692,
                'amount' => '4880.00',
                'itemable_id' => 1642,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1344,
                'created_at' => '2025-03-26 18:46:51',
                'updated_at' => '2025-03-26 18:46:51',
            ),
            114 => 
            array (
                'id' => 1693,
                'amount' => '880.00',
                'itemable_id' => 1641,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1344,
                'created_at' => '2025-03-26 18:46:51',
                'updated_at' => '2025-03-26 18:46:51',
            ),
            115 => 
            array (
                'id' => 1694,
                'amount' => '550.00',
                'itemable_id' => 1644,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1345,
                'created_at' => '2025-03-26 18:56:18',
                'updated_at' => '2025-03-26 18:56:18',
            ),
            116 => 
            array (
                'id' => 1695,
                'amount' => '1550.00',
                'itemable_id' => 1645,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1346,
                'created_at' => '2025-03-26 19:01:25',
                'updated_at' => '2025-03-26 19:01:25',
            ),
            117 => 
            array (
                'id' => 1696,
                'amount' => '400.00',
                'itemable_id' => 1648,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1347,
                'created_at' => '2025-03-26 19:39:36',
                'updated_at' => '2025-03-26 19:39:36',
            ),
            118 => 
            array (
                'id' => 1697,
                'amount' => '1536.00',
                'itemable_id' => 1650,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1348,
                'created_at' => '2025-03-26 20:28:08',
                'updated_at' => '2025-03-26 20:28:08',
            ),
            119 => 
            array (
                'id' => 1698,
                'amount' => '1536.00',
                'itemable_id' => 1649,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1349,
                'created_at' => '2025-03-26 20:29:15',
                'updated_at' => '2025-03-26 20:29:15',
            ),
            120 => 
            array (
                'id' => 1699,
                'amount' => '6000.00',
                'itemable_id' => 1647,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1350,
                'created_at' => '2025-03-26 21:09:05',
                'updated_at' => '2025-03-26 21:09:05',
            ),
            121 => 
            array (
                'id' => 1700,
                'amount' => '9940.00',
                'itemable_id' => 1653,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1351,
                'created_at' => '2025-03-26 21:43:18',
                'updated_at' => '2025-03-26 21:43:18',
            ),
            122 => 
            array (
                'id' => 1701,
                'amount' => '12900.00',
                'itemable_id' => 1652,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1351,
                'created_at' => '2025-03-26 21:43:18',
                'updated_at' => '2025-03-26 21:43:18',
            ),
            123 => 
            array (
                'id' => 1702,
                'amount' => '2100.00',
                'itemable_id' => 1651,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1352,
                'created_at' => '2025-03-26 21:43:41',
                'updated_at' => '2025-03-26 21:43:41',
            ),
            124 => 
            array (
                'id' => 1703,
                'amount' => '4880.00',
                'itemable_id' => 1655,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1353,
                'created_at' => '2025-03-26 22:38:49',
                'updated_at' => '2025-03-26 22:38:49',
            ),
            125 => 
            array (
                'id' => 1704,
                'amount' => '880.00',
                'itemable_id' => 1654,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1353,
                'created_at' => '2025-03-26 22:38:49',
                'updated_at' => '2025-03-26 22:38:49',
            ),
            126 => 
            array (
                'id' => 1705,
                'amount' => '43888.89',
                'itemable_id' => 644,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1354,
                'created_at' => '2025-03-26 22:52:42',
                'updated_at' => '2025-03-26 22:52:42',
            ),
            127 => 
            array (
                'id' => 1706,
                'amount' => '3520.00',
                'itemable_id' => 1581,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1355,
                'created_at' => '2025-03-26 23:02:31',
                'updated_at' => '2025-03-26 23:02:31',
            ),
            128 => 
            array (
                'id' => 1707,
                'amount' => '3520.00',
                'itemable_id' => 1580,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1355,
                'created_at' => '2025-03-26 23:02:31',
                'updated_at' => '2025-03-26 23:02:31',
            ),
            129 => 
            array (
                'id' => 1708,
                'amount' => '6720.00',
                'itemable_id' => 1656,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1356,
                'created_at' => '2025-03-27 00:18:55',
                'updated_at' => '2025-03-27 00:18:55',
            ),
            130 => 
            array (
                'id' => 1709,
                'amount' => '82778.00',
                'itemable_id' => 645,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1357,
                'created_at' => '2025-03-27 00:28:26',
                'updated_at' => '2025-03-27 00:28:26',
            ),
            131 => 
            array (
                'id' => 1710,
                'amount' => '78270.10',
                'itemable_id' => 646,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1358,
                'created_at' => '2025-03-27 00:30:13',
                'updated_at' => '2025-03-27 00:30:13',
            ),
            132 => 
            array (
                'id' => 1711,
                'amount' => '41666.67',
                'itemable_id' => 647,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1359,
                'created_at' => '2025-03-27 00:32:28',
                'updated_at' => '2025-03-27 00:32:28',
            ),
            133 => 
            array (
                'id' => 1712,
                'amount' => '15089.00',
                'itemable_id' => 648,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1360,
                'created_at' => '2025-03-27 00:34:04',
                'updated_at' => '2025-03-27 00:34:04',
            ),
            134 => 
            array (
                'id' => 1713,
                'amount' => '13423.00',
                'itemable_id' => 649,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1361,
                'created_at' => '2025-03-27 00:35:26',
                'updated_at' => '2025-03-27 00:35:26',
            ),
            135 => 
            array (
                'id' => 1714,
                'amount' => '45833.33',
                'itemable_id' => 650,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1362,
                'created_at' => '2025-03-27 00:36:49',
                'updated_at' => '2025-03-27 00:36:49',
            ),
            136 => 
            array (
                'id' => 1715,
                'amount' => '16080.00',
                'itemable_id' => 651,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1363,
                'created_at' => '2025-03-27 00:38:47',
                'updated_at' => '2025-03-27 00:38:47',
            ),
            137 => 
            array (
                'id' => 1716,
                'amount' => '7139.00',
                'itemable_id' => 652,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1364,
                'created_at' => '2025-03-27 00:40:22',
                'updated_at' => '2025-03-27 00:40:22',
            ),
            138 => 
            array (
                'id' => 1717,
                'amount' => '26445.00',
                'itemable_id' => 653,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1365,
                'created_at' => '2025-03-27 00:41:47',
                'updated_at' => '2025-03-27 00:41:47',
            ),
            139 => 
            array (
                'id' => 1718,
                'amount' => '10329.00',
                'itemable_id' => 654,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1366,
                'created_at' => '2025-03-27 00:43:02',
                'updated_at' => '2025-03-27 00:43:02',
            ),
            140 => 
            array (
                'id' => 1719,
                'amount' => '46291.66',
                'itemable_id' => 655,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1367,
                'created_at' => '2025-03-27 00:44:20',
                'updated_at' => '2025-03-27 00:44:20',
            ),
            141 => 
            array (
                'id' => 1721,
                'amount' => '14390.00',
                'itemable_id' => 657,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1369,
                'created_at' => '2025-03-27 00:48:48',
                'updated_at' => '2025-03-27 00:48:48',
            ),
            142 => 
            array (
                'id' => 1722,
                'amount' => '16695.00',
                'itemable_id' => 658,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1370,
                'created_at' => '2025-03-27 00:55:29',
                'updated_at' => '2025-03-27 00:55:29',
            ),
            143 => 
            array (
                'id' => 1723,
                'amount' => '21389.00',
                'itemable_id' => 659,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1371,
                'created_at' => '2025-03-27 00:56:39',
                'updated_at' => '2025-03-27 00:56:39',
            ),
            144 => 
            array (
                'id' => 1724,
                'amount' => '47445.00',
                'itemable_id' => 660,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1372,
                'created_at' => '2025-03-27 00:58:16',
                'updated_at' => '2025-03-27 00:58:16',
            ),
            145 => 
            array (
                'id' => 1725,
                'amount' => '16116.00',
                'itemable_id' => 661,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1373,
                'created_at' => '2025-03-27 00:59:14',
                'updated_at' => '2025-03-27 00:59:14',
            ),
            146 => 
            array (
                'id' => 1726,
                'amount' => '30834.00',
                'itemable_id' => 662,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1374,
                'created_at' => '2025-03-27 01:00:31',
                'updated_at' => '2025-03-27 01:00:31',
            ),
            147 => 
            array (
                'id' => 1727,
                'amount' => '42778.00',
                'itemable_id' => 663,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1375,
                'created_at' => '2025-03-27 01:01:46',
                'updated_at' => '2025-03-27 01:01:46',
            ),
            148 => 
            array (
                'id' => 1728,
                'amount' => '44166.00',
                'itemable_id' => 664,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1376,
                'created_at' => '2025-03-27 01:04:09',
                'updated_at' => '2025-03-27 01:04:09',
            ),
            149 => 
            array (
                'id' => 1729,
                'amount' => '7083.33',
                'itemable_id' => 665,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1377,
                'created_at' => '2025-03-27 01:05:24',
                'updated_at' => '2025-03-27 01:05:24',
            ),
            150 => 
            array (
                'id' => 1730,
                'amount' => '42500.00',
                'itemable_id' => 666,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1378,
                'created_at' => '2025-03-27 01:08:11',
                'updated_at' => '2025-03-27 01:08:11',
            ),
            151 => 
            array (
                'id' => 1731,
                'amount' => '42500.00',
                'itemable_id' => 667,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1378,
                'created_at' => '2025-03-27 01:08:11',
                'updated_at' => '2025-03-27 01:08:11',
            ),
            152 => 
            array (
                'id' => 1732,
                'amount' => '45277.77',
                'itemable_id' => 668,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1379,
                'created_at' => '2025-03-27 01:09:56',
                'updated_at' => '2025-03-27 01:09:56',
            ),
            153 => 
            array (
                'id' => 1733,
                'amount' => '15000.00',
                'itemable_id' => 669,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1380,
                'created_at' => '2025-03-27 01:12:18',
                'updated_at' => '2025-03-27 01:12:18',
            ),
            154 => 
            array (
                'id' => 1734,
                'amount' => '51250.00',
                'itemable_id' => 670,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1380,
                'created_at' => '2025-03-27 01:12:18',
                'updated_at' => '2025-03-27 01:12:18',
            ),
            155 => 
            array (
                'id' => 1735,
                'amount' => '33750.00',
                'itemable_id' => 671,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1380,
                'created_at' => '2025-03-27 01:12:18',
                'updated_at' => '2025-03-27 01:12:18',
            ),
            156 => 
            array (
                'id' => 1736,
                'amount' => '200000.00',
                'itemable_id' => 672,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1381,
                'created_at' => '2025-03-27 01:14:39',
                'updated_at' => '2025-03-27 01:14:39',
            ),
            157 => 
            array (
                'id' => 1737,
                'amount' => '41667.00',
                'itemable_id' => 673,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1382,
                'created_at' => '2025-03-27 01:15:45',
                'updated_at' => '2025-03-27 01:15:45',
            ),
            158 => 
            array (
                'id' => 1738,
                'amount' => '61112.00',
                'itemable_id' => 674,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1383,
                'created_at' => '2025-03-27 01:17:08',
                'updated_at' => '2025-03-27 01:17:08',
            ),
            159 => 
            array (
                'id' => 1739,
                'amount' => '13056.00',
                'itemable_id' => 675,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1384,
                'created_at' => '2025-03-27 01:18:46',
                'updated_at' => '2025-03-27 01:18:46',
            ),
            160 => 
            array (
                'id' => 1740,
                'amount' => '35833.33',
                'itemable_id' => 676,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1385,
                'created_at' => '2025-03-27 01:22:19',
                'updated_at' => '2025-03-27 01:22:19',
            ),
            161 => 
            array (
                'id' => 1741,
                'amount' => '21654.00',
                'itemable_id' => 677,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1386,
                'created_at' => '2025-03-27 01:23:47',
                'updated_at' => '2025-03-27 01:23:47',
            ),
            162 => 
            array (
                'id' => 1742,
                'amount' => '43750.00',
                'itemable_id' => 678,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1387,
                'created_at' => '2025-03-27 01:26:18',
                'updated_at' => '2025-03-27 01:26:18',
            ),
            163 => 
            array (
                'id' => 1743,
                'amount' => '33334.00',
                'itemable_id' => 679,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1388,
                'created_at' => '2025-03-27 01:28:54',
                'updated_at' => '2025-03-27 01:28:54',
            ),
            164 => 
            array (
                'id' => 1744,
                'amount' => '33334.00',
                'itemable_id' => 680,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1388,
                'created_at' => '2025-03-27 01:28:54',
                'updated_at' => '2025-03-27 01:28:54',
            ),
            165 => 
            array (
                'id' => 1745,
                'amount' => '43333.33',
                'itemable_id' => 681,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1389,
                'created_at' => '2025-03-27 01:31:04',
                'updated_at' => '2025-03-27 01:31:04',
            ),
            166 => 
            array (
                'id' => 1746,
                'amount' => '35834.00',
                'itemable_id' => 682,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1390,
                'created_at' => '2025-03-27 01:34:28',
                'updated_at' => '2025-03-27 01:34:28',
            ),
            167 => 
            array (
                'id' => 1747,
                'amount' => '30000.00',
                'itemable_id' => 683,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1391,
                'created_at' => '2025-03-27 01:36:31',
                'updated_at' => '2025-03-27 01:36:31',
            ),
            168 => 
            array (
                'id' => 1748,
                'amount' => '83277.78',
                'itemable_id' => 684,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1392,
                'created_at' => '2025-03-27 01:38:22',
                'updated_at' => '2025-03-27 01:38:22',
            ),
            169 => 
            array (
                'id' => 1749,
                'amount' => '38333.00',
                'itemable_id' => 685,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1393,
                'created_at' => '2025-03-27 01:40:24',
                'updated_at' => '2025-03-27 01:40:24',
            ),
            170 => 
            array (
                'id' => 1750,
                'amount' => '38333.00',
                'itemable_id' => 686,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1393,
                'created_at' => '2025-03-27 01:40:24',
                'updated_at' => '2025-03-27 01:40:24',
            ),
            171 => 
            array (
                'id' => 1751,
                'amount' => '10721.80',
                'itemable_id' => 687,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1394,
                'created_at' => '2025-03-27 01:42:23',
                'updated_at' => '2025-03-27 01:42:23',
            ),
            172 => 
            array (
                'id' => 1752,
                'amount' => '2810.00',
                'itemable_id' => 688,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1395,
                'created_at' => '2025-03-27 01:43:46',
                'updated_at' => '2025-03-27 01:43:46',
            ),
            173 => 
            array (
                'id' => 1753,
                'amount' => '38333.00',
                'itemable_id' => 689,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1396,
                'created_at' => '2025-03-27 01:45:21',
                'updated_at' => '2025-03-27 01:45:21',
            ),
            174 => 
            array (
                'id' => 1754,
                'amount' => '39167.00',
                'itemable_id' => 690,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1397,
                'created_at' => '2025-03-27 01:46:30',
                'updated_at' => '2025-03-27 01:46:30',
            ),
            175 => 
            array (
                'id' => 1755,
                'amount' => '79689.00',
                'itemable_id' => 691,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1398,
                'created_at' => '2025-03-27 01:48:17',
                'updated_at' => '2025-03-27 01:48:17',
            ),
            176 => 
            array (
                'id' => 1756,
                'amount' => '75000.00',
                'itemable_id' => 692,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1399,
                'created_at' => '2025-03-27 01:49:25',
                'updated_at' => '2025-03-27 01:49:25',
            ),
            177 => 
            array (
                'id' => 1757,
                'amount' => '74750.00',
                'itemable_id' => 693,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1400,
                'created_at' => '2025-03-27 01:51:15',
                'updated_at' => '2025-03-27 01:51:15',
            ),
            178 => 
            array (
                'id' => 1758,
                'amount' => '17667.67',
                'itemable_id' => 694,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1401,
                'created_at' => '2025-03-27 01:52:15',
                'updated_at' => '2025-03-27 01:52:15',
            ),
            179 => 
            array (
                'id' => 1759,
                'amount' => '18334.00',
                'itemable_id' => 695,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1402,
                'created_at' => '2025-03-27 01:53:47',
                'updated_at' => '2025-03-27 01:53:47',
            ),
            180 => 
            array (
                'id' => 1760,
                'amount' => '31527.00',
                'itemable_id' => 696,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1403,
                'created_at' => '2025-03-27 01:55:04',
                'updated_at' => '2025-03-27 01:55:04',
            ),
            181 => 
            array (
                'id' => 1761,
                'amount' => '83334.00',
                'itemable_id' => 697,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1404,
                'created_at' => '2025-03-27 01:56:07',
                'updated_at' => '2025-03-27 01:56:07',
            ),
            182 => 
            array (
                'id' => 1762,
                'amount' => '27381.67',
                'itemable_id' => 698,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1405,
                'created_at' => '2025-03-27 01:57:11',
                'updated_at' => '2025-03-27 01:57:11',
            ),
            183 => 
            array (
                'id' => 1763,
                'amount' => '21667.00',
                'itemable_id' => 699,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1406,
                'created_at' => '2025-03-27 01:58:40',
                'updated_at' => '2025-03-27 01:58:40',
            ),
            184 => 
            array (
                'id' => 1764,
                'amount' => '33195.00',
                'itemable_id' => 700,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1407,
                'created_at' => '2025-03-27 02:01:29',
                'updated_at' => '2025-03-27 02:01:29',
            ),
            185 => 
            array (
                'id' => 1765,
                'amount' => '11020.14',
                'itemable_id' => 701,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1408,
                'created_at' => '2025-03-27 02:03:38',
                'updated_at' => '2025-03-27 02:03:38',
            ),
            186 => 
            array (
                'id' => 1766,
                'amount' => '69445.00',
                'itemable_id' => 702,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1409,
                'created_at' => '2025-03-27 02:04:45',
                'updated_at' => '2025-03-27 02:04:45',
            ),
            187 => 
            array (
                'id' => 1767,
                'amount' => '34306.00',
                'itemable_id' => 703,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1410,
                'created_at' => '2025-03-27 02:07:47',
                'updated_at' => '2025-03-27 02:07:47',
            ),
            188 => 
            array (
                'id' => 1768,
                'amount' => '21667.00',
                'itemable_id' => 704,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1411,
                'created_at' => '2025-03-27 02:09:15',
                'updated_at' => '2025-03-27 02:09:15',
            ),
            189 => 
            array (
                'id' => 1769,
                'amount' => '150000.00',
                'itemable_id' => 705,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1412,
                'created_at' => '2025-03-27 02:11:11',
                'updated_at' => '2025-03-27 02:11:11',
            ),
            190 => 
            array (
                'id' => 1770,
                'amount' => '94167.00',
                'itemable_id' => 706,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1413,
                'created_at' => '2025-03-27 02:12:39',
                'updated_at' => '2025-03-27 02:12:39',
            ),
            191 => 
            array (
                'id' => 1771,
                'amount' => '90000.00',
                'itemable_id' => 707,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1414,
                'created_at' => '2025-03-27 02:14:37',
                'updated_at' => '2025-03-27 02:14:37',
            ),
            192 => 
            array (
                'id' => 1772,
                'amount' => '11600.00',
                'itemable_id' => 1657,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1415,
                'created_at' => '2025-03-27 17:43:54',
                'updated_at' => '2025-03-27 17:43:54',
            ),
            193 => 
            array (
                'id' => 1773,
                'amount' => '1550.00',
                'itemable_id' => 1664,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1416,
                'created_at' => '2025-03-27 19:36:43',
                'updated_at' => '2025-03-27 19:36:43',
            ),
            194 => 
            array (
                'id' => 1774,
                'amount' => '1550.00',
                'itemable_id' => 1663,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1417,
                'created_at' => '2025-03-27 19:37:03',
                'updated_at' => '2025-03-27 19:37:03',
            ),
            195 => 
            array (
                'id' => 1775,
                'amount' => '1550.00',
                'itemable_id' => 1662,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1418,
                'created_at' => '2025-03-27 19:37:55',
                'updated_at' => '2025-03-27 19:37:55',
            ),
            196 => 
            array (
                'id' => 1776,
                'amount' => '1550.00',
                'itemable_id' => 1661,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1419,
                'created_at' => '2025-03-27 19:38:30',
                'updated_at' => '2025-03-27 19:38:30',
            ),
            197 => 
            array (
                'id' => 1777,
                'amount' => '1550.00',
                'itemable_id' => 1665,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1420,
                'created_at' => '2025-03-27 19:39:03',
                'updated_at' => '2025-03-27 19:39:03',
            ),
            198 => 
            array (
                'id' => 1778,
                'amount' => '1100.00',
                'itemable_id' => 1666,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1421,
                'created_at' => '2025-03-27 19:50:41',
                'updated_at' => '2025-03-27 19:50:41',
            ),
            199 => 
            array (
                'id' => 1779,
                'amount' => '5820.00',
                'itemable_id' => 1667,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1422,
                'created_at' => '2025-03-27 19:58:04',
                'updated_at' => '2025-03-27 19:58:04',
            ),
            200 => 
            array (
                'id' => 1780,
                'amount' => '34735.00',
                'itemable_id' => 708,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1423,
                'created_at' => '2025-03-27 22:53:14',
                'updated_at' => '2025-03-27 22:53:14',
            ),
            201 => 
            array (
                'id' => 1781,
                'amount' => '3720.00',
                'itemable_id' => 1669,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1424,
                'created_at' => '2025-03-28 16:17:39',
                'updated_at' => '2025-03-28 16:17:39',
            ),
            202 => 
            array (
                'id' => 1782,
                'amount' => '15867.00',
                'itemable_id' => 709,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1425,
                'created_at' => '2025-03-28 18:50:58',
                'updated_at' => '2025-03-28 18:50:58',
            ),
            203 => 
            array (
                'id' => 1783,
                'amount' => '5100.00',
                'itemable_id' => 1671,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1426,
                'created_at' => '2025-03-28 18:52:13',
                'updated_at' => '2025-03-28 18:52:13',
            ),
            204 => 
            array (
                'id' => 1784,
                'amount' => '4000.00',
                'itemable_id' => 1670,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1427,
                'created_at' => '2025-03-28 18:52:40',
                'updated_at' => '2025-03-28 18:52:40',
            ),
            205 => 
            array (
                'id' => 1786,
                'amount' => '7320.00',
                'itemable_id' => 1672,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1429,
                'created_at' => '2025-03-28 19:42:43',
                'updated_at' => '2025-03-28 19:42:43',
            ),
            206 => 
            array (
                'id' => 1787,
                'amount' => '1650.00',
                'itemable_id' => 1674,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1430,
                'created_at' => '2025-03-31 17:03:24',
                'updated_at' => '2025-03-31 17:03:24',
            ),
            207 => 
            array (
                'id' => 1790,
                'amount' => '74000.00',
                'itemable_id' => 712,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1432,
                'created_at' => '2025-03-31 19:57:44',
                'updated_at' => '2025-03-31 19:57:44',
            ),
            208 => 
            array (
                'id' => 1791,
                'amount' => '5503.00',
                'itemable_id' => 713,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1433,
                'created_at' => '2025-03-31 21:15:40',
                'updated_at' => '2025-03-31 21:15:40',
            ),
            209 => 
            array (
                'id' => 1792,
                'amount' => '4497.00',
                'itemable_id' => 714,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1433,
                'created_at' => '2025-03-31 21:15:40',
                'updated_at' => '2025-03-31 21:15:40',
            ),
            210 => 
            array (
                'id' => 1793,
                'amount' => '2480.00',
                'itemable_id' => 1678,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1434,
                'created_at' => '2025-04-02 17:42:53',
                'updated_at' => '2025-04-02 17:42:53',
            ),
            211 => 
            array (
                'id' => 1794,
                'amount' => '12240.00',
                'itemable_id' => 1679,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1435,
                'created_at' => '2025-04-02 18:14:43',
                'updated_at' => '2025-04-02 18:14:43',
            ),
            212 => 
            array (
                'id' => 1795,
                'amount' => '1100.00',
                'itemable_id' => 1682,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1436,
                'created_at' => '2025-04-02 18:56:04',
                'updated_at' => '2025-04-02 18:56:04',
            ),
            213 => 
            array (
                'id' => 1796,
                'amount' => '2640.00',
                'itemable_id' => 1680,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1437,
                'created_at' => '2025-04-02 18:58:34',
                'updated_at' => '2025-04-02 18:58:34',
            ),
            214 => 
            array (
                'id' => 1797,
                'amount' => '11720.00',
                'itemable_id' => 1681,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1438,
                'created_at' => '2025-04-02 19:01:41',
                'updated_at' => '2025-04-02 19:01:41',
            ),
            215 => 
            array (
                'id' => 1798,
                'amount' => '1080.00',
                'itemable_id' => 1683,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1439,
                'created_at' => '2025-04-02 19:27:43',
                'updated_at' => '2025-04-02 19:27:43',
            ),
            216 => 
            array (
                'id' => 1799,
                'amount' => '1536.00',
                'itemable_id' => 1636,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1440,
                'created_at' => '2025-04-02 19:59:23',
                'updated_at' => '2025-04-02 19:59:23',
            ),
            217 => 
            array (
                'id' => 1800,
                'amount' => '1600.00',
                'itemable_id' => 1635,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1440,
                'created_at' => '2025-04-02 19:59:23',
                'updated_at' => '2025-04-02 19:59:23',
            ),
            218 => 
            array (
                'id' => 1801,
                'amount' => '11600.00',
                'itemable_id' => 1686,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1441,
                'created_at' => '2025-04-02 21:11:59',
                'updated_at' => '2025-04-02 21:11:59',
            ),
            219 => 
            array (
                'id' => 1802,
                'amount' => '440.00',
                'itemable_id' => 1687,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1442,
                'created_at' => '2025-04-02 21:21:33',
                'updated_at' => '2025-04-02 21:21:33',
            ),
            220 => 
            array (
                'id' => 1803,
                'amount' => '5600.00',
                'itemable_id' => 1675,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1443,
                'created_at' => '2025-04-02 21:57:48',
                'updated_at' => '2025-04-02 21:57:48',
            ),
            221 => 
            array (
                'id' => 1804,
                'amount' => '550.00',
                'itemable_id' => 1689,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1444,
                'created_at' => '2025-04-02 22:27:28',
                'updated_at' => '2025-04-02 22:27:28',
            ),
            222 => 
            array (
                'id' => 1807,
                'amount' => '440.00',
                'itemable_id' => 1668,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1447,
                'created_at' => '2025-04-02 23:00:47',
                'updated_at' => '2025-04-02 23:00:47',
            ),
            223 => 
            array (
                'id' => 1808,
                'amount' => '5850.00',
                'itemable_id' => 1690,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1448,
                'created_at' => '2025-04-03 00:21:41',
                'updated_at' => '2025-04-03 00:21:41',
            ),
            224 => 
            array (
                'id' => 1809,
                'amount' => '5185.44',
                'itemable_id' => 715,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1449,
                'created_at' => '2025-04-03 02:33:14',
                'updated_at' => '2025-04-03 02:33:14',
            ),
            225 => 
            array (
                'id' => 1810,
                'amount' => '10003.00',
                'itemable_id' => 716,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1450,
                'created_at' => '2025-04-03 02:41:00',
                'updated_at' => '2025-04-03 02:41:00',
            ),
            226 => 
            array (
                'id' => 1811,
                'amount' => '10003.00',
                'itemable_id' => 717,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1450,
                'created_at' => '2025-04-03 02:41:00',
                'updated_at' => '2025-04-03 02:41:00',
            ),
            227 => 
            array (
                'id' => 1812,
                'amount' => '10003.00',
                'itemable_id' => 718,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1450,
                'created_at' => '2025-04-03 02:41:00',
                'updated_at' => '2025-04-03 02:41:00',
            ),
            228 => 
            array (
                'id' => 1813,
                'amount' => '30.00',
                'itemable_id' => 719,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1450,
                'created_at' => '2025-04-03 02:41:00',
                'updated_at' => '2025-04-03 02:41:00',
            ),
            229 => 
            array (
                'id' => 1814,
                'amount' => '1980.00',
                'itemable_id' => 1692,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1451,
                'created_at' => '2025-04-03 17:49:26',
                'updated_at' => '2025-04-03 17:49:26',
            ),
            230 => 
            array (
                'id' => 1815,
                'amount' => '4100.00',
                'itemable_id' => 1695,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1452,
                'created_at' => '2025-04-03 18:32:22',
                'updated_at' => '2025-04-03 18:32:22',
            ),
            231 => 
            array (
                'id' => 1816,
                'amount' => '5550.00',
                'itemable_id' => 1696,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1455,
                'created_at' => '2025-04-03 19:41:23',
                'updated_at' => '2025-04-03 19:41:23',
            ),
            232 => 
            array (
                'id' => 1817,
                'amount' => '400.00',
                'itemable_id' => 1699,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1456,
                'created_at' => '2025-04-03 22:07:20',
                'updated_at' => '2025-04-03 22:07:20',
            ),
            233 => 
            array (
                'id' => 1818,
                'amount' => '10500.00',
                'itemable_id' => 1702,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1457,
                'created_at' => '2025-04-03 23:19:34',
                'updated_at' => '2025-04-03 23:19:34',
            ),
            234 => 
            array (
                'id' => 1819,
                'amount' => '18210.00',
                'itemable_id' => 1701,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1457,
                'created_at' => '2025-04-03 23:19:34',
                'updated_at' => '2025-04-03 23:19:34',
            ),
            235 => 
            array (
                'id' => 1820,
                'amount' => '12140.00',
                'itemable_id' => 1700,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1457,
                'created_at' => '2025-04-03 23:19:34',
                'updated_at' => '2025-04-03 23:19:34',
            ),
            236 => 
            array (
                'id' => 1821,
                'amount' => '12140.00',
                'itemable_id' => 1698,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1457,
                'created_at' => '2025-04-03 23:19:34',
                'updated_at' => '2025-04-03 23:19:34',
            ),
            237 => 
            array (
                'id' => 1822,
                'amount' => '500.00',
                'itemable_id' => 1703,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1458,
                'created_at' => '2025-04-04 00:06:54',
                'updated_at' => '2025-04-04 00:06:54',
            ),
            238 => 
            array (
                'id' => 1823,
                'amount' => '500.00',
                'itemable_id' => 1704,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1459,
                'created_at' => '2025-04-04 00:07:59',
                'updated_at' => '2025-04-04 00:07:59',
            ),
            239 => 
            array (
                'id' => 1824,
                'amount' => '500.00',
                'itemable_id' => 1705,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1460,
                'created_at' => '2025-04-04 00:08:33',
                'updated_at' => '2025-04-04 00:08:33',
            ),
            240 => 
            array (
                'id' => 1825,
                'amount' => '600.00',
                'itemable_id' => 1706,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1461,
                'created_at' => '2025-04-04 18:16:18',
                'updated_at' => '2025-04-04 18:16:18',
            ),
            241 => 
            array (
                'id' => 1826,
                'amount' => '1000.00',
                'itemable_id' => 1707,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1462,
                'created_at' => '2025-04-04 19:00:56',
                'updated_at' => '2025-04-04 19:00:56',
            ),
            242 => 
            array (
                'id' => 1827,
                'amount' => '4050.00',
                'itemable_id' => 1697,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1462,
                'created_at' => '2025-04-04 19:00:56',
                'updated_at' => '2025-04-04 19:00:56',
            ),
            243 => 
            array (
                'id' => 1828,
                'amount' => '1100.00',
                'itemable_id' => 1688,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1462,
                'created_at' => '2025-04-04 19:00:56',
                'updated_at' => '2025-04-04 19:00:56',
            ),
            244 => 
            array (
                'id' => 1829,
                'amount' => '440.00',
                'itemable_id' => 1685,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1463,
                'created_at' => '2025-04-04 19:58:13',
                'updated_at' => '2025-04-04 19:58:13',
            ),
            245 => 
            array (
                'id' => 1830,
                'amount' => '2440.00',
                'itemable_id' => 1684,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1463,
                'created_at' => '2025-04-04 19:58:13',
                'updated_at' => '2025-04-04 19:58:13',
            ),
            246 => 
            array (
                'id' => 1831,
                'amount' => '3360.00',
                'itemable_id' => 1708,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1464,
                'created_at' => '2025-04-04 23:24:17',
                'updated_at' => '2025-04-04 23:24:17',
            ),
            247 => 
            array (
                'id' => 1832,
                'amount' => '520.00',
                'itemable_id' => 1709,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1465,
                'created_at' => '2025-04-05 00:33:25',
                'updated_at' => '2025-04-05 00:33:25',
            ),
            248 => 
            array (
                'id' => 1833,
                'amount' => '80275.72',
                'itemable_id' => 720,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1466,
                'created_at' => '2025-04-07 20:26:07',
                'updated_at' => '2025-04-07 20:26:07',
            ),
            249 => 
            array (
                'id' => 1834,
                'amount' => '14494.68',
                'itemable_id' => 721,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1466,
                'created_at' => '2025-04-07 20:26:07',
                'updated_at' => '2025-04-07 20:26:07',
            ),
            250 => 
            array (
                'id' => 1835,
                'amount' => '2000.00',
                'itemable_id' => 1677,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1467,
                'created_at' => '2025-04-07 22:01:34',
                'updated_at' => '2025-04-07 22:01:34',
            ),
            251 => 
            array (
                'id' => 1836,
                'amount' => '320.00',
                'itemable_id' => 1712,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1468,
                'created_at' => '2025-04-08 00:45:25',
                'updated_at' => '2025-04-08 00:45:25',
            ),
            252 => 
            array (
                'id' => 1837,
                'amount' => '1650.00',
                'itemable_id' => 1713,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1469,
                'created_at' => '2025-04-08 16:24:29',
                'updated_at' => '2025-04-08 16:24:29',
            ),
            253 => 
            array (
                'id' => 1838,
                'amount' => '12240.00',
                'itemable_id' => 1714,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1470,
                'created_at' => '2025-04-08 16:52:58',
                'updated_at' => '2025-04-08 16:52:58',
            ),
            254 => 
            array (
                'id' => 1839,
                'amount' => '3840.00',
                'itemable_id' => 1715,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1471,
                'created_at' => '2025-04-08 17:05:51',
                'updated_at' => '2025-04-08 17:05:51',
            ),
            255 => 
            array (
                'id' => 1840,
                'amount' => '3300.00',
                'itemable_id' => 1716,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1472,
                'created_at' => '2025-04-08 17:19:10',
                'updated_at' => '2025-04-08 17:19:10',
            ),
            256 => 
            array (
                'id' => 1841,
                'amount' => '880.00',
                'itemable_id' => 1717,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1473,
                'created_at' => '2025-04-08 17:38:11',
                'updated_at' => '2025-04-08 17:38:11',
            ),
            257 => 
            array (
                'id' => 1842,
                'amount' => '4680.00',
                'itemable_id' => 1718,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1474,
                'created_at' => '2025-04-08 18:00:01',
                'updated_at' => '2025-04-08 18:00:01',
            ),
            258 => 
            array (
                'id' => 1843,
                'amount' => '1080.00',
                'itemable_id' => 1719,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1475,
                'created_at' => '2025-04-08 18:04:22',
                'updated_at' => '2025-04-08 18:04:22',
            ),
            259 => 
            array (
                'id' => 1844,
                'amount' => '2000.00',
                'itemable_id' => 1721,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1476,
                'created_at' => '2025-04-08 19:15:39',
                'updated_at' => '2025-04-08 19:15:39',
            ),
            260 => 
            array (
                'id' => 1845,
                'amount' => '4620.00',
                'itemable_id' => 1720,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1477,
                'created_at' => '2025-04-08 19:16:56',
                'updated_at' => '2025-04-08 19:16:56',
            ),
            261 => 
            array (
                'id' => 1846,
                'amount' => '3500.00',
                'itemable_id' => 1722,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1478,
                'created_at' => '2025-04-08 19:32:34',
                'updated_at' => '2025-04-08 19:32:34',
            ),
            262 => 
            array (
                'id' => 1847,
                'amount' => '880.00',
                'itemable_id' => 1724,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1479,
                'created_at' => '2025-04-08 20:37:04',
                'updated_at' => '2025-04-08 20:37:04',
            ),
            263 => 
            array (
                'id' => 1848,
                'amount' => '880.00',
                'itemable_id' => 1726,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1480,
                'created_at' => '2025-04-08 21:46:08',
                'updated_at' => '2025-04-08 21:46:08',
            ),
            264 => 
            array (
                'id' => 1849,
                'amount' => '6920.00',
                'itemable_id' => 1727,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1481,
                'created_at' => '2025-04-08 22:36:15',
                'updated_at' => '2025-04-08 22:36:15',
            ),
            265 => 
            array (
                'id' => 1850,
                'amount' => '1550.00',
                'itemable_id' => 1725,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1481,
                'created_at' => '2025-04-08 22:36:15',
                'updated_at' => '2025-04-08 22:36:15',
            ),
            266 => 
            array (
                'id' => 1851,
                'amount' => '1200.00',
                'itemable_id' => 1728,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1482,
                'created_at' => '2025-04-08 23:13:57',
                'updated_at' => '2025-04-08 23:13:57',
            ),
            267 => 
            array (
                'id' => 1852,
                'amount' => '4159987.52',
                'itemable_id' => 722,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1483,
                'created_at' => '2025-04-09 01:07:30',
                'updated_at' => '2025-04-09 01:07:30',
            ),
            268 => 
            array (
                'id' => 1853,
                'amount' => '46028.00',
                'itemable_id' => 723,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1484,
                'created_at' => '2025-04-09 01:56:58',
                'updated_at' => '2025-04-09 01:56:58',
            ),
            269 => 
            array (
                'id' => 1854,
                'amount' => '9975.00',
                'itemable_id' => 724,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1485,
                'created_at' => '2025-04-09 02:05:00',
                'updated_at' => '2025-04-09 02:05:00',
            ),
            270 => 
            array (
                'id' => 1855,
                'amount' => '110033.00',
                'itemable_id' => 725,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1485,
                'created_at' => '2025-04-09 02:05:00',
                'updated_at' => '2025-04-09 02:05:00',
            ),
            271 => 
            array (
                'id' => 1856,
                'amount' => '1800.55',
                'itemable_id' => 726,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1485,
                'created_at' => '2025-04-09 02:05:00',
                'updated_at' => '2025-04-09 02:05:00',
            ),
            272 => 
            array (
                'id' => 1857,
                'amount' => '4000.00',
                'itemable_id' => 1732,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1486,
                'created_at' => '2025-04-10 18:38:30',
                'updated_at' => '2025-04-10 18:38:30',
            ),
            273 => 
            array (
                'id' => 1858,
                'amount' => '13150.00',
                'itemable_id' => 1733,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1487,
                'created_at' => '2025-04-10 19:13:11',
                'updated_at' => '2025-04-10 19:13:11',
            ),
            274 => 
            array (
                'id' => 1859,
                'amount' => '23080.00',
                'itemable_id' => 1734,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1488,
                'created_at' => '2025-04-10 19:39:23',
                'updated_at' => '2025-04-10 19:39:23',
            ),
            275 => 
            array (
                'id' => 1860,
                'amount' => '325.00',
                'itemable_id' => 1737,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1489,
                'created_at' => '2025-04-10 22:12:59',
                'updated_at' => '2025-04-10 22:12:59',
            ),
            276 => 
            array (
                'id' => 1861,
                'amount' => '2500.00',
                'itemable_id' => 1738,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1490,
                'created_at' => '2025-04-10 23:31:17',
                'updated_at' => '2025-04-10 23:31:17',
            ),
            277 => 
            array (
                'id' => 1862,
                'amount' => '3120.00',
                'itemable_id' => 1739,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1491,
                'created_at' => '2025-04-10 23:41:20',
                'updated_at' => '2025-04-10 23:41:20',
            ),
            278 => 
            array (
                'id' => 1863,
                'amount' => '1000.00',
                'itemable_id' => 1740,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1492,
                'created_at' => '2025-04-11 16:47:05',
                'updated_at' => '2025-04-11 16:47:05',
            ),
            279 => 
            array (
                'id' => 1864,
                'amount' => '7320.00',
                'itemable_id' => 1742,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1493,
                'created_at' => '2025-04-11 19:13:45',
                'updated_at' => '2025-04-11 19:13:45',
            ),
            280 => 
            array (
                'id' => 1865,
                'amount' => '1680.00',
                'itemable_id' => 1741,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1494,
                'created_at' => '2025-04-11 19:14:05',
                'updated_at' => '2025-04-11 19:14:05',
            ),
            281 => 
            array (
                'id' => 1866,
                'amount' => '12240.00',
                'itemable_id' => 1743,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1495,
                'created_at' => '2025-04-14 17:21:05',
                'updated_at' => '2025-04-14 17:21:05',
            ),
            282 => 
            array (
                'id' => 1867,
                'amount' => '520.00',
                'itemable_id' => 1744,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1496,
                'created_at' => '2025-04-14 17:54:18',
                'updated_at' => '2025-04-14 17:54:18',
            ),
            283 => 
            array (
                'id' => 1868,
                'amount' => '1100.00',
                'itemable_id' => 1745,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1497,
                'created_at' => '2025-04-14 18:04:21',
                'updated_at' => '2025-04-14 18:04:21',
            ),
            284 => 
            array (
                'id' => 1869,
                'amount' => '1320.00',
                'itemable_id' => 1746,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1498,
                'created_at' => '2025-04-14 18:48:47',
                'updated_at' => '2025-04-14 18:48:47',
            ),
            285 => 
            array (
                'id' => 1870,
                'amount' => '1500.00',
                'itemable_id' => 1749,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1499,
                'created_at' => '2025-04-14 22:46:33',
                'updated_at' => '2025-04-14 22:46:33',
            ),
            286 => 
            array (
                'id' => 1871,
                'amount' => '1155.00',
                'itemable_id' => 1748,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1499,
                'created_at' => '2025-04-14 22:46:33',
                'updated_at' => '2025-04-14 22:46:33',
            ),
            287 => 
            array (
                'id' => 1872,
                'amount' => '7225.00',
                'itemable_id' => 1747,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1499,
                'created_at' => '2025-04-14 22:46:33',
                'updated_at' => '2025-04-14 22:46:33',
            ),
            288 => 
            array (
                'id' => 1873,
                'amount' => '47556.00',
                'itemable_id' => 727,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1500,
                'created_at' => '2025-04-14 22:47:41',
                'updated_at' => '2025-04-14 22:47:41',
            ),
            289 => 
            array (
                'id' => 1874,
                'amount' => '11800.00',
                'itemable_id' => 1751,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1501,
                'created_at' => '2025-04-14 23:34:26',
                'updated_at' => '2025-04-14 23:34:26',
            ),
            290 => 
            array (
                'id' => 1875,
                'amount' => '880.00',
                'itemable_id' => 1752,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1502,
                'created_at' => '2025-04-15 00:21:06',
                'updated_at' => '2025-04-15 00:21:06',
            ),
            291 => 
            array (
                'id' => 1876,
                'amount' => '2000.00',
                'itemable_id' => 1753,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1503,
                'created_at' => '2025-04-15 17:34:24',
                'updated_at' => '2025-04-15 17:34:24',
            ),
            292 => 
            array (
                'id' => 1877,
                'amount' => '10080.00',
                'itemable_id' => 1754,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1504,
                'created_at' => '2025-04-15 18:01:46',
                'updated_at' => '2025-04-15 18:01:46',
            ),
            293 => 
            array (
                'id' => 1878,
                'amount' => '2200.00',
                'itemable_id' => 1757,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1505,
                'created_at' => '2025-04-15 19:11:51',
                'updated_at' => '2025-04-15 19:11:51',
            ),
            294 => 
            array (
                'id' => 1879,
                'amount' => '8180.00',
                'itemable_id' => 1756,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1505,
                'created_at' => '2025-04-15 19:11:51',
                'updated_at' => '2025-04-15 19:11:51',
            ),
            295 => 
            array (
                'id' => 1880,
                'amount' => '3920.00',
                'itemable_id' => 1711,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1506,
                'created_at' => '2025-04-15 21:39:57',
                'updated_at' => '2025-04-15 21:39:57',
            ),
            296 => 
            array (
                'id' => 1881,
                'amount' => '11200.00',
                'itemable_id' => 1710,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1506,
                'created_at' => '2025-04-15 21:39:57',
                'updated_at' => '2025-04-15 21:39:57',
            ),
            297 => 
            array (
                'id' => 1882,
                'amount' => '69445.00',
                'itemable_id' => 728,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1507,
                'created_at' => '2025-04-15 23:05:49',
                'updated_at' => '2025-04-15 23:05:49',
            ),
            298 => 
            array (
                'id' => 1883,
                'amount' => '69425.00',
                'itemable_id' => 729,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1507,
                'created_at' => '2025-04-15 23:05:49',
                'updated_at' => '2025-04-15 23:05:49',
            ),
            299 => 
            array (
                'id' => 1884,
                'amount' => '12500.00',
                'itemable_id' => 730,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1507,
                'created_at' => '2025-04-15 23:05:49',
                'updated_at' => '2025-04-15 23:05:49',
            ),
            300 => 
            array (
                'id' => 1885,
                'amount' => '37489.00',
                'itemable_id' => 731,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1508,
                'created_at' => '2025-04-15 23:30:50',
                'updated_at' => '2025-04-15 23:30:50',
            ),
            301 => 
            array (
                'id' => 1886,
                'amount' => '12511.00',
                'itemable_id' => 732,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1508,
                'created_at' => '2025-04-15 23:30:50',
                'updated_at' => '2025-04-15 23:30:50',
            ),
            302 => 
            array (
                'id' => 1887,
                'amount' => '30150.00',
                'itemable_id' => 733,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1509,
                'created_at' => '2025-04-16 00:04:06',
                'updated_at' => '2025-04-16 00:04:06',
            ),
            303 => 
            array (
                'id' => 1889,
                'amount' => '1288000.00',
                'itemable_id' => 735,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1511,
                'created_at' => '2025-04-16 19:58:06',
                'updated_at' => '2025-04-16 19:58:06',
            ),
            304 => 
            array (
                'id' => 1890,
                'amount' => '1288000.00',
                'itemable_id' => 735,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1513,
                'created_at' => '2025-04-16 19:58:06',
                'updated_at' => '2025-04-16 19:58:06',
            ),
            305 => 
            array (
                'id' => 1891,
                'amount' => '500.00',
                'itemable_id' => 1763,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1514,
                'created_at' => '2025-04-21 16:53:03',
                'updated_at' => '2025-04-21 16:53:03',
            ),
            306 => 
            array (
                'id' => 1892,
                'amount' => '2100.00',
                'itemable_id' => 1764,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1515,
                'created_at' => '2025-04-21 17:25:17',
                'updated_at' => '2025-04-21 17:25:17',
            ),
            307 => 
            array (
                'id' => 1893,
                'amount' => '2500.00',
                'itemable_id' => 1765,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1516,
                'created_at' => '2025-04-21 19:32:39',
                'updated_at' => '2025-04-21 19:32:39',
            ),
            308 => 
            array (
                'id' => 1894,
                'amount' => '1820.00',
                'itemable_id' => 1766,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1517,
                'created_at' => '2025-04-21 19:57:00',
                'updated_at' => '2025-04-21 19:57:00',
            ),
            309 => 
            array (
                'id' => 1895,
                'amount' => '10000.00',
                'itemable_id' => 1768,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1518,
                'created_at' => '2025-04-21 21:15:21',
                'updated_at' => '2025-04-21 21:15:21',
            ),
            310 => 
            array (
                'id' => 1896,
                'amount' => '7800.00',
                'itemable_id' => 1769,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1519,
                'created_at' => '2025-04-21 22:09:07',
                'updated_at' => '2025-04-21 22:09:07',
            ),
            311 => 
            array (
                'id' => 1897,
                'amount' => '1650.00',
                'itemable_id' => 1770,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1520,
                'created_at' => '2025-04-21 23:15:54',
                'updated_at' => '2025-04-21 23:15:54',
            ),
            312 => 
            array (
                'id' => 1898,
                'amount' => '500.00',
                'itemable_id' => 1767,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1521,
                'created_at' => '2025-04-21 23:51:25',
                'updated_at' => '2025-04-21 23:51:25',
            ),
            313 => 
            array (
                'id' => 1899,
                'amount' => '1550.00',
                'itemable_id' => 1772,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1522,
                'created_at' => '2025-04-22 00:12:03',
                'updated_at' => '2025-04-22 00:12:03',
            ),
            314 => 
            array (
                'id' => 1900,
                'amount' => '1550.00',
                'itemable_id' => 1771,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1522,
                'created_at' => '2025-04-22 00:12:03',
                'updated_at' => '2025-04-22 00:12:03',
            ),
            315 => 
            array (
                'id' => 1901,
                'amount' => '500.00',
                'itemable_id' => 1774,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1523,
                'created_at' => '2025-04-22 18:04:32',
                'updated_at' => '2025-04-22 18:04:32',
            ),
            316 => 
            array (
                'id' => 1902,
                'amount' => '500.00',
                'itemable_id' => 1773,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1524,
                'created_at' => '2025-04-22 18:05:07',
                'updated_at' => '2025-04-22 18:05:07',
            ),
            317 => 
            array (
                'id' => 1903,
                'amount' => '500.00',
                'itemable_id' => 1775,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1525,
                'created_at' => '2025-04-22 18:05:55',
                'updated_at' => '2025-04-22 18:05:55',
            ),
            318 => 
            array (
                'id' => 1904,
                'amount' => '2500.00',
                'itemable_id' => 1776,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1526,
                'created_at' => '2025-04-22 18:15:26',
                'updated_at' => '2025-04-22 18:15:26',
            ),
            319 => 
            array (
                'id' => 1905,
                'amount' => '8300.00',
                'itemable_id' => 1780,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1527,
                'created_at' => '2025-04-22 18:53:43',
                'updated_at' => '2025-04-22 18:53:43',
            ),
            320 => 
            array (
                'id' => 1906,
                'amount' => '2000.00',
                'itemable_id' => 1779,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1528,
                'created_at' => '2025-04-22 18:55:04',
                'updated_at' => '2025-04-22 18:55:04',
            ),
            321 => 
            array (
                'id' => 1907,
                'amount' => '1100.00',
                'itemable_id' => 1778,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1528,
                'created_at' => '2025-04-22 18:55:04',
                'updated_at' => '2025-04-22 18:55:04',
            ),
            322 => 
            array (
                'id' => 1908,
                'amount' => '5820.00',
                'itemable_id' => 1777,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1528,
                'created_at' => '2025-04-22 18:55:04',
                'updated_at' => '2025-04-22 18:55:04',
            ),
            323 => 
            array (
                'id' => 1909,
                'amount' => '550.00',
                'itemable_id' => 1781,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1529,
                'created_at' => '2025-04-22 19:12:27',
                'updated_at' => '2025-04-22 19:12:27',
            ),
            324 => 
            array (
                'id' => 1910,
                'amount' => '550.00',
                'itemable_id' => 1782,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1530,
                'created_at' => '2025-04-22 19:33:46',
                'updated_at' => '2025-04-22 19:33:46',
            ),
            325 => 
            array (
                'id' => 1911,
                'amount' => '5280.00',
                'itemable_id' => 1784,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1531,
                'created_at' => '2025-04-22 19:57:22',
                'updated_at' => '2025-04-22 19:57:22',
            ),
            326 => 
            array (
                'id' => 1912,
                'amount' => '1100.00',
                'itemable_id' => 1783,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1532,
                'created_at' => '2025-04-22 19:59:25',
                'updated_at' => '2025-04-22 19:59:25',
            ),
            327 => 
            array (
                'id' => 1913,
                'amount' => '13770.00',
                'itemable_id' => 1786,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1533,
                'created_at' => '2025-04-22 21:23:39',
                'updated_at' => '2025-04-22 21:23:39',
            ),
            328 => 
            array (
                'id' => 1914,
                'amount' => '9350.00',
                'itemable_id' => 1785,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1534,
                'created_at' => '2025-04-22 21:26:18',
                'updated_at' => '2025-04-22 21:26:18',
            ),
            329 => 
            array (
                'id' => 1915,
                'amount' => '600.00',
                'itemable_id' => 1590,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1535,
                'created_at' => '2025-04-23 00:34:24',
                'updated_at' => '2025-04-23 00:34:24',
            ),
            330 => 
            array (
                'id' => 1916,
                'amount' => '3660.00',
                'itemable_id' => 1790,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1536,
                'created_at' => '2025-04-23 18:17:44',
                'updated_at' => '2025-04-23 18:17:44',
            ),
            331 => 
            array (
                'id' => 1917,
                'amount' => '3650.00',
                'itemable_id' => 1792,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1537,
                'created_at' => '2025-04-23 19:06:34',
                'updated_at' => '2025-04-23 19:06:34',
            ),
            332 => 
            array (
                'id' => 1918,
                'amount' => '4000.00',
                'itemable_id' => 1791,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1537,
                'created_at' => '2025-04-23 19:06:34',
                'updated_at' => '2025-04-23 19:06:34',
            ),
            333 => 
            array (
                'id' => 1919,
                'amount' => '3000.00',
                'itemable_id' => 1793,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1538,
                'created_at' => '2025-04-23 19:17:16',
                'updated_at' => '2025-04-23 19:17:16',
            ),
            334 => 
            array (
                'id' => 1920,
                'amount' => '880.00',
                'itemable_id' => 1796,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1539,
                'created_at' => '2025-04-23 20:01:42',
                'updated_at' => '2025-04-23 20:01:42',
            ),
            335 => 
            array (
                'id' => 1921,
                'amount' => '1760.00',
                'itemable_id' => 1795,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1539,
                'created_at' => '2025-04-23 20:01:42',
                'updated_at' => '2025-04-23 20:01:42',
            ),
            336 => 
            array (
                'id' => 1922,
                'amount' => '1760.00',
                'itemable_id' => 1794,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1539,
                'created_at' => '2025-04-23 20:01:42',
                'updated_at' => '2025-04-23 20:01:42',
            ),
            337 => 
            array (
                'id' => 1923,
                'amount' => '2100.00',
                'itemable_id' => 1797,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1540,
                'created_at' => '2025-04-23 21:31:09',
                'updated_at' => '2025-04-23 21:31:09',
            ),
            338 => 
            array (
                'id' => 1924,
                'amount' => '600.00',
                'itemable_id' => 1799,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1541,
                'created_at' => '2025-04-24 23:33:31',
                'updated_at' => '2025-04-24 23:33:31',
            ),
            339 => 
            array (
                'id' => 1925,
                'amount' => '1080.00',
                'itemable_id' => 1800,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1542,
                'created_at' => '2025-04-25 00:06:56',
                'updated_at' => '2025-04-25 00:06:56',
            ),
            340 => 
            array (
                'id' => 1926,
                'amount' => '1550.00',
                'itemable_id' => 1801,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1543,
                'created_at' => '2025-04-25 17:05:08',
                'updated_at' => '2025-04-25 17:05:08',
            ),
            341 => 
            array (
                'id' => 1927,
                'amount' => '3900.00',
                'itemable_id' => 1802,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1544,
                'created_at' => '2025-04-25 19:17:18',
                'updated_at' => '2025-04-25 19:17:18',
            ),
            342 => 
            array (
                'id' => 1928,
                'amount' => '43889.00',
                'itemable_id' => 736,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1545,
                'created_at' => '2025-04-25 21:59:36',
                'updated_at' => '2025-04-25 21:59:36',
            ),
            343 => 
            array (
                'id' => 1929,
                'amount' => '2550.00',
                'itemable_id' => 1803,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1546,
                'created_at' => '2025-04-25 22:19:23',
                'updated_at' => '2025-04-25 22:19:23',
            ),
            344 => 
            array (
                'id' => 1930,
                'amount' => '3370.00',
                'itemable_id' => 1805,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1547,
                'created_at' => '2025-04-28 18:00:16',
                'updated_at' => '2025-04-28 18:00:16',
            ),
            345 => 
            array (
                'id' => 1931,
                'amount' => '3100.00',
                'itemable_id' => 1806,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1548,
                'created_at' => '2025-04-28 18:36:57',
                'updated_at' => '2025-04-28 18:36:57',
            ),
            346 => 
            array (
                'id' => 1932,
                'amount' => '2500.00',
                'itemable_id' => 1807,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1549,
                'created_at' => '2025-04-28 19:25:11',
                'updated_at' => '2025-04-28 19:25:11',
            ),
            347 => 
            array (
                'id' => 1933,
                'amount' => '2000.00',
                'itemable_id' => 1810,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1550,
                'created_at' => '2025-04-28 19:57:55',
                'updated_at' => '2025-04-28 19:57:55',
            ),
            348 => 
            array (
                'id' => 1934,
                'amount' => '10500.00',
                'itemable_id' => 1811,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1551,
                'created_at' => '2025-04-28 21:08:03',
                'updated_at' => '2025-04-28 21:08:03',
            ),
            349 => 
            array (
                'id' => 1935,
                'amount' => '880.00',
                'itemable_id' => 1814,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1552,
                'created_at' => '2025-04-28 21:55:06',
                'updated_at' => '2025-04-28 21:55:06',
            ),
            350 => 
            array (
                'id' => 1936,
                'amount' => '1760.00',
                'itemable_id' => 1813,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1552,
                'created_at' => '2025-04-28 21:55:06',
                'updated_at' => '2025-04-28 21:55:06',
            ),
            351 => 
            array (
                'id' => 1937,
                'amount' => '1760.00',
                'itemable_id' => 1812,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1552,
                'created_at' => '2025-04-28 21:55:06',
                'updated_at' => '2025-04-28 21:55:06',
            ),
            352 => 
            array (
                'id' => 1938,
                'amount' => '5500.00',
                'itemable_id' => 1815,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1553,
                'created_at' => '2025-04-28 22:00:33',
                'updated_at' => '2025-04-28 22:00:33',
            ),
            353 => 
            array (
                'id' => 1939,
                'amount' => '4000.00',
                'itemable_id' => 1816,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1554,
                'created_at' => '2025-04-28 22:42:10',
                'updated_at' => '2025-04-28 22:42:10',
            ),
            354 => 
            array (
                'id' => 1940,
                'amount' => '2200.00',
                'itemable_id' => 1818,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1555,
                'created_at' => '2025-04-28 23:19:26',
                'updated_at' => '2025-04-28 23:19:26',
            ),
            355 => 
            array (
                'id' => 1941,
                'amount' => '800.00',
                'itemable_id' => 1817,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1555,
                'created_at' => '2025-04-28 23:19:26',
                'updated_at' => '2025-04-28 23:19:26',
            ),
            356 => 
            array (
                'id' => 1942,
                'amount' => '1550.00',
                'itemable_id' => 1819,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1556,
                'created_at' => '2025-04-28 23:44:28',
                'updated_at' => '2025-04-28 23:44:28',
            ),
            357 => 
            array (
                'id' => 1943,
                'amount' => '2440.00',
                'itemable_id' => 1822,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1557,
                'created_at' => '2025-04-29 00:19:12',
                'updated_at' => '2025-04-29 00:19:12',
            ),
            358 => 
            array (
                'id' => 1944,
                'amount' => '560.00',
                'itemable_id' => 1821,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1557,
                'created_at' => '2025-04-29 00:19:12',
                'updated_at' => '2025-04-29 00:19:12',
            ),
            359 => 
            array (
                'id' => 1945,
                'amount' => '880.00',
                'itemable_id' => 1820,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1557,
                'created_at' => '2025-04-29 00:19:12',
                'updated_at' => '2025-04-29 00:19:12',
            ),
            360 => 
            array (
                'id' => 1946,
                'amount' => '15556.22',
                'itemable_id' => 737,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1558,
                'created_at' => '2025-04-29 18:39:04',
                'updated_at' => '2025-04-29 18:39:04',
            ),
            361 => 
            array (
                'id' => 1950,
                'amount' => '46028.00',
                'itemable_id' => 741,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1562,
                'created_at' => '2025-04-29 18:54:59',
                'updated_at' => '2025-04-29 18:54:59',
            ),
            362 => 
            array (
                'id' => 1951,
                'amount' => '500.00',
                'itemable_id' => 1824,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1563,
                'created_at' => '2025-04-29 19:20:04',
                'updated_at' => '2025-04-29 19:20:04',
            ),
            363 => 
            array (
                'id' => 1952,
                'amount' => '3791.00',
                'itemable_id' => 742,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1564,
                'created_at' => '2025-04-29 19:26:31',
                'updated_at' => '2025-04-29 19:26:31',
            ),
            364 => 
            array (
                'id' => 1953,
                'amount' => '12209.00',
                'itemable_id' => 743,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1564,
                'created_at' => '2025-04-29 19:26:31',
                'updated_at' => '2025-04-29 19:26:31',
            ),
            365 => 
            array (
                'id' => 1954,
                'amount' => '1800.00',
                'itemable_id' => 1823,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1565,
                'created_at' => '2025-04-29 21:00:28',
                'updated_at' => '2025-04-29 21:00:28',
            ),
            366 => 
            array (
                'id' => 1955,
                'amount' => '15866.67',
                'itemable_id' => 744,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1566,
                'created_at' => '2025-04-29 21:16:52',
                'updated_at' => '2025-04-29 21:16:52',
            ),
            367 => 
            array (
                'id' => 1956,
                'amount' => '4665.00',
                'itemable_id' => 745,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1567,
                'created_at' => '2025-04-29 21:29:32',
                'updated_at' => '2025-04-29 21:29:32',
            ),
            368 => 
            array (
                'id' => 1957,
                'amount' => '500.00',
                'itemable_id' => 1825,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1568,
                'created_at' => '2025-04-29 23:18:21',
                'updated_at' => '2025-04-29 23:18:21',
            ),
            369 => 
            array (
                'id' => 1958,
                'amount' => '41666.67',
                'itemable_id' => 746,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1569,
                'created_at' => '2025-04-30 17:44:14',
                'updated_at' => '2025-04-30 17:44:14',
            ),
            370 => 
            array (
                'id' => 1959,
                'amount' => '14900.00',
                'itemable_id' => 747,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1570,
                'created_at' => '2025-04-30 17:47:04',
                'updated_at' => '2025-04-30 17:47:04',
            ),
            371 => 
            array (
                'id' => 1961,
                'amount' => '45833.33',
                'itemable_id' => 749,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1572,
                'created_at' => '2025-04-30 17:50:23',
                'updated_at' => '2025-04-30 17:50:23',
            ),
            372 => 
            array (
                'id' => 1962,
                'amount' => '9558.00',
                'itemable_id' => 750,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1573,
                'created_at' => '2025-04-30 17:52:31',
                'updated_at' => '2025-04-30 17:52:31',
            ),
            373 => 
            array (
                'id' => 1963,
                'amount' => '13423.00',
                'itemable_id' => 751,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1574,
                'created_at' => '2025-04-30 17:54:36',
                'updated_at' => '2025-04-30 17:54:36',
            ),
            374 => 
            array (
                'id' => 1964,
                'amount' => '15089.00',
                'itemable_id' => 752,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1575,
                'created_at' => '2025-04-30 17:59:35',
                'updated_at' => '2025-04-30 17:59:35',
            ),
            375 => 
            array (
                'id' => 1965,
                'amount' => '78270.10',
                'itemable_id' => 753,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1576,
                'created_at' => '2025-04-30 18:01:45',
                'updated_at' => '2025-04-30 18:01:45',
            ),
            376 => 
            array (
                'id' => 1966,
                'amount' => '27777.00',
                'itemable_id' => 754,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1577,
                'created_at' => '2025-04-30 18:13:02',
                'updated_at' => '2025-04-30 18:13:02',
            ),
            377 => 
            array (
                'id' => 1967,
                'amount' => '15252.00',
                'itemable_id' => 755,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1578,
                'created_at' => '2025-04-30 18:16:57',
                'updated_at' => '2025-04-30 18:16:57',
            ),
            378 => 
            array (
                'id' => 1968,
                'amount' => '15252.00',
                'itemable_id' => 756,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1578,
                'created_at' => '2025-04-30 18:16:57',
                'updated_at' => '2025-04-30 18:16:57',
            ),
            379 => 
            array (
                'id' => 1969,
                'amount' => '42899.00',
                'itemable_id' => 757,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1579,
                'created_at' => '2025-04-30 18:22:51',
                'updated_at' => '2025-04-30 18:22:51',
            ),
            380 => 
            array (
                'id' => 1970,
                'amount' => '42899.00',
                'itemable_id' => 758,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1579,
                'created_at' => '2025-04-30 18:22:51',
                'updated_at' => '2025-04-30 18:22:51',
            ),
            381 => 
            array (
                'id' => 1971,
                'amount' => '42899.00',
                'itemable_id' => 759,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1579,
                'created_at' => '2025-04-30 18:22:51',
                'updated_at' => '2025-04-30 18:22:51',
            ),
            382 => 
            array (
                'id' => 1972,
                'amount' => '43056.00',
                'itemable_id' => 760,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1580,
                'created_at' => '2025-04-30 18:27:35',
                'updated_at' => '2025-04-30 18:27:35',
            ),
            383 => 
            array (
                'id' => 1973,
                'amount' => '43056.00',
                'itemable_id' => 761,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1580,
                'created_at' => '2025-04-30 18:27:35',
                'updated_at' => '2025-04-30 18:27:35',
            ),
            384 => 
            array (
                'id' => 1974,
                'amount' => '43056.00',
                'itemable_id' => 762,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1580,
                'created_at' => '2025-04-30 18:27:35',
                'updated_at' => '2025-04-30 18:27:35',
            ),
            385 => 
            array (
                'id' => 1975,
                'amount' => '12639.00',
                'itemable_id' => 763,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1581,
                'created_at' => '2025-04-30 18:32:12',
                'updated_at' => '2025-04-30 18:32:12',
            ),
            386 => 
            array (
                'id' => 1976,
                'amount' => '12639.00',
                'itemable_id' => 764,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1581,
                'created_at' => '2025-04-30 18:32:12',
                'updated_at' => '2025-04-30 18:32:12',
            ),
            387 => 
            array (
                'id' => 1977,
                'amount' => '12639.00',
                'itemable_id' => 765,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1581,
                'created_at' => '2025-04-30 18:32:12',
                'updated_at' => '2025-04-30 18:32:12',
            ),
            388 => 
            array (
                'id' => 1978,
                'amount' => '47445.00',
                'itemable_id' => 766,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1582,
                'created_at' => '2025-04-30 18:43:37',
                'updated_at' => '2025-04-30 18:43:37',
            ),
            389 => 
            array (
                'id' => 1979,
                'amount' => '21389.00',
                'itemable_id' => 767,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1583,
                'created_at' => '2025-04-30 18:46:00',
                'updated_at' => '2025-04-30 18:46:00',
            ),
            390 => 
            array (
                'id' => 1980,
                'amount' => '16695.00',
                'itemable_id' => 768,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1584,
                'created_at' => '2025-04-30 18:48:25',
                'updated_at' => '2025-04-30 18:48:25',
            ),
            391 => 
            array (
                'id' => 1981,
                'amount' => '9691.00',
                'itemable_id' => 769,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1585,
                'created_at' => '2025-04-30 18:50:38',
                'updated_at' => '2025-04-30 18:50:38',
            ),
            392 => 
            array (
                'id' => 1982,
                'amount' => '14390.00',
                'itemable_id' => 770,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1586,
                'created_at' => '2025-04-30 18:53:02',
                'updated_at' => '2025-04-30 18:53:02',
            ),
            393 => 
            array (
                'id' => 1983,
                'amount' => '46291.66',
                'itemable_id' => 771,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1587,
                'created_at' => '2025-04-30 18:55:35',
                'updated_at' => '2025-04-30 18:55:35',
            ),
            394 => 
            array (
                'id' => 1984,
                'amount' => '10329.00',
                'itemable_id' => 772,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1588,
                'created_at' => '2025-04-30 18:58:12',
                'updated_at' => '2025-04-30 18:58:12',
            ),
            395 => 
            array (
                'id' => 1985,
                'amount' => '26445.00',
                'itemable_id' => 773,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1589,
                'created_at' => '2025-04-30 19:00:07',
                'updated_at' => '2025-04-30 19:00:07',
            ),
            396 => 
            array (
                'id' => 1986,
                'amount' => '7139.00',
                'itemable_id' => 774,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1590,
                'created_at' => '2025-04-30 19:02:07',
                'updated_at' => '2025-04-30 19:02:07',
            ),
            397 => 
            array (
                'id' => 1987,
                'amount' => '16080.00',
                'itemable_id' => 775,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1591,
                'created_at' => '2025-04-30 19:05:13',
                'updated_at' => '2025-04-30 19:05:13',
            ),
            398 => 
            array (
                'id' => 1988,
                'amount' => '30588.89',
                'itemable_id' => 776,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1592,
                'created_at' => '2025-04-30 19:07:14',
                'updated_at' => '2025-04-30 19:07:14',
            ),
            399 => 
            array (
                'id' => 1989,
                'amount' => '42770.00',
                'itemable_id' => 777,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1593,
                'created_at' => '2025-04-30 19:26:29',
                'updated_at' => '2025-04-30 19:26:29',
            ),
            400 => 
            array (
                'id' => 1990,
                'amount' => '30834.00',
                'itemable_id' => 778,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1594,
                'created_at' => '2025-04-30 19:30:27',
                'updated_at' => '2025-04-30 19:30:27',
            ),
            401 => 
            array (
                'id' => 1991,
                'amount' => '16116.00',
                'itemable_id' => 779,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1595,
                'created_at' => '2025-04-30 19:32:45',
                'updated_at' => '2025-04-30 19:32:45',
            ),
            402 => 
            array (
                'id' => 1992,
                'amount' => '45277.77',
                'itemable_id' => 780,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1596,
                'created_at' => '2025-04-30 19:40:23',
                'updated_at' => '2025-04-30 19:40:23',
            ),
            403 => 
            array (
                'id' => 1993,
                'amount' => '17777.78',
                'itemable_id' => 781,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1597,
                'created_at' => '2025-04-30 19:42:51',
                'updated_at' => '2025-04-30 19:42:51',
            ),
            404 => 
            array (
                'id' => 1994,
                'amount' => '7083.33',
                'itemable_id' => 782,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1598,
                'created_at' => '2025-04-30 19:45:40',
                'updated_at' => '2025-04-30 19:45:40',
            ),
            405 => 
            array (
                'id' => 1995,
                'amount' => '44166.00',
                'itemable_id' => 783,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1599,
                'created_at' => '2025-04-30 19:48:14',
                'updated_at' => '2025-04-30 19:48:14',
            ),
            406 => 
            array (
                'id' => 1996,
                'amount' => '9225.00',
                'itemable_id' => 784,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1600,
                'created_at' => '2025-04-30 19:50:29',
                'updated_at' => '2025-04-30 19:50:29',
            ),
            407 => 
            array (
                'id' => 1997,
                'amount' => '21654.00',
                'itemable_id' => 785,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1601,
                'created_at' => '2025-04-30 21:09:55',
                'updated_at' => '2025-04-30 21:09:55',
            ),
            408 => 
            array (
                'id' => 1998,
                'amount' => '56112.00',
                'itemable_id' => 786,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1602,
                'created_at' => '2025-04-30 21:19:33',
                'updated_at' => '2025-04-30 21:19:33',
            ),
            409 => 
            array (
                'id' => 1999,
                'amount' => '56112.00',
                'itemable_id' => 787,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1602,
                'created_at' => '2025-04-30 21:19:33',
                'updated_at' => '2025-04-30 21:19:33',
            ),
            410 => 
            array (
                'id' => 2000,
                'amount' => '8466.00',
                'itemable_id' => 788,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1603,
                'created_at' => '2025-04-30 21:26:59',
                'updated_at' => '2025-04-30 21:26:59',
            ),
            411 => 
            array (
                'id' => 2001,
                'amount' => '35833.33',
                'itemable_id' => 789,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1604,
                'created_at' => '2025-04-30 21:29:16',
                'updated_at' => '2025-04-30 21:29:16',
            ),
            412 => 
            array (
                'id' => 2002,
                'amount' => '61112.00',
                'itemable_id' => 790,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1605,
                'created_at' => '2025-04-30 21:31:16',
                'updated_at' => '2025-04-30 21:31:16',
            ),
            413 => 
            array (
                'id' => 2003,
                'amount' => '41667.00',
                'itemable_id' => 791,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1606,
                'created_at' => '2025-04-30 21:34:10',
                'updated_at' => '2025-04-30 21:34:10',
            ),
            414 => 
            array (
                'id' => 2004,
                'amount' => '35834.00',
                'itemable_id' => 792,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1607,
                'created_at' => '2025-04-30 21:36:50',
                'updated_at' => '2025-04-30 21:36:50',
            ),
            415 => 
            array (
                'id' => 2005,
                'amount' => '83334.00',
                'itemable_id' => 793,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1608,
                'created_at' => '2025-04-30 21:41:51',
                'updated_at' => '2025-04-30 21:41:51',
            ),
            416 => 
            array (
                'id' => 2006,
                'amount' => '83334.00',
                'itemable_id' => 794,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1608,
                'created_at' => '2025-04-30 21:41:51',
                'updated_at' => '2025-04-30 21:41:51',
            ),
            417 => 
            array (
                'id' => 2007,
                'amount' => '83334.00',
                'itemable_id' => 795,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1608,
                'created_at' => '2025-04-30 21:41:51',
                'updated_at' => '2025-04-30 21:41:51',
            ),
            418 => 
            array (
                'id' => 2008,
                'amount' => '33334.00',
                'itemable_id' => 796,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1609,
                'created_at' => '2025-04-30 21:44:27',
                'updated_at' => '2025-04-30 21:44:27',
            ),
            419 => 
            array (
                'id' => 2009,
                'amount' => '43333.33',
                'itemable_id' => 797,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1610,
                'created_at' => '2025-04-30 21:46:55',
                'updated_at' => '2025-04-30 21:46:55',
            ),
            420 => 
            array (
                'id' => 2010,
                'amount' => '43750.00',
                'itemable_id' => 798,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1611,
                'created_at' => '2025-04-30 21:49:56',
                'updated_at' => '2025-04-30 21:49:56',
            ),
            421 => 
            array (
                'id' => 2011,
                'amount' => '75000.00',
                'itemable_id' => 799,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1612,
                'created_at' => '2025-04-30 21:56:47',
                'updated_at' => '2025-04-30 21:56:47',
            ),
            422 => 
            array (
                'id' => 2012,
                'amount' => '83334.00',
                'itemable_id' => 800,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1613,
                'created_at' => '2025-04-30 21:58:49',
                'updated_at' => '2025-04-30 21:58:49',
            ),
            423 => 
            array (
                'id' => 2013,
                'amount' => '31527.00',
                'itemable_id' => 801,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1614,
                'created_at' => '2025-04-30 22:01:26',
                'updated_at' => '2025-04-30 22:01:26',
            ),
            424 => 
            array (
                'id' => 2014,
                'amount' => '18334.00',
                'itemable_id' => 802,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1615,
                'created_at' => '2025-04-30 22:03:15',
                'updated_at' => '2025-04-30 22:03:15',
            ),
            425 => 
            array (
                'id' => 2015,
                'amount' => '17667.67',
                'itemable_id' => 803,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1616,
                'created_at' => '2025-04-30 22:11:14',
                'updated_at' => '2025-04-30 22:11:14',
            ),
            426 => 
            array (
                'id' => 2016,
                'amount' => '17667.67',
                'itemable_id' => 804,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1616,
                'created_at' => '2025-04-30 22:11:14',
                'updated_at' => '2025-04-30 22:11:14',
            ),
            427 => 
            array (
                'id' => 2017,
                'amount' => '74750.00',
                'itemable_id' => 805,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1617,
                'created_at' => '2025-04-30 22:17:37',
                'updated_at' => '2025-04-30 22:17:37',
            ),
            428 => 
            array (
                'id' => 2018,
                'amount' => '38333.00',
                'itemable_id' => 806,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1618,
                'created_at' => '2025-04-30 22:20:04',
                'updated_at' => '2025-04-30 22:20:04',
            ),
            429 => 
            array (
                'id' => 2019,
                'amount' => '10721.80',
                'itemable_id' => 807,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1619,
                'created_at' => '2025-04-30 22:22:13',
                'updated_at' => '2025-04-30 22:22:13',
            ),
            430 => 
            array (
                'id' => 2020,
                'amount' => '33288.89',
                'itemable_id' => 808,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1620,
                'created_at' => '2025-04-30 22:24:42',
                'updated_at' => '2025-04-30 22:24:42',
            ),
            431 => 
            array (
                'id' => 2021,
                'amount' => '33288.89',
                'itemable_id' => 809,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1620,
                'created_at' => '2025-04-30 22:24:42',
                'updated_at' => '2025-04-30 22:24:42',
            ),
            432 => 
            array (
                'id' => 2022,
                'amount' => '83277.78',
                'itemable_id' => 810,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1621,
                'created_at' => '2025-04-30 22:27:23',
                'updated_at' => '2025-04-30 22:27:23',
            ),
            433 => 
            array (
                'id' => 2023,
                'amount' => '43888.89',
                'itemable_id' => 811,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1622,
                'created_at' => '2025-04-30 22:33:43',
                'updated_at' => '2025-04-30 22:33:43',
            ),
            434 => 
            array (
                'id' => 2024,
                'amount' => '43888.89',
                'itemable_id' => 812,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1622,
                'created_at' => '2025-04-30 22:33:43',
                'updated_at' => '2025-04-30 22:33:43',
            ),
            435 => 
            array (
                'id' => 2025,
                'amount' => '30000.00',
                'itemable_id' => 813,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1623,
                'created_at' => '2025-04-30 22:37:40',
                'updated_at' => '2025-04-30 22:37:40',
            ),
            436 => 
            array (
                'id' => 2026,
                'amount' => '79861.11',
                'itemable_id' => 814,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1624,
                'created_at' => '2025-04-30 22:41:32',
                'updated_at' => '2025-04-30 22:41:32',
            ),
            437 => 
            array (
                'id' => 2027,
                'amount' => '79861.11',
                'itemable_id' => 815,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1624,
                'created_at' => '2025-04-30 22:41:32',
                'updated_at' => '2025-04-30 22:41:32',
            ),
            438 => 
            array (
                'id' => 2028,
                'amount' => '33195.00',
                'itemable_id' => 816,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1625,
                'created_at' => '2025-04-30 22:45:01',
                'updated_at' => '2025-04-30 22:45:01',
            ),
            439 => 
            array (
                'id' => 2029,
                'amount' => '27381.67',
                'itemable_id' => 817,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1626,
                'created_at' => '2025-04-30 22:49:48',
                'updated_at' => '2025-04-30 22:49:48',
            ),
            440 => 
            array (
                'id' => 2030,
                'amount' => '21667.00',
                'itemable_id' => 818,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1627,
                'created_at' => '2025-04-30 22:52:00',
                'updated_at' => '2025-04-30 22:52:00',
            ),
            441 => 
            array (
                'id' => 2031,
                'amount' => '42916.67',
                'itemable_id' => 819,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1628,
                'created_at' => '2025-04-30 22:54:21',
                'updated_at' => '2025-04-30 22:54:21',
            ),
            442 => 
            array (
                'id' => 2032,
                'amount' => '41667.00',
                'itemable_id' => 820,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1629,
                'created_at' => '2025-04-30 22:57:08',
                'updated_at' => '2025-04-30 22:57:08',
            ),
            443 => 
            array (
                'id' => 2033,
                'amount' => '41667.00',
                'itemable_id' => 821,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1629,
                'created_at' => '2025-04-30 22:57:08',
                'updated_at' => '2025-04-30 22:57:08',
            ),
            444 => 
            array (
                'id' => 2034,
                'amount' => '39167.00',
                'itemable_id' => 822,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1630,
                'created_at' => '2025-04-30 22:59:36',
                'updated_at' => '2025-04-30 22:59:36',
            ),
            445 => 
            array (
                'id' => 2035,
                'amount' => '6944.44',
                'itemable_id' => 823,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1631,
                'created_at' => '2025-04-30 23:08:14',
                'updated_at' => '2025-04-30 23:08:14',
            ),
            446 => 
            array (
                'id' => 2036,
                'amount' => '6944.44',
                'itemable_id' => 824,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1631,
                'created_at' => '2025-04-30 23:08:14',
                'updated_at' => '2025-04-30 23:08:14',
            ),
            447 => 
            array (
                'id' => 2037,
                'amount' => '43889.00',
                'itemable_id' => 825,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1632,
                'created_at' => '2025-04-30 23:10:43',
                'updated_at' => '2025-04-30 23:10:43',
            ),
            448 => 
            array (
                'id' => 2038,
                'amount' => '43889.00',
                'itemable_id' => 826,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1632,
                'created_at' => '2025-04-30 23:10:43',
                'updated_at' => '2025-04-30 23:10:43',
            ),
            449 => 
            array (
                'id' => 2039,
                'amount' => '11020.14',
                'itemable_id' => 827,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1633,
                'created_at' => '2025-04-30 23:12:52',
                'updated_at' => '2025-04-30 23:12:52',
            ),
            450 => 
            array (
                'id' => 2040,
                'amount' => '69445.00',
                'itemable_id' => 828,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1634,
                'created_at' => '2025-04-30 23:15:18',
                'updated_at' => '2025-04-30 23:15:18',
            ),
            451 => 
            array (
                'id' => 2041,
                'amount' => '79689.00',
                'itemable_id' => 829,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1635,
                'created_at' => '2025-04-30 23:19:16',
                'updated_at' => '2025-04-30 23:19:16',
            ),
            452 => 
            array (
                'id' => 2042,
                'amount' => '37500.00',
                'itemable_id' => 830,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1636,
                'created_at' => '2025-04-30 23:22:45',
                'updated_at' => '2025-04-30 23:22:45',
            ),
            453 => 
            array (
                'id' => 2043,
                'amount' => '6750.00',
                'itemable_id' => 831,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1636,
                'created_at' => '2025-04-30 23:22:45',
                'updated_at' => '2025-04-30 23:22:45',
            ),
            454 => 
            array (
                'id' => 2044,
                'amount' => '20833.00',
                'itemable_id' => 832,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1637,
                'created_at' => '2025-04-30 23:32:18',
                'updated_at' => '2025-04-30 23:32:18',
            ),
            455 => 
            array (
                'id' => 2045,
                'amount' => '20833.00',
                'itemable_id' => 833,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1637,
                'created_at' => '2025-04-30 23:32:18',
                'updated_at' => '2025-04-30 23:32:18',
            ),
            456 => 
            array (
                'id' => 2046,
                'amount' => '20833.00',
                'itemable_id' => 834,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1637,
                'created_at' => '2025-04-30 23:32:18',
                'updated_at' => '2025-04-30 23:32:18',
            ),
            457 => 
            array (
                'id' => 2047,
                'amount' => '162591.00',
                'itemable_id' => 835,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1638,
                'created_at' => '2025-04-30 23:35:16',
                'updated_at' => '2025-04-30 23:35:16',
            ),
            458 => 
            array (
                'id' => 2048,
                'amount' => '6697.50',
                'itemable_id' => 836,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1639,
                'created_at' => '2025-04-30 23:39:49',
                'updated_at' => '2025-04-30 23:39:49',
            ),
            459 => 
            array (
                'id' => 2049,
                'amount' => '38333.00',
                'itemable_id' => 837,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1640,
                'created_at' => '2025-04-30 23:42:05',
                'updated_at' => '2025-04-30 23:42:05',
            ),
            460 => 
            array (
                'id' => 2050,
                'amount' => '46805.56',
                'itemable_id' => 838,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1641,
                'created_at' => '2025-04-30 23:45:57',
                'updated_at' => '2025-04-30 23:45:57',
            ),
            461 => 
            array (
                'id' => 2051,
                'amount' => '6450.00',
                'itemable_id' => 839,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1642,
                'created_at' => '2025-04-30 23:49:31',
                'updated_at' => '2025-04-30 23:49:31',
            ),
            462 => 
            array (
                'id' => 2052,
                'amount' => '1175.00',
                'itemable_id' => 840,
                'itemable_type' => 'App\\Models\\FinanceItem',
                'op_id' => 1642,
                'created_at' => '2025-04-30 23:49:31',
                'updated_at' => '2025-04-30 23:49:31',
            ),
            463 => 
            array (
                'id' => 2053,
                'amount' => '13200.00',
                'itemable_id' => 1694,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1643,
                'created_at' => '2025-05-02 18:40:11',
                'updated_at' => '2025-05-02 18:40:11',
            ),
            464 => 
            array (
                'id' => 2054,
                'amount' => '42960.00',
                'itemable_id' => 1693,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1643,
                'created_at' => '2025-05-02 18:40:11',
                'updated_at' => '2025-05-02 18:40:11',
            ),
            465 => 
            array (
                'id' => 2055,
                'amount' => '42960.00',
                'itemable_id' => 1691,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1643,
                'created_at' => '2025-05-02 18:40:11',
                'updated_at' => '2025-05-02 18:40:11',
            ),
            466 => 
            array (
                'id' => 2056,
                'amount' => '13200.00',
                'itemable_id' => 1660,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1643,
                'created_at' => '2025-05-02 18:40:11',
                'updated_at' => '2025-05-02 18:40:11',
            ),
            467 => 
            array (
                'id' => 2057,
                'amount' => '42960.00',
                'itemable_id' => 1659,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1643,
                'created_at' => '2025-05-02 18:40:11',
                'updated_at' => '2025-05-02 18:40:11',
            ),
            468 => 
            array (
                'id' => 2058,
                'amount' => '42960.00',
                'itemable_id' => 1658,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1643,
                'created_at' => '2025-05-02 18:40:11',
                'updated_at' => '2025-05-02 18:40:11',
            ),
            469 => 
            array (
                'id' => 2059,
                'amount' => '13200.00',
                'itemable_id' => 1598,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1643,
                'created_at' => '2025-05-02 18:40:11',
                'updated_at' => '2025-05-02 18:40:11',
            ),
            470 => 
            array (
                'id' => 2060,
                'amount' => '42960.00',
                'itemable_id' => 1597,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1643,
                'created_at' => '2025-05-02 18:40:11',
                'updated_at' => '2025-05-02 18:40:11',
            ),
            471 => 
            array (
                'id' => 2061,
                'amount' => '42960.00',
                'itemable_id' => 1596,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1643,
                'created_at' => '2025-05-02 18:40:11',
                'updated_at' => '2025-05-02 18:40:11',
            ),
            472 => 
            array (
                'id' => 2062,
                'amount' => '13200.00',
                'itemable_id' => 1566,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1643,
                'created_at' => '2025-05-02 18:40:11',
                'updated_at' => '2025-05-02 18:40:11',
            ),
            473 => 
            array (
                'id' => 2063,
                'amount' => '42960.00',
                'itemable_id' => 1565,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1643,
                'created_at' => '2025-05-02 18:40:11',
                'updated_at' => '2025-05-02 18:40:11',
            ),
            474 => 
            array (
                'id' => 2064,
                'amount' => '42960.00',
                'itemable_id' => 1564,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1643,
                'created_at' => '2025-05-02 18:40:11',
                'updated_at' => '2025-05-02 18:40:11',
            ),
            475 => 
            array (
                'id' => 2065,
                'amount' => '13200.00',
                'itemable_id' => 1526,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1643,
                'created_at' => '2025-05-02 18:40:11',
                'updated_at' => '2025-05-02 18:40:11',
            ),
            476 => 
            array (
                'id' => 2066,
                'amount' => '42960.00',
                'itemable_id' => 1525,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1643,
                'created_at' => '2025-05-02 18:40:11',
                'updated_at' => '2025-05-02 18:40:11',
            ),
            477 => 
            array (
                'id' => 2067,
                'amount' => '42960.00',
                'itemable_id' => 1524,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1643,
                'created_at' => '2025-05-02 18:40:11',
                'updated_at' => '2025-05-02 18:40:11',
            ),
            478 => 
            array (
                'id' => 2068,
                'amount' => '2500.00',
                'itemable_id' => 1842,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1644,
                'created_at' => '2025-05-02 18:44:18',
                'updated_at' => '2025-05-02 18:44:18',
            ),
            479 => 
            array (
                'id' => 2069,
                'amount' => '1500.00',
                'itemable_id' => 1843,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1645,
                'created_at' => '2025-05-02 19:06:48',
                'updated_at' => '2025-05-02 19:06:48',
            ),
            480 => 
            array (
                'id' => 2070,
                'amount' => '3300.00',
                'itemable_id' => 1844,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1646,
                'created_at' => '2025-05-02 19:23:35',
                'updated_at' => '2025-05-02 19:23:35',
            ),
            481 => 
            array (
                'id' => 2071,
                'amount' => '1400.00',
                'itemable_id' => 1845,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1647,
                'created_at' => '2025-05-02 19:30:28',
                'updated_at' => '2025-05-02 19:30:28',
            ),
            482 => 
            array (
                'id' => 2072,
                'amount' => '7750.00',
                'itemable_id' => 1837,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1648,
                'created_at' => '2025-05-02 19:59:31',
                'updated_at' => '2025-05-02 19:59:31',
            ),
            483 => 
            array (
                'id' => 2073,
                'amount' => '5100.00',
                'itemable_id' => 1833,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1649,
                'created_at' => '2025-05-02 21:18:01',
                'updated_at' => '2025-05-02 21:18:01',
            ),
            484 => 
            array (
                'id' => 2074,
                'amount' => '2050.00',
                'itemable_id' => 1840,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1650,
                'created_at' => '2025-05-02 22:08:18',
                'updated_at' => '2025-05-02 22:08:18',
            ),
            485 => 
            array (
                'id' => 2075,
                'amount' => '500.00',
                'itemable_id' => 1841,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1651,
                'created_at' => '2025-05-02 22:23:47',
                'updated_at' => '2025-05-02 22:23:47',
            ),
            486 => 
            array (
                'id' => 2076,
                'amount' => '2500.00',
                'itemable_id' => 1846,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1652,
                'created_at' => '2025-05-05 16:29:16',
                'updated_at' => '2025-05-05 16:29:16',
            ),
            487 => 
            array (
                'id' => 2077,
                'amount' => '15900.00',
                'itemable_id' => 1834,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1653,
                'created_at' => '2025-05-05 17:34:58',
                'updated_at' => '2025-05-05 17:34:58',
            ),
            488 => 
            array (
                'id' => 2078,
                'amount' => '4750.00',
                'itemable_id' => 1832,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1654,
                'created_at' => '2025-05-05 17:44:17',
                'updated_at' => '2025-05-05 17:44:17',
            ),
            489 => 
            array (
                'id' => 2079,
                'amount' => '550.00',
                'itemable_id' => 1850,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1655,
                'created_at' => '2025-05-05 17:56:51',
                'updated_at' => '2025-05-05 17:56:51',
            ),
            490 => 
            array (
                'id' => 2080,
                'amount' => '500.00',
                'itemable_id' => 1851,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1656,
                'created_at' => '2025-05-05 18:06:41',
                'updated_at' => '2025-05-05 18:06:41',
            ),
            491 => 
            array (
                'id' => 2081,
                'amount' => '1100.00',
                'itemable_id' => 1835,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1657,
                'created_at' => '2025-05-05 18:59:16',
                'updated_at' => '2025-05-05 18:59:16',
            ),
            492 => 
            array (
                'id' => 2082,
                'amount' => '14300.00',
                'itemable_id' => 1836,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1658,
                'created_at' => '2025-05-05 19:31:50',
                'updated_at' => '2025-05-05 19:31:50',
            ),
            493 => 
            array (
                'id' => 2083,
                'amount' => '3650.00',
                'itemable_id' => 1830,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1658,
                'created_at' => '2025-05-05 19:31:50',
                'updated_at' => '2025-05-05 19:31:50',
            ),
            494 => 
            array (
                'id' => 2084,
                'amount' => '3650.00',
                'itemable_id' => 1829,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1658,
                'created_at' => '2025-05-05 19:31:50',
                'updated_at' => '2025-05-05 19:31:50',
            ),
            495 => 
            array (
                'id' => 2085,
                'amount' => '3650.00',
                'itemable_id' => 1828,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1658,
                'created_at' => '2025-05-05 19:31:50',
                'updated_at' => '2025-05-05 19:31:50',
            ),
            496 => 
            array (
                'id' => 2086,
                'amount' => '3300.00',
                'itemable_id' => 1827,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1658,
                'created_at' => '2025-05-05 19:31:50',
                'updated_at' => '2025-05-05 19:31:50',
            ),
            497 => 
            array (
                'id' => 2087,
                'amount' => '3300.00',
                'itemable_id' => 1826,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1658,
                'created_at' => '2025-05-05 19:31:50',
                'updated_at' => '2025-05-05 19:31:50',
            ),
            498 => 
            array (
                'id' => 2088,
                'amount' => '2640.00',
                'itemable_id' => 1853,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1659,
                'created_at' => '2025-05-05 22:12:43',
                'updated_at' => '2025-05-05 22:12:43',
            ),
            499 => 
            array (
                'id' => 2089,
                'amount' => '2100.00',
                'itemable_id' => 1854,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1660,
                'created_at' => '2025-05-05 22:56:13',
                'updated_at' => '2025-05-05 22:56:13',
            ),
        ));
        \DB::table('finance_op_items')->insert(array (
            0 => 
            array (
                'id' => 2090,
                'amount' => '2500.00',
                'itemable_id' => 1852,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1661,
                'created_at' => '2025-05-05 23:00:01',
                'updated_at' => '2025-05-05 23:00:01',
            ),
            1 => 
            array (
                'id' => 2091,
                'amount' => '1500.00',
                'itemable_id' => 1849,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1662,
                'created_at' => '2025-05-05 23:30:07',
                'updated_at' => '2025-05-05 23:30:07',
            ),
            2 => 
            array (
                'id' => 2092,
                'amount' => '6070.00',
                'itemable_id' => 1848,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1662,
                'created_at' => '2025-05-05 23:30:07',
                'updated_at' => '2025-05-05 23:30:07',
            ),
            3 => 
            array (
                'id' => 2093,
                'amount' => '1650.00',
                'itemable_id' => 1847,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1662,
                'created_at' => '2025-05-05 23:30:07',
                'updated_at' => '2025-05-05 23:30:07',
            ),
            4 => 
            array (
                'id' => 2094,
                'amount' => '1500.00',
                'itemable_id' => 1789,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1662,
                'created_at' => '2025-05-05 23:30:07',
                'updated_at' => '2025-05-05 23:30:07',
            ),
            5 => 
            array (
                'id' => 2095,
                'amount' => '6070.00',
                'itemable_id' => 1788,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1662,
                'created_at' => '2025-05-05 23:30:07',
                'updated_at' => '2025-05-05 23:30:07',
            ),
            6 => 
            array (
                'id' => 2096,
                'amount' => '1650.00',
                'itemable_id' => 1787,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1662,
                'created_at' => '2025-05-05 23:30:07',
                'updated_at' => '2025-05-05 23:30:07',
            ),
            7 => 
            array (
                'id' => 2097,
                'amount' => '6070.00',
                'itemable_id' => 1838,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1663,
                'created_at' => '2025-05-05 23:49:01',
                'updated_at' => '2025-05-05 23:49:01',
            ),
            8 => 
            array (
                'id' => 2098,
                'amount' => '1500.00',
                'itemable_id' => 1839,
                'itemable_type' => 'App\\Models\\Tsr',
                'op_id' => 1664,
                'created_at' => '2025-05-05 23:49:24',
                'updated_at' => '2025-05-05 23:49:24',
            ),
        ));

        
    }
}