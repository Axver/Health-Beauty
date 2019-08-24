
<div id="map" style='height:200px;'></div>
    <script>
      var map;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: -0.923604, lng: 100.373380},
          zoom: 8
        });

        var myLatLng = {lat: -0.923604, lng: 100.373380};
        var marker = new google.maps.Marker({
    position: myLatLng,
    map: map,
    title: 'Hello World!'
  });
  // To add the marker to the map, call setMap();
marker.setMap(map);
      }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBNnzxae2AewMUN0Tt_fC3gN38goeLVdVE&callback=initMap"
    async defer></script>