-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 07-Set-2019 às 15:37
-- Versão do servidor: 10.1.37-MariaDB
-- versão do PHP: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `caderno`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `atividades`
--

DROP TABLE IF EXISTS `atividades`;
CREATE TABLE `atividades` (
  `id` int(11) NOT NULL,
  `mat_id` int(11) DEFAULT NULL,
  `nome` varchar(80) DEFAULT NULL,
  `status` int(1) DEFAULT NULL,
  `data` int(12) DEFAULT NULL,
  `nota` decimal(5,2) DEFAULT '0.00',
  `data_inclusao` int(12) DEFAULT NULL,
  `data_alteracao` int(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `atividades`
--

TRUNCATE TABLE `atividades`;
--
-- Extraindo dados da tabela `atividades`
--

INSERT INTO `atividades` (`id`, `mat_id`, `nome`, `status`, `data`, `nota`, `data_inclusao`, `data_alteracao`) VALUES
(1, 23, 'Site simples', 1, 1547014441, '0.00', 1566717241, 1566717241),
(2, 23, 'Sistema simples', 0, 0, '5.00', 1566717260, 1566717260),
(3, 23, 'Julho Justino Sales', 0, 1347434823, '0.00', 1566718023, 1566718023),
(4, 23, 'Photo organize', 0, 0, '10.00', 1566786775, 1566786775);

-- --------------------------------------------------------

--
-- Estrutura da tabela `conteudos`
--

DROP TABLE IF EXISTS `conteudos`;
CREATE TABLE `conteudos` (
  `id` int(11) NOT NULL,
  `mat_id` int(11) DEFAULT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `status` int(1) DEFAULT NULL,
  `data` int(12) DEFAULT NULL,
  `dificuldade` tinyint(4) DEFAULT NULL,
  `conteudo` longtext,
  `data_inclusao` int(12) DEFAULT NULL,
  `data_alteracao` int(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `conteudos`
--

TRUNCATE TABLE `conteudos`;
--
-- Extraindo dados da tabela `conteudos`
--

INSERT INTO `conteudos` (`id`, `mat_id`, `nome`, `status`, `data`, `dificuldade`, `conteudo`, `data_inclusao`, `data_alteracao`) VALUES
(12, 23, 'teste', 1, 1567397058, 2, '', 1567397058, 1567397058);

-- --------------------------------------------------------

--
-- Estrutura da tabela `materias`
--

DROP TABLE IF EXISTS `materias`;
CREATE TABLE `materias` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `semestre` int(2) DEFAULT NULL,
  `prof` varchar(255) DEFAULT NULL,
  `data_inclusao` int(12) DEFAULT NULL,
  `data_alteracao` int(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `materias`
--

TRUNCATE TABLE `materias`;
--
-- Extraindo dados da tabela `materias`
--

INSERT INTO `materias` (`id`, `nome`, `semestre`, `prof`, `data_inclusao`, `data_alteracao`) VALUES
(23, 'Aplicação de linguagem orientada a objeto', 4, 'Alecio', 1565924444, 1565924444),
(24, 'Calculo numerico', 4, 'Pedro', 1565924469, 1565924469),
(25, 'Estruturas de dados', 4, 'Wagner e Alvaro', 1565924496, 1565924885),
(26, 'Linguagem de programação de branco de dados', 4, 'Wagner', 1565924545, 1565924545),
(27, 'Matematica discreta', 4, 'Pedro', 1565924659, 1565924659);

-- --------------------------------------------------------

--
-- Estrutura da tabela `status`
--

DROP TABLE IF EXISTS `status`;
CREATE TABLE `status` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `status`
--

TRUNCATE TABLE `status`;
--
-- Extraindo dados da tabela `status`
--

INSERT INTO `status` (`id`, `nome`) VALUES
(1, 'Revisar'),
(2, 'Não revisado'),
(3, 'Fácil'),
(4, 'Mais ou menos'),
(5, 'Difícil'),
(6, 'Ausente'),
(7, 'Presente'),
(8, 'Entregue'),
(9, 'Não entregue'),
(10, 'Realizado'),
(11, 'Não realizado');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `atividades`
--
ALTER TABLE `atividades`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `conteudos`
--
ALTER TABLE `conteudos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `materias`
--
ALTER TABLE `materias`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `atividades`
--
ALTER TABLE `atividades`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `conteudos`
--
ALTER TABLE `conteudos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `materias`
--
ALTER TABLE `materias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
