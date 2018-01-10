<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Products\Goods;
use App\Http\Products\Category;

class GoodsController extends Controller
{
	//购物车
    public function index($id=0){
        
    	//获取品种
        $breed = Category::getBreed($id);
        //推荐产品
	    $bestProduct=Goods::getBestOfGoods($id);
    	return view("goods/index",compact('breed','bestProduct'));
    	
    }
   
}