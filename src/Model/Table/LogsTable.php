<?php
namespace App\Model\Table;

use Cake\ORM\Table;

class LogsTable extends Table
{

    public function getTotalMemberLogs($member){
        $logs_values = $this->Logs->find()->where(["member_id"=>$member->id])->toArray();
        $total = 0;
        foreach ($logs_values as $logs_value) {
            $total += $logs_value;
        }
        return $total;
    }

}