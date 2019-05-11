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
    return view('welcome');
});

Route::get('auth/login', 'AuthController@login');
Route::post('loginPost', 'AuthController@loginPost');
Route::get('logout', 'AuthController@logout');
Route::get('layout/admin', 'AuthController@index');


Route::get('customer/form','FormCustomerController@form');
Route::get('customer/add','FormCustomerController@create');
Route::post('customer/store','FormCustomerController@store');
Route::get('customer/edit/{id}','FormCustomerController@edit');
Route::post('customer/update/{id}','FormCustomerController@update');
Route::get('customer/destroy/{id}','FormCustomerController@destroy');


// Route::get('front/auth/login', 'AuthCustomerController@login');
// Route::post('front/loginPost', 'AuthCustomerController@loginPost');
// Route::get('auth/register', 'AuthCustomerController@register');
// Route::post('/registerPost', 'AuthCustomerController@registerPost');
// Route::get('front/logout', 'AuthCustomerController@logout');


// Route::get('layout/admin', function(){
//     return view('admin/layout/admin');
// });