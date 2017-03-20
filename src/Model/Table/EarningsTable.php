<?php
namespace App\Model\Table;

use Cake\ORM\Table;

class EarningsTable extends Table
{

    public function initialize(array $config)
    {
        $this->table('earnings');
    }

}