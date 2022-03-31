<!DOCTYPE html>
<html>
<head>
	<title>Messages</title>

<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}
body {
background-color: green;
color: magenta}
td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
.button1 {
  background-color: #f44336; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  cursor: pointer;
}
</style>

</head>
<body>

<div align="center">

	<table>

<tr> <th> PLAYER </th> <th> ASSISTS </th> <th>GOALS</th> <th>MATCHES</th> <th>TEAM</th> <th>PLACE OF THE TEAM IN THE LEAGUE</th></tr> 

<?php

include "conf.php";

$sql_statement = "SELECT * FROM Player";

$result = mysqli_query($db, $sql_statement);

while($row = mysqli_fetch_assoc($result))
{
  $pname = $row['name_of_player'];
  $assist = $row['_of_assists'];
  $goal = $row['_of_goals'];
  $match = $row['_of_matches'];
  $id = $row['Club_id'];
  $stat = "SELECT Club.name_of_club
  FROM Club
  WHERE Club_id = '$id'";
  $cname = mysqli_fetch_assoc(mysqli_query($db, $stat))['name_of_club'];

  $stat2 = "SELECT place.Place
  FROM place
  WHERE Club_id = '$id'";
  $place = mysqli_fetch_assoc(mysqli_query($db, $stat2))['Place'];


	echo "<tr>" . "<th>" . $pname . "</th>" . "<th>" . $assist . "</th>" . "<th>" . $goal . "</th>" . "<th>" . $match . "</th>". "<th>"  . $cname."</th>"."<th>" . $place."</th>" ."</tr>";
}


?>
<b> For deletion from the database please enter the player's name</b>
<br>
<form action = "deletion.php" method = "POST">
    <input  type = "text" name = "name_of_player" placeholder = "Name"><br>
    
    <button class = "button1"> delete </button>
    
</form>
<br>
<br><b> For selection from the database please enter the minimum number of goals of the player</b> <br>
<form action = "select.php" method = "POST">
    <input  type = "text" name = "_of_goals" placeholder = "Goals"><br>
    
    <button class = "button1"> select </button>
    
</form>

</table>
</div>

</body>
</html>
