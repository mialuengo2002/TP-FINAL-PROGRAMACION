-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-06-2026 a las 16:15:24
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `atr`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno`
--

CREATE TABLE `alumno` (
  `id_ALUMNO` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `dni` varchar(255) NOT NULL,
  `contacto` varchar(255) NOT NULL,
  `nivel` varchar(255) NOT NULL,
  `fecha_nacimiento` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `alumno`
--

INSERT INTO `alumno` (`id_ALUMNO`, `nombre`, `dni`, `contacto`, `nivel`, `fecha_nacimiento`) VALUES
(1, 'Alejandro Perez', '45263898', 'ale4566@gmail.com', 'básico', '2016-06-08'),
(2, 'Melina Martinez', '56598423', 'melina1234@gmail.com', 'medio', '2018-11-02'),
(3, 'Natalia machado', '45647286', 'natiimch@gmail.com', 'básico', '2010-08-04');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`),
  ADD UNIQUE KEY `usuarios_email_unique` (`email`);

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gustar`
--

CREATE TABLE `gustar` (
  `id_gustar` bigint(20) UNSIGNED NOT NULL,
  `id_alumno` bigint(20) UNSIGNED NOT NULL,
  `id_instrumento` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `gustar`
--

INSERT INTO `gustar` (`id_gustar`, `id_alumno`, `id_instrumento`) VALUES
(1, 1, 5),
(2, 2, 4),
(3, 3, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inscripcion`
--

