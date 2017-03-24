<?php
namespace App\Model\Table;

use Cake\ORM\Table;

class ContestsTable extends Table
{
    public function addcompetition($name, $type, $description)
    {
    	$new=$this->newEntity();
      	$new->name=$name;
    	$new->type=$type;
    	$new->description=$description;
    	$this->save($new);
    }
}
