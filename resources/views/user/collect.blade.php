@include("layout.top")
<!--logo和搜索样式-->
@include("layout.search")
<!--导航栏样式-->
<div id="Menu" class="clearfix">
<div class="Menu_style">
 @include("layout.leftnav")
 @include("layout.nav")
</div>
</div
<!--内页样式-->
<div class="user_style clearfix" id="user">
  <div class="user_title"><em></em>用户中心</div>
  <!--用户中心布局样式-->
   <!--栏目名称-->
   @include("layout.userleft")
     <!--右侧内容样式-->
   <div class=" right_style r_user_style user_right">
    <div class="user_Borders clearfix">
    <div class="title_name">
        <span class="name">用户收藏</span>
       </div>
   <!--收藏样式-->
    <div class="Collect">
      <ul class="Collect_list">
       <li>
       <div class="Collect_pro_name">
         <a href="#" class="delete_Collect"></a>
        <p class="img center"><a href="#"><img src="images/product_img_17.png" /></a></p>
        <p><a href="#">天然绿色多汁香甜无污染水蜜桃</a></p>
        <p class="Collect_Standard">礼盒装</p>
        <p class="Collect_price">￥234</p>
        </div>
       </li>
        <li>
       <div class="Collect_pro_name">
         <a href="#" class="delete_Collect"></a>
        <p class="img center"><a href="#"><img src="images/product_img_17.png" /></a></p>
        <p><a href="#">天然绿色多汁香甜无污染水蜜桃</a></p>
        <p class="Collect_Standard">礼盒装</p>
        <p class="Collect_price">￥234</p>
        </div>
       </li>
        <li>
       <div class="Collect_pro_name">
         <a href="#" class="delete_Collect"></a>
        <p class="img center"><a href="#"><img src="images/product_img_17.png" /></a></p>
        <p><a href="#">天然绿色多汁香甜无污染水蜜桃</a></p>
        <p class="Collect_Standard">礼盒装</p>
        <p class="Collect_price">￥234</p>
        </div>
       </li>
        <li>
       <div class="Collect_pro_name">
         <a href="#" class="delete_Collect"></a>
        <p class="img center"><a href="#"><img src="images/product_img_17.png" /></a></p>
        <p><a href="#">天然绿色多汁香甜无污染水蜜桃</a></p>
        <p class="Collect_Standard">礼盒装</p>
        <p class="Collect_price">￥234</p>
        </div>
       </li>
        <li>
       <div class="Collect_pro_name">
         <a href="#" class="delete_Collect"></a>
        <p class="img center"><a href="#"><img src="images/product_img_17.png" /></a></p>
        <p><a href="#">天然绿色多汁香甜无污染水蜜桃</a></p>
        <p class="Collect_Standard">礼盒装</p>
        <p class="Collect_price">￥234</p>
        </div>
       </li>
        <li>
       <div class="Collect_pro_name">
         <a href="#" class="delete_Collect"></a>
        <p class="img center"><a href="#"><img src="images/product_img_17.png" /></a></p>
        <p><a href="#">天然绿色多汁香甜无污染水蜜桃</a></p>
        <p class="Collect_Standard">礼盒装</p>
        <p class="Collect_price">￥234</p>
        </div>
       </li>
        <li>
       <div class="Collect_pro_name">
         <a href="#" class="delete_Collect"></a>
        <p class="img center"><a href="#"><img src="images/product_img_17.png" /></a></p>
        <p><a href="#">天然绿色多汁香甜无污染水蜜桃</a></p>
        <p class="Collect_Standard">礼盒装</p>
        <p class="Collect_price">￥234</p>
        </div>
       </li>
        <li>
       <div class="Collect_pro_name">
         <a href="#" class="delete_Collect"></a>
        <p class="img center"><a href="#"><img src="images/product_img_17.png" /></a></p>
        <p><a href="#">天然绿色多汁香甜无污染水蜜桃</a></p>
        <p class="Collect_Standard">礼盒装</p>
        <p class="Collect_price">￥234</p>
        </div>
       </li>
      </ul>
      <!--分页-->
      <div class="pages_Collect clearfix">
       <a href="#" class="on">《</a>
       <a href="#">1</a>
       <a href="#">2</a>
       <a href="#">3</a>
       <a href="#">4</a>
       <a href="#">》</a>
      </div>
    </div>
    </div>
   </div>
  </div>
 </div>
 <div class="footerbox">
   <!--友情链接-->
       @include("layout.friend")
</div>
<!--底部样式-->
@include("layout.footer")
@include("layout.right")