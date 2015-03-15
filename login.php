<?php
	
	session_start();
	
	ini_set('display_errors','On');
	include 'storedInfo.php';

	
	$mysqli = new mysqli("oniddb.cws.oregonstate.edu", "rechstee-db",$myPassword, "rechstee-db");
	if ($mysqli->connect_errno) {
	echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ")" . $mysqli->connect_error;
	}
	else {
		//echo "Connection Worked!";
	}
	
	if($_POST) {
	$username = $_POST['username'];
	$password = $_POST['password'];
	}


	$q = "SELECT username FROM users WHERE username = '".$username."' AND password = '".$password."'";
	
	$result = mysqli_query($mysqli, $q);

	
	if (mysqli_num_rows($result)===1) 
	{
	
		$_SESSION['username'] = $username;
		$_SESSION['password'] = $password;
		echo ('correct');
	}
	
	else
	{
		echo 'Incorrect Credentials!';
	
	}





?>