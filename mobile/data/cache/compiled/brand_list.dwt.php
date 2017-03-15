<?php echo $this->fetch('library/page_header.lbi'); ?>
<div class="con">
  <header id="header" style="z-index:1">
    <div class="header_l"> <a class="ico_10" href="<?php echo url('index/index');?>"> 首页 </a> </div>
    <h1>品牌街</h1>
    <div class="header_r"> <a class="ico_01" href="<?php echo url('flow/cart');?>"> 购物车 </a></div>
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
	<?php $_from = $this->_var['list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'brand');if (count($_from)):
    foreach ($_from AS $this->_var['brand']):
?>
			<li>
			  <p><a href="<?php echo $this->_var['brand']['url']; ?>"><img src="<?php echo $this->_var['brand']['brand_banner']; ?>"></a><span><?php echo $this->_var['brand']['brand_name']; ?></span></p>
			</li>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
		</ul>
	</div>
      <span class="blank10"></span> 
<?php echo $this->fetch('library/page.lbi'); ?>
    <span class="blank10"></span>
<?php endif; ?>

<?php echo $this->fetch('library/search.lbi'); ?>
<?php echo $this->fetch('library/page_footer.lbi'); ?>
<script type="text/javascript">
if(<?php echo $this->_var['show_asynclist']; ?> == 1){
	get_asynclist("<?php echo url('brand/asynclist', array('page'=>$this->_var['page'], 'sort'=>$this->_var['sort'], 'order'=>$this->_var['order']));?>" , '__TPL__/images/loader.gif');
}
</script> 
</body></html>