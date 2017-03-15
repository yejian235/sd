<div class="danpin_colLef">
	<div class="danpinColCenter">
    	<div class="bigImg" id="vertical">
        	<a href="<?php echo $this->_var['pictures']['0']['img_url']; ?>" class="MagicZoomPlus" id="Zoomer" rel="selectors-change: mouseover; hint-text: ; selectors-effect: false; selectors-class: onlickImg; zoom-distance: 22;zoom-width: 440; zoom-height: 400;"><img id="midimg" src="<?php echo $this->_var['goods']['goods_img']; ?>"></a>
            <div id="winSelector" style="left: 0px; top: 36px; display: none; "></div>
        </div>
        <div class="fangdaArea">
        	<p class="fangda soucang"> <span class="sprites"></span> <span><a class="dp_scbtn track" href="javascript:collect(<?php echo $this->_var['goods']['goods_id']; ?>)">收藏商品</a></span> </p>
        </div>
	</div>
  
	<div class="danpinLeft">
    	<div class="smallImg">
        	<div class="smallImgUp upper"></div>
            <ul id="imageMenu">
            	<?php if ($this->_var['pictures']): ?>
                <?php $_from = $this->_var['pictures']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'picture');if (count($_from)):
    foreach ($_from AS $this->_var['picture']):
?>
                <li class="track"><center><a class="SpriteSmallImgs" href="<?php if ($this->_var['picture']['img_url']): ?><?php echo $this->_var['picture']['img_url']; ?><?php else: ?><?php echo $this->_var['picture']['thumb_url']; ?><?php endif; ?>" rel="zoom-id: Zoomer" rev="<?php if ($this->_var['picture']['img_url']): ?><?php echo $this->_var['picture']['img_url']; ?><?php else: ?><?php echo $this->_var['picture']['thumb_url']; ?><?php endif; ?>"><img src="<?php if ($this->_var['picture']['thumb_url']): ?><?php echo $this->_var['picture']['thumb_url']; ?><?php else: ?><?php echo $this->_var['picture']['img_url']; ?><?php endif; ?>" alt="<?php echo $this->_var['goods']['goods_name']; ?>"></a></center></li>
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
                <?php endif; ?>
            </ul>
            <div class="smallImgDown downHover"></div>
        </div>
        <script>
        	$(function(){
				$(".smallImgUp,.smallImgDown").css({"opacity":0});
				$(".smallImg").hover(function(){
					$(".smallImgUp,.smallImgDown").stop(true,false).animate({"opacity":1});
				},function(){
					$(".smallImgUp,.smallImgDown").stop(true,false).animate({"opacity":0});
				});
			});
        </script>
    </div>
</div>
