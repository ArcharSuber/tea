@include("layout.top")
<!--logo和搜索样式-->
@include("layout.search")
<!--导航栏样式-->
<div id="Menu" class="clearfix">
<div class="Menu_style">
 @include("layout.leftnav")
 @include("layout.nav")

</div>
</div>
<!--内页样式-->
 <div class="Inside_pages">
    <div class="products">
    <!--当前位置（面包屑）-->
     <div class="Location_link">
     <em></em><a href="/list">产品中心</a>  &lt;   <a href="#">巴山雀舌</a>  
     </div>
    <!--筛选条件样式-->
      <div class="products_Select marginbottom">
       <div class="Filter">
  <div class="Filter_list clearfix">
   <div class="Filter_title"><span>品牌：</span></div>
   <div class="Filter_Entire"><a href="#">全部</a></div>
   <div class="p_f_name">
   	@foreach($brand as $brands)
   		@if(request('brand')==$brands->brand_id)
			<a href="?brand={{$brands->brand_id}}" style="background: #ccc">{{$brands->brand_name}}</a>
		@else
			<a href="?brand={{$brands->brand_id}}">{{$brands->brand_name}}</a>
		@endif
	@endforeach  
   </div>
  </div>
 </div>
 </div>
      <!--产品列表列表-->
      <div class="products_list marginbottom">
      <div class="Sorted">
  <div class="Sorted_style" id="order">
   <a href="#order=1" class="on">综合<i class="icon-angle-down"></i></a>
   <a href="#order=2">销量<i class="icon-angle-down"></i></a>
   <a href="#order=3">价格<i class="icon-angle-down"></i></a>
   <a href="#order=4">新品<i class="icon-angle-down"></i></a>
   </div>
 </div>
 <script>
 	$(function(){
 		$("#order").children().click(function(){
 			$(this).addClass('on').siblings().removeClass('on');
 			var order=$(this).attr('href');
 			var order=order.substring(1);
 			var url="{{url('getData')}}"+window.location.search+"&"+order;
 			$.ajax({
 				 headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            	},
            	url:url,
            	type:'get',
            	dataType:'json',
            	success:function(data){
            		if(data.result==''){
            			var html='没有符合您的数据';
            		}else{
            			var html='';
            			$.each(data.result,function(k,v){
            				html+='<li class="gl-item"><div class="Borders"><div class="img"><a href="/desc?goods='+v.goods_id+'"><img src="#" style="width:220px;height:220px"/></a></div><div class="name"><a href="/desc?goods='+v.goods_id+'">'+v.goods_name+'</a></div><div class="Price">商城价：<b>¥'+v.shop_price+'</b><span>原价：<em>'+v.market_price+'</em></span></div><div class="Review">已有<a href="#">'+v.comments_count+'</a>评论</div><div class="p-operate"><a href="#" class="p-o-btn Collect"><em></em>收藏</a><a href="#" class="p-o-btn shop_cart"><em></em>加入购物车</a></div></div></li>';
            			});
            		}
            		$("#products").html(html)
            	}
 			})
 		})
 	});
 </script>
 <!--产品列表样式-->
 <div class="p_list  clearfix">
   <ul id="products">
   	@foreach($result as $goods)
    <li class="gl-item">
	<div class="Borders">
	 <div class="img"><a href="/desc?goods={{$goods->goods_id}}"><img src="#" style="width:220px;height:220px"/></a></div>	 
	 <div class="name"><a href="/desc?goods={{$goods->goods_id}}">{{$goods->goods_name}}</a></div>
     <div class="Price">商城价：<b>¥{{$goods->shop_price}}</b><span>原价：<em>{{$goods->market_price}}</em></span></div>
	 <div class="Review">已有<a href="#">{{$goods->comments_count}}</a>评论</div>
	 <div class="p-operate">
	  <a href="#" class="p-o-btn Collect"><em></em>收藏</a>
	  <a href="#" class="p-o-btn shop_cart"><em></em>加入购物车</a>
	 </div>
	 </div>
	</li>
	@endforeach
   </ul>
 </div>
      </div>
      <!--分页样式-->
    <div class="Paging marginbottom">
    
    </div>
    </div>    
     @include("layout.friend")
</div>
<!--底部样式-->
@include("layout.footer")
 <!--右侧菜单栏购物车样式-->
@include("layout.right")