
<?php echo $this->Html->css('bootstrap');?>

<section class="container">
	<div>
		<h2>
			Ajouter un appareil connecté :
		</h2>
		<?=$this->Form->create();?>
		<?=$this->Form->input('serial',array('class'=>'form-control'));?><br/>
		<?=$this->Form->input('description',array('class'=>'form-control'));?><br/>
		<?=$this->Form->input('trusted',array('class'=>'form-control'));?><br/>
		<?=$this->Form->submit('Envoyer', array('class'=>'btn btn-primary'));?><br/>
		<?=$this->Form->end();?>
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

<?php echo $this->Html->script('bootstrap');?>