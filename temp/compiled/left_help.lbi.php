
<?php if ($this->_var['helps']): ?>
<div class="sideMenu">
	<?php $_from = $this->_var['helps']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'help_cat');$this->_foreach['cat'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['cat']['total'] > 0):
    foreach ($_from AS $this->_var['key'] => $this->_var['help_cat']):
        $this->_foreach['cat']['iteration']++;
?>
    <dl class="accountSideOption1">
    	<dt class="transaction_manage"><i class="bottom_form_ico bottom_form_ico<?php echo $this->_foreach['cat']['iteration']; ?>"></i><?php echo $this->_var['help_cat']['cat_name']; ?></dt>
        <dd>
        	<ul>
            	<?php $_from = $this->_var['help_cat']['article']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
                <li><a <?php if ($this->_var['id'] == $this->_var['item']['article_id']): ?> class="sell" <?php endif; ?> href="<?php echo $this->_var['item']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['item']['title']); ?>"> <?php echo $this->_var['item']['short_title']; ?></a></li>
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            </ul>
        </dd>
    </dl>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</div>
<?php endif; ?> 

<script type="text/javascript">
				$(".Article li:last").css("border-bottom", "0");
			</script> 