<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `v9_form_order`;");
E_C("CREATE TABLE `v9_form_order` (
  `dataid` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `userid` mediumint(8) unsigned NOT NULL,
  `username` varchar(20) NOT NULL,
  `datetime` int(10) unsigned NOT NULL,
  `ip` char(15) NOT NULL,
  `man_name` varchar(255) NOT NULL DEFAULT '男士姓名',
  `woman_name` varchar(255) NOT NULL DEFAULT '女士姓名',
  `man_phone` varchar(255) NOT NULL DEFAULT '男士电话',
  `woman_phone` varchar(255) NOT NULL DEFAULT '女士电话',
  `man_qq` varchar(255) NOT NULL DEFAULT '男士联系QQ',
  `woman_qq` varchar(255) NOT NULL DEFAULT '女士联系QQ',
  `man_email` varchar(255) NOT NULL DEFAULT '男士E_mail',
  `woman_email` varchar(255) NOT NULL DEFAULT '女士E_mail',
  `remark` mediumtext NOT NULL,
  PRIMARY KEY (`dataid`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8");
E_D("replace into `v9_form_order` values('2','0','','1358955884','127.0.0.1','男士姓名','女士姓名','男士电话','女士电话','593224651','1145712456','593224651@qq.com','1145712456@qq.com','备注信息');");

require("../../inc/footer.php");
?>