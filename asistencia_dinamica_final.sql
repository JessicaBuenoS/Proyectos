-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 25-11-2018 a las 18:28:06
-- Versión del servidor: 5.1.41
-- Versión de PHP: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `asistencia_dinamica`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actividades`
--

CREATE TABLE IF NOT EXISTS `actividades` (
  `id_actividad` int(11) NOT NULL AUTO_INCREMENT,
  `id_agenda` varchar(10) NOT NULL,
  `nombre_actividad` varchar(100) NOT NULL,
  `ubicacion` varchar(50) NOT NULL,
  `h_inicio` time NOT NULL,
  `h_fin` time NOT NULL,
  PRIMARY KEY (`id_actividad`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Volcar la base de datos para la tabla `actividades`
--

INSERT INTO `actividades` (`id_actividad`, `id_agenda`, `nombre_actividad`, `ubicacion`, `h_inicio`, `h_fin`) VALUES
(6, '0123453', 'Carrera botargas', 'estacionamiento', '15:00:00', '16:00:00'),
(5, '0123453', 'InaguraciÃ³n', 'estacionamiento', '08:00:00', '08:30:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `agenda`
--

CREATE TABLE IF NOT EXISTS `agenda` (
  `id_agenda` varchar(10) NOT NULL,
  `id_evento` varchar(10) NOT NULL,
  PRIMARY KEY (`id_agenda`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `agenda`
--

INSERT INTO `agenda` (`id_agenda`, `id_evento`) VALUES
('0123453', '012345'),
('7891123', '789112'),
('1234562', '123456');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asistencia_entrada`
--

