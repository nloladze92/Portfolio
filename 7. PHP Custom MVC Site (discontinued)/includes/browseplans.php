<?php 
  try {
		$handler = new PDO('mysql:host=localhost;dbname=convers1_userdb', 'convers1_regis', '6io89ggbv');
		$handler->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		} catch(PDOException $e) {
			echo "Sorry, there was an error.";
			die();
		}
		
		$query = $handler->query('SELECT * FROM plandata');

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Conversio Republic</title>
<link rel="stylesheet" type="text/css" href="../styles_styles/stylesheets/mapstyle.css">
<link rel="stylesheet" type="text/css" href="../styles_styles/stylesheets/mastercss.css">

<link rel="stylesheet" type="text/css" href="../styles_styles/stylesheets/showplans.css" />



<style>
        /* jssor slider bullet navigator skin 21 css */
        /*
            .jssorb21 div           (normal)
            .jssorb21 div:hover     (normal mouseover)
            .jssorb21 .av           (active)
            .jssorb21 .av:hover     (active mouseover)
            .jssorb21 .dn           (mousedown)
            */
        .jssorb21 div, .jssorb21 div:hover, .jssorb21 .av {
            background: url(../img/b21.png) no-repeat;
            overflow: hidden;
            cursor: pointer;
        }

        .jssorb21 div {
            background-position: -5px -5px;
        }

            .jssorb21 div:hover, .jssorb21 .av:hover {
                background-position: -35px -5px;
            }

        .jssorb21 .av {
            background-position: -65px -5px;
        }

        .jssorb21 .dn, .jssorb21 .dn:hover {
            background-position: -95px -5px;
        }
    </style>

    <!-- Arrow Navigator Style -->
    <style>
        /* jssor slider arrow navigator skin 21 css */
        /*
            .jssora21l              (normal)
            .jssora21r              (normal)
            .jssora21l:hover        (normal mouseover)
            .jssora21r:hover        (normal mouseover)
            .jssora21ldn            (mousedown)
            .jssora21rdn            (mousedown)
            */
        .jssora21l, .jssora21r, .jssora21ldn, .jssora21rdn {
            position: absolute;
            cursor: pointer;
            display: block;
            background: url(../img/a21.png) center center no-repeat;
            overflow: hidden;
        }

        .jssora21l {
            background-position: -3px -33px;
        }

        .jssora21r {
            background-position: -63px -33px;
        }

        .jssora21l:hover {
            background-position: -123px -33px;
        }

        .jssora21r:hover {
            background-position: -183px -33px;
        }

        .jssora21ldn {
            background-position: -243px -33px;
        }

        .jssora21rdn {
            background-position: -303px -33px;
        }
    </style>

</head>

<body style="padding:0px; margin:0px; font-family:Arial, Verdana;background-color:#fff;">

<div id="top">
<p align="center"><img src="../styles_styles/logo.png" alt="Conversiologo" align="top" width="395" height="100"></p>
</div>

<div id="header">
<table align="left" class="gobackfont" border="0"><a href="index.php?deleteaddress">&#8592; Go Back</a>
| <a href="../libraries/howdoes.html">Tutorial</a>
| <a href="../libraries/whythis.html">What is Conversio Republic?</a>
</td></tr></table>
<!-- if you need user information, just put them into the $_SESSION variable and output them here -->
<table align="right" class="signedinfont" border="0"><tr><td><a href="index.php?logout">Logout</a></td></tr></table>
<!-- because people were asking: "index.php?logout" is just my simplified form of "index.php?logout=true" -->
</div>


