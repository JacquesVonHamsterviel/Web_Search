<?php

if(!defined('InEmpireBak'))
{
exit();
}
$onclickword='(�I����V��_�ƾ�)';
$change=(int)$_GET['change'];
if($change==1)
{
$onclickword='(�I�����)';
}
;echo '<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=big5">
<title>�޲z�ƥ��ؿ�</title>
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
    <td>��m�G<a href="ChangePath.php">�޲z�ƥ��ؿ�</a>&nbsp;(�s��ؿ��G<b>';echo $bakpath;echo '</b>)</td>
  </tr>
</table>
<br>
<table width="100%" border="0" align="center" cellpadding="3" cellspacing="1">
  <tr bgcolor="#0472BC"> 
    <td width="42%" height="25" bgcolor="#0472BC"> <div align="center"><strong><font color="#FFFFFF">�ƥ��ؿ��W';echo $onclickword;echo '</font></strong></div></td>
    <td width="16%" height="25"> <div align="center"><strong><font color="#FFFFFF">�d�ݻ������</font></strong></div></td>
    <td width="42%"><div align="center"><font color="#FFFFFF">�ާ@</font></div></td>
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
    <td height="25"> <div align="center"> [<a href="';echo $bakpath.'/'.$file.'/readme.txt';echo '" target=_blank>�d�ݳƥ�����</a>]</div></td>
    <td><div align="center">[<a href="#ebak" onclick="window.open(\'phome.php?phome=DoZip&p=';echo $file;echo '&change=';echo $change;echo '\',\'\',\'width=350,height=160\');">���]�äU��</a>]&nbsp;&nbsp;[<a href="RepFiletext.php?mypath=';echo $file;echo '">������󤺮e</a>]&nbsp;&nbsp;[<a href="phome.php?phome=DelBakpath&path=';echo $file;echo '&change=';echo $change;echo '" onclick="return confirm(\'�T�{�n�R���H\');">�R���ؿ�</a>]</div></td>
  </tr>
  ';
}
}
;echo '  <tr> 
    <td height="25" colspan="3"><font color="#666666">(�����G�p�G�ƥ��ؿ������h��ĳ�����qFTP�U���ƥ��ؿ��C)</font></td>
  </tr>
</table>
</body>
</html>'
?>