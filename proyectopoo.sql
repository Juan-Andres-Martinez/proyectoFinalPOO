-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-09-2023 a las 02:36:18
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyectopoo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pagos`
--

CREATE TABLE `pagos` (
  `id` int(11) NOT NULL,
  `nombre_de_tarjeta` varchar(255) NOT NULL,
  `numero_de_tarjeta` int(255) NOT NULL,
  `fecha_de_vencimiento` date NOT NULL,
  `ccv` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `pagos`
--

INSERT INTO `pagos` (`id`, `nombre_de_tarjeta`, `numero_de_tarjeta`, `fecha_de_vencimiento`, `ccv`) VALUES
(1, 'sdfsd', 123123, '0000-00-00', 0),
(2, 'sdfsd', 123123, '0000-00-00', 0),
(3, 'sdfsd', 123123, '0000-00-00', 0),
(4, 's', 0, '0000-00-00', 0),
(5, 's', 0, '0000-00-00', 0),
(6, 's', 0, '0000-00-00', 0),
(7, 's', 0, '0000-00-00', 0),
(8, 's', 0, '0000-00-00', 0),
(9, 's', 0, '0000-00-00', 0),
(10, 's', 0, '0000-00-00', 0),
(11, 'asd', 123, '0000-00-00', 123),
(12, 'd', 1, '0000-00-00', 789),
(13, 'sdfsd', 56465, '0000-00-00', 123);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesionales`
--

CREATE TABLE `profesionales` (
  `id` int(11) NOT NULL,
  `primernombre` varchar(255) NOT NULL,
  `segundonombre` varchar(255) NOT NULL,
  `primerapellido` varchar(255) NOT NULL,
  `segundoapellido` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `cv` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `profesionales`
--

INSERT INTO `profesionales` (`id`, `primernombre`, `segundonombre`, `primerapellido`, `segundoapellido`, `foto`, `cv`) VALUES
(1, 'juan', 'andres', 'martinez', 'baquero', 'foto.jpg', 'hola.pdf'),
(2, 'asd', 'sdfsdf', 'asd', 'asd', 'legoAtras.jpg', 'Hoja de vida Juan Martinez.pdf'),
(3, 'a', 'a', 'a', 'a', 'legoFrente.jpg', 'Lectura Finanzas.pdf');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombres` varchar(255) NOT NULL,
  `apellidos` varchar(255) NOT NULL,
  `correo` varchar(255) NOT NULL,
  `telefono` int(10) NOT NULL,
  `contraseña` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombres`, `apellidos`, `correo`, `telefono`, `contraseña`) VALUES
(1, 'asd', 'asd', 'j@gmail.com', 123, 'asd'),
(2, 'sdfs', 'lsajflask', 'j@gmail.com', 0, '123'),
(3, 'jlsdfj', 'lsajflask', 'j@gmail.com', 32132, 'sdfsfsdf'),
(4, 'pepito', 'paes', 'prueba@gmail.com', 123, '123'),
(5, 'a', 'a', '1@gmail.com', 1, '1'),
(6, 'camilo', 'rey', '2@gmail.com', 24546, '123');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `pagos`
--
ALTER TABLE `pagos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `profesionales`
--
ALTER TABLE `profesionales`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `pagos`
--
ALTER TABLE `pagos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `profesionales`
--
ALTER TABLE `profesionales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
