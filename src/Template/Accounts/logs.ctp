<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false&language=fr">  </script>
<div id="logs" class="col-md-6">

        <?php 
              $interval = date_diff($current->date ,$current->end_date);
        ?>


        <h4>Mes Séances</h4>
        <h3>Ma séance numéro <?= $current->id ?> :</h3>
        <br>
              <ul style="font-size: 20px;"> 
                        <li>Sport pratiqué : <?=  $current->sport; ?></li>
                      <li>Lieu : <?= $current->location_name ;?></li>
                      <li>Départ : <?= $current->date; ?></li>
                      <li>Arrivée : <?= $current->end_date; ?></li>
                      <li>Durée : <?= $interval->format('%h')." h  ".$interval->format('%i')?></li>
                       <li>Description : <?= $current->description ;?></li>
                      <li>Contest : <?= $current->contest_id ;?></li>
                      <br>
                      <li>Log Type : <?= $logs->log_type ;?></li>
                      <li>Log Value : <?= $logs->log_value;?></li>
                      <li>Latitude : <?= $logs->location_latitude ;?></li>
                      <li>Longitude : <?= $logs->location_logitude;?></li>
                      <li>Device utilisé : <?= $logs->device_id;?></li>
                      </ul>
                      

</div>
              
<div class="col-md-6" id="map" style="width: 50%; height:515px; display: flex;"></div>
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


</div>
             

      <!-- /.modal-dialog -->
    </div>