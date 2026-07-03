<!--<?php
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
-->
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro - A Todo Ritmo</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="register.css">
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-azul">
        <div class="container">

            <a class="navbar-brand" href="index.php">
                <img src="img/Mesa de trabajo 5.png" alt="Logo A Todo Ritmo" height="50">
            </a>

            <a href="index.php" class="btn btn-volver">
                Volver al inicio
            </a>

        </div>
    </nav>

    <section class="login-section">

        <div class="login-card">

            <h2>Registrarse</h2>

            <form action="" method="post">

                <?php if ($registro_error): ?>
                <div class="alert alert-danger">
                    <?php echo htmlspecialchars($registro_error); ?>
                </div>
                <?php endif; ?>

                <div class="mb-3">
                    <label for="username" class="form-label">Usuario</label>
                    <input type="text" class="form-control" id="username" name="username" required>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Correo electrónico</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>

                <div class="mb-4">
                    <label for="password" class="form-label">Contraseña</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>

                <button type="submit" class="btn btn-login">
                    Registrarse
                </button>

                <div class="text-center mt-4">
                    <a href="ingreso.php" class="volver">
                        ¿Ya tenés un usuario? Iniciá sesión
                    </a>
                </div>

            </form>

        </div>

    </section>

</body>

</html>