CREATE TABLE `inscripcion` (
  `id_inscripcion` bigint(20) UNSIGNED NOT NULL,
  `fechaInscripcion` datetime NOT NULL,
  `idAlumno` bigint(20) UNSIGNED DEFAULT NULL,
  `idTaller` bigint(20) UNSIGNED NOT NULL,
  `idUsuario` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `inscripcion`
--

INSERT INTO `inscripcion` (`id_inscripcion`, `fechaInscripcion`, `idAlumno`, `idTaller`, `idUsuario`) VALUES
(1, '2026-06-23 21:00:00', 1, 2, NULL),
(2, '2026-06-17 18:00:15', 3, 3, NULL),
(3, '2024-02-01 15:32:53', 2, 3, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `instrumento`
--

CREATE TABLE `instrumento` (
  `id_instrumento` bigint(20) UNSIGNED NOT NULL,
  `nombreinstrumento` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `instrumento`
--

INSERT INTO `instrumento` (`id_instrumento`, `nombreinstrumento`) VALUES
(1, 'Bateria'),
(2, 'Piano'),
(3, 'Guitarra criolla'),
(4, 'Guitarra electrica'),
(5, 'Clarinete');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `presentacion`
--

CREATE TABLE `presentacion` (
  `id_presentacion` bigint(20) UNSIGNED NOT NULL,
  `fechayhora` datetime NOT NULL,
  `lugar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `presentacion`
--

INSERT INTO `presentacion` (`id_presentacion`, `fechayhora`, `lugar`) VALUES
(1, '2026-11-12 15:38:37', 'Auditorio MyC'),
(2, '2026-06-23 15:38:37', 'Auditorio 3'),
(3, '2026-06-23 15:38:37', 'auditorio 4');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesor`
--

CREATE TABLE `profesor` (
  `id_profesor` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `dni` varchar(255) NOT NULL,
  `años_antiguedad` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `profesor`
--

INSERT INTO `profesor` (`id_profesor`, `nombre`, `fecha_nacimiento`, `dni`, `años_antiguedad`) VALUES
(1, 'Laura Fernandez', '1990-02-24', '23569862', '2026-06-23 15:21:20'),
(2, 'Diego Gomez', '1986-02-20', '26563265', '2020-06-09 10:21:20'),
(3, 'Valentina Lopez', '2000-05-09', '45861245', '2025-12-26 10:25:33');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `taller`
--

CREATE TABLE `taller` (
  `id_taller` bigint(20) UNSIGNED NOT NULL,
  `nombre_taller` varchar(255) NOT NULL,
  `id_profesor` bigint(20) UNSIGNED NOT NULL,
  `horario` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `taller`
--

INSERT INTO `taller` (`id_taller`, `nombre_taller`, `id_profesor`, `horario`) VALUES
(1, 'Piano', 3, '10:00:00'),
(2, 'Batería ', 2, '18:00:00'),
(3, 'canto', 1, '17:00:00'),
(4, 'Guitarra', 1, '19:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `taller_presentacion`
--

CREATE TABLE `taller_presentacion` (
  `id_presentacion` bigint(20) UNSIGNED NOT NULL,
  `id_taller` bigint(20) UNSIGNED NOT NULL,
  `tallerpresentacion` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `taller_presentacion`
--

INSERT INTO `taller_presentacion` (`id_presentacion`, `id_taller`, `tallerpresentacion`) VALUES
(3, 2, 1),
(3, 1, 2),
(1, 3, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tocar`
--

CREATE TABLE `tocar` (
  `id_tocar` bigint(20) UNSIGNED NOT NULL,
  `id_profesor` bigint(20) UNSIGNED NOT NULL,
  `id_instrumento` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tocar`
--

INSERT INTO `tocar` (`id_tocar`, `id_profesor`, `id_instrumento`) VALUES
(1, 2, 1),
(2, 3, 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD PRIMARY KEY (`id_ALUMNO`),
  ADD UNIQUE KEY `alumno_dni_unique` (`dni`);

--
-- Indices de la tabla `gustar`
--
ALTER TABLE `gustar`
  ADD PRIMARY KEY (`id_gustar`),
  ADD KEY `gustar_id_instrumento_foreign` (`id_instrumento`),
  ADD KEY `gustar_id_alumno_foreign` (`id_alumno`);

--
-- Indices de la tabla `inscripcion`
--
ALTER TABLE `inscripcion`
  ADD PRIMARY KEY (`id_inscripcion`),
  ADD KEY `inscripcion_idtaller_foreign` (`idTaller`),
  ADD KEY `inscripcion_idalumno_foreign` (`idAlumno`),
  ADD KEY `inscripcion_idusuario_foreign` (`idUsuario`);

--
-- Indices de la tabla `instrumento`
--
ALTER TABLE `instrumento`
  ADD PRIMARY KEY (`id_instrumento`);

--
-- Indices de la tabla `presentacion`
--
ALTER TABLE `presentacion`
  ADD PRIMARY KEY (`id_presentacion`);

--
-- Indices de la tabla `profesor`
--
ALTER TABLE `profesor`
  ADD PRIMARY KEY (`id_profesor`),
  ADD UNIQUE KEY `profesor_dni_unique` (`dni`);

--
-- Indices de la tabla `taller`
--
ALTER TABLE `taller`
  ADD PRIMARY KEY (`id_taller`),
  ADD KEY `taller_id_profesor_foreign` (`id_profesor`);

--
-- Indices de la tabla `taller_presentacion`
--
ALTER TABLE `taller_presentacion`
  ADD PRIMARY KEY (`tallerpresentacion`),
  ADD KEY `taller_presentacion_id_presentacion_foreign` (`id_presentacion`),
  ADD KEY `taller_presentacion_id_taller_foreign` (`id_taller`);

--
-- Indices de la tabla `tocar`
--
ALTER TABLE `tocar`
  ADD PRIMARY KEY (`id_tocar`),
  ADD KEY `tocar_id_instrumento_foreign` (`id_instrumento`),
  ADD KEY `tocar_id_profesor_foreign` (`id_profesor`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumno`
--
ALTER TABLE `alumno`
  MODIFY `id_ALUMNO` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `gustar`
--
ALTER TABLE `gustar`
  MODIFY `id_gustar` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `inscripcion`
--
ALTER TABLE `inscripcion`
  MODIFY `id_inscripcion` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `instrumento`
--
ALTER TABLE `instrumento`
  MODIFY `id_instrumento` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `presentacion`
--
ALTER TABLE `presentacion`
  MODIFY `id_presentacion` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `profesor`
--
ALTER TABLE `profesor`
  MODIFY `id_profesor` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `taller`
--
ALTER TABLE `taller`
  MODIFY `id_taller` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `taller_presentacion`
--
ALTER TABLE `taller_presentacion`
  MODIFY `tallerpresentacion` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tocar`
--
ALTER TABLE `tocar`
  MODIFY `id_tocar` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `gustar`
--
ALTER TABLE `gustar`
  ADD CONSTRAINT `gustar_id_alumno_foreign` FOREIGN KEY (`id_alumno`) REFERENCES `alumno` (`id_ALUMNO`),
  ADD CONSTRAINT `gustar_id_instrumento_foreign` FOREIGN KEY (`id_instrumento`) REFERENCES `instrumento` (`id_instrumento`);

--
-- Filtros para la tabla `inscripcion`
--
ALTER TABLE `inscripcion`
  ADD CONSTRAINT `inscripcion_idalumno_foreign` FOREIGN KEY (`idAlumno`) REFERENCES `alumno` (`id_ALUMNO`),
  ADD CONSTRAINT `inscripcion_idtaller_foreign` FOREIGN KEY (`idTaller`) REFERENCES `taller` (`id_taller`),
  ADD CONSTRAINT `inscripcion_idusuario_foreign` FOREIGN KEY (`idUsuario`) REFERENCES `usuarios` (`id_usuario`);

--
-- Filtros para la tabla `taller`
--
ALTER TABLE `taller`
  ADD CONSTRAINT `taller_id_profesor_foreign` FOREIGN KEY (`id_profesor`) REFERENCES `profesor` (`id_profesor`);

--
-- Filtros para la tabla `taller_presentacion`
--
ALTER TABLE `taller_presentacion`
  ADD CONSTRAINT `taller_presentacion_id_presentacion_foreign` FOREIGN KEY (`id_presentacion`) REFERENCES `presentacion` (`id_presentacion`),
  ADD CONSTRAINT `taller_presentacion_id_taller_foreign` FOREIGN KEY (`id_taller`) REFERENCES `taller` (`id_taller`);

--
-- Filtros para la tabla `tocar`
--
ALTER TABLE `tocar`
  ADD CONSTRAINT `tocar_id_instrumento_foreign` FOREIGN KEY (`id_instrumento`) REFERENCES `instrumento` (`id_instrumento`),
  ADD CONSTRAINT `tocar_id_profesor_foreign` FOREIGN KEY (`id_profesor`) REFERENCES `profesor` (`id_profesor`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
