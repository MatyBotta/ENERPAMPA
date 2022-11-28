-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-11-2022 a las 15:48:53
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 8.0.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `enerpampa`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carac_prod`
--

CREATE TABLE `carac_prod` (
  `ID_Prod` int(11) NOT NULL,
  `Caracteristica` varchar(200) NOT NULL,
  `Caracteristica2` varchar(150) NOT NULL,
  `Caracteristica3` varchar(150) NOT NULL,
  `Caracteristica4` varchar(150) NOT NULL,
  `Caracteristica5` varchar(150) NOT NULL,
  `Caracteristica6` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `carac_prod`
--

INSERT INTO `carac_prod` (`ID_Prod`, `Caracteristica`, `Caracteristica2`, `Caracteristica3`, `Caracteristica4`, `Caracteristica5`, `Caracteristica6`) VALUES
(1, 'Luminaria', '50W', '6500K', 'EXTERIORES', 'IP65', ''),
(2, 'Luminaria', '30W', '6500K', 'EXTERIORES', 'IP65', ''),
(3, 'Luminaria', '20W', '6500K', 'EXTERIORES', 'IP65', ''),
(4, 'E40', '70W', '6500K', '', '', ''),
(5, 'E40', '120W', '6500K', '', '', ''),
(6, 'E40', '50W', '6500K', '', '', ''),
(7, 'E27', '5W', '3000K', '', '', ''),
(8, 'E27', '5W', '6500K', '', '', ''),
(9, 'E27', '9W', '3000K', '', '', ''),
(10, 'E27', '15W', '3000K', '', '', ''),
(11, 'E27', '15W', '6500K', '', '', ''),
(12, 'E27', '9W', '6000K', '', '', ''),
(13, 'GU10', '7W', '3000K', '', '', ''),
(14, 'GU10', '5W', '3000K', '', '', ''),
(15, 'GU10', '5W', '3000K', '', '', ''),
(16, 'GU10', '15W', '6000K', '', '', ''),
(17, 'GU10', '15W', '6500K', '', '', ''),
(18, 'E40', '70W', '6500K', '', '', ''),
(19, 'E27', '50W', '6500K', '', '', ''),
(20, 'E40', '100W', '6500K', '', '', ''),
(21, 'E27', '14W', '6500K', '', '', ''),
(22, 'GU10', '7W', '3000K', '', '', ''),
(23, 'E27', '18W', '3000K', '', '', ''),
(24, 'E27', '15W', '2700K', '', '', ''),
(25, 'E27', '30W', '6500K', '', '', ''),
(26, 'E27', '40W', '6500K', '', '', ''),
(27, 'E27', '60W', '6000K', '', '', ''),
(28, 'GU10', '15W', '3000K', '', '', ''),
(29, 'Luminaria', '18W', '6400k', '60cm', '', ''),
(30, 'Luminaria', '12W', '6000K', '17cm X 17cm', 'FIJO', ''),
(31, 'Luminaria', '24W', '6000K', '22cm x 22cm', 'FIJO', ''),
(32, 'LUMINARIA', '18W', '6500K', '22.5cm x 22.5cm', 'FIJO', ''),
(33, 'LUMINARIA', '18W', '6000K', '21cm x 21cm', 'FIJO', ''),
(34, 'LUMINARIA', '18W', '3000K', '21cm x 21cm', 'FIJO', ''),
(35, 'LUMINARIA', '12W', '6000K', '15cmØ', 'FIJO', ''),
(37, 'LUMINARIA', '6W', '6000K', '12cmØ', 'IP20', 'EMBUTIR'),
(38, 'LUMINARIA', '12W', '6500K', '16cmØ', 'IP20', 'EMBUTIR'),
(39, 'LUMINARIA', '18W', '3000K', '22.5cmØ', 'IP20', 'EMBUTIR'),
(40, 'LUMINARIA', '18W', '6500K', '22cmØ', 'FIJO', ''),
(41, 'LUMINARIA', '24W', '6000K', '30cmØ', 'IP20', 'FIJO'),
(42, 'LUMINARIA', '24W', '6000K', '30cmØ', 'IP20', 'EMBUTIR'),
(43, 'LUMINARIA', '100W', '7000K', 'IP65', '', ''),
(44, 'LUMINARIA', '200W', '7000K', 'IP65', '', ''),
(45, 'LUMINARIA', '300W', '6500K', 'IP65', '', ''),
(46, 'LUMINARIA', '400W', '6500K', 'IP65', '', ''),
(47, 'LUMINARIA', '30 LEDS', '40 HRS D AUTONOMIA', 'RECARGABLE', 'IP20', ''),
(48, 'LUMINARIA', '40 LEDS', '17 HRS DE AUTONOMIA', 'IP20', '', ''),
(49, 'LUMINARIA', '40 LEDS', '34 HRS AUTONOMIA', 'IP20', '', ''),
(50, 'LUMINARIA', '60 LEDS', '20 HRS AUTONOMIA', 'IP20', '', ''),
(51, 'PARA E27 / GU10 / TUBO LED', '12W/15w', '12W A 15W', 'AUTON. 1.5 HS', '4 X BAT LI-ION  3.7V / 2.5Ah', ''),
(52, 'PG 11', 'AJUSTE 5 A 10', 'ORIFICIO 18.7 Ø', '', '', ''),
(53, 'PG 13.5', 'AJUSTE 6 A 12', 'ORIFICIO 20.5 Ø', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrito`
--

