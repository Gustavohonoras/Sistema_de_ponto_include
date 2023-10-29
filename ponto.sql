-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 29/10/2023 às 21:57
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
-- Banco de dados: `ponto`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `adms`
--

CREATE TABLE `adms` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `adms`
--

INSERT INTO `adms` (`id`, `name`, `email`, `password`) VALUES
(1, 'rogerio', 'rogeriomachadopio@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef');

-- --------------------------------------------------------

--
-- Estrutura para tabela `pontos`
--

CREATE TABLE `pontos` (
  `id` int(11) NOT NULL,
  `data_entrada` date NOT NULL,
  `entrada` time DEFAULT NULL,
  `saida` time DEFAULT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `pontos`
--

INSERT INTO `pontos` (`id`, `data_entrada`, `entrada`, `saida`, `user_id`) VALUES
(12, '2023-10-25', '08:00:00', '11:19:24', 10),
(14, '2023-10-24', '11:22:21', '11:31:18', 12),
(18, '2023-10-25', '12:01:00', '12:01:23', 13),
(22, '2023-10-25', '14:05:03', '14:05:08', 14),
(23, '2023-10-25', '14:34:29', '14:35:04', 15),
(28, '2023-10-25', '19:12:13', '19:12:55', 16),
(33, '2023-10-25', '19:32:59', '19:33:22', 11),
(34, '2023-10-28', '17:44:08', '17:44:17', 10),
(35, '2023-10-28', '17:44:36', '15:06:04', 10),
(36, '2023-10-29', '17:51:43', '17:51:47', 11);

-- --------------------------------------------------------

--
-- Estrutura para tabela `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(10, 'rogerio', 'rogeriomachadopio@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef'),
(11, 'levi', 'levi@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef'),
(12, 'lucas', 'lucas@gmail.com', '33a9e269dd782e92489a8e547b7ed582e0e1d42b'),
(13, 'joao', 'neverjm3@gmail.com', 'f322d2fa6a76a1a586f7989810afb18304a7c1c7'),
(14, 'maria', 'maria@gmail.com', 'e21fc56c1a272b630e0d1439079d0598cf8b8329'),
(15, 'rogerinho', 'piuzinho@gmail.com', 'e8e307ebeec2c872189278952c6e6df1ffe055b8'),
(16, 'pedro', 'pedro@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `adms`
--
ALTER TABLE `adms`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `pontos`
--
ALTER TABLE `pontos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Índices de tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `adms`
--
ALTER TABLE `adms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `pontos`
--
ALTER TABLE `pontos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `pontos`
--
ALTER TABLE `pontos`
  ADD CONSTRAINT `pontos_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
