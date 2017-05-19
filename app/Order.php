<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function medicines(){
      
      return $this->belongsTo('App\Medicine','order_details','order_id','	medicine_id');
    }

    public function order_details(){
      
      return $this->hasMany('App\OrderDetail' );
    }
}
