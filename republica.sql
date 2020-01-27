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
  `neighborhood` varchar(100) NOT NULL DEFAULT '0',
  `complement` varchar(100) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_address`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela republicaon.address_admin: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `address_admin` DISABLE KEYS */;
INSERT INTO `address_admin` (`id_address`, `user_id`, `state`, `city`, `street`, `number_house`, `zip`, `neighborhood`, `complement`) VALUES
	(1, 1, 'Minas Gerais', 'Viçosa', 'Rua  dos passos', '10', '36570-005', 'Fuad Chequer', 'Casa');
/*!40000 ALTER TABLE `address_admin` ENABLE KEYS */;

-- Copiando estrutura para tabela republicaon.address_republic
CREATE TABLE IF NOT EXISTS `address_republic` (
  `id_address_republic` int(11) NOT NULL AUTO_INCREMENT,
  `republic_id` int(11) NOT NULL,
  `longitude` varchar(50) DEFAULT NULL,
  `latitude` varchar(50) DEFAULT NULL,
  `street` varchar(50) NOT NULL,
  `number_republic` varchar(50) NOT NULL,
  `neighborhood` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `cep` varchar(50) NOT NULL,
  `complement` varchar(50) NOT NULL,
  PRIMARY KEY (`id_address_republic`)
) ENGINE=InnoDB AUTO_INCREMENT=83 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela republicaon.address_republic: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `address_republic` DISABLE KEYS */;
INSERT INTO `address_republic` (`id_address_republic`, `republic_id`, `longitude`, `latitude`, `street`, `number_republic`, `neighborhood`, `city`, `state`, `cep`, `complement`) VALUES
	(38, 39, NULL, NULL, 'Milton Bandeira', '311', 'Centro', 'Viçosa', 'MG', '36570 - 005', 'Loja'),
	(81, 82, NULL, NULL, 'Rua dos Passos', '10', 'Centro', 'Viçosa', 'MG', '36570-005', 'Casa'),
	(82, 83, NULL, NULL, 'Álvaro Góveia', '130', 'Centro', 'Viçosa', 'Minas gerais', '36570 - 027', 'Casa');
/*!40000 ALTER TABLE `address_republic` ENABLE KEYS */;

-- Copiando estrutura para tabela republicaon.contact_republic
CREATE TABLE IF NOT EXISTS `contact_republic` (
  `id_contact_republic` int(11) NOT NULL AUTO_INCREMENT,
  `republic_id` int(11) NOT NULL,
  `facebook` tinytext NOT NULL,
  `youtube` tinytext NOT NULL,
  `instagram` tinytext NOT NULL,
  PRIMARY KEY (`id_contact_republic`)
) ENGINE=InnoDB AUTO_INCREMENT=82 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela republicaon.contact_republic: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `contact_republic` DISABLE KEYS */;
INSERT INTO `contact_republic` (`id_contact_republic`, `republic_id`, `facebook`, `youtube`, `instagram`) VALUES
	(37, 39, 'https://www.facebook.com/InfoCept.graphics/?eid=ARD8w_OCfRzWgUg4zCKkbcR-3ZdyRUy8XvoSSC9op70XUXapKCZCHzHmB-1CUQnLxVyyWuc9u1AQOBAY', 'not', 'not'),
	(80, 82, 'teste', 'not', 'not'),
	(81, 83, 'not', 'not', 'not');
/*!40000 ALTER TABLE `contact_republic` ENABLE KEYS */;

-- Copiando estrutura para tabela republicaon.facilities
CREATE TABLE IF NOT EXISTS `facilities` (
  `id_facilities` int(11) NOT NULL AUTO_INCREMENT,
  `republic_id` int(11) NOT NULL,
  `facilities_options_id` int(11) NOT NULL,
  PRIMARY KEY (`id_facilities`)
) ENGINE=InnoDB AUTO_INCREMENT=74 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela republicaon.facilities: ~16 rows (aproximadamente)
/*!40000 ALTER TABLE `facilities` DISABLE KEYS */;
INSERT INTO `facilities` (`id_facilities`, `republic_id`, `facilities_options_id`) VALUES
	(58, 39, 1),
	(59, 39, 4),
	(60, 39, 5),
	(61, 39, 10),
	(62, 39, 13),
	(63, 82, 1),
	(64, 82, 5),
	(65, 82, 7),
	(66, 83, 1),
	(67, 83, 3),
	(68, 83, 5),
	(69, 83, 6),
	(70, 83, 7),
	(71, 83, 10),
	(72, 83, 12),
	(73, 83, 13);
/*!40000 ALTER TABLE `facilities` ENABLE KEYS */;

-- Copiando estrutura para tabela republicaon.facilities_options
CREATE TABLE IF NOT EXISTS `facilities_options` (
  `id_facilities_options` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id_facilities_options`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1 COMMENT='Wifi, sauna, piscina...';

-- Copiando dados para a tabela republicaon.facilities_options: ~17 rows (aproximadamente)
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
	(16, 'Quintal'),
	(17, 'Limpeza');
