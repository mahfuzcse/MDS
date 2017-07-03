<?php

Route::group(['middlewareGroups' => ['web']], function () {
	
Route::get('home',            'basicController@index1');
Route::get('order',           'basicController@index2');
Route::get('login',           'basicController@index11');
Route::get('contact',         'basicController@index3');
Route::get('registration',    'basicController@reg_index');
Route::get('ordersummary',    'basicController@ordersummaryControl');
Route::get('orderaddress',    'basicController@orderaddressControl');
Route::get('orderpayment',    'basicController@orderpaymentControl');
Route::get('fullstorage',     'basicController@storage');
Route::get('/insert',          ['as'=>'medicineInsert','uses'=>'basicController@insert']);
Route::get('{client}/delete', 'basicController@delete');    //have to amend

Route::post('/storeMedicine',['as' =>'storeMedicine', 'uses' => 'basicController@storeMedicine']);

});