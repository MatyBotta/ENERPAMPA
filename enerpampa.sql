-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-10-2022 a las 16:57:52
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
-- Estructura de tabla para la tabla `carrito`
--

CREATE TABLE `carrito` (
  `ID_Prod` int(11) NOT NULL,
  `Mail` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `ID` int(11) NOT NULL,
  `Categoria` varchar(30) NOT NULL,
  `Denominacion` varchar(50) NOT NULL,
  `Marca` varchar(15) NOT NULL,
  `Caracteristicas` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`ID`, `Categoria`, `Denominacion`, `Marca`, `Caracteristicas`) VALUES
(1, 'Cable', 'PVC', 'Wentinck', '1X0,35 mm2'),
(2, 'Cable', 'PVC', 'Wentinck', '1X0,5 mm2'),
(3, 'Cable', 'PVC', 'Wentinck', '1X0,75 mm2'),
(4, 'Cable', 'PVC', 'Wentinck', '1X1 mm2'),
(5, 'Cable', 'PVC', 'Wentinck', '1X2,5 mm2'),
(6, 'Cable', 'PVC', 'Wentinck', '1X10 mm2'),
(7, 'Cable', 'PVC', 'Wentinck', '2X0,5 mm2'),
(8, 'Cable', 'Cristal', 'Wentinck', '2X0,5 mm2'),
(9, 'Cable', 'Cristal', 'Wentinck', '2X0,75 mm2'),
(10, 'Cable', 'Cristal', 'Wentinck', '2X1 mm2'),
(11, 'Cable', 'Subterraneo', 'Wentinck', '1x16 mm2'),
(12, 'Cable', 'Subterraneo', 'Wentinck', '1x50 mm2'),
(13, 'Cable', 'Subterraneo', 'Wentinck', '3x1,5 mm2'),
(14, 'Cable', 'Subterraneo', 'Wentinck', '3x2,5 mm2'),
(15, 'Cable', 'Subterraneo', 'Wentinck', '3x4 mm2'),
(16, 'Cable', 'Subterraneo', 'Wentinck', '3x35 mm2 +16'),
(17, 'Cable', 'Subterraneo', 'Wentinck', '4x4 mm2'),
(18, 'Cable', 'Subterraneo', 'Wentinck', '4x4 mm2 + T'),
(19, 'Cable', 'Subterraneo', 'Wentinck', '4x6 mm2 + T'),
(20, 'Cable', 'Subterraneo', 'Wentinck', '4x16 mm2 + T'),
(21, 'Lampara', 'A60', 'NRV', '15W'),
(22, 'Lampara', 'A60', 'Macroled', '14W'),
(23, 'Lampara', 'A60', 'Sybyd', '9W'),
(24, 'Lampara', 'A60 fria', 'Interlec', '5W'),
(25, 'Lampara', 'A60 calida', 'Interlec', '5W'),
(26, 'Lampara', 'A60 calida', 'Interlec', '9W'),
(27, 'Lampara', 'A60 calida', 'Interlec', '15W'),
(28, 'Lampara', 'A60 fria', 'Interlec', '15W'),
(29, 'Lampara', 'GU10', 'Interlec', '4W'),
(30, 'Lampara', 'GU10 calida', 'Interlec', '5W'),
(31, 'Lampara', 'GU10 ', 'Interlec', '5,5W'),
(32, 'Lampara', 'GU10 fria', 'Interlec', '7W'),
(33, 'Lampara', 'GU10 fria', 'Idoler', '7W'),
(34, 'Lampara', 'GU10 calida', 'Idoler', '7W'),
(35, 'Lampara', 'GU10', 'Alright', '7W'),
(36, 'Lampara', 'GU10', 'Macroled', '7W'),
(37, 'Lampara', 'AR111', 'Idoler', '15W'),
(38, 'Lampara', 'AR111', 'Interlec', '15W'),
(39, 'Lampara', 'AR111 calida', 'Lucciola', '15W'),
(40, 'Lampara', 'Longneck fria', 'Interlec', '120W'),
(41, 'Lampara', 'Magnolia fria', 'Macroled', '40W'),
(42, 'Lampara', 'Magnolia calida', 'Macroled', '40W'),
(43, 'Lampara', 'Magnolia fria', 'Interlec', '50W'),
(44, 'Lampara', 'Bulbon', 'NRV', '50W'),
(45, 'Lampara', 'Bulbon', 'NRV', '70W'),
(46, 'Lampara', 'Bulbon', 'Macroled', '60W'),
(47, 'Lampara', 'Bowling fria', 'Interlec', '70W'),
(48, 'Lampara', 'E27', 'Sybyd', '9W'),
(49, 'Lampara', 'E27', 'NRV', '15W'),
(50, 'Lampara', 'Globo', 'Philips', '15W'),
(51, 'Lampara', 'Globo', 'Macroled', '18W'),
(52, 'Lampara', 'Bulbon E27 fria', 'Macroled', '60W'),
(53, 'Lampara', 'Bulbon E27', 'NRV', '30W'),
(54, 'Lampara', 'Bulbon E27', 'NRV', '40W'),
(55, 'Lampara', 'Bulbon E27', 'NRV', '50W'),
(56, 'Lampara', 'Bulbon E40', 'NRV', '70W'),
(57, 'Lampara', 'Bulbon E40', 'NRV', '100W'),
(58, 'Lampara', 'Panel LED cuadrado fijo frio', 'Interlec', '12W 17x17 cm'),
(59, 'Lampara', 'Panel LED cuadrado embutir frio', 'Interlec', '12W 17x17 cm'),
(60, 'Lampara', 'Panel LED cuadrado fijo frio', 'Interlec', '24W 30x30 cm'),
(61, 'Lampara', 'Panel LED circular embutir frio', 'Interlec', '6W 12cm diametro'),
(62, 'Lampara', 'Panel LED circular fijo frio', 'Interlec', '24W 30 cm diametro'),
(63, 'Lampara', 'Panel LED circular embutir frio', 'Interlec', '24W 30 cm diametro'),
(64, 'Lampara', 'Panel LED cuadrado fijo frio', 'Idoler', '18W'),
(65, 'Lampara', 'Panel LED cuadrado fijo frio', 'NRV', '18W 22,5x22,5 cm'),
(66, 'Lampara', 'Panel LED circular fijo frio', 'NRV', '18W 21 cm diametro'),
(67, 'Lampara', 'Panel LED circular fijo calido', 'Idoler', '12W'),
(68, 'Lampara', 'Panel LED circular fijo calido', 'Idoler', '12W'),
(69, 'Lampara', 'Panel LED circular fijo calido', 'NRV', '12W'),
(70, 'Lampara', 'Panel LED circular fijo calido', 'NRV', '18W'),
(71, 'Lampara', 'Luz de Emergencia autonoma', 'Gamasonic', '6x40 60 SL2'),
(72, 'Lampara', 'Luz de Emergencia autonoma', 'Gamasonic', '6x40 40 SL3'),
(73, 'Lampara', 'Kit Luz de Emergencia', 'Gamasonic', 'EBM LED PL4'),
(74, 'Lampara', 'Luz de Emergencia', 'Interlec', 'inter-30led'),
(75, 'Lampara', 'Tubo LED', 'SICA', '18W 60 cm'),
(76, 'Instalacion electrica', 'Caja metalica', 'DAISA', '5x10'),
(77, 'Instalacion electrica', 'Caja metalica', 'DAISA', '10x10'),
(78, 'Instalacion electrica', 'Caja metalica', 'DAISA', '15x15'),
(79, 'Instalacion electrica', 'Caja metalica', 'DAISA', '20x20'),
(80, 'Instalacion electrica', 'Caja metalica', 'DAISA', '8x12'),
(81, 'Instalacion electrica', 'Termica', 'Schneider', '1 Polo'),
(82, 'Instalacion electrica', 'Termica', 'Schneider', '2 Polos'),
(83, 'Instalacion electrica', 'Termica', 'Schneider', '3 Polos'),
(84, 'Instalacion electrica', 'Termica', 'Schneider', '4 Polos'),
(85, 'Instalacion electrica', 'Disyuntor', 'Schneider', '2 Polos'),
(86, 'Instalacion electrica', 'Disyuntor', 'Schneider', '4 Polos'),
(87, 'Instalacion electrica', 'Tapa de luz', 'Cambre', 'S XXI 1 modulo'),
(88, 'Instalacion electrica', 'Tapa de luz', 'Cambre', 'S XXI 2 modulos'),
(89, 'Instalacion electrica', 'Tapa de luz', 'Cambre', 'S XXI 3 modulos'),
(90, 'Instalacion electrica', 'Tapa de luz', 'Cambre', 'S XXI 4 modulos'),
(91, 'Instalacion electrica', 'Tapa de luz', 'Cambre', 'S XXI ciega'),
(92, 'Instalacion electrica', 'Tapa de luz', 'Cambre', 'S XXI universal doble'),
(93, 'Instalacion electrica', 'Modulo tapa de luz', '', 'Toma Bi'),
(94, 'Instalacion electrica', 'Modulo tapa de luz', '', 'Toma \"doble\" Bi'),
(95, 'Instalacion electrica', 'Modulo tapa de luz', '', 'Tecla'),
(96, 'Instalacion electrica', 'Modulo tapa de luz', '', 'Toma Telefono'),
(97, 'Instalacion electrica', 'Modulo tapa de luz', '', 'Ciego');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `Mail` int(11) NOT NULL,
  `Contasenia` int(11) NOT NULL,
  `Nombre` varchar(15) NOT NULL,
  `Apellido` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
