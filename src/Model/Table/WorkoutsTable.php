<?php
namespace App\Model\Table;

use Cake\ORM\Table;

class WorkoutsTable extends Table
{

    public function initialize(array $config)
    {
        $this->table('workouts');
    }

}