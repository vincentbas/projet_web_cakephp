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

    public function getContestName($uid){
    	$workouts = TableRegistry::get('Workouts');
    	$competition = $workouts->find('all')
    		->where(['member_id' => $uid])
            ->order(array('id DESC'))
            ->limit('7');

		$contests = array();
		foreach ($competition as $c) {
			$contests[]=$this->find()
				->where(['id' => $c->contest_id])
				->first();
		}

		return $contests;
    }

   /* public function getMatch(){
    	$workouts = TableRegistry::get('Workouts');
    	$match = $workouts->find('all');

		return $match;
    }*/
}
