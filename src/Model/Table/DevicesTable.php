<?php
namespace App\Model\Table;

use Cake\ORM\Table;

class DevicesTable extends Table
{
    public function myobjets($par1)
    {
        return $this->find()->where(["member_id"=>$par1])->order(["date"])->toArray();
    }

    public function addobjets($serial, $description, $trusted)
    {
    	$new=$this->newEntity();
    	$new->serial=$serial;
    	$new->description=$description;
    	$new->trusted=$trusted;
    	$this->save($new);
    }
}
