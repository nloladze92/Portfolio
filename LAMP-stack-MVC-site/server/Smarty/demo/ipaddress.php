<?php
		require('abbrev.php');
		include_once('ipinfo.php');

		
		session_start();
		
		
		// Retrieve user IP address and write it out in standard City, State Abbrev format
		$ip = $_SERVER['REMOTE_ADDR'];
		$ipinfo = new ipinfo($ip);

			$name = $ipinfo->fetch()->region;
			$user_state = convert_state($name);
			$user_ip = $ipinfo->fetch()->city . ", " . $user_state;
			
			//print_r($ipinfo->fetch()->region);
			//print_r($ipinfo->fetch()->city);

			$_SESSION['user_ip'] = $user_ip;
			
			//echo $user_ip;
			
			
			//echo $details;
			//$ipinfo = new ipinfo($ip);
			//print_r($ipinfo->fetch());
			//print_r($ipinfo->fetch()->city);

			
			
  
			/*
			$details = json_decode(file_get_contents("http://ipinfo.io/{$ip}/json"));
			$name = $details->region;
			$user_state = convert_state($name);
			$user_ip = $details->city . ", " . $user_state;
			
			*/
			
			
			
			