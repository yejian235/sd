<?php echo $this->fetch('library/user_header.lbi'); ?>
      <section class="wrap order_list order_listU radius3" id="J_ItemList">
    	  <section class="order_box padd1 single_item">
  		  </section>
   	 <a href="javascript:;" style="text-align:center" class="get_more"></a>
   	 </section>
<script type="text/javascript">
<?php $_from = $this->_var['lang']['merge_order_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
    var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
get_asynclist('index.php?m=default&c=user&a=async_order_list&pay=<?php echo $this->_var['pay']; ?>' , '__TPL__/images/loader.gif');
</script> 
</body></html>