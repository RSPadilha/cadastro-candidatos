-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 13-Jul-2018 às 16:01
-- Versão do servidor: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ricardopadilha13072018`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `candidatoricardo`
--

CREATE TABLE `candidatoricardo` (
  `CodigoCandidato` int(11) NOT NULL,
  `NomeCandidato` varchar(50) NOT NULL,
  `EnderecoCandidato` varchar(50) NOT NULL,
  `AnoCurso` int(11) NOT NULL,
  `SetorPretendido` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `candidatoricardo`
--

INSERT INTO `candidatoricardo` (`CodigoCandidato`, `NomeCandidato`, `EnderecoCandidato`, `AnoCurso`, `SetorPretendido`) VALUES
(1, 'Ricardo', 'Borges', 2018, 6),
(5, 'teste1', 'aa', 55, 2),
(6, 'aa', 'dd', 2, 3),
(7, 'sdf', 'fs', 4, 1),
(8, 'testeinfo', 'rwer', 2015, 6);

-- --------------------------------------------------------

--
-- Estrutura da tabela `setorricardo`
--

CREATE TABLE `setorricardo` (
  `CodigoSetor` int(11) NOT NULL,
  `NomeSetor` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `setorricardo`
--

INSERT INTO `setorricardo` (`CodigoSetor`, `NomeSetor`) VALUES
(1, 'Compras'),
(2, 'Vendas'),
(3, 'Almoxarifado'),
(4, 'Contabilidade'),
(5, 'Limpeza'),
(6, 'Informatica');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `candidatoricardo`
--
ALTER TABLE `candidatoricardo`
  ADD PRIMARY KEY (`CodigoCandidato`),
  ADD KEY `SetorPretendido` (`SetorPretendido`);

--
-- Indexes for table `setorricardo`
--
ALTER TABLE `setorricardo`
  ADD PRIMARY KEY (`CodigoSetor`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `candidatoricardo`
--
ALTER TABLE `candidatoricardo`
  MODIFY `CodigoCandidato` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `candidatoricardo`
--
ALTER TABLE `candidatoricardo`
  ADD CONSTRAINT `candidatoricardo_ibfk_1` FOREIGN KEY (`SetorPretendido`) REFERENCES `setorricardo` (`CodigoSetor`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
