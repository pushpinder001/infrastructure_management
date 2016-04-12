<?php
	include ('user.php');
	class Worker_c extends user{
		public function update_complaint($id)
		{
			$this->connection();
			$conn=$this->conn;
			$_SESSION['st']="Status of complaint has been successfully updated";
			$sql="UPDATE `complaint` SET `status`='Completed' WHERE `Id`='$id' ";
			$res=$conn->query($sql);
			if($res=== TRUE){
				$_SESSION['st']='<p align="center" style="color:#67D692">Status of complaint has been successfully updated</p>';
			}
			else
			{
				$_SESSION['st']='<p align="center" style="color:#ffe066">Status of complaint not updated</p>';
			}
			header("Location:c_worker_update_complaint.php");
		}
		public function check_status()
		{
			//session_start();
			$this->connection();
			$conn=$this->conn;
			$sql="SELECT * FROM `complaint` ORDER by status ASC,Id ASC,date ASC";
			$data=$conn->query($sql);
			if($data!=false){
				if(mysqli_num_rows($data)>0){
					while($row = mysqli_fetch_assoc($data))
					{
						if($row['type']!=$_SESSION['type'])
						{
							continue;
						}
						echo '<tr>';
						echo	'<td>';
						echo $row['Id'];
						echo '</td>';
						echo	'<td>';
						echo $row['Room_no'];
						echo '</td>';
						echo	'<td>';
						echo $row['Description'];
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