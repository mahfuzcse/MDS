<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Medicine;
use App\Order;
use App\OrderDetail;
use App\User;


class basicController extends Controller
{
     public function index1(){
        $medicines = Medicine::all();
        return view('home',['medicines'=>$medicines]);
    
    }
    
     public function index2(){
    
        return view('order')->with('md','');

    }

    public function ordersummaryControl(){

        return view('orderSummary');
    }

    public function orderaddressControl(){

        return view('orderAddress');
    }
     
    public function medicineDetail(){

        return view('medicineDetail');
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
    public function menHealthPill(){

        return view('menHealthPill');
    }


    // user contact 
    public function storeContactMsg(Request $request)
    {
        $rules = [
            'name'  => 'required',
            'email'  =>'required'
        ];

        $this->validate($request,$rules);
        $user                        = new User;
        $user->name                  = $request->name;
        $user->email                 = $request->email ;
        $user->subject               = $request->subject; 
        $user->msgDesc               = $request->message;
        $m = $user->save();
        if($m)
        {
            $msg = "user added successfully" ;
        }
        else
        {
            $msg ="Something wrong" ;
        }
        return redirect('/storeContactMsg')->with('msg',$msg);
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

     public function liveSearch(Request $request)
    { 
           $search = $request->id;

        
            $medicines = Medicine::where('medicine_name','LIKE',"%{$search}%")
                           ->get();

            return view('ajaxSearch',compact('medicines','search'));
        
    }


    public function details($id){

        $md  = Medicine::findOrFail($id);
       
        return view('medicineDetail',compact('md'));
    }
    //user registration
    public function storeClient(Request $request)
    {
        $rules = [
            'first_name'  => 'required',
            'last_name'   => 'required',
            'email'       => 'required'
        ];
        $this->validate($request,$rules);
    
        $reg                    = new User;
        $reg->fname             = $request->first_name;
        $reg->lname             = $request->last_name ;
        $reg->phNo              = $request->phNo; 
        $reg->email             = $request->email;
        $reg->password          = $request->password;
        $m = $reg->save();
        if($m)
        {
            $msg = "Successfully registered" ;
        }
        else
        {
            $msg ="Something wrong" ;
        }
        return redirect('/registration')->with('msg',$msg);

    }

}
