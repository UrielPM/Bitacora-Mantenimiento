-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-06-2021 a las 05:50:00
-- Versión del servidor: 10.4.18-MariaDB
-- Versión de PHP: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bitacora`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_generales`
--

CREATE TABLE `datos_generales` (
  `id_datos` varchar(50) NOT NULL,
  `empresa` varchar(100) NOT NULL,
  `area` varchar(100) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `correo` varchar(200) NOT NULL,
  `fecha` varchar(20) NOT NULL,
  `marca` varchar(100) NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `no_serie` varchar(50) NOT NULL,
  `obser_tec` varchar(200) NOT NULL,
  `obser_mante` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `datos_generales`
--

INSERT INTO `datos_generales` (`id_datos`, `empresa`, `area`, `direccion`, `telefono`, `correo`, `fecha`, `marca`, `descripcion`, `no_serie`, `obser_tec`, `obser_mante`) VALUES
('G11administradoradminadmin', 'Ayuntamiento', 'Recursos humanos', 'ffffffffff dsdddssfbb fggggg ggggggg qqqq', '29875612354', 'adddddd@gmail.com', '2021-06-15', 'apple', 'macbook pro mid 2012 con 16 gb ram t ssd 500gb', '12626s832ww', 'no prende,  se calienta, hace ruido y se apaga aaaaaaaa    ', 'no prende,  se calienta, hace ruido y se apaga aaaaaaaa    '),
('G12administradoradminadmin', 'ayuntamiento', 'parques y jardines', 'alvarado', '1256487952', 'abcrt@gmail.com', '2021-06-23', 'Hp', 'pc de escritorio', '258rs38883', 'sksksjdj ssksksk sksksks ksksksks kskskks', 'no prende, no aranca el sistema'),
('G13administradoradminadmin', 'www', 'www', 'www', 'www', 'www', '2021-06-15', 'www', 'www', 'eee23', 'eeew', 'wewwewe'),
('G14administradoradminadmin', 'wwww', 'wwww', 'wwww', 'wwww', 'wwww', '2021-06-16', 'wwww', 'wwww', 'wwww', 'wwww', 'wwwww');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `idRol` int(11) NOT NULL,
  `nombreRol` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`idRol`, `nombreRol`) VALUES
(1, 'administrador'),
(2, 'encuestador'),
(1, 'administrador'),
(2, 'encuestador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(10) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido_p` varchar(100) NOT NULL,
  `apellido_m` varchar(100) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `rol` int(10) NOT NULL,
  `grupo` varchar(100) NOT NULL,
  `consecutivo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nombre`, `apellido_p`, `apellido_m`, `correo`, `pass`, `rol`, `grupo`, `consecutivo`) VALUES
(1, 'administrador', 'admin', 'admin', 'admin@gmail.com', '123456', 2, 'G1', 5);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `datos_generales`
--
ALTER TABLE `datos_generales`
  ADD PRIMARY KEY (`id_datos`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
