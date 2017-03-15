 
<?php echo $this->fetch('library/page_header.lbi'); ?><body style="background:#fff;">
<div id="page" style="right: 0px; left: 0px; display: block;">
  <header id="header" style="z-index:1">
    <div class="header_l"> <a class="ico_10" href="<?php echo url('index/index');?>"> 首页 </a> </div>
    <h1>商品列表</h1>
    <div class="header_r"> <a class="ico_01" href="<?php echo url('flow/cart');?>"> 购物车 </a></div>
  </header>
  <?php echo $this->fetch('library/goods_list.lbi'); ?>

</div>


<div id="nav" class="nav" style="right:-275px;">
  <form class="hold-height" action="<?php echo url('category/index');?>" method="post">
    <div class="attrExtra">
      <input type="hidden" name="id" value="<?php echo $this->_var['id']; ?>"/>
      <button class="attrExtra-submit" type="submit">确定</button>
      <button class="attrExtra-cancel" type="button"  onclick="mtShowMenu()">取消</button>
    </div>
    <div class="attrs attr-fix" style="height: 100%"> 
       
      <?php if ($this->_var['brands']['1'] || $this->_var['price_grade']['1'] || $this->_var['filter_attr_list']): ?> 
      
      <?php if ($this->_var['brands']['1']): ?>
      <div class="attr brandAttr">
        <div class="attrKey"><?php echo $this->_var['lang']['brand']; ?></div>
        <div class="attrValues">
          <ul class="av-collapse filter_list">
            <?php $_from = $this->_var['brands']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'brand');if (count($_from)):
    foreach ($_from AS $this->_var['brand']):
?> 
            <?php if ($this->_var['brand']['selected']): ?>
            <li class="av-selected"> 
              <?php else: ?>
            <li> 
              <?php endif; ?> 
              <a href="javascript:void(0);" data="<?php echo $this->_var['brand']['brand_id']; ?>"><?php echo $this->_var['brand']['brand_name']; ?></a></li>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            <input type="hidden" name="brand" value="<?php echo $this->_var['brand_id']; ?>" />
          </ul>
          <div class="av-options"><a class="j_More avo-more avo-more-down" href="javascript:;">查看更多<i></i></a> </div>
        </div>
      </div>
      <?php endif; ?> 
      
      <?php if ($this->_var['price_grade']['1']): ?>
      <div class="attr brandAttr">
        <div class="attrKey"><?php echo $this->_var['lang']['price']; ?></div>
        <div class="attrValues">
          <ul class="av-collapse filter_list">
            <?php $_from = $this->_var['price_grade']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'grade');if (count($_from)):
    foreach ($_from AS $this->_var['grade']):
?> 
            <?php if ($this->_var['grade']['selected']): ?>
            <li class="av-selected"> 
              <?php else: ?>
            <li> 
              <?php endif; ?> 
              <a href="javascript:void(0);" data="<?php echo $this->_var['grade']['start']; ?>|<?php echo $this->_var['grade']['end']; ?>"><?php echo $this->_var['grade']['price_range']; ?></a></li>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            <input type="hidden" name="price_min" value="<?php echo $this->_var['price_min']; ?>" />
            <input type="hidden" name="price_max" value="<?php echo $this->_var['price_max']; ?>" />
          </ul>
          <div class="av-options"><a class="j_More avo-more avo-more-down" href="javascript:;">查看更多<i></i></a> </div>
        </div>
      </div>
      <?php endif; ?> 
      
      <?php $_from = $this->_var['filter_attr_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'filter_attr_0_76843800_1480859918');if (count($_from)):
    foreach ($_from AS $this->_var['filter_attr_0_76843800_1480859918']):
?>
      <div class="attr brandAttr">
        <div class="attrKey"><?php echo htmlspecialchars($this->_var['filter_attr_0_76843800_1480859918']['filter_attr_name']); ?></div>
        <div class="attrValues">
          <ul class="av-collapse filter_list">
            <?php $_from = $this->_var['filter_attr_0_76843800_1480859918']['attr_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'attr');if (count($_from)):
    foreach ($_from AS $this->_var['attr']):
?> 
            <?php if ($this->_var['attr']['selected']): ?>
            <li class="av-selected filter_attr"> 
              <?php else: ?>
            <li class="filter_attr"> 
              <?php endif; ?> 
              <a href="javascript:void(0);" data="<?php echo $this->_var['attr']['attr_id']; ?>"><?php echo $this->_var['attr']['attr_value']; ?></a></li>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
          </ul>
          <div class="av-options"><a class="j_More avo-more avo-more-down" href="javascript:void(0);">查看更多<i></i></a> </div>
        </div>
      </div>
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      <input type="hidden" name="filter_attr" value="<?php echo $this->_var['filter_attr']; ?>"/>
      
      <?php endif; ?> 
       
      
    </div>
  </form>
</div>
<script type="text/javascript">
if(<?php echo $this->_var['show_asynclist']; ?> == 1){
	get_asynclist('<?php echo url('category/asynclist');?>&id=<?php echo $this->_var['id']; ?>&brand=<?php echo $this->_var['brand_id']; ?>&price_min=<?php echo $this->_var['price_min']; ?>&price_max=<?php echo $this->_var['price_max']; ?>&filter_attr=<?php echo $this->_var['filter_attr']; ?>&page=<?php echo $this->_var['page']; ?>&sort=<?php echo $this->_var['sort']; ?>&order=<?php echo $this->_var['order']; ?>&keywords=<?php echo $this->_var['keywords']; ?>&type=<?php echo $this->_var['type']; ?>' , '__TPL__/images/loader.gif');
}
</script>
</body>
</html>