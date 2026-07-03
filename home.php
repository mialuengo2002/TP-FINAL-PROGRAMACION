<?php
session_start();
if (!isset($_SESSION['id_usuario'])) {
    header("Location: ingreso.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="home.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<link rel="stylesheet" href="home.css">
<link rel="stylesheet" href="footer.css">
</head>
<body>


    <header>
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
    </header>
    <main>
        <section>
            <p>Sesión iniciada como: <?php echo htmlspecialchars($_SESSION['username']); ?> (<?php echo htmlspecialchars($_SESSION['email']); ?>) — <a href="logout.php" class="cerrarsesion">Cerrar sesión</a></p>
            <h2>Bienvenid@ Artista!</h2>
            
            <p>Aqui podras encontrar tus talleres.</p>
        </section>
    </main>
    <?php
        include 'footer.php';
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>