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
    return view('home/home');
});

Route::get('admin/index', function () {
    return view('admin/Index/index');
});

// 后台注册路由
Route::get('admin/register','Admin\UsersController@getregister');
Route::post('admin/register','Admin\UsersController@postregister');

// 后台登录登出路由
Route::get('admin/login','Admin\AuthController@getlogin');
Route::post('admin/login','Admin\AuthController@postlogin');

Route::get('auth/logout','Admin\UsersController@getlogout');

// 栏目管理
Route::get('admin/cate', 'Admin\CateController@index');
Route::get('admin/cate_list', 'Admin\CateController@cate_list');
