<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
	//注册首页
    public function index(){
        
    	return view("login/login");
    	//return view("layout/main");
    }
    
    
}