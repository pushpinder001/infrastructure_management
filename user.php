<?php
	if(!class_exists('User')){
		class User{
		protected $Id;
		public $conn;
		protected $Name;
		protected $Password;
		public function __construct($id,$Name,$Password)
		{
			$this->Id=$id;
			$this->Name=$Name;
			$this->Password=$Password;
		}
		public function connection(){
			$this->conn=new mysqli("localhost","root","","testdb");
			if (!$this->conn) {
				session_start();
				$_SESSION['st']="Connection-failed";
				header("Location:logout.php");
			}
		}
		public function getId(){	return $this->Id;}
		public function getName(){ return $this->Name;}
		public function getPassword(){ return $this->Password;}
		public function setName($Id){ $this->Id=$Id;}
		public function setPassword($Password){ $this->Id=$Password;}
	}
	}
?>