<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Accommodation extends Model
{
    protected $fillable = ['accommodation_name', 'apartment_hotel', 'discount', 'the_price_of_accommodation', 'total_accommodation_price', 'max_accommodation', 'destination_id'];

    //Više smještaja može pripadati jednoj destinaciji
    public function destination()
    {
        return $this->belongsTo(\App\Destination::class);
    }

    //Jedan smještaj može imati više putovanja 
    public function travels()
    {
        return $this->hasMany(\App\Travel::class);
    }
}
