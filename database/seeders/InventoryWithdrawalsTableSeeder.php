<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class InventoryWithdrawalsTableSeeder extends Seeder
{
    /**
     * Auto generated seeder file.
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('inventory_withdrawals')->delete();
        

        
    }
}