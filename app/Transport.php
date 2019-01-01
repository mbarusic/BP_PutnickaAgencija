<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transport extends Model
{
    protected $fillable = ['price', 'service', 'transport', 'reservation', 'destination_id'];

    //Jedan prijevoz može imati više putovanja 
    public function travels()
    {
        return $this->hasMany(\App\Travel::class);
    }

   //Više različitih prijevoza može biti za jednu destinaciju
     public function destination()
     {
       return $this->belongsTo(\App\Destination::class);
     }
}
