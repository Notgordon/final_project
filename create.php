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
	
	
	
	
	$stmt = $mysqli->prepare("INSERT INTO users(username, password) VALUES (?, ?)");
	
	$stmt->bind_param("ss",$username,$password);
	
	$q = "SELECT username FROM users WHERE username = '".$username."'";
	$result = mysqli_query($mysqli, $q);

	
	if (mysqli_num_rows($result)<1) 
	{
		
		//if(!$mysqli->query("INSERT INTO users(username, password) VALUES ('".$username."', '".$password."')")){
		//echo " couldn't be inserted";
		$stmt->execute();
		//}
		
		$_SESSION['username'] = $username;
		$_SESSION['password'] = $password;
		echo ('correct');
		
		
	}
	
	else{
		echo "Username has been taken";
	
	}

?>