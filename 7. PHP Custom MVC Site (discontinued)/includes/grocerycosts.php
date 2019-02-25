<?php

session_start();

	$markers = array();
            $parts = explode(",", $_SESSION['merged']);
			 $parts = array_chunk($parts,2);
			for ($x=0; count($parts) >= $x; $x++) {
 			 array_push($markers, $parts[$x]);
			};
            
			//2-17-17 Updated this so as not to output a string
            $imagelink = "http://maps.googleapis.com/maps/api/staticmap?&key=AIzaSyAxjYFln6fKYLajslI8aUggxrEUCuZV-Jo &center=" . $_SESSION['location'] . "&size=150x150&zoom=" . $_SESSION['zoom'] . "&maptype=hybrid&path=color:0x000000ff|weight:2|fillcolor:0xC8D9F265|enc:" . $_SESSION['shapeofpoly'] . "&scale=2&markers=size:tiny|". var_dump(implode(",", $markers));

	$_SESSION['imagelink'] = $imagelink;
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="viewport" http-equiv="Content-Type" content="width=device-width, initial-scale=1, text/html; charset=UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Pledge Your Budget</title>

<link rel="stylesheet" type="text/css" href="../styles_styles/stylesheets/coststyle.css" />
<link rel="stylesheet" type="text/css" href="../styles_styles/stylesheets/pictures.css" />
<link rel="stylesheet" type="text/css" href="../styles_styles/stylesheets/mastercss.css" />
<link rel="stylesheet" type="text/css" href="../styles_styles/stylesheets/sliderstyle.css" />
<link rel="stylesheet" type="text/css" href="https://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css"> 
<link rel="stylesheet" type="text/css" href="../stylesheets/menu_animation.css">

 <style>
   .onetable {border-collapse:collapse; table-layout:fixed;}
    .forcewrap {border:solid 1px #fab; width: 90px; word-wrap:break-word;}
	</style>
    
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script type="text/javascript" src="../scripts/menu_animation.js"></script>
        <script src="https://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
		<script src="https://code.jquery.com/ui/1.10.4/jquery-ui.min.js"></script>
<script>
	alert("Simply click the submit button to submit your plan. This page is only an example of how many other people would be needed to pledge the same amount as you to make the plan work.");
	</script>
</head>

<body>

<div id="top">

<div class="icon-menu"> Menu </div>

	<img src="../styles_styles/logo.png" alt="Conversiologo" align="top" class="logo">


<!-- menu animation-->
<div class="menu">
      
      <!-- Menu icon -->
      <div class="icon-close">
      <button type="button" class="burgerbutton"></button>
      </div>

      <!-- Menu -->
      <ul>
        <li><a href="index.php?deletetype">Go Back</a></li>
        <li><a href="../server/Smarty/demo/planview.php">Browse Plans</a></li>
        <li><a href="mailto:admin@spendvow.com">Contact</a></li>
        <li><a href="../index.php?logout" >Logout</a></li>
      </ul>
    </div>
    
 </div>
 
 
<div id="body">

<!-- MAIN TABLE -->
<table>

<!-- SECTION ONE -->
<tr>
<td style="padding-right: 20px;">


<!-- SECTION ONE -- TABLE ONE: THE COSTS AND SQUARE FEET -->
<table align="center" border="0" width="474">
<tr>
<td align="center">
  <img src="../styles_styles/images/textfield/squareft.png" id="tcost" align="middle">
	<input type="text" id="num1" class="icon2" maxlength="20" readonly value="<?php echo $_SESSION['squarefeet']; ?>" border="0"/>
</td>
</tr>
<tr>
<td align="center">
  <img src="../styles_styles/images/textfield/textfield.png" id="tcost" align="middle" />
	<input type="text" id="num1" class="icon2" maxlength="20" readonly value="<?php echo "$".number_format($_SESSION['businesscost'],2); ?>" border="0"/>
</td>
</tr>
<tr>
<td align="center">
  <img src="../styles_styles/images/textfield/SpendVowFee.png" id="tcost" align="middle" />
	<input type="text" id="num1" class="icon2" maxlength="20" readonly value="<?php echo "$".number_format(($_SESSION['businesscost'] / 10)); ?>" border="0"/>
</td>
</tr>
</table>
<!-- END OF TABLE ONE: THE COSTS AND SQUARE FEET -->



<!-- SECTION ONE -- TABLE TWO: THE USER SELECTED OPTIONS -->
<table align="center" border="5px" bordercolor="silver"  style="border-collapse:collapse; padding-top: 20px;">
<tr>
<td>
<?php
$plan = $_SESSION['arrayplan'];
$arraylength = count($_SESSION['arrayplan']);
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
					
}


