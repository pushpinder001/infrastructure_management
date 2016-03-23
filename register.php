<?php
	include ('complaint.php');
	include ('admin.php');
	include ('student.php');
	if(isset($_POST['username'])&& !empty($_POST["username"] )&& !empty($_POST["roll_number"] )&& !empty($_POST["room_number"] )&&
	!empty($_POST["password"] )&& !empty($_POST["confirm_password"] ))
	{
		session_start();
		if(strcmp($_POST['password'],$_POST['confirm_password'])!=0)
		{
			$_SESSION['st']="Password and Confirm Password are not same";
			header("Location:register_account.php");
		}
		$std=new Student('0',$_POST['username'],$_POST['password'],$_POST['roll_number'],$_POST['room_number']);
		$_SESSION['adm']->register_account($std);
	}
	else
	{
		session_start();
		if(empty($_POST["username"] ))
		{
			$_SESSION['st']="Name feild cannot be empty";
		}
		else if(empty($_POST["roll_number"] )){
			$_SESSION['st']="Roll Number feild cannot be empty";
		}
		else if(empty($_POST["password"] )){
			$_SESSION['st']="Password feild cannot be empty";
		}
		else if(empty($_POST["confirm_password"] )){
			$_SESSION['st']="Confirm Password feild cannot be empty";
		}
		else
		{
			$_SESSION['st']="Room Number feild cannot be empty";
		}
		header("Location:register_account.php");
	}
?>