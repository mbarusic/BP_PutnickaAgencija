<?php

use Illuminate\Database\Seeder;

class AccomodationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Accommodation::create([
            'accommodation_name' => 'Hotel Servatur Casablanca',
            'apartment_hotel' => 'Hotel',
            'discount' => 0.50,
            'the_price_of_accommodation' => 5600.00,
            'total_accommodation_price' => 11200.00,
            'max_accommodation' => 50,
            'destination_id'=>1
        ]);

        App\Accommodation::create([
            'accommodation_name' => 'Hotel Morasol Suites',
            'apartment_hotel' => 'Hotel',
            'discount' => 0.42,
            'the_price_of_accommodation' => 14590.00,
            'total_accommodation_price' => 320980.00,
            'max_accommodation' => 30,
            'destination_id'=>2
        ]);

        App\Accommodation::create([
            'accommodation_name' => 'Hotel Demar Residence',
            'apartment_hotel' => 'Hotel',
            'discount' => 0.25,
            'the_price_of_accommodation' => 7757.00,
            'total_accommodation_price' => 620560.00,
            'max_accommodation' => 25,
            'destination_id'=>3
        ]);

        App\Accommodation::create([
            'accommodation_name' => 'Hotel Alpinn',
            'apartment_hotel' => 'Hotel',
            'discount' => 0.10,
            'the_price_of_accommodation' => 4326.20,
            'total_accommodation_price' => 34608.00,
            'max_accommodation' => 35,
            'destination_id'=>4
        ]);

        App\Accommodation::create([
            'accommodation_name' => 'Apartment Rialto',
            'apartment_hotel' => 'Apartment',
            'discount' => 0.20,
            'the_price_of_accommodation' => 20180.00,
            'total_accommodation_price' => 40330.00,
            'max_accommodation' => 2,
            'destination_id'=>5
        ]);

        App\Accommodation::create([
            'accommodation_name' => 'Apartment Nico',
            'apartment_hotel' => 'Apartment',
            'discount' => 0.20,
            'the_price_of_accommodation' => 20300.00,
            'total_accommodation_price' => 50330.00,
            'max_accommodation' => 2,
            'destination_id'=>6
        ]);

        App\Accommodation::create([
            'accommodation_name' => 'Hotel Live',
            'apartment_hotel' => 'Hotel',
            'discount' => 0.45,
            'the_price_of_accommodation' => 30250.00,
            'total_accommodation_price' => 60830.00,
            'max_accommodation' => 20,
            'destination_id'=>7
        ]);

        App\Accommodation::create([
            'accommodation_name' => 'Hotel Park',
            'apartment_hotel' => 'Hotel',
            'discount' => 0.42,
            'the_price_of_accommodation' => 10250.00,
            'total_accommodation_price' => 40830.00,
            'max_accommodation' => 10,
            'destination_id'=>8
        ]);

        App\Accommodation::create([
            'accommodation_name' => 'Apartment Joseph',
            'apartment_hotel' => 'Apartment',
            'discount' => 0.32,
            'the_price_of_accommodation' => 80250.00,
            'total_accommodation_price' => 100830.00,
            'max_accommodation' => 2,
            'destination_id'=>9
        ]);

        App\Accommodation::create([
            'accommodation_name' => 'Apartment Site',
            'apartment_hotel' => 'Apartment',
            'discount' => 0.13,
            'the_price_of_accommodation' => 60150.00,
            'total_accommodation_price' => 80630.00,
            'max_accommodation' => 2,
            'destination_id'=>10
        ]);
    }
}
