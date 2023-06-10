<?php

use Illuminate\Database\Seeder;

class TechniquesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' => 'スパイダーフラッシュローリングサンダー',
            'detail' => 'ちょちょっちょっと待て。おにさん。',
            'image_path' => '',
        ];
        DB::table('techniques')->insert($param);
    }
}
