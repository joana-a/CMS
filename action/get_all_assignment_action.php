<?php
include_once '../settings/connection.php';

// Function to get all assignments
function get_all_assignments() {
    global $mysqli;

    // $query = "SELECT * FROM assignment";
    $query = "SELECT a.*, c.chorename, s.sname, p.fname, p.lname 
          FROM assignment a
          JOIN chores c ON a.cid = c.cid
          JOIN status s ON a.sid = s.sid
          JOIN people p ON a.who_assigned = p.pid";

    $result = $mysqli->query($query);

    if ($result) {
        if ($result->num_rows > 0) {
            $assignments = $result->fetch_all(MYSQLI_ASSOC);
            return $assignments;
        } else {
            return array();
        }
    } else {
        return "Error: " . $mysqli->error;
    }
}

