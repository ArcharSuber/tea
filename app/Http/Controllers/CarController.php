<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarController extends Controller
{
	//购物车
    public function index(){
        
    	return view("shopcar/car");
    	
    }
   
}