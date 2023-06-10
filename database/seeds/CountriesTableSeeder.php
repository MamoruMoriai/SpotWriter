<?php

use Illuminate\Database\Seeder;

class CountriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' => 'Japan',
        ];
        DB::table('countries')->insert($param);

        $param = [
            'name' => 'USA',
        ];
        DB::table('countries')->insert($param);

        $param = [
            'name' => 'UK',
        ];
        DB::table('countries')->insert($param);
    }
}
