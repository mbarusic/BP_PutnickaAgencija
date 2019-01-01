<?php

use Illuminate\Database\Seeder;

class TransportsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Transport::create([
            'price' =>14877,
            'service' => 'Zagreb - San Juan',
            'transport' =>'Airplane',
            'reservation' =>'2019-01-26',
            'destination_id' =>1
        ]);

        App\Transport::create([
            'price' =>64619,
            'service' => 'Split - Athens',
            'transport' =>'Ferry',
            'reservation' =>'2019-02-25',
            'destination_id' =>2
        ]);

        App\Transport::create([
            'price' =>362736,
            'service' => 'Dubrovnik - Paris',
            'transport' =>'Bus',
            'reservation' =>'2019-03-01',
            'destination_id' =>3
        ]);

        App\Transport::create([
            'price' =>80950,
            'service' => 'Zagreba - Rovinj',
            'transport' =>'Bus',
            'reservation' =>'2019-04-29',
            'destination_id' =>4
        ]);

        App\Transport::create([
            'price' =>630160,
            'service' => 'Split - Zadar',
            'transport' =>'Ferry',
            'reservation' =>'2019-03-24',
            'destination_id' =>5
        ]);

        App\Transport::create([
            'price' =>320324,
            'service' => 'Zagreb - Zürich',
            'transport' =>'Airplane',
            'reservation' =>'2018-11-25',
            'destination_id' =>6
        ]);

        App\Transport::create([
            'price' =>70113,
            'service' => 'Rijeka - Istanbul',
            'transport' =>'Airplane',
            'reservation' =>'2018-04-12',
            'destination_id' =>7
        ]);

        App\Transport::create([
            'price' =>3216,
            'service' => 'Split - Cluj-Napoca',
            'transport' =>'Bus',
            'reservation' =>'2018-06-11',
            'destination_id' =>8
        ]);

        App\Transport::create([
            'price' =>40830,
            'service' => 'Split - Pula',
            'transport' =>'Bus',
            'reservation' =>'2018-07-01',
            'destination_id' =>9
            
        ]);

        App\Transport::create([
            'price' =>153070,
            'service' => 'Zagreb - Šibenik',
            'transport' =>'Train',
            'reservation' =>'2018-04-19',
            'destination_id' =>10
        ]);

    }
}
