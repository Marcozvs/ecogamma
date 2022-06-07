-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 07, 2022 at 02:05 PM
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
  `likes` int(15) NOT NULL COMMENT 'quantidade de likes',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `noticia`
--

INSERT INTO `noticia` (`id`, `titulo`, `data_noticia`, `texto`, `foto`, `likes`) VALUES
(1, 'Amazonia', '0000-00-00', 'Inserindo amazonia', 'barra1.jpg', 0),
(2, 'Leandro destroi parque publico', '0000-00-00', '<style>background: red;</style>', 'barra2.jpg', 0),
(3, 'Mandanga joga lixo na rua', '0000-00-00', 'Suspeito jogou lixo na rua, mandar prender!!!', 'tela_madeira.PNG', 0),
(4, 'Gustavo ramela no fut ', '0000-00-00', 'Gustavo chora pra jogar o fute, depois fala que é bom', 'tela_metal.PNG', 0),
(5, 'Julia surta com o video dela', '0000-00-00', 'Ela vem do nada e fala que o video nao rola, \"Eu vou surtaaar\" diz nas palavras dela.', '', 0),
(6, 'Julia surta com o video dela', '0000-00-00', 'Ela vem do nada e fala que o video nao rola, \"Eu vou surtaaar\" diz nas palavras dela.', 'tela_metal.PNG', 0),
(7, 'Julia surta com o video dela', '0000-00-00', 'Ela vem do nada e fala que o video nao rola, \"Eu vou surtaaar\" diz nas palavras dela.', 'tela_metal.PNG', 0),
(8, 'Julia surta com o video dela', '0000-00-00', 'Ela vem do nada e fala que o video nao rola, \"Eu vou surtaaar\" diz nas palavras dela.', 'tela_metal.PNG', 0),
(9, 'Julia surta com o video dela', '0000-00-00', 'Ela vem do nada e fala que o video nao rola, \"Eu vou surtaaar\" diz nas palavras dela.', 'tela_metal.PNG', 0),
(10, 'Mandanga joga lixo na rua', '0000-00-00', 'acsdcasdcadscasdc', '', 0),
(11, 'Mandanga joga lixo na rua', '2022-06-01', 'acsdcasdcadscasdc', '', 0),
(12, 'badfbvasdvcasdva', '0000-00-00', 'sdvasdvasdv', '', 0),
(13, 'Testantdoi', '2022-06-01', 'asdcasdcasdcsadcasd', '', 0),
(14, 'Mandanga joga lixo na rua', '2022-06-01', 'dcasdcasdcasdcasdca', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id de cada um dos user',
  `token` tinyint(1) DEFAULT '0' COMMENT 'token de adm',
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
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id`, `token`, `nome`, `sobrenome`, `email`, `senha`, `senhaC`, `dataN`, `genero`, `numero`, `pais`, `estado`, `cidade`, `profissao`, `foto`, `descricao`) VALUES
(1, 0, 'João', 'Bobão', 'jao@gmail.com', 'jao', 'jao', '1992-06-10', 'Alfa', '111111111', 'Ilhas Mcdonald', 'São Paulo', 'São Paulo', 'Fazedor de Site', 'naruto.png', 'Todos têm algo em comum. Nenhum é tão bom quanto eu.'),
(4, 1, 'Marcos', 'Vinico', 'teste@gmail.com', '123', '123', '1975-12-11', 'transgenero', '11111111', 'Brasil', 'sp', 'Caieras', 'LadrÃ£o de CÃ³digo', '', ''),
(10, 0, 'Ludovisko', 'Mariachi', 'luludo@gmail.com', 'portuga', 'portuga', '2022-06-03', 'transgenero', '110390399', 'Brasil', 'mt', 'SÃ£o Paulo', 'PortuguÃªs', '', ''),
(11, 0, 'zululuga', 'leandrovisk', 'teste2@gmail.com', 'jjj', 'jjj', '2022-06-10', 'transgenero', '1198940292', 'Brasil', 'pb', 'Sampa', 'Sampaleiro', '', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
