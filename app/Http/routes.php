<?php

Route::group(['middlewareGroups' => ['web']], function () {
	
Route::get('home',[
             
             'uses' =>'basicController@index1',
             'as'   =>'medicine.home'
	           ]);


Route::get('order',           'basicController@index2');

Route::get('login',           'basicController@index11');
// Route::get('contact',         'basicController@index3');
Route::get('contact',         ['as' =>'contactMsg','uses'=>'basicController@index3']);
Route::get('demos/livesearch','basicController@liveSearch');
Route::get('registration',    'basicController@reg_index');
Route::get('ordersummary',    'basicController@ordersummaryControl');
Route::get('orderaddress',    'basicController@orderaddressControl');
Route::get('orderpayment',    'basicController@orderpaymentControl');
Route::get('fullstorage',     'basicController@storage');
Route::get('menHealthPill',   'basicController@menHealthPill');
Route::get('/insert',          ['as'=>'medicineInsert','uses'=>'basicController@insert']);


Route::get('details/{id}/',[
	                       'uses'=> 'basicController@details',
	                       'as'  => 'medicineDetail']);

Route::post('/storeContactMsg',[
	                             'uses' => 'basicController@storeContactMsg', 
	                             'as'   =>'storeContactMsg']);

Route::post('/storeClient',[
                            'uses' => 'basicController@storeClient',
   	                        'as' => 'storeClient']);

Route::post('/storeMedicine',[
	                           'uses' => 'basicController@storeMedicine',
	                           'as' =>'storeMedicine']);

    
});