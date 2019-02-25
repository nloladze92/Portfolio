	<?php


	require_once '../../../Includes/Smarty_initialization.php';
	
	$smarty = new Smarty_inital;
	
class Contacts{
  var $id   = 1;
  var $name = 'wiwit';
  var $email = 'wsiswoutomo at yahoo dot com';
  var $phone = '123456789';
}

$contact = new Contacts;


$smarty->assign('contact',$contact);
$smarty->display('plans.tpl');

?>