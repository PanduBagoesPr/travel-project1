<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('front/layout/index');
});


// =================== L O G I N  A N D  R E G I S T E R  C O N T R O L L E R ===================
Route::get('auth/login', 'AuthController@login');
Route::post('loginPost', 'AuthController@loginPost');
Route::get('logout', 'AuthController@logout');
Route::get('layout/admin', 'AuthController@index');

Route::get('auth/logincustomer', 'AuthCustomerController@logincustomer');
Route::post('logincustomerPost', 'AuthCustomerController@logincustomerPost');
Route::get('auth/registercustomer', 'AuthCustomerController@registercustomer');
Route::post('registercustomerPost', 'AuthCustomerController@registercustomerPost');
Route::get('logoutcustomer', 'AuthCustomerController@logoutcustomer');
Route::get('layout/index', 'AuthCustomerController@index');


// =================== A D M I N  C O N T R O L L E R ===================
Route::get('customer/form','FormCustomerController@form');
Route::get('customer/add','FormCustomerController@create');
Route::post('customer/store','FormCustomerController@store');
Route::get('customer/edit/{id}','FormCustomerController@edit');
Route::put('customer/update/{id}','FormCustomerController@update');
Route::get('customer/destroy/{id}','FormCustomerController@destroy');

Route::get('packages/formpackages','FormPackageController@formpackages');
Route::get('packages/addpackages','FormPackageController@createpackages');
Route::post('packages/storepackages','FormPackageController@storepackages');
Route::get('packages/editpackages/{id}','FormPackageController@editpackages');
Route::put('packages/updatepackages/{id}','FormPackageController@updatepackages');
Route::get('packages/destroypackages/{id}','FormPackageController@destroypackages');

Route::get('booking/formbooking','FormBookingController@formbooking');
Route::get('booking/addbooking','FormBookingController@createbooking');
Route::post('booking/storebooking','FormBookingController@storebooking');
Route::get('booking/editbooking/{id}','FormBookingController@editbooking');
Route::put('booking/updatebooking/{id}','FormBookingController@updatebooking');
Route::get('booking/destroybooking/{id}','FormBookingController@destroybooking');

// Route::get('layout/admin', function(){
//     return view('admin/layout/admin');
// });

// =================== F R O N T  C O N T R O L L E R ===================

