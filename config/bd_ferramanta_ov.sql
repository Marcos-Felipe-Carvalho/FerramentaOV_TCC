-- phpMyAdmin SQL Dump
-- version 5.2.1-dev+20220813.c78c5e320b
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 24/09/2022 às 17:25
-- Versão do servidor: 10.4.24-MariaDB
-- Versão do PHP: 8.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bd_ferramanta_ov`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_analysis_text`
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
-- Despejando dados para a tabela `tb_analysis_text`
--

INSERT INTO `tb_analysis_text` (`id_analysys_text`, `id_user`, `user_api`, `agreeableness_level`, `conscientiousness_level`, `emotional_stability_level`, `extraversion_level`, `openness_level`, `agreeableness_score`, `conscientiousness_score`, `emotional_stability_score`, `extraversion_score`, `openness_score`, `about_me`) VALUES
(17, 5, '799affd5f72079b43891', ' Somewhat Agreeable', 'Conscientious', 'Somewhat Balanced', 'Extroverted', 'Open', 5.20, 6.63, 6.53, 6.43, 7.56, ' Bianca, 22 years old, lives in Curitiba, keeps in dentistry lives with parents.He likes animals, especially dogs.Likes to play the piano, passionate about music.Likes to read series and romance books.He has a profile and is focused on numbers, obsessed with novelties and innovations (he seeks novelties in the international market), he always wants to qualify his time, he doesn\'t have much time and his schedule is open.He wants to increase his sales, generate more leadership without satisfactory results with marketing, increase his sales, be seen innovating in time strategies and as an authority.Its main obstacles are the lack of budget to invest in new solutions, the excess of tasks and the difficulty of time management, and the little manpower available to put in all the practices as their ideas.His main goal is to learn to play the guitar to reduce his stress by doing something he really enjoys;They have already learned but have not achieved results, they have difficulty learning with methodologies, they want to learn fast, because if they learn alone, they will not achieve in the short term and stressed;His instrument is the guitar, but he is also interested in guitar. His favorite genre is blues, also enjoying classic rock and jazz.He is a person with a strong personality, who likes to make decisions based on market data;From a family in the small town of Pitangueiras (interior of São Paulo), Clara\'s mother was a hairdresser and her humble father a collective bus driver.It was in 2007 that he opened Vitalcred, a financial services company that offered payments through booklets and credit cards.Thus, the dentist began to market this solution to several friends by profession.In 2008, he received a proposal from APCD (Paulista Association of Dental Surgeons) to popularize the system in São Paulo.'),
(18, 8, '524905b17bf6a31d4733', ' Disagreeable', 'Very Conscientious', 'Balanced', 'Somewhat Introverted', 'Open', 2.97, 8.05, 7.90, 5.05, 7.79, 'Gustavo está cursando o terceiro ano do ensino médio, preparando-se para o vestibular. Ele ainda tem dúvidas sobre o curso ideal para a carreira que deseja seguir e, dentro dessas variáveis, qual a melhor opção para ele, analisando a concorrência local, regional ou nacional.Gustavo mora em Belo Horizonte (MG), tem 17 anos e atualmente cursa o terceiro ano do ensino médio;Seu principal objetivo é validar a carreira que deseja seguir e escolher o curso de graduação que mais se adapta à sua realidade;Ele está procurando uma Instituição de Ensino Superior (faculdade ou universidade);Está com dificuldades em validar sua orientação vocacional;Também possui dificuldade no entendimento de qual currículo, conteúdo programático e método de ensino se adequa melhor ao seu perfil e interesse;Ele possui condição de investir até R$ 1.000 por mês no curso de graduação e são seus pais que assumirão o investimento;Seus cursos de interesse no momento são administração e economia — seus pais possuem uma empresa familiar, convivendo com métodos de gestão no dia a dia, e por isso ele acredita ter perfil para esses cursos.'),
(19, 9, 'a1c7adbac7c423fabc0f', ' Somewhat Agreeable', 'Easygoing', 'Very Sensitive', 'Very Extroverted', 'Closed', 5.83, 2.76, 3.13, 9.80, 3.65, 'Extrovertida sim e muito, desconfiada e orgulhosa por autodefesa. Sonhadora e alegre por natureza. Melancólica por tendência. Contraditória e indecisa muitas vezes. Persistente no que anseio. Teimosa no que penso. Prisioneira de minha própria ânsia de liberdade! Sou honesta, justa e responsável. Mais do que beleza, prezo a essência, o bom humor e os princípios.Choro do nada e sorrio sem motivos. Mas gosto quando desabafo em lágrimas, me sinto forte, corajosa. Ao contrário do que todos pensam, que a lágrima é sinal de fraqueza. Ruim é jogarmos a raiva, a tristeza nos outros; brigando, gritando e machucando. Como todo ser humano, tenho meus momentos de crises, de descontrole emocional, mas nada que me faça perder a cabeça. Por eu ser uma pessoa extremamente extrovertida, quando fico séria, todos acham que estou triste. As vezes pode até ser verdade, mas as vezes a minha risada está mais pedindo socorro do que meu silêncio. Sou diversas vezes mal compreendida.Todos nós temos problemas mesmo. Quando estou a ajudar alguém, sempre me envolvo, não consigo ficar de longe. Me coloco no lugar do outro para entender suas ações e tentar justificar as atitudes.Não deixo nada nem ninguém passar por cima de mim. Sou a pessoa mais legal do mundo, mas só com quem merece. Se você não merece, eu posso ser a pessoa que você não vai querer nunca ver na frente. Afinal, cada um tem a Débora que merece.Tenho meus momentos off, momentos aquele que não quero ver ninguém. E esse momento me torna uma pessoa super chata.');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_category`
--

CREATE TABLE `tb_category` (
  `id_category` int(4) NOT NULL,
  `test` varchar(60) NOT NULL,
  `category` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `tb_category`
--

INSERT INTO `tb_category` (`id_category`, `test`, `category`) VALUES
(1, 'Big Five', 'Extroversão'),
(2, 'Big Five', 'Amabilidade'),
(3, 'Big Five', 'Abertura a Experiências'),
(4, 'Big Five', 'Conscienciosidade'),
(5, 'Big Five', 'Neuroticismo');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_test_questions`
--

