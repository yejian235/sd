/*******init start*****/
var httpUrl="http://"+location.hostname;
/*******init end*****/

$(function(){
	/*****宽窄屏幕自适应****/
	if(screen.width > 1210 && $(window).width() > 1210)
	{
		$("body").addClass("dpWidescreen");
	}

	

})


		
	/********迷你购物车加减********/
	function flowClickCartNum(a,b)
	{
		var b = parseInt(b);
		var c = $("#goods_number_"+a);
		var d = parseInt(c.val());
		if(d < 1 || !$.isNumeric(d))
		{
			alert("请输入正确的商品数量");	
			e = 1;
		}
		
		if(b == -1)		
		{
			if(d == 1)
			{
				alert("购买数量不能小于1件");	
			}
			else
			{
				e = d + b;
			}
		}
		else
		{
			e = d + b;
		}
		
		flow_change_goods_number(a,e);
	}
	
	
	function flow_change_goods_number(rec_id, goods_number)
	{     
		Ajax.call('flow.php?step=ajax_update_cart', 'rec_id=' + rec_id +'&goods_number=' + goods_number, flow_change_goods_number_response, 'POST','JSON');
	}
	function flow_change_goods_number_response(result)
	{              
	
		if (result.error == 0)
		{
			var rec_id = result.rec_id;
			
			$('#goods_number_' +rec_id).val(result.goods_number);//更新数量	
			$('#total_items_' +rec_id).html(result.goods_subtotal);//更新小计	
			$('#amount').html(result.total_price); //更新合计
			$('#totalNumber').html(result.total_goods_count);//更新购物车数量
			$('.bag_total_info_box').html(result.total_info); 
		}
		else if (result.message != '')
		{
			alert(result.message);                
		}
	}