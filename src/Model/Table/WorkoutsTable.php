<?php
namespace App\Model\Table;

use Cake\ORM\Table;

class WorkoutsTable extends Table
{

        public function myworkouts($par1)
    {
        return $this->Workouts->find()->where(["member_id"=>$par1])->toArray();
    }

    public function addobjets($member_id, $date_start,$date_end, $location_name, $description ,$sport, $contest_id)
    {
    	$new=$this->newEntity();
    	$new->date=$date_start;
      	$new->member_id=$member_id;
    	$new->end_date=$date_end;
    	$new->description=$description;
    	$new->location_name=$location_name;
    	$new->sport=$sport;
    	$new->contest_id=$contest_id;
    	$this->save($new);
    }
    /*public function suppworkouts($id)
    {
      $entity = $this->Workouts->get($id);
      $result = $this->Workouts->delete($entity);
    }*/
        public function editobjets($id, $date_start,$date_end, $location_name, $description ,$sport, $contest_id)
    {
        $new=$this->get($id);
        $new->date=$date_start;
        $new->end_date=$date_end;
        $new->description=$description;
        $new->location_name=$location_name;
        $new->sport=$sport;
        $new->contest_id=$contest_id;
        $this->save($new);
    }

}