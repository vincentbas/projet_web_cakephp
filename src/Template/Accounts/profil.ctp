<div class="centered donut-chart">
    <div class="row mt">
    	<?= $this->Html->image('profils/'.$this->request->Session()->read('Auth.User.id').'.jpg', array('class' => 'avatar', 
    												'alt' => 'profil',
    												'url' => array('controller' => 'Accounts', 'action' => 'profil'))); ?>
	</div>
    	 <h3><?= $this->request->Session()->read('Auth.User.email'); ?></h3>
			<br><br><br><br>

			<div class="col-md-4 col-sm-4 mb">
                <div class="white-panel pn donut-chart">
                    <div class="white-header">
                        <h5>SPORTS</h5>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-xs-6 goleft">
			            	<table>
								<?php foreach($Workouts as $t){
								echo "<tr>"."<td>".$t->sport."</td>"."</tr>";
								}?>
							</table>
                        </div>
                    </div>
                    <canvas id="serverstatus01" height="120" width="120"></canvas>
                </div>
            </div>

            <div class="col-md-4 col-sm-4 mb">
                <div class="white-panel pn donut-chart">
                    <div class="white-header">
                        <h5>BADGES</h5>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-xs-6 goleft">
			            	<table>
								<?php foreach($Earnings as $e){
								echo "<tr>"."<td>".$e->sticker_id."</td>"."</tr>";
								}?>
							</table>
                        </div>
                    </div>
                    <canvas id="serverstatus01" height="120" width="120"></canvas>
                </div>
            </div>

     </div>
</div>