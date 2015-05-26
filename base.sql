-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 27-05-2015 a las 01:52:42
-- Versión del servidor: 5.6.21
-- Versión de PHP: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `base`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE IF NOT EXISTS `administrador` (
`id` int(11) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `usuario` varchar(200) NOT NULL,
  `clave` varchar(200) NOT NULL,
  `correo` varchar(200) NOT NULL,
  `nombreTabla` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `administrador`
--

INSERT INTO `administrador` (`id`, `nombre`, `usuario`, `clave`, `correo`, `nombreTabla`) VALUES
(1, 'Diego Guevara', 'dfguevara', '1234', 'dfguevara@utpl.edu.ec', 'administrador'),
(2, 'nombre', 'nombre1', '1234', '', 'administrador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `conferencia`
--

CREATE TABLE IF NOT EXISTS `conferencia` (
`id` int(11) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `lugar` varchar(2000) NOT NULL,
  `hora` date NOT NULL,
  `nombreTabla` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `conferencia`
--

INSERT INTO `conferencia` (`id`, `nombre`, `lugar`, `hora`, `nombreTabla`) VALUES
(1, 'conferencia1', 'auditorio1', '0000-00-00', 'conferencia');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `curso`
--

CREATE TABLE IF NOT EXISTS `curso` (
`id` int(11) NOT NULL,
  `tipo` varchar(200) NOT NULL,
  `costo` varchar(200) NOT NULL,
  `nombreTabla` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `curso`
--

INSERT INTO `curso` (`id`, `tipo`, `costo`, `nombreTabla`) VALUES
(1, 'curso', '234', 'curso');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `institucion`
--

CREATE TABLE IF NOT EXISTS `institucion` (
`id` int(11) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `nombreTabla` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `institucion`
--

INSERT INTO `institucion` (`id`, `nombre`, `nombreTabla`) VALUES
(1, 'utpl', 'institucion');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `menu_administrador`
--

CREATE TABLE IF NOT EXISTS `menu_administrador` (
`id` int(11) NOT NULL,
  `nombre_menu` varchar(200) NOT NULL,
  `link` varchar(200) NOT NULL,
  `nivel` int(11) NOT NULL,
  `hijos` int(11) NOT NULL,
  `nombreTabla` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `menu_administrador`
--

INSERT INTO `menu_administrador` (`id`, `nombre_menu`, `link`, `nivel`, `hijos`, `nombreTabla`) VALUES
(1, 'Inicio', 'http://127.0.0.1/ing_web_2015/taller/include/menu2.php', 1, 0, 'menu_administrador'),
(2, 'Salir', 'http://127.0.0.1/ing_web_2015/taller/static/cerrar.php', 1, 0, 'menu_administrador'),
(3, 'menu_administrador', '', 1, 1, 'menu_administrador'),
(4, 'administrador', '', 1, 1, 'menu_administrador'),
(5, 'conferencia', '', 1, 1, 'menu_administrador'),
(7, 'curso', '', 1, 1, 'menu_administrador'),
(8, 'institucion', '', 1, 1, 'menu_administrador'),
(9, 'persona', '', 1, 1, 'menu_administrador'),
(10, 'tipo_inscrito', '', 1, 1, 'menu_administrador'),
(11, 'menu', '', 1, 1, 'menu_administrador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE IF NOT EXISTS `persona` (
`id` int(11) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `apellido` varchar(200) NOT NULL,
  `direccion` varchar(200) NOT NULL,
  `correo` varchar(200) NOT NULL,
  `cedula` varchar(200) NOT NULL,
  `institucion` varchar(100) NOT NULL,
  `inscrito` varchar(100) NOT NULL,
  `curso` varchar(200) NOT NULL,
  `conferencia` varchar(200) NOT NULL,
  `nombreTabla` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`id`, `nombre`, `apellido`, `direccion`, `correo`, `cedula`, `institucion`, `inscrito`, `curso`, `conferencia`, `nombreTabla`) VALUES
(1, 'pancho', 'luzon', 'calle', 'correo', '123445', 'UTPL', 'Estudiante', 'Inovacion', 'Conferencia1', 'persona'),
(2, 'diego', 'guevara', 'calle', 'correo', '12344', 'UTPL', 'Estudiante', 'Inovacion', 'Conferencia1', 'persona');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_inscrito`
--

CREATE TABLE IF NOT EXISTS `tipo_inscrito` (
`id` int(11) NOT NULL,
  `tipo` varchar(200) NOT NULL,
  `precio` int(11) NOT NULL,
  `nombreTabla` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tipo_inscrito`
--

INSERT INTO `tipo_inscrito` (`id`, `tipo`, `precio`, `nombreTabla`) VALUES
(1, 'curso', 34, 'tipo_inscrito');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `conferencia`
--
ALTER TABLE `conferencia`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `curso`
--
ALTER TABLE `curso`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `institucion`
--
ALTER TABLE `institucion`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `menu_administrador`
--
ALTER TABLE `menu_administrador`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipo_inscrito`
--
ALTER TABLE `tipo_inscrito`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administrador`
--
ALTER TABLE `administrador`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `conferencia`
--
ALTER TABLE `conferencia`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `curso`
--
ALTER TABLE `curso`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `institucion`
--
ALTER TABLE `institucion`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `menu_administrador`
--
ALTER TABLE `menu_administrador`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT de la tabla `persona`
--
ALTER TABLE `persona`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `tipo_inscrito`
--
ALTER TABLE `tipo_inscrito`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
