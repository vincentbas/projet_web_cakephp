<section class="container">
	<div class="row">
		<div class="panel panel-default">
			<div class="panel-heading"><i class="fa fa-keyboard-o"></i> Ajouter ou supprimer un Device</div>
			<div class="panel-body">
				<details>
						<summary>Vous n'avez pas encore de device, cliquez ici</summary>
						<div class="col-md-12">
							<div class="form-device">
								<h2 class="form-device-heading">Ajouter un Device</h2>
								<div class="device-wrap">
										<?= $this->Form->create("Devices"); ?>
											<?= $this->Form->input('member_id', ['type' => 'text', 'label' => false, 'value'=>$this->request->Session()->read('Auth.User.id')]) ?>
											<?= $this->Form->input('serial', ['type' => 'text', 'label' => false, 'placeholder' => 'Serial']) ?>
											<?= $this->Form->input('description',['type' => 'text', 'label' => false, 'placeholder' => 'Description']) ?>
											<br>
											<?= $this->Form->submit('Ajouter', array('class' => 'button','class' => 'btn btn-theme btn-block', 'name' =>'ajouter')); ?>
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
			</div>
		</div>
		<?php foreach ($ws as $w){ ?>
		<div class="col-lg-4">
			<div class="height_device">
				<div class="cover">
					<?php echo $this->Html->image('presentation/fond_service.jpg', ['alt' => '']);?>
				</div>
				<?php echo $this->Html->image('presentation/001-star.png', ['alt' => '', 'class' => 'photo']);?><br/><br/>
				<?php
					echo "<li><p>Id : ".$w->id."</p></li>";
					echo "<li><p>Membre : ".$w->member_id."</p></li>";
					echo "<li><p>Sérial : ".$w->serial."</p></li>";
					echo "<li><p>Description : ".$w->description."</p></li>";
					echo "<li><p>Validation : ".$w->trusted."</p></li>";
					echo "<li><p>".$this->Form->postLink(__('Suppression'), ['action' => 'delete', $w['id']], ['confirm' => __('Êtes vous sur de vouloir supprimer # {0}?', $w['id'])])."</p></li>";
				?>
			</div>
		</div>
		<?php } ?>
	</div>
</section>
