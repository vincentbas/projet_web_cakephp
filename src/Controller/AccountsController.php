<?php

namespace App\Controller;
use App\Controller\AppController;
use Cake\ORM\TableRegistry;

class AccountsController extends AppController
{

    //page Profil
    function profil()
    {
        $uid = $this->Auth->user('id');

        $this->loadModel('Members');
        $u = $this->Members->find()->where(["id"=>$uid]);
        $this->set("user", $u->toArray()[0]);

        $this->loadModel('Workouts');
        $w = $this->Workouts->find()->where(['member_id' => $uid])->group(['sport']);
        $this->set("workouts", $w->toArray());

        $this->loadModel('Contests');
        $contestNames = $this->Contests->getContestName($uid);
        $this->set('Contests',$contestNames);

    }
	//page A.2 Equipe
    function equipe()
    {

    }
	//page D Classement
    function classement()
    {
        //Charge le model "Workouts"
        $this->loadModel("Members");
        $this->loadModel("Logs");
        //Va chercher toutes les séances

        $members = $this->Members->find("all");
        $this->loadModel("Logs");
        $total_table = array();
        $i = 0;
        foreach ($members as $member) {
            $total_table[$i] = array($this->Logs->getTotalMemberLogs($member), $member->email);
            $i++;
        }
        arsort($total_table);
        $this->set('ranking', $total_table);

    }
    function seances()
    {
        $this->loadModel("Workouts");
        if ($this->request->is("post")){
            if(isset($_POST['ajouter'])){
              $member_id=$this->request->Session()->read('Auth.User.id');
              $location=$this->request->data["location_name"];
              $description=$this->request->data["description"];
              $sport=$this->request->data["sport"];
              $date_start=$this->request->data["date_start"];
              $date_end=$this->request->data["date_end"];
              $contest_id=$this->request->data["contest_id"];

              $this->Workouts->addobjets($member_id, $date_start,$date_end, $location, $description, $sport, $contest_id);
            }
      }
      $w = $this->Workouts->find()->where(["member_id"=>$this->request->Session()->read('Auth.User.id')]);
            $this->Set("ws",$w->toArray());

    }

            function delete($id)
            {
                $this->loadModel("Workouts");
                $this->request->allowMethod(['post', 'delete']);
                $workouts = $this->Workouts->get($id);
                if ($this->Workouts->delete($workouts)) {
                    $this->Flash->success(__('The device has been deleted.'));
                } else {
                    $this->Flash->error(__('The device could not be deleted. Please, try again.'));
                }

                return $this->redirect(['action' => 'seances']);
            }



	//page F Mentions Légales/CNIL
    function mentions()
    {

    }
	//page G FAQ/Tutoriel/Mode D'Emploi
    function faq()
    {

    }
    function details($id_workouts)
    {
        $this->loadModel("Workouts");
        if ($this->request->is("post")){
            if(isset($_POST['editer'])){
              $member_id=$this->request->Session()->read('Auth.User.id');
              $location=$this->request->data["location_name"];
              $description=$this->request->data["description"];
              $sport=$this->request->data["sport"];
              $date_start=$this->request->data["date"];
              $date_end=$this->request->data["end_date"];
              $contest_id=null;

              $this->Workouts->editobjets($id_workouts, $date_start,$date_end, $location, $description, $sport, $contest_id);
            }
            }
            $this->set("current",$this->Workouts->get($id_workouts));

    }
    function logs($id_workouts)
    {
        $this->loadModel("Workouts");
    }
  //page LOCALISATION
    function localisation()
    {
      //Charge le model "Workouts"
      $this->loadModel("Logs");
      //Va chercher toutes les séances
      $loc = $this->Logs->find();
      $this->Set("locs",$loc->toArray());
    }

    function edit()
    {
        $this->loadModel("Members");
        $m = $this->Members->find()->where(["id"=>$this->request->Session()->read('Auth.User.id')])->toArray()[0];

        if ($this->request->is('post')) {
            //Si il y a bien un fichier d'uploadé
            if($this->request->data['avatar_file']['name'] != ''){
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

                }else{
                    //Messages d'erreurs si quelque chose n'a pas marché
                    $this->Flash->error("Erreur lors de l'importation de votre fichier (Fichiers autorisés < 2Mo et format jpg)", array(
                        'key' => 'error'
                    ));
                }
            }
            $this->Members->updateProfile($m, $this->request->data['email_new'],$this->request->data['password_new']);
            $this->redirect(array(
                'controller' => 'accounts', 'action' => 'profil'
            ));
        }
        $this->Set("member_info",$m);
    }

    function competitions()
    {
       $this->loadModel('Contests');
      if ($this->request->is('post')){
        if(($this->request->data['name'])&&($this->request->data['type'])&&($this->request->data['description'])){
          $name=$this->request->data['name'];
          $type=$this->request->data['type'];
          $description=$this->request->data['description'];
          $this->Contests->addcompetition($name, $type, $description);
        }
      }
      else{

      }
        $c=$this->Contests->find();
        $this->Set('compet',$c->toArray());

        $this->loadModel('Workouts');
        $match = $this->Workouts->find('all');
        $this->set('Workouts', $match);
    }

    function objetsco()
    {
        $this->loadModel("Devices");

      if ($this->request->is("post")){
        if(isset($_POST['ajouter'])){
          $member_id=$this->request->data["member_id"];
          $serial=$this->request->data["serial"];
          $description=$this->request->data["description"];
          $this->Devices->addobjets($member_id, $serial, $description);
        }
      }
        $w=$this->Devices->find()->where(["member_id"=>$this->request->Session()->read('Auth.User.id')]);
        $this->Set("ws",$w->toArray());
    }
    public function deleteDevice($id)
    {
        $this->loadModel("Devices");
        $this->request->allowMethod(['post', 'delete']);
        $device = $this->Devices->get($id);
        if ($this->Devices->delete($device)) {
            $this->Flash->success(__('The device has been deleted.'));
        } else {
            $this->Flash->error(__('The device could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'objetsco']);
    }
    public function editobjetco($id)
    {
        $this->loadModel('Devices');
        $device = $this->Devices->get($id);             
        $trusted = $this->Devices->updateobjetsco($id);
        return $this->redirect(['action' => 'objetsco']);
    }
}
