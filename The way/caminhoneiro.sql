-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 09-Ago-2018 às 16:58
-- Versão do servidor: 5.7.21-0ubuntu0.16.04.1
-- PHP Version: 7.0.22-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `TheWay`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `caminhoneiro`
--

CREATE TABLE `caminhoneiro` (
  `nome` text NOT NULL,
  `email` varchar(25) NOT NULL,
  `telefone` int(15) NOT NULL,
  `senha` varchar(25) NOT NULL,
  `rg` int(11) DEFAULT NULL,
  `cpf` int(11) DEFAULT NULL,
  `num_antt` int(11) DEFAULT NULL,
  `num_cnh` int(11) DEFAULT NULL,
  `categoria_cnh` varchar(15) DEFAULT NULL,
  `cod_usuario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `caminhoneiro`
--
ALTER TABLE `caminhoneiro`
  ADD KEY `cod_usuario` (`cod_usuario`);

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `caminhoneiro`
--
ALTER TABLE `caminhoneiro`
  ADD CONSTRAINT `caminhoneiro_ibfk_1` FOREIGN KEY (`cod_usuario`) REFERENCES `usuario` (`cod_usuario`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
