//window.setInterval(function(){
  //initialize()
  //}, 20000);

  //start initialize

  var counter=0;
  var map;
  var del=0;
  var gmarkers = [];
  var newmarkers = [];
  var liens = [];


  var myLatlng = new google.maps.LatLng(31.2267584555,29.9606269222);
  var style=styl();
  var mapOptions = {
    zoom: 1,
    center: myLatlng,
    styles: style
  }
  var image = 'navigation.svg';
  var icon = {
    url:image, // url
    scaledSize: new google.maps.Size(50, 50), // scaled size
    origin: new google.maps.Point(0,0), // origin
    anchor: new google.maps.Point(0, 0) // anchor
  };
//end of  initialize


  function create(){
    var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
    return map;
  }
  function deletem(){
    for(i=0; i<gmarkers.length; i++){
      gmarkers[i].setMap(null);
    }

  }
  function deleteN(){
    for(i=0; i<newmarkers.length; i++){
      newmarkers[i].setMap(null);
    }

  }
  function deleteL(){
    for(i=0; i<liens.length; i++){
      liens[i].setMap(null);
    }

  }


  function initialize() {

    if (counter==0) {
      map=create();
      counter++;
      intmarkers=gmarkers;
    }
    $.get('/getdata', function(data){
      if (del>=data.length) {
          deletem();
          deleteN();
          deleteL();

      }
      for (var i = 0; i < data.length; i++) {

        var myLatlng1 = new google.maps.LatLng(data[i]["lat"],data[i]["lng"]);
        var marker = new google.maps.Marker({
          position: myLatlng1,
          map: map,
          icon:icon,
          title:data[i]["name"],

        });
       if (data[i]['latn']!=0) {
         var myLatlng2 = new google.maps.LatLng(data[i]["latn"],data[i]["lngn"]);
         var marker1 = new google.maps.Marker({
           position: myLatlng2,
           map: map,
           icon:icon,
           title:data[i]["name"],

         });
         newmarkers.push(marker1);
       }
        gmarkers.push(marker);
        if (data[i]["latn"]!="0") {
        var flightPlanCoordinates = [
          {lat: parseFloat(data[i]["lat"]), lng:parseFloat( data[i]["lng"])},

          {lat:parseFloat (data[i]["latn"]), lng: parseFloat(data[i]["lngn"])}
              ];
              var flightPath = new google.maps.Polyline({
                path: flightPlanCoordinates,
                geodesic: true,
                strokeColor: '#FF0000',
                strokeOpacity: 1.0,
                strokeWeight: 2
              });

              flightPath.setMap(map);
              liens.push(flightPath);
            }

      }
       del=data.length;
    });
    var searchBox=new google.maps.places.SearchBox(document.getElementById('searchmap'));
    google.maps.event.addListener(searchBox,'places_changed',function(){

      var places=searchBox.getPlaces();
      var bounds = new google.maps.LatLngBounds();
      var i , place ;
      for (i=0; place=places[i]; i++) {
        bounds.extend(place.geometry.location);

      }
      map.fitBounds(bounds);
      map.setZoom(15);

    });
    google.maps.event.addListener(searchBox,'position_changed',function(){


      $('#lat').val(lat);
      $('#lng').val(lng);
    });
  }

  var center = new google.maps.LatLng(19.0822507, 72.8812041);
  var style=styl();
  function initialize1() {
    // MAP ATTRIBUTES.
    var mapAttr = {
      center: center,
      zoom: 10,
      mapTypeId: google.maps.MapTypeId.TERRAIN,
      styles:style
    };

    // THE MAP TO DISPLAY.
    var map1 = new google.maps.Map(document.getElementById("mapContainer"), mapAttr);

    var circle = new google.maps.Circle({
      center: center,
      map: map1,
      radius: 10000,          // IN METERS.
      fillColor: '#FF6600',
      fillOpacity: 0.3,
      strokeColor: "#ccc",
      strokeWeight: 0         // DON'T SHOW CIRCLE BORDER.
    });
    /* drow a line
    var flightPlanCoordinates = [
            {lat: 37.772, lng: -122.214},

            {lat: -27.467, lng: 153.027}
          ];
          var flightPath = new google.maps.Polyline({
            path: flightPlanCoordinates,
            geodesic: true,
            strokeColor: '#FF0000',
            strokeOpacity: 1.0,
            strokeWeight: 2
          });

          flightPath.setMap(map1);

*/
}
  function styl(){
    return   [
      {elementType: 'geometry', stylers: [{color: '#242f3e'}]},
      {elementType: 'labels.text.stroke', stylers: [{color: '#242f3e'}]},
      {elementType: 'labels.text.fill', stylers: [{color: '#746855'}]},
      {
        featureType: 'administrative.locality',
        elementType: 'labels.text.fill',
        stylers: [{color: '#d59563'}]
      },
      {
        featureType: 'poi',
        elementType: 'labels.text.fill',
        stylers: [{color: '#d59563'}]
      },
      {
        featureType: 'poi.park',
        elementType: 'geometry',
        stylers: [{color: '#263c3f'}]
      },
      {
        featureType: 'poi.park',
        elementType: 'labels.text.fill',
        stylers: [{color: '#6b9a76'}]
      },
      {
        featureType: 'road',
        elementType: 'geometry',
        stylers: [{color: '#38414e'}]
      },
      {
        featureType: 'road',
        elementType: 'geometry.stroke',
        stylers: [{color: '#212a37'}]
      },
      {
        featureType: 'road',
        elementType: 'labels.text.fill',
        stylers: [{color: '#9ca5b3'}]
      },
      {
        featureType: 'road.highway',
        elementType: 'geometry',
        stylers: [{color: '#746855'}]
      },
      {
        featureType: 'road.highway',
        elementType: 'geometry.stroke',
        stylers: [{color: '#1f2835'}]
      },
      {
        featureType: 'road.highway',
        elementType: 'labels.text.fill',
        stylers: [{color: '#f3d19c'}]
      },
      {
        featureType: 'transit',
        elementType: 'geometry',
        stylers: [{color: '#2f3948'}]
      },
      {
        featureType: 'transit.station',
        elementType: 'labels.text.fill',
        stylers: [{color: '#d59563'}]
      },
      {
        featureType: 'water',
        elementType: 'geometry',
        stylers: [{color: '#17263c'}]
      },
      {
        featureType: 'water',
        elementType: 'labels.text.fill',
        stylers: [{color: '#515c6d'}]
      },
      {
        featureType: 'water',
        elementType: 'labels.text.stroke',
        stylers: [{color: '#17263c'}]
      }
    ];
  }
  google.maps.event.addDomListener(window, 'load', initialize1);

  google.maps.event.addDomListener(window, 'load', initialize);
