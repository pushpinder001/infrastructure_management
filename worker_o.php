<?php
	include ('user.php');
	class Worker_o extends user{
		public function update_order($id)
		{	
			$this->connection();
			$conn=$this->conn;
			$_SESSION['st']='<p align="center" style="color:#67D692">Status of order has been successfully updated</p>';
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
						echo	'<td>';
						echo $row['quantity'];
						echo '</td>';
						echo '<td>';
						echo $row['date'];
						echo '</td>';
						echo '<td>';
						if($row['status']=="Completed")
							echo '<i class="material-icons">done</i>';
						else 
							echo '<i class="material-icons">schedule</i>';
						echo '</td>';
						echo '</tr>';
					}
				}
			}			
		}
	}
?>