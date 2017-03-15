<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
<meta name="Description" content="<?php echo $this->_var['description']; ?>" />

<title><?php echo $this->_var['page_title']; ?></title>



<link rel="shortcut icon" href="favicon.ico" />
<link rel="icon" href="animated_favicon.gif" type="image/gif" />
<link href="<?php echo $this->_var['ecs_css_path']; ?>" rel="stylesheet" type="text/css" />
<script>document.title=document.title.replace(/<br>+/i,"");</script>

<?php echo $this->smarty_insert_scripts(array('files'=>'common.js')); ?>
<script type="text/javascript">
function $id(element) {
  return document.getElementById(element);
}
//切屏--是按钮，_v是内容平台，_h是内容库
function reg(str){
  var bt=$id(str+"_b").getElementsByTagName("h2");
  for(var i=0;i<bt.length;i++){
    bt[i].subj=str;
    bt[i].pai=i;
    bt[i].style.cursor="pointer";
    bt[i].onclick=function(){
      $id(this.subj+"_v").innerHTML=$id(this.subj+"_h").getElementsByTagName("blockquote")[this.pai].innerHTML;
      for(var j=0;j<$id(this.subj+"_b").getElementsByTagName("h2").length;j++){
        var _bt=$id(this.subj+"_b").getElementsByTagName("h2")[j];
        var ison=j==this.pai;
        _bt.className=(ison?"":"h2bg");
      }
    }
  }
  $id(str+"_h").className="none";
  $id(str+"_v").innerHTML=$id(str+"_h").getElementsByTagName("blockquote")[0].innerHTML;
}

</script>
</head>
<body>
<?php echo $this->fetch('library/page_header.lbi'); ?><?php echo $this->smarty_insert_scripts(array('files'=>'magiczoomplus.js,easydialog.min.js,vancl_goods.js')); ?>
<div class="pt88">
<div class="danpinBox">
	<div class="bread-crumbs"><?php echo $this->_var['ur_here']; ?></div>
    <script>$(".bread-crumbs").find("br").remove();</script>
	<div class="danpinArea clearfix">
	<?php echo $this->fetch('library/goods_gallery.lbi'); ?>
    <div class="danpinRight">
        <form action="javascript:addToCart(<?php echo $this->_var['goods']['goods_id']; ?>)" method="post" name="ECS_FORMBUY" id="ECS_FORMBUY" >
            <div id="pricearea" name="Normal">
            	<h2 class="ProTit"><?php echo $this->_var['goods']['goods_style_name']; ?></h2>
				<?php if ($this->_var['cfg']['show_marketprice']): ?>
                <div class="MSpriceArea cuxiaoPrice" ><span style="color:#888"><?php echo $this->_var['lang']['market_price']; ?><strong><?php echo $this->_var['goods']['market_price']; ?></strong></span></div>
                <?php endif; ?>
                <div class="cuxiaoPrice tm-fcs-panel">
                	<span class="tehuiMoney" style="padding-left:5px;color:#888">
                    	价格：
                    	<?php if ($this->_var['goods']['is_promote'] && $this->_var['goods']['gmt_end_time']): ?>
                        <span style="color: #c40000;"><strong id="ECS_SHOPPRICE"><?php echo $this->_var['goods']['promote_price']; ?></strong></span>
                        <?php else: ?>
                        <span style="color: #c40000;"><strong id="ECS_SHOPPRICE"><?php echo $this->_var['goods']['shop_price_formated']; ?></strong></span>
                        <?php endif; ?>
                    </span>
					<span style="display:block;float:right;padding-right:10px;padding-top: 7px;color:#888">累计售出：<?php 
