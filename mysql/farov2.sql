-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-11-2024 a las 02:21:34
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `farov2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `acces_obj`
--

CREATE TABLE `acces_obj` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `code_obj` varchar(50) NOT NULL,
  `descripcion` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `objetos`
--

CREATE TABLE `objetos` (
  `id` int(11) NOT NULL,
  `code_obj` varchar(50) NOT NULL,
  `descripcion` varchar(250) NOT NULL,
  `tipo_objeto` varchar(50) NOT NULL COMMENT '1=menu\r\n2=bi'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `objetos`
--

INSERT INTO `objetos` (`id`, `code_obj`, `descripcion`, `tipo_objeto`) VALUES
(1, 'M1', 'Principal', '1'),
(2, 'M2', 'Usuario', '1'),
(3, 'M3', 'BI', '1'),
(4, 'P_1', 'Dashboar principal', '5');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipos_obj`
--

CREATE TABLE `tipos_obj` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(150) NOT NULL,
  `stat` int(1) NOT NULL COMMENT '1=in\r\n2=off'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tipos_obj`
--

INSERT INTO `tipos_obj` (`id`, `descripcion`, `stat`) VALUES
(1, 'Menu', 1),
(2, 'BI', 1),
(4, 'Facturacion', 1),
(5, 'SUB_PRIN', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(150) NOT NULL,
  `pass` varchar(250) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `tipo_user` int(2) NOT NULL,
  `stat` int(2) NOT NULL,
  `fecha_log` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `email`, `pass`, `nombre`, `apellido`, `tipo_user`, `stat`, `fecha_log`) VALUES
(1, 'pedro.arrieta@grupopcr.com.pa', '123456', 'Pedro', 'Arrieta', 1, 1, '2024-11-15 01:04:37'),
(2, 'pedroarrieta25@hotmail.com', '123123', 'xokas', 'cliente', 2, 1, '2024-11-15 04:53:05');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `acces_obj`
--
ALTER TABLE `acces_obj`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `objetos`
--
ALTER TABLE `objetos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipos_obj`
--
ALTER TABLE `tipos_obj`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `acces_obj`
--
ALTER TABLE `acces_obj`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `objetos`
--
ALTER TABLE `objetos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `tipos_obj`
--
ALTER TABLE `tipos_obj`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
