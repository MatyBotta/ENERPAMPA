-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
<<<<<<< HEAD
-- Tiempo de generación: 07-12-2022 a las 15:51:16
=======
-- Tiempo de generación: 16-12-2022 a las 12:33:30
>>>>>>> f1da8d9eb07f8daf1ce67f3c385944b00ffa724d
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 8.1.10

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
(14, 'GU10', '7W', '6000k', '', '', ''),
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
(29, 'Luminaria', '18W', 'ORIFICIO 18.7 Ø', '60cm', '', ''),
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
(52, 'PG 11', 'AJUSTE 5 A 10', 'ORIFICIO 18.7mm Ø', '', '', ''),
(53, 'PG 13.5', 'AJUSTE 6 A 12', 'ORIFICO 20.5mm Ø', '', '', ''),
(54, 'PG 9', 'AJUSTE 4 A 8', 'ORIFICIO 15.3mm Ø', '', '', ''),
(55, 'PG 21', 'AJUSTE 13 A 18', 'ORIFICIO 28.4mm Ø', '', '', ''),
(56, 'PG 16', 'AJUSTE 10 A 14', 'ORIFICIO 22.6mm Ø', '', '', ''),
(57, '16.4mm Ø', 'ANCHO 18.2mm', 'RANGO 15 - 100', '', '', ''),
(58, '13mm Ø', 'ANCHO 15mm', 'RANGO 12-70', '', '', ''),
(59, '10.2 mm Ø', 'ANCHO 13.9mm', 'RANGO 9-65', '', '', ''),
(60, 'ROSCA 1/2\"', 'ELECTRICA', 'AJUSTE 5 A 8 mm', '', '', ''),
(61, 'ROSCA 3/4\"', 'ELECTRICA', 'AJUSTE 10 A 14 mm', '', '', ''),
(62, 'ROSCA 1 1/4\"', 'ELECTRICA', 'AJUSTE 15 A 20 mm', '', '', ''),
(63, 'ROSCA 7/8\"', 'ELECTRICA', 'AJUSTE 12 A 17mm', '', '', ''),
(64, 'ROSCA 5/8\"', 'ELECTRICA', 'AJUSTE 7 A 11mm', '', '', ''),
(65, 'ROSCA 1\"', 'ELECTRICA', 'AJUSTE 15 A 20mm', '', '', ''),
(66, 'ROSCA 3/4\"', 'ELECTRICA', 'PLASTICO', '', '', ''),
(67, 'ROSCA 7/8\"', 'ELECTRICA', 'PLASTICO', '', '', ''),
(68, 'ROSCA 1 1/2\"', 'ELECTRICA', 'AJUSTE 23 A 30 mm', '', '', ''),
(69, 'ROSCA M20', 'METRICA', 'AJUSTE 10 A 14 mm', '', '', ''),
(70, 'MONOF. 250 VCA - 10 A', 'IRAM 2071', '-', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrito`
--

CREATE TABLE `carrito` (
  `ID_Prod` int(11) NOT NULL,
  `Mail` varchar(50) NOT NULL,
  `Cantidad` int(11) NOT NULL,
<<<<<<< HEAD
  `Pedido` int(11) DEFAULT NULL
=======
  `Pedido` int(11) NOT NULL
>>>>>>> f1da8d9eb07f8daf1ce67f3c385944b00ffa724d
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `carrito`
--

INSERT INTO `carrito` (`ID_Prod`, `Mail`, `Cantidad`, `Pedido`) VALUES
<<<<<<< HEAD
(1, 'bye@a', 1, 2),
(1, 'hola', 2, NULL),
(1, 'hola@a.com', 8, 1),
(2, 'a@a.com', 2, NULL),
(2, 'hola@a.com', 7, 1),
(3, 'a@a.com', 69, NULL),
(3, 'hola', 1, NULL),
(3, 'hola@a.com', 2, 1),
(4, 'hola@a.com', 5, 1),
(5, 'bye@a', 1, 2),
(5, 'hola@a.com', 5, 1),
(6, 'hola@a.com', 4, 1),
(7, 'hola@a.com', 1, 1),
(8, 'bye@a', 1, 2),
(8, 'hola@a.com', 1, 1),
(9, 'hola@a.com', 1, 1),
(10, 'hola@a.com', 2, 1),
(11, 'bye@a', 2, 2),
(11, 'hola@a.com', 1, 1),
(12, 'hola@a.com', 2, 1),
(13, 'a@a.com', 1, NULL),
(13, 'bye@a', 2, 2),
(14, 'hola@a.com', 1, 1),
(15, 'bye@a', 2, 2),
(17, 'a@a.com', 1, NULL),
(17, 'bye@a', 1, 2),
(20, 'bye@a', 1, 2),
(31, 'bye@a', 1, 2),
(32, 'a@a.com', 1, NULL);
=======
(1, 'a@a.com', 2, 4),
(1, 'bye@a', 5, 3),
(1, 'hola', 2, 0),
(1, 'hola@a.com', 2, 0),
(1, 'hola@a.com', 10, 1),
(2, 'a@a.com', 2, 4),
(2, 'bye@a', 6, 3),
(2, 'hola@a.com', 1, 0),
(2, 'hola@a.com', 8, 1),
(3, 'a@a.com', 69, 4),
(3, 'hola', 1, 0),
(3, 'hola@a.com', 3, 1),
(4, 'hola@a.com', 6, 1),
(5, 'bye@a', 1, 3),
(5, 'hola@a.com', 1, 0),
(5, 'hola@a.com', 5, 1),
(6, 'hola@a.com', 1, 0),
(6, 'hola@a.com', 4, 1),
(7, 'hola@a.com', 1, 1),
(8, 'bye@a', 1, 3),
(8, 'hola@a.com', 1, 1),
(9, 'hola@a.com', 1, 1),
(10, 'hola@a.com', 2, 1),
(11, 'bye@a', 2, 3),
(11, 'hola@a.com', 1, 1),
(12, 'hola@a.com', 2, 1),
(13, 'a@a.com', 1, 4),
(13, 'bye@a', 2, 3),
(14, 'bye@a', 1, 3),
(14, 'hola@a.com', 1, 1),
(15, 'bye@a', 2, 3),
(16, 'hola@a.com', 1, 0),
(17, 'a@a.com', 1, 4),
(17, 'bye@a', 1, 3),
(20, 'bye@a', 1, 3),
(30, 'bye@a', 1, 3),
(31, 'bye@a', 1, 3),
(32, 'a@a.com', 1, 4),
(32, 'bye@a', 1, 3),
(33, 'hola@a.com', 5, 0);
>>>>>>> f1da8d9eb07f8daf1ce67f3c385944b00ffa724d

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ingresos`
--

CREATE TABLE `ingresos` (
  `Mail` varchar(50) NOT NULL,
  `Fecha` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ingresos`
--

INSERT INTO `ingresos` (`Mail`, `Fecha`) VALUES
('a@a.com', '2022-12-07 09:12:00'),
('a@a.com', '2022-12-07 09:44:00'),
<<<<<<< HEAD
('bye@a', '2022-12-05 10:34:00'),
('bye@a', '2022-12-06 09:53:00'),
('hola@a.com', '2022-12-05 10:28:00'),
('hola@a.com', '2022-12-06 08:43:00');
=======
('a@a.com', '2022-12-12 08:42:00'),
('a@a.com', '2022-12-12 10:54:00'),
('a@a.com', '2022-12-12 10:55:00'),
('a@a.com', '2022-12-12 10:56:00'),
('a@a.com', '2022-12-12 11:01:00'),
('a@a.com', '2022-12-12 11:03:00'),
('a@a.com', '2022-12-12 11:04:00'),
('a@a.com', '2022-12-12 11:05:15'),
('a@a.com', '2022-12-12 11:05:17'),
('a@a.com', '2022-12-12 11:08:59'),
('a@a.com', '2022-12-12 11:50:33'),
('a@a.com', '2022-12-12 11:50:53'),
('a@a.com', '2022-12-13 08:32:23'),
('a@a.com', '2022-12-13 10:41:20'),
('a@a.com', '2022-12-13 11:25:44'),
('a@a.com', '2022-12-13 11:32:54'),
('a@a.com', '2022-12-15 08:51:19'),
('adasd@gmail.com', '2022-12-14 10:37:00'),
('adasd@gmail.com', '2022-12-14 10:39:00'),
('adasd@gmail.com', '2022-12-14 10:40:00'),
('adasd@gmail.com', '2022-12-14 10:42:00'),
('adasd@gmail.com', '2022-12-14 10:43:00'),
('adasd@gmail.com', '2022-12-14 10:49:00'),
('adasd@gmail.com', '2022-12-14 10:53:00'),
('adasd@gmail.com', '2022-12-14 11:09:00'),
('asdf@gmail.com', '2022-12-14 10:55:00'),
('bye@a', '2022-12-05 10:34:00'),
('bye@a', '2022-12-06 09:53:00'),
('bye@a', '2022-12-13 11:26:00'),
('gleviu@enerpampa.com', '2022-12-13 09:55:54'),
('gleviu@enerpampa.com', '2022-12-13 10:16:56'),
('hola@a.com', '2022-12-05 10:28:00'),
('hola@a.com', '2022-12-06 08:43:00'),
('hola@a.com', '2022-12-15 11:35:57');
>>>>>>> f1da8d9eb07f8daf1ce67f3c385944b00ffa724d

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido`
--

CREATE TABLE `pedido` (
  `ID` int(11) NOT NULL,
  `Mail` varchar(50) NOT NULL,
<<<<<<< HEAD
  `Hora` date NOT NULL
=======
  `Hora` date NOT NULL,
  `Estado` varchar(20) NOT NULL DEFAULT 'Activo'
>>>>>>> f1da8d9eb07f8daf1ce67f3c385944b00ffa724d
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pedido`
--

<<<<<<< HEAD
INSERT INTO `pedido` (`ID`, `Mail`, `Hora`) VALUES
(1, 'hola@a.com', '2022-12-06'),
(2, 'bye@a', '2022-12-07');
=======
INSERT INTO `pedido` (`ID`, `Mail`, `Hora`, `Estado`) VALUES
(1, 'hola@a.com', '2022-12-06', 'Activo'),
(2, 'bye@a', '2022-12-07', 'Activo'),
(3, 'bye@a', '2022-12-13', 'Concretado'),
(4, 'a@a.com', '2022-12-13', 'Archivado');
>>>>>>> f1da8d9eb07f8daf1ce67f3c385944b00ffa724d

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
<<<<<<< HEAD
(1, 'Iluminacion', 'PROYECTOR LED', 'INTERELEC', '404206', 40, 'Vigente', '1.png', 1318, '2022-11-02', '2022-11-07', 'Pesos', 21),
(2, 'Iluminacion', 'PROYECTOR LED', 'INTERELEC', '404204', 20, 'Vigente', '1.png', 992, '2022-11-02', '2022-11-02', 'Pesos', 21),
(3, 'Iluminacion', 'PROYECTOR LED', 'INTERELEC', '404202', 30, 'Vigente', '1.png', 636, '2022-11-02', '2022-11-02', 'Pesos', 21),
(4, 'Iluminacion', 'LAMPARA BOWLING', 'INTERELEC', '402220', 18, 'Vigente', 'Bowling.png', 3415, '2022-11-02', '2022-11-02', 'Pesos', 21),
(5, 'Iluminacion', 'LAMPARA LONGNECK', 'INTERELEC', '401791', 9, 'Vigente', 'Longneck.png', 4635, '2022-11-02', '2022-11-02', 'Pesos', 21),
(6, 'Iluminacion', 'LAMPARA MAGNOLIA', 'INTERELEC', '402207', 10, 'Vigente', 'Magnolia.png', 1603, '2022-11-02', '2022-11-02', 'Pesos', 21),
(7, 'Iluminacion', 'LAMPARA LED A60', 'INTERELEC', '403000', 240, 'Vigente', '5.png', 81, '2022-11-02', '2022-11-02', 'Pesos', 21),
(8, 'Iluminacion', 'LAMPARA LED A60', 'INTERELEC', '403001', 100, 'Vigente', '5.png', 81, '2022-11-02', '2022-11-02', 'Pesos', 21),
(9, 'Iluminacion', 'LAMPARA LED A60', 'INTERELEC', '403004', 120, 'Vigente', '5.png', 98, '2022-11-02', '2022-11-02', 'Pesos', 21),
(10, 'Iluminacion', 'LAMPARA LED A60', 'INTERELEC', '403011', 100, 'Vigente', '5.png', 147, '2022-11-02', '2022-11-02', 'Pesos', 21),
(11, 'Iluminacion', 'LAMPARA LED A60', 'NRV', 'A1060-ST 15W', 110, 'Vigente', '5.png', 265, '2022-11-02', '2022-11-02', 'Pesos', 21),
(12, 'Iluminacion', 'LAMPARA LED A60', 'SYBYD', 'SYBULE9F', 1000, 'Vigente', '5.png', 183, '2022-11-02', '2022-11-02', 'Pesos', 21),
(13, 'Iluminacion', 'LAMPARA LED DICRO', 'IDOLER', 'GU10 7W PH', 120, 'Vigente', 'Dicro.png', 388, '2022-11-02', '2022-11-02', 'Pesos', 10.5),
=======
(1, 'Iluminacion', 'PROYECTOR LED', 'INTERELEC', '404206', 38, 'Vigente', '1.png', 1318, '2022-11-02', '2022-11-07', 'Pesos', 21),
(2, 'Iluminacion', 'PROYECTOR LED', 'INTERELEC', '404204', 18, 'Vigente', '1.png', 992, '2022-11-02', '2022-11-02', 'Pesos', 21),
(3, 'Iluminacion', 'PROYECTOR LED', 'INTERELEC', '404202', -39, 'Vigente', '1.png', 636, '2022-11-02', '2022-11-02', 'Pesos', 21),
(4, 'Iluminacion', 'LAMPARA BOWLING', 'INTERELEC', '402220', 13, 'Vigente', 'Bowling.png', 3415, '2022-11-02', '2022-11-02', 'Pesos', 21),
(5, 'Iluminacion', 'LAMPARA LONGNECK', 'INTERELEC', '401791', 8, 'Vigente', 'Longneck.png', 4635, '2022-11-02', '2022-11-02', 'Pesos', 21),
(6, 'Iluminacion', 'LAMPARA MAGNOLIA', 'INTERELEC', '402207', 6, 'Vigente', 'Magnolia.png', 1603, '2022-11-02', '2022-11-02', 'Pesos', 21),
(7, 'Iluminacion', 'LAMPARA LED A60', 'INTERELEC', '403000', 239, 'Vigente', '5.png', 81, '2022-11-02', '2022-11-02', 'Pesos', 21),
(8, 'Iluminacion', 'LAMPARA LED A60', 'INTERELEC', '403001', 99, 'Vigente', '5.png', 81, '2022-11-02', '2022-11-02', 'Pesos', 21),
(9, 'Iluminacion', 'LAMPARA LED A60', 'INTERELEC', '403004', 119, 'Vigente', '5.png', 98, '2022-11-02', '2022-11-02', 'Pesos', 21),
(10, 'Iluminacion', 'LAMPARA LED A60', 'INTERELEC', '403011', 98, 'Vigente', '5.png', 147, '2022-11-02', '2022-11-02', 'Pesos', 21),
(11, 'Iluminacion', 'LAMPARA LED A60', 'NRV', 'A1060-ST 15W', 108, 'Vigente', '5.png', 265, '2022-11-02', '2022-11-02', 'Pesos', 21),
(12, 'Iluminacion', 'LAMPARA LED A60', 'SYBYD', 'SYBULE9F', 998, 'Vigente', '5.png', 183, '2022-11-02', '2022-11-02', 'Pesos', 21),
(13, 'Iluminacion', 'LAMPARA LED DICRO', 'IDOLER', 'GU10 7W PH', 119, 'Vigente', 'Dicro.png', 388, '2022-11-02', '2022-11-02', 'Pesos', 10.5),
>>>>>>> f1da8d9eb07f8daf1ce67f3c385944b00ffa724d
(14, 'Iluminacion', 'LAMPARA LED DICRO', 'IDOLER', 'R1=GU10 7W PH', 180, 'Vigente', 'Dicro.png', 388, '2022-11-02', '2022-11-02', 'Pesos', 10.5),
(15, 'Iluminacion', 'LAMPARA LED DICRO', 'INTERELEC', '402290', 30, 'Vigente', 'Dicro.png', 118, '2022-11-02', '2022-11-02', 'Pesos', 21),
(16, 'Iluminacion', 'LAMPARA LED AR111', 'INTERELEC', '403653', 28, 'Vigente', 'AR111.png', 527, '2022-11-02', '2022-11-02', 'Pesos', 21),
(17, 'Iluminacion', 'LAMPARA LED AR111', 'IDOLER', 'AR111 GU10 15W', 50, 'Vigente', 'AR111.png', 1659, '2022-11-02', '2022-11-02', 'Pesos', 10.5),
(18, 'Iluminacion', 'LAMPARA BULBON', 'NRV', 'HP-4800LP-Q1 70W', 20, 'Vigente', '8.png', 3630, '2022-11-02', '2022-11-02', 'Pesos', 10.5),
(19, 'Iluminacion', 'LAMPARA BULBON', 'NRV', 'HP4000LP-Q1 50W', 9, 'Vigente', '8.png', 1204, '2022-11-02', '2022-11-02', 'Pesos', 10.5),
(20, 'Iluminacion', 'LAMPARA BULBON', 'NRV', 'HP-5600LP-Q1 100W', 9, 'Vigente', '8.png', 4960, '2022-11-02', '2022-11-02', 'Pesos', 10.5),
(21, 'Iluminacion', 'LAMPARA LED A60', 'MACROLED', 'BT-60-15CW', 28, 'Vigente', '5.png', 429, '2022-11-02', '2022-11-02', 'Pesos', 10.5),
(22, 'Iluminacion', 'LAMPARA LED DICRO', 'MACROLED', 'CPS-DP-GU10-22WW', 19, 'Vigente', 'Dicro.png', 363, '2022-11-02', '2022-11-02', 'Pesos', 10.5),
(23, 'Iluminacion', 'LAMPARA GLOBO', 'MACROLED', 'G120-18-E27-WW', 10, 'Vigente', 'Globo.png', 1877, '2022-11-02', '2022-11-02', 'Pesos', 10.5),
(24, 'Iluminacion', 'LAMPARA GLOBO', 'PHILIPS', '929001229491', 28, 'Vigente', 'Globo.png', 1790, '2022-11-02', '2022-11-02', 'Pesos', 21),
(25, 'Iluminacion', 'LAMPARA BULBON', 'NRV', 'HP2400LP-Q1 30W', 15, 'Vigente', '8.png', 775, '2022-11-02', '2022-11-02', 'Pesos', 21),
(26, 'Iluminacion', 'LAMPARA BULBON', 'NRV', 'HP3200LP-Q1 40W', 10, 'Vigente', '8.png', 893, '2022-11-02', '2022-11-02', 'Pesos', 21),
(27, 'Iluminacion', 'LAMPARA BULBON', 'MACROLED', 'BAP-60-E27CW', 6, 'Vigente', '8.png', 4209.98, '2022-11-08', '2022-11-08', 'Pesos', 10.5),
(28, 'Iluminacion', 'LAMPARA LED AR111', 'LUCCIOLA', '2LE009NSC056', 41, 'Vigente', 'AR111.png', 544.3, '2022-11-11', '2022-11-11', 'Pesos', 10.5),
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
(53, 'Distribución eléctrica industrial y monitoreo de redes e instrumentos', 'PRENSA CABLES', 'SYBYD', '8104N', 200, 'Vigente', '22.png', 80.625, '2022-11-18', '2022-11-18', 'Pesos', 21),
(54, 'Distribución eléctrica industrial y monitoreo de redes e instrumentos', 'PRENSA CABLES', 'SYBYD', '8102N', 150, 'Vigente', '22.png', 57.663, '2022-11-29', '2022-11-29', 'Pesos', 21),
(55, 'Distribución eléctrica industrial y monitoreo de redes e instrumentos', 'PRENSA CABLES', 'SYBYD', '8105/1N', 120, 'Vigente', '22.png', 166.397, '2022-11-29', '2022-11-29', 'Pesos', 21),
(56, 'Distribución eléctrica industrial y monitoreo de redes e instrumentos', 'PRENSA CABLES', 'SYBYD', '8105N', 80, 'Vigente', '22.png', 112, '2022-11-29', '2022-11-29', 'Pesos', 21),
(57, 'Distribución eléctrica industrial y monitoreo de redes e instrumentos', 'CINTA HELICOIDAL', 'SYBYD', '2506', 60, 'Vigente', '23.png', 179.577, '2022-11-29', '2022-11-29', 'Pesos', 21),
(58, 'Distribución eléctrica industrial y monitoreo de redes e instrumentos', 'CINTA HELICOIDAL', 'SYBYD', '2505', 40, 'Vigente', '23.png', 261.013, '2022-12-02', '2022-12-02', 'Pesos', 21),
(59, 'Distribución eléctrica industrial y monitoreo de redes e instrumentos', 'CINTA HELICOIDAL', 'SYBYD', '2504', 60, 'Vigente', '23.png', 292.6, '2022-12-02', '2022-12-02', 'Pesos', 21),
(60, 'Distribución eléctrica industrial y monitoreo de redes e instrumentos', 'PRENSA CABLES', 'SYBYD', '2PE1T', 350, 'Vigente', '24 PLASTIC.png', 91.36, '2022-12-02', '2022-12-02', 'Pesos', 21),
(61, 'Distribución eléctrica industrial y monitoreo de redes e instrumentos', 'PRENSA CABLES', 'PAMPACO', '2PE3T', 200, 'Vigente', '24 PLASTIC.png', 125.03, '2022-12-02', '2022-12-02', 'Pesos', 21),
(62, 'Distribución eléctrica industrial y monitoreo de redes e instrumentos', 'PRENSA CABLES', 'PAMPACO', '2AEL6T', 50, 'Vigente', '25 ALUMINIO.png', 649.22, '2022-12-02', '2022-12-02', 'Pesos', 21),
(63, 'Distribución eléctrica industrial y monitoreo de redes e instrumentos', 'PRENSA CABLES', 'PAMPACO', '2PE4T', 225, 'Vigente', '24 PLASTIC.png', 139.61, '2022-12-06', '2022-12-06', 'Pesos', 21),
(64, 'Distribución eléctrica industrial y monitoreo de redes e instrumentos', 'PRENSA CABLES', 'PAMPACO', '2PE2T', 300, 'Vigente', '24 PLASTIC.png', 114.56, '2022-12-06', '2022-12-06', 'Pesos', 21),
(65, 'Distribución eléctrica industrial y monitoreo de redes e instrumentos', 'PRENSA CABLES', 'PAMPACO', '2PE5T', 100, 'Vigente', '24 PLASTIC.png', 167.16, '2022-12-06', '2022-12-06', 'Pesos', 21),
(66, 'Distribución eléctrica industrial y monitoreo de redes e instrumentos', 'PRENSA CAÑO', 'PAMPACO', '6PE3T', 100, 'Vigente', '26 PCAÑO PLASTIC.png', 141.42, '2022-12-07', '2022-12-07', 'Pesos', 21),
(67, 'Distribución eléctrica industrial y monitoreo de redes e instrumentos', 'PRENSA CAÑO', 'PAMPACO', '6PE4T', 75, 'Vigente', '26 PCAÑO PLASTIC.png', 162.87, '2022-12-07', '2022-12-07', 'Pesos', 21),
(68, 'Distribución eléctrica industrial y monitoreo de redes e instrumentos', 'PRENSA CABLES', 'PAMPACO', '2PE7T', 25, 'Vigente', '24 PLASTIC.png', 335.86, '2022-12-07', '2022-12-07', 'Pesos', 21),
(69, 'Distribución eléctrica industrial y monitoreo de redes e instrumentos', 'PRENSA CABLES', 'PAMPACO', '2PM3T', 100, 'Vigente', '27 PLASTIC METRICA.png', 231.31, '2022-12-07', '2022-12-07', 'Pesos', 21),
(70, 'Distribución eléctrica industrial y monitoreo de redes e instrumentos', 'SOPORTE Y TOMA CON TIERRA', 'KALOP', 'KL48251', 45, 'Vigente', '28.png', 309.66, '2022-12-07', '2022-12-07', 'Pesos', 21);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `Mail` varchar(40) NOT NULL,
  `Contrasenia` int(11) NOT NULL,
  `Nombre` varchar(15) NOT NULL,
  `Apellido` varchar(15) NOT NULL,
  `Telefono` int(11) NOT NULL,
  `Celular` int(11) NOT NULL,
  `Tipo` varchar(10) NOT NULL,
  `Rubro` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`Mail`, `Contrasenia`, `Nombre`, `Apellido`, `Telefono`, `Celular`, `Tipo`, `Rubro`) VALUES
<<<<<<< HEAD
('a@a.com', 456, 'Matias', 'Nicolas', 54321, 0, 'Trabajador', ''),
('bye@a', 321, 'Hola', 'Hola', 123445, 0, 'Cliente', ''),
('chau@a.com', 789, 'DOMI', 'NGO', 65432, 0, 'Cliente', ''),
('fdf@tgh', 654, 'Hola', 'Hola', 123456, 654321, 'Cliente', ''),
('hola@a.com', 123, 'SA', 'BADO', 96787, 0, 'Cliente', '');
=======
('123@123', 1010, 'Leandro', 'Arnaldi', 0, 0, 'Trabajador', ''),
('a@a.com', 456, 'Matias', 'Nicolas', 54321, 0, 'Trabajador', ''),
('adasd@gmail.com', 45345, 'lean', 'arnaldi', 0, 0, 'Cliente', 'Instalador electricista'),
('asdf@gmail.com', 123, 'lamamadejuan', 'arnaldi', 123, 0, 'Cliente', 'Instalador electricista'),
('bye@a', 321, 'Hola', 'Hola', 123445, 0, 'Cliente', ''),
('chau@a.com', 789, 'DOMI', 'NGO', 65432, 0, 'Cliente', ''),
('dmoya1', 1234, 'juanjose', 'mortadela', 11223344, 0, 'Trabajador', ''),
('gleviu@enerpampa.com', 1234, 'Gonzalo', 'Leviu', 1234, 0, 'Trabajador', ''),
('hola@a.com', 123, 'SA', 'BADO', 96787, 0, 'Cliente', ''),
('lean', 1234, 'PRENSA CABLES', 'mortadela', 12312, 0, 'Trabajador', ''),
('lean2', 1231, 'PRENSA CABLES', 'asd', 1312, 0, 'Trabajador', '');
>>>>>>> f1da8d9eb07f8daf1ce67f3c385944b00ffa724d

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carac_prod`
--
ALTER TABLE `carac_prod`
  ADD PRIMARY KEY (`ID_Prod`);

--
-- Indices de la tabla `carrito`
--
ALTER TABLE `carrito`
<<<<<<< HEAD
  ADD PRIMARY KEY (`ID_Prod`,`Mail`);
=======
  ADD PRIMARY KEY (`ID_Prod`,`Mail`,`Pedido`);
>>>>>>> f1da8d9eb07f8daf1ce67f3c385944b00ffa724d

--
-- Indices de la tabla `ingresos`
--
ALTER TABLE `ingresos`
  ADD PRIMARY KEY (`Mail`,`Fecha`);

--
-- Indices de la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`Mail`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
