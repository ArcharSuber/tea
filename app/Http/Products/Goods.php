<?php
namespace App\Http\Products;

use App\Model;
use Laravel\Scout\Searchable;
use Illuminate\Support\Facades\DB;
use App\Http\Products\Comment;
use App\Http\Products\Category;
class Goods extends Model
{
	use Searchable;
	protected $table = 'goods';

	//定义索引里的type类型
	public function searchableAs(){
		return 'goods';
	}
	//定义有那些字段需要搜索
	public function toSearchableArray(){
		return [
			'goods_id'=>$this->goods_id,
			'goods_name'=>$this->goods_name,
			'shop_price'=>$this->shop_price,
			'market_price'=>$this->market_price
		];
	}
	//定义主键
	public function getKeyName(){
		return 'goods_id';
	}
	//获取热销产品 5条
	public static function getHotOfGoods($id)
	{
		if(empty($id)){
			return self::where('is_delete',0)->where('status',1)->where('is_hot',1)->where('goods_type',1)->orderBy('created_at','desc')->withCount('comments')->limit(5)->get();
		}
		return self::where('is_delete',0)->where('status',1)->where('is_hot',1)->where('category_id',$id)->where('goods_type',1)->orderBy('created_at','desc')->withCount('comments')->limit(5)->get();
	}

	//获取商品的评论
	public function comments(){
		return $this->hasMany(Comment::class, 'goods_id', 'goods_id')->orderBy('commenttime', 'desc');
	}

	//获取推荐产品 4条
	public static function getBestOfGoods($id){
		if(empty($id)){
			return self::where('is_delete',0)->where('status',1)->where('is_best',1)->where('goods_type',1)->orderBy('created_at','desc')->limit(4)->get();
		}
		return self::where('is_delete',0)->where('status',1)->where('is_best',1)->where('goods_type',1)->where('category_id',$id)->orderBy('created_at','desc')->limit(4)->get();
	}

	//获取限时抢购的产品 5条
	public static function getSeckillOfGoods($id){
		if(empty($id)){
			return self::where('is_delete',0)->where('status',1)->where('is_seckill',1)->where('goods_type',1)->where('stop_time','>',time())->where('start_time','<',time())->orderBy('created_at','desc')->limit(5)->get();
		}
		return self::where('is_delete',0)->where('status',1)->where('is_seckill',1)->where('category_id',$id)->where('stop_time','>',time())->where('goods_type',1)->where('start_time','<',time())->orderBy('created_at','desc')->limit(5)->get();
	}

	//获取最新的产品 5条
	public static function getNewOfGoods($id){
		if(empty($id)){
			return self::where('is_delete',0)->where('status',1)->where('is_new',1)->where('goods_type',1)->withCount('comments')->orderBy('created_at','desc')->limit(5)->get();
		}
		return self::where('is_delete',0)->where('status',1)->where('is_new',1)->where('category_id',$id)->where('goods_type',1)->withCount('comments')->orderBy('created_at','desc')->limit(5)->get();
	}
	//获取加载数据 8条
	public static function getCateGoods($id){
		if(empty($id)){
			return self::where('is_delete',0)->where('status',1)->where('goods_type',1)->orderBy('created_at','desc')->limit(8)->get();
		}
		return self::where('is_delete',0)->where('status',1)->where('goods_type',1)->where('category_id',$id)->orderBy('created_at','desc')->limit(8)->get();
	}
	//获取茶具数据 8条
	public static function getTeaSet(){
		return self::where('is_delete',0)->where('status',1)->where('goods_type',2)->limit(8)->get();
	}
	//获取根据类型获取数据
	public static function getTypeOfGoods($type){
		switch($type){
			case 1:
				return self::getAllCateOfGoods();
			case 2:
				return self::getAllSetOfGoods();
			default:
				return null;
		}
	}
	//获取所有的茶的信息
	public static function getAllCateOfGoods(){
		return self::where('is_delete',0)->where('status',1)->where('goods_type',1)->get();
	}
	//获取所有的茶具信息
	public static function getAllSetOfGoods(){
		return self::where('is_delete',0)->where('status',1)->where('goods_type',2)->get();
	}
	//根据价格id查询价格范围
	public static function getOneOfPrice($price){
		$price=DB::table('search_price')->where('p_id',$price)->first();
		return $price->price;
	}
	//根据价格范围查询数据
	public static function getOneOfGoodsByPrice($price){
		if(strrpos($price,"-")){
			$arr=explode("-",$price);
			$result=self::where('is_delete',0)->where('status',1)->where('goods_type',1)->whereBetween('shop_price',$arr)->get();
		}
		if(strrpos($price,"以下")){
			$result=self::where('is_delete',0)->where('status',1)->where('goods_type',1)->where('shop_price','<',intval($price))->get();
		}
		if(strrpos($price,"以上")){
			$result=self::where('is_delete',0)->where('status',1)->where('goods_type',1)->where('shop_price','>',intval($price))->get();
		}
		return $result;
	}
	//根据分类id查出所有的茶数据
	public static function getAllOfGoodsByOneCate($cate){
		return self::where('is_delete',0)->where('status',1)->where('goods_type',1)->where('category_id',$cate)->withCount('comments')->orderBy('created_at','desc')->get();
	}
	//查询所有的品牌
	public static function getAllBrandOfGoods(){
		return DB::table('brand')->where('is_show',1)->orderBy('sort','desc')->get();
	}
	//获取类型下的属性
	public static function getAllAttributeOfGoods($type){
		DB::table('attribute')->where('type_id',$type);
	}
}
