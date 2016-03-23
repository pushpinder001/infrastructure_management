<?php
	include ('worker_o.php');
	session_start();
	$id=$_POST['id'];
	$worker = unserialize($_SESSION['worker']);
	$worker->update_order($id);
?>