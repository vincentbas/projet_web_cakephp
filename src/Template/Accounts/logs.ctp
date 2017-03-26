<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false&language=fr">  </script>
<div id="logs" class="container">
	<div class="row">
        <?php 
              $interval = date_diff($current->date ,$current->end_date);
        ?>


        <div class="col-md-12">
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
                      <br></ul>


                    <div id="carte" style="width:300px; height:300px">
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
                              



                </div>
    <!-- /.modal-content -->
  </div>
      <!-- /.modal-dialog -->
    </div>