// JavaScript Document
<!--
var arrCSS=[
    ["<img src='include/background/skin/1.jpg' width='160' height='80' class='themes' alt='background'>","include/background/1.css"],
    ["<img src='include/background/skin/8.jpg' width='160' height='80' class='themes' alt='background'>","include/background/2.css"],
    ["<img src='include/background/skin/3.jpg' width='160' height='80' class='themes' alt='background'>","include/background/3.css"],
    ["<img src='include/background/skin/4.jpg' width='160' height='80' class='themes' alt='background'>","include/background/4.css"],
    ["<img src='include/background/skin/5.jpg' width='160' height='80' class='themes' alt='background'>","include/background/5.css"],
	["<img src='include/background/skin/6.jpg' width='160' height='80' class='themes' alt='background'>","include/background/6.css"],
    ["<img src='include/background/skin/7.jpg' width='160' height='80' class='themes' alt='background'>","include/background/7.css"],
    ["<img src='include/background/skin/9.jpg' width='160' height='80' class='themes' alt='background'>","include/background/9.css"],
    ["<img src='include/background/skin/10.jpg' width='160' height='80' class='themes' alt='background'>","include/background/10.css"],
    ["<img src='include/background/skin/11.jpg' width='160' height='80' class='themes' alt='background'>","include/background/11.css"],
	["<img src='include/background/skin/12.jpg' width='160' height='80' class='themes' alt='background'>","include/background/12.css"],
    ["<img src='include/background/skin/13.jpg' width='160' height='80' class='themes' alt='background'>","include/background/13.css"],
    ["<img src='include/background/skin/14.jpg' width='160' height='80' class='themes' alt='background'>","include/background/14.css"],
    ["<img src='include/background/skin/15.jpg' width='160' height='80' class='themes' alt='background'>","include/background/15.css"],
	["<img src='include/background/skin/16.jpg' width='160' height='80' class='themes' alt='background'>","include/background/16.css"],
	["<img src='include/background/skin/17.jpg' width='160' height='80' class='themes' alt='background'>","include/background/17.css"],
    ["<img src='include/background/skin/18.jpg' width='160' height='80' class='themes' alt='background'>","include/background/18.css"],
    ["<img src='include/background/skin/19.jpg' width='160' height='80' class='themes' alt='background'>","include/background/19.css"],
    ["<img src='include/background/skin/20.jpg' width='160' height='80' class='themes' alt='background'>","include/background/20.css"],
	["<img src='include/background/skin/2.jpg' width='160' height='80'   class='themes' alt='background'>","include/background/21.css"],
	["<img src='include/background/skin/22.jpg' width='160' height='80'   class='themes' alt='background'>","include/background/22.css"],
    ""
	];
// *** function to replace href="/" ***
function v(){
	return;
}
// *** Cookies ***
function writeCookie(name, value) { 
	exp = new Date(); 
	exp.setTime(exp.getTime() + (86400 * 1000 * 30));
	document.cookie = name + "=" + escape(value) + "; expires=" + exp.toGMTString() + "; path=/"; 
} 
function readCookie(name) { 
	var search; 
	search = name + "="; 
	offset = document.cookie.indexOf(search); 
	if (offset != -1) { 
		offset += search.length; 
		end = document.cookie.indexOf(";", offset); 
		if (end == -1){
			end = document.cookie.length;
		}
		return unescape(document.cookie.substring(offset, end)); 
	}else{
		return "";
	}
}
////////////////////////////////////
// StyleSheet
////////////////////////////////////
function writeCSS(){
  for(var i=0;i<arrCSS.length;i++){
    document.write('<link title="css'+i+'" href="'+arrCSS[i][1]+'" rel="stylesheet" disabled="true" type="text/css" />');
  }
    setStyleSheet(readCookie("stylesheet"));
}
function writeCSSLinks(){
  for(var i=0;i<arrCSS.length-1;i++){
    if(i>0) document.write('  ');
    document.write('<a href="javascript:v(/)" onclick="setStyleSheet(\'css'+i+'\')">'+arrCSS[i][0]+'</a>');
  }
}
function setStyleSheet(strCSS){
  var objs=document.getElementsByTagName("link");
  var intFound=0;
  for(var i=0;i<objs.length;i++){
    if(objs[i].type.indexOf("css")>-1&&objs[i].title){
      objs[i].disabled = true;
      if(objs[i].title==strCSS) intFound=i;
    }
  }
  objs[intFound].disabled = false;
  writeCookie("stylesheet",objs[intFound].title);
}
writeCSS();
setStyleSheet(readCookie("stylesheet"));
// 隐藏显示换肤框
function ShowHideDiv(init) {
	if(document.getElementById("Sright").style.display == "block"){
		 document.getElementById("Sright").style.display = "none";
  }
  else{
  	document.getElementById("Sright").style.display = "block";
  }
}
//-->
