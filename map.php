    
    <script>

      function initMap() {

        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 12,
          center: {lat: 23.8223, lng: 90.3654}
        });

        // Create an array of alphabetical characters used to label the markers.
        var labels = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';

        // Add some markers to the map.
        // Note: The code uses the JavaScript Array.prototype.map() method to
        // create an array of markers based on a given "locations" array.
        // The map() method here has nothing to do with the Google Maps API.
        var markers = locations.map(function(location, i) {
          return new google.maps.Marker({
            position: location,
            label: labels[i % labels.length]
          });
        });

        // Add a marker clusterer to manage the markers.
        var markerCluster = new MarkerClusterer(map, markers,
            {imagePath: 'https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/m'});
      }
      var locations = [
        {lat: 23.746877, lng: 90.370579},    //nostalgic cafe- okay
        {lat: 23.746507, lng: 90.370671},   //cilantro- 
        {lat: 23.746107, lng: 90.371166},   //the dark music cafe- okay
        {lat: 23.745149, lng: 90.371761},   //kabooz
        {lat: 23.746179, lng: 90.371648},   //cafe majlish
        {lat: 23.743729, lng: 90.373536},    //kfc
        {lat: 23.816968, lng: 90.356215},   //club 13 restaurant
        {lat: 23.811619, lng: 90.356537},   //cafe barista
        {lat: 23.811482, lng: 90.355292},     //cha pata cafe
        {lat: 23.875874, lng: 90.389542},     //the prandium
        {lat: 23.873176, lng: 90.390701},     //haveil
        {lat: 23.872373, lng: 90.391121},     //cross roads restaurant and longue
        {lat: 23.872101, lng: 90.390681},     //halvetia
      ]
    </script>
    <script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js">
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAtRGq1wK1Pn7Qw_WcFiKqX84-4SkXq30c&callback=initMap">
    </script>