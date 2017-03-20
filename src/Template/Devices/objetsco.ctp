<section class="container">
	<div class="col-md-12 text-center">
            <div class="card">
                <div>
                    <div>
                        <?= $this->Form->create("Devices") ?>
                            <fieldset>
                                <?= $this->Form->input('serial') ?>
                                <?= $this->Form->input('description') ?>
                                <?= $this->Form->input('trusted') ?>
                            </fieldset>
                            <?= $this->Form->submit('Ajouter', array('class' => 'btn btn-default margin-top')); ?>
                        <?= $this->Form->end() ?>
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
