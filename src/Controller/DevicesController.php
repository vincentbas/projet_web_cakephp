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
	function add()
	{

    }


}
