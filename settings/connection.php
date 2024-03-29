<?php
define("servername","localhost");
define("username","root");
define("password","");
define("database", "chores");

$mysqli= new mysqli(servername, username, password, database);

if ($mysqli->connect_error) {
    echo("Connection failed: ". $mysqli->connect_error);
    die();
}

