<?php echo $this->fetch('library/user_header.lbi'); ?>
    <section class="spxx">
    <div class="spxx_t"><img src="__TPL__/images/paper_01.png" width="690" height="15"></div>
    <div class="spxx_d">
        <table border="0" cellpadding="5" cellspacing="0" class="ectouch_table" style="border-bottom:1px #CCCCCC dashed">
      	<tr>
        	<td><strong>订单状态：</strong><?php echo $this->_var['order']['order_status']; ?> <?php echo $this->_var['order']['pay_status']; ?> <?php echo $this->_var['order']['shipping_time']; ?></td>
        </tr>
        <tr>
        	<td><strong>订单编号：</strong><?php echo $this->_var['order']['order_sn']; ?></td>
        </tr>
        <tr>
        	<td><strong>订单金额：</strong><?php echo $this->_var['order']['formated_total_fee']; ?></td>
        </tr>
        <tr>
        	<td><strong>下单时间：</strong><?php echo $this->_var['order']['formated_add_time']; ?></td>
        </tr>
        <?php if ($this->_var['order']['to_buyer']): ?>
        <tr>
          <td><strong><?php echo $this->_var['lang']['detail_to_buyer']; ?>：</strong><?php echo $this->_var['order']['to_buyer']; ?></td>
        </tr>
        <?php endif; ?>
        <?php if ($this->_var['virtual_card']): ?>
        <tr>
          <td><strong><?php echo $this->_var['lang']['virtual_card_info']; ?>：</strong><br>
          	<?php $_from = $this->_var['virtual_card']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'vgoods');if (count($_from)):
    foreach ($_from AS $this->_var['vgoods']):
?> 
            <?php $_from = $this->_var['vgoods']['info']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'card');if (count($_from)):
    foreach ($_from AS $this->_var['card']):
?> 
            <hr style="border:none;border-top:1px #CCCCCC dashed; margin:5px 0" />
            <?php if ($this->_var['card']['card_sn']): ?><strong><?php echo $this->_var['lang']['card_sn']; ?>:</strong><span style="color:red;"><?php echo $this->_var['card']['card_sn']; ?></span><br><?php endif; ?>
            <?php if ($this->_var['card']['card_password']): ?><strong><?php echo $this->_var['lang']['card_password']; ?>:</strong><span style="color:red;"><?php echo $this->_var['card']['card_password']; ?></span><br><?php endif; ?> 
            <?php if ($this->_var['card']['end_date']): ?><strong><?php echo $this->_var['lang']['end_date']; ?>:</strong><?php echo $this->_var['card']['end_date']; ?><br><?php endif; ?>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?></td>
        </tr>
        <?php endif; ?>
       
      </table>

      <table border="0" cellpadding="5" cellspacing="0" class="ectouch_table">
        <tr>
          <td><strong><?php echo $this->_var['lang']['consignee_name']; ?>：</strong><?php echo $this->_var['order']['consignee']; ?></td>
          </tr>
        <tr>
          <td align="left"><strong><?php echo $this->_var['lang']['email_address']; ?>：</strong><?php echo $this->_var['order']['email']; ?></td>
          </tr>
        <?php if ($this->_var['order']['exist_real_goods']): ?>
        <tr>
          <td align="left"><strong><?php echo $this->_var['lang']['detailed_address']; ?>：</strong><?php echo $this->_var['order']['address']; ?> 
            <?php if ($this->_var['order']['zipcode']): ?> 
            [<?php echo $this->_var['lang']['postalcode']; ?>: <?php echo $this->_var['order']['zipcode']; ?>] 
            <?php endif; ?></td>
          </tr>
        <?php endif; ?>
        <tr>
          <td align="left"><strong><?php echo $this->_var['lang']['phone']; ?>：</strong><?php echo $this->_var['order']['tel']; ?> </td>
          </tr>
        <?php if ($this->_var['order']['exist_real_goods']): ?>
        <tr>
          <td align="left"><strong><?php echo $this->_var['lang']['deliver_goods_time']; ?>：</strong><?php echo $this->_var['order']['best_time']; ?></td>
          </tr>
        <?php endif; ?>
      </table>

        <table border="0" cellpadding="5" cellspacing="0" class="ectouch_table">
      	  <?php $_from = $this->_var['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');if (count($_from)):
    foreach ($_from AS $this->_var['goods']):
