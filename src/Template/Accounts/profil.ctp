<div class="centered donut-chart">
    <div class="row mt">
        <?php 
        if(file_exists(WWW_ROOT.'img'. DS . 'profils'. DS . $this->request->Session()->read('Auth.User.id').'.'.'jpg')){
            echo($this->Html->image('profils/'.$this->request->Session()->read('Auth.User.id').'.jpg', array('class' => 'avatar', 
                                                    'alt' => 'profil',
                                                    'url' => array('controller' => 'Accounts', 'action' => 'profil'))));
        }else{
            echo($this->Html->image('profils/default.jpg', array('class' => 'avatar', 
                                                    'alt' => 'profil',
                                                    'style' => 'height:200px;',
                                                    'url' => array('controller' => 'Accounts', 'action' => 'profil'))));
        }
        
    ?>
    	 
	</div>
    <button class="edit-button">
        <?= $this->Html->link('<i class="fa fa-pencil" style="margin-right:5px;"></i><span>Edit</span>', ['controller' => 'Accounts', 'action' => 'edit'], ['escape'=>false]) ?>
    </button>
        
    	 <h3><?= $user->email ?></h3>
			<br>

			<div class="col-md-4 col-sm-4 mb">
                <div class="white-panel pn donut-chart">
                    <div class="white-header">
                        <h5>SPORTS</h5>
                    </div>
                    <div>
                        <div class="col-sm-6 col-xs-6 goleft">
			            	<table>
								<?php foreach($workouts as $w){
								echo "<tr>"."<td>".$w->sport."</td>"."</tr>";
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
                    <div>
                        <div class="col-sm-6 col-xs-6 goleft">
			            	<table>
								<?php 
                                    foreach($Stickers as $s){
                                        echo "<tr>"."<td class='rewards'>".$this->Html->image('sticker.png', array('width' => '25px')).$s['name']."</td>"."</tr>";
                                    }
								?>
							</table>
                        </div>
                    </div>
                    <canvas id="serverstatus01" height="120" width="120"></canvas>
                </div>
            </div>

            <div class="col-md-4 col-sm-4 mb">
                <div class="white-panel pn donut-chart">
                    <div class="white-header">
                        <h5>CLASSEMENT</h5>
                    </div>
                    <div>
                        <div class="col-sm-6 col-xs-6 goleft">
                            <table>
                                
                            </table>
                        </div>
                    </div>
                    <canvas id="serverstatus01" height="120" width="120"></canvas>
                </div>
            </div>

     </div>
</div>