<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/css.css" rel="stylesheet" type="text/css" />
<link href="css/common.css" rel="stylesheet" tyle="text/css" />
<script src="js/jquery-1.9.1.min.js" type="text/javascript"></script>
<script src="js/jquery.SuperSlide.2.1.1.js" type="text/javascript"></script>
<script src="js/common_js.js" type="text/javascript"></script>
<title>用户注册</title>
</head>

<body>
<!--顶部样式-->
<div class="common_top">
 <div class="Narrow">
  <div class=" left logo"><a href="#"><img src="images/logo.png" /></a></div>
  <!--电话图层-->
  <div class="phone"><label>全国服务热线：</label><em>400-345-5633</em></div>
 </div>
</div>
<!--用户注册样式-->
<div class="registered_style Narrow clearfix">
   <div class="left_advertising">
    <img src="images/bg_03.png" />
   </div>
   <div class="right_register">
     <div class="register_Switching" id="register_Switching">
       <div class="hd">
        <ul><li>快速注册</li><li>普通注册</li></ul>
       </div>
       <div class="bd">
        <ul>
         <form  method="post" action="sudo" onsubmit="return cleck_all()"> 
	         {{csrf_field()}}
         <div class="form clearfix">	
        <div class="item"><label class="rgister-label">手&nbsp;&nbsp;机&nbsp;&nbsp;号：</label><input name="tel" type="text" onblur="checktel()" id="tell" placeholder="请输入真实手机号码"/><span id="sptel" class="validateNew"></span></div>
        <div class="item"><label class="rgister-label" >验&nbsp;&nbsp;证&nbsp;&nbsp;码：</label><input name="" type="text"  class="text" style="width:100px;" id="message" onblur="onblur_message()"/><span id="spmessage"></span><a class="phone_verification">获取验证码</a></div> 
    
        <div class="item-ifo">
                    <input type="checkbox" class="checkbox left" checked="checked" id="readme" onclick="agreeonProtocol();">
                    <label for="protocol" class="left">我已阅读并同意<a href="#" class="blue" id="protocol">《福际商城用户注册协议》</a></label>
                </div>
       </div>
       <div class="rgister-btn">
       <button  class="btn_rgister" id="btns">注&nbsp;&nbsp;&nbsp;&nbsp;册</button>
	     </div>
	     <div class="Note"><span class="login_link">已是会员<a href="/login">请登录</a></span></div>	  
       </form>
        </ul>
        <ul>
     <form id="form1" method="post" action="registeradd"> 
      {{csrf_field()}}
	   <div class="form clearfix">	
	    <div class="item"><label class="rgister-label">用&nbsp;&nbsp;户&nbsp;&nbsp;名：</label><input name="username" type="text"  class="text" value="{{ old('username')}}" /><b>*{{ $errors->first('username') }}</b></div>
		<div class="item"><label class="rgister-label" >密&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;码：</label><input name="password" type="password"  class="text" value="{{ old('password')}}"/><b>*{{ $errors->first('password') }}</b></div> 
	    <div class="Password_qd"><ul><li class="r">弱</li><li class="z">中</li><li class="q">强</li></ul></div>
		<div class="item"><label class="rgister-label " >确认密码：</label><input name="password_confirmation" value="{{ old('password_confirmation')}}" type="password"  class="text" /><b>*{{ $errors->first('password_confirmation') }}</b></div>
	    <div class="item"><label class="rgister-label" >电子邮箱：</label><input name="email" type="text" value="{{ old('email')}}"  class="text" /><b>*{{ $errors->first('email') }}</b></div> 
	 
	    <div class="item "><label  class="rgister-label ">验&nbsp;证&nbsp;码：</label><input name="code" type="text"  class="Recommend_text" onblur="keydown_code()" /><a onclick="javascript:re_captcha();" ><span style="padding-left:20px"><img src="{{ URL('captcha/1') }}"  alt="验证码" title="刷新图片" width="100" height="40" id="c2c98f0de5a04167a9e427d883690ff6" border="0"></a></span></div>
		    

         <!--验证码-->
  
 <div class="demo">
          

