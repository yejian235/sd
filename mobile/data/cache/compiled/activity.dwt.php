<?php echo $this->fetch('library/page_header.lbi'); ?>
<div class="con">
<div id="page" style="right: 0px; left: 0px; display: block;">
  <header id="header" style="z-index:1">
    <div class="header_l"> <a class="ico_10" href="<?php echo url('index/index');?>"> 首页 </a> </div>
    <h1>活动列表</h1>
    <div class="header_r"> <a class="ico_01" href="<?php echo url('flow/cart');?>"> 购物车 </a></div>
  </header>

</div>
  </header>
<?php if ($this->_var['show_asynclist'] == 1): ?>
  <div class="bran_list" id="J_ItemList" style="opacity:1;">
      <ul class="single_item">
      </ul>
    <a href="javascript:;" class="get_more"></a> </div>
</div>
<?php else: ?>

	  <div class="bran_list" id="J_ItemList" style="opacity:1;">
		  <ul class="single_item">
			<?php $_from = $this->_var['list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'activity');if (count($_from)):
    foreach ($_from AS $this->_var['activity']):
?>
			<li>
			  <p class="a-img"><a href="<?php echo $this->_var['activity']['url']; ?>"><img src="<?php echo $this->_var['activity']['act_banner']; ?>"></a><span><?php echo $this->_var['activity']['start_time']; ?>-<?php echo $this->_var['activity']['end_time']; ?></span></p>
			  <p class="a-name"><?php echo $this->_var['activity']['act_name']; ?></p>
			</li>
			<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
		  </ul>
		</div>
	
	
	
    <span class="blank10"></span> 
		<?php echo $this->fetch('library/page.lbi'); ?>
    <span class="blank10"></span>
<?php endif; ?> 

<?php echo $this->fetch('library/search.lbi'); ?> <?php echo $this->fetch('library/page_footer.lbi'); ?> 
<script type="text/javascript">
<?php if ($this->_var['show_asynclist']): ?>
	get_asynclist("<?php echo url('activity/asynclist', array('page'=>$this->_var['page'], 'sort'=>$this->_var['sort'], 'order'=>$this->_var['order']));?>" , '__TPL__/images/loader.gif');
<?php endif; ?> 
</script>
</body></html>