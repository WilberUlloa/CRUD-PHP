-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 03-12-2022 a las 05:43:21
-- Versión del servidor: 8.0.27
-- Versión de PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sisgep`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `agentes`
--

DROP TABLE IF EXISTS `agentes`;
CREATE TABLE IF NOT EXISTS `agentes` (
  `cod_usuario` int NOT NULL AUTO_INCREMENT,
  `usuario` varchar(100) COLLATE utf8_bin NOT NULL,
  `contrasena` varchar(100) COLLATE utf8_bin NOT NULL,
  `pnombre` varchar(45) COLLATE utf8_bin NOT NULL,
  `snombre` varchar(45) COLLATE utf8_bin DEFAULT NULL,
  `papellido` varchar(45) COLLATE utf8_bin NOT NULL,
  `sapellido` varchar(45) COLLATE utf8_bin DEFAULT NULL,
  `cedula` varchar(45) COLLATE utf8_bin DEFAULT NULL,
  `correo` varchar(60) COLLATE utf8_bin NOT NULL,
  `tipo` tinyint(1) NOT NULL,
  PRIMARY KEY (`cod_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

DROP TABLE IF EXISTS `cliente`;
CREATE TABLE IF NOT EXISTS `cliente` (
  `codCliente` int NOT NULL AUTO_INCREMENT,
  `pnombre` varchar(45) COLLATE utf8_bin NOT NULL,
  `snombre` varchar(45) COLLATE utf8_bin DEFAULT NULL,
  `papellido` varchar(45) COLLATE utf8_bin NOT NULL,
  `sapellido` varchar(45) COLLATE utf8_bin DEFAULT NULL,
  `profesion` varchar(45) COLLATE utf8_bin DEFAULT NULL,
  `cedula` varchar(45) COLLATE utf8_bin NOT NULL,
  `telefono` int NOT NULL,
  PRIMARY KEY (`codCliente`)
) ENGINE=InnoDB AUTO_INCREMENT=89 DEFAULT CHARSET=utf8mb3 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`codCliente`, `pnombre`, `snombre`, `papellido`, `sapellido`, `profesion`, `cedula`, `telefono`) VALUES
(2, 'Lola', 'Massiel', 'Ortiz', 'González', 'Doctora', '001584047R', 58782518),
(4, 'María', 'Sofía', 'Castillo', 'Flores', 'Docente', '01014151588E', 60504044),
(5, 'José', 'Armando', 'Bassett', 'Campos', 'Director de cine', '01022010203E', 905948345),
(6, 'Mario', 'Oscar', 'Torres', 'Camilo', 'Constructor', '010123938439R', 96059594),
(40, 'Nohelia', 'Rosa', 'Serda', 'Arroliga', 'Doctora', '0192910249O', 19203922),
(41, 'Oscar', 'Eliezer', 'Sánchez', 'Olivar', 'Dentista', '001203940345T', 93839231),
(88, 'Gloria', 'María', 'Aguilar', 'Centeno', 'Oficial', '0012039948B', 992934874);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fotos`
--

DROP TABLE IF EXISTS `fotos`;
CREATE TABLE IF NOT EXISTS `fotos` (
  `codFoto` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `direcccion` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `codPropiedad` int DEFAULT NULL,
  PRIMARY KEY (`codFoto`),
  KEY `fk_prop` (`codPropiedad`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permisos`
--

