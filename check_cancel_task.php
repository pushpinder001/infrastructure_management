<?php
	include ('user.php');
	include ('admin.php');
	session_start();
	$id=$_POST['id'];
	$_SESSION['adm']->delete_schedule_task($id);
?>