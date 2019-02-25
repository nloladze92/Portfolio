
	var legion = new Array();
	var alexander = new Array();
	
	var selected = new Array();
	
	// first five
	legion[0] = (a = 1);
	legion[1] = (b = 1);
	legion[2] = (c = 1);
	legion[4] = (e = 1);
	
	var a8 = 0;
	var b8 = 0;
	var c8 = 0;
	var e8 = 0;
	
	// five through ten
	legion[5] = (f = 1);
	legion[7] = (h = 1);
	
	var f8 = 0;
	var h8 = 0;
	

// ten through fifteen
	alexander[13] = (n = 1);
	alexander[14] = (o = 1);
	
	var n8 = 0;
	var o8 = 0;
	
	// fifteen through twenty
	alexander[16] = (q = 1);
	
	
	var q8 = 0;
		
	function calc(delta, crusader) {
	var mult1 = Number(document.getElementById('num1').value);
	var sidepanel = document.getElementById("sidepanel");
	
	// Document images
	var television = document.getElementById("01television");
	var employee = document.getElementById("02employee");
	var solar = document.getElementById("03solar");
	var table = document.getElementById("05etable");
	var led = document.getElementById("06led");
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
				employee.src="../styles_styles/images/selected/employee3.jpg";
				sidepanel.src="../styles_styles/images/texts/employee3.jpg";
				selected.push("employee");
				duplex();
		}
		
		else if ( (crusader == 'b8') && (legion[1] % 2 === 0) )
		{b8 -= mult1 * delta;
		legion[1] += 1;
				employee.src="../styles_styles/images/unselected/employee3.jpg";
				sidepanel.src="../styles_styles/images/texts/employee3.jpg";
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
		
		
		
		
		//touch panels
		else if ( (crusader == 'e8') && (legion[4] % 2 != 0) )
		{e8 += mult1 * delta;
		legion[4] += 1;
				table.src="../styles_styles/images/selected/etable1.jpg";
				sidepanel.src="../styles_styles/images/texts/touchtable.jpg";
				selected.push("table");
				duplex();

		}
		
		else if ( (crusader == 'e8') && (legion[4] % 2 === 0) )
		{e8 -= mult1 * delta;
		legion[4] += 1;
				table.src="../styles_styles/images/unselected/etable1.jpg";
				sidepanel.src="../styles_styles/images/texts/touchtable.jpg";
				selected[selected.indexOf("table")] = "";
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
		
		
		var total = (a8 + b8 + c8 + e8 + f8 + h8 + n8 + o8 + q8);
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
	
	var wifi = document.getElementById("14wifi");
	var food = document.getElementById("15food");
	var website = document.getElementById("17website");
		
		
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

		
// full auto
		if ( hoplite == 'o8' && alexander[14] % 2 != 0 )
		{ o8 += mult1 * triforce;
		alexander[14] += 1;
				food.src="../styles_styles/images/selected/foodbelt.jpg";
				selected.push("food");
				sidepanel.src="../styles_styles/images/texts/fullauto.jpg";
				duplex2();
		}
		
		else if ( (hoplite == 'o8') && (alexander[14] % 2 === 0) )
		{ o8 -= mult1 * triforce;
		alexander[14] += 1;
				food.src="../styles_styles/images/unselected/foodbelt.jpg";
				sidepanel.src="../styles_styles/images/texts/fullauto.jpg";
				selected[selected.indexOf("food")] = "";
				duplex2();

		}
		
		
		
		
		/* HALF WAY MARK
		
		HALF WAY MARK
		
		HALF WAY MARK
		
		*/
	
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
		
		
		
		
	
		var total = (a8 + b8 + c8 + e8 + f8 + h8 + n8 + o8 + q8);
		return document.Augustus.totalcost.value = parseInt(total);
		
		function duplex2 () {
		var selectedimages = document.getElementById("selectedimages");
		selectedimages.value = selected.valueOf();
		}
	}
	
	function graysegway () {
	sidepanel.src="../styles_styles/images/texts/segwaysgray.jpg";
	}
	
	
	
