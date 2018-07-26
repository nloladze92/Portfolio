<?php 

			include('connect.php');
				
			$query = $handler->query('SELECT * FROM `users` WHERE `user_id` = 1;');
			// Check if user location matches the IP address
			while($r = $query->fetch(PDO::FETCH_OBJ)) {
				if ($user_ip == $r->user_city) {
					$ipvalue = true;
					} else {
					$ipvalue = false;
				}
			}