<?php
$conn= new mysqli("localhost", "root", "", "testdb");
$sql ="SELECT * FROM `user` WHERE roll_no='b14cs024'";
$result = $conn->query($sql);
if($result->num_rows>0)
{
	echo "hello";
}
else {
echo "fail";
}
?>