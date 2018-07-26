
	var legion = new Array();
	var alexander = new Array();
	
	var selected = new Array();
	
	// first five
	legion[0] = (a = 1);
	legion[1] = (b = 1);
	legion[2] = (c = 1);
	
	var a8 = 0;
	var b8 = 0;
	var c8 = 0;
	
	// five through ten
	legion[5] = (f = 1);
	legion[6] = (g = 1);
	legion[7] = (h = 1);
	
	var f8 = 0;
	var g8 = 0;
	var h8 = 0;
	

// ten through fifteen
	alexander[10] = (k = 1);
	alexander[11] = (l = 1);
	alexander[13] = (n = 1);
	
	var k8 = 0;
	var l8 = 0;
	var n8 = 0;
	
	// fifteen through twenty
	alexander[18] = (s = 1);
	alexander[19] = (t = 1);
	
	
	var s8 = 0;
	var t8 = 0;
		
	function calc(delta, crusader) {
	var mult1 = Number(document.getElementById('num1').value);
	var sidepanel = document.getElementById("sidepanel");
	
	// Document images
	var television = document.getElementById("01television");
	var employee = document.getElementById("02employee");
	var solar = document.getElementById("03solar");

	var led = document.getElementById("06led");
	var coffee = document.getElementById("07coffee");
	var recycle = document.getElementById("08recycle");
	
	
	//3d tvs
		if ( (crusader == 'a8') && (legion[0] % 2 != 0) )
		{a8 += mult1 * delta;
		legion[0] += 1
			television.src="../styles_styles/images/selected/3dtv.jpg"
			sidepanel.src="../styles_styles/images/texts/3dtv.jpg";
			selected.push("television");
			duplex();
		}
		
		else if ( (crusader == 'a8') && (legion[0] % 2 === 0) )
		{a8 -= mult1 * delta;
		legion[0] += 1;
				television.src="../styles_styles/images/unselected/3dtv.jpg";
				sidepanel.src="../styles_styles/images/texts/3dtv.jpg";
				selected[selected.indexOf("television")] = "";
				duplex();

		}
		
		
		
		//employee retraining
		else if ( (crusader == 'b8') && (legion[1] % 2 != 0) )
		{b8 += mult1 * delta;
		legion[1] += 1;
				employee.src="../styles_styles/images/selected/employee.jpg";
				sidepanel.src="../styles_styles/images/texts/employee.jpg";
				selected.push("employee");
				duplex();
		}
		
		else if ( (crusader == 'b8') && (legion[1] % 2 === 0) )
		{b8 -= mult1 * delta;
		legion[1] += 1;
				employee.src="../styles_styles/images/unselected/employee.jpg";
				sidepanel.src="../styles_styles/images/texts/employee.jpg";
				selected[selected.indexOf("employee")] = "";
				duplex();

		}
		
		
		
		//solar panels
		else if ( (crusader == 'c8') && (legion[2] % 2 != 0) )
		{c8 += mult1 * delta;
		legion[2] += 1;
				solar.src="../styles_styles/images/selected/solarpanel.jpg";
				sidepanel.src="../styles_styles/images/texts/solar.jpg";
				selected.push("solar");
				duplex();
		}
		
		else if ( (crusader == 'c8') && (legion[2] % 2 === 0) )
		{c8 -= mult1 * delta;
		legion[2] += 1;
				solar.src="../styles_styles/images/unselected/solarpanel.jpg";
				sidepanel.src="../styles_styles/images/texts/solar.jpg";
				selected[selected.indexOf("solar")] = "";
				duplex();

		}
		
		
		
		
		
		/* HALF WAY MARK
		
		HALF WAY MARK
		
		HALF WAY MARK
		
		*/
		
		
		
		
		
		
		//led lighting
		else if ( (crusader == 'f8') && (legion[5] % 2 != 0) )
		{f8 += mult1 * delta;
		legion[5] += 1;
				led.src="../styles_styles/images/selected/ledlighting.jpg";
				led.value = "";
				sidepanel.src="../styles_styles/images/texts/ledlighting.jpg";
				selected.push("led");
				duplex();
		}
		
		else if ( (crusader == 'f8') && (legion[5] % 2 === 0) )
		{f8 -= mult1 * delta;
		legion[5] += 1;
				led.src="../styles_styles/images/unselected/ledlighting.jpg";
				led.value = "led";
				sidepanel.src="../styles_styles/images/texts/ledlighting.jpg";
				selected[selected.indexOf("led")] = "";
				duplex();

		}
		
		

		//coffee machine
		else if ( (crusader == 'g8') && (legion[6] % 2 != 0) )
		{g8 += mult1 * delta;
		legion[6] += 1;
				coffee.src="../styles_styles/images/selected/coffee.jpg";
				selected.push("coffee");
				sidepanel.src="../styles_styles/images/texts/coffeemachine.jpg";
				duplex();
		
		}
		
		else if ( (crusader == 'g8') && (legion[6] % 2 === 0) )
		{g8 -= mult1 * delta;
		legion[6] += 1;
				coffee.src="../styles_styles/images/unselected/coffee.jpg";
				coffee.value = "coffee";
				sidepanel.src="../styles_styles/images/texts/coffeemachine.jpg";
				selected[selected.indexOf("coffee")] = "";
				duplex();

		}
		
		
		//plastic recycling
		else if ( (crusader == 'h8') && (legion[7] % 2 != 0) )
		{h8 += mult1 * delta;
		legion[7] += 1;
				recycle.src="../styles_styles/images/selected/recycledump.jpg";
				selected.push("recycledump");
				sidepanel.src="../styles_styles/images/texts/recycledump.jpg";
				duplex();

		}
		
		else if ( (crusader == 'h8') && (legion[7] % 2 === 0) )
		{h8 -= mult1 * delta;
		legion[7] += 1;
				recycle.src="../styles_styles/images/unselected/recycledump.jpg";
				sidepanel.src="../styles_styles/images/texts/recycledump.jpg";
				selected[selected.indexOf("recycledump")] = "";
				duplex();

		}
		
		
		var total = (a8 + b8 + c8 + f8 + g8 + h8 + k8 + l8 + n8 + s8 + t8);
		return document.Augustus.totalcost.value = parseInt(total);
		
		function duplex () {
		var selectedimages = document.getElementById("selectedimages");
		selectedimages.value = selected.valueOf();
		}
	
	
	}
	
	
	
	// second half, second half, second half
	
	
	function func(triforce, hoplite) {
	var mult1 = Number(document.getElementById('num1').value);
	var sidepanel = document.getElementById("sidepanel");
	
	var biofuel = document.getElementById("11biofuel");
	var camera = document.getElementById("12camera");
	var wifi = document.getElementById("14wifi");
	var pump = document.getElementById("19pump");
	var hvac = document.getElementById("20hvac");

// alternative fuel
if ( hoplite == 'k8' && alexander[10] % 2 != 0 )
		{ k8 += mult1 * triforce;
		alexander[10] += 1;
				biofuel.src="../styles_styles/images/selected/biodieseltrucks.jpg";
				selected.push("biofuel");
				sidepanel.src="../styles_styles/images/texts/alternativefuel.jpg";
				duplex2();
		}
		
		else if ( (hoplite == 'k8') && (alexander[10] % 2 === 0) )
		{ k8 -= mult1 * triforce;
		alexander[10] += 1;
				biofuel.src="../styles_styles/images/unselected/biodieseltrucks.jpg";
				sidepanel.src="../styles_styles/images/texts/alternativefuel.jpg";
				selected[selected.indexOf("biofuel")] = "";
				duplex2();

		}
		
// face	
			if ( hoplite == 'l8' && alexander[11] % 2 != 0 )
		{ //l8 += mult1 * triforce;
		alexander[11] += 1;
				camera.src="../styles_styles/images/selected/facialrecog.jpg";
				sidepanel.src="../styles_styles/images/texts/face.jpg";
		}
		
		else if ( (hoplite == 'l8') && (alexander[11] % 2 === 0) )
		{ //l8 -= mult1 * triforce;
		alexander[11] += 1;
		
				camera.src="../styles_styles/images/selected/facialrecog.jpg";
				sidepanel.src="../styles_styles/images/texts/face.jpg";
	
		}


		
		
// wifi
		if ( hoplite == 'n8' && alexander[13] % 2 != 0 )
		{ n8 += mult1 * triforce;
		alexander[13] += 1;
				wifi.src="../styles_styles/images/selected/wifi.jpg";
				selected.push("wifi");
				sidepanel.src="../styles_styles/images/texts/wifi.jpg";
				duplex2();
		}
		
		else if ( (hoplite == 'n8') && (alexander[13] % 2 === 0) )
		{ n8 -= mult1 * triforce;
		alexander[13] += 1;
				wifi.src="../styles_styles/images/unselected/wifi.jpg";
				sidepanel.src="../styles_styles/images/texts/wifi.jpg";
				selected[selected.indexOf("wifi")] = "";
				duplex2();


		}

	
		
		
		/* HALF WAY MARK
		
		HALF WAY MARK
		
		HALF WAY MARK
		
		*/


		// website

		
		
		// fuel pumps
		if ( hoplite == 's8' && alexander[18] % 2 != 0 )
		{ s8 += mult1 * triforce;
		alexander[18] += 1;
				pump.src="../styles_styles/images/selected/fuelpumpgas.jpg";
				selected.push("pump");
				sidepanel.src="../styles_styles/images/texts/fuelpumpsgas.jpg";
				duplex2();
		}
		
		else if ( (hoplite == 's8') && (alexander[18] % 2 === 0) )
		{ s8 -= mult1 * triforce;
		alexander[18] += 1;
				pump.src="../styles_styles/images/unselected/fuelpumpgas.jpg";
				sidepanel.src="../styles_styles/images/texts/fuelpumpsgas.jpg";
				selected[selected.indexOf("pump")] = "";
				duplex2();


		}
		
		// hvac
		if ( hoplite == 't8' && alexander[19] % 2 != 0 )
		{ t8 += mult1 * triforce;
		alexander[19] += 1;
				hvac.src="../styles_styles/images/selected/airfilter.jpg";
				selected.push("hvac");
				sidepanel.src="../styles_styles/images/texts/hvac.jpg";
				duplex2();
		}
		
		else if ( (hoplite == 't8') && (alexander[19] % 2 === 0) )
		{ t8 -= mult1 * triforce;
		alexander[19] += 1;
				hvac.src="../styles_styles/images/unselected/airfilter.jpg";
				sidepanel.src="../styles_styles/images/texts/hvac.jpg";
				selected[selected.indexOf("hvac")] = "";
				duplex2();

		}
		
		
	
		var total = (a8 + b8 + c8 + f8 + g8 + h8 + k8 + l8 + n8 + s8 + t8);
		return document.Augustus.totalcost.value = parseInt(total);
		
		function duplex2 () {
		var selectedimages = document.getElementById("selectedimages");
		selectedimages.value = selected.valueOf();
		}
	}
	
	
	
	
	
