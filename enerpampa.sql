-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-11-2022 a las 12:42:11
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
  `ID_carac_prod` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `carac_prod`
--

INSERT INTO `carac_prod` (`ID_Prod`, `Caracteristica`, `ID_carac_prod`) VALUES
(15, 'GU10', 1),
(15, '5W', 2),
(15, '3000K', 3),
(16, 'GU10', 1),
(16, '15W', 2),
(16, '6000K', 3),
(17, 'GU10', 1),
(17, '15W', 2),
(17, '6500K', 3),
(18, 'E40', 1),
(18, '70W', 2),
(18, '6500K', 3),
(19, 'E27', 1),
(19, '50W', 2),
(19, '6500K', 3),
(20, 'E40', 1),
(20, '100W', 2),
(20, '6500K', 3),
(21, 'E27', 1),
(21, '14W', 2),
(21, '6500K', 3),
(22, 'GU10', 1),
(22, '7W', 2),
(22, '3000K', 3),
(23, 'E27', 1),
(23, '18W', 2),
(23, '3000K', 3),
(24, 'E27', 1),
(24, '15W', 2),
(24, '2700K', 3),
(25, 'E27', 1),
(25, '30W', 2),
(25, '6500K', 3),
(26, 'E27', 1),
(26, '40W', 2),
(26, '6500K', 3),
(1, 'Luminaria', 1),
(1, '50W', 2),
(1, '6500K', 3),
(1, 'EXTERIORES', 4),
(1, 'IP65', 5),
(2, 'Luminaria', 1),
(2, '30W', 2),
(2, '6500K', 3),
(2, 'EXTERIORES', 4),
(2, 'IP65', 5),
(3, 'Luminaria', 1),
(3, '20W', 2),
(3, '6500K', 3),
(3, 'EXTERIORES', 4),
(3, 'IP65', 5),
(4, 'E40', 1),
(4, '70W', 2),
(4, '6500K', 3),
(5, 'E40', 1),
(5, '120W', 2),
(5, '6500K', 3),
(6, 'E40', 1),
(6, '50W', 2),
(6, '6500K', 3),
(7, 'E27', 1),
(7, '5W', 2),
(7, '3000K', 3),
(8, 'E27', 1),
(8, '5W', 2),
(8, '6500K', 3),
(9, 'E27', 1),
(9, '9W', 2),
(9, '3000K', 3),
(10, 'E27', 1),
(10, '15W', 2),
(10, '3000K', 3),
(11, 'E27', 1),
(11, '15W', 2),
(11, '6500K', 3),
(12, 'E27', 1),
(12, '9W', 2),
(12, '6000K', 3),
(13, 'GU10', 1),
(13, '7W', 2),
(13, '3000K', 3),
(14, 'GU10', 1),
(14, '5W', 2),
(14, '3000K', 3),
(27, 'E27', 1),
(27, '60W', 2),
(27, '6000K', 3),
(28, 'GU10', 1),
(28, '15W', 2),
(28, '3000K', 3),
(29, 'Luminaria', 1),
(29, '18W', 2),
(29, '6400k', 3),
(29, '60cm', 4),
(30, 'Luminaria', 1),
(30, '12W', 2),
(30, '6000K', 3),
(30, '17cm X 17cm', 4),
(30, 'FIJO', 5),
(31, 'Luminaria', 1),
(31, '24W', 2),
(31, '6000K', 3),
(31, '22cm x 22cm', 4),
(31, 'FIJO', 5),
(32, 'LUMINARIA', 1),
(32, '18W', 2),
(32, '6500K', 3),
(32, '22.5cm x 22.5cm', 4),
(32, 'FIJO', 5),
(33, 'LUMINARIA', 1),
(33, '18W', 2),
(33, '6000K', 3),
(33, '21cm x 21cm', 4),
(33, 'FIJO', 5),
(34, 'LUMINARIA', 1),
(34, '18W', 2),
(34, '3000K', 3),
(34, '21cm x 21cm', 4),
(34, 'FIJO', 5),
(35, 'LUMINARIA', 1),
(35, '12W', 2),
(35, '6000K', 3),
(35, '15cmØ', 4),
(35, 'FIJO', 5),
(37, 'LUMINARIA', 1),
(37, '6W', 2),
(37, '6000K', 3),
(37, '12cmØ', 4),
(37, 'IP20', 5),
(37, 'EMBUTIR', 6),
(38, 'LUMINARIA', 1),
(38, '12W', 2),
(38, '6500K', 3),
(38, '16cmØ', 4),
(38, 'IP20', 5),
(38, 'EMBUTIR', 6),
(39, 'LUMINARIA', 1),
(39, '18W', 2),
(39, '3000K', 3),
(39, '22.5cmØ', 4),
(39, 'IP20', 5),
(39, 'EMBUTIR', 6),
(40, 'LUMINARIA', 1),
(40, '18W', 2),
(40, '6500K', 3),
(40, '22cmØ', 4),
(40, 'FIJO', 5),
(41, 'LUMINARIA', 1),
(41, '24W', 2),
(41, '6000K', 3),
(41, '30cmØ', 4),
(41, 'IP20', 5),
(41, 'FIJO', 6),
(42, 'LUMINARIA', 1),
(42, '24W', 2),
(42, '6000K', 3),
(42, '30cmØ', 4),
(42, 'IP20', 5),
(42, 'EMBUTIR', 6),
(43, 'LUMINARIA', 1),
(43, '100W', 2),
(43, '7000K', 3),
(43, 'IP65', 4),
(44, 'LUMINARIA', 1),
(44, '200W', 2),
(44, '7000K', 3),
(44, 'IP65', 4),
(45, 'LUMINARIA', 1),
(45, '300W', 2),
(45, '6500K', 3),
(45, 'IP65', 4),
(46, 'LUMINARIA', 1),
(46, '400W', 2),
(46, '6500K', 3),
(46, 'IP65', 4),
(47, 'LUMINARIA', 1),
(47, '30 LEDS', 2),
(47, '40 HRS D AUTONOMIA', 3),
(47, 'RECARGABLE', 4),
(47, 'IP20', 5),
(48, 'LUMINARIA', 1),
(48, '40 LEDS', 2),
(48, '17 HRS DE AUTONOMIA', 3),
(48, 'IP20', 4),
(49, 'LUMINARIA', 1),
(49, '40 LEDS', 2),
(49, '34 HRS AUTONOMIA', 3),
(49, 'IP20', 4),
(50, 'LUMINARIA', 1),
(50, '60 LEDS', 2),
(50, '20 HRS AUTONOMIA', 3),
(50, 'IP20', 4),
(51, 'PARA E27 / GU10 / TUBO LED', 1),
(51, '12W/15w', 2),
(51, '12W A 15W', 3),
(51, 'AUTON. 1.5 HS', 4),
(51, '4 X BAT LI-ION  3.7V / 2.5Ah', 5),
(52, 'PG 11', 1),
(52, 'AJUSTE 5 A 10', 2),
(52, 'ORIFICIO 18.7 Ø', 3),
(53, 'PG 13.5', 1),
(53, 'AJUSTE 6 A 12', 2),
(53, 'ORIFICIO 20.5 Ø', 3);

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
(14, 'hola@a.com', 1);

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
(4, 'Iluminacion', 'LAMPARA BOWLING', 'INTERELEC', '402220', 18, 'Vigente', 'Recurso 4.png', 3415, '2022-11-02', '2022-11-02', 'Pesos', 21),
(5, 'Iluminacion', 'LAMPARA LONGNECK', 'INTERELEC', '401791', 9, 'Vigente', 'Recurso 7.png', 4635, '2022-11-02', '2022-11-02', 'Pesos', 21),
(6, 'Iluminacion', 'LAMPARA MAGNOLIA', 'INTERELEC', '402207', 10, 'Vigente', 'Recurso 8.png', 1603, '2022-11-02', '2022-11-02', 'Pesos', 21),
(7, 'Iluminacion', 'LAMPARA LED A60', 'INTERELEC', '403000', 240, 'Vigente', 'Recurso 10.png', 81, '2022-11-02', '2022-11-02', 'Pesos', 21),
(8, 'Iluminacion', 'LAMPARA LED A60', 'INTERELEC', '403001', 100, 'Vigente', 'Recurso 10.png', 81, '2022-11-02', '2022-11-02', 'Pesos', 21),
(9, 'Iluminacion', 'LAMPARA LED A60', 'INTERELEC', '403004', 120, 'Vigente', 'Recurso 10.png', 98, '2022-11-02', '2022-11-02', 'Pesos', 21),
(10, 'Iluminacion', 'LAMPARA LED A60', 'INTERELEC', '403011', 100, 'Vigente', 'Recurso 10.png', 147, '2022-11-02', '2022-11-02', 'Pesos', 21),
(11, 'Iluminacion', 'LAMPARA LED A60', 'NRV', 'A1060-ST 15W', 110, 'Vigente', 'Recurso 10.png', 265, '2022-11-02', '2022-11-02', 'Pesos', 21),
(12, 'Iluminacion', 'LAMPARA LED A60', 'SYBYD', 'SYBULE9F', 1000, 'Vigente', 'Recurso 10.png', 183, '2022-11-02', '2022-11-02', 'Pesos', 21),
(13, 'Iluminacion', 'LAMPARA LED DICRO', 'IDOLER', 'GU10 7W PH', 120, 'Vigente', 'dicro.png', 388, '2022-11-02', '2022-11-02', 'Pesos', 10.5),
(14, 'Iluminacion', 'LAMPARA LED DICRO', 'IDOLER', 'R1=GU10 7W PH', 180, 'Vigente', 'dicro.png', 388, '2022-11-02', '2022-11-02', 'Pesos', 10.5),
(15, 'Iluminacion', 'LAMPARA LED DICRO', 'INTERELEC', '402290', 30, 'Vigente', 'dicro.png', 118, '2022-11-02', '2022-11-02', 'Pesos', 21),
(16, 'Iluminacion', 'LAMPARA LED AR111', 'INTERELEC', '403653', 28, 'Vigente', 'ar111.png', 527, '2022-11-02', '2022-11-02', 'Pesos', 21),
(17, 'Iluminacion', 'LAMPARA LED AR111', 'IDOLER', 'AR111 GU10 15W', 50, 'Vigente', 'ar111.png', 1659, '2022-11-02', '2022-11-02', 'Pesos', 10.5),
(18, 'Iluminacion', 'LAMPARA BULBON', 'NRV', 'HP-4800LP-Q1 70W', 20, 'Vigente', 'bulbon.png', 3630, '2022-11-02', '2022-11-02', 'Pesos', 10.5),
(19, 'Iluminacion', 'LAMPARA BULBON', 'NRV', 'HP4000LP-Q1 50W', 9, 'Vigente', 'bulbon.png', 1204, '2022-11-02', '2022-11-02', 'Pesos', 10.5),
(20, 'Iluminacion', 'LAMPARA BULBON', 'NRV', 'HP-5600LP-Q1 100W', 9, 'Vigente', 'bulbon.png', 4960, '2022-11-02', '2022-11-02', 'Pesos', 10.5),
(21, 'Iluminacion', 'LAMPARA LED A60', 'MACROLED', 'BT-60-15CW', 28, 'Vigente', 'Recurso 10.png', 429, '2022-11-02', '2022-11-02', 'Pesos', 10.5),
(22, 'Iluminacion', 'LAMPARA LED DICRO', 'MACROLED', 'CPS-DP-GU10-22WW', 19, 'Vigente', 'dicro.png', 363, '2022-11-02', '2022-11-02', 'Pesos', 10.5),
(23, 'Iluminacion', 'LAMPARA GLOBO', 'MACROLED', 'G120-18-E27-WW', 10, 'Vigente', 'Recurso 17.png', 1877, '2022-11-02', '2022-11-02', 'Pesos', 10.5),
(24, 'Iluminacion', 'LAMPARA GLOBO', 'PHILIPS', '929001229491', 28, 'Vigente', 'Recurso 17.png', 1790, '2022-11-02', '2022-11-02', 'Pesos', 21),
(25, 'Iluminacion', 'LAMPARA BULBON', 'NRV', 'HP2400LP-Q1 30W', 15, 'Vigente', 'bulbon.png', 775, '2022-11-02', '2022-11-02', 'Pesos', 21),
(26, 'Iluminacion', 'LAMPARA BULBON', 'NRV', 'HP3200LP-Q1 40W', 10, 'Vigente', 'bulbon.png', 893, '2022-11-02', '2022-11-02', 'Pesos', 21),
(27, 'Iluminacion', 'LAMPARA BULBON', 'MACROLED', 'BAP-60-E27CW', 6, 'Vigente', 'BULBOM2.png', 4209.98, '2022-11-08', '2022-11-08', 'Pesos', 10.5),
(28, 'Iluminacion', 'LAMPARA LED AR111', 'LUCCIOLA', '2LE009NSC056', 41, 'Vigente', 'Recurso S1.png', 544.3, '2022-11-11', '2022-11-11', '6', 10.5),
(29, 'Iluminacion', 'Liston led', 'sica', '637151', 37, 'Vigente', '11.png', 3207.54, '2022-11-15', '2022-11-15', '6', 21),
(30, 'Iluminacion', 'PANEL LED CUADRADO', 'INTERELEC', '403510', 28, 'Vigente', '13.png', 534.803, '2022-11-15', '2022-11-15', '6', 21),
(31, 'Iluminacion', 'PANEL LED CUADRADO', 'INTERELEC', '403514', 7, 'Vigente', '13.png', 1048.8, '2022-11-15', '2022-11-15', 'Pesos', 21),
(32, 'Iluminacion', 'PANEL LED CUADRADO', 'NRV', 'NRVMT-PPD18WWS', 20, 'Vigente', '13.png', 1453.05, '2022-11-15', '2022-11-15', '6', 21),
(33, 'Iluminacion', 'PANEL LED CUADRADO', 'IDOLER', 'P131 18W', 20, 'Vigente', '13.png', 3030.5, '2022-11-15', '2022-11-15', '6', 21),
(34, 'Iluminacion', 'PANEL LED CUADRADO', 'IDOLER', 'R1=P131 18W', 5, 'Vigente', '13.png', 3030.5, '2022-11-15', '2022-11-15', '6', 21),
(35, 'Iluminacion', 'PANEL LED CIRCULAR', 'IDOLER', 'P130 12W', 15, 'Vigente', '12.png', 2073.5, '2022-11-15', '2022-11-15', '6', 21),
(37, 'Iluminacion', 'PANEL LED CIRCULAR', 'INTERELEC', '401934', 35, 'Vigente', '14.png', 290.826, '2022-11-16', '2022-11-16', '6', 21),
(38, 'Iluminacion', 'PANEL LED CIRCULAR', 'NRV', 'NRV-DL12GR2 12W', 16, 'Vigente', '14.png', 871.515, '2022-11-16', '2022-11-16', '6', 21),
(39, 'Iluminacion', 'PANEL LED CIRCULAR', 'LUCCIOLA', 'PAL151', 7, 'Vigente', '14.png', 2450, '2022-11-16', '2022-11-16', '6', 21),
(40, 'Iluminacion', 'PANEL LED CIRCULAR', 'NRV', 'NRVMT-PPD18W-W', 10, 'Vigente', '12.png', 1182.89, '2022-11-16', '2022-11-16', '6', 21),
(41, 'Iluminacion', 'PANEL LED CIRCULAR', 'INTERELEC', '403506', 16, 'Vigente', '12.png', 6.192, '2022-11-16', '2022-11-16', '6', 21),
(42, 'Iluminacion', 'PANEL LED CIRCULAR', 'INTERELEC', '401946', 4, 'Vigente', '14.png', 915.171, '2022-11-16', '2022-11-16', '6', 21),
(43, 'Iluminacion', 'PROYECTOR MULTILED SLIM', 'NRV', 'NRV-MULTISLIM 100W', 3, 'Vigente', '1.png', 5858.25, '2022-11-16', '2022-11-16', '6', 21),
(44, 'Iluminacion', 'PROYECTOR MULTILED SLIM', 'NRV', 'NRV-MULTISLIM 200W', 3, 'Vigente', '16.png', 13488.4, '2022-11-16', '2022-11-16', '6', 21),
(45, 'Iluminacion', 'PROYECTOR MULTILED SLIM', 'NRV', 'NRV-MULTISLIM 300W', 2, 'Vigente', '17.png', 18232.8, '2022-11-16', '2022-11-16', '6', 21),
(46, 'Iluminacion', 'PROYECTOR MULTILED SLIM', 'NRV', 'NRV-MULTISLIM 400W', 3, 'Vigente', '18.png', 23872.8, '2022-11-16', '2022-11-16', '6', 21),
(47, 'Iluminacion', 'LUZ LED DE EMERGENCIA', 'INTERELEC', '403250', 3, 'Vigente', '19.png', 2080.12, '2022-11-18', '2022-11-18', '6', 21),
(48, 'Iluminacion', 'LUZ LED DE EMERGENCIA', 'GAMASONIC', 'GX4040SL', 24, 'Vigente', '20.png', 3773.25, '2022-11-18', '2022-11-18', '6', 21),
(49, 'Iluminacion', 'LUZ LED DE EMERGENCIA', 'GAMASONIC', 'GX4040SL2', 24, 'Vigente', '20.png', 4579.5, '2022-11-18', '2022-11-18', '6', 21),
(50, 'Iluminacion', 'LUZ LED DE EMERGENCIA', 'GAMASONIC', 'GX4060SL2', 25, 'Vigente', '20.png', 4950.38, '2022-11-18', '2022-11-18', '6', 21),
(51, 'Iluminacion', 'KIT DE EMBUTIR PARA LUZ DE EMERGENCIA', 'GAMASONIC', 'EBMLEDPL4', 7, 'Vigente', '21.png', 8191.5, '2022-11-18', '2022-11-18', '6', 21),
(52, 'Distribución eléctrica industrial y monitoreo de redes e instrumentos', 'PRENSA CABLES', 'SYBYD', '8103N', 22, 'Vigente', '22.png', 72.5625, '2022-11-18', '2022-11-18', '5', 21),
(53, 'Distribución eléctrica industrial y monitoreo de redes e instrumentos', 'PRENSA CABLES', 'SYBYD', '8104N', 200, 'Vigente', '22.png', 80.625, '2022-11-18', '2022-11-18', '5', 21);

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
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
