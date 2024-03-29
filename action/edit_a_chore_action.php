<?php
include '../settings/connection.php';
include '../admin/edit_chore_view.php';

if(isset($_POST["submit"])) {
    $id =$_GET['EditID'];
    $Updatedchore= $_POST['chorename'];
    $sql="UPDATE chores SET chorename= '$Updatedchore' WHERE cid = '$id'"; 

    if (mysqli_query($mysqli, $sql)) {
        echo "Record updated successfully";
        header('Location: ../admin/chore_control_view.php');
        exit();
    } else {
        echo "Error updating record: " . mysqli_error($mysqli);
    }

} else {
        echo "Submission error";
}
