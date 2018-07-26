<?php

		######## This displays the pledged or not username ########
		include('connect.php');
		
		$query = $handler->query("SELECT * FROM plandata WHERE `plan_id` = '" . $_SESSION['plan_id'] . "'");
			
		while($r = $query->fetch(PDO::FETCH_OBJ)) {
			
			$username = explode(",", $r->pledgedusernames);
			
			foreach($username as $key => $value) {
				if ($value == $_SESSION['user_name']) {
					$pledged = true;
				}
			}
			$hanlder = null;
		}
