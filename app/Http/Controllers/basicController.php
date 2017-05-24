<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class basicController extends Controller
{
     public function index1(){

        return view('home');
    
    }
    
     public function index2(){
    
        return view('order');

    }

    public function ordersummaryControl(){
        return view('orderSummary');
    }

    public function orderaddressControl(){
        return view('orderAddress');
    }
    public function orderpaymentControl(){
        return view('orderPayment');
    } 
    public function index(){
    
    	return view('contact');

    }

    public function reg_index(){
    
    	return view('registration');

    }

   
    public function index11(){
    
    	return view('login');

    }
}
