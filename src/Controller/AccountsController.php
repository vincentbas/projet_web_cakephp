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
        $this->loadModel("Workouts");
        $workouts = $this->Workouts->find("all");
        dd($workouts);
    }
    function seances()
    {

        $this->loadModel("Workouts");
        $w = $this->Workouts->find()->where(["member_id"=>$this->request->Session()->read('Auth.User.id')]);
        $this->Set("ws",$w->toArray());

        if ($this->request->is("post")){
        if(isset($_POST['ajouter'])){
          $number=$number++;
          $member_id=$this->request->data["member_id"];
          $location=$this->request->data["location_name"];
          $description=$this->request->data["description"];
          $sport=$this->request->data["sport"];
          $date=$this->request->data["date"];
          $date_end=$this->request->data["date_end"];
          $contest_id=$this->request->data["contest_id"];


          $this->Workouts->addobjets($id,$member_id, $date,$date_end, $description, $location_name,$contest_id);
        }
        /*elseif(isset($_POST['supprimer'])){
          // Dans un controller.
          $id=$this->request->data["id"];
          $this->Workouts->suppobjets($id);
        }*/
      }

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
        }

    }

}
