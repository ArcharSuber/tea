<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/css.css" rel="stylesheet" type="text/css" />
<link href="css/common.css" rel="stylesheet" tyle="text/css" />
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<script src="js/jquery.min.1.8.2.js" type="text/javascript"></script>
<script src="js/jquery.SuperSlide.2.1.1.js" type="text/javascript"></script>
<script src="js/common_js.js" type="text/javascript"></script>
<script src="js/footer.js" type="text/javascript"></script>
<script src="js/jquery.cookie.js"></script>
<!--[if IE 7]>
<link rel="stylesheet" href="css/font-awesome-ie7.min.css">
<![endif]-->
<title>购物车</title>
</head>
<!--宽度1000的购物车样式-->
<body>
<div id="top">
  <div class="carts">
    <div class="Collection"><em></em><a href="#">收藏我们</a></div>
	<div class="hd_top_manu clearfix">
	  <ul class="clearfix">
	   <li class="hd_menu_tit zhuce" data-addclass="hd_menu_hover">欢迎光临本店！<a href="/login" class="red">[请登录]</a> 新用户<a href="/register" class="red">[免费注册]</a></li>
	   <li class="hd_menu_tit" data-addclass="hd_menu_hover"><a href="/userorder">我的订单</a></li> 
	   <li class="hd_menu_tit" data-addclass="hd_menu_hover"> <a href="/shopcar">购物车(<b>0</b>)</a> </li>
	   <li class="hd_menu_tit" data-addclass="hd_menu_hover"><a href="#">联系我们</a></li>
	   <li class="hd_menu_tit list_name" data-addclass="hd_menu_hover"><a href="#" class="hd_menu">客户服务</a>
	    <div class="hd_menu_list">
		   <ul>
		    <li><a href="#">常见问题</a></li>
			<li><a href="#">在线退换货</a></li>
		    <li><a href="#">在线投诉</a></li>
			<li><a href="#">配送范围</a></li>
		   </ul>
		</div>	   
	   </li>
	  </ul>
	</div>
  </div>
</div>
<div id="shop_cart">
 <div id="header">
  <div class="logo">
  <a href="#"><img src="images/logo.png" /></a>
  <div class="phone">
   免费咨询热线:<span class="telephone">400-3454-343</span>
  </div>
  </div>
  <div class="Search">
    <p><input name="" type="text"  class="text"/><input name="" type="submit" value=""  class="Search_btn"/></p>
	<p class="Words"><a href="#">苹果</a><a href="#">香蕉</a><a href="#">菠萝</a><a href="#">西红柿</a><a href="#">橙子</a><a href="#">苹果</a></p>
 </div>
</div>
<!--提示购物步骤-->

 <div class="prompt_step">
  <img src="images/cart_step_01.png" />
 </div>
 <!--购物车商品-->
 <div class="Shopping_list">
  <div class="title_name">
    <ul>
	<li class="checkbox">&nbsp;</li>
	<li class="name">商品名称</li>
	<li class="name">属性</li>
	<li class="scj">市场价</li>
	<li class="bdj">本店价</li>
	<li class="sl">购买数量</li>
	<li class="xj">小计</li>
	<LI class="cz">操作</LI>
  </ul>
 </div>
  <div class="shopping">
  <form  method="post" action="">
 <table class="table_list">
    <tr class="tr on" id="clone" style="display: none;">
		<td class="checkbox"><input name="checkitems" type="checkbox" value=""/></td>
        <td class="name">
			<div class="img"><a href="#"><img src="" class="goodsimg" /></a></div>
			<div class="p_name">
				<a href="#" class="goodsname">金龙鱼 东北大米 蟹稻共生 盘锦大米5KG</a>
			</div>
	    </td>
	    <td class="attr" attr_id=""></td>
		<td class="scj sp market_price">￥39.50</td>
		<td class="bgj sp shop_price">￥32.40</td>
		<td class="sl">
		    <div class="Numbers">
			  <a href="javascript:void(0);"  class="jian">-</a>
			  <input id="number" name="number" type="text" value="" class="number_text">
			  <a href="javascript:void(0);"  class="jia">+</a>
			</div>
		</td>
		<td class="xj">￥32.40</td>
		<td class="cz">
			<p><a href="javascript:;" class="del">删除</a></p>
		 	<p><a href="#">收藏该商品</a></p>
		</td>
    </tr>
 </table>
 <div class="sp_Operation" style="display: none;">
  <div class="select-all">
  <div class="cart-checkbox"><input type="checkbox"   id="CheckedAll" name="toggle-checkboxes" class="jdcheckbox" clstag="clickcart">全选</div>
  <div class="operation"><a href="javascript:void(0);" id="delAll">删除选中的商品</a></div> 
    </div> 
     
	 <!--结算-->
	<div class="toolbar_right">
    <div class="p_Total">
	  <span class="text">商品总价：</span><span class="price sumPrice">0 元</span>
	</div>
	<!-- <div class="Discount"><span class="text">以节省：</span><span class="price">5.1</span></div> -->
	<div class="btn">
	 <a class="cartsubmit" href="flow.php?step=checkout"></a>
	 <a class="continueFind" href="./"></a>
	</div>
  </div>
  </div>
   </form>
 </div>

