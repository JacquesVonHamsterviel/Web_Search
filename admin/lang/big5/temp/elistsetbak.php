<?php

if(!defined('InEmpireBak'))
{
exit();
}
$onclickword='(點擊轉向備份數據)';
$change=(int)$_GET['change'];
if($change==1)
{
$onclickword='(點擊選擇)';
}
;echo '<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=big5">
<title>管理備份保存設置</title>
<link href="images/css.css" rel="stylesheet" type="text/css">
<script>
function ChangeSet(filename)
{
	var ok=confirm("確認要導入?");
	if(ok)
	{
		opener.parent.ebakmain.location.href=\'ChangeTable.php?mydbname=';echo $mydbname;echo '&savefilename=\'+filename;
		window.close();
	}
}
</script>
</head>

<body>
<table width="100%" border="0" align="center" cellpadding="3" cellspacing="1">
  <tr> 
    <td>位置：<a href="ListSetbak.php">管理備份設置</a>&nbsp;(存放目錄：<b>setsave</b>)</td>
  </tr>
</table>
<br>
<table width="500" border="0" align="center" cellpadding="3" cellspacing="1">
  <tr bgcolor="#0472BC"> 
    <td width="63%" height="25" bgcolor="#0472BC"> <div align="center"><strong><font color="#FFFFFF">保存設置文件名';echo $onclickword;echo '</font></strong></div></td>
    <td width="37%"><div align="center"><font color="#FFFFFF">操作</font></div></td>
  </tr>
  ';
while($file=@readdir($hand))
{
if($file!='.'&&$file!='..'&&is_file('setsave/'.$file))
{
if($change==1)
{
$showfile="<a href='#ebak' onclick=\"javascript:ChangeSet('$file');\" title='$file'>$file</a>";
}
else
{
$showfile="<a href='phome.php?phome=SetGotoBak&savename=$file' title='$file'>$file</a>";
}
if($file=='def')
{
if(empty($change))
{
$showfile=$file;
}
$showdel='<b>默認設置</b>';
}
else
{
$showdel="<a href=\"phome.php?phome=DoDelSave&mydbname=$mydbname&change=$change&savename=$file\" onclick=\"return confirm('確認要刪除？');\">刪除設置</a>";
}
;echo '  <tr bgcolor="#DBEAF5"> 
    <td height="25"> <div align="left"><img src="images/txt.gif" width="19" height="16">&nbsp; 
        ';echo $showfile;echo ' </div></td>
    <td><div align="center">&nbsp;[';echo $showdel;echo ']</div></td>
  </tr>
  ';
}
}
;echo '  <tr> 
    <td height="25" colspan="2">&nbsp;</td>
  </tr>
</table>
</body>
</html>'
?>