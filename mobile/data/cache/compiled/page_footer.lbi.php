<div id="content" class="footer">
  <p class="dLogin"><?php 
$k = array (
  'name' => 'member_info',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?> | <a href="#top">返回顶部</a></p>
  <p class="dLogin"> <a href="./"> 触屏版 </a> | <a href="<?php echo $this->_var['site_url']; ?>?pc"> 电脑版 </a> | <a href="#"> 客户端 </a> </p>
</div>
<script type="text/javascript">
TouchSlide({
    slideCell:"#focus",
    titCell:".hd ul", //开启自动分页 autoPage:true ，此时设置 titCell 为导航元素包裹层
    mainCell:".bd ul", 
    effect:"leftLoop", 
    autoPlay:true,//自动播放
    autoPage:true //自动分页
});
</script> 
