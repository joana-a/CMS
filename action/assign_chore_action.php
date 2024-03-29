<?php
include_once "../settings/connection.php";



if(isset($_POST["assignChoreButton"])){
    $assigned_person= $_POST['assignPerson'];
    $chore_id = $_POST['assignChore'];
    $status_id = $_POST['chorestatus'];
    $date_assigned = $_POST['assignedDate'];
    $date_due = $_POST['dueDate'];
    $who_assigned = $_POST['assigner'];

    
    $assignment_query = "INSERT INTO assignment (cid, sid, date_assign, date_due, last_updated, who_assigned) 
                         VALUES ('$chore_id', '$status_id', '$date_assigned', '$date_due', NOW(), '$who_assigned')";
    
    
    $assignment_result = mysqli_query($mysqli, $assignment_query);

    
    $assignment_id = mysqli_insert_id($mysqli);

    
    $assigned_people_query = "INSERT INTO assigned_people (pid, assignmentid) 
                              VALUES ('$assigned_person', '$assignment_id')";

    
    $assigned_people_result = mysqli_query($mysqli, $assigned_people_query);

    
    if ($assignment_result && $assigned_people_result) {
        header("Location: ../admin/assign_chore_view.php");
        exit();
    } else {
        echo "Error: " . mysqli_error($mysqli);
    }
}
// } else {
//     header("Location: ../admin/assign_chore_view.php");
//     exit();
// }

