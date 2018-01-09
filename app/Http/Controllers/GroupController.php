<?php
namespace App\Http\Controllers;

use App\Http\Products\Category;
use App\Http\Products\Goods;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GroupController extends Controller
{
	//团购
    public function index($id=0){
    	//获取品种
         $breed = Category::getBreed($id);
         //推荐产品
	     $bestProduct=Goods::getBestOfGoods($id);
    	return view("group/group",compact('breed','bestProduct'));
    }
   
}