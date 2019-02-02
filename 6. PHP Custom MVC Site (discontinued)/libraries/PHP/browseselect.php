<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Simple Slider Example - Jssor Slider, Slideshow</title>
    
    
    <link rel="stylesheet" type="text/css" href="../styles_styles/stylesheets/showplans.css" />
    
</head>
<body style="font-family:Arial, Verdana;background-color:#fff;">
    <!-- use jssor.slider.min.js instead for release -->
    <!-- jssor.slider.min.js = (jssor.core.js + jssor.utils.js + jssor.slider.js) -->
    <script type="text/javascript" src="../styles_styles/Jssor.Slider.FullPack/js/jssor.core.js"></script>
    <script type="text/javascript" src="../styles_styles/Jssor.Slider.FullPack/js/jssor.utils.js"></script>
    <script type="text/javascript" src="../styles_styles/Jssor.Slider.FullPack/js/jssor.slider.js"></script>
    <script>
        jssor_slider1_starter = function (containerId) {
            var options = {
                $AutoPlay: true,                                   //[Optional] Whether to auto play, to enable slideshow, this option must be set to true, default value is false
                $DragOrientation: 3                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $DisplayPieces is greater than 1, or parking position is not 0)
            };

            var jssor_slider1 = new $JssorSlider$(containerId, options);
        };
    </script>
    <!-- Jssor Slider Begin -->
    <!-- You can move inline styles to css file or css block. -->
    <!--<div id="slider1_container" style="position: relative; top: 0px; left: 0px; width: 700px; height: 500px;"> -->
        <!-- Slides Container -->
        
        <div align="center" u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 700px; height: 500px; overflow: hidden;">
           <div><img u="image" src="../img/landscape/01.jpg" /></div>
            <div> 
            <?php 


		
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
				
				//echo '<div>';
				
				  //echo '<table align="left" style="padding-bottom: 20px; padding-right: 20px;"> <tr> <td align="center">';
				  
				  
				  if ($r->biztype == "grocery") {
					  echo '<img src="../styles_styles/images/textfield/typeofstore/grocerystore.png"  /> <br />';
				  }
				  
		
				 
				  //echo '<textarea id="businessaddress" readonly="readonly">' . $r->address .' </textarea> <br />';
				 // echo '<img src="' . $r->imagelink . '" /> 
				 // </td>';
				  
				  
				  
				  echo '</td><td align="center"> <input type="text" id="businessname" value="' . $r->bizname . ',' . $r->businessaddress . '">  </input> <br />';
				  
				   echo '<img src="../styles_styles/images/textfield/planstexts/Username.jpg" />
				    <input type="text" id="totalcost" class="icon" maxlength="20" readonly value=' . $r->username .' border="0"/> <br />';
				  echo '<img src="../styles_styles/images/textfield/planstexts/squareft.jpg" />
				  <input type="text" id="totalcost" class="icon" maxlength="20" readonly value=' . $r->squarefeet .' border="0"/> <br /> ';
				  
				  echo '<img src="../styles_styles/images/textfield/planstexts/cost.jpg" />
				  <input type="text" id="totalcost" class="icon" maxlength="20" readonly value=' ."$". $r->businesscost .' border="0"/> <br /> ';
				  
				  echo '<img src="../styles_styles/images/textfield/planstexts/date.jpg" />
				  <input type="text" id="totalcost" class="icon" maxlength="20" readonly value=' . $r->date .' border="0"/> <br /> ';
				  			  
				   
				   /*echo '</td> </tr>
				   </table>
				   <table align="right" border="5px" bordercolor="silver"  style="border-collapse:collapse; margin-top: 20px; padding-left: 20px;"><tr><td>';
				   
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
					echo ("</td></tr><table>");
					}
					else {
					echo checkimage($value);
					}
					
				} // end of for each loop
				
				 
				
				//check the image for the table
		
			//echo '</td> </tr> </table>';
				  
				  //echo '</div>';
				  */
				  return;
				  
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

//*/
		
?>

</div>

           <!-- <div><img u="image" src="../img/landscape/03.jpg" /></div>
            <div><img u="image" src="../img/landscape/04.jpg" /></div>
            <div><img u="image" src="../img/landscape/05.jpg" /></div>
            <div><img u="image" src="../img/landscape/06.jpg" /></div>
            <div><img u="image" src="../img/landscape/07.jpg" /></div>
            <div><img u="image" src="../img/landscape/08.jpg" /></div> -->
        </div>
        <!-- Trigger -->
        <script>
            jssor_slider1_starter('slider1_container');
        </script>
    </div>
    <!-- Jssor Slider End -->
</body>
</html>