<?php
require_once "../settings/connection.php";

$query= "SELECT * FROM family_name";
$result = $mysqli -> query($query);

if ($result->num_rows > 0) {
    return $results = mysqli_fetch_all($result, MYSQLI_ASSOC);
}

$mysqli->close();
