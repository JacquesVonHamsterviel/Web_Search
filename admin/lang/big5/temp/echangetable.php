<?php

if(!defined('InEmpireBak'))
{
exit();
}
;echo '<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=big5">
<title>��ܼƾڪ�</title>
<link href="images/css.css" rel="stylesheet" type="text/css">
<script language="JavaScript">
function CheckAll(form)
  {
  for (var i=0;i<form.elements.length;i++)
    {
    var e = form.elements[i];
    if(e.name==\'bakstru\'||e.name==\'bakstrufour\'||e.name==\'beover\'||e.name==\'autoauf\'||e.name==\'baktype\'||e.name==\'bakdatatype\')
		{
		continue;
	    }
	if (e.name != \'chkall\')
       e.checked = form.chkall.checked;
    }
  }
function reverseCheckAll(form)
{
  for (var i=0;i<form.elements.length;i++)
  {
    var e = form.elements[i];
    if(e.name==\'bakstru\'||e.name==\'bakstrufour\'||e.name==\'beover\'||e.name==\'autoauf\'||e.name==\'baktype\'||e.name==\'bakdatatype\')
	{
		continue;
	}
	if (e.name != \'chkall\')
	{
	   if(e.checked==true)
	   {
       		e.checked = false;
	   }
	   else
	   {
	  		e.checked = true;
	   }
	}
  }
}
function SelectCheckAll(form)
  {
  for (var i=0;i<form.elements.length;i++)
    {
    var e = form.elements[i];
    if(e.name==\'bakstru\'||e.name==\'bakstrufour\'||e.name==\'beover\'||e.name==\'autoauf\'||e.name==\'baktype\'||e.name==\'bakdatatype\')
		{
		continue;
	    }
	if (e.name != \'chkall\')
	  	e.checked = true;
    }
  }
function check()
{
	var ok;
	ok=confirm("�T�{�n���榹�ާ@?");
	return ok;
}
</script>
</head>
<body>
<table width="100%" border="0" align="center" cellpadding="3" cellspacing="1">
  <tr> 
    <td width="51%">��m�G�ƥ��ƾ� -&gt; <a href="ChangeDb.php">��ܼƾڮw</a>(<b>';echo $mydbname;echo '</b>) -&gt; <a href="ChangeTable.php?mydbname=';echo $mydbname;echo '">��ܳƥ���</a></td>
    <td width="49%"><div align="right"> </div></td>
  </tr>
  <tr> 
    <td height="25" colspan="2"><div align="center">�ƥ��B�J�G��ܼƾڮw -&gt; <font color="#FF0000">��ܭn�ƥ�����</font> 
        -&gt; �}�l�ƥ� -&gt; ����</div></td>
  </tr>
</table>
<form name="ebakchangetb" method="post" action="phomebak.php" onsubmit="return check();">
  <table width="100%" border="0" align="center" cellpadding="3" cellspacing="1" bgcolor="#0472BC">
    <tr> 
      <td height="25"><font color="#FFFFFF">�ƥ��ѼƳ]�m�G 
        <input name="phome" type="hidden" id="phome" value="DoEbak">
        <input name="mydbname" type="hidden" id="mydbname" value="';echo $mydbname;echo '">
        </font></td>
    </tr>
    <tr> 
      <td height="25" bgcolor="#FFFFFF"> <table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#DBEAF5">
          <tr> 
            <td width="22%">&nbsp;</td>
            <td> [<a href="#ebak" onclick="javascript:window.open(\'ListSetbak.php?mydbname=';echo $mydbname;echo '&change=1\',\'\',\'width=550,height=380,scrollbars=yes\');">�ɤJ�]�m</a>]&nbsp;&nbsp;&nbsp;[<a href="#ebak" onclick="javascript:showsave.style.display=\'\';">�O�s�]�m</a>]&nbsp;&nbsp;&nbsp;[<a href="#ebak" onclick="javascript:showreptable.style.display=\'\';">��q������W</a>]</td>
          </tr>
          <tr id="showsave" style="display:none">
            <td>&nbsp;</td>
            <td>�O�s���W:setsave/ 
              <input name="savename" type="text" id="savename" value="';echo $_GET['savefilename'];echo '">
              <input name="Submit4" type="submit" id="Submit4" onClick="document.ebakchangetb.phome.value=\'DoSave\';document.ebakchangetb.action=\'phome.php\';" value="�O�s�]�m">
              <font color="#666666">(���W�Хέ^��r��,�p�Gtest)</font></td>
          </tr>
		  <tr id="showreptable" style="display:none">
            <td>&nbsp;</td>
            <td> ��r��: 
              <input name="oldtablepre" type="text" id="oldtablepre" size="18">
              �s�r��:
              <input name="newtablepre" type="text" id="newtablepre" size="18"> 
              <input name="Submit4" type="submit" id="Submit4" onClick="document.ebakchangetb.phome.value=\'ReplaceTable\';document.ebakchangetb.action=\'phome.php\';" value="�����襤��W">
            </td>
          </tr>
        </table>
        <table width="100%" border="0" align="center" cellpadding="3" cellspacing="1">
          <tr> 
            <td width="22%"><input type="radio" name="baktype" value="0"';echo $dbaktype==0?' checked':'';echo '> 
              <strong>�����j�p�ƥ�</strong> </td>
            <td width="78%" height="23"> �C�ճƥ��j�p: 
              <input name="filesize" type="text" id="filesize" value="';echo $dfilesize;echo '" size="6">
              KB <font color="#666666">(1 MB = 1024 KB)</font></td>
          </tr>
          <tr> 
            <td><input type="radio" name="baktype" value="1"';echo $dbaktype==1?' checked':'';echo '> 
              <strong>���O���Ƴƥ�</strong></td>
            <td height="23">�C�ճƥ� 
              <input name="bakline" type="text" id="bakline" value="';echo $dbakline;echo '" size="6">
              ���O���A 
              <input name="autoauf" type="checkbox" id="autoauf" value="1"';echo $dautoauf==1?' checked':'';echo '>
              �۰��ѧO�ۼW�r�q<font color="#666666">(���覡�Ĳv��)</font></td>
          </tr>
          <tr> 
            <td>�ƥ��ƾڮw���c</td>
            <td height="23"><input name="bakstru" type="checkbox" id="bakstru" value="1"';echo $dbakstru==1?' checked':'';echo '>
              �O <font color="#666666">(�S�S���p�A�п��)</font></td>
          </tr>
          <tr> 
            <td>�ƾڽs�X</td>
            <td height="23"> <select name="dbchar" id="dbchar">
                <option value="auto"';echo $ddbchar=='auto'?' selected':'';echo '>�۰��ѧO�s�X</option>
                <option value=""';echo $ddbchar==''?' selected':'';echo '>���]�m</option>
                ';
echo Ebak_ReturnDbCharList($ddbchar);
;echo '              </select> <font color="#666666">(�qmysql4.0�ɤJmysql4.1�H�W�����ݭn��ܩT�w�s�X�A�����۰�)</font></td>
          </tr>
          <tr>
            <td>�ƾڦs��榡</td>
            <td height="23"><input type="radio" name="bakdatatype" value="0"';echo $dbakdatatype==0?' checked':'';echo '>
              ���`
              <input type="radio" name="bakdatatype" value="1"';echo $dbakdatatype==1?' checked':'';echo '>
              �Q���i��覡<font color="#666666">(�Q���i��ƥ����|���Χ�h���Ŷ�)</font></td>
          </tr>
          <tr> 
            <td>�s��ؿ�</td>
            <td height="23"> 
              ';echo $bakpath;echo '              / 
              <input name="mypath" type="text" id="mypath" value="';echo $mypath;echo '" size="28"> 
              <font color="#666666"> 
              <input type="button" name="Submit2" value="��ܥؿ�" onclick="javascript:window.open(\'ChangePath.php?change=1&toform=ebakchangetb\',\'\',\'width=750,height=500,scrollbars=yes\');">
              (�ؿ����s�b�A�t�η|�۰ʫإ�)</font></td>
          </tr>
          <tr> 
            <td>�ƥ��ﶵ</td>
            <td height="23">�ɤJ�覡: 
              <select name="insertf" id="select">
                <option value="replace"';echo $dinsertf=='replace'?' selected':'';echo '>REPLACE</option>
                <option value="insert"';echo $dinsertf=='insert'?' selected':'';echo '>INSERT</option>
              </select>
              , 
              <input name="beover" type="checkbox" id="beover" value="1"';echo $dbeover==1?' checked':'';echo '>
              ���㴡�J�A
              <input name="bakstrufour" type="checkbox" id="bakstrufour" value="1"';echo $dbakstrufour==1?' checked':'';echo '>
              <a title="�ݭn�ഫ�ƾڪ�s�X�ɿ��">�নMYSQL4.0�榡</a>, �C�ճƥ����j�G 
              <input name="waitbaktime" type="text" id="waitbaktime" value="';echo $dwaitbaktime;echo '" size="2">
              ��</td>
          </tr>
          <tr> 
            <td valign="top">�ƥ�����<br> <font color="#666666">(�t�η|�ͦ��@��readme.txt)</font></td>
            <td height="23"><textarea name="readme" cols="80" rows="5" id="readme">';echo $dreadme;echo '</textarea></td>
          </tr>
          <tr> 
            <td valign="top">�h���ۼW�Ȫ��r�q�C��G<br> <font color="#666666">(�榡�G<strong>��W.�r�q�W</strong><br>
              �h�ӽХ�&quot;,&quot;��})</font></td>
            <td height="23"><textarea name="autofield" cols="80" rows="5" id="autofield">';echo $dautofield;echo '</textarea></td>
          </tr>
        </table>
      </td>
    </tr>
    <tr> 
      <td height="25">
<table width="100%" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td width="50%"><font color="#FFFFFF">��ܭn�ƥ�����G( <a href="#ebak" onclick="SelectCheckAll(document.ebakchangetb)"><font color="#ffffff"><u>����</u></font></a> 
              | <a href="#ebak" onclick="reverseCheckAll(document.ebakchangetb);"><font color="#ffffff"><u>�Ͽ�</u></font></a> )</font></td>
            <td><div align="right"><font color="#FFFFFF">�d��:</font> 
                <input name="keyboard" type="text" id="keyboard" value="';echo $keyboard;echo '">
                <input type="button" name="Submit32" value="��ܼƾڪ�" onclick="self.location.href=\'ChangeTable.php?sear=1&mydbname=';echo $mydbname;echo '&keyboard=\'+document.ebakchangetb.keyboard.value;">
              </div></td>
          </tr>
        </table></td>
    </tr>
    <tr>
      <td height="25" bgcolor="#FFFFFF"><table width="100%" border="0" align="center" cellpadding="3" cellspacing="1">
          <tr bgcolor="#DBEAF5"> 
            <td width="5%" height="23"> <div align="center">���</div></td>
            <td width="27%" height="23" bgcolor="#DBEAF5"> 
              <div align="center">��W(�I���d�ݦr�q)</div></td>
            <td width="13%" height="23" bgcolor="#DBEAF5"> 
              <div align="center">����</div></td>
            <td width="15%" bgcolor="#DBEAF5">
<div align="center">�s�X</div></td>
            <td width="15%" height="23"> 
              <div align="center">�O����</div></td>
            <td width="14%" height="23"> 
              <div align="center">�j�p</div></td>
            <td width="11%" height="23"> 
              <div align="center">�H��</div></td>
          </tr>
          ';
$tbchecked=' checked';
if($dtblist)
{
$check=1;
}
$totaldatasize=0;
$tablenum=0;
$datasize=0;
$rownum=0;
while($r=$empire->fetch($sql))
{
$rownum+=$r[Rows];
$tablenum++;
$datasize=$r[Data_length]+$r[Index_length];
$totaldatasize+=$r[Data_length]+$r[Index_length]+$r[Data_free];
if($check==1)
{
if(strstr($dtblist,','.$r[Name].','))
{
$tbchecked=' checked';
}
else
{
$tbchecked='';
}
}
$collation=$r[Collation]?$r[Collation]:'---';
;echo '          <tr id=tb';echo $r[Name];echo '> 
            <td height="23"> <div align="center"> 
                <input name="tablename[]" type="checkbox" id="tablename[]" value="';echo $r[Name];echo '" onclick="if(this.checked){tb';echo $r[Name];echo '.style.backgroundColor=\'#F1F7FC\';}else{tb';echo $r[Name];echo '.style.backgroundColor=\'#ffffff\';}"';echo $tbchecked;echo '>
              </div></td>
            <td height="23"> <div align="left"><a href="#ebak" onclick="window.open(\'ListField.php?mydbname=';echo $mydbname;echo '&mytbname=';echo $r[Name];echo '\',\'\',\'width=660,height=500,scrollbars=yes\');" title="�I���d�ݪ�r�q�C��"> 
                ';echo $r[Name];echo '                </a></div></td>
            <td height="23"> <div align="center">
                ';echo $r[Type]?$r[Type]:$r[Engine];echo '              </div></td>
            <td><div align="center">
				';echo $collation;echo '              </div></td>
            <td height="23"> <div align="right">
                ';echo $r[Rows];echo '              </div></td>
            <td height="23"> <div align="right">
                ';echo Ebak_ChangeSize($datasize);echo '              </div></td>
            <td height="23"> <div align="right">
                ';echo Ebak_ChangeSize($r[Data_free]);echo '              </div></td>
          </tr>
          ';
}
;echo '          <tr bgcolor="#DBEAF5"> 
            <td height="23"> <div align="center">
                <input type=checkbox name=chkall value=on onclick="CheckAll(this.form)"';echo $check==0?' checked':'';echo '>
              </div></td>
            <td height="23"> <div align="center"> 
                ';echo $tablenum;echo '              </div></td>
            <td height="23"> <div align="center">---</div></td>
            <td><div align="center">---</div></td>
            <td height="23"> <div align="center">
                ';echo $rownum;echo '              </div></td>
            <td height="23" colspan="2"> <div align="center">
                ';echo Ebak_ChangeSize($totaldatasize);echo '              </div></td>
          </tr>
        </table></td>
    </tr>
    <tr> 
      <td height="25">
<div align="center">
          <input type="submit" name="Submit" value="�}�l�ƥ�" onclick="document.ebakchangetb.phome.value=\'DoEbak\';document.ebakchangetb.action=\'phomebak.php\';">
          &nbsp;&nbsp; &nbsp;&nbsp;
          <input type="submit" name="Submit2" value="�״_�ƾڪ�" onclick="document.ebakchangetb.phome.value=\'DoRep\';document.ebakchangetb.action=\'phome.php\';">
          &nbsp;&nbsp; &nbsp;&nbsp; 
          <input type="submit" name="Submit22" value="�u�Ƽƾڪ�" onclick="document.ebakchangetb.phome.value=\'DoOpi\';document.ebakchangetb.action=\'phome.php\';">
        &nbsp;&nbsp; &nbsp;&nbsp; 
          <input type="submit" name="Submit22" value="�R���ƾڪ�" onclick="document.ebakchangetb.phome.value=\'DoDrop\';document.ebakchangetb.action=\'phome.php\';">
		&nbsp;&nbsp; &nbsp;&nbsp; 
          <input type="submit" name="Submit22" value="�M�żƾڪ�" onclick="document.ebakchangetb.phome.value=\'EmptyTable\';document.ebakchangetb.action=\'phome.php\';">
		</div></td>
    </tr>
  </table>
</form>
</body>
</html>';
?>