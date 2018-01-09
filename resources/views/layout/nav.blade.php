<div class="Navigation" id="Navigation">
	<ul class="Navigation_name">
		<li><a class="nav_on" id="mynav1"  href="/"><span>首页</span></a></li>
		@foreach($category as $key => $val)
		<li><a class="nav_on" id="mynav{{$key+2}}"  href="/list?cate={{$val->category_id}}" target="_blank"><span>{{$val->category_name}}</span></a></li>
		@endforeach
		<li><a class="nav_on" id="mynav8"  href="/group"><span>今日团购</span></a></li>
		<li><a class="nav_on" id="mynav8"  href="#"><span>联系我们</span></a></li>
	</ul>			 
</div>
<script>$("#Navigation").slide({titCell:".Navigation_name li"});</script>
<!--购物车-->	

<div class="hd_Shopping_list" id="Shopping_list">
	<div class="s_cart"><em></em><a href="shopping_cart.html">我的购物车</a> <i class="ci-right">&gt;</i><i class="ci-count" id="shopping-amount">0</i></div>
	<div class="dorpdown-layer">
		<div class="spacer"></div>
		<!--<div class="prompt"></div><div class="nogoods"><b></b>购物车中还没有商品，赶紧选购吧！</div>-->
		<ul class="p_s_list">	   
			<li>
				<div class="img"><img src="images/tianma.png"></div>
				<div class="content"><p><a href="#">产品名称</a></p><p>颜色分类:紫花8255尺码:XL</p></div>
				<div class="Operations">
					<p class="Price">￥55.00</p>
					<p><a href="#">删除</a></p></div>
				</li>
			</ul>		
			<div class="Shopping_style">
				<div class="p-total">共<b>1</b>件商品　共计<strong>￥ 515.00</strong></div>
				<a href="shopping_cart.html" title="去购物车结算" id="btn-payforgoods" class="Shopping">去购物车结算</a>
			</div>	 
		</div>	
	</div>