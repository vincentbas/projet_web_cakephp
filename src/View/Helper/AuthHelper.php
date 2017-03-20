<?php
namespace App\View\Helper;

use Cake\View\Helper;

class AuthHelper extends Helper
{
	$this->AuthUser->id();
	$this->AuthUser->user('username');
}

