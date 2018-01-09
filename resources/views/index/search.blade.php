@include("layout.top")
<!--logo和搜索样式-->
@include("layout.search")
<!--导航栏样式-->


<!--幻灯片样式-->
<div class="Plates"  id="mian">
  </div>
</div>
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
<input type="hidden" id="key" value="{{request('key')}}">
<div sytle="display:none" id="show_hide">
  <script type="text/javascript">
      setInterval("set_time(0)",1000);
  </script>
</div>
<!--产品版块-->
<div class="Area">
 <div class="Area_list clearfix">
  <div class="Area_p_list">
    <ul id="productlist">
      @foreach($result as $tea)
      @if(!$tea->is_delete)
        @if(!$tea->is_seckill)
      <li class="s_Products">
        <div class="Area_product_c">
          <div class="img center"><a href="#"><img src="Products/8.jpg" /></a></div>
          <div class="title_name"><a href="#">{{$tea->goods_name}}</a></div>
          <div class="s_Price clearfix">
           <span class="Current_price">商城价<em>￥{{$tea->shop_price}}</em></span>
           <span class="Original_Price">原价&nbsp;<em>{{$tea->market_price}}</em></span>
         </div>
       </div>
      </li>
      @elseif($tea->stop_time-$time>0)
           <li class="s_Products">
            <div class="Products_list_name">
             <div class="img center"><a href="#"><img src="Products/2.jpg" /></a></div>
             <div class="title_name"><a href="#">{{$tea->goods_name}}</a></div>
             <div class="s_Price clearfix">
               <span class="Current_price">商城价<em>￥{{$tea->shop_price}}</em></span>
               <span class="Original_Price">原价&nbsp;<em>{{$tea->market_price}}</em></span>
             </div>
             <div class="times" id="showStartTime_{{$tea->goods_id}}"></div>
             <input type="hidden" id="showtimekill_{{$tea->goods_id}}" value="{{$tea->stop_time-$time}}">
             <script type="text/javascript">
                setInterval("set_time("+{{$tea->goods_id}}+")",1000);
            </script>
           </div>
         </li>
        @endif
      @endif
    @endforeach
</ul>
</div>
</div>
</div>
</div>
<!--底部样式-->
@include("layout.footer")
<!--右侧菜单栏购物车样式-->
@include("layout.right")
</body>
<script>
    var page = 1;//加载的索引
    var isload = false;//设置是否终止滚动加载 
    var curScrollHeight = 0;//当前滚动位置
    var curCount = 1;//计数器，防止滚动时重复执行加载下一页
    $(window).scroll(function () {
        var pageHeight = $(document).height();
        var showHeight = $(window).height();
        var scrollHeight = $(window).scrollTop(); 
        if (curScrollHeight - scrollHeight < 10 && curScrollHeight>0) { 
            if (curCount == 1) {
                page += 1;
                if(isload==false){
                  loadproducts(page); //加载新数据
                }  
            } 
            curCount++; //加载下一页后计数器+1
        }
        if (curScrollHeight < scrollHeight) { 
            curScrollHeight = pageHeight - showHeight;//滚动到页面底部时，重设当前滚动位置
            curCount = 1;
        } 
    });
    function loadproducts(pageindex) {
        $.ajax({
          headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: "{{url('searchData')}}", 
            data: { "page": pageindex, "key": $("#key").val() },
            type: 'get', 
            dataType: 'json', 
            timeout: 10000,
            async: false,
            success: function (resultData) {
                if (resultData != null) {
                    var html = "";
                    if (resultData.data.data == '') {
                        isload = true;
                        html = "抱歉，没有更多了！"
                        $("#productlist").append(html);
                    }
                    else { 
                        $.each(resultData.data.data, function (k, v) { 
                            if(!v.is_delete){
                                if(!v.is_seckill){
                                    html+='<li class="s_Products"><div class="Area_product_c"><div class="img center"><a href="#"><img src="Products/8.jpg" /></a></div><div class="title_name"><a href="#">'+v.goods_name+'</a></div><div class="s_Price clearfix"><span class="Current_price">商城价<em>￥'+v.shop_price+'</em></span><span class="Original_Price">原价&nbsp;<em>'+v.market_price+'</em></span></div></div></li>'
                                }else if(v.stop_time-resultData.time>0){
                                      html+='<li class="s_Products"><div class="Products_list_name"><div class="img center"><a href="#"><img src="Products/2.jpg" /></a></div><div class="title_name"><a href="#">'+v.goods_name+'</a></div><div class="s_Price clearfix"><span class="Current_price">商城价<em>￥'+v.shop_price+'</em></span><span class="Original_Price">原价&nbsp;<em>'+v.market_price+'</em></span></div><div class="times" id="showStartTime_'+v.goods_id+'"></div><input type="hidden" id="showtimekill_'+v.goods_id+'" value="'+v.stop_time-resultData.time+'">'+getS(v.goods_id)+'</div></li>'
                                }
                            }
                            $("#productlist").append(html);
                        });
                        if (resultData.data.last_page > pageindex) {
                            isload = true;
                        }
                    }
                }
            }
        });
    }
    function getS(goods){
      $("#show_hide").children().eq(0).html('setInterval("set_time('+goods+')",1000);');
      return $("#show_hide").children().eq(0).clone();
    }
</script>
</html>
