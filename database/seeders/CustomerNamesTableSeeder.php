<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CustomerNamesTableSeeder extends Seeder
{
    /**
     * Auto generated seeder file.
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('customer_names')->delete();
        
        \DB::table('customer_names')->insert(array (
            0 => 
            array (
                'id' => 2,
                'name' => 'Puting Manok Corporation',
                'has_branches' => 1,
                'is_active' => 1,
                'created_at' => '2024-07-30 21:35:41',
                'updated_at' => '2024-07-30 21:35:41',
            ),
            1 => 
            array (
                'id' => 3,
                'name' => 'Crustacean Trading Corporation',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-07-30 21:48:15',
                'updated_at' => '2024-07-30 21:48:15',
            ),
            2 => 
            array (
                'id' => 6,
                'name' => 'UPLB Foundation, Inc.',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-07-30 21:57:10',
                'updated_at' => '2024-07-30 21:57:10',
            ),
            3 => 
            array (
                'id' => 7,
                'name' => 'City Health Office',
                'has_branches' => 1,
                'is_active' => 1,
                'created_at' => '2024-07-30 22:02:23',
                'updated_at' => '2024-07-30 22:02:23',
            ),
            4 => 
            array (
                'id' => 8,
                'name' => 'Zamboanga City Medical Center',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-07-30 22:05:08',
                'updated_at' => '2024-07-30 22:05:08',
            ),
            5 => 
            array (
                'id' => 9,
                'name' => 'DOST IX',
                'has_branches' => 1,
                'is_active' => 1,
                'created_at' => '2024-07-30 22:08:45',
                'updated_at' => '2024-07-30 22:08:45',
            ),
            6 => 
            array (
                'id' => 10,
                'name' => 'Ipil Doctors Hospital',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-07-30 22:12:39',
                'updated_at' => '2024-07-30 22:12:39',
            ),
            7 => 
            array (
                'id' => 11,
                'name' => 'Southwest Asian Canning Corporation',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-07-30 22:24:37',
                'updated_at' => '2024-07-30 22:24:37',
            ),
            8 => 
            array (
                'id' => 12,
                'name' => 'TC International Seafoods Provider, Inc.',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-07-30 22:27:56',
                'updated_at' => '2024-07-30 22:27:56',
            ),
            9 => 
            array (
                'id' => 13,
                'name' => 'Dr. Henry M. De Villa Memorial Hospital',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-07-30 22:31:01',
                'updated_at' => '2024-07-30 22:31:01',
            ),
            10 => 
            array (
                'id' => 14,
                'name' => 'ML Manufacturing & Enterprises',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-07-30 22:55:55',
                'updated_at' => '2024-07-30 22:55:55',
            ),
            11 => 
            array (
                'id' => 15,
                'name' => 'Local Government Unit',
                'has_branches' => 1,
                'is_active' => 1,
                'created_at' => '2024-07-30 22:58:27',
                'updated_at' => '2024-07-30 22:58:27',
            ),
            12 => 
            array (
                'id' => 16,
                'name' => 'Z.C. Victory Fishing Corporation',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-07-30 23:00:14',
                'updated_at' => '2024-07-30 23:00:14',
            ),
            13 => 
            array (
                'id' => 17,
                'name' => 'National Food Authority',
                'has_branches' => 1,
                'is_active' => 1,
                'created_at' => '2024-07-30 23:02:14',
                'updated_at' => '2024-07-30 23:02:14',
            ),
            14 => 
            array (
                'id' => 18,
                'name' => 'ANZZ Pharmacy',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-07-30 23:03:40',
                'updated_at' => '2024-07-30 23:03:40',
            ),
            15 => 
            array (
                'id' => 19,
                'name' => 'ZC E & L Corporation',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-07-30 23:05:39',
                'updated_at' => '2024-07-30 23:05:39',
            ),
            16 => 
            array (
                'id' => 20,
                'name' => 'Southern Philippine Trucking',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-07-30 23:08:30',
                'updated_at' => '2024-07-30 23:08:30',
            ),
            17 => 
            array (
                'id' => 21,
                'name' => 'Usman D. Alfaro',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-07-30 23:11:24',
                'updated_at' => '2024-07-30 23:11:24',
            ),
            18 => 
            array (
                'id' => 22,
                'name' => 'Zambasulta Seaweeds Trading',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-07-30 23:13:55',
                'updated_at' => '2024-07-30 23:13:55',
            ),
            19 => 
            array (
                'id' => 23,
                'name' => 'Aquatic Food Manufacturing Corporation',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-07-30 23:16:22',
                'updated_at' => '2024-07-30 23:16:22',
            ),
            20 => 
            array (
                'id' => 24,
                'name' => 'Zamboanga Carrageenan Manufacturing Corporation',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-07-30 23:17:55',
                'updated_at' => '2024-07-30 23:17:55',
            ),
            21 => 
            array (
                'id' => 25,
                'name' => 'Four-M Gas Station',
                'has_branches' => 1,
                'is_active' => 1,
                'created_at' => '2024-07-30 23:20:39',
                'updated_at' => '2024-07-30 23:20:39',
            ),
            22 => 
            array (
                'id' => 26,
                'name' => 'Permex Producer & Exporter Corporation',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-07-30 23:23:05',
                'updated_at' => '2024-07-30 23:23:05',
            ),
            23 => 
            array (
                'id' => 27,
                'name' => 'China Wuyi Co., Ltd',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-07-30 23:25:53',
                'updated_at' => '2024-07-30 23:25:53',
            ),
            24 => 
            array (
                'id' => 28,
                'name' => 'Zamboanga Maritime Training Center, Inc.',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-07-30 23:28:12',
                'updated_at' => '2024-07-30 23:28:12',
            ),
            25 => 
            array (
                'id' => 29,
                'name' => 'Agromar Enterprises',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-07-30 23:30:29',
                'updated_at' => '2024-07-30 23:30:29',
            ),
            26 => 
            array (
                'id' => 30,
                'name' => 'Pryce Gases Inc.',
                'has_branches' => 1,
                'is_active' => 1,
                'created_at' => '2024-07-30 23:32:52',
                'updated_at' => '2024-07-30 23:32:52',
            ),
            27 => 
            array (
                'id' => 31,
                'name' => 'Petron Centenarian Gas Station',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-07-30 23:34:51',
                'updated_at' => '2024-07-30 23:34:51',
            ),
            28 => 
            array (
                'id' => 32,
                'name' => 'Commision on Audit',
                'has_branches' => 1,
                'is_active' => 1,
                'created_at' => '2024-07-30 23:40:12',
                'updated_at' => '2024-07-30 23:40:12',
            ),
            29 => 
            array (
                'id' => 33,
                'name' => 'JGW Fuel',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-07-30 23:42:45',
                'updated_at' => '2024-07-30 23:42:45',
            ),
            30 => 
            array (
                'id' => 34,
                'name' => 'Philippine Carabao Center',
                'has_branches' => 1,
                'is_active' => 1,
                'created_at' => '2024-07-30 23:46:18',
                'updated_at' => '2024-07-30 23:46:18',
            ),
            31 => 
            array (
                'id' => 35,
                'name' => 'Rockspring Water Refilling Station',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-07-30 23:47:49',
                'updated_at' => '2024-07-30 23:47:49',
            ),
            32 => 
            array (
                'id' => 36,
                'name' => 'Nahla Pharmacy',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-07-30 23:49:30',
                'updated_at' => '2024-07-30 23:49:30',
            ),
            33 => 
            array (
                'id' => 37,
                'name' => 'Bueno Pizza House Corporation',
                'has_branches' => 1,
                'is_active' => 1,
                'created_at' => '2024-07-30 23:52:41',
                'updated_at' => '2024-07-30 23:52:41',
            ),
            34 => 
            array (
                'id' => 38,
                'name' => 'Fresh Pizza Food Corporation',
                'has_branches' => 1,
                'is_active' => 1,
                'created_at' => '2024-07-30 23:55:53',
                'updated_at' => '2024-07-30 23:55:53',
            ),
            35 => 
            array (
                'id' => 39,
                'name' => 'Jecomy Gas Station',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-07-30 23:59:51',
                'updated_at' => '2024-07-30 23:59:51',
            ),
            36 => 
            array (
                'id' => 40,
                'name' => 'Three L and Sons Group of Companies',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-07-31 00:11:41',
                'updated_at' => '2024-07-31 00:11:41',
            ),
            37 => 
            array (
                'id' => 41,
                'name' => 'Health Center',
                'has_branches' => 1,
                'is_active' => 1,
                'created_at' => '2024-07-31 00:13:23',
                'updated_at' => '2024-07-31 00:13:23',
            ),
            38 => 
            array (
                'id' => 42,
                'name' => 'Vicente T. Lao Construction',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-07-31 00:15:08',
                'updated_at' => '2024-07-31 00:15:08',
            ),
            39 => 
            array (
                'id' => 43,
                'name' => 'Lagitik Water Distribution Resources',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-07-31 00:16:59',
                'updated_at' => '2024-07-31 00:16:59',
            ),
            40 => 
            array (
                'id' => 44,
                'name' => 'Marcel Trading Corporation',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-07-31 00:20:12',
                'updated_at' => '2024-07-31 00:20:12',
            ),
            41 => 
            array (
                'id' => 45,
                'name' => 'Casa Canelar Pension',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-07-31 00:23:56',
                'updated_at' => '2024-07-31 00:23:56',
            ),
            42 => 
            array (
                'id' => 46,
                'name' => 'Zamboanga GNS Corporation',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-07-31 00:25:43',
                'updated_at' => '2024-07-31 00:25:43',
            ),
            43 => 
            array (
                'id' => 47,
                'name' => 'Super Royale Seafoods International Incorporated',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-07-31 00:27:32',
                'updated_at' => '2024-07-31 00:27:32',
            ),
            44 => 
            array (
                'id' => 48,
                'name' => 'Standard Measuring Instrument Calibration Services',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-07-31 00:29:49',
                'updated_at' => '2024-07-31 00:29:49',
            ),
            45 => 
            array (
                'id' => 49,
                'name' => 'Pick and Go',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-07-31 00:34:00',
                'updated_at' => '2024-07-31 00:34:00',
            ),
            46 => 
            array (
                'id' => 50,
                'name' => 'Isabela City Community Hospital, Inc.',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-07-31 00:35:34',
                'updated_at' => '2024-07-31 00:35:34',
            ),
            47 => 
            array (
                'id' => 51,
                'name' => 'AAJ Hauling Services',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-07-31 00:36:48',
                'updated_at' => '2024-07-31 00:36:48',
            ),
            48 => 
            array (
                'id' => 52,
                'name' => 'Jays Builder Marketing',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-07-31 00:39:02',
                'updated_at' => '2024-07-31 00:39:02',
            ),
            49 => 
            array (
                'id' => 53,
                'name' => 'LM Metro Hotel',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-07-31 00:40:28',
                'updated_at' => '2024-07-31 00:40:28',
            ),
            50 => 
            array (
                'id' => 54,
                'name' => 'Freemont Foods Corporation',
                'has_branches' => 1,
                'is_active' => 1,
                'created_at' => '2024-07-31 00:41:53',
                'updated_at' => '2024-07-31 00:41:53',
            ),
            51 => 
            array (
                'id' => 55,
                'name' => 'Basilan Spring',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-07-31 00:43:08',
                'updated_at' => '2024-07-31 00:43:08',
            ),
            52 => 
            array (
                'id' => 56,
                'name' => 'JT Waters',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-07-31 00:44:17',
                'updated_at' => '2024-07-31 00:44:17',
            ),
            53 => 
            array (
                'id' => 57,
                'name' => 'Greatway Fish Meal Producer Corporation',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-07-31 00:47:53',
                'updated_at' => '2024-07-31 00:47:53',
            ),
            54 => 
            array (
                'id' => 58,
                'name' => 'SR-Swing Bottled Water Manufacturing',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-07-31 00:48:58',
                'updated_at' => '2024-07-31 00:48:58',
            ),
            55 => 
            array (
                'id' => 59,
                'name' => 'Bluefin Seafood Export Incorporated',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-07-31 00:50:15',
                'updated_at' => '2024-07-31 00:50:15',
            ),
            56 => 
            array (
                'id' => 60,
                'name' => 'Buhatan Nipa Food Production Workers Association',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-07-31 00:54:24',
                'updated_at' => '2024-07-31 00:54:24',
            ),
            57 => 
            array (
                'id' => 61,
                'name' => 'PAL Express',
                'has_branches' => 1,
                'is_active' => 1,
                'created_at' => '2024-07-31 00:56:37',
                'updated_at' => '2024-07-31 00:56:37',
            ),
            58 => 
            array (
                'id' => 62,
                'name' => 'Titan Gasoline Station',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-07-31 00:58:37',
                'updated_at' => '2024-07-31 00:58:37',
            ),
            59 => 
            array (
                'id' => 63,
                'name' => 'Basri Seaweeds Trading',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-07-31 00:59:47',
                'updated_at' => '2024-07-31 00:59:47',
            ),
            60 => 
            array (
                'id' => 64,
                'name' => 'Grandprix Gasoline Station',
                'has_branches' => 1,
                'is_active' => 1,
                'created_at' => '2024-07-31 01:01:11',
                'updated_at' => '2024-07-31 01:01:11',
            ),
            61 => 
            array (
                'id' => 65,
                'name' => 'Bureau of Jail Management and Penology Region IX',
                'has_branches' => 1,
                'is_active' => 1,
                'created_at' => '2024-07-31 02:24:31',
                'updated_at' => '2024-07-31 02:24:31',
            ),
            62 => 
            array (
                'id' => 66,
                'name' => 'YL Fishing Corporation',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-07-31 02:28:33',
                'updated_at' => '2024-07-31 02:28:33',
            ),
            63 => 
            array (
                'id' => 67,
                'name' => 'Seaoil Bulk Terminal',
                'has_branches' => 1,
                'is_active' => 1,
                'created_at' => '2024-07-31 02:31:00',
                'updated_at' => '2024-07-31 02:31:00',
            ),
            64 => 
            array (
                'id' => 68,
                'name' => 'Sibuco Municipal Hospital',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-07-31 02:33:34',
                'updated_at' => '2024-07-31 02:33:34',
            ),
            65 => 
            array (
                'id' => 69,
                'name' => 'E-Cure Enterprises',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-07-31 02:41:59',
                'updated_at' => '2024-07-31 02:41:59',
            ),
            66 => 
            array (
                'id' => 70,
                'name' => 'Joan\'s Pharmacy and Convenience Store',
                'has_branches' => 1,
                'is_active' => 1,
                'created_at' => '2024-07-31 02:43:52',
                'updated_at' => '2024-07-31 02:43:52',
            ),
            67 => 
            array (
                'id' => 71,
                'name' => 'G Power Fuel Station',
                'has_branches' => 1,
                'is_active' => 1,
                'created_at' => '2024-07-31 02:45:15',
                'updated_at' => '2024-07-31 02:45:15',
            ),
            68 => 
            array (
                'id' => 72,
                'name' => 'Chan C Mining Incorporated',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-07-31 02:55:17',
                'updated_at' => '2024-07-31 02:55:17',
            ),
            69 => 
            array (
                'id' => 73,
                'name' => 'Dr. Jose Ma. Torres Memorial Foundation Hospital, Inc.',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-07-31 02:57:43',
                'updated_at' => '2024-07-31 02:57:43',
            ),
            70 => 
            array (
                'id' => 74,
                'name' => 'Joan\'s Pharmacy',
                'has_branches' => 1,
                'is_active' => 1,
                'created_at' => '2024-07-31 02:59:21',
                'updated_at' => '2024-07-31 02:59:21',
            ),
            71 => 
            array (
                'id' => 75,
                'name' => 'Victor John Dajay Soriano',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-07-31 03:02:24',
                'updated_at' => '2024-07-31 03:02:24',
            ),
            72 => 
            array (
                'id' => 76,
                'name' => 'Bangko Sentral ng Pilipinas',
                'has_branches' => 1,
                'is_active' => 1,
                'created_at' => '2024-07-31 03:03:58',
                'updated_at' => '2024-07-31 03:03:58',
            ),
            73 => 
            array (
                'id' => 77,
                'name' => 'Malangas Emergency Infirmary',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-07-31 03:06:29',
                'updated_at' => '2024-07-31 03:06:29',
            ),
            74 => 
            array (
                'id' => 78,
                'name' => 'Mega Seafoods Corporation',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-07-31 03:07:24',
                'updated_at' => '2024-07-31 03:07:24',
            ),
            75 => 
            array (
                'id' => 79,
                'name' => 'Johnnie\'s Food Products Manufacturing',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-07-31 03:08:16',
                'updated_at' => '2024-07-31 03:08:16',
            ),
            76 => 
            array (
                'id' => 80,
                'name' => 'Mercedez Shell Mini-Mart and Drug Store',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-07-31 03:09:11',
                'updated_at' => '2024-07-31 03:09:11',
            ),
            77 => 
            array (
                'id' => 81,
                'name' => 'Wilmar Edible Oils Phils. Inc.',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-07-31 03:11:41',
                'updated_at' => '2024-07-31 03:11:41',
            ),
            78 => 
            array (
                'id' => 82,
                'name' => 'Primetech Construction and Trading',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-07-31 03:14:41',
                'updated_at' => '2024-07-31 03:14:41',
            ),
            79 => 
            array (
                'id' => 83,
                'name' => 'Ocho Amigos Ventures Corporation',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-07-31 03:16:01',
                'updated_at' => '2024-07-31 03:16:01',
            ),
            80 => 
            array (
                'id' => 84,
                'name' => 'Pepsi-Cola Products Philippines, Inc.',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-08-07 16:12:24',
                'updated_at' => '2024-08-07 16:12:24',
            ),
            81 => 
            array (
                'id' => 85,
                'name' => 'Istasyong Pinoy Petroleum Corporation',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-08-07 16:15:37',
                'updated_at' => '2024-08-07 16:15:37',
            ),
            82 => 
            array (
                'id' => 86,
                'name' => 'Tropical Pure Corporation',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-08-07 16:17:35',
                'updated_at' => '2024-08-07 16:17:35',
            ),
            83 => 
            array (
                'id' => 87,
                'name' => 'Department of Trade and Industry',
                'has_branches' => 1,
                'is_active' => 1,
                'created_at' => '2024-08-07 16:19:12',
                'updated_at' => '2024-08-07 16:19:12',
            ),
            84 => 
            array (
                'id' => 88,
                'name' => 'Cecile\'s Pharmacy',
                'has_branches' => 1,
                'is_active' => 1,
                'created_at' => '2024-08-07 16:21:15',
                'updated_at' => '2024-08-07 16:21:15',
            ),
            85 => 
            array (
                'id' => 89,
                'name' => 'Infante Hospital Management Corporation',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-08-07 16:25:53',
                'updated_at' => '2024-08-07 16:25:53',
            ),
            86 => 
            array (
                'id' => 90,
                'name' => 'Minsu Oil Incorporated',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-08-07 16:30:38',
                'updated_at' => '2024-08-07 16:30:38',
            ),
            87 => 
            array (
                'id' => 91,
                'name' => 'Languyan Municipal Hospital',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-08-07 16:32:51',
                'updated_at' => '2024-08-07 16:32:51',
            ),
            88 => 
            array (
                'id' => 92,
                'name' => 'Pharmasa Drugstore',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-08-07 16:35:20',
                'updated_at' => '2024-08-07 16:35:20',
            ),
            89 => 
            array (
                'id' => 93,
                'name' => 'Jevelyn B. Rasay',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-08-07 16:37:53',
                'updated_at' => '2024-08-07 16:37:53',
            ),
            90 => 
            array (
                'id' => 94,
                'name' => 'Dipolog Livelihood Distribution Inc.',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-08-14 17:09:26',
                'updated_at' => '2024-08-14 17:09:26',
            ),
            91 => 
            array (
                'id' => 95,
                'name' => 'Zamboanga Nickel Corporation',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-08-14 17:11:26',
                'updated_at' => '2024-08-14 17:11:26',
            ),
            92 => 
            array (
                'id' => 96,
                'name' => 'Genmeds Pharmacy',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-08-14 17:18:10',
                'updated_at' => '2024-08-14 17:18:10',
            ),
            93 => 
            array (
                'id' => 97,
                'name' => 'Sunbiotech Medical and Laboratory Supplies Company',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-08-14 17:19:57',
                'updated_at' => '2024-08-14 17:19:57',
            ),
            94 => 
            array (
                'id' => 98,
                'name' => 'Southern Island Petroleum Company',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-08-14 17:21:14',
                'updated_at' => '2024-08-14 17:21:14',
            ),
            95 => 
            array (
                'id' => 99,
                'name' => 'Sis Pharmacy',
                'has_branches' => 1,
                'is_active' => 1,
                'created_at' => '2024-08-14 17:26:16',
                'updated_at' => '2024-08-14 17:26:16',
            ),
            96 => 
            array (
                'id' => 100,
                'name' => 'Department of Science and Technology',
                'has_branches' => 1,
                'is_active' => 1,
                'created_at' => '2024-08-14 17:30:14',
                'updated_at' => '2024-08-14 17:30:14',
            ),
            97 => 
            array (
                'id' => 101,
                'name' => 'B & S Hardware and Construction Supplies',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-08-14 17:32:56',
                'updated_at' => '2024-08-14 17:32:56',
            ),
            98 => 
            array (
                'id' => 102,
                'name' => 'Mattheo\'s Pharma and Convenience Store',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-08-14 17:38:12',
                'updated_at' => '2024-08-14 17:38:12',
            ),
            99 => 
            array (
                'id' => 103,
                'name' => 'Shell Station',
                'has_branches' => 1,
                'is_active' => 1,
                'created_at' => '2024-08-14 17:39:49',
                'updated_at' => '2024-08-14 17:39:49',
            ),
            100 => 
            array (
                'id' => 104,
                'name' => 'Philippine Ports Authority',
                'has_branches' => 1,
                'is_active' => 1,
                'created_at' => '2024-08-14 17:45:13',
                'updated_at' => '2024-08-14 17:45:13',
            ),
            101 => 
            array (
                'id' => 105,
                'name' => 'SureCare Pharmacy',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-08-14 17:50:29',
                'updated_at' => '2024-08-14 17:50:29',
            ),
            102 => 
            array (
                'id' => 106,
                'name' => 'Del Monte Coconut Farmers Credit Cooperative',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-08-16 16:26:57',
                'updated_at' => '2024-08-16 16:26:57',
            ),
            103 => 
            array (
                'id' => 107,
                'name' => '11th Avenue Gasoline Station',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-08-16 16:28:10',
                'updated_at' => '2024-08-16 16:28:10',
            ),
            104 => 
            array (
                'id' => 108,
                'name' => 'Sulu State College',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-08-17 00:54:21',
                'updated_at' => '2024-08-17 00:54:21',
            ),
            105 => 
            array (
                'id' => 109,
                'name' => 'Zamboanga City Water District',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-08-17 01:00:01',
                'updated_at' => '2024-08-17 01:00:01',
            ),
            106 => 
            array (
                'id' => 110,
                'name' => 'Western Mindanao State University',
                'has_branches' => 1,
                'is_active' => 1,
                'created_at' => '2024-08-17 01:02:46',
                'updated_at' => '2024-08-17 01:02:46',
            ),
            107 => 
            array (
                'id' => 111,
                'name' => 'TianYuan Construction Group Corporation/Grace Construction Corporation - J.V',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-08-19 22:36:39',
                'updated_at' => '2024-08-19 22:36:39',
            ),
            108 => 
            array (
                'id' => 112,
                'name' => 'Coca-Cola Beverages Philippines, Inc.',
                'has_branches' => 1,
                'is_active' => 1,
                'created_at' => '2024-08-19 22:40:12',
                'updated_at' => '2024-08-19 22:40:12',
            ),
            109 => 
            array (
                'id' => 113,
                'name' => 'Three J Builders and Developer',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-08-19 22:41:21',
                'updated_at' => '2024-08-19 22:41:21',
            ),
            110 => 
            array (
                'id' => 114,
                'name' => 'L\'Arcada Complex',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-08-19 23:11:30',
                'updated_at' => '2024-08-19 23:11:30',
            ),
            111 => 
            array (
                'id' => 115,
                'name' => 'Aqua Torejas Water Refilling Station',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-08-21 16:20:59',
                'updated_at' => '2024-08-21 16:20:59',
            ),
            112 => 
            array (
                'id' => 116,
                'name' => 'ETE Gas Station',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-08-21 16:22:49',
                'updated_at' => '2024-08-21 16:22:49',
            ),
            113 => 
            array (
                'id' => 117,
                'name' => 'Catherine Rose Y. Veñales',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-08-21 16:24:02',
                'updated_at' => '2024-08-21 16:24:02',
            ),
            114 => 
            array (
                'id' => 118,
                'name' => 'Manicahan Rural Water Works & Sanitation Association Inc.',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-08-21 16:26:22',
                'updated_at' => '2024-08-21 16:26:22',
            ),
            115 => 
            array (
                'id' => 119,
                'name' => 'Sophitle Food Corporation',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-08-21 18:26:28',
                'updated_at' => '2024-08-21 18:26:28',
            ),
            116 => 
            array (
                'id' => 120,
                'name' => 'DS Fuel Station',
                'has_branches' => 1,
                'is_active' => 1,
                'created_at' => '2024-08-29 00:43:51',
                'updated_at' => '2024-08-29 00:43:51',
            ),
            117 => 
            array (
                'id' => 121,
                'name' => 'Tandem Cedar Cypress Corporation',
                'has_branches' => 1,
                'is_active' => 1,
                'created_at' => '2024-08-29 01:00:50',
                'updated_at' => '2024-08-29 01:00:50',
            ),
            118 => 
            array (
                'id' => 122,
                'name' => 'LKB OPC',
                'has_branches' => 1,
                'is_active' => 1,
                'created_at' => '2024-08-29 01:06:00',
                'updated_at' => '2024-08-29 01:06:00',
            ),
            119 => 
            array (
                'id' => 123,
                'name' => 'DCMJR Corporation',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-08-30 02:54:42',
                'updated_at' => '2024-08-30 02:54:42',
            ),
            120 => 
            array (
                'id' => 124,
                'name' => 'Dominican Sisters',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-08-30 02:56:39',
                'updated_at' => '2024-08-30 02:56:39',
            ),
            121 => 
            array (
                'id' => 125,
                'name' => 'Tinker Mike\'s Herbal Food Supplement Retailing',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-08-30 02:58:11',
                'updated_at' => '2024-08-30 02:58:11',
            ),
            122 => 
            array (
                'id' => 126,
                'name' => 'Supreme Shell Gasoline Station',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-08-30 02:59:08',
                'updated_at' => '2024-08-30 02:59:08',
            ),
            123 => 
            array (
                'id' => 127,
                'name' => 'Saiddi Agri-Farm and Trading Incorporated',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-08-30 03:01:52',
                'updated_at' => '2024-08-30 03:01:52',
            ),
            124 => 
            array (
                'id' => 128,
                'name' => 'Chaoching Marine Corporation',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-08-30 03:05:43',
                'updated_at' => '2024-08-30 03:05:43',
            ),
            125 => 
            array (
                'id' => 129,
                'name' => 'Recodo National High School',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-08-30 03:06:54',
                'updated_at' => '2024-08-30 03:06:54',
            ),
            126 => 
            array (
                'id' => 130,
                'name' => 'Mega Fishing Corporation',
                'has_branches' => 1,
                'is_active' => 1,
                'created_at' => '2024-08-30 03:08:45',
                'updated_at' => '2024-08-30 03:08:45',
            ),
            127 => 
            array (
                'id' => 131,
                'name' => 'Century Pacific Food Incorporated',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-08-30 03:12:12',
                'updated_at' => '2024-08-30 03:12:12',
            ),
            128 => 
            array (
                'id' => 132,
                'name' => 'Azzura Gasoline Station',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-08-30 03:13:18',
                'updated_at' => '2024-08-30 03:13:18',
            ),
            129 => 
            array (
                'id' => 133,
                'name' => 'Bellfuel Gasoline Station',
                'has_branches' => 1,
                'is_active' => 1,
                'created_at' => '2024-08-30 03:15:36',
                'updated_at' => '2024-08-30 03:15:36',
            ),
            130 => 
            array (
                'id' => 134,
                'name' => 'Asahi Hi-Quality Food Manufacturing, Inc.',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-08-30 03:17:05',
                'updated_at' => '2024-08-30 03:17:05',
            ),
            131 => 
            array (
                'id' => 135,
                'name' => 'Quinex Gas Station',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-08-30 03:18:18',
                'updated_at' => '2024-08-30 03:18:18',
            ),
            132 => 
            array (
                'id' => 136,
                'name' => 'Southern Metrology Proficiency Testing Center',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-08-31 18:48:06',
                'updated_at' => '2024-08-31 18:48:06',
            ),
            133 => 
            array (
                'id' => 137,
                'name' => 'Suprem\'o Food Products Trading',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-08-31 19:47:27',
                'updated_at' => '2024-08-31 19:47:27',
            ),
            134 => 
            array (
                'id' => 138,
                'name' => 'Tetuan Central School SPED Center',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-09-02 23:10:28',
                'updated_at' => '2024-09-02 23:10:28',
            ),
            135 => 
            array (
                'id' => 139,
                'name' => 'Starrah Princess A. Tubig',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-09-02 23:12:13',
                'updated_at' => '2024-09-02 23:12:13',
            ),
            136 => 
            array (
                'id' => 140,
                'name' => 'Mercedez Shell Gasoline Station',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-09-02 23:22:53',
                'updated_at' => '2024-09-02 23:22:53',
            ),
            137 => 
            array (
                'id' => 141,
                'name' => 'RYT Shell Gasoline Station',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-09-02 23:29:15',
                'updated_at' => '2024-09-02 23:29:15',
            ),
            138 => 
            array (
                'id' => 142,
                'name' => 'Kingland Hopia Factory',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-09-04 03:05:51',
                'updated_at' => '2024-09-04 03:05:51',
            ),
            139 => 
            array (
                'id' => 143,
                'name' => 'Tenpoint Manufacturing Corporation',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-09-04 03:09:26',
                'updated_at' => '2024-09-04 03:09:26',
            ),
            140 => 
            array (
                'id' => 144,
                'name' => 'Shaan Petroleum Corporation',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-09-05 19:13:52',
                'updated_at' => '2024-09-05 19:13:52',
            ),
            141 => 
            array (
                'id' => 145,
                'name' => 'Fresh N\' Famous Foods Inc.',
                'has_branches' => 1,
                'is_active' => 1,
                'created_at' => '2024-09-05 19:17:15',
                'updated_at' => '2024-09-05 19:17:15',
            ),
            142 => 
            array (
                'id' => 146,
                'name' => 'JED12 Builders Inc.',
                'has_branches' => 1,
                'is_active' => 1,
                'created_at' => '2024-09-05 19:37:31',
                'updated_at' => '2024-09-05 19:37:31',
            ),
            143 => 
            array (
                'id' => 147,
                'name' => 'Cagoco Drugstore',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-09-05 23:42:02',
                'updated_at' => '2024-09-05 23:42:02',
            ),
            144 => 
            array (
                'id' => 148,
                'name' => 'Sweet and Savoury Delights',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-09-05 23:44:03',
                'updated_at' => '2024-09-05 23:44:03',
            ),
            145 => 
            array (
                'id' => 149,
                'name' => 'Ordeniza Gasoline Micro Filling Station',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-09-05 23:45:59',
                'updated_at' => '2024-09-05 23:45:59',
            ),
            146 => 
            array (
                'id' => 150,
                'name' => 'Mikay Gas Refilling Station',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-09-06 18:01:30',
                'updated_at' => '2024-09-06 18:01:30',
            ),
            147 => 
            array (
                'id' => 151,
                'name' => 'Ruru Mushrooms Mushroom Products Trading',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-09-07 00:00:56',
                'updated_at' => '2024-09-07 00:00:56',
            ),
            148 => 
            array (
                'id' => 152,
                'name' => 'Datu Alawaddin Bandon Sr. Memorial Hospital',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-09-09 17:41:16',
                'updated_at' => '2024-09-09 17:41:16',
            ),
            149 => 
            array (
                'id' => 153,
                'name' => 'Landsea Oil Corporation',
                'has_branches' => 1,
                'is_active' => 1,
                'created_at' => '2024-09-09 19:10:32',
                'updated_at' => '2024-09-09 19:10:32',
            ),
            150 => 
            array (
                'id' => 154,
                'name' => 'WMSU',
                'has_branches' => 1,
                'is_active' => 1,
                'created_at' => '2024-09-09 21:07:46',
                'updated_at' => '2024-09-09 21:07:46',
            ),
            151 => 
            array (
                'id' => 155,
                'name' => 'Bureau of Jail Management and Penology',
                'has_branches' => 1,
                'is_active' => 1,
                'created_at' => '2024-09-10 16:43:35',
                'updated_at' => '2024-09-10 16:43:35',
            ),
            152 => 
            array (
                'id' => 156,
                'name' => 'Menzi Spring',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-09-10 16:47:17',
                'updated_at' => '2024-09-10 16:47:17',
            ),
            153 => 
            array (
                'id' => 157,
                'name' => 'Jerusalem Herbal Products Manufacturing',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-09-10 18:12:12',
                'updated_at' => '2024-09-10 18:12:12',
            ),
            154 => 
            array (
                'id' => 158,
                'name' => 'Rubylyn A. Pasunting',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-09-10 19:02:10',
                'updated_at' => '2024-09-10 19:02:10',
            ),
            155 => 
            array (
                'id' => 159,
                'name' => 'Amley Food Corporation',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-09-10 22:35:44',
                'updated_at' => '2024-09-10 22:35:44',
            ),
            156 => 
            array (
                'id' => 160,
                'name' => 'Petroline Marketing Incorporated',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-09-11 18:16:22',
                'updated_at' => '2024-09-11 18:16:22',
            ),
            157 => 
            array (
                'id' => 162,
                'name' => 'Tulungatung Poultry Dressing',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-09-11 22:46:21',
                'updated_at' => '2024-09-11 22:46:21',
            ),
            158 => 
            array (
                'id' => 163,
                'name' => 'Maer Summit Supply and Logistics Inc.',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-09-14 02:34:14',
                'updated_at' => '2024-09-14 02:34:14',
            ),
            159 => 
            array (
                'id' => 164,
                'name' => 'EJT Food Products By Evelyn',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-09-17 19:37:12',
                'updated_at' => '2024-09-17 19:37:12',
            ),
            160 => 
            array (
                'id' => 165,
                'name' => 'Zaragoza Foods Corporation',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-09-18 03:29:21',
                'updated_at' => '2024-09-18 03:29:21',
            ),
            161 => 
            array (
                'id' => 166,
                'name' => 'Roxas Memorial Provincial Hospital',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-09-18 04:17:08',
                'updated_at' => '2024-09-18 04:17:08',
            ),
            162 => 
            array (
                'id' => 167,
                'name' => 'SR Gas Depot & Merchandising, Inc. / RTH Trucking Services',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-09-18 18:38:39',
                'updated_at' => '2024-09-18 18:38:39',
            ),
            163 => 
            array (
                'id' => 168,
                'name' => 'Fortune Group Corporation',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-09-18 19:23:32',
                'updated_at' => '2024-09-18 19:23:32',
            ),
            164 => 
            array (
                'id' => 169,
                'name' => 'Universal Canning Incorporated',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-09-18 19:51:10',
                'updated_at' => '2024-09-18 19:51:10',
            ),
            165 => 
            array (
                'id' => 170,
                'name' => 'Zambo Tropical Foods',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-09-18 20:11:35',
                'updated_at' => '2024-09-18 20:11:35',
            ),
            166 => 
            array (
                'id' => 171,
                'name' => 'Randy Eugenio',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-09-18 20:38:44',
                'updated_at' => '2024-09-18 20:38:44',
            ),
            167 => 
            array (
                'id' => 172,
                'name' => 'Sulu Food and Beverage Corporation',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-09-19 00:23:11',
                'updated_at' => '2024-09-19 00:23:11',
            ),
            168 => 
            array (
                'id' => 173,
                'name' => 'RJA Mini Fishing Port Complex',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-09-19 19:26:36',
                'updated_at' => '2024-09-19 19:26:36',
            ),
            169 => 
            array (
                'id' => 174,
                'name' => 'PowerV Gas Station',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-09-19 19:41:09',
                'updated_at' => '2024-09-19 19:41:09',
            ),
            170 => 
            array (
                'id' => 175,
                'name' => 'Julkiram Hauling Services',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-09-20 16:51:04',
                'updated_at' => '2024-09-20 16:51:04',
            ),
            171 => 
            array (
                'id' => 176,
                'name' => 'Jerrys Enterprises',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-09-20 18:25:09',
                'updated_at' => '2024-09-20 18:25:09',
            ),
            172 => 
            array (
                'id' => 177,
                'name' => 'Sirawai Palm and Rubber Corporation',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-09-20 21:31:55',
                'updated_at' => '2024-09-20 21:31:55',
            ),
            173 => 
            array (
                'id' => 178,
                'name' => 'Nelsa\'s Food Products',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-09-23 18:38:11',
                'updated_at' => '2024-09-23 18:38:11',
            ),
            174 => 
            array (
                'id' => 179,
                'name' => 'Shaima A. Sabtal',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-09-23 20:48:31',
                'updated_at' => '2024-09-23 20:48:31',
            ),
            175 => 
            array (
                'id' => 180,
                'name' => 'ZC Fastruck Group Corporation',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-09-24 19:21:34',
                'updated_at' => '2024-09-24 19:21:34',
            ),
            176 => 
            array (
                'id' => 181,
                'name' => 'G-Power Gas Station',
                'has_branches' => 1,
                'is_active' => 1,
                'created_at' => '2024-09-24 22:23:02',
                'updated_at' => '2024-09-24 22:23:02',
            ),
            177 => 
            array (
                'id' => 182,
                'name' => 'West Metro Medical Center',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-09-24 23:24:18',
                'updated_at' => '2024-09-24 23:24:18',
            ),
            178 => 
            array (
                'id' => 183,
                'name' => 'Pio\'s Gourmet Tuyo',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-09-25 00:41:35',
                'updated_at' => '2024-09-25 00:41:35',
            ),
            179 => 
            array (
                'id' => 184,
                'name' => 'MJ Southgas Trading Co. 2',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-09-25 17:34:49',
                'updated_at' => '2024-09-25 17:34:49',
            ),
            180 => 
            array (
                'id' => 185,
                'name' => 'Peter Kim S. Dirayunan',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-09-25 22:12:57',
                'updated_at' => '2024-09-25 22:12:57',
            ),
            181 => 
            array (
                'id' => 186,
                'name' => 'Pag-Asa Dialysis and Diagnostic Center',
                'has_branches' => 1,
                'is_active' => 1,
                'created_at' => '2024-09-25 23:19:22',
                'updated_at' => '2024-09-25 23:19:22',
            ),
            182 => 
            array (
                'id' => 187,
                'name' => 'Ilagan Pharmacy',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-09-26 17:15:12',
                'updated_at' => '2024-09-26 17:15:12',
            ),
            183 => 
            array (
                'id' => 188,
                'name' => 'I Oil Gasoline Station',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-09-26 17:28:09',
                'updated_at' => '2024-09-26 17:28:09',
            ),
            184 => 
            array (
                'id' => 189,
                'name' => '9 Forward Service Support Unit, Army Support Command, Philippine Army',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-09-26 21:27:11',
                'updated_at' => '2024-09-26 21:27:11',
            ),
            185 => 
            array (
                'id' => 190,
                'name' => 'Axcel Gas Station Inc.',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-09-26 21:37:56',
                'updated_at' => '2024-09-26 21:37:56',
            ),
            186 => 
            array (
                'id' => 191,
                'name' => 'Petron Corporation - Amlan Terminal',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-09-26 22:08:52',
                'updated_at' => '2024-09-26 22:08:52',
            ),
            187 => 
            array (
                'id' => 192,
                'name' => 'Lina T. Codilla',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-09-27 05:40:46',
                'updated_at' => '2024-09-27 05:40:46',
            ),
            188 => 
            array (
                'id' => 193,
                'name' => 'Jefferson Y. Cole',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-09-30 17:51:51',
                'updated_at' => '2024-09-30 17:51:51',
            ),
            189 => 
            array (
                'id' => 194,
                'name' => 'CTK Asia Rubber Corporation',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-10-01 17:23:47',
                'updated_at' => '2024-10-01 17:23:47',
            ),
            190 => 
            array (
                'id' => 195,
                'name' => 'Uniquetahu Food Products Manufacturing',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-10-01 18:02:52',
                'updated_at' => '2024-10-01 18:02:52',
            ),
            191 => 
            array (
                'id' => 196,
                'name' => 'Mingjie Fuel Trading',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-10-01 18:32:11',
                'updated_at' => '2024-10-01 18:32:11',
            ),
            192 => 
            array (
                'id' => 197,
                'name' => 'Ateneo de Zamboanga University',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-10-02 21:35:57',
                'updated_at' => '2024-10-02 21:35:57',
            ),
            193 => 
            array (
                'id' => 198,
                'name' => 'Granexport Manufacturing Corporation',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-10-02 23:33:30',
                'updated_at' => '2024-10-02 23:33:30',
            ),
            194 => 
            array (
                'id' => 199,
                'name' => 'Glenn Go / Zenith Shell Shop and Service Station',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-10-04 18:26:06',
                'updated_at' => '2024-10-04 18:26:06',
            ),
            195 => 
            array (
                'id' => 200,
                'name' => 'Ever O Business Hotel',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-10-04 21:47:25',
                'updated_at' => '2024-10-04 21:47:25',
            ),
            196 => 
            array (
                'id' => 201,
                'name' => 'Cassandra Abigail R. Asprer',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-10-07 16:34:44',
                'updated_at' => '2024-10-07 16:34:44',
            ),
            197 => 
            array (
                'id' => 202,
                'name' => 'Lumbay SLPA',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-10-07 17:14:48',
                'updated_at' => '2024-10-07 17:14:48',
            ),
            198 => 
            array (
                'id' => 203,
                'name' => 'Bigfish Foods Corporation',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-10-08 00:26:41',
                'updated_at' => '2024-10-08 00:26:41',
            ),
            199 => 
            array (
                'id' => 204,
                'name' => 'Ola Food Products',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-10-08 18:53:16',
                'updated_at' => '2024-10-08 18:53:16',
            ),
            200 => 
            array (
                'id' => 205,
                'name' => 'Jing Homemade Products',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-10-08 19:13:48',
                'updated_at' => '2024-10-08 19:13:48',
            ),
            201 => 
            array (
                'id' => 206,
                'name' => 'Chowtime Cuisine',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-10-08 21:11:46',
                'updated_at' => '2024-10-08 21:11:46',
            ),
            202 => 
            array (
                'id' => 207,
                'name' => 'Ger Echo Parking Lot and Services',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-10-08 21:46:21',
                'updated_at' => '2024-10-08 21:46:21',
            ),
            203 => 
            array (
                'id' => 208,
                'name' => 'MAPZACARA MPC',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-10-08 22:02:27',
                'updated_at' => '2024-10-08 22:02:27',
            ),
            204 => 
            array (
                'id' => 209,
                'name' => 'Nono Bread and Pastry House',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-10-08 22:37:58',
                'updated_at' => '2024-10-08 22:37:58',
            ),
            205 => 
            array (
                'id' => 210,
                'name' => 'KC International',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-10-08 23:01:10',
                'updated_at' => '2024-10-08 23:01:10',
            ),
            206 => 
            array (
                'id' => 211,
                'name' => 'Mhie Pharmacy',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-10-09 19:12:19',
                'updated_at' => '2024-10-09 19:12:19',
            ),
            207 => 
            array (
                'id' => 212,
                'name' => 'Menojardin Food Products',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-10-09 22:42:51',
                'updated_at' => '2024-10-09 22:42:51',
            ),
            208 => 
            array (
                'id' => 213,
                'name' => 'Davao City Water District',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-10-10 17:26:53',
                'updated_at' => '2024-10-10 17:26:53',
            ),
            209 => 
            array (
                'id' => 214,
                'name' => 'Alexander Gabriel A. Oporto',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-10-10 19:44:57',
                'updated_at' => '2024-10-10 19:44:57',
            ),
            210 => 
            array (
                'id' => 215,
                'name' => 'AQT Logistic and Distribution Inc.',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-10-10 22:23:08',
                'updated_at' => '2024-10-10 22:23:08',
            ),
            211 => 
            array (
                'id' => 216,
                'name' => 'Bendimil Construction',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-10-14 23:42:45',
                'updated_at' => '2024-10-14 23:42:45',
            ),
            212 => 
            array (
                'id' => 217,
                'name' => 'Bollozos Trucking Corporation',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-10-15 18:23:16',
                'updated_at' => '2024-10-15 18:23:16',
            ),
            213 => 
            array (
                'id' => 218,
                'name' => 'Dino A. Sabellina',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-10-15 21:05:54',
                'updated_at' => '2024-10-15 21:05:54',
            ),
            214 => 
            array (
                'id' => 219,
                'name' => 'Sitti Fairuz A. Muhajil',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-10-16 00:36:07',
                'updated_at' => '2024-10-16 00:36:07',
            ),
            215 => 
            array (
                'id' => 220,
                'name' => 'Nur-zhiana I. Muhiddini',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-10-16 00:55:27',
                'updated_at' => '2024-10-16 00:55:27',
            ),
            216 => 
            array (
                'id' => 221,
                'name' => 'Farha A. Jumdail',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-10-16 00:57:07',
                'updated_at' => '2024-10-16 00:57:07',
            ),
            217 => 
            array (
                'id' => 222,
                'name' => 'Stacey S. Noveno',
                'has_branches' => 0,
                'is_active' => 0,
                'created_at' => '2024-10-16 20:26:02',
                'updated_at' => '2024-10-16 20:26:02',
            ),
            218 => 
            array (
                'id' => 223,
                'name' => 'Stazy S. Noveno',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-10-16 20:29:04',
                'updated_at' => '2024-10-16 20:29:04',
            ),
            219 => 
            array (
                'id' => 224,
                'name' => 'Millennium Ocean Star Corporation',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-10-16 22:27:21',
                'updated_at' => '2024-10-16 22:27:21',
            ),
            220 => 
            array (
                'id' => 225,
                'name' => 'Maluso Water District',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-10-17 17:47:12',
                'updated_at' => '2024-10-17 17:47:12',
            ),
            221 => 
            array (
                'id' => 226,
                'name' => 'RSG Resources Corporation',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-10-17 18:09:35',
                'updated_at' => '2024-10-17 18:09:35',
            ),
            222 => 
            array (
                'id' => 227,
                'name' => 'Mindanao Central Sanitarium',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-10-17 22:38:27',
                'updated_at' => '2024-10-17 22:38:27',
            ),
            223 => 
            array (
                'id' => 228,
                'name' => 'Bestfriend Goodies',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-10-17 23:11:36',
                'updated_at' => '2024-10-17 23:11:36',
            ),
            224 => 
            array (
                'id' => 229,
                'name' => 'WMSU - College of Agriculture',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-10-18 16:40:34',
                'updated_at' => '2024-10-18 16:40:34',
            ),
            225 => 
            array (
                'id' => 230,
                'name' => 'Filcan Water Refilling Station',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-10-18 21:30:08',
                'updated_at' => '2024-10-18 21:30:08',
            ),
            226 => 
            array (
                'id' => 231,
                'name' => 'Seven-Trent Machineries Industrial Equipment Trading',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-10-18 22:13:33',
                'updated_at' => '2024-10-18 22:13:33',
            ),
            227 => 
            array (
                'id' => 232,
                'name' => 'Medispa Skin Clinic and Salon',
                'has_branches' => 1,
                'is_active' => 1,
                'created_at' => '2024-10-21 22:09:32',
                'updated_at' => '2024-10-21 22:09:32',
            ),
            228 => 
            array (
                'id' => 233,
                'name' => 'Hojas Trucking Service',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-10-22 22:20:04',
                'updated_at' => '2024-10-22 22:20:04',
            ),
            229 => 
            array (
                'id' => 234,
                'name' => 'Maura P. Caperig',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-10-22 23:38:58',
                'updated_at' => '2024-10-22 23:38:58',
            ),
            230 => 
            array (
                'id' => 235,
                'name' => 'Justine Mae N. Quiambao',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-10-23 16:38:28',
                'updated_at' => '2024-10-23 16:38:28',
            ),
            231 => 
            array (
                'id' => 236,
                'name' => 'Cargill Oil Mills Philippines Inc.',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-10-23 19:35:33',
                'updated_at' => '2024-10-23 19:35:33',
            ),
            232 => 
            array (
                'id' => 237,
                'name' => 'Novaile Rosal C. Ugbinar',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-10-23 20:20:04',
                'updated_at' => '2024-10-23 20:20:04',
            ),
            233 => 
            array (
                'id' => 238,
                'name' => 'ZC Regal Fishing Corp.',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-10-23 21:46:14',
                'updated_at' => '2024-10-23 21:46:14',
            ),
            234 => 
            array (
                'id' => 239,
                'name' => 'Le Aninao Snack Haus',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-10-23 23:44:23',
                'updated_at' => '2024-10-23 23:44:23',
            ),
            235 => 
            array (
                'id' => 243,
                'name' => 'Lorenz Food Supplement Manufacturing',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-10-25 17:45:31',
                'updated_at' => '2024-10-25 17:45:31',
            ),
            236 => 
            array (
                'id' => 246,
                'name' => 'CHO - Nutrition Office',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-10-25 17:51:22',
                'updated_at' => '2024-10-25 17:51:22',
            ),
            237 => 
            array (
                'id' => 248,
                'name' => 'Abdulla A. Hajan',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-10-25 23:46:43',
                'updated_at' => '2024-10-25 23:46:43',
            ),
            238 => 
            array (
                'id' => 249,
                'name' => 'Myler Agribusiness, Inc.',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-10-28 17:55:32',
                'updated_at' => '2024-10-28 17:55:32',
            ),
            239 => 
            array (
                'id' => 250,
                'name' => 'M. Abubakar Construction and Engineering Inc. / Sino Road and Group Bridge Co., LTD - Joint Venture',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-10-28 19:06:23',
                'updated_at' => '2024-10-28 19:06:23',
            ),
            240 => 
            array (
                'id' => 251,
                'name' => 'Olutanga Municipal Hospital',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-10-28 20:44:01',
                'updated_at' => '2024-10-28 20:44:01',
            ),
            241 => 
            array (
                'id' => 252,
                'name' => 'GEMTAGS NIÑO G. SALDARIEGA',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-10-28 21:03:21',
                'updated_at' => '2024-10-28 21:03:21',
            ),
            242 => 
            array (
                'id' => 253,
                'name' => 'Jo-An Pharmacy and Convenience Store',
                'has_branches' => 1,
                'is_active' => 1,
                'created_at' => '2024-10-29 17:49:39',
                'updated_at' => '2024-10-29 17:49:39',
            ),
            243 => 
            array (
                'id' => 254,
                'name' => 'Kevin G. Francisco',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-10-29 18:11:26',
                'updated_at' => '2024-10-29 18:11:26',
            ),
            244 => 
            array (
                'id' => 255,
                'name' => 'Lamitan District Hospital',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-10-29 18:49:17',
                'updated_at' => '2024-10-29 18:49:17',
            ),
            245 => 
            array (
                'id' => 256,
                'name' => 'Sumisip District Hospital',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-10-29 18:51:38',
                'updated_at' => '2024-10-29 18:51:38',
            ),
            246 => 
            array (
                'id' => 259,
                'name' => 'Sibuco Water District',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-10-29 20:29:12',
                'updated_at' => '2024-10-29 20:29:12',
            ),
            247 => 
            array (
                'id' => 260,
                'name' => 'Jasha T. Cafino',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-10-29 21:09:57',
                'updated_at' => '2024-10-29 21:09:57',
            ),
            248 => 
            array (
                'id' => 261,
                'name' => 'MJJA Fuel Corporation',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-10-29 21:37:22',
                'updated_at' => '2024-10-29 21:37:22',
            ),
            249 => 
            array (
                'id' => 262,
                'name' => 'Woodfields Consultants, Inc.',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-10-31 18:06:01',
                'updated_at' => '2024-10-31 18:06:01',
            ),
            250 => 
            array (
                'id' => 263,
                'name' => 'Isabela City Water District',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-11-04 17:50:02',
                'updated_at' => '2024-11-04 17:50:02',
            ),
            251 => 
            array (
                'id' => 264,
                'name' => 'T-Gas Station',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-11-04 18:57:54',
                'updated_at' => '2024-11-04 18:57:54',
            ),
            252 => 
            array (
                'id' => 265,
                'name' => 'Amariah Faith O. Besa',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-11-04 21:24:00',
                'updated_at' => '2024-11-04 21:24:00',
            ),
            253 => 
            array (
                'id' => 266,
                'name' => 'Clowielene C. Merecido',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-11-04 23:31:05',
                'updated_at' => '2024-11-04 23:31:05',
            ),
            254 => 
            array (
                'id' => 267,
                'name' => 'Mega Polygums Corporation',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-11-04 23:55:31',
                'updated_at' => '2024-11-04 23:55:31',
            ),
            255 => 
            array (
                'id' => 268,
                'name' => 'Mary Jean S. Maningo',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-11-05 17:21:49',
                'updated_at' => '2024-11-05 17:21:49',
            ),
            256 => 
            array (
                'id' => 269,
                'name' => 'ABL GAS STATION AND SUPPLIER',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-11-06 18:12:52',
                'updated_at' => '2024-11-06 18:12:52',
            ),
            257 => 
            array (
                'id' => 270,
                'name' => 'Parang District Hospital',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-11-06 18:46:40',
                'updated_at' => '2024-11-06 18:46:40',
            ),
            258 => 
            array (
                'id' => 271,
                'name' => 'Manila Water Foundation, Inc.',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-11-06 19:48:21',
                'updated_at' => '2024-11-06 19:48:21',
            ),
            259 => 
            array (
                'id' => 272,
                'name' => 'Akhmad Jaafar A. Albeso',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-11-06 21:44:24',
                'updated_at' => '2024-11-06 21:44:24',
            ),
            260 => 
            array (
                'id' => 273,
                'name' => 'Metrodzel Marketing Corporation',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-11-06 22:10:14',
                'updated_at' => '2024-11-06 22:10:14',
            ),
            261 => 
            array (
                'id' => 274,
                'name' => 'Metro Pacific Water',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-11-07 19:43:30',
                'updated_at' => '2024-11-07 19:43:30',
            ),
            262 => 
            array (
                'id' => 275,
                'name' => 'Shakira N. Timbasal',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-11-08 21:56:00',
                'updated_at' => '2024-11-08 21:56:00',
            ),
            263 => 
            array (
                'id' => 276,
                'name' => 'Primus Ventures',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-11-11 22:52:09',
                'updated_at' => '2024-11-11 22:52:09',
            ),
            264 => 
            array (
                'id' => 277,
                'name' => 'JD-5 Gas Station',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-11-12 19:26:51',
                'updated_at' => '2024-11-12 19:26:51',
            ),
            265 => 
            array (
                'id' => 278,
                'name' => 'Latin Z Fuel',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-11-12 22:30:00',
                'updated_at' => '2024-11-12 22:30:00',
            ),
            266 => 
            array (
                'id' => 279,
                'name' => 'SSG Trucking',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-11-14 18:32:17',
                'updated_at' => '2024-11-14 18:32:17',
            ),
            267 => 
            array (
                'id' => 280,
                'name' => 'Veterans Seaoil Station',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-11-18 22:08:30',
                'updated_at' => '2024-11-18 22:08:30',
            ),
            268 => 
            array (
                'id' => 281,
                'name' => 'LJV Farms Food Products',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-11-18 22:36:12',
                'updated_at' => '2024-11-18 22:36:12',
            ),
            269 => 
            array (
                'id' => 282,
                'name' => 'Arabella Christel P. Ignacio',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-11-18 23:32:46',
                'updated_at' => '2024-11-18 23:32:46',
            ),
            270 => 
            array (
                'id' => 283,
                'name' => 'Garapon Food Products',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-11-19 20:01:03',
                'updated_at' => '2024-11-19 20:01:03',
            ),
            271 => 
            array (
                'id' => 284,
                'name' => 'CHEMPRO Analytical Services Laboratories, Inc. - Zamboanga City',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-11-19 22:16:38',
                'updated_at' => '2024-11-19 22:16:38',
            ),
            272 => 
            array (
                'id' => 285,
                'name' => 'CHEMPRO Analytical Services Laboratories, Inc.',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-11-19 22:23:30',
                'updated_at' => '2024-11-19 22:23:30',
            ),
            273 => 
            array (
                'id' => 286,
                'name' => 'Mega Lifters Cargo Handling Corp.',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-11-21 17:48:13',
                'updated_at' => '2024-11-21 17:48:13',
            ),
            274 => 
            array (
                'id' => 287,
                'name' => 'Ian Zcar M. Solinap',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-11-21 19:21:18',
                'updated_at' => '2024-11-21 19:21:18',
            ),
            275 => 
            array (
                'id' => 288,
                'name' => 'Head Sport Philippines Inc.',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-11-21 21:43:54',
                'updated_at' => '2024-11-21 21:43:54',
            ),
            276 => 
            array (
                'id' => 289,
                'name' => 'Tuan Ligaddung Lipae Memorial Hospital',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-11-25 18:53:27',
                'updated_at' => '2024-11-25 18:53:27',
            ),
            277 => 
            array (
                'id' => 290,
                'name' => 'Citi Oil Incorporated',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-11-25 19:48:14',
                'updated_at' => '2024-11-25 19:48:14',
            ),
            278 => 
            array (
                'id' => 291,
                'name' => 'John Robert M. Villa',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-11-25 20:40:31',
                'updated_at' => '2024-11-25 20:40:31',
            ),
            279 => 
            array (
                'id' => 292,
                'name' => 'Saiya G. Baguio',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-11-26 17:36:19',
                'updated_at' => '2024-11-26 17:36:19',
            ),
            280 => 
            array (
                'id' => 293,
                'name' => 'Recodo Elementary School',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-11-26 20:30:16',
                'updated_at' => '2024-11-26 20:30:16',
            ),
            281 => 
            array (
                'id' => 294,
                'name' => 'Lofer Petron Service Station',
                'has_branches' => 1,
                'is_active' => 1,
                'created_at' => '2024-11-26 22:27:09',
                'updated_at' => '2024-11-26 22:27:09',
            ),
            282 => 
            array (
                'id' => 295,
                'name' => 'Powerking Gasoline Station',
                'has_branches' => 1,
                'is_active' => 1,
                'created_at' => '2024-11-26 22:29:51',
                'updated_at' => '2024-11-26 22:29:51',
            ),
            283 => 
            array (
                'id' => 296,
                'name' => 'Diane M. Ortiz',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-11-28 19:40:09',
                'updated_at' => '2024-11-28 19:40:09',
            ),
            284 => 
            array (
                'id' => 297,
                'name' => 'Inah Mom\'s Pharmacy',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-11-28 22:09:06',
                'updated_at' => '2024-11-28 22:09:06',
            ),
            285 => 
            array (
                'id' => 298,
                'name' => 'Alyssa Gwyneth A. Wong',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-11-29 18:28:47',
                'updated_at' => '2024-11-29 18:28:47',
            ),
            286 => 
            array (
                'id' => 299,
            'name' => 'Upper Sumilong Community MPC (USCOMPC) / DAR',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-11-29 22:07:23',
                'updated_at' => '2024-11-29 22:07:23',
            ),
            287 => 
            array (
                'id' => 300,
            'name' => 'Batu Farmers MPC (BAFAMCO) / DAR',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-11-29 22:09:20',
                'updated_at' => '2024-11-29 22:09:20',
            ),
            288 => 
            array (
                'id' => 301,
                'name' => 'SA Geolab International Pte Ltd',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-12-03 16:11:45',
                'updated_at' => '2024-12-03 16:11:45',
            ),
            289 => 
            array (
                'id' => 302,
                'name' => 'Calexterio Arnel Dela Cerna',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-12-03 18:56:37',
                'updated_at' => '2024-12-03 18:56:37',
            ),
            290 => 
            array (
                'id' => 303,
                'name' => 'Pangasian SEM UDTOHAN',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-12-03 18:58:35',
                'updated_at' => '2024-12-03 18:58:35',
            ),
            291 => 
            array (
                'id' => 304,
                'name' => 'Panos Heronae Joy Digamon',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-12-03 19:00:11',
                'updated_at' => '2024-12-03 19:00:11',
            ),
            292 => 
            array (
                'id' => 306,
                'name' => 'Al-Rafe M. Bravo',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-12-03 20:36:49',
                'updated_at' => '2024-12-03 20:36:49',
            ),
            293 => 
            array (
                'id' => 307,
                'name' => 'Zhia Pharmacy',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-12-03 22:05:29',
                'updated_at' => '2024-12-03 22:05:29',
            ),
            294 => 
            array (
                'id' => 308,
                'name' => 'Khalid A. Omar',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-12-03 23:29:29',
                'updated_at' => '2024-12-03 23:29:29',
            ),
            295 => 
            array (
                'id' => 310,
                'name' => 'JERRY PAUL LABRADOR CAITUM',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-12-03 23:41:28',
                'updated_at' => '2024-12-03 23:41:28',
            ),
            296 => 
            array (
                'id' => 311,
                'name' => 'LABODA HILL MARKETING, INCORPORATED',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-12-04 18:06:51',
                'updated_at' => '2024-12-04 18:06:51',
            ),
            297 => 
            array (
                'id' => 312,
                'name' => 'TERRACOTA HOTEL',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-12-04 21:51:55',
                'updated_at' => '2024-12-04 21:51:55',
            ),
            298 => 
            array (
                'id' => 313,
                'name' => 'Varoz Marketing',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-12-05 00:08:31',
                'updated_at' => '2024-12-05 00:08:31',
            ),
            299 => 
            array (
                'id' => 314,
                'name' => 'Dyna Karylle S. Ramos',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-12-07 01:52:43',
                'updated_at' => '2024-12-07 01:52:43',
            ),
            300 => 
            array (
                'id' => 315,
                'name' => 'Sheraton Petron Servicenter',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-12-09 17:18:20',
                'updated_at' => '2024-12-09 17:18:20',
            ),
            301 => 
            array (
                'id' => 316,
                'name' => 'Farmers Alternative for Self-Reliance MPC',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-12-10 17:46:54',
                'updated_at' => '2024-12-10 17:46:54',
            ),
            302 => 
            array (
                'id' => 317,
                'name' => 'RE-AL Gas Station',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-12-10 18:42:35',
                'updated_at' => '2024-12-10 18:42:35',
            ),
            303 => 
            array (
                'id' => 318,
                'name' => 'Philippine Accreditation Bureau',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-12-12 16:27:32',
                'updated_at' => '2024-12-12 16:27:32',
            ),
            304 => 
            array (
                'id' => 319,
                'name' => 'Instrutech Calibration Lab., Inc.',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-12-13 18:30:30',
                'updated_at' => '2024-12-13 18:30:30',
            ),
            305 => 
            array (
                'id' => 320,
                'name' => 'Carthage Crab Meat Processing',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-12-13 19:22:23',
                'updated_at' => '2024-12-13 19:22:23',
            ),
            306 => 
            array (
                'id' => 321,
                'name' => 'FML SafeEats Corporation',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2024-12-14 00:44:55',
                'updated_at' => '2024-12-14 00:44:55',
            ),
            307 => 
            array (
                'id' => 601,
                'name' => 'BLJ Gas Station',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-01-03 19:44:40',
                'updated_at' => '2025-01-03 19:44:40',
            ),
            308 => 
            array (
                'id' => 602,
                'name' => 'Zahra\'s Gas Refilling Station',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-01-03 20:06:53',
                'updated_at' => '2025-01-03 20:06:53',
            ),
            309 => 
            array (
                'id' => 603,
                'name' => 'Christine G. Lubaton',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-01-06 17:55:51',
                'updated_at' => '2025-01-06 17:55:51',
            ),
            310 => 
            array (
                'id' => 604,
                'name' => 'Shahana A. Mangkabong',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-01-06 18:30:55',
                'updated_at' => '2025-01-06 18:30:55',
            ),
            311 => 
            array (
                'id' => 605,
                'name' => 'Daily Dose Pharmacy - Main Branch',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-01-06 19:25:20',
                'updated_at' => '2025-01-06 19:25:20',
            ),
            312 => 
            array (
                'id' => 606,
                'name' => 'Alwayne B. Lim',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-01-07 16:51:01',
                'updated_at' => '2025-01-07 16:51:01',
            ),
            313 => 
            array (
                'id' => 607,
                'name' => 'Department of Public Works and Highways - Zamboanga City 2nd District Engineering Office',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-01-07 18:02:38',
                'updated_at' => '2025-01-07 18:02:38',
            ),
            314 => 
            array (
                'id' => 608,
                'name' => 'Ruben R. Galiza',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-01-08 17:40:57',
                'updated_at' => '2025-01-08 17:40:57',
            ),
            315 => 
            array (
                'id' => 609,
                'name' => 'Crisha Anna Marie S. Lucero',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-01-08 18:18:11',
                'updated_at' => '2025-01-08 18:18:11',
            ),
            316 => 
            array (
                'id' => 610,
                'name' => 'Altricia Nicolle A. Ladores',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-01-08 18:19:54',
                'updated_at' => '2025-01-08 18:19:54',
            ),
            317 => 
            array (
                'id' => 611,
                'name' => 'John Patrick B. Fernandez',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-01-08 18:21:45',
                'updated_at' => '2025-01-08 18:21:45',
            ),
            318 => 
            array (
                'id' => 612,
            'name' => 'Autonomous Region Farmers Marketing Cooperative (ARFARMACO)',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-01-08 19:13:35',
                'updated_at' => '2025-01-08 19:13:35',
            ),
            319 => 
            array (
                'id' => 613,
                'name' => 'Bureau of Fisheries and Aquatic Resources - IX',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-01-08 22:37:48',
                'updated_at' => '2025-01-08 22:37:48',
            ),
            320 => 
            array (
                'id' => 614,
                'name' => 'Phoenix Petroleum Philippines Inc.',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-01-08 22:57:27',
                'updated_at' => '2025-01-08 22:57:27',
            ),
            321 => 
            array (
                'id' => 615,
                'name' => 'Lili\'s Pharmacy',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-01-08 23:40:15',
                'updated_at' => '2025-01-08 23:40:15',
            ),
            322 => 
            array (
                'id' => 616,
                'name' => 'Petro Oil Gas Station',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-01-09 00:17:53',
                'updated_at' => '2025-01-09 00:17:53',
            ),
            323 => 
            array (
                'id' => 617,
                'name' => 'Petrostar Gas Station',
                'has_branches' => 1,
                'is_active' => 1,
                'created_at' => '2025-01-09 00:19:23',
                'updated_at' => '2025-01-09 00:19:23',
            ),
            324 => 
            array (
                'id' => 618,
                'name' => 'Helen\'s Pharmacy and Convenience Store',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-01-09 20:55:26',
                'updated_at' => '2025-01-09 20:55:26',
            ),
            325 => 
            array (
                'id' => 619,
                'name' => 'Jed Vicsen Gas Station',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-01-09 21:45:23',
                'updated_at' => '2025-01-09 21:45:23',
            ),
            326 => 
            array (
                'id' => 620,
                'name' => 'Daily Dose Pharmacy',
                'has_branches' => 1,
                'is_active' => 1,
                'created_at' => '2025-01-09 23:18:42',
                'updated_at' => '2025-01-09 23:18:42',
            ),
            327 => 
            array (
                'id' => 621,
                'name' => 'Yel & Joy Micro Gas Station',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-01-10 00:12:32',
                'updated_at' => '2025-01-10 00:12:32',
            ),
            328 => 
            array (
                'id' => 622,
                'name' => 'Ernst Paul Leonhard C. Hübner',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-01-10 16:30:08',
                'updated_at' => '2025-01-10 16:30:08',
            ),
            329 => 
            array (
                'id' => 623,
                'name' => 'Nazia R. Jaafar',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-01-10 22:27:15',
                'updated_at' => '2025-01-10 22:27:15',
            ),
            330 => 
            array (
                'id' => 624,
                'name' => 'Standeco Rubber Development Corporation',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-01-11 00:31:04',
                'updated_at' => '2025-01-11 00:31:04',
            ),
            331 => 
            array (
                'id' => 625,
                'name' => 'Mi\'Oil Gas Station',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-01-13 16:55:57',
                'updated_at' => '2025-01-13 16:55:57',
            ),
            332 => 
            array (
                'id' => 626,
                'name' => 'Shiella Mae B. Alberto',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-01-13 18:33:25',
                'updated_at' => '2025-01-13 18:33:25',
            ),
            333 => 
            array (
                'id' => 627,
                'name' => 'CJRD Micro Gas Station',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-01-13 22:51:29',
                'updated_at' => '2025-01-13 22:51:29',
            ),
            334 => 
            array (
                'id' => 628,
                'name' => 'Alaine D. Santos',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-01-13 23:08:21',
                'updated_at' => '2025-01-13 23:08:21',
            ),
            335 => 
            array (
                'id' => 629,
                'name' => 'Bueno Ciudad Resources, Inc.',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-01-13 23:37:54',
                'updated_at' => '2025-01-13 23:37:54',
            ),
            336 => 
            array (
                'id' => 630,
                'name' => 'Justine S. Roldan',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-01-15 19:00:11',
                'updated_at' => '2025-01-15 19:00:11',
            ),
            337 => 
            array (
                'id' => 631,
                'name' => 'Frillgie Heart B. Mutia',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-01-15 19:01:57',
                'updated_at' => '2025-01-15 19:01:57',
            ),
            338 => 
            array (
                'id' => 632,
                'name' => 'Jevy C. Juntilla',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-01-15 19:03:05',
                'updated_at' => '2025-01-15 19:03:05',
            ),
            339 => 
            array (
                'id' => 633,
                'name' => 'IRUM A. MUALLIL',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-01-15 20:28:39',
                'updated_at' => '2025-01-15 20:28:39',
            ),
            340 => 
            array (
                'id' => 634,
                'name' => 'Z-Oil Gasoline Station',
                'has_branches' => 1,
                'is_active' => 1,
                'created_at' => '2025-01-15 21:07:27',
                'updated_at' => '2025-01-15 21:07:27',
            ),
            341 => 
            array (
                'id' => 635,
                'name' => 'Marjorie A. Francisco',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-01-15 21:35:28',
                'updated_at' => '2025-01-15 21:35:28',
            ),
            342 => 
            array (
                'id' => 636,
                'name' => 'Teddie Construction Development Inc.',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-01-16 01:29:30',
                'updated_at' => '2025-01-16 01:29:30',
            ),
            343 => 
            array (
                'id' => 637,
                'name' => 'Department of Public Works and Highways',
                'has_branches' => 1,
                'is_active' => 1,
                'created_at' => '2025-01-16 17:41:28',
                'updated_at' => '2025-01-16 17:41:28',
            ),
            344 => 
            array (
                'id' => 638,
                'name' => 'Petron Centenarian Gas Station / Suzette C. Daniel',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-01-16 19:23:41',
                'updated_at' => '2025-01-16 19:23:41',
            ),
            345 => 
            array (
                'id' => 639,
                'name' => 'Reina April J. Ablao',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-01-16 19:58:53',
                'updated_at' => '2025-01-16 19:58:53',
            ),
            346 => 
            array (
                'id' => 640,
                'name' => 'Crishia Clare V. Gallarde',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-01-17 01:19:35',
                'updated_at' => '2025-01-17 01:19:35',
            ),
            347 => 
            array (
                'id' => 641,
                'name' => 'Labuan Health Center',
                'has_branches' => 1,
                'is_active' => 1,
                'created_at' => '2025-01-17 23:38:59',
                'updated_at' => '2025-01-17 23:38:59',
            ),
            348 => 
            array (
                'id' => 642,
                'name' => 'Mary Rizel D. Infante',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-01-18 00:40:50',
                'updated_at' => '2025-01-18 00:40:50',
            ),
            349 => 
            array (
                'id' => 643,
                'name' => 'Mighty L & K Foods, Inc. - Arbees Bakeshop',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-01-20 07:51:54',
                'updated_at' => '2025-01-20 07:51:54',
            ),
            350 => 
            array (
                'id' => 644,
                'name' => 'John Daven T. Nojor',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-01-20 08:42:56',
                'updated_at' => '2025-01-20 08:42:56',
            ),
            351 => 
            array (
                'id' => 645,
                'name' => 'Jobelle S. Salvador',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-01-20 17:20:00',
                'updated_at' => '2025-01-20 17:20:00',
            ),
            352 => 
            array (
                'id' => 646,
                'name' => 'Gwalior Lending Corp.',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-01-20 19:02:02',
                'updated_at' => '2025-01-20 19:02:02',
            ),
            353 => 
            array (
                'id' => 647,
                'name' => 'Renalyn A. Dorde',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-01-20 20:01:04',
                'updated_at' => '2025-01-20 20:01:04',
            ),
            354 => 
            array (
                'id' => 648,
                'name' => 'Raignzyle T. Cundangan',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-01-20 20:02:54',
                'updated_at' => '2025-01-20 20:02:54',
            ),
            355 => 
            array (
                'id' => 649,
                'name' => 'Seachamp International Export Corp.',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-01-20 20:31:28',
                'updated_at' => '2025-01-20 20:31:28',
            ),
            356 => 
            array (
                'id' => 650,
                'name' => 'Sitti Zoe B. Tañedo',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-01-20 21:31:40',
                'updated_at' => '2025-01-20 21:31:40',
            ),
            357 => 
            array (
                'id' => 656,
                'name' => 'Cassava Farmer\'s Association Lubigan Zamboanga City Inc.',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-01-21 21:34:07',
                'updated_at' => '2025-01-21 21:34:07',
            ),
            358 => 
            array (
                'id' => 657,
                'name' => 'Surigao del Norte State University',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-01-22 00:31:46',
                'updated_at' => '2025-01-22 00:31:46',
            ),
            359 => 
            array (
                'id' => 658,
                'name' => 'Petron Corporation',
                'has_branches' => 1,
                'is_active' => 1,
                'created_at' => '2025-01-22 01:46:56',
                'updated_at' => '2025-01-22 01:46:56',
            ),
            360 => 
            array (
                'id' => 659,
                'name' => 'Cynelle Ann D. Senturias',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-01-22 19:04:11',
                'updated_at' => '2025-01-22 19:04:11',
            ),
            361 => 
            array (
                'id' => 660,
                'name' => 'El Torre Gasoline Station',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-01-22 19:12:57',
                'updated_at' => '2025-01-22 19:12:57',
            ),
            362 => 
            array (
                'id' => 661,
                'name' => 'Royal Marketing and Trading',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-01-22 20:30:58',
                'updated_at' => '2025-01-22 20:30:58',
            ),
            363 => 
            array (
                'id' => 662,
                'name' => 'Precious Angel B. Tan-awon',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-01-22 21:12:52',
                'updated_at' => '2025-01-22 21:12:52',
            ),
            364 => 
            array (
                'id' => 663,
                'name' => 'Ricky O. Fargas',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-01-22 22:48:20',
                'updated_at' => '2025-01-22 22:48:20',
            ),
            365 => 
            array (
                'id' => 664,
                'name' => 'Maquiling Petron Gasoline Station',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-01-23 17:38:23',
                'updated_at' => '2025-01-23 17:38:23',
            ),
            366 => 
            array (
                'id' => 665,
                'name' => 'LMR Commercial Enterprises',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-01-23 22:25:48',
                'updated_at' => '2025-01-23 22:25:48',
            ),
            367 => 
            array (
                'id' => 666,
                'name' => 'Charlyn B. Luwason',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-01-24 15:43:03',
                'updated_at' => '2025-01-24 15:43:03',
            ),
            368 => 
            array (
                'id' => 667,
                'name' => 'Mechatrends Contractors Corportation',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-01-28 17:08:00',
                'updated_at' => '2025-01-28 17:08:00',
            ),
            369 => 
            array (
                'id' => 668,
                'name' => 'QUEENY ANN B. MORITCHO',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-01-28 21:07:24',
                'updated_at' => '2025-01-28 21:07:24',
            ),
            370 => 
            array (
                'id' => 669,
                'name' => 'DOST - TECHNICAL OPERATIONS SERVICES UNIT',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-01-29 01:02:57',
                'updated_at' => '2025-01-29 01:02:57',
            ),
            371 => 
            array (
                'id' => 670,
                'name' => 'SMICS',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-01-31 00:17:30',
                'updated_at' => '2025-01-31 00:17:30',
            ),
            372 => 
            array (
                'id' => 671,
                'name' => 'RSJ Pharmacy',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-01-31 01:35:51',
                'updated_at' => '2025-01-31 01:35:51',
            ),
            373 => 
            array (
                'id' => 672,
                'name' => 'Era Mae Silungan',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-01-31 18:55:28',
                'updated_at' => '2025-01-31 18:55:28',
            ),
            374 => 
            array (
                'id' => 673,
                'name' => 'Kc Chantra M. Bayan',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-02-01 00:09:28',
                'updated_at' => '2025-02-01 00:09:28',
            ),
            375 => 
            array (
                'id' => 674,
                'name' => 'Department of Health',
                'has_branches' => 1,
                'is_active' => 1,
                'created_at' => '2025-02-03 16:59:07',
                'updated_at' => '2025-02-03 16:59:07',
            ),
            376 => 
            array (
                'id' => 675,
                'name' => 'Shainah Bless Maga',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-02-03 18:25:45',
                'updated_at' => '2025-02-03 18:25:45',
            ),
            377 => 
            array (
                'id' => 676,
                'name' => 'Cherry Ann R. Lape',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-02-03 18:27:39',
                'updated_at' => '2025-02-03 18:27:39',
            ),
            378 => 
            array (
                'id' => 677,
                'name' => 'NADZWINA J. AKKIH',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-02-03 19:44:25',
                'updated_at' => '2025-02-03 19:44:25',
            ),
            379 => 
            array (
                'id' => 678,
                'name' => 'Criszia Mae G. Flores',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-02-03 20:09:20',
                'updated_at' => '2025-02-03 20:09:20',
            ),
            380 => 
            array (
                'id' => 679,
                'name' => 'Remuel Zamoras',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-02-03 20:10:25',
                'updated_at' => '2025-02-03 20:10:25',
            ),
            381 => 
            array (
                'id' => 680,
                'name' => 'Jezell V. Bella',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-02-04 19:37:36',
                'updated_at' => '2025-02-04 19:37:36',
            ),
            382 => 
            array (
                'id' => 681,
                'name' => 'Joshua Mikel T. Baybayan',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-02-05 17:02:08',
                'updated_at' => '2025-02-05 17:02:08',
            ),
            383 => 
            array (
                'id' => 682,
                'name' => 'JUDY ANN ANDRES MUNIB',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-02-05 17:16:45',
                'updated_at' => '2025-02-05 17:16:45',
            ),
            384 => 
            array (
                'id' => 683,
                'name' => 'La\'guerta Adventure Park',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-02-05 18:55:53',
                'updated_at' => '2025-02-05 18:55:53',
            ),
            385 => 
            array (
                'id' => 684,
                'name' => 'Mia Kreziah T. Rivero',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-02-05 20:03:23',
                'updated_at' => '2025-02-05 20:03:23',
            ),
            386 => 
            array (
                'id' => 685,
                'name' => 'Zamboanga United Food Processing Inc.',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-02-05 22:03:11',
                'updated_at' => '2025-02-05 22:03:11',
            ),
            387 => 
            array (
                'id' => 686,
                'name' => 'China Wuyi Co., Ltd / Vicente T. Lao Construction - Joint Venture',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-02-05 23:05:57',
                'updated_at' => '2025-02-05 23:05:57',
            ),
            388 => 
            array (
                'id' => 687,
                'name' => 'Medzar Shipping Lines',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-02-06 18:58:00',
                'updated_at' => '2025-02-06 18:58:00',
            ),
            389 => 
            array (
                'id' => 688,
                'name' => 'Bonifacio Seaoil Station',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-02-06 19:58:10',
                'updated_at' => '2025-02-06 19:58:10',
            ),
            390 => 
            array (
                'id' => 689,
                'name' => 'Serv. Central, Inc.',
                'has_branches' => 1,
                'is_active' => 1,
                'created_at' => '2025-02-06 20:02:31',
                'updated_at' => '2025-02-06 20:02:31',
            ),
            391 => 
            array (
                'id' => 690,
                'name' => 'Gazz Up, Inc.',
                'has_branches' => 1,
                'is_active' => 1,
                'created_at' => '2025-02-06 21:01:37',
                'updated_at' => '2025-02-06 21:01:37',
            ),
            392 => 
            array (
                'id' => 691,
                'name' => 'Emeralds Field Trading, Inc.',
                'has_branches' => 1,
                'is_active' => 1,
                'created_at' => '2025-02-06 21:31:29',
                'updated_at' => '2025-02-06 21:31:29',
            ),
            393 => 
            array (
                'id' => 692,
                'name' => 'Lotus Dragon, OPC.',
                'has_branches' => 1,
                'is_active' => 1,
                'created_at' => '2025-02-06 21:34:15',
                'updated_at' => '2025-02-06 21:34:15',
            ),
            394 => 
            array (
                'id' => 693,
                'name' => 'Saguin Fuel Station',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-02-06 22:06:32',
                'updated_at' => '2025-02-06 22:06:32',
            ),
            395 => 
            array (
                'id' => 694,
                'name' => 'Ayala Seaoil Gas Station',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-02-07 22:46:04',
                'updated_at' => '2025-02-07 22:46:04',
            ),
            396 => 
            array (
                'id' => 695,
                'name' => 'Leanne Marie A. Bacong',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-02-07 23:34:22',
                'updated_at' => '2025-02-07 23:34:22',
            ),
            397 => 
            array (
                'id' => 696,
                'name' => 'Universidad de Zamboanga',
                'has_branches' => 1,
                'is_active' => 1,
                'created_at' => '2025-02-10 07:00:28',
                'updated_at' => '2025-02-10 07:00:28',
            ),
            398 => 
            array (
                'id' => 697,
                'name' => 'R.T. Lim Family Hospital Co.',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-02-10 16:39:58',
                'updated_at' => '2025-02-10 16:39:58',
            ),
            399 => 
            array (
                'id' => 698,
                'name' => 'Jimboy E. Maglon',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-02-10 17:37:46',
                'updated_at' => '2025-02-10 17:37:46',
            ),
            400 => 
            array (
                'id' => 699,
                'name' => 'Nadzma S. Gappar',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-02-10 18:03:05',
                'updated_at' => '2025-02-10 18:03:05',
            ),
            401 => 
            array (
                'id' => 700,
                'name' => 'Daniel Josh H. Albarico',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-02-10 18:23:11',
                'updated_at' => '2025-02-10 18:23:11',
            ),
            402 => 
            array (
                'id' => 701,
                'name' => 'Benjamin Ventura II',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-02-10 20:15:51',
                'updated_at' => '2025-02-10 20:15:51',
            ),
            403 => 
            array (
                'id' => 702,
                'name' => 'Emish Pharmacy',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-02-10 20:35:48',
                'updated_at' => '2025-02-10 20:35:48',
            ),
            404 => 
            array (
                'id' => 703,
                'name' => 'Jayson T. Escultor',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-02-11 17:54:22',
                'updated_at' => '2025-02-11 17:54:22',
            ),
            405 => 
            array (
                'id' => 704,
                'name' => 'Romgarjal\'s Phoenix Gasoline Station',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-02-11 22:33:36',
                'updated_at' => '2025-02-11 22:33:36',
            ),
            406 => 
            array (
                'id' => 705,
                'name' => 'ESR Construction and Development Corporation',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-02-11 23:43:38',
                'updated_at' => '2025-02-11 23:43:38',
            ),
            407 => 
            array (
                'id' => 706,
                'name' => 'Jay Jasper N. Manogura',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-02-12 00:02:01',
                'updated_at' => '2025-02-12 00:02:01',
            ),
            408 => 
            array (
                'id' => 707,
                'name' => 'Danielle Maxim B. Enriquez',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-02-12 18:11:22',
                'updated_at' => '2025-02-12 18:11:22',
            ),
            409 => 
            array (
                'id' => 708,
                'name' => 'Johnnel J. Castillo',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-02-12 23:58:48',
                'updated_at' => '2025-02-12 23:58:48',
            ),
            410 => 
            array (
                'id' => 709,
                'name' => 'Almira Jane F. Baybay',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-02-13 00:15:12',
                'updated_at' => '2025-02-13 00:15:12',
            ),
            411 => 
            array (
                'id' => 710,
                'name' => 'E & L Ice Plant & Cold Storage',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-02-13 01:08:57',
                'updated_at' => '2025-02-13 01:08:57',
            ),
            412 => 
            array (
                'id' => 711,
                'name' => 'Jeizelmy H. Velasco',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-02-13 21:04:06',
                'updated_at' => '2025-02-13 21:04:06',
            ),
            413 => 
            array (
                'id' => 712,
                'name' => 'Ice Ready',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-02-13 23:00:40',
                'updated_at' => '2025-02-13 23:00:40',
            ),
            414 => 
            array (
                'id' => 713,
                'name' => 'A Blackstone Energy Corporation',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-02-18 17:41:48',
                'updated_at' => '2025-02-18 17:41:48',
            ),
            415 => 
            array (
                'id' => 714,
                'name' => 'Coca-Cola Europacific Aboitiz Philippines',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-02-19 16:42:49',
                'updated_at' => '2025-02-19 16:42:49',
            ),
            416 => 
            array (
                'id' => 715,
                'name' => 'Sailor Water Refilling Station',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-02-19 17:23:10',
                'updated_at' => '2025-02-19 17:23:10',
            ),
            417 => 
            array (
                'id' => 716,
                'name' => 'Loria Ashley R. Alfaro',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-02-19 18:22:30',
                'updated_at' => '2025-02-19 18:22:30',
            ),
            418 => 
            array (
                'id' => 717,
                'name' => 'R-Cel Purified Water',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-02-19 19:00:05',
                'updated_at' => '2025-02-19 19:00:05',
            ),
            419 => 
            array (
                'id' => 718,
                'name' => 'Lucky Star Motel',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-02-19 21:00:42',
                'updated_at' => '2025-02-19 21:00:42',
            ),
            420 => 
            array (
                'id' => 719,
                'name' => 'Adriannah P. Sanson',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-02-19 23:51:10',
                'updated_at' => '2025-02-19 23:51:10',
            ),
            421 => 
            array (
                'id' => 720,
                'name' => 'EC Gas Station',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-02-20 17:04:47',
                'updated_at' => '2025-02-20 17:04:47',
            ),
            422 => 
            array (
                'id' => 721,
                'name' => 'Ocean Aquamarine Products Enterprises',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-02-20 17:50:32',
                'updated_at' => '2025-02-20 17:50:32',
            ),
            423 => 
            array (
                'id' => 722,
                'name' => 'Petrostar Gas Station - Surabay',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-02-21 20:39:31',
                'updated_at' => '2025-02-21 20:39:31',
            ),
            424 => 
            array (
                'id' => 723,
                'name' => 'Petrostar Gas Station - Salug',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-02-21 20:46:44',
                'updated_at' => '2025-02-21 20:46:44',
            ),
            425 => 
            array (
                'id' => 724,
                'name' => 'Petrostar Gas Station - Gutalac',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-02-21 20:49:15',
                'updated_at' => '2025-02-21 20:49:15',
            ),
            426 => 
            array (
                'id' => 725,
                'name' => 'Rizalyn Pharmacy',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-02-24 16:24:20',
                'updated_at' => '2025-02-24 16:24:20',
            ),
            427 => 
            array (
                'id' => 726,
                'name' => 'Hydr8 Water Refilling Station',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-02-25 16:52:35',
                'updated_at' => '2025-02-25 16:52:35',
            ),
            428 => 
            array (
                'id' => 727,
                'name' => 'Catalino C. Jardin, Jr.',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-02-25 17:56:33',
                'updated_at' => '2025-02-25 17:56:33',
            ),
            429 => 
            array (
                'id' => 728,
                'name' => 'Jehsil Gas Station',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-02-27 16:32:46',
                'updated_at' => '2025-02-27 16:32:46',
            ),
            430 => 
            array (
                'id' => 729,
                'name' => 'Valles Gas Station',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-02-27 16:35:12',
                'updated_at' => '2025-02-27 16:35:12',
            ),
            431 => 
            array (
                'id' => 730,
                'name' => 'Sangali Gas Station',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-02-27 18:17:58',
                'updated_at' => '2025-02-27 18:17:58',
            ),
            432 => 
            array (
                'id' => 731,
                'name' => 'Surefuel Fuel Trading',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-02-28 19:31:17',
                'updated_at' => '2025-02-28 19:31:17',
            ),
            433 => 
            array (
                'id' => 732,
                'name' => 'Maimbung District Hospital',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-02-28 22:23:52',
                'updated_at' => '2025-02-28 22:23:52',
            ),
            434 => 
            array (
                'id' => 733,
                'name' => 'Guillermo P. Pantuhan',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-03-03 17:55:11',
                'updated_at' => '2025-03-03 17:55:11',
            ),
            435 => 
            array (
                'id' => 734,
                'name' => 'Kristine Mae T. Barredo',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-03-03 21:04:55',
                'updated_at' => '2025-03-03 21:04:55',
            ),
            436 => 
            array (
                'id' => 735,
                'name' => 'Leticia Torrico Enriquez',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-03-03 22:21:56',
                'updated_at' => '2025-03-03 22:21:56',
            ),
            437 => 
            array (
                'id' => 736,
                'name' => 'Darcy Jay B. Candido',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-03-04 16:55:07',
                'updated_at' => '2025-03-04 16:55:07',
            ),
            438 => 
            array (
                'id' => 737,
                'name' => 'Sun Food Wholesaling',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-03-05 00:42:49',
                'updated_at' => '2025-03-05 00:42:49',
            ),
            439 => 
            array (
                'id' => 738,
                'name' => 'Andon Bakery',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-03-05 19:08:02',
                'updated_at' => '2025-03-05 19:08:02',
            ),
            440 => 
            array (
                'id' => 739,
                'name' => 'Zamboanga King Hok Seaweed Corporation',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-03-05 19:50:41',
                'updated_at' => '2025-03-05 19:50:41',
            ),
            441 => 
            array (
                'id' => 740,
                'name' => 'JM GASOLINE STATION',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-03-05 20:57:16',
                'updated_at' => '2025-03-05 20:57:16',
            ),
            442 => 
            array (
                'id' => 741,
                'name' => 'Rossaida J. Canonizado',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-03-06 01:00:40',
                'updated_at' => '2025-03-06 01:00:40',
            ),
            443 => 
            array (
                'id' => 742,
                'name' => 'Philippine Coconut Authority - Zamboanga Research Center',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-03-06 17:09:15',
                'updated_at' => '2025-03-06 17:09:15',
            ),
            444 => 
            array (
                'id' => 743,
                'name' => 'Vista del Mar Resort & Recreation Center',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-03-06 18:31:57',
                'updated_at' => '2025-03-06 18:31:57',
            ),
            445 => 
            array (
                'id' => 744,
                'name' => 'Lycha Mae P. Yabres',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-03-07 00:49:27',
                'updated_at' => '2025-03-07 00:49:27',
            ),
            446 => 
            array (
                'id' => 745,
                'name' => 'Camp Navarro General Hospital',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-03-07 18:41:52',
                'updated_at' => '2025-03-07 18:41:52',
            ),
            447 => 
            array (
                'id' => 746,
                'name' => 'Olmecs and Company Development Corp.',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-03-07 19:18:29',
                'updated_at' => '2025-03-07 19:18:29',
            ),
            448 => 
            array (
                'id' => 747,
                'name' => 'Cabarron Gasoline Station',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-03-10 17:14:12',
                'updated_at' => '2025-03-10 17:14:12',
            ),
            449 => 
            array (
                'id' => 748,
                'name' => 'JTB Ventures, OPC / JTB Fuel Station',
                'has_branches' => 1,
                'is_active' => 1,
                'created_at' => '2025-03-10 17:18:25',
                'updated_at' => '2025-03-10 17:18:25',
            ),
            450 => 
            array (
                'id' => 749,
                'name' => 'K and A Gasoline Station',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-03-10 17:22:18',
                'updated_at' => '2025-03-10 17:22:18',
            ),
            451 => 
            array (
                'id' => 750,
                'name' => 'Honey Nicole L. Tigam',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-03-10 21:17:13',
                'updated_at' => '2025-03-10 21:17:13',
            ),
            452 => 
            array (
                'id' => 751,
                'name' => 'Elaine B. Nava',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-03-10 21:59:40',
                'updated_at' => '2025-03-10 21:59:40',
            ),
            453 => 
            array (
                'id' => 752,
                'name' => 'RTH Trucking Services',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-03-10 23:43:13',
                'updated_at' => '2025-03-10 23:43:13',
            ),
            454 => 
            array (
                'id' => 753,
                'name' => 'Estephen Anthony A. Bentoy',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-03-11 17:20:40',
                'updated_at' => '2025-03-11 17:20:40',
            ),
            455 => 
            array (
                'id' => 754,
                'name' => 'Maria Czarina D. Urot',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-03-12 20:07:21',
                'updated_at' => '2025-03-12 20:07:21',
            ),
            456 => 
            array (
                'id' => 755,
                'name' => 'Brielle M. Mariano',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-03-13 00:04:31',
                'updated_at' => '2025-03-13 00:04:31',
            ),
            457 => 
            array (
                'id' => 756,
                'name' => 'Nur-Ailyn A. Nads',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-03-13 01:03:58',
                'updated_at' => '2025-03-13 01:03:58',
            ),
            458 => 
            array (
                'id' => 757,
                'name' => 'Merilyn I. Lauhari',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-03-13 17:05:34',
                'updated_at' => '2025-03-13 17:05:34',
            ),
            459 => 
            array (
                'id' => 758,
                'name' => 'SJ Enterprises OPC',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-03-14 18:13:45',
                'updated_at' => '2025-03-14 18:13:45',
            ),
            460 => 
            array (
                'id' => 759,
                'name' => 'Fhrea-Aysha M. Abdurahman',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-03-14 18:37:42',
                'updated_at' => '2025-03-14 18:37:42',
            ),
            461 => 
            array (
                'id' => 760,
                'name' => 'Ali Ibn Esnaen O. Catong',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-03-17 17:03:16',
                'updated_at' => '2025-03-17 17:03:16',
            ),
            462 => 
            array (
                'id' => 761,
                'name' => '2M Rubber',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-03-17 17:13:51',
                'updated_at' => '2025-03-17 17:13:51',
            ),
            463 => 
            array (
                'id' => 762,
                'name' => 'Brian F. Lanorias',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-03-17 23:13:17',
                'updated_at' => '2025-03-17 23:13:17',
            ),
            464 => 
            array (
                'id' => 763,
                'name' => 'Dailymed Generic\'s Pharmacy',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-03-18 16:39:11',
                'updated_at' => '2025-03-18 16:39:11',
            ),
            465 => 
            array (
                'id' => 764,
                'name' => 'Gluthameed Pharma & General Merchandise',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-03-18 16:40:25',
                'updated_at' => '2025-03-18 16:40:25',
            ),
            466 => 
            array (
                'id' => 765,
                'name' => 'Premier Physic Metrologie',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-03-18 23:25:09',
                'updated_at' => '2025-03-18 23:25:09',
            ),
            467 => 
            array (
                'id' => 766,
                'name' => 'Elisha Eve O. Felisario',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-03-19 21:05:38',
                'updated_at' => '2025-03-19 21:05:38',
            ),
            468 => 
            array (
                'id' => 767,
                'name' => 'MC Biotechnical Solutions Inc.',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-03-20 18:24:52',
                'updated_at' => '2025-03-20 18:24:52',
            ),
            469 => 
            array (
                'id' => 768,
                'name' => 'Cheezy Kate B. Credo',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-03-20 19:18:02',
                'updated_at' => '2025-03-20 19:18:02',
            ),
            470 => 
            array (
                'id' => 769,
                'name' => 'Bulawan National High School',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-03-20 20:47:17',
                'updated_at' => '2025-03-20 20:47:17',
            ),
            471 => 
            array (
                'id' => 770,
                'name' => 'Paruk Siay Elementary School',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-03-20 21:02:33',
                'updated_at' => '2025-03-20 21:02:33',
            ),
            472 => 
            array (
                'id' => 771,
                'name' => 'Kimel\'s Fuel Refilling Station',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-03-20 22:59:08',
                'updated_at' => '2025-03-20 22:59:08',
            ),
            473 => 
            array (
                'id' => 772,
                'name' => 'PNOC EC Zamboanga',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-03-21 06:48:15',
                'updated_at' => '2025-03-21 06:48:15',
            ),
            474 => 
            array (
                'id' => 773,
                'name' => 'Zamboanga Peninsula - Center for Health Development',
                'has_branches' => 1,
                'is_active' => 1,
                'created_at' => '2025-03-21 19:00:24',
                'updated_at' => '2025-03-21 19:00:24',
            ),
            475 => 
            array (
                'id' => 774,
                'name' => 'Consolidated Coconut Corporation',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-03-24 06:01:09',
                'updated_at' => '2025-03-24 06:01:09',
            ),
            476 => 
            array (
                'id' => 775,
                'name' => 'Arvin Rey L. Manalastas',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-03-24 16:55:55',
                'updated_at' => '2025-03-24 16:55:55',
            ),
            477 => 
            array (
                'id' => 776,
                'name' => 'Atty. Emilio B. Aquino',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-03-24 22:51:29',
                'updated_at' => '2025-03-24 22:51:29',
            ),
            478 => 
            array (
                'id' => 777,
                'name' => 'Elaine Christine F. Corteza',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-03-24 23:22:15',
                'updated_at' => '2025-03-24 23:22:15',
            ),
            479 => 
            array (
                'id' => 778,
                'name' => 'Josephus Fastfood',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-03-25 17:42:02',
                'updated_at' => '2025-03-25 17:42:02',
            ),
            480 => 
            array (
                'id' => 779,
                'name' => 'New Mabuhay Pharmacy',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-03-25 18:39:33',
                'updated_at' => '2025-03-25 18:39:33',
            ),
            481 => 
            array (
                'id' => 780,
                'name' => 'Phoebe Marie L. Calo',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-03-26 00:38:04',
                'updated_at' => '2025-03-26 00:38:04',
            ),
            482 => 
            array (
                'id' => 781,
                'name' => 'Derma J. Asta',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-03-26 17:18:20',
                'updated_at' => '2025-03-26 17:18:20',
            ),
            483 => 
            array (
                'id' => 782,
                'name' => 'Me-Ann Rose V. Alfad',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-03-26 18:17:39',
                'updated_at' => '2025-03-26 18:17:39',
            ),
            484 => 
            array (
                'id' => 784,
                'name' => 'K2J2 Gas Refilling Station',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-03-26 18:46:51',
                'updated_at' => '2025-03-26 18:46:51',
            ),
            485 => 
            array (
                'id' => 785,
                'name' => 'JMS Fuel Refilling Station',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-03-26 18:48:07',
                'updated_at' => '2025-03-26 18:48:07',
            ),
            486 => 
            array (
                'id' => 786,
                'name' => '4J\'s Micro Gas Refilling Station',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-03-26 18:49:10',
                'updated_at' => '2025-03-26 18:49:10',
            ),
            487 => 
            array (
                'id' => 787,
                'name' => 'Red Bar Gas Refilling Station',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-03-26 18:50:57',
                'updated_at' => '2025-03-26 18:50:57',
            ),
            488 => 
            array (
                'id' => 788,
                'name' => 'Tacloban Winner Marketing Corporation',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-03-26 18:51:33',
                'updated_at' => '2025-03-26 18:51:33',
            ),
            489 => 
            array (
                'id' => 789,
                'name' => 'Jacquelyn Magasa Gas Station',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-03-26 19:25:49',
                'updated_at' => '2025-03-26 19:25:49',
            ),
            490 => 
            array (
                'id' => 790,
                'name' => 'Marsilyn A. Ismael',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-03-26 20:00:04',
                'updated_at' => '2025-03-26 20:00:04',
            ),
            491 => 
            array (
                'id' => 791,
                'name' => 'Gabrielle Anthonette D. Francisco',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-03-27 00:08:31',
                'updated_at' => '2025-03-27 00:08:31',
            ),
            492 => 
            array (
                'id' => 792,
                'name' => 'Greener Pasture Consumer Goods Trading',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-03-27 18:57:50',
                'updated_at' => '2025-03-27 18:57:50',
            ),
            493 => 
            array (
                'id' => 793,
                'name' => 'KNK Consumer Goods Trading',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-03-27 19:01:29',
                'updated_at' => '2025-03-27 19:01:29',
            ),
            494 => 
            array (
                'id' => 794,
                'name' => 'DKF Consumer Goods Trading',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-03-27 19:03:15',
                'updated_at' => '2025-03-27 19:03:15',
            ),
            495 => 
            array (
                'id' => 795,
                'name' => 'Great Fortune Consumer Goods Trading',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-03-27 19:06:00',
                'updated_at' => '2025-03-27 19:06:00',
            ),
            496 => 
            array (
                'id' => 796,
                'name' => 'KWN Multi Trading',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-03-27 19:08:00',
                'updated_at' => '2025-03-27 19:08:00',
            ),
            497 => 
            array (
                'id' => 797,
                'name' => 'Presco Food Trading',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-03-27 19:40:00',
                'updated_at' => '2025-03-27 19:40:00',
            ),
            498 => 
            array (
                'id' => 798,
                'name' => 'Marivic T. Manso',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-03-28 19:24:15',
                'updated_at' => '2025-03-28 19:24:15',
            ),
            499 => 
            array (
                'id' => 799,
                'name' => 'Jilliana Water Station',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-03-28 23:11:33',
                'updated_at' => '2025-03-28 23:11:33',
            ),
        ));
        \DB::table('customer_names')->insert(array (
            0 => 
            array (
                'id' => 800,
                'name' => 'Valerie Faye C. Valeros',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-03-31 19:49:24',
                'updated_at' => '2025-03-31 19:49:24',
            ),
            1 => 
            array (
                'id' => 801,
                'name' => 'City Nutrition Office - Isabela CIty',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-03-31 20:12:01',
                'updated_at' => '2025-03-31 20:12:01',
            ),
            2 => 
            array (
                'id' => 802,
                'name' => 'Cases Eye Surgi Center',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-04-02 18:47:08',
                'updated_at' => '2025-04-02 18:47:08',
            ),
            3 => 
            array (
                'id' => 803,
                'name' => 'Area Vocational Rehabilitation Center III',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-04-02 19:19:50',
                'updated_at' => '2025-04-02 19:19:50',
            ),
            4 => 
            array (
                'id' => 804,
                'name' => 'KYLA NOVA S. SALAS',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-04-02 21:13:19',
                'updated_at' => '2025-04-02 21:13:19',
            ),
            5 => 
            array (
                'id' => 805,
                'name' => 'Pick and Go Convenience Store',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-04-03 21:48:44',
                'updated_at' => '2025-04-03 21:48:44',
            ),
            6 => 
            array (
                'id' => 806,
                'name' => 'Charvic Seaoil Station',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-04-03 23:03:36',
                'updated_at' => '2025-04-03 23:03:36',
            ),
            7 => 
            array (
                'id' => 807,
                'name' => 'Emerald Fields Trading, Inc.',
                'has_branches' => 1,
                'is_active' => 1,
                'created_at' => '2025-04-03 23:23:15',
                'updated_at' => '2025-04-03 23:23:15',
            ),
            8 => 
            array (
                'id' => 808,
                'name' => 'Yasmine M. Doña',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-04-05 00:23:24',
                'updated_at' => '2025-04-05 00:23:24',
            ),
            9 => 
            array (
                'id' => 809,
                'name' => 'Arby R. Aquino',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-04-08 00:33:39',
                'updated_at' => '2025-04-08 00:33:39',
            ),
            10 => 
            array (
                'id' => 810,
                'name' => 'GM Espiritu Consumer Goods Trading',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-04-08 16:08:32',
                'updated_at' => '2025-04-08 16:08:32',
            ),
            11 => 
            array (
                'id' => 811,
                'name' => 'Glorwilyn B. Perez',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-04-08 17:29:35',
                'updated_at' => '2025-04-08 17:29:35',
            ),
            12 => 
            array (
                'id' => 812,
                'name' => 'ASAP General Trading Construction and Maintenance',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-04-08 21:13:25',
                'updated_at' => '2025-04-08 21:13:25',
            ),
            13 => 
            array (
                'id' => 813,
                'name' => 'Fatima Nur A. Absin',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-04-08 21:35:35',
                'updated_at' => '2025-04-08 21:35:35',
            ),
            14 => 
            array (
                'id' => 814,
                'name' => 'Seatrade Canning Corporation',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-04-10 07:32:14',
                'updated_at' => '2025-04-10 07:32:14',
            ),
            15 => 
            array (
                'id' => 815,
                'name' => 'Silsilah Foundation Inc.',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-04-10 16:57:07',
                'updated_at' => '2025-04-10 16:57:07',
            ),
            16 => 
            array (
                'id' => 816,
                'name' => 'Miguel\'s Food Product',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-04-10 22:04:56',
                'updated_at' => '2025-04-10 22:04:56',
            ),
            17 => 
            array (
                'id' => 817,
                'name' => 'New Atlas Rubber Industries Inc.',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-04-11 18:14:07',
                'updated_at' => '2025-04-11 18:14:07',
            ),
            18 => 
            array (
                'id' => 818,
                'name' => 'Nurpaida A. Maularin',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-04-11 18:46:52',
                'updated_at' => '2025-04-11 18:46:52',
            ),
            19 => 
            array (
                'id' => 819,
                'name' => 'Raniel A. Tubat',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-04-14 17:43:17',
                'updated_at' => '2025-04-14 17:43:17',
            ),
            20 => 
            array (
                'id' => 820,
                'name' => 'Abdus S. Nu',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-04-15 00:14:57',
                'updated_at' => '2025-04-15 00:14:57',
            ),
            21 => 
            array (
                'id' => 821,
                'name' => 'Ecology Logistic Corporation',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-04-15 17:25:28',
                'updated_at' => '2025-04-15 17:25:28',
            ),
            22 => 
            array (
                'id' => 822,
                'name' => 'DMC Construction Equipment Resources Inc.',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-04-16 00:50:30',
                'updated_at' => '2025-04-16 00:50:30',
            ),
            23 => 
            array (
                'id' => 823,
                'name' => 'Lucky Bros Gas Station',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-04-21 16:40:00',
                'updated_at' => '2025-04-21 16:40:00',
            ),
            24 => 
            array (
                'id' => 824,
            'name' => 'Malandi Patalon Zamboanga City Agrarian Reform Association - MPC (MAPZACARA-MPC)',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-04-21 19:45:38',
                'updated_at' => '2025-04-21 19:45:38',
            ),
            25 => 
            array (
                'id' => 825,
                'name' => 'Provo Gas Refilling Station',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-04-21 20:09:02',
                'updated_at' => '2025-04-21 20:09:02',
            ),
            26 => 
            array (
                'id' => 826,
                'name' => 'Minsu Oil Incorporated Fuel Depot',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-04-21 23:03:37',
                'updated_at' => '2025-04-21 23:03:37',
            ),
            27 => 
            array (
                'id' => 827,
                'name' => 'Rosie\'s Pharmacy',
                'has_branches' => 1,
                'is_active' => 1,
                'created_at' => '2025-04-21 23:46:56',
                'updated_at' => '2025-04-21 23:46:56',
            ),
            28 => 
            array (
                'id' => 828,
                'name' => 'Zamboanga City Treasurer\'s Office',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-04-22 17:35:04',
                'updated_at' => '2025-04-22 17:35:04',
            ),
            29 => 
            array (
                'id' => 829,
                'name' => 'Shamin S. Taup',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-04-22 19:20:11',
                'updated_at' => '2025-04-22 19:20:11',
            ),
            30 => 
            array (
                'id' => 830,
                'name' => 'Gregory Erl D. Cochesa',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-04-22 19:40:30',
                'updated_at' => '2025-04-22 19:40:30',
            ),
            31 => 
            array (
                'id' => 831,
                'name' => 'Ministry of Science and Technology BARMM',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-04-23 17:51:29',
                'updated_at' => '2025-04-23 17:51:29',
            ),
            32 => 
            array (
                'id' => 832,
                'name' => 'Girlie Ann B. Gargar',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-04-23 19:39:31',
                'updated_at' => '2025-04-23 19:39:31',
            ),
            33 => 
            array (
                'id' => 833,
                'name' => 'Pylon Gas Station',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-04-24 00:24:47',
                'updated_at' => '2025-04-24 00:24:47',
            ),
            34 => 
            array (
                'id' => 834,
                'name' => 'Department of Agriculture IX',
                'has_branches' => 1,
                'is_active' => 1,
                'created_at' => '2025-04-25 16:36:47',
                'updated_at' => '2025-04-25 16:36:47',
            ),
            35 => 
            array (
                'id' => 835,
                'name' => 'Ren And Rich Pharmacy',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-04-25 16:55:40',
                'updated_at' => '2025-04-25 16:55:40',
            ),
            36 => 
            array (
                'id' => 836,
                'name' => 'OLC Ice Plant',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-04-28 17:50:45',
                'updated_at' => '2025-04-28 17:50:45',
            ),
            37 => 
            array (
                'id' => 837,
                'name' => 'H and L Pharmaceutical Products Distribution',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-04-28 18:17:19',
                'updated_at' => '2025-04-28 18:17:19',
            ),
            38 => 
            array (
                'id' => 838,
                'name' => 'EC Gas Station - Isabela City, Basilan',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-04-28 19:17:03',
                'updated_at' => '2025-04-28 19:17:03',
            ),
            39 => 
            array (
                'id' => 839,
                'name' => 'Muadz T. Jainal',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-04-28 23:01:26',
                'updated_at' => '2025-04-28 23:01:26',
            ),
            40 => 
            array (
                'id' => 840,
                'name' => 'Fatima Aliya A. Jameri',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-04-28 23:33:33',
                'updated_at' => '2025-04-28 23:33:33',
            ),
            41 => 
            array (
                'id' => 841,
                'name' => 'Reynalyn V. Lozano',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-04-28 23:50:09',
                'updated_at' => '2025-04-28 23:50:09',
            ),
            42 => 
            array (
                'id' => 842,
                'name' => 'Don Fernando\'s Processed Food Product Retailing',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-04-29 17:43:47',
                'updated_at' => '2025-04-29 17:43:47',
            ),
            43 => 
            array (
                'id' => 843,
                'name' => 'Ethan Micro Gas Station',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-04-29 19:06:31',
                'updated_at' => '2025-04-29 19:06:31',
            ),
            44 => 
            array (
                'id' => 844,
                'name' => 'Petron Super Station',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-04-29 23:07:32',
                'updated_at' => '2025-04-29 23:07:32',
            ),
            45 => 
            array (
                'id' => 845,
                'name' => 'Office of the Provincial Health Officer',
                'has_branches' => 1,
                'is_active' => 1,
                'created_at' => '2025-04-30 22:46:28',
                'updated_at' => '2025-04-30 22:46:28',
            ),
            46 => 
            array (
                'id' => 846,
                'name' => 'PMI Fuel Express',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-05-01 00:59:03',
                'updated_at' => '2025-05-01 00:59:03',
            ),
            47 => 
            array (
                'id' => 847,
                'name' => 'Nancy Fishing Corporation',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-05-02 18:35:24',
                'updated_at' => '2025-05-02 18:35:24',
            ),
            48 => 
            array (
                'id' => 848,
                'name' => 'Salud Pharmacy',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-05-02 19:13:09',
                'updated_at' => '2025-05-02 19:13:09',
            ),
            49 => 
            array (
                'id' => 849,
                'name' => 'Co Ban Kiat Hardware, Inc.',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-05-03 00:59:33',
                'updated_at' => '2025-05-03 00:59:33',
            ),
            50 => 
            array (
                'id' => 850,
                'name' => 'A&L Water Refilling Station',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-05-05 17:43:22',
                'updated_at' => '2025-05-05 17:43:22',
            ),
            51 => 
            array (
                'id' => 851,
                'name' => 'Al-Badi L. Mansul',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-05-05 22:00:24',
                'updated_at' => '2025-05-05 22:00:24',
            ),
            52 => 
            array (
                'id' => 852,
                'name' => 'Diamond Noodles Factory',
                'has_branches' => 0,
                'is_active' => 1,
                'created_at' => '2025-05-06 01:18:43',
                'updated_at' => '2025-05-06 01:18:43',
            ),
        ));

        
    }
}