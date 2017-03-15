<?php echo $this->fetch('library/user_header.lbi'); ?>
 <section class="wrap wrapSh radius5" id="J_ItemList">
      <section class="single_item">
          </section>
       <a href="javascript:;" style="text-align:center" class="get_more"></a>
    </section>
    <section class="wrapSh radius5">
      <a href="<?php echo url('user/add_address');?>" class="c-btn3 wrapShbtn3"><?php echo $this->_var['lang']['add_address']; ?></a>
      </section>
<script type="text/javascript" src="__PUBLIC__/js/jquery.more.js"></script> 
<script type="text/javascript">
get_asynclist('<?php echo url("user/address_list");?>' , '__TPL__/images/loader.gif');
</script> 
