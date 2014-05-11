<?php

class Users extends \Phalcon\Mvc\Model
{
// ประกาศว่ามีตัวแปรใดบ้างที่มีในระบบ 
	public $id;
	public $name;
	public $email;
	
	public function getItems(){
		$items = array (
				"data-1",
				"data-2",
				"data-3"
				);
		return $items;
	}
}