
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Weekly Schedule Log In</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="sign-in.css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"> </script>
    <script src="check.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
    
  <header><h3>Weekly Schedule</h3></header>
    
  

  <body>

    <div class="container">

      <form class="form-signin" name = "login">
        <h2 class="form-signin-heading">Please sign in</h2>
        <input type="text" id="username" class="form-control" placeholder="Username" required autofocus>
        <input type="password" id="password" class="form-control" placeholder="Password" required>
        <input type="button" onclick='log()' value="Sign in"></input>
		<input type="button" onclick='create()' value="Create Account"></input>
      </form>

    </div> <!-- /container -->
	<div id ="check">
	</div>
    
<?php 
	
	ini_set('display_errors','On');
	include 'storedInfo.php';
	
    $mysqli = new mysqli("oniddb.cws.oregonstate.edu", "rechstee-db",$myPassword, "rechstee-db");
    if ($mysqli->connect_errno) {
	echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ")" . $mysqli->connect_error;
	}
    else {
		echo "Connection Worked!<br>";
	}
	

?>

  </body>
</html>