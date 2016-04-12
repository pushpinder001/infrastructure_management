<?php
	include ('student.php');
	include ('complaint.php');
	session_start();
	if( isset ( $_POST['description'] ) && !empty($_POST["type"] )&& !empty($_POST["description"] ))
	{
		$type=$_POST['type'];
		$roll_no=$_SESSION['std']->get_roll_no();
		$room_no=$_SESSION['std']->get_room_no();
		$description=$_POST['description'];
		$complaint=new Complaint($description,$roll_no,$room_no,$type);
		$std=$_SESSION['std'];
		$std->register_complaint($complaint);
	}
	else
	{
		session_start();
		if(empty($_POST["type"] ))
		{
			$_SESSION['st']='<p align="center" style="color:#ffe066">Type field cannot be empty</p>';
		}
		else
		{
			$_SESSION['st']='<p align="center" style="color:#ffe066">Description field cannot be empty</p>';
		}
		header("Location:register_complaint_student.php");
	}
?>