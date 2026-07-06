<?php
session_start();

if (!isset($_SESSION['id_usuario'])) {
    header("Location: ingreso.php");
    exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["taller"])) {

    include "conn.php";

    $idUsuario = $_SESSION['id_usuario'];
    $idTaller = (int)$_POST['taller'];

    $sql = "DELETE FROM inscripcion
            WHERE idAlumno = ? AND idTaller = ?";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ii", $idUsuario, $idTaller);
    $stmt->execute();

    $stmt->close();
    $conn->close();
}

header("Location: home.php");
exit;