<?php

namespace App\Controller;
use App\Controller\AppController;   
use Cake\ORM\TableRegistry;

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

        $this->loadModel('Stickers');
        $stickersNames = $this->Stickers->getStickerName($uid);
        $this->set('Stickers',$stickersNames);

    
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
  //page H CNIL
    function localisation()
    {

    }

    function edit()
    {
        if ($this->request->is('post')) {
            if(!empty($this->request->data['avatar_file'])){
                $image = $this->request->data['avatar_file'];
                if(in_array('jpg', array('jpg'))){
                    $path = $this->webroot .'img/profils/' . $this->request->Session()->read('Auth.User.id').'.jpg';
                    if(file_exists($path)){
                        unlink($path);
                    }
                    move_uploaded_file($image['tmp_name'], $path);
                    $this->redirect(array(
                        'controller' => 'accounts',
                        'action' => 'profil')
                    );

                }
            }
            else{

            }


             if((!empty($this->request->data['email'])&&($this->request->data['email_new']))||(($this->request->data['password'])&&($this->request->data['password_new']))){
                
                $email = $this->request->data['email'];
                $email_new = $this->request->data['email_new'];
                $password = $this->request->data['password'];
                $password_new = $this->request->data['password_new'];

                $tablename = TableRegistry::get('Members');
                $query = $tablename->query();
                $result = $query->update()
                    ->set(['email' => $email_new])
                    ->where(['email' => $email])
                    ->execute();
                
        }

    }
}


}