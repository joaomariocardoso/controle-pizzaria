-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 15, 2017 at 02:30 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pizzaria`
--

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `neighborhood` varchar(255) NOT NULL,
  `cep` varchar(20) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(50) NOT NULL,
  `observations` text,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `name`, `address`, `neighborhood`, `cep`, `phone`, `city`, `state`, `observations`, `created`, `modified`) VALUES
(1, 'JoÃ£o Mario Cardoso de Melo', 'Rua dos Sitiantes', 'Vila Isabel', '02843-898', '(11) 0000 - 0000', 'SÃ£o Paulo', 'SP', '', '2016-11-22 21:08:10', '2016-11-22 21:08:10'),
(2, 'Ivan Diego Sanchez', 'Rua dos Sitiantes', 'Vila Isabel', '02843-898', '(11) 0000 - 0000', 'SÃ£o Paulo', 'SP', '', '2016-11-22 21:08:44', '2016-11-22 21:08:44'),
(3, 'Henrique Papile da Silva', 'Rua dos Sitiantes', 'Vila Isabel', '02843-898', '(11) 0000 - 0000', 'SÃ£o Paulo', 'SP', '', '2016-11-22 21:09:20', '2016-11-22 21:09:20'),
(4, 'Fernando Pais Barbosa', 'Rua dos Sitiantes', 'Vila Isabel', '02843-898', '(11) 0000 - 0000', 'SÃ£o Paulo', 'SP', '', '2016-11-22 21:09:53', '2016-11-22 21:09:53');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text,
  `ingredients` text NOT NULL,
  `price` float NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `ingredients`, `price`, `created`, `modified`) VALUES
(1, 'Mussarela', '', 'Mussarela e OrÃ©gano', 29, '2016-11-22 21:14:34', '2016-11-22 21:14:34'),
(2, 'Carpaccio', '', 'Molho de Mostarda e ParmesÃ£o', 45, '2016-11-22 21:15:22', '2016-11-22 21:15:22'),
(3, 'Margherita', '', 'Mussarela, ParmesÃ£o, ManjericÃ£o, Tomate e OrÃ©gano', 34, '2016-11-22 21:15:38', '2016-11-22 21:15:38'),
(4, 'Alho ParmesÃ£o', '', 'Alho frito e ParmesÃ£o', 35, '2016-11-22 21:15:56', '2016-11-22 21:15:56');

-- --------------------------------------------------------

--
-- Table structure for table `products_requests`
--

CREATE TABLE `products_requests` (
  `id` int(11) NOT NULL,
  `request_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products_requests`
--

INSERT INTO `products_requests` (`id`, `request_id`, `product_id`) VALUES
(1, 3, 1),
(2, 3, 2);

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

CREATE TABLE `requests` (
  `id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `total` float NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `requests`
--

INSERT INTO `requests` (`id`, `client_id`, `total`, `created`, `modified`) VALUES
(3, 2, 45, '2016-11-22 21:53:12', '2016-11-22 21:53:12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products_requests`
--
ALTER TABLE `products_requests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `products_requests`
--
ALTER TABLE `products_requests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `requests`
--
ALTER TABLE `requests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
