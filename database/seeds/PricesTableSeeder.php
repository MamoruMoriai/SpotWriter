<?php

use Illuminate\Database\Seeder;

class PricesTableSeeder extends Seeder
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
            'start_time' => '09:00:00',
            'end_time' => '12:00:00',
            'minute' => 60,
            'role' => 1,
            'price' => 100,
        ];
        DB::table('prices')->insert($param);

        $param = [
            'spot_id' => 1,
            'start_time' => '09:00:00',
            'end_time' => '12:00:00',
            'minute' => 60,
            'role' => 0,
            'price' => 200,
        ];
        DB::table('prices')->insert($param);

        $param = [
            'spot_id' => 1,
            'start_time' => '12:00:01',
            'end_time' => '21:00:00',
            'minute' => 60,
            'role' => 1,
            'price' => 200,
        ];
        DB::table('prices')->insert($param);

        $param = [
            'spot_id' => 1,
            'start_time' => '12:00:01',
            'end_time' => '21:00:00',
            'minute' => 60,
            'role' => 0,
            'price' => 300,
        ];
        DB::table('prices')->insert($param);
    }
}
