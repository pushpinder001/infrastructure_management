<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="materialize.min.css"  media="screen,projection"/>
		<link href='https://fonts.googleapis.com/css?family=Titillium+Web' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="over.css">
        <link rel="stylesheet" href="animate.css" type="text/css">
<link rel="stylesheet" href="test.css" type="text/css">
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	  <title>Log in</title>
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
<br/><br/><br/>
<div class="container">
<h3 align="center"><span class="white-text">Log In</span></h3>
</div>

<br/>
 <div class="container">
 <div class="row">
 	
    <form class="col s6 offset-s3 " action="check_login.php" method="post">
      <div class="row">
			<div class="col s12"><p align="center" style="color:#67D692"><?php 
				session_start();
				if (isset($_SESSION['st']))
				{
					echo $_SESSION['st'];
					session_destroy();
				}
     ?></p></div>
		</div>
		<div class="row">
        <div class="input-field col s12">
          <input id="first_name" type="text" class="validate" name="username">
          <label for="first_name"><span class="white-text"><font size="+1">Username</font></span></label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="password" type="password" class="validate" name="password">
          <label for="password"><span class="white-text"><font size="+1">Password</font></span></label>
        </div>
      </div>
      <div class="row">
      <div class="input-field col s12">
    <select name="type">
      <option value="" disabled selected><span class="white-text"><font size="+1">---Select Option---</font></span></option>
      <option value="1"><span class="white-text"><font size="+1">Student</font></span></option>
      <option value="2"><span class="white-text"><font size="+1">Worker</font></span></option>
      <option value="3"><span class="white-text"><font size="+1">Admin</font></span></option>
    </select>
    <label></label>
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
<div class="ani animated slideInUp"><img src="img52.png" /></div>
<div class="ani1 animated slideInUp"><img src="img62.png" /></div>
</body>
</html>
