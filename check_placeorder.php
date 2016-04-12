<?php
	include ('order.php');
	include ('user.php');
	include ('admin.php');
	if(isset($_POST['item'])&& !empty($_POST["type"] )&& !empty($_POST["item"] )&& !empty($_POST["quantity"] ))
	{
		session_start();
		$type=$_POST['type'];
		$item=$_POST['item'];
		$quantity=$_POST['quantity'];
		$order=new order($item,$quantity,$type);
		if($quantity<=0)
		{
			$_SESSION['st']='<p align="center" style="color:#ffe066">Quantity entered is not positive</p>';
			header("Location:placeorder.php");
		}
		else{
			$_SESSION['adm']->place_order($order);
		}
	}
	else
	{
		session_start();
		if(empty($_POST["type"] ))
		{
			$_SESSION['st']='<p align="center" style="color:#ffe066">Type field cannot be empty</p>';
		}
		else if(empty($_POST["item"] )){
			$_SESSION['st']='<p align="center" style="color:#ffe066">Item field cannot be empty</p>';
		}
		else
		{
			$_SESSION['st']='<p align="center" style="color:#ffe066">Quantity field cannot be empty</p>';
		}
		header("Location:placeorder.php");
	}
?>	