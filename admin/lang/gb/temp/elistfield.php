<?php

if(!defined('InEmpireBak'))
{
exit();
}
;echo '<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>���ֶ��б�</title>
<link href="images/css.css" rel="stylesheet" type="text/css">
<script>
function ChangeAutoField(f)
{
	var tbname="';echo $mytbname;echo '";
	var chstr=tbname+"."+f;
	var r;
	var dh=",";
	var a;
	a=opener.document.';echo $form;echo '.autofield.value;
	r=a.split(chstr);
	if(r.length!=1)
	{return true;}
	if(a=="")
	{
		dh="";
	}
	opener.document.';echo $form;echo '.autofield.value+=dh+chstr;
	window.close();
}
</script>
</head>

<body>
<table width="100%" border="0" align="center" cellpadding="3" cellspacing="1">
  <tr> 
    <td>λ�ã�<b>
      ';echo $mydbname;echo '      .
      ';echo $mytbname;echo '      </b> �ֶ��б�&nbsp;<font color="#666666">(����ֶ����ɡ�����ȥ������ֵ�ֶ��б�)</font></td>
  </tr>
</table>
<br>
<table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#0472BC">
  <tr> 
    <td height="27"> <div align="center"><font color="#FFFFFF">�ֶ���</font></div></td>
    <td><div align="center"><font color="#FFFFFF">�ֶ�����</font></div></td>
    <td><div align="center"><font color="#FFFFFF">�ֶ�����</font></div></td>
    <td><div align="center"><font color="#FFFFFF">Ĭ��ֵ</font></div></td>
    <td><div align="center"><font color="#FFFFFF">��������</font></div></td>
  </tr>
  ';
while($r=$empire->fetch($sql))
{
$r[Field]="<a href='#ebak' onclick=\"ChangeAutoField('".$r[Field]."');\" title='����ȥ������ֵ�ֶ��б�'>$r[Field]</a>";
;echo '  <tr bgcolor="#FFFFFF"> 
    <td height="27"> <div align="center">
        ';echo $r[Field];echo '      </div></td>
    <td> <div align="center">
        ';echo $r[Type];echo '      </div></td>
    <td> <div align="center">
        ';echo $r[Key];echo '      </div></td>
    <td> <div align="center">
        ';echo $r['Default'];echo '      </div></td>
    <td> <div align="center">
        ';echo $r[Extra];echo '      </div></td>
  </tr>
  ';
}
;echo '</table>
<br>
</body>
</html>';
?>