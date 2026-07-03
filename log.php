<?php
session_start();
include 'conn.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['email']) && isset($_POST['password'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        // Consulta para verificar si el usuario existe en la base de datos
        $sql = "SELECT * FROM usuarios WHERE email = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();
        $usuario = $result->fetch_assoc();
        $stmt->close();
        $conn->close();

        if ($usuario && password_verify($password, $usuario['password'])) {
            $_SESSION['id_usuario'] = $usuario['id_usuario'];
            $_SESSION['username'] = $usuario['username'];
            $_SESSION['email'] = $usuario['email'];

            header("Location: home.php");
            exit;
        } else {
            echo "<script>
                alert('Usuario o contraseña incorrectos.');
                window.location.href = 'ingreso.php';
                </script>";
        }
    } else {
        echo "Error: Falta completar un campo";
    }
} else {
    header("Location: ingreso.php");
    exit;
}
