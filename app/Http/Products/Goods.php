<?php
namespace App\Http\Products;

use App\Model;
use Laravel\Scout\Searchable;
use Illuminate\Support\Facades\DB;
use App\Http\Products\Comment;
use App\Http\Products\Category;
use App\Http\Products\Orders;
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
	//获取商品的订单
	public function orders(){
		return $this->hasMany(Orders::class, 'goods_id', 'goods_id');
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
			return self::where('is_delete',0)->where('status',1)->where('goods_type',1)->withCount('comments')->orderBy('created_at','desc')->limit(8)->get();
		}
		return self::where('is_delete',0)->where('status',1)->where('goods_type',1)->where('category_id',$id)->orderBy('created_at','desc')->withCount('comments')->limit(8)->get();
	}
	//获取茶具数据 8条
	public static function getTeaSet(){
		return self::where('is_delete',0)->where('status',1)->where('goods_type',2)->withCount('comments')->limit(8)->get();
	}
	//获取根据类型获取数据
	public static function getTypeOfGoods($type,$order='created_at'){
		switch($type){
			case 1:
				return self::getAllCateOfGoods($order);
			case 2:
				return self::getAllSetOfGoods($order);
			default:
				return null;
		}
	}
	//获取所有茶的信息
	public static function getAllCateOfGoods($order){
		return self::where('is_delete',0)->where('status',1)->where('goods_type',1)->withCount('comments')->orderBy($order,'desc')->get();
	}
	//获取所有茶具信息
	public static function getAllSetOfGoods($order){
		return self::where('is_delete',0)->where('status',1)->where('goods_type',2)->withCount('comments')->orderBy($order,'desc')->get();
	}
	//获取8条茶具信息
	public static function getSetGoods(){
		return self::where('is_delete',0)->where('status',1)->where('goods_type',2)->withCount('comments')->limit(8)->get();
	}
	//根据价格id查询价格范围
	public static function getOneOfPrice($price){
		$price=DB::table('search_price')->where('p_id',$price)->first();
		return $price->price;
	}
	//根据价格范围查询数据
	public static function getOneOfGoodsByPrice($price,$order='created_at'){
		if(strrpos($price,"-")){
			$arr=explode("-",$price);
			$result=self::where('is_delete',0)->where('status',1)->where('goods_type',1)->whereBetween('shop_price',$arr)->withCount('comments')->orderBy($order,'desc')->get();
		}
		if(strrpos($price,"以下")){
			$result=self::where('is_delete',0)->where('status',1)->where('goods_type',1)->where('shop_price','<',intval($price))->withCount('comments')->orderBy($order,'desc')->get();
		}
		if(strrpos($price,"以上")){
			$result=self::where('is_delete',0)->where('status',1)->where('goods_type',1)->withCount('comments')->where('shop_price','>',intval($price))->orderBy($order,'desc')->get();
		}
		return $result;
	}
	//根据价格范围查询数据 并且是新品 is_new
	public static function getOneOfGoodsByPriceByNew($price,$order='created_at'){
		if(strrpos($price,"-")){
			$arr=explode("-",$price);
			$result=self::where('is_delete',0)->where('status',1)->where('goods_type',1)->where('is_new',1)->whereBetween('shop_price',$arr)->withCount('comments')->orderBy($order,'desc')->get();
		}
		if(strrpos($price,"以下")){
			$result=self::where('is_delete',0)->where('status',1)->where('goods_type',1)->where('is_new',1)->where('shop_price','<',intval($price))->withCount('comments')->orderBy($order,'desc')->get();
		}
		if(strrpos($price,"以上")){
			$result=self::where('is_delete',0)->where('status',1)->where('goods_type',1)->where('is_new',1)->where('shop_price','>',intval($price))->withCount('comments')->orderBy($order,'desc')->get();
		}
		return $result;
	}
	//根据价格范围查询数据 并且是销量排序
	public static function getOneOfGoodsByPriceByOrder($price,$order='created_at'){
		if(strrpos($price,"-")){
			$arr=explode("-",$price);
			$result=self::withCount('orders as t')->where('is_delete',0)->where('status',1)->where('goods_type',1)->whereBetween('shop_price',$arr)->withCount('comments')->orderBy('t_count','desc')->get();
		}
		if(strrpos($price,"以下")){
			$result=self::withCount('orders as t')->where('is_delete',0)->where('status',1)->where('goods_type',1)->where('shop_price','<',intval($price))->withCount('comments')->orderBy('t_count','desc')->get();
		}
		if(strrpos($price,"以上")){
			$result=self::withCount('orders as t')->where('is_delete',0)->where('status',1)->where('goods_type',1)->where('shop_price','>',intval($price))->withCount('comments')->orderBy('t_count','desc')->get();
		}
		return $result;
	}
	//根据分类id查出所有的茶数据
	public static function getAllOfGoodsByOneCate($cate,$order='created_at'){
		return self::where('is_delete',0)->where('status',1)->where('goods_type',1)->where('category_id',$cate)->withCount('comments')->orderBy($order,'desc')->get();
	}
	//根据分类id查出所有的茶数据 并且是最新的is_new
	public static function getAllOfGoodsByOneCateByNew($cate){
		return self::where('is_delete',0)->where('status',1)->where('goods_type',1)->where('category_id',$cate)->where('is_new',1)->withCount('comments')->orderBy('created_at','desc')->get();
	}
	//根据分类id查出所有的茶数据 并且是销量排序
	public static function getAllOfGoodsByOneCateByOrder($cate){
		return self::withCount('orders as t')->where('is_delete',0)->where('status',1)->where('goods_type',1)->where('category_id',$cate)->withCount('comments')->orderBy('t_count','desc')->get();
	}
	//查询所有的品牌
	public static function getAllBrandOfGoods(){
		return DB::table('brand')->where('is_show',1)->orderBy('sort','desc')->get();
	}
	//判断是否为顶级分类
	public static function isTopOfCate($cate){
		$res=DB::table('category')->select('parent_id')->where('category_id',$cate)->first();
		if($res->parent_id){
			return false;
		}
		return true;
	}
	//根据品牌获取数据
	public static function getBrandOfGoods($brand,$order='created_at'){
		return self::where('is_delete',0)->where('status',1)->where('brand_id',$brand)->withCount('comments')->orderBy($order,'desc')->get();
	}
	//根据品牌获取最新的数据
	public static function getBrandOfGoodsByNew($brand){
		return self::where('is_delete',0)->where('status',1)->where('brand_id',$brand)->where('is_new',1)->withCount('comments')->orderBy('created_at','desc')->get();
	}
	//根据品牌获取数据  销量排序
	public static function getBrandOfGoodsByOrder($brand){
		return self::withCount('orders as t')->where('is_delete',0)->where('status',1)->where('brand_id',$brand)->where('is_new',1)->withCount('comments')->orderBy('t_count','desc')->get();
	}
}
