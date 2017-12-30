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
        <span class="name">地址管理</span>
       </div>
       <div class="about_user_info">
         <form id="form1" name="form1" method="post" action="">   
       <div class="user_layout">
         <ul>
          <li class="li"><label class="user_title_name">收件人姓名：</label><input name="" type="text" class="add_text"><i>*</i></li>
          <li class="li">
          <!-- <div class="select">
          <span class="select_adderss"><label> 省份 </label><select class="kitjs-form-suggestselect " ></select></span>
          <span class="select_adderss"><label> 市/县 </label><select class="kitjs-form-suggestselect "></select></span>
          <span class="select_adderss"><label> 区/县 </label><select class="kitjs-form-suggestselect"></select></span>
            <i>*</i>
		</div> -->   
        </li >
          <li class="li"><label class="user_title_name">收货地址：</label><input name="" type="text" class="add_text"><i*</i></li>
          <li class="li"><label class="user_title_name">邮&nbsp;&nbsp;&nbsp;&nbsp;编：</label><input name="" type="text" class="add_text"><i>*</i></li>
          <li class="li"><label class="user_title_name">手&nbsp;机&nbsp;号：</label><input name="" type="text" class="add_text"><i>*</i></li>
          <li class="li"><label class="user_title_name">固定电话：</label><input name="" type="text" class="add_text"></li>         
         </ul>
         <div class="operating_btn"><input name="name" type="submit" value="确认" class="submit—btn"></div>
         </div>
          </form>       
       </div>
       <!--地址列表-->
       <div class="Address_List">
        <div class="title_name"><span class="name">用户地址列表</span></div>
        <div class="list">
         <table>
         <thead>
          <td class="list_name_title0">收件人姓名</td>
          <td class="list_name_title1">地区</td>
          <td class="list_name_title2">邮编</td>
          <td class="list_name_title3">电话</td>
          <td class="list_name_title4">收货地址</td>
          <td class="list_name_title5">操作</td>
         </thead>        
        
          <tr><td>小组</td><td>四川成都五华区</td><td>601022</td><td>12345678909</td><td>产业业务宝贵机会</td><td><a href="#">修改</a><a href="#">删除</a></td></tr>
            <tr><td></td><td></td><td></td><td></td><td></td><td></td></tr>
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
<script>
			var a = $kit.els8cls($kit.ui.Form.ComboBox.Select.defaultConfig.transformCls), a1 = [];
			for(var i = 0; i < a.length; i++) {
				a1.push(a[i])
			}
			a = a1;
			var b1 = new $kit.ui.Form.ComboBox.Select({
				el : a[0],
				data : (function() {
					var provTreeDict = new TreeDict();
					for(var prov in chinaJSON) {
						provTreeDict.ad(prov, prov);
					}
					return provTreeDict;
				})()
			});
			b1.transform();
			b1.ev({
				ev : 'change',
				fn : function() {
					var prov = chinaJSON[b1.inputEl.value];
					if(prov == null) {
						return;
					}
					var cityTree = new TreeDict();
					for(var city in prov) {
						cityTree.ad(city, city);
					}
					b2.inputEl.value = '';
					b2.formEl.value = '';
					b2.config.data = cityTree;
					b2.list.buildList(cityTree.search(''));
				}
			});
			var b2 = new $kit.ui.Form.ComboBox.Select({
				el : a[1],
				data : undefined
			});
			b2.transform();
			b2.ev({
				ev : 'change',
				fn : function() {
					var city = chinaJSON[b1.inputEl.value][b2.inputEl.value];
					if(city == null) {
						return;
					}
					var districtTree = new TreeDict();
					for(var district in city) {
						districtTree.ad(district, city[district]);
					}
					b3.inputEl.value = '';
					b3.formEl.value = '';
					b3.config.data = districtTree;
					b3.list.buildList(districtTree.search(''));
				}
			});
			var b3 = new $kit.ui.Form.ComboBox.Select({
				el : a[2],
				data : undefined
			});
			b3.transform();

		</script>