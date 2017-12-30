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
    <!--右侧样式-->
    <div class="right_style r_user_style user_right">
      <div class="user_Borders">     
       <div class="title_name">
        <span class="name">修改密码</span>
       </div>
       <!--修改密码样式-->
       <div class="about_user_info">
        <form id="form1" name="form1" method="post" action="">   
       <div class="user_layout">
         <ul >
          <li><label class="user_title_name">原密码：</label><input name="" type="password"  class="add_text"/><i>*</i></li>
          <li><label class="user_title_name">新密码：</label><input name="" type="password"  class="add_text"/><i>*</i></li>
          <li><label class="user_title_name">确认新密码：</label><input name="" type="password"  class="add_text"/><i>*</i></li>         
         </ul>
         <div class="operating_btn"><input name="name" type="submit" value="确认"  class="submit—btn"/></div>
         </div>
          </form>
        
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