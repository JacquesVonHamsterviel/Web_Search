<!DOCTYPE html>
<!--STATUS OK-->





































































































































<?php
require "global.php";
?>
<html>
<head>
<meta http-equiv=Content-Type content="text/html; charset=utf-8">
<title><?php echo $config["name"];?>搜索</title>
<meta name="Keywords" content="<?php echo $config["Keywords"];?>">
<meta name="description" content="<?php echo $config["description"];?>">
<link href="/favicon.ico" rel="shortcut icon" />
<link href="include/hide.css" rel="stylesheet" type="text/css" />
<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0,user-scalable=no">

<STYLE>
HTML {
	OVERFLOW-Y: auto
}
BODY {
	TEXT-ALIGN: center; FONT: 12px arial; BACKGROUND: #fff
}
BODY {
	PADDING-BOTTOM: 0px; LIST-STYLE-TYPE: none; MARGIN: 0px; PADDING-LEFT: 0px; PADDING-RIGHT: 0px; PADDING-TOP: 0px
}
P {
	PADDING-BOTTOM: 0px; LIST-STYLE-TYPE: none; MARGIN: 0px; PADDING-LEFT: 0px; PADDING-RIGHT: 0px; PADDING-TOP: 0px
}
FORM {
	PADDING-BOTTOM: 0px; LIST-STYLE-TYPE: none; MARGIN: 0px; PADDING-LEFT: 0px; PADDING-RIGHT: 0px; PADDING-TOP: 0px
}
UL {
	PADDING-BOTTOM: 0px; LIST-STYLE-TYPE: none; MARGIN: 0px; PADDING-LEFT: 0px; PADDING-RIGHT: 0px; PADDING-TOP: 0px
}
LI {
	PADDING-BOTTOM: 0px; LIST-STYLE-TYPE: none; MARGIN: 0px; PADDING-LEFT: 0px; PADDING-RIGHT: 0px; PADDING-TOP: 0px
}
BODY {
	POSITION: relative
}
FORM {
	POSITION: relative
}
#fm {
	POSITION: relative
}
TD {
	TEXT-ALIGN: left
}
IMG {
	BORDER-RIGHT-WIDTH: 0px; BORDER-TOP-WIDTH: 0px; BORDER-BOTTOM-WIDTH: 0px; BORDER-LEFT-WIDTH: 0px
}
A {
	COLOR: #00c
}
A:active {
	COLOR: #f60
}
#u {
	TEXT-ALIGN: right; PADDING-BOTTOM: 3px; PADDING-LEFT: 0px; PADDING-RIGHT: 10px; PADDING-TOP: 7px
}
#m {
	MARGIN: 0px auto; WIDTH: 680px
}
#nv {
	TEXT-ALIGN: left; TEXT-INDENT: 117px; MARGIN: 0px 0px 4px; FONT-SIZE: 16px
}
#nv A {
	FONT-SIZE: 14px
}
#nv B {
	FONT-SIZE: 14px
}
.btn {
	FONT-SIZE: 14px
}
#lk {
	FONT-SIZE: 14px
}
#fm {
	TEXT-ALIGN: left; PADDING-LEFT: 90px
}
#kw {
	BORDER-BOTTOM: #cdcdcd 1px solid; BORDER-LEFT: #9a9a9a 1px solid; PADDING-BOTTOM: 2px; PADDING-LEFT: 7px; WIDTH: auto; PADDING-RIGHT: 7px; FONT: 16px arial; BACKGROUND: url(/include/images/i-1.0.0.png) no-repeat -304px 0px; HEIGHT: auto; VERTICAL-ALIGN: top; BORDER-TOP: #9a9a9a 1px solid; BORDER-RIGHT: #cdcdcd 1px solid; PADDING-TOP: 6px; _background-attachment: fixed
}
.btn {
	PADDING-BOTTOM: 0px; BORDER-RIGHT-WIDTH: 0px; PADDING-LEFT: 0px; WIDTH: 95px; PADDING-RIGHT: 0px; BACKGROUND: url(/include/images/i-1.0.0.png) #ddd no-repeat; BORDER-TOP-WIDTH: 0px; BORDER-BOTTOM-WIDTH: 0px; HEIGHT: 32px; BORDER-LEFT-WIDTH: 0px; CURSOR: pointer; PADDING-TOP: 2px
}
.btn_h {
	BACKGROUND-POSITION: -100px 0px
}
#kw {
	MARGIN: 0px 5px 0px 0px
}
.btn_wr {
	MARGIN: 0px 5px 0px 0px
}
.btn_wr {
	POSITION: relative; WIDTH: 97px; DISPLAY: inline-block; BACKGROUND: url(/include/images/i-1.0.0.png) no-repeat -202px 0px; HEIGHT: 34px; _top: 1px
}
#lk {
	MARGIN: 33px 0px
}
#lk SPAN {
	FONT: 14px "宋体"
}
#lm {
	HEIGHT: 60px
}
#lh {
	MARGIN: 16px 0px 5px; WORD-SPACING: 3px
}
#mCon {
	POSITION: absolute; PADDING-BOTTOM: 0px; LINE-HEIGHT: 18px; PADDING-LEFT: 0px; PADDING-RIGHT: 18px; BACKGROUND: url(/include/images/i-1.0.0.png) no-repeat right -136px; HEIGHT: 18px; TOP: 10px; CURSOR: pointer; RIGHT: 7px; PADDING-TOP: 0px
}
#mCon SPAN {
	DISPLAY: block; COLOR: #00c; CURSOR: default
}
#mCon .hw {
	CURSOR: pointer; TEXT-DECORATION: underline
}
#mMenu {
	BORDER-BOTTOM: #9a99ff 1px solid; POSITION: absolute; BORDER-LEFT: #9a99ff 1px solid; LIST-STYLE-TYPE: none; WIDTH: 56px; DISPLAY: none; BACKGROUND: #fff; BORDER-TOP: #9a99ff 1px solid; TOP: 28px; RIGHT: 7px; BORDER-RIGHT: #9a99ff 1px solid
}
#mMenu A {
	LINE-HEIGHT: 22px; TEXT-INDENT: 6px; WIDTH: 100%; DISPLAY: block; HEIGHT: 100%; TEXT-DECORATION: none
}
#mMenu A:hover {
	BACKGROUND: #d9e1f6
}
#mMenu .ln {
	LINE-HEIGHT: 1px; MARGIN: 2px; BACKGROUND: #ccf; HEIGHT: 1px; FONT-SIZE: 1px; OVERFLOW: hidden
}
#cp {
	COLOR: #77c
}
#cp A {
	COLOR: #77c
}
#sh {
	DISPLAY: none; BEHAVIOR: url(#default#homepage)
}
#user {
	POSITION: relative; DISPLAY: inline-block; COLOR: #00c; CURSOR: pointer
}
#user STRONG {
	TEXT-DECORATION: underline
}
#user UL {
	BORDER-BOTTOM: #9a99ff 1px solid; POSITION: absolute; BORDER-LEFT: #9a99ff 1px solid; WIDTH: 67px; DISPLAY: none; BACKGROUND: #fff; BORDER-TOP: #9a99ff 1px solid; TOP: 18px; RIGHT: 0px; BORDER-RIGHT: #9a99ff 1px solid
}
#user LI {
	BORDER-BOTTOM: #e6e6e6 1px solid; HEIGHT: 22px
}
#user LI A {
	TEXT-ALIGN: left; TEXT-INDENT: 10px; WIDTH: 100%; DISPLAY: block; HEIGHT: 17px; TEXT-DECORATION: none; PADDING-TOP: 5px
}
#user LI A:hover {
	BACKGROUND: #d9e1f6
}
#user LI.nl {
	BORDER-BOTTOM-STYLE: none; BORDER-RIGHT-STYLE: none; BORDER-TOP-STYLE: none; BORDER-LEFT-STYLE: none
}
</STYLE>
<script language="javascript" type="text/javascript">
function selectTag(showContent,wd,cate_id,selfObj){
	var tag = document.getElementById("tags").getElementsByTagName("a");
	var taglength = tag.length;
	for(i=0; i<taglength; i++){
		tag[i].className = "";
	}
	selfObj.className = "focu";
	
	document.f.wd.focus();
	document.f.wd.value=wd;
	document.f.s.value=cate_id;
	f.attributes[83].value=showContent;
	//document.f.action=showContent;

}
function selectTag_tieba(showContent,wd,cate_id,selfObj){
	var tag = document.getElementById("tags").getElementsByTagName("a");
	var taglength = tag.length;
	for(i=0; i<taglength; i++){
		tag[i].className = "";
	}
	selfObj.className = "focu";
	
	document.f.wd.focus();
	document.f.wd.value=wd;
	document.f.s.disabled="disabled";
	f.attributes[83].value=showContent;
	document.f.wd.name="kw";
	//document.f.action=showContent;

}
</script>
<script language="javascript" src="include/js/menu.php"></script>
<META content="MSHTML 6.00.6000.17093" name=GENERATOR></HEAD>
<BODY>
<P id=u><A 
href="skin.php" class="STYLE4">换肤</A>&nbsp;|&nbsp;<A 
href="open" class="STYLE4">登录</A></P>
<DIV id=m>
<P id=lg>&nbsp;</P>
<P align="center"><IMG src="/include/images/logo.gif" width=270 height=129 useMap=#mp></P>
<P align="center">&nbsp;</P>
<P align="center">&nbsp;</P>
<div>
  <P align="center">&nbsp;</P>
