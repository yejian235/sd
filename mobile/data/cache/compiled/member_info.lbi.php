<?php if ($this->_var['user_info']): ?>
 <a href="<?php echo url('user/index');?>"><?php echo $this->_var['lang']['user_center']; ?></a> |
 <a href="<?php echo url('user/logout');?>"><?php echo $this->_var['lang']['user_logout']; ?></a>
<?php else: ?>
 <a href="<?php echo url('user/login');?>">登录</a>
<?php endif; ?>