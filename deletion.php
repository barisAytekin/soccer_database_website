<html>
<style>
    body {
background-color: lightblue;
color: darkgreen}
</style>
</html>
<?php 
    include "conf.php";
    if (isset($_POST['name_of_player'])){
        $selection_id = $_POST['name_of_player'];

        $sql_statement = "DELETE FROM Player WHERE name_of_player = '$selection_id'";

        $result = mysqli_query($db, $sql_statement);
        header("Location: print.php");
    }
    


    else
    {

        echo "The form is not set.";

    }
?>