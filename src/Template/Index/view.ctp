<style>
header, aside, footer{
	display:none;
}
#main-content{
	margin-left:0px;
}
.wrapper, .container, .main-chart{
	margin:0;
	padding:0;
}
</style>
<div class="background">
	<?php echo $this->Html->image('presentation/background.jpg', ['alt' => 'fond présentation', 'style' => 'background-size:cover; width:100%;height:auto;']);?>
	<div class="titre_site">
			<h1><strong>SportManager</strong></h1><br>
			<p class="text-center">Rejoignez la platefome SportManager, site web de gestion d'activité sportive. L'utilisateur pourra enregistrer des séances, ajouter des informations concernant l'entraînement, gérer sa carrière sportif. Bref avoir une synthèse de son activité et de celle de ses contacts</p>
	</div>
	<?= $this->Html->link("<div class='button btn btn-theme btn-block style_btn1'>Connexion</div>", ['controller' => 'Members', 'action' => 'login'], ['escape'=>false]) ?>
	<?= $this->Html->link("<div class='button btn btn-theme btn-block style_btn2'>Inscription</div>", ['controller' => 'Members', 'action' => 'add'], ['escape'=>false]) ?>
	<?= $this->Html->link("<div class='button btn btn-theme btn-block style_btn3'>Classement</div>", ['controller' => 'Accounts', 'action' => 'classement'], ['escape'=>false]) ?>
	<div class="service1 text-center">
		<li class="icon_service"><?php echo $this->Html->image('presentation/service1.png', ['alt' => 'service1']);?></i></li>
		<li>Suivre et Analyser votre activité physique</li>
	</div>
	<div class="service2 text-center">
		<li class="icon_service"><?php echo $this->Html->image('presentation/service2.png', ['alt' => 'service2']);?></li>
		<li>Programmer et Planifier vos séances d'entraînements</li>
	</div>
	<div class="service3 text-center">
		<li class="icon_service"><?php echo $this->Html->image('presentation/service3.png', ['alt' => 'service3']);?></li>
		<li>Améliorer<br/>vos performances physiques</li>
	</div>
	<div class="service4 text-center">
		<li class="icon_service"><?php echo $this->Html->image('presentation/service4.png', ['alt' => 'service4']);?></li>
		<li>Créer et étendre votre communauté de sportifs</li>
	</div>
	<div class="service5 text-center">
		<li class="icon_service"><?php echo $this->Html->image('presentation/service5.png', ['alt' => 'service5']);?></li>
		<li>Gérer vos évènements et autres compétitions sportives</li>
	</div>
	<div class="service6 text-center">
		<li class="icon_service"><?php echo $this->Html->image('presentation/service6.png', ['alt' => 'service6']);?></li>
		<li>Localiser vos séances d'entraînements</li>
	</div>
</div>
