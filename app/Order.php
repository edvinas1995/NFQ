<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function images(){
        return $this->hasMany('App\Gallery');
    }
}
