<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `ve123_about`;");
E_C("CREATE TABLE `ve123_about` (
  `about_id` mediumint(9) NOT NULL auto_increment,
  `title` varchar(200) NOT NULL,
  `filename` varchar(200) NOT NULL,
  `content` mediumtext NOT NULL,
  `is_show` int(1) NOT NULL,
  `url` varchar(225) NOT NULL,
  `sortid` int(11) NOT NULL,
  PRIMARY KEY  (`about_id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=gbk");
E_D("replace into `ve123_about` values('14','推广平台','tg','推广平台','1','tg/','1');");
E_D("replace into `ve123_about` values('15','搜索风云榜','top','搜索风云榜','1','top/','2');");
E_D("replace into `ve123_about` values('16','留言反馈','g','留言反馈','1','g/','3');");
E_D("replace into `ve123_about` values('20','关于我们','about','<br> 雕鹰团队信息咨询有限公司(以下简称雕鹰团队搜索) 是应互联网新经济发展的需要而成立的新一代互联网信息服务公司，公司采用了全球领先的网络自动搜索技术，打破了传统的互联网信息搜索模式，是技术创新推动的结果。公司致力于提供本地化的、区域性的精确信息查找，创造用户更好的搜索体验，进一步推动中国互联网向专业化、垂直化搜索发展。</p>\r\n\r\n        我们采用全球领先的IP自动锁定用户区域技术，将海量的网络信息以区域作为自动分类，引导用户可以更快更精确找到自己想找的网络信息。在此基础上，我们推出了网站直达、固定排名、滚动排名、免费自助建站等系列网络产品，协助广大中小企业找到更多网上商机。</p>\r\n\r\n        本地搜索关心每一位互联网用户的需求，作为新一代的互联网信息运营商，本地搜索非常重视用户的个性化要求，了解用户潜在的需要，给广大用户提供及时周到的网络服务。本地搜索也充分尊重员工的价值，重视每个人的工作岗位，提倡积极向上的敬业精神。只有全体员工的共同努力，我们才能赢得本地搜索广阔的未来和数字化生活的灿烂前景。</p>\r\n        互联网高速发展给本地搜索的发展带来了巨大的机遇，本地搜索将以网络技术的应用为手段，促进菏泽互联网向专业化、垂直化搜索发展。以此带动企业的进步。我们将同志同道合的合作伙伴一起，共同创造互联网美好的未来!</p><br></td>','0','','8');");

require("../../inc/footer.php");
?>