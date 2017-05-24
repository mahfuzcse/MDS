<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Medicine;
use App\Http\Requests;

class ordercontroller extends Controller
{
    

		public function insert()
		{
           return view('insert');
			
		}
		public function store(Request $request)
		{
			 $file=$request->file('file');
			 $name=$file->getClientOriginalName();
			 $file->move('img',$name);
			 Medicine::create(['img' =>$name]);
			 
		}




     
}
