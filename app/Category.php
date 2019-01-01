<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name'];

        //Jedna kategorija može imati više destinacija
        public function destinations()
        {
            return $this->hasMany(\App\Destination::class);
        }
}
