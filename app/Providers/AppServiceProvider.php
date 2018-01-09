<?php
namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
//use Illuminate\Support\Facades\View;
use App\Http\Products\Category;
use App\Http\Products\Article;
use Illuminate\Support\Facades\DB;

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

        view()->share('category',$category);
        view()->share('productsPrice',$productsPrice);
        view()->share('friendsLink',$friendsLink);
        view()->share('titleA',$titleA);
        view()->share('titleB',$titleB);
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
