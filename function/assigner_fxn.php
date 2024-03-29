<?php
require_once "../settings/connection.php";

$query= "SELECT * FROM people";
$assresult = $mysqli -> query($query);

if ($assresult->num_rows > 0) {
    return $assresults = mysqli_fetch_all($assresult, MYSQLI_ASSOC);
}

$mysqli->close();
