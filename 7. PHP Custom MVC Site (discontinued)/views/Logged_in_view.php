<?php


		require '../Includes/Smarty_initialization.php';
		require '../Libraries/PHP/Smarty_scripts/Footer_header_template.php';
		
		
		$username = '<p class="signedinfont">Hey, <?php echo ' . $_SESSION['user_name']; ' ?>. Thanks for signing in. <a href="index.php?logout">Logout</a></p>
		<br />
		</div>';
		
		$login_body = '<div id="body">
					   <br />
					   <br />
 					   <br />
<br />
<br />
<form method="post" action="../index.php" id="sumbitsearch">

<p align="center"> 
<input type="text" id="autocomplete" class="search" onFocus="geolocate()" onselect="searchplace();" maxlength="45" placeholder="Type the name of a LOCAL business" name="address"/>
</p>
 
</form>
<p align="center">
<font class="belowsearchbar">*Only works for restaurants, coffee shops and grocery stores*
<br />
<br />
How does this <a href="HTML/How_Does_Conversio_Work.html">work?</a>
<br />
<br />
What is <a href="HTML/What_is_Conversio_Supposed_to_do.html">this?</a>
</font>
<br />
<br />
<font size="+1" face="Georgia, Times New Roman, Times, serif" color="#FF0000">
Error: There are known issues with Internet Explorer. I apologize for these issues. Please use Chrome or Safari for best results. </font>
</p>

<br />
<br />


</div>';
		
		$smarty->assign('username', $username);
		$smarty->assign('login_body', $login_body);
		
		
		$smarty->display('Logged_in_view.tpl');
	   
?>