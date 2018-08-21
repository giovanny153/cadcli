-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 21-Ago-2018 às 18:29
-- Versão do servidor: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cadcli`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cli_compra`
--

CREATE TABLE `cli_compra` (
  `id` varchar(16) CHARACTER SET utf8 DEFAULT NULL,
  `cliente` varchar(12) CHARACTER SET utf8 DEFAULT NULL,
  `im_vel` varchar(9) CHARACTER SET utf8 DEFAULT NULL,
  `Data` datetime DEFAULT NULL,
  `Valor` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cli_compra`
--

INSERT INTO `cli_compra` (`id`, `cliente`, `im_vel`, `Data`, `Valor`) VALUES
('cli_compra000001', 'Paul', 'imov00001', '2018-08-15 00:00:00', 15000),
('cli_compra000002', 'Gaspar Zinho', 'imov00002', '2018-08-16 00:00:00', 12000),
('cli_compra000003', 'Giovanny', 'imov00003', '2018-08-17 00:00:00', 35000),
('cli_compra000004', 'Juvenal', 'imov00004', '2018-08-18 00:00:00', 64000),
('cli_compra000005', 'Giovanny', 'imov00005', '2018-08-19 00:00:00', 65000),
('cli_compra000006', 'Juvenal', 'imov00006', '2018-08-20 00:00:00', 251000),
('cli_compra000007', 'Giovanny', 'imov00007', '2018-08-21 00:00:00', 360000),
('cli_compra000008', 'Juvenal', 'imov00008', '2018-08-22 00:00:00', 870000),
('cli_compra000009', 'Giovanny', 'imov00009', '2018-08-23 00:00:00', 98541);

-- --------------------------------------------------------

--
-- Estrutura da tabela `fin_mov`
--

CREATE TABLE `fin_mov` (
  `id` int(11) NOT NULL,
  `valor` decimal(5,2) DEFAULT NULL,
  `descricao` varchar(12) CHARACTER SET utf8 DEFAULT NULL,
  `data` date DEFAULT NULL,
  `categoria` varchar(6) CHARACTER SET utf8 DEFAULT NULL,
  `conta` varchar(9) CHARACTER SET utf8 DEFAULT NULL,
  `timestamp` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `fin_mov`
--

INSERT INTO `fin_mov` (`id`, `valor`, `descricao`, `data`, `categoria`, `conta`, `timestamp`) VALUES
(1, '30.00', 'Burguer King', '2018-05-01', '', '', '2018-08-20 15:20:17'),
(2, '35.74', 'Subway', '2018-05-01', '', '', '2018-08-20 15:20:19'),
(3, '25.13', 'Mc Donalds', '2018-05-01', '', '', '2018-08-20 15:20:20'),
(4, '25.10', 'Burguer King', '2018-05-03', 'Subway', 'Bradesco', '2018-08-20 15:20:25'),
(5, '352.69', 'Shopping', '2018-05-03', 'Subway', 'Bradesco', '2018-08-20 15:20:44'),
(6, '143.25', 'Outback', '0000-00-00', '', '', '2018-08-20 15:20:30'),
(7, '95.14', 'Dafiti', '2018-05-08', 'Roupa', 'Santander', '0000-00-00 00:00:00'),
(8, '154.25', 'Aramis', '2018-05-08', 'Subway', 'Bradesco', '2018-08-20 15:20:37'),
(9, '10.35', 'Torra torra', '2018-05-08', 'Roupa', 'Nubank', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `fotos`
--

CREATE TABLE `fotos` (
  `id` int(10) UNSIGNED NOT NULL,
  `nome` varchar(60) NOT NULL,
  `conteudo` mediumblob NOT NULL,
  `tipo` varchar(20) NOT NULL,
  `tamanho` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `post`
--

CREATE TABLE `post` (
  `id` int(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `views` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `post`
--

INSERT INTO `post` (`id`, `title`, `views`) VALUES
(1, 'title 1', 127),
(2, 'title 2', 500),
(3, 'title 3', 300),
(4, 'title 4', 200);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_employee`
--

CREATE TABLE `tbl_employee` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `gender` varchar(10) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `age` int(11) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tbl_employee`
--

INSERT INTO `tbl_employee` (`id`, `name`, `address`, `gender`, `designation`, `age`, `image`) VALUES
(1, 'Bruce Tom', '656 Edsel Road\r\nSherman Oaks, CA 91403', 'Male', 'Driver', 36, '1.jpg'),
(5, 'Clara Gilliam', '63 Woodridge Lane\r\nMemphis, TN 38138', 'Female', 'Programmer', 24, '2.jpg'),
(6, 'Barbra K. Hurley', '1241 Canis Heights Drive\r\nLos Angeles, CA 90017', 'Female', 'Service technician', 26, '3.jpg'),
(7, 'Antonio J. Forbes', '403 Snyder Avenue\r\nCharlotte, NC 28208', 'Male', 'Faller', 32, '4.jpg'),
(8, 'Charles D. Horst', '1636 Walnut Hill Drive\r\nCincinnati, OH 45202', 'Male', 'Financial investigator', 29, '5.jpg'),
(175, 'Ronald D. Colella', '1571 Bingamon Branch Road, Barrington, IL 60010', 'Male', 'Top executive', 32, '6.jpg'),
(174, 'Martha B. Tomlinson', '4005 Bird Spring Lane, Houston, TX 77002', 'Female', 'Systems programmer', 38, '7.jpg'),
(161, 'Glenda J. Stewart', '3482 Pursglove Court, Rossburg, OH 45362', 'Female', 'Cost consultant', 28, '8.jpg'),
(162, 'Jarrod D. Jones', '3827 Bingamon Road, Garfield Heights, OH 44125', 'Male', 'Manpower development advisor', 64, '9.jpg'),
(163, 'William C. Wright', '2653 Pyramid Valley Road, Cedar Rapids, IA 52404', 'Male', 'Political geographer', 33, '10.jpg'),
(178, 'Sara K. Ebert', '1197 Nelm Street\r\nMc Lean, VA 22102', 'Female', 'Billing machine operator', 50, ''),
(177, 'Patricia L. Scott', '1584 Dennison Street\r\nModesto, CA 95354', 'Female', 'Urban and regional planner', 54, ''),
(179, 'James K. Ridgway', '3462 Jody Road\r\nWayne, PA 19088', 'Female', 'Recreation leader', 41, ''),
(180, 'Stephen A. Crook', '448 Deercove Drive\r\nDallas, TX 75201', 'Male', 'Optical goods worker', 36, ''),
(181, 'Kimberly J. Ellis', '4905 Holt Street\r\nFort Lauderdale, FL 33301', 'Male', 'Dressing room attendant', 24, ''),
(182, 'Elizabeth N. Bradley', '1399 Randall Drive\r\nHonolulu, HI 96819', 'Female', ' Software quality assurance analyst', 25, ''),
(183, 'Steve John', '108, Vile Parle, CL', 'Male', 'Software Engineer', 29, ''),
(184, 'Marks Johnson', '021, Big street, NY', 'Male', 'Head of IT', 41, ''),
(185, 'Mak Pub', '1462 Juniper Drive\r\nBreckenridge, MI 48612', 'Male', 'Mental health counselor', 40, ''),
(186, 'Louis C. Charmis', '1462 Juniper Drive\r\nBreckenridge, MI 48612', 'Male', 'Mental health counselor', 40, '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_clientes`
--

CREATE TABLE `tb_clientes` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `email` varchar(90) NOT NULL,
  `telefone` varchar(15) DEFAULT NULL,
  `DATA` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_clientes`
--

INSERT INTO `tb_clientes` (`id`, `nome`, `email`, `telefone`, `DATA`) VALUES
(154, 'Paul', 'TESTER@OK.COM', '(19) 98714-5624', '2018-08-17 15:10:06'),
(158, 'Gaspar Zinho', 'g.zinho@ghosts.com', '00000', '2018-08-17 15:10:59'),
(159, 'Giovanny', 'melo.giovanny@gmail.com', '12353', '2018-08-17 15:09:21'),
(160, 'Juvenal', 'juvenal_amigo_leal@mail.com', '1198745-2561', '2018-08-17 15:10:39');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_suporte`
--

CREATE TABLE `tb_suporte` (
  `cod` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `email` varchar(90) NOT NULL,
  `telefone` varchar(15) DEFAULT NULL,
  `cpf` varchar(99) DEFAULT NULL,
  `DATA` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_suporte`
--

INSERT INTO `tb_suporte` (`cod`, `nome`, `email`, `telefone`, `cpf`, `DATA`) VALUES
(138, 'Giovanny Dominico', '', '(16) 9818725467', NULL, '2018-08-16 17:14:48'),
(141, 'Giovanny Dominico', '', '(16) 9818725467', NULL, '2018-08-16 17:14:48'),
(142, 'Giovanny Dominico', '', '(16) 9818725467', NULL, '2018-08-16 17:14:48'),
(143, 'Giovanny Dominico', '', '(16) 9818725467', NULL, '2018-08-16 17:14:48'),
(144, 'Giovanny Dominico', '', '(16) 9818725467', NULL, '2018-08-16 17:14:48'),
(145, 'Giovanny Dominico', '', '(16) 9818725467', NULL, '2018-08-16 17:14:48'),
(146, 'Giovanny Dominico', '', '(16) 9818725467', NULL, '2018-08-16 17:14:48'),
(147, 'asdas', 'telefone', 'asda@gmail.com', NULL, '2018-08-16 17:14:48'),
(148, '123', 'telefone', '123@gmail.com', NULL, '2018-08-16 17:14:48'),
(149, 'masdusa ijasd', 'telefone', '123@gmail.com', NULL, '2018-08-16 17:14:48'),
(150, 'saduas', 'telefone', '123@gmail.com', NULL, '2018-08-16 17:14:48'),
(151, '12312', '123@gmail.com', 'telefone', NULL, '2018-08-16 17:14:48'),
(152, '', '', '1@1.com', '', '2018-08-16 17:24:12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cli_compra`
--
ALTER TABLE `cli_compra`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `fin_mov`
--
ALTER TABLE `fin_mov`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fotos`
--
ALTER TABLE `fotos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_employee`
--
ALTER TABLE `tbl_employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_clientes`
--
ALTER TABLE `tb_clientes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_suporte`
--
ALTER TABLE `tb_suporte`
  ADD PRIMARY KEY (`cod`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fotos`
--
ALTER TABLE `fotos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_employee`
--
ALTER TABLE `tbl_employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=187;

--
-- AUTO_INCREMENT for table `tb_clientes`
--
ALTER TABLE `tb_clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=161;

--
-- AUTO_INCREMENT for table `tb_suporte`
--
ALTER TABLE `tb_suporte`
  MODIFY `cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=153;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
