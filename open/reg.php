<?php
require("global.php");
$action=$_POST["action"];
if($action=="savereg")
{
     $user_name=HtmlReplace($_POST["user_name"]);
	 $password=HtmlReplace($_POST["passwd1"]);
	 $email=HtmlReplace($_POST["email"]);
	 $real_name=HtmlReplace($_POST["real_name"]);
	 $question=HtmlReplace($_POST["question"]);
	 $answer=HtmlReplace($_POST["answer"]);
	 $check=$db->get_one("select * from ve123_zz_user where user_name='".$user_name."'");
	 if(empty($check))
	 {
	     $array=array('user_name'=>$user_name,'password'=>md5($password),'real_name'=>$real_name,'question'=>$question,'answer'=>$answer,'email'=>$email,'reg_ip'=>ip(),'reg_time'=>time(),'points'=>$zz_config["zs_points"]);
		 $db->insert("ve123_zz_user",$array);
		 $_SESSION["user_name"]=$user_name;
		 header("location:./");
	 }
	 else
	 {
	    header("location:reg.php?msg=".urlencode("用户名已存在,请换个再�?"));
	 }
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title><?php echo $config["name"];?>开放平�?/title>
<link href="images/reg.css" rel="stylesheet" type="text/css">
</head>
<script language="javascript">
function checkform()
{
    var f1 = document.forms[0];
	var wm = "对不起，必填项：";
	var noerror = 1;

	// --- entered_login ---
	var t1 = f1.user_name;
	if (t1.value == "" || t1.value == " ") {
		wm += "用户名，";
		noerror = 0;
	}
	var t1 = f1.passwd1;
	var t2 = f1.passwd2;
	if (f1.passwd1.value == "" || f1.passwd2.value == " ") {
		wm += "密码�?;
		noerror = 0;
	}
	var t1 = f1.email;
	if (t1.value == "" || t1.value == " "||(t1.value!=""&&!/^\w(\w*\.*)*@(\w+\.)+\w{2,4}$/.test(t1.value))) {
		wm += "邮箱�?;
		noerror = 0;
	}
	var t1 = f1.real_name;
	if (t1.value == "" || t1.value == " ") {
		wm += "联系人姓名，";
		noerror = 0;
	}
	// --- check if errors occurred ---
	if (noerror == 0) {
		alert(wm.substr(0, wm.length-1));
		return false;
	}
	else return true;
}
</script>
<body>
<center>
  <div  id="main" align="left">
    <table width="100%"  border="0" cellspacing="0" cellpadding="0" id="hd">
      <tr>
        <td width="107" valign="top"><a href="./"><img src="../include/images/log.gif" width="117" height="50" border="0" align="absmiddle" class="lg"></a></td>
        <td width="877" valign="top"><div class="tt">
            <div class="r">&nbsp;</div>
        用户注册</div></td>
      </tr>
    </table>
    <br>
		<div class="pad_1">
		  <p><strong>注册步骤:</strong> <img src="images/ico6_1.gif" align="absmiddle"> <strong>填写信息</strong>&nbsp;&nbsp;&nbsp;&nbsp;2 确认信息<br>
		    <br>
		    <img src="images/ico6_7.gif" align="absmiddle">&nbsp;&nbsp;<span class="col_1">请务必填写真实信息，以便为您提供服务。带*为必填项�?br>
		    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><br>
	      </p>
		  <div class="regTit">注册信息</div>
		<form name="register" id="register" action="reg.php" method="post" onSubmit="return checkform();">
		<input type=hidden name=action value=savereg>

			<table border="0" cellspacing="0" cellpadding="0" width="100%"><tr ></tr>
              
              <tr >
              <td valign="top" class="pad_3">
				<strong>用户�?nbsp;*</strong><br />
				<p><input type="text" name="user_name" class="input bd" maxlength="32" id="user_name" value=""/></p><p class="error"></p>
				<div class="note">中英文均�?/div></td>
            </tr>
            <tr>
              <td valign="top" class="pad_3">
				<strong>设置密码&nbsp;*</strong><br>
				<p><input name="passwd1" class="input bd" type="password" id="passwd1" maxlength="32" value=""/></p><p class="error"></p>
				<div class="note">至少六位</div></td>
            </tr>
            <tr>
              <td valign="top" class="pad_3">
				  <strong>请重复密�?nbsp;*</strong><br>
				  <p><input name="passwd2" class="input bd" type="password" id="passwd2" maxlength="32" value="" /></p><p class="error"></p></td>
            </tr>
			<tr>
              <td valign="top" class="pad_3">
				  <strong>找回密码问题&nbsp;*</strong><br>
			  <p><input name="question" class="input bd" type="text" id="passwd2" maxlength="32" value="" />
			  </p><p class="error"></p></td>
            </tr>
			<tr>
              <td valign="top" class="pad_3">
				  <strong>找回密码答案&nbsp;*</strong><br>
			  <p><input name="answer" class="input bd" type="text" id="passwd2" maxlength="32" value="" />
			  </p><p class="error"></p>
			  <div class="note">当密码遗失时凭此领取</div>
			  </td>
            </tr>
		  </table>
			<div class="regTit">联系资料</div>
			<table border="0" cellspacing="0" cellpadding="0" width="100%">
            <tr>
              <td valign="top" class="pad_3">
				<strong>电子邮件&nbsp;*</strong><br>
				<p><input name="email" class="input bd" maxlength="100" value="" id="email"   /></p><p class="error"></p>
				<div class="note">最常用的邮件地址，例：admin@adminchn.com</div></td>
            </tr>
            <tr>
              <td valign="top" class="pad_3">
				<strong>联系人姓�?nbsp;*</strong><br>
				<p><input name="real_name" size="12" class="bd" maxlength="50" value="" id="real_name"/></p><p class="error"></p>
                			<div class="note">推广负责人真实姓�?/div></td>
            </tr>

			</table>
			<div class="cutline"></div>
            <table border="0" cellspacing="0" cellpadding="0" width="100%">
<!-- BLOCK: 接受协议�?-->

<tr style="display:none">
<td colspan="2" valign="top" class="pad_3"><p><input name="agree" type="checkbox" id="checkbox" /><label for="checkbox"> 我已阅读声明并接�?/label> <span  title="郑重提示：本�??php echo $config["name"];?>推广服务合同》是用户享有�??php echo $config["name"];?>搜索推广”服务的最终确定版本，用户接受�??php echo $config["name"];?>搜索推广”服务，则意味着同意并签署了本合同。用户签署的其他文件中有关�??php echo $config["name"];?>搜索推广”服务描述与本合同不符的，以本合同为�?><?php echo $config["name"];?>推广服务合同</span></p><p class="error"></p>
<input type="hidden" name="protocolshow" value="1">
</td>
</tr>
            <tr>
              <td height="30" colspan="2"><br />
			  <input type="hidden" name="stage" value="1">
			  <input type="submit" class="but3" name="stage" value="注册" />
			  <br/><br/></td>
            </tr>
          </table></form>
    </div>
</div>
</center>
</body>
</html>
