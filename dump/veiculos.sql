-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 20-Dez-2022 às 22:16
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `apiall`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `veiculos`
--

CREATE TABLE `veiculos` (
  `id` int(11) NOT NULL,
  `modelo` varchar(30) NOT NULL,
  `cor` varchar(15) NOT NULL,
  `ano` int(4) NOT NULL,
  `placa` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `veiculos`
--

INSERT INTO `veiculos` (`id`, `modelo`, `cor`, `ano`, `placa`) VALUES
(1, 'Palio', 'Azul', 2005, 'YPH-143H'),
(2, 'Ferrari 456 Italia', 'Vermelho', 2014, 'dsf-2730'),
(3, 'Golf', 'Cinza', 2010, 'ABC-410'),
(4, 'Vectra', 'Prata', 2009, 'UYX-2009'),
(5, 'Astra', 'Prata', 2009, 'UYX-2010'),
(6, 'Polo', 'Amarelo', 2014, 'UYH7E65'),
(7, 'Polo', 'Azul', 2005, 'YPQ-143H'),
(8, 'Palio', 'Amarelo', 2008, 'PL2E2022'),
(9, 'CG 160 Start', 'V', 2008, 'PL2E2022'),
(10, 'CG 160 Start', 'Vermelho', 2018, 'SSS-2023');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `veiculos`
--
ALTER TABLE `veiculos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `veiculos`
--
ALTER TABLE `veiculos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
