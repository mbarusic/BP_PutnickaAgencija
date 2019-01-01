<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $fillable = ['period_of_travel', 'name_surname_of_pass', 'e_mail_pass', 'phone_num_pass', 'num_of_adults', 'num_children', 'travel_id'];
    
     //Više rezervacija se može rezervirati za jedno putovanje.
     public function travel()
     {
         return $this->belongsTo(\App\Travel::class);
     }

        //Jedna rezervacija može imati više računa.
        public function account()
        {
          return $this->hasMany(\App\Account::class);
        }
}
