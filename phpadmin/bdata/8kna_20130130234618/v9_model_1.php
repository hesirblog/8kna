<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `v9_model`;");
E_C("CREATE TABLE `v9_model` (
  `modelid` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `siteid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `name` char(30) NOT NULL,
  `description` char(100) NOT NULL,
  `tablename` char(20) NOT NULL,
  `setting` text NOT NULL,
  `addtime` int(10) unsigned NOT NULL DEFAULT '0',
  `items` smallint(5) unsigned NOT NULL DEFAULT '0',
  `enablesearch` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `disabled` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `default_style` char(30) NOT NULL,
  `category_template` char(30) NOT NULL,
  `list_template` char(30) NOT NULL,
  `show_template` char(30) NOT NULL,
  `js_template` varchar(30) NOT NULL,
  `admin_list_template` char(30) NOT NULL,
  `member_add_template` varchar(30) NOT NULL,
  `member_list_template` varchar(30) NOT NULL,
  `sort` tinyint(3) NOT NULL,
  `type` tinyint(1) NOT NULL,
  PRIMARY KEY (`modelid`),
  KEY `type` (`type`,`siteid`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8");
E_D("replace into `v9_model` values('1','1','文章模型','','news','','0','0','1','0','default','category','list','show','','','','','0','0');");
E_D("replace into `v9_model` values('2','1','下载模型','','download','','0','0','1','0','default','category_download','list_download','show_download','','','','','0','0');");
E_D("replace into `v9_model` values('3','1','图片模型','','picture','','0','0','1','0','default','category_picture','list_picture','show_picture','','','','','0','0');");
E_D("replace into `v9_model` values('10','1','普通会员','普通会员','member_detail','','0','0','1','0','','','','','','','','','0','2');");
E_D("replace into `v9_model` values('11','1','视频模型','','video','','0','0','1','0','default','category_video','list_video','show_video','','','','','0','0');");
E_D("replace into `v9_model` values('12','1','在线订单','在线订单','order','array (\n  ''enabletime'' => ''0'',\n  ''starttime'' => ''1358870400'',\n  ''endtime'' => '''',\n  ''sendmail'' => ''0'',\n  ''mails'' => '''',\n  ''allowmultisubmit'' => ''1'',\n  ''allowunreg'' => ''1'',\n)','1358953957','1','1','0','default','','','show','show_js','','','','0','3');");

require("../../inc/footer.php");
?>