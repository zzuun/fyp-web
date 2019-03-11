var map;
var dis;
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
    scaleControl: false,
    disableDefaultUI: true,
    mapTypeControlOptions: {
        mapTypeIds: [google.maps.MapTypeId.ROADMAP, 'gMap']
    }
};
map = new google.maps.Map(document.getElementById("googleMap"), mapOptions);
// var geocoder_map = new google.maps.Geocoder();
// var address = 'New York, USA';
// geocoder_map.geocode({
//     'address': address
// }, function (results, status) {
//     if (status == google.maps.GeocoderStatus.OK) {
//         map.setCenter(results[0].geometry.location);
//         var marker = new google.maps.Marker({
//             map: map,
//             icon: 'img/core-img/pin.png',
//             position: map.getCenter()
//         });
//     } else {
//         alert("Geocode was not successful for the following reason: " + status);
//     }
// });
function getCurrentLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(success,fail);
  }else {
    alert("Browser not supported");
  }
}

function success(position) {
  var currentLat = position.coords.latitude;
  var currentLng = position.coords.longitude;
  // console.log(currentLat);
  // console.log(currentLng);
  var from = new google.maps.LatLng(currentLat, currentLng);
  // var distance = google.maps.geometry.spherical.computeDistanceBetween(latlng, from);
  //               alert(distance/1000);//In metres
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
         console.log(response);
         $("#distance").text(response.rows[0].elements[0].distance.text).show();
         $("#duration").text(response.rows[0].elements[0].duration.text).show();
     }
 });
}

function fail() {
  alert("Error While Fetching your location");
}

getCurrentLocation();


var infowindow = new google.maps.InfoWindow({
          content: instituteName
        });
var marker = new google.maps.Marker({
    position: latlng,
    icon: 'img/core-img/marker.png',
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
