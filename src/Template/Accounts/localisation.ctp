
<div id="map"></div>
<?php foreach ($locs as $loc){ ?>
  <tr class="success">
  <?php
    echo "<td>".$loc->location_latitude."</td>";
    echo "<td>".$loc->location_logitude."</td>";
  ?>
  </tr>
<?php } ?>

<script>
  function initMap(){
    var location = {lat:48.851884, lng:2.286361};
    var map = new google.maps.Map(document.getElementById("map"), {
      zoom:12,
      center:location
    });
    var marker = new google.maps.Marker({
      position:location,
      map:map
    });
  }
</script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAmFzYVxq-u2ZMdNcGdxvQsVTJqtRSr0q0&callback=initMap"></script>
