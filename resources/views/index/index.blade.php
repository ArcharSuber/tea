@include("layout.top")
<!--logo和搜索样式-->
@include("layout.search")
<!--导航栏样式-->
<div id="Menu" class="clearfix">
  <div class="Menu_style">
   <div id="allSortOuterbox">
    <div class="Category"><a href="#" class="Menu_img"><em></em></a></div>
    <div class="hd_allsort_out_box_new">
     <!--左侧栏目开始-->
     <div class="Menu_list">
      <div class="menu_title">茶叶品种</div>
      @foreach($breed as $value)
      <a href="/index/list?cate={{$value->category_id}}" target="_blank">{{$value->category_name}}</a>
      @endforeach
    </div>
    <div class="Menu_list">
      <div class="menu_title">茶叶价格</div>
      @foreach($productsPrice as $price)
      <a href="/index/list?price={{$price->p_id}}" target="_blank">{{$price->price}}</a>
      @endforeach
    </div>

    <div class="Menu_list">
      <div class="menu_title">推荐茶叶</div>
      <ul class="recommend">
           @foreach($bestProduct as $val)
           <li><a href="/desc?goods={{$val->goods_id}}" title="{{$val->goods_name}}" target="_blank">
            {{mb_substr($val->goods_name,0,11)}}
           @if(mb_strlen($val->goods_name)>11)
              ...
           @endif
          </a></li>
           @endforeach
     </ul>
   </div>

 </div>

</div>

@include("layout.nav")

</div>
</div>
<!--幻灯片样式-->
<div class="Plates"  id="mian">
  <div class="bottom_style clearfix">
    <div class="image_display">
      <!--幻灯片样式-->
      <div class="slider">
       <div id="slideBox" class="slideBox">
        <div class="hd">
          <ul></ul>
        </div>
        <div class="bd">
          <ul>
            <li><a href="#" target="_blank"><img src="images/ad-1.png"/></a></li>
            <li><a href="#" target="_blank"><img src="images/ad-3.jpg" /></a></li>
          </ul>
        </div>
        <a class="prev" href="javascript:void(0)"></a>
        <a class="next" href="javascript:void(0)"></a>
      </div>
      <script type="text/javascript">
        jQuery(".slideBox").slide({titCell:".hd ul",mainCell:".bd ul",autoPlay:true,autoPage:true,interTime:9000});
      </script>
    </div>
  </div>
</div>
<!--内容样式-->
<div class="Selling_list">
 <div id="slideBox_list" class="slideBox_list">
   <div class="hd">
    <span class="arrow"><a class="next"></a><a class="prev"></a></span>
    <ul><li><a href="#">热销产品</a></li><li><a href="#">新品推荐</a></li><li><a href="#">限时促销</a></li></ul>
  </div>
  <div class="bd">
   <ul>
    @foreach($hotProduct as $hot)
     <li class="s_Products">
      <div class="Products_list_name">
       <div class="img center"><a href="/desc?goods={{$hot->goods_id}}" target="_blank"><img src="Products/2.jpg" /></a></div>
       <div class="title_name"><a href="/desc?goods={{$hot->goods_id}}" target="_blank">{{$hot->goods_name}}</a></div>
       <div class="s_Price clearfix">
         <span class="Current_price">商城价<em>￥{{$hot->shop_price}}</em></span>
         <span class="Original_Price">原价&nbsp;<em>{{$hot->market_price}}</em></span>
       </div>
       <div class="p_comment">已有<a href="#">{{$hot->comments_count}}</a>人评论</div>
     </div>
   </li>
   @endforeach
 </ul>
 <ul>
    @foreach($newProduct as $new)
   <li class="s_Products">
     <em class="icon_new"></em>
     <div class="Products_list_name">
       <div class="img center"><a href="/desc?goods={{$new->goods_id}}" target="_blank"><img src="Products/2.jpg" /></a></div>
       <div class="title_name"><a href="/desc?goods={{$new->goods_id}}" target="_blank">{{$new->goods_name}}</a></div>
       <div class="s_Price clearfix">
         <span class="Current_price">商城价<em>￥{{$new->shop_price}}</em></span>
         <span class="Original_Price">原价&nbsp;<em>{{$new->market_price}}</em></span>
       </div>
       <div class="p_comment">已有<a href="#">{{$new->comments_count}}</a>人评论</div>
     </div>
   </li>
    @endforeach
 </ul>
 <ul>
    @foreach($seckillProduct as $seckill)
   <li class="s_Products">
    <div class="Products_list_name">
     <div class="img center"><a href="/desc?goods={{$seckill->goods_id}}" target="_blank"><img src="Products/2.jpg" /></a></div>
     <div class="title_name"><a href="/desc?goods={{$seckill->goods_id}}" target="_blank">{{$seckill->goods_name}}</a></div>
     <div class="s_Price clearfix">
       <span class="Current_price">商城价<em>￥{{$seckill->shop_price}}</em></span>
       <span class="Original_Price">原价&nbsp;<em>{{$seckill->market_price}}</em></span>
     </div>
     <div class="times" id="showStartTime_{{$seckill->goods_id}}"></div>
     <input type="hidden" id="showtimekill_{{$seckill->goods_id}}" value="{{$seckill->stop_time-$time}}">
     <script type="text/javascript">
        setInterval("set_time("+{{$seckill->goods_id}}+")",1000);
    </script>
   </div>
 </li>
  @endforeach
