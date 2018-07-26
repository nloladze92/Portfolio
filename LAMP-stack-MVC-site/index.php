<?php

// checking for minimum PHP version
if (version_compare(PHP_VERSION, '5.3.7', '<')) {
    exit("Sorry, Simple PHP Login does not run on a PHP version smaller than 5.3.7 !");
} else if (version_compare(PHP_VERSION, '5.5.0', '<')) {
    // if you are using PHP 5.3 or PHP 5.4 you have to include the password_api_compatibility_library.php
    // (this library adds the PHP 5.5 password hashing functions to older versions of PHP)
    require_once("libraries/password_compatibility_library.php");
}

require_once("config/db.php");
require_once("classes/Registration.php");
require_once("classes/Login.php");
require_once("classes/search.php");
require_once("classes/plans.php");
require_once("classes/plancost.php");
require_once("classes/finalgroceryplan.php");
require_once("classes/template.php");

$register = new Registration();
$login = new Login();
$address = new Form();
$biztype = new Plan();
$location = new Plan();
$businesscost = new Plancost();
$finalplan = new Finalgroceryplan();

switch ($_SESSION['value']) {
  case 1:
    include("views/logged_in.php");
    break;
  case 2:
   include("views/search.php");
    break;
  case 3:
   include("includes/gas_station.php");
    break;
	case 4:
   include("includes/grocery.php");
    break;
	case 5:
   include("includes/restaurant.php");
    break;
	case 6:
   include("includes/grocerycosts.php");
    break;
	/*
	case 9:
   include("/server/Smarty/demo/planview.php");
 	break;
	*/
  default:
   include("views/homepage.html");
}