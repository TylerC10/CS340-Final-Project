<!DOCTYPE html>
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
<link rel="stylesheet" href="CSS/main.css" type="text/css">
<body>

<h1>Team Info</h1>


<?php
	$hostdb = "classmysql";  
	$userdb = "cs340_copety";  
	$passdb = "8480";  
	$namedb = "cs340_copety";  
    
    $conn = new mysqli($hostdb, $userdb, $passdb, $namedb);
    if($conn->connect_errno){
	echo "Connection error " . $conn->connect_errno . " " . $conn->connect_error;
	}
    
    $sql = "SELECT * FROM team";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
    echo "<table><tr><th>Team Name</th><th>Team City</th><th>Team Sport</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["teamName"]."</td><td>".$row["teamCity"]." ".$row["teamSport"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();


?>


</body>
</html>