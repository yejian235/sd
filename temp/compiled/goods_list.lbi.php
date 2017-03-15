<div class="fbListPruArea"> 
  <div id="floatposition"> </div>
  <div class="toolbar">
    <div id="floatdiv" style="background-color: rgb(255, 255, 255); z-index: 100; position: static; top: 0px;">
      <div class="filterFormN5">
        <div class="filterSection"> 
          
          <form method="GET" name="listform">
          <div class="searchReorder">
          
            <h3> 排序：</h3>
            <div class="search_ProHotTurn"> 
            
            <a href="<?php echo $this->_var['script_name']; ?>.php?category=<?php echo $this->_var['category']; ?>&display=<?php echo $this->_var['pager']['display']; ?>&brand=<?php echo $this->_var['brand_id']; ?>&price_min=<?php echo $this->_var['price_min']; ?>&price_max=<?php echo $this->_var['price_max']; ?>&filter_attr=<?php echo $this->_var['filter_attr']; ?>&page=<?php echo $this->_var['pager']['page']; ?>&sort=goods_id&order=<?php if ($this->_var['pager']['sort'] == 'goods_id' && $this->_var['pager']['order'] == 'DESC'): ?>ASC<?php else: ?>DESC<?php endif; ?>#goods_list" class="<?php if ($this->_var['pager']['sort'] == 'goods_id'): ?>search_<?php echo $this->_var['pager']['order']; ?><?php endif; ?>"> 默认</a>
            <a href="<?php echo $this->_var['script_name']; ?>.php?category=<?php echo $this->_var['category']; ?>&display=<?php echo $this->_var['pager']['display']; ?>&brand=<?php echo $this->_var['brand_id']; ?>&price_min=<?php echo $this->_var['price_min']; ?>&price_max=<?php echo $this->_var['price_max']; ?>&filter_attr=<?php echo $this->_var['filter_attr']; ?>&page=<?php echo $this->_var['pager']['page']; ?>&sort=sales_volume&order=<?php if ($this->_var['pager']['sort'] == 'sales_volume' && $this->_var['pager']['order'] == 'DESC'): ?>ASC<?php else: ?>DESC<?php endif; ?>#goods_list" class="<?php if ($this->_var['pager']['sort'] == 'sales_volume'): ?>search_<?php echo $this->_var['pager']['order']; ?><?php endif; ?>"> 销量</a> 
            <a href="<?php echo $this->_var['script_name']; ?>.php?category=<?php echo $this->_var['category']; ?>&display=<?php echo $this->_var['pager']['display']; ?>&brand=<?php echo $this->_var['brand_id']; ?>&price_min=<?php echo $this->_var['price_min']; ?>&price_max=<?php echo $this->_var['price_max']; ?>&filter_attr=<?php echo $this->_var['filter_attr']; ?>&page=<?php echo $this->_var['pager']['page']; ?>&sort=shop_price&order=<?php if ($this->_var['pager']['sort'] == 'shop_price' && $this->_var['pager']['order'] == 'ASC'): ?>DESC<?php else: ?>ASC<?php endif; ?>#goods_list" class="<?php if ($this->_var['pager']['sort'] == 'shop_price'): ?>search_<?php echo $this->_var['pager']['order']; ?><?php endif; ?>"> 价格</a> 
            <a href="<?php echo $this->_var['script_name']; ?>.php?category=<?php echo $this->_var['category']; ?>&display=<?php echo $this->_var['pager']['display']; ?>&brand=<?php echo $this->_var['brand_id']; ?>&price_min=<?php echo $this->_var['price_min']; ?>&price_max=<?php echo $this->_var['price_max']; ?>&filter_attr=<?php echo $this->_var['filter_attr']; ?>&page=<?php echo $this->_var['pager']['page']; ?>&sort=comments_number&order=<?php if ($this->_var['pager']['sort'] == 'comments_number' && $this->_var['pager']['order'] == 'ASC'): ?>DESC<?php else: ?>ASC<?php endif; ?>#goods_list"  class="<?php if ($this->_var['pager']['sort'] == 'comments_number'): ?>search_<?php echo $this->_var['pager']['order']; ?><?php endif; ?>"> 好评</a> 
   
            
              <input type="hidden" name="category" value="<?php echo $this->_var['category']; ?>" />
  <input type="hidden" name="display" value="<?php echo $this->_var['pager']['display']; ?>" id="display" />
  <input type="hidden" name="brand" value="<?php echo $this->_var['brand_id']; ?>" />
  <input type="hidden" name="price_min" value="<?php echo $this->_var['price_min']; ?>" />
  <input type="hidden" name="price_max" value="<?php echo $this->_var['price_max']; ?>" />
  <input type="hidden" name="filter_attr" value="<?php echo $this->_var['filter_attr']; ?>" />
  <input type="hidden" name="page" value="<?php echo $this->_var['pager']['page']; ?>" />
  <input type="hidden" name="sort" value="<?php echo $this->_var['pager']['sort']; ?>" />
  <input type="hidden" name="order" value="<?php echo $this->_var['pager']['order']; ?>" />
            </div>
            </div>
            <div class="searchReorder">
            <h3><?php echo $this->_var['lang']['btn_display']; ?>：</h3>
            <div class="Display">
  <a href="javascript:;" onClick="javascript:display_mode('list')"><img src="themes/21cake/images/display_mode_list<?php if ($this->_var['pager']['display'] == 'list'): ?>_act<?php endif; ?>.gif" alt="<?php echo $this->_var['lang']['display']['list']; ?>"></a>
  <a href="javascript:;" onClick="javascript:display_mode('grid')"><img src="themes/21cake/images/display_mode_grid<?php if ($this->_var['pager']['display'] == 'grid'): ?>_act<?php endif; ?>.gif" alt="<?php echo $this->_var['lang']['display']['grid']; ?>"></a>
  <a href="javascript:;" onClick="javascript:display_mode('text')" style="display:none;"><img src="themes/21cake/images/display_mode_text<?php if ($this->_var['pager']['display'] == 'text'): ?>_act<?php endif; ?>.gif" alt="<?php echo $this->_var['lang']['display']['text']; ?>"></a>
  </div>
  </div>
            </form>
          </div>
           
          
          <div class="pageBoxN5">
            <div class="pagediv">
            	<span>相关商品<strong id="vanclListTotalRecords">&nbsp;<?php echo $this->_var['pager']['record_count']; ?>&nbsp;</strong>款</span>
                <span><?php if ($this->_var['pager']['page_prev']): ?><a href="<?php echo $this->_var['pager']['page_prev']; ?>" class="jquery_pager_prevpage"></a><?php else: ?><a href="javascript:void(0);" class="jquery_pager_prevpage"></a><?php endif; ?></span><span>&nbsp; <?php $_from = $this->_var['pager']['page_number']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?><?php if ($this->_var['pager']['page'] == $this->_var['key']): ?><?php echo $this->_var['key']; ?><?php endif; ?><?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>&nbsp;/&nbsp;<?php echo $this->_var['pager']['page_count']; ?>&nbsp;</span> <span><?php if ($this->_var['pager']['page_next']): ?><a href="<?php echo $this->_var['pager']['page_next']; ?>" class="track jquery_pager_nextpage"></a><?php else: ?><a href="javascript:void(0);" class="track jquery_pager_nextpage"></a><?php endif; ?></span> </div>
          </div>
           
        </div>
      </div>
    </div>
  </div>
  
  <?php if ($this->_var['pager']['display'] == 'list'): ?>
  <div class="GoodsList">
  	<ul>
    	<?php $_from = $this->_var['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['goods_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['goods_list']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['goods_list']['iteration']++;
?>
    	<li>
        	<table width="100%" border="0" cellpadding="0" cellspacing="0">
            	<tr>
                	<td width="230"><div class="img"><a href="<?php echo $this->_var['goods']['url']; ?>"><img src="<?php echo $this->_var['goods']['goods_thumb']; ?>" alt="<?php echo $this->_var['goods']['goods_name']; ?>" width="200" height="200" /></a></div></td>
                    <td>
                    	<div class="name"><a href="<?php echo $this->_var['goods']['url']; ?>"><?php echo $this->_var['goods']['goods_style_name']; ?></a></div>
                        <div class="present"><?php echo $this->_var['goods']['goods_brief']; ?></div>
                    </td>
                    <td width="15%"><div class="price"><?php if ($this->_var['goods']['promote_price'] != ""): ?><?php echo $this->_var['goods']['promote_price']; ?><?php else: ?><?php echo $this->_var['goods']['shop_price']; ?><?php endif; ?></div></td>
                    <td width="14.5%" bgcolor="#fdf7f2">
                    	<div class="action">
                        	<a href="<?php echo $this->_var['goods']['url']; ?>"><i class="see"></i>查看详情</a>
                            <a href="javascript:addToCart(<?php echo $this->_var['goods']['goods_id']; ?>)" class="on"><i class="addcart"></i>加入购物车</a>
                        </div>
                    </td>
                </tr>
            </table>
      </li>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    </ul>
  </div>

    <?php elseif ($this->_var['pager']['display'] == 'grid'): ?>
  
  <div class="productList">
    <ul class="ContentMonitor">
      <?php $_from = $this->_var['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['foo']['iteration']++;
?> 
      <?php if ($this->_var['goods']['goods_id']): ?>
      <li id="gItem_<?php echo $this->_var['goods']['goods_id']; ?>" class="scListArea" <?php if (($this->_foreach['foo']['iteration'] - 1) % 5 == 4): ?> style="margin-right:0;"<?php endif; ?>><strong><a href="<?php echo $this->_var['goods']['url']; ?>" target="_blank" title="<?php echo $this->_var['goods']['goods_name']; ?>" class="track"> <img src="<?php echo $this->_var['goods']['goods_thumb']; ?>" class="productLazyLoad" alt="<?php echo $this->_var['goods']['goods_name']; ?>" style="display: inline; "></a> </strong>
        <span class="blank0"></span>
        <p class="Product-Name"> <a href="<?php echo $this->_var['goods']['url']; ?>" target="_blank" title="<?php echo $this->_var['goods']['goods_name']; ?>" class="track"><?php echo $this->_var['goods']['goods_name']; ?><font class="Product-Name"></font></a></p>
        <div class="Product-Price">
            <strong><?php if ($this->_var['goods']['promote_price'] != ""): ?><?php echo $this->_var['goods']['promote_price']; ?><?php else: ?><?php echo $this->_var['goods']['shop_price']; ?><?php endif; ?></strong>
        </div>
        <div class="vancllist_logo"></div>
      </li>
      <?php endif; ?> 
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    </ul>
  </div>
	<?php endif; ?> 
</div>

<script>$(".GoodsList li .name").find("br").remove();</script>

<script type="Text/Javascript" language="JavaScript">
<!--

function selectPage(sel)
{
  sel.form.submit();
}

//-->
</script> 
<script type="text/javascript">
window.onload = function()
{
  Compare.init();
  fixpng();
}
<?php $_from = $this->_var['lang']['compare_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
<?php if ($this->_var['key'] != 'button_compare'): ?>
var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
<?php else: ?>
var button_compare = '';
<?php endif; ?>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
var compare_no_goods = "<?php echo $this->_var['lang']['compare_no_goods']; ?>";
var btn_buy = "<?php echo $this->_var['lang']['btn_buy']; ?>";
var is_cancel = "<?php echo $this->_var['lang']['is_cancel']; ?>";
var select_spe = "<?php echo $this->_var['lang']['select_spe']; ?>";
</script>