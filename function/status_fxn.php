<?php
require_once "../settings/connection.php";

$query= "SELECT * FROM status";
$sresult = $mysqli -> query($query);

if ($sresult->num_rows > 0) {
    return $sresults = mysqli_fetch_all($sresult, MYSQLI_ASSOC);
}

$mysqli->close();
