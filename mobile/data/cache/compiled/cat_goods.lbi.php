<?php if ($this->_var['cat_best']): ?>
<div class="ect_category_box">
	<?php $_from = $this->_var['cat_best']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cat_best');$this->_foreach['cat_best'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['cat_best']['total'] > 0):
    foreach ($_from AS $this->_var['cat_best']):
        $this->_foreach['cat_best']['iteration']++;
?>
	<div class="lookMore"><a href="<?php echo $this->_var['cat']['url']; ?>" ><?php echo htmlspecialchars($this->_var['cat_best']['cat_name']); ?></a></div>
	<ul>
	<?php $_from = $this->_var['cat_best']['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_0_89520800_1480860046');$this->_foreach['goods'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['goods']['total'] > 0):
    foreach ($_from AS $this->_var['goods_0_89520800_1480860046']):
        $this->_foreach['goods']['iteration']++;
?> 
	<li><a href="<?php echo $this->_var['goods_0_89520800_1480860046']['url']; ?>"><img src="<?php echo $this->_var['goods_0_89520800_1480860046']['goods_img']; ?>" /></a><span><?php echo $this->_var['goods_0_89520800_1480860046']['name']; ?></span>
	<?php if ($this->_var['goods_0_89520800_1480860046']['promote_price'] != ""): ?>
	<span><?php echo $this->_var['goods_0_89520800_1480860046']['promote_price']; ?></span>
	<?php else: ?>
	<span><?php echo $this->_var['goods_0_89520800_1480860046']['shop_price']; ?></span>
	<?php endif; ?>
	</li>
	<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
	</ul>
	<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

</div>
<?php endif; ?>
