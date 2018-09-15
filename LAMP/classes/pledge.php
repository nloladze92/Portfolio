<?php


	class Pledge {
		
		 public $messages = array();
		 public $errors = array();
	
		public function __construct() {
			session_start();
			
	if (isset($_POST['rr'])) {
            $this->setup_pledge();
        }
		
		}
		
		private function setup_pledge() {
			
			$this->db_connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
			
			if ($pledged) {
				echo '<script>alert("You have already pledged. Thank you.")</script>';
			} else {
			
			$pull = $this->db_connection->real_escape_string($_POST['pledge']);
			$pledge = ltrim($pull, '$,');
			
			if(preg_match("/^[0-9,]+$/", $pledge)) {
			$pledge = str_replace(',', '', $pledge);
			}
			
			$amounts = $this->db_connection->real_escape_string($_POST['rr']);
			$months = $pledge/$amounts;
			
			$whopledged = "(Username: " . $_SESSION['user_name']. ", Pledge: " . $pledge . ", Length: " . $months . ", Amount: " . $amounts . ")";
			$username = $_SESSION['user_name'] . ",";
			
			$sqlupdatepledge = "UPDATE `convers1_userdb`.`plandata` SET pledgeddollars = (pledgeddollars + '". $pledge ."'), numberofpeople = (numberofpeople + 1),
			pledge = CONCAT(pledge, '".  $whopledged ."'),  pledgedusernames = '". $username ."' WHERE plan_id = '". $_SESSION['plan_id'] ."'";
			
			
			$this->db_connection->query($sqlupdatepledge);
			
			//$echo = 'Thank you for your pledge! You have pledged "' . $amounts . "' for '" . $months . "'. Stay tuned for updates on the website.)";
			
			}
			
			echo "<script>alert('Thank you for your pledge!')</script>";
			
			$sqlupdatepledge = "";
			$db_connection = "";
			$_POST['rr'] = "";
			$pledged = true;
			$pledge = "";
			$months = "";
			$amounts = "";
			
			header("Location: http://www.conversiorepublic.com/server/Smarty/demo/planview.php");
			die();
			
		}
		
}

?>