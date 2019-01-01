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
        $this->call(CountriesTableSeeder::class);
        $this->call(CitiesTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(DestinationsTableSeeder::class);
        $this->call(TransportsTableSeeder::class);
        $this->call(AccomodationsTableSeeder::class);
        $this->call(TravelsTableSeeder::class);
        $this->call(ReservationsTableSeeder::class);
        $this->call(AccountsTableSeeder::class);

    }
}
