-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-02-2021 a las 18:12:06
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_customer_assistant`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `antecedentes`
--
CREATE DATABASE CUSTOMER_ASSISTANT;
USE CUSTOMER_ASSISTANT;

CREATE TABLE `antecedentes` (
  `ID_ANTECEDENTE` int(11) NOT NULL,
  `MOTIVO_CONTACTO` varchar(200) NOT NULL,
  `EXISTENCIA_CONTACTO` varchar(200) NOT NULL,
  `EXPERIENCIA_CLIENTE` varchar(200) NOT NULL,
  `TIPO_SISTEMA` varchar(200) NOT NULL,
  `RANGO_SATISFACCION` int(3) NOT NULL,
  `SISTEMA_OPERATIVO` varchar(200) NOT NULL,
  `PROCESADOR` varchar(200) NOT NULL,
  `RAM` varchar(200) NOT NULL,
  `INTERNET` varchar(200) NOT NULL,
  `ESTADO_ANTECEDENTES` varchar(200) NOT NULL,
  `ID_SEGUIMIENTO` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `ID_CONTACTO` int(11) NOT NULL,
  `NOMBRE` varchar(45) NOT NULL,
  `CARGO` varchar(45) NOT NULL,
  `DEPENDENCIA` varchar(255) NOT NULL,
  `EMAIL` varchar(30) NOT NULL,
  `TELEFONO` int(10) NOT NULL,
  `ESTADO` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto`
--

