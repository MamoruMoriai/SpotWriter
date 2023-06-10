<?php

use Illuminate\Database\Seeder;

class Opening_hoursTableSeeder extends Seeder
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
            'week' => 1,
            'start_time' => '09:00:00',
            'end_time' => '21:00:00',
        ];
        DB::table('opening_hours')->insert($param);
    }
}
