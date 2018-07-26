<?php
session_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title></title>

	<style>
	
			.squarefeet {visibility : hidden}
			
			/* All credit goes to - http://www.facebook.com/AmrSubZero */
			select {
  background:url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' width='50px' height='50px'><polyline points='46.139,15.518 25.166,36.49 4.193,15.519'/></svg>");
  background-color:#3498DB;
  background-repeat:no-repeat;
  background-position: right 10px top 15px;
  background-size: 16px 16px;
  color:white;
  padding:12px;
  width:auto;
  font-family:arial,tahoma;
  font-size:16px;
  font-weight:bold;
  color:#fff;
  text-align:center;
  text-shadow:0 -1px 0 rgba(0, 0, 0, 0.25);
  border-radius:3px;
  -webkit-border-radius:3px;
  -webkit-appearance: none;
  border:0;
  outline:0;
  padding-top: -10px;
  -webkit-transition:0.3s ease all;
	   -moz-transition:0.3s ease all;
	    -ms-transition:0.3s ease all;
	     -o-transition:0.3s ease all;
	        transition:0.3s ease all;
}

#blue {
  background-color:#3498DB;
}

#blue:hover {
  background-color:#2980B9;
}

	</style>

<script>
			
			function necessitiesoptions() {
				
					var feetcount = window.parent.document.getElementById("mappage").contentWindow.document.getElementById("squarefeet").value;
					
			if ( fifthselection.options[fifthselection.selectedIndex].value == "gas" ) {
			document.getElementById("squarefeet2").value = feetcount;
		  	document.forms["sumbitnecessities"].submit();
	 			
				} else if (fifthselection.options[fifthselection.selectedIndex].value == "grocery" ) {
					document.getElementById("squarefeet2").value = feetcount;
		  			document.forms["sumbitnecessities"].submit();
				}
					else {
					fifthselection.options[fifthselection.selectedIndex].value == "restaurant"
					document.getElementById("squarefeet2").value = feetcount;
		  			document.forms["sumbitnecessities"].submit();
					}

		   } 
		   

</script>
</head>

<body>


<div id="4box">
 
	<form method="post" action="../index.php" name="sumbitnecessities" target="_parent">
<select id="fifthselection" onchange="necessitiesoptions();" name="biztype">
<option value="">Select Business</option>
<option title="gas" value="gas"> Gas Station </option>
<option title="grocery" value="grocery"> Grocery Store </option>
<option title="restaurant" value="restaurant"> Restaurant </option>
</select>
<input type="text" id="squarefeet2" class="squarefeet"  name="squarefeet" />
</form>
</div>



</body>
</html>
