// JavaScript Document

var poly;
var map;
var markers = [];
var path;
var geocoder;
var iconBase = '../styles_styles/iconBase';
var latlngofpos = [];


var image = {
    url: '../../styles_styles/iconBase/markerblue.png',
    // This marker is 20 pixels wide by 32 pixels tall.
    size: new google.maps.Size(17, 27),
    // The origin for this image is 0,0.
    origin: new google.maps.Point(0,0),
    // The anchor for this image is the base of the flagpole at 0,32.
    anchor: new google.maps.Point(9, 27)
  };
 
  
  var addressimage = {
    url: '../../styles_styles/iconBase/addresslocation.png',
    // This marker is 20 pixels wide by 32 pixels tall.
    size: new google.maps.Size(35, 42),
    // The origin for this image is 0,0.
    origin: new google.maps.Point(0,0),
    // The anchor for this image is the base of the flagpole at 0,32.
    anchor: new google.maps.Point(0, 42)
  };


function initialize() {
	
	geocoder = new google.maps.Geocoder();
  var latlng = new google.maps.LatLng(-34.397, 150.644);
  
  var mapOptions = {
    zoom: 12,
    center: latlng,
    mapTypeId: google.maps.MapTypeId.SATELLITE,
	mapTypeControl: false,
	 zoomControlOptions: {
    style: google.maps.ZoomControlStyle.SMALL
  }
  }; 
  
  function loadApi() {
  google.load("visualization", "1", {"callback" : pageLoaded});
}
  
  map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
  

  var polyOptions = {
    strokeColor: '#000000',
    strokeOpacity: 1.0,
    strokeWeight: 3,
	geodesic: false,
	fillColor: '#C8D9F2',
    fillOpacity: 0.35,
	draggable: false
  };

  poly = new google.maps.Polygon(polyOptions);
  poly.setMap(map);
  
  

  // Create the search box and link it to the UI element.
  var input = (document.getElementById('pac-input'));
  
  
  map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);
  
  var zzsearchBox = new google.maps.places.Autocomplete(input);

  // Listen for the event fired when the user selects an item from the
  // pick list. Retrieve the matching places for that item.
  google.maps.event.addListener(zzsearchBox, 'place_changed', function placechanged() {
	  
    var place = zzsearchBox.getPlace();
	if (!place.geometry) {
      return;
    }
	 // If the place has a geometry, then present it on a map.
    if (place.geometry.viewport) {
      map.fitBounds(place.geometry.viewport);
    } else {
      map.setCenter(place.geometry.location);
      map.setZoom(19);  // Why 17? Because it looks good.
    }

    for (var i = 0, marker; marker = markers[i]; i++) {
      marker.setMap(null);
    }

    // For each place, get the icon, place name, and location.
    markers = [];
    var bounds = new google.maps.LatLngBounds();
    for (var i = 0, place; place = places[i]; i++) {
      var image = {
        url: place.icon,
        size: new google.maps.Size(71, 71),
        origin: new google.maps.Point(0, 0),
        anchor: new google.maps.Point(17, 34),
        scaledSize: new google.maps.Size(25, 25)
      }; 
    }
	
    map.fitBounds(bounds);
	
  });

  // Bias the SearchBox results towards places that are within the bounds of the
  // current map's viewport.
  google.maps.event.addListener(map, 'bounds_changed', searchmaps);
  google.maps.event.addListener(map, 'click', addLatLng);
  
 // google.maps.event.addListener(marker, 'dragend', function update(){
	//var countmarker = markers.indexOf(this.marker)
	//var lowmarker = markers[countmarker - 1];
	//var addmarker = markers[countmarker + 1]
	
	//if (lowmarker == null && addmarker == !null) {
	//var path = [countmarker.getPosition(), addmarker.getPosition()];
	//}
	//else if (lowmarker == !null && addmarker == null) {
	//var path = [lowmarker.getPosition(), countmarker.getPosition()];
	//}
	//else if (lowmarker == !null && addmarker == !null) {
	//var path = [lowmarker.getPosition(), countmarker.getPosition(), addmarker.getPosition()];
	//}
	//else if (lowmarker == null && addmarker == null) {
	//var path = [countmarker.getPosition()];
	//}
//		poly.setPath(path);
//});
  
  
}

function searchmaps() {
    var bounds = map.getBounds();
    searchBox.setBounds(bounds);

  }


//     CREATES THE POLYGONS AND CONNECTS IT BASED ON THE PREVEIOUS POLYGON


 //google.maps.event.addListener(map, 'click', function(event) {
   // addMarker(event.latLng);

