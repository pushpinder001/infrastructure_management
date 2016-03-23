<?php session_start(); ?>
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
	  <title>Welcome!</title>
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
        <p><a href="o_worker_screen.php" class="breadcrumb"><i class="material-icons">home</i>&nbsp;Home</a></p>
      </div>
<div class="col s6"><p align="right"><span class="white-text">Logged in as <?php echo $_SESSION['username'];?> &nbsp;&nbsp;(<a href="logout.php">Logout</a>)</span> </p></div>
</div>
</div>
</div>
<br/><br/>
<div class="container">
<h3 align="center"><span class="white-text">Welcome!</span></h3>
</div>
<br/><br/><br/>
<div class="container">
 <div class="row">
 <a href="check_order_status_worker.php">
 <div class="col s4 myBox" align="center">
 <div class="collapsible collapsible-header myBox"><font style="font-size:1.5em; color:#000000">Order Status</font></div>
 </div>
 </a>
 <div class="col s4"><p></p></div>
 <a href="update_order_status.php">
 <div class="col s4 myBox" align="center">
 <div class="collapsible collapsible-header myBox"><font style="font-size:1.5em; color:#000000">Update Order Status</font></div>
 </div>
 </a>
 </div>
</div>
</body>
</html>
