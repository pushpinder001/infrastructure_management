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
	  <title>Complaint Status</title>
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
        <p><a href="admin_screen.php" class="inactive"><i class="material-icons fixx">home</i>&nbsp;Home</a>
        <i class="material-icons">keyboard_arrow_right</i>
        <a href="check_status.php">Complaints</a></p>
      </div>
<div class="col s6" align="right"><p><span class="white-text">Logged in as Admin&nbsp;&nbsp;(<a href="logout.php">Logout</a>)</span></p></div>
</div>
</div>
</div>
<br/><br/>
<div class="container">
<h3 align="center"><span class="white-text">Complaints</span></h3>
</div>>
<br/><br/><br/>
<div class="row">
<div class="col s10 offset-s1">
<table>
		<col style="width:10%">
        <col style="width:10%">
        <col style="width:10%">
		<col style="width:10%">
		<col style="width:40%">
		<col style="width:10%">
        <thead>
          <tr>
              <th data-field="id">Complaint Id</th>
              <th data-field="S_id">Id</th>
              <th data-field="room_no">Room Number</th>
              <th data-field="type">Type</th>
              <th data-field="desc">Description</th>
			  <th data-field="date">Date</th>
			  <th data-field="status">Status</th>
          </tr>
        </thead>
        <tbody>
      <?php
			include ('user.php');
			include ('admin.php');
			session_start();
			$_SESSION['adm']->check_complaint_status();
		?>
        </tbody>
</table>
</div>
</div>
</body>
</html>
