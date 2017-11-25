-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-11-2017 a las 16:16:26
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `softeed`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `REGISTRARESTUDIANTE` (IN `NOMBRE` VARCHAR(50), IN `APELLIDOS` VARCHAR(50), IN `SEXO` TINYINT(1), IN `EDAD` INT(4), IN `ESCOLARIDAD` VARCHAR(50), IN `CENTRO_ESTUDIO` VARCHAR(100), IN `COMPROBANTE` VARCHAR(100), IN `CORREO` VARCHAR(50), IN `CONTRASEÑA` VARCHAR(20))  BEGIN
DECLARE ID INT DEFAULT 0;
INSERT INTO ESTUDIANTE(
NOMBRE,APELLIDOS,SEXO,EDAD,ESCOLARIDAD,CENTRO_DE_ESTUDIOS,COMPROBANTE)
VALUES(
NOMBRE,APELLIDOS,SEXO,EDAD,ESCOLARIDAD,CENTRO_ESTUDIO,COMPROBANTE);

SELECT E.id INTO ID FROM estudiante E WHERE 
E.Nombre = NOMBRE AND E.Apellidos = APELLIDOS AND E.Sexo = SEXO AND E.Edad = EDAD AND E.Escolaridad = ESCOLARIDAD AND E.Centro_de_Estudios = CENTRO_ESTUDIO AND E.Comprobante = COMPROBANTE 
ORDER BY E.id DESC LIMIT 1;

INSERT INTO usuarios_entrar(
CORREO,CONTRASEÑA,TIPO_USUARIO,ID_ESTUDIANTE)
VALUES(
CORREO,CONTRASEÑA,"E",ID);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `REGISTRARRECLUTADOR` (IN `NOMBRE` VARCHAR(30), IN `APELLIDOS` VARCHAR(30), IN `RFC` VARCHAR(15), IN `EDAD` INT(11), IN `NOMBRE_EMPRESA` VARCHAR(50), IN `DIRECCION_EMPRESA` VARCHAR(70), IN `TELEFONO` VARCHAR(12), IN `CORREO` VARCHAR(50), IN `CONTRASEÑA` VARCHAR(20))  BEGIN
DECLARE ID INT DEFAULT 0;

INSERT INTO reclutador(
    NOMBRE_RECLUTADOR, APELLIDOS_RECLUTADOR, RFC, EDAD_RECLUTADOR, 			NOM_EMPRESARIAL, DIRECCION_EMPRESARIAL, TELEFONO)
VALUES(
	NOMBRE, APELLIDOS, RFC, EDAD, NOMBRE_EMPRESA, DIRECCION_EMPRESA, 		TELEFONO);
    
SELECT R.id INTO ID FROM reclutador R WHERE
	NOMBRE_RECLUTADOR = NOMBRE AND APELLIDOS_RECLUTADOR = APELLIDOS AND RFC = RFC AND EDAD_RECLUTADOR = EDAD AND NOM_EMPRESARIAL = NOMBRE_EMPRESA AND DIRECCION_EMPRESARIAL = DIRECCION_EMPRESA AND TELEFONO = TELEFONO ORDER BY R.id DESC LIMIT 1;
    
INSERT INTO usuarios_entrar(
	CORREO, CONTRASEÑA, TIPO_USUARIO, ID_RECLUTADOR)
VALUES(
	CORREO, CONTRASEÑA, "R", ID);

END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiante`
--

CREATE TABLE `estudiante` (
  `id` int(11) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Apellidos` varchar(50) NOT NULL,
  `Sexo` tinyint(1) NOT NULL,
  `Edad` int(4) NOT NULL,
  `Escolaridad` varchar(50) NOT NULL,
  `Centro_de_Estudios` varchar(100) NOT NULL,
  `Comprobante` varchar(100) NOT NULL,
  `Imagen_Perfil` varchar(100) DEFAULT NULL,
  `Alias` varchar(100) DEFAULT NULL,
  `Telefono` varchar(15) DEFAULT NULL,
  `Horario_Disponibilidad` varchar(100) DEFAULT NULL,
  `Disponibilidad_Contratacion` tinyint(1) DEFAULT NULL,
  `Carrera` varchar(70) DEFAULT NULL,
  `Pais` varchar(30) DEFAULT NULL,
  `Ciudad` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `estudiante`
