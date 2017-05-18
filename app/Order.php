<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function medicines(){
      
      return $this->belongsToMany('App\Medicine','order_details','order_id','	medicine_id');

    }
}
