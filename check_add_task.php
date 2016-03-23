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
			$_SESSION['st']="Type feild cannot be empty";
		}
		else
		{
			$_SESSION['st']="Description feild cannot be empty";
		}
		header("Location:add_task.php");
	}
?>