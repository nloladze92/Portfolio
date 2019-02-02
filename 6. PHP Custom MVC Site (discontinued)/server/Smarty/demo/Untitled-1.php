<?php

		$_SESSION['user_ip'];
		$_SESSION['user_registrant'];
		
		$recent = $handler->query('SELECT * FROM plandata WHERE `businessaddress` = "'. $_SESSION['user_registrant'] .'" ORDER BY `date` DESC LIMIT 25');
		$lowprice = $handler->query('SELECT * FROM WHERE `businessaddress` = "'. $_SESSION['user_registrant'] .'" plandata ORDER BY businesscost');
		$highprice = $handler->query('SELECT * FROM WHERE `businessaddress` = "'. $_SESSION['user_registrant'] .'" plandata ORDER BY businesscost DESC LIMIT 25');
		$dollarspledged = $handler->query('SELECT * FROM `plandata` WHERE `businessaddress` = "'. $_SESSION['user_registrant'] .'" ORDER BY `pledgeddollars` DESC LIMIT 25');
		$numberofpeople = $handler->query('SELECT * FROM `plandata` WHERE `businessaddress` = "'. $_SESSION['user_registrant'] .'" ORDER BY `numberofpeople` DESC LIMIT 25');