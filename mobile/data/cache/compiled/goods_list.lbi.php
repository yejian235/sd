<div class="filter" style="position:static; top:0px; width:100%;">
  <form method="GET" class="sort" name="listform">
    <ul class="filter-inner">
      <li class="<?php if ($this->_var['sort'] == 'goods_id' && $this->_var['order'] == 'DESC'): ?>filter-cur<?php endif; ?>"> <a href="<?php echo url('Category/index');?>&id=<?php echo $this->_var['id']; ?>&display=<?php echo $this->_var['pager']['display']; ?>&brand=<?php echo $this->_var['brand_id']; ?>&price_min=<?php echo $this->_var['price_min']; ?>&price_max=<?php echo $this->_var['price_max']; ?>&filter_attr=<?php echo $this->_var['filter_attr']; ?>&page=<?php echo $this->_var['page']; ?>&sort=goods_id&order=DESC&keywords=<?php echo $this->_var['keywords']; ?>#goods_list"><?php echo $this->_var['lang']['sort_default']; ?></a> </li>
      <li class="<?php if ($this->_var['sort'] == 'click_count' && $this->_var['order'] == 'DESC'): ?>filter-cur<?php endif; ?>"> <a href="<?php echo url('category/index');?>&id=<?php echo $this->_var['id']; ?>&display=<?php echo $this->_var['display']; ?>&brand=<?php echo $this->_var['brand_id']; ?>&price_min=<?php echo $this->_var['price_min']; ?>&price_max=<?php echo $this->_var['price_max']; ?>&filter_attr=<?php echo $this->_var['filter_attr']; ?>&page=<?php echo $this->_var['pager']['page']; ?>&sort=click_count&order=DESC&keywords=<?php echo $this->_var['keywords']; ?>#goods_list"><?php echo $this->_var['lang']['sort_popularity']; ?><i class="f-ico-arrow-d"></i></a> </li>
      <li class="<?php if ($this->_var['sort'] == 'sales_volume' && $this->_var['order'] == 'DESC'): ?>filter-cur<?php endif; ?>"> <a href="<?php echo url('category/index');?>&id=<?php echo $this->_var['id']; ?>&display=<?php echo $this->_var['display']; ?>&brand=<?php echo $this->_var['brand_id']; ?>&price_min=<?php echo $this->_var['price_min']; ?>&price_max=<?php echo $this->_var['price_max']; ?>&filter_attr=<?php echo $this->_var['filter_attr']; ?>&page=<?php echo $this->_var['pager']['page']; ?>&sort=sales_volume&order=DESC&keywords=<?php echo $this->_var['keywords']; ?>#goods_list"><?php echo $this->_var['lang']['sort_sales']; ?></a></li>
      <li class="<?php if ($this->_var['sort'] == 'shop_price'): ?>filter-cur<?php endif; ?>"> <a href="<?php echo url('Category/index');?>&id=<?php echo $this->_var['id']; ?>&display=<?php echo $this->_var['pager']['display']; ?>&brand=<?php echo $this->_var['brand_id']; ?>&price_min=<?php echo $this->_var['price_min']; ?>&price_max=<?php echo $this->_var['price_max']; ?>&filter_attr=<?php echo $this->_var['filter_attr']; ?>&page=<?php echo $this->_var['page']; ?>&sort=shop_price&order=<?php if ($this->_var['sort'] == 'shop_price' && $this->_var['order'] == 'ASC'): ?>DESC<?php else: ?>ASC<?php endif; ?>&keywords=<?php echo $this->_var['keywords']; ?>#goods_list"><?php echo $this->_var['lang']['sort_price']; ?> <span> <i class="f-ico-triangle-mt <?php if ($this->_var['sort'] == 'shop_price' && $this->_var['order'] == 'ASC'): ?> f-ico-triangle-slctd<?php endif; ?>"></i> <i class="f-ico-triangle-mb <?php if ($this->_var['sort'] == 'shop_price' && $this->_var['order'] == 'DESC'): ?>f-ico-triangle-slctd<?php endif; ?>"></i> </span> </a> </li>
      <li class="filter-navBtn"><a href="javascript:;" class="j_filterBtn disabled" onclick="mtShowMenu()">筛选</a></li>
    </ul>
    <input type="hidden" name="category" value="<?php echo $this->_var['category']; ?>" />
    <input type="hidden" name="display" value="<?php echo $this->_var['pager']['display']; ?>" id="display" />
    <input type="hidden" name="brand" value="<?php echo $this->_var['brand_id']; ?>" />
    <input type="hidden" name="price_min" value="<?php echo $this->_var['price_min']; ?>" />
    <input type="hidden" name="price_max" value="<?php echo $this->_var['price_max']; ?>" />
    <input type="hidden" name="filter_attr" value="<?php echo $this->_var['filter_attr']; ?>" />
    <input type="hidden" name="page" value="<?php echo $this->_var['pager']['page']; ?>" />
    <input type="hidden" name="sort" value="<?php echo $this->_var['pager']['sort']; ?>" />
    <input type="hidden" name="order" value="<?php echo $this->_var['pager']['order']; ?>" />
  </form>
