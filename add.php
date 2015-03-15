<?php

session_start();
ini_set('display_errors','On');
include 'storedInfo.php';

$mysqli = new mysqli("oniddb.cws.oregonstate.edu", "rechstee-db",$myPassword, "rechstee-db");
if ($mysqli->connect_errno) {
	echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ")" . $mysqli->connect_error;
	}
else {
		//echo "Connection Worked!<br>";
	}

	$filePath = explode('/', $_SERVER['PHP_SELF'], -1);
	$filePath = implode('/',$filePath);
	$redirect = "http://" . $_SERVER['HTTP_HOST'] . $filePath;
	header("Location: {$redirect}/calender.php", true);
	
$username = $_SESSION['username'];
echo "$username" ;
$password = $_SESSION['password'];
echo "$password" ;
$day = $_POST['day'];
echo "day $day" ;
$time = $_POST['time'];
echo "Time $time" ;
$event = $_POST['event'];
echo " Event $event " ;
$priority = $_POST['priority'];
echo "priority $priority";
$weather = "w";

if(!$mysqli->query("INSERT INTO calender(username, password, day, time, event, priority, weather) VALUES ('".$username."', '".$password."', '".$day."', '".$time."', '".$event."', '".$priority."', '".$weather."')")){
		echo " couldn't be inserted" . '<br>';
	}


?>