--

INSERT INTO `estudiante` (`id`, `Nombre`, `Apellidos`, `Sexo`, `Edad`, `Escolaridad`, `Centro_de_Estudios`, `Comprobante`, `Imagen_Perfil`, `Alias`, `Telefono`, `Horario_Disponibilidad`, `Disponibilidad_Contratacion`, `Carrera`, `Pais`, `Ciudad`) VALUES
(7, 'PEDRO PABLO', 'ROMERO MARTINEZ', 0, 20, 'UNIVERSIDAD', 'UNIVERSIDAD POLITECNICA DE QUINTANA ROO', 'C:/TETE.TETE', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, 'PEDRO PABLO', 'ROMERO MARTINEZ', 0, 20, 'SUPERIOR', 'UNIVERSIDAD POLITECNICA DE QUINTANA ROO', 'C:/TETE.TETE', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiante_proyecto`
--

CREATE TABLE `estudiante_proyecto` (
  `id` int(11) NOT NULL,
  `id_Estudiante` int(11) NOT NULL,
  `id_Proyecto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiante_reclutador`
--

CREATE TABLE `estudiante_reclutador` (
  `id` int(11) NOT NULL,
  `id_Estudiante` int(11) NOT NULL,
  `id_Reclutador` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `medias`
--

CREATE TABLE `medias` (
  `id` int(11) NOT NULL,
  `Descripcion` varchar(40) NOT NULL,
  `Url` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `media_proyecto`
--

CREATE TABLE `media_proyecto` (
  `id` int(11) NOT NULL,
  `id_Proyecto` int(11) NOT NULL,
  `id_media` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyectos`
--

CREATE TABLE `proyectos` (
  `id` int(11) NOT NULL,
  `Nombre` varchar(70) NOT NULL,
  `Descripcion` varchar(250) NOT NULL,
  `Status` varchar(20) NOT NULL,
  `Portada` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyecto_tag`
--

CREATE TABLE `proyecto_tag` (
  `ID` int(11) NOT NULL,
  `ID_PROYECTO` int(11) DEFAULT NULL,
  `ID_TAG` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reclutador`
--

CREATE TABLE `reclutador` (
  `id` int(11) NOT NULL,
  `RFC` varchar(15) NOT NULL,
  `Nom_Empresarial` varchar(50) NOT NULL,
  `Direccion_Empresarial` varchar(70) NOT NULL,
  `Nombre_Reclutador` varchar(30) NOT NULL,
  `Apellidos_Reclutador` varchar(30) NOT NULL,
  `Edad_Reclutador` int(11) NOT NULL,
  `Telefono` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `reclutador`
--

INSERT INTO `reclutador` (`id`, `RFC`, `Nom_Empresarial`, `Direccion_Empresarial`, `Nombre_Reclutador`, `Apellidos_Reclutador`, `Edad_Reclutador`, `Telefono`) VALUES
(1, 'ROMP971111RPM', 'SOCIAL NODES', 'SM 51 M 39 L 19 CALLE CHAKAH FRACC BONAMPAK', 'PEDRO PABLO', 'ROMERO MARTINEZ', 20, '9982056404');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tags`
--

CREATE TABLE `tags` (
  `ID` int(11) NOT NULL,
  `NOMBRE` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios_entrar`
--

CREATE TABLE `usuarios_entrar` (
  `ID` int(11) NOT NULL,
  `CORREO` varchar(50) DEFAULT NULL,
  `CONTRASEÑA` varchar(20) DEFAULT NULL,
  `TIPO_USUARIO` varchar(2) DEFAULT NULL,
  `ID_ESTUDIANTE` int(11) DEFAULT NULL,
  `ID_RECLUTADOR` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios_entrar`
--

INSERT INTO `usuarios_entrar` (`ID`, `CORREO`, `CONTRASEÑA`, `TIPO_USUARIO`, `ID_ESTUDIANTE`, `ID_RECLUTADOR`) VALUES
(1, 'PEDRORM19@GMAIL.COM', '11NOV1997', 'E', 7, NULL),
(2, 'PEDRORM19@GMAIL.COM', '11NOV1997', 'E', 8, NULL),
(3, 'PEDRORM19@GMAIL.COM', '11NOV1997', 'R', NULL, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `estudiante`
--
ALTER TABLE `estudiante`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `estudiante_proyecto`
--
ALTER TABLE `estudiante_proyecto`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_Estudiante` (`id_Estudiante`),
  ADD KEY `id_Proyecto` (`id_Proyecto`);

--
-- Indices de la tabla `estudiante_reclutador`
--
ALTER TABLE `estudiante_reclutador`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_Estudiante` (`id_Estudiante`),
  ADD KEY `id_Reclutador` (`id_Reclutador`);

--
-- Indices de la tabla `medias`
--
ALTER TABLE `medias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `media_proyecto`
--
ALTER TABLE `media_proyecto`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_media` (`id_media`),
  ADD KEY `id_Proyecto` (`id_Proyecto`);

--
-- Indices de la tabla `proyectos`
--
ALTER TABLE `proyectos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `proyecto_tag`
--
ALTER TABLE `proyecto_tag`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID_TAG` (`ID_TAG`),
  ADD KEY `ID_PROYECTO` (`ID_PROYECTO`);

--
-- Indices de la tabla `reclutador`
--
ALTER TABLE `reclutador`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `usuarios_entrar`
--
ALTER TABLE `usuarios_entrar`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID_ESTUDIANTE` (`ID_ESTUDIANTE`),
  ADD KEY `ID_RECLUTADOR` (`ID_RECLUTADOR`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `estudiante`
--
ALTER TABLE `estudiante`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `estudiante_proyecto`
--
ALTER TABLE `estudiante_proyecto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `estudiante_reclutador`
--
ALTER TABLE `estudiante_reclutador`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `medias`
--
ALTER TABLE `medias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `media_proyecto`
--
ALTER TABLE `media_proyecto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `proyectos`
--
ALTER TABLE `proyectos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `proyecto_tag`
--
ALTER TABLE `proyecto_tag`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `reclutador`
--
ALTER TABLE `reclutador`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `tags`
--
ALTER TABLE `tags`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `usuarios_entrar`
--
ALTER TABLE `usuarios_entrar`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `estudiante_proyecto`
--
ALTER TABLE `estudiante_proyecto`
  ADD CONSTRAINT `estudiante_proyecto_ibfk_1` FOREIGN KEY (`id_Estudiante`) REFERENCES `estudiante` (`id`),
  ADD CONSTRAINT `estudiante_proyecto_ibfk_2` FOREIGN KEY (`id_Proyecto`) REFERENCES `proyectos` (`id`);

--
-- Filtros para la tabla `estudiante_reclutador`
--
ALTER TABLE `estudiante_reclutador`
  ADD CONSTRAINT `estudiante_reclutador_ibfk_1` FOREIGN KEY (`id_Estudiante`) REFERENCES `estudiante` (`id`),
  ADD CONSTRAINT `estudiante_reclutador_ibfk_2` FOREIGN KEY (`id_Reclutador`) REFERENCES `reclutador` (`id`);

--
-- Filtros para la tabla `media_proyecto`
--
ALTER TABLE `media_proyecto`
  ADD CONSTRAINT `media_proyecto_ibfk_1` FOREIGN KEY (`id_media`) REFERENCES `medias` (`id`),
  ADD CONSTRAINT `media_proyecto_ibfk_2` FOREIGN KEY (`id_Proyecto`) REFERENCES `proyectos` (`id`);

--
-- Filtros para la tabla `proyecto_tag`
--
ALTER TABLE `proyecto_tag`
  ADD CONSTRAINT `proyecto_tag_ibfk_1` FOREIGN KEY (`ID_TAG`) REFERENCES `tags` (`ID`),
  ADD CONSTRAINT `proyecto_tag_ibfk_2` FOREIGN KEY (`ID_PROYECTO`) REFERENCES `proyectos` (`id`);

--
-- Filtros para la tabla `usuarios_entrar`
--
ALTER TABLE `usuarios_entrar`
  ADD CONSTRAINT `usuarios_entrar_ibfk_1` FOREIGN KEY (`ID_ESTUDIANTE`) REFERENCES `estudiante` (`id`),
  ADD CONSTRAINT `usuarios_entrar_ibfk_2` FOREIGN KEY (`ID_RECLUTADOR`) REFERENCES `reclutador` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
