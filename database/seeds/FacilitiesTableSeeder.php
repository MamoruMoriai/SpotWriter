<?php

use Illuminate\Database\Seeder;

class FacilitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' => 'パイプ',
            'image_path' => '棒状の金属',
        ];
        DB::table('facilities')->insert($param);
    }
}
