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
	  <title>Place Order</title>
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
        <a href="placeorder.php">Place Order</a></p>
      </div>
<div class="col s6" align="right"><p><span class="white-text">Logged in as Admin&nbsp;&nbsp;(<a href="logout.php">Logout</a>)</span></p></div>
</div>
</div>
</div>
<br/><br/>
<h3 align="center"><span class="white-text">Place Order</span></h3>
</div>
<br/><br/><br/>
<div class="container">
<div class="row">
<form class="col s6 offset-s3" action="check_placeorder.php" method="post">
      <div class="row">
			<div class="col s12"><p align="center" style="color:#67D692"><?php 
				session_start();
				//echo "hello";
				if (isset($_SESSION['st']))
				{
					echo $_SESSION['st'];
					unset($_SESSION['st']);
					//session_destroy();
				}
     ?></p></div>
		</div>
	<div class="row" style="padding:10px">
    	<div class="input-field col s12">
        <select name="type">
          <option value="" disabled selected><span class="white-text"><font size="+1">---Type---</font></span></option>
          <option value="1"><span class="white-text"><font size="+1">Consumable</font></span></option>
          <option value="2"><span class="white-text"><font size="+1">Non-Consumable</font></span></option>
        </select>
        <label></label>
        </div>
    </div>
    <div class="row" style="padding:10px">
    	<div class="input-field col s12">
          <input id="item" type="text" class="validate" name="item">
          <label for="item"><span class="white-text"><font size="+1">Item</font></span></label>
        </div>
    </div>
    <div class="row" style="padding:10px">
      	<div class="input-field col s12">
          <input id="qunatity" type="number" class="validate" name="quantity">
          <label for="quantity"><span class="white-text"><font size="+1">Quantity</font></span></label>
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
