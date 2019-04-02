-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-04-2019 a las 23:08:43
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `hospital`
--
CREATE DATABASE IF NOT EXISTS `hospital` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `hospital`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ficha_medica`
--

CREATE TABLE `ficha_medica` (
  `idFicha` int(11) NOT NULL,
  `diagnostico` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tratamiento1` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tratamiento2` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `examenes` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `antecedentes` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comentarios` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fechaCreacion` datetime NOT NULL,
  `idPaciente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticias`
--

CREATE TABLE `noticias` (
  `idNoticias` int(11) NOT NULL,
  `tituloNoticia` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cuerpoNoticia` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fechaNoticia` datetime NOT NULL,
  `ultimaEdicion` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paciente`
--

CREATE TABLE `paciente` (
  `idPaciente` int(11) NOT NULL,
  `nombrePaciente` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellidoPaciente` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rutPaciente` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefonoPaciente` int(11) NOT NULL,
  `emailPaciente` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `direccionPaciente` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ciudadPaciente` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idUsuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idUsuario` int(11) NOT NULL,
  `nombreUsuario` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellidoUsuario` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `emailUsuario` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `passUsuario` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `privilegio` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `especialidad` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idUsuario`, `nombreUsuario`, `apellidoUsuario`, `emailUsuario`, `passUsuario`, `privilegio`, `especialidad`) VALUES
(1, 'admin', 'admin', 'admin@admin.cl', 'admin', 'admin', 'admin');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `ficha_medica`
--
ALTER TABLE `ficha_medica`
  ADD PRIMARY KEY (`idFicha`),
  ADD KEY `idPaciente` (`idPaciente`);

--
-- Indices de la tabla `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`idNoticias`);

--
-- Indices de la tabla `paciente`
--
ALTER TABLE `paciente`
  ADD PRIMARY KEY (`idPaciente`),
  ADD KEY `idUsuario` (`idUsuario`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idUsuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `ficha_medica`
--
ALTER TABLE `ficha_medica`
  MODIFY `idFicha` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `noticias`
--
ALTER TABLE `noticias`
  MODIFY `idNoticias` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `paciente`
--
ALTER TABLE `paciente`
  MODIFY `idPaciente` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `ficha_medica`
--
ALTER TABLE `ficha_medica`
  ADD CONSTRAINT `ficha_medica_ibfk_1` FOREIGN KEY (`idPaciente`) REFERENCES `paciente` (`idPaciente`);

--
-- Filtros para la tabla `paciente`
--
ALTER TABLE `paciente`
  ADD CONSTRAINT `paciente_ibfk_1` FOREIGN KEY (`idUsuario`) REFERENCES `usuario` (`idUsuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
