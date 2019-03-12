var map;
var dis;
var currentLat;
var currentLng;
var from;
var latlng = new google.maps.LatLng(lat, lng);
var stylez = [
    {
        "featureType": "water",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#e9e9e9"
            },
            {
                "lightness": 17
            }
        ]
    },
    {
        "featureType": "landscape",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#f5f5f5"
            },
            {
                "lightness": 20
            }
        ]
    },
    {
        "featureType": "road.highway",
        "elementType": "geometry.fill",
        "stylers": [
            {
                "color": "#ffffff"
            },
            {
                "lightness": 17
            }
        ]
    },
    {
        "featureType": "road.highway",
        "elementType": "geometry.stroke",
        "stylers": [
            {
                "color": "#ffffff"
            },
            {
                "lightness": 29
            },
            {
                "weight": 0.2
            }
        ]
    },
    {
        "featureType": "road.arterial",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#ffffff"
            },
            {
                "lightness": 18
            }
        ]
    },
    {
        "featureType": "road.local",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#ffffff"
            },
            {
                "lightness": 16
            }
        ]
    },
    {
        "featureType": "poi",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#f5f5f5"
            },
            {
                "lightness": 21
            }
        ]
    },
    {
        "featureType": "poi.park",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#dedede"
            },
            {
                "lightness": 21
            }
        ]
    },
    {
        "elementType": "labels.text.stroke",
        "stylers": [
            {
                "visibility": "on"
            },
            {
                "color": "#ffffff"
            },
            {
                "lightness": 16
            }
        ]
    },
    {
        "elementType": "labels.text.fill",
        "stylers": [
            {
                "saturation": 36
            },
            {
                "color": "#333333"
            },
            {
                "lightness": 40
            }
        ]
    },
    {
        "elementType": "labels.icon",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "transit",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#f2f2f2"
            },
            {
                "lightness": 19
            }
        ]
    },
    {
        "featureType": "administrative",
        "elementType": "geometry.fill",
        "stylers": [
            {
                "color": "#fefefe"
            },
            {
                "lightness": 20
            }
        ]
    },
    {
        "featureType": "administrative",
        "elementType": "geometry.stroke",
        "stylers": [
            {
                "color": "#fefefe"
            },
            {
                "lightness": 17
            },
            {
                "weight": 1.2
            }
        ]
    }
];
var mapOptions = {
    zoom: 16,
    center: latlng,
    scrollwheel: false,
    scaleControl: true,
    disableDefaultUI: false,
    streetViewControl: false,
    mapTypeControlOptions: {
        mapTypeIds: ['gMap',google.maps.MapTypeId.ROADMAP]
    }
};
map = new google.maps.Map(document.getElementById("googleMap"), mapOptions);
function getCurrentLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(success,fail);
  }else {
    alert("Browser not supported");
  }
}
function getDirections() {
  toggleBounce();
  var directionsService = new google.maps.DirectionsService();
  var directionsDisplay = new google.maps.DirectionsRenderer();
  from = new google.maps.LatLng(currentLat, currentLng);
  directionsDisplay.setMap(map);
  directionsDisplay.setOptions( { suppressMarkers: true } );
  var request = {
    origin: from,
    destination: latlng,
    travelMode: google.maps.TravelMode.DRIVING,
    unitSystem: google.maps.UnitSystem.METRIC,
    durationInTraffic: true,
    avoidHighways: false,
    avoidTolls: false
  };
  directionsService.route(request, function(result, status) {
    if (status == 'OK') {
      createMarker(from,'img/core-img/pin.png');
      directionsDisplay.setDirections(result);
    }
  });
}

function success(position) {
  //get current location of user
  currentLat = position.coords.latitude;
  currentLng = position.coords.longitude;
  from = new google.maps.LatLng(currentLat, currentLng);
  //calculating the distance from user's location to institute
  var distanceService = new google.maps.DistanceMatrixService();
  distanceService.getDistanceMatrix({
     origins: [from],
     destinations: [latlng],
     travelMode: google.maps.TravelMode.DRIVING,
     unitSystem: google.maps.UnitSystem.METRIC,
     durationInTraffic: true,
     avoidHighways: false,
     avoidTolls: false
 },
 function (response, status) {
     if (status !== google.maps.DistanceMatrixStatus.OK) {
         console.log('Error:', status);
     } else {
         $("#distance").text(response.rows[0].elements[0].distance.text).show();
         $("#duration").text(response.rows[0].elements[0].duration.text).show();
     }
 });
}

function fail() {
  alert("Error While Fetching your location");
}

getCurrentLocation();

function createMarker(coords,img) {
  var pic = {
    url: img, // url
    scaledSize: new google.maps.Size(20, 20), // scaled size
    origin: new google.maps.Point(0,0), // origin
    anchor: new google.maps.Point(10, 10) // anchor
  };
  var marker = new google.maps.Marker({
      position: coords,
      icon: pic,
      map:map
  });
}
var iconx = {
    url: "img/core-img/marker.png", // url
    scaledSize: new google.maps.Size(100, 100), // scaled size
    origin: new google.maps.Point(0,0), // origin
    anchor: new google.maps.Point(50, 90) // anchor
};

var infowindow = new google.maps.InfoWindow({
          content: instituteName
        });
var marker = new google.maps.Marker({
    position: latlng,
    icon: iconx,
    animation: google.maps.Animation.DROP,
    title: instituteName
});
marker.addListener('click', function() {
          infowindow.open(map, marker);
        });
marker.addListener('click', toggleBounce);
function toggleBounce() {
  if (marker.getAnimation() !== null) {
    marker.setAnimation(null);
  } else {
    marker.setAnimation(google.maps.Animation.BOUNCE);
  }
}
marker.setAnimation(google.maps.Animation.BOUNCE);

// To add the marker to the map, call setMap();
marker.setMap(map);
var mapType = new google.maps.StyledMapType(stylez, {
    name: "Grayscale"
});
map.mapTypes.set('gMap', mapType);
map.setMapTypeId('gMap');
