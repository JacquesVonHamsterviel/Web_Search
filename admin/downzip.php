<?php

require 'global.php';
require('class/connect.php');
require('class/db_sql.php');
require('class/functions.php');
$rnd=$lur['rnd'];
$p=$_GET['p'];
$f=$_GET['f'];
$file=$bakzippath.'/'.$f;
require LoadAdminTemp('eDownZip.php');

?>