-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-11-2022 a las 21:12:42
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
-- Base de datos: `savetime`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id_c` int(10) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `num_telefono` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `domicilio` varchar(40) NOT NULL,
  `comentarios` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id_c`, `nombre`, `num_telefono`, `email`, `domicilio`, `comentarios`) VALUES
(4, 'Jorge Enrique Diaz Benitez', '6641100576', 'jorge@gmail.com', 'Tijuana', 'a');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE `empleados` (
  `id_e` int(11) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `num_telefono` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `domicilio` varchar(40) NOT NULL,
  `comentarios` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`id_e`, `nombre`, `num_telefono`, `email`, `domicilio`, `comentarios`) VALUES
(1, 'jorge', '664110057', 'jorge@gmail.com', 'Estado de Mexico', 'hola');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id_p` int(10) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `precio_costo` int(10) NOT NULL,
  `precio_venta` int(10) NOT NULL,
  `codigo_de_barras` varchar(20) NOT NULL,
  `cantidad` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id_p`, `nombre`, `precio_costo`, `precio_venta`, `codigo_de_barras`, `cantidad`) VALUES
(1, 'COCA COLA 600ML', 16, 18, '7506495002817', 16),
(4, 'CIEL 1.5L', 15, 17, '7501055302451', 12),
(5, 'SABRITAS ORIGINALES ', 15, 17, '6122274431428', 22),
(6, 'GEL ANTIBACTERIAL 300ML', 43, 50, '7501020607048', 3),
(7, 'NUTRI LECHE 1L', 17, 21, '7501000383320', 27),
(8, 'TUTSI POP ', 2, 5, '7506267905186', 40),
(9, ' PRINCIPE ', 15, 18, '7501438301095', 14),
(10, 'LALA 1L', 26, 28, '7501587000146', 11),
(11, 'CARLOS V', 8, 12, '7503007681508', 7),
(12, 'PAPEL KIRKLAND', 16, 18, '7508518670030', 34);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedores`
--

CREATE TABLE `proveedores` (
  `id_pr` int(10) NOT NULL,
  `nombre_proveedor` varchar(20) NOT NULL,
  `num_telefono` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `productos` varchar(50) NOT NULL,
  `dias_de_visita` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `proveedores`
--

INSERT INTO `proveedores` (`id_pr`, `nombre_proveedor`, `num_telefono`, `email`, `productos`, `dias_de_visita`) VALUES
(2, 'SABRITAS', '6642288739', 'sabritas@sabritas.mx.com', 'PAPAS Y CACAHUATES', 'LUNES Y SABADO'),
(4, 'GAMESA', '6630923821', 'gamesa@gamesa.mx.com', 'GALLETAS Y HARINA', 'MIERCOLES'),
(5, 'SARO', '6649324328', 'saro@saro.com', 'BEBIDAS, MEDICAMENTOS, ABARROTES Y DULCERIA', 'LUNES, MIERCOLES Y SABADO'),
(6, 'DANONE', '6644319251', 'danone@danone.mx.com', 'YOGURT Y GELATINAS', 'MIERCOLES Y DOMINGO'),
(7, 'LALA', '6649887432', 'lala@lala.mx.com', 'LECHE Y QUESOS', 'LUNES, MIERCOLES, VIERNES Y DOMINGO'),
(8, 'COCA COLA', '6638935774', 'coca_cola@coca.mx.com', 'REFRESCOS Y JUGOS', 'LUNES, MIERCOLES Y VIERNES'),
(9, 'TIA ROSA', '6639974082', 'tia_rosa@tiarosa.mx.com', 'PAN Y GALLETAS', 'LUNES Y JUEVES'),
(10, 'NESTLE', '6646993694', 'nestle@nestle.mx.com', 'CHOCOLATES, CAFES Y CEREALES', 'LUNES '),
(11, 'PEPSI', '6647729273', 'pepsi@pepsi.mx.com', 'REFRESCOS', 'MARTES Y SABADO'),
(12, 'BAJA', '6648784275', 'baja@baja.com', 'BEBIDAS, MEDICAMENTOS, ABARROTES Y DULCERIA', 'JUEVES');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `usuario` varchar(20) NOT NULL,
  `contraseña` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `nombre`, `usuario`, `contraseña`) VALUES
(1, 'Jorge Diaz', 'jorge', 'jorgediazlc5'),
(2, 'Arlette Torres Zapien', 'arlette', 'arlette');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id_c`);

--
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`id_e`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id_p`);

--
-- Indices de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  ADD PRIMARY KEY (`id_pr`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id_c` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `empleados`
--
ALTER TABLE `empleados`
  MODIFY `id_e` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id_p` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  MODIFY `id_pr` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
