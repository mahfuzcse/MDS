<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('home','basicController@index1');
Route::get('order','basicController@index2');
Route::get('login','basicController@index11');
Route::get('contact','basicController@index3');
Route::get('registration','basicController@reg_index');
Route::get('ordersummary','basicController@ordersummaryControl');
Route::get('orderaddress','basicController@orderaddressControl');
Route::get('orderpayment','basicController@orderpaymentControl');


Route::get('/ab','ordercontroller@insert');
Route::post('store','ordercontroller@store');

Route::get('home','homeController@index');

Route::get('/alluser', function () {
    return view('user');
    // return "Home";
});

Route::get('/alluser/{id}/{name}', function ($id,$name) {
   // return view('user');
    return "User ".$id.$name;
})->where('id','[0-9]+');;

Route::get('/contact',['as' =>'contact', 'uses'=>'basicController@index']);


Route::get('/insert',function(){
	DB::table('medicine_orders')->insert(['price' => 22.3,'discount'=>25,'quantity'=>345]);
});

Route::get('/set',function(){
	DB::table('orders')->insert(['order_No' => 0001,'delivery_date'=>03-02-2012,'delivery_address'=>'Dinajpur','amount'=>4332,'discount'=>25,'payment_status'=>'NO','trx_id'=>1231233221]);
});


Route::get('/mtype',function(){
	DB::table('medicineType')->insert(['typeName' => 'injection','numOfType'=>5]);
});

Route::resource('course','courseController');


Route::get('/price',function(){
 $p= new App\MedicineOrder;
 $p->price=222;
 $p->discount=32;
 $p->quantity=22;
 $p->save();


});