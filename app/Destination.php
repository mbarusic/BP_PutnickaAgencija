<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    protected $fillable = ['discount', 'category_id', 'city_id'];

    //Jedna destinacija može imati više smještaja
    public function accommodations()
    {
        return $this->hasMany(\App\Accommodation::class);
    }

      //Jedna destinacija može imati više različitih prijevoza
      public function transports()
      {
          return $this->hasMany(\App\Transport::class);
      }

        //Više destinacija može imati jednu kategoriju
        public function category()
        {
            return $this->belongsTo(\App\Category::class);
        }

         //Jedna destincija može pripadati samo jednom gradu
         public function city()
         {
             return $this->belongsTo(\App\City::class);
         }
}
