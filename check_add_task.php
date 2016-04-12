<?php
	include ('user.php');
	include ('admin.php');
	include ('scheduled_task.php');
	if(isset($_POST['description'])&& !empty($_POST["type"] )&& !empty($_POST["description"] ))
	{
		$type=$_POST['type'];
		$description=$_POST['description'];
		$s_task=new scheduled_task($description,$type);
		session_start();
		$_SESSION['adm']->add_schedule_task($s_task);
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
		header("Location:add_task.php");
	}
?>