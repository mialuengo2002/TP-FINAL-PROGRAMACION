<?php
session_start();

if (!isset($_SESSION['id_usuario'])) {
    header("Location: ingreso.php");
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['taller'])) {
    include 'conn.php';

    $idTaller = (int) $_POST['taller'];
    $idUsuario = (int) $_SESSION['id_usuario'];

    $sql = "INSERT INTO inscripcion (id_usuario, id_taller) VALUES (?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ii", $idUsuario, $idTaller);
    $stmt->execute();

    $stmt->close();
    $conn->close();

    header("Location: home.php");
    exit;
} else {
    header("Location: index.php");
    exit;
}