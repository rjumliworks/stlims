<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TsrSampleReportsTableSeeder extends Seeder
{
    /**
     * Auto generated seeder file.
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tsr_sample_reports')->delete();
        
        \DB::table('tsr_sample_reports')->insert(array (
            0 => 
            array (
                'id' => 1,
                'code' => 'R9-09112024-MET-0871',
                'information' => NULL,
                'sample_id' => 450,
                'user_id' => 13,
                'created_at' => '2024-09-12 17:08:36',
                'updated_at' => '2024-09-12 17:08:36',
            ),
            1 => 
            array (
                'id' => 2,
                'code' => 'R9-09122024-MET-0872',
                'information' => NULL,
                'sample_id' => 459,
                'user_id' => 12,
                'created_at' => '2024-09-12 19:00:33',
                'updated_at' => '2024-09-12 19:00:33',
            ),
            2 => 
            array (
                'id' => 3,
                'code' => 'R9-09172024-MIC-1080',
                'information' => NULL,
                'sample_id' => 412,
                'user_id' => 16,
                'created_at' => '2024-09-17 23:13:23',
                'updated_at' => '2024-09-17 23:13:23',
            ),
            3 => 
            array (
                'id' => 4,
                'code' => 'R9-09172024-MIC-1081',
                'information' => NULL,
                'sample_id' => 414,
                'user_id' => 7,
                'created_at' => '2024-09-17 23:42:13',
                'updated_at' => '2024-09-17 23:42:13',
            ),
            4 => 
            array (
                'id' => 5,
                'code' => 'R9-09172024-CHE-0954',
                'information' => NULL,
                'sample_id' => 452,
                'user_id' => 7,
                'created_at' => '2024-09-18 00:53:19',
                'updated_at' => '2024-09-18 00:53:19',
            ),
            5 => 
            array (
                'id' => 6,
                'code' => 'R9-09182024-CHE-0955',
                'information' => NULL,
                'sample_id' => 351,
                'user_id' => 6,
                'created_at' => '2024-09-18 17:59:07',
                'updated_at' => '2024-09-18 17:59:07',
            ),
            6 => 
            array (
                'id' => 7,
                'code' => 'R9-09182024-CHE-0956',
                'information' => NULL,
                'sample_id' => 485,
                'user_id' => 6,
                'created_at' => '2024-09-18 18:07:02',
                'updated_at' => '2024-09-18 18:07:02',
            ),
            7 => 
            array (
                'id' => 8,
                'code' => 'R9-09182024-CHE-0957',
                'information' => NULL,
                'sample_id' => 486,
                'user_id' => 6,
                'created_at' => '2024-09-18 18:07:40',
                'updated_at' => '2024-09-18 18:07:40',
            ),
            8 => 
            array (
                'id' => 9,
                'code' => 'R9-09182024-MET-0962',
                'information' => NULL,
                'sample_id' => 523,
                'user_id' => 12,
                'created_at' => '2024-09-18 19:11:41',
                'updated_at' => '2024-09-18 19:11:41',
            ),
            9 => 
            array (
                'id' => 10,
                'code' => 'R9-09182024-MIC-1082',
                'information' => NULL,
                'sample_id' => 403,
                'user_id' => 16,
                'created_at' => '2024-09-18 20:57:07',
                'updated_at' => '2024-09-18 20:57:07',
            ),
            10 => 
            array (
                'id' => 11,
                'code' => 'R9-09182024-MIC-1083',
                'information' => NULL,
                'sample_id' => 404,
                'user_id' => 16,
                'created_at' => '2024-09-18 21:52:30',
                'updated_at' => '2024-09-18 21:52:30',
            ),
            11 => 
            array (
                'id' => 12,
                'code' => 'R9-09182024-MIC-1084',
                'information' => NULL,
                'sample_id' => 405,
                'user_id' => 16,
                'created_at' => '2024-09-18 21:52:54',
                'updated_at' => '2024-09-18 21:52:54',
            ),
            12 => 
            array (
                'id' => 13,
                'code' => 'R9-09182024-MIC-1085',
                'information' => NULL,
                'sample_id' => 416,
                'user_id' => 16,
                'created_at' => '2024-09-18 22:10:44',
                'updated_at' => '2024-09-18 22:10:44',
            ),
            13 => 
            array (
                'id' => 14,
                'code' => 'R9-09182024-MIC-1086',
                'information' => NULL,
                'sample_id' => 417,
                'user_id' => 16,
                'created_at' => '2024-09-18 22:11:46',
                'updated_at' => '2024-09-18 22:11:46',
            ),
            14 => 
            array (
                'id' => 15,
                'code' => 'R9-09182024-MIC-1087',
                'information' => NULL,
                'sample_id' => 418,
                'user_id' => 16,
                'created_at' => '2024-09-18 22:12:30',
                'updated_at' => '2024-09-18 22:12:30',
            ),
            15 => 
            array (
                'id' => 16,
                'code' => 'R9-09182024-MIC-1088',
                'information' => NULL,
                'sample_id' => 419,
                'user_id' => 16,
                'created_at' => '2024-09-18 22:13:13',
                'updated_at' => '2024-09-18 22:13:13',
            ),
            16 => 
            array (
                'id' => 17,
                'code' => 'R9-09182024-MIC-1089',
                'information' => NULL,
                'sample_id' => 420,
                'user_id' => 16,
                'created_at' => '2024-09-18 22:13:55',
                'updated_at' => '2024-09-18 22:13:55',
            ),
            17 => 
            array (
                'id' => 18,
                'code' => 'R9-09182024-MIC-1090',
                'information' => NULL,
                'sample_id' => 423,
                'user_id' => 16,
                'created_at' => '2024-09-18 22:14:18',
                'updated_at' => '2024-09-18 22:14:18',
            ),
            18 => 
            array (
                'id' => 19,
                'code' => 'R9-09182024-MIC-1091',
                'information' => NULL,
                'sample_id' => 424,
                'user_id' => 16,
                'created_at' => '2024-09-18 22:14:35',
                'updated_at' => '2024-09-18 22:14:35',
            ),
            19 => 
            array (
                'id' => 20,
                'code' => 'R9-09182024-MIC-1092',
                'information' => NULL,
                'sample_id' => 425,
                'user_id' => 16,
                'created_at' => '2024-09-18 22:15:00',
                'updated_at' => '2024-09-18 22:15:00',
            ),
            20 => 
            array (
                'id' => 21,
                'code' => 'R9-09182024-MIC-1093',
                'information' => NULL,
                'sample_id' => 426,
                'user_id' => 16,
                'created_at' => '2024-09-18 22:15:14',
                'updated_at' => '2024-09-18 22:15:14',
            ),
            21 => 
            array (
                'id' => 22,
                'code' => 'R9-09182024-MIC-1094',
                'information' => NULL,
                'sample_id' => 427,
                'user_id' => 16,
                'created_at' => '2024-09-18 22:15:28',
                'updated_at' => '2024-09-18 22:15:28',
            ),
            22 => 
            array (
                'id' => 23,
                'code' => 'R9-09182024-MIC-1095',
                'information' => NULL,
                'sample_id' => 428,
                'user_id' => 16,
                'created_at' => '2024-09-18 22:15:51',
                'updated_at' => '2024-09-18 22:15:51',
            ),
            23 => 
            array (
                'id' => 24,
                'code' => 'R9-09182024-MIC-1096',
                'information' => NULL,
                'sample_id' => 429,
                'user_id' => 16,
                'created_at' => '2024-09-18 22:16:20',
                'updated_at' => '2024-09-18 22:16:20',
            ),
            24 => 
            array (
                'id' => 25,
                'code' => 'R9-09182024-MIC-1097',
                'information' => NULL,
                'sample_id' => 433,
                'user_id' => 16,
                'created_at' => '2024-09-18 22:16:51',
                'updated_at' => '2024-09-18 22:16:51',
            ),
            25 => 
            array (
                'id' => 26,
                'code' => 'R9-09192024-MIC-1098',
                'information' => NULL,
                'sample_id' => 445,
                'user_id' => 16,
                'created_at' => '2024-09-19 17:32:32',
                'updated_at' => '2024-09-19 17:32:32',
            ),
            26 => 
            array (
                'id' => 27,
                'code' => 'R9-09192024-MIC-1099',
                'information' => NULL,
                'sample_id' => 446,
                'user_id' => 16,
                'created_at' => '2024-09-19 17:32:55',
                'updated_at' => '2024-09-19 17:32:55',
            ),
            27 => 
            array (
                'id' => 28,
                'code' => 'R9-09192024-MIC-1100',
                'information' => NULL,
                'sample_id' => 447,
                'user_id' => 16,
                'created_at' => '2024-09-19 17:33:14',
                'updated_at' => '2024-09-19 17:33:14',
            ),
            28 => 
            array (
                'id' => 29,
                'code' => 'R9-09192024-MIC-1101',
                'information' => NULL,
                'sample_id' => 453,
                'user_id' => 16,
                'created_at' => '2024-09-19 17:33:44',
                'updated_at' => '2024-09-19 17:33:44',
            ),
            29 => 
            array (
                'id' => 30,
                'code' => 'R9-09192024-MIC-1102',
                'information' => NULL,
                'sample_id' => 454,
                'user_id' => 16,
                'created_at' => '2024-09-19 17:34:05',
                'updated_at' => '2024-09-19 17:34:05',
            ),
            30 => 
            array (
                'id' => 31,
                'code' => 'R9-09192024-MET-0963',
                'information' => NULL,
                'sample_id' => 507,
                'user_id' => 13,
                'created_at' => '2024-09-19 21:18:39',
                'updated_at' => '2024-09-19 21:18:39',
            ),
            31 => 
            array (
                'id' => 32,
                'code' => 'R9-09192024-MIC-1103',
                'information' => NULL,
                'sample_id' => 399,
                'user_id' => 16,
                'created_at' => '2024-09-19 22:00:48',
                'updated_at' => '2024-09-19 22:00:48',
            ),
            32 => 
            array (
                'id' => 33,
                'code' => 'R9-09192024-MIC-1104',
                'information' => NULL,
                'sample_id' => 322,
                'user_id' => 16,
                'created_at' => '2024-09-20 00:43:52',
                'updated_at' => '2024-09-20 00:43:52',
            ),
            33 => 
            array (
                'id' => 34,
                'code' => 'R9-09192024-MIC-1105',
                'information' => NULL,
                'sample_id' => 434,
                'user_id' => 16,
                'created_at' => '2024-09-20 00:45:08',
                'updated_at' => '2024-09-20 00:45:08',
            ),
            34 => 
            array (
                'id' => 35,
                'code' => 'R9-09192024-MIC-1106',
                'information' => NULL,
                'sample_id' => 435,
                'user_id' => 16,
                'created_at' => '2024-09-20 00:45:32',
                'updated_at' => '2024-09-20 00:45:32',
            ),
            35 => 
            array (
                'id' => 36,
                'code' => 'R9-09192024-MIC-1107',
                'information' => NULL,
                'sample_id' => 436,
                'user_id' => 16,
                'created_at' => '2024-09-20 00:45:52',
                'updated_at' => '2024-09-20 00:45:52',
            ),
            36 => 
            array (
                'id' => 37,
                'code' => 'R9-09192024-MIC-1108',
                'information' => NULL,
                'sample_id' => 500,
                'user_id' => 16,
                'created_at' => '2024-09-20 00:46:38',
                'updated_at' => '2024-09-20 00:46:38',
            ),
            37 => 
            array (
                'id' => 38,
                'code' => 'R9-09192024-MIC-1109',
                'information' => NULL,
                'sample_id' => 501,
                'user_id' => 16,
                'created_at' => '2024-09-20 00:47:16',
                'updated_at' => '2024-09-20 00:47:16',
            ),
            38 => 
            array (
                'id' => 39,
                'code' => 'R9-09192024-MIC-1110',
                'information' => NULL,
                'sample_id' => 502,
                'user_id' => 16,
                'created_at' => '2024-09-20 00:47:32',
                'updated_at' => '2024-09-20 00:47:32',
            ),
            39 => 
            array (
                'id' => 40,
                'code' => 'R9-09202024-CHE-0958',
                'information' => NULL,
                'sample_id' => 448,
                'user_id' => 8,
                'created_at' => '2024-09-20 16:17:43',
                'updated_at' => '2024-09-20 16:17:43',
            ),
            40 => 
            array (
                'id' => 41,
                'code' => 'R9-09202024-CHE-0959',
                'information' => NULL,
                'sample_id' => 449,
                'user_id' => 8,
                'created_at' => '2024-09-20 16:18:38',
                'updated_at' => '2024-09-20 16:18:38',
            ),
            41 => 
            array (
                'id' => 42,
                'code' => 'R9-09202024-MET-0964',
                'information' => NULL,
                'sample_id' => 413,
                'user_id' => 13,
                'created_at' => '2024-09-20 17:11:41',
                'updated_at' => '2024-09-20 17:11:41',
            ),
            42 => 
            array (
                'id' => 43,
                'code' => 'R9-09202024-CHE-0960',
                'information' => NULL,
                'sample_id' => 356,
                'user_id' => 8,
                'created_at' => '2024-09-20 17:20:44',
                'updated_at' => '2024-09-20 17:20:44',
            ),
            43 => 
            array (
                'id' => 44,
                'code' => 'R9-09202024-CHE-0961',
                'information' => NULL,
                'sample_id' => 357,
                'user_id' => 8,
                'created_at' => '2024-09-20 17:21:34',
                'updated_at' => '2024-09-20 17:21:34',
            ),
            44 => 
            array (
                'id' => 45,
                'code' => 'R9-09202024-CHE-0962',
                'information' => NULL,
                'sample_id' => 358,
                'user_id' => 8,
                'created_at' => '2024-09-20 17:21:46',
                'updated_at' => '2024-09-20 17:21:46',
            ),
            45 => 
            array (
                'id' => 46,
                'code' => 'R9-09202024-CHE-0963',
                'information' => NULL,
                'sample_id' => 359,
                'user_id' => 8,
                'created_at' => '2024-09-20 17:21:58',
                'updated_at' => '2024-09-20 17:21:58',
            ),
            46 => 
            array (
                'id' => 47,
                'code' => 'R9-09202024-CHE-0964',
                'information' => NULL,
                'sample_id' => 363,
                'user_id' => 8,
                'created_at' => '2024-09-20 17:45:20',
                'updated_at' => '2024-09-20 17:45:20',
            ),
            47 => 
            array (
                'id' => 48,
                'code' => 'R9-09202024-CHE-0965',
                'information' => NULL,
                'sample_id' => 387,
                'user_id' => 8,
                'created_at' => '2024-09-20 18:01:46',
                'updated_at' => '2024-09-20 18:01:46',
            ),
            48 => 
            array (
                'id' => 49,
                'code' => 'R9-09202024-CHE-0966',
                'information' => NULL,
                'sample_id' => 364,
                'user_id' => 8,
                'created_at' => '2024-09-20 18:06:19',
                'updated_at' => '2024-09-20 18:06:19',
            ),
            49 => 
            array (
                'id' => 50,
                'code' => 'R9-09202024-MET-0965',
                'information' => NULL,
                'sample_id' => 590,
                'user_id' => 13,
                'created_at' => '2024-09-20 18:08:25',
                'updated_at' => '2024-09-20 18:08:25',
            ),
            50 => 
            array (
                'id' => 51,
                'code' => 'R9-09202024-CHE-0967',
                'information' => NULL,
                'sample_id' => 388,
                'user_id' => 8,
                'created_at' => '2024-09-20 18:19:16',
                'updated_at' => '2024-09-20 18:19:16',
            ),
            51 => 
            array (
                'id' => 52,
                'code' => 'R9-09202024-CHE-0968',
                'information' => NULL,
                'sample_id' => 365,
                'user_id' => 8,
                'created_at' => '2024-09-20 18:19:45',
                'updated_at' => '2024-09-20 18:19:45',
            ),
            52 => 
            array (
                'id' => 53,
                'code' => 'R9-09202024-CHE-0969',
                'information' => NULL,
                'sample_id' => 335,
                'user_id' => 8,
                'created_at' => '2024-09-20 19:33:10',
                'updated_at' => '2024-09-20 19:33:10',
            ),
            53 => 
            array (
                'id' => 54,
                'code' => 'R9-09202024-CHE-0970',
                'information' => NULL,
                'sample_id' => 336,
                'user_id' => 8,
                'created_at' => '2024-09-20 19:33:56',
                'updated_at' => '2024-09-20 19:33:56',
            ),
            54 => 
            array (
                'id' => 55,
                'code' => 'R9-09202024-CHE-0971',
                'information' => NULL,
                'sample_id' => 337,
                'user_id' => 8,
                'created_at' => '2024-09-20 19:34:08',
                'updated_at' => '2024-09-20 19:34:08',
            ),
            55 => 
            array (
                'id' => 56,
                'code' => 'R9-09202024-CHE-0972',
                'information' => NULL,
                'sample_id' => 338,
                'user_id' => 8,
                'created_at' => '2024-09-20 19:34:20',
                'updated_at' => '2024-09-20 19:34:20',
            ),
            56 => 
            array (
                'id' => 57,
                'code' => 'R9-09202024-CHE-0973',
                'information' => NULL,
                'sample_id' => 248,
                'user_id' => 8,
                'created_at' => '2024-09-20 21:44:15',
                'updated_at' => '2024-09-20 21:44:15',
            ),
            57 => 
            array (
                'id' => 58,
                'code' => 'R9-09202024-CHE-0974',
                'information' => NULL,
                'sample_id' => 249,
                'user_id' => 8,
                'created_at' => '2024-09-20 21:44:34',
                'updated_at' => '2024-09-20 21:44:34',
            ),
            58 => 
            array (
                'id' => 59,
                'code' => 'R9-09202024-CHE-0975',
                'information' => NULL,
                'sample_id' => 541,
                'user_id' => 8,
                'created_at' => '2024-09-20 22:29:35',
                'updated_at' => '2024-09-20 22:29:35',
            ),
            59 => 
            array (
                'id' => 60,
                'code' => 'R9-09202024-CHE-0976',
                'information' => NULL,
                'sample_id' => 542,
                'user_id' => 8,
                'created_at' => '2024-09-20 22:29:51',
                'updated_at' => '2024-09-20 22:29:51',
            ),
            60 => 
            array (
                'id' => 61,
                'code' => 'R9-09202024-MIC-1111',
                'information' => NULL,
                'sample_id' => 536,
                'user_id' => 16,
                'created_at' => '2024-09-20 22:53:52',
                'updated_at' => '2024-09-20 22:53:52',
            ),
            61 => 
            array (
                'id' => 62,
                'code' => 'R9-09202024-MIC-1112',
                'information' => NULL,
                'sample_id' => 526,
                'user_id' => 16,
                'created_at' => '2024-09-20 23:01:27',
                'updated_at' => '2024-09-20 23:01:27',
            ),
            62 => 
            array (
                'id' => 63,
                'code' => 'R9-09202024-MIC-1113',
                'information' => NULL,
                'sample_id' => 527,
                'user_id' => 16,
                'created_at' => '2024-09-20 23:03:07',
                'updated_at' => '2024-09-20 23:03:07',
            ),
            63 => 
            array (
                'id' => 64,
                'code' => 'R9-09202024-MIC-1114',
                'information' => NULL,
                'sample_id' => 528,
                'user_id' => 16,
                'created_at' => '2024-09-20 23:06:18',
                'updated_at' => '2024-09-20 23:06:18',
            ),
            64 => 
            array (
                'id' => 65,
                'code' => 'R9-09202024-MIC-1115',
                'information' => NULL,
                'sample_id' => 529,
                'user_id' => 16,
                'created_at' => '2024-09-20 23:10:23',
                'updated_at' => '2024-09-20 23:10:23',
            ),
            65 => 
            array (
                'id' => 66,
                'code' => 'R9-09202024-MIC-1116',
                'information' => NULL,
                'sample_id' => 530,
                'user_id' => 16,
                'created_at' => '2024-09-20 23:10:41',
                'updated_at' => '2024-09-20 23:10:41',
            ),
            66 => 
            array (
                'id' => 67,
                'code' => 'R9-09202024-MIC-1117',
                'information' => NULL,
                'sample_id' => 531,
                'user_id' => 16,
                'created_at' => '2024-09-20 23:11:02',
                'updated_at' => '2024-09-20 23:11:02',
            ),
            67 => 
            array (
                'id' => 68,
                'code' => 'R9-09242024-CHE-0977',
                'information' => NULL,
                'sample_id' => 514,
                'user_id' => 6,
                'created_at' => '2024-09-24 17:14:58',
                'updated_at' => '2024-09-24 17:14:58',
            ),
            68 => 
            array (
                'id' => 69,
                'code' => 'R9-09242024-CHE-0978',
                'information' => NULL,
                'sample_id' => 515,
                'user_id' => 6,
                'created_at' => '2024-09-24 17:15:39',
                'updated_at' => '2024-09-24 17:15:39',
            ),
            69 => 
            array (
                'id' => 70,
                'code' => 'R9-09242024-CHE-0979',
                'information' => NULL,
                'sample_id' => 516,
                'user_id' => 6,
                'created_at' => '2024-09-24 17:15:57',
                'updated_at' => '2024-09-24 17:15:57',
            ),
            70 => 
            array (
                'id' => 71,
                'code' => 'R9-09242024-CHE-0980',
                'information' => NULL,
                'sample_id' => 517,
                'user_id' => 6,
                'created_at' => '2024-09-24 17:16:24',
                'updated_at' => '2024-09-24 17:16:24',
            ),
            71 => 
            array (
                'id' => 72,
                'code' => 'R9-09242024-CHE-0981',
                'information' => NULL,
                'sample_id' => 524,
                'user_id' => 6,
                'created_at' => '2024-09-24 17:17:01',
                'updated_at' => '2024-09-24 17:17:01',
            ),
            72 => 
            array (
                'id' => 73,
                'code' => 'R9-09242024-CHE-0982',
                'information' => NULL,
                'sample_id' => 525,
                'user_id' => 6,
                'created_at' => '2024-09-24 17:17:33',
                'updated_at' => '2024-09-24 17:17:33',
            ),
            73 => 
            array (
                'id' => 74,
                'code' => 'R9-09242024-MET-0966',
                'information' => NULL,
                'sample_id' => 627,
                'user_id' => 13,
                'created_at' => '2024-09-24 21:13:10',
                'updated_at' => '2024-09-24 21:13:10',
            ),
            74 => 
            array (
                'id' => 75,
                'code' => 'R9-09242024-CHE-0983',
                'information' => NULL,
                'sample_id' => 556,
                'user_id' => 6,
                'created_at' => '2024-09-24 21:44:35',
                'updated_at' => '2024-09-24 21:44:35',
            ),
            75 => 
            array (
                'id' => 76,
                'code' => 'R9-09242024-CHE-0984',
                'information' => NULL,
                'sample_id' => 557,
                'user_id' => 6,
                'created_at' => '2024-09-24 21:45:03',
                'updated_at' => '2024-09-24 21:45:03',
            ),
            76 => 
            array (
                'id' => 77,
                'code' => 'R9-09242024-CHE-0985',
                'information' => NULL,
                'sample_id' => 558,
                'user_id' => 6,
                'created_at' => '2024-09-24 21:45:21',
                'updated_at' => '2024-09-24 21:45:21',
            ),
            77 => 
            array (
                'id' => 78,
                'code' => 'R9-09242024-CHE-0986',
                'information' => NULL,
                'sample_id' => 559,
                'user_id' => 6,
                'created_at' => '2024-09-24 21:45:45',
                'updated_at' => '2024-09-24 21:45:45',
            ),
            78 => 
            array (
                'id' => 79,
                'code' => 'R9-09242024-CHE-0987',
                'information' => NULL,
                'sample_id' => 560,
                'user_id' => 6,
                'created_at' => '2024-09-24 21:46:03',
                'updated_at' => '2024-09-24 21:46:03',
            ),
            79 => 
            array (
                'id' => 80,
                'code' => 'R9-09242024-CHE-0988',
                'information' => NULL,
                'sample_id' => 538,
                'user_id' => 6,
                'created_at' => '2024-09-24 21:53:12',
                'updated_at' => '2024-09-24 21:53:12',
            ),
            80 => 
            array (
                'id' => 81,
                'code' => 'R9-09242024-CHE-0989',
                'information' => NULL,
                'sample_id' => 595,
                'user_id' => 6,
                'created_at' => '2024-09-24 21:55:06',
                'updated_at' => '2024-09-24 21:55:06',
            ),
            81 => 
            array (
                'id' => 82,
                'code' => 'R9-09242024-CHE-0990',
                'information' => NULL,
                'sample_id' => 566,
                'user_id' => 6,
                'created_at' => '2024-09-24 21:56:39',
                'updated_at' => '2024-09-24 21:56:39',
            ),
            82 => 
            array (
                'id' => 83,
                'code' => 'R9-09242024-CHE-0991',
                'information' => NULL,
                'sample_id' => 567,
                'user_id' => 6,
                'created_at' => '2024-09-24 21:57:57',
                'updated_at' => '2024-09-24 21:57:57',
            ),
            83 => 
            array (
                'id' => 84,
                'code' => 'R9-09242024-CHE-0992',
                'information' => NULL,
                'sample_id' => 568,
                'user_id' => 6,
                'created_at' => '2024-09-24 21:58:54',
                'updated_at' => '2024-09-24 21:58:54',
            ),
            84 => 
            array (
                'id' => 85,
                'code' => 'R9-09252024-MET-0967',
                'information' => NULL,
                'sample_id' => 652,
                'user_id' => 13,
                'created_at' => '2024-09-25 21:16:42',
                'updated_at' => '2024-09-25 21:16:42',
            ),
            85 => 
            array (
                'id' => 86,
                'code' => 'R9-09252024-MET-0968',
                'information' => NULL,
                'sample_id' => 664,
                'user_id' => 13,
                'created_at' => '2024-09-25 22:36:07',
                'updated_at' => '2024-09-25 22:36:07',
            ),
            86 => 
            array (
                'id' => 87,
                'code' => 'R9-09262024-MET-0969',
                'information' => NULL,
                'sample_id' => 669,
                'user_id' => 13,
                'created_at' => '2024-09-26 18:35:16',
                'updated_at' => '2024-09-26 18:35:16',
            ),
            87 => 
            array (
                'id' => 88,
                'code' => 'R9-09262024-MIC-1118',
                'information' => NULL,
                'sample_id' => 532,
                'user_id' => 16,
                'created_at' => '2024-09-26 21:20:37',
                'updated_at' => '2024-09-26 21:20:37',
            ),
            88 => 
            array (
                'id' => 89,
                'code' => 'R9-09262024-MIC-1119',
                'information' => NULL,
                'sample_id' => 533,
                'user_id' => 16,
                'created_at' => '2024-09-26 21:21:13',
                'updated_at' => '2024-09-26 21:21:13',
            ),
            89 => 
            array (
                'id' => 90,
                'code' => 'R9-09262024-MIC-1120',
                'information' => NULL,
                'sample_id' => 534,
                'user_id' => 16,
                'created_at' => '2024-09-26 21:21:57',
                'updated_at' => '2024-09-26 21:21:57',
            ),
            90 => 
            array (
                'id' => 91,
                'code' => 'R9-09262024-MIC-1121',
                'information' => NULL,
                'sample_id' => 535,
                'user_id' => 16,
                'created_at' => '2024-09-26 21:22:18',
                'updated_at' => '2024-09-26 21:22:18',
            ),
            91 => 
            array (
                'id' => 92,
                'code' => 'R9-09262024-MIC-1122',
                'information' => NULL,
                'sample_id' => 537,
                'user_id' => 16,
                'created_at' => '2024-09-26 21:22:51',
                'updated_at' => '2024-09-26 21:22:51',
            ),
            92 => 
            array (
                'id' => 93,
                'code' => 'R9-09262024-MIC-1123',
                'information' => NULL,
                'sample_id' => 539,
                'user_id' => 16,
                'created_at' => '2024-09-26 21:25:37',
                'updated_at' => '2024-09-26 21:25:37',
            ),
            93 => 
            array (
                'id' => 94,
                'code' => 'R9-09262024-MIC-1124',
                'information' => NULL,
                'sample_id' => 540,
                'user_id' => 16,
                'created_at' => '2024-09-26 21:25:57',
                'updated_at' => '2024-09-26 21:25:57',
            ),
            94 => 
            array (
                'id' => 95,
                'code' => 'R9-09262024-MIC-1125',
                'information' => NULL,
                'sample_id' => 615,
                'user_id' => 16,
                'created_at' => '2024-09-26 21:27:01',
                'updated_at' => '2024-09-26 21:27:01',
            ),
            95 => 
            array (
                'id' => 96,
                'code' => 'R9-09272024-CHE-0993',
                'information' => NULL,
                'sample_id' => 260,
                'user_id' => 8,
                'created_at' => '2024-09-27 17:16:05',
                'updated_at' => '2024-09-27 17:16:05',
            ),
            96 => 
            array (
                'id' => 97,
                'code' => 'R9-09272024-CHE-0994',
                'information' => NULL,
                'sample_id' => 266,
                'user_id' => 8,
                'created_at' => '2024-09-27 17:16:55',
                'updated_at' => '2024-09-27 17:16:55',
            ),
            97 => 
            array (
                'id' => 98,
                'code' => 'R9-09272024-CHE-0995',
                'information' => NULL,
                'sample_id' => 269,
                'user_id' => 8,
                'created_at' => '2024-09-27 17:20:04',
                'updated_at' => '2024-09-27 17:20:04',
            ),
            98 => 
            array (
                'id' => 99,
                'code' => 'R9-09272024-MET-0970',
                'information' => NULL,
                'sample_id' => 703,
                'user_id' => 13,
                'created_at' => '2024-09-27 18:16:31',
                'updated_at' => '2024-09-27 18:16:31',
            ),
            99 => 
            array (
                'id' => 100,
                'code' => 'R9-09302024-MIC-1126',
                'information' => NULL,
                'sample_id' => 620,
                'user_id' => 16,
                'created_at' => '2024-09-30 18:01:13',
                'updated_at' => '2024-09-30 18:01:13',
            ),
            100 => 
            array (
                'id' => 101,
                'code' => 'R9-09302024-MIC-1127',
                'information' => NULL,
                'sample_id' => 621,
                'user_id' => 16,
                'created_at' => '2024-09-30 18:01:47',
                'updated_at' => '2024-09-30 18:01:47',
            ),
            101 => 
            array (
                'id' => 102,
                'code' => 'R9-09302024-CHE-0996',
                'information' => NULL,
                'sample_id' => 415,
                'user_id' => 8,
                'created_at' => '2024-09-30 19:57:44',
                'updated_at' => '2024-09-30 19:57:44',
            ),
            102 => 
            array (
                'id' => 103,
                'code' => 'R9-09302024-CHE-0997',
                'information' => NULL,
                'sample_id' => 455,
                'user_id' => 8,
                'created_at' => '2024-09-30 19:58:58',
                'updated_at' => '2024-09-30 19:58:58',
            ),
            103 => 
            array (
                'id' => 104,
                'code' => 'R9-09302024-CHE-0998',
                'information' => NULL,
                'sample_id' => 456,
                'user_id' => 8,
                'created_at' => '2024-09-30 19:59:37',
                'updated_at' => '2024-09-30 19:59:37',
            ),
            104 => 
            array (
                'id' => 105,
                'code' => 'R9-09302024-CHE-0999',
                'information' => NULL,
                'sample_id' => 653,
                'user_id' => 6,
                'created_at' => '2024-10-01 00:04:25',
                'updated_at' => '2024-10-01 00:04:25',
            ),
            105 => 
            array (
                'id' => 107,
                'code' => 'R9-10012024-MIC-1128',
                'information' => NULL,
                'sample_id' => 616,
                'user_id' => 16,
                'created_at' => '2024-10-01 17:11:00',
                'updated_at' => '2024-10-01 17:11:00',
            ),
            106 => 
            array (
                'id' => 108,
                'code' => 'R9-10012024-MIC-1129',
                'information' => NULL,
                'sample_id' => 592,
                'user_id' => 16,
                'created_at' => '2024-10-01 17:57:41',
                'updated_at' => '2024-10-01 17:57:41',
            ),
            107 => 
            array (
                'id' => 109,
                'code' => 'R9-10012024-MIC-1130',
                'information' => NULL,
                'sample_id' => 593,
                'user_id' => 16,
                'created_at' => '2024-10-01 17:58:09',
                'updated_at' => '2024-10-01 17:58:09',
            ),
            108 => 
            array (
                'id' => 110,
                'code' => 'R9-10012024-MIC-1131',
                'information' => NULL,
                'sample_id' => 594,
                'user_id' => 16,
                'created_at' => '2024-10-01 17:58:18',
                'updated_at' => '2024-10-01 17:58:18',
            ),
            109 => 
            array (
                'id' => 111,
                'code' => 'R9-10012024-MET-0971',
                'information' => NULL,
                'sample_id' => 741,
                'user_id' => 13,
                'created_at' => '2024-10-01 18:57:03',
                'updated_at' => '2024-10-01 18:57:03',
            ),
            110 => 
            array (
                'id' => 112,
                'code' => 'R9-10012024-MET-0972',
                'information' => NULL,
                'sample_id' => 742,
                'user_id' => 13,
                'created_at' => '2024-10-01 18:57:28',
                'updated_at' => '2024-10-01 18:57:28',
            ),
            111 => 
            array (
                'id' => 114,
                'code' => 'R9-10012024-CHE-1000',
                'information' => NULL,
                'sample_id' => 503,
                'user_id' => 8,
                'created_at' => '2024-10-02 07:23:52',
                'updated_at' => '2024-10-02 07:23:52',
            ),
            112 => 
            array (
                'id' => 115,
                'code' => 'R9-10012024-CHE-1001',
                'information' => NULL,
                'sample_id' => 504,
                'user_id' => 8,
                'created_at' => '2024-10-02 07:24:08',
                'updated_at' => '2024-10-02 07:24:08',
            ),
            113 => 
            array (
                'id' => 116,
                'code' => 'R9-10012024-CHE-1002',
                'information' => NULL,
                'sample_id' => 505,
                'user_id' => 8,
                'created_at' => '2024-10-02 07:24:18',
                'updated_at' => '2024-10-02 07:24:18',
            ),
            114 => 
            array (
                'id' => 117,
                'code' => 'R9-10022024-CHE-1003',
                'information' => NULL,
                'sample_id' => 618,
                'user_id' => 8,
                'created_at' => '2024-10-02 16:19:00',
                'updated_at' => '2024-10-02 16:19:00',
            ),
            115 => 
            array (
                'id' => 118,
                'code' => 'R9-10022024-MIC-1132',
                'information' => NULL,
                'sample_id' => 622,
                'user_id' => 16,
                'created_at' => '2024-10-02 17:47:12',
                'updated_at' => '2024-10-02 17:47:12',
            ),
            116 => 
            array (
                'id' => 119,
                'code' => 'R9-10022024-MIC-1133',
                'information' => NULL,
                'sample_id' => 623,
                'user_id' => 16,
                'created_at' => '2024-10-02 17:47:40',
                'updated_at' => '2024-10-02 17:47:40',
            ),
            117 => 
            array (
                'id' => 120,
                'code' => 'R9-10022024-MET-0973',
                'information' => NULL,
                'sample_id' => 506,
                'user_id' => 13,
                'created_at' => '2024-10-02 17:53:53',
                'updated_at' => '2024-10-02 17:53:53',
            ),
            118 => 
            array (
                'id' => 121,
                'code' => 'R9-10022024-MET-0974',
                'information' => NULL,
                'sample_id' => 647,
                'user_id' => 13,
                'created_at' => '2024-10-02 17:57:07',
                'updated_at' => '2024-10-02 17:57:07',
            ),
            119 => 
            array (
                'id' => 122,
                'code' => 'R9-10022024-MIC-1134',
                'information' => NULL,
                'sample_id' => 624,
                'user_id' => 16,
                'created_at' => '2024-10-02 18:05:28',
                'updated_at' => '2024-10-02 18:05:28',
            ),
            120 => 
            array (
                'id' => 123,
                'code' => 'R9-10022024-MIC-1135',
                'information' => NULL,
                'sample_id' => 625,
                'user_id' => 16,
                'created_at' => '2024-10-02 18:05:58',
                'updated_at' => '2024-10-02 18:05:58',
            ),
            121 => 
            array (
                'id' => 124,
                'code' => 'R9-10022024-MIC-1136',
                'information' => NULL,
                'sample_id' => 626,
                'user_id' => 16,
                'created_at' => '2024-10-02 18:06:12',
                'updated_at' => '2024-10-02 18:06:12',
            ),
            122 => 
            array (
                'id' => 125,
                'code' => 'R9-10022024-CHE-1004',
                'information' => NULL,
                'sample_id' => 704,
                'user_id' => 8,
                'created_at' => '2024-10-02 18:10:03',
                'updated_at' => '2024-10-02 18:10:03',
            ),
            123 => 
            array (
                'id' => 126,
                'code' => 'R9-10022024-CHE-1005',
                'information' => NULL,
                'sample_id' => 705,
                'user_id' => 8,
                'created_at' => '2024-10-02 18:10:28',
                'updated_at' => '2024-10-02 18:10:28',
            ),
            124 => 
            array (
                'id' => 127,
                'code' => 'R9-10022024-CHE-1006',
                'information' => NULL,
                'sample_id' => 706,
                'user_id' => 8,
                'created_at' => '2024-10-02 18:10:38',
                'updated_at' => '2024-10-02 18:10:38',
            ),
            125 => 
            array (
                'id' => 128,
                'code' => 'R9-10022024-MIC-1137',
                'information' => NULL,
                'sample_id' => 628,
                'user_id' => 16,
                'created_at' => '2024-10-02 18:21:58',
                'updated_at' => '2024-10-02 18:21:58',
            ),
            126 => 
            array (
                'id' => 129,
                'code' => 'R9-10022024-MIC-1138',
                'information' => NULL,
                'sample_id' => 629,
                'user_id' => 16,
                'created_at' => '2024-10-02 18:22:45',
                'updated_at' => '2024-10-02 18:22:45',
            ),
            127 => 
            array (
                'id' => 130,
                'code' => 'R9-10022024-MIC-1139',
                'information' => NULL,
                'sample_id' => 630,
                'user_id' => 16,
                'created_at' => '2024-10-02 18:22:56',
                'updated_at' => '2024-10-02 18:22:56',
            ),
            128 => 
            array (
                'id' => 131,
                'code' => 'R9-10022024-MIC-1140',
                'information' => NULL,
                'sample_id' => 631,
                'user_id' => 16,
                'created_at' => '2024-10-02 18:23:19',
                'updated_at' => '2024-10-02 18:23:19',
            ),
            129 => 
            array (
                'id' => 132,
                'code' => 'R9-10022024-MIC-1141',
                'information' => NULL,
                'sample_id' => 632,
                'user_id' => 16,
                'created_at' => '2024-10-02 18:23:29',
                'updated_at' => '2024-10-02 18:23:29',
            ),
            130 => 
            array (
                'id' => 133,
                'code' => 'R9-10022024-MIC-1142',
                'information' => NULL,
                'sample_id' => 633,
                'user_id' => 16,
                'created_at' => '2024-10-02 20:33:19',
                'updated_at' => '2024-10-02 20:33:19',
            ),
            131 => 
            array (
                'id' => 134,
                'code' => 'R9-10022024-MIC-1143',
                'information' => NULL,
                'sample_id' => 637,
                'user_id' => 16,
                'created_at' => '2024-10-02 20:49:36',
                'updated_at' => '2024-10-02 20:49:36',
            ),
            132 => 
            array (
                'id' => 135,
                'code' => 'R9-10022024-MIC-1144',
                'information' => NULL,
                'sample_id' => 638,
                'user_id' => 16,
                'created_at' => '2024-10-02 20:50:00',
                'updated_at' => '2024-10-02 20:50:00',
            ),
            133 => 
            array (
                'id' => 136,
                'code' => 'R9-10032024-CHE-1007',
                'information' => NULL,
                'sample_id' => 746,
                'user_id' => 8,
                'created_at' => '2024-10-03 15:18:28',
                'updated_at' => '2024-10-03 15:18:28',
            ),
            134 => 
            array (
                'id' => 137,
                'code' => 'R9-10032024-MIC-1145',
                'information' => NULL,
                'sample_id' => 521,
                'user_id' => 16,
                'created_at' => '2024-10-03 16:57:45',
                'updated_at' => '2024-10-03 16:57:45',
            ),
            135 => 
            array (
                'id' => 138,
                'code' => 'R9-10032024-MIC-1146',
                'information' => NULL,
                'sample_id' => 656,
                'user_id' => 16,
                'created_at' => '2024-10-03 17:17:29',
                'updated_at' => '2024-10-03 17:17:29',
            ),
            136 => 
            array (
                'id' => 139,
                'code' => 'R9-10032024-MIC-1147',
                'information' => NULL,
                'sample_id' => 657,
                'user_id' => 16,
                'created_at' => '2024-10-03 17:21:56',
                'updated_at' => '2024-10-03 17:21:56',
            ),
            137 => 
            array (
                'id' => 140,
                'code' => 'R9-10032024-MIC-1148',
                'information' => NULL,
                'sample_id' => 658,
                'user_id' => 16,
                'created_at' => '2024-10-03 17:22:48',
                'updated_at' => '2024-10-03 17:22:48',
            ),
            138 => 
            array (
                'id' => 141,
                'code' => 'R9-10032024-MIC-1149',
                'information' => NULL,
                'sample_id' => 659,
                'user_id' => 16,
                'created_at' => '2024-10-03 17:23:00',
                'updated_at' => '2024-10-03 17:23:00',
            ),
            139 => 
            array (
                'id' => 142,
                'code' => 'R9-10032024-MIC-1150',
                'information' => NULL,
                'sample_id' => 660,
                'user_id' => 16,
                'created_at' => '2024-10-03 17:23:15',
                'updated_at' => '2024-10-03 17:23:15',
            ),
            140 => 
            array (
                'id' => 143,
                'code' => 'R9-10032024-MIC-1151',
                'information' => NULL,
                'sample_id' => 661,
                'user_id' => 16,
                'created_at' => '2024-10-03 17:23:34',
                'updated_at' => '2024-10-03 17:23:34',
            ),
            141 => 
            array (
                'id' => 144,
                'code' => 'R9-10032024-MIC-1152',
                'information' => NULL,
                'sample_id' => 662,
                'user_id' => 16,
                'created_at' => '2024-10-03 17:23:47',
                'updated_at' => '2024-10-03 17:23:47',
            ),
            142 => 
            array (
                'id' => 145,
                'code' => 'R9-10032024-MIC-1153',
                'information' => NULL,
                'sample_id' => 663,
                'user_id' => 16,
                'created_at' => '2024-10-03 17:24:06',
                'updated_at' => '2024-10-03 17:24:06',
            ),
            143 => 
            array (
                'id' => 146,
                'code' => 'R9-10032024-MIC-1154',
                'information' => NULL,
                'sample_id' => 666,
                'user_id' => 16,
                'created_at' => '2024-10-03 18:03:51',
                'updated_at' => '2024-10-03 18:03:51',
            ),
            144 => 
            array (
                'id' => 147,
                'code' => 'R9-10032024-MIC-1155',
                'information' => NULL,
                'sample_id' => 667,
                'user_id' => 16,
                'created_at' => '2024-10-03 18:04:15',
                'updated_at' => '2024-10-03 18:04:15',
            ),
            145 => 
            array (
                'id' => 148,
                'code' => 'R9-10032024-MIC-1156',
                'information' => NULL,
                'sample_id' => 668,
                'user_id' => 16,
                'created_at' => '2024-10-03 18:04:27',
                'updated_at' => '2024-10-03 18:04:27',
            ),
            146 => 
            array (
                'id' => 149,
                'code' => 'R9-10032024-MET-0975',
                'information' => NULL,
                'sample_id' => 772,
                'user_id' => 13,
                'created_at' => '2024-10-03 18:10:45',
                'updated_at' => '2024-10-03 18:10:45',
            ),
            147 => 
            array (
                'id' => 150,
                'code' => 'R9-10032024-MET-0976',
                'information' => NULL,
                'sample_id' => 645,
                'user_id' => 13,
                'created_at' => '2024-10-03 18:47:53',
                'updated_at' => '2024-10-03 18:47:53',
            ),
            148 => 
            array (
                'id' => 151,
                'code' => 'R9-10032024-MET-0977',
                'information' => NULL,
                'sample_id' => 702,
                'user_id' => 13,
                'created_at' => '2024-10-03 19:25:37',
                'updated_at' => '2024-10-03 19:25:37',
            ),
            149 => 
            array (
                'id' => 152,
                'code' => 'R9-10032024-MET-0978',
                'information' => NULL,
                'sample_id' => 570,
                'user_id' => 12,
                'created_at' => '2024-10-03 21:35:03',
                'updated_at' => '2024-10-03 21:35:03',
            ),
            150 => 
            array (
                'id' => 153,
                'code' => 'R9-10032024-MET-0979',
                'information' => NULL,
                'sample_id' => 571,
                'user_id' => 12,
                'created_at' => '2024-10-03 21:40:18',
                'updated_at' => '2024-10-03 21:40:18',
            ),
            151 => 
            array (
                'id' => 154,
                'code' => 'R9-10032024-MET-0980',
                'information' => NULL,
                'sample_id' => 572,
                'user_id' => 12,
                'created_at' => '2024-10-03 21:40:27',
                'updated_at' => '2024-10-03 21:40:27',
            ),
            152 => 
            array (
                'id' => 155,
                'code' => 'R9-10032024-MET-0981',
                'information' => NULL,
                'sample_id' => 573,
                'user_id' => 12,
                'created_at' => '2024-10-03 21:40:32',
                'updated_at' => '2024-10-03 21:40:32',
            ),
            153 => 
            array (
                'id' => 156,
                'code' => 'R9-10032024-MET-0982',
                'information' => NULL,
                'sample_id' => 574,
                'user_id' => 12,
                'created_at' => '2024-10-03 21:40:38',
                'updated_at' => '2024-10-03 21:40:38',
            ),
            154 => 
            array (
                'id' => 157,
                'code' => 'R9-10032024-MET-0983',
                'information' => NULL,
                'sample_id' => 575,
                'user_id' => 12,
                'created_at' => '2024-10-03 21:40:45',
                'updated_at' => '2024-10-03 21:40:45',
            ),
            155 => 
            array (
                'id' => 158,
                'code' => 'R9-10032024-MET-0984',
                'information' => NULL,
                'sample_id' => 576,
                'user_id' => 12,
                'created_at' => '2024-10-03 21:40:53',
                'updated_at' => '2024-10-03 21:40:53',
            ),
            156 => 
            array (
                'id' => 159,
                'code' => 'R9-10032024-MET-0985',
                'information' => NULL,
                'sample_id' => 577,
                'user_id' => 12,
                'created_at' => '2024-10-03 21:40:56',
                'updated_at' => '2024-10-03 21:40:56',
            ),
            157 => 
            array (
                'id' => 160,
                'code' => 'R9-10032024-MET-0986',
                'information' => NULL,
                'sample_id' => 578,
                'user_id' => 12,
                'created_at' => '2024-10-03 21:41:00',
                'updated_at' => '2024-10-03 21:41:00',
            ),
            158 => 
            array (
                'id' => 161,
                'code' => 'R9-10032024-MET-0987',
                'information' => NULL,
                'sample_id' => 640,
                'user_id' => 12,
                'created_at' => '2024-10-03 21:52:28',
                'updated_at' => '2024-10-03 21:52:28',
            ),
            159 => 
            array (
                'id' => 162,
                'code' => 'R9-10032024-MET-0988',
                'information' => NULL,
                'sample_id' => 643,
                'user_id' => 12,
                'created_at' => '2024-10-03 21:53:10',
                'updated_at' => '2024-10-03 21:53:10',
            ),
            160 => 
            array (
                'id' => 163,
                'code' => 'R9-10032024-MET-0989',
                'information' => NULL,
                'sample_id' => 644,
                'user_id' => 12,
                'created_at' => '2024-10-03 21:53:16',
                'updated_at' => '2024-10-03 21:53:16',
            ),
            161 => 
            array (
                'id' => 164,
                'code' => 'R9-10042024-MET-0990',
                'information' => NULL,
                'sample_id' => 788,
                'user_id' => 13,
                'created_at' => '2024-10-04 18:52:54',
                'updated_at' => '2024-10-04 18:52:54',
            ),
            162 => 
            array (
                'id' => 165,
                'code' => 'R9-10042024-CHE-1008',
                'information' => NULL,
                'sample_id' => 701,
                'user_id' => 8,
                'created_at' => '2024-10-04 21:07:33',
                'updated_at' => '2024-10-04 21:07:33',
            ),
            163 => 
            array (
                'id' => 166,
                'code' => 'R9-10042024-MIC-1157',
                'information' => NULL,
                'sample_id' => 430,
                'user_id' => 16,
                'created_at' => '2024-10-05 00:02:26',
                'updated_at' => '2024-10-05 00:02:26',
            ),
            164 => 
            array (
                'id' => 167,
                'code' => 'R9-10042024-MIC-1158',
                'information' => NULL,
                'sample_id' => 431,
                'user_id' => 16,
                'created_at' => '2024-10-05 00:02:46',
                'updated_at' => '2024-10-05 00:02:46',
            ),
            165 => 
            array (
                'id' => 168,
                'code' => 'R9-10042024-MIC-1159',
                'information' => NULL,
                'sample_id' => 432,
                'user_id' => 16,
                'created_at' => '2024-10-05 00:02:59',
                'updated_at' => '2024-10-05 00:02:59',
            ),
            166 => 
            array (
                'id' => 169,
                'code' => 'R9-10042024-MIC-1160',
                'information' => NULL,
                'sample_id' => 617,
                'user_id' => 16,
                'created_at' => '2024-10-05 00:38:41',
                'updated_at' => '2024-10-05 00:38:41',
            ),
            167 => 
            array (
                'id' => 170,
                'code' => 'R9-10042024-MIC-1161',
                'information' => NULL,
                'sample_id' => 654,
                'user_id' => 16,
                'created_at' => '2024-10-05 00:54:11',
                'updated_at' => '2024-10-05 00:54:11',
            ),
            168 => 
            array (
                'id' => 171,
                'code' => 'R9-10072024-CHE-1009',
                'information' => NULL,
                'sample_id' => 406,
                'user_id' => 8,
                'created_at' => '2024-10-07 17:04:05',
                'updated_at' => '2024-10-07 17:04:05',
            ),
            169 => 
            array (
                'id' => 172,
                'code' => 'R9-10072024-CHE-1010',
                'information' => NULL,
                'sample_id' => 407,
                'user_id' => 8,
                'created_at' => '2024-10-07 17:04:35',
                'updated_at' => '2024-10-07 17:04:35',
            ),
            170 => 
            array (
                'id' => 173,
                'code' => 'R9-10072024-CHE-1011',
                'information' => NULL,
                'sample_id' => 408,
                'user_id' => 8,
                'created_at' => '2024-10-07 17:04:49',
                'updated_at' => '2024-10-07 17:04:49',
            ),
            171 => 
            array (
                'id' => 174,
                'code' => 'R9-10072024-CHE-1012',
                'information' => NULL,
                'sample_id' => 409,
                'user_id' => 7,
                'created_at' => '2024-10-07 19:13:44',
                'updated_at' => '2024-10-07 19:13:44',
            ),
            172 => 
            array (
                'id' => 175,
                'code' => 'R9-10072024-CHE-1013',
                'information' => NULL,
                'sample_id' => 410,
                'user_id' => 7,
                'created_at' => '2024-10-07 19:14:28',
                'updated_at' => '2024-10-07 19:14:28',
            ),
            173 => 
            array (
                'id' => 176,
                'code' => 'R9-10072024-CHE-1014',
                'information' => NULL,
                'sample_id' => 411,
                'user_id' => 7,
                'created_at' => '2024-10-07 19:14:40',
                'updated_at' => '2024-10-07 19:14:40',
            ),
            174 => 
            array (
                'id' => 177,
                'code' => 'R9-10072024-MIC-1162',
                'information' => NULL,
                'sample_id' => 707,
                'user_id' => 16,
                'created_at' => '2024-10-08 00:19:10',
                'updated_at' => '2024-10-08 00:19:10',
            ),
            175 => 
            array (
                'id' => 178,
                'code' => 'R9-10082024-CHE-1015',
                'information' => NULL,
                'sample_id' => 751,
                'user_id' => 8,
                'created_at' => '2024-10-08 17:18:47',
                'updated_at' => '2024-10-08 17:18:47',
            ),
            176 => 
            array (
                'id' => 179,
                'code' => 'R9-10082024-MIC-1163',
                'information' => NULL,
                'sample_id' => 740,
                'user_id' => 16,
                'created_at' => '2024-10-08 18:51:12',
                'updated_at' => '2024-10-08 18:51:12',
            ),
            177 => 
            array (
                'id' => 180,
                'code' => 'R9-10082024-MIC-1164',
                'information' => NULL,
                'sample_id' => 745,
                'user_id' => 16,
                'created_at' => '2024-10-08 19:49:19',
                'updated_at' => '2024-10-08 19:49:19',
            ),
            178 => 
            array (
                'id' => 181,
                'code' => 'R9-10082024-MIC-1165',
                'information' => NULL,
                'sample_id' => 747,
                'user_id' => 16,
                'created_at' => '2024-10-08 19:54:58',
                'updated_at' => '2024-10-08 19:54:58',
            ),
            179 => 
            array (
                'id' => 182,
                'code' => 'R9-10082024-MIC-1166',
                'information' => NULL,
                'sample_id' => 749,
                'user_id' => 16,
                'created_at' => '2024-10-08 20:04:25',
                'updated_at' => '2024-10-08 20:04:25',
            ),
            180 => 
            array (
                'id' => 183,
                'code' => 'R9-10082024-MIC-1167',
                'information' => NULL,
                'sample_id' => 708,
                'user_id' => 16,
                'created_at' => '2024-10-08 20:16:10',
                'updated_at' => '2024-10-08 20:16:10',
            ),
            181 => 
            array (
                'id' => 184,
                'code' => 'R9-10082024-MIC-1168',
                'information' => NULL,
                'sample_id' => 752,
                'user_id' => 16,
                'created_at' => '2024-10-08 20:49:31',
                'updated_at' => '2024-10-08 20:49:31',
            ),
            182 => 
            array (
                'id' => 185,
                'code' => 'R9-10082024-MIC-1169',
                'information' => NULL,
                'sample_id' => 753,
                'user_id' => 16,
                'created_at' => '2024-10-08 20:50:18',
                'updated_at' => '2024-10-08 20:50:18',
            ),
            183 => 
            array (
                'id' => 186,
                'code' => 'R9-10082024-MIC-1170',
                'information' => NULL,
                'sample_id' => 754,
                'user_id' => 16,
                'created_at' => '2024-10-08 20:50:37',
                'updated_at' => '2024-10-08 20:50:37',
            ),
            184 => 
            array (
                'id' => 187,
                'code' => 'R9-10082024-MIC-1171',
                'information' => NULL,
                'sample_id' => 755,
                'user_id' => 16,
                'created_at' => '2024-10-08 20:50:57',
                'updated_at' => '2024-10-08 20:50:57',
            ),
            185 => 
            array (
                'id' => 188,
                'code' => 'R9-10082024-MIC-1172',
                'information' => NULL,
                'sample_id' => 756,
                'user_id' => 16,
                'created_at' => '2024-10-08 20:51:08',
                'updated_at' => '2024-10-08 20:51:08',
            ),
            186 => 
            array (
                'id' => 189,
                'code' => 'R9-10082024-CHE-1016',
                'information' => NULL,
                'sample_id' => 773,
                'user_id' => 8,
                'created_at' => '2024-10-08 22:10:12',
                'updated_at' => '2024-10-08 22:10:12',
            ),
            187 => 
            array (
                'id' => 190,
                'code' => 'R9-10082024-MET-0991',
                'information' => NULL,
                'sample_id' => 836,
                'user_id' => 13,
                'created_at' => '2024-10-08 22:18:29',
                'updated_at' => '2024-10-08 22:18:29',
            ),
            188 => 
            array (
                'id' => 191,
                'code' => 'R9-10082024-CHE-1017',
                'information' => NULL,
                'sample_id' => 619,
                'user_id' => 8,
                'created_at' => '2024-10-08 23:54:24',
                'updated_at' => '2024-10-08 23:54:24',
            ),
            189 => 
            array (
                'id' => 192,
                'code' => 'R9-10092024-MET-0992',
                'information' => NULL,
                'sample_id' => 670,
                'user_id' => 12,
                'created_at' => '2024-10-09 17:17:21',
                'updated_at' => '2024-10-09 17:17:21',
            ),
            190 => 
            array (
                'id' => 193,
                'code' => 'R9-10092024-CHE-1023',
                'information' => NULL,
                'sample_id' => 599,
                'user_id' => 7,
                'created_at' => '2024-10-09 18:04:07',
                'updated_at' => '2024-10-09 18:04:07',
            ),
            191 => 
            array (
                'id' => 194,
                'code' => 'R9-10092024-CHE-1024',
                'information' => NULL,
                'sample_id' => 600,
                'user_id' => 7,
                'created_at' => '2024-10-09 18:07:33',
                'updated_at' => '2024-10-09 18:07:33',
            ),
            192 => 
            array (
                'id' => 195,
                'code' => 'R9-10092024-CHE-1025',
                'information' => NULL,
                'sample_id' => 601,
                'user_id' => 7,
                'created_at' => '2024-10-09 18:07:53',
                'updated_at' => '2024-10-09 18:07:53',
            ),
            193 => 
            array (
                'id' => 196,
                'code' => 'R9-10092024-CHE-1026',
                'information' => NULL,
                'sample_id' => 602,
                'user_id' => 7,
                'created_at' => '2024-10-09 18:08:36',
                'updated_at' => '2024-10-09 18:08:36',
            ),
            194 => 
            array (
                'id' => 198,
                'code' => 'R9-10092024-CHE-1027',
                'information' => NULL,
                'sample_id' => 603,
                'user_id' => 7,
                'created_at' => '2024-10-09 18:09:22',
                'updated_at' => '2024-10-09 18:09:22',
            ),
            195 => 
            array (
                'id' => 199,
                'code' => 'R9-10092024-CHE-1028',
                'information' => NULL,
                'sample_id' => 710,
                'user_id' => 8,
                'created_at' => '2024-10-09 18:11:29',
                'updated_at' => '2024-10-09 18:11:29',
            ),
            196 => 
            array (
                'id' => 200,
                'code' => 'R9-10092024-CHE-1029',
                'information' => NULL,
                'sample_id' => 748,
                'user_id' => 7,
                'created_at' => '2024-10-09 19:11:55',
                'updated_at' => '2024-10-09 19:11:55',
            ),
            197 => 
            array (
                'id' => 201,
                'code' => 'R9-10092024-MET-0993',
                'information' => NULL,
                'sample_id' => 849,
                'user_id' => 12,
                'created_at' => '2024-10-09 19:13:53',
                'updated_at' => '2024-10-09 19:13:53',
            ),
            198 => 
            array (
                'id' => 202,
                'code' => 'R9-10092024-CHE-1030',
                'information' => NULL,
                'sample_id' => 634,
                'user_id' => 8,
                'created_at' => '2024-10-09 21:02:48',
                'updated_at' => '2024-10-09 21:02:48',
            ),
            199 => 
            array (
                'id' => 203,
                'code' => 'R9-10092024-CHE-1031',
                'information' => NULL,
                'sample_id' => 690,
                'user_id' => 8,
                'created_at' => '2024-10-09 21:04:18',
                'updated_at' => '2024-10-09 21:04:18',
            ),
            200 => 
            array (
                'id' => 204,
                'code' => 'R9-10092024-CHE-1032',
                'information' => NULL,
                'sample_id' => 691,
                'user_id' => 8,
                'created_at' => '2024-10-09 21:04:41',
                'updated_at' => '2024-10-09 21:04:41',
            ),
            201 => 
            array (
                'id' => 205,
                'code' => 'R9-10092024-CHE-1033',
                'information' => NULL,
                'sample_id' => 692,
                'user_id' => 8,
                'created_at' => '2024-10-09 21:04:49',
                'updated_at' => '2024-10-09 21:04:49',
            ),
            202 => 
            array (
                'id' => 206,
                'code' => 'R9-10102024-CHE-1034',
                'information' => NULL,
                'sample_id' => 852,
                'user_id' => 2,
                'created_at' => '2024-10-10 20:43:30',
                'updated_at' => '2024-10-10 20:43:30',
            ),
            203 => 
            array (
                'id' => 207,
                'code' => 'R9-10102024-CHE-1035',
                'information' => NULL,
                'sample_id' => 794,
                'user_id' => 2,
                'created_at' => '2024-10-10 20:47:08',
                'updated_at' => '2024-10-10 20:47:08',
            ),
            204 => 
            array (
                'id' => 208,
                'code' => 'R9-10102024-MIC-1173',
                'information' => NULL,
                'sample_id' => 757,
                'user_id' => 16,
                'created_at' => '2024-10-10 20:48:39',
                'updated_at' => '2024-10-10 20:48:39',
            ),
            205 => 
            array (
                'id' => 209,
                'code' => 'R9-10102024-MIC-1174',
                'information' => NULL,
                'sample_id' => 758,
                'user_id' => 16,
                'created_at' => '2024-10-10 20:49:19',
                'updated_at' => '2024-10-10 20:49:19',
            ),
            206 => 
            array (
                'id' => 210,
                'code' => 'R9-10102024-MIC-1175',
                'information' => NULL,
                'sample_id' => 759,
                'user_id' => 16,
                'created_at' => '2024-10-10 20:49:31',
                'updated_at' => '2024-10-10 20:49:31',
            ),
            207 => 
            array (
                'id' => 211,
                'code' => 'R9-10102024-MIC-1176',
                'information' => NULL,
                'sample_id' => 760,
                'user_id' => 16,
                'created_at' => '2024-10-10 20:49:44',
                'updated_at' => '2024-10-10 20:49:44',
            ),
            208 => 
            array (
                'id' => 212,
                'code' => 'R9-10102024-MIC-1177',
                'information' => NULL,
                'sample_id' => 761,
                'user_id' => 16,
                'created_at' => '2024-10-10 20:49:56',
                'updated_at' => '2024-10-10 20:49:56',
            ),
            209 => 
            array (
                'id' => 213,
                'code' => 'R9-10102024-CHE-1036',
                'information' => NULL,
                'sample_id' => 787,
                'user_id' => 8,
                'created_at' => '2024-10-10 20:55:18',
                'updated_at' => '2024-10-10 20:55:18',
            ),
            210 => 
            array (
                'id' => 214,
                'code' => 'R9-10102024-MIC-1178',
                'information' => NULL,
                'sample_id' => 508,
                'user_id' => 16,
                'created_at' => '2024-10-11 00:16:39',
                'updated_at' => '2024-10-11 00:16:39',
            ),
            211 => 
            array (
                'id' => 215,
                'code' => 'R9-10102024-MIC-1179',
                'information' => NULL,
                'sample_id' => 509,
                'user_id' => 16,
                'created_at' => '2024-10-11 00:17:39',
                'updated_at' => '2024-10-11 00:17:39',
            ),
            212 => 
            array (
                'id' => 216,
                'code' => 'R9-10102024-MIC-1180',
                'information' => NULL,
                'sample_id' => 510,
                'user_id' => 16,
                'created_at' => '2024-10-11 00:17:50',
                'updated_at' => '2024-10-11 00:17:50',
            ),
            213 => 
            array (
                'id' => 217,
                'code' => 'R9-10102024-MIC-1181',
                'information' => NULL,
                'sample_id' => 511,
                'user_id' => 16,
                'created_at' => '2024-10-11 00:18:04',
                'updated_at' => '2024-10-11 00:18:04',
            ),
            214 => 
            array (
                'id' => 218,
                'code' => 'R9-10102024-MIC-1182',
                'information' => NULL,
                'sample_id' => 512,
                'user_id' => 16,
                'created_at' => '2024-10-11 00:18:18',
                'updated_at' => '2024-10-11 00:18:18',
            ),
            215 => 
            array (
                'id' => 219,
                'code' => 'R9-10102024-MIC-1183',
                'information' => NULL,
                'sample_id' => 513,
                'user_id' => 16,
                'created_at' => '2024-10-11 00:18:29',
                'updated_at' => '2024-10-11 00:18:29',
            ),
            216 => 
            array (
                'id' => 220,
                'code' => 'R9-10112024-CHE-1037',
                'information' => NULL,
                'sample_id' => 859,
                'user_id' => 7,
                'created_at' => '2024-10-11 16:32:31',
                'updated_at' => '2024-10-11 16:32:31',
            ),
            217 => 
            array (
                'id' => 221,
                'code' => 'R9-10112024-MET-0994',
                'information' => NULL,
                'sample_id' => 579,
                'user_id' => 12,
                'created_at' => '2024-10-11 17:19:02',
                'updated_at' => '2024-10-11 17:19:02',
            ),
            218 => 
            array (
                'id' => 222,
                'code' => 'R9-10112024-MET-0995',
                'information' => NULL,
                'sample_id' => 581,
                'user_id' => 12,
                'created_at' => '2024-10-11 17:29:02',
                'updated_at' => '2024-10-11 17:29:02',
            ),
            219 => 
            array (
                'id' => 223,
                'code' => 'R9-10112024-MET-0996',
                'information' => NULL,
                'sample_id' => 580,
                'user_id' => 12,
                'created_at' => '2024-10-11 17:34:55',
                'updated_at' => '2024-10-11 17:34:55',
            ),
            220 => 
            array (
                'id' => 224,
                'code' => 'R9-10112024-MET-0997',
                'information' => NULL,
                'sample_id' => 582,
                'user_id' => 12,
                'created_at' => '2024-10-11 17:35:12',
                'updated_at' => '2024-10-11 17:35:12',
            ),
            221 => 
            array (
                'id' => 225,
                'code' => 'R9-10112024-MET-0998',
                'information' => NULL,
                'sample_id' => 763,
                'user_id' => 12,
                'created_at' => '2024-10-11 17:38:44',
                'updated_at' => '2024-10-11 17:38:44',
            ),
            222 => 
            array (
                'id' => 226,
                'code' => 'R9-10112024-MET-0999',
                'information' => NULL,
                'sample_id' => 764,
                'user_id' => 12,
                'created_at' => '2024-10-11 17:38:55',
                'updated_at' => '2024-10-11 17:38:55',
            ),
            223 => 
            array (
                'id' => 227,
                'code' => 'R9-10112024-CHE-1038',
                'information' => NULL,
                'sample_id' => 806,
                'user_id' => 8,
                'created_at' => '2024-10-11 17:39:32',
                'updated_at' => '2024-10-11 17:39:32',
            ),
            224 => 
            array (
                'id' => 228,
                'code' => 'R9-10112024-MET-1000',
                'information' => NULL,
                'sample_id' => 765,
                'user_id' => 12,
                'created_at' => '2024-10-11 17:39:39',
                'updated_at' => '2024-10-11 17:39:39',
            ),
            225 => 
            array (
                'id' => 229,
                'code' => 'R9-10112024-CHE-1039',
                'information' => NULL,
                'sample_id' => 807,
                'user_id' => 8,
                'created_at' => '2024-10-11 17:39:53',
                'updated_at' => '2024-10-11 17:39:53',
            ),
            226 => 
            array (
                'id' => 230,
                'code' => 'R9-10112024-MET-1001',
                'information' => NULL,
                'sample_id' => 766,
                'user_id' => 12,
                'created_at' => '2024-10-11 17:40:09',
                'updated_at' => '2024-10-11 17:40:09',
            ),
            227 => 
            array (
                'id' => 231,
                'code' => 'R9-10142024-MET-1002',
                'information' => NULL,
                'sample_id' => 898,
                'user_id' => 13,
                'created_at' => '2024-10-14 20:29:38',
                'updated_at' => '2024-10-14 20:29:38',
            ),
            228 => 
            array (
                'id' => 232,
                'code' => 'R9-10142024-MIC-1184',
                'information' => NULL,
                'sample_id' => 786,
                'user_id' => 16,
                'created_at' => '2024-10-14 22:47:03',
                'updated_at' => '2024-10-14 22:47:03',
            ),
            229 => 
            array (
                'id' => 233,
                'code' => 'R9-10142024-MIC-1185',
                'information' => NULL,
                'sample_id' => 790,
                'user_id' => 16,
                'created_at' => '2024-10-14 22:59:00',
                'updated_at' => '2024-10-14 22:59:00',
            ),
            230 => 
            array (
                'id' => 234,
                'code' => 'R9-10142024-MIC-1186',
                'information' => NULL,
                'sample_id' => 791,
                'user_id' => 16,
                'created_at' => '2024-10-14 23:49:29',
                'updated_at' => '2024-10-14 23:49:29',
            ),
            231 => 
            array (
                'id' => 235,
                'code' => 'R9-10142024-MIC-1187',
                'information' => NULL,
                'sample_id' => 792,
                'user_id' => 16,
                'created_at' => '2024-10-15 00:02:41',
                'updated_at' => '2024-10-15 00:02:41',
            ),
            232 => 
            array (
                'id' => 236,
                'code' => 'R9-10142024-MIC-1188',
                'information' => NULL,
                'sample_id' => 805,
                'user_id' => 16,
                'created_at' => '2024-10-15 00:07:11',
                'updated_at' => '2024-10-15 00:07:11',
            ),
            233 => 
            array (
                'id' => 237,
                'code' => 'R9-10142024-MIC-1189',
                'information' => NULL,
                'sample_id' => 834,
                'user_id' => 16,
                'created_at' => '2024-10-15 00:21:16',
                'updated_at' => '2024-10-15 00:21:16',
            ),
            234 => 
            array (
                'id' => 238,
                'code' => 'R9-10142024-MIC-1190',
                'information' => NULL,
                'sample_id' => 850,
                'user_id' => 16,
                'created_at' => '2024-10-15 00:30:23',
                'updated_at' => '2024-10-15 00:30:23',
            ),
            235 => 
            array (
                'id' => 239,
                'code' => 'R9-10152024-CHE-1040',
                'information' => NULL,
                'sample_id' => 648,
                'user_id' => 8,
                'created_at' => '2024-10-16 06:59:14',
                'updated_at' => '2024-10-16 06:59:14',
            ),
            236 => 
            array (
                'id' => 240,
                'code' => 'R9-10152024-CHE-1041',
                'information' => NULL,
                'sample_id' => 649,
                'user_id' => 8,
                'created_at' => '2024-10-16 06:59:56',
                'updated_at' => '2024-10-16 06:59:56',
            ),
            237 => 
            array (
                'id' => 241,
                'code' => 'R9-10152024-CHE-1042',
                'information' => NULL,
                'sample_id' => 650,
                'user_id' => 8,
                'created_at' => '2024-10-16 07:00:22',
                'updated_at' => '2024-10-16 07:00:22',
            ),
            238 => 
            array (
                'id' => 242,
                'code' => 'R9-10152024-CHE-1043',
                'information' => NULL,
                'sample_id' => 651,
                'user_id' => 8,
                'created_at' => '2024-10-16 07:00:35',
                'updated_at' => '2024-10-16 07:00:35',
            ),
            239 => 
            array (
                'id' => 243,
                'code' => 'R9-10152024-CHE-1044',
                'information' => NULL,
                'sample_id' => 665,
                'user_id' => 8,
                'created_at' => '2024-10-16 07:07:33',
                'updated_at' => '2024-10-16 07:07:33',
            ),
            240 => 
            array (
                'id' => 244,
                'code' => 'R9-10152024-CHE-1045',
                'information' => NULL,
                'sample_id' => 750,
                'user_id' => 8,
                'created_at' => '2024-10-16 07:08:06',
                'updated_at' => '2024-10-16 07:08:06',
            ),
            241 => 
            array (
                'id' => 245,
                'code' => 'R9-10152024-CHE-1046',
                'information' => NULL,
                'sample_id' => 762,
                'user_id' => 8,
                'created_at' => '2024-10-16 07:08:47',
                'updated_at' => '2024-10-16 07:08:47',
            ),
            242 => 
            array (
                'id' => 246,
                'code' => 'R9-10162024-MET-1003',
                'information' => NULL,
                'sample_id' => 775,
                'user_id' => 12,
                'created_at' => '2024-10-16 21:27:51',
                'updated_at' => '2024-10-16 21:27:51',
            ),
            243 => 
            array (
                'id' => 247,
                'code' => 'R9-10162024-MET-1004',
                'information' => NULL,
                'sample_id' => 776,
                'user_id' => 12,
                'created_at' => '2024-10-16 21:28:32',
                'updated_at' => '2024-10-16 21:28:32',
            ),
            244 => 
            array (
                'id' => 248,
                'code' => 'R9-10162024-MET-1005',
                'information' => NULL,
                'sample_id' => 777,
                'user_id' => 12,
                'created_at' => '2024-10-16 21:28:56',
                'updated_at' => '2024-10-16 21:28:56',
            ),
            245 => 
            array (
                'id' => 249,
                'code' => 'R9-10162024-CHE-1047',
                'information' => NULL,
                'sample_id' => 743,
                'user_id' => 8,
                'created_at' => '2024-10-17 04:01:19',
                'updated_at' => '2024-10-17 04:01:19',
            ),
            246 => 
            array (
                'id' => 250,
                'code' => 'R9-10162024-CHE-1048',
                'information' => NULL,
                'sample_id' => 744,
                'user_id' => 8,
                'created_at' => '2024-10-17 04:01:27',
                'updated_at' => '2024-10-17 04:01:27',
            ),
            247 => 
            array (
                'id' => 251,
                'code' => 'R9-10162024-CHE-1049',
                'information' => NULL,
                'sample_id' => 789,
                'user_id' => 8,
                'created_at' => '2024-10-17 06:09:18',
                'updated_at' => '2024-10-17 06:09:18',
            ),
            248 => 
            array (
                'id' => 252,
                'code' => 'R9-10172024-CHE-1050',
                'information' => NULL,
                'sample_id' => 858,
                'user_id' => 8,
                'created_at' => '2024-10-17 16:33:32',
                'updated_at' => '2024-10-17 16:33:32',
            ),
            249 => 
            array (
                'id' => 253,
                'code' => 'R9-10172024-MET-1006',
                'information' => NULL,
                'sample_id' => 472,
                'user_id' => 12,
                'created_at' => '2024-10-17 17:31:41',
                'updated_at' => '2024-10-17 17:31:41',
            ),
            250 => 
            array (
                'id' => 254,
                'code' => 'R9-10172024-MET-1007',
                'information' => NULL,
                'sample_id' => 474,
                'user_id' => 12,
                'created_at' => '2024-10-17 17:33:13',
                'updated_at' => '2024-10-17 17:33:13',
            ),
            251 => 
            array (
                'id' => 255,
                'code' => 'R9-10172024-MET-1008',
                'information' => NULL,
                'sample_id' => 477,
                'user_id' => 12,
                'created_at' => '2024-10-17 17:34:58',
                'updated_at' => '2024-10-17 17:34:58',
            ),
            252 => 
            array (
                'id' => 256,
                'code' => 'R9-10172024-MET-1009',
                'information' => NULL,
                'sample_id' => 478,
                'user_id' => 12,
                'created_at' => '2024-10-17 17:42:54',
                'updated_at' => '2024-10-17 17:42:54',
            ),
            253 => 
            array (
                'id' => 257,
                'code' => 'R9-10172024-MET-1010',
                'information' => NULL,
                'sample_id' => 479,
                'user_id' => 12,
                'created_at' => '2024-10-17 17:43:44',
                'updated_at' => '2024-10-17 17:43:44',
            ),
            254 => 
            array (
                'id' => 258,
                'code' => 'R9-10172024-MET-1011',
                'information' => NULL,
                'sample_id' => 480,
                'user_id' => 12,
                'created_at' => '2024-10-17 17:44:13',
                'updated_at' => '2024-10-17 17:44:13',
            ),
            255 => 
            array (
                'id' => 259,
                'code' => 'R9-10172024-MET-1012',
                'information' => NULL,
                'sample_id' => 481,
                'user_id' => 12,
                'created_at' => '2024-10-17 17:44:58',
                'updated_at' => '2024-10-17 17:44:58',
            ),
            256 => 
            array (
                'id' => 260,
                'code' => 'R9-10172024-MET-1013',
                'information' => NULL,
                'sample_id' => 437,
                'user_id' => 12,
                'created_at' => '2024-10-17 18:29:51',
                'updated_at' => '2024-10-17 18:29:51',
            ),
            257 => 
            array (
                'id' => 261,
                'code' => 'R9-10172024-MET-1014',
                'information' => NULL,
                'sample_id' => 438,
                'user_id' => 12,
                'created_at' => '2024-10-17 18:30:31',
                'updated_at' => '2024-10-17 18:30:31',
            ),
            258 => 
            array (
                'id' => 262,
                'code' => 'R9-10172024-MET-1015',
                'information' => NULL,
                'sample_id' => 440,
                'user_id' => 12,
                'created_at' => '2024-10-17 18:31:13',
                'updated_at' => '2024-10-17 18:31:13',
            ),
            259 => 
            array (
                'id' => 263,
                'code' => 'R9-10172024-MET-1016',
                'information' => NULL,
                'sample_id' => 443,
                'user_id' => 12,
                'created_at' => '2024-10-17 18:32:13',
                'updated_at' => '2024-10-17 18:32:13',
            ),
            260 => 
            array (
                'id' => 264,
                'code' => 'R9-10172024-MET-1017',
                'information' => NULL,
                'sample_id' => 444,
                'user_id' => 12,
                'created_at' => '2024-10-17 18:33:02',
                'updated_at' => '2024-10-17 18:33:02',
            ),
            261 => 
            array (
                'id' => 265,
                'code' => 'R9-10172024-MET-1018',
                'information' => NULL,
                'sample_id' => 482,
                'user_id' => 12,
                'created_at' => '2024-10-17 18:38:51',
                'updated_at' => '2024-10-17 18:38:51',
            ),
            262 => 
            array (
                'id' => 266,
                'code' => 'R9-10172024-MET-1019',
                'information' => NULL,
                'sample_id' => 483,
                'user_id' => 12,
                'created_at' => '2024-10-17 18:39:14',
                'updated_at' => '2024-10-17 18:39:14',
            ),
            263 => 
            array (
                'id' => 267,
                'code' => 'R9-10172024-MET-1020',
                'information' => NULL,
                'sample_id' => 464,
                'user_id' => 12,
                'created_at' => '2024-10-17 18:44:36',
                'updated_at' => '2024-10-17 18:44:36',
            ),
            264 => 
            array (
                'id' => 268,
                'code' => 'R9-10172024-MET-1021',
                'information' => NULL,
                'sample_id' => 466,
                'user_id' => 12,
                'created_at' => '2024-10-17 18:45:34',
                'updated_at' => '2024-10-17 18:45:34',
            ),
            265 => 
            array (
                'id' => 269,
                'code' => 'R9-10172024-MET-1022',
                'information' => NULL,
                'sample_id' => 484,
                'user_id' => 12,
                'created_at' => '2024-10-17 18:46:43',
                'updated_at' => '2024-10-17 18:46:43',
            ),
            266 => 
            array (
                'id' => 270,
                'code' => 'R9-10172024-MET-1023',
                'information' => NULL,
                'sample_id' => 886,
                'user_id' => 12,
                'created_at' => '2024-10-18 00:10:37',
                'updated_at' => '2024-10-18 00:10:37',
            ),
            267 => 
            array (
                'id' => 271,
                'code' => 'R9-10172024-MET-1024',
                'information' => NULL,
                'sample_id' => 887,
                'user_id' => 12,
                'created_at' => '2024-10-18 00:16:55',
                'updated_at' => '2024-10-18 00:16:55',
            ),
            268 => 
            array (
                'id' => 272,
                'code' => 'R9-10172024-MET-1025',
                'information' => NULL,
                'sample_id' => 888,
                'user_id' => 12,
                'created_at' => '2024-10-18 00:17:58',
                'updated_at' => '2024-10-18 00:17:58',
            ),
            269 => 
            array (
                'id' => 273,
                'code' => 'R9-10172024-MET-1026',
                'information' => NULL,
                'sample_id' => 889,
                'user_id' => 12,
                'created_at' => '2024-10-18 00:18:41',
                'updated_at' => '2024-10-18 00:18:41',
            ),
            270 => 
            array (
                'id' => 274,
                'code' => 'R9-10172024-MET-1027',
                'information' => NULL,
                'sample_id' => 890,
                'user_id' => 12,
                'created_at' => '2024-10-18 00:19:25',
                'updated_at' => '2024-10-18 00:19:25',
            ),
            271 => 
            array (
                'id' => 275,
                'code' => 'R9-10172024-MET-1028',
                'information' => NULL,
                'sample_id' => 891,
                'user_id' => 12,
                'created_at' => '2024-10-18 00:20:48',
                'updated_at' => '2024-10-18 00:20:48',
            ),
            272 => 
            array (
                'id' => 276,
                'code' => 'R9-10172024-MET-1029',
                'information' => NULL,
                'sample_id' => 892,
                'user_id' => 12,
                'created_at' => '2024-10-18 00:21:29',
                'updated_at' => '2024-10-18 00:21:29',
            ),
            273 => 
            array (
                'id' => 277,
                'code' => 'R9-10172024-MET-1030',
                'information' => NULL,
                'sample_id' => 893,
                'user_id' => 12,
                'created_at' => '2024-10-18 00:22:05',
                'updated_at' => '2024-10-18 00:22:05',
            ),
            274 => 
            array (
                'id' => 278,
                'code' => 'R9-10172024-MET-1031',
                'information' => NULL,
                'sample_id' => 894,
                'user_id' => 12,
                'created_at' => '2024-10-18 00:22:57',
                'updated_at' => '2024-10-18 00:22:57',
            ),
            275 => 
            array (
                'id' => 279,
                'code' => 'R9-10172024-MET-1032',
                'information' => NULL,
                'sample_id' => 895,
                'user_id' => 12,
                'created_at' => '2024-10-18 00:23:32',
                'updated_at' => '2024-10-18 00:23:32',
            ),
            276 => 
            array (
                'id' => 280,
                'code' => 'R9-10172024-MET-1033',
                'information' => NULL,
                'sample_id' => 896,
                'user_id' => 12,
                'created_at' => '2024-10-18 00:24:09',
                'updated_at' => '2024-10-18 00:24:09',
            ),
            277 => 
            array (
                'id' => 281,
                'code' => 'R9-10172024-MET-1034',
                'information' => NULL,
                'sample_id' => 897,
                'user_id' => 12,
                'created_at' => '2024-10-18 00:24:56',
                'updated_at' => '2024-10-18 00:24:56',
            ),
            278 => 
            array (
                'id' => 282,
                'code' => 'R9-10182024-CHE-1051',
                'information' => NULL,
                'sample_id' => 899,
                'user_id' => 7,
                'created_at' => '2024-10-18 16:16:16',
                'updated_at' => '2024-10-18 16:16:16',
            ),
            279 => 
            array (
                'id' => 283,
                'code' => 'R9-10182024-MET-1035',
                'information' => NULL,
                'sample_id' => 563,
                'user_id' => 13,
                'created_at' => '2024-10-18 17:11:52',
                'updated_at' => '2024-10-18 17:11:52',
            ),
            280 => 
            array (
                'id' => 284,
                'code' => 'R9-10182024-MET-1036',
                'information' => NULL,
                'sample_id' => 564,
                'user_id' => 13,
                'created_at' => '2024-10-18 17:12:12',
                'updated_at' => '2024-10-18 17:12:12',
            ),
            281 => 
            array (
                'id' => 285,
                'code' => 'R9-10182024-MET-1037',
                'information' => NULL,
                'sample_id' => 565,
                'user_id' => 13,
                'created_at' => '2024-10-18 17:12:23',
                'updated_at' => '2024-10-18 17:12:23',
            ),
            282 => 
            array (
                'id' => 286,
                'code' => 'R9-10182024-CHE-1052',
                'information' => NULL,
                'sample_id' => 810,
                'user_id' => 8,
                'created_at' => '2024-10-18 18:09:23',
                'updated_at' => '2024-10-18 18:09:23',
            ),
            283 => 
            array (
                'id' => 287,
                'code' => 'R9-10182024-MET-1038',
                'information' => NULL,
                'sample_id' => 912,
                'user_id' => 13,
                'created_at' => '2024-10-18 18:28:51',
                'updated_at' => '2024-10-18 18:28:51',
            ),
            284 => 
            array (
                'id' => 288,
                'code' => 'R9-10182024-MET-1039',
                'information' => NULL,
                'sample_id' => 955,
                'user_id' => 13,
                'created_at' => '2024-10-19 00:07:03',
                'updated_at' => '2024-10-19 00:07:03',
            ),
            285 => 
            array (
                'id' => 289,
                'code' => 'R9-10182024-MET-1040',
                'information' => NULL,
                'sample_id' => 954,
                'user_id' => 13,
                'created_at' => '2024-10-19 00:07:41',
                'updated_at' => '2024-10-19 00:07:41',
            ),
            286 => 
            array (
                'id' => 290,
                'code' => 'R9-10182024-CHE-1053',
                'information' => NULL,
                'sample_id' => 771,
                'user_id' => 8,
                'created_at' => '2024-10-19 00:21:09',
                'updated_at' => '2024-10-19 00:21:09',
            ),
            287 => 
            array (
                'id' => 291,
                'code' => 'R9-10182024-CHE-1054',
                'information' => NULL,
                'sample_id' => 793,
                'user_id' => 8,
                'created_at' => '2024-10-19 00:21:39',
                'updated_at' => '2024-10-19 00:21:39',
            ),
            288 => 
            array (
                'id' => 292,
                'code' => 'R9-10182024-MIC-1191',
                'information' => NULL,
                'sample_id' => 655,
                'user_id' => 16,
                'created_at' => '2024-10-19 00:25:08',
                'updated_at' => '2024-10-19 00:25:08',
            ),
            289 => 
            array (
                'id' => 293,
                'code' => 'R9-10182024-MIC-1192',
                'information' => NULL,
                'sample_id' => 672,
                'user_id' => 16,
                'created_at' => '2024-10-19 00:52:05',
                'updated_at' => '2024-10-19 00:52:05',
            ),
            290 => 
            array (
                'id' => 294,
                'code' => 'R9-10182024-MIC-1193',
                'information' => NULL,
                'sample_id' => 673,
                'user_id' => 16,
                'created_at' => '2024-10-19 00:52:24',
                'updated_at' => '2024-10-19 00:52:24',
            ),
            291 => 
            array (
                'id' => 295,
                'code' => 'R9-10182024-MIC-1194',
                'information' => NULL,
                'sample_id' => 674,
                'user_id' => 16,
                'created_at' => '2024-10-19 00:52:40',
                'updated_at' => '2024-10-19 00:52:40',
            ),
            292 => 
            array (
                'id' => 296,
                'code' => 'R9-10182024-MIC-1195',
                'information' => NULL,
                'sample_id' => 675,
                'user_id' => 16,
                'created_at' => '2024-10-19 00:52:57',
                'updated_at' => '2024-10-19 00:52:57',
            ),
            293 => 
            array (
                'id' => 297,
                'code' => 'R9-10182024-MIC-1196',
                'information' => NULL,
                'sample_id' => 676,
                'user_id' => 16,
                'created_at' => '2024-10-19 00:53:20',
                'updated_at' => '2024-10-19 00:53:20',
            ),
            294 => 
            array (
                'id' => 298,
                'code' => 'R9-10182024-MIC-1197',
                'information' => NULL,
                'sample_id' => 677,
                'user_id' => 16,
                'created_at' => '2024-10-19 00:53:34',
                'updated_at' => '2024-10-19 00:53:34',
            ),
            295 => 
            array (
                'id' => 299,
                'code' => 'R9-10182024-MIC-1198',
                'information' => NULL,
                'sample_id' => 678,
                'user_id' => 16,
                'created_at' => '2024-10-19 00:53:56',
                'updated_at' => '2024-10-19 00:53:56',
            ),
            296 => 
            array (
                'id' => 300,
                'code' => 'R9-10182024-MIC-1199',
                'information' => NULL,
                'sample_id' => 679,
                'user_id' => 16,
                'created_at' => '2024-10-19 00:54:17',
                'updated_at' => '2024-10-19 00:54:17',
            ),
            297 => 
            array (
                'id' => 301,
                'code' => 'R9-10182024-MIC-1200',
                'information' => NULL,
                'sample_id' => 680,
                'user_id' => 16,
                'created_at' => '2024-10-19 00:54:30',
                'updated_at' => '2024-10-19 00:54:30',
            ),
            298 => 
            array (
                'id' => 302,
                'code' => 'R9-10212024-MET-1041',
                'information' => NULL,
                'sample_id' => 487,
                'user_id' => 13,
                'created_at' => '2024-10-21 21:01:36',
                'updated_at' => '2024-10-21 21:01:36',
            ),
            299 => 
            array (
                'id' => 303,
                'code' => 'R9-10212024-MET-1042',
                'information' => NULL,
                'sample_id' => 488,
                'user_id' => 13,
                'created_at' => '2024-10-21 21:02:02',
                'updated_at' => '2024-10-21 21:02:02',
            ),
            300 => 
            array (
                'id' => 304,
                'code' => 'R9-10212024-MET-1043',
                'information' => NULL,
                'sample_id' => 489,
                'user_id' => 13,
                'created_at' => '2024-10-21 21:02:11',
                'updated_at' => '2024-10-21 21:02:11',
            ),
            301 => 
            array (
                'id' => 305,
                'code' => 'R9-10212024-MET-1044',
                'information' => NULL,
                'sample_id' => 490,
                'user_id' => 13,
                'created_at' => '2024-10-21 21:02:21',
                'updated_at' => '2024-10-21 21:02:21',
            ),
            302 => 
            array (
                'id' => 306,
                'code' => 'R9-10212024-MET-1045',
                'information' => NULL,
                'sample_id' => 491,
                'user_id' => 13,
                'created_at' => '2024-10-21 21:02:30',
                'updated_at' => '2024-10-21 21:02:30',
            ),
            303 => 
            array (
                'id' => 307,
                'code' => 'R9-10212024-MET-1046',
                'information' => NULL,
                'sample_id' => 499,
                'user_id' => 13,
                'created_at' => '2024-10-21 21:02:48',
                'updated_at' => '2024-10-21 21:02:48',
            ),
            304 => 
            array (
                'id' => 308,
                'code' => 'R9-10212024-CHE-1055',
                'information' => NULL,
                'sample_id' => 709,
                'user_id' => 7,
                'created_at' => '2024-10-21 23:57:06',
                'updated_at' => '2024-10-21 23:57:06',
            ),
            305 => 
            array (
                'id' => 309,
                'code' => 'R9-10212024-CHE-1056',
                'information' => NULL,
                'sample_id' => 860,
                'user_id' => 8,
                'created_at' => '2024-10-22 00:13:30',
                'updated_at' => '2024-10-22 00:13:30',
            ),
            306 => 
            array (
                'id' => 310,
                'code' => 'R9-10212024-CHE-1057',
                'information' => NULL,
                'sample_id' => 861,
                'user_id' => 8,
                'created_at' => '2024-10-22 00:13:38',
                'updated_at' => '2024-10-22 00:13:38',
            ),
            307 => 
            array (
                'id' => 311,
                'code' => 'R9-10212024-CHE-1058',
                'information' => NULL,
                'sample_id' => 862,
                'user_id' => 8,
                'created_at' => '2024-10-22 00:13:44',
                'updated_at' => '2024-10-22 00:13:44',
            ),
            308 => 
            array (
                'id' => 312,
                'code' => 'R9-10212024-MIC-1201',
                'information' => NULL,
                'sample_id' => 693,
                'user_id' => 16,
                'created_at' => '2024-10-22 00:29:25',
                'updated_at' => '2024-10-22 00:29:25',
            ),
            309 => 
            array (
                'id' => 313,
                'code' => 'R9-10212024-MIC-1202',
                'information' => NULL,
                'sample_id' => 694,
                'user_id' => 16,
                'created_at' => '2024-10-22 00:29:49',
                'updated_at' => '2024-10-22 00:29:49',
            ),
            310 => 
            array (
                'id' => 314,
                'code' => 'R9-10212024-MIC-1203',
                'information' => NULL,
                'sample_id' => 695,
                'user_id' => 16,
                'created_at' => '2024-10-22 00:29:59',
                'updated_at' => '2024-10-22 00:29:59',
            ),
            311 => 
            array (
                'id' => 315,
                'code' => 'R9-10212024-MIC-1204',
                'information' => NULL,
                'sample_id' => 696,
                'user_id' => 16,
                'created_at' => '2024-10-22 00:30:29',
                'updated_at' => '2024-10-22 00:30:29',
            ),
            312 => 
            array (
                'id' => 316,
                'code' => 'R9-10212024-MIC-1205',
                'information' => NULL,
                'sample_id' => 697,
                'user_id' => 16,
                'created_at' => '2024-10-22 00:30:52',
                'updated_at' => '2024-10-22 00:30:52',
            ),
            313 => 
            array (
                'id' => 317,
                'code' => 'R9-10212024-MIC-1206',
                'information' => NULL,
                'sample_id' => 698,
                'user_id' => 16,
                'created_at' => '2024-10-22 00:30:58',
                'updated_at' => '2024-10-22 00:30:58',
            ),
            314 => 
            array (
                'id' => 318,
                'code' => 'R9-10212024-MIC-1207',
                'information' => NULL,
                'sample_id' => 699,
                'user_id' => 16,
                'created_at' => '2024-10-22 00:31:14',
                'updated_at' => '2024-10-22 00:31:14',
            ),
            315 => 
            array (
                'id' => 319,
                'code' => 'R9-10212024-MIC-1208',
                'information' => NULL,
                'sample_id' => 824,
                'user_id' => 16,
                'created_at' => '2024-10-22 01:08:39',
                'updated_at' => '2024-10-22 01:08:39',
            ),
            316 => 
            array (
                'id' => 320,
                'code' => 'R9-10212024-MIC-1209',
                'information' => NULL,
                'sample_id' => 835,
                'user_id' => 16,
                'created_at' => '2024-10-22 01:09:52',
                'updated_at' => '2024-10-22 01:09:52',
            ),
            317 => 
            array (
                'id' => 321,
                'code' => 'R9-10212024-MIC-1210',
                'information' => NULL,
                'sample_id' => 837,
                'user_id' => 16,
                'created_at' => '2024-10-22 01:10:29',
                'updated_at' => '2024-10-22 01:10:29',
            ),
            318 => 
            array (
                'id' => 322,
                'code' => 'R9-10212024-MIC-1211',
                'information' => NULL,
                'sample_id' => 840,
                'user_id' => 16,
                'created_at' => '2024-10-22 01:11:15',
                'updated_at' => '2024-10-22 01:11:15',
            ),
            319 => 
            array (
                'id' => 323,
                'code' => 'R9-10212024-MIC-1212',
                'information' => NULL,
                'sample_id' => 843,
                'user_id' => 16,
                'created_at' => '2024-10-22 01:11:53',
                'updated_at' => '2024-10-22 01:11:53',
            ),
            320 => 
            array (
                'id' => 324,
                'code' => 'R9-10212024-MIC-1213',
                'information' => NULL,
                'sample_id' => 846,
                'user_id' => 16,
                'created_at' => '2024-10-22 01:12:22',
                'updated_at' => '2024-10-22 01:12:22',
            ),
            321 => 
            array (
                'id' => 325,
                'code' => 'R9-10212024-MIC-1214',
                'information' => NULL,
                'sample_id' => 853,
                'user_id' => 16,
                'created_at' => '2024-10-22 01:13:02',
                'updated_at' => '2024-10-22 01:13:02',
            ),
            322 => 
            array (
                'id' => 326,
                'code' => 'R9-10212024-MIC-1215',
                'information' => NULL,
                'sample_id' => 900,
                'user_id' => 16,
                'created_at' => '2024-10-22 06:58:20',
                'updated_at' => '2024-10-22 06:58:20',
            ),
            323 => 
            array (
                'id' => 327,
                'code' => 'R9-10212024-MIC-1216',
                'information' => NULL,
                'sample_id' => 900,
                'user_id' => 16,
                'created_at' => '2024-10-22 06:58:20',
                'updated_at' => '2024-10-22 06:58:20',
            ),
            324 => 
            array (
                'id' => 328,
                'code' => 'R9-10212024-MIC-1217',
                'information' => NULL,
                'sample_id' => 902,
                'user_id' => 16,
                'created_at' => '2024-10-22 07:00:31',
                'updated_at' => '2024-10-22 07:00:31',
            ),
            325 => 
            array (
                'id' => 329,
                'code' => 'R9-10212024-MIC-1218',
                'information' => NULL,
                'sample_id' => 904,
                'user_id' => 16,
                'created_at' => '2024-10-22 07:20:44',
                'updated_at' => '2024-10-22 07:20:44',
            ),
            326 => 
            array (
                'id' => 330,
                'code' => 'R9-10212024-MIC-1219',
                'information' => NULL,
                'sample_id' => 905,
                'user_id' => 16,
                'created_at' => '2024-10-22 07:21:12',
                'updated_at' => '2024-10-22 07:21:12',
            ),
            327 => 
            array (
                'id' => 331,
                'code' => 'R9-10212024-MIC-1220',
                'information' => NULL,
                'sample_id' => 907,
                'user_id' => 16,
                'created_at' => '2024-10-22 07:30:30',
                'updated_at' => '2024-10-22 07:30:30',
            ),
            328 => 
            array (
                'id' => 332,
                'code' => 'R9-10212024-MIC-1221',
                'information' => NULL,
                'sample_id' => 913,
                'user_id' => 16,
                'created_at' => '2024-10-22 07:36:01',
                'updated_at' => '2024-10-22 07:36:01',
            ),
            329 => 
            array (
                'id' => 333,
                'code' => 'R9-10212024-MIC-1222',
                'information' => NULL,
                'sample_id' => 914,
                'user_id' => 16,
                'created_at' => '2024-10-22 07:36:32',
                'updated_at' => '2024-10-22 07:36:32',
            ),
            330 => 
            array (
                'id' => 334,
                'code' => 'R9-10212024-MIC-1223',
                'information' => NULL,
                'sample_id' => 915,
                'user_id' => 16,
                'created_at' => '2024-10-22 07:57:28',
                'updated_at' => '2024-10-22 07:57:28',
            ),
            331 => 
            array (
                'id' => 335,
                'code' => 'R9-10212024-MIC-1224',
                'information' => NULL,
                'sample_id' => 916,
                'user_id' => 16,
                'created_at' => '2024-10-22 07:57:52',
                'updated_at' => '2024-10-22 07:57:52',
            ),
            332 => 
            array (
                'id' => 336,
                'code' => 'R9-10222024-MIC-1225',
                'information' => NULL,
                'sample_id' => 917,
                'user_id' => 16,
                'created_at' => '2024-10-22 08:05:24',
                'updated_at' => '2024-10-22 08:05:24',
            ),
            333 => 
            array (
                'id' => 337,
                'code' => 'R9-10222024-MIC-1226',
                'information' => NULL,
                'sample_id' => 918,
                'user_id' => 16,
                'created_at' => '2024-10-22 08:06:12',
                'updated_at' => '2024-10-22 08:06:12',
            ),
            334 => 
            array (
                'id' => 338,
                'code' => 'R9-10222024-MIC-1227',
                'information' => NULL,
                'sample_id' => 919,
                'user_id' => 16,
                'created_at' => '2024-10-22 08:06:30',
                'updated_at' => '2024-10-22 08:06:30',
            ),
            335 => 
            array (
                'id' => 339,
                'code' => 'R9-10222024-MIC-1228',
                'information' => NULL,
                'sample_id' => 920,
                'user_id' => 16,
                'created_at' => '2024-10-22 08:06:47',
                'updated_at' => '2024-10-22 08:06:47',
            ),
            336 => 
            array (
                'id' => 340,
                'code' => 'R9-10222024-MIC-1229',
                'information' => NULL,
                'sample_id' => 921,
                'user_id' => 16,
                'created_at' => '2024-10-22 08:07:44',
                'updated_at' => '2024-10-22 08:07:44',
            ),
            337 => 
            array (
                'id' => 341,
                'code' => 'R9-10222024-MIC-1230',
                'information' => NULL,
                'sample_id' => 922,
                'user_id' => 16,
                'created_at' => '2024-10-22 08:08:06',
                'updated_at' => '2024-10-22 08:08:06',
            ),
            338 => 
            array (
                'id' => 342,
                'code' => 'R9-10222024-MET-1047',
                'information' => NULL,
                'sample_id' => 854,
                'user_id' => 12,
                'created_at' => '2024-10-22 16:16:33',
                'updated_at' => '2024-10-22 16:16:33',
            ),
            339 => 
            array (
                'id' => 343,
                'code' => 'R9-10222024-MET-1048',
                'information' => NULL,
                'sample_id' => 855,
                'user_id' => 12,
                'created_at' => '2024-10-22 16:17:00',
                'updated_at' => '2024-10-22 16:17:00',
            ),
            340 => 
            array (
                'id' => 344,
                'code' => 'R9-10222024-MET-1049',
                'information' => NULL,
                'sample_id' => 856,
                'user_id' => 12,
                'created_at' => '2024-10-22 16:17:16',
                'updated_at' => '2024-10-22 16:17:16',
            ),
            341 => 
            array (
                'id' => 345,
                'code' => 'R9-10222024-MET-1050',
                'information' => NULL,
                'sample_id' => 857,
                'user_id' => 12,
                'created_at' => '2024-10-22 16:17:26',
                'updated_at' => '2024-10-22 16:17:26',
            ),
            342 => 
            array (
                'id' => 346,
                'code' => 'R9-10222024-CHE-1059',
                'information' => NULL,
                'sample_id' => 923,
                'user_id' => 8,
                'created_at' => '2024-10-22 16:23:22',
                'updated_at' => '2024-10-22 16:23:22',
            ),
            343 => 
            array (
                'id' => 347,
                'code' => 'R9-10222024-CHE-1060',
                'information' => NULL,
                'sample_id' => 923,
                'user_id' => 8,
                'created_at' => '2024-10-22 16:23:23',
                'updated_at' => '2024-10-22 16:23:23',
            ),
            344 => 
            array (
                'id' => 348,
                'code' => 'R9-10222024-CHE-1061',
                'information' => NULL,
                'sample_id' => 924,
                'user_id' => 8,
                'created_at' => '2024-10-22 16:23:45',
                'updated_at' => '2024-10-22 16:23:45',
            ),
            345 => 
            array (
                'id' => 349,
                'code' => 'R9-10222024-CHE-1062',
                'information' => NULL,
                'sample_id' => 925,
                'user_id' => 8,
                'created_at' => '2024-10-22 16:24:04',
                'updated_at' => '2024-10-22 16:24:04',
            ),
            346 => 
            array (
                'id' => 350,
                'code' => 'R9-10222024-CHE-1063',
                'information' => NULL,
                'sample_id' => 926,
                'user_id' => 8,
                'created_at' => '2024-10-22 16:24:20',
                'updated_at' => '2024-10-22 16:24:20',
            ),
            347 => 
            array (
                'id' => 351,
                'code' => 'R9-10222024-CHE-1064',
                'information' => NULL,
                'sample_id' => 927,
                'user_id' => 8,
                'created_at' => '2024-10-22 16:24:39',
                'updated_at' => '2024-10-22 16:24:39',
            ),
            348 => 
            array (
                'id' => 352,
                'code' => 'R9-10222024-CHE-1065',
                'information' => NULL,
                'sample_id' => 928,
                'user_id' => 8,
                'created_at' => '2024-10-22 16:25:04',
                'updated_at' => '2024-10-22 16:25:04',
            ),
            349 => 
            array (
                'id' => 353,
                'code' => 'R9-10222024-MET-1051',
                'information' => NULL,
                'sample_id' => 969,
                'user_id' => 12,
                'created_at' => '2024-10-23 00:05:20',
                'updated_at' => '2024-10-23 00:05:20',
            ),
            350 => 
            array (
                'id' => 354,
                'code' => 'R9-10222024-MET-1052',
                'information' => NULL,
                'sample_id' => 970,
                'user_id' => 12,
                'created_at' => '2024-10-23 00:06:11',
                'updated_at' => '2024-10-23 00:06:11',
            ),
            351 => 
            array (
                'id' => 355,
                'code' => 'R9-10232024-MIC-1231',
                'information' => NULL,
                'sample_id' => 929,
                'user_id' => 16,
                'created_at' => '2024-10-23 17:43:14',
                'updated_at' => '2024-10-23 17:43:14',
            ),
            352 => 
            array (
                'id' => 356,
                'code' => 'R9-10232024-MIC-1232',
                'information' => NULL,
                'sample_id' => 930,
                'user_id' => 16,
                'created_at' => '2024-10-23 17:43:55',
                'updated_at' => '2024-10-23 17:43:55',
            ),
            353 => 
            array (
                'id' => 357,
                'code' => 'R9-10232024-MIC-1233',
                'information' => NULL,
                'sample_id' => 931,
                'user_id' => 16,
                'created_at' => '2024-10-23 17:44:36',
                'updated_at' => '2024-10-23 17:44:36',
            ),
            354 => 
            array (
                'id' => 358,
                'code' => 'R9-10242024-CHE-1066',
                'information' => NULL,
                'sample_id' => 906,
                'user_id' => 8,
                'created_at' => '2024-10-24 16:03:44',
                'updated_at' => '2024-10-24 16:03:44',
            ),
            355 => 
            array (
                'id' => 359,
                'code' => 'R9-10242024-CHE-1067',
                'information' => NULL,
                'sample_id' => 953,
                'user_id' => 8,
                'created_at' => '2024-10-24 16:04:53',
                'updated_at' => '2024-10-24 16:04:53',
            ),
            356 => 
            array (
                'id' => 360,
                'code' => 'R9-10242024-MET-1053',
                'information' => NULL,
                'sample_id' => 1002,
                'user_id' => 12,
                'created_at' => '2024-10-24 19:03:06',
                'updated_at' => '2024-10-24 19:03:06',
            ),
            357 => 
            array (
                'id' => 361,
                'code' => 'R9-10242024-MET-1054',
                'information' => NULL,
                'sample_id' => 903,
                'user_id' => 12,
                'created_at' => '2024-10-24 19:13:44',
                'updated_at' => '2024-10-24 19:13:44',
            ),
            358 => 
            array (
                'id' => 362,
                'code' => 'R9-10242024-MET-1055',
                'information' => NULL,
                'sample_id' => 934,
                'user_id' => 12,
                'created_at' => '2024-10-24 19:14:53',
                'updated_at' => '2024-10-24 19:14:53',
            ),
            359 => 
            array (
                'id' => 363,
                'code' => 'R9-10252024-MET-1056',
                'information' => NULL,
                'sample_id' => 1018,
                'user_id' => 12,
                'created_at' => '2024-10-25 23:07:01',
                'updated_at' => '2024-10-25 23:07:01',
            ),
            360 => 
            array (
                'id' => 364,
                'code' => 'R9-10252024-MET-1057',
                'information' => NULL,
                'sample_id' => 1019,
                'user_id' => 12,
                'created_at' => '2024-10-25 23:08:53',
                'updated_at' => '2024-10-25 23:08:53',
            ),
            361 => 
            array (
                'id' => 365,
                'code' => 'R9-10252024-MET-1058',
                'information' => NULL,
                'sample_id' => 1020,
                'user_id' => 12,
                'created_at' => '2024-10-25 23:09:14',
                'updated_at' => '2024-10-25 23:09:14',
            ),
            362 => 
            array (
                'id' => 366,
                'code' => 'R9-10252024-MET-1059',
                'information' => NULL,
                'sample_id' => 1021,
                'user_id' => 12,
                'created_at' => '2024-10-25 23:42:42',
                'updated_at' => '2024-10-25 23:42:42',
            ),
            363 => 
            array (
                'id' => 367,
                'code' => 'R9-10252024-MET-1060',
                'information' => NULL,
                'sample_id' => 863,
                'user_id' => 12,
                'created_at' => '2024-10-26 00:10:27',
                'updated_at' => '2024-10-26 00:10:27',
            ),
            364 => 
            array (
                'id' => 368,
                'code' => 'R9-10252024-CHE-1068',
                'information' => NULL,
                'sample_id' => 681,
                'user_id' => 8,
                'created_at' => '2024-10-26 07:19:55',
                'updated_at' => '2024-10-26 07:19:55',
            ),
            365 => 
            array (
                'id' => 369,
                'code' => 'R9-10252024-CHE-1069',
                'information' => NULL,
                'sample_id' => 682,
                'user_id' => 8,
                'created_at' => '2024-10-26 07:20:06',
                'updated_at' => '2024-10-26 07:20:06',
            ),
            366 => 
            array (
                'id' => 370,
                'code' => 'R9-10252024-CHE-1070',
                'information' => NULL,
                'sample_id' => 683,
                'user_id' => 8,
                'created_at' => '2024-10-26 07:20:22',
                'updated_at' => '2024-10-26 07:20:22',
            ),
            367 => 
            array (
                'id' => 371,
                'code' => 'R9-10252024-CHE-1071',
                'information' => NULL,
                'sample_id' => 684,
                'user_id' => 8,
                'created_at' => '2024-10-26 07:20:30',
                'updated_at' => '2024-10-26 07:20:30',
            ),
            368 => 
            array (
                'id' => 372,
                'code' => 'R9-10252024-CHE-1072',
                'information' => NULL,
                'sample_id' => 685,
                'user_id' => 8,
                'created_at' => '2024-10-26 07:21:33',
                'updated_at' => '2024-10-26 07:21:33',
            ),
            369 => 
            array (
                'id' => 373,
                'code' => 'R9-10252024-CHE-1073',
                'information' => NULL,
                'sample_id' => 686,
                'user_id' => 8,
                'created_at' => '2024-10-26 07:22:26',
                'updated_at' => '2024-10-26 07:22:26',
            ),
            370 => 
            array (
                'id' => 374,
                'code' => 'R9-10252024-CHE-1074',
                'information' => NULL,
                'sample_id' => 687,
                'user_id' => 8,
                'created_at' => '2024-10-26 07:22:46',
                'updated_at' => '2024-10-26 07:22:46',
            ),
            371 => 
            array (
                'id' => 375,
                'code' => 'R9-10252024-CHE-1075',
                'information' => NULL,
                'sample_id' => 688,
                'user_id' => 8,
                'created_at' => '2024-10-26 07:22:55',
                'updated_at' => '2024-10-26 07:22:55',
            ),
            372 => 
            array (
                'id' => 376,
                'code' => 'R9-10252024-CHE-1076',
                'information' => NULL,
                'sample_id' => 689,
                'user_id' => 8,
                'created_at' => '2024-10-26 07:23:07',
                'updated_at' => '2024-10-26 07:23:07',
            ),
            373 => 
            array (
                'id' => 377,
                'code' => 'R9-10302024-MIC-1234',
                'information' => NULL,
                'sample_id' => 933,
                'user_id' => 16,
                'created_at' => '2024-10-30 23:03:06',
                'updated_at' => '2024-10-30 23:03:06',
            ),
            374 => 
            array (
                'id' => 378,
                'code' => 'R9-10302024-MIC-1235',
                'information' => NULL,
                'sample_id' => 961,
                'user_id' => 16,
                'created_at' => '2024-10-30 23:03:51',
                'updated_at' => '2024-10-30 23:03:51',
            ),
            375 => 
            array (
                'id' => 379,
                'code' => 'R9-10302024-MIC-1236',
                'information' => NULL,
                'sample_id' => 962,
                'user_id' => 16,
                'created_at' => '2024-10-30 23:04:22',
                'updated_at' => '2024-10-30 23:04:22',
            ),
            376 => 
            array (
                'id' => 380,
                'code' => 'R9-10302024-MIC-1237',
                'information' => NULL,
                'sample_id' => 963,
                'user_id' => 16,
                'created_at' => '2024-10-30 23:06:39',
                'updated_at' => '2024-10-30 23:06:39',
            ),
            377 => 
            array (
                'id' => 381,
                'code' => 'R9-10302024-MIC-1238',
                'information' => NULL,
                'sample_id' => 964,
                'user_id' => 16,
                'created_at' => '2024-10-30 23:07:15',
                'updated_at' => '2024-10-30 23:07:15',
            ),
            378 => 
            array (
                'id' => 382,
                'code' => 'R9-10302024-MIC-1239',
                'information' => NULL,
                'sample_id' => 988,
                'user_id' => 16,
                'created_at' => '2024-10-30 23:08:03',
                'updated_at' => '2024-10-30 23:08:03',
            ),
            379 => 
            array (
                'id' => 383,
                'code' => 'R9-10302024-MET-1061',
                'information' => NULL,
                'sample_id' => 795,
                'user_id' => 12,
                'created_at' => '2024-10-30 23:08:04',
                'updated_at' => '2024-10-30 23:08:04',
            ),
            380 => 
            array (
                'id' => 384,
                'code' => 'R9-10302024-MIC-1240',
                'information' => NULL,
                'sample_id' => 989,
                'user_id' => 16,
                'created_at' => '2024-10-30 23:08:22',
                'updated_at' => '2024-10-30 23:08:22',
            ),
            381 => 
            array (
                'id' => 385,
                'code' => 'R9-10302024-MIC-1241',
                'information' => NULL,
                'sample_id' => 990,
                'user_id' => 16,
                'created_at' => '2024-10-30 23:08:35',
                'updated_at' => '2024-10-30 23:08:35',
            ),
            382 => 
            array (
                'id' => 386,
                'code' => 'R9-10302024-MIC-1242',
                'information' => NULL,
                'sample_id' => 991,
                'user_id' => 16,
                'created_at' => '2024-10-30 23:08:53',
                'updated_at' => '2024-10-30 23:08:53',
            ),
            383 => 
            array (
                'id' => 387,
                'code' => 'R9-10302024-MET-1062',
                'information' => NULL,
                'sample_id' => 796,
                'user_id' => 12,
                'created_at' => '2024-10-30 23:09:16',
                'updated_at' => '2024-10-30 23:09:16',
            ),
            384 => 
            array (
                'id' => 388,
                'code' => 'R9-10302024-MET-1063',
                'information' => NULL,
                'sample_id' => 797,
                'user_id' => 12,
                'created_at' => '2024-10-30 23:09:53',
                'updated_at' => '2024-10-30 23:09:53',
            ),
            385 => 
            array (
                'id' => 389,
                'code' => 'R9-10302024-MET-1064',
                'information' => NULL,
                'sample_id' => 798,
                'user_id' => 12,
                'created_at' => '2024-10-30 23:10:40',
                'updated_at' => '2024-10-30 23:10:40',
            ),
            386 => 
            array (
                'id' => 390,
                'code' => 'R9-10302024-MET-1065',
                'information' => NULL,
                'sample_id' => 799,
                'user_id' => 12,
                'created_at' => '2024-10-30 23:11:24',
                'updated_at' => '2024-10-30 23:11:24',
            ),
            387 => 
            array (
                'id' => 391,
                'code' => 'R9-10302024-MET-1066',
                'information' => NULL,
                'sample_id' => 800,
                'user_id' => 12,
                'created_at' => '2024-10-30 23:12:29',
                'updated_at' => '2024-10-30 23:12:29',
            ),
            388 => 
            array (
                'id' => 392,
                'code' => 'R9-10302024-MET-1067',
                'information' => NULL,
                'sample_id' => 801,
                'user_id' => 12,
                'created_at' => '2024-10-30 23:13:51',
                'updated_at' => '2024-10-30 23:13:51',
            ),
            389 => 
            array (
                'id' => 393,
                'code' => 'R9-10302024-MET-1068',
                'information' => NULL,
                'sample_id' => 802,
                'user_id' => 12,
                'created_at' => '2024-10-30 23:14:24',
                'updated_at' => '2024-10-30 23:14:24',
            ),
            390 => 
            array (
                'id' => 394,
                'code' => 'R9-10302024-MET-1069',
                'information' => NULL,
                'sample_id' => 804,
                'user_id' => 12,
                'created_at' => '2024-10-30 23:15:27',
                'updated_at' => '2024-10-30 23:15:27',
            ),
            391 => 
            array (
                'id' => 395,
                'code' => 'R9-10302024-MET-1070',
                'information' => NULL,
                'sample_id' => 778,
                'user_id' => 12,
                'created_at' => '2024-10-31 00:07:07',
                'updated_at' => '2024-10-31 00:07:07',
            ),
            392 => 
            array (
                'id' => 396,
                'code' => 'R9-10302024-MET-1071',
                'information' => NULL,
                'sample_id' => 779,
                'user_id' => 12,
                'created_at' => '2024-10-31 00:07:42',
                'updated_at' => '2024-10-31 00:07:42',
            ),
            393 => 
            array (
                'id' => 397,
                'code' => 'R9-10302024-MET-1072',
                'information' => NULL,
                'sample_id' => 780,
                'user_id' => 12,
                'created_at' => '2024-10-31 00:08:14',
                'updated_at' => '2024-10-31 00:08:14',
            ),
            394 => 
            array (
                'id' => 398,
                'code' => 'R9-10302024-MET-1073',
                'information' => NULL,
                'sample_id' => 781,
                'user_id' => 12,
                'created_at' => '2024-10-31 00:08:51',
                'updated_at' => '2024-10-31 00:08:51',
            ),
            395 => 
            array (
                'id' => 399,
                'code' => 'R9-10302024-MET-1074',
                'information' => NULL,
                'sample_id' => 782,
                'user_id' => 12,
                'created_at' => '2024-10-31 00:09:23',
                'updated_at' => '2024-10-31 00:09:23',
            ),
            396 => 
            array (
                'id' => 400,
                'code' => 'R9-11012024-MET-1075',
                'information' => NULL,
                'sample_id' => 803,
                'user_id' => 12,
                'created_at' => '2024-11-02 01:21:47',
                'updated_at' => '2024-11-02 01:21:47',
            ),
            397 => 
            array (
                'id' => 401,
                'code' => 'R9-11042024-CHE-1077',
                'information' => NULL,
                'sample_id' => 1149,
                'user_id' => 7,
                'created_at' => '2024-11-04 16:03:15',
                'updated_at' => '2024-11-04 16:03:15',
            ),
            398 => 
            array (
                'id' => 402,
                'code' => 'R9-11042024-CHE-1078',
                'information' => NULL,
                'sample_id' => 1150,
                'user_id' => 7,
                'created_at' => '2024-11-04 16:04:05',
                'updated_at' => '2024-11-04 16:04:05',
            ),
            399 => 
            array (
                'id' => 403,
                'code' => 'R9-11042024-CHE-1079',
                'information' => NULL,
                'sample_id' => 1152,
                'user_id' => 7,
                'created_at' => '2024-11-04 16:04:35',
                'updated_at' => '2024-11-04 16:04:35',
            ),
            400 => 
            array (
                'id' => 404,
                'code' => 'R9-11042024-CHE-1080',
                'information' => NULL,
                'sample_id' => 1153,
                'user_id' => 7,
                'created_at' => '2024-11-04 16:04:50',
                'updated_at' => '2024-11-04 16:04:50',
            ),
            401 => 
            array (
                'id' => 405,
                'code' => 'R9-11042024-CHE-1081',
                'information' => NULL,
                'sample_id' => 1151,
                'user_id' => 7,
                'created_at' => '2024-11-04 16:06:38',
                'updated_at' => '2024-11-04 16:06:38',
            ),
            402 => 
            array (
                'id' => 406,
                'code' => 'R9-11042024-CHE-1082',
                'information' => NULL,
                'sample_id' => 935,
                'user_id' => 8,
                'created_at' => '2024-11-04 16:40:57',
                'updated_at' => '2024-11-04 16:40:57',
            ),
            403 => 
            array (
                'id' => 407,
                'code' => 'R9-11042024-CHE-1083',
                'information' => NULL,
                'sample_id' => 947,
                'user_id' => 8,
                'created_at' => '2024-11-04 16:41:37',
                'updated_at' => '2024-11-04 16:41:37',
            ),
            404 => 
            array (
                'id' => 408,
                'code' => 'R9-11042024-CHE-1084',
                'information' => NULL,
                'sample_id' => 974,
                'user_id' => 8,
                'created_at' => '2024-11-04 16:42:56',
                'updated_at' => '2024-11-04 16:42:56',
            ),
            405 => 
            array (
                'id' => 409,
                'code' => 'R9-11042024-CHE-1085',
                'information' => NULL,
                'sample_id' => 978,
                'user_id' => 8,
                'created_at' => '2024-11-04 16:43:35',
                'updated_at' => '2024-11-04 16:43:35',
            ),
            406 => 
            array (
                'id' => 410,
                'code' => 'R9-11042024-CHE-1086',
                'information' => NULL,
                'sample_id' => 979,
                'user_id' => 8,
                'created_at' => '2024-11-04 16:44:07',
                'updated_at' => '2024-11-04 16:44:07',
            ),
            407 => 
            array (
                'id' => 411,
                'code' => 'R9-11042024-MIC-1243',
                'information' => NULL,
                'sample_id' => 830,
                'user_id' => 16,
                'created_at' => '2024-11-04 16:44:07',
                'updated_at' => '2024-11-04 16:44:07',
            ),
            408 => 
            array (
                'id' => 412,
                'code' => 'R9-11042024-CHE-1087',
                'information' => NULL,
                'sample_id' => 999,
                'user_id' => 8,
                'created_at' => '2024-11-04 16:44:36',
                'updated_at' => '2024-11-04 16:44:36',
            ),
            409 => 
            array (
                'id' => 413,
                'code' => 'R9-11042024-MIC-1244',
                'information' => NULL,
                'sample_id' => 831,
                'user_id' => 16,
                'created_at' => '2024-11-04 16:44:47',
                'updated_at' => '2024-11-04 16:44:47',
            ),
            410 => 
            array (
                'id' => 414,
                'code' => 'R9-11042024-MIC-1245',
                'information' => NULL,
                'sample_id' => 832,
                'user_id' => 16,
                'created_at' => '2024-11-04 16:45:07',
                'updated_at' => '2024-11-04 16:45:07',
            ),
            411 => 
            array (
                'id' => 415,
                'code' => 'R9-11042024-CHE-1088',
                'information' => NULL,
                'sample_id' => 1000,
                'user_id' => 8,
                'created_at' => '2024-11-04 16:45:11',
                'updated_at' => '2024-11-04 16:45:11',
            ),
            412 => 
            array (
                'id' => 416,
                'code' => 'R9-11042024-MIC-1246',
                'information' => NULL,
                'sample_id' => 833,
                'user_id' => 16,
                'created_at' => '2024-11-04 16:45:25',
                'updated_at' => '2024-11-04 16:45:25',
            ),
            413 => 
            array (
                'id' => 417,
                'code' => 'R9-11042024-MIC-1247',
                'information' => NULL,
                'sample_id' => 1132,
                'user_id' => 16,
                'created_at' => '2024-11-04 16:59:39',
                'updated_at' => '2024-11-04 16:59:39',
            ),
            414 => 
            array (
                'id' => 418,
                'code' => 'R9-11042024-MIC-1248',
                'information' => NULL,
                'sample_id' => 1132,
                'user_id' => 16,
                'created_at' => '2024-11-04 16:59:40',
                'updated_at' => '2024-11-04 16:59:40',
            ),
            415 => 
            array (
                'id' => 419,
                'code' => 'R9-11042024-MIC-1249',
                'information' => NULL,
                'sample_id' => 1133,
                'user_id' => 16,
                'created_at' => '2024-11-04 17:03:23',
                'updated_at' => '2024-11-04 17:03:23',
            ),
            416 => 
            array (
                'id' => 420,
                'code' => 'R9-11042024-MIC-1250',
                'information' => NULL,
                'sample_id' => 1134,
                'user_id' => 16,
                'created_at' => '2024-11-04 17:04:38',
                'updated_at' => '2024-11-04 17:04:38',
            ),
            417 => 
            array (
                'id' => 421,
                'code' => 'R9-11042024-MIC-1251',
                'information' => NULL,
                'sample_id' => 1135,
                'user_id' => 16,
                'created_at' => '2024-11-04 17:05:13',
                'updated_at' => '2024-11-04 17:05:13',
            ),
            418 => 
            array (
                'id' => 422,
                'code' => 'R9-11042024-MIC-1252',
                'information' => NULL,
                'sample_id' => 1136,
                'user_id' => 16,
                'created_at' => '2024-11-04 17:05:38',
                'updated_at' => '2024-11-04 17:05:38',
            ),
            419 => 
            array (
                'id' => 423,
                'code' => 'R9-11042024-MIC-1253',
                'information' => NULL,
                'sample_id' => 1137,
                'user_id' => 16,
                'created_at' => '2024-11-04 17:06:09',
                'updated_at' => '2024-11-04 17:06:09',
            ),
            420 => 
            array (
                'id' => 424,
                'code' => 'R9-11042024-MIC-1254',
                'information' => NULL,
                'sample_id' => 1137,
                'user_id' => 16,
                'created_at' => '2024-11-04 17:06:20',
                'updated_at' => '2024-11-04 17:06:20',
            ),
            421 => 
            array (
                'id' => 425,
                'code' => 'R9-11042024-MIC-1255',
                'information' => NULL,
                'sample_id' => 1138,
                'user_id' => 16,
                'created_at' => '2024-11-04 17:08:30',
                'updated_at' => '2024-11-04 17:08:30',
            ),
            422 => 
            array (
                'id' => 426,
                'code' => 'R9-11042024-MIC-1256',
                'information' => NULL,
                'sample_id' => 1139,
                'user_id' => 16,
                'created_at' => '2024-11-04 17:09:31',
                'updated_at' => '2024-11-04 17:09:31',
            ),
            423 => 
            array (
                'id' => 427,
                'code' => 'R9-11042024-MIC-1257',
                'information' => NULL,
                'sample_id' => 1140,
                'user_id' => 16,
                'created_at' => '2024-11-04 17:09:56',
                'updated_at' => '2024-11-04 17:09:56',
            ),
            424 => 
            array (
                'id' => 428,
                'code' => 'R9-11042024-MIC-1258',
                'information' => NULL,
                'sample_id' => 1141,
                'user_id' => 16,
                'created_at' => '2024-11-04 17:10:26',
                'updated_at' => '2024-11-04 17:10:26',
            ),
            425 => 
            array (
                'id' => 429,
                'code' => 'R9-11042024-CHE-1089',
                'information' => NULL,
                'sample_id' => 1047,
                'user_id' => 8,
                'created_at' => '2024-11-04 17:45:15',
                'updated_at' => '2024-11-04 17:45:15',
            ),
            426 => 
            array (
                'id' => 430,
                'code' => 'R9-11042024-CHE-1090',
                'information' => NULL,
                'sample_id' => 1048,
                'user_id' => 8,
                'created_at' => '2024-11-04 17:45:38',
                'updated_at' => '2024-11-04 17:45:38',
            ),
            427 => 
            array (
                'id' => 431,
                'code' => 'R9-11042024-CHE-1091',
                'information' => NULL,
                'sample_id' => 1049,
                'user_id' => 8,
                'created_at' => '2024-11-04 17:45:48',
                'updated_at' => '2024-11-04 17:45:48',
            ),
            428 => 
            array (
                'id' => 432,
                'code' => 'R9-11042024-CHE-1092',
                'information' => NULL,
                'sample_id' => 1050,
                'user_id' => 8,
                'created_at' => '2024-11-04 17:45:55',
                'updated_at' => '2024-11-04 17:45:55',
            ),
            429 => 
            array (
                'id' => 433,
                'code' => 'R9-11042024-CHE-1093',
                'information' => NULL,
                'sample_id' => 1051,
                'user_id' => 8,
                'created_at' => '2024-11-04 17:46:04',
                'updated_at' => '2024-11-04 17:46:04',
            ),
            430 => 
            array (
                'id' => 434,
                'code' => 'R9-11042024-CHE-1094',
                'information' => NULL,
                'sample_id' => 1052,
                'user_id' => 8,
                'created_at' => '2024-11-04 17:46:14',
                'updated_at' => '2024-11-04 17:46:14',
            ),
            431 => 
            array (
                'id' => 435,
                'code' => 'R9-11042024-CHE-1095',
                'information' => NULL,
                'sample_id' => 1052,
                'user_id' => 8,
                'created_at' => '2024-11-04 17:46:16',
                'updated_at' => '2024-11-04 17:46:16',
            ),
            432 => 
            array (
                'id' => 436,
                'code' => 'R9-11042024-CHE-1096',
                'information' => NULL,
                'sample_id' => 1053,
                'user_id' => 8,
                'created_at' => '2024-11-04 17:46:25',
                'updated_at' => '2024-11-04 17:46:25',
            ),
            433 => 
            array (
                'id' => 437,
                'code' => 'R9-11042024-CHE-1097',
                'information' => NULL,
                'sample_id' => 1054,
                'user_id' => 8,
                'created_at' => '2024-11-04 17:46:34',
                'updated_at' => '2024-11-04 17:46:34',
            ),
            434 => 
            array (
                'id' => 438,
                'code' => 'R9-11042024-CHE-1098',
                'information' => NULL,
                'sample_id' => 1055,
                'user_id' => 8,
                'created_at' => '2024-11-04 17:46:43',
                'updated_at' => '2024-11-04 17:46:43',
            ),
            435 => 
            array (
                'id' => 439,
                'code' => 'R9-11042024-CHE-1099',
                'information' => NULL,
                'sample_id' => 910,
                'user_id' => 8,
                'created_at' => '2024-11-05 00:20:34',
                'updated_at' => '2024-11-05 00:20:34',
            ),
            436 => 
            array (
                'id' => 440,
                'code' => 'R9-11052024-CHE-1100',
                'information' => NULL,
                'sample_id' => 1156,
                'user_id' => 6,
                'created_at' => '2024-11-05 17:54:17',
                'updated_at' => '2024-11-05 17:54:17',
            ),
            437 => 
            array (
                'id' => 441,
                'code' => 'R9-11052024-MET-1076',
                'information' => NULL,
                'sample_id' => 1189,
                'user_id' => 13,
                'created_at' => '2024-11-05 19:37:33',
                'updated_at' => '2024-11-05 19:37:33',
            ),
            438 => 
            array (
                'id' => 442,
                'code' => 'R9-11052024-MIC-1259',
                'information' => NULL,
                'sample_id' => 992,
                'user_id' => 16,
                'created_at' => '2024-11-05 19:48:58',
                'updated_at' => '2024-11-05 19:48:58',
            ),
            439 => 
            array (
                'id' => 443,
                'code' => 'R9-11052024-MIC-1260',
                'information' => NULL,
                'sample_id' => 996,
                'user_id' => 16,
                'created_at' => '2024-11-05 19:49:37',
                'updated_at' => '2024-11-05 19:49:37',
            ),
            440 => 
            array (
                'id' => 444,
                'code' => 'R9-11052024-MIC-1261',
                'information' => NULL,
                'sample_id' => 1024,
                'user_id' => 16,
                'created_at' => '2024-11-05 19:50:12',
                'updated_at' => '2024-11-05 19:50:12',
            ),
            441 => 
            array (
                'id' => 445,
                'code' => 'R9-11052024-MIC-1262',
                'information' => NULL,
                'sample_id' => 1025,
                'user_id' => 16,
                'created_at' => '2024-11-05 19:50:32',
                'updated_at' => '2024-11-05 19:50:32',
            ),
            442 => 
            array (
                'id' => 446,
                'code' => 'R9-11052024-MIC-1263',
                'information' => NULL,
                'sample_id' => 1026,
                'user_id' => 16,
                'created_at' => '2024-11-05 19:50:45',
                'updated_at' => '2024-11-05 19:50:45',
            ),
            443 => 
            array (
                'id' => 447,
                'code' => 'R9-11052024-MIC-1264',
                'information' => NULL,
                'sample_id' => 1030,
                'user_id' => 16,
                'created_at' => '2024-11-05 19:58:43',
                'updated_at' => '2024-11-05 19:58:43',
            ),
            444 => 
            array (
                'id' => 448,
                'code' => 'R9-11052024-MIC-1265',
                'information' => NULL,
                'sample_id' => 1031,
                'user_id' => 16,
                'created_at' => '2024-11-05 19:59:00',
                'updated_at' => '2024-11-05 19:59:00',
            ),
            445 => 
            array (
                'id' => 449,
                'code' => 'R9-11052024-MIC-1266',
                'information' => NULL,
                'sample_id' => 1032,
                'user_id' => 16,
                'created_at' => '2024-11-05 19:59:06',
                'updated_at' => '2024-11-05 19:59:06',
            ),
            446 => 
            array (
                'id' => 450,
                'code' => 'R9-11052024-MIC-1267',
                'information' => NULL,
                'sample_id' => 1033,
                'user_id' => 16,
                'created_at' => '2024-11-05 19:59:30',
                'updated_at' => '2024-11-05 19:59:30',
            ),
            447 => 
            array (
                'id' => 451,
                'code' => 'R9-11052024-MIC-1268',
                'information' => NULL,
                'sample_id' => 1034,
                'user_id' => 16,
                'created_at' => '2024-11-05 19:59:45',
                'updated_at' => '2024-11-05 19:59:45',
            ),
            448 => 
            array (
                'id' => 452,
                'code' => 'R9-11052024-MIC-1269',
                'information' => NULL,
                'sample_id' => 1038,
                'user_id' => 16,
                'created_at' => '2024-11-05 20:00:15',
                'updated_at' => '2024-11-05 20:00:15',
            ),
            449 => 
            array (
                'id' => 453,
                'code' => 'R9-11052024-MIC-1270',
                'information' => NULL,
                'sample_id' => 1039,
                'user_id' => 16,
                'created_at' => '2024-11-05 20:00:36',
                'updated_at' => '2024-11-05 20:00:36',
            ),
            450 => 
            array (
                'id' => 454,
                'code' => 'R9-11052024-MIC-1271',
                'information' => NULL,
                'sample_id' => 1040,
                'user_id' => 16,
                'created_at' => '2024-11-05 20:00:46',
                'updated_at' => '2024-11-05 20:00:46',
            ),
            451 => 
            array (
                'id' => 455,
                'code' => 'R9-11052024-MIC-1272',
                'information' => NULL,
                'sample_id' => 1041,
                'user_id' => 16,
                'created_at' => '2024-11-05 20:00:54',
                'updated_at' => '2024-11-05 20:00:54',
            ),
            452 => 
            array (
                'id' => 456,
                'code' => 'R9-11052024-MIC-1273',
                'information' => NULL,
                'sample_id' => 1042,
                'user_id' => 16,
                'created_at' => '2024-11-05 20:01:12',
                'updated_at' => '2024-11-05 20:01:12',
            ),
            453 => 
            array (
                'id' => 457,
                'code' => 'R9-11052024-MIC-1274',
                'information' => NULL,
                'sample_id' => 1043,
                'user_id' => 16,
                'created_at' => '2024-11-05 20:01:36',
                'updated_at' => '2024-11-05 20:01:36',
            ),
            454 => 
            array (
                'id' => 458,
                'code' => 'R9-11052024-MIC-1275',
                'information' => NULL,
                'sample_id' => 1044,
                'user_id' => 16,
                'created_at' => '2024-11-05 20:01:49',
                'updated_at' => '2024-11-05 20:01:49',
            ),
            455 => 
            array (
                'id' => 459,
                'code' => 'R9-11052024-MIC-1276',
                'information' => NULL,
                'sample_id' => 1045,
                'user_id' => 16,
                'created_at' => '2024-11-05 20:02:05',
                'updated_at' => '2024-11-05 20:02:05',
            ),
            456 => 
            array (
                'id' => 460,
                'code' => 'R9-11052024-MIC-1277',
                'information' => NULL,
                'sample_id' => 1046,
                'user_id' => 16,
                'created_at' => '2024-11-05 20:03:10',
                'updated_at' => '2024-11-05 20:03:10',
            ),
            457 => 
            array (
                'id' => 461,
                'code' => 'R9-11052024-MIC-1278',
                'information' => NULL,
                'sample_id' => 1056,
                'user_id' => 16,
                'created_at' => '2024-11-05 20:03:36',
                'updated_at' => '2024-11-05 20:03:36',
            ),
            458 => 
            array (
                'id' => 462,
                'code' => 'R9-11052024-MIC-1279',
                'information' => NULL,
                'sample_id' => 1057,
                'user_id' => 16,
                'created_at' => '2024-11-05 20:03:52',
                'updated_at' => '2024-11-05 20:03:52',
            ),
            459 => 
            array (
                'id' => 463,
                'code' => 'R9-11052024-MIC-1280',
                'information' => NULL,
                'sample_id' => 1058,
                'user_id' => 16,
                'created_at' => '2024-11-05 20:04:01',
                'updated_at' => '2024-11-05 20:04:01',
            ),
            460 => 
            array (
                'id' => 464,
                'code' => 'R9-11052024-MIC-1281',
                'information' => NULL,
                'sample_id' => 1059,
                'user_id' => 16,
                'created_at' => '2024-11-05 20:04:19',
                'updated_at' => '2024-11-05 20:04:19',
            ),
            461 => 
            array (
                'id' => 465,
                'code' => 'R9-11052024-MIC-1282',
                'information' => NULL,
                'sample_id' => 1060,
                'user_id' => 16,
                'created_at' => '2024-11-05 20:04:36',
                'updated_at' => '2024-11-05 20:04:36',
            ),
            462 => 
            array (
                'id' => 466,
                'code' => 'R9-11052024-MIC-1283',
                'information' => NULL,
                'sample_id' => 1061,
                'user_id' => 16,
                'created_at' => '2024-11-05 20:04:55',
                'updated_at' => '2024-11-05 20:04:55',
            ),
            463 => 
            array (
                'id' => 467,
                'code' => 'R9-11052024-MIC-1284',
                'information' => NULL,
                'sample_id' => 1111,
                'user_id' => 16,
                'created_at' => '2024-11-05 20:22:09',
                'updated_at' => '2024-11-05 20:22:09',
            ),
            464 => 
            array (
                'id' => 468,
                'code' => 'R9-11052024-MIC-1285',
                'information' => NULL,
                'sample_id' => 1112,
                'user_id' => 16,
                'created_at' => '2024-11-05 20:22:27',
                'updated_at' => '2024-11-05 20:22:27',
            ),
            465 => 
            array (
                'id' => 469,
                'code' => 'R9-11052024-MIC-1286',
                'information' => NULL,
                'sample_id' => 1113,
                'user_id' => 16,
                'created_at' => '2024-11-05 20:22:42',
                'updated_at' => '2024-11-05 20:22:42',
            ),
            466 => 
            array (
                'id' => 470,
                'code' => 'R9-11052024-MIC-1287',
                'information' => NULL,
                'sample_id' => 1114,
                'user_id' => 16,
                'created_at' => '2024-11-05 20:22:57',
                'updated_at' => '2024-11-05 20:22:57',
            ),
            467 => 
            array (
                'id' => 471,
                'code' => 'R9-11052024-MIC-1288',
                'information' => NULL,
                'sample_id' => 1115,
                'user_id' => 16,
                'created_at' => '2024-11-05 20:23:11',
                'updated_at' => '2024-11-05 20:23:11',
            ),
            468 => 
            array (
                'id' => 472,
                'code' => 'R9-11052024-MIC-1289',
                'information' => NULL,
                'sample_id' => 1116,
                'user_id' => 16,
                'created_at' => '2024-11-05 20:23:29',
                'updated_at' => '2024-11-05 20:23:29',
            ),
            469 => 
            array (
                'id' => 473,
                'code' => 'R9-11052024-MIC-1290',
                'information' => NULL,
                'sample_id' => 1117,
                'user_id' => 16,
                'created_at' => '2024-11-05 20:23:45',
                'updated_at' => '2024-11-05 20:23:45',
            ),
            470 => 
            array (
                'id' => 474,
                'code' => 'R9-11052024-MIC-1291',
                'information' => NULL,
                'sample_id' => 1118,
                'user_id' => 16,
                'created_at' => '2024-11-05 20:24:15',
                'updated_at' => '2024-11-05 20:24:15',
            ),
            471 => 
            array (
                'id' => 475,
                'code' => 'R9-11052024-MIC-1292',
                'information' => NULL,
                'sample_id' => 1119,
                'user_id' => 16,
                'created_at' => '2024-11-05 20:24:29',
                'updated_at' => '2024-11-05 20:24:29',
            ),
            472 => 
            array (
                'id' => 476,
                'code' => 'R9-11052024-MIC-1293',
                'information' => NULL,
                'sample_id' => 1120,
                'user_id' => 16,
                'created_at' => '2024-11-05 20:24:50',
                'updated_at' => '2024-11-05 20:24:50',
            ),
            473 => 
            array (
                'id' => 477,
                'code' => 'R9-11052024-MIC-1294',
                'information' => NULL,
                'sample_id' => 1121,
                'user_id' => 16,
                'created_at' => '2024-11-05 20:25:10',
                'updated_at' => '2024-11-05 20:25:10',
            ),
            474 => 
            array (
                'id' => 478,
                'code' => 'R9-11052024-MIC-1295',
                'information' => NULL,
                'sample_id' => 1122,
                'user_id' => 16,
                'created_at' => '2024-11-05 20:25:34',
                'updated_at' => '2024-11-05 20:25:34',
            ),
            475 => 
            array (
                'id' => 479,
                'code' => 'R9-11052024-MIC-1296',
                'information' => NULL,
                'sample_id' => 1123,
                'user_id' => 16,
                'created_at' => '2024-11-05 20:25:48',
                'updated_at' => '2024-11-05 20:25:48',
            ),
            476 => 
            array (
                'id' => 480,
                'code' => 'R9-11052024-MIC-1297',
                'information' => NULL,
                'sample_id' => 1124,
                'user_id' => 16,
                'created_at' => '2024-11-05 20:26:08',
                'updated_at' => '2024-11-05 20:26:08',
            ),
            477 => 
            array (
                'id' => 481,
                'code' => 'R9-11052024-MIC-1298',
                'information' => NULL,
                'sample_id' => 1125,
                'user_id' => 16,
                'created_at' => '2024-11-05 20:26:18',
                'updated_at' => '2024-11-05 20:26:18',
            ),
            478 => 
            array (
                'id' => 482,
                'code' => 'R9-11052024-MIC-1299',
                'information' => NULL,
                'sample_id' => 1126,
                'user_id' => 16,
                'created_at' => '2024-11-05 20:26:51',
                'updated_at' => '2024-11-05 20:26:51',
            ),
            479 => 
            array (
                'id' => 483,
                'code' => 'R9-11052024-MIC-1300',
                'information' => NULL,
                'sample_id' => 1127,
                'user_id' => 16,
                'created_at' => '2024-11-05 20:27:04',
                'updated_at' => '2024-11-05 20:27:04',
            ),
            480 => 
            array (
                'id' => 484,
                'code' => 'R9-11052024-MIC-1301',
                'information' => NULL,
                'sample_id' => 1035,
                'user_id' => 16,
                'created_at' => '2024-11-05 21:03:08',
                'updated_at' => '2024-11-05 21:03:08',
            ),
            481 => 
            array (
                'id' => 485,
                'code' => 'R9-11052024-CHE-1101',
                'information' => NULL,
                'sample_id' => 911,
                'user_id' => 6,
                'created_at' => '2024-11-05 21:37:57',
                'updated_at' => '2024-11-05 21:37:57',
            ),
            482 => 
            array (
                'id' => 486,
                'code' => 'R9-11052024-MIC-1302',
                'information' => NULL,
                'sample_id' => 1027,
                'user_id' => 16,
                'created_at' => '2024-11-05 23:11:36',
                'updated_at' => '2024-11-05 23:11:36',
            ),
            483 => 
            array (
                'id' => 487,
                'code' => 'R9-11052024-MIC-1303',
                'information' => NULL,
                'sample_id' => 1028,
                'user_id' => 16,
                'created_at' => '2024-11-05 23:11:50',
                'updated_at' => '2024-11-05 23:11:50',
            ),
            484 => 
            array (
                'id' => 488,
                'code' => 'R9-11052024-MIC-1304',
                'information' => NULL,
                'sample_id' => 1029,
                'user_id' => 16,
                'created_at' => '2024-11-05 23:12:04',
                'updated_at' => '2024-11-05 23:12:04',
            ),
            485 => 
            array (
                'id' => 489,
                'code' => 'R9-11062024-CHE-1102',
                'information' => NULL,
                'sample_id' => 1129,
                'user_id' => 7,
                'created_at' => '2024-11-06 16:20:57',
                'updated_at' => '2024-11-06 16:20:57',
            ),
            486 => 
            array (
                'id' => 490,
                'code' => 'R9-11062024-CHE-1103',
                'information' => NULL,
                'sample_id' => 827,
                'user_id' => 7,
                'created_at' => '2024-11-06 16:51:38',
                'updated_at' => '2024-11-06 16:51:38',
            ),
            487 => 
            array (
                'id' => 491,
                'code' => 'R9-11062024-CHE-1104',
                'information' => NULL,
                'sample_id' => 950,
                'user_id' => 7,
                'created_at' => '2024-11-06 17:12:50',
                'updated_at' => '2024-11-06 17:12:50',
            ),
            488 => 
            array (
                'id' => 492,
                'code' => 'R9-11062024-CHE-1105',
                'information' => NULL,
                'sample_id' => 951,
                'user_id' => 7,
                'created_at' => '2024-11-06 17:13:32',
                'updated_at' => '2024-11-06 17:13:32',
            ),
            489 => 
            array (
                'id' => 493,
                'code' => 'R9-11062024-CHE-1106',
                'information' => NULL,
                'sample_id' => 1023,
                'user_id' => 7,
                'created_at' => '2024-11-06 18:59:00',
                'updated_at' => '2024-11-06 18:59:00',
            ),
            490 => 
            array (
                'id' => 494,
                'code' => 'R9-11062024-CHE-1107',
                'information' => NULL,
                'sample_id' => 1022,
                'user_id' => 7,
                'created_at' => '2024-11-06 18:59:53',
                'updated_at' => '2024-11-06 18:59:53',
            ),
            491 => 
            array (
                'id' => 495,
                'code' => 'R9-11062024-MIC-1305',
                'information' => NULL,
                'sample_id' => 826,
                'user_id' => 16,
                'created_at' => '2024-11-06 20:01:49',
                'updated_at' => '2024-11-06 20:01:49',
            ),
            492 => 
            array (
                'id' => 496,
                'code' => 'R9-11062024-MIC-1306',
                'information' => NULL,
                'sample_id' => 882,
                'user_id' => 16,
                'created_at' => '2024-11-06 20:02:28',
                'updated_at' => '2024-11-06 20:02:28',
            ),
            493 => 
            array (
                'id' => 497,
                'code' => 'R9-11062024-MIC-1307',
                'information' => NULL,
                'sample_id' => 883,
                'user_id' => 16,
                'created_at' => '2024-11-06 20:02:59',
                'updated_at' => '2024-11-06 20:02:59',
            ),
            494 => 
            array (
                'id' => 498,
                'code' => 'R9-11062024-MIC-1308',
                'information' => NULL,
                'sample_id' => 884,
                'user_id' => 16,
                'created_at' => '2024-11-06 20:03:25',
                'updated_at' => '2024-11-06 20:03:25',
            ),
            495 => 
            array (
                'id' => 499,
                'code' => 'R9-11062024-MIC-1309',
                'information' => NULL,
                'sample_id' => 885,
                'user_id' => 16,
                'created_at' => '2024-11-06 20:03:49',
                'updated_at' => '2024-11-06 20:03:49',
            ),
            496 => 
            array (
                'id' => 500,
                'code' => 'R9-11062024-MIC-1310',
                'information' => NULL,
                'sample_id' => 965,
                'user_id' => 16,
                'created_at' => '2024-11-06 20:04:35',
                'updated_at' => '2024-11-06 20:04:35',
            ),
            497 => 
            array (
                'id' => 501,
                'code' => 'R9-11062024-MIC-1311',
                'information' => NULL,
                'sample_id' => 966,
                'user_id' => 16,
                'created_at' => '2024-11-06 20:04:51',
                'updated_at' => '2024-11-06 20:04:51',
            ),
            498 => 
            array (
                'id' => 502,
                'code' => 'R9-11062024-MIC-1312',
                'information' => NULL,
                'sample_id' => 1036,
                'user_id' => 16,
                'created_at' => '2024-11-06 20:09:21',
                'updated_at' => '2024-11-06 20:09:21',
            ),
            499 => 
            array (
                'id' => 503,
                'code' => 'R9-11062024-MIC-1313',
                'information' => NULL,
                'sample_id' => 1062,
                'user_id' => 16,
                'created_at' => '2024-11-06 20:09:37',
                'updated_at' => '2024-11-06 20:09:37',
            ),
        ));
        \DB::table('tsr_sample_reports')->insert(array (
            0 => 
            array (
                'id' => 504,
                'code' => 'R9-11062024-MIC-1314',
                'information' => NULL,
                'sample_id' => 1063,
                'user_id' => 16,
                'created_at' => '2024-11-06 20:09:47',
                'updated_at' => '2024-11-06 20:09:47',
            ),
            1 => 
            array (
                'id' => 505,
                'code' => 'R9-11062024-MIC-1315',
                'information' => NULL,
                'sample_id' => 1064,
                'user_id' => 16,
                'created_at' => '2024-11-06 20:10:04',
                'updated_at' => '2024-11-06 20:10:04',
            ),
            2 => 
            array (
                'id' => 506,
                'code' => 'R9-11062024-MIC-1316',
                'information' => NULL,
                'sample_id' => 1065,
                'user_id' => 16,
                'created_at' => '2024-11-06 20:10:19',
                'updated_at' => '2024-11-06 20:10:19',
            ),
            3 => 
            array (
                'id' => 507,
                'code' => 'R9-11062024-MIC-1317',
                'information' => NULL,
                'sample_id' => 1066,
                'user_id' => 16,
                'created_at' => '2024-11-06 20:10:49',
                'updated_at' => '2024-11-06 20:10:49',
            ),
            4 => 
            array (
                'id' => 508,
                'code' => 'R9-11062024-MIC-1318',
                'information' => NULL,
                'sample_id' => 1067,
                'user_id' => 16,
                'created_at' => '2024-11-06 20:11:05',
                'updated_at' => '2024-11-06 20:11:05',
            ),
            5 => 
            array (
                'id' => 509,
                'code' => 'R9-11062024-MIC-1319',
                'information' => NULL,
                'sample_id' => 1068,
                'user_id' => 16,
                'created_at' => '2024-11-06 20:11:15',
                'updated_at' => '2024-11-06 20:11:15',
            ),
            6 => 
            array (
                'id' => 510,
                'code' => 'R9-11062024-MIC-1320',
                'information' => NULL,
                'sample_id' => 1069,
                'user_id' => 16,
                'created_at' => '2024-11-06 20:11:28',
                'updated_at' => '2024-11-06 20:11:28',
            ),
            7 => 
            array (
                'id' => 511,
                'code' => 'R9-11062024-MIC-1321',
                'information' => NULL,
                'sample_id' => 1070,
                'user_id' => 16,
                'created_at' => '2024-11-06 20:12:00',
                'updated_at' => '2024-11-06 20:12:00',
            ),
            8 => 
            array (
                'id' => 512,
                'code' => 'R9-11062024-MIC-1322',
                'information' => NULL,
                'sample_id' => 1071,
                'user_id' => 16,
                'created_at' => '2024-11-06 20:12:21',
                'updated_at' => '2024-11-06 20:12:21',
            ),
            9 => 
            array (
                'id' => 513,
                'code' => 'R9-11062024-MIC-1323',
                'information' => NULL,
                'sample_id' => 1072,
                'user_id' => 16,
                'created_at' => '2024-11-06 20:12:29',
                'updated_at' => '2024-11-06 20:12:29',
            ),
            10 => 
            array (
                'id' => 514,
                'code' => 'R9-11062024-MIC-1324',
                'information' => NULL,
                'sample_id' => 1073,
                'user_id' => 16,
                'created_at' => '2024-11-06 20:12:44',
                'updated_at' => '2024-11-06 20:12:44',
            ),
            11 => 
            array (
                'id' => 515,
                'code' => 'R9-11062024-MIC-1325',
                'information' => NULL,
                'sample_id' => 1074,
                'user_id' => 16,
                'created_at' => '2024-11-06 20:13:11',
                'updated_at' => '2024-11-06 20:13:11',
            ),
            12 => 
            array (
                'id' => 516,
                'code' => 'R9-11062024-MIC-1326',
                'information' => NULL,
                'sample_id' => 1075,
                'user_id' => 16,
                'created_at' => '2024-11-06 20:13:30',
                'updated_at' => '2024-11-06 20:13:30',
            ),
            13 => 
            array (
                'id' => 517,
                'code' => 'R9-11062024-MIC-1327',
                'information' => NULL,
                'sample_id' => 1076,
                'user_id' => 16,
                'created_at' => '2024-11-06 20:13:38',
                'updated_at' => '2024-11-06 20:13:38',
            ),
            14 => 
            array (
                'id' => 518,
                'code' => 'R9-11062024-MIC-1328',
                'information' => NULL,
                'sample_id' => 1077,
                'user_id' => 16,
                'created_at' => '2024-11-06 20:13:49',
                'updated_at' => '2024-11-06 20:13:49',
            ),
            15 => 
            array (
                'id' => 519,
                'code' => 'R9-11062024-MIC-1329',
                'information' => NULL,
                'sample_id' => 1078,
                'user_id' => 16,
                'created_at' => '2024-11-06 20:14:25',
                'updated_at' => '2024-11-06 20:14:25',
            ),
            16 => 
            array (
                'id' => 520,
                'code' => 'R9-11062024-MIC-1330',
                'information' => NULL,
                'sample_id' => 1079,
                'user_id' => 16,
                'created_at' => '2024-11-06 20:14:42',
                'updated_at' => '2024-11-06 20:14:42',
            ),
            17 => 
            array (
                'id' => 521,
                'code' => 'R9-11062024-MIC-1331',
                'information' => NULL,
                'sample_id' => 1080,
                'user_id' => 16,
                'created_at' => '2024-11-06 20:14:49',
                'updated_at' => '2024-11-06 20:14:49',
            ),
            18 => 
            array (
                'id' => 522,
                'code' => 'R9-11062024-MIC-1332',
                'information' => NULL,
                'sample_id' => 1081,
                'user_id' => 16,
                'created_at' => '2024-11-06 20:15:04',
                'updated_at' => '2024-11-06 20:15:04',
            ),
            19 => 
            array (
                'id' => 523,
                'code' => 'R9-11062024-MIC-1333',
                'information' => NULL,
                'sample_id' => 1082,
                'user_id' => 16,
                'created_at' => '2024-11-06 20:15:30',
                'updated_at' => '2024-11-06 20:15:30',
            ),
            20 => 
            array (
                'id' => 524,
                'code' => 'R9-11062024-MIC-1334',
                'information' => NULL,
                'sample_id' => 1083,
                'user_id' => 16,
                'created_at' => '2024-11-06 20:15:45',
                'updated_at' => '2024-11-06 20:15:45',
            ),
            21 => 
            array (
                'id' => 525,
                'code' => 'R9-11062024-MIC-1335',
                'information' => NULL,
                'sample_id' => 1084,
                'user_id' => 16,
                'created_at' => '2024-11-06 20:16:00',
                'updated_at' => '2024-11-06 20:16:00',
            ),
            22 => 
            array (
                'id' => 526,
                'code' => 'R9-11062024-MIC-1336',
                'information' => NULL,
                'sample_id' => 1085,
                'user_id' => 16,
                'created_at' => '2024-11-06 20:16:10',
                'updated_at' => '2024-11-06 20:16:10',
            ),
            23 => 
            array (
                'id' => 527,
                'code' => 'R9-11062024-MIC-1337',
                'information' => NULL,
                'sample_id' => 1086,
                'user_id' => 16,
                'created_at' => '2024-11-06 20:16:37',
                'updated_at' => '2024-11-06 20:16:37',
            ),
            24 => 
            array (
                'id' => 528,
                'code' => 'R9-11062024-MIC-1338',
                'information' => NULL,
                'sample_id' => 1087,
                'user_id' => 16,
                'created_at' => '2024-11-06 20:16:57',
                'updated_at' => '2024-11-06 20:16:57',
            ),
            25 => 
            array (
                'id' => 529,
                'code' => 'R9-11062024-MIC-1339',
                'information' => NULL,
                'sample_id' => 1088,
                'user_id' => 16,
                'created_at' => '2024-11-06 20:17:09',
                'updated_at' => '2024-11-06 20:17:09',
            ),
            26 => 
            array (
                'id' => 530,
                'code' => 'R9-11062024-MIC-1340',
                'information' => NULL,
                'sample_id' => 1089,
                'user_id' => 16,
                'created_at' => '2024-11-06 20:17:24',
                'updated_at' => '2024-11-06 20:17:24',
            ),
            27 => 
            array (
                'id' => 531,
                'code' => 'R9-11062024-MET-1077',
                'information' => NULL,
                'sample_id' => 1206,
                'user_id' => 13,
                'created_at' => '2024-11-06 20:20:33',
                'updated_at' => '2024-11-06 20:20:33',
            ),
            28 => 
            array (
                'id' => 532,
                'code' => 'R9-11062024-CHE-1108',
                'information' => NULL,
                'sample_id' => 1163,
                'user_id' => 7,
                'created_at' => '2024-11-06 22:53:34',
                'updated_at' => '2024-11-06 22:53:34',
            ),
            29 => 
            array (
                'id' => 533,
                'code' => 'R9-11062024-CHE-1109',
                'information' => NULL,
                'sample_id' => 1090,
                'user_id' => 6,
                'created_at' => '2024-11-06 23:08:44',
                'updated_at' => '2024-11-06 23:08:44',
            ),
            30 => 
            array (
                'id' => 534,
                'code' => 'R9-11062024-CHE-1110',
                'information' => NULL,
                'sample_id' => 1160,
                'user_id' => 7,
                'created_at' => '2024-11-06 23:13:17',
                'updated_at' => '2024-11-06 23:13:17',
            ),
            31 => 
            array (
                'id' => 535,
                'code' => 'R9-11062024-CHE-1111',
                'information' => NULL,
                'sample_id' => 1161,
                'user_id' => 7,
                'created_at' => '2024-11-06 23:15:24',
                'updated_at' => '2024-11-06 23:15:24',
            ),
            32 => 
            array (
                'id' => 536,
                'code' => 'R9-11062024-CHE-1112',
                'information' => NULL,
                'sample_id' => 1162,
                'user_id' => 7,
                'created_at' => '2024-11-06 23:15:56',
                'updated_at' => '2024-11-06 23:15:56',
            ),
            33 => 
            array (
                'id' => 537,
                'code' => 'R9-11072024-MET-1078',
                'information' => NULL,
                'sample_id' => 475,
                'user_id' => 13,
                'created_at' => '2024-11-07 16:18:06',
                'updated_at' => '2024-11-07 16:18:06',
            ),
            34 => 
            array (
                'id' => 538,
                'code' => 'R9-11072024-MET-1079',
                'information' => NULL,
                'sample_id' => 476,
                'user_id' => 13,
                'created_at' => '2024-11-07 16:18:18',
                'updated_at' => '2024-11-07 16:18:18',
            ),
            35 => 
            array (
                'id' => 539,
                'code' => 'R9-11072024-MIC-1341',
                'information' => NULL,
                'sample_id' => 971,
                'user_id' => 16,
                'created_at' => '2024-11-07 17:11:26',
                'updated_at' => '2024-11-07 17:11:26',
            ),
            36 => 
            array (
                'id' => 540,
                'code' => 'R9-11072024-MIC-1342',
                'information' => NULL,
                'sample_id' => 1094,
                'user_id' => 16,
                'created_at' => '2024-11-07 17:12:01',
                'updated_at' => '2024-11-07 17:12:01',
            ),
            37 => 
            array (
                'id' => 541,
                'code' => 'R9-11072024-MIC-1343',
                'information' => NULL,
                'sample_id' => 1095,
                'user_id' => 16,
                'created_at' => '2024-11-07 17:12:20',
                'updated_at' => '2024-11-07 17:12:20',
            ),
            38 => 
            array (
                'id' => 542,
                'code' => 'R9-11072024-MIC-1344',
                'information' => NULL,
                'sample_id' => 1096,
                'user_id' => 16,
                'created_at' => '2024-11-07 17:12:30',
                'updated_at' => '2024-11-07 17:12:30',
            ),
            39 => 
            array (
                'id' => 543,
                'code' => 'R9-11072024-MIC-1345',
                'information' => NULL,
                'sample_id' => 1097,
                'user_id' => 16,
                'created_at' => '2024-11-07 17:12:43',
                'updated_at' => '2024-11-07 17:12:43',
            ),
            40 => 
            array (
                'id' => 544,
                'code' => 'R9-11072024-MIC-1346',
                'information' => NULL,
                'sample_id' => 1098,
                'user_id' => 16,
                'created_at' => '2024-11-07 17:13:21',
                'updated_at' => '2024-11-07 17:13:21',
            ),
            41 => 
            array (
                'id' => 545,
                'code' => 'R9-11072024-MIC-1347',
                'information' => NULL,
                'sample_id' => 1099,
                'user_id' => 16,
                'created_at' => '2024-11-07 17:13:36',
                'updated_at' => '2024-11-07 17:13:36',
            ),
            42 => 
            array (
                'id' => 546,
                'code' => 'R9-11072024-MIC-1348',
                'information' => NULL,
                'sample_id' => 1100,
                'user_id' => 16,
                'created_at' => '2024-11-07 17:13:47',
                'updated_at' => '2024-11-07 17:13:47',
            ),
            43 => 
            array (
                'id' => 547,
                'code' => 'R9-11072024-MIC-1349',
                'information' => NULL,
                'sample_id' => 1101,
                'user_id' => 16,
                'created_at' => '2024-11-07 17:14:13',
                'updated_at' => '2024-11-07 17:14:13',
            ),
            44 => 
            array (
                'id' => 548,
                'code' => 'R9-11072024-MIC-1350',
                'information' => NULL,
                'sample_id' => 1103,
                'user_id' => 16,
                'created_at' => '2024-11-07 17:14:43',
                'updated_at' => '2024-11-07 17:14:43',
            ),
            45 => 
            array (
                'id' => 549,
                'code' => 'R9-11072024-MIC-1351',
                'information' => NULL,
                'sample_id' => 1104,
                'user_id' => 16,
                'created_at' => '2024-11-07 17:15:03',
                'updated_at' => '2024-11-07 17:15:03',
            ),
            46 => 
            array (
                'id' => 550,
                'code' => 'R9-11072024-MIC-1352',
                'information' => NULL,
                'sample_id' => 1105,
                'user_id' => 16,
                'created_at' => '2024-11-07 17:15:13',
                'updated_at' => '2024-11-07 17:15:13',
            ),
            47 => 
            array (
                'id' => 551,
                'code' => 'R9-11072024-MIC-1353',
                'information' => NULL,
                'sample_id' => 1106,
                'user_id' => 16,
                'created_at' => '2024-11-07 17:15:40',
                'updated_at' => '2024-11-07 17:15:40',
            ),
            48 => 
            array (
                'id' => 552,
                'code' => 'R9-11072024-MIC-1354',
                'information' => NULL,
                'sample_id' => 1107,
                'user_id' => 16,
                'created_at' => '2024-11-07 17:15:56',
                'updated_at' => '2024-11-07 17:15:56',
            ),
            49 => 
            array (
                'id' => 553,
                'code' => 'R9-11072024-MIC-1355',
                'information' => NULL,
                'sample_id' => 1108,
                'user_id' => 16,
                'created_at' => '2024-11-07 17:16:08',
                'updated_at' => '2024-11-07 17:16:08',
            ),
            50 => 
            array (
                'id' => 554,
                'code' => 'R9-11072024-MIC-1356',
                'information' => NULL,
                'sample_id' => 1109,
                'user_id' => 16,
                'created_at' => '2024-11-07 17:16:29',
                'updated_at' => '2024-11-07 17:16:29',
            ),
            51 => 
            array (
                'id' => 555,
                'code' => 'R9-11072024-MIC-1357',
                'information' => NULL,
                'sample_id' => 1110,
                'user_id' => 16,
                'created_at' => '2024-11-07 17:16:45',
                'updated_at' => '2024-11-07 17:16:45',
            ),
            52 => 
            array (
                'id' => 556,
                'code' => 'R9-11072024-MIC-1358',
                'information' => NULL,
                'sample_id' => 1128,
                'user_id' => 16,
                'created_at' => '2024-11-07 17:20:09',
                'updated_at' => '2024-11-07 17:20:09',
            ),
            53 => 
            array (
                'id' => 557,
                'code' => 'R9-11072024-MIC-1359',
                'information' => NULL,
                'sample_id' => 1131,
                'user_id' => 16,
                'created_at' => '2024-11-07 17:22:06',
                'updated_at' => '2024-11-07 17:22:06',
            ),
            54 => 
            array (
                'id' => 558,
                'code' => 'R9-11072024-MIC-1360',
                'information' => NULL,
                'sample_id' => 1164,
                'user_id' => 16,
                'created_at' => '2024-11-07 17:24:26',
                'updated_at' => '2024-11-07 17:24:26',
            ),
            55 => 
            array (
                'id' => 559,
                'code' => 'R9-11072024-MIC-1361',
                'information' => NULL,
                'sample_id' => 1165,
                'user_id' => 16,
                'created_at' => '2024-11-07 17:24:36',
                'updated_at' => '2024-11-07 17:24:36',
            ),
            56 => 
            array (
                'id' => 560,
                'code' => 'R9-11072024-MIC-1362',
                'information' => NULL,
                'sample_id' => 1166,
                'user_id' => 16,
                'created_at' => '2024-11-07 17:24:48',
                'updated_at' => '2024-11-07 17:24:48',
            ),
            57 => 
            array (
                'id' => 561,
                'code' => 'R9-11072024-MET-1080',
                'information' => NULL,
                'sample_id' => 864,
                'user_id' => 13,
                'created_at' => '2024-11-07 18:22:02',
                'updated_at' => '2024-11-07 18:22:02',
            ),
            58 => 
            array (
                'id' => 562,
                'code' => 'R9-11072024-MET-1081',
                'information' => NULL,
                'sample_id' => 822,
                'user_id' => 12,
                'created_at' => '2024-11-07 21:49:18',
                'updated_at' => '2024-11-07 21:49:18',
            ),
            59 => 
            array (
                'id' => 563,
                'code' => 'R9-11072024-MET-1082',
                'information' => NULL,
                'sample_id' => 823,
                'user_id' => 12,
                'created_at' => '2024-11-07 21:50:15',
                'updated_at' => '2024-11-07 21:50:15',
            ),
            60 => 
            array (
                'id' => 564,
                'code' => 'R9-11072024-MET-1083',
                'information' => NULL,
                'sample_id' => 851,
                'user_id' => 12,
                'created_at' => '2024-11-07 21:51:52',
                'updated_at' => '2024-11-07 21:51:52',
            ),
            61 => 
            array (
                'id' => 565,
                'code' => 'R9-11072024-MET-1084',
                'information' => NULL,
                'sample_id' => 1092,
                'user_id' => 12,
                'created_at' => '2024-11-07 21:53:08',
                'updated_at' => '2024-11-07 21:53:08',
            ),
            62 => 
            array (
                'id' => 566,
                'code' => 'R9-11072024-MET-1085',
                'information' => NULL,
                'sample_id' => 1093,
                'user_id' => 12,
                'created_at' => '2024-11-07 21:54:38',
                'updated_at' => '2024-11-07 21:54:38',
            ),
            63 => 
            array (
                'id' => 567,
                'code' => 'R9-11082024-CHE-1113',
                'information' => NULL,
                'sample_id' => 808,
                'user_id' => 7,
                'created_at' => '2024-11-08 16:06:29',
                'updated_at' => '2024-11-08 16:06:29',
            ),
            64 => 
            array (
                'id' => 568,
                'code' => 'R9-11082024-CHE-1114',
                'information' => NULL,
                'sample_id' => 809,
                'user_id' => 7,
                'created_at' => '2024-11-08 16:09:32',
                'updated_at' => '2024-11-08 16:09:32',
            ),
            65 => 
            array (
                'id' => 569,
                'code' => 'R9-11082024-CHE-1115',
                'information' => NULL,
                'sample_id' => 829,
                'user_id' => 7,
                'created_at' => '2024-11-08 16:14:34',
                'updated_at' => '2024-11-08 16:14:34',
            ),
            66 => 
            array (
                'id' => 570,
                'code' => 'R9-11082024-CHE-1116',
                'information' => NULL,
                'sample_id' => 841,
                'user_id' => 7,
                'created_at' => '2024-11-08 16:16:12',
                'updated_at' => '2024-11-08 16:16:12',
            ),
            67 => 
            array (
                'id' => 571,
                'code' => 'R9-11082024-CHE-1117',
                'information' => NULL,
                'sample_id' => 842,
                'user_id' => 7,
                'created_at' => '2024-11-08 16:31:16',
                'updated_at' => '2024-11-08 16:31:16',
            ),
            68 => 
            array (
                'id' => 572,
                'code' => 'R9-11082024-CHE-1118',
                'information' => NULL,
                'sample_id' => 845,
                'user_id' => 7,
                'created_at' => '2024-11-08 16:32:10',
                'updated_at' => '2024-11-08 16:32:10',
            ),
            69 => 
            array (
                'id' => 573,
                'code' => 'R9-11082024-CHE-1119',
                'information' => NULL,
                'sample_id' => 848,
                'user_id' => 7,
                'created_at' => '2024-11-08 16:32:58',
                'updated_at' => '2024-11-08 16:32:58',
            ),
            70 => 
            array (
                'id' => 574,
                'code' => 'R9-11082024-MET-1086',
                'information' => NULL,
                'sample_id' => 1234,
                'user_id' => 13,
                'created_at' => '2024-11-08 18:22:55',
                'updated_at' => '2024-11-08 18:22:55',
            ),
            71 => 
            array (
                'id' => 575,
                'code' => 'R9-11082024-MET-1087',
                'information' => NULL,
                'sample_id' => 583,
                'user_id' => 13,
                'created_at' => '2024-11-08 19:05:49',
                'updated_at' => '2024-11-08 19:05:49',
            ),
            72 => 
            array (
                'id' => 576,
                'code' => 'R9-11082024-MET-1088',
                'information' => NULL,
                'sample_id' => 584,
                'user_id' => 13,
                'created_at' => '2024-11-08 19:06:31',
                'updated_at' => '2024-11-08 19:06:31',
            ),
            73 => 
            array (
                'id' => 577,
                'code' => 'R9-11082024-MET-1089',
                'information' => NULL,
                'sample_id' => 585,
                'user_id' => 13,
                'created_at' => '2024-11-08 19:06:50',
                'updated_at' => '2024-11-08 19:06:50',
            ),
            74 => 
            array (
                'id' => 578,
                'code' => 'R9-11082024-MET-1090',
                'information' => NULL,
                'sample_id' => 586,
                'user_id' => 13,
                'created_at' => '2024-11-08 19:07:12',
                'updated_at' => '2024-11-08 19:07:12',
            ),
            75 => 
            array (
                'id' => 579,
                'code' => 'R9-11082024-MET-1091',
                'information' => NULL,
                'sample_id' => 587,
                'user_id' => 13,
                'created_at' => '2024-11-08 19:07:50',
                'updated_at' => '2024-11-08 19:07:50',
            ),
            76 => 
            array (
                'id' => 580,
                'code' => 'R9-11082024-MET-1092',
                'information' => NULL,
                'sample_id' => 588,
                'user_id' => 13,
                'created_at' => '2024-11-08 19:08:15',
                'updated_at' => '2024-11-08 19:08:15',
            ),
            77 => 
            array (
                'id' => 581,
                'code' => 'R9-11082024-MET-1093',
                'information' => NULL,
                'sample_id' => 589,
                'user_id' => 13,
                'created_at' => '2024-11-08 19:08:42',
                'updated_at' => '2024-11-08 19:08:42',
            ),
            78 => 
            array (
                'id' => 582,
                'code' => 'R9-11082024-MET-1094',
                'information' => NULL,
                'sample_id' => 1170,
                'user_id' => 13,
                'created_at' => '2024-11-08 19:10:47',
                'updated_at' => '2024-11-08 19:10:47',
            ),
            79 => 
            array (
                'id' => 583,
                'code' => 'R9-11082024-MIC-1363',
                'information' => NULL,
                'sample_id' => 1179,
                'user_id' => 21,
                'created_at' => '2024-11-08 19:28:56',
                'updated_at' => '2024-11-08 19:28:56',
            ),
            80 => 
            array (
                'id' => 584,
                'code' => 'R9-11082024-MIC-1364',
                'information' => NULL,
                'sample_id' => 1180,
                'user_id' => 21,
                'created_at' => '2024-11-08 19:29:17',
                'updated_at' => '2024-11-08 19:29:17',
            ),
            81 => 
            array (
                'id' => 585,
                'code' => 'R9-11082024-MIC-1365',
                'information' => NULL,
                'sample_id' => 1181,
                'user_id' => 21,
                'created_at' => '2024-11-08 19:29:54',
                'updated_at' => '2024-11-08 19:29:54',
            ),
            82 => 
            array (
                'id' => 586,
                'code' => 'R9-11082024-MIC-1366',
                'information' => NULL,
                'sample_id' => 1182,
                'user_id' => 21,
                'created_at' => '2024-11-08 19:30:18',
                'updated_at' => '2024-11-08 19:30:18',
            ),
            83 => 
            array (
                'id' => 587,
                'code' => 'R9-11082024-MIC-1367',
                'information' => NULL,
                'sample_id' => 1183,
                'user_id' => 21,
                'created_at' => '2024-11-08 19:30:33',
                'updated_at' => '2024-11-08 19:30:33',
            ),
            84 => 
            array (
                'id' => 588,
                'code' => 'R9-11082024-MIC-1368',
                'information' => NULL,
                'sample_id' => 1184,
                'user_id' => 21,
                'created_at' => '2024-11-08 19:30:55',
                'updated_at' => '2024-11-08 19:30:55',
            ),
            85 => 
            array (
                'id' => 589,
                'code' => 'R9-11082024-MIC-1369',
                'information' => NULL,
                'sample_id' => 937,
                'user_id' => 21,
                'created_at' => '2024-11-08 20:39:19',
                'updated_at' => '2024-11-08 20:39:19',
            ),
            86 => 
            array (
                'id' => 590,
                'code' => 'R9-11082024-CHE-1120',
                'information' => NULL,
                'sample_id' => 847,
                'user_id' => 7,
                'created_at' => '2024-11-08 20:50:43',
                'updated_at' => '2024-11-08 20:50:43',
            ),
            87 => 
            array (
                'id' => 591,
                'code' => 'R9-11082024-MIC-1370',
                'information' => NULL,
                'sample_id' => 942,
                'user_id' => 21,
                'created_at' => '2024-11-08 21:13:19',
                'updated_at' => '2024-11-08 21:13:19',
            ),
            88 => 
            array (
                'id' => 592,
                'code' => 'R9-11082024-MIC-1371',
                'information' => NULL,
                'sample_id' => 952,
                'user_id' => 21,
                'created_at' => '2024-11-08 21:42:40',
                'updated_at' => '2024-11-08 21:42:40',
            ),
            89 => 
            array (
                'id' => 593,
                'code' => 'R9-11082024-MET-1095',
                'information' => NULL,
                'sample_id' => 1130,
                'user_id' => 12,
                'created_at' => '2024-11-08 22:03:36',
                'updated_at' => '2024-11-08 22:03:36',
            ),
            90 => 
            array (
                'id' => 594,
                'code' => 'R9-11082024-MET-1096',
                'information' => NULL,
                'sample_id' => 569,
                'user_id' => 13,
                'created_at' => '2024-11-08 22:17:44',
                'updated_at' => '2024-11-08 22:17:44',
            ),
            91 => 
            array (
                'id' => 595,
                'code' => 'R9-11082024-MET-1097',
                'information' => NULL,
                'sample_id' => 956,
                'user_id' => 13,
                'created_at' => '2024-11-08 22:18:47',
                'updated_at' => '2024-11-08 22:18:47',
            ),
            92 => 
            array (
                'id' => 596,
                'code' => 'R9-11082024-MET-1098',
                'information' => NULL,
                'sample_id' => 960,
                'user_id' => 13,
                'created_at' => '2024-11-08 22:19:49',
                'updated_at' => '2024-11-08 22:19:49',
            ),
            93 => 
            array (
                'id' => 597,
                'code' => 'R9-11082024-MET-1099',
                'information' => NULL,
                'sample_id' => 958,
                'user_id' => 13,
                'created_at' => '2024-11-08 22:22:16',
                'updated_at' => '2024-11-08 22:22:16',
            ),
            94 => 
            array (
                'id' => 598,
                'code' => 'R9-11082024-MET-1100',
                'information' => NULL,
                'sample_id' => 957,
                'user_id' => 13,
                'created_at' => '2024-11-08 22:22:56',
                'updated_at' => '2024-11-08 22:22:56',
            ),
            95 => 
            array (
                'id' => 599,
                'code' => 'R9-11082024-MET-1101',
                'information' => NULL,
                'sample_id' => 959,
                'user_id' => 13,
                'created_at' => '2024-11-08 22:24:18',
                'updated_at' => '2024-11-08 22:24:18',
            ),
            96 => 
            array (
                'id' => 600,
                'code' => 'R9-11082024-MIC-1372',
                'information' => NULL,
                'sample_id' => 972,
                'user_id' => 21,
                'created_at' => '2024-11-08 22:24:20',
                'updated_at' => '2024-11-08 22:24:20',
            ),
            97 => 
            array (
                'id' => 601,
                'code' => 'R9-11082024-MET-1102',
                'information' => NULL,
                'sample_id' => 1155,
                'user_id' => 13,
                'created_at' => '2024-11-08 22:24:46',
                'updated_at' => '2024-11-08 22:24:46',
            ),
            98 => 
            array (
                'id' => 602,
                'code' => 'R9-11082024-MET-1103',
                'information' => NULL,
                'sample_id' => 1204,
                'user_id' => 13,
                'created_at' => '2024-11-08 22:25:18',
                'updated_at' => '2024-11-08 22:25:18',
            ),
            99 => 
            array (
                'id' => 603,
                'code' => 'R9-11082024-MET-1104',
                'information' => NULL,
                'sample_id' => 671,
                'user_id' => 13,
                'created_at' => '2024-11-08 22:25:52',
                'updated_at' => '2024-11-08 22:25:52',
            ),
            100 => 
            array (
                'id' => 604,
                'code' => 'R9-11082024-MET-1105',
                'information' => NULL,
                'sample_id' => 646,
                'user_id' => 13,
                'created_at' => '2024-11-08 22:26:25',
                'updated_at' => '2024-11-08 22:26:25',
            ),
            101 => 
            array (
                'id' => 605,
                'code' => 'R9-11082024-MET-1106',
                'information' => NULL,
                'sample_id' => 700,
                'user_id' => 13,
                'created_at' => '2024-11-08 22:27:10',
                'updated_at' => '2024-11-08 22:27:10',
            ),
            102 => 
            array (
                'id' => 606,
                'code' => 'R9-11082024-CHE-1121',
                'information' => NULL,
                'sample_id' => 844,
                'user_id' => 7,
                'created_at' => '2024-11-09 00:14:16',
                'updated_at' => '2024-11-09 00:14:16',
            ),
            103 => 
            array (
                'id' => 607,
                'code' => 'R9-11082024-MIC-1373',
                'information' => NULL,
                'sample_id' => 946,
                'user_id' => 21,
                'created_at' => '2024-11-09 00:14:41',
                'updated_at' => '2024-11-09 00:14:41',
            ),
            104 => 
            array (
                'id' => 608,
                'code' => 'R9-11082024-CHE-1122',
                'information' => NULL,
                'sample_id' => 825,
                'user_id' => 7,
                'created_at' => '2024-11-09 00:14:52',
                'updated_at' => '2024-11-09 00:14:52',
            ),
            105 => 
            array (
                'id' => 609,
                'code' => 'R9-11082024-CHE-1123',
                'information' => NULL,
                'sample_id' => 1001,
                'user_id' => 8,
                'created_at' => '2024-11-09 00:41:53',
                'updated_at' => '2024-11-09 00:41:53',
            ),
            106 => 
            array (
                'id' => 610,
                'code' => 'R9-11082024-CHE-1124',
                'information' => NULL,
                'sample_id' => 828,
                'user_id' => 7,
                'created_at' => '2024-11-09 00:44:59',
                'updated_at' => '2024-11-09 00:44:59',
            ),
            107 => 
            array (
                'id' => 611,
                'code' => 'R9-11112024-MET-1107',
                'information' => NULL,
                'sample_id' => 967,
                'user_id' => 12,
                'created_at' => '2024-11-11 17:42:36',
                'updated_at' => '2024-11-11 17:42:36',
            ),
            108 => 
            array (
                'id' => 612,
                'code' => 'R9-11112024-MET-1108',
                'information' => NULL,
                'sample_id' => 968,
                'user_id' => 12,
                'created_at' => '2024-11-11 17:44:15',
                'updated_at' => '2024-11-11 17:44:15',
            ),
            109 => 
            array (
                'id' => 613,
                'code' => 'R9-11112024-MIC-1374',
                'information' => NULL,
                'sample_id' => 908,
                'user_id' => 16,
                'created_at' => '2024-11-11 18:47:12',
                'updated_at' => '2024-11-11 18:47:12',
            ),
            110 => 
            array (
                'id' => 614,
                'code' => 'R9-11112024-MIC-1375',
                'information' => NULL,
                'sample_id' => 939,
                'user_id' => 16,
                'created_at' => '2024-11-11 18:47:54',
                'updated_at' => '2024-11-11 18:47:54',
            ),
            111 => 
            array (
                'id' => 615,
                'code' => 'R9-11112024-MIC-1376',
                'information' => NULL,
                'sample_id' => 940,
                'user_id' => 16,
                'created_at' => '2024-11-11 18:48:13',
                'updated_at' => '2024-11-11 18:48:13',
            ),
            112 => 
            array (
                'id' => 616,
                'code' => 'R9-11112024-CHE-1125',
                'information' => NULL,
                'sample_id' => 938,
                'user_id' => 6,
                'created_at' => '2024-11-11 19:21:53',
                'updated_at' => '2024-11-11 19:21:53',
            ),
            113 => 
            array (
                'id' => 617,
                'code' => 'R9-11112024-MET-1109',
                'information' => NULL,
                'sample_id' => 1287,
                'user_id' => 12,
                'created_at' => '2024-11-11 19:22:34',
                'updated_at' => '2024-11-11 19:22:34',
            ),
            114 => 
            array (
                'id' => 618,
                'code' => 'R9-11112024-MIC-1377',
                'information' => NULL,
                'sample_id' => 1185,
                'user_id' => 16,
                'created_at' => '2024-11-11 22:13:11',
                'updated_at' => '2024-11-11 22:13:11',
            ),
            115 => 
            array (
                'id' => 619,
                'code' => 'R9-11112024-MIC-1378',
                'information' => NULL,
                'sample_id' => 1186,
                'user_id' => 16,
                'created_at' => '2024-11-11 22:13:33',
                'updated_at' => '2024-11-11 22:13:33',
            ),
            116 => 
            array (
                'id' => 620,
                'code' => 'R9-11112024-MIC-1379',
                'information' => NULL,
                'sample_id' => 1190,
                'user_id' => 16,
                'created_at' => '2024-11-12 04:36:26',
                'updated_at' => '2024-11-12 04:36:26',
            ),
            117 => 
            array (
                'id' => 621,
                'code' => 'R9-11112024-MIC-1380',
                'information' => NULL,
                'sample_id' => 1191,
                'user_id' => 16,
                'created_at' => '2024-11-12 04:58:54',
                'updated_at' => '2024-11-12 04:58:54',
            ),
            118 => 
            array (
                'id' => 622,
                'code' => 'R9-11112024-MIC-1381',
                'information' => NULL,
                'sample_id' => 1196,
                'user_id' => 16,
                'created_at' => '2024-11-12 05:16:03',
                'updated_at' => '2024-11-12 05:16:03',
            ),
            119 => 
            array (
                'id' => 623,
                'code' => 'R9-11112024-MIC-1382',
                'information' => NULL,
                'sample_id' => 1197,
                'user_id' => 16,
                'created_at' => '2024-11-12 05:17:17',
                'updated_at' => '2024-11-12 05:17:17',
            ),
            120 => 
            array (
                'id' => 624,
                'code' => 'R9-11112024-MIC-1383',
                'information' => NULL,
                'sample_id' => 1198,
                'user_id' => 16,
                'created_at' => '2024-11-12 05:17:33',
                'updated_at' => '2024-11-12 05:17:33',
            ),
            121 => 
            array (
                'id' => 625,
                'code' => 'R9-11112024-MIC-1384',
                'information' => NULL,
                'sample_id' => 1199,
                'user_id' => 16,
                'created_at' => '2024-11-12 05:17:51',
                'updated_at' => '2024-11-12 05:17:51',
            ),
            122 => 
            array (
                'id' => 626,
                'code' => 'R9-11112024-MIC-1385',
                'information' => NULL,
                'sample_id' => 1205,
                'user_id' => 16,
                'created_at' => '2024-11-12 05:18:33',
                'updated_at' => '2024-11-12 05:18:33',
            ),
            123 => 
            array (
                'id' => 627,
                'code' => 'R9-11112024-MIC-1386',
                'information' => NULL,
                'sample_id' => 1207,
                'user_id' => 16,
                'created_at' => '2024-11-12 05:19:16',
                'updated_at' => '2024-11-12 05:19:16',
            ),
            124 => 
            array (
                'id' => 628,
                'code' => 'R9-11112024-MIC-1387',
                'information' => NULL,
                'sample_id' => 1208,
                'user_id' => 16,
                'created_at' => '2024-11-12 05:19:35',
                'updated_at' => '2024-11-12 05:19:35',
            ),
            125 => 
            array (
                'id' => 629,
                'code' => 'R9-11112024-MIC-1388',
                'information' => NULL,
                'sample_id' => 1209,
                'user_id' => 16,
                'created_at' => '2024-11-12 05:20:11',
                'updated_at' => '2024-11-12 05:20:11',
            ),
            126 => 
            array (
                'id' => 630,
                'code' => 'R9-11112024-MIC-1389',
                'information' => NULL,
                'sample_id' => 1212,
                'user_id' => 16,
                'created_at' => '2024-11-12 05:22:09',
                'updated_at' => '2024-11-12 05:22:09',
            ),
            127 => 
            array (
                'id' => 631,
                'code' => 'R9-11112024-MIC-1390',
                'information' => NULL,
                'sample_id' => 1216,
                'user_id' => 16,
                'created_at' => '2024-11-12 05:22:53',
                'updated_at' => '2024-11-12 05:22:53',
            ),
            128 => 
            array (
                'id' => 632,
                'code' => 'R9-11122024-CHE-1126',
                'information' => NULL,
                'sample_id' => 941,
                'user_id' => 7,
                'created_at' => '2024-11-12 17:52:07',
                'updated_at' => '2024-11-12 17:52:07',
            ),
            129 => 
            array (
                'id' => 633,
                'code' => 'R9-11122024-CHE-1127',
                'information' => NULL,
                'sample_id' => 1091,
                'user_id' => 8,
                'created_at' => '2024-11-12 18:07:04',
                'updated_at' => '2024-11-12 18:07:04',
            ),
            130 => 
            array (
                'id' => 634,
                'code' => 'R9-11122024-CHE-1128',
                'information' => NULL,
                'sample_id' => 1145,
                'user_id' => 8,
                'created_at' => '2024-11-12 18:08:01',
                'updated_at' => '2024-11-12 18:08:01',
            ),
            131 => 
            array (
                'id' => 635,
                'code' => 'R9-11122024-CHE-1129',
                'information' => NULL,
                'sample_id' => 1146,
                'user_id' => 8,
                'created_at' => '2024-11-12 18:08:19',
                'updated_at' => '2024-11-12 18:08:19',
            ),
            132 => 
            array (
                'id' => 636,
                'code' => 'R9-11122024-CHE-1130',
                'information' => NULL,
                'sample_id' => 1147,
                'user_id' => 8,
                'created_at' => '2024-11-12 18:08:47',
                'updated_at' => '2024-11-12 18:08:47',
            ),
            133 => 
            array (
                'id' => 637,
                'code' => 'R9-11122024-CHE-1131',
                'information' => NULL,
                'sample_id' => 1148,
                'user_id' => 8,
                'created_at' => '2024-11-12 18:09:02',
                'updated_at' => '2024-11-12 18:09:02',
            ),
            134 => 
            array (
                'id' => 638,
                'code' => 'R9-11122024-MET-1110',
                'information' => NULL,
                'sample_id' => 1304,
                'user_id' => 12,
                'created_at' => '2024-11-12 18:42:46',
                'updated_at' => '2024-11-12 18:42:46',
            ),
            135 => 
            array (
                'id' => 639,
                'code' => 'R9-11122024-MIC-1391',
                'information' => NULL,
                'sample_id' => 1217,
                'user_id' => 16,
                'created_at' => '2024-11-12 19:00:24',
                'updated_at' => '2024-11-12 19:00:24',
            ),
            136 => 
            array (
                'id' => 640,
                'code' => 'R9-11122024-MET-1111',
                'information' => NULL,
                'sample_id' => 1364,
                'user_id' => 12,
                'created_at' => '2024-11-12 22:49:46',
                'updated_at' => '2024-11-12 22:49:46',
            ),
            137 => 
            array (
                'id' => 641,
                'code' => 'R9-11122024-CHE-1132',
                'information' => NULL,
                'sample_id' => 1171,
                'user_id' => 7,
                'created_at' => '2024-11-13 00:28:12',
                'updated_at' => '2024-11-13 00:28:12',
            ),
            138 => 
            array (
                'id' => 642,
                'code' => 'R9-11122024-CHE-1133',
                'information' => NULL,
                'sample_id' => 1172,
                'user_id' => 7,
                'created_at' => '2024-11-13 00:28:49',
                'updated_at' => '2024-11-13 00:28:49',
            ),
            139 => 
            array (
                'id' => 643,
                'code' => 'R9-11122024-CHE-1134',
                'information' => NULL,
                'sample_id' => 1173,
                'user_id' => 7,
                'created_at' => '2024-11-13 00:28:58',
                'updated_at' => '2024-11-13 00:28:58',
            ),
            140 => 
            array (
                'id' => 644,
                'code' => 'R9-11122024-CHE-1135',
                'information' => NULL,
                'sample_id' => 1174,
                'user_id' => 7,
                'created_at' => '2024-11-13 00:29:20',
                'updated_at' => '2024-11-13 00:29:20',
            ),
            141 => 
            array (
                'id' => 645,
                'code' => 'R9-11122024-CHE-1136',
                'information' => NULL,
                'sample_id' => 1175,
                'user_id' => 7,
                'created_at' => '2024-11-13 00:29:37',
                'updated_at' => '2024-11-13 00:29:37',
            ),
            142 => 
            array (
                'id' => 646,
                'code' => 'R9-11122024-CHE-1137',
                'information' => NULL,
                'sample_id' => 1176,
                'user_id' => 7,
                'created_at' => '2024-11-13 00:29:45',
                'updated_at' => '2024-11-13 00:29:45',
            ),
            143 => 
            array (
                'id' => 647,
                'code' => 'R9-11132024-CHE-1138',
                'information' => NULL,
                'sample_id' => 993,
                'user_id' => 8,
                'created_at' => '2024-11-13 21:17:41',
                'updated_at' => '2024-11-13 21:17:41',
            ),
            144 => 
            array (
                'id' => 648,
                'code' => 'R9-11132024-CHE-1139',
                'information' => NULL,
                'sample_id' => 994,
                'user_id' => 8,
                'created_at' => '2024-11-13 21:18:00',
                'updated_at' => '2024-11-13 21:18:00',
            ),
            145 => 
            array (
                'id' => 649,
                'code' => 'R9-11132024-CHE-1140',
                'information' => NULL,
                'sample_id' => 995,
                'user_id' => 8,
                'created_at' => '2024-11-13 21:18:13',
                'updated_at' => '2024-11-13 21:18:13',
            ),
            146 => 
            array (
                'id' => 650,
                'code' => 'R9-11132024-MET-1112',
                'information' => NULL,
                'sample_id' => 1375,
                'user_id' => 12,
                'created_at' => '2024-11-13 23:09:00',
                'updated_at' => '2024-11-13 23:09:00',
            ),
            147 => 
            array (
                'id' => 651,
                'code' => 'R9-11142024-CHE-1141',
                'information' => NULL,
                'sample_id' => 838,
                'user_id' => 8,
                'created_at' => '2024-11-14 08:41:25',
                'updated_at' => '2024-11-14 08:41:25',
            ),
            148 => 
            array (
                'id' => 652,
                'code' => 'R9-11142024-CHE-1142',
                'information' => NULL,
                'sample_id' => 936,
                'user_id' => 8,
                'created_at' => '2024-11-14 15:31:40',
                'updated_at' => '2024-11-14 15:31:40',
            ),
            149 => 
            array (
                'id' => 653,
                'code' => 'R9-11142024-CHE-1143',
                'information' => NULL,
                'sample_id' => 973,
                'user_id' => 8,
                'created_at' => '2024-11-14 15:33:28',
                'updated_at' => '2024-11-14 15:33:28',
            ),
            150 => 
            array (
                'id' => 654,
                'code' => 'R9-11142024-CHE-1144',
                'information' => NULL,
                'sample_id' => 1193,
                'user_id' => 8,
                'created_at' => '2024-11-14 19:03:21',
                'updated_at' => '2024-11-14 19:03:21',
            ),
            151 => 
            array (
                'id' => 655,
                'code' => 'R9-11142024-CHE-1145',
                'information' => NULL,
                'sample_id' => 1193,
                'user_id' => 8,
                'created_at' => '2024-11-14 19:03:27',
                'updated_at' => '2024-11-14 19:03:27',
            ),
            152 => 
            array (
                'id' => 656,
                'code' => 'R9-11142024-CHE-1146',
                'information' => NULL,
                'sample_id' => 1194,
                'user_id' => 8,
                'created_at' => '2024-11-14 19:04:27',
                'updated_at' => '2024-11-14 19:04:27',
            ),
            153 => 
            array (
                'id' => 657,
                'code' => 'R9-11142024-CHE-1147',
                'information' => NULL,
                'sample_id' => 1195,
                'user_id' => 8,
                'created_at' => '2024-11-14 19:04:41',
                'updated_at' => '2024-11-14 19:04:41',
            ),
            154 => 
            array (
                'id' => 658,
                'code' => 'R9-11142024-MET-1113',
                'information' => NULL,
                'sample_id' => 1381,
                'user_id' => 12,
                'created_at' => '2024-11-14 19:22:52',
                'updated_at' => '2024-11-14 19:22:52',
            ),
            155 => 
            array (
                'id' => 659,
                'code' => 'R9-11142024-MET-1114',
                'information' => NULL,
                'sample_id' => 767,
                'user_id' => 13,
                'created_at' => '2024-11-14 21:40:36',
                'updated_at' => '2024-11-14 21:40:36',
            ),
            156 => 
            array (
                'id' => 660,
                'code' => 'R9-11142024-MET-1115',
                'information' => NULL,
                'sample_id' => 768,
                'user_id' => 13,
                'created_at' => '2024-11-14 21:40:57',
                'updated_at' => '2024-11-14 21:40:57',
            ),
            157 => 
            array (
                'id' => 661,
                'code' => 'R9-11142024-MET-1116',
                'information' => NULL,
                'sample_id' => 769,
                'user_id' => 13,
                'created_at' => '2024-11-14 21:41:13',
                'updated_at' => '2024-11-14 21:41:13',
            ),
            158 => 
            array (
                'id' => 662,
                'code' => 'R9-11142024-MET-1117',
                'information' => NULL,
                'sample_id' => 770,
                'user_id' => 13,
                'created_at' => '2024-11-14 21:41:31',
                'updated_at' => '2024-11-14 21:41:31',
            ),
            159 => 
            array (
                'id' => 663,
                'code' => 'R9-11142024-CHE-1148',
                'information' => NULL,
                'sample_id' => 943,
                'user_id' => 8,
                'created_at' => '2024-11-14 23:41:48',
                'updated_at' => '2024-11-14 23:41:48',
            ),
            160 => 
            array (
                'id' => 664,
                'code' => 'R9-11152024-CHE-1149',
                'information' => NULL,
                'sample_id' => 1213,
                'user_id' => 8,
                'created_at' => '2024-11-15 16:54:50',
                'updated_at' => '2024-11-15 16:54:50',
            ),
            161 => 
            array (
                'id' => 665,
                'code' => 'R9-11152024-CHE-1150',
                'information' => NULL,
                'sample_id' => 1214,
                'user_id' => 8,
                'created_at' => '2024-11-15 16:55:25',
                'updated_at' => '2024-11-15 16:55:25',
            ),
            162 => 
            array (
                'id' => 666,
                'code' => 'R9-11152024-CHE-1151',
                'information' => NULL,
                'sample_id' => 1215,
                'user_id' => 8,
                'created_at' => '2024-11-15 16:56:28',
                'updated_at' => '2024-11-15 16:56:28',
            ),
            163 => 
            array (
                'id' => 667,
                'code' => 'R9-11152024-MET-1118',
                'information' => NULL,
                'sample_id' => 543,
                'user_id' => 12,
                'created_at' => '2024-11-15 17:14:42',
                'updated_at' => '2024-11-15 17:14:42',
            ),
            164 => 
            array (
                'id' => 668,
                'code' => 'R9-11152024-MET-1119',
                'information' => NULL,
                'sample_id' => 544,
                'user_id' => 12,
                'created_at' => '2024-11-15 17:15:16',
                'updated_at' => '2024-11-15 17:15:16',
            ),
            165 => 
            array (
                'id' => 669,
                'code' => 'R9-11152024-MET-1120',
                'information' => NULL,
                'sample_id' => 545,
                'user_id' => 12,
                'created_at' => '2024-11-15 17:16:10',
                'updated_at' => '2024-11-15 17:16:10',
            ),
            166 => 
            array (
                'id' => 670,
                'code' => 'R9-11152024-MET-1121',
                'information' => NULL,
                'sample_id' => 548,
                'user_id' => 12,
                'created_at' => '2024-11-15 17:17:35',
                'updated_at' => '2024-11-15 17:17:35',
            ),
            167 => 
            array (
                'id' => 671,
                'code' => 'R9-11152024-MET-1122',
                'information' => NULL,
                'sample_id' => 549,
                'user_id' => 12,
                'created_at' => '2024-11-15 17:18:15',
                'updated_at' => '2024-11-15 17:18:15',
            ),
            168 => 
            array (
                'id' => 672,
                'code' => 'R9-11152024-MET-1123',
                'information' => NULL,
                'sample_id' => 550,
                'user_id' => 12,
                'created_at' => '2024-11-15 17:19:10',
                'updated_at' => '2024-11-15 17:19:10',
            ),
            169 => 
            array (
                'id' => 673,
                'code' => 'R9-11152024-MET-1124',
                'information' => NULL,
                'sample_id' => 551,
                'user_id' => 12,
                'created_at' => '2024-11-15 17:19:42',
                'updated_at' => '2024-11-15 17:19:42',
            ),
            170 => 
            array (
                'id' => 674,
                'code' => 'R9-11152024-MET-1125',
                'information' => NULL,
                'sample_id' => 552,
                'user_id' => 12,
                'created_at' => '2024-11-15 17:20:05',
                'updated_at' => '2024-11-15 17:20:05',
            ),
            171 => 
            array (
                'id' => 675,
                'code' => 'R9-11152024-MET-1126',
                'information' => NULL,
                'sample_id' => 553,
                'user_id' => 12,
                'created_at' => '2024-11-15 17:20:22',
                'updated_at' => '2024-11-15 17:20:22',
            ),
            172 => 
            array (
                'id' => 676,
                'code' => 'R9-11152024-MET-1127',
                'information' => NULL,
                'sample_id' => 554,
                'user_id' => 12,
                'created_at' => '2024-11-15 17:21:27',
                'updated_at' => '2024-11-15 17:21:27',
            ),
            173 => 
            array (
                'id' => 677,
                'code' => 'R9-11152024-MET-1128',
                'information' => NULL,
                'sample_id' => 555,
                'user_id' => 12,
                'created_at' => '2024-11-15 17:24:23',
                'updated_at' => '2024-11-15 17:24:23',
            ),
            174 => 
            array (
                'id' => 678,
                'code' => 'R9-11152024-MET-1129',
                'information' => NULL,
                'sample_id' => 561,
                'user_id' => 12,
                'created_at' => '2024-11-15 17:24:53',
                'updated_at' => '2024-11-15 17:24:53',
            ),
            175 => 
            array (
                'id' => 679,
                'code' => 'R9-11152024-MET-1130',
                'information' => NULL,
                'sample_id' => 562,
                'user_id' => 12,
                'created_at' => '2024-11-15 17:25:27',
                'updated_at' => '2024-11-15 17:25:27',
            ),
            176 => 
            array (
                'id' => 680,
                'code' => 'R9-11152024-MET-1131',
                'information' => NULL,
                'sample_id' => 1411,
                'user_id' => 13,
                'created_at' => '2024-11-15 18:31:50',
                'updated_at' => '2024-11-15 18:31:50',
            ),
            177 => 
            array (
                'id' => 681,
                'code' => 'R9-11152024-CHE-1152',
                'information' => NULL,
                'sample_id' => 839,
                'user_id' => 7,
                'created_at' => '2024-11-15 23:01:08',
                'updated_at' => '2024-11-15 23:01:08',
            ),
            178 => 
            array (
                'id' => 682,
                'code' => 'R9-11182024-MIC-1392',
                'information' => NULL,
                'sample_id' => 975,
                'user_id' => 16,
                'created_at' => '2024-11-18 21:50:25',
                'updated_at' => '2024-11-18 21:50:25',
            ),
            179 => 
            array (
                'id' => 683,
                'code' => 'R9-11182024-MIC-1393',
                'information' => NULL,
                'sample_id' => 976,
                'user_id' => 16,
                'created_at' => '2024-11-18 21:51:53',
                'updated_at' => '2024-11-18 21:51:53',
            ),
            180 => 
            array (
                'id' => 684,
                'code' => 'R9-11182024-MIC-1394',
                'information' => NULL,
                'sample_id' => 977,
                'user_id' => 16,
                'created_at' => '2024-11-18 21:52:36',
                'updated_at' => '2024-11-18 21:52:36',
            ),
            181 => 
            array (
                'id' => 685,
                'code' => 'R9-11182024-MIC-1395',
                'information' => NULL,
                'sample_id' => 1143,
                'user_id' => 16,
                'created_at' => '2024-11-18 21:53:31',
                'updated_at' => '2024-11-18 21:53:31',
            ),
            182 => 
            array (
                'id' => 686,
                'code' => 'R9-11182024-MIC-1396',
                'information' => NULL,
                'sample_id' => 1220,
                'user_id' => 16,
                'created_at' => '2024-11-18 22:03:29',
                'updated_at' => '2024-11-18 22:03:29',
            ),
            183 => 
            array (
                'id' => 687,
                'code' => 'R9-11182024-MIC-1397',
                'information' => NULL,
                'sample_id' => 1221,
                'user_id' => 16,
                'created_at' => '2024-11-18 22:03:51',
                'updated_at' => '2024-11-18 22:03:51',
            ),
            184 => 
            array (
                'id' => 688,
                'code' => 'R9-11182024-MET-1132',
                'information' => NULL,
                'sample_id' => 1416,
                'user_id' => 13,
                'created_at' => '2024-11-18 22:37:59',
                'updated_at' => '2024-11-18 22:37:59',
            ),
            185 => 
            array (
                'id' => 689,
                'code' => 'R9-11182024-MIC-1398',
                'information' => NULL,
                'sample_id' => 1144,
                'user_id' => 16,
                'created_at' => '2024-11-19 00:15:26',
                'updated_at' => '2024-11-19 00:15:26',
            ),
            186 => 
            array (
                'id' => 690,
                'code' => 'R9-11182024-CHE-1153',
                'information' => NULL,
                'sample_id' => 949,
                'user_id' => 7,
                'created_at' => '2024-11-19 00:29:56',
                'updated_at' => '2024-11-19 00:29:56',
            ),
            187 => 
            array (
                'id' => 691,
                'code' => 'R9-11182024-CHE-1154',
                'information' => NULL,
                'sample_id' => 948,
                'user_id' => 7,
                'created_at' => '2024-11-19 00:38:48',
                'updated_at' => '2024-11-19 00:38:48',
            ),
            188 => 
            array (
                'id' => 692,
                'code' => 'R9-11182024-MIC-1399',
                'information' => NULL,
                'sample_id' => 1273,
                'user_id' => 16,
                'created_at' => '2024-11-19 00:40:03',
                'updated_at' => '2024-11-19 00:40:03',
            ),
            189 => 
            array (
                'id' => 693,
                'code' => 'R9-11182024-MIC-1400',
                'information' => NULL,
                'sample_id' => 1274,
                'user_id' => 16,
                'created_at' => '2024-11-19 00:40:28',
                'updated_at' => '2024-11-19 00:40:28',
            ),
            190 => 
            array (
                'id' => 694,
                'code' => 'R9-11182024-MIC-1401',
                'information' => NULL,
                'sample_id' => 1275,
                'user_id' => 16,
                'created_at' => '2024-11-19 00:40:37',
                'updated_at' => '2024-11-19 00:40:37',
            ),
            191 => 
            array (
                'id' => 695,
                'code' => 'R9-11182024-CHE-1155',
                'information' => NULL,
                'sample_id' => 945,
                'user_id' => 7,
                'created_at' => '2024-11-19 00:40:41',
                'updated_at' => '2024-11-19 00:40:41',
            ),
            192 => 
            array (
                'id' => 696,
                'code' => 'R9-11182024-MIC-1402',
                'information' => NULL,
                'sample_id' => 1276,
                'user_id' => 16,
                'created_at' => '2024-11-19 00:40:51',
                'updated_at' => '2024-11-19 00:40:51',
            ),
            193 => 
            array (
                'id' => 697,
                'code' => 'R9-11182024-MIC-1403',
                'information' => NULL,
                'sample_id' => 1277,
                'user_id' => 16,
                'created_at' => '2024-11-19 00:41:49',
                'updated_at' => '2024-11-19 00:41:49',
            ),
            194 => 
            array (
                'id' => 698,
                'code' => 'R9-11182024-MIC-1404',
                'information' => NULL,
                'sample_id' => 1278,
                'user_id' => 16,
                'created_at' => '2024-11-19 00:42:10',
                'updated_at' => '2024-11-19 00:42:10',
            ),
            195 => 
            array (
                'id' => 699,
                'code' => 'R9-11182024-MIC-1405',
                'information' => NULL,
                'sample_id' => 1279,
                'user_id' => 16,
                'created_at' => '2024-11-19 00:42:18',
                'updated_at' => '2024-11-19 00:42:18',
            ),
            196 => 
            array (
                'id' => 700,
                'code' => 'R9-11182024-MIC-1406',
                'information' => NULL,
                'sample_id' => 1280,
                'user_id' => 16,
                'created_at' => '2024-11-19 00:42:30',
                'updated_at' => '2024-11-19 00:42:30',
            ),
            197 => 
            array (
                'id' => 701,
                'code' => 'R9-11182024-MIC-1407',
                'information' => NULL,
                'sample_id' => 1281,
                'user_id' => 16,
                'created_at' => '2024-11-19 00:42:46',
                'updated_at' => '2024-11-19 00:42:46',
            ),
            198 => 
            array (
                'id' => 702,
                'code' => 'R9-11182024-MIC-1408',
                'information' => NULL,
                'sample_id' => 1282,
                'user_id' => 16,
                'created_at' => '2024-11-19 00:43:16',
                'updated_at' => '2024-11-19 00:43:16',
            ),
            199 => 
            array (
                'id' => 703,
                'code' => 'R9-11182024-MIC-1409',
                'information' => NULL,
                'sample_id' => 1283,
                'user_id' => 16,
                'created_at' => '2024-11-19 00:43:37',
                'updated_at' => '2024-11-19 00:43:37',
            ),
            200 => 
            array (
                'id' => 704,
                'code' => 'R9-11182024-MIC-1410',
                'information' => NULL,
                'sample_id' => 1284,
                'user_id' => 16,
                'created_at' => '2024-11-19 00:43:50',
                'updated_at' => '2024-11-19 00:43:50',
            ),
            201 => 
            array (
                'id' => 705,
                'code' => 'R9-11182024-MIC-1411',
                'information' => NULL,
                'sample_id' => 1285,
                'user_id' => 16,
                'created_at' => '2024-11-19 00:44:05',
                'updated_at' => '2024-11-19 00:44:05',
            ),
            202 => 
            array (
                'id' => 706,
                'code' => 'R9-11182024-MIC-1412',
                'information' => NULL,
                'sample_id' => 1286,
                'user_id' => 16,
                'created_at' => '2024-11-19 00:44:20',
                'updated_at' => '2024-11-19 00:44:20',
            ),
            203 => 
            array (
                'id' => 707,
                'code' => 'R9-11182024-MIC-1413',
                'information' => NULL,
                'sample_id' => 1288,
                'user_id' => 16,
                'created_at' => '2024-11-19 00:44:46',
                'updated_at' => '2024-11-19 00:44:46',
            ),
            204 => 
            array (
                'id' => 708,
                'code' => 'R9-11182024-MIC-1414',
                'information' => NULL,
                'sample_id' => 1289,
                'user_id' => 16,
                'created_at' => '2024-11-19 00:45:01',
                'updated_at' => '2024-11-19 00:45:01',
            ),
            205 => 
            array (
                'id' => 709,
                'code' => 'R9-11182024-MIC-1415',
                'information' => NULL,
                'sample_id' => 1290,
                'user_id' => 16,
                'created_at' => '2024-11-19 00:45:22',
                'updated_at' => '2024-11-19 00:45:22',
            ),
            206 => 
            array (
                'id' => 710,
                'code' => 'R9-11182024-MIC-1416',
                'information' => NULL,
                'sample_id' => 1291,
                'user_id' => 16,
                'created_at' => '2024-11-19 00:45:38',
                'updated_at' => '2024-11-19 00:45:38',
            ),
            207 => 
            array (
                'id' => 711,
                'code' => 'R9-11182024-MIC-1417',
                'information' => NULL,
                'sample_id' => 1292,
                'user_id' => 16,
                'created_at' => '2024-11-19 00:45:44',
                'updated_at' => '2024-11-19 00:45:44',
            ),
            208 => 
            array (
                'id' => 712,
                'code' => 'R9-11182024-CHE-1156',
                'information' => NULL,
                'sample_id' => 1222,
                'user_id' => 7,
                'created_at' => '2024-11-19 16:54:20',
                'updated_at' => '2024-11-19 16:54:20',
            ),
            209 => 
            array (
                'id' => 713,
                'code' => 'R9-11182024-CHE-1157',
                'information' => NULL,
                'sample_id' => 1223,
                'user_id' => 7,
                'created_at' => '2024-11-19 16:54:40',
                'updated_at' => '2024-11-19 16:54:40',
            ),
            210 => 
            array (
                'id' => 714,
                'code' => 'R9-11192024-CHE-1158',
                'information' => NULL,
                'sample_id' => 1210,
                'user_id' => 8,
                'created_at' => '2024-11-19 16:59:47',
                'updated_at' => '2024-11-19 16:59:47',
            ),
            211 => 
            array (
                'id' => 715,
                'code' => 'R9-11192024-CHE-1159',
                'information' => NULL,
                'sample_id' => 1218,
                'user_id' => 8,
                'created_at' => '2024-11-19 17:00:29',
                'updated_at' => '2024-11-19 17:00:29',
            ),
            212 => 
            array (
                'id' => 716,
                'code' => 'R9-11192024-CHE-1160',
                'information' => NULL,
                'sample_id' => 1219,
                'user_id' => 8,
                'created_at' => '2024-11-19 17:00:57',
                'updated_at' => '2024-11-19 17:00:57',
            ),
            213 => 
            array (
                'id' => 717,
                'code' => 'R9-11192024-CHE-1161',
                'information' => NULL,
                'sample_id' => 944,
                'user_id' => 7,
                'created_at' => '2024-11-19 17:20:32',
                'updated_at' => '2024-11-19 17:20:32',
            ),
            214 => 
            array (
                'id' => 718,
                'code' => 'R9-11192024-MIC-1418',
                'information' => NULL,
                'sample_id' => 1305,
                'user_id' => 16,
                'created_at' => '2024-11-19 21:08:40',
                'updated_at' => '2024-11-19 21:08:40',
            ),
            215 => 
            array (
                'id' => 719,
                'code' => 'R9-11192024-MIC-1419',
                'information' => NULL,
                'sample_id' => 1306,
                'user_id' => 16,
                'created_at' => '2024-11-19 21:09:07',
                'updated_at' => '2024-11-19 21:09:07',
            ),
            216 => 
            array (
                'id' => 720,
                'code' => 'R9-11192024-MIC-1420',
                'information' => NULL,
                'sample_id' => 1307,
                'user_id' => 16,
                'created_at' => '2024-11-19 21:09:22',
                'updated_at' => '2024-11-19 21:09:22',
            ),
            217 => 
            array (
                'id' => 721,
                'code' => 'R9-11192024-MIC-1421',
                'information' => NULL,
                'sample_id' => 1308,
                'user_id' => 16,
                'created_at' => '2024-11-19 21:10:01',
                'updated_at' => '2024-11-19 21:10:01',
            ),
            218 => 
            array (
                'id' => 722,
                'code' => 'R9-11192024-MIC-1422',
                'information' => NULL,
                'sample_id' => 1309,
                'user_id' => 16,
                'created_at' => '2024-11-19 21:10:26',
                'updated_at' => '2024-11-19 21:10:26',
            ),
            219 => 
            array (
                'id' => 723,
                'code' => 'R9-11192024-MIC-1423',
                'information' => NULL,
                'sample_id' => 1310,
                'user_id' => 16,
                'created_at' => '2024-11-19 21:16:28',
                'updated_at' => '2024-11-19 21:16:28',
            ),
            220 => 
            array (
                'id' => 724,
                'code' => 'R9-11192024-MIC-1424',
                'information' => NULL,
                'sample_id' => 1311,
                'user_id' => 16,
                'created_at' => '2024-11-19 21:16:53',
                'updated_at' => '2024-11-19 21:16:53',
            ),
            221 => 
            array (
                'id' => 725,
                'code' => 'R9-11192024-MIC-1425',
                'information' => NULL,
                'sample_id' => 1312,
                'user_id' => 16,
                'created_at' => '2024-11-19 21:17:05',
                'updated_at' => '2024-11-19 21:17:05',
            ),
            222 => 
            array (
                'id' => 726,
                'code' => 'R9-11192024-MIC-1426',
                'information' => NULL,
                'sample_id' => 1313,
                'user_id' => 16,
                'created_at' => '2024-11-19 21:17:24',
                'updated_at' => '2024-11-19 21:17:24',
            ),
            223 => 
            array (
                'id' => 727,
                'code' => 'R9-11192024-MIC-1427',
                'information' => NULL,
                'sample_id' => 1314,
                'user_id' => 16,
                'created_at' => '2024-11-19 21:17:42',
                'updated_at' => '2024-11-19 21:17:42',
            ),
            224 => 
            array (
                'id' => 728,
                'code' => 'R9-11192024-MIC-1428',
                'information' => NULL,
                'sample_id' => 1315,
                'user_id' => 16,
                'created_at' => '2024-11-19 21:18:18',
                'updated_at' => '2024-11-19 21:18:18',
            ),
            225 => 
            array (
                'id' => 729,
                'code' => 'R9-11192024-MIC-1429',
                'information' => NULL,
                'sample_id' => 1316,
                'user_id' => 16,
                'created_at' => '2024-11-19 21:18:34',
                'updated_at' => '2024-11-19 21:18:34',
            ),
            226 => 
            array (
                'id' => 730,
                'code' => 'R9-11192024-MIC-1430',
                'information' => NULL,
                'sample_id' => 1317,
                'user_id' => 16,
                'created_at' => '2024-11-19 21:18:42',
                'updated_at' => '2024-11-19 21:18:42',
            ),
            227 => 
            array (
                'id' => 731,
                'code' => 'R9-11192024-MIC-1431',
                'information' => NULL,
                'sample_id' => 1318,
                'user_id' => 16,
                'created_at' => '2024-11-19 21:18:56',
                'updated_at' => '2024-11-19 21:18:56',
            ),
            228 => 
            array (
                'id' => 732,
                'code' => 'R9-11192024-MIC-1432',
                'information' => NULL,
                'sample_id' => 1319,
                'user_id' => 16,
                'created_at' => '2024-11-19 21:19:10',
                'updated_at' => '2024-11-19 21:19:10',
            ),
            229 => 
            array (
                'id' => 733,
                'code' => 'R9-11192024-MIC-1433',
                'information' => NULL,
                'sample_id' => 1320,
                'user_id' => 16,
                'created_at' => '2024-11-19 21:19:53',
                'updated_at' => '2024-11-19 21:19:53',
            ),
            230 => 
            array (
                'id' => 734,
                'code' => 'R9-11192024-MIC-1434',
                'information' => NULL,
                'sample_id' => 1321,
                'user_id' => 16,
                'created_at' => '2024-11-19 21:20:07',
                'updated_at' => '2024-11-19 21:20:07',
            ),
            231 => 
            array (
                'id' => 735,
                'code' => 'R9-11192024-MIC-1435',
                'information' => NULL,
                'sample_id' => 1322,
                'user_id' => 16,
                'created_at' => '2024-11-19 21:20:39',
                'updated_at' => '2024-11-19 21:20:39',
            ),
            232 => 
            array (
                'id' => 736,
                'code' => 'R9-11192024-MIC-1436',
                'information' => NULL,
                'sample_id' => 1323,
                'user_id' => 16,
                'created_at' => '2024-11-19 21:21:12',
                'updated_at' => '2024-11-19 21:21:12',
            ),
            233 => 
            array (
                'id' => 737,
                'code' => 'R9-11192024-MIC-1437',
                'information' => NULL,
                'sample_id' => 1324,
                'user_id' => 16,
                'created_at' => '2024-11-19 21:21:28',
                'updated_at' => '2024-11-19 21:21:28',
            ),
            234 => 
            array (
                'id' => 738,
                'code' => 'R9-11192024-MIC-1438',
                'information' => NULL,
                'sample_id' => 1325,
                'user_id' => 16,
                'created_at' => '2024-11-19 21:23:36',
                'updated_at' => '2024-11-19 21:23:36',
            ),
            235 => 
            array (
                'id' => 739,
                'code' => 'R9-11192024-MIC-1439',
                'information' => NULL,
                'sample_id' => 1326,
                'user_id' => 16,
                'created_at' => '2024-11-19 21:24:10',
                'updated_at' => '2024-11-19 21:24:10',
            ),
            236 => 
            array (
                'id' => 740,
                'code' => 'R9-11192024-MIC-1440',
                'information' => NULL,
                'sample_id' => 1327,
                'user_id' => 16,
                'created_at' => '2024-11-19 21:24:28',
                'updated_at' => '2024-11-19 21:24:28',
            ),
            237 => 
            array (
                'id' => 741,
                'code' => 'R9-11192024-MIC-1441',
                'information' => NULL,
                'sample_id' => 1328,
                'user_id' => 16,
                'created_at' => '2024-11-19 21:27:37',
                'updated_at' => '2024-11-19 21:27:37',
            ),
            238 => 
            array (
                'id' => 742,
                'code' => 'R9-11192024-MIC-1442',
                'information' => NULL,
                'sample_id' => 1329,
                'user_id' => 16,
                'created_at' => '2024-11-19 21:27:53',
                'updated_at' => '2024-11-19 21:27:53',
            ),
            239 => 
            array (
                'id' => 743,
                'code' => 'R9-11192024-MIC-1443',
                'information' => NULL,
                'sample_id' => 1330,
                'user_id' => 16,
                'created_at' => '2024-11-19 21:28:12',
                'updated_at' => '2024-11-19 21:28:12',
            ),
            240 => 
            array (
                'id' => 744,
                'code' => 'R9-11192024-MIC-1444',
                'information' => NULL,
                'sample_id' => 1332,
                'user_id' => 16,
                'created_at' => '2024-11-19 21:28:50',
                'updated_at' => '2024-11-19 21:28:50',
            ),
            241 => 
            array (
                'id' => 745,
                'code' => 'R9-11192024-MIC-1445',
                'information' => NULL,
                'sample_id' => 1334,
                'user_id' => 16,
                'created_at' => '2024-11-19 21:29:21',
                'updated_at' => '2024-11-19 21:29:21',
            ),
            242 => 
            array (
                'id' => 746,
                'code' => 'R9-11192024-MIC-1446',
                'information' => NULL,
                'sample_id' => 1335,
                'user_id' => 16,
                'created_at' => '2024-11-19 21:29:37',
                'updated_at' => '2024-11-19 21:29:37',
            ),
            243 => 
            array (
                'id' => 747,
                'code' => 'R9-11192024-MIC-1447',
                'information' => NULL,
                'sample_id' => 1336,
                'user_id' => 16,
                'created_at' => '2024-11-19 21:29:45',
                'updated_at' => '2024-11-19 21:29:45',
            ),
            244 => 
            array (
                'id' => 748,
                'code' => 'R9-11192024-MIC-1448',
                'information' => NULL,
                'sample_id' => 1337,
                'user_id' => 16,
                'created_at' => '2024-11-19 21:29:57',
                'updated_at' => '2024-11-19 21:29:57',
            ),
            245 => 
            array (
                'id' => 749,
                'code' => 'R9-11192024-MIC-1449',
                'information' => NULL,
                'sample_id' => 1338,
                'user_id' => 16,
                'created_at' => '2024-11-19 21:30:28',
                'updated_at' => '2024-11-19 21:30:28',
            ),
            246 => 
            array (
                'id' => 750,
                'code' => 'R9-11192024-MIC-1450',
                'information' => NULL,
                'sample_id' => 1339,
                'user_id' => 16,
                'created_at' => '2024-11-19 21:30:42',
                'updated_at' => '2024-11-19 21:30:42',
            ),
            247 => 
            array (
                'id' => 751,
                'code' => 'R9-11192024-MIC-1451',
                'information' => NULL,
                'sample_id' => 1340,
                'user_id' => 16,
                'created_at' => '2024-11-19 21:30:51',
                'updated_at' => '2024-11-19 21:30:51',
            ),
            248 => 
            array (
                'id' => 752,
                'code' => 'R9-11192024-MIC-1452',
                'information' => NULL,
                'sample_id' => 1341,
                'user_id' => 16,
                'created_at' => '2024-11-19 21:31:07',
                'updated_at' => '2024-11-19 21:31:07',
            ),
            249 => 
            array (
                'id' => 753,
                'code' => 'R9-11192024-MIC-1453',
                'information' => NULL,
                'sample_id' => 1342,
                'user_id' => 16,
                'created_at' => '2024-11-19 21:31:31',
                'updated_at' => '2024-11-19 21:31:31',
            ),
            250 => 
            array (
                'id' => 754,
                'code' => 'R9-11192024-MIC-1454',
                'information' => NULL,
                'sample_id' => 1343,
                'user_id' => 16,
                'created_at' => '2024-11-19 21:31:45',
                'updated_at' => '2024-11-19 21:31:45',
            ),
            251 => 
            array (
                'id' => 755,
                'code' => 'R9-11192024-MIC-1455',
                'information' => NULL,
                'sample_id' => 1344,
                'user_id' => 16,
                'created_at' => '2024-11-19 21:31:58',
                'updated_at' => '2024-11-19 21:31:58',
            ),
            252 => 
            array (
                'id' => 756,
                'code' => 'R9-11192024-MIC-1456',
                'information' => NULL,
                'sample_id' => 1345,
                'user_id' => 16,
                'created_at' => '2024-11-19 21:32:17',
                'updated_at' => '2024-11-19 21:32:17',
            ),
            253 => 
            array (
                'id' => 757,
                'code' => 'R9-11192024-MIC-1457',
                'information' => NULL,
                'sample_id' => 1346,
                'user_id' => 16,
                'created_at' => '2024-11-19 21:32:53',
                'updated_at' => '2024-11-19 21:32:53',
            ),
            254 => 
            array (
                'id' => 758,
                'code' => 'R9-11192024-MIC-1458',
                'information' => NULL,
                'sample_id' => 1347,
                'user_id' => 16,
                'created_at' => '2024-11-19 21:33:10',
                'updated_at' => '2024-11-19 21:33:10',
            ),
            255 => 
            array (
                'id' => 759,
                'code' => 'R9-11192024-MIC-1459',
                'information' => NULL,
                'sample_id' => 1348,
                'user_id' => 16,
                'created_at' => '2024-11-19 21:33:25',
                'updated_at' => '2024-11-19 21:33:25',
            ),
            256 => 
            array (
                'id' => 760,
                'code' => 'R9-11192024-MIC-1460',
                'information' => NULL,
                'sample_id' => 1349,
                'user_id' => 16,
                'created_at' => '2024-11-19 21:33:42',
                'updated_at' => '2024-11-19 21:33:42',
            ),
            257 => 
            array (
                'id' => 761,
                'code' => 'R9-11192024-MIC-1461',
                'information' => NULL,
                'sample_id' => 1350,
                'user_id' => 16,
                'created_at' => '2024-11-19 21:34:08',
                'updated_at' => '2024-11-19 21:34:08',
            ),
            258 => 
            array (
                'id' => 762,
                'code' => 'R9-11192024-MIC-1462',
                'information' => NULL,
                'sample_id' => 1351,
                'user_id' => 16,
                'created_at' => '2024-11-19 21:34:21',
                'updated_at' => '2024-11-19 21:34:21',
            ),
            259 => 
            array (
                'id' => 763,
                'code' => 'R9-11192024-MIC-1463',
                'information' => NULL,
                'sample_id' => 1352,
                'user_id' => 16,
                'created_at' => '2024-11-19 21:34:30',
                'updated_at' => '2024-11-19 21:34:30',
            ),
            260 => 
            array (
                'id' => 764,
                'code' => 'R9-11192024-MIC-1464',
                'information' => NULL,
                'sample_id' => 1353,
                'user_id' => 16,
                'created_at' => '2024-11-19 21:34:45',
                'updated_at' => '2024-11-19 21:34:45',
            ),
            261 => 
            array (
                'id' => 765,
                'code' => 'R9-11192024-MIC-1465',
                'information' => NULL,
                'sample_id' => 1354,
                'user_id' => 16,
                'created_at' => '2024-11-19 21:35:15',
                'updated_at' => '2024-11-19 21:35:15',
            ),
            262 => 
            array (
                'id' => 766,
                'code' => 'R9-11192024-MIC-1466',
                'information' => NULL,
                'sample_id' => 1355,
                'user_id' => 16,
                'created_at' => '2024-11-19 21:35:30',
                'updated_at' => '2024-11-19 21:35:30',
            ),
            263 => 
            array (
                'id' => 767,
                'code' => 'R9-11192024-MIC-1467',
                'information' => NULL,
                'sample_id' => 1356,
                'user_id' => 16,
                'created_at' => '2024-11-19 21:35:42',
                'updated_at' => '2024-11-19 21:35:42',
            ),
            264 => 
            array (
                'id' => 768,
                'code' => 'R9-11192024-MIC-1468',
                'information' => NULL,
                'sample_id' => 1357,
                'user_id' => 16,
                'created_at' => '2024-11-19 21:36:05',
                'updated_at' => '2024-11-19 21:36:05',
            ),
            265 => 
            array (
                'id' => 769,
                'code' => 'R9-11192024-MIC-1469',
                'information' => NULL,
                'sample_id' => 1358,
                'user_id' => 16,
                'created_at' => '2024-11-19 21:36:21',
                'updated_at' => '2024-11-19 21:36:21',
            ),
            266 => 
            array (
                'id' => 770,
                'code' => 'R9-11192024-MIC-1470',
                'information' => NULL,
                'sample_id' => 1359,
                'user_id' => 16,
                'created_at' => '2024-11-19 21:36:33',
                'updated_at' => '2024-11-19 21:36:33',
            ),
            267 => 
            array (
                'id' => 771,
                'code' => 'R9-11192024-MIC-1471',
                'information' => NULL,
                'sample_id' => 1360,
                'user_id' => 16,
                'created_at' => '2024-11-19 21:36:57',
                'updated_at' => '2024-11-19 21:36:57',
            ),
            268 => 
            array (
                'id' => 772,
                'code' => 'R9-11192024-MIC-1472',
                'information' => NULL,
                'sample_id' => 1361,
                'user_id' => 16,
                'created_at' => '2024-11-19 21:37:15',
                'updated_at' => '2024-11-19 21:37:15',
            ),
            269 => 
            array (
                'id' => 773,
                'code' => 'R9-11192024-MIC-1473',
                'information' => NULL,
                'sample_id' => 1362,
                'user_id' => 16,
                'created_at' => '2024-11-19 21:37:24',
                'updated_at' => '2024-11-19 21:37:24',
            ),
            270 => 
            array (
                'id' => 774,
                'code' => 'R9-11192024-MIC-1474',
                'information' => NULL,
                'sample_id' => 1373,
                'user_id' => 16,
                'created_at' => '2024-11-19 21:37:56',
                'updated_at' => '2024-11-19 21:37:56',
            ),
            271 => 
            array (
                'id' => 775,
                'code' => 'R9-11202024-CHE-1162',
                'information' => NULL,
                'sample_id' => 1004,
                'user_id' => 7,
                'created_at' => '2024-11-20 18:09:52',
                'updated_at' => '2024-11-20 18:09:52',
            ),
            272 => 
            array (
                'id' => 776,
                'code' => 'R9-11202024-CHE-1163',
                'information' => NULL,
                'sample_id' => 1006,
                'user_id' => 7,
                'created_at' => '2024-11-20 18:11:08',
                'updated_at' => '2024-11-20 18:11:08',
            ),
            273 => 
            array (
                'id' => 777,
                'code' => 'R9-11202024-CHE-1164',
                'information' => NULL,
                'sample_id' => 1005,
                'user_id' => 7,
                'created_at' => '2024-11-20 18:12:57',
                'updated_at' => '2024-11-20 18:12:57',
            ),
            274 => 
            array (
                'id' => 778,
                'code' => 'R9-11212024-CHE-1165',
                'information' => NULL,
                'sample_id' => 1003,
                'user_id' => 7,
                'created_at' => '2024-11-21 22:11:18',
                'updated_at' => '2024-11-21 22:11:18',
            ),
            275 => 
            array (
                'id' => 779,
                'code' => 'R9-11252024-MET-1133',
                'information' => NULL,
                'sample_id' => 639,
                'user_id' => 12,
                'created_at' => '2024-11-26 00:11:26',
                'updated_at' => '2024-11-26 00:11:26',
            ),
            276 => 
            array (
                'id' => 780,
                'code' => 'R9-11252024-MET-1134',
                'information' => NULL,
                'sample_id' => 986,
                'user_id' => 12,
                'created_at' => '2024-11-26 00:14:03',
                'updated_at' => '2024-11-26 00:14:03',
            ),
            277 => 
            array (
                'id' => 781,
                'code' => 'R9-11252024-MET-1135',
                'information' => NULL,
                'sample_id' => 987,
                'user_id' => 12,
                'created_at' => '2024-11-26 00:14:35',
                'updated_at' => '2024-11-26 00:14:35',
            ),
            278 => 
            array (
                'id' => 782,
                'code' => 'R9-11262024-MIC-1475',
                'information' => NULL,
                'sample_id' => 1168,
                'user_id' => 16,
                'created_at' => '2024-11-26 17:52:43',
                'updated_at' => '2024-11-26 17:52:43',
            ),
            279 => 
            array (
                'id' => 783,
                'code' => 'R9-11262024-MIC-1476',
                'information' => NULL,
                'sample_id' => 1169,
                'user_id' => 16,
                'created_at' => '2024-11-26 17:53:07',
                'updated_at' => '2024-11-26 17:53:07',
            ),
            280 => 
            array (
                'id' => 784,
                'code' => 'R9-11262024-MIC-1477',
                'information' => NULL,
                'sample_id' => 1415,
                'user_id' => 16,
                'created_at' => '2024-11-26 22:26:15',
                'updated_at' => '2024-11-26 22:26:15',
            ),
            281 => 
            array (
                'id' => 785,
                'code' => 'R9-11262024-MET-1136',
                'information' => NULL,
                'sample_id' => 1443,
                'user_id' => 12,
                'created_at' => '2024-11-27 00:14:07',
                'updated_at' => '2024-11-27 00:14:07',
            ),
            282 => 
            array (
                'id' => 786,
                'code' => 'R9-11262024-MET-1137',
                'information' => NULL,
                'sample_id' => 1451,
                'user_id' => 12,
                'created_at' => '2024-11-27 00:15:11',
                'updated_at' => '2024-11-27 00:15:11',
            ),
            283 => 
            array (
                'id' => 787,
                'code' => 'R9-11272024-CHE-1166',
                'information' => NULL,
                'sample_id' => 1363,
                'user_id' => 8,
                'created_at' => '2024-11-27 22:07:29',
                'updated_at' => '2024-11-27 22:07:29',
            ),
            284 => 
            array (
                'id' => 788,
                'code' => 'R9-11272024-CHE-1167',
                'information' => NULL,
                'sample_id' => 1009,
                'user_id' => 8,
                'created_at' => '2024-11-27 22:09:01',
                'updated_at' => '2024-11-27 22:09:01',
            ),
            285 => 
            array (
                'id' => 789,
                'code' => 'R9-11272024-CHE-1168',
                'information' => NULL,
                'sample_id' => 1009,
                'user_id' => 8,
                'created_at' => '2024-11-27 22:09:02',
                'updated_at' => '2024-11-27 22:09:02',
            ),
            286 => 
            array (
                'id' => 790,
                'code' => 'R9-11282024-CHE-1169',
                'information' => NULL,
                'sample_id' => 1011,
                'user_id' => 8,
                'created_at' => '2024-11-29 07:41:31',
                'updated_at' => '2024-11-29 07:41:31',
            ),
            287 => 
            array (
                'id' => 791,
                'code' => 'R9-11292024-MET-1138',
                'information' => NULL,
                'sample_id' => 1376,
                'user_id' => 12,
                'created_at' => '2024-11-29 16:41:03',
                'updated_at' => '2024-11-29 16:41:03',
            ),
            288 => 
            array (
                'id' => 792,
                'code' => 'R9-11292024-MET-1139',
                'information' => NULL,
                'sample_id' => 1377,
                'user_id' => 12,
                'created_at' => '2024-11-29 16:43:42',
                'updated_at' => '2024-11-29 16:43:42',
            ),
            289 => 
            array (
                'id' => 793,
                'code' => 'R9-11292024-MET-1140',
                'information' => NULL,
                'sample_id' => 1378,
                'user_id' => 12,
                'created_at' => '2024-11-29 16:44:38',
                'updated_at' => '2024-11-29 16:44:38',
            ),
            290 => 
            array (
                'id' => 794,
                'code' => 'R9-11292024-MET-1141',
                'information' => NULL,
                'sample_id' => 1379,
                'user_id' => 12,
                'created_at' => '2024-11-29 16:48:29',
                'updated_at' => '2024-11-29 16:48:29',
            ),
            291 => 
            array (
                'id' => 795,
                'code' => 'R9-11292024-MET-1142',
                'information' => NULL,
                'sample_id' => 1380,
                'user_id' => 12,
                'created_at' => '2024-11-29 16:49:10',
                'updated_at' => '2024-11-29 16:49:10',
            ),
            292 => 
            array (
                'id' => 796,
                'code' => 'R9-11292024-CHE-1170',
                'information' => NULL,
                'sample_id' => 1142,
                'user_id' => 8,
                'created_at' => '2024-11-29 23:12:53',
                'updated_at' => '2024-11-29 23:12:53',
            ),
            293 => 
            array (
                'id' => 797,
                'code' => 'R9-12022024-MIC-1478',
                'information' => NULL,
                'sample_id' => 1440,
                'user_id' => 16,
                'created_at' => '2024-12-02 16:59:27',
                'updated_at' => '2024-12-02 16:59:27',
            ),
            294 => 
            array (
                'id' => 798,
                'code' => 'R9-12022024-MIC-1479',
                'information' => NULL,
                'sample_id' => 1452,
                'user_id' => 16,
                'created_at' => '2024-12-02 17:01:38',
                'updated_at' => '2024-12-02 17:01:38',
            ),
            295 => 
            array (
                'id' => 799,
                'code' => 'R9-12022024-MIC-1480',
                'information' => NULL,
                'sample_id' => 1453,
                'user_id' => 16,
                'created_at' => '2024-12-02 17:02:02',
                'updated_at' => '2024-12-02 17:02:02',
            ),
            296 => 
            array (
                'id' => 800,
                'code' => 'R9-12022024-MIC-1481',
                'information' => NULL,
                'sample_id' => 1454,
                'user_id' => 16,
                'created_at' => '2024-12-02 17:02:16',
                'updated_at' => '2024-12-02 17:02:16',
            ),
            297 => 
            array (
                'id' => 801,
                'code' => 'R9-12022024-MIC-1482',
                'information' => NULL,
                'sample_id' => 1462,
                'user_id' => 16,
                'created_at' => '2024-12-02 17:02:57',
                'updated_at' => '2024-12-02 17:02:57',
            ),
            298 => 
            array (
                'id' => 802,
                'code' => 'R9-12022024-MIC-1483',
                'information' => NULL,
                'sample_id' => 1463,
                'user_id' => 16,
                'created_at' => '2024-12-02 17:03:23',
                'updated_at' => '2024-12-02 17:03:23',
            ),
            299 => 
            array (
                'id' => 803,
                'code' => 'R9-12022024-MIC-1484',
                'information' => NULL,
                'sample_id' => 1464,
                'user_id' => 16,
                'created_at' => '2024-12-02 17:03:49',
                'updated_at' => '2024-12-02 17:03:49',
            ),
            300 => 
            array (
                'id' => 804,
                'code' => 'R9-12022024-MIC-1485',
                'information' => NULL,
                'sample_id' => 1465,
                'user_id' => 16,
                'created_at' => '2024-12-02 17:04:17',
                'updated_at' => '2024-12-02 17:04:17',
            ),
            301 => 
            array (
                'id' => 805,
                'code' => 'R9-12022024-MIC-1486',
                'information' => NULL,
                'sample_id' => 1466,
                'user_id' => 16,
                'created_at' => '2024-12-02 17:06:33',
                'updated_at' => '2024-12-02 17:06:33',
            ),
            302 => 
            array (
                'id' => 806,
                'code' => 'R9-12022024-MIC-1487',
                'information' => NULL,
                'sample_id' => 1467,
                'user_id' => 16,
                'created_at' => '2024-12-02 17:06:51',
                'updated_at' => '2024-12-02 17:06:51',
            ),
            303 => 
            array (
                'id' => 807,
                'code' => 'R9-12022024-MIC-1488',
                'information' => NULL,
                'sample_id' => 1468,
                'user_id' => 16,
                'created_at' => '2024-12-02 17:07:25',
                'updated_at' => '2024-12-02 17:07:25',
            ),
            304 => 
            array (
                'id' => 808,
                'code' => 'R9-12022024-MIC-1489',
                'information' => NULL,
                'sample_id' => 1469,
                'user_id' => 16,
                'created_at' => '2024-12-02 17:07:50',
                'updated_at' => '2024-12-02 17:07:50',
            ),
            305 => 
            array (
                'id' => 809,
                'code' => 'R9-12022024-MIC-1490',
                'information' => NULL,
                'sample_id' => 1470,
                'user_id' => 16,
                'created_at' => '2024-12-02 17:08:00',
                'updated_at' => '2024-12-02 17:08:00',
            ),
            306 => 
            array (
                'id' => 810,
                'code' => 'R9-12022024-MIC-1491',
                'information' => NULL,
                'sample_id' => 1471,
                'user_id' => 16,
                'created_at' => '2024-12-02 17:08:46',
                'updated_at' => '2024-12-02 17:08:46',
            ),
            307 => 
            array (
                'id' => 811,
                'code' => 'R9-12022024-MIC-1492',
                'information' => NULL,
                'sample_id' => 1472,
                'user_id' => 16,
                'created_at' => '2024-12-02 17:08:55',
                'updated_at' => '2024-12-02 17:08:55',
            ),
            308 => 
            array (
                'id' => 812,
                'code' => 'R9-12022024-MIC-1493',
                'information' => NULL,
                'sample_id' => 1473,
                'user_id' => 16,
                'created_at' => '2024-12-02 17:09:24',
                'updated_at' => '2024-12-02 17:09:24',
            ),
            309 => 
            array (
                'id' => 813,
                'code' => 'R9-12022024-MIC-1494',
                'information' => NULL,
                'sample_id' => 1474,
                'user_id' => 16,
                'created_at' => '2024-12-02 17:10:05',
                'updated_at' => '2024-12-02 17:10:05',
            ),
            310 => 
            array (
                'id' => 814,
                'code' => 'R9-12022024-MIC-1495',
                'information' => NULL,
                'sample_id' => 1475,
                'user_id' => 16,
                'created_at' => '2024-12-02 17:10:13',
                'updated_at' => '2024-12-02 17:10:13',
            ),
            311 => 
            array (
                'id' => 815,
                'code' => 'R9-12022024-MIC-1496',
                'information' => NULL,
                'sample_id' => 1476,
                'user_id' => 16,
                'created_at' => '2024-12-02 17:10:24',
                'updated_at' => '2024-12-02 17:10:24',
            ),
            312 => 
            array (
                'id' => 816,
                'code' => 'R9-12022024-MIC-1497',
                'information' => NULL,
                'sample_id' => 1477,
                'user_id' => 16,
                'created_at' => '2024-12-02 17:10:37',
                'updated_at' => '2024-12-02 17:10:37',
            ),
            313 => 
            array (
                'id' => 817,
                'code' => 'R9-12022024-MIC-1498',
                'information' => NULL,
                'sample_id' => 1478,
                'user_id' => 16,
                'created_at' => '2024-12-02 17:11:04',
                'updated_at' => '2024-12-02 17:11:04',
            ),
            314 => 
            array (
                'id' => 818,
                'code' => 'R9-12022024-MIC-1499',
                'information' => NULL,
                'sample_id' => 1479,
                'user_id' => 16,
                'created_at' => '2024-12-02 17:11:49',
                'updated_at' => '2024-12-02 17:11:49',
            ),
            315 => 
            array (
                'id' => 819,
                'code' => 'R9-12022024-MIC-1500',
                'information' => NULL,
                'sample_id' => 1480,
                'user_id' => 16,
                'created_at' => '2024-12-02 17:12:01',
                'updated_at' => '2024-12-02 17:12:01',
            ),
            316 => 
            array (
                'id' => 820,
                'code' => 'R9-12022024-MIC-1501',
                'information' => NULL,
                'sample_id' => 1481,
                'user_id' => 16,
                'created_at' => '2024-12-02 17:12:14',
                'updated_at' => '2024-12-02 17:12:14',
            ),
            317 => 
            array (
                'id' => 821,
                'code' => 'R9-12022024-MIC-1502',
                'information' => NULL,
                'sample_id' => 1482,
                'user_id' => 16,
                'created_at' => '2024-12-02 17:12:32',
                'updated_at' => '2024-12-02 17:12:32',
            ),
            318 => 
            array (
                'id' => 822,
                'code' => 'R9-12022024-MIC-1503',
                'information' => NULL,
                'sample_id' => 1486,
                'user_id' => 16,
                'created_at' => '2024-12-02 17:13:30',
                'updated_at' => '2024-12-02 17:13:30',
            ),
            319 => 
            array (
                'id' => 823,
                'code' => 'R9-12022024-MIC-1504',
                'information' => NULL,
                'sample_id' => 1487,
                'user_id' => 16,
                'created_at' => '2024-12-02 17:13:50',
                'updated_at' => '2024-12-02 17:13:50',
            ),
            320 => 
            array (
                'id' => 824,
                'code' => 'R9-12022024-MIC-1505',
                'information' => NULL,
                'sample_id' => 1488,
                'user_id' => 16,
                'created_at' => '2024-12-02 17:14:08',
                'updated_at' => '2024-12-02 17:14:08',
            ),
            321 => 
            array (
                'id' => 825,
                'code' => 'R9-12022024-MIC-1506',
                'information' => NULL,
                'sample_id' => 1490,
                'user_id' => 16,
                'created_at' => '2024-12-02 17:14:35',
                'updated_at' => '2024-12-02 17:14:35',
            ),
            322 => 
            array (
                'id' => 826,
                'code' => 'R9-12022024-MIC-1507',
                'information' => NULL,
                'sample_id' => 1491,
                'user_id' => 16,
                'created_at' => '2024-12-02 17:15:02',
                'updated_at' => '2024-12-02 17:15:02',
            ),
            323 => 
            array (
                'id' => 827,
                'code' => 'R9-12022024-MIC-1508',
                'information' => NULL,
                'sample_id' => 1492,
                'user_id' => 16,
                'created_at' => '2024-12-02 17:15:43',
                'updated_at' => '2024-12-02 17:15:43',
            ),
            324 => 
            array (
                'id' => 828,
                'code' => 'R9-12022024-MIC-1509',
                'information' => NULL,
                'sample_id' => 1493,
                'user_id' => 16,
                'created_at' => '2024-12-02 17:16:15',
                'updated_at' => '2024-12-02 17:16:15',
            ),
            325 => 
            array (
                'id' => 829,
                'code' => 'R9-12022024-MIC-1510',
                'information' => NULL,
                'sample_id' => 1494,
                'user_id' => 16,
                'created_at' => '2024-12-02 17:16:26',
                'updated_at' => '2024-12-02 17:16:26',
            ),
            326 => 
            array (
                'id' => 830,
                'code' => 'R9-12022024-MIC-1511',
                'information' => NULL,
                'sample_id' => 1495,
                'user_id' => 16,
                'created_at' => '2024-12-02 17:16:54',
                'updated_at' => '2024-12-02 17:16:54',
            ),
            327 => 
            array (
                'id' => 831,
                'code' => 'R9-12022024-MIC-1512',
                'information' => NULL,
                'sample_id' => 1496,
                'user_id' => 16,
                'created_at' => '2024-12-02 17:17:44',
                'updated_at' => '2024-12-02 17:17:44',
            ),
            328 => 
            array (
                'id' => 832,
                'code' => 'R9-12022024-MIC-1513',
                'information' => NULL,
                'sample_id' => 1497,
                'user_id' => 16,
                'created_at' => '2024-12-02 17:17:53',
                'updated_at' => '2024-12-02 17:17:53',
            ),
            329 => 
            array (
                'id' => 833,
                'code' => 'R9-12022024-MIC-1514',
                'information' => NULL,
                'sample_id' => 1498,
                'user_id' => 16,
                'created_at' => '2024-12-02 17:18:03',
                'updated_at' => '2024-12-02 17:18:03',
            ),
            330 => 
            array (
                'id' => 834,
                'code' => 'R9-12022024-CHE-1171',
                'information' => NULL,
                'sample_id' => 1235,
                'user_id' => 8,
                'created_at' => '2024-12-02 18:36:47',
                'updated_at' => '2024-12-02 18:36:47',
            ),
            331 => 
            array (
                'id' => 835,
                'code' => 'R9-12022024-CHE-1172',
                'information' => NULL,
                'sample_id' => 1236,
                'user_id' => 8,
                'created_at' => '2024-12-02 18:37:05',
                'updated_at' => '2024-12-02 18:37:05',
            ),
            332 => 
            array (
                'id' => 836,
                'code' => 'R9-12022024-CHE-1173',
                'information' => NULL,
                'sample_id' => 1237,
                'user_id' => 8,
                'created_at' => '2024-12-02 18:37:16',
                'updated_at' => '2024-12-02 18:37:16',
            ),
            333 => 
            array (
                'id' => 837,
                'code' => 'R9-12022024-CHE-1174',
                'information' => NULL,
                'sample_id' => 1238,
                'user_id' => 8,
                'created_at' => '2024-12-02 18:37:28',
                'updated_at' => '2024-12-02 18:37:28',
            ),
            334 => 
            array (
                'id' => 838,
                'code' => 'R9-12022024-CHE-1175',
                'information' => NULL,
                'sample_id' => 1239,
                'user_id' => 8,
                'created_at' => '2024-12-02 18:37:45',
                'updated_at' => '2024-12-02 18:37:45',
            ),
            335 => 
            array (
                'id' => 839,
                'code' => 'R9-12022024-CHE-1176',
                'information' => NULL,
                'sample_id' => 1240,
                'user_id' => 8,
                'created_at' => '2024-12-02 18:37:55',
                'updated_at' => '2024-12-02 18:37:55',
            ),
            336 => 
            array (
                'id' => 840,
                'code' => 'R9-12022024-CHE-1177',
                'information' => NULL,
                'sample_id' => 1241,
                'user_id' => 8,
                'created_at' => '2024-12-02 18:38:09',
                'updated_at' => '2024-12-02 18:38:09',
            ),
            337 => 
            array (
                'id' => 841,
                'code' => 'R9-12022024-CHE-1178',
                'information' => NULL,
                'sample_id' => 1242,
                'user_id' => 8,
                'created_at' => '2024-12-02 18:38:22',
                'updated_at' => '2024-12-02 18:38:22',
            ),
            338 => 
            array (
                'id' => 842,
                'code' => 'R9-12022024-CHE-1179',
                'information' => NULL,
                'sample_id' => 1243,
                'user_id' => 8,
                'created_at' => '2024-12-02 18:38:33',
                'updated_at' => '2024-12-02 18:38:33',
            ),
            339 => 
            array (
                'id' => 843,
                'code' => 'R9-12022024-CHE-1180',
                'information' => NULL,
                'sample_id' => 1244,
                'user_id' => 8,
                'created_at' => '2024-12-02 18:39:51',
                'updated_at' => '2024-12-02 18:39:51',
            ),
            340 => 
            array (
                'id' => 844,
                'code' => 'R9-12022024-CHE-1181',
                'information' => NULL,
                'sample_id' => 1245,
                'user_id' => 8,
                'created_at' => '2024-12-02 18:42:39',
                'updated_at' => '2024-12-02 18:42:39',
            ),
            341 => 
            array (
                'id' => 845,
                'code' => 'R9-12022024-CHE-1182',
                'information' => NULL,
                'sample_id' => 1246,
                'user_id' => 8,
                'created_at' => '2024-12-02 18:42:55',
                'updated_at' => '2024-12-02 18:42:55',
            ),
            342 => 
            array (
                'id' => 846,
                'code' => 'R9-12022024-CHE-1183',
                'information' => NULL,
                'sample_id' => 1247,
                'user_id' => 8,
                'created_at' => '2024-12-02 18:43:06',
                'updated_at' => '2024-12-02 18:43:06',
            ),
            343 => 
            array (
                'id' => 847,
                'code' => 'R9-12022024-CHE-1184',
                'information' => NULL,
                'sample_id' => 1248,
                'user_id' => 8,
                'created_at' => '2024-12-02 18:43:17',
                'updated_at' => '2024-12-02 18:43:17',
            ),
            344 => 
            array (
                'id' => 848,
                'code' => 'R9-12022024-CHE-1185',
                'information' => NULL,
                'sample_id' => 1249,
                'user_id' => 8,
                'created_at' => '2024-12-02 18:43:29',
                'updated_at' => '2024-12-02 18:43:29',
            ),
            345 => 
            array (
                'id' => 849,
                'code' => 'R9-12022024-CHE-1186',
                'information' => NULL,
                'sample_id' => 1250,
                'user_id' => 8,
                'created_at' => '2024-12-02 18:43:39',
                'updated_at' => '2024-12-02 18:43:39',
            ),
            346 => 
            array (
                'id' => 850,
                'code' => 'R9-12022024-CHE-1187',
                'information' => NULL,
                'sample_id' => 1251,
                'user_id' => 8,
                'created_at' => '2024-12-02 18:43:52',
                'updated_at' => '2024-12-02 18:43:52',
            ),
            347 => 
            array (
                'id' => 851,
                'code' => 'R9-12022024-CHE-1188',
                'information' => NULL,
                'sample_id' => 1252,
                'user_id' => 8,
                'created_at' => '2024-12-02 18:44:04',
                'updated_at' => '2024-12-02 18:44:04',
            ),
            348 => 
            array (
                'id' => 852,
                'code' => 'R9-12022024-CHE-1189',
                'information' => NULL,
                'sample_id' => 1253,
                'user_id' => 8,
                'created_at' => '2024-12-02 18:44:14',
                'updated_at' => '2024-12-02 18:44:14',
            ),
            349 => 
            array (
                'id' => 853,
                'code' => 'R9-12022024-CHE-1190',
                'information' => NULL,
                'sample_id' => 1254,
                'user_id' => 8,
                'created_at' => '2024-12-02 18:44:23',
                'updated_at' => '2024-12-02 18:44:23',
            ),
            350 => 
            array (
                'id' => 854,
                'code' => 'R9-12022024-CHE-1191',
                'information' => NULL,
                'sample_id' => 1255,
                'user_id' => 8,
                'created_at' => '2024-12-02 18:45:08',
                'updated_at' => '2024-12-02 18:45:08',
            ),
            351 => 
            array (
                'id' => 855,
                'code' => 'R9-12022024-CHE-1192',
                'information' => NULL,
                'sample_id' => 1256,
                'user_id' => 8,
                'created_at' => '2024-12-02 18:45:23',
                'updated_at' => '2024-12-02 18:45:23',
            ),
            352 => 
            array (
                'id' => 856,
                'code' => 'R9-12022024-CHE-1193',
                'information' => NULL,
                'sample_id' => 1257,
                'user_id' => 8,
                'created_at' => '2024-12-02 18:45:33',
                'updated_at' => '2024-12-02 18:45:33',
            ),
            353 => 
            array (
                'id' => 857,
                'code' => 'R9-12022024-CHE-1194',
                'information' => NULL,
                'sample_id' => 1258,
                'user_id' => 8,
                'created_at' => '2024-12-02 18:45:43',
                'updated_at' => '2024-12-02 18:45:43',
            ),
            354 => 
            array (
                'id' => 858,
                'code' => 'R9-12022024-CHE-1195',
                'information' => NULL,
                'sample_id' => 1259,
                'user_id' => 8,
                'created_at' => '2024-12-02 18:45:56',
                'updated_at' => '2024-12-02 18:45:56',
            ),
            355 => 
            array (
                'id' => 859,
                'code' => 'R9-12022024-CHE-1196',
                'information' => NULL,
                'sample_id' => 1260,
                'user_id' => 8,
                'created_at' => '2024-12-02 18:46:06',
                'updated_at' => '2024-12-02 18:46:06',
            ),
            356 => 
            array (
                'id' => 860,
                'code' => 'R9-12022024-CHE-1197',
                'information' => NULL,
                'sample_id' => 1261,
                'user_id' => 8,
                'created_at' => '2024-12-02 18:46:17',
                'updated_at' => '2024-12-02 18:46:17',
            ),
            357 => 
            array (
                'id' => 861,
                'code' => 'R9-12022024-CHE-1198',
                'information' => NULL,
                'sample_id' => 1262,
                'user_id' => 8,
                'created_at' => '2024-12-02 18:46:30',
                'updated_at' => '2024-12-02 18:46:30',
            ),
            358 => 
            array (
                'id' => 862,
                'code' => 'R9-12022024-CHE-1199',
                'information' => NULL,
                'sample_id' => 1263,
                'user_id' => 8,
                'created_at' => '2024-12-02 18:46:40',
                'updated_at' => '2024-12-02 18:46:40',
            ),
            359 => 
            array (
                'id' => 863,
                'code' => 'R9-12022024-CHE-1200',
                'information' => NULL,
                'sample_id' => 1264,
                'user_id' => 8,
                'created_at' => '2024-12-02 18:46:49',
                'updated_at' => '2024-12-02 18:46:49',
            ),
            360 => 
            array (
                'id' => 864,
                'code' => 'R9-12022024-CHE-1201',
                'information' => NULL,
                'sample_id' => 1368,
                'user_id' => 8,
                'created_at' => '2024-12-02 21:39:36',
                'updated_at' => '2024-12-02 21:39:36',
            ),
            361 => 
            array (
                'id' => 865,
                'code' => 'R9-12022024-CHE-1202',
                'information' => NULL,
                'sample_id' => 1369,
                'user_id' => 8,
                'created_at' => '2024-12-02 21:39:57',
                'updated_at' => '2024-12-02 21:39:57',
            ),
            362 => 
            array (
                'id' => 866,
                'code' => 'R9-12022024-CHE-1203',
                'information' => NULL,
                'sample_id' => 1370,
                'user_id' => 8,
                'created_at' => '2024-12-02 21:40:07',
                'updated_at' => '2024-12-02 21:40:07',
            ),
            363 => 
            array (
                'id' => 867,
                'code' => 'R9-12022024-CHE-1204',
                'information' => NULL,
                'sample_id' => 1371,
                'user_id' => 8,
                'created_at' => '2024-12-02 22:25:56',
                'updated_at' => '2024-12-02 22:25:56',
            ),
            364 => 
            array (
                'id' => 868,
                'code' => 'R9-12022024-CHE-1205',
                'information' => NULL,
                'sample_id' => 1396,
                'user_id' => 8,
                'created_at' => '2024-12-02 22:32:18',
                'updated_at' => '2024-12-02 22:32:18',
            ),
            365 => 
            array (
                'id' => 869,
                'code' => 'R9-12022024-CHE-1206',
                'information' => NULL,
                'sample_id' => 1372,
                'user_id' => 8,
                'created_at' => '2024-12-02 22:33:12',
                'updated_at' => '2024-12-02 22:33:12',
            ),
            366 => 
            array (
                'id' => 870,
                'code' => 'R9-12022024-CHE-1207',
                'information' => NULL,
                'sample_id' => 1421,
                'user_id' => 8,
                'created_at' => '2024-12-02 22:35:02',
                'updated_at' => '2024-12-02 22:35:02',
            ),
            367 => 
            array (
                'id' => 871,
                'code' => 'R9-12022024-CHE-1208',
                'information' => NULL,
                'sample_id' => 1422,
                'user_id' => 8,
                'created_at' => '2024-12-02 22:35:54',
                'updated_at' => '2024-12-02 22:35:54',
            ),
            368 => 
            array (
                'id' => 872,
                'code' => 'R9-12022024-CHE-1209',
                'information' => NULL,
                'sample_id' => 1423,
                'user_id' => 8,
                'created_at' => '2024-12-02 22:36:41',
                'updated_at' => '2024-12-02 22:36:41',
            ),
            369 => 
            array (
                'id' => 873,
                'code' => 'R9-12102024-CHE-1210',
                'information' => NULL,
                'sample_id' => 1427,
                'user_id' => 8,
                'created_at' => '2024-12-02 22:36:43',
                'updated_at' => '2024-12-02 22:36:43',
            ),
            370 => 
            array (
                'id' => 874,
                'code' => 'R9-12022024-CHE-1211',
                'information' => NULL,
                'sample_id' => 1442,
                'user_id' => 8,
                'created_at' => '2024-12-02 22:37:48',
                'updated_at' => '2024-12-02 22:37:48',
            ),
            371 => 
            array (
                'id' => 875,
                'code' => 'R9-12022024-CHE-1212',
                'information' => NULL,
                'sample_id' => 1450,
                'user_id' => 8,
                'created_at' => '2024-12-02 22:38:31',
                'updated_at' => '2024-12-02 22:38:31',
            ),
            372 => 
            array (
                'id' => 876,
                'code' => 'R9-12022024-MET-1143',
                'information' => NULL,
                'sample_id' => 1572,
                'user_id' => 13,
                'created_at' => '2024-12-02 23:10:26',
                'updated_at' => '2024-12-02 23:10:26',
            ),
            373 => 
            array (
                'id' => 877,
                'code' => 'R9-12032024-MET-1144',
                'information' => NULL,
                'sample_id' => 1574,
                'user_id' => 12,
                'created_at' => '2024-12-03 16:22:18',
                'updated_at' => '2024-12-03 16:22:18',
            ),
            374 => 
            array (
                'id' => 878,
                'code' => 'R9-12032024-CHE-1213',
                'information' => NULL,
                'sample_id' => 1446,
                'user_id' => 7,
                'created_at' => '2024-12-03 18:45:00',
                'updated_at' => '2024-12-03 18:45:00',
            ),
            375 => 
            array (
                'id' => 879,
                'code' => 'R9-12032024-CHE-1214',
                'information' => NULL,
                'sample_id' => 1447,
                'user_id' => 7,
                'created_at' => '2024-12-03 18:45:41',
                'updated_at' => '2024-12-03 18:45:41',
            ),
            376 => 
            array (
                'id' => 880,
                'code' => 'R9-12032024-CHE-1215',
                'information' => NULL,
                'sample_id' => 1448,
                'user_id' => 7,
                'created_at' => '2024-12-03 18:46:02',
                'updated_at' => '2024-12-03 18:46:02',
            ),
            377 => 
            array (
                'id' => 881,
                'code' => 'R9-12032024-CHE-1216',
                'information' => NULL,
                'sample_id' => 1449,
                'user_id' => 7,
                'created_at' => '2024-12-03 18:46:28',
                'updated_at' => '2024-12-03 18:46:28',
            ),
            378 => 
            array (
                'id' => 882,
                'code' => 'R9-12032024-CHE-1217',
                'information' => NULL,
                'sample_id' => 1374,
                'user_id' => 8,
                'created_at' => '2024-12-03 22:19:04',
                'updated_at' => '2024-12-03 22:19:04',
            ),
            379 => 
            array (
                'id' => 883,
                'code' => 'R9-12032024-CHE-1218',
                'information' => NULL,
                'sample_id' => 1513,
                'user_id' => 8,
                'created_at' => '2024-12-03 23:32:54',
                'updated_at' => '2024-12-03 23:32:54',
            ),
            380 => 
            array (
                'id' => 884,
                'code' => 'R9-12032024-CHE-1219',
                'information' => NULL,
                'sample_id' => 1514,
                'user_id' => 8,
                'created_at' => '2024-12-03 23:39:11',
                'updated_at' => '2024-12-03 23:39:11',
            ),
            381 => 
            array (
                'id' => 885,
                'code' => 'R9-12032024-CHE-1220',
                'information' => NULL,
                'sample_id' => 1515,
                'user_id' => 8,
                'created_at' => '2024-12-03 23:39:21',
                'updated_at' => '2024-12-03 23:39:21',
            ),
            382 => 
            array (
                'id' => 886,
                'code' => 'R9-12032024-CHE-1221',
                'information' => NULL,
                'sample_id' => 1516,
                'user_id' => 8,
                'created_at' => '2024-12-03 23:39:27',
                'updated_at' => '2024-12-03 23:39:27',
            ),
            383 => 
            array (
                'id' => 887,
                'code' => 'R9-12032024-MET-1145',
                'information' => NULL,
                'sample_id' => 1577,
                'user_id' => 13,
                'created_at' => '2024-12-03 23:48:48',
                'updated_at' => '2024-12-03 23:48:48',
            ),
            384 => 
            array (
                'id' => 888,
                'code' => 'R9-12032024-MET-1146',
                'information' => NULL,
                'sample_id' => 1591,
                'user_id' => 13,
                'created_at' => '2024-12-03 23:50:45',
                'updated_at' => '2024-12-03 23:50:45',
            ),
            385 => 
            array (
                'id' => 889,
                'code' => 'R9-12032024-MET-1147',
                'information' => NULL,
                'sample_id' => 1599,
                'user_id' => 12,
                'created_at' => '2024-12-04 00:52:42',
                'updated_at' => '2024-12-04 00:52:42',
            ),
            386 => 
            array (
                'id' => 890,
                'code' => 'R9-12042024-CHE-1222',
                'information' => NULL,
                'sample_id' => 1501,
                'user_id' => 8,
                'created_at' => '2024-12-04 08:18:02',
                'updated_at' => '2024-12-04 08:18:02',
            ),
            387 => 
            array (
                'id' => 891,
                'code' => 'R9-12042024-CHE-1223',
                'information' => NULL,
                'sample_id' => 1502,
                'user_id' => 8,
                'created_at' => '2024-12-04 08:18:08',
                'updated_at' => '2024-12-04 08:18:08',
            ),
            388 => 
            array (
                'id' => 892,
                'code' => 'R9-12042024-CHE-1224',
                'information' => NULL,
                'sample_id' => 1503,
                'user_id' => 8,
                'created_at' => '2024-12-04 08:18:14',
                'updated_at' => '2024-12-04 08:18:14',
            ),
            389 => 
            array (
                'id' => 893,
                'code' => 'R9-12042024-CHE-1225',
                'information' => NULL,
                'sample_id' => 1187,
                'user_id' => 8,
                'created_at' => '2024-12-04 09:04:56',
                'updated_at' => '2024-12-04 09:04:56',
            ),
            390 => 
            array (
                'id' => 894,
                'code' => 'R9-12042024-CHE-1226',
                'information' => NULL,
                'sample_id' => 1188,
                'user_id' => 8,
                'created_at' => '2024-12-04 09:06:43',
                'updated_at' => '2024-12-04 09:06:43',
            ),
            391 => 
            array (
                'id' => 895,
                'code' => 'R9-12042024-CHE-1227',
                'information' => NULL,
                'sample_id' => 1200,
                'user_id' => 8,
                'created_at' => '2024-12-04 09:14:54',
                'updated_at' => '2024-12-04 09:14:54',
            ),
            392 => 
            array (
                'id' => 896,
                'code' => 'R9-12042024-CHE-1228',
                'information' => NULL,
                'sample_id' => 1200,
                'user_id' => 8,
                'created_at' => '2024-12-04 09:14:55',
                'updated_at' => '2024-12-04 09:14:55',
            ),
            393 => 
            array (
                'id' => 897,
                'code' => 'R9-12042024-CHE-1229',
                'information' => NULL,
                'sample_id' => 1201,
                'user_id' => 8,
                'created_at' => '2024-12-04 09:15:39',
                'updated_at' => '2024-12-04 09:15:39',
            ),
            394 => 
            array (
                'id' => 898,
                'code' => 'R9-12042024-CHE-1230',
                'information' => NULL,
                'sample_id' => 1202,
                'user_id' => 8,
                'created_at' => '2024-12-04 09:16:05',
                'updated_at' => '2024-12-04 09:16:05',
            ),
            395 => 
            array (
                'id' => 899,
                'code' => 'R9-12042024-CHE-1231',
                'information' => NULL,
                'sample_id' => 1203,
                'user_id' => 8,
                'created_at' => '2024-12-04 09:16:32',
                'updated_at' => '2024-12-04 09:16:32',
            ),
            396 => 
            array (
                'id' => 900,
                'code' => 'R9-12042024-CHE-1232',
                'information' => NULL,
                'sample_id' => 1333,
                'user_id' => 8,
                'created_at' => '2024-12-04 09:17:47',
                'updated_at' => '2024-12-04 09:17:47',
            ),
            397 => 
            array (
                'id' => 901,
                'code' => 'R9-12042024-CHE-1233',
                'information' => NULL,
                'sample_id' => 1365,
                'user_id' => 8,
                'created_at' => '2024-12-04 09:19:18',
                'updated_at' => '2024-12-04 09:19:18',
            ),
            398 => 
            array (
                'id' => 902,
                'code' => 'R9-12042024-CHE-1234',
                'information' => NULL,
                'sample_id' => 1366,
                'user_id' => 8,
                'created_at' => '2024-12-04 09:20:36',
                'updated_at' => '2024-12-04 09:20:36',
            ),
            399 => 
            array (
                'id' => 903,
                'code' => 'R9-12042024-MET-1148',
                'information' => NULL,
                'sample_id' => 522,
                'user_id' => 13,
                'created_at' => '2024-12-04 16:21:57',
                'updated_at' => '2024-12-04 16:21:57',
            ),
            400 => 
            array (
                'id' => 904,
                'code' => 'R9-12042024-CHE-1235',
                'information' => NULL,
                'sample_id' => 1177,
                'user_id' => 7,
                'created_at' => '2024-12-04 18:17:51',
                'updated_at' => '2024-12-04 18:17:51',
            ),
            401 => 
            array (
                'id' => 905,
                'code' => 'R9-12042024-CHE-1236',
                'information' => NULL,
                'sample_id' => 1178,
                'user_id' => 7,
                'created_at' => '2024-12-04 19:03:43',
                'updated_at' => '2024-12-04 19:03:43',
            ),
            402 => 
            array (
                'id' => 906,
                'code' => 'R9-12032024-MIC-1515',
                'information' => NULL,
                'sample_id' => 1425,
                'user_id' => 16,
                'created_at' => '2024-12-04 21:23:54',
                'updated_at' => '2024-12-04 21:23:54',
            ),
            403 => 
            array (
                'id' => 907,
                'code' => 'R9-12032024-MIC-1516',
                'information' => NULL,
                'sample_id' => 1426,
                'user_id' => 16,
                'created_at' => '2024-12-04 21:25:03',
                'updated_at' => '2024-12-04 21:25:03',
            ),
            404 => 
            array (
                'id' => 908,
                'code' => 'R9-12042024-CHE-1237',
                'information' => NULL,
                'sample_id' => 1367,
                'user_id' => 8,
                'created_at' => '2024-12-04 21:26:04',
                'updated_at' => '2024-12-04 21:26:04',
            ),
            405 => 
            array (
                'id' => 909,
                'code' => 'R9-12042024-MIC-1517',
                'information' => NULL,
                'sample_id' => 1293,
                'user_id' => 16,
                'created_at' => '2024-12-05 00:02:49',
                'updated_at' => '2024-12-05 00:02:49',
            ),
            406 => 
            array (
                'id' => 910,
                'code' => 'R9-12042024-MIC-1518',
                'information' => NULL,
                'sample_id' => 1294,
                'user_id' => 16,
                'created_at' => '2024-12-05 00:03:09',
                'updated_at' => '2024-12-05 00:03:09',
            ),
            407 => 
            array (
                'id' => 911,
                'code' => 'R9-12042024-MIC-1519',
                'information' => NULL,
                'sample_id' => 1295,
                'user_id' => 16,
                'created_at' => '2024-12-05 00:03:21',
                'updated_at' => '2024-12-05 00:03:21',
            ),
            408 => 
            array (
                'id' => 912,
                'code' => 'R9-12042024-MIC-1520',
                'information' => NULL,
                'sample_id' => 1300,
                'user_id' => 16,
                'created_at' => '2024-12-05 00:03:45',
                'updated_at' => '2024-12-05 00:03:45',
            ),
            409 => 
            array (
                'id' => 913,
                'code' => 'R9-12042024-MIC-1521',
                'information' => NULL,
                'sample_id' => 1301,
                'user_id' => 16,
                'created_at' => '2024-12-05 00:03:59',
                'updated_at' => '2024-12-05 00:03:59',
            ),
            410 => 
            array (
                'id' => 914,
                'code' => 'R9-12042024-MIC-1522',
                'information' => NULL,
                'sample_id' => 1302,
                'user_id' => 16,
                'created_at' => '2024-12-05 00:04:11',
                'updated_at' => '2024-12-05 00:04:11',
            ),
            411 => 
            array (
                'id' => 915,
                'code' => 'R9-12042024-MIC-1523',
                'information' => NULL,
                'sample_id' => 1303,
                'user_id' => 16,
                'created_at' => '2024-12-05 00:04:30',
                'updated_at' => '2024-12-05 00:04:30',
            ),
            412 => 
            array (
                'id' => 916,
                'code' => 'R9-12042024-MIC-1524',
                'information' => NULL,
                'sample_id' => 1499,
                'user_id' => 16,
                'created_at' => '2024-12-05 00:05:03',
                'updated_at' => '2024-12-05 00:05:03',
            ),
            413 => 
            array (
                'id' => 917,
                'code' => 'R9-12042024-MIC-1525',
                'information' => NULL,
                'sample_id' => 1500,
                'user_id' => 16,
                'created_at' => '2024-12-05 00:05:20',
                'updated_at' => '2024-12-05 00:05:20',
            ),
            414 => 
            array (
                'id' => 918,
                'code' => 'R9-12062024-CHE-1238',
                'information' => NULL,
                'sample_id' => 1265,
                'user_id' => 8,
                'created_at' => '2024-12-06 22:01:03',
                'updated_at' => '2024-12-06 22:01:03',
            ),
            415 => 
            array (
                'id' => 919,
                'code' => 'R9-12062024-CHE-1239',
                'information' => NULL,
                'sample_id' => 1266,
                'user_id' => 8,
                'created_at' => '2024-12-06 22:01:24',
                'updated_at' => '2024-12-06 22:01:24',
            ),
            416 => 
            array (
                'id' => 920,
                'code' => 'R9-12062024-CHE-1240',
                'information' => NULL,
                'sample_id' => 1267,
                'user_id' => 8,
                'created_at' => '2024-12-06 22:01:33',
                'updated_at' => '2024-12-06 22:01:33',
            ),
            417 => 
            array (
                'id' => 921,
                'code' => 'R9-12062024-CHE-1241',
                'information' => NULL,
                'sample_id' => 1268,
                'user_id' => 8,
                'created_at' => '2024-12-06 22:01:58',
                'updated_at' => '2024-12-06 22:01:58',
            ),
            418 => 
            array (
                'id' => 922,
                'code' => 'R9-12062024-CHE-1242',
                'information' => NULL,
                'sample_id' => 1269,
                'user_id' => 8,
                'created_at' => '2024-12-06 22:02:24',
                'updated_at' => '2024-12-06 22:02:24',
            ),
            419 => 
            array (
                'id' => 923,
                'code' => 'R9-12062024-CHE-1243',
                'information' => NULL,
                'sample_id' => 1270,
                'user_id' => 8,
                'created_at' => '2024-12-06 22:03:05',
                'updated_at' => '2024-12-06 22:03:05',
            ),
            420 => 
            array (
                'id' => 924,
                'code' => 'R9-12062024-CHE-1244',
                'information' => NULL,
                'sample_id' => 1271,
                'user_id' => 8,
                'created_at' => '2024-12-06 22:03:19',
                'updated_at' => '2024-12-06 22:03:19',
            ),
            421 => 
            array (
                'id' => 925,
                'code' => 'R9-12062024-CHE-1245',
                'information' => NULL,
                'sample_id' => 1272,
                'user_id' => 8,
                'created_at' => '2024-12-06 22:03:33',
                'updated_at' => '2024-12-06 22:03:33',
            ),
            422 => 
            array (
                'id' => 926,
                'code' => 'R9-12072024-CHE-1246',
                'information' => NULL,
                'sample_id' => 1441,
                'user_id' => 8,
                'created_at' => '2024-12-07 13:10:33',
                'updated_at' => '2024-12-07 13:10:33',
            ),
            423 => 
            array (
                'id' => 927,
                'code' => 'R9-12092024-CHE-1247',
                'information' => NULL,
                'sample_id' => 1224,
                'user_id' => 8,
                'created_at' => '2024-12-09 15:27:44',
                'updated_at' => '2024-12-09 15:27:44',
            ),
            424 => 
            array (
                'id' => 928,
                'code' => 'R9-12092024-CHE-1248',
                'information' => NULL,
                'sample_id' => 1225,
                'user_id' => 8,
                'created_at' => '2024-12-09 15:27:51',
                'updated_at' => '2024-12-09 15:27:51',
            ),
            425 => 
            array (
                'id' => 929,
                'code' => 'R9-12092024-CHE-1249',
                'information' => NULL,
                'sample_id' => 1225,
                'user_id' => 8,
                'created_at' => '2024-12-09 15:27:52',
                'updated_at' => '2024-12-09 15:27:52',
            ),
            426 => 
            array (
                'id' => 930,
                'code' => 'R9-12092024-CHE-1250',
                'information' => NULL,
                'sample_id' => 1226,
                'user_id' => 8,
                'created_at' => '2024-12-09 15:28:05',
                'updated_at' => '2024-12-09 15:28:05',
            ),
            427 => 
            array (
                'id' => 931,
                'code' => 'R9-12092024-CHE-1251',
                'information' => NULL,
                'sample_id' => 1227,
                'user_id' => 8,
                'created_at' => '2024-12-09 15:28:21',
                'updated_at' => '2024-12-09 15:28:21',
            ),
            428 => 
            array (
                'id' => 932,
                'code' => 'R9-12092024-CHE-1252',
                'information' => NULL,
                'sample_id' => 1228,
                'user_id' => 8,
                'created_at' => '2024-12-09 15:28:32',
                'updated_at' => '2024-12-09 15:28:32',
            ),
            429 => 
            array (
                'id' => 933,
                'code' => 'R9-12092024-CHE-1253',
                'information' => NULL,
                'sample_id' => 1229,
                'user_id' => 8,
                'created_at' => '2024-12-09 15:28:46',
                'updated_at' => '2024-12-09 15:28:46',
            ),
            430 => 
            array (
                'id' => 934,
                'code' => 'R9-12092024-CHE-1254',
                'information' => NULL,
                'sample_id' => 1230,
                'user_id' => 8,
                'created_at' => '2024-12-09 15:28:53',
                'updated_at' => '2024-12-09 15:28:53',
            ),
            431 => 
            array (
                'id' => 935,
                'code' => 'R9-12092024-CHE-1255',
                'information' => NULL,
                'sample_id' => 1231,
                'user_id' => 8,
                'created_at' => '2024-12-09 15:29:06',
                'updated_at' => '2024-12-09 15:29:06',
            ),
            432 => 
            array (
                'id' => 936,
                'code' => 'R9-12092024-CHE-1256',
                'information' => NULL,
                'sample_id' => 1232,
                'user_id' => 8,
                'created_at' => '2024-12-09 15:29:11',
                'updated_at' => '2024-12-09 15:29:11',
            ),
            433 => 
            array (
                'id' => 937,
                'code' => 'R9-12092024-CHE-1257',
                'information' => NULL,
                'sample_id' => 1233,
                'user_id' => 8,
                'created_at' => '2024-12-09 15:29:19',
                'updated_at' => '2024-12-09 15:29:19',
            ),
            434 => 
            array (
                'id' => 938,
                'code' => 'R9-12092024-MET-1149',
                'information' => NULL,
                'sample_id' => 1633,
                'user_id' => 13,
                'created_at' => '2024-12-09 18:36:52',
                'updated_at' => '2024-12-09 18:36:52',
            ),
            435 => 
            array (
                'id' => 939,
                'code' => 'R9-12092024-MET-1150',
                'information' => NULL,
                'sample_id' => 1211,
                'user_id' => 13,
                'created_at' => '2024-12-09 18:54:50',
                'updated_at' => '2024-12-09 18:54:50',
            ),
            436 => 
            array (
                'id' => 940,
                'code' => 'R9-12092024-CHE-1258',
                'information' => NULL,
                'sample_id' => 1595,
                'user_id' => 7,
                'created_at' => '2024-12-10 00:57:03',
                'updated_at' => '2024-12-10 00:57:03',
            ),
            437 => 
            array (
                'id' => 941,
                'code' => 'R9-12092024-CHE-1259',
                'information' => NULL,
                'sample_id' => 1596,
                'user_id' => 7,
                'created_at' => '2024-12-10 00:57:11',
                'updated_at' => '2024-12-10 00:57:11',
            ),
            438 => 
            array (
                'id' => 942,
                'code' => 'R9-12092024-CHE-1260',
                'information' => NULL,
                'sample_id' => 1597,
                'user_id' => 7,
                'created_at' => '2024-12-10 00:57:17',
                'updated_at' => '2024-12-10 00:57:17',
            ),
            439 => 
            array (
                'id' => 943,
                'code' => 'R9-12092024-CHE-1261',
                'information' => NULL,
                'sample_id' => 1598,
                'user_id' => 7,
                'created_at' => '2024-12-10 00:57:31',
                'updated_at' => '2024-12-10 00:57:31',
            ),
            440 => 
            array (
                'id' => 944,
                'code' => 'R9-12102024-CHE-1262',
                'information' => NULL,
                'sample_id' => 1429,
                'user_id' => 8,
                'created_at' => '2024-12-10 16:02:43',
                'updated_at' => '2024-12-10 16:02:43',
            ),
            441 => 
            array (
                'id' => 945,
                'code' => 'R9-12102024-CHE-1263',
                'information' => NULL,
                'sample_id' => 1430,
                'user_id' => 8,
                'created_at' => '2024-12-10 16:02:48',
                'updated_at' => '2024-12-10 16:02:48',
            ),
            442 => 
            array (
                'id' => 946,
                'code' => 'R9-12102024-MIC-1526',
                'information' => NULL,
                'sample_id' => 1444,
                'user_id' => 6,
                'created_at' => '2024-12-10 21:12:39',
                'updated_at' => '2024-12-10 21:12:39',
            ),
            443 => 
            array (
                'id' => 947,
                'code' => 'R9-12102024-MIC-1527',
                'information' => NULL,
                'sample_id' => 1445,
                'user_id' => 6,
                'created_at' => '2024-12-10 21:13:02',
                'updated_at' => '2024-12-10 21:13:02',
            ),
            444 => 
            array (
                'id' => 948,
                'code' => 'R9-12102024-MIC-1528',
                'information' => NULL,
                'sample_id' => 1571,
                'user_id' => 6,
                'created_at' => '2024-12-10 23:51:31',
                'updated_at' => '2024-12-10 23:51:31',
            ),
            445 => 
            array (
                'id' => 949,
                'code' => 'R9-12102024-MIC-1529',
                'information' => NULL,
                'sample_id' => 1621,
                'user_id' => 16,
                'created_at' => '2024-12-11 01:29:54',
                'updated_at' => '2024-12-11 01:29:54',
            ),
            446 => 
            array (
                'id' => 950,
                'code' => 'R9-12102024-MIC-1530',
                'information' => NULL,
                'sample_id' => 1627,
                'user_id' => 16,
                'created_at' => '2024-12-11 01:30:42',
                'updated_at' => '2024-12-11 01:30:42',
            ),
            447 => 
            array (
                'id' => 951,
                'code' => 'R9-12112024-MIC-1531',
                'information' => NULL,
                'sample_id' => 1586,
                'user_id' => 16,
                'created_at' => '2024-12-11 23:07:23',
                'updated_at' => '2024-12-11 23:07:23',
            ),
            448 => 
            array (
                'id' => 952,
                'code' => 'R9-12112024-MIC-1532',
                'information' => NULL,
                'sample_id' => 1587,
                'user_id' => 16,
                'created_at' => '2024-12-11 23:07:41',
                'updated_at' => '2024-12-11 23:07:41',
            ),
            449 => 
            array (
                'id' => 953,
                'code' => 'R9-12112024-MIC-1533',
                'information' => NULL,
                'sample_id' => 1588,
                'user_id' => 16,
                'created_at' => '2024-12-11 23:07:58',
                'updated_at' => '2024-12-11 23:07:58',
            ),
            450 => 
            array (
                'id' => 954,
                'code' => 'R9-12112024-MIC-1534',
                'information' => NULL,
                'sample_id' => 1589,
                'user_id' => 16,
                'created_at' => '2024-12-11 23:08:12',
                'updated_at' => '2024-12-11 23:08:12',
            ),
            451 => 
            array (
                'id' => 955,
                'code' => 'R9-12112024-MIC-1535',
                'information' => NULL,
                'sample_id' => 1610,
                'user_id' => 16,
                'created_at' => '2024-12-12 01:02:08',
                'updated_at' => '2024-12-12 01:02:08',
            ),
            452 => 
            array (
                'id' => 956,
                'code' => 'R9-12112024-MIC-1536',
                'information' => NULL,
                'sample_id' => 1611,
                'user_id' => 16,
                'created_at' => '2024-12-12 01:02:56',
                'updated_at' => '2024-12-12 01:02:56',
            ),
            453 => 
            array (
                'id' => 957,
                'code' => 'R9-12112024-MIC-1537',
                'information' => NULL,
                'sample_id' => 1612,
                'user_id' => 16,
                'created_at' => '2024-12-12 01:03:24',
                'updated_at' => '2024-12-12 01:03:24',
            ),
            454 => 
            array (
                'id' => 958,
                'code' => 'R9-12112024-MIC-1538',
                'information' => NULL,
                'sample_id' => 1613,
                'user_id' => 16,
                'created_at' => '2024-12-12 01:03:45',
                'updated_at' => '2024-12-12 01:03:45',
            ),
            455 => 
            array (
                'id' => 959,
                'code' => 'R9-12112024-MIC-1539',
                'information' => NULL,
                'sample_id' => 1614,
                'user_id' => 16,
                'created_at' => '2024-12-12 01:04:11',
                'updated_at' => '2024-12-12 01:04:11',
            ),
            456 => 
            array (
                'id' => 960,
                'code' => 'R9-12112024-MIC-1540',
                'information' => NULL,
                'sample_id' => 1615,
                'user_id' => 16,
                'created_at' => '2024-12-12 01:04:27',
                'updated_at' => '2024-12-12 01:04:27',
            ),
            457 => 
            array (
                'id' => 961,
                'code' => 'R9-12112024-MIC-1541',
                'information' => NULL,
                'sample_id' => 1616,
                'user_id' => 16,
                'created_at' => '2024-12-12 01:04:52',
                'updated_at' => '2024-12-12 01:04:52',
            ),
            458 => 
            array (
                'id' => 962,
                'code' => 'R9-12112024-MIC-1542',
                'information' => NULL,
                'sample_id' => 1439,
                'user_id' => 16,
                'created_at' => '2024-12-12 01:06:12',
                'updated_at' => '2024-12-12 01:06:12',
            ),
            459 => 
            array (
                'id' => 963,
                'code' => 'R9-12122024-MET-1151',
                'information' => NULL,
                'sample_id' => 1650,
                'user_id' => 12,
                'created_at' => '2024-12-12 17:18:48',
                'updated_at' => '2024-12-12 17:18:48',
            ),
            460 => 
            array (
                'id' => 964,
                'code' => 'R9-12122024-MET-1152',
                'information' => NULL,
                'sample_id' => 1651,
                'user_id' => 12,
                'created_at' => '2024-12-12 17:19:18',
                'updated_at' => '2024-12-12 17:19:18',
            ),
            461 => 
            array (
                'id' => 965,
                'code' => 'R9-12122024-CHE-1264',
                'information' => NULL,
                'sample_id' => 1412,
                'user_id' => 8,
                'created_at' => '2024-12-12 18:50:48',
                'updated_at' => '2024-12-12 18:50:48',
            ),
            462 => 
            array (
                'id' => 966,
                'code' => 'R9-12122024-CHE-1265',
                'information' => NULL,
                'sample_id' => 1192,
                'user_id' => 8,
                'created_at' => '2024-12-12 18:51:33',
                'updated_at' => '2024-12-12 18:51:33',
            ),
            463 => 
            array (
                'id' => 967,
                'code' => 'R9-12122024-CHE-1266',
                'information' => NULL,
                'sample_id' => 1600,
                'user_id' => 8,
                'created_at' => '2024-12-12 22:47:12',
                'updated_at' => '2024-12-12 22:47:12',
            ),
            464 => 
            array (
                'id' => 968,
                'code' => 'R9-12122024-CHE-1267',
                'information' => NULL,
                'sample_id' => 1629,
                'user_id' => 8,
                'created_at' => '2024-12-12 22:48:36',
                'updated_at' => '2024-12-12 22:48:36',
            ),
            465 => 
            array (
                'id' => 969,
                'code' => 'R9-12122024-CHE-1268',
                'information' => NULL,
                'sample_id' => 1630,
                'user_id' => 8,
                'created_at' => '2024-12-12 22:48:57',
                'updated_at' => '2024-12-12 22:48:57',
            ),
            466 => 
            array (
                'id' => 970,
                'code' => 'R9-12122024-CHE-1269',
                'information' => NULL,
                'sample_id' => 1631,
                'user_id' => 8,
                'created_at' => '2024-12-12 22:49:07',
                'updated_at' => '2024-12-12 22:49:07',
            ),
            467 => 
            array (
                'id' => 971,
                'code' => 'R9-12122024-CHE-1270',
                'information' => NULL,
                'sample_id' => 1489,
                'user_id' => 8,
                'created_at' => '2024-12-12 22:49:35',
                'updated_at' => '2024-12-12 22:49:35',
            ),
            468 => 
            array (
                'id' => 972,
                'code' => 'R9-12132024-CHE-1271',
                'information' => NULL,
                'sample_id' => 1575,
                'user_id' => 6,
                'created_at' => '2024-12-13 18:35:38',
                'updated_at' => '2024-12-13 18:35:38',
            ),
            469 => 
            array (
                'id' => 973,
                'code' => 'R9-12132024-CHE-1272',
                'information' => NULL,
                'sample_id' => 1576,
                'user_id' => 6,
                'created_at' => '2024-12-13 18:35:49',
                'updated_at' => '2024-12-13 18:35:49',
            ),
            470 => 
            array (
                'id' => 974,
                'code' => 'R9-12132024-MIC-1543',
                'information' => NULL,
                'sample_id' => 1617,
                'user_id' => 16,
                'created_at' => '2024-12-13 22:43:35',
                'updated_at' => '2024-12-13 22:43:35',
            ),
            471 => 
            array (
                'id' => 975,
                'code' => 'R9-12132024-MIC-1544',
                'information' => NULL,
                'sample_id' => 1618,
                'user_id' => 16,
                'created_at' => '2024-12-13 22:43:57',
                'updated_at' => '2024-12-13 22:43:57',
            ),
            472 => 
            array (
                'id' => 976,
                'code' => 'R9-12132024-MIC-1545',
                'information' => NULL,
                'sample_id' => 1619,
                'user_id' => 16,
                'created_at' => '2024-12-13 22:44:12',
                'updated_at' => '2024-12-13 22:44:12',
            ),
            473 => 
            array (
                'id' => 977,
                'code' => 'R9-12132024-MIC-1546',
                'information' => NULL,
                'sample_id' => 1620,
                'user_id' => 16,
                'created_at' => '2024-12-13 22:44:26',
                'updated_at' => '2024-12-13 22:44:26',
            ),
            474 => 
            array (
                'id' => 978,
                'code' => 'R9-12162024-MIC-1547',
                'information' => NULL,
                'sample_id' => 1549,
                'user_id' => 16,
                'created_at' => '2024-12-16 17:14:12',
                'updated_at' => '2024-12-16 17:14:12',
            ),
            475 => 
            array (
                'id' => 979,
                'code' => 'R9-12162024-MIC-1548',
                'information' => NULL,
                'sample_id' => 1550,
                'user_id' => 16,
                'created_at' => '2024-12-16 17:14:34',
                'updated_at' => '2024-12-16 17:14:34',
            ),
            476 => 
            array (
                'id' => 980,
                'code' => 'R9-12162024-MIC-1549',
                'information' => NULL,
                'sample_id' => 1632,
                'user_id' => 16,
                'created_at' => '2024-12-16 17:15:01',
                'updated_at' => '2024-12-16 17:15:01',
            ),
            477 => 
            array (
                'id' => 981,
                'code' => 'R9-12162024-CHE-1273',
                'information' => NULL,
                'sample_id' => 1601,
                'user_id' => 8,
                'created_at' => '2024-12-16 17:15:32',
                'updated_at' => '2024-12-16 17:15:32',
            ),
            478 => 
            array (
                'id' => 982,
                'code' => 'R9-12162024-CHE-1274',
                'information' => NULL,
                'sample_id' => 1602,
                'user_id' => 8,
                'created_at' => '2024-12-16 17:16:40',
                'updated_at' => '2024-12-16 17:16:40',
            ),
            479 => 
            array (
                'id' => 983,
                'code' => 'R9-12162024-CHE-1275',
                'information' => NULL,
                'sample_id' => 1603,
                'user_id' => 8,
                'created_at' => '2024-12-16 17:16:54',
                'updated_at' => '2024-12-16 17:16:54',
            ),
            480 => 
            array (
                'id' => 984,
                'code' => 'R9-12162024-CHE-1276',
                'information' => NULL,
                'sample_id' => 1604,
                'user_id' => 8,
                'created_at' => '2024-12-16 17:17:05',
                'updated_at' => '2024-12-16 17:17:05',
            ),
            481 => 
            array (
                'id' => 985,
                'code' => 'R9-12162024-CHE-1277',
                'information' => NULL,
                'sample_id' => 1623,
                'user_id' => 8,
                'created_at' => '2024-12-16 17:19:05',
                'updated_at' => '2024-12-16 17:19:05',
            ),
            482 => 
            array (
                'id' => 986,
                'code' => 'R9-12162024-CHE-1278',
                'information' => NULL,
                'sample_id' => 1625,
                'user_id' => 8,
                'created_at' => '2024-12-16 17:19:24',
                'updated_at' => '2024-12-16 17:19:24',
            ),
            483 => 
            array (
                'id' => 987,
                'code' => 'R9-12162024-CHE-1279',
                'information' => NULL,
                'sample_id' => 1485,
                'user_id' => 8,
                'created_at' => '2024-12-16 17:21:08',
                'updated_at' => '2024-12-16 17:21:08',
            ),
            484 => 
            array (
                'id' => 988,
                'code' => 'R9-12162024-MET-1153',
                'information' => NULL,
                'sample_id' => 1703,
                'user_id' => 12,
                'created_at' => '2024-12-16 22:07:17',
                'updated_at' => '2024-12-16 22:07:17',
            ),
            485 => 
            array (
                'id' => 989,
                'code' => 'R9-12182024-CHE-1280',
                'information' => NULL,
                'sample_id' => 1417,
                'user_id' => 8,
                'created_at' => '2024-12-19 04:09:52',
                'updated_at' => '2024-12-19 04:09:52',
            ),
            486 => 
            array (
                'id' => 990,
                'code' => 'R9-12182024-CHE-1281',
                'information' => NULL,
                'sample_id' => 1418,
                'user_id' => 8,
                'created_at' => '2024-12-19 04:10:01',
                'updated_at' => '2024-12-19 04:10:01',
            ),
            487 => 
            array (
                'id' => 991,
                'code' => 'R9-12182024-CHE-1282',
                'information' => NULL,
                'sample_id' => 1419,
                'user_id' => 8,
                'created_at' => '2024-12-19 04:10:11',
                'updated_at' => '2024-12-19 04:10:11',
            ),
            488 => 
            array (
                'id' => 992,
                'code' => 'R9-12182024-CHE-1283',
                'information' => NULL,
                'sample_id' => 1419,
                'user_id' => 8,
                'created_at' => '2024-12-19 04:10:11',
                'updated_at' => '2024-12-19 04:10:11',
            ),
            489 => 
            array (
                'id' => 993,
                'code' => 'R9-12182024-CHE-1284',
                'information' => NULL,
                'sample_id' => 1420,
                'user_id' => 8,
                'created_at' => '2024-12-19 04:10:21',
                'updated_at' => '2024-12-19 04:10:21',
            ),
            490 => 
            array (
                'id' => 994,
                'code' => 'R9-12102024-CHE-1285',
                'information' => NULL,
                'sample_id' => 1428,
                'user_id' => 8,
                'created_at' => '2024-12-19 04:10:22',
                'updated_at' => '2024-12-19 04:10:22',
            ),
            491 => 
            array (
                'id' => 995,
                'code' => 'R9-12192024-MET-1154',
                'information' => NULL,
                'sample_id' => 1634,
                'user_id' => 13,
                'created_at' => '2024-12-19 19:30:49',
                'updated_at' => '2024-12-19 19:30:49',
            ),
            492 => 
            array (
                'id' => 997,
                'code' => 'R9-12202024-CHE-1286',
                'information' => NULL,
                'sample_id' => 1455,
                'user_id' => 7,
                'created_at' => '2024-12-23 23:48:02',
                'updated_at' => '2024-12-23 23:48:02',
            ),
            493 => 
            array (
                'id' => 998,
                'code' => 'R9-12202024-CHE-1287',
                'information' => NULL,
                'sample_id' => 1456,
                'user_id' => 7,
                'created_at' => '2024-12-23 23:48:29',
                'updated_at' => '2024-12-23 23:48:29',
            ),
            494 => 
            array (
                'id' => 999,
                'code' => 'R9-12202024-CHE-1288',
                'information' => NULL,
                'sample_id' => 1457,
                'user_id' => 7,
                'created_at' => '2024-12-23 23:48:40',
                'updated_at' => '2024-12-23 23:48:40',
            ),
            495 => 
            array (
                'id' => 1000,
                'code' => 'R9-12202024-CHE-1289',
                'information' => NULL,
                'sample_id' => 1458,
                'user_id' => 7,
                'created_at' => '2024-12-23 23:48:55',
                'updated_at' => '2024-12-23 23:48:55',
            ),
            496 => 
            array (
                'id' => 1001,
                'code' => 'R9-12202024-CHE-1290',
                'information' => NULL,
                'sample_id' => 1459,
                'user_id' => 7,
                'created_at' => '2024-12-23 23:49:19',
                'updated_at' => '2024-12-23 23:49:19',
            ),
            497 => 
            array (
                'id' => 1002,
                'code' => 'R9-12202024-CHE-1291',
                'information' => NULL,
                'sample_id' => 1460,
                'user_id' => 7,
                'created_at' => '2024-12-23 23:49:49',
                'updated_at' => '2024-12-23 23:49:49',
            ),
            498 => 
            array (
                'id' => 1003,
                'code' => 'R9-12202024-CHE-1292',
                'information' => NULL,
                'sample_id' => 1461,
                'user_id' => 7,
                'created_at' => '2024-12-23 23:49:58',
                'updated_at' => '2024-12-23 23:49:58',
            ),
            499 => 
            array (
                'id' => 1004,
                'code' => 'R9-12232024-CHE-1293',
                'information' => NULL,
                'sample_id' => 1551,
                'user_id' => 7,
                'created_at' => '2024-12-26 16:29:15',
                'updated_at' => '2024-12-26 16:29:15',
            ),
        ));
        \DB::table('tsr_sample_reports')->insert(array (
            0 => 
            array (
                'id' => 1005,
                'code' => 'R9-12232024-CHE-1294',
                'information' => NULL,
                'sample_id' => 1552,
                'user_id' => 7,
                'created_at' => '2024-12-26 16:29:54',
                'updated_at' => '2024-12-26 16:29:54',
            ),
            1 => 
            array (
                'id' => 1006,
                'code' => 'R9-12232024-CHE-1295',
                'information' => NULL,
                'sample_id' => 1553,
                'user_id' => 7,
                'created_at' => '2024-12-26 16:30:24',
                'updated_at' => '2024-12-26 16:30:24',
            ),
            2 => 
            array (
                'id' => 1007,
                'code' => 'R9-12232024-CHE-1296',
                'information' => NULL,
                'sample_id' => 1554,
                'user_id' => 7,
                'created_at' => '2024-12-26 16:30:54',
                'updated_at' => '2024-12-26 16:30:54',
            ),
            3 => 
            array (
                'id' => 1008,
                'code' => 'R9-12232024-CHE-1297',
                'information' => NULL,
                'sample_id' => 1555,
                'user_id' => 7,
                'created_at' => '2024-12-26 16:31:20',
                'updated_at' => '2024-12-26 16:31:20',
            ),
            4 => 
            array (
                'id' => 1009,
                'code' => 'R9-12232024-CHE-1298',
                'information' => NULL,
                'sample_id' => 1556,
                'user_id' => 7,
                'created_at' => '2024-12-26 16:47:08',
                'updated_at' => '2024-12-26 16:47:08',
            ),
            5 => 
            array (
                'id' => 1010,
                'code' => 'R9-12262024-CHE-1299',
                'information' => NULL,
                'sample_id' => 1585,
                'user_id' => 7,
                'created_at' => '2024-12-26 19:59:21',
                'updated_at' => '2024-12-26 19:59:21',
            ),
            6 => 
            array (
                'id' => 1011,
                'code' => 'R9-12262024-MET-1155',
                'information' => NULL,
                'sample_id' => 1657,
                'user_id' => 12,
                'created_at' => '2024-12-26 21:25:42',
                'updated_at' => '2024-12-26 21:25:42',
            ),
            7 => 
            array (
                'id' => 1012,
                'code' => 'R9-12262024-MET-1156',
                'information' => NULL,
                'sample_id' => 1657,
                'user_id' => 12,
                'created_at' => '2024-12-26 21:25:44',
                'updated_at' => '2024-12-26 21:25:44',
            ),
            8 => 
            array (
                'id' => 1013,
                'code' => 'R9-12272024-MET-1157',
                'information' => NULL,
                'sample_id' => 1699,
                'user_id' => 12,
                'created_at' => '2024-12-27 16:36:44',
                'updated_at' => '2024-12-27 16:36:44',
            ),
            9 => 
            array (
                'id' => 1014,
                'code' => 'R9-12272024-MET-1158',
                'information' => NULL,
                'sample_id' => 1649,
                'user_id' => 12,
                'created_at' => '2024-12-27 16:37:16',
                'updated_at' => '2024-12-27 16:37:16',
            ),
            10 => 
            array (
                'id' => 1015,
                'code' => 'R9-01022025-MET-0960',
                'information' => NULL,
                'sample_id' => 609,
                'user_id' => 13,
                'created_at' => '2025-01-02 16:48:24',
                'updated_at' => '2025-01-02 16:48:24',
            ),
            11 => 
            array (
                'id' => 1016,
                'code' => 'R9-01022025-MET-0961',
                'information' => NULL,
                'sample_id' => 610,
                'user_id' => 13,
                'created_at' => '2025-01-02 16:48:39',
                'updated_at' => '2025-01-02 16:48:39',
            ),
            12 => 
            array (
                'id' => 1017,
                'code' => 'R9-01022025-MET-0962',
                'information' => NULL,
                'sample_id' => 611,
                'user_id' => 13,
                'created_at' => '2025-01-02 16:48:49',
                'updated_at' => '2025-01-02 16:48:49',
            ),
            13 => 
            array (
                'id' => 1018,
                'code' => 'R9-01022025-MET-0963',
                'information' => NULL,
                'sample_id' => 612,
                'user_id' => 13,
                'created_at' => '2025-01-02 16:48:54',
                'updated_at' => '2025-01-02 16:48:54',
            ),
            14 => 
            array (
                'id' => 1019,
                'code' => 'R9-01022025-MET-0964',
                'information' => NULL,
                'sample_id' => 613,
                'user_id' => 13,
                'created_at' => '2025-01-02 16:49:00',
                'updated_at' => '2025-01-02 16:49:00',
            ),
            15 => 
            array (
                'id' => 1020,
                'code' => 'R9-01022025-MET-0965',
                'information' => NULL,
                'sample_id' => 614,
                'user_id' => 13,
                'created_at' => '2025-01-02 16:49:04',
                'updated_at' => '2025-01-02 16:49:04',
            ),
            16 => 
            array (
                'id' => 1021,
                'code' => 'R9-01022025-MET-0966',
                'information' => NULL,
                'sample_id' => 711,
                'user_id' => 13,
                'created_at' => '2025-01-02 17:05:27',
                'updated_at' => '2025-01-02 17:05:27',
            ),
            17 => 
            array (
                'id' => 1022,
                'code' => 'R9-01022025-MET-0967',
                'information' => NULL,
                'sample_id' => 712,
                'user_id' => 13,
                'created_at' => '2025-01-02 17:05:42',
                'updated_at' => '2025-01-02 17:05:42',
            ),
            18 => 
            array (
                'id' => 1023,
                'code' => 'R9-01022025-MET-0968',
                'information' => NULL,
                'sample_id' => 713,
                'user_id' => 13,
                'created_at' => '2025-01-02 17:05:47',
                'updated_at' => '2025-01-02 17:05:47',
            ),
            19 => 
            array (
                'id' => 1024,
                'code' => 'R9-01022025-MET-0969',
                'information' => NULL,
                'sample_id' => 714,
                'user_id' => 13,
                'created_at' => '2025-01-02 17:05:53',
                'updated_at' => '2025-01-02 17:05:53',
            ),
            20 => 
            array (
                'id' => 1025,
                'code' => 'R9-01022025-MET-0970',
                'information' => NULL,
                'sample_id' => 715,
                'user_id' => 13,
                'created_at' => '2025-01-02 17:05:58',
                'updated_at' => '2025-01-02 17:05:58',
            ),
            21 => 
            array (
                'id' => 1026,
                'code' => 'R9-01022025-MET-0971',
                'information' => NULL,
                'sample_id' => 716,
                'user_id' => 13,
                'created_at' => '2025-01-02 17:06:06',
                'updated_at' => '2025-01-02 17:06:06',
            ),
            22 => 
            array (
                'id' => 1027,
                'code' => 'R9-01022025-MET-0972',
                'information' => NULL,
                'sample_id' => 717,
                'user_id' => 13,
                'created_at' => '2025-01-02 17:06:10',
                'updated_at' => '2025-01-02 17:06:10',
            ),
            23 => 
            array (
                'id' => 1028,
                'code' => 'R9-01022025-MET-0973',
                'information' => NULL,
                'sample_id' => 718,
                'user_id' => 13,
                'created_at' => '2025-01-02 17:06:23',
                'updated_at' => '2025-01-02 17:06:23',
            ),
            24 => 
            array (
                'id' => 1029,
                'code' => 'R9-01022025-MET-0974',
                'information' => NULL,
                'sample_id' => 719,
                'user_id' => 13,
                'created_at' => '2025-01-02 17:06:27',
                'updated_at' => '2025-01-02 17:06:27',
            ),
            25 => 
            array (
                'id' => 1030,
                'code' => 'R9-01022025-MET-0975',
                'information' => NULL,
                'sample_id' => 720,
                'user_id' => 13,
                'created_at' => '2025-01-02 17:06:30',
                'updated_at' => '2025-01-02 17:06:30',
            ),
            26 => 
            array (
                'id' => 1031,
                'code' => 'R9-01022025-MET-0976',
                'information' => NULL,
                'sample_id' => 721,
                'user_id' => 13,
                'created_at' => '2025-01-02 17:06:34',
                'updated_at' => '2025-01-02 17:06:34',
            ),
            27 => 
            array (
                'id' => 1032,
                'code' => 'R9-01022025-MET-0977',
                'information' => NULL,
                'sample_id' => 722,
                'user_id' => 13,
                'created_at' => '2025-01-02 17:06:37',
                'updated_at' => '2025-01-02 17:06:37',
            ),
            28 => 
            array (
                'id' => 1033,
                'code' => 'R9-01022025-MET-0978',
                'information' => NULL,
                'sample_id' => 723,
                'user_id' => 13,
                'created_at' => '2025-01-02 17:06:42',
                'updated_at' => '2025-01-02 17:06:42',
            ),
            29 => 
            array (
                'id' => 1034,
                'code' => 'R9-01022025-MET-0979',
                'information' => NULL,
                'sample_id' => 724,
                'user_id' => 13,
                'created_at' => '2025-01-02 17:06:46',
                'updated_at' => '2025-01-02 17:06:46',
            ),
            30 => 
            array (
                'id' => 1035,
                'code' => 'R9-01022025-MET-0980',
                'information' => NULL,
                'sample_id' => 725,
                'user_id' => 13,
                'created_at' => '2025-01-02 17:06:49',
                'updated_at' => '2025-01-02 17:06:49',
            ),
            31 => 
            array (
                'id' => 1036,
                'code' => 'R9-01022025-MET-0981',
                'information' => NULL,
                'sample_id' => 726,
                'user_id' => 13,
                'created_at' => '2025-01-02 17:06:53',
                'updated_at' => '2025-01-02 17:06:53',
            ),
            32 => 
            array (
                'id' => 1037,
                'code' => 'R9-01022025-MET-0982',
                'information' => NULL,
                'sample_id' => 727,
                'user_id' => 13,
                'created_at' => '2025-01-02 17:06:57',
                'updated_at' => '2025-01-02 17:06:57',
            ),
            33 => 
            array (
                'id' => 1038,
                'code' => 'R9-01022025-MET-0983',
                'information' => NULL,
                'sample_id' => 728,
                'user_id' => 13,
                'created_at' => '2025-01-02 17:07:01',
                'updated_at' => '2025-01-02 17:07:01',
            ),
            34 => 
            array (
                'id' => 1039,
                'code' => 'R9-01022025-MET-0984',
                'information' => NULL,
                'sample_id' => 729,
                'user_id' => 13,
                'created_at' => '2025-01-02 17:07:06',
                'updated_at' => '2025-01-02 17:07:06',
            ),
            35 => 
            array (
                'id' => 1040,
                'code' => 'R9-01022025-MET-0985',
                'information' => NULL,
                'sample_id' => 730,
                'user_id' => 13,
                'created_at' => '2025-01-02 17:07:10',
                'updated_at' => '2025-01-02 17:07:10',
            ),
            36 => 
            array (
                'id' => 1041,
                'code' => 'R9-01022025-MET-0986',
                'information' => NULL,
                'sample_id' => 731,
                'user_id' => 13,
                'created_at' => '2025-01-02 17:07:13',
                'updated_at' => '2025-01-02 17:07:13',
            ),
            37 => 
            array (
                'id' => 1042,
                'code' => 'R9-01022025-MET-0987',
                'information' => NULL,
                'sample_id' => 732,
                'user_id' => 13,
                'created_at' => '2025-01-02 17:07:17',
                'updated_at' => '2025-01-02 17:07:17',
            ),
            38 => 
            array (
                'id' => 1043,
                'code' => 'R9-01022025-MET-0988',
                'information' => NULL,
                'sample_id' => 733,
                'user_id' => 13,
                'created_at' => '2025-01-02 17:07:22',
                'updated_at' => '2025-01-02 17:07:22',
            ),
            39 => 
            array (
                'id' => 1044,
                'code' => 'R9-01022025-MET-0989',
                'information' => NULL,
                'sample_id' => 734,
                'user_id' => 13,
                'created_at' => '2025-01-02 17:07:31',
                'updated_at' => '2025-01-02 17:07:31',
            ),
            40 => 
            array (
                'id' => 1045,
                'code' => 'R9-01022025-MET-0990',
                'information' => NULL,
                'sample_id' => 735,
                'user_id' => 13,
                'created_at' => '2025-01-02 17:07:36',
                'updated_at' => '2025-01-02 17:07:36',
            ),
            41 => 
            array (
                'id' => 1046,
                'code' => 'R9-01022025-MET-0991',
                'information' => NULL,
                'sample_id' => 736,
                'user_id' => 13,
                'created_at' => '2025-01-02 17:07:40',
                'updated_at' => '2025-01-02 17:07:40',
            ),
            42 => 
            array (
                'id' => 1047,
                'code' => 'R9-01022025-MET-0992',
                'information' => NULL,
                'sample_id' => 737,
                'user_id' => 13,
                'created_at' => '2025-01-02 17:07:44',
                'updated_at' => '2025-01-02 17:07:44',
            ),
            43 => 
            array (
                'id' => 1048,
                'code' => 'R9-01022025-MET-0993',
                'information' => NULL,
                'sample_id' => 738,
                'user_id' => 13,
                'created_at' => '2025-01-02 17:07:48',
                'updated_at' => '2025-01-02 17:07:48',
            ),
            44 => 
            array (
                'id' => 1049,
                'code' => 'R9-01022025-MET-0994',
                'information' => NULL,
                'sample_id' => 739,
                'user_id' => 13,
                'created_at' => '2025-01-02 17:07:51',
                'updated_at' => '2025-01-02 17:07:51',
            ),
            45 => 
            array (
                'id' => 1050,
                'code' => 'R9-01022025-MET-0995',
                'information' => NULL,
                'sample_id' => 635,
                'user_id' => 13,
                'created_at' => '2025-01-02 17:10:22',
                'updated_at' => '2025-01-02 17:10:22',
            ),
            46 => 
            array (
                'id' => 1051,
                'code' => 'R9-01022025-MET-0996',
                'information' => NULL,
                'sample_id' => 636,
                'user_id' => 13,
                'created_at' => '2025-01-02 17:10:28',
                'updated_at' => '2025-01-02 17:10:28',
            ),
            47 => 
            array (
                'id' => 1052,
                'code' => 'R9-01022025-MET-0038',
                'information' => NULL,
                'sample_id' => 811,
                'user_id' => 12,
                'created_at' => '2025-01-03 00:33:01',
                'updated_at' => '2025-01-03 00:33:01',
            ),
            48 => 
            array (
                'id' => 1053,
                'code' => 'R9-01022025-MET-0039',
                'information' => NULL,
                'sample_id' => 812,
                'user_id' => 12,
                'created_at' => '2025-01-03 00:33:56',
                'updated_at' => '2025-01-03 00:33:56',
            ),
            49 => 
            array (
                'id' => 1054,
                'code' => 'R9-01022025-MET-0040',
                'information' => NULL,
                'sample_id' => 813,
                'user_id' => 12,
                'created_at' => '2025-01-03 00:34:33',
                'updated_at' => '2025-01-03 00:34:33',
            ),
            50 => 
            array (
                'id' => 1055,
                'code' => 'R9-01022025-MET-0041',
                'information' => NULL,
                'sample_id' => 814,
                'user_id' => 12,
                'created_at' => '2025-01-03 00:35:05',
                'updated_at' => '2025-01-03 00:35:05',
            ),
            51 => 
            array (
                'id' => 1056,
                'code' => 'R9-01022025-MET-0042',
                'information' => NULL,
                'sample_id' => 815,
                'user_id' => 12,
                'created_at' => '2025-01-03 00:35:35',
                'updated_at' => '2025-01-03 00:35:35',
            ),
            52 => 
            array (
                'id' => 1057,
                'code' => 'R9-01022025-MET-0043',
                'information' => NULL,
                'sample_id' => 816,
                'user_id' => 12,
                'created_at' => '2025-01-03 00:36:17',
                'updated_at' => '2025-01-03 00:36:17',
            ),
            53 => 
            array (
                'id' => 1058,
                'code' => 'R9-01022025-MET-0044',
                'information' => NULL,
                'sample_id' => 817,
                'user_id' => 12,
                'created_at' => '2025-01-03 00:36:51',
                'updated_at' => '2025-01-03 00:36:51',
            ),
            54 => 
            array (
                'id' => 1059,
                'code' => 'R9-01022025-MET-0045',
                'information' => NULL,
                'sample_id' => 818,
                'user_id' => 12,
                'created_at' => '2025-01-03 00:37:22',
                'updated_at' => '2025-01-03 00:37:22',
            ),
            55 => 
            array (
                'id' => 1060,
                'code' => 'R9-01022025-MET-0046',
                'information' => NULL,
                'sample_id' => 819,
                'user_id' => 12,
                'created_at' => '2025-01-03 00:37:49',
                'updated_at' => '2025-01-03 00:37:49',
            ),
            56 => 
            array (
                'id' => 1061,
                'code' => 'R9-01022025-MET-0047',
                'information' => NULL,
                'sample_id' => 821,
                'user_id' => 12,
                'created_at' => '2025-01-03 00:38:25',
                'updated_at' => '2025-01-03 00:38:25',
            ),
            57 => 
            array (
                'id' => 1062,
                'code' => 'R9-01022025-MET-0048',
                'information' => NULL,
                'sample_id' => 1405,
                'user_id' => 12,
                'created_at' => '2025-01-03 00:42:12',
                'updated_at' => '2025-01-03 00:42:12',
            ),
            58 => 
            array (
                'id' => 1063,
                'code' => 'R9-01022025-MET-0049',
                'information' => NULL,
                'sample_id' => 1406,
                'user_id' => 12,
                'created_at' => '2025-01-03 00:42:59',
                'updated_at' => '2025-01-03 00:42:59',
            ),
            59 => 
            array (
                'id' => 1064,
                'code' => 'R9-01022025-MET-0050',
                'information' => NULL,
                'sample_id' => 1407,
                'user_id' => 12,
                'created_at' => '2025-01-03 00:43:53',
                'updated_at' => '2025-01-03 00:43:53',
            ),
            60 => 
            array (
                'id' => 1065,
                'code' => 'R9-01022025-MET-0051',
                'information' => NULL,
                'sample_id' => 1408,
                'user_id' => 12,
                'created_at' => '2025-01-03 00:44:34',
                'updated_at' => '2025-01-03 00:44:34',
            ),
            61 => 
            array (
                'id' => 1066,
                'code' => 'R9-01022025-MET-0052',
                'information' => NULL,
                'sample_id' => 1409,
                'user_id' => 12,
                'created_at' => '2025-01-03 00:45:14',
                'updated_at' => '2025-01-03 00:45:14',
            ),
            62 => 
            array (
                'id' => 1067,
                'code' => 'R9-01022025-MET-0053',
                'information' => NULL,
                'sample_id' => 1410,
                'user_id' => 12,
                'created_at' => '2025-01-03 00:46:21',
                'updated_at' => '2025-01-03 00:46:21',
            ),
            63 => 
            array (
                'id' => 1068,
                'code' => 'R9-01022025-MET-0054',
                'information' => NULL,
                'sample_id' => 1397,
                'user_id' => 12,
                'created_at' => '2025-01-03 00:50:02',
                'updated_at' => '2025-01-03 00:50:02',
            ),
            64 => 
            array (
                'id' => 1069,
                'code' => 'R9-01022025-MET-0055',
                'information' => NULL,
                'sample_id' => 1398,
                'user_id' => 12,
                'created_at' => '2025-01-03 00:51:04',
                'updated_at' => '2025-01-03 00:51:04',
            ),
            65 => 
            array (
                'id' => 1070,
                'code' => 'R9-01022025-MET-0056',
                'information' => NULL,
                'sample_id' => 1399,
                'user_id' => 12,
                'created_at' => '2025-01-03 00:51:55',
                'updated_at' => '2025-01-03 00:51:55',
            ),
            66 => 
            array (
                'id' => 1071,
                'code' => 'R9-01022025-MET-0057',
                'information' => NULL,
                'sample_id' => 1400,
                'user_id' => 12,
                'created_at' => '2025-01-03 00:53:01',
                'updated_at' => '2025-01-03 00:53:01',
            ),
            67 => 
            array (
                'id' => 1072,
                'code' => 'R9-01022025-MET-0058',
                'information' => NULL,
                'sample_id' => 1401,
                'user_id' => 12,
                'created_at' => '2025-01-03 00:53:44',
                'updated_at' => '2025-01-03 00:53:44',
            ),
            68 => 
            array (
                'id' => 1073,
                'code' => 'R9-01022025-MET-0059',
                'information' => NULL,
                'sample_id' => 1402,
                'user_id' => 12,
                'created_at' => '2025-01-03 00:54:31',
                'updated_at' => '2025-01-03 00:54:31',
            ),
            69 => 
            array (
                'id' => 1074,
                'code' => 'R9-01022025-MET-0060',
                'information' => NULL,
                'sample_id' => 1403,
                'user_id' => 12,
                'created_at' => '2025-01-03 00:55:18',
                'updated_at' => '2025-01-03 00:55:18',
            ),
            70 => 
            array (
                'id' => 1075,
                'code' => 'R9-01022025-MET-0061',
                'information' => NULL,
                'sample_id' => 1404,
                'user_id' => 12,
                'created_at' => '2025-01-03 00:56:00',
                'updated_at' => '2025-01-03 00:56:00',
            ),
            71 => 
            array (
                'id' => 1076,
                'code' => 'R9-01032025-MET-0062',
                'information' => NULL,
                'sample_id' => 1645,
                'user_id' => 12,
                'created_at' => '2025-01-03 16:48:29',
                'updated_at' => '2025-01-03 16:48:29',
            ),
            72 => 
            array (
                'id' => 1077,
                'code' => 'R9-01032025-MET-0063',
                'information' => NULL,
                'sample_id' => 1646,
                'user_id' => 12,
                'created_at' => '2025-01-03 16:48:39',
                'updated_at' => '2025-01-03 16:48:39',
            ),
            73 => 
            array (
                'id' => 1078,
                'code' => 'R9-01032025-MET-0064',
                'information' => NULL,
                'sample_id' => 820,
                'user_id' => 12,
                'created_at' => '2025-01-03 23:44:59',
                'updated_at' => '2025-01-03 23:44:59',
            ),
            74 => 
            array (
                'id' => 1079,
                'code' => 'R9-12022024-CHE-1300',
                'information' => NULL,
                'sample_id' => 200,
                'user_id' => 6,
                'created_at' => '2025-01-06 19:53:13',
                'updated_at' => '2025-01-06 19:53:13',
            ),
            75 => 
            array (
                'id' => 1080,
                'code' => 'R9-01062025-MET-0065',
                'information' => NULL,
                'sample_id' => 2294,
                'user_id' => 13,
                'created_at' => '2025-01-06 22:12:12',
                'updated_at' => '2025-01-06 22:12:12',
            ),
            76 => 
            array (
                'id' => 1081,
                'code' => 'R9-01062025-MET-0066',
                'information' => NULL,
                'sample_id' => 997,
                'user_id' => 13,
                'created_at' => '2025-01-06 22:13:45',
                'updated_at' => '2025-01-06 22:13:45',
            ),
            77 => 
            array (
                'id' => 1082,
                'code' => 'R9-01062025-MET-0067',
                'information' => NULL,
                'sample_id' => 998,
                'user_id' => 13,
                'created_at' => '2025-01-06 22:14:12',
                'updated_at' => '2025-01-06 22:14:12',
            ),
            78 => 
            array (
                'id' => 1083,
                'code' => 'R9-01062025-MET-0068',
                'information' => NULL,
                'sample_id' => 980,
                'user_id' => 13,
                'created_at' => '2025-01-06 23:31:30',
                'updated_at' => '2025-01-06 23:31:30',
            ),
            79 => 
            array (
                'id' => 1084,
                'code' => 'R9-01062025-MET-0069',
                'information' => NULL,
                'sample_id' => 981,
                'user_id' => 13,
                'created_at' => '2025-01-06 23:32:05',
                'updated_at' => '2025-01-06 23:32:05',
            ),
            80 => 
            array (
                'id' => 1085,
                'code' => 'R9-01062025-MET-0070',
                'information' => NULL,
                'sample_id' => 982,
                'user_id' => 13,
                'created_at' => '2025-01-06 23:32:33',
                'updated_at' => '2025-01-06 23:32:33',
            ),
            81 => 
            array (
                'id' => 1086,
                'code' => 'R9-01062025-MET-0071',
                'information' => NULL,
                'sample_id' => 983,
                'user_id' => 13,
                'created_at' => '2025-01-06 23:33:00',
                'updated_at' => '2025-01-06 23:33:00',
            ),
            82 => 
            array (
                'id' => 1087,
                'code' => 'R9-01062025-MET-0072',
                'information' => NULL,
                'sample_id' => 984,
                'user_id' => 13,
                'created_at' => '2025-01-06 23:35:54',
                'updated_at' => '2025-01-06 23:35:54',
            ),
            83 => 
            array (
                'id' => 1088,
                'code' => 'R9-01062025-MET-0073',
                'information' => NULL,
                'sample_id' => 985,
                'user_id' => 13,
                'created_at' => '2025-01-06 23:36:19',
                'updated_at' => '2025-01-06 23:36:19',
            ),
            84 => 
            array (
                'id' => 1089,
                'code' => 'R9-01062025-MET-0074',
                'information' => NULL,
                'sample_id' => 1580,
                'user_id' => 12,
                'created_at' => '2025-01-07 00:37:58',
                'updated_at' => '2025-01-07 00:37:58',
            ),
            85 => 
            array (
                'id' => 1090,
                'code' => 'R9-01062025-MET-0075',
                'information' => NULL,
                'sample_id' => 1581,
                'user_id' => 12,
                'created_at' => '2025-01-07 00:39:28',
                'updated_at' => '2025-01-07 00:39:28',
            ),
            86 => 
            array (
                'id' => 1091,
                'code' => 'R9-01062025-MET-0076',
                'information' => NULL,
                'sample_id' => 1582,
                'user_id' => 12,
                'created_at' => '2025-01-07 00:40:05',
                'updated_at' => '2025-01-07 00:40:05',
            ),
            87 => 
            array (
                'id' => 1092,
                'code' => 'R9-01062025-MET-0077',
                'information' => NULL,
                'sample_id' => 1583,
                'user_id' => 12,
                'created_at' => '2025-01-07 00:41:12',
                'updated_at' => '2025-01-07 00:41:12',
            ),
            88 => 
            array (
                'id' => 1093,
                'code' => 'R9-01062025-MET-0078',
                'information' => NULL,
                'sample_id' => 1584,
                'user_id' => 12,
                'created_at' => '2025-01-07 00:42:49',
                'updated_at' => '2025-01-07 00:42:49',
            ),
            89 => 
            array (
                'id' => 1094,
                'code' => 'R9-01072025-CHE-0002',
                'information' => NULL,
                'sample_id' => 1698,
                'user_id' => 8,
                'created_at' => '2025-01-07 18:50:08',
                'updated_at' => '2025-01-07 18:50:08',
            ),
            90 => 
            array (
                'id' => 1095,
                'code' => 'R9-01072025-CHE-0003',
                'information' => NULL,
                'sample_id' => 2291,
                'user_id' => 8,
                'created_at' => '2025-01-07 18:50:51',
                'updated_at' => '2025-01-07 18:50:51',
            ),
            91 => 
            array (
                'id' => 1096,
                'code' => 'R9-01082025-MET-0079',
                'information' => NULL,
                'sample_id' => 1431,
                'user_id' => 12,
                'created_at' => '2025-01-08 22:59:20',
                'updated_at' => '2025-01-08 22:59:20',
            ),
            92 => 
            array (
                'id' => 1097,
                'code' => 'R9-01082025-MET-0080',
                'information' => NULL,
                'sample_id' => 1432,
                'user_id' => 12,
                'created_at' => '2025-01-08 22:59:45',
                'updated_at' => '2025-01-08 22:59:45',
            ),
            93 => 
            array (
                'id' => 1098,
                'code' => 'R9-01082025-MET-0081',
                'information' => NULL,
                'sample_id' => 1433,
                'user_id' => 12,
                'created_at' => '2025-01-08 23:01:00',
                'updated_at' => '2025-01-08 23:01:00',
            ),
            94 => 
            array (
                'id' => 1099,
                'code' => 'R9-01082025-MET-0082',
                'information' => NULL,
                'sample_id' => 1434,
                'user_id' => 12,
                'created_at' => '2025-01-08 23:02:49',
                'updated_at' => '2025-01-08 23:02:49',
            ),
            95 => 
            array (
                'id' => 1100,
                'code' => 'R9-01082025-MET-0083',
                'information' => NULL,
                'sample_id' => 1435,
                'user_id' => 12,
                'created_at' => '2025-01-08 23:03:12',
                'updated_at' => '2025-01-08 23:03:12',
            ),
            96 => 
            array (
                'id' => 1101,
                'code' => 'R9-01082025-MET-0084',
                'information' => NULL,
                'sample_id' => 1436,
                'user_id' => 12,
                'created_at' => '2025-01-08 23:04:20',
                'updated_at' => '2025-01-08 23:04:20',
            ),
            97 => 
            array (
                'id' => 1102,
                'code' => 'R9-01082025-MET-0085',
                'information' => NULL,
                'sample_id' => 1437,
                'user_id' => 12,
                'created_at' => '2025-01-08 23:05:19',
                'updated_at' => '2025-01-08 23:05:19',
            ),
            98 => 
            array (
                'id' => 1103,
                'code' => 'R9-01082025-MET-0086',
                'information' => NULL,
                'sample_id' => 1438,
                'user_id' => 12,
                'created_at' => '2025-01-08 23:05:43',
                'updated_at' => '2025-01-08 23:05:43',
            ),
            99 => 
            array (
                'id' => 1104,
                'code' => 'R9-01082025-CHE-0004',
                'information' => NULL,
                'sample_id' => 2301,
                'user_id' => 8,
                'created_at' => '2025-01-08 23:46:49',
                'updated_at' => '2025-01-08 23:46:49',
            ),
            100 => 
            array (
                'id' => 1105,
                'code' => 'R9-01092025-MET-0087',
                'information' => NULL,
                'sample_id' => 2349,
                'user_id' => 12,
                'created_at' => '2025-01-09 21:20:06',
                'updated_at' => '2025-01-09 21:20:06',
            ),
            101 => 
            array (
                'id' => 1106,
                'code' => 'R9-01102025-MET-0088',
                'information' => NULL,
                'sample_id' => 2355,
                'user_id' => 12,
                'created_at' => '2025-01-10 19:13:38',
                'updated_at' => '2025-01-10 19:13:38',
            ),
            102 => 
            array (
                'id' => 1107,
                'code' => 'R9-01102025-MET-0089',
                'information' => NULL,
                'sample_id' => 1388,
                'user_id' => 12,
                'created_at' => '2025-01-11 00:50:04',
                'updated_at' => '2025-01-11 00:50:04',
            ),
            103 => 
            array (
                'id' => 1108,
                'code' => 'R9-01102025-MET-0090',
                'information' => NULL,
                'sample_id' => 1389,
                'user_id' => 12,
                'created_at' => '2025-01-11 00:51:49',
                'updated_at' => '2025-01-11 00:51:49',
            ),
            104 => 
            array (
                'id' => 1109,
                'code' => 'R9-01102025-MET-0091',
                'information' => NULL,
                'sample_id' => 1390,
                'user_id' => 12,
                'created_at' => '2025-01-11 00:52:42',
                'updated_at' => '2025-01-11 00:52:42',
            ),
            105 => 
            array (
                'id' => 1110,
                'code' => 'R9-01102025-MET-0092',
                'information' => NULL,
                'sample_id' => 1391,
                'user_id' => 12,
                'created_at' => '2025-01-11 00:53:46',
                'updated_at' => '2025-01-11 00:53:46',
            ),
            106 => 
            array (
                'id' => 1111,
                'code' => 'R9-01102025-MET-0093',
                'information' => NULL,
                'sample_id' => 1392,
                'user_id' => 12,
                'created_at' => '2025-01-11 00:54:39',
                'updated_at' => '2025-01-11 00:54:39',
            ),
            107 => 
            array (
                'id' => 1112,
                'code' => 'R9-01102025-MET-0094',
                'information' => NULL,
                'sample_id' => 1393,
                'user_id' => 12,
                'created_at' => '2025-01-11 00:55:38',
                'updated_at' => '2025-01-11 00:55:38',
            ),
            108 => 
            array (
                'id' => 1113,
                'code' => 'R9-01102025-MET-0095',
                'information' => NULL,
                'sample_id' => 1394,
                'user_id' => 12,
                'created_at' => '2025-01-11 00:57:33',
                'updated_at' => '2025-01-11 00:57:33',
            ),
            109 => 
            array (
                'id' => 1114,
                'code' => 'R9-01102025-MET-0096',
                'information' => NULL,
                'sample_id' => 1395,
                'user_id' => 12,
                'created_at' => '2025-01-11 00:58:30',
                'updated_at' => '2025-01-11 00:58:30',
            ),
            110 => 
            array (
                'id' => 1115,
                'code' => 'R9-01102025-MET-0097',
                'information' => NULL,
                'sample_id' => 1382,
                'user_id' => 12,
                'created_at' => '2025-01-11 01:00:18',
                'updated_at' => '2025-01-11 01:00:18',
            ),
            111 => 
            array (
                'id' => 1116,
                'code' => 'R9-01102025-MET-0098',
                'information' => NULL,
                'sample_id' => 1383,
                'user_id' => 12,
                'created_at' => '2025-01-11 01:01:26',
                'updated_at' => '2025-01-11 01:01:26',
            ),
            112 => 
            array (
                'id' => 1117,
                'code' => 'R9-01102025-MET-0099',
                'information' => NULL,
                'sample_id' => 1384,
                'user_id' => 12,
                'created_at' => '2025-01-11 01:02:20',
                'updated_at' => '2025-01-11 01:02:20',
            ),
            113 => 
            array (
                'id' => 1118,
                'code' => 'R9-01102025-MET-0100',
                'information' => NULL,
                'sample_id' => 1385,
                'user_id' => 12,
                'created_at' => '2025-01-11 01:03:42',
                'updated_at' => '2025-01-11 01:03:42',
            ),
            114 => 
            array (
                'id' => 1119,
                'code' => 'R9-01102025-MET-0101',
                'information' => NULL,
                'sample_id' => 1386,
                'user_id' => 12,
                'created_at' => '2025-01-11 01:04:31',
                'updated_at' => '2025-01-11 01:04:31',
            ),
            115 => 
            array (
                'id' => 1120,
                'code' => 'R9-01102025-MET-0102',
                'information' => NULL,
                'sample_id' => 1387,
                'user_id' => 12,
                'created_at' => '2025-01-11 01:05:26',
                'updated_at' => '2025-01-11 01:05:26',
            ),
            116 => 
            array (
                'id' => 1121,
                'code' => 'R9-01132025-MIC-0001',
                'information' => NULL,
                'sample_id' => 2293,
                'user_id' => 16,
                'created_at' => '2025-01-13 18:13:43',
                'updated_at' => '2025-01-13 18:13:43',
            ),
            117 => 
            array (
                'id' => 1122,
                'code' => 'R9-01132025-MIC-0002',
                'information' => NULL,
                'sample_id' => 2308,
                'user_id' => 16,
                'created_at' => '2025-01-13 18:16:00',
                'updated_at' => '2025-01-13 18:16:00',
            ),
            118 => 
            array (
                'id' => 1123,
                'code' => 'R9-01132025-MIC-0003',
                'information' => NULL,
                'sample_id' => 2321,
                'user_id' => 16,
                'created_at' => '2025-01-13 21:20:58',
                'updated_at' => '2025-01-13 21:20:58',
            ),
            119 => 
            array (
                'id' => 1124,
                'code' => 'R9-01132025-MIC-0004',
                'information' => NULL,
                'sample_id' => 2322,
                'user_id' => 16,
                'created_at' => '2025-01-13 21:22:51',
                'updated_at' => '2025-01-13 21:22:51',
            ),
            120 => 
            array (
                'id' => 1125,
                'code' => 'R9-01132025-MET-0103',
                'information' => NULL,
                'sample_id' => 2390,
                'user_id' => 12,
                'created_at' => '2025-01-14 00:03:32',
                'updated_at' => '2025-01-14 00:03:32',
            ),
            121 => 
            array (
                'id' => 1126,
                'code' => 'R9-01132025-CHE-0005',
                'information' => NULL,
                'sample_id' => 1622,
                'user_id' => 8,
                'created_at' => '2025-01-14 03:48:54',
                'updated_at' => '2025-01-14 03:48:54',
            ),
            122 => 
            array (
                'id' => 1127,
                'code' => 'R9-01132025-CHE-0006',
                'information' => NULL,
                'sample_id' => 2285,
                'user_id' => 8,
                'created_at' => '2025-01-14 03:49:53',
                'updated_at' => '2025-01-14 03:49:53',
            ),
            123 => 
            array (
                'id' => 1128,
                'code' => 'R9-01132025-CHE-0007',
                'information' => NULL,
                'sample_id' => 2286,
                'user_id' => 8,
                'created_at' => '2025-01-14 03:49:58',
                'updated_at' => '2025-01-14 03:49:58',
            ),
            124 => 
            array (
                'id' => 1129,
                'code' => 'R9-01132025-CHE-0008',
                'information' => NULL,
                'sample_id' => 2287,
                'user_id' => 8,
                'created_at' => '2025-01-14 03:50:15',
                'updated_at' => '2025-01-14 03:50:15',
            ),
            125 => 
            array (
                'id' => 1130,
                'code' => 'R9-01132025-CHE-0009',
                'information' => NULL,
                'sample_id' => 2288,
                'user_id' => 8,
                'created_at' => '2025-01-14 03:50:19',
                'updated_at' => '2025-01-14 03:50:19',
            ),
            126 => 
            array (
                'id' => 1131,
                'code' => 'R9-01132025-CHE-0010',
                'information' => NULL,
                'sample_id' => 2289,
                'user_id' => 8,
                'created_at' => '2025-01-14 03:50:23',
                'updated_at' => '2025-01-14 03:50:23',
            ),
            127 => 
            array (
                'id' => 1132,
                'code' => 'R9-01132025-CHE-0011',
                'information' => NULL,
                'sample_id' => 2290,
                'user_id' => 8,
                'created_at' => '2025-01-14 03:50:28',
                'updated_at' => '2025-01-14 03:50:28',
            ),
            128 => 
            array (
                'id' => 1133,
                'code' => 'R9-01142025-MET-0104',
                'information' => NULL,
                'sample_id' => 1652,
                'user_id' => 13,
                'created_at' => '2025-01-14 19:21:41',
                'updated_at' => '2025-01-14 19:21:41',
            ),
            129 => 
            array (
                'id' => 1134,
                'code' => 'R9-01142025-MET-0105',
                'information' => NULL,
                'sample_id' => 1653,
                'user_id' => 13,
                'created_at' => '2025-01-14 19:21:52',
                'updated_at' => '2025-01-14 19:21:52',
            ),
            130 => 
            array (
                'id' => 1135,
                'code' => 'R9-01142025-MET-0106',
                'information' => NULL,
                'sample_id' => 1654,
                'user_id' => 13,
                'created_at' => '2025-01-14 19:22:06',
                'updated_at' => '2025-01-14 19:22:06',
            ),
            131 => 
            array (
                'id' => 1136,
                'code' => 'R9-01142025-MET-0107',
                'information' => NULL,
                'sample_id' => 1655,
                'user_id' => 13,
                'created_at' => '2025-01-14 19:22:18',
                'updated_at' => '2025-01-14 19:22:18',
            ),
            132 => 
            array (
                'id' => 1137,
                'code' => 'R9-01142025-MET-0108',
                'information' => NULL,
                'sample_id' => 1656,
                'user_id' => 13,
                'created_at' => '2025-01-14 19:22:36',
                'updated_at' => '2025-01-14 19:22:36',
            ),
            133 => 
            array (
                'id' => 1138,
                'code' => 'R9-01142025-CHE-0012',
                'information' => NULL,
                'sample_id' => 2315,
                'user_id' => 8,
                'created_at' => '2025-01-14 20:53:47',
                'updated_at' => '2025-01-14 20:53:47',
            ),
            134 => 
            array (
                'id' => 1139,
                'code' => 'R9-01142025-CHE-0013',
                'information' => NULL,
                'sample_id' => 2387,
                'user_id' => 8,
                'created_at' => '2025-01-14 20:59:01',
                'updated_at' => '2025-01-14 20:59:01',
            ),
            135 => 
            array (
                'id' => 1140,
                'code' => 'R9-01142025-MIC-0005',
                'information' => NULL,
                'sample_id' => 2313,
                'user_id' => 16,
                'created_at' => '2025-01-15 00:21:05',
                'updated_at' => '2025-01-15 00:21:05',
            ),
            136 => 
            array (
                'id' => 1141,
                'code' => 'R9-01162025-MET-0109',
                'information' => NULL,
                'sample_id' => 1504,
                'user_id' => 12,
                'created_at' => '2025-01-16 18:16:51',
                'updated_at' => '2025-01-16 18:16:51',
            ),
            137 => 
            array (
                'id' => 1142,
                'code' => 'R9-01162025-MET-0110',
                'information' => NULL,
                'sample_id' => 1628,
                'user_id' => 12,
                'created_at' => '2025-01-16 18:17:57',
                'updated_at' => '2025-01-16 18:17:57',
            ),
            138 => 
            array (
                'id' => 1143,
                'code' => 'R9-01162025-MET-0111',
                'information' => NULL,
                'sample_id' => 1590,
                'user_id' => 12,
                'created_at' => '2025-01-16 18:18:39',
                'updated_at' => '2025-01-16 18:18:39',
            ),
            139 => 
            array (
                'id' => 1144,
                'code' => 'R9-01162025-MET-0112',
                'information' => NULL,
                'sample_id' => 2298,
                'user_id' => 12,
                'created_at' => '2025-01-16 18:19:35',
                'updated_at' => '2025-01-16 18:19:35',
            ),
            140 => 
            array (
                'id' => 1145,
                'code' => 'R9-01162025-MET-0113',
                'information' => NULL,
                'sample_id' => 2299,
                'user_id' => 12,
                'created_at' => '2025-01-16 18:20:05',
                'updated_at' => '2025-01-16 18:20:05',
            ),
            141 => 
            array (
                'id' => 1146,
                'code' => 'R9-01162025-MET-0114',
                'information' => NULL,
                'sample_id' => 2300,
                'user_id' => 12,
                'created_at' => '2025-01-16 18:21:20',
                'updated_at' => '2025-01-16 18:21:20',
            ),
            142 => 
            array (
                'id' => 1147,
                'code' => 'R9-01162025-CHE-0014',
                'information' => NULL,
                'sample_id' => 2302,
                'user_id' => 7,
                'created_at' => '2025-01-16 18:22:05',
                'updated_at' => '2025-01-16 18:22:05',
            ),
            143 => 
            array (
                'id' => 1148,
                'code' => 'R9-01162025-MIC-0006',
                'information' => NULL,
                'sample_id' => 2309,
                'user_id' => 16,
                'created_at' => '2025-01-16 21:16:10',
                'updated_at' => '2025-01-16 21:16:10',
            ),
            144 => 
            array (
                'id' => 1149,
                'code' => 'R9-01162025-MIC-0007',
                'information' => NULL,
                'sample_id' => 2311,
                'user_id' => 16,
                'created_at' => '2025-01-16 21:16:51',
                'updated_at' => '2025-01-16 21:16:51',
            ),
            145 => 
            array (
                'id' => 1150,
                'code' => 'R9-01172025-CHE-0015',
                'information' => NULL,
                'sample_id' => 2367,
                'user_id' => 8,
                'created_at' => '2025-01-17 15:36:09',
                'updated_at' => '2025-01-17 15:36:09',
            ),
            146 => 
            array (
                'id' => 1151,
                'code' => 'R9-01172025-CHE-0016',
                'information' => NULL,
                'sample_id' => 2369,
                'user_id' => 8,
                'created_at' => '2025-01-17 22:17:28',
                'updated_at' => '2025-01-17 22:17:28',
            ),
            147 => 
            array (
                'id' => 1152,
                'code' => 'R9-01202025-MET-0115',
                'information' => NULL,
                'sample_id' => 2323,
                'user_id' => 5,
                'created_at' => '2025-01-20 17:36:22',
                'updated_at' => '2025-01-20 17:36:22',
            ),
            148 => 
            array (
                'id' => 1153,
                'code' => 'R9-01202025-MIC-0008',
                'information' => NULL,
                'sample_id' => 2415,
                'user_id' => 16,
                'created_at' => '2025-01-20 17:43:05',
                'updated_at' => '2025-01-20 17:43:05',
            ),
            149 => 
            array (
                'id' => 1154,
                'code' => 'R9-01202025-MET-0116',
                'information' => NULL,
                'sample_id' => 2460,
                'user_id' => 12,
                'created_at' => '2025-01-20 18:56:39',
                'updated_at' => '2025-01-20 18:56:39',
            ),
            150 => 
            array (
                'id' => 1155,
                'code' => 'R9-01202025-MET-0117',
                'information' => NULL,
                'sample_id' => 2461,
                'user_id' => 12,
                'created_at' => '2025-01-20 18:57:38',
                'updated_at' => '2025-01-20 18:57:38',
            ),
            151 => 
            array (
                'id' => 1156,
                'code' => 'R9-01202025-MIC-0009',
                'information' => NULL,
                'sample_id' => 2356,
                'user_id' => 16,
                'created_at' => '2025-01-20 23:26:10',
                'updated_at' => '2025-01-20 23:26:10',
            ),
            152 => 
            array (
                'id' => 1157,
                'code' => 'R9-01202025-MIC-0010',
                'information' => NULL,
                'sample_id' => 2357,
                'user_id' => 16,
                'created_at' => '2025-01-20 23:26:54',
                'updated_at' => '2025-01-20 23:26:54',
            ),
            153 => 
            array (
                'id' => 1158,
                'code' => 'R9-01202025-MIC-0011',
                'information' => NULL,
                'sample_id' => 2378,
                'user_id' => 16,
                'created_at' => '2025-01-20 23:28:07',
                'updated_at' => '2025-01-20 23:28:07',
            ),
            154 => 
            array (
                'id' => 1159,
                'code' => 'R9-01202025-MET-0118',
                'information' => NULL,
                'sample_id' => 2304,
                'user_id' => 12,
                'created_at' => '2025-01-21 00:22:58',
                'updated_at' => '2025-01-21 00:22:58',
            ),
            155 => 
            array (
                'id' => 1160,
                'code' => 'R9-01202025-MET-0119',
                'information' => NULL,
                'sample_id' => 2305,
                'user_id' => 12,
                'created_at' => '2025-01-21 00:23:58',
                'updated_at' => '2025-01-21 00:23:58',
            ),
            156 => 
            array (
                'id' => 1161,
                'code' => 'R9-01202025-MET-0120',
                'information' => NULL,
                'sample_id' => 2324,
                'user_id' => 12,
                'created_at' => '2025-01-21 00:24:38',
                'updated_at' => '2025-01-21 00:24:38',
            ),
            157 => 
            array (
                'id' => 1162,
                'code' => 'R9-01202025-MET-0121',
                'information' => NULL,
                'sample_id' => 2350,
                'user_id' => 12,
                'created_at' => '2025-01-21 00:25:18',
                'updated_at' => '2025-01-21 00:25:18',
            ),
            158 => 
            array (
                'id' => 1163,
                'code' => 'R9-01202025-MET-0122',
                'information' => NULL,
                'sample_id' => 2351,
                'user_id' => 12,
                'created_at' => '2025-01-21 00:26:13',
                'updated_at' => '2025-01-21 00:26:13',
            ),
            159 => 
            array (
                'id' => 1164,
                'code' => 'R9-01202025-MET-0123',
                'information' => NULL,
                'sample_id' => 2352,
                'user_id' => 12,
                'created_at' => '2025-01-21 00:26:44',
                'updated_at' => '2025-01-21 00:26:44',
            ),
            160 => 
            array (
                'id' => 1165,
                'code' => 'R9-01202025-MET-0124',
                'information' => NULL,
                'sample_id' => 2353,
                'user_id' => 12,
                'created_at' => '2025-01-21 00:27:14',
                'updated_at' => '2025-01-21 00:27:14',
            ),
            161 => 
            array (
                'id' => 1166,
                'code' => 'R9-01202025-MIC-0012',
                'information' => NULL,
                'sample_id' => 2388,
                'user_id' => 16,
                'created_at' => '2025-01-21 04:30:44',
                'updated_at' => '2025-01-21 04:30:44',
            ),
            162 => 
            array (
                'id' => 1167,
                'code' => 'R9-01202025-MIC-0013',
                'information' => NULL,
                'sample_id' => 2391,
                'user_id' => 16,
                'created_at' => '2025-01-21 04:32:19',
                'updated_at' => '2025-01-21 04:32:19',
            ),
            163 => 
            array (
                'id' => 1168,
                'code' => 'R9-01202025-MIC-0014',
                'information' => NULL,
                'sample_id' => 2392,
                'user_id' => 16,
                'created_at' => '2025-01-21 04:32:45',
                'updated_at' => '2025-01-21 04:32:45',
            ),
            164 => 
            array (
                'id' => 1169,
                'code' => 'R9-01202025-MIC-0015',
                'information' => NULL,
                'sample_id' => 2393,
                'user_id' => 16,
                'created_at' => '2025-01-21 04:33:01',
                'updated_at' => '2025-01-21 04:33:01',
            ),
            165 => 
            array (
                'id' => 1170,
                'code' => 'R9-01202025-MIC-0016',
                'information' => NULL,
                'sample_id' => 2396,
                'user_id' => 16,
                'created_at' => '2025-01-21 04:33:44',
                'updated_at' => '2025-01-21 04:33:44',
            ),
            166 => 
            array (
                'id' => 1171,
                'code' => 'R9-01202025-MIC-0017',
                'information' => NULL,
                'sample_id' => 2414,
                'user_id' => 16,
                'created_at' => '2025-01-21 05:04:15',
                'updated_at' => '2025-01-21 05:04:15',
            ),
            167 => 
            array (
                'id' => 1172,
                'code' => 'R9-01212025-CHE-0017',
                'information' => NULL,
                'sample_id' => 2406,
                'user_id' => 8,
                'created_at' => '2025-01-21 16:04:40',
                'updated_at' => '2025-01-21 16:04:40',
            ),
            168 => 
            array (
                'id' => 1173,
                'code' => 'R9-01212025-CHE-0018',
                'information' => NULL,
                'sample_id' => 2407,
                'user_id' => 8,
                'created_at' => '2025-01-21 16:04:58',
                'updated_at' => '2025-01-21 16:04:58',
            ),
            169 => 
            array (
                'id' => 1174,
                'code' => 'R9-01212025-CHE-0019',
                'information' => NULL,
                'sample_id' => 2408,
                'user_id' => 8,
                'created_at' => '2025-01-21 16:05:07',
                'updated_at' => '2025-01-21 16:05:07',
            ),
            170 => 
            array (
                'id' => 1175,
                'code' => 'R9-01212025-CHE-0020',
                'information' => NULL,
                'sample_id' => 2419,
                'user_id' => 8,
                'created_at' => '2025-01-21 16:05:50',
                'updated_at' => '2025-01-21 16:05:50',
            ),
            171 => 
            array (
                'id' => 1176,
                'code' => 'R9-01212025-CHE-0021',
                'information' => NULL,
                'sample_id' => 2420,
                'user_id' => 8,
                'created_at' => '2025-01-21 16:06:27',
                'updated_at' => '2025-01-21 16:06:27',
            ),
            172 => 
            array (
                'id' => 1177,
                'code' => 'R9-01212025-CHE-0022',
                'information' => NULL,
                'sample_id' => 2421,
                'user_id' => 8,
                'created_at' => '2025-01-21 16:06:41',
                'updated_at' => '2025-01-21 16:06:41',
            ),
            173 => 
            array (
                'id' => 1178,
                'code' => 'R9-01212025-CHE-0023',
                'information' => NULL,
                'sample_id' => 2422,
                'user_id' => 8,
                'created_at' => '2025-01-21 16:06:52',
                'updated_at' => '2025-01-21 16:06:52',
            ),
            174 => 
            array (
                'id' => 1179,
                'code' => 'R9-01212025-CHE-0024',
                'information' => NULL,
                'sample_id' => 2374,
                'user_id' => 8,
                'created_at' => '2025-01-21 16:08:13',
                'updated_at' => '2025-01-21 16:08:13',
            ),
            175 => 
            array (
                'id' => 1180,
                'code' => 'R9-01212025-CHE-0025',
                'information' => NULL,
                'sample_id' => 2375,
                'user_id' => 8,
                'created_at' => '2025-01-21 16:10:14',
                'updated_at' => '2025-01-21 16:10:14',
            ),
            176 => 
            array (
                'id' => 1181,
                'code' => 'R9-01212025-CHE-0026',
                'information' => NULL,
                'sample_id' => 2376,
                'user_id' => 8,
                'created_at' => '2025-01-21 16:10:24',
                'updated_at' => '2025-01-21 16:10:24',
            ),
            177 => 
            array (
                'id' => 1182,
                'code' => 'R9-01212025-CHE-0027',
                'information' => NULL,
                'sample_id' => 2377,
                'user_id' => 8,
                'created_at' => '2025-01-21 16:10:34',
                'updated_at' => '2025-01-21 16:10:34',
            ),
            178 => 
            array (
                'id' => 1183,
                'code' => 'R9-01212025-MIC-0018',
                'information' => NULL,
                'sample_id' => 2368,
                'user_id' => 16,
                'created_at' => '2025-01-21 17:35:51',
                'updated_at' => '2025-01-21 17:35:51',
            ),
            179 => 
            array (
                'id' => 1184,
                'code' => 'R9-01212025-MET-0125',
                'information' => NULL,
                'sample_id' => 2496,
                'user_id' => 12,
                'created_at' => '2025-01-21 23:38:11',
                'updated_at' => '2025-01-21 23:38:11',
            ),
            180 => 
            array (
                'id' => 1185,
                'code' => 'R9-01222025-MET-0126',
                'information' => NULL,
                'sample_id' => 2497,
                'user_id' => 12,
                'created_at' => '2025-01-22 19:56:50',
                'updated_at' => '2025-01-22 19:56:50',
            ),
            181 => 
            array (
                'id' => 1186,
                'code' => 'R9-01222025-MET-0127',
                'information' => NULL,
                'sample_id' => 2295,
                'user_id' => 12,
                'created_at' => '2025-01-22 22:11:07',
                'updated_at' => '2025-01-22 22:11:07',
            ),
            182 => 
            array (
                'id' => 1187,
                'code' => 'R9-01222025-MET-0128',
                'information' => NULL,
                'sample_id' => 2296,
                'user_id' => 12,
                'created_at' => '2025-01-22 22:11:59',
                'updated_at' => '2025-01-22 22:11:59',
            ),
            183 => 
            array (
                'id' => 1188,
                'code' => 'R9-01222025-MET-0129',
                'information' => NULL,
                'sample_id' => 2297,
                'user_id' => 12,
                'created_at' => '2025-01-22 22:12:26',
                'updated_at' => '2025-01-22 22:12:26',
            ),
            184 => 
            array (
                'id' => 1189,
                'code' => 'R9-01222025-MET-0130',
                'information' => NULL,
                'sample_id' => 2354,
                'user_id' => 12,
                'created_at' => '2025-01-22 22:13:09',
                'updated_at' => '2025-01-22 22:13:09',
            ),
            185 => 
            array (
                'id' => 1190,
                'code' => 'R9-01232025-MIC-0019',
                'information' => NULL,
                'sample_id' => 2400,
                'user_id' => 16,
                'created_at' => '2025-01-23 14:02:08',
                'updated_at' => '2025-01-23 14:02:08',
            ),
            186 => 
            array (
                'id' => 1191,
                'code' => 'R9-01232025-MIC-0020',
                'information' => NULL,
                'sample_id' => 2402,
                'user_id' => 16,
                'created_at' => '2025-01-23 14:05:52',
                'updated_at' => '2025-01-23 14:05:52',
            ),
            187 => 
            array (
                'id' => 1192,
                'code' => 'R9-01232025-MIC-0021',
                'information' => NULL,
                'sample_id' => 2404,
                'user_id' => 16,
                'created_at' => '2025-01-23 14:08:14',
                'updated_at' => '2025-01-23 14:08:14',
            ),
            188 => 
            array (
                'id' => 1193,
                'code' => 'R9-01242025-CHE-0028',
                'information' => NULL,
                'sample_id' => 2513,
                'user_id' => 8,
                'created_at' => '2025-01-24 21:39:04',
                'updated_at' => '2025-01-24 21:39:04',
            ),
            189 => 
            array (
                'id' => 1194,
                'code' => 'R9-01242025-MET-0131',
                'information' => NULL,
                'sample_id' => 2417,
                'user_id' => 12,
                'created_at' => '2025-01-24 23:23:25',
                'updated_at' => '2025-01-24 23:23:25',
            ),
            190 => 
            array (
                'id' => 1195,
                'code' => 'R9-01242025-MET-0132',
                'information' => NULL,
                'sample_id' => 2450,
                'user_id' => 12,
                'created_at' => '2025-01-24 23:25:35',
                'updated_at' => '2025-01-24 23:25:35',
            ),
            191 => 
            array (
                'id' => 1196,
                'code' => 'R9-01242025-MET-0133',
                'information' => NULL,
                'sample_id' => 2451,
                'user_id' => 12,
                'created_at' => '2025-01-24 23:26:56',
                'updated_at' => '2025-01-24 23:26:56',
            ),
            192 => 
            array (
                'id' => 1197,
                'code' => 'R9-01242025-MET-0134',
                'information' => NULL,
                'sample_id' => 2452,
                'user_id' => 12,
                'created_at' => '2025-01-24 23:27:44',
                'updated_at' => '2025-01-24 23:27:44',
            ),
            193 => 
            array (
                'id' => 1198,
                'code' => 'R9-01242025-CHE-0029',
                'information' => NULL,
                'sample_id' => 2310,
                'user_id' => 8,
                'created_at' => '2025-01-25 04:16:31',
                'updated_at' => '2025-01-25 04:16:31',
            ),
            194 => 
            array (
                'id' => 1199,
                'code' => 'R9-01242025-CHE-0030',
                'information' => NULL,
                'sample_id' => 2312,
                'user_id' => 8,
                'created_at' => '2025-01-25 04:16:46',
                'updated_at' => '2025-01-25 04:16:46',
            ),
            195 => 
            array (
                'id' => 1200,
                'code' => 'R9-01242025-CHE-0031',
                'information' => NULL,
                'sample_id' => 2314,
                'user_id' => 8,
                'created_at' => '2025-01-25 04:16:55',
                'updated_at' => '2025-01-25 04:16:55',
            ),
            196 => 
            array (
                'id' => 1201,
                'code' => 'R9-01282025-MIC-0022',
                'information' => NULL,
                'sample_id' => 2469,
                'user_id' => 16,
                'created_at' => '2025-01-28 17:19:01',
                'updated_at' => '2025-01-28 17:19:01',
            ),
            197 => 
            array (
                'id' => 1202,
                'code' => 'R9-01282025-CHE-0032',
                'information' => NULL,
                'sample_id' => 2524,
                'user_id' => 8,
                'created_at' => '2025-01-28 18:34:32',
                'updated_at' => '2025-01-28 18:34:32',
            ),
            198 => 
            array (
                'id' => 1203,
                'code' => 'R9-01282025-MET-0135',
                'information' => NULL,
                'sample_id' => 2679,
                'user_id' => 12,
                'created_at' => '2025-01-28 21:55:32',
                'updated_at' => '2025-01-28 21:55:32',
            ),
            199 => 
            array (
                'id' => 1204,
                'code' => 'R9-01282025-MIC-0023',
                'information' => NULL,
                'sample_id' => 2457,
                'user_id' => 16,
                'created_at' => '2025-01-29 04:17:45',
                'updated_at' => '2025-01-29 04:17:45',
            ),
            200 => 
            array (
                'id' => 1205,
                'code' => 'R9-01282025-MIC-0024',
                'information' => NULL,
                'sample_id' => 2464,
                'user_id' => 16,
                'created_at' => '2025-01-29 04:34:46',
                'updated_at' => '2025-01-29 04:34:46',
            ),
            201 => 
            array (
                'id' => 1206,
                'code' => 'R9-01282025-MIC-0025',
                'information' => NULL,
                'sample_id' => 2465,
                'user_id' => 16,
                'created_at' => '2025-01-29 04:42:21',
                'updated_at' => '2025-01-29 04:42:21',
            ),
            202 => 
            array (
                'id' => 1207,
                'code' => 'R9-01282025-MIC-0026',
                'information' => NULL,
                'sample_id' => 2467,
                'user_id' => 16,
                'created_at' => '2025-01-29 04:43:33',
                'updated_at' => '2025-01-29 04:43:33',
            ),
            203 => 
            array (
                'id' => 1208,
                'code' => 'R9-01282025-MIC-0027',
                'information' => NULL,
                'sample_id' => 2472,
                'user_id' => 16,
                'created_at' => '2025-01-29 04:44:11',
                'updated_at' => '2025-01-29 04:44:11',
            ),
            204 => 
            array (
                'id' => 1209,
                'code' => 'R9-01282025-MIC-0028',
                'information' => NULL,
                'sample_id' => 2473,
                'user_id' => 16,
                'created_at' => '2025-01-29 04:44:46',
                'updated_at' => '2025-01-29 04:44:46',
            ),
            205 => 
            array (
                'id' => 1210,
                'code' => 'R9-01282025-MIC-0029',
                'information' => NULL,
                'sample_id' => 2474,
                'user_id' => 16,
                'created_at' => '2025-01-29 04:45:08',
                'updated_at' => '2025-01-29 04:45:08',
            ),
            206 => 
            array (
                'id' => 1211,
                'code' => 'R9-01282025-MIC-0030',
                'information' => NULL,
                'sample_id' => 2475,
                'user_id' => 16,
                'created_at' => '2025-01-29 04:45:20',
                'updated_at' => '2025-01-29 04:45:20',
            ),
            207 => 
            array (
                'id' => 1212,
                'code' => 'R9-01282025-MIC-0031',
                'information' => NULL,
                'sample_id' => 2476,
                'user_id' => 16,
                'created_at' => '2025-01-29 04:45:33',
                'updated_at' => '2025-01-29 04:45:33',
            ),
            208 => 
            array (
                'id' => 1213,
                'code' => 'R9-01282025-MIC-0032',
                'information' => NULL,
                'sample_id' => 2477,
                'user_id' => 16,
                'created_at' => '2025-01-29 04:45:52',
                'updated_at' => '2025-01-29 04:45:52',
            ),
            209 => 
            array (
                'id' => 1214,
                'code' => 'R9-01282025-MIC-0033',
                'information' => NULL,
                'sample_id' => 2478,
                'user_id' => 16,
                'created_at' => '2025-01-29 04:46:21',
                'updated_at' => '2025-01-29 04:46:21',
            ),
            210 => 
            array (
                'id' => 1215,
                'code' => 'R9-01282025-MIC-0034',
                'information' => NULL,
                'sample_id' => 2479,
                'user_id' => 16,
                'created_at' => '2025-01-29 04:46:59',
                'updated_at' => '2025-01-29 04:46:59',
            ),
            211 => 
            array (
                'id' => 1216,
                'code' => 'R9-01282025-MIC-0035',
                'information' => NULL,
                'sample_id' => 2480,
                'user_id' => 16,
                'created_at' => '2025-01-29 04:47:09',
                'updated_at' => '2025-01-29 04:47:09',
            ),
            212 => 
            array (
                'id' => 1217,
                'code' => 'R9-01282025-MIC-0036',
                'information' => NULL,
                'sample_id' => 2481,
                'user_id' => 16,
                'created_at' => '2025-01-29 04:47:19',
                'updated_at' => '2025-01-29 04:47:19',
            ),
            213 => 
            array (
                'id' => 1218,
                'code' => 'R9-01282025-MIC-0037',
                'information' => NULL,
                'sample_id' => 2482,
                'user_id' => 16,
                'created_at' => '2025-01-29 04:47:28',
                'updated_at' => '2025-01-29 04:47:28',
            ),
            214 => 
            array (
                'id' => 1219,
                'code' => 'R9-01282025-MIC-0038',
                'information' => NULL,
                'sample_id' => 2483,
                'user_id' => 16,
                'created_at' => '2025-01-29 04:47:59',
                'updated_at' => '2025-01-29 04:47:59',
            ),
            215 => 
            array (
                'id' => 1220,
                'code' => 'R9-01282025-MIC-0039',
                'information' => NULL,
                'sample_id' => 2484,
                'user_id' => 16,
                'created_at' => '2025-01-29 04:48:35',
                'updated_at' => '2025-01-29 04:48:35',
            ),
            216 => 
            array (
                'id' => 1221,
                'code' => 'R9-01282025-MIC-0040',
                'information' => NULL,
                'sample_id' => 2485,
                'user_id' => 16,
                'created_at' => '2025-01-29 04:48:47',
                'updated_at' => '2025-01-29 04:48:47',
            ),
            217 => 
            array (
                'id' => 1222,
                'code' => 'R9-01282025-MIC-0041',
                'information' => NULL,
                'sample_id' => 2486,
                'user_id' => 16,
                'created_at' => '2025-01-29 04:48:57',
                'updated_at' => '2025-01-29 04:48:57',
            ),
            218 => 
            array (
                'id' => 1223,
                'code' => 'R9-01282025-MIC-0042',
                'information' => NULL,
                'sample_id' => 2487,
                'user_id' => 16,
                'created_at' => '2025-01-29 04:49:06',
                'updated_at' => '2025-01-29 04:49:06',
            ),
            219 => 
            array (
                'id' => 1224,
                'code' => 'R9-01282025-MIC-0043',
                'information' => NULL,
                'sample_id' => 2488,
                'user_id' => 16,
                'created_at' => '2025-01-29 04:49:45',
                'updated_at' => '2025-01-29 04:49:45',
            ),
            220 => 
            array (
                'id' => 1225,
                'code' => 'R9-01282025-MIC-0044',
                'information' => NULL,
                'sample_id' => 2489,
                'user_id' => 16,
                'created_at' => '2025-01-29 04:50:04',
                'updated_at' => '2025-01-29 04:50:04',
            ),
            221 => 
            array (
                'id' => 1226,
                'code' => 'R9-01282025-MIC-0045',
                'information' => NULL,
                'sample_id' => 2492,
                'user_id' => 16,
                'created_at' => '2025-01-29 04:50:32',
                'updated_at' => '2025-01-29 04:50:32',
            ),
            222 => 
            array (
                'id' => 1227,
                'code' => 'R9-01282025-MIC-0046',
                'information' => NULL,
                'sample_id' => 2493,
                'user_id' => 16,
                'created_at' => '2025-01-29 04:50:54',
                'updated_at' => '2025-01-29 04:50:54',
            ),
            223 => 
            array (
                'id' => 1228,
                'code' => 'R9-01282025-MIC-0047',
                'information' => NULL,
                'sample_id' => 2500,
                'user_id' => 16,
                'created_at' => '2025-01-29 04:51:24',
                'updated_at' => '2025-01-29 04:51:24',
            ),
            224 => 
            array (
                'id' => 1229,
                'code' => 'R9-01282025-MIC-0048',
                'information' => NULL,
                'sample_id' => 2512,
                'user_id' => 16,
                'created_at' => '2025-01-29 04:52:01',
                'updated_at' => '2025-01-29 04:52:01',
            ),
            225 => 
            array (
                'id' => 1230,
                'code' => 'R9-01282025-MIC-0049',
                'information' => NULL,
                'sample_id' => 2514,
                'user_id' => 16,
                'created_at' => '2025-01-29 04:52:38',
                'updated_at' => '2025-01-29 04:52:38',
            ),
            226 => 
            array (
                'id' => 1231,
                'code' => 'R9-01282025-MIC-0050',
                'information' => NULL,
                'sample_id' => 2516,
                'user_id' => 16,
                'created_at' => '2025-01-29 04:53:15',
                'updated_at' => '2025-01-29 04:53:15',
            ),
            227 => 
            array (
                'id' => 1232,
                'code' => 'R9-01282025-MIC-0051',
                'information' => NULL,
                'sample_id' => 2517,
                'user_id' => 16,
                'created_at' => '2025-01-29 04:53:35',
                'updated_at' => '2025-01-29 04:53:35',
            ),
            228 => 
            array (
                'id' => 1233,
                'code' => 'R9-01282025-MIC-0052',
                'information' => NULL,
                'sample_id' => 2518,
                'user_id' => 16,
                'created_at' => '2025-01-29 04:53:55',
                'updated_at' => '2025-01-29 04:53:55',
            ),
            229 => 
            array (
                'id' => 1234,
                'code' => 'R9-01282025-MIC-0053',
                'information' => NULL,
                'sample_id' => 2519,
                'user_id' => 16,
                'created_at' => '2025-01-29 04:54:26',
                'updated_at' => '2025-01-29 04:54:26',
            ),
            230 => 
            array (
                'id' => 1235,
                'code' => 'R9-01282025-MIC-0054',
                'information' => NULL,
                'sample_id' => 2520,
                'user_id' => 16,
                'created_at' => '2025-01-29 04:54:49',
                'updated_at' => '2025-01-29 04:54:49',
            ),
            231 => 
            array (
                'id' => 1236,
                'code' => 'R9-01282025-MIC-0055',
                'information' => NULL,
                'sample_id' => 2521,
                'user_id' => 16,
                'created_at' => '2025-01-29 04:55:17',
                'updated_at' => '2025-01-29 04:55:17',
            ),
            232 => 
            array (
                'id' => 1237,
                'code' => 'R9-01282025-MIC-0056',
                'information' => NULL,
                'sample_id' => 2522,
                'user_id' => 16,
                'created_at' => '2025-01-29 04:55:55',
                'updated_at' => '2025-01-29 04:55:55',
            ),
            233 => 
            array (
                'id' => 1238,
                'code' => 'R9-01282025-MIC-0057',
                'information' => NULL,
                'sample_id' => 2523,
                'user_id' => 16,
                'created_at' => '2025-01-29 04:56:33',
                'updated_at' => '2025-01-29 04:56:33',
            ),
            234 => 
            array (
                'id' => 1239,
                'code' => 'R9-01302025-CHE-0033',
                'information' => NULL,
                'sample_id' => 2515,
                'user_id' => 8,
                'created_at' => '2025-01-30 16:02:12',
                'updated_at' => '2025-01-30 16:02:12',
            ),
            235 => 
            array (
                'id' => 1240,
                'code' => 'R9-01312025-CHE-0034',
                'information' => NULL,
                'sample_id' => 2490,
                'user_id' => 8,
                'created_at' => '2025-01-31 15:48:11',
                'updated_at' => '2025-01-31 15:48:11',
            ),
            236 => 
            array (
                'id' => 1241,
                'code' => 'R9-01312025-CHE-0035',
                'information' => NULL,
                'sample_id' => 2491,
                'user_id' => 8,
                'created_at' => '2025-01-31 15:48:29',
                'updated_at' => '2025-01-31 15:48:29',
            ),
            237 => 
            array (
                'id' => 1242,
                'code' => 'R9-01312025-CHE-0036',
                'information' => NULL,
                'sample_id' => 2456,
                'user_id' => 8,
                'created_at' => '2025-01-31 16:09:07',
                'updated_at' => '2025-01-31 16:09:07',
            ),
            238 => 
            array (
                'id' => 1243,
                'code' => 'R9-01312025-CHE-0037',
                'information' => NULL,
                'sample_id' => 2459,
                'user_id' => 7,
                'created_at' => '2025-01-31 16:15:46',
                'updated_at' => '2025-01-31 16:15:46',
            ),
            239 => 
            array (
                'id' => 1244,
                'code' => 'R9-01312025-MET-0136',
                'information' => NULL,
                'sample_id' => 2279,
                'user_id' => 12,
                'created_at' => '2025-01-31 17:30:04',
                'updated_at' => '2025-01-31 17:30:04',
            ),
            240 => 
            array (
                'id' => 1245,
                'code' => 'R9-01312025-MET-0137',
                'information' => NULL,
                'sample_id' => 2280,
                'user_id' => 12,
                'created_at' => '2025-01-31 17:31:04',
                'updated_at' => '2025-01-31 17:31:04',
            ),
            241 => 
            array (
                'id' => 1246,
                'code' => 'R9-01312025-MET-0138',
                'information' => NULL,
                'sample_id' => 1167,
                'user_id' => 12,
                'created_at' => '2025-01-31 18:23:07',
                'updated_at' => '2025-01-31 18:23:07',
            ),
            242 => 
            array (
                'id' => 1247,
                'code' => 'R9-01312025-MET-0139',
                'information' => NULL,
                'sample_id' => 1331,
                'user_id' => 12,
                'created_at' => '2025-01-31 18:24:21',
                'updated_at' => '2025-01-31 18:24:21',
            ),
            243 => 
            array (
                'id' => 1248,
                'code' => 'R9-01312025-MET-0140',
                'information' => NULL,
                'sample_id' => 1483,
                'user_id' => 12,
                'created_at' => '2025-01-31 18:28:11',
                'updated_at' => '2025-01-31 18:28:11',
            ),
            244 => 
            array (
                'id' => 1249,
                'code' => 'R9-01312025-MET-0141',
                'information' => NULL,
                'sample_id' => 1484,
                'user_id' => 12,
                'created_at' => '2025-01-31 18:29:19',
                'updated_at' => '2025-01-31 18:29:19',
            ),
            245 => 
            array (
                'id' => 1250,
                'code' => 'R9-01312025-MET-0142',
                'information' => NULL,
                'sample_id' => 1578,
                'user_id' => 12,
                'created_at' => '2025-01-31 18:30:55',
                'updated_at' => '2025-01-31 18:30:55',
            ),
            246 => 
            array (
                'id' => 1251,
                'code' => 'R9-01312025-MET-0143',
                'information' => NULL,
                'sample_id' => 1579,
                'user_id' => 12,
                'created_at' => '2025-01-31 18:32:54',
                'updated_at' => '2025-01-31 18:32:54',
            ),
            247 => 
            array (
                'id' => 1252,
                'code' => 'R9-01312025-MET-0144',
                'information' => NULL,
                'sample_id' => 1592,
                'user_id' => 12,
                'created_at' => '2025-01-31 18:34:31',
                'updated_at' => '2025-01-31 18:34:31',
            ),
            248 => 
            array (
                'id' => 1253,
                'code' => 'R9-01312025-MET-0145',
                'information' => NULL,
                'sample_id' => 1593,
                'user_id' => 12,
                'created_at' => '2025-01-31 18:36:29',
                'updated_at' => '2025-01-31 18:36:29',
            ),
            249 => 
            array (
                'id' => 1254,
                'code' => 'R9-01312025-MET-0146',
                'information' => NULL,
                'sample_id' => 1609,
                'user_id' => 12,
                'created_at' => '2025-01-31 18:38:15',
                'updated_at' => '2025-01-31 18:38:15',
            ),
            250 => 
            array (
                'id' => 1255,
                'code' => 'R9-01312025-MET-0147',
                'information' => NULL,
                'sample_id' => 1640,
                'user_id' => 12,
                'created_at' => '2025-01-31 18:39:28',
                'updated_at' => '2025-01-31 18:39:28',
            ),
            251 => 
            array (
                'id' => 1256,
                'code' => 'R9-01312025-MET-0148',
                'information' => NULL,
                'sample_id' => 1648,
                'user_id' => 12,
                'created_at' => '2025-01-31 18:42:57',
                'updated_at' => '2025-01-31 18:42:57',
            ),
            252 => 
            array (
                'id' => 1257,
                'code' => 'R9-01312025-CHE-0038',
                'information' => NULL,
                'sample_id' => 2358,
                'user_id' => 6,
                'created_at' => '2025-01-31 23:08:38',
                'updated_at' => '2025-01-31 23:08:38',
            ),
            253 => 
            array (
                'id' => 1258,
                'code' => 'R9-01312025-CHE-0039',
                'information' => NULL,
                'sample_id' => 2359,
                'user_id' => 6,
                'created_at' => '2025-01-31 23:09:26',
                'updated_at' => '2025-01-31 23:09:26',
            ),
            254 => 
            array (
                'id' => 1259,
                'code' => 'R9-01312025-CHE-0040',
                'information' => NULL,
                'sample_id' => 2397,
                'user_id' => 8,
                'created_at' => '2025-02-01 02:15:23',
                'updated_at' => '2025-02-01 02:15:23',
            ),
            255 => 
            array (
                'id' => 1260,
                'code' => 'R9-01312025-CHE-0041',
                'information' => NULL,
                'sample_id' => 2498,
                'user_id' => 8,
                'created_at' => '2025-02-01 02:16:46',
                'updated_at' => '2025-02-01 02:16:46',
            ),
            256 => 
            array (
                'id' => 1261,
                'code' => 'R9-02032025-MET-0149',
                'information' => NULL,
                'sample_id' => 2693,
                'user_id' => 12,
                'created_at' => '2025-02-04 00:38:03',
                'updated_at' => '2025-02-04 00:38:03',
            ),
            257 => 
            array (
                'id' => 1262,
                'code' => 'R9-02032025-MET-0150',
                'information' => NULL,
                'sample_id' => 2694,
                'user_id' => 12,
                'created_at' => '2025-02-04 00:38:43',
                'updated_at' => '2025-02-04 00:38:43',
            ),
            258 => 
            array (
                'id' => 1263,
                'code' => 'R9-02032025-MET-0151',
                'information' => NULL,
                'sample_id' => 2695,
                'user_id' => 12,
                'created_at' => '2025-02-04 00:39:28',
                'updated_at' => '2025-02-04 00:39:28',
            ),
            259 => 
            array (
                'id' => 1264,
                'code' => 'R9-02032025-MET-0152',
                'information' => NULL,
                'sample_id' => 2696,
                'user_id' => 12,
                'created_at' => '2025-02-04 00:40:07',
                'updated_at' => '2025-02-04 00:40:07',
            ),
            260 => 
            array (
                'id' => 1265,
                'code' => 'R9-02042025-MIC-0058',
                'information' => NULL,
                'sample_id' => 2667,
                'user_id' => 16,
                'created_at' => '2025-02-04 18:58:00',
                'updated_at' => '2025-02-04 18:58:00',
            ),
            261 => 
            array (
                'id' => 1266,
                'code' => 'R9-02042025-MIC-0059',
                'information' => NULL,
                'sample_id' => 2668,
                'user_id' => 16,
                'created_at' => '2025-02-04 18:58:24',
                'updated_at' => '2025-02-04 18:58:24',
            ),
            262 => 
            array (
                'id' => 1267,
                'code' => 'R9-02042025-MIC-0060',
                'information' => NULL,
                'sample_id' => 2678,
                'user_id' => 16,
                'created_at' => '2025-02-04 19:03:15',
                'updated_at' => '2025-02-04 19:03:15',
            ),
            263 => 
            array (
                'id' => 1268,
                'code' => 'R9-02042025-MIC-0061',
                'information' => NULL,
                'sample_id' => 2680,
                'user_id' => 16,
                'created_at' => '2025-02-04 19:06:42',
                'updated_at' => '2025-02-04 19:06:42',
            ),
            264 => 
            array (
                'id' => 1269,
                'code' => 'R9-02052025-MET-0153',
                'information' => NULL,
                'sample_id' => 2325,
                'user_id' => 13,
                'created_at' => '2025-02-05 16:29:26',
                'updated_at' => '2025-02-05 16:29:26',
            ),
            265 => 
            array (
                'id' => 1270,
                'code' => 'R9-02052025-MET-0154',
                'information' => NULL,
                'sample_id' => 2326,
                'user_id' => 13,
                'created_at' => '2025-02-05 16:31:59',
                'updated_at' => '2025-02-05 16:31:59',
            ),
            266 => 
            array (
                'id' => 1271,
                'code' => 'R9-02052025-MET-0155',
                'information' => NULL,
                'sample_id' => 2327,
                'user_id' => 13,
                'created_at' => '2025-02-05 16:32:36',
                'updated_at' => '2025-02-05 16:32:36',
            ),
            267 => 
            array (
                'id' => 1272,
                'code' => 'R9-02052025-MET-0156',
                'information' => NULL,
                'sample_id' => 2328,
                'user_id' => 13,
                'created_at' => '2025-02-05 16:34:13',
                'updated_at' => '2025-02-05 16:34:13',
            ),
            268 => 
            array (
                'id' => 1273,
                'code' => 'R9-02052025-MET-0157',
                'information' => NULL,
                'sample_id' => 2370,
                'user_id' => 13,
                'created_at' => '2025-02-05 16:35:19',
                'updated_at' => '2025-02-05 16:35:19',
            ),
            269 => 
            array (
                'id' => 1274,
                'code' => 'R9-02052025-MET-0158',
                'information' => NULL,
                'sample_id' => 2386,
                'user_id' => 13,
                'created_at' => '2025-02-05 16:36:40',
                'updated_at' => '2025-02-05 16:36:40',
            ),
            270 => 
            array (
                'id' => 1275,
                'code' => 'R9-02052025-MET-0159',
                'information' => NULL,
                'sample_id' => 2647,
                'user_id' => 5,
                'created_at' => '2025-02-05 16:37:48',
                'updated_at' => '2025-02-05 16:37:48',
            ),
            271 => 
            array (
                'id' => 1276,
                'code' => 'R9-02052025-MET-0160',
                'information' => NULL,
                'sample_id' => 2418,
                'user_id' => 13,
                'created_at' => '2025-02-05 16:37:56',
                'updated_at' => '2025-02-05 16:37:56',
            ),
            272 => 
            array (
                'id' => 1277,
                'code' => 'R9-02052025-MET-0161',
                'information' => NULL,
                'sample_id' => 2648,
                'user_id' => 5,
                'created_at' => '2025-02-05 16:38:12',
                'updated_at' => '2025-02-05 16:38:12',
            ),
            273 => 
            array (
                'id' => 1278,
                'code' => 'R9-02052025-MET-0162',
                'information' => NULL,
                'sample_id' => 2525,
                'user_id' => 13,
                'created_at' => '2025-02-05 16:38:49',
                'updated_at' => '2025-02-05 16:38:49',
            ),
            274 => 
            array (
                'id' => 1279,
                'code' => 'R9-02052025-MET-0163',
                'information' => NULL,
                'sample_id' => 2371,
                'user_id' => 13,
                'created_at' => '2025-02-05 16:40:01',
                'updated_at' => '2025-02-05 16:40:01',
            ),
            275 => 
            array (
                'id' => 1280,
                'code' => 'R9-02052025-MET-0164',
                'information' => NULL,
                'sample_id' => 2448,
                'user_id' => 5,
                'created_at' => '2025-02-05 19:11:30',
                'updated_at' => '2025-02-05 19:11:30',
            ),
            276 => 
            array (
                'id' => 1281,
                'code' => 'R9-02052025-CHE-0042',
                'information' => NULL,
                'sample_id' => 2717,
                'user_id' => 7,
                'created_at' => '2025-02-05 20:12:23',
                'updated_at' => '2025-02-05 20:12:23',
            ),
            277 => 
            array (
                'id' => 1282,
                'code' => 'R9-02052025-CHE-0043',
                'information' => NULL,
                'sample_id' => 2718,
                'user_id' => 7,
                'created_at' => '2025-02-05 20:12:59',
                'updated_at' => '2025-02-05 20:12:59',
            ),
            278 => 
            array (
                'id' => 1283,
                'code' => 'R9-02052025-CHE-0044',
                'information' => NULL,
                'sample_id' => 2372,
                'user_id' => 7,
                'created_at' => '2025-02-05 21:23:49',
                'updated_at' => '2025-02-05 21:23:49',
            ),
            279 => 
            array (
                'id' => 1284,
                'code' => 'R9-02052025-MET-0165',
                'information' => NULL,
                'sample_id' => 2449,
                'user_id' => 5,
                'created_at' => '2025-02-05 22:08:30',
                'updated_at' => '2025-02-05 22:08:30',
            ),
            280 => 
            array (
                'id' => 1285,
                'code' => 'R9-02062025-CHE-0045',
                'information' => NULL,
                'sample_id' => 2401,
                'user_id' => 7,
                'created_at' => '2025-02-06 18:05:56',
                'updated_at' => '2025-02-06 18:05:56',
            ),
            281 => 
            array (
                'id' => 1286,
                'code' => 'R9-02062025-CHE-0046',
                'information' => NULL,
                'sample_id' => 2403,
                'user_id' => 7,
                'created_at' => '2025-02-06 18:06:50',
                'updated_at' => '2025-02-06 18:06:50',
            ),
            282 => 
            array (
                'id' => 1287,
                'code' => 'R9-02062025-CHE-0047',
                'information' => NULL,
                'sample_id' => 2405,
                'user_id' => 7,
                'created_at' => '2025-02-06 18:07:38',
                'updated_at' => '2025-02-06 18:07:38',
            ),
            283 => 
            array (
                'id' => 1288,
                'code' => 'R9-02062025-CHE-0048',
                'information' => NULL,
                'sample_id' => 2458,
                'user_id' => 7,
                'created_at' => '2025-02-06 19:16:22',
                'updated_at' => '2025-02-06 19:16:22',
            ),
            284 => 
            array (
                'id' => 1289,
                'code' => 'R9-02062025-MET-0166',
                'information' => NULL,
                'sample_id' => 2770,
                'user_id' => 12,
                'created_at' => '2025-02-06 21:00:49',
                'updated_at' => '2025-02-06 21:00:49',
            ),
            285 => 
            array (
                'id' => 1290,
                'code' => 'R9-02062025-MET-0167',
                'information' => NULL,
                'sample_id' => 1635,
                'user_id' => 12,
                'created_at' => '2025-02-07 00:43:35',
                'updated_at' => '2025-02-07 00:43:35',
            ),
            286 => 
            array (
                'id' => 1291,
                'code' => 'R9-02062025-MET-0168',
                'information' => NULL,
                'sample_id' => 1636,
                'user_id' => 12,
                'created_at' => '2025-02-07 00:44:14',
                'updated_at' => '2025-02-07 00:44:14',
            ),
            287 => 
            array (
                'id' => 1292,
                'code' => 'R9-02062025-MET-0169',
                'information' => NULL,
                'sample_id' => 1637,
                'user_id' => 12,
                'created_at' => '2025-02-07 00:44:44',
                'updated_at' => '2025-02-07 00:44:44',
            ),
            288 => 
            array (
                'id' => 1293,
                'code' => 'R9-02062025-MET-0170',
                'information' => NULL,
                'sample_id' => 1638,
                'user_id' => 12,
                'created_at' => '2025-02-07 00:45:15',
                'updated_at' => '2025-02-07 00:45:15',
            ),
            289 => 
            array (
                'id' => 1294,
                'code' => 'R9-02062025-MET-0171',
                'information' => NULL,
                'sample_id' => 1639,
                'user_id' => 12,
                'created_at' => '2025-02-07 00:45:42',
                'updated_at' => '2025-02-07 00:45:42',
            ),
            290 => 
            array (
                'id' => 1295,
                'code' => 'R9-02072025-MIC-0062',
                'information' => NULL,
                'sample_id' => 334,
                'user_id' => 16,
                'created_at' => '2025-02-07 13:45:12',
                'updated_at' => '2025-02-07 13:45:12',
            ),
            291 => 
            array (
                'id' => 1296,
                'code' => 'R9-02072025-CHE-0049',
                'information' => NULL,
                'sample_id' => 2292,
                'user_id' => 8,
                'created_at' => '2025-02-07 17:48:03',
                'updated_at' => '2025-02-07 17:48:03',
            ),
            292 => 
            array (
                'id' => 1297,
                'code' => 'R9-02072025-CHE-0050',
                'information' => NULL,
                'sample_id' => 2620,
                'user_id' => 7,
                'created_at' => '2025-02-07 23:41:02',
                'updated_at' => '2025-02-07 23:41:02',
            ),
            293 => 
            array (
                'id' => 1298,
                'code' => 'R9-02072025-CHE-0051',
                'information' => NULL,
                'sample_id' => 2621,
                'user_id' => 7,
                'created_at' => '2025-02-07 23:41:07',
                'updated_at' => '2025-02-07 23:41:07',
            ),
            294 => 
            array (
                'id' => 1299,
                'code' => 'R9-02072025-CHE-0052',
                'information' => NULL,
                'sample_id' => 2622,
                'user_id' => 7,
                'created_at' => '2025-02-07 23:41:13',
                'updated_at' => '2025-02-07 23:41:13',
            ),
            295 => 
            array (
                'id' => 1300,
                'code' => 'R9-02072025-CHE-0053',
                'information' => NULL,
                'sample_id' => 2623,
                'user_id' => 7,
                'created_at' => '2025-02-07 23:41:23',
                'updated_at' => '2025-02-07 23:41:23',
            ),
            296 => 
            array (
                'id' => 1301,
                'code' => 'R9-02072025-CHE-0054',
                'information' => NULL,
                'sample_id' => 2624,
                'user_id' => 7,
                'created_at' => '2025-02-07 23:42:27',
                'updated_at' => '2025-02-07 23:42:27',
            ),
            297 => 
            array (
                'id' => 1302,
                'code' => 'R9-02102025-MIC-0063',
                'information' => NULL,
                'sample_id' => 2736,
                'user_id' => 16,
                'created_at' => '2025-02-10 17:35:49',
                'updated_at' => '2025-02-10 17:35:49',
            ),
            298 => 
            array (
                'id' => 1303,
                'code' => 'R9-02102025-MIC-0064',
                'information' => NULL,
                'sample_id' => 2737,
                'user_id' => 16,
                'created_at' => '2025-02-10 17:36:36',
                'updated_at' => '2025-02-10 17:36:36',
            ),
            299 => 
            array (
                'id' => 1304,
                'code' => 'R9-02102025-MIC-0065',
                'information' => NULL,
                'sample_id' => 2738,
                'user_id' => 16,
                'created_at' => '2025-02-10 17:36:44',
                'updated_at' => '2025-02-10 17:36:44',
            ),
            300 => 
            array (
                'id' => 1305,
                'code' => 'R9-02102025-MIC-0066',
                'information' => NULL,
                'sample_id' => 2739,
                'user_id' => 16,
                'created_at' => '2025-02-10 17:36:57',
                'updated_at' => '2025-02-10 17:36:57',
            ),
            301 => 
            array (
                'id' => 1306,
                'code' => 'R9-02102025-MIC-0067',
                'information' => NULL,
                'sample_id' => 2740,
                'user_id' => 16,
                'created_at' => '2025-02-10 17:37:18',
                'updated_at' => '2025-02-10 17:37:18',
            ),
            302 => 
            array (
                'id' => 1307,
                'code' => 'R9-02102025-CHE-0055',
                'information' => NULL,
                'sample_id' => 2742,
                'user_id' => 8,
                'created_at' => '2025-02-10 22:19:58',
                'updated_at' => '2025-02-10 22:19:58',
            ),
            303 => 
            array (
                'id' => 1308,
                'code' => 'R9-02102025-MIC-0068',
                'information' => NULL,
                'sample_id' => 2625,
                'user_id' => 16,
                'created_at' => '2025-02-11 04:55:31',
                'updated_at' => '2025-02-11 04:55:31',
            ),
            304 => 
            array (
                'id' => 1309,
                'code' => 'R9-02102025-MIC-0069',
                'information' => NULL,
                'sample_id' => 2692,
                'user_id' => 16,
                'created_at' => '2025-02-11 04:59:09',
                'updated_at' => '2025-02-11 04:59:09',
            ),
            305 => 
            array (
                'id' => 1310,
                'code' => 'R9-02102025-MIC-0070',
                'information' => NULL,
                'sample_id' => 2719,
                'user_id' => 16,
                'created_at' => '2025-02-11 05:48:16',
                'updated_at' => '2025-02-11 05:48:16',
            ),
            306 => 
            array (
                'id' => 1311,
                'code' => 'R9-02102025-MIC-0071',
                'information' => NULL,
                'sample_id' => 2728,
                'user_id' => 16,
                'created_at' => '2025-02-11 06:23:22',
                'updated_at' => '2025-02-11 06:23:22',
            ),
            307 => 
            array (
                'id' => 1312,
                'code' => 'R9-02112025-MET-0172',
                'information' => NULL,
                'sample_id' => 2394,
                'user_id' => 12,
                'created_at' => '2025-02-11 16:11:56',
                'updated_at' => '2025-02-11 16:11:56',
            ),
            308 => 
            array (
                'id' => 1313,
                'code' => 'R9-02112025-MET-0173',
                'information' => NULL,
                'sample_id' => 2395,
                'user_id' => 12,
                'created_at' => '2025-02-11 16:12:53',
                'updated_at' => '2025-02-11 16:12:53',
            ),
            309 => 
            array (
                'id' => 1314,
                'code' => 'R9-02112025-MET-0174',
                'information' => NULL,
                'sample_id' => 2399,
                'user_id' => 12,
                'created_at' => '2025-02-11 16:14:07',
                'updated_at' => '2025-02-11 16:14:07',
            ),
            310 => 
            array (
                'id' => 1315,
                'code' => 'R9-02112025-MIC-0072',
                'information' => NULL,
                'sample_id' => 2715,
                'user_id' => 16,
                'created_at' => '2025-02-11 18:10:23',
                'updated_at' => '2025-02-11 18:10:23',
            ),
            311 => 
            array (
                'id' => 1316,
                'code' => 'R9-02112025-MIC-0073',
                'information' => NULL,
                'sample_id' => 2716,
                'user_id' => 16,
                'created_at' => '2025-02-11 18:11:04',
                'updated_at' => '2025-02-11 18:11:04',
            ),
            312 => 
            array (
                'id' => 1317,
                'code' => 'R9-02112025-MIC-0074',
                'information' => NULL,
                'sample_id' => 2730,
                'user_id' => 16,
                'created_at' => '2025-02-11 18:13:37',
                'updated_at' => '2025-02-11 18:13:37',
            ),
            313 => 
            array (
                'id' => 1318,
                'code' => 'R9-02112025-MET-0175',
                'information' => NULL,
                'sample_id' => 2845,
                'user_id' => 12,
                'created_at' => '2025-02-11 18:20:02',
                'updated_at' => '2025-02-11 18:20:02',
            ),
            314 => 
            array (
                'id' => 1319,
                'code' => 'R9-02112025-MET-0176',
                'information' => NULL,
                'sample_id' => 2846,
                'user_id' => 12,
                'created_at' => '2025-02-11 18:20:15',
                'updated_at' => '2025-02-11 18:20:15',
            ),
            315 => 
            array (
                'id' => 1320,
                'code' => 'R9-02112025-MET-0177',
                'information' => NULL,
                'sample_id' => 2847,
                'user_id' => 12,
                'created_at' => '2025-02-11 18:20:20',
                'updated_at' => '2025-02-11 18:20:20',
            ),
            316 => 
            array (
                'id' => 1321,
                'code' => 'R9-02112025-MET-0178',
                'information' => NULL,
                'sample_id' => 2848,
                'user_id' => 12,
                'created_at' => '2025-02-11 18:20:24',
                'updated_at' => '2025-02-11 18:20:24',
            ),
            317 => 
            array (
                'id' => 1322,
                'code' => 'R9-02112025-MET-0179',
                'information' => NULL,
                'sample_id' => 2849,
                'user_id' => 12,
                'created_at' => '2025-02-11 18:20:28',
                'updated_at' => '2025-02-11 18:20:28',
            ),
            318 => 
            array (
                'id' => 1323,
                'code' => 'R9-02112025-MET-0180',
                'information' => NULL,
                'sample_id' => 2850,
                'user_id' => 12,
                'created_at' => '2025-02-11 18:21:00',
                'updated_at' => '2025-02-11 18:21:00',
            ),
            319 => 
            array (
                'id' => 1324,
                'code' => 'R9-02112025-MET-0181',
                'information' => NULL,
                'sample_id' => 2851,
                'user_id' => 12,
                'created_at' => '2025-02-11 18:21:03',
                'updated_at' => '2025-02-11 18:21:03',
            ),
            320 => 
            array (
                'id' => 1325,
                'code' => 'R9-02112025-MET-0182',
                'information' => NULL,
                'sample_id' => 2852,
                'user_id' => 12,
                'created_at' => '2025-02-11 18:21:06',
                'updated_at' => '2025-02-11 18:21:06',
            ),
            321 => 
            array (
                'id' => 1326,
                'code' => 'R9-02112025-MET-0183',
                'information' => NULL,
                'sample_id' => 2853,
                'user_id' => 12,
                'created_at' => '2025-02-11 18:21:09',
                'updated_at' => '2025-02-11 18:21:09',
            ),
            322 => 
            array (
                'id' => 1327,
                'code' => 'R9-02112025-MET-0184',
                'information' => NULL,
                'sample_id' => 2854,
                'user_id' => 12,
                'created_at' => '2025-02-11 18:21:11',
                'updated_at' => '2025-02-11 18:21:11',
            ),
            323 => 
            array (
                'id' => 1328,
                'code' => 'R9-02112025-MET-0185',
                'information' => NULL,
                'sample_id' => 2855,
                'user_id' => 12,
                'created_at' => '2025-02-11 18:21:54',
                'updated_at' => '2025-02-11 18:21:54',
            ),
            324 => 
            array (
                'id' => 1329,
                'code' => 'R9-02112025-MET-0186',
                'information' => NULL,
                'sample_id' => 2856,
                'user_id' => 12,
                'created_at' => '2025-02-11 18:21:57',
                'updated_at' => '2025-02-11 18:21:57',
            ),
            325 => 
            array (
                'id' => 1330,
                'code' => 'R9-02112025-MET-0187',
                'information' => NULL,
                'sample_id' => 2857,
                'user_id' => 12,
                'created_at' => '2025-02-11 18:22:00',
                'updated_at' => '2025-02-11 18:22:00',
            ),
            326 => 
            array (
                'id' => 1331,
                'code' => 'R9-02112025-MET-0188',
                'information' => NULL,
                'sample_id' => 2858,
                'user_id' => 12,
                'created_at' => '2025-02-11 18:22:09',
                'updated_at' => '2025-02-11 18:22:09',
            ),
            327 => 
            array (
                'id' => 1332,
                'code' => 'R9-02112025-MET-0189',
                'information' => NULL,
                'sample_id' => 2859,
                'user_id' => 12,
                'created_at' => '2025-02-11 18:22:12',
                'updated_at' => '2025-02-11 18:22:12',
            ),
            328 => 
            array (
                'id' => 1333,
                'code' => 'R9-02112025-MET-0190',
                'information' => NULL,
                'sample_id' => 2860,
                'user_id' => 12,
                'created_at' => '2025-02-11 18:22:18',
                'updated_at' => '2025-02-11 18:22:18',
            ),
            329 => 
            array (
                'id' => 1334,
                'code' => 'R9-02112025-MET-0191',
                'information' => NULL,
                'sample_id' => 2861,
                'user_id' => 12,
                'created_at' => '2025-02-11 18:22:21',
                'updated_at' => '2025-02-11 18:22:21',
            ),
            330 => 
            array (
                'id' => 1335,
                'code' => 'R9-02112025-MET-0192',
                'information' => NULL,
                'sample_id' => 2862,
                'user_id' => 12,
                'created_at' => '2025-02-11 18:22:26',
                'updated_at' => '2025-02-11 18:22:26',
            ),
            331 => 
            array (
                'id' => 1336,
                'code' => 'R9-02112025-MET-0193',
                'information' => NULL,
                'sample_id' => 2863,
                'user_id' => 12,
                'created_at' => '2025-02-11 18:22:31',
                'updated_at' => '2025-02-11 18:22:31',
            ),
            332 => 
            array (
                'id' => 1337,
                'code' => 'R9-02112025-MET-0194',
                'information' => NULL,
                'sample_id' => 2864,
                'user_id' => 12,
                'created_at' => '2025-02-11 18:22:35',
                'updated_at' => '2025-02-11 18:22:35',
            ),
            333 => 
            array (
                'id' => 1338,
                'code' => 'R9-02112025-MET-0195',
                'information' => NULL,
                'sample_id' => 2865,
                'user_id' => 12,
                'created_at' => '2025-02-11 18:22:42',
                'updated_at' => '2025-02-11 18:22:42',
            ),
            334 => 
            array (
                'id' => 1339,
                'code' => 'R9-02112025-MET-0196',
                'information' => NULL,
                'sample_id' => 2866,
                'user_id' => 12,
                'created_at' => '2025-02-11 18:22:49',
                'updated_at' => '2025-02-11 18:22:49',
            ),
            335 => 
            array (
                'id' => 1340,
                'code' => 'R9-02112025-MET-0197',
                'information' => NULL,
                'sample_id' => 2867,
                'user_id' => 12,
                'created_at' => '2025-02-11 18:22:54',
                'updated_at' => '2025-02-11 18:22:54',
            ),
            336 => 
            array (
                'id' => 1341,
                'code' => 'R9-02112025-MET-0198',
                'information' => NULL,
                'sample_id' => 2868,
                'user_id' => 12,
                'created_at' => '2025-02-11 18:23:00',
                'updated_at' => '2025-02-11 18:23:00',
            ),
            337 => 
            array (
                'id' => 1342,
                'code' => 'R9-02112025-MET-0199',
                'information' => NULL,
                'sample_id' => 2869,
                'user_id' => 12,
                'created_at' => '2025-02-11 18:23:06',
                'updated_at' => '2025-02-11 18:23:06',
            ),
            338 => 
            array (
                'id' => 1343,
                'code' => 'R9-02112025-MET-0200',
                'information' => NULL,
                'sample_id' => 2870,
                'user_id' => 12,
                'created_at' => '2025-02-11 18:23:45',
                'updated_at' => '2025-02-11 18:23:45',
            ),
            339 => 
            array (
                'id' => 1344,
                'code' => 'R9-02112025-MET-0201',
                'information' => NULL,
                'sample_id' => 2871,
                'user_id' => 12,
                'created_at' => '2025-02-11 18:23:53',
                'updated_at' => '2025-02-11 18:23:53',
            ),
            340 => 
            array (
                'id' => 1345,
                'code' => 'R9-02112025-MET-0202',
                'information' => NULL,
                'sample_id' => 2872,
                'user_id' => 12,
                'created_at' => '2025-02-11 18:23:57',
                'updated_at' => '2025-02-11 18:23:57',
            ),
            341 => 
            array (
                'id' => 1346,
                'code' => 'R9-02112025-MET-0203',
                'information' => NULL,
                'sample_id' => 2873,
                'user_id' => 12,
                'created_at' => '2025-02-11 18:24:03',
                'updated_at' => '2025-02-11 18:24:03',
            ),
            342 => 
            array (
                'id' => 1347,
                'code' => 'R9-02112025-MET-0204',
                'information' => NULL,
                'sample_id' => 2874,
                'user_id' => 12,
                'created_at' => '2025-02-11 18:24:19',
                'updated_at' => '2025-02-11 18:24:19',
            ),
            343 => 
            array (
                'id' => 1348,
                'code' => 'R9-02112025-MET-0205',
                'information' => NULL,
                'sample_id' => 2875,
                'user_id' => 12,
                'created_at' => '2025-02-11 18:24:23',
                'updated_at' => '2025-02-11 18:24:23',
            ),
            344 => 
            array (
                'id' => 1349,
                'code' => 'R9-02122025-MET-0206',
                'information' => NULL,
                'sample_id' => 2316,
                'user_id' => 12,
                'created_at' => '2025-02-12 16:37:32',
                'updated_at' => '2025-02-12 16:37:32',
            ),
            345 => 
            array (
                'id' => 1350,
                'code' => 'R9-02122025-MET-0207',
                'information' => NULL,
                'sample_id' => 2317,
                'user_id' => 12,
                'created_at' => '2025-02-12 16:38:11',
                'updated_at' => '2025-02-12 16:38:11',
            ),
            346 => 
            array (
                'id' => 1351,
                'code' => 'R9-02122025-MET-0208',
                'information' => NULL,
                'sample_id' => 2318,
                'user_id' => 12,
                'created_at' => '2025-02-12 16:39:02',
                'updated_at' => '2025-02-12 16:39:02',
            ),
            347 => 
            array (
                'id' => 1352,
                'code' => 'R9-02122025-MET-0209',
                'information' => NULL,
                'sample_id' => 2319,
                'user_id' => 12,
                'created_at' => '2025-02-12 16:39:54',
                'updated_at' => '2025-02-12 16:39:54',
            ),
            348 => 
            array (
                'id' => 1353,
                'code' => 'R9-02122025-MET-0210',
                'information' => NULL,
                'sample_id' => 2320,
                'user_id' => 12,
                'created_at' => '2025-02-12 16:40:18',
                'updated_at' => '2025-02-12 16:40:18',
            ),
            349 => 
            array (
                'id' => 1354,
                'code' => 'R9-02122025-MET-0211',
                'information' => NULL,
                'sample_id' => 2660,
                'user_id' => 12,
                'created_at' => '2025-02-12 19:17:22',
                'updated_at' => '2025-02-12 19:17:22',
            ),
            350 => 
            array (
                'id' => 1355,
                'code' => 'R9-02122025-MET-0212',
                'information' => NULL,
                'sample_id' => 2661,
                'user_id' => 12,
                'created_at' => '2025-02-12 19:17:34',
                'updated_at' => '2025-02-12 19:17:34',
            ),
            351 => 
            array (
                'id' => 1356,
                'code' => 'R9-02122025-MET-0213',
                'information' => NULL,
                'sample_id' => 2453,
                'user_id' => 12,
                'created_at' => '2025-02-12 19:18:38',
                'updated_at' => '2025-02-12 19:18:38',
            ),
            352 => 
            array (
                'id' => 1357,
                'code' => 'R9-02122025-CHE-0056',
                'information' => NULL,
                'sample_id' => 2409,
                'user_id' => 8,
                'created_at' => '2025-02-12 20:26:43',
                'updated_at' => '2025-02-12 20:26:43',
            ),
            353 => 
            array (
                'id' => 1358,
                'code' => 'R9-02122025-CHE-0057',
                'information' => NULL,
                'sample_id' => 2410,
                'user_id' => 8,
                'created_at' => '2025-02-12 20:26:49',
                'updated_at' => '2025-02-12 20:26:49',
            ),
            354 => 
            array (
                'id' => 1359,
                'code' => 'R9-02122025-CHE-0058',
                'information' => NULL,
                'sample_id' => 2411,
                'user_id' => 8,
                'created_at' => '2025-02-12 20:26:56',
                'updated_at' => '2025-02-12 20:26:56',
            ),
            355 => 
            array (
                'id' => 1360,
                'code' => 'R9-02122025-CHE-0059',
                'information' => NULL,
                'sample_id' => 2412,
                'user_id' => 8,
                'created_at' => '2025-02-12 20:27:02',
                'updated_at' => '2025-02-12 20:27:02',
            ),
            356 => 
            array (
                'id' => 1361,
                'code' => 'R9-02122025-CHE-0060',
                'information' => NULL,
                'sample_id' => 2413,
                'user_id' => 8,
                'created_at' => '2025-02-12 20:27:24',
                'updated_at' => '2025-02-12 20:27:24',
            ),
            357 => 
            array (
                'id' => 1362,
                'code' => 'R9-02122025-CHE-0061',
                'information' => NULL,
                'sample_id' => 2466,
                'user_id' => 8,
                'created_at' => '2025-02-12 20:27:36',
                'updated_at' => '2025-02-12 20:27:36',
            ),
            358 => 
            array (
                'id' => 1363,
                'code' => 'R9-02122025-CHE-0062',
                'information' => NULL,
                'sample_id' => 2468,
                'user_id' => 8,
                'created_at' => '2025-02-12 20:27:44',
                'updated_at' => '2025-02-12 20:27:44',
            ),
            359 => 
            array (
                'id' => 1364,
                'code' => 'R9-02122025-CHE-0063',
                'information' => NULL,
                'sample_id' => 2511,
                'user_id' => 8,
                'created_at' => '2025-02-12 20:27:57',
                'updated_at' => '2025-02-12 20:27:57',
            ),
            360 => 
            array (
                'id' => 1365,
                'code' => 'R9-02122025-MET-0214',
                'information' => NULL,
                'sample_id' => 2471,
                'user_id' => 12,
                'created_at' => '2025-02-12 21:07:58',
                'updated_at' => '2025-02-12 21:07:58',
            ),
            361 => 
            array (
                'id' => 1366,
                'code' => 'R9-02122025-MIC-0075',
                'information' => NULL,
                'sample_id' => 2732,
                'user_id' => 16,
                'created_at' => '2025-02-12 21:19:40',
                'updated_at' => '2025-02-12 21:19:40',
            ),
            362 => 
            array (
                'id' => 1367,
                'code' => 'R9-02122025-MIC-0076',
                'information' => NULL,
                'sample_id' => 2745,
                'user_id' => 16,
                'created_at' => '2025-02-12 22:06:19',
                'updated_at' => '2025-02-12 22:06:19',
            ),
            363 => 
            array (
                'id' => 1368,
                'code' => 'R9-02122025-MIC-0077',
                'information' => NULL,
                'sample_id' => 2746,
                'user_id' => 16,
                'created_at' => '2025-02-12 22:06:40',
                'updated_at' => '2025-02-12 22:06:40',
            ),
            364 => 
            array (
                'id' => 1369,
                'code' => 'R9-02132025-CHE-0064',
                'information' => NULL,
                'sample_id' => 2373,
                'user_id' => 8,
                'created_at' => '2025-02-13 16:37:40',
                'updated_at' => '2025-02-13 16:37:40',
            ),
            365 => 
            array (
                'id' => 1370,
                'code' => 'R9-02132025-MIC-0078',
                'information' => NULL,
                'sample_id' => 2743,
                'user_id' => 16,
                'created_at' => '2025-02-13 16:39:00',
                'updated_at' => '2025-02-13 16:39:00',
            ),
            366 => 
            array (
                'id' => 1371,
                'code' => 'R9-02132025-MIC-0079',
                'information' => NULL,
                'sample_id' => 2744,
                'user_id' => 16,
                'created_at' => '2025-02-13 16:39:36',
                'updated_at' => '2025-02-13 16:39:36',
            ),
            367 => 
            array (
                'id' => 1372,
                'code' => 'R9-02132025-MIC-0080',
                'information' => NULL,
                'sample_id' => 2747,
                'user_id' => 16,
                'created_at' => '2025-02-13 16:40:41',
                'updated_at' => '2025-02-13 16:40:41',
            ),
            368 => 
            array (
                'id' => 1373,
                'code' => 'R9-02132025-MIC-0081',
                'information' => NULL,
                'sample_id' => 2748,
                'user_id' => 16,
                'created_at' => '2025-02-13 16:41:03',
                'updated_at' => '2025-02-13 16:41:03',
            ),
            369 => 
            array (
                'id' => 1374,
                'code' => 'R9-02132025-MIC-0082',
                'information' => NULL,
                'sample_id' => 2749,
                'user_id' => 16,
                'created_at' => '2025-02-13 16:41:17',
                'updated_at' => '2025-02-13 16:41:17',
            ),
            370 => 
            array (
                'id' => 1375,
                'code' => 'R9-02132025-MIC-0083',
                'information' => NULL,
                'sample_id' => 2757,
                'user_id' => 16,
                'created_at' => '2025-02-13 16:41:40',
                'updated_at' => '2025-02-13 16:41:40',
            ),
            371 => 
            array (
                'id' => 1376,
                'code' => 'R9-02132025-CHE-0065',
                'information' => NULL,
                'sample_id' => 2810,
                'user_id' => 7,
                'created_at' => '2025-02-13 18:05:29',
                'updated_at' => '2025-02-13 18:05:29',
            ),
            372 => 
            array (
                'id' => 1377,
                'code' => 'R9-02132025-CHE-0066',
                'information' => NULL,
                'sample_id' => 2811,
                'user_id' => 7,
                'created_at' => '2025-02-13 18:05:51',
                'updated_at' => '2025-02-13 18:05:51',
            ),
            373 => 
            array (
                'id' => 1378,
                'code' => 'R9-02132025-CHE-0067',
                'information' => NULL,
                'sample_id' => 2812,
                'user_id' => 7,
                'created_at' => '2025-02-13 18:06:04',
                'updated_at' => '2025-02-13 18:06:04',
            ),
            374 => 
            array (
                'id' => 1379,
                'code' => 'R9-02132025-CHE-0068',
                'information' => NULL,
                'sample_id' => 2389,
                'user_id' => 8,
                'created_at' => '2025-02-13 18:10:30',
                'updated_at' => '2025-02-13 18:10:30',
            ),
            375 => 
            array (
                'id' => 1380,
                'code' => 'R9-02132025-CHE-0069',
                'information' => NULL,
                'sample_id' => 2883,
                'user_id' => 7,
                'created_at' => '2025-02-13 18:10:34',
                'updated_at' => '2025-02-13 18:10:34',
            ),
            376 => 
            array (
                'id' => 1381,
                'code' => 'R9-02132025-CHE-0070',
                'information' => NULL,
                'sample_id' => 2884,
                'user_id' => 7,
                'created_at' => '2025-02-13 18:10:51',
                'updated_at' => '2025-02-13 18:10:51',
            ),
            377 => 
            array (
                'id' => 1382,
                'code' => 'R9-02132025-CHE-0071',
                'information' => NULL,
                'sample_id' => 2885,
                'user_id' => 7,
                'created_at' => '2025-02-13 18:11:03',
                'updated_at' => '2025-02-13 18:11:03',
            ),
            378 => 
            array (
                'id' => 1383,
                'code' => 'R9-02132025-MET-0215',
                'information' => NULL,
                'sample_id' => 2876,
                'user_id' => 12,
                'created_at' => '2025-02-14 00:14:48',
                'updated_at' => '2025-02-14 00:14:48',
            ),
            379 => 
            array (
                'id' => 1384,
                'code' => 'R9-02142025-MIC-0084',
                'information' => NULL,
                'sample_id' => 2814,
                'user_id' => 16,
                'created_at' => '2025-02-14 15:57:42',
                'updated_at' => '2025-02-14 15:57:42',
            ),
            380 => 
            array (
                'id' => 1385,
                'code' => 'R9-02142025-MIC-0085',
                'information' => NULL,
                'sample_id' => 2815,
                'user_id' => 16,
                'created_at' => '2025-02-14 15:57:58',
                'updated_at' => '2025-02-14 15:57:58',
            ),
            381 => 
            array (
                'id' => 1386,
                'code' => 'R9-02142025-MIC-0086',
                'information' => NULL,
                'sample_id' => 2816,
                'user_id' => 16,
                'created_at' => '2025-02-14 15:58:04',
                'updated_at' => '2025-02-14 15:58:04',
            ),
            382 => 
            array (
                'id' => 1387,
                'code' => 'R9-02142025-MIC-0087',
                'information' => NULL,
                'sample_id' => 2817,
                'user_id' => 16,
                'created_at' => '2025-02-14 15:58:26',
                'updated_at' => '2025-02-14 15:58:26',
            ),
            383 => 
            array (
                'id' => 1388,
                'code' => 'R9-02142025-MET-0216',
                'information' => NULL,
                'sample_id' => 2804,
                'user_id' => 12,
                'created_at' => '2025-02-14 17:51:20',
                'updated_at' => '2025-02-14 17:51:20',
            ),
            384 => 
            array (
                'id' => 1389,
                'code' => 'R9-02142025-MET-0217',
                'information' => NULL,
                'sample_id' => 2777,
                'user_id' => 12,
                'created_at' => '2025-02-14 17:52:09',
                'updated_at' => '2025-02-14 17:52:09',
            ),
            385 => 
            array (
                'id' => 1390,
                'code' => 'R9-02142025-MET-0218',
                'information' => NULL,
                'sample_id' => 2778,
                'user_id' => 12,
                'created_at' => '2025-02-14 17:53:04',
                'updated_at' => '2025-02-14 17:53:04',
            ),
            386 => 
            array (
                'id' => 1391,
                'code' => 'R9-02142025-MET-0219',
                'information' => NULL,
                'sample_id' => 2779,
                'user_id' => 12,
                'created_at' => '2025-02-14 17:53:44',
                'updated_at' => '2025-02-14 17:53:44',
            ),
            387 => 
            array (
                'id' => 1392,
                'code' => 'R9-02142025-MET-0220',
                'information' => NULL,
                'sample_id' => 2780,
                'user_id' => 12,
                'created_at' => '2025-02-14 17:54:33',
                'updated_at' => '2025-02-14 17:54:33',
            ),
            388 => 
            array (
                'id' => 1393,
                'code' => 'R9-02142025-MET-0221',
                'information' => NULL,
                'sample_id' => 2781,
                'user_id' => 12,
                'created_at' => '2025-02-14 17:55:12',
                'updated_at' => '2025-02-14 17:55:12',
            ),
            389 => 
            array (
                'id' => 1394,
                'code' => 'R9-02142025-MET-0222',
                'information' => NULL,
                'sample_id' => 2782,
                'user_id' => 12,
                'created_at' => '2025-02-14 17:55:47',
                'updated_at' => '2025-02-14 17:55:47',
            ),
            390 => 
            array (
                'id' => 1395,
                'code' => 'R9-02142025-MET-0223',
                'information' => NULL,
                'sample_id' => 2783,
                'user_id' => 12,
                'created_at' => '2025-02-14 17:57:01',
                'updated_at' => '2025-02-14 17:57:01',
            ),
            391 => 
            array (
                'id' => 1396,
                'code' => 'R9-02142025-MET-0224',
                'information' => NULL,
                'sample_id' => 2784,
                'user_id' => 12,
                'created_at' => '2025-02-14 17:57:41',
                'updated_at' => '2025-02-14 17:57:41',
            ),
            392 => 
            array (
                'id' => 1397,
                'code' => 'R9-02142025-MET-0225',
                'information' => NULL,
                'sample_id' => 2785,
                'user_id' => 12,
                'created_at' => '2025-02-14 17:58:18',
                'updated_at' => '2025-02-14 17:58:18',
            ),
            393 => 
            array (
                'id' => 1398,
                'code' => 'R9-02142025-MET-0226',
                'information' => NULL,
                'sample_id' => 2786,
                'user_id' => 12,
                'created_at' => '2025-02-14 17:58:50',
                'updated_at' => '2025-02-14 17:58:50',
            ),
            394 => 
            array (
                'id' => 1399,
                'code' => 'R9-02142025-MET-0227',
                'information' => NULL,
                'sample_id' => 2787,
                'user_id' => 12,
                'created_at' => '2025-02-14 17:59:22',
                'updated_at' => '2025-02-14 17:59:22',
            ),
            395 => 
            array (
                'id' => 1400,
                'code' => 'R9-02142025-MET-0228',
                'information' => NULL,
                'sample_id' => 2788,
                'user_id' => 12,
                'created_at' => '2025-02-14 18:00:14',
                'updated_at' => '2025-02-14 18:00:14',
            ),
            396 => 
            array (
                'id' => 1401,
                'code' => 'R9-02142025-CHE-0072',
                'information' => NULL,
                'sample_id' => 2662,
                'user_id' => 8,
                'created_at' => '2025-02-14 18:30:15',
                'updated_at' => '2025-02-14 18:30:15',
            ),
            397 => 
            array (
                'id' => 1402,
                'code' => 'R9-02142025-CHE-0073',
                'information' => NULL,
                'sample_id' => 2663,
                'user_id' => 8,
                'created_at' => '2025-02-14 18:31:46',
                'updated_at' => '2025-02-14 18:31:46',
            ),
            398 => 
            array (
                'id' => 1403,
                'code' => 'R9-02142025-CHE-0074',
                'information' => NULL,
                'sample_id' => 2664,
                'user_id' => 8,
                'created_at' => '2025-02-14 18:31:52',
                'updated_at' => '2025-02-14 18:31:52',
            ),
            399 => 
            array (
                'id' => 1404,
                'code' => 'R9-02142025-CHE-0075',
                'information' => NULL,
                'sample_id' => 2665,
                'user_id' => 8,
                'created_at' => '2025-02-14 18:31:58',
                'updated_at' => '2025-02-14 18:31:58',
            ),
            400 => 
            array (
                'id' => 1405,
                'code' => 'R9-02142025-CHE-0076',
                'information' => NULL,
                'sample_id' => 2666,
                'user_id' => 8,
                'created_at' => '2025-02-14 18:32:04',
                'updated_at' => '2025-02-14 18:32:04',
            ),
            401 => 
            array (
                'id' => 1406,
                'code' => 'R9-02142025-CHE-0077',
                'information' => NULL,
                'sample_id' => 2750,
                'user_id' => 8,
                'created_at' => '2025-02-14 18:32:14',
                'updated_at' => '2025-02-14 18:32:14',
            ),
            402 => 
            array (
                'id' => 1407,
                'code' => 'R9-02142025-CHE-0078',
                'information' => NULL,
                'sample_id' => 2808,
                'user_id' => 7,
                'created_at' => '2025-02-14 21:01:51',
                'updated_at' => '2025-02-14 21:01:51',
            ),
            403 => 
            array (
                'id' => 1408,
                'code' => 'R9-02142025-CHE-0079',
                'information' => NULL,
                'sample_id' => 2919,
                'user_id' => 8,
                'created_at' => '2025-02-14 22:58:08',
                'updated_at' => '2025-02-14 22:58:08',
            ),
            404 => 
            array (
                'id' => 1409,
                'code' => 'R9-02142025-CHE-0080',
                'information' => NULL,
                'sample_id' => 2920,
                'user_id' => 8,
                'created_at' => '2025-02-14 22:58:26',
                'updated_at' => '2025-02-14 22:58:26',
            ),
            405 => 
            array (
                'id' => 1410,
                'code' => 'R9-02142025-CHE-0081',
                'information' => NULL,
                'sample_id' => 2921,
                'user_id' => 8,
                'created_at' => '2025-02-14 22:58:38',
                'updated_at' => '2025-02-14 22:58:38',
            ),
            406 => 
            array (
                'id' => 1411,
                'code' => 'R9-02142025-CHE-0082',
                'information' => NULL,
                'sample_id' => 2922,
                'user_id' => 8,
                'created_at' => '2025-02-14 22:58:48',
                'updated_at' => '2025-02-14 22:58:48',
            ),
            407 => 
            array (
                'id' => 1412,
                'code' => 'R9-02142025-CHE-0083',
                'information' => NULL,
                'sample_id' => 2752,
                'user_id' => 8,
                'created_at' => '2025-02-14 23:13:26',
                'updated_at' => '2025-02-14 23:13:26',
            ),
            408 => 
            array (
                'id' => 1413,
                'code' => 'R9-02142025-CHE-0084',
                'information' => NULL,
                'sample_id' => 2755,
                'user_id' => 8,
                'created_at' => '2025-02-14 23:13:57',
                'updated_at' => '2025-02-14 23:13:57',
            ),
            409 => 
            array (
                'id' => 1414,
                'code' => 'R9-02142025-CHE-0085',
                'information' => NULL,
                'sample_id' => 2756,
                'user_id' => 8,
                'created_at' => '2025-02-14 23:14:23',
                'updated_at' => '2025-02-14 23:14:23',
            ),
            410 => 
            array (
                'id' => 1415,
                'code' => 'R9-02142025-MET-0229',
                'information' => NULL,
                'sample_id' => 2705,
                'user_id' => 12,
                'created_at' => '2025-02-14 23:20:53',
                'updated_at' => '2025-02-14 23:20:53',
            ),
            411 => 
            array (
                'id' => 1416,
                'code' => 'R9-02142025-MET-0230',
                'information' => NULL,
                'sample_id' => 2379,
                'user_id' => 12,
                'created_at' => '2025-02-14 23:21:51',
                'updated_at' => '2025-02-14 23:21:51',
            ),
            412 => 
            array (
                'id' => 1417,
                'code' => 'R9-02142025-MET-0231',
                'information' => NULL,
                'sample_id' => 2380,
                'user_id' => 12,
                'created_at' => '2025-02-14 23:22:42',
                'updated_at' => '2025-02-14 23:22:42',
            ),
            413 => 
            array (
                'id' => 1418,
                'code' => 'R9-02142025-MET-0232',
                'information' => NULL,
                'sample_id' => 2657,
                'user_id' => 12,
                'created_at' => '2025-02-14 23:23:24',
                'updated_at' => '2025-02-14 23:23:24',
            ),
            414 => 
            array (
                'id' => 1419,
                'code' => 'R9-02142025-MET-0233',
                'information' => NULL,
                'sample_id' => 2658,
                'user_id' => 12,
                'created_at' => '2025-02-14 23:23:56',
                'updated_at' => '2025-02-14 23:23:56',
            ),
            415 => 
            array (
                'id' => 1420,
                'code' => 'R9-02142025-MET-0234',
                'information' => NULL,
                'sample_id' => 2659,
                'user_id' => 12,
                'created_at' => '2025-02-14 23:24:21',
                'updated_at' => '2025-02-14 23:24:21',
            ),
            416 => 
            array (
                'id' => 1421,
                'code' => 'R9-02172025-MET-0235',
                'information' => NULL,
                'sample_id' => 2639,
                'user_id' => 5,
                'created_at' => '2025-02-17 16:36:58',
                'updated_at' => '2025-02-17 16:36:58',
            ),
            417 => 
            array (
                'id' => 1422,
                'code' => 'R9-02172025-MIC-0088',
                'information' => NULL,
                'sample_id' => 2734,
                'user_id' => 16,
                'created_at' => '2025-02-17 18:59:18',
                'updated_at' => '2025-02-17 18:59:18',
            ),
            418 => 
            array (
                'id' => 1423,
                'code' => 'R9-02172025-MIC-0089',
                'information' => NULL,
                'sample_id' => 2735,
                'user_id' => 16,
                'created_at' => '2025-02-17 18:59:54',
                'updated_at' => '2025-02-17 18:59:54',
            ),
            419 => 
            array (
                'id' => 1424,
                'code' => 'R9-02172025-MIC-0090',
                'information' => NULL,
                'sample_id' => 2833,
                'user_id' => 16,
                'created_at' => '2025-02-17 19:00:23',
                'updated_at' => '2025-02-17 19:00:23',
            ),
            420 => 
            array (
                'id' => 1425,
                'code' => 'R9-02172025-MIC-0091',
                'information' => NULL,
                'sample_id' => 2911,
                'user_id' => 16,
                'created_at' => '2025-02-17 19:01:03',
                'updated_at' => '2025-02-17 19:01:03',
            ),
            421 => 
            array (
                'id' => 1426,
                'code' => 'R9-02172025-MIC-0092',
                'information' => NULL,
                'sample_id' => 2912,
                'user_id' => 16,
                'created_at' => '2025-02-17 19:01:25',
                'updated_at' => '2025-02-17 19:01:25',
            ),
            422 => 
            array (
                'id' => 1427,
                'code' => 'R9-02172025-MIC-0093',
                'information' => NULL,
                'sample_id' => 2913,
                'user_id' => 16,
                'created_at' => '2025-02-17 19:01:32',
                'updated_at' => '2025-02-17 19:01:32',
            ),
            423 => 
            array (
                'id' => 1428,
                'code' => 'R9-02172025-MIC-0094',
                'information' => NULL,
                'sample_id' => 2914,
                'user_id' => 16,
                'created_at' => '2025-02-17 19:01:40',
                'updated_at' => '2025-02-17 19:01:40',
            ),
            424 => 
            array (
                'id' => 1429,
                'code' => 'R9-02172025-MIC-0095',
                'information' => NULL,
                'sample_id' => 2915,
                'user_id' => 16,
                'created_at' => '2025-02-17 19:01:56',
                'updated_at' => '2025-02-17 19:01:56',
            ),
            425 => 
            array (
                'id' => 1430,
                'code' => 'R9-02172025-MET-0236',
                'information' => NULL,
                'sample_id' => 3063,
                'user_id' => 13,
                'created_at' => '2025-02-17 19:31:45',
                'updated_at' => '2025-02-17 19:31:45',
            ),
            426 => 
            array (
                'id' => 1431,
                'code' => 'R9-02142025-CHE-0086',
                'information' => NULL,
                'sample_id' => 2751,
                'user_id' => 7,
                'created_at' => '2025-02-17 22:01:23',
                'updated_at' => '2025-02-17 22:01:23',
            ),
            427 => 
            array (
                'id' => 1432,
                'code' => 'R9-02182025-CHE-0087',
                'information' => NULL,
                'sample_id' => 2650,
                'user_id' => 7,
                'created_at' => '2025-02-18 16:47:21',
                'updated_at' => '2025-02-18 16:47:21',
            ),
            428 => 
            array (
                'id' => 1433,
                'code' => 'R9-02182025-CHE-0088',
                'information' => NULL,
                'sample_id' => 2651,
                'user_id' => 7,
                'created_at' => '2025-02-18 16:47:29',
                'updated_at' => '2025-02-18 16:47:29',
            ),
            429 => 
            array (
                'id' => 1434,
                'code' => 'R9-02182025-CHE-0089',
                'information' => NULL,
                'sample_id' => 2652,
                'user_id' => 7,
                'created_at' => '2025-02-18 16:47:39',
                'updated_at' => '2025-02-18 16:47:39',
            ),
            430 => 
            array (
                'id' => 1435,
                'code' => 'R9-02182025-CHE-0090',
                'information' => NULL,
                'sample_id' => 2653,
                'user_id' => 7,
                'created_at' => '2025-02-18 16:47:45',
                'updated_at' => '2025-02-18 16:47:45',
            ),
            431 => 
            array (
                'id' => 1436,
                'code' => 'R9-02182025-CHE-0091',
                'information' => NULL,
                'sample_id' => 2654,
                'user_id' => 7,
                'created_at' => '2025-02-18 16:47:55',
                'updated_at' => '2025-02-18 16:47:55',
            ),
            432 => 
            array (
                'id' => 1437,
                'code' => 'R9-02182025-CHE-0092',
                'information' => NULL,
                'sample_id' => 2655,
                'user_id' => 7,
                'created_at' => '2025-02-18 16:48:01',
                'updated_at' => '2025-02-18 16:48:01',
            ),
            433 => 
            array (
                'id' => 1438,
                'code' => 'R9-02182025-CHE-0093',
                'information' => NULL,
                'sample_id' => 2656,
                'user_id' => 7,
                'created_at' => '2025-02-18 16:48:07',
                'updated_at' => '2025-02-18 16:48:07',
            ),
            434 => 
            array (
                'id' => 1439,
                'code' => 'R9-02182025-CHE-0094',
                'information' => NULL,
                'sample_id' => 2917,
                'user_id' => 8,
                'created_at' => '2025-02-18 21:02:39',
                'updated_at' => '2025-02-18 21:02:39',
            ),
            435 => 
            array (
                'id' => 1440,
                'code' => 'R9-02182025-CHE-0095',
                'information' => NULL,
                'sample_id' => 2923,
                'user_id' => 8,
                'created_at' => '2025-02-18 21:03:07',
                'updated_at' => '2025-02-18 21:03:07',
            ),
            436 => 
            array (
                'id' => 1441,
                'code' => 'R9-02182025-MIC-0096',
                'information' => NULL,
                'sample_id' => 2821,
                'user_id' => 16,
                'created_at' => '2025-02-18 21:16:58',
                'updated_at' => '2025-02-18 21:16:58',
            ),
            437 => 
            array (
                'id' => 1442,
                'code' => 'R9-02182025-MIC-0097',
                'information' => NULL,
                'sample_id' => 2878,
                'user_id' => 16,
                'created_at' => '2025-02-18 21:36:36',
                'updated_at' => '2025-02-18 21:36:36',
            ),
            438 => 
            array (
                'id' => 1443,
                'code' => 'R9-02182025-MIC-0098',
                'information' => NULL,
                'sample_id' => 2879,
                'user_id' => 16,
                'created_at' => '2025-02-18 21:37:05',
                'updated_at' => '2025-02-18 21:37:05',
            ),
            439 => 
            array (
                'id' => 1444,
                'code' => 'R9-02182025-MIC-0099',
                'information' => NULL,
                'sample_id' => 2880,
                'user_id' => 16,
                'created_at' => '2025-02-18 21:48:28',
                'updated_at' => '2025-02-18 21:48:28',
            ),
            440 => 
            array (
                'id' => 1445,
                'code' => 'R9-02182025-MIC-0100',
                'information' => NULL,
                'sample_id' => 2881,
                'user_id' => 16,
                'created_at' => '2025-02-18 21:52:26',
                'updated_at' => '2025-02-18 21:52:26',
            ),
            441 => 
            array (
                'id' => 1446,
                'code' => 'R9-02182025-MIC-0101',
                'information' => NULL,
                'sample_id' => 2882,
                'user_id' => 16,
                'created_at' => '2025-02-18 21:52:40',
                'updated_at' => '2025-02-18 21:52:40',
            ),
            442 => 
            array (
                'id' => 1447,
                'code' => 'R9-02182025-MIC-0102',
                'information' => NULL,
                'sample_id' => 2888,
                'user_id' => 16,
                'created_at' => '2025-02-18 21:53:18',
                'updated_at' => '2025-02-18 21:53:18',
            ),
            443 => 
            array (
                'id' => 1448,
                'code' => 'R9-02182025-CHE-0096',
                'information' => NULL,
                'sample_id' => 2673,
                'user_id' => 8,
                'created_at' => '2025-02-18 21:58:05',
                'updated_at' => '2025-02-18 21:58:05',
            ),
            444 => 
            array (
                'id' => 1449,
                'code' => 'R9-02182025-CHE-0097',
                'information' => NULL,
                'sample_id' => 2674,
                'user_id' => 8,
                'created_at' => '2025-02-18 21:58:21',
                'updated_at' => '2025-02-18 21:58:21',
            ),
            445 => 
            array (
                'id' => 1450,
                'code' => 'R9-02182025-CHE-0098',
                'information' => NULL,
                'sample_id' => 2675,
                'user_id' => 8,
                'created_at' => '2025-02-18 21:58:30',
                'updated_at' => '2025-02-18 21:58:30',
            ),
            446 => 
            array (
                'id' => 1451,
                'code' => 'R9-02182025-CHE-0099',
                'information' => NULL,
                'sample_id' => 2676,
                'user_id' => 8,
                'created_at' => '2025-02-18 21:58:38',
                'updated_at' => '2025-02-18 21:58:38',
            ),
            447 => 
            array (
                'id' => 1452,
                'code' => 'R9-02182025-CHE-0100',
                'information' => NULL,
                'sample_id' => 2677,
                'user_id' => 8,
                'created_at' => '2025-02-18 21:58:52',
                'updated_at' => '2025-02-18 21:58:52',
            ),
            448 => 
            array (
                'id' => 1453,
                'code' => 'R9-02182025-MIC-0103',
                'information' => NULL,
                'sample_id' => 2910,
                'user_id' => 16,
                'created_at' => '2025-02-18 21:59:13',
                'updated_at' => '2025-02-18 21:59:13',
            ),
            449 => 
            array (
                'id' => 1454,
                'code' => 'R9-02182025-MIC-0104',
                'information' => NULL,
                'sample_id' => 2916,
                'user_id' => 16,
                'created_at' => '2025-02-18 21:59:44',
                'updated_at' => '2025-02-18 21:59:44',
            ),
            450 => 
            array (
                'id' => 1455,
                'code' => 'R9-02182025-MIC-0105',
                'information' => NULL,
                'sample_id' => 2918,
                'user_id' => 16,
                'created_at' => '2025-02-18 22:00:36',
                'updated_at' => '2025-02-18 22:00:36',
            ),
            451 => 
            array (
                'id' => 1456,
                'code' => 'R9-02182025-CHE-0101',
                'information' => NULL,
                'sample_id' => 2714,
                'user_id' => 8,
                'created_at' => '2025-02-18 22:51:51',
                'updated_at' => '2025-02-18 22:51:51',
            ),
            452 => 
            array (
                'id' => 1457,
                'code' => 'R9-02182025-MET-0237',
                'information' => NULL,
                'sample_id' => 2699,
                'user_id' => 5,
                'created_at' => '2025-02-19 00:05:39',
                'updated_at' => '2025-02-19 00:05:39',
            ),
            453 => 
            array (
                'id' => 1458,
                'code' => 'R9-02182025-MET-0238',
                'information' => NULL,
                'sample_id' => 2700,
                'user_id' => 5,
                'created_at' => '2025-02-19 00:06:06',
                'updated_at' => '2025-02-19 00:06:06',
            ),
            454 => 
            array (
                'id' => 1459,
                'code' => 'R9-02182025-MET-0239',
                'information' => NULL,
                'sample_id' => 2701,
                'user_id' => 5,
                'created_at' => '2025-02-19 00:06:36',
                'updated_at' => '2025-02-19 00:06:36',
            ),
            455 => 
            array (
                'id' => 1460,
                'code' => 'R9-02192025-CHE-0102',
                'information' => NULL,
                'sample_id' => 2626,
                'user_id' => 8,
                'created_at' => '2025-02-19 15:42:27',
                'updated_at' => '2025-02-19 15:42:27',
            ),
            456 => 
            array (
                'id' => 1461,
                'code' => 'R9-02192025-CHE-0103',
                'information' => NULL,
                'sample_id' => 2731,
                'user_id' => 8,
                'created_at' => '2025-02-19 15:43:37',
                'updated_at' => '2025-02-19 15:43:37',
            ),
            457 => 
            array (
                'id' => 1462,
                'code' => 'R9-02192025-CHE-0104',
                'information' => NULL,
                'sample_id' => 2822,
                'user_id' => 8,
                'created_at' => '2025-02-19 15:44:24',
                'updated_at' => '2025-02-19 15:44:24',
            ),
            458 => 
            array (
                'id' => 1463,
                'code' => 'R9-02192025-CHE-0105',
                'information' => NULL,
                'sample_id' => 2818,
                'user_id' => 7,
                'created_at' => '2025-02-19 16:38:37',
                'updated_at' => '2025-02-19 16:38:37',
            ),
            459 => 
            array (
                'id' => 1464,
                'code' => 'R9-02192025-CHE-0106',
                'information' => NULL,
                'sample_id' => 2819,
                'user_id' => 7,
                'created_at' => '2025-02-19 16:39:46',
                'updated_at' => '2025-02-19 16:39:46',
            ),
            460 => 
            array (
                'id' => 1465,
                'code' => 'R9-02192025-CHE-0107',
                'information' => NULL,
                'sample_id' => 2890,
                'user_id' => 7,
                'created_at' => '2025-02-19 17:52:03',
                'updated_at' => '2025-02-19 17:52:03',
            ),
            461 => 
            array (
                'id' => 1466,
                'code' => 'R9-02192025-CHE-0108',
                'information' => NULL,
                'sample_id' => 2891,
                'user_id' => 7,
                'created_at' => '2025-02-19 17:52:45',
                'updated_at' => '2025-02-19 17:52:45',
            ),
            462 => 
            array (
                'id' => 1467,
                'code' => 'R9-02192025-CHE-0109',
                'information' => NULL,
                'sample_id' => 2892,
                'user_id' => 7,
                'created_at' => '2025-02-19 17:52:59',
                'updated_at' => '2025-02-19 17:52:59',
            ),
            463 => 
            array (
                'id' => 1468,
                'code' => 'R9-02192025-CHE-0110',
                'information' => NULL,
                'sample_id' => 2893,
                'user_id' => 7,
                'created_at' => '2025-02-19 17:53:31',
                'updated_at' => '2025-02-19 17:53:31',
            ),
            464 => 
            array (
                'id' => 1469,
                'code' => 'R9-02192025-CHE-0111',
                'information' => NULL,
                'sample_id' => 2894,
                'user_id' => 7,
                'created_at' => '2025-02-19 17:54:41',
                'updated_at' => '2025-02-19 17:54:41',
            ),
            465 => 
            array (
                'id' => 1470,
                'code' => 'R9-02192025-CHE-0112',
                'information' => NULL,
                'sample_id' => 2895,
                'user_id' => 7,
                'created_at' => '2025-02-19 17:55:10',
                'updated_at' => '2025-02-19 17:55:10',
            ),
            466 => 
            array (
                'id' => 1471,
                'code' => 'R9-02192025-CHE-0113',
                'information' => NULL,
                'sample_id' => 2896,
                'user_id' => 7,
                'created_at' => '2025-02-19 17:55:29',
                'updated_at' => '2025-02-19 17:55:29',
            ),
            467 => 
            array (
                'id' => 1472,
                'code' => 'R9-02192025-CHE-0114',
                'information' => NULL,
                'sample_id' => 2897,
                'user_id' => 7,
                'created_at' => '2025-02-19 17:55:55',
                'updated_at' => '2025-02-19 17:55:55',
            ),
            468 => 
            array (
                'id' => 1473,
                'code' => 'R9-02192025-CHE-0115',
                'information' => NULL,
                'sample_id' => 2898,
                'user_id' => 7,
                'created_at' => '2025-02-19 17:56:10',
                'updated_at' => '2025-02-19 17:56:10',
            ),
            469 => 
            array (
                'id' => 1474,
                'code' => 'R9-02192025-CHE-0116',
                'information' => NULL,
                'sample_id' => 3078,
                'user_id' => 8,
                'created_at' => '2025-02-19 18:42:24',
                'updated_at' => '2025-02-19 18:42:24',
            ),
            470 => 
            array (
                'id' => 1475,
                'code' => 'R9-02192025-CHE-0117',
                'information' => NULL,
                'sample_id' => 3079,
                'user_id' => 8,
                'created_at' => '2025-02-19 18:43:04',
                'updated_at' => '2025-02-19 18:43:04',
            ),
            471 => 
            array (
                'id' => 1476,
                'code' => 'R9-02192025-CHE-0118',
                'information' => NULL,
                'sample_id' => 3080,
                'user_id' => 8,
                'created_at' => '2025-02-19 18:43:17',
                'updated_at' => '2025-02-19 18:43:17',
            ),
            472 => 
            array (
                'id' => 1477,
                'code' => 'R9-02192025-CHE-0119',
                'information' => NULL,
                'sample_id' => 3081,
                'user_id' => 8,
                'created_at' => '2025-02-19 18:43:27',
                'updated_at' => '2025-02-19 18:43:27',
            ),
            473 => 
            array (
                'id' => 1478,
                'code' => 'R9-02192025-MET-0240',
                'information' => NULL,
                'sample_id' => 2702,
                'user_id' => 12,
                'created_at' => '2025-02-19 19:29:54',
                'updated_at' => '2025-02-19 19:29:54',
            ),
            474 => 
            array (
                'id' => 1479,
                'code' => 'R9-02192025-MET-0241',
                'information' => NULL,
                'sample_id' => 2703,
                'user_id' => 12,
                'created_at' => '2025-02-19 19:30:23',
                'updated_at' => '2025-02-19 19:30:23',
            ),
            475 => 
            array (
                'id' => 1480,
                'code' => 'R9-02192025-MET-0242',
                'information' => NULL,
                'sample_id' => 2704,
                'user_id' => 12,
                'created_at' => '2025-02-19 19:30:44',
                'updated_at' => '2025-02-19 19:30:44',
            ),
            476 => 
            array (
                'id' => 1481,
                'code' => 'R9-02192025-CHE-0120',
                'information' => NULL,
                'sample_id' => 2536,
                'user_id' => 8,
                'created_at' => '2025-02-19 19:41:07',
                'updated_at' => '2025-02-19 19:41:07',
            ),
            477 => 
            array (
                'id' => 1482,
                'code' => 'R9-02192025-CHE-0121',
                'information' => NULL,
                'sample_id' => 2537,
                'user_id' => 8,
                'created_at' => '2025-02-19 19:41:35',
                'updated_at' => '2025-02-19 19:41:35',
            ),
            478 => 
            array (
                'id' => 1483,
                'code' => 'R9-02192025-CHE-0122',
                'information' => NULL,
                'sample_id' => 2538,
                'user_id' => 8,
                'created_at' => '2025-02-19 19:41:40',
                'updated_at' => '2025-02-19 19:41:40',
            ),
            479 => 
            array (
                'id' => 1484,
                'code' => 'R9-02192025-CHE-0123',
                'information' => NULL,
                'sample_id' => 2539,
                'user_id' => 8,
                'created_at' => '2025-02-19 19:41:48',
                'updated_at' => '2025-02-19 19:41:48',
            ),
            480 => 
            array (
                'id' => 1485,
                'code' => 'R9-02192025-CHE-0124',
                'information' => NULL,
                'sample_id' => 2540,
                'user_id' => 8,
                'created_at' => '2025-02-19 19:41:54',
                'updated_at' => '2025-02-19 19:41:54',
            ),
            481 => 
            array (
                'id' => 1486,
                'code' => 'R9-02192025-CHE-0125',
                'information' => NULL,
                'sample_id' => 2541,
                'user_id' => 8,
                'created_at' => '2025-02-19 19:42:02',
                'updated_at' => '2025-02-19 19:42:02',
            ),
            482 => 
            array (
                'id' => 1487,
                'code' => 'R9-02192025-CHE-0126',
                'information' => NULL,
                'sample_id' => 2542,
                'user_id' => 8,
                'created_at' => '2025-02-19 19:42:12',
                'updated_at' => '2025-02-19 19:42:12',
            ),
            483 => 
            array (
                'id' => 1488,
                'code' => 'R9-02192025-CHE-0127',
                'information' => NULL,
                'sample_id' => 2543,
                'user_id' => 8,
                'created_at' => '2025-02-19 19:42:24',
                'updated_at' => '2025-02-19 19:42:24',
            ),
            484 => 
            array (
                'id' => 1489,
                'code' => 'R9-02192025-CHE-0128',
                'information' => NULL,
                'sample_id' => 2544,
                'user_id' => 8,
                'created_at' => '2025-02-19 19:42:35',
                'updated_at' => '2025-02-19 19:42:35',
            ),
            485 => 
            array (
                'id' => 1490,
                'code' => 'R9-02192025-CHE-0129',
                'information' => NULL,
                'sample_id' => 2545,
                'user_id' => 8,
                'created_at' => '2025-02-19 19:42:41',
                'updated_at' => '2025-02-19 19:42:41',
            ),
            486 => 
            array (
                'id' => 1491,
                'code' => 'R9-02192025-MIC-0106',
                'information' => NULL,
                'sample_id' => 2944,
                'user_id' => 16,
                'created_at' => '2025-02-19 21:13:59',
                'updated_at' => '2025-02-19 21:13:59',
            ),
            487 => 
            array (
                'id' => 1492,
                'code' => 'R9-02192025-CHE-0130',
                'information' => NULL,
                'sample_id' => 2945,
                'user_id' => 7,
                'created_at' => '2025-02-19 23:08:59',
                'updated_at' => '2025-02-19 23:08:59',
            ),
            488 => 
            array (
                'id' => 1493,
                'code' => 'R9-02192025-CHE-0131',
                'information' => NULL,
                'sample_id' => 2946,
                'user_id' => 7,
                'created_at' => '2025-02-19 23:09:16',
                'updated_at' => '2025-02-19 23:09:16',
            ),
            489 => 
            array (
                'id' => 1494,
                'code' => 'R9-02192025-CHE-0132',
                'information' => NULL,
                'sample_id' => 2947,
                'user_id' => 7,
                'created_at' => '2025-02-19 23:09:52',
                'updated_at' => '2025-02-19 23:09:52',
            ),
            490 => 
            array (
                'id' => 1495,
                'code' => 'R9-02192025-CHE-0133',
                'information' => NULL,
                'sample_id' => 2948,
                'user_id' => 7,
                'created_at' => '2025-02-19 23:10:12',
                'updated_at' => '2025-02-19 23:10:12',
            ),
            491 => 
            array (
                'id' => 1496,
                'code' => 'R9-02192025-CHE-0134',
                'information' => NULL,
                'sample_id' => 2949,
                'user_id' => 7,
                'created_at' => '2025-02-19 23:10:52',
                'updated_at' => '2025-02-19 23:10:52',
            ),
            492 => 
            array (
                'id' => 1497,
                'code' => 'R9-02192025-CHE-0135',
                'information' => NULL,
                'sample_id' => 2950,
                'user_id' => 7,
                'created_at' => '2025-02-19 23:11:09',
                'updated_at' => '2025-02-19 23:11:09',
            ),
            493 => 
            array (
                'id' => 1498,
                'code' => 'R9-02192025-CHE-0136',
                'information' => NULL,
                'sample_id' => 2951,
                'user_id' => 7,
                'created_at' => '2025-02-19 23:11:36',
                'updated_at' => '2025-02-19 23:11:36',
            ),
            494 => 
            array (
                'id' => 1499,
                'code' => 'R9-02192025-CHE-0137',
                'information' => NULL,
                'sample_id' => 2952,
                'user_id' => 7,
                'created_at' => '2025-02-19 23:11:44',
                'updated_at' => '2025-02-19 23:11:44',
            ),
            495 => 
            array (
                'id' => 1500,
                'code' => 'R9-02192025-CHE-0138',
                'information' => NULL,
                'sample_id' => 2953,
                'user_id' => 7,
                'created_at' => '2025-02-19 23:12:19',
                'updated_at' => '2025-02-19 23:12:19',
            ),
            496 => 
            array (
                'id' => 1501,
                'code' => 'R9-02192025-CHE-0139',
                'information' => NULL,
                'sample_id' => 2501,
                'user_id' => 7,
                'created_at' => '2025-02-19 23:25:49',
                'updated_at' => '2025-02-19 23:25:49',
            ),
            497 => 
            array (
                'id' => 1502,
                'code' => 'R9-02192025-CHE-0140',
                'information' => NULL,
                'sample_id' => 2502,
                'user_id' => 7,
                'created_at' => '2025-02-19 23:26:14',
                'updated_at' => '2025-02-19 23:26:14',
            ),
            498 => 
            array (
                'id' => 1503,
                'code' => 'R9-02192025-CHE-0141',
                'information' => NULL,
                'sample_id' => 2503,
                'user_id' => 7,
                'created_at' => '2025-02-19 23:26:59',
                'updated_at' => '2025-02-19 23:26:59',
            ),
            499 => 
            array (
                'id' => 1504,
                'code' => 'R9-02192025-CHE-0142',
                'information' => NULL,
                'sample_id' => 2504,
                'user_id' => 7,
                'created_at' => '2025-02-19 23:27:20',
                'updated_at' => '2025-02-19 23:27:20',
            ),
        ));
        \DB::table('tsr_sample_reports')->insert(array (
            0 => 
            array (
                'id' => 1505,
                'code' => 'R9-02192025-CHE-0143',
                'information' => NULL,
                'sample_id' => 2505,
                'user_id' => 7,
                'created_at' => '2025-02-19 23:27:36',
                'updated_at' => '2025-02-19 23:27:36',
            ),
            1 => 
            array (
                'id' => 1506,
                'code' => 'R9-02192025-CHE-0144',
                'information' => NULL,
                'sample_id' => 2506,
                'user_id' => 7,
                'created_at' => '2025-02-19 23:27:56',
                'updated_at' => '2025-02-19 23:27:56',
            ),
            2 => 
            array (
                'id' => 1507,
                'code' => 'R9-02192025-CHE-0145',
                'information' => NULL,
                'sample_id' => 2507,
                'user_id' => 7,
                'created_at' => '2025-02-19 23:28:13',
                'updated_at' => '2025-02-19 23:28:13',
            ),
            3 => 
            array (
                'id' => 1508,
                'code' => 'R9-02192025-CHE-0146',
                'information' => NULL,
                'sample_id' => 2508,
                'user_id' => 7,
                'created_at' => '2025-02-19 23:28:40',
                'updated_at' => '2025-02-19 23:28:40',
            ),
            4 => 
            array (
                'id' => 1509,
                'code' => 'R9-02192025-CHE-0147',
                'information' => NULL,
                'sample_id' => 2509,
                'user_id' => 7,
                'created_at' => '2025-02-19 23:29:24',
                'updated_at' => '2025-02-19 23:29:24',
            ),
            5 => 
            array (
                'id' => 1510,
                'code' => 'R9-02192025-CHE-0148',
                'information' => NULL,
                'sample_id' => 2510,
                'user_id' => 7,
                'created_at' => '2025-02-19 23:29:59',
                'updated_at' => '2025-02-19 23:29:59',
            ),
            6 => 
            array (
                'id' => 1511,
                'code' => 'R9-02192025-CHE-0149',
                'information' => NULL,
                'sample_id' => 3085,
                'user_id' => 8,
                'created_at' => '2025-02-20 00:48:29',
                'updated_at' => '2025-02-20 00:48:29',
            ),
            7 => 
            array (
                'id' => 1512,
                'code' => 'R9-02202025-MET-0243',
                'information' => NULL,
                'sample_id' => 3140,
                'user_id' => 13,
                'created_at' => '2025-02-20 18:45:44',
                'updated_at' => '2025-02-20 18:45:44',
            ),
            8 => 
            array (
                'id' => 1513,
                'code' => 'R9-02202025-MET-0244',
                'information' => NULL,
                'sample_id' => 2494,
                'user_id' => 12,
                'created_at' => '2025-02-21 00:29:56',
                'updated_at' => '2025-02-21 00:29:56',
            ),
            9 => 
            array (
                'id' => 1514,
                'code' => 'R9-02212025-MET-0245',
                'information' => NULL,
                'sample_id' => 3154,
                'user_id' => 12,
                'created_at' => '2025-02-21 19:06:13',
                'updated_at' => '2025-02-21 19:06:13',
            ),
            10 => 
            array (
                'id' => 1515,
                'code' => 'R9-02242025-MET-0246',
                'information' => NULL,
                'sample_id' => 2803,
                'user_id' => 12,
                'created_at' => '2025-02-24 18:25:22',
                'updated_at' => '2025-02-24 18:25:22',
            ),
            11 => 
            array (
                'id' => 1516,
                'code' => 'R9-02242025-MET-0247',
                'information' => NULL,
                'sample_id' => 2809,
                'user_id' => 12,
                'created_at' => '2025-02-24 18:26:21',
                'updated_at' => '2025-02-24 18:26:21',
            ),
            12 => 
            array (
                'id' => 1517,
                'code' => 'R9-02242025-MET-0248',
                'information' => NULL,
                'sample_id' => 2834,
                'user_id' => 12,
                'created_at' => '2025-02-24 18:27:04',
                'updated_at' => '2025-02-24 18:27:04',
            ),
            13 => 
            array (
                'id' => 1518,
                'code' => 'R9-02242025-MET-0249',
                'information' => NULL,
                'sample_id' => 2802,
                'user_id' => 12,
                'created_at' => '2025-02-24 18:27:58',
                'updated_at' => '2025-02-24 18:27:58',
            ),
            14 => 
            array (
                'id' => 1519,
                'code' => 'R9-02252025-CHE-0150',
                'information' => NULL,
                'sample_id' => 1668,
                'user_id' => 8,
                'created_at' => '2025-02-26 05:01:41',
                'updated_at' => '2025-02-26 05:01:41',
            ),
            15 => 
            array (
                'id' => 1520,
                'code' => 'R9-02252025-CHE-0151',
                'information' => NULL,
                'sample_id' => 1669,
                'user_id' => 8,
                'created_at' => '2025-02-26 05:01:48',
                'updated_at' => '2025-02-26 05:01:48',
            ),
            16 => 
            array (
                'id' => 1521,
                'code' => 'R9-02252025-CHE-0152',
                'information' => NULL,
                'sample_id' => 1670,
                'user_id' => 8,
                'created_at' => '2025-02-26 05:01:57',
                'updated_at' => '2025-02-26 05:01:57',
            ),
            17 => 
            array (
                'id' => 1522,
                'code' => 'R9-02252025-CHE-0153',
                'information' => NULL,
                'sample_id' => 1671,
                'user_id' => 8,
                'created_at' => '2025-02-26 05:02:06',
                'updated_at' => '2025-02-26 05:02:06',
            ),
            18 => 
            array (
                'id' => 1523,
                'code' => 'R9-02252025-CHE-0154',
                'information' => NULL,
                'sample_id' => 1672,
                'user_id' => 8,
                'created_at' => '2025-02-26 05:02:11',
                'updated_at' => '2025-02-26 05:02:11',
            ),
            19 => 
            array (
                'id' => 1524,
                'code' => 'R9-02252025-CHE-0155',
                'information' => NULL,
                'sample_id' => 1673,
                'user_id' => 8,
                'created_at' => '2025-02-26 05:02:21',
                'updated_at' => '2025-02-26 05:02:21',
            ),
            20 => 
            array (
                'id' => 1525,
                'code' => 'R9-02252025-CHE-0156',
                'information' => NULL,
                'sample_id' => 1674,
                'user_id' => 8,
                'created_at' => '2025-02-26 05:02:25',
                'updated_at' => '2025-02-26 05:02:25',
            ),
            21 => 
            array (
                'id' => 1526,
                'code' => 'R9-02252025-CHE-0157',
                'information' => NULL,
                'sample_id' => 1675,
                'user_id' => 8,
                'created_at' => '2025-02-26 05:02:30',
                'updated_at' => '2025-02-26 05:02:30',
            ),
            22 => 
            array (
                'id' => 1527,
                'code' => 'R9-02252025-CHE-0158',
                'information' => NULL,
                'sample_id' => 1676,
                'user_id' => 8,
                'created_at' => '2025-02-26 05:02:34',
                'updated_at' => '2025-02-26 05:02:34',
            ),
            23 => 
            array (
                'id' => 1528,
                'code' => 'R9-02252025-CHE-0159',
                'information' => NULL,
                'sample_id' => 1677,
                'user_id' => 8,
                'created_at' => '2025-02-26 05:02:38',
                'updated_at' => '2025-02-26 05:02:38',
            ),
            24 => 
            array (
                'id' => 1529,
                'code' => 'R9-02272025-MET-0250',
                'information' => NULL,
                'sample_id' => 2899,
                'user_id' => 13,
                'created_at' => '2025-02-27 21:02:11',
                'updated_at' => '2025-02-27 21:02:11',
            ),
            25 => 
            array (
                'id' => 1530,
                'code' => 'R9-02272025-MET-0251',
                'information' => NULL,
                'sample_id' => 2900,
                'user_id' => 13,
                'created_at' => '2025-02-27 21:02:37',
                'updated_at' => '2025-02-27 21:02:37',
            ),
            26 => 
            array (
                'id' => 1531,
                'code' => 'R9-02272025-MET-0252',
                'information' => NULL,
                'sample_id' => 2901,
                'user_id' => 13,
                'created_at' => '2025-02-27 22:45:17',
                'updated_at' => '2025-02-27 22:45:17',
            ),
            27 => 
            array (
                'id' => 1532,
                'code' => 'R9-02272025-MET-0253',
                'information' => NULL,
                'sample_id' => 2902,
                'user_id' => 13,
                'created_at' => '2025-02-27 22:45:42',
                'updated_at' => '2025-02-27 22:45:42',
            ),
            28 => 
            array (
                'id' => 1533,
                'code' => 'R9-02272025-MET-0254',
                'information' => NULL,
                'sample_id' => 2903,
                'user_id' => 13,
                'created_at' => '2025-02-27 22:46:07',
                'updated_at' => '2025-02-27 22:46:07',
            ),
            29 => 
            array (
                'id' => 1534,
                'code' => '06052024-CHE-0677',
                'information' => NULL,
                'sample_id' => 205,
                'user_id' => 1,
                'created_at' => '2024-12-29 08:00:00',
                'updated_at' => '2024-12-29 08:00:00',
            ),
            30 => 
            array (
                'id' => 1535,
                'code' => '06282024-CHE-0778',
                'information' => NULL,
                'sample_id' => 207,
                'user_id' => 1,
                'created_at' => '2024-12-29 08:00:00',
                'updated_at' => '2024-12-29 08:00:00',
            ),
            31 => 
            array (
                'id' => 1536,
                'code' => '07172024-CHE-0817',
                'information' => NULL,
                'sample_id' => 208,
                'user_id' => 1,
                'created_at' => '2024-12-29 08:00:00',
                'updated_at' => '2024-12-29 08:00:00',
            ),
            32 => 
            array (
                'id' => 1537,
                'code' => '08122024-CHE-0879',
                'information' => NULL,
                'sample_id' => 1,
                'user_id' => 1,
                'created_at' => '2024-12-29 08:00:00',
                'updated_at' => '2024-12-29 08:00:00',
            ),
            33 => 
            array (
                'id' => 1538,
                'code' => '08122024-CHE-0880',
                'information' => NULL,
                'sample_id' => 2,
                'user_id' => 1,
                'created_at' => '2024-12-29 08:00:00',
                'updated_at' => '2024-12-29 08:00:00',
            ),
            34 => 
            array (
                'id' => 1539,
                'code' => '08122024-CHE-0881',
                'information' => NULL,
                'sample_id' => 3,
                'user_id' => 1,
                'created_at' => '2024-12-29 08:00:00',
                'updated_at' => '2024-12-29 08:00:00',
            ),
            35 => 
            array (
                'id' => 1540,
                'code' => '08122024-CHE-0882',
                'information' => NULL,
                'sample_id' => 4,
                'user_id' => 1,
                'created_at' => '2024-12-29 08:00:00',
                'updated_at' => '2024-12-29 08:00:00',
            ),
            36 => 
            array (
                'id' => 1541,
                'code' => '08122024-CHE-0883',
                'information' => NULL,
                'sample_id' => 20,
                'user_id' => 1,
                'created_at' => '2024-12-29 08:00:00',
                'updated_at' => '2024-12-29 08:00:00',
            ),
            37 => 
            array (
                'id' => 1542,
                'code' => '08072024-CHE-0872',
                'information' => NULL,
                'sample_id' => 23,
                'user_id' => 1,
                'created_at' => '2024-12-29 08:00:00',
                'updated_at' => '2024-12-29 08:00:00',
            ),
            38 => 
            array (
                'id' => 1543,
                'code' => '08202024-CHE-0890',
                'information' => NULL,
                'sample_id' => 25,
                'user_id' => 1,
                'created_at' => '2024-12-29 08:00:00',
                'updated_at' => '2024-12-29 08:00:00',
            ),
            39 => 
            array (
                'id' => 1544,
                'code' => '09022024-CHE-0922',
                'information' => NULL,
                'sample_id' => 26,
                'user_id' => 1,
                'created_at' => '2024-12-29 08:00:00',
                'updated_at' => '2024-12-29 08:00:00',
            ),
            40 => 
            array (
                'id' => 1545,
                'code' => '08202024-CHE-0891',
                'information' => NULL,
                'sample_id' => 28,
                'user_id' => 1,
                'created_at' => '2024-12-29 08:00:00',
                'updated_at' => '2024-12-29 08:00:00',
            ),
            41 => 
            array (
                'id' => 1546,
                'code' => '09022024-CHE-0923',
                'information' => NULL,
                'sample_id' => 29,
                'user_id' => 1,
                'created_at' => '2024-12-29 08:00:00',
                'updated_at' => '2024-12-29 08:00:00',
            ),
            42 => 
            array (
                'id' => 1547,
                'code' => '08202024-CHE-0892',
                'information' => NULL,
                'sample_id' => 31,
                'user_id' => 1,
                'created_at' => '2024-12-29 08:00:00',
                'updated_at' => '2024-12-29 08:00:00',
            ),
            43 => 
            array (
                'id' => 1548,
                'code' => '09022024-CHE-0924',
                'information' => NULL,
                'sample_id' => 32,
                'user_id' => 1,
                'created_at' => '2024-12-29 08:00:00',
                'updated_at' => '2024-12-29 08:00:00',
            ),
            44 => 
            array (
                'id' => 1549,
                'code' => '08202024-CHE-0893',
                'information' => NULL,
                'sample_id' => 34,
                'user_id' => 1,
                'created_at' => '2024-12-29 08:00:00',
                'updated_at' => '2024-12-29 08:00:00',
            ),
            45 => 
            array (
                'id' => 1550,
                'code' => '09022024-CHE-0925',
                'information' => NULL,
                'sample_id' => 35,
                'user_id' => 1,
                'created_at' => '2024-12-29 08:00:00',
                'updated_at' => '2024-12-29 08:00:00',
            ),
            46 => 
            array (
                'id' => 1551,
                'code' => '08202024-CHE-0894',
                'information' => NULL,
                'sample_id' => 37,
                'user_id' => 1,
                'created_at' => '2024-12-29 08:00:00',
                'updated_at' => '2024-12-29 08:00:00',
            ),
            47 => 
            array (
                'id' => 1552,
                'code' => '09022024-CHE-0926',
                'information' => NULL,
                'sample_id' => 38,
                'user_id' => 1,
                'created_at' => '2024-12-29 08:00:00',
                'updated_at' => '2024-12-29 08:00:00',
            ),
            48 => 
            array (
                'id' => 1553,
                'code' => '08192024-CHE-0896',
                'information' => NULL,
                'sample_id' => 42,
                'user_id' => 1,
                'created_at' => '2024-12-29 08:00:00',
                'updated_at' => '2024-12-29 08:00:00',
            ),
            49 => 
            array (
                'id' => 1554,
                'code' => '09052024-CHE-0931',
                'information' => NULL,
                'sample_id' => 43,
                'user_id' => 1,
                'created_at' => '2024-12-29 08:00:00',
                'updated_at' => '2024-12-29 08:00:00',
            ),
            50 => 
            array (
                'id' => 1555,
                'code' => '08192024-CHE-0897',
                'information' => NULL,
                'sample_id' => 49,
                'user_id' => 1,
                'created_at' => '2024-12-29 08:00:00',
                'updated_at' => '2024-12-29 08:00:00',
            ),
            51 => 
            array (
                'id' => 1556,
                'code' => '09052024-CHE-0932',
                'information' => NULL,
                'sample_id' => 50,
                'user_id' => 1,
                'created_at' => '2024-12-29 08:00:00',
                'updated_at' => '2024-12-29 08:00:00',
            ),
            52 => 
            array (
                'id' => 1557,
                'code' => '08192024-CHE-0898',
                'information' => NULL,
                'sample_id' => 52,
                'user_id' => 1,
                'created_at' => '2024-12-29 08:00:00',
                'updated_at' => '2024-12-29 08:00:00',
            ),
            53 => 
            array (
                'id' => 1558,
                'code' => '09052024-CHE-0933',
                'information' => NULL,
                'sample_id' => 53,
                'user_id' => 1,
                'created_at' => '2024-12-29 08:00:00',
                'updated_at' => '2024-12-29 08:00:00',
            ),
            54 => 
            array (
                'id' => 1559,
                'code' => '08072024-CHE-0867',
                'information' => NULL,
                'sample_id' => 55,
                'user_id' => 1,
                'created_at' => '2024-12-29 08:00:00',
                'updated_at' => '2024-12-29 08:00:00',
            ),
            55 => 
            array (
                'id' => 1560,
                'code' => '08072024-CHE-0868',
                'information' => NULL,
                'sample_id' => 56,
                'user_id' => 1,
                'created_at' => '2024-12-29 08:00:00',
                'updated_at' => '2024-12-29 08:00:00',
            ),
            56 => 
            array (
                'id' => 1561,
                'code' => '08072024-CHE-0869',
                'information' => NULL,
                'sample_id' => 57,
                'user_id' => 1,
                'created_at' => '2024-12-29 08:00:00',
                'updated_at' => '2024-12-29 08:00:00',
            ),
            57 => 
            array (
                'id' => 1562,
                'code' => '08072024-CHE-0870',
                'information' => NULL,
                'sample_id' => 58,
                'user_id' => 1,
                'created_at' => '2024-12-29 08:00:00',
                'updated_at' => '2024-12-29 08:00:00',
            ),
            58 => 
            array (
                'id' => 1563,
                'code' => '08072024-CHE-0871',
                'information' => NULL,
                'sample_id' => 59,
                'user_id' => 1,
                'created_at' => '2024-12-29 08:00:00',
                'updated_at' => '2024-12-29 08:00:00',
            ),
            59 => 
            array (
                'id' => 1564,
                'code' => '08202024-CHE-0900',
                'information' => NULL,
                'sample_id' => 62,
                'user_id' => 1,
                'created_at' => '2024-12-29 08:00:00',
                'updated_at' => '2024-12-29 08:00:00',
            ),
            60 => 
            array (
                'id' => 1565,
                'code' => '08202024-CHE-0901',
                'information' => NULL,
                'sample_id' => 63,
                'user_id' => 1,
                'created_at' => '2024-12-29 08:00:00',
                'updated_at' => '2024-12-29 08:00:00',
            ),
            61 => 
            array (
                'id' => 1566,
                'code' => '08202024-CHE-0902',
                'information' => NULL,
                'sample_id' => 64,
                'user_id' => 1,
                'created_at' => '2024-12-29 08:00:00',
                'updated_at' => '2024-12-29 08:00:00',
            ),
            62 => 
            array (
                'id' => 1567,
                'code' => '08202024-CHE-0903',
                'information' => NULL,
                'sample_id' => 65,
                'user_id' => 1,
                'created_at' => '2024-12-29 08:00:00',
                'updated_at' => '2024-12-29 08:00:00',
            ),
            63 => 
            array (
                'id' => 1568,
                'code' => '08202024-CHE-0904',
                'information' => NULL,
                'sample_id' => 66,
                'user_id' => 1,
                'created_at' => '2024-12-29 08:00:00',
                'updated_at' => '2024-12-29 08:00:00',
            ),
            64 => 
            array (
                'id' => 1569,
                'code' => '09092024-CHE-0934',
                'information' => NULL,
                'sample_id' => 77,
                'user_id' => 1,
                'created_at' => '2024-12-29 08:00:00',
                'updated_at' => '2024-12-29 08:00:00',
            ),
            65 => 
            array (
                'id' => 1570,
                'code' => '08122024-CHE-0884',
                'information' => NULL,
                'sample_id' => 78,
                'user_id' => 1,
                'created_at' => '2024-12-29 08:00:00',
                'updated_at' => '2024-12-29 08:00:00',
            ),
            66 => 
            array (
                'id' => 1571,
                'code' => '08122024-CHE-0885',
                'information' => NULL,
                'sample_id' => 79,
                'user_id' => 1,
                'created_at' => '2024-12-29 08:00:00',
                'updated_at' => '2024-12-29 08:00:00',
            ),
            67 => 
            array (
                'id' => 1572,
                'code' => '08122024-CHE-0886',
                'information' => NULL,
                'sample_id' => 80,
                'user_id' => 1,
                'created_at' => '2024-12-29 08:00:00',
                'updated_at' => '2024-12-29 08:00:00',
            ),
            68 => 
            array (
                'id' => 1573,
                'code' => '09032024-CHE-0927',
                'information' => NULL,
                'sample_id' => 89,
                'user_id' => 1,
                'created_at' => '2024-12-29 08:00:00',
                'updated_at' => '2024-12-29 08:00:00',
            ),
            69 => 
            array (
                'id' => 1574,
                'code' => '09102024-CHE-0935',
                'information' => NULL,
                'sample_id' => 111,
                'user_id' => 1,
                'created_at' => '2024-12-29 08:00:00',
                'updated_at' => '2024-12-29 08:00:00',
            ),
            70 => 
            array (
                'id' => 1575,
                'code' => '09102024-CHE-0936',
                'information' => NULL,
                'sample_id' => 112,
                'user_id' => 1,
                'created_at' => '2024-12-29 08:00:00',
                'updated_at' => '2024-12-29 08:00:00',
            ),
            71 => 
            array (
                'id' => 1576,
                'code' => '09102024-CHE-0937',
                'information' => NULL,
                'sample_id' => 113,
                'user_id' => 1,
                'created_at' => '2024-12-29 08:00:00',
                'updated_at' => '2024-12-29 08:00:00',
            ),
            72 => 
            array (
                'id' => 1577,
                'code' => '09102024-CHE-0938',
                'information' => NULL,
                'sample_id' => 114,
                'user_id' => 1,
                'created_at' => '2024-12-29 08:00:00',
                'updated_at' => '2024-12-29 08:00:00',
            ),
            73 => 
            array (
                'id' => 1578,
                'code' => '09102024-CHE-0939',
                'information' => NULL,
                'sample_id' => 120,
                'user_id' => 1,
                'created_at' => '2024-12-29 08:00:00',
                'updated_at' => '2024-12-29 08:00:00',
            ),
            74 => 
            array (
                'id' => 1579,
                'code' => '08142024-CHE-0887',
                'information' => NULL,
                'sample_id' => 137,
                'user_id' => 1,
                'created_at' => '2024-12-29 08:00:00',
                'updated_at' => '2024-12-29 08:00:00',
            ),
            75 => 
            array (
                'id' => 1580,
                'code' => '08142024-CHE-0888',
                'information' => NULL,
                'sample_id' => 138,
                'user_id' => 1,
                'created_at' => '2024-12-29 08:00:00',
                'updated_at' => '2024-12-29 08:00:00',
            ),
            76 => 
            array (
                'id' => 1581,
                'code' => '09122024-CHE-0943',
                'information' => NULL,
                'sample_id' => 152,
                'user_id' => 1,
                'created_at' => '2024-12-29 08:00:00',
                'updated_at' => '2024-12-29 08:00:00',
            ),
            77 => 
            array (
                'id' => 1582,
                'code' => '08202024-CHE-0899',
                'information' => NULL,
                'sample_id' => 153,
                'user_id' => 1,
                'created_at' => '2024-12-29 08:00:00',
                'updated_at' => '2024-12-29 08:00:00',
            ),
            78 => 
            array (
                'id' => 1583,
                'code' => '09162024-CHE-0953',
                'information' => NULL,
                'sample_id' => 158,
                'user_id' => 1,
                'created_at' => '2024-12-29 08:00:00',
                'updated_at' => '2024-12-29 08:00:00',
            ),
            79 => 
            array (
                'id' => 1584,
                'code' => '09032024-CHE-0928',
                'information' => NULL,
                'sample_id' => 161,
                'user_id' => 1,
                'created_at' => '2024-12-29 08:00:00',
                'updated_at' => '2024-12-29 08:00:00',
            ),
            80 => 
            array (
                'id' => 1585,
                'code' => '09032024-CHE-0929',
                'information' => NULL,
                'sample_id' => 162,
                'user_id' => 1,
                'created_at' => '2024-12-29 08:00:00',
                'updated_at' => '2024-12-29 08:00:00',
            ),
            81 => 
            array (
                'id' => 1586,
                'code' => '09032024-CHE-0930',
                'information' => NULL,
                'sample_id' => 163,
                'user_id' => 1,
                'created_at' => '2024-12-29 08:00:00',
                'updated_at' => '2024-12-29 08:00:00',
            ),
            82 => 
            array (
                'id' => 1587,
                'code' => '08272024-CHE-0906',
                'information' => NULL,
                'sample_id' => 213,
                'user_id' => 1,
                'created_at' => '2024-12-29 08:00:00',
                'updated_at' => '2024-12-29 08:00:00',
            ),
            83 => 
            array (
                'id' => 1588,
                'code' => '08272024-CHE-0907',
                'information' => NULL,
                'sample_id' => 214,
                'user_id' => 1,
                'created_at' => '2024-12-29 08:00:00',
                'updated_at' => '2024-12-29 08:00:00',
            ),
            84 => 
            array (
                'id' => 1589,
                'code' => '09122024-CHE-0951',
                'information' => NULL,
                'sample_id' => 221,
                'user_id' => 1,
                'created_at' => '2024-12-29 08:00:00',
                'updated_at' => '2024-12-29 08:00:00',
            ),
            85 => 
            array (
                'id' => 1590,
                'code' => '09122024-CHE-0952',
                'information' => NULL,
                'sample_id' => 222,
                'user_id' => 1,
                'created_at' => '2024-12-29 08:00:00',
                'updated_at' => '2024-12-29 08:00:00',
            ),
            86 => 
            array (
                'id' => 1591,
                'code' => '09122024-CHE-0946',
                'information' => NULL,
                'sample_id' => 223,
                'user_id' => 1,
                'created_at' => '2024-12-29 08:00:00',
                'updated_at' => '2024-12-29 08:00:00',
            ),
            87 => 
            array (
                'id' => 1592,
                'code' => '09122024-CHE-0944',
                'information' => NULL,
                'sample_id' => 226,
                'user_id' => 1,
                'created_at' => '2024-12-29 08:00:00',
                'updated_at' => '2024-12-29 08:00:00',
            ),
            88 => 
            array (
                'id' => 1593,
                'code' => '08302024-CHE-0917',
                'information' => NULL,
                'sample_id' => 270,
                'user_id' => 1,
                'created_at' => '2024-12-29 08:00:00',
                'updated_at' => '2024-12-29 08:00:00',
            ),
            89 => 
            array (
                'id' => 1594,
                'code' => '08302024-CHE-0918',
                'information' => NULL,
                'sample_id' => 271,
                'user_id' => 1,
                'created_at' => '2024-12-29 08:00:00',
                'updated_at' => '2024-12-29 08:00:00',
            ),
            90 => 
            array (
                'id' => 1595,
                'code' => '08302024-CHE-0919',
                'information' => NULL,
                'sample_id' => 272,
                'user_id' => 1,
                'created_at' => '2024-12-29 08:00:00',
                'updated_at' => '2024-12-29 08:00:00',
            ),
            91 => 
            array (
                'id' => 1596,
                'code' => '08302024-CHE-0920',
                'information' => NULL,
                'sample_id' => 273,
                'user_id' => 1,
                'created_at' => '2024-12-29 08:00:00',
                'updated_at' => '2024-12-29 08:00:00',
            ),
            92 => 
            array (
                'id' => 1597,
                'code' => '08302024-CHE-0921',
                'information' => NULL,
                'sample_id' => 274,
                'user_id' => 1,
                'created_at' => '2024-12-29 08:00:00',
                'updated_at' => '2024-12-29 08:00:00',
            ),
            93 => 
            array (
                'id' => 1598,
                'code' => '09122024-CHE-0947',
                'information' => NULL,
                'sample_id' => 250,
                'user_id' => 1,
                'created_at' => '2024-12-29 08:00:00',
                'updated_at' => '2024-12-29 08:00:00',
            ),
            94 => 
            array (
                'id' => 1599,
                'code' => '09122024-CHE-0948',
                'information' => NULL,
                'sample_id' => 251,
                'user_id' => 1,
                'created_at' => '2024-12-29 08:00:00',
                'updated_at' => '2024-12-29 08:00:00',
            ),
            95 => 
            array (
                'id' => 1600,
                'code' => '09122024-CHE-0949',
                'information' => NULL,
                'sample_id' => 252,
                'user_id' => 1,
                'created_at' => '2024-12-29 08:00:00',
                'updated_at' => '2024-12-29 08:00:00',
            ),
            96 => 
            array (
                'id' => 1601,
                'code' => '09122024-CHE-0945',
                'information' => NULL,
                'sample_id' => 257,
                'user_id' => 1,
                'created_at' => '2024-12-29 08:00:00',
                'updated_at' => '2024-12-29 08:00:00',
            ),
            97 => 
            array (
                'id' => 1602,
                'code' => '09272024-CHE-0993',
                'information' => NULL,
                'sample_id' => 260,
                'user_id' => 1,
                'created_at' => '2024-12-29 08:00:00',
                'updated_at' => '2024-12-29 08:00:00',
            ),
            98 => 
            array (
                'id' => 1603,
                'code' => '09122024-CHE-0950',
                'information' => NULL,
                'sample_id' => 325,
                'user_id' => 1,
                'created_at' => '2024-12-29 08:00:00',
                'updated_at' => '2024-12-29 08:00:00',
            ),
            99 => 
            array (
                'id' => 1604,
                'code' => '09102024-CHE-0940',
                'information' => NULL,
                'sample_id' => 327,
                'user_id' => 1,
                'created_at' => '2024-12-29 08:00:00',
                'updated_at' => '2024-12-29 08:00:00',
            ),
            100 => 
            array (
                'id' => 1605,
                'code' => '09102024-CHE-0942',
                'information' => NULL,
                'sample_id' => 340,
                'user_id' => 1,
                'created_at' => '2024-12-29 08:00:00',
                'updated_at' => '2024-12-29 08:00:00',
            ),
            101 => 
            array (
                'id' => 1606,
                'code' => '09102024-CHE-0941',
                'information' => NULL,
                'sample_id' => 395,
                'user_id' => 1,
                'created_at' => '2024-12-29 08:00:00',
                'updated_at' => '2024-12-29 08:00:00',
            ),
            102 => 
            array (
                'id' => 1661,
                'code' => '05292024-MIC-0602',
                'information' => NULL,
                'sample_id' => 204,
                'user_id' => 1,
                'created_at' => '2024-12-29 08:00:00',
                'updated_at' => '2024-12-29 08:00:00',
            ),
            103 => 
            array (
                'id' => 1662,
                'code' => '07032024-MIC-0811',
                'information' => NULL,
                'sample_id' => 206,
                'user_id' => 1,
                'created_at' => '2024-12-29 08:00:00',
                'updated_at' => '2024-12-29 08:00:00',
            ),
            104 => 
            array (
                'id' => 1663,
                'code' => '07222024-MIC-0905',
                'information' => NULL,
                'sample_id' => 209,
                'user_id' => 1,
                'created_at' => '2024-12-29 08:00:00',
                'updated_at' => '2024-12-29 08:00:00',
            ),
            105 => 
            array (
                'id' => 1664,
                'code' => '08202024-MIC-0970',
                'information' => NULL,
                'sample_id' => 24,
                'user_id' => 1,
                'created_at' => '2024-12-29 08:00:00',
                'updated_at' => '2024-12-29 08:00:00',
            ),
            106 => 
            array (
                'id' => 1665,
                'code' => '08202024-MIC-0971',
                'information' => NULL,
                'sample_id' => 27,
                'user_id' => 1,
                'created_at' => '2024-12-29 08:00:00',
                'updated_at' => '2024-12-29 08:00:00',
            ),
            107 => 
            array (
                'id' => 1666,
                'code' => '08202024-MIC-0972',
                'information' => NULL,
                'sample_id' => 30,
                'user_id' => 1,
                'created_at' => '2024-12-29 08:00:00',
                'updated_at' => '2024-12-29 08:00:00',
            ),
            108 => 
            array (
                'id' => 1667,
                'code' => '08202024-MIC-0973',
                'information' => NULL,
                'sample_id' => 33,
                'user_id' => 1,
                'created_at' => '2024-12-29 08:00:00',
                'updated_at' => '2024-12-29 08:00:00',
            ),
            109 => 
            array (
                'id' => 1668,
                'code' => '08202024-MIC-0974',
                'information' => NULL,
                'sample_id' => 36,
                'user_id' => 1,
                'created_at' => '2024-12-29 08:00:00',
                'updated_at' => '2024-12-29 08:00:00',
            ),
            110 => 
            array (
                'id' => 1669,
                'code' => '08122024-MIC-0948',
                'information' => NULL,
                'sample_id' => 39,
                'user_id' => 1,
                'created_at' => '2024-12-29 08:00:00',
                'updated_at' => '2024-12-29 08:00:00',
            ),
            111 => 
            array (
                'id' => 1670,
                'code' => '08202024-MIC-0975',
                'information' => NULL,
                'sample_id' => 40,
                'user_id' => 1,
                'created_at' => '2024-12-29 08:00:00',
                'updated_at' => '2024-12-29 08:00:00',
            ),
            112 => 
            array (
                'id' => 1671,
                'code' => '08202024-MIC-0976',
                'information' => NULL,
                'sample_id' => 48,
                'user_id' => 1,
                'created_at' => '2024-12-29 08:00:00',
                'updated_at' => '2024-12-29 08:00:00',
            ),
            113 => 
            array (
                'id' => 1672,
                'code' => '08202024-MIC-0977',
                'information' => NULL,
                'sample_id' => 51,
                'user_id' => 1,
                'created_at' => '2024-12-29 08:00:00',
                'updated_at' => '2024-12-29 08:00:00',
            ),
            114 => 
            array (
                'id' => 1673,
                'code' => '08132024-MIC-0949',
                'information' => NULL,
                'sample_id' => 54,
                'user_id' => 1,
                'created_at' => '2024-12-29 08:00:00',
                'updated_at' => '2024-12-29 08:00:00',
            ),
            115 => 
            array (
                'id' => 1674,
                'code' => '08172024-MIC-0967',
                'information' => NULL,
                'sample_id' => 60,
                'user_id' => 1,
                'created_at' => '2024-12-29 08:00:00',
                'updated_at' => '2024-12-29 08:00:00',
            ),
            116 => 
            array (
                'id' => 1675,
                'code' => '08132024-MIC-0950',
                'information' => NULL,
                'sample_id' => 67,
                'user_id' => 1,
                'created_at' => '2024-12-29 08:00:00',
                'updated_at' => '2024-12-29 08:00:00',
            ),
            117 => 
            array (
                'id' => 1676,
                'code' => '08132024-MIC-0951',
                'information' => NULL,
                'sample_id' => 68,
                'user_id' => 1,
                'created_at' => '2024-12-29 08:00:00',
                'updated_at' => '2024-12-29 08:00:00',
            ),
            118 => 
            array (
                'id' => 1677,
                'code' => '08132024-MIC-0952',
                'information' => NULL,
                'sample_id' => 69,
                'user_id' => 1,
                'created_at' => '2024-12-29 08:00:00',
                'updated_at' => '2024-12-29 08:00:00',
            ),
            119 => 
            array (
                'id' => 1678,
                'code' => '08132024-MIC-0953',
                'information' => NULL,
                'sample_id' => 70,
                'user_id' => 1,
                'created_at' => '2024-12-29 08:00:00',
                'updated_at' => '2024-12-29 08:00:00',
            ),
            120 => 
            array (
                'id' => 1679,
                'code' => '08132024-MIC-0954',
                'information' => NULL,
                'sample_id' => 71,
                'user_id' => 1,
                'created_at' => '2024-12-29 08:00:00',
                'updated_at' => '2024-12-29 08:00:00',
            ),
            121 => 
            array (
                'id' => 1680,
                'code' => '08132024-MIC-0955',
                'information' => NULL,
                'sample_id' => 72,
                'user_id' => 1,
                'created_at' => '2024-12-29 08:00:00',
                'updated_at' => '2024-12-29 08:00:00',
            ),
            122 => 
            array (
                'id' => 1681,
                'code' => '08132024-MIC-0956',
                'information' => NULL,
                'sample_id' => 76,
                'user_id' => 1,
                'created_at' => '2024-12-29 08:00:00',
                'updated_at' => '2024-12-29 08:00:00',
            ),
            123 => 
            array (
                'id' => 1682,
                'code' => '09032024-MIC-1001',
                'information' => NULL,
                'sample_id' => 84,
                'user_id' => 1,
                'created_at' => '2024-12-29 08:00:00',
                'updated_at' => '2024-12-29 08:00:00',
            ),
            124 => 
            array (
                'id' => 1683,
                'code' => '09032024-MIC-1002',
                'information' => NULL,
                'sample_id' => 85,
                'user_id' => 1,
                'created_at' => '2024-12-29 08:00:00',
                'updated_at' => '2024-12-29 08:00:00',
            ),
            125 => 
            array (
                'id' => 1684,
                'code' => '09032024-MIC-1003',
                'information' => NULL,
                'sample_id' => 86,
                'user_id' => 1,
                'created_at' => '2024-12-29 08:00:00',
                'updated_at' => '2024-12-29 08:00:00',
            ),
            126 => 
            array (
                'id' => 1685,
                'code' => '08172024-MIC-0968',
                'information' => NULL,
                'sample_id' => 88,
                'user_id' => 1,
                'created_at' => '2024-12-29 08:00:00',
                'updated_at' => '2024-12-29 08:00:00',
            ),
            127 => 
            array (
                'id' => 1686,
                'code' => '08192024-MIC-0957',
                'information' => NULL,
                'sample_id' => 108,
                'user_id' => 1,
                'created_at' => '2024-12-29 08:00:00',
                'updated_at' => '2024-12-29 08:00:00',
            ),
            128 => 
            array (
                'id' => 1687,
                'code' => '08192024-MIC-0958',
                'information' => NULL,
                'sample_id' => 109,
                'user_id' => 1,
                'created_at' => '2024-12-29 08:00:00',
                'updated_at' => '2024-12-29 08:00:00',
            ),
            129 => 
            array (
                'id' => 1688,
                'code' => '08192024-MIC-0959',
                'information' => NULL,
                'sample_id' => 110,
                'user_id' => 1,
                'created_at' => '2024-12-29 08:00:00',
                'updated_at' => '2024-12-29 08:00:00',
            ),
            130 => 
            array (
                'id' => 1689,
                'code' => '08192024-MIC-0960',
                'information' => NULL,
                'sample_id' => 119,
                'user_id' => 1,
                'created_at' => '2024-12-29 08:00:00',
                'updated_at' => '2024-12-29 08:00:00',
            ),
            131 => 
            array (
                'id' => 1690,
                'code' => '08192024-MIC-0961',
                'information' => NULL,
                'sample_id' => 142,
                'user_id' => 1,
                'created_at' => '2024-12-29 08:00:00',
                'updated_at' => '2024-12-29 08:00:00',
            ),
            132 => 
            array (
                'id' => 1691,
                'code' => '08192024-MIC-0962',
                'information' => NULL,
                'sample_id' => 143,
                'user_id' => 1,
                'created_at' => '2024-12-29 08:00:00',
                'updated_at' => '2024-12-29 08:00:00',
            ),
            133 => 
            array (
                'id' => 1692,
                'code' => '08192024-MIC-0963',
                'information' => NULL,
                'sample_id' => 144,
                'user_id' => 1,
                'created_at' => '2024-12-29 08:00:00',
                'updated_at' => '2024-12-29 08:00:00',
            ),
            134 => 
            array (
                'id' => 1693,
                'code' => '08192024-MIC-0969',
                'information' => NULL,
                'sample_id' => 146,
                'user_id' => 1,
                'created_at' => '2024-12-29 08:00:00',
                'updated_at' => '2024-12-29 08:00:00',
            ),
            135 => 
            array (
                'id' => 1694,
                'code' => '08192024-MIC-0964',
                'information' => NULL,
                'sample_id' => 147,
                'user_id' => 1,
                'created_at' => '2024-12-29 08:00:00',
                'updated_at' => '2024-12-29 08:00:00',
            ),
            136 => 
            array (
                'id' => 1695,
                'code' => '08192024-MIC-0965',
                'information' => NULL,
                'sample_id' => 148,
                'user_id' => 1,
                'created_at' => '2024-12-29 08:00:00',
                'updated_at' => '2024-12-29 08:00:00',
            ),
            137 => 
            array (
                'id' => 1696,
                'code' => '08192024-MIC-0966',
                'information' => NULL,
                'sample_id' => 157,
                'user_id' => 1,
                'created_at' => '2024-12-29 08:00:00',
                'updated_at' => '2024-12-29 08:00:00',
            ),
            138 => 
            array (
                'id' => 1697,
                'code' => '08272024-MIC-0983',
                'information' => NULL,
                'sample_id' => 188,
                'user_id' => 1,
                'created_at' => '2024-12-29 08:00:00',
                'updated_at' => '2024-12-29 08:00:00',
            ),
            139 => 
            array (
                'id' => 1698,
                'code' => '08272024-MIC-0984',
                'information' => NULL,
                'sample_id' => 189,
                'user_id' => 1,
                'created_at' => '2024-12-29 08:00:00',
                'updated_at' => '2024-12-29 08:00:00',
            ),
            140 => 
            array (
                'id' => 1699,
                'code' => '08272024-MIC-0985',
                'information' => NULL,
                'sample_id' => 190,
                'user_id' => 1,
                'created_at' => '2024-12-29 08:00:00',
                'updated_at' => '2024-12-29 08:00:00',
            ),
            141 => 
            array (
                'id' => 1700,
                'code' => '08272024-MIC-0986',
                'information' => NULL,
                'sample_id' => 191,
                'user_id' => 1,
                'created_at' => '2024-12-29 08:00:00',
                'updated_at' => '2024-12-29 08:00:00',
            ),
            142 => 
            array (
                'id' => 1701,
                'code' => '08272024-MIC-0987',
                'information' => NULL,
                'sample_id' => 192,
                'user_id' => 1,
                'created_at' => '2024-12-29 08:00:00',
                'updated_at' => '2024-12-29 08:00:00',
            ),
            143 => 
            array (
                'id' => 1702,
                'code' => '08272024-MIC-0988',
                'information' => NULL,
                'sample_id' => 193,
                'user_id' => 1,
                'created_at' => '2024-12-29 08:00:00',
                'updated_at' => '2024-12-29 08:00:00',
            ),
            144 => 
            array (
                'id' => 1703,
                'code' => '08272024-MIC-0989',
                'information' => NULL,
                'sample_id' => 194,
                'user_id' => 1,
                'created_at' => '2024-12-29 08:00:00',
                'updated_at' => '2024-12-29 08:00:00',
            ),
            145 => 
            array (
                'id' => 1704,
                'code' => '08272024-MIC-0990',
                'information' => NULL,
                'sample_id' => 195,
                'user_id' => 1,
                'created_at' => '2024-12-29 08:00:00',
                'updated_at' => '2024-12-29 08:00:00',
            ),
            146 => 
            array (
                'id' => 1705,
                'code' => '08272024-MIC-0991',
                'information' => NULL,
                'sample_id' => 196,
                'user_id' => 1,
                'created_at' => '2024-12-29 08:00:00',
                'updated_at' => '2024-12-29 08:00:00',
            ),
            147 => 
            array (
                'id' => 1706,
                'code' => '08272024-MIC-0992',
                'information' => NULL,
                'sample_id' => 198,
                'user_id' => 1,
                'created_at' => '2024-12-29 08:00:00',
                'updated_at' => '2024-12-29 08:00:00',
            ),
            148 => 
            array (
                'id' => 1707,
                'code' => '08272024-MIC-0993',
                'information' => NULL,
                'sample_id' => 210,
                'user_id' => 1,
                'created_at' => '2024-12-29 08:00:00',
                'updated_at' => '2024-12-29 08:00:00',
            ),
            149 => 
            array (
                'id' => 1708,
                'code' => '08272024-MIC-0994',
                'information' => NULL,
                'sample_id' => 211,
                'user_id' => 1,
                'created_at' => '2024-12-29 08:00:00',
                'updated_at' => '2024-12-29 08:00:00',
            ),
            150 => 
            array (
                'id' => 1709,
                'code' => '08272024-MIC-0995',
                'information' => NULL,
                'sample_id' => 212,
                'user_id' => 1,
                'created_at' => '2024-12-29 08:00:00',
                'updated_at' => '2024-12-29 08:00:00',
            ),
            151 => 
            array (
                'id' => 1710,
                'code' => '08272024-MIC-0996',
                'information' => NULL,
                'sample_id' => 215,
                'user_id' => 1,
                'created_at' => '2024-12-29 08:00:00',
                'updated_at' => '2024-12-29 08:00:00',
            ),
            152 => 
            array (
                'id' => 1711,
                'code' => '08272024-MIC-0997',
                'information' => NULL,
                'sample_id' => 216,
                'user_id' => 1,
                'created_at' => '2024-12-29 08:00:00',
                'updated_at' => '2024-12-29 08:00:00',
            ),
            153 => 
            array (
                'id' => 1712,
                'code' => '08272024-MIC-0998',
                'information' => NULL,
                'sample_id' => 217,
                'user_id' => 1,
                'created_at' => '2024-12-29 08:00:00',
                'updated_at' => '2024-12-29 08:00:00',
            ),
            154 => 
            array (
                'id' => 1713,
                'code' => '08272024-MIC-0999',
                'information' => NULL,
                'sample_id' => 218,
                'user_id' => 1,
                'created_at' => '2024-12-29 08:00:00',
                'updated_at' => '2024-12-29 08:00:00',
            ),
            155 => 
            array (
                'id' => 1714,
                'code' => '08272024-MIC-1000',
                'information' => NULL,
                'sample_id' => 219,
                'user_id' => 1,
                'created_at' => '2024-12-29 08:00:00',
                'updated_at' => '2024-12-29 08:00:00',
            ),
            156 => 
            array (
                'id' => 1715,
                'code' => '09172024-MIC-1079',
                'information' => NULL,
                'sample_id' => 220,
                'user_id' => 1,
                'created_at' => '2024-12-29 08:00:00',
                'updated_at' => '2024-12-29 08:00:00',
            ),
            157 => 
            array (
                'id' => 1716,
                'code' => '09032024-MIC-1004',
                'information' => NULL,
                'sample_id' => 224,
                'user_id' => 1,
                'created_at' => '2024-12-29 08:00:00',
                'updated_at' => '2024-12-29 08:00:00',
            ),
            158 => 
            array (
                'id' => 1717,
                'code' => '09032024-MIC-1005',
                'information' => NULL,
                'sample_id' => 245,
                'user_id' => 1,
                'created_at' => '2024-12-29 08:00:00',
                'updated_at' => '2024-12-29 08:00:00',
            ),
            159 => 
            array (
                'id' => 1718,
                'code' => '09032024-MIC-1006',
                'information' => NULL,
                'sample_id' => 247,
                'user_id' => 1,
                'created_at' => '2024-12-29 08:00:00',
                'updated_at' => '2024-12-29 08:00:00',
            ),
            160 => 
            array (
                'id' => 1719,
                'code' => '09032024-MIC-1007',
                'information' => NULL,
                'sample_id' => 253,
                'user_id' => 1,
                'created_at' => '2024-12-29 08:00:00',
                'updated_at' => '2024-12-29 08:00:00',
            ),
            161 => 
            array (
                'id' => 1720,
                'code' => '09032024-MIC-1008',
                'information' => NULL,
                'sample_id' => 254,
                'user_id' => 1,
                'created_at' => '2024-12-29 08:00:00',
                'updated_at' => '2024-12-29 08:00:00',
            ),
            162 => 
            array (
                'id' => 1721,
                'code' => '09032024-MIC-1009',
                'information' => NULL,
                'sample_id' => 255,
                'user_id' => 1,
                'created_at' => '2024-12-29 08:00:00',
                'updated_at' => '2024-12-29 08:00:00',
            ),
            163 => 
            array (
                'id' => 1722,
                'code' => '09032024-MIC-1010',
                'information' => NULL,
                'sample_id' => 256,
                'user_id' => 1,
                'created_at' => '2024-12-29 08:00:00',
                'updated_at' => '2024-12-29 08:00:00',
            ),
            164 => 
            array (
                'id' => 1723,
                'code' => '09032024-MIC-1011',
                'information' => NULL,
                'sample_id' => 258,
                'user_id' => 1,
                'created_at' => '2024-12-29 08:00:00',
                'updated_at' => '2024-12-29 08:00:00',
            ),
            165 => 
            array (
                'id' => 1724,
                'code' => '09032024-MIC-1012',
                'information' => NULL,
                'sample_id' => 259,
                'user_id' => 1,
                'created_at' => '2024-12-29 08:00:00',
                'updated_at' => '2024-12-29 08:00:00',
            ),
            166 => 
            array (
                'id' => 1725,
                'code' => '09032024-MIC-1013',
                'information' => NULL,
                'sample_id' => 261,
                'user_id' => 1,
                'created_at' => '2024-12-29 08:00:00',
                'updated_at' => '2024-12-29 08:00:00',
            ),
            167 => 
            array (
                'id' => 1726,
                'code' => '09032024-MIC-1014',
                'information' => NULL,
                'sample_id' => 262,
                'user_id' => 1,
                'created_at' => '2024-12-29 08:00:00',
                'updated_at' => '2024-12-29 08:00:00',
            ),
            168 => 
            array (
                'id' => 1727,
                'code' => '09032024-MIC-1015',
                'information' => NULL,
                'sample_id' => 263,
                'user_id' => 1,
                'created_at' => '2024-12-29 08:00:00',
                'updated_at' => '2024-12-29 08:00:00',
            ),
            169 => 
            array (
                'id' => 1728,
                'code' => '09032024-MIC-1016',
                'information' => NULL,
                'sample_id' => 264,
                'user_id' => 1,
                'created_at' => '2024-12-29 08:00:00',
                'updated_at' => '2024-12-29 08:00:00',
            ),
            170 => 
            array (
                'id' => 1729,
                'code' => '09032024-MIC-1017',
                'information' => NULL,
                'sample_id' => 275,
                'user_id' => 1,
                'created_at' => '2024-12-29 08:00:00',
                'updated_at' => '2024-12-29 08:00:00',
            ),
            171 => 
            array (
                'id' => 1730,
                'code' => '09032024-MIC-1018',
                'information' => NULL,
                'sample_id' => 276,
                'user_id' => 1,
                'created_at' => '2024-12-29 08:00:00',
                'updated_at' => '2024-12-29 08:00:00',
            ),
            172 => 
            array (
                'id' => 1731,
                'code' => '09032024-MIC-1019',
                'information' => NULL,
                'sample_id' => 277,
                'user_id' => 1,
                'created_at' => '2024-12-29 08:00:00',
                'updated_at' => '2024-12-29 08:00:00',
            ),
            173 => 
            array (
                'id' => 1732,
                'code' => '09032024-MIC-1020',
                'information' => NULL,
                'sample_id' => 278,
                'user_id' => 1,
                'created_at' => '2024-12-29 08:00:00',
                'updated_at' => '2024-12-29 08:00:00',
            ),
            174 => 
            array (
                'id' => 1733,
                'code' => '09032024-MIC-1021',
                'information' => NULL,
                'sample_id' => 279,
                'user_id' => 1,
                'created_at' => '2024-12-29 08:00:00',
                'updated_at' => '2024-12-29 08:00:00',
            ),
            175 => 
            array (
                'id' => 1734,
                'code' => '09032024-MIC-1022',
                'information' => NULL,
                'sample_id' => 280,
                'user_id' => 1,
                'created_at' => '2024-12-29 08:00:00',
                'updated_at' => '2024-12-29 08:00:00',
            ),
            176 => 
            array (
                'id' => 1735,
                'code' => '09032024-MIC-1023',
                'information' => NULL,
                'sample_id' => 281,
                'user_id' => 1,
                'created_at' => '2024-12-29 08:00:00',
                'updated_at' => '2024-12-29 08:00:00',
            ),
            177 => 
            array (
                'id' => 1736,
                'code' => '09032024-MIC-1024',
                'information' => NULL,
                'sample_id' => 282,
                'user_id' => 1,
                'created_at' => '2024-12-29 08:00:00',
                'updated_at' => '2024-12-29 08:00:00',
            ),
            178 => 
            array (
                'id' => 1737,
                'code' => '09032024-MIC-1025',
                'information' => NULL,
                'sample_id' => 283,
                'user_id' => 1,
                'created_at' => '2024-12-29 08:00:00',
                'updated_at' => '2024-12-29 08:00:00',
            ),
            179 => 
            array (
                'id' => 1738,
                'code' => '09032024-MIC-1026',
                'information' => NULL,
                'sample_id' => 284,
                'user_id' => 1,
                'created_at' => '2024-12-29 08:00:00',
                'updated_at' => '2024-12-29 08:00:00',
            ),
            180 => 
            array (
                'id' => 1739,
                'code' => '09092024-MIC-1028',
                'information' => NULL,
                'sample_id' => 285,
                'user_id' => 1,
                'created_at' => '2024-12-29 08:00:00',
                'updated_at' => '2024-12-29 08:00:00',
            ),
            181 => 
            array (
                'id' => 1740,
                'code' => '09092024-MIC-1029',
                'information' => NULL,
                'sample_id' => 286,
                'user_id' => 1,
                'created_at' => '2024-12-29 08:00:00',
                'updated_at' => '2024-12-29 08:00:00',
            ),
            182 => 
            array (
                'id' => 1741,
                'code' => '09092024-MIC-1030',
                'information' => NULL,
                'sample_id' => 287,
                'user_id' => 1,
                'created_at' => '2024-12-29 08:00:00',
                'updated_at' => '2024-12-29 08:00:00',
            ),
            183 => 
            array (
                'id' => 1742,
                'code' => '09092024-MIC-1031',
                'information' => NULL,
                'sample_id' => 288,
                'user_id' => 1,
                'created_at' => '2024-12-29 08:00:00',
                'updated_at' => '2024-12-29 08:00:00',
            ),
            184 => 
            array (
                'id' => 1743,
                'code' => '09092024-MIC-1032',
                'information' => NULL,
                'sample_id' => 289,
                'user_id' => 1,
                'created_at' => '2024-12-29 08:00:00',
                'updated_at' => '2024-12-29 08:00:00',
            ),
            185 => 
            array (
                'id' => 1744,
                'code' => '09092024-MIC-1033',
                'information' => NULL,
                'sample_id' => 290,
                'user_id' => 1,
                'created_at' => '2024-12-29 08:00:00',
                'updated_at' => '2024-12-29 08:00:00',
            ),
            186 => 
            array (
                'id' => 1745,
                'code' => '09092024-MIC-1034',
                'information' => NULL,
                'sample_id' => 291,
                'user_id' => 1,
                'created_at' => '2024-12-29 08:00:00',
                'updated_at' => '2024-12-29 08:00:00',
            ),
            187 => 
            array (
                'id' => 1746,
                'code' => '09092024-MIC-1035',
                'information' => NULL,
                'sample_id' => 292,
                'user_id' => 1,
                'created_at' => '2024-12-29 08:00:00',
                'updated_at' => '2024-12-29 08:00:00',
            ),
            188 => 
            array (
                'id' => 1747,
                'code' => '09092024-MIC-1036',
                'information' => NULL,
                'sample_id' => 293,
                'user_id' => 1,
                'created_at' => '2024-12-29 08:00:00',
                'updated_at' => '2024-12-29 08:00:00',
            ),
            189 => 
            array (
                'id' => 1748,
                'code' => '09092024-MIC-1037',
                'information' => NULL,
                'sample_id' => 294,
                'user_id' => 1,
                'created_at' => '2024-12-29 08:00:00',
                'updated_at' => '2024-12-29 08:00:00',
            ),
            190 => 
            array (
                'id' => 1749,
                'code' => '09092024-MIC-1038',
                'information' => NULL,
                'sample_id' => 295,
                'user_id' => 1,
                'created_at' => '2024-12-29 08:00:00',
                'updated_at' => '2024-12-29 08:00:00',
            ),
            191 => 
            array (
                'id' => 1750,
                'code' => '09092024-MIC-1039',
                'information' => NULL,
                'sample_id' => 296,
                'user_id' => 1,
                'created_at' => '2024-12-29 08:00:00',
                'updated_at' => '2024-12-29 08:00:00',
            ),
            192 => 
            array (
                'id' => 1751,
                'code' => '09092024-MIC-1040',
                'information' => NULL,
                'sample_id' => 297,
                'user_id' => 1,
                'created_at' => '2024-12-29 08:00:00',
                'updated_at' => '2024-12-29 08:00:00',
            ),
            193 => 
            array (
                'id' => 1752,
                'code' => '09092024-MIC-1041',
                'information' => NULL,
                'sample_id' => 298,
                'user_id' => 1,
                'created_at' => '2024-12-29 08:00:00',
                'updated_at' => '2024-12-29 08:00:00',
            ),
            194 => 
            array (
                'id' => 1753,
                'code' => '09092024-MIC-1042',
                'information' => NULL,
                'sample_id' => 299,
                'user_id' => 1,
                'created_at' => '2024-12-29 08:00:00',
                'updated_at' => '2024-12-29 08:00:00',
            ),
            195 => 
            array (
                'id' => 1754,
                'code' => '09092024-MIC-1043',
                'information' => NULL,
                'sample_id' => 300,
                'user_id' => 1,
                'created_at' => '2024-12-29 08:00:00',
                'updated_at' => '2024-12-29 08:00:00',
            ),
            196 => 
            array (
                'id' => 1755,
                'code' => '09092024-MIC-1044',
                'information' => NULL,
                'sample_id' => 301,
                'user_id' => 1,
                'created_at' => '2024-12-29 08:00:00',
                'updated_at' => '2024-12-29 08:00:00',
            ),
            197 => 
            array (
                'id' => 1756,
                'code' => '09092024-MIC-1045',
                'information' => NULL,
                'sample_id' => 302,
                'user_id' => 1,
                'created_at' => '2024-12-29 08:00:00',
                'updated_at' => '2024-12-29 08:00:00',
            ),
            198 => 
            array (
                'id' => 1757,
                'code' => '09092024-MIC-1046',
                'information' => NULL,
                'sample_id' => 303,
                'user_id' => 1,
                'created_at' => '2024-12-29 08:00:00',
                'updated_at' => '2024-12-29 08:00:00',
            ),
            199 => 
            array (
                'id' => 1758,
                'code' => '09092024-MIC-1047',
                'information' => NULL,
                'sample_id' => 304,
                'user_id' => 1,
                'created_at' => '2024-12-29 08:00:00',
                'updated_at' => '2024-12-29 08:00:00',
            ),
            200 => 
            array (
                'id' => 1759,
                'code' => '09092024-MIC-1048',
                'information' => NULL,
                'sample_id' => 305,
                'user_id' => 1,
                'created_at' => '2024-12-29 08:00:00',
                'updated_at' => '2024-12-29 08:00:00',
            ),
            201 => 
            array (
                'id' => 1760,
                'code' => '09092024-MIC-1049',
                'information' => NULL,
                'sample_id' => 306,
                'user_id' => 1,
                'created_at' => '2024-12-29 08:00:00',
                'updated_at' => '2024-12-29 08:00:00',
            ),
            202 => 
            array (
                'id' => 1761,
                'code' => '09092024-MIC-1050',
                'information' => NULL,
                'sample_id' => 307,
                'user_id' => 1,
                'created_at' => '2024-12-29 08:00:00',
                'updated_at' => '2024-12-29 08:00:00',
            ),
            203 => 
            array (
                'id' => 1762,
                'code' => '09092024-MIC-1051',
                'information' => NULL,
                'sample_id' => 308,
                'user_id' => 1,
                'created_at' => '2024-12-29 08:00:00',
                'updated_at' => '2024-12-29 08:00:00',
            ),
            204 => 
            array (
                'id' => 1763,
                'code' => '09092024-MIC-1052',
                'information' => NULL,
                'sample_id' => 309,
                'user_id' => 1,
                'created_at' => '2024-12-29 08:00:00',
                'updated_at' => '2024-12-29 08:00:00',
            ),
            205 => 
            array (
                'id' => 1764,
                'code' => '09092024-MIC-1053',
                'information' => NULL,
                'sample_id' => 310,
                'user_id' => 1,
                'created_at' => '2024-12-29 08:00:00',
                'updated_at' => '2024-12-29 08:00:00',
            ),
            206 => 
            array (
                'id' => 1765,
                'code' => '09092024-MIC-1055',
                'information' => NULL,
                'sample_id' => 311,
                'user_id' => 1,
                'created_at' => '2024-12-29 08:00:00',
                'updated_at' => '2024-12-29 08:00:00',
            ),
            207 => 
            array (
                'id' => 1766,
                'code' => '09092024-MIC-1056',
                'information' => NULL,
                'sample_id' => 312,
                'user_id' => 1,
                'created_at' => '2024-12-29 08:00:00',
                'updated_at' => '2024-12-29 08:00:00',
            ),
            208 => 
            array (
                'id' => 1767,
                'code' => '09092024-MIC-1057',
                'information' => NULL,
                'sample_id' => 313,
                'user_id' => 1,
                'created_at' => '2024-12-29 08:00:00',
                'updated_at' => '2024-12-29 08:00:00',
            ),
            209 => 
            array (
                'id' => 1768,
                'code' => '09092024-MIC-1058',
                'information' => NULL,
                'sample_id' => 314,
                'user_id' => 1,
                'created_at' => '2024-12-29 08:00:00',
                'updated_at' => '2024-12-29 08:00:00',
            ),
            210 => 
            array (
                'id' => 1769,
                'code' => '09092024-MIC-1054',
                'information' => NULL,
                'sample_id' => 321,
                'user_id' => 1,
                'created_at' => '2024-12-29 08:00:00',
                'updated_at' => '2024-12-29 08:00:00',
            ),
            211 => 
            array (
                'id' => 1770,
                'code' => '09102024-MIC-1059',
                'information' => NULL,
                'sample_id' => 339,
                'user_id' => 1,
                'created_at' => '2024-12-29 08:00:00',
                'updated_at' => '2024-12-29 08:00:00',
            ),
            212 => 
            array (
                'id' => 1771,
                'code' => '09102024-MIC-1060',
                'information' => NULL,
                'sample_id' => 341,
                'user_id' => 1,
                'created_at' => '2024-12-29 08:00:00',
                'updated_at' => '2024-12-29 08:00:00',
            ),
            213 => 
            array (
                'id' => 1772,
                'code' => '09172024-MIC-1077',
                'information' => NULL,
                'sample_id' => 347,
                'user_id' => 1,
                'created_at' => '2024-12-29 08:00:00',
                'updated_at' => '2024-12-29 08:00:00',
            ),
            214 => 
            array (
                'id' => 1773,
                'code' => '09172024-MIC-1063',
                'information' => NULL,
                'sample_id' => 352,
                'user_id' => 1,
                'created_at' => '2024-12-29 08:00:00',
                'updated_at' => '2024-12-29 08:00:00',
            ),
            215 => 
            array (
                'id' => 1774,
                'code' => '09172024-MIC-1064',
                'information' => NULL,
                'sample_id' => 353,
                'user_id' => 1,
                'created_at' => '2024-12-29 08:00:00',
                'updated_at' => '2024-12-29 08:00:00',
            ),
            216 => 
            array (
                'id' => 1775,
                'code' => '09172024-MIC-1065',
                'information' => NULL,
                'sample_id' => 354,
                'user_id' => 1,
                'created_at' => '2024-12-29 08:00:00',
                'updated_at' => '2024-12-29 08:00:00',
            ),
            217 => 
            array (
                'id' => 1776,
                'code' => '09172024-MIC-1066',
                'information' => NULL,
                'sample_id' => 355,
                'user_id' => 1,
                'created_at' => '2024-12-29 08:00:00',
                'updated_at' => '2024-12-29 08:00:00',
            ),
            218 => 
            array (
                'id' => 1777,
                'code' => '09172024-MIC-1067',
                'information' => NULL,
                'sample_id' => 360,
                'user_id' => 1,
                'created_at' => '2024-12-29 08:00:00',
                'updated_at' => '2024-12-29 08:00:00',
            ),
            219 => 
            array (
                'id' => 1778,
                'code' => '09172024-MIC-1068',
                'information' => NULL,
                'sample_id' => 361,
                'user_id' => 1,
                'created_at' => '2024-12-29 08:00:00',
                'updated_at' => '2024-12-29 08:00:00',
            ),
            220 => 
            array (
                'id' => 1779,
                'code' => '09172024-MIC-1069',
                'information' => NULL,
                'sample_id' => 362,
                'user_id' => 1,
                'created_at' => '2024-12-29 08:00:00',
                'updated_at' => '2024-12-29 08:00:00',
            ),
            221 => 
            array (
                'id' => 1780,
                'code' => '09112024-MIC-1062',
                'information' => NULL,
                'sample_id' => 382,
                'user_id' => 1,
                'created_at' => '2024-12-29 08:00:00',
                'updated_at' => '2024-12-29 08:00:00',
            ),
            222 => 
            array (
                'id' => 1781,
                'code' => '09172024-MIC-1070',
                'information' => NULL,
                'sample_id' => 385,
                'user_id' => 1,
                'created_at' => '2024-12-29 08:00:00',
                'updated_at' => '2024-12-29 08:00:00',
            ),
            223 => 
            array (
                'id' => 1782,
                'code' => '09172024-MIC-1071',
                'information' => NULL,
                'sample_id' => 386,
                'user_id' => 1,
                'created_at' => '2024-12-29 08:00:00',
                'updated_at' => '2024-12-29 08:00:00',
            ),
            224 => 
            array (
                'id' => 1783,
                'code' => '09172024-MIC-1072',
                'information' => NULL,
                'sample_id' => 389,
                'user_id' => 1,
                'created_at' => '2024-12-29 08:00:00',
                'updated_at' => '2024-12-29 08:00:00',
            ),
            225 => 
            array (
                'id' => 1784,
                'code' => '09172024-MIC-1073',
                'information' => NULL,
                'sample_id' => 390,
                'user_id' => 1,
                'created_at' => '2024-12-29 08:00:00',
                'updated_at' => '2024-12-29 08:00:00',
            ),
            226 => 
            array (
                'id' => 1785,
                'code' => '09172024-MIC-1074',
                'information' => NULL,
                'sample_id' => 391,
                'user_id' => 1,
                'created_at' => '2024-12-29 08:00:00',
                'updated_at' => '2024-12-29 08:00:00',
            ),
            227 => 
            array (
                'id' => 1786,
                'code' => '09172024-MIC-1075',
                'information' => NULL,
                'sample_id' => 392,
                'user_id' => 1,
                'created_at' => '2024-12-29 08:00:00',
                'updated_at' => '2024-12-29 08:00:00',
            ),
            228 => 
            array (
                'id' => 1787,
                'code' => '09172024-MIC-1076',
                'information' => NULL,
                'sample_id' => 393,
                'user_id' => 1,
                'created_at' => '2024-12-29 08:00:00',
                'updated_at' => '2024-12-29 08:00:00',
            ),
            229 => 
            array (
                'id' => 1788,
                'code' => 'R9-02282025-CHE-0160',
                'information' => NULL,
                'sample_id' => 2729,
                'user_id' => 7,
                'created_at' => '2025-02-28 18:04:33',
                'updated_at' => '2025-02-28 18:04:33',
            ),
            230 => 
            array (
                'id' => 1789,
                'code' => 'R9-02282025-CHE-0161',
                'information' => NULL,
                'sample_id' => 3139,
                'user_id' => 7,
                'created_at' => '2025-02-28 18:05:00',
                'updated_at' => '2025-02-28 18:05:00',
            ),
            231 => 
            array (
                'id' => 1790,
                'code' => 'R9-02282025-MET-0255',
                'information' => NULL,
                'sample_id' => 3158,
                'user_id' => 12,
                'created_at' => '2025-02-28 19:27:25',
                'updated_at' => '2025-02-28 19:27:25',
            ),
            232 => 
            array (
                'id' => 1791,
                'code' => 'R9-02282025-MET-0256',
                'information' => NULL,
                'sample_id' => 2691,
                'user_id' => 12,
                'created_at' => '2025-02-28 19:28:49',
                'updated_at' => '2025-02-28 19:28:49',
            ),
            233 => 
            array (
                'id' => 1792,
                'code' => 'R9-02282025-MET-0257',
                'information' => NULL,
                'sample_id' => 2697,
                'user_id' => 12,
                'created_at' => '2025-02-28 19:29:34',
                'updated_at' => '2025-02-28 19:29:34',
            ),
            234 => 
            array (
                'id' => 1793,
                'code' => 'R9-02282025-MET-0258',
                'information' => NULL,
                'sample_id' => 2640,
                'user_id' => 12,
                'created_at' => '2025-02-28 19:30:07',
                'updated_at' => '2025-02-28 19:30:07',
            ),
            235 => 
            array (
                'id' => 1794,
                'code' => 'R9-02282025-MET-0259',
                'information' => NULL,
                'sample_id' => 2641,
                'user_id' => 12,
                'created_at' => '2025-02-28 19:30:35',
                'updated_at' => '2025-02-28 19:30:35',
            ),
            236 => 
            array (
                'id' => 1795,
                'code' => 'R9-02282025-MET-0260',
                'information' => NULL,
                'sample_id' => 2642,
                'user_id' => 12,
                'created_at' => '2025-02-28 19:31:14',
                'updated_at' => '2025-02-28 19:31:14',
            ),
            237 => 
            array (
                'id' => 1796,
                'code' => 'R9-02282025-MET-0261',
                'information' => NULL,
                'sample_id' => 2643,
                'user_id' => 12,
                'created_at' => '2025-02-28 19:31:44',
                'updated_at' => '2025-02-28 19:31:44',
            ),
            238 => 
            array (
                'id' => 1797,
                'code' => 'R9-02282025-MET-0262',
                'information' => NULL,
                'sample_id' => 2644,
                'user_id' => 12,
                'created_at' => '2025-02-28 19:32:17',
                'updated_at' => '2025-02-28 19:32:17',
            ),
            239 => 
            array (
                'id' => 1798,
                'code' => 'R9-02282025-MET-0263',
                'information' => NULL,
                'sample_id' => 2645,
                'user_id' => 12,
                'created_at' => '2025-02-28 19:33:26',
                'updated_at' => '2025-02-28 19:33:26',
            ),
            240 => 
            array (
                'id' => 1799,
                'code' => 'R9-02282025-MET-0264',
                'information' => NULL,
                'sample_id' => 2646,
                'user_id' => 12,
                'created_at' => '2025-02-28 19:34:30',
                'updated_at' => '2025-02-28 19:34:30',
            ),
            241 => 
            array (
                'id' => 1800,
                'code' => 'R9-02282025-MET-0265',
                'information' => NULL,
                'sample_id' => 3182,
                'user_id' => 12,
                'created_at' => '2025-02-28 19:35:40',
                'updated_at' => '2025-02-28 19:35:40',
            ),
            242 => 
            array (
                'id' => 1801,
                'code' => 'R9-03032025-MIC-0107',
                'information' => NULL,
                'sample_id' => 3064,
                'user_id' => 16,
                'created_at' => '2025-03-03 17:38:26',
                'updated_at' => '2025-03-03 17:38:26',
            ),
            243 => 
            array (
                'id' => 1802,
                'code' => 'R9-03032025-MIC-0108',
                'information' => NULL,
                'sample_id' => 3065,
                'user_id' => 16,
                'created_at' => '2025-03-03 17:40:36',
                'updated_at' => '2025-03-03 17:40:36',
            ),
            244 => 
            array (
                'id' => 1803,
                'code' => 'R9-03032025-MIC-0109',
                'information' => NULL,
                'sample_id' => 3066,
                'user_id' => 16,
                'created_at' => '2025-03-03 17:41:56',
                'updated_at' => '2025-03-03 17:41:56',
            ),
            245 => 
            array (
                'id' => 1804,
                'code' => 'R9-03032025-MIC-0110',
                'information' => NULL,
                'sample_id' => 3067,
                'user_id' => 16,
                'created_at' => '2025-03-03 17:42:07',
                'updated_at' => '2025-03-03 17:42:07',
            ),
            246 => 
            array (
                'id' => 1805,
                'code' => 'R9-03032025-MIC-0111',
                'information' => NULL,
                'sample_id' => 3082,
                'user_id' => 16,
                'created_at' => '2025-03-03 17:42:56',
                'updated_at' => '2025-03-03 17:42:56',
            ),
            247 => 
            array (
                'id' => 1806,
                'code' => 'R9-03032025-MIC-0112',
                'information' => NULL,
                'sample_id' => 3091,
                'user_id' => 16,
                'created_at' => '2025-03-03 17:43:28',
                'updated_at' => '2025-03-03 17:43:28',
            ),
            248 => 
            array (
                'id' => 1807,
                'code' => 'R9-03032025-MIC-0113',
                'information' => NULL,
                'sample_id' => 3133,
                'user_id' => 16,
                'created_at' => '2025-03-03 17:43:58',
                'updated_at' => '2025-03-03 17:43:58',
            ),
            249 => 
            array (
                'id' => 1808,
                'code' => 'R9-03032025-CHE-0162',
                'information' => NULL,
                'sample_id' => 2727,
                'user_id' => 7,
                'created_at' => '2025-03-03 18:56:24',
                'updated_at' => '2025-03-03 18:56:24',
            ),
            250 => 
            array (
                'id' => 1809,
                'code' => 'R9-03032025-CHE-0163',
                'information' => NULL,
                'sample_id' => 2733,
                'user_id' => 7,
                'created_at' => '2025-03-03 20:36:27',
                'updated_at' => '2025-03-03 20:36:27',
            ),
            251 => 
            array (
                'id' => 1810,
                'code' => 'R9-03032025-CHE-0164',
                'information' => NULL,
                'sample_id' => 2877,
                'user_id' => 7,
                'created_at' => '2025-03-03 20:47:27',
                'updated_at' => '2025-03-03 20:47:27',
            ),
            252 => 
            array (
                'id' => 1811,
                'code' => 'R9-03032025-MET-0266',
                'information' => NULL,
                'sample_id' => 3223,
                'user_id' => 12,
                'created_at' => '2025-03-03 21:47:41',
                'updated_at' => '2025-03-03 21:47:41',
            ),
            253 => 
            array (
                'id' => 1812,
                'code' => 'R9-03032025-MIC-0114',
                'information' => NULL,
                'sample_id' => 3084,
                'user_id' => 16,
                'created_at' => '2025-03-03 23:27:07',
                'updated_at' => '2025-03-03 23:27:07',
            ),
            254 => 
            array (
                'id' => 1813,
                'code' => 'R9-03032025-MIC-0115',
                'information' => NULL,
                'sample_id' => 3090,
                'user_id' => 16,
                'created_at' => '2025-03-03 23:28:16',
                'updated_at' => '2025-03-03 23:28:16',
            ),
            255 => 
            array (
                'id' => 1814,
                'code' => 'R9-03032025-MIC-0116',
                'information' => NULL,
                'sample_id' => 3092,
                'user_id' => 16,
                'created_at' => '2025-03-04 05:29:27',
                'updated_at' => '2025-03-04 05:29:27',
            ),
            256 => 
            array (
                'id' => 1815,
                'code' => 'R9-03032025-MIC-0117',
                'information' => NULL,
                'sample_id' => 3093,
                'user_id' => 16,
                'created_at' => '2025-03-04 05:30:01',
                'updated_at' => '2025-03-04 05:30:01',
            ),
            257 => 
            array (
                'id' => 1816,
                'code' => 'R9-03032025-MIC-0118',
                'information' => NULL,
                'sample_id' => 3094,
                'user_id' => 16,
                'created_at' => '2025-03-04 05:30:18',
                'updated_at' => '2025-03-04 05:30:18',
            ),
            258 => 
            array (
                'id' => 1817,
                'code' => 'R9-03032025-MIC-0119',
                'information' => NULL,
                'sample_id' => 3095,
                'user_id' => 16,
                'created_at' => '2025-03-04 05:49:24',
                'updated_at' => '2025-03-04 05:49:24',
            ),
            259 => 
            array (
                'id' => 1818,
                'code' => 'R9-03032025-MIC-0120',
                'information' => NULL,
                'sample_id' => 3096,
                'user_id' => 16,
                'created_at' => '2025-03-04 05:49:52',
                'updated_at' => '2025-03-04 05:49:52',
            ),
            260 => 
            array (
                'id' => 1819,
                'code' => 'R9-03032025-MIC-0121',
                'information' => NULL,
                'sample_id' => 3097,
                'user_id' => 16,
                'created_at' => '2025-03-04 05:50:02',
                'updated_at' => '2025-03-04 05:50:02',
            ),
            261 => 
            array (
                'id' => 1820,
                'code' => 'R9-03032025-MIC-0122',
                'information' => NULL,
                'sample_id' => 3098,
                'user_id' => 16,
                'created_at' => '2025-03-04 06:00:14',
                'updated_at' => '2025-03-04 06:00:14',
            ),
            262 => 
            array (
                'id' => 1821,
                'code' => 'R9-03032025-MIC-0123',
                'information' => NULL,
                'sample_id' => 3099,
                'user_id' => 16,
                'created_at' => '2025-03-04 06:02:51',
                'updated_at' => '2025-03-04 06:02:51',
            ),
            263 => 
            array (
                'id' => 1822,
                'code' => 'R9-03032025-MIC-0124',
                'information' => NULL,
                'sample_id' => 3100,
                'user_id' => 16,
                'created_at' => '2025-03-04 06:10:30',
                'updated_at' => '2025-03-04 06:10:30',
            ),
            264 => 
            array (
                'id' => 1823,
                'code' => 'R9-03032025-MIC-0125',
                'information' => NULL,
                'sample_id' => 3101,
                'user_id' => 16,
                'created_at' => '2025-03-04 06:11:00',
                'updated_at' => '2025-03-04 06:11:00',
            ),
            265 => 
            array (
                'id' => 1824,
                'code' => 'R9-03032025-MIC-0126',
                'information' => NULL,
                'sample_id' => 3102,
                'user_id' => 16,
                'created_at' => '2025-03-04 06:11:10',
                'updated_at' => '2025-03-04 06:11:10',
            ),
            266 => 
            array (
                'id' => 1825,
                'code' => 'R9-03032025-MIC-0127',
                'information' => NULL,
                'sample_id' => 3103,
                'user_id' => 16,
                'created_at' => '2025-03-04 06:11:26',
                'updated_at' => '2025-03-04 06:11:26',
            ),
            267 => 
            array (
                'id' => 1826,
                'code' => 'R9-03032025-MIC-0128',
                'information' => NULL,
                'sample_id' => 3104,
                'user_id' => 16,
                'created_at' => '2025-03-04 06:11:44',
                'updated_at' => '2025-03-04 06:11:44',
            ),
            268 => 
            array (
                'id' => 1827,
                'code' => 'R9-03032025-MIC-0129',
                'information' => NULL,
                'sample_id' => 3105,
                'user_id' => 16,
                'created_at' => '2025-03-04 06:11:59',
                'updated_at' => '2025-03-04 06:11:59',
            ),
            269 => 
            array (
                'id' => 1828,
                'code' => 'R9-03032025-MIC-0130',
                'information' => NULL,
                'sample_id' => 3106,
                'user_id' => 16,
                'created_at' => '2025-03-04 06:26:55',
                'updated_at' => '2025-03-04 06:26:55',
            ),
            270 => 
            array (
                'id' => 1829,
                'code' => 'R9-03032025-MIC-0131',
                'information' => NULL,
                'sample_id' => 3116,
                'user_id' => 16,
                'created_at' => '2025-03-04 06:37:14',
                'updated_at' => '2025-03-04 06:37:14',
            ),
            271 => 
            array (
                'id' => 1830,
                'code' => 'R9-03032025-MIC-0132',
                'information' => NULL,
                'sample_id' => 3117,
                'user_id' => 16,
                'created_at' => '2025-03-04 06:37:41',
                'updated_at' => '2025-03-04 06:37:41',
            ),
            272 => 
            array (
                'id' => 1831,
                'code' => 'R9-03032025-MIC-0133',
                'information' => NULL,
                'sample_id' => 3118,
                'user_id' => 16,
                'created_at' => '2025-03-04 06:48:06',
                'updated_at' => '2025-03-04 06:48:06',
            ),
            273 => 
            array (
                'id' => 1832,
                'code' => 'R9-03032025-MIC-0134',
                'information' => NULL,
                'sample_id' => 3119,
                'user_id' => 16,
                'created_at' => '2025-03-04 06:48:33',
                'updated_at' => '2025-03-04 06:48:33',
            ),
            274 => 
            array (
                'id' => 1833,
                'code' => 'R9-03032025-MIC-0135',
                'information' => NULL,
                'sample_id' => 3120,
                'user_id' => 16,
                'created_at' => '2025-03-04 06:48:52',
                'updated_at' => '2025-03-04 06:48:52',
            ),
            275 => 
            array (
                'id' => 1834,
                'code' => 'R9-03032025-MIC-0136',
                'information' => NULL,
                'sample_id' => 3121,
                'user_id' => 16,
                'created_at' => '2025-03-04 06:49:10',
                'updated_at' => '2025-03-04 06:49:10',
            ),
            276 => 
            array (
                'id' => 1835,
                'code' => 'R9-03032025-MIC-0137',
                'information' => NULL,
                'sample_id' => 3122,
                'user_id' => 16,
                'created_at' => '2025-03-04 06:49:37',
                'updated_at' => '2025-03-04 06:49:37',
            ),
            277 => 
            array (
                'id' => 1836,
                'code' => 'R9-03032025-MIC-0138',
                'information' => NULL,
                'sample_id' => 3123,
                'user_id' => 16,
                'created_at' => '2025-03-04 06:49:53',
                'updated_at' => '2025-03-04 06:49:53',
            ),
            278 => 
            array (
                'id' => 1837,
                'code' => 'R9-03032025-MIC-0139',
                'information' => NULL,
                'sample_id' => 3124,
                'user_id' => 16,
                'created_at' => '2025-03-04 06:50:10',
                'updated_at' => '2025-03-04 06:50:10',
            ),
            279 => 
            array (
                'id' => 1838,
                'code' => 'R9-03032025-MIC-0140',
                'information' => NULL,
                'sample_id' => 3125,
                'user_id' => 16,
                'created_at' => '2025-03-04 06:50:25',
                'updated_at' => '2025-03-04 06:50:25',
            ),
            280 => 
            array (
                'id' => 1839,
                'code' => 'R9-03032025-MIC-0141',
                'information' => NULL,
                'sample_id' => 3126,
                'user_id' => 16,
                'created_at' => '2025-03-04 06:50:37',
                'updated_at' => '2025-03-04 06:50:37',
            ),
            281 => 
            array (
                'id' => 1840,
                'code' => 'R9-03032025-MIC-0142',
                'information' => NULL,
                'sample_id' => 3127,
                'user_id' => 16,
                'created_at' => '2025-03-04 06:51:02',
                'updated_at' => '2025-03-04 06:51:02',
            ),
            282 => 
            array (
                'id' => 1841,
                'code' => 'R9-03032025-MIC-0143',
                'information' => NULL,
                'sample_id' => 3128,
                'user_id' => 16,
                'created_at' => '2025-03-04 06:51:20',
                'updated_at' => '2025-03-04 06:51:20',
            ),
            283 => 
            array (
                'id' => 1842,
                'code' => 'R9-03032025-MIC-0144',
                'information' => NULL,
                'sample_id' => 3129,
                'user_id' => 16,
                'created_at' => '2025-03-04 06:51:34',
                'updated_at' => '2025-03-04 06:51:34',
            ),
            284 => 
            array (
                'id' => 1843,
                'code' => 'R9-03032025-MIC-0145',
                'information' => NULL,
                'sample_id' => 3130,
                'user_id' => 16,
                'created_at' => '2025-03-04 06:51:55',
                'updated_at' => '2025-03-04 06:51:55',
            ),
            285 => 
            array (
                'id' => 1844,
                'code' => 'R9-03032025-MIC-0146',
                'information' => NULL,
                'sample_id' => 3131,
                'user_id' => 16,
                'created_at' => '2025-03-04 06:52:08',
                'updated_at' => '2025-03-04 06:52:08',
            ),
            286 => 
            array (
                'id' => 1845,
                'code' => 'R9-03032025-MIC-0147',
                'information' => NULL,
                'sample_id' => 3132,
                'user_id' => 16,
                'created_at' => '2025-03-04 06:52:29',
                'updated_at' => '2025-03-04 06:52:29',
            ),
            287 => 
            array (
                'id' => 1846,
                'code' => 'R9-03032025-MIC-0148',
                'information' => NULL,
                'sample_id' => 3134,
                'user_id' => 16,
                'created_at' => '2025-03-04 07:29:57',
                'updated_at' => '2025-03-04 07:29:57',
            ),
            288 => 
            array (
                'id' => 1847,
                'code' => 'R9-03032025-MIC-0149',
                'information' => NULL,
                'sample_id' => 3135,
                'user_id' => 16,
                'created_at' => '2025-03-04 07:30:19',
                'updated_at' => '2025-03-04 07:30:19',
            ),
            289 => 
            array (
                'id' => 1848,
                'code' => 'R9-03032025-MIC-0150',
                'information' => NULL,
                'sample_id' => 3176,
                'user_id' => 16,
                'created_at' => '2025-03-04 07:48:58',
                'updated_at' => '2025-03-04 07:48:58',
            ),
            290 => 
            array (
                'id' => 1849,
                'code' => 'R9-03032025-MIC-0151',
                'information' => NULL,
                'sample_id' => 3177,
                'user_id' => 16,
                'created_at' => '2025-03-04 07:56:42',
                'updated_at' => '2025-03-04 07:56:42',
            ),
            291 => 
            array (
                'id' => 1850,
                'code' => 'R9-03042025-MIC-0152',
                'information' => NULL,
                'sample_id' => 3178,
                'user_id' => 16,
                'created_at' => '2025-03-04 16:04:07',
                'updated_at' => '2025-03-04 16:04:07',
            ),
            292 => 
            array (
                'id' => 1851,
                'code' => 'R9-03042025-MIC-0153',
                'information' => NULL,
                'sample_id' => 3179,
                'user_id' => 16,
                'created_at' => '2025-03-04 16:04:26',
                'updated_at' => '2025-03-04 16:04:26',
            ),
            293 => 
            array (
                'id' => 1852,
                'code' => 'R9-03042025-MIC-0154',
                'information' => NULL,
                'sample_id' => 3180,
                'user_id' => 16,
                'created_at' => '2025-03-04 16:04:53',
                'updated_at' => '2025-03-04 16:04:53',
            ),
            294 => 
            array (
                'id' => 1853,
                'code' => 'R9-03042025-MIC-0155',
                'information' => NULL,
                'sample_id' => 3181,
                'user_id' => 16,
                'created_at' => '2025-03-04 16:05:21',
                'updated_at' => '2025-03-04 16:05:21',
            ),
            295 => 
            array (
                'id' => 1854,
                'code' => 'R9-03042025-CHE-0165',
                'information' => NULL,
                'sample_id' => 2669,
                'user_id' => 8,
                'created_at' => '2025-03-04 20:39:57',
                'updated_at' => '2025-03-04 20:39:57',
            ),
            296 => 
            array (
                'id' => 1855,
                'code' => 'R9-03042025-CHE-0166',
                'information' => NULL,
                'sample_id' => 2670,
                'user_id' => 8,
                'created_at' => '2025-03-04 20:40:54',
                'updated_at' => '2025-03-04 20:40:54',
            ),
            297 => 
            array (
                'id' => 1856,
                'code' => 'R9-03042025-CHE-0167',
                'information' => NULL,
                'sample_id' => 2671,
                'user_id' => 8,
                'created_at' => '2025-03-04 20:41:02',
                'updated_at' => '2025-03-04 20:41:02',
            ),
            298 => 
            array (
                'id' => 1857,
                'code' => 'R9-03042025-CHE-0168',
                'information' => NULL,
                'sample_id' => 2672,
                'user_id' => 8,
                'created_at' => '2025-03-04 20:41:09',
                'updated_at' => '2025-03-04 20:41:09',
            ),
            299 => 
            array (
                'id' => 1858,
                'code' => 'R9-03042025-CHE-0169',
                'information' => NULL,
                'sample_id' => 3150,
                'user_id' => 7,
                'created_at' => '2025-03-04 21:49:59',
                'updated_at' => '2025-03-04 21:49:59',
            ),
            300 => 
            array (
                'id' => 1859,
                'code' => 'R9-03042025-CHE-0170',
                'information' => NULL,
                'sample_id' => 3151,
                'user_id' => 7,
                'created_at' => '2025-03-04 21:51:09',
                'updated_at' => '2025-03-04 21:51:09',
            ),
            301 => 
            array (
                'id' => 1860,
                'code' => 'R9-03042025-CHE-0171',
                'information' => NULL,
                'sample_id' => 3152,
                'user_id' => 7,
                'created_at' => '2025-03-04 21:52:17',
                'updated_at' => '2025-03-04 21:52:17',
            ),
            302 => 
            array (
                'id' => 1861,
                'code' => 'R9-03042025-CHE-0172',
                'information' => NULL,
                'sample_id' => 3153,
                'user_id' => 7,
                'created_at' => '2025-03-04 21:53:44',
                'updated_at' => '2025-03-04 21:53:44',
            ),
            303 => 
            array (
                'id' => 1862,
                'code' => 'R9-03042025-MIC-0156',
                'information' => NULL,
                'sample_id' => 2799,
                'user_id' => 16,
                'created_at' => '2025-03-05 00:34:42',
                'updated_at' => '2025-03-05 00:34:42',
            ),
            304 => 
            array (
                'id' => 1863,
                'code' => 'R9-03042025-MIC-0157',
                'information' => NULL,
                'sample_id' => 2800,
                'user_id' => 16,
                'created_at' => '2025-03-05 00:35:09',
                'updated_at' => '2025-03-05 00:35:09',
            ),
            305 => 
            array (
                'id' => 1864,
                'code' => 'R9-03052025-CHE-0173',
                'information' => NULL,
                'sample_id' => 2966,
                'user_id' => 7,
                'created_at' => '2025-03-05 15:19:08',
                'updated_at' => '2025-03-05 15:19:08',
            ),
            306 => 
            array (
                'id' => 1865,
                'code' => 'R9-03052025-CHE-0174',
                'information' => NULL,
                'sample_id' => 2967,
                'user_id' => 7,
                'created_at' => '2025-03-05 15:19:37',
                'updated_at' => '2025-03-05 15:19:37',
            ),
            307 => 
            array (
                'id' => 1866,
                'code' => 'R9-03052025-CHE-0175',
                'information' => NULL,
                'sample_id' => 2968,
                'user_id' => 7,
                'created_at' => '2025-03-05 15:19:57',
                'updated_at' => '2025-03-05 15:19:57',
            ),
            308 => 
            array (
                'id' => 1867,
                'code' => 'R9-03052025-CHE-0176',
                'information' => NULL,
                'sample_id' => 2969,
                'user_id' => 7,
                'created_at' => '2025-03-05 15:20:25',
                'updated_at' => '2025-03-05 15:20:25',
            ),
            309 => 
            array (
                'id' => 1868,
                'code' => 'R9-03052025-CHE-0177',
                'information' => NULL,
                'sample_id' => 2683,
                'user_id' => 8,
                'created_at' => '2025-03-05 15:29:43',
                'updated_at' => '2025-03-05 15:29:43',
            ),
            310 => 
            array (
                'id' => 1869,
                'code' => 'R9-03052025-CHE-0178',
                'information' => NULL,
                'sample_id' => 2684,
                'user_id' => 8,
                'created_at' => '2025-03-05 15:29:49',
                'updated_at' => '2025-03-05 15:29:49',
            ),
            311 => 
            array (
                'id' => 1870,
                'code' => 'R9-03052025-CHE-0179',
                'information' => NULL,
                'sample_id' => 2685,
                'user_id' => 8,
                'created_at' => '2025-03-05 15:29:55',
                'updated_at' => '2025-03-05 15:29:55',
            ),
            312 => 
            array (
                'id' => 1871,
                'code' => 'R9-03052025-CHE-0180',
                'information' => NULL,
                'sample_id' => 2686,
                'user_id' => 8,
                'created_at' => '2025-03-05 15:30:00',
                'updated_at' => '2025-03-05 15:30:00',
            ),
            313 => 
            array (
                'id' => 1872,
                'code' => 'R9-03052025-CHE-0181',
                'information' => NULL,
                'sample_id' => 3115,
                'user_id' => 8,
                'created_at' => '2025-03-05 15:32:17',
                'updated_at' => '2025-03-05 15:32:17',
            ),
            314 => 
            array (
                'id' => 1873,
                'code' => 'R9-03052025-CHE-0182',
                'information' => NULL,
                'sample_id' => 2687,
                'user_id' => 8,
                'created_at' => '2025-03-05 17:27:13',
                'updated_at' => '2025-03-05 17:27:13',
            ),
            315 => 
            array (
                'id' => 1874,
                'code' => 'R9-03052025-CHE-0183',
                'information' => NULL,
                'sample_id' => 2688,
                'user_id' => 8,
                'created_at' => '2025-03-05 17:27:20',
                'updated_at' => '2025-03-05 17:27:20',
            ),
            316 => 
            array (
                'id' => 1875,
                'code' => 'R9-03052025-CHE-0184',
                'information' => NULL,
                'sample_id' => 2720,
                'user_id' => 8,
                'created_at' => '2025-03-05 17:30:23',
                'updated_at' => '2025-03-05 17:30:23',
            ),
            317 => 
            array (
                'id' => 1876,
                'code' => 'R9-03052025-CHE-0185',
                'information' => NULL,
                'sample_id' => 2886,
                'user_id' => 8,
                'created_at' => '2025-03-05 17:30:33',
                'updated_at' => '2025-03-05 17:30:33',
            ),
            318 => 
            array (
                'id' => 1877,
                'code' => '08292024-CHE-0916',
                'information' => NULL,
                'sample_id' => 227,
                'user_id' => 1,
                'created_at' => '2024-12-31 17:40:45',
                'updated_at' => '2024-12-31 17:40:45',
            ),
            319 => 
            array (
                'id' => 1878,
                'code' => '09032025-MIC-1026',
                'information' => NULL,
                'sample_id' => 265,
                'user_id' => 1,
                'created_at' => '2024-12-31 17:48:09',
                'updated_at' => '2024-12-31 17:48:09',
            ),
            320 => 
            array (
                'id' => 1886,
                'code' => '09172024-MIC-1078',
                'information' => NULL,
                'sample_id' => 348,
                'user_id' => 1,
                'created_at' => '2024-12-29 08:00:00',
                'updated_at' => '2024-12-29 08:00:00',
            ),
            321 => 
            array (
                'id' => 1887,
                'code' => 'R9-03052025-CHE-0186',
                'information' => NULL,
                'sample_id' => 3069,
                'user_id' => 7,
                'created_at' => '2025-03-06 00:01:45',
                'updated_at' => '2025-03-06 00:01:45',
            ),
            322 => 
            array (
                'id' => 1888,
                'code' => 'R9-03052025-CHE-0187',
                'information' => NULL,
                'sample_id' => 3070,
                'user_id' => 7,
                'created_at' => '2025-03-06 00:02:26',
                'updated_at' => '2025-03-06 00:02:26',
            ),
            323 => 
            array (
                'id' => 1889,
                'code' => 'R9-03052025-CHE-0188',
                'information' => NULL,
                'sample_id' => 3071,
                'user_id' => 7,
                'created_at' => '2025-03-06 00:02:40',
                'updated_at' => '2025-03-06 00:02:40',
            ),
            324 => 
            array (
                'id' => 1890,
                'code' => 'R9-03052025-CHE-0189',
                'information' => NULL,
                'sample_id' => 3072,
                'user_id' => 7,
                'created_at' => '2025-03-06 00:02:57',
                'updated_at' => '2025-03-06 00:02:57',
            ),
            325 => 
            array (
                'id' => 1891,
                'code' => 'R9-03052025-CHE-0190',
                'information' => NULL,
                'sample_id' => 3073,
                'user_id' => 7,
                'created_at' => '2025-03-06 00:03:15',
                'updated_at' => '2025-03-06 00:03:15',
            ),
            326 => 
            array (
                'id' => 1892,
                'code' => 'R9-03052025-CHE-0191',
                'information' => NULL,
                'sample_id' => 3074,
                'user_id' => 7,
                'created_at' => '2025-03-06 00:03:43',
                'updated_at' => '2025-03-06 00:03:43',
            ),
            327 => 
            array (
                'id' => 1893,
                'code' => 'R9-03052025-CHE-0192',
                'information' => NULL,
                'sample_id' => 3075,
                'user_id' => 7,
                'created_at' => '2025-03-06 00:04:01',
                'updated_at' => '2025-03-06 00:04:01',
            ),
            328 => 
            array (
                'id' => 1894,
                'code' => 'R9-03052025-CHE-0193',
                'information' => NULL,
                'sample_id' => 3076,
                'user_id' => 7,
                'created_at' => '2025-03-06 00:04:22',
                'updated_at' => '2025-03-06 00:04:22',
            ),
            329 => 
            array (
                'id' => 1895,
                'code' => 'R9-03052025-CHE-0194',
                'information' => NULL,
                'sample_id' => 3077,
                'user_id' => 7,
                'created_at' => '2025-03-06 00:04:47',
                'updated_at' => '2025-03-06 00:04:47',
            ),
            330 => 
            array (
                'id' => 1896,
                'code' => 'R9-03052025-CHE-0195',
                'information' => NULL,
                'sample_id' => 2813,
                'user_id' => 8,
                'created_at' => '2025-03-06 00:49:26',
                'updated_at' => '2025-03-06 00:49:26',
            ),
            331 => 
            array (
                'id' => 1897,
                'code' => 'R9-03062025-CHE-0196',
                'information' => NULL,
                'sample_id' => 2776,
                'user_id' => 8,
                'created_at' => '2025-03-06 21:31:40',
                'updated_at' => '2025-03-06 21:31:40',
            ),
            332 => 
            array (
                'id' => 1898,
                'code' => 'R9-03072025-CHE-0197',
                'information' => NULL,
                'sample_id' => 2689,
                'user_id' => 7,
                'created_at' => '2025-03-07 20:26:49',
                'updated_at' => '2025-03-07 20:26:49',
            ),
            333 => 
            array (
                'id' => 1899,
                'code' => 'R9-03072025-CHE-0198',
                'information' => NULL,
                'sample_id' => 2690,
                'user_id' => 7,
                'created_at' => '2025-03-07 20:28:10',
                'updated_at' => '2025-03-07 20:28:10',
            ),
            334 => 
            array (
                'id' => 1900,
                'code' => 'R9-03072025-CHE-0199',
                'information' => NULL,
                'sample_id' => 2768,
                'user_id' => 8,
                'created_at' => '2025-03-07 21:00:02',
                'updated_at' => '2025-03-07 21:00:02',
            ),
            335 => 
            array (
                'id' => 1901,
                'code' => 'R9-03072025-CHE-0200',
                'information' => NULL,
                'sample_id' => 2769,
                'user_id' => 8,
                'created_at' => '2025-03-07 21:00:06',
                'updated_at' => '2025-03-07 21:00:06',
            ),
            336 => 
            array (
                'id' => 1902,
                'code' => 'R9-03072025-CHE-0201',
                'information' => NULL,
                'sample_id' => 2889,
                'user_id' => 8,
                'created_at' => '2025-03-07 21:00:34',
                'updated_at' => '2025-03-07 21:00:34',
            ),
            337 => 
            array (
                'id' => 1903,
                'code' => 'R9-03072025-MIC-0158',
                'information' => NULL,
                'sample_id' => 3227,
                'user_id' => 16,
                'created_at' => '2025-03-07 23:12:43',
                'updated_at' => '2025-03-07 23:12:43',
            ),
            338 => 
            array (
                'id' => 1904,
                'code' => 'R9-03092025-MIC-0159',
                'information' => NULL,
                'sample_id' => 3231,
                'user_id' => 16,
                'created_at' => '2025-03-10 01:50:45',
                'updated_at' => '2025-03-10 01:50:45',
            ),
            339 => 
            array (
                'id' => 1905,
                'code' => 'R9-03092025-MIC-0160',
                'information' => NULL,
                'sample_id' => 3232,
                'user_id' => 16,
                'created_at' => '2025-03-10 01:51:08',
                'updated_at' => '2025-03-10 01:51:08',
            ),
            340 => 
            array (
                'id' => 1906,
                'code' => 'R9-03092025-MIC-0161',
                'information' => NULL,
                'sample_id' => 3233,
                'user_id' => 16,
                'created_at' => '2025-03-10 02:07:59',
                'updated_at' => '2025-03-10 02:07:59',
            ),
            341 => 
            array (
                'id' => 1907,
                'code' => 'R9-03092025-MIC-0162',
                'information' => NULL,
                'sample_id' => 3234,
                'user_id' => 16,
                'created_at' => '2025-03-10 02:08:18',
                'updated_at' => '2025-03-10 02:08:18',
            ),
            342 => 
            array (
                'id' => 1908,
                'code' => 'R9-03092025-MIC-0163',
                'information' => NULL,
                'sample_id' => 3237,
                'user_id' => 16,
                'created_at' => '2025-03-10 02:18:59',
                'updated_at' => '2025-03-10 02:18:59',
            ),
            343 => 
            array (
                'id' => 1909,
                'code' => 'R9-03092025-MIC-0164',
                'information' => NULL,
                'sample_id' => 3240,
                'user_id' => 16,
                'created_at' => '2025-03-10 03:14:40',
                'updated_at' => '2025-03-10 03:14:40',
            ),
            344 => 
            array (
                'id' => 1910,
                'code' => 'R9-03092025-MIC-0165',
                'information' => NULL,
                'sample_id' => 3241,
                'user_id' => 16,
                'created_at' => '2025-03-10 03:15:41',
                'updated_at' => '2025-03-10 03:15:41',
            ),
            345 => 
            array (
                'id' => 1911,
                'code' => 'R9-03092025-MIC-0166',
                'information' => NULL,
                'sample_id' => 3242,
                'user_id' => 16,
                'created_at' => '2025-03-10 03:16:01',
                'updated_at' => '2025-03-10 03:16:01',
            ),
            346 => 
            array (
                'id' => 1912,
                'code' => 'R9-03092025-MIC-0167',
                'information' => NULL,
                'sample_id' => 3243,
                'user_id' => 16,
                'created_at' => '2025-03-10 03:16:17',
                'updated_at' => '2025-03-10 03:16:17',
            ),
            347 => 
            array (
                'id' => 1913,
                'code' => 'R9-03092025-MIC-0168',
                'information' => NULL,
                'sample_id' => 3244,
                'user_id' => 16,
                'created_at' => '2025-03-10 03:16:34',
                'updated_at' => '2025-03-10 03:16:34',
            ),
            348 => 
            array (
                'id' => 1914,
                'code' => 'R9-03092025-MIC-0169',
                'information' => NULL,
                'sample_id' => 3250,
                'user_id' => 16,
                'created_at' => '2025-03-10 03:54:02',
                'updated_at' => '2025-03-10 03:54:02',
            ),
            349 => 
            array (
                'id' => 1915,
                'code' => 'R9-03092025-MIC-0170',
                'information' => NULL,
                'sample_id' => 3261,
                'user_id' => 16,
                'created_at' => '2025-03-10 04:04:35',
                'updated_at' => '2025-03-10 04:04:35',
            ),
            350 => 
            array (
                'id' => 1916,
                'code' => 'R9-03102025-CHE-0202',
                'information' => NULL,
                'sample_id' => 3258,
                'user_id' => 8,
                'created_at' => '2025-03-10 15:30:36',
                'updated_at' => '2025-03-10 15:30:36',
            ),
            351 => 
            array (
                'id' => 1917,
                'code' => 'R9-03102025-MET-0267',
                'information' => NULL,
                'sample_id' => 3260,
                'user_id' => 13,
                'created_at' => '2025-03-10 17:08:53',
                'updated_at' => '2025-03-10 17:08:53',
            ),
            352 => 
            array (
                'id' => 1918,
                'code' => 'R9-03102025-MET-0268',
                'information' => NULL,
                'sample_id' => 3185,
                'user_id' => 13,
                'created_at' => '2025-03-10 17:11:23',
                'updated_at' => '2025-03-10 17:11:23',
            ),
            353 => 
            array (
                'id' => 1919,
                'code' => 'R9-03102025-MET-0269',
                'information' => NULL,
                'sample_id' => 3184,
                'user_id' => 13,
                'created_at' => '2025-03-10 17:14:01',
                'updated_at' => '2025-03-10 17:14:01',
            ),
            354 => 
            array (
                'id' => 1920,
                'code' => 'R9-03102025-MET-0270',
                'information' => NULL,
                'sample_id' => 3183,
                'user_id' => 13,
                'created_at' => '2025-03-10 17:15:53',
                'updated_at' => '2025-03-10 17:15:53',
            ),
            355 => 
            array (
                'id' => 1921,
                'code' => 'R9-03102025-MET-0271',
                'information' => NULL,
                'sample_id' => 3157,
                'user_id' => 13,
                'created_at' => '2025-03-10 17:21:01',
                'updated_at' => '2025-03-10 17:21:01',
            ),
            356 => 
            array (
                'id' => 1922,
                'code' => 'R9-03102025-MET-0272',
                'information' => NULL,
                'sample_id' => 3156,
                'user_id' => 13,
                'created_at' => '2025-03-10 17:22:21',
                'updated_at' => '2025-03-10 17:22:21',
            ),
            357 => 
            array (
                'id' => 1923,
                'code' => 'R9-03102025-MET-0273',
                'information' => NULL,
                'sample_id' => 3155,
                'user_id' => 13,
                'created_at' => '2025-03-10 17:24:39',
                'updated_at' => '2025-03-10 17:24:39',
            ),
            358 => 
            array (
                'id' => 1924,
                'code' => 'R9-03102025-MET-0274',
                'information' => NULL,
                'sample_id' => 3141,
                'user_id' => 13,
                'created_at' => '2025-03-10 17:26:29',
                'updated_at' => '2025-03-10 17:26:29',
            ),
            359 => 
            array (
                'id' => 1925,
                'code' => 'R9-03102025-MET-0275',
                'information' => NULL,
                'sample_id' => 2887,
                'user_id' => 13,
                'created_at' => '2025-03-10 17:28:40',
                'updated_at' => '2025-03-10 17:28:40',
            ),
            360 => 
            array (
                'id' => 1926,
                'code' => 'R9-03102025-MET-0276',
                'information' => NULL,
                'sample_id' => 2924,
                'user_id' => 12,
                'created_at' => '2025-03-10 17:52:44',
                'updated_at' => '2025-03-10 17:52:44',
            ),
            361 => 
            array (
                'id' => 1927,
                'code' => 'R9-03102025-MET-0277',
                'information' => NULL,
                'sample_id' => 2925,
                'user_id' => 12,
                'created_at' => '2025-03-10 17:56:12',
                'updated_at' => '2025-03-10 17:56:12',
            ),
            362 => 
            array (
                'id' => 1928,
                'code' => 'R9-03102025-MET-0278',
                'information' => NULL,
                'sample_id' => 2926,
                'user_id' => 12,
                'created_at' => '2025-03-10 17:56:44',
                'updated_at' => '2025-03-10 17:56:44',
            ),
            363 => 
            array (
                'id' => 1929,
                'code' => 'R9-03102025-MET-0279',
                'information' => NULL,
                'sample_id' => 2927,
                'user_id' => 12,
                'created_at' => '2025-03-10 17:57:18',
                'updated_at' => '2025-03-10 17:57:18',
            ),
            364 => 
            array (
                'id' => 1930,
                'code' => 'R9-03102025-MET-0280',
                'information' => NULL,
                'sample_id' => 2928,
                'user_id' => 12,
                'created_at' => '2025-03-10 17:57:56',
                'updated_at' => '2025-03-10 17:57:56',
            ),
            365 => 
            array (
                'id' => 1931,
                'code' => 'R9-03102025-MET-0281',
                'information' => NULL,
                'sample_id' => 2929,
                'user_id' => 12,
                'created_at' => '2025-03-10 17:58:22',
                'updated_at' => '2025-03-10 17:58:22',
            ),
            366 => 
            array (
                'id' => 1932,
                'code' => 'R9-03102025-CHE-0203',
                'information' => NULL,
                'sample_id' => 2835,
                'user_id' => 8,
                'created_at' => '2025-03-10 19:18:37',
                'updated_at' => '2025-03-10 19:18:37',
            ),
            367 => 
            array (
                'id' => 1933,
                'code' => 'R9-03102025-MET-0282',
                'information' => NULL,
                'sample_id' => 2823,
                'user_id' => 12,
                'created_at' => '2025-03-10 22:41:02',
                'updated_at' => '2025-03-10 22:41:02',
            ),
            368 => 
            array (
                'id' => 1934,
                'code' => 'R9-03102025-MET-0283',
                'information' => NULL,
                'sample_id' => 2824,
                'user_id' => 12,
                'created_at' => '2025-03-10 22:42:26',
                'updated_at' => '2025-03-10 22:42:26',
            ),
            369 => 
            array (
                'id' => 1935,
                'code' => 'R9-03102025-MET-0284',
                'information' => NULL,
                'sample_id' => 2825,
                'user_id' => 12,
                'created_at' => '2025-03-10 22:43:12',
                'updated_at' => '2025-03-10 22:43:12',
            ),
            370 => 
            array (
                'id' => 1936,
                'code' => 'R9-03102025-MET-0285',
                'information' => NULL,
                'sample_id' => 2826,
                'user_id' => 12,
                'created_at' => '2025-03-10 22:43:41',
                'updated_at' => '2025-03-10 22:43:41',
            ),
            371 => 
            array (
                'id' => 1937,
                'code' => 'R9-03102025-MET-0286',
                'information' => NULL,
                'sample_id' => 2827,
                'user_id' => 12,
                'created_at' => '2025-03-10 22:44:08',
                'updated_at' => '2025-03-10 22:44:08',
            ),
            372 => 
            array (
                'id' => 1938,
                'code' => 'R9-03102025-MET-0287',
                'information' => NULL,
                'sample_id' => 2828,
                'user_id' => 12,
                'created_at' => '2025-03-10 22:44:45',
                'updated_at' => '2025-03-10 22:44:45',
            ),
            373 => 
            array (
                'id' => 1939,
                'code' => 'R9-03102025-MET-0288',
                'information' => NULL,
                'sample_id' => 2829,
                'user_id' => 12,
                'created_at' => '2025-03-10 22:45:31',
                'updated_at' => '2025-03-10 22:45:31',
            ),
            374 => 
            array (
                'id' => 1940,
                'code' => 'R9-03102025-MET-0289',
                'information' => NULL,
                'sample_id' => 2830,
                'user_id' => 12,
                'created_at' => '2025-03-10 22:46:09',
                'updated_at' => '2025-03-10 22:46:09',
            ),
            375 => 
            array (
                'id' => 1941,
                'code' => 'R9-03102025-MET-0290',
                'information' => NULL,
                'sample_id' => 2831,
                'user_id' => 12,
                'created_at' => '2025-03-10 22:47:37',
                'updated_at' => '2025-03-10 22:47:37',
            ),
            376 => 
            array (
                'id' => 1942,
                'code' => 'R9-03102025-MET-0291',
                'information' => NULL,
                'sample_id' => 2347,
                'user_id' => 13,
                'created_at' => '2025-03-10 23:48:45',
                'updated_at' => '2025-03-10 23:48:45',
            ),
            377 => 
            array (
                'id' => 1943,
                'code' => 'R9-03102025-MET-0292',
                'information' => NULL,
                'sample_id' => 2348,
                'user_id' => 13,
                'created_at' => '2025-03-10 23:48:50',
                'updated_at' => '2025-03-10 23:48:50',
            ),
            378 => 
            array (
                'id' => 1944,
                'code' => 'R9-03102025-CHE-0204',
                'information' => NULL,
                'sample_id' => 2820,
                'user_id' => 8,
                'created_at' => '2025-03-11 00:18:19',
                'updated_at' => '2025-03-11 00:18:19',
            ),
            379 => 
            array (
                'id' => 1945,
                'code' => 'R9-03112025-MET-0293',
                'information' => NULL,
                'sample_id' => 2832,
                'user_id' => 12,
                'created_at' => '2025-03-11 16:22:17',
                'updated_at' => '2025-03-11 16:22:17',
            ),
            380 => 
            array (
                'id' => 1946,
                'code' => 'R9-03112025-MIC-0171',
                'information' => NULL,
                'sample_id' => 3236,
                'user_id' => 16,
                'created_at' => '2025-03-11 18:56:27',
                'updated_at' => '2025-03-11 18:56:27',
            ),
            381 => 
            array (
                'id' => 1947,
                'code' => 'R9-03112025-MIC-0172',
                'information' => NULL,
                'sample_id' => 3238,
                'user_id' => 16,
                'created_at' => '2025-03-11 18:56:59',
                'updated_at' => '2025-03-11 18:56:59',
            ),
            382 => 
            array (
                'id' => 1948,
                'code' => 'R9-03112025-MIC-0173',
                'information' => NULL,
                'sample_id' => 3253,
                'user_id' => 16,
                'created_at' => '2025-03-11 18:57:32',
                'updated_at' => '2025-03-11 18:57:32',
            ),
            383 => 
            array (
                'id' => 1949,
                'code' => 'R9-03112025-MIC-0174',
                'information' => NULL,
                'sample_id' => 3262,
                'user_id' => 16,
                'created_at' => '2025-03-11 19:00:05',
                'updated_at' => '2025-03-11 19:00:05',
            ),
            384 => 
            array (
                'id' => 1950,
                'code' => 'R9-03112025-MIC-0175',
                'information' => NULL,
                'sample_id' => 3263,
                'user_id' => 16,
                'created_at' => '2025-03-11 19:00:31',
                'updated_at' => '2025-03-11 19:00:31',
            ),
            385 => 
            array (
                'id' => 1951,
                'code' => 'R9-03112025-MIC-0176',
                'information' => NULL,
                'sample_id' => 3264,
                'user_id' => 16,
                'created_at' => '2025-03-11 19:02:03',
                'updated_at' => '2025-03-11 19:02:03',
            ),
            386 => 
            array (
                'id' => 1952,
                'code' => 'R9-03112025-MIC-0177',
                'information' => NULL,
                'sample_id' => 3267,
                'user_id' => 16,
                'created_at' => '2025-03-11 19:02:32',
                'updated_at' => '2025-03-11 19:02:32',
            ),
            387 => 
            array (
                'id' => 1953,
                'code' => 'R9-03122025-CHE-0205',
                'information' => NULL,
                'sample_id' => 3255,
                'user_id' => 8,
                'created_at' => '2025-03-12 08:03:32',
                'updated_at' => '2025-03-12 08:03:32',
            ),
            388 => 
            array (
                'id' => 1954,
                'code' => 'R9-03122025-CHE-0206',
                'information' => NULL,
                'sample_id' => 3136,
                'user_id' => 8,
                'created_at' => '2025-03-12 08:11:50',
                'updated_at' => '2025-03-12 08:11:50',
            ),
            389 => 
            array (
                'id' => 1955,
                'code' => 'R9-03122025-CHE-0207',
                'information' => NULL,
                'sample_id' => 3137,
                'user_id' => 8,
                'created_at' => '2025-03-12 08:12:00',
                'updated_at' => '2025-03-12 08:12:00',
            ),
            390 => 
            array (
                'id' => 1956,
                'code' => 'R9-03122025-CHE-0208',
                'information' => NULL,
                'sample_id' => 3148,
                'user_id' => 8,
                'created_at' => '2025-03-12 08:15:31',
                'updated_at' => '2025-03-12 08:15:31',
            ),
            391 => 
            array (
                'id' => 1957,
                'code' => 'R9-03122025-CHE-0209',
                'information' => NULL,
                'sample_id' => 3149,
                'user_id' => 8,
                'created_at' => '2025-03-12 08:15:46',
                'updated_at' => '2025-03-12 08:15:46',
            ),
            392 => 
            array (
                'id' => 1958,
                'code' => 'R9-03122025-CHE-0210',
                'information' => NULL,
                'sample_id' => 3303,
                'user_id' => 8,
                'created_at' => '2025-03-12 08:25:56',
                'updated_at' => '2025-03-12 08:25:56',
            ),
            393 => 
            array (
                'id' => 1959,
                'code' => 'R9-03122025-CHE-0211',
                'information' => NULL,
                'sample_id' => 3304,
                'user_id' => 8,
                'created_at' => '2025-03-12 08:26:10',
                'updated_at' => '2025-03-12 08:26:10',
            ),
            394 => 
            array (
                'id' => 1960,
                'code' => 'R9-03122025-CHE-0212',
                'information' => NULL,
                'sample_id' => 3305,
                'user_id' => 8,
                'created_at' => '2025-03-12 08:26:18',
                'updated_at' => '2025-03-12 08:26:18',
            ),
            395 => 
            array (
                'id' => 1961,
                'code' => 'R9-03122025-CHE-0213',
                'information' => NULL,
                'sample_id' => 3306,
                'user_id' => 8,
                'created_at' => '2025-03-12 08:26:40',
                'updated_at' => '2025-03-12 08:26:40',
            ),
            396 => 
            array (
                'id' => 1962,
                'code' => 'R9-03122025-CHE-0214',
                'information' => NULL,
                'sample_id' => 3307,
                'user_id' => 8,
                'created_at' => '2025-03-12 08:26:45',
                'updated_at' => '2025-03-12 08:26:45',
            ),
            397 => 
            array (
                'id' => 1963,
                'code' => 'R9-03122025-CHE-0215',
                'information' => NULL,
                'sample_id' => 3308,
                'user_id' => 8,
                'created_at' => '2025-03-12 08:27:14',
                'updated_at' => '2025-03-12 08:27:14',
            ),
            398 => 
            array (
                'id' => 1964,
                'code' => 'R9-03122025-CHE-0216',
                'information' => NULL,
                'sample_id' => 3309,
                'user_id' => 8,
                'created_at' => '2025-03-12 08:27:19',
                'updated_at' => '2025-03-12 08:27:19',
            ),
            399 => 
            array (
                'id' => 1965,
                'code' => 'R9-03122025-CHE-0217',
                'information' => NULL,
                'sample_id' => 3310,
                'user_id' => 8,
                'created_at' => '2025-03-12 08:27:26',
                'updated_at' => '2025-03-12 08:27:26',
            ),
            400 => 
            array (
                'id' => 1966,
                'code' => 'R9-03122025-CHE-0218',
                'information' => NULL,
                'sample_id' => 3311,
                'user_id' => 8,
                'created_at' => '2025-03-12 08:27:31',
                'updated_at' => '2025-03-12 08:27:31',
            ),
            401 => 
            array (
                'id' => 1967,
                'code' => 'R9-03122025-CHE-0219',
                'information' => NULL,
                'sample_id' => 3312,
                'user_id' => 8,
                'created_at' => '2025-03-12 08:27:36',
                'updated_at' => '2025-03-12 08:27:36',
            ),
            402 => 
            array (
                'id' => 1968,
                'code' => 'R9-03122025-CHE-0220',
                'information' => NULL,
                'sample_id' => 3313,
                'user_id' => 8,
                'created_at' => '2025-03-12 08:27:42',
                'updated_at' => '2025-03-12 08:27:42',
            ),
            403 => 
            array (
                'id' => 1969,
                'code' => 'R9-03122025-CHE-0221',
                'information' => NULL,
                'sample_id' => 3314,
                'user_id' => 8,
                'created_at' => '2025-03-12 08:27:47',
                'updated_at' => '2025-03-12 08:27:47',
            ),
            404 => 
            array (
                'id' => 1970,
                'code' => 'R9-03122025-CHE-0222',
                'information' => NULL,
                'sample_id' => 3315,
                'user_id' => 8,
                'created_at' => '2025-03-12 08:28:44',
                'updated_at' => '2025-03-12 08:28:44',
            ),
            405 => 
            array (
                'id' => 1971,
                'code' => 'R9-03122025-CHE-0223',
                'information' => NULL,
                'sample_id' => 3316,
                'user_id' => 8,
                'created_at' => '2025-03-12 08:28:57',
                'updated_at' => '2025-03-12 08:28:57',
            ),
            406 => 
            array (
                'id' => 1972,
                'code' => 'R9-03122025-CHE-0224',
                'information' => NULL,
                'sample_id' => 3317,
                'user_id' => 8,
                'created_at' => '2025-03-12 08:29:10',
                'updated_at' => '2025-03-12 08:29:10',
            ),
            407 => 
            array (
                'id' => 1973,
                'code' => 'R9-03122025-CHE-0225',
                'information' => NULL,
                'sample_id' => 3318,
                'user_id' => 8,
                'created_at' => '2025-03-12 08:29:20',
                'updated_at' => '2025-03-12 08:29:20',
            ),
            408 => 
            array (
                'id' => 1974,
                'code' => 'R9-03122025-CHE-0226',
                'information' => NULL,
                'sample_id' => 3251,
                'user_id' => 8,
                'created_at' => '2025-03-12 08:30:38',
                'updated_at' => '2025-03-12 08:30:38',
            ),
            409 => 
            array (
                'id' => 1975,
                'code' => 'R9-03122025-CHE-0227',
                'information' => NULL,
                'sample_id' => 3257,
                'user_id' => 8,
                'created_at' => '2025-03-12 08:31:00',
                'updated_at' => '2025-03-12 08:31:00',
            ),
            410 => 
            array (
                'id' => 1976,
                'code' => 'R9-03122025-MET-0294',
                'information' => NULL,
                'sample_id' => 3224,
                'user_id' => 13,
                'created_at' => '2025-03-12 18:11:07',
                'updated_at' => '2025-03-12 18:11:07',
            ),
            411 => 
            array (
                'id' => 1977,
                'code' => 'R9-03122025-MET-0295',
                'information' => NULL,
                'sample_id' => 3225,
                'user_id' => 13,
                'created_at' => '2025-03-12 18:11:14',
                'updated_at' => '2025-03-12 18:11:14',
            ),
            412 => 
            array (
                'id' => 1978,
                'code' => 'R9-03122025-MIC-0178',
                'information' => NULL,
                'sample_id' => 3338,
                'user_id' => 16,
                'created_at' => '2025-03-12 18:46:32',
                'updated_at' => '2025-03-12 18:46:32',
            ),
            413 => 
            array (
                'id' => 1979,
                'code' => 'R9-03122025-MIC-0179',
                'information' => NULL,
                'sample_id' => 3339,
                'user_id' => 16,
                'created_at' => '2025-03-12 18:46:57',
                'updated_at' => '2025-03-12 18:46:57',
            ),
            414 => 
            array (
                'id' => 1980,
                'code' => 'R9-03122025-MET-0296',
                'information' => NULL,
                'sample_id' => 2566,
                'user_id' => 12,
                'created_at' => '2025-03-13 00:53:44',
                'updated_at' => '2025-03-13 00:53:44',
            ),
            415 => 
            array (
                'id' => 1981,
                'code' => 'R9-03132025-CHE-0228',
                'information' => NULL,
                'sample_id' => 3322,
                'user_id' => 8,
                'created_at' => '2025-03-13 16:57:39',
                'updated_at' => '2025-03-13 16:57:39',
            ),
            416 => 
            array (
                'id' => 1982,
                'code' => 'R9-03132025-CHE-0229',
                'information' => NULL,
                'sample_id' => 3323,
                'user_id' => 8,
                'created_at' => '2025-03-13 16:58:07',
                'updated_at' => '2025-03-13 16:58:07',
            ),
            417 => 
            array (
                'id' => 1983,
                'code' => 'R9-03132025-CHE-0230',
                'information' => NULL,
                'sample_id' => 3324,
                'user_id' => 8,
                'created_at' => '2025-03-13 16:58:14',
                'updated_at' => '2025-03-13 16:58:14',
            ),
            418 => 
            array (
                'id' => 1984,
                'code' => 'R9-03132025-CHE-0231',
                'information' => NULL,
                'sample_id' => 3325,
                'user_id' => 8,
                'created_at' => '2025-03-13 16:58:26',
                'updated_at' => '2025-03-13 16:58:26',
            ),
            419 => 
            array (
                'id' => 1985,
                'code' => 'R9-03132025-CHE-0232',
                'information' => NULL,
                'sample_id' => 3186,
                'user_id' => 8,
                'created_at' => '2025-03-13 18:38:07',
                'updated_at' => '2025-03-13 18:38:07',
            ),
            420 => 
            array (
                'id' => 1986,
                'code' => 'R9-03132025-CHE-0233',
                'information' => NULL,
                'sample_id' => 3187,
                'user_id' => 8,
                'created_at' => '2025-03-13 18:38:12',
                'updated_at' => '2025-03-13 18:38:12',
            ),
            421 => 
            array (
                'id' => 1987,
                'code' => 'R9-03132025-CHE-0234',
                'information' => NULL,
                'sample_id' => 3252,
                'user_id' => 8,
                'created_at' => '2025-03-13 18:38:18',
                'updated_at' => '2025-03-13 18:38:18',
            ),
            422 => 
            array (
                'id' => 1988,
                'code' => 'R9-03132025-MET-0297',
                'information' => NULL,
                'sample_id' => 3083,
                'user_id' => 12,
                'created_at' => '2025-03-13 19:30:26',
                'updated_at' => '2025-03-13 19:30:26',
            ),
            423 => 
            array (
                'id' => 1989,
                'code' => 'R9-03132025-MET-0298',
                'information' => NULL,
                'sample_id' => 2805,
                'user_id' => 12,
                'created_at' => '2025-03-13 19:31:19',
                'updated_at' => '2025-03-13 19:31:19',
            ),
            424 => 
            array (
                'id' => 1990,
                'code' => 'R9-03132025-MET-0299',
                'information' => NULL,
                'sample_id' => 2806,
                'user_id' => 12,
                'created_at' => '2025-03-13 19:31:48',
                'updated_at' => '2025-03-13 19:31:48',
            ),
            425 => 
            array (
                'id' => 1991,
                'code' => 'R9-03132025-MET-0300',
                'information' => NULL,
                'sample_id' => 2807,
                'user_id' => 12,
                'created_at' => '2025-03-13 19:32:20',
                'updated_at' => '2025-03-13 19:32:20',
            ),
            426 => 
            array (
                'id' => 1992,
                'code' => 'R9-03132025-CHE-0235',
                'information' => NULL,
                'sample_id' => 3230,
                'user_id' => 8,
                'created_at' => '2025-03-13 21:10:29',
                'updated_at' => '2025-03-13 21:10:29',
            ),
            427 => 
            array (
                'id' => 1993,
                'code' => 'R9-03132025-CHE-0236',
                'information' => NULL,
                'sample_id' => 3254,
                'user_id' => 8,
                'created_at' => '2025-03-13 21:40:37',
                'updated_at' => '2025-03-13 21:40:37',
            ),
            428 => 
            array (
                'id' => 1994,
                'code' => 'R9-03132025-CHE-0237',
                'information' => NULL,
                'sample_id' => 3319,
                'user_id' => 8,
                'created_at' => '2025-03-13 21:46:08',
                'updated_at' => '2025-03-13 21:46:08',
            ),
            429 => 
            array (
                'id' => 1995,
                'code' => 'R9-03132025-CHE-0238',
                'information' => NULL,
                'sample_id' => 3320,
                'user_id' => 8,
                'created_at' => '2025-03-13 21:46:24',
                'updated_at' => '2025-03-13 21:46:24',
            ),
            430 => 
            array (
                'id' => 1996,
                'code' => 'R9-03132025-CHE-0239',
                'information' => NULL,
                'sample_id' => 3321,
                'user_id' => 8,
                'created_at' => '2025-03-13 21:46:35',
                'updated_at' => '2025-03-13 21:46:35',
            ),
            431 => 
            array (
                'id' => 1997,
                'code' => 'R9-03132025-MET-0301',
                'information' => NULL,
                'sample_id' => 3442,
                'user_id' => 12,
                'created_at' => '2025-03-13 22:00:25',
                'updated_at' => '2025-03-13 22:00:25',
            ),
            432 => 
            array (
                'id' => 1998,
                'code' => 'R9-03132025-MET-0302',
                'information' => NULL,
                'sample_id' => 3400,
                'user_id' => 12,
                'created_at' => '2025-03-14 00:42:04',
                'updated_at' => '2025-03-14 00:42:04',
            ),
            433 => 
            array (
                'id' => 1999,
                'code' => 'R9-03132025-MET-0303',
                'information' => NULL,
                'sample_id' => 3401,
                'user_id' => 12,
                'created_at' => '2025-03-14 00:42:19',
                'updated_at' => '2025-03-14 00:42:19',
            ),
            434 => 
            array (
                'id' => 2000,
                'code' => 'R9-03132025-MET-0304',
                'information' => NULL,
                'sample_id' => 3402,
                'user_id' => 12,
                'created_at' => '2025-03-14 00:42:28',
                'updated_at' => '2025-03-14 00:42:28',
            ),
            435 => 
            array (
                'id' => 2001,
                'code' => 'R9-03132025-MET-0305',
                'information' => NULL,
                'sample_id' => 3403,
                'user_id' => 12,
                'created_at' => '2025-03-14 00:42:47',
                'updated_at' => '2025-03-14 00:42:47',
            ),
            436 => 
            array (
                'id' => 2002,
                'code' => 'R9-03132025-MET-0306',
                'information' => NULL,
                'sample_id' => 3404,
                'user_id' => 12,
                'created_at' => '2025-03-14 00:42:59',
                'updated_at' => '2025-03-14 00:42:59',
            ),
            437 => 
            array (
                'id' => 2003,
                'code' => 'R9-03132025-MET-0307',
                'information' => NULL,
                'sample_id' => 3405,
                'user_id' => 12,
                'created_at' => '2025-03-14 00:43:09',
                'updated_at' => '2025-03-14 00:43:09',
            ),
            438 => 
            array (
                'id' => 2004,
                'code' => 'R9-03132025-MET-0308',
                'information' => NULL,
                'sample_id' => 3406,
                'user_id' => 12,
                'created_at' => '2025-03-14 00:43:24',
                'updated_at' => '2025-03-14 00:43:24',
            ),
            439 => 
            array (
                'id' => 2005,
                'code' => 'R9-03132025-MET-0309',
                'information' => NULL,
                'sample_id' => 3407,
                'user_id' => 12,
                'created_at' => '2025-03-14 00:43:36',
                'updated_at' => '2025-03-14 00:43:36',
            ),
            440 => 
            array (
                'id' => 2006,
                'code' => 'R9-03132025-MET-0310',
                'information' => NULL,
                'sample_id' => 3408,
                'user_id' => 12,
                'created_at' => '2025-03-14 00:43:45',
                'updated_at' => '2025-03-14 00:43:45',
            ),
            441 => 
            array (
                'id' => 2007,
                'code' => 'R9-03132025-MET-0311',
                'information' => NULL,
                'sample_id' => 3409,
                'user_id' => 12,
                'created_at' => '2025-03-14 00:44:00',
                'updated_at' => '2025-03-14 00:44:00',
            ),
            442 => 
            array (
                'id' => 2008,
                'code' => 'R9-03132025-MET-0312',
                'information' => NULL,
                'sample_id' => 3410,
                'user_id' => 12,
                'created_at' => '2025-03-14 00:44:13',
                'updated_at' => '2025-03-14 00:44:13',
            ),
            443 => 
            array (
                'id' => 2009,
                'code' => 'R9-03142025-CHE-0240',
                'information' => NULL,
                'sample_id' => 3245,
                'user_id' => 7,
                'created_at' => '2025-03-14 15:20:32',
                'updated_at' => '2025-03-14 15:20:32',
            ),
            444 => 
            array (
                'id' => 2010,
                'code' => 'R9-03142025-CHE-0241',
                'information' => NULL,
                'sample_id' => 3246,
                'user_id' => 7,
                'created_at' => '2025-03-14 15:20:51',
                'updated_at' => '2025-03-14 15:20:51',
            ),
            445 => 
            array (
                'id' => 2011,
                'code' => 'R9-03142025-CHE-0242',
                'information' => NULL,
                'sample_id' => 3247,
                'user_id' => 7,
                'created_at' => '2025-03-14 15:21:02',
                'updated_at' => '2025-03-14 15:21:02',
            ),
            446 => 
            array (
                'id' => 2012,
                'code' => 'R9-03142025-CHE-0243',
                'information' => NULL,
                'sample_id' => 3248,
                'user_id' => 7,
                'created_at' => '2025-03-14 15:21:09',
                'updated_at' => '2025-03-14 15:21:09',
            ),
            447 => 
            array (
                'id' => 2013,
                'code' => 'R9-03142025-CHE-0244',
                'information' => NULL,
                'sample_id' => 3249,
                'user_id' => 7,
                'created_at' => '2025-03-14 15:21:20',
                'updated_at' => '2025-03-14 15:21:20',
            ),
            448 => 
            array (
                'id' => 2014,
                'code' => 'R9-03142025-MET-0313',
                'information' => NULL,
                'sample_id' => 2381,
                'user_id' => 13,
                'created_at' => '2025-03-14 16:19:36',
                'updated_at' => '2025-03-14 16:19:36',
            ),
            449 => 
            array (
                'id' => 2015,
                'code' => 'R9-03142025-MET-0314',
                'information' => NULL,
                'sample_id' => 2382,
                'user_id' => 13,
                'created_at' => '2025-03-14 16:19:40',
                'updated_at' => '2025-03-14 16:19:40',
            ),
            450 => 
            array (
                'id' => 2016,
                'code' => 'R9-03142025-MET-0315',
                'information' => NULL,
                'sample_id' => 2383,
                'user_id' => 13,
                'created_at' => '2025-03-14 16:19:44',
                'updated_at' => '2025-03-14 16:19:44',
            ),
            451 => 
            array (
                'id' => 2017,
                'code' => 'R9-03142025-MET-0316',
                'information' => NULL,
                'sample_id' => 2384,
                'user_id' => 13,
                'created_at' => '2025-03-14 16:19:47',
                'updated_at' => '2025-03-14 16:19:47',
            ),
            452 => 
            array (
                'id' => 2018,
                'code' => 'R9-03142025-MET-0317',
                'information' => NULL,
                'sample_id' => 2385,
                'user_id' => 13,
                'created_at' => '2025-03-14 16:19:51',
                'updated_at' => '2025-03-14 16:19:51',
            ),
            453 => 
            array (
                'id' => 2019,
                'code' => 'R9-03142025-MET-0318',
                'information' => NULL,
                'sample_id' => 2930,
                'user_id' => 13,
                'created_at' => '2025-03-14 16:20:17',
                'updated_at' => '2025-03-14 16:20:17',
            ),
            454 => 
            array (
                'id' => 2020,
                'code' => 'R9-03142025-MET-0319',
                'information' => NULL,
                'sample_id' => 2931,
                'user_id' => 13,
                'created_at' => '2025-03-14 16:20:21',
                'updated_at' => '2025-03-14 16:20:21',
            ),
            455 => 
            array (
                'id' => 2021,
                'code' => 'R9-03142025-MET-0320',
                'information' => NULL,
                'sample_id' => 2932,
                'user_id' => 13,
                'created_at' => '2025-03-14 16:20:25',
                'updated_at' => '2025-03-14 16:20:25',
            ),
            456 => 
            array (
                'id' => 2022,
                'code' => 'R9-03142025-MET-0321',
                'information' => NULL,
                'sample_id' => 2933,
                'user_id' => 13,
                'created_at' => '2025-03-14 16:20:29',
                'updated_at' => '2025-03-14 16:20:29',
            ),
            457 => 
            array (
                'id' => 2023,
                'code' => 'R9-03142025-MET-0322',
                'information' => NULL,
                'sample_id' => 2934,
                'user_id' => 13,
                'created_at' => '2025-03-14 16:20:36',
                'updated_at' => '2025-03-14 16:20:36',
            ),
            458 => 
            array (
                'id' => 2024,
                'code' => 'R9-03142025-MET-0323',
                'information' => NULL,
                'sample_id' => 2935,
                'user_id' => 13,
                'created_at' => '2025-03-14 16:20:40',
                'updated_at' => '2025-03-14 16:20:40',
            ),
            459 => 
            array (
                'id' => 2025,
                'code' => 'R9-03142025-MET-0324',
                'information' => NULL,
                'sample_id' => 2936,
                'user_id' => 13,
                'created_at' => '2025-03-14 16:20:49',
                'updated_at' => '2025-03-14 16:20:49',
            ),
            460 => 
            array (
                'id' => 2026,
                'code' => 'R9-03142025-MET-0325',
                'information' => NULL,
                'sample_id' => 2937,
                'user_id' => 13,
                'created_at' => '2025-03-14 16:20:58',
                'updated_at' => '2025-03-14 16:20:58',
            ),
            461 => 
            array (
                'id' => 2027,
                'code' => 'R9-03142025-MET-0326',
                'information' => NULL,
                'sample_id' => 2938,
                'user_id' => 13,
                'created_at' => '2025-03-14 16:21:02',
                'updated_at' => '2025-03-14 16:21:02',
            ),
            462 => 
            array (
                'id' => 2028,
                'code' => 'R9-03142025-MET-0327',
                'information' => NULL,
                'sample_id' => 2939,
                'user_id' => 13,
                'created_at' => '2025-03-14 16:21:10',
                'updated_at' => '2025-03-14 16:21:10',
            ),
            463 => 
            array (
                'id' => 2029,
                'code' => 'R9-03142025-MET-0328',
                'information' => NULL,
                'sample_id' => 2940,
                'user_id' => 13,
                'created_at' => '2025-03-14 16:21:22',
                'updated_at' => '2025-03-14 16:21:22',
            ),
            464 => 
            array (
                'id' => 2030,
                'code' => 'R9-03142025-MET-0329',
                'information' => NULL,
                'sample_id' => 2941,
                'user_id' => 13,
                'created_at' => '2025-03-14 16:21:28',
                'updated_at' => '2025-03-14 16:21:28',
            ),
            465 => 
            array (
                'id' => 2031,
                'code' => 'R9-03142025-MET-0330',
                'information' => NULL,
                'sample_id' => 2942,
                'user_id' => 13,
                'created_at' => '2025-03-14 16:21:32',
                'updated_at' => '2025-03-14 16:21:32',
            ),
            466 => 
            array (
                'id' => 2032,
                'code' => 'R9-03142025-MET-0331',
                'information' => NULL,
                'sample_id' => 2943,
                'user_id' => 13,
                'created_at' => '2025-03-14 16:21:38',
                'updated_at' => '2025-03-14 16:21:38',
            ),
            467 => 
            array (
                'id' => 2033,
                'code' => 'R9-03142025-CHE-0245',
                'information' => NULL,
                'sample_id' => 3443,
                'user_id' => 6,
                'created_at' => '2025-03-14 17:59:47',
                'updated_at' => '2025-03-14 17:59:47',
            ),
            468 => 
            array (
                'id' => 2034,
                'code' => 'R9-03142025-CHE-0246',
                'information' => NULL,
                'sample_id' => 3444,
                'user_id' => 6,
                'created_at' => '2025-03-14 18:00:45',
                'updated_at' => '2025-03-14 18:00:45',
            ),
            469 => 
            array (
                'id' => 2035,
                'code' => 'R9-03142025-CHE-0247',
                'information' => NULL,
                'sample_id' => 3445,
                'user_id' => 6,
                'created_at' => '2025-03-14 18:01:16',
                'updated_at' => '2025-03-14 18:01:16',
            ),
            470 => 
            array (
                'id' => 2036,
                'code' => 'R9-03142025-CHE-0248',
                'information' => NULL,
                'sample_id' => 3446,
                'user_id' => 6,
                'created_at' => '2025-03-14 18:01:48',
                'updated_at' => '2025-03-14 18:01:48',
            ),
            471 => 
            array (
                'id' => 2037,
                'code' => 'R9-03142025-CHE-0249',
                'information' => NULL,
                'sample_id' => 3416,
                'user_id' => 8,
                'created_at' => '2025-03-14 18:18:28',
                'updated_at' => '2025-03-14 18:18:28',
            ),
            472 => 
            array (
                'id' => 2038,
                'code' => 'R9-03142025-CHE-0250',
                'information' => NULL,
                'sample_id' => 3228,
                'user_id' => 8,
                'created_at' => '2025-03-14 18:19:44',
                'updated_at' => '2025-03-14 18:19:44',
            ),
            473 => 
            array (
                'id' => 2039,
                'code' => 'R9-03142025-CHE-0251',
                'information' => NULL,
                'sample_id' => 2836,
                'user_id' => 7,
                'created_at' => '2025-03-14 22:35:40',
                'updated_at' => '2025-03-14 22:35:40',
            ),
            474 => 
            array (
                'id' => 2040,
                'code' => 'R9-03142025-CHE-0252',
                'information' => NULL,
                'sample_id' => 2837,
                'user_id' => 7,
                'created_at' => '2025-03-14 22:36:00',
                'updated_at' => '2025-03-14 22:36:00',
            ),
            475 => 
            array (
                'id' => 2041,
                'code' => 'R9-03142025-CHE-0253',
                'information' => NULL,
                'sample_id' => 2838,
                'user_id' => 7,
                'created_at' => '2025-03-14 22:36:19',
                'updated_at' => '2025-03-14 22:36:19',
            ),
            476 => 
            array (
                'id' => 2042,
                'code' => 'R9-03142025-CHE-0254',
                'information' => NULL,
                'sample_id' => 2839,
                'user_id' => 7,
                'created_at' => '2025-03-14 22:37:08',
                'updated_at' => '2025-03-14 22:37:08',
            ),
            477 => 
            array (
                'id' => 2043,
                'code' => 'R9-03142025-CHE-0255',
                'information' => NULL,
                'sample_id' => 2840,
                'user_id' => 7,
                'created_at' => '2025-03-14 22:37:37',
                'updated_at' => '2025-03-14 22:37:37',
            ),
            478 => 
            array (
                'id' => 2044,
                'code' => 'R9-03142025-CHE-0256',
                'information' => NULL,
                'sample_id' => 2841,
                'user_id' => 7,
                'created_at' => '2025-03-14 22:38:01',
                'updated_at' => '2025-03-14 22:38:01',
            ),
            479 => 
            array (
                'id' => 2045,
                'code' => 'R9-03142025-CHE-0257',
                'information' => NULL,
                'sample_id' => 3107,
                'user_id' => 7,
                'created_at' => '2025-03-14 22:39:10',
                'updated_at' => '2025-03-14 22:39:10',
            ),
            480 => 
            array (
                'id' => 2046,
                'code' => 'R9-03142025-CHE-0258',
                'information' => NULL,
                'sample_id' => 3108,
                'user_id' => 7,
                'created_at' => '2025-03-14 22:39:43',
                'updated_at' => '2025-03-14 22:39:43',
            ),
            481 => 
            array (
                'id' => 2047,
                'code' => 'R9-03142025-CHE-0259',
                'information' => NULL,
                'sample_id' => 3109,
                'user_id' => 7,
                'created_at' => '2025-03-14 22:40:03',
                'updated_at' => '2025-03-14 22:40:03',
            ),
            482 => 
            array (
                'id' => 2048,
                'code' => 'R9-03142025-CHE-0260',
                'information' => NULL,
                'sample_id' => 3110,
                'user_id' => 7,
                'created_at' => '2025-03-14 22:40:31',
                'updated_at' => '2025-03-14 22:40:31',
            ),
            483 => 
            array (
                'id' => 2049,
                'code' => 'R9-03142025-CHE-0261',
                'information' => NULL,
                'sample_id' => 3111,
                'user_id' => 7,
                'created_at' => '2025-03-14 22:40:52',
                'updated_at' => '2025-03-14 22:40:52',
            ),
            484 => 
            array (
                'id' => 2050,
                'code' => 'R9-03142025-CHE-0262',
                'information' => NULL,
                'sample_id' => 3112,
                'user_id' => 7,
                'created_at' => '2025-03-14 22:41:08',
                'updated_at' => '2025-03-14 22:41:08',
            ),
            485 => 
            array (
                'id' => 2051,
                'code' => 'R9-03142025-CHE-0263',
                'information' => NULL,
                'sample_id' => 3113,
                'user_id' => 7,
                'created_at' => '2025-03-14 22:41:28',
                'updated_at' => '2025-03-14 22:41:28',
            ),
            486 => 
            array (
                'id' => 2052,
                'code' => 'R9-03142025-CHE-0264',
                'information' => NULL,
                'sample_id' => 3114,
                'user_id' => 7,
                'created_at' => '2025-03-14 22:42:17',
                'updated_at' => '2025-03-14 22:42:17',
            ),
            487 => 
            array (
                'id' => 2053,
                'code' => 'R9-03142025-CHE-0265',
                'information' => NULL,
                'sample_id' => 3226,
                'user_id' => 8,
                'created_at' => '2025-03-14 23:57:53',
                'updated_at' => '2025-03-14 23:57:53',
            ),
            488 => 
            array (
                'id' => 2054,
                'code' => 'R9-03142025-CHE-0266',
                'information' => NULL,
                'sample_id' => 3220,
                'user_id' => 8,
                'created_at' => '2025-03-15 00:11:09',
                'updated_at' => '2025-03-15 00:11:09',
            ),
            489 => 
            array (
                'id' => 2055,
                'code' => 'R9-03142025-CHE-0267',
                'information' => NULL,
                'sample_id' => 3221,
                'user_id' => 8,
                'created_at' => '2025-03-15 00:11:29',
                'updated_at' => '2025-03-15 00:11:29',
            ),
            490 => 
            array (
                'id' => 2056,
                'code' => 'R9-03172025-MET-0332',
                'information' => NULL,
                'sample_id' => 2424,
                'user_id' => 13,
                'created_at' => '2025-03-17 18:53:55',
                'updated_at' => '2025-03-17 18:53:55',
            ),
            491 => 
            array (
                'id' => 2057,
                'code' => 'R9-03172025-MET-0333',
                'information' => NULL,
                'sample_id' => 2425,
                'user_id' => 13,
                'created_at' => '2025-03-17 18:54:05',
                'updated_at' => '2025-03-17 18:54:05',
            ),
            492 => 
            array (
                'id' => 2058,
                'code' => 'R9-03172025-MET-0334',
                'information' => NULL,
                'sample_id' => 2426,
                'user_id' => 13,
                'created_at' => '2025-03-17 18:54:10',
                'updated_at' => '2025-03-17 18:54:10',
            ),
            493 => 
            array (
                'id' => 2059,
                'code' => 'R9-03172025-MET-0335',
                'information' => NULL,
                'sample_id' => 2427,
                'user_id' => 13,
                'created_at' => '2025-03-17 18:54:14',
                'updated_at' => '2025-03-17 18:54:14',
            ),
            494 => 
            array (
                'id' => 2060,
                'code' => 'R9-03172025-MET-0336',
                'information' => NULL,
                'sample_id' => 2432,
                'user_id' => 13,
                'created_at' => '2025-03-17 19:11:41',
                'updated_at' => '2025-03-17 19:11:41',
            ),
            495 => 
            array (
                'id' => 2061,
                'code' => 'R9-03172025-MET-0337',
                'information' => NULL,
                'sample_id' => 2433,
                'user_id' => 13,
                'created_at' => '2025-03-17 19:11:46',
                'updated_at' => '2025-03-17 19:11:46',
            ),
            496 => 
            array (
                'id' => 2062,
                'code' => 'R9-03172025-MET-0338',
                'information' => NULL,
                'sample_id' => 2434,
                'user_id' => 13,
                'created_at' => '2025-03-17 19:11:51',
                'updated_at' => '2025-03-17 19:11:51',
            ),
            497 => 
            array (
                'id' => 2063,
                'code' => 'R9-03172025-MET-0339',
                'information' => NULL,
                'sample_id' => 2435,
                'user_id' => 13,
                'created_at' => '2025-03-17 19:11:55',
                'updated_at' => '2025-03-17 19:11:55',
            ),
            498 => 
            array (
                'id' => 2064,
                'code' => 'R9-03172025-MET-0340',
                'information' => NULL,
                'sample_id' => 2436,
                'user_id' => 13,
                'created_at' => '2025-03-17 19:12:03',
                'updated_at' => '2025-03-17 19:12:03',
            ),
            499 => 
            array (
                'id' => 2065,
                'code' => 'R9-03172025-MET-0341',
                'information' => NULL,
                'sample_id' => 2437,
                'user_id' => 13,
                'created_at' => '2025-03-17 19:12:09',
                'updated_at' => '2025-03-17 19:12:09',
            ),
        ));
        \DB::table('tsr_sample_reports')->insert(array (
            0 => 
            array (
                'id' => 2066,
                'code' => 'R9-03172025-MET-0342',
                'information' => NULL,
                'sample_id' => 2438,
                'user_id' => 13,
                'created_at' => '2025-03-17 19:12:19',
                'updated_at' => '2025-03-17 19:12:19',
            ),
            1 => 
            array (
                'id' => 2067,
                'code' => 'R9-03172025-MET-0343',
                'information' => NULL,
                'sample_id' => 2439,
                'user_id' => 13,
                'created_at' => '2025-03-17 19:12:24',
                'updated_at' => '2025-03-17 19:12:24',
            ),
            2 => 
            array (
                'id' => 2068,
                'code' => 'R9-03172025-MET-0344',
                'information' => NULL,
                'sample_id' => 2440,
                'user_id' => 13,
                'created_at' => '2025-03-17 19:12:29',
                'updated_at' => '2025-03-17 19:12:29',
            ),
            3 => 
            array (
                'id' => 2069,
                'code' => 'R9-03172025-MET-0345',
                'information' => NULL,
                'sample_id' => 2441,
                'user_id' => 13,
                'created_at' => '2025-03-17 19:12:34',
                'updated_at' => '2025-03-17 19:12:34',
            ),
            4 => 
            array (
                'id' => 2070,
                'code' => 'R9-03172025-MET-0346',
                'information' => NULL,
                'sample_id' => 2442,
                'user_id' => 13,
                'created_at' => '2025-03-17 19:12:38',
                'updated_at' => '2025-03-17 19:12:38',
            ),
            5 => 
            array (
                'id' => 2071,
                'code' => 'R9-03172025-MET-0347',
                'information' => NULL,
                'sample_id' => 2443,
                'user_id' => 13,
                'created_at' => '2025-03-17 19:12:52',
                'updated_at' => '2025-03-17 19:12:52',
            ),
            6 => 
            array (
                'id' => 2072,
                'code' => 'R9-03172025-MET-0348',
                'information' => NULL,
                'sample_id' => 2444,
                'user_id' => 13,
                'created_at' => '2025-03-17 19:12:56',
                'updated_at' => '2025-03-17 19:12:56',
            ),
            7 => 
            array (
                'id' => 2073,
                'code' => 'R9-03172025-MET-0349',
                'information' => NULL,
                'sample_id' => 2445,
                'user_id' => 13,
                'created_at' => '2025-03-17 19:13:03',
                'updated_at' => '2025-03-17 19:13:03',
            ),
            8 => 
            array (
                'id' => 2074,
                'code' => 'R9-03172025-MET-0350',
                'information' => NULL,
                'sample_id' => 2446,
                'user_id' => 13,
                'created_at' => '2025-03-17 19:13:07',
                'updated_at' => '2025-03-17 19:13:07',
            ),
            9 => 
            array (
                'id' => 2075,
                'code' => 'R9-03172025-MET-0351',
                'information' => NULL,
                'sample_id' => 2447,
                'user_id' => 13,
                'created_at' => '2025-03-17 19:13:12',
                'updated_at' => '2025-03-17 19:13:12',
            ),
            10 => 
            array (
                'id' => 2076,
                'code' => 'R9-03172025-MET-0352',
                'information' => NULL,
                'sample_id' => 3415,
                'user_id' => 12,
                'created_at' => '2025-03-17 19:22:12',
                'updated_at' => '2025-03-17 19:22:12',
            ),
            11 => 
            array (
                'id' => 2077,
                'code' => 'R9-03172025-MET-0353',
                'information' => NULL,
                'sample_id' => 3222,
                'user_id' => 12,
                'created_at' => '2025-03-17 19:23:01',
                'updated_at' => '2025-03-17 19:23:01',
            ),
            12 => 
            array (
                'id' => 2078,
                'code' => 'R9-03172025-CHE-0268',
                'information' => NULL,
                'sample_id' => 3229,
                'user_id' => 8,
                'created_at' => '2025-03-17 20:18:48',
                'updated_at' => '2025-03-17 20:18:48',
            ),
            13 => 
            array (
                'id' => 2079,
                'code' => 'R9-03172025-CHE-0269',
                'information' => NULL,
                'sample_id' => 3256,
                'user_id' => 8,
                'created_at' => '2025-03-17 20:19:18',
                'updated_at' => '2025-03-17 20:19:18',
            ),
            14 => 
            array (
                'id' => 2080,
                'code' => 'R9-03172025-MET-0354',
                'information' => NULL,
                'sample_id' => 3389,
                'user_id' => 12,
                'created_at' => '2025-03-17 20:30:27',
                'updated_at' => '2025-03-17 20:30:27',
            ),
            15 => 
            array (
                'id' => 2081,
                'code' => 'R9-03172025-MET-0355',
                'information' => NULL,
                'sample_id' => 3390,
                'user_id' => 12,
                'created_at' => '2025-03-17 20:30:30',
                'updated_at' => '2025-03-17 20:30:30',
            ),
            16 => 
            array (
                'id' => 2082,
                'code' => 'R9-03172025-MET-0356',
                'information' => NULL,
                'sample_id' => 3391,
                'user_id' => 12,
                'created_at' => '2025-03-17 20:30:34',
                'updated_at' => '2025-03-17 20:30:34',
            ),
            17 => 
            array (
                'id' => 2083,
                'code' => 'R9-03172025-MET-0357',
                'information' => NULL,
                'sample_id' => 3392,
                'user_id' => 12,
                'created_at' => '2025-03-17 20:30:46',
                'updated_at' => '2025-03-17 20:30:46',
            ),
            18 => 
            array (
                'id' => 2084,
                'code' => 'R9-03172025-MET-0358',
                'information' => NULL,
                'sample_id' => 3393,
                'user_id' => 12,
                'created_at' => '2025-03-17 20:30:53',
                'updated_at' => '2025-03-17 20:30:53',
            ),
            19 => 
            array (
                'id' => 2085,
                'code' => 'R9-03172025-MET-0359',
                'information' => NULL,
                'sample_id' => 3394,
                'user_id' => 12,
                'created_at' => '2025-03-17 20:30:57',
                'updated_at' => '2025-03-17 20:30:57',
            ),
            20 => 
            array (
                'id' => 2086,
                'code' => 'R9-03172025-MET-0360',
                'information' => NULL,
                'sample_id' => 3395,
                'user_id' => 12,
                'created_at' => '2025-03-17 20:31:01',
                'updated_at' => '2025-03-17 20:31:01',
            ),
            21 => 
            array (
                'id' => 2087,
                'code' => 'R9-03172025-MET-0361',
                'information' => NULL,
                'sample_id' => 3396,
                'user_id' => 12,
                'created_at' => '2025-03-17 20:31:04',
                'updated_at' => '2025-03-17 20:31:04',
            ),
            22 => 
            array (
                'id' => 2088,
                'code' => 'R9-03172025-MET-0362',
                'information' => NULL,
                'sample_id' => 3397,
                'user_id' => 12,
                'created_at' => '2025-03-17 20:31:08',
                'updated_at' => '2025-03-17 20:31:08',
            ),
            23 => 
            array (
                'id' => 2089,
                'code' => 'R9-03172025-MET-0363',
                'information' => NULL,
                'sample_id' => 3398,
                'user_id' => 12,
                'created_at' => '2025-03-17 20:31:15',
                'updated_at' => '2025-03-17 20:31:15',
            ),
            24 => 
            array (
                'id' => 2090,
                'code' => 'R9-03172025-MET-0364',
                'information' => NULL,
                'sample_id' => 3399,
                'user_id' => 12,
                'created_at' => '2025-03-17 20:31:19',
                'updated_at' => '2025-03-17 20:31:19',
            ),
            25 => 
            array (
                'id' => 2091,
                'code' => 'R9-03172025-CHE-0270',
                'information' => NULL,
                'sample_id' => 3268,
                'user_id' => 8,
                'created_at' => '2025-03-17 21:21:24',
                'updated_at' => '2025-03-17 21:21:24',
            ),
            26 => 
            array (
                'id' => 2092,
                'code' => 'R9-03172025-MET-0365',
                'information' => NULL,
                'sample_id' => 2710,
                'user_id' => 12,
                'created_at' => '2025-03-17 22:51:20',
                'updated_at' => '2025-03-17 22:51:20',
            ),
            27 => 
            array (
                'id' => 2093,
                'code' => 'R9-03172025-MET-0366',
                'information' => NULL,
                'sample_id' => 2711,
                'user_id' => 12,
                'created_at' => '2025-03-17 22:52:01',
                'updated_at' => '2025-03-17 22:52:01',
            ),
            28 => 
            array (
                'id' => 2094,
                'code' => 'R9-03172025-MET-0367',
                'information' => NULL,
                'sample_id' => 2428,
                'user_id' => 13,
                'created_at' => '2025-03-17 22:52:11',
                'updated_at' => '2025-03-17 22:52:11',
            ),
            29 => 
            array (
                'id' => 2095,
                'code' => 'R9-03172025-MET-0368',
                'information' => NULL,
                'sample_id' => 2429,
                'user_id' => 13,
                'created_at' => '2025-03-17 22:52:17',
                'updated_at' => '2025-03-17 22:52:17',
            ),
            30 => 
            array (
                'id' => 2096,
                'code' => 'R9-03172025-MET-0369',
                'information' => NULL,
                'sample_id' => 2430,
                'user_id' => 13,
                'created_at' => '2025-03-17 22:52:21',
                'updated_at' => '2025-03-17 22:52:21',
            ),
            31 => 
            array (
                'id' => 2097,
                'code' => 'R9-03172025-MET-0370',
                'information' => NULL,
                'sample_id' => 2431,
                'user_id' => 13,
                'created_at' => '2025-03-17 22:52:26',
                'updated_at' => '2025-03-17 22:52:26',
            ),
            32 => 
            array (
                'id' => 2098,
                'code' => 'R9-03172025-MET-0371',
                'information' => NULL,
                'sample_id' => 2712,
                'user_id' => 12,
                'created_at' => '2025-03-17 22:52:27',
                'updated_at' => '2025-03-17 22:52:27',
            ),
            33 => 
            array (
                'id' => 2099,
                'code' => 'R9-03172025-MET-0372',
                'information' => NULL,
                'sample_id' => 2713,
                'user_id' => 12,
                'created_at' => '2025-03-17 22:53:27',
                'updated_at' => '2025-03-17 22:53:27',
            ),
            34 => 
            array (
                'id' => 2100,
                'code' => 'R9-03172025-CHE-0271',
                'information' => NULL,
                'sample_id' => 3463,
                'user_id' => 7,
                'created_at' => '2025-03-18 00:27:52',
                'updated_at' => '2025-03-18 00:27:52',
            ),
            35 => 
            array (
                'id' => 2101,
                'code' => 'R9-03172025-MIC-0180',
                'information' => NULL,
                'sample_id' => 3342,
                'user_id' => 16,
                'created_at' => '2025-03-18 00:56:43',
                'updated_at' => '2025-03-18 00:56:43',
            ),
            36 => 
            array (
                'id' => 2102,
                'code' => 'R9-03172025-MIC-0181',
                'information' => NULL,
                'sample_id' => 3343,
                'user_id' => 16,
                'created_at' => '2025-03-18 00:57:06',
                'updated_at' => '2025-03-18 00:57:06',
            ),
            37 => 
            array (
                'id' => 2103,
                'code' => 'R9-03172025-MIC-0182',
                'information' => NULL,
                'sample_id' => 3344,
                'user_id' => 16,
                'created_at' => '2025-03-18 00:57:17',
                'updated_at' => '2025-03-18 00:57:17',
            ),
            38 => 
            array (
                'id' => 2104,
                'code' => 'R9-03172025-MIC-0183',
                'information' => NULL,
                'sample_id' => 3345,
                'user_id' => 16,
                'created_at' => '2025-03-18 00:57:35',
                'updated_at' => '2025-03-18 00:57:35',
            ),
            39 => 
            array (
                'id' => 2105,
                'code' => 'R9-03172025-MIC-0184',
                'information' => NULL,
                'sample_id' => 3346,
                'user_id' => 16,
                'created_at' => '2025-03-18 00:57:50',
                'updated_at' => '2025-03-18 00:57:50',
            ),
            40 => 
            array (
                'id' => 2106,
                'code' => 'R9-03182025-CHE-0272',
                'information' => NULL,
                'sample_id' => 3297,
                'user_id' => 8,
                'created_at' => '2025-03-19 00:48:42',
                'updated_at' => '2025-03-19 00:48:42',
            ),
            41 => 
            array (
                'id' => 2107,
                'code' => 'R9-03182025-CHE-0273',
                'information' => NULL,
                'sample_id' => 3375,
                'user_id' => 8,
                'created_at' => '2025-03-19 00:49:08',
                'updated_at' => '2025-03-19 00:49:08',
            ),
            42 => 
            array (
                'id' => 2108,
                'code' => 'R9-03192025-CHE-0274',
                'information' => NULL,
                'sample_id' => 3372,
                'user_id' => 8,
                'created_at' => '2025-03-19 15:31:12',
                'updated_at' => '2025-03-19 15:31:12',
            ),
            43 => 
            array (
                'id' => 2109,
                'code' => 'R9-03192025-CHE-0275',
                'information' => NULL,
                'sample_id' => 3448,
                'user_id' => 8,
                'created_at' => '2025-03-19 15:53:38',
                'updated_at' => '2025-03-19 15:53:38',
            ),
            44 => 
            array (
                'id' => 2110,
                'code' => 'R9-03192025-MIC-0185',
                'information' => NULL,
                'sample_id' => 3347,
                'user_id' => 16,
                'created_at' => '2025-03-19 16:40:13',
                'updated_at' => '2025-03-19 16:40:13',
            ),
            45 => 
            array (
                'id' => 2111,
                'code' => 'R9-03192025-MIC-0186',
                'information' => NULL,
                'sample_id' => 3350,
                'user_id' => 16,
                'created_at' => '2025-03-19 17:07:43',
                'updated_at' => '2025-03-19 17:07:43',
            ),
            46 => 
            array (
                'id' => 2112,
                'code' => 'R9-03192025-MIC-0187',
                'information' => NULL,
                'sample_id' => 3351,
                'user_id' => 16,
                'created_at' => '2025-03-19 17:08:11',
                'updated_at' => '2025-03-19 17:08:11',
            ),
            47 => 
            array (
                'id' => 2113,
                'code' => 'R9-03192025-MIC-0188',
                'information' => NULL,
                'sample_id' => 3352,
                'user_id' => 16,
                'created_at' => '2025-03-19 17:08:19',
                'updated_at' => '2025-03-19 17:08:19',
            ),
            48 => 
            array (
                'id' => 2114,
                'code' => 'R9-03192025-MIC-0189',
                'information' => NULL,
                'sample_id' => 3353,
                'user_id' => 16,
                'created_at' => '2025-03-19 17:19:16',
                'updated_at' => '2025-03-19 17:19:16',
            ),
            49 => 
            array (
                'id' => 2115,
                'code' => 'R9-03192025-MIC-0190',
                'information' => NULL,
                'sample_id' => 3354,
                'user_id' => 16,
                'created_at' => '2025-03-19 17:19:42',
                'updated_at' => '2025-03-19 17:19:42',
            ),
            50 => 
            array (
                'id' => 2116,
                'code' => 'R9-03192025-MIC-0191',
                'information' => NULL,
                'sample_id' => 3366,
                'user_id' => 16,
                'created_at' => '2025-03-19 17:24:02',
                'updated_at' => '2025-03-19 17:24:02',
            ),
            51 => 
            array (
                'id' => 2117,
                'code' => 'R9-03192025-MIC-0192',
                'information' => NULL,
                'sample_id' => 3367,
                'user_id' => 16,
                'created_at' => '2025-03-19 17:24:33',
                'updated_at' => '2025-03-19 17:24:33',
            ),
            52 => 
            array (
                'id' => 2118,
                'code' => 'R9-03192025-MIC-0193',
                'information' => NULL,
                'sample_id' => 3368,
                'user_id' => 16,
                'created_at' => '2025-03-19 17:24:41',
                'updated_at' => '2025-03-19 17:24:41',
            ),
            53 => 
            array (
                'id' => 2119,
                'code' => 'R9-03192025-MIC-0194',
                'information' => NULL,
                'sample_id' => 3369,
                'user_id' => 16,
                'created_at' => '2025-03-19 17:24:48',
                'updated_at' => '2025-03-19 17:24:48',
            ),
            54 => 
            array (
                'id' => 2120,
                'code' => 'R9-03192025-MIC-0195',
                'information' => NULL,
                'sample_id' => 3370,
                'user_id' => 16,
                'created_at' => '2025-03-19 17:25:02',
                'updated_at' => '2025-03-19 17:25:02',
            ),
            55 => 
            array (
                'id' => 2121,
                'code' => 'R9-03192025-MET-0373',
                'information' => NULL,
                'sample_id' => 3489,
                'user_id' => 13,
                'created_at' => '2025-03-19 18:15:34',
                'updated_at' => '2025-03-19 18:15:34',
            ),
            56 => 
            array (
                'id' => 2122,
                'code' => 'R9-03192025-MIC-0196',
                'information' => NULL,
                'sample_id' => 3371,
                'user_id' => 16,
                'created_at' => '2025-03-19 21:30:35',
                'updated_at' => '2025-03-19 21:30:35',
            ),
            57 => 
            array (
                'id' => 2123,
                'code' => 'R9-03192025-MIC-0197',
                'information' => NULL,
                'sample_id' => 3379,
                'user_id' => 16,
                'created_at' => '2025-03-19 21:37:43',
                'updated_at' => '2025-03-19 21:37:43',
            ),
            58 => 
            array (
                'id' => 2124,
                'code' => 'R9-03192025-MIC-0198',
                'information' => NULL,
                'sample_id' => 3380,
                'user_id' => 16,
                'created_at' => '2025-03-19 21:38:28',
                'updated_at' => '2025-03-19 21:38:28',
            ),
            59 => 
            array (
                'id' => 2125,
                'code' => 'R9-03192025-MIC-0199',
                'information' => NULL,
                'sample_id' => 3381,
                'user_id' => 16,
                'created_at' => '2025-03-19 21:38:39',
                'updated_at' => '2025-03-19 21:38:39',
            ),
            60 => 
            array (
                'id' => 2126,
                'code' => 'R9-03192025-MET-0374',
                'information' => NULL,
                'sample_id' => 2721,
                'user_id' => 12,
                'created_at' => '2025-03-19 23:21:15',
                'updated_at' => '2025-03-19 23:21:15',
            ),
            61 => 
            array (
                'id' => 2127,
                'code' => 'R9-03192025-MET-0375',
                'information' => NULL,
                'sample_id' => 2722,
                'user_id' => 12,
                'created_at' => '2025-03-19 23:21:41',
                'updated_at' => '2025-03-19 23:21:41',
            ),
            62 => 
            array (
                'id' => 2128,
                'code' => 'R9-03192025-MET-0376',
                'information' => NULL,
                'sample_id' => 2723,
                'user_id' => 12,
                'created_at' => '2025-03-19 23:22:13',
                'updated_at' => '2025-03-19 23:22:13',
            ),
            63 => 
            array (
                'id' => 2129,
                'code' => 'R9-03192025-MET-0377',
                'information' => NULL,
                'sample_id' => 2724,
                'user_id' => 12,
                'created_at' => '2025-03-19 23:22:47',
                'updated_at' => '2025-03-19 23:22:47',
            ),
            64 => 
            array (
                'id' => 2130,
                'code' => 'R9-03192025-MET-0378',
                'information' => NULL,
                'sample_id' => 2725,
                'user_id' => 12,
                'created_at' => '2025-03-19 23:23:12',
                'updated_at' => '2025-03-19 23:23:12',
            ),
            65 => 
            array (
                'id' => 2131,
                'code' => 'R9-03192025-MET-0379',
                'information' => NULL,
                'sample_id' => 2726,
                'user_id' => 12,
                'created_at' => '2025-03-19 23:23:38',
                'updated_at' => '2025-03-19 23:23:38',
            ),
            66 => 
            array (
                'id' => 2132,
                'code' => 'R9-03202025-CHE-0276',
                'information' => NULL,
                'sample_id' => 3340,
                'user_id' => 7,
                'created_at' => '2025-03-20 17:55:43',
                'updated_at' => '2025-03-20 17:55:43',
            ),
            67 => 
            array (
                'id' => 2133,
                'code' => 'R9-03202025-MET-0380',
                'information' => NULL,
                'sample_id' => 3349,
                'user_id' => 13,
                'created_at' => '2025-03-20 18:57:10',
                'updated_at' => '2025-03-20 18:57:10',
            ),
            68 => 
            array (
                'id' => 2134,
                'code' => 'R9-03202025-CHE-0277',
                'information' => NULL,
                'sample_id' => 3142,
                'user_id' => 8,
                'created_at' => '2025-03-20 20:10:50',
                'updated_at' => '2025-03-20 20:10:50',
            ),
            69 => 
            array (
                'id' => 2135,
                'code' => 'R9-03202025-CHE-0278',
                'information' => NULL,
                'sample_id' => 3143,
                'user_id' => 8,
                'created_at' => '2025-03-20 20:10:56',
                'updated_at' => '2025-03-20 20:10:56',
            ),
            70 => 
            array (
                'id' => 2136,
                'code' => 'R9-03202025-CHE-0279',
                'information' => NULL,
                'sample_id' => 3144,
                'user_id' => 8,
                'created_at' => '2025-03-20 20:11:02',
                'updated_at' => '2025-03-20 20:11:02',
            ),
            71 => 
            array (
                'id' => 2137,
                'code' => 'R9-03202025-CHE-0280',
                'information' => NULL,
                'sample_id' => 3145,
                'user_id' => 8,
                'created_at' => '2025-03-20 20:11:07',
                'updated_at' => '2025-03-20 20:11:07',
            ),
            72 => 
            array (
                'id' => 2138,
                'code' => 'R9-03212025-CHE-0281',
                'information' => NULL,
                'sample_id' => 3235,
                'user_id' => 8,
                'created_at' => '2025-03-21 16:56:58',
                'updated_at' => '2025-03-21 16:56:58',
            ),
            73 => 
            array (
                'id' => 2139,
                'code' => 'R9-03212025-CHE-0282',
                'information' => NULL,
                'sample_id' => 3498,
                'user_id' => 8,
                'created_at' => '2025-03-21 17:03:52',
                'updated_at' => '2025-03-21 17:03:52',
            ),
            74 => 
            array (
                'id' => 2140,
                'code' => 'R9-03212025-CHE-0283',
                'information' => NULL,
                'sample_id' => 3499,
                'user_id' => 8,
                'created_at' => '2025-03-21 17:04:09',
                'updated_at' => '2025-03-21 17:04:09',
            ),
            75 => 
            array (
                'id' => 2141,
                'code' => 'R9-03212025-CHE-0284',
                'information' => NULL,
                'sample_id' => 3500,
                'user_id' => 8,
                'created_at' => '2025-03-21 17:04:17',
                'updated_at' => '2025-03-21 17:04:17',
            ),
            76 => 
            array (
                'id' => 2142,
                'code' => 'R9-03212025-CHE-0285',
                'information' => NULL,
                'sample_id' => 3355,
                'user_id' => 8,
                'created_at' => '2025-03-21 17:26:36',
                'updated_at' => '2025-03-21 17:26:36',
            ),
            77 => 
            array (
                'id' => 2143,
                'code' => 'R9-03212025-CHE-0286',
                'information' => NULL,
                'sample_id' => 3356,
                'user_id' => 8,
                'created_at' => '2025-03-21 17:26:56',
                'updated_at' => '2025-03-21 17:26:56',
            ),
            78 => 
            array (
                'id' => 2144,
                'code' => 'R9-03212025-CHE-0287',
                'information' => NULL,
                'sample_id' => 3357,
                'user_id' => 8,
                'created_at' => '2025-03-21 17:28:53',
                'updated_at' => '2025-03-21 17:28:53',
            ),
            79 => 
            array (
                'id' => 2145,
                'code' => 'R9-03212025-CHE-0288',
                'information' => NULL,
                'sample_id' => 3358,
                'user_id' => 8,
                'created_at' => '2025-03-21 17:28:59',
                'updated_at' => '2025-03-21 17:28:59',
            ),
            80 => 
            array (
                'id' => 2146,
                'code' => 'R9-03212025-CHE-0289',
                'information' => NULL,
                'sample_id' => 3359,
                'user_id' => 8,
                'created_at' => '2025-03-21 17:29:15',
                'updated_at' => '2025-03-21 17:29:15',
            ),
            81 => 
            array (
                'id' => 2147,
                'code' => 'R9-03212025-CHE-0290',
                'information' => NULL,
                'sample_id' => 3360,
                'user_id' => 8,
                'created_at' => '2025-03-21 17:29:27',
                'updated_at' => '2025-03-21 17:29:27',
            ),
            82 => 
            array (
                'id' => 2148,
                'code' => 'R9-03212025-CHE-0291',
                'information' => NULL,
                'sample_id' => 3361,
                'user_id' => 8,
                'created_at' => '2025-03-21 17:29:33',
                'updated_at' => '2025-03-21 17:29:33',
            ),
            83 => 
            array (
                'id' => 2149,
                'code' => 'R9-03212025-CHE-0292',
                'information' => NULL,
                'sample_id' => 3362,
                'user_id' => 8,
                'created_at' => '2025-03-21 17:29:37',
                'updated_at' => '2025-03-21 17:29:37',
            ),
            84 => 
            array (
                'id' => 2150,
                'code' => 'R9-03212025-CHE-0293',
                'information' => NULL,
                'sample_id' => 3363,
                'user_id' => 8,
                'created_at' => '2025-03-21 17:29:47',
                'updated_at' => '2025-03-21 17:29:47',
            ),
            85 => 
            array (
                'id' => 2151,
                'code' => 'R9-03212025-CHE-0294',
                'information' => NULL,
                'sample_id' => 3364,
                'user_id' => 8,
                'created_at' => '2025-03-21 17:29:57',
                'updated_at' => '2025-03-21 17:29:57',
            ),
            86 => 
            array (
                'id' => 2152,
                'code' => 'R9-03212025-CHE-0295',
                'information' => NULL,
                'sample_id' => 3365,
                'user_id' => 8,
                'created_at' => '2025-03-21 17:30:02',
                'updated_at' => '2025-03-21 17:30:02',
            ),
            87 => 
            array (
                'id' => 2153,
                'code' => 'R9-03212025-CHE-0296',
                'information' => NULL,
                'sample_id' => 3239,
                'user_id' => 8,
                'created_at' => '2025-03-21 20:18:52',
                'updated_at' => '2025-03-21 20:18:52',
            ),
            88 => 
            array (
                'id' => 2154,
                'code' => 'R9-03212025-MET-0381',
                'information' => NULL,
                'sample_id' => 2771,
                'user_id' => 12,
                'created_at' => '2025-03-21 21:42:37',
                'updated_at' => '2025-03-21 21:42:37',
            ),
            89 => 
            array (
                'id' => 2155,
                'code' => 'R9-03212025-MET-0382',
                'information' => NULL,
                'sample_id' => 2772,
                'user_id' => 12,
                'created_at' => '2025-03-21 21:43:03',
                'updated_at' => '2025-03-21 21:43:03',
            ),
            90 => 
            array (
                'id' => 2156,
                'code' => 'R9-03212025-MET-0383',
                'information' => NULL,
                'sample_id' => 2773,
                'user_id' => 12,
                'created_at' => '2025-03-21 21:43:32',
                'updated_at' => '2025-03-21 21:43:32',
            ),
            91 => 
            array (
                'id' => 2157,
                'code' => 'R9-03212025-MET-0384',
                'information' => NULL,
                'sample_id' => 2774,
                'user_id' => 12,
                'created_at' => '2025-03-21 21:44:27',
                'updated_at' => '2025-03-21 21:44:27',
            ),
            92 => 
            array (
                'id' => 2158,
                'code' => 'R9-03212025-MET-0385',
                'information' => NULL,
                'sample_id' => 2775,
                'user_id' => 12,
                'created_at' => '2025-03-21 21:44:54',
                'updated_at' => '2025-03-21 21:44:54',
            ),
            93 => 
            array (
                'id' => 2159,
                'code' => 'R9-03212025-MET-0386',
                'information' => NULL,
                'sample_id' => 2607,
                'user_id' => 12,
                'created_at' => '2025-03-21 21:52:44',
                'updated_at' => '2025-03-21 21:52:44',
            ),
            94 => 
            array (
                'id' => 2160,
                'code' => 'R9-03212025-MET-0387',
                'information' => NULL,
                'sample_id' => 2608,
                'user_id' => 12,
                'created_at' => '2025-03-21 21:53:29',
                'updated_at' => '2025-03-21 21:53:29',
            ),
            95 => 
            array (
                'id' => 2161,
                'code' => 'R9-03212025-MET-0388',
                'information' => NULL,
                'sample_id' => 2609,
                'user_id' => 12,
                'created_at' => '2025-03-21 21:53:47',
                'updated_at' => '2025-03-21 21:53:47',
            ),
            96 => 
            array (
                'id' => 2162,
                'code' => 'R9-03222025-MIC-0200',
                'information' => NULL,
                'sample_id' => 3458,
                'user_id' => 16,
                'created_at' => '2025-03-23 04:21:52',
                'updated_at' => '2025-03-23 04:21:52',
            ),
            97 => 
            array (
                'id' => 2163,
                'code' => 'R9-03222025-MIC-0201',
                'information' => NULL,
                'sample_id' => 3459,
                'user_id' => 16,
                'created_at' => '2025-03-23 04:22:28',
                'updated_at' => '2025-03-23 04:22:28',
            ),
            98 => 
            array (
                'id' => 2164,
                'code' => 'R9-03222025-MIC-0202',
                'information' => NULL,
                'sample_id' => 3460,
                'user_id' => 16,
                'created_at' => '2025-03-23 04:22:37',
                'updated_at' => '2025-03-23 04:22:37',
            ),
            99 => 
            array (
                'id' => 2165,
                'code' => 'R9-03222025-MIC-0203',
                'information' => NULL,
                'sample_id' => 3461,
                'user_id' => 16,
                'created_at' => '2025-03-23 04:22:47',
                'updated_at' => '2025-03-23 04:22:47',
            ),
            100 => 
            array (
                'id' => 2166,
                'code' => 'R9-03222025-MIC-0204',
                'information' => NULL,
                'sample_id' => 3462,
                'user_id' => 16,
                'created_at' => '2025-03-23 04:22:53',
                'updated_at' => '2025-03-23 04:22:53',
            ),
            101 => 
            array (
                'id' => 2167,
                'code' => 'R9-03222025-MIC-0205',
                'information' => NULL,
                'sample_id' => 3480,
                'user_id' => 16,
                'created_at' => '2025-03-23 04:23:22',
                'updated_at' => '2025-03-23 04:23:22',
            ),
            102 => 
            array (
                'id' => 2168,
                'code' => 'R9-03222025-MIC-0206',
                'information' => NULL,
                'sample_id' => 3481,
                'user_id' => 16,
                'created_at' => '2025-03-23 04:23:55',
                'updated_at' => '2025-03-23 04:23:55',
            ),
            103 => 
            array (
                'id' => 2169,
                'code' => 'R9-03222025-MIC-0207',
                'information' => NULL,
                'sample_id' => 3482,
                'user_id' => 16,
                'created_at' => '2025-03-23 04:24:20',
                'updated_at' => '2025-03-23 04:24:20',
            ),
            104 => 
            array (
                'id' => 2170,
                'code' => 'R9-03222025-MIC-0208',
                'information' => NULL,
                'sample_id' => 3483,
                'user_id' => 16,
                'created_at' => '2025-03-23 04:24:37',
                'updated_at' => '2025-03-23 04:24:37',
            ),
            105 => 
            array (
                'id' => 2171,
                'code' => 'R9-03222025-MIC-0209',
                'information' => NULL,
                'sample_id' => 3484,
                'user_id' => 16,
                'created_at' => '2025-03-23 04:24:59',
                'updated_at' => '2025-03-23 04:24:59',
            ),
            106 => 
            array (
                'id' => 2172,
                'code' => 'R9-03222025-MIC-0210',
                'information' => NULL,
                'sample_id' => 3485,
                'user_id' => 16,
                'created_at' => '2025-03-23 04:25:24',
                'updated_at' => '2025-03-23 04:25:24',
            ),
            107 => 
            array (
                'id' => 2173,
                'code' => 'R9-03222025-MIC-0211',
                'information' => NULL,
                'sample_id' => 3486,
                'user_id' => 16,
                'created_at' => '2025-03-23 04:25:33',
                'updated_at' => '2025-03-23 04:25:33',
            ),
            108 => 
            array (
                'id' => 2174,
                'code' => 'R9-03222025-MIC-0212',
                'information' => NULL,
                'sample_id' => 3487,
                'user_id' => 16,
                'created_at' => '2025-03-23 04:26:05',
                'updated_at' => '2025-03-23 04:26:05',
            ),
            109 => 
            array (
                'id' => 2175,
                'code' => 'R9-03242025-CHE-0297',
                'information' => NULL,
                'sample_id' => 2577,
                'user_id' => 8,
                'created_at' => '2025-03-24 16:38:45',
                'updated_at' => '2025-03-24 16:38:45',
            ),
            110 => 
            array (
                'id' => 2176,
                'code' => 'R9-03242025-CHE-0298',
                'information' => NULL,
                'sample_id' => 2578,
                'user_id' => 8,
                'created_at' => '2025-03-24 16:38:53',
                'updated_at' => '2025-03-24 16:38:53',
            ),
            111 => 
            array (
                'id' => 2177,
                'code' => 'R9-03242025-CHE-0299',
                'information' => NULL,
                'sample_id' => 2579,
                'user_id' => 8,
                'created_at' => '2025-03-24 16:38:58',
                'updated_at' => '2025-03-24 16:38:58',
            ),
            112 => 
            array (
                'id' => 2178,
                'code' => 'R9-03242025-CHE-0300',
                'information' => NULL,
                'sample_id' => 2580,
                'user_id' => 8,
                'created_at' => '2025-03-24 16:39:08',
                'updated_at' => '2025-03-24 16:39:08',
            ),
            113 => 
            array (
                'id' => 2179,
                'code' => 'R9-03242025-CHE-0301',
                'information' => NULL,
                'sample_id' => 2581,
                'user_id' => 8,
                'created_at' => '2025-03-24 16:39:13',
                'updated_at' => '2025-03-24 16:39:13',
            ),
            114 => 
            array (
                'id' => 2180,
                'code' => 'R9-03242025-CHE-0302',
                'information' => NULL,
                'sample_id' => 2582,
                'user_id' => 8,
                'created_at' => '2025-03-24 16:39:24',
                'updated_at' => '2025-03-24 16:39:24',
            ),
            115 => 
            array (
                'id' => 2181,
                'code' => 'R9-03242025-CHE-0303',
                'information' => NULL,
                'sample_id' => 2583,
                'user_id' => 8,
                'created_at' => '2025-03-24 16:39:29',
                'updated_at' => '2025-03-24 16:39:29',
            ),
            116 => 
            array (
                'id' => 2182,
                'code' => 'R9-03242025-CHE-0304',
                'information' => NULL,
                'sample_id' => 2584,
                'user_id' => 8,
                'created_at' => '2025-03-24 16:39:34',
                'updated_at' => '2025-03-24 16:39:34',
            ),
            117 => 
            array (
                'id' => 2183,
                'code' => 'R9-03242025-CHE-0305',
                'information' => NULL,
                'sample_id' => 2585,
                'user_id' => 8,
                'created_at' => '2025-03-24 16:39:40',
                'updated_at' => '2025-03-24 16:39:40',
            ),
            118 => 
            array (
                'id' => 2184,
                'code' => 'R9-03242025-CHE-0306',
                'information' => NULL,
                'sample_id' => 2586,
                'user_id' => 8,
                'created_at' => '2025-03-24 16:39:45',
                'updated_at' => '2025-03-24 16:39:45',
            ),
            119 => 
            array (
                'id' => 2185,
                'code' => 'R9-03242025-MET-0389',
                'information' => NULL,
                'sample_id' => 2908,
                'user_id' => 12,
                'created_at' => '2025-03-24 18:16:47',
                'updated_at' => '2025-03-24 18:16:47',
            ),
            120 => 
            array (
                'id' => 2186,
                'code' => 'R9-03242025-MET-0390',
                'information' => NULL,
                'sample_id' => 2909,
                'user_id' => 12,
                'created_at' => '2025-03-24 18:17:19',
                'updated_at' => '2025-03-24 18:17:19',
            ),
            121 => 
            array (
                'id' => 2187,
                'code' => 'R9-03242025-MET-0391',
                'information' => NULL,
                'sample_id' => 3579,
                'user_id' => 13,
                'created_at' => '2025-03-24 18:18:46',
                'updated_at' => '2025-03-24 18:18:46',
            ),
            122 => 
            array (
                'id' => 2188,
                'code' => 'R9-03242025-CHE-0307',
                'information' => NULL,
                'sample_id' => 3159,
                'user_id' => 7,
                'created_at' => '2025-03-24 21:01:49',
                'updated_at' => '2025-03-24 21:01:49',
            ),
            123 => 
            array (
                'id' => 2189,
                'code' => 'R9-03242025-CHE-0308',
                'information' => NULL,
                'sample_id' => 3531,
                'user_id' => 8,
                'created_at' => '2025-03-25 00:15:36',
                'updated_at' => '2025-03-25 00:15:36',
            ),
            124 => 
            array (
                'id' => 2190,
                'code' => 'R9-03242025-CHE-0309',
                'information' => NULL,
                'sample_id' => 3532,
                'user_id' => 8,
                'created_at' => '2025-03-25 00:21:57',
                'updated_at' => '2025-03-25 00:21:57',
            ),
            125 => 
            array (
                'id' => 2191,
                'code' => 'R9-03242025-CHE-0310',
                'information' => NULL,
                'sample_id' => 3501,
                'user_id' => 8,
                'created_at' => '2025-03-25 04:59:33',
                'updated_at' => '2025-03-25 04:59:33',
            ),
            126 => 
            array (
                'id' => 2192,
                'code' => 'R9-03252025-CHE-0311',
                'information' => NULL,
                'sample_id' => 3269,
                'user_id' => 8,
                'created_at' => '2025-03-25 17:13:59',
                'updated_at' => '2025-03-25 17:13:59',
            ),
            127 => 
            array (
                'id' => 2193,
                'code' => 'R9-03252025-CHE-0312',
                'information' => NULL,
                'sample_id' => 3270,
                'user_id' => 8,
                'created_at' => '2025-03-25 17:14:16',
                'updated_at' => '2025-03-25 17:14:16',
            ),
            128 => 
            array (
                'id' => 2194,
                'code' => 'R9-03252025-CHE-0313',
                'information' => NULL,
                'sample_id' => 3271,
                'user_id' => 8,
                'created_at' => '2025-03-25 17:14:20',
                'updated_at' => '2025-03-25 17:14:20',
            ),
            129 => 
            array (
                'id' => 2195,
                'code' => 'R9-03252025-CHE-0314',
                'information' => NULL,
                'sample_id' => 3272,
                'user_id' => 8,
                'created_at' => '2025-03-25 17:14:26',
                'updated_at' => '2025-03-25 17:14:26',
            ),
            130 => 
            array (
                'id' => 2196,
                'code' => 'R9-03252025-CHE-0315',
                'information' => NULL,
                'sample_id' => 3298,
                'user_id' => 8,
                'created_at' => '2025-03-25 17:14:54',
                'updated_at' => '2025-03-25 17:14:54',
            ),
            131 => 
            array (
                'id' => 2197,
                'code' => 'R9-03252025-CHE-0316',
                'information' => NULL,
                'sample_id' => 3299,
                'user_id' => 8,
                'created_at' => '2025-03-25 17:15:10',
                'updated_at' => '2025-03-25 17:15:10',
            ),
            132 => 
            array (
                'id' => 2198,
                'code' => 'R9-03252025-CHE-0317',
                'information' => NULL,
                'sample_id' => 3300,
                'user_id' => 8,
                'created_at' => '2025-03-25 17:15:15',
                'updated_at' => '2025-03-25 17:15:15',
            ),
            133 => 
            array (
                'id' => 2199,
                'code' => 'R9-03252025-CHE-0318',
                'information' => NULL,
                'sample_id' => 3301,
                'user_id' => 8,
                'created_at' => '2025-03-25 17:15:24',
                'updated_at' => '2025-03-25 17:15:24',
            ),
            134 => 
            array (
                'id' => 2200,
                'code' => 'R9-03252025-CHE-0319',
                'information' => NULL,
                'sample_id' => 3302,
                'user_id' => 8,
                'created_at' => '2025-03-25 17:15:31',
                'updated_at' => '2025-03-25 17:15:31',
            ),
            135 => 
            array (
                'id' => 2201,
                'code' => 'R9-03252025-CHE-0320',
                'information' => NULL,
                'sample_id' => 3341,
                'user_id' => 8,
                'created_at' => '2025-03-25 17:17:22',
                'updated_at' => '2025-03-25 17:17:22',
            ),
            136 => 
            array (
                'id' => 2202,
                'code' => 'R9-03252025-CHE-0321',
                'information' => NULL,
                'sample_id' => 3534,
                'user_id' => 8,
                'created_at' => '2025-03-26 03:31:41',
                'updated_at' => '2025-03-26 03:31:41',
            ),
            137 => 
            array (
                'id' => 2203,
                'code' => 'R9-03262025-CHE-0322',
                'information' => NULL,
                'sample_id' => 3577,
                'user_id' => 8,
                'created_at' => '2025-03-26 15:37:31',
                'updated_at' => '2025-03-26 15:37:31',
            ),
            138 => 
            array (
                'id' => 2204,
                'code' => 'R9-03262025-CHE-0323',
                'information' => NULL,
                'sample_id' => 3578,
                'user_id' => 8,
                'created_at' => '2025-03-26 15:38:03',
                'updated_at' => '2025-03-26 15:38:03',
            ),
            139 => 
            array (
                'id' => 2205,
                'code' => 'R9-03262025-MET-0392',
                'information' => NULL,
                'sample_id' => 3631,
                'user_id' => 13,
                'created_at' => '2025-03-26 18:57:14',
                'updated_at' => '2025-03-26 18:57:14',
            ),
            140 => 
            array (
                'id' => 2206,
                'code' => 'R9-03262025-MET-0393',
                'information' => NULL,
                'sample_id' => 3632,
                'user_id' => 13,
                'created_at' => '2025-03-26 18:57:18',
                'updated_at' => '2025-03-26 18:57:18',
            ),
            141 => 
            array (
                'id' => 2207,
                'code' => 'R9-03262025-CHE-0324',
                'information' => NULL,
                'sample_id' => 3348,
                'user_id' => 7,
                'created_at' => '2025-03-26 19:25:30',
                'updated_at' => '2025-03-26 19:25:30',
            ),
            142 => 
            array (
                'id' => 2208,
                'code' => 'R9-03262025-CHE-0325',
                'information' => NULL,
                'sample_id' => 3479,
                'user_id' => 7,
                'created_at' => '2025-03-26 21:21:09',
                'updated_at' => '2025-03-26 21:21:09',
            ),
            143 => 
            array (
                'id' => 2209,
                'code' => 'R9-03262025-MIC-0213',
                'information' => NULL,
                'sample_id' => 3468,
                'user_id' => 16,
                'created_at' => '2025-03-27 00:10:20',
                'updated_at' => '2025-03-27 00:10:20',
            ),
            144 => 
            array (
                'id' => 2210,
                'code' => 'R9-03262025-MIC-0214',
                'information' => NULL,
                'sample_id' => 3469,
                'user_id' => 16,
                'created_at' => '2025-03-27 00:10:54',
                'updated_at' => '2025-03-27 00:10:54',
            ),
            145 => 
            array (
                'id' => 2211,
                'code' => 'R9-03262025-MIC-0215',
                'information' => NULL,
                'sample_id' => 3470,
                'user_id' => 16,
                'created_at' => '2025-03-27 00:11:03',
                'updated_at' => '2025-03-27 00:11:03',
            ),
            146 => 
            array (
                'id' => 2212,
                'code' => 'R9-03262025-MIC-0216',
                'information' => NULL,
                'sample_id' => 3471,
                'user_id' => 16,
                'created_at' => '2025-03-27 00:11:15',
                'updated_at' => '2025-03-27 00:11:15',
            ),
            147 => 
            array (
                'id' => 2213,
                'code' => 'R9-03262025-MIC-0217',
                'information' => NULL,
                'sample_id' => 3472,
                'user_id' => 16,
                'created_at' => '2025-03-27 00:11:38',
                'updated_at' => '2025-03-27 00:11:38',
            ),
            148 => 
            array (
                'id' => 2214,
                'code' => 'R9-03262025-MIC-0218',
                'information' => NULL,
                'sample_id' => 3473,
                'user_id' => 16,
                'created_at' => '2025-03-27 00:12:14',
                'updated_at' => '2025-03-27 00:12:14',
            ),
            149 => 
            array (
                'id' => 2215,
                'code' => 'R9-03262025-MIC-0219',
                'information' => NULL,
                'sample_id' => 3474,
                'user_id' => 16,
                'created_at' => '2025-03-27 00:12:20',
                'updated_at' => '2025-03-27 00:12:20',
            ),
            150 => 
            array (
                'id' => 2216,
                'code' => 'R9-03262025-MIC-0220',
                'information' => NULL,
                'sample_id' => 3475,
                'user_id' => 16,
                'created_at' => '2025-03-27 00:12:32',
                'updated_at' => '2025-03-27 00:12:32',
            ),
            151 => 
            array (
                'id' => 2217,
                'code' => 'R9-03272025-MET-0394',
                'information' => NULL,
                'sample_id' => 3454,
                'user_id' => 12,
                'created_at' => '2025-03-27 16:27:08',
                'updated_at' => '2025-03-27 16:27:08',
            ),
            152 => 
            array (
                'id' => 2218,
                'code' => 'R9-03272025-MET-0395',
                'information' => NULL,
                'sample_id' => 3455,
                'user_id' => 12,
                'created_at' => '2025-03-27 16:27:21',
                'updated_at' => '2025-03-27 16:27:21',
            ),
            153 => 
            array (
                'id' => 2219,
                'code' => 'R9-03272025-MET-0396',
                'information' => NULL,
                'sample_id' => 3456,
                'user_id' => 12,
                'created_at' => '2025-03-27 16:27:34',
                'updated_at' => '2025-03-27 16:27:34',
            ),
            154 => 
            array (
                'id' => 2220,
                'code' => 'R9-03272025-MET-0397',
                'information' => NULL,
                'sample_id' => 3457,
                'user_id' => 12,
                'created_at' => '2025-03-27 16:27:51',
                'updated_at' => '2025-03-27 16:27:51',
            ),
            155 => 
            array (
                'id' => 2221,
                'code' => 'R9-03272025-CHE-0326',
                'information' => NULL,
                'sample_id' => 3273,
                'user_id' => 8,
                'created_at' => '2025-03-27 19:58:55',
                'updated_at' => '2025-03-27 19:58:55',
            ),
            156 => 
            array (
                'id' => 2222,
                'code' => 'R9-03272025-CHE-0327',
                'information' => NULL,
                'sample_id' => 3274,
                'user_id' => 8,
                'created_at' => '2025-03-27 19:59:00',
                'updated_at' => '2025-03-27 19:59:00',
            ),
            157 => 
            array (
                'id' => 2223,
                'code' => 'R9-03272025-CHE-0328',
                'information' => NULL,
                'sample_id' => 3275,
                'user_id' => 8,
                'created_at' => '2025-03-27 19:59:06',
                'updated_at' => '2025-03-27 19:59:06',
            ),
            158 => 
            array (
                'id' => 2224,
                'code' => 'R9-03272025-CHE-0329',
                'information' => NULL,
                'sample_id' => 3276,
                'user_id' => 8,
                'created_at' => '2025-03-27 19:59:15',
                'updated_at' => '2025-03-27 19:59:15',
            ),
            159 => 
            array (
                'id' => 2225,
                'code' => 'R9-03272025-CHE-0330',
                'information' => NULL,
                'sample_id' => 3277,
                'user_id' => 8,
                'created_at' => '2025-03-27 19:59:21',
                'updated_at' => '2025-03-27 19:59:21',
            ),
            160 => 
            array (
                'id' => 2226,
                'code' => 'R9-03272025-CHE-0331',
                'information' => NULL,
                'sample_id' => 3278,
                'user_id' => 8,
                'created_at' => '2025-03-27 19:59:26',
                'updated_at' => '2025-03-27 19:59:26',
            ),
            161 => 
            array (
                'id' => 2227,
                'code' => 'R9-03272025-CHE-0332',
                'information' => NULL,
                'sample_id' => 3279,
                'user_id' => 8,
                'created_at' => '2025-03-27 19:59:56',
                'updated_at' => '2025-03-27 19:59:56',
            ),
            162 => 
            array (
                'id' => 2228,
                'code' => 'R9-03272025-CHE-0333',
                'information' => NULL,
                'sample_id' => 3280,
                'user_id' => 8,
                'created_at' => '2025-03-27 20:00:00',
                'updated_at' => '2025-03-27 20:00:00',
            ),
            163 => 
            array (
                'id' => 2229,
                'code' => 'R9-03272025-CHE-0334',
                'information' => NULL,
                'sample_id' => 3281,
                'user_id' => 8,
                'created_at' => '2025-03-27 20:00:04',
                'updated_at' => '2025-03-27 20:00:04',
            ),
            164 => 
            array (
                'id' => 2230,
                'code' => 'R9-03272025-CHE-0335',
                'information' => NULL,
                'sample_id' => 3282,
                'user_id' => 8,
                'created_at' => '2025-03-27 20:00:11',
                'updated_at' => '2025-03-27 20:00:11',
            ),
            165 => 
            array (
                'id' => 2231,
                'code' => 'R9-03272025-CHE-0336',
                'information' => NULL,
                'sample_id' => 3283,
                'user_id' => 8,
                'created_at' => '2025-03-27 20:00:15',
                'updated_at' => '2025-03-27 20:00:15',
            ),
            166 => 
            array (
                'id' => 2232,
                'code' => 'R9-03272025-CHE-0337',
                'information' => NULL,
                'sample_id' => 3284,
                'user_id' => 8,
                'created_at' => '2025-03-27 20:00:19',
                'updated_at' => '2025-03-27 20:00:19',
            ),
            167 => 
            array (
                'id' => 2233,
                'code' => 'R9-03272025-CHE-0338',
                'information' => NULL,
                'sample_id' => 3285,
                'user_id' => 8,
                'created_at' => '2025-03-27 20:00:29',
                'updated_at' => '2025-03-27 20:00:29',
            ),
            168 => 
            array (
                'id' => 2234,
                'code' => 'R9-03272025-CHE-0339',
                'information' => NULL,
                'sample_id' => 3286,
                'user_id' => 8,
                'created_at' => '2025-03-27 20:00:34',
                'updated_at' => '2025-03-27 20:00:34',
            ),
            169 => 
            array (
                'id' => 2235,
                'code' => 'R9-03272025-CHE-0340',
                'information' => NULL,
                'sample_id' => 3287,
                'user_id' => 8,
                'created_at' => '2025-03-27 20:00:38',
                'updated_at' => '2025-03-27 20:00:38',
            ),
            170 => 
            array (
                'id' => 2236,
                'code' => 'R9-03272025-CHE-0341',
                'information' => NULL,
                'sample_id' => 3288,
                'user_id' => 8,
                'created_at' => '2025-03-27 20:00:41',
                'updated_at' => '2025-03-27 20:00:41',
            ),
            171 => 
            array (
                'id' => 2237,
                'code' => 'R9-03272025-CHE-0342',
                'information' => NULL,
                'sample_id' => 3289,
                'user_id' => 8,
                'created_at' => '2025-03-27 20:00:45',
                'updated_at' => '2025-03-27 20:00:45',
            ),
            172 => 
            array (
                'id' => 2238,
                'code' => 'R9-03272025-CHE-0343',
                'information' => NULL,
                'sample_id' => 3290,
                'user_id' => 8,
                'created_at' => '2025-03-27 20:01:25',
                'updated_at' => '2025-03-27 20:01:25',
            ),
            173 => 
            array (
                'id' => 2239,
                'code' => 'R9-03272025-CHE-0344',
                'information' => NULL,
                'sample_id' => 3291,
                'user_id' => 8,
                'created_at' => '2025-03-27 20:01:29',
                'updated_at' => '2025-03-27 20:01:29',
            ),
            174 => 
            array (
                'id' => 2240,
                'code' => 'R9-03272025-CHE-0345',
                'information' => NULL,
                'sample_id' => 3292,
                'user_id' => 8,
                'created_at' => '2025-03-27 20:01:32',
                'updated_at' => '2025-03-27 20:01:32',
            ),
            175 => 
            array (
                'id' => 2241,
                'code' => 'R9-03272025-CHE-0346',
                'information' => NULL,
                'sample_id' => 3293,
                'user_id' => 8,
                'created_at' => '2025-03-27 20:01:36',
                'updated_at' => '2025-03-27 20:01:36',
            ),
            176 => 
            array (
                'id' => 2242,
                'code' => 'R9-03272025-CHE-0347',
                'information' => NULL,
                'sample_id' => 3294,
                'user_id' => 8,
                'created_at' => '2025-03-27 20:01:43',
                'updated_at' => '2025-03-27 20:01:43',
            ),
            177 => 
            array (
                'id' => 2243,
                'code' => 'R9-03272025-CHE-0348',
                'information' => NULL,
                'sample_id' => 3295,
                'user_id' => 8,
                'created_at' => '2025-03-27 20:01:47',
                'updated_at' => '2025-03-27 20:01:47',
            ),
            178 => 
            array (
                'id' => 2244,
                'code' => 'R9-03272025-CHE-0349',
                'information' => NULL,
                'sample_id' => 3296,
                'user_id' => 8,
                'created_at' => '2025-03-27 20:01:52',
                'updated_at' => '2025-03-27 20:01:52',
            ),
            179 => 
            array (
                'id' => 2245,
                'code' => 'R9-03272025-MIC-0221',
                'information' => NULL,
                'sample_id' => 3476,
                'user_id' => 16,
                'created_at' => '2025-03-27 23:12:20',
                'updated_at' => '2025-03-27 23:12:20',
            ),
            180 => 
            array (
                'id' => 2246,
                'code' => 'R9-03272025-CHE-0350',
                'information' => NULL,
                'sample_id' => 3326,
                'user_id' => 7,
                'created_at' => '2025-03-27 23:13:56',
                'updated_at' => '2025-03-27 23:13:56',
            ),
            181 => 
            array (
                'id' => 2247,
                'code' => 'R9-03272025-CHE-0351',
                'information' => NULL,
                'sample_id' => 3327,
                'user_id' => 7,
                'created_at' => '2025-03-27 23:14:35',
                'updated_at' => '2025-03-27 23:14:35',
            ),
            182 => 
            array (
                'id' => 2248,
                'code' => 'R9-03272025-CHE-0352',
                'information' => NULL,
                'sample_id' => 3328,
                'user_id' => 7,
                'created_at' => '2025-03-27 23:14:57',
                'updated_at' => '2025-03-27 23:14:57',
            ),
            183 => 
            array (
                'id' => 2249,
                'code' => 'R9-03272025-CHE-0353',
                'information' => NULL,
                'sample_id' => 3329,
                'user_id' => 7,
                'created_at' => '2025-03-27 23:15:16',
                'updated_at' => '2025-03-27 23:15:16',
            ),
            184 => 
            array (
                'id' => 2250,
                'code' => 'R9-03272025-CHE-0354',
                'information' => NULL,
                'sample_id' => 3330,
                'user_id' => 7,
                'created_at' => '2025-03-27 23:15:32',
                'updated_at' => '2025-03-27 23:15:32',
            ),
            185 => 
            array (
                'id' => 2251,
                'code' => 'R9-03272025-CHE-0355',
                'information' => NULL,
                'sample_id' => 3331,
                'user_id' => 7,
                'created_at' => '2025-03-27 23:15:58',
                'updated_at' => '2025-03-27 23:15:58',
            ),
            186 => 
            array (
                'id' => 2252,
                'code' => 'R9-03282025-MET-0398',
                'information' => NULL,
                'sample_id' => 2993,
                'user_id' => 12,
                'created_at' => '2025-03-28 19:40:21',
                'updated_at' => '2025-03-28 19:40:21',
            ),
            187 => 
            array (
                'id' => 2253,
                'code' => 'R9-03282025-MET-0399',
                'information' => NULL,
                'sample_id' => 2994,
                'user_id' => 12,
                'created_at' => '2025-03-28 19:40:34',
                'updated_at' => '2025-03-28 19:40:34',
            ),
            188 => 
            array (
                'id' => 2254,
                'code' => 'R9-03282025-MET-0400',
                'information' => NULL,
                'sample_id' => 2995,
                'user_id' => 12,
                'created_at' => '2025-03-28 19:40:37',
                'updated_at' => '2025-03-28 19:40:37',
            ),
            189 => 
            array (
                'id' => 2255,
                'code' => 'R9-03282025-MET-0401',
                'information' => NULL,
                'sample_id' => 2996,
                'user_id' => 12,
                'created_at' => '2025-03-28 19:40:42',
                'updated_at' => '2025-03-28 19:40:42',
            ),
            190 => 
            array (
                'id' => 2256,
                'code' => 'R9-03282025-MET-0402',
                'information' => NULL,
                'sample_id' => 2997,
                'user_id' => 12,
                'created_at' => '2025-03-28 19:40:48',
                'updated_at' => '2025-03-28 19:40:48',
            ),
            191 => 
            array (
                'id' => 2257,
                'code' => 'R9-03282025-MET-0403',
                'information' => NULL,
                'sample_id' => 2998,
                'user_id' => 12,
                'created_at' => '2025-03-28 19:40:54',
                'updated_at' => '2025-03-28 19:40:54',
            ),
            192 => 
            array (
                'id' => 2258,
                'code' => 'R9-03282025-MET-0404',
                'information' => NULL,
                'sample_id' => 2999,
                'user_id' => 12,
                'created_at' => '2025-03-28 19:40:58',
                'updated_at' => '2025-03-28 19:40:58',
            ),
            193 => 
            array (
                'id' => 2259,
                'code' => 'R9-03282025-MET-0405',
                'information' => NULL,
                'sample_id' => 3000,
                'user_id' => 12,
                'created_at' => '2025-03-28 19:41:03',
                'updated_at' => '2025-03-28 19:41:03',
            ),
            194 => 
            array (
                'id' => 2260,
                'code' => 'R9-03282025-MET-0406',
                'information' => NULL,
                'sample_id' => 3003,
                'user_id' => 12,
                'created_at' => '2025-03-28 19:42:23',
                'updated_at' => '2025-03-28 19:42:23',
            ),
            195 => 
            array (
                'id' => 2261,
                'code' => 'R9-03282025-MET-0407',
                'information' => NULL,
                'sample_id' => 3004,
                'user_id' => 12,
                'created_at' => '2025-03-28 19:42:34',
                'updated_at' => '2025-03-28 19:42:34',
            ),
            196 => 
            array (
                'id' => 2262,
                'code' => 'R9-03282025-MET-0408',
                'information' => NULL,
                'sample_id' => 3005,
                'user_id' => 12,
                'created_at' => '2025-03-28 19:42:37',
                'updated_at' => '2025-03-28 19:42:37',
            ),
            197 => 
            array (
                'id' => 2263,
                'code' => 'R9-03282025-MET-0409',
                'information' => NULL,
                'sample_id' => 3006,
                'user_id' => 12,
                'created_at' => '2025-03-28 19:42:41',
                'updated_at' => '2025-03-28 19:42:41',
            ),
            198 => 
            array (
                'id' => 2264,
                'code' => 'R9-03282025-MET-0410',
                'information' => NULL,
                'sample_id' => 3028,
                'user_id' => 12,
                'created_at' => '2025-03-28 19:44:10',
                'updated_at' => '2025-03-28 19:44:10',
            ),
            199 => 
            array (
                'id' => 2265,
                'code' => 'R9-03282025-MET-0411',
                'information' => NULL,
                'sample_id' => 3029,
                'user_id' => 12,
                'created_at' => '2025-03-28 19:44:22',
                'updated_at' => '2025-03-28 19:44:22',
            ),
            200 => 
            array (
                'id' => 2266,
                'code' => 'R9-03282025-MET-0412',
                'information' => NULL,
                'sample_id' => 3030,
                'user_id' => 12,
                'created_at' => '2025-03-28 19:44:33',
                'updated_at' => '2025-03-28 19:44:33',
            ),
            201 => 
            array (
                'id' => 2267,
                'code' => 'R9-03282025-MET-0413',
                'information' => NULL,
                'sample_id' => 3031,
                'user_id' => 12,
                'created_at' => '2025-03-28 19:44:36',
                'updated_at' => '2025-03-28 19:44:36',
            ),
            202 => 
            array (
                'id' => 2268,
                'code' => 'R9-03282025-MET-0414',
                'information' => NULL,
                'sample_id' => 3032,
                'user_id' => 12,
                'created_at' => '2025-03-28 19:44:44',
                'updated_at' => '2025-03-28 19:44:44',
            ),
            203 => 
            array (
                'id' => 2269,
                'code' => 'R9-03282025-MET-0415',
                'information' => NULL,
                'sample_id' => 3033,
                'user_id' => 12,
                'created_at' => '2025-03-28 19:44:49',
                'updated_at' => '2025-03-28 19:44:49',
            ),
            204 => 
            array (
                'id' => 2270,
                'code' => 'R9-03282025-MET-0416',
                'information' => NULL,
                'sample_id' => 3034,
                'user_id' => 12,
                'created_at' => '2025-03-28 19:44:54',
                'updated_at' => '2025-03-28 19:44:54',
            ),
            205 => 
            array (
                'id' => 2271,
                'code' => 'R9-03282025-MET-0417',
                'information' => NULL,
                'sample_id' => 3035,
                'user_id' => 12,
                'created_at' => '2025-03-28 19:44:58',
                'updated_at' => '2025-03-28 19:44:58',
            ),
            206 => 
            array (
                'id' => 2272,
                'code' => 'R9-03282025-MET-0418',
                'information' => NULL,
                'sample_id' => 3036,
                'user_id' => 12,
                'created_at' => '2025-03-28 19:45:05',
                'updated_at' => '2025-03-28 19:45:05',
            ),
            207 => 
            array (
                'id' => 2273,
                'code' => 'R9-03282025-MET-0419',
                'information' => NULL,
                'sample_id' => 3037,
                'user_id' => 12,
                'created_at' => '2025-03-28 19:45:09',
                'updated_at' => '2025-03-28 19:45:09',
            ),
            208 => 
            array (
                'id' => 2274,
                'code' => 'R9-03282025-MET-0420',
                'information' => NULL,
                'sample_id' => 3038,
                'user_id' => 12,
                'created_at' => '2025-03-28 19:45:13',
                'updated_at' => '2025-03-28 19:45:13',
            ),
            209 => 
            array (
                'id' => 2275,
                'code' => 'R9-03282025-MET-0421',
                'information' => NULL,
                'sample_id' => 3039,
                'user_id' => 12,
                'created_at' => '2025-03-28 19:45:16',
                'updated_at' => '2025-03-28 19:45:16',
            ),
            210 => 
            array (
                'id' => 2276,
                'code' => 'R9-03282025-MET-0422',
                'information' => NULL,
                'sample_id' => 3040,
                'user_id' => 12,
                'created_at' => '2025-03-28 19:45:19',
                'updated_at' => '2025-03-28 19:45:19',
            ),
            211 => 
            array (
                'id' => 2277,
                'code' => 'R9-03282025-MET-0423',
                'information' => NULL,
                'sample_id' => 3041,
                'user_id' => 12,
                'created_at' => '2025-03-28 19:45:23',
                'updated_at' => '2025-03-28 19:45:23',
            ),
            212 => 
            array (
                'id' => 2278,
                'code' => 'R9-03282025-MET-0424',
                'information' => NULL,
                'sample_id' => 3042,
                'user_id' => 12,
                'created_at' => '2025-03-28 19:45:28',
                'updated_at' => '2025-03-28 19:45:28',
            ),
            213 => 
            array (
                'id' => 2279,
                'code' => 'R9-03282025-MET-0425',
                'information' => NULL,
                'sample_id' => 3043,
                'user_id' => 12,
                'created_at' => '2025-03-28 19:45:33',
                'updated_at' => '2025-03-28 19:45:33',
            ),
            214 => 
            array (
                'id' => 2280,
                'code' => 'R9-03282025-MET-0426',
                'information' => NULL,
                'sample_id' => 3044,
                'user_id' => 12,
                'created_at' => '2025-03-28 19:45:38',
                'updated_at' => '2025-03-28 19:45:38',
            ),
            215 => 
            array (
                'id' => 2281,
                'code' => 'R9-03282025-MET-0427',
                'information' => NULL,
                'sample_id' => 3045,
                'user_id' => 12,
                'created_at' => '2025-03-28 19:45:42',
                'updated_at' => '2025-03-28 19:45:42',
            ),
            216 => 
            array (
                'id' => 2282,
                'code' => 'R9-03282025-MET-0428',
                'information' => NULL,
                'sample_id' => 3046,
                'user_id' => 12,
                'created_at' => '2025-03-28 19:45:46',
                'updated_at' => '2025-03-28 19:45:46',
            ),
            217 => 
            array (
                'id' => 2283,
                'code' => 'R9-03282025-MET-0429',
                'information' => NULL,
                'sample_id' => 3047,
                'user_id' => 12,
                'created_at' => '2025-03-28 19:45:49',
                'updated_at' => '2025-03-28 19:45:49',
            ),
            218 => 
            array (
                'id' => 2284,
                'code' => 'R9-03282025-MET-0430',
                'information' => NULL,
                'sample_id' => 3048,
                'user_id' => 12,
                'created_at' => '2025-03-28 19:45:52',
                'updated_at' => '2025-03-28 19:45:52',
            ),
            219 => 
            array (
                'id' => 2285,
                'code' => 'R9-03282025-MET-0431',
                'information' => NULL,
                'sample_id' => 3447,
                'user_id' => 12,
                'created_at' => '2025-03-28 22:05:57',
                'updated_at' => '2025-03-28 22:05:57',
            ),
            220 => 
            array (
                'id' => 2286,
                'code' => 'R9-03282025-MET-0432',
                'information' => NULL,
                'sample_id' => 3163,
                'user_id' => 13,
                'created_at' => '2025-03-28 22:39:09',
                'updated_at' => '2025-03-28 22:39:09',
            ),
            221 => 
            array (
                'id' => 2287,
                'code' => 'R9-03282025-MET-0433',
                'information' => NULL,
                'sample_id' => 3164,
                'user_id' => 13,
                'created_at' => '2025-03-28 22:39:14',
                'updated_at' => '2025-03-28 22:39:14',
            ),
            222 => 
            array (
                'id' => 2288,
                'code' => 'R9-03282025-MET-0434',
                'information' => NULL,
                'sample_id' => 3165,
                'user_id' => 13,
                'created_at' => '2025-03-28 22:39:18',
                'updated_at' => '2025-03-28 22:39:18',
            ),
            223 => 
            array (
                'id' => 2289,
                'code' => 'R9-03282025-MET-0435',
                'information' => NULL,
                'sample_id' => 3166,
                'user_id' => 13,
                'created_at' => '2025-03-28 22:39:23',
                'updated_at' => '2025-03-28 22:39:23',
            ),
            224 => 
            array (
                'id' => 2290,
                'code' => 'R9-03282025-MET-0436',
                'information' => NULL,
                'sample_id' => 3167,
                'user_id' => 13,
                'created_at' => '2025-03-28 22:39:33',
                'updated_at' => '2025-03-28 22:39:33',
            ),
            225 => 
            array (
                'id' => 2291,
                'code' => 'R9-03282025-MET-0437',
                'information' => NULL,
                'sample_id' => 3168,
                'user_id' => 13,
                'created_at' => '2025-03-28 22:39:39',
                'updated_at' => '2025-03-28 22:39:39',
            ),
            226 => 
            array (
                'id' => 2292,
                'code' => 'R9-03282025-MET-0438',
                'information' => NULL,
                'sample_id' => 3169,
                'user_id' => 13,
                'created_at' => '2025-03-28 22:39:56',
                'updated_at' => '2025-03-28 22:39:56',
            ),
            227 => 
            array (
                'id' => 2293,
                'code' => 'R9-03282025-MET-0439',
                'information' => NULL,
                'sample_id' => 3170,
                'user_id' => 13,
                'created_at' => '2025-03-28 22:40:00',
                'updated_at' => '2025-03-28 22:40:00',
            ),
            228 => 
            array (
                'id' => 2294,
                'code' => 'R9-03282025-MET-0440',
                'information' => NULL,
                'sample_id' => 3171,
                'user_id' => 13,
                'created_at' => '2025-03-28 22:40:05',
                'updated_at' => '2025-03-28 22:40:05',
            ),
            229 => 
            array (
                'id' => 2295,
                'code' => 'R9-03282025-MET-0441',
                'information' => NULL,
                'sample_id' => 3172,
                'user_id' => 13,
                'created_at' => '2025-03-28 22:40:10',
                'updated_at' => '2025-03-28 22:40:10',
            ),
            230 => 
            array (
                'id' => 2296,
                'code' => 'R9-03282025-MET-0442',
                'information' => NULL,
                'sample_id' => 3173,
                'user_id' => 13,
                'created_at' => '2025-03-28 22:40:17',
                'updated_at' => '2025-03-28 22:40:17',
            ),
            231 => 
            array (
                'id' => 2297,
                'code' => 'R9-03282025-MET-0443',
                'information' => NULL,
                'sample_id' => 3174,
                'user_id' => 13,
                'created_at' => '2025-03-28 22:40:21',
                'updated_at' => '2025-03-28 22:40:21',
            ),
            232 => 
            array (
                'id' => 2298,
                'code' => 'R9-03282025-MET-0444',
                'information' => NULL,
                'sample_id' => 3175,
                'user_id' => 13,
                'created_at' => '2025-03-28 22:40:30',
                'updated_at' => '2025-03-28 22:40:30',
            ),
            233 => 
            array (
                'id' => 2299,
                'code' => 'R9-03282025-CHE-0356',
                'information' => NULL,
                'sample_id' => 3376,
                'user_id' => 7,
                'created_at' => '2025-03-29 01:17:05',
                'updated_at' => '2025-03-29 01:17:05',
            ),
            234 => 
            array (
                'id' => 2300,
                'code' => 'R9-03282025-CHE-0357',
                'information' => NULL,
                'sample_id' => 3377,
                'user_id' => 7,
                'created_at' => '2025-03-29 01:17:11',
                'updated_at' => '2025-03-29 01:17:11',
            ),
            235 => 
            array (
                'id' => 2301,
                'code' => 'R9-03282025-CHE-0358',
                'information' => NULL,
                'sample_id' => 3378,
                'user_id' => 7,
                'created_at' => '2025-03-29 01:17:25',
                'updated_at' => '2025-03-29 01:17:25',
            ),
            236 => 
            array (
                'id' => 2302,
                'code' => 'R9-03312025-CHE-0359',
                'information' => NULL,
                'sample_id' => 3527,
                'user_id' => 8,
                'created_at' => '2025-03-31 18:03:01',
                'updated_at' => '2025-03-31 18:03:01',
            ),
            237 => 
            array (
                'id' => 2303,
                'code' => 'R9-03312025-CHE-0360',
                'information' => NULL,
                'sample_id' => 3528,
                'user_id' => 8,
                'created_at' => '2025-03-31 18:03:20',
                'updated_at' => '2025-03-31 18:03:20',
            ),
            238 => 
            array (
                'id' => 2304,
                'code' => 'R9-03312025-CHE-0361',
                'information' => NULL,
                'sample_id' => 3529,
                'user_id' => 8,
                'created_at' => '2025-03-31 18:03:29',
                'updated_at' => '2025-03-31 18:03:29',
            ),
            239 => 
            array (
                'id' => 2305,
                'code' => 'R9-03312025-MET-0445',
                'information' => NULL,
                'sample_id' => 2649,
                'user_id' => 13,
                'created_at' => '2025-03-31 18:59:11',
                'updated_at' => '2025-03-31 18:59:11',
            ),
            240 => 
            array (
                'id' => 2306,
                'code' => 'R9-03312025-CHE-0362',
                'information' => NULL,
                'sample_id' => 3614,
                'user_id' => 7,
                'created_at' => '2025-03-31 20:19:29',
                'updated_at' => '2025-03-31 20:19:29',
            ),
            241 => 
            array (
                'id' => 2307,
                'code' => 'R9-03312025-MET-0446',
                'information' => NULL,
                'sample_id' => 2416,
                'user_id' => 13,
                'created_at' => '2025-03-31 21:15:19',
                'updated_at' => '2025-03-31 21:15:19',
            ),
            242 => 
            array (
                'id' => 2308,
                'code' => 'R9-03312025-MET-0447',
                'information' => NULL,
                'sample_id' => 2706,
                'user_id' => 13,
                'created_at' => '2025-03-31 23:43:34',
                'updated_at' => '2025-03-31 23:43:34',
            ),
            243 => 
            array (
                'id' => 2309,
                'code' => 'R9-03312025-MET-0448',
                'information' => NULL,
                'sample_id' => 2707,
                'user_id' => 13,
                'created_at' => '2025-03-31 23:43:40',
                'updated_at' => '2025-03-31 23:43:40',
            ),
            244 => 
            array (
                'id' => 2310,
                'code' => 'R9-03312025-MET-0449',
                'information' => NULL,
                'sample_id' => 2708,
                'user_id' => 13,
                'created_at' => '2025-03-31 23:43:45',
                'updated_at' => '2025-03-31 23:43:45',
            ),
            245 => 
            array (
                'id' => 2311,
                'code' => 'R9-03312025-MET-0450',
                'information' => NULL,
                'sample_id' => 2709,
                'user_id' => 13,
                'created_at' => '2025-03-31 23:43:49',
                'updated_at' => '2025-03-31 23:43:49',
            ),
            246 => 
            array (
                'id' => 2312,
                'code' => 'R9-04012025-MET-0451',
                'information' => NULL,
                'sample_id' => 2681,
                'user_id' => 13,
                'created_at' => '2025-04-01 17:11:22',
                'updated_at' => '2025-04-01 17:11:22',
            ),
            247 => 
            array (
                'id' => 2313,
                'code' => 'R9-04012025-MET-0452',
                'information' => NULL,
                'sample_id' => 2698,
                'user_id' => 13,
                'created_at' => '2025-04-01 17:18:08',
                'updated_at' => '2025-04-01 17:18:08',
            ),
            248 => 
            array (
                'id' => 2314,
                'code' => 'R9-04022025-CHE-0363',
                'information' => NULL,
                'sample_id' => 3593,
                'user_id' => 7,
                'created_at' => '2025-04-02 17:24:59',
                'updated_at' => '2025-04-02 17:24:59',
            ),
            249 => 
            array (
                'id' => 2315,
                'code' => 'R9-04022025-MET-0453',
                'information' => NULL,
                'sample_id' => 3086,
                'user_id' => 5,
                'created_at' => '2025-04-02 18:25:43',
                'updated_at' => '2025-04-02 18:25:43',
            ),
            250 => 
            array (
                'id' => 2316,
                'code' => 'R9-04022025-MET-0454',
                'information' => NULL,
                'sample_id' => 3087,
                'user_id' => 5,
                'created_at' => '2025-04-02 18:26:06',
                'updated_at' => '2025-04-02 18:26:06',
            ),
            251 => 
            array (
                'id' => 2317,
                'code' => 'R9-04022025-MET-0455',
                'information' => NULL,
                'sample_id' => 3088,
                'user_id' => 5,
                'created_at' => '2025-04-02 18:26:38',
                'updated_at' => '2025-04-02 18:26:38',
            ),
            252 => 
            array (
                'id' => 2318,
                'code' => 'R9-04022025-MET-0456',
                'information' => NULL,
                'sample_id' => 3089,
                'user_id' => 5,
                'created_at' => '2025-04-02 18:27:30',
                'updated_at' => '2025-04-02 18:27:30',
            ),
            253 => 
            array (
                'id' => 2319,
                'code' => 'R9-04022025-MET-0457',
                'information' => NULL,
                'sample_id' => 3161,
                'user_id' => 5,
                'created_at' => '2025-04-02 19:22:40',
                'updated_at' => '2025-04-02 19:22:40',
            ),
            254 => 
            array (
                'id' => 2320,
                'code' => 'R9-04022025-MET-0458',
                'information' => NULL,
                'sample_id' => 3162,
                'user_id' => 5,
                'created_at' => '2025-04-02 19:22:46',
                'updated_at' => '2025-04-02 19:22:46',
            ),
            255 => 
            array (
                'id' => 2321,
                'code' => 'R9-04022025-MET-0459',
                'information' => NULL,
                'sample_id' => 3160,
                'user_id' => 5,
                'created_at' => '2025-04-02 22:16:19',
                'updated_at' => '2025-04-02 22:16:19',
            ),
            256 => 
            array (
                'id' => 2322,
                'code' => 'R9-04022025-CHE-0364',
                'information' => NULL,
                'sample_id' => 3705,
                'user_id' => 7,
                'created_at' => '2025-04-03 00:32:23',
                'updated_at' => '2025-04-03 00:32:23',
            ),
            257 => 
            array (
                'id' => 2323,
                'code' => 'R9-04022025-MIC-0222',
                'information' => NULL,
                'sample_id' => 3627,
                'user_id' => 16,
                'created_at' => '2025-04-03 06:29:37',
                'updated_at' => '2025-04-03 06:29:37',
            ),
            258 => 
            array (
                'id' => 2324,
                'code' => 'R9-04022025-MIC-0223',
                'information' => NULL,
                'sample_id' => 3628,
                'user_id' => 16,
                'created_at' => '2025-04-03 06:30:10',
                'updated_at' => '2025-04-03 06:30:10',
            ),
            259 => 
            array (
                'id' => 2325,
                'code' => 'R9-04022025-MIC-0224',
                'information' => NULL,
                'sample_id' => 3633,
                'user_id' => 16,
                'created_at' => '2025-04-03 06:30:46',
                'updated_at' => '2025-04-03 06:30:46',
            ),
            260 => 
            array (
                'id' => 2326,
                'code' => 'R9-04022025-MIC-0225',
                'information' => NULL,
                'sample_id' => 3634,
                'user_id' => 16,
                'created_at' => '2025-04-03 06:31:30',
                'updated_at' => '2025-04-03 06:31:30',
            ),
            261 => 
            array (
                'id' => 2327,
                'code' => 'R9-04022025-MIC-0226',
                'information' => NULL,
                'sample_id' => 3654,
                'user_id' => 16,
                'created_at' => '2025-04-03 06:32:37',
                'updated_at' => '2025-04-03 06:32:37',
            ),
            262 => 
            array (
                'id' => 2328,
                'code' => 'R9-04022025-MIC-0227',
                'information' => NULL,
                'sample_id' => 3660,
                'user_id' => 16,
                'created_at' => '2025-04-03 06:33:16',
                'updated_at' => '2025-04-03 06:33:16',
            ),
            263 => 
            array (
                'id' => 2329,
                'code' => 'R9-04022025-MIC-0228',
                'information' => NULL,
                'sample_id' => 3661,
                'user_id' => 16,
                'created_at' => '2025-04-03 06:33:36',
                'updated_at' => '2025-04-03 06:33:36',
            ),
            264 => 
            array (
                'id' => 2330,
                'code' => 'R9-04032025-MET-0460',
                'information' => NULL,
                'sample_id' => 3053,
                'user_id' => 12,
                'created_at' => '2025-04-03 16:14:01',
                'updated_at' => '2025-04-03 16:14:01',
            ),
            265 => 
            array (
                'id' => 2331,
                'code' => 'R9-04032025-MET-0461',
                'information' => NULL,
                'sample_id' => 3054,
                'user_id' => 12,
                'created_at' => '2025-04-03 16:14:43',
                'updated_at' => '2025-04-03 16:14:43',
            ),
            266 => 
            array (
                'id' => 2332,
                'code' => 'R9-04032025-MET-0462',
                'information' => NULL,
                'sample_id' => 3055,
                'user_id' => 12,
                'created_at' => '2025-04-03 16:15:32',
                'updated_at' => '2025-04-03 16:15:32',
            ),
            267 => 
            array (
                'id' => 2333,
                'code' => 'R9-04032025-MET-0463',
                'information' => NULL,
                'sample_id' => 3056,
                'user_id' => 12,
                'created_at' => '2025-04-03 16:16:03',
                'updated_at' => '2025-04-03 16:16:03',
            ),
            268 => 
            array (
                'id' => 2334,
                'code' => 'R9-04032025-MET-0464',
                'information' => NULL,
                'sample_id' => 3057,
                'user_id' => 12,
                'created_at' => '2025-04-03 16:16:46',
                'updated_at' => '2025-04-03 16:16:46',
            ),
            269 => 
            array (
                'id' => 2335,
                'code' => 'R9-04032025-MET-0465',
                'information' => NULL,
                'sample_id' => 3058,
                'user_id' => 12,
                'created_at' => '2025-04-03 20:57:06',
                'updated_at' => '2025-04-03 20:57:06',
            ),
            270 => 
            array (
                'id' => 2336,
                'code' => 'R9-04032025-MET-0466',
                'information' => NULL,
                'sample_id' => 3059,
                'user_id' => 12,
                'created_at' => '2025-04-03 20:57:34',
                'updated_at' => '2025-04-03 20:57:34',
            ),
            271 => 
            array (
                'id' => 2337,
                'code' => 'R9-04032025-MET-0467',
                'information' => NULL,
                'sample_id' => 3060,
                'user_id' => 12,
                'created_at' => '2025-04-03 20:58:42',
                'updated_at' => '2025-04-03 20:58:42',
            ),
            272 => 
            array (
                'id' => 2338,
                'code' => 'R9-04032025-MET-0468',
                'information' => NULL,
                'sample_id' => 3061,
                'user_id' => 12,
                'created_at' => '2025-04-03 20:59:28',
                'updated_at' => '2025-04-03 20:59:28',
            ),
            273 => 
            array (
                'id' => 2339,
                'code' => 'R9-04032025-MET-0469',
                'information' => NULL,
                'sample_id' => 3062,
                'user_id' => 12,
                'created_at' => '2025-04-03 21:00:13',
                'updated_at' => '2025-04-03 21:00:13',
            ),
            274 => 
            array (
                'id' => 2340,
                'code' => 'R9-04042025-MET-0470',
                'information' => NULL,
                'sample_id' => 3049,
                'user_id' => 12,
                'created_at' => '2025-04-04 18:24:53',
                'updated_at' => '2025-04-04 18:24:53',
            ),
            275 => 
            array (
                'id' => 2341,
                'code' => 'R9-04042025-MET-0471',
                'information' => NULL,
                'sample_id' => 3050,
                'user_id' => 12,
                'created_at' => '2025-04-04 18:25:22',
                'updated_at' => '2025-04-04 18:25:22',
            ),
            276 => 
            array (
                'id' => 2342,
                'code' => 'R9-04042025-MET-0472',
                'information' => NULL,
                'sample_id' => 3051,
                'user_id' => 12,
                'created_at' => '2025-04-04 18:25:58',
                'updated_at' => '2025-04-04 18:25:58',
            ),
            277 => 
            array (
                'id' => 2343,
                'code' => 'R9-04042025-MET-0473',
                'information' => NULL,
                'sample_id' => 3052,
                'user_id' => 12,
                'created_at' => '2025-04-04 18:26:33',
                'updated_at' => '2025-04-04 18:26:33',
            ),
            278 => 
            array (
                'id' => 2344,
                'code' => 'R9-04052025-CHE-0365',
                'information' => NULL,
                'sample_id' => 3259,
                'user_id' => 8,
                'created_at' => '2025-04-05 23:01:09',
                'updated_at' => '2025-04-05 23:01:09',
            ),
            279 => 
            array (
                'id' => 2345,
                'code' => 'R9-04072025-CHE-0366',
                'information' => NULL,
                'sample_id' => 3265,
                'user_id' => 8,
                'created_at' => '2025-04-07 15:54:24',
                'updated_at' => '2025-04-07 15:54:24',
            ),
            280 => 
            array (
                'id' => 2346,
                'code' => 'R9-04072025-CHE-0367',
                'information' => NULL,
                'sample_id' => 3977,
                'user_id' => 8,
                'created_at' => '2025-04-07 15:54:52',
                'updated_at' => '2025-04-07 15:54:52',
            ),
            281 => 
            array (
                'id' => 2347,
                'code' => 'R9-04072025-CHE-0368',
                'information' => NULL,
                'sample_id' => 3418,
                'user_id' => 8,
                'created_at' => '2025-04-07 15:59:21',
                'updated_at' => '2025-04-07 15:59:21',
            ),
            282 => 
            array (
                'id' => 2348,
                'code' => 'R9-04072025-CHE-0369',
                'information' => NULL,
                'sample_id' => 3419,
                'user_id' => 8,
                'created_at' => '2025-04-07 15:59:27',
                'updated_at' => '2025-04-07 15:59:27',
            ),
            283 => 
            array (
                'id' => 2349,
                'code' => 'R9-04072025-CHE-0370',
                'information' => NULL,
                'sample_id' => 3420,
                'user_id' => 8,
                'created_at' => '2025-04-07 15:59:32',
                'updated_at' => '2025-04-07 15:59:32',
            ),
            284 => 
            array (
                'id' => 2350,
                'code' => 'R9-04072025-CHE-0371',
                'information' => NULL,
                'sample_id' => 3421,
                'user_id' => 8,
                'created_at' => '2025-04-07 15:59:41',
                'updated_at' => '2025-04-07 15:59:41',
            ),
            285 => 
            array (
                'id' => 2351,
                'code' => 'R9-04072025-CHE-0372',
                'information' => NULL,
                'sample_id' => 3422,
                'user_id' => 8,
                'created_at' => '2025-04-07 15:59:45',
                'updated_at' => '2025-04-07 15:59:45',
            ),
            286 => 
            array (
                'id' => 2352,
                'code' => 'R9-04072025-CHE-0373',
                'information' => NULL,
                'sample_id' => 3423,
                'user_id' => 8,
                'created_at' => '2025-04-07 15:59:50',
                'updated_at' => '2025-04-07 15:59:50',
            ),
            287 => 
            array (
                'id' => 2353,
                'code' => 'R9-04072025-CHE-0374',
                'information' => NULL,
                'sample_id' => 3424,
                'user_id' => 8,
                'created_at' => '2025-04-07 16:00:04',
                'updated_at' => '2025-04-07 16:00:04',
            ),
            288 => 
            array (
                'id' => 2354,
                'code' => 'R9-04072025-CHE-0375',
                'information' => NULL,
                'sample_id' => 3425,
                'user_id' => 8,
                'created_at' => '2025-04-07 16:00:10',
                'updated_at' => '2025-04-07 16:00:10',
            ),
            289 => 
            array (
                'id' => 2355,
                'code' => 'R9-04072025-CHE-0376',
                'information' => NULL,
                'sample_id' => 3426,
                'user_id' => 8,
                'created_at' => '2025-04-07 16:00:15',
                'updated_at' => '2025-04-07 16:00:15',
            ),
            290 => 
            array (
                'id' => 2356,
                'code' => 'R9-04072025-CHE-0377',
                'information' => NULL,
                'sample_id' => 3427,
                'user_id' => 8,
                'created_at' => '2025-04-07 16:00:20',
                'updated_at' => '2025-04-07 16:00:20',
            ),
            291 => 
            array (
                'id' => 2357,
                'code' => 'R9-04072025-CHE-0378',
                'information' => NULL,
                'sample_id' => 3428,
                'user_id' => 8,
                'created_at' => '2025-04-07 16:00:25',
                'updated_at' => '2025-04-07 16:00:25',
            ),
            292 => 
            array (
                'id' => 2358,
                'code' => 'R9-04072025-CHE-0379',
                'information' => NULL,
                'sample_id' => 3429,
                'user_id' => 8,
                'created_at' => '2025-04-07 16:00:30',
                'updated_at' => '2025-04-07 16:00:30',
            ),
            293 => 
            array (
                'id' => 2359,
                'code' => 'R9-04072025-CHE-0380',
                'information' => NULL,
                'sample_id' => 3530,
                'user_id' => 8,
                'created_at' => '2025-04-07 16:03:01',
                'updated_at' => '2025-04-07 16:03:01',
            ),
            294 => 
            array (
                'id' => 2360,
                'code' => 'R9-04072025-CHE-0381',
                'information' => NULL,
                'sample_id' => 3709,
                'user_id' => 8,
                'created_at' => '2025-04-07 16:06:21',
                'updated_at' => '2025-04-07 16:06:21',
            ),
            295 => 
            array (
                'id' => 2361,
                'code' => 'R9-04072025-CHE-0382',
                'information' => NULL,
                'sample_id' => 3710,
                'user_id' => 8,
                'created_at' => '2025-04-07 16:06:25',
                'updated_at' => '2025-04-07 16:06:25',
            ),
            296 => 
            array (
                'id' => 2362,
                'code' => 'R9-04072025-CHE-0383',
                'information' => NULL,
                'sample_id' => 3711,
                'user_id' => 8,
                'created_at' => '2025-04-07 16:06:30',
                'updated_at' => '2025-04-07 16:06:30',
            ),
            297 => 
            array (
                'id' => 2363,
                'code' => 'R9-04072025-CHE-0384',
                'information' => NULL,
                'sample_id' => 3623,
                'user_id' => 8,
                'created_at' => '2025-04-07 16:08:23',
                'updated_at' => '2025-04-07 16:08:23',
            ),
            298 => 
            array (
                'id' => 2364,
                'code' => 'R9-04072025-CHE-0385',
                'information' => NULL,
                'sample_id' => 3624,
                'user_id' => 8,
                'created_at' => '2025-04-07 16:08:27',
                'updated_at' => '2025-04-07 16:08:27',
            ),
            299 => 
            array (
                'id' => 2365,
                'code' => 'R9-04072025-CHE-0386',
                'information' => NULL,
                'sample_id' => 3625,
                'user_id' => 8,
                'created_at' => '2025-04-07 16:08:33',
                'updated_at' => '2025-04-07 16:08:33',
            ),
            300 => 
            array (
                'id' => 2366,
                'code' => 'R9-04072025-CHE-0387',
                'information' => NULL,
                'sample_id' => 3626,
                'user_id' => 8,
                'created_at' => '2025-04-07 16:08:37',
                'updated_at' => '2025-04-07 16:08:37',
            ),
            301 => 
            array (
                'id' => 2367,
                'code' => 'R9-04072025-CHE-0388',
                'information' => NULL,
                'sample_id' => 3620,
                'user_id' => 8,
                'created_at' => '2025-04-07 16:09:00',
                'updated_at' => '2025-04-07 16:09:00',
            ),
            302 => 
            array (
                'id' => 2368,
                'code' => 'R9-04072025-CHE-0389',
                'information' => NULL,
                'sample_id' => 3622,
                'user_id' => 8,
                'created_at' => '2025-04-07 21:16:22',
                'updated_at' => '2025-04-07 21:16:22',
            ),
            303 => 
            array (
                'id' => 2369,
                'code' => 'R9-04072025-MIC-0229',
                'information' => NULL,
                'sample_id' => 3734,
                'user_id' => 16,
                'created_at' => '2025-04-07 21:36:35',
                'updated_at' => '2025-04-07 21:36:35',
            ),
            304 => 
            array (
                'id' => 2370,
                'code' => 'R9-04072025-MIC-0230',
                'information' => NULL,
                'sample_id' => 3735,
                'user_id' => 16,
                'created_at' => '2025-04-07 21:37:17',
                'updated_at' => '2025-04-07 21:37:17',
            ),
            305 => 
            array (
                'id' => 2371,
                'code' => 'R9-04072025-MIC-0231',
                'information' => NULL,
                'sample_id' => 3736,
                'user_id' => 16,
                'created_at' => '2025-04-07 21:37:25',
                'updated_at' => '2025-04-07 21:37:25',
            ),
            306 => 
            array (
                'id' => 2372,
                'code' => 'R9-04072025-MIC-0232',
                'information' => NULL,
                'sample_id' => 3737,
                'user_id' => 16,
                'created_at' => '2025-04-07 21:37:34',
                'updated_at' => '2025-04-07 21:37:34',
            ),
            307 => 
            array (
                'id' => 2373,
                'code' => 'R9-04072025-MIC-0233',
                'information' => NULL,
                'sample_id' => 3738,
                'user_id' => 16,
                'created_at' => '2025-04-07 21:37:49',
                'updated_at' => '2025-04-07 21:37:49',
            ),
            308 => 
            array (
                'id' => 2374,
                'code' => 'R9-04072025-MIC-0234',
                'information' => NULL,
                'sample_id' => 3739,
                'user_id' => 16,
                'created_at' => '2025-04-07 21:37:56',
                'updated_at' => '2025-04-07 21:37:56',
            ),
            309 => 
            array (
                'id' => 2375,
                'code' => 'R9-04072025-MIC-0235',
                'information' => NULL,
                'sample_id' => 3740,
                'user_id' => 16,
                'created_at' => '2025-04-07 21:38:06',
                'updated_at' => '2025-04-07 21:38:06',
            ),
            310 => 
            array (
                'id' => 2376,
                'code' => 'R9-04072025-CHE-0390',
                'information' => NULL,
                'sample_id' => 3664,
                'user_id' => 8,
                'created_at' => '2025-04-07 21:51:01',
                'updated_at' => '2025-04-07 21:51:01',
            ),
            311 => 
            array (
                'id' => 2377,
                'code' => 'R9-04072025-CHE-0391',
                'information' => NULL,
                'sample_id' => 3665,
                'user_id' => 8,
                'created_at' => '2025-04-07 21:51:06',
                'updated_at' => '2025-04-07 21:51:06',
            ),
            312 => 
            array (
                'id' => 2378,
                'code' => 'R9-04072025-MIC-0236',
                'information' => NULL,
                'sample_id' => 3621,
                'user_id' => 16,
                'created_at' => '2025-04-07 22:26:11',
                'updated_at' => '2025-04-07 22:26:11',
            ),
            313 => 
            array (
                'id' => 2379,
                'code' => 'R9-04082025-MIC-0237',
                'information' => NULL,
                'sample_id' => 3373,
                'user_id' => 16,
                'created_at' => '2025-04-08 17:45:08',
                'updated_at' => '2025-04-08 17:45:08',
            ),
            314 => 
            array (
                'id' => 2380,
                'code' => 'R9-04082025-MIC-0238',
                'information' => NULL,
                'sample_id' => 3374,
                'user_id' => 16,
                'created_at' => '2025-04-08 18:29:37',
                'updated_at' => '2025-04-08 18:29:37',
            ),
            315 => 
            array (
                'id' => 2381,
                'code' => 'R9-04082025-MIC-0239',
                'information' => NULL,
                'sample_id' => 3708,
                'user_id' => 16,
                'created_at' => '2025-04-08 18:33:33',
                'updated_at' => '2025-04-08 18:33:33',
            ),
            316 => 
            array (
                'id' => 2382,
                'code' => 'R9-04082025-MIC-0240',
                'information' => NULL,
                'sample_id' => 3733,
                'user_id' => 16,
                'created_at' => '2025-04-08 18:43:03',
                'updated_at' => '2025-04-08 18:43:03',
            ),
            317 => 
            array (
                'id' => 2383,
                'code' => 'R9-04082025-MET-0474',
                'information' => NULL,
                'sample_id' => 4039,
                'user_id' => 12,
                'created_at' => '2025-04-08 20:10:51',
                'updated_at' => '2025-04-08 20:10:51',
            ),
            318 => 
            array (
                'id' => 2384,
                'code' => 'R9-04082025-CHE-0392',
                'information' => NULL,
                'sample_id' => 4011,
                'user_id' => 8,
                'created_at' => '2025-04-08 23:34:49',
                'updated_at' => '2025-04-08 23:34:49',
            ),
            319 => 
            array (
                'id' => 2385,
                'code' => 'R9-04082025-CHE-0393',
                'information' => NULL,
                'sample_id' => 3580,
                'user_id' => 8,
                'created_at' => '2025-04-09 00:10:55',
                'updated_at' => '2025-04-09 00:10:55',
            ),
            320 => 
            array (
                'id' => 2386,
                'code' => 'R9-04082025-CHE-0394',
                'information' => NULL,
                'sample_id' => 3581,
                'user_id' => 8,
                'created_at' => '2025-04-09 00:11:18',
                'updated_at' => '2025-04-09 00:11:18',
            ),
            321 => 
            array (
                'id' => 2387,
                'code' => 'R9-04082025-CHE-0395',
                'information' => NULL,
                'sample_id' => 3582,
                'user_id' => 8,
                'created_at' => '2025-04-09 00:11:22',
                'updated_at' => '2025-04-09 00:11:22',
            ),
            322 => 
            array (
                'id' => 2388,
                'code' => 'R9-04082025-CHE-0396',
                'information' => NULL,
                'sample_id' => 3583,
                'user_id' => 8,
                'created_at' => '2025-04-09 00:11:27',
                'updated_at' => '2025-04-09 00:11:27',
            ),
            323 => 
            array (
                'id' => 2389,
                'code' => 'R9-04082025-CHE-0397',
                'information' => NULL,
                'sample_id' => 3584,
                'user_id' => 8,
                'created_at' => '2025-04-09 00:11:32',
                'updated_at' => '2025-04-09 00:11:32',
            ),
            324 => 
            array (
                'id' => 2390,
                'code' => 'R9-04082025-CHE-0398',
                'information' => NULL,
                'sample_id' => 3585,
                'user_id' => 8,
                'created_at' => '2025-04-09 00:11:36',
                'updated_at' => '2025-04-09 00:11:36',
            ),
            325 => 
            array (
                'id' => 2391,
                'code' => 'R9-04082025-CHE-0399',
                'information' => NULL,
                'sample_id' => 3586,
                'user_id' => 8,
                'created_at' => '2025-04-09 00:11:42',
                'updated_at' => '2025-04-09 00:11:42',
            ),
            326 => 
            array (
                'id' => 2392,
                'code' => 'R9-04082025-CHE-0400',
                'information' => NULL,
                'sample_id' => 3587,
                'user_id' => 8,
                'created_at' => '2025-04-09 00:11:50',
                'updated_at' => '2025-04-09 00:11:50',
            ),
            327 => 
            array (
                'id' => 2393,
                'code' => 'R9-04082025-CHE-0401',
                'information' => NULL,
                'sample_id' => 3588,
                'user_id' => 8,
                'created_at' => '2025-04-09 00:11:54',
                'updated_at' => '2025-04-09 00:11:54',
            ),
            328 => 
            array (
                'id' => 2394,
                'code' => 'R9-04082025-CHE-0402',
                'information' => NULL,
                'sample_id' => 3589,
                'user_id' => 8,
                'created_at' => '2025-04-09 00:12:11',
                'updated_at' => '2025-04-09 00:12:11',
            ),
            329 => 
            array (
                'id' => 2395,
                'code' => 'R9-04082025-CHE-0403',
                'information' => NULL,
                'sample_id' => 3590,
                'user_id' => 8,
                'created_at' => '2025-04-09 07:52:59',
                'updated_at' => '2025-04-09 07:52:59',
            ),
            330 => 
            array (
                'id' => 2396,
                'code' => 'R9-04082025-CHE-0404',
                'information' => NULL,
                'sample_id' => 3591,
                'user_id' => 8,
                'created_at' => '2025-04-09 07:53:07',
                'updated_at' => '2025-04-09 07:53:07',
            ),
            331 => 
            array (
                'id' => 2397,
                'code' => 'R9-04082025-CHE-0405',
                'information' => NULL,
                'sample_id' => 3592,
                'user_id' => 8,
                'created_at' => '2025-04-09 07:53:17',
                'updated_at' => '2025-04-09 07:53:17',
            ),
            332 => 
            array (
                'id' => 2398,
                'code' => 'R9-04092025-CHE-0406',
                'information' => NULL,
                'sample_id' => 2306,
                'user_id' => 8,
                'created_at' => '2025-04-09 08:08:09',
                'updated_at' => '2025-04-09 08:08:09',
            ),
            333 => 
            array (
                'id' => 2399,
                'code' => 'R9-04092025-CHE-0407',
                'information' => NULL,
                'sample_id' => 2307,
                'user_id' => 8,
                'created_at' => '2025-04-09 08:08:18',
                'updated_at' => '2025-04-09 08:08:18',
            ),
            334 => 
            array (
                'id' => 2400,
                'code' => 'R9-04092025-CHE-0408',
                'information' => NULL,
                'sample_id' => 2329,
                'user_id' => 8,
                'created_at' => '2025-04-09 08:08:27',
                'updated_at' => '2025-04-09 08:08:27',
            ),
            335 => 
            array (
                'id' => 2401,
                'code' => 'R9-04092025-CHE-0409',
                'information' => NULL,
                'sample_id' => 2330,
                'user_id' => 8,
                'created_at' => '2025-04-09 08:08:41',
                'updated_at' => '2025-04-09 08:08:41',
            ),
            336 => 
            array (
                'id' => 2402,
                'code' => 'R9-04092025-CHE-0410',
                'information' => NULL,
                'sample_id' => 2331,
                'user_id' => 8,
                'created_at' => '2025-04-09 08:09:03',
                'updated_at' => '2025-04-09 08:09:03',
            ),
            337 => 
            array (
                'id' => 2403,
                'code' => 'R9-04092025-CHE-0411',
                'information' => NULL,
                'sample_id' => 2332,
                'user_id' => 8,
                'created_at' => '2025-04-09 08:09:13',
                'updated_at' => '2025-04-09 08:09:13',
            ),
            338 => 
            array (
                'id' => 2404,
                'code' => 'R9-04092025-CHE-0412',
                'information' => NULL,
                'sample_id' => 2333,
                'user_id' => 8,
                'created_at' => '2025-04-09 08:09:24',
                'updated_at' => '2025-04-09 08:09:24',
            ),
            339 => 
            array (
                'id' => 2405,
                'code' => 'R9-04092025-CHE-0413',
                'information' => NULL,
                'sample_id' => 2334,
                'user_id' => 8,
                'created_at' => '2025-04-09 08:09:42',
                'updated_at' => '2025-04-09 08:09:42',
            ),
            340 => 
            array (
                'id' => 2406,
                'code' => 'R9-04092025-CHE-0414',
                'information' => NULL,
                'sample_id' => 2335,
                'user_id' => 8,
                'created_at' => '2025-04-09 08:09:50',
                'updated_at' => '2025-04-09 08:09:50',
            ),
            341 => 
            array (
                'id' => 2407,
                'code' => 'R9-04092025-CHE-0415',
                'information' => NULL,
                'sample_id' => 2336,
                'user_id' => 8,
                'created_at' => '2025-04-09 08:09:59',
                'updated_at' => '2025-04-09 08:09:59',
            ),
            342 => 
            array (
                'id' => 2408,
                'code' => 'R9-04092025-CHE-0416',
                'information' => NULL,
                'sample_id' => 3652,
                'user_id' => 8,
                'created_at' => '2025-04-09 09:36:26',
                'updated_at' => '2025-04-09 09:36:26',
            ),
            343 => 
            array (
                'id' => 2409,
                'code' => 'R9-04092025-CHE-0417',
                'information' => NULL,
                'sample_id' => 3653,
                'user_id' => 8,
                'created_at' => '2025-04-09 09:36:37',
                'updated_at' => '2025-04-09 09:36:37',
            ),
            344 => 
            array (
                'id' => 2410,
                'code' => 'R9-04092025-CHE-0418',
                'information' => NULL,
                'sample_id' => 3993,
                'user_id' => 8,
                'created_at' => '2025-04-09 09:38:30',
                'updated_at' => '2025-04-09 09:38:30',
            ),
            345 => 
            array (
                'id' => 2411,
                'code' => 'R9-04092025-MIC-0241',
                'information' => NULL,
                'sample_id' => 3616,
                'user_id' => 16,
                'created_at' => '2025-04-10 02:05:11',
                'updated_at' => '2025-04-10 02:05:11',
            ),
            346 => 
            array (
                'id' => 2412,
                'code' => 'R9-04092025-MIC-0242',
                'information' => NULL,
                'sample_id' => 3617,
                'user_id' => 16,
                'created_at' => '2025-04-10 02:05:45',
                'updated_at' => '2025-04-10 02:05:45',
            ),
            347 => 
            array (
                'id' => 2413,
                'code' => 'R9-04092025-MIC-0243',
                'information' => NULL,
                'sample_id' => 3655,
                'user_id' => 16,
                'created_at' => '2025-04-10 02:44:53',
                'updated_at' => '2025-04-10 02:44:53',
            ),
            348 => 
            array (
                'id' => 2414,
                'code' => 'R9-04092025-MIC-0244',
                'information' => NULL,
                'sample_id' => 3656,
                'user_id' => 16,
                'created_at' => '2025-04-10 02:45:21',
                'updated_at' => '2025-04-10 02:45:21',
            ),
            349 => 
            array (
                'id' => 2415,
                'code' => 'R9-04092025-MIC-0245',
                'information' => NULL,
                'sample_id' => 3657,
                'user_id' => 16,
                'created_at' => '2025-04-10 02:45:33',
                'updated_at' => '2025-04-10 02:45:33',
            ),
            350 => 
            array (
                'id' => 2416,
                'code' => 'R9-04102025-MIC-0246',
                'information' => NULL,
                'sample_id' => 3908,
                'user_id' => 16,
                'created_at' => '2025-04-10 21:42:56',
                'updated_at' => '2025-04-10 21:42:56',
            ),
            351 => 
            array (
                'id' => 2417,
                'code' => 'R9-04102025-MIC-0247',
                'information' => NULL,
                'sample_id' => 3909,
                'user_id' => 16,
                'created_at' => '2025-04-10 21:45:54',
                'updated_at' => '2025-04-10 21:45:54',
            ),
            352 => 
            array (
                'id' => 2418,
                'code' => 'R9-04102025-MIC-0248',
                'information' => NULL,
                'sample_id' => 3928,
                'user_id' => 16,
                'created_at' => '2025-04-10 21:50:33',
                'updated_at' => '2025-04-10 21:50:33',
            ),
            353 => 
            array (
                'id' => 2419,
                'code' => 'R9-04102025-MIC-0249',
                'information' => NULL,
                'sample_id' => 3929,
                'user_id' => 16,
                'created_at' => '2025-04-10 21:50:53',
                'updated_at' => '2025-04-10 21:50:53',
            ),
            354 => 
            array (
                'id' => 2420,
                'code' => 'R9-04102025-MIC-0250',
                'information' => NULL,
                'sample_id' => 3939,
                'user_id' => 16,
                'created_at' => '2025-04-10 21:54:57',
                'updated_at' => '2025-04-10 21:54:57',
            ),
            355 => 
            array (
                'id' => 2421,
                'code' => 'R9-04102025-MIC-0251',
                'information' => NULL,
                'sample_id' => 3940,
                'user_id' => 16,
                'created_at' => '2025-04-10 21:59:21',
                'updated_at' => '2025-04-10 21:59:21',
            ),
            356 => 
            array (
                'id' => 2422,
                'code' => 'R9-04102025-MET-0475',
                'information' => NULL,
                'sample_id' => 4104,
                'user_id' => 12,
                'created_at' => '2025-04-10 23:54:42',
                'updated_at' => '2025-04-10 23:54:42',
            ),
            357 => 
            array (
                'id' => 2423,
                'code' => 'R9-04102025-MIC-0252',
                'information' => NULL,
                'sample_id' => 3925,
                'user_id' => 16,
                'created_at' => '2025-04-11 00:19:52',
                'updated_at' => '2025-04-11 00:19:52',
            ),
            358 => 
            array (
                'id' => 2424,
                'code' => 'R9-04102025-MIC-0253',
                'information' => NULL,
                'sample_id' => 3926,
                'user_id' => 16,
                'created_at' => '2025-04-11 00:20:20',
                'updated_at' => '2025-04-11 00:20:20',
            ),
            359 => 
            array (
                'id' => 2425,
                'code' => 'R9-04102025-MIC-0254',
                'information' => NULL,
                'sample_id' => 3927,
                'user_id' => 16,
                'created_at' => '2025-04-11 00:20:27',
                'updated_at' => '2025-04-11 00:20:27',
            ),
            360 => 
            array (
                'id' => 2426,
                'code' => 'R9-04102025-MIC-0255',
                'information' => NULL,
                'sample_id' => 3932,
                'user_id' => 16,
                'created_at' => '2025-04-11 00:33:21',
                'updated_at' => '2025-04-11 00:33:21',
            ),
            361 => 
            array (
                'id' => 2427,
                'code' => 'R9-04102025-MIC-0256',
                'information' => NULL,
                'sample_id' => 3938,
                'user_id' => 16,
                'created_at' => '2025-04-11 00:34:05',
                'updated_at' => '2025-04-11 00:34:05',
            ),
            362 => 
            array (
                'id' => 2428,
                'code' => 'R9-04102025-CHE-0419',
                'information' => NULL,
                'sample_id' => 2556,
                'user_id' => 8,
                'created_at' => '2025-04-11 06:37:44',
                'updated_at' => '2025-04-11 06:37:44',
            ),
            363 => 
            array (
                'id' => 2429,
                'code' => 'R9-04102025-CHE-0420',
                'information' => NULL,
                'sample_id' => 2557,
                'user_id' => 8,
                'created_at' => '2025-04-11 06:37:48',
                'updated_at' => '2025-04-11 06:37:48',
            ),
            364 => 
            array (
                'id' => 2430,
                'code' => 'R9-04102025-CHE-0421',
                'information' => NULL,
                'sample_id' => 2558,
                'user_id' => 8,
                'created_at' => '2025-04-11 06:37:53',
                'updated_at' => '2025-04-11 06:37:53',
            ),
            365 => 
            array (
                'id' => 2431,
                'code' => 'R9-04102025-CHE-0422',
                'information' => NULL,
                'sample_id' => 2559,
                'user_id' => 8,
                'created_at' => '2025-04-11 06:38:02',
                'updated_at' => '2025-04-11 06:38:02',
            ),
            366 => 
            array (
                'id' => 2432,
                'code' => 'R9-04102025-CHE-0423',
                'information' => NULL,
                'sample_id' => 2560,
                'user_id' => 8,
                'created_at' => '2025-04-11 06:38:08',
                'updated_at' => '2025-04-11 06:38:08',
            ),
            367 => 
            array (
                'id' => 2433,
                'code' => 'R9-04102025-CHE-0424',
                'information' => NULL,
                'sample_id' => 2561,
                'user_id' => 8,
                'created_at' => '2025-04-11 06:38:12',
                'updated_at' => '2025-04-11 06:38:12',
            ),
            368 => 
            array (
                'id' => 2434,
                'code' => 'R9-04102025-CHE-0425',
                'information' => NULL,
                'sample_id' => 2562,
                'user_id' => 8,
                'created_at' => '2025-04-11 06:38:16',
                'updated_at' => '2025-04-11 06:38:16',
            ),
            369 => 
            array (
                'id' => 2435,
                'code' => 'R9-04102025-CHE-0426',
                'information' => NULL,
                'sample_id' => 2563,
                'user_id' => 8,
                'created_at' => '2025-04-11 06:38:21',
                'updated_at' => '2025-04-11 06:38:21',
            ),
            370 => 
            array (
                'id' => 2436,
                'code' => 'R9-04102025-CHE-0427',
                'information' => NULL,
                'sample_id' => 2564,
                'user_id' => 8,
                'created_at' => '2025-04-11 06:38:26',
                'updated_at' => '2025-04-11 06:38:26',
            ),
            371 => 
            array (
                'id' => 2437,
                'code' => 'R9-04102025-CHE-0428',
                'information' => NULL,
                'sample_id' => 2565,
                'user_id' => 8,
                'created_at' => '2025-04-11 06:38:31',
                'updated_at' => '2025-04-11 06:38:31',
            ),
            372 => 
            array (
                'id' => 2438,
                'code' => 'R9-04112025-CHE-0429',
                'information' => NULL,
                'sample_id' => 3996,
                'user_id' => 7,
                'created_at' => '2025-04-11 16:04:10',
                'updated_at' => '2025-04-11 16:04:10',
            ),
            373 => 
            array (
                'id' => 2439,
                'code' => 'R9-04112025-MET-0476',
                'information' => NULL,
                'sample_id' => 4106,
                'user_id' => 13,
                'created_at' => '2025-04-11 17:19:38',
                'updated_at' => '2025-04-11 17:19:38',
            ),
            374 => 
            array (
                'id' => 2440,
                'code' => 'R9-04112025-CHE-0430',
                'information' => NULL,
                'sample_id' => 4045,
                'user_id' => 6,
                'created_at' => '2025-04-11 22:19:47',
                'updated_at' => '2025-04-11 22:19:47',
            ),
            375 => 
            array (
                'id' => 2441,
                'code' => 'R9-04112025-CHE-0431',
                'information' => NULL,
                'sample_id' => 4046,
                'user_id' => 6,
                'created_at' => '2025-04-11 22:20:26',
                'updated_at' => '2025-04-11 22:20:26',
            ),
            376 => 
            array (
                'id' => 2442,
                'code' => 'R9-04112025-CHE-0432',
                'information' => NULL,
                'sample_id' => 4047,
                'user_id' => 6,
                'created_at' => '2025-04-11 22:20:42',
                'updated_at' => '2025-04-11 22:20:42',
            ),
            377 => 
            array (
                'id' => 2443,
                'code' => 'R9-04112025-CHE-0433',
                'information' => NULL,
                'sample_id' => 1688,
                'user_id' => 7,
                'created_at' => '2025-04-11 23:56:47',
                'updated_at' => '2025-04-11 23:56:47',
            ),
            378 => 
            array (
                'id' => 2444,
                'code' => 'R9-04112025-CHE-0434',
                'information' => NULL,
                'sample_id' => 1689,
                'user_id' => 7,
                'created_at' => '2025-04-11 23:56:53',
                'updated_at' => '2025-04-11 23:56:53',
            ),
            379 => 
            array (
                'id' => 2445,
                'code' => 'R9-04112025-CHE-0435',
                'information' => NULL,
                'sample_id' => 1690,
                'user_id' => 7,
                'created_at' => '2025-04-11 23:56:59',
                'updated_at' => '2025-04-11 23:56:59',
            ),
            380 => 
            array (
                'id' => 2446,
                'code' => 'R9-04112025-CHE-0436',
                'information' => NULL,
                'sample_id' => 1691,
                'user_id' => 7,
                'created_at' => '2025-04-11 23:57:07',
                'updated_at' => '2025-04-11 23:57:07',
            ),
            381 => 
            array (
                'id' => 2447,
                'code' => 'R9-04112025-CHE-0437',
                'information' => NULL,
                'sample_id' => 1692,
                'user_id' => 7,
                'created_at' => '2025-04-11 23:57:15',
                'updated_at' => '2025-04-11 23:57:15',
            ),
            382 => 
            array (
                'id' => 2448,
                'code' => 'R9-04112025-CHE-0438',
                'information' => NULL,
                'sample_id' => 1693,
                'user_id' => 7,
                'created_at' => '2025-04-11 23:57:22',
                'updated_at' => '2025-04-11 23:57:22',
            ),
            383 => 
            array (
                'id' => 2449,
                'code' => 'R9-04112025-CHE-0439',
                'information' => NULL,
                'sample_id' => 1694,
                'user_id' => 7,
                'created_at' => '2025-04-11 23:57:28',
                'updated_at' => '2025-04-11 23:57:28',
            ),
            384 => 
            array (
                'id' => 2450,
                'code' => 'R9-04112025-CHE-0440',
                'information' => NULL,
                'sample_id' => 1695,
                'user_id' => 7,
                'created_at' => '2025-04-11 23:57:36',
                'updated_at' => '2025-04-11 23:57:36',
            ),
            385 => 
            array (
                'id' => 2451,
                'code' => 'R9-04112025-CHE-0441',
                'information' => NULL,
                'sample_id' => 1696,
                'user_id' => 7,
                'created_at' => '2025-04-11 23:57:42',
                'updated_at' => '2025-04-11 23:57:42',
            ),
            386 => 
            array (
                'id' => 2452,
                'code' => 'R9-04112025-CHE-0442',
                'information' => NULL,
                'sample_id' => 1697,
                'user_id' => 7,
                'created_at' => '2025-04-11 23:57:50',
                'updated_at' => '2025-04-11 23:57:50',
            ),
            387 => 
            array (
                'id' => 2453,
                'code' => 'R9-04112025-MET-0477',
                'information' => NULL,
                'sample_id' => 3464,
                'user_id' => 12,
                'created_at' => '2025-04-12 00:33:14',
                'updated_at' => '2025-04-12 00:33:14',
            ),
            388 => 
            array (
                'id' => 2454,
                'code' => 'R9-04112025-MET-0478',
                'information' => NULL,
                'sample_id' => 3466,
                'user_id' => 12,
                'created_at' => '2025-04-12 00:33:55',
                'updated_at' => '2025-04-12 00:33:55',
            ),
            389 => 
            array (
                'id' => 2455,
                'code' => 'R9-04112025-MET-0479',
                'information' => NULL,
                'sample_id' => 3467,
                'user_id' => 12,
                'created_at' => '2025-04-12 00:34:30',
                'updated_at' => '2025-04-12 00:34:30',
            ),
            390 => 
            array (
                'id' => 2456,
                'code' => 'R9-04112025-MET-0480',
                'information' => NULL,
                'sample_id' => 3615,
                'user_id' => 12,
                'created_at' => '2025-04-12 00:35:25',
                'updated_at' => '2025-04-12 00:35:25',
            ),
            391 => 
            array (
                'id' => 2457,
                'code' => 'R9-04112025-CHE-0443',
                'information' => NULL,
                'sample_id' => 3449,
                'user_id' => 7,
                'created_at' => '2025-04-12 01:10:56',
                'updated_at' => '2025-04-12 01:10:56',
            ),
            392 => 
            array (
                'id' => 2458,
                'code' => 'R9-04112025-CHE-0444',
                'information' => NULL,
                'sample_id' => 3450,
                'user_id' => 7,
                'created_at' => '2025-04-12 01:11:01',
                'updated_at' => '2025-04-12 01:11:01',
            ),
            393 => 
            array (
                'id' => 2459,
                'code' => 'R9-04112025-CHE-0445',
                'information' => NULL,
                'sample_id' => 3451,
                'user_id' => 7,
                'created_at' => '2025-04-12 01:11:07',
                'updated_at' => '2025-04-12 01:11:07',
            ),
            394 => 
            array (
                'id' => 2460,
                'code' => 'R9-04112025-CHE-0446',
                'information' => NULL,
                'sample_id' => 3452,
                'user_id' => 7,
                'created_at' => '2025-04-12 01:11:13',
                'updated_at' => '2025-04-12 01:11:13',
            ),
            395 => 
            array (
                'id' => 2461,
                'code' => 'R9-04112025-CHE-0447',
                'information' => NULL,
                'sample_id' => 3453,
                'user_id' => 7,
                'created_at' => '2025-04-12 01:11:18',
                'updated_at' => '2025-04-12 01:11:18',
            ),
            396 => 
            array (
                'id' => 2462,
                'code' => 'R9-04142025-CHE-0448',
                'information' => NULL,
                'sample_id' => 4103,
                'user_id' => 7,
                'created_at' => '2025-04-14 15:20:00',
                'updated_at' => '2025-04-14 15:20:00',
            ),
            397 => 
            array (
                'id' => 2463,
                'code' => 'R9-04142025-CHE-0449',
                'information' => NULL,
                'sample_id' => 3430,
                'user_id' => 8,
                'created_at' => '2025-04-14 16:39:55',
                'updated_at' => '2025-04-14 16:39:55',
            ),
            398 => 
            array (
                'id' => 2464,
                'code' => 'R9-04142025-CHE-0450',
                'information' => NULL,
                'sample_id' => 3431,
                'user_id' => 8,
                'created_at' => '2025-04-14 16:40:14',
                'updated_at' => '2025-04-14 16:40:14',
            ),
            399 => 
            array (
                'id' => 2465,
                'code' => 'R9-04142025-CHE-0451',
                'information' => NULL,
                'sample_id' => 3432,
                'user_id' => 8,
                'created_at' => '2025-04-14 16:40:19',
                'updated_at' => '2025-04-14 16:40:19',
            ),
            400 => 
            array (
                'id' => 2466,
                'code' => 'R9-04142025-CHE-0452',
                'information' => NULL,
                'sample_id' => 3433,
                'user_id' => 8,
                'created_at' => '2025-04-14 16:40:38',
                'updated_at' => '2025-04-14 16:40:38',
            ),
            401 => 
            array (
                'id' => 2467,
                'code' => 'R9-04142025-CHE-0453',
                'information' => NULL,
                'sample_id' => 3434,
                'user_id' => 8,
                'created_at' => '2025-04-14 16:40:44',
                'updated_at' => '2025-04-14 16:40:44',
            ),
            402 => 
            array (
                'id' => 2468,
                'code' => 'R9-04142025-CHE-0454',
                'information' => NULL,
                'sample_id' => 3435,
                'user_id' => 8,
                'created_at' => '2025-04-14 16:40:54',
                'updated_at' => '2025-04-14 16:40:54',
            ),
            403 => 
            array (
                'id' => 2469,
                'code' => 'R9-04142025-CHE-0455',
                'information' => NULL,
                'sample_id' => 3436,
                'user_id' => 8,
                'created_at' => '2025-04-14 16:40:57',
                'updated_at' => '2025-04-14 16:40:57',
            ),
            404 => 
            array (
                'id' => 2470,
                'code' => 'R9-04142025-CHE-0456',
                'information' => NULL,
                'sample_id' => 3437,
                'user_id' => 8,
                'created_at' => '2025-04-14 16:41:00',
                'updated_at' => '2025-04-14 16:41:00',
            ),
            405 => 
            array (
                'id' => 2471,
                'code' => 'R9-04142025-CHE-0457',
                'information' => NULL,
                'sample_id' => 3438,
                'user_id' => 8,
                'created_at' => '2025-04-14 16:41:03',
                'updated_at' => '2025-04-14 16:41:03',
            ),
            406 => 
            array (
                'id' => 2472,
                'code' => 'R9-04142025-CHE-0458',
                'information' => NULL,
                'sample_id' => 3439,
                'user_id' => 8,
                'created_at' => '2025-04-14 16:41:07',
                'updated_at' => '2025-04-14 16:41:07',
            ),
            407 => 
            array (
                'id' => 2473,
                'code' => 'R9-04142025-CHE-0459',
                'information' => NULL,
                'sample_id' => 3440,
                'user_id' => 8,
                'created_at' => '2025-04-14 16:41:14',
                'updated_at' => '2025-04-14 16:41:14',
            ),
            408 => 
            array (
                'id' => 2474,
                'code' => 'R9-04142025-CHE-0460',
                'information' => NULL,
                'sample_id' => 3441,
                'user_id' => 8,
                'created_at' => '2025-04-14 16:41:17',
                'updated_at' => '2025-04-14 16:41:17',
            ),
            409 => 
            array (
                'id' => 2475,
                'code' => 'R9-04142025-CHE-0461',
                'information' => NULL,
                'sample_id' => 3994,
                'user_id' => 8,
                'created_at' => '2025-04-14 17:57:17',
                'updated_at' => '2025-04-14 17:57:17',
            ),
            410 => 
            array (
                'id' => 2476,
                'code' => 'R9-04142025-CHE-0462',
                'information' => NULL,
                'sample_id' => 4040,
                'user_id' => 8,
                'created_at' => '2025-04-14 18:15:52',
                'updated_at' => '2025-04-14 18:15:52',
            ),
            411 => 
            array (
                'id' => 2477,
                'code' => 'R9-04142025-MET-0481',
                'information' => NULL,
                'sample_id' => 2990,
                'user_id' => 5,
                'created_at' => '2025-04-14 21:15:09',
                'updated_at' => '2025-04-14 21:15:09',
            ),
            412 => 
            array (
                'id' => 2478,
                'code' => 'R9-04142025-MET-0482',
                'information' => NULL,
                'sample_id' => 2991,
                'user_id' => 5,
                'created_at' => '2025-04-14 21:15:35',
                'updated_at' => '2025-04-14 21:15:35',
            ),
            413 => 
            array (
                'id' => 2479,
                'code' => 'R9-04142025-MET-0483',
                'information' => NULL,
                'sample_id' => 2992,
                'user_id' => 5,
                'created_at' => '2025-04-14 21:16:02',
                'updated_at' => '2025-04-14 21:16:02',
            ),
            414 => 
            array (
                'id' => 2480,
                'code' => 'R9-04142025-MET-0484',
                'information' => NULL,
                'sample_id' => 3001,
                'user_id' => 5,
                'created_at' => '2025-04-14 21:17:43',
                'updated_at' => '2025-04-14 21:17:43',
            ),
            415 => 
            array (
                'id' => 2481,
                'code' => 'R9-04142025-MET-0485',
                'information' => NULL,
                'sample_id' => 3002,
                'user_id' => 5,
                'created_at' => '2025-04-14 21:18:03',
                'updated_at' => '2025-04-14 21:18:03',
            ),
            416 => 
            array (
                'id' => 2482,
                'code' => 'R9-04142025-MET-0486',
                'information' => NULL,
                'sample_id' => 3025,
                'user_id' => 5,
                'created_at' => '2025-04-14 21:20:09',
                'updated_at' => '2025-04-14 21:20:09',
            ),
            417 => 
            array (
                'id' => 2483,
                'code' => 'R9-04142025-MET-0487',
                'information' => NULL,
                'sample_id' => 3026,
                'user_id' => 5,
                'created_at' => '2025-04-14 21:20:26',
                'updated_at' => '2025-04-14 21:20:26',
            ),
            418 => 
            array (
                'id' => 2484,
                'code' => 'R9-04142025-MET-0488',
                'information' => NULL,
                'sample_id' => 3027,
                'user_id' => 5,
                'created_at' => '2025-04-14 21:20:55',
                'updated_at' => '2025-04-14 21:20:55',
            ),
            419 => 
            array (
                'id' => 2485,
                'code' => 'R9-04152025-CHE-0463',
                'information' => NULL,
                'sample_id' => 4033,
                'user_id' => 7,
                'created_at' => '2025-04-15 16:38:50',
                'updated_at' => '2025-04-15 16:38:50',
            ),
            420 => 
            array (
                'id' => 2486,
                'code' => 'R9-04152025-CHE-0464',
                'information' => NULL,
                'sample_id' => 4034,
                'user_id' => 7,
                'created_at' => '2025-04-15 16:39:11',
                'updated_at' => '2025-04-15 16:39:11',
            ),
            421 => 
            array (
                'id' => 2487,
                'code' => 'R9-04152025-CHE-0465',
                'information' => NULL,
                'sample_id' => 4035,
                'user_id' => 7,
                'created_at' => '2025-04-15 16:39:20',
                'updated_at' => '2025-04-15 16:39:20',
            ),
            422 => 
            array (
                'id' => 2488,
                'code' => 'R9-04152025-CHE-0466',
                'information' => NULL,
                'sample_id' => 4036,
                'user_id' => 7,
                'created_at' => '2025-04-15 16:41:58',
                'updated_at' => '2025-04-15 16:41:58',
            ),
            423 => 
            array (
                'id' => 2489,
                'code' => 'R9-04152025-CHE-0467',
                'information' => NULL,
                'sample_id' => 4037,
                'user_id' => 7,
                'created_at' => '2025-04-15 16:42:11',
                'updated_at' => '2025-04-15 16:42:11',
            ),
            424 => 
            array (
                'id' => 2490,
                'code' => 'R9-04152025-MET-0489',
                'information' => NULL,
                'sample_id' => 4142,
                'user_id' => 13,
                'created_at' => '2025-04-15 18:00:46',
                'updated_at' => '2025-04-15 18:00:46',
            ),
            425 => 
            array (
                'id' => 2491,
                'code' => 'R9-04152025-MIC-0257',
                'information' => NULL,
                'sample_id' => 3618,
                'user_id' => 16,
                'created_at' => '2025-04-15 18:47:06',
                'updated_at' => '2025-04-15 18:47:06',
            ),
            426 => 
            array (
                'id' => 2492,
                'code' => 'R9-04152025-MIC-0258',
                'information' => NULL,
                'sample_id' => 3910,
                'user_id' => 16,
                'created_at' => '2025-04-15 20:16:35',
                'updated_at' => '2025-04-15 20:16:35',
            ),
            427 => 
            array (
                'id' => 2493,
                'code' => 'R9-04152025-MIC-0259',
                'information' => NULL,
                'sample_id' => 3911,
                'user_id' => 16,
                'created_at' => '2025-04-15 20:17:12',
                'updated_at' => '2025-04-15 20:17:12',
            ),
            428 => 
            array (
                'id' => 2494,
                'code' => 'R9-04152025-MIC-0260',
                'information' => NULL,
                'sample_id' => 3912,
                'user_id' => 16,
                'created_at' => '2025-04-15 20:17:23',
                'updated_at' => '2025-04-15 20:17:23',
            ),
            429 => 
            array (
                'id' => 2495,
                'code' => 'R9-04152025-MIC-0261',
                'information' => NULL,
                'sample_id' => 3913,
                'user_id' => 16,
                'created_at' => '2025-04-15 20:17:35',
                'updated_at' => '2025-04-15 20:17:35',
            ),
            430 => 
            array (
                'id' => 2496,
                'code' => 'R9-04152025-MIC-0262',
                'information' => NULL,
                'sample_id' => 3914,
                'user_id' => 16,
                'created_at' => '2025-04-15 20:17:58',
                'updated_at' => '2025-04-15 20:17:58',
            ),
            431 => 
            array (
                'id' => 2497,
                'code' => 'R9-04152025-MIC-0263',
                'information' => NULL,
                'sample_id' => 3915,
                'user_id' => 16,
                'created_at' => '2025-04-15 20:18:14',
                'updated_at' => '2025-04-15 20:18:14',
            ),
            432 => 
            array (
                'id' => 2498,
                'code' => 'R9-04152025-MIC-0264',
                'information' => NULL,
                'sample_id' => 4012,
                'user_id' => 16,
                'created_at' => '2025-04-15 21:01:31',
                'updated_at' => '2025-04-15 21:01:31',
            ),
            433 => 
            array (
                'id' => 2499,
                'code' => 'R9-04152025-MIC-0265',
                'information' => NULL,
                'sample_id' => 4024,
                'user_id' => 16,
                'created_at' => '2025-04-15 21:13:59',
                'updated_at' => '2025-04-15 21:13:59',
            ),
            434 => 
            array (
                'id' => 2500,
                'code' => 'R9-04152025-MIC-0266',
                'information' => NULL,
                'sample_id' => 4025,
                'user_id' => 16,
                'created_at' => '2025-04-15 21:14:22',
                'updated_at' => '2025-04-15 21:14:22',
            ),
            435 => 
            array (
                'id' => 2501,
                'code' => 'R9-04152025-MIC-0267',
                'information' => NULL,
                'sample_id' => 4026,
                'user_id' => 16,
                'created_at' => '2025-04-15 21:26:09',
                'updated_at' => '2025-04-15 21:26:09',
            ),
            436 => 
            array (
                'id' => 2502,
                'code' => 'R9-04152025-MIC-0268',
                'information' => NULL,
                'sample_id' => 4041,
                'user_id' => 16,
                'created_at' => '2025-04-15 21:58:27',
                'updated_at' => '2025-04-15 21:58:27',
            ),
            437 => 
            array (
                'id' => 2503,
                'code' => 'R9-04152025-MIC-0269',
                'information' => NULL,
                'sample_id' => 4042,
                'user_id' => 16,
                'created_at' => '2025-04-15 22:01:57',
                'updated_at' => '2025-04-15 22:01:57',
            ),
            438 => 
            array (
                'id' => 2504,
                'code' => 'R9-04152025-MIC-0270',
                'information' => NULL,
                'sample_id' => 4043,
                'user_id' => 16,
                'created_at' => '2025-04-15 22:02:28',
                'updated_at' => '2025-04-15 22:02:28',
            ),
            439 => 
            array (
                'id' => 2505,
                'code' => 'R9-04152025-MET-0490',
                'information' => NULL,
                'sample_id' => 2978,
                'user_id' => 13,
                'created_at' => '2025-04-15 23:56:39',
                'updated_at' => '2025-04-15 23:56:39',
            ),
            440 => 
            array (
                'id' => 2506,
                'code' => 'R9-04152025-MET-0491',
                'information' => NULL,
                'sample_id' => 2979,
                'user_id' => 13,
                'created_at' => '2025-04-15 23:56:43',
                'updated_at' => '2025-04-15 23:56:43',
            ),
            441 => 
            array (
                'id' => 2507,
                'code' => 'R9-04152025-MET-0492',
                'information' => NULL,
                'sample_id' => 2980,
                'user_id' => 13,
                'created_at' => '2025-04-15 23:56:47',
                'updated_at' => '2025-04-15 23:56:47',
            ),
            442 => 
            array (
                'id' => 2508,
                'code' => 'R9-04152025-MET-0493',
                'information' => NULL,
                'sample_id' => 2981,
                'user_id' => 13,
                'created_at' => '2025-04-15 23:56:51',
                'updated_at' => '2025-04-15 23:56:51',
            ),
            443 => 
            array (
                'id' => 2509,
                'code' => 'R9-04152025-MET-0494',
                'information' => NULL,
                'sample_id' => 2982,
                'user_id' => 13,
                'created_at' => '2025-04-15 23:56:57',
                'updated_at' => '2025-04-15 23:56:57',
            ),
            444 => 
            array (
                'id' => 2510,
                'code' => 'R9-04152025-MET-0495',
                'information' => NULL,
                'sample_id' => 2983,
                'user_id' => 13,
                'created_at' => '2025-04-15 23:57:13',
                'updated_at' => '2025-04-15 23:57:13',
            ),
            445 => 
            array (
                'id' => 2511,
                'code' => 'R9-04152025-MET-0496',
                'information' => NULL,
                'sample_id' => 2972,
                'user_id' => 13,
                'created_at' => '2025-04-15 23:58:10',
                'updated_at' => '2025-04-15 23:58:10',
            ),
            446 => 
            array (
                'id' => 2512,
                'code' => 'R9-04152025-MET-0497',
                'information' => NULL,
                'sample_id' => 2973,
                'user_id' => 13,
                'created_at' => '2025-04-15 23:58:15',
                'updated_at' => '2025-04-15 23:58:15',
            ),
            447 => 
            array (
                'id' => 2513,
                'code' => 'R9-04152025-MET-0498',
                'information' => NULL,
                'sample_id' => 2974,
                'user_id' => 13,
                'created_at' => '2025-04-15 23:58:19',
                'updated_at' => '2025-04-15 23:58:19',
            ),
            448 => 
            array (
                'id' => 2514,
                'code' => 'R9-04152025-MET-0499',
                'information' => NULL,
                'sample_id' => 2975,
                'user_id' => 13,
                'created_at' => '2025-04-15 23:58:24',
                'updated_at' => '2025-04-15 23:58:24',
            ),
            449 => 
            array (
                'id' => 2515,
                'code' => 'R9-04152025-MET-0500',
                'information' => NULL,
                'sample_id' => 2976,
                'user_id' => 13,
                'created_at' => '2025-04-15 23:58:29',
                'updated_at' => '2025-04-15 23:58:29',
            ),
            450 => 
            array (
                'id' => 2516,
                'code' => 'R9-04152025-MET-0501',
                'information' => NULL,
                'sample_id' => 2977,
                'user_id' => 13,
                'created_at' => '2025-04-15 23:58:32',
                'updated_at' => '2025-04-15 23:58:32',
            ),
            451 => 
            array (
                'id' => 2517,
                'code' => 'R9-04152025-MET-0502',
                'information' => NULL,
                'sample_id' => 2984,
                'user_id' => 13,
                'created_at' => '2025-04-15 23:59:26',
                'updated_at' => '2025-04-15 23:59:26',
            ),
            452 => 
            array (
                'id' => 2518,
                'code' => 'R9-04152025-MET-0503',
                'information' => NULL,
                'sample_id' => 2985,
                'user_id' => 13,
                'created_at' => '2025-04-15 23:59:31',
                'updated_at' => '2025-04-15 23:59:31',
            ),
            453 => 
            array (
                'id' => 2519,
                'code' => 'R9-04152025-MET-0504',
                'information' => NULL,
                'sample_id' => 2986,
                'user_id' => 13,
                'created_at' => '2025-04-15 23:59:35',
                'updated_at' => '2025-04-15 23:59:35',
            ),
            454 => 
            array (
                'id' => 2520,
                'code' => 'R9-04152025-MET-0505',
                'information' => NULL,
                'sample_id' => 2987,
                'user_id' => 13,
                'created_at' => '2025-04-15 23:59:39',
                'updated_at' => '2025-04-15 23:59:39',
            ),
            455 => 
            array (
                'id' => 2521,
                'code' => 'R9-04152025-MET-0506',
                'information' => NULL,
                'sample_id' => 2988,
                'user_id' => 13,
                'created_at' => '2025-04-15 23:59:46',
                'updated_at' => '2025-04-15 23:59:46',
            ),
            456 => 
            array (
                'id' => 2522,
                'code' => 'R9-04152025-MET-0507',
                'information' => NULL,
                'sample_id' => 2989,
                'user_id' => 13,
                'created_at' => '2025-04-15 23:59:52',
                'updated_at' => '2025-04-15 23:59:52',
            ),
            457 => 
            array (
                'id' => 2523,
                'code' => 'R9-04152025-MET-0508',
                'information' => NULL,
                'sample_id' => 3007,
                'user_id' => 13,
                'created_at' => '2025-04-16 00:00:35',
                'updated_at' => '2025-04-16 00:00:35',
            ),
            458 => 
            array (
                'id' => 2524,
                'code' => 'R9-04152025-MET-0509',
                'information' => NULL,
                'sample_id' => 3008,
                'user_id' => 13,
                'created_at' => '2025-04-16 00:00:39',
                'updated_at' => '2025-04-16 00:00:39',
            ),
            459 => 
            array (
                'id' => 2525,
                'code' => 'R9-04152025-MET-0510',
                'information' => NULL,
                'sample_id' => 3009,
                'user_id' => 13,
                'created_at' => '2025-04-16 00:00:42',
                'updated_at' => '2025-04-16 00:00:42',
            ),
            460 => 
            array (
                'id' => 2526,
                'code' => 'R9-04152025-MET-0511',
                'information' => NULL,
                'sample_id' => 3010,
                'user_id' => 13,
                'created_at' => '2025-04-16 00:00:45',
                'updated_at' => '2025-04-16 00:00:45',
            ),
            461 => 
            array (
                'id' => 2527,
                'code' => 'R9-04152025-MET-0512',
                'information' => NULL,
                'sample_id' => 3011,
                'user_id' => 13,
                'created_at' => '2025-04-16 00:00:50',
                'updated_at' => '2025-04-16 00:00:50',
            ),
            462 => 
            array (
                'id' => 2528,
                'code' => 'R9-04152025-MET-0513',
                'information' => NULL,
                'sample_id' => 3012,
                'user_id' => 13,
                'created_at' => '2025-04-16 00:00:54',
                'updated_at' => '2025-04-16 00:00:54',
            ),
            463 => 
            array (
                'id' => 2529,
                'code' => 'R9-04152025-MET-0514',
                'information' => NULL,
                'sample_id' => 3013,
                'user_id' => 13,
                'created_at' => '2025-04-16 00:01:53',
                'updated_at' => '2025-04-16 00:01:53',
            ),
            464 => 
            array (
                'id' => 2530,
                'code' => 'R9-04152025-MET-0515',
                'information' => NULL,
                'sample_id' => 3014,
                'user_id' => 13,
                'created_at' => '2025-04-16 00:01:57',
                'updated_at' => '2025-04-16 00:01:57',
            ),
            465 => 
            array (
                'id' => 2531,
                'code' => 'R9-04152025-MET-0516',
                'information' => NULL,
                'sample_id' => 3015,
                'user_id' => 13,
                'created_at' => '2025-04-16 00:02:00',
                'updated_at' => '2025-04-16 00:02:00',
            ),
            466 => 
            array (
                'id' => 2532,
                'code' => 'R9-04152025-MET-0517',
                'information' => NULL,
                'sample_id' => 3016,
                'user_id' => 13,
                'created_at' => '2025-04-16 00:02:04',
                'updated_at' => '2025-04-16 00:02:04',
            ),
            467 => 
            array (
                'id' => 2533,
                'code' => 'R9-04152025-MET-0518',
                'information' => NULL,
                'sample_id' => 3017,
                'user_id' => 13,
                'created_at' => '2025-04-16 00:02:07',
                'updated_at' => '2025-04-16 00:02:07',
            ),
            468 => 
            array (
                'id' => 2534,
                'code' => 'R9-04152025-MET-0519',
                'information' => NULL,
                'sample_id' => 3018,
                'user_id' => 13,
                'created_at' => '2025-04-16 00:02:12',
                'updated_at' => '2025-04-16 00:02:12',
            ),
            469 => 
            array (
                'id' => 2535,
                'code' => 'R9-04152025-MET-0520',
                'information' => NULL,
                'sample_id' => 3019,
                'user_id' => 13,
                'created_at' => '2025-04-16 00:03:46',
                'updated_at' => '2025-04-16 00:03:46',
            ),
            470 => 
            array (
                'id' => 2536,
                'code' => 'R9-04152025-MET-0521',
                'information' => NULL,
                'sample_id' => 3020,
                'user_id' => 13,
                'created_at' => '2025-04-16 00:03:49',
                'updated_at' => '2025-04-16 00:03:49',
            ),
            471 => 
            array (
                'id' => 2537,
                'code' => 'R9-04152025-MET-0522',
                'information' => NULL,
                'sample_id' => 3021,
                'user_id' => 13,
                'created_at' => '2025-04-16 00:03:53',
                'updated_at' => '2025-04-16 00:03:53',
            ),
            472 => 
            array (
                'id' => 2538,
                'code' => 'R9-04152025-MET-0523',
                'information' => NULL,
                'sample_id' => 3022,
                'user_id' => 13,
                'created_at' => '2025-04-16 00:03:56',
                'updated_at' => '2025-04-16 00:03:56',
            ),
            473 => 
            array (
                'id' => 2539,
                'code' => 'R9-04152025-MET-0524',
                'information' => NULL,
                'sample_id' => 3023,
                'user_id' => 13,
                'created_at' => '2025-04-16 00:04:03',
                'updated_at' => '2025-04-16 00:04:03',
            ),
            474 => 
            array (
                'id' => 2540,
                'code' => 'R9-04152025-MET-0525',
                'information' => NULL,
                'sample_id' => 3024,
                'user_id' => 13,
                'created_at' => '2025-04-16 00:04:11',
                'updated_at' => '2025-04-16 00:04:11',
            ),
            475 => 
            array (
                'id' => 2541,
                'code' => 'R9-04152025-CHE-0468',
                'information' => NULL,
                'sample_id' => 3666,
                'user_id' => 8,
                'created_at' => '2025-04-16 06:04:14',
                'updated_at' => '2025-04-16 06:04:14',
            ),
            476 => 
            array (
                'id' => 2542,
                'code' => 'R9-04152025-CHE-0469',
                'information' => NULL,
                'sample_id' => 3667,
                'user_id' => 8,
                'created_at' => '2025-04-16 06:04:23',
                'updated_at' => '2025-04-16 06:04:23',
            ),
            477 => 
            array (
                'id' => 2543,
                'code' => 'R9-04152025-CHE-0470',
                'information' => NULL,
                'sample_id' => 3668,
                'user_id' => 8,
                'created_at' => '2025-04-16 06:04:33',
                'updated_at' => '2025-04-16 06:04:33',
            ),
            478 => 
            array (
                'id' => 2544,
                'code' => 'R9-04152025-CHE-0471',
                'information' => NULL,
                'sample_id' => 3669,
                'user_id' => 8,
                'created_at' => '2025-04-16 06:05:25',
                'updated_at' => '2025-04-16 06:05:25',
            ),
            479 => 
            array (
                'id' => 2545,
                'code' => 'R9-04152025-CHE-0472',
                'information' => NULL,
                'sample_id' => 3670,
                'user_id' => 8,
                'created_at' => '2025-04-16 06:05:34',
                'updated_at' => '2025-04-16 06:05:34',
            ),
            480 => 
            array (
                'id' => 2546,
                'code' => 'R9-04152025-CHE-0473',
                'information' => NULL,
                'sample_id' => 3933,
                'user_id' => 8,
                'created_at' => '2025-04-16 06:13:33',
                'updated_at' => '2025-04-16 06:13:33',
            ),
            481 => 
            array (
                'id' => 2547,
                'code' => 'R9-04152025-CHE-0474',
                'information' => NULL,
                'sample_id' => 3934,
                'user_id' => 8,
                'created_at' => '2025-04-16 06:13:40',
                'updated_at' => '2025-04-16 06:13:40',
            ),
            482 => 
            array (
                'id' => 2548,
                'code' => 'R9-04152025-CHE-0475',
                'information' => NULL,
                'sample_id' => 3935,
                'user_id' => 8,
                'created_at' => '2025-04-16 06:13:49',
                'updated_at' => '2025-04-16 06:13:49',
            ),
            483 => 
            array (
                'id' => 2549,
                'code' => 'R9-04152025-CHE-0476',
                'information' => NULL,
                'sample_id' => 3936,
                'user_id' => 8,
                'created_at' => '2025-04-16 06:14:01',
                'updated_at' => '2025-04-16 06:14:01',
            ),
            484 => 
            array (
                'id' => 2550,
                'code' => 'R9-04152025-CHE-0477',
                'information' => NULL,
                'sample_id' => 3937,
                'user_id' => 8,
                'created_at' => '2025-04-16 06:14:09',
                'updated_at' => '2025-04-16 06:14:09',
            ),
            485 => 
            array (
                'id' => 2551,
                'code' => 'R9-04162025-MET-0526',
                'information' => NULL,
                'sample_id' => 3198,
                'user_id' => 12,
                'created_at' => '2025-04-16 16:59:29',
                'updated_at' => '2025-04-16 16:59:29',
            ),
            486 => 
            array (
                'id' => 2552,
                'code' => 'R9-04162025-MET-0527',
                'information' => NULL,
                'sample_id' => 3199,
                'user_id' => 12,
                'created_at' => '2025-04-16 16:59:33',
                'updated_at' => '2025-04-16 16:59:33',
            ),
            487 => 
            array (
                'id' => 2553,
                'code' => 'R9-04162025-MET-0528',
                'information' => NULL,
                'sample_id' => 3200,
                'user_id' => 12,
                'created_at' => '2025-04-16 16:59:37',
                'updated_at' => '2025-04-16 16:59:37',
            ),
            488 => 
            array (
                'id' => 2554,
                'code' => 'R9-04162025-MET-0529',
                'information' => NULL,
                'sample_id' => 3201,
                'user_id' => 12,
                'created_at' => '2025-04-16 17:01:21',
                'updated_at' => '2025-04-16 17:01:21',
            ),
            489 => 
            array (
                'id' => 2555,
                'code' => 'R9-04162025-MET-0530',
                'information' => NULL,
                'sample_id' => 3202,
                'user_id' => 12,
                'created_at' => '2025-04-16 17:01:26',
                'updated_at' => '2025-04-16 17:01:26',
            ),
            490 => 
            array (
                'id' => 2556,
                'code' => 'R9-04162025-MET-0531',
                'information' => NULL,
                'sample_id' => 3203,
                'user_id' => 12,
                'created_at' => '2025-04-16 17:01:30',
                'updated_at' => '2025-04-16 17:01:30',
            ),
            491 => 
            array (
                'id' => 2557,
                'code' => 'R9-04162025-MET-0532',
                'information' => NULL,
                'sample_id' => 3204,
                'user_id' => 12,
                'created_at' => '2025-04-16 17:01:40',
                'updated_at' => '2025-04-16 17:01:40',
            ),
            492 => 
            array (
                'id' => 2558,
                'code' => 'R9-04162025-CHE-0478',
                'information' => NULL,
                'sample_id' => 4107,
                'user_id' => 7,
                'created_at' => '2025-04-16 19:11:03',
                'updated_at' => '2025-04-16 19:11:03',
            ),
            493 => 
            array (
                'id' => 2559,
                'code' => 'R9-04162025-CHE-0479',
                'information' => NULL,
                'sample_id' => 4108,
                'user_id' => 7,
                'created_at' => '2025-04-16 19:11:23',
                'updated_at' => '2025-04-16 19:11:23',
            ),
            494 => 
            array (
                'id' => 2560,
                'code' => 'R9-04162025-CHE-0480',
                'information' => NULL,
                'sample_id' => 4109,
                'user_id' => 7,
                'created_at' => '2025-04-16 19:11:34',
                'updated_at' => '2025-04-16 19:11:34',
            ),
            495 => 
            array (
                'id' => 2561,
                'code' => 'R9-04162025-CHE-0481',
                'information' => NULL,
                'sample_id' => 3477,
                'user_id' => 8,
                'created_at' => '2025-04-16 21:30:12',
                'updated_at' => '2025-04-16 21:30:12',
            ),
            496 => 
            array (
                'id' => 2562,
                'code' => 'R9-04162025-CHE-0482',
                'information' => NULL,
                'sample_id' => 3465,
                'user_id' => 8,
                'created_at' => '2025-04-16 22:09:42',
                'updated_at' => '2025-04-16 22:09:42',
            ),
            497 => 
            array (
                'id' => 2563,
                'code' => 'R9-04162025-CHE-0483',
                'information' => NULL,
                'sample_id' => 3729,
                'user_id' => 8,
                'created_at' => '2025-04-17 00:36:45',
                'updated_at' => '2025-04-17 00:36:45',
            ),
            498 => 
            array (
                'id' => 2564,
                'code' => 'R9-04162025-CHE-0484',
                'information' => NULL,
                'sample_id' => 3730,
                'user_id' => 8,
                'created_at' => '2025-04-17 00:36:50',
                'updated_at' => '2025-04-17 00:36:50',
            ),
            499 => 
            array (
                'id' => 2565,
                'code' => 'R9-04162025-CHE-0485',
                'information' => NULL,
                'sample_id' => 3731,
                'user_id' => 8,
                'created_at' => '2025-04-17 00:37:57',
                'updated_at' => '2025-04-17 00:37:57',
            ),
        ));
        \DB::table('tsr_sample_reports')->insert(array (
            0 => 
            array (
                'id' => 2566,
                'code' => 'R9-04162025-CHE-0486',
                'information' => NULL,
                'sample_id' => 3931,
                'user_id' => 8,
                'created_at' => '2025-04-17 00:38:15',
                'updated_at' => '2025-04-17 00:38:15',
            ),
            1 => 
            array (
                'id' => 2567,
                'code' => 'R9-04162025-CHE-0487',
                'information' => NULL,
                'sample_id' => 4004,
                'user_id' => 8,
                'created_at' => '2025-04-17 02:15:29',
                'updated_at' => '2025-04-17 02:15:29',
            ),
            2 => 
            array (
                'id' => 2568,
                'code' => 'R9-04162025-CHE-0488',
                'information' => NULL,
                'sample_id' => 4005,
                'user_id' => 8,
                'created_at' => '2025-04-17 02:15:42',
                'updated_at' => '2025-04-17 02:15:42',
            ),
            3 => 
            array (
                'id' => 2569,
                'code' => 'R9-04162025-CHE-0489',
                'information' => NULL,
                'sample_id' => 4006,
                'user_id' => 8,
                'created_at' => '2025-04-17 02:15:49',
                'updated_at' => '2025-04-17 02:15:49',
            ),
            4 => 
            array (
                'id' => 2570,
                'code' => 'R9-04162025-CHE-0490',
                'information' => NULL,
                'sample_id' => 4007,
                'user_id' => 8,
                'created_at' => '2025-04-17 02:15:59',
                'updated_at' => '2025-04-17 02:15:59',
            ),
            5 => 
            array (
                'id' => 2571,
                'code' => 'R9-04162025-CHE-0491',
                'information' => NULL,
                'sample_id' => 4008,
                'user_id' => 8,
                'created_at' => '2025-04-17 02:16:09',
                'updated_at' => '2025-04-17 02:16:09',
            ),
            6 => 
            array (
                'id' => 2572,
                'code' => 'R9-04162025-CHE-0492',
                'information' => NULL,
                'sample_id' => 4009,
                'user_id' => 8,
                'created_at' => '2025-04-17 02:16:14',
                'updated_at' => '2025-04-17 02:16:14',
            ),
            7 => 
            array (
                'id' => 2573,
                'code' => 'R9-04162025-CHE-0493',
                'information' => NULL,
                'sample_id' => 4010,
                'user_id' => 8,
                'created_at' => '2025-04-17 02:16:19',
                'updated_at' => '2025-04-17 02:16:19',
            ),
            8 => 
            array (
                'id' => 2574,
                'code' => 'R9-04212025-MET-0533',
                'information' => NULL,
                'sample_id' => 3700,
                'user_id' => 12,
                'created_at' => '2025-04-21 19:29:02',
                'updated_at' => '2025-04-21 19:29:02',
            ),
            9 => 
            array (
                'id' => 2575,
                'code' => 'R9-04212025-MET-0534',
                'information' => NULL,
                'sample_id' => 3701,
                'user_id' => 12,
                'created_at' => '2025-04-21 19:30:17',
                'updated_at' => '2025-04-21 19:30:17',
            ),
            10 => 
            array (
                'id' => 2576,
                'code' => 'R9-04212025-MET-0535',
                'information' => NULL,
                'sample_id' => 3702,
                'user_id' => 12,
                'created_at' => '2025-04-21 19:31:23',
                'updated_at' => '2025-04-21 19:31:23',
            ),
            11 => 
            array (
                'id' => 2577,
                'code' => 'R9-04212025-MET-0536',
                'information' => NULL,
                'sample_id' => 3703,
                'user_id' => 12,
                'created_at' => '2025-04-21 19:32:22',
                'updated_at' => '2025-04-21 19:32:22',
            ),
            12 => 
            array (
                'id' => 2578,
                'code' => 'R9-04212025-MET-0537',
                'information' => NULL,
                'sample_id' => 3704,
                'user_id' => 12,
                'created_at' => '2025-04-21 19:33:09',
                'updated_at' => '2025-04-21 19:33:09',
            ),
            13 => 
            array (
                'id' => 2579,
                'code' => 'R9-04212025-MET-0538',
                'information' => NULL,
                'sample_id' => 4216,
                'user_id' => 12,
                'created_at' => '2025-04-21 20:00:46',
                'updated_at' => '2025-04-21 20:00:46',
            ),
            14 => 
            array (
                'id' => 2580,
                'code' => 'R9-04212025-MIC-0271',
                'information' => NULL,
                'sample_id' => 3712,
                'user_id' => 16,
                'created_at' => '2025-04-21 20:18:26',
                'updated_at' => '2025-04-21 20:18:26',
            ),
            15 => 
            array (
                'id' => 2581,
                'code' => 'R9-04212025-MIC-0272',
                'information' => NULL,
                'sample_id' => 3713,
                'user_id' => 16,
                'created_at' => '2025-04-21 20:18:57',
                'updated_at' => '2025-04-21 20:18:57',
            ),
            16 => 
            array (
                'id' => 2582,
                'code' => 'R9-04212025-MIC-0273',
                'information' => NULL,
                'sample_id' => 4099,
                'user_id' => 16,
                'created_at' => '2025-04-21 20:19:47',
                'updated_at' => '2025-04-21 20:19:47',
            ),
            17 => 
            array (
                'id' => 2583,
                'code' => 'R9-04212025-MIC-0274',
                'information' => NULL,
                'sample_id' => 4100,
                'user_id' => 16,
                'created_at' => '2025-04-21 20:20:09',
                'updated_at' => '2025-04-21 20:20:09',
            ),
            18 => 
            array (
                'id' => 2584,
                'code' => 'R9-04212025-MIC-0275',
                'information' => NULL,
                'sample_id' => 4120,
                'user_id' => 16,
                'created_at' => '2025-04-21 20:20:37',
                'updated_at' => '2025-04-21 20:20:37',
            ),
            19 => 
            array (
                'id' => 2585,
                'code' => 'R9-04212025-CHE-0494',
                'information' => NULL,
                'sample_id' => 3502,
                'user_id' => 8,
                'created_at' => '2025-04-21 20:59:05',
                'updated_at' => '2025-04-21 20:59:05',
            ),
            20 => 
            array (
                'id' => 2586,
                'code' => 'R9-04212025-CHE-0495',
                'information' => NULL,
                'sample_id' => 3503,
                'user_id' => 8,
                'created_at' => '2025-04-21 20:59:21',
                'updated_at' => '2025-04-21 20:59:21',
            ),
            21 => 
            array (
                'id' => 2587,
                'code' => 'R9-04212025-CHE-0496',
                'information' => NULL,
                'sample_id' => 3504,
                'user_id' => 8,
                'created_at' => '2025-04-21 20:59:27',
                'updated_at' => '2025-04-21 20:59:27',
            ),
            22 => 
            array (
                'id' => 2588,
                'code' => 'R9-04212025-CHE-0497',
                'information' => NULL,
                'sample_id' => 3505,
                'user_id' => 8,
                'created_at' => '2025-04-21 20:59:33',
                'updated_at' => '2025-04-21 20:59:33',
            ),
            23 => 
            array (
                'id' => 2589,
                'code' => 'R9-04212025-CHE-0498',
                'information' => NULL,
                'sample_id' => 3506,
                'user_id' => 8,
                'created_at' => '2025-04-21 20:59:40',
                'updated_at' => '2025-04-21 20:59:40',
            ),
            24 => 
            array (
                'id' => 2590,
                'code' => 'R9-04212025-CHE-0499',
                'information' => NULL,
                'sample_id' => 3507,
                'user_id' => 8,
                'created_at' => '2025-04-21 20:59:44',
                'updated_at' => '2025-04-21 20:59:44',
            ),
            25 => 
            array (
                'id' => 2591,
                'code' => 'R9-04212025-CHE-0500',
                'information' => NULL,
                'sample_id' => 3508,
                'user_id' => 8,
                'created_at' => '2025-04-21 21:00:33',
                'updated_at' => '2025-04-21 21:00:33',
            ),
            26 => 
            array (
                'id' => 2592,
                'code' => 'R9-04212025-CHE-0501',
                'information' => NULL,
                'sample_id' => 3509,
                'user_id' => 8,
                'created_at' => '2025-04-21 21:00:51',
                'updated_at' => '2025-04-21 21:00:51',
            ),
            27 => 
            array (
                'id' => 2593,
                'code' => 'R9-04212025-CHE-0502',
                'information' => NULL,
                'sample_id' => 3510,
                'user_id' => 8,
                'created_at' => '2025-04-21 21:00:55',
                'updated_at' => '2025-04-21 21:00:55',
            ),
            28 => 
            array (
                'id' => 2594,
                'code' => 'R9-04212025-CHE-0503',
                'information' => NULL,
                'sample_id' => 3511,
                'user_id' => 8,
                'created_at' => '2025-04-21 21:01:02',
                'updated_at' => '2025-04-21 21:01:02',
            ),
            29 => 
            array (
                'id' => 2595,
                'code' => 'R9-04212025-CHE-0504',
                'information' => NULL,
                'sample_id' => 3512,
                'user_id' => 8,
                'created_at' => '2025-04-21 21:01:06',
                'updated_at' => '2025-04-21 21:01:06',
            ),
            30 => 
            array (
                'id' => 2596,
                'code' => 'R9-04212025-CHE-0505',
                'information' => NULL,
                'sample_id' => 3513,
                'user_id' => 8,
                'created_at' => '2025-04-21 21:01:10',
                'updated_at' => '2025-04-21 21:01:10',
            ),
            31 => 
            array (
                'id' => 2597,
                'code' => 'R9-04212025-CHE-0506',
                'information' => NULL,
                'sample_id' => 3514,
                'user_id' => 8,
                'created_at' => '2025-04-21 21:15:13',
                'updated_at' => '2025-04-21 21:15:13',
            ),
            32 => 
            array (
                'id' => 2598,
                'code' => 'R9-04212025-CHE-0507',
                'information' => NULL,
                'sample_id' => 3515,
                'user_id' => 8,
                'created_at' => '2025-04-21 21:15:20',
                'updated_at' => '2025-04-21 21:15:20',
            ),
            33 => 
            array (
                'id' => 2599,
                'code' => 'R9-04212025-CHE-0508',
                'information' => NULL,
                'sample_id' => 3516,
                'user_id' => 8,
                'created_at' => '2025-04-21 21:15:46',
                'updated_at' => '2025-04-21 21:15:46',
            ),
            34 => 
            array (
                'id' => 2600,
                'code' => 'R9-04212025-CHE-0509',
                'information' => NULL,
                'sample_id' => 3517,
                'user_id' => 8,
                'created_at' => '2025-04-21 21:15:56',
                'updated_at' => '2025-04-21 21:15:56',
            ),
            35 => 
            array (
                'id' => 2601,
                'code' => 'R9-04212025-CHE-0510',
                'information' => NULL,
                'sample_id' => 3518,
                'user_id' => 8,
                'created_at' => '2025-04-21 21:16:07',
                'updated_at' => '2025-04-21 21:16:07',
            ),
            36 => 
            array (
                'id' => 2602,
                'code' => 'R9-04212025-CHE-0511',
                'information' => NULL,
                'sample_id' => 3519,
                'user_id' => 8,
                'created_at' => '2025-04-21 21:16:17',
                'updated_at' => '2025-04-21 21:16:17',
            ),
            37 => 
            array (
                'id' => 2603,
                'code' => 'R9-04212025-CHE-0512',
                'information' => NULL,
                'sample_id' => 3520,
                'user_id' => 8,
                'created_at' => '2025-04-21 21:16:21',
                'updated_at' => '2025-04-21 21:16:21',
            ),
            38 => 
            array (
                'id' => 2604,
                'code' => 'R9-04212025-CHE-0513',
                'information' => NULL,
                'sample_id' => 3521,
                'user_id' => 8,
                'created_at' => '2025-04-21 21:16:26',
                'updated_at' => '2025-04-21 21:16:26',
            ),
            39 => 
            array (
                'id' => 2605,
                'code' => 'R9-04212025-CHE-0514',
                'information' => NULL,
                'sample_id' => 3522,
                'user_id' => 8,
                'created_at' => '2025-04-21 21:16:35',
                'updated_at' => '2025-04-21 21:16:35',
            ),
            40 => 
            array (
                'id' => 2606,
                'code' => 'R9-04212025-CHE-0515',
                'information' => NULL,
                'sample_id' => 3523,
                'user_id' => 8,
                'created_at' => '2025-04-21 21:16:46',
                'updated_at' => '2025-04-21 21:16:46',
            ),
            41 => 
            array (
                'id' => 2607,
                'code' => 'R9-04212025-CHE-0516',
                'information' => NULL,
                'sample_id' => 3524,
                'user_id' => 8,
                'created_at' => '2025-04-21 21:16:52',
                'updated_at' => '2025-04-21 21:16:52',
            ),
            42 => 
            array (
                'id' => 2608,
                'code' => 'R9-04212025-CHE-0517',
                'information' => NULL,
                'sample_id' => 3525,
                'user_id' => 8,
                'created_at' => '2025-04-21 21:16:57',
                'updated_at' => '2025-04-21 21:16:57',
            ),
            43 => 
            array (
                'id' => 2609,
                'code' => 'R9-04212025-MIC-0276',
                'information' => NULL,
                'sample_id' => 4121,
                'user_id' => 16,
                'created_at' => '2025-04-21 21:43:46',
                'updated_at' => '2025-04-21 21:43:46',
            ),
            44 => 
            array (
                'id' => 2610,
                'code' => 'R9-04212025-MIC-0277',
                'information' => NULL,
                'sample_id' => 4122,
                'user_id' => 16,
                'created_at' => '2025-04-21 21:44:20',
                'updated_at' => '2025-04-21 21:44:20',
            ),
            45 => 
            array (
                'id' => 2611,
                'code' => 'R9-04212025-MIC-0278',
                'information' => NULL,
                'sample_id' => 4123,
                'user_id' => 16,
                'created_at' => '2025-04-21 21:44:50',
                'updated_at' => '2025-04-21 21:44:50',
            ),
            46 => 
            array (
                'id' => 2612,
                'code' => 'R9-04212025-MIC-0279',
                'information' => NULL,
                'sample_id' => 4124,
                'user_id' => 16,
                'created_at' => '2025-04-21 21:45:01',
                'updated_at' => '2025-04-21 21:45:01',
            ),
            47 => 
            array (
                'id' => 2613,
                'code' => 'R9-04212025-MIC-0280',
                'information' => NULL,
                'sample_id' => 4141,
                'user_id' => 16,
                'created_at' => '2025-04-21 21:45:43',
                'updated_at' => '2025-04-21 21:45:43',
            ),
            48 => 
            array (
                'id' => 2614,
                'code' => 'R9-04212025-CHE-0518',
                'information' => NULL,
                'sample_id' => 3972,
                'user_id' => 8,
                'created_at' => '2025-04-22 01:41:59',
                'updated_at' => '2025-04-22 01:41:59',
            ),
            49 => 
            array (
                'id' => 2615,
                'code' => 'R9-04212025-MIC-0281',
                'information' => NULL,
                'sample_id' => 4013,
                'user_id' => 16,
                'created_at' => '2025-04-22 06:19:21',
                'updated_at' => '2025-04-22 06:19:21',
            ),
            50 => 
            array (
                'id' => 2616,
                'code' => 'R9-04212025-MIC-0282',
                'information' => NULL,
                'sample_id' => 4014,
                'user_id' => 16,
                'created_at' => '2025-04-22 06:20:01',
                'updated_at' => '2025-04-22 06:20:01',
            ),
            51 => 
            array (
                'id' => 2617,
                'code' => 'R9-04212025-MIC-0283',
                'information' => NULL,
                'sample_id' => 4015,
                'user_id' => 16,
                'created_at' => '2025-04-22 06:20:10',
                'updated_at' => '2025-04-22 06:20:10',
            ),
            52 => 
            array (
                'id' => 2618,
                'code' => 'R9-04212025-MIC-0284',
                'information' => NULL,
                'sample_id' => 4016,
                'user_id' => 16,
                'created_at' => '2025-04-22 06:20:22',
                'updated_at' => '2025-04-22 06:20:22',
            ),
            53 => 
            array (
                'id' => 2619,
                'code' => 'R9-04212025-MIC-0285',
                'information' => NULL,
                'sample_id' => 4017,
                'user_id' => 16,
                'created_at' => '2025-04-22 06:20:31',
                'updated_at' => '2025-04-22 06:20:31',
            ),
            54 => 
            array (
                'id' => 2620,
                'code' => 'R9-04212025-MIC-0286',
                'information' => NULL,
                'sample_id' => 4018,
                'user_id' => 16,
                'created_at' => '2025-04-22 06:20:45',
                'updated_at' => '2025-04-22 06:20:45',
            ),
            55 => 
            array (
                'id' => 2621,
                'code' => 'R9-04222025-CHE-0519',
                'information' => NULL,
                'sample_id' => 4213,
                'user_id' => 7,
                'created_at' => '2025-04-22 18:03:40',
                'updated_at' => '2025-04-22 18:03:40',
            ),
            56 => 
            array (
                'id' => 2622,
                'code' => 'R9-04222025-CHE-0520',
                'information' => NULL,
                'sample_id' => 4214,
                'user_id' => 7,
                'created_at' => '2025-04-22 18:04:14',
                'updated_at' => '2025-04-22 18:04:14',
            ),
            57 => 
            array (
                'id' => 2623,
                'code' => 'R9-04222025-CHE-0521',
                'information' => NULL,
                'sample_id' => 4215,
                'user_id' => 7,
                'created_at' => '2025-04-22 18:04:30',
                'updated_at' => '2025-04-22 18:04:30',
            ),
            58 => 
            array (
                'id' => 2624,
                'code' => 'R9-04222025-MET-0539',
                'information' => NULL,
                'sample_id' => 4244,
                'user_id' => 13,
                'created_at' => '2025-04-22 19:25:37',
                'updated_at' => '2025-04-22 19:25:37',
            ),
            59 => 
            array (
                'id' => 2625,
                'code' => 'R9-04222025-MET-0540',
                'information' => NULL,
                'sample_id' => 3930,
                'user_id' => 12,
                'created_at' => '2025-04-22 23:14:34',
                'updated_at' => '2025-04-22 23:14:34',
            ),
            60 => 
            array (
                'id' => 2626,
                'code' => 'R9-04222025-MET-0541',
                'information' => NULL,
                'sample_id' => 4032,
                'user_id' => 12,
                'created_at' => '2025-04-22 23:15:10',
                'updated_at' => '2025-04-22 23:15:10',
            ),
            61 => 
            array (
                'id' => 2627,
                'code' => 'R9-04222025-CHE-0522',
                'information' => NULL,
                'sample_id' => 4126,
                'user_id' => 8,
                'created_at' => '2025-04-22 23:53:34',
                'updated_at' => '2025-04-22 23:53:34',
            ),
            62 => 
            array (
                'id' => 2628,
                'code' => 'R9-04222025-CHE-0523',
                'information' => NULL,
                'sample_id' => 3973,
                'user_id' => 8,
                'created_at' => '2025-04-23 00:36:23',
                'updated_at' => '2025-04-23 00:36:23',
            ),
            63 => 
            array (
                'id' => 2629,
                'code' => 'R9-04222025-CHE-0524',
                'information' => NULL,
                'sample_id' => 3974,
                'user_id' => 8,
                'created_at' => '2025-04-23 00:36:34',
                'updated_at' => '2025-04-23 00:36:34',
            ),
            64 => 
            array (
                'id' => 2630,
                'code' => 'R9-04232025-MET-0542',
                'information' => NULL,
                'sample_id' => 2954,
                'user_id' => 13,
                'created_at' => '2025-04-23 16:24:41',
                'updated_at' => '2025-04-23 16:24:41',
            ),
            65 => 
            array (
                'id' => 2631,
                'code' => 'R9-04232025-MET-0543',
                'information' => NULL,
                'sample_id' => 2955,
                'user_id' => 13,
                'created_at' => '2025-04-23 16:24:52',
                'updated_at' => '2025-04-23 16:24:52',
            ),
            66 => 
            array (
                'id' => 2632,
                'code' => 'R9-04232025-MET-0544',
                'information' => NULL,
                'sample_id' => 2956,
                'user_id' => 13,
                'created_at' => '2025-04-23 16:24:58',
                'updated_at' => '2025-04-23 16:24:58',
            ),
            67 => 
            array (
                'id' => 2633,
                'code' => 'R9-04232025-MET-0545',
                'information' => NULL,
                'sample_id' => 2957,
                'user_id' => 13,
                'created_at' => '2025-04-23 16:25:06',
                'updated_at' => '2025-04-23 16:25:06',
            ),
            68 => 
            array (
                'id' => 2634,
                'code' => 'R9-04232025-MET-0546',
                'information' => NULL,
                'sample_id' => 2958,
                'user_id' => 13,
                'created_at' => '2025-04-23 16:25:16',
                'updated_at' => '2025-04-23 16:25:16',
            ),
            69 => 
            array (
                'id' => 2635,
                'code' => 'R9-04232025-MET-0547',
                'information' => NULL,
                'sample_id' => 2959,
                'user_id' => 13,
                'created_at' => '2025-04-23 16:25:22',
                'updated_at' => '2025-04-23 16:25:22',
            ),
            70 => 
            array (
                'id' => 2636,
                'code' => 'R9-04232025-MET-0548',
                'information' => NULL,
                'sample_id' => 2960,
                'user_id' => 13,
                'created_at' => '2025-04-23 16:25:31',
                'updated_at' => '2025-04-23 16:25:31',
            ),
            71 => 
            array (
                'id' => 2637,
                'code' => 'R9-04232025-MET-0549',
                'information' => NULL,
                'sample_id' => 2961,
                'user_id' => 13,
                'created_at' => '2025-04-23 16:25:38',
                'updated_at' => '2025-04-23 16:25:38',
            ),
            72 => 
            array (
                'id' => 2638,
                'code' => 'R9-04232025-MET-0550',
                'information' => NULL,
                'sample_id' => 2962,
                'user_id' => 13,
                'created_at' => '2025-04-23 16:25:46',
                'updated_at' => '2025-04-23 16:25:46',
            ),
            73 => 
            array (
                'id' => 2639,
                'code' => 'R9-04232025-MET-0551',
                'information' => NULL,
                'sample_id' => 2963,
                'user_id' => 13,
                'created_at' => '2025-04-23 16:27:01',
                'updated_at' => '2025-04-23 16:27:01',
            ),
            74 => 
            array (
                'id' => 2640,
                'code' => 'R9-04232025-MET-0552',
                'information' => NULL,
                'sample_id' => 2964,
                'user_id' => 13,
                'created_at' => '2025-04-23 16:27:16',
                'updated_at' => '2025-04-23 16:27:16',
            ),
            75 => 
            array (
                'id' => 2641,
                'code' => 'R9-04232025-MET-0553',
                'information' => NULL,
                'sample_id' => 2965,
                'user_id' => 13,
                'created_at' => '2025-04-23 16:27:23',
                'updated_at' => '2025-04-23 16:27:23',
            ),
            76 => 
            array (
                'id' => 2642,
                'code' => 'R9-04232025-MET-0554',
                'information' => NULL,
                'sample_id' => 3417,
                'user_id' => 5,
                'created_at' => '2025-04-23 16:28:08',
                'updated_at' => '2025-04-23 16:28:08',
            ),
            77 => 
            array (
                'id' => 2643,
                'code' => 'R9-04232025-CHE-0525',
                'information' => NULL,
                'sample_id' => 4119,
                'user_id' => 7,
                'created_at' => '2025-04-23 16:43:05',
                'updated_at' => '2025-04-23 16:43:05',
            ),
            78 => 
            array (
                'id' => 2644,
                'code' => 'R9-04232025-MET-0555',
                'information' => NULL,
                'sample_id' => 4304,
                'user_id' => 12,
                'created_at' => '2025-04-23 19:57:11',
                'updated_at' => '2025-04-23 19:57:11',
            ),
            79 => 
            array (
                'id' => 2645,
                'code' => 'R9-04222025-CHE-0526',
                'information' => NULL,
                'sample_id' => 3478,
                'user_id' => 7,
                'created_at' => '2025-04-23 20:37:28',
                'updated_at' => '2025-04-23 20:37:28',
            ),
            80 => 
            array (
                'id' => 2646,
                'code' => 'R9-04242025-CHE-0527',
                'information' => NULL,
                'sample_id' => 4167,
                'user_id' => 7,
                'created_at' => '2025-04-24 16:29:38',
                'updated_at' => '2025-04-24 16:29:38',
            ),
            81 => 
            array (
                'id' => 2647,
                'code' => 'R9-04242025-CHE-0528',
                'information' => NULL,
                'sample_id' => 4168,
                'user_id' => 7,
                'created_at' => '2025-04-24 16:30:02',
                'updated_at' => '2025-04-24 16:30:02',
            ),
            82 => 
            array (
                'id' => 2648,
                'code' => 'R9-04242025-MET-0556',
                'information' => NULL,
                'sample_id' => 3411,
                'user_id' => 13,
                'created_at' => '2025-04-24 16:41:33',
                'updated_at' => '2025-04-24 16:41:33',
            ),
            83 => 
            array (
                'id' => 2649,
                'code' => 'R9-04242025-MET-0557',
                'information' => NULL,
                'sample_id' => 3412,
                'user_id' => 13,
                'created_at' => '2025-04-24 16:41:37',
                'updated_at' => '2025-04-24 16:41:37',
            ),
            84 => 
            array (
                'id' => 2650,
                'code' => 'R9-04242025-MET-0558',
                'information' => NULL,
                'sample_id' => 3413,
                'user_id' => 13,
                'created_at' => '2025-04-24 16:41:41',
                'updated_at' => '2025-04-24 16:41:41',
            ),
            85 => 
            array (
                'id' => 2651,
                'code' => 'R9-04242025-MET-0559',
                'information' => NULL,
                'sample_id' => 3414,
                'user_id' => 13,
                'created_at' => '2025-04-24 16:41:45',
                'updated_at' => '2025-04-24 16:41:45',
            ),
            86 => 
            array (
                'id' => 2652,
                'code' => 'R9-04242025-MET-0560',
                'information' => NULL,
                'sample_id' => 2842,
                'user_id' => 13,
                'created_at' => '2025-04-24 16:43:38',
                'updated_at' => '2025-04-24 16:43:38',
            ),
            87 => 
            array (
                'id' => 2653,
                'code' => 'R9-04242025-MET-0561',
                'information' => NULL,
                'sample_id' => 2843,
                'user_id' => 13,
                'created_at' => '2025-04-24 16:43:41',
                'updated_at' => '2025-04-24 16:43:41',
            ),
            88 => 
            array (
                'id' => 2654,
                'code' => 'R9-04242025-MET-0562',
                'information' => NULL,
                'sample_id' => 2844,
                'user_id' => 13,
                'created_at' => '2025-04-24 16:43:45',
                'updated_at' => '2025-04-24 16:43:45',
            ),
            89 => 
            array (
                'id' => 2655,
                'code' => 'R9-04242025-MET-0563',
                'information' => NULL,
                'sample_id' => 3146,
                'user_id' => 13,
                'created_at' => '2025-04-24 17:03:42',
                'updated_at' => '2025-04-24 17:03:42',
            ),
            90 => 
            array (
                'id' => 2656,
                'code' => 'R9-04242025-MET-0564',
                'information' => NULL,
                'sample_id' => 3147,
                'user_id' => 13,
                'created_at' => '2025-04-24 17:04:05',
                'updated_at' => '2025-04-24 17:04:05',
            ),
            91 => 
            array (
                'id' => 2657,
                'code' => 'R9-04242025-MET-0565',
                'information' => NULL,
                'sample_id' => 4211,
                'user_id' => 5,
                'created_at' => '2025-04-24 19:05:27',
                'updated_at' => '2025-04-24 19:05:27',
            ),
            92 => 
            array (
                'id' => 2658,
                'code' => 'R9-04252025-CHE-0529',
                'information' => NULL,
                'sample_id' => 3676,
                'user_id' => 8,
                'created_at' => '2025-04-25 16:46:48',
                'updated_at' => '2025-04-25 16:46:48',
            ),
            93 => 
            array (
                'id' => 2659,
                'code' => 'R9-04252025-CHE-0530',
                'information' => NULL,
                'sample_id' => 3677,
                'user_id' => 8,
                'created_at' => '2025-04-25 16:47:21',
                'updated_at' => '2025-04-25 16:47:21',
            ),
            94 => 
            array (
                'id' => 2660,
                'code' => 'R9-04252025-CHE-0531',
                'information' => NULL,
                'sample_id' => 3678,
                'user_id' => 8,
                'created_at' => '2025-04-25 16:47:27',
                'updated_at' => '2025-04-25 16:47:27',
            ),
            95 => 
            array (
                'id' => 2661,
                'code' => 'R9-04252025-CHE-0532',
                'information' => NULL,
                'sample_id' => 3679,
                'user_id' => 8,
                'created_at' => '2025-04-25 16:47:34',
                'updated_at' => '2025-04-25 16:47:34',
            ),
            96 => 
            array (
                'id' => 2662,
                'code' => 'R9-04252025-CHE-0533',
                'information' => NULL,
                'sample_id' => 3680,
                'user_id' => 8,
                'created_at' => '2025-04-25 16:47:39',
                'updated_at' => '2025-04-25 16:47:39',
            ),
            97 => 
            array (
                'id' => 2663,
                'code' => 'R9-04252025-CHE-0534',
                'information' => NULL,
                'sample_id' => 3681,
                'user_id' => 8,
                'created_at' => '2025-04-25 16:47:49',
                'updated_at' => '2025-04-25 16:47:49',
            ),
            98 => 
            array (
                'id' => 2664,
                'code' => 'R9-04252025-CHE-0535',
                'information' => NULL,
                'sample_id' => 3682,
                'user_id' => 8,
                'created_at' => '2025-04-25 17:39:19',
                'updated_at' => '2025-04-25 17:39:19',
            ),
            99 => 
            array (
                'id' => 2665,
                'code' => 'R9-04252025-MIC-0287',
                'information' => NULL,
                'sample_id' => 4253,
                'user_id' => 16,
                'created_at' => '2025-04-25 17:39:45',
                'updated_at' => '2025-04-25 17:39:45',
            ),
            100 => 
            array (
                'id' => 2666,
                'code' => 'R9-04252025-MIC-0288',
                'information' => NULL,
                'sample_id' => 4254,
                'user_id' => 16,
                'created_at' => '2025-04-25 17:40:27',
                'updated_at' => '2025-04-25 17:40:27',
            ),
            101 => 
            array (
                'id' => 2667,
                'code' => 'R9-04252025-CHE-0536',
                'information' => NULL,
                'sample_id' => 3683,
                'user_id' => 8,
                'created_at' => '2025-04-25 17:44:34',
                'updated_at' => '2025-04-25 17:44:34',
            ),
            102 => 
            array (
                'id' => 2668,
                'code' => 'R9-04252025-CHE-0537',
                'information' => NULL,
                'sample_id' => 3684,
                'user_id' => 8,
                'created_at' => '2025-04-25 17:45:58',
                'updated_at' => '2025-04-25 17:45:58',
            ),
            103 => 
            array (
                'id' => 2669,
                'code' => 'R9-04252025-CHE-0538',
                'information' => NULL,
                'sample_id' => 3686,
                'user_id' => 8,
                'created_at' => '2025-04-25 17:52:41',
                'updated_at' => '2025-04-25 17:52:41',
            ),
            104 => 
            array (
                'id' => 2670,
                'code' => 'R9-04252025-CHE-0539',
                'information' => NULL,
                'sample_id' => 3685,
                'user_id' => 8,
                'created_at' => '2025-04-25 17:54:40',
                'updated_at' => '2025-04-25 17:54:40',
            ),
            105 => 
            array (
                'id' => 2671,
                'code' => 'R9-04252025-CHE-0540',
                'information' => NULL,
                'sample_id' => 3687,
                'user_id' => 8,
                'created_at' => '2025-04-25 17:57:14',
                'updated_at' => '2025-04-25 17:57:14',
            ),
            106 => 
            array (
                'id' => 2672,
                'code' => 'R9-04252025-MIC-0289',
                'information' => NULL,
                'sample_id' => 4113,
                'user_id' => 16,
                'created_at' => '2025-04-25 19:56:34',
                'updated_at' => '2025-04-25 19:56:34',
            ),
            107 => 
            array (
                'id' => 2673,
                'code' => 'R9-04252025-MIC-0290',
                'information' => NULL,
                'sample_id' => 4114,
                'user_id' => 16,
                'created_at' => '2025-04-25 19:57:12',
                'updated_at' => '2025-04-25 19:57:12',
            ),
            108 => 
            array (
                'id' => 2674,
                'code' => 'R9-04252025-MIC-0291',
                'information' => NULL,
                'sample_id' => 4115,
                'user_id' => 16,
                'created_at' => '2025-04-25 19:57:22',
                'updated_at' => '2025-04-25 19:57:22',
            ),
            109 => 
            array (
                'id' => 2675,
                'code' => 'R9-04252025-MIC-0292',
                'information' => NULL,
                'sample_id' => 4116,
                'user_id' => 16,
                'created_at' => '2025-04-25 19:57:38',
                'updated_at' => '2025-04-25 19:57:38',
            ),
            110 => 
            array (
                'id' => 2676,
                'code' => 'R9-04252025-MIC-0293',
                'information' => NULL,
                'sample_id' => 4117,
                'user_id' => 16,
                'created_at' => '2025-04-25 19:57:51',
                'updated_at' => '2025-04-25 19:57:51',
            ),
            111 => 
            array (
                'id' => 2677,
                'code' => 'R9-04252025-MIC-0294',
                'information' => NULL,
                'sample_id' => 4118,
                'user_id' => 16,
                'created_at' => '2025-04-25 19:58:06',
                'updated_at' => '2025-04-25 19:58:06',
            ),
            112 => 
            array (
                'id' => 2678,
                'code' => 'R9-04252025-CHE-0541',
                'information' => NULL,
                'sample_id' => 4252,
                'user_id' => 7,
                'created_at' => '2025-04-25 20:23:58',
                'updated_at' => '2025-04-25 20:23:58',
            ),
            113 => 
            array (
                'id' => 2679,
                'code' => 'R9-04252025-CHE-0542',
                'information' => NULL,
                'sample_id' => 4264,
                'user_id' => 7,
                'created_at' => '2025-04-25 20:24:38',
                'updated_at' => '2025-04-25 20:24:38',
            ),
            114 => 
            array (
                'id' => 2680,
                'code' => 'R9-04252025-MET-0566',
                'information' => NULL,
                'sample_id' => 4105,
                'user_id' => 12,
                'created_at' => '2025-04-25 21:27:29',
                'updated_at' => '2025-04-25 21:27:29',
            ),
            115 => 
            array (
                'id' => 2681,
                'code' => 'R9-04252025-MIC-0295',
                'information' => NULL,
                'sample_id' => 4217,
                'user_id' => 16,
                'created_at' => '2025-04-25 21:34:36',
                'updated_at' => '2025-04-25 21:34:36',
            ),
            116 => 
            array (
                'id' => 2682,
                'code' => 'R9-04252025-CHE-0543',
                'information' => NULL,
                'sample_id' => 3688,
                'user_id' => 8,
                'created_at' => '2025-04-25 23:36:48',
                'updated_at' => '2025-04-25 23:36:48',
            ),
            117 => 
            array (
                'id' => 2683,
                'code' => 'R9-04252025-CHE-0544',
                'information' => NULL,
                'sample_id' => 3689,
                'user_id' => 8,
                'created_at' => '2025-04-25 23:37:37',
                'updated_at' => '2025-04-25 23:37:37',
            ),
            118 => 
            array (
                'id' => 2684,
                'code' => 'R9-04252025-CHE-0545',
                'information' => NULL,
                'sample_id' => 3690,
                'user_id' => 8,
                'created_at' => '2025-04-25 23:40:22',
                'updated_at' => '2025-04-25 23:40:22',
            ),
            119 => 
            array (
                'id' => 2685,
                'code' => 'R9-04252025-CHE-0546',
                'information' => NULL,
                'sample_id' => 3691,
                'user_id' => 8,
                'created_at' => '2025-04-25 23:40:28',
                'updated_at' => '2025-04-25 23:40:28',
            ),
            120 => 
            array (
                'id' => 2686,
                'code' => 'R9-04252025-CHE-0547',
                'information' => NULL,
                'sample_id' => 3692,
                'user_id' => 8,
                'created_at' => '2025-04-25 23:40:43',
                'updated_at' => '2025-04-25 23:40:43',
            ),
            121 => 
            array (
                'id' => 2687,
                'code' => 'R9-04252025-CHE-0548',
                'information' => NULL,
                'sample_id' => 3693,
                'user_id' => 8,
                'created_at' => '2025-04-25 23:40:54',
                'updated_at' => '2025-04-25 23:40:54',
            ),
            122 => 
            array (
                'id' => 2688,
                'code' => 'R9-04252025-CHE-0549',
                'information' => NULL,
                'sample_id' => 3694,
                'user_id' => 8,
                'created_at' => '2025-04-25 23:41:02',
                'updated_at' => '2025-04-25 23:41:02',
            ),
            123 => 
            array (
                'id' => 2689,
                'code' => 'R9-04252025-CHE-0550',
                'information' => NULL,
                'sample_id' => 3695,
                'user_id' => 8,
                'created_at' => '2025-04-25 23:41:36',
                'updated_at' => '2025-04-25 23:41:36',
            ),
            124 => 
            array (
                'id' => 2690,
                'code' => 'R9-04252025-CHE-0551',
                'information' => NULL,
                'sample_id' => 3696,
                'user_id' => 8,
                'created_at' => '2025-04-25 23:41:43',
                'updated_at' => '2025-04-25 23:41:43',
            ),
            125 => 
            array (
                'id' => 2691,
                'code' => 'R9-04252025-CHE-0552',
                'information' => NULL,
                'sample_id' => 3697,
                'user_id' => 8,
                'created_at' => '2025-04-25 23:41:51',
                'updated_at' => '2025-04-25 23:41:51',
            ),
            126 => 
            array (
                'id' => 2692,
                'code' => 'R9-04252025-CHE-0553',
                'information' => NULL,
                'sample_id' => 3698,
                'user_id' => 8,
                'created_at' => '2025-04-25 23:42:01',
                'updated_at' => '2025-04-25 23:42:01',
            ),
            127 => 
            array (
                'id' => 2693,
                'code' => 'R9-04252025-CHE-0554',
                'information' => NULL,
                'sample_id' => 3699,
                'user_id' => 8,
                'created_at' => '2025-04-25 23:42:07',
                'updated_at' => '2025-04-25 23:42:07',
            ),
            128 => 
            array (
                'id' => 2694,
                'code' => 'R9-04252025-CHE-0555',
                'information' => NULL,
                'sample_id' => 3629,
                'user_id' => 7,
                'created_at' => '2025-04-26 00:03:34',
                'updated_at' => '2025-04-26 00:03:34',
            ),
            129 => 
            array (
                'id' => 2695,
                'code' => 'R9-04252025-CHE-0556',
                'information' => NULL,
                'sample_id' => 3630,
                'user_id' => 7,
                'created_at' => '2025-04-26 00:04:40',
                'updated_at' => '2025-04-26 00:04:40',
            ),
            130 => 
            array (
                'id' => 2696,
                'code' => 'R9-04252025-CHE-0557',
                'information' => NULL,
                'sample_id' => 3658,
                'user_id' => 7,
                'created_at' => '2025-04-26 00:05:48',
                'updated_at' => '2025-04-26 00:05:48',
            ),
            131 => 
            array (
                'id' => 2697,
                'code' => 'R9-04252025-CHE-0558',
                'information' => NULL,
                'sample_id' => 3659,
                'user_id' => 7,
                'created_at' => '2025-04-26 00:06:05',
                'updated_at' => '2025-04-26 00:06:05',
            ),
            132 => 
            array (
                'id' => 2698,
                'code' => 'R9-04252025-CHE-0559',
                'information' => NULL,
                'sample_id' => 3662,
                'user_id' => 7,
                'created_at' => '2025-04-26 00:07:17',
                'updated_at' => '2025-04-26 00:07:17',
            ),
            133 => 
            array (
                'id' => 2699,
                'code' => 'R9-04252025-CHE-0560',
                'information' => NULL,
                'sample_id' => 3663,
                'user_id' => 7,
                'created_at' => '2025-04-26 00:07:37',
                'updated_at' => '2025-04-26 00:07:37',
            ),
            134 => 
            array (
                'id' => 2700,
                'code' => 'R9-04252025-CHE-0561',
                'information' => NULL,
                'sample_id' => 3706,
                'user_id' => 7,
                'created_at' => '2025-04-26 00:08:25',
                'updated_at' => '2025-04-26 00:08:25',
            ),
            135 => 
            array (
                'id' => 2701,
                'code' => 'R9-04252025-CHE-0562',
                'information' => NULL,
                'sample_id' => 3707,
                'user_id' => 7,
                'created_at' => '2025-04-26 00:08:43',
                'updated_at' => '2025-04-26 00:08:43',
            ),
            136 => 
            array (
                'id' => 2702,
                'code' => 'R9-04252025-CHE-0563',
                'information' => NULL,
                'sample_id' => 3619,
                'user_id' => 8,
                'created_at' => '2025-04-26 00:26:36',
                'updated_at' => '2025-04-26 00:26:36',
            ),
            137 => 
            array (
                'id' => 2703,
                'code' => 'R9-04282025-MIC-0296',
                'information' => NULL,
                'sample_id' => 4305,
                'user_id' => 16,
                'created_at' => '2025-04-28 16:46:31',
                'updated_at' => '2025-04-28 16:46:31',
            ),
            138 => 
            array (
                'id' => 2704,
                'code' => 'R9-04282025-MIC-0297',
                'information' => NULL,
                'sample_id' => 4306,
                'user_id' => 16,
                'created_at' => '2025-04-28 16:46:54',
                'updated_at' => '2025-04-28 16:46:54',
            ),
            139 => 
            array (
                'id' => 2705,
                'code' => 'R9-04282025-MIC-0298',
                'information' => NULL,
                'sample_id' => 4307,
                'user_id' => 16,
                'created_at' => '2025-04-28 16:47:09',
                'updated_at' => '2025-04-28 16:47:09',
            ),
            140 => 
            array (
                'id' => 2706,
                'code' => 'R9-04282025-MIC-0299',
                'information' => NULL,
                'sample_id' => 4308,
                'user_id' => 16,
                'created_at' => '2025-04-28 16:47:24',
                'updated_at' => '2025-04-28 16:47:24',
            ),
            141 => 
            array (
                'id' => 2707,
                'code' => 'R9-04282025-MIC-0300',
                'information' => NULL,
                'sample_id' => 4309,
                'user_id' => 16,
                'created_at' => '2025-04-28 16:48:37',
                'updated_at' => '2025-04-28 16:48:37',
            ),
            142 => 
            array (
                'id' => 2708,
                'code' => 'R9-04282025-MIC-0301',
                'information' => NULL,
                'sample_id' => 4310,
                'user_id' => 16,
                'created_at' => '2025-04-28 16:48:55',
                'updated_at' => '2025-04-28 16:48:55',
            ),
            143 => 
            array (
                'id' => 2709,
                'code' => 'R9-04282025-MIC-0302',
                'information' => NULL,
                'sample_id' => 4311,
                'user_id' => 16,
                'created_at' => '2025-04-28 16:49:08',
                'updated_at' => '2025-04-28 16:49:08',
            ),
            144 => 
            array (
                'id' => 2710,
                'code' => 'R9-04282025-MIC-0303',
                'information' => NULL,
                'sample_id' => 4312,
                'user_id' => 16,
                'created_at' => '2025-04-28 16:49:20',
                'updated_at' => '2025-04-28 16:49:20',
            ),
            145 => 
            array (
                'id' => 2711,
                'code' => 'R9-04282025-MIC-0304',
                'information' => NULL,
                'sample_id' => 4313,
                'user_id' => 16,
                'created_at' => '2025-04-28 16:49:44',
                'updated_at' => '2025-04-28 16:49:44',
            ),
            146 => 
            array (
                'id' => 2712,
                'code' => 'R9-04282025-MIC-0305',
                'information' => NULL,
                'sample_id' => 4314,
                'user_id' => 16,
                'created_at' => '2025-04-28 16:50:03',
                'updated_at' => '2025-04-28 16:50:03',
            ),
            147 => 
            array (
                'id' => 2713,
                'code' => 'R9-04282025-MET-0567',
                'information' => NULL,
                'sample_id' => 4331,
                'user_id' => 13,
                'created_at' => '2025-04-28 19:36:03',
                'updated_at' => '2025-04-28 19:36:03',
            ),
            148 => 
            array (
                'id' => 2714,
                'code' => 'R9-04292025-MET-0568',
                'information' => NULL,
                'sample_id' => 3495,
                'user_id' => 12,
                'created_at' => '2025-04-29 17:03:01',
                'updated_at' => '2025-04-29 17:03:01',
            ),
            149 => 
            array (
                'id' => 2715,
                'code' => 'R9-04292025-MET-0569',
                'information' => NULL,
                'sample_id' => 3496,
                'user_id' => 12,
                'created_at' => '2025-04-29 17:03:18',
                'updated_at' => '2025-04-29 17:03:18',
            ),
            150 => 
            array (
                'id' => 2716,
                'code' => 'R9-04292025-MET-0570',
                'information' => NULL,
                'sample_id' => 3497,
                'user_id' => 12,
                'created_at' => '2025-04-29 17:03:30',
                'updated_at' => '2025-04-29 17:03:30',
            ),
            151 => 
            array (
                'id' => 2717,
                'code' => 'R9-04292025-MET-0571',
                'information' => NULL,
                'sample_id' => 4237,
                'user_id' => 12,
                'created_at' => '2025-04-29 17:05:40',
                'updated_at' => '2025-04-29 17:05:40',
            ),
            152 => 
            array (
                'id' => 2718,
                'code' => 'R9-04292025-MET-0572',
                'information' => NULL,
                'sample_id' => 4238,
                'user_id' => 12,
                'created_at' => '2025-04-29 17:06:16',
                'updated_at' => '2025-04-29 17:06:16',
            ),
            153 => 
            array (
                'id' => 2719,
                'code' => 'R9-04292025-MET-0573',
                'information' => NULL,
                'sample_id' => 4288,
                'user_id' => 12,
                'created_at' => '2025-04-29 17:15:52',
                'updated_at' => '2025-04-29 17:15:52',
            ),
            154 => 
            array (
                'id' => 2720,
                'code' => 'R9-04292025-MET-0574',
                'information' => NULL,
                'sample_id' => 4289,
                'user_id' => 12,
                'created_at' => '2025-04-29 17:15:55',
                'updated_at' => '2025-04-29 17:15:55',
            ),
            155 => 
            array (
                'id' => 2721,
                'code' => 'R9-04292025-MET-0575',
                'information' => NULL,
                'sample_id' => 4290,
                'user_id' => 12,
                'created_at' => '2025-04-29 17:16:00',
                'updated_at' => '2025-04-29 17:16:00',
            ),
            156 => 
            array (
                'id' => 2722,
                'code' => 'R9-04292025-MET-0576',
                'information' => NULL,
                'sample_id' => 4291,
                'user_id' => 12,
                'created_at' => '2025-04-29 17:16:04',
                'updated_at' => '2025-04-29 17:16:04',
            ),
            157 => 
            array (
                'id' => 2723,
                'code' => 'R9-04292025-MET-0577',
                'information' => NULL,
                'sample_id' => 4292,
                'user_id' => 12,
                'created_at' => '2025-04-29 17:16:11',
                'updated_at' => '2025-04-29 17:16:11',
            ),
            158 => 
            array (
                'id' => 2724,
                'code' => 'R9-04292025-MET-0578',
                'information' => NULL,
                'sample_id' => 4293,
                'user_id' => 12,
                'created_at' => '2025-04-29 17:16:19',
                'updated_at' => '2025-04-29 17:16:19',
            ),
            159 => 
            array (
                'id' => 2725,
                'code' => 'R9-04292025-MET-0579',
                'information' => NULL,
                'sample_id' => 4294,
                'user_id' => 12,
                'created_at' => '2025-04-29 17:16:24',
                'updated_at' => '2025-04-29 17:16:24',
            ),
            160 => 
            array (
                'id' => 2726,
                'code' => 'R9-04292025-MET-0580',
                'information' => NULL,
                'sample_id' => 4295,
                'user_id' => 12,
                'created_at' => '2025-04-29 17:16:31',
                'updated_at' => '2025-04-29 17:16:31',
            ),
            161 => 
            array (
                'id' => 2727,
                'code' => 'R9-04292025-MET-0581',
                'information' => NULL,
                'sample_id' => 4296,
                'user_id' => 12,
                'created_at' => '2025-04-29 17:16:38',
                'updated_at' => '2025-04-29 17:16:38',
            ),
            162 => 
            array (
                'id' => 2728,
                'code' => 'R9-04292025-MIC-0306',
                'information' => NULL,
                'sample_id' => 4265,
                'user_id' => 16,
                'created_at' => '2025-04-29 18:54:53',
                'updated_at' => '2025-04-29 18:54:53',
            ),
            163 => 
            array (
                'id' => 2729,
                'code' => 'R9-04292025-MIC-0307',
                'information' => NULL,
                'sample_id' => 4266,
                'user_id' => 16,
                'created_at' => '2025-04-29 18:55:21',
                'updated_at' => '2025-04-29 18:55:21',
            ),
            164 => 
            array (
                'id' => 2730,
                'code' => 'R9-04292025-MIC-0308',
                'information' => NULL,
                'sample_id' => 4267,
                'user_id' => 16,
                'created_at' => '2025-04-29 18:55:57',
                'updated_at' => '2025-04-29 18:55:57',
            ),
            165 => 
            array (
                'id' => 2731,
                'code' => 'R9-04292025-MIC-0309',
                'information' => NULL,
                'sample_id' => 4268,
                'user_id' => 16,
                'created_at' => '2025-04-29 18:56:11',
                'updated_at' => '2025-04-29 18:56:11',
            ),
            166 => 
            array (
                'id' => 2732,
                'code' => 'R9-04292025-MIC-0310',
                'information' => NULL,
                'sample_id' => 4269,
                'user_id' => 16,
                'created_at' => '2025-04-29 18:56:20',
                'updated_at' => '2025-04-29 18:56:20',
            ),
            167 => 
            array (
                'id' => 2733,
                'code' => 'R9-04292025-MIC-0311',
                'information' => NULL,
                'sample_id' => 4270,
                'user_id' => 16,
                'created_at' => '2025-04-29 18:56:29',
                'updated_at' => '2025-04-29 18:56:29',
            ),
            168 => 
            array (
                'id' => 2734,
                'code' => 'R9-04292025-MIC-0312',
                'information' => NULL,
                'sample_id' => 3907,
                'user_id' => 16,
                'created_at' => '2025-04-29 20:22:17',
                'updated_at' => '2025-04-29 20:22:17',
            ),
            169 => 
            array (
                'id' => 2735,
                'code' => 'R9-04292025-MIC-0313',
                'information' => NULL,
                'sample_id' => 3997,
                'user_id' => 16,
                'created_at' => '2025-04-29 20:35:37',
                'updated_at' => '2025-04-29 20:35:37',
            ),
            170 => 
            array (
                'id' => 2736,
                'code' => 'R9-04292025-MIC-0314',
                'information' => NULL,
                'sample_id' => 3998,
                'user_id' => 16,
                'created_at' => '2025-04-29 20:36:21',
                'updated_at' => '2025-04-29 20:36:21',
            ),
            171 => 
            array (
                'id' => 2737,
                'code' => 'R9-04292025-MIC-0315',
                'information' => NULL,
                'sample_id' => 3999,
                'user_id' => 16,
                'created_at' => '2025-04-29 20:36:30',
                'updated_at' => '2025-04-29 20:36:30',
            ),
            172 => 
            array (
                'id' => 2738,
                'code' => 'R9-04292025-MIC-0316',
                'information' => NULL,
                'sample_id' => 4000,
                'user_id' => 16,
                'created_at' => '2025-04-29 20:36:42',
                'updated_at' => '2025-04-29 20:36:42',
            ),
            173 => 
            array (
                'id' => 2739,
                'code' => 'R9-04292025-MIC-0317',
                'information' => NULL,
                'sample_id' => 4001,
                'user_id' => 16,
                'created_at' => '2025-04-29 20:36:52',
                'updated_at' => '2025-04-29 20:36:52',
            ),
            174 => 
            array (
                'id' => 2740,
                'code' => 'R9-04292025-MIC-0318',
                'information' => NULL,
                'sample_id' => 4002,
                'user_id' => 16,
                'created_at' => '2025-04-29 20:37:14',
                'updated_at' => '2025-04-29 20:37:14',
            ),
            175 => 
            array (
                'id' => 2741,
                'code' => 'R9-04292025-MIC-0319',
                'information' => NULL,
                'sample_id' => 4003,
                'user_id' => 16,
                'created_at' => '2025-04-29 20:37:31',
                'updated_at' => '2025-04-29 20:37:31',
            ),
            176 => 
            array (
                'id' => 2742,
                'code' => 'R9-04292025-MIC-0320',
                'information' => NULL,
                'sample_id' => 4262,
                'user_id' => 16,
                'created_at' => '2025-04-29 20:38:31',
                'updated_at' => '2025-04-29 20:38:31',
            ),
            177 => 
            array (
                'id' => 2743,
                'code' => 'R9-04292025-MIC-0321',
                'information' => NULL,
                'sample_id' => 4263,
                'user_id' => 16,
                'created_at' => '2025-04-29 20:42:25',
                'updated_at' => '2025-04-29 20:42:25',
            ),
            178 => 
            array (
                'id' => 2744,
                'code' => 'R9-04292025-MIC-0322',
                'information' => NULL,
                'sample_id' => 4271,
                'user_id' => 16,
                'created_at' => '2025-04-29 20:46:21',
                'updated_at' => '2025-04-29 20:46:21',
            ),
            179 => 
            array (
                'id' => 2745,
                'code' => 'R9-04292025-MIC-0323',
                'information' => NULL,
                'sample_id' => 4272,
                'user_id' => 16,
                'created_at' => '2025-04-29 20:46:45',
                'updated_at' => '2025-04-29 20:46:45',
            ),
            180 => 
            array (
                'id' => 2746,
                'code' => 'R9-04292025-MIC-0324',
                'information' => NULL,
                'sample_id' => 4273,
                'user_id' => 16,
                'created_at' => '2025-04-29 20:46:56',
                'updated_at' => '2025-04-29 20:46:56',
            ),
            181 => 
            array (
                'id' => 2747,
                'code' => 'R9-04292025-MIC-0325',
                'information' => NULL,
                'sample_id' => 4274,
                'user_id' => 16,
                'created_at' => '2025-04-29 20:47:04',
                'updated_at' => '2025-04-29 20:47:04',
            ),
            182 => 
            array (
                'id' => 2748,
                'code' => 'R9-04292025-MIC-0326',
                'information' => NULL,
                'sample_id' => 4275,
                'user_id' => 16,
                'created_at' => '2025-04-29 20:47:14',
                'updated_at' => '2025-04-29 20:47:14',
            ),
            183 => 
            array (
                'id' => 2749,
                'code' => 'R9-04292025-MIC-0327',
                'information' => NULL,
                'sample_id' => 4276,
                'user_id' => 16,
                'created_at' => '2025-04-29 20:47:47',
                'updated_at' => '2025-04-29 20:47:47',
            ),
            184 => 
            array (
                'id' => 2750,
                'code' => 'R9-04292025-MIC-0328',
                'information' => NULL,
                'sample_id' => 4277,
                'user_id' => 16,
                'created_at' => '2025-04-29 20:48:37',
                'updated_at' => '2025-04-29 20:48:37',
            ),
            185 => 
            array (
                'id' => 2751,
                'code' => 'R9-04292025-MIC-0329',
                'information' => NULL,
                'sample_id' => 4278,
                'user_id' => 16,
                'created_at' => '2025-04-29 20:48:51',
                'updated_at' => '2025-04-29 20:48:51',
            ),
            186 => 
            array (
                'id' => 2752,
                'code' => 'R9-04292025-MIC-0330',
                'information' => NULL,
                'sample_id' => 4279,
                'user_id' => 16,
                'created_at' => '2025-04-29 20:49:04',
                'updated_at' => '2025-04-29 20:49:04',
            ),
            187 => 
            array (
                'id' => 2753,
                'code' => 'R9-04292025-MIC-0331',
                'information' => NULL,
                'sample_id' => 4280,
                'user_id' => 16,
                'created_at' => '2025-04-29 20:49:33',
                'updated_at' => '2025-04-29 20:49:33',
            ),
            188 => 
            array (
                'id' => 2754,
                'code' => 'R9-04292025-MIC-0332',
                'information' => NULL,
                'sample_id' => 4281,
                'user_id' => 16,
                'created_at' => '2025-04-29 20:49:45',
                'updated_at' => '2025-04-29 20:49:45',
            ),
            189 => 
            array (
                'id' => 2755,
                'code' => 'R9-04292025-MIC-0333',
                'information' => NULL,
                'sample_id' => 4282,
                'user_id' => 16,
                'created_at' => '2025-04-29 20:50:01',
                'updated_at' => '2025-04-29 20:50:01',
            ),
            190 => 
            array (
                'id' => 2756,
                'code' => 'R9-04292025-MIC-0334',
                'information' => NULL,
                'sample_id' => 4283,
                'user_id' => 16,
                'created_at' => '2025-04-29 20:50:18',
                'updated_at' => '2025-04-29 20:50:18',
            ),
            191 => 
            array (
                'id' => 2757,
                'code' => 'R9-04292025-MIC-0335',
                'information' => NULL,
                'sample_id' => 4284,
                'user_id' => 16,
                'created_at' => '2025-04-29 20:50:27',
                'updated_at' => '2025-04-29 20:50:27',
            ),
            192 => 
            array (
                'id' => 2758,
                'code' => 'R9-04292025-MIC-0336',
                'information' => NULL,
                'sample_id' => 4285,
                'user_id' => 16,
                'created_at' => '2025-04-29 20:50:44',
                'updated_at' => '2025-04-29 20:50:44',
            ),
            193 => 
            array (
                'id' => 2759,
                'code' => 'R9-04292025-MIC-0337',
                'information' => NULL,
                'sample_id' => 4286,
                'user_id' => 16,
                'created_at' => '2025-04-29 20:51:03',
                'updated_at' => '2025-04-29 20:51:03',
            ),
            194 => 
            array (
                'id' => 2760,
                'code' => 'R9-04292025-MIC-0338',
                'information' => NULL,
                'sample_id' => 4287,
                'user_id' => 16,
                'created_at' => '2025-04-29 20:51:21',
                'updated_at' => '2025-04-29 20:51:21',
            ),
            195 => 
            array (
                'id' => 2761,
                'code' => 'R9-04292025-MIC-0339',
                'information' => NULL,
                'sample_id' => 4315,
                'user_id' => 16,
                'created_at' => '2025-04-29 20:52:38',
                'updated_at' => '2025-04-29 20:52:38',
            ),
            196 => 
            array (
                'id' => 2762,
                'code' => 'R9-04292025-CHE-0564',
                'information' => NULL,
                'sample_id' => 4317,
                'user_id' => 6,
                'created_at' => '2025-04-30 00:26:59',
                'updated_at' => '2025-04-30 00:26:59',
            ),
            197 => 
            array (
                'id' => 2763,
                'code' => 'R9-04292025-CHE-0565',
                'information' => NULL,
                'sample_id' => 4019,
                'user_id' => 6,
                'created_at' => '2025-04-30 00:45:50',
                'updated_at' => '2025-04-30 00:45:50',
            ),
            198 => 
            array (
                'id' => 2764,
                'code' => 'R9-04292025-CHE-0566',
                'information' => NULL,
                'sample_id' => 4020,
                'user_id' => 6,
                'created_at' => '2025-04-30 00:46:21',
                'updated_at' => '2025-04-30 00:46:21',
            ),
            199 => 
            array (
                'id' => 2765,
                'code' => 'R9-04292025-CHE-0567',
                'information' => NULL,
                'sample_id' => 4021,
                'user_id' => 6,
                'created_at' => '2025-04-30 00:46:36',
                'updated_at' => '2025-04-30 00:46:36',
            ),
            200 => 
            array (
                'id' => 2766,
                'code' => 'R9-04292025-CHE-0568',
                'information' => NULL,
                'sample_id' => 4022,
                'user_id' => 6,
                'created_at' => '2025-04-30 00:46:49',
                'updated_at' => '2025-04-30 00:46:49',
            ),
            201 => 
            array (
                'id' => 2767,
                'code' => 'R9-04292025-CHE-0569',
                'information' => NULL,
                'sample_id' => 4023,
                'user_id' => 6,
                'created_at' => '2025-04-30 00:47:09',
                'updated_at' => '2025-04-30 00:47:09',
            ),
            202 => 
            array (
                'id' => 2768,
                'code' => 'R9-04292025-CHE-0570',
                'information' => NULL,
                'sample_id' => 4101,
                'user_id' => 7,
                'created_at' => '2025-04-30 16:32:05',
                'updated_at' => '2025-04-30 16:32:05',
            ),
            203 => 
            array (
                'id' => 2769,
                'code' => 'R9-04292025-CHE-0571',
                'information' => NULL,
                'sample_id' => 4102,
                'user_id' => 7,
                'created_at' => '2025-04-30 16:32:11',
                'updated_at' => '2025-04-30 16:32:11',
            ),
            204 => 
            array (
                'id' => 2770,
                'code' => 'R9-04302025-CHE-0572',
                'information' => NULL,
                'sample_id' => 4236,
                'user_id' => 6,
                'created_at' => '2025-04-30 17:11:35',
                'updated_at' => '2025-04-30 17:11:35',
            ),
            205 => 
            array (
                'id' => 2771,
                'code' => 'R9-04302025-MET-0582',
                'information' => NULL,
                'sample_id' => 3941,
                'user_id' => 12,
                'created_at' => '2025-04-30 23:30:34',
                'updated_at' => '2025-04-30 23:30:34',
            ),
            206 => 
            array (
                'id' => 2772,
                'code' => 'R9-04302025-MET-0583',
                'information' => NULL,
                'sample_id' => 3942,
                'user_id' => 12,
                'created_at' => '2025-04-30 23:30:59',
                'updated_at' => '2025-04-30 23:30:59',
            ),
            207 => 
            array (
                'id' => 2773,
                'code' => 'R9-04302025-MET-0584',
                'information' => NULL,
                'sample_id' => 3943,
                'user_id' => 12,
                'created_at' => '2025-04-30 23:31:11',
                'updated_at' => '2025-04-30 23:31:11',
            ),
            208 => 
            array (
                'id' => 2774,
                'code' => 'R9-04302025-MET-0585',
                'information' => NULL,
                'sample_id' => 3944,
                'user_id' => 12,
                'created_at' => '2025-04-30 23:31:24',
                'updated_at' => '2025-04-30 23:31:24',
            ),
            209 => 
            array (
                'id' => 2775,
                'code' => 'R9-04302025-MET-0586',
                'information' => NULL,
                'sample_id' => 3945,
                'user_id' => 12,
                'created_at' => '2025-04-30 23:31:35',
                'updated_at' => '2025-04-30 23:31:35',
            ),
            210 => 
            array (
                'id' => 2776,
                'code' => 'R9-05022025-MIC-0340',
                'information' => NULL,
                'sample_id' => 4303,
                'user_id' => 16,
                'created_at' => '2025-05-02 19:54:03',
                'updated_at' => '2025-05-02 19:54:03',
            ),
            211 => 
            array (
                'id' => 2777,
                'code' => 'R9-05022025-MIC-0341',
                'information' => NULL,
                'sample_id' => 4354,
                'user_id' => 16,
                'created_at' => '2025-05-02 20:38:10',
                'updated_at' => '2025-05-02 20:38:10',
            ),
            212 => 
            array (
                'id' => 2778,
                'code' => 'R9-05022025-MIC-0342',
                'information' => NULL,
                'sample_id' => 4297,
                'user_id' => 16,
                'created_at' => '2025-05-02 21:01:12',
                'updated_at' => '2025-05-02 21:01:12',
            ),
            213 => 
            array (
                'id' => 2779,
                'code' => 'R9-05022025-MIC-0343',
                'information' => NULL,
                'sample_id' => 4355,
                'user_id' => 16,
                'created_at' => '2025-05-02 22:10:23',
                'updated_at' => '2025-05-02 22:10:23',
            ),
            214 => 
            array (
                'id' => 2780,
                'code' => 'R9-05022025-MIC-0344',
                'information' => NULL,
                'sample_id' => 4356,
                'user_id' => 16,
                'created_at' => '2025-05-02 22:10:57',
                'updated_at' => '2025-05-02 22:10:57',
            ),
            215 => 
            array (
                'id' => 2781,
                'code' => 'R9-05022025-MIC-0345',
                'information' => NULL,
                'sample_id' => 4357,
                'user_id' => 16,
                'created_at' => '2025-05-02 22:11:05',
                'updated_at' => '2025-05-02 22:11:05',
            ),
            216 => 
            array (
                'id' => 2782,
                'code' => 'R9-05022025-MIC-0346',
                'information' => NULL,
                'sample_id' => 4358,
                'user_id' => 16,
                'created_at' => '2025-05-02 22:11:12',
                'updated_at' => '2025-05-02 22:11:12',
            ),
            217 => 
            array (
                'id' => 2783,
                'code' => 'R9-05022025-MIC-0347',
                'information' => NULL,
                'sample_id' => 4359,
                'user_id' => 16,
                'created_at' => '2025-05-02 22:11:39',
                'updated_at' => '2025-05-02 22:11:39',
            ),
            218 => 
            array (
                'id' => 2784,
                'code' => 'R9-05022025-MET-0587',
                'information' => NULL,
                'sample_id' => 4471,
                'user_id' => 13,
                'created_at' => '2025-05-02 23:16:07',
                'updated_at' => '2025-05-02 23:16:07',
            ),
            219 => 
            array (
                'id' => 2785,
                'code' => 'R9-05042025-MIC-0348',
                'information' => NULL,
                'sample_id' => 4038,
                'user_id' => 16,
                'created_at' => '2025-05-05 04:25:14',
                'updated_at' => '2025-05-05 04:25:14',
            ),
            220 => 
            array (
                'id' => 2786,
                'code' => 'R9-05042025-MIC-0349',
                'information' => NULL,
                'sample_id' => 4328,
                'user_id' => 16,
                'created_at' => '2025-05-05 04:37:28',
                'updated_at' => '2025-05-05 04:37:28',
            ),
            221 => 
            array (
                'id' => 2787,
                'code' => 'R9-05042025-MIC-0350',
                'information' => NULL,
                'sample_id' => 4360,
                'user_id' => 16,
                'created_at' => '2025-05-05 04:52:08',
                'updated_at' => '2025-05-05 04:52:08',
            ),
            222 => 
            array (
                'id' => 2788,
                'code' => 'R9-05052025-CHE-0573',
                'information' => NULL,
                'sample_id' => 3995,
                'user_id' => 8,
                'created_at' => '2025-05-05 15:39:29',
                'updated_at' => '2025-05-05 15:39:29',
            ),
            223 => 
            array (
                'id' => 2789,
                'code' => 'R9-05052025-CHE-0574',
                'information' => NULL,
                'sample_id' => 4044,
                'user_id' => 8,
                'created_at' => '2025-05-05 15:43:01',
                'updated_at' => '2025-05-05 15:43:01',
            ),
            224 => 
            array (
                'id' => 2790,
                'code' => 'R9-05052025-CHE-0575',
                'information' => NULL,
                'sample_id' => 3960,
                'user_id' => 8,
                'created_at' => '2025-05-05 16:10:32',
                'updated_at' => '2025-05-05 16:10:32',
            ),
            225 => 
            array (
                'id' => 2791,
                'code' => 'R9-05052025-CHE-0576',
                'information' => NULL,
                'sample_id' => 3961,
                'user_id' => 8,
                'created_at' => '2025-05-05 16:13:27',
                'updated_at' => '2025-05-05 16:13:27',
            ),
            226 => 
            array (
                'id' => 2792,
                'code' => 'R9-05052025-CHE-0577',
                'information' => NULL,
                'sample_id' => 3962,
                'user_id' => 8,
                'created_at' => '2025-05-05 16:13:37',
                'updated_at' => '2025-05-05 16:13:37',
            ),
            227 => 
            array (
                'id' => 2793,
                'code' => 'R9-05052025-CHE-0578',
                'information' => NULL,
                'sample_id' => 3963,
                'user_id' => 8,
                'created_at' => '2025-05-05 16:13:51',
                'updated_at' => '2025-05-05 16:13:51',
            ),
            228 => 
            array (
                'id' => 2794,
                'code' => 'R9-05052025-CHE-0579',
                'information' => NULL,
                'sample_id' => 3964,
                'user_id' => 8,
                'created_at' => '2025-05-05 16:14:03',
                'updated_at' => '2025-05-05 16:14:03',
            ),
            229 => 
            array (
                'id' => 2795,
                'code' => 'R9-05052025-CHE-0580',
                'information' => NULL,
                'sample_id' => 3965,
                'user_id' => 8,
                'created_at' => '2025-05-05 16:14:36',
                'updated_at' => '2025-05-05 16:14:36',
            ),
            230 => 
            array (
                'id' => 2796,
                'code' => 'R9-05052025-CHE-0581',
                'information' => NULL,
                'sample_id' => 3966,
                'user_id' => 8,
                'created_at' => '2025-05-05 16:14:46',
                'updated_at' => '2025-05-05 16:14:46',
            ),
            231 => 
            array (
                'id' => 2797,
                'code' => 'R9-05052025-CHE-0582',
                'information' => NULL,
                'sample_id' => 3967,
                'user_id' => 8,
                'created_at' => '2025-05-05 16:15:14',
                'updated_at' => '2025-05-05 16:15:14',
            ),
            232 => 
            array (
                'id' => 2798,
                'code' => 'R9-05052025-CHE-0583',
                'information' => NULL,
                'sample_id' => 3968,
                'user_id' => 8,
                'created_at' => '2025-05-05 16:15:25',
                'updated_at' => '2025-05-05 16:15:25',
            ),
            233 => 
            array (
                'id' => 2799,
                'code' => 'R9-05052025-CHE-0584',
                'information' => NULL,
                'sample_id' => 3969,
                'user_id' => 8,
                'created_at' => '2025-05-05 16:15:35',
                'updated_at' => '2025-05-05 16:15:35',
            ),
            234 => 
            array (
                'id' => 2800,
                'code' => 'R9-05052025-CHE-0585',
                'information' => NULL,
                'sample_id' => 3970,
                'user_id' => 8,
                'created_at' => '2025-05-05 16:15:41',
                'updated_at' => '2025-05-05 16:15:41',
            ),
            235 => 
            array (
                'id' => 2801,
                'code' => 'R9-05052025-CHE-0586',
                'information' => NULL,
                'sample_id' => 3971,
                'user_id' => 8,
                'created_at' => '2025-05-05 16:15:48',
                'updated_at' => '2025-05-05 16:15:48',
            ),
            236 => 
            array (
                'id' => 2802,
                'code' => 'R9-05052025-CHE-0587',
                'information' => NULL,
                'sample_id' => 3946,
                'user_id' => 8,
                'created_at' => '2025-05-05 16:19:59',
                'updated_at' => '2025-05-05 16:19:59',
            ),
            237 => 
            array (
                'id' => 2803,
                'code' => 'R9-05052025-CHE-0588',
                'information' => NULL,
                'sample_id' => 3947,
                'user_id' => 8,
                'created_at' => '2025-05-05 16:20:05',
                'updated_at' => '2025-05-05 16:20:05',
            ),
            238 => 
            array (
                'id' => 2804,
                'code' => 'R9-05052025-CHE-0589',
                'information' => NULL,
                'sample_id' => 3948,
                'user_id' => 8,
                'created_at' => '2025-05-05 16:20:13',
                'updated_at' => '2025-05-05 16:20:13',
            ),
            239 => 
            array (
                'id' => 2805,
                'code' => 'R9-05052025-CHE-0590',
                'information' => NULL,
                'sample_id' => 3949,
                'user_id' => 8,
                'created_at' => '2025-05-05 16:20:21',
                'updated_at' => '2025-05-05 16:20:21',
            ),
            240 => 
            array (
                'id' => 2806,
                'code' => 'R9-05052025-CHE-0591',
                'information' => NULL,
                'sample_id' => 3952,
                'user_id' => 8,
                'created_at' => '2025-05-05 16:20:26',
                'updated_at' => '2025-05-05 16:20:26',
            ),
            241 => 
            array (
                'id' => 2807,
                'code' => 'R9-05052025-CHE-0592',
                'information' => NULL,
                'sample_id' => 3953,
                'user_id' => 8,
                'created_at' => '2025-05-05 16:20:31',
                'updated_at' => '2025-05-05 16:20:31',
            ),
            242 => 
            array (
                'id' => 2808,
                'code' => 'R9-05052025-CHE-0593',
                'information' => NULL,
                'sample_id' => 3954,
                'user_id' => 8,
                'created_at' => '2025-05-05 16:20:54',
                'updated_at' => '2025-05-05 16:20:54',
            ),
            243 => 
            array (
                'id' => 2809,
                'code' => 'R9-05052025-CHE-0594',
                'information' => NULL,
                'sample_id' => 3955,
                'user_id' => 8,
                'created_at' => '2025-05-05 16:21:00',
                'updated_at' => '2025-05-05 16:21:00',
            ),
            244 => 
            array (
                'id' => 2810,
                'code' => 'R9-05052025-CHE-0595',
                'information' => NULL,
                'sample_id' => 3956,
                'user_id' => 8,
                'created_at' => '2025-05-05 16:21:05',
                'updated_at' => '2025-05-05 16:21:05',
            ),
            245 => 
            array (
                'id' => 2811,
                'code' => 'R9-05052025-CHE-0596',
                'information' => NULL,
                'sample_id' => 3957,
                'user_id' => 8,
                'created_at' => '2025-05-05 16:21:13',
                'updated_at' => '2025-05-05 16:21:13',
            ),
            246 => 
            array (
                'id' => 2812,
                'code' => 'R9-05052025-CHE-0597',
                'information' => NULL,
                'sample_id' => 3958,
                'user_id' => 8,
                'created_at' => '2025-05-05 16:21:17',
                'updated_at' => '2025-05-05 16:21:17',
            ),
            247 => 
            array (
                'id' => 2813,
                'code' => 'R9-05052025-CHE-0598',
                'information' => NULL,
                'sample_id' => 3959,
                'user_id' => 8,
                'created_at' => '2025-05-05 16:21:22',
                'updated_at' => '2025-05-05 16:21:22',
            ),
            248 => 
            array (
                'id' => 2814,
                'code' => 'R9-05052025-MET-0588',
                'information' => NULL,
                'sample_id' => 3382,
                'user_id' => 13,
                'created_at' => '2025-05-05 17:32:13',
                'updated_at' => '2025-05-05 17:32:13',
            ),
            249 => 
            array (
                'id' => 2815,
                'code' => 'R9-05052025-MET-0589',
                'information' => NULL,
                'sample_id' => 3383,
                'user_id' => 13,
                'created_at' => '2025-05-05 17:32:27',
                'updated_at' => '2025-05-05 17:32:27',
            ),
            250 => 
            array (
                'id' => 2816,
                'code' => 'R9-05052025-MET-0590',
                'information' => NULL,
                'sample_id' => 3384,
                'user_id' => 13,
                'created_at' => '2025-05-05 17:32:32',
                'updated_at' => '2025-05-05 17:32:32',
            ),
            251 => 
            array (
                'id' => 2817,
                'code' => 'R9-05052025-MET-0591',
                'information' => NULL,
                'sample_id' => 3385,
                'user_id' => 13,
                'created_at' => '2025-05-05 17:32:38',
                'updated_at' => '2025-05-05 17:32:38',
            ),
            252 => 
            array (
                'id' => 2818,
                'code' => 'R9-05052025-MET-0592',
                'information' => NULL,
                'sample_id' => 3386,
                'user_id' => 13,
                'created_at' => '2025-05-05 17:32:47',
                'updated_at' => '2025-05-05 17:32:47',
            ),
            253 => 
            array (
                'id' => 2819,
                'code' => 'R9-05052025-MET-0593',
                'information' => NULL,
                'sample_id' => 3387,
                'user_id' => 13,
                'created_at' => '2025-05-05 17:32:53',
                'updated_at' => '2025-05-05 17:32:53',
            ),
            254 => 
            array (
                'id' => 2820,
                'code' => 'R9-05052025-MET-0594',
                'information' => NULL,
                'sample_id' => 3388,
                'user_id' => 13,
                'created_at' => '2025-05-05 17:32:57',
                'updated_at' => '2025-05-05 17:32:57',
            ),
            255 => 
            array (
                'id' => 2821,
                'code' => 'R9-05052025-MET-0595',
                'information' => NULL,
                'sample_id' => 3488,
                'user_id' => 13,
                'created_at' => '2025-05-05 17:33:30',
                'updated_at' => '2025-05-05 17:33:30',
            ),
            256 => 
            array (
                'id' => 2822,
                'code' => 'R9-05052025-MET-0596',
                'information' => NULL,
                'sample_id' => 3205,
                'user_id' => 13,
                'created_at' => '2025-05-05 17:34:29',
                'updated_at' => '2025-05-05 17:34:29',
            ),
            257 => 
            array (
                'id' => 2823,
                'code' => 'R9-05052025-MET-0597',
                'information' => NULL,
                'sample_id' => 3206,
                'user_id' => 13,
                'created_at' => '2025-05-05 17:34:45',
                'updated_at' => '2025-05-05 17:34:45',
            ),
            258 => 
            array (
                'id' => 2824,
                'code' => 'R9-05052025-MET-0598',
                'information' => NULL,
                'sample_id' => 3207,
                'user_id' => 13,
                'created_at' => '2025-05-05 17:34:50',
                'updated_at' => '2025-05-05 17:34:50',
            ),
            259 => 
            array (
                'id' => 2825,
                'code' => 'R9-05052025-MET-0599',
                'information' => NULL,
                'sample_id' => 3208,
                'user_id' => 13,
                'created_at' => '2025-05-05 17:34:55',
                'updated_at' => '2025-05-05 17:34:55',
            ),
            260 => 
            array (
                'id' => 2826,
                'code' => 'R9-05052025-MET-0600',
                'information' => NULL,
                'sample_id' => 3209,
                'user_id' => 13,
                'created_at' => '2025-05-05 17:35:00',
                'updated_at' => '2025-05-05 17:35:00',
            ),
            261 => 
            array (
                'id' => 2827,
                'code' => 'R9-05052025-MET-0601',
                'information' => NULL,
                'sample_id' => 3210,
                'user_id' => 13,
                'created_at' => '2025-05-05 17:35:05',
                'updated_at' => '2025-05-05 17:35:05',
            ),
            262 => 
            array (
                'id' => 2828,
                'code' => 'R9-05052025-MET-0602',
                'information' => NULL,
                'sample_id' => 3211,
                'user_id' => 13,
                'created_at' => '2025-05-05 17:35:10',
                'updated_at' => '2025-05-05 17:35:10',
            ),
            263 => 
            array (
                'id' => 2829,
                'code' => 'R9-05052025-MET-0603',
                'information' => NULL,
                'sample_id' => 3212,
                'user_id' => 13,
                'created_at' => '2025-05-05 17:35:15',
                'updated_at' => '2025-05-05 17:35:15',
            ),
            264 => 
            array (
                'id' => 2830,
                'code' => 'R9-05052025-MET-0604',
                'information' => NULL,
                'sample_id' => 3213,
                'user_id' => 13,
                'created_at' => '2025-05-05 17:35:21',
                'updated_at' => '2025-05-05 17:35:21',
            ),
            265 => 
            array (
                'id' => 2831,
                'code' => 'R9-05052025-MET-0605',
                'information' => NULL,
                'sample_id' => 3214,
                'user_id' => 13,
                'created_at' => '2025-05-05 17:35:26',
                'updated_at' => '2025-05-05 17:35:26',
            ),
            266 => 
            array (
                'id' => 2832,
                'code' => 'R9-05052025-MET-0606',
                'information' => NULL,
                'sample_id' => 3215,
                'user_id' => 13,
                'created_at' => '2025-05-05 17:35:30',
                'updated_at' => '2025-05-05 17:35:30',
            ),
            267 => 
            array (
                'id' => 2833,
                'code' => 'R9-05052025-MET-0607',
                'information' => NULL,
                'sample_id' => 3216,
                'user_id' => 13,
                'created_at' => '2025-05-05 17:35:35',
                'updated_at' => '2025-05-05 17:35:35',
            ),
            268 => 
            array (
                'id' => 2834,
                'code' => 'R9-05052025-MET-0608',
                'information' => NULL,
                'sample_id' => 3217,
                'user_id' => 13,
                'created_at' => '2025-05-05 17:35:41',
                'updated_at' => '2025-05-05 17:35:41',
            ),
            269 => 
            array (
                'id' => 2835,
                'code' => 'R9-05052025-MET-0609',
                'information' => NULL,
                'sample_id' => 3218,
                'user_id' => 13,
                'created_at' => '2025-05-05 17:35:47',
                'updated_at' => '2025-05-05 17:35:47',
            ),
            270 => 
            array (
                'id' => 2836,
                'code' => 'R9-05052025-MET-0610',
                'information' => NULL,
                'sample_id' => 3219,
                'user_id' => 13,
                'created_at' => '2025-05-05 17:35:51',
                'updated_at' => '2025-05-05 17:35:51',
            ),
            271 => 
            array (
                'id' => 2837,
                'code' => 'R9-05052025-MET-0611',
                'information' => NULL,
                'sample_id' => 4476,
                'user_id' => 13,
                'created_at' => '2025-05-05 18:37:29',
                'updated_at' => '2025-05-05 18:37:29',
            ),
            272 => 
            array (
                'id' => 2838,
                'code' => 'R9-05052025-MIC-0351',
                'information' => NULL,
                'sample_id' => 4432,
                'user_id' => 16,
                'created_at' => '2025-05-05 20:09:18',
                'updated_at' => '2025-05-05 20:09:18',
            ),
            273 => 
            array (
                'id' => 2839,
                'code' => 'R9-05052025-MIC-0352',
                'information' => NULL,
                'sample_id' => 4433,
                'user_id' => 16,
                'created_at' => '2025-05-05 20:09:38',
                'updated_at' => '2025-05-05 20:09:38',
            ),
            274 => 
            array (
                'id' => 2840,
                'code' => 'R9-05052025-MIC-0353',
                'information' => NULL,
                'sample_id' => 4434,
                'user_id' => 16,
                'created_at' => '2025-05-05 20:14:56',
                'updated_at' => '2025-05-05 20:14:56',
            ),
            275 => 
            array (
                'id' => 2841,
                'code' => 'R9-05052025-MIC-0354',
                'information' => NULL,
                'sample_id' => 4435,
                'user_id' => 16,
                'created_at' => '2025-05-05 20:15:18',
                'updated_at' => '2025-05-05 20:15:18',
            ),
            276 => 
            array (
                'id' => 2842,
                'code' => 'R9-05052025-MIC-0355',
                'information' => NULL,
                'sample_id' => 4436,
                'user_id' => 16,
                'created_at' => '2025-05-05 20:15:25',
                'updated_at' => '2025-05-05 20:15:25',
            ),
            277 => 
            array (
                'id' => 2843,
                'code' => 'R9-05052025-MIC-0356',
                'information' => NULL,
                'sample_id' => 4437,
                'user_id' => 16,
                'created_at' => '2025-05-05 20:15:32',
                'updated_at' => '2025-05-05 20:15:32',
            ),
            278 => 
            array (
                'id' => 2844,
                'code' => 'R9-05052025-MIC-0357',
                'information' => NULL,
                'sample_id' => 4438,
                'user_id' => 16,
                'created_at' => '2025-05-05 20:15:45',
                'updated_at' => '2025-05-05 20:15:45',
            ),
            279 => 
            array (
                'id' => 2845,
                'code' => 'R9-05052025-MIC-0358',
                'information' => NULL,
                'sample_id' => 4439,
                'user_id' => 16,
                'created_at' => '2025-05-05 20:16:04',
                'updated_at' => '2025-05-05 20:16:04',
            ),
            280 => 
            array (
                'id' => 2846,
                'code' => 'R9-05052025-MIC-0359',
                'information' => NULL,
                'sample_id' => 4440,
                'user_id' => 16,
                'created_at' => '2025-05-05 20:16:12',
                'updated_at' => '2025-05-05 20:16:12',
            ),
            281 => 
            array (
                'id' => 2847,
                'code' => 'R9-05052025-MIC-0360',
                'information' => NULL,
                'sample_id' => 4441,
                'user_id' => 16,
                'created_at' => '2025-05-05 20:16:24',
                'updated_at' => '2025-05-05 20:16:24',
            ),
            282 => 
            array (
                'id' => 2848,
                'code' => 'R9-05052025-MIC-0361',
                'information' => NULL,
                'sample_id' => 4442,
                'user_id' => 16,
                'created_at' => '2025-05-05 20:16:37',
                'updated_at' => '2025-05-05 20:16:37',
            ),
            283 => 
            array (
                'id' => 2849,
                'code' => 'R9-05052025-MIC-0362',
                'information' => NULL,
                'sample_id' => 4443,
                'user_id' => 16,
                'created_at' => '2025-05-05 20:16:47',
                'updated_at' => '2025-05-05 20:16:47',
            ),
            284 => 
            array (
                'id' => 2850,
                'code' => 'R9-05052025-MIC-0363',
                'information' => NULL,
                'sample_id' => 4444,
                'user_id' => 16,
                'created_at' => '2025-05-05 20:16:59',
                'updated_at' => '2025-05-05 20:16:59',
            ),
            285 => 
            array (
                'id' => 2851,
                'code' => 'R9-05052025-MIC-0364',
                'information' => NULL,
                'sample_id' => 4445,
                'user_id' => 16,
                'created_at' => '2025-05-05 20:17:18',
                'updated_at' => '2025-05-05 20:17:18',
            ),
            286 => 
            array (
                'id' => 2852,
                'code' => 'R9-05052025-MIC-0365',
                'information' => NULL,
                'sample_id' => 4446,
                'user_id' => 16,
                'created_at' => '2025-05-05 20:17:30',
                'updated_at' => '2025-05-05 20:17:30',
            ),
            287 => 
            array (
                'id' => 2853,
                'code' => 'R9-05052025-MIC-0366',
                'information' => NULL,
                'sample_id' => 4447,
                'user_id' => 16,
                'created_at' => '2025-05-05 20:17:43',
                'updated_at' => '2025-05-05 20:17:43',
            ),
            288 => 
            array (
                'id' => 2854,
                'code' => 'R9-05052025-MIC-0367',
                'information' => NULL,
                'sample_id' => 4448,
                'user_id' => 16,
                'created_at' => '2025-05-05 20:17:56',
                'updated_at' => '2025-05-05 20:17:56',
            ),
            289 => 
            array (
                'id' => 2855,
                'code' => 'R9-05052025-MIC-0368',
                'information' => NULL,
                'sample_id' => 4449,
                'user_id' => 16,
                'created_at' => '2025-05-05 20:18:07',
                'updated_at' => '2025-05-05 20:18:07',
            ),
            290 => 
            array (
                'id' => 2856,
                'code' => 'R9-05052025-MIC-0369',
                'information' => NULL,
                'sample_id' => 4450,
                'user_id' => 16,
                'created_at' => '2025-05-05 20:18:19',
                'updated_at' => '2025-05-05 20:18:19',
            ),
            291 => 
            array (
                'id' => 2857,
                'code' => 'R9-05052025-MIC-0370',
                'information' => NULL,
                'sample_id' => 4451,
                'user_id' => 16,
                'created_at' => '2025-05-05 20:18:34',
                'updated_at' => '2025-05-05 20:18:34',
            ),
            292 => 
            array (
                'id' => 2858,
                'code' => 'R9-05052025-MIC-0371',
                'information' => NULL,
                'sample_id' => 4452,
                'user_id' => 16,
                'created_at' => '2025-05-05 20:18:49',
                'updated_at' => '2025-05-05 20:18:49',
            ),
            293 => 
            array (
                'id' => 2859,
                'code' => 'R9-05052025-MIC-0372',
                'information' => NULL,
                'sample_id' => 4453,
                'user_id' => 16,
                'created_at' => '2025-05-05 20:19:12',
                'updated_at' => '2025-05-05 20:19:12',
            ),
            294 => 
            array (
                'id' => 2860,
                'code' => 'R9-05052025-MIC-0373',
                'information' => NULL,
                'sample_id' => 4454,
                'user_id' => 16,
                'created_at' => '2025-05-05 20:19:31',
                'updated_at' => '2025-05-05 20:19:31',
            ),
            295 => 
            array (
                'id' => 2861,
                'code' => 'R9-05052025-MIC-0374',
                'information' => NULL,
                'sample_id' => 4455,
                'user_id' => 16,
                'created_at' => '2025-05-05 20:19:51',
                'updated_at' => '2025-05-05 20:19:51',
            ),
            296 => 
            array (
                'id' => 2862,
                'code' => 'R9-05052025-MIC-0375',
                'information' => NULL,
                'sample_id' => 4456,
                'user_id' => 16,
                'created_at' => '2025-05-05 20:20:10',
                'updated_at' => '2025-05-05 20:20:10',
            ),
            297 => 
            array (
                'id' => 2863,
                'code' => 'R9-05052025-MIC-0376',
                'information' => NULL,
                'sample_id' => 4457,
                'user_id' => 16,
                'created_at' => '2025-05-05 20:20:24',
                'updated_at' => '2025-05-05 20:20:24',
            ),
            298 => 
            array (
                'id' => 2864,
                'code' => 'R9-05052025-MIC-0377',
                'information' => NULL,
                'sample_id' => 4458,
                'user_id' => 16,
                'created_at' => '2025-05-05 20:20:41',
                'updated_at' => '2025-05-05 20:20:41',
            ),
            299 => 
            array (
                'id' => 2865,
                'code' => 'R9-05052025-MIC-0378',
                'information' => NULL,
                'sample_id' => 4459,
                'user_id' => 16,
                'created_at' => '2025-05-05 20:21:03',
                'updated_at' => '2025-05-05 20:21:03',
            ),
            300 => 
            array (
                'id' => 2866,
                'code' => 'R9-05052025-MET-0612',
                'information' => NULL,
                'sample_id' => 4482,
                'user_id' => 12,
                'created_at' => '2025-05-05 23:59:05',
                'updated_at' => '2025-05-05 23:59:05',
            ),
        ));

        
    }
}