<div class="form-login">
	<div class="login-wrap">
		<?= $this->Form->create('Member', ['type' => 'file', 'class' => 'edit-photo-form']); ?>
		<?= $this->Form->input('avatar_file', ['type' => 'file', 'label' => 'Importez votre photo (JPG ou PNG)']);?>
		<?= $this->Form->submit('importer', array('class' => 'button','class' => 'btn btn-theme btn-block'));?>
		<?= $this->Form->end(); ?>
	
	</div>
</div>