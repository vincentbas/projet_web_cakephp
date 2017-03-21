<section class="container">
	<div class="row">
		<div class="panel panel-default">
			<div class="panel-heading"><i class="fa fa-keyboard-o"></i> Ajouter ou supprimer un Device</div>
			<div class="panel-body">
				<details>
						<summary>Vous n'avez pas encore de device, cliquez ici</summary>
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
					</details>
				</div>
			</div>
	</div>

	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-heading"><i class="fa fa-keyboard-o"></i> Tous mes appareils :</div>
				<div class="panel-body">
					<table id="myTable" class="table table-condensed">
						<tr>
							<th>Id</th>
							<th>Membre</th>
							<th>Serial</th>
							<th>Description</th>
							<th>Validé</th>
							<th>Delete</th>
						</tr>
						<?php foreach ($ws as $w){ ?>
							<tr class="success">
							<?php
								echo "<td>".$w->id."</td>";
								echo "<td>".$w->member_id."</td>";
								echo "<td>".$w->serial."</td>";
								echo "<td>".$w->description."</td>";
								echo "<td>".$w->trusted."</td>";
								echo "<td><i class='fa fa-close'></i></td>";
							?>
							</tr>
						<?php } ?>
					</table>
				</div>
			</div>
		</div>
	</div>
</section>
