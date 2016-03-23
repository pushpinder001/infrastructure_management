<?php
	require 'task.php';
	class order extends task{
		public $quantity;
		public function __construct($description,$quantity,$type){
			$this->quantity=$quantity;
			parent::__construct($description,$type);
		}
	}
?>