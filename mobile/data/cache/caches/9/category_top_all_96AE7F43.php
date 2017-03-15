<?php exit;?>a:3:{s:8:"template";a:3:{i:0;s:59:"D:\webroot\ecshop\mobile/themes/21cake/category_top_all.dwt";i:1;s:62:"D:\webroot\ecshop\mobile/themes/21cake/library/page_header.lbi";i:2;s:62:"D:\webroot\ecshop\mobile/themes/21cake/library/page_footer.lbi";}s:7:"expires";i:1480863514;s:8:"maketime";i:1480859914;}<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<title>所有分类_21Cake官网 模版堂21Cake官网模板 ECSHOP模板堂（www.ecmoban.com）专业ECSHOP模板制作 ECSHOP模板定制_ECSHOP模板修改_ECSHOP模板出售_ECSHOP模板案例 - Powered by ECTouch.cn 触屏版</title>
<link rel="stylesheet" href="/mobile/data/common/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="/mobile/data/common/bootstrap/css/font-awesome.min.css">
<link rel="stylesheet" href="/mobile/themes/21cake/css/ectouch.css">
<script type="text/javascript" src="/mobile/data/common/js/jquery.min.js" ></script> 
<script type="text/javascript" src="/mobile/data/common/js/jquery.json.js" ></script> 
<script type="text/javascript" src="/mobile/data/common/js/common.js"></script> 
<script type="text/javascript" src="/mobile/data/common/js/jquery.more.js"></script> 
<script type="text/javascript" src="/mobile/data/common/js/utils.js"></script>
<script type="text/javascript" src="/mobile/themes/21cake/js/ectouch.js"></script>
<script type="text/javascript" src="/mobile/themes/21cake/js/TouchSlide.js"></script>
<script src="/mobile/data/common/bootstrap/js/bootstrap.min.js"></script> 
</head><body><header id="header"><div class="header_l header_return"> <a class="ico_10" href="/mobile/index.php?m=default&c=index&a=index">  </a> </div>
  <h1> 所有分类 </h1>
  <div class="header_r"> <a class="ico_01" href="/mobile/index.php?m=default&c=flow&a=cart"> 购物车 </a> </div></header>
<div class="clist">
<div class="search_box">
      <form method="post" action="/mobile/index.php?m=default&c=category&a=index" name="searchForm" id="searchForm_id">
        <input placeholder="请输入商品名称" name="keywords" type="text" id="keywordBox" />
        <button class="ico_07" type="submit"> </button>
      </form>
    </div>
  <ul>
  
             <li class="crow level1">
      <div class="crow_row">
        <div class="crow_icon"> <img alt="" src="/demo_141/mobile/data/common/images/no_picture.gif"> </div>
        <div class="crow_title"> <span>蛋糕分类</span></div>
        <div class="crow_arrow"> <img src="__TPL__/images/ico_11.png"> </div>
        <div>&nbsp;</div>
      </div>
    </li>
         <ul class="clist clist_sub clearfix" style="opacity: 1; display: none; ">
      <li class="crow"> 
                <div class="crow_item     crow_item_clear  "> <a href="/mobile/index.php?m=default&c=category&a=index&id=16">蛋糕</a> </div>
         
      </li>
    </ul>
             <li class="crow level1">
      <div class="crow_row">
        <div class="crow_icon"> <img alt="" src="/demo_141/mobile/data/common/images/no_picture.gif"> </div>
        <div class="crow_title"> <span>商品分类</span></div>
        <div class="crow_arrow"> <img src="__TPL__/images/ico_11.png"> </div>
        <div>&nbsp;</div>
      </div>
    </li>
         <ul class="clist clist_sub clearfix" style="opacity: 1; display: none; ">
      <li class="crow"> 
                <div class="crow_item     crow_item_clear  "> <a href="/mobile/index.php?m=default&c=category&a=index&id=321">酒类</a> </div>
                <div class="crow_item    "> <a href="/mobile/index.php?m=default&c=category&a=index&id=322">食品</a> </div>
                <div class="crow_item    "> <a href="/mobile/index.php?m=default&c=category&a=index&id=323">特产</a> </div>
         
      </li>
    </ul>
      </ul>
