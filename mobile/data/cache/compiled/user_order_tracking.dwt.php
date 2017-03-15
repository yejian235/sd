<?php echo $this->fetch('library/user_header.lbi'); ?>
<section class="user-order-tracking ect-padding-tb ect-padding-lr" style="border-top:none;">
	<ul id="queryResult">
    </ul>
</section>
</div>
<?php echo $this->fetch('library/search.lbi'); ?>    
<?php echo $this->fetch('library/page_footer.lbi'); ?>
<script type="text/javascript">
jQuery(function($){
	var resultJson = <?php echo $this->_var['trackinfo']; ?>;
	var resultTable = $("#queryResult");
	resultTable.empty();
	if(resultJson.status == 200) { //成功
		var resultData = resultJson.data;
		for (var i = resultData.length - 1; i >= 0; i--) {
			var className = "";
			if(i%2 == 0){
				className = "even";
			}else{
				className="odd";
			}
			if(resultData.length == 1){
				if(resultJson.ischeck == 1){
					className += " checked";
				}else{
					className += " wait";
				}
			}else if(i == resultData.length - 1){
				className += " first-line";
			}else if(i == 0){
				className += " last-line";
				if(resultJson.ischeck == 1){
					className += " checked";
				}else{
					className += " wait";
				}
			}

			var index = resultData[i].ftime.indexOf(" ");
			var result_date = resultData[i].ftime.substring(0,index);
			var result_time = resultData[i].ftime.substring(index+1);

			var s_index = result_time.lastIndexOf(":");
			result_time = result_time.substring(0,s_index);
			resultTable.append("<li><i class='fa fa-check-circle ect-color'></i><p>" + resultData[i].context + "</p><p class='tracking-time'>" + result_date + "&nbsp;"+result_time + "</p></li>");
		}
		resultTable.append(' <p class="tracking-title"><?php echo $this->_var['shipping_name']; ?><br /><span><?php echo $this->_var['invoice_no']; ?></span></p>');
		$("body").animate({scrollTop: "1000px"}, 1000);
	}else if(resultJson.status == 400){
		resultTable.append("<p>订单暂未发货，请稍后再来查询</p>");				
	}else{
		resultTable.append("<p>"+ resultJson.message +"</p>");
	}
})
</script>
</body>
</html>