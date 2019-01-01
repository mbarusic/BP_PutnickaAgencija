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
        App\Country::create([
            'name' =>'Portoriko'   
        ]);

        App\Country::create([
             'name' =>'Greek'
         ]);

         App\Country::create([
             'name' =>'France'
         ]);

         App\Country::create([
             'name' =>'Croatia'
         ]);

         App\Country::create([
             'name' =>'Switzerland'
         ]);

         App\Country::create([
             'name' =>'Turkey'
         ]);

         App\Country::create([
             'name' =>'Romania'
         ]);
    }
}
