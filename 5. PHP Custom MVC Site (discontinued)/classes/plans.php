<?

	class Plan {
		
		 /**
     * @var array Collection of error messages
     */
    public $errors = array();
 
    
    	public function __construct() {
	 	
		session_start();
		
		 if (isset($_GET["deletetype"])) {
            $this->goback();
        }
	 
	 	if (isset($_POST["biztype"])) {
		 	$this->businesstype();
		 }

	}
	
	
	
		private function businesstype()
    {	
	
	if( empty($_POST['squarefeet']) ) { 
	$this->errors[] = "You need to measure the outside of the building.";
			echo '<script type="text/javascript">alert("You need to measure the outside of the building.");</script>'; 
	} else {
	
	$this->db_connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
	$biztype = $this->db_connection->real_escape_string($_POST['biztype']);
	$squarefeet = $this->db_connection->real_escape_string($_POST['squarefeet']);
	
	//$location = $this->db_connection->real_escape_string($_POST['location']);
	//$zoom = $this->db_connection->real_escape_string($_POST['zoom']);
	
	$_SESSION['biztype'] = $biztype;
	
	if ($biztype == "gas" ) {
		$_SESSION['value'] = 3;
	}
	else if ($biztype == "grocery") {
		$_SESSION['value'] = 4;
	}
	else if ($biztype == "restaurant") {
		$_SESSION['value'] = 5;
	}
	
	//$_SESSION['location'] = $location;
	//$_SESSION['zoom'] = $zoom;
	
	//this is to remove the sq.ft that comes after the square feet value on the map page box
	$feetvalue = explode("sq", $squarefeet);
	$squareft = array_shift($feetvalue);
	
	$_SESSION['squarefeet'] = $squareft;
	
		
	}
	}
	
		public function goback()
    {
        // delete the address searched by the user
		$_SESSION['value'] = 1;
        $_SESSION['biztype'] = '';
		$_SESSION['squarefeet'] = '';
		$_SESSION['location'] = '';
		$_SESSION['zoom'] = '';
		
    }
	
	
	}