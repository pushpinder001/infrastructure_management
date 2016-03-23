<?php
	include ('user.php');
	include ('admin.php');
	session_start();
	$id=$_POST['id'];
	$_SESSION['adm']->cancel_order($id);
?>