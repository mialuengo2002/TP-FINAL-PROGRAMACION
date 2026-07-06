<?php
$dbserver = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "atr";
$dbport = 3306;

$conn = new mysqli($dbserver, $dbuser, $dbpass, $dbname, $dbport);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}