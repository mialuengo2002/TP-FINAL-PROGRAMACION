<?php 
$dbserver = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'atr'; //Modificar con el nombre de la base de datos

$conn = new mysqli($dbserver, $dbuser, $dbpass, $dbname);

if(!$conn){
    echo "Houston tenemos un problema";
}

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}