CREATE TABLE `contacto` (
  `ID_CONTACTO` int(11) NOT NULL,
  `TIPO_CONTACTO` varchar(45) NOT NULL,
  `DESTINATARIO` varchar(45) NOT NULL,
  `ASUNTO` varchar(200) NOT NULL,
  `RESUMEN` varchar(255) NOT NULL,
  `FECHA_CONTACTO` datetime NOT NULL,
  `FECHA_PC` date NOT NULL,
  `NOMBRE_CONTACTO` varchar(50) NOT NULL,
  `ACUERDO` varchar(255) NOT NULL,
  `ID_CLIENTE` int(11) NOT NULL,
  `ID_PUBLICIDAD` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `financiamiento`
--

CREATE TABLE `financiamiento` (
  `ID_FINANCIAMIENTO` int(11) NOT NULL,
  `CAPITAL_CLIENTE` double NOT NULL,
  `NOMBRE_FINANCIAMIENTO` varchar(50) NOT NULL,
  `TIPO` varchar(50) NOT NULL,
  `SOLVENCIA` double NOT NULL,
  `CREDITO` varchar(100) NOT NULL,
  `MONTO` double NOT NULL,
  `ESTADO_FINANCIAMIENTO` varchar(30) NOT NULL,
  `ID_SEGUIMIENTO` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login`
--

CREATE TABLE `login` (
  `ID_LOGIN` int(11) NOT NULL,
  `NOMBRE` varchar(40) NOT NULL,
  `APELLIDO` varchar(30) NOT NULL,
  `USUARIO` varchar(40) NOT NULL,
  `PASSWORD` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notificaciones`
--

CREATE TABLE `notificaciones` (
  `ID_NOTIFICACION` int(11) NOT NULL,
  `NOMBRE_CLIENTE` varchar(50) NOT NULL,
  `DESTINATARIO` varchar(50) NOT NULL,
  `FECHA_PC` date NOT NULL,
  `ASUNTO` varchar(200) NOT NULL,
  `ID_CONTACTO` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyecto_inicial`
--

CREATE TABLE `proyecto_inicial` (
  `ID_PROYECTO` int(11) NOT NULL,
  `NOMBRE_PROYECTO` varchar(50) NOT NULL,
  `OBJETIVO` varchar(200) NOT NULL,
  `ESTRATEGIA_MKT` varchar(200) NOT NULL,
  `NOMBRE_ENCARGADO` varchar(50) NOT NULL,
  `PUESTO` varchar(45) NOT NULL,
  `EXPERIENCIA` varchar(255) NOT NULL,
  `TELEFONO` int(10) NOT NULL,
  `PLAN_ESTRATEGICO` varchar(200) NOT NULL,
  `ESTADO_PROYECTO` varchar(50) NOT NULL,
  `ID_SEGUIMIENTO` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicidad`
--

CREATE TABLE `publicidad` (
  `ID_PUBLICIDAD` int(11) NOT NULL,
  `NOMBRE_PU` varchar(50) NOT NULL,
  `TIPO` varchar(50) NOT NULL,
  `DESCRIPCION` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro`
--

CREATE TABLE `registro` (
  `ID_REGISTRO` int(11) NOT NULL,
  `NOMBRE` varchar(25) NOT NULL,
  `CARGO` varchar(25) NOT NULL,
  `USERNAME` varchar(25) NOT NULL,
  `PASSWORD` varchar(10) NOT NULL,
  `ID_LOGIN` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reportes`
--

CREATE TABLE `reportes` (
  `ID_REPORTE` int(11) NOT NULL,
  `NOMBRE_PROYECTO` varchar(50) NOT NULL,
  `ESTADO_PROYECTO` varchar(50) NOT NULL,
  `PORCENTAJE_AVANCE` int(3) NOT NULL,
  `ID_ANTECEDENTE` int(11) NOT NULL,
  `ID_PROYECTO` int(11) NOT NULL,
  `ID_FINANCIAMIENTO` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `seguimiento`
--

CREATE TABLE `seguimiento` (
  `ID_SEGUIMIENTO` int(11) NOT NULL,
  `FECHA` date NOT NULL,
  `NOMBRE_CONTACTO` varchar(50) NOT NULL,
  `TERMINOS` varchar(200) NOT NULL,
  `ESTADO_CITA` varchar(30) NOT NULL,
  `ID_CONTACTO` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `antecedentes`
--
ALTER TABLE `antecedentes`
  ADD PRIMARY KEY (`ID_ANTECEDENTE`),
  ADD KEY `seguimiento1` (`ID_SEGUIMIENTO`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`ID_CONTACTO`);

--
-- Indices de la tabla `contacto`
--
ALTER TABLE `contacto`
  ADD PRIMARY KEY (`ID_CONTACTO`),
  ADD KEY `cliente1` (`ID_CLIENTE`),
  ADD KEY `publicidad1` (`ID_PUBLICIDAD`);

--
-- Indices de la tabla `financiamiento`
--
ALTER TABLE `financiamiento`
  ADD PRIMARY KEY (`ID_FINANCIAMIENTO`),
  ADD KEY `seguimiento3` (`ID_SEGUIMIENTO`);

--
-- Indices de la tabla `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`ID_LOGIN`);

--
-- Indices de la tabla `notificaciones`
--
ALTER TABLE `notificaciones`
  ADD PRIMARY KEY (`ID_NOTIFICACION`),
  ADD KEY `contacto1` (`ID_CONTACTO`);

--
-- Indices de la tabla `proyecto_inicial`
--
ALTER TABLE `proyecto_inicial`
  ADD PRIMARY KEY (`ID_PROYECTO`),
  ADD KEY `seguimiento2` (`ID_SEGUIMIENTO`);

--
-- Indices de la tabla `publicidad`
--
ALTER TABLE `publicidad`
  ADD PRIMARY KEY (`ID_PUBLICIDAD`);

--
-- Indices de la tabla `registro`
--
ALTER TABLE `registro`
  ADD PRIMARY KEY (`ID_REGISTRO`),
  ADD KEY `login` (`ID_LOGIN`);

--
-- Indices de la tabla `reportes`
--
ALTER TABLE `reportes`
  ADD PRIMARY KEY (`ID_REPORTE`),
  ADD KEY `reporte1` (`ID_ANTECEDENTE`),
  ADD KEY `reporte2` (`ID_PROYECTO`),
  ADD KEY `reporte3` (`ID_FINANCIAMIENTO`);

--
-- Indices de la tabla `seguimiento`
--
ALTER TABLE `seguimiento`
  ADD PRIMARY KEY (`ID_SEGUIMIENTO`),
  ADD KEY `contacto2` (`ID_CONTACTO`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `antecedentes`
--
ALTER TABLE `antecedentes`
  MODIFY `ID_ANTECEDENTE` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `ID_CONTACTO` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `contacto`
--
ALTER TABLE `contacto`
  MODIFY `ID_CONTACTO` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `financiamiento`
--
ALTER TABLE `financiamiento`
  MODIFY `ID_FINANCIAMIENTO` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `login`
--
ALTER TABLE `login`
  MODIFY `ID_LOGIN` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `notificaciones`
--
ALTER TABLE `notificaciones`
  MODIFY `ID_NOTIFICACION` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `proyecto_inicial`
--
ALTER TABLE `proyecto_inicial`
  MODIFY `ID_PROYECTO` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `publicidad`
--
ALTER TABLE `publicidad`
  MODIFY `ID_PUBLICIDAD` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `registro`
--
ALTER TABLE `registro`
  MODIFY `ID_REGISTRO` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `reportes`
--
ALTER TABLE `reportes`
  MODIFY `ID_REPORTE` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `seguimiento`
--
ALTER TABLE `seguimiento`
  MODIFY `ID_SEGUIMIENTO` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `antecedentes`
--
ALTER TABLE `antecedentes`
  ADD CONSTRAINT `seguimiento1` FOREIGN KEY (`ID_SEGUIMIENTO`) REFERENCES `seguimiento` (`ID_SEGUIMIENTO`);

--
-- Filtros para la tabla `contacto`
--
ALTER TABLE `contacto`
  ADD CONSTRAINT `cliente1` FOREIGN KEY (`ID_CLIENTE`) REFERENCES `clientes` (`ID_CONTACTO`),
  ADD CONSTRAINT `publicidad1` FOREIGN KEY (`ID_PUBLICIDAD`) REFERENCES `publicidad` (`ID_PUBLICIDAD`);

--
-- Filtros para la tabla `financiamiento`
--
ALTER TABLE `financiamiento`
  ADD CONSTRAINT `seguimiento3` FOREIGN KEY (`ID_SEGUIMIENTO`) REFERENCES `seguimiento` (`ID_SEGUIMIENTO`);

--
-- Filtros para la tabla `notificaciones`
--
ALTER TABLE `notificaciones`
  ADD CONSTRAINT `contacto1` FOREIGN KEY (`ID_CONTACTO`) REFERENCES `contacto` (`ID_CONTACTO`);

--
-- Filtros para la tabla `proyecto_inicial`
--
ALTER TABLE `proyecto_inicial`
  ADD CONSTRAINT `seguimiento2` FOREIGN KEY (`ID_SEGUIMIENTO`) REFERENCES `seguimiento` (`ID_SEGUIMIENTO`);

--
-- Filtros para la tabla `registro`
--
ALTER TABLE `registro`
  ADD CONSTRAINT `login` FOREIGN KEY (`ID_LOGIN`) REFERENCES `login` (`ID_LOGIN`);

--
-- Filtros para la tabla `reportes`
--
ALTER TABLE `reportes`
  ADD CONSTRAINT `reporte1` FOREIGN KEY (`ID_ANTECEDENTE`) REFERENCES `antecedentes` (`ID_ANTECEDENTE`),
  ADD CONSTRAINT `reporte2` FOREIGN KEY (`ID_PROYECTO`) REFERENCES `proyecto_inicial` (`ID_PROYECTO`),
  ADD CONSTRAINT `reporte3` FOREIGN KEY (`ID_FINANCIAMIENTO`) REFERENCES `financiamiento` (`ID_FINANCIAMIENTO`);

--
-- Filtros para la tabla `seguimiento`
--
ALTER TABLE `seguimiento`
  ADD CONSTRAINT `contacto2` FOREIGN KEY (`ID_CONTACTO`) REFERENCES `seguimiento` (`ID_SEGUIMIENTO`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
