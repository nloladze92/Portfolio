	<?php
	
	session_start();
	
	$urlparts = parse_str($_SERVER['QUERY_STRING']);
	$_SESSION['plan_id'] = $plan_id;
	
	$_SESSION['total'] = $_POST['total'];
	
	include('connect.php');
	 require '../libs/Smarty.class.php';
	 require '../../../libraries/images.php';
	 require 'ipaddress.php';
	 require 'checkip.php';
	 require 'planaddress.php';
	 require 'pledged.php';
	 
	  $smarty = new Smarty;
	 $smarty->setTemplateDir('../../Includes/Templates')
       ->setCompileDir('../../Includes/Compile_directory')
       ->setCacheDir('../../Includes/Smarty_cache');
	   
	   $pledgeview = array();
	   
	   if($_SESSION['user_name'] == '') {
		   array_push($pledgeview, false);
		   
	   } else {
		   
		   array_push($pledgeview, true);
		   
	   if($ipvalue) {
					// Check if the user city matches the plan city
					array_push($pledgeview, true);
					
					if ($user) {
						// Check if the user has already pledged
						
						array_push($pledgeview, true);
						if (!$pledged) {
							include("thetable.php");
							array_push($pledgeview, true);
							
						} else {
							// The user may not pledge
							array_push($pledgeview, false);
						}
					} else {
						array_push($pledgeview, false);
					}
			} else {
				array_push($pledgeview, false);
			}
			
	   }
	   
	   $smarty->assign('pledgeview', $pledgeview);
	 
	   
	   //$smarty->caching = 1;
	   //$smarty->compile_check = true;
	   /*
	if(!$smarty->is_cached('smartyviewtest3.tpl')) {
    // No cache available, do variable assignments here.
    $contents = get_database_contents();
    $smarty->assign('pledge', $pledge);
} */
	
	 class Pledge{
  	 var $radio = array('<input type="radio" name="rr" value="', '<label for=');
  	 var $value = array(p1 => 10, p2 => 15, p3 => 30, p4 => 50, p5 => 100, p6 => 150,
	 p7 => 200, p8 => 300, p9 => 500);
	 var $script = '</script>

        <script>
      $(document).ready(function() {
		  
		  rangeinput.onchange = function() {
		update();
		};

          $("#slider").click(function() {
                update();
          });
      });

      function update() {
		  
		var $pledge = $("input:radio[name=rr]:checked").val();
		var $slider = $("#rangeinput").val();
		var total = $pledge * $slider;
		var check = total.toString();
		
		if (check.length == 4) {
			var number = "$" + splitValue(check, 1)
		} else if (check.length == 5) {
			var number = "$" + splitValue(check, 2)
		} else {
			var number = "$" + total;
		}
		
		function splitValue(value, index) {
    	return value.substring(0, index) + "," + value.substring(index);
		}
	
		 $("#totalnumber").val(number);
		 $("#totalnumber-label").text(number);
      }
	  
    </script>';
	
	var $script2 = "<script>

var isFF = true;
var addRule = (function (style) {
  var sheet = document.head.appendChild(style).sheet;
  return function (selector, css) {
    if ( isFF ) {
      if ( sheet.cssRules.length > 0 ) {
        sheet.deleteRule( 0 );
      }
    
      try {
        sheet.insertRule(selector + '{' + css + '}', 0);
      } catch ( ex ) {
        isFF = false;
      }
    }    
  };
})(document.createElement('style'));


// .merged
if ( 'webkitRequestAnimationFrame' in window ) {
  $( '.merged input' ).addClass( 'webkit-track' );
}

$( '.merged input' ).on( 'input', function( ) {
  addRule( '.merged input::-moz-range-track', 'background: linear-gradient(to right, #2A4665, #FFF ' + this.value + '%, #2A4665)' );
  
  if ( $( this ).hasClass( 'webkit-track' ) ) {
    $( this ).css( 'background', 'linear-gradient(to right, #2A4665, #FFF ' + this.value + '%, #2A4665)' );
  }
} );

$( '.merged input' ).trigger( 'input' );
</script>";

	 }
	 
	 class HTML { 
	 var $div = '<div align="center" id="'; 
	 var $table = '<table align="center"><tr><td>';
	 var $td = '</td><td align="center">';
	 var $rowend = '</td></tr><tr><td align="center">';
	 var $tablend = '</td></tr></table>';
	 var $span = '<span></span>';
	 var $label = '</label>';
	 
	 var $z = '<img src="../Styles/Images/2Browse_plans_images/Dollarpledging/fullp0.jpg" />';
	 var $zz = '<img src="../Styles/Images/2Browse_plans_images/Dollarpledging/fullp00.jpg" />';
	 var $t = '<img src="../Styles/Images/2Browse_plans_images/Dollarpledging/fullp25.jpg" />';
	 var $f = '<img src="../Styles/Images/2Browse_plans_images/Dollarpledging/fullp50.jpg" />';
	 var $s = '<img src="../Styles/Images/2Browse_plans_images/Dollarpledging/fullp75.jpg" />';
	 var $o = '<img src="../Styles/Images/2Browse_plans_images/Dollarpledging/fullp100.jpg" />';
	 var $loc = '<img src="../Styles/Images/2Browse_plans_images/nplocation.jpg" />';
	 var $loc2 = '<img src="../Styles/Images/2Browse_plans_images/npplanlocation.jpg" />';
	 var $thankyou = '<img src="../Styles/Images/2Browse_plans_images/thankyou.jpg" />';
	 var $login = '<img src="../Styles/Images/2Browse_plans_images/login.jpg" />';
	 }
	 
	 class IDs {
	 var $div1 = 'background2">';
	 var $div2 = 'title">';
	 var $div3 = 'total">';
	 }
	 
	 $html = new HTML;
	 $smarty->assign('html', $html);
	 
	 $ids = new IDs;
	 $smarty->assign('ids', $ids);
	
	 $pledge = new Pledge; 
	 $smarty->assign('pledge', $pledge);
	 
		
		$query = $handler->query('SELECT * FROM plandata WHERE plan_id = '. $_SESSION['plan_id'] . '');
		
		while($r = $query->fetch(PDO::FETCH_OBJ)) {
			
			//$plantest101 = array(businessname => $r->bizname);
			
			$plandata = array(
			 '<div id="addressbackground" align="center">',
			 '<input type="text" id="businessname" value="' . $r->bizname . ', ' . $r->businessaddress . '">',
			 '<input type="text" id="username" maxlength="20" readonly value="' . $r->username .'" border="0"/>',
			 '<input type="text" id="squarefeet" maxlength="20" readonly value=' . $r->squarefeet .' border="0"/>',
			 '<input type="text" id="businesscost" maxlength="20" readonly value=' ."$". $r->businesscost .' border="0"/>',
			 '<input type="text" id="date" maxlength="20" readonly value=' . $r->date .' border="0"/></div>',
			 '<img src="' . $r->imagelink . '" id="map" width="431px" height="300px" />',
			);
			
			$percentage = round(($r->pledgeddollars / $r->businesscost) * 100);
			
			$array = returnarray($r->arrayplan);
				
			if ($r->biztype == "grocery") {
			$plandata[7] = '<img id="grocery" />';
			} else if ($r->biztype == "gas") {
			$plandata[7] = '<img id="gas" />';
			} else if ($r->biztype == "restaurant") {
			$plandata[7] = '<img id="restaurant" />';
			}
			
			$smarty->assign('percentage', $percentage);
			$smarty->assign('plan', $plandata);
			$smarty->assign('array', $array);
			
			$handler = '';
			
	 		$smarty->display('Browse_plans_view.tpl');
		}


	?>