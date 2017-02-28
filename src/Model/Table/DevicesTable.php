<?php
namespace App\Model\Table;

use Cake\ORM\Table;

class DevicesTable extends Table
{

    public function initialize(array $config)
    {
        $this->table('devices');
    }

}