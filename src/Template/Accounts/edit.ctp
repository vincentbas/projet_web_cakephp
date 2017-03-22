<div class="form-login">
	<div class="login-wrap">
		<?= $this->Form->create('Member', ['type' => 'file', 'class' => 'edit-photo-form']); ?>
		<?= $this->Form->input('avatar_file', ['type' => 'file', 'label' => 'Importez votre photo (JPG ou PNG)']);?>
		<?= $this->Form->input('email_new', array('label' => 'addresse email', 'value' => $member_info->email));?>
		<?= $this->Form->input('password', array('type' => 'password',
												'label' => 'Mot de passe actuel'));?>
		<?= $this->Form->input('password_new', array('type' => 'password',
												'label' => 'Nouveau mot de passe'));?>							
		<?= $this->Form->submit('importer', array('class' => 'button','class' => 'btn btn-theme btn-block'));?>
		<?= $this->Form->end(); ?>
	</div>
</div>
<?php echo $this->Flash->render('error') ?>