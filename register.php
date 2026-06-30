<?php
include 'conn.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password'])) {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        try {
            $sql = "INSERT INTO usuarios (username, email, password) VALUES (?, ?, ?)";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("sss", $username, $email, $password);
            if ($stmt->execute()) {
                echo "Usuario registrado exitosamente.";
                $conn->close();
                header("Location: home.php");
            } else {
                echo "Error: " . $stmt->error;
            }
        } catch (mysqli_sql_exception $e) {
            echo "<p style='font-size: 1.5rem;'>Ocurrió un error al registrar el usuario: $email. Por favor, intenta de nuevo más tarde.</p>";
            echo "<script>console.error('Error en el guardado: " . $e->getMessage() . "');</script>";
        }
    } else {
        echo "Error: Falta completar un campo";
    }

    $stmt->close();
}
$conn->close();
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro usando BBDD</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>
        <form action="" method="post">
            <label for="username">Usuario:</label>
            <input type="text" id="username" name="username" required><br>
            <label for="password">Contraseña:</label>
            <input type="password" id="password" name="password" required><br>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required><br>
            <button type="submit">Registrarse</button>
            <a href="index.php">Ya tiene un usuario?</a>
        </form>
    </main>
</body>

</html>