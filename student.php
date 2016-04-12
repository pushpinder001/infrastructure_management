<?php
	include ('user.php');
	class Student extends user{
		//private $conn;
		private $roll_no;
		private $room_no;
		public function __construct($Id,$Name,$Password,$roll_no,$room_no){
			$this->roll_no=$roll_no;
			$this->room_no=$room_no;
			parent::__construct($Id,$Name,$Password);
		}
		/*protected function connection(){
			$this->conn=new mysqli("localhost","root","","testdb");
			if (!$this->conn) {
				session_start();
				$_SESSION['st']="Connection-failed";
				header("Location:logout.php");
			}
		}*/
		public function get_roll_no(){
			return $this->roll_no;
		}
		public function get_room_no(){
			return $this->room_no;
		}
		public function set_room_no($room_no){
			$this->room_no=$room_no;
		}
		public function register_complaint($complaint){
			$this->connection();
			$conn=$this->conn;
			$date=date("Y-m-d");
			$sql = "INSERT INTO `complaint` (`Student_Id`, `Room_no`, `Type`, `Description`,`date`) VALUES
			('$complaint->roll_no','$complaint->room_no','$complaint->type','$complaint->description','$date')";
			if ($conn->query($sql) === TRUE) {
				$_SESSION['st']='<p align="center" style="color:#67D692">Complaint is successfully registered</p>';
				header("location:register_complaint_student.php");
			} else {
				$_SESSION['st']='<p align="center" style="color:#ffe066">Registration fail</p>';
				header("location:register_complaint_student.php");
			}
		}
		public function check_status(){
			$sql="SELECT * FROM `complaint` ORDER by status ASC,Id ASC,date ASC";
			$this->connection();
			$conn=$this->conn;
			$data=$conn->query($sql);
			if($data!=false){
				if($data->num_rows>0){
					while($row = mysqli_fetch_assoc($data))
					{
						if(strcmp($row['Student_Id'],$_SESSION['std']->get_roll_no())!=0)
						{
							continue;
						}
						echo '<tr>';
						echo	'<td>';
						echo $row['Id'];
						echo '</td>';
						echo '<td>';
						echo $row['type'];
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
		public function cancel_complaint($id){
			$this->connection();
			$sql="DELETE FROM `complaint` WHERE Id='$id' ";
			$conn=$this->conn;
			$res=$conn->query($sql);
			if($res === TRUE){
				$_SESSION['st']='<p align="center" style="color:#67D692">Complaint is successfully cancelled</p>';
				header("Location:cancel_complaint_student.php");
			}
			else
			{
				$_SESSION['st']='<p align="center" style="color:#ffe066">Cancellation fail</p>';
				header("Location:cancel_complaint_student.php");
				
			}
		}
	}
?>