$(function(){
	
	/****分类导航鼠标移动效果****/
	$("#V_Category").mouseenter(function(){
		$(".allSortBox").show();
	})
	
	$("#V_Category").mouseleave(function(){
		$(".allSortBox").hide();
	})
	
	/****顶级分类页幻灯片****/
	$(".Women_focusTab").slide({titCell:".FocusNum li",mainCell:".FocusTab ul",effect:"top",autoPlay:true,titOnClassName:"hot",prevCell:".lef_Btn",nextCell:".rig_Btn"});
	
	/****顶级分类页幻灯片****/
	$(".Men_NewProduct").slide({titCell:".Women_NewProduct_Title li",mainCell:".Men_NewProduct_List",titOnClassName:"hover"});
	
	/****顶级分类页最近浏览商品****/
	if(screen.width > 1210 && $(window).width() > 1210)
	{
		
		
		$(".rchannel_scroll").slide({mainCell:"#slider ul",effect:"leftLoop",scroll:5,vis:5,prevCell:"#leftButton",nextCell:"#rightButton"});
	}
	else
	{
		$(".rchannel_newProductList").parent().width("728px");
		
		$(".rchannel_newProductList").width("728px");
		$(".rchannel_scroll").slide({mainCell:"#slider ul",effect:"leftLoop",scroll:4,vis:4,prevCell:"#leftButton",nextCell:"#rightButton"});
	}
	

	
	/****顶级分类页鼠标移动到商品AJAX返回商品信息数据****/
	$(".Men_NewProduct_List li,.Men_ProductList li").mouseenter(function(event){
		D = $(this);
	
		goodsId = D.attr("class").split(" ");
		if(goodsId[1] == "nonew" || goodsId[1] == "none")
		{
			goodsId = goodsId[0].split("_");
		}
		else
		{
			goodsId = D.attr("class").split("_");
		}
		id = goodsId[1];

		Ajax.call('goods.php', 'act=getGoodsInfo&id=' + id, goodsInfoResponse, 'GET', 'JSON');
		var R=50;
		var y=$("#arrowicon");
		var B=y.width();
		var z=y.height();
		var H=$("#popup");
		var K=H.width();
		var I=H.height();
		var F=D.offset();
		var O=D.offset();
		var E=F.left;
		var G=F.top;
		var P=O.top;
	
		var Q=document.documentElement.scrollTop||document.body.scrollTop;
		var J=parseInt(document.documentElement.clientHeight)-(P-Q)-I;
		if(J<0){
			J=P+G-10;
			if(J<0){
				J=scrollTop
			}
		}
		else{
			J=P-30;
			if(P-Q<80){
				J=Q+10
			}
		}
		var C=J+H.height()-($(window).height()+Q);
		if(C>0){
			J=J-C-10
		}
		H.show();
		y.show();
		H.css("top",J);
		H.css("left",E+D.width()+B);
		if(parseInt(H.css("left"))>$("body").width()-(K+R)){
			H.css("left",E-K-B);
			y.css("left",E-B);
			y.css("background-position","0 -25px")
		}
		else{
			
			y.css("background-position","0 0");
			y.css("left",E+D.width()+1)
		}
		var A=Q+event.clientY-12;

		if(A+12<=G){
			A=G
		}
		if(A+12>=G+D.height()){
			A=G+D.height()-25
		}
		if(A+12>=J+H.height()-10){
			A=J+H.height()-25
		}
		y.css("top",A)
	})
	
	$(".Men_NewProduct_List li,.Men_ProductList li").mouseleave(function(){
		var y=$("#arrowicon");
		var H=$("#popup");
		H.hide();
		y.hide();
	})
	
	$(".productList li").mouseenter(function(event){
		D = $(this);

		goodsId = D.attr("id").split("_");
		//alert(goodsId);
		id = goodsId[1];

		Ajax.call('goods.php', 'act=getGoodsInfo&id=' + id, goodsInfoResponse, 'GET', 'JSON');
		var R=50;
		var y=$("#arrowicon");
		var B=y.width();
		var z=y.height();
		var H=$("#popup");
		var K=H.width();
		var I=H.height();
		var F=D.offset();
		var O=D.offset();
		var E=F.left;
		var G=F.top;
		var P=O.top;
	
		var Q=document.documentElement.scrollTop||document.body.scrollTop;
		var J=parseInt(document.documentElement.clientHeight)-(P-Q)-I;
		if(J<0){
			J=P+G-10;
			if(J<0){
				J=scrollTop
			}
		}
		else{
			J=P-30;
			if(P-Q<80){
				J=Q+10
			}
		}
		var C=J+H.height()-($(window).height()+Q);
		if(C>0){
			J=J-C-10
		}
		H.show();
		y.show();
		H.css("top",J);
		H.css("left",E+D.width()+B);
		if(parseInt(H.css("left"))>$("body").width()-(K+R)){
			H.css("left",E-K-B);
			y.css("left",E-B);
			y.css("background-position","0 -25px")
		}
		else{
			
			y.css("background-position","0 0");
			y.css("left",E+D.width()+1)
		}
		var A=Q+event.clientY-12;

		if(A+12<=G){
			A=G
		}
		if(A+12>=G+D.height()){
			A=G+D.height()-25
		}
		if(A+12>=J+H.height()-10){
			A=J+H.height()-25
		}
		y.css("top",A)
	})
	
	$(".productList li").mouseleave(function(){
		var y=$("#arrowicon");
		var H=$("#popup");
		H.hide();
		y.hide();
	})
	
	$(".colorBlock li").click(function(){
		var a = $(this).find("img").attr("src");
		$(this).parent().find("li").removeClass("onlickBlock");
		$(this).addClass("onlickBlock");
		$(this).parents('.scListArea').find('.productLazyLoad').attr('src',a);
	})
	
	
})
function goodsInfoResponse(result)
{
	$("#popupimage").attr("src",result.goods_img);
	$("#popup .msTipsd span").html(result.short_name);
	$("#popup .msTipjJ02 strong").html(result.shop_price);
	$("#popup .msTipjJ03").html(result.market_price);
	$("#popup .msTipjJ01").html(result.goods_sn);
	$("#popup .msTipjJ04 em").html(result.haoping_percent);
	$("#popup .msTipjJ05").html(result.new_comment);
	$("#popupcomments").slide({mainCell:".bd ul",autoPage:true,effect:"top",autoPlay:true,vis:1,interTime:2000});
}

		
		
	