<div id="body">

    <script type="text/javascript" src="scripts/jquery/jquery-1.9.1.min.js"></script>

    <!-- use jssor.slider.mini.js (39KB) or jssor.sliderc.mini.js (31KB, with caption, no slideshow) or jssor.sliders.mini.js (26KB, no caption, no slideshow) instead for release -->

    <!-- jssor.slider.mini.js = jssor.sliderc.mini.js = jssor.sliders.mini.js = (jssor.core.js + jssor.utils.js + jssor.slider.js) -->

    <script type="text/javascript" src="scripts/jquery/jssor.core.js"></script>

    <script type="text/javascript" src="scripts/jquery/jssor.utils.js"></script>

    <script type="text/javascript" src="scripts/jquery/jssor.slider.js"></script>

    <script>

        jQuery(document).ready(function ($) {



            var _CaptionTransitions = [];

            _CaptionTransitions["L"] = { $Duration: 900, x: 0.6, $Easing: { $Left: $JssorEasing$.$EaseInOutSine }, $Opacity: 2 };

            _CaptionTransitions["R"] = { $Duration: 900, x: -0.6, $Easing: { $Left: $JssorEasing$.$EaseInOutSine }, $Opacity: 2 };


            

            _CaptionTransitions["RTT|2"] = { $Duration: 900, $Zoom: 3, $Rotate: 1, $Easing: { $Zoom: $JssorEasing$.$EaseInQuad, $Opacity: $JssorEasing$.$EaseLinear, $Rotate: $JssorEasing$.$EaseInQuad }, $Opacity: 2, $Round: { $Rotate: 0.5} };

            _CaptionTransitions["RTTL|BR"] = { $Duration: 900, x: -0.6, y: -0.6, $Zoom: 11, $Rotate: 1, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Top: $JssorEasing$.$EaseInCubic, $Zoom: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear, $Rotate: $JssorEasing$.$EaseInCubic }, $Opacity: 2, $Round: { $Rotate: 0.8} };




            var options = {

                $FillMode: 2,                                       //[Optional] The way to fill image in slide, 0 stretch, 1 contain (keep aspect ratio and put all inside slide), 2 cover (keep aspect ratio and cover whole slide), 4 actual size, 5 contain for large image, actual size for small image, default value is 0

                $AutoPlay: true,                                    //[Optional] Whether to auto play, to enable slideshow, this option must be set to true, default value is false

                $AutoPlayInterval: 4000,                            //[Optional] Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000

                $PauseOnHover: 1,                                   //[Optional] Whether to pause when mouse over if a slider is auto playing, 0 no pause, 1 pause for desktop, 2 pause for touch device, 3 pause for desktop and touch device, default value is 1



                $ArrowKeyNavigation: true,   			            //[Optional] Allows keyboard (arrow key) navigation or not, default value is false

                //$SlideEasing: $JssorEasing$.$EaseOutQuint,          //[Optional] Specifies easing for right to left animation, default value is $JssorEasing$.$EaseOutQuad

                $SlideDuration: 800,                               //[Optional] Specifies default duration (swipe) for slide in milliseconds, default value is 500

                $MinDragOffsetToSlide: 20,                          //[Optional] Minimum drag offset to trigger slide , default value is 20

                //$SlideWidth: 600,                                 //[Optional] Width of every slide in pixels, default value is width of 'slides' container

                //$SlideHeight: 300,                                //[Optional] Height of every slide in pixels, default value is height of 'slides' container

                $SlideSpacing: 0, 					                //[Optional] Space between each slide in pixels, default value is 0

                $DisplayPieces: 1,                                  //[Optional] Number of pieces to display (the slideshow would be disabled if the value is set to greater than 1), the default value is 1

                $ParkingPosition: 0,                                //[Optional] The offset position to park slide (this options applys only when slideshow disabled), default value is 0.

                $UISearchMode: 1,                                   //[Optional] The way (0 parellel, 1 recursive, default value is 1) to search UI components (slides container, loading screen, navigator container, arrow navigator container, thumbnail navigator container etc).

                $PlayOrientation: 1,                                //[Optional] Orientation to play slide (for auto play, navigation), 1 horizental, 2 vertical, 5 horizental reverse, 6 vertical reverse, default value is 1

                $DragOrientation: 1,                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $DisplayPieces is greater than 1, or parking position is not 0)



                $CaptionSliderOptions: {                            //[Optional] Options which specifies how to animate caption

                    $Class: $JssorCaptionSlider$,                   //[Required] Class to create instance to animate caption

                    $CaptionTransitions: _CaptionTransitions,       //[Required] An array of caption transitions to play caption, see caption transition section at jssor slideshow transition builder

                    $PlayInMode: 1,                                 //[Optional] 0 None (no play), 1 Chain (goes after main slide), 3 Chain Flatten (goes after main slide and flatten all caption animations), default value is 1

                    $PlayOutMode: 3                                 //[Optional] 0 None (no play), 1 Chain (goes before main slide), 3 Chain Flatten (goes before main slide and flatten all caption animations), default value is 1

                },



                $BulletNavigatorOptions: {                          //[Optional] Options to specify and enable navigator or not

                    $Class: $JssorBulletNavigator$,                 //[Required] Class to create navigator instance

                    $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always

                    $AutoCenter: 1,                                 //[Optional] Auto center navigator in parent container, 0 None, 1 Horizontal, 2 Vertical, 3 Both, default value is 0

                    $Steps: 1,                                      //[Optional] Steps to go for each navigation request, default value is 1

                    $Lanes: 1,                                      //[Optional] Specify lanes to arrange items, default value is 1

                    $SpacingX: 8,                                   //[Optional] Horizontal space between each item in pixel, default value is 0

                    $SpacingY: 8,                                   //[Optional] Vertical space between each item in pixel, default value is 0

                    $Orientation: 1                                 //[Optional] The orientation of the navigator, 1 horizontal, 2 vertical, default value is 1

                },



                $ArrowNavigatorOptions: {                           //[Optional] Options to specify and enable arrow navigator or not

                    $Class: $JssorArrowNavigator$,                  //[Requried] Class to create arrow navigator instance

                    $ChanceToShow: 1,                               //[Required] 0 Never, 1 Mouse Over, 2 Always

                    $AutoCenter: 2,                                 //[Optional] Auto center arrows in parent container, 0 No, 1 Horizontal, 2 Vertical, 3 Both, default value is 0

                    $Steps: 1                                       //[Optional] Steps to go for each navigation request, default value is 1

                }

            };



            var jssor_slider1 = new $JssorSlider$("slider1_container", options);



            //responsive code begin

            //you can remove responsive code if you don't want the slider scales while window resizes

            function ScaleSlider() {

                var bodyWidth = document.body.clientWidth;

                if (bodyWidth)

                    jssor_slider1.$SetScaleWidth(Math.min(bodyWidth, 1920));

                else

                    window.setTimeout(ScaleSlider, 30);

            }



            ScaleSlider();



            if (!navigator.userAgent.match(/(iPhone|iPod|iPad|BlackBerry|IEMobile)/)) {

                $(window).bind('resize', ScaleSlider);

            }





            //if (navigator.userAgent.match(/(iPhone|iPod|iPad)/)) {

            //    $(window).bind("orientationchange", ScaleSlider);

            //}

            //responsive code end
			
			

        });

    </script>

    <!-- Jssor Slider Begin -->

    <!-- You can move inline styles to css file or css block. -->

    <div id="slider1_container" style="position: relative; margin: 0 auto;

        top: 0px; left: 0px; width: 1300px; height: 500px; overflow: hidden;">

        <!-- Loading Screen -->

        <div u="loading" style="position: absolute; top: 0px; left: 0px;">

            <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block;

                top: 0px; left: 0px; width: 100%; height: 100%;">

            </div>

            <div style="position: absolute; display: block; background: url(../img/loading.gif) no-repeat center center;

                top: 0px; left: 0px; width: 100%; height: 100%;">

            </div>

        </div>

        <!-- Slides Container -->

        <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1300px;

            height: 500px; overflow: hidden;">

                
              <?PHP
		
		if($query->rowCount()) {
			
			while($r = $query->fetch(PDO::FETCH_OBJ)) {
				
				 
				 
				echo '<div>';
				
				  echo '<table align="left"> <tr> <td align="center">';
				  
				  
				  if ($r->biztype == "grocery") {
					  echo '<img src="../styles_styles/images/textfield/typeofstore/grocerystore.png"  /> <br />';
				  }
				 
				  echo '<div id="businessaddress" readonly="readonly">' . $r->address .' </div> <br />';
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
				   </table> <table align="right" border="5px" bordercolor="silver"  style="border-collapse:collapse; margin-top: 20px;"><tr><td>';
				   
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
		echo '
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<p align="center"><font class="noplanstext"> No plans have been made yet.  
		<br/>
		<br/>
		<br/>
		Feel free to make one.
		</font> </p>';	
		}
	?>

            
			</div>
        

                

        <!-- Bullet Navigator Skin Begin -->

        <style>

            /* jssor slider bullet navigator skin 21 css */

            /*

            .jssorb21 div           (normal)

            .jssorb21 div:hover     (normal mouseover)

            .jssorb21 .av           (active)

            .jssorb21 .av:hover     (active mouseover)

            .jssorb21 .dn           (mousedown)

            */

            .jssorb21 div, .jssorb21 div:hover, .jssorb21 .av

            {

                background: url(../img/b21.png) no-repeat;

                overflow:hidden;

                cursor: pointer;

            }

            .jssorb21 div { background-position: -5px -5px; }

            .jssorb21 div:hover, .jssorb21 .av:hover { background-position: -35px -5px; }

            .jssorb21 .av { background-position: -65px -5px; }

            .jssorb21 .dn, .jssorb21 .dn:hover { background-position: -95px -5px; }

        </style>

        <!-- bullet navigator container -->

        <div u="navigator" class="jssorb21" style="position: absolute; bottom: 26px; left: 6px;">

            <!-- bullet navigator item prototype -->

            <div u="prototype" style="POSITION: absolute; WIDTH: 19px; HEIGHT: 19px; text-align:center; line-height:19px; color:White; font-size:12px;"></div>

        </div>

        <!-- Bullet Navigator Skin End -->



        <!-- Arrow Navigator Skin Begin -->

        <style>

            /* jssor slider arrow navigator skin 21 css */

            /*

            .jssora21l              (normal)

            .jssora21r              (normal)

            .jssora21l:hover        (normal mouseover)

            .jssora21r:hover        (normal mouseover)

            .jssora21ldn            (mousedown)

            .jssora21rdn            (mousedown)

            */

            .jssora21l, .jssora21r, .jssora21ldn, .jssora21rdn

            {

            	position: absolute;

            	cursor: pointer;

            	display: block;

                background: url(../img/a21.png) center center no-repeat;

                overflow: hidden;

            }

            .jssora21l { background-position: -3px -33px; }

            .jssora21r { background-position: -63px -33px; }

            .jssora21l:hover { background-position: -123px -33px; }

            .jssora21r:hover { background-position: -183px -33px; }

            .jssora21ldn { background-position: -243px -33px; }

            .jssora21rdn { background-position: -303px -33px; }

        </style>

        <!-- Arrow Left -->

        <span u="arrowleft" class="jssora21l" style="width: 55px; height: 55px; top: 123px; left: 8px;">

        </span>

        <!-- Arrow Right -->

        <span u="arrowright" class="jssora21r" style="width: 55px; height: 55px; top: 123px; right: 8px">

        </span>

        <!-- Arrow Navigator Skin End -->

        <a style="display: none" href="http://www.jssor.com">jquery content slider</a>

    </div>


 </div>
 
 
 <?PHP
 
 
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
}

//end of twenty options
}

     

?>

 
<div id="footer">
<table align="right">
<tr>
<td>
Conversio Republic -- Copyright 2014 --- Development Version .1.8
</td>
</tr>
</table>
</div>

</body>

</html>