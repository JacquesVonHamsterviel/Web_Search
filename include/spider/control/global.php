<?php
if($_COOKIE["adminname"]=="")
{
    header("location:lg.php");
}
require "../../../global_hou.php";
require "../spider_class.php";
require "../snoopy.class.php";
require_once("global_func.php");
?>