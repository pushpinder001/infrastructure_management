<?php
	require 'task.php';
	class scheduled_task extends task{
		public function __construct($description,$type){
			parent::__construct($description,$type);
		}
	}
?>