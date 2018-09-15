<?php

		session_start();
		
		
		require '../Smarty_libs/Smarty.class.php';
		//include('connect.php');
		
	   $smarty = new Smarty;
	   $smarty->setTemplateDir(SMARTY_DIR . './Templates')
       ->setCompileDir(SMARTY_DIR . './Compile_directory')
       ->setCacheDir(SMARTY_DIR . './Smarty_cache');
		
		
		$length = array();
		
		
		
		$query = $handler->query('SELECT * FROM plandata');
		
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
		
		
		$smarty->assign('length', $length);
		$smarty->assign('tr', $tr);
		
	    $smarty->display('plans.tpl');


	?>