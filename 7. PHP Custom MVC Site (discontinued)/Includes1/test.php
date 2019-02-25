<?php


error_reporting(E_ALL); 

// include test extension 
require('Smarty_initialization.php'); 

// do this instead of $smarty = new Smarty(); 
// if you have your own extension, then have it 
// extend Smarty_Test() instead of Smarty() 
$smarty = new Smarty_inital(); 

// setup your smarty directories, then execute: 
$smarty->test(); 
exit();
