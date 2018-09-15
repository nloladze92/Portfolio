<?php
session_start();


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Selection</title>

<link rel="stylesheet" type="text/css" href="../styles_styles/stylesheets/selectionsideframe.css" />

<script type="text/javascript" src="businesstypeselect.js"></script>

<script>
	document.getElementById("caesar").selectedIndex = -1;

</script>

<style>
.opacity {
	margin: 0px;
    padding: 0px;
    background-color: rgba(0,0,0,0.0);
}

</style>

</head>

<body class="opacity" onload="begin()">


<div align="center">

<form id="caesar">
  <font color="#CCCCCC">What sort of business is this?</font>
  <select id="firstselection"  onchange="firstoption()">
  <option value=""></option>
  <option value="government"> Government Entity</option>
  <option value="business"> Business </option>
  <option value="other"> Other </option> 
</select>
</form>


<!-- box 1 -->
<div id="1box">
<p> 
<font color="#CCCCCC">Does this business <b>own</b> the building or <b>share</b> the space <br /> with other businesses such as a plaza or a building with mutliple stories? </font>

<form>
<select id="secondselection" onchange="secondoption()">
<option value=""></option>
<option value="own"> Own </option>
<option value="share"> Share </option>
<option value="dk"> Don't Know </option>
</select>
</form>
</p>
</div>

<!-- box 2 -->
<div id="2box">
<p><font color="#CCCCCC">What sort of service or product does this business provide? </font>
	<form>
  <select id="thirdselection" onchange="thirdoption()">
  	<option value=""></option>
    <option value="entertainment"> Entertainment</option>
    <option value="necessities"> Necessities  </option>
    <option value="dining"> Dining-out  </option>
  </select>
  </form>
  </p></div>
  
  
<!-- box 3 -->
<div id="3box">
  <font color="#CCCCCC"> What sort of entertainment business is this? </font>
	<form>
<select id="fourthselection" onchange="entertainmentoptions();">
<option value=""></option>
<option value="bar"> Bar </option>
<option value="club"> Club </option>
<option value="hotel"> Hotel</option>
<option value="movie"> Movie Theater </option>
</select>
	</form>
</div>

<!-- box 4 -->
<div id="4box">
  <font color="#CCCCCC"> What sort of necessities business is this? </font>
	<form method="post" action="../index.php" name="sumbitnecessities" target="_parent">
<select id="fifthselection" onchange="necessitiesoptions();" name="biztype">
<option value=""></option>
<option title="gas" value="gas"> Gas Station </option>
<option title="grocery" value="grocery"> Grocery Store </option>
</select>
<input type="text" id="squarefeet2" class="squarefeet"  name="squarefeet" />
</form>
</div>



<!-- box 5 -->
<div id="5box">
  <font color="#CCCCCC"> What sort of dining-out business is this? </font>
  	<form method="post" action="../index.php" name="sumbitdining" target="_parent">
<select id="sixthselection" onchange="diningoptions();" name="biztype">
<option value=""></option>
<option value="fastfood"> Fast Food </option>
<option value="restaurant"> Restaurant </option>
</select>
<input type="text" id="squarefeet3" class="squarefeet"  name="squarefeet" />
	</form>
</div>
</p>

</div>

<!--
<script src="https://code.jquery.com/ui/1.10.4/jquery-ui.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

<script>
function helper() {

$(document).ready(function() {
	
var feetcount = window.parent.document.getElementById("mappage").contentWindow.document.getElementById("squarefeet").value;

var biztype = document.getElementsByName("biztype").value;

window.alert(biztype);

$.post('../index.php',
		{squarefeet: feetcount,
		biztype: biztype}
		 ); 
});
}
</script>

-->

</body>
</html>
