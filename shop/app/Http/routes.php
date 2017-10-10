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
Route::get('admin/goods',function (){
    return view('admin/goods');
});
Route::get('admin/cates','Admin\CategoryController@cates');
Route::get('admin/buttons',function (){
    return view('admin/buttons');
});
Route::get('admin/orders',function (){
    return view('admin/orders');
});
Route::get('admin/recycle',function (){
    return view('admin/recycle');
});
Route::get('admin/userlist',function (){
    return view('admin/userlist');
});
Route::get('admin/useradd',function (){
    return view('admin/useradd');
});
Route::get('admin/userrank',function (){
    return view('admin/userrank');
});
Route::get('admin/usermsg',function (){
    return view('admin/usermsg');
});
Route::get('admin/basicset',function (){
    return view('admin/basicset');
});
Route::get('admin/adminlist',function (){
    return view('admin/adminlist');
});
//后台操作数据库
Route::get('admin/addcate','Admin\CategoryController@add');
Route::post('admin/addcate','Admin\CategoryController@addPost');
