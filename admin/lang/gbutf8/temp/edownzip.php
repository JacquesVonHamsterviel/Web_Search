<?php

if(!defined('InEmpireBak'))
{
exit();
}
;echo '<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>下载压缩包</title>
<link href="images/css.css" rel="stylesheet" type="text/css">
</head>

<body>
<table width="100%" border="0" align="center" cellpadding="3" cellspacing="1" bgcolor="#0472BC">
  <tr> 
    <td height="30"> <div align="center"><strong><font color="#FFFFFF">下载压缩包(目录： 
        ';echo $p;echo '        )</font></strong></div></td>
  </tr>
  <tr> 
    <td height="30" bgcolor="#FFFFFF"> 
      <div align="center">[<a href="';echo $file;echo '">下载压缩包</a>]</div></td>
  </tr>
  <tr> 
    <td height="30" bgcolor="#FFFFFF"> 
      <div align="center">[<a href="phome.php?f=';echo $f;echo '&phome=DelZip" onclick="return confirm(\'确认要删除？\');">删除压缩包</a>]</div></td>
  </tr>
  <tr>
    <td height="30" bgcolor="#FFFFFF">
<div align="center">（<font color="#FF0000">说明：安全起见，下载完毕请马上删除压缩包．</font>）</div></td>
  </tr>
</table>
</body>
</html>';
?>