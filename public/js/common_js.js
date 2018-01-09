$(document).ready(function(){
  
  $('li.hd_menu_tit').mousemove(function(){
  $(this).find('div.hd_menu_list,div.hd_Shopping_list').show();//you can give it a speed
  });
  $('li.hd_menu_tit').mouseleave(function(){
  $(this).find('div.hd_menu_list,div.hd_Shopping_list').hide();
  });
 $(function(){
	$(".fixed_qr_close").click(function(){
		$(".mod_qr").hide();
	})
});
//产品边框样式
 $("li.gl-item").hover(function(){
			$(this).addClass("hover");
			//$(this).children(".dorpdown-layer").attr('class','');
		},function(){
			$(this).removeClass("hover");  
			//$(this).children(".dorpdown-layer").attr('class','');
		}
	); 

 //更新购物车的数量
 console.log($.cookie('car'));
 
 if($.cookie('car') != undefined){
    $(".ci-count").text(eval($.cookie('car')).length);
 }
 
    //购物车
    $("div.hd_Shopping_list").hover(function(){
            if($.cookie('car') == undefined){
                $("#Shopping_list").append('<div class="dorpdown-layer"><div class="spacer"></div><div class="prompt"></div><div class="nogoods"><b></b>购物车中还没有商品，赶紧选购吧！</div></div>');

            }else{
                var html = '<div class="dorpdown-layer"><div class="spacer"></div>';
                var goodsNum = parseInt(0);
                var priceNum = parseInt(0);
                $.each(eval($.cookie('car')),function(k,v){
                    goodsNum = goodsNum + parseInt(v.num);
                    priceNum = priceNum + parseInt(v.num) * parseFloat(v.shop_price);
                    html += '<ul class="p_s_list"><li><div class="img"><img src="'+v.goodsimg+'"></div><div class="content"><p><a href="#">'+v.goodsname.substr(0,16)+'</a></p><p>'+v.attr+'</p></div><div class="Operations"><p class="Price">¥'+v.shop_price+'</p><p><a href="#">删除</a></p></div></li></ul>';
                })
                html += '<div class="Shopping_style"><div class="p-total">共<b>'+goodsNum+'</b>件商品　共计<strong>￥ '+priceNum.toFixed(2)+'</strong></div><a href="shopping_cart.html" title="去购物车结算" id="btn-payforgoods" class="Shopping">去购物车结算</a></div></div>'; 
                $('#Shopping_list').append(html);
            }
			$(this).addClass("hover");
			//$(this).children(".dorpdown-layer").attr('class','');
		},function(){
			$(this).removeClass("hover");  
			//$(this).children(".dorpdown-layer").attr('class','');
		}
	);

 //支付方式
 $("#payment").hover(function(){
			$(this).addClass("hover");
			//$(this).children(".dorpdown-layer").attr('class','');
		},function(){
			$(this).removeClass("hover");  
			//$(this).children(".dorpdown-layer").attr('class','');
		}
	); 
});

