<?php
include_once '../settings/connection.php';

if(isset($_GET['id'])) {
    $assignment_id = $_GET['id'];

    $query = "DELETE FROM assignment WHERE assignmentid = $assignment_id";
    $result = $mysqli->query($query);

    if (mysqli_query($mysqli, $query)) {
        header("Location: ../admin/assign_chore_view.php");
        exit();
    } else {
         echo "Error: " . $mysqli->error;
        }
} else {
     header("Location: ../admin/assign_chore_view.php");
    exit();
}

