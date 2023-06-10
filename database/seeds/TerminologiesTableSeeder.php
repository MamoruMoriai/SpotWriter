<?php

use Illuminate\Database\Seeder;

class TerminologiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' => 'びったびた。',
            'detail' => 'ボードが足裏に極めてくっついている様子',
            'image_path' => '',
        ];
        DB::table('terminologies')->insert($param);
    }
}
