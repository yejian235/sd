<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
<meta name="Description" content="<?php echo $this->_var['description']; ?>" />

<title><?php echo $this->_var['page_title']; ?></title>



<link rel="shortcut icon" href="favicon.ico" />
<link rel="icon" href="animated_favicon.gif" type="image/gif" />
<link href="<?php echo $this->_var['ecs_css_path']; ?>" rel="stylesheet" type="text/css" />
<link rel="alternate" type="application/rss+xml" title="RSS|<?php echo $this->_var['page_title']; ?>" href="<?php echo $this->_var['feed_url']; ?>" />

<?php echo $this->smarty_insert_scripts(array('files'=>'common.js,index.js')); ?>
<style type="text/css">
.mainNavBox .allSortBox {
    display: block;
}
#BDBridgeIconWrap{display:none !important;}
</style>


</head>
<body>
<?php echo $this->fetch('library/page_header.lbi'); ?> <?php echo $this->smarty_insert_scripts(array('files'=>'jquery.SuperSlide.js,easydialog.min.js,vancl_index.js')); ?>

<div class="pt88">
	<?php echo $this->fetch('library/index_ad.lbi'); ?> 
    
<?php echo $this->fetch('library/recommend_hot.lbi'); ?>


<div id="PageFooter">
	<div class="PageFooter"><?php echo $this->fetch('library/page_footer.lbi'); ?></div>
</div>

</div>
</body>
</html>
