-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-03-2020 a las 03:21:28
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `farmasolep`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(6, 'Medicina General'),
(7, 'Odontologia'),
(8, 'Laboratorio');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle`
--

CREATE TABLE `detalle` (
  `cantidad` int(10) DEFAULT NULL,
  `descripcion` varchar(100) DEFAULT NULL,
  `id` int(10) NOT NULL,
  `id_factura` int(10) DEFAULT NULL,
  `precio` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `detalle`
--

INSERT INTO `detalle` (`cantidad`, `descripcion`, `id`, `id_factura`, `precio`) VALUES
(1, 'odontologia', 1, 1, '20.00'),
(1, 'odontograma', 2, 1, '20.00'),
(1, 'odontologia', 3, 1, '20.00'),
(1, 'fsdfds', 4, 1, '20.00'),
(1, 'odontologia', 5, 1, '20.00'),
(2, 'dasdas', 6, 1, '20.00'),
(5, 'ddsdsadsad', 7, 1, '10.00'),
(6, 'gfdgfdg', 8, 1, '10.00'),
(1, 'connsulta odontologica', 9, 2, '5.00'),
(1, 'examenes laboratorio', 10, 3, '20.00'),
(1, 'laboratorio', 11, 4, '20.00'),
(1, 'laboratorio', 12, 5, '20.00'),
(2, 'examenes', 13, 6, '20.00'),
(1, 'odontologia', 14, 7, '20.00'),
(2, 'dasdsad', 15, 8, '20.00'),
(1, 'examenes completos de laboratorio', 16, 9, '20.00'),
(5, 'dsadsa', 17, 10, '20.00'),
(2, 'dsad', 18, 11, '20.00'),
(1, 'servicio odontologico', 19, 12, '20.00'),
(1, 'examen de laboratorio', 20, 13, '20.00'),
(1, 'Servicio de Laboratorio', 21, 14, '20.00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `facturas`
--

CREATE TABLE `facturas` (
  `descripcion` varchar(100) DEFAULT NULL,
  `fecha` datetime DEFAULT NULL,
  `id` int(10) NOT NULL,
  `id_paciente` int(10) DEFAULT NULL,
  `monto` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `facturas`
--

INSERT INTO `facturas` (`descripcion`, `fecha`, `id`, `id_paciente`, `monto`) VALUES
('dsadsad', '2020-03-04 20:42:12', 1, 20, '60.00'),
('dfasfsafasf', '2020-03-04 20:45:47', 2, 20, '5.00'),
('dasdsadsad', '2020-03-04 20:54:00', 3, 20, '20.00'),
('dasdsadasdsadsad', '2020-03-04 20:57:50', 4, 20, '20.00'),
('dasdsadsad', '2020-03-04 20:58:47', 5, 20, '20.00'),
('dasdsadsad', '2020-03-04 21:01:56', 6, 20, '40.00'),
('dasdsadsa', '2020-03-04 21:09:54', 7, 20, '20.00'),
('dasdsad', '2020-03-04 21:11:29', 8, 20, '40.00'),
('asddasdsadas', '2020-03-04 21:14:43', 9, 20, '20.00'),
('dfasdsad', '2020-03-04 21:16:08', 10, 20, '100.00'),
('dsadsadas', '2020-03-04 21:17:43', 11, 20, '40.00'),
('dsadsad', '2020-03-04 21:20:08', 12, 79, '20.00'),
('laboratorio examen', '2020-03-04 21:52:37', 13, 20, '20.00'),
('Servicio de Laboratorio', '2020-03-04 22:15:34', 14, 20, '20.00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fichamedic`
--

