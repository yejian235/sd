
--
-- 表的结构 `ecs_touch_nav`
--

DROP TABLE IF EXISTS `ecs_touch_nav`;

CREATE TABLE IF NOT EXISTS `ecs_touch_nav` (
  `id` mediumint(8) NOT NULL AUTO_INCREMENT,
  `ctype` varchar(10) DEFAULT NULL,
  `cid` smallint(5) unsigned DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `ifshow` tinyint(1) NOT NULL,
  `vieworder` tinyint(1) NOT NULL,
  `opennew` tinyint(1) NOT NULL,
  `url` varchar(255) NOT NULL,
  `pic` varchar(255) NOT NULL,
  `type` varchar(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `type` (`type`),
  KEY `ifshow` (`ifshow`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- 转存表中的数据 `ecs_touch_nav`
--

INSERT INTO `ecs_touch_nav` (`id`, `ctype`, `cid`, `name`, `ifshow`, `vieworder`, `opennew`, `url`, `pic`, `type`) VALUES
(1, '', 0, '全部分类', 1, 0, 0, 'index.php?c=category&a=top_all', 'themes/xiaomi/images/nav/nav_0.png', 'middle'),
(2, '', 0, '我的订单', 1, 0, 0, 'index.php?c=user&a=order_list', 'themes/xiaomi/images/nav/nav_1.png', 'middle'),
(3, '', 0, '最新团购', 1, 0, 0, 'index.php?c=groupbuy', 'themes/xiaomi/images/nav/nav_2.png', 'middle'),
(4, '', 0, '促销活动', 1, 0, 0, 'index.php?m=default&c=activity', 'themes/xiaomi/images/nav/nav_3.png', 'middle'),
(5, '', 0, '积分商城', 1, 0, 0, 'index.php?c=exchange&a=index', 'themes/xiaomi/images/nav/nav_4.png', 'middle'),
(6, '', 0, '品牌街', 1, 0, 0, 'index.php?c=brand', 'themes/xiaomi/images/nav/nav_5.png', 'middle'),
(7, '', 0, '个人中心', 1, 0, 0, 'index.php?c=user', 'themes/xiaomi/images/nav/nav_6.png', 'middle'),
(8, '', 0, '购物车', 1, 0, 0, 'index.php?c=flow&a=cart', 'themes/xiaomi/images/nav/nav_7.png', 'middle');
