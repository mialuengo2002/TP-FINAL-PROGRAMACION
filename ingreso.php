<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingreso - A Todo Ritmo</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100..900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="ingreso.css">
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

    <!-- Login -->
    <section class="login-section">

        <div class="login-card">

            <h2>Ingreso</h2>

            <p class="text-center text-muted mb-4">
                Ingresá con tu usuario y contraseña.
            </p>

            <form action="log.php" method="POST">

                <input type="email"
                 name="email"
                 placeholder="Correo"
                 required>

                <input type="password"
                name="password"
                placeholder="Contraseña"
                required>
                
                <button type="submit">Ingresar</button>

                <p class="text-center mt-3">
                    ¿No tenés una cuenta?
                    <a href="register.php">Registrate</a>
                </p>
            </form>
        </div>
        
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>