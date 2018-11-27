<?php
		
		###################################
		
		session_start();
		
		include 'db.php';
		include 'pledged.php';
		
 		$db_connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
		
		###################################

			//$pledge = $this->db_connection->real_escape_string($_POST['pledge']);
			//$time = $this->db_connection->real_escape_string($_POST['time']);
			
			if ($pledged) {
				echo '<script>alert("You have already pledged. Thank you.")</script>';
			} else {
			
			$pull = $db_connection->real_escape_string($_POST['pledge']);
			$pledge = ltrim($pull, '$,');
			
			if(preg_match("/^[0-9,]+$/", $pledge)) {
			$pledge = str_replace(',', '', $pledge);
			}
			
			$amounts = $db_connection->real_escape_string($_POST['rr']);
			$months = $pledge/$amounts;
			
			$whopledged = "(Username: " . $_SESSION['user_name']. ", Pledge: " . $pledge . ", Length: " . $months . ", Amount: " . $amounts . ")";
			$username = $_SESSION['user_name'] . ",";
			
			$sqlupdatepledge = "UPDATE `nloladze_userdb`.`plandata` SET pledgeddollars = (pledgeddollars + '". $pledge ."'), numberofpeople = (numberofpeople + 1),
			pledge = CONCAT(pledge, '".  $whopledged ."'),  pledgedusernames = CONCAT(pledgedusernames, '". $username ."') WHERE plan_id = '". $_SESSION['plan_id'] ."'";
			
			
			$db_connection->query($sqlupdatepledge);
			
			echo "<script>alert('Thank you for your pledge!')</script>";
			$pledged = true;
			
			}
			
			$sqlupdatepledge = "";
			$db_connection = "";
			$_POST['rr'] = "";
			$pledge = "";
			$months = "";
			$amounts = "";
			include("planview.php");
?>