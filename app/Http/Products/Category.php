<?php
namespace App\Http\Products;

use App\Model;
use Illuminate\Support\Facades\DB;

class Category extends Model
{
	protected $table = 'category';

	//获取顶层的分类
	public static function getTopOfCategory()
	{
		return self::where('parent_id', 0)->get();
	}

	//获取二级分类-品种的信息
	public static function getBreed($id)
	{
		if(empty($id)){
			return self::whereNotIn('parent_id', [$id])->limit(8)->get();
		}
		return self::where('parent_id', $id)->get();
	}
	
	//获取商品的搜索价格范围
	public static function getGoodsSearchPrice()
	{
		return DB::table('search_price')->where('is_show', 1)->get();
	}
}
