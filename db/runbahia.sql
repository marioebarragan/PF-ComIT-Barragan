-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 11-07-2018 a las 16:23:28
-- Versión del servidor: 5.7.21
-- Versión de PHP: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `runbahia`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblagrupaciones`
--

DROP TABLE IF EXISTS `tblagrupaciones`;
CREATE TABLE IF NOT EXISTS `tblagrupaciones` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(200) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=170 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tblagrupaciones`
--

INSERT INTO `tblagrupaciones` (`ID`, `Nombre`) VALUES
(42, 'CIMAPA'),
(44, 'CIRCULO DE ATLETAS VETERANOS PLATENSES'),
(45, 'CLUB AEROBICO'),
(46, 'CLUB DE CORREDORES PUERTO BELGRANO'),
(47, 'CLUB SPORTIVO INDEPENDIENTE'),
(48, 'CLUB VIAL RIONEGRINO'),
(49, 'CORPUS RUN'),
(50, 'CORRE BIRRA RUNNING TEAM'),
(51, 'CORRE PORTUARIO CORRE'),
(53, 'CORRECABILDO'),
(54, 'CORREN PUNTA ALTA'),
(55, 'COTISA'),
(56, 'CROSS RUNNING TEAM'),
(57, 'DANGELOTEAM'),
(58, 'DARREGUEIRA CORRE'),
(59, 'DELFO CABRERA'),
(60, 'DESPLUMADOS'),
(61, 'DURO PEDAL'),
(63, 'ECO TEAM'),
(64, 'EKO MAN RUNNING TEAM'),
(65, 'EL GORRION'),
(66, 'EN MOVIMIENTO'),
(67, 'ENDURANCE RUNNIG TEAM'),
(68, 'ENERGIA FUNCIONAL - RUNNING'),
(69, 'ENTRENAMIENTO NECOCHEA'),
(70, 'ERBB'),
(71, 'ESCALAS TEAM'),
(72, 'EVALUARTE'),
(73, 'EVOLUTION RUNNING ORENSE'),
(74, 'FADA'),
(75, 'FAQTEAM'),
(76, 'FG RUNNERS'),
(77, 'FITNESS CENTER VILLALONGA'),
(78, 'FUNCIONAL GYM'),
(79, 'GABYLAN FLYERS'),
(80, 'GEN'),
(81, 'GET FIT'),
(82, 'GRUPO 3A'),
(83, 'GRUPO A'),
(84, 'GRUPO CORRECAMINOS'),
(85, 'GRUPO ENSALUD'),
(86, 'GRUPO GEA'),
(87, 'GRUPO MS RUNNING BAHIA BLANCA'),
(88, 'GRUPOCORRECAMINOS'),
(89, 'GUATRACHE CORRE'),
(90, 'H2O AQUA GYM/FITNESS'),
(91, 'INSTINTO VITAL'),
(92, 'ITEN RUNNING'),
(93, 'JOVENES CORREDORES'),
(94, 'KASIKE TEAM'),
(95, 'KINED'),
(96, 'KM RUNNING'),
(97, 'KM.0'),
(98, 'KOSTEN CROSSFIT'),
(99, 'LA ADELA CORRE'),
(100, 'LA ROCA - EQUIPO DE CORREDORES'),
(101, 'LA VOZ DE LOS ATLETAS'),
(102, 'LCR TEAM'),
(103, 'LINCK RUNNING TEAM'),
(104, 'LOS CORRECAMINOS'),
(105, 'LOS COYOTES RUNNIG TEAM'),
(106, 'LOS IRRITABLES RUNNING TEAM'),
(107, 'LOS RODADORES'),
(108, 'MADRE TIERRA TRAIL RUNNING'),
(109, 'MARDELPLATACORRE ENTRENAMIENTO'),
(110, 'METODO RUNNING LAPRIDA'),
(111, 'MIA RUNNING TEAM'),
(112, 'MIGUEL LLANQUIN'),
(113, 'MILLAN ATLETISMO'),
(114, 'MONTE RUNNING'),
(115, 'MOUNTAIN BIKE DORREGO'),
(116, 'MTB VILLALONGA'),
(117, 'MUNDO RUNNING'),
(118, 'NAZARIOARAUJO'),
(119, 'NECOCHEA RUNNING TEAM'),
(120, 'OPTIMUS TRAINING'),
(121, 'OXIGENO RUNNING CLUB'),
(122, 'PATAGONIA TEAM'),
(123, 'PEDAL LURENSE'),
(124, 'POP TEAM'),
(125, 'PPENTRENAMIENTOZN'),
(126, 'PRINGLES RUNNING'),
(127, 'PRORUNNER'),
(128, 'PUAN RUNNING'),
(129, 'PUNTA RUNNING'),
(130, 'PURA FRECUENCA'),
(131, 'PURAVIDA'),
(133, 'ROCK N\' RUNNING'),
(135, 'RUNNIG GARUFI'),
(136, 'RUNNING POSITIVO GYM'),
(137, 'RUNNING TEAM GT+'),
(138, 'RUNNING TEAM SARMIENTO'),
(139, 'RUNNING TEAM SUPERACION'),
(140, 'SCHAAB COMPETICION'),
(142, 'SHALOM'),
(145, 'SINERGIA TRAINING'),
(146, 'SOLO RUEDO TRANKI'),
(147, 'SPIN BIKE\'S'),
(148, 'SQUADRA BA.BCA.'),
(41, 'CICLOTURISMO PUNTA ALTA'),
(40, 'CICLISTAS UNIDOS DE LA COMARCA'),
(39, 'CICLISMO MEDANENSE'),
(38, 'CHAMIGOS RUNNING TEAM'),
(37, 'CETACEOS - ESCUELA DE BUCEO Y APNEA'),
(36, 'CERRI CORRE'),
(35, 'CENTRO NAVAL RUNNING TEAM'),
(34, 'CAVECO'),
(33, 'CARHUE BIKE CARHUE'),
(32, 'CARAMELOS HOLANDA'),
(31, 'CALETA FENIX RUNNING TEAM'),
(30, 'BULLRUNNING'),
(29, 'BOMBERO SANO'),
(28, 'BODY CROSS'),
(27, 'BARRO&BICI'),
(26, 'BARI BIKE'),
(23, 'ASOCIACION PAMPEANA DE ATLETAS'),
(22, 'AMIGOS DINAMITA'),
(21, 'AMANUS RUNNING CLUB'),
(20, 'ALMENDRA SPINNING'),
(19, 'ALFONSIN RUNNING TEAM'),
(18, 'AKTITUD+'),
(16, 'AGRUPACION NAZARIO.ARAUJO'),
(12, 'AGRUPACION ATLETICA V. VENTANA'),
(9, 'ADRENALINA PURA'),
(8, 'ACRORUNNING'),
(7, 'AB CITYBIKE ENTRENAMIENTO'),
(6, 'A RUEDA MUERTA'),
(5, 'A PATAS - ATLETISMO'),
(4, '4X4 NECOCHEA'),
(3, '112 RUNNING'),
(2, '10KD+'),
(1, 'ES3'),
(150, 'SYS-RUN'),
(151, 'TEAM COLNER BAHIA BLANCA'),
(152, 'TEAM RUNNERS'),
(153, 'TEAM RUNNING SG'),
(154, 'TEAM SANTA CRUZ TRAIL RUNNING'),
(155, 'TEAM SV'),
(156, 'TEFF TRAINING'),
(158, 'TROTADORES'),
(159, 'TROTE TRANQUI'),
(160, 'UNI RUNNING'),
(161, 'UNIVERSITARIOS TEAM'),
(162, 'UNO BAHIA CLUB'),
(163, 'UNO CORRE'),
(164, 'VALCHETA RUNNING'),
(165, 'VITAL RUNNERS'),
(166, 'VO2 TRAINING'),
(167, 'VR ENTRENA'),
(168, 'WM SPORTS'),
(169, 'XTREME');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblciudad`
--

DROP TABLE IF EXISTS `tblciudad`;
CREATE TABLE IF NOT EXISTS `tblciudad` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(50) NOT NULL,
  `CP` int(4) NOT NULL,
  `IDprovincia` int(2) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tblciudad`