</div>
<!--底部样式-->
 <div class="footer help-box  clearfix">
   <div class="right_footer clearfix">
   <dl>
    <dt><em class="icon_img"></em>购物指南</dt>
    <dd><a href="#">怎样购物</a></dd>
    <dd><a href="#">积分政策</a></dd>
    <dd><a href="#">会员优惠</a></dd>
    <dd><a href="#">订单状态</a></dd>
    <dd><a href="#">产品信息</a></dd>
    <dd><a href="#">怎样购物</a></dd>
   </dl>
   <dl>
    <dt><em class="icon_img"></em>配送方式</dt>
    <dd><a href="#">快递资费及送达时间</a></dd>
    <dd><a href="#">快递覆盖地区查询</a></dd>
    <dd><a href="#">验货与签收</a></dd>
    <dd><a href="#">订单状态</a></dd>
    <dd><a href="#">产品信息</a></dd>
    <dd><a href="#">怎样购物</a></dd>
   </dl>
   <dl>
    <dt><em class="icon_img"></em>配送方式</dt>
    <dd><a href="#">货到付款</a></dd>
    <dd><a href="#">支付宝</a></dd>
    <dd><a href="#">财付通</a></dd>
    <dd><a href="#">网银支付</a></dd>
    <dd><a href="#">银联支付</a></dd>
   </dl>
   <dl>
    <dt><em class="icon_img"></em>售后服务</dt>
    <dd><a href="#">退换货原则</a></dd>
    <dd><a href="#">退换货要求与运费规则</a></dd>
    <dd><a href="#">退换货流程</a></dd>
   </dl>
   <dl>
    <dt><em class="icon_img"></em>关于我们</dt>
    <dd><a href="#">关于我们</a></dd>
    <dd><a href="#">友情链接</a></dd>
    <dd><a href="#">媒体报道</a></dd>
    <dd><a href="#">新闻动态</a></dd>
    <dd><a href="#">企业文化</a></dd>
 
   </dl>
  </div>
  <div class="Copyright">
  <p><a href="#">关于我们</a> | <a href="#">隐私申明</a> | <a href="#">成为供应商</a> | <a href="#">茶叶</a> | <a href="#">博客</a> |<a href="#">友情链接</a> | <a href="#">网站地图</a></p>
  <p>Copyright 2010 - 2015 巴山雀舌 四川巴山雀舌茗茶实业有限公司 zuipin.cn All Rights Reserved </p>
  <p>川ICP备10200063号-1</p>
   <a href="#" class="return_img"></a>
 </div>
 </div>

<!--结束-->
</div>
</body>
</html>

