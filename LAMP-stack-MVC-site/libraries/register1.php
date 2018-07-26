<?php

 require_once("../config/db.php");
 require_once("../classes/Registration.php");
 $registration = new Registration();

 include('../testing/chained_select/db.php');
 include('../testing/chained_select/func.php');
 
 session_start();
 
 ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Conversio Republic</title>
<link rel="stylesheet" type="text/css" href="../styles_styles/stylesheets/registrationstyle.css">
<link rel="stylesheet" type="text/css" href="../styles_styles/stylesheets/mastercss.css">

<!--

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js"></script>

<script type="text/javascript">
$(document).ready(function() {
	$('#wait_1').hide();
	$('#drop_1').change(function(){
	  $('#wait_1').show();
	  $('#result_1').hide();
      $.get("func.php", {
		func: "drop_1",
		drop_var: $('#drop_1').val()
      }, function(response){
        $('#result_1').fadeOut();
        setTimeout("finishAjax('result_1', '"+escape(response)+"')", 400);
      });
    	return false;
	});
});

function finishAjax(id, response) {
  $('#wait_1').hide();
  $('#'+id).html(unescape(response));
  $('#'+id).fadeIn();
}

function submitiframeform(){
	// var iframe;
//window.top.cityinfo.document.citynstate.submit();
document.getElementById('cityinfo').contentWindow.targetFunction(submitiframeform);
}

</script>

-->

</head>

<body>
<div id="top">
<p align="center"><img src="../styles_styles/logo.png" alt="Conversiologo" align="top" width="395" height="100"></p>
</div>

<div id="header">
</div>
<!-- register form -->

<div id="body">
<?php
// show potential errors / feedback (from registration object)
/*if (isset($registration)) {
    if ($registration->errors) {
        foreach ($registration->errors as $error) {
            echo $error;
        }
    }
    if ($registration->messages) {
        foreach ($registration->messages as $message) {
            echo $message;
        }
    }
}*/


?>

<form method="post" action="../register.php" name="registerform">
<table align="center" cellpadding="0" cellspacing="0" class="tablemargin">

	<tr>
	<td>
    <!-- the user name input field uses a HTML5 pattern check -->
    <img src="../styles_styles/Menu Buttons/Registration/username.jpg" class="no_touch" />
    <input id="login_input_username" class="login_input" type="text" pattern="[a-zA-Z0-9]{2,64}" name="user_name" required />
    </td>
    </tr>

	<tr>
	<td>
    <!-- the email input field uses a HTML5 email type check -->
    <img src="../styles_styles/Menu Buttons/Registration/email.jpg" class="no_touch" />
    <input id="login_input_email" class="login_input" type="email" name="user_email" required />
    </td>
    </tr>
    
    <tr>
	<td>
    <img src="../styles_styles/Menu Buttons/Registration/password.jpg" class="no_touch" />
    <input id="login_input_password_new" class="login_input" type="password" name="user_password_new" pattern=".{6,}" required autocomplete="off" />
	</td>
    </tr>
    
    <tr>
	<td>
    <img src="../styles_styles/Menu Buttons/Registration/repeatpassword.jpg" class="no_touch" />
    <input id="login_input_password_repeat" class="login_input" type="password" name="user_password_repeat" pattern=".{6,}" required autocomplete="off" />
    </td>
    </tr>
    </table>
    
	<div align="center">
	<select name="drop_1" id="drop_1">
    <option value="" selected="selected" disabled="disabled">Select your state</option>
    <?php getTierOne(); ?>
    </select> 
   
   <select>
   <option>
   </option>
   </select>
   
   
     <br />
 
 
 <br />
 <br />
   
    <a href="../views/index.php"><img src="../styles_styles/Menu Buttons/Registration/back.jpg" /></a>
	<input type="submit" class="register" onClick="submitiframeform();"  name="register" value="" />   
    <br />
   <font color="#FFFFFF"> By registering you agree to not share any published work on this website unless it is fair use, under punishment of civil prosecution. </font>
    </div>

</table>
</form>

</div>



<div id="footer">
<table align="right">
<tr>
<td>
Conversio Republic Copyright 2014 --- Development Version .1.8
</td>
</tr>
</table>
</div>

</body>
</html>
