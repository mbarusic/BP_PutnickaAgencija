<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $fillable = ['name'];

    //Jedna država može imati više gradova. 
    public function cities()
    {
        return $this->belongsTo(\App\City::class);
    }
}
