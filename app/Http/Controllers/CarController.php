<?php
namespace App\Http\Controllers;

use Cookie;
use App\ShopCar;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CarController extends Controller
{
	//购物车展示
    public function index(){
    	return view("shopcar/car");
    }

    //购物车添加
    public function add(Request $request){
    	$shopcar = $request->all();//添加到购物车的数据
    	//var_dump($shopcar);die;
    	$user_id = Cookie::get('user');//登录用户的Cookie值
    	$product = DB::table('products')->where([['goods_attr',$shopcar['attr_id']],['goods_id',$shopcar['goodsid']]])->first();


    	if(!$res = ShopCar::where([['user_id',$user_id],['goods_id',$shopcar['goodsid']],['product_id',$product->product_id]])->count()){
			$db = new ShopCar();
			$db->user_id = $user_id;
			$db->goods_id = $shopcar['goodsid'];
			$db->product_id = $product->product_id;
			$db->number = $shopcar['num'];
			$db->attr = $shopcar['attr'];
			$db->save();
    	}else{
    		$res = ShopCar::where([['user_id',$user_id],['goods_id',$shopcar['goodsid']],['product_id',$product->product_id]])->first()->toArray();
    		$carinfo = ShopCar::find($res['id']);
    		$carinfo->number = $carinfo['number'] + $shopcar['num'];
    		$carinfo->save();
    	}
    	
    	$count = ShopCar::where('user_id',$user_id)->count();

    	return json_encode(['count' => $count]);
    }

    //购物车数据同步
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

    //购物车数据查询
    public function show(){
    	$user_id = Cookie::get('user');//登录用户的Cookie值

    	$car = DB::table('shopcar')->where('user_id',$user_id)
    						->join('goods','shopcar.goods_id','=','goods.goods_id')
    						->join('products','shopcar.product_id','=','products.product_id')
    						->select('shopcar.goods_id','goods.goods_name','goods.goods_img','goods.market_price','goods.shop_price','shopcar.number','products.goods_attr','shopcar.attr')
    						->get();
    	return json_encode($car);
    }

    //购物车数量修改
    public function edit(Request $request){
    	$data = $request->all();
    	$user_id = Cookie::get('user');//登录用户的Cookie值
    	$product = DB::table('products')->where([['goods_attr',$data['attr_id']],['goods_id',$data['goodsid']]])->first();

    	$carinfo = ShopCar::where([['user_id',$user_id],['goods_id',$data['goodsid']],['product_id',$product->product_id]])->first();
    	if($data['number'] == -1 || $data['number'] == 1){
    		$carinfo->number = $carinfo['number'] + $data['number'];
    	}else{
    		$carinfo->number = $data['number'];
    	}
    	$carinfo->save();
    }

    //购物车单条删除
    public function delete(Request $request){
    	$data = $request->all();
    	$user_id = Cookie::get('user');//登录用户的Cookie值
    	$product = DB::table('products')->where([['goods_attr',$data['attr_id']],['goods_id',$data['goodsid']]])->first();

    	ShopCar::where([['user_id',$user_id],['goods_id',$data['goodsid']],['product_id',$product->product_id]])->delete();

    	$count = ShopCar::where('user_id',$user_id)->count();

    	return json_encode(['count' => $count]);
    }

    //购物车数量查询
    public function count(){
    	$user_id = Cookie::get('user');//登录用户的Cookie值
    	$count = ShopCar::where('user_id',$user_id)->count();

    	return json_encode(['count' => $count]);
    }
}