<?php echo $this->smarty_insert_scripts(array('files'=>'jquery-1.9.1.min.js,jquery.json.js,vancl_common.js')); ?>
<?php echo $this->smarty_insert_scripts(array('files'=>'transport_jquery.js,utils.js,jquery.SuperSlide.js')); ?>


<div class="headBox">
	<div class="headCon clearfix">
    	<div id="logo_areaID" class="hd_logo_area f_l clearfix"> <a href="./index.php" class="fl"> <img src="themes/21cake/images/logo.gif"></a></div>
        <div class="f_r">
        	<div class="clearfix">
            	<ul class="SiteNav clearfix" id="ECS_MEMBERZONE">
                	<li></li>
                </ul>
            </div>
            <div class="Nav clearfix">
				<ul>
                	<li><a href="user.php">登录</a></li>
                    <li><a href="user.php?act=register">注册</a></li>
                </ul>
			</div>
        </div>
    </div>
</div>



</div>
<script type="text/javascript">
function deleteCartGoods(rec_id)
{
	Ajax.call('delete_cart_goods.php', 'id='+rec_id, deleteCartGoodsResponse, 'POST', 'JSON');
}

/**
 * 接收返回的信息
 */
function deleteCartGoodsResponse(res)
{
  if (res.error)
  {
    alert(res.err_msg);
  }
  else
  {
	  $("#shoppingCarNone").html(res.content);
  }
}
</script> 
