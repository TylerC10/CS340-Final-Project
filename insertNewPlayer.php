<html>
<head>
<h1>Navigation Bar</h1>

		
	<p><a href="index.html">Home</a>
    <a href="league.php">League</a>
	<a href="team.php">Team</a>
	<a href="coach.php">Coach</a>
	<a href="player.php">Player</a>
	<a href="salary.php">Salary</a>
    <a href="team_staff.php">Team Staff</a>
    <a href="addData.php">Add Information</a>
    <a href="deleteData.php">Remove a Coach</a>
    <a href="updateData.php">Update Coach Name</a>
    <a href="search.php">Search for Data</a></p>


</head>

<body>

<?php
//Turn on error reporting
ini_set('display_errors', 'On');
//Connects to the database
	$hostdb = "classmysql";  
	$userdb = "cs340_copety";  
	$passdb = "8480";  
	$namedb = "cs340_copety";
$conn = new mysqli($hostdb, $userdb,$passdb, $namedb);
if(!$conn){
	echo "Connection error " . $conn->connect_errno . " " . $conn->connect_error;
	}
	
if(!($stmt = $conn->prepare("INSERT INTO player(fname, lname) VALUES (?,?)"))){
	echo "Prepare failed: "  . $stmt->errno . " " . $stmt->error;
}
if(!($stmt->bind_param("ss",$_POST['new_player_fname'],$_POST['new_player_lname']))){
	echo "Bind failed: "  . $stmt->errno . " " . $stmt->error;
}
if(!$stmt->execute()){
	echo "Execute failed: "  . $stmt->errno . " " . $stmt->error;
} else {
	echo "Added " . $stmt->affected_rows . " row to player.";
}

$conn->close();
?>


</body>

</html>