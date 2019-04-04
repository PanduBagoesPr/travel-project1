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
Route::get('auth/register', 'AuthController@register');
Route::post('registerPost', 'AuthController@registerPost');
Route::get('logout', 'AuthController@logout');

Route::get('layout/admin', function(){
    return view('admin/layout/admin');
});