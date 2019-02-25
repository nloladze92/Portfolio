<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Conversio Republic</title>
<link rel="stylesheet" type="text/css" href="../styles_styles/stylesheets/registrationstyle.css">

<body background="../styles_styles/backgrounds/pledgebackgrounds/blacksolid.jpg">
<div id="top">
<p align="center"><img src="../styles_styles/logo.png" alt="Conversiologo" align="top"></p>
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

<form method="post" action="register.php" name="registerform">
<table align="center" cellpadding="0" cellspacing="0" class="tablemargin">

	<tr>
	<td align="center">
    <font class="registerfont"> Minimum of two characters, only A-Z and numbers are allowed </font> <br /><br />
    <!-- the user name input field uses a HTML5 pattern check -->
    <img src="../styles_styles/Menu Buttons/Registration/username.jpg" class="no_touch" />
    <input id="login_input_username" class="login_input" type="text" pattern="[a-zA-Z0-9]{2,64}" name="user_name" required />
    </td>
    </tr>

	<tr>
	<td align="center">
    <!-- the email input field uses a HTML5 email type check -->
    <font class="registerfont"> Must look like a valid email, example@exmaple.com, max length of 64 characters</font> <br /><br />
    <img src="../styles_styles/Menu Buttons/Registration/email.jpg" class="no_touch" />
    <input id="login_input_email" class="login_input" type="email" name="user_email" required />
    </td>
    </tr>
    
    <tr>
	<td align="center">
    <br />
    <font class="registerfont"> Minimum of 6 characters </font> <br /><br />
    <img src="../styles_styles/Menu Buttons/Registration/password.jpg" class="no_touch" />
    <input id="login_input_password_new" class="login_input" type="password" name="user_password_new" pattern=".{6,}" required autocomplete="off" />
	</td>
    </tr>
    
    <tr>
	<td align="center">
    <img src="../styles_styles/Menu Buttons/Registration/repeatpassword.jpg" class="no_touch" />
    <input id="login_input_password_repeat" class="login_input" type="password" name="user_password_repeat" pattern=".{6,}" required autocomplete="off" />
    </td>
    </tr>
    </table>
    <!--
    
    <script type="text/javascript"
   src="https://www.google.com/recaptcha/api/challenge?k=6Lf6UfoSAAAAAN7vGkedVPAf8M_Z89_sgRvrfoC6">
 </script>
 <noscript>
   <iframe src="https://www.google.com/recaptcha/api/noscript?k=6Lf6UfoSAAAAAN7vGkedVPAf8M_Z89_sgRvrfoC6"
       height="300" width="500" frameborder="0"></iframe><br>
 </noscript>
 
 <br />
 -->
 <br />
   <table align="center" height="57px">
   <tr>
   <td align="center">
    <a href="index.php"><img src="../styles_styles/Menu Buttons/Registration/back.jpg" /></a>
    </td>
    <td align="center">
	<input type="submit" class="register"  name="register" value="" />
    </td>
    </tr>
    </table>
    <div align="center">
    <br />
   <font color="#FFFFFF"> As soon as you register, you'll be redirected to the home page. </font>
    </div>

</table>
</form>

</div>


</body>
</html>
