<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Travel extends Model
{
    protected $fillable = ['max_num_of_pass', 'date_of_travel', 'transport_id', 'accommodation_id'];

    //Više putovanja može imati jedan smještaj
    public function accommodation()
    {
        return $this->belongsTo(\App\Accommodation::class);
    }

    //Više putovanja može imati jedan prijevoz
       public function transport()
       {
           return $this->belongsTo(\App\Transport::class);
       }

    //Jedno putovanje može imati više rezervacija.
     public function reservation()
      {
        return $this->hasMany(\App\Reservation::class);
      }
}
