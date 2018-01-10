<?php
namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
//use Illuminate\Support\Facades\View;
use App\Http\Products\Category;
use App\Http\Products\Article;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Redis;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        //共享顶级分类
        $category=Category::getTopOfCategory();
        //共享搜索价格范围
        $productsPrice=Category::getGoodsSearchPrice();
        //共享友链
        $friendsLink=DB::table('friendlink')->where('is_delete',0)->orderBy('addtime','desc')->get();
        //共享百科标题
        $titleA=Article::getTitle(1);
        //共享底蕴标题
        $titleB=Article::getTitle(2);
        //获取redis中所有的键值
        $keys=Redis::command('keys',['*']);
        $keywords=[];
        //获取key的前缀
        $prefix=Cache::store('redis')->getPrefix();
        //echo $prefix;
        foreach($keys as $val){
            $key=mb_substr($val,mb_strlen($prefix));
            $keywords[$key]=Cache::store('redis')->get($key);
        }
        arsort($keywords);
        $keywords=array_slice($keywords,0,6); //获取前6条
        view()->share('category',$category);
        view()->share('productsPrice',$productsPrice);
        view()->share('friendsLink',$friendsLink);
        view()->share('titleA',$titleA);
        view()->share('titleB',$titleB);
        view()->share('keywords',$keywords);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