--

INSERT INTO `tblciudad` (`ID`, `Nombre`, `CP`, `IDprovincia`) VALUES
(1, 'BAHIA BLANCA', 8000, 2),
(2, 'INGENIERO WHITE', 8103, 2),
(3, 'GRAL DANIEL CERRI', 8105, 2),
(5, 'CABILDO', 8118, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbldiciplina`
--

DROP TABLE IF EXISTS `tbldiciplina`;
CREATE TABLE IF NOT EXISTS `tbldiciplina` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(50) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbldiciplina`
--

INSERT INTO `tbldiciplina` (`ID`, `Nombre`) VALUES
(1, 'RUNNER'),
(2, 'RURAL BIKE'),
(3, 'MOUNTAIN BIKE'),
(4, 'DUATLON'),
(5, 'TRIATHLON');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbldiscapacidad`
--

DROP TABLE IF EXISTS `tbldiscapacidad`;
CREATE TABLE IF NOT EXISTS `tbldiscapacidad` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(50) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbldiscapacidad`
--

INSERT INTO `tbldiscapacidad` (`ID`, `Nombre`) VALUES
(1, 'No posee'),
(2, 'Mental'),
(3, 'Motriz'),
(4, 'Auditiva'),
(5, 'Visceral');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbldistancia`
--

DROP TABLE IF EXISTS `tbldistancia`;
CREATE TABLE IF NOT EXISTS `tbldistancia` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(50) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbldistancia`
--

INSERT INTO `tbldistancia` (`ID`, `Nombre`) VALUES
(1, '5K'),
(2, '10K'),
(3, '21K'),
(4, '25K'),
(5, '30K'),
(6, '35K'),
(7, '40K'),
(8, '42K'),
(9, '8K'),
(10, '7K'),
(11, '6K'),
(12, '9K'),
(13, '20K');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbleventos`
--

DROP TABLE IF EXISTS `tbleventos`;
CREATE TABLE IF NOT EXISTS `tbleventos` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `IDDiciplina` int(11) NOT NULL,
  `Nombre` varchar(255) NOT NULL,
  `Lugar` varchar(255) NOT NULL,
  `Comienza` date NOT NULL,
  `Monto` double NOT NULL,
  `Hora` time NOT NULL,
  PRIMARY KEY (`ID`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbleventos`
--

INSERT INTO `tbleventos` (`ID`, `IDDiciplina`, `Nombre`, `Lugar`, `Comienza`, `Monto`, `Hora`) VALUES
(1, 2, 'RURAL BIKE - 20 JUNIO - CCIS 2018', 'PREDIO CORPORACION DE COMERCIO BAHIA BLANCA', '2018-07-20', 350, '10:00:00'),
(2, 1, 'PRIMERA JORNADA TORNEO EVITA', 'PISTA MUNICIPAL LAS TRES VILLAS - BAHIA BLANCA', '2018-06-23', 350, '10:30:00'),
(3, 1, 'ACTITUD SOLIDARIA 2018 4 EDIC. - NECOCHEA 2018', 'CASINO DE NECOCHEA', '2018-07-08', 350, '08:00:00'),
(4, 1, 'CARRERA DE LOS PAISAJES Y LAS TORTAS FRITAS', 'LAGUNA DE PUAN', '2018-06-15', 350, '09:00:00'),
(5, 1, 'MONTE CORRE AVENTURA INVIERNO 2018', 'EL PINAR DE MONTE HERMOSO', '2018-07-27', 450, '10:00:00'),
(6, 1, '3 CARRERA ATLETICA UNIV. CATOLICA CUYO Y 3 DOG', 'FELIPE VALAZQUEZ NRO. 471 - SAN LUIS', '2018-08-04', 500, '20:00:00'),
(7, 2, 'RURAL BIKE DE INVIERNO - MONTE HERMOSO 2018', 'EL PINAR DE MONTE HERMOSO', '2018-08-11', 250, '09:30:00'),
(8, 1, 'LA CARRERA DEL DIA DEL TRABAJADOR DE TELEVISION ', 'PARQUE DE MAYO - BAHIA BLANCA', '2018-08-12', 400, '08:00:00'),
(9, 1, 'DESAFIO SIERRAS CURA MALAL 2018 - PIGUE -', 'PIGUE', '2018-07-19', 450, '08:00:00'),
(10, 2, '3 RURAL BIKE Y CICLOTURISMO-PEDRO LURO 2018-', 'CONCENTRACION EN CALLE 22 Y 3', '2018-09-19', 300, '09:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblinscripciones`
--

DROP TABLE IF EXISTS `tblinscripciones`;
CREATE TABLE IF NOT EXISTS `tblinscripciones` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `IDRegistro` int(11) NOT NULL,
  `IDEventos` int(11) NOT NULL,
  `IDDistancia` int(11) NOT NULL,
  `IDPago` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=40 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tblinscripciones`
--

INSERT INTO `tblinscripciones` (`ID`, `IDRegistro`, `IDEventos`, `IDDistancia`, `IDPago`) VALUES
(39, 13, 9, 2, 1),
(38, 13, 3, 2, 1),
(37, 13, 2, 2, 1),
(36, 13, 4, 2, 1),
(35, 11, 2, 2, 1),
(34, 11, 7, 2, 1),
(33, 11, 6, 2, 1),
(32, 12, 8, 3, 1),
(31, 11, 5, 2, 1),
(30, 11, 4, 2, 1),
(29, 11, 10, 2, 1),
(28, 11, 3, 3, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblpago`
--

DROP TABLE IF EXISTS `tblpago`;
CREATE TABLE IF NOT EXISTS `tblpago` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(50) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tblpago`
--

INSERT INTO `tblpago` (`ID`, `Nombre`) VALUES
(1, 'PAGO FACIL'),
(2, 'RAPIPAGO'),
(3, 'RED LINK');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblprovincias`
--

DROP TABLE IF EXISTS `tblprovincias`;
CREATE TABLE IF NOT EXISTS `tblprovincias` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Letra` varchar(1) NOT NULL,
  `Nombre` varchar(100) NOT NULL,
  `NombreAb` varchar(100) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tblprovincias`
--

INSERT INTO `tblprovincias` (`ID`, `Letra`, `Nombre`, `NombreAb`) VALUES
(1, 'C', 'CAPITAL FEDERAL               ', 'CAP FED'),
(2, 'B', 'BUENOS AIRES', 'BS AS'),
(3, 'K', 'CATAMARCA', 'CATAM'),
(4, 'H', 'CHACO                         ', 'CHACO'),
(5, 'U', 'CHUBUT                        ', 'CHUBUT'),
(6, 'X', 'CORDOBA                       ', 'CORDOBA'),
(7, 'W', 'CORRIENTES                    ', 'CTES'),
(8, 'E', 'ENTRE RIOS                    ', 'E RIOS'),
(9, 'P', 'FORMOSA                       ', 'FORMOSA'),
(10, 'Y', 'JUJUY                         ', 'JUJUY'),
(11, 'L', 'LA PAMPA', 'LA PAMPA'),
(12, 'F', 'LA RIOJA                      ', 'LA RIOJA'),
(13, 'M', 'MENDOZA                       ', 'MENDOZA'),
(14, 'N', 'MISIONES                      ', 'MISIONES'),
(15, 'Q', 'NEUQUEN                       ', 'NEUQUEN'),
(16, 'R', 'RIO NEGRO                     ', 'R NEGRO'),
(17, 'A', 'SALTA                         ', 'SALTA'),
(18, 'J', 'SAN JUAN                      ', 'SAN JUAN'),
(19, 'D', 'SAN LUIS                      ', 'SAN LUIS'),
(20, 'Z', 'SANTA CRUZ                    ', 'STA CRUZ'),
(21, 'S', 'SANTA FE                      ', 'STA FE'),
(22, 'G', 'SANTIAGO DEL ESTERO           ', 'SGO EST'),
(23, 'V', 'TIERRA DEL FUEGO E ISLAS DEL A.SUR     ', 'T FUEGO'),
(24, 'T', 'TUCUMAN                  ', 'TUCUMAN');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblregistro`
--

DROP TABLE IF EXISTS `tblregistro`;
CREATE TABLE IF NOT EXISTS `tblregistro` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Apellido` varchar(50) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `IDTipoDoc` int(11) NOT NULL,
  `NroDoc` int(10) NOT NULL,
  `Sexo` varchar(1) NOT NULL,
  `IDTalle` int(11) NOT NULL,
  `Telefono` varchar(50) NOT NULL,
  `Domicilio` varchar(50) NOT NULL,
  `IDProvincia` int(11) NOT NULL,
  `IDLocalidad` int(11) NOT NULL,
  `FechaNacimiento` date NOT NULL,
  `IDDiscapacidad` int(11) NOT NULL,
  `IDAgrupacion` int(11) NOT NULL,
  `Email` varchar(50) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tblregistro`
--

INSERT INTO `tblregistro` (`ID`, `Apellido`, `Nombre`, `IDTipoDoc`, `NroDoc`, `Sexo`, `IDTalle`, `Telefono`, `Domicilio`, `IDProvincia`, `IDLocalidad`, `FechaNacimiento`, `IDDiscapacidad`, `IDAgrupacion`, `Email`) VALUES
(11, 'Barragan', 'Mario', 1, 31561977, 'M', 2, '154163438', '12 de Octubre 1137 5to C', 2, 1, '2018-06-12', 1, 1, 'marioebarragan@gmail.com'),
(12, 'Barragan', 'Martin', 1, 32561977, 'M', 2, '2914163438', '12 de Octubre 1137', 2, 1, '2018-07-10', 1, 22, 'martinbarragan@gmail.com'),
(13, 'Perez', 'Marcelo', 1, 33561977, 'M', 2, '2914163438', '12 de Octubre 1137 5to C', 2, 1, '2018-07-11', 1, 5, 'marioebarragan@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbltalle`
--

DROP TABLE IF EXISTS `tbltalle`;
CREATE TABLE IF NOT EXISTS `tbltalle` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(100) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbltalle`
--

INSERT INTO `tbltalle` (`ID`, `Nombre`) VALUES
(1, 'S'),
(2, 'M'),
(3, 'L'),
(4, 'XL'),
(5, 'XXL');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbltipodocumento`
--

DROP TABLE IF EXISTS `tbltipodocumento`;
CREATE TABLE IF NOT EXISTS `tbltipodocumento` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(50) NOT NULL,
  `NombreAb` varchar(50) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbltipodocumento`
--

INSERT INTO `tbltipodocumento` (`ID`, `Nombre`, `NombreAb`) VALUES
(1, 'DOCUMENTO NACIONAL DE IDENTIDAD', 'DNI'),
(2, 'LIBRETA DE ENROLAMIENTO', 'LE'),
(3, 'LIBRETA CIVICA', 'LC'),
(4, 'CEDULA DE IDENTIDAD', 'CI'),
(5, 'PASAPORTE', 'PASAPORTE');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
