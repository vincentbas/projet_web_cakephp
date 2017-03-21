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
        $this->loadModel("Workouts");
        $workouts = $this->Workouts->find("all");
        dd($workouts);
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
        //Si le formulaire a été envoyé
        if ($this->request->is('post')) {
            //Si il y a bien un fichier d'uploadé
            if(!empty($this->request->data['avatar_file'])){
                //On stock l'image et son extension
                $image = $this->request->data['avatar_file'];
                $extension = strtolower(pathinfo($image['name'], PATHINFO_EXTENSION));
                //Si l'extension est bien jpg
                if(in_array($extension, array('jpg'))){
                    //On initialise le chemin voulu pour stocker l'image
                    $path = $this->webroot .'img/profils/' . $this->request->Session()->read('Auth.User.id').'.jpg';
                    //Si l'utilisateur a déjà une photo de profil
                    if(file_exists($path)){
                        //On la supprime
                        unlink($path);
                    }
                    //On déplace l'image dans le chemin voulu
                    move_uploaded_file($image['tmp_name'], $path);
                    //L'utilisateur est redirigé vers son profil
                    $this->redirect(array(
                        'controller' => 'accounts',
                        'action' => 'profil')
                    );

                }else{
                    //Messages d'erreurs si quelque chose n'a pas marché
                $this->Flash->error("Erreur lors de l'importation de votre fichier (Fichiers autorisés < 2Mo et format jpg)", array(
                    'key' => 'error'
                ));
            }
            }else{
                $this->Flash->error("Erreur lors de l'importation de votre fichier (Fichiers autorisés < 2Mo et format jpg)", array(
                    'key' => 'error'
                ));
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