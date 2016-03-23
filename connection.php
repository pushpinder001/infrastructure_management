<?php	
	$server='localhost';
	$user='root';
	$pass='';
	$db='testdb';
	$conn=new mysqli($server,$user,$pass,$db);
	if (!$conn) {
    	die("Connection failed: ");
	} 
?>