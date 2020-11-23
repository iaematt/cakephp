-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 23-Nov-2020 às 05:39
-- Versão do servidor: 10.4.14-MariaDB
-- versão do PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `cakephp`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `categories`
--

INSERT INTO `categories` (`id`, `name`, `created`, `modified`) VALUES
(1, 'Gaming', '2020-11-20 22:54:31', '2020-11-23 05:29:38'),
(2, 'Asus', '2020-11-21 17:50:09', '2020-11-21 17:50:09'),
(3, 'Xiaomi', '2020-11-21 17:52:34', '2020-11-21 17:52:34'),
(5, 'Cooler Master', '2020-11-23 05:30:51', '2020-11-23 05:30:51');

-- --------------------------------------------------------

--
-- Estrutura da tabela `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `category_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `news`
--

INSERT INTO `news` (`id`, `title`, `description`, `category_id`, `created`, `modified`) VALUES
(1, 'Placa Mãe Tuf Gaming', 'Testing.', 2, '2020-11-20 22:54:50', '2020-11-21 18:01:34'),
(2, 'Xiaomi Note 8 Pro', 'Novo telefone.', 3, '2020-11-21 15:56:21', '2020-11-21 17:52:42'),
(3, 'Gabinete AeroCool', 'Gabinete gaming AeroCool.', 1, '2020-11-21 17:13:09', '2020-11-21 18:09:37'),
(4, 'Mouse Corsair Harpoon', 'Mouse gaming.', 1, '2020-11-21 18:08:39', '2020-11-21 18:08:39');

-- --------------------------------------------------------

--
-- Estrutura da tabela `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `ref` int(11) NOT NULL,
  `description` text NOT NULL,
  `tags` text NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `products`
--

INSERT INTO `products` (`id`, `title`, `ref`, `description`, `tags`, `created`, `modified`) VALUES
(1, 'Placa Mãe Asus Tuf Gaming', 123456, 'Placa mãe Asus Tuf Gaming.', 'placa mae', '2020-11-21 20:36:30', '2020-11-21 20:36:30'),
(2, 'Placa Mãe Asus Tuf Gaming', 123123, 'asfdasdf', 'asdfasdf', '2020-11-21 20:44:36', '2020-11-21 20:44:36'),
(3, 'test edit', 123, 'test', 'test', '2020-11-22 00:31:05', '2020-11-22 00:37:50'),
(4, 'Ventilador', 1234, 'Ventilador', 'ar', '2020-11-22 16:16:58', '2020-11-22 16:16:58');

-- --------------------------------------------------------

--
-- Estrutura da tabela `product_categories`
--

CREATE TABLE `product_categories` (
  `id` int(11) NOT NULL,
  `name` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `created`, `modified`) VALUES
(1, 'Matheus', 'matheus@devbsb.com.br', '119062bfabbcaaa204f1941f2db877fa1733b86b', '2020-11-23 04:30:20', '2020-11-23 04:30:20'),
(2, 'Douglas', 'douglas@gmail.com', '119062bfabbcaaa204f1941f2db877fa1733b86b', '2020-11-23 05:31:39', '2020-11-23 05:31:39');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
