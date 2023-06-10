<?php

use Illuminate\Database\Seeder;

class ImagesTableSeeder extends Seeder
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
            'image_path' => '',
        ];
        DB::table('images')->insert($param);
    }
}
