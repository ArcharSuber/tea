<?php
namespace App\Http\Products;

use App\Model;
use Illuminate\Support\Facades\DB;

class Article extends Model
{
	protected $table = 'article';

	//获取文章的标题（百科 底蕴）
	public static function getTitle($id){
		return self::select('id','title','addtime')->where('status',$id)->limit(8)->get();
	}
}
