<?php

use Illuminate\Database\Seeder;

class M_facilitiesTableSeeder extends Seeder
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
            'facility_id' => 1,
        ];
        DB::table('m_facilities')->insert($param);
    }
}
