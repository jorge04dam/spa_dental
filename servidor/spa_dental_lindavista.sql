-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-07-2022 a las 01:29:21
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `spa_dental_lindavista`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `brend`
--

CREATE TABLE `brend` (
  `id_brend` int(11) NOT NULL,
  `name_brend` varchar(15) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `brend`
--

INSERT INTO `brend` (`id_brend`, `name_brend`) VALUES
(1, 'Kirkland'),
(2, 'Ambiderm'),
(3, 'Generico');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargo`
--

CREATE TABLE `cargo` (
  `id` int(11) NOT NULL,
  `name` varchar(15) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `cargo`
--

INSERT INTO `cargo` (`id`, `name`) VALUES
(1, 'Administrador'),
(2, 'Recepción');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `input`
--

CREATE TABLE `input` (
  `id_input` int(11) NOT NULL,
  `name_input` varchar(15) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `input`
--

INSERT INTO `input` (`id_input`, `name_input`) VALUES
(1, 'Dental'),
(2, 'Limpieza'),
(3, 'Papeleria');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inventory`
--

CREATE TABLE `inventory` (
  `id_inventory` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `brend_id` int(11) NOT NULL,
  `provider_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `piece_quantity` int(11) NOT NULL,
  `unit_price` float NOT NULL,
  `total_price` float NOT NULL,
  `type_of_input_id` int(11) NOT NULL,
  `input_id` int(11) NOT NULL,
  `way_to_pay_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `inventory`
--

INSERT INTO `inventory` (`id_inventory`, `product_id`, `brend_id`, `provider_id`, `date`, `piece_quantity`, `unit_price`, `total_price`, `type_of_input_id`, `input_id`, `way_to_pay_id`) VALUES
(1, 1, 1, 1, '2022-07-19', 400, 2.5, 900, 1, 1, 1),
(2, 2, 3, 5, '2022-07-18', 100, 1.5, 150, 1, 1, 1),
(5, 1, 3, 3, '2022-07-18', 200, 0, 300, 1, 1, 1),
(6, 1, 1, 1, '2022-07-01', 10, 0, 50, 1, 1, 2),
(7, 2, 1, 2, '2022-07-05', 400, 0, 800, 2, 1, 1),
(8, 2, 1, 4, '2022-06-27', 1000, 0, 100, 1, 1, 1),
(9, 1, 2, 4, '2022-07-14', 100, 10, 145, 1, 1, 2),
(12, 2, 3, 3, '2022-07-14', 100, 5, 500, 1, 1, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inventory_eliminar`
--

CREATE TABLE `inventory_eliminar` (
  `id_inventory` int(11) NOT NULL,
  `producto_id` int(11) NOT NULL,
  `marca_id` int(11) NOT NULL,
  `proveedor_id` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `cantidad` int(11) NOT NULL,
  `precio` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `inventory_eliminar`
--

INSERT INTO `inventory_eliminar` (`id_inventory`, `producto_id`, `marca_id`, `proveedor_id`, `fecha`, `cantidad`, `precio`) VALUES
(1, 1, 1, 2, '2022-07-18', 20, 7.5),
(2, 2, 3, 1, '2022-07-17', 10, 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `name` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `nickname` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(32) COLLATE utf8_spanish_ci NOT NULL,
  `status` bit(1) NOT NULL,
  `cargo_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `login`
--

INSERT INTO `login` (`id`, `name`, `nickname`, `password`, `status`, `cargo_id`) VALUES
(1, 'jorge', 'jorgedam', '123', b'1', 1),
(2, 'ame', 'ame98', '123', b'0', 1),
(3, 'raul', 'rulo', '123', b'0', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marca`
--

CREATE TABLE `marca` (
  `id_marca` int(11) NOT NULL,
  `name_marca` varchar(15) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `marca`
--

INSERT INTO `marca` (`id_marca`, `name_marca`) VALUES
(1, 'Oreo'),
(2, 'Emperador'),
(3, 'Buñuelos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `patient_prueba`
--

CREATE TABLE `patient_prueba` (
  `id_patient` int(11) NOT NULL,
  `name` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `last_name` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `last_name2` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `gender` varchar(1) COLLATE utf8_spanish_ci NOT NULL,
  `age` int(11) NOT NULL,
  `phone` varchar(14) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `patient_prueba`
--

INSERT INTO `patient_prueba` (`id_patient`, `name`, `last_name`, `last_name2`, `gender`, `age`, `phone`) VALUES
(1, 'pedro', 'lopez', 'garcia', 'M', 20, '+52-5527361211'),
(2, 'luis', 'perez', 'rios', 'M', 26, '+52-7444412328'),
(3, 'jorge', 'deaquino', 'montes', 'M', 26, '+52-5527361211'),
(4, 'alonso', 'perez', 'lopez', 'M', 22, '+52-5512312312');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prodcutos`
--

CREATE TABLE `prodcutos` (
  `id_producto` int(11) NOT NULL,
  `nombre_producto` varchar(15) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `prodcutos`
--

INSERT INTO `prodcutos` (`id_producto`, `nombre_producto`) VALUES
(1, 'Galleta '),
(2, 'Barras'),
(3, 'Donas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `product`
--

CREATE TABLE `product` (
  `id_product` int(11) NOT NULL,
  `name_product` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `description` varchar(100) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `product`
--

INSERT INTO `product` (`id_product`, `name_product`, `description`) VALUES
(1, 'Guantes', 'Caja de guantes chicos'),
(2, 'Cubrebocas', 'Cubrebocas tricapa');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedores`
--

CREATE TABLE `proveedores` (
  `id_proveedores` int(11) NOT NULL,
  `nombre_proveedor` varchar(15) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `proveedores`
--

INSERT INTO `proveedores` (`id_proveedores`, `nombre_proveedor`) VALUES
(1, 'Bimbo'),
(2, 'Gamesa'),
(3, 'Cuetara');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `provider`
--

CREATE TABLE `provider` (
  `id_provider` int(11) NOT NULL,
  `name_provider` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `rfc` varchar(14) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `provider`
--

INSERT INTO `provider` (`id_provider`, `name_provider`, `rfc`) VALUES
(1, 'Costco', 'X1X11XX11'),
(2, 'Deposito Villa', 'DEPOS454'),
(3, 'Similares', 'XXX-13'),
(4, 'Dental moderna', 'XXX-13'),
(5, 'Depósito Xola', 'XXX-13'),
(6, 'Ana Maria Gonza', 'XXX-13');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `type_of_input`
--

CREATE TABLE `type_of_input` (
  `id_type_of_input` int(11) NOT NULL,
  `type_of_input` varchar(15) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `type_of_input`
--

INSERT INTO `type_of_input` (`id_type_of_input`, `type_of_input`) VALUES
(1, 'Consumible'),
(2, 'Instrumental');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `way_to_pay`
--

CREATE TABLE `way_to_pay` (
  `id_way_to_pay` int(11) NOT NULL,
  `way_to_pay` varchar(15) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `way_to_pay`
--

INSERT INTO `way_to_pay` (`id_way_to_pay`, `way_to_pay`) VALUES
(1, 'Efectivo'),
(2, 'Tarjeta Debito'),
(3, 'Transferencia'),
(4, 'Tarjeta de Cred');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `brend`
--
ALTER TABLE `brend`
  ADD PRIMARY KEY (`id_brend`);

--
-- Indices de la tabla `cargo`
--
ALTER TABLE `cargo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `input`
--
ALTER TABLE `input`
  ADD PRIMARY KEY (`id_input`);

--
-- Indices de la tabla `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`id_inventory`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `brend_id` (`brend_id`),
  ADD KEY `provider_id` (`provider_id`),
  ADD KEY `type_of_input_id` (`type_of_input_id`),
  ADD KEY `input_id` (`input_id`),
  ADD KEY `way_to_pay_id` (`way_to_pay_id`);

--
-- Indices de la tabla `inventory_eliminar`
--
ALTER TABLE `inventory_eliminar`
  ADD PRIMARY KEY (`id_inventory`),
  ADD KEY `producto_id` (`producto_id`),
  ADD KEY `proveedor_id` (`proveedor_id`),
  ADD KEY `marca_id` (`marca_id`);

--
-- Indices de la tabla `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cargo_id` (`cargo_id`);

--
-- Indices de la tabla `marca`
--
ALTER TABLE `marca`
  ADD PRIMARY KEY (`id_marca`);

--
-- Indices de la tabla `patient_prueba`
--
ALTER TABLE `patient_prueba`
  ADD PRIMARY KEY (`id_patient`);

--
-- Indices de la tabla `prodcutos`
--
ALTER TABLE `prodcutos`
  ADD PRIMARY KEY (`id_producto`);

--
-- Indices de la tabla `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id_product`);

--
-- Indices de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  ADD PRIMARY KEY (`id_proveedores`);

--
-- Indices de la tabla `provider`
--
ALTER TABLE `provider`
  ADD PRIMARY KEY (`id_provider`);

--
-- Indices de la tabla `type_of_input`
--
ALTER TABLE `type_of_input`
  ADD PRIMARY KEY (`id_type_of_input`);

--
-- Indices de la tabla `way_to_pay`
--
ALTER TABLE `way_to_pay`
  ADD PRIMARY KEY (`id_way_to_pay`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `brend`
--
ALTER TABLE `brend`
  MODIFY `id_brend` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `cargo`
--
ALTER TABLE `cargo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `input`
--
ALTER TABLE `input`
  MODIFY `id_input` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `inventory`
--
ALTER TABLE `inventory`
  MODIFY `id_inventory` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `inventory_eliminar`
--
ALTER TABLE `inventory_eliminar`
  MODIFY `id_inventory` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `marca`
--
ALTER TABLE `marca`
  MODIFY `id_marca` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `patient_prueba`
--
ALTER TABLE `patient_prueba`
  MODIFY `id_patient` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `prodcutos`
--
ALTER TABLE `prodcutos`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `product`
--
ALTER TABLE `product`
  MODIFY `id_product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  MODIFY `id_proveedores` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `provider`
--
ALTER TABLE `provider`
  MODIFY `id_provider` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `type_of_input`
--
ALTER TABLE `type_of_input`
  MODIFY `id_type_of_input` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `way_to_pay`
--
ALTER TABLE `way_to_pay`
  MODIFY `id_way_to_pay` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `inventory`
--
ALTER TABLE `inventory`
  ADD CONSTRAINT `inventory_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`id_product`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `inventory_ibfk_2` FOREIGN KEY (`brend_id`) REFERENCES `brend` (`id_brend`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `inventory_ibfk_3` FOREIGN KEY (`provider_id`) REFERENCES `provider` (`id_provider`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `inventory_ibfk_4` FOREIGN KEY (`type_of_input_id`) REFERENCES `type_of_input` (`id_type_of_input`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `inventory_ibfk_5` FOREIGN KEY (`way_to_pay_id`) REFERENCES `way_to_pay` (`id_way_to_pay`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `inventory_ibfk_6` FOREIGN KEY (`input_id`) REFERENCES `input` (`id_input`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `inventory_eliminar`
--
ALTER TABLE `inventory_eliminar`
  ADD CONSTRAINT `inventory_eliminar_ibfk_1` FOREIGN KEY (`producto_id`) REFERENCES `prodcutos` (`id_producto`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `inventory_eliminar_ibfk_2` FOREIGN KEY (`proveedor_id`) REFERENCES `proveedores` (`id_proveedores`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `inventory_eliminar_ibfk_3` FOREIGN KEY (`marca_id`) REFERENCES `marca` (`id_marca`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `login`
--
ALTER TABLE `login`
  ADD CONSTRAINT `login_ibfk_1` FOREIGN KEY (`cargo_id`) REFERENCES `cargo` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
