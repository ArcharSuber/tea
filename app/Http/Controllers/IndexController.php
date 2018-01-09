<?php
namespace App\Http\Controllers;

use App\Http\Products\Category;
use App\Http\Products\Goods;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{

	//产品首页

    //产品首页
    public function index(Request $request, $id = 0)
    {
    		//获取品种
            $breed = Category::getBreed($id);
	        //热销产品
	        $hotProduct=Goods::getHotOfGoods($id);
	        //推荐产品
	        $bestProduct=Goods::getBestOfGoods($id);
	        //限时产品
	        $seckillProduct=Goods::getSeckillOfGoods($id);	        
	        //新上架产品
	        $newProduct=Goods::getNewOfGoods($id);
	        //当前时间戳
	        $time=time();
	        //获取茶系列加载数据
	        $goods=Goods::getCateGoods($id);
	        //获取茶具系列加载数据
	        $teaset=Goods::getTeaSet();
            return view("index/index", compact('breed','hotProduct','bestProduct','newProduct','seckillProduct','time','goods','teaset'));
    }
    //渲染搜索视图
    public function search(){
    	//验证
    	$this->validate(request(),[
    		'key'=>'required'
    	]);
    	//接收关键字
    	$key=request('key');
    	//进行分页查询
    	$result=Goods::search($key)->paginate(8);
    	$time=time();
    	return view("index/search",compact('result','time'));

    }
    //视图加载数据
     public function searchData(){
    	//验证
    	$this->validate(request(),[
    		'key'=>'required'
    	]);
    	//接收关键字
    	$key=request('key');
    	//进行分页查询
    	$result=Goods::search($key)->paginate(8);
    	$time=time();
    	return ['data'=>$result,'time'=>time()];
    }

    //产品列表

    function list($id=0) {
    	$type=request('type');
    	$price=request('price');
    	$cate=request('cate');
    	$result=null;
    	if(!empty($type) && intval($type)){
    		//查询茶  还是 茶具
    		$result=Goods::getTypeOfGoods($type);
    	}
    	if(!empty($price) && intval($price)){
    		//根据价格查询
    		$price=Goods::getOneOfPrice($price);
    		$result=Goods::getOneOfGoodsByPrice($price);
    	}
    	if(!empty($cate) && intval($cate)){
    		//根据分类查询
    		$result=Goods::getAllOfGoodsByOneCate($cate);
    	}
    	//dd($result);
    	//获取品种
        $breed = Category::getBreed($id);
        //获取商品的品牌
        $brand=Goods::getAllBrandOfGoods();
        //获取茶类型下的属性
        $attributes=Goods::getAllAttributeOfGoods(1);
        dd($attributes);
        //推荐产品
	    $bestProduct=Goods::getBestOfGoods($id);
	    if(is_null($result)){
	    	exit('您跑调了错，从新来吧');
	    }
        return view("index/list",compact('breed','bestProduct'));
    }

    
}
