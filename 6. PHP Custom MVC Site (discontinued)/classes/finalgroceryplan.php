<?PHP


		class Finalgroceryplan {
			
		public $errors = array();
		
		private $db_connection = null;
 
    
    	public function __construct() {
	 	
		session_start();
		
		 if (isset($_GET["deletepledge"])) {
            $this-> deletepledge();
        }
		
		if (isset($_GET["finishplan"])) {
            $this-> finishplan();
        }
		
		
		 if (isset($_POST["finalplan"])) {
            $this-> finalplan();
        }
		
		
		}
		
		
		
		private function finalplan()
    {	
	
	$this->db_connection = new mysqli("localhost", "nloladze_regis", "6io89ggbv", "nloladze_userdb");

		 if (!$this->db_connection->connect_errno) {
		
		 $username = $_SESSION['user_name'];
		 $address = (string) $_SESSION['address'];
		 $date = date("Y-m-d");
		 $bizname = (string) $_SESSION['bizname'];
		 $biztype = $_SESSION['biztype'];
		 $squarefeet = $_SESSION['squarefeet'];
		 $businessaddress = explode(',', $_SESSION['businessaddress']);
		 $arrayplan = implode(",", $_SESSION['arrayplan']);
		 $businesscost = $_SESSION['businesscost'];
		 $imagelink = $_SESSION['imagelink'];
		 
		 
		 if ( count($businessaddress) >= 4) {
			  array_shift($businessaddress);
			  array_pop($businessaddress);
			 $bizaddress = implode(",", $businessaddress);
			 $str = ltrim ($bizaddress, ' ');
		 } else {
			 array_pop($businessaddress);
			 $bizaddress = implode(",", $businessaddress);
			 $str = ltrim ($bizaddress, ' ');
		 }
		 
	
	$sql="INSERT INTO `plandata` (username, date, address, bizname, biztype, squarefeet, businessaddress, arrayplan, businesscost, imagelink) 
             VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
			 
			 
			 
			 if ($stmt = $this->db_connection->prepare($sql)) 
			 {
   			$stmt->bind_param("sssssissis", $username, $date, $address, $bizname, $biztype, $squarefeet, $str, $arrayplan, $businesscost, $imagelink);
   			$stmt->execute();           
   			$stmt->close();
			
			$this->messages[] = "Your plan has been created successfully. You can now click on the top left and select browse plans to see your plan and pledge to it. Others in the local area can pledge to it as well. With blockchain technology finally reaching a decent stage, Ohni can finally begin to have a real impact.";
			echo '<script type="text/javascript">alert("Your plan has been created successfully. You can now click on the top left and select browse plans to see your plan and pledge to it. Others in the local area can pledge to it as well. With blockchain technology finally reaching a decent stage, Ohni can finally begin to have a real impact.");</script>';
			
			$_SESSION['value'] = 1;
			} else {
				$this->errors[] = "Some kind of error occurred, sorry about that. Try again later.";
			echo '<script type="text/javascript">alert("Some kind of error occurred, sorry about that. Try again later.");</script>';
			}
														 
		 
	} else {
		$this->errors[] = "Connection error. Please try again later.
		If problems persist, please contact support.";
		echo '<script type="text/javascript">alert("Connection error. Please try again later.
		If problems persist, please contact support.");</script>';
	}
	
	$this->db_connection->close();
	
	}

	 
	 
		public function deletepledge()
    {
		if ($_SESSION['biztype'] == "gas" ) {
		$_SESSION['value'] = 3;
	} else if ($_SESSION['biztype'] == "grocery") {
		$_SESSION['value'] = 4;
	} else if ($_SESSION['biztype'] == "restaurant") {
		$_SESSION['value'] = 5;
	}
	
	}
	
	
	public function finishplan()
    {
		$_SESSION['user_name'] = '';
		$_SESSION['address'] = '';
		$_SESSION['bizname'] = '';
		$_SESSION['biztype'] = '';
		$_SESSION['squarefeet'] = '';
		$_SESSION['businessaddress'] = '';
		$_SESSION['arrayplan'] = '';
		$_SESSION['businesscost'] = '';
		$_SESSION['imagelink'] = '';
		$_SESSION['value'] = 1;
		
	}
				
		
		}
