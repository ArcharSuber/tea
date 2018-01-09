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

//团购模块
Route::get('/group','\App\Http\Controllers\GroupController@index');
//验证码路由
Route::get('captcha/{tmp}','CodeController@captcha');
//验证码控制器
// Route::get('/code','\App\Http\Controllers\CodeController@captcha');
Route::any('/registeradd','\App\Http\Controllers\RegisterController@add');
//确认验证码规则
Route::get('/yan','\App\Http\Controllers\CodeController@yan');
//短信验证接口
Route::any('/message','\App\Http\Controllers\MessageController@index');
//快速注册路由
Route::any("/sudo",'\App\Http\Controllers\RegisterController@sudo');
//登录判断路由
Route::any("/list",'\App\Http\Controllers\LoginController@panduan');
//用户退出路由
Route::any("/loginout",'\App\Http\Controllers\LoginController@loginout');
//判断手机号是否存在
Route::any("/phone",'\App\Http\Controllers\RegisterController@phone');
//qq登录
Route::get('/qqCallback','\App\Http\Controllers\LoginController@qqlogin');
//qq
Route::get('/qq','\App\Http\Controllers\LoginController@qq');

//同步购物车
Route::get('/dataSync','\App\Http\Controllers\CarController@dataSync')->name('car.dataSync');




