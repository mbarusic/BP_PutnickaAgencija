<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    protected $fillable = ['num_of_pass', 'username_of_passenger', 'user_password', 'name_surname_of_pass', 'date_of_writing_acc', 'due_date_of_acc', 'payment_method', 'currency', 'currency_exchange_rate', 'date_of_departure_of_the_passenger', 'commission', 'vat', 'type_of_payment', 'amount', 'reservation_id'];

        //Više računa može se izdati za jednu rezervaciju.
        public function reservation()
        {
            return $this->belongsTo(\App\Reservation::class);
        }
}
