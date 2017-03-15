<?php echo $this->fetch('library/user_header.lbi'); ?>

<dl class="user_top">
  <dd>
    <p class="p1"><?php if ($this->_var['info']['nickname']): ?><?php echo $this->_var['info']['nickname']; ?><?php else: ?><?php echo $this->_var['info']['username']; ?><?php endif; ?>
</p>
    <p><a href="<?php echo url('user/logout');?>" ><span><?php echo $this->_var['lang']['label_logout']; ?></span></a></p>
  </dd>
  <img class="userTop_bg" src="__TPL__/images/lg_bg03.jpg" width="720" height="320">
</dl>
<div class="blank3"></div>
<section class="wrap wrapU">
  <div class="list_box radius3" style="padding-top:0;padding-bottom:0;">
  <img src="__TPL__/images/un_10.png"><a href="<?php echo url('user/profile');?>" class="clearfix"> <span><?php echo $this->_var['lang']['label_profile']; ?></span><i></i> </a>
  <img src="__TPL__/images/un_01.png"><a href="<?php echo url('user/order_list');?>" class="clearfix"> <span><?php echo $this->_var['lang']['label_order']; ?></span><i></i></a>
  <img src="__TPL__/images/un_05.png"><a href="<?php echo url('user/address_list');?>"  class="clearfix"> <span><?php echo $this->_var['lang']['label_address']; ?></span><i></i> </a>
  <img src="__TPL__/images/un_14.png"><a href="<?php echo url('user/collection_list');?>"  class="clearfix"> <span><?php echo $this->_var['lang']['label_collection']; ?></span><i></i> </a>
  <img src="__TPL__/images/un_pass.png"><a href="<?php echo url('user/edit_password');?>" class="clearfix"> <span><?php echo $this->_var['lang']['edit_password']; ?></span><i></i> </a>
  </div>
  <div class="blank3"></div>
  <div class="list_box radius3" style="padding-top:0;padding-bottom:0;">
  <img src="__TPL__/images/un_service.png"><a href="<?php echo url('user/service');?>" class="clearfix"> <span><?php echo $this->_var['lang']['user_service']; ?></span><i></i> </a>
  <img src="__TPL__/images/un_15.png"><a href="<?php echo url('user/msg_list');?>" class="clearfix"> <span><?php echo $this->_var['lang']['label_message']; ?></span><i></i> </a>
  <img src="__TPL__/images/un_123.png"><a href="<?php echo url('user/share');?>" class="clearfix"> <span><?php echo $this->_var['lang']['label_share']; ?></span><i></i> </a>
  <!--<img src="__TPL__/images/un_13.png"><a href="<?php echo url('user/comment_list');?>"  class="clearfix"> <span><?php echo $this->_var['lang']['label_comment']; ?></span><i></i> </a>-->
  <img src="__TPL__/images/un_hongbao.png"><a class="clearfix" href="<?php echo url('user/bonus');?>"><span>我的红包</span><i></i></a></div>
  <div class="blank3"></div>
  <div class="list_box radius3" style="padding-top:0;padding-bottom:0;">
    <img src="__TPL__/images/un_biaoqian.png"><a class="clearfix" href="<?php echo url('user/tag_list');?>"><span><?php echo $this->_var['lang']['label_tag']; ?></span><i></i></a>
	  <img src="__TPL__/images/un_dengji.png"><a class="clearfix" href="<?php echo url('user/booking_list');?>"><span><?php echo $this->_var['lang']['label_booking']; ?></span><i></i></a>
      <img src="__TPL__/images/un_133.png"><a class="clearfix" href="<?php echo url('user/account_detail');?>"><span><?php echo $this->_var['lang']['label_user_surplus']; ?></span><i></i></a>
      <img src="__TPL__/images/un_pinglun.png"><a class="clearfix" href="<?php echo url('comment_list');?>"><span><?php echo $this->_var['lang']['label_comment']; ?></span><i></i></a>
      </div>
      
  <div class="blank3"></div>
</section>

</body>
</html>
