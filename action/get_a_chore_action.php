<?php
include '../settings/connection.php';

function return_a_chore ($cid){
    global $mysqli;
    $query = "SELECT * FROM chores WHERE cid = '$cid'";


    if ($result = mysqli_query($mysqli, $query)) {
        if ($result->num_rows > 0) {
            $row = mysqli_fetch_assoc($result);
            return $row;
    }
   
}
}