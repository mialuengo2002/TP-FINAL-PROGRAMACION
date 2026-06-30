<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['email']) && isset($_POST['password'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        // Consulta para verificar si el usuario existe en la base de datos
        $sql = "SELECT * FROM usuarios WHERE email = ? AND password = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ss", $email, $password);
        $stmt->execute();
        $result = $stmt->get_result();

        // Verificar si se encontró un usuario
        if ($result->num_rows > 0) {
            echo "Bienvenido";
            $conn->close();
            header("Location: home.php");
        } else {
            // Si no se encuentra el usuario, redirigir a index.php
            echo "<script>
                alert('Usuario o contraseña incorrectos.');
                </script>";
        }
        $stmt->close();
    } else {
        echo "Error: Falta completar un campo";
    }
}
$conn->close();
