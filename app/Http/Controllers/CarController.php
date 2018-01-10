<?php
namespace App\Http\Controllers;

use Cookie;
use App\ShopCar;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CarController extends Controller
{
	//购物车
    public function index(){
        
    	return view("shopcar/car");
    	
    }

    public function dataSync(){
		$shopcar = Cookie::get('car');//获取前台购物车Cookie信息

		if($shopcar){
			$shopcar = json_decode($shopcar,true);
			
			foreach($shopcar as $key => $val){
				$product = DB::table('products')->where('goods_attr',$val['attr_id'])->first();
				
				$db = new ShopCar();
				$db->user_id = 1;
				$db->goods_id = $val['goodsid'];
				$db->product_id = $product->product_id;
				$db->number = $val['num'];
				$db->attr = $val['attr'];
				$db->save();
			}
		}
    }
}