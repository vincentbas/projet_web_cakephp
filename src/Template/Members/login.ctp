<div id="login-page">
	<div class="container">
	
      <div class="form-login">
        <h2 class="form-login-heading">Connectez-vous</h2>
        <div class="login-wrap">
            <?= $this->Form->create(); ?>
			<?= $this->Form->input('email');?>
			<?= $this->Form->input('password', array('type' => 'password'));?>
			<br>
			<?= $this->Form->submit('Login', array('class' => 'button','class' => 'btn btn-theme btn-block'));?>
			<?= $this->Form->end(); ?>
            <label class="checkbox">
                <span class="pull-right">
                    <a data-toggle="modal" href="login.html#myModal"> Mot de passe oublié ?</a>

                </span>
            </label>
            

            <hr>
            
            <div class="registration">
                Pas encore inscrit ?<br/>
                <?= $this->Html->link('Créer un compte', ['controller' => 'Members', 'action' => 'add']);?>
            </div>

        </div>

          <!-- Modal -->
          <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
              <div class="modal-dialog">
                  <div class="modal-content">
                      <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                          <h4 class="modal-title">Forgot Password ?</h4>
                      </div>
                      <div class="modal-body">
                          <p>Enter your e-mail address below to reset your password.</p>
                          <input type="text" name="email" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix">

                      </div>
                      <div class="modal-footer">
                          <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
                          <button class="btn btn-theme" type="button">Submit</button>
                      </div>
                  </div>
              </div>
          </div>
          <!-- modal -->

      </div>	  	
	
	</div>
</div>