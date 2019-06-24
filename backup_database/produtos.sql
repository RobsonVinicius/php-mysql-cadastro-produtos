-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 24-Jun-2019 às 16:32
-- Versão do servidor: 10.1.38-MariaDB
-- versão do PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loja`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `preco` decimal(10,2) DEFAULT NULL,
  `descricao` text,
  `categoria_id` int(11) DEFAULT NULL,
  `usado` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `nome`, `preco`, `descricao`, `categoria_id`, `usado`) VALUES
(2, 'motocicleta ', '10000.00', 'Harley Davidson', 3, 1),
(3, 'bicicleta', '500.00', 'Descricao deste produto', 3, 0),
(4, 'lÃ¡pis', '3.00', 'Descricao deste produto', 3, 0),
(6, 'caneta', '0.00', 'Descricao deste produto', 3, 0),
(7, 'camiseta', '0.00', 'Descricao deste produto', 3, 0),
(11, 'xicara', '0.00', 'Descricao deste produto', 3, 0),
(12, 'aviÃ£o', '1000000.00', 'Descricao deste produto', 3, 0),
(13, 'celular', '1200.00', 'Descricao deste produto', 3, 0),
(15, 'Caneta ', '99.00', 'Caneta bic padrÃ£o, ou seja, cumpre a sua funÃ§Ã£o.', 3, 0),
(20, 'Bola de Futebol', '20000.00', 'Bola de futebol com controle remoto, para burlar os jogos e fazer o seu time vencer.', 1, 0),
(21, 'Caneta de prata', '900.00', 'Caneta de prata', 2, 0),
(22, 'Caneca', '9.00', 'Caneca de plÃ¡stico', 2, 0),
(23, 'Caneca de vidro', '29.00', 'Caneca de vidro ', 2, 1),
(24, 'Suporte', '99.00', 'Suporte automotivo para celular', 3, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