function addLatLng(event) {
	
	var g = 0;
	path = poly.getPath();
	path.push(event.latLng);
	
	
  	var marker = new google.maps.Marker({
    position: event.latLng,
    title: '#' + g++,
    map: map,
	icon: image,
	draggable: false
	});
	markers.push(marker);

	var latofpos = event.latLng.lat()
	var lngofpos = event.latLng.lng()
	
	latlngofpos.push([latofpos, lngofpos])

	
	// google.maps.event.addListener(marker,'drag',function(event) {
        //document.getElementById('lat').value = event.latLng.lat();
        //document.getElementById('lng').value = event.latLng.lng();
		//path.pop(event)
    //});

    //google.maps.event.addListener(marker,'dragend',function(event) {
        //document.getElementById('lat').value = event.latLng.lat();
        //document.getElementById('lng').value = event.latLng.lng();
		//path.push(event);
    //});
	
	var k = markers.length
	
	if (k >= 3) {
	var foot = 9.2808399 * Number(google.maps.geometry.spherical.computeArea(poly.getPath()));
	var countfoot = parseInt(foot)
	document.getElementById("squarefeet").value = countfoot + " sq. ft";
	
	};
	/*
	http://maps.googleapis.com/maps/api/staticmap?center=Williamsburg,Brooklyn,NY&zoom=13&size=400x400&
markers=color:blue%7Clabel:S%7C11211%7C11206%7C11222

http://maps.googleapis.com/maps/api/staticmap?size=480x480&markers=
icon:http://chart.apis.google.com/chart?chst=d_map_pin_icon%26chld=cafe%257C996600%7C
224+West+20th+Street+NY%7C75+9th+Ave+NY%7C700+E+9th+St+NY
	*/	
	
	 $(document).ready(function() {
	   
		var location = map.getCenter().toUrlValue();
		var zoom = map.getZoom();
		var shapeofpoly = google.maps.geometry.encoding.encodePath(path);
		var merged = latlngofpos.toString();
		
		 $.post('mappage.php',
		{location: location, zoom: zoom, shapeofpoly: shapeofpoly, merged: merged}
		 
		 );
		});
		// either path or poly not sure
		
	  
}

// Sets the map on all markers after remaining hidden, has nothing to do with placing markers
function setAllMap(map) {
  for (var i = 0; i < markers.length; i++) {
    markers[i].setMap(map);
  }
}


  // Clear current Map

  function deleteMarkers(){
	setAllMap(null);
	markers = [];
	poly.setPath([]);
	document.getElementById("squarefeet").value = null;
  }
  
   function removeLastPoint()
   {
	markers[markers.length - 1].setMap(null);
	markers.pop()
	path.pop(event.latLng);
	
	var j = markers.length
	foot = 3.2808399 * Number(google.maps.geometry.spherical.computeArea(poly.getPath()));
	document.getElementById("squarefeet").value = parseInt(foot) + " sq. ft";
	
	if (j < 3) {
		document.getElementById("squarefeet").value = null;
	}
 }
 
 
 var contentString = '<p align="center">This is the location of the business or as close to it as possible. <br />' +
      				 'Search for it again in the searchbar if the location is innacurate.</p>';
	  
 var infowindow = new google.maps.InfoWindow({
      content: contentString
  });
	  
 
 //center the map on address from previous post
 function codeAddress() {  
 
 	var address = document.getElementById('pac-input').value;	
 	geocoder.geocode( { 'address': address}, function(results, status) {
    if (status == google.maps.GeocoderStatus.OK) {
      map.setCenter(results[0].geometry.location);
      var addresscenter = new google.maps.Marker({
          map: map,
		  zoom: 8,
		  icon: addressimage,
          position: results[0].geometry.location,
      });
	  
	  	  
	  	// make the marker bounce
	   var markerjump = addresscenter.setAnimation(google.maps.Animation.BOUNCE);
	  
	  	setTimeout(function(){addresscenter.setAnimation(null)}, 3000)
		setTimeout(function(){addresscenter.setMap(null);}, 8000)
		  
		// On click open the infowindow telling the user to search again if necessary
		google.maps.event.addListener(addresscenter, 'click', function() {
   		infowindow.open(map, addresscenter);
		addresscenter.setAnimation(null);
		
  		});


	  if (results[0].geometry.viewport) 
          map.fitBounds(results[0].geometry.viewport);
   		 }
 		 });

 // markers.push(addresscenter);
	//  	setTimeout(function(){deleteMarkers},5000);
  
  //setTimeout(function(){placechanged}, 2000);
  
  google.maps.event.addDomListener(window, 'load', initialize);
			google.maps.event.addListener(input, 'load', 'place_changed');
  
}