// check the image for the table
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

//recycle dump
elseif( $value == "recycledump") {
	return '<img src="../styles_styles/images/unselected/recycledump.jpg"/>';
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
	return '<img src="../styles_styles/images/selected/facialrecog.jpg" />';
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
}//end of twenty options


}

?>
<!-- SECTION ONE -- END OF TABLE TWO: THE USER SELECTED OPTIONS -->
</td>
<!-- END OF SECTION ONE -->

<!-- SECTION TWO -->
<td style="padding-right: 20px;" align="center">

<!-- SECTION TWO -- TABLE ONE: THE PLEDGE TABLE -->
<table align="center">
<tr>
<td>
<div id="vintage">
	<h1 id="BusinessTitleFont"><?php echo $_SESSION['bizname'];?></h1>
</div>
</td>
</tr>

<tr>
<td bgcolor="#FFFFFF">

          <div class="price-slider">
            <h4 class="great">Dollars</h4>
            <font class="numberfont">How much would you spend here a month?</font>
            <div class="col-sm-12">
              <div id="slider"></div>
            </div>
          </div>
          <div class="price-slider">
            <h4 class="great">Months</h4>
            <font class="numberfont">How many months would you spend here?</font>
            <div class="col-sm-12">
              <div id="slider2"></div>
            </div>
          </div>
          
          </td>
      </tr>
      <tr>
      <td bgcolor="#FFFFFF">
      <br />
      		<div class="price-form">
            <div class="form-group">
              <label for="amount" class="col-sm-6 control-label"><font class="numberfont"> Dollars: </font></label>
                <input type="hidden" id="amount" class="form-control" name="amount">
                <div class="col-sm-6">
                <p class="price lead" id="amount-label"></p>
                </div>
           </div>
           </div>
       </td>
      </tr>
      <tr>
      <td bgcolor="#FFFFFF">
      <div class="price-form">
      <div class="form-group">
              <label for="duration" class="col-sm-6 control-label"><font class="numberfont"> Months: </font></label>
               <input type="hidden" id="duration" class="form-control" name="length">
              <div class="col-sm-6">
                <p class="price lead" id="duration-label"></p>
                </div>
                </div>
                </div>
            </td>
      </tr>
</table>
<!-- SECTION TWO -- END OF TABLE ONE: THE PLEDGE TABLE -->

<!-- END OF SECTION TWO -->
</td>

