<?php
	class task{
		public $Id;
		public $_date;
		public $status;
		public $description;
		public $type;
		public function __construct($description,$type){
			$this->description=$description;
			$this->type=$type;
		}
	}
?>