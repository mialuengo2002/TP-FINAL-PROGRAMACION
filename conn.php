<?php
$dbserver = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "atr";

$conn = new mysqli($dbserver, $dbuser, $dbpass, $dbname);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
?>