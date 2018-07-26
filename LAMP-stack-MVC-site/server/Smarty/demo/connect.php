<?php
	
				try {
				$handler = new PDO('mysql:host=localhost;dbname=nloladze_userdb', 'nloladze_regis', '6io89ggbv');
				$handler->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				} catch(PDOException $e) {
				echo "Sorry, there was an error.";
				die();
				}