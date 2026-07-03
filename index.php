<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A Todo Ritmo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100..900&family=Source+Code+Pro:wght@200..900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <link rel="stylesheet" href="index.css">
</head>

<body>

    <header>
        <section class="banner">
            <section class="container mt-5">
                <h1 class="text-center">A Todo Ritmo</h1>
                <p class="text-center">Tu destino para la mejor música y entretenimiento.</p>

                <div class="text-center">
                    <a href="#talleres" class="btn btn-talleres mt-3">
                        Ver Talleres
                    </a>
                </div>
            </section>
        </section>

        <nav class="navbar fixed-top navbar-azul">
            <div class="container-fluid">
                <a class="navbar-brand d-flex align-items-center" href="#">
                    <img src="img/Mesa de trabajo 5.png" alt="Logo A Todo Ritmo" height="50" class="me-2">
                </a>

                <div class="d-flex align-items-center ms-auto">

    <a href="ingreso.php" class="btn iniciar-sesion-btn me-2">
        Iniciar sesión
    </a>

    <a href="register.php" class="btn iniciar-sesion-btn me-2">
        Registrarse
    </a>

    <button class="navbar-toggler" type="button"
        data-bs-toggle="offcanvas"
        data-bs-target="#offcanvasNavbar"
        aria-controls="offcanvasNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>