DROP TABLE IF EXISTS `permisos`;
CREATE TABLE IF NOT EXISTS `permisos` (
  `idpermiso` int NOT NULL AUTO_INCREMENT,
  `tipo` tinyint(1) NOT NULL,
  `url` varchar(100) COLLATE utf8_bin NOT NULL,
  `descripcion` varchar(45) COLLATE utf8_bin NOT NULL,
  `orden` varchar(45) COLLATE utf8_bin NOT NULL,
  `agentes_cod_usuario` int NOT NULL,
  PRIMARY KEY (`idpermiso`),
  KEY `fk_permisos_agentes1` (`agentes_cod_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb3 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `propiedades`
--

DROP TABLE IF EXISTS `propiedades`;
CREATE TABLE IF NOT EXISTS `propiedades` (
  `codPropiedad` int NOT NULL AUTO_INCREMENT,
  `codigo_propiedadb` varchar(50) COLLATE utf8_bin NOT NULL,
  `tipoPropiedad` varchar(100) COLLATE utf8_bin NOT NULL,
  `tipoTramite` varchar(100) COLLATE utf8_bin NOT NULL,
  `ubicacion` varchar(100) COLLATE utf8_bin NOT NULL,
  `cantCuartos` int DEFAULT NULL,
  `cantBanos` int DEFAULT NULL,
  `jardin` tinyint(1) DEFAULT '0',
  `patio` tinyint(1) DEFAULT '0',
  `sala` tinyint(1) DEFAULT '0',
  `comedor` tinyint(1) DEFAULT '0',
  `cocina` tinyint(1) DEFAULT '0',
  `lavanderia` tinyint(1) DEFAULT '0',
  `cuartoServicio` tinyint(1) DEFAULT '0',
  `barbacoa` tinyint(1) DEFAULT '0',
  `areaTerreno` int DEFAULT NULL,
  `seguridad` tinyint(1) DEFAULT '0',
  `piscina` tinyint(1) DEFAULT '0',
  `estudio` tinyint(1) DEFAULT '0',
  `terraza` tinyint(1) DEFAULT '0',
  `garaje` tinyint(1) DEFAULT '0',
  `walkingCloset` tinyint(1) DEFAULT '0',
  `220v` tinyint(1) DEFAULT '0',
  `escuelas` tinyint(1) DEFAULT '0',
  `cercaTrafico` tinyint(1) DEFAULT '0',
  `areaConstruccion` int DEFAULT NULL,
  `aniosConstruccion` int DEFAULT NULL,
  `tipoConstruccion` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `documentacion` tinyint(1) NOT NULL DEFAULT '0',
  `observaciones` varchar(500) COLLATE utf8_bin DEFAULT NULL,
  `cliente_codCliente` int NOT NULL,
  `estado_propiedad` varchar(50) COLLATE utf8_bin NOT NULL,
  `precio` float NOT NULL,
  `comsion` float NOT NULL,
  `fecha` date NOT NULL,
  `direccion` text COLLATE utf8_bin NOT NULL,
  `agente` varchar(100) COLLATE utf8_bin NOT NULL,
  `solvenciaMunicipal` tinyint(1) NOT NULL DEFAULT '0',
  `HistoriaRegistral` tinyint(1) NOT NULL DEFAULT '0',
  `planoCatastral` tinyint(1) NOT NULL DEFAULT '0',
  `certificadoCatastral` tinyint(1) NOT NULL DEFAULT '0',
  `avaluo` tinyint(1) NOT NULL DEFAULT '0',
  `agentes_cod_usuario` int NOT NULL,
  PRIMARY KEY (`codPropiedad`),
  KEY `fk_propiedades_cliente` (`cliente_codCliente`),
  KEY `fk_propiedades_agentes1` (`agentes_cod_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3 COLLATE=utf8_bin;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `fotos`
--
ALTER TABLE `fotos`
  ADD CONSTRAINT `fk_prop` FOREIGN KEY (`codPropiedad`) REFERENCES `propiedades` (`codPropiedad`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `permisos`
--
ALTER TABLE `permisos`
  ADD CONSTRAINT `fk_permisos_agentes1` FOREIGN KEY (`agentes_cod_usuario`) REFERENCES `agentes` (`cod_usuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `propiedades`
--
ALTER TABLE `propiedades`
  ADD CONSTRAINT `fk_propiedades_agentes1` FOREIGN KEY (`agentes_cod_usuario`) REFERENCES `agentes` (`cod_usuario`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_propiedades_cliente` FOREIGN KEY (`cliente_codCliente`) REFERENCES `cliente` (`codCliente`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
