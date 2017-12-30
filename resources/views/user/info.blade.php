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
    <div class=" right_style r_user_style">
      <div class="user_Borders">
       <div class="title_name">
        <span class="name">个人信息设置</span>
       </div>
       <div class="about_user_info">
       <form id="form1" name="form1" method="post" action="">   
       <div class="user_layout">
         <ul >
          <li><label class="user_title_name">用户头像：</label></li>
          <li><label class="user_title_name">用户昵称：</label><input name="" type="text"  class="add_text"/><i>*</i></li>
          <li><label class="user_title_name">真实姓名：</label><input name="" type="text"  class="add_text"/><i>*</i></li>
          <li><label class="user_title_name">用户性别：</label>               
                <label class="sex"> <input type="radio" name="RadioGroup1" value="1" id="RadioGroup1_0" /><span>男</span></label>
                <label class="sex"><input type="radio" name="RadioGroup1" value="2" id="RadioGroup1_1" /><span>女</span></label> 
                <i>*</i>         
          </li>
          <li><label class="user_title_name">手&nbsp;机&nbsp;号：</label><input name="" type="text"  class="add_text"/><i>*</i></li>
          <li><label class="user_title_name">邮箱地址：</label><input name="" type="text"  class="add_text"/><i>*</i></li>         
         </ul>
         <div class="operating_btn"><input name="name" type="submit" value="提交"  class="submit—btn"/></div>
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