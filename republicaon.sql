-- --------------------------------------------------------
-- Servidor:                     localhost
-- Versão do servidor:           5.7.24 - MySQL Community Server (GPL)
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              9.5.0.5332
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Copiando estrutura para tabela republicaon.address_admin
CREATE TABLE IF NOT EXISTS `address_admin` (
  `id_address` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL DEFAULT '0',
  `state` varchar(100) NOT NULL DEFAULT '0',
  `city` varchar(100) NOT NULL DEFAULT '0',
  `street` varchar(100) NOT NULL DEFAULT '0',
  `number_house` varchar(100) NOT NULL DEFAULT '0',
  `zip` varchar(100) NOT NULL DEFAULT '0',
  `complement` varchar(100) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_address`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela republicaon.address_admin: ~1 rows (aproximadamente)
/*!40000 ALTER TABLE `address_admin` DISABLE KEYS */;
INSERT INTO `address_admin` (`id_address`, `user_id`, `state`, `city`, `street`, `number_house`, `zip`, `complement`) VALUES
	(1, 1, 'Minas Gerais', 'Viçosa', 'Rua  dos passos', '10', '36570-005', 'Casa'),
	(2, 1, 'Minas Gerais', 'Viçosa', 'Rua Nossa Senhora Aparecida', '166', '36570-005', 'not');
/*!40000 ALTER TABLE `address_admin` ENABLE KEYS */;

-- Copiando estrutura para tabela republicaon.address_republic
CREATE TABLE IF NOT EXISTS `address_republic` (
  `id_address_republic` int(11) NOT NULL AUTO_INCREMENT,
  `republic_id` int(11) NOT NULL,
  `longitude` varchar(50) DEFAULT NULL,
  `latitude` varchar(50) DEFAULT NULL,
  `street` varchar(50) NOT NULL,
  `number` varchar(50) NOT NULL,
  `neighborhood` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `cep` varchar(50) NOT NULL,
  PRIMARY KEY (`id_address_republic`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela republicaon.address_republic: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `address_republic` DISABLE KEYS */;
/*!40000 ALTER TABLE `address_republic` ENABLE KEYS */;

-- Copiando estrutura para tabela republicaon.contact_republic
CREATE TABLE IF NOT EXISTS `contact_republic` (
  `id_contact_republic` int(11) NOT NULL AUTO_INCREMENT,
  `republic_id` int(11) NOT NULL,
  `email` varchar(80) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `facebook` varchar(100) NOT NULL,
  `youtube` varchar(100) NOT NULL,
  `instagram` varchar(100) NOT NULL,
  PRIMARY KEY (`id_contact_republic`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela republicaon.contact_republic: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `contact_republic` DISABLE KEYS */;
/*!40000 ALTER TABLE `contact_republic` ENABLE KEYS */;

-- Copiando estrutura para tabela republicaon.facilities
CREATE TABLE IF NOT EXISTS `facilities` (
  `id_facilities` int(11) NOT NULL AUTO_INCREMENT,
  `republic_id` int(11) NOT NULL,
  `facilities_options_id` int(11) NOT NULL,
  PRIMARY KEY (`id_facilities`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela republicaon.facilities: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `facilities` DISABLE KEYS */;
/*!40000 ALTER TABLE `facilities` ENABLE KEYS */;

-- Copiando estrutura para tabela republicaon.facilities_options
CREATE TABLE IF NOT EXISTS `facilities_options` (
  `id_facilities_options` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id_facilities_options`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1 COMMENT='Wifi, sauna, piscina...';

-- Copiando dados para a tabela republicaon.facilities_options: ~15 rows (aproximadamente)
/*!40000 ALTER TABLE `facilities_options` DISABLE KEYS */;
INSERT INTO `facilities_options` (`id_facilities_options`, `name`) VALUES
	(1, 'Wi-Fi'),
	(2, 'Piscina'),
	(3, 'Quartos Individuais'),
	(4, 'Diarista'),
	(5, 'Mobiliado'),
	(6, 'Garagem Moto'),
	(7, 'Garagem Bicileta'),
	(8, 'Garagem Carro'),
	(9, 'Quarto compartilhado'),
	(10, 'Despesas Inclusas'),
	(11, 'Animais de Estimação'),
	(12, 'Visita Externa'),
	(13, 'Áreas de Estudos'),
	(14, 'Áreas de Lazer'),
	(15, 'Cobertura'),
	(16, 'Quintal');
/*!40000 ALTER TABLE `facilities_options` ENABLE KEYS */;

-- Copiando estrutura para tabela republicaon.img_republic
CREATE TABLE IF NOT EXISTS `img_republic` (
  `id_img_republic` int(11) NOT NULL AUTO_INCREMENT,
  `republic_id` int(11) NOT NULL,
  `way` tinytext NOT NULL,
  PRIMARY KEY (`id_img_republic`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela republicaon.img_republic: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `img_republic` DISABLE KEYS */;
/*!40000 ALTER TABLE `img_republic` ENABLE KEYS */;

-- Copiando estrutura para tabela republicaon.republic
CREATE TABLE IF NOT EXISTS `republic` (
  `id_republic` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL COMMENT 'Mista, masculina, feminina ...',
  `tags` varchar(300) NOT NULL COMMENT 'separadas por kd7',
  `culture` tinytext NOT NULL COMMENT 'Estilo da republica',
  `property_type` varchar(50) NOT NULL COMMENT 'apartamento, casa ...',
  `verified` varchar(50) NOT NULL COMMENT 'republica foi verificada por nossa equipe',
  `residents` int(11) NOT NULL COMMENT 'numero de moradores',
  `monthly_expense` double NOT NULL,
  `other_expenses` double DEFAULT NULL,
  `stars` varchar(100) DEFAULT NULL COMMENT 'Estrelas',
  `single_rooms` int(11) DEFAULT NULL,
  `collective_rooms` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_republic`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela republicaon.republic: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `republic` DISABLE KEYS */;
/*!40000 ALTER TABLE `republic` ENABLE KEYS */;

-- Copiando estrutura para tabela republicaon.social_information
CREATE TABLE IF NOT EXISTS `social_information` (
  `id_social_information` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL DEFAULT '0',
  `facebook` varchar(100) NOT NULL,
  `instagram` varchar(100) NOT NULL,
  `whatsapp` varchar(50) NOT NULL,
  `another_phone` varchar(50) NOT NULL,
  PRIMARY KEY (`id_social_information`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela republicaon.social_information: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `social_information` DISABLE KEYS */;
INSERT INTO `social_information` (`id_social_information`, `user_id`, `facebook`, `instagram`, `whatsapp`, `another_phone`) VALUES
	(1, 1, 'https://www.facebook.com/profile.php?id=100011726263239', 'not', '(31) 99808-1171', 'not');
/*!40000 ALTER TABLE `social_information` ENABLE KEYS */;

-- Copiando estrutura para tabela republicaon.tags
CREATE TABLE IF NOT EXISTS `tags` (
  `id_tags` int(11) NOT NULL AUTO_INCREMENT,
  `republic_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id_tags`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela republicaon.tags: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `tags` DISABLE KEYS */;
/*!40000 ALTER TABLE `tags` ENABLE KEYS */;

-- Copiando estrutura para tabela republicaon.users
CREATE TABLE IF NOT EXISTS `users` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(100) NOT NULL,
  `password` varchar(32) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela republicaon.users: ~1 rows (aproximadamente)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id_user`, `login`, `password`) VALUES
	(1, 'victor@infocept.com.br', '446ea918b7cca21fe6a442315110610a');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