$(document).ready(function(){
	$("#nav li.no_sub").hover(function(){
			$(this).addClass("hover1");
		},function(){
			$(this).removeClass("hover1");  
		}
	); 
});
$(document).ready(function(){
		$(".clearfix li.list_name, li.list_name").hover(function(){
			$(this).addClass("hd_menu_hover");
			$(this).children("ul li.list_name_bg").attr('class','');
		},function(){
			$(this).removeClass("hd_menu_hover");  
			$(this).children("ul li.list_name_bg").attr('class','');
		}
	); 				   
$("#allSortOuterbox li").hover(function(){
		$(this).find(".menv_Detail").show();
	},function(){
		$(this).find(".menv_Detail").hide();
});
	$("#allSortOuterbox li.name").hover(function(){
												
			$(this).addClass("hover_nav");
												
		},function(){
			$(this).removeClass("hover_nav" );  
		});
		$("div.display ").hover(function(){
		$(this).addClass("hover");
	},function(){
		$(this).removeClass("hover" );  
});	
});
$(document).ready(function(){
$("#lists li").hover(function(){
		$(this).find(".Detailed").show();
	},function(){
		$(this).find(".Detailed").hide();
});
	$("#lists li").hover(function(){
												
			$(this).addClass("hover_nav");
												
		},function(){
			$(this).removeClass("hover_nav" );  
		}
	); 
});
/**********鼠标移动效果************/
$(document).ready(function(){
	$("ul.products").hover(function() {
		$(this).find("#cell_12428").stop()
		.animate({right: "0", opacity:1}, "fast")
		.css("display","block")

	}, function() {
		$(this).find("#cell_12428").stop()
		.animate({right: "0", opacity: 0}, "fast")
	});
});
$(window).scroll(function() {
		var topToolbar = $("#dd_Section");
		var headerH = $("#Group_outerHeight").outerHeight();
		var headers = $("#header_outerHeight").outerHeight();
		var scrollTop =$(document.body).scrollTop();	
			if( scrollTop >= headerH + headers ){
				topToolbar.stop(false,true).addClass("fixToTop");
			}else if( scrollTop < headerH + headers ){
				topToolbar.stop(false,true).removeClass("fixToTop"); 
			}
});
/********************订单js******************/
$(document).ready(function(){
	 $('#select').find('ul').click(function(){
	$('#select').find('ul').removeClass('active');
	$(this).addClass('active');
  }); 
   $("#select ul").hover(function(){
			$(this).addClass("hover");
			//$(this).children(".dorpdown-layer").attr('class','');
		},function(){
			$(this).removeClass("hover");  
			//$(this).children(".dorpdown-layer").attr('class','');
		}
	); 	
	   $(".dowebok li").hover(function(){
			$(this).addClass("hover");
			//$(this).children(".dorpdown-layer").attr('class','');
		},function(){
			$(this).removeClass("hover");  
			//$(this).children(".dorpdown-layer").attr('class','');
		}
	);					
});
/*********************点击事件*********************/
$( document).ready(function(){
  $('.fixed_bar').find('li').click(function(){
	$('.fixed_bar').find('li').removeClass('active');
	$(this).addClass('active');
  });															
});
/***********************商品分类顶部浮动固定层菜单栏**************************/
$(window).scroll(function() {
		var topToolbar = $("#ProductMenu");
		var headerH = $("#Preferential_AD").outerHeight();
		var headers = $("#header_outerHeight").outerHeight();
		var scrollTop =$(document.body).scrollTop();	
			if( scrollTop >= headerH + headers ){
				topToolbar.stop(false,true).addClass("fixToTop");
			}else if( scrollTop < headerH + headers ){
				topToolbar.stop(false,true).removeClass("fixToTop"); 
			}
});
/********************密码强度***********************/
   $(document).ready(function(){
        $('#tbPassword').focus(function () {
            $('#pwdLevel_1').attr('class', 'ywz_zhuce_hongxian');
            $('#tbPassword').keyup();
        });
        $('#tbPassword').keyup(function () {
            var __th = $(this);
            if (!__th.val()) {
                $('#pwd_tip').hide();
                $('#pwd_err').show();
                Primary();
                return;
            }
            if (__th.val().length < 6) {
                $('#pwd_tip').hide();
                $('#pwd_err').show();
                Weak();
                return;
            }
            var _r = checkPassword(__th);
            if (_r < 1) {
                $('#pwd_tip').hide();
                $('#pwd_err').show();
                Primary();
                return;
            }
            if (_r > 0 && _r < 2) {
                Weak();
            } else if (_r >= 2 && _r < 4) {
                Medium();
            } else if (_r >= 4) {
                Tough();
            }
            $('#pwd_tip').hide();
            $('#pwd_err').hide();
        });
        function Primary() {
            $('#pwdLevel_1').attr('class', 'ywz_zhuce_huixian');
            $('#pwdLevel_2').attr('class', 'ywz_zhuce_huixian');
            $('#pwdLevel_3').attr('class', 'ywz_zhuce_huixian');
        }
        function Weak() {
            $('#pwdLevel_1').attr('class', 'ywz_zhuce_hongxian');
            $('#pwdLevel_2').attr('class', 'ywz_zhuce_huixian');
            $('#pwdLevel_3').attr('class', 'ywz_zhuce_huixian');
        }
        function Medium() {
            $('#pwdLevel_1').attr('class', 'ywz_zhuce_hongxian');
            $('#pwdLevel_2').attr('class', 'ywz_zhuce_hongxian2');
            $('#pwdLevel_3').attr('class', 'ywz_zhuce_huixian');
        }
        function Tough() {
            $('#pwdLevel_1').attr('class', 'ywz_zhuce_hongxian');
            $('#pwdLevel_2').attr('class', 'ywz_zhuce_hongxian2');
            $('#pwdLevel_3').attr('class', 'ywz_zhuce_hongxian3');
        }
        function checkPassword(pwdinput) {
            var maths, smalls, bigs, corps, cat, num;
            var str = $(pwdinput).val()
            var len = str.length;
            var cat = /.{16}/g
            if (len == 0) return 1;
            if (len > 16) { $(pwdinput).val(str.match(cat)[0]); }
            cat = /.*[\u4e00-\u9fa5]+.*$/
            if (cat.test(str)) {
                return -1;
            }
            cat = /\d/;
            var maths = cat.test(str);
            cat = /[a-z]/;
            var smalls = cat.test(str);
            cat = /[A-Z]/;
            var bigs = cat.test(str);
            var corps = corpses(pwdinput);
            var num = maths + smalls + bigs + corps;
            if (len < 6) { return 1; }
            if (len >= 6 && len <= 8) {
                if (num == 1) return 1;
                if (num == 2 || num == 3) return 2;
                if (num == 4) return 3;
            }
            if (len > 8 && len <= 11) {
                if (num == 1) return 2;
                if (num == 2) return 3;
                if (num == 3) return 4;
                if (num == 4) return 5;
            }
            if (len > 11) {
                if (num == 1) return 3;
                if (num == 2) return 4;
                if (num > 2) return 5;
            }
        }
        function corpses(pwdinput) {
            var cat = /./g
            var str = $(pwdinput).val();
            var sz = str.match(cat)
            for (var i = 0; i < sz.length; i++) {
                cat = /\d/;
                maths_01 = cat.test(sz[i]);
                cat = /[a-z]/;
                smalls_01 = cat.test(sz[i]);
                cat = /[A-Z]/;
                bigs_01 = cat.test(sz[i]);
                if (!maths_01 && !smalls_01 && !bigs_01) { return true; }
            }
            return false;
        } 
    });
