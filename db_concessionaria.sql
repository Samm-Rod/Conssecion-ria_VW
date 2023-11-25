-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 25/11/2023 às 21:57
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `db_concessionaria`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_cliente`
--

CREATE TABLE `tb_cliente` (
  `id` int(11) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `dNasc` varchar(20) NOT NULL,
  `cpf` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `tb_cliente`
--

INSERT INTO `tb_cliente` (`id`, `nome`, `dNasc`, `cpf`) VALUES
(1, 'João da Silva', '1981-06-23', '77777777777'),
(3, 'Maria da Silva', '1993-02-26', '33333333333'),
(4, 'Marcos Alves', '1991-12-29', '44444444444'),
(5, 'José Ribeiro', '1996-11-13', '22222222222'),
(6, 'Raimunda Nunes', '1987-07-15', '55555555555');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_peca`
--

CREATE TABLE `tb_peca` (
  `id` int(11) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `qtd` int(11) NOT NULL,
  `valor` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `tb_peca`
--

INSERT INTO `tb_peca` (`id`, `nome`, `qtd`, `valor`) VALUES
(1, 'Parachoque', 5, 360),
(3, 'Pistão', 5, 50),
(4, 'Escapamento', 10, 95),
(5, 'Pelicula', 10, 30),
(6, 'Kit turbo', 30, 1100);

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_veiculo`
--

CREATE TABLE `tb_veiculo` (
  `id` int(11) NOT NULL,
  `modelo` varchar(100) NOT NULL,
  `cor` varchar(100) NOT NULL,
  `valor` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `tb_veiculo`
--

INSERT INTO `tb_veiculo` (`id`, `modelo`, `cor`, `valor`) VALUES
(1, 'Nivus HighLine', 'Cinza Vulcano', 129000),
(3, 'T-Cross', 'Branco', 138920),
(4, 'Jetta TSI 200', 'Preto', 230200),
(5, 'Polo ', 'Vermelho', 110400),
(6, 'Up TSI', 'Branco', 120110);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `tb_cliente`
--
ALTER TABLE `tb_cliente`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `tb_peca`
--
ALTER TABLE `tb_peca`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `tb_veiculo`
--
ALTER TABLE `tb_veiculo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_cliente`
--
ALTER TABLE `tb_cliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `tb_peca`
--
ALTER TABLE `tb_peca`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `tb_veiculo`
--
ALTER TABLE `tb_veiculo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
