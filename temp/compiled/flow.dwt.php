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
<link href="themes/21cake/member.css" rel="stylesheet" type="text/css" />

<?php echo $this->smarty_insert_scripts(array('files'=>'common.js,shopping_flow.js')); ?>
</head>
<body>
<?php echo $this->fetch('library/page_header.lbi'); ?><?php echo $this->smarty_insert_scripts(array('files'=>'vancl_flow.js')); ?>
<div id="wrapper" class="pt88">
  <?php if ($this->_var['step'] == "cart"): ?> 
   
  
  <?php echo $this->smarty_insert_scripts(array('files'=>'showdiv.js')); ?> 
  <script type="text/javascript">
  <?php $_from = $this->_var['lang']['password_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
    var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
  </script>


<div id="location">
	<ul class="clearfix">
    	<li class="MyCart"><em>购物车</em></li>
        <li class="SubmitOrder"><span>填写和提交订单信息</span></li>
        <li class="SubmitSuccess"><span>成功提交订单</span></li>
    </ul>
</div>


<div id="content">
	<div id="cart-gift">
    	<div class="cart-top"><h2>我的购物车</h2></div>
        <div id="cart-product" class="clearfix">
        	<div id="batchdelcart">
            	<form id="formCart" name="formCart" method="post" action="flow.php">
               	  <table cellspacing="0" class="CartTit">
                    	<thead>
                        	<tr>
                              <th class="name" width="36%"> <?php echo $this->_var['lang']['goods_name']; ?> </th>
                              <th class="size" width="12%"> <?php echo $this->_var['lang']['goods_attr']; ?> </th>
                              <th class="price" width="14%"> <?php echo $this->_var['lang']['shop_prices']; ?> </th>
                              <th class="qty" width="17%"> <?php echo $this->_var['lang']['number']; ?> </th>
                              <th class="subtotal" width="12%"> <?php echo $this->_var['lang']['subtotal']; ?> </th>
                              <th class="operate"> <?php echo $this->_var['lang']['handle']; ?> </th>
                            </tr>
                        </thead>
                    </table>
                    <table border="0" cellpadding="0" cellspacing="0" class="CartCon">
            			<tbody id="vancl-general-product" name="vancl-general-product">
                        	<?php $_from = $this->_var['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');if (count($_from)):
    foreach ($_from AS $this->_var['goods']):
?>
                        	<tr>
                                <td class="image bd-bottom" width="13.5%"><a target="_blank" href="goods.php?id=<?php echo $this->_var['goods']['goods_id']; ?>"> <img alt="<?php echo htmlspecialchars($this->_var['goods']['goods_name']); ?>" src="<?php echo $this->_var['goods']['goods_thumb']; ?>"></a></td>
                                
                                <?php if ($this->_var['goods']['goods_id'] > 0 && $this->_var['goods']['extension_code'] != 'package_buy'): ?>
                                <td class="name bd-bottom" width="22.5%">
                                	<a target="_blank" href="goods.php?id=<?php echo $this->_var['goods']['goods_id']; ?>"><?php echo $this->_var['goods']['goods_name']; ?>
                                        <?php if ($this->_var['goods']['parent_id'] > 0): ?>
                                        <span style="color:#FF0000">（<?php echo $this->_var['lang']['accessories']; ?>）</span>
                                        <?php endif; ?>
                                    
                                        <?php if ($this->_var['goods']['is_gift'] > 0): ?>
                                        <span style="color:#FF0000">（<?php echo $this->_var['lang']['largess']; ?>）</span>
                                        <?php endif; ?>
                                    </a>
                                </td>
                                
                                <?php elseif ($this->_var['goods']['goods_id'] > 0 && $this->_var['goods']['extension_code'] == 'package_buy'): ?>
                                <td class="name bd-bottom" width="12%">
                                	<a href="javascript:void(0)" onclick="setSuitShow(<?php echo $this->_var['goods']['goods_id']; ?>)" class="f6"><?php echo $this->_var['goods']['goods_name']; ?><span style="color:#FF0000;">（<?php echo $this->_var['lang']['remark_package']; ?>）</span></a>
                                    <div id="suit_<?php echo $this->_var['goods']['goods_id']; ?>" style="display:none">
                                    	<?php $_from = $this->_var['goods']['package_goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'package_goods_list');if (count($_from)):
    foreach ($_from AS $this->_var['package_goods_list']):
?>
                                        <a href="goods.php?id=<?php echo $this->_var['package_goods_list']['goods_id']; ?>" target="_blank" class="f6"><?php echo $this->_var['package_goods_list']['goods_name']; ?></a><br />
                                        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                    </div>
                                </td>
                                <?php else: ?>
                                <td class="name bd-bottom"><a target="_blank" href="javascript:void(0);" title="<?php echo $this->_var['goods']['goods_name']; ?>"><?php echo $this->_var['goods']['goods_name']; ?></a></td>
                                <?php endif; ?>
                                
                                <td class="size bd-bottom" width="12%"> <?php echo nl2br($this->_var['goods']['goods_attr']); ?> </td>
                                <td class="price bd-bottom" width="14%"> <?php echo $this->_var['goods']['goods_price']; ?> </td>
                                
                                <td class="" width="17%">
                                	<div class="number" style="width:110px; margin:0 auto;">
                                    <?php if ($this->_var['goods']['goods_id'] > 0 && $this->_var['goods']['is_gift'] == 0 && $this->_var['goods']['parent_id'] == 0): ?>
                                    <a class="minus" onclick="flowClickCartNum(<?php echo $this->_var['goods']['rec_id']; ?>,-1);" href="javascript:void(0);" ></a>
                                    <input name="itemNumBox" id="goods_number_<?php echo $this->_var['goods']['rec_id']; ?>" value="<?php echo $this->_var['goods']['goods_number']; ?>"  type="text" class="inp_num" >
                                    <a class="plus" onclick="flowClickCartNum(<?php echo $this->_var['goods']['rec_id']; ?>,+1);" href="javascript:void(0);" ></a>
                                    <?php else: ?>
                                    <?php echo $this->_var['goods']['goods_number']; ?>
                                    <?php endif; ?>
                                    </div>
                                </td>
                                <td class="subtotal bd-bottom" width="12%" id="total_items_<?php echo $this->_var['goods']['rec_id']; ?>"> <?php echo $this->_var['goods']['subtotal']; ?> </td>
                                <td class="operate bd-bottom" width="9%">
                                	<a href="javascript:if (confirm('<?php echo $this->_var['lang']['drop_goods_confirm']; ?>')) location.href='flow.php?step=drop_goods&amp;id=<?php echo $this->_var['goods']['rec_id']; ?>'; " class="del track"><?php echo $this->_var['lang']['drop']; ?></a>
                                    <?php if ($_SESSION['user_id'] > 0 && $this->_var['goods']['extension_code'] != 'package_buy'): ?>
                                    <a href="javascript:if (confirm('<?php echo $this->_var['lang']['drop_goods_confirm']; ?>')) location.href='flow.php?step=drop_to_collect&amp;id=<?php echo $this->_var['goods']['rec_id']; ?>'; " class="add-faverate track" style="display:none;"><?php echo $this->_var['lang']['drop_to_collect']; ?></a>
                                    <?php endif; ?>
                                </td>
                            </tr>
                            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                        </tbody>
                    </table>
					
                    <div id="bar-summary" class="bar-summary clearfix">
                    	<div class="summary clearfix">
                        	<div class="f_r"><span>（共<em id="totalNumber"><?php echo $this->_var['total']['goods_count']; ?></em>件）</span> 总计金额：<span class="amount" id="amount"><?php echo $this->_var['total']['goods_price']; ?></span> </div>
                        </div>
                        <div class="btn-panel clearfix">
                        	<input type="button" value="" class="bnt_blue_q" onclick="location.href='flow.php?step=clear'" title="清空购物车" />
                        	<a class="checkout track" href="flow.php?step=checkout" id="sp_cart_mycar_goPay">下单结算</a> <input type="hidden" name="step" value="update_cart" />
                            <a href="./index.php" class="go-buy track" name="sp_cart_mycar_goBuy">继续购物</a>
                        </div>
                    </div>
                </form> 
       <?php if ($this->_var['fittings_list']): ?>
  <?php echo $this->smarty_insert_scripts(array('files'=>'transport_jquery.js')); ?>
  <script type="text/javascript" charset="utf-8">
  function fittings_to_flow(goodsId,parentId)
  {
    var goods        = new Object();
    var spec_arr     = new Array();
    var number       = 1;
    goods.spec     = spec_arr;
    goods.goods_id = goodsId;
    goods.number   = number;
    goods.parent   = parentId;
    Ajax.call('flow.php?step=add_to_cart', 'goods=' + $.toJSON(goods), fittings_to_flow_response, 'POST', 'JSON');
  }
  function fittings_to_flow_response(result)
  {
    if (result.error > 0)
    {
      // 如果需要缺货登记，跳转
      if (result.error == 2)
      {
        if (confirm(result.message))
        {
          location.href = 'user.php?act=add_booking&id=' + result.goods_id;
        }
      }
      else if (result.error == 6)
      {
        openSpeDiv(result.message, result.goods_id, result.parent);
      }
      else
      {
        alert(result.message);
      }
    }
    else
    {
      location.href = 'flow.php';
    }
  }
  </script>
<div class="cart-moregoods" >
	<h2><?php echo $this->_var['lang']['goods_fittings']; ?></h2>
    <form action="flow.php" method="post">
    <ul class="goods-list clearfix">
    	<?php $_from = $this->_var['fittings_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'fittings');$this->_foreach['goods'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['goods']['total'] > 0):
    foreach ($_from AS $this->_var['fittings']):
        $this->_foreach['goods']['iteration']++;
?>
        <?php if ($this->_foreach['goods']['iteration'] < 5): ?>
    	<li class="clearfix">
        	<div class="goods-pic"><a href="<?php echo $this->_var['fittings']['url']; ?>" target="_blank" title="<?php echo $this->_var['fittings']['goods_name']; ?>"><img src="<?php echo $this->_var['fittings']['goods_thumb']; ?>" width="90" height="90" /></a></div>
            <h3 class="goods-name"><a href="<?php echo $this->_var['fittings']['url']; ?>" target="_blank" title="<?php echo $this->_var['fittings']['goods_name']; ?>"><?php echo htmlspecialchars($this->_var['fittings']['short_name']); ?></a></h3>
            <div class="goods-price"><i><?php echo $this->_var['fittings']['fittings_price']; ?></i></div>
            <div class="addcart"><a href="javascript:fittings_to_flow(<?php echo $this->_var['fittings']['goods_id']; ?>,<?php echo $this->_var['fittings']['parent_id']; ?>)">加入购物车</a></div>
        </li>
        <?php endif; ?>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    </ul>
    </form>
</div>
<?php endif; ?>
        </div>
      </div>
    </div>
  </div>
  
<script>
	$(".CartCon td.name").each(function(){
		var str=$(this).find("a").text().replace(/<br>+/ig,"");
		$(this).find("a").text(str)
	})
	//
	$(".cart-moregoods ul li").each(function(){
		var str02=$(this).find(".goods-name a").text().replace(/<br>+/ig,"")
		$(this).find(".goods-name a").text(str02)
	})
</script>
  <?php endif; ?> 
  
  <?php if ($this->_var['step'] == "consignee"): ?> 
   
  
  <?php echo $this->smarty_insert_scripts(array('files'=>'region.js,utils.js')); ?>
  <script type="text/javascript">
          region.isAdmin = false;
          <?php $_from = $this->_var['lang']['flow_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
          var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

          
          onload = function() {
            if (!document.all)
            {
              document.forms['theForm'].reset();
            }
          }
          
        </script>


<div id="location">
	<ul class="clearfix">
    	<li class="MyCart"><span>购物车</span></li>
        <li class="SubmitOrder"><em>填写和提交订单信息</em></li>
        <li class="SubmitSuccess"><span>成功提交订单</span></li>
    </ul>
</div>

 
   
  <?php $_from = $this->_var['consignee_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('sn', 'consignee');if (count($_from)):
    foreach ($_from AS $this->_var['sn'] => $this->_var['consignee']):
?>
  <form action="flow.php" method="post" name="theForm" id="theForm" onsubmit="return checkConsignee(this)">
    <?php echo $this->fetch('library/consignee.lbi'); ?>
    <div class="blank20"></div>
  </form>
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
  <?php endif; ?> 
  
  <?php if ($this->_var['step'] == "checkout"): ?>

<div id="location">
	<ul class="clearfix">
    	<li class="MyCart"><span>购物车</span></li>
        <li class="SubmitOrder"><em>填写和提交订单信息</em></li>
        <li class="SubmitSuccess"><span>成功提交订单</span></li>
    </ul>
</div>

<div class="order-main">
  <div class="cart-top"><h2>填写和提交订单信息</h2></div>
  <div class="blank10"></div>
  <form action="flow.php" method="post" name="theForm" id="theForm" onsubmit="return checkOrderForm(this)">
    <script type="text/javascript">
        var flow_no_payment = "<?php echo $this->_var['lang']['flow_no_payment']; ?>";
        var flow_no_shipping = "<?php echo $this->_var['lang']['flow_no_shipping']; ?>";
        </script>

    <div class="order-section">
        <div class="OrderSectionTit"><b><?php echo $this->_var['lang']['consignee_info']; ?></b><a href="flow.php?step=consignee"><?php echo $this->_var['lang']['modify']; ?></a></div>
        <div class="OrderSectionCon AddressCon">
            <span><?php echo htmlspecialchars($this->_var['consignee']['consignee']); ?></span><span><?php echo $this->_var['region_info']['province']; ?><?php echo $this->_var['region_info']['city']; ?><?php echo htmlspecialchars($this->_var['consignee']['address']); ?></span><span>手机号：<?php echo $this->_var['consignee']['tel']; ?></span><span><?php echo htmlspecialchars($this->_var['consignee']['email']); ?></span>
        </div>
        <div class="blank10"></div>
    </div>
    <div class="blank20"></div>
    
    <?php if ($this->_var['total']['real_goods_count'] != 0): ?>
    <div class="order-section">
        <div class="OrderSectionTit"><b><?php echo $this->_var['lang']['shipping_method']; ?></b></div>
        <div class="OrderSectionCon DeliveryCon">
            <ul class="clearfix">
            	<?php $_from = $this->_var['shipping_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'shipping');$this->_foreach['no'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['no']['total'] > 0):
    foreach ($_from AS $this->_var['shipping']):
        $this->_foreach['no']['iteration']++;
?>
            	<li><input name="shipping" type="radio" value="<?php echo $this->_var['shipping']['shipping_id']; ?>" <?php if ($this->_var['order']['shipping_id'] == $this->_var['shipping']['shipping_id']): ?>checked="true"<?php endif; ?> supportCod="<?php echo $this->_var['shipping']['support_cod']; ?>" insure="<?php echo $this->_var['shipping']['insure']; ?>" onclick="selectShipping(this)" id="Delivery_0<?php echo $this->_foreach['no']['iteration']; ?>" class="InputRadio" /><label for="Delivery_0<?php echo $this->_foreach['no']['iteration']; ?>"><?php echo $this->_var['shipping']['shipping_name']; ?>（<?php echo $this->_var['lang']['fee']; ?>：<?php echo $this->_var['shipping']['format_shipping_fee']; ?>）</label></li>
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                
                <li><label for="ECS_NEEDINSURE">
                <input name="need_insure" id="ECS_NEEDINSURE" type="checkbox"  onclick="selectInsure(this.checked)" value="1" <?php if ($this->_var['order']['need_insure']): ?>checked="true"<?php endif; ?> <?php if ($this->_var['insure_disabled']): ?>disabled="true"<?php endif; ?> class="InputRadio" /> <?php echo $this->_var['lang']['need_insure']; ?> </label></li>

            </ul>
        </div>
    </div>
    <?php else: ?>
    <input name = "shipping" type="radio" value = "-1" checked="checked"  style="display:none"/>
    <?php endif; ?>

    <div class="blank20"></div>
    
    <?php if ($this->_var['is_exchange_goods'] != 1 || $this->_var['total']['real_goods_count'] != 0): ?>
    <div class="order-section">
    	<div class="OrderSectionTit"><b><?php echo $this->_var['lang']['payment_method']; ?></b></div>
        <div class="OrderSectionCon DeliveryCon">
        	<ul class="clearfix">
            	<?php $_from = $this->_var['payment_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'payment');$this->_foreach['no'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['no']['total'] > 0):
    foreach ($_from AS $this->_var['payment']):
        $this->_foreach['no']['iteration']++;
?>
            	<li><input type="radio" name="payment" value="<?php echo $this->_var['payment']['pay_id']; ?>" <?php if ($this->_var['order']['pay_id'] == $this->_var['payment']['pay_id']): ?>checked<?php endif; ?> isCod="<?php echo $this->_var['payment']['is_cod']; ?>" onclick="selectPayment(this)" <?php if ($this->_var['cod_disabled'] && $this->_var['payment']['is_cod'] == "1"): ?>disabled="true"<?php endif; ?> id="Payment_0<?php echo $this->_foreach['no']['iteration']; ?>" class="InputRadio"/><label for="Payment_0<?php echo $this->_foreach['no']['iteration']; ?>"><?php echo $this->_var['payment']['pay_name']; ?>（<?php echo $this->_var['lang']['pay_fee']; ?>：<?php echo $this->_var['payment']['format_pay_fee']; ?>）</label></li>
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            </ul>
        </div>
    </div>
    <?php else: ?>
    <input name = "payment" type="radio" value = "-1" checked="checked"  style="display:none"/>
    <?php endif; ?>
    <div class="blank10"></div>
    
    <?php if ($this->_var['pack_list']): ?>
    <div class="order-section">
    	<div class="OrderSectionTit"><b><?php echo $this->_var['lang']['goods_package']; ?></b></div>
        <div class="OrderSectionCon DeliveryCon DeliveryCon02">
        	<ul class="clearfix">
            	<li><input type="radio" name="pack" value="0" <?php if ($this->_var['order']['pack_id'] == 0): ?>checked="true"<?php endif; ?> onclick="selectPack(this)" id="pack_0" class="InputRadio" /><label for="pack_0"><?php echo $this->_var['lang']['no_pack']; ?></label></li>
                <?php $_from = $this->_var['pack_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'pack');$this->_foreach['no'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['no']['total'] > 0):
    foreach ($_from AS $this->_var['pack']):
        $this->_foreach['no']['iteration']++;
?>
            	<li><input type="radio" name="pack" value="<?php echo $this->_var['pack']['pack_id']; ?>" <?php if ($this->_var['order']['pack_id'] == $this->_var['pack']['pack_id']): ?>checked="true"<?php endif; ?> onclick="selectPack(this)" id="pack_0<?php echo $this->_foreach['no']['iteration']; ?>" class="InputRadio" /><label for="pack_0<?php echo $this->_foreach['no']['iteration']; ?>"><?php echo $this->_var['pack']['pack_name']; ?>（<?php echo $this->_var['lang']['price']; ?>：<?php echo $this->_var['pack']['format_pack_fee']; ?>）</label><?php if ($this->_var['pack']['pack_img']): ?><a href="data/packimg/<?php echo $this->_var['pack']['pack_img']; ?>" target="_blank" class="f6"><?php echo $this->_var['lang']['view']; ?>包装</a><?php else: ?><?php echo $this->_var['lang']['no']; ?><?php endif; ?></li>
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            </ul>
        </div>
    </div>
    <div class="blank10"></div>
    <?php endif; ?>
    
    <?php if ($this->_var['card_list']): ?>
    <div class="order-section">
    	<div class="OrderSectionTit"><b><?php echo $this->_var['lang']['goods_card']; ?></b></div>
        <div class="OrderSectionCon DeliveryCon DeliveryCon02">
        	<ul class="clearfix">
            	<li><input type="radio" name="card" value="0" <?php if ($this->_var['order']['card_id'] == 0): ?>checked="true"<?php endif; ?> onclick="selectCard(this)" id="Card_0" class="InputRadio" /><label for="Card_0"><?php echo $this->_var['lang']['no_card']; ?></label></li>
                <?php $_from = $this->_var['card_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'card');$this->_foreach['no'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['no']['total'] > 0):
    foreach ($_from AS $this->_var['card']):
        $this->_foreach['no']['iteration']++;
?>
                <li class="on">
                	<input type="radio" name="card" value="<?php echo $this->_var['card']['card_id']; ?>" <?php if ($this->_var['order']['card_id'] == $this->_var['card']['card_id']): ?>checked="true"<?php endif; ?> onclick="selectCard(this)" id="Card_0<?php echo $this->_foreach['no']['iteration']; ?>" class="InputRadio" /><label for="Card_0<?php echo $this->_foreach['no']['iteration']; ?>"><?php echo $this->_var['card']['card_name']; ?>（<?php echo $this->_var['lang']['price']; ?>：<?php echo $this->_var['card']['format_card_fee']; ?>）</label><?php if ($this->_var['card']['card_img']): ?><a href="data/cardimg/<?php echo $this->_var['card']['card_img']; ?>" target="_blank" class="f6"><?php echo $this->_var['lang']['view']; ?>贺卡</a><?php else: ?><?php echo $this->_var['lang']['no']; ?><?php endif; ?>
                </li>
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            </ul>
            <div class="Greetings"><span class="f_l"><?php echo $this->_var['lang']['bless_note']; ?>：</span><textarea name="card_message" cols="60" rows="3" style="width:auto; border:1px solid #ccc;"><?php echo htmlspecialchars($this->_var['order']['card_message']); ?></textarea></div>
        </div>
    </div>
    <div class="blank10"></div>
    <?php endif; ?>
    
    <div class="order-section order-section02">
    	<div class="OrderSectionTit OrderSectionTit02"><b><?php echo $this->_var['lang']['goods_list']; ?></b><?php if ($this->_var['allow_edit_cart']): ?><a href="flow.php" class="f6"><?php echo $this->_var['lang']['modify']; ?></a><?php endif; ?></div>
        <div class="OrderSectionCon02">
        	<table width="100%" align="center" border="0" cellpadding="5" cellspacing="1">
            	<thead>
                	<tr>
                        <th colspan="3"><?php echo $this->_var['lang']['goods_name']; ?></th>
                        <th><?php echo $this->_var['lang']['goods_attr']; ?></th>
                        <th><?php if ($this->_var['gb_deposit']): ?><?php echo $this->_var['lang']['deposit']; ?><?php else: ?><?php echo $this->_var['lang']['shop_prices']; ?><?php endif; ?></th>
                        <th><?php echo $this->_var['lang']['number']; ?></th>
                        <th><?php echo $this->_var['lang']['subtotal']; ?></th>
                    </tr>
                </thead>
                <tbody>
                	<?php $_from = $this->_var['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['no'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['no']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['no']['iteration']++;
?>
                	<tr>
                    	<td width="40" align="center"><?php echo $this->_foreach['no']['iteration']; ?></td>
                        <td width="66" align="center"><a href="goods.php?id=<?php echo $this->_var['goods']['goods_id']; ?>" target="_blank"><img src="<?php echo $this->_var['goods']['goods_thumb']; ?>" border="0" title="<?php echo htmlspecialchars($this->_var['goods']['goods_name']); ?>" width="60" height="60"/></a></td>
                        <td width="324" class="name" style="padding:0 5px 0 20px;">
                        	<?php if ($this->_var['goods']['goods_id'] > 0 && $this->_var['goods']['extension_code'] == 'package_buy'): ?>
                            <a href="javascript:void(0)" onclick="setSuitShow(<?php echo $this->_var['goods']['goods_id']; ?>)" class="f6"><?php echo $this->_var['goods']['goods_name']; ?><span style="color:#FF0000;">（<?php echo $this->_var['lang']['remark_package']; ?>）</span></a>
                            <div id="suit_<?php echo $this->_var['goods']['goods_id']; ?>" style="display:none">
                                <?php $_from = $this->_var['goods']['package_goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'package_goods_list');if (count($_from)):
    foreach ($_from AS $this->_var['package_goods_list']):
?>
                                <a href="goods.php?id=<?php echo $this->_var['package_goods_list']['goods_id']; ?>" target="_blank" class="f6"><?php echo $this->_var['package_goods_list']['goods_name']; ?></a><br />
                                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                            </div>
                            <?php else: ?>
                            <a href="goods.php?id=<?php echo $this->_var['goods']['goods_id']; ?>" target="_blank" class="f6"><?php echo $this->_var['goods']['goods_name']; ?></a>
                            <?php if ($this->_var['goods']['parent_id'] > 0): ?>
                            <span style="color:#FF0000">（<?php echo $this->_var['lang']['accessories']; ?>）</span>
                            <?php elseif ($this->_var['goods']['is_gift']): ?>
                            <span style="color:#FF0000">（<?php echo $this->_var['lang']['largess']; ?>）</span>
                            <?php endif; ?> 
                        	<?php endif; ?> 
                        	<?php if ($this->_var['goods']['is_shipping']): ?>(<span style="color:#FF0000"><?php echo $this->_var['lang']['free_goods']; ?></span>)<?php endif; ?>
                        </td>
                        <td align="center"><?php echo nl2br($this->_var['goods']['goods_attr']); ?></td>
                        <td align="center"><?php echo $this->_var['goods']['formated_goods_price']; ?></td>
                        <td align="center"><?php echo $this->_var['goods']['goods_number']; ?></td>
                        <td align="center" class="Price"><?php echo $this->_var['goods']['formated_subtotal']; ?></td>
                    </tr>
                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="blank10"></div>
    
    <div class="order-section order-section02">
    	<div class="OrderSectionTit OrderSectionTit03"><b><?php echo $this->_var['lang']['order_postscript']; ?>：</b></div>
        <div class="OrderSectionCon02"><textarea name="postscript" cols="80" rows="3" id="postscript" placeholder="请在此填写您对该订单或商品的特殊要求或说明。" class="action-remark-textarea"><?php echo htmlspecialchars($this->_var['order']['postscript']); ?></textarea></div>
    </div>
    <div class="blank10"></div>
    
    <div class="order-section">
    	<div class="OrderSectionTit OrderSectionTit03"><b><?php echo $this->_var['lang']['booking_process']; ?>：</b></div>
        <div class="OrderSectionCon DeliveryCon DeliveryCon02">
        	<ul class="clearfix">
            	<?php if ($this->_var['how_oos_list']): ?>
                <?php $_from = $this->_var['how_oos_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('how_oos_id', 'how_oos_name');$this->_foreach['no'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['no']['total'] > 0):
    foreach ($_from AS $this->_var['how_oos_id'] => $this->_var['how_oos_name']):
        $this->_foreach['no']['iteration']++;
?>
                <li><input name="how_oos" type="radio" value="<?php echo $this->_var['how_oos_id']; ?>" <?php if ($this->_var['order']['how_oos'] == $this->_var['how_oos_id']): ?>checked<?php endif; ?> onclick="changeOOS(this)" id="Stock_0<?php echo $this->_foreach['no']['iteration']; ?>" class="InputRadio" /><label for="Stock_0<?php echo $this->_foreach['no']['iteration']; ?>"><?php echo $this->_var['how_oos_name']; ?></label></li>
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?></td>
                <?php endif; ?>
            </ul>
        </div>
    </div>
    <div class="blank10"></div>
    
    <div class="order-section order-section02">
    	<div class="OrderSectionTit OrderSectionTit03"><a href="javascript:;" class="btn-collapse">-</a><b><?php echo $this->_var['lang']['other_info']; ?></b></div>
        <div class="OrderSectionCon03" style="display:block;">
        	<?php if ($this->_var['allow_use_surplus']): ?>
        	<p><?php echo $this->_var['lang']['use_surplus']; ?>：<input name="surplus" type="text" class="inputBg" id="ECS_SURPLUS" size="10" value="<?php echo empty($this->_var['order']['surplus']) ? '0' : $this->_var['order']['surplus']; ?>" onblur="changeSurplus(this.value)" <?php if ($this->_var['disable_surplus']): ?>disabled="disabled"<?php endif; ?> /><?php echo $this->_var['lang']['your_surplus']; ?>：<?php echo empty($this->_var['your_surplus']) ? '0' : $this->_var['your_surplus']; ?><span id="ECS_SURPLUS_NOTICE" class="notice"></span></p>
            <?php endif; ?>
            
            <?php if ($this->_var['allow_use_integral']): ?>
            <p><?php echo $this->_var['lang']['use_integral']; ?>：<input name="integral" type="text" class="inputBg" id="ECS_INTEGRAL" onblur="changeIntegral(this.value)" value="<?php echo empty($this->_var['order']['integral']) ? '0' : $this->_var['order']['integral']; ?>" size="10" /><?php echo $this->_var['lang']['can_use_integral']; ?>：<?php echo empty($this->_var['your_integral']) ? '0' : $this->_var['your_integral']; ?> <?php echo $this->_var['points_name']; ?>，<?php echo $this->_var['lang']['noworder_can_integral']; ?> <?php echo $this->_var['order_max_integral']; ?> <?php echo $this->_var['points_name']; ?>。 <span id="ECS_INTEGRAL_NOTICE" class="notice"></span></p>
            <?php endif; ?>
            
            <?php if ($this->_var['allow_use_bonus']): ?>
            <p><?php echo $this->_var['lang']['use_bonus']; ?>：<?php echo $this->_var['lang']['select_bonus']; ?><select name="bonus" onchange="changeBonus(this.value)" id="ECS_BONUS" class="selectBj"><option value="0" <?php if ($this->_var['order']['bonus_id'] == 0): ?>selected<?php endif; ?>><?php echo $this->_var['lang']['please_select']; ?></option>
				<?php $_from = $this->_var['bonus_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'bonus');if (count($_from)):
    foreach ($_from AS $this->_var['bonus']):
?>
				<option value="<?php echo $this->_var['bonus']['bonus_id']; ?>" <?php if ($this->_var['order']['bonus_id'] == $this->_var['bonus']['bonus_id']): ?>selected<?php endif; ?>><?php echo $this->_var['bonus']['type_name']; ?>[<?php echo $this->_var['bonus']['bonus_money_formated']; ?>]</option>
				<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
				</select><?php echo $this->_var['lang']['input_bonus_no']; ?><input name="bonus_sn" type="text" class="inputBg" size="15" value="<?php echo $this->_var['order']['bonus_sn']; ?>" /><input name="validate_bonus" type="button" class="bnt_blue_1" value="<?php echo $this->_var['lang']['validate_bonus']; ?>" onclick="validateBonus(document.forms['theForm'].elements['bonus_sn'].value)" /></p>
            <?php endif; ?>
            
            <?php if ($this->_var['inv_content_list']): ?>
            <p><?php echo $this->_var['lang']['invoice']; ?>：<input name="need_inv" type="checkbox"  class="inputBg" id="ECS_NEEDINV" onclick="changeNeedInv()" value="1" <?php if ($this->_var['order']['need_inv']): ?>checked="true"<?php endif; ?> />
            	<?php if ($this->_var['inv_type_list']): ?>
                <?php echo $this->_var['lang']['invoice_type']; ?>
                <select name="inv_type" id="ECS_INVTYPE" <?php if ($this->_var['order']['need_inv'] != 1): ?>disabled="true"<?php endif; ?> onchange="changeNeedInv()" class="selectBj" ><?php echo $this->html_options(array('options'=>$this->_var['inv_type_list'],'selected'=>$this->_var['order']['inv_type'])); ?></select>
            	<?php endif; ?>
                <?php echo $this->_var['lang']['invoice_title']; ?><input name="inv_payee" type="text"  class="input" id="ECS_INVPAYEE" size="20" <?php if (! $this->_var['order']['need_inv']): ?>disabled="true"<?php endif; ?> value="<?php echo $this->_var['order']['inv_payee']; ?>" onblur="changeNeedInv()" /><?php echo $this->_var['lang']['invoice_content']; ?><select name="inv_content" id="ECS_INVCONTENT" <?php if ($this->_var['order']['need_inv'] != 1): ?>disabled="true"<?php endif; ?>  onchange="changeNeedInv()" style="border:1px solid #ccc;"><?php echo $this->html_options(array('values'=>$this->_var['inv_content_list'],'output'=>$this->_var['inv_content_list'],'selected'=>$this->_var['order']['inv_content'])); ?></select></p>
            <?php endif; ?>
        </div>
    </div>
    <div class="blank"></div>
    
    <div class="order-section order-section02">
    	<div class="order-price">
        	<div class="blank10"></div>
      		<?php echo $this->fetch('library/order_total.lbi'); ?>
            <div class="blank15"></div>
      		<div align="right">
            	<input type="submit" value="提交订单" class="action-submit-order"/>
                <input type="hidden" name="step" value="done" />
            </div>
        </div>
    </div>
  </form>
<script>
	$(function(){
		function block(){
			var li=$(".OrderSectionCon").find("li.on");
			var div=$(".OrderSectionCon").find("div");
			if(li.children("input.InputRadio").attr("checked")==true){
				div.show();
			}else{
				div.hide();
			}
			
		}
		block();
		
		$(".DeliveryCon02").find("input").click(function(){
			block();
		});
		
		
		var on=$(".btn-collapse");
		on.click(function(){
			var con=$(this).parent().siblings(".OrderSectionCon03");
			if( con.css("display") == "none" ){
				$(this).text("-")
				con.slideDown("show");
			}else{
				$(this).text("+")
				con.slideUp("hide");
			}
		})
		//
		$(".OrderSectionCon02 .name").each(function(){
			var str = $(this).find("a").text().replace(/<br>+/ig,"");
			$(this).find("a").text(str);
		});
	});
</script>
  <?php endif; ?> 
  
  <?php if ($this->_var['step'] == "done"): ?> 
  
  <div class="flowBox vancl_none" style="margin:30px auto 70px auto;">
    <h6 style="text-align:center; height:30px; line-height:30px;"><?php echo $this->_var['lang']['remember_order_number']; ?>: <font style="color:red"><?php echo $this->_var['order']['order_sn']; ?></font></h6>
    <table width="99%" align="center" border="0" cellpadding="15" cellspacing="0" bgcolor="#fff" style="border:1px solid #ddd; margin:20px auto;" >
      <tr>
        <td align="center" bgcolor="#FFFFFF"><?php if ($this->_var['order']['shipping_name']): ?><?php echo $this->_var['lang']['select_shipping']; ?>: <strong><?php echo $this->_var['order']['shipping_name']; ?></strong>，<?php endif; ?><?php echo $this->_var['lang']['select_payment']; ?>: <strong><?php echo $this->_var['order']['pay_name']; ?></strong>。<?php echo $this->_var['lang']['order_amount']; ?>: <strong><?php echo $this->_var['total']['amount_formated']; ?></strong></td>
      </tr>
      <tr>
        <td align="center" bgcolor="#FFFFFF"><?php echo $this->_var['order']['pay_desc']; ?></td>
      </tr>
      <?php if ($this->_var['pay_online']): ?> 
      
      <tr>
        <td align="center" bgcolor="#FFFFFF"><?php echo $this->_var['pay_online']; ?></td>
      </tr>
      <?php endif; ?>
    </table>
    <?php if ($this->_var['virtual_card']): ?>
    <div style="text-align:center;overflow:hidden;border:1px solid #E2C822;background:#FFF9D7;margin:10px;padding:10px 50px 30px;"> 
      <?php $_from = $this->_var['virtual_card']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'vgoods');if (count($_from)):
    foreach ($_from AS $this->_var['vgoods']):
?>
      <h3 style="color:#2359B1; font-size:12px;"><?php echo $this->_var['vgoods']['goods_name']; ?></h3>
      <?php $_from = $this->_var['vgoods']['info']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'card');if (count($_from)):
    foreach ($_from AS $this->_var['card']):
?>
      <ul style="list-style:none;padding:0;margin:0;clear:both">
        <?php if ($this->_var['card']['card_sn']): ?>
        <li style="margin-right:50px;float:left;"> <strong><?php echo $this->_var['lang']['card_sn']; ?>:</strong><span style="color:red;"><?php echo $this->_var['card']['card_sn']; ?></span> </li>
        <?php endif; ?> 
        <?php if ($this->_var['card']['card_password']): ?>
        <li style="margin-right:50px;float:left;"> <strong><?php echo $this->_var['lang']['card_password']; ?>:</strong><span style="color:red;"><?php echo $this->_var['card']['card_password']; ?></span> </li>
        <?php endif; ?> 
        <?php if ($this->_var['card']['end_date']): ?>
        <li style="float:left;"> <strong><?php echo $this->_var['lang']['end_date']; ?>:</strong><?php echo $this->_var['card']['end_date']; ?> </li>
        <?php endif; ?>
      </ul>
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
    </div>
    <?php endif; ?>
    <p style="text-align:center; margin-bottom:20px;"><?php echo $this->_var['order_submit_back']; ?></p>
  </div>
  <?php endif; ?>
  </div>
  
  <?php if ($this->_var['step'] == "login"): ?> 
  <?php echo $this->smarty_insert_scripts(array('files'=>'utils.js,user.js')); ?> 
  <script type="text/javascript">
        <?php $_from = $this->_var['lang']['flow_login_register']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
          var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

        
        function checkLoginForm(frm) {
          if (Utils.isEmpty(frm.elements['username'].value)) {
            alert(username_not_null);
            return false;
          }

          if (Utils.isEmpty(frm.elements['password'].value)) {
            alert(password_not_null);
            return false;
          }

          return true;
        }

        function checkSignupForm(frm) {
          if (Utils.isEmpty(frm.elements['username'].value)) {
            alert(username_not_null);
            return false;
          }

          if (Utils.trim(frm.elements['username'].value).match(/^\s*$|^c:\\con\\con$|[%,\'\*\"\s\t\<\>\&\\]/))
          {
            alert(username_invalid);
            return false;
          }

          if (Utils.isEmpty(frm.elements['email'].value)) {
            alert(email_not_null);
            return false;
          }

          if (!Utils.isEmail(frm.elements['email'].value)) {
            alert(email_invalid);
            return false;
          }

          if (Utils.isEmpty(frm.elements['password'].value)) {
            alert(password_not_null);
            return false;
          }

          if (frm.elements['password'].value.length < 6) {
            alert(password_lt_six);
            return false;
          }

          if (frm.elements['password'].value != frm.elements['confirm_password'].value) {
            alert(password_not_same);
            return false;
          }
          return true;
        }
        
        </script> 
  
<div class="login_wrapper">
	<div class="login">
    	<div class="tag"><h2><i></i>用户登录</h2></div>
        <form action="flow.php?step=login" method="post" name="loginForm" id="loginForm" onsubmit="return checkLoginForm(this)">
        <div id="shows">
			<div class="user_infor">
            	<ul>
                	<li class="clearfix form-item"><label>用户名：</label><input class="x-input" type="text" name="username"><span class="x-text">填写用户名</span><div id="username_notice" class="Judge"></div><div class="Tips"><span>请输入您的用户名<i></i></span></div></li>
                    <li class="clearfix form-item"><label>密码：</label><input class="x-input" type="password" name="password" ><span class="x-text">填写密码</span><div id="username_notice" class="Judge"></div><div class="Tips"><span>请输入您的密码<i></i></span></div></li>
                    <?php if ($this->_var['enabled_login_captcha']): ?>
                    <li class="clearfix form-item2"><label>验证码：</label><input class="x-input x-input2" type="text" name="captcha" ><img src="captcha.php?is_login=1&<?php echo $this->_var['rand']; ?>" alt="captcha" title="点击更换" width="128" height="50" style="vertical-align: top;cursor: pointer; margin:-1px 0 0 0;" onClick="this.src='captcha.php?is_login=1&'+Math.random()" /><span class="x-text">填写验证码</span>
                    </li>
                    <?php endif; ?>
                    <li class="clearfix form-item3">
                    <input type="checkbox" checked="true" name="remember" id="remember" style="margin:2px 3px 0 0; width: 13px; float: left; clear: left;"><label for="remember" class="SaveLogin"> 保存此次登录</label><a href="user.php?act=get_password" class="forget f_r">忘记密码啦？</a></li>
                    <li class="clearfix form-item4">
                    	<input type="submit" class="log" name="login" value="登&#12288;录" />
                        <?php if ($this->_var['anonymous_buy'] == 1): ?>
                        <input type="button" class="Nolog" value="<?php echo $this->_var['lang']['direct_shopping']; ?>" onclick="location.href='flow.php?step=consignee&amp;direct_shopping=1'" />
                        <?php endif; ?>
                        <input name="act" type="hidden" value="signin" />
                    </li>
                </ul>
            </div>
        </div>
        </form>
    </div>
</div>
   
  <?php endif; ?> 

<script>
$(function(){
	var Input=$("#shows .x-input");
	var Select=$("#shows select");
	var Text=$("#shows .x-text");
	
	Input.focus(function(){
		//alert($(this).siblings("span.x-text"));
		//$(this).parents("li").children("span").hide();
		
		$(this).addClass("on");
		$(this).siblings(".Tips").show();
		$(this).siblings(".Judge").hide();
		$(this).parent("li").css({"z-index":10});
	});
	Input.blur(function(){
		if( $(this).val()=="" ){
			$(this).siblings("span").show();	
		}else{
			$(this).siblings("span").hide();
		};
		$(this).removeClass("on");
		$(this).siblings(".Tips").hide();
		$(this).siblings(".Judge").show();
		$(this).parent("li").css({"z-index":0});
	});
	Select.focus(function(){
		$(this).siblings(".Tips").show();
		$(this).siblings(".Judge").hide();
	});
	Select.blur(function(){
		$(this).siblings(".Tips").hide();
		$(this).siblings(".Judge").show();
	});
	Text.click(function(){
		$(this).hide();
		$(this).siblings("input").focus();
	});
})
</script>
</div>

<div id="PageFooter">
	<div class="PageFooter"><?php echo $this->fetch('library/page_footer.lbi'); ?></div>
</div>
</body>
<script type="text/javascript">
var process_request = "<?php echo $this->_var['lang']['process_request']; ?>";
<?php $_from = $this->_var['lang']['passport_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
var username_exist = "<?php echo $this->_var['lang']['username_exist']; ?>";
var compare_no_goods = "<?php echo $this->_var['lang']['compare_no_goods']; ?>";
var btn_buy = "<?php echo $this->_var['lang']['btn_buy']; ?>";
var is_cancel = "<?php echo $this->_var['lang']['is_cancel']; ?>";
var select_spe = "<?php echo $this->_var['lang']['select_spe']; ?>";
</script>
</html>
