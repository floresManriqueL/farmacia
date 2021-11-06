-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-11-2021 a las 00:03:47
-- Versión del servidor: 10.1.34-MariaDB
-- Versión de PHP: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `farmacia`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargo`
--

CREATE TABLE `cargo` (
  `idcargo` int(11) NOT NULL,
  `codigo` varchar(50) NOT NULL,
  `nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cargo`
--

INSERT INTO `cargo` (`idcargo`, `codigo`, `nombre`) VALUES
(1, 'FH4657H', 'vendedor');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `idcategoria` int(11) NOT NULL,
  `codigo` varchar(50) NOT NULL,
  `nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`idcategoria`, `codigo`, `nombre`) VALUES
(2, 'ER561', 'Erik'),
(3, 'RO188', 'rodrigo'),
(4, 'NU548', 'nueva'),
(5, 'AA786', 'aaaaa222'),
(6, 'AA786', 'aaaaa22'),
(7, 'PA117', 'panpan111'),
(9, 'SD431', 'sdfsdf'),
(10, 'FS613', 'fsdfsd'),
(11, 'TR375', 'tryrtyryry'),
(12, 'AS783', 'asdsadsad'),
(13, '  182', '     ddddddd    ccccccccc');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `idcliente` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `telefono` varchar(10) NOT NULL,
  `direccion` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compra`
--

CREATE TABLE `compra` (
  `idcompra` int(11) NOT NULL,
  `fecha-compra` date NOT NULL,
  `tipo-compra` varchar(50) NOT NULL,
  `codigo-factura` varchar(50) NOT NULL,
  `idproveedor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detallecompra`
--

CREATE TABLE `detallecompra` (
  `iddetalle` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `fecha-vence` date NOT NULL,
  `precio-compra` double NOT NULL,
  `lote` varchar(50) NOT NULL,
  `idproducto` int(11) NOT NULL,
  `idcompra` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalleventa`
--

