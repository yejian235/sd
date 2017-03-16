<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
<meta name="Description" content="<?php echo $this->_var['description']; ?>" />

<title><?php echo $this->_var['page_title']; ?></title>



<link rel="shortcut icon" href="favicon.ico" />
<link rel="icon" href="animated_favicon.gif" type="image/gif" />
<link href="<?php echo $this->_var['ecs_css_path']; ?>" rel="stylesheet" type="text/css" />

<?php echo $this->smarty_insert_scripts(array('files'=>'common.js,user.js,transport_jquery.js')); ?>
<body>

<?php echo $this->fetch('library/page_header_user.lbi'); ?>
 
<?php if ($this->_var['action'] == 'login'): ?>
<div class="login_wrapper pt88">
	<div class="login">
		<div class="tag"><h2><i></i>用户登录</h2></div>
		<form name="formLogin" action="user.php" method="post" onSubmit="return userLogin()">
			<div id="shows">
				<div class="user_infor">
                	<ul>
                    	<li class="clearfix form-item"><label>用户名：</label><input class="x-input" type="text" name="username"><span class="x-text">填写用户名</span><div id="username_notice" class="Judge"></div><div class="Tips"><span>请输入您的用户名<i></i></span></div></li>
                        <li class="clearfix form-item"><label>密码：</label><input class="x-input" type="password" name="password" ><span class="x-text">填写密码</span><div id="username_notice" class="Judge"></div><div class="Tips"><span>请输入您的密码<i></i></span></div></li>
                        
                        <?php if ($this->_var['enabled_captcha']): ?>
                        <li class="clearfix form-item2">
                        	<label>验证码：</label><input class="x-input x-input2" type="text" name="captcha" ><img src="captcha.php?is_login=1&<?php echo $this->_var['rand']; ?>" alt="captcha" title="点击更换" width="128" height="50" style="vertical-align: top;cursor: pointer;" onClick="this.src='captcha.php?is_login=1&'+Math.random()" /><span class="x-text">填写验证码</span>
                        </li>
                        <?php endif; ?>
                        
                        <li class="clearfix form-item3">
                        <input type="checkbox" checked="true" name="remember" id="remember" style="margin:2px 3px 0 0; width: 13px; float: left;"><label for="remember" class="SaveLogin"> 保存此次登录</label><a href="user.php?act=get_password" class="forget f_r">忘记密码啦？</a></li>
                        <li class="clearfix form-item4">
                        	<input type="hidden" name="act" value="act_login" />
                            <input type="hidden" name="back_act" value="<?php echo $this->_var['back_act']; ?>" />
                        	<input type="submit" name="submit" value="登&#12288;录" class="log" id="vanclLogin"/>
                        </li>
                    </ul>
            	</div>
        	</div>
        </form>
	</div>
</div>



<?php endif; ?> 
 

 
<?php if ($this->_var['action'] == 'register'): ?> 
<?php if ($this->_var['shop_reg_closed'] == 1): ?>
<div class="usBox">
  <div class="usBox_2 clearfix">
    <div class="f1 f5" align="center"><?php echo $this->_var['lang']['shop_register_closed']; ?></div>
  </div>
