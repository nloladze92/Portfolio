<?php 
session_start();

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Spend Vow</title>
<link rel="stylesheet" type="text/css" href="../styles_styles/stylesheets/mapstyle.css">
<link rel="stylesheet" type="text/css" href="../stylesheets/menu_animation.css">
<link rel="stylesheet" type="text/css" href="../stylesheets/MasterClass.css">


			<script>
	alert("Search for a grocery store or gas station or restaurant in the search box. Type in the business name and then find it on Google Maps. Then click around the building to measure the square feet and select what kind of business it is to the right of it in the select menu. Reload the page if you have to or are having issues.");
	</script>


</head>

<body onload="refreshpage();">

<div id="top">
	<div class="icon-menu"> Menu </div>
	<img src="../styles_styles/logo.png" alt="Conversiologo" align="top" class="logo">
<!-- menu animation-->
<div class="menu">
      <!-- Menu icon -->
      <div class="icon-close">
      <button type="button" class="burgerbutton"></button>
      </div>
      <!-- Menu -->
      <ul>
        <li><a href="index.php?deleteaddress">Go Back</a></li>
        <li><a href="../server/Smarty/demo/planview.php" id="push">Browse Plans</a></li>
        <li><a href="mailto:admin@spendvow.com">Contact</a></li>
        <li><a href="../index.php?logout" class="signedinfont">Logout</a></li>
      </ul>
    </div>
 </div>


<div id="body">
<br />
<br />


<table id="MainIndexTable" align="center"> 
<tr>
<td align="center" >
<iframe src="../libraries/mappage.php" id="mappage" name="mappage1" width="700" height="440" onload="loaded()" runat="server">
 <p>iframes are not supported by your browser.</p>
</iframe>
</td>


<td>
<iframe src="../libraries/CaseSelect_BusinessType_MainIndex.php" width="160" height="460" frameborder="0" align="middle" application="">
 <p>iframes are not supported by your browser.</p>
</iframe>
</td>

</tr>
</table>
</div>

<!--
<div id="footer">
<table align="right">
<tr>
<td>
Spend Vow -- Copyright 2017 --- Alpha Version 0.6
</td>
</tr>
</table>
</div>
-->

<script src="../scripts/required/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="../scripts/menu_animation.js"></script>


</body>
</html>