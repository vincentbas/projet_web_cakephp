<div class="row">
	<div class="col-md-12">
  	<div class="panel panel-default">
  		<div class="panel-heading"><i class="fa fa-book"></i> Classement</div>
  	</div>
  </div>
</div>
<div class="row">
	<div class="col-md-12">
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
  </div>
</div>
