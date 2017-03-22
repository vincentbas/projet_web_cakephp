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
                      <?= $this->Form->input('member_id', ['type' => 'text', 'label' => false, 'value'=>$this->request->Session()->read('Auth.User.id')]) ?>

                      <?= $this->Form->input('serial', ['type' => 'text', 'label' => false, 'placeholder' => 'Serial']) ?>
                      <?= $this->Form->input('description',['type' => 'text', 'label' => false, 'placeholder' => 'Description']) ?>
                      <?= $this->Form->input('trusted',['label' => false, 'placeholder' => 'Trusted']) ?>
                      <br>
                      <?= $this->Form->submit('Ajouter', array('class' => 'button','class' => 'btn btn-theme btn-block', 'name' =>'ajouter')); ?>
                      <?= $this->Form->end(); ?>
        
        </details>

                </div>
    <!-- /.modal-content -->
  </div>
      <!-- /.modal-dialog -->
    </div>