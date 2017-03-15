<div id="IndexBan">
	<div class="IndexBan slideBox">
        <div class="bd">
        	<ul>
            	<?php $_from = $this->_var['flash']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'flash_0_66535000_1489473852');$this->_foreach['myflash'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['myflash']['total'] > 0):
    foreach ($_from AS $this->_var['flash_0_66535000_1489473852']):
        $this->_foreach['myflash']['iteration']++;
?>
            	<li style="background:url(<?php echo $this->_var['flash_0_66535000_1489473852']['src']; ?>) center 0 no-repeat;"><a href="<?php echo $this->_var['flash_0_66535000_1489473852']['url']; ?>" target="_blank"></a></li>
            	<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            </ul>
        </div>
        <div class="hd">
        	<ul>
            	<?php $_from = $this->_var['flash']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'flash_0_66555200_1489473852');$this->_foreach['myflash'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['myflash']['total'] > 0):
    foreach ($_from AS $this->_var['flash_0_66555200_1489473852']):
        $this->_foreach['myflash']['iteration']++;
?>
            	<li></li>
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            </ul>
        </div>
    </div>
    <script>
    	jQuery(".slideBox").slide({mainCell:".bd ul",effect:"fold",autoPlay:true});
		$(window).resize(function(){
			var ww=$(window).width(),ulli=$(".slideBox .bd ul,.slideBox .bd li");
			ulli.css({width:ww});
		});
    </script>
</div>