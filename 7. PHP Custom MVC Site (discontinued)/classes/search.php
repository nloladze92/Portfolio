<?

	class Form
	{
		
		 public $messages = array();
		 public $errors = array();
		
	public function __construct()
    {
	 session_start();
	 
	 if (isset($_GET["deleteaddress"])) {
            $this->goback();
        }
	 
	 if (isset($_POST["address"]) ) 
	 {
            $this->searchuseraddress();
	 } //when search form is inputed or sent from indexbar form, 
	 //execute the function to make a session variable out of the 'address' id form
	}
		
		
		// end of construct function
	private function searchuseraddress()
    {	
	
		if (empty($_POST['address'])) {
            $this->errors[] = "Empty Address";
			echo '<script type="text/javascript">alert("The address field was empty.");</script>'; 
        } else {
			
			
			$this->db_connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
			$address = $this->db_connection->real_escape_string(strip_tags($_POST['address'], ENT_QUOTES));
			
			$address2 = str_ireplace('\\', '', $address);

			$checkaddress = "SELECT * FROM `convers1_userdb`.`plandata` WHERE `address` = '" . $address2 . "'";
			
			$check_name = $this->db_connection->query($checkaddress);
			
			 if ($check_name->num_rows == 1) {
				 $this->errors[] = "That business already has a plan on the site. Click on the Browse Plans tab above to find the plan. Think of another business (grocery store, restaurant or gas station) instead.";
				echo '<script type="text/javascript">alert("That business already has a plan on the site. Click on the Browse Plans tab above to find the plan. Think of another business (grocery store, coffee shop or gas station) instead.");</script>';	
			 } else {
				 $_SESSION['value'] = 2;
	 		 $_SESSION['address'] = $address2;	
			 }
		  }
	 } // End of searchuseraddress function
	 
	 
	 
	 
	 
	 
		public function goback()
    {
        // delete the address searched by the user
		$_SESSION['value'] = 1;
        $_SESSION['address'] = '';
		$_SESSION['biztype'] = '';
    }
		
	} // End of class Form
	
