-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 12-Jun-2022 às 00:15
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
  `likes` int(20) NOT NULL DEFAULT '0',
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
  `likes` int(20) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_Post`),
  KEY `user_post` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `posts`
--

INSERT INTO `posts` (`id_Post`, `id`, `foto`, `nome`, `sobrenome`, `profissao`, `data_Post`, `texto_Post`, `imagem_Post`, `likes`) VALUES
(13, 14, 'perfil_default.svg', 'Marcos', 'Vinicius', 'Estudante de Medicina na USP', '2022-06-11', 'OlÃ¡ Pessoas do ecogamma!', '', 0),
(14, 15, 'perfil_default.svg', 'Leandro', 'Silva', 'Staff Ecogamma', '2022-06-11', 'Ecogamma estÃ¡ finalmente em estÃ¡gio BETA!', '', 0),
(15, 15, 'perfil_default.svg', 'Leandro', 'Silva', 'Staff Ecogamma', '2022-06-12', 'opa', '', 0),
(16, 15, 'perfil_default.svg', 'Leandro', 'Silva', 'Staff Ecogamma', '2022-06-12', 'opa', '', 0),
(17, 15, 'perfil_default.svg', 'Leandro', 'Silva', 'Staff Ecogamma', '2022-06-12', 'opa', '', 0),
(18, 15, 'perfil_default.svg', 'Leandro', 'Silva', 'Staff Ecogamma', '2022-06-12', 'opa', '', 0),
(19, 15, 'perfil_default.svg', 'Leandro', 'Silva', 'Staff Ecogamma', '2022-06-12', 'tÃ¡ indo', '', 0);

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
  `foto` varchar(255) NOT NULL,
  `descricao` varchar(255) NOT NULL COMMENT 'Descricao que aparece no perfil do usuário',
  `amigos` int(20) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `token`, `nome`, `sobrenome`, `email`, `senha`, `senhaC`, `dataN`, `genero`, `numero`, `estado`, `cidade`, `profissao`, `foto`, `descricao`, `amigos`) VALUES
(14, 1, 'Marcos', 'Vinicius', 'teste@gmail.com', '123', '123', '2023-11-16', 'masculinoCisgÃªnero', '', 'am', 'Caieras', 'Estudante de Medicina na USP', '', '', 0),
(15, 0, 'Leandro', 'Silva', 'leandrosdc@outlook.com', 'leandro1', 'leandro1', '2004-11-13', 'masculinoCisgÃªnero', '11979609142', 'sp', 'SÃ£o Paulo', 'Staff Ecogamma', '', '', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
