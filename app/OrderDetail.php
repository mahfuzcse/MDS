<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    protected $fillable=['order_id','medicine_id','quantity','price'];

    
    public function medicine(){
    	return $this->hasOne('App\Medicine');
    }

    public function order(){
    	return $this->belongsTo('App\Order');
    }
}