CREATE TABLE IF NOT EXISTS `asistencia_entrada` (
  `id_evento` varchar(10) NOT NULL,
  `id_usuario` varchar(10) NOT NULL,
  `h_entrada` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `asistencia_entrada`
--

INSERT INTO `asistencia_entrada` (`id_evento`, `id_usuario`, `h_entrada`) VALUES
('012345', '170010', '2018-11-25 18:26:57');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asistencia_salida`
--

CREATE TABLE IF NOT EXISTS `asistencia_salida` (
  `id_evento` varchar(10) NOT NULL,
  `id_usuario` varchar(10) NOT NULL,
  `h_salida` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `asistencia_salida`
--

INSERT INTO `asistencia_salida` (`id_evento`, `id_usuario`, `h_salida`) VALUES
('012345', '170010', '2018-11-25 18:27:04');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carreras`
--

CREATE TABLE IF NOT EXISTS `carreras` (
  `id_carrera` int(11) NOT NULL,
  `nombre_carrera` varchar(50) NOT NULL,
  PRIMARY KEY (`id_carrera`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `carreras`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compras_monedero`
--

CREATE TABLE IF NOT EXISTS `compras_monedero` (
  `id_compra` int(11) NOT NULL AUTO_INCREMENT,
  `id_monedero` varchar(10) NOT NULL,
  `monto` float NOT NULL,
  PRIMARY KEY (`id_compra`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Volcar la base de datos para la tabla `compras_monedero`
--

INSERT INTO `compras_monedero` (`id_compra`, `id_monedero`, `monto`) VALUES
(1, '', 50),
(2, '1708121', 50),
(3, '1708121', 50),
(4, '1708121', 50),
(5, '1708121', 50),
(6, '1708121', 25),
(7, '1708121', 12.5),
(8, '1708121', 25),
(9, '1708121', 10.5),
(10, '1708121', 64.5),
(11, '1700103', 25.5),
(12, '1700103', 10),
(13, '1700103', 50),
(14, '1700103', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eventos`
--

CREATE TABLE IF NOT EXISTS `eventos` (
  `id_evento` varchar(10) NOT NULL,
  `nombre_evento` varchar(80) NOT NULL,
  `descripcion_evento` varchar(180) NOT NULL,
  `lugar` varchar(50) NOT NULL,
  `fecha_inicio` datetime NOT NULL,
  `fecha_fin` datetime NOT NULL,
  `fecha_inscripcion` datetime NOT NULL,
  `cupo` int(11) NOT NULL,
  `id_agenda` varchar(10) NOT NULL,
  `costo` float NOT NULL,
  `id_tipo` int(11) NOT NULL,
  `id_coordinador` varchar(10) NOT NULL,
  `id_carrera` int(11) NOT NULL,
  `imagen` varchar(50) NOT NULL,
  PRIMARY KEY (`id_evento`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `eventos`
--

INSERT INTO `eventos` (`id_evento`, `nombre_evento`, `descripcion_evento`, `lugar`, `fecha_inicio`, `fecha_fin`, `fecha_inscripcion`, `cupo`, `id_agenda`, `costo`, `id_tipo`, `id_coordinador`, `id_carrera`, `imagen`) VALUES
('012345', 'Sales Force Fest', 'Las tradicionales tortas de merca, ven con toda tu familia y amigos a disfrutar de la amplia variedad de tortas.', 'Estacionamiento', '2018-11-29 08:00:00', '2018-11-29 20:00:00', '2018-11-25 13:00:00', 1000, '0123453', 20, 3, '170812', 2, 'salesforce.jpg'),
('789112', 'Sonic Pi', 'Evento de mÃºsica electrÃ³nica, dÃ³nde 5 DJ programaran mÃºsica en vivo.', 'Explanada', '2018-11-30 20:00:00', '2018-11-30 22:00:00', '2018-11-29 13:00:00', 100, '7891123', 50, 3, '170812', 2, 'sonicPI.jpg'),
('123456', 'Foro ITI', 'Foro dÃ³nde se realizaran diversas conferencias de temas de ciberseguridad, IOT y muchos mÃ¡s.', 'ASA', '2018-11-01 08:00:00', '2018-11-01 19:00:00', '2018-10-25 13:00:00', 200, '1234562', 150, 2, '170812', 2, 'foroITI.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `monedero`
--

CREATE TABLE IF NOT EXISTS `monedero` (
  `id_monedero` varchar(10) NOT NULL,
  `id_usuario` varchar(10) NOT NULL,
  `saldo` float NOT NULL,
  PRIMARY KEY (`id_monedero`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `monedero`
--

INSERT INTO `monedero` (`id_monedero`, `id_usuario`, `saldo`) VALUES
('0000001', '000000', 0),
('1708122', '170812', 0),
('1700113', '170011', 50),
('1700103', '170010', 50);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `participantes`
--

CREATE TABLE IF NOT EXISTS `participantes` (
  `id_usuario` varchar(10) NOT NULL,
  `id_evento` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `participantes`
--

INSERT INTO `participantes` (`id_usuario`, `id_evento`) VALUES
('170010', '012345');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_eventos`
--

CREATE TABLE IF NOT EXISTS `tipo_eventos` (
  `id_tipo` int(11) NOT NULL,
  `nombre_tipo` varchar(50) NOT NULL,
  PRIMARY KEY (`id_tipo`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `tipo_eventos`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_usuarios`
--

CREATE TABLE IF NOT EXISTS `tipo_usuarios` (
  `tipo_usuario` int(11) NOT NULL,
  `nombre_tipo` varchar(50) NOT NULL,
  PRIMARY KEY (`tipo_usuario`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `tipo_usuarios`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarioss`
--

CREATE TABLE IF NOT EXISTS `usuarioss` (
  `id_usuario` varchar(10) NOT NULL,
  `contrasena` varchar(100) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido_mat` varchar(50) NOT NULL,
  `apellido_pat` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `rfc` varchar(13) NOT NULL,
  `telefono` varchar(10) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `tipo_usuario` int(11) NOT NULL,
  `id_monedero` varchar(10) NOT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `usuarioss`
--

INSERT INTO `usuarioss` (`id_usuario`, `contrasena`, `nombre`, `apellido_mat`, `apellido_pat`, `email`, `rfc`, `telefono`, `direccion`, `tipo_usuario`, `id_monedero`) VALUES
('000000', '25d55ad283aa400af464c76d713c07ad', 'Liliana', 'Gamez', 'Zavala', 'liliana@upslp.edu.mx', '1234567891234', '4441526398', 'Av de las estaciones #321', 1, '0000001'),
('170812', '25d55ad283aa400af464c76d713c07ad', 'Diana', 'Gonzalez', 'Flores', '170812@upslp.edu.mx', '', '4141526378', 'Himno nacional #130', 2, '1708122'),
('170011', '25d55ad283aa400af464c76d713c07ad', 'Jessica', 'Bueno', 'SÃ¡nchez', '170011@upslp.edu.mx', '', '4145987435', 'Tatanacho #320', 3, '1700113'),
('170010', '25d55ad283aa400af464c76d713c07ad', 'Diana', 'Rodriguez', 'Espiricueta', '170010@upslp.edu.mx', '', '4152638574', 'Himno nacional #130', 3, '1700103');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
