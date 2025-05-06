<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class WalletTransactionsTableSeeder extends Seeder
{
    /**
     * Auto generated seeder file.
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('wallet_transactions')->delete();
        
        \DB::table('wallet_transactions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'code' => '2024081690029',
                'amount' => '11250.00',
                'balance' => '0.00',
                'is_credit' => 0,
                'transacable_id' => 1,
                'transacable_type' => 'App\\Models\\Tsr',
                'wallet_id' => 1,
                'created_at' => '2024-08-16 17:00:29',
                'updated_at' => '2024-08-16 17:00:29',
            ),
            1 => 
            array (
                'id' => 2,
                'code' => '20240830101629',
                'amount' => '550.00',
                'balance' => '0.00',
                'is_credit' => 0,
                'transacable_id' => 132,
                'transacable_type' => 'App\\Models\\Tsr',
                'wallet_id' => 2,
                'created_at' => '2024-08-30 18:16:29',
                'updated_at' => '2024-08-30 18:16:29',
            ),
            2 => 
            array (
                'id' => 3,
                'code' => '20240831103615',
                'amount' => '2250.00',
                'balance' => '0.00',
                'is_credit' => 0,
                'transacable_id' => 153,
                'transacable_type' => 'App\\Models\\Tsr',
                'wallet_id' => 3,
                'created_at' => '2024-08-31 18:36:15',
                'updated_at' => '2024-08-31 18:36:15',
            ),
            3 => 
            array (
                'id' => 4,
                'code' => '20240831256pm',
                'amount' => '550.00',
                'balance' => '550.00',
                'is_credit' => 1,
                'transacable_id' => 80,
                'transacable_type' => 'App\\Models\\FinanceReceipt',
                'wallet_id' => 2,
                'created_at' => '2024-08-21 22:56:59',
                'updated_at' => '2024-08-31 22:56:59',
            ),
            4 => 
            array (
                'id' => 6,
                'code' => '2024091232343',
                'amount' => '4850.00',
                'balance' => '4850.00',
                'is_credit' => 1,
                'transacable_id' => 214,
                'transacable_type' => 'App\\Models\\FinanceReceipt',
                'wallet_id' => 5,
                'created_at' => '2024-09-12 23:23:43',
                'updated_at' => '2024-09-12 23:23:43',
            ),
            5 => 
            array (
                'id' => 7,
                'code' => '20240831252s',
                'amount' => '1500.00',
                'balance' => '1500.00',
                'is_credit' => 1,
                'transacable_id' => 157,
                'transacable_type' => 'App\\Models\\FinanceReceipt',
                'wallet_id' => 2,
                'created_at' => '2024-10-01 22:56:59',
                'updated_at' => '2024-08-31 22:56:59',
            ),
            6 => 
            array (
                'id' => 8,
                'code' => '20241003104125',
                'amount' => '1500.00',
                'balance' => '0.00',
                'is_credit' => 0,
                'transacable_id' => 331,
                'transacable_type' => 'App\\Models\\Tsr',
                'wallet_id' => 2,
                'created_at' => '2024-10-03 18:41:25',
                'updated_at' => '2024-10-03 18:41:25',
            ),
            7 => 
            array (
                'id' => 9,
                'code' => '20241011111051',
                'amount' => '4850.00',
                'balance' => '0.00',
                'is_credit' => 0,
                'transacable_id' => 376,
                'transacable_type' => 'App\\Models\\Tsr',
                'wallet_id' => 5,
                'created_at' => '2024-10-11 19:10:51',
                'updated_at' => '2024-10-11 19:10:51',
            ),
            8 => 
            array (
                'id' => 10,
                'code' => '2025021234117',
                'amount' => '250.00',
                'balance' => '250.00',
                'is_credit' => 1,
                'transacable_id' => 1131,
                'transacable_type' => 'App\\Models\\FinanceReceipt',
                'wallet_id' => 6,
                'created_at' => '2025-02-12 23:41:17',
                'updated_at' => '2025-02-12 23:41:17',
            ),
            9 => 
            array (
                'id' => 11,
                'code' => '20250227125207',
                'amount' => '2000.00',
                'balance' => '2000.00',
                'is_credit' => 1,
                'transacable_id' => 1188,
                'transacable_type' => 'App\\Models\\FinanceReceipt',
                'wallet_id' => 7,
                'created_at' => '2025-02-27 20:52:07',
                'updated_at' => '2025-02-27 20:52:07',
            ),
            10 => 
            array (
                'id' => 12,
                'code' => '20250305105845',
                'amount' => '1000.00',
                'balance' => '1000.00',
                'is_credit' => 0,
                'transacable_id' => 1508,
                'transacable_type' => 'App\\Models\\Tsr',
                'wallet_id' => 7,
                'created_at' => '2025-03-05 18:58:45',
                'updated_at' => '2025-03-05 18:58:45',
            ),
            11 => 
            array (
                'id' => 13,
                'code' => '2025042390748',
                'amount' => '400.00',
                'balance' => '400.00',
                'is_credit' => 1,
                'transacable_id' => 1537,
                'transacable_type' => 'App\\Models\\FinanceReceipt',
                'wallet_id' => 8,
                'created_at' => '2025-04-23 17:07:48',
                'updated_at' => '2025-04-23 17:07:48',
            ),
        ));

        
    }
}