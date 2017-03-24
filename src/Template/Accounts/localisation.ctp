
<div id="map"></div>
<table>
<?php foreach ($locs as $loc){ ?>

    <tr class="success" id="localisation">
    <?php
      echo "<td id='pos_lat' data-latitude ='$loc->location_latitude'></td>";
      echo "<td id='pos_long' data-longitude ='$loc->location_logitude'></td>";
    ?>
    </tr>

<?php } ?>
</table>
<script>
  function initMap(){

    var location_latitude = $("#pos_lat").data('latitude');
    var location_longitude = $("#pos_long").data('longitude');

    var location = {lat:location_latitude, lng:location_longitude};

    var map = new google.maps.Map(document.getElementById("map"), {
      zoom:8,
      center:location,
      scrollwheel: false,
    });
    <?php foreach ($locs as $loc){ ?>
    var marker = new google.maps.Marker({
      position:{lat:<?=$loc->location_latitude?>, lng:<?=$loc->location_logitude?>},
      map:map,
    });
    <?php } ?>

  }
</script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAmFzYVxq-u2ZMdNcGdxvQsVTJqtRSr0q0&callback=initMap"></script>
