<?php
include_once '../settings/connection.php';

if(isset($_GET['assignmentid'])) {
    $assignment_id = $_GET['assignmentid'];

    $query = "DELETE FROM assignment WHERE assignmentid = $assignment_id";
    $result = $mysqli->query($query);

    if ($result) {
        header("Location: ../admin/assign_chore_view.php");
        exit();
    } else {
         echo "Error: " . $mysqli->error;
        }
} else {
     header("Location: ../admin/assign_chore_view.php");
    exit();
}