CREATE TABLE `fichamedic` (
  `id` int(11) NOT NULL,
  `medic_id` int(11) DEFAULT NULL,
  `pacient_id` int(11) DEFAULT NULL,
  `age` int(3) DEFAULT NULL,
  `ocupation` varchar(45) DEFAULT NULL,
  `sex` varchar(45) DEFAULT NULL,
  `date_born` date DEFAULT NULL,
  `nacionality` varchar(45) DEFAULT NULL,
  `est_civil` varchar(45) DEFAULT NULL,
  `mot_consult` varchar(45) DEFAULT NULL,
  `antecedents` varchar(45) DEFAULT NULL,
  `fathers` int(10) DEFAULT NULL,
  `brothers` int(10) DEFAULT NULL,
  `sons` int(10) DEFAULT NULL,
  `liveP` int(10) DEFAULT NULL,
  `liveH` int(10) DEFAULT NULL,
  `liveS` int(10) DEFAULT NULL,
  `dbt` varchar(45) DEFAULT NULL,
  `hta` varchar(45) DEFAULT NULL,
  `tbc` varchar(45) DEFAULT NULL,
  `gamelar` varchar(45) DEFAULT NULL,
  `othersHF` text DEFAULT NULL,
  `alcohol` varchar(250) DEFAULT NULL,
  `tabaco` varchar(250) DEFAULT NULL,
  `drugs` varchar(250) DEFAULT NULL,
  `eat` varchar(250) DEFAULT NULL,
  `dipsia` varchar(250) DEFAULT NULL,
  `diuresis` varchar(250) DEFAULT NULL,
  `catarsis` varchar(250) DEFAULT NULL,
  `somnia` varchar(250) DEFAULT NULL,
  `othersF` text DEFAULT NULL,
  `child` varchar(45) DEFAULT NULL,
  `adult` varchar(45) DEFAULT NULL,
  `quirurgycs` varchar(45) DEFAULT NULL,
  `traumatologycs` varchar(45) DEFAULT NULL,
  `alergy` varchar(45) DEFAULT NULL,
  `othersP` text DEFAULT NULL,
  `tratamient` mediumtext NOT NULL,
  `date_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `fichamedic`
--

INSERT INTO `fichamedic` (`id`, `medic_id`, `pacient_id`, `age`, `ocupation`, `sex`, `date_born`, `nacionality`, `est_civil`, `mot_consult`, `antecedents`, `fathers`, `brothers`, `sons`, `liveP`, `liveH`, `liveS`, `dbt`, `hta`, `tbc`, `gamelar`, `othersHF`, `alcohol`, `tabaco`, `drugs`, `eat`, `dipsia`, `diuresis`, `catarsis`, `somnia`, `othersF`, `child`, `adult`, `quirurgycs`, `traumatologycs`, `alergy`, `othersP`, `tratamient`, `date_at`) VALUES
(20, 9, 20, NULL, 'estudiante', 'masculino', '1997-07-04', 'ecuatoriano', 'soltero', 'dolor de estomago', 'dolor, vomito y diarrea', 2, 2, 0, 2, 2, 0, 'no', 'no', 'no', 'no', '', 'no', 'no', 'no', 'saludable', 'mo', 'no', 'no', 'no', '', '', '', '', '', 'ninguna', '', 'tomar  medicamento cada 8 horas', '2019-12-12'),
(22, 10, 21, NULL, 'artista', 'Masculino', '1950-07-10', 'ecuatoriano', 'casado', 'dolor de estomago', 'sdasd', 0, 2, 7, 0, 2, 7, 'si', 'si', 'no', 'no', '', 'en la adultes', 'es fumador', 'no', 'dieta', 'no', 'no', 'no', 'no', '', 'normal', 'normal', 'no intervenciÃ³n quirÃºrgica', 'no', 'no', '', 'tratamiento pendiente', '2019-12-12'),
(26, 10, 33, NULL, 'estudiante', 'Masculino', '2019-12-17', 'ecuatoriano', 'soltero', 'dolor de estomago', 'dolor y mareos', 2, 2, 2, 2, 2, 2, 'no', 'no', 'si', 'no', '', 'no', 'no', 'mo', 'normal', 'no', 'no', 'no', 'no', '', 'normal', 'normal', 'no', 'no', 'ninguna', '', 'reposo', '2019-12-17'),
(28, 10, 39, NULL, 'estudiante', 'Masculino', '2020-01-15', 'ecuatoriano', 'soltero', 'dolor de estomago', 'saSas', 2, 2, 2, 0, 0, 0, 'no', 'no', 'no', 'no', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'segir la receta', '2020-01-15'),
(38, 10, 82, NULL, 'estudiante', 'Masculino', '1998-08-14', 'ecuatoriana', 'soltera', 'dolor de estomago', 'dolor de cabeza', 2, 0, 0, 2, 0, 0, 'no', 'no', 'no', 'no', '', 'no ', 'no', 'no', 'buena', 'no', 'no', 'no', 'no', '', '', '', '', '', '', '', 'dsadsadasd', '2020-03-01');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `medic`
--

CREATE TABLE `medic` (
  `id` int(11) NOT NULL,
  `dni` varchar(50) DEFAULT NULL,
  `nameDoc` varchar(50) DEFAULT NULL,
  `lastnameDoc` varchar(50) DEFAULT NULL,
  `gender` varchar(1) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` datetime DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `medic`
--

INSERT INTO `medic` (`id`, `dni`, `nameDoc`, `lastnameDoc`, `gender`, `email`, `address`, `phone`, `is_active`, `created_at`, `category_id`) VALUES
(8, '0145678945', 'Cristian', 'Brito', NULL, 'alex@gmail.com', 'av. san bartolome y francisco', '2456789', 1, '2019-11-28 17:42:28', 8),
(9, '0145612331', 'Paulina', 'Mendes Cabrera', NULL, 'juan@gmail.com', 'av loja y remigio crespo', '2456789', 1, '2019-11-28 17:47:33', 7),
(10, '0177564655', 'Cesar ', 'Consuegra Cavacas', NULL, 'xime@hotmail.com', 'av. espaÃ±a y vicente rocafuerte', '2778494', 1, '2019-11-28 17:48:44', 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `odontograma`
--

CREATE TABLE `odontograma` (
  `id` int(10) NOT NULL,
  `observaciones` varchar(100) DEFAULT NULL,
  `diente` int(10) DEFAULT NULL,
  `tratamientoyenfermedad` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `odontograma`
--

INSERT INTO `odontograma` (`id`, `observaciones`, `diente`, `tratamientoyenfermedad`) VALUES
(1, '10', NULL, 'Amalgama'),
(2, '10', NULL, 'Caries'),
(10, NULL, 18, 'endodoncia'),
(17, NULL, 18, 'Amalgama'),
(18, NULL, 18, 'Amalgama'),
(19, 'mal estado', 18, 'Amalgama'),
(20, 'mal estado', 18, 'Amalgama'),
(21, 'limpiesa del diente', 18, 'Caries'),
(22, 'limpiesa', 18, 'Caries'),
(23, 'en la cara izquierda y centro del diente', 18, 'Amalgama'),
(24, 'cara frontal y derecha del diente', 18, 'Amalgama'),
(25, 'en  mal estado', 18, 'Amalgama'),
(26, 'mal estado', 18, 'Amalgama'),
(27, 'limpiesa', 17, 'Caries'),
(28, 'mal estado', 18, 'Amalgama'),
(29, 'mal estado', 18, 'Amalgama'),
(30, 'cambiar diente', 18, 'Amalgama'),
(31, 'mal estado recomiento cambiarlo', 18, 'Amalgama'),
(32, 'en la corona e inferior', 0, 'Amalgama'),
(33, 'dasdasdsda', 18, 'Amalgama'),
(34, '', 0, 'Amalgamadiente=18observaciones=dfdsfsdfsfsdf'),
(35, '', 0, 'Amalgama||diente=18||observaciones=vgdfgfsdfs'),
(36, '', 0, 'Amalgama|diente=18|observaciones=dfsdfdsf'),
(37, 'inferior e izquierdo', 18, 'Amalgama'),
(38, 'fdasdfasdfdasfafasdfafr', 18, 'Amalgama'),
(39, 'hgfgadfafaf', 17, 'Amalgama'),
(40, 'caries profunda en la corona', 16, 'Caries'),
(41, 'xxxxxxxxxxxxxxxxxxxxxx', 18, 'Amalgama'),
(42, 'fsdfsdfsdfdsfffffffffffffffffffffff', 17, 'Amalgama'),
(43, 'cacascasdacasc', 16, 'Endodoncia'),
(44, 'edweaeea', 26, 'Endodoncia'),
(45, 'en corona e izquierdo', 18, 'Amalgama'),
(46, 'todo el diente', 17, 'Amalgama'),
(47, 'corona', 16, 'Caries'),
(48, 'corona', 15, 'Caries'),
(49, 'derecha', 14, 'Caries'),
(50, 'todo el diente', 38, 'Caries'),
(51, 'aplicar resina el el molar', 28, 'Resina'),
(52, 'corona molar', 27, 'Corona'),
(53, 'corona molar', 36, 'Corona'),
(54, 'corona y bordes externos del diente', 18, 'Amalgama'),
(55, 'caries en corona', 17, 'Caries'),
(56, 'caries en corona', 37, 'Caries'),
(57, 'caries en corona', 44, 'Caries'),
(58, 'sustitucion de la piesa', 18, 'Amalgama'),
(59, 'limpieza', 28, 'Amalgama'),
(60, 'limpiesa del diente', 17, 'Caries'),
(61, 'en corona y alrededor', 18, 'Caries'),
(62, 'en corona', 47, 'Caries'),
(63, 'implane', 37, 'Ausente'),
(64, 'corona e inferior', 18, 'Amalgama'),
(65, 'corona ', 17, 'Amalgama'),
(66, 'todo el diente', 15, 'Caries'),
(67, 'implante del diente 18 en mal estado', 18, 'Implante'),
(68, 'implante de la piesa 27 ', 27, 'Implante');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `odontology`
--

CREATE TABLE `odontology` (
  `id` int(11) NOT NULL,
  `medic_id` int(11) DEFAULT NULL,
  `pacient_id` int(11) DEFAULT NULL,
  `age` int(3) DEFAULT NULL,
  `ocupation` varchar(45) DEFAULT NULL,
  `sex` varchar(45) DEFAULT NULL,
  `date_born` date DEFAULT NULL,
  `nacionality` varchar(45) DEFAULT NULL,
  `est_civil` varchar(45) DEFAULT NULL,
  `mot_consult` varchar(45) DEFAULT NULL,
  `antecedents` varchar(45) DEFAULT NULL,
  `alcohol` varchar(250) DEFAULT NULL,
  `tabaco` varchar(250) DEFAULT NULL,
  `drugs` varchar(250) DEFAULT NULL,
  `eat` varchar(250) DEFAULT NULL,
  `othersP` text DEFAULT NULL,
  `tratamient` mediumtext NOT NULL,
  `date_at` date NOT NULL,
  `otro` varchar(45) DEFAULT NULL,
  `otroA` varchar(45) DEFAULT NULL,
  `ptratamiento` varchar(45) DEFAULT NULL,
  `sick` varchar(45) DEFAULT NULL,
  `alergy` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `odontology`
--

INSERT INTO `odontology` (`id`, `medic_id`, `pacient_id`, `age`, `ocupation`, `sex`, `date_born`, `nacionality`, `est_civil`, `mot_consult`, `antecedents`, `alcohol`, `tabaco`, `drugs`, `eat`, `othersP`, `tratamient`, `date_at`, `otro`, `otroA`, `ptratamiento`, `sick`, `alergy`) VALUES
(37, 8, 81, 21, 'estudiante', 'Femenino', '1992-08-05', 'ecuatoriana', 'soltera', 'limpiesa dental', 'si', 'no', 'no', 'no', 'no', '', ' se le mandara un recetario', '2020-03-01', '', '', 'no se sabe', 'diabetes', 'penisilina'),
(39, 8, 82, 25, 'estudiante', 'Femenino', '1998-05-08', 'ecuatoriana', 'soltera', 'limpiesa dental', 'no', 'no', 'no', 'no', 'no', '', 'cuidado intensivo', '2020-03-06', '', 'no', 'no', 'Enf.Cardio Vascular', 'on'),
(40, 8, 79, 36, 'estudiante', 'Masculino', '1983-05-08', 'ecuatoriano', 'soltero', 'Cirugia dental ', 'no', 'no', 'no', 'no', 'no', '', 'reposo y no comidas heladas', '2020-03-09', '', 'no es alergico', 'no', 'Enf.Cardio Vascular', ''),
(48, 8, 80, 35, 'estudiante', 'Femenino', '1985-06-08', 'ecuatoriana', 'soltera', 'braquetz y limpiesa dental', 'no', 'no', 'no', 'no', 'no', '', 'comidas liquidas no dulces', '2020-03-09', '', '', 'no se sabe', 'diabetes', 'anestesia local'),
(49, 8, 65, 45, 'Ama de casa', 'Femenino', '1935-05-08', 'ecuatoriana', 'casada', 'limpiesa dental', 'no', 'no', 'no', 'no', 'balanceada', '', 'caries y limpieza superficial', '2020-03-10', '', '', 'no se sabe', 'Enf.Cardio Vascular', 'penisilina');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pacient`
--

CREATE TABLE `pacient` (
  `id` int(11) NOT NULL,
  `dni` varchar(10) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `lastname` varchar(50) DEFAULT NULL,
  `represent` varchar(45) DEFAULT NULL,
  `gender` varchar(1) DEFAULT NULL,
  `age` int(2) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `phone` int(10) DEFAULT NULL,
  `sick` varchar(500) DEFAULT NULL,
  `medicaments` varchar(500) DEFAULT NULL,
  `alergy` varchar(500) DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` datetime DEFAULT NULL,
  `user_public_id` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pacient`
--

INSERT INTO `pacient` (`id`, `dni`, `name`, `lastname`, `represent`, `gender`, `age`, `email`, `address`, `phone`, `sick`, `medicaments`, `alergy`, `is_active`, `created_at`, `user_public_id`) VALUES
(20, '0107356511', 'Marlon', 'leon', '', 'h', 22, 'marlonslb@outlook.com', 'av don bosco y federico proaño', 2883800, 'problemas respiratorios', 'jarabe mucoticos', 'ninguna', 1, '2019-12-12 15:19:37', NULL),
(21, '0100750058', 'Luis ', 'leon', '', 'h', 72, 'leoncety@hotmail.com', 'av tamaris y Ordoñez lazo', 2883456, 'Bronquitis', ' Bronco dilatador', 'ninguna', 1, '2019-12-12 17:07:44', NULL),
(22, '0100364317', ' KARINA ELISABET ', 'CABRERA NARVÁEZ', NULL, 'm', 25, 'kary-c93@hotmail.com', 'JARDINES DE ODILA - JORGE ADUM ', 988552, 'gastritis', 'omeprazol de 50 mg', 'ninguna', 1, '2019-12-12 18:52:37', NULL),
(23, '0100369487', ' GLADIS LORENA ', 'PEÑAFIEL PEÑAFIEL', NULL, 'm', 50, 'glore87@hotmail.com', 'TANGUARIN CALLE PRINCIPAL ', 969524, 'bronquitis', 'ninguno', 'a la lana', 1, '2019-12-12 18:54:57', NULL),
(24, '0100389588', ' MONICA YOMAIRA ', 'BEDOYA CAMPOS', NULL, 'm', 32, 'monkis-92@live.com', ' SANTA ROSA DEL TEJAR - FRENTE A LA IGLESIA ', 612143, 'disnia', 'ninguno', 'ninguna', 1, '2019-12-12 18:57:45', NULL),
(25, '0100343970', 'EVELYN ANDREA ', 'TERAN ACOSTA ', NULL, 'm', 21, 'EVELYNTERAN_1992@HOTMAIL.COM', 'HERNAN GONZALES DE SAA Y JUANA ATABALIPA ', 651823, 'gripe comun', 'brontocil flux', 'ninguna', 1, '2019-12-12 19:00:11', NULL),
(26, '0100318111', ' EDUARDO FELIX ', ' JIMENEZ QUICHIMBO ', NULL, 'h', 16, 'EDOJBSC@HOTMAIL.COM', 'AV. ATAHUALPA Y HUANCAVILCA ', 6526552, 'epatitis ', 'epatol de 10mg', 'asma', 1, '2019-12-12 19:03:33', NULL),
(27, '0993375341', 'ROLANDO ISMAEL ', '', NULL, 'h', 25, 'ISMA654321@YAHOO.ES', ' SAN ANTONIO - COLEGIO DANIEL REYES ', 993375, 'amigdalitis', 'buprex 50mg', 'ninguna', 1, '2019-12-12 19:05:28', NULL),
(28, '0100416921', 'EDISON DANILO', ' GUANDINANGO CARTAGENA', NULL, 'h', 32, 'edy.guandinango@hotmal.com', '', 9095104, 'sinusitis', 'sinutux 40mg', 'ninguna', 1, '2019-12-12 19:07:14', NULL),
(29, '0100332497', 'MARICELA FERNANDA ', 'ORMAZA MOREJÓN', '', 'm', 18, 'fercha.12@gmail.com', 'LA ESPERANZA - BARRIO SAN PEDRO ', 991032, 'ninguna', 'ninguno', 'ninguno', 1, '2019-12-12 19:09:02', NULL),
(30, '0100134348', 'MARCELO EDUARDO ', 'MERA CHAPI ', NULL, 'h', 22, 'Mrceloeduardomera@yahoo.com', 'PRINCESA PACHA ', 982639, 'dolor de estomago', 'buscapina compuesta', 'ninguna', 1, '2019-12-12 19:10:49', NULL),
(31, '0100385091', 'JOSE JAVIER', 'BORJA LUCIANO ', NULL, 'h', 15, 'xavyi.odh@hotmail.com', 'BOLIVAR VINUEZA Y BARRIO JUNIN', 989136, 'dolor de cabeza', 'aspirina 20mg', 'al polvo', 1, '2019-12-12 19:12:39', NULL),
(32, '0100356185', 'CARLA MARIELA ', 'TORRES MELO ', NULL, 'm', 16, 'carla.tm92@hotmail.com', 'SECTOR HOSTERIA CHORLAVI ', 989136, 'brinquitis', 'bronco dilatador jarabe', 'ninguna', 1, '2019-12-12 19:14:05', NULL),
(33, '0100328942', 'CKLEVER ANDRES ', 'CAMPOS TULCÁN ', NULL, 'h', 31, 'andrew130391@gmail.com', 'SANTA ROSA DEL TEJAR - FRENTE A LA IGLESIA ', 959546, 'dolor de cabeza', 'ninguno', 'ninguna', 1, '2019-12-12 19:16:28', NULL),
(34, '0100311010', 'PATRICIO BLADIMIR ', 'TIGSE MORENO', NULL, 'h', 33, 'balita191@hotmail.com', 'BARRIO SAN PEDRO CALLE GALO PLAZA LAZO ', 6601414, 'ulcera pancreal', 'kufer-forte', 'ninguna', 1, '2019-12-12 19:18:34', NULL),
(35, '0100185374', 'VINICIO RAFAEL', 'JATIVA SEVILLANO ', '', 'h', 45, 'viniciojat68@yahoo.es', 'AV. VICTOR MANUEL PEÑAHERRERA ', 6442564, ' hepatitis alimentaria', 'oralite', 'ninguna', 1, '2019-12-12 19:21:11', NULL),
(36, '0100371944', 'ROMEL MARCELO ', 'GUIDO PÁEZ ', NULL, 'h', 55, 'ROMEOGUU@HOTMAIL.COM', 'CDLA LA VICTORIA - AV. PRINCIPAL ', 6000245, 'Asma bronquial', 'inalador', 'polvo', 1, '2019-12-12 19:22:57', NULL),
(38, '0117746846', 'Jose', 'Perez', '', 'h', 60, 'jose@gmail.com', 'av españa y francisco moscoso', 984115684, 'Disnia', 'ninguno', 'ninguna', 1, '2019-12-16 22:46:47', NULL),
(39, '0107500861', 'Pedro', 'Palacios', NULL, 'h', 25, '', 'av. san bartolome y francisco', 2445789, '', '', '', 1, '2020-01-13 15:53:45', NULL),
(40, '0103687539', 'javier agustin', 'mongrovejo', NULL, 'h', 25, NULL, 'presidente cordova y huaynacap', 995194, NULL, NULL, NULL, 1, '2020-01-22 09:50:28', NULL),
(41, '0106011223', 'adrian', 'polilla', NULL, 'h', 32, NULL, 'av. solano', 2434234, NULL, NULL, NULL, 1, '2020-01-22 09:55:12', NULL),
(42, '0103687539', 'javier', 'agustin', NULL, 'h', 15, NULL, 'sta ana', 953243, NULL, NULL, NULL, 1, '2020-01-22 10:09:26', NULL),
(43, '0100947191', 'manuel carlos', 'suqui suqui', NULL, 'h', 22, NULL, 'quingeo ', 4035314, NULL, NULL, NULL, 1, '2020-01-22 10:14:12', NULL),
(44, '0105391973', 'jorge eduardo', 'chicaisa sarmiento', NULL, 'h', 33, NULL, 'francisco de orellana', 981348, NULL, NULL, NULL, 1, '2020-01-22 10:16:29', NULL),
(45, '0105828750', 'silvia estefania', 'arias lituma', NULL, 'm', 40, NULL, 'julio torres belisario andrade', 979007, NULL, NULL, NULL, 1, '2020-01-22 10:18:01', NULL),
(46, '0106094006', 'daniela catalina', 'maldonado cuesta', NULL, 'm', 45, NULL, 'la laguna del sol', 990014, NULL, NULL, NULL, 1, '2020-01-22 10:26:44', NULL),
(47, '0100413129', 'Rosa Maria', 'Cando Guzman', NULL, 'm', 55, NULL, 'turi', 4151932, NULL, NULL, NULL, 1, '2020-01-22 10:29:22', NULL),
(48, '0102495652', 'cristian paul', 'Rea Rea', NULL, 'h', 60, NULL, '', 2889511, NULL, NULL, NULL, 1, '2020-01-22 10:31:29', NULL),
(49, '0101205631', 'Celia Margarita', 'Arpi Ayora', NULL, 'm', 32, NULL, 'San miguel', 2896526, NULL, NULL, NULL, 1, '2020-01-22 10:36:04', NULL),
(50, '0150802593', 'Luis Alberto', 'Tarama Glarza', NULL, 'h', 45, NULL, 'AV SOLANAO Y 27 DE FEBRERO', 984727, NULL, NULL, NULL, 1, '2020-01-22 10:38:14', NULL),
(51, '0105409742', 'Rosa Maria', 'Cumbe Guanaquizz', NULL, '', 54, NULL, 'los laureles', 984338, NULL, NULL, NULL, 1, '2020-01-22 10:39:56', NULL),
(52, '0105060412', 'Maria Erilnda', 'Fernandez Cumbe', NULL, 'm', 30, NULL, 'San Antonio  Tabana', 2948885, NULL, NULL, NULL, 1, '2020-01-22 10:41:52', NULL),
(53, '0103604286', 'German Leonidas', 'Baculima Chimbo', NULL, 'h', 21, NULL, 'Autopista', 980788, NULL, NULL, NULL, 1, '2020-01-22 10:45:06', NULL),
(54, '0105519177', 'Teresa Beatriz', 'Cambisaca Encalada', NULL, 'm', 25, NULL, 'Santa Ana', 980035, NULL, NULL, NULL, 1, '2020-01-22 10:47:04', NULL),
(55, '0107217705', 'Cristina Abigail', 'Solis Viri', NULL, 'm', 12, NULL, 'Huaynacapac Gapal', 9936, NULL, NULL, NULL, 1, '2020-01-22 10:49:45', NULL),
(56, '0101145115', 'Olga Beatriz', 'Torrez Padilla', NULL, 'm', 30, NULL, 'Ciudadela casa para todos', 2870086, NULL, NULL, NULL, 1, '2020-01-22 10:51:21', NULL),
(57, '0151563350', 'Ivana Lucia', 'Torres Cedillo', NULL, 'm', 31, NULL, 'Panamericana Sur', 992089, NULL, NULL, NULL, 1, '2020-01-22 10:54:57', NULL),
(58, '0101114221', 'Jesus Sofia ', 'Guaman Cornejo', NULL, 'm', 35, NULL, 'El valle', 4041569, NULL, NULL, NULL, 1, '2020-01-22 10:58:04', NULL),
(59, '0103564910', 'Maria Ester', 'Pindo Lojano', NULL, 'm', 38, NULL, 'Quinjeo', 988301, NULL, NULL, NULL, 1, '2020-01-22 10:59:41', NULL),
(60, '0150575520', 'Tania Beatriz', 'Lojano Zhumi', NULL, 'm', 22, NULL, 'Turi', 986500, NULL, NULL, NULL, 1, '2020-01-22 11:02:05', NULL),
(61, '0102026473', 'Cecili Jenny', 'Quito Vazcones', NULL, 'm', 23, NULL, 'turi', 2887376, NULL, NULL, NULL, 1, '2020-01-22 11:03:17', NULL),
(62, '0130898370', 'America Alexandra', 'Vera Chica', NULL, 'm', 45, NULL, 'calle Dolores j torres', 98307, NULL, NULL, NULL, 1, '2020-01-22 11:05:52', NULL),
(63, '0703105924', 'Segundo Antonio', 'Quindisaca Chillogallo', NULL, 'h', 26, NULL, 'Quingeo', 994852, NULL, NULL, NULL, 1, '2020-01-22 11:07:16', NULL),
(64, '0101638544', 'Maria Aurora', 'Ortega Ayala', NULL, 'm', 30, NULL, 'calle canton gualaceo', 2884615, NULL, NULL, NULL, 1, '2020-01-22 11:08:36', NULL),
(65, '0104799093', 'Rosa Maclavia', 'Morocho Morocho', NULL, 'h', 22, NULL, 'Andres Beltran y Federico ProaÃ±o', 939236, NULL, NULL, NULL, 1, '2020-01-22 11:10:36', NULL),
(66, '0105789521', 'Alexandra', 'Costa', NULL, 'm', 25, NULL, 'av donbosco y fernando de aragon', 2456789, NULL, NULL, NULL, 1, '2020-01-27 16:10:40', NULL),
(67, '0177654651', 'Karen', 'Perez', '', 'm', 32, NULL, 'av españa y francisco moscoso', 4558163, NULL, NULL, NULL, 1, '2020-01-27 16:14:18', NULL),
(68, '0145121315', 'juliana', 'Allavaca', NULL, 'm', 45, NULL, 'av. solano', 4558123, NULL, NULL, NULL, 1, '2020-01-27 16:18:47', NULL),
(71, '0106846465', 'Juan Alverto', 'Leon Calle', 'lulia leon', 'h', 8, NULL, 'av remigio', 4551311, NULL, NULL, NULL, 1, '2020-01-27 21:09:05', NULL),
(72, '0155613211', 'Diego Fernando', 'Leon Nivicela', '', 'h', 22, NULL, 'av Quenedy y francisco moscoso', 2456789, NULL, NULL, NULL, 1, '2020-01-27 21:12:33', NULL),
(73, '0117551231', 'Diego', 'Vaculima', '', 'h', 32, NULL, 'av. españa y vicente rocafuerte', 984453216, NULL, NULL, NULL, 1, '2020-01-30 19:05:41', NULL),
(74, '0196122312', 'Martin', 'Lopez', '', 'h', 45, NULL, 'av españa y francisco moscoso', 2456789, NULL, NULL, NULL, 1, '2020-01-30 19:31:14', NULL),
(75, '0144812313', 'Ramon', 'valdez', '', 'h', 35, NULL, 'av loja y remigio crespo', 987456123, NULL, NULL, NULL, 1, '2020-02-08 13:55:22', NULL),
(76, '0105789456', 'cristian', 'leon', '', 'h', 12, NULL, 'av españa', 984158557, NULL, NULL, NULL, 1, NULL, NULL),
(77, '0107356511', 'cristian', 'tapia', '', 'M', 0, NULL, 'av solano', 984158557, NULL, NULL, NULL, 1, NULL, NULL),
(78, '0107356511', 'cristian', 'tapia', '', 'M', 0, NULL, 'av solano', 984158557, NULL, NULL, NULL, 1, NULL, NULL),
(79, '0188145652', 'Alejandro', 'Paredez', '', 'h', 45, NULL, 'av. solano', 984458666, NULL, NULL, NULL, 1, '2020-02-18 21:52:10', NULL),
(80, '0155789456', 'Fernanda', 'Quezada', '', 'm', 25, NULL, 'av españa', 4889456, NULL, NULL, NULL, 1, '2020-02-18 21:56:36', NULL),
(81, '0014482313', 'Luisa', 'Mora', '', 'm', 28, NULL, 'sector totoracocha', 944831231, NULL, NULL, NULL, 1, '2020-02-18 22:16:20', NULL),
(82, '0177855111', 'Susan', 'Montenegro', '', 'm', 24, NULL, 'av. Don Bosco y federico', 2445678, NULL, NULL, NULL, 1, '2020-02-18 22:20:50', NULL),
(83, '0448961123', 'Hummer', 'Leonidas', '', 'h', 45, 'humm@gmail.com', 'av.Mexico y Compostela', 947152164, NULL, NULL, NULL, 1, '2020-03-04 17:04:19', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfil`
--

CREATE TABLE `perfil` (
  `direccion` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `id` int(10) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `propietario` varchar(45) DEFAULT NULL,
  `tax` smallint(6) DEFAULT NULL,
  `telefono` varchar(100) DEFAULT NULL,
  `web` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `perfil`
--

INSERT INTO `perfil` (`direccion`, `email`, `id`, `nombre`, `propietario`, `tax`, `telefono`, `web`) VALUES
('Avenida 10 de Agosto y Adolfo Torres, Cuenca ', 'comunicacion@farmasol.gob.ec', 1, '', 'Farmasol EP', 14, '07 / 2 817 - 718\r\n<br>\r\n07 / 2 885 - 443\r\n<br>\r\n07 / 2 813 - 767', 'www.farmasol.gob.ec');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reservation`
--

CREATE TABLE `reservation` (
  `id` int(11) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `note` mediumtext DEFAULT NULL,
  `date_at` varchar(50) DEFAULT NULL,
  `time_at` varchar(50) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `pacient_id` int(11) DEFAULT NULL,
  `symtoms` mediumtext DEFAULT NULL,
  `sick` mediumtext DEFAULT NULL,
  `medicaments` mediumtext DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `medic_id` int(11) DEFAULT NULL,
  `category` varchar(45) NOT NULL,
  `status_id` int(11) DEFAULT 1,
  `category_child_id` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `reservation`
--

INSERT INTO `reservation` (`id`, `title`, `note`, `date_at`, `time_at`, `created_at`, `pacient_id`, `symtoms`, `sick`, `medicaments`, `user_id`, `medic_id`, `category`, `status_id`, `category_child_id`) VALUES
(29, 'limpiesa dental', 'limpiesa dental', '2019-12-17', '13:18', '2019-12-17 13:18:56', 26, 'ninguno', '29', '38', 27, 9, '7', 5, NULL),
(30, 'examen fisico', 'examenes de sangre, eses y orina', '2019-12-17', '17:31', '2019-12-17 17:32:46', 30, 'ninguno', '29', '38', 29, 9, '8', 5, NULL),
(31, 'cita con el doctor juaquin sanchez', '', '2019-12-17', '18:00', '2019-12-17 17:37:19', 28, '', '29', '38', 29, 9, '7', 5, NULL),
(32, 'colon irritable', '', '2019-12-17', '11:00', '2019-12-17 17:40:58', 36, '', '29', '38', 29, 10, '6', 5, NULL),
(33, 'dolor de cabeza', '', '2019-12-17', '10:20', '2019-12-17 17:42:31', 22, '', '29', '38', 29, 10, '6', 5, NULL),
(34, 'limpiesa dental', '', '2019-12-17', '09:00', '2019-12-17 17:43:49', 32, '', '29', '38', 29, 9, '7', 5, NULL),
(37, 'dolor de cabeza', 'dsadsad', '2019-12-18', '22:41', '2019-12-18 22:41:55', 24, 'dasdas', '29', '38', 27, 10, '6', 5, NULL),
(38, 'examen completo', 'dsad', '2019-12-18', '23:00', '2019-12-18 22:43:16', 28, 'dasd', '29', '38', 27, 8, '8', 5, NULL),
(39, 'dolor de muelas', 'paciente con dolor molar', '2019-12-19', '18:50', '2019-12-19 18:50:40', 32, 'dolor, hincharon', '29', '38', 28, 9, '7', 5, NULL),
(40, 'consulta con la Dr Ximena', 'no', '2019-12-19', '13:00', '2019-12-19 18:53:44', 31, 'no', '29', '38', 28, 10, '6', 5, NULL),
(41, 'cita con el medico', 'paciente con resfrios', '2020-01-02', '10:36', '2020-01-02 10:37:11', 25, 'ddsadasd', '29', '38', 28, 8, '6', 5, NULL),
(42, 'dolor de estomago', NULL, '2020-01-13', '16:14', '2020-01-13 16:15:00', 39, NULL, NULL, NULL, 27, 10, '6', 5, NULL),
(43, 'dolor de cabeza', NULL, '2020-01-13', '12:00', '2020-01-13 16:32:41', 38, NULL, NULL, NULL, 27, 10, '6', 5, NULL),
(44, 'cita con el medico', NULL, '2020-01-15', '16:33', '2020-01-15 16:33:17', 25, NULL, NULL, NULL, 27, 10, '6', 5, NULL),
(45, 'dolor de cabeza', NULL, '2020-01-08', '18:33', '2020-01-15 18:33:41', 36, NULL, NULL, NULL, 27, 8, '6', 5, NULL),
(46, 'dolor de cabeza', NULL, '2020-01-15', '18:34', '2020-01-15 18:34:53', 36, NULL, NULL, NULL, 27, 8, '6', 5, NULL),
(47, 'chequeo dental', NULL, '2020-01-15', '11:00', '2020-01-15 18:35:45', 35, NULL, NULL, NULL, 27, 9, '7', 5, NULL),
(48, 'examen completo', NULL, '2020-01-16', '16:43', '2020-01-16 19:43:56', 34, NULL, NULL, NULL, 28, 8, '8', 5, NULL),
(49, 'consulta medica', NULL, '2020-01-22', '09:51', '2020-01-22 09:51:45', 40, NULL, NULL, NULL, 27, 10, '6', 5, NULL),
(50, 'consulta con el doctor', NULL, '2020-01-22', '10:30', '2020-01-22 09:58:44', 41, NULL, NULL, NULL, 27, 9, '6', 5, NULL),
(51, 'consulta don el doctor', NULL, '2020-01-22', '11:10', '2020-01-22 10:10:05', 42, NULL, NULL, NULL, 27, 10, '6', 5, NULL),
(52, 'consulta doctor', NULL, '2020-01-22', '09:00', '2020-01-22 10:15:05', 43, NULL, NULL, NULL, 27, 9, '6', 5, NULL),
(53, 'cita con el doctor consuegra', NULL, '2020-02-18', '16:22', '2020-01-27 16:22:48', 40, NULL, NULL, NULL, 27, 10, '6', 5, 6),
(54, 'dolor de cabeza', NULL, '2020-01-27', '17:22', '2020-01-27 16:25:11', 41, NULL, NULL, NULL, 27, 9, '6', 5, NULL),
(55, 'dolor de estomago', NULL, '2020-01-27', '18:00', '2020-01-27 21:13:20', 72, NULL, NULL, NULL, 27, 10, '6', 5, NULL),
(56, 'dolor de estomago', NULL, '2020-01-30', '15:00', '2020-01-30 15:19:06', 72, NULL, NULL, NULL, 27, 10, '6', 5, NULL),
(57, 'dolor de cabeza', NULL, '2020-01-30', '16:00', '2020-01-30 15:19:36', 68, NULL, NULL, NULL, 27, 9, '6', 5, NULL),
(58, 'dolor de cabeza', NULL, '2020-02-13', '10:30', '2020-02-13 10:29:44', 71, NULL, NULL, NULL, 27, 10, '6', 5, NULL),
(59, 'dolor de estomago', NULL, '2020-02-13', '11:00', '2020-02-13 10:30:15', 68, NULL, NULL, NULL, 27, 9, '6', 5, NULL),
(60, 'dolor de estomago', NULL, '2020-02-12', '16:00', '2020-02-13 16:24:35', 74, NULL, NULL, NULL, 27, 9, '6', 5, NULL),
(61, 'dolor de cabeza', NULL, '2020-02-13', '16:00', '2020-02-13 16:27:55', 73, NULL, NULL, NULL, 27, 10, '6', 5, NULL),
(62, 'dolor de estomago y gripe', NULL, '2020-02-17', '14:30', '2020-02-17 14:30:07', 35, NULL, NULL, NULL, 27, 10, '6', 5, NULL),
(63, 'dolor de cabeza y mareos', NULL, '2020-02-17', '15:30', '2020-02-17 14:48:48', 73, NULL, NULL, NULL, 27, 9, '6', 5, NULL),
(65, 'dolor de cabeza', NULL, '2020-02-18', '12:00', '2020-02-18 12:05:27', 74, NULL, NULL, NULL, 27, 10, '6', 5, NULL),
(77, 'dolor de cabeza', NULL, '2020-02-18', '13:00', '2020-02-18 12:31:49', 75, NULL, NULL, NULL, NULL, 10, '6', 5, NULL),
(81, 'limpieza dental', NULL, '2020-02-19', '08:00', '2020-02-18 12:44:54', 67, NULL, NULL, NULL, NULL, 8, '7', 5, NULL),
(82, 'calzaciones', NULL, '2020-02-18', '09:00', '2020-02-18 12:47:09', 61, NULL, NULL, NULL, NULL, 8, '7', 5, NULL),
(83, 'dolor de garganta y fiebre', NULL, '2020-02-18', '17:00', '2020-02-18 12:59:33', 59, NULL, NULL, NULL, NULL, 10, '6', 5, NULL),
(84, 'dolor de cabeza', NULL, '2020-02-19', '08:00', '2020-02-18 22:22:05', 82, NULL, NULL, NULL, NULL, 10, '6', 5, NULL),
(85, 'limpieza dental', NULL, '2020-02-19', '10:00', '2020-02-18 22:27:16', 81, NULL, NULL, NULL, NULL, 8, '7', 5, NULL),
(86, 'dolor de estomago', NULL, '2020-03-04', '17:00', '2020-03-04 17:12:33', 83, NULL, NULL, NULL, 27, 10, '6', 5, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `rol` varchar(45) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `rol`, `user_id`) VALUES
(1, 'administrador', 0),
(2, 'medico', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `status`
--

CREATE TABLE `status` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `status`
--

INSERT INTO `status` (`id`, `name`) VALUES
(5, 'Aplicada');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_documentos`
--

CREATE TABLE `tbl_documentos` (
  `id_documento` int(10) NOT NULL,
  `nombre_archivo` varchar(45) NOT NULL,
  `tamanio` int(45) NOT NULL,
  `tipo` varchar(45) NOT NULL,
  `titulo` varchar(45) NOT NULL,
  `descripcion` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl_documentos`
--

INSERT INTO `tbl_documentos` (`id_documento`, `nombre_archivo`, `tamanio`, `tipo`, `titulo`, `descripcion`) VALUES
(1, 'odontogramaH.pdf', 127594, 'application/pdf', 'odontogrma', 'odontograma'),
(2, 'odontogramaH.pdf', 127594, 'application/pdf', 'odontogrma', 'ewqeqe'),
(3, 'odontogramaH.pdf', 127594, 'application/pdf', 'odontogrma', 'ewqeqe'),
(4, 'odontogramaH.pdf', 127594, 'application/pdf', 'odontogrma', 'ewqeqe'),
(5, 'odontogramaH.pdf', 127594, 'application/pdf', 'odontogrma', 'ewqeqe'),
(6, 'odontogramaH.pdf', 127594, 'application/pdf', 'odontogrma', 'ewqeqe'),
(7, 'odontogramaH.pdf', 127594, 'application/pdf', 'odontogrma', 'ewqeqe'),
(8, 'odontogramaH.pdf', 127594, 'application/pdf', 'odontogrma', 'ewqeqe'),
(9, 'odontogramaH.pdf', 127594, 'application/pdf', 'odontogrma', 'ewqeqe'),
(10, 'TÉRMINOS DE LICENCIA DEL SOFTWARE DE MICROSOF', 515185, 'application/pdf', '', ''),
(11, 'TÉRMINOS DE LICENCIA DEL SOFTWARE DE MICROSOF', 515185, 'application/pdf', '', ''),
(12, 'terminosycondicioneswin2019.pdf', 5424592, 'application/pdf', '', ''),
(13, 'PLAN ESTRATEGICO FARMASOL 2013-2016.pdf', 3231567, 'application/pdf', '', ''),
(14, 'PLAN ESTRATEGICO FARMASOL 2013-2016.pdf', 3231567, 'application/pdf', '', ''),
(15, 'Configuración y uso de Crond. - Alcance Libre', 42639, 'application/pdf', '', ''),
(16, 'contrato-servidores-dedicados.pdf', 172721, 'application/pdf', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tmp`
--

CREATE TABLE `tmp` (
  `cantidad` int(10) DEFAULT NULL,
  `descripcion` varchar(100) DEFAULT NULL,
  `id` int(10) NOT NULL,
  `precio` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tratamient`
--

CREATE TABLE `tratamient` (
  `id` int(11) NOT NULL,
  `des_tratamient` mediumtext NOT NULL,
  `complications` varchar(250) NOT NULL,
  `des_complications` mediumtext NOT NULL,
  `observations` mediumtext NOT NULL,
  `date_at` date NOT NULL,
  `medic_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `lastname` varchar(50) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(60) DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT 1,
  `is_admin` tinyint(1) DEFAULT 0,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id`, `username`, `name`, `lastname`, `email`, `password`, `is_active`, `is_admin`, `created_at`) VALUES
(27, 'administrador', 'marlon', 'leon', 'marlonslb@outlook.com', '90b9aa7e25f80cf4f64e990b78a9fc5ebd6cecad', 1, 1, NULL),
(28, 'dr.juan', 'Juan', 'Perez', 'juan@gmail.com', 'adcd7048512e64b48da55b027577886ee5a36350', 1, 0, NULL),
(29, 'dr pedro', 'Pedro', 'Valle', 'pedro@hotmail.com', '5139fcb743565a93ba49568086a3376794cbc101', 1, 0, NULL),
(30, 'dra.paulina', 'Paulina', 'Brito', '', 'adcd7048512e64b48da55b027577886ee5a36350', 1, 0, NULL),
(31, 'dr.Cesar', 'Cesar', 'Consuegra', '', 'adcd7048512e64b48da55b027577886ee5a36350', 1, 0, NULL),
(32, 'dr.Cristian', 'Cristian', 'Brito', '', 'adcd7048512e64b48da55b027577886ee5a36350', 1, 0, NULL),
(33, 'msleon', 'marlon', 'leon', NULL, 'adcd7048512e64b48da55b027577886ee5a36350', 1, 1, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user_public`
--

CREATE TABLE `user_public` (
  `user_id` int(10) NOT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `status` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `user_public`
--

INSERT INTO `user_public` (`user_id`, `username`, `password`, `status`) VALUES
(1, 'msleon', '202cb962ac59075b964b07152d234b70', 'y'),
(2, 'danny', 'e10adc3949ba59abbe56e057f20f883e', 'y'),
(4, 'diego', '202cb962ac59075b964b07152d234b70', 'y'),
(5, 'juan', '202cb962ac59075b964b07152d234b70', 'y'),
(11, 'susan', '202cb962ac59075b964b07152d234b70', 'y'),
(12, 'pedro', '202cb962ac59075b964b07152d234b70', 'y');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `detalle`
--
ALTER TABLE `detalle`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `facturas`
--
ALTER TABLE `facturas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `fichamedic`
--
ALTER TABLE `fichamedic`
  ADD PRIMARY KEY (`id`),
  ADD KEY `medic_id` (`medic_id`),
  ADD KEY `pacient_id` (`pacient_id`);

--
-- Indices de la tabla `medic`
--
ALTER TABLE `medic`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indices de la tabla `odontograma`
--
ALTER TABLE `odontograma`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `odontology`
--
ALTER TABLE `odontology`
  ADD PRIMARY KEY (`id`),
  ADD KEY `medic_id` (`medic_id`),
  ADD KEY `pacient_id` (`pacient_id`);

--
-- Indices de la tabla `pacient`
--
ALTER TABLE `pacient`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_public_id` (`user_public_id`);

--
-- Indices de la tabla `perfil`
--
ALTER TABLE `perfil`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `status_id` (`status_id`),
  ADD KEY `pacient_id` (`pacient_id`),
  ADD KEY `medic_id` (`medic_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tbl_documentos`
--
ALTER TABLE `tbl_documentos`
  ADD PRIMARY KEY (`id_documento`);

--
-- Indices de la tabla `tmp`
--
ALTER TABLE `tmp`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tratamient`
--
ALTER TABLE `tratamient`
  ADD PRIMARY KEY (`id`),
  ADD KEY `medic_id` (`medic_id`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `user_public`
--
ALTER TABLE `user_public`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `detalle`
--
ALTER TABLE `detalle`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `facturas`
--
ALTER TABLE `facturas`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `fichamedic`
--
ALTER TABLE `fichamedic`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT de la tabla `medic`
--
ALTER TABLE `medic`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `odontograma`
--
ALTER TABLE `odontograma`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT de la tabla `odontology`
--
ALTER TABLE `odontology`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT de la tabla `pacient`
--
ALTER TABLE `pacient`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT de la tabla `perfil`
--
ALTER TABLE `perfil`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `status`
--
ALTER TABLE `status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `tbl_documentos`
--
ALTER TABLE `tbl_documentos`
  MODIFY `id_documento` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `tmp`
--
ALTER TABLE `tmp`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `tratamient`
--
ALTER TABLE `tratamient`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT de la tabla `user_public`
--
ALTER TABLE `user_public`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `fichamedic`
--
ALTER TABLE `fichamedic`
  ADD CONSTRAINT `fichamedic_ibfk_1` FOREIGN KEY (`medic_id`) REFERENCES `medic` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fichamedic_ibfk_2` FOREIGN KEY (`pacient_id`) REFERENCES `pacient` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `medic`
--
ALTER TABLE `medic`
  ADD CONSTRAINT `medic_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `odontology`
--
ALTER TABLE `odontology`
  ADD CONSTRAINT `odontology_ibfk_1` FOREIGN KEY (`medic_id`) REFERENCES `medic` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `odontology_ibfk_2` FOREIGN KEY (`pacient_id`) REFERENCES `pacient` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `pacient`
--
ALTER TABLE `pacient`
  ADD CONSTRAINT `pacient_ibfk_1` FOREIGN KEY (`user_public_id`) REFERENCES `user_public` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `reservation_ibfk_1` FOREIGN KEY (`status_id`) REFERENCES `status` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reservation_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reservation_ibfk_3` FOREIGN KEY (`pacient_id`) REFERENCES `pacient` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reservation_ibfk_4` FOREIGN KEY (`medic_id`) REFERENCES `medic` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tratamient`
--
ALTER TABLE `tratamient`
  ADD CONSTRAINT `medic_id` FOREIGN KEY (`medic_id`) REFERENCES `medic` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
