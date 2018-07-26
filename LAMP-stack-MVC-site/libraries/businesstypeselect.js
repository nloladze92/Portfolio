// JavaScript Document

		


		document.getElementById("firstselection").selectedIndex = -1;
	


function begin() {
	document.getElementById("1box").style.display = "none";
	document.getElementById("2box").style.display = "none";
	document.getElementById("3box").style.display = "none";
	document.getElementById("4box").style.display = "none";
	document.getElementById("5box").style.display = "none";
   
}


function firstoption() {
	
	document.getElementById("1box").style.display = "none";
	document.getElementById("2box").style.display = "none";
	document.getElementById("3box").style.display = "none";
	document.getElementById("4box").style.display = "none";
	document.getElementById("5box").style.display = "none";
   if ( firstselection.options[firstselection.selectedIndex].value == "business" ) {
      document.getElementById("1box").style.display = "block";
   }
   else if ( firstselection.options[firstselection.selectedIndex].value == "other" ) {
       alert("This option is not available yet; please select business.");
}
	else if ( firstselection.options[firstselection.selectedIndex].value == "government" ) {
       alert("This option is not available yet; please select business.");
}


   
}

function secondoption() {
	document.getElementById("2box").style.display = "block";
}


function thirdoption() {
	
   if ( thirdselection.options[thirdselection.selectedIndex].value == "entertainment" ) {
	  alert("I'm sorry, plans for entertainment businesses have not been completed yet.");
	  document.getElementById("4box").style.display = "none";
	  document.getElementById("5box").style.display = "none";
      document.getElementById("3box").style.display = "none";
   }
    else if ( thirdselection.options[thirdselection.selectedIndex].value == "necessities" ) {
	  document.getElementById("5box").style.display = "none";
      document.getElementById("3box").style.display = "none";
	  document.getElementById("4box").style.display = "block";
   }
   else if ( thirdselection.options[thirdselection.selectedIndex].value == "dining" ) {
	  document.getElementById("3box").style.display = "none";
	  document.getElementById("4box").style.display = "none";
      document.getElementById("5box").style.display = "block";
   }
   
}

function entertainmentoptions() {
	
	 if ( ogedei.options[ogedei.selectedIndex].value == "bar" ) {
	  	//self.location="../select.php";
	 } else if ( ogedei.options[ogedei.selectedIndex].value == "club" ) {
	  	//self.location="../select.php";
   } else if ( ogedei.options[ogedei.selectedIndex].value == "hotel" ) {
	  	//self.location="../select.php";
   } else if ( ogedei.options[ogedei.selectedIndex].value == "movie" ) {
	  	//self.location = "../select.php";
   }
	
	
	
}

function necessitiesoptions() {
	
	if ( fifthselection.options[fifthselection.selectedIndex].value == "gas" ) {
		
		var feetcount = window.parent.document.getElementById("mappage").contentWindow.document.getElementById("squarefeet").value;
		 		
		document.getElementById("squarefeet2").value = feetcount;
		 
		  	document.forms["sumbitnecessities"].submit();

	 } else if (fifthselection.options[fifthselection.selectedIndex].value == "grocery" ) {


		var feetcount = window.parent.document.getElementById("mappage").contentWindow.document.getElementById("squarefeet").value;
		 		
		document.getElementById("squarefeet2").value = feetcount;
		 
		  	document.forms["sumbitnecessities"].submit();

		 
		 
		
		   } 
}

list.addEventListener('click', hide, false);

function diningoptions() {
	
	if ( sixthselection.options[sixthselection.selectedIndex].value == "fastfood" ) {
	  	alert("I'm sorry, but plans for fast food businesses have not been completed yet.");
	 } else if ( sixthselection.options[sixthselection.selectedIndex].value == "restaurant" ) {
		 
	  var feetcount = window.parent.document.getElementById("mappage").contentWindow.document.getElementById("squarefeet").value;
		 		
		document.getElementById("squarefeet3").value = feetcount;
		
	  	document.forms["sumbitdining"].submit();
  } 
	
}
