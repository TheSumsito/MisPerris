-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 12-09-2018 a las 17:22:04
-- Versión del servidor: 5.5.24-log
-- Versión de PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `misperris`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE IF NOT EXISTS `cliente` (
  `Correo` varchar(45) NOT NULL,
  `RutCliente` varchar(45) NOT NULL,
  `NombreCompleto` varchar(45) NOT NULL,
  `FechaNaci` date NOT NULL,
  `Telefono` int(11) NOT NULL,
  `TipoVivienda` varchar(45) NOT NULL,
  `region_IdRegion` int(11) NOT NULL,
  `comuna_IdComuna` int(11) NOT NULL,
  PRIMARY KEY (`RutCliente`),
  KEY `fk_cliente_region` (`region_IdRegion`),
  KEY `fk_cliente_comuna1` (`comuna_IdComuna`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`Correo`, `RutCliente`, `NombreCompleto`, `FechaNaci`, `Telefono`, `TipoVivienda`, `region_IdRegion`, `comuna_IdComuna`) VALUES
('mar.jaral@outlook.com', '1', 'Copanomi', '2018-05-12', 98765432, 'C_Sin_Pat', 1, 1),
('mar.jaral@outlook.com', '1209809807890', 'NUEVOSsdfsdfsdf', '2018-05-11', 98765432, 'C_Sin_Pat', 1, 1),
('mar.jaral@outlook.com', '123456789', 'Copanomi', '0000-00-00', 98765432, 'C_Sin_Pat', 1, 1),
('mjaral@outlook.com', '19891214-k', 'Marcelo Eduardo Jara Lira', '0000-00-00', 963666133, 'C_Patio_Pe', 1, 1),
('mar.jaral@outlook.com', '987654321', 'Copanomi', '2018-05-12', 98765432, 'C_Sin_Pat', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comuna`
--

CREATE TABLE IF NOT EXISTS `comuna` (
  `IdComuna` int(11) NOT NULL,
  `Descripcion` varchar(45) NOT NULL,
  `region_IdRegion` int(11) NOT NULL,
  PRIMARY KEY (`IdComuna`),
  KEY `fk_comuna_region1` (`region_IdRegion`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `comuna`
--

INSERT INTO `comuna` (`IdComuna`, `Descripcion`, `region_IdRegion`) VALUES
(1, 'Santiago', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `User` varchar(45) NOT NULL,
  `Pass` varchar(45) NOT NULL,
  PRIMARY KEY (`User`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `region`
--

CREATE TABLE IF NOT EXISTS `region` (
  `IdRegion` int(11) NOT NULL,
  `Descripcion` varchar(45) NOT NULL,
  PRIMARY KEY (`IdRegion`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `region`
--

INSERT INTO `region` (`IdRegion`, `Descripcion`) VALUES
(1, 'Metropolitana');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD CONSTRAINT `fk_cliente_comuna1` FOREIGN KEY (`comuna_IdComuna`) REFERENCES `comuna` (`IdComuna`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_cliente_region` FOREIGN KEY (`region_IdRegion`) REFERENCES `region` (`IdRegion`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `comuna`
--
ALTER TABLE `comuna`
  ADD CONSTRAINT `fk_comuna_region1` FOREIGN KEY (`region_IdRegion`) REFERENCES `region` (`IdRegion`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
