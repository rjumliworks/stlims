<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FinanceItemsTableSeeder extends Seeder
{
    /**
     * Auto generated seeder file.
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('finance_items')->delete();
        
        \DB::table('finance_items')->insert(array (
            0 => 
            array (
                'id' => 1,
                'amount' => '950.00',
                'name' => 'Refund of Excess CA Travel',
                'created_at' => '2024-08-19 16:47:56',
                'updated_at' => '2024-08-19 16:47:56',
            ),
            1 => 
            array (
                'id' => 2,
                'amount' => '464.00',
                'name' => 'Refund of Excess CA',
                'created_at' => '2024-08-19 16:50:43',
                'updated_at' => '2024-08-19 16:50:43',
            ),
            2 => 
            array (
                'id' => 3,
                'amount' => '69445.00',
                'name' => 'For the month of July 2024',
                'created_at' => '2024-08-19 16:53:11',
                'updated_at' => '2024-08-19 16:53:11',
            ),
            3 => 
            array (
                'id' => 15,
                'amount' => '4867500.00',
                'name' => 'Stipend and allowances for the Scholars',
                'created_at' => '2024-08-20 00:24:43',
                'updated_at' => '2024-08-20 00:24:43',
            ),
            4 => 
            array (
                'id' => 16,
                'amount' => '1050.00',
                'name' => 'Aug. 16-17, 2024',
                'created_at' => '2024-08-31 22:28:38',
                'updated_at' => '2024-08-31 22:28:38',
            ),
            5 => 
            array (
                'id' => 17,
                'amount' => '1050.00',
                'name' => 'Aug. 16-17, 2024',
                'created_at' => '2024-08-31 22:29:00',
                'updated_at' => '2024-08-31 22:29:00',
            ),
            6 => 
            array (
                'id' => 18,
                'amount' => '1100.00',
                'name' => 'R9-022019-MIC-0096',
                'created_at' => '2024-08-31 22:32:45',
                'updated_at' => '2024-08-31 22:32:45',
            ),
            7 => 
            array (
                'id' => 19,
                'amount' => '17366.67',
                'name' => 'FOR THE MONTH OF JUN 2024',
                'created_at' => '2024-09-01 00:12:33',
                'updated_at' => '2024-09-01 00:12:33',
            ),
            8 => 
            array (
                'id' => 20,
                'amount' => '17366.67',
                'name' => 'FOR THE MONTH OF JUL 2024',
                'created_at' => '2024-09-01 00:12:33',
                'updated_at' => '2024-09-01 00:12:33',
            ),
            9 => 
            array (
                'id' => 21,
                'amount' => '9558.00',
                'name' => 'FOR THE MONTH OF JUL 2024',
                'created_at' => '2024-09-01 00:14:46',
                'updated_at' => '2024-09-01 00:14:46',
            ),
            10 => 
            array (
                'id' => 23,
                'amount' => '82778.00',
                'name' => 'FOR THE MONTH OF JUL 2024',
                'created_at' => '2024-09-01 00:17:18',
                'updated_at' => '2024-09-01 00:17:18',
            ),
            11 => 
            array (
                'id' => 31,
                'amount' => '78270.00',
                'name' => 'FOR THE MONTH OF JUL 2024',
                'created_at' => '2024-09-01 01:01:01',
                'updated_at' => '2024-09-01 01:01:01',
            ),
            12 => 
            array (
                'id' => 32,
                'amount' => '41666.67',
                'name' => 'FOR THE MONTH OF JUL 2024',
                'created_at' => '2024-09-01 01:02:23',
                'updated_at' => '2024-09-01 01:02:23',
            ),
            13 => 
            array (
                'id' => 33,
                'amount' => '13423.00',
                'name' => 'FOR THE MONTH OF JAN 2023',
                'created_at' => '2024-09-01 01:03:21',
                'updated_at' => '2024-09-01 01:03:21',
            ),
            14 => 
            array (
                'id' => 36,
                'amount' => '20833.00',
                'name' => 'FOR THE MONTH OF MAY 2024',
                'created_at' => '2024-09-01 01:05:36',
                'updated_at' => '2024-09-01 01:05:36',
            ),
            15 => 
            array (
                'id' => 37,
                'amount' => '20833.00',
                'name' => 'FOR THE MONTH OF JUN 2024',
                'created_at' => '2024-09-01 01:05:36',
                'updated_at' => '2024-09-01 01:05:36',
            ),
            16 => 
            array (
                'id' => 39,
                'amount' => '69445.00',
                'name' => 'FOR THE MONTH OF JUL 2024',
                'created_at' => '2024-09-01 01:11:00',
                'updated_at' => '2024-09-01 01:11:00',
            ),
            17 => 
            array (
                'id' => 40,
                'amount' => '30000.00',
                'name' => 'FOR THE MONTH OF JUL 2024',
                'created_at' => '2024-09-01 01:11:42',
                'updated_at' => '2024-09-01 01:11:42',
            ),
            18 => 
            array (
                'id' => 41,
                'amount' => '83334.00',
                'name' => 'FOR THE MONTH OF JUL 2024',
                'created_at' => '2024-09-01 01:12:35',
                'updated_at' => '2024-09-01 01:12:35',
            ),
            19 => 
            array (
                'id' => 43,
                'amount' => '79861.11',
                'name' => 'FOR THE MONTH OF JUL 2024',
                'created_at' => '2024-09-01 01:14:01',
                'updated_at' => '2024-09-01 01:14:01',
            ),
            20 => 
            array (
                'id' => 44,
                'amount' => '27381.67',
                'name' => 'FOR THE MONTH OF JUL 2024',
                'created_at' => '2024-09-01 01:15:34',
                'updated_at' => '2024-09-01 01:15:34',
            ),
            21 => 
            array (
                'id' => 45,
                'amount' => '38333.00',
                'name' => 'FOR THE MONTH OF JUL 2024',
                'created_at' => '2024-09-01 01:16:20',
                'updated_at' => '2024-09-01 01:16:20',
            ),
            22 => 
            array (
                'id' => 47,
                'amount' => '6944.44',
                'name' => 'FOR THE MONTH OF JUL 2024',
                'created_at' => '2024-09-01 01:17:38',
                'updated_at' => '2024-09-01 01:17:38',
            ),
            23 => 
            array (
                'id' => 51,
                'amount' => '42500.00',
                'name' => 'FOR THE MONTH OF APR 2024',
                'created_at' => '2024-09-01 01:19:24',
                'updated_at' => '2024-09-01 01:19:24',
            ),
            24 => 
            array (
                'id' => 52,
                'amount' => '42500.00',
                'name' => 'FOR THE MONTH OF MAY 2024',
                'created_at' => '2024-09-01 01:19:24',
                'updated_at' => '2024-09-01 01:19:24',
            ),
            25 => 
            array (
                'id' => 53,
                'amount' => '42500.00',
                'name' => 'FOR THE MONTH OF JUN 2024',
                'created_at' => '2024-09-01 01:19:24',
                'updated_at' => '2024-09-01 01:19:24',
            ),
            26 => 
            array (
                'id' => 54,
                'amount' => '17777.78',
                'name' => 'FOR THE MONTH OF MAY 2024',
                'created_at' => '2024-09-01 01:23:31',
                'updated_at' => '2024-09-01 01:23:31',
            ),
            27 => 
            array (
                'id' => 55,
                'amount' => '17777.78',
                'name' => 'FOR THE MONTH OF JUNE 2024',
                'created_at' => '2024-09-01 01:23:31',
                'updated_at' => '2024-09-01 01:23:31',
            ),
            28 => 
            array (
                'id' => 56,
                'amount' => '61112.00',
                'name' => 'FOR THE MONTH OF MAY 2024',
                'created_at' => '2024-09-01 01:25:24',
                'updated_at' => '2024-09-01 01:25:24',
            ),
            29 => 
            array (
                'id' => 57,
                'amount' => '61112.00',
                'name' => 'FOR THE MONTH OF JUNE 2024',
                'created_at' => '2024-09-01 01:25:24',
                'updated_at' => '2024-09-01 01:25:24',
            ),
            30 => 
            array (
                'id' => 60,
                'amount' => '35833.33',
                'name' => 'FOR THE MONTH OF MAY 2024',
                'created_at' => '2024-09-01 01:27:31',
                'updated_at' => '2024-09-01 01:27:31',
            ),
            31 => 
            array (
                'id' => 61,
                'amount' => '35833.33',
                'name' => 'FOR THE MONTH OF JUNE 2024',
                'created_at' => '2024-09-01 01:27:31',
                'updated_at' => '2024-09-01 01:27:31',
            ),
            32 => 
            array (
                'id' => 62,
                'amount' => '35834.00',
                'name' => 'FOR THE MONTH OF MAY 2024',
                'created_at' => '2024-09-01 01:36:51',
                'updated_at' => '2024-09-01 01:36:51',
            ),
            33 => 
            array (
                'id' => 63,
                'amount' => '35834.00',
                'name' => 'FOR THE MONTH OF JUN 2024',
                'created_at' => '2024-09-01 01:36:51',
                'updated_at' => '2024-09-01 01:36:51',
            ),
            34 => 
            array (
                'id' => 64,
                'amount' => '43333.33',
                'name' => 'FOR THE MONTH OF JUN 2024',
                'created_at' => '2024-09-01 01:40:31',
                'updated_at' => '2024-09-01 01:40:31',
            ),
            35 => 
            array (
                'id' => 65,
                'amount' => '43333.33',
                'name' => 'FOR THE MONTH OF JUL 2024',
                'created_at' => '2024-09-01 01:40:31',
                'updated_at' => '2024-09-01 01:40:31',
            ),
            36 => 
            array (
                'id' => 66,
                'amount' => '100000.00',
                'name' => 'FOR THE MONTH OF JAN 2024',
                'created_at' => '2024-09-01 01:43:36',
                'updated_at' => '2024-09-01 01:43:36',
            ),
            37 => 
            array (
                'id' => 68,
                'amount' => '9065.00',
                'name' => 'FOR THE MONTH OF JUL 2024',
                'created_at' => '2024-09-01 01:45:53',
                'updated_at' => '2024-09-01 01:45:53',
            ),
            38 => 
            array (
                'id' => 69,
                'amount' => '27777.00',
                'name' => 'FOR THE MONTH OF JUN 2024',
                'created_at' => '2024-09-01 01:46:44',
                'updated_at' => '2024-09-01 01:46:44',
            ),
            39 => 
            array (
                'id' => 70,
                'amount' => '9691.00',
                'name' => 'FOR THE MONTH OF JUL 2024',
                'created_at' => '2024-09-01 01:47:37',
                'updated_at' => '2024-09-01 01:47:37',
            ),
            40 => 
            array (
                'id' => 71,
                'amount' => '12639.00',
                'name' => 'FOR THE MONTH OF JAN 2024',
                'created_at' => '2024-09-01 01:49:06',
                'updated_at' => '2024-09-01 01:49:06',
            ),
            41 => 
            array (
                'id' => 72,
                'amount' => '12639.00',
                'name' => 'FOR THE MONTH OF FEB 2024',
                'created_at' => '2024-09-01 01:49:06',
                'updated_at' => '2024-09-01 01:49:06',
            ),
            42 => 
            array (
                'id' => 73,
                'amount' => '12639.00',
                'name' => 'FOR THE MONTH OF MAR 2024',
                'created_at' => '2024-09-01 01:49:06',
                'updated_at' => '2024-09-01 01:49:06',
            ),
            43 => 
            array (
                'id' => 74,
                'amount' => '26445.00',
                'name' => 'FOR THE MONTH OF JUL 2024',
                'created_at' => '2024-09-01 01:51:13',
                'updated_at' => '2024-09-01 01:51:13',
            ),
            44 => 
            array (
                'id' => 75,
                'amount' => '38889.00',
                'name' => 'FOR THE MONTH OF MAY 2023',
                'created_at' => '2024-09-01 01:53:00',
                'updated_at' => '2024-09-01 01:53:00',
            ),
            45 => 
            array (
                'id' => 76,
                'amount' => '38889.00',
                'name' => 'FOR THE MONTH OF JUN 2023',
                'created_at' => '2024-09-01 01:53:00',
                'updated_at' => '2024-09-01 01:53:00',
            ),
            46 => 
            array (
                'id' => 77,
                'amount' => '14390.00',
                'name' => 'FOR THE MONTH OF JUL 2024',
                'created_at' => '2024-09-01 01:55:05',
                'updated_at' => '2024-09-01 01:55:05',
            ),
            47 => 
            array (
                'id' => 79,
                'amount' => '16080.00',
                'name' => 'FOR THE MONTH OF APR 2024',
                'created_at' => '2024-09-01 01:56:24',
                'updated_at' => '2024-09-01 01:56:24',
            ),
            48 => 
            array (
                'id' => 80,
                'amount' => '7139.00',
                'name' => 'FOR THE MONTH OF DEC 2023',
                'created_at' => '2024-09-01 01:57:11',
                'updated_at' => '2024-09-01 01:57:11',
            ),
            49 => 
            array (
                'id' => 81,
                'amount' => '16695.00',
                'name' => 'FOR THE MONTH OF DEC 2023',
                'created_at' => '2024-09-01 01:58:28',
                'updated_at' => '2024-09-01 01:58:28',
            ),
            50 => 
            array (
                'id' => 82,
                'amount' => '47445.00',
                'name' => 'FOR THE MONTH OF JUL 2024',
                'created_at' => '2024-09-01 01:59:15',
                'updated_at' => '2024-09-01 01:59:15',
            ),
            51 => 
            array (
                'id' => 84,
                'amount' => '16116.00',
                'name' => 'FOR THE MONTH OF JUL 2024',
                'created_at' => '2024-09-01 02:03:00',
                'updated_at' => '2024-09-01 02:03:00',
            ),
            52 => 
            array (
                'id' => 85,
                'amount' => '30834.00',
                'name' => 'FOR THE MONTH OF MAY 2024',
                'created_at' => '2024-09-01 02:03:44',
                'updated_at' => '2024-09-01 02:03:44',
            ),
            53 => 
            array (
                'id' => 86,
                'amount' => '15252.00',
                'name' => 'FOR THE MONTH OF JUL 2024',
                'created_at' => '2024-09-01 02:04:31',
                'updated_at' => '2024-09-01 02:04:31',
            ),
            54 => 
            array (
                'id' => 87,
                'amount' => '138890.00',
                'name' => 'For the Month of Aug 2024',
                'created_at' => '2024-09-01 02:14:00',
                'updated_at' => '2024-09-01 02:14:00',
            ),
            55 => 
            array (
                'id' => 88,
                'amount' => '9629.25',
                'name' => 'Refund of Excess CA',
                'created_at' => '2024-09-06 17:05:30',
                'updated_at' => '2024-09-06 17:05:30',
            ),
            56 => 
            array (
                'id' => 89,
                'amount' => '3700.00',
                'name' => 'Refund of Excess CA Travel',
                'created_at' => '2024-09-06 18:21:52',
                'updated_at' => '2024-09-06 18:21:52',
            ),
            57 => 
            array (
                'id' => 90,
                'amount' => '3000.00',
                'name' => 'FOR THE MONTH OF JUNE 2018',
                'created_at' => '2024-09-11 17:53:40',
                'updated_at' => '2024-09-11 17:53:40',
            ),
            58 => 
            array (
                'id' => 91,
                'amount' => '3668.00',
                'name' => 'FOR THE MONTH OF JAN 2023',
                'created_at' => '2024-09-11 18:07:02',
                'updated_at' => '2024-09-11 18:07:02',
            ),
            59 => 
            array (
                'id' => 92,
                'amount' => '10917.00',
                'name' => 'FOR THE MONTH OF FEB 2026',
                'created_at' => '2024-09-11 18:07:02',
                'updated_at' => '2024-09-11 18:07:02',
            ),
            60 => 
            array (
                'id' => 93,
                'amount' => '5415.00',
                'name' => 'FOR THE MONTH OF MARCH PARTIAL',
                'created_at' => '2024-09-11 18:07:02',
                'updated_at' => '2024-09-11 18:07:02',
            ),
            61 => 
            array (
                'id' => 94,
                'amount' => '330.00',
                'name' => 'NPSC September 03-06, 2024',
                'created_at' => '2024-09-12 19:39:24',
                'updated_at' => '2024-09-12 19:39:24',
            ),
            62 => 
            array (
                'id' => 95,
                'amount' => '450.00',
                'name' => 'Refund of Travel NPSC 24',
                'created_at' => '2024-09-12 19:41:57',
                'updated_at' => '2024-09-12 19:41:57',
            ),
            63 => 
            array (
                'id' => 96,
                'amount' => '330.00',
                'name' => 'Refund of Travel NPSC 24',
                'created_at' => '2024-09-12 19:43:56',
                'updated_at' => '2024-09-12 19:43:56',
            ),
            64 => 
            array (
                'id' => 97,
                'amount' => '330.00',
                'name' => 'Refund of Travel NPSC 24',
                'created_at' => '2024-09-12 19:45:22',
                'updated_at' => '2024-09-12 19:45:22',
            ),
            65 => 
            array (
                'id' => 98,
                'amount' => '330.00',
                'name' => 'Refund of Travel NPSC 24',
                'created_at' => '2024-09-12 19:46:12',
                'updated_at' => '2024-09-12 19:46:12',
            ),
            66 => 
            array (
                'id' => 99,
                'amount' => '330.00',
                'name' => 'Refund of Travel NPSC 24',
                'created_at' => '2024-09-12 19:47:23',
                'updated_at' => '2024-09-12 19:47:23',
            ),
            67 => 
            array (
                'id' => 100,
                'amount' => '69445.00',
                'name' => 'For the Month of September 2024',
                'created_at' => '2024-09-12 23:34:43',
                'updated_at' => '2024-09-12 23:34:43',
            ),
            68 => 
            array (
                'id' => 101,
                'amount' => '645.08',
                'name' => 'Refund of excess CA',
                'created_at' => '2024-09-18 22:39:56',
                'updated_at' => '2024-09-18 22:39:56',
            ),
            69 => 
            array (
                'id' => 102,
                'amount' => '2000.00',
                'name' => 'FOR THE MONTH OF APRIL 2022',
                'created_at' => '2024-09-23 17:04:45',
                'updated_at' => '2024-09-23 17:04:45',
            ),
            70 => 
            array (
                'id' => 103,
                'amount' => '450.00',
                'name' => 'Refund of Travel NPSC 24',
                'created_at' => '2024-09-23 17:34:15',
                'updated_at' => '2024-09-23 17:34:15',
            ),
            71 => 
            array (
                'id' => 104,
                'amount' => '330.00',
                'name' => 'Refund of Travel NPSC 24',
                'created_at' => '2024-09-23 17:37:09',
                'updated_at' => '2024-09-23 17:37:09',
            ),
            72 => 
            array (
                'id' => 105,
                'amount' => '450.00',
                'name' => 'Refund of Travel NPSC 24',
                'created_at' => '2024-09-23 17:42:02',
                'updated_at' => '2024-09-23 17:42:02',
            ),
            73 => 
            array (
                'id' => 106,
                'amount' => '330.00',
                'name' => 'Refund of Travel NPSC 24',
                'created_at' => '2024-09-23 17:46:20',
                'updated_at' => '2024-09-23 17:46:20',
            ),
            74 => 
            array (
                'id' => 107,
                'amount' => '414.64',
                'name' => 'Excess amount in Loan realignment',
                'created_at' => '2024-09-24 21:56:00',
                'updated_at' => '2024-09-24 21:56:00',
            ),
            75 => 
            array (
                'id' => 108,
                'amount' => '330.00',
                'name' => 'NPSC September 03-06, 2024',
                'created_at' => '2024-09-26 00:37:44',
                'updated_at' => '2024-09-26 00:37:44',
            ),
            76 => 
            array (
                'id' => 109,
                'amount' => '450.00',
                'name' => 'NPSC September 03-06, 2024',
                'created_at' => '2024-09-26 00:41:10',
                'updated_at' => '2024-09-26 00:41:10',
            ),
            77 => 
            array (
                'id' => 110,
                'amount' => '450.00',
                'name' => 'NPSC September 03-06, 2024',
                'created_at' => '2024-09-26 00:42:07',
                'updated_at' => '2024-09-26 00:42:07',
            ),
            78 => 
            array (
                'id' => 111,
                'amount' => '450.00',
                'name' => 'NPSC September 03-06, 2024',
                'created_at' => '2024-09-26 00:42:43',
                'updated_at' => '2024-09-26 00:42:43',
            ),
            79 => 
            array (
                'id' => 112,
                'amount' => '970.00',
                'name' => 'NPSC September 03-06, 2024',
                'created_at' => '2024-09-26 00:43:22',
                'updated_at' => '2024-09-26 00:43:22',
            ),
            80 => 
            array (
                'id' => 113,
                'amount' => '330.00',
                'name' => 'NPSC September 03-06, 2024',
                'created_at' => '2024-09-26 00:45:54',
                'updated_at' => '2024-09-26 00:45:54',
            ),
            81 => 
            array (
                'id' => 114,
                'amount' => '330.00',
                'name' => 'NPSC September 03-06, 2024',
                'created_at' => '2024-09-26 00:46:37',
                'updated_at' => '2024-09-26 00:46:37',
            ),
            82 => 
            array (
                'id' => 115,
                'amount' => '450.00',
                'name' => 'NPSC September 03-06, 2024',
                'created_at' => '2024-09-26 00:47:15',
                'updated_at' => '2024-09-26 00:47:15',
            ),
            83 => 
            array (
                'id' => 116,
                'amount' => '2889.15',
                'name' => 'Excess of CA',
                'created_at' => '2024-09-26 19:00:12',
                'updated_at' => '2024-09-26 19:00:12',
            ),
            84 => 
            array (
                'id' => 117,
                'amount' => '156945.00',
                'name' => 'FOR THE MONTH OF MAR 2024-JUL 2024',
                'created_at' => '2024-09-30 18:02:15',
                'updated_at' => '2024-09-30 18:02:15',
            ),
            85 => 
            array (
                'id' => 118,
                'amount' => '8336.00',
                'name' => 'FOR THE MONTH OF SEP-FULL PAYMENT',
                'created_at' => '2024-09-30 18:18:30',
                'updated_at' => '2024-09-30 18:18:30',
            ),
            86 => 
            array (
                'id' => 119,
                'amount' => '21664.00',
                'name' => 'FOR THE MONTH OF OCT-PARTIAL PAYMENT',
                'created_at' => '2024-09-30 18:18:30',
                'updated_at' => '2024-09-30 18:18:30',
            ),
            87 => 
            array (
                'id' => 120,
                'amount' => '13423.00',
                'name' => 'FOR THE MONTH OF FEB 2023',
                'created_at' => '2024-09-30 18:23:44',
                'updated_at' => '2024-09-30 18:23:44',
            ),
            88 => 
            array (
                'id' => 121,
                'amount' => '41666.67',
                'name' => 'FOR THE MONTH OF AUG 2024',
                'created_at' => '2024-09-30 18:27:32',
                'updated_at' => '2024-09-30 18:27:32',
            ),
            89 => 
            array (
                'id' => 122,
                'amount' => '82770.00',
                'name' => 'FOR THE MONTH OF AUG 2024',
                'created_at' => '2024-09-30 18:30:05',
                'updated_at' => '2024-09-30 18:30:05',
            ),
            90 => 
            array (
                'id' => 123,
                'amount' => '9558.00',
                'name' => 'FOR THE MONTH OF AUG 2024',
                'created_at' => '2024-09-30 18:32:36',
                'updated_at' => '2024-09-30 18:32:36',
            ),
            91 => 
            array (
                'id' => 124,
                'amount' => '15612.00',
                'name' => 'FOR THE MONTH OF JUN 2024',
                'created_at' => '2024-09-30 18:37:46',
                'updated_at' => '2024-09-30 18:37:46',
            ),
            92 => 
            array (
                'id' => 125,
                'amount' => '39167.00',
                'name' => 'FOR THE MONTH OF JUN 2024',
                'created_at' => '2024-09-30 18:40:19',
                'updated_at' => '2024-09-30 18:40:19',
            ),
            93 => 
            array (
                'id' => 126,
                'amount' => '79689.00',
                'name' => 'FOR THE MONTH OF JUN 2024',
                'created_at' => '2024-09-30 18:42:42',
                'updated_at' => '2024-09-30 18:42:42',
            ),
            94 => 
            array (
                'id' => 127,
                'amount' => '38333.00',
                'name' => 'FOR THE MONTH OF JUN 2024',
                'created_at' => '2024-09-30 18:49:20',
                'updated_at' => '2024-09-30 18:49:20',
            ),
            95 => 
            array (
                'id' => 128,
                'amount' => '33195.00',
                'name' => 'FOR THE MONTH OF JUN 2024',
                'created_at' => '2024-09-30 18:51:34',
                'updated_at' => '2024-09-30 18:51:34',
            ),
            96 => 
            array (
                'id' => 129,
                'amount' => '8770.00',
                'name' => 'FOR THE MONTH OF JUN 2024',
                'created_at' => '2024-09-30 18:53:37',
                'updated_at' => '2024-09-30 18:53:37',
            ),
            97 => 
            array (
                'id' => 130,
                'amount' => '37500.00',
                'name' => 'FOR THE MONTH OF JUN 2024',
                'created_at' => '2024-09-30 18:55:08',
                'updated_at' => '2024-09-30 18:55:08',
            ),
            98 => 
            array (
                'id' => 131,
                'amount' => '21667.00',
                'name' => 'FOR THE MONTH OF JUN 2024',
                'created_at' => '2024-09-30 18:56:58',
                'updated_at' => '2024-09-30 18:56:58',
            ),
            99 => 
            array (
                'id' => 132,
                'amount' => '42916.67',
                'name' => 'FOR THE MONTH OF JUN 2024',
                'created_at' => '2024-09-30 18:59:16',
                'updated_at' => '2024-09-30 18:59:16',
            ),
            100 => 
            array (
                'id' => 133,
                'amount' => '41667.00',
                'name' => 'FOR THE MONTH OF JUN 2024',
                'created_at' => '2024-09-30 19:01:01',
                'updated_at' => '2024-09-30 19:01:01',
            ),
            101 => 
            array (
                'id' => 134,
                'amount' => '16080.00',
                'name' => 'FOR THE MONTH OF MAY 2024',
                'created_at' => '2024-09-30 19:07:48',
                'updated_at' => '2024-09-30 19:07:48',
            ),
            102 => 
            array (
                'id' => 135,
                'amount' => '7139.00',
                'name' => 'FOR THE MONTH OF JAN 2024',
                'created_at' => '2024-09-30 19:14:08',
                'updated_at' => '2024-09-30 19:14:08',
            ),
            103 => 
            array (
                'id' => 136,
                'amount' => '26445.00',
                'name' => 'FOR THE MONTH OF AUG 2024',
                'created_at' => '2024-09-30 19:16:28',
                'updated_at' => '2024-09-30 19:16:28',
            ),
            104 => 
            array (
                'id' => 137,
                'amount' => '10329.00',
                'name' => 'FOR THE MONTH OF AUG 2024',
                'created_at' => '2024-09-30 19:18:42',
                'updated_at' => '2024-09-30 19:18:42',
            ),
            105 => 
            array (
                'id' => 138,
                'amount' => '14390.00',
                'name' => 'FOR THE MONTH OF AUG 2024',
                'created_at' => '2024-09-30 19:22:00',
                'updated_at' => '2024-09-30 19:22:00',
            ),
            106 => 
            array (
                'id' => 139,
                'amount' => '9065.00',
                'name' => 'FOR THE MONTH OF AUG 2024',
                'created_at' => '2024-09-30 19:24:20',
                'updated_at' => '2024-09-30 19:24:20',
            ),
            107 => 
            array (
                'id' => 140,
                'amount' => '27777.00',
                'name' => 'FOR THE MONTH OF JUL 2024',
                'created_at' => '2024-09-30 19:29:04',
                'updated_at' => '2024-09-30 19:29:04',
            ),
            108 => 
            array (
                'id' => 141,
                'amount' => '12639.00',
                'name' => 'FOR THE MONTH OF APR 2024',
                'created_at' => '2024-09-30 19:31:17',
                'updated_at' => '2024-09-30 19:31:17',
            ),
            109 => 
            array (
                'id' => 142,
                'amount' => '16695.00',
                'name' => 'FOR THE MONTH OF AUG 2024',
                'created_at' => '2024-09-30 19:34:22',
                'updated_at' => '2024-09-30 19:34:22',
            ),
            110 => 
            array (
                'id' => 143,
                'amount' => '47445.00',
                'name' => 'FOR THE MONTH OF AUG 2024',
                'created_at' => '2024-09-30 19:37:20',
                'updated_at' => '2024-09-30 19:37:20',
            ),
            111 => 
            array (
                'id' => 144,
                'amount' => '21167.00',
                'name' => 'FOR THE MONTH OF AUG 2024',
                'created_at' => '2024-09-30 19:39:57',
                'updated_at' => '2024-09-30 19:39:57',
            ),
            112 => 
            array (
                'id' => 145,
                'amount' => '16116.00',
                'name' => 'FOR THE MONTH OF AUG 2024',
                'created_at' => '2024-09-30 19:48:55',
                'updated_at' => '2024-09-30 19:48:55',
            ),
            113 => 
            array (
                'id' => 146,
                'amount' => '38888.00',
                'name' => 'FOR THE MONTH OF APR 2024',
                'created_at' => '2024-09-30 19:51:38',
                'updated_at' => '2024-09-30 19:51:38',
            ),
            114 => 
            array (
                'id' => 147,
                'amount' => '30834.00',
                'name' => 'FOR THE MONTH OF JUN 2024',
                'created_at' => '2024-09-30 19:55:23',
                'updated_at' => '2024-09-30 19:55:23',
            ),
            115 => 
            array (
                'id' => 148,
                'amount' => '15252.00',
                'name' => 'FOR THE MONTH OF AUG 2024',
                'created_at' => '2024-09-30 19:57:47',
                'updated_at' => '2024-09-30 19:57:47',
            ),
            116 => 
            array (
                'id' => 149,
                'amount' => '85556.00',
            'name' => 'FOR THE MONTH OF APR 2024-MAY 2024 (100364)',
                'created_at' => '2024-09-30 21:29:50',
                'updated_at' => '2024-09-30 21:29:50',
            ),
            117 => 
            array (
                'id' => 150,
                'amount' => '42778.00',
            'name' => 'FOR THE MONTH OF JUN 2024 (100353)',
                'created_at' => '2024-09-30 21:29:50',
                'updated_at' => '2024-09-30 21:29:50',
            ),
            118 => 
            array (
                'id' => 151,
                'amount' => '42778.00',
            'name' => 'FOR THE MONTH OF JUL 2024 (100354)',
                'created_at' => '2024-09-30 21:29:50',
                'updated_at' => '2024-09-30 21:29:50',
            ),
            119 => 
            array (
                'id' => 152,
                'amount' => '42778.00',
            'name' => 'FOR THE MONTH OF AUG 2024 (100355)',
                'created_at' => '2024-09-30 21:29:50',
                'updated_at' => '2024-09-30 21:29:50',
            ),
            120 => 
            array (
                'id' => 153,
                'amount' => '42500.00',
                'name' => 'FOR THE MONTH OF JUL 2024',
                'created_at' => '2024-09-30 21:46:20',
                'updated_at' => '2024-09-30 21:46:20',
            ),
            121 => 
            array (
                'id' => 154,
                'amount' => '56112.00',
                'name' => 'FOR THE MONTH OF JUN 2023',
                'created_at' => '2024-09-30 21:49:45',
                'updated_at' => '2024-09-30 21:49:45',
            ),
            122 => 
            array (
                'id' => 155,
                'amount' => '56112.00',
                'name' => 'FOR THE MONTH OF JUL 2023',
                'created_at' => '2024-09-30 21:49:45',
                'updated_at' => '2024-09-30 21:49:45',
            ),
            123 => 
            array (
                'id' => 156,
                'amount' => '17777.78',
                'name' => 'FOR THE MONTH OF JUL 2024',
                'created_at' => '2024-09-30 21:52:57',
                'updated_at' => '2024-09-30 21:52:57',
            ),
            124 => 
            array (
                'id' => 157,
                'amount' => '61112.00',
                'name' => 'FOR THE MONTH OF JUL 2024',
                'created_at' => '2024-09-30 21:58:39',
                'updated_at' => '2024-09-30 21:58:39',
            ),
            125 => 
            array (
                'id' => 158,
                'amount' => '61112.00',
                'name' => 'FOR THE MONTH OF AUG 2024',
                'created_at' => '2024-09-30 21:58:39',
                'updated_at' => '2024-09-30 21:58:39',
            ),
            126 => 
            array (
                'id' => 159,
                'amount' => '35833.33',
                'name' => 'FOR THE MONTH OF JUL 2024',
                'created_at' => '2024-09-30 22:02:13',
                'updated_at' => '2024-09-30 22:02:13',
            ),
            127 => 
            array (
                'id' => 160,
                'amount' => '35833.33',
                'name' => 'FOR THE MONTH OF AUG 2024',
                'created_at' => '2024-09-30 22:02:13',
                'updated_at' => '2024-09-30 22:02:13',
            ),
            128 => 
            array (
                'id' => 161,
                'amount' => '43333.33',
                'name' => 'FOR THE MONTH OF AUG 2024',
                'created_at' => '2024-09-30 22:05:22',
                'updated_at' => '2024-09-30 22:05:22',
            ),
            129 => 
            array (
                'id' => 162,
                'amount' => '30000.00',
                'name' => 'FOR THE MONTH OF AUG 2024',
                'created_at' => '2024-09-30 22:16:16',
                'updated_at' => '2024-09-30 22:16:16',
            ),
            130 => 
            array (
                'id' => 163,
                'amount' => '83333.33',
                'name' => 'FOR THE MONTH OF AUG 2024',
                'created_at' => '2024-09-30 22:28:00',
                'updated_at' => '2024-09-30 22:28:00',
            ),
            131 => 
            array (
                'id' => 164,
                'amount' => '17667.67',
                'name' => 'FOR THE MONTH OF AUG 2024',
                'created_at' => '2024-09-30 22:29:46',
                'updated_at' => '2024-09-30 22:29:46',
            ),
            132 => 
            array (
                'id' => 165,
                'amount' => '18334.00',
                'name' => 'FOR THE MONTH OF AUG 2024',
                'created_at' => '2024-09-30 22:31:50',
                'updated_at' => '2024-09-30 22:31:50',
            ),
            133 => 
            array (
                'id' => 166,
                'amount' => '31527.00',
                'name' => 'FOR THE MONTH OF AUG 2024',
                'created_at' => '2024-09-30 22:33:41',
                'updated_at' => '2024-09-30 22:33:41',
            ),
            134 => 
            array (
                'id' => 167,
                'amount' => '83334.00',
                'name' => 'FOR THE MONTH OF AUG 2024',
                'created_at' => '2024-09-30 22:35:29',
                'updated_at' => '2024-09-30 22:35:29',
            ),
            135 => 
            array (
                'id' => 168,
                'amount' => '8770.00',
                'name' => 'FOR THE MONTH OF JUL 2024',
                'created_at' => '2024-09-30 22:37:49',
                'updated_at' => '2024-09-30 22:37:49',
            ),
            136 => 
            array (
                'id' => 169,
                'amount' => '79861.11',
                'name' => 'FOR THE MONTH OF AUG 2024',
                'created_at' => '2024-09-30 22:40:32',
                'updated_at' => '2024-09-30 22:40:32',
            ),
            137 => 
            array (
                'id' => 170,
                'amount' => '37500.00',
                'name' => 'FOR THE MONTH OF MAY 2024',
                'created_at' => '2024-09-30 22:44:38',
                'updated_at' => '2024-09-30 22:44:38',
            ),
            138 => 
            array (
                'id' => 171,
                'amount' => '15612.00',
                'name' => 'FOR THE MONTH OF MAY 2024',
                'created_at' => '2024-09-30 22:50:16',
                'updated_at' => '2024-09-30 22:50:16',
            ),
            139 => 
            array (
                'id' => 172,
                'amount' => '27381.67',
                'name' => 'FOR THE MONTH OF AUG 2024',
                'created_at' => '2024-09-30 22:52:44',
                'updated_at' => '2024-09-30 22:52:44',
            ),
            140 => 
            array (
                'id' => 173,
                'amount' => '21667.00',
                'name' => 'FOR THE MONTH OF JUL 2024',
                'created_at' => '2024-09-30 22:54:49',
                'updated_at' => '2024-09-30 22:54:49',
            ),
            141 => 
            array (
                'id' => 174,
                'amount' => '42916.67',
                'name' => 'FOR THE MONTH OF JUL 2024',
                'created_at' => '2024-09-30 22:57:03',
                'updated_at' => '2024-09-30 22:57:03',
            ),
            142 => 
            array (
                'id' => 175,
                'amount' => '41667.00',
                'name' => 'FOR THE MONTH OF JUL 2024',
                'created_at' => '2024-09-30 22:58:39',
                'updated_at' => '2024-09-30 22:58:39',
            ),
            143 => 
            array (
                'id' => 176,
                'amount' => '39167.00',
                'name' => 'FOR THE MONTH OF JUL 2024',
                'created_at' => '2024-09-30 23:00:24',
                'updated_at' => '2024-09-30 23:00:24',
            ),
            144 => 
            array (
                'id' => 177,
                'amount' => '79689.00',
                'name' => 'FOR THE MONTH OF JUL 2024',
                'created_at' => '2024-09-30 23:02:22',
                'updated_at' => '2024-09-30 23:02:22',
            ),
            145 => 
            array (
                'id' => 180,
                'amount' => '38333.00',
                'name' => 'FOR THE MONTH OF JUL 2024',
                'created_at' => '2024-09-30 23:10:16',
                'updated_at' => '2024-09-30 23:10:16',
            ),
            146 => 
            array (
                'id' => 181,
                'amount' => '33195.00',
                'name' => 'FOR THE MONTH OF JUL 2024',
                'created_at' => '2024-09-30 23:12:09',
                'updated_at' => '2024-09-30 23:12:09',
            ),
            147 => 
            array (
                'id' => 182,
                'amount' => '6944.44',
                'name' => 'FOR THE MONTH OFAUG 2024',
                'created_at' => '2024-09-30 23:15:59',
                'updated_at' => '2024-09-30 23:15:59',
            ),
            148 => 
            array (
                'id' => 183,
                'amount' => '69445.00',
                'name' => 'FOR THE MONTH OFAUG 2024',
                'created_at' => '2024-09-30 23:17:53',
                'updated_at' => '2024-09-30 23:17:53',
            ),
            149 => 
            array (
                'id' => 184,
                'amount' => '1050.00',
                'name' => 'Travel of Dipolog City',
                'created_at' => '2024-10-01 17:01:27',
                'updated_at' => '2024-10-01 17:01:27',
            ),
            150 => 
            array (
                'id' => 185,
                'amount' => '12101.00',
                'name' => 'Refund of  double payment for Travel',
                'created_at' => '2024-10-01 19:36:42',
                'updated_at' => '2024-10-01 19:36:42',
            ),
            151 => 
            array (
                'id' => 186,
                'amount' => '1200.00',
                'name' => 'Junk used tire',
                'created_at' => '2024-10-02 01:30:08',
                'updated_at' => '2024-10-02 01:30:08',
            ),
            152 => 
            array (
                'id' => 187,
                'amount' => '330.00',
                'name' => 'Refund of Travel NPSC 24',
                'created_at' => '2024-10-02 22:03:13',
                'updated_at' => '2024-10-02 22:03:13',
            ),
            153 => 
            array (
                'id' => 188,
                'amount' => '450.00',
                'name' => 'Refund of Travel NPSC 24',
                'created_at' => '2024-10-02 22:05:15',
                'updated_at' => '2024-10-02 22:05:15',
            ),
            154 => 
            array (
                'id' => 189,
                'amount' => '450.00',
                'name' => 'Refund of Travel NPSC 24',
                'created_at' => '2024-10-02 22:06:36',
                'updated_at' => '2024-10-02 22:06:36',
            ),
            155 => 
            array (
                'id' => 190,
                'amount' => '450.00',
                'name' => 'Refund of Travel NPSC 24',
                'created_at' => '2024-10-02 22:08:05',
                'updated_at' => '2024-10-02 22:08:05',
            ),
            156 => 
            array (
                'id' => 191,
                'amount' => '450.00',
                'name' => 'Refund of Travel NPSC 24',
                'created_at' => '2024-10-02 22:08:55',
                'updated_at' => '2024-10-02 22:08:55',
            ),
            157 => 
            array (
                'id' => 192,
                'amount' => '450.00',
                'name' => 'Refund of Travel NPSC 24',
                'created_at' => '2024-10-02 22:10:04',
                'updated_at' => '2024-10-02 22:10:04',
            ),
            158 => 
            array (
                'id' => 193,
                'amount' => '450.00',
                'name' => 'Refund of Travel NPSC 24',
                'created_at' => '2024-10-02 22:10:47',
                'updated_at' => '2024-10-02 22:10:47',
            ),
            159 => 
            array (
                'id' => 194,
                'amount' => '330.00',
                'name' => 'Refund of Travel NPSC 24',
                'created_at' => '2024-10-02 22:12:01',
                'updated_at' => '2024-10-02 22:12:01',
            ),
            160 => 
            array (
                'id' => 195,
                'amount' => '450.00',
                'name' => 'Refund of Travel NPSC 24',
                'created_at' => '2024-10-02 22:12:37',
                'updated_at' => '2024-10-02 22:12:37',
            ),
            161 => 
            array (
                'id' => 196,
                'amount' => '450.00',
                'name' => 'Refund of Travel NPSC 24',
                'created_at' => '2024-10-02 22:13:14',
                'updated_at' => '2024-10-02 22:13:14',
            ),
            162 => 
            array (
                'id' => 197,
                'amount' => '330.00',
                'name' => 'Refund of Travel NPSC 24',
                'created_at' => '2024-10-02 22:14:18',
                'updated_at' => '2024-10-02 22:14:18',
            ),
            163 => 
            array (
                'id' => 198,
                'amount' => '960.00',
                'name' => 'Refund of Travel NPSC 24',
                'created_at' => '2024-10-03 23:57:11',
                'updated_at' => '2024-10-03 23:57:11',
            ),
            164 => 
            array (
                'id' => 199,
                'amount' => '1080.00',
                'name' => 'Refund of Travel NPSC 24',
                'created_at' => '2024-10-04 00:10:32',
                'updated_at' => '2024-10-04 00:10:32',
            ),
            165 => 
            array (
                'id' => 200,
                'amount' => '2873.77',
                'name' => 'Refund of Travel Malaysia',
                'created_at' => '2024-10-09 19:10:21',
                'updated_at' => '2024-10-09 19:10:21',
            ),
            166 => 
            array (
                'id' => 201,
                'amount' => '450.00',
                'name' => 'Refund of Travel NPSC 24',
                'created_at' => '2024-10-10 00:44:57',
                'updated_at' => '2024-10-10 00:44:57',
            ),
            167 => 
            array (
                'id' => 202,
                'amount' => '46028.00',
                'name' => 'FOR THE MONTH OF JUNE 2024',
                'created_at' => '2024-10-11 16:28:50',
                'updated_at' => '2024-10-11 16:28:50',
            ),
            168 => 
            array (
                'id' => 203,
                'amount' => '83334.00',
                'name' => 'For the Month of September 2024',
                'created_at' => '2024-10-11 17:00:19',
                'updated_at' => '2024-10-11 17:00:19',
            ),
            169 => 
            array (
                'id' => 204,
                'amount' => '1648000.00',
                'name' => 'STIPEND FOR SCHOLAR',
                'created_at' => '2024-10-11 17:03:57',
                'updated_at' => '2024-10-11 17:03:57',
            ),
            170 => 
            array (
                'id' => 205,
                'amount' => '38.89',
                'name' => 'For the Month of September 2023',
                'created_at' => '2024-10-14 23:04:36',
                'updated_at' => '2024-10-14 23:04:36',
            ),
            171 => 
            array (
                'id' => 206,
                'amount' => '5122.22',
                'name' => 'For the Month of October 2023',
                'created_at' => '2024-10-14 23:04:36',
                'updated_at' => '2024-10-14 23:04:36',
            ),
            172 => 
            array (
                'id' => 207,
                'amount' => '238.89',
            'name' => 'For the Month of November 2023 (Partial)',
                'created_at' => '2024-10-14 23:04:36',
                'updated_at' => '2024-10-14 23:04:36',
            ),
            173 => 
            array (
                'id' => 208,
                'amount' => '25739.84',
                'name' => 'Refund of Financial Benefits Release +12% interest',
                'created_at' => '2024-10-18 18:59:43',
                'updated_at' => '2024-10-18 18:59:43',
            ),
            174 => 
            array (
                'id' => 209,
                'amount' => '5000.00',
                'name' => 'TED 241005',
                'created_at' => '2024-10-21 17:42:37',
                'updated_at' => '2024-10-21 17:42:37',
            ),
            175 => 
            array (
                'id' => 212,
                'amount' => '230865.00',
                'name' => 'FULL PAYMENY SET-UP RENTAL WITHTRANSFER FEE',
                'created_at' => '2024-10-22 21:19:30',
                'updated_at' => '2024-10-22 21:19:30',
            ),
            176 => 
            array (
                'id' => 213,
                'amount' => '994939.00',
                'name' => 'PROJECT FUND RESEARCH',
                'created_at' => '2024-10-25 00:02:45',
                'updated_at' => '2024-10-25 00:02:45',
            ),
            177 => 
            array (
                'id' => 216,
                'amount' => '2740000.00',
                'name' => 'STIPEND, TUITION FOR SCHOLARS',
                'created_at' => '2024-10-25 00:13:43',
                'updated_at' => '2024-10-25 00:13:43',
            ),
            178 => 
            array (
                'id' => 217,
                'amount' => '9065.00',
                'name' => 'NPSC September 03-06, 2024',
                'created_at' => '2024-10-25 01:06:10',
                'updated_at' => '2024-10-25 01:06:10',
            ),
            179 => 
            array (
                'id' => 218,
                'amount' => '120.00',
                'name' => 'NPSC September 03-06, 2024',
                'created_at' => '2024-10-25 18:05:33',
                'updated_at' => '2024-10-25 18:05:33',
            ),
            180 => 
            array (
                'id' => 219,
                'amount' => '120.00',
                'name' => 'NPSC September 03-06, 2024',
                'created_at' => '2024-10-25 18:07:45',
                'updated_at' => '2024-10-25 18:07:45',
            ),
            181 => 
            array (
                'id' => 220,
                'amount' => '550.00',
                'name' => 'R9-012022-MIC-0002',
                'created_at' => '2024-10-29 22:30:59',
                'updated_at' => '2024-10-29 22:30:59',
            ),
            182 => 
            array (
                'id' => 221,
                'amount' => '305000.00',
                'name' => 'FULL PAYMENT',
                'created_at' => '2024-10-30 22:08:02',
                'updated_at' => '2024-10-30 22:08:02',
            ),
            183 => 
            array (
                'id' => 222,
                'amount' => '2497.88',
                'name' => 'TECH TRANSFER FEE',
                'created_at' => '2024-10-30 22:08:02',
                'updated_at' => '2024-10-30 22:08:02',
            ),
            184 => 
            array (
                'id' => 223,
                'amount' => '390242.00',
                'name' => 'FOR THE MONTH OF JAN 2025-NOV 2025 WITH TTF',
                'created_at' => '2024-10-30 22:12:05',
                'updated_at' => '2024-10-30 22:12:05',
            ),
            185 => 
            array (
                'id' => 224,
                'amount' => '9558.00',
                'name' => 'FOR THE MONTH OF SEP 2024',
                'created_at' => '2024-10-30 22:16:07',
                'updated_at' => '2024-10-30 22:16:07',
            ),
            186 => 
            array (
                'id' => 225,
                'amount' => '82778.00',
                'name' => 'FOR THE MONTH OF SEP 2024',
                'created_at' => '2024-10-30 22:20:34',
                'updated_at' => '2024-10-30 22:20:34',
            ),
            187 => 
            array (
                'id' => 226,
                'amount' => '156540.20',
                'name' => 'FOR THE MONTH OF AUG 2024-SEP 2024',
                'created_at' => '2024-10-30 22:23:26',
                'updated_at' => '2024-10-30 22:23:26',
            ),
            188 => 
            array (
                'id' => 227,
                'amount' => '41666.67',
                'name' => 'FOR THE MONTH OF SEP 2024',
                'created_at' => '2024-10-30 22:25:52',
                'updated_at' => '2024-10-30 22:25:52',
            ),
            189 => 
            array (
                'id' => 228,
                'amount' => '13423.00',
                'name' => 'FOR THE MONTH OF MAR 2023',
                'created_at' => '2024-10-30 22:27:59',
                'updated_at' => '2024-10-30 22:27:59',
            ),
            190 => 
            array (
                'id' => 229,
                'amount' => '45833.33',
                'name' => 'FOR THE MONTH OF SEP 2024',
                'created_at' => '2024-10-30 22:30:05',
                'updated_at' => '2024-10-30 22:30:05',
            ),
            191 => 
            array (
                'id' => 230,
                'amount' => '51250.00',
                'name' => 'FOR THE MONTH OF MAY 2024-CK#342376',
                'created_at' => '2024-10-30 22:35:00',
                'updated_at' => '2024-10-30 22:35:00',
            ),
            192 => 
            array (
                'id' => 231,
                'amount' => '51250.00',
                'name' => 'FOR THE MONTH OF JUN 2024-CK# 342377',
                'created_at' => '2024-10-30 22:35:00',
                'updated_at' => '2024-10-30 22:35:00',
            ),
            193 => 
            array (
                'id' => 232,
                'amount' => '51250.00',
                'name' => 'FOR THE MONTH OF JUL 2024-CK# 342378',
                'created_at' => '2024-10-30 22:35:00',
                'updated_at' => '2024-10-30 22:35:00',
            ),
            194 => 
            array (
                'id' => 233,
                'amount' => '44166.00',
                'name' => 'FOR THE MONTH OF SEP 2024',
                'created_at' => '2024-10-30 22:37:55',
                'updated_at' => '2024-10-30 22:37:55',
            ),
            195 => 
            array (
                'id' => 234,
                'amount' => '42500.00',
                'name' => 'FOR THE MONTH OF AUG 2024',
                'created_at' => '2024-10-30 22:39:49',
                'updated_at' => '2024-10-30 22:39:49',
            ),
            196 => 
            array (
                'id' => 235,
                'amount' => '42499.98',
                'name' => 'FOR THE MONTH OF FEB 2024- JUL 2024',
                'created_at' => '2024-10-30 22:44:19',
                'updated_at' => '2024-10-30 22:44:19',
            ),
            197 => 
            array (
                'id' => 236,
                'amount' => '17777.78',
                'name' => 'FOR THE MONTH OF AUG 2024',
                'created_at' => '2024-10-30 22:47:11',
                'updated_at' => '2024-10-30 22:47:11',
            ),
            198 => 
            array (
                'id' => 237,
                'amount' => '41667.00',
                'name' => 'FOR THE MONTH OF SEP 2024',
                'created_at' => '2024-10-30 22:50:01',
                'updated_at' => '2024-10-30 22:50:01',
            ),
            199 => 
            array (
                'id' => 238,
                'amount' => '307146.00',
                'name' => 'FULL PAYMENT',
                'created_at' => '2024-10-30 22:53:10',
                'updated_at' => '2024-10-30 22:53:10',
            ),
            200 => 
            array (
                'id' => 239,
                'amount' => '201410.00',
                'name' => 'FOR THE MONTH OF APR 2024- SEP 2024',
                'created_at' => '2024-10-30 22:56:11',
                'updated_at' => '2024-10-30 22:56:11',
            ),
            201 => 
            array (
                'id' => 240,
                'amount' => '61112.00',
                'name' => 'FOR THE MONTH OF SEP 2024',
                'created_at' => '2024-10-30 22:59:02',
                'updated_at' => '2024-10-30 22:59:02',
            ),
            202 => 
            array (
                'id' => 241,
                'amount' => '35833.33',
                'name' => 'FOR THE MONTH OF SEP 2024',
                'created_at' => '2024-10-30 23:01:02',
                'updated_at' => '2024-10-30 23:01:02',
            ),
            203 => 
            array (
                'id' => 244,
                'amount' => '9723.00',
                'name' => 'FOR THE MONTH OF APR 2024',
                'created_at' => '2024-10-30 23:09:36',
                'updated_at' => '2024-10-30 23:09:36',
            ),
            204 => 
            array (
                'id' => 245,
                'amount' => '43333.33',
                'name' => 'FOR THE MONTH OF SEP 2024',
                'created_at' => '2024-10-30 23:13:24',
                'updated_at' => '2024-10-30 23:13:24',
            ),
            205 => 
            array (
                'id' => 246,
                'amount' => '33334.00',
                'name' => 'FOR THE MONTH OF JAN 2024',
                'created_at' => '2024-10-30 23:15:58',
                'updated_at' => '2024-10-30 23:15:58',
            ),
            206 => 
            array (
                'id' => 247,
                'amount' => '9723.00',
                'name' => 'FOR THE MONTH OF DEC 2023-CK# 168367',
                'created_at' => '2024-10-30 23:21:28',
                'updated_at' => '2024-10-30 23:21:28',
            ),
            207 => 
            array (
                'id' => 248,
                'amount' => '9723.00',
                'name' => 'FOR THE MONTH OF JAN 2024-CK# 168368',
                'created_at' => '2024-10-30 23:21:28',
                'updated_at' => '2024-10-30 23:21:28',
            ),
            208 => 
            array (
                'id' => 249,
                'amount' => '9723.00',
                'name' => 'FOR THE MONTH OF FEB 2024-CK# 168369',
                'created_at' => '2024-10-30 23:21:28',
                'updated_at' => '2024-10-30 23:21:28',
            ),
            209 => 
            array (
                'id' => 250,
                'amount' => '35834.00',
                'name' => 'FOR THE MONTH OF JUL 2023-CK# 351467',
                'created_at' => '2024-10-30 23:24:29',
                'updated_at' => '2024-10-30 23:24:29',
            ),
            210 => 
            array (
                'id' => 251,
                'amount' => '35834.00',
                'name' => 'FOR THE MONTH OF AUG 2024-CK# 351468',
                'created_at' => '2024-10-30 23:24:29',
                'updated_at' => '2024-10-30 23:24:29',
            ),
            211 => 
            array (
                'id' => 252,
                'amount' => '16080.00',
                'name' => 'FOR THE MONTH OF JUN 2024',
                'created_at' => '2024-10-30 23:28:14',
                'updated_at' => '2024-10-30 23:28:14',
            ),
            212 => 
            array (
                'id' => 253,
                'amount' => '7139.00',
                'name' => 'FOR THE MONTH OF FEB 2024',
                'created_at' => '2024-10-30 23:30:01',
                'updated_at' => '2024-10-30 23:30:01',
            ),
            213 => 
            array (
                'id' => 254,
                'amount' => '10329.00',
                'name' => 'FOR THE MONTH OF SEP 2024',
                'created_at' => '2024-10-30 23:31:45',
                'updated_at' => '2024-10-30 23:31:45',
            ),
            214 => 
            array (
                'id' => 255,
                'amount' => '46291.66',
                'name' => 'FOR THE MONTH OF SEP 2024',
                'created_at' => '2024-10-30 23:34:28',
                'updated_at' => '2024-10-30 23:34:28',
            ),
            215 => 
            array (
                'id' => 256,
                'amount' => '27777.00',
                'name' => 'FOR THE MONTH OFAUG 2024',
                'created_at' => '2024-10-30 23:37:07',
                'updated_at' => '2024-10-30 23:37:07',
            ),
            216 => 
            array (
                'id' => 257,
                'amount' => '9691.00',
                'name' => 'FOR THE MONTH OFAUG 2024- CK# 32505',
                'created_at' => '2024-10-30 23:40:15',
                'updated_at' => '2024-10-30 23:40:15',
            ),
            217 => 
            array (
                'id' => 258,
                'amount' => '9691.00',
                'name' => 'FOR THE MONTH OF SEP 2024- CK# 32506',
                'created_at' => '2024-10-30 23:40:15',
                'updated_at' => '2024-10-30 23:40:15',
            ),
            218 => 
            array (
                'id' => 259,
                'amount' => '16695.00',
                'name' => 'FOR THE MONTH OF SEP 2024',
                'created_at' => '2024-10-30 23:42:27',
                'updated_at' => '2024-10-30 23:42:27',
            ),
            219 => 
            array (
                'id' => 260,
                'amount' => '47445.00',
                'name' => 'FOR THE MONTH OF SEP 2024',
                'created_at' => '2024-10-30 23:44:30',
                'updated_at' => '2024-10-30 23:44:30',
            ),
            220 => 
            array (
                'id' => 261,
                'amount' => '16116.00',
                'name' => 'FOR THE MONTH OF SEP 2024',
                'created_at' => '2024-10-30 23:46:21',
                'updated_at' => '2024-10-30 23:46:21',
            ),
            221 => 
            array (
                'id' => 262,
                'amount' => '38888.00',
                'name' => 'FOR THE MONTH OF AUG 2024',
                'created_at' => '2024-10-30 23:52:01',
                'updated_at' => '2024-10-30 23:52:01',
            ),
            222 => 
            array (
                'id' => 263,
                'amount' => '15252.00',
                'name' => 'FOR THE MONTH OF SEP 2024',
                'created_at' => '2024-10-30 23:54:54',
                'updated_at' => '2024-10-30 23:54:54',
            ),
            223 => 
            array (
                'id' => 264,
                'amount' => '30000.00',
                'name' => 'FOR THE MONTH OF SEP 2024',
                'created_at' => '2024-10-30 23:58:48',
                'updated_at' => '2024-10-30 23:58:48',
            ),
            224 => 
            array (
                'id' => 265,
                'amount' => '43888.89',
                'name' => 'FOR THE MONTH OF AUG 2024',
                'created_at' => '2024-10-31 00:03:21',
                'updated_at' => '2024-10-31 00:03:21',
            ),
            225 => 
            array (
                'id' => 266,
                'amount' => '43888.89',
                'name' => 'FOR THE MONTH OF SEP 2024',
                'created_at' => '2024-10-31 00:03:21',
                'updated_at' => '2024-10-31 00:03:21',
            ),
            226 => 
            array (
                'id' => 267,
                'amount' => '38333.00',
                'name' => 'FOR THE MONTH OF AUG 2024',
                'created_at' => '2024-10-31 00:05:57',
                'updated_at' => '2024-10-31 00:05:57',
            ),
            227 => 
            array (
                'id' => 268,
                'amount' => '17667.67',
                'name' => 'FOR THE MONTH OF AUG 2024',
                'created_at' => '2024-10-31 00:11:51',
                'updated_at' => '2024-10-31 00:11:51',
            ),
            228 => 
            array (
                'id' => 269,
                'amount' => '75000.00',
                'name' => 'FOR THE MONTH OF MAY 2024- CK# 72032',
                'created_at' => '2024-10-31 00:17:17',
                'updated_at' => '2024-10-31 00:17:17',
            ),
            229 => 
            array (
                'id' => 270,
                'amount' => '75000.00',
                'name' => 'FOR THE MONTH OF JUN 2024- CK# 72033',
                'created_at' => '2024-10-31 00:17:17',
                'updated_at' => '2024-10-31 00:17:17',
            ),
            230 => 
            array (
                'id' => 271,
                'amount' => '18334.00',
                'name' => 'FOR THE MONTH OF SEP 2024',
                'created_at' => '2024-10-31 00:19:22',
                'updated_at' => '2024-10-31 00:19:22',
            ),
            231 => 
            array (
                'id' => 272,
                'amount' => '31527.00',
                'name' => 'FOR THE MONTH OF SEP 2024',
                'created_at' => '2024-10-31 00:25:38',
                'updated_at' => '2024-10-31 00:25:38',
            ),
            232 => 
            array (
                'id' => 273,
                'amount' => '83334.00',
                'name' => 'FOR THE MONTH OF SEP 2024',
                'created_at' => '2024-10-31 00:30:54',
                'updated_at' => '2024-10-31 00:30:54',
            ),
            233 => 
            array (
                'id' => 274,
                'amount' => '8770.00',
                'name' => 'FOR THE MONTH OF AUG 2024',
                'created_at' => '2024-10-31 00:33:41',
                'updated_at' => '2024-10-31 00:33:41',
            ),
            234 => 
            array (
                'id' => 275,
                'amount' => '79861.11',
                'name' => 'FOR THE MONTH OF SEP 2024',
                'created_at' => '2024-10-31 00:36:44',
                'updated_at' => '2024-10-31 00:36:44',
            ),
            235 => 
            array (
                'id' => 276,
                'amount' => '94167.00',
                'name' => 'FOR THE MONTH OF AUG 2024-OCT 2024',
                'created_at' => '2024-10-31 00:38:44',
                'updated_at' => '2024-10-31 00:38:44',
            ),
            236 => 
            array (
                'id' => 277,
                'amount' => '37500.00',
                'name' => 'FOR THE MONTH OF JUL 2024',
                'created_at' => '2024-10-31 00:40:51',
                'updated_at' => '2024-10-31 00:40:51',
            ),
            237 => 
            array (
                'id' => 278,
                'amount' => '15612.00',
                'name' => 'FOR THE MONTH OF JUL 2024',
                'created_at' => '2024-10-31 00:43:16',
                'updated_at' => '2024-10-31 00:43:16',
            ),
            238 => 
            array (
                'id' => 279,
                'amount' => '27381.67',
                'name' => 'FOR THE MONTH OF SEP 2024',
                'created_at' => '2024-10-31 00:45:11',
                'updated_at' => '2024-10-31 00:45:11',
            ),
            239 => 
            array (
                'id' => 280,
                'amount' => '39167.00',
                'name' => 'FOR THE MONTH OF AUG 2024',
                'created_at' => '2024-10-31 00:47:32',
                'updated_at' => '2024-10-31 00:47:32',
            ),
            240 => 
            array (
                'id' => 281,
                'amount' => '38333.00',
                'name' => 'FOR THE MONTH OF AUG 2024',
                'created_at' => '2024-10-31 00:49:04',
                'updated_at' => '2024-10-31 00:49:04',
            ),
            241 => 
            array (
                'id' => 282,
                'amount' => '41667.00',
                'name' => 'FOR THE MONTH OF AUG 2024',
                'created_at' => '2024-10-31 00:50:39',
                'updated_at' => '2024-10-31 00:50:39',
            ),
            242 => 
            array (
                'id' => 283,
                'amount' => '21667.00',
                'name' => 'FOR THE MONTH OF AUG 2024',
                'created_at' => '2024-10-31 00:52:39',
                'updated_at' => '2024-10-31 00:52:39',
            ),
            243 => 
            array (
                'id' => 284,
                'amount' => '83332.00',
                'name' => 'FOR THE MONTH OF MAY-JUL 2024',
                'created_at' => '2024-10-31 00:55:14',
                'updated_at' => '2024-10-31 00:55:14',
            ),
            244 => 
            array (
                'id' => 285,
                'amount' => '69445.00',
                'name' => 'FOR THE MONTH OF SEP 2024',
                'created_at' => '2024-10-31 00:57:08',
                'updated_at' => '2024-10-31 00:57:08',
            ),
            245 => 
            array (
                'id' => 286,
                'amount' => '6944.44',
                'name' => 'FOR THE MONTH OF SEP 2024',
                'created_at' => '2024-10-31 00:58:41',
                'updated_at' => '2024-10-31 00:58:41',
            ),
            246 => 
            array (
                'id' => 287,
                'amount' => '33195.00',
                'name' => 'FOR THE MONTH OF AUG 2024',
                'created_at' => '2024-10-31 01:00:32',
                'updated_at' => '2024-10-31 01:00:32',
            ),
            247 => 
            array (
                'id' => 288,
                'amount' => '79689.00',
                'name' => 'FOR THE MONTH OF AUG 2024',
                'created_at' => '2024-10-31 01:03:51',
                'updated_at' => '2024-10-31 01:03:51',
            ),
            248 => 
            array (
                'id' => 289,
                'amount' => '26445.00',
                'name' => 'For the Month of September 2024',
                'created_at' => '2024-11-05 18:43:54',
                'updated_at' => '2024-11-05 18:43:54',
            ),
            249 => 
            array (
                'id' => 290,
                'amount' => '90.00',
                'name' => 'Refund of',
                'created_at' => '2024-11-05 21:00:02',
                'updated_at' => '2024-11-05 21:00:02',
            ),
            250 => 
            array (
                'id' => 291,
                'amount' => '1000.00',
                'name' => 'Req# Dost IX 24-20-007',
                'created_at' => '2024-11-05 22:48:38',
                'updated_at' => '2024-11-05 22:48:38',
            ),
            251 => 
            array (
                'id' => 292,
                'amount' => '1000.00',
                'name' => 'Req# DOST IX-10-006',
                'created_at' => '2024-11-05 22:50:04',
                'updated_at' => '2024-11-05 22:50:04',
            ),
            252 => 
            array (
                'id' => 293,
                'amount' => '200.00',
                'name' => 'NPSC September 03-06, 2024',
                'created_at' => '2024-11-06 20:50:56',
                'updated_at' => '2024-11-06 20:50:56',
            ),
            253 => 
            array (
                'id' => 295,
                'amount' => '370520.76',
            'name' => 'Inter Agency Transfer of Fund (HONORARIA)',
                'created_at' => '2024-11-12 22:05:36',
                'updated_at' => '2024-11-12 22:05:36',
            ),
            254 => 
            array (
                'id' => 296,
                'amount' => '46028.00',
                'name' => 'FOR THE MONTH OF JULY 2021',
                'created_at' => '2024-11-13 01:45:10',
                'updated_at' => '2024-11-13 01:45:10',
            ),
            255 => 
            array (
                'id' => 297,
                'amount' => '5502.00',
                'name' => 'FOR THE MONTH OF MARCH 2023',
                'created_at' => '2024-11-13 01:47:50',
                'updated_at' => '2024-11-13 01:47:50',
            ),
            256 => 
            array (
                'id' => 298,
                'amount' => '10917.00',
                'name' => 'FOR THE MONTH OF APRIL 2023',
                'created_at' => '2024-11-13 01:47:50',
                'updated_at' => '2024-11-13 01:47:50',
            ),
            257 => 
            array (
                'id' => 299,
                'amount' => '3581.00',
                'name' => 'FOR THE MONTH OF MAY 2023',
                'created_at' => '2024-11-13 01:47:50',
                'updated_at' => '2024-11-13 01:47:50',
            ),
            258 => 
            array (
                'id' => 300,
                'amount' => '1000.00',
                'name' => 'DOST IX -24-20-007',
                'created_at' => '2024-11-14 21:33:42',
                'updated_at' => '2024-11-14 21:33:42',
            ),
            259 => 
            array (
                'id' => 301,
                'amount' => '1000.00',
                'name' => 'DOST IX-2014-11-007',
                'created_at' => '2024-11-14 21:35:28',
                'updated_at' => '2024-11-14 21:35:28',
            ),
            260 => 
            array (
                'id' => 302,
                'amount' => '1000.00',
                'name' => 'DOST IX 20-007',
                'created_at' => '2024-11-15 17:54:37',
                'updated_at' => '2024-11-15 17:54:37',
            ),
            261 => 
            array (
                'id' => 303,
                'amount' => '1000.00',
                'name' => 'DOST IX 24-20-006',
                'created_at' => '2024-11-15 17:56:54',
                'updated_at' => '2024-11-15 17:56:54',
            ),
            262 => 
            array (
                'id' => 304,
                'amount' => '1800.00',
                'name' => 'Refund of unused travel expenses Gen San',
                'created_at' => '2024-11-18 22:48:21',
                'updated_at' => '2024-11-18 22:48:21',
            ),
            263 => 
            array (
                'id' => 305,
                'amount' => '1000.00',
                'name' => 'Security bidding Papers',
                'created_at' => '2024-11-22 17:46:04',
                'updated_at' => '2024-11-22 17:46:04',
            ),
            264 => 
            array (
                'id' => 317,
                'amount' => '9558.00',
                'name' => 'FOR THE MONTH OF OCT 2024',
                'created_at' => '2024-11-29 18:57:41',
                'updated_at' => '2024-11-29 18:57:41',
            ),
            265 => 
            array (
                'id' => 318,
                'amount' => '82778.00',
                'name' => 'FOR THE MONTH OF OCT 2024',
                'created_at' => '2024-11-29 19:00:06',
                'updated_at' => '2024-11-29 19:00:06',
            ),
            266 => 
            array (
                'id' => 319,
                'amount' => '78270.10',
                'name' => 'FOR THE MONTH OF OCT 2024',
                'created_at' => '2024-11-29 19:07:44',
                'updated_at' => '2024-11-29 19:07:44',
            ),
            267 => 
            array (
                'id' => 320,
                'amount' => '41666.67',
                'name' => 'FOR THE MONTH OF OCT 2024',
                'created_at' => '2024-11-29 19:09:19',
                'updated_at' => '2024-11-29 19:09:19',
            ),
            268 => 
            array (
                'id' => 321,
                'amount' => '13423.00',
                'name' => 'FOR THE MONTH OF APR 2023',
                'created_at' => '2024-11-29 19:10:58',
                'updated_at' => '2024-11-29 19:10:58',
            ),
            269 => 
            array (
                'id' => 322,
                'amount' => '45833.33',
                'name' => 'FOR THE MONTH OF OCT 2024',
                'created_at' => '2024-11-29 19:12:15',
                'updated_at' => '2024-11-29 19:12:15',
            ),
            270 => 
            array (
                'id' => 323,
                'amount' => '41667.00',
                'name' => 'FOR THE MONTH OF JAN 2024',
                'created_at' => '2024-11-29 21:06:42',
                'updated_at' => '2024-11-29 21:06:42',
            ),
            271 => 
            array (
                'id' => 324,
                'amount' => '33334.00',
                'name' => 'FOR THE MONTH OF JAN 2024',
                'created_at' => '2024-11-29 21:08:46',
                'updated_at' => '2024-11-29 21:08:46',
            ),
            272 => 
            array (
                'id' => 325,
                'amount' => '35834.00',
                'name' => 'FOR THE MONTH OF SEP 2024',
                'created_at' => '2024-11-29 21:10:10',
                'updated_at' => '2024-11-29 21:10:10',
            ),
            273 => 
            array (
                'id' => 326,
                'amount' => '51250.00',
                'name' => 'FOR THE MONTH OF AUG 2024',
                'created_at' => '2024-11-29 21:11:56',
                'updated_at' => '2024-11-29 21:11:56',
            ),
            274 => 
            array (
                'id' => 327,
                'amount' => '44166.00',
                'name' => 'FOR THE MONTH OF OCT 2024',
                'created_at' => '2024-11-29 21:13:34',
                'updated_at' => '2024-11-29 21:13:34',
            ),
            275 => 
            array (
                'id' => 328,
                'amount' => '61112.00',
                'name' => 'FOR THE MONTH OF OCT 2024',
                'created_at' => '2024-11-29 21:15:06',
                'updated_at' => '2024-11-29 21:15:06',
            ),
            276 => 
            array (
                'id' => 329,
                'amount' => '35833.33',
                'name' => 'FOR THE MONTH OF OCT 2024',
                'created_at' => '2024-11-29 21:16:33',
                'updated_at' => '2024-11-29 21:16:33',
            ),
            277 => 
            array (
                'id' => 330,
                'amount' => '43333.33',
                'name' => 'FOR THE MONTH OF OCT 2024',
                'created_at' => '2024-11-29 21:17:54',
                'updated_at' => '2024-11-29 21:17:54',
            ),
            278 => 
            array (
                'id' => 331,
                'amount' => '7139.00',
                'name' => 'FOR THE MONTH OF MAR 2024',
                'created_at' => '2024-11-29 21:20:09',
                'updated_at' => '2024-11-29 21:20:09',
            ),
            279 => 
            array (
                'id' => 332,
                'amount' => '26445.00',
                'name' => 'FOR THE MONTH OF OCT 2024',
                'created_at' => '2024-11-29 21:22:50',
                'updated_at' => '2024-11-29 21:22:50',
            ),
            280 => 
            array (
                'id' => 333,
                'amount' => '10329.00',
                'name' => 'FOR THE MONTH OF OCT 2024',
                'created_at' => '2024-11-29 21:23:58',
                'updated_at' => '2024-11-29 21:23:58',
            ),
            281 => 
            array (
                'id' => 334,
                'amount' => '46291.66',
                'name' => 'FOR THE MONTH OF OCT 2024',
                'created_at' => '2024-11-29 21:25:20',
                'updated_at' => '2024-11-29 21:25:20',
            ),
            282 => 
            array (
                'id' => 335,
                'amount' => '14390.00',
                'name' => 'FOR THE MONTH OF SEP 2024 CK# 231156',
                'created_at' => '2024-11-29 21:28:21',
                'updated_at' => '2024-11-29 21:28:21',
            ),
            283 => 
            array (
                'id' => 336,
                'amount' => '14390.00',
                'name' => 'FOR THE MONTH OF OCT 2024 CK#231157',
                'created_at' => '2024-11-29 21:28:21',
                'updated_at' => '2024-11-29 21:28:21',
            ),
            284 => 
            array (
                'id' => 337,
                'amount' => '9065.00',
                'name' => 'FOR THE MONTH OF OCT 2024',
                'created_at' => '2024-11-29 21:30:16',
                'updated_at' => '2024-11-29 21:30:16',
            ),
            285 => 
            array (
                'id' => 338,
                'amount' => '27777.00',
                'name' => 'FOR THE MONTH OF SEP 2024',
                'created_at' => '2024-11-29 21:33:36',
                'updated_at' => '2024-11-29 21:33:36',
            ),
            286 => 
            array (
                'id' => 339,
                'amount' => '9691.00',
                'name' => 'FOR THE MONTH OF OCT 2024',
                'created_at' => '2024-11-29 21:34:47',
                'updated_at' => '2024-11-29 21:34:47',
            ),
            287 => 
            array (
                'id' => 340,
                'amount' => '16695.00',
                'name' => 'FOR THE MONTH OF OCT 2024',
                'created_at' => '2024-11-29 21:35:57',
                'updated_at' => '2024-11-29 21:35:57',
            ),
            288 => 
            array (
                'id' => 341,
                'amount' => '47445.00',
                'name' => 'FOR THE MONTH OF OCT 2024',
                'created_at' => '2024-11-29 21:37:40',
                'updated_at' => '2024-11-29 21:37:40',
            ),
            289 => 
            array (
                'id' => 342,
                'amount' => '16116.00',
                'name' => 'FOR THE MONTH OF OCT 2024',
                'created_at' => '2024-11-29 21:38:46',
                'updated_at' => '2024-11-29 21:38:46',
            ),
            290 => 
            array (
                'id' => 343,
                'amount' => '15252.00',
                'name' => 'FOR THE MONTH OF OCT 2024',
                'created_at' => '2024-11-29 21:40:12',
                'updated_at' => '2024-11-29 21:40:12',
            ),
            291 => 
            array (
                'id' => 344,
                'amount' => '42778.00',
                'name' => 'FOR THE MONTH OF SEP 2024 CK# 100356',
                'created_at' => '2024-11-29 21:42:37',
                'updated_at' => '2024-11-29 21:42:37',
            ),
            292 => 
            array (
                'id' => 345,
                'amount' => '42778.00',
                'name' => 'FOR THE MONTH OF OCT 2024 CK# 100357',
                'created_at' => '2024-11-29 21:42:37',
                'updated_at' => '2024-11-29 21:42:37',
            ),
            293 => 
            array (
                'id' => 346,
                'amount' => '30000.00',
                'name' => 'FOR THE MONTH OF OCT 2024',
                'created_at' => '2024-11-29 21:44:58',
                'updated_at' => '2024-11-29 21:44:58',
            ),
            294 => 
            array (
                'id' => 347,
                'amount' => '43888.89',
                'name' => 'FOR THE MONTH OF OCT 2024',
                'created_at' => '2024-11-29 21:46:09',
                'updated_at' => '2024-11-29 21:46:09',
            ),
            295 => 
            array (
                'id' => 348,
                'amount' => '10721.80',
                'name' => 'FOR THE MONTH OF OCT 2024',
                'created_at' => '2024-11-29 21:47:43',
                'updated_at' => '2024-11-29 21:47:43',
            ),
            296 => 
            array (
                'id' => 349,
                'amount' => '38333.00',
                'name' => 'FOR THE MONTH OF SEP 2024',
                'created_at' => '2024-11-29 21:49:02',
                'updated_at' => '2024-11-29 21:49:02',
            ),
            297 => 
            array (
                'id' => 350,
                'amount' => '75000.00',
                'name' => 'FOR THE MONTH OF JUL 2024',
                'created_at' => '2024-11-29 21:50:43',
                'updated_at' => '2024-11-29 21:50:43',
            ),
            298 => 
            array (
                'id' => 351,
                'amount' => '18334.00',
                'name' => 'FOR THE MONTH OF OCT 2024',
                'created_at' => '2024-11-29 21:52:16',
                'updated_at' => '2024-11-29 21:52:16',
            ),
            299 => 
            array (
                'id' => 352,
                'amount' => '31527.00',
                'name' => 'FOR THE MONTH OF OCT 2024',
                'created_at' => '2024-11-29 21:53:39',
                'updated_at' => '2024-11-29 21:53:39',
            ),
            300 => 
            array (
                'id' => 353,
                'amount' => '83334.00',
                'name' => 'FOR THE MONTH OF OCT 2024',
                'created_at' => '2024-11-29 21:54:45',
                'updated_at' => '2024-11-29 21:54:45',
            ),
            301 => 
            array (
                'id' => 354,
                'amount' => '8770.00',
                'name' => 'FOR THE MONTH OF SEP 2024',
                'created_at' => '2024-11-29 21:56:07',
                'updated_at' => '2024-11-29 21:56:07',
            ),
            302 => 
            array (
                'id' => 355,
                'amount' => '79861.11',
                'name' => 'FOR THE MONTH OF OCT 2024',
                'created_at' => '2024-11-29 21:58:11',
                'updated_at' => '2024-11-29 21:58:11',
            ),
            303 => 
            array (
                'id' => 356,
                'amount' => '37500.00',
                'name' => 'FOR THE MONTH OF AUG 2024',
                'created_at' => '2024-11-29 21:59:24',
                'updated_at' => '2024-11-29 21:59:24',
            ),
            304 => 
            array (
                'id' => 357,
                'amount' => '27381.67',
                'name' => 'FOR THE MONTH OF OCT 2024',
                'created_at' => '2024-11-29 22:02:37',
                'updated_at' => '2024-11-29 22:02:37',
            ),
            305 => 
            array (
                'id' => 358,
                'amount' => '21667.00',
                'name' => 'FOR THE MONTH OF SEP 2024',
                'created_at' => '2024-11-29 23:02:14',
                'updated_at' => '2024-11-29 23:02:14',
            ),
            306 => 
            array (
                'id' => 359,
                'amount' => '42916.67',
                'name' => 'FOR THE MONTH OF AUG 2024',
                'created_at' => '2024-11-29 23:03:36',
                'updated_at' => '2024-11-29 23:03:36',
            ),
            307 => 
            array (
                'id' => 360,
                'amount' => '41667.00',
                'name' => 'FOR THE MONTH OF SEP 2024',
                'created_at' => '2024-11-29 23:05:05',
                'updated_at' => '2024-11-29 23:05:05',
            ),
            308 => 
            array (
                'id' => 361,
                'amount' => '83333.33',
                'name' => 'FOR THE MONTH OF SEP 2024',
                'created_at' => '2024-11-29 23:08:16',
                'updated_at' => '2024-11-29 23:08:16',
            ),
            309 => 
            array (
                'id' => 362,
                'amount' => '38333.00',
                'name' => 'FOR THE MONTH OF SEP 2024',
                'created_at' => '2024-11-29 23:09:58',
                'updated_at' => '2024-11-29 23:09:58',
            ),
            310 => 
            array (
                'id' => 363,
                'amount' => '39167.00',
                'name' => 'FOR THE MONTH OF SEP 2024',
                'created_at' => '2024-11-29 23:11:28',
                'updated_at' => '2024-11-29 23:11:28',
            ),
            311 => 
            array (
                'id' => 364,
                'amount' => '79689.00',
                'name' => 'FOR THE MONTH OF SEP 2024',
                'created_at' => '2024-11-29 23:13:32',
                'updated_at' => '2024-11-29 23:13:32',
            ),
            312 => 
            array (
                'id' => 365,
                'amount' => '33195.00',
                'name' => 'FOR THE MONTH OF SEP 2024',
                'created_at' => '2024-11-29 23:14:41',
                'updated_at' => '2024-11-29 23:14:41',
            ),
            313 => 
            array (
                'id' => 366,
                'amount' => '6944.44',
                'name' => 'FOR THE MONTH OF OCT 2024',
                'created_at' => '2024-11-29 23:15:59',
                'updated_at' => '2024-11-29 23:15:59',
            ),
            314 => 
            array (
                'id' => 367,
                'amount' => '17667.67',
                'name' => 'FOR THE MONTH OF OCT 2024',
                'created_at' => '2024-11-29 23:17:23',
                'updated_at' => '2024-11-29 23:17:23',
            ),
            315 => 
            array (
                'id' => 368,
                'amount' => '69445.00',
                'name' => 'FOR THE MONTH OF OCT 2024',
                'created_at' => '2024-11-29 23:18:47',
                'updated_at' => '2024-11-29 23:18:47',
            ),
            316 => 
            array (
                'id' => 369,
                'amount' => '43889.00',
                'name' => 'FOR THE MONTH OF OCT 2024',
                'created_at' => '2024-11-29 23:21:11',
                'updated_at' => '2024-11-29 23:21:11',
            ),
            317 => 
            array (
                'id' => 370,
                'amount' => '10000.00',
                'name' => 'SETUP PAYMENT',
                'created_at' => '2024-11-29 23:24:47',
                'updated_at' => '2024-11-29 23:24:47',
            ),
            318 => 
            array (
                'id' => 371,
                'amount' => '69445.00',
                'name' => 'FOR THE MONTH OF OCT 2024',
                'created_at' => '2024-11-29 23:28:11',
                'updated_at' => '2024-11-29 23:28:11',
            ),
            319 => 
            array (
                'id' => 372,
                'amount' => '191665.00',
                'name' => 'SETUP PAYMENT',
                'created_at' => '2024-11-29 23:38:00',
                'updated_at' => '2024-11-29 23:38:00',
            ),
            320 => 
            array (
                'id' => 373,
                'amount' => '100000.00',
                'name' => 'SETUP PAYMENT',
                'created_at' => '2024-11-29 23:42:46',
                'updated_at' => '2024-11-29 23:42:46',
            ),
            321 => 
            array (
                'id' => 374,
                'amount' => '1150.00',
                'name' => 'Refund of GEN. SANTOS',
                'created_at' => '2024-12-04 00:04:39',
                'updated_at' => '2024-12-04 00:04:39',
            ),
            322 => 
            array (
                'id' => 375,
                'amount' => '650.00',
                'name' => 'Refund of Travel CDO',
                'created_at' => '2024-12-04 23:21:52',
                'updated_at' => '2024-12-04 23:21:52',
            ),
            323 => 
            array (
                'id' => 376,
                'amount' => '300.00',
                'name' => 'Refund of CDO GFPS ASSEMBLY',
                'created_at' => '2024-12-06 22:05:19',
                'updated_at' => '2024-12-06 22:05:19',
            ),
            324 => 
            array (
                'id' => 377,
                'amount' => '108768.88',
                'name' => 'Full payment of SET-UP Rental',
                'created_at' => '2024-12-10 17:34:06',
                'updated_at' => '2024-12-10 17:34:06',
            ),
            325 => 
            array (
                'id' => 378,
                'amount' => '1631.64',
                'name' => 'Transfer Fee',
                'created_at' => '2024-12-10 17:34:06',
                'updated_at' => '2024-12-10 17:34:06',
            ),
            326 => 
            array (
                'id' => 379,
                'amount' => '46028.00',
                'name' => 'For the Month of August 2021',
                'created_at' => '2024-12-11 00:14:15',
                'updated_at' => '2024-12-11 00:14:15',
            ),
            327 => 
            array (
                'id' => 380,
                'amount' => '1800.00',
                'name' => 'Refund of CDO',
                'created_at' => '2024-12-12 17:15:48',
                'updated_at' => '2024-12-12 17:15:48',
            ),
            328 => 
            array (
                'id' => 381,
                'amount' => '1800.00',
                'name' => 'Refund of CDO Travel',
                'created_at' => '2024-12-12 17:22:59',
                'updated_at' => '2024-12-12 17:22:59',
            ),
            329 => 
            array (
                'id' => 382,
                'amount' => '2800.00',
                'name' => 'Refund of CDO',
                'created_at' => '2024-12-12 21:25:02',
                'updated_at' => '2024-12-12 21:25:02',
            ),
            330 => 
            array (
                'id' => 383,
                'amount' => '15.20',
                'name' => 'Refund of EXCESS CA',
                'created_at' => '2024-12-12 23:29:24',
                'updated_at' => '2024-12-12 23:29:24',
            ),
            331 => 
            array (
                'id' => 384,
                'amount' => '2550.00',
                'name' => 'Refund of UNUSED TRAVEL CA',
                'created_at' => '2024-12-13 00:18:41',
                'updated_at' => '2024-12-13 00:18:41',
            ),
            332 => 
            array (
                'id' => 385,
                'amount' => '7.57',
                'name' => 'Refund of PAGADIAN',
                'created_at' => '2024-12-13 16:26:17',
                'updated_at' => '2024-12-13 16:26:17',
            ),
            333 => 
            array (
                'id' => 386,
                'amount' => '15920.00',
                'name' => 'Refund of TRAVEL CDO',
                'created_at' => '2024-12-13 18:59:54',
                'updated_at' => '2024-12-13 18:59:54',
            ),
            334 => 
            array (
                'id' => 387,
                'amount' => '138888.89',
                'name' => 'RENTAL SET-UP',
                'created_at' => '2024-12-16 20:37:49',
                'updated_at' => '2024-12-16 20:37:49',
            ),
            335 => 
            array (
                'id' => 388,
                'amount' => '15820.00',
                'name' => 'Refund UNSED Travel CA',
                'created_at' => '2024-12-17 00:48:34',
                'updated_at' => '2024-12-17 00:48:34',
            ),
            336 => 
            array (
                'id' => 389,
                'amount' => '1900.00',
                'name' => 'Refund of Double payment of travel allowance',
                'created_at' => '2024-12-19 17:15:48',
                'updated_at' => '2024-12-19 17:15:48',
            ),
            337 => 
            array (
                'id' => 390,
                'amount' => '20.00',
                'name' => 'Refund of Double payment of travel allowance',
                'created_at' => '2024-12-19 17:18:00',
                'updated_at' => '2024-12-19 17:18:00',
            ),
            338 => 
            array (
                'id' => 391,
                'amount' => '800000.00',
                'name' => 'SETUP PAYMENT',
                'created_at' => '2024-12-20 16:35:57',
                'updated_at' => '2024-12-20 16:35:57',
            ),
            339 => 
            array (
                'id' => 392,
                'amount' => '9558.00',
                'name' => 'FOR THE MONTH OF NOV 2024',
                'created_at' => '2024-12-20 17:07:09',
                'updated_at' => '2024-12-20 17:07:09',
            ),
            340 => 
            array (
                'id' => 393,
                'amount' => '82778.00',
                'name' => 'FOR THE MONTH OF NOV 2024',
                'created_at' => '2024-12-20 17:08:44',
                'updated_at' => '2024-12-20 17:08:44',
            ),
            341 => 
            array (
                'id' => 394,
                'amount' => '78270.10',
                'name' => 'FOR THE MONTH OF NOV 2024',
                'created_at' => '2024-12-20 17:10:08',
                'updated_at' => '2024-12-20 17:10:08',
            ),
            342 => 
            array (
                'id' => 395,
                'amount' => '41666.67',
                'name' => 'FOR THE MONTH OF NOV 2024',
                'created_at' => '2024-12-20 17:11:28',
                'updated_at' => '2024-12-20 17:11:28',
            ),
            343 => 
            array (
                'id' => 396,
                'amount' => '15089.00',
                'name' => 'FOR THE MONTH OF NOV 2024',
                'created_at' => '2024-12-20 17:13:25',
                'updated_at' => '2024-12-20 17:13:25',
            ),
            344 => 
            array (
                'id' => 397,
                'amount' => '83334.00',
                'name' => 'FOR THE MONTH OF MAY 2023',
                'created_at' => '2024-12-20 17:15:45',
                'updated_at' => '2024-12-20 17:15:45',
            ),
            345 => 
            array (
                'id' => 398,
                'amount' => '13423.00',
                'name' => 'FOR THE MONTH OF MAY 2023',
                'created_at' => '2024-12-20 17:17:42',
                'updated_at' => '2024-12-20 17:17:42',
            ),
            346 => 
            array (
                'id' => 399,
                'amount' => '45833.33',
                'name' => 'FOR THE MONTH OF NOV 2024',
                'created_at' => '2024-12-20 17:19:02',
                'updated_at' => '2024-12-20 17:19:02',
            ),
            347 => 
            array (
                'id' => 400,
                'amount' => '16080.00',
                'name' => 'FOR THE MONTH OF JUL 2024',
                'created_at' => '2024-12-20 18:46:07',
                'updated_at' => '2024-12-20 18:46:07',
            ),
            348 => 
            array (
                'id' => 401,
                'amount' => '16080.00',
                'name' => 'FOR THE MONTH OF AUG 2024',
                'created_at' => '2024-12-20 18:50:28',
                'updated_at' => '2024-12-20 18:50:28',
            ),
            349 => 
            array (
                'id' => 402,
                'amount' => '7139.00',
                'name' => 'FOR THE MONTH OF APR 2024',
                'created_at' => '2024-12-20 18:52:27',
                'updated_at' => '2024-12-20 18:52:27',
            ),
            350 => 
            array (
                'id' => 403,
                'amount' => '26445.00',
                'name' => 'FOR THE MONTH OF NOV 2024',
                'created_at' => '2024-12-20 18:54:28',
                'updated_at' => '2024-12-20 18:54:28',
            ),
            351 => 
            array (
                'id' => 404,
                'amount' => '46291.66',
                'name' => 'FOR THE MONTH OF NOV 2024',
                'created_at' => '2024-12-20 18:56:17',
                'updated_at' => '2024-12-20 18:56:17',
            ),
            352 => 
            array (
                'id' => 405,
                'amount' => '14390.00',
                'name' => 'FOR THE MONTH OF NOV 2024',
                'created_at' => '2024-12-20 18:57:27',
                'updated_at' => '2024-12-20 18:57:27',
            ),
            353 => 
            array (
                'id' => 406,
                'amount' => '27777.00',
                'name' => 'FOR THE MONTH OF OCT 2024',
                'created_at' => '2024-12-20 18:59:24',
                'updated_at' => '2024-12-20 18:59:24',
            ),
            354 => 
            array (
                'id' => 407,
                'amount' => '9691.00',
                'name' => 'FOR THE MONTH OF NOV 2024',
                'created_at' => '2024-12-20 19:00:52',
                'updated_at' => '2024-12-20 19:00:52',
            ),
            355 => 
            array (
                'id' => 408,
                'amount' => '16695.00',
                'name' => 'FOR THE MONTH OF NOV 2024',
                'created_at' => '2024-12-20 19:02:41',
                'updated_at' => '2024-12-20 19:02:41',
            ),
            356 => 
            array (
                'id' => 409,
                'amount' => '21389.00',
                'name' => 'FOR THE MONTH OF NOV 2024',
                'created_at' => '2024-12-20 19:04:16',
                'updated_at' => '2024-12-20 19:04:16',
            ),
            357 => 
            array (
                'id' => 410,
                'amount' => '47445.00',
                'name' => 'FOR THE MONTH OF NOV 2024',
                'created_at' => '2024-12-20 19:06:57',
                'updated_at' => '2024-12-20 19:06:57',
            ),
            358 => 
            array (
                'id' => 411,
                'amount' => '16116.00',
                'name' => 'FOR THE MONTH OF NOV 2024',
                'created_at' => '2024-12-20 19:08:08',
                'updated_at' => '2024-12-20 19:08:08',
            ),
            359 => 
            array (
                'id' => 412,
                'amount' => '30834.00',
                'name' => 'FOR THE MONTH OF JUL 2024 CK# 31608',
                'created_at' => '2024-12-20 19:12:21',
                'updated_at' => '2024-12-20 19:12:21',
            ),
            360 => 
            array (
                'id' => 413,
                'amount' => '30834.00',
                'name' => 'FOR THE MONTH OF AUG 2024 CK# 31609',
                'created_at' => '2024-12-20 19:12:21',
                'updated_at' => '2024-12-20 19:12:21',
            ),
            361 => 
            array (
                'id' => 414,
                'amount' => '30834.00',
                'name' => 'FOR THE MONTH OF SEP 2024 CK# 31610',
                'created_at' => '2024-12-20 19:12:21',
                'updated_at' => '2024-12-20 19:12:21',
            ),
            362 => 
            array (
                'id' => 415,
                'amount' => '30000.00',
                'name' => 'FOR THE MONTH OF NOV 2024',
                'created_at' => '2024-12-20 19:19:04',
                'updated_at' => '2024-12-20 19:19:04',
            ),
            363 => 
            array (
                'id' => 416,
                'amount' => '43888.89',
                'name' => 'FOR THE MONTH OF NOV 2024',
                'created_at' => '2024-12-20 19:20:20',
                'updated_at' => '2024-12-20 19:20:20',
            ),
            364 => 
            array (
                'id' => 417,
                'amount' => '10721.80',
                'name' => 'FOR THE MONTH OF NOV 2024',
                'created_at' => '2024-12-20 19:21:19',
                'updated_at' => '2024-12-20 19:21:19',
            ),
            365 => 
            array (
                'id' => 418,
                'amount' => '38333.00',
                'name' => 'FOR THE MONTH OF OCT 2024',
                'created_at' => '2024-12-20 19:23:33',
                'updated_at' => '2024-12-20 19:23:33',
            ),
            366 => 
            array (
                'id' => 419,
                'amount' => '75000.00',
                'name' => 'FOR THE MONTH OF AUG 2024',
                'created_at' => '2024-12-20 19:24:41',
                'updated_at' => '2024-12-20 19:24:41',
            ),
            367 => 
            array (
                'id' => 420,
                'amount' => '18334.00',
                'name' => 'FOR THE MONTH OF NOV 2024',
                'created_at' => '2024-12-20 19:27:09',
                'updated_at' => '2024-12-20 19:27:09',
            ),
            368 => 
            array (
                'id' => 421,
                'amount' => '31527.00',
                'name' => 'FOR THE MONTH OF NOV 2024',
                'created_at' => '2024-12-20 19:28:30',
                'updated_at' => '2024-12-20 19:28:30',
            ),
            369 => 
            array (
                'id' => 422,
                'amount' => '83334.00',
                'name' => 'FOR THE MONTH OF NOV 2024',
                'created_at' => '2024-12-20 19:29:33',
                'updated_at' => '2024-12-20 19:29:33',
            ),
            370 => 
            array (
                'id' => 423,
                'amount' => '79861.11',
                'name' => 'FOR THE MONTH OF NOV 2024',
                'created_at' => '2024-12-20 19:31:23',
                'updated_at' => '2024-12-20 19:31:23',
            ),
            371 => 
            array (
                'id' => 424,
                'amount' => '37500.00',
                'name' => 'FOR THE MONTH OF OCT 2024',
                'created_at' => '2024-12-20 19:33:19',
                'updated_at' => '2024-12-20 19:33:19',
            ),
            372 => 
            array (
                'id' => 425,
                'amount' => '27381.67',
                'name' => 'FOR THE MONTH OF OCT 2024',
                'created_at' => '2024-12-20 19:38:52',
                'updated_at' => '2024-12-20 19:38:52',
            ),
            373 => 
            array (
                'id' => 426,
                'amount' => '21667.00',
                'name' => 'FOR THE MONTH OF OCT 2024',
                'created_at' => '2024-12-20 19:40:08',
                'updated_at' => '2024-12-20 19:40:08',
            ),
            374 => 
            array (
                'id' => 427,
                'amount' => '42916.67',
                'name' => 'FOR THE MONTH OF NOV 2024',
                'created_at' => '2024-12-20 19:41:33',
                'updated_at' => '2024-12-20 19:41:33',
            ),
            375 => 
            array (
                'id' => 428,
                'amount' => '41667.00',
                'name' => 'FOR THE MONTH OF OCT 2024',
                'created_at' => '2024-12-20 21:04:42',
                'updated_at' => '2024-12-20 21:04:42',
            ),
            376 => 
            array (
                'id' => 429,
                'amount' => '38333.00',
                'name' => 'FOR THE MONTH OF OCT 2024',
                'created_at' => '2024-12-20 21:06:23',
                'updated_at' => '2024-12-20 21:06:23',
            ),
            377 => 
            array (
                'id' => 430,
                'amount' => '39167.00',
                'name' => 'FOR THE MONTH OF OCT 2024',
                'created_at' => '2024-12-20 21:07:25',
                'updated_at' => '2024-12-20 21:07:25',
            ),
            378 => 
            array (
                'id' => 431,
                'amount' => '79689.00',
                'name' => 'FOR THE MONTH OF OCT 2024',
                'created_at' => '2024-12-20 21:08:55',
                'updated_at' => '2024-12-20 21:08:55',
            ),
            379 => 
            array (
                'id' => 432,
                'amount' => '6944.44',
                'name' => 'FOR THE MONTH OF NOV 2024',
                'created_at' => '2024-12-20 21:10:15',
                'updated_at' => '2024-12-20 21:10:15',
            ),
            380 => 
            array (
                'id' => 433,
                'amount' => '43889.00',
                'name' => 'FOR THE MONTH OF NOV 2024',
                'created_at' => '2024-12-20 21:12:01',
                'updated_at' => '2024-12-20 21:12:01',
            ),
            381 => 
            array (
                'id' => 434,
                'amount' => '15612.00',
                'name' => 'FOR THE MONTH OF AUG 2024',
                'created_at' => '2024-12-20 21:13:21',
                'updated_at' => '2024-12-20 21:13:21',
            ),
            382 => 
            array (
                'id' => 435,
                'amount' => '11020.14',
                'name' => 'FOR THE MONTH OF NOV 2024',
                'created_at' => '2024-12-20 21:15:39',
                'updated_at' => '2024-12-20 21:15:39',
            ),
            383 => 
            array (
                'id' => 436,
                'amount' => '69445.00',
                'name' => 'FOR THE MONTH OF NOV 2024',
                'created_at' => '2024-12-20 21:17:30',
                'updated_at' => '2024-12-20 21:17:30',
            ),
            384 => 
            array (
                'id' => 437,
                'amount' => '42917.00',
                'name' => 'FOR THE MONTH OF APR 2024 CK#153471',
                'created_at' => '2024-12-20 21:23:20',
                'updated_at' => '2024-12-20 21:23:20',
            ),
            385 => 
            array (
                'id' => 438,
                'amount' => '42917.00',
                'name' => 'FOR THE MONTH OF MAY 2024 CK#153472',
                'created_at' => '2024-12-20 21:23:20',
                'updated_at' => '2024-12-20 21:23:20',
            ),
            386 => 
            array (
                'id' => 439,
                'amount' => '42917.00',
                'name' => 'FOR THE MONTH OF JUN 2024 CK#153473',
                'created_at' => '2024-12-20 21:23:20',
                'updated_at' => '2024-12-20 21:23:20',
            ),
            387 => 
            array (
                'id' => 442,
                'amount' => '13056.00',
                'name' => 'FOR THE MONTH OF SEP 2024 CK#176401',
                'created_at' => '2024-12-20 21:31:22',
                'updated_at' => '2024-12-20 21:31:22',
            ),
            388 => 
            array (
                'id' => 443,
                'amount' => '13056.00',
                'name' => 'FOR THE MONTH OF OCT 2024 CK#176402',
                'created_at' => '2024-12-20 21:31:22',
                'updated_at' => '2024-12-20 21:31:22',
            ),
            389 => 
            array (
                'id' => 444,
                'amount' => '320.00',
                'name' => 'Refund of EXCESS in CA travel',
                'created_at' => '2024-12-26 17:12:57',
                'updated_at' => '2024-12-26 17:12:57',
            ),
            390 => 
            array (
                'id' => 445,
                'amount' => '1924552.00',
                'name' => 'Refund of Unused Set-Up Rental',
                'created_at' => '2024-12-26 17:17:14',
                'updated_at' => '2024-12-26 17:17:14',
            ),
            391 => 
            array (
                'id' => 446,
                'amount' => '3000.00',
            'name' => 'FOR THE MONTH OF JUNE 2018 (partial)',
                'created_at' => '2025-01-10 02:03:46',
                'updated_at' => '2025-01-10 02:03:46',
            ),
            392 => 
            array (
                'id' => 450,
                'amount' => '28366.67',
                'name' => 'FOR THE MONTH OF DECEMBER 2024',
                'created_at' => '2025-01-10 16:33:34',
                'updated_at' => '2025-01-10 16:33:34',
            ),
            393 => 
            array (
                'id' => 451,
                'amount' => '1670.84',
                'name' => 'Refund of Unused Project fund SP Food Processing Industry',
                'created_at' => '2025-01-10 19:44:10',
                'updated_at' => '2025-01-10 19:44:10',
            ),
            394 => 
            array (
                'id' => 452,
                'amount' => '297.00',
                'name' => 'Full payment Set-Up',
                'created_at' => '2025-01-13 21:47:27',
                'updated_at' => '2025-01-13 21:47:27',
            ),
            395 => 
            array (
                'id' => 453,
                'amount' => '15867.00',
                'name' => 'FOR THE MONTH OF JAN 2025',
                'created_at' => '2025-01-14 19:11:12',
                'updated_at' => '2025-01-14 19:11:12',
            ),
            396 => 
            array (
                'id' => 454,
                'amount' => '80000.00',
                'name' => 'Refund of Unexpended amount',
                'created_at' => '2025-01-17 00:18:53',
                'updated_at' => '2025-01-17 00:18:53',
            ),
            397 => 
            array (
                'id' => 455,
                'amount' => '7050.00',
                'name' => 'UNUSED CA TRAVEL',
                'created_at' => '2025-01-24 01:02:42',
                'updated_at' => '2025-01-24 01:02:42',
            ),
            398 => 
            array (
                'id' => 456,
                'amount' => '9558.00',
                'name' => 'FOR THE MONTH OF DEC 2024',
                'created_at' => '2025-01-24 19:39:51',
                'updated_at' => '2025-01-24 19:39:51',
            ),
            399 => 
            array (
                'id' => 457,
                'amount' => '82778.00',
                'name' => 'FOR THE MONTH OF DEC 2024',
                'created_at' => '2025-01-24 19:42:08',
                'updated_at' => '2025-01-24 19:42:08',
            ),
            400 => 
            array (
                'id' => 458,
                'amount' => '78270.10',
                'name' => 'FOR THE MONTH OF DEC 2024',
                'created_at' => '2025-01-24 19:44:01',
                'updated_at' => '2025-01-24 19:44:01',
            ),
            401 => 
            array (
                'id' => 459,
                'amount' => '41666.67',
                'name' => 'FOR THE MONTH OF DEC 2024',
                'created_at' => '2025-01-24 19:45:55',
                'updated_at' => '2025-01-24 19:45:55',
            ),
            402 => 
            array (
                'id' => 460,
                'amount' => '15089.00',
                'name' => 'FOR THE MONTH OF DEC 2024',
                'created_at' => '2025-01-24 19:48:05',
                'updated_at' => '2025-01-24 19:48:05',
            ),
            403 => 
            array (
                'id' => 461,
                'amount' => '13423.00',
                'name' => 'FOR THE MONTH OF JUN 2023',
                'created_at' => '2025-01-24 19:49:57',
                'updated_at' => '2025-01-24 19:49:57',
            ),
            404 => 
            array (
                'id' => 462,
                'amount' => '45833.33',
                'name' => 'FOR THE MONTH OF DEC 2024',
                'created_at' => '2025-01-24 19:51:34',
                'updated_at' => '2025-01-24 19:51:34',
            ),
            405 => 
            array (
                'id' => 463,
                'amount' => '16080.00',
                'name' => 'FOR THE MONTH OF SEP 2024',
                'created_at' => '2025-01-24 21:15:19',
                'updated_at' => '2025-01-24 21:15:19',
            ),
            406 => 
            array (
                'id' => 464,
                'amount' => '7139.00',
                'name' => 'FOR THE MONTH OF MAY 2024',
                'created_at' => '2025-01-24 21:16:30',
                'updated_at' => '2025-01-24 21:16:30',
            ),
            407 => 
            array (
                'id' => 465,
                'amount' => '26445.00',
                'name' => 'FOR THE MONTH OF DEC 2024',
                'created_at' => '2025-01-24 21:17:30',
                'updated_at' => '2025-01-24 21:17:30',
            ),
            408 => 
            array (
                'id' => 466,
                'amount' => '10329.00',
                'name' => 'FOR THE MONTH OF NOV 2024',
                'created_at' => '2025-01-24 21:18:38',
                'updated_at' => '2025-01-24 21:18:38',
            ),
            409 => 
            array (
                'id' => 468,
                'amount' => '10329.00',
                'name' => 'FOR THE MONTH OF DEC2024',
                'created_at' => '2025-01-24 21:22:10',
                'updated_at' => '2025-01-24 21:22:10',
            ),
            410 => 
            array (
                'id' => 469,
                'amount' => '46291.66',
                'name' => 'FOR THE MONTH OF DEC 2024',
                'created_at' => '2025-01-24 21:23:18',
                'updated_at' => '2025-01-24 21:23:18',
            ),
            411 => 
            array (
                'id' => 470,
                'amount' => '14390.00',
                'name' => 'FOR THE MONTH OF DEC 2024',
                'created_at' => '2025-01-24 21:24:44',
                'updated_at' => '2025-01-24 21:24:44',
            ),
            412 => 
            array (
                'id' => 471,
                'amount' => '27777.00',
                'name' => 'FOR THE MONTH OF NOV 2024',
                'created_at' => '2025-01-24 21:25:59',
                'updated_at' => '2025-01-24 21:25:59',
            ),
            413 => 
            array (
                'id' => 472,
                'amount' => '9691.00',
                'name' => 'FOR THE MONTH OF DEC 2024',
                'created_at' => '2025-01-24 21:27:20',
                'updated_at' => '2025-01-24 21:27:20',
            ),
            414 => 
            array (
                'id' => 473,
                'amount' => '16695.00',
                'name' => 'FOR THE MONTH OF DEC 2024',
                'created_at' => '2025-01-24 21:29:20',
                'updated_at' => '2025-01-24 21:29:20',
            ),
            415 => 
            array (
                'id' => 474,
                'amount' => '21389.00',
                'name' => 'FOR THE MONTH OF DEC 2024',
                'created_at' => '2025-01-24 21:30:26',
                'updated_at' => '2025-01-24 21:30:26',
            ),
            416 => 
            array (
                'id' => 475,
                'amount' => '47445.00',
                'name' => 'FOR THE MONTH OF DEC 2024',
                'created_at' => '2025-01-24 21:31:23',
                'updated_at' => '2025-01-24 21:31:23',
            ),
            417 => 
            array (
                'id' => 476,
                'amount' => '30834.00',
                'name' => 'FOR THE MONTH OF OCT 2024',
                'created_at' => '2025-01-24 21:44:53',
                'updated_at' => '2025-01-24 21:44:53',
            ),
            418 => 
            array (
                'id' => 477,
                'amount' => '15252.00',
                'name' => 'FOR THE MONTH OF NOV 2024',
                'created_at' => '2025-01-24 21:46:25',
                'updated_at' => '2025-01-24 21:46:25',
            ),
            419 => 
            array (
                'id' => 478,
                'amount' => '42778.00',
                'name' => 'FOR THE MONTH OF NOV 2024',
                'created_at' => '2025-01-24 21:47:35',
                'updated_at' => '2025-01-24 21:47:35',
            ),
            420 => 
            array (
                'id' => 479,
                'amount' => '30000.00',
                'name' => 'FOR THE MONTH OF DEC 2024',
                'created_at' => '2025-01-24 21:56:57',
                'updated_at' => '2025-01-24 21:56:57',
            ),
            421 => 
            array (
                'id' => 480,
                'amount' => '43888.89',
                'name' => 'FOR THE MONTH OF DEC 2024',
                'created_at' => '2025-01-24 21:58:07',
                'updated_at' => '2025-01-24 21:58:07',
            ),
            422 => 
            array (
                'id' => 481,
                'amount' => '83277.78',
                'name' => 'FOR THE MONTH OF NOV 2024 CK# 93089',
                'created_at' => '2025-01-24 22:02:51',
                'updated_at' => '2025-01-24 22:02:51',
            ),
            423 => 
            array (
                'id' => 482,
                'amount' => '83277.78',
                'name' => 'FOR THE MONTH OF DEC 2024 CK# 93090',
                'created_at' => '2025-01-24 22:02:51',
                'updated_at' => '2025-01-24 22:02:51',
            ),
            424 => 
            array (
                'id' => 483,
                'amount' => '10721.80',
                'name' => 'FOR THE MONTH OF DEC 2024',
                'created_at' => '2025-01-24 22:04:34',
                'updated_at' => '2025-01-24 22:04:34',
            ),
            425 => 
            array (
                'id' => 484,
                'amount' => '46805.56',
                'name' => 'FOR THE MONTH OF MAR 2024',
                'created_at' => '2025-01-24 22:10:25',
                'updated_at' => '2025-01-24 22:10:25',
            ),
            426 => 
            array (
                'id' => 485,
                'amount' => '46805.56',
                'name' => 'FOR THE MONTH OF APR 2024',
                'created_at' => '2025-01-24 22:10:25',
                'updated_at' => '2025-01-24 22:10:25',
            ),
            427 => 
            array (
                'id' => 486,
                'amount' => '38333.00',
                'name' => 'FOR THE MONTH OF NOV 2024',
                'created_at' => '2025-01-24 22:12:50',
                'updated_at' => '2025-01-24 22:12:50',
            ),
            428 => 
            array (
                'id' => 487,
                'amount' => '75000.00',
                'name' => 'FOR THE MONTH OF NOV 2024',
                'created_at' => '2025-01-24 22:15:07',
                'updated_at' => '2025-01-24 22:15:07',
            ),
            429 => 
            array (
                'id' => 488,
                'amount' => '75000.00',
                'name' => 'FOR THE MONTH OF DEC 2024',
                'created_at' => '2025-01-24 22:15:07',
                'updated_at' => '2025-01-24 22:15:07',
            ),
            430 => 
            array (
                'id' => 489,
                'amount' => '74750.00',
                'name' => 'FOR THE MONTH OF NOV 2024',
                'created_at' => '2025-01-24 22:19:30',
                'updated_at' => '2025-01-24 22:19:30',
            ),
            431 => 
            array (
                'id' => 490,
                'amount' => '74750.00',
                'name' => 'FOR THE MONTH OF DEC 2024',
                'created_at' => '2025-01-24 22:19:30',
                'updated_at' => '2025-01-24 22:19:30',
            ),
            432 => 
            array (
                'id' => 493,
                'amount' => '17667.67',
                'name' => 'FOR THE MONTH OF NOV 2024',
                'created_at' => '2025-01-24 22:25:12',
                'updated_at' => '2025-01-24 22:25:12',
            ),
            433 => 
            array (
                'id' => 494,
                'amount' => '18334.00',
                'name' => 'FOR THE MONTH OF DEC 2024',
                'created_at' => '2025-01-24 22:43:20',
                'updated_at' => '2025-01-24 22:43:20',
            ),
            434 => 
            array (
                'id' => 495,
                'amount' => '31527.00',
                'name' => 'FOR THE MONTH OF DEC 2024',
                'created_at' => '2025-01-24 22:44:39',
                'updated_at' => '2025-01-24 22:44:39',
            ),
            435 => 
            array (
                'id' => 496,
                'amount' => '83334.00',
                'name' => 'FOR THE MONTH OF DEC 2024',
                'created_at' => '2025-01-24 22:46:28',
                'updated_at' => '2025-01-24 22:46:28',
            ),
            436 => 
            array (
                'id' => 497,
                'amount' => '79861.11',
                'name' => 'FOR THE MONTH OF DEC 2024',
                'created_at' => '2025-01-24 22:48:07',
                'updated_at' => '2025-01-24 22:48:07',
            ),
            437 => 
            array (
                'id' => 498,
                'amount' => '37500.00',
                'name' => 'FOR THE MONTH OF OCT 2024',
                'created_at' => '2025-01-24 22:49:51',
                'updated_at' => '2025-01-24 22:49:51',
            ),
            438 => 
            array (
                'id' => 499,
                'amount' => '33195.00',
                'name' => 'FOR THE MONTH OF OCT 2024',
                'created_at' => '2025-01-24 22:51:17',
                'updated_at' => '2025-01-24 22:51:17',
            ),
            439 => 
            array (
                'id' => 500,
                'amount' => '27381.67',
                'name' => 'FOR THE MONTH OF DEC 2024',
                'created_at' => '2025-01-24 22:52:27',
                'updated_at' => '2025-01-24 22:52:27',
            ),
            440 => 
            array (
                'id' => 501,
                'amount' => '21667.00',
                'name' => 'FOR THE MONTH OF NOV 2024',
                'created_at' => '2025-01-24 22:53:55',
                'updated_at' => '2025-01-24 22:53:55',
            ),
            441 => 
            array (
                'id' => 502,
                'amount' => '42916.67',
                'name' => 'FOR THE MONTH OF OCT 2024',
                'created_at' => '2025-01-24 22:55:49',
                'updated_at' => '2025-01-24 22:55:49',
            ),
            442 => 
            array (
                'id' => 503,
                'amount' => '41667.00',
                'name' => 'FOR THE MONTH OF NOV 2024',
                'created_at' => '2025-01-24 22:57:48',
                'updated_at' => '2025-01-24 22:57:48',
            ),
            443 => 
            array (
                'id' => 504,
                'amount' => '38333.00',
                'name' => 'FOR THE MONTH OF NOV 2024',
                'created_at' => '2025-01-24 22:59:30',
                'updated_at' => '2025-01-24 22:59:30',
            ),
            444 => 
            array (
                'id' => 505,
                'amount' => '39167.00',
                'name' => 'FOR THE MONTH OF NOV 2024',
                'created_at' => '2025-01-24 23:00:40',
                'updated_at' => '2025-01-24 23:00:40',
            ),
            445 => 
            array (
                'id' => 506,
                'amount' => '79689.00',
                'name' => 'FOR THE MONTH OF NOV 2024',
                'created_at' => '2025-01-24 23:01:57',
                'updated_at' => '2025-01-24 23:01:57',
            ),
            446 => 
            array (
                'id' => 507,
                'amount' => '6944.44',
                'name' => 'FOR THE MONTH OF DEC 2024',
                'created_at' => '2025-01-24 23:03:25',
                'updated_at' => '2025-01-24 23:03:25',
            ),
            447 => 
            array (
                'id' => 508,
                'amount' => '43889.00',
                'name' => 'FOR THE MONTH OF DEC 2024',
                'created_at' => '2025-01-24 23:05:01',
                'updated_at' => '2025-01-24 23:05:01',
            ),
            448 => 
            array (
                'id' => 509,
                'amount' => '15612.00',
                'name' => 'FOR THE MONTH OF SEP 2024',
                'created_at' => '2025-01-24 23:06:42',
                'updated_at' => '2025-01-24 23:06:42',
            ),
            449 => 
            array (
                'id' => 510,
                'amount' => '11020.14',
                'name' => 'FOR THE MONTH OF DEC 2024',
                'created_at' => '2025-01-24 23:08:38',
                'updated_at' => '2025-01-24 23:08:38',
            ),
            450 => 
            array (
                'id' => 511,
                'amount' => '69445.00',
                'name' => 'FOR THE MONTH OF DEC 2024',
                'created_at' => '2025-01-24 23:10:07',
                'updated_at' => '2025-01-24 23:10:07',
            ),
            451 => 
            array (
                'id' => 512,
                'amount' => '44166.00',
                'name' => 'FOR THE MONTH OF NOV 2024 CK# 361153',
                'created_at' => '2025-01-24 23:16:00',
                'updated_at' => '2025-01-24 23:16:00',
            ),
            452 => 
            array (
                'id' => 513,
                'amount' => '44166.00',
                'name' => 'FOR THE MONTH OF DEC 2024 CK# 361154',
                'created_at' => '2025-01-24 23:16:00',
                'updated_at' => '2025-01-24 23:16:00',
            ),
            453 => 
            array (
                'id' => 514,
                'amount' => '7083.33',
                'name' => 'FOR THE MONTH OF NOV 2024 CK# 368505',
                'created_at' => '2025-01-24 23:20:06',
                'updated_at' => '2025-01-24 23:20:06',
            ),
            454 => 
            array (
                'id' => 515,
                'amount' => '7083.33',
                'name' => 'FOR THE MONTH OF DEC 2024 CK# 368506',
                'created_at' => '2025-01-24 23:20:06',
                'updated_at' => '2025-01-24 23:20:06',
            ),
            455 => 
            array (
                'id' => 516,
                'amount' => '42500.00',
                'name' => 'FOR THE MONTH OF SEP 2024',
                'created_at' => '2025-01-24 23:22:12',
                'updated_at' => '2025-01-24 23:22:12',
            ),
            456 => 
            array (
                'id' => 517,
                'amount' => '56112.00',
                'name' => 'FOR THE MONTH OF AUG 2023',
                'created_at' => '2025-01-24 23:24:06',
                'updated_at' => '2025-01-24 23:24:06',
            ),
            457 => 
            array (
                'id' => 518,
                'amount' => '17777.78',
                'name' => 'FOR THE MONTH OF SEP 2024',
                'created_at' => '2025-01-24 23:32:02',
                'updated_at' => '2025-01-24 23:32:02',
            ),
            458 => 
            array (
                'id' => 519,
                'amount' => '45277.77',
                'name' => 'FOR THE MONTH OF DEC 2024',
                'created_at' => '2025-01-24 23:34:08',
                'updated_at' => '2025-01-24 23:34:08',
            ),
            459 => 
            array (
                'id' => 520,
                'amount' => '41667.00',
                'name' => 'FOR THE MONTH OF FEB 2024 CK# 626903',
                'created_at' => '2025-01-24 23:36:56',
                'updated_at' => '2025-01-24 23:36:56',
            ),
            460 => 
            array (
                'id' => 521,
                'amount' => '41667.00',
                'name' => 'FOR THE MONTH OF MAR 2024 CK# 626904',
                'created_at' => '2025-01-24 23:36:56',
                'updated_at' => '2025-01-24 23:36:56',
            ),
            461 => 
            array (
                'id' => 522,
                'amount' => '61112.00',
                'name' => 'FOR THE MONTH OF NOV 2024 CK# 351027',
                'created_at' => '2025-01-24 23:39:49',
                'updated_at' => '2025-01-24 23:39:49',
            ),
            462 => 
            array (
                'id' => 523,
                'amount' => '61112.00',
                'name' => 'FOR THE MONTH OF DEC 2024 CK# 351028',
                'created_at' => '2025-01-24 23:39:49',
                'updated_at' => '2025-01-24 23:39:49',
            ),
            463 => 
            array (
                'id' => 524,
                'amount' => '35833.33',
                'name' => 'FOR THE MONTH OF NOV 2024 CK# 172310',
                'created_at' => '2025-01-24 23:41:50',
                'updated_at' => '2025-01-24 23:41:50',
            ),
            464 => 
            array (
                'id' => 525,
                'amount' => '35833.33',
                'name' => 'FOR THE MONTH OF DEC 2024 CK# 172311',
                'created_at' => '2025-01-24 23:41:50',
                'updated_at' => '2025-01-24 23:41:50',
            ),
            465 => 
            array (
                'id' => 526,
                'amount' => '21654.00',
                'name' => 'FOR THE MONTH OF NOV 2024 CK# 375051',
                'created_at' => '2025-01-24 23:45:38',
                'updated_at' => '2025-01-24 23:45:38',
            ),
            466 => 
            array (
                'id' => 527,
                'amount' => '21654.00',
                'name' => 'FOR THE MONTH OF DEC 2024 CK# 375052',
                'created_at' => '2025-01-24 23:45:38',
                'updated_at' => '2025-01-24 23:45:38',
            ),
            467 => 
            array (
                'id' => 528,
                'amount' => '43750.00',
                'name' => 'FOR THE MONTH OF NOV 2024 CK# 369651',
                'created_at' => '2025-01-24 23:48:07',
                'updated_at' => '2025-01-24 23:48:07',
            ),
            468 => 
            array (
                'id' => 529,
                'amount' => '43750.00',
                'name' => 'FOR THE MONTH OF DEC 2024 CK# 369652',
                'created_at' => '2025-01-24 23:48:07',
                'updated_at' => '2025-01-24 23:48:07',
            ),
            469 => 
            array (
                'id' => 530,
                'amount' => '43333.33',
                'name' => 'FOR THE MONTH OF NOV 2024 CK# 364956',
                'created_at' => '2025-01-24 23:53:19',
                'updated_at' => '2025-01-24 23:53:19',
            ),
            470 => 
            array (
                'id' => 531,
                'amount' => '43333.33',
                'name' => 'FOR THE MONTH OF DEC 2024 CK# 364957',
                'created_at' => '2025-01-24 23:53:19',
                'updated_at' => '2025-01-24 23:53:19',
            ),
            471 => 
            array (
                'id' => 532,
                'amount' => '35834.00',
                'name' => 'FOR THE MONTH OF OCT 2024 CK# 351470',
                'created_at' => '2025-01-24 23:55:20',
                'updated_at' => '2025-01-24 23:55:20',
            ),
            472 => 
            array (
                'id' => 533,
                'amount' => '35834.00',
                'name' => 'FOR THE MONTH OF NOV 2024 CK# 351471',
                'created_at' => '2025-01-24 23:55:20',
                'updated_at' => '2025-01-24 23:55:20',
            ),
            473 => 
            array (
                'id' => 534,
                'amount' => '250.00',
                'name' => 'Refund of unused CA Travel',
                'created_at' => '2025-01-30 19:13:25',
                'updated_at' => '2025-01-30 19:13:25',
            ),
            474 => 
            array (
                'id' => 535,
                'amount' => '1724000.00',
                'name' => 'Refund of Cancelled SET-UP Project',
                'created_at' => '2025-01-30 22:49:31',
                'updated_at' => '2025-01-30 22:49:31',
            ),
            475 => 
            array (
                'id' => 536,
                'amount' => '3000.00',
                'name' => 'SET-UP PAYMENT',
                'created_at' => '2025-02-05 00:43:48',
                'updated_at' => '2025-02-05 00:43:48',
            ),
            476 => 
            array (
                'id' => 537,
                'amount' => '69445.00',
                'name' => 'For the Month of December 2024',
                'created_at' => '2025-02-05 22:31:25',
                'updated_at' => '2025-02-05 22:31:25',
            ),
            477 => 
            array (
                'id' => 538,
                'amount' => '13625.00',
                'name' => 'Full Payment Set-up Rental with Transfer fee',
                'created_at' => '2025-02-06 00:56:39',
                'updated_at' => '2025-02-06 00:56:39',
            ),
            478 => 
            array (
                'id' => 545,
                'amount' => '6362791.96',
                'name' => 'BTR-Inter bank Agency Transfer/Scholarship Service fee',
                'created_at' => '2025-02-06 17:50:07',
                'updated_at' => '2025-02-06 17:50:07',
            ),
            479 => 
            array (
                'id' => 547,
                'amount' => '28366.67',
                'name' => 'FOR THE MONTH OF JAN 2025',
                'created_at' => '2025-02-11 19:08:58',
                'updated_at' => '2025-02-11 19:08:58',
            ),
            480 => 
            array (
                'id' => 548,
                'amount' => '83334.00',
                'name' => 'FOR THE MONTH OF NOV. 2023',
                'created_at' => '2025-02-11 19:30:49',
                'updated_at' => '2025-02-11 19:30:49',
            ),
            481 => 
            array (
                'id' => 549,
                'amount' => '92056.00',
                'name' => 'For the Month of Sept. TO Oct. 2021',
                'created_at' => '2025-02-11 19:38:45',
                'updated_at' => '2025-02-11 19:38:45',
            ),
            482 => 
            array (
                'id' => 550,
                'amount' => '14029.50',
                'name' => 'Disposal of Unserviceable properties',
                'created_at' => '2025-02-13 00:40:24',
                'updated_at' => '2025-02-13 00:40:24',
            ),
            483 => 
            array (
                'id' => 551,
                'amount' => '950.00',
                'name' => 'Refund of  CA for Travel',
                'created_at' => '2025-02-15 00:17:06',
                'updated_at' => '2025-02-15 00:17:06',
            ),
            484 => 
            array (
                'id' => 552,
                'amount' => '30149.44',
                'name' => 'FOR THE MONTH OF JAN. 2025',
                'created_at' => '2025-02-18 23:57:05',
                'updated_at' => '2025-02-18 23:57:05',
            ),
            485 => 
            array (
                'id' => 553,
                'amount' => '50000.00',
                'name' => 'For the Month of AUGUST  2024',
                'created_at' => '2025-02-20 01:41:05',
                'updated_at' => '2025-02-20 01:41:05',
            ),
            486 => 
            array (
                'id' => 554,
                'amount' => '50000.00',
                'name' => 'For the Month of September 2024',
                'created_at' => '2025-02-20 01:41:05',
                'updated_at' => '2025-02-20 01:41:05',
            ),
            487 => 
            array (
                'id' => 555,
                'amount' => '50000.00',
                'name' => 'For the Month of OCTOBER 2024',
                'created_at' => '2025-02-20 01:41:05',
                'updated_at' => '2025-02-20 01:41:05',
            ),
            488 => 
            array (
                'id' => 556,
                'amount' => '50000.00',
                'name' => 'For the Month of NOVEMBER 2024',
                'created_at' => '2025-02-20 01:41:05',
                'updated_at' => '2025-02-20 01:41:05',
            ),
            489 => 
            array (
                'id' => 557,
                'amount' => '50000.00',
                'name' => 'For the Month of DECEMBER 2024',
                'created_at' => '2025-02-20 01:41:05',
                'updated_at' => '2025-02-20 01:41:05',
            ),
            490 => 
            array (
                'id' => 558,
                'amount' => '50000.00',
                'name' => 'For the Month of JANUARY 2025',
                'created_at' => '2025-02-20 01:41:05',
                'updated_at' => '2025-02-20 01:41:05',
            ),
            491 => 
            array (
                'id' => 559,
                'amount' => '1580.00',
                'name' => 'Refund of excess CA Travel',
                'created_at' => '2025-02-26 00:57:52',
                'updated_at' => '2025-02-26 00:57:52',
            ),
            492 => 
            array (
                'id' => 560,
                'amount' => '43888.89',
                'name' => 'FOR THE MONTH OF AUGUST 2024',
                'created_at' => '2025-02-27 22:49:43',
                'updated_at' => '2025-02-27 22:49:43',
            ),
            493 => 
            array (
                'id' => 561,
                'amount' => '9558.00',
                'name' => 'FOR THE MONTH OF JAN 2025',
                'created_at' => '2025-02-27 23:15:05',
                'updated_at' => '2025-02-27 23:15:05',
            ),
            494 => 
            array (
                'id' => 562,
                'amount' => '82778.00',
                'name' => 'FOR THE MONTH OF JAN 2025',
                'created_at' => '2025-02-27 23:20:07',
                'updated_at' => '2025-02-27 23:20:07',
            ),
            495 => 
            array (
                'id' => 563,
                'amount' => '78270.10',
                'name' => 'FOR THE MONTH OF JAN 2025',
                'created_at' => '2025-02-27 23:22:39',
                'updated_at' => '2025-02-27 23:22:39',
            ),
            496 => 
            array (
                'id' => 564,
                'amount' => '41666.67',
                'name' => 'FOR THE MONTH OF JAN 2025',
                'created_at' => '2025-02-27 23:24:37',
                'updated_at' => '2025-02-27 23:24:37',
            ),
            497 => 
            array (
                'id' => 565,
                'amount' => '15089.00',
                'name' => 'FOR THE MONTH OF JAN 2025',
                'created_at' => '2025-02-27 23:27:15',
                'updated_at' => '2025-02-27 23:27:15',
            ),
            498 => 
            array (
                'id' => 566,
                'amount' => '13423.00',
                'name' => 'FOR THE MONTH OF JUL 2023',
                'created_at' => '2025-02-27 23:28:43',
                'updated_at' => '2025-02-27 23:28:43',
            ),
            499 => 
            array (
                'id' => 567,
                'amount' => '45833.33',
                'name' => 'FOR THE MONTH OF JAN 2025',
                'created_at' => '2025-02-27 23:30:20',
                'updated_at' => '2025-02-27 23:30:20',
            ),
        ));
        \DB::table('finance_items')->insert(array (
            0 => 
            array (
                'id' => 568,
                'amount' => '16116.00',
                'name' => 'FOR THE MONTH OF DEC 2024',
                'created_at' => '2025-02-27 23:33:31',
                'updated_at' => '2025-02-27 23:33:31',
            ),
            1 => 
            array (
                'id' => 569,
                'amount' => '16080.00',
                'name' => 'FOR THE MONTH OF OCT  2024',
                'created_at' => '2025-02-27 23:34:50',
                'updated_at' => '2025-02-27 23:34:50',
            ),
            2 => 
            array (
                'id' => 570,
                'amount' => '7139.00',
                'name' => 'FOR THE MONTH OF JUN  2024',
                'created_at' => '2025-02-27 23:36:22',
                'updated_at' => '2025-02-27 23:36:22',
            ),
            3 => 
            array (
                'id' => 571,
                'amount' => '26445.00',
                'name' => 'FOR THE MONTH OF DEC 2024',
                'created_at' => '2025-02-27 23:38:09',
                'updated_at' => '2025-02-27 23:38:09',
            ),
            4 => 
            array (
                'id' => 572,
                'amount' => '10329.00',
                'name' => 'FOR THE MONTH OF JAN 2025',
                'created_at' => '2025-02-27 23:39:56',
                'updated_at' => '2025-02-27 23:39:56',
            ),
            5 => 
            array (
                'id' => 573,
                'amount' => '46291.66',
                'name' => 'FOR THE MONTH OF JAN 2025',
                'created_at' => '2025-02-27 23:41:29',
                'updated_at' => '2025-02-27 23:41:29',
            ),
            6 => 
            array (
                'id' => 574,
                'amount' => '14390.00',
                'name' => 'FOR THE MONTH OF JAN 2025',
                'created_at' => '2025-02-27 23:42:55',
                'updated_at' => '2025-02-27 23:42:55',
            ),
            7 => 
            array (
                'id' => 575,
                'amount' => '9691.00',
                'name' => 'FOR THE MONTH OF JAN 2025',
                'created_at' => '2025-02-27 23:44:30',
                'updated_at' => '2025-02-27 23:44:30',
            ),
            8 => 
            array (
                'id' => 576,
                'amount' => '16695.00',
                'name' => 'FOR THE MONTH OF JAN 2025',
                'created_at' => '2025-02-27 23:45:39',
                'updated_at' => '2025-02-27 23:45:39',
            ),
            9 => 
            array (
                'id' => 577,
                'amount' => '21389.00',
                'name' => 'FOR THE MONTH OF JAN 2025',
                'created_at' => '2025-02-27 23:46:54',
                'updated_at' => '2025-02-27 23:46:54',
            ),
            10 => 
            array (
                'id' => 578,
                'amount' => '47445.00',
                'name' => 'FOR THE MONTH OF JAN 2025',
                'created_at' => '2025-02-27 23:48:12',
                'updated_at' => '2025-02-27 23:48:12',
            ),
            11 => 
            array (
                'id' => 579,
                'amount' => '16116.00',
                'name' => 'FOR THE MONTH OF JAN 2025',
                'created_at' => '2025-02-27 23:49:45',
                'updated_at' => '2025-02-27 23:49:45',
            ),
            12 => 
            array (
                'id' => 580,
                'amount' => '30834.00',
                'name' => 'FOR THE MONTH OF NOV 2024',
                'created_at' => '2025-02-27 23:52:11',
                'updated_at' => '2025-02-27 23:52:11',
            ),
            13 => 
            array (
                'id' => 581,
                'amount' => '15252.00',
                'name' => 'FOR THE MONTH OF DEC 2024 CK#11383',
                'created_at' => '2025-02-27 23:55:26',
                'updated_at' => '2025-02-27 23:55:26',
            ),
            14 => 
            array (
                'id' => 582,
                'amount' => '15252.00',
                'name' => 'FOR THE MONTH OF JAN 2025 CK#11384',
                'created_at' => '2025-02-27 23:55:26',
                'updated_at' => '2025-02-27 23:55:26',
            ),
            15 => 
            array (
                'id' => 583,
                'amount' => '42778.00',
                'name' => 'FOR THE MONTH OF DEC 2024 CK#100359',
                'created_at' => '2025-02-27 23:58:10',
                'updated_at' => '2025-02-27 23:58:10',
            ),
            16 => 
            array (
                'id' => 584,
                'amount' => '42778.00',
                'name' => 'FOR THE MONTH OF JAN 2025 CK#100360',
                'created_at' => '2025-02-27 23:58:10',
                'updated_at' => '2025-02-27 23:58:10',
            ),
            17 => 
            array (
                'id' => 585,
                'amount' => '30000.00',
                'name' => 'FOR THE MONTH OF JAN 2025',
                'created_at' => '2025-02-28 00:00:22',
                'updated_at' => '2025-02-28 00:00:22',
            ),
            18 => 
            array (
                'id' => 586,
                'amount' => '43888.89',
                'name' => 'FOR THE MONTH OF JAN 2025',
                'created_at' => '2025-02-28 00:03:02',
                'updated_at' => '2025-02-28 00:03:02',
            ),
            19 => 
            array (
                'id' => 587,
                'amount' => '83277.78',
                'name' => 'FOR THE MONTH OF JAN 2025',
                'created_at' => '2025-02-28 00:04:31',
                'updated_at' => '2025-02-28 00:04:31',
            ),
            20 => 
            array (
                'id' => 588,
                'amount' => '33288.89',
                'name' => 'FOR THE MONTH OF NOV 2024 CK# 93101',
                'created_at' => '2025-02-28 00:08:30',
                'updated_at' => '2025-02-28 00:08:30',
            ),
            21 => 
            array (
                'id' => 589,
                'amount' => '33288.89',
                'name' => 'FOR THE MONTH OF DEC 2024 CK# 93102',
                'created_at' => '2025-02-28 00:08:30',
                'updated_at' => '2025-02-28 00:08:30',
            ),
            22 => 
            array (
                'id' => 590,
                'amount' => '33288.89',
                'name' => 'FOR THE MONTH OF JAN 2025 CK# 93103',
                'created_at' => '2025-02-28 00:08:30',
                'updated_at' => '2025-02-28 00:08:30',
            ),
            23 => 
            array (
                'id' => 591,
                'amount' => '10721.80',
                'name' => 'FOR THE MONTH OF JAN 2025',
                'created_at' => '2025-02-28 00:13:05',
                'updated_at' => '2025-02-28 00:13:05',
            ),
            24 => 
            array (
                'id' => 592,
                'amount' => '38333.00',
                'name' => 'FOR THE MONTH OF JAN 2025',
                'created_at' => '2025-02-28 00:16:05',
                'updated_at' => '2025-02-28 00:16:05',
            ),
            25 => 
            array (
                'id' => 593,
                'amount' => '75000.00',
                'name' => 'FOR THE MONTH OF JAN 2025',
                'created_at' => '2025-02-28 00:20:21',
                'updated_at' => '2025-02-28 00:20:21',
            ),
            26 => 
            array (
                'id' => 594,
                'amount' => '74750.00',
                'name' => 'FOR THE MONTH OF JAN 2025',
                'created_at' => '2025-02-28 00:22:02',
                'updated_at' => '2025-02-28 00:22:02',
            ),
            27 => 
            array (
                'id' => 595,
                'amount' => '17667.67',
                'name' => 'FOR THE MONTH OF DEC 2024',
                'created_at' => '2025-02-28 00:24:03',
                'updated_at' => '2025-02-28 00:24:03',
            ),
            28 => 
            array (
                'id' => 596,
                'amount' => '18334.00',
                'name' => 'FOR THE MONTH OF JAN 2025',
                'created_at' => '2025-02-28 00:25:36',
                'updated_at' => '2025-02-28 00:25:36',
            ),
            29 => 
            array (
                'id' => 597,
                'amount' => '31527.00',
                'name' => 'FOR THE MONTH OF JAN 2025',
                'created_at' => '2025-02-28 00:27:12',
                'updated_at' => '2025-02-28 00:27:12',
            ),
            30 => 
            array (
                'id' => 598,
                'amount' => '83334.00',
                'name' => 'FOR THE MONTH OF JAN 2025',
                'created_at' => '2025-02-28 00:28:10',
                'updated_at' => '2025-02-28 00:28:10',
            ),
            31 => 
            array (
                'id' => 599,
                'amount' => '79861.11',
                'name' => 'FOR THE MONTH OF JAN 2025',
                'created_at' => '2025-02-28 00:29:28',
                'updated_at' => '2025-02-28 00:29:28',
            ),
            32 => 
            array (
                'id' => 600,
                'amount' => '33195.00',
                'name' => 'FOR THE MONTH OF NOV 2024',
                'created_at' => '2025-02-28 00:32:30',
                'updated_at' => '2025-02-28 00:32:30',
            ),
            33 => 
            array (
                'id' => 601,
                'amount' => '33195.00',
                'name' => 'FOR THE MONTH OF DEC 2024',
                'created_at' => '2025-02-28 00:32:30',
                'updated_at' => '2025-02-28 00:32:30',
            ),
            34 => 
            array (
                'id' => 602,
                'amount' => '27381.67',
                'name' => 'FOR THE MONTH OF JAN 2025',
                'created_at' => '2025-02-28 00:34:26',
                'updated_at' => '2025-02-28 00:34:26',
            ),
            35 => 
            array (
                'id' => 603,
                'amount' => '42916.67',
                'name' => 'FOR THE MONTH OF NOV 2024',
                'created_at' => '2025-02-28 00:36:25',
                'updated_at' => '2025-02-28 00:36:25',
            ),
            36 => 
            array (
                'id' => 604,
                'amount' => '41667.00',
                'name' => 'FOR THE MONTH OF JAN 2025',
                'created_at' => '2025-02-28 00:38:55',
                'updated_at' => '2025-02-28 00:38:55',
            ),
            37 => 
            array (
                'id' => 605,
                'amount' => '39167.00',
                'name' => 'FOR THE MONTH OF DEC 2024',
                'created_at' => '2025-02-28 00:40:27',
                'updated_at' => '2025-02-28 00:40:27',
            ),
            38 => 
            array (
                'id' => 606,
                'amount' => '79689.00',
                'name' => 'FOR THE MONTH OF DEC 2024',
                'created_at' => '2025-02-28 00:41:30',
                'updated_at' => '2025-02-28 00:41:30',
            ),
            39 => 
            array (
                'id' => 607,
                'amount' => '6944.44',
                'name' => 'FOR THE MONTH OF JAN 2025',
                'created_at' => '2025-02-28 00:43:17',
                'updated_at' => '2025-02-28 00:43:17',
            ),
            40 => 
            array (
                'id' => 608,
                'amount' => '43889.00',
                'name' => 'FOR THE MONTH OF JAN 2025',
                'created_at' => '2025-02-28 00:44:58',
                'updated_at' => '2025-02-28 00:44:58',
            ),
            41 => 
            array (
                'id' => 609,
                'amount' => '11020.14',
                'name' => 'FOR THE MONTH OF JAN 2025',
                'created_at' => '2025-02-28 00:46:19',
                'updated_at' => '2025-02-28 00:46:19',
            ),
            42 => 
            array (
                'id' => 610,
                'amount' => '69445.00',
                'name' => 'FOR THE MONTH OF JAN 2025',
                'created_at' => '2025-02-28 00:47:40',
                'updated_at' => '2025-02-28 00:47:40',
            ),
            43 => 
            array (
                'id' => 611,
                'amount' => '51250.00',
                'name' => 'FOR THE MONTH OF SEP 2024',
                'created_at' => '2025-02-28 00:51:17',
                'updated_at' => '2025-02-28 00:51:17',
            ),
            44 => 
            array (
                'id' => 612,
                'amount' => '51250.00',
                'name' => 'FOR THE MONTH OF OCT 2024',
                'created_at' => '2025-02-28 00:51:17',
                'updated_at' => '2025-02-28 00:51:17',
            ),
            45 => 
            array (
                'id' => 613,
                'amount' => '44166.00',
                'name' => 'FOR THE MONTH OF JAN 2025',
                'created_at' => '2025-02-28 00:52:40',
                'updated_at' => '2025-02-28 00:52:40',
            ),
            46 => 
            array (
                'id' => 614,
                'amount' => '7083.33',
                'name' => 'FOR THE MONTH OF OCT 2024',
                'created_at' => '2025-02-28 00:55:08',
                'updated_at' => '2025-02-28 00:55:08',
            ),
            47 => 
            array (
                'id' => 615,
                'amount' => '7083.33',
                'name' => 'FOR THE MONTH OF NOV 2024',
                'created_at' => '2025-02-28 00:55:08',
                'updated_at' => '2025-02-28 00:55:08',
            ),
            48 => 
            array (
                'id' => 616,
                'amount' => '42500.00',
                'name' => 'FOR THE MONTH OF OCT 2024',
                'created_at' => '2025-02-28 00:56:24',
                'updated_at' => '2025-02-28 00:56:24',
            ),
            49 => 
            array (
                'id' => 617,
                'amount' => '17777.78',
                'name' => 'FOR THE MONTH OF OCT 2024',
                'created_at' => '2025-02-28 00:57:57',
                'updated_at' => '2025-02-28 00:57:57',
            ),
            50 => 
            array (
                'id' => 618,
                'amount' => '45277.77',
                'name' => 'FOR THE MONTH OF JAN 2025',
                'created_at' => '2025-02-28 00:59:34',
                'updated_at' => '2025-02-28 00:59:34',
            ),
            51 => 
            array (
                'id' => 619,
                'amount' => '500000.00',
                'name' => 'FOR THE MONTH OF DEC 2023- OCT 2024',
                'created_at' => '2025-02-28 01:06:59',
                'updated_at' => '2025-02-28 01:06:59',
            ),
            52 => 
            array (
                'id' => 620,
                'amount' => '100000.00',
                'name' => 'FOR THE MONTH OF NOV 2024',
                'created_at' => '2025-02-28 01:06:59',
                'updated_at' => '2025-02-28 01:06:59',
            ),
            53 => 
            array (
                'id' => 621,
                'amount' => '188900.00',
                'name' => 'FOR THE MONTH OF OCT 2024',
                'created_at' => '2025-02-28 01:10:03',
                'updated_at' => '2025-02-28 01:10:03',
            ),
            54 => 
            array (
                'id' => 622,
                'amount' => '41667.00',
                'name' => 'FOR THE MONTH OF APR 2024',
                'created_at' => '2025-02-28 01:11:47',
                'updated_at' => '2025-02-28 01:11:47',
            ),
            55 => 
            array (
                'id' => 623,
                'amount' => '61112.00',
                'name' => 'FOR THE MONTH OF JAN 2025',
                'created_at' => '2025-02-28 01:13:35',
                'updated_at' => '2025-02-28 01:13:35',
            ),
            56 => 
            array (
                'id' => 624,
                'amount' => '35833.33',
                'name' => 'FOR THE MONTH OF JAN 2025',
                'created_at' => '2025-02-28 01:14:56',
                'updated_at' => '2025-02-28 01:14:56',
            ),
            57 => 
            array (
                'id' => 625,
                'amount' => '13056.00',
                'name' => 'FOR THE MONTH OF NOV 2024 CK# 176403',
                'created_at' => '2025-02-28 01:18:11',
                'updated_at' => '2025-02-28 01:18:11',
            ),
            58 => 
            array (
                'id' => 626,
                'amount' => '13056.00',
                'name' => 'FOR THE MONTH OF DEC 2024  CK# 176404',
                'created_at' => '2025-02-28 01:18:11',
                'updated_at' => '2025-02-28 01:18:11',
            ),
            59 => 
            array (
                'id' => 627,
                'amount' => '13056.00',
                'name' => 'FOR THE MONTH OF JAN 2025  CK# 176405',
                'created_at' => '2025-02-28 01:18:11',
                'updated_at' => '2025-02-28 01:18:11',
            ),
            60 => 
            array (
                'id' => 628,
                'amount' => '21654.00',
                'name' => 'FOR THE MONTH OF JAN 2025',
                'created_at' => '2025-02-28 01:20:46',
                'updated_at' => '2025-02-28 01:20:46',
            ),
            61 => 
            array (
                'id' => 629,
                'amount' => '43750.00',
                'name' => 'FOR THE MONTH OF JAN 2025',
                'created_at' => '2025-02-28 01:22:49',
                'updated_at' => '2025-02-28 01:22:49',
            ),
            62 => 
            array (
                'id' => 630,
                'amount' => '8466.00',
                'name' => 'FOR THE MONTH OF JAN 2025',
                'created_at' => '2025-02-28 01:24:41',
                'updated_at' => '2025-02-28 01:24:41',
            ),
            63 => 
            array (
                'id' => 631,
                'amount' => '35834.00',
                'name' => 'FOR THE MONTH OF DEC 2024',
                'created_at' => '2025-02-28 01:26:27',
                'updated_at' => '2025-02-28 01:26:27',
            ),
            64 => 
            array (
                'id' => 632,
                'amount' => '35834.00',
                'name' => 'FOR THE MONTH OF JAN 2025',
                'created_at' => '2025-02-28 01:26:27',
                'updated_at' => '2025-02-28 01:26:27',
            ),
            65 => 
            array (
                'id' => 633,
                'amount' => '150000.00',
                'name' => 'RENTAL PAYMENT',
                'created_at' => '2025-02-28 01:29:56',
                'updated_at' => '2025-02-28 01:29:56',
            ),
            66 => 
            array (
                'id' => 634,
                'amount' => '3975.00',
                'name' => 'Refund of Unused Travel',
                'created_at' => '2025-03-05 21:32:30',
                'updated_at' => '2025-03-05 21:32:30',
            ),
            67 => 
            array (
                'id' => 635,
                'amount' => '192.00',
                'name' => 'Refund of Disallowance',
                'created_at' => '2025-03-11 21:36:48',
                'updated_at' => '2025-03-11 21:36:48',
            ),
            68 => 
            array (
                'id' => 636,
                'amount' => '320.00',
                'name' => 'Refund of Disallowance',
                'created_at' => '2025-03-11 21:38:23',
                'updated_at' => '2025-03-11 21:38:23',
            ),
            69 => 
            array (
                'id' => 637,
                'amount' => '29000.00',
                'name' => 'Refund of Stipend of ALMEQDHAD IBRAHIM JOCUTAN',
                'created_at' => '2025-03-11 22:10:04',
                'updated_at' => '2025-03-11 22:10:04',
            ),
            70 => 
            array (
                'id' => 638,
                'amount' => '28366.67',
                'name' => 'FOR THE MONTH OF FEBRUARY 2025',
                'created_at' => '2025-03-12 00:45:44',
                'updated_at' => '2025-03-12 00:45:44',
            ),
            71 => 
            array (
                'id' => 639,
                'amount' => '2000.00',
                'name' => 'FOR THE MONTH OF JAN. 2014',
                'created_at' => '2025-03-12 00:55:50',
                'updated_at' => '2025-03-12 00:55:50',
            ),
            72 => 
            array (
                'id' => 640,
                'amount' => '30150.00',
                'name' => 'FOR THE MONTH OF FEBRUARY 2025',
                'created_at' => '2025-03-20 23:06:35',
                'updated_at' => '2025-03-20 23:06:35',
            ),
            73 => 
            array (
                'id' => 641,
                'amount' => '164668.00',
                'name' => 'FOR THE MONTH OF NOV-DEC. 2022',
                'created_at' => '2025-03-26 17:34:24',
                'updated_at' => '2025-03-26 17:34:24',
            ),
            74 => 
            array (
                'id' => 642,
                'amount' => '247002.00',
                'name' => 'FOR THE MONTH OF JAN-MARCH  2023',
                'created_at' => '2025-03-26 17:34:24',
                'updated_at' => '2025-03-26 17:34:24',
            ),
            75 => 
            array (
                'id' => 643,
                'amount' => '78330.00',
                'name' => 'FOR THE MONTH OF APRIL 2023 Partial',
                'created_at' => '2025-03-26 17:34:24',
                'updated_at' => '2025-03-26 17:34:24',
            ),
            76 => 
            array (
                'id' => 644,
                'amount' => '43888.89',
                'name' => 'For the Month of September 2024',
                'created_at' => '2025-03-26 22:52:42',
                'updated_at' => '2025-03-26 22:52:42',
            ),
            77 => 
            array (
                'id' => 645,
                'amount' => '82778.00',
                'name' => 'FOR THE MONTH OF FEB 2025',
                'created_at' => '2025-03-27 00:28:26',
                'updated_at' => '2025-03-27 00:28:26',
            ),
            78 => 
            array (
                'id' => 646,
                'amount' => '78270.10',
                'name' => 'FOR THE MONTH OF FEB 2025',
                'created_at' => '2025-03-27 00:30:13',
                'updated_at' => '2025-03-27 00:30:13',
            ),
            79 => 
            array (
                'id' => 647,
                'amount' => '41666.67',
                'name' => 'FOR THE MONTH OF FEB 2025',
                'created_at' => '2025-03-27 00:32:28',
                'updated_at' => '2025-03-27 00:32:28',
            ),
            80 => 
            array (
                'id' => 648,
                'amount' => '15089.00',
                'name' => 'FOR THE MONTH OF FEB 2025',
                'created_at' => '2025-03-27 00:34:04',
                'updated_at' => '2025-03-27 00:34:04',
            ),
            81 => 
            array (
                'id' => 649,
                'amount' => '13423.00',
                'name' => 'FOR THE MONTH OF AUG 2023',
                'created_at' => '2025-03-27 00:35:26',
                'updated_at' => '2025-03-27 00:35:26',
            ),
            82 => 
            array (
                'id' => 650,
                'amount' => '45833.33',
                'name' => 'FOR THE MONTH OF FEB 2025',
                'created_at' => '2025-03-27 00:36:49',
                'updated_at' => '2025-03-27 00:36:49',
            ),
            83 => 
            array (
                'id' => 651,
                'amount' => '16080.00',
                'name' => 'FOR THE MONTH OF NOV 2024',
                'created_at' => '2025-03-27 00:38:47',
                'updated_at' => '2025-03-27 00:38:47',
            ),
            84 => 
            array (
                'id' => 652,
                'amount' => '7139.00',
                'name' => 'FOR THE MONTH OF JUL 2024',
                'created_at' => '2025-03-27 00:40:22',
                'updated_at' => '2025-03-27 00:40:22',
            ),
            85 => 
            array (
                'id' => 653,
                'amount' => '26445.00',
                'name' => 'FOR THE MONTH OF FEB 2025',
                'created_at' => '2025-03-27 00:41:47',
                'updated_at' => '2025-03-27 00:41:47',
            ),
            86 => 
            array (
                'id' => 654,
                'amount' => '10329.00',
                'name' => 'FOR THE MONTH OF FEB 2025',
                'created_at' => '2025-03-27 00:43:02',
                'updated_at' => '2025-03-27 00:43:02',
            ),
            87 => 
            array (
                'id' => 655,
                'amount' => '46291.66',
                'name' => 'FOR THE MONTH OF FEB 2025',
                'created_at' => '2025-03-27 00:44:20',
                'updated_at' => '2025-03-27 00:44:20',
            ),
            88 => 
            array (
                'id' => 657,
                'amount' => '14390.00',
                'name' => 'FOR THE MONTH OF FEB 2025',
                'created_at' => '2025-03-27 00:48:48',
                'updated_at' => '2025-03-27 00:48:48',
            ),
            89 => 
            array (
                'id' => 658,
                'amount' => '16695.00',
                'name' => 'FOR THE MONTH OF FEB 2025',
                'created_at' => '2025-03-27 00:55:29',
                'updated_at' => '2025-03-27 00:55:29',
            ),
            90 => 
            array (
                'id' => 659,
                'amount' => '21389.00',
                'name' => 'FOR THE MONTH OF FEB 2025',
                'created_at' => '2025-03-27 00:56:39',
                'updated_at' => '2025-03-27 00:56:39',
            ),
            91 => 
            array (
                'id' => 660,
                'amount' => '47445.00',
                'name' => 'FOR THE MONTH OF FEB 2025',
                'created_at' => '2025-03-27 00:58:16',
                'updated_at' => '2025-03-27 00:58:16',
            ),
            92 => 
            array (
                'id' => 661,
                'amount' => '16116.00',
                'name' => 'FOR THE MONTH OF FEB 2025',
                'created_at' => '2025-03-27 00:59:14',
                'updated_at' => '2025-03-27 00:59:14',
            ),
            93 => 
            array (
                'id' => 662,
                'amount' => '30834.00',
                'name' => 'FOR THE MONTH OF DEC 2024',
                'created_at' => '2025-03-27 01:00:31',
                'updated_at' => '2025-03-27 01:00:31',
            ),
            94 => 
            array (
                'id' => 663,
                'amount' => '42778.00',
                'name' => 'FOR THE MONTH OF FEB 2025',
                'created_at' => '2025-03-27 01:01:46',
                'updated_at' => '2025-03-27 01:01:46',
            ),
            95 => 
            array (
                'id' => 664,
                'amount' => '44166.00',
                'name' => 'FOR THE MONTH OF FEB 2025',
                'created_at' => '2025-03-27 01:04:09',
                'updated_at' => '2025-03-27 01:04:09',
            ),
            96 => 
            array (
                'id' => 665,
                'amount' => '7083.33',
                'name' => 'FOR THE MONTH OF DEC 2024',
                'created_at' => '2025-03-27 01:05:24',
                'updated_at' => '2025-03-27 01:05:24',
            ),
            97 => 
            array (
                'id' => 666,
                'amount' => '42500.00',
                'name' => 'FOR THE MONTH OF NOV 2024',
                'created_at' => '2025-03-27 01:08:11',
                'updated_at' => '2025-03-27 01:08:11',
            ),
            98 => 
            array (
                'id' => 667,
                'amount' => '42500.00',
                'name' => 'FOR THE MONTH OF DEC 2024',
                'created_at' => '2025-03-27 01:08:11',
                'updated_at' => '2025-03-27 01:08:11',
            ),
            99 => 
            array (
                'id' => 668,
                'amount' => '45277.77',
                'name' => 'FOR THE MONTH OF FEB 2025',
                'created_at' => '2025-03-27 01:09:56',
                'updated_at' => '2025-03-27 01:09:56',
            ),
            100 => 
            array (
                'id' => 669,
                'amount' => '15000.00',
                'name' => 'FOR THE MONTH OF NOV 2024',
                'created_at' => '2025-03-27 01:12:18',
                'updated_at' => '2025-03-27 01:12:18',
            ),
            101 => 
            array (
                'id' => 670,
                'amount' => '51250.00',
                'name' => 'FOR THE MONTH OF DEC 2024',
                'created_at' => '2025-03-27 01:12:18',
                'updated_at' => '2025-03-27 01:12:18',
            ),
            102 => 
            array (
                'id' => 671,
                'amount' => '33750.00',
                'name' => 'FOR THE MONTH OF JAN 2025',
                'created_at' => '2025-03-27 01:12:18',
                'updated_at' => '2025-03-27 01:12:18',
            ),
            103 => 
            array (
                'id' => 672,
                'amount' => '200000.00',
                'name' => 'FULL PAYMENT W/ TECH TRANS. FEE',
                'created_at' => '2025-03-27 01:14:39',
                'updated_at' => '2025-03-27 01:14:39',
            ),
            104 => 
            array (
                'id' => 673,
                'amount' => '41667.00',
                'name' => 'FOR THE MONTH OF MAY 2024',
                'created_at' => '2025-03-27 01:15:45',
                'updated_at' => '2025-03-27 01:15:45',
            ),
            105 => 
            array (
                'id' => 674,
                'amount' => '61112.00',
                'name' => 'FOR THE MONTH OF FEB 2025',
                'created_at' => '2025-03-27 01:17:08',
                'updated_at' => '2025-03-27 01:17:08',
            ),
            106 => 
            array (
                'id' => 675,
                'amount' => '13056.00',
                'name' => 'FOR THE MONTH OF FEB 2025',
                'created_at' => '2025-03-27 01:18:46',
                'updated_at' => '2025-03-27 01:18:46',
            ),
            107 => 
            array (
                'id' => 676,
                'amount' => '35833.33',
                'name' => 'FOR THE MONTH OF FEB 2025',
                'created_at' => '2025-03-27 01:22:19',
                'updated_at' => '2025-03-27 01:22:19',
            ),
            108 => 
            array (
                'id' => 677,
                'amount' => '21654.00',
                'name' => 'FOR THE MONTH OF FEB 2025',
                'created_at' => '2025-03-27 01:23:47',
                'updated_at' => '2025-03-27 01:23:47',
            ),
            109 => 
            array (
                'id' => 678,
                'amount' => '43750.00',
                'name' => 'FOR THE MONTH OF FEB 2025',
                'created_at' => '2025-03-27 01:26:18',
                'updated_at' => '2025-03-27 01:26:18',
            ),
            110 => 
            array (
                'id' => 679,
                'amount' => '33334.00',
                'name' => 'FOR THE MONTH OF MAR 2024',
                'created_at' => '2025-03-27 01:28:54',
                'updated_at' => '2025-03-27 01:28:54',
            ),
            111 => 
            array (
                'id' => 680,
                'amount' => '33334.00',
                'name' => 'FOR THE MONTH OF APR 2024',
                'created_at' => '2025-03-27 01:28:54',
                'updated_at' => '2025-03-27 01:28:54',
            ),
            112 => 
            array (
                'id' => 681,
                'amount' => '43333.33',
                'name' => 'FOR THE MONTH OF JAN 2025',
                'created_at' => '2025-03-27 01:31:04',
                'updated_at' => '2025-03-27 01:31:04',
            ),
            113 => 
            array (
                'id' => 682,
                'amount' => '35834.00',
                'name' => 'FOR THE MONTH OF FEB 2025',
                'created_at' => '2025-03-27 01:34:28',
                'updated_at' => '2025-03-27 01:34:28',
            ),
            114 => 
            array (
                'id' => 683,
                'amount' => '30000.00',
                'name' => 'FOR THE MONTH OF FEB 2025',
                'created_at' => '2025-03-27 01:36:31',
                'updated_at' => '2025-03-27 01:36:31',
            ),
            115 => 
            array (
                'id' => 684,
                'amount' => '83277.78',
                'name' => 'FOR THE MONTH OF FEB 2025',
                'created_at' => '2025-03-27 01:38:22',
                'updated_at' => '2025-03-27 01:38:22',
            ),
            116 => 
            array (
                'id' => 685,
                'amount' => '38333.00',
                'name' => 'FOR THE MONTH OF DEC 2024',
                'created_at' => '2025-03-27 01:40:24',
                'updated_at' => '2025-03-27 01:40:24',
            ),
            117 => 
            array (
                'id' => 686,
                'amount' => '38333.00',
                'name' => 'FOR THE MONTH OF JAN 2025',
                'created_at' => '2025-03-27 01:40:24',
                'updated_at' => '2025-03-27 01:40:24',
            ),
            118 => 
            array (
                'id' => 687,
                'amount' => '10721.80',
                'name' => 'FOR THE MONTH OF FEB 2025',
                'created_at' => '2025-03-27 01:42:23',
                'updated_at' => '2025-03-27 01:42:23',
            ),
            119 => 
            array (
                'id' => 688,
                'amount' => '2810.00',
                'name' => 'FOR THE MONTH OF NOV 2024',
                'created_at' => '2025-03-27 01:43:46',
                'updated_at' => '2025-03-27 01:43:46',
            ),
            120 => 
            array (
                'id' => 689,
                'amount' => '38333.00',
                'name' => 'FOR THE MONTH OF JAN 2025',
                'created_at' => '2025-03-27 01:45:21',
                'updated_at' => '2025-03-27 01:45:21',
            ),
            121 => 
            array (
                'id' => 690,
                'amount' => '39167.00',
                'name' => 'FOR THE MONTH OF JAN 2025',
                'created_at' => '2025-03-27 01:46:30',
                'updated_at' => '2025-03-27 01:46:30',
            ),
            122 => 
            array (
                'id' => 691,
                'amount' => '79689.00',
                'name' => 'FOR THE MONTH OF JAN 2025',
                'created_at' => '2025-03-27 01:48:17',
                'updated_at' => '2025-03-27 01:48:17',
            ),
            123 => 
            array (
                'id' => 692,
                'amount' => '75000.00',
                'name' => 'FOR THE MONTH OF DEC 2025',
                'created_at' => '2025-03-27 01:49:25',
                'updated_at' => '2025-03-27 01:49:25',
            ),
            124 => 
            array (
                'id' => 693,
                'amount' => '74750.00',
                'name' => 'FOR THE MONTH OF FEB 2025',
                'created_at' => '2025-03-27 01:51:15',
                'updated_at' => '2025-03-27 01:51:15',
            ),
            125 => 
            array (
                'id' => 694,
                'amount' => '17667.67',
                'name' => 'FOR THE MONTH OF JAN 2025',
                'created_at' => '2025-03-27 01:52:15',
                'updated_at' => '2025-03-27 01:52:15',
            ),
            126 => 
            array (
                'id' => 695,
                'amount' => '18334.00',
                'name' => 'FOR THE MONTH OF FEB 2025',
                'created_at' => '2025-03-27 01:53:47',
                'updated_at' => '2025-03-27 01:53:47',
            ),
            127 => 
            array (
                'id' => 696,
                'amount' => '31527.00',
                'name' => 'FOR THE MONTH OF FEB 2025',
                'created_at' => '2025-03-27 01:55:04',
                'updated_at' => '2025-03-27 01:55:04',
            ),
            128 => 
            array (
                'id' => 697,
                'amount' => '83334.00',
                'name' => 'FOR THE MONTH OF FEB 2025',
                'created_at' => '2025-03-27 01:56:07',
                'updated_at' => '2025-03-27 01:56:07',
            ),
            129 => 
            array (
                'id' => 698,
                'amount' => '27381.67',
                'name' => 'FOR THE MONTH OF FEB 2025',
                'created_at' => '2025-03-27 01:57:11',
                'updated_at' => '2025-03-27 01:57:11',
            ),
            130 => 
            array (
                'id' => 699,
                'amount' => '21667.00',
                'name' => 'FOR THE MONTH OF DEC 2024',
                'created_at' => '2025-03-27 01:58:40',
                'updated_at' => '2025-03-27 01:58:40',
            ),
            131 => 
            array (
                'id' => 700,
                'amount' => '33195.00',
                'name' => 'FOR THE MONTH OF JAN 2025',
                'created_at' => '2025-03-27 02:01:29',
                'updated_at' => '2025-03-27 02:01:29',
            ),
            132 => 
            array (
                'id' => 701,
                'amount' => '11020.14',
                'name' => 'FOR THE MONTH OF FEB 2025',
                'created_at' => '2025-03-27 02:03:38',
                'updated_at' => '2025-03-27 02:03:38',
            ),
            133 => 
            array (
                'id' => 702,
                'amount' => '69445.00',
                'name' => 'FOR THE MONTH OF FEB 2025',
                'created_at' => '2025-03-27 02:04:45',
                'updated_at' => '2025-03-27 02:04:45',
            ),
            134 => 
            array (
                'id' => 703,
                'amount' => '34306.00',
                'name' => 'FOR THE MONTH OF FEB 2022',
                'created_at' => '2025-03-27 02:07:47',
                'updated_at' => '2025-03-27 02:07:47',
            ),
            135 => 
            array (
                'id' => 704,
                'amount' => '21667.00',
                'name' => 'FOR THE MONTH OF JAN 2025',
                'created_at' => '2025-03-27 02:09:15',
                'updated_at' => '2025-03-27 02:09:15',
            ),
            136 => 
            array (
                'id' => 705,
                'amount' => '150000.00',
                'name' => 'FOR THE MONTH OF NOV-DEC 2024',
                'created_at' => '2025-03-27 02:11:11',
                'updated_at' => '2025-03-27 02:11:11',
            ),
            137 => 
            array (
                'id' => 706,
                'amount' => '94167.00',
                'name' => 'FOR THE MONTH OF NOV 2024-JAN 2025',
                'created_at' => '2025-03-27 02:12:39',
                'updated_at' => '2025-03-27 02:12:39',
            ),
            138 => 
            array (
                'id' => 707,
                'amount' => '90000.00',
                'name' => 'FOR THE MONTH OF SEP 2022-NOV 2022',
                'created_at' => '2025-03-27 02:14:37',
                'updated_at' => '2025-03-27 02:14:37',
            ),
            139 => 
            array (
                'id' => 708,
                'amount' => '34735.00',
                'name' => 'FOR THE MONTH OF FEBRUARY & MARCH 2025',
                'created_at' => '2025-03-27 22:53:14',
                'updated_at' => '2025-03-27 22:53:14',
            ),
            140 => 
            array (
                'id' => 709,
                'amount' => '15867.00',
                'name' => 'FOR THE MONTH OF February 2025',
                'created_at' => '2025-03-28 18:50:58',
                'updated_at' => '2025-03-28 18:50:58',
            ),
            141 => 
            array (
                'id' => 712,
                'amount' => '74000.00',
                'name' => 'FOR THE MONTH OF JUNE 2018',
                'created_at' => '2025-03-31 19:57:44',
                'updated_at' => '2025-03-31 19:57:44',
            ),
            142 => 
            array (
                'id' => 713,
                'amount' => '5503.00',
                'name' => 'FOR THE MONTH OF APRIL 2017',
                'created_at' => '2025-03-31 21:15:40',
                'updated_at' => '2025-03-31 21:15:40',
            ),
            143 => 
            array (
                'id' => 714,
                'amount' => '4497.00',
                'name' => 'FOR THE MONTH OF MAY 2017',
                'created_at' => '2025-03-31 21:15:40',
                'updated_at' => '2025-03-31 21:15:40',
            ),
            144 => 
            array (
                'id' => 715,
                'amount' => '5185.44',
                'name' => 'FOR THE MONTH OF MARCH 2025',
                'created_at' => '2025-04-03 02:33:14',
                'updated_at' => '2025-04-03 02:33:14',
            ),
            145 => 
            array (
                'id' => 716,
                'amount' => '10003.00',
                'name' => 'FOR THE MONTH OF APRIL 2024',
                'created_at' => '2025-04-03 02:41:00',
                'updated_at' => '2025-04-03 02:41:00',
            ),
            146 => 
            array (
                'id' => 717,
                'amount' => '10003.00',
                'name' => 'FOR THE MONTH OF MAY 2024',
                'created_at' => '2025-04-03 02:41:00',
                'updated_at' => '2025-04-03 02:41:00',
            ),
            147 => 
            array (
                'id' => 718,
                'amount' => '10003.00',
                'name' => 'FOR THE MONTH OF JUNE 2024',
                'created_at' => '2025-04-03 02:41:00',
                'updated_at' => '2025-04-03 02:41:00',
            ),
            148 => 
            array (
                'id' => 719,
                'amount' => '30.00',
                'name' => 'FOR THE MONTH OF JULY 2024',
                'created_at' => '2025-04-03 02:41:00',
                'updated_at' => '2025-04-03 02:41:00',
            ),
            149 => 
            array (
                'id' => 720,
                'amount' => '80275.72',
                'name' => 'FOR THE MONTH OF JAN 2025',
                'created_at' => '2025-04-07 20:26:07',
                'updated_at' => '2025-04-07 20:26:07',
            ),
            150 => 
            array (
                'id' => 721,
                'amount' => '14494.68',
                'name' => 'FOR THE MONTH OF FEB. 2025',
                'created_at' => '2025-04-07 20:26:07',
                'updated_at' => '2025-04-07 20:26:07',
            ),
            151 => 
            array (
                'id' => 722,
                'amount' => '4159987.52',
                'name' => 'INSTITUTIONAL DEVELOPMENT ACTIVITIES',
                'created_at' => '2025-04-09 01:07:30',
                'updated_at' => '2025-04-09 01:07:30',
            ),
            152 => 
            array (
                'id' => 723,
                'amount' => '46028.00',
                'name' => 'FOR THE MONTH OF November 2021',
                'created_at' => '2025-04-09 01:56:58',
                'updated_at' => '2025-04-09 01:56:58',
            ),
            153 => 
            array (
                'id' => 724,
                'amount' => '9975.00',
                'name' => 'FOR THE MONTH OF JULY 2024',
                'created_at' => '2025-04-09 02:05:00',
                'updated_at' => '2025-04-09 02:05:00',
            ),
            154 => 
            array (
                'id' => 725,
                'amount' => '110033.00',
                'name' => 'FOR THE MONTHS OF AUG.2024 TO JUNE 2025',
                'created_at' => '2025-04-09 02:05:00',
                'updated_at' => '2025-04-09 02:05:00',
            ),
            155 => 
            array (
                'id' => 726,
                'amount' => '1800.55',
                'name' => 'FOR THE MONTH OF JULY 2025',
                'created_at' => '2025-04-09 02:05:00',
                'updated_at' => '2025-04-09 02:05:00',
            ),
            156 => 
            array (
                'id' => 727,
                'amount' => '47556.00',
            'name' => 'Unutilized Project Fund (White Noise Analysis of Particulate MAtter)',
                'created_at' => '2025-04-14 22:47:41',
                'updated_at' => '2025-04-14 22:47:41',
            ),
            157 => 
            array (
                'id' => 728,
                'amount' => '69445.00',
                'name' => 'FOR THE MONTH OF JAN 2025',
                'created_at' => '2025-04-15 23:05:49',
                'updated_at' => '2025-04-15 23:05:49',
            ),
            158 => 
            array (
                'id' => 729,
                'amount' => '69425.00',
                'name' => 'FOR THE MONTH OF FEB. 2025',
                'created_at' => '2025-04-15 23:05:49',
                'updated_at' => '2025-04-15 23:05:49',
            ),
            159 => 
            array (
                'id' => 730,
                'amount' => '12500.00',
                'name' => 'FOR THE MONTH OF MARCH 2025',
                'created_at' => '2025-04-15 23:05:49',
                'updated_at' => '2025-04-15 23:05:49',
            ),
            160 => 
            array (
                'id' => 731,
                'amount' => '37489.00',
                'name' => 'FOR THE MONTH OF JAN 2023',
                'created_at' => '2025-04-15 23:30:50',
                'updated_at' => '2025-04-15 23:30:50',
            ),
            161 => 
            array (
                'id' => 732,
                'amount' => '12511.00',
            'name' => 'FOR THE MONTH OF FEB 2023 (Partial)',
                'created_at' => '2025-04-15 23:30:50',
                'updated_at' => '2025-04-15 23:30:50',
            ),
            162 => 
            array (
                'id' => 733,
                'amount' => '30150.00',
                'name' => 'FOR THE MONTH OF MARCH 2025',
                'created_at' => '2025-04-16 00:04:06',
                'updated_at' => '2025-04-16 00:04:06',
            ),
            163 => 
            array (
                'id' => 735,
                'amount' => '1288000.00',
                'name' => 'STIPEND FOR SCHOLARS APRPL 2025',
                'created_at' => '2025-04-16 19:58:06',
                'updated_at' => '2025-04-16 19:58:06',
            ),
            164 => 
            array (
                'id' => 736,
                'amount' => '43889.00',
                'name' => 'FOR THE MONTH OF OCT. 2024',
                'created_at' => '2025-04-25 21:59:36',
                'updated_at' => '2025-04-25 21:59:36',
            ),
            165 => 
            array (
                'id' => 737,
                'amount' => '15556.22',
                'name' => 'FOR THE MONTH OF APRIL, MAY & JUNE 2025',
                'created_at' => '2025-04-29 18:39:04',
                'updated_at' => '2025-04-29 18:39:04',
            ),
            166 => 
            array (
                'id' => 741,
                'amount' => '46028.00',
                'name' => 'FOR THE MONTH OF DECEMBER 2021',
                'created_at' => '2025-04-29 18:54:59',
                'updated_at' => '2025-04-29 18:54:59',
            ),
            167 => 
            array (
                'id' => 742,
                'amount' => '3791.00',
                'name' => 'FOR THE MONTH OF December 2015',
                'created_at' => '2025-04-29 19:26:31',
                'updated_at' => '2025-04-29 19:26:31',
            ),
            168 => 
            array (
                'id' => 743,
                'amount' => '12209.00',
                'name' => 'FOR THE MONTH OF JAN 2016',
                'created_at' => '2025-04-29 19:26:31',
                'updated_at' => '2025-04-29 19:26:31',
            ),
            169 => 
            array (
                'id' => 744,
                'amount' => '15866.67',
                'name' => 'FOR THE MONTH OF APRIL 2025',
                'created_at' => '2025-04-29 21:16:52',
                'updated_at' => '2025-04-29 21:16:52',
            ),
            170 => 
            array (
                'id' => 745,
                'amount' => '4665.00',
                'name' => 'Refund of UNEXPENDED balance GIA',
                'created_at' => '2025-04-29 21:29:32',
                'updated_at' => '2025-04-29 21:29:32',
            ),
            171 => 
            array (
                'id' => 746,
                'amount' => '41666.67',
                'name' => 'FOR THE MONTH OF MAR 2025',
                'created_at' => '2025-04-30 17:44:14',
                'updated_at' => '2025-04-30 17:44:14',
            ),
            172 => 
            array (
                'id' => 747,
                'amount' => '14900.00',
                'name' => 'FOR THE MONTH OF MAR 2025',
                'created_at' => '2025-04-30 17:47:04',
                'updated_at' => '2025-04-30 17:47:04',
            ),
            173 => 
            array (
                'id' => 749,
                'amount' => '45833.33',
                'name' => 'FOR THE MONTH OF MAR 2025',
                'created_at' => '2025-04-30 17:50:23',
                'updated_at' => '2025-04-30 17:50:23',
            ),
            174 => 
            array (
                'id' => 750,
                'amount' => '9558.00',
                'name' => 'FOR THE MONTH OF FEB 2025',
                'created_at' => '2025-04-30 17:52:31',
                'updated_at' => '2025-04-30 17:52:31',
            ),
            175 => 
            array (
                'id' => 751,
                'amount' => '13423.00',
                'name' => 'FOR THE MONTH OF SEP 2023',
                'created_at' => '2025-04-30 17:54:36',
                'updated_at' => '2025-04-30 17:54:36',
            ),
            176 => 
            array (
                'id' => 752,
                'amount' => '15089.00',
                'name' => 'FOR THE MONTH OF MAR 2025',
                'created_at' => '2025-04-30 17:59:35',
                'updated_at' => '2025-04-30 17:59:35',
            ),
            177 => 
            array (
                'id' => 753,
                'amount' => '78270.10',
                'name' => 'FOR THE MONTH OF MAR 2025',
                'created_at' => '2025-04-30 18:01:45',
                'updated_at' => '2025-04-30 18:01:45',
            ),
            178 => 
            array (
                'id' => 754,
                'amount' => '27777.00',
                'name' => 'FOR THE MONTH OF DEC 2024',
                'created_at' => '2025-04-30 18:13:02',
                'updated_at' => '2025-04-30 18:13:02',
            ),
            179 => 
            array (
                'id' => 755,
                'amount' => '15252.00',
                'name' => 'FOR THE MONTH OF FEB 2025 CK#11385',
                'created_at' => '2025-04-30 18:16:57',
                'updated_at' => '2025-04-30 18:16:57',
            ),
            180 => 
            array (
                'id' => 756,
                'amount' => '15252.00',
                'name' => 'FOR THE MONTH OF MAR 2022 CK# 11386',
                'created_at' => '2025-04-30 18:16:57',
                'updated_at' => '2025-04-30 18:16:57',
            ),
            181 => 
            array (
                'id' => 757,
                'amount' => '42899.00',
                'name' => 'FOR THE MONTH OF NOV 2024 CK#167553',
                'created_at' => '2025-04-30 18:22:51',
                'updated_at' => '2025-04-30 18:22:51',
            ),
            182 => 
            array (
                'id' => 758,
                'amount' => '42899.00',
                'name' => 'FOR THE MONTH OF DEC 2024 CK# 167555',
                'created_at' => '2025-04-30 18:22:51',
                'updated_at' => '2025-04-30 18:22:51',
            ),
            183 => 
            array (
                'id' => 759,
                'amount' => '42899.00',
                'name' => 'FOR THE MONTH OF JAN 2025 CK# 167556',
                'created_at' => '2025-04-30 18:22:51',
                'updated_at' => '2025-04-30 18:22:51',
            ),
            184 => 
            array (
                'id' => 760,
                'amount' => '43056.00',
                'name' => 'FOR THE MONTH OFAUG 2024 CK#41906',
                'created_at' => '2025-04-30 18:27:35',
                'updated_at' => '2025-04-30 18:27:35',
            ),
            185 => 
            array (
                'id' => 761,
                'amount' => '43056.00',
                'name' => 'FOR THE MONTH OF SEP 2024 CK# 41907',
                'created_at' => '2025-04-30 18:27:35',
                'updated_at' => '2025-04-30 18:27:35',
            ),
            186 => 
            array (
                'id' => 762,
                'amount' => '43056.00',
                'name' => 'FOR THE MONTH OF OCT 2024 CK# 41908',
                'created_at' => '2025-04-30 18:27:35',
                'updated_at' => '2025-04-30 18:27:35',
            ),
            187 => 
            array (
                'id' => 763,
                'amount' => '12639.00',
                'name' => 'FOR THE MONTH OF MAY 2024 CK#11431',
                'created_at' => '2025-04-30 18:32:12',
                'updated_at' => '2025-04-30 18:32:12',
            ),
            188 => 
            array (
                'id' => 764,
                'amount' => '12639.00',
                'name' => 'FOR THE MONTH OF JUN 2024 CK# 11433',
                'created_at' => '2025-04-30 18:32:12',
                'updated_at' => '2025-04-30 18:32:12',
            ),
            189 => 
            array (
                'id' => 765,
                'amount' => '12639.00',
                'name' => 'FOR THE MONTH OF JUL 2024 CK# 11434',
                'created_at' => '2025-04-30 18:32:12',
                'updated_at' => '2025-04-30 18:32:12',
            ),
            190 => 
            array (
                'id' => 766,
                'amount' => '47445.00',
                'name' => 'FOR THE MONTH OF MAR 2025',
                'created_at' => '2025-04-30 18:43:37',
                'updated_at' => '2025-04-30 18:43:37',
            ),
            191 => 
            array (
                'id' => 767,
                'amount' => '21389.00',
                'name' => 'FOR THE MONTH OF MAR 2025',
                'created_at' => '2025-04-30 18:46:00',
                'updated_at' => '2025-04-30 18:46:00',
            ),
            192 => 
            array (
                'id' => 768,
                'amount' => '16695.00',
                'name' => 'FOR THE MONTH OF MAR 2025',
                'created_at' => '2025-04-30 18:48:25',
                'updated_at' => '2025-04-30 18:48:25',
            ),
            193 => 
            array (
                'id' => 769,
                'amount' => '9691.00',
                'name' => 'FOR THE MONTH OF FEB 2025',
                'created_at' => '2025-04-30 18:50:38',
                'updated_at' => '2025-04-30 18:50:38',
            ),
            194 => 
            array (
                'id' => 770,
                'amount' => '14390.00',
                'name' => 'FOR THE MONTH OF MAR 2025',
                'created_at' => '2025-04-30 18:53:02',
                'updated_at' => '2025-04-30 18:53:02',
            ),
            195 => 
            array (
                'id' => 771,
                'amount' => '46291.66',
                'name' => 'FOR THE MONTH OF MAR 2025',
                'created_at' => '2025-04-30 18:55:35',
                'updated_at' => '2025-04-30 18:55:35',
            ),
            196 => 
            array (
                'id' => 772,
                'amount' => '10329.00',
                'name' => 'FOR THE MONTH OF MAR 2025',
                'created_at' => '2025-04-30 18:58:12',
                'updated_at' => '2025-04-30 18:58:12',
            ),
            197 => 
            array (
                'id' => 773,
                'amount' => '26445.00',
                'name' => 'FOR THE MONTH OF MAR 2025',
                'created_at' => '2025-04-30 19:00:07',
                'updated_at' => '2025-04-30 19:00:07',
            ),
            198 => 
            array (
                'id' => 774,
                'amount' => '7139.00',
                'name' => 'FOR THE MONTH OF AUG 2024',
                'created_at' => '2025-04-30 19:02:07',
                'updated_at' => '2025-04-30 19:02:07',
            ),
            199 => 
            array (
                'id' => 775,
                'amount' => '16080.00',
                'name' => 'FOR THE MONTH OF DEC 2024',
                'created_at' => '2025-04-30 19:05:13',
                'updated_at' => '2025-04-30 19:05:13',
            ),
            200 => 
            array (
                'id' => 776,
                'amount' => '30588.89',
                'name' => 'FOR THE MONTH OF MAR 2025',
                'created_at' => '2025-04-30 19:07:14',
                'updated_at' => '2025-04-30 19:07:14',
            ),
            201 => 
            array (
                'id' => 777,
                'amount' => '42770.00',
                'name' => 'FOR THE MONTH OF MAR 2025',
                'created_at' => '2025-04-30 19:26:29',
                'updated_at' => '2025-04-30 19:26:29',
            ),
            202 => 
            array (
                'id' => 778,
                'amount' => '30834.00',
                'name' => 'FOR THE MONTH OF JAN 2025',
                'created_at' => '2025-04-30 19:30:27',
                'updated_at' => '2025-04-30 19:30:27',
            ),
            203 => 
            array (
                'id' => 779,
                'amount' => '16116.00',
                'name' => 'FOR THE MONTH OF MAR 2025',
                'created_at' => '2025-04-30 19:32:45',
                'updated_at' => '2025-04-30 19:32:45',
            ),
            204 => 
            array (
                'id' => 780,
                'amount' => '45277.77',
                'name' => 'FOR THE MONTH OF MAR 2025',
                'created_at' => '2025-04-30 19:40:23',
                'updated_at' => '2025-04-30 19:40:23',
            ),
            205 => 
            array (
                'id' => 781,
                'amount' => '17777.78',
                'name' => 'FOR THE MONTH OF NOV 2024',
                'created_at' => '2025-04-30 19:42:51',
                'updated_at' => '2025-04-30 19:42:51',
            ),
            206 => 
            array (
                'id' => 782,
                'amount' => '7083.33',
                'name' => 'FOR THE MONTH OF JAN 2025',
                'created_at' => '2025-04-30 19:45:40',
                'updated_at' => '2025-04-30 19:45:40',
            ),
            207 => 
            array (
                'id' => 783,
                'amount' => '44166.00',
                'name' => 'FOR THE MONTH OF MAR 2025',
                'created_at' => '2025-04-30 19:48:14',
                'updated_at' => '2025-04-30 19:48:14',
            ),
            208 => 
            array (
                'id' => 784,
                'amount' => '9225.00',
                'name' => 'FOR THE MONTH OF NOV 2024',
                'created_at' => '2025-04-30 19:50:29',
                'updated_at' => '2025-04-30 19:50:29',
            ),
            209 => 
            array (
                'id' => 785,
                'amount' => '21654.00',
                'name' => 'FOR THE MONTH OF MAR 2025',
                'created_at' => '2025-04-30 21:09:55',
                'updated_at' => '2025-04-30 21:09:55',
            ),
            210 => 
            array (
                'id' => 786,
                'amount' => '56112.00',
                'name' => 'FOR THE MONTH OF SEP 2023 CK#349883',
                'created_at' => '2025-04-30 21:19:33',
                'updated_at' => '2025-04-30 21:19:33',
            ),
            211 => 
            array (
                'id' => 787,
                'amount' => '56112.00',
                'name' => 'FOR THE MONTH OF OCT 2023 CK#349884',
                'created_at' => '2025-04-30 21:19:33',
                'updated_at' => '2025-04-30 21:19:33',
            ),
            212 => 
            array (
                'id' => 788,
                'amount' => '8466.00',
                'name' => 'FOR THE MONTH OF FEB 2025',
                'created_at' => '2025-04-30 21:26:59',
                'updated_at' => '2025-04-30 21:26:59',
            ),
            213 => 
            array (
                'id' => 789,
                'amount' => '35833.33',
                'name' => 'FOR THE MONTH OF MAR 2025',
                'created_at' => '2025-04-30 21:29:16',
                'updated_at' => '2025-04-30 21:29:16',
            ),
            214 => 
            array (
                'id' => 790,
                'amount' => '61112.00',
                'name' => 'FOR THE MONTH OF MAR 2025',
                'created_at' => '2025-04-30 21:31:16',
                'updated_at' => '2025-04-30 21:31:16',
            ),
            215 => 
            array (
                'id' => 791,
                'amount' => '41667.00',
                'name' => 'FOR THE MONTH OF JUN 2024',
                'created_at' => '2025-04-30 21:34:10',
                'updated_at' => '2025-04-30 21:34:10',
            ),
            216 => 
            array (
                'id' => 792,
                'amount' => '35834.00',
                'name' => 'FOR THE MONTH OF MAR 2025',
                'created_at' => '2025-04-30 21:36:50',
                'updated_at' => '2025-04-30 21:36:50',
            ),
            217 => 
            array (
                'id' => 793,
                'amount' => '83334.00',
                'name' => 'FOR THE MONTH OF JAN 2023 CK#168077',
                'created_at' => '2025-04-30 21:41:51',
                'updated_at' => '2025-04-30 21:41:51',
            ),
            218 => 
            array (
                'id' => 794,
                'amount' => '83334.00',
                'name' => 'FOR THE MONTH OF FEB 2023 CK#168078',
                'created_at' => '2025-04-30 21:41:51',
                'updated_at' => '2025-04-30 21:41:51',
            ),
            219 => 
            array (
                'id' => 795,
                'amount' => '83334.00',
                'name' => 'FOR THE MONTH OF MAR 2023 CK#168079',
                'created_at' => '2025-04-30 21:41:51',
                'updated_at' => '2025-04-30 21:41:51',
            ),
            220 => 
            array (
                'id' => 796,
                'amount' => '33334.00',
                'name' => 'FOR THE MONTH OF MAY 2024',
                'created_at' => '2025-04-30 21:44:27',
                'updated_at' => '2025-04-30 21:44:27',
            ),
            221 => 
            array (
                'id' => 797,
                'amount' => '43333.33',
                'name' => 'FOR THE MONTH OF FEB 2025',
                'created_at' => '2025-04-30 21:46:55',
                'updated_at' => '2025-04-30 21:46:55',
            ),
            222 => 
            array (
                'id' => 798,
                'amount' => '43750.00',
                'name' => 'FOR THE MONTH OF MAR 2025',
                'created_at' => '2025-04-30 21:49:56',
                'updated_at' => '2025-04-30 21:49:56',
            ),
            223 => 
            array (
                'id' => 799,
                'amount' => '75000.00',
                'name' => 'FOR THE MONTH OF MAR 2025',
                'created_at' => '2025-04-30 21:56:47',
                'updated_at' => '2025-04-30 21:56:47',
            ),
            224 => 
            array (
                'id' => 800,
                'amount' => '83334.00',
                'name' => 'FOR THE MONTH OF MAR 2025',
                'created_at' => '2025-04-30 21:58:49',
                'updated_at' => '2025-04-30 21:58:49',
            ),
            225 => 
            array (
                'id' => 801,
                'amount' => '31527.00',
                'name' => 'FOR THE MONTH OF MAR 2025',
                'created_at' => '2025-04-30 22:01:26',
                'updated_at' => '2025-04-30 22:01:26',
            ),
            226 => 
            array (
                'id' => 802,
                'amount' => '18334.00',
                'name' => 'FOR THE MONTH OF MAR 2025',
                'created_at' => '2025-04-30 22:03:15',
                'updated_at' => '2025-04-30 22:03:15',
            ),
            227 => 
            array (
                'id' => 803,
                'amount' => '17667.67',
                'name' => 'FOR THE MONTH OF FEB 2025 CK# 1435507',
                'created_at' => '2025-04-30 22:11:14',
                'updated_at' => '2025-04-30 22:11:14',
            ),
            228 => 
            array (
                'id' => 804,
                'amount' => '17667.67',
                'name' => 'FOR THE MONTH OF MAR 2025 CK# 1435508',
                'created_at' => '2025-04-30 22:11:14',
                'updated_at' => '2025-04-30 22:11:14',
            ),
            229 => 
            array (
                'id' => 805,
                'amount' => '74750.00',
                'name' => 'FOR THE MONTH OF MAR 2025',
                'created_at' => '2025-04-30 22:17:37',
                'updated_at' => '2025-04-30 22:17:37',
            ),
            230 => 
            array (
                'id' => 806,
                'amount' => '38333.00',
                'name' => 'FOR THE MONTH OF FEB 2025',
                'created_at' => '2025-04-30 22:20:04',
                'updated_at' => '2025-04-30 22:20:04',
            ),
            231 => 
            array (
                'id' => 807,
                'amount' => '10721.80',
                'name' => 'FOR THE MONTH OF MAR 2025',
                'created_at' => '2025-04-30 22:22:13',
                'updated_at' => '2025-04-30 22:22:13',
            ),
            232 => 
            array (
                'id' => 808,
                'amount' => '33288.89',
                'name' => 'FOR THE MONTH OF FEB 2025',
                'created_at' => '2025-04-30 22:24:42',
                'updated_at' => '2025-04-30 22:24:42',
            ),
            233 => 
            array (
                'id' => 809,
                'amount' => '33288.89',
                'name' => 'FOR THE MONTH OF MAR 2025',
                'created_at' => '2025-04-30 22:24:42',
                'updated_at' => '2025-04-30 22:24:42',
            ),
            234 => 
            array (
                'id' => 810,
                'amount' => '83277.78',
                'name' => 'FOR THE MONTH OF MAR2025',
                'created_at' => '2025-04-30 22:27:23',
                'updated_at' => '2025-04-30 22:27:23',
            ),
            235 => 
            array (
                'id' => 811,
                'amount' => '43888.89',
                'name' => 'FOR THE MONTH OF FEB 2025',
                'created_at' => '2025-04-30 22:33:43',
                'updated_at' => '2025-04-30 22:33:43',
            ),
            236 => 
            array (
                'id' => 812,
                'amount' => '43888.89',
                'name' => 'FOR THE MONTH OF MAR 2025',
                'created_at' => '2025-04-30 22:33:43',
                'updated_at' => '2025-04-30 22:33:43',
            ),
            237 => 
            array (
                'id' => 813,
                'amount' => '30000.00',
                'name' => 'FOR THE MONTH OF MAR 2025',
                'created_at' => '2025-04-30 22:37:40',
                'updated_at' => '2025-04-30 22:37:40',
            ),
            238 => 
            array (
                'id' => 814,
                'amount' => '79861.11',
                'name' => 'FOR THE MONTH OF FEB 2025 CK#88763',
                'created_at' => '2025-04-30 22:41:32',
                'updated_at' => '2025-04-30 22:41:32',
            ),
            239 => 
            array (
                'id' => 815,
                'amount' => '79861.11',
                'name' => 'FOR THE MONTH OF MAR 2025 CK#88766',
                'created_at' => '2025-04-30 22:41:32',
                'updated_at' => '2025-04-30 22:41:32',
            ),
            240 => 
            array (
                'id' => 816,
                'amount' => '33195.00',
                'name' => 'FOR THE MONTH OF FEB 2025',
                'created_at' => '2025-04-30 22:45:01',
                'updated_at' => '2025-04-30 22:45:01',
            ),
            241 => 
            array (
                'id' => 817,
                'amount' => '27381.67',
                'name' => 'FOR THE MONTH OF MAR 2025',
                'created_at' => '2025-04-30 22:49:48',
                'updated_at' => '2025-04-30 22:49:48',
            ),
            242 => 
            array (
                'id' => 818,
                'amount' => '21667.00',
                'name' => 'FOR THE MONTH OF FEB 2025',
                'created_at' => '2025-04-30 22:52:00',
                'updated_at' => '2025-04-30 22:52:00',
            ),
            243 => 
            array (
                'id' => 819,
                'amount' => '42916.67',
                'name' => 'FOR THE MONTH OF DEC 2024',
                'created_at' => '2025-04-30 22:54:21',
                'updated_at' => '2025-04-30 22:54:21',
            ),
            244 => 
            array (
                'id' => 820,
                'amount' => '41667.00',
                'name' => 'FOR THE MONTH OF FEB 2025',
                'created_at' => '2025-04-30 22:57:08',
                'updated_at' => '2025-04-30 22:57:08',
            ),
            245 => 
            array (
                'id' => 821,
                'amount' => '41667.00',
                'name' => 'FOR THE MONTH OF MAR 2025',
                'created_at' => '2025-04-30 22:57:08',
                'updated_at' => '2025-04-30 22:57:08',
            ),
            246 => 
            array (
                'id' => 822,
                'amount' => '39167.00',
                'name' => 'FOR THE MONTH OF FEB 2025',
                'created_at' => '2025-04-30 22:59:36',
                'updated_at' => '2025-04-30 22:59:36',
            ),
            247 => 
            array (
                'id' => 823,
                'amount' => '6944.44',
                'name' => 'FOR THE MONTH OF FEB 2025',
                'created_at' => '2025-04-30 23:08:14',
                'updated_at' => '2025-04-30 23:08:14',
            ),
            248 => 
            array (
                'id' => 824,
                'amount' => '6944.44',
                'name' => 'FOR THE MONTH OF MAR 2025',
                'created_at' => '2025-04-30 23:08:14',
                'updated_at' => '2025-04-30 23:08:14',
            ),
            249 => 
            array (
                'id' => 825,
                'amount' => '43889.00',
                'name' => 'FOR THE MONTH OF FEB 2025',
                'created_at' => '2025-04-30 23:10:43',
                'updated_at' => '2025-04-30 23:10:43',
            ),
            250 => 
            array (
                'id' => 826,
                'amount' => '43889.00',
                'name' => 'FOR THE MONTH OF MAR 2025',
                'created_at' => '2025-04-30 23:10:43',
                'updated_at' => '2025-04-30 23:10:43',
            ),
            251 => 
            array (
                'id' => 827,
                'amount' => '11020.14',
                'name' => 'FOR THE MONTH OF MAR 2025',
                'created_at' => '2025-04-30 23:12:52',
                'updated_at' => '2025-04-30 23:12:52',
            ),
            252 => 
            array (
                'id' => 828,
                'amount' => '69445.00',
                'name' => 'FOR THE MONTH OF MAR 2025',
                'created_at' => '2025-04-30 23:15:18',
                'updated_at' => '2025-04-30 23:15:18',
            ),
            253 => 
            array (
                'id' => 829,
                'amount' => '79689.00',
                'name' => 'FOR THE MONTH OF FEB 2025',
                'created_at' => '2025-04-30 23:19:16',
                'updated_at' => '2025-04-30 23:19:16',
            ),
            254 => 
            array (
                'id' => 830,
                'amount' => '37500.00',
                'name' => 'FOR THE MONTH OF NOV 2024 CK#154705',
                'created_at' => '2025-04-30 23:22:45',
                'updated_at' => '2025-04-30 23:22:45',
            ),
            255 => 
            array (
                'id' => 831,
                'amount' => '6750.00',
                'name' => 'FOR THE MONTH OF DEC 2024 CK#154708',
                'created_at' => '2025-04-30 23:22:45',
                'updated_at' => '2025-04-30 23:22:45',
            ),
            256 => 
            array (
                'id' => 832,
                'amount' => '20833.00',
                'name' => 'FOR THE MONTH OF SEP 2024 CK#1080',
                'created_at' => '2025-04-30 23:32:18',
                'updated_at' => '2025-04-30 23:32:18',
            ),
            257 => 
            array (
                'id' => 833,
                'amount' => '20833.00',
                'name' => 'FOR THE MONTH OF OCT 2024 CK#1081',
                'created_at' => '2025-04-30 23:32:18',
                'updated_at' => '2025-04-30 23:32:18',
            ),
            258 => 
            array (
                'id' => 834,
                'amount' => '20833.00',
                'name' => 'FOR THE MONTH OF NOV 2024 CK#1082',
                'created_at' => '2025-04-30 23:32:18',
                'updated_at' => '2025-04-30 23:32:18',
            ),
            259 => 
            array (
                'id' => 835,
                'amount' => '162591.00',
                'name' => 'FOR THE MONTH OF FEB 2025 - JUL 2025 W/ TTF',
                'created_at' => '2025-04-30 23:35:16',
                'updated_at' => '2025-04-30 23:35:16',
            ),
            260 => 
            array (
                'id' => 836,
                'amount' => '6697.50',
                'name' => 'TECH TRANSFER FEE',
                'created_at' => '2025-04-30 23:39:49',
                'updated_at' => '2025-04-30 23:39:49',
            ),
            261 => 
            array (
                'id' => 837,
                'amount' => '38333.00',
                'name' => 'FOR THE MONTH OF FEB 2025',
                'created_at' => '2025-04-30 23:42:05',
                'updated_at' => '2025-04-30 23:42:05',
            ),
            262 => 
            array (
                'id' => 838,
                'amount' => '46805.56',
                'name' => 'FOR THE MONTH OF MAR 2024',
                'created_at' => '2025-04-30 23:45:57',
                'updated_at' => '2025-04-30 23:45:57',
            ),
            263 => 
            array (
                'id' => 839,
                'amount' => '6450.00',
                'name' => 'FOR THE MONTH OF AUG 2022 CK#72595',
                'created_at' => '2025-04-30 23:49:31',
                'updated_at' => '2025-04-30 23:49:31',
            ),
            264 => 
            array (
                'id' => 840,
                'amount' => '1175.00',
                'name' => 'FOR THE MONTH OF SEP 2022 CK#72596',
                'created_at' => '2025-04-30 23:49:31',
                'updated_at' => '2025-04-30 23:49:31',
            ),
        ));

        
    }
}