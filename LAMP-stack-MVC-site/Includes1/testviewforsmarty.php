<?php

	require_once 'Smarty_initialization.php';
	
	//$smarty = new Smarty_inital;
	
	$test = 'this is a test';
	
	// setup smarty here 
	$smarty = new Smarty(); 
	$smarty->template_dir = "/Templates"; 
	
	$smarty->assign('test', $test);

// use your template filename, and be sure to put the "/" in there 
// if your template_dir does not have a trailing "/" 
	$myfile = $smarty->template_dir . "/testview.tpl"; 
	echo "attempting to read $myfile\n"; 
	readfile($myfile); 
	
	
	//$smarty->display('testview.tpl');