<?php

use Illuminate\Database\Seeder;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\City::create([
            'name' => 'San Juan',
            'country_id' => 1
        ]);

        App\City::create([
            'name' => 'Athens',
            'country_id' => 2
        ]);

        App\City::create([
            'name' => 'Paris',
            'country_id' => 3
        ]);

        App\City::create([
            'name' => 'Rovinj',
            'country_id' => 4
        ]);

        App\City::create([
            'name' => 'Zadar',
            'country_id' => 4
        ]);

        App\City::create([
            'name' => 'Pula',
            'country_id' => 4
        ]);

        App\City::create([
            'name' => 'Šibenik',
            'country_id' => 4
        ]);

        App\City::create([
            'name' => 'Zürich',
            'country_id' => 5
        ]);

        App\City::create([
            'name' => 'Istanbul',
            'country_id' => 6
        ]);

        App\City::create([
            'name' => 'Cluj-Napoca',
            'country_id' => 7
        ]);
    }
}
