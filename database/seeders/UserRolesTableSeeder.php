<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserRolesTableSeeder extends Seeder
{
    /**
     * Auto generated seeder file.
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('user_roles')->delete();
        
        \DB::table('user_roles')->insert(array (
            0 => 
            array (
                'id' => 1,
                'agency_id' => 14,
                'laboratory_id' => NULL,
                'user_id' => 2,
                'role_id' => 3,
                'created_at' => '2024-07-30 19:04:54',
                'updated_at' => '2024-07-30 19:04:54',
            ),
            1 => 
            array (
                'id' => 2,
                'agency_id' => 14,
                'laboratory_id' => NULL,
                'user_id' => 3,
                'role_id' => 6,
                'created_at' => '2024-08-03 22:46:56',
                'updated_at' => '2024-08-03 22:46:56',
            ),
            2 => 
            array (
                'id' => 3,
                'agency_id' => 14,
                'laboratory_id' => NULL,
                'user_id' => 4,
                'role_id' => 5,
                'created_at' => '2024-08-03 22:47:33',
                'updated_at' => '2024-08-03 22:47:33',
            ),
            3 => 
            array (
                'id' => 4,
                'agency_id' => 14,
                'laboratory_id' => 3,
                'user_id' => 5,
                'role_id' => 2,
                'created_at' => '2024-09-02 18:54:01',
                'updated_at' => '2024-09-02 18:54:01',
            ),
            4 => 
            array (
                'id' => 5,
                'agency_id' => 14,
                'laboratory_id' => 1,
                'user_id' => 6,
                'role_id' => 2,
                'created_at' => '2024-09-02 18:54:37',
                'updated_at' => '2024-09-02 18:54:37',
            ),
            5 => 
            array (
                'id' => 6,
                'agency_id' => 14,
                'laboratory_id' => 2,
                'user_id' => 6,
                'role_id' => 2,
                'created_at' => '2024-09-02 18:54:37',
                'updated_at' => '2024-09-02 18:54:37',
            ),
            6 => 
            array (
                'id' => 7,
                'agency_id' => 14,
                'laboratory_id' => 1,
                'user_id' => 7,
                'role_id' => 4,
                'created_at' => '2024-09-02 19:24:53',
                'updated_at' => '2024-09-02 19:24:53',
            ),
            7 => 
            array (
                'id' => 8,
                'agency_id' => 14,
                'laboratory_id' => 1,
                'user_id' => 8,
                'role_id' => 4,
                'created_at' => '2024-09-09 21:33:21',
                'updated_at' => '2024-09-09 21:33:21',
            ),
            8 => 
            array (
                'id' => 9,
                'agency_id' => 14,
                'laboratory_id' => 1,
                'user_id' => 9,
                'role_id' => 4,
                'created_at' => '2024-09-09 23:51:20',
                'updated_at' => '2024-09-09 23:51:20',
            ),
            9 => 
            array (
                'id' => 10,
                'agency_id' => 14,
                'laboratory_id' => NULL,
                'user_id' => 10,
                'role_id' => 5,
                'created_at' => '2024-09-10 17:12:58',
                'updated_at' => '2024-09-10 17:12:58',
            ),
            10 => 
            array (
                'id' => 11,
                'agency_id' => 14,
                'laboratory_id' => 1,
                'user_id' => 11,
                'role_id' => 4,
                'created_at' => '2024-09-10 21:46:32',
                'updated_at' => '2024-09-10 21:46:32',
            ),
            11 => 
            array (
                'id' => 12,
                'agency_id' => 14,
                'laboratory_id' => 3,
                'user_id' => 12,
                'role_id' => 4,
                'created_at' => '2024-09-10 22:32:08',
                'updated_at' => '2024-09-10 22:32:08',
            ),
            12 => 
            array (
                'id' => 13,
                'agency_id' => 14,
                'laboratory_id' => 3,
                'user_id' => 13,
                'role_id' => 4,
                'created_at' => '2024-09-11 16:54:39',
                'updated_at' => '2024-09-11 16:54:39',
            ),
            13 => 
            array (
                'id' => 14,
                'agency_id' => 14,
                'laboratory_id' => NULL,
                'user_id' => 14,
                'role_id' => 7,
                'created_at' => '2024-09-11 17:10:03',
                'updated_at' => '2024-09-11 17:10:03',
            ),
            14 => 
            array (
                'id' => 15,
                'agency_id' => 14,
                'laboratory_id' => NULL,
                'user_id' => 15,
                'role_id' => 5,
                'created_at' => '2024-09-11 17:31:24',
                'updated_at' => '2024-09-11 17:31:24',
            ),
            15 => 
            array (
                'id' => 16,
                'agency_id' => 14,
                'laboratory_id' => 2,
                'user_id' => 16,
                'role_id' => 4,
                'created_at' => '2024-09-12 16:37:38',
                'updated_at' => '2024-09-12 16:37:38',
            ),
            16 => 
            array (
                'id' => 17,
                'agency_id' => 14,
                'laboratory_id' => NULL,
                'user_id' => 17,
                'role_id' => 6,
                'created_at' => '2024-09-13 18:47:26',
                'updated_at' => '2024-09-13 18:47:26',
            ),
            17 => 
            array (
                'id' => 18,
                'agency_id' => 14,
                'laboratory_id' => NULL,
                'user_id' => 18,
                'role_id' => 6,
                'created_at' => '2024-09-13 19:05:15',
                'updated_at' => '2024-09-13 19:05:15',
            ),
            18 => 
            array (
                'id' => 19,
                'agency_id' => 14,
                'laboratory_id' => NULL,
                'user_id' => 19,
                'role_id' => 5,
                'created_at' => '2024-09-13 23:17:02',
                'updated_at' => '2024-09-13 23:17:02',
            ),
            19 => 
            array (
                'id' => 20,
                'agency_id' => 14,
                'laboratory_id' => 1,
                'user_id' => 20,
                'role_id' => 4,
                'created_at' => '2024-09-17 19:54:59',
                'updated_at' => '2024-09-17 19:54:59',
            ),
            20 => 
            array (
                'id' => 21,
                'agency_id' => 14,
                'laboratory_id' => 2,
                'user_id' => 21,
                'role_id' => 4,
                'created_at' => '2024-09-19 20:52:32',
                'updated_at' => '2024-09-19 20:52:32',
            ),
            21 => 
            array (
                'id' => 23,
                'agency_id' => 14,
                'laboratory_id' => NULL,
                'user_id' => 22,
                'role_id' => 8,
                'created_at' => '2024-12-03 18:23:25',
                'updated_at' => '2024-12-03 18:23:25',
            ),
            22 => 
            array (
                'id' => 24,
                'agency_id' => 14,
                'laboratory_id' => NULL,
                'user_id' => 23,
                'role_id' => 8,
                'created_at' => '2024-12-06 18:55:31',
                'updated_at' => '2024-12-06 18:55:31',
            ),
            23 => 
            array (
                'id' => 25,
                'agency_id' => 14,
                'laboratory_id' => 2,
                'user_id' => 24,
                'role_id' => 4,
                'created_at' => '2025-02-06 22:58:53',
                'updated_at' => '2025-02-06 22:58:53',
            ),
        ));

        
    }
}