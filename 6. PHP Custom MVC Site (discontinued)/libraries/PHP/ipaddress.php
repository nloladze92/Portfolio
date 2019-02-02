<?php
		require('abbrev.php');
		
		session_start();
		
		
		// Retrieve user IP address and write it out in standard City, State Abbrev format
		$ip = $_SERVER['REMOTE_ADDR'];
			$details = json_decode(file_get_contents("http://ipinfo.io/{$ip}"));
			$name = $details->region;
			$user_state = convert_state($name);
			$user_ip = $details->city . ", " . $user_state;
			
			$_SESSION['user_ip'] = $user_ip;

		
			

			
			
			