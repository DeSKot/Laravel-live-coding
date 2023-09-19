<?php

namespace Database\Seeders;

use App\Models\Wallet;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WalletsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('wallets')->insert([
            [
                'amount' => 1000,
                'user_id' => 1,
                'currency_id' => 1,
            ],
            [
                'amount' => 2000,
                'user_id' => 1,
                'currency_id' => 2,
            ],
            [
                'amount' => 1500,
                'user_id' => 2,
                'currency_id' => 1,
            ],
            [
                'amount' => 2500,
                'user_id' => 2,
                'currency_id' => 2,
            ],
        ]);
    }
}
