<?php exit;?>a:3:{s:8:"template";a:5:{i:0;s:61:"D:/workDir/sites/php5329/ecshop/themes/21cake/article_pro.dwt";i:1;s:69:"D:/workDir/sites/php5329/ecshop/themes/21cake/library/page_header.lbi";i:2;s:65:"D:/workDir/sites/php5329/ecshop/themes/21cake/library/ur_here.lbi";i:3;s:67:"D:/workDir/sites/php5329/ecshop/themes/21cake/library/left_help.lbi";i:4;s:69:"D:/workDir/sites/php5329/ecshop/themes/21cake/library/page_footer.lbi";}s:7:"expires";i:1489632802;s:8:"maketime";i:1489629202;}<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="" />
<meta name="Description" content="" />
<title>用户协议_陕西顺旦</title>
<link rel="shortcut icon" href="favicon.ico" />
<link rel="icon" href="animated_favicon.gif" type="image/gif" />
<link href="themes/21cake/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/common.js"></script></head>
<body>
<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script><script type="text/javascript" src="js/jquery.json.js"></script><script type="text/javascript" src="js/vancl_common.js"></script><script type="text/javascript" src="js/transport_jquery.js"></script><script type="text/javascript" src="js/utils.js"></script><script type="text/javascript" src="js/jquery.SuperSlide.js"></script>
<div class="headBox">
	<div class="headCon clearfix">
    	<div id="logo_areaID" class="hd_logo_area f_l clearfix"> <a href="./index.php" class="fl"> <img src="themes/21cake/images/logo.gif"></a></div>
        <div class="f_r">
        	<div class="clearfix">
            	<ul class="SiteNav clearfix" id="ECS_MEMBERZONE">
                	
                    554fcae493e564ee0dc75bdf2ebf94camember_info|a:1:{s:4:"name";s:11:"member_info";}554fcae493e564ee0dc75bdf2ebf94ca                    <li><a class="shopCart" href="flow.php" id="shoppingcar_link">554fcae493e564ee0dc75bdf2ebf94cacart_info|a:1:{s:4:"name";s:9:"cart_info";}554fcae493e564ee0dc75bdf2ebf94ca</a></li>
                    <li class="guanzhu">
                    	<span></span>
                        <div class="otherBox">
                        	<i></i>
                        	<em></em>
                        	<div class="otherBoxCon"><img src="themes/21cake/images/2wm_wx.jpg"><p>扫描顺旦商贸方形<br>微信二维码</p></div>
                        </div>
                    </li>
                    <li class="guanzhu sanweobo">
                    	<span></span>
                        <div class="otherBox">
                        	<i></i>
                        	<em></em>
                        	<div class="otherBoxCon"><img src="themes/21cake/images/2wm_xl.jpg"><p>关注官方微博：顺旦</p></div>
                        </div>
                    </li>
                                        <li>
                    	                        <a href="flow.php" >查看购物车</a>
                                                                    </li>
                                    </ul>
                <script>
                	$(".SiteNav li.topmemlist,.SiteNav li.guanzhu").hover(function(){
						$(this).addClass("on");
					},function(){
						$(this).removeClass("on");
					});
                </script>
            </div>
            <div class="Nav clearfix">
				<ul>
                    <li  class="cur"><a href="index.php">首页</a></li>
                                        <li ><a href="category.php?id=321" >酒品</a></li>
                                        <li ><a href="category.php?id=323" >特产</a></li>
                                        <li ><a href="category.php?id=322" >食品</a></li>
                                        <li ><a href="category.php?id=337" >茶叶</a></li>
                                    </ul>
			</div>
        </div>
    </div>
</div>
</div>
<script type="text/javascript">
function deleteCartGoods(rec_id)
{
	Ajax.call('delete_cart_goods.php', 'id='+rec_id, deleteCartGoodsResponse, 'POST', 'JSON');
}
/**
 * 接收返回的信息
 */
function deleteCartGoodsResponse(res)
{
  if (res.error)
  {
    alert(res.err_msg);
  }
  else
  {
	  $("#shoppingCarNone").html(res.content);
  }
}
</script> 
<div class="pt88">
<div class="vancl_block box">
 <div id="ur_here">
  <a href=".">首页</a> <code>&gt;</code> 用户协议 </div>
