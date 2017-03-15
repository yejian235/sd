<?php echo $this->fetch('library/user_header.lbi'); ?>
<div class="blank3"></div>
<section class="wrap" style="padding-bottom:5rem">
  <ul class="radius3 itemlist">
    <div style="margin:1rem auto; text-align:center">
      <p style="font-size:0.8rem; font-weight:bold; color: red;"><?php echo $this->_var['message']['content']; ?></p>
      <div class="blank"></div>
      <?php if ($this->_var['message']['url_info']): ?> 
      <?php $_from = $this->_var['message']['url_info']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('info', 'url');if (count($_from)):
    foreach ($_from AS $this->_var['info'] => $this->_var['url']):
?>
      <p class="info"><a href="<?php echo $this->_var['url']; ?>"><?php echo $this->_var['info']; ?></a></p>
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
      <?php endif; ?> 
    </div>
  </ul>
</section>
<div style="width:1px; height:1px; overflow:hidden"><?php $_from = $this->_var['lang']['p_y']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'pv');if (count($_from)):
    foreach ($_from AS $this->_var['pv']):
?><?php echo $this->_var['pv']; ?><?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?></div>
</body>
</html>