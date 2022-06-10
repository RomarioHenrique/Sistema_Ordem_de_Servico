-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 20-Maio-2022 às 14:59
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `ordem_servicos`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `ID` int(3) NOT NULL,
  `NomeCompleto` varchar(100) NOT NULL,
  `DataAtual` date NOT NULL,
  `DataNascimento` date NOT NULL,
  `CPF` varchar(100) NOT NULL,
  `RG` varchar(100) NOT NULL,
  `Estado` varchar(100) NOT NULL,
  `Cidade` varchar(100) NOT NULL,
  `Numero` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`ID`, `NomeCompleto`, `DataAtual`, `DataNascimento`, `CPF`, `RG`, `Estado`, `Cidade`, `Numero`) VALUES
(3, '2', '2022-05-12', '2022-05-18', '24234', '4332132', 'sadsdas', 'dasd', '2'),
(4, 'Romeru Britu', '2022-04-04', '2022-05-11', '3423424', '24324234', 'Sei la', 'Inexistente', '1'),
(5, 'Romeru Britu', '2022-04-04', '2022-05-11', '3423424', '24324234', 'Sei la', 'Inexistente', '1'),
(6, 'Osmael de Sousa Braga', '2002-10-10', '2001-10-10', '10010020032', '20001212188', 'Ceará', 'Forquilha', '900');

-- --------------------------------------------------------

--
-- Estrutura da tabela `ordem_de_servico`
--

CREATE TABLE `ordem_de_servico` (
  `id` int(11) NOT NULL,
  `NumeroOS` int(11) DEFAULT NULL,
  `DataEntrada` date NOT NULL,
  `PrevisaoSaida` date NOT NULL,
  `Cliente` varchar(100) NOT NULL,
  `Contato` varchar(80) NOT NULL,
  `Endereco` varchar(300) NOT NULL,
  `Equipamento` varchar(120) NOT NULL,
  `Marca` varchar(100) NOT NULL,
  `Modelo` varchar(80) NOT NULL,
  `NumeroSerie` varchar(100) NOT NULL,
  `Acessorios` varchar(100) NOT NULL,
  `Defeito` text NOT NULL,
  `Observacoes` text NOT NULL,
  `StatusOS` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `ordem_de_servico`
--

INSERT INTO `ordem_de_servico` (`id`, `NumeroOS`, `DataEntrada`, `PrevisaoSaida`, `Cliente`, `Contato`, `Endereco`, `Equipamento`, `Marca`, `Modelo`, `NumeroSerie`, `Acessorios`, `Defeito`, `Observacoes`, `StatusOS`) VALUES
(18, NULL, '2022-05-19', '2022-05-16', 'Romario', 'sdf', 'asd', 'asdsa', 'asd', 'asd', 'asd', 'asdas', ' sad', ' sad', NULL),
(19, 1231, '1312-02-23', '0312-12-23', '12312', '321', '312das', 'dasd', 'asda', 'sdas', 'das', 'das', ' das', ' das', NULL),
(20, 2022, '2022-05-16', '2022-05-02', 'FSD', 'CDFDS', 'FDSFD', 'SFDS', 'FDSF', 'DSF', 'DSF', 'DSF', ' DSF', ' DSF', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Senha` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`ID`);

--
-- Índices para tabela `ordem_de_servico`
--
ALTER TABLE `ordem_de_servico`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cliente`
--
ALTER TABLE `cliente`
  MODIFY `ID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `ordem_de_servico`
--
ALTER TABLE `ordem_de_servico`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
