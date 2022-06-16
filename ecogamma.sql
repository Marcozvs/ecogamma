-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 16-Jun-2022 às 04:29
-- Versão do servidor: 5.7.36
-- versão do PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `ecogamma`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `amigos`
--

DROP TABLE IF EXISTS `amigos`;
CREATE TABLE IF NOT EXISTS `amigos` (
  `id_Amizade` int(11) NOT NULL COMMENT 'id da amizade, só serve como identificador',
  `id_UserAsk` int(11) NOT NULL COMMENT 'id do usuário que enviou o pedido',
  `id_UserAcc` int(11) NOT NULL COMMENT 'id do usuário que aceitou o pedido',
  `pendente` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'aceitação pendente (true/false)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `comentarios`
--

DROP TABLE IF EXISTS `comentarios`;
CREATE TABLE IF NOT EXISTS `comentarios` (
  `id_Comentario` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id do comentario',
  `id_Post` int(11) NOT NULL COMMENT 'id do post em que esta o comentario',
  `id_User` int(11) NOT NULL COMMENT 'id do usuário que está comentando',
  `data_Comentario` date NOT NULL COMMENT 'data em que o comentario foi feito',
  `nome_User` varchar(80) COLLATE utf8_unicode_ci NOT NULL COMMENT 'nome do usuario que comentou',
  `sobrenome_User` varchar(80) COLLATE utf8_unicode_ci NOT NULL COMMENT 'sobrenome do usuario que comentou',
  `profissao_User` varchar(120) COLLATE utf8_unicode_ci NOT NULL COMMENT 'profissao do usuario que comentou',
  `texto_Comentario` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'texto do comentario',
  `likes_Comentario` int(11) NOT NULL DEFAULT '0' COMMENT 'likes/curtidas do comentario',
  PRIMARY KEY (`id_Comentario`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `comentarios`
--

INSERT INTO `comentarios` (`id_Comentario`, `id_Post`, `id_User`, `data_Comentario`, `nome_User`, `sobrenome_User`, `profissao_User`, `texto_Comentario`, `likes_Comentario`) VALUES
(1, 35, 14, '2022-06-16', 'Marcos', 'Vinicius', 'Estudante de Medicina na USP', 'Enviar', 0),
(2, 35, 14, '2022-06-16', 'Marcos', 'Vinicius', 'Estudante de Medicina na USP', 'golfe2', 0),
(3, 35, 14, '2022-06-16', 'Marcos', 'Vinicius', 'Estudante de Medicina na USP', 'golfe2', 0),
(4, 35, 14, '2022-06-16', 'Marcos', 'Vinicius', 'Estudante de Medicina na USP', 'golfe2', 0),
(5, 36, 14, '2022-06-16', 'Marcos', 'Vinicius', 'Estudante de Medicina na USP', 'golfe', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `curtidas`
--

DROP TABLE IF EXISTS `curtidas`;
CREATE TABLE IF NOT EXISTS `curtidas` (
  `id_Curtida` int(11) NOT NULL AUTO_INCREMENT,
  `id_Elemento` int(11) NOT NULL,
  `id_User` int(11) NOT NULL,
  PRIMARY KEY (`id_Curtida`)
) ENGINE=InnoDB AUTO_INCREMENT=79 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `eventos`
--

DROP TABLE IF EXISTS `eventos`;
CREATE TABLE IF NOT EXISTS `eventos` (
  `id_Evento` int(11) NOT NULL AUTO_INCREMENT,
  `id` int(11) NOT NULL,
  `titulo_Evento` varchar(35) COLLATE utf8_unicode_ci NOT NULL,
  `texto_Evento` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `imagem_Evento` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `link_Evento` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `likes_Evento` int(20) NOT NULL,
  PRIMARY KEY (`id_Evento`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `noticias`
--

DROP TABLE IF EXISTS `noticias`;
CREATE TABLE IF NOT EXISTS `noticias` (
  `id_Noticia` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id próprio da notícia',
  `id` int(11) NOT NULL COMMENT 'id do usuário que postou',
  `foto` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nome` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `sobrenome` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `profissao` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `titulo_Noticia` varchar(16) COLLATE utf8_unicode_ci NOT NULL,
  `texto_Noticia` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `imagem_Noticia` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `likes_Noticia` int(20) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_Noticia`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `posts`
--

DROP TABLE IF EXISTS `posts`;
CREATE TABLE IF NOT EXISTS `posts` (
  `id_Post` int(11) NOT NULL AUTO_INCREMENT,
  `id` int(11) NOT NULL,
  `foto` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nome` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `sobrenome` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `profissao` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `data_Post` date NOT NULL,
  `texto_Post` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `imagem_Post` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `likes_Post` int(20) NOT NULL DEFAULT '0',
  `comentarios_Post` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_Post`),
  KEY `user_post` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `posts`
--

INSERT INTO `posts` (`id_Post`, `id`, `foto`, `nome`, `sobrenome`, `profissao`, `data_Post`, `texto_Post`, `imagem_Post`, `likes_Post`, `comentarios_Post`) VALUES
(33, 14, 'perfil_default.svg', 'Marcos', 'Vinicius', 'Estudante de Medicina na USP', '2022-06-16', 'teste', '', 0, 0),
(34, 14, 'perfil_default.svg', 'Marcos', 'Vinicius', 'Estudante de Medicina na USP', '2022-06-16', 'teste', '', 0, 0),
(35, 14, 'perfil_default.svg', 'Marcos', 'Vinicius', 'Estudante de Medicina na USP', '2022-06-16', 'teste', '', 0, 0),
(36, 14, 'perfil_default.svg', 'Marcos', 'Vinicius', 'Estudante de Medicina na USP', '2022-06-16', 'O texto dos comentÃ¡rios tÃ¡ incomodando? Fiz um novo menu no banir :D', '', 0, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `salvos`
--

DROP TABLE IF EXISTS `salvos`;
CREATE TABLE IF NOT EXISTS `salvos` (
  `id_Salvo` int(11) NOT NULL AUTO_INCREMENT,
  `id_Post` int(11) NOT NULL,
  `id_User` int(11) NOT NULL,
  PRIMARY KEY (`id_Salvo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id de cada um dos user',
  `token` tinyint(1) DEFAULT '0' COMMENT 'token de adm',
  `nome` varchar(80) NOT NULL COMMENT 'nome',
  `sobrenome` varchar(80) NOT NULL COMMENT 'sobrenome',
  `email` varchar(80) NOT NULL COMMENT 'email do usuário',
  `senha` varchar(45) NOT NULL COMMENT 'senha',
  `senhaC` varchar(45) NOT NULL COMMENT 'senha confirmada',
  `dataN` date NOT NULL COMMENT 'data de nascimento',
  `genero` varchar(30) NOT NULL COMMENT 'gênero do usuário\r\n(a gente tem lgbtqi+)',
  `numero` varchar(22) NOT NULL,
  `estado` varchar(60) NOT NULL,
  `cidade` varchar(80) NOT NULL COMMENT 'cidade',
  `profissao` varchar(120) NOT NULL COMMENT 'profissão/area de atuação',
  `mdEscuro` tinyint(4) NOT NULL DEFAULT '0',
  `foto` varchar(255) NOT NULL,
  `descricao` varchar(255) NOT NULL COMMENT 'Descricao que aparece no perfil do usuário',
  `amigos` int(20) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `token`, `nome`, `sobrenome`, `email`, `senha`, `senhaC`, `dataN`, `genero`, `numero`, `estado`, `cidade`, `profissao`, `mdEscuro`, `foto`, `descricao`, `amigos`) VALUES
(14, 1, 'Marcos', 'Vinicius', 'teste@gmail.com', '123', '123', '2023-11-16', 'masculinoCisgÃªnero', '', 'am', 'Caieras', 'Estudante de Medicina na USP', 0, '', '', 0),
(15, 0, 'Leandro', 'Silva', 'leandrosdc@outlook.com', 'leandro1', 'leandro1', '2004-11-13', 'masculinoCisgÃªnero', '11979609142', 'sp', 'SÃ£o Paulo', 'Staff Ecogamma', 0, '', '', 0),
(17, 0, 'Mandanga', 'SebastiÃ£o', 'mandanga@gmail.com', '123', '123', '2005-03-23', 'masculinoCisgÃªnero', '111111111', 'rj', 'Rio de Janeiro', 'Jogador de Futebol', 0, '', '', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