<!-- SECTION THREE -->
<td style="margin-right:30px;">
<!-- SECTION THREE -- TABLE ONE: THE IMAGE -->
		<table>
        <tr>
          <td align="center">
           <img id="imagelink" style="margin-bottom: 10px; margin-top: 17px;" src="http://maps.googleapis.com/maps/api/staticmap?&key=AIzaSyAxjYFln6fKYLajslI8aUggxrEUCuZV-Jo&center=<?php echo $_SESSION['location']; ?>&size=150x150&zoom=<?php echo $_SESSION['zoom']; ?>&maptype=hybrid&path=color:0x000000ff|weight:2|fillcolor:0xC8D9F265|enc:<?php echo $_SESSION['shapeofpoly']; ?>&scale=2&markers=size:tiny|
		   <?php
		   $parts = explode(",", $_SESSION['merged']);
		  $parts = array_chunk($parts,2);
			for ($x=0; count($parts) >= $x; $x++) {
 			 echo implode(",",$parts[$x])."|";;
			} 
			?>"  />
           
          </td>
          </tr>
          
          <!-- SECTION THREE -- TABLE ONE: THE OTHER PLEDGE TABLE DETAILS -->
          
		<tr>
		<td bgcolor="#FFFFFF">
      <div class="price-form">
      <div class="form-group">
			<label for="people" class="col-sm-6 control-label">People:</label>
                <input type="hidden" id="people" class="form-control">
                <div class="col-sm-6">
                <p class="price lead" id="people-label"></p>
                </div>
                </div>
                </div>
              </td>
              </tr>
              <tr>
              <td bgcolor="#FFFFFF">
      <div class="price-form">
      <div class="form-group">
              <label for="total" class="col-sm-6 control-label"><strong>Total: </strong></label>
              <input type="hidden" id="total" class="form-control" name="total">
              <div class="col-sm-6">
              <p class="price lead" id="total-label"></p>
              </div>
              </div>
              </div>
          </td>
          </tr>
        
          </table>
          
          <!-- SECTION THREE -- END OF TABLE ONE: THE OTHER PLEDGE DETAILS AND IMAGE -->
          
        </form>
        
        <!-- END OF MAIN TABLE -->
		</td>
		</tr>
		</table>
        


<form action="../index.php" method="post">
<p align="center" style="margin-top: 20px;">
<input type="submit" name="finalplan" id="submit" value="" />
</p>
</form>


 </div>
 <!--
 
<table id="footer">
<tr>
<td align="right">
Conversio Republic -- Copyright 2014 --- Development  Version .1.8
</td>
</tr>
</table>

-->
        
       <!-- <script src="https://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script> -->
    

    <script>
	
		var imagelink = document.getElementById("imagelink").src;
		var TotalCost = parseInt(<?php echo $_SESSION['businesscost']?>, 10);
		//var imagelink = document.getElementById("imagelink").src;
		
      $(document).ready(function() {
          $("#slider").slider({
              animate: true,
              value: 0,
              min: 0,
              max: 60,
              step: 2,
              slide: function(event, ui) {
                  update(1,ui.value); //changed
              }
          });

          $("#slider2").slider({
              animate: true,
              value: 1,
              min: 1,
              max: 6,
              step: 1,
              slide: function(event, ui) {
                  update(2,ui.value); //changed
              }
          });

          //Added, set initial value.
          $("#amount").val(1);
          $("#duration").val(1);
		  $("#people").val(1);
          $("#amount-label").text(1);
          $("#duration-label").text(1);
          $("#people-label").text(1);
          
          update();
      });

      //changed. now with parameter
      function update(slider,val) {
        //changed. Now, directly take value from ui.value. if not set (initial, will use current value.)
        var $amount = slider == 1?val:$("#amount").val();
        var $duration = slider == 2?val:$("#duration").val();

        /* commented
        $amount = $( "#slider" ).slider( "value" );
        $duration = $( "#slider2" ).slider( "value" );
         */
		 
		 //values needed to set people and duration
		 
		 		 $.post('grocerycosts.php',
		{imagelink: imagelink}
		 );
		 
		 
         $total = "$" + ($amount * $duration);
		 $people = parseInt(TotalCost / ($amount * $duration));
         $( "#amount" ).val($amount);
         $( "#amount-label" ).text($amount);
         $( "#duration" ).val($duration);
         $( "#duration-label" ).text($duration);
         $( "#total" ).val($total);
         $( "#total-label" ).text($total);
		 $( "#people" ).val($people);
         $( "#people-label" ).text($people);

         $('#slider a').html('<label><span class="glyphicon glyphicon-chevron-left"></span> '+$amount+' <span class="glyphicon glyphicon-chevron-right"></span></label>');
         $('#slider2 a').html('<label><span class="glyphicon glyphicon-chevron-left"></span> '+$duration+' <span class="glyphicon glyphicon-chevron-right"></span></label>');
		 
		 
      }  
	  
	
    </script>

</body>
</html>