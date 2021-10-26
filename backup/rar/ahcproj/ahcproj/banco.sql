-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 28-Maio-2021 às 23:28
-- Versão do servidor: 10.4.18-MariaDB
-- versão do PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `banco`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `produto_infor1` varchar(50) NOT NULL,
  `produto_infor2` varchar(50) NOT NULL,
  `produto_infor3` varchar(50) NOT NULL,
  `produto_infor4` varchar(50) NOT NULL,
  `produto_imgs` varchar(255) NOT NULL,
  `tb` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`produto_infor1`, `produto_infor2`, `produto_infor3`, `produto_infor4`, `produto_imgs`, `tb`) VALUES
('0', '0', '0', '0', '0', NULL),
('0', '2', '3', '4', '0', NULL),
('44', '444', '444', '444', '0', NULL),
('0', '0', '0', '0', '0', NULL),
('gsdsfsfsf', 'sfdsfsf', 'dsdfsf', 'sfsdfsfsdfs', '../Public/imagens/60b15d5da774a9.07919792.png', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
