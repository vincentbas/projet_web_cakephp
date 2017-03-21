

<div id="seances" class="container">
	<div class="row">

	<?php echo $this->Form->create();
 ?>

        <div class="col-md-12">
        <h4>Mes Séances</h4>
        <details>
		  <summary id="ajout">Cliquez pour ajouter une séance</summary>
        <br>
        <section id="formulaire">

		   <form class="form-inline">
		  <div class="form-group">
		    <input type="text" class="form-control" placeholder="Sport" id="sport">
		  </div>

		  <div class="row">
        <div id="form_un" class="col-md-2">
          <h5 >Début de la séance : </h5>
        </div>
        
        <div id="form_un" class="col-md-5">
          <input type="date" class="form-control" id="date_debut">
        </div>
        
        <div id="form_un" class="col-md-5">
          <input type="time" class="form-control" id="time_debut">
        </div>
      </div>

		  <div class="row" style="margin-bottom: 10px;">
        <div id="form_un" class="col-md-2">
          <h5 >Fin de la séance : </h5>
        </div>
        <div id="form_un" class="col-md-5">
          <input type="date" class="form-control" id="date_fin">
        </div>
        <div id="form_un" class="col-md-5">
          <input type="time" class="form-control" id="time_fin">
        </div>
      </div>
		  <div class="form-group">
		    <input type="text" class="form-control" placeholder="Lieu" id="lieu">
		  </div>
		  <div class="form-group">
		    <label class="sr-only" for="pwd">Description:</label>
		    <input type="text" class="form-control" placeholder="Description" id="description">
		  </div>

		  <button type="submit" class="btn btn-default">Ajouter</button>
		</form>
        </section>
        </details>
        <div class="table-responsive">


              <table id="mytable" class="table table-bordred table-striped">

                   <thead>
                   <th>ID</th>
                   <th>Sport</th>
                    <th>Date début</th>
                     <th>Date fin</th>
                     <th>Lieu</th>
                     <th>Durée</th>
                     <th>Description</th>
                      <th>Edit</th>

                       <th>Delete</th>
                   </thead>
    <tbody>


				<?php foreach ($ws as $w){
					$date_a=$w->date;
					$date_b=$w->end_date;
					$interval = date_diff($date_a,$date_b);
					?>
					<tr class="success">
					<?php
						echo "<td>".$w->id."</td>";
						/*echo "<td>".$w->member_id."</td>";*/
						echo "<td>".$w->sport."</td>";
						echo "<td>".$w->date."</td>";
						echo "<td>".$w->end_date."</td>";
						echo "<td>".$w->location_name."</td>";
						echo "<td>".$interval->format('%h')." heure(s) ".$interval->format('%m')." minute(s)</td>";
						echo "<td>".utf8_decode($w->description)."</td>";

						/*echo "<td>".$w->contest_i."</td>";*/
					?>

    <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
    <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td> <?php } ?>
    </tr>

    </tbody>

</table>


        </div>
	</div>
</div>


<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
      <div class="modal-dialog">
    <div class="modal-content">
          <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
        <h4 class="modal-title custom_align" id="Heading">Edit Your Detail</h4>
      </div>
          <div class="modal-body">
          <div class="form-group">
        <input class="form-control " type="text" placeholder="Mohsin">
        </div>
        <div class="form-group">

        <input class="form-control " type="text" placeholder="Irshad">
        </div>
        <div class="form-group">
        <textarea rows="2" class="form-control" placeholder="CB 106/107 Street # 11 Wah Cantt Islamabad Pakistan"></textarea>


        </div>
      </div>
          <div class="modal-footer ">
        <button type="button" class="btn btn-warning btn-lg" style="width: 100%;"><span class="glyphicon glyphicon-ok-sign"></span> Update</button>
      </div>
        </div>
    <!-- /.modal-content -->
  </div>
      <!-- /.modal-dialog -->
    </div>



    <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
      <div class="modal-dialog">
    <div class="modal-content">
          <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
        <h4 class="modal-title custom_align" id="Heading">Delete this entry</h4>
      </div>
          <div class="modal-body">

       <div class="alert alert-danger"><span class="glyphicon glyphicon-warning-sign"></span> Are you sure you want to delete this Record?</div>

      </div>
        <div class="modal-footer ">
        <button type="button" class="btn btn-success" ><span class="glyphicon glyphicon-ok-sign"></span> Yes</button>
        <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> No</button>
      </div>
        </div>
    <!-- /.modal-content -->
  </div>
      <!-- /.modal-dialog -->
    </div>
