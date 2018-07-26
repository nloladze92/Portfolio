<?php
session_start();

$_SESSION['imagelink'] = $_POST['imagelink'];
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
<!-- the slider design -->
<link rel="stylesheet" type="text/css" href="../styles_styles/stylesheets/sliderstyle.css" />
<!-- design of the elements of the document? -->
<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

 <style>
   .onetable {border-collapse:collapse; table-layout:fixed;}
    .forcewrap {border:solid 1px #fab; width: 90px; word-wrap:break-word;}
	</style>

<script>
	alert("Simply click the submit button to submit your plan. This page is only an example of how many other people would be needed to pledge the same amount as you to make the plan work.");
	</script>
    
</head>

<body>

<div id="top">
<p align="center"><img src="../styles_styles/logo.png" alt="Conversiologo" align="top" width="395" height="100"></p>
</div>

<div id="header">
<table align="left" class="gobackfont" border="0"><a href="index.php?deletepledge">&#8592; Go Back</a>
| <a href="../libraries/howdoes.html">Tutorial</a>
| <a href="../libraries/whythis.html">What is Conversio Republic?</a>
</td></tr></table>
<table align="right" class="signedinfont" border="0"><tr><td><a href="index.php?logout">Logout</a></td></tr></table>
</div>


<div id="body">


<!-- MAIN TABLE -->
<table>

<!-- SECTION ONE -->
<tr>
<td style="padding-right: 20px;">






<!-- TABLE ONE: THE COSTS AND SQUARE FEET -->
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
  <img src="../styles_styles/images/textfield/conversiocut.png" id="tcost" align="middle" />
	<input type="text" id="num1" class="icon2" maxlength="20" readonly value="<?php echo "$".number_format(($_SESSION['businesscost'] / 3)); ?>" border="0"/>
</td>
</tr>
</table>
<!-- END OF TABLE ONE: THE COSTS AND SQUARE FEET -->







<!-- TABLE TWO: THE USER SELECTED OPTIONS -->
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

<!-- END OF TABLE TWO: THE USER SELECTED OPTIONS -->
</td>
<!-- END OF SECTION ONE -->





<!-- SECTION TWO -->
<td style="padding-right: 20px;">


<table align="center">
<tr>
<td>
<div id="vintage">
	<h1><?php echo $_SESSION['bizname'];?></h1>
</div>
</td>
</tr>

<tr>
<td>
<form class="form-horizontal form-pricing" role="form">

          <div class="price-slider">
            <h4 class="great">Amount</h4>
            <font class="numberfont">Minimum of $10 Required</font>
            <div class="col-sm-12">
              <div id="slider"></div>
            </div>
          </div>
          <div class="price-slider">
            <h4 class="great">Duration</h4>
            <font class="numberfont">Minimum of One Month Required</font>
            <div class="col-sm-12">
              <div id="slider2"></div>
            </div>
          </div>
          
          </td>
      </tr>
      <tr>
      <td>
      <br />
      		<div class="price-form">
            <div class="form-group">
              <label for="amount" class="col-sm-6 control-label"><font class="numberfont"> Amount: </font></label>
                <input type="hidden" id="amount" class="form-control">
                <div class="col-sm-6">
                <p class="price lead" id="amount-label"></p>
                </div>
           </div>
           </div>
       </td>
      </tr>
      <tr>
      <td>
      <div class="price-form">
      <div class="form-group">
              <label for="duration" class="col-sm-6 control-label"><font class="numberfont"> Months: </font></label>
               <input type="hidden" id="duration" class="form-control">
              <div class="col-sm-6">
                <p class="price lead" id="duration-label"></p>
                </div>
                </div>
                </div>
            </td>
      </tr>
</table>

<!-- END OF SECTION TWO -->
</td>

<!-- SECTION THREE -->
<td style="margin-right:30px;">
		<table>
        <tr>
          <td align="center">
           <img id="imagelink" style="margin-bottom: 10px; margin-top: 17px;" src="http://maps.googleapis.com/maps/api/staticmap?&center=<?php echo $_SESSION['location']; ?>&size=150x150&zoom=<?php echo $_SESSION['zoom']; ?>&maptype=hybrid&path=color:0x000000ff|weight:2|fillcolor:0xC8D9F265|enc:<?php echo $_SESSION['shapeofpoly']; ?>&scale=2&markers=size:tiny|
		   <?php
		   $parts = explode(",", $_SESSION['merged']);
		  $parts = array_chunk($parts,2);
			for ($x=0; count($parts) >= $x; $x++) {
 			 echo implode(",",$parts[$x])."|";;
			} 
			?>"  />
            

          
          	<!--
            
             <img src="http://maps.googleapis.com/maps/api/staticmap?&location=40.818447,-96.712818&size=150x150&zoom=15&maptype=hybrid&path=color:0x000000ff|weight:2|fillcolor:0xC8D9F265|enc:sjcxFhbhmQe@p@G~@Ib@Rd@t@FnAY|@}@l@wA@g@w@Q]M}@&scale=2&markers=size:tiny|%20%20%2040.81850241645912,-96.71220660209656|40.81834814746012,-96.71202421188354|40.818104564099706,-96.7119812965393|40.817779784894434,-96.71192765235901|40.81760115565376,-96.7120349407196|40.8174062868426,-96.7123031616211|40.81737380865178,-96.7127001285553|40.81750372131973,-96.71301126480103|40.81781226288651,-96.71323657035828|40.81825071422328,-96.71324729919434|40.81844558055386,-96.71296834945679|40.818543013504474,-96.71281814575195|40.818" />
             
	http://maps.googleapis.com/maps/api/staticmap?center=Williamsburg,Brooklyn,NY&zoom=13&size=400x400&
markers=color:blue%7Clabel:S%7C11211%7C11206%7C11222

http://maps.googleapis.com/maps/api/staticmap?size=480x480&markers=
icon:http://chart.apis.google.com/chart?chst=d_map_pin_icon%26chld=cafe%257C996600%7C
224+West+20th+Street+NY%7C75+9th+Ave+NY%7C700+E+9th+St+NY
	-->
          </td>
          </tr>
		<tr>
		<td>
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
              <td>
      <div class="price-form">
      <div class="form-group">
              <label for="total" class="col-sm-6 control-label"><strong>Total: </strong></label>
              <input type="hidden" id="total" class="form-control">
              <div class="col-sm-6">
              <p class="price lead" id="total-label"></p>
              </div>
              </div>
              </div>
          </td>
          </tr>
        
          </table>
          
  
        </form>
        
        <script type="text/javascript">
    	var people = parseInt(<?php echo $_SESSION['businesscost']?>, 10);
		</script>
        
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.10.4/jquery-ui.min.js"></script>
    <script src="https://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    

    <script>
      $(document).ready(function() {
          $("#slider").slider({
              range: "min",
              animate: true,
              value:10,
              min: 10,
              max: 200,
              step: 5,
              slide: function(event, ui) {
                update(1,ui.value); //changed
              }
          });

          $("#slider2").slider({
              range: "min",
              animate: true,
              value:1,
              min: 1,
              max: 36,
              step: 1,
              slide: function(event, ui) {
                update(2,ui.value); //changed
              }
          });

          //Added, set initial value.
          $("#amount").val(10);
          $("#duration").val(1);
		  $("#people").val(0);
		  $("#people-label").text(0);
          $("#amount-label").text(0);
          $("#duration-label").text(0);
		  
          
          update();
      });

      //changed. now with parameter
      function update(slider,val) {
        //changed. Now, directly take value from ui.value. if not set (initial, will use current value.)
        var $amount = slider == 1?val:$("#amount").val();
        var $duration = slider == 2?val:$("#duration").val();
		
		var dividetotal = Number($amount * $duration);
		var people = Number(<?php echo $_SESSION['businesscost']?>);
		
		var peoplenum = parseInt(people / dividetotal);
		var imagelink = document.getElementById("imagelink").src;
		
		 $.post('grocerycosts.php',
		{imagelink: imagelink}
		 );
		 
		 $("#people").val(peoplenum);
		 $("#people-label").text(peoplenum);

        /* commented
        $amount = $( "#slider" ).slider( "value" );
        $duration = $( "#slider2" ).slider( "value" );
         */
         $total = "$" + ($amount * $duration);
		 
         $( "#amount" ).val($amount);
         $( "#amount-label" ).text($amount);
		 
         $( "#duration" ).val($duration);
         $( "#duration-label" ).text($duration);
		 
         $( "#total" ).val($total);
         $( "#total-label" ).text($total);

         $('#slider a').html('<label><span class="glyphicon glyphicon-chevron-left"></span> '+$amount+' <span class="glyphicon glyphicon-chevron-right"></span></label>');
         $('#slider2 a').html('<label><span class="glyphicon glyphicon-chevron-left"></span> '+$duration+' <span class="glyphicon glyphicon-chevron-right"></span></label>');
	
      }
	  
	  function people(dividetotal) {
		  var people = Number(<?php echo $_SESSION['businesscost']?>);
		  var peoplenum = (people / dividetotal);
		  
		 $("#people").val(peoplenum);
		 $("#people-label").text(peoplenum);
	  }
    </script>

<!-- END OF MAIN TABLE -->
</td>
</tr>
</table>

<form action="../index.php" method="post">
<p align="center" style="margin-top: 20px;">
<input type="submit" name="finalplan" id="submit" value="" />
</p>
</form>

<p align="center">
<font size="-1" face="Georgia, Times New Roman, Times, serif" color="#FF0000">
Error: The image will not show the boundries correctly, this is being worked on. Just ignore it for now and move on. Thank you.</font>
</p>
 
 
 
 </div>
 
<div id="footer">
<table align="right">
<tr>
<td>
Conversio Republic -- Copyright 2014 --- Development  Version .1.8
</td>
</tr>
</table>
</div>







</body>
</html>