<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FinanceOrseriesTableSeeder extends Seeder
{
    /**
     * Auto generated seeder file.
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('finance_orseries')->delete();
        
        \DB::table('finance_orseries')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Jali GF 2021',
                'start' => '84001',
                'next' => '87500',
                'end' => '87500',
                'is_active' => 0,
                'user_id' => 3,
                'agency_id' => 14,
                'created_at' => '2024-08-16 17:04:23',
                'updated_at' => '2024-11-05 21:00:02',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Jali GF 2024',
                'start' => '6253501',
                'next' => '6254543',
                'end' => '6258500',
                'is_active' => 1,
                'user_id' => 3,
                'agency_id' => 14,
                'created_at' => '2024-10-29 22:12:02',
                'updated_at' => '2025-05-05 23:50:22',
            ),
        ));

        
    }
}