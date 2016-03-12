-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2015 at 05:47 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sistemas`
--

-- --------------------------------------------------------

--
-- Table structure for table `bienvenida`
--

CREATE TABLE IF NOT EXISTS `bienvenida` (
  `mensaje` varchar(400) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `mensajes`
--

CREATE TABLE IF NOT EXISTS `mensajes` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `alias` varchar(20) NOT NULL,
  `mensaje` varchar(120) NOT NULL,
  `ip` varchar(20) NOT NULL,
  `fecha` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `nombre` text,
  `apellidos` text,
  `login` varchar(40) NOT NULL,
  `password` varchar(80) NOT NULL,
  `email` text,
  `estado` int(11) NOT NULL DEFAULT '0',
  `banned` int(11) NOT NULL DEFAULT '0',
  `rango` int(11) NOT NULL DEFAULT '0',
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `apellidos`, `login`, `password`, `email`, `estado`, `banned`, `rango`) VALUES
(4, '', '', '', '67a74306b06d0c01624fe0d0249a570f4d093747', '', 0, 0, 0),
(5, 'Alejandro', 'Montenegro', 'alejo_fix', 'adcd7048512e64b48da55b027577886ee5a36350', 'alejo_fix@hotmail.com', 1, 0, 0),
(6, 'Alejandro', 'Montenegro', 'alejo.temp', 'adcd7048512e64b48da55b027577886ee5a36350', 'alejo.temp@gmail.com', 0, 0, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
