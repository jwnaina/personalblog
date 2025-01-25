<?php 

$hostname = "localhost";
$database = "afternoontea";
$user = "root";
$password = "";

$mysqli = new mysqli($hostname, $user, $password, $database);
if ($mysqli -> connect_errno) {
    echo "Falha ao conectar: (". $mysqli->connect_errno . ") " . $mysqli->connect_errno;
}