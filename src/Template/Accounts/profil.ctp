<div class="centered donut-chart">
    <h2><?= $this->request->Session()->read('Auth.User.email'); ?></h2>

    <div class="row mt">
    	<?= $this->Html->image('profil/fr-03', ['alt' => 'CakePHP']); ?>
    </div>

</div>