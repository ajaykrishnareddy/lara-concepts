<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    public function cities(){
        return $this->hasManyThrough(City::class,Stata::class);
    }
    public function city(){
        return $this->hasOneThrough(City::class,Stata::class);
    }
}
