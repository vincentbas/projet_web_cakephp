<div class="form-login">
	<h2 class="form-login-heading">Inscrivez-vous</h2>
	<div class="login-wrap">
	    <?= $this->Form->create(); ?>
		<?= $this->Form->input('email');?>
		<?= $this->Form->input('password', array('type' => 'password',
												'label' => 'mot de passe'));?>
		<br>
		<?= $this->Form->submit('Valider', array('class' => 'button btn btn-theme btn-block'));?>
		<?= $this->Form->end(); ?>     
	</div>
</div>