/*!40000 ALTER TABLE `facilities_options` ENABLE KEYS */;

-- Copiando estrutura para tabela republicaon.img_republic
CREATE TABLE IF NOT EXISTS `img_republic` (
  `id_img_republic` int(11) NOT NULL AUTO_INCREMENT,
  `republic_id` int(11) NOT NULL,
  `way` tinytext NOT NULL,
  `subtitle` tinytext,
  PRIMARY KEY (`id_img_republic`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela republicaon.img_republic: ~6 rows (aproximadamente)
/*!40000 ALTER TABLE `img_republic` DISABLE KEYS */;
INSERT INTO `img_republic` (`id_img_republic`, `republic_id`, `way`, `subtitle`) VALUES
	(21, 39, 'assets/img/republic/República InfoCept/logo-1.png', 'teste.teste'),
	(22, 39, 'assets/img/republic/República InfoCept/logo-3.png', '123455'),
	(23, 39, 'assets/img/republic/República InfoCept/ad_fidelidade.png', '5455445'),
	(24, 82, 'assets/img/republic/Republica Naja/04.jpg', 'Imagem1'),
	(25, 82, 'assets/img/republic/Republica Naja/02_b.jpg', 'Imagem 2'),
	(26, 83, 'assets/img/republic/Casa do Estudante/screenshot_2019-08-29_frases_de_nutricionista_-_pesquisa_google1.png', 'Teste');
/*!40000 ALTER TABLE `img_republic` ENABLE KEYS */;

-- Copiando estrutura para tabela republicaon.republic
CREATE TABLE IF NOT EXISTS `republic` (
  `id_republic` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL COMMENT 'Mista, masculina, feminina ...',
  `culture` tinytext NOT NULL COMMENT 'Estilo da republica',
  `property_type` varchar(50) NOT NULL COMMENT 'apartamento, casa ...',
  `verified` varchar(50) NOT NULL DEFAULT '0' COMMENT 'republica foi verificada por nossa equipe',
  `residents` int(11) NOT NULL COMMENT 'numero de moradores',
  `monthly_expense` double NOT NULL,
  `other_expenses` double DEFAULT NULL,
  `stars` varchar(100) DEFAULT '5' COMMENT 'Estrelas',
  `single_rooms` int(11) DEFAULT NULL,
  `collective_rooms` int(11) DEFAULT NULL,
  `vacancies` int(11) DEFAULT '0',
  `registration date` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_republic`)
) ENGINE=InnoDB AUTO_INCREMENT=84 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela republicaon.republic: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `republic` DISABLE KEYS */;
INSERT INTO `republic` (`id_republic`, `user_id`, `name`, `category`, `culture`, `property_type`, `verified`, `residents`, `monthly_expense`, `other_expenses`, `stars`, `single_rooms`, `collective_rooms`, `vacancies`, `registration date`) VALUES
	(39, 1, 'República InfoCept', 'Mista', 'Imprimir é nossa razão de viver !!!', 'Apartamento', '0', 3, 1500, 0, '5', 1, 2, 1, '2019-08-29 08:37:28'),
	(82, 1, 'Republica Naja', 'Mista', 'Escola de Informática', '1', '0', 4, 450, 600, '5', 2, 1, 0, '2019-08-29 09:02:28'),
	(83, 1, 'Casa do Estudante', 'Mista', 'República Familiar, voltada apenas para estudos.', '1', '0', 5, 350, 0, '5', 5, 0, 0, '2019-08-29 09:25:35');
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

-- Copiando estrutura para tabela republicaon.tags_republic
CREATE TABLE IF NOT EXISTS `tags_republic` (
  `id_tags` int(11) NOT NULL AUTO_INCREMENT,
  `republic_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id_tags`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela republicaon.tags_republic: ~9 rows (aproximadamente)
/*!40000 ALTER TABLE `tags_republic` DISABLE KEYS */;
INSERT INTO `tags_republic` (`id_tags`, `republic_id`, `name`) VALUES
	(16, 39, 'Gráfico'),
	(17, 39, 'UFV'),
	(18, 39, 'Viçosa'),
	(19, 82, 'Naja'),
	(20, 82, ' Viçosa'),
	(21, 82, ' UFV'),
	(22, 83, 'UFV'),
	(23, 83, ' Viçosa'),
	(24, 83, ' Festas');
/*!40000 ALTER TABLE `tags_republic` ENABLE KEYS */;

-- Copiando estrutura para tabela republicaon.users
CREATE TABLE IF NOT EXISTS `users` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL DEFAULT '0',
  `login` varchar(100) NOT NULL,
  `password` varchar(32) NOT NULL,
  `img_profile` tinytext,
  `register_data` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela republicaon.users: ~1 rows (aproximadamente)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id_user`, `name`, `login`, `password`, `img_profile`, `register_data`) VALUES
	(1, 'Victor Santos', 'victor@infocept.com.br', '446ea918b7cca21fe6a442315110610a', 'assets/img/administrator/avatar_default.png', '2019-08-26 08:25:27');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
