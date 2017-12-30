<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
	//用户首页
    public function index(){
        
    	return view("user/center");
    	//return view("layout/main");
    }
    //个人信息设置
    public function info(){
    	return view("user/info");
    }
    //密码设置
    public function password(){
    	return view("user/password");
    }
    //收藏
    public function collect(){
    	return view("user/collect");
    }
    //积分
    public function integral(){
    	return view("user/integral");
    }
    //收货地址
    public function address(){
    	return view("user/address");
    }
    //用户订单
    public function order(){
    	return view("user/order");
    }
    
}