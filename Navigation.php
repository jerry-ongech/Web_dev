<?php 
echo file_get_contents("header.html")
?>

<!DOCTYPE html>
<html>
<style>
body, html {
    
    background-image: url("Navigation.jpeg");
	height: 100%; 
	background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}

 { 
   
}
</style>    
<head>
    <title>Place searches</title>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <style>
      
      #map {
        height: 100%;
      }
      
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
    <script>
      var map;
      var infowindow;
      function initMap() {
        var pyrmont = {lat: -1.28333, lng: 36.81667};
        map = new google.maps.Map(document.getElementById('map'), {
          center: pyrmont,
          zoom: 15
        });
        infowindow = new google.maps.InfoWindow();
        var service = new google.maps.places.PlacesService(map);
        service.nearbySearch({
          location: pyrmont,
          radius: 5000000,
          type: ['restaurants']
        }, callback);
      }
      function callback(results, status) {
        if (status === google.maps.places.PlacesServiceStatus.OK) {
          for (var i = 0; i < results.length; i++) {
            createMarker(results[i]);
          }
        }
      }
      function createMarker(place) {
        var placeLoc = place.geometry.location;
       
          var marker = new google.maps.Marker({
                map: map,
    position: place.geometry.location,
    animation: google.maps.Animation.BOUNCE
  });
        google.maps.event.addListener(marker, 'click', function() {
          infowindow.setContent(place.name);
          infowindow.open(map, this);
        });
      }
    </script>
  </head>
  <body>
    <div id="map"></div>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDYrQjBCyociCJyerAmoFSIqKvtd54tYVI&libraries=places&callback=initMap" async defer></script>
  </body>
<?php 
echo file_get_contents("footer.html")
?>
</html>
