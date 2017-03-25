<?php
namespace App\Model\Table;

use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
use Cake\ORM\TableRegistry;

class DevicesTable extends Table
{
    public function myobjets($par1)
    {
        return $this->Devices->find()->where(["member_id"=>$par1])->toArray();
    }

    public function addobjets($member_id, $serial, $description)
    {
    	$new=$this->newEntity();
      $new->member_id=$member_id;
    	$new->serial=$serial;
    	$new->description=$description;
    	$new->trusted=0;
    	$this->save($new);
    }

    public function updateobjetsco($id)
    {
        $device = TableRegistry::get('Devices');
        $trusted = $device->find()
            ->where(['id' => $id])->first();
         $trusted->trusted = 1;
            $this->save($trusted);
    }
}
