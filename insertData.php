<html>

<body>

<?php

	$hostdb = "classmysql";  
	$userdb = "cs340_copety";  
	$passdb = "8480";  
	$namedb = "cs340_copety";

    $conn = new mysqli($hostdb, $userdb, $passdb, $namedb);
    if($conn->connect_errno){
	echo "Connection error " . $conn->connect_errno . " " . $conn->connect_error;
	}
    
    
    
    $sql="INSERT INTO team (teamName, teamCity) VALUES ('$_POST[new_team_name]','$_POST[new_team_city]')";
    
    $conn->close();    

?>

</body>

</html>