CREATE TABLE `tb_test_questions` (
  `id_question` int(4) NOT NULL,
  `id_category` int(4) NOT NULL,
  `question` varchar(65) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Despejando dados para a tabela `tb_test_questions`
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
-- Estrutura para tabela `tb_test_result`
--

CREATE TABLE `tb_test_result` (
  `id_result` int(4) NOT NULL,
  `id_user` int(4) NOT NULL,
  `id_question` int(4) NOT NULL,
  `result` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `tb_test_result`
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
(247, 5, 44, 3),
(248, 9, 1, 2),
(249, 9, 2, 2),
(250, 9, 3, 3),
(251, 9, 4, 4),
(252, 9, 5, 5),
(253, 9, 6, 5),
(254, 9, 7, 4),
(255, 9, 8, 3),
(256, 9, 9, 2),
(257, 9, 10, 1),
(258, 9, 11, 1),
(259, 9, 12, 2),
(260, 9, 13, 3),
(261, 9, 14, 4),
(262, 9, 15, 5),
(263, 9, 16, 1),
(264, 9, 17, 2),
(265, 9, 18, 3),
(266, 9, 19, 4),
(267, 9, 20, 5),
(268, 9, 21, 5),
(269, 9, 22, 3),
(270, 9, 23, 1),
(271, 9, 24, 1),
(272, 9, 25, 1),
(273, 9, 26, 3),
(274, 9, 27, 1),
(275, 9, 28, 3),
(276, 9, 29, 3),
(277, 9, 30, 5),
(278, 9, 31, 5),
(279, 9, 32, 1),
(280, 9, 33, 5),
(281, 9, 34, 3),
(282, 9, 35, 1),
(283, 9, 36, 1),
(284, 9, 37, 4),
(285, 9, 38, 5),
(286, 9, 39, 5),
(287, 9, 40, 4),
(288, 9, 41, 1),
(289, 9, 42, 3),
(290, 9, 43, 5),
(291, 9, 44, 5),
(292, 8, 1, 1),
(293, 8, 2, 3),
(294, 8, 3, 1),
(295, 8, 4, 1),
(296, 8, 5, 5),
(297, 8, 6, 3),
(298, 8, 7, 5),
(299, 8, 8, 5),
(300, 8, 9, 5),
(301, 8, 10, 1),
(302, 8, 11, 3),
(303, 8, 12, 1),
(304, 8, 13, 5),
(305, 8, 14, 5),
(306, 8, 15, 1),
(307, 8, 16, 3),
(308, 8, 17, 5),
(309, 8, 18, 5),
(310, 8, 19, 1),
(311, 8, 20, 1),
(312, 8, 21, 5),
(313, 8, 22, 5),
(314, 8, 23, 2),
(315, 8, 24, 5),
(316, 8, 25, 5),
(317, 8, 26, 5),
(318, 8, 27, 1),
(319, 8, 28, 1),
(320, 8, 29, 5),
(321, 8, 30, 5),
(322, 8, 31, 1),
(323, 8, 32, 2),
(324, 8, 33, 5),
(325, 8, 34, 5),
(326, 8, 35, 5),
(327, 8, 36, 1),
(328, 8, 37, 2),
(329, 8, 38, 5),
(330, 8, 39, 1),
(331, 8, 40, 3),
(332, 8, 41, 5),
(333, 8, 42, 5),
(334, 8, 43, 5),
(335, 8, 44, 4);

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_users`
--

CREATE TABLE `tb_users` (
  `id_user` int(4) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `profile` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `tb_users`
--

INSERT INTO `tb_users` (`id_user`, `name`, `email`, `password`, `profile`) VALUES
(1, 'Rafael Graciotto', 'rgraciotto@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Psicólogo/Orientador Vocacional'),
(2, 'Marcos Felipe Carvalho', 'marcos.felipe2001@outlook.com', 'e10adc3949ba59abbe56e057f20f883e', 'Psicólogo/Orientador Vocacional'),
(3, 'Fagner Vidal', 'fagnerjlc@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Psicólogo/Orientador Vocacional'),
(4, 'Brenda Sophia Lima', 'brenda.lima@gmail.com', '0f5b6239d91a6ee58ce694ac1a0ecc7d', 'Entrevistado/Orientado'),
(5, 'Ana Rebeca Alves', 'ana.alves@gmail.com', '043e2df9912dc5c85f5cfb0b248b7e5b', 'Entrevistado/Orientado'),
(6, 'Nicole Sarah Gomes', 'nicole.gomes@gmail.com', 'f99aad5016f29389fa7b02f53741bc3e', 'Entrevistado/Orientado'),
(7, 'Carlos Almeida', 'carlos.almeida@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Entrevistado/Orientado'),
(8, 'Gustavo Silva', 'gustavo.silva@gmail.com', '592f39b1a47166f063630eb7342d4cb8', 'Entrevistado/Orientado'),
(9, 'Vitoria Almeira', 'vitoria.almeida@gmail.com', 'a843104510d80f3cf736df15b6c149a2', 'Entrevistado/Orientado');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `tb_analysis_text`
--
ALTER TABLE `tb_analysis_text`
  ADD PRIMARY KEY (`id_analysys_text`),
  ADD KEY `fk_id_user_analysis` (`id_user`);

--
-- Índices de tabela `tb_category`
--
ALTER TABLE `tb_category`
  ADD PRIMARY KEY (`id_category`);

--
-- Índices de tabela `tb_test_questions`
--
ALTER TABLE `tb_test_questions`
  ADD PRIMARY KEY (`id_question`),
  ADD KEY `fk_id_category` (`id_category`);

--
-- Índices de tabela `tb_test_result`
--
ALTER TABLE `tb_test_result`
  ADD PRIMARY KEY (`id_result`),
  ADD KEY `fk_id_user` (`id_user`),
  ADD KEY `fk_id_question` (`id_question`);

--
-- Índices de tabela `tb_users`
--
ALTER TABLE `tb_users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_analysis_text`
--
ALTER TABLE `tb_analysis_text`
  MODIFY `id_analysys_text` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de tabela `tb_category`
--
ALTER TABLE `tb_category`
  MODIFY `id_category` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `tb_test_questions`
--
ALTER TABLE `tb_test_questions`
  MODIFY `id_question` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT de tabela `tb_test_result`
--
ALTER TABLE `tb_test_result`
  MODIFY `id_result` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=336;

--
-- AUTO_INCREMENT de tabela `tb_users`
--
ALTER TABLE `tb_users`
  MODIFY `id_user` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `tb_analysis_text`
--
ALTER TABLE `tb_analysis_text`
  ADD CONSTRAINT `fk_id_user_analysis` FOREIGN KEY (`id_user`) REFERENCES `tb_users` (`id_user`);

--
-- Restrições para tabelas `tb_test_questions`
--
ALTER TABLE `tb_test_questions`
  ADD CONSTRAINT `fk_id_category` FOREIGN KEY (`id_category`) REFERENCES `tb_category` (`id_category`);

--
-- Restrições para tabelas `tb_test_result`
--
ALTER TABLE `tb_test_result`
  ADD CONSTRAINT `fk_id_question` FOREIGN KEY (`id_question`) REFERENCES `tb_test_questions` (`id_question`),
  ADD CONSTRAINT `fk_id_user` FOREIGN KEY (`id_user`) REFERENCES `tb_users` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
