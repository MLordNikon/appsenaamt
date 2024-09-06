-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-09-2024 a las 19:09:04
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `aplicacionamt`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aprendices`
--

CREATE TABLE `aprendices` (
  `tipo` varchar(20) DEFAULT NULL,
  `numero` int(11) DEFAULT NULL,
  `nombres` varchar(100) DEFAULT NULL,
  `apellidos` varchar(100) DEFAULT NULL,
  `programa` varchar(100) DEFAULT NULL,
  `ficha` int(11) DEFAULT NULL,
  `correo` varchar(100) DEFAULT NULL,
  `celular` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `aprendices`
--

INSERT INTO `aprendices` (`tipo`, `numero`, `nombres`, `apellidos`, `programa`, `ficha`, `correo`, `celular`) VALUES
('CC', 16929410, 'JOSE MAURICIO', 'MONTOYA VILLA', 'Programación', 2911477, 'jmmontoyavilla@gmail.com', '3137314605');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
