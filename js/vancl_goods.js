/*******init start*****/
var httpUrl="http://"+location.hostname;
/*******init end*****/

$(function(){
	/*****宽窄屏幕自适应****/
	/*
	if(screen.width > 1210 && $(window).width() > 1210)
	{
		$("body").addClass("dpWidescreen");
	}
	*/
	$(".danpinLeft").slide({
		mainCell:".smallImg ul",
		vis:5,
		prevCell:".upper",
		nextCell:".downHover",
		effect:"left"
	})
	
	$(".spec_img_list li").mouseenter(function(){
		$(this).addClass("hover");
	})
	
	$(".spec_img_list li").mouseleave(function(){
		$(this).removeClass("hover");
	})
	
	$(".spec_img_list li,.spec_box li").click(function(){
		$(this).parent().find("li").removeClass("onlickSpec");
		$(this).addClass("onlickSpec");
		$(this).parent().find("input:radio").prop("checked",false);
		$(this).find("input:radio").prop("checked",true);
		
		changePrice();
	})
	
	$(".spec_img_list .colorBlock a").click(function(){
	
		$(this).parents("ul").find("li").removeClass("onlickSpec");
		$(this).parents("li").addClass("onlickSpec");
		$(this).parents(".onlickSpec").find("input:radio").prop("checked",false);
		$(this).parents(".onlickSpec").find("input:radio").prop("checked",true);
	
		changePrice();
	})
	
	$(".MemberGrade").mouseenter(function(){
		$(this).addClass("MemberGrade_Line");
		$(this).find(".MemberGradeList").show();
	})
	
	$(".MemberGrade").mouseleave(function(){
		$(this).removeClass("MemberGrade_Line");
		$(this).find(".MemberGradeList").hide();
	})
	
		//弹出评论层
	$(".goumaiButton").click(function(){
		easyDialog.open({
			container : 'comment_show',
			fixed : true,
			drag : true
		});
	})
	
	$(".popwinClose").click(function(){
		easyDialog.close();
	})
	
	$(".Product_TypeList .quicktab").click(function(){
		var a = $("#"+$(this).attr("anchor"));
		var b = a.offset().top - 95;
		$(document).scrollTop(b);
	})
	var lef=0;
	var getLeft=function(){
		lef=$(".RsetTabArea").offset().left;
	}
	
	getLeft();
	$(window).resize(function(){
		getLeft();
	});
	
	$(window).scroll(function(){
		var a = $(".RsetTabArea").offset().top;
		var b = $(document).scrollTop();
		
		if(b >= a)
		{
			$("#floatdiv").css({position:"fixed",left:lef});
		}
		else
		{
			$("#floatdiv").css({position:"absolute",left:0,top:0});
		}
	});
	
	
	
	

})

function set_number(this_obj)
{
	var a = $(this_obj).val();
	$("#number").val(a);
	changePrice();
}

