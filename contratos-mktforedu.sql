-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           10.4.17-MariaDB - mariadb.org binary distribution
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              11.3.0.6295
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Copiando estrutura para tabela cadastromkt4edu.clientes
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
  `observacao` text DEFAULT NULL,
  `status_cliente` int(11) NOT NULL DEFAULT 1,
  `responsavel` varchar(800) DEFAULT NULL,
  `telefone` varchar(50) DEFAULT NULL,
  `whatsapp` varchar(50) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `site` varchar(200) DEFAULT NULL,
  `endereco` varchar(800) DEFAULT NULL,
  `editado_em` varchar(800) DEFAULT NULL,
  `editado_por` varchar(800) DEFAULT NULL,
  PRIMARY KEY (`id_cliente`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

-- Copiando dados para a tabela cadastromkt4edu.clientes: ~1 rows (aproximadamente)
/*!40000 ALTER TABLE `clientes` DISABLE KEYS */;
/*!40000 ALTER TABLE `clientes` ENABLE KEYS */;

-- Copiando estrutura para tabela cadastromkt4edu.projetos_clientes
CREATE TABLE IF NOT EXISTS `projetos_clientes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cliente` varchar(50) NOT NULL DEFAULT '',
  `projeto` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

-- Copiando dados para a tabela cadastromkt4edu.projetos_clientes: ~5 rows (aproximadamente)
/*!40000 ALTER TABLE `projetos_clientes` DISABLE KEYS */;
/*!40000 ALTER TABLE `projetos_clientes` ENABLE KEYS */;

-- Copiando estrutura para tabela cadastromkt4edu.projetos_existentes
CREATE TABLE IF NOT EXISTS `projetos_existentes` (
  `id_projeto` int(11) NOT NULL AUTO_INCREMENT,
  `nome_projeto` varchar(800) NOT NULL,
  `desc_projeto` text NOT NULL,
  PRIMARY KEY (`id_projeto`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

-- Copiando dados para a tabela cadastromkt4edu.projetos_existentes: ~4 rows (aproximadamente)
/*!40000 ALTER TABLE `projetos_existentes` DISABLE KEYS */;
INSERT INTO `projetos_existentes` (`id_projeto`, `nome_projeto`, `desc_projeto`) VALUES
	(1, 'WEBSITE', ' Lorem ipsum dolor sit amet consectetur adipisicing elit.'),
	(2, 'FACHADA', ' Lorem ipsum dolor sit amet consectetur adipisicing elit.'),
	(3, 'PESQUISA', ' Lorem ipsum dolor sit amet consectetur adipisicing elit.'),
	(4, 'AUDIOVISUAL', ' Lorem ipsum dolor sit amet consectetur adipisicing elit.');
/*!40000 ALTER TABLE `projetos_existentes` ENABLE KEYS */;

-- Copiando estrutura para tabela cadastromkt4edu.reuniao
CREATE TABLE IF NOT EXISTS `reuniao` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cliente` int(11) NOT NULL,
  `reuniao` text NOT NULL,
  `criado_em` varchar(200) NOT NULL,
  `criado_por` varchar(200) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=131 DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

-- Copiando dados para a tabela cadastromkt4edu.reuniao: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `reuniao` DISABLE KEYS */;
/*!40000 ALTER TABLE `reuniao` ENABLE KEYS */;

-- Copiando estrutura para tabela cadastromkt4edu.status_clientes
CREATE TABLE IF NOT EXISTS `status_clientes` (
  `id_status` int(11) NOT NULL AUTO_INCREMENT,
  `nome_status` varchar(50) NOT NULL DEFAULT '1',
  `cor_status` int(11) NOT NULL,
  PRIMARY KEY (`id_status`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

-- Copiando dados para a tabela cadastromkt4edu.status_clientes: ~4 rows (aproximadamente)
/*!40000 ALTER TABLE `status_clientes` DISABLE KEYS */;
INSERT INTO `status_clientes` (`id_status`, `nome_status`, `cor_status`) VALUES
	(1, 'ASSINADO', 1),
	(2, 'EMITIDO', 2),
	(3, 'NO GO', 3),
	(4, 'NEGOCIAÇÃO', 4);
/*!40000 ALTER TABLE `status_clientes` ENABLE KEYS */;

-- Copiando estrutura para tabela cadastromkt4edu.status_projetos
CREATE TABLE IF NOT EXISTS `status_projetos` (
  `id_status` int(11) NOT NULL AUTO_INCREMENT,
  `nome_status` varchar(50) NOT NULL,
  `cor_status` int(11) NOT NULL,
  PRIMARY KEY (`id_status`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

-- Copiando dados para a tabela cadastromkt4edu.status_projetos: ~6 rows (aproximadamente)
/*!40000 ALTER TABLE `status_projetos` DISABLE KEYS */;
INSERT INTO `status_projetos` (`id_status`, `nome_status`, `cor_status`) VALUES
	(1, 'EM ANDAMENTO', 1),
	(2, 'AGUARDANDO CLIENTE', 2),
	(3, 'PROD. VIAMAKER', 3),
	(4, 'PROD. CLIENTE', 4),
	(5, 'PAUSADO', 5),
	(6, 'CONCLUÍDO', 6);
/*!40000 ALTER TABLE `status_projetos` ENABLE KEYS */;

-- Copiando estrutura para tabela cadastromkt4edu.timeline
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
) ENGINE=InnoDB AUTO_INCREMENT=65 DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

-- Copiando dados para a tabela cadastromkt4edu.timeline: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `timeline` DISABLE KEYS */;
/*!40000 ALTER TABLE `timeline` ENABLE KEYS */;

-- Copiando estrutura para tabela cadastromkt4edu.users
CREATE TABLE IF NOT EXISTS `users` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `nome_user` varchar(800) NOT NULL,
  `email_user` varchar(200) NOT NULL,
  `pwd_user` varchar(50) NOT NULL,
  `foto_user` varchar(50) DEFAULT NULL,
  `status_user` int(11) NOT NULL DEFAULT 1,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela cadastromkt4edu.users: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id_user`, `nome_user`, `email_user`, `pwd_user`, `foto_user`, `status_user`) VALUES
	(1, 'Rafa', 'rafa@arteros.com.br', '2e8a97057eedd058f5be91e80152e3e2', 'b626642339d9bdd30328a9c4db1b7c61.jpg', 9),
	(2, 'Priscila', 'jornalismo@viamaker.com', '613a8ddc613397f4e338cb2ecb095ef2', NULL, 1),
	(3, 'Daiane', 'daiane.lins@viamaker.com', '613a8ddc613397f4e338cb2ecb095ef2', NULL, 1);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
