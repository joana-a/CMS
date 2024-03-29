<?php
require_once "../settings/connection.php";

$query= "SELECT * FROM people";
$aresult = $mysqli -> query($query);

if ($aresult->num_rows > 0) {
    return $aresults = mysqli_fetch_all($aresult, MYSQLI_ASSOC);
}

$mysqli->close(); 
