<?php
	include ('user.php');
	class Worker_o extends user{
		public function update_order($id)
		{	
			$this->connection();
			$conn=$this->conn;
			$_SESSION['st']="Status of order has been successfully updated";
			$sql="UPDATE `order` SET `status`='Completed' WHERE `Id`='$id' ";
			$res=mysqli_query($conn,$sql);
			header("Location:update_order_status.php");
		}
		public function check_status()
		{
			$this->connection();
			$conn=$this->conn;
			$sql="SELECT * FROM `order` ORDER by status ASC,date DESC";
			$data=mysqli_query($conn,$sql);
			if($data!=false){
				if(mysqli_num_rows($data)>0){
					while($row = mysqli_fetch_assoc($data))
					{
						echo '<tr>';
						echo	'<td>';
						echo $row['Id'];
						echo '</td>';
						echo '<td>';
						echo $row['type'];
						echo '</td>';
						echo	'<td>';
						echo $row['item'];
						echo '</td>';
						echo '<td>';
						echo $row['date'];
						echo '</td>';
						echo '<td>';
						echo $row['status'];
						echo '</td>';
						echo '</tr>';
					}
				}
			}			
		}
	}
?>