<?php

if(!defined('InEmpireBak'))
{
exit();
}
$onclickword='(點擊轉向恢復數據)';
$change=(int)$_GET['change'];
if($change==1)
{
$onclickword='(點擊選擇)';
}
;echo '<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=big5">
<title>管理備份目錄</title>
<link href="images/css.css" rel="stylesheet" type="text/css">
<script>
function ChangePath(pathname)
{
	opener.document.';echo $form;echo '.mypath.value=pathname;
	window.close();
}
</script>
</head>

<body>
<table width="100%" border="0" align="center" cellpadding="3" cellspacing="1">
  <tr> 
    <td>位置：<a href="ChangePath.php">管理備份目錄</a>&nbsp;(存放目錄：<b>';echo $bakpath;echo '</b>)</td>
  </tr>
</table>
<br>
<table width="100%" border="0" align="center" cellpadding="3" cellspacing="1">
  <tr bgcolor="#0472BC"> 
    <td width="42%" height="25" bgcolor="#0472BC"> <div align="center"><strong><font color="#FFFFFF">備份目錄名';echo $onclickword;echo '</font></strong></div></td>
    <td width="16%" height="25"> <div align="center"><strong><font color="#FFFFFF">查看說明文件</font></strong></div></td>
    <td width="42%"><div align="center"><font color="#FFFFFF">操作</font></div></td>
  </tr>
  ';
while($file=@readdir($hand))
{
if($file!='.'&&$file!='..'&&is_dir($bakpath.'/'.$file))
{
if($change==1)
{
$showfile="<a href='#ebak' onclick=\"javascript:ChangePath('$file');\" title='$file'>$file</a>";
}
else
{
$showfile="<a href='phome.php?phome=PathGotoRedata&mypath=$file' title='$file'>$file</a>";
}
;echo '  <tr bgcolor="#DBEAF5"> 
    <td height="25"> <div align="left"><img src="images/dir.gif" width="19" height="15">&nbsp; 
        ';echo $showfile;echo ' </div></td>
    <td height="25"> <div align="center"> [<a href="';echo $bakpath.'/'.$file.'/readme.txt';echo '" target=_blank>查看備份說明</a>]</div></td>
    <td><div align="center">[<a href="#ebak" onclick="window.open(\'phome.php?phome=DoZip&p=';echo $file;echo '&change=';echo $change;echo '\',\'\',\'width=350,height=160\');">打包並下載</a>]&nbsp;&nbsp;[<a href="RepFiletext.php?mypath=';echo $file;echo '">替換文件內容</a>]&nbsp;&nbsp;[<a href="phome.php?phome=DelBakpath&path=';echo $file;echo '&change=';echo $change;echo '" onclick="return confirm(\'確認要刪除？\');">刪除目錄</a>]</div></td>
  </tr>
  ';
}
}
;echo '  <tr> 
    <td height="25" colspan="3"><font color="#666666">(說明：如果備份目錄文件較多建議直接從FTP下載備份目錄。)</font></td>
  </tr>
</table>
</body>
</html>'
?>