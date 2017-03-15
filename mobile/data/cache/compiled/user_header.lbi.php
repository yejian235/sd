<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<title><?php echo $this->_var['page_title']; ?> 触屏版</title>
<link rel="stylesheet" href="__PUBLIC__/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo $this->_var['ectouch_css_path']; ?>">
<link rel="stylesheet" href="__TPL__/css/user.css">
<script type="text/javascript" src="__PUBLIC__/js/jquery.min.js" ></script> 
<script type="text/javascript" src="__PUBLIC__/js/jquery.json.js" ></script> 
<script type="text/javascript" src="__PUBLIC__/js/common.js"></script> 
<script type="text/javascript" src="__PUBLIC__/js/jquery.more.js"></script> 
<script type="text/javascript" src="__PUBLIC__/js/utils.js"></script>
<script type="text/javascript" src="__TPL__/js/ectouch.js"></script>
<script type="text/javascript" src="__TPL__/js/TouchSlide.js"></script>
<script src="__PUBLIC__/bootstrap/js/bootstrap.min.js"></script> 

</head>
<body>
<header id="header" style="background:#e9e9e9;">
  <div class="header_l"> <a class="ico_10" href="<?php echo url('index/index');?>"> 首页 </a> </div>
  <h1> <?php echo $this->_var['title']; ?> </h1>
  <div class="header_r"> <a class="ico_01" href="<?php echo url('flow/cart');?>"> 购物车 </a></div>
</header>