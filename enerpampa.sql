-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-11-2022 a las 15:46:45
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
(14, '3000K', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrito`
--

CREATE TABLE `carrito` (
  `ID_Prod` int(11) NOT NULL,
  `Mail` int(11) NOT NULL,
  `Cantidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(1, 'Iluminacion', 'PROYECTOR LED', 'INTERELEC', '404206', 40, 'Vigente', 'Recurso 1.png', 1318, '2022-11-02', '2022-11-07', 'Peso argentino', 21),
(2, 'Iluminacion', 'PROYECTOR LED', 'INTERELEC', '404204', 20, 'Vigente', '404206.png', 992, '2022-11-02', '2022-11-02', 'Pesos', 21),
(3, 'Iluminacion', 'PROYECTOR LED', 'INTERELEC', '404202', 30, 'Vigente', '404206.png', 636, '2022-11-02', '2022-11-02', 'Pesos', 21),
(4, 'Iluminacion', 'LAMPARA BOWLING', 'INTERELEC', '402220', 18, 'Vigente', 'Recurso 4.png', 3415, '2022-11-02', '2022-11-02', 'Pesos', 21),
(5, 'Iluminacion', 'LAMPARA LONGNECK', 'INTERELEC', '401791', 9, 'Vigente', 'Recurso 7.png', 4635, '2022-11-02', '2022-11-02', 'Pesos', 21),
(6, 'Iluminacion', 'LAMPARA MAGNOLIA', 'INTERELEC', '402207', 10, 'Vigente', 'Recurso 8.png', 1603, '2022-11-02', '2022-11-02', 'Pesos', 21),
(7, 'Iluminacion', 'LAMPARA LED A60', 'INTERELEC', '403000', 240, 'Vigente', 'Recurso 10.png', 81, '2022-11-02', '2022-11-02', 'Pesos', 21),
(8, 'Iluminacion', 'LAMPARA LED A60', 'INTERELEC', '403001', 100, 'Vigente', 'Recurso 10.png', 81, '2022-11-02', '2022-11-02', 'Pesos', 21),
(9, 'Iluminacion', 'LAMPARA LED A60', 'INTERELEC', '403004', 120, 'Vigente', 'Recurso 10.png', 98, '2022-11-02', '2022-11-02', 'Pesos', 21),
(10, 'Iluminacion', 'LAMPARA LED A60', 'INTERELEC', '403011', 100, 'Vigente', 'Recurso 10.png', 147, '2022-11-02', '2022-11-02', 'Pesos', 21),
(11, 'Iluminacion', 'LAMPARA LED A60', 'NRV', 'A1060-ST 15W', 110, 'Vigente', 'Recurso 10.png', 265, '2022-11-02', '2022-11-02', 'Pesos', 21),
(12, 'Iluminacion', 'LAMPARA LED A60', 'SYBYD', 'SYBULE9F', 1000, 'Vigente', 'Recurso 10.png', 183, '2022-11-02', '2022-11-02', 'Pesos', 21),
(13, 'Iluminacion', 'LAMPARA LED DICRO', 'IDOLER', 'GU10 7W PH', 120, 'Vigente', '', 388, '2022-11-02', '2022-11-02', 'Pesos', 10.5),
(14, 'Iluminacion', 'LAMPARA LED DICRO', 'IDOLER', 'R1=GU10 7W PH', 180, 'Vigente', '', 388, '2022-11-02', '2022-11-02', 'Pesos', 10.5),
(15, 'Iluminacion', 'LAMPARA LED DICRO', 'INTERELEC', '402290', 30, 'Vigente', '6.png', 118, '2022-11-02', '2022-11-02', 'Pesos', 21),
(16, 'Iluminacion', 'LAMPARA LED AR111', 'INTERELEC', '403653', 28, 'Vigente', '6.png', 527, '2022-11-02', '2022-11-02', 'Pesos', 21),
(17, 'Iluminacion', 'LAMPARA LED AR111', 'IDOLER', 'AR111 GU10 15W', 50, 'Vigente', '7.png', 1659, '2022-11-02', '2022-11-02', 'Pesos', 10.5),
(18, 'Iluminacion', 'LAMPARA BULBON', 'NRV', 'HP-4800LP-Q1 70W', 20, 'Vigente', '8.png', 3630, '2022-11-02', '2022-11-02', 'Pesos', 10.5),
(19, 'Iluminacion', 'LAMPARA BULBON', 'NRV', 'HP4000LP-Q1 50W', 9, 'Vigente', '8.png', 1204, '2022-11-02', '2022-11-02', 'Pesos', 10.5),
(20, 'Iluminacion', 'LAMPARA BULBON', 'NRV', 'HP-5600LP-Q1 100W', 9, 'Vigente', '8.png', 4960, '2022-11-02', '2022-11-02', 'Pesos', 10.5),
(21, 'Iluminacion', 'LAMPARA LED A60', 'MACROLED', 'BT-60-15CW', 28, 'Vigente', '5.png', 429, '2022-11-02', '2022-11-02', 'Pesos', 10.5),
(22, 'Iluminacion', 'LAMPARA LED DICRO', 'MACROLED', 'CPS-DP-GU10-22WW', 19, 'Vigente', '6.png', 363, '2022-11-02', '2022-11-02', 'Pesos', 10.5),
(23, 'Iluminacion', 'LAMPARA GLOBO', 'MACROLED', 'G120-18-E27-WW', 10, 'Vigente', '9.png', 1877, '2022-11-02', '2022-11-02', 'Pesos', 10.5),
(24, 'Iluminacion', 'LAMPARA GLOBO', 'PHILIPS', '929001229491', 28, 'Vigente', '9.png', 1790, '2022-11-02', '2022-11-02', 'Pesos', 21),
(25, 'Iluminacion', 'LAMPARA BULBON', 'NRV', 'HP2400LP-Q1 30W', 15, 'Vigente', '8.png', 775, '2022-11-02', '2022-11-02', 'Pesos', 21),
(26, 'Iluminacion', 'LAMPARA BULBON', 'NRV', 'HP3200LP-Q1 40W', 10, 'Vigente', '8.png', 893, '2022-11-02', '2022-11-02', 'Pesos', 21);

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
