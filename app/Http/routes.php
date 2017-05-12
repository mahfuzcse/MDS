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

Route::get('/about', function () {
    // return view('welcome');
    return "About page";
});

// Route::get('/contact', function () {
//     return view('contact');
//     // return "Home";
// });
Route::get('contact','basicController@index');

// Route::get('/order', function () 
//   {
//      return view('order');
//   });


Route::get('ordergiving','ordercontroller@index');
Route::get('registration','ordercontroller@reg_index');
// Route::get('/home', function () 
//   {
//      return view('home');
//   });
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


Route::resource('course','courseController');

// Route::get('/insert1',function(){
//    $a = new App\MedicineDelivery;
//    $a->delivery_place ='Rajshahi';
//    $a->delivery_date = '23-10-2001';
//    $a->save();
// });

Route::get('/price',function(){
 $p= new App\MedicineOrder;
 $p->price=222;
 $p->discount=32;
 $p->quantity=22;
 $p->save();


});