?>
          <tr>
            <td rowspan="2" width="60" align="center" valign="middle" style="border-bottom:1px #CCCCCC dashed">
            <a href="<?php echo url('goods/index');?>&id=<?php echo $this->_var['goods']['goods_id']; ?>" target="_blank"><img src="<?php echo $this->_var['goods']['goods_thumb']; ?>" width="60" height="60" /></a></td>
            <td><strong><?php echo $this->_var['goods']['goods_name']; ?></strong></td>
          </tr>
          <tr>
            <td style="border-bottom:1px #CCCCCC dashed">售价：<?php echo $this->_var['goods']['goods_price']; ?> 数量：<?php echo $this->_var['goods']['goods_number']; ?><br>小计：<?php echo $this->_var['goods']['subtotal']; ?></td>
          </tr>
          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      </table>
      <table border="0" cellpadding="5" cellspacing="0" class="ectouch_table">
        <tr>
          <td align="right"> <?php echo $this->_var['lang']['goods_all_price']; ?><?php if ($this->_var['order']['extension_code'] == "group_buy"): ?><?php echo $this->_var['lang']['gb_deposit']; ?><?php endif; ?>: <?php echo $this->_var['order']['formated_goods_amount']; ?> 
            <?php if ($this->_var['order']['discount'] > 0): ?> 
            - <?php echo $this->_var['lang']['discount']; ?>: <?php echo $this->_var['order']['formated_discount']; ?> 
            <?php endif; ?> 
            <?php if ($this->_var['order']['tax'] > 0): ?> 
            + <?php echo $this->_var['lang']['tax']; ?>: <?php echo $this->_var['order']['formated_tax']; ?> 
            <?php endif; ?> 
            <?php if ($this->_var['order']['shipping_fee'] > 0): ?> 
            + <?php echo $this->_var['lang']['shipping_fee']; ?>: <?php echo $this->_var['order']['formated_shipping_fee']; ?> 
            <?php endif; ?> 
            <?php if ($this->_var['order']['insure_fee'] > 0): ?> 
            + <?php echo $this->_var['lang']['insure_fee']; ?>: <?php echo $this->_var['order']['formated_insure_fee']; ?> 
            <?php endif; ?> 
            <?php if ($this->_var['order']['pay_fee'] > 0): ?> 
            + <?php echo $this->_var['lang']['pay_fee']; ?>: <?php echo $this->_var['order']['formated_pay_fee']; ?> 
            <?php endif; ?> 
            <?php if ($this->_var['order']['pack_fee'] > 0): ?> 
            + <?php echo $this->_var['lang']['pack_fee']; ?>: <?php echo $this->_var['order']['formated_pack_fee']; ?> 
            <?php endif; ?> 
            <?php if ($this->_var['order']['card_fee'] > 0): ?> 
            + <?php echo $this->_var['lang']['card_fee']; ?>: <?php echo $this->_var['order']['formated_card_fee']; ?> 
            <?php endif; ?></td>
        </tr>
        <tr>
          <td align="right"><?php if ($this->_var['order']['money_paid'] > 0): ?> 
            - <?php echo $this->_var['lang']['order_money_paid']; ?>: <?php echo $this->_var['order']['formated_money_paid']; ?> 
            <?php endif; ?> 
            <?php if ($this->_var['order']['surplus'] > 0): ?> 
            - <?php echo $this->_var['lang']['use_surplus']; ?>: <?php echo $this->_var['order']['formated_surplus']; ?> 
            <?php endif; ?> 
            <?php if ($this->_var['order']['integral_money'] > 0): ?> 
            - <?php echo $this->_var['lang']['use_integral']; ?>: <?php echo $this->_var['order']['formated_integral_money']; ?> 
            <?php endif; ?> 
            <?php if ($this->_var['order']['bonus'] > 0): ?> 
            - <?php echo $this->_var['lang']['use_bonus']; ?>: <?php echo $this->_var['order']['formated_bonus']; ?> 
            <?php endif; ?></td>
        </tr>
        <tr>
          <td align="right"><?php echo $this->_var['lang']['order_amount']; ?>: <?php echo $this->_var['order']['formated_order_amount']; ?> 
            <?php if ($this->_var['order']['extension_code'] == "group_buy"): ?><br />
            <?php echo $this->_var['lang']['notice_gb_order_amount']; ?><?php endif; ?></td>
        </tr>
        <?php if ($this->_var['allow_edit_surplus']): ?>
        <tr>
          <td align="right"><form action="<?php echo url('user/act_edit_surplus');?>" method="post" name="formFee" id="formFee">
              <?php echo $this->_var['lang']['use_more_surplus']; ?>：
              <input name="surplus" type="text" size="8" value="0" style="border:1px solid #ccc; padding:3px; border-radius:5px;"/><br>
              <?php echo $this->_var['max_surplus']; ?>
              <input type="submit" name="Submit" class="c-btn3" value="<?php echo $this->_var['lang']['button_submit']; ?>余额付款" />
              <input type="hidden" name="act" value="act_edit_surplus" />
              <input type="hidden" name="order_id" value="<?php echo $_GET['order_id']; ?>" />
            </form></td>
        </tr>
        <?php endif; ?>
      </table>

      <table border="0" cellpadding="5" cellspacing="0" class="ectouch_table">
        <tr>
          <td><strong><?php echo $this->_var['lang']['select_payment']; ?>:</strong> <?php echo $this->_var['order']['pay_name']; ?>。<br><strong><?php echo $this->_var['lang']['order_amount']; ?>:</strong>	<?php echo $this->_var['order']['formated_order_amount']; ?><br />
            <?php echo $this->_var['order']['pay_desc']; ?><?php if ($this->_var['order']['order_amount'] > 0): ?><br><?php echo $this->_var['order']['pay_online']; ?><?php endif; ?></td>
        </tr><?php if ($this->_var['payment_list']): ?>
        <tr>
          <td align="center">
            
            <form name="payment" method="post" action="<?php echo url('user/edit_payment');?>">
              <?php echo $this->_var['lang']['change_payment']; ?>: <br/>
              <select name="pay_id" style="margin:6px 0">
                <?php $_from = $this->_var['payment_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'payment');if (count($_from)):
    foreach ($_from AS $this->_var['payment']):
?>
                <option value="<?php echo $this->_var['payment']['pay_id']; ?>"> <?php echo $this->_var['payment']['pay_name']; ?>(<?php echo $this->_var['lang']['pay_fee']; ?>:<?php echo $this->_var['payment']['format_pay_fee']; ?>) </option>
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
              </select>
              <br/>
              <input type="hidden" name="order_id" value="<?php echo $this->_var['order']['order_id']; ?>" />
              <input type="submit" name="Submit" class="c-btn3" value="<?php echo $this->_var['lang']['button_submit']; ?>" />
            </form>
            
           </td>
        </tr> <?php endif; ?>
      </table>
      <table border="0" cellpadding="5" cellspacing="0" class="ectouch_table" style="margin-bottom:6%;">
        <?php if ($this->_var['order']['shipping_id'] > 0): ?>
        <tr>
          <td colspan="2" align="left"><strong><?php echo $this->_var['lang']['shipping']; ?>：</strong><?php echo $this->_var['order']['shipping_name']; ?></td>
          </tr>
        <?php endif; ?>
        
        <tr>
          <td colspan="2" align="left"><strong><?php echo $this->_var['lang']['payment']; ?>：</strong><?php echo $this->_var['order']['pay_name']; ?></td>
          </tr>
        <?php if ($this->_var['order']['insure_fee'] > 0): ?> 
        <?php endif; ?> 
        <?php if ($this->_var['order']['pack_name']): ?>
        <tr>
          <td colspan="2" align="left"><strong><?php echo $this->_var['lang']['use_pack']; ?>：</strong><?php echo $this->_var['order']['pack_name']; ?></td>
          </tr>
        <?php endif; ?> 
        <?php if ($this->_var['order']['card_name']): ?>
        <tr>
          <td colspan="2" align="left"><strong><?php echo $this->_var['lang']['use_card']; ?>：</strong><?php echo $this->_var['order']['card_name']; ?></td>
          </tr>
        <?php endif; ?> 
        <?php if ($this->_var['order']['card_message']): ?>
        <tr>
          <td colspan="2" align="left"><strong><?php echo $this->_var['lang']['bless_note']; ?>：</strong><?php echo $this->_var['order']['card_message']; ?></td>
          </tr>
        <?php endif; ?> 
        <?php if ($this->_var['order']['surplus'] > 0): ?> 
        <?php endif; ?> 
        <?php if ($this->_var['order']['integral'] > 0): ?>
        <tr>
          <td colspan="2" align="left"><strong><?php echo $this->_var['lang']['use_integral']; ?>：</strong><?php echo $this->_var['order']['integral']; ?></td>
          </tr>
        <?php endif; ?> 
        <?php if ($this->_var['order']['bonus'] > 0): ?> 
        <?php endif; ?> 
          <?php if ($this->_var['order']['inv_payee'] && $this->_var['order']['inv_content']): ?>
        <tr>
          <td align="left"><strong><?php echo $this->_var['lang']['invoice_title']; ?>：</strong><?php echo $this->_var['order']['inv_payee']; ?></td>
          <td align="left"><strong><?php echo $this->_var['lang']['invoice_content']; ?>：</strong><?php echo $this->_var['order']['inv_content']; ?></td>
          </tr>
       <?php endif; ?>
        <?php if ($this->_var['order']['postscript']): ?>
        <tr>
          <td colspan="2" align="left"><strong><?php echo $this->_var['lang']['order_postscript']; ?>：</strong><?php echo $this->_var['order']['postscript']; ?></td>
          </tr>
        <?php endif; ?>
        <tr>
          <td colspan="2" align="left" ><strong><?php echo $this->_var['lang']['booking_process']; ?>：</strong><?php echo $this->_var['order']['how_oos_name']; ?></td>
          </tr>
      </table>
      </div>   
       <div style="padding:0 2rem; margin-bottom:4rem;"> <?php echo $this->_var['order']['handler']; ?>
  <?php if ($this->_var['order']['shipping_id'] > 0): ?><a class="c-btn3" style="width:40%; float:right; margin-right:1rem;" type="button" href="<?php echo url('order_tracking', array('order_id'=>$this->_var['order']['order_id']));?>"><?php echo $this->_var['lang']['order_tracking']; ?></a><?php endif; ?> 
</div>
    </section>
   