<?php if ($this->_var['user_info']): ?>
<li>您好，<?php echo $this->_var['user_info']['username']; ?> ！<a href="user.php?act=logout"><?php echo $this->_var['lang']['user_logout']; ?></a></li>
<?php else: ?>
<li><div><a href="user.php">登录</a>&nbsp;|&nbsp;<a href="user.php?act=register">注册</a></div></li>
<?php endif; ?>

<li class="topmemlist">
	<a href="user.php?act=order_list">我的订单</a>
    <!--<h2><a tk="YHD_TOP_myyihaodian" href="user.php">我的廿一客</a><i></i></h2>
    <ul class="topmemlistBox">
    	<li><a href="user.php?act=order_list">我的订单</a></li>
        <li><a href="#">我的积分</a></li>
        <li><a href="#">我的优惠券</a></li>
    </ul>-->
</li>