-- phpMyAdmin SQL Dump
-- version 5.2.1-dev+20220813.c78c5e320b
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 09, 2022 at 04:44 PM
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
-- Table structure for table `tb_category`
--

CREATE TABLE `tb_category` (
  `id_category` int(4) NOT NULL,
  `test` varchar(60) NOT NULL,
  `category` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_category`
--

INSERT INTO `tb_category` (`id_category`, `test`, `category`) VALUES
(1, 'Big Five', 'Extroversão'),
(2, 'Big Five', 'Amabilidade'),
(3, 'Big Five', 'Abertura a Experiências'),
(4, 'Big Five', 'Conscienciosidade'),
(5, 'Big Five', 'Neuroticismo');

-- --------------------------------------------------------

--
-- Table structure for table `tb_test_questions`
--

CREATE TABLE `tb_test_questions` (
  `id_question` int(4) NOT NULL,
  `id_category` int(4) NOT NULL,
  `question` varchar(65) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_test_questions`
--

INSERT INTO `tb_test_questions` (`id_question`, `id_category`, `question`) VALUES
(1, 1, 'É conversador, comunicativo'),
(2, 2, 'Tende a ser crítico com os outros'),
(3, 4, 'É minucioso e detalhista no trabalho'),
(4, 5, 'É depressivo, triste'),
(5, 3, 'É original, tem sempre novas ideias'),
(6, 1, 'É reservado'),
(7, 2, 'É prestativo e ajuda os outros'),
(8, 4, 'Pode ser um tanto descuidado'),
(9, 5, 'É relaxado, controla bem o stress'),
(10, 3, 'É curioso sobre muitas coisas diferentes'),
(11, 1, 'É cheio de energia'),
(12, 2, 'Começa discussões, disputas, com os outros'),
(13, 4, 'É um trabalhador de confiança'),
(14, 5, 'Fica tenso com frequência'),
(15, 3, 'É engenhoso, alguém que gosta de analisar profundamente as coisas'),
(16, 1, 'Gera muito entusiasmo'),
(17, 2, 'Tem capacidade de perdoar, perdoa facilmente'),
(18, 4, 'Tende a ser desorganizado'),
(19, 5, 'Preocupa-se muito com tudo'),
(20, 3, 'Tem uma imaginação fértil'),
(21, 1, 'Tende a ser quieto, calado'),
(22, 2, 'É geralmente confiável'),
(23, 4, 'Tende a ser preguiçoso'),
(24, 5, 'É emocionalmente estável, não se altera facilmente'),
(25, 3, 'É inventivo, criativo'),
(26, 1, 'É assertivo, não teme expressar o que sente'),
(27, 2, 'Às vezes é frio e distante'),
(28, 4, 'Insiste até concluir a tarefa ou o trabalho'),
(29, 5, 'É temperamental, muda de humor facilmente'),
(30, 3, 'Valoriza o artístico, o estético'),
(31, 1, 'É, às vezes, tímido e inibido'),
(32, 2, 'É amável, tem consideração pelos outros'),
(33, 4, 'Faz as coisas com eficiência'),
(34, 5, 'Mantém-se calmo nas situações de tensão'),
(35, 3, 'Prefere trabalho rotineiro'),
(36, 1, 'É sociável, extrovertido'),
(37, 2, 'É, às vezes, rude (grosseiro) com os outros'),
(38, 4, 'Faz planos e segue-os à risca'),
(39, 5, 'Fica nervoso facilmente'),
(40, 3, 'Gosta de refletir, brincar com as ideias'),
(41, 3, 'Tem poucos interesses artísticos'),
(42, 2, 'Gosta de cooperar com os outros'),
(43, 4, 'É facilmente distraído'),
(44, 3, 'É sofisticado em artes, música ou literatura ');

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
(204, 5, 1, 4),
(205, 5, 2, 3),
(206, 5, 3, 4),
(207, 5, 4, 2),
(208, 5, 5, 3),
(209, 5, 6, 4),
(210, 5, 7, 4),
(211, 5, 8, 3),
(212, 5, 9, 3),
(213, 5, 10, 4),
(214, 5, 11, 3),
(215, 5, 12, 1),
(216, 5, 13, 4),
(217, 5, 14, 3),
(218, 5, 15, 3),
(219, 5, 16, 3),
(220, 5, 17, 4),
(221, 5, 18, 2),
(222, 5, 19, 3),
(223, 5, 20, 2),
(224, 5, 21, 4),
(225, 5, 22, 4),
(226, 5, 23, 3),
(227, 5, 24, 4),
(228, 5, 25, 3),
(229, 5, 26, 2),
(230, 5, 27, 3),
(231, 5, 28, 4),
(232, 5, 29, 3),
(233, 5, 30, 3),
(234, 5, 31, 4),
(235, 5, 32, 4),
(236, 5, 33, 4),
(237, 5, 34, 3),
(238, 5, 35, 1),
(239, 5, 36, 2),
(240, 5, 37, 2),
(241, 5, 38, 3),
(242, 5, 39, 2),
(243, 5, 40, 3),
(244, 5, 41, 3),
(245, 5, 42, 4),
(246, 5, 43, 3),
(247, 5, 44, 3);

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
(4, 'Brenda Sophia Lima', 'brenda.lima@gmail.com', '0f5b6239d91a6ee58ce694ac1a0ecc7d', 'Entrevistado/Orientado'),
(5, 'Ana Rebeca Alves', 'ana.alves@gmail.com', '043e2df9912dc5c85f5cfb0b248b7e5b', 'Entrevistado/Orientado'),
(6, 'Nicole Sarah Gomes', 'nicole.gomes@gmail.com', 'f99aad5016f29389fa7b02f53741bc3e', 'Entrevistado/Orientado'),
(7, 'Carlos Almeida', 'carlos.almeida@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Entrevistado/Orientado');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_analysis_text`
--
ALTER TABLE `tb_analysis_text`
  ADD PRIMARY KEY (`id_analysys_text`),
  ADD KEY `fk_id_user_analysis` (`id_user`);

--
-- Indexes for table `tb_category`
--
ALTER TABLE `tb_category`
  ADD PRIMARY KEY (`id_category`);

--
-- Indexes for table `tb_test_questions`
--
ALTER TABLE `tb_test_questions`
  ADD PRIMARY KEY (`id_question`),
  ADD KEY `fk_id_category` (`id_category`);

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
-- AUTO_INCREMENT for table `tb_category`
--
ALTER TABLE `tb_category`
  MODIFY `id_category` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_test_questions`
--
ALTER TABLE `tb_test_questions`
  MODIFY `id_question` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `tb_test_result`
--
ALTER TABLE `tb_test_result`
  MODIFY `id_result` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=248;

--
-- AUTO_INCREMENT for table `tb_users`
--
ALTER TABLE `tb_users`
  MODIFY `id_user` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_analysis_text`
--
ALTER TABLE `tb_analysis_text`
  ADD CONSTRAINT `fk_id_user_analysis` FOREIGN KEY (`id_user`) REFERENCES `tb_users` (`id_user`);

--
-- Constraints for table `tb_test_questions`
--
ALTER TABLE `tb_test_questions`
  ADD CONSTRAINT `fk_id_category` FOREIGN KEY (`id_category`) REFERENCES `tb_category` (`id_category`);

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
