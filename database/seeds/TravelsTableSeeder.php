<?php

use Illuminate\Database\Seeder;

class TravelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Travel::create([
            'date_of_travel' =>'2018-01-26',
            'accommodation_id' =>1,
            'transport_id'=>1,
            'max_num_of_pass'=>2
        ]);

        App\Travel::create([
            'date_of_travel' =>'2018-01-25',
            'accommodation_id' =>2,
            'transport_id'=>2,
            'max_num_of_pass'=>3
        ]);

        App\Travel::create([
            'date_of_travel' =>'2018-03-01',
            'accommodation_id' =>3,
            'transport_id'=>3,
            'max_num_of_pass'=>22
        ]);

        App\Travel::create([
            'date_of_travel' =>'2018-04-29',
            'accommodation_id' =>4,
            'transport_id'=>4,
            'max_num_of_pass'=>10
        ]);

        App\Travel::create([
            'date_of_travel' =>'2018-03-24',
            'accommodation_id' =>5,
            'transport_id'=>5,
            'max_num_of_pass'=>77
        ]);
        
         App\Travel::create([
            'date_of_travel' =>'2018-11-25',
            'accommodation_id' =>6,
            'transport_id'=>6,
            'max_num_of_pass'=>15
        ]);

        App\Travel::create([
            'date_of_travel' =>'2018-04-12',
            'accommodation_id' =>7,
            'transport_id'=>7,
            'max_num_of_pass'=>8
        ]);

        App\Travel::create([
            'date_of_travel' =>'2018-06-11',
            'accommodation_id' =>8,
            'transport_id'=>8,
            'max_num_of_pass'=>4
        ]);
        
        App\Travel::create([
            'date_of_travel' =>'2018-07-01',
            'accommodation_id' =>9,
            'transport_id'=>9,
            'max_num_of_pass'=>2
        ]);

        App\Travel::create([
            'date_of_travel' =>'2018-04-19',
            'accommodation_id' =>10,
            'transport_id'=>10,
            'max_num_of_pass'=>10
        ]);
    }
}
