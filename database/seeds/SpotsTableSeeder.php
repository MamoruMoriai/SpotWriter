<?php

use Illuminate\Database\Seeder;

class SpotsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'official_flg' => 0,
            'spot_category' => 1,
            'name' => '鵠沼海浜公園スケートパーク',
            'sub_name' => '',
            'level' => 3.00,
            'country_id' => 1,
            'postal_cd' => '251-0037',
            'prefecture_id' => 14,
            'municipality_block' => '藤沢市鵠沼海岸4丁目4-1',
            'telephone_number' => '0466-31-4562',
            'site_url' => 'https://www.s-n-p.jp/skatepark/',
        ];
        DB::table('spots')->insert($param);
    }
}
