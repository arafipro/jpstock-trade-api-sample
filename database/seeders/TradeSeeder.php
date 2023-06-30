<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // 追加

class TradeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('trades')->insert([
            'code' => 7201,
            'shares' => 100,
            'price' => 500.0,
            'buy_sell' => '買',
            'trading_date' => '20230404',
        ]);
    }
}
