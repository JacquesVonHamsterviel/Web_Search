<?php

function headhtml()
{
;echo '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>无标题文档</title>
<link rel="stylesheet" href="images/maincss.css">
<script language="javascript">
function CheckAll(form,name)
  {
  for (var i=0;i<form.elements.length;i++)
    {
    var e = form.elements[i];
    if (e.name == name)
       e.checked = form.chkall.checked;
    }
  }
function checklistform()
{
var do_action;
var obj = document.getElementsByName("do_action"); //这个是以标签的name来取控件 
                 for(i=0; i<obj.length;i++)    { 
                  if(obj[i].checked){ 
                          do_action=obj[i].value; 
                   }
              } 
  //if(do_action=="undefined"){alert("请选择");return false;};
  if(do_action=="del")
  {
       if(!confirm("确定删除吗?"))
	   {
	       return false;
	   }
  }
}
</script>
</head>

<body>
';
}
;echo '';
function foothtml()
{
;echo '<div style="text-align:center;"><a target="_blank" href="http://www.adminchn.com/"><font color="#666666">Powered by 菏泽亿时达</font></a></div>
</body>
</html>
';
}
;echo '';
function tips($msg)
{
$tips_html='亿时达提示:'.$msg;
return $tips_html;
}

?>
