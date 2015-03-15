<?php 

$filePath = explode('/', $_SERVER['PHP_SELF'], -1);
	$filePath = implode('/',$filePath);
	$redirect = "http://" . $_SERVER['HTTP_HOST'] . $filePath;
	header("Location: {$redirect}/calender.php", true);



ini_set('display_errors','On');
include 'storedInfo.php';


$mysqli = new mysqli("oniddb.cws.oregonstate.edu", "rechstee-db",$myPassword, "rechstee-db");
if ($mysqli->connect_errno) {
	echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ")" . $mysqli->connect_error;
	}

else {
		//echo "Connection Worked!<br>";
	}
	
	$event = $_POST["event"];
	

	if (!($stmt = $mysqli->query("DELETE FROM calender WHERE event='".$event."'"))){
		echo "Failed to remove event";
	}

?>