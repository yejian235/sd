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

<?php echo $this->smarty_insert_scripts(array('files'=>'common.js')); ?>
</head>
<body>
<?php echo $this->fetch('library/page_header.lbi'); ?>

<div class="pt88">

<div class="vancl_block box">
 <div id="ur_here">
  <?php echo $this->fetch('library/ur_here.lbi'); ?>
 </div>
</div>


<div class="vancl_block clearfix">
	
    <div class="help_left"><?php echo $this->fetch('library/left_help.lbi'); ?></div>
    
    
	<div class="help_right">
    	<div class="helpTit"><h2><?php echo htmlspecialchars($this->_var['article']['title']); ?></h2><p>发布日期：<?php echo $this->_var['article']['add_time']; ?></p></div>
        <div class="helpCon">
            <?php if ($this->_var['article']['content']): ?>
            <?php echo $this->_var['article']['content']; ?>
            <?php endif; ?>
        </div>
	</div>
</div>
</div>
<div id="PageFooter">
	<div class="PageFooter"><?php echo $this->fetch('library/page_footer.lbi'); ?></div>
</div>
</body>
</html>
