<?

	class Plancost {
		public $pathlist = array();
		
		 /**
     * @var array Collection of error messages
     */
    public $errors = array();

    
    	public function __construct() {
	 	
		session_start();
		
		 if (isset($_GET["deletecost"])) {
            $this-> gobacktocosts();
        }
	 
	 	if (isset($_POST["submitplan"])) {
		 	$this-> businesscosts();
		 }

	}
	
	
	
		private function businesscosts()
    {	
	
	if ( empty($_POST['selectedimages']) ) {
		$this->errors[] = "Password field was empty.";
			echo '<script type="text/javascript">alert("You have to select at least one focus.");</script>'; 
	} else {
	
	$this->db_connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
	
	$businesscost = $this->db_connection->real_escape_string($_POST['businesscost']);
	$list = $this->db_connection->real_escape_string($_POST['selectedimages']);
	
	$_SESSION['value'] = 6;
	
	$arrayvariable = array();
	
	$optionselected = explode(",", $list);
	
	foreach ($optionselected as $value) {
    if ($value !== "") {
		array_push($arrayvariable, $value);
		
	}
}

	
	$_SESSION['businesscost'] = $businesscost;
	$_SESSION['arrayplan'] = $arrayvariable;
		
	}
	}
	
		public function gobacktocosts()
    {
        // delete the address searched by the user
		$_SESSION['value'] = 4;
		$_SESSION['businesscost'] = '';
		$_SESSION['arrayplan'] = '';
    }
	
	
	}