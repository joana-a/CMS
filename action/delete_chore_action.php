<?php
include '../settings/connection.php';


if(isset($_GET['DeleteID'])) {
    $id=$_GET['DeleteID'];
    $deletequery="DELETE FROM Chores WHERE cid = '$id'"; 

    if (mysqli_query($mysqli, $deletequery)) {
        echo "Successfully deleted chore";
        header('Location: ../admin/chore_control_view.php'); 
        exit();
    } else {
        echo "Error deleting record: " . mysqli_error($mysqli);
    }

    } 
else {
    header('Location: ../admin/chore_control_view.php');
    }
    mysqli_close($mysqli);
