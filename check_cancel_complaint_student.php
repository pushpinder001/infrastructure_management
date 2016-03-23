<?php
	include ('complaint.php');
	include ('student.php');
	session_start();
	$id=$_POST['id'];
	$_SESSION['std']->cancel_complaint($id);
?>