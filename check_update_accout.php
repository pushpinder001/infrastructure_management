<?php
	include ('complaint.php');
	include ('admin.php');
	include ('student.php');
	if(isset($_POST['username'])&& !empty($_POST["username"] )&& !empty($_POST["roll_no"] )&& !empty($_POST["room_no"] )&&
	!empty($_POST["password"] )&& !empty($_POST["confirm_password"] ))
	{
		session_start();
		$room_no=$_POST["room_no"];
		if($room_no<0)
		{
			$_SESSION['st']='<p align="center" style="color:#ffe066">Room number cannot be negative</p>';
			header("Location:register_account.php");
		}
		else if(strcmp($_POST['password'],$_POST['confirm_password'])!=0)
		{
			$_SESSION['st']='<p align="center" style="color:#ffe066">Password and Confirm Password are not same</p>';
			header("Location:register_account.php");
		}
		else{
			$std=new Student('0',$_POST['username'],$_POST['password'],$_POST['roll_no'],$_POST['room_no']);
			$_SESSION['adm']->update_account($std);
		}
	}
	else
	{
		session_start();
		if(empty($_POST["username"] ))
		{
			$_SESSION['st']='<p align="center" style="color:#ffe066">Name field cannot be empty</p>';
		}
		else if(empty($_POST["roll_no"] )){
			$_SESSION['st']='<p align="center" style="color:#ffe066">Roll Number field cannot be empty</p>';
		}
		else if(empty($_POST["password"] )){
			$_SESSION['st']='<p align="center" style="color:#ffe066">Password field cannot be empty</p>';
		}
		else if(empty($_POST["confirm_password"] )){
			$_SESSION['st']='<p align="center" style="color:#ffe066">Confirm Password field cannot be empty</p>';
		}
		else
		{
			$_SESSION['st']='<p align="center" style="color:#ffe066">Room Number field cannot be empty</p>';
		}
		header("Location:update_account.php");
	}
?>