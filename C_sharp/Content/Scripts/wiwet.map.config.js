 function initialize() {
  var mapOptionsDesktop = {
    zoom: 14,
    center: new google.maps.LatLng(34.037298, -118.379554),
    disableDefaultUI: true,
    mapTypeId: google.maps.MapTypeId.HYBRID,
    scrollwheel: false,
    disableDoubleClickZoom: false
  }

  var mapOptionsMobile = {
    zoom: 14,
    center: new google.maps.LatLng(34.037298, -118.379554),
    disableDefaultUI: true,
    mapTypeId: google.maps.MapTypeId.HYBRID,
    scrollwheel: false,
    disableDoubleClickZoom: false,
    draggable: false
  }
  var width = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
  var map;
  if (width > 768) {
    map = new google.maps.Map(document.getElementById('map-canvas'), mapOptionsDesktop);
  }else{
    map = new google.maps.Map(document.getElementById('map-canvas'), mapOptionsMobile);
  }
    
  

  // var image = '../Content/Images/map-pin.png';
  var myLatLng = new google.maps.LatLng(34.037298, -118.379554);
  var beachMarker = new google.maps.Marker({
      position: myLatLng,
      map: map
      // icon: image
  });
}
google.maps.event.addDomListener(window, 'load', initialize);