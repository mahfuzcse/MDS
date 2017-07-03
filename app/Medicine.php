<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medicine extends Model
{
	protected $fillable=['medicine_name','img','unit_price','stored_quantity'];
    //
    public function order_details(){

    	return $this->belongsToMany('App\OrderDetail');
    }
}
