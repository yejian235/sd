<?php echo $this->fetch('library/user_header.lbi'); ?> 
<script type="text/javascript">
	  <?php $_from = $this->_var['lang']['profile_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
		var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
	  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
	</script>
    <section class="wrap wrapSh radius3" style="padding-top:1rem;padding-bottom:1rem;">
     <form name="formEdit" action="<?php echo url('user/profile');?>" method="post" onSubmit="return userEdit()">
        <section class="order_box" style="padding-top:0;padding-bottom:0;">
          <div class="table_box table_box2">
            <dl>
              <dd class="dd1"><strong><?php echo $this->_var['lang']['email']; ?></strong></dd>
              <input name="email" type="text" placeholder="<?php echo $this->_var['lang']['no_emaill']; ?>"  value="<?php echo $this->_var['profile']['email']; ?>" class="dd2" />
            </dl>
            <?php $_from = $this->_var['extend_info_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'field');if (count($_from)):
    foreach ($_from AS $this->_var['field']):
?>
            <?php if ($this->_var['field']['id'] == 6): ?>
            <dl>
              <dd class="dd1"><strong><?php echo $this->_var['lang']['passwd_question']; ?></strong></dd>
              <select name='sel_question' class="dd2" style="-webkit-appearance:none">
                  <option value='0'><?php echo $this->_var['lang']['sel_question']; ?></option>
                  <?php echo $this->html_options(array('options'=>$this->_var['passwd_questions'],'selected'=>$this->_var['profile']['passwd_question'])); ?>
              </select>
            </dl>
            <dl>
              <dd class="dd1"><strong><?php echo $this->_var['lang']['passwd_answer']; ?></strong></dd>
              <input placeholder="<?php echo $this->_var['lang']['passwd_answer']; ?>" name="passwd_answer" type="text" class="dd2" value="<?php echo $this->_var['profile']['passwd_answer']; ?>" />
            </dl>            
            <?php else: ?>
            <dl>
              <dd class="dd1"><strong><?php echo $this->_var['field']['reg_field_name']; ?></strong></dd>
              <input placeholder="<?php echo $this->_var['field']['reg_field_name']; ?>"  name="extend_field<?php echo $this->_var['field']['id']; ?>" type="text"  class="dd2" value="<?php echo $this->_var['field']['content']; ?>"/>
            </dl>
            <?php endif; ?>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> </div>
        </section>
        <div class="blank3"></div>
        <input name="act" type="hidden" value="act_edit_profile" />
        <input name="submit" type="submit" value="<?php echo $this->_var['lang']['confirm_edit']; ?>" class="c-btn3 radius20" style="font-size:.9rem"   />
      </form>
    
</body></html>