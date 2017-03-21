<?php
namespace App\Model\Table;

use Cake\ORM\Table;

class WorkoutsTable extends Table
{

        public function myworkouts($par1)
    {
        return $this->Workouts->find()->where(["member_id"=>$par1])->toArray();
    }

    public function addworkouts($id,$member_id, $date,$date_end, $description, $location_name,$sport,$contest_id)
    {
    	$new=$this->newEntity();
    	$new->id=$id;
    	$new->date=$date;
      	$new->member_id=$member_id;
    	$new->end_date=$end_date;
    	$new->description=$description;
    	$new->location_name=$location_name;
    	$new->sport=$sport;
    	$new->contest_id=$contest_id;
    	$this->save($new);
    }
    public function suppworkouts($id)
    {
      $entity = $this->Workouts->get($id);
      $result = $this->Workouts->delete($entity);
    }

}