<?php
	include ('connection.php');
	include ('student.php');
	include ('admin.php');
	include ('worker_c.php');
	include ('worker_o.php');
	if(isset($_POST['username']) && !empty($_POST["username"] )&& !empty($_POST["password"] )&& !empty($_POST["type"] ))
	{
		$t_type = array("1"=>"student", "2"=>"worker", "3"=>"admin");
		$username=$_POST['username'];
		$password=$_POST['password'];
		$type=$_POST['type'];
		$sql="SELECT * FROM user WHERE BINARY roll_no='$username' AND BINARY password='$password' AND BINARY type='$t_type[$type]'";
		$res=$conn->query($sql);
		if($res!=false){
			session_start();
			if($res->num_rows >0){
				$_SESSION['username']=$username;
				$_SESSION['password']=$password;
				if($type==3){
					$adm=new Admin();
					$_SESSION['adm']=$adm;
					header("Location:admin_screen.php");
				}
				else if($type==2)
				{
					if(strcmp($username,'Worker4')!=0){
						$worker=new Worker_c();
						//$worker->update_complaint();
						$_SESSION['worker']=serialize($worker);
						$worker_type = array("Worker1"=>"Repair", "Worker2"=>"Service", "Worker3"=>"Other");
						$_SESSION['type']=$worker_type[$username];
						//$_SESSION['worker']->update_complaint();
						header("Location:c_worker_screen.php");
					}
					else
					{
						$worker=new Worker_o();
						$_SESSION['worker1']=serialize($worker);
						//$_SESSION['worker']=$worker;
						header("Location:o_worker_screen.php");
					}
				}
				else
				{
					$rfetch=$res->fetch_assoc();
					$std=new Student($rfetch["Id"],$rfetch["name"],$rfetch["password"],$rfetch["roll_no"],$rfetch["room_no"]);
					$_SESSION['std']=$std;
					header("Location:student_screen.php");
				}
			}
			else
			{
				$_SESSION['st']='<p align="center" style="color:#ffe066">Wrong Username or Password</p>';
				header("Location:login.php");
			}
		}
		else
		{
			echo "unsuccess";
		}
	}
	else
	{
		session_start();
		if(isset($_POST['username']))
		{
			if(empty($_POST["username"]))
			{
				$_SESSION['st']='<p align="center" style="color:#ffe066">Username field cannot be empty</p>';
			}
			else if(empty($_POST["password"] )){
				$_SESSION['st']='<p align="center" style="color:#ffe066">Password field cannot be empty</p>';
			}
			else
			{
				$_SESSION['st']='<p align="center" style="color:#ffe066">Select Option field cannot be empty</p>';
			}
		}
		header("Location:login.php");
	}
?>