<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Super RSS Reader | Shine Types | www.aakashweb.com</title>
<style type="text/css">
<!--
p a {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 13px;
	background-color: #F9F9F9;
	border: 1px solid #999999;
	padding-top: 5px;
	padding-right: 10px;
	padding-bottom: 5px;
	padding-left: 10px;
	margin-left: 10px;
	text-decoration: none;
	color: #006699;
	font-weight: bold;
	-moz-border-radius: 5px;
-khtml-border-radius: 5px;
-webkit-border-radius: 5px;
}
p {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 13px;
	font-weight: bold;
	color: #333333;
}
p a:hover {
	background-color: #FFFFFF;
	color: #FF0033;
}
.font13 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 13px;
	font-weight: bold;
	color: #000000;
}
-->
</style>
</head>
<body>
<div>
  <p align="center">
    <?php
$shineType = $_GET['shineType']; 
?>
    
    
    <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="400" height="300" align="middle">
      <param name="movie" value="rssreader.swf" />
      <param name="quality" value="high" />
      <param name="flashvars" value="shineType=<?php echo $shineType ?>" />
      <embed src="rssreader.swf" width="400" height="300" align="middle" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" flashvars="shineType=<?php echo $shineType ?>"></embed>
    </object>
  </p>
</div>
<p>Click the numbers below to view the relevant shine </p>
<div>
  <p>Shine Type:<a href="shine-types.php?shineType=1">1</a><a href="shine-types.php?shineType=2">2</a><a href="shine-types.php?shineType=3">3</a><a href="shine-types.php?shineType=4">4</a><a href="shine-types.php?shineType=5">5</a><a href="shine-types.php?shineType=6">6</a><a href="shine-types.php?shineType=7">7</a> </p>
</div><hr noshade="noshade" size="1px" />
<span class="font13"> <a href="http://www.aakashweb.com/super-rss-reader/" target="_blank">Super RSS Reader</a> | <a href="http://www.aakashweb.com/" target="_blank">www.aakashweb.com</a> | <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_donations&amp;business=donations@aakashweb.com&amp;item_name=Donate Aakash Web and Support it's Useful Products &amp;amount=&amp;currency_code=USD" target="_blank">Donate</a></span>
</body>
</html>
