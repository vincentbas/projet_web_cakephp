<?php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\ORM\TableRegistry;

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

   /* public function getMatch(){
    	$workouts = TableRegistry::get('Workouts');
    	$match = $workouts->find('all');

		return $match;
    }*/
}