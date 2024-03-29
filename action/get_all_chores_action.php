<?php
require "../settings/connection.php";

function view_chores()
{
    global $mysqli;

    $all_chores = "SELECT * FROM chores";

    if ($result = mysqli_query($mysqli, $all_chores)) {
        if ($result->num_rows > 0) {
            $results = mysqli_fetch_all($result, MYSQLI_ASSOC);
            return $results;
        } else {
            echo "No records found";
        }
    }

    return [];
}


