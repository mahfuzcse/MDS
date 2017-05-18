<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class basicController extends Controller
{
    public function index(){
    
    	return view('contact');

    }

    public function reg_index(){
    
    	return view('registration');

    }

    public function index1(){
    
    	return view('home');

    }
    public function index11(){
    
    	return view('login');

    }
}
