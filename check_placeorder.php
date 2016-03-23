<?php
	include ('order.php');
	include ('user.php');
	include ('admin.php');
	if(isset($_POST['item'])&& !empty($_POST["type"] )&& !empty($_POST["item"] )&& !empty($_POST["quantity"] ))
	{
		$type=$_POST['type'];
		$item=$_POST['item'];
		$quantity=$_POST['quantity'];
		$order=new order($item,$quantity,$type);
		session_start();
		$_SESSION['adm']->place_order($order);
	}
	else
	{
		session_start();
		if(empty($_POST["type"] ))
		{
			$_SESSION['st']="Type feild cannot be empty";
		}
		else if(empty($_POST["item"] )){
			$_SESSION['st']="Item feild cannot be empty";
		}
		else
		{
			$_SESSION['st']="Quantity feild cannot be empty";
		}
		header("Location:placeorder.php");
	}
?>	