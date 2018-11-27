<?php

	require('Includes/Smarty.class.php');
	$smarty = new Smarty();
	
	$smarty->setTemplateDir('./Templates');
	$smarty->setCompileDir('./Compile_directory');
	$smarty->setCacheDir('./Smarty_Cache');
	$smarty->setConfigDir('./Configs');
	
	$ned = 'eat shit';

	$testing = "meow, meow";

	$smarty->assign('name', $ned);
	$smarty->assign('testing', $testing);
	$smarty->display('testview101.tpl');
	