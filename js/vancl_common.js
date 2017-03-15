/*******init start*****/
var httpUrl="http://"+location.hostname;
/*******init end*****/

/*****宽窄屏幕自适应****/
/*
if(screen.width > 1210 && $(window).width() > 1210)
{
	$("body").addClass("full");
}
*/
$(function(){
	$("#myVancl").mouseenter(function(){
		$(this).removeClass("active");
		$(this).addClass("hover");
	})	
	
	$("#myVancl").mouseleave(function(){
		$(this).removeClass("hover");
		$(this).addClass("active");
	})	
	
	$(".vweixinbox").mouseenter(function(){
		$(".vweixinTip").show();
	})
	
	$(".vweixinbox").mouseleave(function(){
		$(".vweixinTip").hide();
	})		
	
	
	
	$("#shoppingCarNone").mouseenter(function(){
		$(this).removeClass("active");
		$(this).addClass("hover");
	})
	
	$("#shoppingCarNone").mouseleave(function(){
		$(this).removeClass("hover");
		$(this).addClass("active");
	})
	

	$(".allSortItem").mouseenter(function(){
		$(this).toggleClass("itemSelected");
		$("#V_Category").toggleClass("mainNavHover");
		$(this).find(".subCategory").show();
	})
	
	$(".allSortItem").mouseleave(function(){
		$(this).toggleClass("itemSelected");
		$("#V_Category").toggleClass("mainNavHover");
		$(this).find(".subCategory").hide();
	})
	
})


/*收藏夹功能*/
function bookmark() {
    var c;
    var a = /^http{1}s{0,1}:\/\/([a-z0-9_\\-]+\.)+(yihaodian|1mall|111|yhd){1}\.(com|com\.cn){1}\?(.+)+$/;
    if (a.test(httpUrl)) {
        c = "&ref=favorite"
    } else {
        c = "?ref=favorite"
    }
    var d = httpUrl + c;
    if ('undefined' == typeof (document.body.style.maxHeight)) {
        d = httpUrl
    }
    try {
        if (document.all) {
            window.external.AddFavorite(d, favorite)
        } else {
            try {
                window.sidebar.addPanel(favorite, d, "")
            } catch(b) {
                alert("抱歉，您所使用的浏览器无法完成此操作。\n\n加入收藏失败，请使用Ctrl+D进行添加")
            }
        }
    } catch(b) {
        alert("抱歉，您所使用的浏览器无法完成此操作。\n\n加入收藏失败，请使用Ctrl+D进行添加")
    }
}
