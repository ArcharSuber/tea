<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
	//注册首页
    public function index(){
        
    	return view("register/register");
    	//return view("layout/main");
    }
    
    
}