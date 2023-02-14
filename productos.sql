-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 14-02-2023 a las 01:25:42
-- Versión del servidor: 5.7.36
-- Versión de PHP: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `muebleria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

DROP TABLE IF EXISTS `productos`;
CREATE TABLE IF NOT EXISTS `productos` (
  `idImagen` int(100) NOT NULL,
  `nombre` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `descripcion` varchar(100) COLLATE latin1_spanish_ci NOT NULL,
  `extra` varchar(100) COLLATE latin1_spanish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`idImagen`, `nombre`, `descripcion`, `extra`) VALUES
(1, 'Tulip', 'Tapiz\r\nado en azul.', '1'),
(2, 'Zen', 'Disponi\r\nble en madera de fresno.', '2'),
(3, 'Leaf\r\nCuadrada', 'Mesa cuadrada 4 patas.', '3'),
(4, 'Monet', 'Asien\r\nto y respaldo en polipropileno.', '4'),
(5, 'Circa', 'Dispo\r\nnible en tapiz morado.', '5'),
(6, 'Matisse', 'Est\r\nructura cromada en coldrolled.', '6'),
(7, 'Moon', 'Silla\r\nen polipropileno.', '7'),
(8, 'Globe', 'Silla\r\nen polipropileno color gris.', '8'),
(9, 'Volta', 'Silla\r\nestibable, base trineo.', '9'),
(10, 'Siluetta', 'E\r\nstructura cromada.', '10'),
(11, 'Boné', 'Silla\r\nen concha de madera. ', '11'),
(12, 'Nona', '4\r\npatas en madera natural. ', '12'),
(13, 'Decco', 'Sofá\r\nde 1 plaza.', '13'),
(14, 'Kenna', 'Sill\r\nón ejecutivo respaldo alto.', '14'),
(15, 'Trinity', 'Ba\r\nse de espuma y ergonómica.', '15');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
