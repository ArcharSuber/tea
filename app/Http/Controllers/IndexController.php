<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
	//产品首页
    public function index(){
        
    	return view("index/index");
    	//return view("layout/main");
    }
    //产品列表
    public function list(){
    	return view("index/list");
    }
    
}