<!DOCTYPE html>

<html>

    <head>

        <title>Delete Coach</title>

        <meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

        <form action="deleteCoach.php" method="POST">

            First Name to Delete:&nbsp;<input type="text" name="coach_first_Name"><br>
            Last Name to Delete:&nbsp;<input type="text" name="coach_last_Name"><br>
            

            <input type="submit" name="delete" value="Delete Data">

        </form>

    </body>

</html>