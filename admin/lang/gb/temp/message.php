<?php

if(!defined('InEmpireBak'))
{
exit();
}
;echo '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>��Ϣ��ʾ</title>
<link href="';echo $a;echo 'images/css.css" rel="stylesheet" type="text/css">
<SCRIPT language=javascript>
var secs=3;//3��
for(i=1;i<=secs;i++) 
{ window.setTimeout("update(" + i + ")", i * 1000);} 
function update(num) 
{ 
if(num == secs) 
{ ';echo $gotourl_js;echo '; } 
else 
{ } 
}
</SCRIPT>
</head>

<body>
<br>
<br>
<br>
<br>
<br>
<br>
<table width="500" border="0" align="center" cellpadding="3" cellspacing="1" bgcolor="#0472BC">
  <tr> 
    <td height="25"><div align="center"><strong><font color="#FFFFFF">��Ϣ��ʾ</font></strong></div></td>
  </tr>
  <tr bgcolor="#FFFFFF"> 
    <td height="80"> 
      <div align="center">
	  <br>
        <b>';echo $error;echo '</b>
        <br>
        <br><a href="';echo $gotourl;echo '">������������û���Զ���ת����������</a>
<br><br>
	  </div></td>
  </tr>
</table>
</body>
</html>';
?>