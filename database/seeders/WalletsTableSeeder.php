<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class WalletsTableSeeder extends Seeder
{
    /**
     * Auto generated seeder file.
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('wallets')->delete();
        
        \DB::table('wallets')->insert(array (
            0 => 
            array (
                'id' => 1,
                'total' => '500.00',
                'available' => '0.00',
                'deduction' => '0.00',
                'customer_id' => 93,
                'created_at' => '2024-08-16 16:50:36',
                'updated_at' => '2024-08-16 17:00:29',
            ),
            1 => 
            array (
                'id' => 2,
                'total' => '2050.00',
                'available' => '0.00',
                'deduction' => '0.00',
                'customer_id' => 130,
                'created_at' => '2024-08-16 16:50:36',
                'updated_at' => '2024-10-03 18:41:25',
            ),
            2 => 
            array (
                'id' => 3,
                'total' => '2250.00',
                'available' => '0.00',
                'deduction' => '0.00',
                'customer_id' => 26,
                'created_at' => '2024-08-16 16:50:36',
                'updated_at' => '2024-08-31 18:36:15',
            ),
            3 => 
            array (
                'id' => 5,
                'total' => '4850.00',
                'available' => '0.00',
                'deduction' => '0.00',
                'customer_id' => 184,
                'created_at' => '2024-09-12 23:23:43',
                'updated_at' => '2024-10-11 19:10:51',
            ),
            4 => 
            array (
                'id' => 6,
                'total' => '250.00',
                'available' => '250.00',
                'deduction' => '0.00',
                'customer_id' => 167,
                'created_at' => '2025-02-12 23:41:17',
                'updated_at' => '2025-02-12 23:41:17',
            ),
            5 => 
            array (
                'id' => 7,
                'total' => '2000.00',
                'available' => '1000.00',
                'deduction' => '0.00',
                'customer_id' => 834,
                'created_at' => '2025-02-27 20:52:07',
                'updated_at' => '2025-03-05 18:58:45',
            ),
            6 => 
            array (
                'id' => 8,
                'total' => '400.00',
                'available' => '400.00',
                'deduction' => '0.00',
                'customer_id' => 901,
                'created_at' => '2025-04-23 17:07:48',
                'updated_at' => '2025-04-23 17:07:48',
            ),
        ));

        
    }
}