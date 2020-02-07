-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 07-Fev-2020 às 19:59
-- Versão do servidor: 5.7.24
-- versão do PHP: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `republicaon`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `address_admin`
--

CREATE TABLE `address_admin` (
  `id_address` int(11) NOT NULL,
  `user_id` int(11) NOT NULL DEFAULT '0',
  `state` varchar(100) NOT NULL DEFAULT '0',
  `city` varchar(100) NOT NULL DEFAULT '0',
  `street` varchar(100) NOT NULL DEFAULT '0',
  `number_house` varchar(100) NOT NULL DEFAULT '0',
  `zip` varchar(100) NOT NULL DEFAULT '0',
  `neighborhood` varchar(100) NOT NULL DEFAULT '0',
  `complement` varchar(100) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `address_admin`
--

INSERT INTO `address_admin` (`id_address`, `user_id`, `state`, `city`, `street`, `number_house`, `zip`, `neighborhood`, `complement`) VALUES
(1, 1, 'Minas Gerais', 'Viçosa', 'Rua  dos passos', '10', '36570-005', 'Fuad Chequer', 'Casa');

-- --------------------------------------------------------

--
-- Estrutura da tabela `address_republic`
--

CREATE TABLE `address_republic` (
  `id_address_republic` int(11) NOT NULL,
  `republic_id` int(11) NOT NULL,
  `longitude` varchar(50) DEFAULT NULL,
  `latitude` varchar(50) DEFAULT NULL,
  `street` varchar(50) NOT NULL,
  `number_republic` varchar(50) NOT NULL,
  `neighborhood` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `cep` varchar(50) NOT NULL,
  `complement` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `address_republic`
--

INSERT INTO `address_republic` (`id_address_republic`, `republic_id`, `longitude`, `latitude`, `street`, `number_republic`, `neighborhood`, `city`, `state`, `cep`, `complement`) VALUES
(38, 39, NULL, NULL, 'Milton Bandeira', '311', 'Centro', 'Viçosa', 'MG', '36570 - 005', 'Loja'),
(81, 82, NULL, NULL, 'Rua dos Passos', '10', 'Centro', 'Viçosa', 'MG', '36570-005', 'Casa'),
(82, 83, NULL, NULL, 'Álvaro Góveia', '130', 'Centro', 'Viçosa', 'Minas gerais', '36570 - 027', 'Casa'),
(83, 84, NULL, NULL, '4554', '5454', '5454', '5454', '5454', '554', '5454'),
(84, 86, NULL, NULL, 'ph Rolfs', '111', 'Centro', 'Viçosa', 'MG', '36570-003', 'not');

-- --------------------------------------------------------

--
-- Estrutura da tabela `comments`
--

CREATE TABLE `comments` (
  `id_comments` int(11) NOT NULL,
  `id_republic` int(11) NOT NULL,
  `id_pessoa` int(11) NOT NULL,
  `message` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `date_comments` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `comments`
--

INSERT INTO `comments` (`id_comments`, `id_republic`, `id_pessoa`, `message`, `date_comments`) VALUES
(1, 39, 1, 'Mensagem Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vestibulum, sem ut sollicitudin consectetur, augue diam ornare massa, ac vehicula leo turpis eget purus. Nunc pellentesque vestibulum mauris, eget suscipit mauris imperdiet vel. Nulla et massa metus. Nam porttitor quam eget ante elementum consectetur. Aenean ac nisl et nulla placerat suscipit eu a mauris. Curabitur quis augue condimentum, varius mi in, ultricies velit. Suspendisse potenti.', '2020-02-07 16:24:27'),
(3, 82, 1, 'MENSAGEM Quisque iaculis neque at dui cursus posuere. Sed tristique pharetra orci, eu malesuada ante tempus nec. Phasellus enim odio, facilisis et ante vel, tempor congue sapien. Praesent eget ligula eu libero cursus facilisis vel non arcu. Sed vitae quam enim.', '2020-02-07 16:24:40');

-- --------------------------------------------------------

--
-- Estrutura da tabela `comment_answer`
--

CREATE TABLE `comment_answer` (
  `id_ answer` int(11) NOT NULL,
  `id_pessoa` int(11) NOT NULL,
  `message` text NOT NULL,
  `date_comments` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id_comments` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `comment_answer`
--

INSERT INTO `comment_answer` (`id_ answer`, `id_pessoa`, `message`, `date_comments`, `id_comments`) VALUES
(1, 1, 'Resposta Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vestibulum, sem ut sollicitudin consectetur, augue diam ornare massa, ac vehicula leo turpis eget purus. Nunc pellentesque vestibulum mauris, eget suscipit mauris.', '2020-02-06 18:17:43', 1),
(2, 1, 'Resposta Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vestibulum, sem ut sollicitudin consectetur, augue diam ornare massa, ac vehicula leo turpis eget purus. Nunc pellentesque vestibulum mauris, eget suscipit mauris.', '2020-02-06 20:13:26', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `contact_republic`
--

CREATE TABLE `contact_republic` (
  `id_contact_republic` int(11) NOT NULL,
  `republic_id` int(11) NOT NULL,
  `facebook` tinytext NOT NULL,
  `youtube` tinytext NOT NULL,
  `instagram` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `contact_republic`
--

INSERT INTO `contact_republic` (`id_contact_republic`, `republic_id`, `facebook`, `youtube`, `instagram`) VALUES
(37, 39, 'https://www.facebook.com/InfoCept.graphics/?eid=ARD8w_OCfRzWgUg4zCKkbcR-3ZdyRUy8XvoSSC9op70XUXapKCZCHzHmB-1CUQnLxVyyWuc9u1AQOBAY', 'not', 'not'),
(80, 82, 'teste', 'not', 'not'),
(81, 83, 'not', 'not', 'not'),
(82, 84, 'not', 'not', 'not'),
(83, 86, 'not', 'not', 'not');

-- --------------------------------------------------------

--
-- Estrutura da tabela `facilities`
--

CREATE TABLE `facilities` (
  `id_facilities` int(11) NOT NULL,
  `republic_id` int(11) NOT NULL,
  `facilities_options_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `facilities`
--

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
(73, 83, 13),
(74, 84, 1),
(75, 84, 6),
(76, 84, 7),
(77, 84, 8),
(78, 84, 10),
(79, 84, 13),
(80, 84, 15),
(81, 86, 1),
(82, 86, 3),
(83, 86, 4),
(84, 86, 5),
(85, 86, 6),
(86, 86, 7),
(87, 86, 10);

-- --------------------------------------------------------

--
-- Estrutura da tabela `facilities_options`
--

CREATE TABLE `facilities_options` (
  `id_facilities_options` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Wifi, sauna, piscina...';

--
-- Extraindo dados da tabela `facilities_options`
--

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

-- --------------------------------------------------------

--
-- Estrutura da tabela `img_republic`
--

CREATE TABLE `img_republic` (
  `id_img_republic` int(11) NOT NULL,
  `republic_id` int(11) NOT NULL,
  `way` tinytext NOT NULL,
  `subtitle` tinytext
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `img_republic`
--

INSERT INTO `img_republic` (`id_img_republic`, `republic_id`, `way`, `subtitle`) VALUES
(21, 39, 'assets/img/republic/República InfoCept/logo-1.png', 'teste.teste'),
(22, 39, 'assets/img/republic/República InfoCept/logo-3.png', '123455'),
(24, 82, 'assets/img/republic/Republica Naja/04.jpg', 'Imagem1'),
(25, 82, 'assets/img/republic/Republica Naja/02_b.jpg', 'Imagem 2'),
(26, 83, 'assets/img/republic/Casa do Estudante/screenshot_2019-08-29_frases_de_nutricionista_-_pesquisa_google1.png', 'Teste'),
(27, 84, 'assets/img/republic/teste/whatsapp_image_2019-09-03_at_13.18.52.jpeg', '545454'),
(28, 83, 'assets/img/republic/Casa do Estudante/screenshot_2019-08-29_frases_de_nutricionista_-_pesquisa_google1.png', 'Teste'),
(29, 86, 'assets/img/republic/Só para melhores/vicosa.jpeg', 'Uma bela vista');

-- --------------------------------------------------------

--
-- Estrutura da tabela `republic`
--

CREATE TABLE `republic` (
  `id_republic` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL COMMENT 'Mista, masculina, feminina ...',
  `culture` tinytext NOT NULL COMMENT 'Estilo da republica',
  `property_type` varchar(50) NOT NULL COMMENT 'apartamento, casa ...',
  `verified` varchar(50) NOT NULL DEFAULT '0' COMMENT 'republica foi verificada por nossa equipe',
  `residents` int(11) NOT NULL COMMENT 'numero de moradores',
  `stars` varchar(100) DEFAULT '5' COMMENT 'Estrelas',
  `qtd_rooms` int(11) DEFAULT NULL,
  `registration date` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `republic`
--

INSERT INTO `republic` (`id_republic`, `user_id`, `name`, `category`, `culture`, `property_type`, `verified`, `residents`, `stars`, `qtd_rooms`, `registration date`) VALUES
(39, 1, 'República InfoCept', 'Masculina', 'Imprimir é nossa razão de viver !!! festas', 'Apartamento', '1', 3, '5', 2, '2019-12-04 07:26:58'),
(82, 1, 'Republica Naja', 'Feminina', 'Escola de Informática, festas', 'Sítio / Chácara', '0', 4, '5', 2, '2019-12-04 08:07:25'),
(83, 1, 'Casa do Estudante', 'Mista', 'República Familiar, voltada apenas para estudos.', 'Casa', '0', 5, '5', 5, '2019-09-02 12:34:55'),
(84, 1, 'teste', 'Mista', '5454  festas', 'Casa', '0', 454, '5', 4, '2019-12-04 07:32:26'),
(86, 1, 'Só para melhores', 'LGBT', 'Se for para fazer festa, que seja a festa', 'Apartamento', '0', 3, '5', 4, '2020-02-05 08:06:22');

-- --------------------------------------------------------

--
-- Estrutura da tabela `republic_room`
--

CREATE TABLE `republic_room` (
  `id_republic_room` int(11) NOT NULL,
  `republic_id` int(11) NOT NULL,
  `room_type` varchar(50) NOT NULL,
  `description` varchar(50) DEFAULT NULL,
  `monthly_expense` double DEFAULT NULL,
  `vacancies` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `republic_room`
--

INSERT INTO `republic_room` (`id_republic_room`, `republic_id`, `room_type`, `description`, `monthly_expense`, `vacancies`) VALUES
(2, 39, 'Individual', 'O quarto que você procurava, aqui', 250, 1),
(3, 39, 'Compartilhado', 'O quarto que você procurava 3', 450, 1),
(4, 82, 'Compartilhado', 'O quarto que você procurava !!!', 450, 0),
(5, 82, 'Individual', 'O lugar certo para você !!!', 420, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `social_information`
--

CREATE TABLE `social_information` (
  `id_social_information` int(11) NOT NULL,
  `user_id` int(11) NOT NULL DEFAULT '0',
  `facebook` varchar(100) NOT NULL,
  `instagram` varchar(100) NOT NULL,
  `whatsapp` varchar(50) NOT NULL,
  `another_phone` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `social_information`
--

INSERT INTO `social_information` (`id_social_information`, `user_id`, `facebook`, `instagram`, `whatsapp`, `another_phone`) VALUES
(1, 1, 'https://www.facebook.com/profile.php?id=100011726263239', 'not', '(31) 99808-1171', 'not');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tags_republic`
--

CREATE TABLE `tags_republic` (
  `id_tags` int(11) NOT NULL,
  `republic_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tags_republic`
--

INSERT INTO `tags_republic` (`id_tags`, `republic_id`, `name`) VALUES
(16, 39, 'Gráfico'),
(17, 39, 'UFV'),
(18, 39, 'Viçosa'),
(19, 82, 'Naja'),
(20, 82, ' Viçosa'),
(21, 82, ' UFV'),
(22, 83, 'UFV'),
(23, 83, 'Festas'),
(24, 83, ' Festas'),
(25, 84, 'Festas'),
(26, 86, 'UFV');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `name` varchar(50) NOT NULL DEFAULT '0',
  `login` varchar(100) NOT NULL,
  `password` varchar(32) NOT NULL,
  `img_profile` tinytext,
  `register_data` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id_user`, `name`, `login`, `password`, `img_profile`, `register_data`) VALUES
(1, 'Victor Santos', 'victor@infocept.com.br', '446ea918b7cca21fe6a442315110610a', 'assets/img/administrator/avatar_default.png', '2019-08-26 08:25:27');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `address_admin`
--
ALTER TABLE `address_admin`
  ADD PRIMARY KEY (`id_address`);

--
-- Índices para tabela `address_republic`
--
ALTER TABLE `address_republic`
  ADD PRIMARY KEY (`id_address_republic`);

--
-- Índices para tabela `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id_comments`);

--
-- Índices para tabela `comment_answer`
--
ALTER TABLE `comment_answer`
  ADD PRIMARY KEY (`id_ answer`);

--
-- Índices para tabela `contact_republic`
--
ALTER TABLE `contact_republic`
  ADD PRIMARY KEY (`id_contact_republic`);

--
-- Índices para tabela `facilities`
--
ALTER TABLE `facilities`
  ADD PRIMARY KEY (`id_facilities`);

--
-- Índices para tabela `facilities_options`
--
ALTER TABLE `facilities_options`
  ADD PRIMARY KEY (`id_facilities_options`);

--
-- Índices para tabela `img_republic`
--
ALTER TABLE `img_republic`
  ADD PRIMARY KEY (`id_img_republic`);

--
-- Índices para tabela `republic`
--
ALTER TABLE `republic`
  ADD PRIMARY KEY (`id_republic`);

--
-- Índices para tabela `republic_room`
--
ALTER TABLE `republic_room`
  ADD PRIMARY KEY (`id_republic_room`);

--
-- Índices para tabela `social_information`
--
ALTER TABLE `social_information`
  ADD PRIMARY KEY (`id_social_information`);

--
-- Índices para tabela `tags_republic`
--
ALTER TABLE `tags_republic`
  ADD PRIMARY KEY (`id_tags`);

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `address_admin`
--
ALTER TABLE `address_admin`
  MODIFY `id_address` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `address_republic`
--
ALTER TABLE `address_republic`
  MODIFY `id_address_republic` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT de tabela `comments`
--
ALTER TABLE `comments`
  MODIFY `id_comments` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `comment_answer`
--
ALTER TABLE `comment_answer`
  MODIFY `id_ answer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `contact_republic`
--
ALTER TABLE `contact_republic`
  MODIFY `id_contact_republic` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT de tabela `facilities`
--
ALTER TABLE `facilities`
  MODIFY `id_facilities` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT de tabela `facilities_options`
--
ALTER TABLE `facilities_options`
  MODIFY `id_facilities_options` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de tabela `img_republic`
--
ALTER TABLE `img_republic`
  MODIFY `id_img_republic` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT de tabela `republic`
--
ALTER TABLE `republic`
  MODIFY `id_republic` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT de tabela `republic_room`
--
ALTER TABLE `republic_room`
  MODIFY `id_republic_room` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `social_information`
--
ALTER TABLE `social_information`
  MODIFY `id_social_information` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `tags_republic`
--
ALTER TABLE `tags_republic`
  MODIFY `id_tags` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
