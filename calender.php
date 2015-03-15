<html>
<link href="bootstrap.min.css" rel="stylesheet">
<head>
	<link rel="stylesheet" type="text/css" href="calender.css">
<head>
<body>
<table class="table table-bordered" border = 1>
<thead border = 2>
</thead>
<tbody>
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
	
	$username = $_SESSION['username'];
	echo "<h2>Welcome to your nifty calender, $username !</h2>";
	
	$password = $_SESSION['password'];
	
	
	//Monday
	
	$q = "SELECT day, time, event, priority, weather FROM calender WHERE username = '".$username."' AND password = '".$password."' AND day = 'monday'";
	$result = mysqli_query($mysqli, $q);

	
	
	
	if (mysqli_num_rows($result) > 0) {
     // output data for each row
	 echo "<tr><th> Monday </th></tr>";
     while($row = $result->fetch_assoc()) {
		
		
		
        echo "<tr>" . "<td> Time:". $row["time"] . "<td> Event:". $row["event"] . "<td> Priority: " . $row["priority"];
		
		echo "<td><form method=\"POST\" action=\"delete.php\">";
		echo "<input type=\"hidden\" name=\"event\" value=\"".$row["event"]."\">";
		echo "<input type=\"submit\" value=\"delete\">";
		echo "</form></td>";
	}
	echo "<br>";
	}
	
	//Tuesday
	
	
	
	$q = "SELECT day, time, event, priority, weather FROM calender WHERE username = '".$username."' AND password = '".$password."' AND day = 'tuesday'";
	$result = mysqli_query($mysqli, $q);

	
	
	
	if (mysqli_num_rows($result) > 0) {
	echo "<tr><th> Tuesday </th></tr>";
     // output data for each row
     while($row = $result->fetch_assoc()) {
		
		
		
        echo "<tr>" . "<td> Time:". $row["time"] . "<td> Event:". $row["event"] . "<td> Priority: " . $row["priority"];
		
		echo "<td><form method=\"POST\" action=\"delete.php\">";
		echo "<input type=\"hidden\" name=\"event\" value=\"".$row["event"]."\">";
		echo "<input type=\"submit\" value=\"delete\">";
		echo "</form></td>";
		}
	}
	
	
	//Wednesday

	
	$q = "SELECT day, time, event, priority, weather FROM calender WHERE username = '".$username."' AND password = '".$password."' AND day = 'wednesday'";
	$result = mysqli_query($mysqli, $q);
	
	
	
	if (mysqli_num_rows($result) > 0) {
	 echo "<tr><th> Wednesday </th></tr>";
     // output data for each row
     while($row = $result->fetch_assoc()) {
		
		
		
        echo "<tr>" . "<td> Time:". $row["time"] . "<td> Event:". $row["event"] . "<td> Priority: " . $row["priority"];
		
		echo "<td><form method=\"POST\" action=\"delete.php\">";
		echo "<input type=\"hidden\" name=\"event\" value=\"".$row["event"]."\">";
		echo "<input type=\"submit\" value=\"delete\">";
		echo "</form></td>";
		}
	}
	
	//Thursday
	
	$q = "SELECT day, time, event, priority, weather FROM calender WHERE username = '".$username."' AND password = '".$password."' AND day = 'thursday'";
	$result = mysqli_query($mysqli, $q);

	
	
	
	if (mysqli_num_rows($result) > 0) {
     // output data for each row
	 echo "<tr><th> Thursday </th></tr>";
     while($row = $result->fetch_assoc()) {
		
		
		
        echo "<tr>" . "<td> Time:". $row["time"] . "<td> Event:". $row["event"] . "<td> Priority: " . $row["priority"];
		
		echo "<td><form method=\"POST\" action=\"delete.php\">";
		echo "<input type=\"hidden\" name=\"event\" value=\"".$row["event"]."\">";
		echo "<input type=\"submit\" value=\"delete\">";
		echo "</form></td>";
		}
	}
	
	//Friday
	
	$q = "SELECT day, time, event, priority, weather FROM calender WHERE username = '".$username."' AND password = '".$password."' AND day = 'friday'";
	$result = mysqli_query($mysqli, $q);

	
	
	
	if (mysqli_num_rows($result) > 0) {
     // output data for each row
	 echo "<tr><th> Friday </th></tr>";
     while($row = $result->fetch_assoc()) {
		
		
		
        echo "<tr>" . "<td> Time:". $row["time"] . "<td> Event:". $row["event"] . "<td> Priority: " . $row["priority"];
		
		echo "<td><form method=\"POST\" action=\"delete.php\">";
		echo "<input type=\"hidden\" name=\"event\" value=\"".$row["event"]."\">";
		echo "<input type=\"submit\" value=\"delete\">";
		echo "</form></td>";
		}
	}
	
	//Saturday
	
	$q = "SELECT day, time, event, priority, weather FROM calender WHERE username = '".$username."' AND password = '".$password."' AND day = 'saturday'";
	$result = mysqli_query($mysqli, $q);

	
	
	
	if (mysqli_num_rows($result) > 0) {
     // output data for each row
	 echo "<tr><th> Saturday </th></tr>";
     while($row = $result->fetch_assoc()) {
		
		
		
        echo "<tr>" . "<td> Time:". $row["time"] . "<td> Event:". $row["event"] . "<td> Priority: " . $row["priority"];
		
		echo "<td><form method=\"POST\" action=\"delete.php\">";
		echo "<input type=\"hidden\" name=\"event\" value=\"".$row["event"]."\">";
		echo "<input type=\"submit\" value=\"delete\">";
		echo "</form></td>";
		}
	}
	
	//Sunday
	
	$q = "SELECT day, time, event, priority, weather FROM calender WHERE username = '".$username."' AND password = '".$password."' AND day = 'sunday'";
	$result = mysqli_query($mysqli, $q);

	
	
	
	if (mysqli_num_rows($result) > 0) {
     // output data for each row
	 echo "<tr><th> Sunday </th></tr>";
     while($row = $result->fetch_assoc()) {
		
		
		
        echo "<tr>" . "<td> Time:". $row["time"] . "<td> Event:". $row["event"] . "<td> Priority: " . $row["priority"];
		
		echo "<td><form method=\"POST\" action=\"delete.php\">";
		echo "<input type=\"hidden\" name=\"event\" value=\"".$row["event"]."\">";
		echo "<input type=\"submit\" value=\"delete\">";
		echo "</form></td>";
		}
	}


?>



</tbody>
</table>
<form method="post" action ="add.php" class="form-horizontal">
<div class="container">
<h3>Day: </h3>
	<select name="day">
			<option value="monday">Monday</option>
			<option value="tuesday">Tuesday</option>
			<option value="wednesday">Wednesday</option>
			<option value="thursday">Thursday</option>
			<option value="friday">Friday</option>
			<option value="saturday">Saturday</option>
			<option value="sunday">Sunday</option>
		  </select> 
		  <br>
<h3>Time: </h3>
	<input type = "time" name="time"/> <br>  
<h3>Event: </h3>
	<textarea name = "event">
	
	</textarea>
<h3>Priority: </h3>
	<input type = "number" name="priority" min="1" max="3" /> <br>    
</div>
<br>
<input type = "submit">

</form>

<form method="post" action = "logout.php">
	<input type = "submit" value = "Log Out">
</form>

</body>
</html>