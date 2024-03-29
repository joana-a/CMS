<?php
require_once "../settings/connection.php";

$query= "SELECT * FROM chores";
$cresult = $mysqli -> query($query);

if ($cresult->num_rows > 0) {
    return $cresults = mysqli_fetch_all($cresult, MYSQLI_ASSOC);
}

$mysqli->close();
