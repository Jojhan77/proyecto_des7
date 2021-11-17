-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2019 at 09:17 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bdfinal`
--

-- --------------------------------------------------------

--
-- Table structure for table `ch`
--

CREATE TABLE `ch` (
  `apoyoEspecial` text NOT NULL,
  `apoyo` text NOT NULL,
  `nombreEvento` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ch`
--

INSERT INTO `ch` (`apoyoEspecial`, `apoyo`, `nombreEvento`) VALUES
('Inscripcion', '', 'EVENTO PRUEBA 4'),
('Manutencion', '', 'EVENTO PRUEBA 4'),
('Inscripcion', '', 'EVENTO PRUEBA 5'),
('Hospedaje', '', 'EVENTO PRUEBA 5'),
('Manutencion', '', 'EVENTO PRUEBA 5'),
('Inscripcion', '', 'EVENTO PRUEBA 7'),
('Manutencion', '', 'EVENTO PRUEBA 7'),
('ApoyoEconoParcial', '', 'EVENTO PRUEBA 7'),
('Inscripcion', '', 'EVENTO PRUEBA 8'),
('Gastos de Viaje', '', 'EVENTO PRUEBA 8'),
('ApoyoEconoParcial', '', 'EVENTO PRUEBA 8'),
('', '', ''),
('', '', ''),
('', '', ''),
('Inscripcion', '', 'EVENTO PRUEBA 11'),
('Hospedaje', '', 'EVENTO PRUEBA 11'),
('Manutencion', '', 'EVENTO PRUEBA 11'),
('Hospedaje', '', 'EVENTO PRUEBA 12'),
('Gastos de Viaje', '', 'EVENTO PRUEBA 12'),
('Hospedaje', '', ''),
('Manutencion', '', ''),
('Hospedaje', '', 'EVENTO PRUEBA 13'),
('Gastos de Viaje', '', 'EVENTO PRUEBA 13');

-- --------------------------------------------------------

--
-- Table structure for table `ch1`
--

