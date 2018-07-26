<?php 

session_start();
		try {
		$handler = new PDO('mysql:host=localhost;dbname=convers1_userdb', 'convers1_regis', '6io89ggbv');
		$handler->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		} catch(PDOException $e) {
			echo "Sorry, there was an error.";
			die();
		}
		
		
		$query = $handler->query('SELECT * FROM plandata');
		$x = 0;
		
		//while ($x >= $query->rowCount()) {
			//$x++;
		//}
		
		
		
		if($query->rowCount()) {
			
			while($r = $query->fetch(PDO::FETCH_OBJ)) {
				

print_r( explode(',', $r->arrayplan) );
				
				
				echo '<table align="center" border="5px" bordercolor="silver"  style="border-collapse:collapse; padding-top: 20px;">
<tr>
<td>';

class foo {
	
	protected $plan = array();
	protected $value;
	
	public function __construct($plan, $value)
    {
        // Here, whatever was passed into "new Coordinate" is
        // now stored in our variables above.
        $this->_plan  = explode(",", $r->arrayplan);
        $this->_value = $value;
    }
	
	public function display()
    {
        echo $this->_plan;
        echo $this->_value;
    }
}
	
			function setuptable() {
				$plan = explode(",", $r->arrayplan);
				
			foreach($plan as $key => $value) {
				
					$i++;
					
					$this->$value;
					
	
					if ($i == 5) {
					echo checkimage($value);
					echo("</td> </tr> <tr> <td>");
					}
					else if ($i === 10) {
					echo checkimage($value);
					echo("</td> </tr> <tr> <td>");
					}
					else if ($i === 15) {
					echo checkimage($value);
					echo("</td> </tr> <tr> <td>");
					}
					else {
					echo checkimage($value);
					}
				} // end of for each loop
			
			}
			
		function checkimage($value) {
	//one through five of options
if ( $value == "television") {
   echo '<img src="../styles_styles/images/unselected/3dtv.jpg" />';
}
elseif( $value == "employee") {
	echo '<img src="../styles_styles/images/unselected/employee.jpg" class="button2" />';
}
elseif( $value == "solar" ) {
	echo '<img src="../styles_styles/images/unselected/solarpanel.jpg" class="button3" />';
}
elseif( $value == "printer" ) {
	echo '<img src="../styles_styles/images/unselected/3dprinter.jpg" class="button4" />';
}
elseif( $value == "table") {
	echo '<img src="../styles_styles/images/unselected/etable1.jpg" class="button17" />';
}
	//five through ten of options
elseif ( $value == "led") {
   echo '<img src="../styles_styles/images/unselected/ledlighting.jpg" class="button5" />';
}
elseif( $value == "coffee") {
	echo '<img src="../styles_styles/images/unselected/coffee.jpg" class="button6" />';
}
elseif( $value == "recycle") {
	echo '<img src="../styles_styles/images/unselected/plasticrecycle.jpg" id="08recycle" />';
}
elseif( $value == "rfid") {
	echo '<img src="../styles_styles/images/unselected/rfid.jpg" />';
}
elseif( $value == "cart") {
	echo '<img src="../styles_styles/images/unselected/polycart.jpg" />';
}
	//ten through fifteen of options
	//five through ten of options
elseif ( $value == "biofuel") {
   echo '<img src="../styles_styles/images/unselected/biodieseltrucks.jpg" />';
}
elseif( $value == "camera") {
	echo '<img src="../styles_styles/images/unselected/facialrecog.jpg" />';
}
elseif( $value == "segway") {
	echo '<img src="../styles_styles/images/unselected/segway.jpg" />';
}
elseif( $value == "wifi") {
	echo '<img src="../styles_styles/images/unselected/wifi.jpg" />';
}
elseif( $value == "food") {
	echo '<img src="../styles_styles/images/unselected/foodbelt.jpg" />';
}	
	//fifteen through twenty of options
	
		//five through ten of options
elseif ( $value == "game") {
   echo '<img src="../styles_styles/images/unselected/arcadegame.jpg" />';
}
elseif( $value == "website") {
	echo '<img src="../styles_styles/images/unselected/website.jpg" />';
}
elseif( $value == "kiosk") {
	echo '<img src="../styles_styles/images/unselected/kiosk.jpg" />';
}
elseif( $value == "pump") {
	echo '<img src="../styles_styles/images/unselected/fuelpump.jpg" />';
}
elseif( $value == "hvac") {
	echo '<img src="../styles_styles/images/unselected/airfilter.jpg" />';
}


}//end of checkimage function




echo "</td> </tr> </table>";
		
			} setuptable();
			

		
		} //end of while
		
		