<script>  
  function re_captcha() {
    $url = "{{ URL('captcha') }}";
        $url = $url + "/" + Math.random();
        document.getElementById('c2c98f0de5a04167a9e427d883690ff6').src=$url;
  }
</script>


    <!--验证码结束-->


    <div class="item-ifo">
                    <input type="checkbox" class="checkbox left" checked="checked" id="readme" onclick="agreeonProtocol();">
                    <label for="protocol" class="left">我已阅读并同意<a href="#" class="blue" id="protocol">《福际商城用户注册协议》</a></label>
                </div>
	  </div>	
	  <div class="rgister-btn">
	
     <button  class="btn_rgister">注&nbsp;&nbsp;&nbsp;&nbsp;册</button>
	  </div>
	  <div class="Note"><span class="login_link">已是会员<a href="/login">请登录</a></span></div>	  
	  </form>
        </ul>
       </div>
     </div>
     <script>jQuery(".register_Switching").slide({trigger:"click"});</script>
    </div>
</div>
<!--底部样式-->
 <div class="bottom_footer">
   <p><a href="#">关于我们</a> | <a href="#">联系我们</a> | <a href="#">商家入驻</a> | <a href="#">法律申明</a> | <a href="#">友情链接</a>  </p>
	 <p>Copyright©2014四川金祥保险销售有限公司.All Rights Reserved. </p>
	 <p>川ICP备09150084号</p>
   </div>
</body>
</html>
<script> 
    function get_cookie(Name) {
       var search = Name + "="//查询检索的值
       var returnvalue = "";//返回值
       if (document.cookie.length > 0) {
         sd = document.cookie.indexOf(search);
         if (sd!= -1) {
            sd += search.length;
            end = document.cookie.indexOf(";", sd);
            if (end == -1)
             end = document.cookie.length;
             //unescape() 函数可对通过 escape() 编码的字符串进行解码。
            returnvalue=unescape(document.cookie.substring(sd, end))
          }
       } 
       return returnvalue;
    }

     $(function(){ 
        $(".phone_verification").click(function(){
             var tel = $("#tell").val();
             var charactors="0123456789";
              var num='',i;
              for(j=1;j<=4;j++){
                i = parseInt(10*Math.random()); 　
                num = num + charactors.charAt(i);
              }

                document.cookie="num="+num;
              //使用方式：
              // var num = get_cookie("num");
              $.ajax({
                    //url:"message",
                    type:"get",
                    data:{
                      "tel":tel,
                      "code":num,
                    },
                    dataType: 'json',
                    success: function(msg){ 
                      alert('消息已发送');
                    }
                   
               });
            
        });
      
    });
     

   //判断输入验证码是否正确
   function onblur_message(){
       var message = $("#message").val();
       if(message == get_cookie("num"))
       {   
          $("#spmessage").html("<font color='green'> *正确</font>");return true;
       }
       else if(message=="")
       {
         $("#spmessage").html("<font color='red'> *不能为空!</font>");return false;
       }
       else
       {
         $("#spmessage").html("<font color='red'> *验证码有误</font>");return false;
       }
   }

    //判断手机号
    function checktel()
    {
       var tel=$("#tell").val();
       var zz = /^1[345789]\d{9}$/;
        $.ajax({
             type:"get",
             url:"phone",
             dataType:"json",
             data:{
                'tel':tel,
             },
             success:function(data){
                 if(data.error==1)
                 {
                      $("#sptel").html("<font color='red'> *手机号已注册！</font>")
                 }else{
                     if(zz.test(tel))
                       {   
                           $("#sptel").html("<font color='green'> *正确</font>");return true;
                       }else if(tel == "")
                       {
                           $("#sptel").html("<font color='red'> *不能为空！</font>");return false;
                       }else{
                            $("#sptel").html("<font color='red'> *格式有误！</font>");return false;
                       }
                     
                 }
             }
        });
    }

    function cleck_all()
    {
      if(checktel()&&onblur_message())
      {
        return true;
      }else
      {
        return false;
      }
    }



</script>
