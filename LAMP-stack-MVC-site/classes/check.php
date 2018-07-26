<?php

function checklogin($user_name) {
try {
		$handler = new PDO('mysql:host=localhost;dbname=nloladze_userdb', 'nloladze_regis', '6io89ggbv');
		$handler->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		} catch(PDOException $e) {
			echo "Sorry, there was an error.";
			die();
		}
		
		$query = $handler->query("SELECT * FROM `nloladze_userdb`.`users` WHERE user_name = '" . $user_name . "' OR user_email = '" . $user_name . "'");
		
		while($r = $query->fetch(PDO::FETCH_OBJ)) {
					
					$loginattempts = $r->loginattempts;
					//now check the login attempts
					if ($loginattempts >= 3) {
						$duration = (5 * 60);
						$unlocktime = time() + $duration;
					
					$check = false;
					} else {
					$check = true;
					}
			return $array = array($check, $loginattempts);
		}
		
}
	
		
		

?>