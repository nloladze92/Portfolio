<?php

		session_start();
		//$_POST['select'] = "recent";
		
		require '../libs/Smarty.class.php';
		require 'ipaddress.php';
		include('connect.php');
		
	   $smarty = new Smarty;
	   $smarty->setTemplateDir('./newtemp')
       ->setCompileDir('./templates_c')
       ->setCacheDir('./cache');
		
		
		$length = array();
		
		if($_POST['select'] == "area") {
			$input = "SELECT * FROM plandata WHERE businessaddress = '". $_SESSION['user_ip'] . "' LIMIT 25";
			$desc = false;
			$donotshowtable = false;
		} else {
		
			$input = 'SELECT * FROM plandata ORDER BY `date` DESC LIMIT 25';
			$desc = true;
			$donotshowtable = false;
		}
		
		
		
		$query = $handler->query($input);
		
		if (!($query->rowCount()) && $desc) {
		$text = "<br /><br /> Sorry, there are no plans up on the site yet. Be the first one to make a plan!";
		$donotshowtable = true;
		
		} elseif (!($query->rowCount()) && !$desc) {
		$text = "<br /><br />Sorry, there are no plans from where you are browsing from.";
		$donotshowtable = true;

		
		} else {
			
			$text = "";
		
		while($r = $query->fetch(PDO::FETCH_OBJ)) {
						
			$map = '<img src="' . $r->imagelink . '" id="map" width="100%" class="map" height="146px" style="vertical-align: top;" />';
			$businessname = $r->bizname;
			$businesstype = ucfirst($r->biztype);
			$businesscost = $r->businesscost;
			$address = $r->address;
			$businessaddress = $r->businessaddress;
			$date = $r->date;
			$link = $r->plan_id;
			
			$tr = '</tr><tr>';
			
				
			$array = explode(",", $address);
			$final = strval($array[1]);
			
			$values = array ($map, $businessname, $businesstype, $businesscost, $final, $businessaddress, $date, $link);
			
			array_push($length, $values);
		
		}
		
		}
		
		$smarty->assign('length', $length);
		$smarty->assign('tr', $tr);
		$smarty->assign('dnst', $donotshowtable);
		$smarty->assign('text', $text);
		
	    $smarty->display('plans.tpl');


	?>