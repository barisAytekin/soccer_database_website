<!DOCTYPE html>
<html>
<style>
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
img {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 40%;
}
input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
body {
background-color: green;}
</style>
<div align = "center">
<b>Welcome to Football Database(FDb)</b></div>

<h3>Please enter info about the player</h3>

<div>
  <form action="insert.php" method = "POST">
    <input type="text" id="fname" name = "name_of_player" placeholder = "Name">
    <input type="text" id="lname" name="_of_assists" placeholder = "Assists">
    <input type="text" id="lname1" name="_of_goals" placeholder = "Goals">
    <input type="text" id="lname1" name="_of_matches" placeholder = "Matches">
    <input type="text" id="lname3" name="Club_id" placeholder = "Club ID">
    
  
    <input type="submit" value="Submit">
  </form>
</div>

<img src="Soccer-ball.jpg" style="horizontal-align: middle">
</body>
</html>

<!--
<!DOCTYPE html>
<html>
<head>
        <title>MAIN</title>
</head>
<body>
<div align = "center">
<b>Welcome to Football Database(FDb)</b>
</div>
<br>
<br>
<b> For insertion to the player database please enter the player's info</b>
<form action = "insert.php" method = "POST">
    <input type = "text" name = "name_of_player" placeholder = "Name"><br>
    <input type = "text" name = "_of_assists" placeholder = "Assists"><br>
    <input type = "text" name = "_of_goals" placeholder = "Goals"><br>
    <input type = "text" name = "_of_matches" placeholder = "Matches"><br>
    <button> send </button>
</form>

<b> For insertion to the team database please enter the team's info</b>
<form action = "insert.php" method = "POST">
    <input type = "text" name = "" placeholder = "Name"><br>
    <input type = "text" name = "_of_assists" placeholder = "Assists"><br>
    <input type = "text" name = "_of_goals" placeholder = "Goals"><br>
    <input type = "text" name = "_of_matches" placeholder = "Matches"><br>
    <input type = "text" name = "Club_id" placeholder = "Club id"><br>
    <button> send </button>
</form>

<div align = "center">
Thank you for your input
</body>
</html>
-->