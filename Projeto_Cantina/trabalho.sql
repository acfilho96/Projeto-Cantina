-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 13-Dez-2021 às 03:38
-- Versão do servidor: 10.4.21-MariaDB
-- versão do PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `trabalho`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `comida`
--

CREATE TABLE `comida` (
  `codigo` int(15) NOT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `ingredientes` varchar(255) DEFAULT NULL,
  `fornecedor` varchar(50) DEFAULT NULL,
  `preco` double DEFAULT NULL,
  `tipo` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `comida`
--

INSERT INTO `comida` (`codigo`, `nome`, `ingredientes`, `fornecedor`, `preco`, `tipo`) VALUES
(26, 'Refrigerante', 'acucar', 'cocacola', 3.5, 2),
(27, 'coxinha', 'carne', 'HomeFood', 3.5, 1),
(28, 'suco', 'laranja', 'HomeFood', 3.45, 2),
(29, 'pastel', 'carne', 'HomeFood', 3.5, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `user`
--

CREATE TABLE `user` (
  `id` int(15) NOT NULL,
  `cpf` varchar(50) DEFAULT NULL,
  `turma` varchar(25) DEFAULT NULL,
  `turno` varchar(25) DEFAULT NULL,
  `nome` varchar(50) NOT NULL,
  `endereco` varchar(50) DEFAULT NULL,
  `telefone` varchar(25) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `usuario` varchar(25) NOT NULL,
  `senha` varchar(25) NOT NULL,
  `tipo` int(10) DEFAULT NULL,
  `matricula` int(15) DEFAULT NULL,
  `saldo` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `user`
--

INSERT INTO `user` (`id`, `cpf`, `turma`, `turno`, `nome`, `endereco`, `telefone`, `email`, `usuario`, `senha`, `tipo`, `matricula`, `saldo`) VALUES
(7, '111234', NULL, NULL, 'funcionario@gmail.com', 'funcionario@gmail.com', 'funcionario@gmail.com', 'funcionario@gmail.com', 'funcionario@gmail.com', '1234', 3, 1, NULL),
(51, NULL, NULL, NULL, 'responsavel@gmail.com', 'imbui', '71999-9999', 'responsavel@gmail.com', 'responsavel@gmail.com', '1234', 2, NULL, NULL),
(53, NULL, NULL, NULL, 'aluno@gmail.com', 'cabula', '7198888-4444', 'aluno@gmail.com', 'aluno@gmail.com', '1234', 1, 123, 79);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `comida`
--
ALTER TABLE `comida`
  ADD PRIMARY KEY (`codigo`);

--
-- Índices para tabela `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `comida`
--
ALTER TABLE `comida`
  MODIFY `codigo` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de tabela `user`
--
ALTER TABLE `user`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
