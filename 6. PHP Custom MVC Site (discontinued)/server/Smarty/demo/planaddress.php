<?php
		
	include('connect.php');
	
	session_start();
				
				// Check the if the user city matches 
				$query = $handler->query("SELECT * FROM `plandata` WHERE `plan_id` = '" . $_SESSION['plan_id'] . "'");
				
					//if ($ipvalue) {
						while($r = $query->fetch(PDO::FETCH_OBJ)) {
							if ($user_ip == $r->businessaddress) {
								$user = true;
							} else {
								$user = false;
							}
							$hanlder = null;
						}
					//}
					