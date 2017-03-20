<?php

namespace App\Controller;
use App\Controller\AppController;

class DevicesController extends AppController
{

	//page E Objets Connectés
    function objetsco()
    {
		$this->loadModel("Devices");
		$w=$this->Devices->find();
		$this->Set("ws",$w->toArray());
    }

	  function addobjets()
	  {
			//1
			$id=1;
			//if(!$id)$this->redirect(index);

			//2
			$this->loadModel("Devices");
			if ($this->request->is("post")){
				$serial=$this->request->data["serial"];
				$description=$this->request->data["description"];
				$trusted=$this->request->data["trusted"];
				$this->Devices->addobjets($serial, $description, $trusted);
			}

			//3
			$obj=$this->Devices->myobjets($id);
			$this->set("obj",$obj);
		}


}
