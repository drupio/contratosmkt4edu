-- --------------------------------------------------------
-- Servidor:                     212.1.214.160
-- Versão do servidor:           5.7.36-0ubuntu0.18.04.1 - (Ubuntu)
-- OS do Servidor:               Linux
-- HeidiSQL Versão:              11.3.0.6295
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Copiando estrutura do banco de dados para contratos_db
CREATE DATABASE IF NOT EXISTS `contratos_db` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `contratos_db`;

-- Copiando estrutura para tabela contratos_db.clientes
CREATE TABLE IF NOT EXISTS `clientes` (
  `id_cliente` int(11) NOT NULL AUTO_INCREMENT,
  `logo_cliente` varchar(50) DEFAULT NULL,
  `nome_cliente` varchar(800) NOT NULL,
  `cnpj` varchar(200) NOT NULL,
  `quantitativo` varchar(50) NOT NULL DEFAULT '',
  `extensao` varchar(50) NOT NULL DEFAULT '',
  `de_ano` varchar(50) NOT NULL DEFAULT '',
  `ate_ano` varchar(50) NOT NULL DEFAULT '',
  `bonificacao` varchar(200) DEFAULT NULL,
  `pago_em` varchar(200) DEFAULT NULL,
  `observacao` text,
  `status_cliente` int(11) NOT NULL DEFAULT '1',
  `responsavel` varchar(800) DEFAULT NULL,
  `telefone` varchar(50) DEFAULT NULL,
  `whatsapp` varchar(50) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `site` varchar(200) DEFAULT NULL,
  `endereco` varchar(800) DEFAULT NULL,
  `editado_em` varchar(800) DEFAULT NULL,
  `editado_por` varchar(800) DEFAULT NULL,
  PRIMARY KEY (`id_cliente`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

-- Copiando dados para a tabela contratos_db.clientes: ~19 rows (aproximadamente)
/*!40000 ALTER TABLE `clientes` DISABLE KEYS */;
INSERT INTO `clientes` (`id_cliente`, `logo_cliente`, `nome_cliente`, `cnpj`, `quantitativo`, `extensao`, `de_ano`, `ate_ano`, `bonificacao`, `pago_em`, `observacao`, `status_cliente`, `responsavel`, `telefone`, `whatsapp`, `email`, `site`, `endereco`, `editado_em`, `editado_por`) VALUES
	(23, NULL, 'Jean piaget', '02.907.809/0001-27', '58', '3', '2022', '2024', '', '', 'Contrato assinado em 29/10/2020. \r\nNa assinatura do Marketing For Education o colégio ainda estava na planta.', 1, 'Lucy', '', '17 99722-2876', 'lucy_valiengo@yahoo.com.br', 'https://escolajeanpiagetsjrp.com.br/', '', '24 de Janeiro de 2022 - 12:20:15', 'daiane.lins@viamaker.com'),
	(24, NULL, 'Pirâmide itanhaem', '02.670.195/0001-02', '137', '2', '2022', '2023', '1.000,00', '', 'Contrato assinado em 11/11/2020.', 1, 'Claudia', '', '13 98116-0001', 'claudia@cepiramide.com.br', 'http://www.cepiramide.com.br/', 'R. Santa Catarina, 495 - Baln. Gaivota, Itanhaém - SP, 11740-000', '24 de Janeiro de 2022 - 11:05:24', 'daiane.lins@viamaker.com'),
	(25, NULL, 'Vidas', '04.885.673/0001-27', '65', '2', '2022', '2023', '', '', 'Contrato assinado em 29/10/2020.', 1, 'Verusca', '', '11 97358-4666', 'verusca.vidas@gmail.com', '', '', '24 de Janeiro de 2022 - 15:07:29', 'daiane.lins@viamaker.com'),
	(26, NULL, 'Tia Olivia', '11.119.629/0001-71', '49', '2', '2022', '2023', '', '', 'Contrato assinado em 18/11/2020.', 1, 'Olivia', '', '16 99166-0410', 'escolinhatiaolivia@escolinhatiaolivia.net.br', '', '', '24 de Janeiro de 2022 - 15:23:40', 'daiane.lins@viamaker.com'),
	(27, NULL, 'Genesis amparo', '13.031.765/0001-30', '85', '2', '2022', '2023', '', NULL, 'Contrato assinado em 18/11/2020.', 1, 'Roberto Mattos', '', '19 99652-7411', 'prrobertomattos@gmail.com', '', '', '24 de Janeiro de 2022 - 16:32:37', 'daiane.lins@viamaker.com'),
	(28, NULL, 'SEI ANGLO ITÁPOLIS', '09.415.470/0001-90', '231', '2', '2023', '2024', '', NULL, 'Contrato assinado em 19/11/2020.', 1, 'Elaine', '', '16 3263-9210', 'laboratorio@seianglo.com.br', '', '', '24 de Janeiro de 2022 - 16:45:13', 'daiane.lins@viamaker.com'),
	(29, NULL, 'escola da bisa', '28.619.782/0001-60', '140', '3', '2023', '2025', '', NULL, 'Contrato assinado em 07/12/2020.', 1, 'Daniel', '', '19 98132-0821', 'contato@casadabisaesc.com.br', '', '', '24 de Janeiro de 2022 - 17:05:20', 'daiane.lins@viamaker.com'),
	(30, NULL, 'fonseca siqueira', '74.323.684/0001-07', '120', '2', '2022', '2023', '', NULL, 'Contrato assinado em 06/01/2021.', 1, 'Danielle Siqueira', '', '11 96413-4569', 'danielle.siqueira1@gmail.com', 'https://colegiofonsecasiqueira.com.br/', '', '25 de Janeiro de 2022 - 09:25:45', 'daiane.lins@viamaker.com'),
	(31, NULL, 'ceas', '04.849.756/0001-60', '119', '3', '2023', '2025', '1.500,00', NULL, 'Contrato assinado em 19/11/2020.', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(32, NULL, 'COLÔNIA HOLANDESA', '06.202.876/0001-05', '100', '4', '2023', '2026', '', NULL, 'Contrato assinado em 22/06/2021.', 1, 'Ana', '', '42 9978-8511', 'direcao@colegiocoloniaholandesa.com.br', '', 'RUA GEERT LEFFERS, 560 - VILA EVANGELICA - ARAPOTI/PR', '01 de Fevereiro de 2022 - 16:06:41', 'daiane.lins@viamaker.com'),
	(33, '1f52ad310932ef577733b2804ef72a08.jpg', 'URSO BIANCO ', '04.254.533/0001-50', '83', '2', '2023', '2024', '', NULL, '', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(34, NULL, 'internacional radial', '30.062.971/0001-27', '136', '3', '2023', '2025', '', NULL, 'Contrato assinado em 21/07/2021.', 1, 'Fábio Fonseca', '', '11 99183-2603', 'fabio.pereira@colegioradial.com.br', '', 'AVENIDA JABAQUARA, 1870 - MIRANDOPOLIS - SAO PAULO/SP', '01 de Fevereiro de 2022 - 16:04:33', 'daiane.lins@viamaker.com'),
	(35, NULL, 'objetivo pilar do sul', '10.860.693/0001-46', '87', '3', '2023', '2025', '', NULL, 'Contrato assinado em 21/07/21.', 1, 'Gustavo', '', '15 99735-8824', '', '', 'Elias Valio, 139 - Centro - PILAR DO SUL/SP', '02 de Fevereiro de 2022 - 16:47:27', 'daiane.lins@viamaker.com'),
	(36, NULL, 'OBJETIVO ITAPIRA', '09.647.725/0001-40', '160', '3', '2024', '2026', '', NULL, 'Contrato assinado em 20/01/21.', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(37, NULL, 'natureza itupeva', '05.955.759/0001-41', '99', '3', '2023', '2025', '', NULL, 'Contrato assinado em 20/08/21.', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(38, NULL, 'alem', '56.373.129/0001-08', '143', '3', '2022', '2024', '', NULL, 'Contrato assinado em 10/08/21.', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(39, 'da819b52be3dada8f17b8f8cc1b3353e.jpg', 'COLÉGIO SOE ', '00.452.781/0001-55', '107', '4', '2022', '2025', '', NULL, 'Assinado em agosto de 2021', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(40, '66510d81712e06dcd28c968e07012164.jpg', 'EXPRESSÃO', '14.642.594/0001-49', '410', '4', '2022', '2025', '2.500,00', NULL, 'Bonificação para aplicação dos adesivos da sala de robótica paga em 24/01/2022 ', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(41, '4a73719ec7171446db52ace4acced736.jpg', 'SIMETRIA ', '01.605.581/0001-58', '182', '5', '2022', '2026', '4.940,00', NULL, 'Bonificação de camiseta personalizada e cobertura de um evento. ', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
/*!40000 ALTER TABLE `clientes` ENABLE KEYS */;

-- Copiando estrutura para tabela contratos_db.projetos_clientes
CREATE TABLE IF NOT EXISTS `projetos_clientes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cliente` varchar(50) NOT NULL DEFAULT '',
  `projeto` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=185 DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

-- Copiando dados para a tabela contratos_db.projetos_clientes: ~120 rows (aproximadamente)
/*!40000 ALTER TABLE `projetos_clientes` DISABLE KEYS */;
INSERT INTO `projetos_clientes` (`id`, `cliente`, `projeto`, `status`) VALUES
	(59, '22', 1, 1),
	(60, '22', 2, 1),
	(61, '22', 3, 1),
	(62, '22', 4, 1),
	(63, '22', 7, 1),
	(64, '22', 8, 1),
	(65, '23', 1, 6),
	(66, '23', 2, 6),
	(67, '23', 3, 5),
	(68, '23', 4, 2),
	(69, '23', 7, 6),
	(70, '23', 8, 5),
	(71, '24', 1, 6),
	(72, '24', 2, 6),
	(73, '24', 3, 5),
	(74, '24', 4, 1),
	(75, '24', 7, 1),
	(76, '24', 8, 6),
	(77, '25', 1, 1),
	(78, '25', 2, 2),
	(79, '25', 3, 5),
	(80, '25', 4, 2),
	(81, '25', 7, 2),
	(82, '25', 8, 6),
	(83, '26', 1, 5),
	(84, '26', 2, 5),
	(85, '26', 3, 5),
	(86, '26', 4, 5),
	(87, '26', 7, 5),
	(88, '26', 8, 5),
	(89, '27', 1, 6),
	(90, '27', 2, 2),
	(91, '27', 3, 5),
	(92, '27', 4, 5),
	(93, '27', 7, 5),
	(94, '27', 8, 5),
	(95, '28', 1, 5),
	(96, '28', 2, 5),
	(97, '28', 3, 5),
	(98, '28', 4, 5),
	(99, '28', 7, 5),
	(100, '28', 8, 5),
	(101, '29', 1, 5),
	(102, '29', 2, 5),
	(103, '29', 3, 5),
	(104, '29', 4, 2),
	(105, '29', 7, 2),
	(106, '29', 8, 5),
	(107, '30', 1, 6),
	(108, '30', 2, 6),
	(109, '30', 3, 5),
	(110, '30', 4, 6),
	(111, '30', 7, 6),
	(112, '30', 8, 6),
	(113, '31', 1, 5),
	(114, '31', 2, 5),
	(115, '31', 3, 5),
	(116, '31', 4, 6),
	(117, '31', 7, 6),
	(118, '31', 8, 6),
	(119, '33', 1, 1),
	(120, '33', 2, 1),
	(121, '33', 3, 1),
	(122, '33', 4, 1),
	(123, '33', 7, 6),
	(124, '33', 8, 1),
	(125, '32', 1, 6),
	(126, '32', 2, 5),
	(127, '32', 3, 5),
	(128, '32', 8, 6),
	(129, '32', 9, 6),
	(130, '34', 1, 5),
	(131, '34', 2, 5),
	(132, '34', 3, 5),
	(133, '34', 4, 6),
	(134, '34', 7, 6),
	(135, '34', 8, 6),
	(136, '34', 9, 6),
	(137, '34', 10, 6),
	(138, '35', 1, 2),
	(139, '35', 2, 6),
	(140, '35', 4, 5),
	(141, '35', 7, 5),
	(142, '35', 8, 6),
	(143, '37', 1, 6),
	(144, '37', 2, 2),
	(145, '37', 4, 5),
	(146, '37', 7, 5),
	(147, '37', 8, 2),
	(148, '36', 1, 1),
	(149, '36', 2, 1),
	(150, '36', 4, 1),
	(151, '36', 7, 1),
	(152, '36', 8, 6),
	(153, '36', 11, 6),
	(154, '38', 1, 6),
	(155, '38', 2, 2),
	(156, '38', 3, 5),
	(157, '38', 4, 5),
	(158, '38', 7, 5),
	(159, '38', 8, 2),
	(160, '39', 1, 3),
	(161, '39', 2, 1),
	(162, '39', 3, 1),
	(163, '39', 4, 3),
	(164, '39', 7, 3),
	(171, '40', 1, 5),
	(172, '40', 2, 5),
	(173, '40', 3, 1),
	(174, '40', 4, 1),
	(175, '40', 7, 1),
	(176, '40', 8, 6),
	(177, '41', 1, 2),
	(178, '41', 2, 2),
	(179, '41', 3, 1),
	(180, '41', 4, 5),
	(181, '41', 7, 5),
	(182, '41', 8, 5),
	(183, '41', 9, 2),
	(184, '41', 11, 6);
/*!40000 ALTER TABLE `projetos_clientes` ENABLE KEYS */;

-- Copiando estrutura para tabela contratos_db.projetos_existentes
CREATE TABLE IF NOT EXISTS `projetos_existentes` (
  `id_projeto` int(11) NOT NULL AUTO_INCREMENT,
  `nome_projeto` varchar(800) NOT NULL,
  `desc_projeto` text NOT NULL,
  PRIMARY KEY (`id_projeto`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

-- Copiando dados para a tabela contratos_db.projetos_existentes: ~9 rows (aproximadamente)
/*!40000 ALTER TABLE `projetos_existentes` DISABLE KEYS */;
INSERT INTO `projetos_existentes` (`id_projeto`, `nome_projeto`, `desc_projeto`) VALUES
	(1, 'WEBSITE', 'Desenvolvimento de Site Institucional'),
	(2, 'FACHADA', 'Projeto visual da fachada'),
	(3, 'PESQUISA', 'Pesquisa de satifação'),
	(4, 'FOTOS', 'Ensaio fotográfico'),
	(7, 'VÍDEOS', 'Captação, edição e criação de vídeos'),
	(8, 'LABORATÓRIO', 'Projeto visual do laboratório de robótica'),
	(9, 'camisetas', 'Criação e/ou produção de camisetas'),
	(10, 'Botton', 'Desenvolvimento de bottons'),
	(11, 'COBERTURA EVENTO', 'Cobertura audiovisual para eventos');
/*!40000 ALTER TABLE `projetos_existentes` ENABLE KEYS */;

-- Copiando estrutura para tabela contratos_db.reuniao
CREATE TABLE IF NOT EXISTS `reuniao` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cliente` int(11) NOT NULL,
  `reuniao` text NOT NULL,
  `criado_em` varchar(200) NOT NULL,
  `criado_por` varchar(200) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=154 DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

-- Copiando dados para a tabela contratos_db.reuniao: ~19 rows (aproximadamente)
/*!40000 ALTER TABLE `reuniao` DISABLE KEYS */;
INSERT INTO `reuniao` (`id`, `cliente`, `reuniao`, `criado_em`, `criado_por`) VALUES
	(134, 23, '<p>Como este foi o primeiro cliente do MKT FOR EDUCATION, o William conduziu tudo até a visita presencial para captação dos vídeos e apresentação para o colégio.</p>', '24 de Janeiro de 2022 - 10:19:22', 'daiane.lins@viamaker.com'),
	(135, 24, '<p>A reunião iniciou ouvindo e entendendo as expectativas do colégio com o projeto.</p><p><strong>Site:</strong></p><p>Cláudia relatou que o site foi criado há muito tempo atrás e que está com um visual e informações antigas. <i>PRIORIZAR A ATUALIZAÇÃO DO SITE!</i>&nbsp;(Não possuem mais balé, evidenciar o que o colégio possui atualmente de aulas. Tabatha acredita que o site é primordial na divulgação)</p><p>Daiane sugeriu o agendamento na semana que vem com Rafael terça feira 01/12 às 9h para alinhar questões do site, combinou de enviar um e-mail com as informações. Claudia citou que tem dois sites, um administrativo para matrículas e liberação de boletim do aluno e outro institucional.</p><p>Obs.: Claudia citou que seu irmão está a disposição para esclarecer dúvidas sobre o site pois ele mesmo quem criou. Ela sinalizou também que estendeu o contrato do site atual por mais 6 meses.</p><p>&nbsp;</p><p><strong>Laboratório de robótica:</strong></p><p>Claudia pediu que de start com a ambientação do laboratório de robótica também.</p><p>Relatou que teve gasto um muito grande com o toldo e que não pretende priorizar a fachada no momento e que acredita que o laboratório seja o melhor caminho no momento para o uso da bonificação.</p><p>No site tem foto da estrutura da fachada!</p><p>Obs.: Avaliar no site as fotos da fachada atual.</p><p>&nbsp;</p><p><strong>Vídeos e fotos:</strong></p><p>Daiane deu algumas dicas sobre as gravações e orientou que aguarde o início do ano para dar start nessa questão dos vídeos e fotos.</p><p>Obs.: Retorno das aulas (mesmo que não seja presencial)</p><p>Voltar a falar em Fevereiro/2021&nbsp; com a Claudia sobre.</p><p>&nbsp;</p><p><strong>Pesquisa de satisfação:</strong></p><p>Daiane comentou da pesquisa, orientou de aplicar isso no início do ano e elas concordaram.</p><p>&nbsp;</p><p><strong>Iniciou às 9h01</strong><br><strong>Encerrou às 9h25</strong><br><br>&nbsp;</p><p>&nbsp;</p><p><strong>Participantes da VIAMAKER EDUCATION</strong></p><p>1. Daiane &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</p><p>2. Raquel</p><p><strong>Participantes do Colégio PIRAMIDE ITANHAÉM</strong></p><p>1. Claudia (Mantenedora/Diretora)</p><p>2. Tabatha (Secretária)</p><p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</p><p>&nbsp;</p>', '24 de Janeiro de 2022 - 10:43:08', 'daiane.lins@viamaker.com'),
	(136, 25, '<p><strong>08/12/2020 - Verusca e Alexandre</strong><br><br>A reunião iniciou ouvindo e entendendo as expectativas do colégio com o projeto.</p><p>Verusca citou que não perdeu muitos alunos mesmo com a pandemia, apenas em média 5, 6 alunos. Ganharam uma visão de educação que talvez em 5 anos não teriam conquistado, usaram muito as redes sociais para alfabetizar os alunos e já receberam cerca de 95% das inscrições para 2021. Por isso, ela considera que o Plano de Marketing será fundamental para o colégio.</p><p>&nbsp;</p><p><strong>Website:</strong> Não possuem, apenas redes sociais (Facebook/Instagram), Daiane sugeriu dar um start nessa parte. Verusca citou que tem um jeito diferente de usar o Instagram onde os pais conseguem acompanhar mais de perto os projetos.</p><p><i>Encaminhar as solicitações para o desenvolvimento do site.</i></p><p>Apresentar algo na semana de 14. à 17.12.2020</p><p>&nbsp;</p><p><strong>Laboratório:</strong> Possuem apenas uma sala que chamam de “Sala Maker”, ganharam um projetor. Verusca citou que está bem longe do que ela deseja e acredita que o visual mudará totalmente a visão dos pais quanto à qualidade.</p><p><i>Encaminhar as solicitações para a elaboração da arte.</i></p><p>&nbsp;</p><p><strong>Fachada do colégio:</strong> Verusca disse que pintaram recentemente a frente do colégio de forma simples, iniciaram o grafite também, mas não concluíram e ficou para um projeto futuro. Ela gosta da ideia, mas acredita que não seja a prioridade agora.</p><p>&nbsp;</p><p><strong>Fotos e vídeos:&nbsp;</strong>Será efetuado após a conclusão da sala e fachada.</p><p><i>Voltaremos a conversar sobre em 2021</i><br><br>Raquel e Daiane.</p>', '24 de Janeiro de 2022 - 14:22:52', 'daiane.lins@viamaker.com'),
	(137, 26, '<p><strong>08/12/2020 - Olivia</strong><br><br>A reunião iniciou ouvindo e entendendo as expectativas do colégio com o projeto.</p><p>Olivia comentou que estavam com apenas 35% da capacidade no colégio. Tinham 120 alunos até março e voltaram em outubro com apenas 30 alunos pagantes.</p><p>&nbsp;</p><p><strong>Website:</strong> Já possuem <a href="http://www.escolatiaolivia.com.br/site">http://www.escolatiaolivia.com.br/site</a>&nbsp;</p><p>Olivia citou que sua filha Juliana é quem criou o site e gerencia atualmente. Sua disponibilidade para reunião durante a semana é a partir das 18h30 e no sábado o dia todo. Fora isso apenas por mensagem.&nbsp;</p><p>Olivia pediu para priorizar o website!</p><p><strong>Laboratório de robótica:&nbsp;</strong>Eles não possuem uma sala de robótica pois a ideia antes era de usar um container que adquiriram, mas não deu certo devido a pandemia.&nbsp;</p><p>Aguardar mais informações da escola para dar andamento pois ele iram definir uma sala ainda.</p><p><strong>Ensaio fotográfico:</strong> Voltar a conversar sobre em 2021.</p><p><strong>Vídeo institucional:</strong> Voltar a conversar sobre em 2021.</p><p><strong>Fachada:</strong> Gostariam de usar uma arte em 3D sem usar o muro pois pintura descasca com o tempo.&nbsp;</p><p>Voltar a conversar sobre em 2021.</p><p><strong>Pesquisa de satisfação:</strong> Voltar a conversar sobre em 2021.</p><p>&nbsp;</p><p>O colégio vai encerrar as atividades na semana que vem!</p>', '24 de Janeiro de 2022 - 15:18:00', 'daiane.lins@viamaker.com'),
	(138, 27, '<p><strong>09/12/2020 - Pr. Roberto e Dilma</strong></p><p><strong>&nbsp;</strong>A reunião iniciou ouvindo e entendendo as expectativas do colégio com o projeto.&nbsp;</p><p>&nbsp;</p><p><strong>Website:&nbsp;</strong>O site estava hospedado em outro local e o colégio não tinha acesso livre para as atualizações e isso fez com que o site desse um sentido contrário. Um dia antes da Bárbara contatar o colégio eles haviam fechado a hospedagem do site que foi criado pelo professor Daniel, na UOL.&nbsp;</p><p>Vai verificar sobre a questão de retirar a hospedagem do uol (se vai ter carência).</p><p><i>Site está fora de ordem, muito simples</i></p><p><strong>Fachada:&nbsp;</strong>Pr. Roberto citou que a fachada é algo que dura como “Novidade” apenas durante uns 2 meses. Eles mexeram recentemente nisso, mas ainda pretender elaborar algo melhor para o início de 2021.&nbsp;</p><p><strong>Laboratório de robótica:&nbsp;</strong>Já possuem uma sala de robótica e iram enviar as informações solicitadas para ambientação.</p><p><strong>Vídeo:&nbsp;</strong>Voltaremos a nos falar no início de 2021.</p><p><strong>Ensaio Fotográfico:&nbsp;</strong>Voltaremos a nos falar no início de 2021.</p><p><strong>Pesquisa de Satisfação:&nbsp;</strong>Voltaremos a nos falar no início de 2021.</p><p>&nbsp;</p><p>Pr. Roberto disse que atingiram até o momento 65% apenas das rematrículas. Colégio vai encerrar as atividades na semana que vem (3ª semana do mês de dezembro).</p>', '24 de Janeiro de 2022 - 16:24:12', 'daiane.lins@viamaker.com'),
	(139, 28, '<p><strong>14/12/2020 - Gabriela e Elaine</strong></p><p>- Pediu para saber cada ponto do projeto;</p><p>- Repassou cada item e deixou claro que possuem interesse em iniciar pelo vídeo e fotos, pesquisa, laboratório e fachada.</p><p>&nbsp;</p><p><strong>Website:&nbsp;</strong>Site do colégio está travando para algumas navegações, talvez resultado de um problema do dia, pois os links estavam funcionando normalmente segundo Elaine. O site possui plataforma do aluno e do professor, sendo um profissional da escola quem cuida do site e das mídias sociais. Site está hospedado na UOL. Raquel explicou sobre o formato da hospedagem, entretanto pelo fato de ter outra unidade talvez não seria interessante a hospedagem conosco, para essa definição precisam se reunir com a direção do colégio. Questionaram sobre a liberdade da interação no site. Questionaram sobre o que o Rafael irá trabalhar (HTML, layout, estático ou parte mais dinâmica (pesquisa, formulário), informações com banco de dados). Gabriela deixou claro a Bárbara que talvez não teria interesse no site.</p><p><strong>Fachada:&nbsp;</strong>Temos direito autoral sobre a fachada? Após finalização do contrato o que é feito?</p><p><strong>Laboratório de robótica:&nbsp;</strong>Enviar medidas pois iniciarão por este item.</p><p><strong>Vídeo:&nbsp;</strong>Querem aguardar o retorno das aulas devido a presença dos alunos. Deixar programado para assim que retorno das aulas acontecerem agendar este momento.</p><p><strong>Ensaio Fotográfico:&nbsp;</strong>Querem aguardar o retorno das aulas devido a presença dos alunos. Deixar programado para assim que retorno das aulas acontecerem agendar este momento.</p><p><strong>Pesquisa de Satisfação:&nbsp;</strong>Querem uma pesquisa em relação ao “que podem melhorar”, entender onde estão as fraquezas e as necessidades.<strong>&nbsp;</strong></p>', '24 de Janeiro de 2022 - 16:39:03', 'daiane.lins@viamaker.com'),
	(140, 29, '<p><strong>14/12/2020 - Daniel</strong></p><p><strong>Website:&nbsp;</strong>Possuem somente o domínio (Casa da Bisa - Escola da Bisa), sem website no momento. Nesse momento utilizam apenas Facebook e Instagram.<strong>&nbsp;</strong></p><p>- Questionou se é possível utilizar o mesmo domínio. Possuem um servidor onde estão utilizando até mesmo para e-mails. Tem limite de contas de e-mails para hospedagem interno?&nbsp;</p><p><strong>Fachada:&nbsp;</strong>Recém reformada, ajustes em relação ao que a escola oferece.</p><p><strong>Laboratório de robótica:&nbsp;</strong>Possuem uma sala para robótica e tecnologia/pesquisa.</p><p>Pode incluir outras menções no laboratório de robótica?</p><p><strong>Vídeo:&nbsp;</strong>Iniciar o projeto pelo vídeo, até mesmo pela reforma realizada no colégio. (Robótica, Pies bilingue, escola da inteligência), expandir a mídia para mostrar que não é mais casa de recreação.</p><p><strong>Ensaio Fotográfico:&nbsp;</strong>Aproveitar o momento do vídeo para realizar o ensaio fotográfico.</p><p><strong>Pesquisa de Satisfação:&nbsp;</strong>Talvez aplicar no segundo semestre ou no final do próximo ano e assim traçar melhorias para 2022, pois no seu entendimento nesse momento existem muitos pais não satisfeitos.</p>', '24 de Janeiro de 2022 - 16:54:22', 'daiane.lins@viamaker.com'),
	(141, 30, '<p><strong>12/01/21 - Danielle</strong></p><p>Daiane já é analista do colégio então já conhece a Danielle, elas conversaram antes e a Danielle já antecipou que gostaria de priorizar a etapa do Vídeo.&nbsp;<br>Danielle relatou que conversou com a Bárbara em Novembro/2020 e agora no retorno apenas fechou o plano então pediu para a Daiane explicar item por item novamente para ela entender melhor.</p><p>&nbsp;</p><p><strong>Vídeo/Ensaio Fotográfico:&nbsp;</strong>Danielle está com a ideia de um vídeo diferente, quer mostrar o espaço, a estrutura e como vai ser 2021 no colégio. Qual a proposta do hibrido e o porquê vai ser bom usar essa metodologia. Daiane explicou que ela consegue dividir o vídeo em três, um min para cada e que ela poderá dividir essas informações.&nbsp;</p><p>Danielle questionou que isso dependeria do tempo/prazo e quer saber quanto tempo levamos para entregar pois ela precisa disso com urgência. Daiane informou que levaríamos em torno de 20 dias para todo o processo, desde a captação de imagem e edição até a entrega...Ela achou que o prazo poderia ser menor pois ela precisa disso urgente, se não ela vai fazer algo mais amador pois os pais estão ansiosos e querem um retorno logo sobre como será o decorrer do ano. E se seguirem assim, a gravação será para outro foco.</p><p><strong>Website:&nbsp;</strong>Colégio tem um site bem antigo, Danielle disse que nem usa mais para divulgação. Começar do zero!!!</p><p><a href="http://escolafonsecasiqueira.com.br/index.asp">http://escolafonsecasiqueira.com.br/index.asp</a></p><p><strong>Fachada:&nbsp;</strong>Eles possuem um terreno e pretendem em 2021 iniciar a construção. Pediu para aguardarmos o novo prédio para a elaboração da fachada.&nbsp;</p><p><strong>Laboratório de robótica:&nbsp;</strong>Eles possuem um terreno e pretendem em 2021 iniciar a construção. Pediu para aguardarmos o novo prédio para a elaboração&nbsp;da sala de robótica. Já possuem um projeto da planta.</p><p>A sala atual não está ambientada, a parede é áspera e fizeram apenas um grafite de sistema solar pois usam inclusive a mesma sala para aula de ciência. Só encaparam alguns itens com imagens de lego para lembrar a robótica.</p><p>&nbsp;</p><p>&nbsp;</p>', '25 de Janeiro de 2022 - 09:10:22', 'daiane.lins@viamaker.com'),
	(142, 31, '<p><strong>24/02/2021 - Samy</strong></p><p>Fund 1 – presencial e Fund 2 100% online.</p><p>35% presencial.</p><p><strong>Website:&nbsp;</strong><a href="http://colegioceas.com.br/2019">http://colegioceas.com.br/2019</a></p><p>O colégio já possui site, mas é bem simples. Servidor próprio Hostgator mas deseja mudar para o nosso.</p><p><strong>Fachada:&nbsp;</strong>Samy citou que o colégio vai mudar para outro prédio, mas que precisa atualizar a fachada.</p><p>Quer algo luminoso, algo para chamar mais atenção e que consiga usar no novo prédio.</p><p><strong>Laboratório de robótica:&nbsp;</strong>Samy citou que o colégio vai mudar para outro prédio, mas que deseja arrumar a sala de robótica para esse momento.</p><p>Samy citou sobre a questão de ter um valor de benefício em contrato, $1.5000 para a sala.</p><p><strong>Vídeo:&nbsp;</strong>Deseja iniciar por esse item, que seja um vídeo bem elaborado com o depoimento de alunos, pais e colaboradores da escola. Mas a preocupação dela é em questão de gravar com máscara.</p><p>Daiane explicou as alternativas possíveis e ela gostou da sugestão.</p><p><strong>Ensaio Fotográfico:&nbsp;</strong>Samy quer fazer o ensaio fotográfico no mesmo dia da gravação.</p><p>&nbsp;</p><p>&nbsp;</p>', '25 de Janeiro de 2022 - 09:31:31', 'daiane.lins@viamaker.com'),
	(143, 33, '<p>Fotos e vídeos serão feitos quando o colégio estiver pronto, pois estão em reforma.&nbsp;</p><p>O website é uma prioridade, pois não possuem nenhum.&nbsp;</p><p>Acabou de fazer a fachada, então não é prioridade no momento.</p><p>O laboratório de robótica vai aguardar também.</p>', '25 de Janeiro de 2022 - 14:34:20', 'jornalismo@viamaker.com'),
	(144, 32, '<p><strong>Reunião realizada com Ana - 15/07/21</strong></p><p><br><strong>Website:&nbsp;</strong>Vamos marcar uma nova reunião, para alinhar as expectativas e informações.&nbsp;</p><p><strong>Fachada:&nbsp;</strong>Este ano não vai fazer, irá esperar a metade do ano que vem.&nbsp;</p><p><strong>Laboratório de robótica:</strong> Aguardando as medidas e as fotos para iniciarmos. Estimativa de envio: 21/07.&nbsp;</p><p><strong>Camisetas: </strong>A diretora, Ana, pediu duas semanas para levantar as informações das camisetas.&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>', '01 de Fevereiro de 2022 - 15:24:19', 'daiane.lins@viamaker.com'),
	(145, 34, '<p><strong>Reunião com Fábio Fonseca - 09/08/21</strong></p><p><br>Processo de rematrícula começa em setembro, processo de matrícula já começou.&nbsp;</p><p><strong>Website:</strong> Última parte será o website.&nbsp;</p><p><strong>Laboratório:</strong> O laboratório usado hoje é divido com a sala de informática. Apenas em dois lados poderemos usar para criação, segundo o diretor. Gostaria de inserir também a parte de tecnologia como tablets, celular e computador, por conta da informática.</p><p><strong>Fachada do colégio:</strong> Não podem mexer na fachada, por dividirem com uma faculdade o espaço. Mas, ficamos de verificar se podemos trocar a fachada pela sala de atendimento/matrícula no lugar dela.</p><p><strong>Fotos e vídeos:&nbsp;</strong>Após a elaboração da sala de robótica.</p><p><strong>Camisetas: </strong>Serão 133 camisetas para setembro. “Aprender é mais que estudar!”</p><p><strong>Bottons:&nbsp;</strong>Iremos personalizar e o colégio<strong>&nbsp;</strong>irá confeccionar, para isso, precisam para setembro. Gostaria que tivesse emojis, que é padrão que utilizam hoje nas peças. Cor principal azul, mas deu a liberdade para usarmos cores nossas também.&nbsp;</p>', '01 de Fevereiro de 2022 - 15:38:43', 'daiane.lins@viamaker.com'),
	(146, 35, '<p><strong>Reunião com Patrícia e Gustavo - 31/08/21</strong></p><p><strong>Website:</strong> Marcar uma reunião com a empresa de marketing que atende o colégio para verificar essa questão.</p><p><strong>Laboratório:</strong> Irão começar por essa etapa, sendo a mais importante. “Sala Maker”.&nbsp;</p><p><strong>Fachada do colégio:</strong> O segundo passo é a fachada.</p><p><strong>Fotos e vídeos:&nbsp;</strong>Após a realização do projeto arquitetônico.&nbsp;</p>', '02 de Fevereiro de 2022 - 16:35:01', 'daiane.lins@viamaker.com'),
	(147, 37, '<p><strong>Reunião com Stela - 01/09/21&nbsp;</strong></p><p><strong>Website:</strong> Auxiliar a diretora com os acessos. Vamos marcar um momento do Rafael com ela.&nbsp;</p><p><strong>Laboratório:</strong> Irá mandar as medidas.&nbsp;</p><p><strong>Fachada do colégio:</strong> &nbsp;Irá mandar as medidas.</p><p><strong>Fotos e vídeos:&nbsp;</strong>Após a ambientação.&nbsp;</p>', '02 de Fevereiro de 2022 - 17:36:38', 'daiane.lins@viamaker.com'),
	(148, 36, '<p><strong>Reunião com Felippe - 02/09/21</strong></p><p><strong>Website:</strong> O site acabou de atualizar por meio de uma empresa terceira, a mesma empresa cuida das redes sociais do colégio. O diretor Felippe vai nos encaminhar o tamanho do banner usado, para enviarmos do ASTROMAKER® 2022.&nbsp;</p><p><strong>Laboratório:</strong> A sala ainda não está pronta, mas o diretor ficou de nos enviar as medidas e os detalhes (como ventilador, ar e/ou janelas), para montarmos o projeto.&nbsp;</p><p><strong>Fachada do colégio:</strong> Talvez troque por outro espaço, pois a fachada já está sendo feita.</p><p><strong>Fotos e vídeos:&nbsp;</strong>Vai esperar o novo prédio.<strong>&nbsp;</strong></p>', '02 de Fevereiro de 2022 - 17:50:44', 'daiane.lins@viamaker.com'),
	(149, 38, '<p><strong>Reunião com Cristini - 04/10/21</strong></p><p><strong>Vídeo/Ensaio Fotográfico:&nbsp;</strong>O Colégio possui uma história muito bonita, que começou com o avô. Comentamos de ser vídeos em depoimento. <strong>Alinharemos a parte de vídeo no mesmo dia que agendaremos a reunião com o Rafa sobre a parte do site.&nbsp;</strong></p><p><strong>Website: PRIORIDADE.&nbsp;</strong>Os meios que eles mais utilizam são as redes sociais Facebook e Instagram, além do WhatsApp.&nbsp;<br>Eles possuem uma empresa de marketing para alimentação de conteúdo, mas não estão atualizando o site. Está hospedado no Wix. Os conteúdos podemos pegar direto do site antigo&nbsp;<a href="https://colegioalem.wixsite.com/colegioalem">https://colegioalem.wixsite.com/colegioalem</a> &nbsp;Importante reforçar sobre o curso técnico de química. <strong>Tirar área restrita que está ativa no site.</strong></p><p><strong>Fachada:&nbsp;</strong>Irá tirar as fotos. Gostaria de trocar o portão de baixo. A Dai deu a ideia de colocar os parceiros em uma placa, a diretora gostou e ficou de enviar os logos dos parceiros e sistema de ensino.&nbsp;</p><p><strong>Laboratório de robótica:&nbsp;</strong>Ela já tirou as fotos iniciais, faltam as medidas. Vamos formalizar por e-mail. <strong>Ficar pronto até metade de janeiro</strong>, pois o laboratório é usado todos os dias. O laboratório tem aula de robótica e de informática. <strong>É importante adesivar nas férias dos estudantes.</strong>&nbsp;</p>', '03 de Fevereiro de 2022 - 16:11:50', 'daiane.lins@viamaker.com'),
	(150, 39, '<p><strong>Website:</strong> O colégio não possui site, por isso, a prioridade é o início dele. Expliquei que é necessário comprar um domínio, visto que eles não possuem, e nos enviar o conteúdo para começarmos, além de agendarmos uma nova reunião em janeiro, para que o Rafael oriente sobre essa aquisição e sobre alguns pontos que acredite ser relevante para o projeto.&nbsp;</p><p><strong>Laboratório:</strong> Ficará em <i>stand-by</i> por enquanto, pois o colégio não possui <i>budget</i> para aplicação dos adesivos, pois investiram recentemente na colocação de ar-condicionado nas salas de aula.</p><p><strong>Fachada do colégio:</strong> Assim como o laboratório, por questões financeiras, eles irão esperar para dar início ao projeto. Expliquei que talvez poderiam trocar a fachada por uma parede, como, por exemplo, da sala de matrícula ou secretaria, mas, mesmo assim, optaram por aguardar.</p><p><strong>Cobertura audiovisual:&nbsp;</strong>Agendado reunião para o dia 04/01/22, às 14h, para falarmos mais sobre a cobertura. A ida do Juarez também ficou alinhada para o dia 03/02/22 (fotos e vídeos).&nbsp;</p>', '04 de Fevereiro de 2022 - 11:16:31', 'jornalismo@viamaker.com'),
	(152, 40, '<p><strong>Website:</strong> Eles possuem uma pessoa de TI que cuida do site e no momento não pretendem mexer, pois está novo.&nbsp;</p><p><strong>Laboratório:</strong> &nbsp;O Will já fez a ambientação. Fiquei de levantar os orçamentos com duas gráficas e o diretor de enviar o contato da que está cuidando da fachada deles, para que eu cote também.&nbsp;</p><p><strong>Fachada do colégio:</strong> Já estão trabalhando nela, aguardando apenas o tempo melhorar para que continuem o serviço.</p><p><strong>Fotos e vídeos:&nbsp;</strong>Agendado a próxima reunião para o dia 05/11, com o Juarez, para falarmos sobre os vídeos. Enquanto isso, estarei enviando hoje o briefing – a fim de que o diretor preencha. Ele também vai ver sobre a história do colégio, para que possamos colocar no vídeo institucional.&nbsp;</p>', '09 de Fevereiro de 2022 - 10:52:47', 'jornalismo@viamaker.com'),
	(153, 41, '<p><strong>Website:</strong> Vou enviar os tópicos necessários para que a diretora prepare o conteúdo. É uma prioridade. Hoje eles possuem domínio e uma página com pouquíssimas informações. Quem tinha começado com o site foi o sobrinho dela, porém não foi dado sequência.&nbsp;</p><p><strong>Laboratório:</strong> &nbsp;Irá esperar, pois pretende mudar a sala de robótica ao finalizar a reforma do colégio. – Provavelmente será apenas em 1 parede a customização.&nbsp;</p><p><strong>Fachada do colégio:</strong> Aguardar as fotos para começarmos.</p><p><strong>Fotos e vídeos:&nbsp;</strong>Ficará para 2022, quando concluir a reforma e a fachada.&nbsp;</p><p><strong>Camisetas:</strong> Para fevereiro ou março de 2022, quando concluir as matrículas dos estudantes de robótica.&nbsp;</p><p><strong>Cobertura audiovisual:</strong> O Juarez irá cobrir o torneio interno de robótica do colégio.&nbsp;</p>', '09 de Fevereiro de 2022 - 11:32:34', 'priscila.lima@viamaker.com');
/*!40000 ALTER TABLE `reuniao` ENABLE KEYS */;

-- Copiando estrutura para tabela contratos_db.status_clientes
CREATE TABLE IF NOT EXISTS `status_clientes` (
  `id_status` int(11) NOT NULL AUTO_INCREMENT,
  `nome_status` varchar(50) NOT NULL DEFAULT '1',
  `cor_status` int(11) NOT NULL,
  PRIMARY KEY (`id_status`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

-- Copiando dados para a tabela contratos_db.status_clientes: ~4 rows (aproximadamente)
/*!40000 ALTER TABLE `status_clientes` DISABLE KEYS */;
INSERT INTO `status_clientes` (`id_status`, `nome_status`, `cor_status`) VALUES
	(1, 'ASSINADO', 1),
	(2, 'EMITIDO', 2),
	(3, 'NO GO', 3),
	(4, 'NEGOCIAÇÃO', 4);
/*!40000 ALTER TABLE `status_clientes` ENABLE KEYS */;

-- Copiando estrutura para tabela contratos_db.status_projetos
CREATE TABLE IF NOT EXISTS `status_projetos` (
  `id_status` int(11) NOT NULL AUTO_INCREMENT,
  `nome_status` varchar(50) NOT NULL,
  `cor_status` int(11) NOT NULL,
  PRIMARY KEY (`id_status`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

-- Copiando dados para a tabela contratos_db.status_projetos: ~6 rows (aproximadamente)
/*!40000 ALTER TABLE `status_projetos` DISABLE KEYS */;
INSERT INTO `status_projetos` (`id_status`, `nome_status`, `cor_status`) VALUES
	(1, 'EM ANDAMENTO', 1),
	(2, 'AGUARDANDO CLIENTE', 2),
	(3, 'PROD. VIAMAKER', 3),
	(4, 'PROD. CLIENTE', 4),
	(5, 'PAUSADO', 5),
	(6, 'CONCLUÍDO', 6);
/*!40000 ALTER TABLE `status_projetos` ENABLE KEYS */;

-- Copiando estrutura para tabela contratos_db.timeline
CREATE TABLE IF NOT EXISTS `timeline` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cliente` int(11) NOT NULL,
  `projeto` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `minutos` int(11) NOT NULL,
  `anexo` text NOT NULL,
  `comentario` text NOT NULL,
  `criado_em` varchar(200) NOT NULL,
  `criado_por` varchar(200) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=227 DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

-- Copiando dados para a tabela contratos_db.timeline: ~153 rows (aproximadamente)
/*!40000 ALTER TABLE `timeline` DISABLE KEYS */;
INSERT INTO `timeline` (`id`, `cliente`, `projeto`, `status`, `minutos`, `anexo`, `comentario`, `criado_em`, `criado_por`) VALUES
	(74, 24, 1, 6, 180, '', '<p><strong>01/12/2020 - Cláudia e Tabatha</strong><br><strong>Site:&nbsp;</strong>Rafael se apresentou como desenvolvedor do site e iniciou a amostragem do novo site. Detalhou as funcionalidades e ressaltou a importância da simplicidade de uso, o colégio conseguirá também inserir por conta fotos e vídeos. O site funciona normalmente em qualquer dispositivo!</p><p>Claudia pediu para colocar informações sobre a plataforma que eles usam atualmente, POSITIVO e sobre a Robótica VIAMAKER®. Ela achou prático, bem colorido e muito intuitivo. Tabatha reforçou o seu pedido sobre o tour virtual no site e o Rafael explicou a complexidade de montagem pois precisa ser bem elaborado, antes do site ir ao ar precisa ter as imagens pronta.</p><p>Rafael solicitou o contato do atual desenvolvedor (irmão da Claudia) para entender mais a fundo.</p><p>Acordamos que voltaríamos a nos falar assim que o site estivesse mais completo.</p><p>&nbsp;</p>', '24 de Janeiro de 2022 - 10:47:44', 'daiane.lins@viamaker.com'),
	(75, 24, 1, 6, 30, '', '<p><strong>17/12/2020 - Cláudia e Tabatha</strong></p><p><strong>Site</strong>: Iniciamos dando a devolutiva sobre a hospedagem do site de notas.</p><p>Claudia sinalizou que não está podendo ter custos com isso por enquanto, mas que vai pensar no caso. No final pediu que enviássemos alguns contatos que nossa equipe indica para hospedagens mais acessíveis sobre o gerenciamento do site de notas.</p><p>Analisar e passar custo que ela teria se nós hospedássemos o gerenciamento aqui.</p><p>Falamos sobre o Tour.</p><p>Claudia deseja receber o endereço do link do Google para a montagem das fotos</p><p>Rafael apresentou o site.</p><p>Claudia demonstrou muita satisfação na criação e sinalizou apenas a parte do sistema de ensino, acredita que faltou informações, está muito pobre. Combinamos de ela enviar as informações a mais que deseja inserir.</p>', '24 de Janeiro de 2022 - 10:49:38', 'daiane.lins@viamaker.com'),
	(76, 24, 1, 6, 30, '', '<p><strong>03/02/2020 - Claudia e Tabatha</strong><br><br><strong>Site</strong>: Rafael fez a apresentação e treinamento do site, elas demonstraram muita satisfação com o conteúdo e combinamos de enviar por e-mail os acessos.</p>', '24 de Janeiro de 2022 - 10:50:59', 'daiane.lins@viamaker.com'),
	(77, 24, 8, 1, 30, '', '<p><strong>03/02/20 - Claudia e Tabatha</strong><br><br><strong>Ambientação de sala:&nbsp;</strong>Apresentamos o mockup que o Gustavo havia montado, combinamos que a Claudia enviaria o contato da pessoa da gráfica responsável pela adesivação, pois precisamos que eles meçam a sala corretamente para o Fábio terminar os ajustes e enviar o documento oficial para a gráfica.</p>', '24 de Janeiro de 2022 - 10:52:23', 'daiane.lins@viamaker.com'),
	(78, 24, 8, 6, 15, 'Patrocínio-Itanhaem_24_aab3238922bcc25a6f606eb525ffdc56.pdf', '<p>02/08/2021</p><p>Realizamos o pagamento do patrocínio e fizemos a entrega final do projeto.&nbsp;</p>', '24 de Janeiro de 2022 - 10:55:40', 'daiane.lins@viamaker.com'),
	(79, 24, 2, 6, 15, '', '<p><strong>03/08/2021</strong></p><p>Realizamos a entrega final do projeto.&nbsp;</p>', '24 de Janeiro de 2022 - 10:56:45', 'daiane.lins@viamaker.com'),
	(80, 24, 4, 2, 15, '', '<p>Seguimos aguardando o cliente finalizar a adesivação do laboratório de robótica para agendarmos a visita do Juarez para captação das imagens e vídeos.</p>', '24 de Janeiro de 2022 - 10:58:38', 'daiane.lins@viamaker.com'),
	(81, 24, 7, 2, 15, '', '<p>Seguimos aguardando o cliente finalizar a adesivação do laboratório de robótica para agendarmos a visita do Juarez para captação das imagens e vídeos.</p>', '24 de Janeiro de 2022 - 10:58:51', 'daiane.lins@viamaker.com'),
	(82, 24, 3, 5, 0, '', '<p>Aguardando ajustes de processo por VIAMAKER®.</p>', '24 de Janeiro de 2022 - 11:00:38', 'daiane.lins@viamaker.com'),
	(83, 23, 7, 1, 30, '', '<p><strong>30/11/2020&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</strong><br>Juarez fez a apresentação do vídeo para a Luci e Vinicius, compartilhamos via link do drive.</p><p>O colégio deu a devolutiva que gostaria de alterar no primeiro vídeo o logo com a arte nova e retirar a imagem/cena que aparece o “bem-vindo” na tela. No segundo, apenas alterar o logo do inicio também.</p><p>Juarez combinou que eu enviaria o vídeo 1 e 2 para o colégio via e-mail.</p><p>Juarez citou do vídeo 3, ressaltou que está trabalhando nisso.</p><p>Para finalizar o Vinicius disse que eles amaram os vídeos!</p><p>&nbsp;</p><p>&nbsp;</p>', '24 de Janeiro de 2022 - 12:14:36', 'daiane.lins@viamaker.com'),
	(84, 23, 1, 1, 15, '', '<p><strong>30/11/2020&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</strong><br>William e Rafael iniciou questionando sobre o uso do Wix, Vinicius disse que acha um pouco difícil e confuso o uso dessa ferramenta pois ele não tem muita propriedade nisso. Disse que usa no site o servidor com cadastro em seu próprio e-mail (e-mail dele&nbsp;<a href="mailto:vinicius.valiengo96@gmail.com">vinicius.valiengo96@gmail.com</a>) para o controle do site. William sugeriu a hospedagem VIAMAKER mas antes vai liberar um acesso para eles verificarem e testarem a funcionalidade. No momento ficou claro que o site não é prioridade para o colégio.</p><p>Rafael fica incumbido de já desenvolver o site.</p>', '24 de Janeiro de 2022 - 12:15:31', 'daiane.lins@viamaker.com'),
	(85, 23, 7, 6, 30, '', '<p><strong>04/12/2020&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</strong><br>Iniciamos a reunião com o Juarez relembrando as solicitações feita pelo colégio de edição dos dois primeiros vídeos e falando também a respeito do terceiro.</p><p>Devido estar travando a apresentação no Drive, disponibilizamos um link do WE TRANSFER pelo chat para que eles pudessem assistir melhor e nos dar um retorno. Lucy, Vinicius e Adrielle deram um feedback totalmente positivo disseram que amaram e que cada cena/depoimento ficou maravilhoso.</p><p><strong>*Pretendem compartilhar os vídeos nas redes sociais e encaminhar para os pais.</strong></p><p>Terminamos a videoconferência dando por encerrado essa etapa, agradecendo e nos colocando à disposição.&nbsp;</p>', '24 de Janeiro de 2022 - 12:16:44', 'daiane.lins@viamaker.com'),
	(86, 23, 1, 1, 15, '', '<p><strong>24/08/2021&nbsp;- Vinícius &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</strong></p><p>Rafa auxiliou o Vinicius na compra do novo domínio para o site, visto que o mesmo estava vencido. Após o pagamento, o Rafa subirá o site pronto e aprovado pelo colégio.<strong>&nbsp;</strong></p>', '24 de Janeiro de 2022 - 12:17:57', 'daiane.lins@viamaker.com'),
	(87, 23, 1, 6, 15, '', '<p>Publicação do website em 24/08/2021 .</p><p><a href="https://escolajeanpiagetsjrp.com.br/">https://escolajeanpiagetsjrp.com.br/</a></p>', '24 de Janeiro de 2022 - 12:19:03', 'daiane.lins@viamaker.com'),
	(88, 23, 2, 1, 15, '', '<p>Em <strong>01/09/2021</strong> iniciamos as tratativas sobre o projeto da fachada.</p>', '24 de Janeiro de 2022 - 12:22:03', 'daiane.lins@viamaker.com'),
	(89, 23, 2, 1, 15, '', '<p>Em <strong>03/09/2021 </strong>realizamos a entrega do primeiro projeto.</p>', '24 de Janeiro de 2022 - 12:23:02', 'daiane.lins@viamaker.com'),
	(90, 23, 2, 1, 15, '', '<p>Em <strong>28/09/2021</strong> entregamos o projeto com as primeiras considerações feita pelo colégio.&nbsp;</p>', '24 de Janeiro de 2022 - 12:24:04', 'daiane.lins@viamaker.com'),
	(91, 23, 2, 6, 15, '', '<p>Em <strong>18 Nov de 2021</strong> realizamos a entrega com as ultimas alterações solicitadas.</p><ul><li>Muita emoção ao longo de todo o processo de entrega.&nbsp;</li></ul><p>&nbsp;</p>', '24 de Janeiro de 2022 - 12:26:01', 'daiane.lins@viamaker.com'),
	(92, 23, 3, 5, 0, '', '<p>Aguardando ajustes de processo por VIAMAKER®.</p>', '24 de Janeiro de 2022 - 12:26:39', 'daiane.lins@viamaker.com'),
	(93, 23, 4, 2, 0, '', '<p>Aguardando construção do novo prédio.&nbsp;</p>', '24 de Janeiro de 2022 - 12:27:35', 'daiane.lins@viamaker.com'),
	(94, 23, 8, 5, 0, '', '<p>Aguardando construção do novo prédio.&nbsp;</p>', '24 de Janeiro de 2022 - 12:27:50', 'daiane.lins@viamaker.com'),
	(95, 25, 1, 1, 30, '', '<p>Website finalizado em <strong>13/10/2021</strong>, seguimos aguardando algumas informações por parte do colégio para então finalizar o projeto.&nbsp;</p>', '24 de Janeiro de 2022 - 14:37:31', 'daiane.lins@viamaker.com'),
	(96, 25, 1, 1, 15, '', '<p><strong>06/12/2021</strong></p><p>Eles irão nos enviar fotos, para que o Rafael insira no site. O colégio possui domínio, então, após a conclusão e aprovação, o Rafa fará uma nova reunião, para fazer o apontamento e ir ao ar.</p>', '24 de Janeiro de 2022 - 14:38:00', 'daiane.lins@viamaker.com'),
	(97, 25, 8, 1, 15, '', '<p><strong>04/11/2021</strong></p><p>Disponibilizamos as imagens e medidas para iniciar o projeto.&nbsp;</p><p>&nbsp;</p>', '24 de Janeiro de 2022 - 14:51:48', 'daiane.lins@viamaker.com'),
	(98, 25, 8, 6, 30, '', '<p><strong>06/12/2021 - Verusca e Alexandre</strong></p><p>Apresentamos as artes elaboradas pelo Fábio, ambos gostaram do projeto. Iremos enviar os arquivos e a Verusca irá enviar as medidas da televisão e do possível quadro que terá na sala.&nbsp;</p><p>&nbsp;</p>', '24 de Janeiro de 2022 - 14:53:32', 'daiane.lins@viamaker.com'),
	(99, 25, 2, 2, 0, '', '<p>Aguardando posicionamento do colégio.</p>', '24 de Janeiro de 2022 - 14:57:24', 'daiane.lins@viamaker.com'),
	(100, 25, 4, 2, 0, '', '<p>Aguardando posicionamento do colégio.</p>', '24 de Janeiro de 2022 - 14:57:40', 'daiane.lins@viamaker.com'),
	(101, 25, 4, 2, 0, '', '<p>Aguardando posicionamento do colégio.</p>', '24 de Janeiro de 2022 - 14:57:56', 'daiane.lins@viamaker.com'),
	(102, 25, 3, 5, 0, '', '<p>Aguardando ajustes de processo por VIAMAKER®.</p>', '24 de Janeiro de 2022 - 14:58:42', 'daiane.lins@viamaker.com'),
	(103, 25, 7, 2, 0, '', '<p>Aguardando posicionamento do colégio.</p>', '24 de Janeiro de 2022 - 14:59:16', 'daiane.lins@viamaker.com'),
	(104, 26, 1, 5, 0, '', '<p><strong>Julho/2021</strong><br>Olivia pediu para seguir com o projeto pausado devido a situação financeira do colégio.</p>', '24 de Janeiro de 2022 - 15:21:07', 'daiane.lins@viamaker.com'),
	(105, 26, 2, 5, 0, '', '<p><strong>Julho/2021</strong><br>Olivia pediu para seguir com o projeto pausado devido a situação financeira do colégio.</p>', '24 de Janeiro de 2022 - 15:21:20', 'daiane.lins@viamaker.com'),
	(106, 26, 4, 5, 0, '', '<p><strong>Julho/2021</strong><br>Olivia pediu para seguir com o projeto pausado devido a situação financeira do colégio.</p>', '24 de Janeiro de 2022 - 15:21:36', 'daiane.lins@viamaker.com'),
	(107, 26, 7, 5, 0, '', '<p><strong>Julho/2021</strong><br>Olivia pediu para seguir com o projeto pausado devido a situação financeira do colégio.</p>', '24 de Janeiro de 2022 - 15:21:46', 'daiane.lins@viamaker.com'),
	(108, 26, 8, 5, 0, '', '<p><strong>Julho/2021</strong><br>Olivia pediu para seguir com o projeto pausado devido a situação financeira do colégio.</p>', '24 de Janeiro de 2022 - 15:21:56', 'daiane.lins@viamaker.com'),
	(109, 26, 3, 5, 0, '', '<p>Aguardando ajustes de processo por VIAMAKER®.</p>', '24 de Janeiro de 2022 - 15:22:47', 'daiane.lins@viamaker.com'),
	(110, 27, 1, 1, 15, '', '<p><strong>20/08/2021</strong><br>Rafael Lobo fez a reunião com o sr Roberto e o Prof Daniel.&nbsp;<br>Fizeram a contratação do domínio <a href="https://colegiogenesisamparo.com.br/">colegiogenesisamparo.com.br</a> e lhes apresentou o layout do site desenvolvido, o qual já foi aprovado porém, com algumas adições de links externos.<br>Ficou de responsabilidade do Daniel o envio dos links.<br>Na próxima semana será dada continuidade à hospedagem do site e essas adições serão feitas com o site no ar.</p>', '24 de Janeiro de 2022 - 16:28:24', 'daiane.lins@viamaker.com'),
	(111, 27, 1, 6, 30, '', '<p>Site publicado em <strong>24/08/2021</strong>.</p>', '24 de Janeiro de 2022 - 16:28:58', 'daiane.lins@viamaker.com'),
	(112, 27, 2, 2, 15, '', '<p>Pr. Roberto ficou de enviar as medidas e fotos oficiais para iniciarmos o projeto, mas até o momento não recebemos nada.&nbsp;</p>', '24 de Janeiro de 2022 - 16:29:49', 'daiane.lins@viamaker.com'),
	(113, 27, 4, 5, 0, '', '<p>Aguardando posicionamento do colégio.&nbsp;</p>', '24 de Janeiro de 2022 - 16:30:13', 'daiane.lins@viamaker.com'),
	(114, 27, 7, 5, 0, '', '<p>Aguardando posicionamento do colégio.&nbsp;</p>', '24 de Janeiro de 2022 - 16:30:24', 'daiane.lins@viamaker.com'),
	(115, 27, 8, 5, 0, '', '<p>Aguardando posicionamento do colégio.&nbsp;</p>', '24 de Janeiro de 2022 - 16:30:40', 'daiane.lins@viamaker.com'),
	(116, 27, 3, 5, 0, '', '<p>Aguardando ajustes de processo por VIAMAKER®.</p><p>&nbsp;</p><p>&nbsp;</p>', '24 de Janeiro de 2022 - 16:31:13', 'daiane.lins@viamaker.com'),
	(117, 28, 1, 5, 0, '', '<p>Elaine pediu para permanecer com o projeto pausado devido a situação financeira do colégio.</p>', '24 de Janeiro de 2022 - 16:41:53', 'daiane.lins@viamaker.com'),
	(118, 28, 2, 5, 0, '', '<p>Elaine pediu para permanecer com o projeto pausado devido a situação financeira do colégio.</p>', '24 de Janeiro de 2022 - 16:42:05', 'daiane.lins@viamaker.com'),
	(119, 28, 4, 5, 0, '', '<p>Elaine pediu para permanecer com o projeto pausado devido a situação financeira do colégio.</p>', '24 de Janeiro de 2022 - 16:42:16', 'daiane.lins@viamaker.com'),
	(120, 28, 7, 5, 0, '', '<p>Elaine pediu para permanecer com o projeto pausado devido a situação financeira do colégio.</p>', '24 de Janeiro de 2022 - 16:42:30', 'daiane.lins@viamaker.com'),
	(121, 28, 8, 5, 0, '', '<p>Elaine pediu para permanecer com o projeto pausado devido a situação financeira do colégio.</p>', '24 de Janeiro de 2022 - 16:42:42', 'daiane.lins@viamaker.com'),
	(122, 28, 3, 5, 0, '', '<p>Aguardando ajustes de processo por VIAMAKER®.</p>', '24 de Janeiro de 2022 - 16:43:09', 'daiane.lins@viamaker.com'),
	(123, 29, 7, 1, 30, '', '<p><strong>17/12/2020 - Daniel</strong></p><p>Reunião para alinhar gravação e produção do vídeo e ensaio fotográfico.</p><p>&nbsp;</p><p><strong>Vídeo:&nbsp;</strong>Em resumo...</p><ol><li>Daniel prefere que a Carol (coordenadora) tenha frases pequenas ao final do vídeo convidando o público para conhecer a escola.</li><li>Além da grade curricular fazer menção dos cursos extras e dos períodos (manhã, tarde e integral) nos vídeos.</li><li>Enfatizar que é Escola da Bisa e não Recreação, pois há 8 anos existe uma estrutura que oferece recreação, mas há 4 temos a escola. Essa mensagem precisa ficar clara nos vídeos.</li><li>Solicitou que a narração seja com uma voz profissional.</li></ol><p>Solicitamos que organize o laboratório de robótica e todas as estruturas que apareceram nos vídeos conforme mencionado no briefing.</p><p>Sugerimos que o colégio convide e organize para que alguns alunos representem os cursos extras como balé, jiu-jitsu e capoeira. Ele ficou de organizar isso na medida do possível.&nbsp;</p><p>Estarão de recesso de 23/12 a 05/01.</p><p><strong>Ensaio Fotográfico:&nbsp;</strong>Aproveitar o momento do vídeo para realizar o ensaio fotográfico.</p><p><strong>Data da visita agendada para 06/01/2021 – Já formalizado ao Daniel.</strong></p>', '24 de Janeiro de 2022 - 16:55:53', 'daiane.lins@viamaker.com'),
	(124, 29, 7, 1, 0, '', '<p>Seguimos aguardando o texto para narração dos vídeos, o colégio está ciente disso e por vezes se comprometeu a enviar.</p>', '24 de Janeiro de 2022 - 16:58:35', 'daiane.lins@viamaker.com'),
	(125, 29, 7, 2, 15, '', '<p>Seguimos aguardando o texto para narração dos vídeos, o colégio está ciente disso e por vezes se comprometeu a enviar.</p>', '24 de Janeiro de 2022 - 16:58:58', 'daiane.lins@viamaker.com'),
	(126, 29, 1, 5, 15, '', '<p><strong>14/09/2021 - Daniel</strong></p><p>Possuem somente o domínio (escoladabisa.com.br), sem website no momento. Nesse momento utilizam apenas Facebook e Instagram.<strong>&nbsp;</strong></p><p>- Questionou se é possível utilizar o mesmo domínio. Possuem um servidor onde estão utilizando até mesmo para e-mails, já informamos que não é possível hospedar os e-mails.</p><p>Domínio antigo: casadabisaesc.com.br</p>', '24 de Janeiro de 2022 - 17:00:10', 'daiane.lins@viamaker.com'),
	(127, 29, 2, 5, 0, '', '<p><strong>14/09/2021 - Daniel</strong></p><p>Apresentamos a arte da fachada, mas ele sugeriu retomar este assunto mais pra frente. Sentiu que ficou um pouco poluído.</p>', '24 de Janeiro de 2022 - 17:01:11', 'daiane.lins@viamaker.com'),
	(128, 29, 8, 5, 15, '', '<p><strong>14/09/2021 - Daniel</strong></p><p><br>Possuem uma sala para robótica e tecnologia/pesquisa (Sala de Tecnologia). Aguardar o envio das fotos e medidas.</p>', '24 de Janeiro de 2022 - 17:01:45', 'daiane.lins@viamaker.com'),
	(129, 29, 7, 2, 15, '', '<p><strong>14/09/2021 - Daniel</strong></p><p><br>Reforçamos a urgência em receber os textos da locução dos vídeos que foram gravados em janeiro/21. Segundo ele, enviará até dia 17/09 pois as rematrículas irão iniciar em breve e ele precisa dos vídeos.</p>', '24 de Janeiro de 2022 - 17:03:12', 'daiane.lins@viamaker.com'),
	(130, 29, 4, 2, 15, '', '<p><strong>14/09/2021 - Daniel</strong></p><p>Aguardar a finalização dos vídeos para enviar tudo junto.</p>', '24 de Janeiro de 2022 - 17:03:36', 'daiane.lins@viamaker.com'),
	(131, 29, 3, 5, 0, '', '<p>Aguardando ajustes de processo por VIAMAKER®.</p>', '24 de Janeiro de 2022 - 17:04:26', 'daiane.lins@viamaker.com'),
	(132, 30, 1, 1, 15, '', '<p><strong>24/06/21 - Danielle</strong></p><p>Marcado nova reunião com o Rafael, terça-feira (29/06), às 10h.</p>', '25 de Janeiro de 2022 - 09:13:23', 'daiane.lins@viamaker.com'),
	(133, 30, 8, 1, 15, '', '<p><strong>24/06/21 - Danielle</strong></p><p><br>Irão verificar sobre esse investimento, por conta do novo prédio&nbsp;</p>', '25 de Janeiro de 2022 - 09:14:07', 'daiane.lins@viamaker.com'),
	(134, 30, 1, 1, 0, '', '<p><strong>29/06/21 - Júlia</strong></p><p>Irão verificar o domínio, antes de começarmos o site. Sobre os conteúdos textuais, a Júlia ficou de nos enviar até quinta-feira (01/07).&nbsp;</p><p>&nbsp;</p>', '25 de Janeiro de 2022 - 09:14:53', 'daiane.lins@viamaker.com'),
	(135, 30, 1, 1, 15, '', '<p><strong>06/07/21 - Danielle</strong></p><p>Domínio comprado hoje (06/07). Aguardar conteúdo atualizado. Após isso, iniciar o site.&nbsp;</p>', '25 de Janeiro de 2022 - 09:15:29', 'daiane.lins@viamaker.com'),
	(136, 30, 7, 1, 0, '', '<p><strong>06/07/21 - Danielle</strong></p><p>Iremos marcar uma data ainda no mês de julho para captação das imagens<strong>&nbsp;</strong></p>', '25 de Janeiro de 2022 - 09:16:18', 'daiane.lins@viamaker.com'),
	(137, 30, 1, 6, 30, '', '<p>17/08/21 - Danielle e Júlia</p><p>Apresentação do site.&nbsp;</p><p>&nbsp;As meninas adoraram o site, elogiaram e ficaram felizes com o projeto final.<strong>&nbsp;</strong><br>O Rafael explicou o passo a passo para preencher o restante das informações do site e o painel de funcionamento.&nbsp;</p>', '25 de Janeiro de 2022 - 09:17:27', 'daiane.lins@viamaker.com'),
	(138, 30, 8, 6, 15, '', '<p>13/12/21 - Danielle e Júlia</p><p>As meninas adoraram o projeto. Talvez mudem uma parede de adesivo por pintura no amarelo. Agora vamos atrás de gráfica para realizar o orçamento e fazer a adesivação.&nbsp;</p>', '25 de Janeiro de 2022 - 09:18:30', 'daiane.lins@viamaker.com'),
	(139, 30, 2, 6, 15, '', '<p>30/09/21 - Danielle</p><p>Entrega do projeto.&nbsp;</p>', '25 de Janeiro de 2022 - 09:19:43', 'daiane.lins@viamaker.com'),
	(140, 30, 3, 5, 0, '', '<p>Aguardando ajustes de processo por VIAMAKER®.</p>', '25 de Janeiro de 2022 - 09:20:16', 'daiane.lins@viamaker.com'),
	(141, 30, 7, 1, 15, '', '<p><strong>08/12/21</strong></p><p>Visita do Juarez para captação de vídeo e imagem.</p>', '25 de Janeiro de 2022 - 09:22:00', 'daiane.lins@viamaker.com'),
	(142, 30, 4, 1, 15, '', '<p><strong>08/12/21</strong></p><p>Visita do Juarez para captação de vídeo e imagem.</p>', '25 de Janeiro de 2022 - 09:22:19', 'daiane.lins@viamaker.com'),
	(143, 30, 7, 6, 0, '', '<p><strong>20/01/21 - Danielle, Lilian e Luciana</strong></p><p>Entrega, emocionante, dos vídeos.&nbsp;</p>', '25 de Janeiro de 2022 - 09:24:14', 'daiane.lins@viamaker.com'),
	(144, 31, 2, 1, 15, '', '<p><strong>30/06/21 - Sammy</strong></p><p>Vai tirar as primeiras medidas, fazer fotos e vídeos para darmos andamento até sexta-feira (02/07/2021).</p>', '25 de Janeiro de 2022 - 09:35:58', 'daiane.lins@viamaker.com'),
	(145, 31, 8, 1, 15, '', '<p><strong>30/06/21 - Sammy</strong></p><p>Vai tirar as primeiras medidas, fazer fotos e vídeos para darmos andamento até sexta-feira (02/07/2021).&nbsp;</p>', '25 de Janeiro de 2022 - 09:36:39', 'daiane.lins@viamaker.com'),
	(146, 31, 7, 1, 15, '', '<p><strong>30/06/21 - Sammy</strong></p><p>Pretende fazer o vídeo em agosto de 2021, após o laboratório e fachada.&nbsp;</p>', '25 de Janeiro de 2022 - 09:37:01', 'daiane.lins@viamaker.com'),
	(147, 31, 4, 1, 15, '', '<p><strong>30/06/21 - Sammy</strong></p><p><br>Pretende fazer as fotos em agosto de 2021, após o laboratório e fachada.&nbsp;</p>', '25 de Janeiro de 2022 - 09:37:39', 'daiane.lins@viamaker.com'),
	(148, 31, 1, 5, 30, '', '<p><strong>19/08/21 - Sammy</strong></p><p>Foi acordado que o Rafael irá gerenciar o atual site do colégio, de forma que ajude na comunicação visual (banner, textos e vídeos), até que o novo site seja desenvolvido (sem prazo).&nbsp;</p><p>A diretora irá fornecer os dados de acesso do site até amanhã (20/08).&nbsp;</p>', '25 de Janeiro de 2022 - 09:38:34', 'daiane.lins@viamaker.com'),
	(149, 31, 7, 1, 0, '', '<p><strong>16/09/21&nbsp;</strong></p><p>Visita do Juarez para captação de imagens e vídeos.</p>', '25 de Janeiro de 2022 - 09:42:14', 'daiane.lins@viamaker.com'),
	(150, 31, 4, 1, 0, '', '<p><strong>16/09/21&nbsp;</strong></p><p>Visita do Juarez para captação de imagens e vídeos.</p>', '25 de Janeiro de 2022 - 09:42:24', 'daiane.lins@viamaker.com'),
	(151, 31, 7, 6, 15, '', '<p>05/11/21 - Sammy</p><p>Entrega dos vídeos.</p>', '25 de Janeiro de 2022 - 09:43:10', 'daiane.lins@viamaker.com'),
	(152, 31, 4, 6, 15, '', '<p><strong>05/11/21 - Sammy</strong></p><p>Entrega das fotos.</p>', '25 de Janeiro de 2022 - 09:43:26', 'daiane.lins@viamaker.com'),
	(153, 31, 3, 5, 0, '', '<p>Aguardando ajustes de processo por VIAMAKER®.</p><p>&nbsp;</p><p>&nbsp;</p>', '25 de Janeiro de 2022 - 09:43:53', 'daiane.lins@viamaker.com'),
	(154, 31, 2, 5, 0, '', '<p>Colégio optou por aguardar.&nbsp;</p>', '25 de Janeiro de 2022 - 09:44:42', 'daiane.lins@viamaker.com'),
	(155, 31, 8, 1, 0, 'RECIBO-PATROCÃ-NIO-COLÃ-GIO-CEAS_31_b53b3a3d6ab90ce0268229151c9bde11.pdf', '<p>16/08/21&nbsp;</p><p>Pagamento da bonificação.&nbsp;</p>', '25 de Janeiro de 2022 - 09:48:21', 'daiane.lins@viamaker.com'),
	(156, 31, 8, 6, 0, '', '', '25 de Janeiro de 2022 - 09:49:21', 'daiane.lins@viamaker.com'),
	(157, 33, 7, 1, 30, '', '<p><strong>&nbsp;</strong>Iremos enviar o briefing e agendar uma data para a visita. Serão 3 vídeos de 1 minuto.&nbsp;</p>', '25 de Janeiro de 2022 - 14:36:33', 'jornalismo@viamaker.com'),
	(158, 33, 7, 1, 0, '', '<p>Visita agendada e concluída dia 23/11. Foram realizadas fotos e vídeos do colégio.&nbsp;<br>&nbsp;</p>', '25 de Janeiro de 2022 - 14:52:22', 'jornalismo@viamaker.com'),
	(159, 33, 7, 6, 0, '', '<p>Entrega dos vídeos do colégio via google meet.&nbsp;</p>', '25 de Janeiro de 2022 - 14:53:30', 'jornalismo@viamaker.com'),
	(160, 24, 7, 1, 30, '', '<p>Realizei junto ao Juarez, primeira reunião para alinhamentos sobre o trabalho audiovisual.&nbsp;</p><p>Enviei briefing via WhatsApp para Cláudia e aguardaremos agendamento para próxima reunião.</p>', '01 de Fevereiro de 2022 - 14:39:05', 'daiane.lins@viamaker.com'),
	(161, 24, 4, 1, 30, '', '<p>Realizei junto ao Juarez, primeira reunião para alinhamentos sobre o trabalho audiovisual.&nbsp;</p><p>Enviei briefing via WhatsApp para Cláudia e aguardaremos agendamento para próxima reunião.</p>', '01 de Fevereiro de 2022 - 14:39:21', 'daiane.lins@viamaker.com'),
	(162, 32, 8, 1, 15, '', '<p><strong>Reunião com Ana - 16/08/21</strong></p><p>Tiramos algumas dúvidas em relação as fotos enviadas e solicitamos a foto e medidas da quarta parede, que não foi enviada.</p>', '01 de Fevereiro de 2022 - 15:25:31', 'daiane.lins@viamaker.com'),
	(163, 32, 9, 1, 15, '', '<p><strong>Reunião com Ana - 16/08/21</strong></p><p>Apresentamos os dois modelos de camisetas para a diretora Ana, que gostou demais e ficou de validar até dia 18/08 com os demais gestores, qual modelo escolher.</p>', '01 de Fevereiro de 2022 - 15:25:57', 'daiane.lins@viamaker.com'),
	(164, 32, 8, 6, 30, '', '<p><strong>05/10/21</strong></p><p>Projeto entregue a gráfica: <a href="https://drive.google.com/file/d/110mO0SA-GRi9M1-tyZCrmfyrLngjCgCB/view?usp=sharing">https://drive.google.com/file/d/110mO0SA-GRi9M1-tyZCrmfyrLngjCgCB/view?usp=sharing</a></p>', '01 de Fevereiro de 2022 - 15:27:37', 'daiane.lins@viamaker.com'),
	(165, 32, 2, 5, 0, '', '<p>Projeto pausado até meados de 2022.</p>', '01 de Fevereiro de 2022 - 15:28:03', 'daiane.lins@viamaker.com'),
	(166, 32, 9, 6, 30, '', '<p><strong>29/10/21</strong></p><p>Camisetas entregues.</p><p>&nbsp;</p>', '01 de Fevereiro de 2022 - 15:28:36', 'daiane.lins@viamaker.com'),
	(167, 32, 1, 1, 30, '', '<p><strong>29/10/21</strong></p><p>A diretora Ana mostrou e explicou o que gostaria que ficasse de conteúdo no novo site, passou os contatos das pessoas responsáveis pelo marketing e pelo domínio.&nbsp;</p>', '01 de Fevereiro de 2022 - 15:30:30', 'daiane.lins@viamaker.com'),
	(168, 32, 1, 6, 15, '', '<p>Website concluído.&nbsp;</p>', '01 de Fevereiro de 2022 - 15:31:44', 'daiane.lins@viamaker.com'),
	(169, 32, 3, 5, 0, '', '<p>Aguardando ajustes de processo por VIAMAKER®.</p>', '01 de Fevereiro de 2022 - 15:32:16', 'daiane.lins@viamaker.com'),
	(170, 34, 7, 1, 15, '', '<p><strong>10/08/21</strong></p><p>3 vídeos de 1 minuto, o colégio irá providenciar o roteiro e levantar as pessoas que irão participar.&nbsp;</p>', '01 de Fevereiro de 2022 - 15:39:49', 'daiane.lins@viamaker.com'),
	(171, 34, 4, 1, 0, '', '<p>Fotos serão realizadas no mesmo dia da captação dos vídeos.&nbsp;</p>', '01 de Fevereiro de 2022 - 15:40:19', 'daiane.lins@viamaker.com'),
	(172, 34, 8, 1, 15, '', '<p><strong>26/08/21</strong></p><p>O diretor adorou as artes apresentadas, só pediu para acrescentar a frase “Lab Tech” nas paredes, pois é um termo utilizado no colégio.&nbsp;</p><p>Ficou também de nos enviar o contato da gráfica, as medidas e fotos da sala de matrícula/rematrícula para darmos andamento no plano de marketing.&nbsp;</p>', '01 de Fevereiro de 2022 - 15:41:29', 'daiane.lins@viamaker.com'),
	(173, 34, 10, 6, 0, '', '<p>Arte dos bottons entregue dia 19/08.</p>', '01 de Fevereiro de 2022 - 15:42:42', 'daiane.lins@viamaker.com'),
	(174, 34, 9, 6, 0, '', '<p><strong>30/08/21</strong></p><p><br>Camisetas entregues.</p>', '01 de Fevereiro de 2022 - 15:43:25', 'daiane.lins@viamaker.com'),
	(175, 34, 8, 6, 0, '', '<p><strong>27/09/21</strong></p><p>Projeto entregue.</p>', '01 de Fevereiro de 2022 - 15:44:10', 'daiane.lins@viamaker.com'),
	(176, 34, 3, 5, 0, '', '<p>Aguardando ajustes de processo por VIAMAKER®.</p>', '01 de Fevereiro de 2022 - 15:44:47', 'daiane.lins@viamaker.com'),
	(177, 34, 4, 1, 0, '', '<p><strong>04/11/21</strong></p><p>Visita do Juarez para captação de imagens.&nbsp;</p>', '01 de Fevereiro de 2022 - 15:46:33', 'daiane.lins@viamaker.com'),
	(178, 34, 7, 1, 0, '', '<p><strong>04/11/21</strong></p><p>Visita do Juarez para captação de vídeos.&nbsp;</p>', '01 de Fevereiro de 2022 - 15:46:50', 'daiane.lins@viamaker.com'),
	(179, 34, 7, 6, 0, '', '<p><strong>01/12/21</strong></p><p>Apresentação e envio dos vídeos.</p>', '01 de Fevereiro de 2022 - 15:49:20', 'daiane.lins@viamaker.com'),
	(180, 34, 2, 5, 0, '', '', '01 de Fevereiro de 2022 - 15:49:37', 'daiane.lins@viamaker.com'),
	(181, 34, 1, 5, 0, '', '<p>Colégio pediu para aguardar.</p>', '01 de Fevereiro de 2022 - 15:50:23', 'daiane.lins@viamaker.com'),
	(182, 34, 4, 6, 0, '', '<p>Fotos enviadas através do link: https://drive.google.com/drive/folders/1BEUJH3CsWzVSna-aIzbzdzLvaAw1wsyf?usp=sharing</p>', '01 de Fevereiro de 2022 - 16:00:38', 'daiane.lins@viamaker.com'),
	(183, 30, 4, 6, 0, '', '<p>Entrega das fotos via WhatsApp e e-mail.&nbsp;</p>', '02 de Fevereiro de 2022 - 16:22:00', 'daiane.lins@viamaker.com'),
	(184, 35, 1, 1, 15, '', '<p><strong>Reunião com Patrícia e Gustavo - 28/10/21</strong></p><p>Falamos do domínio e reforcei a importância do Gustavo conseguir os acessos.</p><p>&nbsp;</p><p>&nbsp;</p>', '02 de Fevereiro de 2022 - 16:36:48', 'daiane.lins@viamaker.com'),
	(185, 35, 8, 1, 15, '', '<p><strong>Reunião com Patrícia e Gustavo - 28/10/21</strong></p><p>Aguardando fotos – cobrei o Gustavo.</p>', '02 de Fevereiro de 2022 - 16:37:28', 'daiane.lins@viamaker.com'),
	(186, 35, 2, 1, 15, '', '<p><strong>Reunião com Patrícia e Gustavo - 28/10/21</strong></p><p>Aguardando foto – cobrei o Gustavo.&nbsp;</p>', '02 de Fevereiro de 2022 - 16:37:54', 'daiane.lins@viamaker.com'),
	(187, 35, 4, 5, 0, '', '<p><strong>Reunião com Patrícia e Gustavo - 28/10/21</strong></p><p>Tratar em 2022.</p>', '02 de Fevereiro de 2022 - 16:38:38', 'daiane.lins@viamaker.com'),
	(188, 35, 7, 5, 0, '', '<p><strong>Reunião com Patrícia e Gustavo - 28/10/21</strong></p><p>Tratar em 2022.</p>', '02 de Fevereiro de 2022 - 16:38:50', 'daiane.lins@viamaker.com'),
	(189, 35, 2, 6, 15, '', '<p>10/01/22</p><p>Apresentamos o projeto, o Gustavo amou. Enviamos as fotos, para que analisem com calma e pegamos o contato da gráfica indicada por eles, para darmos andamento.&nbsp;</p>', '02 de Fevereiro de 2022 - 16:43:37', 'daiane.lins@viamaker.com'),
	(190, 35, 8, 6, 15, '', '<p><strong>18/01/22</strong></p><p>Apresentação e entrega do projeto.</p><p>&nbsp;</p>', '02 de Fevereiro de 2022 - 16:44:53', 'daiane.lins@viamaker.com'),
	(191, 35, 1, 2, 0, '', '<p>Aguardando informações do cliente para dar andamento.&nbsp;</p>', '02 de Fevereiro de 2022 - 16:45:29', 'daiane.lins@viamaker.com'),
	(192, 37, 1, 1, 30, '', '<p><strong>Reunião com Stela - 29/10/21</strong></p><p>Rafael explicou a funcionalidade do site e o painel de controle. A diretora ficou de enviar o texto atualizado da metodologia de ensino do colégio, para subirmos no site.&nbsp;</p>', '02 de Fevereiro de 2022 - 17:39:01', 'daiane.lins@viamaker.com'),
	(193, 37, 8, 1, 0, '', '<p><strong>Reunião com Stela - 29/10/21</strong></p><p>Aguardar fotos e medidas.&nbsp;</p>', '02 de Fevereiro de 2022 - 17:40:07', 'daiane.lins@viamaker.com'),
	(194, 37, 2, 1, 0, '', '<p><strong>Reunião com Stela - 29/10/21</strong></p><p>Aguardar fotos.</p>', '02 de Fevereiro de 2022 - 17:40:38', 'daiane.lins@viamaker.com'),
	(195, 37, 7, 5, 0, '', '<p>Em 2022.</p>', '02 de Fevereiro de 2022 - 17:40:52', 'daiane.lins@viamaker.com'),
	(196, 37, 4, 5, 0, '', '<p>Em 2022.</p>', '02 de Fevereiro de 2022 - 17:41:03', 'daiane.lins@viamaker.com'),
	(197, 37, 1, 6, 0, '', '<p><strong>01/11/21</strong></p><p>&nbsp;</p><p>&nbsp;</p>', '02 de Fevereiro de 2022 - 17:43:01', 'daiane.lins@viamaker.com'),
	(198, 37, 2, 2, 0, '', '<p><strong>01/02/21</strong></p><p>Aguardando cliente enviar mais algumas medidas.&nbsp;</p>', '02 de Fevereiro de 2022 - 17:48:42', 'daiane.lins@viamaker.com'),
	(199, 37, 8, 2, 0, '', '<p><strong>01/02/21</strong></p><p>Aguardando cliente enviar mais algumas medidas.&nbsp;</p>', '02 de Fevereiro de 2022 - 17:49:05', 'daiane.lins@viamaker.com'),
	(200, 36, 8, 1, 0, '', '<p><strong>Reunião Felippe - 07/02/21</strong></p><p>O Felippe adorou o projeto da sala, ficou encantado com cada detalhe. Agora, ele irá enviar os contatos das gráficas que eles já trabalharam, para fazermos um orçamento. Ficou também de verificar sobre a legislação, pois não tem certeza se podemos adesivar a porta do elevador, mas caso seja possível, irá dar andamento, pois gostou bastante.&nbsp;</p><p>A Daiane vai enviar as fotos para ele, enquanto eu, irei iniciar as tratativas com os fornecedores.&nbsp;</p>', '02 de Fevereiro de 2022 - 17:52:05', 'daiane.lins@viamaker.com'),
	(201, 36, 8, 6, 0, '', '<p><strong>07/01/22</strong></p><p>Apresentação e entrega do projeto.&nbsp;</p>', '02 de Fevereiro de 2022 - 17:58:07', 'daiane.lins@viamaker.com'),
	(202, 36, 11, 6, 0, '', '<p>Evento que ocorreu no dia 14/09/21 das 9h às 22h</p><p>Momento de lançamento da nova unidade do colégio.</p>', '02 de Fevereiro de 2022 - 17:59:05', 'daiane.lins@viamaker.com'),
	(203, 38, 1, 1, 30, '', '<p><strong>Reunião com Ainoã(agência de mkt) - 21/10/21</strong></p><p>Explicamos as partes gerenciáveis do site e a estrutura que iremos trabalhar. Apresentamos o que já fizemos e o passo a passo para atualizar as informações.&nbsp;</p><p>Acrescentar aba de depoimento no site. Ficou como responsabilidade da cliente (Ainoã) providenciar o domínio do site, banners e depoimentos.&nbsp;</p>', '03 de Fevereiro de 2022 - 16:15:14', 'daiane.lins@viamaker.com'),
	(204, 38, 2, 2, 0, '', '<p>Aguardando cliente enviar as fotos e medidas.</p>', '03 de Fevereiro de 2022 - 16:16:07', 'daiane.lins@viamaker.com'),
	(205, 38, 8, 2, 0, '', '<p>Aguardando cliente enviar as fotos e medidas.</p>', '03 de Fevereiro de 2022 - 16:16:18', 'daiane.lins@viamaker.com'),
	(206, 38, 4, 5, 0, '', '<p>Agendar nova reunião.&nbsp;</p>', '03 de Fevereiro de 2022 - 16:17:10', 'daiane.lins@viamaker.com'),
	(207, 38, 7, 5, 0, '', '<p>Agendar nova reunião.&nbsp;</p>', '03 de Fevereiro de 2022 - 16:17:24', 'daiane.lins@viamaker.com'),
	(208, 38, 3, 5, 0, '', '<p>Aguardando ajustes de processo por VIAMAKER®.</p>', '03 de Fevereiro de 2022 - 16:17:53', 'daiane.lins@viamaker.com'),
	(209, 38, 1, 6, 0, '', '<p>Site no ar - https://colegioalem.com.br</p>', '03 de Fevereiro de 2022 - 16:18:53', 'daiane.lins@viamaker.com'),
	(210, 39, 1, 4, 15, '', '<p><strong>Website:</strong> Após verificar com a Simone, secretária do colégio, eles já possuem o domínio do site. A Benedita disse que irá confirmar sobre o prazo do domínio e qual é ele, pois não sabem. A Simone volta dia 10/01/2021, assim que ela retornar, elas verificarão essas informações. Enquanto isso, ficaram de enviar os conteúdos e fotos para início do website.&nbsp;</p>', '04 de Fevereiro de 2022 - 11:21:22', 'jornalismo@viamaker.com'),
	(211, 39, 7, 3, 15, '', '<p>Juarez tirou todas as dúvidas e explicamos como funciona. Fiquei de enviar o briefing ao final da reunião.&nbsp;</p>', '04 de Fevereiro de 2022 - 11:24:41', 'jornalismo@viamaker.com'),
	(212, 39, 1, 4, 15, '', '<p>Rafael comprou o domínio do site e enviamos o boleto para a Tãnia (do colégio) pagar. Ela comprou para 1 ano.&nbsp;</p>', '04 de Fevereiro de 2022 - 11:26:43', 'jornalismo@viamaker.com'),
	(213, 39, 1, 3, 30, '', '<p>Recebemos os conteúdos da Tânia, agora é dar início no projeto.&nbsp;</p>', '04 de Fevereiro de 2022 - 11:45:58', 'jornalismo@viamaker.com'),
	(214, 39, 4, 3, 390, '', '<p>Viagem para captação de fotos e vídeos do colégio. As horas incluem o tempo de viagem - ida e volta.&nbsp;</p>', '04 de Fevereiro de 2022 - 11:48:25', 'jornalismo@viamaker.com'),
	(215, 39, 7, 3, 390, '', '<p>Viagem para captação de fotos e vídeos do colégio. As horas incluem o tempo de viagem - ida e volta.&nbsp;</p>', '04 de Fevereiro de 2022 - 11:50:46', 'jornalismo@viamaker.com'),
	(216, 38, 1, 6, 45, '', '<p>Apresentação do painel de gerenciamento e do projeto final do site. A diretora adorou o resultado.&nbsp;</p>', '09 de Fevereiro de 2022 - 09:07:34', 'jornalismo@viamaker.com'),
	(217, 40, 8, 6, 0, '', '<p>Projeto enviado por e-mail para a gráfica e para o diretor do colégio em 03/02/2022.</p><p>&nbsp;</p>', '09 de Fevereiro de 2022 - 11:04:03', 'priscila.lima@viamaker.com'),
	(218, 40, 1, 5, 0, '', '<p>No dia 26/10/2021 , em nossa primeira reunião, o diretor explicou que eles já possuem um website e que no momento não há o interesse em mudar o layout. Link: https://colegioexpressao.com</p>', '09 de Fevereiro de 2022 - 11:06:58', 'priscila.lima@viamaker.com'),
	(219, 40, 2, 5, 0, '', '<p>No dia 26/10/2021 , em nossa primeira reunião, o diretor explicou que no momento não há o interesse em fazer a fachada, pois já estavam com um projeto em andamento dela.&nbsp;</p>', '09 de Fevereiro de 2022 - 11:08:22', 'priscila.lima@viamaker.com'),
	(220, 41, 11, 6, 0, '', '<p>Vídeo entregue dia 22 de novembro de 2021 via google meet. A diretora adorou e agradeceu bastante pelo apoio com o evento.&nbsp;</p>', '09 de Fevereiro de 2022 - 11:33:28', 'priscila.lima@viamaker.com'),
	(221, 41, 8, 5, 0, '', '<p>Irá esperar, pois pretende mudar a sala de robótica ao finalizar a reforma do colégio. – Provavelmente será apenas em 1 parede a customização.&nbsp;</p>', '09 de Fevereiro de 2022 - 11:35:56', 'priscila.lima@viamaker.com'),
	(222, 41, 2, 2, 0, '', '<p>Aguardando as fotos para começarmos.</p>', '09 de Fevereiro de 2022 - 11:36:36', 'priscila.lima@viamaker.com'),
	(223, 41, 4, 5, 0, '', '<p>Ficará para 2022, quando concluir a reforma e a fachada.&nbsp;</p>', '09 de Fevereiro de 2022 - 11:37:02', 'priscila.lima@viamaker.com'),
	(224, 41, 7, 5, 0, '', '<p>Ficará para 2022, quando concluir a reforma e a fachada.&nbsp;</p>', '09 de Fevereiro de 2022 - 11:37:20', 'priscila.lima@viamaker.com'),
	(225, 41, 9, 2, 0, '', '<p>Layout das camisetas entregues dia 06/12/2021. A diretora irá confirmar o quantitativo de estudantes para enviarmos à produção.&nbsp;</p><p>Data estimada: março de 2022.&nbsp;</p>', '09 de Fevereiro de 2022 - 11:41:07', 'priscila.lima@viamaker.com'),
	(226, 41, 1, 2, 0, '', '<p>Aguardando informações do colégio para iniciarmos o website.&nbsp;</p>', '09 de Fevereiro de 2022 - 11:41:44', 'priscila.lima@viamaker.com');
/*!40000 ALTER TABLE `timeline` ENABLE KEYS */;

-- Copiando estrutura para tabela contratos_db.users
CREATE TABLE IF NOT EXISTS `users` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `nome_user` varchar(800) NOT NULL,
  `email_user` varchar(200) NOT NULL,
  `pwd_user` varchar(50) NOT NULL DEFAULT 'd6de27e20a21c38f45169587d8154d27',
  `foto_user` varchar(50) DEFAULT NULL,
  `status_user` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela contratos_db.users: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id_user`, `nome_user`, `email_user`, `pwd_user`, `foto_user`, `status_user`) VALUES
	(1, 'Rafa', 'rafael.lobo@viamaker.com', '2e8a97057eedd058f5be91e80152e3e2', '2fade616065280b5e4e97151c6934a75.jpg', 9),
	(2, 'Priscila', 'priscila.lima@viamaker.com', 'd6de27e20a21c38f45169587d8154d27', '13d5a1f0e01ee34642f7dcc8765bf0a8.jpg', 1),
	(3, 'Daiane', 'daiane.lins@viamaker.com', 'd6de27e20a21c38f45169587d8154d27', NULL, 1),
	(4, 'William', 'william.correa@viamaker.com', '25d55ad283aa400af464c76d713c07ad', '', 9);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
