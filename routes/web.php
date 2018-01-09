<?php

//登录
Route::get('/login', '\App\Http\Controllers\LoginController@index');
//注册
Route::get('/register', '\App\Http\Controllers\RegisterController@index');

//商品首页
Route::get('/', '\App\Http\Controllers\IndexController@index');
Route::get('/{id}', '\App\Http\Controllers\IndexController@index')->where('id', '\d+');
Route::get('/search','\App\Http\Controllers\IndexController@search');
Route::any('/searchData','\App\Http\Controllers\IndexController@searchData');
Route::get('/list', '\App\Http\Controllers\IndexController@list');

//商品模块
Route::get('/desc', '\App\Http\Controllers\GoodsController@index');

//用户模块
//用户中心
Route::get('/user', '\App\Http\Controllers\UserController@index');
//用户个人信息设置
Route::get('/userinfo', '\App\Http\Controllers\UserController@info');
//用户修改密码
Route::get('/userpwd', '\App\Http\Controllers\UserController@password');
//用户收藏
Route::get('/usercollect', '\App\Http\Controllers\UserController@collect');
//用户积分
Route::get('/userintegral', '\App\Http\Controllers\UserController@integral');
//用户收货地址
Route::get('/useraddress', '\App\Http\Controllers\UserController@address');
//用户订单
Route::get('/userorder', '\App\Http\Controllers\UserController@order');

//支付模块

//购物车模块

Route::get('/shopcar','\App\Http\Controllers\CarController@index');
//同步购物车
Route::get('/dataSync','\App\Http\Controllers\CarController@dataSync')->name('car.dataSync');


//团购模块
Route::get('/group', '\App\Http\Controllers\GroupController@index');