<div>
        <div align="center"><span class="f14 f14 f14 f14 f14 STYLE20"> <span class="STYLE21">网页</span>　 <a href="../image/" class="STYLE15">图片</a>　 <a href="../video/" class="STYLE15">视频</a>　 <a href="../map/" class="STYLE15">地图</a></span></div>
</div>
</div>
<P align="center">&nbsp;</P>
<P align="center">&nbsp;</P>
<DIV id=fm>

<div class="searchbox">
 <form action="./s/" method="get">
   <p align="center">
     <input align="middle" name="wd" class="wd" id="kw" value="请输入关键字搜索" onFocus="javascript:if(this.value=='请输入关键字搜索'){this.value='';this.style.color='#333'}" onBlur="javascript:if(this.value==''){this.value='请输入关键字搜索';this.style.color='#CCC'}" maxlength="1000" size="50" autocomplete="off" baidusug="1" x-webkit-speech="" style="color: rgb(204, 204, 204);">
     <input name="re" type="hidden" value="1">
     <input id="btn" class="btn" align="middle" value="搜索" type="submit">
   </p>
   </form>
</div>
<div align="center">
  <UL id=mMenu>
    <LI class=ln>
      <LI></LI>
  </UL>
</div>
</DIV>
<P align="center" id=lk><A 
href="more/">
  <?php
index_foothtml();?></A></P>
<P align="center" id=lm></P>
<P align="center"><A id=sh onMouseDown="return ns_c({'fm':'behs','tab':'homepage','pos':0})" 
onclick="this.setHomePage('<?php echo $config["url"];?>')" 
href="<?php echo $config["url"];?>">把<?php echo $config["name"];?>设为主页</A></P>
<P align="center" id=lh>&nbsp;</P>
</DIV>
<div align="center">
  <MAP name=mp>
    <AREA title="<?php echo $config["name"];?>搜索引擎"  href="../" shape=rect target=_blank coords=41,24,225,93>
  </MAP>
  </center>
  <SCRIPT src="include/background/background.js" type=text/javascript></SCRIPT>
  <SCRIPT src="include/autocomplete.r171052.js" type=text/javascript></SCRIPT>
</div>
<div id="statcode" class="STYLE3">
  <div align="center"><?php echo $config["statcode"];?>
  </div>
</div>
<div align="center">
  <script charset="gbk" src="https://www.baidu.com/js/opensug.js"></script>
</div>
</BODY></HTML>
