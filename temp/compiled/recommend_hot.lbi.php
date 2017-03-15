<?php if ($this->_var['hot_goods']): ?>
<div class="indexgoods clearfix">
	<ul>
    	<?php $_from = $this->_var['hot_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');if (count($_from)):
    foreach ($_from AS $this->_var['goods']):
?>
    	<li>
        	<a href="<?php echo $this->_var['goods']['url']; ?>"><img alt="" src="<?php echo $this->_var['goods']['thumb']; ?>" width="300" height="300"><span><?php echo $this->_var['goods']['short_style_name']; ?></span></a>
        </li>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    </ul>
</div>
<?php endif; ?>
<script>
	var _li=$(".indexgoods li");
	_li.hover(function(){
		$(this).find("span").stop(true,false).animate({"bottom":0})
	},function(){
		$(this).find("span").stop(true,false).animate({"bottom":-50})
	});
</script>