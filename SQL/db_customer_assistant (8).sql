-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-04-2021 a las 17:50:21
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

CREATE TABLE `antecedentes` (
  `ID_ANTECEDENTE` int(11) NOT NULL,
  `ID_PROYECTO` int(11) NOT NULL,
  `ETAPA` varchar(10) NOT NULL DEFAULT 'Etapa 1',
  `MOTIVO_CONTACTO` varchar(200) NOT NULL,
  `EXPE_EMP` varchar(200) NOT NULL,
  `EXPE_TECNO` varchar(200) NOT NULL,
  `INSTA_EDI` varchar(10) NOT NULL,
  `PER_TEMA` varchar(60) NOT NULL,
  `EXP_ENCA` varchar(10) NOT NULL,
  `ANO_EXP` varchar(30) NOT NULL,
  `SISTEMA_OPERATIVO` varchar(200) NOT NULL,
  `PROCESADOR` varchar(50) NOT NULL,
  `RAM` varchar(30) NOT NULL,
  `ALMACEN` varchar(50) NOT NULL,
  `TI_INTERNET` varchar(25) NOT NULL,
  `RE_PROPIOS` varchar(25) NOT NULL,
  `RE_AJENOS` varchar(25) NOT NULL,
  `ESTADO_ANTECEDENTES` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `antecedentes`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `ID_CLIENTE` int(11) NOT NULL,
  `NOMBRE` varchar(45) NOT NULL,
  `CARGO` varchar(45) NOT NULL,
  `DEPENDENCIA` varchar(255) NOT NULL,
  `EMAIL` varchar(30) NOT NULL,
  `MOVIL` bigint(10) NOT NULL,
  `ESTADO` varchar(255) NOT NULL,
  `FECHA` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `clientes`
--

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
  `FECHA_CONTACTO` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `FECHA_PC` date NOT NULL,
  `NOMBRE_CONTACTO` varchar(50) NOT NULL,
  `ACUERDO` varchar(255) NOT NULL,
  `ID_CLIENTE` int(11) DEFAULT NULL,
  `ID_PUBLICIDAD` int(11) DEFAULT NULL,
  `ESTADO` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `contacto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `financiamiento`
--

CREATE TABLE `financiamiento` (
  `ID_FINANCIAMIENTO` int(11) NOT NULL,
  `ID_PROYECTO` int(11) NOT NULL,
  `ETAPA3` varchar(10) NOT NULL DEFAULT 'Etapa 3',
  `INVER_INICIAL` double NOT NULL,
  `NOMBRE_FINANCIAMIENTO` varchar(50) NOT NULL,
  `TIPO` varchar(50) NOT NULL,
  `SOLVENCIA` varchar(10) NOT NULL,
  `CREDITO` varchar(100) NOT NULL,
  `ESTADO_FINANCIAMIENTO` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `financiamiento`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login`
--

CREATE TABLE `login` (
  `ID_LOGIN` int(11) NOT NULL,
  `NOMBRE` varchar(40) NOT NULL,
  `APELLIDO` varchar(30) NOT NULL,
  `USUARIO` varchar(40) NOT NULL,
  `PASSWORD` varchar(200) NOT NULL,
  `FECHA_CONEXION` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `login`
--


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
  `ETAPA2` varchar(10) NOT NULL DEFAULT 'Etapa 2',
  `OBJETIVO` varchar(200) NOT NULL,
  `ID_CLIENTE` int(11) NOT NULL,
  `PUESTO` varchar(45) NOT NULL,
  `TELEFONO` int(10) NOT NULL,
  `ESTRATEGIA_MKT` varchar(200) NOT NULL,
  `PLAN_ESTRATEGICO` varchar(200) NOT NULL,
  `RE_ACTUAL` varchar(200) NOT NULL,
  `ESTADO_PROYECTO` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `proyecto_inicial`
--


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

--
-- Volcado de datos para la tabla `publicidad`
--


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
  `FECHA_SEGUIMIENTO` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `FECHA` date NOT NULL,
  `ESTADO_CITA` varchar(30) NOT NULL,
  `ID_CONTACTO` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `seguimiento`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sesions`
--

CREATE TABLE `sesions` (
  `ID_SESION` int(11) NOT NULL,
  `FECHA` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `IP` varchar(30) NOT NULL,
  `ID_LOGIN` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `sesions`
--



--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `antecedentes`
--
ALTER TABLE `antecedentes`
  ADD PRIMARY KEY (`ID_ANTECEDENTE`),
  ADD KEY `antecedente1` (`ID_PROYECTO`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`ID_CLIENTE`);

--
-- Indices de la tabla `contacto`
--
ALTER TABLE `contacto`
  ADD PRIMARY KEY (`ID_CONTACTO`);

--
-- Indices de la tabla `financiamiento`
--
ALTER TABLE `financiamiento`
  ADD PRIMARY KEY (`ID_FINANCIAMIENTO`),
  ADD KEY `proyecto7` (`ID_PROYECTO`);

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
  ADD KEY `pro1` (`ID_CLIENTE`);

--
-- Indices de la tabla `publicidad`
--
ALTER TABLE `publicidad`
  ADD PRIMARY KEY (`ID_PUBLICIDAD`);

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
  ADD PRIMARY KEY (`ID_SEGUIMIENTO`);

--
-- Indices de la tabla `sesions`
--
ALTER TABLE `sesions`
  ADD PRIMARY KEY (`ID_SESION`),
  ADD KEY `login2` (`ID_LOGIN`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `antecedentes`
--
ALTER TABLE `antecedentes`
  MODIFY `ID_ANTECEDENTE` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `ID_CLIENTE` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT de la tabla `contacto`
--
ALTER TABLE `contacto`
  MODIFY `ID_CONTACTO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de la tabla `financiamiento`
--
ALTER TABLE `financiamiento`
  MODIFY `ID_FINANCIAMIENTO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `login`
--
ALTER TABLE `login`
  MODIFY `ID_LOGIN` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `notificaciones`
--
ALTER TABLE `notificaciones`
  MODIFY `ID_NOTIFICACION` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `proyecto_inicial`
--
ALTER TABLE `proyecto_inicial`
  MODIFY `ID_PROYECTO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `publicidad`
--
ALTER TABLE `publicidad`
  MODIFY `ID_PUBLICIDAD` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `reportes`
--
ALTER TABLE `reportes`
  MODIFY `ID_REPORTE` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `seguimiento`
--
ALTER TABLE `seguimiento`
  MODIFY `ID_SEGUIMIENTO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `sesions`
--
ALTER TABLE `sesions`
  MODIFY `ID_SESION` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `antecedentes`
--
ALTER TABLE `antecedentes`
  ADD CONSTRAINT `antecedente1` FOREIGN KEY (`ID_PROYECTO`) REFERENCES `proyecto_inicial` (`ID_PROYECTO`);

--
-- Filtros para la tabla `financiamiento`
--
ALTER TABLE `financiamiento`
  ADD CONSTRAINT `proyecto7` FOREIGN KEY (`ID_PROYECTO`) REFERENCES `proyecto_inicial` (`ID_PROYECTO`);

--
-- Filtros para la tabla `notificaciones`
--
ALTER TABLE `notificaciones`
  ADD CONSTRAINT `contacto1` FOREIGN KEY (`ID_CONTACTO`) REFERENCES `contacto` (`ID_CONTACTO`);

--
-- Filtros para la tabla `proyecto_inicial`
--
ALTER TABLE `proyecto_inicial`
  ADD CONSTRAINT `pro1` FOREIGN KEY (`ID_CLIENTE`) REFERENCES `clientes` (`ID_CLIENTE`);

--
-- Filtros para la tabla `reportes`
--
ALTER TABLE `reportes`
  ADD CONSTRAINT `reporte1` FOREIGN KEY (`ID_ANTECEDENTE`) REFERENCES `antecedentes` (`ID_ANTECEDENTE`),
  ADD CONSTRAINT `reporte2` FOREIGN KEY (`ID_PROYECTO`) REFERENCES `proyecto_inicial` (`ID_PROYECTO`),
  ADD CONSTRAINT `reporte3` FOREIGN KEY (`ID_FINANCIAMIENTO`) REFERENCES `financiamiento` (`ID_FINANCIAMIENTO`);

--
-- Filtros para la tabla `sesions`
--
ALTER TABLE `sesions`
  ADD CONSTRAINT `login2` FOREIGN KEY (`ID_LOGIN`) REFERENCES `login` (`ID_LOGIN`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
