<?php
use Illuminate\Support\Facades\Session;  
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/css.css" rel="stylesheet" type="text/css" />
<link href="css/common.css" rel="stylesheet" tyle="text/css" />
<script src="js/jquery.min.1.8.2.js" type="text/javascript"></script>
<script src="js/jquery.SuperSlide.2.1.1.js" type="text/javascript"></script>
<script src="js/common_js.js" type="text/javascript"></script>
<script src="js/footer.js" type="text/javascript"></script>
<script src="js/jquery.cookie.js"></script>
<title>茶叶商城首页</title>

</head>

<body>

<div id="top">
  <div class="top">
    <div class="Collection"><em></em><a href="#">收藏我们</a></div>
	<div class="hd_top_manu clearfix">
	  <ul class="clearfix">
      <?php 
             if(!empty(session::get('user')))
             {
              // echo  "<li class='hd_menu_tit zhuce' data-addclass='hd_menu_hover'><p>欢迎光临本店！</p>".session::get('user')."</li>";
              echo  "<li class='hd_menu_tit zhuce' data-addclass='hd_menu_hover'>欢迎光临本店！<a href='/' class='red'>".session::get('user')."</a><a href='/loginout' class='red'>[退出]</a></li>";

              }else
              {
          echo  "<li class='hd_menu_tit zhuce' data-addclass='hd_menu_hover'>欢迎光临本店！<a href='/login' class='red'>[请登录]</a> 新用户<a href='/register' class='red'>[免费注册]</a></li>";

              }

         ?>
	  
	   
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

