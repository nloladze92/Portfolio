<?php
session_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Untitled Document</title>
  
<link rel="stylesheet" type="text/css" href="../styles_styles/stylesheets/showplans.css" />


</head>

<body>
		
	
    <?PHP
					    
                       try {
		$handler = new PDO('mysql:host=localhost;dbname=convers1_userdb', 'convers1_regis', '6io89ggbv');
		$handler->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		} catch(PDOException $e) {
			echo "Sorry, there was an error.";
			die();
		}
		
		
		$query = $handler->query('SELECT * FROM plandata');
		
		//while ($x >= $query->rowCount()) {
			//$x++;
		//}
		
		
		
		if($query->rowCount()) {
			
			while($r = $query->fetch(PDO::FETCH_OBJ)) {
				
				echo '<div>';
				
				  echo '<table align="left" style="padding-bottom: 20px; padding-right: 20px;"> <tr> <td align="center">';
				  
				  
				  if ($r->biztype == "grocery") {
					  echo '<img src="../styles_styles/images/textfield/typeofstore/grocerystore.png"  /> <br />';
				  }
				 
				  echo '<textarea id="businessaddress" readonly="readonly">' . $r->address .' </textarea> <br />';
				  echo '<img src="' . $r->imagelink . '" /> 
				  </td> ';
				  
				  
				  echo '<td align="center"> <input type="text" id="businessname" value="' . $r->bizname . ',' . $r->businessaddress . '">  </input> <br />';
				  
				   echo '<img src="../styles_styles/images/textfield/planstexts/Username.jpg" />
				    <input type="text" id="totalcost" class="icon" maxlength="20" readonly value=' . $r->username .' border="0"/> <br />';
				  echo '<img src="../styles_styles/images/textfield/planstexts/squareft.jpg" />
				  <input type="text" id="totalcost" class="icon" maxlength="20" readonly value=' . $r->squarefeet .' border="0"/> <br /> ';
				  
				  echo '<img src="../styles_styles/images/textfield/planstexts/cost.jpg" />
				  <input type="text" id="totalcost" class="icon" maxlength="20" readonly value=' ."$". $r->businesscost .' border="0"/> <br /> ';
				  
				  echo '<img src="../styles_styles/images/textfield/planstexts/date.jpg" />
				  <input type="text" id="totalcost" class="icon" maxlength="20" readonly value=' . $r->date .' border="0"/> <br /> ';
				  			  
				   
				   echo '</td> </tr>
				   </table> <table align="right" border="5px" bordercolor="silver"  style="border-collapse:collapse; margin-top: 20px; padding-left: 20px;"><tr><td>';
				   
					$plan = explode(",", $r->arrayplan);
					
					$i = 0;

					foreach($plan as $key => $value) {
				    $length = count($plan);
					$i++;
					
					global $value;
					
					if ( ($i == 5) && ($i != $length) ) {
					echo checkimage($value);
					echo("</td></tr><tr><td>");
					}
					else if ($i == 10  && ($i != $length) ) {
					echo checkimage($value);
					echo("</td></tr><tr><td>");
					}
					else if ($i == 15  && ($i != $length) ) {
					echo checkimage($value);
					echo("</td></tr><tr><td>");
					}
					else if ($i == $length) {
					echo checkimage($value);
					echo ("</td></tr></table>");
					}
					else {
					echo checkimage($value);
					}
					
				} // end of for each loop
				
				  
				  echo '</div>';
				 // return;
				  
			} // end of while loop
			
			
			
		} //end of if statement
		else {
			echo 'No plans have been made.'	;
		}
		
		
		function checkimage($value) {
			
	//one through five of options
if ( $value == "television") {
    return '<img src="../styles_styles/images/unselected/3dtv.jpg" />';
}
elseif( $value == "employee") {
	return '<img src="../styles_styles/images/unselected/employee.jpg" />';
}
elseif( $value == "solar" ) {
	return '<img src="../styles_styles/images/unselected/solarpanel.jpg" />';
}
elseif( $value == "printer" ) {
	return '<img src="../styles_styles/images/unselected/3dprinter.jpg" />';
}
elseif( $value == "table") {
	return '<img src="../styles_styles/images/unselected/etable1.jpg" />';
}
	//five through ten of options
elseif ( $value == "led") {
   return '<img src="../styles_styles/images/unselected/ledlighting.jpg" />';
}
elseif( $value == "coffee") {
	return '<img src="../styles_styles/images/unselected/coffee.jpg" />';
}
elseif( $value == "recycle") {
	return '<img src="../styles_styles/images/unselected/plasticrecycle.jpg"/>';
}
elseif( $value == "rfid") {
	return '<img src="../styles_styles/images/unselected/rfid.jpg" />';
}
elseif( $value == "cart") {
	return '<img src="../styles_styles/images/unselected/polycart.jpg" />';
}
	//ten through fifteen of options
	//five through ten of options
elseif ( $value == "biofuel") {
   return '<img src="../styles_styles/images/unselected/biodieseltrucks.jpg" />';
}
elseif( $value == "camera") {
	return '<img src="../styles_styles/images/unselected/facialrecog.jpg" />';
}
elseif( $value == "segway") {
	return '<img src="../styles_styles/images/unselected/segway.jpg" />';
}
elseif( $value == "wifi") {
	return '<img src="../styles_styles/images/unselected/wifi.jpg" />';
}
elseif( $value == "food") {
	return '<img src="../styles_styles/images/unselected/foodbelt.jpg" />';
}	
	//fifteen through twenty of options
	
		//five through ten of options
elseif ( $value == "game") {
   return'<img src="../styles_styles/images/unselected/arcadegame.jpg" />';
}
elseif( $value == "website") {
	return '<img src="../styles_styles/images/unselected/website.jpg" />';
}
elseif( $value == "kiosk") {
	return '<img src="../styles_styles/images/unselected/kiosk.jpg" />';
}
elseif( $value == "pump") {
	return '<img src="../styles_styles/images/unselected/fuelpump.jpg" />';
}
elseif( $value == "hvac") {
	return '<img src="../styles_styles/images/unselected/airfilter.jpg" />';
}

//end of twenty options
}
	
		
		
		/*
		
		class Outputdata {
			public $plan_id, $username, $date, $address, $biztype, $squarefeet, $businessaddress, $arrayplan, $businesscost, $imagelink;
			
			public function __construct() {
				$query = $handler->query('SELECT * FROM plandata');
			}
		}
		
		
		$query->setFetchMode(PDO::FETCH_CLASS, 'Outputdata');
		
		while($r = $query->fetchALL()) {
			
			echo '<pre>',print_r($r), '</pre>';
			
			echo explode(",", $r);
			
			echo $handler->lastInsertId();
			
		}
		*/
		
		/*$con = mysql_connect("localhost","convers1_regis","6io89ggbv");	
		if (!$con) {
  		die('Could not connect: ' . mysql_error());
		}
		
		mysql_select_db("convers1_userdb", $con);
		
		$result = mysql_query("select count(1) FROM plandata");
		
		$row = mysql_fetch_array($result);

		$total = $row[0];
		
		
		for ($x=1; $x <= $total; $x++) {
  	$value = mysql_query("SELECT * FROM `plandata` WHERE 2");
	
	$count = mysql_fetch_row($value);

	$valcount = implode(",", $count);
		
	echo $valcount;
		
		
		
		} 

		mysql_close($con);*/
?>

 
</body>
</html>