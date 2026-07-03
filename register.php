<?php
session_start();
include 'conn.php';

$registro_error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password'])) {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        try {
            $sql = "INSERT INTO usuarios (username, email, password) VALUES (?, ?, ?)";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("sss", $username, $email, $password);
            if ($stmt->execute()) {
                $_SESSION['id_usuario'] = $stmt->insert_id;
                $_SESSION['username'] = $username;
                $_SESSION['email'] = $email;
                $stmt->close();
                $conn->close();
                header("Location: home.php");
                exit;
            } else {
                $registro_error = "Error: " . $stmt->error;
            }
            $stmt->close();
        } catch (mysqli_sql_exception $e) {
            $registro_error = "Ocurrió un error al registrar el usuario: $email. Es posible que el correo ya esté registrado.";
        }
    } else {
        $registro_error = "Error: Falta completar un campo";
    }
}
$conn->close();
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro - A Todo Ritmo</title>
    <link rel="stylesheet" href="register.css">
</head>

<body>
    <main>
        <form action="" method="post">
            <?php if ($registro_error): ?>
                <p style="color: red;"><?php echo htmlspecialchars($registro_error); ?></p>
            <?php endif; ?>
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