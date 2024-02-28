-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-02-2024 a las 17:29:30
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `nomina`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

CREATE TABLE `empleado` (
  `numeroidentificacione` varchar(255) NOT NULL,
  `nombre1` varchar(50) DEFAULT NULL,
  `apellido1` varchar(50) DEFAULT NULL,
  `estado_civile` varchar(20) DEFAULT NULL,
  `tipodoce` varchar(20) DEFAULT NULL,
  `correoe` varchar(255) DEFAULT NULL,
  `celulare` varchar(10) DEFAULT NULL,
  `generoe` varchar(20) DEFAULT NULL,
  `fecha_nacimiento` date DEFAULT NULL,
  `fechaexpdocu` date DEFAULT NULL,
  `nit` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `empleado`
--

INSERT INTO `empleado` (`numeroidentificacione`, `nombre1`, `apellido1`, `estado_civile`, `tipodoce`, `correoe`, `celulare`, `generoe`, `fecha_nacimiento`, `fechaexpdocu`, `nit`) VALUES
('1066348636', 'Vanessa', 'Garcia', 'Soltera', 'CC', 'vanessa08112g@gmail.com', '3012454621', 'Femenino', '0000-00-00', '0000-00-00', '121321231'),
('ffff', 'asdasd', 'fffffffff', 'fffffff', 'adasd', 'dfgdfg@fgd.dfo', '3012454620', 'sdfsd', '0000-00-00', '0000-00-00', '121321231');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entidad`
--

CREATE TABLE `entidad` (
  `nit` varchar(9) NOT NULL,
  `razon_social` varchar(100) DEFAULT NULL,
  `telefonoen` varchar(10) DEFAULT NULL,
  `correoen` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `entidad`
--

INSERT INTO `entidad` (`nit`, `razon_social`, `telefonoen`, `correoen`) VALUES
('121321231', 'sena', '31580740', 'sena.co');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `familiares`
--

CREATE TABLE `familiares` (
  `cod_familiar` varchar(10) NOT NULL,
  `parentezco` varchar(50) DEFAULT NULL,
  `documetof` varchar(10) DEFAULT NULL,
  `fechanacimientof` date DEFAULT NULL,
  `nombref1` varchar(50) DEFAULT NULL,
  `apellidof1` varchar(50) DEFAULT NULL,
  `numeroidentificacione` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD PRIMARY KEY (`numeroidentificacione`),
  ADD KEY `nit` (`nit`);

--
-- Indices de la tabla `entidad`
--
ALTER TABLE `entidad`
  ADD PRIMARY KEY (`nit`);

--
-- Indices de la tabla `familiares`
--
ALTER TABLE `familiares`
  ADD PRIMARY KEY (`cod_familiar`),
  ADD KEY `numeroidentificacione` (`numeroidentificacione`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD CONSTRAINT `empleado_ibfk_1` FOREIGN KEY (`nit`) REFERENCES `entidad` (`nit`);

--
-- Filtros para la tabla `familiares`
--
ALTER TABLE `familiares`
  ADD CONSTRAINT `familiares_ibfk_1` FOREIGN KEY (`numeroidentificacione`) REFERENCES `empleado` (`numeroidentificacione`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
