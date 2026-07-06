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

    
    $check = "SELECT 1 FROM inscripcion WHERE idAlumno = ? AND idTaller = ?";
    $stmtCheck = $conn->prepare($check);
    $stmtCheck->bind_param("ii", $idUsuario, $idTaller);
    $stmtCheck->execute();
    $stmtCheck->store_result();

    if ($stmtCheck->num_rows > 0) {
        $stmtCheck->close();
        $conn->close();

        header("Location: home.php");
        exit;
    }

    $stmtCheck->close();

    // Insertar inscripción
    $sql = "INSERT INTO inscripcion (idAlumno, idTaller) VALUES (?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ii", $idUsuario, $idTaller);

    if ($stmt->execute()) {
        $stmt->close();
        $conn->close();

        header("Location: home.php");
        exit;
    } else {
        echo "Error al inscribir: " . $stmt->error;
    }

} else {
    header("Location: index.php");
    exit;
}