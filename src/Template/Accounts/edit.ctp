<div class="form-login">
	<div class="login-wrap">
		<?= $this->Form->create('Member', ['type' => 'file', 'class' => 'edit-photo-form']); ?>
		<?= $this->Form->input('Importer une nouvelle photo', ['type' => 'file']);?>
		<?= $this->Form->submit('Importer', array('class' => 'button','class' => 'btn btn-theme btn-block'));?>
		<?= $this->Form->end(); ?>
	
	</div>
</div>