<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `ve123_search_keyword`;");
E_C("CREATE TABLE `ve123_search_keyword` (
  `kid` mediumint(9) NOT NULL auto_increment,
  `s` int(11) NOT NULL,
  `keyword` varchar(225) NOT NULL,
  `hits` mediumint(9) NOT NULL,
  `lasttime` int(10) NOT NULL,
  `ks` tinyint(4) NOT NULL default '0',
  PRIMARY KEY  (`kid`)
) ENGINE=MyISAM AUTO_INCREMENT=29234 DEFAULT CHARSET=gbk");
E_D("replace into `ve123_search_keyword` values('29199','0','��˾','8','1347067026','0');");
E_D("replace into `ve123_search_keyword` values('29200','0','��������','2','1346925745','0');");
E_D("replace into `ve123_search_keyword` values('29201','0','123','4','1346749185','0');");
E_D("replace into `ve123_search_keyword` values('29202','0','sfd','1','1346751219','0');");
E_D("replace into `ve123_search_keyword` values('29203','0','��ʱ��','2','1347017100','0');");
E_D("replace into `ve123_search_keyword` values('29204','0','����','1','1346843867','0');");
E_D("replace into `ve123_search_keyword` values('29205','0','11','1','1346856917','0');");
E_D("replace into `ve123_search_keyword` values('29206','0','','22','1351307461','0');");
E_D("replace into `ve123_search_keyword` values('29207','0','����','1','1346900695','0');");
E_D("replace into `ve123_search_keyword` values('29208','0','�ٶ�','2','1351307279','0');");
E_D("replace into `ve123_search_keyword` values('29209','0','88888','1','1346925705','0');");
E_D("replace into `ve123_search_keyword` values('29210','0','360��ȫ��ʿ','1','1346925760','0');");
E_D("replace into `ve123_search_keyword` values('29211','0','��','1','1346939263','0');");
E_D("replace into `ve123_search_keyword` values('29212','0','1','1','1346939270','0');");
E_D("replace into `ve123_search_keyword` values('29213','0','����','1','1347017114','0');");
E_D("replace into `ve123_search_keyword` values('29214','0','360','2','1351307292','0');");
E_D("replace into `ve123_search_keyword` values('29215','0','��ݸ�Ƽ�','1','1347039097','0');");
E_D("replace into `ve123_search_keyword` values('29216','0','�ٶ�ͳ��','1','1347039101','0');");
E_D("replace into `ve123_search_keyword` values('29217','0','��ע����ҵ','1','1347039109','0');");
E_D("replace into `ve123_search_keyword` values('29218','0','�����ѣ�Ʒ����������������������������','1','1347039130','0');");
E_D("replace into `ve123_search_keyword` values('29219','0','����','1','1347056180','0');");
E_D("replace into `ve123_search_keyword` values('29220','0','����','1','1347056225','0');");
E_D("replace into `ve123_search_keyword` values('29221','0','���籭','1','1347067631','0');");
E_D("replace into `ve123_search_keyword` values('29222','0','��ӥ�Ŷ�','1','1351308041','0');");
E_D("replace into `ve123_search_keyword` values('29223','0','��ӥ','3','1351309341','0');");
E_D("replace into `ve123_search_keyword` values('29224','429','��ҵ','1','1351309384','0');");
E_D("replace into `ve123_search_keyword` values('29225','370','���','1','1351309390','0');");
E_D("replace into `ve123_search_keyword` values('29226','371','ͼƬ','1','1351309393','0');");
E_D("replace into `ve123_search_keyword` values('29227','372','�鼮','1','1351309397','0');");
E_D("replace into `ve123_search_keyword` values('29228','373','����','1','1351309399','0');");
E_D("replace into `ve123_search_keyword` values('29229','374','��Ӱ','1','1351309400','0');");
E_D("replace into `ve123_search_keyword` values('29230','375','��Ϸ','1','1351309402','0');");
E_D("replace into `ve123_search_keyword` values('29231','376','����','1','1351309404','0');");
E_D("replace into `ve123_search_keyword` values('29232','0','��','1','1351677074','0');");
E_D("replace into `ve123_search_keyword` values('29233','0','�ݸ���','2','1351677401','0');");

require("../../inc/footer.php");
?>