CREATE TABLE `carrito` (
  `ID_Prod` int(11) NOT NULL,
  `Mail` varchar(50) NOT NULL,
  `Cantidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `carrito`
--

INSERT INTO `carrito` (`ID_Prod`, `Mail`, `Cantidad`) VALUES
(1, 'hola', 2),
(3, 'hola', 1),
(1, 'hola@a.com', 1),
(2, 'hola@a.com', 2),
(3, 'hola@a.com', 2),
(4, 'hola@a.com', 1),
(6, 'hola@a.com', 3),
(8, 'hola@a.com', 1),
(12, 'hola@a.com', 1),
(14, 'hola@a.com', 1),
(3, 'a@a.com', 70);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `ID` int(11) NOT NULL,
  `Categoria` varchar(100) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Marca` varchar(30) NOT NULL,
  `Codigo` varchar(100) NOT NULL,
  `Cantidad` int(11) NOT NULL,
  `Estado` varchar(10) NOT NULL,
  `Imagen` varchar(200) NOT NULL,
  `Precio` float NOT NULL,
  `Ult. Act.` date NOT NULL DEFAULT current_timestamp(),
  `Fecha_Prec` date DEFAULT NULL,
  `Moneda` varchar(40) NOT NULL,
  `IVA` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`ID`, `Categoria`, `Nombre`, `Marca`, `Codigo`, `Cantidad`, `Estado`, `Imagen`, `Precio`, `Ult. Act.`, `Fecha_Prec`, `Moneda`, `IVA`) VALUES