CREATE TABLE `ch1` (
  `apoyo` text NOT NULL,
  `nombreEvento` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `informee`
--

CREATE TABLE `informee` (
  `idInforme` int(11) NOT NULL,
  `idSolicitud` int(11) NOT NULL,
  `correo` text NOT NULL,
  `nombreEvento` text NOT NULL,
  `fechaInicial` text NOT NULL,
  `fechaFinal` text NOT NULL,
  `estudiante` text NOT NULL,
  `cedula` varchar(20) NOT NULL,
  `participante` text NOT NULL,
  `resultados` text NOT NULL,
  `conclusiones` text NOT NULL,
  `recomendaciones` text NOT NULL,
  `imagen` text NOT NULL,
  `imagen2` text NOT NULL,
  `imagen3` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `informee`
--

INSERT INTO `informee` (`idInforme`, `idSolicitud`, `correo`, `nombreEvento`, `fechaInicial`, `fechaFinal`, `estudiante`, `cedula`, `participante`, `resultados`, `conclusiones`, `recomendaciones`, `imagen`, `imagen2`, `imagen3`) VALUES
(2, 32, 'jojhan77@email.com', 'EVENTO PRUEBA 1', '01-01-2020', '02-02-2020', 'Jojhan Arboleda', '8-939-629', '', '', '', '', 'fotos/Capture.JPG', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `solicitud`
--

CREATE TABLE `solicitud` (
  `idSolicitud` int(11) NOT NULL,
  `nombre` text NOT NULL,
  `cedula` varchar(20) NOT NULL,
  `correo` text NOT NULL,
  `unidadAcademica` text NOT NULL,
  `participantes` text NOT NULL,
  `nombreEvento` text NOT NULL,
  `fechaInicial` varchar(20) NOT NULL,
  `fechaFinal` varchar(20) NOT NULL,
  `comentarios` text NOT NULL,
  `tipoEve` text NOT NULL,
  `alcanceEve` text NOT NULL,
  `lugarEvento` text NOT NULL,
  `montoInscripcion` decimal(10,0) NOT NULL,
  `montoGastoViaje` decimal(10,0) NOT NULL,
  `montoApoyoEco` decimal(10,0) NOT NULL,
  `checkeado` text NOT NULL,
  `estado` text NOT NULL,
  `solicitud` int(11) NOT NULL,
  `rev_secretaria` int(11) DEFAULT 0,
  `rev_comite` int(11) DEFAULT 0,
  `rev_rector` int(11) DEFAULT 0,
  `relevancia` text NOT NULL,
  `observaciones` varchar(60) NOT NULL,
  `comentarioRectoria` text NOT NULL,
  `recomienda` text NOT NULL,
  `informe` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `solicitud`
--

INSERT INTO `solicitud` (`idSolicitud`, `nombre`, `cedula`, `correo`, `unidadAcademica`, `participantes`, `nombreEvento`, `fechaInicial`, `fechaFinal`, `comentarios`, `tipoEve`, `alcanceEve`, `lugarEvento`, `montoInscripcion`, `montoGastoViaje`, `montoApoyoEco`, `checkeado`, `estado`, `solicitud`, `rev_secretaria`, `rev_comite`, `rev_rector`, `relevancia`, `observaciones`, `comentarioRectoria`, `recomienda`, `informe`) VALUES
(21, 'Jojhan Arboleda', '8', 'jojhan77@email.com', 'FISC', '', 'Evento deportivo', '1', '07-01-2020', 'e', '', '', '', '0', '0', '0', 'aprobado', 'finalizado', 1, 1, 1, 1, 'alto', '', '', 'si', 0),
(22, 'Jojhan Arboleda', '8-939-629', '', 'FISC', '', '122', '124', '07-01-2020', 'muchos', '', '', '', '0', '0', '0', '', '', 0, NULL, NULL, NULL, '', '', '', '', 0),
(23, 'pedro', '8', '', 'f', '', '1', '1', '07-01-2020', 'njn', '', '', '', '0', '0', '0', 'bruh', '', 0, NULL, NULL, NULL, '', '', '', '', 0),
(31, 'Juan Perez', '8-969-999', 'jojhan77@email.com', 'FISC', '', 'BRUH FESTsdd', '01-01-2020', '01-01-2021', 'sdshdhshd', '', '', '', '0', '0', '0', 'aprobado', 'finalizado', 1, 1, 1, 1, '', '', '', '', 1),
(32, 'Jojhan Arboleda', '8-939-629', 'jojhan77@email.com', 'FISC', '', 'EVENTO PRUEBA 1', '01-01-2020', '02-02-2020', 'EVENTO EL CUAL DESTACA POR LAS DISTINTAS FORMAS DE PRUEBA', '', '', '', '0', '0', '0', '', 'finalizado', 1, 0, 0, 0, '', '', '', '', 1),
(33, 'Jojhan Arboleda', '8-939-629', 'jojhan77@email.com', 'FISC', '', 'EVENTO PRUEBA 2', '01-01-2020', '02-02-2020', 'EVENTO EL CUAL DESTACA POR LAS DISTINTAS FORMAS DE PRUEBA', '', '', '', '0', '0', '0', '', 'pendiente', 1, 0, 0, 0, '', '', '', '', 0),
(34, 'Jojhan Arboleda', '8-939-629', 'jojhan77@email.com', 'FISC', '', 'EVENTO PRUEBA 3', '01-01-2020', '02-02-2020', 'EVENTO EL CUAL DESTACA POR LAS DISTINTAS FORMAS DE PRUEBA', '', '', '', '0', '0', '0', '', 'pendiente', 1, 0, 0, 0, '', '', '', '', 1),
(35, 'Jojhan Arboleda', '8-939-629', 'jojhan77@email.com', 'FISC', '', 'EVENTO PRUEBA 4', '01-01-2020', '02-02-2020', 'EVENTO EL CUAL DESTACA POR LAS DISTINTAS FORMAS DE PRUEBA', '', '', '', '0', '0', '0', '', 'pendiente', 1, 0, 0, 0, '', '', '', '', 1),
(36, 'Jojhan Arboleda', '8-939-629', 'jojhan77@email.com', 'FISC', '', 'EVENTO PRUEBA 5', '01-01-2020', '02-02-2020', 'EVENTO EL CUAL DESTACA POR LAS DISTINTAS FORMAS DE PRUEBA', '', '', '', '0', '0', '0', '', 'pendiente', 1, 0, 0, 0, '', '', '', '', 1),
(37, 'Jojhan Arboleda', '8-939-629', 'jojhan77@email.com', 'FISC', '', 'EVENTO PRUEBA 5', '01-01-2020', '01-01-2021', 'EVENTO EL CUAL DESTACA POR LAS DISTINTAS FORMAS DE PRUEBA', '', '', '', '0', '0', '0', '', 'pendiente', 1, 0, 0, 0, '', '', '', '', 1),
(38, 'Jojhan Arboleda', '8-939-629', 'jojhan77@email.com', 'FISC', '', 'EVENTO PRUEBA 5', '01-01-2020', '02-02-2020', 'EVENTO', '', '', '', '0', '0', '0', '', 'pendiente', 1, 0, 0, 0, '', '', '', '', 1),
(39, 'Jojhan Arboleda', '8-939-629', 'jojhan77@email.com', 'FISC', '', 'EVENTO PRUEBA 7', '01-01-2020', '02-02-2020', 'EVENTO', '', '', '', '0', '0', '0', '', 'pendiente', 1, 0, 0, 0, '', '', '', '', 1),
(40, 'Jojhan Arboleda', '8-939-629', 'jojhan77@email.com', 'FISC', '', 'EVENTO PRUEBA 8', '01-01-2020', '02-02-2020', 'EVENTO', '', '', '', '0', '0', '0', '', 'pendiente', 1, 0, 0, 0, '', '', '', '', 1),
(41, 'Jojhan Arboleda', '8-939-629', 'jojhan77@email.com', 'FISC', '', 'EVENTO PRUEBA 9', '01-01-2020', '01-01-2021', 'EVENTO', '', '', '', '0', '0', '0', '', 'pendiente', 1, 0, 0, 0, '', '', '', '', 1),
(42, 'Jojhan Arboleda', '8-939-629', 'jojhan77@email.com', 'FISC', '', 'EVENTO PRUEBA 9', '01-01-2020', '01-01-2021', 'EVENTO', '', '', '', '0', '0', '0', '', 'pendiente', 1, 0, 0, 0, '', '', '', '', 1),
(43, 'Jojhan Arboleda', '8-939-629', 'jojhan77@email.com', 'FISC', '', 'EVENTO PRUEBA 10', '01-01-2020', '02-02-2020', 'EVENTO', '', '', '', '0', '0', '0', '', 'pendiente', 1, 0, 0, 0, '', '', '', '', 1),
(44, 'Jojhan Arboleda', '8-939-629', 'jojhan77@email.com', '', '', '', '', '', '', '', '', '', '0', '0', '0', '', 'pendiente', 1, 0, 0, 0, '', '', '', '', 1),
(45, 'Jojhan Arboleda', '8-939-629', 'jojhan77@email.com', '', '', 'EVENTO PRUEBA 11', '', '', '', '', '', '', '0', '0', '0', '', 'pendiente', 1, 0, 0, 0, '', '', '', '', 1),
(46, 'Jojhan Arboleda', '8-939-629', 'jojhan77@email.com', '', '', 'EVENTO PRUEBA 12', '', '', '', '', '', '', '0', '0', '0', '', 'pendiente', 1, 0, 0, 0, '', '', '', '', 1),
(47, 'Jojhan Arboleda', '8-939-629', 'jojhan77@email.com', '', '', '', '', '', '', '', '', '', '0', '0', '0', '', 'pendiente', 1, 0, 0, 0, '', '', '', '', 1),
(48, 'Jojhan Arboleda', '8-939-629', 'jojhan77@email.com', '', '', '', '', '', '', '', '', '', '0', '0', '0', '', 'pendiente', 1, 0, 0, 0, '', '', '', '', 1),
(49, 'Jojhan Arboleda', '8-939-629', 'jojhan77@email.com', '', '', 'EVENTO PRUEBA 13', '', '', '', '', '', '', '0', '0', '0', '', 'pendiente', 1, 0, 0, 0, '', '', '', '', 1),
(50, 'Jojhan Arboleda', '8-939-629', 'jojhan77@email.com', '', '', 'EVENTO PRUEBA 14', '', '', '', '', '', '', '0', '0', '0', '', 'pendiente', 1, 0, 0, 0, '', '', '', '', 1),
(51, 'Jojhan Arboleda', '8-939-629', 'jojhan77@email.com', '', '', 'EVENTO PRUEBA 15', '', '', '', '', '', '', '0', '0', '0', '', 'pendiente', 1, 0, 0, 0, '', '', '', '', 1),
(52, 'Jojhan Arboleda', '8-939-629', 'jojhan77@email.com', '', '', 'EVENTO PRUEBA 17', '', '', '', '', '', '', '0', '0', '0', '', 'pendiente', 1, 0, 0, 0, '', '', '', '', 1),
(53, 'Jojhan Arboleda', '8-939-629', 'jojhan77@email.com', '', '', '', '', '', '', '', '', '', '0', '0', '0', '', 'pendiente', 1, 0, 0, 0, '', '', '', '', 1),
(54, 'Jojhan Arboleda', '8-939-629', 'jojhan77@email.com', '', '', 'bu', '', '', '', '', '', '', '0', '0', '0', '', 'pendiente', 1, 0, 0, 0, '', '', '', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

CREATE TABLE `usuario` (
  `cedula` varchar(20) NOT NULL,
  `email` text NOT NULL,
  `nombre` text NOT NULL,
  `apellido` text NOT NULL,
  `contra` text NOT NULL,
  `telefono` text NOT NULL,
  `tipo` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`cedula`, `email`, `nombre`, `apellido`, `contra`, `telefono`, `tipo`) VALUES
('0001', 'secretaria@email.com', '', '', 'secretaria', '', 2),
('0002', 'secretario_comite@email.com', '', '', 'secretariocomite', '', 3),
('0003', 'comite_coordinador@email.com', '', '', 'comitecoordinador', '', 3),
('0004', 'comite_vicerector@email.com', '', '', 'comitevicerectoracademico', '', 3),
('0005', 'rectoria@email.com', '', '', 'rectoria', '', 4),
('8-939-629', 'jojhan77@email.com', 'Jojhan ', 'Arboleda', '12345', '60912953', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `informee`
--
ALTER TABLE `informee`
  ADD PRIMARY KEY (`idInforme`),
  ADD KEY `FOREIGN KEY` (`idSolicitud`);

--
-- Indexes for table `solicitud`
--
ALTER TABLE `solicitud`
  ADD PRIMARY KEY (`idSolicitud`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`cedula`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `informee`
--
ALTER TABLE `informee`
  MODIFY `idInforme` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `solicitud`
--
ALTER TABLE `solicitud`
  MODIFY `idSolicitud` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `informee`
--
ALTER TABLE `informee`
  ADD CONSTRAINT `FOREIGN KEY` FOREIGN KEY (`idSolicitud`) REFERENCES `solicitud` (`idSolicitud`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
