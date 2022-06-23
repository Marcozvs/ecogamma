-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 23-Jun-2022 às 13:51
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
  `id_Amizade` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id da amizade, só serve como identificador',
  `id_UserAsk` int(11) NOT NULL COMMENT 'id do usuário que enviou o pedido',
  `id_UserAcc` int(11) NOT NULL COMMENT 'id do usuário que aceitou o pedido',
  `pendente` tinyint(1) NOT NULL DEFAULT '1' COMMENT 'aceitação pendente (true/false)',
  PRIMARY KEY (`id_Amizade`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `amigos`
--

INSERT INTO `amigos` (`id_Amizade`, `id_UserAsk`, `id_UserAcc`, `pendente`) VALUES
(4, 15, 14, 0),
(8, 17, 14, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `chat`
--

DROP TABLE IF EXISTS `chat`;
CREATE TABLE IF NOT EXISTS `chat` (
  `id_Mensagem` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id da mensagem para identificação',
  `id_User` int(11) NOT NULL COMMENT 'id do usuário que enviou a mensagem',
  `Mensagem` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'mensagem que foi envida',
  PRIMARY KEY (`id_Mensagem`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `comentarios`
--

INSERT INTO `comentarios` (`id_Comentario`, `id_Post`, `id_User`, `data_Comentario`, `nome_User`, `sobrenome_User`, `profissao_User`, `texto_Comentario`, `likes_Comentario`) VALUES
(4, 5, 23, '2022-06-23', 'Vanessa', 'Vitoria', '[STAFF] Pesquisadora Ambiental', 'Que legal Marcos!', 0);

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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `eventos`
--

DROP TABLE IF EXISTS `eventos`;
CREATE TABLE IF NOT EXISTS `eventos` (
  `id_Evento` int(11) NOT NULL AUTO_INCREMENT,
  `id` int(11) NOT NULL,
  `data_Evento` date NOT NULL COMMENT 'data de publicação',
  `titulo_Evento` varchar(35) COLLATE utf8_unicode_ci NOT NULL,
  `texto_Evento` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `imagem_Evento` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `link_Evento` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `likes_Evento` int(20) NOT NULL,
  PRIMARY KEY (`id_Evento`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `imagens`
--

DROP TABLE IF EXISTS `imagens`;
CREATE TABLE IF NOT EXISTS `imagens` (
  `id_Imagem` int(11) NOT NULL AUTO_INCREMENT,
  `tipo_Elemento` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `id_Elemento` int(11) NOT NULL,
  `id_User` int(11) NOT NULL,
  `imagem` longblob NOT NULL,
  `imagem_Nome` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `imagem_Tipo` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `imagem_Tamanho` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_Imagem`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `noticias`
--

DROP TABLE IF EXISTS `noticias`;
CREATE TABLE IF NOT EXISTS `noticias` (
  `id_Noticia` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id próprio da notícia',
  `id` int(11) NOT NULL COMMENT 'id do usuário que postou',
  `data_Noticia` date NOT NULL,
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
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `posts`
--

INSERT INTO `posts` (`id_Post`, `id`, `foto`, `nome`, `sobrenome`, `profissao`, `data_Post`, `texto_Post`, `imagem_Post`, `likes_Post`, `comentarios_Post`) VALUES
(5, 19, 'perfil_default.svg', 'Marcos', 'Vinicius', '[STAFF] Programador Full-Stack', '2022-06-23', 'Estamos todos unidos na luta contra a homofobia!', 'dba152a78f7db4f8fb31602e692e8aa1.png', 0, 1),
(6, 20, 'perfil_default.svg', 'Mandanga', 'SebastiÃ£o', '[STAFF] Designer', '2022-06-23', 'Vamos ajudar o Ecomma a crescer cada vez mais e realizar muito mais aÃ§Ãµes!', '67cb9340315314136515bb59dbb35d4d.png', 0, 0),
(9, 25, 'perfil_default.svg', 'Richard', 'Conde', '[STAFF] Pesquisador Ambiental', '2022-06-23', 'Eu sempre jogo meu copo descartÃ¡vel no lugar certo, e vocÃªs?', '', 0, 0);

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
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `token`, `nome`, `sobrenome`, `email`, `senha`, `senhaC`, `dataN`, `genero`, `numero`, `estado`, `cidade`, `profissao`, `mdEscuro`, `foto`, `descricao`, `amigos`) VALUES
(19, 1, 'Marcos', 'Vinicius', 'marcos@gmail.com', '123', '123', '2002-07-23', 'masculinoCisgÃªnero', '1128384724', 'sp', 'Caieiras', '[STAFF] Programador Full-Stack', 0, '', 'Eco Ã© agro, Eco Ã© tec, Eco Ã© tudo!', 0),
(20, 1, 'Mandanga', 'SebastiÃ£o', 'mandanga@gmail.com', '123', '123', '2004-05-12', 'masculinoCisgÃªnero', '1128384724', 'rj', 'Rio de Janeiro', '[STAFF] Designer', 0, 'perfil_default.svg', 'Eco Ã© agro, Eco Ã© tec, Eco Ã© tudo!', 0),
(21, 1, 'Leandro', 'Silva', 'leandro@gmail.com', '123', '123', '2004-11-13', 'masculinoCisgÃªnero', '1128384724', 'sp', 'SÃ£o Paulo', '[STAFF] Programador Back-End', 0, 'perfil_default.svg', 'Eco Ã© agro, Eco Ã© tec, Eco Ã© tudo!', 0),
(22, 1, 'Rafael', 'Lopez', 'rafael@gmail.com', '123', '123', '2003-12-09', 'masculinoCisgÃªnero', '112232323', 'sp', 'Guarulhos', '[STAFF] Designer', 0, 'perfil_default.svg', 'Eco Ã© agro, Eco Ã© tec, Eco Ã© tudo!', 0),
(23, 1, 'Vanessa', 'Vitoria', 'vanessa@gmail.com', '123', '123', '2002-02-11', 'transgenero', '1128384724', 'sp', 'SÃ£o Paulo', '[STAFF] Pesquisadora Ambiental', 0, 'perfil_default.svg', 'Eco Ã© agro, Eco Ã© tec, Eco Ã© tudo!', 0),
(24, 1, 'Samyra', 'Elias', 'samyra@gmail.com', '123', '123', '2002-02-11', 'transgenero', '1128384724', 'sp', 'SÃ£o Paulo', '[STAFF] Pesquisadora Ambiental', 0, 'perfil_default.svg', 'Eco Ã© agro, Eco Ã© tec, Eco Ã© tudo!', 0),
(25, 1, 'Richard', 'Conde', 'richard@gmail.com', '123', '123', '2004-03-01', 'masculinoCisgÃªnero', '1128384724', 'sp', 'SÃ£o Paulo', '[STAFF] Pesquisador Ambiental', 0, 'perfil_default.svg', 'Eco Ã© agro, Eco Ã© tec, Eco Ã© tudo!', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
