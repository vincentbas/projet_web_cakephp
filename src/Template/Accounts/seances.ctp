<div id="seances">
	<div class="row">
		<?php echo $this->Form->create();?>
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-heading"><i class="fa fa-tasks"></i> Mes Séances</div>
				<div class="panel-body">
	        <details>
			  		<summary id="ajout">Cliquez pour ajouter une séance</summary>
	        	<br>
	        	<section id="formulaire">
							<form method="post" accept-charset="utf-8" action="/projet_web_ocres/accounts/seances" class="form-inline">
							  <div class="form-group">
							    <input type="text" class="form-control" placeholder="Sport" id="sport" name="sport">
							  </div>

							  <div class="row">
					        <div id="form_un" class="col-md-2">
					          <h5 >Début de la séance : </h5>
					        </div>

					        <div id="form_un" class="col-md-5">
					          <input type="text" class="form-control datetimepicker" name="date_start">
					        </div>
					      </div>

							  <div class="row" style="margin-bottom: 10px;">
					        <div id="form_un" style="margin-top: 15px;" class="col-md-2">
					          <h5 >Fin de la séance : </h5>
					        </div>
					        <div id="form_un" style="margin-top: 15px;" class="col-md-5">
					          <input type="text" class="form-control datetimepicker" name="date_end">
					        </div>
					      </div>
							  <div class="form-group">
							    <input type="text" class="form-control" placeholder="Lieu" id="lieu" name="location_name">
							  </div>
							  <div class="form-group">
							    <label class="sr-only" for="pwd">Description:</label>
							    <input type="text" class="form-control" placeholder="Description" id="description" name="description">
							  </div>
					      <div class="form-group">
					        <label class="sr-only" for="pwd">Contest ID:</label>
					        <input type="text" class="form-control" placeholder="Contest ID" id="contest_id" name="contest_id">
					      </div>

			  				<button type="submit" class="btn btn-default" name="ajouter">Ajouter</button>
							</form>
						</section>
	        </details>
				</div>
			</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
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
               <th> Contest ID</th>
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

			          <td class="td_workouts"> <?php echo $this->Form->postLink($w->id,['action' => 'logs/'.$w->id]);?> </td>
								<td class="td_workouts"> <?php echo $this->Form->postLink($w->sport,['action' => 'logs/'.$w->id]);?> </td>
			          <td class="td_workouts"> <?php echo $this->Form->postLink($w->date,['action' => 'logs/'.$w->id]);?> </td>
			          <td class="td_workouts"> <?php echo $this->Form->postLink($w->end_date,['action' => 'logs/'.$w->id]);?> </td>
			          <td class="td_workouts"> <?php echo $this->Form->postLink($w->location_name,['action' => 'logs/'.$w->id]);?> </td>
			          <td class="td_workouts"> <?php echo $this->Form->postLink($interval->format('%h')." h  ".$interval->format('%i'),['action' => 'logs/'.$w->id]);?> </td>
			          <td class="td_workouts"> <?php echo $this->Form->postLink(utf8_decode($w->description),['action' => 'logs/'.$w->id]);?> </td>
			          <td class="td_workouts"> <?php echo $this->Form->postLink($w->contest_id,['action' => 'logs/'.$w->id]);?> </td>
								<?php /*echo "<td>".$w->sport."</td>";
								echo "<td>".$w->date."</td>";
								echo "<td>".$w->end_date."</td>";
								echo "<td>".$w->location_name."</td>";
								echo "<td>".$interval->format('%h')." heure(s) ".$interval->format('%m')." minute(s)</td>";
								echo "<td>".utf8_decode($w->description)."</td>";*/

								/*echo "<td>".$w->contest_i."</td>";*/
								?>

						    <td class="td_change"><!--<p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p>-->
						    	 <?= $this->Html->link('EDIT', ['controller' => 'Accounts', 'action' => 'details/'.$w->id], ['escape'=>false]) ?>
						    </td>
						    <td class="td_change2">
						    	 <?php echo "<li id='supp'><p>".$this->Form->postLink(__('SUPP'), ['action' => 'delete', $w['id']], ['confirm' => __('Êtes vous sur de vouloir supprimer la seance  # {0}?', $w['id'])])."</p></li>"; ?>
							  </td>
    						<!--<td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>--> <?php } ?>
    					 </tr>

    		 			</tbody>
						</table>
					</div>
				</div>
			</div>


