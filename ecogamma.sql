-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 05, 2022 at 08:46 PM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecogamma`
--

-- --------------------------------------------------------

--
-- Table structure for table `noticia`
--

DROP TABLE IF EXISTS `noticia`;
CREATE TABLE IF NOT EXISTS `noticia` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `data_noticia` date NOT NULL,
  `texto` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `foto` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `noticia`
--

INSERT INTO `noticia` (`id`, `titulo`, `data_noticia`, `texto`, `foto`) VALUES
(1, 'Amazonia', '0000-00-00', 'Inserindo amazonia', 'barra1.jpg'),
(2, 'Leandro destroi parque publico', '0000-00-00', '<style>background: red;</style>', 'barra2.jpg'),
(3, 'Mandanga joga lixo na rua', '0000-00-00', 'Suspeito jogou lixo na rua, mandar prender!!!', 'tela_madeira.PNG'),
(4, 'Gustavo ramela no fut ', '0000-00-00', 'Gustavo chora pra jogar o fute, depois fala que é bom', 'tela_metal.PNG'),
(5, 'Julia surta com o video dela', '0000-00-00', 'Ela vem do nada e fala que o video nao rola, \"Eu vou surtaaar\" diz nas palavras dela.', ''),
(6, 'Julia surta com o video dela', '0000-00-00', 'Ela vem do nada e fala que o video nao rola, \"Eu vou surtaaar\" diz nas palavras dela.', 'tela_metal.PNG'),
(7, 'Julia surta com o video dela', '0000-00-00', 'Ela vem do nada e fala que o video nao rola, \"Eu vou surtaaar\" diz nas palavras dela.', 'tela_metal.PNG'),
(8, 'Julia surta com o video dela', '0000-00-00', 'Ela vem do nada e fala que o video nao rola, \"Eu vou surtaaar\" diz nas palavras dela.', 'tela_metal.PNG'),
(9, 'Julia surta com o video dela', '0000-00-00', 'Ela vem do nada e fala que o video nao rola, \"Eu vou surtaaar\" diz nas palavras dela.', 'tela_metal.PNG'),
(10, 'Mandanga joga lixo na rua', '0000-00-00', 'acsdcasdcadscasdc', ''),
(11, 'Mandanga joga lixo na rua', '2022-06-01', 'acsdcasdcadscasdc', ''),
(12, 'badfbvasdvcasdva', '0000-00-00', 'sdvasdvasdv', ''),
(13, 'Testantdoi', '2022-06-01', 'asdcasdcasdcsadcasd', ''),
(14, 'Mandanga joga lixo na rua', '2022-06-01', 'dcasdcasdcasdcasdca', '');

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `token` tinyint(1) DEFAULT NULL,
  `nome` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `senha` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `numero` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `estado` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `foto` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `nascimento` date NOT NULL,
  `profissao` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`id`, `token`, `nome`, `senha`, `email`, `numero`, `estado`, `foto`, `nascimento`, `profissao`) VALUES
(1, NULL, 'teste', 'teste', 'teste@gmail.com', '1213243543', 'teste', 'naruto.png', '2022-06-15', 'teste');

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id de cada um dos user',
  `token` tinyint(1) NOT NULL COMMENT 'token de adm',
  `nome` varchar(80) COLLATE utf8_unicode_ci NOT NULL COMMENT 'nome',
  `sobrenome` varchar(80) COLLATE utf8_unicode_ci NOT NULL COMMENT 'sobrenome',
  `email` varchar(80) COLLATE utf8_unicode_ci NOT NULL COMMENT 'email do usuário',
  `senha` varchar(45) COLLATE utf8_unicode_ci NOT NULL COMMENT 'senha',
  `senhaC` varchar(45) COLLATE utf8_unicode_ci NOT NULL COMMENT 'senha confirmada',
  `dataN` date NOT NULL COMMENT 'data de nascimento',
  `genero` varchar(30) COLLATE utf8_unicode_ci NOT NULL COMMENT 'gênero do usuário\r\n(a gente tem lgbtqi+)',
  `numero` varchar(22) COLLATE utf8_unicode_ci NOT NULL,
  `pais` varchar(80) COLLATE utf8_unicode_ci NOT NULL COMMENT 'pais',
  `estado` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `cidade` varchar(80) COLLATE utf8_unicode_ci NOT NULL COMMENT 'cidade',
  `profissao` varchar(120) COLLATE utf8_unicode_ci NOT NULL COMMENT 'profissão/area de atuação',
  `foto` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `descricao` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Descricao que aparece no perfil do usuário',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id`, `token`, `nome`, `sobrenome`, `email`, `senha`, `senhaC`, `dataN`, `genero`, `numero`, `pais`, `estado`, `cidade`, `profissao`, `foto`, `descricao`) VALUES
(1, 1, 'João', 'Bobão', 'jao@gmail.com', 'jao', 'jao', '1992-06-10', 'Alfa', '111111111', 'Ilhas Mcdonald', 'São Paulo', 'São Paulo', 'Fazedor de Site', 'naruto.png', 'Todos têm algo em comum. Nenhum é tão bom quanto eu.');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
