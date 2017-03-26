<div id="seances" class="container">
	<div class="row">

	<?php echo $this->Form->create();
 ?>

        <div class="col-md-12">
        <h4>Mes Séances</h4>
        <details>
		  <summary id="ajout">Cliquez pour éditer la séance</summary>
        <br>
          <?= $this->Form->create("Workouts"); ?>
           <?= $this->Form->hidden('id',['value'=>$current->id]); ?>
                      <?= $this->Form->hidden('member_id', ['value'=>$this->request->Session()->read('Auth.User.id')]) ?>

                      <?= $this->Form->input('date', ["value" => $current->date]) ?>
                      <?= $this->Form->input('end_date',["value" => $current->end_date]) ?>
                      <?= $this->Form->input('date', ["value" => $current->date->i18nFormat('yyyy-MM-dd HH:mm'), "class" => "datetimepicker"]) ?>
                      <?= $this->Form->input('end_date',["value" => $current->end_date->i18nFormat('yyyy-MM-dd HH:mm'), "class" => "datetimepicker"]) ?>
                      <?= $this->Form->input('sport',["value" => $current->sport]) ?>
                      <?= $this->Form->input('description',["value" => $current->description]) ?>
                      <?= $this->Form->input('location_name',["value" => $current->location_name]) ?>
                      <br>
                      <?= $this->Form->input('contest_id', array(
                              'type' => 'text',
                              'value' => $current->contest_id
                          ));  ?>

                      <?= $this->Form->input('contest_id',["value" => $current->contest_id, "type" => "text"]) ?>

                      <br>
                      <?= $this->Form->submit('Editer', array('class' => 'button','class' => 'btn btn-theme btn-block', 'name' =>'editer')); ?>
                      <?= $this->Form->end(); ?>
        
        </details>

                </div>
    <!-- /.modal-content -->
  </div>
      <!-- /.modal-dialog -->
    </div>