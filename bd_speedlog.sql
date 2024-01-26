-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 31-Mar-2023 às 01:24
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `speedlog2`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `administrador`
--

CREATE TABLE `administrador` (
  `idAdmin` int(11) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `email_adm` varchar(50) NOT NULL,
  `senha_adm` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `administrador`
--

INSERT INTO `administrador` (`idAdmin`, `nome`, `email_adm`, `senha_adm`) VALUES
(1, '', '123@1', '123');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `idCliente` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `senha` varchar(20) NOT NULL,
  `telefone` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `data` varchar(30) NOT NULL,
  `cpf` varchar(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `entrega`
--

CREATE TABLE `entrega` (
  `idEntrega` int(11) NOT NULL,
  `idCliente` int(11) NOT NULL,
  `idMotoboy` int(11) DEFAULT NULL,
  `status` varchar(20) NOT NULL,
  `horarioInicio` datetime DEFAULT NULL,
  `horarioPrevisto` datetime DEFAULT NULL,
  `valorFrete` decimal(10,2) NOT NULL,
  `cep_origem` varchar(100) NOT NULL,
  `cep_destino` varchar(100) NOT NULL,
  `log_origem` varchar(500) NOT NULL,
  `log_destino` varchar(500) NOT NULL,
  `bairro_origem` varchar(100) NOT NULL,
  `bairro_destino` varchar(100) NOT NULL,
  `num_destino` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `motoboy`
--

CREATE TABLE `motoboy` (
  `idMotoboy` int(11) NOT NULL,
  `nome_m` varchar(50) NOT NULL,
  `cpf_m` varchar(14) NOT NULL,
  `telefone_m` varchar(15) NOT NULL,
  `placa_m` varchar(10) NOT NULL,
  `foto_m` varchar(100) NOT NULL,
  `email_m` varchar(100) NOT NULL,
  `senha_m` varchar(100) NOT NULL,
  `saldo` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `parametrosfrete`
--

CREATE TABLE `parametrosfrete` (
  `idParametro` int(11) NOT NULL,
  `peso` decimal(10,2) NOT NULL COMMENT '(Kg)',
  `distancia` int(10) NOT NULL COMMENT '(Metros)',
  `tempo` int(10) NOT NULL COMMENT '(Segundos)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`idAdmin`);

--
-- Índices para tabela `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`idCliente`);

--
-- Índices para tabela `entrega`
--
ALTER TABLE `entrega`
  ADD PRIMARY KEY (`idEntrega`),
  ADD KEY `idCliente` (`idCliente`),
  ADD KEY `idMotoboy` (`idMotoboy`);

--
-- Índices para tabela `motoboy`
--
ALTER TABLE `motoboy`
  ADD PRIMARY KEY (`idMotoboy`);

--
-- Índices para tabela `parametrosfrete`
--
ALTER TABLE `parametrosfrete`
  ADD PRIMARY KEY (`idParametro`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `administrador`
--
ALTER TABLE `administrador`
  MODIFY `idAdmin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `cliente`
--
ALTER TABLE `cliente`
  MODIFY `idCliente` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `entrega`
--
ALTER TABLE `entrega`
  MODIFY `idEntrega` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `motoboy`
--
ALTER TABLE `motoboy`
  MODIFY `idMotoboy` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `parametrosfrete`
--
ALTER TABLE `parametrosfrete`
  MODIFY `idParametro` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `entrega`
--
ALTER TABLE `entrega`
  ADD CONSTRAINT `entrega_ibfk_1` FOREIGN KEY (`idCliente`) REFERENCES `cliente` (`idCliente`),
  ADD CONSTRAINT `entrega_ibfk_2` FOREIGN KEY (`idEntrega`) REFERENCES `parametrosfrete` (`idParametro`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `entrega_ibfk_3` FOREIGN KEY (`idMotoboy`) REFERENCES `motoboy` (`idMotoboy`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;