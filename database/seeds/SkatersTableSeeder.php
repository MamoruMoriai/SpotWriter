<?php

use Illuminate\Database\Seeder;

class SkatersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' => 'Ryuhei Kitazume',
            'detail' => 'ちょーかっけぇスケーター。',
            'image_path' => '',
        ];
        DB::table('skaters')->insert($param);
    }
}
