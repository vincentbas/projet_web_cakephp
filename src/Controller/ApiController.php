<?php

namespace App\Controller;
use App\Controller\AppController;
use Cake\ORM\TableRegistry;

class ApiController extends AppController
{
  public function registerdevice($id = null, $obj = null, $desc = null)
  {
  	if($id == null || $obj == null || $desc == null) {
  		$this->set('isTrusted', false);//echec de la connexion (problème avec les params)
  	}
  	else {
  		$this->loadModel('Devices');
  		$this->Devices->addobjets($id, $obj, $desc);
  		$this->set('isTrusted', true);
  	}
    return $this->redirect(['controller' => 'Accounts', 'action' => 'objetsco']);
  }

  public function workoutparameters($obj = null, $id = null)
  {
    if($obj == null || $id == null) {
  		$this->set('isTrusted', false);//echec de la connexion (problème avec les params)
  	}
    else{
      $this->loadModel('Devices');
      $this->loadModel('Logs');

      $dev=$this->Devices->find()->where(['serial'=>$obj]);
      $member=$dev->toArray()->member_id;
      $value=$this->Logs->find()->where(['member_id'=>$member, 'id' => $id]);

      $this->set('isTrusted', true);
    }
    $this->Set("valueLog",$value->toArray());
  }

  public function addlog($id = null, $obj = null, $desc = null)
  {

  }

  public function getsummary($id = null, $obj = null, $desc = null)
  {

  }
}
