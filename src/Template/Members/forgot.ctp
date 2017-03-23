<div id="login-page">
  <div class="container">
  
      <div class="form-login">
        <h2 class="form-login-heading">Réinitialiser votre mot de passe</h2>
        <div class="login-wrap">
            <?= $this->Form->create(); ?>
            <?= $this->Form->input('email', ['label' => false, 'placeholder' => 'Email']);?>
            <br>
            <?= $this->Form->submit('Réinitialiser', array('class' => 'button','class' => 'btn btn-theme btn-block'));?>
            <?= $this->Form->end(); ?>

                    
        </div>
        <h2 class="form-login-heading"><?php echo $this->Flash->render('new_mdp') ?>
        <br>
        <div class="registration centered">
                <?= $this->Html->link('Connexion', array('controller' => 'Members', 'action' => 'login'), array('class' => 'lien_noir'));?>
            </div></h2>
      </div>
  
  </div>
  
</div>