</div>
<div class="vancl_block clearfix">
	
    <div class="help_left"><div class="sideMenu">
	    <dl class="accountSideOption1">
    	<dt class="transaction_manage"><i class="bottom_form_ico bottom_form_ico1"></i>新手上路</dt>
        <dd>
        	<ul>
            	                <li><a  href="article.php?id=9" title="退货流程"> 退货流程</a></li>
                                <li><a  href="article.php?id=10" title="购物流程"> 购物流程</a></li>
                            </ul>
        </dd>
    </dl>
        <dl class="accountSideOption1">
    	<dt class="transaction_manage"><i class="bottom_form_ico bottom_form_ico2"></i>配送与支付 </dt>
        <dd>
        	<ul>
            	                <li><a  href="article.php?id=15" title="货到付款区域"> 货到付款区域</a></li>
                                <li><a  href="article.php?id=16" title="配送支付智能查询 "> 配送支付智能查询</a></li>
                                <li><a  href="article.php?id=17" title="支付方式说明"> 支付方式说明</a></li>
                            </ul>
        </dd>
    </dl>
        <dl class="accountSideOption1">
    	<dt class="transaction_manage"><i class="bottom_form_ico bottom_form_ico3"></i>会员中心</dt>
        <dd>
        	<ul>
            	                <li><a  href="article.php?id=18" title="资金管理"> 资金管理</a></li>
                                <li><a  href="article.php?id=19" title="我的收藏"> 我的收藏</a></li>
                                <li><a  href="article.php?id=20" title="我的订单"> 我的订单</a></li>
                            </ul>
        </dd>
    </dl>
        <dl class="accountSideOption1">
    	<dt class="transaction_manage"><i class="bottom_form_ico bottom_form_ico4"></i>服务保证 </dt>
        <dd>
        	<ul>
            	                <li><a  href="article.php?id=21" title="退换货原则"> 退换货原则</a></li>
                                <li><a  href="article.php?id=22" title="售后服务保证 "> 售后服务保证</a></li>
                                <li><a  href="article.php?id=23" title="产品质量保证 "> 产品质量保证</a></li>
                            </ul>
        </dd>
    </dl>
        <dl class="accountSideOption1">
    	<dt class="transaction_manage"><i class="bottom_form_ico bottom_form_ico5"></i>联系我们 </dt>
        <dd>
        	<ul>
            	                <li><a  href="article.php?id=24" title="网站故障报告"> 网站故障报告</a></li>
                                <li><a  href="article.php?id=26" title="投诉与建议"> 投诉与建议</a></li>
                            </ul>
        </dd>
    </dl>
    </div>
 
<script type="text/javascript">
				$(".Article li:last").css("border-bottom", "0");
			</script></div>
    
    
	<div class="help_right">
    	<div class="helpTit"><h2>用户协议</h2><p>发布日期：2014-04-24</p></div>
        <div class="helpCon">
                    </div>
	</div>
</div>
</div>
<div id="PageFooter">
	<div class="PageFooter">
<div id="bottomNav" class="box" style="display:none;">
  <div class="box_1" style="border:none;">
    <div class="bNavList clearfix">
      <div class="f_l"> 
         
         
        <a href="article.php?id=36" >关于我们</a> 
         
        - 
         
         
        <a href="article.php?id=4" >联系我们</a> 
         
        - 
         
         
        <a href="article.php?id=9" >购物指南</a> 
         
         
         
      </div>
      <div class="f_r"> <a href="#top"><img src="themes/21cake/images/bnt_top.gif" /></a> <a href="index.php"><img src="themes/21cake/images/bnt_home.gif" /></a> </div>
    </div>
  </div>
</div>
<div id="footer" style="display:none;">
  <div class="text"> 曲江新区燕翔路旺座曲江C座25层2502室 
     
    Tel: 029-89832015 
     
     
    E-mail: 77150285@qq.com<br />
     
     
     
    <a href="http://wpa.qq.com/msgrd?V=1&amp;Uin=77150285&amp;Site=陕西顺旦商贸有限公司&amp;Menu=yes" target="_blank"><img src="http://wpa.qq.com/pa?p=1:77150285:4" height="16" border="0" alt="QQ" /> 77150285</a> 
     
     
     
     
     
     
     
     
     
     
     
     
     
    <br />
  </div>
</div>
<div class="copyRight">
	<div class="copyRightL">
    	<p>&copy; 2005-2017 陕西顺旦商贸有限公司 版权所有，并保留所有权利。</p>
    </div>
    <div class="copyRightR">
         
                                    &nbsp;&nbsp;<a href="article.php?id=36"  >关于我们</a>
                                                &nbsp;&nbsp;<a href="article.php?id=4"  >联系我们</a>
                                                &nbsp;&nbsp;<a href="article.php?id=9"  >购物指南</a>
                         
            </div>
    <div class="blank"></div>
    <div></div>
</div>
</div>
</div>
</body>
</html>