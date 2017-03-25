<?php
namespace App\Model\Table;

use Cake\ORM\Table;

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
    public function updateobjetsco($w, $trusted)
    {
        $w = $this->get($device->id);
        if(!empty($trusted)){
            if($trusted != $w->trusted){
                $w->trusted = $trusted;
            }
            $this->save($w);
        }
    }
}
