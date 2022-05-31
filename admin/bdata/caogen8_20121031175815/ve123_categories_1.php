<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `ve123_categories`;");
E_C("CREATE TABLE `ve123_categories` (
  `cate_id` mediumint(9) NOT NULL auto_increment,
  `cate_title` varchar(200) NOT NULL,
  `cate_url` varchar(225) NOT NULL,
  `parent_id` mediumint(20) NOT NULL,
  `sort_id` mediumint(9) NOT NULL,
  PRIMARY KEY  (`cate_id`)
) ENGINE=MyISAM AUTO_INCREMENT=432 DEFAULT CHARSET=gbk");
E_D("replace into `ve123_categories` values('399','�й����','','373','0');");
E_D("replace into `ve123_categories` values('398','���и���','','373','0');");
E_D("replace into `ve123_categories` values('397','���ս�Ŀ','','374','0');");
E_D("replace into `ve123_categories` values('396','Ц��Ƭ','','374','0');");
E_D("replace into `ve123_categories` values('395','���Ƭ','','374','0');");
E_D("replace into `ve123_categories` values('394','��̨Ƭ','','374','0');");
E_D("replace into `ve123_categories` values('393','����Ƭ','','374','0');");
E_D("replace into `ve123_categories` values('392','����Ƭ','','374','0');");
E_D("replace into `ve123_categories` values('391','����Ƭ','','374','0');");
E_D("replace into `ve123_categories` values('390','����Ƭ','','374','0');");
E_D("replace into `ve123_categories` values('389','������Ϸ','','375','0');");
E_D("replace into `ve123_categories` values('388','������Ϸ','','375','0');");
E_D("replace into `ve123_categories` values('387','С��Ϸ','','375','0');");
E_D("replace into `ve123_categories` values('386','�����˶�','','375','0');");
E_D("replace into `ve123_categories` values('385','������Ϸ','','375','0');");
E_D("replace into `ve123_categories` values('384','PC��Ϸ','','375','0');");
E_D("replace into `ve123_categories` values('383','������Ϸ','','375','0');");
E_D("replace into `ve123_categories` values('382','�ĵ�����','','376','0');");
E_D("replace into `ve123_categories` values('381','Դ������','','376','0');");
E_D("replace into `ve123_categories` values('380','С˵����','','376','0');");
E_D("replace into `ve123_categories` values('379','ͼƬ����','','376','0');");
E_D("replace into `ve123_categories` values('378','��Ϸ����','','376','0');");
E_D("replace into `ve123_categories` values('377','�������','','376','0');");
E_D("replace into `ve123_categories` values('376','����','','0','0');");
E_D("replace into `ve123_categories` values('375','��Ϸ','','0','0');");
E_D("replace into `ve123_categories` values('374','��Ӱ','','0','0');");
E_D("replace into `ve123_categories` values('373','����','','0','0');");
E_D("replace into `ve123_categories` values('372','�鼮','','0','0');");
E_D("replace into `ve123_categories` values('371','ͼƬ','','0','0');");
E_D("replace into `ve123_categories` values('370','���','','0','0');");
E_D("replace into `ve123_categories` values('428','�������','','370','0');");
E_D("replace into `ve123_categories` values('427','3D����','','370','0');");
E_D("replace into `ve123_categories` values('426','��ͼ���','','370','0');");
E_D("replace into `ve123_categories` values('425','�������','','370','0');");
E_D("replace into `ve123_categories` values('424','�ƻ����','','370','0');");
E_D("replace into `ve123_categories` values('423','�������','','370','0');");
E_D("replace into `ve123_categories` values('422','�������','','370','0');");
E_D("replace into `ve123_categories` values('421','�������','','371','0');");
E_D("replace into `ve123_categories` values('420','����ͼƬ','','371','0');");
E_D("replace into `ve123_categories` values('419','Ӱ��ͼƬ','','371','0');");
E_D("replace into `ve123_categories` values('418','���η羰','','371','0');");
E_D("replace into `ve123_categories` values('417','�ֻ�ͼƬ','','371','0');");
E_D("replace into `ve123_categories` values('416','����ͼƬ','','371','0');");
E_D("replace into `ve123_categories` values('415','��ŮͼƬ','','371','0');");
E_D("replace into `ve123_categories` values('414','��������','','371','0');");
E_D("replace into `ve123_categories` values('413','��ʳ���','','372','0');");
E_D("replace into `ve123_categories` values('412','ҽѧ����','','372','0');");
E_D("replace into `ve123_categories` values('411','ũҵ����','','372','0');");
E_D("replace into `ve123_categories` values('410','��������','','372','0');");
E_D("replace into `ve123_categories` values('409','��������','','372','0');");
E_D("replace into `ve123_categories` values('408','�������','','372','0');");
E_D("replace into `ve123_categories` values('407','У԰����','','372','0');");
E_D("replace into `ve123_categories` values('406','ɫ��С˵','','372','0');");
E_D("replace into `ve123_categories` values('405','����С˵','','372','0');");
E_D("replace into `ve123_categories` values('404','Ӱ�Ӹ���','','373','0');");
E_D("replace into `ve123_categories` values('403','��������','','373','0');");
E_D("replace into `ve123_categories` values('402','�����ϸ�','','373','0');");
E_D("replace into `ve123_categories` values('401','������','','373','0');");
E_D("replace into `ve123_categories` values('400','У԰����','','373','0');");
E_D("replace into `ve123_categories` values('429','��ҵ','','0','0');");
E_D("replace into `ve123_categories` values('430','Ʒ��','','429','0');");
E_D("replace into `ve123_categories` values('431','��Ʒ','','430','0');");

require("../../inc/footer.php");
?>