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

<h1>Add Data to the Leagues, Teams, Coaches, or Players</h1>

<form action="insertNewLeague.php" method="post">

<legend>Add A New League!</legend>
                New League Name?<br/>
                League Name: 
                <select name="new_league_name">
                    <option>International Flag Football League</option>
                    <option>International Basketball League</option>
                    <option>Global Soccer League</option>
                    <option>Global Hockey League</option>
                </select><br/>
                League Sport?<br/>
                League Sport:
                <select name="new_league_sport">
                    <option>Flag Football</option>
                    <option>Basketball</option>
                    <option>Soccer</option>
                    <option>Hockey</option> 
                </select><br/>
<button type="submit">Create New League!</button>
</form>


<form action="insertNewTeam.php" method="post">

<legend>Add New Teams</legend>
                New Team Name?<br/>
                Team Name: 
                <select name="new_team_name">
                    <option>Beavers</option>
                    <option>Aftershock</option>
                    <option>Galaxy</option>
                    <option>Tornadoes</option>
                </select><br/>
                Team City?<br/>
                Team City:
                <select name="new_team_city">
                    <option>Oregon</option>
                    <option>Los Angeles</option>
                    <option>Seattle</option>
                    <option>Baltimore</option> 
                </select><br/>
                Team Sport?</br>
                Team Sport:
                <select name="new_team_sport">
                    <option>American Football</option>
                    <option>Soccer</option>
                    <option>Hockery</option>
                    <option>Basketball</option> 
                    <option>Baseball</option> 
                </select><br/>
<button type="submit">Submit New Team!</button>

</form>

<form action="insertNewCoach.php" method="post">

<legend>Add A New Coach!</legend>
                New Coach First Name?<br/>
                First Name: 
                <select name="new_coach_fname">
                    <option>James</option>
                    <option>Sarah</option>
                    <option>Roger</option>
                    <option>Steven</option>
                </select><br/>
                New Coach Last Name?<br/>
                Last Name:
                <select name="new_coach_lname">
                    <option>Streeter</option>
                    <option>Grade</option>
                    <option>Sign</option>
                    <option>Journer</option> 
                </select><br/>
<button type="submit">Create New Coach!</button>
</form>


<form action="insertNewPlayer.php" method="post">
<legend>Add A New Player!</legend>
                New Player First Name?<br/>
                First Name: 
                <select name="new_player_fname">
                    <option>Christian</option>
                    <option>De'Angelo</option>
                    <option>Josh</option>
                    <option>Robert</option>
                    <option>James</option>
                </select><br/>
                New Player Last Name?<br/>
                Last Name:
                <select name="new_player_lname">
                    <option>Norban</option>
                    <option>Kells</option>
                    <option>Williams</option>
                    <option>Morgan</option> 
                </select><br/>
<button type="submit">Create New Player!</button>
</form>

</body>
</html>