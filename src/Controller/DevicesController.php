<?php

namespace App\Controller;
use App\Controller\AppController;

class DevicesController extends AppController
{

	//page E Objets Connectés
    function objetsco()
    {
		$this->loadModel("Devices");
		$w=$this->Devices->find()->where(["member_id"=>$this->request->Session()->read('Auth.User.id')]);
		$this->Set("ws",$w->toArray());

      if ($this->request->is("post")){
        if(isset($_POST['ajouter'])){
          $member_id=$this->request->data["member_id"];
          $serial=$this->request->data["serial"];
          $description=$this->request->data["description"];
          $trusted=$this->request->data["trusted"];
          $this->Devices->addobjets($member_id, $serial, $description, $trusted);
        }
        elseif(isset($_POST['supprimer'])){
          // Dans un controller.
          $id=$this->request->data["id"];
          $this->Devices->suppobjets($id);
        }
      }
    }

	  /*function addobjets()
	  {
			//1
			$id=1;

			//2
			$this->loadModel("Devices");
      if(!$id)$this->redirect(index);
  			if ($this->request->is("post")){
  				$serial=$this->request->data["serial"];
  				$description=$this->request->data["description"];
  				$trusted=$this->request->data["trusted"];
  				$this->Devices->addobjets($serial, $description, $trusted);
  			}
      }
			//3
			$obj=$this->Devices->myobjets($id);
			$this->set("obj",$obj);
		}*/


}
