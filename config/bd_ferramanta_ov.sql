-- phpMyAdmin SQL Dump
-- version 5.2.1-dev+20220813.c78c5e320b
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 07, 2022 at 08:02 PM
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
-- Table structure for table `tb_analysis_text`
--

CREATE TABLE `tb_analysis_text` (
  `id_analysys_text` int(4) NOT NULL,
  `id_user` int(4) NOT NULL,
  `user_api` varchar(255) NOT NULL,
  `agreeableness_level` varchar(60) NOT NULL,
  `conscientiousness_level` varchar(60) NOT NULL,
  `emotional_stability_level` varchar(60) NOT NULL,
  `extraversion_level` varchar(60) NOT NULL,
  `openness_level` varchar(60) NOT NULL,
  `agreeableness_score` float(6,2) NOT NULL,
  `conscientiousness_score` float(6,2) NOT NULL,
  `emotional_stability_score` float(6,2) NOT NULL,
  `extraversion_score` float(6,2) NOT NULL,
  `openness_score` float(6,2) NOT NULL,
  `about_me` varchar(3500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_analysis_text`
--

INSERT INTO `tb_analysis_text` (`id_analysys_text`, `id_user`, `user_api`, `agreeableness_level`, `conscientiousness_level`, `emotional_stability_level`, `extraversion_level`, `openness_level`, `agreeableness_score`, `conscientiousness_score`, `emotional_stability_score`, `extraversion_score`, `openness_score`, `about_me`) VALUES
(17, 5, '799affd5f72079b43891', ' Somewhat Agreeable', 'Conscientious', 'Somewhat Balanced', 'Extroverted', 'Open', 5.20, 6.63, 6.53, 6.43, 7.56, ' Bianca, 22 years old, lives in Curitiba, keeps in dentistry lives with parents.He likes animals, especially dogs.Likes to play the piano, passionate about music.Likes to read series and romance books.He has a profile and is focused on numbers, obsessed with novelties and innovations (he seeks novelties in the international market), he always wants to qualify his time, he doesn\'t have much time and his schedule is open.He wants to increase his sales, generate more leadership without satisfactory results with marketing, increase his sales, be seen innovating in time strategies and as an authority.Its main obstacles are the lack of budget to invest in new solutions, the excess of tasks and the difficulty of time management, and the little manpower available to put in all the practices as their ideas.His main goal is to learn to play the guitar to reduce his stress by doing something he really enjoys;They have already learned but have not achieved results, they have difficulty learning with methodologies, they want to learn fast, because if they learn alone, they will not achieve in the short term and stressed;His instrument is the guitar, but he is also interested in guitar. His favorite genre is blues, also enjoying classic rock and jazz.He is a person with a strong personality, who likes to make decisions based on market data;From a family in the small town of Pitangueiras (interior of São Paulo), Clara\'s mother was a hairdresser and her humble father a collective bus driver.It was in 2007 that he opened Vitalcred, a financial services company that offered payments through booklets and credit cards.Thus, the dentist began to market this solution to several friends by profession.In 2008, he received a proposal from APCD (Paulista Association of Dental Surgeons) to popularize the system in São Paulo.');

-- --------------------------------------------------------

--
-- Table structure for table `tb_test_questions`
--

CREATE TABLE `tb_test_questions` (
  `id_question` int(4) NOT NULL,
  `question` varchar(65) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_test_questions`
--

INSERT INTO `tb_test_questions` (`id_question`, `question`) VALUES
(1, 'É conversador, comunicativo'),
(2, 'Tende a ser crítico com os outros'),
(3, 'É minucioso e detalhista no trabalho'),
(4, 'É depressivo, triste'),
(5, 'É original, tem sempre novas ideias'),
(6, 'É reservado'),
(7, 'É prestativo e ajuda os outros'),
(8, 'Pode ser um tanto descuidado'),
(9, 'É relaxado, controla bem o stress'),
(10, 'É curioso sobre muitas coisas diferentes'),
(11, 'É cheio de energia'),
(12, 'Começa discussões, disputas, com os outros'),
(13, 'É um trabalhador de confiança'),
(14, 'Fica tenso com frequência'),
(15, 'É engenhoso, alguém que gosta de analisar profundamente as coisas'),
(16, 'Gera muito entusiasmo'),
(17, 'Tem capacidade de perdoar, perdoa facilmente'),
(18, 'Tende a ser desorganizado'),
(19, 'Preocupa-se muito com tudo'),
(20, 'Tem uma imaginação fértil'),
(21, 'Tende a ser quieto, calado'),
(22, 'É geralmente confiável'),
(23, 'Tende a ser preguiçoso'),
(24, 'É emocionalmente estável, não se altera facilmente'),
(25, 'É inventivo, criativo'),
(26, 'É assertivo, não teme expressar o que sente'),
(27, 'Às vezes é frio e distante'),
(28, 'Insiste até concluir a tarefa ou o trabalho'),
(29, 'É temperamental, muda de humor facilmente'),
(30, 'Valoriza o artístico, o estético'),
(31, 'É, às vezes, tímido e inibido'),
(32, 'É amável, tem consideração pelos outros'),
(33, 'Faz as coisas com eficiência'),
(34, 'Mantém-se calmo nas situações de tensão'),
(35, 'Prefere trabalho rotineiro'),
(36, 'É sociável, extrovertido'),
(37, 'É, às vezes, rude (grosseiro) com os outros'),
(38, 'Faz planos e segue-os à risca'),
(39, 'Fica nervoso facilmente'),
(40, 'Gosta de refletir, brincar com as ideias'),
(41, 'Tem poucos interesses artísticos'),
(42, 'Gosta de cooperar com os outros'),
(43, 'É facilmente distraído'),
(44, 'É sofisticado em artes, música ou literatura ');

-- --------------------------------------------------------

--
-- Table structure for table `tb_test_result`
--

CREATE TABLE `tb_test_result` (
  `id_result` int(4) NOT NULL,
  `id_user` int(4) NOT NULL,
  `id_question` int(4) NOT NULL,
  `result` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_test_result`
--

INSERT INTO `tb_test_result` (`id_result`, `id_user`, `id_question`, `result`) VALUES
(160, 4, 1, 5),
(161, 4, 2, 4),
(162, 4, 3, 3),
(163, 4, 4, 2),
(164, 4, 5, 1),
(165, 4, 6, 1),
(166, 4, 7, 2),
(167, 4, 8, 3),
(168, 4, 9, 4),
(169, 4, 10, 5),
(170, 4, 11, 1),
(171, 4, 12, 2),
(172, 4, 13, 3),
(173, 4, 14, 4),
(174, 4, 15, 1),
(175, 4, 16, 4),
(176, 4, 17, 5),
(177, 4, 18, 3),
(178, 4, 19, 3),
(179, 4, 20, 3),
(180, 4, 21, 5),
(181, 4, 22, 5),
(182, 4, 23, 5),
(183, 4, 24, 3),
(184, 4, 25, 1),
(185, 4, 26, 3),
(186, 4, 27, 3),
(187, 4, 28, 5),
(188, 4, 29, 5),
(189, 4, 30, 1),
(190, 4, 31, 5),
(191, 4, 32, 4),
(192, 4, 33, 4),
(193, 4, 34, 5),
(194, 4, 35, 5),
(195, 4, 36, 3),
(196, 4, 37, 5),
(197, 4, 38, 5),
(198, 4, 39, 1),
(199, 4, 40, 3),
(200, 4, 41, 5),
(201, 4, 42, 4),
(202, 4, 43, 1),
(203, 4, 44, 3);

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
(6, 'Nicole Sarah Gomes', 'nicole.gomes@gmail.com', 'f99aad5016f29389fa7b02f53741bc3e', 'Psicólogo/Orientador Vocacional'),
(7, 'Marcos Felipe Carvalho', 'mc2495070@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Psicólogo/Orientador Vocacional');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_analysis_text`
--
ALTER TABLE `tb_analysis_text`
  ADD PRIMARY KEY (`id_analysys_text`);

--
-- Indexes for table `tb_test_questions`
--
ALTER TABLE `tb_test_questions`
  ADD PRIMARY KEY (`id_question`);

--
-- Indexes for table `tb_test_result`
--
ALTER TABLE `tb_test_result`
  ADD PRIMARY KEY (`id_result`),
  ADD KEY `fk_id_user` (`id_user`),
  ADD KEY `fk_id_question` (`id_question`);

--
-- Indexes for table `tb_users`
--
ALTER TABLE `tb_users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_analysis_text`
--
ALTER TABLE `tb_analysis_text`
  MODIFY `id_analysys_text` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tb_test_questions`
--
ALTER TABLE `tb_test_questions`
  MODIFY `id_question` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `tb_test_result`
--
ALTER TABLE `tb_test_result`
  MODIFY `id_result` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=204;

--
-- AUTO_INCREMENT for table `tb_users`
--
ALTER TABLE `tb_users`
  MODIFY `id_user` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_test_result`
--
ALTER TABLE `tb_test_result`
  ADD CONSTRAINT `fk_id_question` FOREIGN KEY (`id_question`) REFERENCES `tb_test_questions` (`id_question`),
  ADD CONSTRAINT `fk_id_user` FOREIGN KEY (`id_user`) REFERENCES `tb_users` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