CREATE TABLE `detalleventa` (
  `iddetalle` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `precioventa` double NOT NULL,
  `idproducto` int(11) NOT NULL,
  `idventa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

CREATE TABLE `empleado` (
  `idempleado` int(11) NOT NULL,
  `imagen` varchar(200) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `estado_civil` varchar(50) NOT NULL,
  `nit` varchar(20) NOT NULL,
  `dui` varchar(15) NOT NULL,
  `salario` double NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `genero` varchar(50) NOT NULL,
  `fecha_naci` date NOT NULL,
  `correo` varchar(50) NOT NULL,
  `telefono` varchar(10) NOT NULL,
  `idfarmacia` int(11) NOT NULL,
  `idcargo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `empleado`
--

INSERT INTO `empleado` (`idempleado`, `imagen`, `nombre`, `apellido`, `estado_civil`, `nit`, `dui`, `salario`, `direccion`, `genero`, `fecha_naci`, `correo`, `telefono`, `idfarmacia`, `idcargo`) VALUES
(1, 'img0b014df0868e04fe685b6a3fdf3f40f5.jpg\r\n', 'vendedor', 'flores', 'soltero', '1222', '22222222-2', 0, 'sssssssssssssssssssss', 'masculino', '2021-10-13', 'floresmenjivarerik@gmail.com', '1234-4567', 1, 1),
(2, 'img0b014df0868e04fe685b6a3fdf3f40f5.jpg', 'Erik Manrique', 'Flores Lara', 'Soltero', '1234-567898-761-2', '12345678-9', 400, 'tejuepeque', 'Masculino', '1998-07-01', 'fl17007@ues.edu.sv', '1234-1234', 1, 1),
(3, 'img_producto.jpg', 'Erik Manrique', 'Flores Lara', 'Soltero', '2222-222222-222-2', '22222222-2', 400, 'zzzzzzzzzzzzzzzz', 'Masculino', '1990-02-07', 'floresmenjivarerik@gmail.com', '1111-1111', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `farmacia`
--

CREATE TABLE `farmacia` (
  `idfarmacia` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `telefono` varchar(10) NOT NULL,
  `descripcion` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `farmacia`
--

INSERT INTO `farmacia` (`idfarmacia`, `nombre`, `direccion`, `telefono`, `descripcion`) VALUES
(1, 'farmaia La Bendicion', 'calle', '1234-4567', 'ddddd');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marca`
--

CREATE TABLE `marca` (
  `idmarca` int(11) NOT NULL,
  `codigo` varchar(50) NOT NULL,
  `nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `marca`
--

INSERT INTO `marca` (`idmarca`, `codigo`, `nombre`) VALUES
(1, 'GDGER4', 'HOLA'),
(2, 'EFERFEFG', 'VER');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `idproducto` int(11) NOT NULL,
  `codigo` varchar(50) NOT NULL,
  `foto` varchar(200) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `descripcion` varchar(250) NOT NULL,
  `tipo` varchar(50) NOT NULL,
  `estado` varchar(50) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `unidades` int(11) NOT NULL,
  `precioventa` double NOT NULL,
  `porganancia` double NOT NULL,
  `idcategoria` int(11) NOT NULL,
  `idmarca` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`idproducto`, `codigo`, `foto`, `nombre`, `descripcion`, `tipo`, `estado`, `cantidad`, `unidades`, `precioventa`, `porganancia`, `idcategoria`, `idmarca`) VALUES
(40, 'AA11511', 'imga2bb88c6010dbf70b0d2ab14f607596c.jpg', 'aaaaa222-1', 'xxxxxxxxxxxxxxxxxxx', '', 'Inactivo', 0, 0, 0, 12.13, 2, 1),
(41, 'AA08281', 'img5f81824170a0d14f7c20a7638206a732.jpg', 'aaaaa222-1', 'dddddddd', '', 'Inactivo', 0, 10, 0, 15, 2, 1),
(46, 'DD5128D', 'img9bfd3e9d4342f4d62e8090f2dbd8fa75.jpg', 'dddddddddd', 'dddddddddddddddddd', '', 'Inactivo', 0, 10, 0, 15, 7, 2),
(47, 'GE0913G', 'img111a0f7bb77637d305193eb097e9db54.jpg', 'gergergeg', 'mmmmmmmmmmmmmmmm', 'Blister', 'Inactivo', 0, 10, 0, 15, 9, 1),
(49, 'DA0495S', 'img789e9a17eb5bb0576506340d7aaffe9d.jpg', 'dadsads', 'xxxxxxxxxxxxxxxxx', 'Caja', 'Activo', 0, 10, 0, 15, 4, 2),
(52, 'RO2837O', 'img_producto.jpg', 'rodrigo', 'ssssssss-1', '', 'Activo', 0, 12, 0, 15, 4, 2),
(57, 'ER4835E', 'img_producto.jpg', 'Erik Manrique', '', 'Bote', 'Activo', 0, 10, 0, 15, 5, 2),
(58, 'NU2227A', 'imgaf2833890271c427c8145d4b3ae539b0.jpg', 'nueva', 'zzzzzzzzzzzzz', 'Ninguno', 'Activo', 0, 0, 0, 15, 4, 1),
(59, 'NO4821E', 'img_producto.jpg', 'nombre', '', 'Blister', 'Activo', 0, 10, 0, 0, 4, 2),
(60, 'DD5323D', 'img_producto.jpg', 'dddddddddd', 'ddddddddddd', 'Ninguno', 'Activo', 0, 0, 0, 0, 4, 1),
(61, 'ER9695E', 'img_producto.jpg', 'Erik Manrique', 'ddddddddddddd', 'Blister', 'Activo', 0, 12, 0, 0, 7, 1),
(62, 'RO6495O', 'img_producto.jpg', 'rodrigo', 'xxxxxxxxxxxxxxxxxxx', 'Ninguno', 'Activo', 0, 0, 0, 0, 5, 2),
(63, 'RO8654O', 'img_producto.jpg', 'rodrigo', 'zzzzzzzzzzzzzzzzzzzz', 'Ninguno', 'Activo', 0, 0, 0, 0, 5, 1),
(64, 'RO9131O', 'img_producto.jpg', 'rodrigo', 'zzzzzzzzzzz', 'Ninguno', 'Activo', 0, 0, 0, 0, 5, 2),
(65, 'RO5754O', 'img_producto.jpg', 'rodrigo', 'sssssssss', 'Ninguno', 'Activo', 0, 0, 0, 0, 5, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE `proveedor` (
  `idproveedor` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `empresa` varchar(50) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `telefono` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `unidades`
--

CREATE TABLE `unidades` (
  `idunidades` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idusuario` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `contrasena` varchar(200) NOT NULL,
  `tipo` varchar(50) NOT NULL,
  `estado` varchar(50) NOT NULL,
  `idempleado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idusuario`, `nombre`, `contrasena`, `tipo`, `estado`, `idempleado`) VALUES
(4, 'flores.menjivar', 'NW8rczR4VnVsVVJaNUxZMnpzYS85dz09', 'Administrador', 'Activo', 1),
(5, 'erikflores', 'NW8rczR4VnVsVVJaNUxZMnpzYS85dz09', 'Empleado', 'Activo', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta`
--

CREATE TABLE `venta` (
  `idventa` int(11) NOT NULL,
  `numero-fac` varchar(50) NOT NULL,
  `fecha-venta` datetime NOT NULL,
  `idcliente` int(11) NOT NULL,
  `idusuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cargo`
--
ALTER TABLE `cargo`
  ADD PRIMARY KEY (`idcargo`);

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`idcategoria`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`idcliente`);

--
-- Indices de la tabla `compra`
--
ALTER TABLE `compra`
  ADD PRIMARY KEY (`idcompra`),
  ADD KEY `idproveedor` (`idproveedor`);

--
-- Indices de la tabla `detallecompra`
--
ALTER TABLE `detallecompra`
  ADD PRIMARY KEY (`iddetalle`),
  ADD KEY `idproducto` (`idproducto`),
  ADD KEY `idcompra` (`idcompra`);

--
-- Indices de la tabla `detalleventa`
--
ALTER TABLE `detalleventa`
  ADD PRIMARY KEY (`iddetalle`),
  ADD KEY `idproducto` (`idproducto`),
  ADD KEY `idventa` (`idventa`);

--
-- Indices de la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD PRIMARY KEY (`idempleado`),
  ADD KEY `idfarmacia` (`idfarmacia`),
  ADD KEY `idcargo` (`idcargo`);

--
-- Indices de la tabla `farmacia`
--
ALTER TABLE `farmacia`
  ADD PRIMARY KEY (`idfarmacia`);

--
-- Indices de la tabla `marca`
--
ALTER TABLE `marca`
  ADD PRIMARY KEY (`idmarca`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`idproducto`),
  ADD KEY `idcategoria` (`idcategoria`),
  ADD KEY `idmarca` (`idmarca`);

--
-- Indices de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  ADD PRIMARY KEY (`idproveedor`);

--
-- Indices de la tabla `unidades`
--
ALTER TABLE `unidades`
  ADD PRIMARY KEY (`idunidades`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idusuario`),
  ADD KEY `idempleado` (`idempleado`);

--
-- Indices de la tabla `venta`
--
ALTER TABLE `venta`
  ADD PRIMARY KEY (`idventa`),
  ADD KEY `idcliente` (`idcliente`),
  ADD KEY `idusuario` (`idusuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cargo`
--
ALTER TABLE `cargo`
  MODIFY `idcargo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `idcategoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `idcliente` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `compra`
--
ALTER TABLE `compra`
  MODIFY `idcompra` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `detallecompra`
--
ALTER TABLE `detallecompra`
  MODIFY `iddetalle` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `detalleventa`
--
ALTER TABLE `detalleventa`
  MODIFY `iddetalle` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `empleado`
--
ALTER TABLE `empleado`
  MODIFY `idempleado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `farmacia`
--
ALTER TABLE `farmacia`
  MODIFY `idfarmacia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `marca`
--
ALTER TABLE `marca`
  MODIFY `idmarca` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `idproducto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  MODIFY `idproveedor` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `unidades`
--
ALTER TABLE `unidades`
  MODIFY `idunidades` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `venta`
--
ALTER TABLE `venta`
  MODIFY `idventa` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `compra`
--
ALTER TABLE `compra`
  ADD CONSTRAINT `compra_ibfk_1` FOREIGN KEY (`idproveedor`) REFERENCES `proveedor` (`idproveedor`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `detallecompra`
--
ALTER TABLE `detallecompra`
  ADD CONSTRAINT `detallecompra_ibfk_1` FOREIGN KEY (`idproducto`) REFERENCES `producto` (`idproducto`) ON UPDATE CASCADE,
  ADD CONSTRAINT `detallecompra_ibfk_2` FOREIGN KEY (`idcompra`) REFERENCES `compra` (`idcompra`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `detalleventa`
--
ALTER TABLE `detalleventa`
  ADD CONSTRAINT `detalleventa_ibfk_1` FOREIGN KEY (`idventa`) REFERENCES `venta` (`idventa`) ON UPDATE CASCADE,
  ADD CONSTRAINT `detalleventa_ibfk_2` FOREIGN KEY (`idproducto`) REFERENCES `producto` (`idproducto`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD CONSTRAINT `empleado_ibfk_1` FOREIGN KEY (`idcargo`) REFERENCES `cargo` (`idcargo`) ON UPDATE CASCADE,
  ADD CONSTRAINT `empleado_ibfk_2` FOREIGN KEY (`idfarmacia`) REFERENCES `farmacia` (`idfarmacia`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `producto_ibfk_1` FOREIGN KEY (`idmarca`) REFERENCES `marca` (`idmarca`) ON UPDATE CASCADE,
  ADD CONSTRAINT `producto_ibfk_3` FOREIGN KEY (`idcategoria`) REFERENCES `categoria` (`idcategoria`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`idempleado`) REFERENCES `empleado` (`idempleado`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `venta`
--
ALTER TABLE `venta`
  ADD CONSTRAINT `venta_ibfk_1` FOREIGN KEY (`idusuario`) REFERENCES `usuario` (`idusuario`) ON UPDATE CASCADE,
  ADD CONSTRAINT `venta_ibfk_2` FOREIGN KEY (`idcliente`) REFERENCES `cliente` (`idcliente`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
