<?php
namespace App\Model\Table;

use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
use Cake\ORM\TableRegistry;

class MembersTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->table('members');
        $this->displayField('email');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        /*$this->hasMany('Posts', [
            'foreignKey' => 'user_id'
        ]);*/
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->email('email')
            ->requirePresence('email', 'create')
            ->notEmpty('email');            

        $validator
            ->requirePresence('password', 'create')
            ->notEmpty('password');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->isUnique(['email']));
        return $rules;
    }

    public function getNewPassword($email)
    {
        $members = TableRegistry::get("Members");
        $ad = $members->find()
            ->where(['email' => $email])->first();

            $caract = "abcdefghijklmnopqrstuvwyxz0123456789";
            $newpass = "";

            
            for($j = 1; $j <= 4; $j++) {

            $Nbr = strlen($caract);
            $Nbr = mt_rand(0,($Nbr-1));
            $newpass = $newpass.$caract[$Nbr];
            }
            $ad->password=$newpass;
            $this->save($ad);
            return $newpass;
    }

    public function updateProfile($profile, $email, $password_new)
    {
        $m = $this->get($profile->id);
        if(!empty($email) || !empty($password)){
            if($email != $m->email){
                $m->email = $email;
            }
            if(!empty($password_new)){
                $m->password = $password_new;
            }
            $this->save($m);
        }
    }
}
