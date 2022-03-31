<?php
include "conf.php";
if(isset($_POST['name_of_player'])) {
    $pname = $_POST['name_of_player'];
    $assist= $_POST['_of_assists'];
    $goal= $_POST['_of_goals'];
    $match= $_POST['_of_matches'];
    $id= $_POST['Club_id'];
    $sql_statement = "INSERT INTO Player(name_of_player,_of_assists, _of_goals, _of_matches, Club_id) 
                        VALUES ('$pname','$assist', '$goal', '$match', '$id')";
    $result = mysqli_query($db, $sql_statement);
    header("Location: print.php");
}
else {
    echo "lolol";
}



?>