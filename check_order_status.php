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
	  <title>Order History</title>
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
        <a href="check_order_status.php">Order History</a></p>
      </div>
<div class="col s6" align="right"><p><span class="white-text">Logged in as Admin&nbsp;&nbsp;(<a href="logout.php">Logout</a>)</span></p></div>
</div>
</div>
</div>
<br/><br/>
<h3 align="center"><span class="white-text">Order History</span></h3>
</div>
<br/><br/><br/>
<div class="row">
<div class="col s8 offset-s2">
<table>
		<col style="width:10%">
        <col style="width:10%">
        <col style="width:40%">
		<col style="width:20%">
        <thead>
          <tr>
              <th data-field="id">Order Id</th>
              <th data-field="type">Type</th>
              <th data-field="desc">Description</th>
			  <th data-field="date">Date</th>
			  <th data-field="status">Status</th>
          </tr>
        </thead>
        <tbody>
<?php
	include ('connection.php');
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
?>
        </tbody>
</table>
</div>
</div>
</body>
</html>
