<?php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\ORM\TableRegistry;

class StickersTable extends Table
{
    public function getStickerName($uid){
    	$earnings = TableRegistry::get("Earnings");
    	$badges = $earnings->find('all')
    		->where(['member_id' => $uid]);

		$stickers = array();
		foreach ($badges as $b) {
			$stickers[]=$this->find()
				->where(['id' => $b->sticker_id])
				->first();
		}

		return $stickers;
    }

}

