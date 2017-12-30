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
        <span class="name">用户积分</span>
       </div>
       <!--积分样式-->
       <div class="user_integral_style slideTxtBox">
         <div class="hd">
          <ul>
           <li>积分获取记录</li>
           <LI>积分使用记录</LI>
          </ul>
         </div>
         <div class="bd">
           <ul>
            <div class="Integral_Number"><em></em>你当前的积分：<b>3434</b></div>
            <table>
             <thead>
               <tr>
                <td>积分获取订单号</td>
                <td>订单金额</td>
                <td>积分</td>
                <td>获取日期</td>
               </tr>
             </thead>
             <tbody>
              <tr>
               <td>4546546546454</td>
               <td>￥345</td>
               <td>455</td>
               <td>2015-12-12 12:23:34</td>
              </tr>
               <tr>
               <td>4546546546454</td>
               <td>￥345</td>
               <td>455</td>
               <td>2015-12-12 12:23:34</td>
              </tr>
               <tr>
               <td>4546546546454</td>
               <td>￥345</td>
               <td>455</td>
               <td>2015-12-12 12:23:34</td>
              </tr>
              
             </tbody>
            </table>
           </ul>
           <ul>
           <div class="Integral_Number"><em></em>你消费的积分：<b>544</b></div>
           </ul>
         </div>
       </div>
       <script>jQuery(".slideTxtBox").slide({trigger:"click"});</script>
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