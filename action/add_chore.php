<?php
require_once "../settings/connection.php";

if(isset($_POST["addChoreButton"])){
    $choreName= $_POST["choreName"];
   

    
    $insertquery= "INSERT INTO chores (chorename)
    VALUES ('$choreName')" ;

    if (mysqli_query($mysqli, $insertquery)) {
        header("Location: ../admin/chore_control_view.php");
        exit();
    } else {
        echo "Error: " . $insertquery . "<br>" . mysqli_error($mysqli);
    }



}