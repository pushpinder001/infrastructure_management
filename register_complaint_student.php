<?php
	include ('student.php');
	session_start();
	if(isset($_SESSION['std'])==0)
	{
		header("Location:login.php");
	}
?>
<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="materialize.min.css"  media="screen,projection"/>
		<link href='https://fonts.googleapis.com/css?family=Titillium+Web' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="over.css">
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

<body background="background.jpg">
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
  <script type="text/javascript">
  	  $(document).ready(function() {
    $('select').material_select();
  });
  </script>
<div class="aa">
<div class="container">
	<div class="row">
        	<h2 align="center"><font color="#FFFFFF">Infrastructure Management System</font></h2>
    </div>   
</div>
<div class="zz">

</div>
<div class="container">
<div class="row">
      <div class="col s6">
        <p><a href="student_screen.php" class="inactive"><i class="material-icons fixx">home</i>&nbsp;Home</a>
        <i class="material-icons">keyboard_arrow_right</i>
        <a href="register_complaint_student.php">Register Complaint</a></p>
      </div>
<div class="col s6" align="right"><p><span class="white-text">Logged in as <?php echo $_SESSION['username'];?> &nbsp;&nbsp;(<a href="logout.php">Logout</a>)</span></p></div>
</div>
</div>
</div>
<br/><br/>
<div class="container">
<h3 align="center"><span class="white-text">Register Complaint</span></h3>
</div>
<div class="container">
 <div class="row">
 	
    <form class="col s6 offset-s3" action="check_register_complaint_student.php" method="post">
    <div class="row">
		<div class="col s12"><?php 	
				if (isset($_SESSION['st']))
				{
					echo $_SESSION['st'];
					unset($_SESSION['st']);
				}
     ?></div></div>
      <div class="row">
        <div class="input-field col s12">
          <input disabled value="<?php echo $_SESSION['std']->get_roll_no();?>" id="disabled" type="text" class="validate" >
          <label for="disabled"><span class="white-text"><font size="+1">Roll number</font></span></label>
        </div>
        </div>
        <div class="row">
        <div class="input-field col s12">
          <input disabled value="<?php echo $_SESSION['std']->get_room_no();?>" id="room_number" type="text" class="validate" >
          <label for="room_number"><span class="white-text"><font size="+1">Room Number</font></span></label>
        </div>
      </div>
      <div class="row">
      		<div class="input-field col s12">
    <select name="type">
      <option value="" disabled selected><span class="white-text"><font size="+1">---Type---</font></span></option>
      <option value="1"><span class="white-text"><font size="+1">Repair</font></span></option>
      <option value="2"><span class="white-text"><font size="+1">Service</font></span></option>
      <option value="3"><span class="white-text"><font size="+1">Other</font></span></option>
    </select>
    <label></label>
  	</div>
    </div>
    <div class="row">
    <div class="input-field col s12">
    	<textarea id="description" class="materialize-textarea" name="description"></textarea>
          <label for="description"><span class="white-text"><font size="+1">Description</font></span></label>
    </div>
      </div>
    <div class="row">
    <center>
   	<button class="btn waves-effect waves-light" type="submit" name="action"><span class="white-text">Submit</span>
    	<i class="material-icons right">send</i>
  	</button>
    </center>
    </div>
    </form>
  </div>
</div>
</body>
</html>
