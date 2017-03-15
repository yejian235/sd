<?php echo $this->smarty_insert_scripts(array('files'=>'jquery-1.9.1.min.js,jquery.json.js,vancl_common.js')); ?>
<?php echo $this->smarty_insert_scripts(array('files'=>'transport_jquery.js,utils.js,jquery.SuperSlide.js')); ?>


<div class="headBox">
	<div class="headCon clearfix">
    	<div id="logo_areaID" class="hd_logo_area f_l clearfix"> <a href="./index.php" class="fl"> <img src="themes/21cake/images/logo.gif"></a></div>
        <div class="f_r">
        	<div class="clearfix">
            	<ul class="SiteNav clearfix" id="ECS_MEMBERZONE">
                	
                    <?php 
$k = array (
  'name' => 'member_info',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>
                    <li><a class="shopCart" href="flow.php" id="shoppingcar_link"><?php 
$k = array (
  'name' => 'cart_info',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?></a></li>
                    <li class="guanzhu">
                    	<span></span>
                        <div class="otherBox">
                        	<i></i>
                        	<em></em>
                        	<div class="otherBoxCon"><img src="themes/21cake/images/2wm_wx.jpg"><p>扫描顺旦商贸方形<br>微信二维码</p></div>
                        </div>
                    </li>
                    <li class="guanzhu sanweobo">
                    	<span></span>
                        <div class="otherBox">
                        	<i></i>
                        	<em></em>
                        	<div class="otherBoxCon"><img src="themes/21cake/images/2wm_xl.jpg"><p>关注官方微博：顺旦</p></div>
                        </div>
                    </li>
                    <?php if ($this->_var['navigator_list']['top']): ?>
                    <li>
                    	<?php $_from = $this->_var['navigator_list']['top']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'nav');$this->_foreach['nav_top_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['nav_top_list']['total'] > 0):
    foreach ($_from AS $this->_var['nav']):
        $this->_foreach['nav_top_list']['iteration']++;
?>
                        <a href="<?php echo $this->_var['nav']['url']; ?>" <?php if ($this->_var['nav']['opennew'] == 1): ?>target="_blank"<?php endif; ?>><?php echo $this->_var['nav']['name']; ?></a>
                        <?php if (! ($this->_foreach['nav_top_list']['iteration'] == $this->_foreach['nav_top_list']['total'])): ?>&nbsp;&nbsp;|&nbsp;&nbsp;<?php endif; ?>
                        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                    </li>
                    <?php endif; ?>
                </ul>
                <script>
                	$(".SiteNav li.topmemlist,.SiteNav li.guanzhu").hover(function(){
						$(this).addClass("on");
					},function(){
						$(this).removeClass("on");
					});
                </script>
            </div>
            <div class="Nav clearfix">
				<ul>
                    <li <?php if ($this->_var['navigator_list']['config']['index'] == 1): ?> class="cur"<?php endif; ?>><a href="index.php"><?php echo $this->_var['lang']['home']; ?></a></li>
                    <?php $_from = $this->_var['navigator_list']['middle']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'nav');$this->_foreach['nav_middle_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['nav_middle_list']['total'] > 0):
    foreach ($_from AS $this->_var['nav']):
        $this->_foreach['nav_middle_list']['iteration']++;
?>
                    <li <?php if ($this->_var['nav']['active'] == 1): ?> class="cur"<?php endif; ?>><a href="<?php echo $this->_var['nav']['url']; ?>" <?php if ($this->_var['nav']['opennew'] == 1): ?>target="_blank" <?php endif; ?>><?php echo $this->_var['nav']['name']; ?></a></li>
                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
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
