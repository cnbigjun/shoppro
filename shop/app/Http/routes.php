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

Route::get('/', function () {
    return view('welcome');
});

Route::get('admin/index', function () {
    return view('admin/Index/index');
});


Route::get('admin/register','Admin\UsersController@getregister');
Route::post('admin/register','Admin\UsersController@postregister');

Route::get('admin/login','Admin\AuthController@getlogin');
Route::post('admin/login','Admin\AuthController@postlogin');

Route::get('auth/logout','Admin\UsersController@getlogout');
