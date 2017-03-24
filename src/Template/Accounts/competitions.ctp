<section class="container">
	<div class="row">
    <div class="col-md-12">
      <h4>Compétitions</h4>
      <details>
		  <summary id="ajout">Cliquez pour ajouter une compétition</summary>
        <div class="col-md-12">
          <div class="form-device">
            <h2 class="form-device-heading">Ajouter une compétition</h2>
            <div class="device-wrap">
              <?= $this->Form->create('Compétitions'); ?>
                <?= $this->Form->input('name', ['type' => 'text', 'label' => false, 'placeholder' => 'Nom']) ?>
                <?= $this->Form->input('type', ['type' => 'text', 'label' => false, 'placeholder' => 'Type']) ?>
                <?= $this->Form->input('description',['type' => 'text', 'label' => false, 'placeholder' => 'Description']) ?>
                <br>
                <?= $this->Form->submit('Ajouter', array('class' => 'button','class' => 'btn btn-theme btn-block', 'name' =>'ajouter')); ?>
              <?= $this->Form->end(); ?>

            </div>
          </div>
        </div>
      </details>
    </div>
  </div>
    <br>
  <div class="row">
    <div class="col-md-12">
      <div class="panel panel-default">
        <div class="panel-heading"><i class="fa fa-soccer-ball-o"></i> Les compétitions</div>
      </div>
    </div>
    <?php foreach ($compet as $c){ ?>
    <div class="col-lg-4">
      <div class="height_device">
        <div class="cover">
          <?php echo $this->Html->image('competition/compet.jpg', ['alt' => '']);?>
        </div>
        <?php echo $this->Html->image('competition/trophy.png', ['alt' => '', 'class' => 'photo', 'style'=> 'background-color:#fff;']);?><br/><br/>
        <?php
          echo "<li><p>Nom : ".$c->name."</p></li>";
          echo "<li><p>Type : ".$c->type."</p></li>";
          echo "<li><p>Description : ".$c->description."</p></li>";
          foreach ($Workouts as $w){
            if($w['contest_id'] == $c->id){
            echo "<li><p>match : ".$w['description']."</p></li>";
          }
          }
          echo "<li><p>".$this->Form->postLink(__('Suppression'), ['action' => 'delete', $c['id']], ['confirm' => __('Êtes vous sur de vouloir supprimer # {0}?', $c['id'])])."</p></li>";
        ?>
      </div>
    </div>
    <?php } ?>
  </div>
</section>
