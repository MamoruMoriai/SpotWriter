<?php

use Illuminate\Database\Seeder;

class Parking_lotsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'spot_id' => 1,
            'season' => 1,
            'start_time' => '08:00:00',
            'end_time' => '20:00:00',
            'minute' => 60,
            'price' => 100,
        ];
        DB::table('parking_lots')->insert($param);

        $param = [
            'spot_id' => 1,
            'season' => 1,
            'start_time' => '20:00:01',
            'end_time' => '07:59:59',
            'minute' => 60,
            'price' => 100,
        ];
        DB::table('parking_lots')->insert($param);
    }
}
