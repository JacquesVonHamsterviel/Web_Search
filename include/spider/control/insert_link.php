<link rel="stylesheet" href="xp.css" type="text/css">
<?php
set_time_limit(0);
//error_reporting(0);
require "global.php";

$url=$_GET["url"];
if(empty($url)){echo tips("网址不能为空!");die();}
find_sites($url)
//insert_links($url);
//GetUrl_AllSite(GetSiteUrl($url));
//$db->close();
?>