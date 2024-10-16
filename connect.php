<?php

$host = "localhost";
$username = "root";
$password = "mysql";
$database = "schoolrateDB";

$mysqli = new mysqli($host, $username, $password, $database);

if ($mysqli->connect_error) {
    die ("Connection failed: " . $mysqli->connect_error);
} else {
    echo " ";
}

$mysqli->set_charset("utf8");


?>