</ul>
</div>
<script>
   function set_time($id){
        var data=parseInt($("#showtimekill_"+$id).val());
        console.log(data)
        var day=Math.floor(data/3600/24)<10?'0'+Math.floor(data/3600/24):Math.floor(data/3600/24);
        var hours=Math.floor(data/3600%24)<10?'0'+Math.floor(data/3600%24):Math.floor(data/3600%24);
        var minutes=Math.floor(data%3600/60)<10?'0'+Math.floor(data%3600/60):Math.floor(data%3600/60);
        var seconds=(data%60)<10?'0'+(data%60):(data%60);
        $("#showStartTime_"+$id).html("剩余时间："+day+"天"+hours+"时"+minutes+"分"+seconds+"秒");
        data--;
        $("#showtimekill_"+$id).val(data);

    }
</script>
</div>
<script type="text/javascript">jQuery(".slideBox_list").slide();</script>
</div>
<!--产品版块-->
<div class="Area">
 <div class="Area_title">
   <div class="name"><em class="icon_title"></em>茶系列</div>
   <div class="right">
     <span class="more"><a href="/index/list?type=1" target="_blank">更多《</a></span>
   </div>
 </div>
 <div class="Area_list clearfix">
  <div class="Area_ad">
    <a href="#"><img src="images/AD-02.jpg" /></a>
    <a href="#"><img src="images/AD-01.jpg" /></a>
  </div>
  <div class="Area_p_list">
    <ul>
      @foreach($goods as $tea)
    <li class="s_Products">
      <div class="Area_product_c">
        <div class="img center"><a href="/desc?goods={{$tea->goods_id}}" target="_blank"><img src="Products/8.jpg" /></a></div>
        <div class="title_name"><a href="/desc?goods={{$tea->goods_id}}" target="_blank">{{$tea->goods_name}}</a></div>
        <div class="s_Price clearfix">
         <span class="Current_price">商城价<em>￥{{$tea->shop_price}}</em></span>
         <span class="Original_Price">原价&nbsp;<em>{{$tea->market_price}}</em></span>
       </div>
     </div>
    </li>
    @endforeach
</ul>
</div>
</div>
</div>
<!--产品版块-->
<div class="Area">
 <div class="Area_title">
   <div class="name"><em class="icon_title"></em>茶具系列</div>
   <div class="right">
     <span class="more"><a href="/index/list?type=2" target="_blank">更多《</a></span>
   </div>
 </div>
 <div class="Area_list clearfix">
  <div class="Area_ad">
    <a href="#"><img src="images/AD-05.jpg" /></a>
    <a href="#"><img src="images/AD-06.jpg" /></a>
  </div>
  <div class="Area_p_list">
    <ul>
      @foreach($teaset as $set)
     <li class="s_Products">
      <div class="Area_product_c">
        <div class="img center"><a href="/desc?goods={{$set->goods_id}}" target="_blank"><img src="Products/14.jpg" /></a></div>
        <div class="title_name"><a href="/desc?goods={{$set->goods_id}}" target="_blank">{{$set->goods_name}}</a></div>
        <div class="s_Price clearfix">
         <span class="Current_price">商城价<em>￥{{$set->shop_price}}</em></span>
         <span class="Original_Price">原价&nbsp;<em>{{$set->market_price}}</em></span>
       </div>
     </div>
    </li>
    @endforeach
</ul>
</div>
</div>
</div>
<!--信息内容样式-->
<div class="bs_info_area clearfix">
 <!--百科知识-->
 <div class="know_how left">
  <div class="title_name"><em class="title_icon"></em>茶叶百科  <a href="">更多》</a></div>
  <div class="info_content">
   <uL>
    @foreach($titleA as $a)
    <li><em class="info_icon"></em><a href="#">{{$a->title}}</a></li>
    @endforeach
  </uL>
</div>
</div>
<!--巴山雀舌信息-->
<div class="info_about left">
 <div class="title_name"><em class="title_icon"></em>巴山介绍 <a href="#">查看详细》</a></div>
 <div class="info_content bs_about">
  <img src="images/logo_img_03.png" />
  巴山雀舌，品种：绿茶，产于四川省万源市，境内环境优美，土壤、气候特别适宜茶树生长，茶叶自然品质好，并天然富硒。巴山雀舌系采用其茶树的 高档原料精心制作而成，其品质特征外形扁平匀直，绿润带毫。经水冲泡叶底嫩绿明亮，香气鲜嫩持久，滋味醇爽回甘，汤色嫩绿明亮。<br />
  茶叶以富含硒而出名，抗氧化能力强，能清除水中污染毒素，故具有延缓衰老，防癌抗癌，抗高血压，防止色素堆积，增强机体活力，防辐射等作用。
  巴山雀舌”先后获得国家省部级以上奖项达60余次,产品曾先后获得“中国文化名茶”、“四川省十大名茶”、“四川省名牌产品”...
</div>
</div>
<!--新闻中心-->
<div class="mews right">
 <div class="title_name"><em class="title_icon"></em>文化底蕴<a href="#">更多》</a></div>
 <div class="info_content news">
  <ul>
    @foreach($titleB as $b)
   <li><a href="#">
    {{mb_substr($b->title,0,20)}}
    @if(mb_strlen($b->title)>20)
    ...
    @endif
   </a></li>
   @endforeach
 </ul>
</div>
</div>
</div>
@include("layout.friend")
</div>
<!--底部样式-->
@include("layout.footer")
<!--右侧菜单栏购物车样式-->
@include("layout.right")
</body>
</html>
