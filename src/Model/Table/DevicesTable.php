<?php
namespace App\Model\Table;

use Cake\ORM\Table;

class DevicesTable extends Table
{
    public function myobjets($par1)
    {
        return $this->Devices->find()->where(["member_id"=>$par1])->toArray();
    }

    public function addobjets($member_id, $serial, $description, $trusted)
    {
    	$new=$this->newEntity();
      $new->member_id=$member_id;
    	$new->serial=$serial;
    	$new->description=$description;
    	$new->trusted=$trusted;
    	$this->save($new);
    }
    public function suppobjets($id)
    {
      $entity = $this->Devices->get($id);
      $result = $this->Devices->delete($entity);
    }


}
