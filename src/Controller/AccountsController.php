<?php

namespace App\Controller;
use App\Controller\AppController;

class AccountsController extends AppController
{
	//page A.1 Présentation
    function presentation()
    {
		
    }
    //page Profil
    function profil()
    {
        $uid = $this->Auth->user('id');

        $this->loadModel('Workouts');
        $this->set('Workouts', $this->Workouts->find('all')
             ->where(['member_id' => $uid]));

        $this->loadModel('Earnings');
        $this->set('Earnings',$this->Earnings->find('all')
            ->where(['member_id' => $uid]));
    }
	//page A.2 Equipe
    function equipe()
    {
		
    }
	//page A.3 Utilisation
    function utilisation()
    {
		
    }
	//page B.1 Statistiques
    function statistiques()
    {
		
    }
	//page B.2 Badges
    function badges()
    {
		
    }
	//page C.1 Calendrier
    function calendrier()
    {
		
    }
	//page C.2 Entraînements
    function entrainements()
    {
		
    }
	//page D Classement
    function classement()
    {
		
    }
    function seances()
    {

        $this->loadModel("Workouts");
        $w = $this->Workouts->find();
        $this->Set("ws",$w->toArray());

    }
	//page F Mentions Légales
    function mentions()
    {
		
    }
	//page G FAQ
    function faq()
    {
		
    }
	//page H CNIL
    function cnil()
    {
		
    }
}
