-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-11-2014 a las 06:49:58
-- Versión del servidor: 5.6.16
-- Versión de PHP: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `bd_control_activos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `activo`
--

CREATE TABLE IF NOT EXISTS `activo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombreActivo` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `idSala` int(11) NOT NULL,
  `codigo` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `codigo` (`codigo`),
  KEY `idSala_sala` (`idSala`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Volcado de datos para la tabla `activo`
--

INSERT INTO `activo` (`id`, `nombreActivo`, `idSala`, `codigo`) VALUES
(1, 'Tablet Apple', 1, 123564),
(2, 'Tablet Samsung', 1, 234256),
(3, 'Tablet Apple', 1, 434234),
(4, 'Tablet Samsung', 1, 324231),
(5, 'Tablet Samsung', 1, 234200),
(6, 'Tablet Samsung', 1, 324230),
(7, 'Computadora Mac', 1, 434290),
(8, 'Computadora Mac', 1, 320831),
(9, 'Computadora Mac', 1, 200200),
(10, 'Computadora Mac', 1, 324223);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `auditoria`
--

CREATE TABLE IF NOT EXISTS `auditoria` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `estado` bit(1) NOT NULL,
  `fecha` date NOT NULL,
  `comentario` varchar(100) DEFAULT NULL,
  `idUsuario` tinyint(11) NOT NULL,
  `idSala` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idSala_sala_auditoria` (`idSala`),
  KEY `idUsuario_usuario_auditoria` (`idUsuario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `auditoria-activo`
--

CREATE TABLE IF NOT EXISTS `auditoria-activo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idAuditoria` int(11) NOT NULL,
  `idActivo` int(11) NOT NULL,
  `calCualitativa` varchar(12) DEFAULT NULL,
  `calCuantitativa` tinyint(4) DEFAULT NULL,
  `estado` bit(1) NOT NULL,
  `comentario` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uq_idActivo_idAuditoria` (`idAuditoria`,`idActivo`),
  KEY `idActivo_activo` (`idActivo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `edificio`
--

CREATE TABLE IF NOT EXISTS `edificio` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(25) NOT NULL,
  `idSede` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idSede_sede_edificio` (`idSede`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Volcado de datos para la tabla `edificio`
--

INSERT INTO `edificio` (`id`, `nombre`, `idSede`) VALUES
(1, 'Edficio 1', 2),
(2, 'Edificio 2', 2),
(3, 'Edficio 3', 2),
(4, 'Edificio 4', 2),
(5, 'Edficio 1', 1),
(6, 'Edificio 2', 1),
(7, 'Edificio 3', 1),
(8, 'Edificio 4', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `piso`
--

CREATE TABLE IF NOT EXISTS `piso` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(25) NOT NULL,
  `idEdificio` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idEdificio_edificio_piso` (`idEdificio`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `piso`
--

INSERT INTO `piso` (`id`, `nombre`, `idEdificio`) VALUES
(1, 'Piso 1', 1),
(2, 'Piso 2', 1),
(3, 'Piso 1', 3),
(4, 'Piso 2', 3),
(5, 'Piso 1', 6),
(6, 'Piso 2', 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sala`
--

CREATE TABLE IF NOT EXISTS `sala` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(25) NOT NULL,
  `idPiso` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idPiso_piso_sala` (`idPiso`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `sala`
--

INSERT INTO `sala` (`id`, `nombre`, `idPiso`) VALUES
(1, 'sala móviles', 2),
(2, 'LAIMI', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sede`
--

CREATE TABLE IF NOT EXISTS `sede` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(25) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `sede`
--

INSERT INTO `sede` (`id`, `nombre`) VALUES
(1, 'Cartago'),
(2, 'San Carlos'),
(3, 'Alajuela'),
(4, 'San José');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(30) NOT NULL,
  `apellido1` varchar(15) NOT NULL,
  `apellido2` varchar(15) NOT NULL,
  `usuario` varchar(15) NOT NULL,
  `pass` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `Nombre`, `apellido1`, `apellido2`, `usuario`, `pass`) VALUES
(1, 'Mauricio', 'Jiménez', 'Gutiérrez', 'mau', '123');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `activo`
--
ALTER TABLE `activo`
  ADD CONSTRAINT `idSala_sala` FOREIGN KEY (`idSala`) REFERENCES `sala` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `auditoria`
--
ALTER TABLE `auditoria`
  ADD CONSTRAINT `idSala_sala_auditoria` FOREIGN KEY (`idSala`) REFERENCES `sala` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `idUsuario_usuario_auditoria` FOREIGN KEY (`idUsuario`) REFERENCES `usuario` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `auditoria-activo`
--
ALTER TABLE `auditoria-activo`
  ADD CONSTRAINT `idActivo_activo` FOREIGN KEY (`idActivo`) REFERENCES `activo` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `idAuditoria_auditoria` FOREIGN KEY (`idAuditoria`) REFERENCES `auditoria` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `edificio`
--
ALTER TABLE `edificio`
  ADD CONSTRAINT `idSede_sede_edificio` FOREIGN KEY (`idSede`) REFERENCES `sede` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `piso`
--
ALTER TABLE `piso`
  ADD CONSTRAINT `idEdificio_edificio_piso` FOREIGN KEY (`idEdificio`) REFERENCES `edificio` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `sala`
--
ALTER TABLE `sala`
  ADD CONSTRAINT `idPiso_piso_sala` FOREIGN KEY (`idPiso`) REFERENCES `piso` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
