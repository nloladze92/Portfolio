<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="viewport" content="initial-scale=1">
<title>Spend Vow</title>

<link rel="stylesheet" type="text/css" href="../stylesheets/MasterClass.css" />

<style>

.width {
	width: 700px;
	margin-left: 200px;
}

</style>

<script>
alert("Search either a restaurant, grocery store or gas station business name in your local area.");
</script>

<link rel="stylesheet" type="text/css" href="../styles_styles/stylesheets/loggedincss.css">
<link rel="stylesheet" type="text/css" href="../stylesheets/menu_animation.css">


<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDtgwfglX9GPydTouRWMTID5OAFrV7zgy4&sensor=false&libraries=places"></script>
<script type="text/javascript" src="../styles_styles/indexbar.js"></script>



</head>

<body onload="initialize()">

<div id="top">
	<div class="icon-menu"> Menu </div>
	<img src="../styles_styles/logo.png" alt="spendvowlogo" align="top" class="logo">
<!-- menu animation-->
<div class="menu">
      <!-- Menu icon -->
      <div class="icon-close">
      <button type="button" class="burgerbutton"></button>
      </div>
      <!-- Menu -->
      <ul>
        <li><a href="../server/Smarty/demo/planview.php" id="push">Browse Plans</a></li>
        <li><a href="mailto:admin@spendvow.com">Contact</a></li>
        <li><a href="../index.php?logout" class="signedinfont">Logout</a></li>
      </ul>
    </div>
 </div>

    <!-- Main body -->
<div id="body">
<form method="post" action="../index.php" id='sumbitsearch'>
<!--
<p align="center">
<img src="../images/search.png"  />
</p>
-->

<p align="center"> 
<br />
<br />
<br />
<br />
<br />
<input type="text" id="autocomplete" class="search" onFocus="geolocate()" onselect="searchplace();" maxlength="45" placeholder="Search a business that you eat or get gas at," name="address"/>
</p>
 
</form>
<p align="center">
<br />
<br />
<br />
</p>

<br />
<br />


</div>


<script src="../scripts/required/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="../scripts/menu_animation.js"></script>



</body>
</html>