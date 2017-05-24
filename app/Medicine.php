<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medicine extends Model
{
	protected $fillable=['img'];
    //
    public function order_details(){

    	return $this->belongsToMany('App\OrderDetail');
    }
}
