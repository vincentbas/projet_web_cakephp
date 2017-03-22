<div id="seances" class="container">
	<div class="row">

	<?php echo $this->Form->create();
 ?>

        <div class="col-md-12">
        <h4>Mes Séances</h4>
        <details>
		  <summary id="ajout">Cliquez pour ajouter une séance</summary>
        <br>
          <?= $this->Form->create("Workouts"); ?>
           <?= $this->Form->hidden('id',['value'=>$current->id]); ?>
                      <?= $this->Form->input('member_id', ['value'=>$this->request->Session()->read('Auth.User.id')]) ?>

                      <?= $this->Form->input('date', ["value" => $current->date]) ?>
                      <?= $this->Form->input('end_date',["value" => $current->end_date]) ?>
                      <?= $this->Form->input('description',["value" => $current->description]) ?>
                      <?= $this->Form->input('location_name',["value" => $current->location_name]) ?>
                      <?= $this->Form->input('contest_id',["value" => $current->contest_id]) ?>
                      <br>
                      <?= $this->Form->submit('Editer', array('class' => 'button','class' => 'btn btn-theme btn-block', 'name' =>'Editer')); ?>
                      <?= $this->Form->end(); ?>
        
        </details>

                </div>
    <!-- /.modal-content -->
  </div>
      <!-- /.modal-dialog -->
    </div>