<?php

/**
 * ECTouch Open Source Project
 * ============================================================================
 * Copyright (c) 2012-2014 http://ectouch.cn All rights reserved.
 * ----------------------------------------------------------------------------
 * 文件名称：IndexController.class.php
 * ----------------------------------------------------------------------------
 * 功能描述：ECTouch 内容展示页面控制器
 * ----------------------------------------------------------------------------
 * Licensed ( http://www.ectouch.cn/docs/license.txt )
 * ----------------------------------------------------------------------------
 */

/* 访问控制 */
defined('IN_ECTOUCH') or die('Deny Access');

class EctouchController extends CommonController
{

    /**
     * 分享
     */
    public function share()
    {
        $this->assign('HTTP_REFERER', $_SERVER['HTTP_REFERER']);
        $this->display('ectouch_share.dwt');
    }
   
}
