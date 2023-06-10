<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        // $this->call(CountriesTableSeeder::class);
        // $this->call(PrefecturesTableSeeder::class);
        $this->call(SpotsTableSeeder::class);
        $this->call(SkatersTableSeeder::class);
        $this->call(TechniquesTableSeeder::class);
        $this->call(TerminologiesTableSeeder::class);
        $this->call(NoticesTableSeeder::class);
        $this->call(ImagesTableSeeder::class);
        $this->call(Opening_hoursTableSeeder::class);
        $this->call(Parking_lotsTableSeeder::class);
        $this->call(PricesTableSeeder::class);
        $this->call(FacilitiesTableSeeder::class);
        $this->call(M_facilitiesTableSeeder::class);

    }
}
