-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-11-2022 a las 15:42:40
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
(7, '6500K', 3),
(8, 'E27', 1),
(8, '5W', 2),
(8, '3000K', 3),
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
(14, 'E27', 1),
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
  `Fecha_Prec` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`ID`, `Categoria`, `Nombre`, `Marca`, `Codigo`, `Cantidad`, `Estado`, `Imagen`, `Precio`, `Ult. Act.`, `Fecha_Prec`) VALUES
(1, 'Iluminacion', 'PROYECTOR LED', 'INTERELEC', '404206', 40, 'Vigente', '1.png', 1336.49, '2022-11-01', '2022-11-01'),
(2, 'Iluminacion', 'PROYECTOR LED', 'INTERELEC', '404204', 20, 'Vigente', '1.png', 1006.3, '2022-11-01', '2022-11-01'),
(3, 'Iluminacion', 'PROYECTOR LED', 'INTERELEC', '404202', 30, 'Vigente', '1.png', 644.66, '2022-11-01', '2022-11-01'),
(4, 'Iluminacion', 'LAMPARA BOWLING', 'INTERELEC', '402220', 18, 'Vigente', '2.png', 3463.86, '2022-11-01', '2022-11-01'),
(5, 'Iluminacion', 'LAMPARA LONGNECK', 'INTERELEC', '401791', 9, 'Vigente', '3.png', 4701.29, '2022-11-01', '2022-11-01'),
(6, 'Iluminacion', 'LAMPARA MAGNOLIA', 'INTERELEC', '402207', 10, 'Vigente', '4.png', 1626, '2022-11-01', '2022-11-01'),
(7, 'Iluminacion', 'LAMPARA LED A60', 'INTERELEC', '403000', 240, 'Vigente', '5.png', 81.76, '2022-11-01', '2022-11-01'),
(8, 'Iluminacion', 'LAMPARA LED A60', 'INTERELEC', '403001', 100, 'Vigente', '5.png', 81.76, '2022-11-01', '2022-11-01'),
(9, 'Iluminacion', 'LAMPARA LED A60', 'INTERELEC', '403004', 120, 'Vigente', '5.png', 99.53, '2022-11-01', '2022-11-01'),
(10, 'Iluminacion', 'LAMPARA LED A60', 'INTERELEC', '403011', 100, 'Vigente', '5.png', 149.37, '2022-11-01', '2022-11-01'),
(11, 'Iluminacion', 'LAMPARA LED A60', 'NRV', 'A1060-ST 15W', 110, 'Vigente', '5.png', 268.87, '2022-11-01', '2022-11-01'),
(12, 'Iluminacion', 'LAMPARA LED A60', 'SYBYD', 'SYBULE9F', 1000, 'Vigente', '5.png', 185.54, '2022-11-01', '2022-11-01'),
(13, 'Iluminacion', 'LAMPARA LED DICRO', 'IDOLER', 'GU107WPH', 120, 'Vigente', '6.png', 387, '2022-11-01', '2022-11-01'),
(14, 'Iluminacion', 'LAMPARA LED DICRO', 'INTERELEC', '401987', 30, 'Vigente', '6.png', 169, '2022-11-01', '2022-11-01');

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
