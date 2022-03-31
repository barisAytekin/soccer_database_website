<!DOCTYPE html>
<html>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
body {
background-color: lightblue;
color: darkgreen}
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
<div align="center">

	<table>
    <tr> <th> PLAYER </th> <th> ASSISTS </th> <th>GOALS</th> </tr> 
<?php
include "conf.php";
    if (isset($_POST['_of_goals'])){
        $selection_id = $_POST['_of_goals'];

        $sql_statement = "SELECT *  FROM Player WHERE _of_goals >= $selection_id";

        $result = mysqli_query($db, $sql_statement);
        while($row = mysqli_fetch_assoc($result))
        {
            $pname = $row['name_of_player'];
            $assist = $row['_of_assists'];
            $goal = $row['_of_goals'];

            echo "<tr>" . "<th>" . $pname . "</th>" . "<th>" . $assist . "</th>" . "<th>" . $goal . "</th>" . "</tr>";
        }
    }
    


    else
    {

        echo "The form is not set.";

    }

?>
</table>
</html>