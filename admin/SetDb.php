<?php

require 'global.php';
;echo '';
require('class/connect.php');
require('class/db_sql.php');
require('class/functions.php');
$rnd=$lur['rnd'];
if($limittype)
{
$checklimittype=' checked';
}
if($filechmod==1)
{
$filechmod1=' checked';
$filechmod0='';
}
else
{
$filechmod1='';
$filechmod0=' checked';
}
$loginauthrnd=make_password(30);
require LoadAdminTemp('esetdb.php');

?>