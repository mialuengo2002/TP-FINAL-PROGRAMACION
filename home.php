<?php
session_start();
if (!isset($_SESSION['id_usuario'])) {
    header("Location: ingreso.php");
    exit;
}

include 'conn.php';

$idUsuario = $_SESSION['id_usuario'];

// Talleres en los que ya está inscripto
$sql = "SELECT t.*
        FROM inscripcion i
        JOIN taller t ON t.id_taller = i.idTaller
        WHERE i.idAlumno = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $idUsuario);
$stmt->execute();
$misTalleres = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);


// Todos los talleres
$sql = "SELECT * FROM taller";
$result = $conn->query($sql);
$talleres = $result->fetch_all(MYSQLI_ASSOC);
$stmt->close();
$conn->close();
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

            <?php if (empty($misTalleres)): ?>
                <p>Todavía no estás inscripto en ningún taller. <a href="index.php#inscribirse">Inscribite acá</a>.</p>
            <?php else: ?>
                <h3>Tus talleres</h3>
                <ul class="lista-talleres">
                    <?php foreach ($misTalleres as $t): ?>
                        <li>
    <strong><?php echo htmlspecialchars($t['nombre_taller']); ?></strong>
    — Horario: <?php echo htmlspecialchars(substr($t['horario'], 0, 5)); ?>

    <form action="eliminar_inscripcion.php" method="POST" style="display:inline;">
        <input type="hidden" name="taller" value="<?php echo $t['id_taller']; ?>">
        <button type="submit" class="btn btn-danger btn-sm ms-2">
            Cancelar inscripción
        </button>
    </form>
</li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>
        </section>

        <hr>

<h3>Talleres disponibles</h3>

<?php
$idsInscriptos = array_column($misTalleres, 'id_taller');
?>

<div class="row">
<?php foreach ($talleres as $taller): ?>

    <div class="col-md-4 mb-3">
        <div class="card p-3">

            <h5><?= htmlspecialchars($taller['nombre_taller']) ?></h5>

            <p>
                Horario: <?= htmlspecialchars(substr($taller['horario'],0,5)) ?>
            </p>

            <?php if (in_array($taller['id_taller'], $idsInscriptos)): ?>
                
                <button class="btn btn-success" disabled>
                    Inscripto
                </button>

            <?php else: ?>

                <form action="inscribir.php" method="POST">
                    <input type="hidden" name="taller" value="<?= $taller['id_taller'] ?>">

                    <button class="btn btn-primary">
                        Inscribirme
                    </button>
                </form>

            <?php endif; ?>

        </div>
    </div>

<?php endforeach; ?>
</div>
    </main>
    <?php
        include 'footer.php';
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>