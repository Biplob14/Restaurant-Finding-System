    
    <script>

      function initMap() {

        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 12,
          center: {lat: 23.746466, lng: 90.376015}
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
        {lat: 23.746994, lng: 90.370572},    //nostalgic cfe
        {lat: 23.746591, lng: 90.370669},   //cilantro
        {lat: 23.746107, lng: 90.371166},   //the dark music cafe
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
        {lat: -37.773700, lng: 145.145187},
        {lat: -37.774785, lng: 145.137978},
        {lat: -37.819616, lng: 144.968119},
        {lat: -38.330766, lng: 144.695692},
        {lat: -39.927193, lng: 175.053218},
        {lat: -41.330162, lng: 174.865694},
        {lat: -42.734358, lng: 147.439506},
        {lat: -42.734358, lng: 147.501315},
        {lat: -42.735258, lng: 147.438000},
        {lat: -43.999792, lng: 170.463352}
      ]
    </script>
    <script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js">
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAtRGq1wK1Pn7Qw_WcFiKqX84-4SkXq30c&callback=initMap">
    </script>