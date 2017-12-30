<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GroupController extends Controller
{
	//购物车
    public function index(){
        
    	return view("group/group");
    	
    }
   
}