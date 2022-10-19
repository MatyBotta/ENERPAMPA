-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-10-2022 a las 17:03:46
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
(1411, '23', 1),
(1411, '4', 2),
(1411, '23', 1),
(1411, '4', 2),
(1412, '23', 1),
(1412, '33', 2),
(1412, '44r', 3),
(1413, 'ghjh', 1);

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
  `Categoria` varchar(50) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Marca` varchar(30) NOT NULL,
  `Codigo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`ID`, `Categoria`, `Nombre`, `Marca`, `Codigo`) VALUES
(1311, 'Cable', 'PVC 1X0,35 mm2', 'Wentinck', '0'),
(1312, 'Cable', 'PVC 1X0,5 mm2', 'Wentinck', '0'),
(1313, 'Cable', 'PVC 1X0,75 mm2', 'Wentinck', '0'),
(1314, 'Cable', 'PVC 1X1 mm2', 'Wentinck', '0'),
(1315, 'Cable', 'PVC 1X2,5 mm2', 'Wentinck', '0'),
(1316, 'Cable', 'PVC 1X10 mm2', 'Wentinck', '0'),
(1317, 'Cable', 'PVC 2X0,5 mm2', 'Wentinck', '0'),
(1318, 'Cable', 'Cristal 2X0,5 mm2', 'Wentinck', '0'),
(1319, 'Cable', 'Cristal 2X0,75 mm2', 'Wentinck', '0'),
(1320, 'Cable', 'Cristal 2X1 mm2', 'Wentinck', '0'),
(1321, 'Cable', 'Subterraneo 1x16 mm2', 'Wentinck', '0'),
(1322, 'Cable', 'Subterraneo 1x50 mm2', 'Wentinck', '0'),
(1323, 'Cable', 'Subterraneo 3x1,5 mm2', 'Wentinck', '0'),
(1324, 'Cable', 'Subterraneo 3x2,5 mm2', 'Wentinck', '0'),
(1325, 'Cable', 'Subterraneo 3x4 mm2', 'Wentinck', '0'),
(1326, 'Cable', 'Subterraneo 3x35 mm2 +16', 'Wentinck', '0'),
(1327, 'Cable', 'Subterraneo 4x4 mm2', 'Wentinck', '0'),
(1328, 'Cable', 'Subterraneo 4x4 mm2 + T', 'Wentinck', '0'),
(1329, 'Cable', 'Subterraneo 4x6 mm2 + T', 'Wentinck', '0'),
(1330, 'Cable', 'Subterraneo 4x16 mm2 + T', 'Wentinck', '0'),
(1331, 'Lampara', 'A60 15W', 'NRV', '0'),
(1332, 'Lampara', 'A60 14W', 'Macroled', '0'),
(1333, 'Lampara', 'A60 9W', 'Sybyd', '0'),
(1334, 'Lampara', 'A60 fria 5W', 'Interlec', '0'),
(1335, 'Lampara', 'A60 calida 5W', 'Interlec', '0'),
(1336, 'Lampara', 'A60 calida 9W', 'Interlec', '0'),
(1337, 'Lampara', 'A60 calida 15W', 'Interlec', '0'),
(1338, 'Lampara', 'A60 fria 15W', 'Interlec', '0'),
(1339, 'Lampara', 'GU10 4W', 'Interlec', '0'),
(1340, 'Lampara', 'GU10 calida 5W', 'Interlec', '0'),
(1341, 'Lampara', 'GU10 5,5W', 'Interlec', '0'),
(1342, 'Lampara', 'GU10 fria 7W', 'Interlec', '0'),
(1343, 'Lampara', 'GU10 fria 7W', 'Idoler', '0'),
(1344, 'Lampara', 'GU10 calida 7W', 'Idoler', '0'),
(1345, 'Lampara', 'GU10 7W', 'Alright', '0'),
(1346, 'Lampara', 'GU10 7W', 'Macroled', '0'),
(1347, 'Lampara', 'AR111 15W', 'Idoler', '0'),
(1348, 'Lampara', 'AR111 15W', 'Interlec', '0'),
(1349, 'Lampara', 'AR111 calida 15W', 'Lucciola', '0'),
(1350, 'Lampara', 'Longneck fria 120W', 'Interlec', '0'),
(1351, 'Lampara', 'Magnolia fria 40W', 'Macroled', '0'),
(1352, 'Lampara', 'Magnolia calida 40W', 'Macroled', '0'),
(1353, 'Lampara', 'Magnolia fria 50W', 'Interlec', '0'),
(1354, 'Lampara', 'Bulbon 50W', 'NRV', '0'),
(1355, 'Lampara', 'Bulbon 70W', 'NRV', '0'),
(1356, 'Lampara', 'Bulbon 60W', 'Macroled', '0'),
(1357, 'Lampara', 'Bowling fria 70W', 'Interlec', '0'),
(1358, 'Lampara', 'E27 9W', 'Sybyd', '0'),
(1359, 'Lampara', 'E27 15W', 'NRV', '0'),
(1360, 'Lampara', 'Globo 15W', 'Philips', '0'),
(1361, 'Lampara', 'Globo 18W', 'Macroled', '0'),
(1362, 'Lampara', 'Bulbon E27 fria 60W', 'Macroled', '0'),
(1363, 'Lampara', 'Bulbon E27 30W', 'NRV', '0'),
(1364, 'Lampara', 'Bulbon E27 40W', 'NRV', '0'),
(1365, 'Lampara', 'Bulbon E27 50W', 'NRV', '0'),
(1366, 'Lampara', 'Bulbon E40 70W', 'NRV', '0'),
(1367, 'Lampara', 'Bulbon E40 100W', 'NRV', '0'),
(1368, 'Lampara', 'Panel LED cuadrado fijo frio 12W 17x17 cm', 'Interlec', '0'),
(1369, 'Lampara', 'Panel LED cuadrado embutir frio 12W 17x17 cm', 'Interlec', '0'),
(1370, 'Lampara', 'Panel LED cuadrado fijo frio 24W 30x30 cm', 'Interlec', '0'),
(1371, 'Lampara', 'Panel LED circular embutir frio 6W 12cm diametro', 'Interlec', '0'),
(1372, 'Lampara', 'Panel LED circular fijo frio 24W 30 cm diametro', 'Interlec', '0'),
(1373, 'Lampara', 'Panel LED circular embutir frio 24W 30 cm diametro', 'Interlec', '0'),
(1374, 'Lampara', 'Panel LED cuadrado fijo frio 18W', 'Idoler', '0'),
(1375, 'Lampara', 'Panel LED cuadrado fijo frio 18W 22,5x22,5 cm', 'NRV', '0'),
(1376, 'Lampara', 'Panel LED circular fijo frio 18W 21 cm diametro', 'NRV', '0'),
(1377, 'Lampara', 'Panel LED circular fijo calido 12W', 'Idoler', '0'),
(1378, 'Lampara', 'Panel LED circular fijo calido 12W', 'Idoler', '0'),
(1379, 'Lampara', 'Panel LED circular fijo calido 12W', 'NRV', '0'),
(1380, 'Lampara', 'Panel LED circular fijo calido 18W', 'NRV', '0'),
(1381, 'Lampara', 'Luz de Emergencia autonoma 6x40 60 SL2', 'Gamasonic', '0'),
(1382, 'Lampara', 'Luz de Emergencia autonoma 6x40 40 SL3', 'Gamasonic', '0'),
(1383, 'Lampara', 'Kit Luz de Emergencia EBM LED PL4', 'Gamasonic', '0'),
(1384, 'Lampara', 'Luz de Emergencia inter-30led', 'Interlec', '0'),
(1385, 'Lampara', 'Tubo LED 18W 60 cm ', 'SICA', '0'),
(1386, 'Caja metalica', 'Caja metalica 5x10', 'DAISA', '0'),
(1387, 'Caja metalica', 'Caja metalica 10x10', 'DAISA', '0'),
(1388, 'Caja metalica', 'Caja metalica 15x15', 'DAISA', '0'),
(1389, 'Caja metalica', 'Caja metalica 20x20', 'DAISA', '0'),
(1390, 'Caja metalica', 'Caja metalica 8x12', 'DAISA', '0'),
(1391, 'Termica', 'Termica 1 Polo', 'Schneider', '0'),
(1392, 'Termica', 'Termica 2 Polos', 'Schneider', '0'),
(1393, 'Termica', 'Termica 3 Polos', 'Schneider', '0'),
(1394, 'Termica', 'Termica 4 Polos', 'Schneider', '0'),
(1395, 'Disyuntor', 'Disyuntor 2 Polos', 'Schneider', '0'),
(1396, 'Disyuntor', 'Disyuntor 4 Polos', 'Schneider', '0'),
(1397, 'Tapa de luz', 'Tapa de luz S XXI 1 modulo', 'Cambre', '0'),
(1398, 'Tapa de luz', 'Tapa de luz S XXI 2 modulos', 'Cambre', '0'),
(1399, 'Tapa de luz', 'Tapa de luz S XXI 3 modulos', 'Cambre', '0'),
(1400, 'Tapa de luz', 'Tapa de luz S XXI 4 modulos', 'Cambre', '0'),
(1401, 'Tapa de luz', 'Tapa de luz S XXI ciega', 'Cambre', '0'),
(1402, 'Tapa de luz', 'Tapa de luz S XXI universal doble', 'Cambre', '0'),
(1403, 'Modulo tapa de luz', 'Modulo tapa de luz Toma Bi', '', '0'),
(1404, 'Modulo tapa de luz', 'Modulo tapa de luz Toma \"doble\" Bi', '', '0'),
(1405, 'Modulo tapa de luz', 'Modulo tapa de luz Tecla', '', '0'),
(1406, 'Modulo tapa de luz', 'Modulo tapa de luz Toma Telefono', '', '0'),
(1407, 'Modulo tapa de luz', 'Modulo tapa de luz Ciego', '', '0'),
(1408, 'Control de Potencia', 'q', 'q', '123'),
(1409, 'Control de Potencia', 'q', 'q', '123'),
(1410, '', 'q', '', '456'),
(1411, 'Accesorios', 'e', 'e', '789'),
(1412, 'Distribución eléctrica industr', 'ggv', 'fgb', '34'),
(1413, 'Accesorios', 'uj', 'ghj', '100');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `Mail` int(11) NOT NULL,
  `Contasenia` int(11) NOT NULL,
  `Nombre` varchar(15) NOT NULL,
  `Apellido` varchar(15) NOT NULL,
  `Tipo` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
