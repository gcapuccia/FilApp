-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 10.0.10.18:3306
-- Tiempo de generación: 05-12-2024 a las 23:35:05
-- Versión del servidor: 10.6.18-MariaDB
-- Versión de PHP: 8.1.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `gwpteilw_filapp`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargos`
--

CREATE TABLE `cargos` (
  `idCargo` int(11) NOT NULL,
  `Tipo` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

--
-- Volcado de datos para la tabla `cargos`
--

INSERT INTO `cargos` (`idCargo`, `Tipo`) VALUES
(1, 'Supervisor'),
(2, 'Empleado'),
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
  `motivo` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `nombre`, `apellido`, `mail`, `ingreso`, `inicioAtencion`, `finAtencion`, `usuarioDeAtencion`, `enEspera`, `motivo`) VALUES
(73, 'Maximilianoa', 'Sanchezaaa', 'maaaaxi@gmail.com', '2024-11-28 22:00:48', '2024-11-28 22:00:53', '2024-11-28 22:02:34', 'lmansi', 3, 'Compras'),
(76, 'hector', 'Pecci', 'hector.pe@gmail.com', '2024-11-29 11:41:17', '2024-11-29 11:42:29', '2024-11-29 11:42:33', 'lmansi', 3, 'Compras'),
(78, 'rodolfo', 'quiroz', 'rodo.qui@gmail.com', '2024-11-29 17:23:47', '2024-11-29 17:24:13', '2024-11-29 17:24:34', 'lmansi', 3, 'Post Venta'),
(79, 'valen', 'Romero', 'Valen.R@gmail.com', '2024-11-29 17:52:42', '2024-11-29 19:34:01', '2024-11-29 19:34:18', 'rvera', 3, 'Compras'),
(80, 'Paula', 'Alvarez', 'paualvarez@gmail.com', '2024-11-29 17:59:20', '2024-11-29 19:34:33', '2024-11-29 19:34:38', 'rvera', 3, 'Compras'),
(81, 'Esteban', 'Galperin', 'esteban@gmail.com', '2024-11-29 17:59:51', '2024-11-29 19:34:39', '2024-11-29 19:34:40', 'rvera', 3, 'Post Venta'),
(82, 'Rodrigo', 'Vera', 'rodrigovera@gmail.com', '2024-11-29 19:23:00', '2024-11-29 19:34:43', '2024-11-29 19:34:44', 'rvera', 3, 'Compras'),
(83, 'Lucas', 'Mansilla', 'ejemplo@gmail.com', '2024-11-29 19:23:57', '2024-11-29 19:34:46', '2024-11-29 19:34:48', 'rvera', 3, 'Compras'),
(84, 'ignacio', 'marcovecchio ', 'nacho_marcovecchio@hotmail.com', '2024-11-29 19:23:58', '2024-11-29 19:34:55', '2024-11-29 19:34:56', 'rvera', 3, 'Asesoramiento'),
(85, 'Nacho', 'Mont', 'test@gmail.com', '2024-11-29 19:24:28', '2024-11-29 19:34:58', '2024-11-29 19:34:59', 'rvera', 3, 'Retiro de Producto'),
(86, 'Sebastian', 'Pepe', 'pepe@gmail.com', '2024-11-29 19:24:46', '2024-11-29 19:35:00', '2024-11-29 19:35:00', 'rvera', 3, 'Asesoramiento'),
(87, 'Victor', 'Cordero', 'cordero.victor@gmail.com', '2024-11-29 19:24:47', '2024-11-29 19:35:01', '2024-11-29 19:35:02', 'rvera', 3, 'Asesoramiento'),
(88, 'Rodrigo', 'Miguel', 'example123@hotmail.com', '2024-11-29 19:25:39', '2024-11-29 19:35:02', '2024-11-29 19:35:03', 'rvera', 3, 'Asesoramiento'),
(89, 'guido', 'capucciati', 'guido@gmail.com', '2024-11-29 19:28:18', '2024-11-29 19:35:04', '2024-11-29 19:35:05', 'rvera', 3, 'Asesoramiento');

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
  `fotoPerfil` varchar(50) NOT NULL,
  `UltimoLogin` date DEFAULT NULL,
  `UserCreador` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`id`, `Nombre`, `Apellido`, `Usuario`, `pass`, `idCargo`, `idVendedor`, `Mail`, `fotoPerfil`, `UltimoLogin`, `UserCreador`) VALUES
(1, 'Guido', 'Capucciati', 'gcapucci', 'admin123', 1, 500876, 'guido.capucciati@filapp.com', 'avatar-male.png', '0000-00-00', NULL),
(2, 'Lucas', 'Mansilla', 'lmansi', 'admin123', 2, 400520, 'lucas.mansilla@filapp.com', 'avatar-male2.png', '0000-00-00', NULL),
(3, 'Gaston', 'Mansilla', 'gmansi', 'admin123', 1, 500423, 'gaston.mansilla@filapp.com', 'avatar-male.png', '0000-00-00', NULL),
(4, 'Rodrigo', 'Vera', 'rvera', 'admin123', 2, 100412, 'rodrigo.vera@filapp.com', 'avatar-male2.png', '0000-00-00', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `motivos`
--

CREATE TABLE `motivos` (
  `id` int(11) NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `habilitado` int(11) DEFAULT NULL,
  `descripccion` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

--
-- Volcado de datos para la tabla `motivos`
--

INSERT INTO `motivos` (`id`, `titulo`, `habilitado`, `descripccion`) VALUES
(1, 'Compras Mayoristas', NULL, ''),
(2, 'Asesoramiento', NULL, ''),
(3, 'Post Venta', NULL, ''),
(4, 'Retiro de Producto', NULL, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `resenas`
--

CREATE TABLE `resenas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `calificacion` int(11) NOT NULL,
  `obs` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipoespera`
--

CREATE TABLE `tipoespera` (
  `id` int(11) NOT NULL,
  `Tipo` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

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
  ADD KEY `empleados_ibfk_1` (`idCargo`);

--
-- Indices de la tabla `motivos`
--
ALTER TABLE `motivos`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT de la tabla `empleados`
--
ALTER TABLE `empleados`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `motivos`
--
ALTER TABLE `motivos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