</div>
                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                    aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">A Todo Ritmo</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                            <li class="nav-item">
                                <a class="nav-link" href="#quienes-somos">Quiénes Somos</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="#staff">Staff</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#talleres">Talleres</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#inscribirse">Inscribirse</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#contacto">Contacto</a>
                            </li>
                        </ul>
                        <form class="d-flex mt-3" role="search">
                            <input class="form-control me-2" type="buscar" placeholder="Buscar" aria-label="Buscar" />
                            <button class="btn btn-outline-success" type="submit">Buscar</button>
                        </form>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <main>
        <section id="quienes-somos" class="container mt-5">
            <div class="row align-items-center mb-5">

                <div class="col-md-8">
                    <h2 class="titulo-quienes-somos">Quiénes Somos</h2>

                    <p>
                        En A Todo Ritmo creemos que la música es una herramienta poderosa para el desarrollo personal,
                        la creatividad y la expresión artística. Somos una escuela de música dedicada a la formación de
                        alumnos de todas las edades y niveles, brindando un espacio donde cada persona puede descubrir y
                        potenciar su talento musical.
                        Contamos con una amplia variedad de talleres, entre ellos guitarra, piano, canto y batería,
                        impartidos por profesores altamente capacitados y con experiencia en diferentes especialidades
                        musicales. Nuestro objetivo es ofrecer una enseñanza de calidad, adaptada a las necesidades e
                        intereses de cada estudiante, acompañándolos en su crecimiento desde los primeros pasos hasta
                        niveles más avanzados.

                    </p>
                </div>

                <div class="col-md-4 text-center">
                    <img src="/img/NENA BATERIA.jpg" alt="Escuela de Música" class="img-circulo">
                </div>

            </div>
            <div class="row mt-4">

                <div class="col-md-4 mb-4">
                    <div class="card-valores h-100 shadow-sm">
                        <div class="card-body">
                            <h3 class="card-title-valores">Misión</h3>
                            <p class="card-text">
                                Brindar una educación musical de calidad que permita a nuestros alumnos desarrollar sus
                                habilidades artísticas, técnicas y creativas en un ambiente inclusivo, motivador y
                                profesional.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="card-valores h-100 shadow-sm">
                        <div class="card-body">
                            <h3 class="card-title-valores">Visión</h3>
                            <p class="card-text">
                                Ser una escuela de música reconocida por la excelencia de su formación, la dedicación de
                                sus
                                profesores y el desarrollo integral de sus alumnos.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="card-valores h-100 shadow-sm">
                        <div class="card-body">
                            <h3 class="card-title-valores">Valores</h3>
                            <p>
                                Con dedicación y responsabilidad para ofrecer una formación musical de calidad.
                            </p>
                            <p>
                                Fomentamos el amor por la música como una forma de expresión artística y creatividad.
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <section id="staff" class="container mt-5">
            <section class="staff-info">

                <h2 class="titulo-staff">Staff</h2>
                <div class="row justify-content-center">

                    <div class="col-md-4 text-center">
                        <h3>Dirección</h3>
                        <p>Martín Salazar — Director General</p>
                        <p>Valeria Ferrero — Directora Académica</p>
                    </div>

                    <div class="col-md-4 text-center">
                        <h3>Administración</h3>
                        <p>Lucía Benítez — Coordinadora Administrativa</p>
                        <p>Nicolás Romero — Responsable de Inscripciones y Atención al Alumno</p>
                    </div>

                </div>

            </section>

            <section class="profesores-section">

                <h3 class="mt-5 text-center">Nuestro Equipo de Profesores</h3>

                <div class="row mt-4">
                    <div class="col-md-4 mb-4">
                        <div class="card h-100">
                            <div class="card-body">
                                <h5 class="card-title">Martín Rodríguez</h5>
                                <p class="card-text">
                                    Músico y docente con más de 10 años de experiencia en la enseñanza de guitarra
                                    acústica
                                    y eléctrica.
                                    Especializado en rock, blues y música popular.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 mb-4">
                        <div class="card h-100">
                            <div class="card-body">
                                <h5 class="card-title">Laura Fernández</h5>
                                <p class="card-text">
                                    Pianista profesional con formación en música clásica y contemporánea.
                                    Desarrolla clases dinámicas adaptadas a cada estudiante.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 mb-4">
                        <div class="card h-100">
                            <div class="card-body">
                                <h5 class="card-title">Sofía Martínez</h5>
                                <p class="card-text">
                                    Cantante y entrenadora vocal especializada en técnica vocal,
                                    interpretación y expresión escénica.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 mb-4">
                        <div class="card h-100">
                            <div class="card-body">
                                <h5 class="card-title">Diego Gómez</h5>
                                <p class="card-text">
                                    Especialista en percusión y batería moderna.
                                    Sus clases combinan técnica, coordinación y práctica musical.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 mb-4">
                        <div class="card h-100">
                            <div class="card-body">
                                <h5 class="card-title">Camila Herrera</h5>
                                <p class="card-text">
                                    Músico multiinstrumentista y coordinadora de actividades grupales,
                                    conciertos y presentaciones de alumnos.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 mb-4">
                        <div class="card h-100">
                            <div class="card-body">
                                <h5 class="card-title">Valentina López</h5>
                                <p class="card-text">
                                    Especialista en enseñanza para niños y principiantes mediante
                                    metodologías lúdicas e interactivas.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </section>

            <section id="talleres" class="container mt-5 talleres-bg">
                <h2 class="titulo-talleres">Talleres</h2>

                <div class="row">

                    <div class="col-md-3">
                        <div class="taller-card">
                            <h3>Batería</h3>
                            <p>Aprende a dominar el ritmo y la coordinación con prácticas dinámicas enfocadas en
                                técnica,
                                lectura rítmica e interpretación de diversos géneros musicales. Ideal para quienes
                                desean
                                iniciarse o perfeccionar sus habilidades en la percusión.
                            </p>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="taller-card">
                            <h3>Canto</h3>
                            <p>Desarrolla tu voz mediante ejercicios de respiración, afinación, proyección vocal e
                                interpretación artística. Este taller permite fortalecer la confianza y la expresión
                                personal a través de la música.
                            </p>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="taller-card">
                            <h3>Guitarra</h3>
                            <p>Aprende las técnicas fundamentales de la guitarra acústica y eléctrica, desarrollando
                                habilidades de interpretación, acompañamiento y ejecución de diferentes estilos
                                musicales.
                                Ideal para alumnos principiantes, intermedios y avanzados.
                            </p>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="taller-card">
                            <h3>Piano</h3>
                            <p>Un espacio para descubrir y perfeccionar el arte del piano. Los estudiantes aprenden
                                lectura
                                musical, técnica, coordinación y ejecución de repertorios clásicos y contemporáneos,
                                adaptados a su nivel de experiencia.
                            </p>
                        </div>
                    </div>

                </div>

            </section>

            <section id="horarios" class="container mt-5 mb-5 horarios-bg">
                <div class="horarios-box">
                    <div class="table-responsive">
                        <div>
                            <h2 class="titulo-horarios mt-5 text-center">Horarios</h2>

                            <section id="talleres" class="container mt-5">

                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Taller</th>
                                                <th>Día</th>
                                                <th>Horario</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Batería</td>
                                                <td>Lunes y Miércoles</td>
                                                <td>18:00 - 19:30</td>
                                            </tr>

                                            <tr>
                                                <td>Canto</td>
                                                <td>Martes y Jueves</td>
                                                <td>17:00 - 18:30</td>
                                            </tr>

                                            <tr>
                                                <td>Guitarra</td>
                                                <td>Lunes y Viernes</td>
                                                <td>19:00 - 20:30</td>
                                            </tr>

                                            <tr>
                                                <td>Piano</td>
                                                <td>Sábados</td>
                                                <td>10:00 - 12:00</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </section>

            <div class="card shadow p-4 formulario-section">
                <section id="inscribirse" class="container mt-5 pt-5">
                    <h2 class="text-center mb-4">Formulario de Inscripción</h2>

                    <form>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="nombre" class="form-label">Nombre y Apellido</label>
                                <input type="text" class="form-control" id="nombre" required>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="edad" class="form-label">Edad</label>
                                <input type="number" class="form-control" id="edad" required>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Correo Electrónico</label>
                            <input type="email" class="form-control" id="email" required>
                        </div>

                        <div class="mb-3">
                            <label for="telefono" class="form-label">Teléfono</label>
                            <input type="tel" class="form-control" id="telefono">
                        </div>

                        <div class="mb-3">
                            <label for="taller" class="form-label">Taller</label>
                            <select class="form-select" id="taller" required>
                                <option selected disabled>Seleccioná un taller</option>
                                <option>Batería</option>
                                <option>Canto</option>
                                <option>Guitarra</option>
                                <option>Piano</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="horario" class="form-label">Horario Preferido</label>
                            <select class="form-select" id="horario">
                                <option>Lunes y Miércoles 18:00 - 19:30</option>
                                <option>Martes y Jueves 17:00 - 18:30</option>
                                <option>Lunes y Viernes 19:00 - 20:30</option>
                                <option>Sábados 10:00 - 12:00</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="comentarios" class="form-label">Comentarios</label>
                            <textarea class="form-control" id="comentarios" rows="4"></textarea>
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-enviar">
                                Enviar Inscripción
                            </button>
                        </div>
                    </form>
                </section>
            </div>
    </main>


    <footer class="footer-atr">
        <section id="contacto" class="container py-5">
            <h2 class="text-center mb-4">Contacto</h2>

            <div class="text-center">
                <p>📍 Av. Santa Fe 2450, Recoleta, CABA</p>
                <p>📞 11 3204-9986</p>
                <p>✉️ atodoritmo@gmail.com</p>
            </div>

            <hr>

            <p class="text-center mb-0">
                © 2026 A Todo Ritmo - Todos los derechos reservados
            </p>
        </section>

        <div class="text-center mt-4">
            <a href="#" class="red-social">
                <i class="bi bi-instagram"></i>
            </a>

            <a href="#" class="red-social">
                <i class="bi bi-facebook"></i>
            </a>

            <a href="#" class="red-social">
                <i class="bi bi-youtube"></i>
            </a>

            <a href="#" class="red-social">
                <i class="bi bi-tiktok"></i>
            </a>
        </div>
    </footer>




    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
    <!-- para q se cierre el menu hamburguesa cuando tocass-->
    <script>
        const offcanvasElement = document.getElementById('offcanvasNavbar');

        document.querySelectorAll('.offcanvas .nav-link').forEach(link => {
            link.addEventListener('click', () => {
                const bsOffcanvas = bootstrap.Offcanvas.getOrCreateInstance(offcanvasElement);
                bsOffcanvas.hide();
            });
        });
    </script>

</body>

</html>