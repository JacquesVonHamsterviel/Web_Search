<title>网页收录信息-Google</title>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
<meta http-equiv="refresh" content="15">
</head>
      <?php
      require_once("global.php");
      $dh_config=$db->get_one("select * from ve123_dh_siteconfig limit 1");
      ?>
      <?php 
      echo "网站收录信息："."<br>";
	  $row=$db->get_one("select count(site_id) as num from ve123_sites");
	  echo "已收录网站:".$row["num"]."<br>";
	  $row=$db->get_one("select count(link_id) as num from ve123_links where title<>''");
	  echo "已收录网页:".$row["num"]."<br>";  
	  ?>
	  <span id="DateTime"></span>&nbsp;&nbsp;
	  <script> 
       setInterval("DateTime.innerHTML=new Date().toLocaleString()+' 星期'+'日一二三四五六'.charAt(new Date().getDay());",1000);
      </script>