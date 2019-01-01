<?php

use Illuminate\Database\Seeder;

class AccountsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Account::create([
            'num_of_pass' => 2,
            'username_of_passenger' => 'luka.juric',
            'user_password' => 'juric0125h',
            'name_surname_of_pass' => 'Luka Juric',
            'date_of_writing_acc' => '2018-01-26',
            'due_date_of_acc' => '2018-01-26',
            'payment_method' => 'Kuna',
            'currency' => 'HRK',
            'currency_exchange_rate' => 0.134,
            'date_of_departure_of_the_passenger' => '2018-02-09',
            'commission' => 0.10,
            'vat' => 0.25,
            'type_of_payment' => 'Credit card',
            'amount' => 52154,
            'reservation_id' =>1
        ]);

        App\Account::create([
            'num_of_pass' => 3,
            'username_of_passenger' => 'mateja.simic',
            'user_password' => 'simic08jk',
            'name_surname_of_pass' => 'Mateja Simic',
            'date_of_writing_acc' => '2018-02-25',
            'due_date_of_acc' => '2018-02-25',
            'payment_method' => 'Kuna',
            'currency' => 'HRK',
            'currency_exchange_rate' => 0.134,
            'date_of_departure_of_the_passenger' => '2018-04-21',
            'commission' => 0.10,
            'vat' => 0.25,
            'type_of_payment' => 'Debit card',
            'amount' => 351537,
            'reservation_id' =>2
        ]);

        App\Account::create([
            'num_of_pass' => 22,
            'username_of_passenger' => 'nikolina.gorg',
            'user_password' => 'niko12g65',
            'name_surname_of_pass' => 'Nikolina Gorg',
            'date_of_writing_acc' => '2018-03-01',
            'due_date_of_acc' => '2018-03-01',
            'payment_method' => 'Kuna',
            'currency' => 'HRK',
            'currency_exchange_rate' => 0.134,
            'date_of_departure_of_the_passenger' => '2018-03-15',
            'commission' => 0.10,
            'vat' => 0.25,
            'type_of_payment' => 'cod',
            'amount' => 2577938,
            'reservation_id' =>3
        ]);

        App\Account::create([
            'num_of_pass' => 10,
            'username_of_passenger' => 'matilda.puk',
            'user_password' => 'matilda89JIh',
            'name_surname_of_pass' => 'Matilda Puk',
            'date_of_writing_acc' => '2018-04-29',
            'due_date_of_acc' => '2018-04-29',
            'payment_method' => 'Kuna',
            'currency' => 'HRK',
            'currency_exchange_rate' => 0.134,
            'date_of_departure_of_the_passenger' => '2018-07-29',
            'commission' => 0.10,
            'vat' => 0.25,
            'type_of_payment' => 'Credit card',
            'amount' => 8864500,
            'reservation_id' =>4
        ]);

        App\Account::create([
            'num_of_pass' => 80,
            'username_of_passenger' => 'antun.trifun',
            'user_password' => 'trifun01lkuR',
            'name_surname_of_pass' => 'Antun Trifun',
            'date_of_writing_acc' => '2018-03-24',
            'due_date_of_acc' => '2018-03-24',
            'payment_method' => 'Kuna',
            'currency' => 'HRK',
            'currency_exchange_rate' => 0.134,
            'date_of_departure_of_the_passenger' => '2018-05-17',
            'commission' => 0.10,
            'vat' => 0.25,
            'type_of_payment' => 'cod',
            'amount' => 70916000,
            'reservation_id' =>5
        ]);

        App\Account::create([
            'num_of_pass' => 15,
            'username_of_passenger' => 'josip.peric',
            'user_password' => 'pericjosip789ko0',
            'name_surname_of_pass' => 'Josip Peric',
            'date_of_writing_acc' => '2018-11-25',
            'due_date_of_acc' => '2018-11-25',
            'payment_method' => 'Kuna',
            'currency' => 'HRK',
            'currency_exchange_rate' => 0.134,
            'date_of_departure_of_the_passenger' => '2019-01-11',
            'commission' => 0.10,
            'vat' => 0.25,
            'type_of_payment' => 'Debit card',
            'amount' => 9299235,
            'reservation_id' =>6
        ]);

        App\Account::create([
            'num_of_pass' => 8,
            'username_of_passenger' => 'nino.bekic',
            'user_password' => 'bekicnino67gu',
            'name_surname_of_pass' => 'Nino Bekic',
            'date_of_writing_acc' => '2018-04-12',
            'due_date_of_acc' => '2018-04-12',
            'payment_method' => 'Kuna',
            'currency' => 'HRK',
            'currency_exchange_rate' => 0.134,
            'date_of_departure_of_the_passenger' => '2018-04-21',
            'commission' => 0.10,
            'vat' => 0.25,
            'type_of_payment' => 'Credit card',
            'amount' => 83776800,
            'reservation_id' =>7
        ]);

        App\Account::create([
            'num_of_pass' => 4,
            'username_of_passenger' => 'anita.krkov',
            'user_password' => 'krkov768dg',
            'name_surname_of_pass' => 'Anita Krkov',
            'date_of_writing_acc' => '2018-06-09',
            'due_date_of_acc' => '2018-06-09',
            'payment_method' => 'Kuna',
            'currency' => 'HRK',
            'currency_exchange_rate' => 0.134,
            'date_of_departure_of_the_passenger' => '2018-06-11',
            'commission' => 0.10,
            'vat' => 0.25,
            'type_of_payment' => 'cod',
            'amount' => 1798400,
            'reservation_id' =>8
        ]);

        App\Account:: create([
            'num_of_pass' => 2,
            'username_of_passenger' => 'hrvoje.lukic',
            'user_password' => 'lukic67htz',
            'name_surname_of_pass' => 'Hrvoje Lukic',
            'date_of_writing_acc' => '2018-07-01',
            'due_date_of_acc' => '2018-07-01',
            'payment_method' => 'Kuna',
            'currency' => 'HRK',
            'currency_exchange_rate' => 0.134,
            'date_of_departure_of_the_passenger' => '2018-09-01',
            'commission' => 0.10,
            'vat' => 0.25,
            'type_of_payment' => 'Debit card',
            'amount' => 16232000,
            'reservation_id' =>9
        ]);

        App\Account::create([
            'num_of_pass' => 10,
            'username_of_passenger' => 'esma.lucic',
            'user_password' => 'esma98huk',
            'name_surname_of_pass' => 'Esma Lucic',
            'date_of_writing_acc' => '2018-04-19',
            'due_date_of_acc' => '2018-04-19',
            'payment_method' => 'Kuna',
            'currency' => 'HRK',
            'currency_exchange_rate' => 0.134,
            'date_of_departure_of_the_passenger' => '2018-05-19',
            'commission' => 0.10,
            'vat' => 0.25,
            'type_of_payment' => 'Credit card',
            'amount' => 3009400,
            'reservation_id' =>10
        ]);
    }
}
