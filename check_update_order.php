<?php
	include ('worker_o.php');
	session_start();
	$id=$_POST['id'];
	$worker = unserialize($_SESSION['worker1']);
	$worker->update_order($id);
?>