</div>

<?php if ($this->_var['show_asynclist'] == 1): ?>
  <div class="srp flex-f-row <?php if (C ( 'show_order_type' ) == 1): ?> album<?php elseif (C ( 'show_order_type' ) == 2): ?> grid <?php else: ?> list <?php endif; ?>" id="J_ItemList" style="opacity:1;"> 
    <div class="product flex_in single_item">
      <div class="pro-inner"></div>
    </div>
    <a href="javascript:;" class="get_more"></a>
  </div>
<?php else: ?>
	
  <div class="srp flex-f-row <?php if (C ( 'show_order_type' ) == 1): ?> album<?php elseif (C ( 'show_order_type' ) == 2): ?> grid <?php else: ?> list <?php endif; ?>" id="J_ItemList" style="opacity:1;"> 
    
	  <?php $_from = $this->_var['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['goods_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['goods_list']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['goods_list']['iteration']++;
?>
	  <div class="product flex_in single_item">
		<div class="pro-inner">
			<div class="proImg-wrap"> <a href="<?php echo $this->_var['goods']['url']; ?>"> <img src="<?php echo $this->_var['goods']['goods_thumb']; ?>" alt="<?php echo $this->_var['goods']['name']; ?>" > </a> </div>
			<div class="proInfo-wrap">
			  <div class="proTitle"> <a href="<?php echo $this->_var['goods']['url']; ?>"><?php echo $this->_var['goods']['name']; ?></a> </div>
			  <div class="proSKU"></div>
			  <div class="proPrice"> <em>
				<?php if ($this->_var['goods']['promote_price']): ?>
				<?php echo $this->_var['goods']['promote_price']; ?>
				<?php else: ?>
				<?php echo $this->_var['goods']['shop_price']; ?>
				<?php endif; ?>
				</em> </div>
			  <div class="proService"> <del><?php echo $this->_var['goods']['market_price']; ?></del></div>
			  <div class="proSales">月销:<em><?php echo $this->_var['goods']['sales_count']; ?></em></div>
			  <div class="proIcons">
				<?php if ($this->_var['goods']['promotion']): ?> 
				<?php $_from = $this->_var['goods']['promotion']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'promotion');if (count($_from)):
    foreach ($_from AS $this->_var['promotion']):
?> 
				<?php if ($this->_var['promotion']['type'] == 'group_buy'): ?><i class="tg"><?php echo $this->_var['lang']['group_buy_act']; ?></i> 
				<?php elseif ($this->_var['promotion']['act_type'] == 0): ?> <i class="mz"> <?php echo $this->_var['lang']['favourable_mz']; ?></i> 
				<?php elseif ($this->_var['promotion']['act_type'] == 1): ?> <i class="mj"> <?php echo $this->_var['lang']['favourable_mj']; ?></i> 
				<?php elseif ($this->_var['promotion']['act_type'] == 2): ?> <i class="zk"> <?php echo $this->_var['lang']['favourable_zk']; ?></i> 
				<?php endif; ?> 
				<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
				<?php endif; ?> 
			  </div>
			</div>
	  </div>
    </div>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
  </div>
      <span class="blank10"></span> 
<?php echo $this->fetch('library/page.lbi'); ?>
    <span class="blank10"></span>
<?php endif; ?> 
