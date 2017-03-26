
  <div class="panel panel-default  panel_position">
    <div class="panel-heading"><i class="fa fa-sign-in"></i> <strong>Comment s'inscrire sur SportManager?</strong></div>
    <div class="panel-body">
      <details>
          <summary>En savoir +</summary><br/>
            Est-ce que je possède un compte ? <br/><br/>
            <div class="col-md-12">
              <strong>NON</strong><br/>
              En tant qu'utilisateur, saisissez vos identifiants dans cette zone :<br/>
            </div>

            <div class="col-md-6">
              - Cliquez sur "Pas encore inscrit ? Créer un compte"<br/><br/>
              <?php echo $this->Html->image('faq/form_connexion.jpg', ['alt' => 'Form Connexion', 'class' => ' img-center', 'width'=>'200px']);?>
            </div>
            <div class="col-md-6">
              - Renseignez une adresse mail et un mot de passe sur l'interface suivante.<br/><br/>
              <?php echo $this->Html->image('faq/form_inscription.jpg', ['alt' => 'Form Inscription', 'class' => ' img-center', 'width'=>'200px']);?>
            </div>
            <br/>
            <div class="col-md-12">
              <strong>OUI</strong><br/>
              Alors saisissez vos identifiants dans le formulaire d'inscription présenté un peu plus haut
            </div>
        </details>
      </div>
    </div>

    <div class="panel panel-default ">
      <div class="panel-heading"><i class="fa fa-unlock-alt"></i> <strong>Mot de passe Oublié, que faire?</strong></div>
      <div class="panel-body">
        <details>
            <summary>En savoir +</summary><br/>
              <div class="col-md-12">
                <strong>Comment récupérer son mot de passe facilement en trois étapes</strong><br/><br/>
              </div>

              <div class="col-md-4">
                - Cliquez sur "Mot de Passe Oublié" présent sur le formulaire de connexion<br/><br/>
                <?php echo $this->Html->image('faq/form_connexion.jpg', ['alt' => 'mdp oublié étape 1', 'class' => ' img-center', 'width'=>'200px']);?>
              </div>
              <div class="col-md-4">
                - Tapez votre adresse mail, puis cliquez sur le bouton réinitialiser<br/><br/>
                <?php echo $this->Html->image('faq/mdp_oublie2.jpg', ['alt' => 'mdp oublié étape 2', 'class' => ' img-center', 'width'=>'200px']);?>
              </div>
              <div class="col-md-4">
                - Après quelques secondes, un nouveau mdp est généré. Vous pouvez vous re-connecter avec votre nouveau mot de passe en appuyant sur Connexion<br/><br/>
                  <?php echo $this->Html->image('faq/mdp_oublie3.jpg', ['alt' => 'mdp oublié étape 3', 'class' => ' img-center', 'width'=>'200px']);?>
              </div>
        </details>
      </div>
    </div>

    <div class="panel panel-default">
      <div class="panel-heading"><i class="fa fa-user"></i> <strong>Comment changer ses informations personnelles?</strong></div>
      <div class="panel-body">
        <details>
            <summary>En savoir +</summary><br/>
            <div class="col-md-12">
              <strong>&Eacute;diter sa photo de profil ou son mot de passe</strong><br/><br/>
            </div>

            <div class="col-md-4">
              - allez sur l'onglet du menu <em>Mon Profil</em>, puis cliquez sur le bouton "Edit" juste en dessous de la photo de profil<br/><br/>
              <?php echo $this->Html->image('faq/edition_profil1.jpg', ['alt' => 'mdp oublié étape 1', 'class' => ' img-center', 'width'=>'300px']);?>
            </div>
            <div class="col-md-4">
              - Importez votre fichier en cliquant sur parcourir et appuyez sur importer<br/><br/>
              <?php echo $this->Html->image('faq/edition_profil2.jpg', ['alt' => 'mdp oublié étape 2', 'class' => ' img-center', 'width'=>'300px']);?>
            </div>
            <div class="col-md-4">
              - Vous êtes immédiatement rediiger sur votre page <em>Mon Profil</em> avec votre photo de pofil mise à jour.<br/><br/>
                <?php echo $this->Html->image('faq/edition_profil3.jpg', ['alt' => 'mdp oublié étape 3', 'class' => ' img-center', 'width'=>'300px']);?>
            </div>
        </details>
      </div>
    </div>

    <div class="panel panel-default">
      <div class="panel-heading"><i class="fa fa-map-marker"></i> <strong>&Agrave; quoi correspond la rubrique Localisation?</strong></div>
      <div class="panel-body">
        <details>
            <summary>En savoir +</summary><br/>
            <div class="col-md-12">
              Le menu <em>Localisation</em> affiche les coordonnées des séances d'entraînements passées.<br/><br/>
              <?php echo $this->Html->image('faq/localisation.jpg', ['alt' => 'marker localisation', 'class' => ' img-center', 'width'=>'500px']);?>
            </div>
        </details>
      </div>
    </div>

    <div class="panel panel-default">
      <div class="panel-heading"><i class="fa fa-book"></i> <strong>Quels sont les paramètres qui rentrent en compte dans le classement des membres?</strong></div>
      <div class="panel-body">
        <details>
            <summary>En savoir +</summary><br/>
            <div class="col-md-12">
              Le classement des membres dans la rubrique <em>Classement</em> est calculé en faisant la somme des logs values de chaque séance. Bien évidémment, une correspondance est réalisé entre l'exercice réalisé et le résultat. Par exemple, un match de tennis gagné rapporte 5 points tandis qu'un marathon terminé en rapporte 15.<br/><br/>
              <?php echo $this->Html->image('faq/classement.jpg', ['alt' => 'classement membres', 'class' => ' img-center', 'width'=>'1000px']);?>
            </div>
        </details>
      </div>
    </div>
