<!DOCTYPE html>

<html>

    <head>

        <title>Update Coach</title>

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

<form action="updateCoachFirstName.php" method="POST">
    First Name to Update:<input type="text" name="coach_fname_update" /></br>
        
    New Coach First Name: <input type="text" name="coach_new_fname" />
    
    <input type="submit" value="Update" /></br></br>
</form>

<form action="updateCoachLastName.php" method="POST">
    Last Name to Update:<input type="text" name="coach_lname_update" /></br>
        
    New Coach Last Name: <input type="text" name="coach_new_lname" />
    
    <input type="submit" value="Update" />
</form>



        </form>

    </body>

</html>