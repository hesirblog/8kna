<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `v9_site`;");
E_C("CREATE TABLE `v9_site` (
  `siteid` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `name` char(30) DEFAULT '',
  `dirname` char(255) DEFAULT '',
  `domain` char(255) DEFAULT '',
  `site_title` char(255) DEFAULT '',
  `keywords` char(255) DEFAULT '',
  `description` char(255) DEFAULT '',
  `release_point` text,
  `default_style` char(50) DEFAULT NULL,
  `template` text,
  `setting` mediumtext,
  `uuid` char(40) DEFAULT '',
  PRIMARY KEY (`siteid`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8");
E_D("replace into `v9_site` values('1','默认站点','','http://localhost.8kna.com/','重庆婚纱摄影团购|重庆婚纱照团购|重庆婚纱摄影|重庆摄影工作室|重庆拍婚纱照|重庆婚纱照|重庆婚纱摄影工作室|8090后婚纱摄影|韩版婚纱照|8K拉精致婚纱摄影','重庆婚纱摄影|重庆婚纱照团购|重庆婚纱摄影团购|重庆拍婚纱照|重庆婚纱摄影工作室|重庆婚纱照|重庆摄影工作室|8090后婚纱摄影|韩版婚纱照|8k拉精致婚纱摄影','8K拉精致婚纱摄影是成都原V2摄影团队创立，是重庆婚纱照团购和重庆婚纱摄影团购的专业品牌。联系电话：63630842，是重庆婚纱摄影，重庆拍婚纱照，重庆摄影工作室，8090后婚纱摄影，重庆婚纱照，韩式婚纱照中的优秀重庆婚纱摄影工作室。','','8kna','8kna','array (\n  ''upload_maxsize'' => ''2048'',\n  ''upload_allowext'' => ''jpg|jpeg|gif|bmp|png|doc|docx|xls|xlsx|ppt|pptx|pdf|txt|rar|zip|swf'',\n  ''watermark_enable'' => ''0'',\n  ''watermark_minwidth'' => ''300'',\n  ''watermark_minheight'' => ''300'',\n  ''watermark_img'' => ''statics/images/water//mark.png'',\n  ''watermark_pct'' => ''85'',\n  ''watermark_quality'' => ''80'',\n  ''watermark_pos'' => ''9'',\n)','10f4536a-656b-11e2-b6c1-00030d6bc0dc');");

require("../../inc/footer.php");
?>