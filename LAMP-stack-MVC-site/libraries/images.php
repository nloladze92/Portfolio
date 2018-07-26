<?php

	function returnarray($array) {

		$a = array();
			$images = explode(",", $array);

		foreach($images as $value) {
			
	//one through five of options
if ( $value == "television") {
    array_push($a,'<img src="../../../styles_styles/images/unselected/3dtv.jpg" class="ti" />');
}
elseif( $value == "employee") {
	array_push($a,'<img src="../../../styles_styles/images/unselected/employee.jpg" class="ti" />');
}
elseif( $value == "solar" ) {
	array_push($a,'<img src="../../../styles_styles/images/unselected/solarpanel.jpg" class="ti" />');
}
elseif( $value == "printer" ) {
	array_push($a,'<img src="../../../styles_styles/images/unselected/3dprinter.jpg" class="ti" />');
}
elseif( $value == "table") {
	array_push($a,'<img src="../../../styles_styles/images/unselected/etable1.jpg" class="ti" />');
}
	//five through ten of options
elseif ( $value == "led") {
   array_push($a,'<img src="../../../styles_styles/images/unselected/ledlighting.jpg" class="ti" />');
}
elseif( $value == "coffee") {
	array_push($a,'<img src="../../../styles_styles/images/unselected/coffee.jpg" class="ti" />');
}
elseif( $value == "recycle") {
	array_push($a,'<img src="../../../styles_styles/images/unselected/plasticrecycle.jpg" class="ti" />');
}

//recycle dump
elseif( $value == "recycledump") {
	array_push($a,'<img src="../../../styles_styles/images/unselected/recycledump.jpg" class="ti" />');
}

elseif( $value == "rfid") {
	array_push($a,'<img src="../../../styles_styles/images/unselected/rfid.jpg" class="ti" />');
}
elseif( $value == "cart") {
	array_push($a,'<img src="../../../styles_styles/images/unselected/polycart.jpg" class="ti" />');
}
	//ten through fifteen of options
	//five through ten of options
elseif ( $value == "biofuel") {
   array_push($a,'<img src="../../../styles_styles/images/unselected/biodieseltrucks.jpg" class="ti" />');
}
elseif( $value == "camera") {
	array_push($a,'<img src="../../../styles_styles/images/selected/facialrecog.jpg" class="ti" />');
}
elseif( $value == "segway") {
	array_push($a,'<img src="../../../styles_styles/images/unselected/segway.jpg" class="ti" />');
}
elseif( $value == "wifi") {
	array_push($a,'<img src="../../../styles_styles/images/unselected/wifi.jpg" class="ti" />');
}
elseif( $value == "food") {
	array_push($a,'<img src="../../../styles_styles/images/unselected/foodbelt.jpg" class="ti" />');
}	
	//fifteen through twenty of options
	
		//five through ten of options
elseif ( $value == "game") {
   array_push($a,'<img src="../../../styles_styles/images/unselected/arcadegame.jpg" class="ti" />');
}
elseif( $value == "website") {
	array_push($a,'<img src="../../../styles_styles/images/unselected/website.jpg" class="ti" />');
}
elseif( $value == "kiosk") {
	array_push($a,'<img src="../../../styles_styles/images/unselected/kiosk.jpg" class="ti" />');
}
elseif( $value == "pump") {
	array_push($a,'<img src="../../../styles_styles/images/unselected/fuelpump.jpg" class="ti" />');
}
elseif( $value == "hvac") {
	array_push($a,'<img src="../../../styles_styles/images/unselected/airfilter.jpg" class="ti" />');
}

}

return $a;
}
	