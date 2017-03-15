<?php echo $this->fetch('library/page_header.lbi'); ?> 

<div id="page">
  <header id="header">
    <div class="header_l header_il"> <a class="ico_02" href="<?php echo url('user/index');?>"></a> </div>
    <h1 class="indexLogo"><?php echo $this->_var['shop_name']; ?></h1>
    <div class="header_r"> <a class="ico_01" href="<?php echo url('flow/cart');?>"></a> </div>
  </header>
</div>
 

<div id="focus" class="focus region">
  <div class="hd">
    <ul>
    </ul>
  </div>
  <div class="bd"><?php 
$k = array (
  'name' => 'ads',
  'id' => '1',
  'num' => '3',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?> </div>
</div>
 


<div id=content class="wrap"> 
  
  <div class="row_category">
    <ul class="row">
      <?php $_from = $this->_var['navigator_list']['middle']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'nav');$this->_foreach['nav_middle_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['nav_middle_list']['total'] > 0):
    foreach ($_from AS $this->_var['nav']):
        $this->_foreach['nav_middle_list']['iteration']++;
?>
      <li class="col-sm-3 col-xs-3"> <a href="<?php echo $this->_var['nav']['url']; ?>"<?php if ($this->_var['nav']['opennew'] == 1): ?> target="_blank"<?php endif; ?> title="<?php echo $this->_var['nav']['name']; ?>"> <img src="<?php echo $this->_var['nav']['pic']; ?>" style="" /> </a>
        <p> <?php echo $this->_var['nav']['name']; ?> </p>
      </li>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    </ul>
  </div>
   
  
  
  <div class="banner_c1">
    <div class="bnrc_l bnrc_lBorder">  <?php echo $this->fetch('library/ad_position.lbi'); ?> </div>
    <div class="bnrc_r bnrc_lBorder">
      <ul>
        <li class="bnrc_rb">  <?php echo $this->fetch('library/ad_position.lbi'); ?> </li>
      </ul>
    </div>
  </div>
  <div class="banner_c1" style="display:none">
    <div class="bnrc_l bnrc_lBorder"> <?php echo $this->fetch('library/ad_position.lbi'); ?> </div>
    <div class="bnrc_r bnrc_lBorder"> <?php echo $this->fetch('library/ad_position.lbi'); ?> </div>
  </div>
</div>


<style type="text/css">
.ect_category_box {}
.ect_category_box ul{margin:0; padding:0; overflow:hidden}
.ect_category_box ul li {float:left; width:50%; border:1px #f1f1f1 solid; background:#fff; text-align:center; margin-left:-1px; margin-top:-1px; padding-bottom:1rem;}
.ect_category_box ul li span{height:3rem; display:block; white-space:nowrap; 
text-overflow:ellipsis; 
-o-text-overflow:ellipsis; 
overflow: hidden;}
.ect_category_box ul li img {width:100%}
</style>

<div class="ect_category_box">
  <div class="lookMore"><a href="<?php echo url('category/index',array('type'=>'hot'));?>"><?php echo $this->_var['lang']['hot_goods']; ?></a></div>
  <ul>
      <?php if ($this->_var['new_goods']): ?> 
      <?php $_from = $this->_var['new_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['new_goods'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['new_goods']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['new_goods']['iteration']++;
?>
      <li><a href="<?php echo $this->_var['goods']['url']; ?>"><img src="<?php echo $this->_var['goods']['goods_img']; ?>" /></a><span><?php echo $this->_var['goods']['name']; ?></span>
        <?php if ($this->_var['goods']['promote_price'] != ""): ?> 
        <span><?php echo $this->_var['goods']['promote_price']; ?></span> 
        <?php else: ?> 
        <span><?php echo $this->_var['goods']['shop_price']; ?></span> 
        <?php endif; ?> 
      </li>
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
      <?php endif; ?> 
    </ul>
</div>

 <?php echo $this->fetch('library/cat_goods.lbi'); ?> 


<div class="lookMore"><a href="<?php echo url('category/all');?>">查看更多 ></a></div>

 
<?php echo $this->fetch('library/page_footer.lbi'); ?> 
</body></html>