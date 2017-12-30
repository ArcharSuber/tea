<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GoodsController extends Controller
{
	//购物车
    public function index(){
        
    	return view("goods/index");
    	
    }
   
}