<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Medicine;

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
     
    public function index3(){
    
    	return view('contact');

    }

    public function reg_index(){
    
    	return view('registration');

    }

   
    public function index11(){
    
    	return view('login');

    }

    public function storage(){
    
        return view('fullstorage');

    }

    public function insert(){

        return view('insert');
    }
  

    // have to amend  
    public function delete(Client $client)
    {
        $client->subjects()->detach();
        $client->delete();

        return redirect()->action('basicController@');
    }



    //medicine storing 


    public function storeMedicine(Request $request)
    {
        $rules = [
            'image'  => 'required',
            'descr'  =>'required'
        ];
        $this->validate($request,$rules);
        $file                        = $request->file('image');
        $image                       = $file->getClientOriginalName();
        $medicine                    = new Medicine;
        $medicine->medicine_name     = $request->name;
        $medicine->img               = $image ;
        $medicine->medicine_descr    = $request->descr ;
        $medicine->stored_quantity   = $request->quantity; 
        $medicine->unit_price        = $request->unit;
        $m = $medicine->save();
        if($m)
        {
            $msg = "Medicine added successfully" ;
        }
        else
        {
            $msg ="Something wrong" ;
        }
        return redirect('/insert')->with('msg',$msg);

    }
}