</div>
<?php else: ?> 
<?php echo $this->smarty_insert_scripts(array('files'=>'utils.js')); ?>
<div class="login_wrapper pt88">
	<div class="login">
		<div class="tag"><h2><i></i>用户注册</h2></div>
		<form action="user.php" method="post" name="formUser" onsubmit="return register();">
        	<div id="shows">
            	<div class="user_infor">
                	<ul>
                    	<li class="clearfix form-item"><label><?php echo $this->_var['lang']['label_username']; ?>：</label><input class="x-input" type="text" name="username" onblur="is_registered(this.value);"><span class="x-text"><?php echo $this->_var['lang']['label_username']; ?></span><div id="username_notice" class="Judge"></div><div class="Tips"><span>请输入您的<?php echo $this->_var['lang']['label_username']; ?><i></i></span></div></li>
                        <li class="clearfix form-item"><label><?php echo $this->_var['lang']['label_password']; ?>：</label><input class="x-input" type="password" name="password" onblur="check_password(this.value);" id="password1" onkeyup="checkIntensity(this.value)"><span class="x-text"><?php echo $this->_var['lang']['label_password']; ?></span><div id="password_notice" class="Judge"></div><div class="Tips"><span>请输入您的<?php echo $this->_var['lang']['label_password']; ?><i></i></span></div></li>
                        <li class="clearfix form-item"><label><?php echo $this->_var['lang']['label_confirm_password']; ?>：</label><input class="x-input" type="password" name="confirm_password" onblur="check_conform_password(this.value);"><span class="x-text"><?php echo $this->_var['lang']['label_confirm_password']; ?></span><div id="conform_password_notice" class="Judge"></div><div class="Tips"><span>请确认您的<?php echo $this->_var['lang']['label_confirm_password']; ?><i></i></span></div></li>
                        <li class="clearfix form-item"><label><?php echo $this->_var['lang']['label_email']; ?>：</label><input class="x-input" type="text" name="email" onblur="checkEmail(this.value);"><span class="x-text"><?php echo $this->_var['lang']['label_email']; ?></span><div id="email_notice" class="Judge"></div><div class="Tips"><span>请输入您常用的<?php echo $this->_var['lang']['label_email']; ?><i></i></span></div></li>
                        
                        <?php $_from = $this->_var['extend_info_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'field');if (count($_from)):
    foreach ($_from AS $this->_var['field']):
?>
                        <?php if ($this->_var['field']['id'] == 6): ?>
                        <li class="clearfix form-item" id="liemail">
                        	<label> <?php echo $this->_var['lang']['passwd_question']; ?>：</label>
                            <div class="">
                            	<select name='sel_question'>
                                	<option value='0'><?php echo $this->_var['lang']['sel_question']; ?></option>
                                    <?php echo $this->html_options(array('options'=>$this->_var['passwd_questions'])); ?>
                                </select>
                            	<div id="email_notice" class="Judge"></div>
                                <div class="Tips"><span>请选择<?php echo $this->_var['lang']['passwd_question']; ?><i></i></span></div>
                            </div>
                            <span class="Rclear"></span>
                        </li>
                        
                        <li class="clearfix form-item"><label <?php if ($this->_var['field']['is_need']): ?> id="passwd_quesetion" <?php endif; ?>><?php echo $this->_var['lang']['passwd_answer']; ?>：</label><input class="x-input" type="text" name="passwd_answer"><span class="x-text"><?php echo $this->_var['lang']['passwd_answer']; ?></span><?php if ($this->_var['field']['is_need']): ?><div id="email_notice" class="Judge"></div><?php endif; ?><div class="Tips"><span>请输入您选择的<?php echo $this->_var['lang']['passwd_answer']; ?><i></i></span></div></li>
			<?php else: ?>
				<li class="clearfix form-item"><label <?php if ($this->_var['field']['is_need']): ?> id="extend_field<?php echo $this->_var['field']['id']; ?>i" <?php endif; ?>><?php echo $this->_var['field']['reg_field_name']; ?>：</label><input class="x-input" type="text" name="extend_field<?php echo $this->_var['field']['id']; ?>" id="extend_field<?php echo $this->_var['field']['id']; ?>"><span class="x-text"><?php echo $this->_var['field']['reg_field_name']; ?></span><?php if ($this->_var['field']['is_need']): ?><div id="email_notice" class="Judge"></div><?php endif; ?><div class="Tips"><span>请输入您常用的<?php echo $this->_var['field']['reg_field_name']; ?><i></i></span></div></li>
				<?php if ($this->_var['field']['id'] == 5): ?>
				<?php echo $this->smarty_insert_scripts(array('files'=>'global.js')); ?>
				<?php echo $this->smarty_insert_scripts(array('files'=>'sms.js')); ?>
				<li class="clearfix form-item"><label <?php if ($this->_var['field']['is_need']): ?> id="extend_field<?php echo $this->_var['field']['id']; ?>i_dx" <?php endif; ?>>短信验证码：</label><input name="extend_field<?php echo $this->_var['field']['id']; ?>_dx" id="extend_field<?php echo $this->_var['field']['id']; ?>_dx" type="text" size="25" class="x-input x-input2" maxlength="6" /><span class="x-text">短信验证码</span><?php if ($this->_var['field']['is_need']): ?><div id="email_notice" class="Judge"></div><?php endif; ?><div class="Tips"><span>请输入短信验证码<i></i></span></div><span style="display:inline-block;vertical-align: top;width:127px;height:48px;line-height:48px;text-align:center;border: solid 1px #eee;border-left:none;"> <a href="javascript:;" onclick="getverifycode1('#extend_field<?php echo $this->_var['field']['id']; ?>', '<?php echo $this->_var['field']['reg_field_name']; ?>');"><font color="red"><b>获取</b></font></a></span></li>
				<?php endif; ?>
                        <?php endif; ?>
                        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>                        
                        
                        <?php if ($this->_var['enabled_captcha']): ?>
                        <li class="clearfix form-item2"><label><?php echo $this->_var['lang']['comment_captcha']; ?>：</label><input class="x-input x-input2" type="text" name="captcha" ><img src="captcha.php?<?php echo $this->_var['rand']; ?>" alt="captcha" title="点击更换" width="128" height="50" style="vertical-align: top;cursor: pointer;" onClick="this.src='captcha.php?is_login=1&'+Math.random()" /><span class="x-text"><?php echo $this->_var['lang']['comment_captcha']; ?></span></li>
                        <?php endif; ?>
                        
                        <li class="clearfix form-item3">
                        <input type="checkbox" checked="true" name="agreement" id="remember" style="margin:2px 3px 0 0; width: 13px; float: left; clear: left;"><label for="remember" class="SaveLogin"> <?php echo $this->_var['lang']['agreement']; ?></label></li>
                        
                        <li class="clearfix form-item4">
                            <input name="act" type="hidden" value="act_register" >
                            <input type="hidden" name="back_act" value="<?php echo $this->_var['back_act']; ?>" />
                            <input type="submit" name="Submit" class="log" id="submitRegister" value="注&#12288;册"/>
                        </li>
                    </ul>
                </div>
            </div>
        </form>
	</div>
</div>
 

<?php endif; ?> 
<?php endif; ?> 
 

 
<?php if ($this->_var['action'] == 'get_password'): ?> 
<?php echo $this->smarty_insert_scripts(array('files'=>'utils.js')); ?> 
<script type="text/javascript">
    <?php $_from = $this->_var['lang']['password_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
      var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    </script>

<div class="login_wrapper pt88">
	<div class="login">
		<div class="tag"><h2><i></i>密码找回</h2></div>
        <form action="user.php" method="post" name="getPassword" onsubmit="return submitPwdInfo();">
        	<div id="shows">
            	<div class="user_infor">
                	<ul>
                    	<li class="clearfix form-item"><label><?php echo $this->_var['lang']['username']; ?>：</label><input name="user_name" type="text" size="30" class="x-input"/><span class="x-text"><?php echo $this->_var['lang']['username']; ?></span><div id="username_notice" class="Judge"></div><div class="Tips"><span>请输入您的注册时的<?php echo $this->_var['lang']['username']; ?><i></i></span></div></li>
                        <li class="clearfix form-item"><label><?php echo $this->_var['lang']['email']; ?>：</label><input name="email" type="text" size="30" class="x-input"/><span class="x-text"><?php echo $this->_var['lang']['email']; ?></span><div id="username_notice" class="Judge"></div><div class="Tips"><span>请输入您注册时的<?php echo $this->_var['lang']['email']; ?><i></i></span></div></li>
                        <li class="clearfix form-item4">
                        	<div class="blank20"></div>
                            <input type="hidden" name="act" value="send_pwd_email" />
                            <input type="submit" name="submit" value="提&#12288;交" class="log" />
                            <input name="button" type="button" onclick="history.back()" value="返&#12288;回" class="Nolog" />
                        </li>
                    </ul>
                </div>
            </div>
        </form>
    </div>
</div>
<?php endif; ?> 

 
<?php if ($this->_var['action'] == 'qpassword_name'): ?>

<div class="login_wrapper pt88">
	<div class="login">
		<div class="tag"><h2><i></i>密码找回</h2></div>
        <form action="user.php" method="post">
        	<div id="shows">
            	<div class="user_infor">
                	<ul>
                    	<li class="clearfix form-item"><label><?php echo $this->_var['lang']['username']; ?>：</label><input name="user_name" type="text" size="30" class="x-input"/><span class="x-text"><?php echo $this->_var['lang']['username']; ?></span><div id="username_notice" class="Judge"></div><div class="Tips"><span>请输入您的注册时的<?php echo $this->_var['lang']['username']; ?><i></i></span></div></li>
                        <li class="clearfix form-item4">
                            <div class="blank20"></div>
                            <input type="hidden" name="act" value="get_passwd_question" />
                            <input type="submit" name="submit" value="提&#12288;交" class="log" />
                            <input name="button" type="button" onclick="history.back()" value="返&#12288;回" class="Nolog" />
                        </li>
                    </ul>
                </div>
            </div>
        </form>
    </div>
</div>
<?php endif; ?> 

 
<?php if ($this->_var['action'] == 'get_passwd_question'): ?>
    <div id="top" style="padding: 20px 0 0 0;"> <img src="themes/21cake/images/logo.gif" width="306" alt="凡客诚品" title="凡客诚品" onclick="javascript:window.location.href='./index.php'" style="cursor:pointer"></div>
<span class="box15"></span>
<div class="usBox">
  <div class="usBox_2 clearfix">
    <form action="user.php" method="post">
      <br />
      <table width="70%" border="0" align="center">
        <tr>
          <td colspan="2" align="center"><strong><?php echo $this->_var['lang']['input_answer']; ?></strong></td>
        </tr>
        <tr>
          <td width="29%" align="right"><?php echo $this->_var['lang']['passwd_question']; ?>：</td>
          <td width="61%"><?php echo $this->_var['passwd_question']; ?></td>
        </tr>
        <tr>
          <td align="right"><?php echo $this->_var['lang']['passwd_answer']; ?>：</td>
          <td><input name="passwd_answer" type="text" size="20" class="inputBg" /></td>
        </tr>
        <?php if ($this->_var['enabled_captcha']): ?>
        <tr>
          <td align="right"><?php echo $this->_var['lang']['comment_captcha']; ?></td>
          <td><input type="text" size="8" name="captcha" class="inputBg" />
            <img src="captcha.php?is_login=1&<?php echo $this->_var['rand']; ?>" alt="captcha" style="vertical-align: middle;cursor: pointer;" onClick="this.src='captcha.php?is_login=1&'+Math.random()" /></td>
        </tr>
        <?php endif; ?>
        <tr>
          <td></td>
          <td><input type="hidden" name="act" value="check_answer" />
            <input type="submit" name="submit" value="<?php echo $this->_var['lang']['submit']; ?>" class="bnt_blue" style="border:none;" />
            <input name="button" type="button" onclick="history.back()" value="<?php echo $this->_var['lang']['back_page_up']; ?>" style="border:none;" class="bnt_blue_1" /></td>
        </tr>
      </table>
      <br />
    </form>
  </div>
</div>
<?php endif; ?> 

<?php if ($this->_var['action'] == 'reset_password'): ?> 
<script type="text/javascript">
	<?php $_from = $this->_var['lang']['password_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
      var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</script>

<div class="login_wrapper pt88">
	<div class="login">
		<div class="tag"><h2><i></i>修改密码</h2></div>
        <form action="user.php" method="post" name="getPassword2" onSubmit="return submitPwd()">
        	<div id="shows">
            	<div class="user_infor">
                	<ul>
                    	<li class="clearfix form-item"><label><?php echo $this->_var['lang']['new_password']; ?>：</label><input name="new_password" type="password" size="25" class="x-input"/><span class="x-text"><?php echo $this->_var['lang']['new_password']; ?></span><div id="username_notice" class="Judge"></div><div class="Tips"><span>请输入您的<?php echo $this->_var['lang']['new_password']; ?><i></i></span></div></li>
                        <li class="clearfix form-item"><label><?php echo $this->_var['lang']['confirm_password']; ?>：</label><input name="confirm_password" type="password" size="25" class="x-input"/><span class="x-text"><?php echo $this->_var['lang']['confirm_password']; ?></span><div id="username_notice" class="Judge"></div><div class="Tips"><span>请再次输入您的<?php echo $this->_var['lang']['new_password']; ?><i></i></span></div></li>
                        <li class="clearfix form-item4">
                            <div class="blank20"></div>
                        	<input type="hidden" name="act" value="act_edit_password" />
                            <input type="hidden" name="uid" value="<?php echo $this->_var['uid']; ?>" />
                            <input type="hidden" name="code" value="<?php echo $this->_var['code']; ?>" />
                            <input type="submit" name="submit" value="提&#12288;交" class="log" />
                        </li>
                    </ul>
                </div>
            </div>
        </form>
    </div>
</div>
<?php endif; ?> 


<script>
$(function(){
	var Input=$("#shows .x-input");
	var Select=$("#shows select");
	var Text=$("#shows .x-text");
	
	Input.focus(function(){
		$(this).siblings("span").hide();
		$(this).addClass("on")
		$(this).siblings(".Tips").show();
		$(this).siblings(".Judge").hide();
		$(this).parent("li").css({"z-index":10});
	});
	Input.blur(function(){
		if( $(this).val()=="" ){
			$(this).siblings("span").show();	
		}else{
			$(this).siblings("span").hide();
		};
		$(this).removeClass("on");
		$(this).siblings(".Tips").hide();
		$(this).siblings(".Judge").show();
		$(this).parent("li").css({"z-index":0});
	});
	Select.focus(function(){
		$(this).siblings(".Tips").show();
		$(this).siblings(".Judge").hide();
	});
	Select.blur(function(){
		$(this).siblings(".Tips").hide();
		$(this).siblings(".Judge").show();
	});
	Text.click(function(){
		$(this).hide();
		$(this).siblings("input").focus();
	});
})
</script>

<div id="PageFooter">
	<div class="PageFooter"><?php echo $this->fetch('library/page_footer.lbi'); ?></div>
</div>

</body>
<script type="text/javascript">
var process_request = "<?php echo $this->_var['lang']['process_request']; ?>";
<?php $_from = $this->_var['lang']['passport_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
var username_exist = "<?php echo $this->_var['lang']['username_exist']; ?>";
</script>
</html>
