-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:8889
-- Tiempo de generación: 04-09-2019 a las 00:31:14
-- Versión del servidor: 5.7.23
-- Versión de PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `Palta`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compras`
--

CREATE TABLE `compras` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `medioDePago` varchar(11) NOT NULL,
  `cantItems` int(11) NOT NULL,
  `monto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compras_productos`
--

CREATE TABLE `compras_productos` (
  `id_compras` int(11) NOT NULL,
  `id_productos` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `cantidad` int(150) NOT NULL,
  `id_categorias` varchar(11) NOT NULL,
  `precio` int(11) NOT NULL,
  `stock` int(11) NOT NULL,
  `imagen` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `cantidad`, `id_categorias`, `precio`, `stock`, `imagen`) VALUES
(1, 'Limon', 0, 'fruta', 20, 30, 'product-img-5d68654559477.jpg'),
(2, 'Banana', 0, 'fruta', 30, 40, 'product-img-5d6867aaac80f.jpg'),
(3, 'Batata', 0, 'verdura', 20, 60, 'product-img-5d6867c210fbf.jpg'),
(4, 'Cebolla', 0, 'fruta', 30, 30, 'product-img-5d6867e64792a.jpg'),
(5, 'Huevos', 0, 'almacen', 150, 30, 'product-img-5d6867fe26f52.jpg'),
(6, 'Lechuga', 0, 'verdura', 90, 30, 'product-img-5d68681a93e26.jpg'),
(7, 'Mandarina', 0, 'fruta', 20, 30, 'product-img-5d686835c1039.jpg'),
(8, 'Manzana', 0, 'fruta', 60, 30, 'product-img-5d6868443d381.jpg'),
(9, 'Morron', 0, 'verdura', 120, 30, 'product-img-5d68685398d1a.jpg'),
(10, 'Naranja', 0, 'fruta', 20, 30, 'product-img-5d68685ec21fe.jpg'),
(11, 'Papa', 0, 'verdura', 15, 30, 'product-img-5d68686b7ddd6.jpg'),
(12, 'Pera', 0, 'fruta', 50, 30, 'product-img-5d68687d1a685.jpg'),
(13, 'Tomate', 0, 'verdura', 70, 30, 'product-img-5d6868909ea29.jpg'),
(14, 'Zanahoria', 0, 'verdura', 60, 30, 'product-img-5d6868a032daa.jpg'),
(15, 'Zapallo', 0, 'verdura', 70, 30, 'product-img-5d6868af9baa6.jpg'),
(16, 'Zucchini', 0, 'verdura', 40, 30, 'product-img-5d6868d46bc29.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(11) NOT NULL,
  `apellido` varchar(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `localidad` varchar(100) NOT NULL,
  `celular` int(11) NOT NULL,
  `pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `apellido`, `email`, `direccion`, `localidad`, `celular`, `pass`) VALUES
(72, 'Victoria', 'Guiñazu', 'vicotest1@mail.com', 'Juan Pedro Echeverría 850', 'General Pacheco', 21627903, '$2y$10$.VGb8EBivGFRZW1MO14Fc.EP5NE/5yi3CHYJykfMuRv8QvVuxujfi'),
(73, 'Nazareno', 'Rouco', 'naza@gmail.com', 'jujuy 215', 'pacheco', 1521627381, '$2y$10$9Slg5ozOaFJDW9rseuhs7.Jk2RdMkR4A2JYahiHeRtXqOp8kNOa/y'),
(74, 'Victoria', 'Guiñazu', 'vikie@hotmail.com', 'Juan Pedro Echeverría 850', 'General Pacheco', 21627903, '$2y$10$7TmlXbjYKE2kp0puOSWfiu/EWl174CAjaJ3AOf.gdb8waCbSQYGWK'),
(75, 'Maria', 'Perez', 'mariaperez@mail.com', 'independencia 87', 'pacheco', 47153822, '$2y$10$4T9V59EHSbUki1Qa5RHi..cIxZCvStGCPgvgajvH92pMKEmSBKS2C'),
(76, 'Victoria', 'Guiñazu', 'vicki@123.com', 'Juan Pedro Echeverría 850', 'General Pacheco', 21627903, '$2y$10$LKYV5qZeN3Wcjo61DXGbHee1KuMKAEpHYK0zNJEpOAXTw17IIvOOa');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `compras`
--
ALTER TABLE `compras`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
