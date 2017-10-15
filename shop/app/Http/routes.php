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

// Route::get('/', function () {
//     return view('home/home');
// });

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
//商品栏目后台操作数据库
Route::get('admin/addcate','Admin\CategoryController@add');
Route::post('admin/addcate','Admin\CategoryController@addPost');
Route::get('admin/cates','Admin\CategoryController@cates');
Route::get('admin/delcate/{cat_id}','Admin\CategoryController@del');
Route::get('admin/editcate/{cat_id}','Admin\CategoryController@edit');
Route::post('admin/editcate/{cat_id}','Admin\CategoryController@editPost');
//商品后台操作数据库
Route::get('admin/addgood','Admin\GoodsController@add');
Route::post('admin/addgood','Admin\GoodsController@addPost');
Route::get('admin/goods','Admin\GoodsController@goods');
Route::get('admin/delgood/{goods_id}','Admin\GoodsController@del');
Route::get('admin/editgood/{goods_id}','Admin\GoodsController@edit');
Route::post('admin/editgood/{goods_id}','Admin\GoodsController@editPost');



/*
 * 前端路由
 */
//登录注册
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');



// 首页路由
Route::get('/','Home\IndexController@index');

// 商品栏目
Route::get('catlist/{cat_id}','Home\CatController@catlist');

// 商品内容页

Route::get('goods/{goods_id}','Home\GoodsController@goods');








//购物车
Route::get('/addcart/{goods_id}', 'Home\CartController@addCart');
Route::get('/removeitem/{id}', 'Home\CartController@removeItem');
Route::get('/cart', 'Home\CartController@showCart');



//会员中心
Route::get('/member','Home\MemController@index');

//订单类
Route::get('/order','Home\MemController@order');

