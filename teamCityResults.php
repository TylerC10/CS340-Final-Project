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
<body>

<h1>Search Results</h1>


<?php
	$hostdb = "classmysql";  
	$userdb = "cs340_copety";  
	$passdb = "8480";  
	$namedb = "cs340_copety";  
    
    
    
    $conn = new mysqli($hostdb, $userdb, $passdb, $namedb);
    if($conn->connect_errno){
	echo "Connection error " . $conn->connect_errno . " " . $conn->connect_error;
	}
    
    if(!($stmt = $conn->prepare("SELECT team.teamName, team.teamCity FROM team WHERE team.teamCity LIKE ?"))){
     echo "Prepare failed: "  . $stmt->errno . " " . $stmt->error;
    }
    
    if(!($stmt->bind_param("s",$_POST['team_city_search']))){
        echo "Bind failed. error no. "  . $stmt->errno . ", " . $stmt->error;
    }
    
    if(!$stmt->execute()){
        echo "Execute failed: "  . $mysqli->connect_errno . " " . $mysqli->connect_error;
    }
    
    if(!$stmt->bind_result($teamName, $teamCity)){
        echo "Bind failed: "  . $mysqli->connect_errno . " " . $mysqli->connect_error;
    }
    
    while($stmt->fetch()){
        echo "<tr>\n<td>\n" . $teamName . "\n</td>\n<td>\n" . $teamCity . "\n</td>\n</tr>";   }
    
    

    $stmt->close();

    


?>


</body>
</html>