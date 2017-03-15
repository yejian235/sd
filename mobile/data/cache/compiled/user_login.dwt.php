<?php echo $this->fetch('library/user_header.lbi'); ?>
  
<?php if ($this->_var['action'] == 'login' || $this->_var['action'] == 'register'): ?>
<section class="uWrap" style="padding-bottom:5rem">
  <div id="leftTabBox" class="loginBox">
    <div class="bd">
        <div class="table_box">
           <form name="formLogin" action="<?php echo url('user/login');?>" method="post" class="validforms">
            <dl class="loginUsr">
              <dd>
                <input placeholder="<?php echo $this->_var['lang']['username']; ?>/<?php echo $this->_var['lang']['mobile']; ?>/<?php echo $this->_var['lang']['email']; ?>" name="username" type="text"  class="inputBgr1" id="username" />
              </dd>
              <dd>
                <input placeholder="<?php echo $this->_var['lang']['label_password']; ?>"  name="password" type="password" class="inputBgr2" />
              </dd>
            
            </dl>
            <dl>
              <dd>
                <input type="checkbox" value="1" name="remember" id="remember" style="vertical-align:middle; zoom:150%;" /><label for="remember"> <?php echo $this->_var['lang']['remember']; ?></label>
				<?php if ($this->_var['anonymous_buy'] == 1 && $this->_var['step'] == 'flow'): ?>
      <a href="<?php echo url('flow/consignee',array('direct_shopping'=>1));?>" style="float:right;"><?php echo $this->_var['lang']['direct_shopping']; ?></a>
      <?php endif; ?>
              </dd>
            </dl>
            <dl>
              <dd>
                <input type="hidden" name="act" value="act_login" />
                <input type="hidden" name="back_act" value="<?php echo $this->_var['back_act']; ?>" />
                <input type="submit" name="submit"  value="<?php echo $this->_var['lang']['now_landing']; ?>" class="loginSubmit" />
              </dd>
            </dl>
          </form>
            <dl class="loginDown">
            	<dd><a href="<?php echo url('user/get_password_phone');?>"><?php echo $this->_var['lang']['forgot_password']; ?></a></dd>
                <dd><a href="<?php echo url('user/register');?>"><?php echo $this->_var['lang']['free_registered']; ?></a></dd>
            </dl>
          <div class="hezuo">
            <p class="t"><?php echo $this->_var['lang']['third_login']; ?></p>
            <p class="b"><a href="<?php echo url('user/third_login',array('type'=>'qq'));?>"><img src="__TPL__/images/quicklogin/qq.png"></a>
            <a href="<?php echo url('user/third_login',array('type'=>'sina'));?>"><img src="__TPL__/images/quicklogin/weibo.png"></a></p>
          </div>
        </div>
      </ul>
    </div>
    </div>
  </div>
</section>
<?php endif; ?> 
 
</body>
</html>
