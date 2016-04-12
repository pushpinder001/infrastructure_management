<?php
	include ('user.php');
	class Admin extends user{
		//private $conn;
		/*protected function connection(){
			$this->conn=new mysqli("localhost","root","","testdb");
			if (!$this->conn) {
				session_start();
				$_SESSION['st']="Connection-failed";
				header("Location:logout.php");
			}
		}*/
		public function place_order($order){
			$this->connection();
			$conn=$this->conn;
			$date=date("Y-m-d");
			$sql = "INSERT INTO `order`(`type`, `item`, `quantity`, `date`) VALUES('$order->type', 
			'$order->description','$order->quantity','$date')";
			if ($conn->query($sql) === TRUE) {
				$_SESSION['st']='<p align="center" style="color:#67D692">Order is placed successfully';
				header("location:placeorder.php");
			} else {
				$_SESSION['st']='<p align="center" style="color:#ffe066">Order not placed</p>';
				header("location:placeorder.php");
			}
		}
		public function cancel_order($id){
			$this->connection();
			$conn=$this->conn;
			$sql="DELETE FROM `order` WHERE Id='$id' ";
			$res=$conn->query($sql);
			if($res===TRUE){
				$_SESSION['st']='<p align="center" style="color:#67D692">Order is successfully cancelled</p>';
				header("Location:cancel_order.php");
			}
			else
			{
				$_SESSION['st']='<p align="center" style="color:#ffe066">Order not cancelled</p>';
				header("Location:cancel_order.php");
			}
		}
		public function check_order_status(){
			$this->connection();
			$conn=$this->conn;
			$sql="SELECT * FROM `order` ORDER by status ASC,Id ASC,date ASC";
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
		public function register_account($std){
			$this->connection();
			$conn=$this->conn;
			$name=$std->getName();
			$password=$std->getPassword();
			$roll_no=$std->get_roll_no();
			$room_no=$std->get_room_no();
			//echo $roll_no;
			$sq="SELECT * FROM `user` WHERE roll_no='$roll_no'";
			//echo $result->num_rows;
			$result=$conn->query($sq);
			//echo $result->num_rows;
			if ($result->num_rows > 0) {
					$_SESSION['st']='<p align="center" style="color:#ffe066">Account already exit</p>';
			}
			else{
				$sql = "INSERT INTO user (name,password,room_no,roll_no,type)
				VALUES ('$name', '$password','$room_no','$roll_no','1')";
				session_start();
				if ($conn->query($sql) === TRUE) {
					$_SESSION['st']='<p align="center" style="color:#67D692">New account is successfully registered</p>';
				}
				else
				{
					$_SESSION['st']='<p align="center" style="color:#ffe066">New account not registered</p>';
				}
			}
			header("Location:register_account.php");
		}
		public function update_account($std){
			$this->connection();
			$conn=$this->conn;
			$name=$std->getName();
			$password=$std->getPassword();
			$roll_no=$std->get_roll_no();
			$room_no=$std->get_room_no();
			session_start();
			$sq="SELECT * FROM `user` WHERE roll_no='$roll_no'";
			//echo $result->num_rows;
			$result=$conn->query($sq);
			//echo $result->num_rows;
			if ($result->num_rows <= 0) {
					$_SESSION['st']='<p align="center" style="color:#ffe066">Account does not exit</p>';
					header("Location:update_account.php");
			}
			else{
				$sql="UPDATE `user` SET `name`='$name',`password`='$password',`room_no`='$room_no' WHERE roll_no='$roll_no'";
				$res=$conn->query($sql);
				if($res === TRUE){
						$_SESSION['st']='<p align="center" style="color:#67D692">Account is successfully updated</p>';
				}
				else 
				{
					$_SESSION['st']='<p align="center" style="color:#ffe066">Account does not exit</p>';
				
				}
				header("Location:update_account.php");
			}
		}
		public function check_complaint_status(){
			$this->connection();
			$conn=$this->conn;
			$sql="SELECT * FROM `complaint` ORDER by status ASC,Id ASC,date ASC";
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
						echo $row['Student_Id'];
						echo '</td>';
						echo	'<td>';
						echo $row['Room_no'];
						echo '</td>';
						echo '<td>';
						echo $row['type'];
						echo '</td>';
						echo '<td>';
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
		public function add_schedule_task($s_task)
		{
			$this->connection();
			$conn=$this->conn;
			$date=date("Y-m-d");
			$sql = "INSERT INTO complaint(`Student_Id`,`type`, `Description`,`date`) VALUES('Admin',
			'$s_task->type','$s_task->description','$date')";
			if ($conn->query($sql) === TRUE) {
				session_start();
				$_SESSION['st']='<p align="center" style="color:#67D692">Scheduled task is added</p>';
				header("location:add_task.php");
			}
			else {
				$_SESSION['st']='<p align="center" style="color:#ffe066">Scheduled task not added</p>';
				header("location:add_task.php");
			}
		}
		public function delete_schedule_task($id){
			$this->connection();
			$conn=$this->conn;
			$sql="DELETE FROM `complaint` WHERE Id='$id' ";
			$res=$conn->query($sql);
			if($res==TRUE){
				$_SESSION['st']='<p align="center" style="color:#67D692">Scheduled task is successfully cancelled</p>';
				header("Location:cancel_task.php");
			}
			else
			{
				$_SESSION['st']='<p align="center" style="color:#ffe066">Cancellation failed</p>';
				header("Location:cancel_task.php");
			}
		}
	}
?>