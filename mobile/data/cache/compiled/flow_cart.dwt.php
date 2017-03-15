<div class="blank3"></div>
<?php if ($this->_var['goods_list']): ?>
<section class="wrap" style="padding-bottom:1rem"  >
    <ul class="radius3 itemlist">
      <?php $_from = $this->_var['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');if (count($_from)):
    foreach ($_from AS $this->_var['goods']):
?>
      <li class="new-tbl-type">
        <div class="itemlist_l new-tbl-cell"> 
          <?php if ($this->_var['goods']['goods_id'] > 0 && $this->_var['goods']['extension_code'] != 'package_buy'): ?> 
          <a  href="<?php echo url('goods/index',array('id'=>$this->_var['goods']['goods_id']));?>" target="_blank"> <img class="lazy" src="<?php echo $this->_var['goods']['goods_thumb']; ?>" border="0" title="<?php echo htmlspecialchars($this->_var['goods']['goods_name']); ?>" /> </a> 
          <?php if ($this->_var['goods']['parent_id'] > 0): ?> 
          <span style="color:#FF0000">（<?php echo $this->_var['lang']['accessories']; ?>）</span> 
          <?php endif; ?> 
          <?php if ($this->_var['goods']['is_gift'] > 0): ?> 
          <span style="color:#FF0000">（<?php echo $this->_var['lang']['largess']; ?>）</span> 
          <?php endif; ?> 
          <?php elseif ($this->_var['goods']['goods_id'] > 0 && $this->_var['goods']['extension_code'] == 'package_buy'): ?> 
          <a href="javascript:void(0)" onClick="setSuitShow(<?php echo $this->_var['goods']['goods_id']; ?>)" class="f6"><?php echo $this->_var['goods']['goods_name']; ?><span style="color:#FF0000;">（<?php echo $this->_var['lang']['remark_package']; ?>）</span></a>
          <div id="suit_<?php echo $this->_var['goods']['goods_id']; ?>" style="display:none"> 
            <?php $_from = $this->_var['goods']['package_goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'package_goods_list');if (count($_from)):
    foreach ($_from AS $this->_var['package_goods_list']):
?> 
            <a href="<?php echo url('goods/index');?>&id=<?php echo $this->_var['package_goods_list']['goods_id']; ?>" target="_blank" class="f6"><?php echo $this->_var['package_goods_list']['goods_name']; ?></a><br />
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
          </div>
          <?php else: ?> 
          <?php echo $this->_var['goods']['goods_name']; ?> 
          <?php endif; ?> 
        </div>
        <div class="desc new-tbl-cell"> <a style="color:#333" href="<?php echo url('goods/index',array('id'=>$this->_var['goods']['goods_id']));?>" target="_blank" class="fragment">
          <h4><?php echo $this->_var['goods']['goods_name']; ?></h4>
          </a>
          <div style="clear:both"> </div>
          <?php if ($this->_var['show_goods_attribute'] == 1): ?>
          <p> <?php echo nl2br($this->_var['goods']['goods_attr']); ?> </p>
          <?php endif; ?>
          <div class="b"> <em class="price"><?php echo $this->_var['goods']['goods_price']; ?></em> <span style="jianju">x </span> <span class="txt"> 
            <?php if ($this->_var['goods']['goods_id'] > 0 && $this->_var['goods']['is_gift'] == 0 && $this->_var['goods']['parent_id'] == 0): ?>
            <input type="hidden" id="back_number<?php echo $this->_var['goods']['rec_id']; ?>" value="<?php echo $this->_var['goods']['goods_number']; ?>" />
            <input class="inputBg input" style="padding:0;" type="number" min="1" max="1000" name="goods_number[<?php echo $this->_var['goods']['rec_id']; ?>]" id="goods_number<?php echo $this->_var['goods']['rec_id']; ?>" value="<?php echo $this->_var['goods']['goods_number']; ?>" size="4" onChange="change_goods_number(2,<?php echo $this->_var['goods']['rec_id']; ?>)"  onKeyUp="change_goods_number(2,<?php echo $this->_var['goods']['rec_id']; ?>)"/>
            <?php else: ?> 
            <?php echo $this->_var['goods']['goods_number']; ?> 
            <?php endif; ?> 
            </span> <a href="javascript:if (confirm('<?php echo $this->_var['lang']['drop_goods_confirm']; ?>')) location.href='<?php echo url('flow/drop_goods',array('id'=>$this->_var['goods']['rec_id']));?>';"   class="ico_08 cha"> </a> </div>
        </div>
      </li>
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    </ul>
    <input type="hidden" name="step" value="update_cart" />
</section>
<footer class="toolbar radius3">
  <p><?php echo $this->_var['lang']['total']; ?>: <em class="price" id="goods_subtotal"><?php echo $this->_var['total']['goods_price']; ?></em></p>
  <a href="<?php echo url('flow/checkout');?>"><?php echo $this->_var['lang']['check_out']; ?>(<em class="num" id="total_number"><?php echo $this->_var['total']['total_number']; ?></em>)</a> </footer>
    <?php else: ?>
  <section class="wrap"  >
  <div class="empty-cart">
    <div class="ico_13 cart-logo"></div>
    <p class="message"><strong><?php echo $this->_var['lang']['empty_shopping']; ?></strong></p>
    <div class="flex"> <a class="c-btn2  flex_in radius3" href="<?php echo url('category/all');?>" > <?php echo $this->_var['lang']['go_shopping']; ?> </a></div>
  </div>
</section>
  <?php endif; ?> 
</div>