</div>
<div id="content" class="footer">
  <p class="dLogin">554fcae493e564ee0dc75bdf2ebf94camember_info|a:1:{s:4:"name";s:11:"member_info";}554fcae493e564ee0dc75bdf2ebf94ca | <a href="#top">返回顶部</a></p>
  <p class="dLogin"> <a href="./"> 触屏版 </a> | <a href="?pc"> 电脑版 </a> | <a href="#"> 客户端 </a> </p>
</div>
<script type="text/javascript">
TouchSlide({
    slideCell:"#focus",
    titCell:".hd ul", //开启自动分页 autoPage:true ，此时设置 titCell 为导航元素包裹层
    mainCell:".bd ul", 
    effect:"leftLoop", 
    autoPlay:true,//自动播放
    autoPage:true //自动分页
});
</script> 
 
<script type="text/javascript" src="__TPL__/js/zepto.min.js"></script> 
<script type="text/javascript">
/*头部搜索点击关闭或者弹出搜索框*/  
function showSearch( ){
	document.getElementById("search_box").style.display="block";
}
function closeSearch(){
	document.getElementById("search_box").style.display="none";
}
/* 搜索验证 */
function check(Id){
	var strings = document.getElementById(Id).value;
	if(strings.replace(/(^\s*)|(\s*$)/g, "").length == 0){
		return false;
	}
	return true;
}
(function($) {
	var btn_up = new Image(), btn_down = new Image();
	btn_up.src = "__TPL__/images/ico_12.png";
	btn_down.src = "__TPL__/images/ico_11.png";
	var Menu = {
		// 初始化事件
		initEvent : function() {
			$().ready(
					function() {
						$("div.clist").click(function(e) {
							Menu.router(e);
						});
						$("#allClass").click(function(e) {
							Menu.showMenu1();
						});
						$(window).on(
								"hashchange",
								function(e) {
									var name = decodeURIComponent(location.hash
											.replace(/^#/, ""));
									if (name != "") {
										Menu.showMenu3(name);
									}else{
										Menu.showMenu1();
									}
								});
					});
		},
		// 事件分发路油
		router : function(_event) {
			var target = $(_event.target || _event.srcElement);
			var _tar = target.closest(".level1");
			// 显示二级菜单
			if (_tar.length > 0) {
				Menu.showMenu2(_tar);
				/*var _gp = target.closest(".crow_row");// 点击事件对应此行的祖父级节点
				var _top = _gp.offset().top;
				setTimeout(function(){
					if (_top > 100) {
						window.scroll(0, _gp.offset().top);
					} else {
						window.scroll(0, _gp.offset().top - 50);
					}					
				},15)*/
				return;
			}
		},
		// 显示一级菜单
		showMenu1 : function() {
			$("#contentsub").hide();
			$("#content").show();
		},
		// 显示二级菜单
		showMenu2 : function($curMenuDom) {
			var next = $curMenuDom.next("ul");
			if (next.css("display") == "none") {
				//$("ul.clist_sub").hide();
				//$("div.crow_arrow").each(function(i, dom) {
				//	$(dom).html(btn_down.cloneNode(true));
				//});
				next.css("opacity", "0").show().animate({
					opacity : 1
				}, 500);
				//next.show();
				$("div.crow_arrow", $curMenuDom).html(btn_up.cloneNode(true));
			} else {
				next.hide();
				$("div.crow_arrow", $curMenuDom).html(btn_down.cloneNode(true));
			}
		},
		
	}
	window.Menu = Menu;
	Menu.initEvent();// 初始化事件
})($);
</script>
</body>
</html>