<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $fillable = ['name', 'country_id'];

    //Jedan grad pripad više država.
    public function country()
    {
        return $this->belongsTo(\App\Country::class);
    }

     //Jedan grad može imati samo jednu destinaciju.
     public function destination()
     {
         return $this->hasOne(\App\Destination::class);
     }
}
