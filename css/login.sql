-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 22/11/2023 às 22:49
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
-- Banco de dados: `login`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `informacoes`
--

CREATE TABLE `informacoes` (
  `imc` text NOT NULL,
  `peso` text NOT NULL,
  `altura` text NOT NULL,
  `Circunferencia_abdominal` text NOT NULL,
  `id` int(12) NOT NULL,
  `idade` text NOT NULL,
  `sexo` text NOT NULL,
  `escola` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `informacoes`
--

INSERT INTO `informacoes` (`imc`, `peso`, `altura`, `Circunferencia_abdominal`, `id`, `idade`, `sexo`, `escola`) VALUES
('34', '123', '180', '0', 34, '14', 'feminino', '1'),
('34', '0', '180', '0', 35, '14', 'feminino', '100'),
('22', '94', '170', '98', 38, '14', 'outro', 'objetivo'),
('34', '0', '0', '0', 45, '0', 'outro', 'Del rey'),
('34', '123', '0', '98', 46, '20', 'masculino', 'Del rey'),
('34', '123', '180', '98', 47, '69', 'feminino', 'del rey'),
('34', '70', '170', '68', 48, '18', 'masculino', 'tiradentes');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(140) DEFAULT NULL,
  `email` varchar(140) NOT NULL,
  `senha` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`) VALUES
(1, 'jvsqueiroz', 'jvsqueiroz098@gmail.com', 'nutrikids2023'),
(2, 'Tulio', 'tuliomendesbatista1@gmail.com', 'nutrikids2023'),
(3, 'Amanda', 'amanda-210@hotmail.com', 'nutrikids2023'),
(4, 'Valquiria', 'valquiriaech@outlook.com', 'nutrikids2023'),
(5, 'Luana', 'luanaberaldo@hotmail.com', 'nutrikids2023'),
(6, 'Clara', 'emailclarasoares@gmail.com', 'nutrikids2023'),
(7, 'Hugo', 'esperhugo81@gmail.com', 'nutrikids2023'),
(8, 'Pedro', 'pedrohenriquelemos16@gmail.com.br', 'nutrikids2023'),
(9, 'Kihara', 'bkiharadeoliveira@gmail.com', 'nutrikids2023'),
(49, 'gabriel teixeira bernardes', 'bernardesgabriel00@gmail.com', '$2y$10$t0oegLKs3'),
(52, 'cristiane medeiros teixeira bernardes', 'crizbernardes@gmail.com', '$2y$10$tWroQaIQb'),
(53, 'ishdbfsb', 'o@ggg.com', '$2y$10$uUDT3tMvh'),
(54, 'gtb', 'gabriel', '$2y$10$4vOSycSNB'),
(55, 'Pedro', 'pedrohenriquelemos16@gmail.com.br', '$2y$10$Sy2hsOZHX'),
(56, '', '', '$2y$10$oSmATsYCO'),
(57, 'rayssa vasconcelos garcia', 'sasa', '$2y$10$02SfFXkxI');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `informacoes`
--
ALTER TABLE `informacoes`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `informacoes`
--
ALTER TABLE `informacoes`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
