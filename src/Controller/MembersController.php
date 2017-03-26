<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 */
class MembersController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    /*public function index()
    {
        $users = $this->paginate($this->Users);

        $this->set(compact('users'));
        $this->set('_serialize', ['users']);
    }*/

    /**
     * View method
     *
     * @param string|null $id User id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
   /* public function view($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => ['Posts']
        ]);

        $this->set('user', $user);
        $this->set('_serialize', ['user']);
    }*/

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $member = $this->Members->newEntity();
        if ($this->request->is('post')) {
            $member = $this->Members->patchEntity($member, $this->request->data);
            if ($this->Members->save($member)) {
                //$this->Flash->success(__('The user has been saved.'));

                $member = $this->Auth->identify();
            if ($member) {
                $this->Auth->setUser($member);
                return $this->redirect(['controller' => 'Accounts',
                                        'action' => 'profil']);
            }

               }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $this->set(compact('member'));
        $this->set('_serialize', ['member']);
    }

    //Login
    public function login(){
        if ($this->request->is('post')) {
            $member = $this->Auth->identify();
            if ($member) {
                $this->Auth->setUser($member);
                return $this->redirect(['controller' => 'Accounts',
                                        'action' => 'profil']);
            }

                $this->Flash->error('Incorrect Login');
        }
    }

     public function logout(){
        $this->Flash->success('You are logged out');
        return $this->redirect(['controller' => 'Index',
                                        'action' => 'view']);
    }

    public function forgot(){
         if ($this->request->is('post')) {
            $this->loadModel('Members');
            $email = $this->request->data['email'];             
            $newPassword = $this->Members->getNewPassword($email);
            $this->Flash->success('Nouveau mot de passe : '.$newPassword, array(
                    'key' => 'new_mdp'
                ));          
            }
            else
            {
                $this->Flash->success('Veuillez rentrer votre adresse mail', array(
                    'key' => 'new_mdp'
                ));
            }
        }

    public function beforeFilter(Event $event){
        $this->Auth->allow(['add']);
        $this->Auth->allow(['login']);
        $this->Auth->allow(['profil']);
        $this->Auth->allow(['forgot']);        
    }
}

    