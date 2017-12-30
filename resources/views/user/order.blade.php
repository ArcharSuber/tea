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
    <div class="right_style r_user_style">
      <div class="user_Borders">
       <div class="title_name">
        <span class="name">我的订单</span>
       </div>
       <div class="about_user_info">

   
       <!--地址列表-->
       <div class="Address_List">
        
        <div class="list">
         <table>
         <thead>
          <td class="list_name_title0">订单号</td>
          <td class="list_name_title1">产品名</td>
          <td class="list_name_title2">金额</td>
          <td class="list_name_title3">状态</td>
          <td class="list_name_title4">订单创建时间</td>
          <td class="list_name_title5">操作</td>
         </thead>        
        
          <tr>
            <td>000000000000</td>
            <td>铁观音</td>
            <td>999999</td>
            <td>已支付</td>
            <td>2017-12-26 10:23</td>
            <td><a href="#">删除</a><a href="#">立即支付</a></td>
          </tr>
         
         </table>
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
