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


<form action="coachSearchResults.php" method="POST">
    <legend>Search Coaches by Last Name (case sensitive)</legend>
    <input type="text" name="coach_lname_search" />
    <input type="submit" value="Search" />
</form></br>

<form action="playerSearchResults.php" method="POST">
    <legend>Search Players by Last Name (case sensitive)</legend>
    <input type="text" name="player_lname_search" />
    <input type="submit" value="Search" />
</form></br>

<form action="teamNameResults.php" method="POST">
    <legend>Search Team by Team Name (case sensitive)</legend>
    <input type="text" name="team_name_search" />
    <input type="submit" value="Search" />
</form>

<form action="teamCityResults.php" method="POST">
    <legend>Search Team by Team City (case sensitive)</legend>
    <input type="text" name="team_city_search" />
    <input type="submit" value="Search" />
</form>



</body>
</html>

