
	var legion = new Array();
	var alexander = new Array();
	
	var selected = new Array();
	
	// first five
	legion[0] = (a = 1);
	legion[1] = (b = 1);
	legion[2] = (c = 1);
	legion[3] = (d = 1);
	
	var a8 = 0;
	var b8 = 0;
	var c8 = 0;
	var d8 = 0;
	
	// five through ten
	legion[5] = (f = 1);
	legion[6] = (g = 1);
	legion[7] = (h = 1);
	legion[8] = (i = 1);
	legion[9] = (j = 1);
	
	var f8 = 0;
	var g8 = 0;
	var h8 = 0;
	var i8 = 0;
	var j8 = 0;
	

// ten through fifteen
	alexander[10] = (k = 1);
	alexander[11] = (l = 1);
	alexander[12] = (m = 1);
	alexander[13] = (n = 1);
	
	var k8 = 0;
	var l8 = 0;
	var m8 = 0;
	var n8 = 0;
	
	// fifteen through twenty
	alexander[15] = (p = 1);
	alexander[16] = (q = 1);
	alexander[17] = (r = 1);
	alexander[18] = (s = 1);
	alexander[19] = (t = 1);
	
	
	var p8 = 0;
	var q8 = 0;
	var r8 = 0;
	var s8 = 0;
	var t8 = 0;
		
	function calc(delta, crusader) {
	var mult1 = Number(document.getElementById('num1').value);
	var sidepanel = document.getElementById("sidepanel");
	
	// Document images
	var television = document.getElementById("01television");
	var employee = document.getElementById("02employee");
	var solar = document.getElementById("03solar");
	var printer = document.getElementById("04printer");
	
	var led = document.getElementById("06led");
	var coffee = document.getElementById("07coffee");
	var recycle = document.getElementById("08recycle");
	var rfid = document.getElementById("09rfid");
	var cart = document.getElementById("10cart");
	
	
	
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
		
		
		
		//3d printers
		else if ( (crusader == 'd8') && (legion[3] % 2 != 0) )
		{d8 += mult1 * delta;
		legion[3] += 1;
				printer.src="../styles_styles/images/selected/3dprinter.jpg";
				sidepanel.src="../styles_styles/images/texts/3dprinter.jpg";
				selected.push("printer");
				duplex();
		}
		
		else if ( (crusader == 'd8') && (legion[3] % 2 === 0) )
		{d8 -= mult1 * delta;
		legion[3] += 1;
				printer.src="../styles_styles/images/unselected/3dprinter.jpg";
				sidepanel.src="../styles_styles/images/texts/3dprinter.jpg";
				selected[selected.indexOf("printer")] = "";

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
				recycle.src="../styles_styles/images/selected/plasticrecycle.jpg";
				selected.push("recycle");
				sidepanel.src="../styles_styles/images/texts/recycling.jpg";
				duplex();

		}
		
		else if ( (crusader == 'h8') && (legion[7] % 2 === 0) )
		{h8 -= mult1 * delta;
		legion[7] += 1;
				recycle.src="../styles_styles/images/unselected/plasticrecycle.jpg";
				sidepanel.src="../styles_styles/images/texts/recycling.jpg";
				selected[selected.indexOf("recycle")] = "";
				duplex();

		}
		
		//rfid chips
		else if ( (crusader == 'i8') && (legion[8] % 2 != 0) )
		{i8 += mult1 * delta;
		legion[8] += 1;
				rfid.src="../styles_styles/images/selected/rfid.jpg";
				sidepanel.src="../styles_styles/images/texts/rfid.jpg";
				selected.push("rfid");
				duplex();

		}
		
		else if ( (crusader == 'i8') && (legion[8] % 2 === 0) )
		{i8 -= mult1 * delta;
		legion[8] += 1;
				rfid.src="../styles_styles/images/unselected/rfid.jpg";
				sidepanel.src="../styles_styles/images/texts/rfid.jpg";
				selected[selected.indexOf("rfid")] = "";
				duplex();

		}
		
			//polycarts
		else if ( (crusader == 'j8') && (legion[9] % 2 != 0) )
		{j8 += mult1 * delta;
		legion[9] += 1;
				cart.src="../styles_styles/images/selected/polycart.jpg";
				selected.push("cart");
				sidepanel.src="../styles_styles/images/texts/polycarts.jpg";
				duplex();

		}
		
		else if ( (crusader == 'j8') && (legion[9] % 2 === 0) )
		{j8 -= mult1 * delta;
		legion[9] += 1;
				cart.src="../styles_styles/images/unselected/polycart.jpg";
				sidepanel.src="../styles_styles/images/texts/polycarts.jpg";
				selected[selected.indexOf("cart")] = "";
				duplex();

		}
		
		var total = (a8 + b8 + c8 + d8 + f8 + g8 + h8 + i8 + j8 + k8 + l8 + m8 + n8 + p8 + q8 + r8 + s8 + t8);
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
	var segway = document.getElementById("13segway");
	var wifi = document.getElementById("14wifi");

	var game = document.getElementById("16game");
	var website = document.getElementById("17website");
	var kiosk = document.getElementById("18kiosk");
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


// segways

if ( hoplite == 'm8' && alexander[12] % 2 != 0 )
		{m8 += mult1 * triforce;
		alexander[12] += 1;
				segway.src="../styles_styles/images/selected/segway.jpg";
				selected.push("segway");
				sidepanel.src="../styles_styles/images/texts/segways.jpg";
				duplex2();
		}
		
		else if ( (hoplite == 'm8') && (alexander[12] % 2 === 0) )
		{ m8 -= mult1 * triforce;
		alexander[12] += 1;
				segway.src="../styles_styles/images/unselected/segway.jpg";
				sidepanel.src="../styles_styles/images/texts/segways.jpg";
				selected[selected.indexOf("segway")] = "";
				duplex2();

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

// game
if ( hoplite == 'p8' && alexander[15] % 2 != 0 )
		{ p8 += mult1 * triforce;
		alexander[15] += 1;
				game.src="../styles_styles/images/selected/arcadegame.jpg";
				selected.push("game");
				sidepanel.src="../styles_styles/images/texts/game.jpg";
				duplex2();
		}
		
		else if ( (hoplite == 'p8') && (alexander[15] % 2 === 0) )
		{ p8 -= mult1 * triforce;
		alexander[15] += 1;
				game.src="../styles_styles/images/unselected/arcadegame.jpg";
				sidepanel.src="../styles_styles/images/texts/game.jpg";
				selected[selected.indexOf("game")] = "";
				duplex2();

		}
	
		// website
		
		if ( hoplite == 'q8' && alexander[16] % 2 != 0 )
		{ q8 += mult1 * triforce;
		alexander[16] += 1;
				website.src="../styles_styles/images/selected/website.jpg";
				selected.push("website");
				sidepanel.src="../styles_styles/images/texts/website.jpg";
				duplex2();
		}
		
		else if ( (hoplite == 'q8') && (alexander[16] % 2 === 0) )
		{ q8 -= mult1 * triforce;
		alexander[16] += 1;
				website.src="../styles_styles/images/unselected/website.jpg";
				sidepanel.src="../styles_styles/images/texts/website.jpg";
				selected[selected.indexOf("website")] = "";
				duplex2();

		}
		
		// kiosks
		
		if ( hoplite == 'r8' && alexander[17] % 2 != 0 )
		{ r8 += mult1 * triforce;
		alexander[17] += 1;
				kiosk.src="../styles_styles/images/selected/kiosk.jpg";
				selected.push("kiosk");
				sidepanel.src="../styles_styles/images/texts/kiosks.jpg";
				duplex2();
		}
		
		else if ( (hoplite == 'r8') && (alexander[17] % 2 === 0) )
		{ r8 -= mult1 * triforce;
		alexander[17] += 1;
				kiosk.src="../styles_styles/images/unselected/kiosk.jpg";
				sidepanel.src="../styles_styles/images/texts/kiosks.jpg";
				selected[selected.indexOf("kiosk")] = "";
				duplex2();

		}
		
		
		// fuel pumps
		if ( hoplite == 's8' && alexander[18] % 2 != 0 )
		{ s8 += mult1 * triforce;
		alexander[18] += 1;
				pump.src="../styles_styles/images/selected/fuelpump.jpg";
				selected.push("pump");
				sidepanel.src="../styles_styles/images/texts/fuelpumps.jpg";
				duplex2();
		}
		
		else if ( (hoplite == 's8') && (alexander[18] % 2 === 0) )
		{ s8 -= mult1 * triforce;
		alexander[18] += 1;
				pump.src="../styles_styles/images/unselected/fuelpump.jpg";
				sidepanel.src="../styles_styles/images/texts/fuelpumps.jpg";
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
		
		
	
		var total = (a8 + b8 + c8 + d8 + f8 + g8 + h8 + i8 + j8 + k8 + l8 + m8 + n8 + p8 + q8 + r8 + s8 + t8);
		return document.Augustus.totalcost.value = parseInt(total);
		
		function duplex2 () {
		var selectedimages = document.getElementById("selectedimages");
		selectedimages.value = selected.valueOf();
		}
	}
	
	
	function graysegway () {
	sidepanel.src="../styles_styles/images/texts/segwaysgray.jpg";
	}
	
	
