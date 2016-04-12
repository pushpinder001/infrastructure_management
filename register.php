<?php
	include ('complaint.php');
	include ('admin.php');
	include ('student.php');
	if(isset($_POST['username'])&& !empty($_POST["username"] )&& !empty($_POST["roll_number"] )&& !empty($_POST["room_number"] )&&
	!empty($_POST["password"] )&& !empty($_POST["confirm_password"] ))
	{
		session_start();
		$pass=$_POST['password'];
		$cpass=$_POST['confirm_password'];
		$room_no=$_POST["room_number"];
		if($room_no<0)
		{
			$_SESSION['st']='<p align="center" style="color:#ffe066">Room number cannot be negative</p>';
			header("Location:register_account.php");
		}
		else if(strcmp($pass,$cpass)!=0)
		{
			$_SESSION['st']='<p align="center" style="color:#ffe066">Password and Confirm Password are not same</p>';
			//echo "hello";
			header("Location:register_account.php");
		}
		else{
			$std=new Student('0',$_POST['username'],$_POST['password'],$_POST['roll_number'],$_POST['room_number']);
			$_SESSION['adm']->register_account($std);
		}
	}
	else
	{
		session_start();
		if(empty($_POST["username"] ))
		{
			$_SESSION['st']='<p align="center" style="color:#ffe066">Name field cannot be empty</p>';
		}
		else if(empty($_POST["roll_number"] )){
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
		header("Location:register_account.php");
	}
?>