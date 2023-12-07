-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-12-2023 a las 02:06:37
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tiendajuegos1`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `boleta`
--

CREATE TABLE `boleta` (
  `id` int(11) NOT NULL,
  `monto` int(11) NOT NULL,
  `id_pedido_head` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id`, `nombre`) VALUES
(1, 'Acción'),
(2, 'Aventura'),
(3, 'Shooter'),
(4, 'Sandbox'),
(5, 'Deportes'),
(6, 'Battle Royale'),
(7, 'RPG');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `telefono` int(11) NOT NULL,
  `historial_compras` varchar(255) DEFAULT NULL,
  `dni` int(11) NOT NULL,
  `carnet_extranjeria` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`id`, `nombre`, `telefono`, `historial_compras`, `dni`, `carnet_extranjeria`) VALUES
(10, 'Nikolas Zuñiga', 993623517, NULL, 72865491, NULL),
(11, 'Pepe Puentes', 85558555, NULL, 21121321, 0),
(12, 'Flac', 121212, NULL, 1212121, 0),
(13, '2222', 131, NULL, 312313, 0),
(14, '2222', 131, NULL, 312313, 0),
(15, 'dwdw', 444, NULL, 4444, 0),
(16, 'dwdw', 444, NULL, 4444, 0),
(17, '2', 1, NULL, 2, 0),
(18, 'e2', 121, NULL, 12211, 0),
(19, 'ee', 1212, NULL, 1221, 0),
(20, 'ee', 1212, NULL, 1221, 0),
(21, 'Franco', 121212, NULL, 12121212, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `desarrollador`
--

CREATE TABLE `desarrollador` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `desarrollador`
--

INSERT INTO `desarrollador` (`id`, `nombre`) VALUES
(1, 'CD Projekt Red'),
(2, 'Nintendo'),
(3, 'Ubisoft'),
(4, 'EA Sports'),
(5, 'Blizzard Entertainment'),
(6, 'Mojang'),
(7, 'Rockstar Games'),
(8, 'Psyonix'),
(9, 'Epic Games'),
(10, 'Microsoft Studios');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_boleta`
--

CREATE TABLE `detalle_boleta` (
  `item` int(11) NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `id_juego` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `devolucion`
--

CREATE TABLE `devolucion` (
  `id` int(11) NOT NULL,
  `motivo` varchar(255) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `numero_boleta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `encargado`
--

CREATE TABLE `encargado` (
  `id_trabajador` int(11) NOT NULL,
  `id_tienda` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `encargado`
--

INSERT INTO `encargado` (`id_trabajador`, `id_tienda`) VALUES
(1, 1),
(16, 2),
(17, 3),
(18, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `juego`
--

CREATE TABLE `juego` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `precio` int(11) NOT NULL,
  `clasificacion` varchar(255) NOT NULL,
  `img_link` varchar(3000) NOT NULL,
  `id_desarrollador` int(11) NOT NULL,
  `id_categoria` int(11) NOT NULL,
  `id_plataforma` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `juego`
--

INSERT INTO `juego` (`id`, `nombre`, `precio`, `clasificacion`, `img_link`, `id_desarrollador`, `id_categoria`, `id_plataforma`) VALUES
(1, 'The Witcher 3: Wild Hunt', 90, 'Mature', 'https://blog.latam.playstation.com/tachyon/sites/3/2022/12/b056814c7a673ed50a5a5bf2923ae64825b76257.jpg?resize=1088%2C612&crop_strategy=smart&zoom=1.5', 1, 2, 1),
(2, 'Minecraft', 999, 'Everyone', 'https://store-images.s-microsoft.com/image/apps.608.13850085746326678.a9b1e0db-29d0-40f3-a86c-2155353d053c.bc981608-3fa4-4929-82ff-b162b8788784?q=90&w=480&h=270', 2, 4, 3),
(3, 'Fortnite', 100, 'Teen', 'https://cdn2.unrealengine.com/download-og-social-1920x1080-7f9830781b04.jpg', 9, 6, 1),
(4, 'Grand Theft Auto V', 2499, 'Mature', 'https://assets2.ignimgs.com/2014/11/17/gta-v-bigjpg-e94b8d1280wjpg-e14d62_160w.jpg?width=1280', 4, 1, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `metodo_pago`
--

CREATE TABLE `metodo_pago` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `numero_boleta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pddo_body`
--

CREATE TABLE `pddo_body` (
  `item` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `id_juego` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pddo_head`
--

CREATE TABLE `pddo_head` (
  `numero` int(11) NOT NULL,
  `fecha` datetime NOT NULL,
  `id_cliente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `plataforma`
--

CREATE TABLE `plataforma` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `plataforma`
--

INSERT INTO `plataforma` (`id`, `nombre`) VALUES
(1, 'PC'),
(2, 'PlayStation 4'),
(3, 'Nintendo Switch'),
(4, 'Android'),
(5, 'XBOX ONE');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `resenas`
--

CREATE TABLE `resenas` (
  `id` int(11) NOT NULL,
  `estrella` int(11) NOT NULL,
  `comentario` varchar(255) NOT NULL,
  `id_juego` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `stock`
--

CREATE TABLE `stock` (
  `id` int(11) NOT NULL,
  `cantidad` varchar(255) NOT NULL,
  `id_tienda` int(11) NOT NULL,
  `id_juego` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `stock`
--

INSERT INTO `stock` (`id`, `cantidad`, `id_tienda`, `id_juego`) VALUES
(1, '20', 1, 1),
(2, '15', 1, 2),
(3, '40', 1, 3),
(4, '15', 2, 4),
(9, '23', 3, 2),
(10, '21', 4, 1),
(11, '14', 4, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tienda`
--

CREATE TABLE `tienda` (
  `id` int(11) NOT NULL,
  `ciudad` varchar(255) NOT NULL,
  `direccion` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tienda`
--

INSERT INTO `tienda` (`id`, `ciudad`, `direccion`) VALUES
(1, 'Arequipa', 'Av. Ejercito 1001'),
(2, 'Lima', 'Av. la Marina 2000'),
(3, 'Tacna', 'Av. Augusto B Leguia '),
(4, 'Cusco', 'Av. Collasuyo 2964');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trabajador`
--

CREATE TABLE `trabajador` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `salario` int(11) NOT NULL,
  `telefono` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `trabajador`
--

INSERT INTO `trabajador` (`id`, `nombre`, `salario`, `telefono`) VALUES
(1, 'Nikolas Zuñiga', 1500, 993623517),
(2, 'Jean Marc Nadeau', 1500, 962864411),
(3, 'Sergio Sirena', 1050, 983434477),
(4, 'Walter Valdivia', 1500, 991869615),
(5, 'Pepe Puentes', 1350, 994321432),
(6, 'Juan Pérez', 1560, 926587432),
(7, 'María Gómez', 1060, 917654321),
(8, 'Luis Rodríguez', 1500, 932145678),
(9, 'Ana García', 1070, 924876509),
(10, 'Pedro Sánchez', 1100, 931234567),
(11, 'Laura Martínez', 1200, 926543218),
(12, 'Carlos López', 1590, 932187654),
(13, 'Isabel Torres', 1150, 914567890),
(14, 'Javier Ruiz', 1480, 927654321),
(15, 'Elena González', 1300, 931234567),
(16, 'Sofía López', 1130, 917890123),
(17, 'Alejandro Ruiz', 1300, 923456789),
(18, 'Carmen Martínez', 1420, 926789012),
(19, 'Raúl Fernández', 1550, 931789012);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vendedor`
--

CREATE TABLE `vendedor` (
  `id_trabajador` int(11) NOT NULL,
  `historial_ventas` varchar(255) NOT NULL,
  `id_tienda` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `vendedor`
--

INSERT INTO `vendedor` (`id_trabajador`, `historial_ventas`, `id_tienda`) VALUES
(2, '2 venta(s)', 1),
(3, 'NINGUNO', 1),
(4, '1 venta(s)', 1),
(5, '45 venta(s)', 2),
(6, '14 venta(s)', 2),
(7, '23 venta(s)', 2),
(8, '8 venta(s)', 3),
(9, '1 venta(s)', 3),
(10, '25 venta(s)', 3),
(11, '13 venta(s)', 4),
(12, '8 venta(s)', 4);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `boleta`
--
ALTER TABLE `boleta`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_pedido_head` (`id_pedido_head`);

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `desarrollador`
--
ALTER TABLE `desarrollador`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `detalle_boleta`
--
ALTER TABLE `detalle_boleta`
  ADD PRIMARY KEY (`item`);

--
-- Indices de la tabla `devolucion`
--
ALTER TABLE `devolucion`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_cliente` (`id_cliente`),
  ADD KEY `numero_boleta` (`numero_boleta`);

--
-- Indices de la tabla `encargado`
--
ALTER TABLE `encargado`
  ADD PRIMARY KEY (`id_trabajador`),
  ADD KEY `id_tienda` (`id_tienda`);

--
-- Indices de la tabla `juego`
--
ALTER TABLE `juego`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_desarrollador` (`id_desarrollador`),
  ADD KEY `id_categoria` (`id_categoria`),
  ADD KEY `id_plataforma` (`id_plataforma`);

--
-- Indices de la tabla `metodo_pago`
--
ALTER TABLE `metodo_pago`
  ADD PRIMARY KEY (`id`),
  ADD KEY `numero_boleta` (`numero_boleta`);

--
-- Indices de la tabla `pddo_body`
--
ALTER TABLE `pddo_body`
  ADD PRIMARY KEY (`item`);

--
-- Indices de la tabla `pddo_head`
--
ALTER TABLE `pddo_head`
  ADD PRIMARY KEY (`numero`),
  ADD KEY `id_cliente` (`id_cliente`);

--
-- Indices de la tabla `plataforma`
--
ALTER TABLE `plataforma`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `resenas`
--
ALTER TABLE `resenas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_juego` (`id_juego`),
  ADD KEY `id_cliente` (`id_cliente`);

--
-- Indices de la tabla `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_tienda` (`id_tienda`),
  ADD KEY `id_juego` (`id_juego`);

--
-- Indices de la tabla `tienda`
--
ALTER TABLE `tienda`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `trabajador`
--
ALTER TABLE `trabajador`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `vendedor`
--
ALTER TABLE `vendedor`
  ADD PRIMARY KEY (`id_trabajador`),
  ADD KEY `id_tienda` (`id_tienda`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `pddo_head`
--
ALTER TABLE `pddo_head`
  MODIFY `numero` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `stock`
--
ALTER TABLE `stock`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `trabajador`
--
ALTER TABLE `trabajador`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `boleta`
--
ALTER TABLE `boleta`
  ADD CONSTRAINT `boleta_ibfk_1` FOREIGN KEY (`id_pedido_head`) REFERENCES `pddo_head` (`numero`),
  ADD CONSTRAINT `boleta_ibfk_2` FOREIGN KEY (`id_pedido_head`) REFERENCES `pddo_head` (`numero`) ON DELETE CASCADE;

--
-- Filtros para la tabla `detalle_boleta`
--
ALTER TABLE `detalle_boleta`
  ADD CONSTRAINT `detalle_boleta_ibfk_1` FOREIGN KEY (`item`) REFERENCES `boleta` (`id`),
  ADD CONSTRAINT `detalle_boleta_ibfk_2` FOREIGN KEY (`item`) REFERENCES `boleta` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `devolucion`
--
ALTER TABLE `devolucion`
  ADD CONSTRAINT `devolucion_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`id`),
  ADD CONSTRAINT `devolucion_ibfk_2` FOREIGN KEY (`numero_boleta`) REFERENCES `boleta` (`id`),
  ADD CONSTRAINT `devolucion_ibfk_3` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `devolucion_ibfk_4` FOREIGN KEY (`numero_boleta`) REFERENCES `boleta` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `encargado`
--
ALTER TABLE `encargado`
  ADD CONSTRAINT `encargado_ibfk_1` FOREIGN KEY (`id_trabajador`) REFERENCES `trabajador` (`id`),
  ADD CONSTRAINT `encargado_ibfk_2` FOREIGN KEY (`id_tienda`) REFERENCES `tienda` (`id`),
  ADD CONSTRAINT `encargado_ibfk_3` FOREIGN KEY (`id_trabajador`) REFERENCES `trabajador` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `encargado_ibfk_4` FOREIGN KEY (`id_tienda`) REFERENCES `tienda` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `encargado_ibfk_5` FOREIGN KEY (`id_trabajador`) REFERENCES `trabajador` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `encargado_ibfk_6` FOREIGN KEY (`id_tienda`) REFERENCES `tienda` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `juego`
--
ALTER TABLE `juego`
  ADD CONSTRAINT `juego_ibfk_1` FOREIGN KEY (`id_desarrollador`) REFERENCES `desarrollador` (`id`),
  ADD CONSTRAINT `juego_ibfk_2` FOREIGN KEY (`id_categoria`) REFERENCES `categoria` (`id`),
  ADD CONSTRAINT `juego_ibfk_3` FOREIGN KEY (`id_plataforma`) REFERENCES `plataforma` (`id`),
  ADD CONSTRAINT `juego_ibfk_4` FOREIGN KEY (`id_desarrollador`) REFERENCES `desarrollador` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `juego_ibfk_5` FOREIGN KEY (`id_desarrollador`) REFERENCES `desarrollador` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `juego_ibfk_6` FOREIGN KEY (`id_categoria`) REFERENCES `categoria` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `juego_ibfk_7` FOREIGN KEY (`id_plataforma`) REFERENCES `plataforma` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `metodo_pago`
--
ALTER TABLE `metodo_pago`
  ADD CONSTRAINT `metodo_pago_ibfk_1` FOREIGN KEY (`numero_boleta`) REFERENCES `boleta` (`id`),
  ADD CONSTRAINT `metodo_pago_ibfk_2` FOREIGN KEY (`numero_boleta`) REFERENCES `boleta` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `pddo_body`
--
ALTER TABLE `pddo_body`
  ADD CONSTRAINT `pddo_body_ibfk_1` FOREIGN KEY (`item`) REFERENCES `pddo_head` (`numero`),
  ADD CONSTRAINT `pddo_body_ibfk_2` FOREIGN KEY (`item`) REFERENCES `pddo_head` (`numero`) ON DELETE CASCADE;

--
-- Filtros para la tabla `pddo_head`
--
ALTER TABLE `pddo_head`
  ADD CONSTRAINT `pddo_head_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`id`);

--
-- Filtros para la tabla `resenas`
--
ALTER TABLE `resenas`
  ADD CONSTRAINT `resenas_ibfk_1` FOREIGN KEY (`id_juego`) REFERENCES `juego` (`id`),
  ADD CONSTRAINT `resenas_ibfk_2` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`id`),
  ADD CONSTRAINT `resenas_ibfk_3` FOREIGN KEY (`id_juego`) REFERENCES `juego` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `resenas_ibfk_4` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `resenas_ibfk_5` FOREIGN KEY (`id_juego`) REFERENCES `juego` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `resenas_ibfk_6` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `stock`
--
ALTER TABLE `stock`
  ADD CONSTRAINT `stock_ibfk_1` FOREIGN KEY (`id_tienda`) REFERENCES `tienda` (`id`),
  ADD CONSTRAINT `stock_ibfk_2` FOREIGN KEY (`id_juego`) REFERENCES `juego` (`id`),
  ADD CONSTRAINT `stock_ibfk_3` FOREIGN KEY (`id_tienda`) REFERENCES `tienda` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `stock_ibfk_4` FOREIGN KEY (`id_juego`) REFERENCES `juego` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `stock_ibfk_5` FOREIGN KEY (`id_tienda`) REFERENCES `tienda` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `stock_ibfk_6` FOREIGN KEY (`id_juego`) REFERENCES `juego` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `vendedor`
--
ALTER TABLE `vendedor`
  ADD CONSTRAINT `vendedor_ibfk_1` FOREIGN KEY (`id_trabajador`) REFERENCES `trabajador` (`id`),
  ADD CONSTRAINT `vendedor_ibfk_2` FOREIGN KEY (`id_tienda`) REFERENCES `tienda` (`id`),
  ADD CONSTRAINT `vendedor_ibfk_3` FOREIGN KEY (`id_trabajador`) REFERENCES `trabajador` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `vendedor_ibfk_4` FOREIGN KEY (`id_tienda`) REFERENCES `tienda` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `vendedor_ibfk_5` FOREIGN KEY (`id_trabajador`) REFERENCES `trabajador` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `vendedor_ibfk_6` FOREIGN KEY (`id_tienda`) REFERENCES `tienda` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