/***********Cookie实现购物车存取**************/
    function AddToShoppingCar(id, goodsimg, goodsname, shop_price, market_price, attr, attr_id, num, status = 0) {
        var  flag = 0;//是否新增Cookie购物车标志
        var _num = 1;
        var cookieProductID = 'car';
        if (num != undefined){
            _num = parseInt(num);
        }
        
        var totalNum = _num; //总数默认为传入参数
        var cookieSet = { expires: 7, path: '/' }; //设置cookie路径的
        // $.cookie(cookieProductID, null, cookieSet);//清除Cookie
        // var jsonStr = "[{'ProductID':'" + id + "','Num':'" + _num + "'}]"; //构造json字符串,id是商品id  num是这个商品的数量
        var jsonStr = '[{"goodsid":"'+ id + '","goodsimg":"' + goodsimg + '","goodsname":"' + goodsname + '","shop_price":"' + shop_price + '","market_price":"' + market_price + '","attr":"' + attr + '","attr_id":"' + attr_id + '","num":"' + _num + '"}]'; //构造json字符串,id是商品id  num是这个商品的数量
        console.log(jsonStr);

        if ($.cookie(cookieProductID) == null) {
            $.cookie(cookieProductID, jsonStr, cookieSet); //如果没有这个cookie就设置他
            flag = 1;
        }else{
            var jsonObj = eval("(" + $.cookie(cookieProductID) + ")"); //如果有，把json字符串转换成对象
            var findProduct = false;//是否找到产品ID,找到则为TRUE,否则为FALSH
            for(var obj in jsonObj) {
                if(jsonObj[obj].goodsid == id  && jsonObj[obj].attr_id == attr_id) {
                    if(status == 1){
                        jsonObj[obj].num = _num;
                    }else{
                        jsonObj[obj].num = parseInt(jsonObj[obj].num) + _num;
                    }
                    findProduct = true;
                    break;
                }
            }
            if(findProduct == false){ //没找到,则添加
                jsonObj[jsonObj.length] = new Object();
                jsonObj[jsonObj.length - 1].goodsid = id;
                jsonObj[jsonObj.length - 1].goodsimg = goodsimg;
                jsonObj[jsonObj.length - 1].goodsname = goodsname;
                jsonObj[jsonObj.length - 1].shop_price = shop_price;
                jsonObj[jsonObj.length - 1].market_price = market_price;
                jsonObj[jsonObj.length - 1].attr = attr;
                jsonObj[jsonObj.length - 1].attr_id = attr_id;
                jsonObj[jsonObj.length - 1].num = _num;
                flag = 1;
            }
            $.cookie(cookieProductID, JSON.stringify(jsonObj), cookieSet); //写入coockie  JSON需要json2.js支持
        }
        return flag;
    }
    