<?php
require 'global.php';
headhtml();
$type_id=intval($_GET['type_id']);
$type_id_array=array('1'=>'右侧分类','2'=>'底部分类');
;echo '<div class="nav" style="display:;"><a href="?">分类列表</a><a href="?action=addform&type_id=';echo $type_id;echo '">添加</a></div>
<table width="100%" border="0" cellpadding="3" cellspacing="1" class="tablebg class_nav">
  <tr>
    <td align="center">
	';
foreach($type_id_array as $key=>$value)
{
if($key==$type_id)
{$style="class=\"selectstyle\"";}else{$style='';}
echo '<a '.$style." href=\"?type_id=".$key."\">".$value.'</a>';
}
;echo '
    </td>
  </tr>
</table>
';
$action=$_GET['action'];
switch ($action)
{
case 'saveform':
saveform();
break;
case 'addform':
addform($action);
break;
case 'modify':
addform($action);
break;
case 'del':
$db->query("delete from ve123_dh_class where class_id='".intval($_GET['class_id'])."'");
break;
}
;echo '<table width="100%" border="0" cellpadding="3" cellspacing="1" class="tablebg">

  <tr>
    <th width="50">ID</th>
    <th>分类名称</th>
    <th width="80">操作</th>
  </tr>
  ';
if(empty($type_id))
{$where='';}else{$where=" where type_id='".$type_id."'";}
$sql='select * from ve123_dh_class'.$where;
$result=$db->query($sql);
while ($rs=$db->fetch_array($result))
{
;echo '  <tr>
    <td>';echo $rs['class_id'];echo '</td>
    <td>';echo $rs['classname'];;echo '</td>
    <td><a href="?action=modify&class_id=';echo $rs['class_id'];;echo '">修改</a>&nbsp;&nbsp;<a href="?action=del&class_id=';echo $rs['class_id'];;echo '" onClick="if(!confirm(\'确定删除吗?\')) return false;">删除</a></td>
  </tr>
  ';
}
;echo '</table>

';
function addform($do_action)
{
global $db,$p_cid;
if ($do_action=='modify')
{
$class_id=intval($_GET['class_id']);
$sql="select * from ve123_dh_class where class_id='$class_id'";
$rs=$db->get_one($sql);
$classname=$rs['classname'];
$sort_id=$rs['sort_id'];
$type_id=$rs['type_id'];
$btn_txt='确定修改';
}
else
{
$type_id=intval($_GET['type_id']);
$btn_txt='确定添加';
}
;echo '<table width="100%" border="0" cellpadding="3" cellspacing="1" class="tablebg">
<form id="form1" name="form1" method="post" action="?action=saveform">
  <tr>
    <td>类型:</td>
    <td><select name="type_id">
      <option value="1" ';if($type_id==1){echo "selected=\"selected\"";};echo '>右侧分类</option>
      <option value="2" ';if($type_id==2){echo "selected=\"selected\"";};echo '>底部分类</option>
    </select>
    </td>
  </tr>
  <tr>
    <td width="100">名称:</td>
    <td>
      <textarea name="classname" cols="80" rows="5">';echo $classname;echo '</textarea>
      (支持批量添加,一行一个)</td>
  </tr>
  <tr>
    <td>排序ID:</td>
    <td><input type="text" name="sort_id" value="';echo $sort_id;echo '"/></td>
  </tr>
  
  <tr>
    <td>&nbsp;</td>
    <td>
	<input type="hidden" name="class_id" value="';echo $class_id;echo '">
	<input type="hidden" name="do_action" value="';echo $do_action;echo '">
	<input type="submit" name="Submit" value="';echo $btn_txt;echo '" />	</td>
  </tr>
  </form>
</table>
';
}
;echo '
';
function saveform()
{
global $db;
$classname=trim($_POST['classname']);
$sort_id=intval($_POST['sort_id']);
$class_id=intval($_POST['class_id']);
$type_id=intval($_POST['type_id']);
$do_action=$_POST['do_action'];
if ($do_action=='modify')
{
$array=array('classname'=>$classname,'sort_id'=>$sort_id,'type_id'=>$type_id);
$db->update('ve123_dh_class',$array,"class_id='$class_id'");
jsalert('修改成功');
}
else
{
$exp=explode("\n",$classname);
foreach($exp as $value)
{
if(!empty($value))
{
$array=array('classname'=>trim($value),'sort_id'=>$sort_id,'type_id'=>$type_id);
$db->insert('ve123_dh_class',$array);
}
}
jsalert('提交成功');
}
}
;echo '
';
?>