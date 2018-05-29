-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-05-2018 a las 19:42:45
-- Versión del servidor: 10.1.25-MariaDB
-- Versión de PHP: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mydb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actaparticipacion1`
--

CREATE TABLE `actaparticipacion1` (
  `idactaparticipacion1` int(11) NOT NULL,
  `idcomisioncontrataciones` int(11) NOT NULL,
  `pliego_idpliego` int(11) NOT NULL,
  `idempresas` int(11) NOT NULL,
  `idsolicitud` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actaparticipacion2`
--

CREATE TABLE `actaparticipacion2` (
  `idactaparticipacion2` int(11) NOT NULL,
  `idactaparticipacion1` int(11) NOT NULL,
  `empresas_idempresas` int(11) NOT NULL,
  `consignacion` varchar(3) COLLATE latin1_spanish_ci DEFAULT NULL COMMENT 'SI\nNO\nN/A',
  `idsolicitud` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actaparticipacion3`
--

CREATE TABLE `actaparticipacion3` (
  `idactaparticipacion3` int(11) NOT NULL,
  `idactaparticipacion1` int(11) NOT NULL,
  `idsolicitud` int(11) NOT NULL,
  `idpliegoaspectos` int(11) NOT NULL,
  `recaudado` varchar(3) COLLATE latin1_spanish_ci DEFAULT NULL COMMENT 'si\nno\nn/a'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actaparticipacion4`
--

CREATE TABLE `actaparticipacion4` (
  `idactaparticipacion4` int(11) NOT NULL,
  `idactaparticipacion1` int(11) NOT NULL,
  `idsolicitud` int(11) NOT NULL,
  `recaudado` varchar(3) COLLATE latin1_spanish_ci DEFAULT NULL COMMENT 'si\nno\nn/a'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actaparticipacion5`
--

CREATE TABLE `actaparticipacion5` (
  `idactaparticipacion5` int(11) NOT NULL,
  `actaparticipacion1_idactaparticipacion1` int(11) NOT NULL,
  `idsolicitud` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actaparticipacion6`
--

CREATE TABLE `actaparticipacion6` (
  `idactaparticipacion7` int(11) NOT NULL,
  `idempresas` int(11) NOT NULL,
  `monto` decimal(10,2) DEFAULT NULL,
  `anticipo` int(11) DEFAULT NULL,
  `tiempoentrega` int(11) DEFAULT NULL,
  `tiempogarantia` int(11) DEFAULT NULL,
  `tipooferta` varchar(7) COLLATE latin1_spanish_ci DEFAULT NULL COMMENT 'Parcial\nTotal',
  `renglones` varchar(45) COLLATE latin1_spanish_ci DEFAULT NULL COMMENT 'rango de renglones ofertados',
  `idsolicitud` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actaparticipacion7`
--

CREATE TABLE `actaparticipacion7` (
  `idactaparticipacion6` int(11) NOT NULL,
  `idactaparticipacion1` int(11) NOT NULL,
  `idsolicitud` int(11) NOT NULL,
  `idpliegom` int(11) NOT NULL,
  `recaudado` varchar(3) COLLATE latin1_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `adt`
--

CREATE TABLE `adt` (
  `idadt` int(11) NOT NULL,
  `idempresas` int(11) NOT NULL,
  `idadttipo` int(11) NOT NULL,
  `idlibroproceso` int(11) NOT NULL,
  `solicitud_idsolicitud` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `adttipo`
--

CREATE TABLE `adttipo` (
  `idadttipo` int(11) NOT NULL,
  `descripcionadt` varchar(45) COLLATE latin1_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `analisisfin`
--

CREATE TABLE `analisisfin` (
  `idanalisisfin` int(11) NOT NULL,
  `periodo` int(11) DEFAULT NULL COMMENT 'eño fiscal evaluado',
  `cxc` decimal(10,2) DEFAULT NULL COMMENT 'cuenta por cobrar',
  `ac` decimal(10,2) DEFAULT NULL COMMENT 'activo circulante',
  `at` decimal(10,2) DEFAULT NULL COMMENT 'activo total',
  `pc` decimal(10,2) DEFAULT NULL COMMENT 'pasivo circulante',
  `pt` decimal(10,2) DEFAULT NULL COMMENT 'pasivo total',
  `p` decimal(10,2) DEFAULT NULL COMMENT 'patrimonio',
  `it` decimal(10,2) DEFAULT NULL COMMENT 'ingresos totales',
  `un` decimal(10,2) DEFAULT NULL COMMENT 'utilidad neta',
  `s` decimal(10,2) DEFAULT NULL COMMENT 'solvencia',
  `su` decimal(10,2) DEFAULT NULL COMMENT 'Solvencia ajuste',
  `rotcxc` decimal(10,2) DEFAULT NULL COMMENT 'ROTACION DE CUENTAS POR COBRAR',
  `rotcxcu` decimal(10,2) DEFAULT NULL COMMENT 'rotacion de cuentas por cobrar ajuste',
  `redsact` decimal(10,2) DEFAULT NULL COMMENT 'rendimiento s/act',
  `redsactu` decimal(10,2) DEFAULT NULL,
  `rentpatri` decimal(10,2) DEFAULT NULL COMMENT 'rendimiento patrimonial',
  `rentpatriu` decimal(10,2) DEFAULT NULL COMMENT 'rendimiento patrimonial',
  `endeud` decimal(10,2) DEFAULT NULL COMMENT 'endeudamiento',
  `endeudu` decimal(10,2) DEFAULT NULL COMMENT 'endeudamiento ajuste',
  `capnet` decimal(10,2) DEFAULT NULL,
  `factrend` decimal(10,2) DEFAULT NULL,
  `vipc` decimal(10,2) DEFAULT NULL,
  `cfec` decimal(10,2) DEFAULT NULL,
  `nfec` decimal(10,2) DEFAULT NULL,
  `idempresas` int(11) NOT NULL,
  `idsolicitud` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comision`
--

CREATE TABLE `comision` (
  `idcomision` int(11) NOT NULL,
  `decreto` varchar(45) COLLATE latin1_spanish_ci DEFAULT NULL,
  `fechadecreto` date DEFAULT NULL,
  `decretoactivo` tinyint(4) DEFAULT NULL COMMENT '0 decreto derogado\n1 decreto activo'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comitecontrataciones`
--

CREATE TABLE `comitecontrataciones` (
  `idcomisioncontrataciones` int(11) NOT NULL,
  `idfuncionaros` int(11) NOT NULL,
  `activo` tinyint(4) DEFAULT NULL COMMENT '0 inactivo\n1 activo',
  `tipomiembro` varchar(9) COLLATE latin1_spanish_ci DEFAULT NULL COMMENT '-Principal\n-Suplente',
  `idcomision` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dispdetalle`
--

CREATE TABLE `dispdetalle` (
  `iddispdetalle` int(11) NOT NULL,
  `numerop` varchar(45) COLLATE latin1_spanish_ci DEFAULT NULL,
  `denominacionp` varchar(45) COLLATE latin1_spanish_ci DEFAULT NULL,
  `montop` decimal(10,2) DEFAULT NULL,
  `fuente` int(11) NOT NULL,
  `solicitud` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresas`
--

CREATE TABLE `empresas` (
  `idempresas` int(11) NOT NULL,
  `nombreempre` varchar(45) COLLATE latin1_spanish_ci DEFAULT NULL,
  `rif` varchar(10) COLLATE latin1_spanish_ci DEFAULT NULL,
  `telefono` varchar(45) COLLATE latin1_spanish_ci DEFAULT NULL,
  `email` varchar(45) COLLATE latin1_spanish_ci DEFAULT NULL,
  `objetosocial` longtext COLLATE latin1_spanish_ci COMMENT 'Lo que hace la empresa',
  `representantelegal` varchar(45) COLLATE latin1_spanish_ci DEFAULT NULL,
  `cedula` varchar(45) COLLATE latin1_spanish_ci DEFAULT NULL,
  `registromer` longtext COLLATE latin1_spanish_ci,
  `nro` varchar(45) COLLATE latin1_spanish_ci DEFAULT NULL,
  `tomo` varchar(45) COLLATE latin1_spanish_ci DEFAULT NULL,
  `fechatomo` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entesolicitante`
--

CREATE TABLE `entesolicitante` (
  `identesolicitante` int(11) NOT NULL,
  `nombreente` longtext COLLATE latin1_spanish_ci
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estatus`
--

CREATE TABLE `estatus` (
  `idestatus` int(11) NOT NULL,
  `observacion` longtext COLLATE latin1_spanish_ci,
  `fechaestatus` date DEFAULT NULL,
  `idtipoestatus` int(11) NOT NULL,
  `idsolicitud` int(11) NOT NULL,
  `puntero` tinyint(4) DEFAULT NULL COMMENT 'puntero para saber que estatus es el actual, cuando tenga 1 es el estatus es el actualizado, cuando tenga 0 el estatus fenecio pero queda en el historico de los estus'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `evaluacionaspectos`
--

CREATE TABLE `evaluacionaspectos` (
  `idevaluacionaspectos` int(11) NOT NULL,
  `resultado` int(11) DEFAULT NULL COMMENT 'resultado cuantitativo se coloca el valor numerico de puntos que obtuvo',
  `califcualitativa` varchar(45) COLLATE latin1_spanish_ci DEFAULT NULL COMMENT 'calificacion cualitativa:\n-Califica\n-No Califica\nel aspecto tecnico',
  `puntcualitativa` varchar(45) COLLATE latin1_spanish_ci DEFAULT NULL COMMENT 'puntiacion cualitativa:\n-Superior\n-Igual\n-Inferior\na la puntuacion minima establecida en el pliego',
  `resultcualitativo` varchar(45) COLLATE latin1_spanish_ci DEFAULT NULL COMMENT 'resultado cualitativo:\n-Le permite\n-Le impide\npasar a la evaluacion financiera',
  `idpliegoaspectos` int(11) NOT NULL,
  `empresas_idempresas` int(11) NOT NULL,
  `idsolicitud` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `evamuestra`
--

CREATE TABLE `evamuestra` (
  `idevamuestra` int(11) NOT NULL,
  `resultado` int(11) DEFAULT NULL,
  `idpliegom` int(11) NOT NULL,
  `idempresas` int(11) NOT NULL,
  `idsolicitud` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fuente`
--

CREATE TABLE `fuente` (
  `idfuente` int(11) NOT NULL,
  `fuentenom` varchar(45) COLLATE latin1_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `funcionaros`
--

CREATE TABLE `funcionaros` (
  `idfuncionaros` int(11) NOT NULL,
  `nombrefun` varchar(45) COLLATE latin1_spanish_ci DEFAULT NULL,
  `apellidofun` varchar(45) COLLATE latin1_spanish_ci DEFAULT NULL,
  `telefonofun` varchar(45) COLLATE latin1_spanish_ci DEFAULT NULL,
  `correofun` varchar(45) COLLATE latin1_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `funcionaros`
--

INSERT INTO `funcionaros` (`idfuncionaros`, `nombrefun`, `apellidofun`, `telefonofun`, `correofun`) VALUES
(1, 'Johnny', 'Cruz', '04147601103', 'jc181079@gmail.com'),
(2, 'Kisbel', 'Osorio', '444', 'kosorio@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `garantiaoferta`
--

CREATE TABLE `garantiaoferta` (
  `idgarantiaoferta` int(11) NOT NULL,
  `emisor` varchar(45) COLLATE latin1_spanish_ci DEFAULT NULL COMMENT 'nombre del banco o aseguradora que emitio la garantia',
  `monto` decimal(10,2) DEFAULT NULL,
  `tipogarantia` varchar(45) CHARACTER SET big5 DEFAULT NULL COMMENT 'Cheque de Gerencia\nCheque de la Empresa\nFianza de Licitacion',
  `codigogarantia` varchar(45) COLLATE latin1_spanish_ci DEFAULT NULL,
  `idempresas` int(11) NOT NULL,
  `idpliego` int(11) NOT NULL,
  `idsolicitud` int(11) NOT NULL,
  `codigo` varchar(45) COLLATE latin1_spanish_ci DEFAULT NULL,
  `enteemisor` varchar(45) COLLATE latin1_spanish_ci DEFAULT NULL,
  `montogarantia` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libroproceso`
--

CREATE TABLE `libroproceso` (
  `idlibroproceso` int(11) NOT NULL,
  `codproceso` varchar(18) COLLATE latin1_spanish_ci DEFAULT NULL,
  `fechalibro` date DEFAULT NULL,
  `modalidades` int(11) NOT NULL,
  `usuarios` int(11) NOT NULL,
  `idsolicitud` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libros`
--

CREATE TABLE `libros` (
  `idlibros` int(11) NOT NULL,
  `nombrelibro` varchar(45) COLLATE latin1_spanish_ci DEFAULT NULL,
  `observacionlibro` varchar(45) COLLATE latin1_spanish_ci DEFAULT NULL,
  `prefijo` varchar(10) COLLATE latin1_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modalidades`
--

CREATE TABLE `modalidades` (
  `idmodalidades` int(11) NOT NULL,
  `nommodalidad` varchar(20) COLLATE latin1_spanish_ci DEFAULT NULL,
  `prefijo` varchar(34) COLLATE latin1_spanish_ci DEFAULT NULL,
  `correlativo` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modulos`
--

CREATE TABLE `modulos` (
  `idmodulos` int(11) NOT NULL,
  `nommodulo` varchar(45) COLLATE latin1_spanish_ci DEFAULT NULL,
  `observacionmod` varchar(45) COLLATE latin1_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `modulos`
--

INSERT INTO `modulos` (`idmodulos`, `nommodulo`, `observacionmod`) VALUES
(1, 'permisologia', 'modulo en el cual se postularan los privilegi'),
(2, 'funcionaros', 'modulo de funcionarios'),
(3, 'modulos', 'seccion en donde se registran los modulos del');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `otroslibros`
--

CREATE TABLE `otroslibros` (
  `idotroslibros` int(11) NOT NULL,
  `libros` int(11) NOT NULL,
  `codlibro` varchar(20) COLLATE latin1_spanish_ci DEFAULT NULL,
  `fechalibro` date DEFAULT NULL,
  `libroproceso` int(11) NOT NULL,
  `idsolicitud` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfil`
--

CREATE TABLE `perfil` (
  `idperfil` int(11) NOT NULL,
  `nombreper` varchar(45) COLLATE latin1_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `perfil`
--

INSERT INTO `perfil` (`idperfil`, `nombreper`) VALUES
(1, 'Super Usuario');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permisologia`
--

CREATE TABLE `permisologia` (
  `idpermisologia` int(11) NOT NULL,
  `incluir` tinyint(1) DEFAULT NULL,
  `consultar` tinyint(1) DEFAULT NULL,
  `modificar` tinyint(1) DEFAULT NULL,
  `eliminar` tinyint(1) DEFAULT NULL,
  `idperfil` int(11) NOT NULL,
  `idmodulos` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `permisologia`
--

INSERT INTO `permisologia` (`idpermisologia`, `incluir`, `consultar`, `modificar`, `eliminar`, `idperfil`, `idmodulos`) VALUES
(1, 1, 1, 1, 1, 1, 1),
(2, 1, 1, 1, 1, 1, 2),
(3, 1, 1, 1, 1, 1, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pliego`
--

CREATE TABLE `pliego` (
  `idpliego` int(11) NOT NULL,
  `frpinicio` date DEFAULT NULL COMMENT 'fecha de retiro de pliego inicio',
  `frpfin` date DEFAULT NULL COMMENT 'fecha de retiro de pliego fin',
  `fapinicio` date DEFAULT NULL COMMENT 'fecha de aclaratoria de pliego inicio',
  `fapfin` date DEFAULT NULL COMMENT 'fecha de claratoria fin',
  `frap` date DEFAULT NULL COMMENT 'fecha respuesta aclaratoria pliego',
  `hrap` varchar(7) COLLATE latin1_spanish_ci DEFAULT NULL,
  `fvt` date DEFAULT NULL COMMENT 'fecha de la visita tecnica',
  `lvt` longtext COLLATE latin1_spanish_ci COMMENT 'lugar de la visita tecnica',
  `hvt` varchar(7) COLLATE latin1_spanish_ci DEFAULT NULL,
  `prvt` varchar(45) COLLATE latin1_spanish_ci DEFAULT NULL COMMENT 'persona responsable visita tecnica',
  `tprvt` varchar(45) COLLATE latin1_spanish_ci DEFAULT NULL COMMENT 'telefono responsable vista tecnica',
  `hrpam` varchar(45) COLLATE latin1_spanish_ci DEFAULT NULL COMMENT 'horario retiro de pliego am',
  `hrppm` varchar(45) COLLATE latin1_spanish_ci DEFAULT NULL COMMENT 'horario retiro de pliego pm',
  `fap` date DEFAULT NULL COMMENT 'fecha del acto poublico',
  `hrsap` varchar(45) COLLATE latin1_spanish_ci DEFAULT NULL COMMENT 'horario de recepcion de sobres para actos publicos',
  `hasap` varchar(7) COLLATE latin1_spanish_ci DEFAULT NULL COMMENT 'hora de apertura de sobres acto publico',
  `mecanismo` longtext COLLATE latin1_spanish_ci,
  `pfmin` int(11) DEFAULT NULL COMMENT 'puntaje financiero minimo',
  `pfmax` int(11) DEFAULT NULL COMMENT 'puntaje financiero maximo',
  `ptmin` int(11) DEFAULT NULL COMMENT 'puntaje tecnico minimo',
  `ptmax` int(11) DEFAULT NULL COMMENT 'puntaje tecnico maximo',
  `libroproceso` int(11) NOT NULL,
  `idsolicitud` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pliegoaspectos`
--

CREATE TABLE `pliegoaspectos` (
  `idpliegoaspectos` int(11) NOT NULL,
  `pliego_idpliego` int(11) NOT NULL,
  `recaudosoferentes_idrecaudos` int(11) NOT NULL,
  `idsolicitud` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pliegom`
--

CREATE TABLE `pliegom` (
  `idpliegom` int(11) NOT NULL,
  `prenda` varchar(45) COLLATE latin1_spanish_ci DEFAULT NULL,
  `cantidad` varchar(45) COLLATE latin1_spanish_ci DEFAULT NULL,
  `und` int(11) NOT NULL,
  `pliego` int(11) NOT NULL,
  `idsolicitud` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `precalificacionfinanciera`
--

CREATE TABLE `precalificacionfinanciera` (
  `idprecalificacionfinanciera` int(11) NOT NULL,
  `idempresas` int(11) NOT NULL,
  `cfec` decimal(10,2) DEFAULT NULL,
  `nfec` varchar(7) COLLATE latin1_spanish_ci DEFAULT NULL COMMENT 'nives financiero estimado de contratacion',
  `idsolicitud` int(11) NOT NULL,
  `idlibroproceso` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recaudosoferentes`
--

CREATE TABLE `recaudosoferentes` (
  `idrecaudos` int(11) NOT NULL,
  `nombredocumento` varchar(100) COLLATE latin1_spanish_ci DEFAULT NULL,
  `definicion` longtext COLLATE latin1_spanish_ci,
  `tipodocumento` varchar(6) COLLATE latin1_spanish_ci DEFAULT NULL COMMENT 'Legal\nTecnico\nOferta',
  `puntajemin` int(11) DEFAULT NULL,
  `puntajemed` int(11) DEFAULT NULL,
  `puntajemax` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `retiropliego`
--

CREATE TABLE `retiropliego` (
  `idretiropliego` int(11) NOT NULL,
  `fecharetiro` date DEFAULT NULL,
  `idempresas` int(11) NOT NULL,
  `idpliego` int(11) NOT NULL,
  `idsolicitud` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solicitud`
--

CREATE TABLE `solicitud` (
  `idsolicitud` int(11) NOT NULL,
  `descripcion` longtext COLLATE latin1_spanish_ci,
  `objeto` longtext COLLATE latin1_spanish_ci,
  `fecha` date DEFAULT NULL,
  `entesolicitante` int(11) NOT NULL,
  `adjudicacion` varchar(7) COLLATE latin1_spanish_ci DEFAULT NULL COMMENT 'parcial o total',
  `actividad` varchar(8) COLLATE latin1_spanish_ci DEFAULT NULL COMMENT 'bienes, servicios u obra',
  `procedencia` varchar(12) COLLATE latin1_spanish_ci DEFAULT NULL COMMENT 'proyecto o requerimiento',
  `presupuestobase` decimal(10,2) DEFAULT NULL,
  `disponibilidadtotal` decimal(10,2) DEFAULT NULL,
  `modalidadestimada` varchar(7) COLLATE latin1_spanish_ci DEFAULT NULL COMMENT 'abierto\ncerrado',
  `fecharecibida` date DEFAULT NULL,
  `nroofico` varchar(45) COLLATE latin1_spanish_ci DEFAULT NULL,
  `fechaoficio` date DEFAULT NULL,
  `periodosol` int(11) DEFAULT NULL COMMENT 'periodo o año de la solicitud',
  `usuarios_idusuarios` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipoestatus`
--

CREATE TABLE `tipoestatus` (
  `idtipoestatus` int(11) NOT NULL,
  `descripcionestatus` varchar(45) COLLATE latin1_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trabajoasignado`
--

CREATE TABLE `trabajoasignado` (
  `idtrabajoasignado` int(11) NOT NULL,
  `usuarios` int(11) NOT NULL,
  `solicitud` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `und`
--

CREATE TABLE `und` (
  `idund` int(11) NOT NULL,
  `nombreund` varchar(45) COLLATE latin1_spanish_ci DEFAULT NULL,
  `valor` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `idusuarios` int(11) NOT NULL,
  `login` varchar(45) COLLATE latin1_spanish_ci DEFAULT NULL,
  `clave` varchar(45) COLLATE latin1_spanish_ci DEFAULT NULL,
  `funcionaros` int(11) NOT NULL,
  `idperfil` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idusuarios`, `login`, `clave`, `funcionaros`, `idperfil`) VALUES
(1, 'jcruz', '81dc9bdb52d04dc20036dbd8313ed055', 1, 1),
(2, 'kosorio', '81dc9bdb52d04dc20036dbd8313ed055', 2, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `actaparticipacion1`
--
ALTER TABLE `actaparticipacion1`
  ADD PRIMARY KEY (`idactaparticipacion1`),
  ADD KEY `fk_actaparticipacion_comitecontrataciones1_idx` (`idcomisioncontrataciones`),
  ADD KEY `fk_actaparticipacion1_pliego1_idx` (`pliego_idpliego`),
  ADD KEY `fk_actaparticipacion1_empresas1_idx` (`idempresas`),
  ADD KEY `fk_actaparticipacion1_solicitud1_idx` (`idsolicitud`);

--
-- Indices de la tabla `actaparticipacion2`
--
ALTER TABLE `actaparticipacion2`
  ADD PRIMARY KEY (`idactaparticipacion2`),
  ADD KEY `fk_actaparticipacion2_actaparticipacion11_idx` (`idactaparticipacion1`),
  ADD KEY `fk_actaparticipacion2_empresas1_idx` (`empresas_idempresas`),
  ADD KEY `fk_actaparticipacion2_solicitud1_idx` (`idsolicitud`);

--
-- Indices de la tabla `actaparticipacion3`
--
ALTER TABLE `actaparticipacion3`
  ADD PRIMARY KEY (`idactaparticipacion3`),
  ADD KEY `fk_actaparticipacion3_actaparticipacion11_idx` (`idactaparticipacion1`),
  ADD KEY `fk_actaparticipacion3_solicitud1_idx` (`idsolicitud`),
  ADD KEY `fk_actaparticipacion3_pliegoaspectos1_idx` (`idpliegoaspectos`);

--
-- Indices de la tabla `actaparticipacion4`
--
ALTER TABLE `actaparticipacion4`
  ADD PRIMARY KEY (`idactaparticipacion4`),
  ADD KEY `fk_actaparticipacion4_actaparticipacion11_idx` (`idactaparticipacion1`),
  ADD KEY `fk_actaparticipacion4_solicitud1_idx` (`idsolicitud`);

--
-- Indices de la tabla `actaparticipacion5`
--
ALTER TABLE `actaparticipacion5`
  ADD PRIMARY KEY (`idactaparticipacion5`),
  ADD KEY `fk_actaparticipacion5_actaparticipacion11_idx` (`actaparticipacion1_idactaparticipacion1`),
  ADD KEY `fk_actaparticipacion5_solicitud1_idx` (`idsolicitud`);

--
-- Indices de la tabla `actaparticipacion6`
--
ALTER TABLE `actaparticipacion6`
  ADD PRIMARY KEY (`idactaparticipacion7`),
  ADD KEY `fk_actaparticipacion7_empresas1_idx` (`idempresas`),
  ADD KEY `fk_actaparticipacion6_solicitud1_idx` (`idsolicitud`);

--
-- Indices de la tabla `actaparticipacion7`
--
ALTER TABLE `actaparticipacion7`
  ADD PRIMARY KEY (`idactaparticipacion6`),
  ADD KEY `fk_actaparticipacion6_actaparticipacion11_idx` (`idactaparticipacion1`),
  ADD KEY `fk_actaparticipacion7_solicitud1_idx` (`idsolicitud`),
  ADD KEY `fk_actaparticipacion7_pliegom1_idx` (`idpliegom`);

--
-- Indices de la tabla `adt`
--
ALTER TABLE `adt`
  ADD PRIMARY KEY (`idadt`),
  ADD KEY `fk_adjudicaciones_empresas1_idx` (`idempresas`),
  ADD KEY `fk_adt_adttipo1_idx` (`idadttipo`),
  ADD KEY `fk_adt_libroproceso1_idx` (`idlibroproceso`),
  ADD KEY `fk_adt_solicitud1_idx` (`solicitud_idsolicitud`);

--
-- Indices de la tabla `adttipo`
--
ALTER TABLE `adttipo`
  ADD PRIMARY KEY (`idadttipo`);

--
-- Indices de la tabla `analisisfin`
--
ALTER TABLE `analisisfin`
  ADD PRIMARY KEY (`idanalisisfin`),
  ADD KEY `fk_analisisfin_empresas1_idx` (`idempresas`),
  ADD KEY `fk_analisisfin_solicitud1_idx` (`idsolicitud`);

--
-- Indices de la tabla `comision`
--
ALTER TABLE `comision`
  ADD PRIMARY KEY (`idcomision`);

--
-- Indices de la tabla `comitecontrataciones`
--
ALTER TABLE `comitecontrataciones`
  ADD PRIMARY KEY (`idcomisioncontrataciones`),
  ADD KEY `fk_comitecontrataciones_funcionaros1_idx` (`idfuncionaros`),
  ADD KEY `fk_comitecontrataciones_comision1_idx` (`idcomision`);

--
-- Indices de la tabla `dispdetalle`
--
ALTER TABLE `dispdetalle`
  ADD PRIMARY KEY (`iddispdetalle`),
  ADD KEY `fk_dispdetalle_fuente1_idx` (`fuente`),
  ADD KEY `fk_dispdetalle_solicitud1_idx` (`solicitud`);

--
-- Indices de la tabla `empresas`
--
ALTER TABLE `empresas`
  ADD PRIMARY KEY (`idempresas`);

--
-- Indices de la tabla `entesolicitante`
--
ALTER TABLE `entesolicitante`
  ADD PRIMARY KEY (`identesolicitante`);

--
-- Indices de la tabla `estatus`
--
ALTER TABLE `estatus`
  ADD PRIMARY KEY (`idestatus`),
  ADD KEY `fk_estatus_tipoestatus1_idx` (`idtipoestatus`),
  ADD KEY `fk_estatus_solicitud1_idx` (`idsolicitud`);

--
-- Indices de la tabla `evaluacionaspectos`
--
ALTER TABLE `evaluacionaspectos`
  ADD PRIMARY KEY (`idevaluacionaspectos`),
  ADD KEY `fk_evaluacionaspectos_pliegoaspectos1_idx` (`idpliegoaspectos`),
  ADD KEY `fk_evaluacionaspectos_empresas1_idx` (`empresas_idempresas`),
  ADD KEY `fk_evaluacionaspectos_solicitud1_idx` (`idsolicitud`);

--
-- Indices de la tabla `evamuestra`
--
ALTER TABLE `evamuestra`
  ADD PRIMARY KEY (`idevamuestra`),
  ADD KEY `fk_evamuestra_pliegom1_idx` (`idpliegom`),
  ADD KEY `fk_evamuestra_empresas1_idx` (`idempresas`),
  ADD KEY `fk_evamuestra_solicitud1_idx` (`idsolicitud`);

--
-- Indices de la tabla `fuente`
--
ALTER TABLE `fuente`
  ADD PRIMARY KEY (`idfuente`);

--
-- Indices de la tabla `funcionaros`
--
ALTER TABLE `funcionaros`
  ADD PRIMARY KEY (`idfuncionaros`);

--
-- Indices de la tabla `garantiaoferta`
--
ALTER TABLE `garantiaoferta`
  ADD PRIMARY KEY (`idgarantiaoferta`),
  ADD KEY `fk_garantiaoferta_empresas1_idx` (`idempresas`),
  ADD KEY `fk_garantiaoferta_pliego1_idx` (`idpliego`),
  ADD KEY `fk_garantiaoferta_solicitud1_idx` (`idsolicitud`);

--
-- Indices de la tabla `libroproceso`
--
ALTER TABLE `libroproceso`
  ADD PRIMARY KEY (`idlibroproceso`),
  ADD UNIQUE KEY `codproceso_UNIQUE` (`codproceso`),
  ADD KEY `fk_libroproceso_modalidades1_idx` (`modalidades`),
  ADD KEY `fk_libroproceso_usuarios1_idx` (`usuarios`),
  ADD KEY `fk_libroproceso_solicitud1_idx` (`idsolicitud`);

--
-- Indices de la tabla `libros`
--
ALTER TABLE `libros`
  ADD PRIMARY KEY (`idlibros`);

--
-- Indices de la tabla `modalidades`
--
ALTER TABLE `modalidades`
  ADD PRIMARY KEY (`idmodalidades`);

--
-- Indices de la tabla `modulos`
--
ALTER TABLE `modulos`
  ADD PRIMARY KEY (`idmodulos`);

--
-- Indices de la tabla `otroslibros`
--
ALTER TABLE `otroslibros`
  ADD PRIMARY KEY (`idotroslibros`),
  ADD UNIQUE KEY `codlibro_UNIQUE` (`codlibro`),
  ADD KEY `fk_otroslibros_libros1_idx` (`libros`),
  ADD KEY `fk_otroslibros_libroproceso1_idx` (`libroproceso`),
  ADD KEY `fk_otroslibros_solicitud1_idx` (`idsolicitud`);

--
-- Indices de la tabla `perfil`
--
ALTER TABLE `perfil`
  ADD PRIMARY KEY (`idperfil`);

--
-- Indices de la tabla `permisologia`
--
ALTER TABLE `permisologia`
  ADD PRIMARY KEY (`idpermisologia`),
  ADD KEY `fk_permisologia_modulos1_idx` (`idmodulos`),
  ADD KEY `fk_permisologia_perfil1_idx` (`idperfil`);

--
-- Indices de la tabla `pliego`
--
ALTER TABLE `pliego`
  ADD PRIMARY KEY (`idpliego`),
  ADD KEY `fk_pliego_libroproceso1_idx` (`libroproceso`),
  ADD KEY `fk_pliego_solicitud1_idx` (`idsolicitud`);

--
-- Indices de la tabla `pliegoaspectos`
--
ALTER TABLE `pliegoaspectos`
  ADD PRIMARY KEY (`idpliegoaspectos`),
  ADD KEY `fk_pliegoaspectos_pliego1_idx` (`pliego_idpliego`),
  ADD KEY `fk_pliegoaspectos_recaudosoferentes1_idx` (`recaudosoferentes_idrecaudos`),
  ADD KEY `fk_pliegoaspectos_solicitud1_idx` (`idsolicitud`);

--
-- Indices de la tabla `pliegom`
--
ALTER TABLE `pliegom`
  ADD PRIMARY KEY (`idpliegom`),
  ADD KEY `fk_pliegom_und1_idx` (`und`),
  ADD KEY `fk_pliegom_pliego1_idx` (`pliego`),
  ADD KEY `fk_pliegom_solicitud1_idx` (`idsolicitud`);

--
-- Indices de la tabla `precalificacionfinanciera`
--
ALTER TABLE `precalificacionfinanciera`
  ADD PRIMARY KEY (`idprecalificacionfinanciera`),
  ADD KEY `fk_precalificacionfinanciera_empresas1_idx` (`idempresas`),
  ADD KEY `fk_precalificacionfinanciera_solicitud1_idx` (`idsolicitud`),
  ADD KEY `fk_precalificacionfinanciera_libroproceso1_idx` (`idlibroproceso`);

--
-- Indices de la tabla `recaudosoferentes`
--
ALTER TABLE `recaudosoferentes`
  ADD PRIMARY KEY (`idrecaudos`);

--
-- Indices de la tabla `retiropliego`
--
ALTER TABLE `retiropliego`
  ADD PRIMARY KEY (`idretiropliego`),
  ADD KEY `fk_retiropliego_empresas1_idx` (`idempresas`),
  ADD KEY `fk_retiropliego_pliego1_idx` (`idpliego`),
  ADD KEY `fk_retiropliego_solicitud1_idx` (`idsolicitud`);

--
-- Indices de la tabla `solicitud`
--
ALTER TABLE `solicitud`
  ADD PRIMARY KEY (`idsolicitud`),
  ADD KEY `fk_solicitud_entesolicitante_idx` (`entesolicitante`),
  ADD KEY `fk_solicitud_usuarios1_idx` (`usuarios_idusuarios`);

--
-- Indices de la tabla `tipoestatus`
--
ALTER TABLE `tipoestatus`
  ADD PRIMARY KEY (`idtipoestatus`);

--
-- Indices de la tabla `trabajoasignado`
--
ALTER TABLE `trabajoasignado`
  ADD PRIMARY KEY (`idtrabajoasignado`),
  ADD KEY `fk_trabajoasignado_usuarios1_idx` (`usuarios`),
  ADD KEY `fk_trabajoasignado_solicitud1_idx` (`solicitud`);

--
-- Indices de la tabla `und`
--
ALTER TABLE `und`
  ADD PRIMARY KEY (`idund`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idusuarios`),
  ADD KEY `fk_usuarios_funcionaros1_idx` (`funcionaros`),
  ADD KEY `fk_usuarios_perfil1_idx` (`idperfil`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `actaparticipacion1`
--
ALTER TABLE `actaparticipacion1`
  MODIFY `idactaparticipacion1` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `actaparticipacion2`
--
ALTER TABLE `actaparticipacion2`
  MODIFY `idactaparticipacion2` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `actaparticipacion3`
--
ALTER TABLE `actaparticipacion3`
  MODIFY `idactaparticipacion3` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `actaparticipacion4`
--
ALTER TABLE `actaparticipacion4`
  MODIFY `idactaparticipacion4` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `actaparticipacion5`
--
ALTER TABLE `actaparticipacion5`
  MODIFY `idactaparticipacion5` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `actaparticipacion6`
--
ALTER TABLE `actaparticipacion6`
  MODIFY `idactaparticipacion7` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `actaparticipacion7`
--
ALTER TABLE `actaparticipacion7`
  MODIFY `idactaparticipacion6` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `adt`
--
ALTER TABLE `adt`
  MODIFY `idadt` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `adttipo`
--
ALTER TABLE `adttipo`
  MODIFY `idadttipo` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `analisisfin`
--
ALTER TABLE `analisisfin`
  MODIFY `idanalisisfin` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `comision`
--
ALTER TABLE `comision`
  MODIFY `idcomision` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `comitecontrataciones`
--
ALTER TABLE `comitecontrataciones`
  MODIFY `idcomisioncontrataciones` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `dispdetalle`
--
ALTER TABLE `dispdetalle`
  MODIFY `iddispdetalle` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `empresas`
--
ALTER TABLE `empresas`
  MODIFY `idempresas` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `entesolicitante`
--
ALTER TABLE `entesolicitante`
  MODIFY `identesolicitante` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `estatus`
--
ALTER TABLE `estatus`
  MODIFY `idestatus` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `evaluacionaspectos`
--
ALTER TABLE `evaluacionaspectos`
  MODIFY `idevaluacionaspectos` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `evamuestra`
--
ALTER TABLE `evamuestra`
  MODIFY `idevamuestra` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `fuente`
--
ALTER TABLE `fuente`
  MODIFY `idfuente` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `funcionaros`
--
ALTER TABLE `funcionaros`
  MODIFY `idfuncionaros` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `garantiaoferta`
--
ALTER TABLE `garantiaoferta`
  MODIFY `idgarantiaoferta` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `libroproceso`
--
ALTER TABLE `libroproceso`
  MODIFY `idlibroproceso` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `libros`
--
ALTER TABLE `libros`
  MODIFY `idlibros` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `modalidades`
--
ALTER TABLE `modalidades`
  MODIFY `idmodalidades` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `modulos`
--
ALTER TABLE `modulos`
  MODIFY `idmodulos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `otroslibros`
--
ALTER TABLE `otroslibros`
  MODIFY `idotroslibros` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `perfil`
--
ALTER TABLE `perfil`
  MODIFY `idperfil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `permisologia`
--
ALTER TABLE `permisologia`
  MODIFY `idpermisologia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `pliego`
--
ALTER TABLE `pliego`
  MODIFY `idpliego` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `pliegoaspectos`
--
ALTER TABLE `pliegoaspectos`
  MODIFY `idpliegoaspectos` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `pliegom`
--
ALTER TABLE `pliegom`
  MODIFY `idpliegom` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `precalificacionfinanciera`
--
ALTER TABLE `precalificacionfinanciera`
  MODIFY `idprecalificacionfinanciera` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `recaudosoferentes`
--
ALTER TABLE `recaudosoferentes`
  MODIFY `idrecaudos` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `retiropliego`
--
ALTER TABLE `retiropliego`
  MODIFY `idretiropliego` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `solicitud`
--
ALTER TABLE `solicitud`
  MODIFY `idsolicitud` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tipoestatus`
--
ALTER TABLE `tipoestatus`
  MODIFY `idtipoestatus` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `trabajoasignado`
--
ALTER TABLE `trabajoasignado`
  MODIFY `idtrabajoasignado` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `und`
--
ALTER TABLE `und`
  MODIFY `idund` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idusuarios` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `actaparticipacion1`
--
ALTER TABLE `actaparticipacion1`
  ADD CONSTRAINT `fk_actaparticipacion1_empresas1` FOREIGN KEY (`idempresas`) REFERENCES `empresas` (`idempresas`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_actaparticipacion1_pliego1` FOREIGN KEY (`pliego_idpliego`) REFERENCES `pliego` (`idpliego`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_actaparticipacion1_solicitud1` FOREIGN KEY (`idsolicitud`) REFERENCES `solicitud` (`idsolicitud`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_actaparticipacion_comitecontrataciones1` FOREIGN KEY (`idcomisioncontrataciones`) REFERENCES `comitecontrataciones` (`idcomisioncontrataciones`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `actaparticipacion2`
--
ALTER TABLE `actaparticipacion2`
  ADD CONSTRAINT `fk_actaparticipacion2_actaparticipacion11` FOREIGN KEY (`idactaparticipacion1`) REFERENCES `actaparticipacion1` (`idactaparticipacion1`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_actaparticipacion2_empresas1` FOREIGN KEY (`empresas_idempresas`) REFERENCES `empresas` (`idempresas`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_actaparticipacion2_solicitud1` FOREIGN KEY (`idsolicitud`) REFERENCES `solicitud` (`idsolicitud`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `actaparticipacion3`
--
ALTER TABLE `actaparticipacion3`
  ADD CONSTRAINT `fk_actaparticipacion3_actaparticipacion11` FOREIGN KEY (`idactaparticipacion1`) REFERENCES `actaparticipacion1` (`idactaparticipacion1`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_actaparticipacion3_pliegoaspectos1` FOREIGN KEY (`idpliegoaspectos`) REFERENCES `pliegoaspectos` (`idpliegoaspectos`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_actaparticipacion3_solicitud1` FOREIGN KEY (`idsolicitud`) REFERENCES `solicitud` (`idsolicitud`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `actaparticipacion4`
--
ALTER TABLE `actaparticipacion4`
  ADD CONSTRAINT `fk_actaparticipacion4_actaparticipacion11` FOREIGN KEY (`idactaparticipacion1`) REFERENCES `actaparticipacion1` (`idactaparticipacion1`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_actaparticipacion4_solicitud1` FOREIGN KEY (`idsolicitud`) REFERENCES `solicitud` (`idsolicitud`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `actaparticipacion5`
--
ALTER TABLE `actaparticipacion5`
  ADD CONSTRAINT `fk_actaparticipacion5_actaparticipacion11` FOREIGN KEY (`actaparticipacion1_idactaparticipacion1`) REFERENCES `actaparticipacion1` (`idactaparticipacion1`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_actaparticipacion5_solicitud1` FOREIGN KEY (`idsolicitud`) REFERENCES `solicitud` (`idsolicitud`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `actaparticipacion6`
--
ALTER TABLE `actaparticipacion6`
  ADD CONSTRAINT `fk_actaparticipacion6_solicitud1` FOREIGN KEY (`idsolicitud`) REFERENCES `solicitud` (`idsolicitud`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_actaparticipacion7_empresas1` FOREIGN KEY (`idempresas`) REFERENCES `empresas` (`idempresas`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `actaparticipacion7`
--
ALTER TABLE `actaparticipacion7`
  ADD CONSTRAINT `fk_actaparticipacion6_actaparticipacion11` FOREIGN KEY (`idactaparticipacion1`) REFERENCES `actaparticipacion1` (`idactaparticipacion1`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_actaparticipacion7_pliegom1` FOREIGN KEY (`idpliegom`) REFERENCES `pliegom` (`idpliegom`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_actaparticipacion7_solicitud1` FOREIGN KEY (`idsolicitud`) REFERENCES `solicitud` (`idsolicitud`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `adt`
--
ALTER TABLE `adt`
  ADD CONSTRAINT `fk_adjudicaciones_empresas1` FOREIGN KEY (`idempresas`) REFERENCES `empresas` (`idempresas`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_adt_adttipo1` FOREIGN KEY (`idadttipo`) REFERENCES `adttipo` (`idadttipo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_adt_libroproceso1` FOREIGN KEY (`idlibroproceso`) REFERENCES `libroproceso` (`idlibroproceso`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_adt_solicitud1` FOREIGN KEY (`solicitud_idsolicitud`) REFERENCES `solicitud` (`idsolicitud`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `analisisfin`
--
ALTER TABLE `analisisfin`
  ADD CONSTRAINT `fk_analisisfin_empresas1` FOREIGN KEY (`idempresas`) REFERENCES `empresas` (`idempresas`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_analisisfin_solicitud1` FOREIGN KEY (`idsolicitud`) REFERENCES `solicitud` (`idsolicitud`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `comitecontrataciones`
--
ALTER TABLE `comitecontrataciones`
  ADD CONSTRAINT `fk_comitecontrataciones_comision1` FOREIGN KEY (`idcomision`) REFERENCES `comision` (`idcomision`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_comitecontrataciones_funcionaros1` FOREIGN KEY (`idfuncionaros`) REFERENCES `funcionaros` (`idfuncionaros`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `dispdetalle`
--
ALTER TABLE `dispdetalle`
  ADD CONSTRAINT `fk_dispdetalle_fuente1` FOREIGN KEY (`fuente`) REFERENCES `fuente` (`idfuente`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_dispdetalle_solicitud1` FOREIGN KEY (`solicitud`) REFERENCES `solicitud` (`idsolicitud`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `estatus`
--
ALTER TABLE `estatus`
  ADD CONSTRAINT `fk_estatus_solicitud1` FOREIGN KEY (`idsolicitud`) REFERENCES `solicitud` (`idsolicitud`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_estatus_tipoestatus1` FOREIGN KEY (`idtipoestatus`) REFERENCES `tipoestatus` (`idtipoestatus`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `evaluacionaspectos`
--
ALTER TABLE `evaluacionaspectos`
  ADD CONSTRAINT `fk_evaluacionaspectos_empresas1` FOREIGN KEY (`empresas_idempresas`) REFERENCES `empresas` (`idempresas`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_evaluacionaspectos_pliegoaspectos1` FOREIGN KEY (`idpliegoaspectos`) REFERENCES `pliegoaspectos` (`idpliegoaspectos`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_evaluacionaspectos_solicitud1` FOREIGN KEY (`idsolicitud`) REFERENCES `solicitud` (`idsolicitud`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `evamuestra`
--
ALTER TABLE `evamuestra`
  ADD CONSTRAINT `fk_evamuestra_empresas1` FOREIGN KEY (`idempresas`) REFERENCES `empresas` (`idempresas`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_evamuestra_pliegom1` FOREIGN KEY (`idpliegom`) REFERENCES `pliegom` (`idpliegom`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_evamuestra_solicitud1` FOREIGN KEY (`idsolicitud`) REFERENCES `solicitud` (`idsolicitud`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `garantiaoferta`
--
ALTER TABLE `garantiaoferta`
  ADD CONSTRAINT `fk_garantiaoferta_empresas1` FOREIGN KEY (`idempresas`) REFERENCES `empresas` (`idempresas`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_garantiaoferta_pliego1` FOREIGN KEY (`idpliego`) REFERENCES `pliego` (`idpliego`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_garantiaoferta_solicitud1` FOREIGN KEY (`idsolicitud`) REFERENCES `solicitud` (`idsolicitud`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `libroproceso`
--
ALTER TABLE `libroproceso`
  ADD CONSTRAINT `fk_libroproceso_modalidades1` FOREIGN KEY (`modalidades`) REFERENCES `modalidades` (`idmodalidades`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_libroproceso_solicitud1` FOREIGN KEY (`idsolicitud`) REFERENCES `solicitud` (`idsolicitud`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_libroproceso_usuarios1` FOREIGN KEY (`usuarios`) REFERENCES `usuarios` (`idusuarios`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `otroslibros`
--
ALTER TABLE `otroslibros`
  ADD CONSTRAINT `fk_otroslibros_libroproceso1` FOREIGN KEY (`libroproceso`) REFERENCES `libroproceso` (`idlibroproceso`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_otroslibros_libros1` FOREIGN KEY (`libros`) REFERENCES `libros` (`idlibros`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_otroslibros_solicitud1` FOREIGN KEY (`idsolicitud`) REFERENCES `solicitud` (`idsolicitud`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `permisologia`
--
ALTER TABLE `permisologia`
  ADD CONSTRAINT `fk_permisologia_modulos1` FOREIGN KEY (`idmodulos`) REFERENCES `modulos` (`idmodulos`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_permisologia_perfil1` FOREIGN KEY (`idperfil`) REFERENCES `perfil` (`idperfil`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `pliego`
--
ALTER TABLE `pliego`
  ADD CONSTRAINT `fk_pliego_libroproceso1` FOREIGN KEY (`libroproceso`) REFERENCES `libroproceso` (`idlibroproceso`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_pliego_solicitud1` FOREIGN KEY (`idsolicitud`) REFERENCES `solicitud` (`idsolicitud`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `pliegoaspectos`
--
ALTER TABLE `pliegoaspectos`
  ADD CONSTRAINT `fk_pliegoaspectos_pliego1` FOREIGN KEY (`pliego_idpliego`) REFERENCES `pliego` (`idpliego`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_pliegoaspectos_recaudosoferentes1` FOREIGN KEY (`recaudosoferentes_idrecaudos`) REFERENCES `recaudosoferentes` (`idrecaudos`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_pliegoaspectos_solicitud1` FOREIGN KEY (`idsolicitud`) REFERENCES `solicitud` (`idsolicitud`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `pliegom`
--
ALTER TABLE `pliegom`
  ADD CONSTRAINT `fk_pliegom_pliego1` FOREIGN KEY (`pliego`) REFERENCES `pliego` (`idpliego`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_pliegom_solicitud1` FOREIGN KEY (`idsolicitud`) REFERENCES `solicitud` (`idsolicitud`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_pliegom_und1` FOREIGN KEY (`und`) REFERENCES `und` (`idund`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `precalificacionfinanciera`
--
ALTER TABLE `precalificacionfinanciera`
  ADD CONSTRAINT `fk_precalificacionfinanciera_empresas1` FOREIGN KEY (`idempresas`) REFERENCES `empresas` (`idempresas`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_precalificacionfinanciera_libroproceso1` FOREIGN KEY (`idlibroproceso`) REFERENCES `libroproceso` (`idlibroproceso`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_precalificacionfinanciera_solicitud1` FOREIGN KEY (`idsolicitud`) REFERENCES `solicitud` (`idsolicitud`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `retiropliego`
--
ALTER TABLE `retiropliego`
  ADD CONSTRAINT `fk_retiropliego_empresas1` FOREIGN KEY (`idempresas`) REFERENCES `empresas` (`idempresas`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_retiropliego_pliego1` FOREIGN KEY (`idpliego`) REFERENCES `pliego` (`idpliego`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_retiropliego_solicitud1` FOREIGN KEY (`idsolicitud`) REFERENCES `solicitud` (`idsolicitud`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `solicitud`
--
ALTER TABLE `solicitud`
  ADD CONSTRAINT `fk_solicitud_entesolicitante` FOREIGN KEY (`entesolicitante`) REFERENCES `entesolicitante` (`identesolicitante`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_solicitud_usuarios1` FOREIGN KEY (`usuarios_idusuarios`) REFERENCES `usuarios` (`idusuarios`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `trabajoasignado`
--
ALTER TABLE `trabajoasignado`
  ADD CONSTRAINT `fk_trabajoasignado_solicitud1` FOREIGN KEY (`solicitud`) REFERENCES `solicitud` (`idsolicitud`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_trabajoasignado_usuarios1` FOREIGN KEY (`usuarios`) REFERENCES `usuarios` (`idusuarios`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `fk_usuarios_funcionaros1` FOREIGN KEY (`funcionaros`) REFERENCES `funcionaros` (`idfuncionaros`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_usuarios_perfil1` FOREIGN KEY (`idperfil`) REFERENCES `perfil` (`idperfil`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
