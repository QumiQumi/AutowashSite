<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    public function priceForCar()
    {
        return $this->hasMany(ServiceForCar::class);
    }
    // public function cars()
    // {
    //     return Car::all();
    // }

}
