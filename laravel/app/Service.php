<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    public function servicesForCar()
    {
        return $this->hasMany('App\ServiceForCar');
    }
    //test
    //text/1
}
