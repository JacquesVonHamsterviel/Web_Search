<?php

require 'global.php';
$action=$_REQUEST['action'];
switch($action)
{
case 'saveadd':
saveNav($action);
break;
case 'savemodify':
saveNav($action);
break;
case 'del':
$nav_id=intval($_GET['nav_id']);
$db->query("delete from ve123_nav where nav_id='".$nav_id."'");
break;
}
headhtml();
;echo '';
if($action=='modify')
{
$do_action='savemodify';
$nav_id=$_GET['nav_id'];
$nav=$db->get_one("select * from ve123_nav where nav_id='".$nav_id."'");
$bt_txt='确定修改';
}
else
{
$do_action='saveadd';
$bt_txt='确定添加';
}
;echo '<div class="nav" style="display:;"><a href="?">添加</a></div>
<table width="100%" border="0" cellpadding="3" cellspacing="1" class="tablebg">
<form id="form1" name="form1" method="get" action="nav.php">
<input type="hidden" name="action" value="';echo $do_action;echo '" />
<input type="hidden" name="nav_id" value="';echo $nav_id;echo '" />
  <tr>
    <td width="100">标题:</td>
    <td><input type="text" name="title" value="';echo $nav['title'];;echo '"/></td>
  </tr>
  <tr>
    <td>热门关键词:</td>
    <td><textarea name="keywords" cols="80" rows="8">';echo $nav['keywords'];;echo '</textarea>
      (以逗号分隔)</td>
  </tr>
  <tr>
    <td>排序ID:</td>
    <td><input type="text" name="sort_id" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" name="Submit" value="';echo $bt_txt;;echo '" /></td>
  </tr>
  <tr>
    <td>热门关键词:</td>
    <td><input name="hot_keywords" type="text" size="100" value="';echo implode(',',$hot_keywords);;echo '"/></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" name="Submit2" value="修改热门关键词" /></td>
  </tr>
 </form>
</table>
<br />
<table width="100%" border="0" cellpadding="3" cellspacing="1" class="tablebg">
  <tr>
    <th width="50">排序ID</th>
    <th width="100">标题</th>
    <th>热门关键词</th>
    <th width="150">操作</th>
  </tr>
';
$query=$db->query('select * from ve123_nav order by sort_id asc');
while($row=$db->fetch_array($query))
{
;echo '
  <tr>
    <td>';echo $row['sort_id'];;echo '</td>
    <td>';echo $row['title'];;echo '</td>
    <td>';echo $row['keywords'];;echo '</td>
    <td>
	<a href="?action=modify&nav_id=';echo $row['nav_id'];;echo '">修改</a>&nbsp;
	<a href="?action=del&nav_id=';echo $row['nav_id'];;echo '" onClick="if(!confirm(\'确定删除吗?\')) return false;">删除</a>
	</td>
  </tr>
';
}
;echo '</table>
';
function saveNav($do_action)
{
global $db;
$title=trim(HtmlReplace($_GET['title']));
$keywords=HtmlReplace($_GET['keywords']);
$sort_id=HtmlReplace($_GET['sort_id']);
$array=array('title'=>$title,'keywords'=>$keywords,'sort_id'=>$sort_id);
if($do_action=='savemodify')
{
$nav_id=intval($_GET['nav_id']);
$db->update('ve123_nav',$array,"nav_id='".$nav_id."'");
}
else
{
if(!empty($title))
{
$db->insert('ve123_nav',$array);
}
}
create_cache();
header('location:'.$_SERVER['HTTP_REFERER']);
}
function create_cache()
{
global $db;
$query=$db->query('select * from ve123_nav order by sort_id asc');
while($row=$db->fetch_array($query))
{
$nav[$row['nav_id']]=$row['title'];
$keywords=str_replace(array(chr(13).chr(10),' '),'',$row['keywords']);
$nav_keywords[$row['nav_id']]=explode(',',$keywords);
$hot_keywords=explode(',',str_replace(' ','',$_GET['hot_keywords']));
}
$str='<?php '.chr(13).chr(10);;
$str.="\$nav=".var_export($nav,true).';'.chr(13).chr(10);;
$str.="\$nav_keywords=".var_export($nav_keywords,true).';'.chr(13).chr(10);;
$str.="\$hot_keywords=".var_export($hot_keywords,true).';'.chr(13).chr(10);;
$str.=' ?>';
$fp=@fopen('../cache/nav.php','w') or die('写方式打开文件失败，请检查程序目录是否为可写');
@fputs($fp,$str) or die('文件写入失败,请检查程序目录是否为可写');
@fclose($fp);
}
foothtml();
;echo '
';
?>