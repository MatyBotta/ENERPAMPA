-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-11-2022 a las 14:06:30
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
(1413, 'aaa', 1),
(1413, 'bbbb', 2),
(1413, 'fgg', 3),
(1412, 'aaaaaa', 1),
(1412, 'fgsgf', 2),
(1419, 'fffff', 3),
(1420, 'fffff', 3),
(1420, 'Array[0]', 1),
(1420, 'Array[0]', 2),
(1420, 'ff', 3),
(1421, 'aaaaaa', 1),
(1421, 'fgsgf', 2),
(1421, 'ff', 3),
(1421, 'fghg', 1),
(1421, 'fghfgh', 1),
(1421, 'fghg', 1),
(1422, 'fghg', 1),
(1421, 'ghg', 1),
(1422, 'fgsfg', 1),
(1422, 'fggg', 2),
(1423, 'ghfgh', 1),
(1424, 'ghfgh', 1),
(1425, 'ghfgh', 1),
(1425, 'dgdh', 1),
(1425, 'hgdgh', 2),
(1426, 'dgdh', 1),
(1426, 'hgdgh', 2),
(1426, 'dghdgh', 1),
(1427, 'dfghdh', 1),
(1428, 'dfghdh', 1),
(1, 'GU10', 1),
(1, '15w', 2),
(1, '3000K', 3),
(2, 'LUMINARIA', 1),
(2, '50W', 2),
(2, '6500K', 3),
(2, 'EXTERIOR', 4),
(2, 'IP65', 5);

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
