<?php

use Illuminate\Database\Seeder;

class NoticesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'title' => '年末年始の営業時間について',
            'content' => '12月29日〜1月3日までの期間は、営業時間が下記となりますのでご注意ください。\n11:00-17:00',
            'start_date' => '2022-12-01',
            'end_date' => '2023-01-30',
        ];
        DB::table('notices')->insert($param);
    }
}
