<?php 

			include('connect.php');
			
			session_start();
			
				
			$query = $handler->query("SELECT * FROM `users` WHERE `user_name` = '" . $_SESSION['user_name'] . "'");
			
			// Check if user location matches the IP address
			while($r = $query->fetch(PDO::FETCH_OBJ)) {
				$_SESSION['userip'] = $r->user_city;
				if ($_SESSION['user_ip'] == $r->user_city) {
					$ipvalue = true;
					} else {
					$ipvalue = false;
				}
			}
			