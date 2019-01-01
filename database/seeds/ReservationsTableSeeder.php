<?php

use Illuminate\Database\Seeder;

class ReservationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Reservation::create([
            'period_of_travel' => '2018-01-26',
            'name_surname_of_pass' => 'Luka Juric',
            'e_mail_pass' => 'luka.juric@gmail.com',
            'phone_num_pass' => '0955641456',
            'num_of_adults' => '2',
            'num_children' => '0',
            'travel_id' =>1
        ]);

        App\Reservation::create([
            'period_of_travel' => '2018-01-25',
            'name_surname_of_pass' => 'Mateja Simic',
            'e_mail_pass' => 'simic01.mateja@hotmail.com',
            'phone_num_pass' => '0983221083',
            'num_of_adults' => '3',
            'num_children' => '0',
            'travel_id' =>2
        ]);

        App\Reservation::create([
            'period_of_travel' => '2018-03-01',
            'name_surname_of_pass' => 'Nikolina Gorg',
            'e_mail_pass' => 'niko12.gorg@gmail.com',
            'phone_num_pass' => '0951234567',
            'num_of_adults' => '14',
            'num_children' => '8',
            'travel_id' =>3
        ]);

        App\Reservation::create([
            'period_of_travel' => '2018-04-29',
            'name_surname_of_pass' => 'Matilda Puk',
            'e_mail_pass' => 'matilda89.puk@yahoo.com',
            'phone_num_pass' => '0916357283',
            'num_of_adults' => '5',
            'num_children' => '5',
            'travel_id' =>4
        ]);

        App\Reservation::create([
            'period_of_travel' => '2018-03-24',
            'name_surname_of_pass' => 'Antun Trifun',
            'e_mail_pass' => 'trifun01.antun@yahoo.com',
            'phone_num_pass' => '0926300800',
            'num_of_adults' => '52',
            'num_children' => '28',
            'travel_id' =>5
        ]);

        App\Reservation::create([
            'period_of_travel' => '2018-11-25',
            'name_surname_of_pass' => 'Josip Peric',
            'e_mail_pass' => 'josip.peric789@gmail.com',
            'phone_num_pass' => '0994894457',
            'num_of_adults' => '15',
            'num_children' => '0',
            'travel_id' =>6
        ]);

        App\Reservation::create([
            'period_of_travel' => '2018-04-12',
            'name_surname_of_pass' => 'Nino Bekic',
            'e_mail_pass' => 'nino.bekic@gmail.com',
            'phone_num_pass' => '0952464796',
            'num_of_adults' => '8',
            'num_children' => '0',
            'travel_id' =>7
        ]);
        App\Reservation::create([
            'period_of_travel' => '2018-06-09',
            'name_surname_of_pass' => 'Anita Krgov',
            'e_mail_pass' => 'anita.krgov@hotmail.com',
            'phone_num_pass' => '0917881425',
            'num_of_adults' => '4',
            'num_children' => '0',
            'travel_id' =>8
        ]);

        App\Reservation::create([
            'period_of_travel' => '2018-07-01',
            'name_surname_of_pass' => 'Hrvoje Lukic',
            'e_mail_pass' => 'hrvoje.lukic@gmail.com',
            'phone_num_pass' => '0995671150',
            'num_of_adults' => '2',
            'num_children' => '0',
            'travel_id' =>9
        ]);

        App\Reservation::create([
            'period_of_travel' => '2018-04-19',
            'name_surname_of_pass' => 'Esma Lucic',
            'e_mail_pass' => 'esma.lucu@gmail.com',
            'phone_num_pass' => '0927592466',
            'num_of_adults' => '10',
            'num_children' => '0',
            'travel_id' =>10
        ]);
    }
}