(1, 'Iluminacion', 'PROYECTOR LED', 'INTERELEC', '404206', 40, 'Eliminado', '1.png', 1318, '2022-11-02', '2022-11-07', 'Pesos', 21),
(2, 'Iluminacion', 'PROYECTOR LED', 'INTERELEC', '404204', 20, 'Vigente', '1.png', 992, '2022-11-02', '2022-11-02', 'Pesos', 21),
(3, 'Iluminacion', 'PROYECTOR LED', 'INTERELEC', '404202', 30, 'Vigente', '1.png', 636, '2022-11-02', '2022-11-02', 'Pesos', 21),
(4, 'Iluminacion', 'LAMPARA BOWLING', 'INTERELEC', '402220', 18, 'Vigente', '2.png', 3415, '2022-11-02', '2022-11-02', 'Pesos', 21),
(5, 'Iluminacion', 'LAMPARA LONGNECK', 'INTERELEC', '401791', 9, 'Vigente', '3.png', 4635, '2022-11-02', '2022-11-02', 'Pesos', 21),
(6, 'Iluminacion', 'LAMPARA MAGNOLIA', 'INTERELEC', '402207', 10, 'Vigente', '4.png', 1603, '2022-11-02', '2022-11-02', 'Pesos', 21),
(7, 'Iluminacion', 'LAMPARA LED A60', 'INTERELEC', '403000', 240, 'Vigente', '5.png', 81, '2022-11-02', '2022-11-02', 'Pesos', 21),
(8, 'Iluminacion', 'LAMPARA LED A60', 'INTERELEC', '403001', 100, 'Vigente', '5.png', 81, '2022-11-02', '2022-11-02', 'Pesos', 21),
(9, 'Iluminacion', 'LAMPARA LED A60', 'INTERELEC', '403004', 120, 'Vigente', '5.png', 98, '2022-11-02', '2022-11-02', 'Pesos', 21),
(10, 'Iluminacion', 'LAMPARA LED A60', 'INTERELEC', '403011', 100, 'Vigente', '5.png', 147, '2022-11-02', '2022-11-02', 'Pesos', 21),
(11, 'Iluminacion', 'LAMPARA LED A60', 'NRV', 'A1060-ST 15W', 110, 'Vigente', '5.png', 265, '2022-11-02', '2022-11-02', 'Pesos', 21),
(12, 'Iluminacion', 'LAMPARA LED A60', 'SYBYD', 'SYBULE9F', 1000, 'Vigente', '5.png', 183, '2022-11-02', '2022-11-02', 'Pesos', 21),
(13, 'Iluminacion', 'LAMPARA LED DICRO', 'IDOLER', 'GU10 7W PH', 120, 'Vigente', '6.png', 388, '2022-11-02', '2022-11-02', 'Pesos', 10.5),
(14, 'Iluminacion', 'LAMPARA LED DICRO', 'IDOLER', 'R1=GU10 7W PH', 180, 'Vigente', '6.png', 388, '2022-11-02', '2022-11-02', 'Pesos', 10.5),
(15, 'Iluminacion', 'LAMPARA LED DICRO', 'INTERELEC', '402290', 30, 'Vigente', '6.png', 118, '2022-11-02', '2022-11-02', 'Pesos', 21),
(16, 'Iluminacion', 'LAMPARA LED AR111', 'INTERELEC', '403653', 28, 'Vigente', '7.png', 527, '2022-11-02', '2022-11-02', 'Pesos', 21),
(17, 'Iluminacion', 'LAMPARA LED AR111', 'IDOLER', 'AR111 GU10 15W', 50, 'Vigente', '7.png', 1659, '2022-11-02', '2022-11-02', 'Pesos', 10.5),
(18, 'Iluminacion', 'LAMPARA BULBON', 'NRV', 'HP-4800LP-Q1 70W', 20, 'Vigente', '8.png', 3630, '2022-11-02', '2022-11-02', 'Pesos', 10.5),
(19, 'Iluminacion', 'LAMPARA BULBON', 'NRV', 'HP4000LP-Q1 50W', 9, 'Vigente', '8.png', 1204, '2022-11-02', '2022-11-02', 'Pesos', 10.5),
(20, 'Iluminacion', 'LAMPARA BULBON', 'NRV', 'HP-5600LP-Q1 100W', 9, 'Vigente', '8.png', 4960, '2022-11-02', '2022-11-02', 'Pesos', 10.5),
(21, 'Iluminacion', 'LAMPARA LED A60', 'MACROLED', 'BT-60-15CW', 28, 'Vigente', '5.png', 429, '2022-11-02', '2022-11-02', 'Pesos', 10.5),
(22, 'Iluminacion', 'LAMPARA LED DICRO', 'MACROLED', 'CPS-DP-GU10-22WW', 19, 'Vigente', '6.png', 363, '2022-11-02', '2022-11-02', 'Pesos', 10.5),
(23, 'Iluminacion', 'LAMPARA GLOBO', 'MACROLED', 'G120-18-E27-WW', 10, 'Vigente', '9.png', 1877, '2022-11-02', '2022-11-02', 'Pesos', 10.5),
(24, 'Iluminacion', 'LAMPARA GLOBO', 'PHILIPS', '929001229491', 28, 'Vigente', '9.png', 1790, '2022-11-02', '2022-11-02', 'Pesos', 21),
(25, 'Iluminacion', 'LAMPARA BULBON', 'NRV', 'HP2400LP-Q1 30W', 15, 'Vigente', '8.png', 775, '2022-11-02', '2022-11-02', 'Pesos', 21),
(26, 'Iluminacion', 'LAMPARA BULBON', 'NRV', 'HP3200LP-Q1 40W', 10, 'Vigente', '8.png', 893, '2022-11-02', '2022-11-02', 'Pesos', 21),
(27, 'Iluminacion', 'LAMPARA BULBON', 'MACROLED', 'BAP-60-E27CW', 6, 'Vigente', '8.png', 4209.98, '2022-11-08', '2022-11-08', 'Pesos', 10.5),
(28, 'Iluminacion', 'LAMPARA LED AR111', 'LUCCIOLA', '2LE009NSC056', 41, 'Vigente', '7.png', 544.3, '2022-11-11', '2022-11-11', 'Pesos', 10.5),
(29, 'Iluminacion', 'Liston led', 'sica', '637151', 37, 'Vigente', '11.png', 3207.54, '2022-11-15', '2022-11-15', 'Pesos', 21),
(30, 'Iluminacion', 'PANEL LED CUADRADO', 'INTERELEC', '403510', 28, 'Vigente', '13.png', 534.803, '2022-11-15', '2022-11-15', 'Pesos', 21),
(31, 'Iluminacion', 'PANEL LED CUADRADO', 'INTERELEC', '403514', 7, 'Vigente', '13.png', 1048.8, '2022-11-15', '2022-11-15', 'Pesos', 21),
(32, 'Iluminacion', 'PANEL LED CUADRADO', 'NRV', 'NRVMT-PPD18WWS', 20, 'Vigente', '13.png', 1453.05, '2022-11-15', '2022-11-15', 'Pesos', 21),
(33, 'Iluminacion', 'PANEL LED CUADRADO', 'IDOLER', 'P131 18W', 20, 'Vigente', '13.png', 3030.5, '2022-11-15', '2022-11-15', 'Pesos', 21),
(34, 'Iluminacion', 'PANEL LED CUADRADO', 'IDOLER', 'R1=P131 18W', 5, 'Vigente', '13.png', 3030.5, '2022-11-15', '2022-11-15', 'Pesos', 21),
(35, 'Iluminacion', 'PANEL LED CIRCULAR', 'IDOLER', 'P130 12W', 15, 'Vigente', '12.png', 2073.5, '2022-11-15', '2022-11-15', 'Pesos', 21),
(37, 'Iluminacion', 'PANEL LED CIRCULAR', 'INTERELEC', '401934', 35, 'Vigente', '14.png', 290.826, '2022-11-16', '2022-11-16', 'Pesos', 21),
(38, 'Iluminacion', 'PANEL LED CIRCULAR', 'NRV', 'NRV-DL12GR2 12W', 16, 'Vigente', '14.png', 871.515, '2022-11-16', '2022-11-16', 'Pesos', 21),
(39, 'Iluminacion', 'PANEL LED CIRCULAR', 'LUCCIOLA', 'PAL151', 7, 'Vigente', '14.png', 2450, '2022-11-16', '2022-11-16', 'Pesos', 21),
(40, 'Iluminacion', 'PANEL LED CIRCULAR', 'NRV', 'NRVMT-PPD18W-W', 10, 'Vigente', '12.png', 1182.89, '2022-11-16', '2022-11-16', 'Pesos', 21),
(41, 'Iluminacion', 'PANEL LED CIRCULAR', 'INTERELEC', '403506', 16, 'Vigente', '12.png', 6.192, '2022-11-16', '2022-11-16', 'Pesos', 21),
(42, 'Iluminacion', 'PANEL LED CIRCULAR', 'INTERELEC', '401946', 4, 'Vigente', '14.png', 915.171, '2022-11-16', '2022-11-16', 'Pesos', 21),
(43, 'Iluminacion', 'PROYECTOR MULTILED SLIM', 'NRV', 'NRV-MULTISLIM 100W', 3, 'Vigente', '1.png', 5858.25, '2022-11-16', '2022-11-16', 'Pesos', 21),
(44, 'Iluminacion', 'PROYECTOR MULTILED SLIM', 'NRV', 'NRV-MULTISLIM 200W', 3, 'Vigente', '16.png', 13488.4, '2022-11-16', '2022-11-16', 'Pesos', 21),
(45, 'Iluminacion', 'PROYECTOR MULTILED SLIM', 'NRV', 'NRV-MULTISLIM 300W', 2, 'Vigente', '17.png', 18232.8, '2022-11-16', '2022-11-16', 'Pesos', 21),
(46, 'Iluminacion', 'PROYECTOR MULTILED SLIM', 'NRV', 'NRV-MULTISLIM 400W', 3, 'Vigente', '18.png', 23872.8, '2022-11-16', '2022-11-16', 'Pesos', 21),
(47, 'Iluminacion', 'LUZ LED DE EMERGENCIA', 'INTERELEC', '403250', 3, 'Vigente', '19.png', 2080.12, '2022-11-18', '2022-11-18', 'Pesos', 21),
(48, 'Iluminacion', 'LUZ LED DE EMERGENCIA', 'GAMASONIC', 'GX4040SL', 24, 'Vigente', '20.png', 3773.25, '2022-11-18', '2022-11-18', 'Pesos', 21),
(49, 'Iluminacion', 'LUZ LED DE EMERGENCIA', 'GAMASONIC', 'GX4040SL2', 24, 'Vigente', '20.png', 4579.5, '2022-11-18', '2022-11-18', 'Pesos', 21),
(50, 'Iluminacion', 'LUZ LED DE EMERGENCIA', 'GAMASONIC', 'GX4060SL2', 25, 'Vigente', '20.png', 4950.38, '2022-11-18', '2022-11-18', 'Pesos', 21),
(51, 'Iluminacion', 'KIT DE EMBUTIR PARA LUZ DE EMERGENCIA', 'GAMASONIC', 'EBMLEDPL4', 7, 'Vigente', '21.png', 8191.5, '2022-11-18', '2022-11-18', 'Pesos', 21),
(52, 'Distribución eléctrica industrial y monitoreo de redes e instrumentos', 'PRENSA CABLES', 'SYBYD', '8103N', 22, 'Vigente', '22.png', 72.5625, '2022-11-18', '2022-11-18', 'Pesos', 21),
(53, 'Distribución eléctrica industrial y monitoreo de redes e instrumentos', 'PRENSA CABLES', 'SYBYD', '8104N', 200, 'Vigente', '22.png', 80.625, '2022-11-18', '2022-11-18', 'Pesos', 21);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `Mail` varchar(11) NOT NULL,
  `Contrasenia` int(11) NOT NULL,
  `Nombre` varchar(15) NOT NULL,
  `Apellido` varchar(15) NOT NULL,
  `Tipo` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`Mail`, `Contrasenia`, `Nombre`, `Apellido`, `Tipo`) VALUES
('a@a.com', 456, 'Matias', 'Nicolas', 'Trabajador'),
('hola@a.com', 123, 'SA', 'BADO', 'Cliente'),
('chau@a.com', 789, 'DOMI', 'NGO', 'Cliente');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carac_prod`
--
ALTER TABLE `carac_prod`
  ADD PRIMARY KEY (`ID_Prod`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
