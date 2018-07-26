<?php
$_SESSION['value'] = 1;
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Thank You!</title>
<link rel="stylesheet" type="text/css" href="../styles_styles/stylesheets/mastercss.css">
<link rel="stylesheet" type="text/css" href="../stylesheets/menu_animation.css">

</head>

<body>

<div id="top">
	<img src="../styles_styles/logo.png" alt="Spend_Vow_Logo" align="top" class="logo">

</div>

<div id="header">
<table align="left" class="gobackfont" border="0"><a href="../server/Smarty/demo/planview.php"><img src="../images/gobackbutton.png" id="logoutitem" width="120" height="30" />
</a></td></tr></table>
<!-- if you need user information, just put them into the $_SESSION variable and output them here -->
<table align="right" class="signedinfont" border="0"><tr><td><a href="index.php?logout">Logout</a></td></tr></table>
<!-- because people were asking: "index.php?logout" is just my simplified form of "index.php?logout=true" -->
</div>


<div id="body" align="center">

<iframe width="640" height="360" src="//www.youtube.com/embed/dFFn1hu6azg?rel=0&autoplay=1" frameborder="0" allowfullscreen></iframe>
<br />
<br />


</div>

<!--

<div id="footer">
<table align="right">
<tr>
<td>
<font color="#FFFFFF">Conversio Republic -- Copyright 2014 --- Development Version .1.8</font>
</td>
</tr>
</table>
</div>

-->

</body>
</html>