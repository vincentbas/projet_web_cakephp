<div id="login-page">
	<div class="container">
	
      <div class="form-login">
        <h2 class="form-login-heading">Connectez-vous</h2>
        <div class="login-wrap">
            <?= $this->Form->create(); ?>
			<?= $this->Form->input('email', ['label' => false, 'placeholder' => 'Email']);?>
			<?= $this->Form->input('password', ['type' => 'password', 'label' => false, 'placeholder' => 'Mot de Passe']);?>
			<br>
			<?= $this->Form->submit('Login', array('class' => 'button','class' => 'btn btn-theme btn-block'));?>
			<?= $this->Form->end(); ?>
            <label class="checkbox">
                <span class="pull-right">
                    <?= $this->Html->link('Mot de passe oublié ?', array('controller' => 'Members', 'action' => 'forgot'), array('class' => 'lien_noir'));?>
                </span>
            </label>
            

            <hr>
            
            <div class="registration">
                Pas encore inscrit ?<br/>
                <?= $this->Html->link('Créer un compte', array('controller' => 'Members', 'action' => 'add'), array('class' => 'lien_noir'));?>
            </div>

        </div>

      </div>	  	
	
	</div>
</div>