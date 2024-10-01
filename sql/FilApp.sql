-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-10-2024 a las 15:00:56
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `filapp`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargos`
--

CREATE TABLE `cargos` (
  `idCargo` int(11) NOT NULL,
  `Tipo` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `cargos`
--

INSERT INTO `cargos` (`idCargo`, `Tipo`) VALUES
(1, 'Jefe'),
(2, 'Supervisor'),
(3, 'Empleado'),
(4, 'Logistica');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `ingreso` datetime NOT NULL,
  `inicioAtencion` datetime DEFAULT NULL,
  `finAtencion` datetime DEFAULT NULL,
  `usuarioDeAtencion` varchar(50) DEFAULT NULL,
  `enEspera` int(11) NOT NULL,
  `motivo` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `nombre`, `apellido`, `mail`, `ingreso`, `inicioAtencion`, `finAtencion`, `usuarioDeAtencion`, `enEspera`, `motivo`) VALUES
(1, 'Juan', 'Pérez', 'juan.perez@example.com', '2024-09-10 12:00:00', NULL, NULL, NULL, 1, 2),
(6, 'juanito', 'Gil', 'juan.perez@example.com', '2024-09-10 12:00:00', '2024-09-30 20:42:41', NULL, 'gcapucci', 3, 1),
(13, 'gaston', 'rodriguez', 'juan.perez@example.com', '2024-09-10 12:00:00', NULL, NULL, NULL, 0, 3),
(17, 'alberto', 'gomez', 'juan.perez@example.com', '2024-09-10 12:00:00', '2024-09-30 20:43:07', NULL, 'gcapucci', 3, 3),
(18, 'Juan', 'Pérez', 'juan.perez@example.com', '2024-09-10 12:00:00', NULL, NULL, NULL, 4, 2),
(19, 'Alberto', 'Gomez', 'alberto.gomez123@gmail.com', '2024-09-20 12:00:00', '2024-09-30 20:43:21', NULL, 'gcapucci', 3, 1),
(28, 'Lucas', 'Mansilla', 'Lucas.Mansilla@example.com', '2024-09-30 20:52:17', '2024-09-30 20:52:47', '2024-09-30 21:01:13', 'gcapucci', 3, 3),
(29, 'Lucas', 'Mansilla', 'Lucas.Mansilla@example.com', '2024-09-30 21:12:48', NULL, NULL, NULL, 0, 3),
(30, 'Lucas', 'Mansilla', 'Lucas.Mansilla@example.com', '2024-09-30 21:34:47', NULL, NULL, NULL, 0, 3),
(31, 'Lucas', 'Mansilla', 'Lucas.Mansilla@example.com', '2024-09-30 21:39:27', NULL, NULL, NULL, 0, 3),
(32, 'Lucas', 'Mansilla', 'Lucas.Mansilla@example.com', '2024-09-30 21:40:41', NULL, NULL, NULL, 0, 3),
(33, 'Lucas', 'Mansilla', 'Lucas.Mansilla@example.com', '2024-09-30 21:40:44', NULL, NULL, NULL, 0, 3),
(34, 'guido', 'Capucciati', 'guidoca_94@hotmail.com', '2024-09-30 22:01:49', NULL, NULL, NULL, 0, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE `empleados` (
  `id` int(11) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Apellido` varchar(50) NOT NULL,
  `Usuario` varchar(20) NOT NULL,
  `pass` varchar(15) NOT NULL,
  `idCargo` int(11) NOT NULL,
  `idVendedor` int(11) NOT NULL,
  `Mail` varchar(100) NOT NULL,
  `Domicilio` varchar(100) DEFAULT NULL,
  `Localidad` varchar(100) DEFAULT NULL,
  `UltimoLogin` date DEFAULT NULL,
  `UserCreador` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`id`, `Nombre`, `Apellido`, `Usuario`, `pass`, `idCargo`, `idVendedor`, `Mail`, `Domicilio`, `Localidad`, `UltimoLogin`, `UserCreador`) VALUES
(1, 'Guido', 'Capucciati', 'gcapucci', '', 3, 500876, 'guido.capucciati@filapp.com', '9 de julio', 'Gutierrez', '0000-00-00', NULL),
(2, 'Lucas', 'Mansilla', 'lmansi', '', 4, 400520, 'lucas.mansilla@filapp.com', '25 de mayo', 'Longchams', '0000-00-00', NULL),
(3, 'Gaston', 'Mansilla', 'gmansi', '', 2, 500423, 'gaston.mansilla@filapp.com', 'Cochabamba 1234', 'Lanus', '0000-00-00', NULL),
(4, 'Rodrigo', 'Vera', 'rvera', '', 1, 100412, 'rodrigo.vera@filapp.com', 'calle falsa 1234', 'Sprinfild', '0000-00-00', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `motivos`
--

CREATE TABLE `motivos` (
  `id` int(11) NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `descripccion` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `motivos`
--

INSERT INTO `motivos` (`id`, `titulo`, `descripccion`) VALUES
(1, 'Compras', ''),
(2, 'Asesoramiento', ''),
(3, 'Post Venta', ''),
(4, 'Retiro de Producto', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `resenas`
--

CREATE TABLE `resenas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `calificacion` int(11) NOT NULL,
  `obs` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipoespera`
--

CREATE TABLE `tipoespera` (
  `id` int(11) NOT NULL,
  `Tipo` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cargos`
--
ALTER TABLE `cargos`
  ADD PRIMARY KEY (`idCargo`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `idCargo` (`idCargo`);

--
-- Indices de la tabla `resenas`
--
ALTER TABLE `resenas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipoespera`
--
ALTER TABLE `tipoespera`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cargos`
--
ALTER TABLE `cargos`
  MODIFY `idCargo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT de la tabla `empleados`
--
ALTER TABLE `empleados`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `resenas`
--
ALTER TABLE `resenas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tipoespera`
--
ALTER TABLE `tipoespera`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD CONSTRAINT `empleados_ibfk_1` FOREIGN KEY (`idCargo`) REFERENCES `cargos` (`idCargo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
