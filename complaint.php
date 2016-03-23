<?php
	require 'task.php';
	class complaint extends task{
		public $roll_no;
		public $room_no;
		public function __construct($description,$roll_no,$room_no,$type){
			$this->roll_no=$roll_no;
			$this->room_no=$room_no;
			parent::__construct($description,$type);
		}
	}
?>