$k = array (
  'name' => 'goods_sells',
  'goods_id' => $this->_var['id'],
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?><?php echo $this->_var['goods']['measure_unit']; ?></span>
                </div>
                
                <?php if ($this->_var['goods']['goods_brand'] != "" && $this->_var['cfg']['show_brand']): ?>
                <!--<div class="cuxiaoPrice ">
                	<span class="tehuiMoney">
                    	<?php echo $this->_var['lang']['goods_brand']; ?> <a href="<?php echo $this->_var['goods']['goods_brand_url']; ?>" ><?php echo $this->_var['goods']['goods_brand']; ?></a>
                    </span>
                </div>-->
                <?php endif; ?>
                
            
            	<?php if ($this->_var['cfg']['show_goodsweight']): ?>
                <div class="info_list cuxiaoPrice"><?php echo $this->_var['lang']['goods_weight']; ?> <?php echo $this->_var['goods']['goods_weight']; ?> </div>
                <?php endif; ?> 
            
            	<?php if ($this->_var['cfg']['show_addtime']): ?>
                <div class="info_list cuxiaoPrice"><?php echo $this->_var['lang']['add_time']; ?> <?php echo $this->_var['goods']['add_time']; ?></div>
                <?php endif; ?> 
            
            	<?php if ($this->_var['goods']['give_integral'] > 0): ?>
                <div class="info_list"> <?php echo $this->_var['lang']['goods_give_integral']; ?><?php echo $this->_var['goods']['give_integral']; ?> <?php echo $this->_var['points_name']; ?> </div>
                <?php endif; ?> 
                
            	<?php if ($this->_var['goods']['bonus_money']): ?>
                <div class="info_list"> <?php echo $this->_var['lang']['goods_bonus']; ?><?php echo $this->_var['goods']['bonus_money']; ?> </div>
                <?php endif; ?>
                
                <?php if ($this->_var['cfg']['use_integral']): ?>
            	<div class="cuxiaoPrice" style="display:none;"><?php echo $this->_var['lang']['goods_integral']; ?><?php echo $this->_var['goods']['integral']; ?> <?php echo $this->_var['points_name']; ?></div>
                <?php endif; ?>
                
            	<?php if ($this->_var['goods']['is_shipping']): ?>
                <div class="info_list"> <?php echo $this->_var['lang']['goods_free_shipping']; ?></div>
                <?php endif; ?> 
            
            	<?php if ($this->_var['volume_price_list']): ?>
                <div class="info_list"> <font class="f1"><?php echo $this->_var['lang']['volume_price']; ?>：</font>
                    <table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#aad6ff">
                        <tr>
                            <td align="center" bgcolor="#FFFFFF"><strong><?php echo $this->_var['lang']['number_to']; ?></strong></td>
                            <td align="center" bgcolor="#FFFFFF"><strong><?php echo $this->_var['lang']['preferences_price']; ?></strong></td>
                        </tr>
                        <?php $_from = $this->_var['volume_price_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('price_key', 'price_list');if (count($_from)):
    foreach ($_from AS $this->_var['price_key'] => $this->_var['price_list']):
?>
                        <tr>
                            <td align="center" bgcolor="#FFFFFF" class="shop"><?php echo $this->_var['price_list']['number']; ?></td>
                            <td align="center" bgcolor="#FFFFFF" class="shop"><?php echo $this->_var['price_list']['format_price']; ?></td>
                        </tr>
                        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                    </table>
            	</div>
            	<?php endif; ?>
            </div>
            
            <div class="selectArea"> 
            	 
            	<?php $_from = $this->_var['specification']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('spec_key', 'spec');if (count($_from)):
    foreach ($_from AS $this->_var['spec_key'] => $this->_var['spec']):
?> 
                <?php if ($this->_var['spec']['attr_type'] == 1): ?> 
                <?php if ($this->_var['spec']['is_show_img'] == 1): ?>
                <div class="spec_img_box">
                	<span class="blank10"></span>
                	<div class="danpinColor_Select">
                    	<div style="line-height: 18px;" class="danpinColorTitle"><p> <?php echo $this->_var['spec']['name']; ?>：</p></div>
                    	<div class="spec_img_list">
                    	    <ul>
                        	    <?php $_from = $this->_var['spec']['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'value');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['value']):
?>
                            	<li title="<?php echo $this->_var['value']['label']; ?>" <?php if ($this->_var['key'] == 0): ?>class="onlickSpec"<?php endif; ?> >
                                	<div class="colorBlock"><a href="<?php echo $this->_var['value']['img_original']; ?>" rel="zoom-id: Zoomer" rev="<?php echo $this->_var['value']['img_original']; ?>"><img src="<?php echo $this->_var['value']['thumb_url']; ?>" /><p> <?php echo $this->_var['value']['label']; ?></p></a></div>
                                	<input type="radio" name="spec_<?php echo $this->_var['spec_key']; ?>" value="<?php echo $this->_var['value']['id']; ?>" id="spec_value_<?php echo $this->_var['value']['id']; ?>" <?php if ($this->_var['key'] == 0): ?>checked<?php endif; ?> style="display:none;" /><span class="colorHoverok"></span>
                            	</li>
                            	<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                            	<input type="hidden" name="spec_list" value="<?php echo $this->_var['key']; ?>" />
                        	</ul>
                	    </div>
                	</div>
            	</div>
            	<?php else: ?>
            	<div class="spec_box">
                	<div class="spec_list">
                    	<ul class="clearfix">
                        	<?php $_from = $this->_var['spec']['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'value');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['value']):
?>
                        	<li <?php if ($this->_var['key'] == 0): ?>class="onlickSpec"<?php endif; ?>>
                            	<p> <?php echo $this->_var['value']['label']; ?></p>
                            	<span></span>
                            	<input type="radio" name="spec_<?php echo $this->_var['spec_key']; ?>" value="<?php echo $this->_var['value']['id']; ?>" id="spec_value_<?php echo $this->_var['value']['id']; ?>" <?php if ($this->_var['key'] == 0): ?>checked<?php endif; ?> style="display:none;" />
                        	</li>
                        	<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                        	<input type="hidden" name="spec_list" value="<?php echo $this->_var['key']; ?>" />
                    	</ul>
                	</div>
            	</div>
            	<?php endif; ?> 
            	<?php else: ?>
            	<div class="spec_checkbox">
                	<div class="danpinColorTitle"><p> <?php echo $this->_var['spec']['name']; ?>：</p></div>
                	<div class="checkbox_list">
                	    <ul>
                    	    <?php $_from = $this->_var['spec']['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'value');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['value']):
?>
                        	<li><p><input type="checkbox" name="spec_<?php echo $this->_var['spec_key']; ?>" value="<?php echo $this->_var['value']['id']; ?>" id="spec_value_<?php echo $this->_var['value']['id']; ?>" onclick="changePrice()" style="margin-top:2px;*margin-top:0px; float:left;"/> <?php echo $this->_var['value']['label']; ?></p></li>
                        	<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                        	<input type="hidden" name="spec_list" value="<?php echo $this->_var['key']; ?>" />
                    	</ul>
                	</div>
            	</div>
            	<?php endif; ?> 
            	<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
            	
            
            <div class="number">
            	<a onclick="buyNumber.minus()" href="javascript:;" class="minus"></a><input name="number" id="number" type="text" value="1" class="inp_num" onkeyup="inputOnlyNum(this, 1, 999);"><a onclick="buyNumber.plus()" href="javascript:;" class="plus"></a>
                <span class="stock" style="display:inline-block;padding:5px 0 5px 20px;color: #878787;">
                    <?php if ($this->_var['goods']['goods_number'] != "" && $this->_var['cfg']['show_goodsnumber']): ?> 
                    <?php if ($this->_var['goods']['goods_number'] == 0): ?> 
                    <?php echo $this->_var['lang']['goods_number']; ?>
                    <?php echo $this->_var['lang']['stock_up']; ?> 
                    <?php else: ?> 
                    <?php echo $this->_var['lang']['goods_number']; ?>
                    <?php echo $this->_var['goods']['goods_number']; ?> <?php echo $this->_var['goods']['measure_unit']; ?> 
                    <?php endif; ?> 
                    <?php endif; ?> 
                </span> 
<script type="text/javascript">
	// add by liuguichun 2011-7-19
	var buyNumber = {
		maxNumber : 100,
		minNumber : 1,
		defaultNumber : function(){
			var defaultnumber = $('#number').attr('value');
			defaultnumber = parseInt(defaultnumber)
			if(defaultnumber < 1){
				defaultnumber = 1;
			}
			return defaultnumber;
		},
																										
		goodNumber : function(num){
			if(typeof(num) == 'number'){
				return $('#number').val(num);
			}else{
				return parseInt($('#number').val());
			}
																											
		},
		plus : function(){
			var num = buyNumber.goodNumber() + buyNumber.defaultNumber();
			if(num <= buyNumber.maxNumber){
				buyNumber.goodNumber(num);
			}
		},
		minus : function(){
			var num = buyNumber.goodNumber() - buyNumber.defaultNumber();
			if(num >= buyNumber.minNumber){
				buyNumber.goodNumber(num);
			}
		}
																										
	}
</script> 
            </div>
            
            <span class="blank0"></span>
            <div class="shoppingNews">
            	<a href="javascript:addToCart(<?php echo $this->_var['goods']['goods_id']; ?>);" class="dp_gwbtn">立即购买</a><a class="dp_gwbtn track on" href="javascript:addToCart1(<?php echo $this->_var['goods']['goods_id']; ?>)" name="item-item-select-shopping" id="addToShoppingCar">放入购物车</a>
                
                <div class="AddCartTips AddCartTipsGoodDetail">
                    <div class="box">
                        <i>×</i>
                        <p>添加成功。</p>
                        <div class="btn">
                            <span>继续购物</span>
                            <a href="flow.php">去购物车结算</a>
                        </div>
                    </div>
                    <em></em>
                </div>
                <script>
					$(function(){
						var on = $(".shoppingNews .on");
						//
						var on2 = $(this).find(".AddCartTips i")
						on2.click(function(){
							$(this).parents(".AddCartTips").hide();
						})
						//
						var on3 = $(this).find(".AddCartTips span");
						on3.click(function(){
							$(this).parents(".AddCartTips").hide();
						})
					})
				  </script>
            </div>
			<div class="ProPresent"><?php echo $this->_var['goods']['goods_brief']; ?></div>
            <span class="blank0"></span> <span class="blank0"></span> <span class="blank0"></span> <span class="blank0"></span> <span class="blank0"></span> <span class="blank20"></span>
          </div>
          <div class="blank0"> </div>
          <div class="blank15"> </div>
          <?php if ($this->_var['promotion']): ?>
          <div id="promotion">
            <div class="danpin_YhTsBox danpin_YhTsTab ">
              <h4> <span>优惠活动</span></h4>
              <ul>
                <?php $_from = $this->_var['promotion']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
                
                <li><a href="<?php echo $this->_var['item']['url']; ?>" title="<?php echo $this->_var['lang'][$this->_var['item']['type']]; ?> <?php echo $this->_var['item']['act_name']; ?><?php echo $this->_var['item']['time']; ?>"><?php echo $this->_var['item']['act_name']; ?></a></li>
                
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
              </ul>
            </div>
          </div>
          <?php endif; ?>
          <div id="payarea"> </div>
        </form>
    </div>
</div>
<script>
	$(".ProTit").find("br").remove();
	$("#promotion li a").find("br").remove();
</script>
	<span class="blank25"></span>
	<div class="sideBarSettabArea">
  
  <div class="RsetTabArea">
    <div class="Product_InformationBuy on">
    	<h2>商品详情</h2>
        <i></i>
    </div>
    <div class="RsetTabCon">
          <div id="attr">
            <div class="dpShuXing">
              <ul>
                <?php if ($this->_var['properties']): ?> 
                <?php $_from = $this->_var['properties']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'property_group');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['property_group']):
?> 
                <?php $_from = $this->_var['property_group']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'property');$this->_foreach['no'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['no']['total'] > 0):
    foreach ($_from AS $this->_var['property']):
        $this->_foreach['no']['iteration']++;
?>
                <li <?php if (($this->_foreach['no']['iteration'] - 1) % 3 == 2): ?>class="tree"<?php endif; ?>><span><?php echo htmlspecialchars($this->_var['property']['name']); ?>：<?php echo $this->_var['property']['value']; ?></span></li>
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
                <?php endif; ?>
              </ul>
              <span class="blank0"></span>
            </div>
          </div>
          <div class="imgCon detail-content" id="relatedshow">
            <div class="DetailPicture"><?php echo $this->_var['goods']['goods_desc']; ?></div>
          </div>
        </div>
      </div>
    </div>
    <span class="blank20"></span>
     <div class="RsetTabArea">
     	<div class="Product_InformationBuy on">
            <h2>累积评论（<b><?php echo $this->_var['comment_percent']['comment_count']; ?></b>）</span></h2>
            <i></i>
        </div>
        <div class="RsetTabCon">
          <div class="NewComment clearfix">
            <div style="height: auto;" class="NewCommentOne">
              
              <div class="plGoodBad">
                <ul>
                  <li class="goodPing">
                    <p> 好评率</p>
                    <p class="goodPLv"> <?php echo $this->_var['comment_percent']['haoping_percent']; ?>%</p>
                  </li>
                  <li class="haozhonghuai">
                    <dl>
                      <dd> 好评<span><strong style="width:<?php echo $this->_var['comment_percent']['haoping_percent']; ?>%">&nbsp;</strong></span><?php echo $this->_var['comment_percent']['haoping_percent']; ?>%</dd>
                      <dd> 中评<span class="boxZP"><strong style="width:<?php echo $this->_var['comment_percent']['zhongping_percent']; ?>%">&nbsp;</strong></span><?php echo $this->_var['comment_percent']['zhongping_percent']; ?>%</dd>
                      <dd> 差评<span class="boxCP"><strong style="width:<?php echo $this->_var['comment_percent']['chaping_percent']; ?>%">&nbsp;</strong></span><?php echo $this->_var['comment_percent']['chaping_percent']; ?>%</dd>
                    </dl>
                  </li>
                  <li class="meGouMai">
                    <p> 我已购买过此商品</p>
                    <a class="goumaiButton track"  href="javascript:void(0);"> </a> <span class="blank10"></span></li>
                </ul>
              </div>
            </div>
            <span class="blank10"></span> <span class="blank10"></span> <?php echo $this->fetch('library/comments.lbi'); ?> </div>
        </div>
    </div>
    <script>
  	$(".Product_InformationBuy").click(function(){
		if($(this).parent().find(".Product_InformationBuy").hasClass("on"))
		{
			$(this).parent().find(".RsetTabCon").slideUp(function(){
				$(this).parent().find(".Product_InformationBuy").removeClass("on");
			});	
		}
		else
		{
			$(this).addClass("on");
			$(this).parent().find(".RsetTabCon").slideDown();	
		}
	});
	//
  </script>
  </div>
</div>
</div>

<div id="PageFooter">
	<div class="PageFooter"><?php echo $this->fetch('library/page_footer.lbi'); ?></div>
</div>
</div>
</body>
<script type="text/javascript">
var goods_id = <?php echo $this->_var['goods_id']; ?>;
var goodsattr_style = <?php echo empty($this->_var['cfg']['goodsattr_style']) ? '1' : $this->_var['cfg']['goodsattr_style']; ?>;
var gmt_end_time = <?php echo empty($this->_var['promote_end_time']) ? '0' : $this->_var['promote_end_time']; ?>;
<?php $_from = $this->_var['lang']['goods_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
var goodsId = <?php echo $this->_var['goods_id']; ?>;
var now_time = <?php echo $this->_var['now_time']; ?>;


onload = function(){
  changePrice();
  fixpng();
  try {onload_leftTime();}
  catch (e) {}
}

/**
 * 点选可选属性或改变数量时修改商品价格的函数
 */
function changePrice()
{
  var attr = getSelectedAttributes(document.forms['ECS_FORMBUY']);

  var qty = document.forms['ECS_FORMBUY'].elements['number'].value;

  Ajax.call('goods.php', 'act=price&id=' + goodsId + '&attr=' + attr + '&number=' + qty, changePriceResponse, 'GET', 'JSON');
}

/**
 * 接收返回的信息
 */
function changePriceResponse(res)
{
  if (res.err_msg.length > 0)
  {
    alert(res.err_msg);
  }
  else
  {
    document.forms['ECS_FORMBUY'].elements['number'].value = res.qty;
    if (document.getElementById('ECS_SHOPPRICE'))
      document.getElementById('ECS_SHOPPRICE').innerHTML = res.result;
    if (document.getElementById('ECS_GOODS_AMOUNT'))
      document.getElementById('ECS_GOODS_AMOUNT').innerHTML = res.result;
	
  }
}

</script>
</html>
