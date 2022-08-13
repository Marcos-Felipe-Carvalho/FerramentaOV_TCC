-- phpMyAdmin SQL Dump
-- version 5.2.1-dev+20220813.c78c5e320b
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 13, 2022 at 04:32 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bd_ferramanta_ov`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_users`
--

CREATE TABLE `tb_users` (
  `id_user` int(4) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `profile` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_users`
--

INSERT INTO `tb_users` (`id_user`, `name`, `email`, `password`, `profile`) VALUES
(1, 'Rafael Graciotto', 'rgraciotto@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Psicólogo/Orientador Vocacional'),
(2, 'Marcos Felipe Carvalho', 'marcos.felipe2001@outlook.com', 'e10adc3949ba59abbe56e057f20f883e', 'Psicólogo/Orientador Vocacional'),
(3, 'Fagner Vidal', 'fagnerjlc@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Psicólogo/Orientador Vocacional'),
(4, 'Brenda Sophia Lima', 'brenda.lima@gmail.com', '0f5b6239d91a6ee58ce694ac1a0ecc7d', 'Entrevista/Orientado'),
(5, 'Ana Rebeca Alves', 'ana.alves@gmail.com', '043e2df9912dc5c85f5cfb0b248b7e5b', 'Psicólogo/Orientador Vocacional'),
(6, 'Nicole Sarah Gomes', 'nicole.gomes@gmail.com', 'f99aad5016f29389fa7b02f53741bc3e', 'Psicólogo/Orientador Vocacional');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_users`
--
ALTER TABLE `tb_users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_users`
--
ALTER TABLE `tb_users`
  MODIFY `id_user` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
