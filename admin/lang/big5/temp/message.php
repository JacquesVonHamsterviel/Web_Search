<?php

if(!defined('InEmpireBak'))
{
exit();
}
;echo '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=big5">
<title>信息提示</title>
<link href="';echo $a;echo 'images/css.css" rel="stylesheet" type="text/css">
<SCRIPT language=javascript>
var secs=3;//3秒
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
    <td height="25"><div align="center"><strong><font color="#FFFFFF">信息提示</font></strong></div></td>
  </tr>
  <tr bgcolor="#FFFFFF"> 
    <td height="80"> 
      <div align="center">
	  <br>
        <b>';echo $error;echo '</b>
        <br>
        <br><a href="';echo $gotourl;echo '">如果您的瀏覽器沒有自動跳轉，請點擊這裡</a>
<br><br>
	  </div></td>
  </tr>
</table>
</body>
</html>'
?>