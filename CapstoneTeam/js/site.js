function initMap() {
  console.log(locations);
  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 13,
    center: {lat: 39.16468, lng: -86.52481}
  });

  if (userAddress) {
    var geocoder = new google.maps.Geocoder();
    geocoder.geocode({ 'address': userAddress }, function(results, status) {
      if (status === 'OK') {
        map.setCenter(results[0].geometry.location);
        var marker = new google.maps.Marker({
          map: map,
          position: results[0].geometry.location
        });
      } else {
        alert('Geocode was not successful for the following reason: ' + status);
      }
    });
  }
  
  locations.forEach(function(location) {
    var marker = new google.maps.Marker({
      map: map,
      position: {lat: parseFloat(location.lat), lng: parseFloat(location.lng)},
      title: location.name,
      // https://www.freecodecamp.org/news/how-to-change-javascript-google-map-marker-color-8a72131d1207/
      icon: {
        url: "http://maps.google.com/mapfiles/ms/icons/yellow-dot.png"
      }
    });

    // https://developers.google.com/maps/documentation/javascript/infowindows
    var infoContent = '<div id="content">' + '<h3 id="firstHeading" class="firstHeading">' + location.name + '</h3>' + '<div id="bodyContent">' + '<p><b>Address:</b> ' + location.address + '</p>' + '<p><b>Phone:</b> ' + location.phone + '</p>' + '<p><a href="' + location.mapsurl + '" target="_blank">Get Directions</a></p>' + '</div>' + '</div>';

    var infowindow = new google.maps.InfoWindow({
      content: infoContent
    });

    marker.addListener("click", () => {
      infowindow.open({
        anchor: marker,
        map: map,
        shouldFocus: false,
      });
    });

  });
}