<?php

use Illuminate\Database\Seeder;

class DestinationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Destination::create([
            'city_id' => 1,
            'category_id' => 1,
            'discount' =>'0.50'
        ]);

        App\Destination::create([
            'city_id' => 2,
            'category_id' => 1,
            'discount' =>'0.25'
        ]);

        App\Destination::create([
            'city_id' => 3,
            'category_id' => 1,
            'discount' =>'0.10'
        ]);

        App\Destination::create([
            'city_id' => 4,
            'category_id' => 2,
            'discount' =>'0.30'
        ]);

        App\Destination::create([
            'city_id' => 5,
            'category_id' => 2,
            'discount' =>'0.25'
        ]);

        App\Destination::create([
            'city_id' => 6,
            'category_id' => 2,
            'discount' =>'0.20'
        ]);

        App\Destination::create([
            'city_id' => 7,
            'category_id' => 2,
            'discount' =>'0.45'
        ]);

        App\Destination::create([
            'city_id' => 8,
            'category_id' => 1,
            'discount' =>'0.42'
        ]);

        App\Destination::create([
            'city_id' => 9,
            'category_id' => 1,
            'discount' =>'0.32'
        ]);

        App\Destination::create([
            'city_id' => 10,
            'category_id' => 1,
            'discount' =>'0.13'
        ]);
    }
}
