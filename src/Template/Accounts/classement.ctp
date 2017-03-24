<div class="table-responsive">
  <table id="mytable" class="table table-bordred table-striped">
   <thead>
     <th>#</th>
     <th>User</th>
     <th>Valeur Log Totale</th>
   </thead>
   <tbody>
    <?php 
    $i = 1;
    foreach ($ranking as $rank) {
      echo "<tr><td>$i</td><td>".$rank[0]."</td><td>$rank[1]</td></tr>";
      $i++;
    }
    ?>
   </tbody>
 </table>
</div>