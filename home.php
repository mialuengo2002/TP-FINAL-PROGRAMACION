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
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Artista</h1>
    </header>
    <main>
        <section>
            <p>Sesión iniciada como: <?php echo htmlspecialchars($_SESSION['username']); ?> (<?php echo htmlspecialchars($_SESSION['email']); ?>) — <a href="logout.php">Cerrar sesión</a></p>
            <h2>Bienvenido a la pagina del artista</h2>
            <iframe src="https://open.spotify.com/embed/track/3nCFiwtuVqVJmnSasApvr3?utm_source=generator&theme=0" width="100%" height="152" style="border-radius:12px" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolorem quae ducimus cum voluptatibus accusantium distinctio porro quod quas, voluptatum similique ratione? Distinctio illum, maiores voluptatum recusandae aspernatur provident non voluptas! Dolorem fugiat vel sequi, doloribus nesciunt natus assumenda id. Accusantium cumque enim a, laudantium laboriosam debitis labore placeat omnis qui!</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore enim laborum animi, similique placeat suscipit ex facere. Quo illo veritatis quibusdam. Ex accusantium laborum cupiditate eaque libero modi? Consequatur, nulla.</p>
        </section>
    </main>
    <?php
        include 'footer.php';
    ?>
</body>
</html>