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
  		$this->Devices->addobjetsv($id, $obj, $desc);
  		$this->set('isTrusted', true);
      //$this->Devices->updateobjetsco($did);
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
      $member=$dev->toArray()[0]->member_id;
      $value=$this->Logs->find()->where(['member_id'=>$member, 'id' => $id]);

      $this->set('isTrusted', true);
    }
    $this->Set("valueLog",$value->toArray());
  }

  public function addlog($id = null, $obj = null, $desc = null)
  {

  }

  public function getsummary($obj = null)
  {
    if($obj == null) {
      $this->set('isTrusted', false);//echec de la connexion (problème avec les params)
    }
    else{
      $this->loadModel('Devices');
      $this->loadModel('Logs');
      $dev=$this->Devices->find()->where(['serial'=>$obj]);
      $member=$dev->toArray()[0]->member_id;
      $value=$this->Logs->find()->where(['member_id'=>$member])->order(['date' => 'ASC'])->limit(3)->offset(1);

      $this->set('isTrusted', true);
    }
    $this->Set("valueLog",$value->toArray());
  }
}
