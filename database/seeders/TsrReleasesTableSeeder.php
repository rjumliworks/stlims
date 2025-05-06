<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TsrReleasesTableSeeder extends Seeder
{
    /**
     * Auto generated seeder file.
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tsr_releases')->delete();
        
        \DB::table('tsr_releases')->insert(array (
            0 => 
            array (
                'id' => 1,
                'released_at' => '2024-09-30',
                'status_id' => 27,
                'user_id' => 14,
                'tsr_id' => 243,
                'created_at' => '2024-12-03 18:07:21',
                'updated_at' => '2024-12-03 18:07:54',
            ),
            1 => 
            array (
                'id' => 2,
                'released_at' => '2024-09-25',
                'status_id' => 27,
                'user_id' => 14,
                'tsr_id' => 194,
                'created_at' => '2024-12-03 18:25:00',
                'updated_at' => '2024-12-03 18:25:26',
            ),
            2 => 
            array (
                'id' => 3,
                'released_at' => '2024-09-25',
                'status_id' => 27,
                'user_id' => 14,
                'tsr_id' => 286,
                'created_at' => '2024-12-03 18:26:06',
                'updated_at' => '2024-12-03 18:26:15',
            ),
            3 => 
            array (
                'id' => 4,
                'released_at' => '2024-09-25',
                'status_id' => 27,
                'user_id' => 14,
                'tsr_id' => 215,
                'created_at' => '2024-12-03 18:27:55',
                'updated_at' => '2024-12-03 18:28:05',
            ),
            4 => 
            array (
                'id' => 5,
                'released_at' => '2024-09-25',
                'status_id' => 27,
                'user_id' => 14,
                'tsr_id' => 201,
                'created_at' => '2024-12-03 18:29:10',
                'updated_at' => '2024-12-03 18:29:18',
            ),
            5 => 
            array (
                'id' => 6,
                'released_at' => '2024-09-24',
                'status_id' => 27,
                'user_id' => 14,
                'tsr_id' => 274,
                'created_at' => '2024-12-03 18:30:09',
                'updated_at' => '2024-12-03 18:30:54',
            ),
            6 => 
            array (
                'id' => 7,
                'released_at' => '2024-09-24',
                'status_id' => 27,
                'user_id' => 14,
                'tsr_id' => 188,
                'created_at' => '2024-12-03 18:40:09',
                'updated_at' => '2024-12-03 18:51:35',
            ),
            7 => 
            array (
                'id' => 8,
                'released_at' => '2024-09-24',
                'status_id' => 27,
                'user_id' => 14,
                'tsr_id' => 186,
                'created_at' => '2024-12-03 18:43:25',
                'updated_at' => '2024-12-03 18:51:26',
            ),
            8 => 
            array (
                'id' => 9,
                'released_at' => '2024-10-24',
                'status_id' => 27,
                'user_id' => 14,
                'tsr_id' => 180,
                'created_at' => '2024-12-03 18:44:22',
                'updated_at' => '2024-12-03 18:51:18',
            ),
            9 => 
            array (
                'id' => 10,
                'released_at' => '2024-09-24',
                'status_id' => 27,
                'user_id' => 14,
                'tsr_id' => 187,
                'created_at' => '2024-12-03 18:52:14',
                'updated_at' => '2024-12-03 18:53:15',
            ),
            10 => 
            array (
                'id' => 11,
                'released_at' => '2024-09-24',
                'status_id' => 27,
                'user_id' => 14,
                'tsr_id' => 179,
                'created_at' => '2024-12-03 18:53:28',
                'updated_at' => '2024-12-03 18:53:41',
            ),
            11 => 
            array (
                'id' => 12,
                'released_at' => '2024-09-24',
                'status_id' => 27,
                'user_id' => 14,
                'tsr_id' => 181,
                'created_at' => '2024-12-03 18:55:33',
                'updated_at' => '2024-12-03 18:55:53',
            ),
            12 => 
            array (
                'id' => 13,
                'released_at' => '2024-09-23',
                'status_id' => 27,
                'user_id' => 14,
                'tsr_id' => 74,
                'created_at' => '2024-12-03 18:58:50',
                'updated_at' => '2024-12-03 18:58:58',
            ),
            13 => 
            array (
                'id' => 14,
                'released_at' => '2024-09-23',
                'status_id' => 27,
                'user_id' => 14,
                'tsr_id' => 219,
                'created_at' => '2024-12-03 19:00:12',
                'updated_at' => '2024-12-03 19:00:23',
            ),
            14 => 
            array (
                'id' => 15,
                'released_at' => '2024-09-23',
                'status_id' => 27,
                'user_id' => 14,
                'tsr_id' => 115,
                'created_at' => '2024-12-03 19:01:07',
                'updated_at' => '2024-12-03 19:01:15',
            ),
            15 => 
            array (
                'id' => 16,
                'released_at' => '2024-09-20',
                'status_id' => 27,
                'user_id' => 14,
                'tsr_id' => 209,
                'created_at' => '2024-12-03 19:39:49',
                'updated_at' => '2024-12-03 19:40:06',
            ),
            16 => 
            array (
                'id' => 17,
                'released_at' => '2024-09-20',
                'status_id' => 27,
                'user_id' => 14,
                'tsr_id' => 134,
                'created_at' => '2024-12-03 19:41:03',
                'updated_at' => '2024-12-03 19:41:12',
            ),
            17 => 
            array (
                'id' => 18,
                'released_at' => '2024-09-20',
                'status_id' => 27,
                'user_id' => 14,
                'tsr_id' => 135,
                'created_at' => '2024-12-03 19:41:57',
                'updated_at' => '2024-12-03 19:42:05',
            ),
            18 => 
            array (
                'id' => 19,
                'released_at' => '2024-09-20',
                'status_id' => 27,
                'user_id' => 14,
                'tsr_id' => 450,
                'created_at' => '2024-12-03 19:42:47',
                'updated_at' => '2024-12-03 19:42:55',
            ),
            19 => 
            array (
                'id' => 20,
                'released_at' => '2024-12-06',
                'status_id' => 27,
                'user_id' => 14,
                'tsr_id' => 612,
                'created_at' => '2024-12-05 21:34:40',
                'updated_at' => '2024-12-06 18:23:30',
            ),
            20 => 
            array (
                'id' => 21,
                'released_at' => NULL,
                'status_id' => 26,
                'user_id' => NULL,
                'tsr_id' => 664,
                'created_at' => '2024-12-10 22:28:28',
                'updated_at' => '2024-12-10 22:28:28',
            ),
            21 => 
            array (
                'id' => 22,
                'released_at' => '2024-12-10',
                'status_id' => 27,
                'user_id' => 14,
                'tsr_id' => 555,
                'created_at' => '2024-12-10 22:48:47',
                'updated_at' => '2025-02-10 19:53:42',
            ),
            22 => 
            array (
                'id' => 23,
                'released_at' => NULL,
                'status_id' => 26,
                'user_id' => NULL,
                'tsr_id' => 594,
                'created_at' => '2024-12-11 22:44:20',
                'updated_at' => '2024-12-11 22:44:20',
            ),
            23 => 
            array (
                'id' => 24,
                'released_at' => NULL,
                'status_id' => 26,
                'user_id' => NULL,
                'tsr_id' => 482,
                'created_at' => '2024-12-11 22:51:26',
                'updated_at' => '2024-12-11 22:51:26',
            ),
            24 => 
            array (
                'id' => 25,
                'released_at' => '2024-12-23',
                'status_id' => 27,
                'user_id' => 14,
                'tsr_id' => 170,
                'created_at' => '2024-12-12 23:15:24',
                'updated_at' => '2025-02-10 19:52:36',
            ),
            25 => 
            array (
                'id' => 26,
                'released_at' => NULL,
                'status_id' => 26,
                'user_id' => NULL,
                'tsr_id' => 237,
                'created_at' => '2024-12-12 23:21:57',
                'updated_at' => '2024-12-12 23:21:57',
            ),
            26 => 
            array (
                'id' => 27,
                'released_at' => '2024-12-23',
                'status_id' => 27,
                'user_id' => 14,
                'tsr_id' => 250,
                'created_at' => '2024-12-12 23:23:24',
                'updated_at' => '2025-02-10 19:52:02',
            ),
            27 => 
            array (
                'id' => 28,
                'released_at' => NULL,
                'status_id' => 26,
                'user_id' => NULL,
                'tsr_id' => 270,
                'created_at' => '2024-12-12 23:24:56',
                'updated_at' => '2024-12-12 23:24:56',
            ),
            28 => 
            array (
                'id' => 29,
                'released_at' => NULL,
                'status_id' => 26,
                'user_id' => NULL,
                'tsr_id' => 287,
                'created_at' => '2024-12-12 23:26:20',
                'updated_at' => '2024-12-12 23:26:20',
            ),
            29 => 
            array (
                'id' => 30,
                'released_at' => '2024-12-23',
                'status_id' => 27,
                'user_id' => 14,
                'tsr_id' => 649,
                'created_at' => '2024-12-23 21:58:21',
                'updated_at' => '2024-12-23 21:58:39',
            ),
            30 => 
            array (
                'id' => 31,
                'released_at' => NULL,
                'status_id' => 26,
                'user_id' => NULL,
                'tsr_id' => 777,
                'created_at' => '2024-12-23 22:29:39',
                'updated_at' => '2024-12-23 22:29:39',
            ),
            31 => 
            array (
                'id' => 32,
                'released_at' => '2025-01-15',
                'status_id' => 27,
                'user_id' => 14,
                'tsr_id' => 1157,
                'created_at' => '2025-01-16 16:33:19',
                'updated_at' => '2025-01-16 16:33:37',
            ),
            32 => 
            array (
                'id' => 33,
                'released_at' => '2025-01-16',
                'status_id' => 27,
                'user_id' => 14,
                'tsr_id' => 1102,
                'created_at' => '2025-01-16 17:06:38',
                'updated_at' => '2025-01-16 17:06:51',
            ),
            33 => 
            array (
                'id' => 34,
                'released_at' => '2025-02-04',
                'status_id' => 27,
                'user_id' => 14,
                'tsr_id' => 1092,
                'created_at' => '2025-02-05 21:14:58',
                'updated_at' => '2025-02-05 21:15:19',
            ),
            34 => 
            array (
                'id' => 35,
                'released_at' => '2025-02-05',
                'status_id' => 27,
                'user_id' => 14,
                'tsr_id' => 1093,
                'created_at' => '2025-02-05 21:15:36',
                'updated_at' => '2025-02-05 21:15:46',
            ),
            35 => 
            array (
                'id' => 36,
                'released_at' => '2025-02-05',
                'status_id' => 27,
                'user_id' => 14,
                'tsr_id' => 1094,
                'created_at' => '2025-02-05 21:15:57',
                'updated_at' => '2025-02-05 21:16:03',
            ),
            36 => 
            array (
                'id' => 37,
                'released_at' => NULL,
                'status_id' => 26,
                'user_id' => NULL,
                'tsr_id' => 1137,
                'created_at' => '2025-02-05 21:16:25',
                'updated_at' => '2025-02-05 21:16:25',
            ),
            37 => 
            array (
                'id' => 38,
                'released_at' => '2025-02-05',
                'status_id' => 27,
                'user_id' => 14,
                'tsr_id' => 1139,
                'created_at' => '2025-02-05 21:16:47',
                'updated_at' => '2025-02-05 21:16:54',
            ),
            38 => 
            array (
                'id' => 39,
                'released_at' => '2025-02-05',
                'status_id' => 27,
                'user_id' => 14,
                'tsr_id' => 1140,
                'created_at' => '2025-02-05 21:17:07',
                'updated_at' => '2025-02-05 21:17:14',
            ),
            39 => 
            array (
                'id' => 40,
                'released_at' => '2025-02-05',
                'status_id' => 27,
                'user_id' => 14,
                'tsr_id' => 1160,
                'created_at' => '2025-02-05 21:17:29',
                'updated_at' => '2025-02-05 21:17:38',
            ),
            40 => 
            array (
                'id' => 41,
                'released_at' => '2025-01-20',
                'status_id' => 27,
                'user_id' => 14,
                'tsr_id' => 1195,
                'created_at' => '2025-02-05 21:18:00',
                'updated_at' => '2025-02-05 21:18:11',
            ),
            41 => 
            array (
                'id' => 42,
                'released_at' => '2025-01-20',
                'status_id' => 27,
                'user_id' => 14,
                'tsr_id' => 1196,
                'created_at' => '2025-02-05 21:18:24',
                'updated_at' => '2025-02-05 21:18:30',
            ),
            42 => 
            array (
                'id' => 43,
                'released_at' => '2025-01-21',
                'status_id' => 27,
                'user_id' => 14,
                'tsr_id' => 1215,
                'created_at' => '2025-02-05 21:18:52',
                'updated_at' => '2025-02-05 21:19:00',
            ),
            43 => 
            array (
                'id' => 44,
                'released_at' => '2025-01-22',
                'status_id' => 27,
                'user_id' => 14,
                'tsr_id' => 1217,
                'created_at' => '2025-02-05 21:19:09',
                'updated_at' => '2025-02-05 21:19:17',
            ),
            44 => 
            array (
                'id' => 45,
                'released_at' => '2025-02-04',
                'status_id' => 27,
                'user_id' => 14,
                'tsr_id' => 1191,
                'created_at' => '2025-02-05 23:49:09',
                'updated_at' => '2025-02-05 23:49:29',
            ),
            45 => 
            array (
                'id' => 46,
                'released_at' => '2025-02-12',
                'status_id' => 27,
                'user_id' => 14,
                'tsr_id' => 1170,
                'created_at' => '2025-02-06 22:39:21',
                'updated_at' => '2025-03-04 20:01:27',
            ),
            46 => 
            array (
                'id' => 47,
                'released_at' => '2025-02-07',
                'status_id' => 27,
                'user_id' => 14,
                'tsr_id' => 1193,
                'created_at' => '2025-02-06 22:40:16',
                'updated_at' => '2025-03-04 20:02:27',
            ),
            47 => 
            array (
                'id' => 48,
                'released_at' => NULL,
                'status_id' => 26,
                'user_id' => NULL,
                'tsr_id' => 1266,
                'created_at' => '2025-02-06 22:40:53',
                'updated_at' => '2025-02-06 22:40:53',
            ),
            48 => 
            array (
                'id' => 49,
                'released_at' => '2025-01-31',
                'status_id' => 27,
                'user_id' => 14,
                'tsr_id' => 1152,
                'created_at' => '2025-02-06 22:49:09',
                'updated_at' => '2025-02-06 22:49:22',
            ),
            49 => 
            array (
                'id' => 50,
                'released_at' => '2025-02-07',
                'status_id' => 27,
                'user_id' => 14,
                'tsr_id' => 1164,
                'created_at' => '2025-02-06 22:50:00',
                'updated_at' => '2025-03-04 20:00:39',
            ),
            50 => 
            array (
                'id' => 51,
                'released_at' => NULL,
                'status_id' => 26,
                'user_id' => NULL,
                'tsr_id' => 1180,
                'created_at' => '2025-02-06 22:50:33',
                'updated_at' => '2025-02-06 22:50:33',
            ),
            51 => 
            array (
                'id' => 52,
                'released_at' => '2025-02-07',
                'status_id' => 27,
                'user_id' => 14,
                'tsr_id' => 1194,
                'created_at' => '2025-02-06 22:51:11',
                'updated_at' => '2025-03-04 20:02:49',
            ),
            52 => 
            array (
                'id' => 53,
                'released_at' => '2025-01-31',
                'status_id' => 27,
                'user_id' => 14,
                'tsr_id' => 1211,
                'created_at' => '2025-02-06 22:51:26',
                'updated_at' => '2025-02-06 22:51:34',
            ),
            53 => 
            array (
                'id' => 54,
                'released_at' => '2025-02-04',
                'status_id' => 27,
                'user_id' => 14,
                'tsr_id' => 1218,
                'created_at' => '2025-02-06 22:51:50',
                'updated_at' => '2025-02-06 22:52:02',
            ),
            54 => 
            array (
                'id' => 55,
                'released_at' => '2025-01-31',
                'status_id' => 27,
                'user_id' => 14,
                'tsr_id' => 1224,
                'created_at' => '2025-02-06 22:52:19',
                'updated_at' => '2025-02-06 22:52:26',
            ),
            55 => 
            array (
                'id' => 56,
                'released_at' => '2025-01-31',
                'status_id' => 27,
                'user_id' => 14,
                'tsr_id' => 1229,
                'created_at' => '2025-02-06 22:53:09',
                'updated_at' => '2025-02-06 22:53:16',
            ),
            56 => 
            array (
                'id' => 57,
                'released_at' => '2025-02-03',
                'status_id' => 27,
                'user_id' => 14,
                'tsr_id' => 1146,
                'created_at' => '2025-02-06 22:53:55',
                'updated_at' => '2025-02-06 22:54:05',
            ),
            57 => 
            array (
                'id' => 58,
                'released_at' => '2025-01-21',
                'status_id' => 27,
                'user_id' => 14,
                'tsr_id' => 1153,
                'created_at' => '2025-02-06 22:54:20',
                'updated_at' => '2025-02-06 22:54:27',
            ),
            58 => 
            array (
                'id' => 59,
                'released_at' => '2025-01-10',
                'status_id' => 27,
                'user_id' => 14,
                'tsr_id' => 1158,
                'created_at' => '2025-02-06 22:54:44',
                'updated_at' => '2025-02-06 22:54:55',
            ),
            59 => 
            array (
                'id' => 60,
                'released_at' => '2025-02-06',
                'status_id' => 27,
                'user_id' => 14,
                'tsr_id' => 1161,
                'created_at' => '2025-02-06 22:55:23',
                'updated_at' => '2025-02-06 22:55:29',
            ),
            60 => 
            array (
                'id' => 61,
                'released_at' => '2025-01-31',
                'status_id' => 27,
                'user_id' => 14,
                'tsr_id' => 1163,
                'created_at' => '2025-02-06 22:55:42',
                'updated_at' => '2025-02-06 22:55:49',
            ),
            61 => 
            array (
                'id' => 62,
                'released_at' => '2025-01-22',
                'status_id' => 27,
                'user_id' => 14,
                'tsr_id' => 1175,
                'created_at' => '2025-02-06 22:56:05',
                'updated_at' => '2025-02-06 22:56:12',
            ),
            62 => 
            array (
                'id' => 63,
                'released_at' => '2025-01-20',
                'status_id' => 27,
                'user_id' => 14,
                'tsr_id' => 1176,
                'created_at' => '2025-02-06 22:56:23',
                'updated_at' => '2025-02-06 22:56:32',
            ),
            63 => 
            array (
                'id' => 64,
                'released_at' => NULL,
                'status_id' => 26,
                'user_id' => NULL,
                'tsr_id' => 1167,
                'created_at' => '2025-02-06 22:56:58',
                'updated_at' => '2025-02-06 22:56:58',
            ),
            64 => 
            array (
                'id' => 65,
                'released_at' => NULL,
                'status_id' => 26,
                'user_id' => NULL,
                'tsr_id' => 1169,
                'created_at' => '2025-02-06 22:57:14',
                'updated_at' => '2025-02-06 22:57:14',
            ),
            65 => 
            array (
                'id' => 66,
                'released_at' => NULL,
                'status_id' => 26,
                'user_id' => NULL,
                'tsr_id' => 1171,
                'created_at' => '2025-02-06 22:57:25',
                'updated_at' => '2025-02-06 22:57:25',
            ),
            66 => 
            array (
                'id' => 67,
                'released_at' => NULL,
                'status_id' => 26,
                'user_id' => NULL,
                'tsr_id' => 1192,
                'created_at' => '2025-02-06 22:58:07',
                'updated_at' => '2025-02-06 22:58:07',
            ),
            67 => 
            array (
                'id' => 68,
                'released_at' => '2025-01-30',
                'status_id' => 27,
                'user_id' => 14,
                'tsr_id' => 1198,
                'created_at' => '2025-02-06 22:58:17',
                'updated_at' => '2025-02-06 22:58:26',
            ),
            68 => 
            array (
                'id' => 69,
                'released_at' => NULL,
                'status_id' => 26,
                'user_id' => NULL,
                'tsr_id' => 1199,
                'created_at' => '2025-02-06 22:58:36',
                'updated_at' => '2025-02-06 22:58:36',
            ),
            69 => 
            array (
                'id' => 70,
                'released_at' => NULL,
                'status_id' => 26,
                'user_id' => NULL,
                'tsr_id' => 1201,
                'created_at' => '2025-02-06 22:58:49',
                'updated_at' => '2025-02-06 22:58:49',
            ),
            70 => 
            array (
                'id' => 71,
                'released_at' => '2025-01-30',
                'status_id' => 27,
                'user_id' => 14,
                'tsr_id' => 1203,
                'created_at' => '2025-02-06 22:58:58',
                'updated_at' => '2025-02-06 22:59:06',
            ),
            71 => 
            array (
                'id' => 72,
                'released_at' => '2025-01-30',
                'status_id' => 27,
                'user_id' => 14,
                'tsr_id' => 1206,
                'created_at' => '2025-02-06 22:59:22',
                'updated_at' => '2025-02-06 22:59:29',
            ),
            72 => 
            array (
                'id' => 73,
                'released_at' => NULL,
                'status_id' => 26,
                'user_id' => NULL,
                'tsr_id' => 1207,
                'created_at' => '2025-02-06 22:59:39',
                'updated_at' => '2025-02-06 22:59:39',
            ),
            73 => 
            array (
                'id' => 74,
                'released_at' => NULL,
                'status_id' => 26,
                'user_id' => NULL,
                'tsr_id' => 1208,
                'created_at' => '2025-02-06 22:59:46',
                'updated_at' => '2025-02-06 22:59:46',
            ),
            74 => 
            array (
                'id' => 75,
                'released_at' => NULL,
                'status_id' => 26,
                'user_id' => NULL,
                'tsr_id' => 1209,
                'created_at' => '2025-02-06 22:59:52',
                'updated_at' => '2025-02-06 22:59:52',
            ),
            75 => 
            array (
                'id' => 76,
                'released_at' => NULL,
                'status_id' => 26,
                'user_id' => NULL,
                'tsr_id' => 1210,
                'created_at' => '2025-02-06 23:00:04',
                'updated_at' => '2025-02-06 23:00:04',
            ),
            76 => 
            array (
                'id' => 77,
                'released_at' => '2025-02-06',
                'status_id' => 27,
                'user_id' => 14,
                'tsr_id' => 1212,
                'created_at' => '2025-02-06 23:00:11',
                'updated_at' => '2025-02-06 23:00:21',
            ),
            77 => 
            array (
                'id' => 78,
                'released_at' => NULL,
                'status_id' => 26,
                'user_id' => NULL,
                'tsr_id' => 1216,
                'created_at' => '2025-02-06 23:00:30',
                'updated_at' => '2025-02-06 23:00:30',
            ),
            78 => 
            array (
                'id' => 79,
                'released_at' => NULL,
                'status_id' => 26,
                'user_id' => NULL,
                'tsr_id' => 1221,
                'created_at' => '2025-02-06 23:00:37',
                'updated_at' => '2025-02-06 23:00:37',
            ),
            79 => 
            array (
                'id' => 80,
                'released_at' => '2025-01-31',
                'status_id' => 27,
                'user_id' => 14,
                'tsr_id' => 1223,
                'created_at' => '2025-02-06 23:00:49',
                'updated_at' => '2025-02-06 23:00:56',
            ),
            80 => 
            array (
                'id' => 81,
                'released_at' => NULL,
                'status_id' => 26,
                'user_id' => NULL,
                'tsr_id' => 1225,
                'created_at' => '2025-02-06 23:01:06',
                'updated_at' => '2025-02-06 23:01:06',
            ),
            81 => 
            array (
                'id' => 82,
                'released_at' => NULL,
                'status_id' => 26,
                'user_id' => NULL,
                'tsr_id' => 1226,
                'created_at' => '2025-02-06 23:01:13',
                'updated_at' => '2025-02-06 23:01:13',
            ),
            82 => 
            array (
                'id' => 83,
                'released_at' => '2025-01-31',
                'status_id' => 27,
                'user_id' => 14,
                'tsr_id' => 1227,
                'created_at' => '2025-02-06 23:01:26',
                'updated_at' => '2025-02-06 23:01:34',
            ),
            83 => 
            array (
                'id' => 84,
                'released_at' => '2025-01-31',
                'status_id' => 27,
                'user_id' => 14,
                'tsr_id' => 1228,
                'created_at' => '2025-02-06 23:01:42',
                'updated_at' => '2025-02-06 23:01:50',
            ),
            84 => 
            array (
                'id' => 85,
                'released_at' => '2025-02-06',
                'status_id' => 27,
                'user_id' => 14,
                'tsr_id' => 1270,
                'created_at' => '2025-02-06 23:02:17',
                'updated_at' => '2025-02-06 23:02:25',
            ),
            85 => 
            array (
                'id' => 86,
                'released_at' => NULL,
                'status_id' => 26,
                'user_id' => NULL,
                'tsr_id' => 1272,
                'created_at' => '2025-02-06 23:02:50',
                'updated_at' => '2025-02-06 23:02:50',
            ),
            86 => 
            array (
                'id' => 87,
                'released_at' => '2025-02-12',
                'status_id' => 27,
                'user_id' => 14,
                'tsr_id' => 1168,
                'created_at' => '2025-02-06 23:12:23',
                'updated_at' => '2025-03-04 20:01:04',
            ),
            87 => 
            array (
                'id' => 88,
                'released_at' => '2025-02-12',
                'status_id' => 27,
                'user_id' => 14,
                'tsr_id' => 1172,
                'created_at' => '2025-02-06 23:12:36',
                'updated_at' => '2025-03-04 20:01:43',
            ),
            88 => 
            array (
                'id' => 89,
                'released_at' => NULL,
                'status_id' => 26,
                'user_id' => NULL,
                'tsr_id' => 681,
                'created_at' => '2025-02-10 19:28:43',
                'updated_at' => '2025-02-10 19:28:43',
            ),
            89 => 
            array (
                'id' => 90,
                'released_at' => NULL,
                'status_id' => 26,
                'user_id' => NULL,
                'tsr_id' => 682,
                'created_at' => '2025-02-10 19:29:05',
                'updated_at' => '2025-02-10 19:29:05',
            ),
            90 => 
            array (
                'id' => 91,
                'released_at' => NULL,
                'status_id' => 26,
                'user_id' => NULL,
                'tsr_id' => 1082,
                'created_at' => '2025-02-10 19:29:23',
                'updated_at' => '2025-02-10 19:29:23',
            ),
            91 => 
            array (
                'id' => 92,
                'released_at' => NULL,
                'status_id' => 26,
                'user_id' => NULL,
                'tsr_id' => 1083,
                'created_at' => '2025-02-10 19:29:35',
                'updated_at' => '2025-02-10 19:29:35',
            ),
            92 => 
            array (
                'id' => 93,
                'released_at' => NULL,
                'status_id' => 26,
                'user_id' => NULL,
                'tsr_id' => 1148,
                'created_at' => '2025-02-10 19:29:47',
                'updated_at' => '2025-02-10 19:29:47',
            ),
            93 => 
            array (
                'id' => 94,
                'released_at' => NULL,
                'status_id' => 26,
                'user_id' => NULL,
                'tsr_id' => 1149,
                'created_at' => '2025-02-10 19:30:02',
                'updated_at' => '2025-02-10 19:30:02',
            ),
            94 => 
            array (
                'id' => 95,
                'released_at' => NULL,
                'status_id' => 26,
                'user_id' => NULL,
                'tsr_id' => 1230,
                'created_at' => '2025-02-10 19:30:13',
                'updated_at' => '2025-02-10 19:30:13',
            ),
            95 => 
            array (
                'id' => 96,
                'released_at' => NULL,
                'status_id' => 26,
                'user_id' => NULL,
                'tsr_id' => 1179,
                'created_at' => '2025-02-10 19:30:23',
                'updated_at' => '2025-02-10 19:30:23',
            ),
            96 => 
            array (
                'id' => 97,
                'released_at' => NULL,
                'status_id' => 26,
                'user_id' => NULL,
                'tsr_id' => 1156,
                'created_at' => '2025-02-10 19:30:34',
                'updated_at' => '2025-02-10 19:30:34',
            ),
            97 => 
            array (
                'id' => 98,
                'released_at' => NULL,
                'status_id' => 26,
                'user_id' => NULL,
                'tsr_id' => 1117,
                'created_at' => '2025-02-10 19:30:44',
                'updated_at' => '2025-02-10 19:30:44',
            ),
            98 => 
            array (
                'id' => 99,
                'released_at' => NULL,
                'status_id' => 26,
                'user_id' => NULL,
                'tsr_id' => 1116,
                'created_at' => '2025-02-10 19:31:01',
                'updated_at' => '2025-02-10 19:31:01',
            ),
            99 => 
            array (
                'id' => 100,
                'released_at' => NULL,
                'status_id' => 26,
                'user_id' => NULL,
                'tsr_id' => 1115,
                'created_at' => '2025-02-10 19:31:12',
                'updated_at' => '2025-02-10 19:31:12',
            ),
            100 => 
            array (
                'id' => 101,
                'released_at' => NULL,
                'status_id' => 26,
                'user_id' => NULL,
                'tsr_id' => 1114,
                'created_at' => '2025-02-10 19:31:29',
                'updated_at' => '2025-02-10 19:31:29',
            ),
            101 => 
            array (
                'id' => 102,
                'released_at' => NULL,
                'status_id' => 26,
                'user_id' => NULL,
                'tsr_id' => 752,
                'created_at' => '2025-02-10 19:34:55',
                'updated_at' => '2025-02-10 19:34:55',
            ),
            102 => 
            array (
                'id' => 103,
                'released_at' => NULL,
                'status_id' => 26,
                'user_id' => NULL,
                'tsr_id' => 758,
                'created_at' => '2025-02-10 19:35:09',
                'updated_at' => '2025-02-10 19:35:09',
            ),
            103 => 
            array (
                'id' => 104,
                'released_at' => NULL,
                'status_id' => 26,
                'user_id' => NULL,
                'tsr_id' => 751,
                'created_at' => '2025-02-10 19:35:20',
                'updated_at' => '2025-02-10 19:35:20',
            ),
            104 => 
            array (
                'id' => 105,
                'released_at' => NULL,
                'status_id' => 26,
                'user_id' => NULL,
                'tsr_id' => 759,
                'created_at' => '2025-02-10 19:35:32',
                'updated_at' => '2025-02-10 19:35:32',
            ),
            105 => 
            array (
                'id' => 106,
                'released_at' => NULL,
                'status_id' => 26,
                'user_id' => NULL,
                'tsr_id' => 786,
                'created_at' => '2025-02-10 19:36:54',
                'updated_at' => '2025-02-10 19:36:54',
            ),
            106 => 
            array (
                'id' => 108,
                'released_at' => NULL,
                'status_id' => 26,
                'user_id' => NULL,
                'tsr_id' => 592,
                'created_at' => '2025-02-10 19:37:40',
                'updated_at' => '2025-02-10 19:37:40',
            ),
            107 => 
            array (
                'id' => 109,
                'released_at' => NULL,
                'status_id' => 26,
                'user_id' => NULL,
                'tsr_id' => 1308,
                'created_at' => '2025-02-14 00:35:54',
                'updated_at' => '2025-02-14 00:35:54',
            ),
            108 => 
            array (
                'id' => 110,
                'released_at' => NULL,
                'status_id' => 26,
                'user_id' => NULL,
                'tsr_id' => 1313,
                'created_at' => '2025-02-14 00:36:09',
                'updated_at' => '2025-02-14 00:36:09',
            ),
            109 => 
            array (
                'id' => 111,
                'released_at' => NULL,
                'status_id' => 26,
                'user_id' => NULL,
                'tsr_id' => 1305,
                'created_at' => '2025-02-14 00:36:22',
                'updated_at' => '2025-02-14 00:36:22',
            ),
            110 => 
            array (
                'id' => 112,
                'released_at' => NULL,
                'status_id' => 26,
                'user_id' => NULL,
                'tsr_id' => 1306,
                'created_at' => '2025-02-14 00:36:29',
                'updated_at' => '2025-02-14 00:36:29',
            ),
            111 => 
            array (
                'id' => 113,
                'released_at' => '2025-02-17',
                'status_id' => 27,
                'user_id' => 14,
                'tsr_id' => 1202,
                'created_at' => '2025-02-14 00:36:49',
                'updated_at' => '2025-03-04 20:22:44',
            ),
            112 => 
            array (
                'id' => 114,
                'released_at' => '2025-02-17',
                'status_id' => 27,
                'user_id' => 14,
                'tsr_id' => 1200,
                'created_at' => '2025-02-14 00:37:06',
                'updated_at' => '2025-03-04 20:22:22',
            ),
            113 => 
            array (
                'id' => 115,
                'released_at' => '2025-02-14',
                'status_id' => 27,
                'user_id' => 14,
                'tsr_id' => 1220,
                'created_at' => '2025-02-14 00:37:24',
                'updated_at' => '2025-03-04 20:23:28',
            ),
            114 => 
            array (
                'id' => 116,
                'released_at' => '2025-02-14',
                'status_id' => 27,
                'user_id' => 14,
                'tsr_id' => 1396,
                'created_at' => '2025-02-14 23:40:07',
                'updated_at' => '2025-03-04 20:47:56',
            ),
            115 => 
            array (
                'id' => 117,
                'released_at' => NULL,
                'status_id' => 26,
                'user_id' => NULL,
                'tsr_id' => 1360,
                'created_at' => '2025-02-15 00:05:14',
                'updated_at' => '2025-02-15 00:05:14',
            ),
            116 => 
            array (
                'id' => 118,
                'released_at' => '2025-02-20',
                'status_id' => 27,
                'user_id' => 14,
                'tsr_id' => 1309,
                'created_at' => '2025-02-15 00:05:36',
                'updated_at' => '2025-03-04 20:28:22',
            ),
            117 => 
            array (
                'id' => 119,
                'released_at' => NULL,
                'status_id' => 26,
                'user_id' => NULL,
                'tsr_id' => 1151,
                'created_at' => '2025-02-15 00:06:00',
                'updated_at' => '2025-02-15 00:06:00',
            ),
            118 => 
            array (
                'id' => 120,
                'released_at' => '2025-03-07',
                'status_id' => 27,
                'user_id' => 14,
                'tsr_id' => 1265,
                'created_at' => '2025-02-15 00:06:34',
                'updated_at' => '2025-03-11 21:13:19',
            ),
            119 => 
            array (
                'id' => 121,
                'released_at' => '2025-03-11',
                'status_id' => 27,
                'user_id' => 14,
                'tsr_id' => 1185,
                'created_at' => '2025-02-15 00:35:19',
                'updated_at' => '2025-03-11 21:23:35',
            ),
            120 => 
            array (
                'id' => 122,
                'released_at' => '2025-03-11',
                'status_id' => 27,
                'user_id' => 14,
                'tsr_id' => 1186,
                'created_at' => '2025-02-15 00:35:28',
                'updated_at' => '2025-03-11 21:23:46',
            ),
            121 => 
            array (
                'id' => 123,
                'released_at' => NULL,
                'status_id' => 26,
                'user_id' => NULL,
                'tsr_id' => 1279,
                'created_at' => '2025-02-18 19:18:54',
                'updated_at' => '2025-02-18 19:18:54',
            ),
            122 => 
            array (
                'id' => 124,
                'released_at' => NULL,
                'status_id' => 26,
                'user_id' => NULL,
                'tsr_id' => 1392,
                'created_at' => '2025-02-18 22:15:08',
                'updated_at' => '2025-02-18 22:15:08',
            ),
            123 => 
            array (
                'id' => 125,
                'released_at' => NULL,
                'status_id' => 26,
                'user_id' => NULL,
                'tsr_id' => 1302,
                'created_at' => '2025-02-18 22:15:37',
                'updated_at' => '2025-02-18 22:15:37',
            ),
            124 => 
            array (
                'id' => 126,
                'released_at' => NULL,
                'status_id' => 26,
                'user_id' => NULL,
                'tsr_id' => 1301,
                'created_at' => '2025-02-18 22:16:23',
                'updated_at' => '2025-02-18 22:16:23',
            ),
            125 => 
            array (
                'id' => 127,
                'released_at' => '2025-02-27',
                'status_id' => 27,
                'user_id' => 14,
                'tsr_id' => 1251,
                'created_at' => '2025-02-18 22:17:03',
                'updated_at' => '2025-03-04 20:24:15',
            ),
            126 => 
            array (
                'id' => 128,
                'released_at' => '2025-02-27',
                'status_id' => 27,
                'user_id' => 14,
                'tsr_id' => 1252,
                'created_at' => '2025-02-18 22:17:24',
                'updated_at' => '2025-03-04 20:24:27',
            ),
            127 => 
            array (
                'id' => 129,
                'released_at' => '2025-02-19',
                'status_id' => 27,
                'user_id' => 14,
                'tsr_id' => 1314,
                'created_at' => '2025-02-18 22:19:55',
                'updated_at' => '2025-02-19 21:10:22',
            ),
            128 => 
            array (
                'id' => 130,
                'released_at' => '2025-02-19',
                'status_id' => 27,
                'user_id' => 14,
                'tsr_id' => 1311,
                'created_at' => '2025-02-18 22:34:18',
                'updated_at' => '2025-02-19 21:10:29',
            ),
            129 => 
            array (
                'id' => 131,
                'released_at' => NULL,
                'status_id' => 26,
                'user_id' => NULL,
                'tsr_id' => 1174,
                'created_at' => '2025-02-18 22:35:05',
                'updated_at' => '2025-02-18 22:35:05',
            ),
            130 => 
            array (
                'id' => 132,
                'released_at' => NULL,
                'status_id' => 26,
                'user_id' => NULL,
                'tsr_id' => 1253,
                'created_at' => '2025-02-18 22:35:38',
                'updated_at' => '2025-02-18 22:35:38',
            ),
            131 => 
            array (
                'id' => 133,
                'released_at' => NULL,
                'status_id' => 26,
                'user_id' => NULL,
                'tsr_id' => 1295,
                'created_at' => '2025-02-18 22:36:01',
                'updated_at' => '2025-02-18 22:36:01',
            ),
            132 => 
            array (
                'id' => 134,
                'released_at' => NULL,
                'status_id' => 26,
                'user_id' => NULL,
                'tsr_id' => 1297,
                'created_at' => '2025-02-18 22:36:28',
                'updated_at' => '2025-02-18 22:36:28',
            ),
            133 => 
            array (
                'id' => 135,
                'released_at' => NULL,
                'status_id' => 26,
                'user_id' => NULL,
                'tsr_id' => 1303,
                'created_at' => '2025-02-18 22:37:00',
                'updated_at' => '2025-02-18 22:37:00',
            ),
            134 => 
            array (
                'id' => 136,
                'released_at' => NULL,
                'status_id' => 26,
                'user_id' => NULL,
                'tsr_id' => 1299,
                'created_at' => '2025-02-18 22:37:24',
                'updated_at' => '2025-02-18 22:37:24',
            ),
            135 => 
            array (
                'id' => 137,
                'released_at' => '2025-02-19',
                'status_id' => 27,
                'user_id' => 14,
                'tsr_id' => 1394,
                'created_at' => '2025-02-19 17:43:18',
                'updated_at' => '2025-03-04 20:47:20',
            ),
            136 => 
            array (
                'id' => 138,
                'released_at' => '2025-03-11',
                'status_id' => 27,
                'user_id' => 14,
                'tsr_id' => 1268,
                'created_at' => '2025-02-19 17:43:56',
                'updated_at' => '2025-03-11 21:12:41',
            ),
            137 => 
            array (
                'id' => 139,
                'released_at' => '2025-03-11',
                'status_id' => 27,
                'user_id' => 14,
                'tsr_id' => 1269,
                'created_at' => '2025-02-19 17:44:27',
                'updated_at' => '2025-03-11 21:12:51',
            ),
            138 => 
            array (
                'id' => 140,
                'released_at' => NULL,
                'status_id' => 26,
                'user_id' => NULL,
                'tsr_id' => 1397,
                'created_at' => '2025-02-19 17:44:49',
                'updated_at' => '2025-02-19 17:44:49',
            ),
            139 => 
            array (
                'id' => 141,
                'released_at' => '2025-02-19',
                'status_id' => 27,
                'user_id' => 14,
                'tsr_id' => 1362,
                'created_at' => '2025-02-19 21:05:44',
                'updated_at' => '2025-02-19 21:10:01',
            ),
            140 => 
            array (
                'id' => 142,
                'released_at' => '2025-02-19',
                'status_id' => 27,
                'user_id' => 14,
                'tsr_id' => 1361,
                'created_at' => '2025-02-19 21:06:08',
                'updated_at' => '2025-02-19 21:09:55',
            ),
            141 => 
            array (
                'id' => 143,
                'released_at' => '2025-02-19',
                'status_id' => 27,
                'user_id' => 14,
                'tsr_id' => 1393,
                'created_at' => '2025-02-19 23:37:59',
                'updated_at' => '2025-02-19 23:38:09',
            ),
            142 => 
            array (
                'id' => 144,
                'released_at' => '2025-02-19',
                'status_id' => 27,
                'user_id' => 14,
                'tsr_id' => 1298,
                'created_at' => '2025-02-20 00:20:25',
                'updated_at' => '2025-02-20 00:20:33',
            ),
            143 => 
            array (
                'id' => 145,
                'released_at' => NULL,
                'status_id' => 26,
                'user_id' => NULL,
                'tsr_id' => 1379,
                'created_at' => '2025-02-20 16:09:38',
                'updated_at' => '2025-02-20 16:09:38',
            ),
            144 => 
            array (
                'id' => 146,
                'released_at' => '2025-03-10',
                'status_id' => 27,
                'user_id' => 14,
                'tsr_id' => 1364,
                'created_at' => '2025-02-20 16:10:00',
                'updated_at' => '2025-03-11 21:18:32',
            ),
            145 => 
            array (
                'id' => 147,
                'released_at' => NULL,
                'status_id' => 26,
                'user_id' => NULL,
                'tsr_id' => 1384,
                'created_at' => '2025-02-20 16:10:22',
                'updated_at' => '2025-02-20 16:10:22',
            ),
            146 => 
            array (
                'id' => 148,
                'released_at' => NULL,
                'status_id' => 26,
                'user_id' => NULL,
                'tsr_id' => 1391,
                'created_at' => '2025-02-20 16:10:46',
                'updated_at' => '2025-02-20 16:10:46',
            ),
            147 => 
            array (
                'id' => 149,
                'released_at' => NULL,
                'status_id' => 26,
                'user_id' => NULL,
                'tsr_id' => 1380,
                'created_at' => '2025-02-20 16:11:11',
                'updated_at' => '2025-02-20 16:11:11',
            ),
            148 => 
            array (
                'id' => 150,
                'released_at' => NULL,
                'status_id' => 26,
                'user_id' => NULL,
                'tsr_id' => 1395,
                'created_at' => '2025-02-20 16:11:36',
                'updated_at' => '2025-02-20 16:11:36',
            ),
            149 => 
            array (
                'id' => 151,
                'released_at' => NULL,
                'status_id' => 26,
                'user_id' => NULL,
                'tsr_id' => 1289,
                'created_at' => '2025-02-20 16:12:00',
                'updated_at' => '2025-02-20 16:12:00',
            ),
            150 => 
            array (
                'id' => 152,
                'released_at' => NULL,
                'status_id' => 26,
                'user_id' => NULL,
                'tsr_id' => 1400,
                'created_at' => '2025-02-20 16:12:22',
                'updated_at' => '2025-02-20 16:12:22',
            ),
            151 => 
            array (
                'id' => 153,
                'released_at' => '2025-02-20',
                'status_id' => 27,
                'user_id' => 14,
                'tsr_id' => 1381,
                'created_at' => '2025-02-20 16:12:48',
                'updated_at' => '2025-03-04 20:37:57',
            ),
            152 => 
            array (
                'id' => 154,
                'released_at' => '2025-03-10',
                'status_id' => 27,
                'user_id' => 14,
                'tsr_id' => 1288,
                'created_at' => '2025-02-20 16:13:19',
                'updated_at' => '2025-03-11 21:12:22',
            ),
            153 => 
            array (
                'id' => 155,
                'released_at' => NULL,
                'status_id' => 26,
                'user_id' => NULL,
                'tsr_id' => 1365,
                'created_at' => '2025-02-20 16:13:40',
                'updated_at' => '2025-02-20 16:13:40',
            ),
            154 => 
            array (
                'id' => 156,
                'released_at' => NULL,
                'status_id' => 26,
                'user_id' => NULL,
                'tsr_id' => 1254,
                'created_at' => '2025-02-20 16:14:22',
                'updated_at' => '2025-02-20 16:14:22',
            ),
            155 => 
            array (
                'id' => 157,
                'released_at' => '2025-02-24',
                'status_id' => 27,
                'user_id' => 14,
                'tsr_id' => 1331,
                'created_at' => '2025-02-20 16:20:03',
                'updated_at' => '2025-03-11 21:31:00',
            ),
            156 => 
            array (
                'id' => 158,
                'released_at' => '2025-02-24',
                'status_id' => 27,
                'user_id' => 14,
                'tsr_id' => 1332,
                'created_at' => '2025-02-20 16:20:14',
                'updated_at' => '2025-03-11 21:31:17',
            ),
            157 => 
            array (
                'id' => 159,
                'released_at' => '2025-02-24',
                'status_id' => 27,
                'user_id' => 14,
                'tsr_id' => 1333,
                'created_at' => '2025-02-20 16:20:24',
                'updated_at' => '2025-03-11 21:31:36',
            ),
            158 => 
            array (
                'id' => 160,
                'released_at' => '2025-02-24',
                'status_id' => 27,
                'user_id' => 14,
                'tsr_id' => 1334,
                'created_at' => '2025-02-20 16:20:34',
                'updated_at' => '2025-03-11 21:31:50',
            ),
            159 => 
            array (
                'id' => 161,
                'released_at' => '2025-02-24',
                'status_id' => 27,
                'user_id' => 14,
                'tsr_id' => 1335,
                'created_at' => '2025-02-20 16:20:46',
                'updated_at' => '2025-03-11 21:32:06',
            ),
            160 => 
            array (
                'id' => 162,
                'released_at' => '2025-02-24',
                'status_id' => 27,
                'user_id' => 14,
                'tsr_id' => 1336,
                'created_at' => '2025-02-20 16:20:58',
                'updated_at' => '2025-03-11 21:32:25',
            ),
            161 => 
            array (
                'id' => 163,
                'released_at' => '2025-02-24',
                'status_id' => 27,
                'user_id' => 14,
                'tsr_id' => 1337,
                'created_at' => '2025-02-20 16:21:08',
                'updated_at' => '2025-03-11 21:32:43',
            ),
            162 => 
            array (
                'id' => 164,
                'released_at' => '2025-02-24',
                'status_id' => 27,
                'user_id' => 14,
                'tsr_id' => 1338,
                'created_at' => '2025-02-20 16:21:17',
                'updated_at' => '2025-03-11 21:33:07',
            ),
            163 => 
            array (
                'id' => 165,
                'released_at' => '2025-02-24',
                'status_id' => 27,
                'user_id' => 14,
                'tsr_id' => 1339,
                'created_at' => '2025-02-20 16:21:26',
                'updated_at' => '2025-03-11 21:33:23',
            ),
            164 => 
            array (
                'id' => 166,
                'released_at' => NULL,
                'status_id' => 26,
                'user_id' => NULL,
                'tsr_id' => 1354,
                'created_at' => '2025-02-20 16:21:37',
                'updated_at' => '2025-02-20 16:21:37',
            ),
            165 => 
            array (
                'id' => 167,
                'released_at' => NULL,
                'status_id' => 26,
                'user_id' => NULL,
                'tsr_id' => 1283,
                'created_at' => '2025-02-20 16:21:47',
                'updated_at' => '2025-02-20 16:21:47',
            ),
            166 => 
            array (
                'id' => 168,
                'released_at' => '2025-02-20',
                'status_id' => 27,
                'user_id' => 14,
                'tsr_id' => 1386,
                'created_at' => '2025-02-20 21:24:45',
                'updated_at' => '2025-03-04 20:46:56',
            ),
            167 => 
            array (
                'id' => 169,
                'released_at' => NULL,
                'status_id' => 26,
                'user_id' => NULL,
                'tsr_id' => 1401,
                'created_at' => '2025-02-20 21:29:10',
                'updated_at' => '2025-02-20 21:29:10',
            ),
            168 => 
            array (
                'id' => 170,
                'released_at' => '2025-02-20',
                'status_id' => 27,
                'user_id' => 14,
                'tsr_id' => 1429,
                'created_at' => '2025-02-20 21:30:00',
                'updated_at' => '2025-03-04 20:48:33',
            ),
            169 => 
            array (
                'id' => 171,
                'released_at' => NULL,
                'status_id' => 26,
                'user_id' => NULL,
                'tsr_id' => 1425,
                'created_at' => '2025-02-20 21:30:30',
                'updated_at' => '2025-02-20 21:30:30',
            ),
            170 => 
            array (
                'id' => 172,
                'released_at' => NULL,
                'status_id' => 26,
                'user_id' => NULL,
                'tsr_id' => 1150,
                'created_at' => '2025-02-24 18:00:01',
                'updated_at' => '2025-02-24 18:00:01',
            ),
            171 => 
            array (
                'id' => 173,
                'released_at' => NULL,
                'status_id' => 26,
                'user_id' => NULL,
                'tsr_id' => 1262,
                'created_at' => '2025-03-01 00:12:17',
                'updated_at' => '2025-03-01 00:12:17',
            ),
            172 => 
            array (
                'id' => 174,
                'released_at' => '2025-03-11',
                'status_id' => 27,
                'user_id' => 14,
                'tsr_id' => 1296,
                'created_at' => '2025-03-04 16:48:03',
                'updated_at' => '2025-03-11 21:13:53',
            ),
            173 => 
            array (
                'id' => 175,
                'released_at' => '2025-03-11',
                'status_id' => 27,
                'user_id' => 14,
                'tsr_id' => 1263,
                'created_at' => '2025-03-04 16:48:53',
                'updated_at' => '2025-03-11 21:24:42',
            ),
            174 => 
            array (
                'id' => 176,
                'released_at' => NULL,
                'status_id' => 26,
                'user_id' => NULL,
                'tsr_id' => 1154,
                'created_at' => '2025-03-04 16:49:23',
                'updated_at' => '2025-03-04 16:49:23',
            ),
            175 => 
            array (
                'id' => 177,
                'released_at' => NULL,
                'status_id' => 26,
                'user_id' => NULL,
                'tsr_id' => 1285,
                'created_at' => '2025-03-04 16:50:18',
                'updated_at' => '2025-03-04 16:50:18',
            ),
            176 => 
            array (
                'id' => 178,
                'released_at' => NULL,
                'status_id' => 26,
                'user_id' => NULL,
                'tsr_id' => 1284,
                'created_at' => '2025-03-04 16:50:27',
                'updated_at' => '2025-03-04 16:50:27',
            ),
            177 => 
            array (
                'id' => 179,
                'released_at' => '2025-03-11',
                'status_id' => 27,
                'user_id' => 14,
                'tsr_id' => 1264,
                'created_at' => '2025-03-04 16:52:11',
                'updated_at' => '2025-03-11 21:24:53',
            ),
            178 => 
            array (
                'id' => 180,
                'released_at' => NULL,
                'status_id' => 26,
                'user_id' => NULL,
                'tsr_id' => 1188,
                'created_at' => '2025-03-04 16:53:14',
                'updated_at' => '2025-03-04 16:53:14',
            ),
            179 => 
            array (
                'id' => 181,
                'released_at' => NULL,
                'status_id' => 26,
                'user_id' => NULL,
                'tsr_id' => 1260,
                'created_at' => '2025-03-04 16:53:44',
                'updated_at' => '2025-03-04 16:53:44',
            ),
            180 => 
            array (
                'id' => 182,
                'released_at' => '2025-03-04',
                'status_id' => 27,
                'user_id' => 14,
                'tsr_id' => 1300,
                'created_at' => '2025-03-04 17:15:21',
                'updated_at' => '2025-03-04 20:26:39',
            ),
            181 => 
            array (
                'id' => 183,
                'released_at' => '2025-03-05',
                'status_id' => 27,
                'user_id' => 14,
                'tsr_id' => 1294,
                'created_at' => '2025-03-04 17:15:47',
                'updated_at' => '2025-03-11 21:14:08',
            ),
            182 => 
            array (
                'id' => 184,
                'released_at' => NULL,
                'status_id' => 26,
                'user_id' => NULL,
                'tsr_id' => 1421,
                'created_at' => '2025-03-04 17:17:12',
                'updated_at' => '2025-03-04 17:17:12',
            ),
            183 => 
            array (
                'id' => 185,
                'released_at' => '2025-02-17',
                'status_id' => 27,
                'user_id' => 14,
                'tsr_id' => 1090,
                'created_at' => '2025-03-04 19:46:08',
                'updated_at' => '2025-03-04 19:47:00',
            ),
            184 => 
            array (
                'id' => 186,
                'released_at' => '2025-01-14',
                'status_id' => 27,
                'user_id' => 14,
                'tsr_id' => 1109,
                'created_at' => '2025-03-04 19:48:12',
                'updated_at' => '2025-03-04 19:48:28',
            ),
            185 => 
            array (
                'id' => 187,
                'released_at' => '2025-02-06',
                'status_id' => 27,
                'user_id' => 14,
                'tsr_id' => 1143,
                'created_at' => '2025-03-04 19:49:03',
                'updated_at' => '2025-03-04 19:49:14',
            ),
            186 => 
            array (
                'id' => 188,
                'released_at' => '2025-02-14',
                'status_id' => 27,
                'user_id' => 14,
                'tsr_id' => 1159,
                'created_at' => '2025-03-04 20:00:04',
                'updated_at' => '2025-03-04 20:00:18',
            ),
            187 => 
            array (
                'id' => 189,
                'released_at' => '2025-02-17',
                'status_id' => 27,
                'user_id' => 14,
                'tsr_id' => 1304,
                'created_at' => '2025-03-04 20:27:48',
                'updated_at' => '2025-03-04 20:28:04',
            ),
            188 => 
            array (
                'id' => 190,
                'released_at' => '2025-02-20',
                'status_id' => 27,
                'user_id' => 14,
                'tsr_id' => 1310,
                'created_at' => '2025-03-04 20:29:09',
                'updated_at' => '2025-03-04 20:29:21',
            ),
            189 => 
            array (
                'id' => 191,
                'released_at' => '2025-02-19',
                'status_id' => 27,
                'user_id' => 14,
                'tsr_id' => 1312,
                'created_at' => '2025-03-04 20:30:03',
                'updated_at' => '2025-03-04 20:30:16',
            ),
            190 => 
            array (
                'id' => 192,
                'released_at' => '2025-02-13',
                'status_id' => 27,
                'user_id' => 14,
                'tsr_id' => 1358,
                'created_at' => '2025-03-04 20:32:19',
                'updated_at' => '2025-03-04 20:32:27',
            ),
            191 => 
            array (
                'id' => 193,
                'released_at' => '2025-02-14',
                'status_id' => 27,
                'user_id' => 14,
                'tsr_id' => 1356,
                'created_at' => '2025-03-04 20:35:15',
                'updated_at' => '2025-03-04 20:35:31',
            ),
            192 => 
            array (
                'id' => 194,
                'released_at' => '2025-03-05',
                'status_id' => 27,
                'user_id' => 14,
                'tsr_id' => 1431,
                'created_at' => '2025-03-05 16:52:32',
                'updated_at' => '2025-03-05 16:52:38',
            ),
            193 => 
            array (
                'id' => 195,
                'released_at' => '2025-03-05',
                'status_id' => 27,
                'user_id' => 14,
                'tsr_id' => 1436,
                'created_at' => '2025-03-05 16:52:45',
                'updated_at' => '2025-03-05 16:52:51',
            ),
            194 => 
            array (
                'id' => 196,
                'released_at' => NULL,
                'status_id' => 26,
                'user_id' => NULL,
                'tsr_id' => 1435,
                'created_at' => '2025-03-05 21:27:13',
                'updated_at' => '2025-03-05 21:27:13',
            ),
            195 => 
            array (
                'id' => 197,
                'released_at' => NULL,
                'status_id' => 26,
                'user_id' => NULL,
                'tsr_id' => 1445,
                'created_at' => '2025-03-05 21:27:45',
                'updated_at' => '2025-03-05 21:27:45',
            ),
            196 => 
            array (
                'id' => 198,
                'released_at' => '2025-03-06',
                'status_id' => 27,
                'user_id' => 14,
                'tsr_id' => 1469,
                'created_at' => '2025-03-05 21:28:18',
                'updated_at' => '2025-03-11 21:20:00',
            ),
            197 => 
            array (
                'id' => 199,
                'released_at' => NULL,
                'status_id' => 26,
                'user_id' => NULL,
                'tsr_id' => 1428,
                'created_at' => '2025-03-05 21:29:18',
                'updated_at' => '2025-03-05 21:29:18',
            ),
            198 => 
            array (
                'id' => 200,
                'released_at' => NULL,
                'status_id' => 26,
                'user_id' => NULL,
                'tsr_id' => 1433,
                'created_at' => '2025-03-05 21:30:07',
                'updated_at' => '2025-03-05 21:30:07',
            ),
            199 => 
            array (
                'id' => 201,
                'released_at' => '2025-03-10',
                'status_id' => 27,
                'user_id' => 14,
                'tsr_id' => 1437,
                'created_at' => '2025-03-05 21:30:47',
                'updated_at' => '2025-03-11 21:19:00',
            ),
            200 => 
            array (
                'id' => 202,
                'released_at' => NULL,
                'status_id' => 26,
                'user_id' => NULL,
                'tsr_id' => 1434,
                'created_at' => '2025-03-05 21:31:17',
                'updated_at' => '2025-03-05 21:31:17',
            ),
            201 => 
            array (
                'id' => 203,
                'released_at' => '2025-03-05',
                'status_id' => 27,
                'user_id' => 14,
                'tsr_id' => 1438,
                'created_at' => '2025-03-05 21:33:34',
                'updated_at' => '2025-03-05 21:33:41',
            ),
            202 => 
            array (
                'id' => 204,
                'released_at' => '2025-03-05',
                'status_id' => 27,
                'user_id' => 14,
                'tsr_id' => 1444,
                'created_at' => '2025-03-05 21:33:50',
                'updated_at' => '2025-03-05 21:34:00',
            ),
            203 => 
            array (
                'id' => 205,
                'released_at' => '2025-03-05',
                'status_id' => 27,
                'user_id' => 14,
                'tsr_id' => 1426,
                'created_at' => '2025-03-05 21:34:27',
                'updated_at' => '2025-03-05 21:34:34',
            ),
            204 => 
            array (
                'id' => 206,
                'released_at' => '2025-03-05',
                'status_id' => 27,
                'user_id' => 14,
                'tsr_id' => 1432,
                'created_at' => '2025-03-05 21:34:47',
                'updated_at' => '2025-03-05 21:34:55',
            ),
            205 => 
            array (
                'id' => 207,
                'released_at' => '2025-03-05',
                'status_id' => 27,
                'user_id' => 14,
                'tsr_id' => 1456,
                'created_at' => '2025-03-05 22:14:40',
                'updated_at' => '2025-03-05 22:14:46',
            ),
            206 => 
            array (
                'id' => 208,
                'released_at' => NULL,
                'status_id' => 26,
                'user_id' => NULL,
                'tsr_id' => 1466,
                'created_at' => '2025-03-11 21:02:33',
                'updated_at' => '2025-03-11 21:02:33',
            ),
            207 => 
            array (
                'id' => 209,
                'released_at' => '2025-03-07',
                'status_id' => 27,
                'user_id' => 14,
                'tsr_id' => 1467,
                'created_at' => '2025-03-11 21:02:48',
                'updated_at' => '2025-03-11 21:19:44',
            ),
            208 => 
            array (
                'id' => 210,
                'released_at' => NULL,
                'status_id' => 26,
                'user_id' => NULL,
                'tsr_id' => 1468,
                'created_at' => '2025-03-11 21:03:02',
                'updated_at' => '2025-03-11 21:03:02',
            ),
            209 => 
            array (
                'id' => 211,
                'released_at' => '2025-03-11',
                'status_id' => 27,
                'user_id' => 14,
                'tsr_id' => 1443,
                'created_at' => '2025-03-11 21:03:16',
                'updated_at' => '2025-03-11 22:47:40',
            ),
            210 => 
            array (
                'id' => 212,
                'released_at' => '2025-03-07',
                'status_id' => 27,
                'user_id' => 14,
                'tsr_id' => 1442,
                'created_at' => '2025-03-11 21:03:32',
                'updated_at' => '2025-03-11 21:19:20',
            ),
            211 => 
            array (
                'id' => 213,
                'released_at' => '2025-03-06',
                'status_id' => 27,
                'user_id' => 14,
                'tsr_id' => 1351,
                'created_at' => '2025-03-11 21:03:44',
                'updated_at' => '2025-03-11 21:18:08',
            ),
            212 => 
            array (
                'id' => 214,
                'released_at' => NULL,
                'status_id' => 26,
                'user_id' => NULL,
                'tsr_id' => 1385,
                'created_at' => '2025-03-11 21:04:11',
                'updated_at' => '2025-03-11 21:04:11',
            ),
            213 => 
            array (
                'id' => 215,
                'released_at' => NULL,
                'status_id' => 26,
                'user_id' => NULL,
                'tsr_id' => 1328,
                'created_at' => '2025-03-11 21:07:58',
                'updated_at' => '2025-03-11 21:07:58',
            ),
            214 => 
            array (
                'id' => 216,
                'released_at' => '2025-03-10',
                'status_id' => 27,
                'user_id' => 14,
                'tsr_id' => 1359,
                'created_at' => '2025-03-11 21:08:13',
                'updated_at' => '2025-03-11 21:15:45',
            ),
            215 => 
            array (
                'id' => 217,
                'released_at' => NULL,
                'status_id' => 26,
                'user_id' => NULL,
                'tsr_id' => 1267,
                'created_at' => '2025-03-11 21:08:27',
                'updated_at' => '2025-03-11 21:08:27',
            ),
            216 => 
            array (
                'id' => 218,
                'released_at' => NULL,
                'status_id' => 26,
                'user_id' => NULL,
                'tsr_id' => 1363,
                'created_at' => '2025-03-11 21:09:29',
                'updated_at' => '2025-03-11 21:09:29',
            ),
            217 => 
            array (
                'id' => 219,
                'released_at' => NULL,
                'status_id' => 26,
                'user_id' => NULL,
                'tsr_id' => 1514,
                'created_at' => '2025-03-11 21:09:57',
                'updated_at' => '2025-03-11 21:09:57',
            ),
            218 => 
            array (
                'id' => 220,
                'released_at' => NULL,
                'status_id' => 26,
                'user_id' => NULL,
                'tsr_id' => 1369,
                'created_at' => '2025-03-11 21:10:24',
                'updated_at' => '2025-03-11 21:10:24',
            ),
            219 => 
            array (
                'id' => 221,
                'released_at' => '2025-03-05',
                'status_id' => 27,
                'user_id' => 14,
                'tsr_id' => 1292,
                'created_at' => '2025-03-11 21:14:48',
                'updated_at' => '2025-03-11 21:14:56',
            ),
            220 => 
            array (
                'id' => 222,
                'released_at' => '2025-03-03',
                'status_id' => 27,
                'user_id' => 14,
                'tsr_id' => 1378,
                'created_at' => '2025-03-11 21:16:17',
                'updated_at' => '2025-03-11 21:16:26',
            ),
            221 => 
            array (
                'id' => 223,
                'released_at' => '2025-03-11',
                'status_id' => 27,
                'user_id' => 14,
                'tsr_id' => 1187,
                'created_at' => '2025-03-11 21:24:16',
                'updated_at' => '2025-03-11 21:24:23',
            ),
            222 => 
            array (
                'id' => 224,
                'released_at' => '2025-02-24',
                'status_id' => 27,
                'user_id' => 14,
                'tsr_id' => 1329,
                'created_at' => '2025-03-11 21:25:37',
                'updated_at' => '2025-03-11 21:25:46',
            ),
            223 => 
            array (
                'id' => 225,
                'released_at' => '2025-02-24',
                'status_id' => 27,
                'user_id' => 14,
                'tsr_id' => 1330,
                'created_at' => '2025-03-11 21:26:01',
                'updated_at' => '2025-03-11 21:26:11',
            ),
            224 => 
            array (
                'id' => 226,
                'released_at' => '2025-02-24',
                'status_id' => 27,
                'user_id' => 14,
                'tsr_id' => 1340,
                'created_at' => '2025-03-11 21:33:41',
                'updated_at' => '2025-03-11 21:33:50',
            ),
            225 => 
            array (
                'id' => 227,
                'released_at' => '2025-02-17',
                'status_id' => 27,
                'user_id' => 14,
                'tsr_id' => 1377,
                'created_at' => '2025-03-11 21:34:22',
                'updated_at' => '2025-03-11 21:34:34',
            ),
            226 => 
            array (
                'id' => 228,
                'released_at' => '2025-02-17',
                'status_id' => 27,
                'user_id' => 14,
                'tsr_id' => 1420,
                'created_at' => '2025-03-11 21:35:04',
                'updated_at' => '2025-03-11 21:35:14',
            ),
            227 => 
            array (
                'id' => 229,
                'released_at' => '2025-02-20',
                'status_id' => 27,
                'user_id' => 14,
                'tsr_id' => 1449,
                'created_at' => '2025-03-11 21:35:34',
                'updated_at' => '2025-03-11 21:35:50',
            ),
            228 => 
            array (
                'id' => 230,
                'released_at' => '2025-02-21',
                'status_id' => 27,
                'user_id' => 14,
                'tsr_id' => 1457,
                'created_at' => '2025-03-11 21:36:08',
                'updated_at' => '2025-03-11 21:36:15',
            ),
            229 => 
            array (
                'id' => 231,
                'released_at' => '2025-03-11',
                'status_id' => 27,
                'user_id' => 14,
                'tsr_id' => 1368,
                'created_at' => '2025-03-11 21:37:16',
                'updated_at' => '2025-03-11 21:37:23',
            ),
            230 => 
            array (
                'id' => 232,
                'released_at' => '2025-03-19',
                'status_id' => 27,
                'user_id' => 14,
                'tsr_id' => 1276,
                'created_at' => '2025-03-11 21:42:37',
                'updated_at' => '2025-03-19 20:05:23',
            ),
            231 => 
            array (
                'id' => 233,
                'released_at' => '2025-03-19',
                'status_id' => 27,
                'user_id' => 14,
                'tsr_id' => 1277,
                'created_at' => '2025-03-11 21:42:48',
                'updated_at' => '2025-03-19 20:05:14',
            ),
            232 => 
            array (
                'id' => 234,
                'released_at' => '2025-03-11',
                'status_id' => 27,
                'user_id' => 14,
                'tsr_id' => 1325,
                'created_at' => '2025-03-11 22:47:51',
                'updated_at' => '2025-03-11 22:47:57',
            ),
            233 => 
            array (
                'id' => 235,
                'released_at' => NULL,
                'status_id' => 26,
                'user_id' => NULL,
                'tsr_id' => 1275,
                'created_at' => '2025-03-11 22:57:22',
                'updated_at' => '2025-03-11 22:57:22',
            ),
            234 => 
            array (
                'id' => 236,
                'released_at' => NULL,
                'status_id' => 26,
                'user_id' => NULL,
                'tsr_id' => 1136,
                'created_at' => '2025-03-12 18:28:29',
                'updated_at' => '2025-03-12 18:28:29',
            ),
            235 => 
            array (
                'id' => 237,
                'released_at' => NULL,
                'status_id' => 26,
                'user_id' => NULL,
                'tsr_id' => 1500,
                'created_at' => '2025-03-12 18:55:03',
                'updated_at' => '2025-03-12 18:55:03',
            ),
            236 => 
            array (
                'id' => 238,
                'released_at' => NULL,
                'status_id' => 26,
                'user_id' => NULL,
                'tsr_id' => 1518,
                'created_at' => '2025-03-12 18:55:46',
                'updated_at' => '2025-03-12 18:55:46',
            ),
            237 => 
            array (
                'id' => 239,
                'released_at' => NULL,
                'status_id' => 26,
                'user_id' => NULL,
                'tsr_id' => 1509,
                'created_at' => '2025-03-12 18:56:25',
                'updated_at' => '2025-03-12 18:56:25',
            ),
            238 => 
            array (
                'id' => 240,
                'released_at' => NULL,
                'status_id' => 26,
                'user_id' => NULL,
                'tsr_id' => 1521,
                'created_at' => '2025-03-12 18:57:00',
                'updated_at' => '2025-03-12 18:57:00',
            ),
            239 => 
            array (
                'id' => 241,
                'released_at' => NULL,
                'status_id' => 26,
                'user_id' => NULL,
                'tsr_id' => 1501,
                'created_at' => '2025-03-12 19:00:31',
                'updated_at' => '2025-03-12 19:00:31',
            ),
            240 => 
            array (
                'id' => 242,
                'released_at' => NULL,
                'status_id' => 26,
                'user_id' => NULL,
                'tsr_id' => 1517,
                'created_at' => '2025-03-12 19:06:55',
                'updated_at' => '2025-03-12 19:06:55',
            ),
            241 => 
            array (
                'id' => 243,
                'released_at' => NULL,
                'status_id' => 26,
                'user_id' => NULL,
                'tsr_id' => 1506,
                'created_at' => '2025-03-12 19:07:38',
                'updated_at' => '2025-03-12 19:07:38',
            ),
            242 => 
            array (
                'id' => 244,
                'released_at' => NULL,
                'status_id' => 26,
                'user_id' => NULL,
                'tsr_id' => 1504,
                'created_at' => '2025-03-12 19:14:03',
                'updated_at' => '2025-03-12 19:14:03',
            ),
            243 => 
            array (
                'id' => 245,
                'released_at' => NULL,
                'status_id' => 26,
                'user_id' => NULL,
                'tsr_id' => 1497,
                'created_at' => '2025-03-12 19:14:45',
                'updated_at' => '2025-03-12 19:14:45',
            ),
            244 => 
            array (
                'id' => 246,
                'released_at' => NULL,
                'status_id' => 26,
                'user_id' => NULL,
                'tsr_id' => 1498,
                'created_at' => '2025-03-12 19:15:46',
                'updated_at' => '2025-03-12 19:15:46',
            ),
            245 => 
            array (
                'id' => 247,
                'released_at' => NULL,
                'status_id' => 26,
                'user_id' => NULL,
                'tsr_id' => 1493,
                'created_at' => '2025-03-12 19:20:46',
                'updated_at' => '2025-03-12 19:20:46',
            ),
            246 => 
            array (
                'id' => 248,
                'released_at' => NULL,
                'status_id' => 26,
                'user_id' => NULL,
                'tsr_id' => 1502,
                'created_at' => '2025-03-13 16:14:09',
                'updated_at' => '2025-03-13 16:14:09',
            ),
            247 => 
            array (
                'id' => 249,
                'released_at' => NULL,
                'status_id' => 26,
                'user_id' => NULL,
                'tsr_id' => 1529,
                'created_at' => '2025-03-14 21:14:02',
                'updated_at' => '2025-03-14 21:14:02',
            ),
            248 => 
            array (
                'id' => 250,
                'released_at' => NULL,
                'status_id' => 26,
                'user_id' => NULL,
                'tsr_id' => 1531,
                'created_at' => '2025-03-14 21:14:45',
                'updated_at' => '2025-03-14 21:14:45',
            ),
            249 => 
            array (
                'id' => 251,
                'released_at' => NULL,
                'status_id' => 26,
                'user_id' => NULL,
                'tsr_id' => 1508,
                'created_at' => '2025-03-14 21:15:28',
                'updated_at' => '2025-03-14 21:15:28',
            ),
            250 => 
            array (
                'id' => 252,
                'released_at' => NULL,
                'status_id' => 26,
                'user_id' => NULL,
                'tsr_id' => 1496,
                'created_at' => '2025-03-14 21:15:56',
                'updated_at' => '2025-03-14 21:15:56',
            ),
            251 => 
            array (
                'id' => 253,
                'released_at' => NULL,
                'status_id' => 26,
                'user_id' => NULL,
                'tsr_id' => 1507,
                'created_at' => '2025-03-14 21:24:32',
                'updated_at' => '2025-03-14 21:24:32',
            ),
            252 => 
            array (
                'id' => 254,
                'released_at' => NULL,
                'status_id' => 26,
                'user_id' => NULL,
                'tsr_id' => 1513,
                'created_at' => '2025-03-14 21:25:07',
                'updated_at' => '2025-03-14 21:25:07',
            ),
            253 => 
            array (
                'id' => 255,
                'released_at' => '2025-03-18',
                'status_id' => 27,
                'user_id' => 14,
                'tsr_id' => 1575,
                'created_at' => '2025-03-18 21:39:07',
                'updated_at' => '2025-03-18 21:39:14',
            ),
            254 => 
            array (
                'id' => 256,
                'released_at' => NULL,
                'status_id' => 26,
                'user_id' => NULL,
                'tsr_id' => 1539,
                'created_at' => '2025-03-18 21:39:29',
                'updated_at' => '2025-03-18 21:39:29',
            ),
            255 => 
            array (
                'id' => 257,
                'released_at' => NULL,
                'status_id' => 26,
                'user_id' => NULL,
                'tsr_id' => 1488,
                'created_at' => '2025-03-18 21:42:00',
                'updated_at' => '2025-03-18 21:42:00',
            ),
            256 => 
            array (
                'id' => 258,
                'released_at' => NULL,
                'status_id' => 26,
                'user_id' => NULL,
                'tsr_id' => 1441,
                'created_at' => '2025-03-18 21:42:29',
                'updated_at' => '2025-03-18 21:42:29',
            ),
            257 => 
            array (
                'id' => 259,
                'released_at' => NULL,
                'status_id' => 26,
                'user_id' => NULL,
                'tsr_id' => 1370,
                'created_at' => '2025-03-18 21:44:03',
                'updated_at' => '2025-03-18 21:44:03',
            ),
            258 => 
            array (
                'id' => 260,
                'released_at' => NULL,
                'status_id' => 26,
                'user_id' => NULL,
                'tsr_id' => 1474,
                'created_at' => '2025-03-18 21:44:26',
                'updated_at' => '2025-03-18 21:44:26',
            ),
            259 => 
            array (
                'id' => 261,
                'released_at' => NULL,
                'status_id' => 26,
                'user_id' => NULL,
                'tsr_id' => 1494,
                'created_at' => '2025-03-18 21:44:50',
                'updated_at' => '2025-03-18 21:44:50',
            ),
            260 => 
            array (
                'id' => 262,
                'released_at' => NULL,
                'status_id' => 26,
                'user_id' => NULL,
                'tsr_id' => 1530,
                'created_at' => '2025-03-18 21:45:20',
                'updated_at' => '2025-03-18 21:45:20',
            ),
            261 => 
            array (
                'id' => 263,
                'released_at' => NULL,
                'status_id' => 26,
                'user_id' => NULL,
                'tsr_id' => 1510,
                'created_at' => '2025-03-18 21:45:48',
                'updated_at' => '2025-03-18 21:45:48',
            ),
            262 => 
            array (
                'id' => 264,
                'released_at' => NULL,
                'status_id' => 26,
                'user_id' => NULL,
                'tsr_id' => 1446,
                'created_at' => '2025-03-18 21:46:23',
                'updated_at' => '2025-03-18 21:46:23',
            ),
            263 => 
            array (
                'id' => 265,
                'released_at' => NULL,
                'status_id' => 26,
                'user_id' => NULL,
                'tsr_id' => 1439,
                'created_at' => '2025-03-18 21:52:00',
                'updated_at' => '2025-03-18 21:52:00',
            ),
            264 => 
            array (
                'id' => 266,
                'released_at' => '2025-03-19',
                'status_id' => 27,
                'user_id' => 14,
                'tsr_id' => 1554,
                'created_at' => '2025-03-19 23:33:11',
                'updated_at' => '2025-03-19 23:33:19',
            ),
            265 => 
            array (
                'id' => 267,
                'released_at' => NULL,
                'status_id' => 26,
                'user_id' => NULL,
                'tsr_id' => 1552,
                'created_at' => '2025-03-20 00:04:31',
                'updated_at' => '2025-03-20 00:04:31',
            ),
            266 => 
            array (
                'id' => 268,
                'released_at' => NULL,
                'status_id' => 26,
                'user_id' => NULL,
                'tsr_id' => 1571,
                'created_at' => '2025-03-20 00:04:53',
                'updated_at' => '2025-03-20 00:04:53',
            ),
            267 => 
            array (
                'id' => 269,
                'released_at' => NULL,
                'status_id' => 26,
                'user_id' => NULL,
                'tsr_id' => 1542,
                'created_at' => '2025-03-20 00:05:30',
                'updated_at' => '2025-03-20 00:05:30',
            ),
            268 => 
            array (
                'id' => 270,
                'released_at' => NULL,
                'status_id' => 26,
                'user_id' => NULL,
                'tsr_id' => 1512,
                'created_at' => '2025-03-20 00:05:57',
                'updated_at' => '2025-03-20 00:05:57',
            ),
            269 => 
            array (
                'id' => 271,
                'released_at' => NULL,
                'status_id' => 26,
                'user_id' => NULL,
                'tsr_id' => 1495,
                'created_at' => '2025-03-20 00:06:22',
                'updated_at' => '2025-03-20 00:06:22',
            ),
            270 => 
            array (
                'id' => 272,
                'released_at' => NULL,
                'status_id' => 26,
                'user_id' => NULL,
                'tsr_id' => 1522,
                'created_at' => '2025-03-20 00:06:50',
                'updated_at' => '2025-03-20 00:06:50',
            ),
            271 => 
            array (
                'id' => 273,
                'released_at' => NULL,
                'status_id' => 26,
                'user_id' => NULL,
                'tsr_id' => 1383,
                'created_at' => '2025-03-25 17:15:36',
                'updated_at' => '2025-03-25 17:15:36',
            ),
            272 => 
            array (
                'id' => 274,
                'released_at' => NULL,
                'status_id' => 26,
                'user_id' => NULL,
                'tsr_id' => 1450,
                'created_at' => '2025-03-25 17:15:48',
                'updated_at' => '2025-03-25 17:15:48',
            ),
            273 => 
            array (
                'id' => 275,
                'released_at' => NULL,
                'status_id' => 26,
                'user_id' => NULL,
                'tsr_id' => 1458,
                'created_at' => '2025-03-25 17:16:02',
                'updated_at' => '2025-03-25 17:16:02',
            ),
            274 => 
            array (
                'id' => 276,
                'released_at' => NULL,
                'status_id' => 26,
                'user_id' => NULL,
                'tsr_id' => 1460,
                'created_at' => '2025-03-25 17:16:17',
                'updated_at' => '2025-03-25 17:16:17',
            ),
            275 => 
            array (
                'id' => 277,
                'released_at' => NULL,
                'status_id' => 26,
                'user_id' => NULL,
                'tsr_id' => 1459,
                'created_at' => '2025-03-25 17:16:29',
                'updated_at' => '2025-03-25 17:16:29',
            ),
            276 => 
            array (
                'id' => 278,
                'released_at' => NULL,
                'status_id' => 26,
                'user_id' => NULL,
                'tsr_id' => 1471,
                'created_at' => '2025-03-25 17:16:43',
                'updated_at' => '2025-03-25 17:16:43',
            ),
            277 => 
            array (
                'id' => 279,
                'released_at' => NULL,
                'status_id' => 26,
                'user_id' => NULL,
                'tsr_id' => 1472,
                'created_at' => '2025-03-25 17:17:10',
                'updated_at' => '2025-03-25 17:17:10',
            ),
            278 => 
            array (
                'id' => 280,
                'released_at' => NULL,
                'status_id' => 26,
                'user_id' => NULL,
                'tsr_id' => 1473,
                'created_at' => '2025-03-25 17:17:46',
                'updated_at' => '2025-03-25 17:17:46',
            ),
            279 => 
            array (
                'id' => 281,
                'released_at' => NULL,
                'status_id' => 26,
                'user_id' => NULL,
                'tsr_id' => 1516,
                'created_at' => '2025-03-25 17:18:41',
                'updated_at' => '2025-03-25 17:18:41',
            ),
            280 => 
            array (
                'id' => 282,
                'released_at' => NULL,
                'status_id' => 26,
                'user_id' => NULL,
                'tsr_id' => 1559,
                'created_at' => '2025-03-25 17:20:45',
                'updated_at' => '2025-03-25 17:20:45',
            ),
            281 => 
            array (
                'id' => 283,
                'released_at' => NULL,
                'status_id' => 26,
                'user_id' => NULL,
                'tsr_id' => 1259,
                'created_at' => '2025-03-25 17:23:00',
                'updated_at' => '2025-03-25 17:23:00',
            ),
            282 => 
            array (
                'id' => 284,
                'released_at' => NULL,
                'status_id' => 26,
                'user_id' => NULL,
                'tsr_id' => 1561,
                'created_at' => '2025-03-25 17:25:50',
                'updated_at' => '2025-03-25 17:25:50',
            ),
            283 => 
            array (
                'id' => 285,
                'released_at' => NULL,
                'status_id' => 26,
                'user_id' => NULL,
                'tsr_id' => 1489,
                'created_at' => '2025-03-25 17:26:48',
                'updated_at' => '2025-03-25 17:26:48',
            ),
            284 => 
            array (
                'id' => 286,
                'released_at' => NULL,
                'status_id' => 26,
                'user_id' => NULL,
                'tsr_id' => 1461,
                'created_at' => '2025-03-25 17:27:49',
                'updated_at' => '2025-03-25 17:27:49',
            ),
            285 => 
            array (
                'id' => 287,
                'released_at' => NULL,
                'status_id' => 26,
                'user_id' => NULL,
                'tsr_id' => 1427,
                'created_at' => '2025-03-25 17:28:53',
                'updated_at' => '2025-03-25 17:28:53',
            ),
            286 => 
            array (
                'id' => 288,
                'released_at' => NULL,
                'status_id' => 26,
                'user_id' => NULL,
                'tsr_id' => 1357,
                'created_at' => '2025-03-25 17:29:32',
                'updated_at' => '2025-03-25 17:29:32',
            ),
            287 => 
            array (
                'id' => 289,
                'released_at' => NULL,
                'status_id' => 26,
                'user_id' => NULL,
                'tsr_id' => 1278,
                'created_at' => '2025-03-25 17:30:00',
                'updated_at' => '2025-03-25 17:30:00',
            ),
            288 => 
            array (
                'id' => 290,
                'released_at' => NULL,
                'status_id' => 26,
                'user_id' => NULL,
                'tsr_id' => 1352,
                'created_at' => '2025-03-25 17:31:06',
                'updated_at' => '2025-03-25 17:31:06',
            ),
            289 => 
            array (
                'id' => 291,
                'released_at' => NULL,
                'status_id' => 26,
                'user_id' => NULL,
                'tsr_id' => 1353,
                'created_at' => '2025-03-25 17:31:15',
                'updated_at' => '2025-03-25 17:31:15',
            ),
            290 => 
            array (
                'id' => 292,
                'released_at' => NULL,
                'status_id' => 26,
                'user_id' => NULL,
                'tsr_id' => 1355,
                'created_at' => '2025-03-25 17:34:08',
                'updated_at' => '2025-03-25 17:34:08',
            ),
            291 => 
            array (
                'id' => 293,
                'released_at' => NULL,
                'status_id' => 26,
                'user_id' => NULL,
                'tsr_id' => 1287,
                'created_at' => '2025-03-25 17:36:23',
                'updated_at' => '2025-03-25 17:36:23',
            ),
            292 => 
            array (
                'id' => 294,
                'released_at' => NULL,
                'status_id' => 26,
                'user_id' => NULL,
                'tsr_id' => 1567,
                'created_at' => '2025-03-25 17:37:11',
                'updated_at' => '2025-03-25 17:37:11',
            ),
            293 => 
            array (
                'id' => 295,
                'released_at' => NULL,
                'status_id' => 26,
                'user_id' => NULL,
                'tsr_id' => 1490,
                'created_at' => '2025-03-25 17:37:29',
                'updated_at' => '2025-03-25 17:37:29',
            ),
            294 => 
            array (
                'id' => 296,
                'released_at' => NULL,
                'status_id' => 26,
                'user_id' => NULL,
                'tsr_id' => 1281,
                'created_at' => '2025-03-25 17:38:39',
                'updated_at' => '2025-03-25 17:38:39',
            ),
            295 => 
            array (
                'id' => 297,
                'released_at' => NULL,
                'status_id' => 26,
                'user_id' => NULL,
                'tsr_id' => 1240,
                'created_at' => '2025-03-25 17:41:03',
                'updated_at' => '2025-03-25 17:41:03',
            ),
            296 => 
            array (
                'id' => 298,
                'released_at' => NULL,
                'status_id' => 26,
                'user_id' => NULL,
                'tsr_id' => 1558,
                'created_at' => '2025-03-25 17:41:15',
                'updated_at' => '2025-03-25 17:41:15',
            ),
            297 => 
            array (
                'id' => 299,
                'released_at' => '2025-03-25',
                'status_id' => 27,
                'user_id' => 14,
                'tsr_id' => 1182,
                'created_at' => '2025-03-25 17:58:00',
                'updated_at' => '2025-03-25 17:58:06',
            ),
            298 => 
            array (
                'id' => 300,
                'released_at' => '2025-03-25',
                'status_id' => 27,
                'user_id' => 14,
                'tsr_id' => 1183,
                'created_at' => '2025-03-25 17:58:16',
                'updated_at' => '2025-03-25 17:58:26',
            ),
            299 => 
            array (
                'id' => 301,
                'released_at' => '2025-03-25',
                'status_id' => 27,
                'user_id' => 14,
                'tsr_id' => 1184,
                'created_at' => '2025-03-25 17:58:43',
                'updated_at' => '2025-03-25 17:58:49',
            ),
            300 => 
            array (
                'id' => 302,
                'released_at' => '2025-04-03',
                'status_id' => 27,
                'user_id' => 14,
                'tsr_id' => 1607,
                'created_at' => '2025-04-03 17:21:44',
                'updated_at' => '2025-04-03 22:35:20',
            ),
            301 => 
            array (
                'id' => 303,
                'released_at' => '2025-04-03',
                'status_id' => 27,
                'user_id' => 14,
                'tsr_id' => 1600,
                'created_at' => '2025-04-03 17:22:01',
                'updated_at' => '2025-04-03 22:35:14',
            ),
            302 => 
            array (
                'id' => 304,
                'released_at' => NULL,
                'status_id' => 26,
                'user_id' => NULL,
                'tsr_id' => 1666,
                'created_at' => '2025-04-03 22:32:57',
                'updated_at' => '2025-04-03 22:32:57',
            ),
            303 => 
            array (
                'id' => 305,
                'released_at' => NULL,
                'status_id' => 26,
                'user_id' => NULL,
                'tsr_id' => 1451,
                'created_at' => '2025-04-03 22:34:10',
                'updated_at' => '2025-04-03 22:34:10',
            ),
            304 => 
            array (
                'id' => 306,
                'released_at' => '2025-04-03',
                'status_id' => 27,
                'user_id' => 14,
                'tsr_id' => 1528,
                'created_at' => '2025-04-03 22:34:57',
                'updated_at' => '2025-04-03 23:33:02',
            ),
            305 => 
            array (
                'id' => 307,
                'released_at' => NULL,
                'status_id' => 26,
                'user_id' => NULL,
                'tsr_id' => 1525,
                'created_at' => '2025-04-03 22:35:59',
                'updated_at' => '2025-04-03 22:35:59',
            ),
            306 => 
            array (
                'id' => 308,
                'released_at' => NULL,
                'status_id' => 26,
                'user_id' => NULL,
                'tsr_id' => 1524,
                'created_at' => '2025-04-03 22:36:32',
                'updated_at' => '2025-04-03 22:36:32',
            ),
            307 => 
            array (
                'id' => 309,
                'released_at' => NULL,
                'status_id' => 26,
                'user_id' => NULL,
                'tsr_id' => 1526,
                'created_at' => '2025-04-03 22:37:22',
                'updated_at' => '2025-04-03 22:37:22',
            ),
            308 => 
            array (
                'id' => 310,
                'released_at' => NULL,
                'status_id' => 26,
                'user_id' => NULL,
                'tsr_id' => 1503,
                'created_at' => '2025-04-03 22:37:46',
                'updated_at' => '2025-04-03 22:37:46',
            ),
            309 => 
            array (
                'id' => 311,
                'released_at' => NULL,
                'status_id' => 26,
                'user_id' => NULL,
                'tsr_id' => 1532,
                'created_at' => '2025-04-03 22:38:26',
                'updated_at' => '2025-04-03 22:38:26',
            ),
            310 => 
            array (
                'id' => 312,
                'released_at' => '2025-04-03',
                'status_id' => 27,
                'user_id' => 14,
                'tsr_id' => 1541,
                'created_at' => '2025-04-03 22:38:46',
                'updated_at' => '2025-04-03 23:31:46',
            ),
            311 => 
            array (
                'id' => 313,
                'released_at' => NULL,
                'status_id' => 26,
                'user_id' => NULL,
                'tsr_id' => 1523,
                'created_at' => '2025-04-03 22:39:34',
                'updated_at' => '2025-04-03 22:39:34',
            ),
            312 => 
            array (
                'id' => 314,
                'released_at' => NULL,
                'status_id' => 26,
                'user_id' => NULL,
                'tsr_id' => 1544,
                'created_at' => '2025-04-03 22:41:28',
                'updated_at' => '2025-04-03 22:41:28',
            ),
            313 => 
            array (
                'id' => 315,
                'released_at' => NULL,
                'status_id' => 26,
                'user_id' => NULL,
                'tsr_id' => 1499,
                'created_at' => '2025-04-03 22:41:50',
                'updated_at' => '2025-04-03 22:41:50',
            ),
            314 => 
            array (
                'id' => 316,
                'released_at' => NULL,
                'status_id' => 26,
                'user_id' => NULL,
                'tsr_id' => 1549,
                'created_at' => '2025-04-03 22:45:43',
                'updated_at' => '2025-04-03 22:45:43',
            ),
            315 => 
            array (
                'id' => 317,
                'released_at' => NULL,
                'status_id' => 26,
                'user_id' => NULL,
                'tsr_id' => 1632,
                'created_at' => '2025-04-03 22:46:08',
                'updated_at' => '2025-04-03 22:46:08',
            ),
            316 => 
            array (
                'id' => 318,
                'released_at' => NULL,
                'status_id' => 26,
                'user_id' => NULL,
                'tsr_id' => 793,
                'created_at' => '2025-04-03 22:50:00',
                'updated_at' => '2025-04-03 22:50:00',
            ),
            317 => 
            array (
                'id' => 319,
                'released_at' => NULL,
                'status_id' => 26,
                'user_id' => NULL,
                'tsr_id' => 1232,
                'created_at' => '2025-04-03 22:54:06',
                'updated_at' => '2025-04-03 22:54:06',
            ),
            318 => 
            array (
                'id' => 320,
                'released_at' => NULL,
                'status_id' => 26,
                'user_id' => NULL,
                'tsr_id' => 1237,
                'created_at' => '2025-04-03 22:55:42',
                'updated_at' => '2025-04-03 22:55:42',
            ),
            319 => 
            array (
                'id' => 321,
                'released_at' => NULL,
                'status_id' => 26,
                'user_id' => NULL,
                'tsr_id' => 1587,
                'created_at' => '2025-04-03 22:56:32',
                'updated_at' => '2025-04-03 22:56:32',
            ),
            320 => 
            array (
                'id' => 322,
                'released_at' => NULL,
                'status_id' => 26,
                'user_id' => NULL,
                'tsr_id' => 1586,
                'created_at' => '2025-04-03 22:57:09',
                'updated_at' => '2025-04-03 22:57:09',
            ),
            321 => 
            array (
                'id' => 323,
                'released_at' => NULL,
                'status_id' => 26,
                'user_id' => NULL,
                'tsr_id' => 1589,
                'created_at' => '2025-04-03 22:57:29',
                'updated_at' => '2025-04-03 22:57:29',
            ),
            322 => 
            array (
                'id' => 324,
                'released_at' => NULL,
                'status_id' => 26,
                'user_id' => NULL,
                'tsr_id' => 1588,
                'created_at' => '2025-04-03 22:57:59',
                'updated_at' => '2025-04-03 22:57:59',
            ),
            323 => 
            array (
                'id' => 325,
                'released_at' => NULL,
                'status_id' => 26,
                'user_id' => NULL,
                'tsr_id' => 1581,
                'created_at' => '2025-04-03 23:05:08',
                'updated_at' => '2025-04-03 23:05:08',
            ),
            324 => 
            array (
                'id' => 326,
                'released_at' => NULL,
                'status_id' => 26,
                'user_id' => NULL,
                'tsr_id' => 1580,
                'created_at' => '2025-04-03 23:22:11',
                'updated_at' => '2025-04-03 23:22:11',
            ),
            325 => 
            array (
                'id' => 327,
                'released_at' => NULL,
                'status_id' => 26,
                'user_id' => NULL,
                'tsr_id' => 1582,
                'created_at' => '2025-04-03 23:22:39',
                'updated_at' => '2025-04-03 23:22:39',
            ),
            326 => 
            array (
                'id' => 328,
                'released_at' => NULL,
                'status_id' => 26,
                'user_id' => NULL,
                'tsr_id' => 1644,
                'created_at' => '2025-04-04 18:48:40',
                'updated_at' => '2025-04-04 18:48:40',
            ),
            327 => 
            array (
                'id' => 329,
                'released_at' => NULL,
                'status_id' => 26,
                'user_id' => NULL,
                'tsr_id' => 1656,
                'created_at' => '2025-04-11 00:08:15',
                'updated_at' => '2025-04-11 00:08:15',
            ),
            328 => 
            array (
                'id' => 330,
                'released_at' => NULL,
                'status_id' => 26,
                'user_id' => NULL,
                'tsr_id' => 1564,
                'created_at' => '2025-04-11 00:08:49',
                'updated_at' => '2025-04-11 00:08:49',
            ),
            329 => 
            array (
                'id' => 331,
                'released_at' => NULL,
                'status_id' => 26,
                'user_id' => NULL,
                'tsr_id' => 1657,
                'created_at' => '2025-04-24 17:28:26',
                'updated_at' => '2025-04-24 17:28:26',
            ),
            330 => 
            array (
                'id' => 332,
                'released_at' => NULL,
                'status_id' => 26,
                'user_id' => NULL,
                'tsr_id' => 1686,
                'created_at' => '2025-04-24 17:29:14',
                'updated_at' => '2025-04-24 17:29:14',
            ),
            331 => 
            array (
                'id' => 333,
                'released_at' => NULL,
                'status_id' => 26,
                'user_id' => NULL,
                'tsr_id' => 1711,
                'created_at' => '2025-04-24 17:30:09',
                'updated_at' => '2025-04-24 17:30:09',
            ),
            332 => 
            array (
                'id' => 334,
                'released_at' => NULL,
                'status_id' => 26,
                'user_id' => NULL,
                'tsr_id' => 1577,
                'created_at' => '2025-04-24 17:33:37',
                'updated_at' => '2025-04-24 17:33:37',
            ),
            333 => 
            array (
                'id' => 335,
                'released_at' => NULL,
                'status_id' => 26,
                'user_id' => NULL,
                'tsr_id' => 1684,
                'created_at' => '2025-04-24 17:37:10',
                'updated_at' => '2025-04-24 17:37:10',
            ),
            334 => 
            array (
                'id' => 336,
                'released_at' => NULL,
                'status_id' => 26,
                'user_id' => NULL,
                'tsr_id' => 1596,
                'created_at' => '2025-04-24 17:38:31',
                'updated_at' => '2025-04-24 17:38:31',
            ),
            335 => 
            array (
                'id' => 337,
                'released_at' => NULL,
                'status_id' => 26,
                'user_id' => NULL,
                'tsr_id' => 1597,
                'created_at' => '2025-04-24 17:42:54',
                'updated_at' => '2025-04-24 17:42:54',
            ),
            336 => 
            array (
                'id' => 338,
                'released_at' => NULL,
                'status_id' => 26,
                'user_id' => NULL,
                'tsr_id' => 1720,
                'created_at' => '2025-04-24 17:43:27',
                'updated_at' => '2025-04-24 17:43:27',
            ),
            337 => 
            array (
                'id' => 339,
                'released_at' => NULL,
                'status_id' => 26,
                'user_id' => NULL,
                'tsr_id' => 1637,
                'created_at' => '2025-04-24 17:43:58',
                'updated_at' => '2025-04-24 17:43:58',
            ),
            338 => 
            array (
                'id' => 340,
                'released_at' => NULL,
                'status_id' => 26,
                'user_id' => NULL,
                'tsr_id' => 1640,
                'created_at' => '2025-04-24 17:45:00',
                'updated_at' => '2025-04-24 17:45:00',
            ),
            339 => 
            array (
                'id' => 341,
                'released_at' => NULL,
                'status_id' => 26,
                'user_id' => NULL,
                'tsr_id' => 1601,
                'created_at' => '2025-04-24 17:45:40',
                'updated_at' => '2025-04-24 17:45:40',
            ),
            340 => 
            array (
                'id' => 342,
                'released_at' => NULL,
                'status_id' => 26,
                'user_id' => NULL,
                'tsr_id' => 1669,
                'created_at' => '2025-04-24 17:56:24',
                'updated_at' => '2025-04-24 17:56:24',
            ),
            341 => 
            array (
                'id' => 343,
                'released_at' => NULL,
                'status_id' => 26,
                'user_id' => NULL,
                'tsr_id' => 1572,
                'created_at' => '2025-04-24 17:58:27',
                'updated_at' => '2025-04-24 17:58:27',
            ),
            342 => 
            array (
                'id' => 344,
                'released_at' => NULL,
                'status_id' => 26,
                'user_id' => NULL,
                'tsr_id' => 1566,
                'created_at' => '2025-04-24 18:02:21',
                'updated_at' => '2025-04-24 18:02:21',
            ),
            343 => 
            array (
                'id' => 345,
                'released_at' => NULL,
                'status_id' => 26,
                'user_id' => NULL,
                'tsr_id' => 1723,
                'created_at' => '2025-04-24 18:03:01',
                'updated_at' => '2025-04-24 18:03:01',
            ),
            344 => 
            array (
                'id' => 346,
                'released_at' => NULL,
                'status_id' => 26,
                'user_id' => NULL,
                'tsr_id' => 1610,
                'created_at' => '2025-04-24 18:03:36',
                'updated_at' => '2025-04-24 18:03:36',
            ),
            345 => 
            array (
                'id' => 347,
                'released_at' => NULL,
                'status_id' => 26,
                'user_id' => NULL,
                'tsr_id' => 1668,
                'created_at' => '2025-04-24 18:18:51',
                'updated_at' => '2025-04-24 18:18:51',
            ),
            346 => 
            array (
                'id' => 348,
                'released_at' => NULL,
                'status_id' => 26,
                'user_id' => NULL,
                'tsr_id' => 1725,
                'created_at' => '2025-04-24 18:19:23',
                'updated_at' => '2025-04-24 18:19:23',
            ),
            347 => 
            array (
                'id' => 349,
                'released_at' => NULL,
                'status_id' => 26,
                'user_id' => NULL,
                'tsr_id' => 1688,
                'created_at' => '2025-04-24 18:19:54',
                'updated_at' => '2025-04-24 18:19:54',
            ),
            348 => 
            array (
                'id' => 350,
                'released_at' => NULL,
                'status_id' => 26,
                'user_id' => NULL,
                'tsr_id' => 1685,
                'created_at' => '2025-04-24 18:20:27',
                'updated_at' => '2025-04-24 18:20:27',
            ),
            349 => 
            array (
                'id' => 351,
                'released_at' => NULL,
                'status_id' => 26,
                'user_id' => NULL,
                'tsr_id' => 1682,
                'created_at' => '2025-04-24 18:21:16',
                'updated_at' => '2025-04-24 18:21:16',
            ),
            350 => 
            array (
                'id' => 352,
                'released_at' => NULL,
                'status_id' => 26,
                'user_id' => NULL,
                'tsr_id' => 1652,
                'created_at' => '2025-04-24 18:21:48',
                'updated_at' => '2025-04-24 18:21:48',
            ),
            351 => 
            array (
                'id' => 353,
                'released_at' => NULL,
                'status_id' => 26,
                'user_id' => NULL,
                'tsr_id' => 1635,
                'created_at' => '2025-04-24 18:22:47',
                'updated_at' => '2025-04-24 18:22:47',
            ),
            352 => 
            array (
                'id' => 354,
                'released_at' => NULL,
                'status_id' => 26,
                'user_id' => NULL,
                'tsr_id' => 1670,
                'created_at' => '2025-04-24 22:32:26',
                'updated_at' => '2025-04-24 22:32:26',
            ),
            353 => 
            array (
                'id' => 355,
                'released_at' => NULL,
                'status_id' => 26,
                'user_id' => NULL,
                'tsr_id' => 1735,
                'created_at' => '2025-04-24 22:33:06',
                'updated_at' => '2025-04-24 22:33:06',
            ),
            354 => 
            array (
                'id' => 356,
                'released_at' => NULL,
                'status_id' => 26,
                'user_id' => NULL,
                'tsr_id' => 1745,
                'created_at' => '2025-04-24 22:33:57',
                'updated_at' => '2025-04-24 22:33:57',
            ),
            355 => 
            array (
                'id' => 357,
                'released_at' => NULL,
                'status_id' => 26,
                'user_id' => NULL,
                'tsr_id' => 1779,
                'created_at' => '2025-04-30 16:30:34',
                'updated_at' => '2025-04-30 16:30:34',
            ),
            356 => 
            array (
                'id' => 358,
                'released_at' => NULL,
                'status_id' => 26,
                'user_id' => NULL,
                'tsr_id' => 1660,
                'created_at' => '2025-04-30 16:32:03',
                'updated_at' => '2025-04-30 16:32:03',
            ),
            357 => 
            array (
                'id' => 359,
                'released_at' => NULL,
                'status_id' => 26,
                'user_id' => NULL,
                'tsr_id' => 1778,
                'created_at' => '2025-04-30 16:37:21',
                'updated_at' => '2025-04-30 16:37:21',
            ),
            358 => 
            array (
                'id' => 360,
                'released_at' => NULL,
                'status_id' => 26,
                'user_id' => NULL,
                'tsr_id' => 1748,
                'created_at' => '2025-04-30 16:38:52',
                'updated_at' => '2025-04-30 16:38:52',
            ),
            359 => 
            array (
                'id' => 361,
                'released_at' => NULL,
                'status_id' => 26,
                'user_id' => NULL,
                'tsr_id' => 1598,
                'created_at' => '2025-04-30 16:40:39',
                'updated_at' => '2025-04-30 16:40:39',
            ),
        ));

        
    }
}