<?php
	include ('worker_c.php');
	session_start();
	$id=$_POST['id'];
	$worker = unserialize($_SESSION['worker']);
	$worker->update_complaint($id);
?>