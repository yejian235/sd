<?php echo $this->fetch('library/page_header.lbi'); ?>
<header id="header"><div class="header_l header_return"> <a class="ico_10" href="<?php echo url('index/index');?>">  </a> </div>
  <h1> <?php echo $this->_var['title']; ?> </h1>
  <div class="header_r"> <a class="ico_01" href="<?php echo url('flow/cart');?>"> 购物车 </a> </div></header>
<div class="clist">
<div class="search_box">
      <form method="post" action="<?php echo url('category/index');?><?php if ($this->_var['id']): ?>&id=<?php echo $this->_var['id']; ?><?php endif; ?>" name="searchForm" id="searchForm_id">
        <input placeholder="请输入商品名称" name="keywords" type="text" id="keywordBox" />
        <button class="ico_07" type="submit"> </button>
      </form>
    </div>
  <ul>
  
    <?php $_from = $this->_var['category']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cat');$this->_foreach['no'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['no']['total'] > 0):
    foreach ($_from AS $this->_var['cat']):
        $this->_foreach['no']['iteration']++;
?>
     <?php if ($this->_var['cat']['cat_id']): ?>
    <li class="crow level1">
      <div class="crow_row">
        <div class="crow_icon"> <img alt="" src="<?php echo $this->_var['cat']['cat_image']; ?>"> </div>
        <div class="crow_title"> <span><?php echo htmlspecialchars($this->_var['cat']['name']); ?></span></div>
        <div class="crow_arrow"> <img src="__TPL__/images/ico_11.png"> </div>
        <div>&nbsp;</div>
      </div>
    </li>
     <?php else: ?>   
    <li class="crow" style="border-bottom:#eee 1px solid">
    	<div class="crow_icon"> <img alt="" src="<?php echo $this->_var['cat']['cat_image']; ?>"> </div>
    	<div class="crow_title"><span><a href="<?php echo $this->_var['cat']['url']; ?>"><?php echo htmlspecialchars($this->_var['cat']['name']); ?></a></span></div>
        <div>&nbsp;</div>
    </li>
    <?php endif; ?>
    <ul class="clist clist_sub clearfix" style="opacity: 1; display: none; ">
      <li class="crow"> 
        <?php $_from = $this->_var['cat']['cat_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'child');$this->_foreach['no1'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['no1']['total'] > 0):
    foreach ($_from AS $this->_var['child']):
        $this->_foreach['no1']['iteration']++;
?>
        <div class="crow_item   <?php if (($this->_foreach['no1']['iteration'] - 1) % 3 == 0): ?>  crow_item_clear <?php endif; ?> "> <a href="<?php echo $this->_var['child']['url']; ?>"><?php echo htmlspecialchars($this->_var['child']['name']); ?></a> </div>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
      </li>
    </ul>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
  </ul>
</div>
<?php echo $this->fetch('library/page_footer.lbi'); ?> 
<script type="text/javascript" src="__TPL__/js/zepto.min.js"></script> 
<script type="text/javascript">
/*头部搜索点击关闭或者弹出搜索框*/  
function showSearch( ){
	document.getElementById("search_box").style.display="block";
}
function closeSearch(){
	document.getElementById("search_box").style.display="none";
}
/* 搜索验证 */
function check(Id){
	var strings = document.getElementById(Id).value;
	if(strings.replace(/(^\s*)|(\s*$)/g, "").length == 0){
		return false;
	}
	return true;
}

(function($) {
	var btn_up = new Image(), btn_down = new Image();
	btn_up.src = "__TPL__/images/ico_12.png";
	btn_down.src = "__TPL__/images/ico_11.png";
	var Menu = {
		// 初始化事件
		initEvent : function() {
			$().ready(
					function() {
						$("div.clist").click(function(e) {
							Menu.router(e);
						});
						$("#allClass").click(function(e) {
							Menu.showMenu1();
						});
						$(window).on(
								"hashchange",
								function(e) {
									var name = decodeURIComponent(location.hash
											.replace(/^#/, ""));
									if (name != "") {
										Menu.showMenu3(name);
									}else{
										Menu.showMenu1();
									}
								});
					});
		},
		// 事件分发路油
		router : function(_event) {
			var target = $(_event.target || _event.srcElement);
			var _tar = target.closest(".level1");

			// 显示二级菜单
			if (_tar.length > 0) {
				Menu.showMenu2(_tar);
				/*var _gp = target.closest(".crow_row");// 点击事件对应此行的祖父级节点
				var _top = _gp.offset().top;
				setTimeout(function(){
					if (_top > 100) {
						window.scroll(0, _gp.offset().top);
					} else {
						window.scroll(0, _gp.offset().top - 50);
					}					
				},15)*/
				return;
			}
		},
		// 显示一级菜单
		showMenu1 : function() {
			$("#contentsub").hide();
			$("#content").show();
		},
		// 显示二级菜单
		showMenu2 : function($curMenuDom) {
			var next = $curMenuDom.next("ul");
			if (next.css("display") == "none") {
				//$("ul.clist_sub").hide();
				//$("div.crow_arrow").each(function(i, dom) {
				//	$(dom).html(btn_down.cloneNode(true));
				//});
				next.css("opacity", "0").show().animate({
					opacity : 1
				}, 500);
				//next.show();
				$("div.crow_arrow", $curMenuDom).html(btn_up.cloneNode(true));
			} else {
				next.hide();
				$("div.crow_arrow", $curMenuDom).html(btn_down.cloneNode(true));
			}
		},
		
	}
	window.Menu = Menu;
	Menu.initEvent();// 初始化事件
})($);
</script>
</body>
</html>