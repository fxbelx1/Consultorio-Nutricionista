-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-11-2021 a las 01:10:21
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `nutrisystem`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `consulta`
--

CREATE TABLE `consulta` (
  `Peso` varchar(10) NOT NULL,
  `Estatura` varchar(10) NOT NULL,
  `IMC` varchar(10) NOT NULL,
  `Grasa` varchar(10) NOT NULL,
  `Masa_Mus` varchar(10) NOT NULL,
  `Kcal` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `info_paciente`
--

CREATE TABLE `info_paciente` (
  `Id` int(50) NOT NULL,
  `Nombre` varchar(20) NOT NULL,
  `Apellido_P` varchar(20) NOT NULL,
  `Apellido_M` varchar(20) NOT NULL,
  `Edad` int(10) NOT NULL,
  `Sexo` int(20) NOT NULL,
  `Dia` int(10) NOT NULL,
  `Mes` int(10) NOT NULL,
  `Año` int(10) NOT NULL,
  `Telefono` varchar(10) NOT NULL,
  `Correo` varchar(20) NOT NULL,
  `Enfermedades` varchar(50) NOT NULL,
  `Alergias` varchar(50) NOT NULL,
  `Disgustos` varchar(50) NOT NULL,
  `Act_Fisica` int(10) NOT NULL,
  `Tabaco` int(10) NOT NULL,
  `Alcohol` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nutrióloga`
--

CREATE TABLE `nutrióloga` (
  `Usuario` varchar(50) NOT NULL,
  `Contraseña` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `nutrióloga`
--

INSERT INTO `nutrióloga` (`Usuario`, `Contraseña`) VALUES
('Cameron', '2606');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
