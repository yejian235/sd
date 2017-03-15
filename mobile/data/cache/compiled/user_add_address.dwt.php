<?php echo $this->fetch('library/user_header.lbi'); ?>
<form action="<?php echo url('user/add_address');?>" method="post" name="theForm" onsubmit="return checkConsignee(this)">
 <section class="wrap wrapXgdz">
      <section class="order_box padd1" >
        <table width="100%" border="0" cellpadding="5" cellspacing="0" class="ectouch_table">
          <tr>
            <td><span class="xgdzBt">收货人姓名</span></td>
            </tr>
          <tr>
          	<td>
               <div class="inputBg_touchBg">	
                <input name="consignee" placeholder="<?php echo $this->_var['lang']['consignee_name']; ?><?php echo $this->_var['lang']['require_field']; ?>" type="text" class="inputBg_touch" value="<?php echo htmlspecialchars($this->_var['consignee']['consignee']); ?>" />
               </div>
            </td>
            </tr>
          <tr>
            <td><span class="xgdzBt"><?php echo $this->_var['lang']['mobile']; ?></span></td>
          </tr>
          <tr>
          	<td><div class="inputBg_touchBg"><input placeholder="<?php echo $this->_var['lang']['mobile']; ?><?php echo $this->_var['lang']['require_field']; ?>" name="mobile" type="text" class="inputBg_touch" value="<?php echo htmlspecialchars($this->_var['consignee']['mobile']); ?>" /></div></td>
            </tr> 
          <tr>
            <td><span class="xgdzBt"><?php echo $this->_var['lang']['country_province']; ?></span></td>
          </tr>
          <tr>
          	<td>
              <select name="country" class="sel" onchange="region.changed(this, 1, 'selProvinces')">
                <option value="0"><?php echo $this->_var['lang']['please_select']; ?><?php echo $this->_var['name_of_region']['0']; ?></option>
                <?php $_from = $this->_var['country_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'country');if (count($_from)):
    foreach ($_from AS $this->_var['country']):
?>
                <option value="<?php echo $this->_var['country']['region_id']; ?>" <?php if ($this->_var['consignee']['country'] == $this->_var['country']['region_id']): ?>selected<?php endif; ?>><?php echo $this->_var['country']['region_name']; ?></option>
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
              </select>	
          	  <select name="province" id="selProvinces" class="sel" style="margin-left:4%;" onchange="region.changed(this, 2, 'selCities')">
          	    <option value="0"><?php echo $this->_var['lang']['please_select']; ?><?php echo $this->_var['name_of_region']['1']; ?></option>
          	    <?php $_from = $this->_var['province_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'province');if (count($_from)):
    foreach ($_from AS $this->_var['province']):
?>
          	    <option value="<?php echo $this->_var['province']['region_id']; ?>" <?php if ($this->_var['consignee']['province'] == $this->_var['province']['region_id']): ?>selected<?php endif; ?>><?php echo $this->_var['province']['region_name']; ?></option>
          	    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        	    </select>
          	  <select name="city" id="selCities" class="sel"  style="margin-top:.625rem" onchange="region.changed(this, 3, 'selDistricts')">
          	    <option value="0"><?php echo $this->_var['lang']['please_select']; ?><?php echo $this->_var['name_of_region']['2']; ?></option>
          	    <?php $_from = $this->_var['city_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'city');if (count($_from)):
    foreach ($_from AS $this->_var['city']):
?>
          	    <option value="<?php echo $this->_var['city']['region_id']; ?>" <?php if ($this->_var['consignee']['city'] == $this->_var['city']['region_id']): ?>selected<?php endif; ?>><?php echo $this->_var['city']['region_name']; ?></option>
          	    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        	    </select>
          	  <select name="district" id="selDistricts" class="sel" style="margin-top:.625rem;margin-left:4%;" <?php if (! $this->_var['district_list']): ?>style="display:none"<?php endif; ?>>
          	    <option value="0"><?php echo $this->_var['lang']['please_select']; ?><?php echo $this->_var['name_of_region']['3']; ?></option>
          	    <?php $_from = $this->_var['district_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'district');if (count($_from)):
    foreach ($_from AS $this->_var['district']):
?>
          	    <option value="<?php echo $this->_var['district']['region_id']; ?>" <?php if ($this->_var['consignee']['district'] == $this->_var['district']['region_id']): ?>selected<?php endif; ?>><?php echo $this->_var['district']['region_name']; ?></option>
          	    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
       	      </select></td>
            </tr>
          <tr>
            <td><span class="xgdzBt">详细地址</span></td>
          </tr>
          <tr>
          	<td><div class="inputBg_touchBg"><input name="address" placeholder="<?php echo $this->_var['lang']['detailed_address']; ?><?php echo $this->_var['lang']['require_field']; ?>" type="text" class="inputBg_touch" value="<?php echo htmlspecialchars($this->_var['consignee']['address']); ?>" /></div></td>
            </tr>
          <tr>
            <td align="center"><?php if ($this->_var['consignee']['consignee'] && $this->_var['consignee']['email']): ?>
              <input type="submit" name="submit"  class="c-btn3 xgdzBtn" value="<?php echo $this->_var['lang']['confirm_edit']; ?>"  style="margin-right:5px;" />
              <?php else: ?>
              <input type="submit" name="submit"  class="c-btn3 xgdzBtn"  value="<?php echo $this->_var['lang']['add_address']; ?>"/>
              <?php endif; ?>
              <input type="hidden" name="act" value="act_edit_address" />
              <input name="address_id" type="hidden" value="<?php echo $this->_var['consignee']['address_id']; ?>" /></td>
          </tr>
        </table>
      </section> 
    </section> 
</form>
<script type="text/javascript" src="__PUBLIC__/js/region.js"></script> 
<script type="text/javascript" src="__PUBLIC__/js/shopping_flow.js"></script> 
<script type="text/javascript">
	region.isAdmin = false;
	<?php $_from = $this->_var['lang']['flow_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
	var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
	<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
	
	onload = function() {
	      if (!document.all)
	      {
	        document.forms['theForm'].reset();
	      }
	}
	
</script>
</body></html>