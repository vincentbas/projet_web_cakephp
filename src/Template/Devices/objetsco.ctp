<section class="container">
	<div class="row">
		<div class="col-md-6">
			<div class="form-device">
				<h2 class="form-device-heading">Ajouter un Device</h2>
				<div class="device-wrap">
						<?= $this->Form->create("Devices"); ?>
							<?= $this->Form->input('member_id', ['type' => 'text', 'label' => false, 'value'=>$this->request->Session()->read('Auth.User.id')]) ?>
							<?= $this->Form->input('serial', ['type' => 'text', 'label' => false, 'placeholder' => 'Serial']) ?>
							<?= $this->Form->input('description',['type' => 'text', 'label' => false, 'placeholder' => 'Description']) ?>
							<?= $this->Form->input('trusted',['label' => false, 'placeholder' => 'Trusted']) ?>
							<br>
							<?= $this->Form->submit('Ajouter', array('class' => 'button','class' => 'btn btn-theme btn-block', 'name' =>'ajouter')); ?>
							<?= $this->Form->end(); ?>
	      </div>
	    </div>
	  </div>

		<div class="col-md-6">
			<div class="form-device">
				<h2 class="form-device-heading">Supprimer un Device</h2>
				<div class="device-wrap">
						<?= $this->Form->create("Devices"); ?>
							<?= $this->Form->input('id', ['type' => 'text', 'label' => false, 'text', 'placeholder' => 'Supprimer id',]) ?>
							<br>
							<?= $this->Form->submit('Supprimer', array('class' => 'button','class' => 'btn btn-theme btn-block', 'name' =>'supprimer')); ?>
							<?= $this->Form->end(); ?>
				</div>
			</div>
		</div>
	</div>
	<div>
		<h2>
			Tous mes appareils :
		</h2>
		<div class="container">
			<table id="myTable" class="table table-condensed">
				<tr>
					<th>Id</th>
					<th>Membre</th>
					<th>Serial</th>
					<th>Description</th>
					<th>Validé</th>
				</tr>
				<?php foreach ($ws as $w){ ?>
					<tr class="success">
					<?php
						echo "<td>".$w->id."</td>";
						echo "<td>".$w->member_id."</td>";
						echo "<td>".$w->serial."</td>";
						echo "<td>".$w->description."</td>";
						echo "<td>".$w->trusted."</td>";
					?>
					</tr>
				<?php } ?>
			</table>
		</div>
	</div>
</section>