<script type="text/javascript">
	$(function(){
		//判断用户登录状态cookie、session是否存在
		if($.cookie('user')){
             $.ajax({
                type: 'get',
                url: "{{ url('shopcar/show') }}",
                dataType: 'json',
                async: false,
                success:function(msg){
                	if(msg.length != 0){
	                	var totalprice = parseInt(0);
	                  	$.each(msg,function(k,v){
							var obj = $("#clone").clone();
							$("input[name='checkitems']",obj).val(v.goods_id);
							$(".goodsimg",obj).attr('src',v.goods_img);
							$(".goodsname",obj).text(v.goods_name);
							$(".attr",obj).text(v.attr);
							$(".attr",obj).attr('attr_id',v.goods_attr);
							$(".market_price",obj).text("¥" + v.market_price);
							$(".shop_price",obj).text("¥" + v.shop_price);
							$(".number_text",obj).val(v.number);
							totalprice += price = Number(v.shop_price) * Number(v.number);
							$(".xj",obj).text("¥" + (Number(v.shop_price) * Number(v.number)).toFixed(2));
							obj.attr({style:'',id:''}).addClass('main');
							$(".table_list").append(obj);
					    })
					    $(".sp_Operation").attr('style','');
						$(".sumPrice").text(totalprice.toFixed(2) + " 元");
					}else{
						nullShow();
					}
                }
             })
		}else{
			if($.cookie('car') != undefined){
				var totalprice = parseInt(0);
				var car = eval('('+$.cookie('car')+')');//取出cookie中存取购物车的信息，添加到页面中
				
				$.each(car,function(k,v){
					var obj = $("#clone").clone();
					$("input[name='checkitems']",obj).val(v.goodsid);
					$(".goodsimg",obj).attr('src',v.goodsimg);
					$(".goodsname",obj).text(v.goodsname);
					$(".attr",obj).text(v.attr);
					$(".attr",obj).attr('attr_id',v.attr_id);
					$(".market_price",obj).text("¥" + v.market_price);
					$(".shop_price",obj).text("¥" + v.shop_price);
					$(".number_text",obj).val(v.num);
					totalprice += price = Number(v.shop_price) * Number(v.num);
					$(".xj",obj).text("¥" + (Number(v.shop_price) * Number(v.num)).toFixed(2));
					obj.attr({style:'',id:'main'}).addClass('main');
					$(".table_list").append(obj);
				})
				$(".sp_Operation").attr('style','');
				$(".sumPrice").text(totalprice.toFixed(2) + " 元");
		    }else{
				nullShow();
			}
		}

		//减少购物车商品数量
		$(".jian").live('click',function(){
			//获取所修改商品的ID以便更新cookie中商品的数量
			var goodsid = $(this).parent().parent().parent().eq(0).find("input[name='checkitems']").val();
			var attr_id = $(this).parents('tr').find("td").eq(2).attr('attr_id');
			var shop_price = $(this).parent().parent().prev().text().substr(1);
			
			var num = $(this).next();
			if(num.val() <= 1){
				num.val(parseInt(1));
			}else{
				if($.cookie('user')){
					$.ajax({
						type: 'post',
						url: "{{ url('shopcar/edit') }}",
						data: {"goodsid":goodsid,"attr_id":attr_id,"number":-1},
						headers: {
						   'X-XSRF-TOKEN': $.cookie('XSRF-TOKEN')
						},
						dataType: 'json',
						success:function(msg){
							
						}
					})
				}else{
					AddToShoppingCar(goodsid, '', '', '', '', '', attr_id, -1);
				}
				num.val(parseInt(num.val())-1);
				$(this).parent().parent().next().text("¥" + (Number(shop_price) * (parseInt(num.val()))).toFixed(2));
				updatePrice();//更新购物车的商品总价
			}
		})

		//添加购物车商品数量
		$(".jia").click(function(){
			var shop_price = $(this).parent().parent().prev().text().substr(1);
			var goodsid = $(this).parent().parent().parent().eq(0).find("input[name='checkitems']").val();
			var attr_id = $(this).parents('tr').find("td").eq(2).attr('attr_id');
			var num = $(this).prev();

			if(num.val() >= 200){
				num.val(parseInt(200));
			}else{
				if($.cookie('user')){
					$.ajax({
						type: 'post',
						url: "{{ url('shopcar/edit') }}",
						data: {"goodsid":goodsid,"attr_id":attr_id,"number":1},
						async: false,
						headers: {
						   'X-XSRF-TOKEN': $.cookie('XSRF-TOKEN')
						},
						dataType: 'json',
						success:function(msg){
							
						}
					})
				}else{
					AddToShoppingCar(goodsid, '', '', '', '', '', attr_id, 1);
				}
				num.val(parseInt(num.val())+1);
				$(this).parent().parent().next().text("¥" + (Number(shop_price) * (parseInt(num.val()))).toFixed(2));
				updatePrice();//更新购物车的商品总价
			}
		})

		//购物车商品删除
		$(".del").click(function(){
			//获取所修改商品的ID以便更新cookie中商品的数量
			var goodsid = $(this).parent().parent().parent().eq(0).find("input[name='checkitems']").val();
			var attr_id = $(this).parents('tr').find("td").eq(2).attr('attr_id');
			var obj = $(this);

			if($.cookie('user')){
				$.ajax({
					type: 'post',
					url: "{{ url('shopcar/delete') }}",
					data: {"goodsid":goodsid,"attr_id":attr_id},
					headers: {
					   'X-XSRF-TOKEN': $.cookie('XSRF-TOKEN')
					},
					dataType: 'json',
					success:function(msg){
						if(msg.count){
							obj.parents('tr').remove();
							updatePrice();
						}else{
							nullShow();
						}
					}
				})
			}else{
				var jsonObj = eval('('+$.cookie('car')+')');
				
				var newObj = new Array();

				for(var obj in jsonObj){
					if(jsonObj[obj].goodsid != goodsid || jsonObj[obj].attr_id != attr_id){
						newObj.push(jsonObj[obj]);
					}
				}

				if(JSON.stringify(newObj) == '[]'){
					$.removeCookie('car', { path: '/' });
					$(this).parents('tr').remove();
					$(".sp_Operation").attr('style','display:none;');
					nullShow();
				}else{
					$.cookie('car',JSON.stringify(newObj),{ expires: 7, path: '/' });
					$(this).parents('tr').remove();
					updatePrice();//更新购物车的商品总价
				}
			}
		})

		//修改购物车商品数量
		$(".number_text").on({click:function(){
			goodsid = $(this).parents('tr').first().find("input[name='checkitems']").val();
			attr_id = $(this).parents('tr').find("td").eq(2).attr('attr_id');
			num = $(this).val();
		},blur:function(){
			var number = $(this).val();
			var shop_price = $(this).parent().parent().prev().text().substr(1);

			if(number > 100){
				alert('商品数量不能大于100');
				$(this).val(num);
			}else if(number < 0){
				alert('商品数量必须大于0');
				$(this).val(num);
			}else if(!/^\d{1,3}$/.test(number)){
				alert("请输入有效数字");
				$(this).val(num);
			}else{
				if($.cookie('user')){
					$.ajax({
						type: 'post',
						url: "{{ url('shopcar/edit') }}",
						data: {"goodsid":goodsid,"attr_id":attr_id,"number":number},
						headers: {
						   'X-XSRF-TOKEN': $.cookie('XSRF-TOKEN')
						},
						dataType: 'json',
						success:function(msg){
							
						}
					})
				}else{
					AddToShoppingCar(goodsid, '', '', '', '', '', attr_id, number,1);
				}
				$(this).parent().parent().next().text("¥" + (Number(shop_price) * parseInt(number)).toFixed(2));
				updatePrice();//更新购物车的商品总价
			}
		}})

		//全选
	    $("#CheckedAll").click(function () {
		    if (this.checked) {                 
		       //如果当前点击的多选框被选中
			   $('input[type=checkbox][name=checkitems]').attr("checked", true);
			   $("#clone").first().find('input[type=checkbox][name=checkitems]').prop('checked',false);
		    } else {
			   $('input[type=checkbox][name=checkitems]').attr("checked", false);
		    }
	    });

	    //如果复选框全部选中则把全选框选中
	    $('input[type=checkbox][name=checkitems]').click(function () {
		    var flag = true;
		    $("#clone").first().find('input[type=checkbox][name=checkitems]').prop('checked',true);
		    $('input[type=checkbox][name=checkitems]').each(function () {
			    if (!this.checked) {
				   flag = false;
			    }
		    });

		    if (flag) {
			   $('#CheckedAll').prop('checked', true);
		    } else {
			   $('#CheckedAll').prop('checked', false);
		    }

		    $("#clone").first().find('input[type=checkbox][name=checkitems]').prop('checked',false);
	    });

		//批量删除
		$("#delAll").click(function () {
		    if($("input[type='checkbox'][name='checkitems']:checked").attr("checked")){
		    	if(window.confirm('你是否要删除选中的商品？')){
                 	$('input[type=checkbox][name=checkitems]:checked').each(function(){
                 		$(this).parents('tr').last().find('.del').trigger('click');
                 	})
              	}
			}else{
			    alert('你未选中任何商品，请选择后在操作！');
		   }
		});
	})

	//修改购物车页面商品总价
	function updatePrice(){
		var totalprice = parseInt(0);

		if($.cookie('user')){
			$(".main").each(function(){
				totalprice += Number($(this).find(".xj").text().substr(1));
			})
		}else{
			$.each(eval($.cookie('car')),function(k,v){
				totalprice += Number(v.shop_price) * Number(v.num);
			})
		}
		$(".sumPrice").text(totalprice.toFixed(2) + " 元");
	}

	//购物车为空展示
	function nullShow(){
		$(".table_list").append('<div style="background-color:#EEEEEE;height:200px;width:1000px;text-align:center;"><b style="line-height:200px;">购物车中还没有商品，赶紧选购吧！</b></div>');
	}
</script>
