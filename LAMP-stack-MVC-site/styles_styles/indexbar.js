// JavaScript Document


        
function initialize() {
	
  // Create the autocomplete object, restricting the search
  // to geographical location types.
  
  var searchbar = document.getElementById("autocomplete");
	
	//Create the autocomplete object.
	var option = new google.maps.places.Autocomplete(searchbar);
	
	
	google.maps.event.addListener(option, 'place_changed', function() {
		
		document.forms["sumbitsearch"].submit();
		
	}); //end of the event listener
	
	
	
  } 
 